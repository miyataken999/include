<?
$uid = $_SESSION["uid"];
$no_time = date('Y-m-d H:i:s');
$time = "'".$no_time."'";

while($data = $button->getNextSelectedRecord()){
	$up_id = $data["product_id"];
	$up_other_cost = $data["other_cost"];
	$sql = "UPDATE shouhin SET other_cost = '{$up_other_cost}' ,updated_by = {$uid} , updated_at = {$time} WHERE product_id = {$up_id}";
	CustomQuery($sql);

	$log_descri = "";
	$log_text = "";

	$log_descri = "---Keys\n";
	$log_descri = $log_descri."product_id : {$up_id}\n";
	$log_descri = $log_descri."---Fields\n";
	//-------追加ログ全てのパターン
	$log_text .= "other_cost[new]:{$up_other_cost}\n";
	$log_text .= "updated_by[new]:{$uid}\n";
	$log_text .= "updated_at[new]:{$no_time}\n";
	//-------追加ログ全てのパターン END
	$log_descri = $log_descri.$log_text;

	$log_ip = $_SERVER["REMOTE_ADDR"];
	$log_table = "shouhin_batch";
	$log_action = "edit";//ここでは固定

	$log_user_sql = "SELECT user_login FROM users WHERE user_id = {$uid} LIMIT 1";
	$log_user_rs = CustomQuery($log_user_sql);
	$log_user_name = db_fetch_array($log_user_rs);
	$log_user = $log_user_name["user_login"];

	$insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$time},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	CustomQuery($insert_sql);


};
?>