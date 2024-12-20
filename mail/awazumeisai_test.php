<?php
// echo 111111111111;
$awazu_Eoc_takuhai_pdo = new pdo_connect;
// $awazu_Eoc_takuhai = $awazu_Eoc_takuhai_pdo->select_one("SELECT id from Eoc_takuhai where ecc_id={$ecc_id} AND (Eoc_takuhai.`status`=1 OR Eoc_takuhai.`status`=4 OR Eoc_takuhai.`status`=12 OR Eoc_takuhai.`status`=5 OR Eoc_takuhai.`status`=6 OR Eoc_takuhai.`status`=9 ) order by Eoc_takuhai.id desc limit 1");
$awazu_Eoc_takuhai = $awazu_Eoc_takuhai_pdo->select_one("SELECT id from Eoc_takuhai where ecc_id={$ecc_id} AND (Eoc_takuhai.`status`=1 OR Eoc_takuhai.`status`=12 OR Eoc_takuhai.`status`=5 OR Eoc_takuhai.`status`=6 OR Eoc_takuhai.`status`=9 ) order by Eoc_takuhai.id desc limit 1");

$awazu_Eoc_takuhai_id = $awazu_Eoc_takuhai["id"];
// $awazu_Eoc_takuhai_id = 10168;
// echo "awazu_Eoc_takuhai_id ".$awazu_Eoc_takuhai_id;
// if(isset($_GET["test"])){
// 	echo "awazu_Eoc_takuhai_id {$awazu_Eoc_takuhai_id}";
// }




$awazu_sumprice["H"] = 0;
$awazu_sumprice["K"] = 0;
$awazu_sumprice["W"] = 0;
$awazu_sumprice["D"] = 0;
$awazu_sumprice["J"] = 0;
$awazu_sumprice["B"] = 0;


$awazu_write = '';

// print "ecc_id ".$ecc_id."<br><br><br>";

// 商品データの格納
$awazu_product_data = array();


//NEW 金査
// $query = "SELECT * FROM shouhin WHERE ecc_id={$ecc_id} AND updated_at LIKE'{$tokutei_date}%' AND kinsa_flag=1 AND `status`=126 order by product_id";
$query = "SELECT * FROM shouhin WHERE ecc_id={$ecc_id} AND `status`=34 AND kinsa_flag=1 AND Eoc_takuhai_id='{$awazu_Eoc_takuhai_id}' order by meisai_number , product_id";
if(isset($_GET["test"])){
	// print "query ".$query."<br><br><br>";
}

// SELECT * FROM shouhin WHERE ecc_id=4460 AND `status`=126 AND kinsa_flag=1 order by product_id
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$count = 0;
$total_price = 0;


while ($res = mysql_fetch_assoc($sql)) {
	$count++;
	if($res["meisai_number"] != ''){
		$saiban = $res["meisai_number"];
	}else{
		$saiban = $count;
	}

	include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title.php";

	$price = $res["price"];
	$total_price = $total_price+$price;
	$price = number_format($price);

	// print "{$saiban} {$title} = {$price} 円<br>";
	$awazu_write .= "[{$saiban}] {$title} = {$price} 円<br>";


	// if(($res["category_id"] == 12) AND (($res["sub_category_id1"] == 838) OR ($res["sub_category_id1"] == 839) OR ($res["sub_category_id1"] == 840))){
	if(($res["category_id"] == 12) AND ($res["sub_category_id1"] == 840)){
		$awazu_sumprice["H"] += $res["price"];
	}elseif(($res["category_id"] == 12) AND ($res["sub_category_id1"] == 838)){
		$awazu_sumprice["B"] += $res["price"];
	}elseif(($res["category_id"] == 12) AND ($res["sub_category_id1"] == 847)){
		$awazu_sumprice["K"] += $res["price"];
	}elseif(($res["category_id"] == 12) AND ($res["sub_category_id1"] == 22)){
		$awazu_sumprice["J"] += $res["price"];
	}elseif($res["category_id"] == 10){
		$awazu_sumprice["W"] += $res["price"];
	}elseif(($res["category_id"] == 17) AND (($res["sub_category_id1"] == 415) OR ($res["sub_category_id1"] == 420))){
		$awazu_sumprice["D"] += $res["price"];
	}elseif($res["category_id"] == 17){
		$awazu_sumprice["J"] += $res["price"];
	}else{
		$awazu_sumprice["K"] += $res["price"];
	}

	$awazu_product_data[] = array(
		"saiban" => $saiban,
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





$query = "SELECT *
FROM shouhin
WHERE `status`=34
AND Eoc_takuhai_id='{$awazu_Eoc_takuhai_id}'
AND ecc_id={$ecc_id}
AND ISNULL(kinsa_flag)
order by meisai_number , product_id";

$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
while ($shouhin_res = mysql_fetch_assoc($sql)) {
	$count++;
	if($shouhin_res["meisai_number"] != ''){
		$saiban = $shouhin_res["meisai_number"];
	}else{
		$saiban = $count;
	}

	$yahoo_junle = $shouhin_res["yahoo_junle"];
	$title = $shouhin_res["title"];
	if($title != ""){
		$title = " / ".$title;
	}
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
  $product_id = $shouhin_res["product_id"];
	// print $saiban." ".$yahoo_junle.$title.$yahoo_color.$yahoo_kataban.$serial_number." = ".$price."円 ".$comment."<br>";

	// if($title != ""){
		// print $saiban." ".$yahoo_junle.$title.$yahoo_color.$serial_number." = ".$price."円 ".$comment."<br>";
	// 	$awazu_write .= "[".$saiban."] ".$yahoo_junle.$title.$yahoo_color.$serial_number." = ".$price."円 ".$comment."<br>";
	// 	$title = $yahoo_junle.$title.$yahoo_color.$serial_number;
	// }else{
		// $query = "SELECT * FROM Eoc_chigins2 WHERE product_id={$shouhin_res['product_id']} LIMIT 1";
		// // print $query;
		// $sql = mysql_query($query);
		// $res = mysql_fetch_assoc($sql);
		// include $_SERVER["DOCUMENT_ROOT"]."/include/satei/Eoc_chigins2/create_title.php";
		// print $saiban." ".$title." = ".$price."円 ".$comment."<br>";

		// $res = $shouhin_res;
		// include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title_test.php";

    $url = "https://rifa.life/lounge_API/evaeva/create_user_side_title.php?product_id={$product_id}&token=dkaslhfijgfnhasihfgnslkdfnhashdfushakjdfnasihdfp";
    $title = file_get_contents($url);
		// print "{$saiban} {$title} = {$price} 円<br>";
		$awazu_write .= "[{$saiban}] {$title} = {$price} 円<br>";


	// }



	if($shouhin_res["category_id"] == 10){
		$awazu_sumprice["W"] += $shouhin_res["price"];
	}elseif(($shouhin_res["category_id"] == 17) AND (($shouhin_res["sub_category_id1"] == 415) OR ($shouhin_res["sub_category_id1"] == 420))){
		$awazu_sumprice["D"] += $shouhin_res["price"];
	}elseif(($shouhin_res["category_id"] == 17) OR ($shouhin_res["category_id"] == 18) OR ($shouhin_res["category_id"] == 19) OR ($shouhin_res["category_id"] == 50) OR ($shouhin_res["category_id"] == 20) OR ($shouhin_res["category_id"] == 51) OR ($shouhin_res["category_id"] == 21) OR ($shouhin_res["category_id"] == 22) OR ($shouhin_res["category_id"] == 23)){
		$awazu_sumprice["J"] += $shouhin_res["price"];
	}elseif($shouhin_res["sub_category_id1"] == 22){
		$awazu_sumprice["J"] += $shouhin_res["price"];
	}else{
		$awazu_sumprice["B"] += $shouhin_res["price"];
	}


	$awazu_product_data[] = array(
		"saiban" => $saiban,
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
$awazu_write .= "合計金額：".number_format($total_price)."円";



// print "<br><br>awazu_write  <br><br>{$awazu_write}<br><br>";

// include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";





$awazumeisai = $awazu_write;

$after_val = str_replace("<br>","\n",$awazu_write);
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
