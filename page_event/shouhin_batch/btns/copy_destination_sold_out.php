<?
$sql = "UPDATE shouhin_batch AS a,shouhin AS b SET a.destination_sold_out = b.destination_sold_out WHERE a.product_id = b.product_id";
CustomQuery($sql);
