<?
// SMTPを使ってメール送信関数
function phpmailersend ( $to, $subject, $body, $fromname="リファスタ", $fromaddress="mypage@urlounge.co.jp", $ccadress="", $bccadress="" ){

  // global $smtp_host, $smtp_port, $smtp_user, $smtp_password;
	// 外部SMTPサーバーのホスト名
	$smtp_host = "smtp.gmail.com";

	// 外部SMTPのポート番号
	$smtp_port = "587";

	// 外部SMTPに接続するユーザー名
	$smtp_user = "mypage@urlounge.co.jp";

	// 外部SMTPに接続するパスワード
	$smtp_password = "csevdgkgswexlngl";


  mb_language("Japanese");
  mb_internal_encoding("UTF-8");


  $to_array  = explode ( ',', preg_replace ( '/\s/', '', $to  ) );
  $cc_array  = explode ( ',', preg_replace ( '/\s/', '', $ccadress  ) );
  $bcc_array = explode ( ',', preg_replace ( '/\s/', '', $bccadress ) );

  $mailer = new PHPMailer();

  $mailer -> CharSet = "iso-2022-jp";
  $mailer -> Encoding = "7bit";

  $mailer -> IsSMTP();
  $mailer -> Host = $smtp_host . ":" . $smtp_port;
  $mailer -> SMTPAuth = TRUE;
  $mailer -> Username = $smtp_user;        // Gmailのアカウント名
  $mailer -> Password = $smtp_password;    // Gmailのパスワード
  $mailer -> From     = $fromaddress;      // Fromのメールアドレス
  $mailer -> FromName = mb_encode_mimeheader ( mb_convert_encoding ( $fromname, "JIS", "UTF-8" ) );
  $mailer -> Subject  = mb_encode_mimeheader ( mb_convert_encoding ( $subject, "JIS", "UTF-8" ) );
  $mailer -> Body     = mb_convert_encoding ( $body, "JIS", "UTF-8" );
  foreach ( $to_array as $to ) {
    $mailer -> AddAddress ( $to );         // TO
  }
  foreach ( $cc_array as $cc ) {
    $mailer -> AddCC  ( $cc );             // CC
  }
  foreach ( $bcc_array as $bcc ) {
    $mailer -> AddBCC ( $bcc );            // BCC
  }

  if( !$mailer -> Send() ){
    $message  = "Message was not sent<br/ >";
    $message .= "Mailer Error: " . $mailer->ErrorInfo;
  } else {
    $message  = "Message has been sent";
  }
  return $message;

}
