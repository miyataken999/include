<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>品番⇒保管場所</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
// print "uid ".$uid;

include_once $_SERVER["DOCUMENT_ROOT"]."/include/shouhin_no/dir_menu.php";

?>

<h1>品番⇒保管場所</h1>




<div id="ws_add_form">
	<div class="ws_ttl">品番（改行区切り）</div>
	<div class="ru-ru">
		ルール<br>
		大カテ　10,17,18,19,20,21,22,23,24,25,26,27,28<br>
		若しくは、A保管フラグあるものが社内
	</div>
	<form action="./hokan_res.php" method="POST">
		<textarea name="hinban" id="hinban" value="<?=$hinban?>"><?=$hinban?></textarea>
		<input type="submit" name="" value="送信する">
	</form>
</div>
<style type="text/css">
	#hinban{
		width: 300px;
		height: 400px;
	}
</style>

<script type="text/javascript">
	$("#hinban").focus();
</script>


</body>
</html>
