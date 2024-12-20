
<?//画像参照用のページだったが、そのままZIP作成用のページに。?>

<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>出品状態確認画面</title>
<link rel="stylesheet" href="/include/shuppin/shuppin_status.css">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header.php";
?>


<?
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

if($_GET[box_id] != ""){
	$box_id = $_GET[box_id];
}
if($_GET[status_sel] != ""){
	$status_sel = $_GET[status_sel];
}

if($_GET[page] != ""){
	$page = $_GET[page];
}

if($box_id != ""){
	$where = " box_id = {$box_id} ORDER BY product_id DESC ";
}elseif($status_sel != ""){
	$where = "status={$status_sel} ORDER BY product_id DESC ";
}else{
	//データがない場合、フォームだけ。同じのが下にもあり！
?>
<form action="./shuppin_status.php" method="get" accept-charset="utf-8">
box_idを入れたら、ST関係なく全て出します。<br>
	box_id <input type="text" name="box_id" value="<?=$box_id?>">
	ST
	<select id="status_sel" name="status_sel">
		<option value="3">UP済</option>
		<option value="10">完了</option>
	</select>
	表示件数
	<select id="_hyouji_rec" name="_hyouji_rec">
		<option value="10" <?if($_hyouji_rec == 10){?>selected<?}?> >10</option>
		<option value="20" <?if($_hyouji_rec == 20){?>selected<?}?>>20</option>
		<option value="40" <?if($_hyouji_rec == 40){?>selected<?}?>>40</option>
		<option value="60" <?if($_hyouji_rec == 60){?>selected<?}?>>60</option>
		<option value="80" <?if($_hyouji_rec == 80){?>selected<?}?>>80</option>
		<option value="100" <?if($_hyouji_rec == 100){?>selected<?}?>>100</option>
		<option value="500" <?if($_hyouji_rec == 500){?>selected<?}?>>500</option>
	</select>

	<input type="submit" name="" value="実行">
</form>
<?
	exit();
}


$result_total_count = mysql_query('SELECT COUNT(*) FROM store_products WHERE '.$where);
$count_row = mysql_fetch_assoc($result_total_count);
$now_count = $count_row["COUNT(*)"];

/*--------------------------------
---------表示数
--------------------------------*/
$_hyouji_rec = 10;
if($_GET["_hyouji_rec"] != ""){
	$_hyouji_rec = htmlspecialchars($_GET["_hyouji_rec"]);
}
$page_count = $now_count/$_hyouji_rec;
$page_count = ceil($page_count);

?>




<div id="all_count">
該当件数<?=$now_count?>件
</div>

<?
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//yahooオークション総出品数
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//出品リスト
$all_count_baseurl = "https://auctions.yahooapis.jp/AuctionWebService/V2/sellingList";
$all_count_app_id = "dj0zaiZpPThnSWxlREI0MXAweiZzPWNvbnN1bWVyc2VjcmV0Jng9MzA-";
//リクエストパラメータ
$all_count_shop_id = "rf_shop2010";
$all_count_url = "{$all_count_baseurl}?appid={$all_count_app_id}&sellerID={$all_count_shop_id}";
//XMLパース
$all_count_xml = simplexml_load_file( $all_count_url );
$all_count_res = $all_count_xml["totalResultsAvailable"];
?>

<div id="yahoo_all_count">
現在のヤフオク出品総数  <?=$all_count_res?>点
</div>


<?
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//楽天総出品数
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

$rakuten_applicationId = "1045446864372401942";
$rakuten_shopCode = "rfstore";

$rakuten_rakuten_baseurl = "https://app.rakuten.co.jp/services/api/IchibaItem/Search/20140222";
$rakuten_rakuten_url = "{$rakuten_rakuten_baseurl}?applicationId={$rakuten_applicationId}&shopCode={$rakuten_shopCode}";
$rakuten_rakuten_xml = json_decode(file_get_contents($rakuten_rakuten_url));
$all_raku_res = $rakuten_rakuten_xml->count;

?>

<div id="raku_all_count">
現在の楽天出品総数  <?=$all_raku_res?>点
</div>




<div id="page_box">

<?



//今のページ
if($page){
	$now_page = $page;
	$limit = (($page-1)*$_hyouji_rec).",";
}else{
	$now_page = 1;
}
$limit = " LIMIT ".$limit.$_hyouji_rec;

	print "<h3>{$now_page}/{$page_count} ページ</h3>";




//表示するページのスタート
$start_page = 1;
if($page_count > 5){
	if($now_page > 3){
		$start_page = $now_page-2;
	}
	if($now_page > $page_count-2){
		$start_page = $page_count-4;
	}
}
//表示する最後のページ
$last_page = $start_page+4;

//検索データの引き継ぎ
$get_param = "";



if($box_id){
	$get_param .= "&box_id=".$box_id;
}
if($status_sel){
	$get_param .= "&status_sel=".$status_sel;
}
if($_hyouji_rec){
	$get_param .= "&_hyouji_rec=".$_hyouji_rec;
}

if($page){
	$page_param = "&page=".$page;
}

//「戻る」値
if($now_page == 1){
	$return_page = '<a href="./shuppin_status.php" onclick="return false;" class="on_page" id="back_link_btn" >戻る</a>';
	$first_page_btn = '<a href="./shuppin_status.php" onclick="return false;" class="on_page" >最初</a>';
}else{
	$return_page = '<a href="./shuppin_status.php?page='.($now_page-1).$get_param.'" class="off_page" id="back_link_btn" >戻る</a>';
	$first_page_btn = '<a href="./shuppin_status.php?page='.$get_param.'" class="off_page" >最初</a>';
}
//「次へ」値
if($now_page == $page_count){
	$next_page = '<a href="./shuppin_status.php" onclick="return false;" class="on_page" id="next_link_btn" >次の20件へ</a>';
	$last_page_btn = '<a href="./shuppin_status.php" onclick="return false;" class="on_page" >最後</a>';
}else{
	$next_page = '<a href="./shuppin_status.php?page='.($now_page+1).$get_param.'" class="off_page" id="next_link_btn" >次の20件へ</a>';
	$last_page_btn = '<a href="./shuppin_status.php?page='.$page_count.$get_param.'" class="off_page" >最後</a>';
}


echo $first_page_btn.$return_page;


for ($i=$start_page; $i <= $last_page; $i++) {
	if($i <= $page_count){
		if($now_page == $i){
			$page_class = "on_page";
			$void = "onclick='return false;'";
		}else{
			$page_class = "off_page";
			$void = "";
		}


?>
	<a href="./shuppin_status.php?page=<?=$i.$get_param?>" class="<?=$page_class?>" <?=$void?> ><?=$i?></a>
<?
	}
}


echo $next_page.'...'.$last_page_btn;


?>

</div><!-- end page_box -->






<form action="./shuppin_status.php" method="get" accept-charset="utf-8">
box_idを入れたら、ST関係なく全て出します。<br>
	box_id <input type="text" name="box_id" value="<?=$box_id?>">
	ST
	<select id="status_sel" name="status_sel">
		<option value="3">UP済</option>
		<option value="10">完了</option>
	</select>
	表示件数
	<select id="_hyouji_rec" name="_hyouji_rec">
		<option value="10" <?if($_hyouji_rec == 10){?>selected<?}?> >10</option>
		<option value="20" <?if($_hyouji_rec == 20){?>selected<?}?>>20</option>
		<option value="40" <?if($_hyouji_rec == 40){?>selected<?}?>>40</option>
		<option value="60" <?if($_hyouji_rec == 60){?>selected<?}?>>60</option>
		<option value="80" <?if($_hyouji_rec == 80){?>selected<?}?>>80</option>
		<option value="100" <?if($_hyouji_rec == 100){?>selected<?}?>>100</option>
		<option value="500" <?if($_hyouji_rec == 500){?>selected<?}?>>500</option>
	</select>

	<input type="submit" name="" value="実行">
</form>

<table cellpadding="0" cellspacing="0" id="main_table">
	<tr>
		<td>SEQ</td>
		<td>EVA商品状態</td>
		<td>品番</td>
		<td>ヤフオク</td>
		<td>楽天</td>
	</tr>
<?



	$query = ' SELECT product_id , status , yahoo_sinaban FROM store_products WHERE '.$where.$limit;
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	while ($result = mysql_fetch_assoc($sql)) {
		$SEQ = $result['product_id'];
?>
	<tr id="toprow_<?=$result['product_id']?>">
		<td><?=$SEQ?></td>
		<td>ST<br>
<?
$status_id = $result['status'];
	$status_query = " SELECT goods_status FROM _goods_status2 WHERE goods_id={$status_id} ";

	$status_sql = mysql_query('SET NAMES utf8');
	$status_sql = mysql_query($status_query);
	$status_result = mysql_fetch_assoc($status_sql);
?>
		<?=$status_result['goods_status']?>
		<span class="st_id" data="<?=$status_id?>"></span>
	</td>
<?
//reset
$status_id = "";
?>
		<td><?=$result['yahoo_sinaban']?></td>


<?
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//yahooオークション情報取得部分
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//出品リスト
$seq_kensaku_baseurl = "https://auctions.yahooapis.jp/AuctionWebService/V2/search";
//リクエストパラメータ
$seq_kensaku_app_id = "dj0zaiZpPThnSWxlREI0MXAweiZzPWNvbnN1bWVyc2VjcmV0Jng9MzA-";
$seq_kensaku_seq = $SEQ;
$seq_kensaku_query = "■{$seq_kensaku_seq}";
$seller_id = "rf_shop2010";

$seq_kensaku_url = "{$seq_kensaku_baseurl}?appid={$seq_kensaku_app_id}&query={$seq_kensaku_query}&seller={$seller_id}";

//XMLパース
$seq_kensaku_xml = simplexml_load_file( $seq_kensaku_url );
// var_dump($seq_kensaku_xml);

//リクエストパラメータ
$auction_id = $seq_kensaku_xml->Result->Item->AuctionID;

//商品詳細
$baseurl = "https://auctions.yahooapis.jp/AuctionWebService/V2/auctionItem";
$app_id = "dj0zaiZpPThnSWxlREI0MXAweiZzPWNvbnN1bWVyc2VjcmV0Jng9MzA-";
$url = "{$baseurl}?appid={$app_id}&auctionID={$auction_id}";
//XMLパース
$xml = simplexml_load_file( $url );
//オークション情報取得
$seq_auc_url = $xml->Result->AuctionItemUrl;
$seq_auc_status = $xml->Result->Status;

if($seq_auc_status == "open"){
	$seq_auc_status = "出品中";
}else{
	$seq_auc_status = "";
}

//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//yahooオークション情報取得部分 END
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
?>
		<td><a href="<?=$seq_auc_url?>" target="_blank" ><?=$seq_auc_status?></a></td>



<?
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//楽天情報取得部分
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

$rakuten_applicationId = "1045446864372401942";
$rakuten_shopCode = "rfstore";

$rakuten_rakuten_baseurl = "https://app.rakuten.co.jp/services/api/IchibaItem/Search/20140222";
$rakuten_rakuten_url = "{$rakuten_rakuten_baseurl}?applicationId={$rakuten_applicationId}&shopCode={$rakuten_shopCode}&keyword={$seq_kensaku_query}";
$rakuten_rakuten_xml = json_decode(file_get_contents($rakuten_rakuten_url));


$rakuten_abc = $rakuten_rakuten_xml->Items[0]->Item->availability;
$rakuten_url = $rakuten_rakuten_xml->Items[0]->Item->itemUrl;

if($rakuten_abc == 1){
	$rakuten_abc = "出品中";
}else{
	$rakuten_abc = "";
}
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//楽天情報取得部分 END
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

?>
		<td><a href="<?=$rakuten_url?>" target="_blank" ><?=$rakuten_abc?></a></td>
	</tr>
<?
	}


?>
</table>


<div id="under_page_box">
<?
echo $first_page_btn.$return_page;


for ($i=$start_page; $i <= $last_page; $i++) {
	if($i <= $page_count){
		if($now_page == $i){
			$page_class = "on_page";
			$void = "onclick='return false;'";
		}else{
			$page_class = "off_page";
			$void = "";
		}


?>
	<a href="./shuppin_status.php?page=<?=$i.$get_param?>" class="<?=$page_class?>" <?=$void?> ><?=$i?></a>
<?
	}
}


echo $next_page.'...'.$last_page_btn;


?>

</div><!-- end page_box -->




<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
</body>
</html>
