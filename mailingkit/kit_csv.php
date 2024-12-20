<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>宅配キット配送番号CSVのインポート</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?

//権限ファイル
include "./auth.php";



?>


<h1>宅配キット配送番号CSVのインポート</h1>

<form action="kit_csv_up.php" method="post" enctype="multipart/form-data">
  CSVファイル：<br />
  <input type="file" name="csvfile" id="csvfile" size="30" /><br />
  <input type="submit" value="アップロード" />
</form>

<style type="text/css">
	input {
	    display: block;
	    width: 300px;
	    margin: 0;
	    padding: 10px;
	}
</style>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
	$("#csvfile").focus();
</script>

</body>
</html>
