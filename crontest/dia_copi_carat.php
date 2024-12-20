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

exit();

/*---------------------------------------------------------------


---------------------------------------------------------------*/


ini_set("display_errors",1);

include $_SERVER["DOCUMENT_ROOT"]."/include/connection.php";


$target_table = "shouhin";

$query ="SELECT
-- COUNT(`APP_UID`) as `aaa`,
`DA_WEIGHT`,
`DA_MANAGEMENTNO`
FROM PMT_EV001
WHERE `status` != '131'
limit 400, 3000
";


mysql_query('SET NAMES utf8');
try {
	$sql = mysql_query($query);
} catch (Exception $e) {
	print "aaaaaaaaaa".$e->getMessage();
	exit();
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
	Parent_stone = '{$DA_WEIGHT}'
	where yahoo_sinaban='{$DA_MANAGEMENTNO}'
	limit 1
	";



	print $up_q."<br>";
	// print $aaa."<br><br>";

	// exit();

	try {
		mysql_query($up_q);
	} catch (Exception $e) {
		print $e->getMessage();
		exit();
	}

	sleep(2);
}

?>
完了しました。
</body>
</html>
