<?
session_start();

mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$user_id = $_SESSION["uid"];

$raku_dir_id = htmlspecialchars($_GET["raku_dir_id"]);
$yahoo_dir_id = htmlspecialchars($_GET["yahoo_dir_id"]);
$seq = htmlspecialchars($_GET["seq"]);

print "seq{$seq}<br>";
print "raku_dir_id{$raku_dir_id}<br>";
print "yahoo_dir_id{$yahoo_dir_id}<br>";

//store_productsの
//楽天ディレクトリID
//raku_dir_result


if(($seq != "") && ($raku_dir_id != "") && ($yahoo_dir_id != "")){

//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	//store_productsへ反映
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	$up_at = "'".date("Y-m-d H:i:s")."'";
	// $up_query = " UPDATE store_products_copy80_20170331 SET raku_dir_result={$raku_dir_id} , updated_by={$user_id} , updated_at = {$up_at}  WHERE product_id={$seq} ";
	$up_query = " UPDATE store_products SET raku_dir_result={$raku_dir_id} , updated_by={$user_id} , updated_at = {$up_at}  WHERE product_id={$seq} LIMIT 1 ";
	// print $up_query;
	$up_sql = mysql_query('SET NAMES utf8');
	$up_sql = mysql_query($up_query);


//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	//auctionsへ反映
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	// $auc_up_query = " UPDATE auctions_copy11_20170331 SET Categories={$yahoo_dir_id} WHERE product_id={$seq} ";
	$auc_up_query = " UPDATE auctions SET Categories={$yahoo_dir_id} WHERE product_id={$seq} LIMIT 1 ";
	print $auc_up_query;
	$auc_up_sql = mysql_query('SET NAMES utf8');
	$auc_up_sql = mysql_query($auc_up_query);




}else{
	print "更新失敗です。更新内容が不足しています。";
}




