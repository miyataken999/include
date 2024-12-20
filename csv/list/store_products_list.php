<?
//ページ側で設定
$this_mst = $_GET["this_mst"];			//マスタのテーブル名
$this_rec_id = $_GET["this_rec_id"];	//そのレコードのid
// echo $this_mst;
// echo $this_rec_id;
// ini_set( 'display_errors', 1 );

mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

//編集で開いたとき、その値を検索
if($this_rec_id != ""){
	$this_query = "SELECT field_name FROM $this_mst WHERE id=$this_rec_id LIMIT 1 ";

	$this_sql = mysql_query('SET NAMES utf8');
	$this_sql = mysql_query($this_query);
	$this_result = mysql_fetch_assoc($this_sql);

	$this_val = $this_result["field_name"];
}


	$query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA= 'internet' AND TABLE_NAME= 'store_products' ORDER BY COLUMN_NAME ";

	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	while ($result = mysql_fetch_assoc($sql)) {
		$clm_name = $result["COLUMN_NAME"];
		if($this_val == $clm_name){
			?>
			<option value="<?=$clm_name?>" selected><?=$clm_name?></option>
			<?
		}else{
	?>
			<option value="<?=$clm_name?>"><?=$clm_name?></option>
	<?
		}
	}
?>
