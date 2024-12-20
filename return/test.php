<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ZIPファイル作成画面</title>
</head>
<body>

<?

mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$where = "WHERE yahoo_sinaban='X' ";

$count_koumoku_query = " SELECT COUNT(*) FROM store_products {$where} ";
$count_koumoku_sql = mysql_query('SET NAMES utf8');
$count_koumoku_sql = mysql_query($count_koumoku_query);
$count_koumoku_res = mysql_fetch_assoc($count_koumoku_sql);
// print "該当件数".$count_koumoku_res;
print "該当件数".$count_koumoku_res["COUNT(*)"];

$koumoku_query = " SELECT product_id , box_id , status , REG_PHOTOGRAPHER , REG_PHOTOGRAPHER_DATE FROM store_products {$where} ";
$koumoku_sql = mysql_query('SET NAMES utf8');
$koumoku_sql = mysql_query($koumoku_query);

?>
<pre>
<?
$i = 0;
while ($koumoku_result = mysql_fetch_assoc($koumoku_sql)) {

$product_id = $koumoku_result["product_id"];
$box_id = $koumoku_result["box_id"];
$status = $koumoku_result["status"];
$REG_PHOTOGRAPHER = $koumoku_result["REG_PHOTOGRAPHER"];
$REG_PHOTOGRAPHER_DATE = $koumoku_result["REG_PHOTOGRAPHER_DATE"];
// print "SEQ ".$product_id."<br>";
// print "status ".$status."<br>";
// print "撮影者 ".$REG_PHOTOGRAPHER."<br>";
// print "撮影日 ".$REG_PHOTOGRAPHER_DATE."<br><br>";

	$query = " SELECT product_id , box_id , status , REG_PHOTOGRAPHER , REG_PHOTOGRAPHER_DATE FROM store_products_copy74 WHERE product_id={$product_id} ";
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	while ($result = mysql_fetch_assoc($sql)) {

		print "SEQ ".$product_id."\n\n";

		print "変更前"."\n";
		print "status ".$status."\n";
		print "box_id ".$box_id."\n";
		print "撮影者 ".$REG_PHOTOGRAPHER."\n";
		print "撮影日 ".$REG_PHOTOGRAPHER_DATE."\n\n";
		$product_id_before = $product_id;
		$box_id_before = $box_id;
		$status_before = $status;
		$REG_PHOTOGRAPHER_before = $REG_PHOTOGRAPHER;
		$REG_PHOTOGRAPHER_DATE_before = $REG_PHOTOGRAPHER_DATE;


		print "変更後"."\n";
		// $product_id_after = $result["product_id"];
		$status_after = $result["status"];
		$box_id_after = $result["box_id"];
		$REG_PHOTOGRAPHER_after = $result["REG_PHOTOGRAPHER"];
		$REG_PHOTOGRAPHER_DATE_after = $result["REG_PHOTOGRAPHER_DATE"];
		// print "SEQ ".$product_id_after."\n";
		print "status ".$status_after."\n";
		print "box_id ".$box_id_after."\n";
		print "撮影者 ".$REG_PHOTOGRAPHER_after."\n";
		print "撮影日 ".$REG_PHOTOGRAPHER_DATE_after."\n\n";

if($box_id_after != ""){
	$new_box_id = ", box_id={$box_id_after}";
}else{
	$new_box_id = ", box_id=''";
}
if($REG_PHOTOGRAPHER_after != ""){
	$satuei_sha = ", REG_PHOTOGRAPHER={$REG_PHOTOGRAPHER_after}";
}else{
	$satuei_sha = ", REG_PHOTOGRAPHER=''";
}
if($REG_PHOTOGRAPHER_after != ""){
	$satuei_bi = ", REG_PHOTOGRAPHER_DATE='{$REG_PHOTOGRAPHER_DATE_after}'";
}else{
	$satuei_bi = ", REG_PHOTOGRAPHER_DATE=NULL";
}

		$up_query = "UPDATE store_products SET status={$status_after} {$new_box_id} {$satuei_sha} {$satuei_bi} WHERE product_id={$product_id}";
		// $up_sql = mysql_query('SET NAMES utf8');
		// $up_sql = mysql_query($up_query);
		print $up_query."\n\n\n\n";

		//リセット
		$new_box_id = "";
		$satuei_sha = "";
		$satuei_bi = "";
		$i++;
	}


}
print "完全一致　".$i;
?>
</pre>
