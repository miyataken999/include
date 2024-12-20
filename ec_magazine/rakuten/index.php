<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>楽天メルマガ作成画面</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script type="text/javascript" src="/include/ec_magazine/rakuten/farbtastic/farbtastic.js"></script>
	<link rel="stylesheet" href="/include/ec_magazine/rakuten/farbtastic/farbtastic.css" type="text/css" />
</head>
<body>

<div id="main">

<h1>■楽天メルマガ作成画面</h1>

<h2>▼TOP部分</h2>

<form action="result.php" method="POST" name="mail_body" id="mail_body" enctype="multipart/form-data">

<? $name = 'title';?>
<div class="input_area">
	<div class="input_ttl">●メルマガのタイトル</div>
	<textarea name="<?=$name?>"></textarea>
</div>

<? $name = 'main_link';?>
<div class="input_area">
	<div class="input_ttl">●企画ページURL(*変更がある場合のみ書き換え)</div>
	<input type="text" name="<?=$name?>" value="https://www.rakuten.ne.jp/gold/rfstore/special_event/">
</div>

<? $name = 'main_img';?>
<div class="input_area">
	<div class="input_ttl">●企画ページ画像URL</div>
	<input type="text" name="<?=$name?>" value="">
</div>

<? $name = 'kikaku_1_url';?>
<div class="input_area">
	<div class="input_ttl">●特集ページURL(あれば)</div>
	<input type="text" name="<?=$name?>" value="">
</div>

<? $name = 'kikaku_1_img';?>
<div class="input_area">
	<div class="input_ttl">●特集ページ画像URL(あれば)</div>
	<input type="text" name="<?=$name?>" value="">
</div>

<div class="input_ttl">●全体の背景色(*カラーコード直接入力可能)</div>
<div id="colorpicker"></div>
<input type="text" id="color" name="color" value="#123456" />
<br clear="all">

<script type="text/javascript">
  $(document).ready(function() {
    $('#colorpicker').farbtastic('#color');
  });
</script>

<h2>▼新着商品</h2>

<table class="new_table">
	<?
	for ($new_id=1; $new_id <= 8; $new_id++) {
	?>
	<tr>
		<th>商品<?=$new_id?></th>
		<td>
			<table class="inner_table">
				<tr>
					<td>
						<? $name = 'new_'.$new_id.'_ttl';?>
						<div class="input_area">
							<div class="input_ttl">商品タイトル</div>
							<textarea name="<?=$name?>"></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<? $name = 'new_'.$new_id.'_url';?>
						<div class="input_area">
							<div class="input_ttl">商品ページURL</div>
							<input type="text" name="<?=$name?>">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<? $name = 'new_'.$new_id.'_img';?>
						<div class="input_area">
							<div class="input_ttl">画像URL</div>
							<input type="text" name="<?=$name?>">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<? $name = 'new_'.$new_id.'_price';?>
						<div class="input_area">
							<div class="input_ttl">販売価格(*カンマなし)</div>
							<input type="text" name="<?=$name?>">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<? $name = 'new_'.$new_id.'_text';?>
						<div class="input_area">
							<div class="input_ttl">商品紹介テキスト</div>
							<input type="text" name="<?=$name?>">
						</div>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<?}//end for?>
</table>

<h2>▼セール商品</h2>

<table class="sale_table">
	<?
	for ($sale_id=1; $sale_id <= 8; $sale_id++) {
	?>
	<tr>
		<th>商品<?=$sale_id?></th>
		<td>
			<table class="inner_table">
				<tr>
					<td>
						<? $name = 'sale_'.$sale_id.'_ttl';?>
						<div class="input_area">
							<div class="input_ttl">商品タイトル</div>
							<textarea name="<?=$name?>"></textarea>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<? $name = 'sale_'.$sale_id.'_url';?>
						<div class="input_area">
							<div class="input_ttl">商品ページURL</div>
							<input type="text" name="<?=$name?>">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<? $name = 'sale_'.$sale_id.'_img';?>
						<div class="input_area">
							<div class="input_ttl">画像URL</div>
							<input type="text" name="<?=$name?>">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<? $name = 'sale_'.$sale_id.'_price';?>
						<div class="input_area">
							<div class="input_ttl">現在の販売価格(*カンマなし)</div>
							<input type="text" name="<?=$name?>" id="<?=$name?>">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<? $name = 'sale_'.$sale_id.'_text';?>
						<div class="input_area">
							<div class="input_ttl">値下げ前販売価格(*カンマなし)</div>
							<input type="text" name="<?=$name?>" id="<?=$name?>">
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<? $name = 'sale_'.$sale_id.'_discount';?>
						<div class="input_area">
							<div class="input_ttl">値下げ価格(*自動計算)</div>
							<input type="text" name="<?=$name?>" id="<?=$name?>">
						</div>
					</td>
				</tr>
			</table>
		</td>
	</tr>

		<script>
			//値下げ自動計算
			 $("#sale_<?=$sale_id?>_discount")
			    .focusin(function(e) {
			      	normal_val = $("#sale_<?=$sale_id?>_text").val();
					sale_val = $("#sale_<?=$sale_id?>_price").val();
					discount = normal_val - sale_val;
					$("#sale_<?=$sale_id?>_discount").val(discount);
			    })


			</script>
	<?}//end for?>

</table>

<input type="button" id="submitbtn" name="" value="メルマガ作成！">

</form>

</div><!-- end main -->

</body>
</html>

<style type="text/css">
	#main {
		width: 700px;
		margin: 0 auto;
		padding-bottom: 100px;
	}
	#submitbtn {
		width: 500px;
		margin: 50px auto 0;
		display: block;
		font-size: 20px;
		padding:20px;
	}
	textarea {
		width: 100%;
		padding: 10px;
		font-size: 16px;
		box-sizing: border-box;
	}
	input {
		width: 100%;
		padding: 10px;
		font-size: 16px;
		box-sizing: border-box;
	}
	#color {
		width: 40%;
		float: left;
		margin-top: 70px;
	}
	#colorpicker {
		width: 30%;
		float: left;

	}

	.input_area {
		margin-bottom: 15px;
	}
	.new_table {
		width: 100%;
		border-collapse: collapse;
	}
	.new_table th {
		width: 30%;
		background-color: #f8bb00;
	}
	.new_table tr {
		border: 1px solid #ccc;
	}
	.new_table tr td {
		padding: 5px;
		width: 70%;
	}
	.inner_table {
		width: 100%;
	}
	.inner_table .input_area {
		margin-bottom: 0px!important;
	}

	.sale_table {
		width: 100%;
		border-collapse: collapse;
	}
	.sale_table th {
		width: 30%;
		background-color: #e60012;
	}
	.sale_table tr {
		border: 1px solid #ccc;
	}
	.sale_table tr td {
		padding: 5px;
		width: 70%;
	}
</style>

<script type="text/javascript">
	$("#submitbtn").click(function(){
		$("#mail_body").submit();
	})
</script>
