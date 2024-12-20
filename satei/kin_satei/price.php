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

$query = "SELECT product_id,yahoo_junle,title,yahoo_color,yahoo_kataban,serial_number,price,comment FROM shouhin WHERE `status`=32 AND ecc_id={$kokyaku} ";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$count = 0;
$total_price = 0;
while ($shouhin_res = mysql_fetch_assoc($sql)) {
	$count++;
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
	// print $count." ".$yahoo_junle.$title.$yahoo_color.$yahoo_kataban.$serial_number." = ".$price."円 ".$comment."<br>";
	if($title != ""){
		print $count." ".$yahoo_junle.$title.$yahoo_color.$serial_number." = ".$price."円 ".$comment."<br>";
	}else{
		$query = "SELECT * FROM Eoc_chigins2 WHERE product_id={$shouhin_res['product_id']} LIMIT 1";
		// print $query;
		$sql = mysql_query($query);
		$res = mysql_fetch_assoc($sql);
		include $_SERVER["DOCUMENT_ROOT"]."/include/satei/Eoc_chigins2/create_title.php";
		print $count." ".$title." = ".$price."円 ".$comment."<br>";
	}


}
print "合計金額：".number_format($total_price)."円";






include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";

?>
<br><br><a href="/shop5/Eoc_list.php?q=(ecc_id~contains~<?=$kokyaku?>)">顧客一覧へ戻る</a>
</body>
</html>
