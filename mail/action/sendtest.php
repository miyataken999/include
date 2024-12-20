<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php


// ini_set("display_errors",1);

require_once('config.php');


$mail = & new Qdmail();
//$mail -> unitedCharset('UTF-8');
$mail -> smtp(true);


// var_dump($_POST);
// exit();


$ecc_id = $_POST["ecc_id"];
$tmp_id = $_POST["tmp_id"];
$from_addr = $_POST["from_addrInput"];



//各パラメータを取得する
$host_name = mail_str($from_addr,'host_name');
$port_no = mail_str($from_addr,'port_no');
$user_name = mail_str($from_addr,'user_name');
$user_passwd = mail_str($from_addr,'user_passwd');


$param = array(
	'host'=>$host_name,//メールサーバー
	'port'=>$port_no , //これはSMTPAuthの例。認証が必要ないなら　25　でＯＫ。
	'from'=>$from_addr,//　Return-path: になります。
	'protocol'=>'SMTP_AUTH',// 認証が必要ないなら、'SMTP'
	'user'=>$user_name, //SMTPサーバーのユーザーID
	'pass' =>$user_passwd, //SMTPサーバーの認証パスワード
);

// var_dump($param);
// exit();

try {
	$mail->smtpServer($param);
} catch (Exception $e) {
	echo $e->getMessage();
	echo "カゴヤのメールサーバーが見つかりませんでした！";
	exit();
}




$to = $_POST["to_addrInput"];
$cc = $_POST["cc_addrInput"];
$from = $from_addr;
$bcc = $from_addr;

$subject = $_POST["subject_pcInput"];


$str_headerInput = $_POST["str_headerInput"];
$str_pcInput = $_POST["str_pcInput"];
$str2_pcInput = $_POST["str2_pcInput"];
$shomeiInput = $_POST["shomeiInput"];


$body = $str_headerInput;
if($str_pcInput != ''){
	if($body != ''){
		$body .= "\n";
	}
	$body .= $str_pcInput;
}
if($str2_pcInput != ''){
	if($body != ''){
		$body .= "\n";
	}
	$body .= $str2_pcInput;
}
if($shomeiInput != ''){
	if($body != ''){
		$body .= "\n";
	}
	$body .= $shomeiInput;
}

$body = str_replace("･","・",$body);


if($to != ''){
	$mail->to($to,$toname);
}
if($cc != ''){
	$mail->cc($cc,$toname);
}
$mail->bcc($bcc);
$mail->subject($subject);
$mail->text($body);


$displayNameInput = $_POST["displayNameInput"];
if($displayNameInput != ''){
	$mail->from($from,$displayNameInput);
}else{
	$mail->from($from,mail_str($from_addr,'mail_name'));
}


$ret = $mail->send();


// var_dump($ret);


if(!$ret){
	echo "メールが送信できませんでした！";
	//メール送信
	$mail_body = "顧客SEQ：{$ecc_id}\n";
	$sendPostData = array(
		"subject" => "メールが送信できませんでした！",
		"text" => $mail_body,
	);
	$sendPostData = http_build_query($sendPostData, "", "&");
	$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => $sendPostData));
	$sendPostContext = stream_context_create($sendPostDataOptions);
	try{
		file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, $sendPostContext);
	}catch(Exception $e){}

	exit();

}else{


	$mail_pdo = new pdo_connect;
	$mail_sql = "INSERT INTO mailsystem_send_schedule(";

	$mail_sql .= "`tpl`";
	$mail_sql .= ",`ecc_id`";
	$mail_sql .= ",`from_addr`";
	$mail_sql .= ",`to_addr`";
	$mail_sql .= ",`subject_pc`";
	$mail_sql .= ",`str_header`";
	$mail_sql .= ",`str_pc`";
	$mail_sql .= ",`str2_pc`";
	$mail_sql .= ",`str3_pc`";
	$mail_sql .= ",`send_date`";
	$mail_sql .= ",`regist_date`";
	$mail_sql .= ",`send_flag`";
	$mail_sql .= ",`send_kind`";
	$mail_sql .= ",`sateinin`";
	$mail_sql .= ",`money`";
	$mail_sql .= ",`regist_customer`";

	$mail_sql .= ")VALUES(";
	$mail_sql .= "'{$tmp_id}'";
	$mail_sql .= ",'{$ecc_id}'";
	$mail_sql .= ",'{$from_addr}'";
	$mail_sql .= ",'{$to}'";
	$mail_sql .= ",'{$subject}'";
	$mail_sql .= ",'{$str_headerInput}'";
	$mail_sql .= ",'{$str_pcInput}'";
	$mail_sql .= ",'{$str2_pcInput}'";
	$mail_sql .= ",'{$shomeiInput}'";
	$mail_sql .= ",'".date("Y-m-d")."'";
	$mail_sql .= ",'".date("Y-m-d H:i:s")."'";
	$mail_sql .= ",1";
	$mail_sql .= ",'送信'";
	$mail_sql .= ",''";
	$mail_sql .= ",0";
	$mail_sql .= ",''";
	$mail_sql .= ")";

	try {
		$mail_pdo->plural($mail_sql);
	} catch (Exception $e) {
		echo "メール送信はできましたがデータベースへ保存ができませんでした！";
		$word = "[info][title]メール送信はできましたがデータベースへ保存ができませんでした！[/title]";
		$word .= "顧客SEQ：{$ecc_id}\n";
		$word .= "[/info]";

		//メール送信
		$subject = 'メール送信はできましたがデータベースへ保存ができませんでした！';
		$mail_body = $word;
		$sendPostData = array("subject" => $subject, "text" => $mail_body);
		$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
		try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}

		exit();

	}




	if(isset($_POST["sateimeisai"])){
		$sateimeisai = str_replace("<br>","\n",$_POST["sateimeisai"]);

		$tl_pdo = new pdo_connect;
		$tl_sql = "INSERT INTO Eoc_timeline(";
		$tl_sql .= "`ecc_id`";
		$tl_sql .= ",`category`";
		$tl_sql .= ",`title`";
		$tl_sql .= ",`detail`";
		$tl_sql .= ",`create_by`";
		$tl_sql .= ",`create_at`";
		$tl_sql .= ")VALUES(";
		$tl_sql .= "'{$ecc_id}'";
		$tl_sql .= ",'3'";
		$tl_sql .= ",'{$subject}'";
		$tl_sql .= ",'{$sateimeisai}'";
		$tl_sql .= ",'{$uid}'";
		$tl_sql .= ",'".date("Y-m-d H:i:s")."'";
		$tl_sql .= ") ";



		try {
			$tl_pdo->plural($tl_sql);
		} catch (Exception $e) {
			echo "メール送信、データベース保存できましたがタイムライン追加ができませんでした！";
			$word = "[info][title]メール送信、データベース保存できましたがタイムライン追加ができませんでした！[/title]";
			$word .= "顧客SEQ：{$ecc_id}\n";
			$word .= "[/info]";
			//メール送信
			$subject = 'メール送信、データベース保存できましたがタイムライン追加ができませんでした！';
			$mail_body = $word;
			$sendPostData = array("subject" => $subject, "text" => $mail_body);
			$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
			try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}


			exit();

		}
	}// end sateimeisai



	header("location: /shop5/Eoc_list.php?q=(ecc_id~equals~{$ecc_id})");
	exit();
}




?>
</body>
</html>
