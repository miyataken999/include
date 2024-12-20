<?php
ini_set("display_errors",1);

/*

金地金・ダイヤ少量による ※規約第8条14項

取引IDに紐付いた商品にブランドIDが1つも無し、大カテが17,18,19,50,20,51,21,22,23（12は無視）、金額の従量（総額15万未満）

ブランド		ノンブランド	631
大カテ		宝飾系カテゴリのみ	17,18,19,50,20,51,21,22,23
買取額		0>150000

最終分岐
宅配タイプ		ベーシック
	計算	1500*1.08
宅配タイプ		スピード 若しくは 空
	計算	1000*1.08
*/



if($kokyaku != ''){


	//最終判断用のフラグ
	$syouryou = "no";

	//宝飾カテゴリー
	$housyoku_array = array(12,17,18,19,50,20,51,21,22,23);
	$gold_property = '金地金・ダイヤ・宝石等少量による　※規約第8条14項';



	//NEW 金査と査物 同時取得
	$syouryou_query = "SELECT product_num,category_id,price,kinsa_flag,purchase_category FROM shouhin WHERE ecc_id={$kokyaku} AND ((`status`=126 AND kinsa_flag=1) OR (`status`=32)) order by product_id";
	$syouryou_sql = mysql_query('SET NAMES utf8');
	$syouryou_sql = mysql_query($syouryou_query);
	$hantei_price = 0;

	$syouryou_count = 0;
	while ($syouryou_res = mysql_fetch_assoc($syouryou_sql)) {
		$syouryou_count++;
		if(
			(($syouryou_res["product_num"] != 631) AND ($syouryou_res["product_num"] != 8540))
			AND ($syouryou_res["product_num"] != '')
		){
			if($syouryou_res["kinsa_flag"] == 1){
				//ブランドID入っていても、金査フラグのあるものは、何もしない

				// 種別「K」以外は、金査以外と同等として処理する。 20201123 nishitani
				if(
					($syouryou_res["purchase_category"] == "J")
					OR ($syouryou_res["purchase_category"] == "D")
					OR ($syouryou_res["purchase_category"] == "W")
					OR ($syouryou_res["purchase_category"] == "B")
				){
					$syouryou = "ok";
				}
				// end 20201123
			}else{
				//金査フラグが無ければ、ブランドIDある時点でOK.
				$syouryou = "ok";
			}
		}
		if(!in_array($syouryou_res["category_id"],$housyoku_array)){
			$syouryou = "ok";
		}
		$hantei_price = $hantei_price+$syouryou_res["price"];
	}

	if($hantei_price >= 200000){
		$syouryou = "ok";
	}

	if($syouryou_count == 0){
		$syouryou = "ok";
	}

	// 現在進行中のステータス「新規申込」「到着済」「成約あり」「振込確認済み」「査定中」の一番古い宅配取引IDを抽出
	// ※「振込確認済み」は、成約し、次の到着と一緒にされたい場合、確認画面に出して控えさせるためにこのSTにする為。

	$syouryou_query = "SELECT id,type_selection FROM Eoc_takuhai WHERE ecc_id={$kokyaku} AND ((`status`=1) OR (`status`=4) OR (`status`=5) OR (`status`=6) OR (`status`=12)) order by id asc limit 1";
	$syouryou_sql = mysql_query($syouryou_query);
	$syouryou_res = mysql_fetch_assoc($syouryou_sql);
	$Eoc_takuhai_id = $syouryou_res["id"];
	$type_selection = $syouryou_res["type_selection"];
	if(($syouryou == "no") AND ($Eoc_takuhai_id != '')){
		//宅配取引があり、かつ、条件に該当する場合

		//この宅配取引IDで同じ金性の存在確認
		$syouryou_shouhin_sql = "SELECT product_id FROM shouhin WHERE Eoc_takuhai_id='{$Eoc_takuhai_id}' AND  gold_property='{$gold_property}' limit 1";
		$syouryou_shouhin_rs = mysql_query($syouryou_shouhin_sql);
		$syouryou_shouhin_data = mysql_fetch_assoc($syouryou_shouhin_rs);

		if($syouryou_shouhin_data["product_id"] != ''){
			//存在する場合、なにもしない
			// print "金査すでにあるパターン";
		}else{

			//この宅配取引IDで『【服飾系】リサイクル・まとめ』の存在確認
			$brand_resycle_sql = "SELECT product_id FROM shouhin WHERE Eoc_takuhai_id='{$Eoc_takuhai_id}' AND  sub_category_id1='838' limit 1";
			$brand_resycle_rs = mysql_query($brand_resycle_sql);
			$brand_resycle_data = mysql_fetch_assoc($brand_resycle_rs);

			if($brand_resycle_data["product_id"] != ''){
				//存在する場合、なにもしない
			}else{

				//文字違いも考慮し、部分一致
				if(stristr($type_selection, "ベーシック")){
					$price_per_gram = -1500*1.1;
					$price = $price_per_gram;
				}else{
					$price_per_gram = -1000*1.1;
					$price = $price_per_gram;
				}

				$satei_hi = date("Y-m-d H:i:s");
				$satei_by = $uid;

				// 新規生成
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
						price,
						satei_hi,
						satei_by,
						purchase_category
						)VALUES(
						1,
						'{$kokyaku}',
						126,
						3,
						'{$Eoc_takuhai_id}',
						12,
						839,
						'{$gold_property}',
						1,
						'SET',
						'{$price_per_gram}',
						'{$price}',
						'{$satei_hi}',
						'{$satei_by}',
						'K'
					)";
				// print $create_sql;


				$syouryou_2_shouhin_sql = "SELECT product_id FROM shouhin WHERE Eoc_takuhai_id='{$Eoc_takuhai_id}' AND  gold_property='{$gold_property}' limit 1";
				$syouryou_2_shouhin_rs = mysql_query($syouryou_2_shouhin_sql);
				$syouryou_2_shouhin_data = mysql_fetch_assoc($syouryou_2_shouhin_rs);
				if($syouryou_2_shouhin_data["product_id"] != ''){
					//存在する場合、なにもしない
					// print "金査すでにあるパターン";
				}else{
					mysql_query($create_sql);
				}

			}// end if









		}//新規生成 end

	}// end if

}// end if
