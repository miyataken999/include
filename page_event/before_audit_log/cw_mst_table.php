<?
/*----------------------------------------------------------

各マスタ
チャットワーク送信

----------------------------------------------------------*/



$word = "";
$word .= $action." User : ".$_SESSION["UserID"]."\r\n";
$word .= "table : ".$table."\r\n";


foreach($keys as $key => $val){
	$word .= "{$key} : {$val} \r\n";

	$sql = "select * from mst_item_name where id = '".$val."'";
	$rs = CustomQuery($sql);
	$url_data = db_fetch_array($rs);
	$url = $url_data["url"];
	$word .= "URL : {$url} \r\n";

	$sql = "select * from users where user_login = '".$_SESSION["UserID"]."'";
	$rs = CustomQuery($sql);
	$data = db_fetch_array($rs);

	$up = date('Y-m-d H:i:s');
	$upby  = $data["user_id"];
}


$word .= "line_category : ".$newvalues["line_category"]."\r\n";
$word .= "name : ".$newvalues["data"].$newvalues["name"].$newvalues["purchase_name"].$newvalues["val"]."\r\n";


$word .= "english_name : ".$newvalues["english_name"]."\r\n";

if($newvalues["yahoo_junle"] != ""){
	$sql = "select name from mst_brand where id = '".$newvalues["yahoo_junle"]."' limit 1";
	$rs = CustomQuery($sql);
	$data4 = db_fetch_array($rs);
	$word .= "Yahoo_Junle : ".str_replace("&","＆",$data4["name"])."\r\n";
}else{
	$word .= "Yahoo_Junle : \r\n";
}

if($newvalues["category_id"] != ""){
	$sql = "select category_name from store_categories where category_id = '".$newvalues["category_id"]."' limit 1";
	$rs = CustomQuery($sql);
	$data41 = db_fetch_array($rs);
	$word .= "categoryname : ".$data41["category_name"]."\r\n";
}else{
	$word .= "categoryname : \r\n";
}

if($newvalues["sub_category_id1"] != ""){
	$sql = "select name from store_sub_categories where id  = '".$newvalues["sub_category_id1"]."' limit 1";
	$rs = CustomQuery($sql);
	$data41 = db_fetch_array($rs);
	$word .= "sub_categoryname : ".$data41["name"]."\r\n";
}else{
	$word .= "sub_categoryname : \r\n";
}

if(isset($newvalues["reference_id"])){
	$word .= "reference_id : ".$newvalues["reference_id"]."\r\n";
}
if(isset($newvalues["mst_dia_id"])){
	$word .= "mst_dia_id : ".$newvalues["mst_dia_id"]."\r\n";
}


if($action == "edit"){
	$word .= "update at : ".$up."\r\n";
}

if($action == "add"){
	$word .= "create at : ".$up."\r\n";
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

// define(mstroom,"68102709");	//テスト用
define(mstroom,"66129325");	//本番用

// GCPサーバーのAPI通し
$token = 'bot';

//メール送信
$mail_body = $word;
$sendPostData = array(
    "subject" => "EVA マスタデータ変更",
    "text" => $mail_body,
);
$sendPostData = http_build_query($sendPostData, "", "&");
$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => $sendPostData));
$sendPostContext = stream_context_create($sendPostDataOptions);
try{
    file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, $sendPostContext);
}catch(Exception $e){}
