<?
$sql = "UPDATE shouhin_batch AS a,shouhin AS b SET a.product_num = b.product_num WHERE a.product_id = b.product_id";
CustomQuery($sql);
