<?
// phpinfo();
//データベース接続
mb_internal_encoding("utf8");
// echo mb_internal_encoding();
ini_set( 'display_errors', 1 );
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
$dir_1 = $_GET["r_dir_1"];
$dir_2 = $_GET["r_dir_2"];
$dir_3 = $_GET["r_dir_3"];
$dir_4 = $_GET["r_dir_4"];
$dir_5 = $_GET["r_dir_5"];




//固定値でtest
// $dir_1 = "バッグ・小物・ブランド雑貨";
// $dir_2 = "レディースバッグ";
// $dir_3 = "ハンドバッグ";
// $dir_4 = "ア行";
// $dir_5 = "アンテプリマ";

$where = ' WHERE dir_1="'.$dir_1.'" ';
// $where = ' WHERE dir_id=301981 ';

if($dir_2 != ""){
	$where .= ' AND dir_2 = "'.$dir_2.'" ';
}
if($dir_3 != ""){
	$where .= ' AND dir_3 = "'.$dir_3.'" ';
}
if($dir_4 != ""){
	$where .= ' AND dir_4 = "'.$dir_4.'" ';
}
if($dir_5 != ""){
	$where .= ' AND dir_5 = "'.$dir_5.'" ';
}
// echo $where;
// $where = "";


$dir_sql = mysql_query('SET NAMES utf8');
$dir_sql = mysql_query("SELECT * FROM raku_all_dir ".$where." LIMIT 5");

$result_total_count = mysql_query('SET NAMES utf8');
$result_total_count = mysql_query('SELECT COUNT(*) FROM mst_column_data'.$where);
$count_dir_sql = mysql_fetch_assoc($result_total_count);
$count = $count_dir_sql["COUNT(*)"];
echo "count".$count;



?>

<?
if($count == 1){
	while ($dir_res = mysql_fetch_assoc($dir_sql)) {
		$id_sql = mysql_query('SET NAMES utf8');
		$id_sql = mysql_query("SELECT * FROM raku_all_dir WHERE dir_id = ".$dir_res['dir_id']);
		$id_res = mysql_fetch_assoc($id_sql);
		if(preg_match('/商品登録不可/',$id_res['dir_1'])){
		  $result_id = "";
		}elseif(preg_match('/商品登録不可/',$id_res['dir_2'])){
		  $result_id = "";
		}elseif(preg_match('/商品登録不可/',$id_res['dir_3'])){
		  $result_id = "";
		}elseif(preg_match('/商品登録不可/',$id_res['dir_4'])){
		  $result_id = "";
		}elseif(preg_match('/商品登録不可/',$id_res['dir_5'])){
		  $result_id = "";
		}else{
			$result_id = $dir_res['dir_id'];
		}
	echo "<span id='result_id'>".$result_id."</span>";

	}//end while
}else{
	echo "<span id='result_id'></span>";
}
?>











