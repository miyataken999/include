<?php
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
// session_start();
// var_dump($_SESSION);
// $updated_by = $_SESSION["uid"];
//エラー出力⇒これ出したらCSVぐちゃぐちゃになる
// ini_set( 'display_errors', 1 );
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
include $_SERVER["DOCUMENT_ROOT"]."/include/function/log.php";



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
<?

$query = "SELECT first_name FROM users WHERE user_id = {$uid} limit 1";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);

$user = mysql_fetch_array($sql);
$first_name = $user["first_name"];


$nameArray = explode("　",$first_name);
$first_name = $nameArray[0];

var_dump($first_name);

$memo = date("ymd")."/{$first_name}/O到着";


$product_id_text = htmlspecialchars($_POST["product_id_text"],ENT_QUOTES);
$product_id_text = trim($product_id_text);

$product_id_array = explode("\n",$product_id_text);
var_dump($product_id_array);

$updated_at = date("Y-m-d H:i:s");

for ($product_id_array_i=0; $product_id_array_i < count($product_id_array); $product_id_array_i++) {
	if($product_id_array[$product_id_array_i] != ''){
		$query = "SELECT `status`,description FROM shouhin WHERE product_id=".$product_id_array[$product_id_array_i]." limit 1";
		$sql = mysql_query($query);
		$data = mysql_fetch_array($sql);
		$description = $data["description"];
		if($description != ''){
			$memo = $description."\n".$memo;
		}


		$up_query = " UPDATE shouhin SET status=137 , description='{$memo}' , updated_at='{$updated_at}' , updated_by='{$uid}' WHERE product_id=".$product_id_array[$product_id_array_i]." limit 1";
		$up_sql = mysql_query('SET NAMES utf8');
		try {
			$up_sql = mysql_query($up_query);
		} catch (Exception $e) {
			echo "<br>".$e->getMessage();
			echo "<br>".$up_query;
		}

	}
}

header("location: /shop5/chohyo_list.php");
exit();

?>
</body>
</html>
