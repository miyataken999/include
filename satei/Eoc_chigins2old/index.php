<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>査定用エクスポート画面</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
// print "uid ".$uid;
?>

<h1>査定用エクスポート画面</h1>



<form action="./price.php" method="get" accept-charset="utf-8">
	顧客SEQ
	<input type="text" name="koSEQ" id="koSEQ" value="" placeholder="">
	<input type="submit" name="" value="表示">
</form>



<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
▼アパオクのとき使う未完成
<div id="outoput_data">データ反映</div>


<script type="text/javascript">
$("#outoput_data").click(function(){
	window.open("https://rifa.life/include/satei/list.php");
})
$("#koSEQ").focus();
</script>

<style type="text/css">
	#outoput_data{
		width: 200px;
		text-align: center;
		cursor: pointer;
		background-color: #bbb;
		color: #333;
		padding: 5px 10px;
		border: 2px solid #000;
	}

</style>

</body>
</html>
