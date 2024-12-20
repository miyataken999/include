<?
$product_id = $rawvalues["product_id"];
$yahoo_sinaban = $rawvalues["yahoo_sinaban"];

//品番だけでSEQがない場合、SEQをひっぱる
if($product_id == ""){
	if($yahoo_sinaban != ''){
		$sql = "SELECT product_id FROM shouhin WHERE yahoo_sinaban='{$yahoo_sinaban}' LIMIT 1";
		$rs = CustomQuery($sql);
		$data = db_fetch_array($rs);
		$shouhin_product_id = $data["product_id"];

		if($shouhin_product_id != ""){
			$values["product_id"] = $shouhin_product_id;
		}
	}
}elseif($yahoo_sinaban == ""){
	if($product_id != ''){
		$sql = "SELECT yahoo_sinaban FROM shouhin WHERE product_id='{$product_id}' LIMIT 1";
		$rs = CustomQuery($sql);
		$data = db_fetch_array($rs);
		$shouhin_yahoo_sinaban = $data["yahoo_sinaban"];

		if($shouhin_yahoo_sinaban != ""){
			$values["yahoo_sinaban"] = $shouhin_yahoo_sinaban;
		}
	}
}


// $values['destination_sold_out'] = '楽天市場';

// $destination_sold_out = $values['destination_sold_out'];
// $destination_sold_out = "楽天市場";
// $values["destination_sold_out"] = 10;
$destination_sold_out = $rawvalues['destination_sold_out'];
if (preg_match('/^[0-9]+$/', $destination_sold_out)) {

}else{
	$sql = "SELECT `id` FROM `mst_business_partner` WHERE (ws_name LIKE '%{$destination_sold_out}%') OR (name LIKE '%{$destination_sold_out}%') LIMIT 1";
	$rs = CustomQuery($sql);
	if($rs != false){
	  $data = db_fetch_array($rs);
		if((isset($data["id"]))and($data["id"] != "")){
			$id = $data["id"];
			$values['destination_sold_out'] = $id;
		}else{
			$values['destination_sold_out'] = $rawvalues['destination_sold_out'];
		}
	}else{
		$values['destination_sold_out'] = $rawvalues['destination_sold_out'];
	}
}


?>
