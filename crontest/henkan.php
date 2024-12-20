<?
// header("content-type:text/csv; charset=utf-8;");
header("content-type:text/html; charset=utf-8;");
mb_internal_encoding("utf8");
// ini_set("display_errors",1);

//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

// $file = file_get_contents("./hinban.php");
$file = file_get_contents("./hinbantest.php");
$array = explode("\n",$file);
// var_dump($array);

$data = "";
// $sql = mysql_query('SET NAMES utf8');
for ($i=0; $i < count($array); $i++) {
	if(preg_match("/^1/",$array[$i])){
		$query = "SELECT yahoo_sinaban FROM shouhin WHERE product_id={$array[$i]}";
		$sql = mysql_query($query);
		$res = mysql_fetch_assoc($sql);
		$str =strtolower($res["yahoo_sinaban"]);
		$data .= $str."<br>";
	}else{
		$data .= $array[$i]."<br>";
	}
}

print $data;

include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";

?>

