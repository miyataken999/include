<?php

$saisoku_sumprice["H"] = 0;
$saisoku_sumprice["K"] = 0;
$saisoku_sumprice["W"] = 0;
$saisoku_sumprice["D"] = 0;
$saisoku_sumprice["J"] = 0;
$saisoku_sumprice["B"] = 0;


$satei_ttl = '【初回査定日明細】';
$satei_write = '';
$saisoku_write = '【本日の査定商品明細（貴金属は相場下落品が有る場合のみ差額記載）】<br>';
$remark_ttl = "【価格変更商品明細（採番のみ記載）】<br>";
$remark_write = "";
$decline_shouhin_flag = "";
$difference_price = "";
$meisai_num_flg = "";
$old_saiban ="";
// print "ecc_id ".$ecc_id."<br><br><br>";
// 商品データの格納
$saisoku_product_data = array();

// $query = "SELECT * FROM shouhin WHERE ecc_id={$ecc_id} AND updated_at LIKE'{$tokutei_date}%' AND kinsa_flag=1 AND `status`=126 order by product_id";
$query = "SELECT * FROM shouhin WHERE `ecc_id`={$ecc_id} AND `Eoc_takuhai_id`={$Eoc_takuhai_id} ORDER BY `trading_sort_id` ASC";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$count = 0;
$total_price = 0;
$total_satei_price = 0;
$meisai_number = 0;
while ($res = mysql_fetch_assoc($sql)) {
	$kinsa_flag = $res["kinsa_flag"];
	if($res["many_product_group_saiban"] != ''){
		$saiban = $res["many_product_group_saiban"];
	}else{
		$saiban = " ";
	}
	$satei_hi = $res["satei_hi"];
	if(($satei_hi!="")and($satei_ttl=="【初回査定日明細】")){
		$satei_ttl = "【初回査定日明細】 ".$satei_hi."<br>";
	}
	$product_id = $res["product_id"];
	$satei_query = "SELECT * FROM Eoc_market_decline_alert WHERE `product_id`={$product_id} limit 1";
	$satei_sql = mysql_query('SET NAMES utf8');
	$satei_sql = mysql_query($satei_query);
	$satei_res = mysql_fetch_assoc($satei_sql);
	$satei_reference_price = $satei_res["reference_price"];
	$price = $res["price"];
	if($satei_reference_price>$price){
		$decline_shouhin_flag = "on";
		if($remark_write!=""){$remark_write .= " , ";}
		$remark_write .= "[".$saiban."]";
	}

	// $url = "https://rifa.life/lounge_API/evaeva/create_user_side_title.php?product_id={$product_id}&token=dkaslhfijgfnhasihfgnslkdfnhashdfushakjdfnasihdfp";
	// $title = file_get_contents($url);
	if($res["kinsa_flag"]==1){
		include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title.php";
	}else{
		$url = "https://rifa.life/lounge_API/evaeva/create_user_side_title.php?product_id={$product_id}&token=dkaslhfijgfnhasihfgnslkdfnhashdfushakjdfnasihdfp";
		$title = file_get_contents($url);
	}
	$total_price = $total_price+$price;
	$total_satei_price = $total_satei_price+$satei_reference_price;

	if(($price!="")and($price!=0)){
		$price_numfor = number_format($price);
	}else{
		$price_numfor = 0;
	}

	if(($satei_reference_price!="")and($satei_reference_price!=0)){
		$satei_reference_price_numfor = number_format($satei_reference_price);
	}else{
		$satei_reference_price_numfor = 0;
	}

	$saisoku_write .= "[{$saiban}] {$title} = {$price_numfor} 円<br>";
	$satei_write .= "[{$saiban}] {$title} = {$satei_reference_price_numfor} 円<br>";


	// if(($res["category_id"] == 12) AND (($res["sub_category_id1"] == 838) OR ($res["sub_category_id1"] == 839) OR ($res["sub_category_id1"] == 840))){
	if($kinsa_flag==1){
		if(($res["category_id"] == 12) AND ($res["sub_category_id1"] == 840)){
			$saisoku_sumprice["H"] += $res["price"];
		}elseif(($res["category_id"] == 12) AND ($res["sub_category_id1"] == 838)){
			$saisoku_sumprice["B"] += $res["price"];
		}elseif(($res["category_id"] == 12) AND ($res["sub_category_id1"] == 847)){
			$saisoku_sumprice["K"] += $res["price"];
		}elseif(($res["category_id"] == 12) AND ($res["sub_category_id1"] == 22)){
			$saisoku_sumprice["J"] += $res["price"];
		}elseif($res["category_id"] == 10){
			$saisoku_sumprice["W"] += $res["price"];
		}elseif(($res["category_id"] == 17) AND (($res["sub_category_id1"] == 415) OR ($res["sub_category_id1"] == 420))){
			$saisoku_sumprice["D"] += $res["price"];
		}elseif($res["category_id"] == 17){
			$saisoku_sumprice["J"] += $res["price"];
		}else{
			$saisoku_sumprice["K"] += $res["price"];
		}
	}else{
		if($res["category_id"] == 10){
			$saisoku_sumprice["W"] += $res["price"];
		}elseif(($res["category_id"] == 17) AND (($res["sub_category_id1"] == 415) OR ($res["sub_category_id1"] == 420))){
			$saisoku_sumprice["D"] += $res["price"];
		}elseif(($res["category_id"] == 17) OR ($res["category_id"] == 18) OR ($res["category_id"] == 19) OR ($res["category_id"] == 50) OR ($res["category_id"] == 20) OR ($res["category_id"] == 51) OR ($res["category_id"] == 21) OR ($res["category_id"] == 22) OR ($res["category_id"] == 23)){
			$saisoku_sumprice["J"] += $res["price"];
		}elseif($res["sub_category_id1"] == 22){
			$saisoku_sumprice["J"] += $res["price"];
		}else{
			$saisoku_sumprice["B"] += $res["price"];
		}
	}


	$saisoku_product_data[] = array(
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


if($total_price<$total_satei_price){
	$saisoku_write .= "合計金額：".number_format($total_price)."円（差額 ".number_format($total_price-$total_satei_price)."円）";
}else{
	$saisoku_write .= "合計金額：".number_format($total_price)."円";
}
$satei_write .= "合計金額：".number_format($total_satei_price)."円";

if($decline_shouhin_flag == "on"){
	$saisoku_write .= "<br><br>".$satei_ttl.$satei_write."<br><br>".$remark_ttl.$remark_write;
}else{
	$saisoku_write .= "<br><br>".$satei_ttl.$satei_write."<br><br>".$remark_ttl."変更商品はありません。<br>";
}
$sateimeisai = $saisoku_write;

$after_val = str_replace("<br>","\n",$saisoku_write);
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
