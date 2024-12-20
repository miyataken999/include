<?
$uid = $_SESSION["uid"];
$time_no = date('Y-m-d H:i:s');
$time = "'".$time_no."'";

$result["txt"] = "nothing to do";

while($data = $button->getNextSelectedRecord()){
	$up_id = $data["id"];
	$sql = "UPDATE Eoc_takuhai SET price_error = 1 , updated_by={$uid} WHERE id = {$up_id} limit 1";

	CustomQuery($sql);










	$seiyakukin = $data['seiyakukin'];
	$satei_sougaku = $data['satei_sougaku'];
	$kaibi_sougaku = $data['kaibi_sougaku'];

	$out = "";
	if($seiyakukin == $satei_sougaku){
		if($seiyakukin != $kaibi_sougaku){
			$out = "kaibi";
		}
	}elseif($seiyakukin == $kaibi_sougaku){
		if($seiyakukin != $satei_sougaku){
			$out = "satei";
		}
	}elseif($satei_sougaku == $kaibi_sougaku){
		if($satei_sougaku != $seiyakukin){
			$out = "seiyakukin";
		}
	}else{
		$out = "all";
	}


	$ecc_id = $data['ecc_id'];



	$insert_time = date("Y-m-d H:i:s");
	$chat_text_body = "";

	$chat_txt = "";

	$chat_txt .= "\n";
	$chat_txt .= "即時修正後、報告をお願い致します。\n";
	$chat_txt .= "\n";
	$chat_txt .= "送金が出来ません。";

	$chat_txt .= "[info]振込確認画面\n";
	$chat_txt .= "https://rifa.life/shop5/Eoc_transfer_confirm_list.php?q=(ecc_id~equals~{$ecc_id})\n\n";

	$chat_txt .= "商品一覧\n";
	$chat_txt .= "https://rifa.life/shop5/shouhin_list.php?q=(ecc_id~equals~{$ecc_id})[/info]";


	$chat_text_body .= $chat_txt;
	$chat_text_body .= "[/info]";


	$chat_text_body = str_replace("&","＆",$chat_text_body);
    $chat_text_body = mb_convert_encoding($chat_text_body, "UTF-8", "auto");
    //本番ルーム
    $room = "59827824";
    //テスト用個人ルーム
    // $room = "68102709";
    // $room = "59776610";

	$sugisan = "4207431dc4eb42bb1e13befa2f6657fe";
	$bot = "ed472827b8dda0ba81ba586c8b0e4bd9";
    $nishitani = "c1d97cfaf7e544675fad7be63c49a0d5";
    //誰から発行するか
    $token = $bot;
    // $limit = time()+86400;
    $limit = time();


    /*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
    タスク宛先
    タスクIDをuserテーブルから引き出す
    ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/
    $satei_by = $data['satei_by'];
	// $sql = "SELECT cw_task_id FROM users WHERE user_id = {$satei_by} limit 1";
	// $rs = CustomQuery($sql);
	// $user_data = db_fetch_array($rs);
 //    $to_ids = $user_data['cw_task_id'];
    /*■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
    タスク宛先 END
    ■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■*/


    try {

		//メール送信
		$subject = '「緊急処理願い」本日送金予定顧客の査定総額と買取備考総額が異なっています。';
		$mail_body = $chat_text_body;
		$sendPostData = array("subject" => $subject, "text" => $mail_body);
		$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
		try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}

	    $result["txt"] = 'OK';
    } catch (Exception $e) {
    	// error_log($e->getMessage(),1,"nishitani@urlounge.co.jp");
    	$result["txt"] = $e->getMessage();
    }


};



?>
