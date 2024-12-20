<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>品番削除 実行画面</title>
	<!-- <link rel="stylesheet" href="/include/kagoya_check/style.css"> -->
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/function.php";

//権限ファイル
include "./auth.php";

mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$product_id = htmlspecialchars($_GET["product_id"]);

// $query = "SELECT product_id,yahoo_sinaban FROM shouhin WHERE product_id ={$product_id}";
$query = "UPDATE shouhin SET yahoo_sinaban='' WHERE product_id ={$product_id}";
// print $query;
$sql = mysql_query($query);
if(!$sql){
	print "登録に失敗しました。<br>";
	mysql_error();
}
// while ($res = mysql_fetch_array($sql)) {
// 	print $res["product_id"];
// 	print "<br>";
// 	print $res["yahoo_sinaban"];
// }


?>


</body>
</html>

