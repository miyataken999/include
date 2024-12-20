<?


$values['name1'] = $values['LAST_NAME2']."　".$values['FIRST_NAME2'];

$values['name2'] = $values['LAST_NAME_KANA']."　".$values['FIRST_NAME_KANA'];

$values['created_t'] = date("Y-m-d H:i:s");


//金融機関コード
$bank_details_code = $values["bank_details_code"];
//支店コード
$bank_details_blunch_code = $values["bank_details_blunch_code"];
//支店名
$bank_details_blunch_name = $values["bank_details_blunch_name"];
//口座番号
$bank_details_account_number = $values["bank_details_account_number"];
//記号
$bank_details_symbol = $values["bank_details_symbol"];
//番号
$bank_details_number = $values["bank_details_number"];
//名義人
$bank_details_account_name = $values["bank_details_account_name"];
//口座種別
$bank_details_deposit_type = $values["bank_details_deposit_type"];

//名義人、フリガナで上書き
$values["bank_details_account_name"] = $values["name2"];

//対応外銀行
$outside_bank = $values["outside_bank"];
// 旧姓・
$new_name = $values["new_name"];


if(($bank_details_blunch_code == "") AND ($bank_details_blunch_name != "")){
	if($bank_details_code != ""){
		$sql = "SELECT siten_code FROM mst_bank WHERE bank_code='{$bank_details_code}' AND name='{$bank_details_blunch_name}' ";
		$rs = CustomQuery($sql);
		$data = db_fetch_array($rs);
		$values["bank_details_blunch_code"] = $data["siten_code"];
	}
}


if(($bank_details_blunch_name == "") AND ($bank_details_blunch_code != "")){
	if($bank_details_code != ""){
		$sql = "SELECT name FROM mst_bank WHERE bank_code='{$bank_details_code}' AND siten_code='{$bank_details_blunch_code}' ";
		$rs = CustomQuery($sql);
		$data = db_fetch_array($rs);
		$values["bank_details_blunch_name"] = $data["name"];
	}
}



if($bank_details_code != ""){

	$sql = "SELECT name FROM mst_bank WHERE bank_code='{$bank_details_code}' AND category=1 LIMIT 1";
	$rs = CustomQuery($sql);
	$data = db_fetch_array($rs);
	$kikanmei = $data["name"];

	$bank_body = "";
	$bank_body .= "●金融機関名：{$kikanmei}\n";
	$bank_body .= "●金融機関コード：{$bank_details_code}\n";
	$bank_body .= "●支店名：{$bank_details_blunch_name}\n";
	$bank_body .= "●支店コード：{$bank_details_blunch_code}\n";
	$bank_body .= "●口座種別：{$bank_details_deposit_type}\n";
	$bank_body .= "●口座番号：{$bank_details_account_number}\n";
	$bank_body .= "●記号：{$bank_details_symbol}\n";
	$bank_body .= "●番号：{$bank_details_number}\n";
	$bank_body .= "●対応外銀行：{$outside_bank}\n";
	$bank_body .= "●旧姓/新姓/その他：{$new_name}\n";

	// if($bank_details_code == '9900'){
	// 	$bank_body .= "●記号：{$bank_details_symbol}\n";
	// 	$bank_body .= "●番号：{$bank_details_number}\n";
	// }else{
	// 	$bank_body .= "●口座番号：{$bank_details_account_number}\n";
	// }
	$values["bank_name"] = $bank_body;
}



?>
