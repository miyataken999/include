<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>宅配データ比較画面</title>
	<link rel="stylesheet" href="/include/izanami_check/style.css">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
?>


<?
// ini_set("display_errors",1);
header("Content-Type:text/html; charset=UTF-8");

include_once $_SERVER["DOCUMENT_ROOT"]."/include/izanami_check/function.php";
$now_time = date("Y/m/d H:i:s");

mb_internal_encoding("utf8");


$table_name = "users";
// $target_table = "Eoc_copy4nishitani";
$target_table = "Eoc";

$kousin_id = htmlspecialchars($_GET['kousin_id']);
$hikaku_id = htmlspecialchars($_GET["hikaku_id"]);
$uid = htmlspecialchars($_GET["uid"]);

if($kousin_id == ""){
	print '対象データがありあません。操作し直してください。';
	exit();
}
if($hikaku_id == ""){
	print '対象データがありあません。操作し直してください。';
	exit();
}









$eoc_up_col = array();

if($kousin_id == "new"){
	include 'type_insert.php';
}else{
	include 'type_update.php';
}
?>

<div class="return_btn">
	<a href="/include/izanami_check/takuhai/list.php" >一覧へ戻る</a>
</div>

</body>
</html>



