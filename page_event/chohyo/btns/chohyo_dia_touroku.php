<?
$uid = $_SESSION["uid"];
$time_no = date('Y-m-d H:i:s');
$time = "'".$time_no."'";

$log_ip = $_SERVER["REMOTE_ADDR"];
$log_table = "chohyo_seihin";
$log_action = "edit";//ここでは固定
//user_login取得
$user_login_query = " SELECT user_login FROM users WHERE user_id={$uid} LIMIT 1";

$rs = CustomQuery($user_login_query);
while ($data = db_fetch_array($rs))
{
	$log_user = $data["user_login"];
}




$chohyo_date = date("Y-m-d");

$product_id_list_array = array();
while($data = $button->getNextSelectedRecord()){
	$up_id = $data["product_id"];
	$chohyo_id = $data["chohyo_id"];
	$discrimination = $data["Discrimination"];
	if($chohyo_id == ''){
		//帳票IDがない場合のみ作動させる


		//データ検索し、存在確認
		$count_query = " SELECT COUNT(`id`) as `id_count` FROM chohyo WHERE `date`='{$chohyo_date}' AND discrimination='{$discrimination}' AND `type`=2 LIMIT 1";
		$count_res = CustomQuery($count_query);
		$count_data = db_fetch_array($count_res);
		if($count_data["id_count"] < 1){
			//帳票データの作成
			$chohyo_insert_sql = "INSERT INTO chohyo (`create_at`, `create_by`, `date`, `discrimination`, `type`) VALUES ({$time},'{$uid}','{$chohyo_date}','{$discrimination}',2)";
			CustomQuery($chohyo_insert_sql);
		}


		//作成済み、若しくは作成したデータのID取得
		$chohyo_query = " SELECT `id` FROM chohyo WHERE `date`='{$chohyo_date}' AND discrimination='{$discrimination}' AND `type`=2 LIMIT 1";

		try {
			$chohyo_res = CustomQuery($chohyo_query);
			while($chohyo_data = db_fetch_array($chohyo_res)){
				$chohyo_id = $chohyo_data["id"];
				// $result["txt"] = $chohyo_id;
			}
		} catch (Exception $e) {
			$result["txt"] = $e->getMessage();
		}


		//商品に帳票IDを反映,ステータスを変更
		if($up_id != ''){
			$sql = "UPDATE shouhin SET `chohyo_type`=2, `status`=134 , chohyo_id = '{$chohyo_id}' , updated_by = {$uid} , updated_at = {$time} WHERE product_id = {$up_id} limit 1";
			// $result["txt"] = $sql;
		}

		CustomQuery($sql);
		$result["txt"] = "OK";

	}else{
		$result["txt"] = "すでに帳票IDが登録されています。";
	}



	$product_id_list_array[] = $up_id;
};


if($chohyo_id != ''){
	$count_query = " SELECT COUNT(`product_id`) as `id_count` FROM shouhin WHERE chohyo_id={$chohyo_id} ";
	$count_res = CustomQuery($count_query);
	$count_data = db_fetch_array($count_res);

	$id_count = $count_data["id_count"];

	// $word = "[info][title](cracker)帳票id {$chohyo_id}(cracker)[/title]ダイヤ：{$id_count}件 ";
	$word = "ダイヤ：{$id_count}件 \n";
	$word .= "鑑別：{$discrimination}";
	// $word .= "鑑別：{$discrimination}[/info]";


	//メール送信
	$mail_body = $word;
	$sendPostData = array(
		"subject" => "帳票id {$chohyo_id}",
		"text" => $mail_body,
	);
	$sendPostData = http_build_query($sendPostData, "", "&");
	$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => $sendPostData));
	$sendPostContext = stream_context_create($sendPostDataOptions);
	try{
		file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, $sendPostContext);
	}catch(Exception $e){}


}

// $log_descri = "---Keys\n";
// $product_id_list = implode(",\n",$product_id_list_array);
// $log_descri = $log_descri."product_id : \n{$product_id_list}\n";
// $log_descri = $log_descri."---Fields\n";
// $log_descri = $log_descri."label_output_flag[new]:1\n";
// $log_descri = $log_descri."kaitori_by[new]:{$uid}\n";
// $log_descri = $log_descri."kaitory_hi[new]:{$time_no}\n";
// $log_descri = $log_descri."updated_by[new]:{$uid}\n";
// $log_descri = $log_descri."updated_at[new]:{$time_no}\n";

// // $log_descri = "test";

// $insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$time},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
// // $insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$time},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','log_descri')";
// CustomQuery($insert_sql);


?>
