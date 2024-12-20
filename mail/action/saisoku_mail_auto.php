<?
echo 111111111111111;
$saisoku_auto_flg = "on";
ini_set("display_errors",1);
// phpinfo();
// $_SERVER自動化の際に注意
//ログイン認証
// $_GET["uid"] = 106;
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
//
// $tmp_id = htmlspecialchars($_GET["tmp_id"]);
// $ecc_id = htmlspecialchars($_GET["ecc_id"]);
// $Eoc_takuhai_id = htmlspecialchars($_GET["Eoc_takuhai_id"]);
$tmp_id = 182;
$ecc_id = 4460;
$Eoc_takuhai_id = 6800;

//pdoのクラス
include_once $_SERVER["DOCUMENT_ROOT"]."/include/classes/pdo_connect.php";
include_once "../function.php";
include_once "../factory.php";

if(isset($_GET["test"])){
	ini_set("display_errors",1);
}else{
	ini_set("display_errors",0);
}

$alertArray = array();
if($ecc_id != ''){
	if($tmp_id != ''){
		include_once "../replace.php";
	}
}
echo 111111111111111;


?>
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
require_once('config.php');
$mail = & new Qdmail();
//$mail -> unitedCharset('UTF-8');
$mail -> smtp(true);
//各パラメータを取得する
$host_name = mail_str($from_addr,'host_name');
$port_no = mail_str($from_addr,'port_no');
$user_name = mail_str($from_addr,'user_name');
$user_passwd = mail_str($from_addr,'user_passwd');
echo $from_addr;
exit;
$to = $replace_data["Eoc"]["mail1"];
$cc = $replace_data["Eoc"]["mail2"];
$from = $from_addr;
$bcc = $from_addr;
$subject = $subject_pc;
$body = $str_header;
if($str_pc != ''){
  if($body != ''){
    $body .= "\n";
  }
  $body .= $str_pc;
}
if($str2_pc != ''){
  if($body != ''){
    $body .= "\n";
  }
  $body .= $str2_pc;
}
if($shomei != ''){
  if($body != ''){
    $body .= "\n";
  }
  $body .= $shomei;
}
echo $body;
$body = str_replace("･","・",$body);
if($user_name == 'rifa@urlounge.co.jp'){
	// Phpmailerの読み込み
	include_once $_SERVER["DOCUMENT_ROOT"]."/include/lib/function.php";
	$from_address = $from_addr;
	if($displayNameInput != ''){
		$from_name = $displayName;
	}else{
		$from_name = mail_str($from_addr,'mail_name');
	}
	$to_address = $to;
	$to_name = $toname;
	$reply_address = $from_address;
	$reply_name = '';
	$subject = $subject;
  $altbody = $body;
  $body = str_replace("\n","<br>",$body);
  $con = '';
  $debug = 0;
	$bcc_address = $from_addr;
	$cc_address = $cc;
	// Phpmailerを使ってメールを送信する関数の呼び出し
	try {
		// $ret = org_send_mail($from_address, $from_name, $to_address, $to_name, $reply_address, $reply_name, $subject, $body, $altbody, $debug, $con, $bcc_address, $cc_address);
	} catch (Exception $e) {
		echo "<div style='background: #f00; padding: 5px;'><font color=\"#fff\">送信失敗!!!!!!!！</font></div>";
		exit();
	}
}else{
	$param = array(
		'host'=>$host_name,//メールサーバー
		'port'=>$port_no , //これはSMTPAuthの例。認証が必要ないなら　25　でＯＫ。
		'from'=>$from_addr,//　Return-path: になります。
		'protocol'=>'SMTP_AUTH',// 認証が必要ないなら、'SMTP'
		'user'=>$user_name, //SMTPサーバーのユーザーID
		'pass' =>$user_passwd, //SMTPサーバーの認証パスワード
	);
	try {
		$mail->smtpServer($param);
	} catch (Exception $e) {
		echo $e->getMessage();
		echo "カゴヤのメールサーバーが見つかりませんでした！";
		exit();
	}
	$toname = '';
	if($to != ''){
		$mail->to($to,$toname);
	}
	if($cc != ''){
		$mail->cc($cc,$toname);
	}
	$mail->bcc($bcc);
	$mail->subject($subject);
	$mail->text($body);
  if($displayNameInput != ''){
		$mail->from($from,$displayNameInput);
	}else{
		$mail->from($from,mail_str($from_addr,'mail_name'));
	}
  $ret = $mail->send();
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
	}
}// end if rifa以外

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
$mail_sql .= ",'{$str_header}'";
$mail_sql .= ",'{$str_pc}'";
$mail_sql .= ",'{$str2_pc}'";
$mail_sql .= ",'{$shomei}'";
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

  $alert_pdo = new pdo_connect;
  $alert_sql = "INSERT INTO Eoc_alert_mail(";
  $alert_sql .= "`ecc_id`";
  $alert_sql .= ",`Eoc_takuhai_id`";
  $alert_sql .= ",`send_content`";
  $alert_sql .= ",`send_by`";
  $alert_sql .= ",`create_at`";
  $alert_sql .= ")VALUES(";
  $alert_sql .= "'{$ecc_id}'";
  $alert_sql .= ",'{$Eoc_takuhai_id}'";
  $alert_sql .= ",'{$sateimeisai}'";
  $alert_sql .= ",'{$uid}'";
  $alert_sql .= ",'".date("Y-m-d H:i:s")."'";
  $alert_sql .= ") ";


  try {
    $alert_pdo->plural($alert_sql);
  } catch (Exception $e) {
    echo "Eoc_alert_mailに保存ができませんでした。";
    $word = "[info][title]Eoc_alert_mailに保存ができませんでした。[/title]";
    $word .= "顧客SEQ：{$ecc_id}\n";
		$word .= "宅配ID：{$Eoc_takuhai_id}\n";
    $word .= "[/info]";

	//メール送信
	$subject = 'Eoc_alert_mailに保存ができませんでした。';
	$mail_body = $word;
	$sendPostData = array("subject" => $subject, "text" => $mail_body);
	$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
	try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}


    exit();

  }

}// end sateimeisai

// $url = "http://rifa.life/lounge_API/evaeva/alert/market_decline_alert.php?uid={$uid}";
// header("Location: $url");
// exit;
?>
</body>
</html>
