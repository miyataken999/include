<?
// 	//更新カラムの設定
// 	$up_col = array();
// 	array_push($up_col,'Exhibition_Date');
// 	array_push($up_col,'REG_EXHIBITOR');
// 	array_push($up_col,'updated_at');
// 	array_push($up_col,'updated_by');
// 	//更新内容の配列渡し
// 	$up_data = array();
// 	array_push($up_data,date("Y-m-d H:i:s"));
// 	array_push($up_data,$user_id);
// 	array_push($up_data,date("Y-m-d H:i:s"));
// 	array_push($up_data,$user_id);

// $a = "zip";//ページの名称
// $b = 5395;//作業ごとの可変にする（ここでは対象とするボックスID）
// box_zip_log($a,$b,$up_col,$up_data,$user_id);


function box_zip_log($log_table,$where_value,$up_col,$up_data,$user_id,$where_key,$log_action,$up_table){

	//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	//---BOX連動のstore_products反映のログ
	//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

	//ファイルごとの個別指定部分
	// $log_table = "zip";//ページの名称
	//whereの設定
	// $where_value = "5395";//作業ごとの可変にする（ここでは対象とするボックスID）
	// $where_key = "box_id";//ここでは固定

	$log_action = "edit";//ここでは固定
	//更新する対象テーブル
	$up_table = "store_products";



	$log_time = date("Y-m-d H:i:s");
	$log_ip = $_SERVER["REMOTE_ADDR"];

	//user_login取得
	$user_login_query = " SELECT user_login FROM users WHERE user_id={$user_id} LIMIT 1";
	$user_login_sql = mysql_query('SET NAMES utf8');
	$user_login_sql = mysql_query($user_login_query);
	$user_login_result = mysql_fetch_assoc($user_login_sql);
	$log_user = $user_login_result["user_login"];
	//user_login取得 end





	$old_query = "SELECT product_id";
	for ($up_desc_i=0; $up_desc_i < count($up_col); $up_desc_i++) {
		$old_query .= ",".$up_col[$up_desc_i];
	}
	$old_query .= " FROM {$up_table} WHERE {$where_key}={$where_value}";
	$old_sql = mysql_query('SET NAMES utf8');
	$old_sql = mysql_query($old_query);
	//ログ内容に、古いSELECTした値と、新しい値を出力する
	$log_descri = "";
	$log_descri .= "---Keys\n{$where_key}:{$where_value}\n";
	$log_descri .= "---Fields\n";
	while($old_result = mysql_fetch_assoc($old_sql)){
		$log_descri .= "\n★product_id:{$old_result['product_id']}\n";

		for ($up_desc_i=0; $up_desc_i < count($up_col); $up_desc_i++) {
			$col_name = $up_col[$up_desc_i];
			$old_val = $old_result[$col_name];
			$new_val = $up_data[$up_desc_i];
			$log_descri .= "{$col_name}[old]:{$old_val}\n";
			$log_descri .= "{$col_name}[new]:{$new_val}\n";
		}

	}

	// $log_descri;

	$insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ('{$log_time}','{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	// print $insert_sql."<br><br>";
	$result_flag = mysql_query('SET NAMES utf8');
	$result_flag = mysql_query($insert_sql);
	if (!$result_flag) {
		print mysql_error();
		exit('データを登録できませんでした。');
	}


}//end box_zip_log
?>
