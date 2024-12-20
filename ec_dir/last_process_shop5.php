<?
// ini_set("display_errors",1);

mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$user_id = $_GET["user_id"];
$time_no = date('Y-m-d H:i:s');
$time = "'".$time_no."'";

$log_ip = $_SERVER["REMOTE_ADDR"];
$log_table = "ec_dir";
$log_action = "edit";//ここでは固定
//user_login取得
$user_login_query = " SELECT user_login FROM users WHERE user_id={$user_id} LIMIT 1";

$rs = mysql_query('SET NAMES utf8');
$rs = mysql_query($user_login_query);
$rs_user = mysql_fetch_assoc($rs);

$log_user = $rs_user["user_login"];





$raku_dir_id = htmlspecialchars($_GET["raku_dir_id"]);
$yahoo_dir_id = htmlspecialchars($_GET["yahoo_dir_id"]);
$seq = htmlspecialchars($_GET["seq"]);
$rakutag_res = htmlspecialchars($_GET["rakutag_res"]);

print "seq{$seq}<br>";
print "raku_dir_id{$raku_dir_id}<br>";
print "yahoo_dir_id{$yahoo_dir_id}<br>";

//shouhinの
//楽天ディレクトリID
//raku_dir_result


if(($seq != "") && ($raku_dir_id != "") && ($yahoo_dir_id != "")){

//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	//shouhinへ反映
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	// $up_query = " UPDATE shouhin_copy80_20170331 SET raku_dir_result={$raku_dir_id} , updated_by={$user_id} , updated_at = {$time}  WHERE product_id={$seq} ";
	$up_query = " UPDATE shouhin SET raku_dir_result={$raku_dir_id} , updated_by={$user_id} , updated_at = {$time} , raku_tag_result = '{$rakutag_res}'  WHERE product_id={$seq} LIMIT 1 ";
	print $up_query;
	$up_sql = mysql_query('SET NAMES utf8');
	$up_sql = mysql_query($up_query);


//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	//auctionsへ反映
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	// $auc_up_query = " UPDATE auctions_copy11_20170331 SET Categories={$yahoo_dir_id} WHERE product_id={$seq} ";
	$auc_up_query = " UPDATE auctions SET Categories={$yahoo_dir_id} WHERE product_id={$seq} LIMIT 1 ";
	print $auc_up_query;
	$auc_up_sql = mysql_query('SET NAMES utf8');
	$auc_up_sql = mysql_query($auc_up_query);


	$log_descri = "---Keys\n";
	$log_descri = $log_descri."product_id : \n{$seq}\n";
	$log_descri = $log_descri."---Fields\n";

	$log_descri = $log_descri."raku_dir_result[new]:{$raku_dir_id}\n";
	$log_descri = $log_descri."Categories[new]:{$yahoo_dir_id}\n";
	$log_descri = $log_descri."raku_tag_result[new]:{$rakutag_res}\n";
	$log_descri = $log_descri."updated_by[new]:{$user_id}\n";
	$log_descri = $log_descri."updated_at[new]:{$time_no}\n";

	$insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$time},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	mysql_query($insert_sql);


}else{
	print "更新失敗です。更新内容が不足しています。";
}




