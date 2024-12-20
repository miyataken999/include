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


// 金地金・ダイヤ少量による ※規約第8条14項
include './check/syouryou.php';



$sumprice["H"] = 0;
$sumprice["K"] = 0;
$sumprice["W"] = 0;
$sumprice["D"] = 0;
$sumprice["J"] = 0;
$sumprice["B"] = 0;





//NEW 金査
// $query = "SELECT * FROM shouhin WHERE ecc_id={$kokyaku} AND updated_at LIKE'{$tokutei_date}%' AND kinsa_flag=1 AND `status`=126 order by product_id";
$query = "SELECT * FROM shouhin WHERE ecc_id={$kokyaku} AND `status`=126 AND kinsa_flag=1 order by product_id";
// print $query;
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

	print "{$count} {$title} = {$price} 円<br>";


	// if(($res["category_id"] == 12) AND (($res["sub_category_id1"] == 838) OR ($res["sub_category_id1"] == 839) OR ($res["sub_category_id1"] == 840))){

	if(
		(($res["category_id"] == 12) AND ($res["sub_category_id1"] == 840))
		OR
		(($res["category_id"] == 12) AND ($res["sub_category_id1"] == 838))
		){
		$sumprice["H"] += $res["price"];
	}elseif($res["category_id"] == 10){
		$sumprice["W"] += $res["price"];
	}elseif(($res["category_id"] == 17) AND (($res["sub_category_id1"] == 415) OR ($res["sub_category_id1"] == 420))){
		$sumprice["D"] += $res["price"];
	}else{
		$sumprice["K"] += $res["price"];
	}



}
print "合計金額：".number_format($total_price)."円";






include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";

?>

<table id="category_table">
	<tr>
		<th colspan="2">カテゴリー別計算</th>
	</tr>
	<tr>
		<th>H</th>
		<td><?=number_format($sumprice["H"])?>円</td>
	</tr>
	<tr>
		<th>K</th>
		<td><?=number_format($sumprice["K"])?>円</td>
	</tr>
</table>

<br><br><a href="/shop5/Eoc_list.php?q=(ecc_id~contains~<?=$kokyaku?>)">顧客一覧へ戻る</a>

<style type="text/css">
	#category_table{
		border-bottom: 1px solid #111;
	    border-collapse: collapse;
	    margin-top: 15px;
	}
	#category_table th{
		background-color: #ddd;
	}
	#category_table th, #category_table td{
		padding: 5px;
		border-top: 1px solid #111;
		border-right: 1px solid #111;
		border-left: 1px solid #111;
	}
</style>


</body>
</html>
