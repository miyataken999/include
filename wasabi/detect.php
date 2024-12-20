<?
$ary[] = 'ISO-8859-1';
$ary[] = 'ASCII';
$ary[] = 'JIS';
$ary[] = 'EUC-JP';
print mb_detect_encoding($_GET["detectInput"],$ary);
?>
