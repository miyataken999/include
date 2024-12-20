<!DOCTYPE html>
<head>
	<meta charset="utf-8">
</head>
<body>
<?php 
ini_set('display_errors', 1);

mb_internal_encoding("UTF-8");

if(!isset($_POST['flag_name'])){
	echo "一斉送信フラグのパラメータがありません。";
	exit;
}

$flag_name = htmlspecialchars($_POST['flag_name'], ENT_QUOTES, "UTF-8");
if(
	($flag_name != 'FLAG_SPEED') 
	AND ($flag_name != 'UN_REACHABLE')
	AND ($flag_name != 'FLG_MAIL_SAGAWA')
	AND ($flag_name != 'FLG_MAIL_OTHER')
	AND ($flag_name != 'kit_done_flag')
	AND ($flag_name != 'transfer_confirm')
){
	//指定カラム名以外は入らないようにする。
	echo "想定外のパラメータです。";
	exit;
}

// 以下、パラメータOKの時の処理
include_once $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";

$pdo = new pdo_connect;
$sql = "SELECT * FROM `Eoc` WHERE `{$flag_name}`='1'";
$stmt = $pdo->pdo()->prepare($sql);
$stmt->execute();

$send_all_post_data = array();
foreach($stmt as $eoc){
	$send_post_data = array();
	$send_post_data["send_type"] = 'flag';
	$replace_data = array();
	$replace_data["Eoc"] = $eoc;
	$uid = $_POST['uid'];

	// メール本文のテンプレート情報
	$str_header = $_POST['str_headerInput'];
	$subject_pc = $_POST['subject_pcInput'];
	$str_pc = $_POST['str_pcInput'];
	$str2_pc = $_POST['str2_pcInput'];
	$str3_pc = $_POST['shomeiInput'];

	// 宅配買取のデータを取得
	$Eoc_takuhai_pdo = new pdo_connect;
	$replace_data["Eoc_takuhai"] = $Eoc_takuhai_pdo->select_one("SELECT * from Eoc_takuhai where ecc_id={$eoc['ecc_id']} AND (Eoc_takuhai.`status`=1 OR Eoc_takuhai.`status`=12 OR Eoc_takuhai.`status`=5 OR Eoc_takuhai.`status`=6 ) limit 1");
	$send_post_data["Eoc_takuhai_id"] = '';

	$shouhin_pdo = new pdo_connect;
	$replace_data["shouhin"] = $shouhin_pdo->select_one("SELECT * from shouhin where ecc_id={$eoc['ecc_id']} order by product_id desc limit 1");
	$staff_id = $replace_data["shouhin"]["satei_by"];
	
	$staff_pdo = new pdo_connect;
	//ログインユーザーにする
	$replace_data["users"] = $staff_pdo->select_one("SELECT first_name,user_id,english_name from users where user_id={$uid} limit 1");

	$saisoku_auto_flg = 'on';
	$ecc_id = $eoc['ecc_id'];
	
	$Eoc_takuhai_pdo = new pdo_connect;
	$Eoc_takuhai = $Eoc_takuhai_pdo->select_one("SELECT * from Eoc_takuhai where ecc_id={$ecc_id} AND (Eoc_takuhai.`status`=1 OR Eoc_takuhai.`status`=12 OR Eoc_takuhai.`status`=5 OR Eoc_takuhai.`status`=6 ) limit 1");
	if($Eoc_takuhai){
		$Eoc_takuhai_id = $Eoc_takuhai['id'];
	}else{
		$Eoc_takuhai_id = '';
	}
	$mail_comment = '';

	// ベタ書きではなく、evaProjectのAPIでreplace
	// include '../replace.php';
	$replace_send_data = array(
		"str_header" => $str_header,
		"subject_pc" => $subject_pc,
		"str_pc" => $str_pc,
		"str2_pc" => $str2_pc,
		"str3_pc" => $str3_pc,
	);
	$replace_send_data = http_build_query($replace_send_data, "", "&");
	$header = array(
		"Content-Type: application/x-www-form-urlencoded",
		"Content-Length: ".strlen($replace_send_data)
	);
	$context = array(
		"http" => array(
			"method"  => "POST",
			"header"  => implode("\r\n", $header),
			"content" => $replace_send_data
		)
	);
	$url = 'https://rifa.life/evaProject/mail/replace?ecc_id=' . $ecc_id . '&user_id=' . $uid;
	$after_replace_json = file_get_contents($url, false, stream_context_create($context));
	$after_replace = json_decode($after_replace_json);

	$str_header = $after_replace->str_header;
	$subject_pc = $after_replace->subject_pc;
	$str_pc = $after_replace->str_pc;
	$str2_pc = $after_replace->str2_pc;
	$str3_pc = $after_replace->str3_pc;
	// end replace api
	
	$send_post_data["tmp_id"] = $_POST['tmp_id'];
	$send_post_data["tmp_categoryInput"] = $_POST['tmp_categoryInput'];
	$send_post_data["tmp_sub_categoryInput"] = $_POST['tmp_sub_categoryInput'];
	$send_post_data["templateInput"] = $_POST['templateInput'];
	$send_post_data["from_addrInput"] = $_POST['from_addrInput'];
	$send_post_data["displayNameInput"] = $_POST['displayNameInput'];
	$send_post_data["subject_pcInput"] = $subject_pc;
	$send_post_data["str_headerInput"] = $str_header;
	$send_post_data["str_pcInput"] = $str_pc;
	$send_post_data["str2_pcInput"] = $str2_pc;
	$send_post_data["shomeiInput"] = $str3_pc;

	// 顧客情報
	$send_post_data["ecc_id"] = $eoc['ecc_id'];
	$send_post_data["to_addrInput"] = $eoc['mail1'];
	$send_post_data["cc_addrInput"] = $eoc['mail2'];
	$send_post_data["line_url"] = $eoc['line_chat_url'];

	// 査定後に作られるもの
	$send_post_data["group_id"] = '';
	$send_post_data["is_many_satei"] = '';
	$send_post_data["auto_mail_send"] = '';
	$send_post_data["sateimeisai"] = '';
	$send_post_data["flag_name"] = $flag_name;

	$send_all_post_data[] = $send_post_data;
}

// send_all_post_data
$err_msg = '';
$ecc_id_text_array = array();
foreach($send_all_post_data as $data)
{
	$send_data = http_build_query($data, "", "&");

	// header
	$header = array(
		"Content-Type: application/x-www-form-urlencoded",
		"Content-Length: ".strlen($send_data)
	);

	$options = array(
		"http" => array(
			"method"  => "POST",
			"header"  => implode("\r\n", $header),
			"content" => $send_data
		)
	);
	
	// ストリームコンテキストの作成
	$context = stream_context_create($options);
	
	try{
		$contents = file_get_contents('https://rifa.life/include/mail/action/send.php?uid=' . htmlspecialchars($_POST['uid'], ENT_QUOTES, 'UTF-8'), false, $context);
		echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
		// var_dump($contents);
		echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
		$ecc_id_text_array[] = $data['ecc_id'] . '_success';
	}catch(Exeption $e){
		$err_msg .= $e->getMessage() . "<br>";
		$ecc_id_text_array[] = $data['ecc_id'] . '_fail';
	}
}
if($err_msg !== ''){
	// エラーの表示
	echo $err_msg;
	exit; 
}

// 送信後はフラグを自動で外す
$pdo = new pdo_connect;
$sql = "UPDATE `Eoc` SET `{$flag_name}`=0 WHERE `{$flag_name}`='1'";
$stmt = $pdo->pdo()->prepare($sql);
$stmt->execute();


$ecc_id_text = implode(',', $ecc_id_text_array);// 4460_success,4460_success,4460_success
$redirect_url = "https://rifa.life/evaProject/mail_copy_list?ecc_id_text={$ecc_id_text}&tpl={$data['tmp_id']}";

var_dump($redirect_url);
?>
<script>
	window.location.href = '<?php echo $redirect_url; ?>';
</script>
</body>
</html>