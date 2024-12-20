<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title></title>
</head>
<body>
<?
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

$id = $_GET['id'];
$user_id = $_GET['u_id'];

$no_query = "UPDATE Eoc_takuhai SET
	status = 2,
	haisou_gyousha = '※電話またはFAXで集荷依頼済み',
	shuka_error = '',
	not_hi_shuka = 1,
	updated_by = '{$user_id}'
	WHERE id = {$id} LIMIT 1";
$no_sql = mysql_query('SET NAMES utf8');
$no_sql = mysql_query($no_query);
print $no_query;

echo '<script type="text/javascript">
location.href="https://rifa.life/shop5/Eoc_takuhai_speed_list.php";
</script>';
?>
</body>
</html>
