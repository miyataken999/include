
<?//画像参照用のページだったが、そのままZIP作成用のページに。?>

<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>出品前確認画面</title>
	<link rel="stylesheet" href="./stylecsscss.css">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
?>

<?
// エラー出力する場合
// ini_set( 'display_errors', 1 );


//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//認証部分作成
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
include_once $_SERVER["DOCUMENT_ROOT"]."/include/shuppin/rakuten/code/key.php";
//リクエストパラメータ
$rakuten_baseurl = "https://api.rms.rakuten.co.jp/es/1.0/cabinet/usage/get";
$request = "";
$rakuten_url = "{$rakuten_baseurl}{$request}";

$result = file_get_contents(
  $rakuten_url,
  false,
  stream_context_create(
    array(
      'http' => array(
        'method' => 'GET',
        'header' => implode(
          "\r\n",
          array(
            0 => "Authorization: {$ccc}"
          )
        )
      )
    )
  )
);
$obj = simplexml_load_string($result);

// var_dump($obj);


$resultCode = $obj->cabinetUsageGetResult->resultCode;
$MaxSpace = $obj->cabinetUsageGetResult->MaxSpace;
$MaxSpace = $MaxSpace*1024;
$FolderMax = $obj->cabinetUsageGetResult->FolderMax;
$FileMax = $obj->cabinetUsageGetResult->FileMax;
$UseSpace = $obj->cabinetUsageGetResult->UseSpace;
$UseSpace = $UseSpace;
$AvailSpace = $obj->cabinetUsageGetResult->AvailSpace;
$AvailSpace = $AvailSpace;
$UseFolderCount = $obj->cabinetUsageGetResult->UseFolderCount;
$AvailFolderCount = $obj->cabinetUsageGetResult->AvailFolderCount;

$error = array();
if($UseSpace > $MaxSpace){
  $error[] = "利用容量が限界突破しています！<a href='/include/shuppin/rakuten/cabinet_navi.php'>キャビネット一覧</a>";
  $UseSpaceError = "UseSpaceError";
}elseif($UseSpace > $MaxSpace-1000){
  $error[] = "利用容量そろそろアウト。<br>残り{$AvailSpace}KB。<a href='/include/shuppin/rakuten/cabinet_navi.php'>キャビネット一覧</a>";
  $UseSpaceError = "UseSpaceError";
}
if($AvailFolderCount <= 10){
  $error[] = "利用可能フォルダ数が少ないです！";
  $AvailFolderCountError = "AvailFolderCountError";
}
?>
<table id="rakuten_now_data">
  <tr>
    <th>契約容量 (KB)</th>
    <td><?=$MaxSpace?></td>
    <th>フォルダ数上限</th>
    <td><?=$FolderMax?></td>
    <th colspan="2">フォルダ内画像数上限</th>
    <td colspan="2"><?=$FileMax?></td>
  </tr>
  <tr class="<?=$UseSpaceError?> <?=$AvailFolderCountError?>">
    <th>利用容量 (KB)</th>
    <td class="UseSpace"><?=$UseSpace?></td>
    <th>利用可能容量 (KB)</th>
    <td><?=$AvailSpace?></td>
    <th>利用フォルダ数</th>
    <td><?=$UseFolderCount?></td>
    <th>利用可能フォルダ数 </th>
    <td class="AvailFolderCount"><?=$AvailFolderCount?></td>
  </tr>
<?
if(isset($error)){
	foreach ($error as $key => $value) {
?>
	<tr class="rakuten_error_row">
		<td colspan="8"><?=$value?></td>
	</tr>
<?
	}
}
?>
</table>
<style type="text/css">
	.rakuten_error_row td {
		background-color: #c00;
		color: #fff;
	}
	.rakuten_error_row a {
		display: inline-block;
		background-color: #fff;
		border: 2px solid #111;
		border-radius: 10px;
		padding: 2px 5px;
		color: #111;
		width: 200px;
		text-decoration: none;
		text-align: center;
	}
	.UseSpaceError .UseSpace{
		background-color: #ff5;
	}
	.AvailFolderCountError .AvailFolderCount{
		background-color: #ff5;
	}
</style>



<?
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

if($_GET[box_id] != ""){
	$box_id = $_GET[box_id];
}
?>
<form action="./sansyou.php" method="get" accept-charset="utf-8">
	box_id <input type="text" name="box_id" >
	<input type="submit" name="submit" value="実行">
</form>

<h1>box_id = <?=$box_id?></h1>
<?
if($box_id == ""){
	exit();
}
?>
<form id="main_form" action="./makecsv_test.php" method="post">
<table cellpadding="0" cellspacing="0" id="main_table">
	<tr>
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

?>

<div id="rakuten_cabinet_name"><?=$rakuten_cabinet_name?></div>
<div class="auctions_link"><a href="/shop5/auctions_list.php?q=(bod_id~contains~<?=$box_id?>)" target="_blank" >出品情報</a></div>
<?

	$query = ' SELECT
	shouhin.product_id ,
	shouhin.status ,
	shouhin.yahoo_sinaban ,
	auctions.Title ,
	auctions.Starting_price ,
	shouhin.raku_title ,
	shouhin.yahoo_sozai ,
	shouhin.item_name ,
	shouhin.satei_by ,
	shouhin.category_id ,
	shouhin.price ,
	shouhin.yahoo_saisun_sha ,
	shouhin.line FROM shouhin INNER JOIN auctions ON shouhin.product_id = auctions.product_id WHERE box_id = '.$box_id.' ORDER BY box_sort
	';

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
			$disabled = "disabled";
		}else{
			$kaigaiflag = "yes";
			$disabled = "";
		}
?>
	<tr id="toprow_<?=$result['product_id']?>" class="kaigai_<?=$kaigaiflag?>">
		<td>
			<?=$result['product_id']?>
			<input <?=$disabled?> type="hidden" name="<?=$result['product_id']?>###product_id" value="<?=$result['product_id']?>">
			<input type="hidden" name="<?=$result['product_id']?>###category_id" value="<?=$result['category_id']?>">

		</td>
		<td>
			<?=$result['yahoo_sinaban']?>
			<input <?=$disabled?> type="hidden" name="<?=$result['yahoo_sinaban']?>###yahoo_sinaban" value="<?=$result['yahoo_sinaban']?>">
		</td>
		<td>
<?
	$satei_by_id = $result['satei_by'];
	$satei_by_query = " SELECT first_name FROM users WHERE user_id={$satei_by_id} ";

	$satei_by_sql = mysql_query('SET NAMES utf8');
	$satei_by_sql = mysql_query($satei_by_query);
	$satei_by_result = mysql_fetch_assoc($satei_by_sql);

?>
			査定人<br><?=$satei_by_result['first_name']?>
			<span class="first_name_id" data="<?=$satei_by_id?>"></span>
		</td>
		<td>Yタイトル</td>
		<td class="yahoo_title_td">
			<span class="edit">編集する</span>
			<div class="errorarea"></div>
			<textarea <?=$disabled?> class="edit_area" readonly name="<?=$result['product_id']?>###Title"><?=$result['Title']?></textarea>
		</td>
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
	<tr id="underrow_<?=$result['product_id']?>" class="kaigai_<?=$kaigaiflag?>">
		<td>
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

		<td>
			<div class="price_box"><?=number_format($result['price'])?></div>
			<span class="edit">編集する</span>
			<input <?=$disabled?> class="edit_area" readonly type="text" name="<?=$result['product_id']?>###Starting_price" value="<?=$result['Starting_price']?>">
		</td>
		<td>
<?
	$yahoo_saisun_sha_id = $result['yahoo_saisun_sha'];
	$yahoo_saisun_sha_query = " SELECT first_name FROM users WHERE user_id={$yahoo_saisun_sha_id} ";

	$yahoo_saisun_sha_sql = mysql_query('SET NAMES utf8');
	$yahoo_saisun_sha_sql = mysql_query($yahoo_saisun_sha_query);
	$yahoo_saisun_sha_result = mysql_fetch_assoc($yahoo_saisun_sha_sql);
?>
		採寸者<br><?=$yahoo_saisun_sha_result['first_name']?>
		<span class="first_name_id" data="<?=$yahoo_saisun_sha_id?>"></span>
	</td>
<?
//reset
$satei_by_id = "";
?>
		<td>楽タイトル</td>
		<td class="raku_title_td">
			<span class="edit">編集する</span>
			<div class="errorarea"></div>
			<textarea <?=$disabled?> class="edit_area" readonly name="<?=$result['product_id']?>###raku_title"><?=$result['raku_title']?></textarea>
		</td>

		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td>
			<input <?=$disabled?> type="hidden" name="<?=$result['product_id']?>###lastflag" value="">
		</td>
	</tr>
<?
	}


?>
</table>

<div id="all_input">
	<div>販売期間指定</div>
	<div class="datearea">
		販売開始
		<input type="datetime-local" name="saleStart" id="saleStart" value="<?=date("Y-m-d", strtotime("+1 day"))."T00:00"?>" >
		販売終了
		<input type="datetime-local" name="saleEnd" id="saleEnd" value="<?=date("Y-m-d",strtotime("+1 day +26 month"))."T18:00"?>" >
	</div>
</div>
<input id="submit" type="submit" name="" value="CSVダウンロードする！">
</form>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">

function getDate(startdate) {
	var date = new Date(startdate);
	date.setDate(date.getDate());
	var year  = date.getFullYear() + 2;
	var month = date.getMonth() + 3;
	var day   = date.getDate();
	if (month < 10) {
	  month = '0' + month;
	}else if(month >= 13){
		month = '0' + (month-12);
	}
	if (day < 10) {
	  day = '0' + day;
	}
	return String(year) + "-" + String(month) + "-" + String(day);
}


// monthの指定は0始まりなことに注意！
//2017年1月15日 22時30分
// new Date(2017,0,15,22,30)

var saleStartDate = "";
$("#saleStart").change(function(){
	saleStartDate = getDate($(this).val())+'T18:00';
	// console.log(saleStartDate);
	$("#saleEnd").val(saleStartDate);
})



var readonlyFlag = "";
$(".edit").click(function(){
	readonlyFlag = $(this).siblings(".edit_area").prop("readonly");
	if(readonlyFlag == true){
		$(this).html("閉じる").siblings(".edit_area").prop("readonly",false);
	}else{
		$(this).html("編集する").siblings(".edit_area").prop("readonly",true);
	}
})




//Yタイトル文字数エラー
function countLength(str) {
    var r = 0;
    for (var i = 0; i < str.length; i++) {
        var c = str.charCodeAt(i);
        // Shift_JIS: 0x0 ～ 0x80, 0xa0 , 0xa1 ～ 0xdf , 0xfd ～ 0xff
        // Unicode : 0x0 ～ 0x80, 0xf8f0, 0xff61 ～ 0xff9f, 0xf8f1 ～ 0xf8f3
        if ( (c >= 0x0 && c < 0x81) || (c == 0xf8f0) || (c >= 0xff61 && c < 0xffa0) || (c >= 0xf8f1 && c < 0xf8f4)) {
            r += 0.5;
        } else {
            r += 1;
        }
    }
    return r;
}

function strLength(strSrc){
    len = 0;
    strSrc = escape(strSrc);
//alert(strSrc);
    for(i = 0; i < strSrc.length; i++){
            if(strSrc.charAt(i) == "%"){
                    if(strSrc.charAt(++i) == "u"){
                            i += 3;
                            len += 1.0;
                    } else {
                        len += 0.5
                    }
                    i++;
            } else {
                len += 0.5
            }
    }
    return len;
}


jQuery(".yahoo_title_td textarea").keyup(function(){

     var str = $(this).val();

         var _str = strLength(str);
       // window.alert("バイト数：" + length);
       if(_str>64){
       			$(this).siblings(".errorarea").html("<font color=red size=5>文字数オーバー<br>Yタイトル"+_str + "/６４文字</font>");
       }else{
       			$(this).siblings(".errorarea").html("Yタイトル"+_str + "/６４文字");
       }
});

jQuery(".raku_title_td textarea").keyup(function(){

     var str = $(this).val();

         var _str = strLength(str);
       // window.alert("バイト数：" + length);
       if(_str>100){
       			$(this).siblings(".errorarea").html("<font color=red size=5>文字数オーバー<br>楽天タイトル"+_str + "/１００文字</font>");
       }else{
       			$(this).siblings(".errorarea").html("楽天タイトル"+_str + "/１００文字");
       }
});


</script>


</body>
</html>
