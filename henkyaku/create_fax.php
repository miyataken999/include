<?
//エラー出力⇒これ出したらCSVぐちゃぐちゃになる
// ini_set( 'display_errors', 1 );
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";




//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//顧客データ取得
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
$field_name = "name1 , name2 ";
$from = "Eoc"; //対象テーブル

// if($_GET["ecc_id"] != ""){
// 	$start_id = $_GET["ecc_id"];
// }else{
// 	exit();
// }

if($start_id == ""){
	if($_GET["result"] != ""){
		if(strstr(",",$_GET["result"])){
			$res_ecc_id_array = explode(",",$_GET["result"]);
		}else{
			$res_ecc_id_array[0] = $_GET["result"];
		}
	}else{
		$start_id = 4460;
	}
}

$nowtime = date("Y/m/d");

//PHPExcel関連設定
//ライブラリ読み込み
include $_SERVER["DOCUMENT_ROOT"].'/newshop2/plugins/PHPExcel.php';
include $_SERVER["DOCUMENT_ROOT"].'/newshop2/plugins/PHPExcel/IOFactory.php';


//テンプレート読み込み
$filepath = "./newtemp.xlsx";
$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$book = $objReader->load($filepath);

for ($ecc_i=0; $ecc_i < count($res_ecc_id_array); $ecc_i++) {
	$start_id = $res_ecc_id_array[$ecc_i];


	$query = " SELECT {$field_name} FROM {$from} WHERE ecc_id={$start_id} LIMIT 1";
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);

	$result = mysql_fetch_assoc($sql);
	$name1 = $result["name1"]."様";
	$name2 = $result["name2"];

	//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	//この顧客の返却明細フラグの商品取得
	//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	$field_name = " yahoo_junle , title , satei_by , satei_hi , price , product_num , product_id";
	$from = "shouhin"; //対象テーブル

	$query = " SELECT COUNT('product_id') FROM {$from} WHERE ecc_id={$start_id} AND return_output_flag=1 ";
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);
	$res_count = $result["COUNT('product_id')"];


	$query = " SELECT {$field_name} FROM {$from} WHERE ecc_id={$start_id} AND return_output_flag=1 ORDER BY satei_hi";
	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);

	$record_array = array();
	$satei_by_array = array();
	$satei_hi_max = "";
	$price_sum = 0;
	while ($result = mysql_fetch_assoc($sql)) {
		if($result["product_num"] == 631){
			$yahoo_junle = "";
		}else{
			$yahoo_junle = $result["yahoo_junle"];
		}
		$title = $result["title"];
		$price = $result["price"];
		$price_sum = $price_sum+$price;

		$price = number_format($price)."円";
		// $record_array[] = "{$yahoo_junle} {$title}\n";
		$record_array[] = "{$yahoo_junle} {$title} {$price}";
		if(!in_array($result["satei_by"],$satei_by_array)){
			$satei_by_array[] = $result["satei_by"];
		}
		if($result["satei_hi"] > $satei_hi_max){
			$satei_hi_max = $result["satei_hi"];
		}
		$reset_query = " UPDATE {$from} SET return_output_flag=0 WHERE product_id={$result['product_id']} ";
		$reset_sql = mysql_query('SET NAMES utf8');
		$reset_sql = mysql_query($reset_query);
	}
	$price_sum = number_format($price_sum);
	$price_sum = "{$price_sum}円";

	$satei_by = implode(",",$satei_by_array);
	$satei_hi_ar = explode(" ",$satei_hi_max);
	$satei_hi = $satei_hi_ar[0];
	$satei_hi = str_replace("-","/",$satei_hi);

	$satei_user_query = " SELECT first_name FROM users WHERE user_id={$satei_by} LIMIT 1";
	$satei_user_sql = mysql_query('SET NAMES utf8');
	$satei_user_sql = mysql_query($satei_user_query);
	$satei_user_result = mysql_fetch_assoc($satei_user_sql);
	$satei_user_name_array = explode("　",$satei_user_result['first_name']);
	$satei_user_name = $satei_user_name_array[0];


	session_start();
	$user_id = $_SESSION["uid"];
	if(($user_id == "") AND ($_COOKIE["uid"] != "")){
		$user_id = $_COOKIE["uid"];
	}
	$user_query = " SELECT first_name FROM users WHERE user_id={$user_id} LIMIT 1";
	$user_sql = mysql_query('SET NAMES utf8');
	$user_sql = mysql_query($user_query);
	$user_result = mysql_fetch_assoc($user_sql);
	$user_name_array = explode("　",$user_result['first_name']);
	$user_name = $user_name_array[0];








	// シート設定
	$book->setActiveSheetIndex($ecc_i);
	$sheet = $book->getActiveSheet();
	$sheet->setTitle('Sheet'.$ecc_i);    //シート名指定


	// セルに値を入れる
	$sheet->setCellValue('B5', $name1);
	$sheet->setCellValue('M5', $nowtime);
	$sheet->setCellValue('M6', $satei_hi);
	$sheet->setCellValue('M7', $satei_user_name);
	$sheet->setCellValue('M8', $user_name);
	$sheet->setCellValue('H14', $res_count);
	$sheet->setCellValue('H43', $price_sum);

	$record = "";
	for ($i=0; $i < count($record_array); $i++) {
		$record .= $record_array[$i]."\n";
	}
	$sheet->setCellValue('C44', $record);

}//end for_ecc_id




// print($sheet);

// Excel2007形式で出力する
header('Content-Type: application/vnd.ms-excel');
ob_end_clean();//バッファのゴミ捨て
header('Content-Disposition: attachment;filename="'.$name2.'.xlsx"');
header('Cache-Control: max-age=0');

$writer = PHPExcel_IOFactory::createWriter($book, "Excel2007");
$writer->save('php://output');




?>
