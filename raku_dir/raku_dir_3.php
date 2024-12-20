<?
// phpinfo();
//データベース接続
mb_internal_encoding("utf8");
// echo mb_internal_encoding();
ini_set( 'display_errors', 1 );
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
$dir_1 = $_GET["r_dir_1"];
$dir_2 = $_GET["r_dir_2"];


//固定値でtest
// $dir_1 = "バッグ・小物・ブランド雑貨";

$where = ' WHERE dir_1="'.$dir_1.'" ';
$where .= ' AND dir_2="'.$dir_2.'" ';

$where .= ' AND dir_2 NOT LIKE "%商品登録不可%" ';
$where .= ' AND dir_3 NOT LIKE "%商品登録不可%" ';

$dir_sql = mysql_query('SET NAMES utf8');
$dir_sql = mysql_query("SELECT distinct dir_3 FROM raku_all_dir ".$where);
?>

<option value="">選択して下さい。</option>
<?
while ($dir_res = mysql_fetch_assoc($dir_sql)) {
// $res_dir_2 = mb_convert_encoding($dir_res['dir_2'],"SJIS","auto");


?>
<!-- <option value="<?=$res_dir_2?>"><?=$res_dir_2?></option> -->
<option value="<?=$dir_res['dir_3']?>"><?=$dir_res['dir_3']?></option>
<?
}//end while
?>











