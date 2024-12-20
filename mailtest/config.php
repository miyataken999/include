<?
// phpinfo();
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";



// ini_set("display_errors",1);

$tmp_id = htmlspecialchars($_GET["tmp_id"]);
$ecc_id = htmlspecialchars($_GET["ecc_id"]);
if($tmp_id == ''){
	$tmp_id = 15;
}
if($ecc_id == ''){
	// $ecc_id = 4460;
}

//pdoのクラス
include_once $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";
include_once "function.php";
include_once "factory.php";

if($ecc_id != ''){
	if($tmp_id != ''){
		include_once "replace.php";
	}
}







?>
