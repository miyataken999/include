<?
// Parameters
// $values     - array of values to be written to the database.
//               To access specific field value use $values["FieldName"]
//               "dict" is an alternate name for this parameter.
// $where      - WHERE clause that points to the edited record. Example: ID=19
// $oldvalues  - array with existing field values. To access specific column value use
//               $oldvalues["FieldName"]
// $keys       - array of key column values that point to the edited record. To access
//               specific key column use $keys["KeyFieldName"]
// $message    - place the message to be displayed into this variable.
// $inline     - equals to true when the Inline Edit in process, false otherwise
// $pageObject - an object of Page class representing the current page



$nowtime = date("Y-m-d H:i:s");
$user_id = $_SESSION['uid'];

if($user_id != ""){

	/**********************************************************
	更新者
	**********************************************************/
	if($_SESSION['uid'] != ""){
		$values["update_by"] = $_SESSION['uid'];
	}

}

/**********************************************************
精錬上がりがある場合の処理
**********************************************************/
// if($inline=="true")
	if($values["seiren_price"]!=''){
		if($values["billing_amount"] > $values["seiren_price"]){

			//完了時、チャットワーク流す
			$word = "地金チェックid：{$keys['id']}\n";
			$word .= "請求金額：{$values['billing_amount']}\n";
			$word .= "精錬上がり：{$values['seiren_price']}\n";
			$url = "https://rifa.life/shop5/gold_check_list.php?q=(id~equals~{$keys['id']})\n";
			$word .= $url;


			$word = mb_convert_encoding($word, "UTF-8", "auto");
			//メール送信
			$subject = '精錬上がりアラート';
			$mail_body = $word;
			$sendPostData = array("subject" => $subject, "text" => $mail_body);
			$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
			try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}

		}
	}
