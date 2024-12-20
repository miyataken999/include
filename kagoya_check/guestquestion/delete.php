<?
$close_flag = mysql_close($link);
if ($close_flag){
}
$close_flag = mysql_close($link_internet);
if ($close_flag){
}
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//delete前データ取得
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
$db_name = "internet";
$table = "Eoc_guestquestion";
$key_name = "id";
$key = $delete_id;
$before_data = data_select($db_name,$table,$key_name,$key);
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//delete前データ取得 END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■


//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//削除
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
if($delete_id != ""){
	$query = "DELETE FROM Eoc_guestquestion WHERE id={$delete_id} LIMIT 1";
	print $query;
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//削除 END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■


$close_flag = mysql_close($link);
if ($close_flag){
}
$close_flag = mysql_close($link_internet);
if ($close_flag){
}

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";



$log_table = "kagoya_Eoc_guestquestion";
$key_val = $delete_id;
$user_id = $uid;
$key_name = "id"; //ログテキスト上のkeyの項目名
delete_log($before_data,$log_table,$key_val,$user_id,$key_name);






$close_flag = mysql_close($link);
if ($close_flag){
}
$close_flag = mysql_close($link_internet);
if ($close_flag){
}

?>
