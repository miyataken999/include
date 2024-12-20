<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>査定明細</title>
	<link rel="stylesheet" href="">
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

// $query = "SELECT * FROM Eoc_chigins2 WHERE `status`=126 AND ecc_id={$kokyaku} ";
$query = "SELECT * FROM Eoc_chigins2 WHERE `status`=126 AND chigin_ecc_id={$kokyaku} AND NOT(WEIGHT>0 AND gram!='') ";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$count = 0;
$total_price = 0;
while ($res = mysql_fetch_assoc($sql)) {
	$count++;


	include $_SERVER["DOCUMENT_ROOT"]."/include/satei/Eoc_chigins2/create_title.php";



	$price = $res["AMOUNT_MONEY"];
	$total_price = $total_price+$price;
	$price = number_format($price);
	print $count." ".$title." = ".$price."円 <br>";
}
print "合計金額：".number_format($total_price)."円";






include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";

?>
<br><br><a href="/shop5/Eoc_list.php?q=(ecc_id~contains~<?=$kokyaku?>)">顧客一覧へ戻る</a>
</body>
</html>
