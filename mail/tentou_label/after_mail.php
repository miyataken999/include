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

//No売却のルース・ダイヤモンドと未売却全て
$where = "ecc_id={$ecc_id} AND ( (`status`=32) OR (`status`=126 AND ( category_id=17 AND sub_category_id1=415) ) )";



$pdo = new pdo_connect;
$query = "UPDATE shouhin SET tentou_label_output_flag = {$label_flag} WHERE {$where}";
// print_r($query);
$res = $pdo->plural($query);



header("location: /shop5/Eoc_list.php?q=(ecc_id~equals~{$ecc_id})&send=after");
exit();
