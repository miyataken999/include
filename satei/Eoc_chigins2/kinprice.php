<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>金査全項目</title>
</head>
<body>

<?
// header("content-type:text/csv; charset=utf-8;");
// header("content-type:text/html; charset=utf-8;");
mb_internal_encoding("utf-8");
// ini_set("display_errors",1);

//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$kokyaku = htmlspecialchars($_GET["koSEQ"]);

$tokutei_date = date("Y-m-d");



	// if($title != ""){
	// 	$title = " / ".$title;
	// }






$query = "SELECT * FROM Eoc_chigins2 WHERE chigin_ecc_id={$kokyaku} AND update_at LIKE'{$tokutei_date}%' AND NOT(`status`=119) order by chigin_id";
// print $query;
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$count = 0;
$total_price = 0;
while ($res = mysql_fetch_assoc($sql)) {
	$count++;

	include $_SERVER["DOCUMENT_ROOT"]."/include/satei/Eoc_chigins2/create_title.php";


	$WEIGHT = " - ".$res["WEIGHT"];
	$gram = $res["gram"];
	$twice = $res["twice"];
	$PER_PRICE = $res["PER_PRICE"];
	$PER_PRICE = number_format($PER_PRICE);
	$en = $res["en"];
	$eq = $res["eq"];
	$AMOUNT_MONEY = $res["AMOUNT_MONEY"];
	$total_price = $total_price+$AMOUNT_MONEY;
	$AMOUNT_MONEY = number_format($AMOUNT_MONEY);
	$en2 = $res["en2"];



	print "{$count} {$title} {$WEIGHT}{$gram} {$twice} {$PER_PRICE} {$en} {$eq} {$AMOUNT_MONEY} {$en2}<br>";
}
print "合計金額：".number_format($total_price)."円";






include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";

?>
<br><br><a href="/shop5/Eoc_list.php?q=(ecc_id~contains~<?=$kokyaku?>)">顧客一覧へ戻る</a>
</body>
</html>
