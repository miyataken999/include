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

紐づけ終わるまで、強制ストップ中

---------------------------------------------------------------*/

exit();



ini_set("display_errors",1);

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";


$target_table = "shouhin_copy_kinsa_test_copy";

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
FROM {$target_table} as s JOIN PMT_EV001 as p ON s.yahoo_sinaban=p.DA_MANAGEMENTNO
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
	";



	// print $up_q."<br><br>";
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
