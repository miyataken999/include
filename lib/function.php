<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/include/lib/PHPMailer/class.phpmailer.php";

date_default_timezone_set('Asia/Tokyo');
mb_internal_encoding('UTF-8');
mb_language("japanese");


/**
 *
 * メール送信用の関数
 *
 * メールサーバー情報
 * デフォルト設定で、urlounge.co.jpのアドレスにて一括設定している
 *
 * @param array $con ホスト名、アカウント情報などの接続
 * @see PHPMailer
 * @return boolean 送信が成功したかどうか
**/
function org_send_mail($from_address='', $from_name='', $to_address='', $to_name='', $reply_address='', $reply_name='', $subject='', $body='', $altbody='', $debug=0, $con='', $bcc_address='', $cc_address='', $ecc_id=''){

	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

    if((isset($con["host"])) AND ($con["host"] != '')){
    	$host = $con["host"];
    }else{
    	$host = 'smtp.gmail.com';
    }

    if((isset($con["username"])) AND ($con["username"] != '')){
    	$username = $con["username"];
    }else{
    	$username = $from_address;
    }

    if((isset($con["pass"])) AND ($con["pass"] != '')){
    	$pass = $con["pass"];
    }else{
		$pass = 'qqpmrlyldlqeyvrs';
    }

    if((isset($con["secure"])) AND ($con["secure"] != '')){
    	$secure = $con["secure"];
    }else{
    	$secure = 'tls';
    }

    if((isset($con["port"])) AND ($con["port"] != '')){
    	$port = $con["port"];
    }else{
    	$port = 587;
    }

	try{
		$mail->setLanguage('ja', '/usr/local/apache2/htdocs/common/lib/PHPMailer/language/');
	    //Server settings
	    $mail->SMTPDebug = $debug;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = $host;  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = $username;                 // SMTP username
	    $mail->Password = $pass;                           // SMTP password
	    $mail->SMTPSecure = $secure;                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = $port;                                    // TCP port to connect to


		$mail->Encoding = "base64";
		$mail->CharSet = 'ISO-2022-JP';

	    //Recipients
	    // $mail->setFrom($from_address, mb_convert_encoding($from_name,  "JIS"));
	    $mail->setFrom($from_address, mb_encode_mimeheader($from_name,  "JIS", "UTF-8"));

		$to_name = mb_convert_encoding($to_name,"iso-2022-jp","UTF-8");
		$to_name = mb_convert_encoding($to_name,"UTF-8","iso-2022-jp");
		$to_name = '';

	    $mail->addAddress($to_address, mb_encode_mimeheader($to_name,  "JIS", "UTF-8"));     // Add a recipient
	    // $mail->addAddress($to_address, mb_convert_encoding($to_name,  "ISO-2022-JP"));     // Add a recipient


	    // $mail->addAddress('ellen@example.com');               // Name is optional
	    // $reply_name = mb_encode_mimeheader($reply_name,  "JIS", "UTF-8");

	    // 一時下記と交代
	    // $reply_name = mb_convert_encoding($reply_name,  "JIS");
	    $reply_name = mb_encode_mimeheader($reply_name,  "JIS", "UTF-8");

	    $mail->addReplyTo($reply_address, $reply_name);

	    if($cc_address != ''){
		    $mail->addCC($cc_address);
	    }

	    if($bcc_address != ''){
		    $mail->addBCC($bcc_address);
	    }

	    //Attachments
	    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML

	    // 一時下記と交代
	    // $mail->Subject = mb_convert_encoding($subject,  "JIS");
	    $mail->Subject = mb_encode_mimeheader($subject,  "JIS", "UTF-8");

	    $html_body = mb_convert_encoding($body, "ISO-2022-JP");
		$html_body = mb_ereg_replace('(https?://[-_.!~*\'()a-zA-Z0-9;/?:@&=+$,%#]+)', '<a href="\1" target="_blank">\1</a>', $html_body);

	    $mail->Body = $html_body;

	    $altbody = mb_convert_encoding($altbody, "ISO-2022-JP");
		$altbody = $altbody;
	    $mail->AltBody = $altbody;

	    $mail->send();
	    // echo '送信　成功';
	    return true;
	} catch (Exception $e) {
	    // echo '送信　失敗 Mailer Error: ', $mail->ErrorInfo;

		$word = "";
		if($ecc_id != ''){
			$word .= "顧客SEQ:" . $ecc_id . "\n";
			$word .= "https://rifa.life/shop5/Eoc_list.php?q=(ecc_id~equals~" . $ecc_id . ")\n";
		}
		$word .= $mail->ErrorInfo . "\n";

		//メール送信
		$subject = "メールが送信できませんでした！";
		$mail_body = $word;
		$sendPostData = array("subject" => $subject, "text" => $mail_body);
		$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
		try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}

		return false;
	}

}// end org_send_mail
