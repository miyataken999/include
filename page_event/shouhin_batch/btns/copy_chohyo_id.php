<?
$sql = "UPDATE shouhin_batch AS a,shouhin AS b SET a.chohyo_id = b.chohyo_id WHERE a.product_id = b.product_id";
CustomQuery($sql);
