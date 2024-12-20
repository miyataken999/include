<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>大文字⇔小文字 結果画面</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
// print "uid ".$uid;

include_once $_SERVER["DOCUMENT_ROOT"]."/include/shouhin_no/dir_menu.php";

?>


<?
$oomoji = htmlspecialchars($_POST["oomoji"]);
$henkanflag = htmlspecialchars($_POST["henkanflag"]);
if($henkanflag == "to_komoji"){
	$komoji = strtolower($oomoji);
}else{
	$komoji = strtoupper($oomoji);
}
$res = "";

$komojiArray = explode("\n", $komoji);
for ($i=0; $i < count($komojiArray); $i++) {
	$res .= $komojiArray[$i]."\n";
}


?>
<textarea name="" id="restxt"><?=$res?></textarea>

<style type="text/css">
	#restxt{
		width: 300px;
		height: 400px;
	}
</style>

<script type="text/javascript">
	$("#restxt").focus();
</script>


</body>
</html>
