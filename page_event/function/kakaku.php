<?
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//価格変更
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	$no_time = date('Y/m/d H:i:s');
	$uid = $_SESSION["uid"];
	$log_user_sql = "SELECT first_name FROM users WHERE user_id = {$uid} LIMIT 1";
	$log_user_rs = CustomQuery($log_user_sql);
	$log_user_name = db_fetch_array($log_user_rs);
	$log_user_first_name = $log_user_name["first_name"];

	$ecc_id = $values["ecc_id"];

	$product_id = $values["product_id"];
	$yahoo_sinaban = $values["yahoo_sinaban"];
	$title = $values["title"];


	$DT_UP_DATE = $values["DT_UP_DATE"];
	$old_price = $oldvalues["price"];
	$new_price = $values["price"];

	$kanryou_henbi = $values["kanryou_henbi"];
	$old_nyuukin_price = $oldvalues["nyuukin_price"];
	$new_nyuukin_price = $values["nyuukin_price"];

	$old_comment = $oldvalues["comment"];
	$new_comment = $values["comment"];
	$old_description = $oldvalues["description"];
	$new_description = $values["description"];



	if($DT_UP_DATE != ""){
		if($new_price < $old_price){
			$price_sagaku = $old_price - $new_price;
			$old_price = number_format($old_price)."円";
			$new_price = number_format($new_price)."円";
			$price_sagaku = number_format($price_sagaku)."円";
		}
	}


	if($kanryou_henbi != ""){
		if(($old_nyuukin_price != "") OR ($old_nyuukin_price > 0)){
			if($new_nyuukin_price > $old_nyuukin_price){
				$nyuukin_price_sagaku = $new_nyuukin_price - $old_nyuukin_price;
				$old_nyuukin_price = number_format($old_nyuukin_price)."円";
				$new_nyuukin_price = number_format($new_nyuukin_price)."円";
				$nyuukin_price_sagaku = number_format($nyuukin_price_sagaku)."円";
			}
		}
	}

		if(($price_sagaku != "") OR ($nyuukin_price_sagaku != "")){
				//完了時、チャットワーク流す
				// $word = "[info]";
				// $word .= "[title]商品アラート {$no_time}[/title]";
				$word = "●顧客SEQ：{$ecc_id}\n";
				$word .= "●SEQ：{$product_id}\n";
				$word .= "●品番：{$yahoo_sinaban}\n";
				$word .= "●タイトル：{$title}\n";
			if($price_sagaku != ""){
				$word .= "●買取額(既存)：{$old_price}\n";
				$word .= "●買取額(更新)：{$new_price}\n";
				$word .= "●差額：{$price_sagaku}\n";
			}
			if($nyuukin_price_sagaku != ""){
				$word .= "●入金額(既存)：{$old_nyuukin_price}\n";
				$word .= "●入金額(更新)：{$new_nyuukin_price}\n";
				$word .= "●差額：{$nyuukin_price_sagaku}\n";
			}

			if($old_comment != $new_comment){
				$word .= "●コメント欄(既存)：{$old_comment}\n";
				$word .= "●コメント欄(更新)：{$new_comment}\n";
			}
			if($old_description != $new_description){
				$word .= "●メモ欄(既存)：{$old_description}\n";
				$word .= "●メモ欄(更新)：{$new_description}\n";
			}
				$word .= "●更新者：{$log_user_first_name}";
				// $word .= "[/info]";

				$word = mb_convert_encoding($word, "UTF-8", "auto");

				//タスクにされてるルーム
				$room = "92031396";
				//テスト用グループルーム
				$room_test = "75968941";
				$room_test = "67058874";

				$sugisan = "4207431dc4eb42bb1e13befa2f6657fe";
				$nishitani = "c1d97cfaf7e544675fad7be63c49a0d5";
				$bot = "ed472827b8dda0ba81ba586c8b0e4bd9";
				//誰から発行するか
				$token = $bot;
				$token_test = $nishitani;


				$cw_body = str_replace("&","＆",$word);
				$cw_body = str_replace("'","’",$cw_body);
				$cw_body = str_replace("\"","”",$cw_body);
				// $token = 'sugisan';
				//メール送信
				$mail_body = $cw_body;
				$sendPostData = array(
					"subject" => "商品アラート {$no_time}",
					"text" => $mail_body,
				);
				$sendPostData = http_build_query($sendPostData, "", "&");
				$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => $sendPostData));
				$sendPostContext = stream_context_create($sendPostDataOptions);
				try{
					file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, $sendPostContext);
				}catch(Exception $e){}

		}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//END 価格変更
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
?>
