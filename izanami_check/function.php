<?
function single_quote_del($val){
	$val = str_replace("'","’",$val);
	return $val;
}

function user_name_change($num){
	if($num != ""){
		$query = "SELECT first_name FROM users WHERE user_id={$num}";
		$sql = mysql_query('SET NAMES utf8');
		$sql = mysql_query($query);
		$result = mysql_fetch_assoc($sql);
		print $result['first_name'];
	}
}
function check_img($num){
	if($num == 0){
		print '<img src="/include/img/check_no.gif">';
	}else{
		print '<img src="/include/img/check_yes.gif">';
	}
}

function user_select_list($uid,$name){
	$query = "SELECT user_id,first_name FROM users ORDER BY income_id";
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$print = "<select name='{$name}'>";
	$print .= "<option value='' >選択してください。</option>";
	while($result = mysql_fetch_assoc($sql)){
		$user_id = $result["user_id"];
		$user_name = $result["first_name"];
		if($user_id == $uid){
			$print .= "<option value='{$user_id}' selected>{$user_name}</option>";
		}else{
			$print .= "<option value='{$user_id}' >{$user_name}</option>";
		}
	}
	$print .= "</select>";
	print $print;

}


function insert_log($log_table,$key_val,$into_col,$into_val,$user_id,$key_name,$log_action){
	$log_time = date("Y-m-d H:i:s");
	$log_ip = $_SERVER["REMOTE_ADDR"];

	//user_login取得
	$user_login_query = " SELECT user_login FROM internet.users WHERE user_id={$user_id} LIMIT 1";
	$user_login_sql = mysql_query('SET NAMES utf8');
	$user_login_sql = mysql_query($user_login_query);
	$user_login_result = mysql_fetch_assoc($user_login_sql);
	$log_user = $user_login_result["user_login"];
	//user_login取得 end
	$into_col = str_replace("(","",$into_col);
	$into_col = str_replace(")","",$into_col);
	$into_col_array = explode(",",$into_col);

	$into_val = str_replace("(","",$into_val);
	$into_val = str_replace(")","",$into_val);
	$into_val_array = explode("','",$into_val);


	$log_descri = "";
	$log_descri .= "---Keys\n{$key_name}:{$key_val}\n";
	$log_descri .= "---Fields\n";
	for ($i=0; $i < count($into_col_array); $i++) {
		$into_val_array[$i] = str_replace("'","",$into_val_array[$i]);
		if($into_val_array[$i] != ""){
			$log_descri .= "{$into_col_array[$i]}[new]:{$into_val_array[$i]}\n";
		}
	}

	// $log_descri;

	// $insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ('{$log_time}','{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	$insert_sql = "INSERT INTO internet.evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ('{$log_time}','{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	// print $insert_sql."<br><br>";
	$result_flag = mysql_query('SET NAMES utf8');
	$result_flag = mysql_query($insert_sql);
	if (!$result_flag) {
		print mysql_error();
		// exit('データを登録できませんでした。');
	}


}//end insert_log


function data_select($db_name,$table,$key_name,$key){
	$query = " SELECT * FROM {$db_name}.{$table} WHERE {$key_name}={$key} LIMIT 1";
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$data = mysql_fetch_assoc($sql);
	return $data;
}//end data_select

//例

function update_log($before_data,$after_data,$log_table,$key_val,$up_col,$user_id,$key_name,$log_action){
	$log_time = date("Y-m-d H:i:s");
	$log_ip = $_SERVER["REMOTE_ADDR"];

	//user_login取得
	$user_login_query = " SELECT user_login FROM internet.users WHERE user_id={$user_id} LIMIT 1";
	$user_login_sql = mysql_query('SET NAMES utf8');
	$user_login_sql = mysql_query($user_login_query);
	$user_login_result = mysql_fetch_assoc($user_login_sql);
	$log_user = $user_login_result["user_login"];
	//user_login取得 end

	$log_descri = "";
	$log_descri .= "---Keys\n{$key_name}:{$key_val}\n";
	$log_descri .= "---Fields\n";


	foreach ($after_data as $key => $new_val) {
		$new_val = str_replace("'","",$new_val);
		$old_val = $before_data[$key];
		$old_val = str_replace("'","",$old_val);
		if($new_val != ""){
			if($new_val != $old_val){
				$log_descri .= "{$key}[old]:{$old_val}\n";
				$log_descri .= "{$key}[new]:{$new_val}\n";
			}
		}
	}

	// $insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ('{$log_time}','{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	$insert_sql = "INSERT INTO internet.evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ('{$log_time}','{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	// print $insert_sql."<br><br>";
	$result_flag = mysql_query('SET NAMES utf8');
	$result_flag = mysql_query($insert_sql);
	if (!$result_flag) {
		print mysql_error();
		// exit('データを登録できませんでした。');
	}
}//end update_log



function delete_log($before_data,$log_table,$key_val,$user_id,$key_name){
	$log_action = "delete";
	$log_time = date("Y-m-d H:i:s");
	$log_ip = $_SERVER["REMOTE_ADDR"];

	//user_login取得
	$user_login_query = " SELECT user_login FROM internet.users WHERE user_id={$user_id} LIMIT 1";
	$user_login_sql = mysql_query('SET NAMES utf8');
	$user_login_sql = mysql_query($user_login_query);
	$user_login_result = mysql_fetch_assoc($user_login_sql);
	$log_user = $user_login_result["user_login"];
	//user_login取得 end

	$log_descri = "";
	$log_descri .= "---Keys\n{$key_name}:{$key_val}\n";
	$log_descri .= "---Fields\n";


	foreach ($before_data as $key => $old_val) {
		$old_val = str_replace("'","",$old_val);
		$log_descri .= "{$key}[old]:{$old_val}\n";
	}

	// $insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ('{$log_time}','{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	$insert_sql = "INSERT INTO internet.evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ('{$log_time}','{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	// print $insert_sql."<br><br>";
	$result_flag = mysql_query('SET NAMES utf8');
	$result_flag = mysql_query($insert_sql);
	if (!$result_flag) {
		print mysql_error();
		// exit('データを登録できませんでした。');
	}
}//end delete_log

?>
