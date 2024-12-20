<?
$uid = $_SESSION["uid"];
$time_no = date('Y-m-d H:i:s');
$time = "'".$time_no."'";

$log_ip = $_SERVER["REMOTE_ADDR"];
$log_table = "users___estimate";
$log_action = "btn";//ここでは固定
//user_login取得
$user_login_query = " SELECT user_login FROM lounge_users WHERE user_id={$uid} LIMIT 1";

$rs = CustomQuery($user_login_query);
while ($data = db_fetch_array($rs))
{
	$log_user = $data["user_login"];
}


$product_id_list_array = array();
$params["txt"] = "";
while($data = $button->getNextSelectedRecord()){
	//各キー
	$up_id = $data["id"];
	$status = $data["status"];
	if($status == 1){
		$henkou = "ok";
		$query = "UPDATE users___estimate SET `status`=2,`mail_flag`=1,`unread`=1 WHERE id={$up_id} LIMIT 1";
		CustomQuery($query);

		$user_id = $data["user_id"];
	}

}

if($henkou == "ok"){
	$query = "INSERT INTO post(user_id,created_by,`text`,user_flag)VALUES(";
	$query .= "{$user_id}";
	$query .= ",{$uid}";
	$text = 'お見積り結果を送信致しました。<a href="https://rifa.life/mypage/Past_results">お見積り状況一覧</a>からご確認ください。';
	$query .= ",'{$text}'";
	$query .= ",'0'";
	$query .= ") ";

	CustomQuery($query);


	$result['user_id'] = $user_id;
}else{
	$param['txt'] = '新規のものがありません。';
}
