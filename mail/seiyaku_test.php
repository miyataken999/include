<?php
$Eoc_takuhai_id = $replace_data["Eoc_takuhai"]["id"];
// echo "seiyaku {$Eoc_takuhai_id}<br>";
// $Eoc_takuhai_id = 10168;
// echo $Eoc_takuhai_id;

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


// 111	服飾市場
// 113	アパオク
// 125	ブティック
// 132	委託
// 10	完了
// 114	処分
// 106	加工待ち
// 107	P待ち
// 108	入庫待ち
// 109	捜査中
// 112	保留
// 115	洗濯中
// 117	屑関連
// 116	IM
// 118	宝飾完了
// 126	No売却
// 128	D-Recut
// 129	D-製品化
// 120	D完了
// 123	海外持出
// 130	Sample
// 131	Pricelist_d





// 7	撮影待ち
// 33	売却済
// 119	地金スクラップ
// 121	宝飾出品待機
// 122	D-Wait
// 127	D-C待ち
// 110	修理待機
// 124	ストック
// 29	未採寸
// 133	修理中-発送済
// 134	D-C済み


// 106	加工待ち
// 107	P待ち
// 108	入庫待ち
// 111	服飾市場
// 113	アパオク
// 3 	UP済
// 136	外部横持中


//NEW 金査
// $query = "SELECT * FROM shouhin WHERE ecc_id={$ecc_id} AND updated_at LIKE'{$tokutei_date}%' AND kinsa_flag=1 AND `status`=126 order by product_id";
$query = "SELECT * FROM shouhin WHERE ecc_id={$ecc_id}
AND (
	( `status`=7 )
	 OR ( `status`=33 )
	 OR ( `status`=119 )
	 OR ( `status`=121 )
	 OR ( `status`=122 )
	 OR ( `status`=127 )
	 OR ( `status`=110 )
	 OR ( `status`=124 )
	 OR ( `status`=29 )
	 OR ( `status`=133 )
	 OR ( `status`=134 )
	 OR ( `status`=106 )
	 OR ( `status`=107 )
	 OR ( `status`=108 )
	 OR ( `status`=111 )
	 OR ( `status`=113 )
	 OR ( `status`=3 )
	 OR ( `status`=136 )
	 OR ( `status`=142 )
	 OR ( `status`=148 )
	 OR ( `status`=147 )
)
AND kinsa_flag=1 AND Eoc_takuhai_id='{$Eoc_takuhai_id}' order by meisai_number , product_id";

// echo $query;
// print "query ".$query."<br><br><br>";
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
	$seiyaku_write .= "[{$saiban}] {$title} = {$price} 円<br>";


	// if(($res["category_id"] == 12) AND (($res["sub_category_id1"] == 838) OR ($res["sub_category_id1"] == 839) OR ($res["sub_category_id1"] == 840))){
	if(($res["category_id"] == 12) AND ($res["sub_category_id1"] == 840)){
		$seiyaku_sumprice["H"] += $res["price"];
	}elseif(($res["category_id"] == 12) AND ($res["sub_category_id1"] == 838)){
		$seiyaku_sumprice["B"] += $res["price"];
	}elseif(($res["category_id"] == 12) AND ($res["sub_category_id1"] == 847)){
		$seiyaku_sumprice["K"] += $res["price"];
	}elseif(($res["category_id"] == 12) AND ($res["sub_category_id1"] == 22)){
		$seiyaku_sumprice["J"] += $res["price"];
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
WHERE (
	( `status`=7 )
	 OR ( `status`=33 )
	 OR ( `status`=119 )
	 OR ( `status`=121 )
	 OR ( `status`=122 )
	 OR ( `status`=127 )
	 OR ( `status`=110 )
	 OR ( `status`=124 )
	 OR ( `status`=29 )
	 OR ( `status`=133 )
	 OR ( `status`=134 )
	 OR ( `status`=106 )
	 OR ( `status`=107 )
	 OR ( `status`=108 )
	 OR ( `status`=111 )
	 OR ( `status`=113 )
	 OR ( `status`=3 )
	 OR ( `status`=136 )
	 OR ( `status`=142 )
	 OR ( `status`=148 )
	 OR ( `status`=147 )
	)
AND Eoc_takuhai_id='{$Eoc_takuhai_id}'
AND ecc_id={$ecc_id}
AND ISNULL(kinsa_flag)
order by meisai_number , product_id";
// print $query;
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
	// 	$seiyaku_write .= "[".$saiban."] ".$yahoo_junle.$title.$yahoo_color.$serial_number." = ".$price."円 ".$comment."<br>";
	// 	$title = $yahoo_junle.$title.$yahoo_color.$serial_number;
	// }else{
		// $query = "SELECT * FROM Eoc_chigins2 WHERE product_id={$shouhin_res['product_id']} LIMIT 1";
		// // print $query;
		// $sql = mysql_query($query);
		// $res = mysql_fetch_assoc($sql);
		// include $_SERVER["DOCUMENT_ROOT"]."/include/satei/Eoc_chigins2/create_title.php";
		// print $saiban." ".$title." = ".$price."円 ".$comment."<br>";

		$res = $shouhin_res;
		// include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title_test.php";
		// print "{$saiban} {$title} = {$price} 円<br>";

		$url = "https://rifa.life/lounge_API/evaeva/create_user_side_title.php?product_id={$product_id}&token=dkaslhfijgfnhasihfgnslkdfnhashdfushakjdfnasihdfp";
		$title = file_get_contents($url);
		$seiyaku_write .= "[{$saiban}] {$title} = {$price} 円<br>";


	// }

	// $title = 111111111111111;

	if($shouhin_res["category_id"] == 10){
		$seiyaku_sumprice["W"] += $shouhin_res["price"];
	}elseif(($shouhin_res["category_id"] == 17) AND (($shouhin_res["sub_category_id1"] == 415) OR ($shouhin_res["sub_category_id1"] == 420))){
		$seiyaku_sumprice["D"] += $shouhin_res["price"];
	}elseif(($shouhin_res["category_id"] == 17) OR ($shouhin_res["category_id"] == 18) OR ($shouhin_res["category_id"] == 19) OR ($shouhin_res["category_id"] == 50) OR ($shouhin_res["category_id"] == 20) OR ($shouhin_res["category_id"] == 51) OR ($shouhin_res["category_id"] == 21) OR ($shouhin_res["category_id"] == 22) OR ($shouhin_res["category_id"] == 23)){
		$seiyaku_sumprice["J"] += $shouhin_res["price"];
	}elseif($shouhin_res["sub_category_id1"] == 22){
		$seiyaku_sumprice["J"] += $shouhin_res["price"];
	}else{
		$seiyaku_sumprice["B"] += $shouhin_res["price"];
	}


	$seiyaku_product_data[] = array(
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
