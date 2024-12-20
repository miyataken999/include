<?
$sql = "UPDATE shouhin_batch AS a,shouhin AS b SET a.identification_cost = b.identification_cost WHERE a.product_id = b.product_id";
CustomQuery($sql);
