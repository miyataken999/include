<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";

// include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

//データベース接続
include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";

$r_id = $_GET["r_id"];
$c_id = $_GET["c_id"];
$user_id = $_GET["user_id"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>実績の複製</title>
	<link rel="stylesheet" href="">

	<script type="text/javascript">
		function selfClose(time) {
		setTimeout('self.close()',time)

		}
	</script>
</head>
<body onload="selfClose(0)">

<?
$result_query = "SELECT * FROM mst_buy_result WHERE result_id = {$r_id} LIMIT 1";

$result_sql = mysql_query('SET NAMES utf8');
$result_sql = mysql_query($result_query);
$result_data = mysql_fetch_assoc($result_sql);
mysql_error();

$result_data['campaign_id'] = $c_id;
$result_data['create_by'] = $user_id;

$result_id = $result_data['result_id'];
$result_ttl = $result_data['result_ttl'];
$result_img_seq = $result_data['result_img_seq'];
$result_img_url = $result_data['result_img_url'];
$list_price = $result_data['list_price'];
$camp_price = $result_data['camp_price'];
$update_by = $result_data['update_by'];
$update_at = $result_data['update_at'];
$create_by = $result_data['create_by'];
$create_at = $result_data['create_at'];
$campaign_id = $result_data['campaign_id'];
$sort = $result_data['sort'];

// print $result_id."<br>".$result_ttl."<br>".$result_img_seq."<br>".$result_img_url."<br>".$list_price."<br>".$camp_price."<br>".$update_by."<br>".$update_at."<br>".$create_by."<br>".$create_at."<br>".$campaign_id."<br>".$sort;

$insert_query = "INSERT INTO mst_buy_result (
result_ttl
,result_img_seq
,result_img_url
,list_price
,camp_price
,create_by
,create_at
-- ,campaign_id
-- ,sort
	) VALUES (
'{$result_ttl}'
,'{$result_img_seq}'
,'{$result_img_url}'
,'{$list_price}'
,'{$camp_price}'
,'{$create_by}'
,'{$create_at}'
-- ,'{$campaign_id}'
-- ,'{$sort}'
)";

$insert_sql = mysql_query($insert_query);
mysql_error();

print $insert_query;


?>
</body>
</html>
