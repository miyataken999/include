<?php
/*
Description
Occurs before record is inserted
Return true if you want to proceed with adding the record, return false otherwise.

Parameters
$rawvalues  - raw field values from the imported file
$values     - field values to be inserted into the database
$pageObject - an object of Page class representing the current page
$message    - put a message into this variable. It will be added to the Import log in
              case
*/

$room = "92031396";
$token = 'sugisan';

$log = '';

if(isset($rawvalues["product_id"])){
	$product_id = $rawvalues["product_id"];
	$product_data_sql = "SELECT `price`,`nyuukin_price`,`comment`,`description`,`DT_UP_DATE`,`yahoo_sinaban`,`title`,`kanryou_henbi` FROM shouhin WHERE product_id = {$product_id} LIMIT 1";
	$product_data_rs = CustomQuery($product_data_sql);
	$oldvalues = db_fetch_array($product_data_rs);
}

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//価格変更
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
	$no_time = date('Y/m/d H:i:s');
	$uid = $_SESSION["uid"];
	$log_user_sql = "SELECT first_name FROM users WHERE user_id = {$uid} LIMIT 1";

	$log_user_rs = CustomQuery($log_user_sql);
	$log_user_name = db_fetch_array($log_user_rs);
	$log_user_first_name = $log_user_name["first_name"];


	// $product_id = $rawvalues["product_id"];
	$yahoo_sinaban = $rawvalues["yahoo_sinaban"];
	if($yahoo_sinaban == ''){
		$yahoo_sinaban = $oldvalues["yahoo_sinaban"];
	}
	$title = $rawvalues["title"];
	if($title == ''){
		$title = $oldvalues["title"];
	}


	$DT_UP_DATE = $rawvalues["DT_UP_DATE"];
	if($DT_UP_DATE == ''){
		$DT_UP_DATE = $oldvalues["DT_UP_DATE"];
	}
	$old_price = $oldvalues["price"];
	$new_price = $rawvalues["price"];
	if($new_price == ''){
		$new_price = $oldvalues["price"];
	}


	$kanryou_henbi = $rawvalues["kanryou_henbi"];
	if($kanryou_henbi == ''){
		$kanryou_henbi = $oldvalues["kanryou_henbi"];
	}

	$old_nyuukin_price = $oldvalues["nyuukin_price"];
	$new_nyuukin_price = $rawvalues["nyuukin_price"];
	if($new_nyuukin_price == ''){
		$new_nyuukin_price = $oldvalues["nyuukin_price"];
	}

	$old_comment = $oldvalues["comment"];
	$new_comment = $rawvalues["comment"];
	if($new_comment == ''){
		$new_comment = $oldvalues["comment"];
	}
	$old_description = $oldvalues["description"];
	$new_description = $rawvalues["description"];
	if($new_description == ''){
		$new_description = $oldvalues["description"];
	}



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

	// $log .= "DT_UP_DATE {$DT_UP_DATE} \n";
	// $log .= "old_price {$old_price} new_price {$new_price}\n";

	// $log .= "price_sagaku {$price_sagaku} nyuukin_price_sagaku {$nyuukin_price_sagaku}\n";


		if(($price_sagaku != "") OR ($nyuukin_price_sagaku != "")){
				//完了時、チャットワーク流す
				// $word = "[info]";
				// $word .= "[title]商品アラート {$no_time}[/title]";
				$word = "●SEQ：{$product_id}\n";
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

				// $sugisan = "4207431dc4eb42bb1e13befa2f6657fe";
				// $nishitani = "c1d97cfaf7e544675fad7be63c49a0d5";
				// $bot = "ed472827b8dda0ba81ba586c8b0e4bd9";
				// //誰から発行するか
				// $token = $bot;
				// $token_test = $nishitani;


				$cw_body = str_replace("&","＆",$word);
				$cw_body = str_replace("'","’",$cw_body);
				$cw_body = str_replace("\"","”",$cw_body);
				$token = 'sugisan';
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
