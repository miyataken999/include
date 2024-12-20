<?
// phpinfo();
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";



ini_set("display_errors",0);

$category = htmlspecialchars($_POST["category"]);
$ecc_id = htmlspecialchars($_POST["ecc_id"]);
$text = htmlspecialchars($_POST["text"]);

if($category == ''){
	$category = 1;
}
if($ecc_id == ''){
	$ecc_id = 4460;
}

//pdoのクラス
include_once $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";
// include_once "function.php";
// include_once "factory.php";






?>
