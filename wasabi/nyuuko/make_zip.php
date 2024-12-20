<?
$ws_import_date = htmlspecialchars($_GET["ws_import_date"]);
if (!empty($_GET["product_id"])) {
	$product_id = htmlspecialchars($_GET["product_id"]);
} else {
	$product_id = '';
}
if (!empty($_GET["product_ids"])) {
	$product_ids = trim(htmlspecialchars($_GET["product_ids"]));
	$product_ids = str_replace("\n", ",", $product_ids);
} else {
	$product_ids = '';
}
$n_date = htmlspecialchars($_GET["date"]);
$box_id = htmlspecialchars($_GET["box_id"]);
$a_to_b = htmlspecialchars($_GET["a_to_b"]);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ロジザード商品マスタ登録用CSV作成ページ</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?
mb_internal_encoding("utf-8");

//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

include_once "./make_logimaster.php";
include_once "./make_nyuukayotei.php";



include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";

$zip_path  = "./download/logi.zip";
$zip_res = system("zip {$zip_path} ./download/*.csv ", $zip);
$p = system("chmod -R 777 {$zip_path} ", $pp);

?>

ZIP作成成功しました。ダウンロードページへ移動します(^-^)
<script type="text/javascript">
	window.location = ("./download.php");
</script>

</body>
</html>
