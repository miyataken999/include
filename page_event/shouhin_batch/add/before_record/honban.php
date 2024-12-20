<?
$product_id = $values["product_id"];
$yahoo_sinaban = $values["yahoo_sinaban"];

if(($product_id == "") && ($yahoo_sinaban != "")){
//品番だけでSEQがない場合、SEQをひっぱる
	$sql = "SELECT product_id FROM shouhin WHERE yahoo_sinaban='{$yahoo_sinaban}' LIMIT 1";
	$rs = CustomQuery($sql);
	$data = db_fetch_array($rs);
	$shouhin_product_id = $data["product_id"];

	if($shouhin_product_id != ""){
		$values["product_id"] = $shouhin_product_id;
	}
}elseif(($yahoo_sinaban == "") && ($product_id != "")){
//SEQだけで品番がない場合、SEQをひっぱる
	$sql = "SELECT yahoo_sinaban FROM shouhin WHERE product_id='{$product_id}' LIMIT 1";
	$rs = CustomQuery($sql);
	$data = db_fetch_array($rs);
	$shouhin_product_id = $data["yahoo_sinaban"];

	if($shouhin_product_id != ""){
		$values["yahoo_sinaban"] = $shouhin_product_id;
	}
}





?>
