<?
$sql = "UPDATE shouhin_batch AS a,shouhin AS b SET a.Eoc_trader_id_for_sell = b.Eoc_trader_id_for_sell WHERE a.product_id = b.product_id";
CustomQuery($sql);
