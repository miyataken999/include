<?
// session_start();
ini_set( 'display_errors', 1 );



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

//boxからのshouhin反映の特殊ログファイル
include_once $_SERVER["DOCUMENT_ROOT"]."/include/zip_shop5/function/box_zip_log.php";

//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//ZIP完了後の処理

$user_id = $_GET["user_id"];


//ステータスをUP済みにするSEQの値の抽出
$st_up_result = htmlspecialchars($_GET["st_up_result"]);
$st_up_result_array = explode("_",$st_up_result);
// print_r($st_up_result);

//ステータスUP済みにする
for ($i=1; $i < count($st_up_result_array); $i++) {
	$st_up_seq = $st_up_result_array[$i];

	//log
	//更新カラムの設定
	$up_col_st_up = array();
	array_push($up_col_st_up,'status');
	//更新内容の配列渡し
	$up_data_st_up = array();
	array_push($up_data_st_up,'3');


	$page_name = "create_zip";//ページの名称
	$where_key = "product_id";//ここでは固定
	$log_action = "edit";//ここでは固定
	//更新する対象テーブル
	$up_table = "shouhin";
	box_zip_log($page_name,$st_up_seq,$up_col_st_up,$up_data_st_up,$user_id,$where_key,$log_action,$up_table);


	$update_query = " UPDATE shouhin SET status=3 WHERE product_id={$st_up_seq} ";
	// print $update_query;
	// exit();
	// print $update_query;
	$up_sql = mysql_query('SET NAMES utf8');
	$up_sql = mysql_query($update_query);

}


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

$box_id = $_GET["box_id"];
$page_name = "create_zip";//ページの名称
$where_key = "box_id";//ここでは固定
$log_action = "edit";//ここでは固定
//更新する対象テーブル
$up_table = "shouhin";
box_zip_log($page_name,$box_id,$up_col,$up_data,$user_id,$where_key,$log_action,$up_table);



if($box_id != ''){
	$syuppin_query = " UPDATE shouhin SET Exhibition_Date='{$now}' , REG_EXHIBITOR='{$user_id}' , updated_at='{$now}' , updated_by='{$user_id}'  WHERE box_id={$box_id} ";
	// print $syuppin_query;
	// exit();
	$syuppin_sql = mysql_query('SET NAMES utf8');
	$syuppin_sql = mysql_query($syuppin_query);


	$syuppin_query = " UPDATE box SET zip_create=1 WHERE box_id={$box_id} ";
	$syuppin_sql = mysql_query('SET NAMES utf8');
	$syuppin_sql = mysql_query($syuppin_query);


	header("location: https://rifa.life/shop5/shop5_box/box_list.php");
	exit();
}


//★★★★★★★★★★★★★★★★★★★★★★★★★★★可変部分★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★


?>
