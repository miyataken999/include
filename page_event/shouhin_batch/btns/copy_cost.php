<?
$sql = "UPDATE shouhin_batch AS a,shouhin AS b SET a.cost = b.cost WHERE a.product_id = b.product_id";
CustomQuery($sql);
