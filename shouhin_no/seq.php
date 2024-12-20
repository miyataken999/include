<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SEQ</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
// print "uid ".$uid;

include_once $_SERVER["DOCUMENT_ROOT"]."/include/shouhin_no/dir_menu.php";

mb_internal_encoding("utf8");
include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";
?>


<?
$hinban = htmlspecialchars($_POST["hinban"]);
$res1 = "";
$res2 = "";
$hinbanArray = explode("\n", $hinban);

$sql = mysql_query('SET NAMES utf8');

$count = 0;
for ($i=0; $i < count($hinbanArray); $i++) {
	$count++;
	$yahoo_sinaban = trim($hinbanArray[$i]);
	// var_dump($yahoo_sinaban);
	if(($yahoo_sinaban != '') && (strpos($yahoo_sinaban , "-rss") === false)){
		$query = "SELECT product_id FROM shouhin WHERE yahoo_sinaban='{$yahoo_sinaban}' LIMIT 1";
		$sql = mysql_query($query);
		$result = mysql_fetch_assoc($sql);

		$res1 .= $result["product_id"]."\n";
		$res2 .= "{$yahoo_sinaban}\n";
		// print "aaa".$result["product_id"]."\n";
	}
}


// print "aaa".$count."aaa";
?>
<textarea name="" id="restxt"><?=$res1?></textarea>
<textarea name="" id="restxt2"><?=$res2?></textarea>
<br clear="all">
<style type="text/css">
	#restxt{
		width: 300px;
		height: 400px;
		float: left;
	}
	#restxt2{
		width: 300px;
		height: 400px;
		float: left;
	}
</style>

<script type="text/javascript">
	$("#restxt").focus();
</script>


</body>
</html>
