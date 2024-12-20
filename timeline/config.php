<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
// phpinfo();
//ログイン認証



ini_set("display_errors",0);

$category = htmlspecialchars($_POST["category"]);
$ecc_id = htmlspecialchars($_POST["ecc_id"]);
$linechat_flg = htmlspecialchars($_POST["linechat_flg"]);
$line_chat_url = htmlspecialchars($_POST["line_chat_url"]);
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
