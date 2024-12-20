<?

$sate_ck_subcate = $values['sub_category_id1'];
$sate_ck_category_id = $values['category_id'];
$sate_ck_brand_id = $values['product_num'];


$sate_ck_sql = "SELECT name FROM mst_satei_error WHERE (sub_category_id1={$sate_ck_subcate}) OR ( category_id={$sate_ck_category_id} AND sub_category_id1='' ) OR (yahoo_junle={$sate_ck_brand_id}) ";
$sate_ck_rs = CustomQuery($sate_ck_sql);

$sate_ck_err = "";
while($sate_ck_data = db_fetch_array($sate_ck_rs)){
	$sate_ck_id = $sate_ck_data["name"];
	$err_sql = "SELECT field_name , error_text FROM mst_satei_error_item WHERE id={$sate_ck_id} LIMIT 1";
	$err_rs = CustomQuery($err_sql);
	while($err_data = db_fetch_array($err_rs)){
		if($values[$err_data["field_name"]] == ""){
			$sate_ck_err .= "\n".$err_data["error_text"];
		}
	}
}

$values["satei_error"] = $sate_ck_err;

?>
