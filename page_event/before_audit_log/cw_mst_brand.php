<?
/*----------------------------------------------------------

ブランド一覧
mst_brand
チャットワーク送信

----------------------------------------------------------*/
$sql = "select * from users where user_login = '".$_SESSION["UserID"]."'";
$rs = CustomQuery($sql);
$data = db_fetch_array($rs);

$up = date('Y-m-d H:i:s');
$upby  = $data["user_id"];


//ブランドデータの場合

$word = "";
$word .= $action." User : ".$_SESSION["UserID"]."\r\n";
// $word .= "table : ".$table."\r\n";

if(($action == 'add') OR ($action == 'delete')){
	foreach($newvalues as $key => $val){
		if((($val == '') && ($val == 0)) OR ($oldvalues[$key] == $val)){
			continue;
		}
		$word .= "{$key} : {$val} \r\n";
	}
}


foreach($oldvalues as $key => $val){
	if($val != $newvalues[$key]){
		//古いデータの設定
		$oval = $oldvalues[$key];

		if($key == "update_by" || $key == "created_by" || $key == "create_by" || $key == "register_by"){
		//old
		    $sql = "select * from users where user_id = '".$val."'";
		    $rs = CustomQuery($sql);
		    $data2 = db_fetch_array($rs);
		//new
		    $sql = "select * from users where user_id = '".$newvalues[$key]."'";
		    $rs = CustomQuery($sql);
		    $data4 = db_fetch_array($rs);

		    $val = $data2["first_name"];
		    $newvalues[$key] = $data4["first_name"];
		}



		$word .= "Change item : [".$key."]\r\nold[".$val."]\r\nnew[".$newvalues[$key]."]\r\n";
	}
}

// $word = "[info]".$word."[/info]";
$word = str_replace("&","＆",$word);
$word = htmlspecialchars($word,ENT_QUOTES);

//誰から発行するか
$token = $bot;

// define(brandroom,"68102709");	//テスト用
define(brandroom,"66129368");	//本番用

$token = 'bot';

//メール送信
$mail_body = $word;
$sendPostData = array(
    "subject" => "ブランド一覧変更",
    "text" => $mail_body,
);
$sendPostData = http_build_query($sendPostData, "", "&");
$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => $sendPostData));
$sendPostContext = stream_context_create($sendPostDataOptions);
try{
    file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, $sendPostContext);
}catch(Exception $e){}
