<?
ini_set("display_errors", 1);

$ecc_id = htmlspecialchars($_GET["ecc_id"]);
$label_flag = htmlspecialchars($_GET["label_flag"]);
if($label_flag != '1'){
	$label_flag = '0';
	$result_txt = 'ラベルチェックを外しました。';
}else{
	$result_txt = 'ラベルチェックを付与ました。';
}

if(empty($ecc_id)){
	echo "顧客SEQがありません。";
	exit();
}

//pdoのクラス
include_once $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";


$where = "ecc_id={$ecc_id} AND (`status`=126 OR `status`=32)";

$pdo = new pdo_connect;
$query = "UPDATE shouhin SET tentou_label_output_flag = {$label_flag} WHERE {$where}";
// print_r($query);
$res = $pdo->plural($query);


$sel_pdo = new pdo_connect;
$sel_query = "SELECT * FROM shouhin WHERE {$where}";
$sel_res = $sel_pdo->select_many($sel_query);



// var_dump($sel_res);
$total_price = 0;
$product_data = array();
for ($i=0; $i < count($sel_res); $i++) {
	$shouhin_res = $sel_res[$i];

	$title = $shouhin_res["title"];
	if($title != ""){
		$title = " / ".$title;
	}
	$yahoo_color = $shouhin_res["yahoo_color"];
	if($yahoo_color != ""){
		$yahoo_color = " / ".$yahoo_color;
	}
	$serial_number = $shouhin_res["serial_number"];
	if($serial_number != ""){
		$serial_number = " / ".$serial_number;
	}

	$price = $shouhin_res["price"];
	$total_price = $total_price+$price;
	$price = number_format($price);


	$yahoo_junle = $shouhin_res["yahoo_junle"];
	$comment = $shouhin_res["comment"];

	$meisai_number = $shouhin_res["meisai_number"];


	if($title != ""){
		$title = $yahoo_junle.$title.$yahoo_color.$serial_number;
	}else{

		$res = $shouhin_res;
		include $_SERVER["DOCUMENT_ROOT"]."/include/satei/kin_satei/create_title_test.php";
	}


	$product_data[] = array(
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


}//end for


require_once('./../../connection.php');
mysql_query('SET NAMES utf8');
include "template.html";











