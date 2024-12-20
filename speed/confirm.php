<?
// ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>入力内容確認画面</title>
	<link rel="stylesheet" href="/include/kagoya_check/style.css">
	<link rel="stylesheet" href="/include/speed/form_style.css">
</head>
<body>
<?
// include_once $_SERVER["DOCUMENT_ROOT"]."/include/common/header_shop5.php";
?>
<?
// ini_set("display_errors",1);
header("Content-Type:text/html; charset=UTF-8");

include_once $_SERVER["DOCUMENT_ROOT"]."/include/kagoya_check/function.php";
$now_time = date("Y/m/d H:i:s");

mb_internal_encoding("utf8");
// include $_SERVER["DOCUMENT_ROOT"]."/include/connection_kagoya.php";
?>

<?
$id = $_POST["id"];
$user_id = $_POST["user_id"];
$username = $_POST["username"];
$furikana = $_POST["furikana"];
$zipcode = $_POST["zipcode"];
$prefectures = $_POST["prefectures"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$deliverycompanycode = $_POST["deliverycompanycode"];
$collectdate = $_POST["collectdate"];
$collecttime = $_POST["collecttime"];
$packnum = $_POST["packnum"];
$voucherflg = $_POST["voucherflg"];
$baggage = $_POST["baggage-type"];
$package = $_POST["package"];
$note = $_POST["note"];
$regist = $_POST["regist"];
// $list = $_POST["list"];
$update = $_POST["update"];
$stop = $_POST["stop"];
$restart = $_POST["restart"];
$requestno = $_POST["requestno"];
?>

<div class="main_column">

<h1>入力内容の確認</h1>
<form action="/include/speed/result.php" method="post" id="shuka_form">

	<?$name = 'user_id';?>
	<input type="hidden" name="<?=$name?>" value="<?=$user_id?>">

	<?$name = 'id';?>
	<div class="row">
		<div class="input_ttl">申込みid</div>
		<input type="text" name="<?=$name?>" value="<?=$id?>" readonly>
	</div>

	<?$name = 'requestno';?>
	<div class="row">
		<div class="input_ttl">集荷申込番号</div>
		<input type="text" name="<?=$name?>" value="<?=$requestno?>" readonly>
	</div>

	<?$name = 'username';?>
	<div class="row">
		<div class="input_ttl">申込者名(※全角)</div>
		<input type="hidden" name="<?=$name?>" value="<?=$username?>">
		<?=$username?>
	</div>

	<?$name = 'furikana';?>
	<div class="row">
		<div class="input_ttl">フリガナ(※全角)</div>
		<input type="hidden" name="<?=$name?>" value="<?=$furikana?>">
		<?=$furikana?>
	</div>

	<?$name = 'zipcode';?>
	<div class="row">
		<div class="input_ttl">郵便番号(※ハイフンなし)</div>
		<input type="hidden" name="<?=$name?>" value="<?=$zipcode?>">
		<?=$zipcode?>
	</div>

	<?$name = 'prefectures';?>
	<div class="row">
		<div class="input_ttl">都道府県</div>
		<input type="hidden" name="<?=$name?>" value="<?=$prefectures?>">
		<?=$prefectures?>
	</div>

	<?$name = 'address1';?>
	<div class="row">
		<div class="input_ttl">住所1(※全角／20文字以内)</div>
		<input type="hidden" name="<?=$name?>" value="<?=$address1?>">
		<?=$address1?>
	</div>

	<?$name = 'address2';?>
	<div class="row">
		<div class="input_ttl">住所2(※全角／20文字以内)</div>
		<input type="hidden" name="<?=$name?>" value="<?=$address2?>">
		<?=$address2?>
	</div>

	<?$name = 'tel';?>
	<div class="row">
		<div class="input_ttl">電話番号(※ハイフンあり)</div>
		<input type="hidden" name="<?=$name?>" value="<?=$tel?>">
		<?=$tel?>
	</div>

	<?$name = 'email';?>
	<div class="row">
		<div class="input_ttl">メールアドレス(※半角)</div>
		<input type="hidden" name="<?=$name?>" value="<?=$email?>">
		<?=$email?>
	</div>

	<?$name = 'deliverycompanycode';?>
	<div class="row">
		<div class="input_ttl">配送業者</div>
		<input type="hidden" name="<?=$name?>" value="<?=$deliverycompanycode?>">
		<?=$deliverycompanycode?>
	</div>

	<?$name = 'collectdate';?>
	<div class="row">
		<div class="input_ttl">集荷希望日</div>
		<input type="hidden" name="<?=$name?>" value="<?=$collectdate?>">
		<?=$collectdate?>
	</div>

	<?$name = 'collecttime';?>
	<div class="row">
		<div class="input_ttl">集荷希望時間</div>
		<input type="hidden" name="<?=$name?>" value="<?=$collecttime?>">
		<?=$collecttime?>
	</div>

	<?$name = 'packnum';?>
	<div class="row">
		<div class="input_ttl">集荷予定個数</div>
		<input type="hidden" name="<?=$name?>" value="<?=$packnum?>">
		<?=$packnum?>個
	</div>

	<?$name = 'voucherflg';?>
	<div class="row">
		<div class="input_ttl">伝票タイプ</div>
		<input type="hidden" name="<?=$name?>" value="<?=$voucherflg?>">
		着払い
	</div>

	<?$name = 'baggage-type';?>
	<div class="row">
		<div class="input_ttl">種類</div>
		<input type="hidden" name="<?=$name?>" value="<?=$baggage?>">
		<?=$baggage?>
	</div>

	<?$name = 'package';?>
	<input type="hidden" name="<?=$name?>" value="">

	<?$name = 'note';?>
	<div class="row">
		<div class="input_ttl">ドライバーへのメッセージ(※15 or 17文字以内)</div>
		<input type="hidden" name="<?=$name?>" value="<?=$note?>">
		<?=$note?>
	</div>

</form>

	<?if (array_key_exists("regist", $_POST)){?>
		<input type="submit" name="regist" value="新規申込する" form="shuka_form" id="submit_btn">
	<?}else{?>
		<input type="submit" name="update" value="修正内容を更新" form="shuka_form" id="submit_btn">
	<?}?>
</div>

</body>
</html>

<style type="text/css" media="screen">
	.row .input_ttl {
	background-color: #888;
	}
</style>
