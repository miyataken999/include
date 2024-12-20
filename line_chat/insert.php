<?php
ini_set("display_errors",1);
include_once "config.php";

// echo $uid;
$datetime = date('Y-m-d H:i:s');
$lc_pdo = new pdo_connect;
$lc_sql = "UPDATE `Eoc`
					 SET `line_chat_url`='$line_chat_url',
					 		 `line_check`=1,
							 `resister_id`={$uid},
							 `updated_at`={$datetime}
					 WHERE `ecc_id` = $ecc_id LIMIT 1
					 ";
// echo $lc_sql;

try{
	// echo "tes";
	$lc_pdo->plural($lc_sql);
}catch (Exception $e){
	echo "LINEチャットURL追加ができませんでした！";
	$word = "[info][title]LINEチャットURL追加ができませんでした！[/title]";
	$word .= "顧客SEQ：{$ecc_id}\n";
	$word .= "[/info]";

	//メール送信
	$subject = 'LINEチャットURL追加ができませんでした！';
	$mail_body = $word;
	$sendPostData = array("subject" => $subject, "text" => $mail_body);
	$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
	try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}

	exit();
}
echo 1111111;
// echo $_SERVER["HTTP_REFERER"];
header("location: /shop5/Eoc_list.php?q=(ecc_id~equals~{$ecc_id})");
exit();
