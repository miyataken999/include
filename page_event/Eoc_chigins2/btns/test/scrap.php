<?
$uid = $_SESSION["uid"];
$time_no = date('Y-m-d H:i:s');
$time = "'".$time_no."'";

$log_ip = $_SERVER["REMOTE_ADDR"];
$log_table = "Eoc_chigins2";
$log_action = "btn";//ここでは固定
//user_login取得
$user_login_query = " SELECT user_login FROM users WHERE user_id={$uid} LIMIT 1";

$rs = CustomQuery($user_login_query);
while ($data = db_fetch_array($rs))
{
	$log_user = $data["user_login"];
}


$product_id_list_array = array();
$params["txt"] = "";
while($data = $button->getNextSelectedRecord()){
	//各キー
	$chigin_id = $data["chigin_id"];//地金SEQ
	$product_id = $data["product_id"];//SEQ
	$chigin_ecc_id = $data["chigin_ecc_id"];//顧客SEQ
	//各値
	$label_output_flag = $data["label_output_flag"];//ラベル出力
	$product_num = $data["product_num"];//ブランドID
	$category_id = $data["category_id"];//大カテ
	$sub_category_id1 = $data["sub_category_id1"];//中カテ
	$yahoo_sex = $data["yahoo_sex"];//性別
	$line = str_replace("'","’",$data["line"]);//ライン
	$item_name = str_replace("'","’",$data["item_name"]);//アイテム名
	$MATERIAL = str_replace("'","’",$data["MATERIAL"]);//
	$ITEM = str_replace("'","’",$data["ITEM"]);//商品
	$WEIGHT = str_replace("'","’",$data["WEIGHT"]);//重さ
	$PER_PRICE = str_replace("'","’",$data["PER_PRICE"]);//金額
	$AMOUNT_MONEY = str_replace("'","’",$data["AMOUNT_MONEY"]);//合計金額
	if($MATERIAL == 'Diamond'){
		$field_from_WEIGHT = 'Parent_stone';
		$field_from_PER_PRICE = 'Price_per_parent_stone';
	}else{
		$field_from_WEIGHT = 'Gram';
		$field_from_PER_PRICE = 'price_per_gram';
	}


	$serial_number = str_replace("'","’",$data["serial_number"]);//機番
	$yahoo_kataban = str_replace("'","’",$data["yahoo_kataban"]);//型番
	$stamp = str_replace("'","’",$data["stamp"]);//刻印
	$motif = str_replace("'","’",$data["motif"]);//モチーフ
	$Setting = str_replace("'","’",$data["Setting"]);//セッティング
	$Destination_selling = str_replace("'","’",$data["Destination_selling"]);//売り先
	$Finish = str_replace("'","’",$data["Finish"]);//仕上
	$Discrimination = str_replace("'","’",$data["Discrimination"]);//鑑別
	$accessories = str_replace("'","’",$data["accessories"]);//付属品
	$yahoo_sankou_uwadai = str_replace("'","’",$data["yahoo_sankou_uwadai"]);//参考上代
	$sales_price = str_replace("'","’",$data["sales_price"]);//販売額

	$created_by = $data["created_by"];
	$create_at = $data["create_at"];


	if($product_id > 0){
		$confirm_sql = "SELECT COUNT(product_id) AS ct_id FROM shouhin WHERE product_id={$product_id} ";
		$confirm_rs = CustomQuery($confirm_sql);
		$confirm_data = db_fetch_array($confirm_rs);
		$confirm_count = $confirm_data["ct_id"];
		if($confirm_count > 0){
			$params["txt"] .= "すでに商品に登録されています。SEQ　{$product_id}<br>";
			continue;
		}else{
			// continue;
		}
	}

	$selecter = "`ecc_id`";
	$selecter .= ",`label_output_flag`";
	$selecter .= ",`product_num`";
	$selecter .= ",`category_id`";
	$selecter .= ",`sub_category_id1`";
	$selecter .= ",`yahoo_sex`";
	$selecter .= ",`line`";
	$selecter .= ",`item_name`";
	$selecter .= ",`gold_property`";
	$selecter .= ",`comment`";
	$selecter .= ",`{$field_from_WEIGHT}`";
	$selecter .= ",`{$field_from_PER_PRICE}`";
	$selecter .= ",`price`";
	$selecter .= ",`status`";
	$selecter .= ",`satei_by`";
	$selecter .= ",`satei_hi`";
	$selecter .= ",`Eoc_chigins2_id`";
	$selecter .= ",`nyuukin_price`";
	$selecter .= ",`kanryou_henbi`";

	$selecter .= ",`serial_number`";
	$selecter .= ",`yahoo_kataban`";
	$selecter .= ",`stamp`";
	$selecter .= ",`motif`";
	$selecter .= ",`Setting`";
	$selecter .= ",`Destination_selling`";
	$selecter .= ",`Finish`";
	$selecter .= ",`Discrimination`";
	$selecter .= ",`accessories`";
	$selecter .= ",`yahoo_sankou_uwadai`";
	$selecter .= ",`sales_price`";

	$selecter .= ",`REG_AUTHOR`";
	$selecter .= ",`DT_UP_DATE`";

	$up_values = "'{$chigin_ecc_id}'";
	$up_values .= ",'{$label_output_flag}'";
	$up_values .= ",'{$product_num}'";
	$up_values .= ",'12'";
	$up_values .= ",'838'";
	$up_values .= ",'3'";
	$up_values .= ",'{$line}'";
	$up_values .= ",'{$item_name}'";
	$up_values .= ",'{$MATERIAL}'";
	$up_values .= ",'{$ITEM}'";
	$up_values .= ",'{$WEIGHT}'";
	$up_values .= ",'{$PER_PRICE}'";
	$up_values .= ",'{$AMOUNT_MONEY}'";
	$up_values .= ",'119'";
	$up_values .= ",'{$created_by}'";
	$up_values .= ",'{$create_at}'";
	$up_values .= ",'{$chigin_id}'";
	$up_values .= ",'{$AMOUNT_MONEY}'";
	$up_values .= ',NOW()';

	$up_values .= ",'{$serial_number}'";
	$up_values .= ",'{$yahoo_kataban}'";
	$up_values .= ",'{$stamp}'";
	$up_values .= ",'{$motif}'";
	$up_values .= ",'{$Setting}'";
	$up_values .= ",'{$Destination_selling}'";
	$up_values .= ",'{$Finish}'";
	$up_values .= ",'{$Discrimination}'";
	$up_values .= ",'{$accessories}'";
	$up_values .= ",'{$yahoo_sankou_uwadai}'";
	$up_values .= ",'{$sales_price}'";

	$up_values .= ",'{$created_by}'";
	$up_values .= ",NOW()";


	$sql = "INSERT INTO shouhin({$selecter})VALUES({$up_values})";
	CustomQuery($sql);
	$seq_get_query = "SELECT product_id FROM shouhin WHERE Eoc_chigins2_id={$chigin_id} ORDER BY product_id DESC LIMIT 1";
	$seqres = CustomQuery($seq_get_query);
	while ($seqresdata = db_fetch_array($seqres))
	{
		$get_product_id = $seqresdata["product_id"];
		$seq_set_query = "UPDATE Eoc_chigins2 SET product_id={$get_product_id} , `status`='119' , updated_by={$uid} , update_at=NOW() WHERE chigin_id={$chigin_id}";
		CustomQuery($seq_set_query);
		// $params["txt"] .= $sql;
		$params["txt"] .= "完了しました！<br>";
	}

	$product_id_list_array[] = $chigin_id;
};


if(count($product_id_list_array) > 0){
	$log_descri = "---Keys\n";
	$product_id_list = implode(",\n",$product_id_list_array);
	$log_descri = $log_descri."chigin_id : \n{$product_id_list}\n";
	$log_descri = $log_descri."---Fields\n";
	$log_descri = $log_descri."地金スクラップボタンバッチ処理\n";


	$insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$time},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	CustomQuery($insert_sql);
}

?>
