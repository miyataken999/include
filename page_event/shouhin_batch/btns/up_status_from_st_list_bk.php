<?
$result["txt"] = $params["st_val"];
?>

<?
$uid = $_SESSION["uid"];
$time = "'".date('Y-m-d H:i:s')."'";

while($data = $button->getNextSelectedRecord()){
	$up_id = $data["product_id"];
	$up_status = $params["st_val"];
	if($up_status == 10){
		//完了のとき、完了変更日
		$sel_sql = "SELECT line , item_name , comment , kanryou_henbi , yahoo_sinaban , yahoo_junle , title , price_secret , sales_price_secret , nyuukin_price , satei_by , DATEDIFF({$time},DT_UP_DATE) AS sabun FROM shouhin WHERE product_id = {$up_id}";
		$rs = CustomQuery($sel_sql);
		$data = db_fetch_array($rs);
		$sel_kanryou_henbi = $data["kanryou_henbi"];
		$yahoo_sinaban = $data["yahoo_sinaban"];
		$yahoo_junle = $data["yahoo_junle"];
		$yahoo_junle = str_replace("&","＆",$yahoo_junle);
		$yahoo_junle_array = explode("/",$yahoo_junle);
		$yahoo_junle = $yahoo_junle_array[0];
		$title = $data["title"];
		$title = str_replace("&","＆",$title);
		$price_secret = $data["price_secret"];
		$sales_price_secret = $data["sales_price_secret"];
		$nyuukin_price = number_format($data["nyuukin_price"]);
		$satei_by = $data["satei_by"];
		$sabun = $data["sabun"];

		$line = $data["line"];
		$item_name = $data["item_name"];
		$comment = $data["comment"];


		if($sel_kanryou_henbi == ""){
			$sql = "UPDATE shouhin SET status = '{$up_status}' ,updated_by = {$uid} , updated_at = {$time} , kanryou_henbi = {$time} WHERE product_id = {$up_id}";

			$satei_sql = "SELECT first_name FROM users WHERE user_id = {$satei_by} LIMIT 1";
			$satei_rs = CustomQuery($satei_sql);
			$satei = db_fetch_array($satei_rs);
			$satei_name = $satei["first_name"];

			//完了時、チャットワーク流す
			$word = "[info]";
			$word .= "SEQ：{$up_id}\n";
			$word .= "品番：{$yahoo_sinaban}\n";
			$word .= "ブランドID：{$yahoo_junle}\n";
			$word .= "タイトル：{$title}\n";
			$word .= "URL：http://item.rakuten.co.jp/rfstore/{$up_id}/\n";
			$word .= "ライン：{$line}\n";
			$word .= "アイテム名：{$item_name}\n";
			$word .= "買取額：{$price_secret}\n";
			$word .= "販売額：{$sales_price_secret}\n";
			$word .= "入金額：{$nyuukin_price}\n";
			$word .= "販売先：{$comment}\n";
			$word .= "査定人：{$satei_name}\n";
			$word .= "販売日数：{$sabun}";
			$word .= "[/info]";


			$word = mb_convert_encoding($word, "UTF-8", "auto");

			//タスクにされてるルーム
			$room = "69864500";
			//テスト用グループルーム
			$room_test = "75968941";

			$sugisan = "4207431dc4eb42bb1e13befa2f6657fe";
			$nishitani = "c1d97cfaf7e544675fad7be63c49a0d5";
			$bot = "ed472827b8dda0ba81ba586c8b0e4bd9";
			//誰から発行するか
			$token = $bot;
			$token_test = $nishitani;

			$c = system('curl -X POST -H "X-ChatWorkToken:'.$token.'" -d "body='.$word.'" "https://api.chatwork.com/v2/rooms/'.$room.'/messages" -O',$c);
			// $cc = system('curl -X POST -H "X-ChatWorkToken:'.$token_test.'" -d "body='.$word.'" "https://api.chatwork.com/v2/rooms/'.$room_test.'/messages" -O',$cc);


		}else{
			$sql = "UPDATE shouhin SET status = '{$up_status}' ,updated_by = {$uid} , updated_at = {$time} WHERE product_id = {$up_id}";
		}
	}elseif($up_status == 33){
		//売却済のとき、成約人、成約日
		$sql = "UPDATE shouhin SET status = '{$up_status}' ,updated_by = {$uid} , updated_at = {$time} , REG_AUTHOR = {$uid} , DT_UP_DATE = {$time} WHERE product_id = {$up_id}";
	}elseif($up_status == 34){
		//合わずのとき、返却日、返却人
		$sql = "UPDATE shouhin SET status = '{$up_status}' ,updated_by = {$uid} , updated_at = {$time} , AWAZU_NIN = {$uid} , AWAZU_DATE = {$time} WHERE product_id = {$up_id}";
	}else{
		//他のとき
		$sql = "UPDATE shouhin SET status = '{$up_status}' ,updated_by = {$uid} , updated_at = {$time} WHERE product_id = {$up_id}";
	}
	CustomQuery($sql);
};
?>

