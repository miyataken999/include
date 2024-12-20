
<?//画像参照用のページだったが、そのままZIP作成用のページに。?>

<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>出品用ZIP作成画面</title>
<style type="text/css">
#tokuteikokusaisyu {
    position: fixed;
    top: 70px;
    right: 50px;
    background-color: #f00;
    padding: 20px;
    border-radius: 30px;
    border: 5px solid #111;
    color: #111;
    font-weight: bold;
    text-align: center;
    -webkit-animation: tokutei 0.5s linear infinite;
       -moz-animation: tokutei 0.5s linear infinite;
        -ms-animation: tokutei 0.5s linear infinite;
         -o-animation: tokutei 0.5s linear infinite;
            animation: tokutei 0.5s linear infinite;
}
@-webkit-keyframes tokutei {
	0% { background-color: #f00; }
	100% { background-color: #ff0; }
}
@-moz-keyframes tokutei {
	0% { background-color: #f00; }
	100% { background-color: #ff0; }
}
@-ms-keyframes tokutei {
	0% { background-color: #f00; }
	100% { background-color: #ff0; }
}
@-o-keyframes tokutei {
	0% { background-color: #f00; }
	100% { background-color: #ff0; }
}
@keyframes tokutei {
	0% { background-color: #f00; }
	100% { background-color: #ff0; }
}
	img{
		width: 35px;
		height: 35px;
	}
	a:hover{
		opacity: 0.5;
	}
	table{
		border: 1px solid;
	}
	td {
	    padding: 5px;
	    border: 1px solid;
	}
	#zip_edit_area table{
		float: left;
	}
#zip_edit_area {
    text-align: right;
    position: fixed;
    right: 0px;
    bottom: 20px;
    background-color: rgba(0,0,0,0.8);
    display: block;
    width: 100%;
    padding: 15px 0;
    color: #fff;
    font-size: 18px;
}
#zip_edit_area select{
	padding: 10px;
}
#submit:hover{
	opacity: 0.5;
	cursor: pointer;
}
#submit{
	padding: 10px;
	margin-right: 20px;
}
#rakuten_cabinet_name {
    padding: 0 10px 10px;
}
#main_table{
	margin-bottom: 500px;
}
#id_text{
	display: inline-block;
	margin-right: 20px;
	font-size: 26px;
}
#new_eva_link a{
	color: #111;
	text-decoration: none;
	display: inline-block;
	padding: 15px 30px;
	margin-right: 20px;
	background-color: #ddd;
	border: 2px solid #000;
}
#settei_table{
	padding-left: 20px;
}
#set_st_up_area{
	position: absolute;
	top: 0;
	left: 0;
	text-align: left;
}
#set_st_up_area .set_st_up:hover{
	opacity: 0.5;
}
#set_st_up_area .set_st_up{
	background-color: #dcdcdc;
	border: 2px solid #111;
	padding: 10px 10px;
	width: 90px;
	color: #111;
	font-size: 12px;
	display: inline-block;
	cursor: pointer;
}
.kaigai_no{
	background-color: #700;
}
</style>
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
?>


<?
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

if($_GET[box_id] != ""){
	$box_id = $_GET[box_id];
}
?>
<h1>box_id = <?=$box_id?></h1>
<form action="./cabinet_sansyou.php" method="get" accept-charset="utf-8">
	box_id <input type="text" name="box_id" >
	<input type="submit" name="submit" value="実行">
</form>

<?
if($box_id == ""){
	exit();
}
?>

<table cellpadding="0" cellspacing="0" id="main_table">
	<tr>
		<td>ST変更</td>
		<td>SEQ</td>
		<td>品番</td>
		<td></td>
		<td></td>
		<td></td>
		<td>画像１</td>
		<td>画像２</td>
		<td>画像３</td>
		<td>画像４</td>
		<td>画像５</td>
		<td>画像６</td>
		<td>画像７</td>
		<td>画像８</td>
		<td>画像９</td>
		<td>画像１０</td>
	</tr>
<?
	$query = ' SELECT raku_image_name , zip , box_name , rakuten_cabinet_name FROM box WHERE box_id = '.$box_id;

	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);
	$img_pass = $result['raku_image_name'];
	$urlounge_img_pass = $result['zip'];
	$pieces = explode(".", $urlounge_img_pass);
	$urlounge_box_name = $result['box_name'];
	$rakuten_cabinet_name = $result['rakuten_cabinet_name'];

	$query = ' SELECT product_id , status , yahoo_sinaban , yahoo_title , raku_title , yahoo_sozai , item_name , line FROM shouhin WHERE box_id = '.$box_id.' ORDER BY box_sort';

	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$tokuteikokusaisyu = "";
	while ($result = mysql_fetch_assoc($sql)) {
		$hikakumoji = "";
		$hikakumoji = $result["yahoo_sozai"]." ".$result["item_name"]." ".$result["line"]." ".$result["raku_goods_name"];
		if(
			(strpos($hikakumoji, "象牙") !== false ) OR
			(strpos($hikakumoji, "鼈甲") !== false ) OR
			(strpos($hikakumoji, "べっ甲") !== false ) OR
			(strpos($hikakumoji, "ベッ甲") !== false ) OR
			(strpos($hikakumoji, "ベっ甲") !== false ) OR
			(strpos($hikakumoji, "べッ甲") !== false ) OR
			(strpos($hikakumoji, "タイマイ") !== false ) OR
			($result["sub_category_id1"] == 384) OR
			($result["sub_category_id1"] == 385) OR
			($result["sub_category_id1"] == 386) OR
			($result["sub_category_id1"] == 387) OR
			($result["sub_category_id1"] == 388) OR
			($result["sub_category_id1"] == 389) OR
			($result["sub_category_id1"] == 390) OR
			($result["sub_category_id1"] == 499) OR
			($result["sub_category_id1"] == 500) OR
			($result["sub_category_id1"] == 501) OR
			($result["sub_category_id1"] == 502) OR
			($result["sub_category_id1"] == 503) OR
			($result["sub_category_id1"] == 504) OR
			($result["sub_category_id1"] == 505) OR
			($result["sub_category_id1"] == 540) OR
			($result["sub_category_id1"] == 556) OR
			($result["sub_category_id1"] == 591) OR
			($result["sub_category_id1"] == 607)
		){
			$kaigaiflag = "no";
			$tokuteikokusaisyu = "ari";
		}else{
			$kaigaiflag = "yes";
		}

//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//画像ファイルパス
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//ステータスコードで分岐処理　なかったら品番をファイル名に変換する

//品番で調べる
$pid = strtolower($result["yahoo_sinaban"]);
$url = "https://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/{$img_pass}/{$pid}_1.jpg";
$context = stream_context_create(array(
    'http' => array('ignore_errors' => true)
));
$response = file_get_contents($url, false, $context);
preg_match('/HTTP\/1\.[0|1|x] ([0-9]{3})/', $http_response_header[0], $matches);
$status_code = $matches[1];
$first_img_url = $url;


if(($status_code != 200) OR ($status_code == 302) ){
	//品番のWSロゴ付きタイプで調べる
	$url = "https://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/{$img_pass}/{$pid}_1w.jpg";
	$context = stream_context_create(array(
	    'http' => array('ignore_errors' => true)
	));
	$response = file_get_contents($url, false, $context);

	preg_match('/HTTP\/1\.[0|1|x] ([0-9]{3})/', $http_response_header[0], $matches);
	$status_code = $matches[1];
	$first_img_url = $url;
}


if(($status_code != 200) OR ($status_code == 302) ){
//SEQで調べる
	$pid = $result['product_id'];
	$url = "https://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/{$img_pass}/{$pid}_1.jpg";
	$context = stream_context_create(array(
	    'http' => array('ignore_errors' => true)
	));
	$response = file_get_contents($url, false, $context);

	preg_match('/HTTP\/1\.[0|1|x] ([0-9]{3})/', $http_response_header[0], $matches);
	$status_code = $matches[1];
	$first_img_url = $url;
}




if(($status_code != 200) OR ($status_code == 302) ){
	//SEQのWSロゴ付きタイプで調べる
	$url = "https://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/{$img_pass}/{$pid}_1w.jpg";
	$context = stream_context_create(array(
	    'http' => array('ignore_errors' => true)
	));
	$response = file_get_contents($url, false, $context);

	preg_match('/HTTP\/1\.[0|1|x] ([0-9]{3})/', $http_response_header[0], $matches);
	$status_code = $matches[1];
	$first_img_url = $url;
}
// mysql_error();
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//END 画像ファイルパス
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■

?>
	<tr id="toprow_<?=$result['product_id']?>" class="kaigai_<?=$kaigaiflag?>">
		<td>
			<select name="st_up" class="st_up_select">
				<option value="3">UP済</option>
				<option value="">変更しない</option>
			</select>
		</td>
		<td><?=$result['product_id']?></td>
		<td><?=$result['yahoo_sinaban']?></td>
		<td>Yタイトル</td>
		<td><?=$result['yahoo_title']?></td>
		<td>楽天</td>
		<td><a href="<?=$first_img_url?>" target="_blank"><img src="<?=$first_img_url?>" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_2.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_2.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_3.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_3.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_4.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_4.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_5.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_5.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_6.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_6.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_7.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_7.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_8.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_8.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_9.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_9.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_10.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$pid?>_10.jpg" alt="" width="35px" height="35px" ></a></td>
	</tr>
	<tr id="underrow_<?=$result['product_id']?>" class="kaigai_<?=$kaigaiflag?>">
		<td></td>
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

<?
	$product_id = $result['product_id'];
	$price_query = " SELECT Starting_price FROM auctions WHERE product_id={$product_id} ";

	$price_sql = mysql_query('SET NAMES utf8');
	$price_sql = mysql_query($price_query);
	$price_result = mysql_fetch_assoc($price_sql);
?>
		<td>販売額<br><?=number_format($price_result['Starting_price'])?>円</td>
<?
//reset
$product_id = "";
?>
		<td></td>
		<td></td>
		<td>urlounge</td>

		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_1.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_1.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_2.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_2.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_3.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_3.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_4.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_4.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_5.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_5.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_6.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_6.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_7.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_7.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_8.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_8.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_9.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_9.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
		<td><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_10.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$result['product_id']?>_10.jpg" alt="" width="35px" height="35px" onerror="this.style.display='none';" ></a></td>
	</tr>
<?
	}


?>
</table>

<?


if($tokuteikokusaisyu == "ari"){
?>
	<div id="tokuteikokusaisyu">特定国際種あり！<br>倒産！<br>ヤフオク停止！</div>
<?
}

session_start();
//旧EVAのユーザーID
if($_SESSION["PortalUserID"] != ""){
	$user_id = $_SESSION["PortalUserID"];
}
//新EVAのユーザーID
if($_SESSION["uid"] != ""){
	$user_id = $_SESSION["uid"];
}


?>
<form id="zip_edit_area" action="/include/zip_shop5/makezip.php" method="get" accept-charset="utf-8">
		<input type="hidden" name="box_id" value="<?=$box_id?>">
	<div id="set_st_up_area">
		<div>一括ST変更</div>
		<div class="set_st_up" data="3">全てUP済み</div>
		<div class="set_st_up" data="">全て変更しない</div>
	</div>
	<div id="rakuten_cabinet_name">
		<?=$rakuten_cabinet_name?>
	</div>
	<div id="id_text">box_id = <?=$box_id?></div>
	<div id="new_eva_link">
		<a href="/shop5/auctions_list.php?q=(bod_id~contains~<?=$box_id?>)" target="_blank">出品情報</a>
		<!-- <a href="/newshop2/Eva_st_all_list.php?q=(box_id~contains~<?=$box_id?>)" target="_blank">商品一覧</a> -->
		<!-- <a href="/shop/box_list.php?s_box_id=<?=$box_id?>" target="_blank">旧EVAボックス一覧</a> -->
	</div>
	<div id="settei_table">
		<div style="text-align: left">
			※注意※全商品に対してCSV内容を強制的に書き換える処理です。（EVA内のデータは変わりません。）
		</div>
		<table>
			<tr>
				<th colspan="4" align="center">楽天CSV</th>
			</tr>
			<tr>
				<th>SP用商品説明文　新着URL</th>
				<th>商品名</th>
				<th>在庫数</th>
				<th>販売期間指定</th>
			</tr>
			<tr>
				<td><input type="text" name="raku_new_arrival_url" value="" placeholder="「★★★新着★★★」置換部分"></td>
				<td><input type="text" name="raku_shouhinmei" value="" placeholder="「【中古】」置換部分"></td>
				<td><input type="text" name="raku_zaikosuu" value="" placeholder=""></td>
				<td><input type="text" name="raku_hanbaikikan" id="raku_hanbaikikan" value="" placeholder=""></td>
			</tr>
		</table>
		<table>
			<tr>
				<th align="center">ヤフオクCSV</th>
			</tr>
			<tr>
				<th>ストア内検索キーワード</th>
			</tr>
			<tr>
				<td><input type="text" name="y_key_word" value="" placeholder="先頭に追加"></td>
			</tr>
		</table>
		<br clear="all">
	</div>



		画像枚数
		<select name="img_set" >
			<option value="10">10</option>
			<option value="5">5</option>
		</select>
		枚ずつ
	<?
		$user_query = " SELECT first_name FROM users WHERE user_id={$user_id} LIMIT 1";

		$user_sql = mysql_query('SET NAMES utf8');
		$user_sql = mysql_query($user_query);
		$user_result = mysql_fetch_assoc($user_sql);
		$user_name_res = $user_result[first_name];
	?>

	<input type="text" name="" value="<?=$user_name_res?>" disabled>
	<input type="hidden" name="user_id" value="<?=$user_id?>">

	<input type="hidden" name="st_up_result" id="st_up_result" value="">
	<input id="submit" type="submit" name="submit" value="ZIP作成開始">

</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
var new_st = "";
var st_res = "";
var row_id_seq = "";
var st_up_val = "";
var st_id = "";
var confirm_flag = "";
var raku_hanbaikikan_val = "";
	$("#set_st_up_area").find(".set_st_up").click(function(){
		new_st = $(this).attr("data");
		$("#main_table").find(".st_up_select").val(new_st);
	})
	$("#zip_edit_area").submit(function(){
		raku_hanbaikikan_val = $("#raku_hanbaikikan").val();
		if(raku_hanbaikikan_val == ""){
			alert("販売期間指定ないです！入れましょう！");
			return false;
		}
		st_res = "";
		row_id_seq = "";
		$("#main_table").find(".st_up_select").each(function(index, val) {
			st_up_val = $(this).val();
			st_id = "";
			if(st_up_val == 3){
				row_id_seq = $(this).parent().parent().attr("id");
				row_id_seq = row_id_seq.replace("toprow_","");
				st_id = $("#underrow_"+row_id_seq).find(".st_id").attr("data");
				console.log("st_id"+st_id);
				st_res = st_res+"_"+row_id_seq;

				//STが加工待ちと入庫待ち以外があったらconfirm出すフラグをたてる
				if((st_id != 106) && (st_id != 107) && (st_id != 108)){
					confirm_flag = "out";
				}
			}
		});
		$("#st_up_result").val(st_res);

		if(confirm_flag == "out"){
			if(window.confirm('ST「加工待ち」「入庫待ち」「P待ち」以外がUP済み変更に含まれています。このまま続行しますか？')){
				return true;
			}else{
				return false;
			}
		}else{
			return true;
		}


	})
</script>
</body>
</html>
