<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";

// include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";

//データベース接続
include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";

$camp_id = $_GET["camp_id"];
$page_id = $_GET["page_id"];
$user_id = $_GET["user_id"];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>コンテンツの複製</title>
	<link rel="stylesheet" href="">

	<script type="text/javascript">
		function selfClose(time) {
		setTimeout('self.close()',time)
		}
	</script>
</head>
<body onload="selfClose(0)">

<?
$content_query = "SELECT * FROM mst_buy_campaign_content WHERE id = {$camp_id} LIMIT 1";
// print $content_query."<br><br>";
$content_sql = mysql_query('SET NAMES utf8');
$content_sql = mysql_query($content_query);
$campaign_content_data = mysql_fetch_assoc($content_sql);
mysql_error();

// $campaign_content_data['campaign_id'] = $c_id;
$campaign_content_data['create_by'] = $user_id;

$camptop_img = $campaign_content_data['camptop_img'];
$datail_img = $campaign_content_data['datail_img'];
$camp_ttl = $campaign_content_data['camp_ttl'];
$camp_txt = $campaign_content_data['camp_txt'];
$page1_ttl = $campaign_content_data['page1_ttl'];
$page1_url = $campaign_content_data['page1_url'];
$page2_ttl = $campaign_content_data['page2_ttl'];
$page2_url = $campaign_content_data['page2_url'];
$layout_pattern = $campaign_content_data['layout_pattern'];
$sp_layout_pattern = $campaign_content_data['sp_layout_pattern'];
$update_by = $campaign_content_data['update_by'];
$update_at = $campaign_content_data['update_at'];
$create_by = $campaign_content_data['create_by'];
$create_at = $campaign_content_data['create_at'];
$sort = $campaign_content_data['sort'];

$insert_query = "INSERT INTO mst_buy_campaign_content (
camptop_img
,datail_img
,camp_ttl
,camp_txt
,page1_ttl
,page1_url
,page2_ttl
,page2_url
,layout_pattern
,sp_layout_pattern
,update_by
,update_at
,create_by
,create_at
,sort
-- ,page_id
-- ,sort
	) VALUES (
'{$camptop_img}'
,'{$datail_img}'
,'{$camp_ttl}'
,'{$camp_txt}'
,'{$page1_ttl}'
,'{$page1_url}'
,'{$page2_ttl}'
,'{$page2_url}'
,'{$layout_pattern}'
,'{$sp_layout_pattern}'
,'{$update_by}'
,'{$update_at}'
,'{$create_by}'
,'{$create_at}'
,'{$sort}'
-- ,'{$page_id}'
-- ,'{$sort}'
)";

$insert_sql = mysql_query($insert_query);
mysql_error();

print $insert_query;
?>
</body>
</html>
