<!DOCTYPE html>
<html>
<head>
<!--NO INDEX -->
<meta name="robots" content="noindex">
<!--/NO INDEX -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>楽天メルマガ確認画面</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>
<body>

<?
function escapeFirst($str){
	$str = htmlspecialchars($str,ENT_NOQUOTES);
	$str = str_replace("'","’",$str);
	$str = str_replace("\"","”",$str);
	return $str;
}

function escapeFirst_decode($str){
	$str = htmlspecialchars_decode($str);
	$str = str_replace("’","'",$str);
	$str = str_replace("”","\"",$str);
	return $str;
}

$title = escapeFirst($_POST['title']);
$title = str_replace("\n","<br>",$title);

$main_link = escapeFirst($_POST['main_link']);
$main_img = escapeFirst($_POST['main_img']);
$kikaku_1_url = escapeFirst($_POST['kikaku_1_url']);
$kikaku_1_img = escapeFirst($_POST['kikaku_1_img']);
$kikaku_1_img = escapeFirst($_POST['kikaku_1_img']);

$color = escapeFirst($_POST['color']);

for ($new_id=1; $new_id <= 8; $new_id++) {
	$tmp = "new_".$new_id."_ttl";
	$$tmp = escapeFirst($_POST["new_{$new_id}_ttl"]);
	$$tmp = str_replace("\n","<br>",$$tmp);

	$tmp = "new_".$new_id."_url";
	$$tmp = escapeFirst($_POST["new_{$new_id}_url"]);

	$tmp = "new_".$new_id."_img";
	$$tmp = escapeFirst($_POST["new_{$new_id}_img"]);

	$tmp = "new_".$new_id."_price";
	$$tmp = escapeFirst($_POST["new_{$new_id}_price"]);

	$tmp = "new_".$new_id."_text";
	$$tmp = escapeFirst($_POST["new_{$new_id}_text"]);
}

for ($sale_id=1; $sale_id <= 8; $sale_id++) {
	$tmp = "sale_".$sale_id."_ttl";
	$$tmp = escapeFirst($_POST["sale_{$sale_id}_ttl"]);
	$$tmp = str_replace("\n","<br>",$$tmp);

	$tmp = "sale_".$sale_id."_url";
	$$tmp = escapeFirst($_POST["sale_{$sale_id}_url"]);

	$tmp = "sale_".$sale_id."_img";
	$$tmp = escapeFirst($_POST["sale_{$sale_id}_img"]);

	$tmp = "sale_".$sale_id."_price";
	$$tmp = escapeFirst($_POST["sale_{$sale_id}_price"]);

	$tmp = "sale_".$sale_id."_text";
	$$tmp = escapeFirst($_POST["sale_{$sale_id}_text"]);

	$tmp = "sale_".$sale_id."_discount";
	$$tmp = escapeFirst($_POST["sale_{$sale_id}_discount"]);
}
?>

<div id="main">

<h1>■楽天メルマガ確認画面</h1>

<h2>▼プレビュー</h2>
<div id="preview">

<table width=100% align=center cellspacing=0>
    <tr>
        <td bgcolor=<?=$color?>>
			<br><br>
			<!-- header -->
			<table width=640px align=center cellspacing=0>
				<tr>
					<td bgcolor=#ffffff>
						<table width=640px align=center>
							<tr>
								<td width=640px height="100px">
									<a href="https://www.rakuten.ne.jp/gold/rfstore/">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0064381975.gif" width=45% border=0><img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0064381976.jpg" width=30% border=0>
									</a>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<!-- header -->
			<!-- ポイント -->
			<table width=640px align=center cellspacing=0>
				<tr>
					<td bgcolor=#ffffff>
						<table width=640px align=center>
							<tr>
								<td colspan="3" align=center bgcolor="#333333" height="80">
									<font size=5 color=#ffffff>
										<?=$title?>
									</font>
								</td>
							</tr>
						</table>
						<table width=640px align=center>
							<tr>
								<td align=center width=640px>
									<a href="<?=$main_link?>">
										<img src="<?=$main_img?>" width=100% border=0>
									</a>
									<?if($kikaku_1_url != ''){?>
									<br><br>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%80%90iRF1%E3%80%91/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04210264/181218_ij_sale.jpg" width=95% border=0>
									</a>
									<?}?>
								</td>
							</tr>
						</table>
						<br>
						<table width=640px align=center>
							<tr>
								<td align=center width=640px>
									<a href="<?=$main_link?>">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0071292747.gif" width=320px border=0 />
									</a>
								</td>
							</tr>
						</table>
						<br>
					</td>
				</tr>
			</table>
			<!-- ポイント -->
			<br><br>
			<!-- 新着 -->
			<table width=640px align=center cellspacing=0>
				<tr>
					<td bgcolor=#ffffff>
					   	<table width=640px align=center>
							<tr>
								<td align=center width=640px>
									<a href="https://search.rakuten.co.jp/search/mall/?s=4&sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780716.jpg" width=640px border=0>
									</a>
								</td>
							</tr>
						</table>
						<!-- 1段目 -->
						<table width=640px align=center>
							<tr>
								<td align=center width=33%>
									<a href="<?=$new_1_url?>">
										<img src="<?=$new_1_img?>" width=90% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="<?=$new_2_url?>">
										<img src="<?=$new_2_img?>" width=90% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center bgcolor="#f8bb00" height="25px">
									<font size=2 color=#111111>
										<?=$new_1_text?>
									</font>
								</td>
								<td align=center bgcolor="#f8bb00">
									<font size=2 color=#111111>
										<?=$new_2_text?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center height=60px>
									<font size=3 color=#111111>
										<?=$new_1_ttl?>
									</font>
								</td>
								<td align=center>
									<font size=3 color=#111111>
										<?=$new_2_ttl?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($new_1_price)?>円
									</font>
								</td>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($new_2_price)?>円
									</font>
								</td>
							</tr>
						<!-- 1段目 -->
						<!-- 2段目 -->
							<tr>
								<td align=center width=33%>
									<a href="<?=$new_3_url?>">
										<img src="<?=$new_3_img?>" width=90% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="<?=$new_4_url?>">
										<img src="<?=$new_4_img?>" width=90% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center bgcolor="#f8bb00" height="25px">
									<font size=2 color=#111111>
										<?=$new_3_text?>
									</font>
								</td>
								<td align=center bgcolor="#f8bb00">
									<font size=2 color=#111111>
										<?=$new_4_text?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center height=60px>
									<font size=3 color=#111111>
										<?=$new_3_ttl?>
									</font>
								</td>
								<td align=center>
									<font size=3 color=#111111>
										<?=$new_4_ttl?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($new_3_price)?>円
									</font>
								</td>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($new_4_price)?>円
									</font>
								</td>
							</tr>
						<!-- 2段目 -->

						<!-- 3段目 -->
							<tr>
								<td align=center width=33%>
									<a href="<?=$new_5_url?>">
										<img src="<?=$new_5_img?>" width=90% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="<?=$new_6_url?>">
										<img src="<?=$new_6_img?>" width=90% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center bgcolor="#f8bb00" height="25px">
									<font size=2 color=#111111>
										<?=$new_5_text?>
									</font>
								</td>
								<td align=center bgcolor="#f8bb00">
									<font size=2 color=#111111>
										<?=$new_6_text?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center height=60px>
									<font size=3 color=#111111>
										<?=$new_5_ttl?>
									</font>
								</td>
								<td align=center>
									<font size=3 color=#111111>
										<?=$new_6_ttl?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($new_5_price)?>円
									</font>
								</td>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($new_6_price)?>円
									</font>
								</td>
							</tr>
						<!-- 3段目 -->
						<!-- 4段目 -->
							<tr>
								<td align=center width=33%>
									<a href="<?=$new_7_url?>">
										<img src="<?=$new_7_img?>" width=90% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="<?=$new_8_url?>">
										<img src="<?=$new_8_img?>" width=90% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center bgcolor="#f8bb00" height="25px">
									<font size=2 color=#111111>
										<?=$new_7_text?>
									</font>
								</td>
								<td align=center bgcolor="#f8bb00">
									<font size=2 color=#111111>
										<?=$new_8_text?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center height=60px>
									<font size=3 color=#111111>
										<?=$new_7_ttl?>
									</font>
								</td>
								<td align=center>
									<font size=3 color=#111111>
										<?=$new_8_ttl?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($new_7_price)?>円
									</font>
								</td>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($new_8_price)?>円
									</font>
								</td>
							</tr>
						<!-- 4段目 -->
						</table>
						<br>
						<table width=640px align=center>
							<tr>
								<td align=center width=640px>
									<a href="https://search.rakuten.co.jp/search/mall/?s=4&sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780828.gif" width=400px border=0 />
									</a>
								</td>
							</tr>
						</table>
						<br>
					</td>
				</tr>
			</table>
			<!-- 新着 -->
			<br><br>
			<!-- セール -->
			<table width=640px align=center cellspacing=0 >
				<tr>
					<td bgcolor=#ffffff>
						<table width=640px align=center>
							<tr>
								<td align=center width=640px>
									<a href="http://search.rakuten.co.jp/search/inshop-mall?f=3&v=2&sid=286040&uwd=1&s=1&p=1&sitem=RF&st=O&nitem=&min=&max=">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780717.jpg" width=640px border=0>
									</a>
								</td>
							</tr>
						</table>
						<!-- 1段目 -->
						<table width=640px align=center>
							<tr>
								<td align=center width=33%>
									<a href="<?=$sale_1_url?>">
										<img src="<?=$sale_1_img?>" width=90% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="<?=$sale_2_url?>">
										<img src="<?=$sale_2_img?>" width=90% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center bgcolor="#e60012" height="25px">
									<font size=2 color=#ffffff>
										【SALE】<?=number_format($sale_1_discount)?>円OFF
									</font>
								</td>
								<td align=center bgcolor="#e60012">
									<font size=2 color=#ffffff>
										【SALE】<?=number_format($sale_2_discount)?>円OFF
									</font>
								</td>
							</tr>
							<tr>
								<td align=center height=60px>
									<font size=3 color=#111111>
										<?=$sale_1_ttl?>
									</font>
								</td>
								<td align=center>
									<font size=3 color=#111111>
										<?=$sale_2_ttl?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($sale_1_price)?>円
										<s><font size=3 color=#111111>
										   （<?=number_format($sale_1_text)?>円）
										</font>
										</s>
									</font>
								</td>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($sale_2_price)?>円
										<s><font size=3 color=#111111>
										   （<?=number_format($sale_2_text)?>円）
										</font>
										</s>
									</font>
								</td>
							</tr>
						<!-- 1段目 -->
						<!-- 2段目 -->
							<tr>
								<td align=center width=33%>
									<a href="<?=$sale_3_url?>">
										<img src="<?=$sale_3_img?>" width=90% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="<?=$sale_4_url?>">
										<img src="<?=$sale_4_img?>" width=90% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center bgcolor="#e60012" height="25px">
									<font size=2 color=#ffffff>
										【SALE】<?=number_format($sale_3_discount)?>円OFF
									</font>
								</td>
								<td align=center bgcolor="#e60012">
									<font size=2 color=#ffffff>
										【SALE】<?=number_format($sale_4_discount)?>円OFF
									</font>
								</td>
							</tr>
							<tr>
								<td align=center height=60px>
									<font size=3 color=#111111>
										<?=$sale_3_ttl?>
									</font>
								</td>
								<td align=center>
									<font size=3 color=#111111>
										<?=$sale_4_ttl?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($sale_3_price)?>円
										<s><font size=3 color=#111111>
										   （<?=number_format($sale_3_text)?>円）
										</font>
										</s>
									</font>
								</td>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($sale_4_price)?>円
										<s><font size=3 color=#111111>
										   （<?=number_format($sale_4_text)?>円）
										</font>
										</s>
									</font>
								</td>
							</tr>
						<!-- 2段目 -->

						<!-- 3段目 -->
							<tr>
								<td align=center width=33%>
									<a href="<?=$sale_5_url?>">
										<img src="<?=$sale_5_img?>" width=90% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="<?=$sale_4_url?>">
										<img src="<?=$sale_6_img?>" width=90% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center bgcolor="#e60012" height="25px">
									<font size=2 color=#ffffff>
										【SALE】<?=number_format($sale_5_discount)?>円OFF
									</font>
								</td>
								<td align=center bgcolor="#e60012">
									<font size=2 color=#ffffff>
										【SALE】<?=number_format($sale_6_discount)?>円OFF
									</font>
								</td>
							</tr>
							<tr>
								<td align=center height=60px>
									<font size=3 color=#111111>
										<?=$sale_5_ttl?>
									</font>
								</td>
								<td align=center>
									<font size=3 color=#111111>
										<?=$sale_6_ttl?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($sale_5_price)?>円
										<s><font size=3 color=#111111>
										   （<?=number_format($sale_5_text)?>円）
										</font>
										</s>
									</font>
								</td>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($sale_6_price)?>円
										<s><font size=3 color=#111111>
										   （<?=number_format($sale_6_text)?>円）
										</font>
										</s>
									</font>
								</td>
							</tr>
						<!-- 3段目 -->
						<!-- 4段目 -->
							<tr>
								<td align=center width=33%>
									<a href="<?=$sale_7_url?>">
										<img src="<?=$sale_7_img?>" width=90% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="<?=$sale_8_url?>">
										<img src="<?=$sale_8_img?>" width=90% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center bgcolor="#e60012" height="25px">
									<font size=2 color=#ffffff>
										【SALE】<?=number_format($sale_7_discount)?>円OFF
									</font>
								</td>
								<td align=center bgcolor="#e60012">
									<font size=2 color=#ffffff>
										【SALE】<?=number_format($sale_8_discount)?>円OFF
									</font>
								</td>
							</tr>
							<tr>
								<td align=center height=60px>
									<font size=3 color=#111111>
										<?=$sale_7_ttl?>
									</font>
								</td>
								<td align=center>
									<font size=3 color=#111111>
										<?=$sale_8_ttl?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($sale_7_price)?>円
										<s><font size=3 color=#111111>
										   （<?=number_format($sale_7_text)?>円）
										</font>
										</s>
									</font>
								</td>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($sale_8_price)?>円
										<s><font size=3 color=#111111>
										   （<?=number_format($sale_8_text)?>円）
										</font>
										</s>
									</font>
								</td>
							</tr>
						</table>
						<!-- 4段目 -->
						<br>
						<table width=640px align=center>
							<tr>
								<td align=center width=640px>
									<a href="https://search.rakuten.co.jp/search/mall/rf/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780832.gif" width=400px border=0 />
									</a>
								</td>
							</tr>
						</table>
						<br>
					</td>
				</tr>
			</table>
			<!--セール -->
			<!-- 均一 -->
			<table width=640px align=center cellspacing=0>
				<tr>
					<td bgcolor=#dcdcdc>
						<!-- 均一 -->
						<table width=640px align=center>
							<tr>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/?max=3240&min=3000&sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780867.gif" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/?max=1080&min=1000&sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780866.gif" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/?max=540&min=500&sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780865.gif" width=100% border=0>
									</a>
								</td>
							</tr>
						</table>
						<!-- 均一 -->
					</td>
				</tr>
			</table>
			<!-- 均一 -->
			<br><br>
			<!-- ブランド -->
			<table width=640px align=center cellspacing=0>
				<tr>
					<td bgcolor=#ffffff>
						<table align=center width=100% bgcolor=#333333 height=60>
							<tr align=center>
								<td>
									<font size=5 color=#ffffff>
										<b>おすすめブランド</b>
									</font>
								</td>
							</tr>
						</table>
						<table width=640px align=center>
							<tr>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%83%B4%E3%82%A3%E3%83%88%E3%83%B3/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066316128.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%B7%E3%83%A3%E3%83%8D%E3%83%AB/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066316124.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%A8%E3%83%AB%E3%83%A1%E3%82%B9/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066316127.jpg" width=100% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%B0%E3%83%83%E3%83%81/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066316126.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%B3%E3%83%BC%E3%83%81/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066316125.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%83%97%E3%83%A9%E3%83%80/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066316129.jpg" width=100% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%83%86%E3%82%A3%E3%83%95%E3%82%A1%E3%83%8B%E3%83%BC/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066433948.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%AB%E3%83%AB%E3%83%86%E3%82%A3%E3%82%A8/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066433949.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%BF%E3%82%B5%E3%82%AD/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066433951.jpg" width=100% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%83%9F%E3%82%AD%E3%83%A2%E3%83%88/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066433950.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%83%9D%E3%83%B3%E3%83%86%E3%83%B4%E3%82%A7%E3%82%AD%E3%82%AA/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066433952.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%B9%E3%82%BF%E3%83%BC%E3%82%B8%E3%83%A5%E3%82%A8%E3%83%AA%E3%83%BC/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066433953.jpg" width=100% border=0>
									</a>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<!-- ブランド -->
			<br><br>
			<!-- アイテム -->
			<table width=640px align=center cellspacing=0>
				<tr>
					<td bgcolor=#ffffff>
						<table align=center width=100% bgcolor=#333333 height=60>
							<tr align=center>
								<td>
									<font size=5 color=#ffffff>
										<b>宝石ごとにジュエリーをチェック</b>
									</font>
								</td>
							</tr>
						</table>
						<table width=640px align=center>
							<tr>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%83%80%E3%82%A4%E3%83%A4%E3%83%A2%E3%83%B3%E3%83%89/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066487910.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%B5%E3%83%95%E3%82%A1%E3%82%A4%E3%82%A2/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066487913.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%83%AB%E3%83%93%E3%83%BC/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066487912.jpg" width=100% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%A8%E3%83%A1%E3%83%A9%E3%83%AB%E3%83%89/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066487911.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%A2%E3%83%AC%E3%82%AD%E3%82%B5%E3%83%B3%E3%83%89%E3%83%A9%E3%82%A4%E3%83%88/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066488087.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%83%91%E3%83%BC%E3%83%AB%E3%80%80%E7%9C%9F%E7%8F%A0/?sid=286040&st=O">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066488088.jpg" width=100% border=0>
									</a>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<!-- アイテム -->
			<br><br>
			<!-- ジュエリーのお取り扱いについて -->
			<table width=640px align=center cellspacing=0>
				<tr>
					<td bgcolor=#ffffff>
						<table align=center width=100% bgcolor=#333333 height=60>
							<tr align=center>
								<td><font size="5" color="#ffffff"> <strong>ジュエリーのお取り扱いについて</strong></font></td>
							</tr>
						</table>
						<!-- 楽天買取 -->
						<table width=640px align=center cellspacing=0>
							<tr>
								<td bgcolor=#ffffff>
									<table width=640px align=center>
										<tr>
											<td align=center width=640px>
												<a href="https://www.rakuten.ne.jp/gold/rfstore/store_shouhin.html#7">
													<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0071210829.jpg" width=100% border=0>
												</a>
											</td>
										</tr>
										<br>
										<tr>
											<td align=center width=640px>
												<font size="3" color="#333333">
													ジュエリー商品のサイズ直しや新品仕上げを承っております。<br>
													ご希望のお客様は、ご注文時に、備考欄へ【サイズ直し希望・希望サイズ】<br>
													または【新品仕上げ希望】をご明記ください。
												</font>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!-- 楽天買取 -->
						<br>
					</td>
				</tr>
			</table>
			<!-- ジュエリーのお取り扱いについて -->
			<br><br>
			<!-- その他 -->
			<table width=640px align=center cellspacing=0>
				<tr>
					<td bgcolor=#ffffff>
						<table align=center width=100% bgcolor=#333333 height=60>
							<tr align=center>
								<td><font size="5" color="#ffffff"> <strong>その他ページのご紹介</strong> </font></td>
							</tr>
						</table>
						<!-- その他ページのご紹介 -->
						<table width=640px align=center>
							<tr>
								<td align=center width=50%>
									<a href="https://item.rakuten.co.jp/rfstore/c/0000001209/">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0071211446.jpg" width=100% height="100px" border=0>
									</a>
								   <br>
								</td>
								<td align=center width=50%>
									<a href="https://item.rakuten.co.jp/rfstore/wrapping_500/">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0071211445.jpg" width=100% height="100px" border=0>
									</a>
								   <br>
								</td>
							</tr>
							<tr>
								<td align=center width=50%>
									<a href="http://www.rakuten.ne.jp/gold/rfstore/aboutus/">
										<img src="http://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04201082/imgrc0067924792.jpg" width=100% height="100px" border=0>
									</a>
								   <br>
								</td>
								<td align=center width=50% bgcolor="#ebe8e3">
									<a href="https://www.rakuten.ne.jp/gold/rfstore/guide/returns_fitting/">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/03893662/imgrc0065248302.jpg" width=60% height="100px" border=0>
									</a>
								   <br>
								</td>
							</tr>
						</table>
						<!-- その他ページのご紹介 -->
						<!-- 楽天買取 -->
						<table width=640px align=center cellspacing=0>
							<tr>
								<td bgcolor=#ffffff>
									<table width=640px align=center>
										<tr>
											<td align=center width=640px>
												<a href="http://www.rakuten.ne.jp/gold/rfstore/kaitori/">
													<img src="http://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0066465467.jpg" width=100% border=0>
												</a>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!-- 楽天買取 -->
					</td>
				</tr>
			</table>
			<!-- その他 -->
			<br><br>
			<!-- footer -->
			<table align="center" bgcolor="#888888" width="640px">
				<tr>
					<td>
						<table align="center" width="640px">
							<tr>
								<td align=center width="48%">
									<a href="http://www.rakuten.ne.jp/gold/rfstore/">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780829.gif" width=90% border=0 />
									</a>
								</td>
								<td align=center width="48%">
									<a href="http://www.rakuten.ne.jp/gold/rfstore/sp/refasta.html">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780831.gif" width=90% border=0 />
									</a>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<table align="center" bgcolor="#333333" width="640px">
				<tr align="left">
					<td>
						<table align="center" width="640px">
							<tr>
								<td height=70px align="center">
									<br>
									<font color="#ffffff" size="5">
										<b>リファスタ 楽天市場</b>
									</font>
								</td>
							</tr>
							<tr>
								<td align="center">
									<font color="#fff" size="4">
										ラウンジデザイナーズ株式会社<br>
										〒170-0013 東京都東池袋 1丁目25-14 アルファビルディング4F<br>
										TEL：0120-980-246　MAIL：rfstore@shop.rakuten.jp<br>
										<br>
										【営業時間】<br>
										11：00～18：00（土日・祝祭日も通常営業）<br>
										※配送に限り日曜日はお休みをいただいております。
									</font>
								</td>
							</tr>
						</table>
						<br><br>
					</td>
				</tr>
			</table>
			<!-- footer -->
		</td>
	</tr>
</table>

</div><!-- end preview -->

<h2>▼HTMLをコピー</h2>
※丸々コピーしてRMSに貼り付ければOK
<textarea>

<table width=100% align=center cellspacing=0>
    <tr>
        <td bgcolor=<?=$color?>>
			<br><br>
			<!-- header -->
			<table width=640px align=center cellspacing=0>
				<tr>
					<td bgcolor=#ffffff>
						<table width=640px align=center>
							<tr>
								<td width=640px height="100px">
									<a href="https://www.rakuten.ne.jp/gold/rfstore/">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0064381975.gif" width=45% border=0><img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0064381976.jpg" width=30% border=0>
									</a>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<!-- header -->
			<!-- ポイント -->
			<table width=640px align=center cellspacing=0>
				<tr>
					<td bgcolor=#ffffff>
						<table width=640px align=center>
							<tr>
								<td colspan="3" align=center bgcolor="#333333" height="80">
									<font size=5 color=#ffffff>
										<?=$title?>
									</font>
								</td>
							</tr>
						</table>
						<table width=640px align=center>
							<tr>
								<td align=center width=640px>
									<a href="<?=$main_link?>">
										<img src="<?=$main_img?>" width=100% border=0>
									</a>
									<?if($kikaku_1_url != ''){?>
									<br><br>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%80%90iRF1%E3%80%91/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04210264/181218_ij_sale.jpg" width=95% border=0>
									</a>
									<?}?>
								</td>
							</tr>
						</table>
						<br>
						<table width=640px align=center>
							<tr>
								<td align=center width=640px>
									<a href="<?=$main_link?>">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0071292747.gif" width=320px border=0 />
									</a>
								</td>
							</tr>
						</table>
						<br>
					</td>
				</tr>
			</table>
			<!-- ポイント -->
			<br><br>
			<!-- 新着 -->
			<table width=640px align=center cellspacing=0>
				<tr>
					<td bgcolor=#ffffff>
					   	<table width=640px align=center>
							<tr>
								<td align=center width=640px>
									<a href="https://search.rakuten.co.jp/search/mall/?s=4&sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780716.jpg" width=640px border=0>
									</a>
								</td>
							</tr>
						</table>
						<!-- 1段目 -->
						<table width=640px align=center>
							<tr>
								<td align=center width=33%>
									<a href="<?=$new_1_url?>">
										<img src="<?=$new_1_img?>" width=90% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="<?=$new_2_url?>">
										<img src="<?=$new_2_img?>" width=90% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center bgcolor="#f8bb00" height="25px">
									<font size=2 color=#111111>
										<?=$new_1_text?>
									</font>
								</td>
								<td align=center bgcolor="#f8bb00">
									<font size=2 color=#111111>
										<?=$new_2_text?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center height=60px>
									<font size=3 color=#111111>
										<?=$new_1_ttl?>
									</font>
								</td>
								<td align=center>
									<font size=3 color=#111111>
										<?=$new_2_ttl?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($new_1_price)?>円
									</font>
								</td>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($new_2_price)?>円
									</font>
								</td>
							</tr>
						<!-- 1段目 -->
						<!-- 2段目 -->
							<tr>
								<td align=center width=33%>
									<a href="<?=$new_3_url?>">
										<img src="<?=$new_3_img?>" width=90% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="<?=$new_4_url?>">
										<img src="<?=$new_4_img?>" width=90% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center bgcolor="#f8bb00" height="25px">
									<font size=2 color=#111111>
										<?=$new_3_text?>
									</font>
								</td>
								<td align=center bgcolor="#f8bb00">
									<font size=2 color=#111111>
										<?=$new_4_text?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center height=60px>
									<font size=3 color=#111111>
										<?=$new_3_ttl?>
									</font>
								</td>
								<td align=center>
									<font size=3 color=#111111>
										<?=$new_4_ttl?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($new_3_price)?>円
									</font>
								</td>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($new_4_price)?>円
									</font>
								</td>
							</tr>
						<!-- 2段目 -->

						<!-- 3段目 -->
							<tr>
								<td align=center width=33%>
									<a href="<?=$new_5_url?>">
										<img src="<?=$new_5_img?>" width=90% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="<?=$new_4_url?>">
										<img src="<?=$new_6_img?>" width=90% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center bgcolor="#f8bb00" height="25px">
									<font size=2 color=#111111>
										<?=$new_5_text?>
									</font>
								</td>
								<td align=center bgcolor="#f8bb00">
									<font size=2 color=#111111>
										<?=$new_6_text?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center height=60px>
									<font size=3 color=#111111>
										<?=$new_5_ttl?>
									</font>
								</td>
								<td align=center>
									<font size=3 color=#111111>
										<?=$new_6_ttl?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($new_5_price)?>円
									</font>
								</td>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($new_6_price)?>円
									</font>
								</td>
							</tr>
						<!-- 3段目 -->
						<!-- 4段目 -->
							<tr>
								<td align=center width=33%>
									<a href="<?=$new_7_url?>">
										<img src="<?=$new_7_img?>" width=90% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="<?=$new_8_url?>">
										<img src="<?=$new_8_img?>" width=90% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center bgcolor="#f8bb00" height="25px">
									<font size=2 color=#111111>
										<?=$new_7_text?>
									</font>
								</td>
								<td align=center bgcolor="#f8bb00">
									<font size=2 color=#111111>
										<?=$new_8_text?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center height=60px>
									<font size=3 color=#111111>
										<?=$new_7_ttl?>
									</font>
								</td>
								<td align=center>
									<font size=3 color=#111111>
										<?=$new_8_ttl?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($new_7_price)?>円
									</font>
								</td>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($new_8_price)?>円
									</font>
								</td>
							</tr>
						<!-- 4段目 -->
						</table>
						<br>
						<table width=640px align=center>
							<tr>
								<td align=center width=640px>
									<a href="https://search.rakuten.co.jp/search/mall/?s=4&sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780828.gif" width=400px border=0 />
									</a>
								</td>
							</tr>
						</table>
						<br>
					</td>
				</tr>
			</table>
			<!-- 新着 -->
			<br><br>
			<!-- セール -->
			<table width=640px align=center cellspacing=0 >
				<tr>
					<td bgcolor=#ffffff>
						<table width=640px align=center>
							<tr>
								<td align=center width=640px>
									<a href="http://search.rakuten.co.jp/search/inshop-mall?f=3&v=2&sid=286040&uwd=1&s=1&p=1&sitem=RF&st=O&nitem=&min=&max=">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780717.jpg" width=640px border=0>
									</a>
								</td>
							</tr>
						</table>
						<!-- 1段目 -->
						<table width=640px align=center>
							<tr>
								<td align=center width=33%>
									<a href="<?=$sale_1_url?>">
										<img src="<?=$sale_1_img?>" width=90% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="<?=$sale_2_url?>">
										<img src="<?=$sale_2_img?>" width=90% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center bgcolor="#e60012" height="25px">
									<font size=2 color=#ffffff>
										【SALE】<?=number_format($sale_1_discount)?>円OFF
									</font>
								</td>
								<td align=center bgcolor="#e60012">
									<font size=2 color=#ffffff>
										【SALE】<?=number_format($sale_2_discount)?>円OFF
									</font>
								</td>
							</tr>
							<tr>
								<td align=center height=60px>
									<font size=3 color=#111111>
										<?=$sale_1_ttl?>
									</font>
								</td>
								<td align=center>
									<font size=3 color=#111111>
										<?=$sale_2_ttl?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($sale_1_price)?>円
										<s><font size=3 color=#111111>
										   （<?=number_format($sale_1_text)?>円）
										</font>
										</s>
									</font>
								</td>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($sale_2_price)?>円
										<s><font size=3 color=#111111>
										   （<?=number_format($sale_2_text)?>円）
										</font>
										</s>
									</font>
								</td>
							</tr>
						<!-- 1段目 -->
						<!-- 2段目 -->
							<tr>
								<td align=center width=33%>
									<a href="<?=$sale_3_url?>">
										<img src="<?=$sale_3_img?>" width=90% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="<?=$sale_4_url?>">
										<img src="<?=$sale_4_img?>" width=90% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center bgcolor="#e60012" height="25px">
									<font size=2 color=#ffffff>
										【SALE】<?=number_format($sale_3_discount)?>円OFF
									</font>
								</td>
								<td align=center bgcolor="#e60012">
									<font size=2 color=#ffffff>
										【SALE】<?=number_format($sale_4_discount)?>円OFF
									</font>
								</td>
							</tr>
							<tr>
								<td align=center height=60px>
									<font size=3 color=#111111>
										<?=$sale_3_ttl?>
									</font>
								</td>
								<td align=center>
									<font size=3 color=#111111>
										<?=$sale_4_ttl?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($sale_3_price)?>円
										<s><font size=3 color=#111111>
										   （<?=number_format($sale_3_text)?>円）
										</font>
										</s>
									</font>
								</td>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($sale_4_price)?>円
										<s><font size=3 color=#111111>
										   （<?=number_format($sale_4_text)?>円）
										</font>
										</s>
									</font>
								</td>
							</tr>
						<!-- 2段目 -->

						<!-- 3段目 -->
							<tr>
								<td align=center width=33%>
									<a href="<?=$sale_5_url?>">
										<img src="<?=$sale_5_img?>" width=90% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="<?=$sale_4_url?>">
										<img src="<?=$sale_6_img?>" width=90% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center bgcolor="#e60012" height="25px">
									<font size=2 color=#ffffff>
										【SALE】<?=number_format($sale_5_discount)?>円OFF
									</font>
								</td>
								<td align=center bgcolor="#e60012">
									<font size=2 color=#ffffff>
										【SALE】<?=number_format($sale_6_discount)?>円OFF
									</font>
								</td>
							</tr>
							<tr>
								<td align=center height=60px>
									<font size=3 color=#111111>
										<?=$sale_5_ttl?>
									</font>
								</td>
								<td align=center>
									<font size=3 color=#111111>
										<?=$sale_6_ttl?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($sale_5_price)?>円
										<s><font size=3 color=#111111>
										   （<?=number_format($sale_5_text)?>円）
										</font>
										</s>
									</font>
								</td>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($sale_6_price)?>円
										<s><font size=3 color=#111111>
										   （<?=number_format($sale_6_text)?>円）
										</font>
										</s>
									</font>
								</td>
							</tr>
						<!-- 3段目 -->
						<!-- 4段目 -->
							<tr>
								<td align=center width=33%>
									<a href="<?=$sale_7_url?>">
										<img src="<?=$sale_7_img?>" width=90% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="<?=$sale_8_url?>">
										<img src="<?=$sale_8_img?>" width=90% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center bgcolor="#e60012" height="25px">
									<font size=2 color=#ffffff>
										【SALE】<?=number_format($sale_7_discount)?>円OFF
									</font>
								</td>
								<td align=center bgcolor="#e60012">
									<font size=2 color=#ffffff>
										【SALE】<?=number_format($sale_8_discount)?>円OFF
									</font>
								</td>
							</tr>
							<tr>
								<td align=center height=60px>
									<font size=3 color=#111111>
										<?=$sale_7_ttl?>
									</font>
								</td>
								<td align=center>
									<font size=3 color=#111111>
										<?=$sale_8_ttl?>
									</font>
								</td>
							</tr>
							<tr>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($sale_7_price)?>円
										<s><font size=3 color=#111111>
										   （<?=number_format($sale_7_text)?>円）
										</font>
										</s>
									</font>
								</td>
								<td align=center>
									<font size=6 color=#e60012>
										<?=number_format($sale_8_price)?>円
										<s><font size=3 color=#111111>
										   （<?=number_format($sale_8_text)?>円）
										</font>
										</s>
									</font>
								</td>
							</tr>
						<!-- 4段目 -->
						</table>
						<br>
						<table width=640px align=center>
							<tr>

								<td align=center width=640px>
									<a href="https://search.rakuten.co.jp/search/mall/rf/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780832.gif" width=400px border=0 />
									</a>
								</td>
							</tr>
						</table>
						<br>
					</td>
				</tr>
			</table>
			<!--セール -->
			<!-- 均一 -->
			<table width=640px align=center cellspacing=0>
				<tr>
					<td bgcolor=#dcdcdc>
						<!-- 均一 -->
						<table width=640px align=center>
							<tr>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/?max=3240&min=3000&sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780867.gif" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/?max=1080&min=1000&sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780866.gif" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/?max=540&min=500&sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780865.gif" width=100% border=0>
									</a>
								</td>
							</tr>
						</table>
						<!-- 均一 -->
					</td>
				</tr>
			</table>
			<!-- 均一 -->
			<br><br>
			<!-- ブランド -->
			<table width=640px align=center cellspacing=0>
				<tr>
					<td bgcolor=#ffffff>
						<table align=center width=100% bgcolor=#333333 height=60>
							<tr align=center>
								<td>
									<font size=5 color=#ffffff>
										<b>おすすめブランド</b>
									</font>
								</td>
							</tr>
						</table>
						<table width=640px align=center>
							<tr>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%83%B4%E3%82%A3%E3%83%88%E3%83%B3/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066316128.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%B7%E3%83%A3%E3%83%8D%E3%83%AB/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066316124.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%A8%E3%83%AB%E3%83%A1%E3%82%B9/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066316127.jpg" width=100% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%B0%E3%83%83%E3%83%81/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066316126.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%B3%E3%83%BC%E3%83%81/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066316125.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%83%97%E3%83%A9%E3%83%80/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066316129.jpg" width=100% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%83%86%E3%82%A3%E3%83%95%E3%82%A1%E3%83%8B%E3%83%BC/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066433948.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%AB%E3%83%AB%E3%83%86%E3%82%A3%E3%82%A8/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066433949.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%BF%E3%82%B5%E3%82%AD/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066433951.jpg" width=100% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%83%9F%E3%82%AD%E3%83%A2%E3%83%88/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066433950.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%83%9D%E3%83%B3%E3%83%86%E3%83%B4%E3%82%A7%E3%82%AD%E3%82%AA/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066433952.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%B9%E3%82%BF%E3%83%BC%E3%82%B8%E3%83%A5%E3%82%A8%E3%83%AA%E3%83%BC/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066433953.jpg" width=100% border=0>
									</a>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<!-- ブランド -->
			<br><br>
			<!-- アイテム -->
			<table width=640px align=center cellspacing=0>
				<tr>
					<td bgcolor=#ffffff>
						<table align=center width=100% bgcolor=#333333 height=60>
							<tr align=center>
								<td>
									<font size=5 color=#ffffff>
										<b>宝石ごとにジュエリーをチェック</b>
									</font>
								</td>
							</tr>
						</table>
						<table width=640px align=center>
							<tr>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%83%80%E3%82%A4%E3%83%A4%E3%83%A2%E3%83%B3%E3%83%89/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066487910.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%B5%E3%83%95%E3%82%A1%E3%82%A4%E3%82%A2/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066487913.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%83%AB%E3%83%93%E3%83%BC/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066487912.jpg" width=100% border=0>
									</a>
								</td>
							</tr>
							<tr>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%A8%E3%83%A1%E3%83%A9%E3%83%AB%E3%83%89/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066487911.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%82%A2%E3%83%AC%E3%82%AD%E3%82%B5%E3%83%B3%E3%83%89%E3%83%A9%E3%82%A4%E3%83%88/?sid=286040">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066488087.jpg" width=100% border=0>
									</a>
								</td>
								<td align=center width=33%>
									<a href="https://search.rakuten.co.jp/search/mall/%E3%83%91%E3%83%BC%E3%83%AB%E3%80%80%E7%9C%9F%E7%8F%A0/?sid=286040&st=O">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/category/imgrc0066488088.jpg" width=100% border=0>
									</a>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<!-- アイテム -->
			<br><br>
			<!-- ジュエリーのお取り扱いについて -->
			<table width=640px align=center cellspacing=0>
				<tr>
					<td bgcolor=#ffffff>
						<table align=center width=100% bgcolor=#333333 height=60>
							<tr align=center>
								<td><font size="5" color="#ffffff"> <strong>ジュエリーのお取り扱いについて</strong></font></td>
							</tr>
						</table>
						<!-- 楽天買取 -->
						<table width=640px align=center cellspacing=0>
							<tr>
								<td bgcolor=#ffffff>
									<table width=640px align=center>
										<tr>
											<td align=center width=640px>
												<a href="https://www.rakuten.ne.jp/gold/rfstore/store_shouhin.html#7">
													<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0071210829.jpg" width=100% border=0>
												</a>
											</td>
										</tr>
										<br>
										<tr>
											<td align=center width=640px>
												<font size="3" color="#333333">
													ジュエリー商品のサイズ直しや新品仕上げを承っております。<br>
													ご希望のお客様は、ご注文時に、備考欄へ【サイズ直し希望・希望サイズ】<br>
													または【新品仕上げ希望】をご明記ください。
												</font>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!-- 楽天買取 -->
						<br>
					</td>
				</tr>
			</table>
			<!-- ジュエリーのお取り扱いについて -->
			<br><br>
			<!-- その他 -->
			<table width=640px align=center cellspacing=0>
				<tr>
					<td bgcolor=#ffffff>
						<table align=center width=100% bgcolor=#333333 height=60>
							<tr align=center>
								<td><font size="5" color="#ffffff"> <strong>その他ページのご紹介</strong> </font></td>
							</tr>
						</table>
						<!-- その他ページのご紹介 -->
						<table width=640px align=center>
							<tr>
								<td align=center width=50%>
									<a href="https://item.rakuten.co.jp/rfstore/c/0000001209/">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0071211446.jpg" width=100% height="100px" border=0>
									</a>
								   <br>
								</td>
								<td align=center width=50%>
									<a href="https://item.rakuten.co.jp/rfstore/wrapping_500/">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0071211445.jpg" width=100% height="100px" border=0>
									</a>
								   <br>
								</td>
							</tr>
							<tr>
								<td align=center width=50%>
									<a href="http://www.rakuten.ne.jp/gold/rfstore/aboutus/">
										<img src="http://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04201082/imgrc0067924792.jpg" width=100% height="100px" border=0>
									</a>
								   <br>
								</td>
								<td align=center width=50% bgcolor="#ebe8e3">
									<a href="https://www.rakuten.ne.jp/gold/rfstore/guide/returns_fitting/">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/03893662/imgrc0065248302.jpg" width=60% height="100px" border=0>
									</a>
								   <br>
								</td>
							</tr>
						</table>
						<!-- その他ページのご紹介 -->
						<!-- 楽天買取 -->
						<table width=640px align=center cellspacing=0>
							<tr>
								<td bgcolor=#ffffff>
									<table width=640px align=center>
										<tr>
											<td align=center width=640px>
												<a href="http://www.rakuten.ne.jp/gold/rfstore/kaitori/">
													<img src="http://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0066465467.jpg" width=100% border=0>
												</a>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						<!-- 楽天買取 -->
					</td>
				</tr>
			</table>
			<!-- その他 -->
			<br><br>
			<!-- footer -->
			<table align="center" bgcolor="#888888" width="640px">
				<tr>
					<td>
						<table align="center" width="640px">
							<tr>
								<td align=center width="48%">
									<a href="http://www.rakuten.ne.jp/gold/rfstore/">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780829.gif" width=90% border=0 />
									</a>
								</td>
								<td align=center width="48%">
									<a href="http://www.rakuten.ne.jp/gold/rfstore/sp/refasta.html">
										<img src="https://image.rakuten.co.jp/rfstore/cabinet/raku_kikaku/04075637/imgrc0068780831.gif" width=90% border=0 />
									</a>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<table align="center" bgcolor="#333333" width="640px">
				<tr align="left">
					<td>
						<table align="center" width="640px">
							<tr>
								<td height=70px align="center">
									<br>
									<font color="#ffffff" size="5">
										<b>リファスタ 楽天市場</b>
									</font>
								</td>
							</tr>
							<tr>
								<td align="center">
									<font color="#fff" size="4">
										ラウンジデザイナーズ株式会社<br>
										〒170-0013 東京都東池袋 1丁目25-14 アルファビルディング4F<br>
										TEL：0120-980-246　MAIL：rfstore@shop.rakuten.jp<br>
										<br>
										【営業時間】<br>
										11：00～18：00（土日・祝祭日も通常営業）<br>
										※配送に限り日曜日はお休みをいただいております。
									</font>
								</td>
							</tr>
						</table>
						<br><br>
					</td>
				</tr>
			</table>
			<!-- footer -->
		</td>
	</tr>
</table>


</textarea>


</div><!-- end main -->

</body>
</html>

<style type="text/css">
	#main {
		width: 700px;
		margin: 0 auto;
		padding-bottom: 100px;
	}
	#preview {
		height: 600px;
		overflow-y: scroll;
	}
	textarea {
		display: block;
		width: 100%;
		height: 500px;
	}
</style>
