<?php
$ichiba_exhibition_id = $value;

$current_page_pass =  $_SERVER["REQUEST_URI"];
if(stristr($current_page_pass,'/shop5/')){
  $ichiba_url = "https://rifa.life/shop5/market_product_performance_original_list.php?q=(ichiba_exhibition_id~equals~{$ichiba_exhibition_id})";
}else{
  $ichiba_url = "https://rifa.life/shop5test/market_product_performance_original_list.php?q=(ichiba_exhibition_id~equals~{$ichiba_exhibition_id})";
}


$html = "";
$html .= "<a class='btn' href='http://rifa.life/lounge_API/wkhtml/ichiba_exhibition/id_input.php?id={$ichiba_exhibition_id}'>SEQ一括入力</a>";
$html .= "<br>";
$html .= "<a class='btn' href='http://rifa.life/lounge_API/wkhtml/ichiba_exhibition/description_up.php?id={$ichiba_exhibition_id}'>メモUP</a>";
$html .= "<br>";
$html .= "<a class='btn' target='_blank' href='http://rifa.life/lounge_API/wkhtml/ichiba_exhibition/drive_up.php?id={$ichiba_exhibition_id}'>ドライブUP</a>";

$html .= "<br>";
$html .= "<a class='btn btn-warning' target='_blank' href='https://rifa.life/evaProject/create_auction_sheets?ichiba_exhibition_id={$ichiba_exhibition_id}'>新規ドライブUP</a>";

$html .= "<br>";
$html .= "<a class='btn' href='http://rifa.life/lounge_API/wkhtml/ichiba_exhibition/id_qr_input.php?id={$ichiba_exhibition_id}'>SEQ一括入力(ソーティングメモUP)</a>";
$html .= "<br>";
$html .= "<a class='btn' href='https://rifa.life/shop5/sorting_batch_list.php?q=(ichiba_exhibition_id~equals~{$ichiba_exhibition_id})'>ソーティングバッチ</a>";
$html .= "<br>";
$html .= "<a class='btn' href='$ichiba_url'>市場実績画像UP</a>";


// $query = "SELECT COUNT(product_id) as 'ct' FROM shouhin WHERE ichiba_exhibition_id={$ichiba_exhibition_id}";
// $rs = CustomQuery($query);
// $data = db_fetch_array($rs);
// $count = $data["ct"];
//
//
// $html .= "<br>";
// $html .= "<a class='btn' href='https://rifa.life/shop5/ichiba_exhibition_shouhin_list.php?masterkey1={$ichiba_exhibition_id}&mastertable=ichiba_exhibition'>市場出品商品({$count})</a>";


$value = $html;
// $value = "aa";
