<?
/*----------------------------------------------------------

ブランド一覧
mst_brand
チャットワーク送信

----------------------------------------------------------*/


//ブランドデータの場合

$word = "";
$word .= $action." User : ".$_SESSION["UserID"]."\r\n";
// $word .= "table : ".$table."\r\n";


foreach($keys as $key => $val){
	$word .= "{$key} : {$val} \r\n";
	$sql = "select * from users where user_login = '".$_SESSION["UserID"]."'";
	$rs = CustomQuery($sql);
	$data = db_fetch_array($rs);

	$up = date('Y-m-d H:i:s');
	$upby  = $data["user_id"];
}

$word .= "name : ".$newvalues["name"]."\r\n";

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

$word = htmlspecialchars($word,ENT_QUOTES);

//メール送信
$subject = 'ブランド一覧';
$sendPostData = array("subject" => $subject, "text" => $word);
$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}

