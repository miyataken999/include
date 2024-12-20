<?
// ini_set( 'display_errors', 1 );

mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

if($_GET["product_id"] != ""){
	$product_id = htmlspecialchars($_GET["product_id"]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ECディレクトリ設定画面</title>
	<link rel="stylesheet" href="/include/ec_dir/dir.css">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header.php";
?>
<form action="./dir.php" method="get" accept-charset="utf-8" style="margin: 10px;">
	SEQ<input type="text" name="product_id" id="product_id" value="<?=$product_id?>" >
	<input type="submit" name="" value="変更する">
</form>


<?

if($product_id == ""){
	exit();
}
$refferer = $_SERVER["HTTP_REFERER"];
// if(stristr($refferer, "/shop5/")){
// 	$from_table = "shouhin";
// }else{
// 	$from_table = "store_products";
// }
$from_table = "shouhin";
print "対象テーブルは「{$from_table}」です。newshop2からshop5へ移行後は、「shouhin」が正解です。";

//該当SEQデータの抽出
		// $seq_query = " SELECT category_id , sub_category_id1 , yahoo_sex , product_num , raku_title , yahoo_sinaban , status FROM {$from_table} WHERE product_id={$product_id}";
		$seq_query = " SELECT category_id , sub_category_id1 , yahoo_sex , product_num , raku_title , yahoo_sinaban , status FROM {$from_table} WHERE product_id={$product_id}";

		$seq_sql = mysql_query('SET NAMES utf8');
		$seq_sql = mysql_query($seq_query);
		$seq_result = mysql_fetch_assoc($seq_sql);

		$category_id = $seq_result["category_id"];
		$sub_category_id1 = $seq_result["sub_category_id1"];
		$st_yahoo_sex = $seq_result["yahoo_sex"];
		$product_num = $seq_result["product_num"];
		$raku_title = $seq_result["raku_title"];
		$yahoo_sinaban = $seq_result["yahoo_sinaban"];
		$status = $seq_result["status"];


//ブランド名、頭文字 取得
		$kashira_query = " SELECT name , seach_j FROM mst_brand WHERE id={$product_num}";

		$kashira_sql = mysql_query('SET NAMES utf8');
		$kashira_sql = mysql_query($kashira_query);
		$kashira_result = mysql_fetch_assoc($kashira_sql);

		$seach_j = $kashira_result["seach_j"];
		$brand_name = $kashira_result["name"];

//大カテゴリ 取得
		$category_query = " SELECT category_name FROM store_categories WHERE category_id={$category_id}";

		$category_sql = mysql_query('SET NAMES utf8');
		$category_sql = mysql_query($category_query);
		$category_result = mysql_fetch_assoc($category_sql);

		$category_name = $category_result["category_name"];

//中カテゴリ 取得
		$sub_cate_query = " SELECT name FROM store_sub_categories WHERE id={$sub_category_id1}";

		$sub_cate_sql = mysql_query('SET NAMES utf8');
		$sub_cate_sql = mysql_query($sub_cate_query);
		$sub_cate_result = mysql_fetch_assoc($sub_cate_sql);

		$sub_cate_name = $sub_cate_result["name"];

//性別 取得
		$sex_query = " SELECT sex_name FROM _sex WHERE sex_id={$st_yahoo_sex}";

		$sex_sql = mysql_query('SET NAMES utf8');
		$sex_sql = mysql_query($sex_query);
		$sex_result = mysql_fetch_assoc($sex_sql);

		$sex_name = $sex_result["sex_name"];

//ST 取得
		$status_query = " SELECT goods_status FROM _goods_status2 WHERE goods_id={$status}";

		$status_sql = mysql_query('SET NAMES utf8');
		$status_sql = mysql_query($status_query);
		$status_result = mysql_fetch_assoc($status_sql);

		$goods_status = $status_result["goods_status"];



?>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<h1>ECディレクトリ設定画面</h1>

<input type="hidden" id="value_category_id_1" value="<?=$category_id?>">
<input type="hidden" id="value_sub_category_id1_1" value="<?=$sub_category_id1?>">
<input type="hidden" id="value_st_yahoo_sex_1" value="<?=$st_yahoo_sex?>">
<input type="hidden" id="value_product_num_1" value="<?=$product_num?>">
<input type="hidden" id="seach_j" value="<?=$seach_j?>">


<table id="brand_name_area">
	<tr>
		<th colspan="4">商品詳細</th>
	</tr>
	<tr>
		<th colspan="1">楽天タイトル</th>
		<td colspan="3"><?=$raku_title?></td>
	</tr>
	<tr>
		<th>SEQ</th>
		<td id="seq_td"><?=$product_id?></td>
		<th>品番</th>
		<td><?=$yahoo_sinaban?></td>
	</tr>
	<tr>
		<th>大カテ</th>
		<td><?=$category_name?></td>
		<th>中カテ</th>
		<td><?=$sub_cate_name?></td>
	</tr>
	<tr>
		<th>ST</th>
		<td><?=$goods_status?></td>
		<th>性別</th>
		<td><?=$sex_name?></td>
	</tr>
	<tr>
		<th>ブランド名</th>
		<td><?=$brand_name?></td>
		<th>ブランド頭文字</th>
		<td><span id="brand_kashira"><?=$seach_j?>行</span> の <span id="brand_kashira_for_yahoo"><?=$seach_j?></span></td>
	</tr>
</table>



<div id="raku_dir_ara" class="ec_area">
<?include $_SERVER["DOCUMENT_ROOT"]."/include/ec_dir/raku_test.php";?>
</div><!-- end raku_dir_ara -->





<div id="yahoo_dir_ara" class="ec_area">
<?include $_SERVER["DOCUMENT_ROOT"]."/include/ec_dir/yahoo.php";?>
</div><!-- end yahoo_dir_ara -->


<div id="tag_check_area"></div>


<input id="judgment_btn" type="button" name="a" value="ディレクトリ決定！">


<div id="last_check_area"></div>
<div id="last_process_area"></div>


<script type="text/javascript">
var user_id = "<?=$user_id?>";
	$("#judgment_btn").click(function(event) {
		$("#last_check_area").load("/include/ec_dir/last_check_shop5.php");
	});

	$("#value_raku_dir_1_1").focus();

</script>


</body>
</html>
