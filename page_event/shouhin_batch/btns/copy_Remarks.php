<?
$sql = "UPDATE shouhin_batch AS a,shouhin AS b SET a.Remarks = b.Remarks WHERE a.product_id = b.product_id";
CustomQuery($sql);

