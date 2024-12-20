<script type="text/javascript">

<?
//エラー出力⇒これ出したらCSVぐちゃぐちゃになる
// ini_set( 'display_errors', 1 );
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";


$field_name = "ecc_id";
$from = "Eoc"; //対象テーブル
$query = " SELECT {$field_name} FROM {$from} WHERE sagawa_shuuka_flag = 1";
$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);

while($result = mysql_fetch_assoc($sql)){
	if($result["ecc_id"] != ""){
		$ecc_id = "ecc_id=".$result["ecc_id"];
	}
?>
window.open("/include/fax/sagawa_shuuka_irai/create_fax.php?<?=$ecc_id?>");
<?
}

//佐川集荷依頼フラグ外す
$up_query = " UPDATE {$from} SET sagawa_shuuka_flag=0 WHERE sagawa_shuuka_flag=1 ";
$up_sql = mysql_query('SET NAMES utf8');
$up_sql = mysql_query($up_query);

?>
</script>
