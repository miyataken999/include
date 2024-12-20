<?
$uid = $_SESSION["uid"];
$time_no = date('Y-m-d H:i:s');
$time = "'".$time_no."'";

$log_ip = $_SERVER["REMOTE_ADDR"];
$log_table = "label";
$log_action = "edit";//ここでは固定
//user_login取得
$user_login_query = " SELECT user_login FROM users WHERE user_id={$uid} LIMIT 1";

$rs = CustomQuery($user_login_query);
while ($data = db_fetch_array($rs))
{
	$log_user = $data["user_login"];
}


$product_id_list_array = array();
while($data = $button->getNextSelectedRecord()){
	$up_id = $data["product_id"];
	$sql = "UPDATE shouhin SET label_output_flag = 1 , kaitori_by={$uid} , kaitory_hi = {$time} , updated_by = {$uid} , updated_at = {$time} WHERE product_id = {$up_id}";
	CustomQuery($sql);

	$product_id_list_array[] = $up_id;
};


$log_descri = "---Keys\n";
$product_id_list = implode(",\n",$product_id_list_array);
$log_descri = $log_descri."product_id : \n{$product_id_list}\n";
$log_descri = $log_descri."---Fields\n";
$log_descri = $log_descri."label_output_flag[new]:1\n";
$log_descri = $log_descri."kaitori_by[new]:{$uid}\n";
$log_descri = $log_descri."kaitory_hi[new]:{$time_no}\n";
$log_descri = $log_descri."updated_by[new]:{$uid}\n";
$log_descri = $log_descri."updated_at[new]:{$time_no}\n";

// $log_descri = "test";

$insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$time},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
// $insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$time},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','log_descri')";
CustomQuery($insert_sql);


?>
