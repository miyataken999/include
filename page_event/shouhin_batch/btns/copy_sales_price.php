<?
$sql = "UPDATE shouhin_batch AS a,shouhin AS b SET a.sales_price = b.sales_price WHERE a.product_id = b.product_id";
CustomQuery($sql);

