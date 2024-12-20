<?
$table_name = "Eoc_guestquestion";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/function.php";
error_reporting(E_ALL);
ini_set('display_errors', '1');
//print("-------------------------------");
//exit();


if($_GET["reflect_id"] != ""){
	$reflect_id = htmlspecialchars($_GET["reflect_id"]);
	$reflect_num = htmlspecialchars($_GET["reflect_num"]);
}

ini_set("display_errors",1);
include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";


$query = "SELECT * FROM {$table_name} WHERE id={$reflect_id} LIMIT 1";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
$result = mysql_fetch_assoc($sql);

// if($result['site-reflect'] == 1){
// 	$query = "UPDATE {$table_name} SET `site-reflect`=0 WHERE id={$reflect_id} LIMIT 1";
// }else{
// 	$query = "UPDATE {$table_name} SET `site-reflect`=1 WHERE id={$reflect_id} LIMIT 1";
// }
$query = "UPDATE {$table_name} SET `site-reflect`={$reflect_num} WHERE id={$reflect_id} LIMIT 1";
$sql = mysql_query($query);


// if($sql !== false){
// 	header("location: https://rifa.life/include/kagoya_check/guestquestion/list.php");
// }
send_chat($_GET);
//send_chat($_GET);
if(!$sql){
    //チャットワーク流す
	$chat_text_body = "";
	$chat_text_body .= mysql_error()."\n";
	$chat_text_body .= "{$insert_sql}";
	$chat_text_body = str_replace("&","＆",$chat_text_body);
    $chat_text_body = mb_convert_encoding($chat_text_body, "UTF-8", "auto");
	//メール送信
	$mail_body = $chat_text_body;
	$subject = "アンケートフォーム⇒Eoc_guestquestion クエリ失敗 ■ Eocguestquestion INSERT";
	$sendPostData = array("subject" => $subject, "text" => $mail_body);
	$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
	try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(Exception $e){}

}else{
	if($reflect_num == 1){
		//成功
		// CW飛ばしていたが、ecc_idがまだないので、紐付け時へ移動。
	}else{

	}

	header("location: /include/kagoya_check/guestquestion/list.php");

}

function send_chat($GET){
		// Webhook URL
$webhook_url = 'https://chat.googleapis.com/v1/spaces/AAAA8sgQ7I8/messages?key=AIzaSyDdI0hCZtE6vySjMm-WEfRq3CPzqKqqsHI&token=qfItftTMJKi1CQXl9sz0vjffXaampcaaPRgFvBH5Kb8';

// 配列データ
$values = array(
    "Gram" => "このメッセージは改行を含んでいます。",
    "reflect_id" => isset($GET["reflect_id"]) ? $GET["reflect_id"] : null,
    "reflect_num" => isset($GET["reflect_num"]) ? $GET["reflect_num"] : null,
    // 他の項目を追加
);

// メッセージデータの作成
$message_text = "アンケートが更新されました\n
URL https://rifa.life/include/kagoya_check/guestquestion/list.php
AWS　ソースパス
/localproject/laravel/include/public/kagoya_check/guestquestion/eoc_after_data_table/reflect.php

顧客登録　URL　処理
商品登録　URL　処理
撮影　URL　処理
ボックス作成　URL　処理　
出品　URL　処理
マイページ　メール送信　URL　処理
WS登録　URL　処理
落札　URL　処理
WordPres　URL　処理

";

// 配列の項目をループで追加
foreach ($values as $key => $value) {
    $message_text .= $key . ': ' . $value . "\n";
}

$message_data = array(
    'text' => $message_text
);

// JSONペイロードの確認
$json_payload = json_encode($message_data);
//if (json_last_error() !== JSON_ERROR_NONE) {
//    echo 'JSON Error: ' . json_last_error_msg();
//    exit;
//} else {
//    echo "JSON payload: " . $json_payload . "\n";
//}

// cURLセッションの初期化
$ch = curl_init($webhook_url);

// cURLオプションの設定
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// リクエストの実行とレスポンスの取得
//$response = curl_exec($ch);

// エラーチェック
//if ($response === false) {
//    echo 'cURL Error: ' . curl_error($ch);
//} else {
//    echo 'Webhook response: ' . $response;
//}

// cURLセッションのクローズ
curl_close($ch);
}
