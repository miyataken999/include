<?
phpinfo();
// //ログイン認証
include $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
echo $uid;
// echo $_SESSION["uid"];

ini_set("display_errors",0);

// $category = htmlspecialchars($_POST["category"]);
// $tokentoken = 'nkas.gn;;weraqnytaq43i@5yonhfdsafhgriubgawi;thgr@at';
// $token = htmlspecialchars($_POST["token"]);
// if($tokentoken != $token){
// 	echo "違うで！";
// 	exit();
// }
$ecc_id = htmlspecialchars($_POST["ecc_id"]);
$line_chat_url = htmlspecialchars($_POST["line_chat_url"]);

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
