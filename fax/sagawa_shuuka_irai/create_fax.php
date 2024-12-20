<?
//エラー出力⇒これ出したらCSVぐちゃぐちゃになる
// ini_set( 'display_errors', 1 );
mb_internal_encoding("utf8");
// header('Content-Type: text/html; charset=UTF-8');
// ini_set('mbstring.internal_encoding' , 'UTF-8');

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";




// $koumoku_query = " SELECT {$koumoku_from}.field_name , {$koumoku_from}.csv_name FROM {$koumoku_from} ORDER BY sort ";
$field_name = "registerd_id , EOC__DATE_AND_TIME_2 , EOC__DELIVERY_DATES , EOC__BOX_NUMBER , name1 , name2 , zip1 , zip2 , address1 , address2 , address3 , tel , tel2 , purchase_type ";
$from = "Eoc"; //対象テーブル

if($_GET["ecc_id"] != ""){
	$start_id = $_GET["ecc_id"];
}else{
	exit();
}

$query = " SELECT {$field_name} FROM {$from} WHERE ecc_id={$start_id}";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);

$result = mysql_fetch_assoc($sql);
// var_dump($result);
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//値作成
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
$registerd_id = $result["registerd_id"];
$registerd_query = " SELECT first_name FROM users WHERE user_id=$registerd_id LIMIT 1";
$registerd_sql = mysql_query('SET NAMES utf8');
$registerd_sql = mysql_query($registerd_query);
$registerd_result = mysql_fetch_assoc($registerd_sql);
$registerd_id = explode("　",$registerd_result['first_name']);
$registerd_name = $registerd_id[0];


$EOC__DATE_AND_TIME_2_before = explode(" ",$result["EOC__DATE_AND_TIME_2"]);
$EOC__DATE_AND_TIME_2 = $EOC__DATE_AND_TIME_2_before[0];

$EOC__DELIVERY_DATES = $result["EOC__DELIVERY_DATES"];
$EOC__DELIVERY_DATES_array = array("01" => "午前中" , "11" => "11時～13時" , "13" => "13時～15時" , "15" => "15時～17時" , "17" => "17時～19時" , "19" => "19時～21時");
if($EOC__DELIVERY_DATES != ""){
	$EOC__DELIVERY_DATES = $EOC__DELIVERY_DATES_array[$EOC__DELIVERY_DATES];
}

$EOC__BOX_NUMBER = $result["EOC__BOX_NUMBER"];
$EOC__BOX_NUMBER = $EOC__BOX_NUMBER."箱";

$name1 = $result["name1"]."　様";
$name2 = $result["name2"]."　様";

$zip1 = $result["zip1"];
$zip2 = $result["zip2"];
$zip = "〒".$zip1."-".$zip2;

$address1 = $result["address1"];
$address2 = $result["address2"];
$address3 = $result["address3"];
$address2 = $address2.$address3;

$tel = $result["tel"];
$tel2 = $result["tel2"];
if($tel2 != ""){
	$tel = $tel2;
}

$purchase_type = $result["purchase_type"];
$purchase_type_array = array(
	"1" => "貴重品" ,
	"43" => "服飾雑貨" ,
	"44" => "貴重品" ,
	"3" => "貴重品" ,
	"5" => "服飾雑貨" ,
	"25" => "貴重品" ,
	"48" => "貴重品" ,
	"46" => "貴重品" ,
	"47" => "貴重品" ,
	"4" => "貴重品" ,
	"6" => "服飾雑貨" ,
	"26" => "貴重品" ,
	"38" => "貴重品" ,
	"37" => "服飾雑貨" ,
	"39" => "貴重品" ,
	"9" => "貴重品" ,
	"10" => "服飾雑貨" ,
	"36" => "貴重品" ,
	"20" => "貴重品" ,
	"22" => "貴重品" ,
	"8" => "貴重品" ,
	"7" => "貴重品" ,
	"42" => "貴重品" ,
	"45" => "貴重品"
	);
if($purchase_type != ""){
	$purchase_type = $purchase_type_array[$purchase_type];
}

//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
//値作成
//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★




//ライブラリ読み込み
include $_SERVER["DOCUMENT_ROOT"].'/newshop2/plugins/PHPExcel.php';
include $_SERVER["DOCUMENT_ROOT"].'/newshop2/plugins/PHPExcel/IOFactory.php';


//テンプレート読み込み
$filepath = "./template/sagawa_shuuka_irai.xlsx";
$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$book = $objReader->load($filepath);



// シート設定
$book->setActiveSheetIndex(0);
$sheet = $book->getActiveSheet();
$sheet->setTitle('sheet name');    //シート名指定

session_start();
if(isset($_SESSION["uid"])){
	$user_id = $_SESSION["uid"];
}elseif(isset($_SERVER["uid"])){
	$user_id = $_SERVER["uid"];
}elseif(isset($_COOKIE["uid"])){
	$user_id = $_COOKIE["uid"];
}else{
	$user_id = "";
}
// echo 11111;

// phpinfo();
// var_dump($user_id);

if($user_id!=""){
	$user_query = " SELECT first_name FROM users WHERE user_id={$user_id} LIMIT 1";
	$user_sql = mysql_query('SET NAMES utf8');
	$user_sql = mysql_query($user_query);
	$user_result = mysql_fetch_assoc($user_sql);
	$user_name_array = explode("　",$user_result['first_name']);
	$user_name = $user_name_array[0];
}else{
	$user_name = "";
}
// var_dump($user_name);
// echo $user_name."<br>";
// echo $user_name."<br>";
// echo $EOC__DATE_AND_TIME_2."<br>";
// echo $EOC__DELIVERY_DATES."<br>";
// echo $EOC__BOX_NUMBER."<br>";
// echo $name1."<br>";
// echo $name2."<br>";
// echo $zip."<br>";
// echo $address1."<br>";
// echo $address2."<br>";
// echo $tel."<br>";
// echo $purchase_type."<br>";
// exit;

// セルに値を入れる
$sheet->setCellValue('A7', $user_name);
$sheet->setCellValue('B47', $user_name);
$sheet->setCellValue('B15', $EOC__DATE_AND_TIME_2);
$sheet->setCellValue('C15', $EOC__DELIVERY_DATES);
$sheet->setCellValue('B17', $EOC__BOX_NUMBER);
$sheet->setCellValue('B20', $name1);
$sheet->setCellValue('B21', $name2);
$sheet->setCellValue('B22', $zip);
$sheet->setCellValue('B23', $address1);
$sheet->setCellValue('B24', $address2);
$sheet->setCellValue('B26', $tel);
$sheet->setCellValue('B27', $purchase_type);

// Excel2007形式で出力する
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="sagawa_shuuka_irai.xlsx"');
header('Cache-Control: max-age=0');

$writer = PHPExcel_IOFactory::createWriter($book, "Excel2007");
$writer->save('php://output');




?>
