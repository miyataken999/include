<?
// Description
// Occurs before record is updated
// Return true if you like to proceed with updating record, return false otherwise

// Parameters
// $values     - array of values to be written to the database.
//               To access specific field value use $values["FieldName"]
//               "dict" is an alternate name for this parameter.
// $where      - WHERE clause that points to the edited record. Example: ID=19
// $oldvalues  - array with existing field values. To access specific column value use
//               $oldvalues["FieldName"]
// $keys       - array of key column values that point to the edited record. To access
//               specific key column use $keys["KeyFieldName"]
// $message    - place the message to be displayed into this variable.
// $inline     - equals to true when the Inline Edit in process, false otherwise
// $pageObject - an object of Page class representing the current page



$Eoc_takuhai_id = $oldvalues["Eoc_takuhai_id"];
$content = $values["content"];
$event = $values["event"];


if(($Eoc_takuhai_id != '') AND ($content != '')){
	//追加したイベント内容のマスタデータを取得
	$sql = "SELECT * FROM mst_Eoc_received_event_contents WHERE id='{$content}' limit 1";
	$rs = CustomQuery($sql);
	$data = db_fetch_array($rs);
	$gold_property = $data["gold_property"];

	//マスタに金性があれば
	if($gold_property != ''){
		//宅配取引データから、顧客SEQ取得
		$eoc_sql = "SELECT ecc_id, insurance_kingaku, type_selection, insurance_speed FROM Eoc_takuhai WHERE id='{$Eoc_takuhai_id}' limit 1";
		$eoc_rs = CustomQuery($eoc_sql);
		$eoc_data = db_fetch_array($eoc_rs);
		$ecc_id = $eoc_data["ecc_id"];
		$insurance_kingaku = $eoc_data["insurance_kingaku"];
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

			if(($event == 10) AND ($insurance_kingaku > 0)){
				$insurance_kingaku = floor($insurance_kingaku*0.001);
				$mainasu_price = $insurance_kingaku*(-1);
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


