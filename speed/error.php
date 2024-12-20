<?
if(!strstr($Response,'error')){
	$audit_query = "INSERT INTO Eoc_takuhai_speed_audit (
	takuhai_id,
	datetime,
	field,
	description,
	SignatureString
		) VALUES (
	'{$Id}',
	NOW(),
	'',
	'成功しました。',
	'{$SignatureString}'
	)";
	$audit_sql = mysql_query('SET NAMES utf8');
	$audit_sql = mysql_query($audit_query);
}else{

$obj = json_decode($Response,true);
$obj = (array)$obj;

$errors = $obj['errors'];



foreach ((array)$errors as $msg) {

	$e_msg = $msg['message'];
	$field = $msg['field'];

	foreach ($e_msg as $key => $messege) {
	}
	print $messege;

	$e_query = "SELECT * FROM Eoc_takuhai_error WHERE msg = '{$messege}' AND field = '{$field}' LIMIT 1";
	$e_sql = mysql_query('SET NAMES utf8');
	$e_sql = mysql_query($e_query);
	$e_result = mysql_fetch_assoc($e_sql);

	if($e_sql == false){
		$e_id = 24;
	}else{
		$e_id = $e_result['id'];
	}

	//EVA側更新
	$msg_query = "UPDATE Eoc_takuhai SET
	status = 14,
	shuka_error = '{$e_id}',
	user_name = '{$Name}',
	user_name_kana = '{$KanaName}',
	user_yuubinn = '{$ZipCode}',
	user_todou = '{$Prefectures}',
	user_address1 = '{$Address1}',
	user_address2 = '{$Address2}',
	user_tel = '{$Tel}',
	user_mail = '{$Mail}',
	date_and_time_hidden = '{$RequestDate} {$RequestTime}',
	speed_box = '{$BuggNum}箱',
	updated_by = '{$User_id}'
	WHERE id = {$Id} LIMIT 1";

	$msg_sql = mysql_query('SET NAMES utf8');
	$msg_sql = mysql_query($msg_query);

	// print $msg_query;

	// print $user_id;

	$c_query = "SELECT * FROM Eoc_takuhai_error WHERE id = '{$e_id}' LIMIT 1";
	$c_sql = mysql_query('SET NAMES utf8');
	$c_sql = mysql_query($c_query);
	$c_result = mysql_fetch_assoc($c_sql);

	$error_msg = $c_result['name'];
	$error_audit = $c_result['msg'];


	$audit_query = "INSERT INTO Eoc_takuhai_speed_audit (
	takuhai_id,
	datetime,
	field,
	description,
	SignatureString
		) VALUES (
	'{$Id}',
	NOW(),
	'{$field}',
	'{$messege}',
	'{$SignatureString}'
	)";

	$audit_sql = mysql_query('SET NAMES utf8');
	$audit_sql = mysql_query($audit_query);
}


    //チャット送信
	$u_query = "SELECT * FROM vw_cw_task_id WHERE user_id = '{$User_id}' LIMIT 1";
	$u_sql = mysql_query('SET NAMES utf8');
	$u_sql = mysql_query($u_query);
	$u_result = mysql_fetch_assoc($u_sql);
	$to_ids = $u_result['cw_task_id'];
	$cw_to_id = $u_result['cw_TO_id'];
	$cw_name = $u_result['first_name'];

	function cw_task($word,$to_ids,$room='84134721',$token='bot',$limit='')
    {
        //タスク宛先
        global $to_ids;
        $token = $$token;

        if($limit == ''){
          $limit = time();
        }

        $word = str_replace("&","＆",$word);
        $word = str_replace("'","’",$word);
        $word = str_replace("\"","”",$word);

	}




	//チャットワーク送信
	$ua_data_upper = strtoupper($ua_data);

	$cw_body = "[info][title](sweat)集荷申込エラー発生(sweat)[/title]";
	$cw_body .= "[To:{$cw_to_id}] {$cw_name}さん\n";
	$cw_body .= "(!)集荷依頼は完了していません\n";
	$cw_body .= "https://rifa.life/shop5/Eoc_takuhai_speed_list.php?q=(id~equals~{$Id})\n";
	$cw_body .= "●名前:{$Name}様\n";
	$cw_body .= "●エラー内容:{$error_msg}\n";
	$cw_body .= "[/info]";

	// print $cw_body;


	cw_task($cw_body);
}
?>


<br><br>
--------------------ここからはレスポンス-----------------------
