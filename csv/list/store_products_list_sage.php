<?
if($_GET["second"] != "on"){
?>
<script type="text/javascript">
// var id_num = "<?=$_GET['id_num']?>";
$("input[id*='value_field_name_']").keyup(function(event){
	var this_id = $(this).attr("id");
	this_id = this_id.split("_");
	var id_num = this_id[3];
	var keyCode = event.keyCode;
	// alert(keyCode);
	var sag_txt = $(this).val();
	// console.log("sag_txt"+sag_txt);
	// console.log("id_num"+id_num);
	console.log(sag_txt.length);
	console.log(keyCode);
	if((keyCode == 8) && (sag_txt.length > 1)){
		console.log("start");
		$("#value_field_name_value_"+id_num+"_list").load("/include/csv/list/store_products_list.php?id_num="+id_num+"&sag_txt="+sag_txt+"&second=on");
	}
})
</script>
<?
}
?>

<?
// ini_set( 'display_errors', 1 );

mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

if($_GET["sag_txt"] != ""){
	$sag_txt = "'%".$_GET["sag_txt"]."%'";
}

	$query = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA= 'internet' AND TABLE_NAME= 'store_products' AND COLUMN_NAME LIKE $sag_txt ORDER BY COLUMN_NAME LIMIT 10 ";
echo $query;

	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	// $result = mysql_fetch_assoc($sql);

	while ($result = mysql_fetch_assoc($sql)) {
	?>
	<option value="<?=$result["COLUMN_NAME"]?>"><?=$result["COLUMN_NAME"]?></option>
	<?
	usleep(1000);
var_dump($result);
	}
?>
