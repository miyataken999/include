<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ja" xml:lang="ja" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>ハイシューカＡＰＩテスト用</title>
	</head>
	<body>
		<form action="index.php" name="userinfoForm" method="post" >
			名前<input type="text" name="username" value="<?php echo $Name; ?>"/><br />
			カナ名<input type="text" name="furikana" value="<?php echo $KanaName; ?>"/><br />
			郵便番号<input type="text" name="zipcode" value="<?php echo $ZipCode; ?>" SIZE="80"  /><br />
都道府県<select name="prefectures" id="prefectures">
<option value=""  <?php if ($Prefectures == "") { echo "selected=\"selected\""; } ?>>都道府県を選択</option>
<option value="北海道" <?php if ($Prefectures == "北海道") { echo "selected=\"selected\""; } ?>>北海道</option>
<option value="青森県" <?php if ($Prefectures == "青森県") { echo "selected=\"selected\""; } ?>>青森県</option>
<option value="岩手県" <?php if ($Prefectures == "岩手県") { echo "selected=\"selected\""; } ?>>岩手県</option>
<option value="宮城県" <?php if ($Prefectures == "宮城県") { echo "selected=\"selected\""; } ?>>宮城県</option>
<option value="秋田県" <?php if ($Prefectures == "秋田県") { echo "selected=\"selected\""; } ?>>秋田県</option>
<option value="山形県" <?php if ($Prefectures == "山形県") { echo "selected=\"selected\""; } ?>>山形県</option>
<option value="福島県" <?php if ($Prefectures == "福島県") { echo "selected=\"selected\""; } ?>>福島県</option>
<option value="茨城県" <?php if ($Prefectures == "茨城県") { echo "selected=\"selected\""; } ?>>茨城県</option>
<option value="栃木県" <?php if ($Prefectures == "栃木県") { echo "selected=\"selected\""; } ?>>栃木県</option>
<option value="群馬県" <?php if ($Prefectures == "群馬県") { echo "selected=\"selected\""; } ?>>群馬県</option>
<option value="埼玉県" <?php if ($Prefectures == "埼玉県") { echo "selected=\"selected\""; } ?>>埼玉県</option>
<option value="千葉県" <?php if ($Prefectures == "千葉県") { echo "selected=\"selected\""; } ?>>千葉県</option>
<option value="東京都" <?php if ($Prefectures == "東京都") { echo "selected=\"selected\""; } ?>>東京都</option>
<option value="神奈川県" <?php if ($Prefectures == "神奈川県") { echo "selected=\"selected\""; } ?>>神奈川県</option>
<option value="新潟県" <?php if ($Prefectures == "新潟県") { echo "selected=\"selected\""; } ?>>新潟県</option>
<option value="富山県" <?php if ($Prefectures == "富山県") { echo "selected=\"selected\""; } ?>>富山県</option>
<option value="石川県" <?php if ($Prefectures == "石川県") { echo "selected=\"selected\""; } ?>>石川県</option>
<option value="福井県" <?php if ($Prefectures == "福井県") { echo "selected=\"selected\""; } ?>>福井県</option>
<option value="山梨県" <?php if ($Prefectures == "山梨県") { echo "selected=\"selected\""; } ?>>山梨県</option>
<option value="長野県" <?php if ($Prefectures == "長野県") { echo "selected=\"selected\""; } ?>>長野県</option>
<option value="岐阜県" <?php if ($Prefectures == "岐阜県") { echo "selected=\"selected\""; } ?>>岐阜県</option>
<option value="静岡県" <?php if ($Prefectures == "静岡県") { echo "selected=\"selected\""; } ?>>静岡県</option>
<option value="愛知県" <?php if ($Prefectures == "愛知県") { echo "selected=\"selected\""; } ?>>愛知県</option>
<option value="三重県" <?php if ($Prefectures == "三重県") { echo "selected=\"selected\""; } ?>>三重県</option>
<option value="滋賀県" <?php if ($Prefectures == "滋賀県") { echo "selected=\"selected\""; } ?>>滋賀県</option>
<option value="京都府" <?php if ($Prefectures == "京都府") { echo "selected=\"selected\""; } ?>>京都府</option>
<option value="大阪府" <?php if ($Prefectures == "大阪府") { echo "selected=\"selected\""; } ?>>大阪府</option>
<option value="兵庫県" <?php if ($Prefectures == "兵庫県") { echo "selected=\"selected\""; } ?>>兵庫県</option>
<option value="奈良県" <?php if ($Prefectures == "奈良県") { echo "selected=\"selected\""; } ?>>奈良県</option>
<option value="和歌山県" <?php if ($Prefectures == "和歌山県") { echo "selected=\"selected\""; } ?>>和歌山県</option>
<option value="鳥取県" <?php if ($Prefectures == "鳥取県") { echo "selected=\"selected\""; } ?>>鳥取県</option>
<option value="島根県" <?php if ($Prefectures == "島根県") { echo "selected=\"selected\""; } ?>>島根県</option>
<option value="岡山県" <?php if ($Prefectures == "岡山県") { echo "selected=\"selected\""; } ?>>岡山県</option>
<option value="広島県" <?php if ($Prefectures == "広島県") { echo "selected=\"selected\""; } ?>>広島県</option>
<option value="山口県" <?php if ($Prefectures == "山口県") { echo "selected=\"selected\""; } ?>>山口県</option>
<option value="徳島県" <?php if ($Prefectures == "徳島県") { echo "selected=\"selected\""; } ?>>徳島県</option>
<option value="香川県" <?php if ($Prefectures == "香川県") { echo "selected=\"selected\""; } ?>>香川県</option>
<option value="愛媛県" <?php if ($Prefectures == "愛媛県") { echo "selected=\"selected\""; } ?>>愛媛県</option>
<option value="高知県" <?php if ($Prefectures == "高知県") { echo "selected=\"selected\""; } ?>>高知県</option>
<option value="福岡県" <?php if ($Prefectures == "福岡県") { echo "selected=\"selected\""; } ?>>福岡県</option>
<option value="佐賀県" <?php if ($Prefectures == "佐賀県") { echo "selected=\"selected\""; } ?>>佐賀県</option>
<option value="長崎県" <?php if ($Prefectures == "長崎県") { echo "selected=\"selected\""; } ?>>長崎県</option>
<option value="熊本県" <?php if ($Prefectures == "熊本県") { echo "selected=\"selected\""; } ?>>熊本県</option>
<option value="大分県" <?php if ($Prefectures == "大分県") { echo "selected=\"selected\""; } ?>>大分県</option>
<option value="宮城県" <?php if ($Prefectures == "宮崎県") { echo "selected=\"selected\""; } ?>>宮崎県</option>
<option value="鹿児島県" <?php if ($Prefectures == "鹿児島県") { echo "selected=\"selected\""; } ?>>鹿児島県</option>
<option value="沖縄県" <?php if ($Prefectures == "沖縄県") { echo "selected=\"selected\""; } ?>>沖縄県</option>
<option value="ねこ" <?php if ($Prefectures == "ねこ") { echo "selected=\"selected\""; } ?>>ねこ</option>
</select><br />
			住所１<input type="text" name="address1" value="<?php echo $Address1; ?>" SIZE="80"  /><br />
			住所２<input type="text" name="address2" value="<?php echo $Address2; ?>" SIZE="80"  /><br />
			電話番号<input type="text" name="tel" value="<?php echo $Tel; ?>" SIZE="80"  /><br />
			運送会社<input type="text" name="deliverycompanycode" value="<?php echo $TransPoter; ?>" SIZE="80"  /><br />
			集荷希望日<input type="text" name="collectdate" value="<?php echo $RequestDate; ?>" SIZE="80"  /><br />
			集荷希望時間<select name="collecttime" id="collecttime">
<option value="09-12" <?php if ($RequestTime == "09-12") { echo "selected=\"selected\""; } ?>>午前中</option>
<option value="9-10" <?php if ($RequestTime == "9-10") { echo "selected=\"selected\""; } ?>>9時～10時</option>
<option value="12-14" <?php if ($RequestTime == "12-14") { echo "selected=\"selected\""; } ?>>12時～14時</option>
<option value="13-15" <?php if ($RequestTime == "13-15") { echo "selected=\"selected\""; } ?>>13時～15時</option>
<option value="14-16" <?php if ($RequestTime == "14-16") { echo "selected=\"selected\""; } ?>>14時～16時</option>
<option value="16-18" <?php if ($RequestTime == "16-18") { echo "selected=\"selected\""; } ?>>16時～18時</option>
<option value="18-21" <?php if ($RequestTime == "18-21") { echo "selected=\"selected\""; } ?>>18時～21時</option>
</select><br />
			メール<input type="text" name="email" value="<?php echo $Mail; ?>" SIZE="80"  /><br />
			箱数<input type="text" name="packnum" value="<?php echo $BuggNum; ?>" SIZE="80"  /><br />
			送料支払区分<input type="text" name="voucherflg" value="<?php echo $Payment; ?>" SIZE="80"  /><br />
			荷物種類<input type="text" name="baggage-type" value="<?php echo $BuggName; ?>" SIZE="80"  /><br />
			梱包資材<input type="text" name="package" value="<?php echo $ItemCode; ?>" SIZE="80"  /><br />
			メモ<input type="text" name="note" value="<?php echo $Memo; ?>" SIZE="80"  /><br />
			依頼番号<input type="text" name="requestno" value="<?php echo $RequestNo; ?>" SIZE="80"  /><br />
			<input type="submit"  name="regist"  value="新規" />
			<input type="submit"  name="update"  value="変更" />
			<input type="submit"  name="stop"  value="停止" />
			<input type="submit"  name="restart"  value="再開" />
			<input type="submit"  name="list"  value="一覧" />
			<input type="submit"  name="address"  value="住所" />
			<input type="submit"  name="check"  value="入力チェック" />
		</form>
		結果<br />
		<pre>
		<?php echo print_r($Response, true); ?>
		<?php echo print_r(json_decode($Response), true); ?>
		</pre>
		</body>
</html>
