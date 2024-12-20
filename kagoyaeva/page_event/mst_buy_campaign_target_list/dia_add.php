<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ダイヤカテゴリ追加</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?
// header("content-type:text/csv; charset=utf-8;");
// header("content-type:text/html; charset=utf-8;");
mb_internal_encoding("utf-8");
// ini_set("display_errors",1);

//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";

include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";

$content_id = htmlspecialchars($_GET["content_id"]);

$query = "SELECT COUNT(id) FROM mst_buy_campaign_target WHERE `content_id`={$content_id}";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$res = mysql_fetch_assoc($sql);
if($res["COUNT(id)"] > 0){
	print "全て削除してから実行してください。";
	exit();
}





$query = "INSERT INTO mst_buy_campaign_target(content_id,category_id,sub_category_id,create_by,create_at)VALUES({$content_id},21,417,{$uid},NOW())";
$sql = mysql_query($query);
print $query;
$query = "INSERT INTO mst_buy_campaign_target(content_id,category_id,sub_category_id,create_by,create_at)VALUES({$content_id},17,415,{$uid},NOW())";
$sql = mysql_query($query);
$query = "INSERT INTO mst_buy_campaign_target(content_id,category_id,sub_category_id,create_by,create_at)VALUES({$content_id},20,416,{$uid},NOW())";
$sql = mysql_query($query);
$query = "INSERT INTO mst_buy_campaign_target(content_id,category_id,sub_category_id,create_by,create_at)VALUES({$content_id},18,411,{$uid},NOW())";
$sql = mysql_query($query);
$query = "INSERT INTO mst_buy_campaign_target(content_id,category_id,sub_category_id,create_by,create_at)VALUES({$content_id},18,412,{$uid},NOW())";
$sql = mysql_query($query);
$query = "INSERT INTO mst_buy_campaign_target(content_id,category_id,sub_category_id,create_by,create_at)VALUES({$content_id},51,595,{$uid},NOW())";
$sql = mysql_query($query);
$query = "INSERT INTO mst_buy_campaign_target(content_id,category_id,sub_category_id,create_by,create_at)VALUES({$content_id},29,337,{$uid},NOW())";
$sql = mysql_query($query);
$query = "INSERT INTO mst_buy_campaign_target(content_id,category_id,sub_category_id,create_by,create_at)VALUES({$content_id},50,544,{$uid},NOW())";
$sql = mysql_query($query);
$query = "INSERT INTO mst_buy_campaign_target(content_id,category_id,sub_category_id,create_by,create_at)VALUES({$content_id},19,414,{$uid},NOW())";
$sql = mysql_query($query);
$query = "INSERT INTO mst_buy_campaign_target(content_id,category_id,sub_category_id,create_by,create_at)VALUES({$content_id},22,418,{$uid},NOW())";
$sql = mysql_query($query);
$query = "INSERT INTO mst_buy_campaign_target(content_id,category_id,sub_category_id,create_by,create_at)VALUES({$content_id},23,419,{$uid},NOW())";
$sql = mysql_query($query);
$query = "INSERT INTO mst_buy_campaign_target(content_id,category_id,sub_category_id,create_by,create_at)VALUES({$content_id},17,420,{$uid},NOW())";
$sql = mysql_query($query);

if($sql){
	$HTTP_REFERER = $_SERVER["HTTP_REFERER"];
	header("location: {$HTTP_REFERER}");
	exit();
}else{
	print "失敗しました。";
	mysql_error();
	exit();
}










