<?
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//izanami 更新
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
include $_SERVER["DOCUMENT_ROOT"]."/include/connection_izanami.php";



$query = "UPDATE {$table_name} SET ecc_id={$kousin_id} WHERE id={$hikaku_id} LIMIT 1";
// print $query;
$c = mysql_query($query);
if(!$c){
	mysql_error();
	exit();
}











$close_flag = mysql_close($link);
if ($close_flag){
// print('<br>切断に成功しました。<br>');
}
$close_flag = mysql_close($link_internet);
if ($close_flag){
// print('<br>切断に成功しました。<br>');
}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//EVA 更新
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";




$query = "UPDATE {$target_table} SET mypage_id={$hikaku_id} , updated_at=NOW() , registerd_id={$uid} WHERE ecc_id={$kousin_id} LIMIT 1";
// print $query;
mysql_query($query);

if(!$c){
	mysql_error();
	exit();
}else{
	header("location: https://rifa.life/MyPage/users_list.php");
	exit();
}
