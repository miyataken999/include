<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>品番削除</title>
	<!-- <link rel="stylesheet" href="/include/kagoya_check/style.css"> -->
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/function.php";

//権限ファイル
include "./auth.php";

?>

<h1>品番削除</h1>
<p>SEQを入力してください。削除後、査物で売却済にして保存をして再度品番が生成されます。</p>


<form action="get.php" method="get" >
	<input type="text" name="product_id" value="" >
	<input type="submit" name="" value="送信">
</form>


</body>
</html>
