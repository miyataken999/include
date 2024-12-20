<?
$sql = "UPDATE shouhin_batch AS a,shouhin AS b SET a.nyuukin_price = b.nyuukin_price WHERE a.product_id = b.product_id";
CustomQuery($sql);

