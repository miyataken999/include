<select id="all_st">
	<option value="">選択してください。</option>
<?
$sql = "SELECT goods_id , goods_status FROM _goods_status2 ";
$rs = CustomQuery($sql);
while ($data = db_fetch_array($rs)){
	$goods_id = $data["goods_id"];
	$goods_status = $data["goods_status"];
?>
	<option value="<?=$goods_id?>"><?=$goods_status?></option>
<?
}
?>
</select>
<style type="text/css">
	#all_st{
		width: 130px!important;
	}
</style>
