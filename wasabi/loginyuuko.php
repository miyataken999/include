<?
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ロジザード用ZIPエクスポート選択画面</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
// print "uid ".$uid;
?>

<h1>ロジザードZIPエクスポート</h1>
<h3>
	商品マスタ登録用CSV<br>
	ロジザード入荷予定CSV<br>
</h3>


<!-- <div class="form_box">
	<div class="ws_ttl">WS登録日で出力</div>
	<form action="./nyuuko/make_zip.php" method="GET" target="_blank">
		<select name="a_to_b" >
			<option value="off">A保管は含まない</option>
			<option value="on">A保管も含む</option>
		</select>
		<input type="date" name="ws_import_date" value="" placeholder="">
		<div class="desc">入荷日</div>
		<input type="date" name="date" value="" placeholder="">
		<input type="submit" name="" value="ZIP作成する">
	</form>
</div> -->
<div class="form_box">
	<div class="ws_ttl">SEQで単品出力</div>
	<form action="./nyuuko/make_zip.php" method="GET" target="_blank">
		<select name="a_to_b" >
			<option value="off">A保管・宝飾大カテは含まない</option>
			<option value="on">A保管・宝飾大カテも含む</option>
		</select>
		<input id="seqInput" type="text" name="product_id" value="" placeholder="">
		<div class="desc">入荷日</div>
		<input type="date" name="date" value="" placeholder="">
		<input type="submit" name="" value="ZIP作成する">
	</form>
</div>
<div class="form_box">
	<div class="ws_ttl">box_idで出力</div>
	<form action="./nyuuko/make_zip.php" method="GET" target="_blank">
		<select name="a_to_b" >
			<option value="off">A保管・宝飾大カテは含まない</option>
			<option value="on">A保管・宝飾大カテも含む</option>
		</select>
		<input id="seqInput" type="text" name="box_id" value="" placeholder="">
		<div class="desc">入荷日</div>
		<input type="date" name="date" value="" placeholder="">
		<input type="submit" name="" value="ZIP作成する">
	</form>
</div>





<style type="text/css">
	.form_box{
		border: 2px solid #111;
		padding: 10px 30px;
		background-color: #eee;
		width: 300px;
		margin-bottom: 60px;
	}
	.form_box select{
		display: block;
	}
</style>

</body>
</html>
