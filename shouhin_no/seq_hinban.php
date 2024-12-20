<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SEQ⇒品番</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
// print "uid ".$uid;

include_once $_SERVER["DOCUMENT_ROOT"]."/include/shouhin_no/dir_menu.php";

?>

<h1>SEQ⇒品番</h1>




<div id="ws_add_form">
	<div class="ws_ttl">SEQ⇒品番変換（改行区切り）</div>
	<form action="./seq_hinban_submit.php" method="POST">
		<textarea name="seq" id="seq" value="<?=$seq?>"><?=$seq?></textarea>
		<input type="submit" name="" value="送信する">
	</form>
</div>
<style type="text/css">
	#seq{
		width: 300px;
		height: 400px;
	}
</style>

<script type="text/javascript">
	$("#seq").focus();
</script>


</body>
</html>
