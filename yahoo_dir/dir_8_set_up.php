<?
//データベース接続
mb_internal_encoding("utf8");
// ini_set( 'display_errors', 1 );
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";


$dir_1 = $_GET["dir_1"];
$dir_2 = $_GET["dir_2"];
$dir_3 = $_GET["dir_3"];
$dir_4 = $_GET["dir_4"];
$dir_5 = $_GET["dir_5"];
$dir_6 = $_GET["dir_6"];
$dir_7 = $_GET["dir_7"];

$query = " SELECT distinct dir_8 FROM yahoo_all_dir WHERE dir_1 =  '".$dir_1."' AND dir_2 = '".$dir_2."' AND dir_3 = '".$dir_3."' AND dir_4 = '".$dir_4."' AND dir_5 = '".$dir_5."' AND dir_6 = '".$dir_6."' AND dir_7 = '".$dir_7."' ";

$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);

?>
<option value="">選択してください。</option>
<?
while ($result = mysql_fetch_assoc($sql)) {
?>
<option value="<?=$result['dir_8'];?>"><?=$result["dir_8"];?></option>
<?
}

?>

