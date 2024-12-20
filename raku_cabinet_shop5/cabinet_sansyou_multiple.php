
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
		.h2 {
		    background-color: #1cf;
		    color: #111;
		    padding: 10px;
		    margin: 0;
		}
		img{
			width: 10px;
			height: 10px;
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
		}
		#id_text{
			/*display: inline-block;*/
			margin-right: 20px;
			font-size: 26px;
		}
		#new_eva_link{
			float: right;
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
			float: left;
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

$box_id = "";

$box_id_array = array();
if($_GET["box_id_1"] != ""){
	$box_id_1 = htmlspecialchars($_GET["box_id_1"]);
	array_push($box_id_array , $box_id_1);
}
if($_GET["box_id_2"] != ""){
	$box_id_2 = htmlspecialchars($_GET["box_id_2"]);
	array_push($box_id_array , $box_id_2);
}
if($_GET["box_id_3"] != ""){
	$box_id_3 = htmlspecialchars($_GET["box_id_3"]);
	array_push($box_id_array , $box_id_3);
}
if($_GET["box_id_4"] != ""){
	$box_id_4 = htmlspecialchars($_GET["box_id_4"]);
	array_push($box_id_array , $box_id_4);
}
if($_GET["box_id_5"] != ""){
	$box_id_5 = htmlspecialchars($_GET["box_id_5"]);
	array_push($box_id_array , $box_id_5);
}
if($box_id_array != ""){
	$box_id = implode("_",$box_id_array);
	$box_id_default = $box_id;
	$box_id_name = str_replace("_","&",$box_id);
}

// if($_GET[box_id] != ""){
// 	$box_id = $_GET[box_id];
// 	$box_id_default = $box_id;
// 	$box_id_name = str_replace("_","&",$box_id);
// 	if(!stristr($box_id, "_")){
// 		// header("Location: /include/raku_cabinet/cabinet_sansyou.php?box_id={$box_id}");
// 		// exit();
// 		$box_id_array = array($box_id);
// 	}else{
// 		$box_id_array = explode("_",$box_id);
// 	}
// 	// var_dump($box_id_array);
// }
?>
<h1>box_id = <?=$box_id_name?></h1>
<form action="./cabinet_sansyou_multiple.php" method="get" accept-charset="utf-8">
	<!-- box_id <input type="text" name="box_id" placeholder=""> -->
	box_id_1 <input type="text" name="box_id_1" value="<?=$box_id_1?>">
	box_id_2 <input type="text" name="box_id_2" value="<?=$box_id_2?>">
	box_id_3 <input type="text" name="box_id_3" value="<?=$box_id_3?>">
	box_id_4 <input type="text" name="box_id_4" value="<?=$box_id_4?>">
	box_id_5 <input type="text" name="box_id_5" value="<?=$box_id_5?>">
	<input type="submit" name="submit" value="実行">
</form>

<?
if($box_id == ""){
	exit();
}
?>


<div id="all_table" style="padding-bottom: 500px;">

	<table cellpadding="0" cellspacing="0" id="main_table">
<?

$urlounge_box_name = "";
$rakuten_cabinet_name = "";

for ($box_i=0; $box_i < count($box_id_array); $box_i++) {
	$box_id = $box_id_array[$box_i];
?>
		<tr><th colspan="16" class="h2">box_id = <?=$box_id?></th></tr>
<?
	include $_SERVER["DOCUMENT_ROOT"]."/include/raku_cabinet_shop5/multiple_box_inc.php";
}
?>
	</table>

</div><!-- enc all_table -->

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
<form id="zip_edit_area" action="/include/zip_shop5/makezip_multiple.php" method="get" accept-charset="utf-8">
	<input type="hidden" name="box_id" value="<?=$box_id_default?>">
<div id="set_st_up_area">
	<div>一括ST変更</div>
	<div class="set_st_up" data="3">全てUP済み</div>
	<div class="set_st_up" data="">全て変更しない</div>
</div>
<div id="rakuten_cabinet_name">
	<?=$rakuten_cabinet_name?>
</div>
<div id="id_text">box_id = <?=$box_id_name?></div>
<div id="new_eva_link">
	いっぺんは無理。考える⇒⇒
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

<br clear="all">


	画像枚数
<?
for ($i=0; $i < count($box_id_array); $i++) {
?>
<span>box_id<?=$box_id_array[$i]?></span>
	<select name="img_set_<?=$box_id_array[$i]?>" >
		<option value="10">10</option>
		<option value="5">5</option>
	</select>
	枚ずつ
<?
}
?>
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
