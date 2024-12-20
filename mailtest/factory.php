<?php

/*
テンプレート カテゴリー
リストの取得
*/
$tmp_category_pdo = new pdo_connect;
$tmp_category_result = $tmp_category_pdo->select_many("SELECT id, `name` from mail_data_tbl_category ORDER BY sort");


/*
テンプレート サブカテゴリー
リストの取得
*/
$tmp_sub_category_pdo = new pdo_connect;
$tmp_sub_category_result = $tmp_sub_category_pdo->select_many("SELECT id, `name`, category_id from mail_data_tbl_sub_category ORDER BY sort");

/*
テンプレート
リストの取得
*/
$tmp_pdo = new pdo_connect;
$tmp_result = $tmp_pdo->select_many("SELECT id, title, sub_category_id from mail_data_tbl_template ORDER BY junban");


/*
指定したテンプレート内容の取得
*/

if($tmp_id != ''){
	$templete_pdo = new pdo_connect;
	$templete_result = $templete_pdo->select_one("SELECT mail_data_tbl_template.*,shomei_tbl.str as `shomei` from mail_data_tbl_template left outer join shomei_tbl on mail_data_tbl_template.str3_pc=shomei_tbl.id where mail_data_tbl_template.id={$tmp_id} limit 1");
	//扱いやすいように変数置き換える
	foreach ($templete_result as $key => $value) {
		$$key = htmlspecialchars_decode($value);
		// print "key {$key}: value {$value}<br>";
	}
}


/*
最新の顧客情報と、
進行中の宅配取引(新規申込、到着済み、査定中、成約あり、振込確認済)の古い方1件、
その最新の商品データから査定人の取得
*/
if($ecc_id != ''){

	$eoc_pdo = new pdo_connect;
	$replace_data["Eoc"] = $eoc_pdo->select_one("SELECT * from Eoc where ecc_id={$ecc_id} limit 1");

	$Eoc_takuhai_pdo = new pdo_connect;
	$replace_data["Eoc_takuhai"] = $Eoc_takuhai_pdo->select_one("SELECT * from Eoc_takuhai where ecc_id={$ecc_id} AND (Eoc_takuhai.`status`=1 OR Eoc_takuhai.`status`=4 OR Eoc_takuhai.`status`=12 OR Eoc_takuhai.`status`=5 OR Eoc_takuhai.`status`=6 ) limit 1");

	$shouhin_pdo = new pdo_connect;
	$replace_data["shouhin"] = $shouhin_pdo->select_one("SELECT * from shouhin where ecc_id={$ecc_id} order by product_id desc limit 1");
	$staff_id = $replace_data["shouhin"]["satei_by"];
}

$staff_pdo = new pdo_connect;
//ログインユーザーにする
$uid;
$replace_data["users"] = $staff_pdo->select_one("SELECT first_name,user_id,english_name from users where user_id={$uid} limit 1");




/*
テンプレート サブカテゴリーの仕入カテゴリー取得
*/
if($sub_category_id != ""){
	$tmp_sub_category_pdo_2 = new pdo_connect;
	$tmp_sub_category_result_2 = $tmp_sub_category_pdo_2->select_one("SELECT `purchase_category` from mail_data_tbl_sub_category where id={$sub_category_id} limit 1");


	if($tmp_sub_category_result_2["purchase_category"] == "宝飾"){
		$displayName = "■".$replace_data["users"]["english_name"]."：リファスタ";
	}elseif($tmp_sub_category_result_2["purchase_category"] == "服飾"){
		$displayName = "◆".$replace_data["users"]["english_name"]."：リファスタ";
	}else{
		$displanName_pdo = new pdo_connect;
		$displanName_result = $displanName_pdo->select_one("SELECT mail_name from from_mail_tbl where mail = '$from_addr' limit 1");

		if($displanName_result["mail_name"] != ''){
			$displayName = $displanName_result["mail_name"];
		}else{
			$displayName = "";
		}
	}
}




// $staff_name = $staff_res['first_name'];


// $delivery_date = $eoc_res['EOC__DELIVERY_DATES'];

// if($delivery_date == "01"){
// 	$delivery_date = "午前中";
// }elseif($delivery_date == "11"){
// 	$delivery_date = "11～13時前後";
// }elseif($delivery_date == "13"){
// 	$delivery_date = "13～15時前後";
// }elseif($delivery_date == "15"){
// 	$delivery_date = "15～17時前後";
// }elseif($delivery_date == "17"){
// 	$delivery_date = "17～19時前後";
// }elseif($delivery_date == "19"){
// 	$delivery_date = "19～21時前後";
// }



// $box_number = $eoc_res['EOC__BOX_NUMBER'];
