<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>特定国際種該当一覧</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
// print "uid ".$uid;

include_once $_SERVER["DOCUMENT_ROOT"]."/include/shouhin_no/dir_menu.php";

mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
?>
<h1>特定国際種該当一覧</h1>
<table>
	<tr>
		<th>ボックスID</th>
		<th>SEQ</th>
		<th>品番</th>
		<th>Yタイトル</th>
	</tr>
<?
$query = 'SELECT shouhin.box_id AS a,shouhin.product_id AS b,shouhin.yahoo_sinaban AS c,auctions.Title AS d FROM shouhin INNER JOIN auctions ON shouhin.product_id = auctions.product_id WHERE
	shouhin.yahoo_sozai LIKE \'%象牙%\' OR shouhin.item_name LIKE \'%象牙%\' OR shouhin.line LIKE \'%象牙%\' OR auctions.raku_goods_name LIKE \'%象牙%\' OR
	shouhin.yahoo_sozai LIKE \'%鼈甲%\' OR shouhin.item_name LIKE \'%鼈甲%\' OR shouhin.line LIKE \'%鼈甲%\' OR auctions.raku_goods_name LIKE \'%鼈甲%\' OR
	shouhin.yahoo_sozai LIKE \'%べっ甲%\' OR shouhin.item_name LIKE \'%べっ甲%\' OR shouhin.line LIKE \'%べっ甲%\' OR auctions.raku_goods_name LIKE \'%べっ甲%\' OR
	shouhin.yahoo_sozai LIKE \'%ベッ甲%\' OR shouhin.item_name LIKE \'%ベッ甲%\' OR shouhin.line LIKE \'%ベッ甲%\' OR auctions.raku_goods_name LIKE \'%ベッ甲%\' OR
	shouhin.yahoo_sozai LIKE \'%ベっ甲%\' OR shouhin.item_name LIKE \'%ベっ甲%\' OR shouhin.line LIKE \'%ベっ甲%\' OR auctions.raku_goods_name LIKE \'%ベっ甲%\' OR
	shouhin.yahoo_sozai LIKE \'%べッ甲%\' OR shouhin.item_name LIKE \'%べッ甲%\' OR shouhin.line LIKE \'%べッ甲%\' OR auctions.raku_goods_name LIKE \'%べッ甲%\' OR
	shouhin.yahoo_sozai LIKE \'%タイマイ%\' OR shouhin.item_name LIKE \'%タイマイ%\' OR shouhin.line LIKE \'%タイマイ%\' OR auctions.raku_goods_name LIKE \'%タイマイ%\' OR
	shouhin.yahoo_sozai LIKE \'%ライター%\' OR shouhin.item_name LIKE \'%ライター%\' OR shouhin.line LIKE \'%ライター%\' OR auctions.raku_goods_name LIKE \'%ライター%\' OR
	shouhin.sub_category_id1 = 384 OR
	shouhin.sub_category_id1 = 385 OR
	shouhin.sub_category_id1 = 386 OR
	shouhin.sub_category_id1 = 387 OR
	shouhin.sub_category_id1 = 388 OR
	shouhin.sub_category_id1 = 389 OR
	shouhin.sub_category_id1 = 390 OR
	shouhin.sub_category_id1 = 499 OR
	shouhin.sub_category_id1 = 500 OR
	shouhin.sub_category_id1 = 501 OR
	shouhin.sub_category_id1 = 502 OR
	shouhin.sub_category_id1 = 503 OR
	shouhin.sub_category_id1 = 504 OR
	shouhin.sub_category_id1 = 505 OR
	shouhin.sub_category_id1 = 540 OR
	shouhin.sub_category_id1 = 556 OR
	shouhin.sub_category_id1 = 591 OR
	shouhin.sub_category_id1 = 607
	ORDER BY shouhin.box_id DESC ';
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
while ($result = mysql_fetch_array($sql)) {
?>
	<tr>
		<td><?=$result["a"]?></td>
		<td><?=$result["b"]?></td>
		<td><?=$result["c"]?></td>
		<td><?=$result["d"]?></td>
	</tr>
<?
}



?>
</table>



</body>
</html>
