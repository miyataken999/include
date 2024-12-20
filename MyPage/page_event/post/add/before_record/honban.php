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



$id = $values['user_id'];
$user_query = "SELECT id,email FROM users WHERE id={$id} LIMIT 1";

$user_res = CustomQuery($user_query);

$user_data = db_fetch_array($user_res);


//メール送信プログラム
$to = $user_data['email'];

$subject = "【リファスタです】連絡掲示板に新しい投稿がありました。";

$body = "■投稿内容■\n".$values['text']."\n\n";
$body .= "▼こちらよりご確認ください▼\nhttps://rifa.life/mypage/talk\n\n";
$body .= "※このメールは自動配信メールです。このメールにはご返信頂けませんので予めご了承ください。";

// Phpmailerの読み込み
include $_SERVER['DOCUMENT_ROOT'].'/include/plugin/PHPMailer/PHPMailerAutoload.php';
//phpmailersendの読み込み
include $_SERVER['DOCUMENT_ROOT'].'/include/function/phpmailersend.php';
// Phpmailerを使ってメールを送信する関数の呼び出し
$res = phpmailersend ( $to, $subject, $body, $fromname, $fromaddress, $ccadress, $bccadress );

if ( $res == "Message has been sent" ){
  // 成功
} else {
  // エラー処理
	print $res;
}


