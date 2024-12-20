<?
// phpinfo();
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";


if(isset($_GET["test"])){
	// ini_set("display_errors",1);
}else{
	// ini_set("display_errors",0);
}


if(isset($_GET["tmp_id"])){
	$tmp_id = htmlspecialchars($_GET["tmp_id"]);
}elseif(isset($_POST["tmp_id"])){
	$tmp_id = htmlspecialchars($_POST["tmp_id"]);
}else{
	$tmp_id = "";
}
// $ecc_id = htmlspecialchars($_GET["ecc_id"]);
if(isset($_GET["ecc_id"])){
	$ecc_id = htmlspecialchars($_GET["ecc_id"]);
}elseif(isset($_POST["ecc_id"])){
	$ecc_id = htmlspecialchars($_POST["ecc_id"]);
}else{
	$ecc_id = "";
}

if(isset($_GET['flag_name'])){
	$flag_name = htmlspecialchars($_GET["flag_name"]);
}else{
	$flag_name = '';
}

if(isset($_GET["Eoc_takuhai_id"])){
	$Eoc_takuhai_id = htmlspecialchars($_GET["Eoc_takuhai_id"]);
}elseif(isset($_POST["Eoc_takuhai_id"])){
	$Eoc_takuhai_id = htmlspecialchars($_POST["Eoc_takuhai_id"]);
}else{
	$Eoc_takuhai_id = "";
}
// $Eoc_takuhai_id = htmlspecialchars($_GET["Eoc_takuhai_id"]);
// var_dump($Eoc_takuhai_id);
if($tmp_id == ''){
	$tmp_id = 15;
}
if($ecc_id == ''){
	// $ecc_id = 4460;
}
// =on
if(isset($_GET["is_many_satei"])){
	$is_many_satei = htmlspecialchars($_GET["is_many_satei"]);

}elseif(isset($_POST["is_many_satei"])){
	$is_many_satei = htmlspecialchars($_POST["is_many_satei"]);

}else{
	$is_many_satei = "";
}

if(isset($_POST["auto_mail_send"])){
	$auto_mail_send = htmlspecialchars($_POST["auto_mail_send"]);
}else{
	$auto_mail_send = '';
}

if(isset($_POST["mail_comment"])){
	$mail_comment = htmlspecialchars($_POST["mail_comment"]);
}else{
	$mail_comment = "";
}
// var_dump($mail_comment);
//pdoのクラス
include_once $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";
include_once "function.php";
include_once "factory.php";
// if($ecc_id == 4460){
	if(($Eoc_takuhai_id=="")or($Eoc_takuhai_id==0)or($Eoc_takuhai_id==null)){
		$takuhai_id_search_pdo = new pdo_connect;
		$takuhai_id_search_sql = "SELECT `Eoc_takuhai_id` FROM `shouhin` WHERE `ecc_id`='$ecc_id' AND (`status`=126 OR `status`=32) AND `Eoc_takuhai_id` IS NOT NULL ORDER BY `product_id` DESC LIMIT 1";
		$takuhai_id_search_stmt = $takuhai_id_search_pdo->pdo()->prepare($takuhai_id_search_sql);
		$takuhai_id_search_stmt->execute();
		foreach($takuhai_id_search_stmt as $takuhai_id_search_item){
			$Eoc_takuhai_id = $takuhai_id_search_item['Eoc_takuhai_id'];
		}
	}
	// var_dump($Eoc_takuhai_id);
// }
$line_url = "";
// if(isset($_GET["tamiya_test"])){
	// ini_set("display_errors",1);
	$line_url_pdo = new pdo_connect;
	$line_url_query = "SELECT `line_chat_url`,`name1` FROM `Eoc` WHERE `ecc_id` = '$ecc_id' LIMIT 1";
	$line_url_stmt = $line_url_pdo->pdo()->prepare($line_url_query);
	$line_url_stmt->execute();
	foreach($line_url_stmt as $line_url_item){
		// var_dump($line_url_item);
		$line_chat_url = $line_url_item['line_chat_url'];
		$name1 = $line_url_item['name1'];
	}
	// echo $line_chat_url;
// }
$alertArray = array();

$satei_meisai_arr = array();
if($ecc_id != ''){
	if($tmp_id != ''){
		if($flag_name == ''){
			include_once "replace.php";
		}
	}
}







?>
