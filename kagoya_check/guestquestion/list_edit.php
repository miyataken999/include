<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>買取サイトアンケートデータ更新</title>
	<link rel="stylesheet" href="/include/kagoya_check/style.css">
</head>
<body>
<?
//権限ファイル
include "./auth.php";


foreach ($_POST as $key => $value) {
	$value = htmlspecialchars($value);
	$key = str_replace("-","_",$key);
	$$key = $value;
}

if($edit_id == ""){
	print "idが選択されてません。";
	exit();
}


mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";


// ini_set("display_errors",1);
$table_name = "Eoc_guestquestion";

$set = "";
if(isset($text_freely_write_text)){
	if($set != ""){$set .= " , ";}
	$set .= "`freely-write-text`='{$text_freely_write_text}'";
}
if(isset($text_a_word_text)){
	if($set != ""){$set .= " , ";}
	$set .= "`a-word-text`='{$text_a_word_text}'";
}


$query = "UPDATE {$table_name} SET {$set} WHERE id={$edit_id}";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
if(!$sql){
	print"編集に失敗しました。";
	print "query<div>{$query}</div>";
	mysql_error();
}else{
	header("location: /include/kagoya_check/guestquestion/list.php");
}








?>
</body>
</html>
