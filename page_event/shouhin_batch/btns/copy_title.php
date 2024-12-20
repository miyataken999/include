<?
$sql = "UPDATE shouhin_batch AS a,shouhin AS b SET a.title = b.title WHERE a.product_id = b.product_id";
CustomQuery($sql);

