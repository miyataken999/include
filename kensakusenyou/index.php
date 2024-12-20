<?//EVA内、キーワードからの画像検索専用用ページ?>




<?
if(isset($_GET["daikate"])){
	$daikate = htmlspecialchars($_GET["daikate"]);
}
if(isset($_GET["key"])){
	$key = htmlspecialchars($_GET["key"]);
}
if(isset($_GET["tyuukate"])){
	$tyuukate = htmlspecialchars($_GET["tyuukate"]);
}
if(isset($_GET["page"])){
  $page = htmlspecialchars($_GET["page"]);
}
if(isset($_GET["sort"])){
  $sort = htmlspecialchars($_GET["sort"]);
}
if(isset($_GET["sort_type"])){
  $sort_type = htmlspecialchars($_GET["sort_type"]);
}

if(isset($_GET["zaiko"])){
  $zaiko = htmlspecialchars($_GET["zaiko"]);
}


?>










<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>画像検索専用</title>
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header.php";
?>



<?
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
?>


<div id="sort_box">
	<?
	if($sort == "box_id"){
		$sort_name = "ボックス名";
	}elseif($sort == "sales_price"){
		$sort_name = "販売額";
	}else{
		$sort_name = "SEQ";
	}

	if($sort_type == "ASC"){
		$sort_type_name = "昇順";
	}else{
		$sort_type_name = "降順";
	}
	?>
	並び順 <?=$sort_name?> <?=$sort_type_name?>
</div>






<form action="./" method="get" accept-charset="utf-8">

	大カテ<select name="daikate" id="daikate">
		<option value="">選択してください</option>
<?
	$daikate_query = ' SELECT category_id , category_name FROM store_categories ORDER BY sort';

	$daikate_sql = mysql_query('SET NAMES utf8');
	$daikate_sql = mysql_query($daikate_query);
	while ($daikate_result = mysql_fetch_assoc($daikate_sql)) {
		$daikate_val = $daikate_result["category_id"];
		$daikate_name = $daikate_result["category_name"];
?>
		<option value="<?=$daikate_val?>" <?if($daikate == $daikate_val){?>selected<?}?> ><?=$daikate_name?></option>
<?
	}
?>
	</select>

	中カテ<select name="tyuukate" id="tyuukate">
		<option value="">選択してください</option>
<?
	$tyuukate_query = ' SELECT id , category_id , name FROM store_sub_categories ORDER BY sort';

	$tyuukate_sql = mysql_query('SET NAMES utf8');
	$tyuukate_sql = mysql_query($tyuukate_query);
	while ($tyuukate_result = mysql_fetch_assoc($tyuukate_sql)) {
		$tyuukate_val = $tyuukate_result["id"];
		$tyuukate_name = $tyuukate_result["name"];
		$tyuukate_parent = $tyuukate_result["category_id"];
?>
		<option value="<?=$tyuukate_val?>" data="<?=$tyuukate_parent?>" <?if($tyuukate == $tyuukate_val){?>selected<?}?> ><?=$tyuukate_name?></option>
<?
	}
?>
	</select>


	楽天タイトル<input type="search" name="key" value="<?=$key?>" >

	<select name="zaiko">
		<option value="" <?if($zaiko == ""){?>selected<?}?> >在庫あり・なし</option>
		<option value="1" <?if($zaiko == "1"){?>selected<?}?> >在庫ありのみ</option>
	</select>

	<input type="submit" name="" value="検索">

	<input type="hidden" name="sort" value="<?=$sort?>">


<div id="sortselect_box">
	<select name="sort_type">
		<option value="DESC" <?if($sort_type == "DESC"){?>selected<?}?> >降順</option>
		<option value="ASC" <?if($sort_type == "ASC"){?>selected<?}?> >昇順</option>
	</select>
</div>

</form>







<?
$where = "";
if($daikate != ""){
	$where .= "(category_id = {$daikate})";
}
if($tyuukate != ""){
	if($where == ""){
		$where .= " (sub_category_id1 = {$tyuukate})";
	}else{
		$where .= " AND (sub_category_id1 = {$tyuukate})";
	}
}
if($key != ""){
	if($where == ""){
		$where .= " (raku_title LIKE '%{$key}%')";
	}else{
		$where .= " AND (raku_title LIKE '%{$key}%')";
	}
}

if($zaiko != ""){
	if($where == ""){
		$where .= " ( _goods_status2.zaiko = 1)";
	}else{
		$where .= " AND ( _goods_status2.zaiko = 1)";
	}
}


if($where != ""){
	$where = "WHERE {$where} AND box_id IS NOT NULL";
}else{
	$where = "WHERE box_id IS NOT NULL";
}
// print $where;
if($zaiko != ""){
	$result_total_count = mysql_query("SELECT COUNT(shouhin.product_id) FROM shouhin LEFT JOIN _goods_status2 ON shouhin.`status`=_goods_status2.goods_id {$where} ");
}else{
	$result_total_count = mysql_query("SELECT COUNT(shouhin.product_id) FROM shouhin {$where} ");
}



  $count_row = mysql_fetch_assoc($result_total_count);
  $now_count = $count_row["COUNT(shouhin.product_id)"];



?>









<div id="page_box">

<?

/*--------------------------------
---------表示数
--------------------------------*/
$_hyouji_rec = 30;
$page_count = $now_count/$_hyouji_rec;
$page_count = ceil($page_count);


//今のページ
if($page){
	$now_page = $page;
	$limit = (($page-1)*$_hyouji_rec).",";
}else{
	$now_page = 1;
}
$limit = " LIMIT ".$limit.$_hyouji_rec;



// echo "テスト用に8ページ存在している仮定<br>";
// $page_count = 8;


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
if($daikate != ""){
	if($get_param != ""){
		$get_param .= "&";
	}
	$get_param .= "daikate=".$daikate;
}
if($key != ""){
	if($get_param != ""){
		$get_param .= "&";
	}
	$get_param .= "key=".$key;
}
if($tyuukate != ""){
	if($get_param != ""){
		$get_param .= "&";
	}
	$get_param .= "tyuukate=".$tyuukate;
}
if($sort_type != ""){
	if($get_param != ""){
		$get_param .= "&";
	}
	$get_param .= "sort_type=".$sort_type;
}
if($zaiko != ""){
	if($get_param != ""){
		$get_param .= "&";
	}
	$get_param .= "zaiko=".$zaiko;
}




$no_sort_param = $get_param;

if($sort != ""){
	if($get_param != ""){
		$get_param .= "&";
	}
	$get_param .= "sort=".$sort;
}

if($page != ""){
	$page_param = "&page=".$page;
}


$now_prev_page = ($now_page-1);
if($now_prev_page > 1){
	$now_prev_page = "page=".$now_prev_page;
	if($get_param != ""){
		$get_param_A = "&".$get_param;
	}else{
		$get_param_A = $get_param;
	}
}else{
	$now_prev_page = "";
	$get_param_A = $get_param;
}



//「戻る」値
if($now_page == 1){
	$return_page = '<a href="./" onclick="return false;" class="on_page" id="back_link_btn" >戻る</a>';
	$first_page_btn = '<a href="./" onclick="return false;" class="on_page" >最初</a>';
}else{
	$ret_p = "";
	$ret_p = $now_prev_page.$get_param_A;
	if($ret_p != ""){
		$ret_p = "?".$ret_p;
	}
	$return_page = '<a href="./'.$ret_p.'" class="off_page" id="back_link_btn" >戻る</a>';
	$fist_p = "";
	if($get_param != ""){
		$fist_p = "?".$get_param;
	}
	$first_page_btn = '<a href="./'.$fist_p.'" class="off_page" >最初</a>';
}
//「次へ」値
if($now_page == $page_count){
	$next_page = '<a href="./" onclick="return false;" class="on_page" id="next_link_btn" >次の20件へ</a>';
	$last_page_btn = '<a href="./" onclick="return false;" class="on_page" >最後</a>';
}else{
	if($get_param != ""){
		$get_param_A = "&".$get_param;
	}
	$next_page = '<a href="./?page='.($now_page+1).$get_param_A.'" class="off_page" id="next_link_btn" >次の20件へ</a>';
	$last_page_btn = '<a href="./?page='.$page_count.$get_param_A.'" class="off_page" >最後</a>';
}

if($page_count > 1){
	echo $first_page_btn.$return_page;
}


if($page_count > 1){
	for ($i=$start_page; $i <= $last_page; $i++) {
		$page_num = "";
		$get_param_B = "";
		if($i <= $page_count){
			if($now_page == $i){
				$page_class = "on_page";
				$void = "onclick='return false;'";
			}else{
				$page_class = "off_page";
				$void = "";
			}

			if($i > 1){
				$page_num = "page=".$i;
				$get_param_B = $get_param;
				if($get_param_B != "" ){
					$get_param_B = "&".$get_param_B;
				}
			}else{
				$page_num = "";
				$get_param_B = $get_param;
			}

			$btn_p = "";
			$btn_p = $page_num.$get_param_B;
			if($btn_p != ""){
				$btn_p = "?".$btn_p;
			}

?>
	<a href="./<?=$btn_p?>" class="<?=$page_class?>" <?=$void?> ><?=$i?></a>
<?
		}
	}
}


if($page_count > 1){
	echo $next_page.'...'.$last_page_btn;
}


?>

</div><!-- end page_box -->


<br clear="all">



<div id="res_ct">合計　<?=$now_count?>件</div>



<?
if($no_sort_param != ""){
	$no_sort_param = $no_sort_param."&";
}
?>
<table id="kekka">
	<tr>
		<th>SEQ</th>
		<th><a href="./?<?=$no_sort_param?>sort=box_id">ボックス名</a></th>
		<th><a href="./?<?=$no_sort_param?>sort=sales_price">販売額</a></th>
		<th>型番</th>
		<th>楽天タイトル</th>
		<th>画像1</th>
		<th>画像2</th>
		<th>画像3</th>
		<th>画像4</th>
		<th>画像5</th>
		<th>画像6</th>
		<th>画像7</th>
		<th>画像8</th>
		<th>画像9</th>
		<th>画像10</th>
	</tr>


<?

if($sort != ""){
	$order = $sort;
}else{
	$order = "product_id";
}
if($sort_type != ""){
	$order = $order." ".$sort_type;
}else{
	$order = $order." DESC";
}


	if($zaiko != ""){
		$query = "SELECT raku_title , product_id , box_id , sales_price , yahoo_kataban FROM shouhin LEFT JOIN _goods_status2 ON shouhin.`status`=_goods_status2.goods_id {$where} ORDER BY {$order} {$limit}";
	}else{
		$query = "SELECT raku_title , product_id , box_id , sales_price , yahoo_kataban FROM shouhin {$where} ORDER BY {$order} {$limit}";
	}

	// print $query."<br>";

	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	while ($result = mysql_fetch_assoc($sql)) {

		$box_id = $result["box_id"];
		$product_id = $result["product_id"];
		$raku_title = $result["raku_title"];
		$sales_price = $result["sales_price"];
		$yahoo_kataban = $result["yahoo_kataban"];

		$box_query = ' SELECT zip , box_name FROM box WHERE box_id = '.$box_id;

		$box_sql = mysql_query('SET NAMES utf8');
		$box_sql = mysql_query($box_query);
		$box_result = mysql_fetch_assoc($box_sql);
		$urlounge_img_pass = $box_result['zip'];
		$pieces = explode(".", $urlounge_img_pass);
		$urlounge_box_name = $box_result['box_name'];
?>
<tr class="res_row">
	<td class="td_product_id"><?=$product_id?></td>
	<td class="td_box_name"><?=$urlounge_box_name?></td>
	<td class="td_sales_price"><?=number_format($sales_price)?>円</td>
	<td class="td_yahoo_kataban"><?=$yahoo_kataban?></td>
	<td class="td_raku_title"><?=$raku_title?></td>
	<td class="td_img"><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_1.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_1.jpg" alt="" width="50px" height="50px" onerror="this.style.display='none';" ></a></td>
	<td class="td_img"><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_2.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_2.jpg" alt="" width="50px" height="50px" onerror="this.style.display='none';" ></a></td>
	<td class="td_img"><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_3.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_3.jpg" alt="" width="50px" height="50px" onerror="this.style.display='none';" ></a></td>
	<td class="td_img"><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_4.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_4.jpg" alt="" width="50px" height="50px" onerror="this.style.display='none';" ></a></td>
	<td class="td_img"><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_5.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_5.jpg" alt="" width="50px" height="50px" onerror="this.style.display='none';" ></a></td>
	<td class="td_img"><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_6.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_6.jpg" alt="" width="50px" height="50px" onerror="this.style.display='none';" ></a></td>
	<td class="td_img"><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_7.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_7.jpg" alt="" width="50px" height="50px" onerror="this.style.display='none';" ></a></td>
	<td class="td_img"><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_8.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_8.jpg" alt="" width="50px" height="50px" onerror="this.style.display='none';" ></a></td>
	<td class="td_img"><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_9.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_9.jpg" alt="" width="50px" height="50px" onerror="this.style.display='none';" ></a></td>
	<td class="td_img"><a href="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_10.jpg" target="_blank"><img src="/shop/services/image/<?=$urlounge_box_name?>/<?=$pieces[1]?>/<?=$product_id?>_10.jpg" alt="" width="50px" height="50px" onerror="this.style.display='none';" ></a></td>
</tr>

<?
	}
?>





















</table>
<div id="under_page_box">
<?


if($page_count > 1){
	echo $first_page_btn.$return_page;
}
if($page_count > 1){
	for ($i=$start_page; $i <= $last_page; $i++) {
		$page_num = "";
		$get_param_B = "";
		if($i <= $page_count){
			if($now_page == $i){
				$page_class = "on_page";
				$void = "onclick='return false;'";
			}else{
				$page_class = "off_page";
				$void = "";
			}

			if($i > 1){
				$page_num = "page=".$i;
				$get_param_B = $get_param;
				if($get_param_B != "" ){
					$get_param_B = "&".$get_param_B;
				}
			}else{
				$page_num = "";
				$get_param_B = $get_param;
			}

			$btn_p = "";
			$btn_p = $page_num.$get_param_B;
			if($btn_p != ""){
				$btn_p = "?".$btn_p;
			}

?>
	<a href="./<?=$btn_p?>" class="<?=$page_class?>" <?=$void?> ><?=$i?></a>
<?
		}
	}
}
if($page_count > 1){
	echo $next_page.'...'.$last_page_btn;
}
?>
</div><!-- end under_page_box -->



<style type="text/css" media="screen">
	.res_row .td_raku_title{
		width: 500px;
		font-size: 13px;
	}
	.res_row .td_yahoo_kataban {
	    width: 100px;
	    font-size: 13px;
	    overflow-wrap: break-word;
	    display: block;
	}
	#kekka{
		border-collapse: collapse;
	}
	#kekka th , #kekka td{
		border-top: 1px solid #ccc;
		border-left: 1px solid #ccc;
		border-right: 1px solid #ccc;
	}
	#sortselect_box select{
		padding: 5px 10px;
		font-size: 16px;
	}
/*============================================
ページャーボックス
============================================*/
	#page_box , #under_page_box{
	    margin: 15px 0 15px;
	}
	#page_box a, #under_page_box a {
        padding: 0 5px;
        min-width: 35px;
        height: 40px;
        line-height: 40px;
        display: inline-block;
        box-shadow: rgb(238, 238, 238) 0px 3px 0px;
        letter-spacing: normal;
        font-size: 13px;
        vertical-align: middle;
        color: #111;
        border-image-source: initial;
        border-image-slice: initial;
        border-image-width: initial;
        border-image-outset: initial;
        border-image-repeat: initial;
        text-align: center;
        font-family: Quicksand, æ¸¸ã‚´ã‚·ãƒƒã‚¯ä½“, "Yu Gothic", YuGothic, "ãƒ’ãƒ©ã‚®ãƒŽè§’ã‚´ã‚·ãƒƒã‚¯ Pro", "Hiragino Kaku Gothic Pro", ãƒ¡ã‚¤ãƒªã‚ª, Meiryo, Osaka, "ï¼­ï¼³ ï¼°ã‚´ã‚·ãƒƒã‚¯", "MS PGothic", sans-serif;
        border-radius: 3px;
        margin: 0px 3px;
        border-width: 1px;
        border-style: solid;
        border-color: rgb(136, 136, 136);
        transition: color 0.35s, background-color 0.35s;
        text-decoration: none;
	}
	#page_box .on_page, #under_page_box .on_page {
        background-color: #111;
        color: #fff;
        font-size: 13px;
	}
	#page_box a:hover , #under_page_box a:hover{
	    background-color: #888;
	    color: #fff;
	}
/*============================================
END ページャーボックス
============================================*/
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
	var daikate = "";
	$("#daikate").change(function(){
		daikate = $(this).val();
		$("#tyuukate option").prop("hidden",true);
		$("#tyuukate option[data='"+daikate+"']").prop("hidden",false);
		$("#tyuukate option[value='']").prop("hidden",false);
		$("#tyuukate").val("");
	})
</script>



</body>
</html>
