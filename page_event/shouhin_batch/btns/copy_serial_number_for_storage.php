<?
$sql = "UPDATE shouhin_batch AS a,shouhin AS b SET a.serial_number_for_storage = b.serial_number_for_storage WHERE a.product_id = b.product_id";
CustomQuery($sql);
