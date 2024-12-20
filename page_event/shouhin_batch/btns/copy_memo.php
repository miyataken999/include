<?
$sql = "UPDATE shouhin_batch AS a,shouhin AS b SET a.memo = b.description WHERE a.product_id = b.product_id";
CustomQuery($sql);

