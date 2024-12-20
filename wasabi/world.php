<?
// phpinfo();
//ログイン認証
include_once $_SERVER["DOCUMENT_ROOT"]."/include/login/login.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ワールドスイッチ用エクスポート選択画面</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?
include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/include/evacommon/header.php";
// print "uid ".$uid;
?>

<h1>ワールドスイッチ用エクスポート選択画面</h1>

<!-- <div id="ws_add_form">
	<div class="ws_ttl">新規アップボックス</div>
	<form action="./add/make_zip.php" method="GET" target="_blank">
		<div class="desc">４桁のボックスIDを入れてください。</div>
		<input id="newInput" type="text" name="box_id" value="" placeholder="">
		<input type="submit" name="" value="ZIP作成する">
	</form>
</div> -->


<div id="ws_edit_form">
	<div class="ws_ttl">出品アップボックス<!-- ※こっちで。 --></div>
	<form action="./edit/make_zip.php" method="GET" target="_blank">
		<div class="desc">４桁のボックスIDを入れてください。</div>
		<input id="editInput" type="text" name="box_id" value="" placeholder="">
		<input type="submit" name="" value="ZIP作成する">
	</form>
</div>


<div id="ws_seqedit_form">
	<div class="ws_ttl">出品アップSEQ</div>
	<form action="./seqedit/make_zip.php" method="POST" target="_blank">
		<div class="desc">SEQ（改行区切り）</div>
		<textarea id="seqInput" name="seqInput"></textarea>
		<input type="submit" name="" value="ZIP作成する">
	</form>
</div>

<div id="ws_detectedit_form">
	<div class="ws_ttl">文字コード検出</div>
	<form action="detect.php" method="GET" target="_blank">
		<div class="desc">文字</div>
		<input type="text" id="detectInput" name="detectInput">
		<input type="submit" name="" value="送信">
	</form>
</div>


<!-- <div id="hokan_form">
	<div class="ws_ttl">保管場所更新用</div>
	<form action="./hokan/make_zip.php" method="GET" target="_blank">
		<div class="desc">ここは触らないでください</div>
		<input id="hokanInput" type="text" name="box_id" value="" placeholder="">
		<input type="submit" name="" value="ZIP作成する">
	</form>
</div> -->

<script type="text/javascript">
	$("#editInput").focus();
</script>


<style type="text/css">
	#seqInput{
		height: 400px;
	}
</style>


</body>
</html>
