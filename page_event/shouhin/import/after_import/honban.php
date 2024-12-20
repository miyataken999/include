<?php
$uid = $_SESSION["uid"];
$no_time = date('Y-m-d H:i:s');
$time = "'".$no_time."'";

$import_table = "shouhin";


	$log_descri = $log_descri."---Fields\n";
	$log_descri .= "インポート先 {$import_table}\n";
	$log_descri .= "{$no_time}\n";
	$log_descri .= "成功件数　{$count}件\n";
	$log_descri .= "失敗件数　{$skipCount}件\n";

	$log_ip = $_SERVER["REMOTE_ADDR"];
	$log_table = "shouhin";
	$log_action = "import";//ここでは固定

	$log_user_sql = "SELECT user_login FROM users WHERE user_id = {$uid} LIMIT 1";
	$log_user_rs = CustomQuery($log_user_sql);
	$log_user_name = db_fetch_array($log_user_rs);
	$log_user = $log_user_name["user_login"];

	$insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$time},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	CustomQuery($insert_sql);


?>
