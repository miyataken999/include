<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php


/*---------------------------------------------------------------


---------------------------------------------------------------*/

exit();



ini_set("display_errors",1);

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";


$target_table = "shouhin";

$query ="SELECT
s.`product_id` ,
p.`DA_COMMENTSANDTOTAL` ,
p.`DA_WEIGHT` ,
p.`DA_PER_CARAT` ,
p.`DA_SHAPE` ,
p.`DA_SELFGRES` ,
p.`DA_ORIGINALGRADEMLIKENED` ,
p.`DA_SUGARCANE` ,
p.`DA_RAPA` ,
p.`DA_INTENSITY` ,
p.`DA_OVERTONE` ,
p.`DA_COLOR` ,
p.`DA_CLARITY` ,
p.`DA_CUT` ,
p.`DA_POLISH` ,
p.`DA_SYMMETRY` ,
p.`DA_FLUO` ,
p.`DA_COLOR_FLUO` ,
p.`DA_WIDE` ,
p.`DA_HIGH` ,
p.`DA_DEPTH` ,
p.`DA_APPRAISER` ,
p.`DA_FRAPA` ,
p.`DA_RATE` ,
p.`DA_UNIT_PRICE_UNPLUG` ,
p.`DA_YOURNAME` ,
p.`DA_RAPAB` ,
p.`DA_GROSSPROFIT` ,
p.`DA_INTEREST_1` ,
p.`DA_no` ,
p.`DA_MANAGEMENTNO`
-- FROM {$target_table} as s JOIN PMT_EV001 as p ON s.yahoo_sinaban=p.DA_MANAGEMENTNO
FROM PMT_EV001 as p JOIN {$target_table} as s ON p.DA_MANAGEMENTNO=s.yahoo_sinaban
WHERE p.status != '131'
-- limit 100
-- where s.yahoo_sinaban <> p.DA_MANAGEMENTNO
";


mysql_query('SET NAMES utf8');
try {
	$sql = mysql_query($query);
} catch (Exception $e) {
	print "aaaaaaaaaa".$e->getMessage();
}
while ($res = mysql_fetch_assoc($sql)) {
	foreach ($res as $key => $value) {
		$value = str_replace("'","’",$value);
		$value = str_replace("\"","”",$value);
		$$key = $value;
	}
	if($DA_MANAGEMENTNO == ''){
		continue;
	}



	if($DA_APPRAISER == 'CGL'){
		$DA_APPRAISER = '中央宝石研究所ソーティング';
	}elseif($DA_APPRAISER == 'GCC'){
		$DA_APPRAISER = 'ジェムクリニックセンター';
	}elseif($DA_APPRAISER == 'GRJ'){
		$DA_APPRAISER = 'ジェムリサーチジャパン';
	}elseif($DA_APPRAISER == 'GRL'){
		$DA_APPRAISER = 'ジェム･リサーチ･ラボラトリー';
	}elseif($DA_APPRAISER == 'GRS'){
		$DA_APPRAISER = 'ジェムリサーチスイスラボ';
	}elseif($DA_APPRAISER == 'IGI'){
		$DA_APPRAISER = 'IGI';
	}elseif($DA_APPRAISER == 'GDC'){
		$DA_APPRAISER = '';
	}elseif($DA_APPRAISER == 'GJI'){
		$DA_APPRAISER = '';
	}elseif($DA_APPRAISER == 'JGA'){
		$DA_APPRAISER = '日本宝石学協会';
	}elseif($DA_APPRAISER == 'GGC'){
		$DA_APPRAISER = '';
	}elseif($DA_APPRAISER == 'GTC'){
		$DA_APPRAISER = '日本ジェムテイスティングセンター';
	}elseif($DA_APPRAISER == 'GIA'){
		$DA_APPRAISER = 'GIA';
	}elseif($DA_APPRAISER == 'JGA'){
		$DA_APPRAISER = 'ジャパン ジェム アプレイザル';
	}elseif($DA_APPRAISER == 'TGL'){
		$DA_APPRAISER = '';
	}elseif($DA_APPRAISER == 'JTL'){
		$DA_APPRAISER = 'ジュエルトレーディングラボラトリー';
	}elseif($DA_APPRAISER == 'MGTC'){
		$DA_APPRAISER = 'メトロ宝石鑑別センター';
	}elseif($DA_APPRAISER == 'NGL'){
		$DA_APPRAISER = '日本彩珠宝石研究所';
	}elseif($DA_APPRAISER == 'JGL'){
		$DA_APPRAISER = 'ジャパン テクニカル ジェム ラボラトリー東京';
	}elseif($DA_APPRAISER == 'TDC'){
		$DA_APPRAISER = 'ティファニー・ダイヤモンドCertificate';
	}elseif($DA_APPRAISER == 'TJAS'){
		$DA_APPRAISER = '東京宝石科学アカデミー';
	}elseif($DA_APPRAISER == 'UGL'){
		$DA_APPRAISER = 'ユニバーサルジェムラボラトリー';
	}elseif($DA_APPRAISER == 'GAAJ'){
		$DA_APPRAISER = '全国宝石学協会';
	}elseif($DA_APPRAISER == 'C鑑'){
		$DA_APPRAISER = '中央宝石研究所';
	}elseif($DA_APPRAISER == 'AGT'){
		$DA_APPRAISER = 'AGTジェムラボラトリー';
	}elseif($DA_APPRAISER == 'Other'){
		$DA_APPRAISER = '';
	}elseif($DA_APPRAISER == 'GGC'){
		$DA_APPRAISER = '';
	}elseif($DA_APPRAISER == 'AGL'){
		$DA_APPRAISER = 'AGL/宝石鑑別団体協議会';
	}elseif($DA_APPRAISER == 'AIGS'){
		$DA_APPRAISER = 'AIGS';
	}elseif($DA_APPRAISER == 'DGL'){
		$DA_APPRAISER = 'DGL/ダイヤモンドグレーディングラボラトリー';
	}else{
		$DA_APPRAISER = '';
	}
	$DA_APPRAISER = str_replace("'","’",$DA_APPRAISER);
	$DA_APPRAISER = str_replace("\"","”",$DA_APPRAISER);


	$up_q = "UPDATE {$target_table} SET
	Remarks = '{$DA_COMMENTSANDTOTAL}' ,
	Gram = '{$DA_WEIGHT}' ,
	unit = 'ct' ,
	DA_PER_CARAT = '{$DA_PER_CARAT}' ,
	DA_SHAPE = '{$DA_SHAPE}' ,
	DA_SELFGRES = '{$DA_SELFGRES}' ,
	DA_ORIGINALGRADEMLIKENED = '{$DA_ORIGINALGRADEMLIKENED}' ,
	DA_SUGARCANE = '{$DA_SUGARCANE}' ,
	DA_RAPA = '{$DA_RAPA}' ,
	DA_INTENSITY = '{$DA_INTENSITY}' ,
	DA_OVERTONE = '{$DA_OVERTONE}' ,
	DA_COLOR = '{$DA_COLOR}' ,
	DA_CLARITY = '{$DA_CLARITY}' ,
	DA_CUT = '{$DA_CUT}' ,
	DA_POLISH = '{$DA_POLISH}' ,
	DA_SYMMETRY = '{$DA_SYMMETRY}' ,
	DA_FLUO = '{$DA_FLUO}' ,
	DA_COLOR_FLUO = '{$DA_COLOR_FLUO}' ,
	DA_WIDE = '{$DA_WIDE}' ,
	DA_HIGH = '{$DA_HIGH}' ,
	DA_DEPTH = '{$DA_DEPTH}' ,
	Appraiser = '{$DA_APPRAISER}' ,
	DA_FRAPA = '{$DA_FRAPA}' ,
	DA_RATE = '{$DA_RATE}' ,
	DA_UNIT_PRICE_UNPLUG = '{$DA_UNIT_PRICE_UNPLUG}' ,
	DA_YOURNAME = '{$DA_YOURNAME}' ,
	DA_RAPAB = '{$DA_RAPAB}' ,
	DA_GROSSPROFIT = '{$DA_GROSSPROFIT}' ,
	DA_INTEREST_1 = '{$DA_INTEREST_1}' ,
	serial_number = '{$DA_no}'
	where yahoo_sinaban='{$DA_MANAGEMENTNO}'
	limit 1
	";



	// print $up_q."<br><br>";
	// exit();

	try {
		mysql_query($up_q);
	} catch (Exception $e) {
		print $e->getMessage();
		exit();
	}


}

?>
完了しました。
</body>
</html>
