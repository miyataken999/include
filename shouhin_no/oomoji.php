<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>大文字⇔小文字</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
// print "uid ".$uid;

include_once $_SERVER["DOCUMENT_ROOT"]."/include/shouhin_no/dir_menu.php";

?>

<h1>大文字⇔小文字</h1>




<div id="ws_add_form">
	<div class="ws_ttl">大文字⇔小文字変換（改行区切り）</div>
	<form action="./komoji.php" method="POST">
		<textarea name="oomoji" id="oomoji" value="<?=$oomoji?>"><?=$oomoji?></textarea>
		<select name="henkanflag" >
			<option value="to_komoji">大文字⇔小文字にする</option>
			<option value="to_oomoji">小文字⇔大文字にする</option>
		</select>
		<input type="submit" name="" value="送信する">
	</form>
</div>
<style type="text/css">
	#oomoji{
		width: 300px;
		height: 400px;
	}
	select{
		display: block;
	}
</style>

<script type="text/javascript">
	$("#oomoji").focus();
</script>


</body>
</html>
