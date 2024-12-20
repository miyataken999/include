<?
$sql = "UPDATE shouhin_batch AS a,shouhin AS b SET a.satei_by = b.satei_by WHERE a.product_id = b.product_id";
CustomQuery($sql);
