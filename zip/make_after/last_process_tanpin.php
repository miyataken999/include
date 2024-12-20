<?
// session_start();
// ini_set( 'display_errors', 1 );



// Array
// (
//     [0] =>
//     [1] => 185133
//     [2] => 185128
//     [3] => 185115
//     [4] => 185082
//     [5] => 184938
// )



mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//ZIP完了後の処理

//ステータスをUP済みにするSEQの値の抽出
// $st_up_result = htmlspecialchars($_GET["st_up_result"]);
// $st_up_result_array = explode("_",$st_up_result);
// print_r($st_up_result);

//ステータスUP済みにする
// for ($i=1; $i < count($st_up_result_array); $i++) {
// 	$st_up_seq = $st_up_result_array[$i];
// 	$update_query = " UPDATE store_products SET status=3 WHERE product_id={$st_up_seq} ";
// 	// print $update_query;
// 	$up_sql = mysql_query('SET NAMES utf8');
// 	$up_sql = mysql_query($update_query);
// }


//+++++++++++++++++++++++++++++++++++++++
//出品日、出品者、更新日、更新者
//+++++++++++++++++++++++++++++++++++++++
$now = date("Y-m-d H:i:s");
//関数box_zip_log()の中で古い値を取得してoldログを作るので、先に関数を実行してから、UPDATEクエリを走らせる

//更新カラムの設定
$up_col = array();
array_push($up_col,'Exhibition_Date');
array_push($up_col,'REG_EXHIBITOR');
array_push($up_col,'updated_at');
array_push($up_col,'updated_by');
//更新内容の配列渡し
$up_data = array();
array_push($up_data,$now);
array_push($up_data,$user_id);
array_push($up_data,$now);
array_push($up_data,$user_id);


include_once $_SERVER["DOCUMENT_ROOT"]."/include/zip/function/box_zip_log.php";
$page_name = "create_zip";//ページの名称
$where_key = "product_id";//ここでは固定
$log_action = "edit";//ここでは固定
//更新する対象テーブル
$up_table = "store_products";
box_zip_log($page_name,$seq,$up_col,$up_data,$user_id,$where_key,$log_action,$up_table);

$syuppin_query = " UPDATE store_products SET Exhibition_Date='{$now}' , REG_EXHIBITOR='{$user_id}' , updated_at='{$now}' , updated_by='{$user_id}'  WHERE product_id={$seq} ";
$syuppin_sql = mysql_query('SET NAMES utf8');
$syuppin_sql = mysql_query($syuppin_query);

$syuppin_query = " UPDATE shouhin SET Exhibition_Date='{$now}' , REG_EXHIBITOR='{$user_id}' , updated_at='{$now}' , updated_by='{$user_id}'  WHERE product_id={$seq} ";
$syuppin_sql = mysql_query('SET NAMES utf8');
$syuppin_sql = mysql_query($syuppin_query);


//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★


?>
