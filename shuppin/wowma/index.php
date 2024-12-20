<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>wowma画像確認画面</title>
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header.php";
?>
	<h1>wowma画像確認画面</h1>
	<form action="./gazou.php" method="post" accept-charset="utf-8">
		<div>
			SEQを改行区切りで
		</div>
		<textarea name="seq"></textarea>
		<input type="submit" name="" value="送信">
	</form>
<style type="text/css" media="all">
	textarea{
		height: 500px;
	}
</style>
</body>
</html>
