<?
//データベース接続
mb_internal_encoding("utf8");
// ini_set( 'display_errors', 1 );
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";


$dir_1 = $_GET["dir_1"];
$dir_2 = $_GET["dir_2"];

$query = " SELECT distinct dir_3 FROM raku_all_dir WHERE dir_1 =  '".$dir_1."' AND dir_2 = '".$dir_2."' AND dir_3 NOT LIKE '%商品登録不可%' ";

$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);
?>
<option value="">選択してください。</option>
<?
while ($result = mysql_fetch_assoc($sql)) {
?>
<option value="<?=$result['dir_3'];?>"><?=$result["dir_3"];?></option>
<?
}

?>

