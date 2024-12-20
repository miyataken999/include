
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
</style>
</head>
<body>


<?
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$box_id = 5096;
if($_GET[box_id] != ""){
	$box_id = $_GET[box_id];
}
?>
<h1>box_id = <?=$box_id?></h1>
<form action="./cabinet_sansyou.php" method="get" accept-charset="utf-8">
	box_id <input type="text" name="box_id" >
	<input type="submit" name="submit" value="実行">
</form>

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

	$query = ' SELECT product_id , status , yahoo_sinaban , yahoo_title , sales_price FROM store_products WHERE box_id = '.$box_id.' ORDER BY product_id DESC';

	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	while ($result = mysql_fetch_assoc($sql)) {
?>
	<tr id="toprow_<?=$result['product_id']?>">
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
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_1.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_1.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_2.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_2.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_3.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_3.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_4.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_4.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_5.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_5.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_6.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_6.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_7.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_7.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_8.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_8.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_9.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_9.jpg" alt="" width="35px" height="35px" ></a></td>
		<td><a href="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_10.jpg" target="_blank"><img src="http://thumbnail.image.rakuten.co.jp/@0_mall/rfstore/cabinet/<?=$img_pass?>/<?=$result['product_id']?>_10.jpg" alt="" width="35px" height="35px" ></a></td>
	</tr>
	<tr id="underrow_<?=$result['product_id']?>">
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
		<td>販売額<br><?=number_format($result['sales_price'])?>円</td>
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
<form id="zip_edit_area" action="/include/zip/makezip.php" method="get" accept-charset="utf-8">
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
	<a href="/newshop2/auctions_list.php?q=(bod_id~contains~<?=$box_id?>)" target="_blank">出品情報</a>
	<!-- <a href="/newshop2/Eva_st_all_list.php?q=(box_id~contains~<?=$box_id?>)" target="_blank">商品一覧</a> -->
	<a href="/shop/box_list.php?s_box_id=<?=$box_id?>" target="_blank">旧EVAボックス一覧</a>
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
			<td><input type="text" name="raku_hanbaikikan" value="" placeholder=""></td>
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
	<select name="user_id" >
<?
	$user_query = " SELECT user_id , first_name FROM users WHERE title=1 ORDER BY income_id";

	$user_sql = mysql_query('SET NAMES utf8');
	$user_sql = mysql_query($user_query);
	while ($user_result = mysql_fetch_assoc($user_sql)){
		$user_id_res = $user_result[user_id];
		$user_name_res = $user_result[first_name];
		if($user_id_res == $user_id){
			$_checked = "selected";
		}else{
			$_checked = "";
		}
?>
		<option value="<?=$user_id_res?>" <?=$_checked?> ><?=$user_name_res?></option>
<?
	}
?>
	</select>
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
	$("#set_st_up_area").find(".set_st_up").click(function(){
		new_st = $(this).attr("data");
		$("#main_table").find(".st_up_select").val(new_st);
	})
	$("#zip_edit_area").submit(function(){
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
