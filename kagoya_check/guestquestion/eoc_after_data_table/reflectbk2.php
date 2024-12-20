<?
$table_name = "Eoc_guestquestion";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/function.php";

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
	try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}

}else{
	if($reflect_num == 1){
		//成功
		// CW飛ばしていたが、ecc_idがまだないので、紐付け時へ移動。
	}else{

	}

	header("location: /include/kagoya_check/guestquestion/list.php");

}
