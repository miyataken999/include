<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>商品画像ZIP作成　SEQ（改行区切り）</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
// print "uid ".$uid;

include_once $_SERVER["DOCUMENT_ROOT"]."/include/shouhin_no/dir_menu.php";

?>

<h1>商品画像ZIP作成　SEQ（改行区切り）</h1>

<?
$gazou_seq = htmlspecialchars($_POST["gazou_seq"]);
if($gazou_seq != ""){
	$gazou_seq_array = explode("\n",$gazou_seq);

	//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	//★★----------危険 削除コマンド-----★★
	//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	// ZIP削除
	$path_file = "./tmp/*.zip";
	$listfile = system("rm {$path_file}", $rtf);
	$path_file = "./tmp/*.jpg";
	$listfile = system("rm {$path_file}", $rtf);
	//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★
	//★★----------危険 削除コマンド-----★★
	//★★★★★★★★★★★★★★★★★★★★★★★★★★★★★★

	for ($i=0; $i < count($gazou_seq_array); $i++) {
		$product_id = trim($gazou_seq_array[$i]);


		include_once $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";


		$query = "SELECT box_id FROM shouhin WHERE product_id = {$product_id} LIMIT 1";
		$sql = mysql_query('SET NAMES utf8');
		$sql = mysql_query($query);
		$res = mysql_fetch_array($sql);
		$box_id = $res["box_id"];

		//+++++++++++++++++++++++++++++++++++++++
		//box_idから、box_nameを取得、ファイル名に使用
		//+++++++++++++++++++++++++++++++++++++++
		$box_query = " SELECT box_name FROM box WHERE box_id={$box_id} LIMIT 1";
		$box_sql = mysql_query('SET NAMES utf8');
		$box_sql = mysql_query($box_query);
		$box_result = mysql_fetch_assoc($box_sql);
		$box_name = $box_result["box_name"];

		// print "cp ./../../shop/services/image/{$box_name}/{$box_name}/{$product_id}_1.jpg ./tmp ";
		$listfile = system("cp /var/www/html/shop/services/image/{$box_name}/{$box_name}/{$product_id}*.jpg ./tmp ",$ret);
	}

	$yahoo_zip_res = system("zip ./tmp/gazou.zip -j ./tmp/*.jpg ", $zip); //{$box_name}/
	$yahoo_zip = system("chmod -R 777 ./tmp/gazou.zip ", $zip_mod);


	include_once $_SERVER["DOCUMENT_ROOT"]."/include/close_connection.php";

?>
<script type="text/javascript">
	window.location = "./gazou_download.php";
</script>
<?
}


?>
<div id="ws_add_form">
	<form action="./gazou.php" method="POST">
		<textarea name="gazou_seq" id="gazou_seq" value="<?=$gazou_seq?>"><?=$gazou_seq?></textarea>
		<input type="submit" name="" value="送信する">
	</form>
</div>

<style type="text/css">
	#gazou_seq{
		width: 300px;
		height: 400px;
	}
</style>
<script type="text/javascript">
	$("#gazou_seq").focus();
</script>




</body>
</html>
