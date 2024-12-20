<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$product_id = 287064;



function baihen_kinshi_days($product_id){
	//買取額取得
	$query = "SELECT price,`status` FROM shouhin WHERE product_id={$product_id} limit 1";
	$sql = mysql_query($query);
	$data = mysql_fetch_assoc($sql);
	$price = $data["price"];
	$status = $data["status"];
	//完了だったらもう何もしない。
	if($status == 10){
		return false;
	}

	//開始価格取得
	$query = "SELECT Starting_price FROM auctions WHERE product_id={$product_id} limit 1";
	$sql = mysql_query($query);
	$data = mysql_fetch_assoc($sql);
	$Starting_price = $data["Starting_price"];
	$Starting_price = 60000;

	//見込み粗利率の計算
	$mikomi_arari = ($Starting_price-$price)/$Starting_price*100;

	//見込み粗利率から、最大割引率を取得
	$query = "SELECT discount FROM mst_sales_discount WHERE discount_base=2 AND discount<{$mikomi_arari} ORDER BY count DESC LIMIT 1 ";
	$sql = mysql_query($query);
	$data = mysql_fetch_assoc($sql);
	$discount = $data["discount"];

	//最大割引率から、最短日数を取得
	$query = "SELECT count FROM mst_sales_discount WHERE discount_base=2 AND discount = {$discount} ORDER BY count ASC LIMIT 1 ";
	$sql = mysql_query($query);
	$data = mysql_fetch_assoc($sql);
	$count = $data["count"];

	//販売サイクル【90日】から、コスト割れへの最短日数を引き、売変禁止期間を計算
	//これで一番長い売変禁止期間を設定できる
	$count90 = 90-$count;

	// 売変禁止 期間が1日以上の場合、フラグなどの処理
	if($count90 > 0){
		return $count90;
	}else{
		return false;
	}
}// end baihen_kinshi_days

// echo baihen_kinshi_days($product_id);











$query = "SELECT product_id,yahoo_sinaban,Exhibition_Date,days_keep_price FROM shouhin WHERE `status`=3 AND days_keep_price>0 limit 10";

$sql = mysql_query($query);
$baihen_hinban = array();


while($data = mysql_fetch_assoc($sql)){
	$start_date = $data["Exhibition_Date"];
	$keep_days = $data["days_keep_price"];
	$start_date_s = strtotime($start_date);
	$keep_days_s = 86400*$keep_days;// 日数×86400(24h)
	$end_date_s = $start_date_s+$keep_days_s;
	$end_date = date("Y-m-d H:i:s",$end_date_s);

	$now_s = strtotime(date("Y-m-d H:i:s"));

	if($now_s >= $end_date_s){
		$baihen_hinban[] = $data["yahoo_sinaban"];
	}

}













$hinban_txt = '';
if(count($baihen_hinban) > 0){
	$word = '[info][title](F)売変開放(F)[/title]以下商品の売変フラグを立て、ヤフオクの再出品をお願いします。[info][title]オークション状況[/title]https://world-switch.com/lounge/admin/products/ss_product_status.php[/info]以下商品です。[info][title]管理番号[/title]';
	for ($hin_i=0; $hin_i < count($baihen_hinban); $hin_i++) {
		if($hinban_txt != ''){
			$hinban_txt .= "\n";
		}
		$hinban_txt .= $baihen_hinban[$hin_i];
	}
	$word .= $hinban_txt;
	$word .= '[/info]以上宜しくお願いします。[/info]';
}

// echo $word;

$to = 71;

	//メール送信
	$subject = '売変開放';
	$mail_body = $word;
	$sendPostData = array("subject" => $subject, "text" => $mail_body);
	$sendPostDataOptions = array('http' => array('method'=> 'POST','header'=> 'Content-Type: application/x-www-form-urlencoded','content' => http_build_query($sendPostData, "", "&")));
	try{ file_get_contents('https://rifa.life/evaProject/api/notification/mail', false, stream_context_create($sendPostDataOptions)); }catch(\Exception $e){}
	


























