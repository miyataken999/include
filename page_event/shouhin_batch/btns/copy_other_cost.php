<?
$sql = "UPDATE shouhin_batch AS a,shouhin AS b SET a.other_cost = b.other_cost WHERE a.product_id = b.product_id";
CustomQuery($sql);
