<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>管理番号など変換比較画面</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
// print "uid ".$uid;

include_once $_SERVER["DOCUMENT_ROOT"]."/include/shouhin_no/dir_menu.php";

?>

<h1>合致（改行区切り）</h1>

<?
$hikaku1 = htmlspecialchars($_POST["hikaku1"]);
$hikaku1 = strtoupper($hikaku1);
$hikaku2 = htmlspecialchars($_POST["hikaku2"]);
$hikaku2 = strtoupper($hikaku2);
if(($hikaku1 != "") && ($hikaku2 != "")){
	$res = "";
	$hikaku1_array = explode("\n",$hikaku1);
	$hikaku2_array = explode("\n",$hikaku2);
	for ($i=0; $i < count($hikaku1_array); $i++) {
		if(in_array($hikaku1_array[$i],$hikaku2_array)){
			$res .= $hikaku1_array[$i]."\n";
		}
	}
}


?>
<div id="ws_add_form">
	<form action="./hikaku_match.php" method="POST">
		<div class="box">
			<textarea name="hikaku1" id="hikaku1" value="<?=$hikaku1?>"><?=$hikaku1?></textarea>
			<div class="desc">と</div>
			<textarea name="hikaku2" id="hikaku2" value="<?=$hikaku2?>"><?=$hikaku2?></textarea>
			<div class="desc">で合致するやつ</div>
			<input type="submit" name="" value="送信する">
		</div>
		<div class="box box2">
			<div class="desc">結果</div>
			<textarea name="" id="res"><?=$res?></textarea>
		</div>
		<br clear="all">
	</form>
</div>

<style type="text/css">
	.box{
		float: left;
	}
	.box2{
		margin-left: 50px;
	}
	#hikaku1,#hikaku2{
		width: 300px;
		height: 200px;
	}
	#res{
		width: 300px;
		height: 400px;
	}
</style>
<script type="text/javascript">
<?
if($res == ""){
?>
	$("#hikaku1").focus();
<?
}else{
?>
	$("#res").focus();
<?
}
?>
</script>




</body>
</html>
