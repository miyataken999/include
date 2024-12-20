<?php



function kinsa_seisei($Eoc_takuhai_id='',$content='',$mainasu_price=0){
// $Eoc_takuhai_id = $values["Eoc_takuhai_id"];
// $content = $values["content"];

	if(($Eoc_takuhai_id != '') AND ($content != '')){
		//追加したイベント内容のマスタデータを取得
		$sql = "SELECT * FROM mst_Eoc_received_event_contents WHERE id='{$content}' limit 1";
		$rs = CustomQuery($sql);
		$data = db_fetch_array($rs);
		$gold_property = $data["gold_property"];

		//マスタに金性があれば
		if($gold_property != ''){
			//宅配取引データから、顧客SEQ取得
			$eoc_sql = "SELECT ecc_id, type_selection, insurance_speed FROM Eoc_takuhai WHERE id='{$Eoc_takuhai_id}' limit 1";
			$eoc_rs = CustomQuery($eoc_sql);
			$eoc_data = db_fetch_array($eoc_rs);
			$ecc_id = $eoc_data["ecc_id"];
			$type_selection = $eoc_data["type_selection"];
			$insurance_speed = $eoc_data["insurance_speed"];


			//この宅配取引IDで同じ金性の存在確認
			$shouhin_sql = "SELECT product_id FROM shouhin WHERE Eoc_takuhai_id='{$Eoc_takuhai_id}' AND  gold_property='{$gold_property}' limit 1";
			$shouhin_rs = CustomQuery($shouhin_sql);
			$shouhin_data = db_fetch_array($shouhin_rs);
			if($shouhin_data["product_id"] != ''){
				//存在する場合、なにもしない
				// print "金査すでにあるパターン";
			}else{
				//存在しない場合、マスタに基づき新規生成

				//いったん格納
				foreach ($data as $key => $value) {
					$$key = $value;
				}

				if($mainasu_price > 0){
					$mainasu_price = $mainasu_price*(-1);
					$price_per_gram = $mainasu_price;
					$price = $mainasu_price;
				}elseif((stristr($type_selection, "スピード")) AND ($insurance_speed == 'あり')){
					$price_per_gram = -370;
					$price = $price_per_gram;
				}

				$create_sql = "INSERT INTO shouhin(
						kinsa_flag,
						ecc_id,
						`status`,
						yahoo_sex,
						Eoc_takuhai_id,
						category_id,
						sub_category_id1,
						gold_property,
						Gram,
						unit,
						price_per_gram,
						price
						)VALUES(
						1,
						'{$ecc_id}',
						126,
						3,
						'{$Eoc_takuhai_id}',
						'{$category_id}',
						'{$sub_category_id1}',
						'{$gold_property}',
						'{$Gram}',
						'{$unit}',
						'{$price_per_gram}',
						'{$price}'
					)";
				// print $create_sql;
				CustomQuery($create_sql);

			}//新規生成 end


		}else{
			// print "金査生成なし";
		}


	}


}//end function
