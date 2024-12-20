<?
$sql = "UPDATE shouhin_batch AS a,shouhin AS b SET a.price = b.price WHERE a.product_id = b.product_id";
CustomQuery($sql);

