<?
// Parameters
// $values     - array of values to be written to the database.
//               To access specific field value use $values["FieldName"]
//               "dict" is an alternate name for this parameter.
// $message    - place the message to be displayed into this variable.
// $inline     - equals to true when the Inline Add in process, false otherwise
// $pageObject - an object of Page class representing the current page


$nowtime = date("Y-m-d H:i:s");
$user_id = $_SESSION['UserData']['user_id'];
// print var_dump($_SESSION);
if($user_id != ""){

	/**********************************************************
	登録者
	**********************************************************/
	if($user_id != ""){
		$values["created_by"] = $user_id;
	}

	/**********************************************************
	登録日
	**********************************************************/
	if($nowtime != ""){
		$values["created_at"] = $nowtime;
	}

}

include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";

$id = $values['user_id'];
$query = "SELECT * FROM users WHERE id={$id} LIMIT 1";
$res = CustomQuery($query);
$data = db_fetch_array($res);

function escapeFirst($str){
	$str = htmlspecialchars($str,ENT_NOQUOTES);
	$str = str_replace("'","’",$str);
	$str = str_replace("\"","”",$str);
	return $str;
}

function escapeFirst_decode($str){
	$str = htmlspecialchars_decode($str);
	$str = str_replace("’","'",$str);
	$str = str_replace("”","\"",$str);
	return $str;
}

$user_id = $data['user_id'];
$user_name = $data['name'];
$user_name_kana = $data['name_kana'];
$user_tel = $data['tel'];
$user_mail = $data['email'];
$user_yuubinn = $data['zip1'];
$user_todou = $data['address1'];
$user_sikutyouson = $data['address2'];
$user_banti = $data['address3'];

$error_m = '';
if($user_name == ''){
	$error_m .= '名前を入力してください\n';
}
if($user_name_kana == ''){
	$error_m .= 'フリガナを入力してください\n';
	// $error_m .= "<br>";
}
if($user_tel == ''){
	$error_m .= '電話番号を入力してください\n';
	// $error_m .= "<br>";
}
if($user_mail == ''){
	$error_m .= 'メールアドレスを入力してください\n';
	// $error_m .= "<br>";
}
if($user_yuubinn == ''){
	$error_m .= '郵便番号を入力してください\n';
	// $error_m .= "<br>";
}
if($user_todou == ''){
	$error_m .= '都道府県を入力してください\n';
	// $error_m .= "<br>";
}
if($user_sikutyouson == ''){
	$error_m .= '市区町村を入力してください\n';
	// $error_m .= "<br>";
}
if($user_banti == ''){
	$error_m .= '市区町村以下を入力してください\n';
	// $error_m .= "<br>";
}


$type_selection = $values['type_selection'];
$brand_confirm = $values['brand_confirm'];
$number_of_times = $values['number_of_times'];
$kiyaku_check = $values['kiyaku_check'];

$speed_box = $values['speed_box'];
$date_and_time_hidden = $values['date_and_time'];
$insurance_speed = $values['insurance'];
$bikou = escapeFirst($values['bikou']);

$time_select_hidden = $values['time_select'];

$kit_denpyou = $values['kit_denpyou'];
$kit_huutou = $values['kit_huutou'];
$kit_S = $values['kit_S'];
$kit_M = $values['kit_M'];
$kit_L = $values['kit_L'];

$b_kit_text = "";
if($kit_denpyou != ""){
    $b_kit_text .= '着払い伝票：'.$kit_denpyou.'個';
}
if($kit_huutou != ""){
    if($b_kit_text != ""){$b_kit_text .= "\n";}
    $b_kit_text .= 'クッション封筒：'.$kit_huutou.'個';
}
if($kit_S != ""){
    if($b_kit_text != ""){$b_kit_text .= "\n";}
    $b_kit_text .= 'ダンボールS：'.$kit_S.'個';
}
if($kit_M != ""){
    if($b_kit_text != ""){$b_kit_text .= "\n";}
    $b_kit_text .= 'ダンボールM：'.$kit_M.'個';
}
if($kit_L != ""){
    if($b_kit_text != ""){$b_kit_text .= "\n";}
    $b_kit_text .= 'ダンボールL：'.$kit_L.'個';
}
$kit_detail = $b_kit_text;
$insurance = $values['insurance'];

//before insert add
// ユーザーエージェント判別
$http_user_agent = $_SERVER['HTTP_USER_AGENT'];

$insert_sql = "INSERT INTO Eoc_takuhai(";
$insert_sql .= "REMOTE_HOST,";
$insert_sql .= "USER_AGENT,";
$insert_sql .= "HTTP_REFERER,";
$insert_sql .= "cv_site,";
$insert_sql .= "cv_page,";
$insert_sql .= "cv_time,";
$insert_sql .= "type_selection,";
$insert_sql .= "brand_confirm,";
$insert_sql .= "number_of_times,";

$insert_sql .= "speed_box,";
$insert_sql .= "date_and_time_hidden,";
$insert_sql .= "insurance_speed,";
$insert_sql .= "bikou,";
$insert_sql .= "time_select_hidden,";
$insert_sql .= "kit_detail,";
$insert_sql .= "insurance,";
$insert_sql .= "user_id,";

$insert_sql .= "user_name,";
$insert_sql .= "user_name_kana,";
$insert_sql .= "user_tel,";
$insert_sql .= "user_mail,";
$insert_sql .= "user_yuubinn,";
$insert_sql .= "user_todou,";
$insert_sql .= "user_sikutyouson,";
$insert_sql .= "user_banti";

$insert_sql .= ")VALUES(";
$insert_sql .= '\'\',';
$insert_sql .= '\'\',';
$insert_sql .= '\'代理入力\',';
$insert_sql .= '\'mypage\',';
$insert_sql .= '\'代理入力\',';
$insert_sql .= 'NOW(),';
$insert_sql .= '\''.$type_selection.'\',';
$insert_sql .= '\''.$brand_confirm.'\',';
$insert_sql .= '\''.$number_of_times.'\',';

$insert_sql .= '\''.$speed_box.'\',';
$insert_sql .= '\''.$date_and_time_hidden.'\',';
$insert_sql .= '\''.$insurance_speed.'\',';
$insert_sql .= '\''.$bikou.'\',';
$insert_sql .= '\''.$time_select_hidden.'\',';
$insert_sql .= '\''.$kit_detail.'\',';
$insert_sql .= '\''.$insurance.'\',';
$insert_sql .= '\''.$user_id.'\',';

$insert_sql .= '\''.$user_name.'\',';
$insert_sql .= '\''.$user_name_kana.'\',';
$insert_sql .= '\''.$user_tel.'\',';
$insert_sql .= '\''.$user_mail.'\',';
$insert_sql .= '\''.$user_yuubinn.'\',';
$insert_sql .= '\''.$user_todou.'\',';
$insert_sql .= '\''.$user_sikutyouson.'\',';
$insert_sql .= '\''.$user_banti.'\'';

$insert_sql .= ")";

//実行
// mysql_query($query);

$to = 'mukoyama@urlounge.co.jp';
$subject = "【クエリテスト】";
$body = $query."\n\n\n".$insert_sql;
$header = "From:mypage@urlounge.co.jp";

mb_language("Japanese");
mb_internal_encoding("UTF-8");
mb_send_mail($to,$subject,$body,$header);

if($error_m != ''){
	echo '
	<script>
	alert("'.$error_m.'");
	</script>
	';
	$error_m = str_replace('\n','<br>',$error_m);
	print $error_m;
	return false;
}else{
	return true;
}
