<?

$product_id = $values['product_id'];
$Starting_price = $values['Starting_price'];
$rs = CustomQuery("update store_products SET sales_price = '".$Starting_price."' where product_id = ".$product_id);
