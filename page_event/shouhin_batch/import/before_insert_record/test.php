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
		$sql = "SELECT product_id FROM shouhin WHERE product_id='{$product_id}' LIMIT 1";
		$rs = CustomQuery($sql);
		$data = db_fetch_array($rs);
		$shouhin_yahoo_sinaban = $data["yahoo_sinaban"];

		if($shouhin_yahoo_sinaban != ""){
			$values["yahoo_sinaban"] = $shouhin_yahoo_sinaban;
		}
	}
}

$destination_sold_out = $rawvalues['destination_sold_out'];
if($destination_sold_out != ""){
  $sql = "SELECT `id` FROM `mst_business_partner` WHERE `ws_name` = '{$destination_sold_out}' LIMIT 1";
  $rs = CustomQuery($sql);
  if($rs != false){
    $data = db_fetch_array($rs);
    if($data["id"] != ""){
      $values["destination_sold_out"] = $data["id"];
    }
  }
}



?>
