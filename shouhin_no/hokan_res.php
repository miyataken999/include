<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>保管場所</title>
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
$res_hin = "";
$res_basyo = "";
$hinbanArray = explode("\n", $hinban);

$sql = mysql_query('SET NAMES utf8');
$categori_array = array(10,17,18,19,20,21,22,23,24,25,26,27,28,50,51);

$count = 0;
for ($i=0; $i < count($hinbanArray); $i++) {
// for ($i=0; $i < 10; $i++) {
	$count++;
	$yahoo_sinaban = trim($hinbanArray[$i]);
	$yahoo_sinaban = str_replace("-rss", "", $yahoo_sinaban);
	$yahoo_sinaban = str_replace("-RSS", "", $yahoo_sinaban);
	$yahoo_sinaban = strtoupper($yahoo_sinaban);
	// var_dump($yahoo_sinaban);
	$query = "SELECT yahoo_sinaban,category_id,A_storage FROM shouhin WHERE yahoo_sinaban='{$yahoo_sinaban}' LIMIT 1";
	// print $query."<br>";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	if(in_array($result['category_id'],$categori_array)){
		$hokan = "社内";
	}elseif($result['A_storage'] == 1){
		$hokan = "社内";
	}else{
		$hokan = "清長";
	}

	$res_hin .= $result["yahoo_sinaban"]."\n";
	$res_basyo .= $hokan."\n";
}


// print "aaa".$count."aaa";
?>
<textarea name="" id="res_hin"><?=$res_hin?></textarea>
<textarea name="" id="res_basyo"><?=$res_basyo?></textarea>
<br clear="all">
<style type="text/css">
	#res_hin{
		width: 300px;
		height: 400px;
		float: left;
	}
	#res_basyo{
		width: 300px;
		height: 400px;
		float: left;
	}
</style>

<script type="text/javascript">
	$("#res_basyo").focus();
</script>


</body>
</html>
