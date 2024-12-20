<?
//エラー出力⇒これ出したらCSVぐちゃぐちゃになる
// ini_set( 'display_errors', 1 );
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$sub_cate = $_POST["sub_cate"];

$query = " SELECT size6 FROM store_sub_categories WHERE id={$sub_cate} LIMIT 1";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);

$result = mysql_fetch_assoc($sql);
$res = $result["size6"];

$res_data[]=array(
'res_size'=>$res
);

//jsonとして出力
header('Content-type: application/json');
echo json_encode($res_data);
?>
