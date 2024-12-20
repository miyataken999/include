
<?
// ini_set("display_errors",1);
$table_name = "Eoc_takuhai";
if($_GET["table_name"] != ""){
	$table_name = htmlspecialchars($_GET["table_name"]);
}
?>
<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>宅配EVA反映待機画面</title>
	<link rel="stylesheet" href="/include/kagoya_check/style.css">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/function.php";

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

		$query = "SELECT user_login FROM users WHERE user_id={$uid}";
		$sql = mysql_query('SET NAMES utf8');
		$sql = mysql_query($query);
		$result = mysql_fetch_assoc($sql);

		$kengen_user_name = $result["user_login"];
		// print "kengen_user_name   ".$kengen_user_name;

		$query = "SELECT GroupID FROM evashop5ugmembers WHERE UserName='{$kengen_user_name}'";
		$sql = mysql_query('SET NAMES utf8');
		$sql = mysql_query($query);

		$ok_user = "no";
		while ($result = mysql_fetch_assoc($sql)) {
			if(($result["GroupID"] == '3') OR ($result["GroupID"] == '-1') OR ($result["GroupID"] == '12') OR ($result["GroupID"] == '19')){
				$ok_user = "ok";
			}
		}
		if($ok_user == "no"){
			exit();
		}
// $group_sql = "SELECT ";
include $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";

?>


<?
mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";
?>


<?
	$query = 'SELECT COLUMN_NAME , COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_NAME=\''.$table_name.'\' ORDER BY ORDINAL_POSITION';

	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	mysql_error();
	$column_name = array();
	$column_comment = array();
	while ($schema_result = mysql_fetch_assoc($sql)) {
		array_push($column_name,$schema_result['COLUMN_NAME']);
		array_push($column_comment,$schema_result['COLUMN_COMMENT']);
	}

// var_dump($column_name);

	$query = 'SELECT COUNT(id) FROM internet.'.$table_name;

	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	$count_res = mysql_fetch_assoc($sql);
	$count = $count_res["COUNT(id)"];

?>


<div id="total_count">合計：<?=$count?>件</div>

<table cellpadding="0" cellspacing="0" id="main_table">
	<tr>
<?
for ($column_i=0; $column_i < count($column_name); $column_i++) {
	if($column_name[$column_i] == "date_and_time"){continue;}
	if($column_name[$column_i] == "date_select"){continue;}
	if($column_name[$column_i] == "time_select"){continue;}
	if($column_name[$column_i] == "mail_text"){continue;}
	if($column_name[$column_i] == "insurance_speed"){continue;}

			if($column_name[$column_i] == "id"){
?>
		<th class="th_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>"><span><?=$column_comment[$column_i]?></span></th>
		<th class="th_kensaku col_kensaku"><span>削除</span></th>
		<th class="th_kensaku col_kensaku"><span>対象発掘</span></th>
<?
			}else{

?>
		<th class="th_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>"><span><?=$column_comment[$column_i]?></span></th>
<?
			}
}
?>
	</tr>
<?
	// $query = "SELECT internet.{$table_name}.* , u_mk.user_id , u_mk.user_text , u_mk.sateinin_text FROM internet.{$table_name} LEFT OUTER JOIN izanami.users___mailingkit AS u_mk ON internet.{$table_name}.user_id = u_mk.user_id ORDER BY id DESC LIMIT 100";
	$query = "SELECT internet.{$table_name}.* , u_mk.user_text , u_mk.sateinin_text , izanami_users.ecc_id
				FROM internet.{$table_name}
				LEFT OUTER JOIN izanami.users AS izanami_users ON internet.{$table_name}.user_id = izanami_users.id
				LEFT OUTER JOIN izanami.users___mailingkit AS u_mk ON internet.{$table_name}.mailingkit_id = u_mk.id
				ORDER BY id DESC LIMIT 100";
	// print $query;

	$sql = mysql_query('SET NAMES utf8');
	$sql = mysql_query($query);
	while ($result = mysql_fetch_assoc($sql)) {
		$flag = "";
			if($result["type_selection"] == "スピードタイプ"){
				$flag = "speed_tr";
			}
?>
	<tr class="<?=$flag?>">
<?
		for ($column_i=0; $column_i < count($column_name); $column_i++) {
			$column_val = "";
			$column_val = mb_strimwidth($result[$column_name[$column_i]], 0, 100, "...");
			$column_val = str_replace("\r\n",'',$column_val);

			if($column_name[$column_i] == "date_and_time"){continue;}
			if($column_name[$column_i] == "date_select"){continue;}
			if($column_name[$column_i] == "time_select"){continue;}
			if($column_name[$column_i] == "mail_text"){continue;}
			if($column_name[$column_i] == "insurance_speed"){continue;}


			if($column_name[$column_i] == "id"){
?>
		<td class="td_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>"><span><?=$column_val?></span></td>
		<td class="td_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>"><span class="delete_label" data="<?=$column_val?>">削除</span></td>

<?
if($result["ecc_id"] >0 ){
	$ecc_link = "http://urlounge.co.jp/include/kagoya_check/takuhai/eoc_after_data_table/eoc_after_data_table.php?hikaku_id={$result['id']}&uid={$uid}&kousin_id={$result['ecc_id']}";

?>
		<td class="td_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>"><span><a href='<?=$ecc_link?>' >▼対象発掘済み▼<br>更新画面へ</a></span></td>
<?
}else{
?>
		<td class="td_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>"><span><a href='/include/kagoya_check/takuhai/hikaku_list.php?hikaku_id=<?=$column_val?>' >対象発掘</a></span></td>
<?
}
?>


<?
			}else{

?>
		<td class="td_<?=$column_name[$column_i]?> col_<?=$column_name[$column_i]?>"><span><?=$column_val?></span></td>
<?
			}
		}
?>
	</tr>

	<tr class="<?=$flag?> user_text_row">
	<th class="user_text_th" colspan="4">ユーザー追加コメント</th>
	<td class="user_text_td" colspan="<?=(count($column_name)-4)?>"><?=$result["user_text"]?></td>
	</tr>

	<tr class="<?=$flag?> sateinin_text_row">
	<th class="sateinin_text_th" colspan="4">お客様への返信</th>
	<td class="sateinin_text_td" colspan="<?=(count($column_name)-4)?>"><?=$result["sateinin_text"]?></td>
	</tr>



<?
	}
?>

</table>



<script type="text/javascript">
	var delete_id = "";
	$("#main_table").find(".delete_label").click(function() {
		delete_id = $(this).attr("data");
		if(delete_id != undefined){
			if (window.confirm("選択した情報を削除します。よろしいですか？")) {
				window.open("/include/kagoya_check/takuhai/eoc_after_data_table/move_to_eva.php?move_id="+delete_id);
			}else{
				// alert("キャンセルしました。");
			}
		}
	});

</script>
<style type="text/css">
#main_table .speed_tr td{
	background-color: #eee;
}
tr.sateinin_text_row {
    border-bottom: 5px solid #000;
}
</style>
</body>
</html>
