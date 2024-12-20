<?
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";




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
	// $Starting_price = 60000;

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

	// 売変禁止 期間が1日より上の場合、フラグなどの処理
	if($count90 > 1){
		return $count90;
	}else{
		return false;
	}
}// end baihen_kinshi_days

// echo baihen_kinshi_days($product_id);
