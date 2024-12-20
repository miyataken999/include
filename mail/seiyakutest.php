<?php
$Eoc_takuhai_id = $replace_data["Eoc_takuhai"]["id"];



$seiyaku_sumprice["H"] = 0;
$seiyaku_sumprice["K"] = 0;
$seiyaku_sumprice["W"] = 0;
$seiyaku_sumprice["D"] = 0;
$seiyaku_sumprice["J"] = 0;
$seiyaku_sumprice["B"] = 0;


$seiyaku_write = '';

// print "ecc_id ".$ecc_id."<br><br><br>";

// 商品データの格納
$seiyaku_product_data = array();


//NEW 金査
// $query = "SELECT * FROM shouhin WHERE ecc_id={$ecc_id} AND updated_at LIKE'{$tokutei_date}%' AND kinsa_flag=1 AND `status`=126 order by product_id";
$query = "SELECT * FROM shouhin WHERE ecc_id={$ecc_id}
AND (( `status`=33 ) OR ( `status`=119 ) OR ( `status`=121 ) OR ( `status`=122 ) OR ( `status`=127 ) OR ( `status`=110 ) OR ( `status`=124 ))
AND kinsa_flag=1 AND Eoc_takuhai_id='{$Eoc_takuhai_id}' order by product_id";
// print "query ".$query."<br><br><br>";
// SELECT * FROM shouhin WHERE ecc_id=4460 AND `status`=126 AND kinsa_flag=1 order by product_id
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$count = 0;
$total_price = 0;


while ($res = mysql_fetch_assoc($sql)) {
	$count++;

	include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title.php";

	$price = $res["price"];
	$total_price = $total_price+$price;
	$price = number_format($price);

	// print "{$count} {$title} = {$price} 円<br>";
	$seiyaku_write .= "{$count} {$title} = {$price} 円<br>";


	// if(($res["category_id"] == 12) AND (($res["sub_category_id1"] == 838) OR ($res["sub_category_id1"] == 839) OR ($res["sub_category_id1"] == 840))){
	if(
		(($res["category_id"] == 12) AND ($res["sub_category_id1"] == 840))
		OR
		(($res["category_id"] == 12) AND ($res["sub_category_id1"] == 838))
		){
		$seiyaku_sumprice["H"] += $res["price"];
	}elseif($res["category_id"] == 10){
		$seiyaku_sumprice["W"] += $res["price"];
	}elseif(($res["category_id"] == 17) AND (($res["sub_category_id1"] == 415) OR ($res["sub_category_id1"] == 420))){
		$seiyaku_sumprice["D"] += $res["price"];
	}elseif($res["category_id"] == 17){
		$seiyaku_sumprice["J"] += $res["price"];
	}else{
		$seiyaku_sumprice["K"] += $res["price"];
	}

	$seiyaku_product_data[] = array(
		"product_id" => $res["product_id"],
		"category_id" => $res["category_id"],
		"sub_category_id1" => $res["sub_category_id1"],
		"title" => $title,
		"price" => $res["price"],
		"Destination_selling" => $res["Destination_selling"],
		"Finish" => $res["Finish"],
		"Discrimination" => $res["Discrimination"],
		"accessories" => $res["accessories"],
	);
}





$query = "SELECT product_id,yahoo_junle,title,yahoo_color,yahoo_kataban,serial_number,price,comment,category_id,sub_category_id1,Destination_selling,Finish,Discrimination,accessories
FROM shouhin
WHERE (( `status`=33 ) OR ( `status`=119 ) OR ( `status`=121 ) OR ( `status`=122 ) OR ( `status`=127 ) OR ( `status`=110 ) OR ( `status`=124 ))
AND Eoc_takuhai_id='{$Eoc_takuhai_id}'
AND ecc_id={$ecc_id}
AND ISNULL(kinsa_flag)";
// print $query;
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
while ($shouhin_res = mysql_fetch_assoc($sql)) {
	$count++;
	$yahoo_junle = $shouhin_res["yahoo_junle"];
	// $title = $shouhin_res["title"];
	// if($title != ""){
	// 	$title = " / ".$title;
	// }
	$yahoo_color = $shouhin_res["yahoo_color"];
	if($yahoo_color != ""){
		$yahoo_color = " / ".$yahoo_color;
	}
	// $yahoo_kataban = $shouhin_res["yahoo_kataban"];
	// if($yahoo_kataban != ""){
	// 	$yahoo_kataban = " / ".$yahoo_kataban;
	// }
		$serial_number = $shouhin_res["serial_number"];
	if($serial_number != ""){
		$serial_number = " / ".$serial_number;
	}
	$price = $shouhin_res["price"];
	$total_price = $total_price+$price;
	$price = number_format($price);
	$comment = $shouhin_res["comment"];
	// print $count." ".$yahoo_junle.$title.$yahoo_color.$yahoo_kataban.$serial_number." = ".$price."円 ".$comment."<br>";

	if($title != ""){
		// print $count." ".$yahoo_junle.$title.$yahoo_color.$serial_number." = ".$price."円 ".$comment."<br>";
		$seiyaku_write .= $count." ".$yahoo_junle.$title.$yahoo_color.$serial_number." = ".$price."円 ".$comment."<br>";
		$title = $yahoo_junle.$title.$yahoo_color.$serial_number;
	}else{
		// $query = "SELECT * FROM Eoc_chigins2 WHERE product_id={$shouhin_res['product_id']} LIMIT 1";
		// // print $query;
		// $sql = mysql_query($query);
		// $res = mysql_fetch_assoc($sql);
		// include $_SERVER["DOCUMENT_ROOT"]."/include/satei/Eoc_chigins2/create_title.php";
		// print $count." ".$title." = ".$price."円 ".$comment."<br>";

		$res = $shouhin_res;
		include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title_test.php";
		// print "{$count} {$title} = {$price} 円<br>";
		$seiyaku_write .= "{$count} {$title} = {$price} 円<br>";


	}



	if($shouhin_res["category_id"] == 10){
		$seiyaku_sumprice["W"] += $shouhin_res["price"];
	}elseif(($shouhin_res["category_id"] == 17) AND (($shouhin_res["sub_category_id1"] == 415) OR ($shouhin_res["sub_category_id1"] == 420))){
		$seiyaku_sumprice["D"] += $shouhin_res["price"];
	}elseif(($shouhin_res["category_id"] == 17) OR ($shouhin_res["category_id"] == 18) OR ($shouhin_res["category_id"] == 19) OR ($shouhin_res["category_id"] == 50) OR ($shouhin_res["category_id"] == 20) OR ($shouhin_res["category_id"] == 51) OR ($shouhin_res["category_id"] == 21) OR ($shouhin_res["category_id"] == 22) OR ($shouhin_res["category_id"] == 23)){
		$seiyaku_sumprice["J"] += $shouhin_res["price"];
	}else{
		$seiyaku_sumprice["B"] += $shouhin_res["price"];
	}


	$seiyaku_product_data[] = array(
		"product_id" => $shouhin_res["product_id"],
		"category_id" => $shouhin_res["category_id"],
		"sub_category_id1" => $shouhin_res["sub_category_id1"],
		"title" => $title,
		"price" => $shouhin_res["price"],
		"Destination_selling" => $shouhin_res["Destination_selling"],
		"Finish" => $shouhin_res["Finish"],
		"Discrimination" => $shouhin_res["Discrimination"],
		"accessories" => $shouhin_res["accessories"],
	);

}
// print "合計金額：".number_format($total_price)."円";
$seiyaku_write .= "合計金額：".number_format($total_price)."円";



// print "<br><br>seiyaku_write  <br><br>{$seiyaku_write}<br><br>";

// include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";





$sateimeisai = $seiyaku_write;

$after_val = str_replace("<br>","\n",$seiyaku_write);
$after_val = str_replace("･","・",$after_val);


	// if(isset($_GET["test"])){
	$after_val_check = mb_convert_encoding($after_val,"iso-2022-jp","UTF-8");
	$after_val_check = mb_convert_encoding($after_val_check,"UTF-8","iso-2022-jp");
	if(stristr($after_val_check,'??')){
		$alertArray[] = array($after_val_check,$after_val);
	}
	$after_val = $after_val_check;
	// }

	$str_header = preg_replace('/'.$before_txt.'/i',$after_val,$str_header);
	$str_pc = preg_replace('/'.$before_txt.'/i',$after_val,$str_pc);
	$str2_pc = preg_replace('/'.$before_txt.'/i',$after_val,$str2_pc);
	$str3_pc = preg_replace('/'.$before_txt.'/i',$after_val,$str3_pc);
