<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="./henkan.php" method="post">
		<textarea name="textarea"></textarea>
		<input type="submit" name="" value="送信">
	</form>

<?
$text = $_POST["textarea"];
?>

<!-- ここから -->
<?=$text?>
<!-- ここまで -->


</body>
</html>
