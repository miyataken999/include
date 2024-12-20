<?
session_start();
// var_dump(session_get_cookie_params());
// var_dump(session_id());
if(isset($_GET["test"])){
	// var_dump($_SESSION);
	// var_dump($_COOKIE["uid"]);
}
// var_dump(session_save_path());

$user_id = '';
if(!empty($_GET["uid"])){
	$user_id = $_GET["uid"];
}elseif(!empty($_SESSION["uid"])){
	$user_id = $_SESSION["uid"];
}elseif(!empty($_COOKIE["uid"])){
	$user_id = $_COOKIE["uid"];
}
$uid = $user_id;

$domain = $_SERVER["SERVER_NAME"];
if($user_id == ""){

	if(
		(!strstr($_SERVER['SCRIPT_NAME'], '/include/')) 
		&& (!strstr($_SERVER['SCRIPT_NAME'], '/mailsystem/')) 
		){
		exit;
	}
	// print "新EVA未ログインです。";
	if(stristr($domain, "www.")){
		header("Location: /shop5/login.php");
		// header("Location: /shop/Login.php");
		// header("Location: /newshop2/login.php");

	}else{
		header("Location: /shop5/login.php");
		// header("Location: /shop/Login.php");
		// header("Location: /newshop2/login.php");
	}
	exit();
}else{
	// $user_id = $_SESSION["uid"];
}
?>
