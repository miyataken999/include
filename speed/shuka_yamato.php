<div class="main_column">

<h1>【ヤマト運輸】<?=$title_text?></h1>

<?
if (strtotime(date('H:i:s')) > strtotime('14:00:00')) {
?>
<div class="keikoku">(！)14時を越えているため当日集荷依頼は出来ません</div>
<?
}
?>

<form action="<?=$action?>.php" method="post" id="shuka_form" class="yamato">

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
		<input type="text" name="<?=$name?>" id="<?=$name?>" value="<?=$user_name?>">
	</div>

	<?$name = 'furikana';?>
	<div class="row">
		<div class="input_ttl">フリガナ(※全角)</div>
		<input type="text" name="<?=$name?>" id="<?=$name?>" value="<?=$user_name_kana?>">
	</div>

	<?$name = 'zipcode';?>
	<div class="row">
		<div class="input_ttl">郵便番号(※ハイフンなし)</div>
		<input type="text" name="<?=$name?>" value="<?=$user_yuubinn?>">
	</div>

	<?$name = 'prefectures';?>
	<div class="row">
		<div class="input_ttl">都道府県</div>
		<input type="text" name="<?=$name?>" value="<?=$user_todou?>">
	</div>

	<?$name = 'address1';?>
	<div class="row">
		<div class="input_ttl">住所1(※全角／20文字以内)</div>
		<span class="count_<?=$name?>"></span>/20文字　<span class="alert_<?=$name?>"></span>
		<input type="text" name="<?=$name?>" id="<?=$name?>" value="<?=$user_sikutyouson?>">
	</div>

	<?$name = 'address2';?>
	<div class="row">
		<div class="input_ttl">住所2(※全角／20文字以内)</div>
		<span class="count_<?=$name?>"></span>/20文字　<span class="alert_<?=$name?>"></span>
		<input type="text" name="<?=$name?>" id="<?=$name?>" value="<?=$user_banti?>">
	</div>

	<?$name = 'tel';?>
	<div class="row">
		<div class="input_ttl">電話番号(※ハイフンあり)</div>
		<input type="text" name="<?=$name?>" value="<?=$tel_res?>">
	</div>

	<?$name = 'email';?>
	<div class="row">
		<div class="input_ttl">メールアドレス(※半角)</div>
		<input type="text" name="<?=$name?>" value="<?=$user_mail?>">
	</div>

	<?$name = 'deliverycompanycode';?>
	<div class="row">
		<div class="input_ttl">配送業者</div>
		<select name="<?=$name?>">
			<option value="yamato">ヤマト運輸</option>
			<option value="sagawa">佐川急便</option>
		</select>
	</div>

	<?$name = 'collectdate';?>
	<div class="row">
		<div class="input_ttl">集荷希望日※当日集荷14時まで！！※</div>
		<div class="sup_text">日付の入力形式例) 2018-12-03</div>
		<input type="text" name="<?=$name?>" value="<?=$speed_date?>">
	</div>
<!-- 	<?$date = date("Y-m-d"); print $date;?> -->

	<?$name = 'collecttime';?>
	<div class="row">
		<div class="input_ttl">集荷希望時間※当日集荷14時まで！！※</div>
		<div class="sup_text">※集荷希望時間対応表参照</div>

		 <?if($speed_time != "18-21"){?>
			<div class="touzitsu" style="width:97%;">当日集荷は『18-21時(最終枠)』のみです！<br>
			それ以外の当日集荷は電話で対応してください。</div>
		 <?}?>

		<select name="<?=$name?>">
			<option value="09-12" <?if($speed_time == "09-12"){?>selected<?}?>>09-12(午前中)</option>
			<option value="12-14" <?if($speed_time == "12-14"){?>selected<?}?>>12-14時</option>
			<option value="14-16" <?if($speed_time == "14-16"){?>selected<?}?>>14-16時</option>
			<option value="16-18" <?if($speed_time == "16-18"){?>selected<?}?>>16-18時</option>
			<option value="18-21" <?if($speed_time == "18-21"){?>selected<?}?>>18-21(最終枠)</option>
		</select>
	</div>

	<?$name = 'packnum';?>
	<div class="row">
		<div class="input_ttl">集荷予定個数</div>
		<input type="text" name="<?=$name?>" value="<?=$speed_box?>">
	</div>

	<?$name = 'voucherflg';?>
	<div class="row">
		<div class="input_ttl">伝票タイプ</div>
		<select name="<?=$name?>">
			<option value="0601">着払い(ヤマト)</option>
			<option value="2">着払い(佐川)</option>
		</select>
	</div>

	<?$name = 'baggage-type';?>
	<div class="row">
		<div class="input_ttl">種類</div>
		<input type="text" name="<?=$name?>" value="壊れ物">
	</div>

	<?$name = 'package';?>
	<input type="hidden" name="<?=$name?>" value="">

	<?$name = 'note';?>
	<div class="row">
		<div class="input_ttl">ドライバーへのメッセージ(※15文字以内)</div>
		<span class="count_<?=$name?>"></span>/15文字　<span class="alert_<?=$name?>"></span>
		<input type="text" name="<?=$name?>" id="<?=$name?>" value="集荷未達時届け先ＴＥＬに要連絡">
	</div>
</form>

	<input type="submit" name="<?=$submit_name?>" value="<?=$submit_text?>" id="submit_btn" form="shuka_form">

<div id="shuka_time">
	<div class="touzitsu">
		<h3>(!)当日集荷について</h3>
		当日集荷は『18-21』しか選択できません！<br>
		<span>それ以外の当日集荷は電話で対応してください。</span>
	</div>

	<h3>集荷希望時間対応表</h3>
	<div>※近い時間帯に自動変換</div>
	<table>
		<tr>
			<th>買取サイト側<br><span>(18/12/04時点)</span></th><th>集荷依頼システム側<br><span>(手入力の際はこちらを入力)</span></th>
		</tr>
		<tr>
			<td>午前中</td><td>09-12</td>
		</tr>
		<tr>
			<td>13～15時</td><td>12-14</td>
		</tr>
		<tr>
			<td>15～17時</td><td>14-16</td>
		</tr>
		<tr>
			<td>17～19時</td><td>16-18</td>
		</tr>
		<tr>
			<td>最終枠</td><td>18-21</td>
		</tr>
	</table>
</div>


</div><!-- end main_column -->
