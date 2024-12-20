<?
// Description
// Occurs after new record was added

// Parameters
// $values     - array of values has been written to the database.
//               To access specific field value use $values["FieldName"].
//               "dict" is an alternate name for this parameter.
// $keys       - array of key field values of a new record
//               To access specific field value use $values["KeyFieldName"].
// $inline     - equals to true when the Inline Add in process, false otherwise.
// $pageObject - an object of Page class representing the current page


/*******************************************************************
id_keyテーブルにデータ生成し、seqテーブルに生成された値を取得し、品番として商品テーブルに反映する
********************************************************************/

if($values["product_id"] != ''){
	$product_id = $values["product_id"];
	//一度更新をかけることでトリガーでid_keyテーブルにデータ生成
	try {
		$sql = "UPDATE shouhin SET updated_at = '".date("Y/m/d H:i:s")."' WHERE product_id={$product_id} limit 1";
		$rs = CustomQuery($sql);
	} catch (Exception $e) {
		$error_txt = "▼エラー発生▼\n";
		$error_txt .= $e->getMessage();
		error_log($error_txt,1,"nishitani@urlounge.co.jp");
		print $error_txt;
		exit();
	}


	//該当商品のSEQ取得
	try {
		$sql = "SELECT * FROM seq where product_id={$product_id} limit 1";
		$rs = CustomQuery($sql);
		$data = db_fetch_array($rs);
		// $error_txt = "▼成功▼\n";
		// $error_txt .= "\nクエリ\n".$sql;
		// error_log($error_txt,1,"nishitani@urlounge.co.jp");
	} catch (Exception $e) {
		$error_txt = "▼エラー発生▼\n";
		$error_txt .= $e->getMessage();
		error_log($error_txt,1,"nishitani@urlounge.co.jp");
		print $error_txt;
		exit();
	}

	//イニシャルが空欄だったら X
	if($data["initial_name"] == ""){
		$ini = "X";
	}else{
		$ini= $data["initial_name"];
	}

	//seqテーブルの値から品番生成
	$yahoo_seq=$data["sub_cate"].$ini.$data["c"].$data["d"].$data["sex_ini"];

	//生成した品番を商品テーブルに反映
	try {
		$sql = "UPDATE shouhin SET yahoo_sinaban = '{$yahoo_seq}' WHERE product_id={$product_id} limit 1";
		$rs = CustomQuery($sql);
		$data2 = db_fetch_array($rs);
		// $error_txt = "▼成功▼\n";
		// $error_txt .= "\nクエリ\n".$sql;
		// error_log($error_txt,1,"nishitani@urlounge.co.jp");
	} catch (Exception $e) {
		$error_txt = "▼エラー発生▼\n";
		$error_txt .= $e->getMessage();
		error_log($error_txt,1,"nishitani@urlounge.co.jp");
		print $error_txt;
		exit();
	}





	/**********************************************************
	ログ
	**********************************************************/
	$nowtime_no = date("Y/m/d H:i:s");
	$nowtime = "'".$nowtime_no."'";
	$log_ip = $_SERVER["REMOTE_ADDR"];
	$log_table = "dia";
	$log_action = "add";//ここでは固定
	//user_login取得
	$user_login_query = " SELECT user_login FROM users WHERE user_id={$_SESSION['uid']} LIMIT 1";
	$rs = CustomQuery($user_login_query);
	while ($data = db_fetch_array($rs))
	{
		$log_user = $data["user_login"];
	}
	$log_descri = "---Keys\n";
	$log_descri = $log_descri."product_id : {$product_id}\n";
	$log_descri = $log_descri."---Fields\n";
	$log_descri = $log_descri."yahoo_sinaban[new]:{$yahoo_seq}\n";


	try {
		$insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$nowtime},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
		CustomQuery($insert_sql);
	} catch (Exception $e) {
		$error_txt = "▼エラー発生▼\n";
		$error_txt .= $e->getMessage();
		error_log($error_txt,1,"nishitani@urlounge.co.jp");
		print $error_txt;
		exit();
	}



}


$user_id = $_SESSION['uid'];
$product_id = $values['product_id'];
$new_st = $values["status"];

// if(($new_st == 32) OR ($new_st == 33) OR ($new_st == 126)){

  //自動ラベルのテンプレートIDの振り分け
  $current_page_pass = $_SERVER["HTTP_REFERER"];
  if(stristr($current_page_pass, "satei_of_brand1_list")){
  	$label_tmp = 2;
  }else{
  	$label_tmp = 1;
  }


  $label_query = "SELECT `product_id` FROM user_label_output WHERE `product_id`='{$product_id}' limit 1 ";
  $label_res = CustomQuery($label_query);
  $label_data = db_fetch_array($label_res);

  if($label_data == NULL){
    $user_label_output_query = "INSERT INTO user_label_output (`user_id`, `product_id`, `create_at`, `type`)VALUES('{$user_id}', '{$product_id}', NOW(), '{$label_tmp}')";
    CustomQuery($user_label_output_query);
  }
// }

if($new_st == 120){
  // D完了だったら販売先バッチまわす
  file_get_contents("https://rifa.life/evaProject/api/ichiba_hanbaisaki_batch/D");
}
