<?php
include_once "config.php";


$text = str_replace("'","’",$text);

$tl_pdo = new pdo_connect;
$tl_sql = "INSERT INTO Eoc_timeline(";
$tl_sql .= "`ecc_id`";
$tl_sql .= ",`category`";
$tl_sql .= ",`create_by`";
$tl_sql .= ",`create_at`";
$tl_sql .= ",`detail`";
$tl_sql .= ")VALUES(";
$tl_sql .= "'{$ecc_id}'";
$tl_sql .= ",{$category}";
$tl_sql .= ",'{$uid}'";
$tl_sql .= ",'".date("Y-m-d H:i:s")."'";
$tl_sql .= ",'{$text}'";
$tl_sql .= ") ";

try {
	$tl_pdo->plural($tl_sql);
} catch (Exception $e) {
	echo "タイムライン追加ができませんでした！";
	$word = "[info][title]タイムライン追加ができませんでした！[/title]";
	$word .= "顧客SEQ：{$ecc_id}\n";
	$word .= "[/info]";

	//メール送信
	$subject = 'タイムライン追加ができませんでした！';
	$mail_body = $word;
	$sendPostData = array("subject" => $subject, "text" => $mail_body);
	$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
	try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}

	exit();

}



header("location: /shop5/Eoc_list.php?q=(ecc_id~equals~{$ecc_id})");
exit();
