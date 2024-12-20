<?
$sql = "UPDATE shouhin_batch AS a,shouhin AS b SET a.category_id = b.category_id , a.sub_category_id1 = b.sub_category_id1 WHERE a.product_id = b.product_id";
CustomQuery($sql);
