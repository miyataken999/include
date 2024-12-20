<?
//ブランドサジェストファイル
?>

<?
if($_GET["second"] != "on"){
?>
<script type="text/javascript">
var id_num = "<?=$_GET['id_num']?>";
$("#value_brand_junle_"+id_num).keyup(function(event){
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
		$("#value_value_"+id_num+"_list").load("/include/raku_dir/brand_auto.php?id_num="+id_num+"&sag_txt="+sag_txt+"&second=on");
	}
})
</script>
<?
}
?>

<?
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

if($_GET["sag_txt"] != ""){
	$sag_txt = " LIKE '%".$_GET["sag_txt"]."%' ";
}
$query = " SELECT id , name FROM mst_brand WHERE name ".$sag_txt." ORDER BY name LIMIT 20";

$sql = mysql_query('SET NAMES utf8');
$sql = mysql_query($query);


while ($result = mysql_fetch_assoc($sql)) {
?>
<option value="<?=$result["id"]?>"><?=$result["name"]?></option>
<?
}
?>
