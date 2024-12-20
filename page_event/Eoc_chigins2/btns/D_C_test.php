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
$paramstxt = "";
while($data = $button->getNextSelectedRecord()){
	//各キー
	$chigin_id = $data["chigin_id"];//地金SEQ
	$product_id = $data["product_id"];//SEQ
	$chigin_ecc_id = $data["chigin_ecc_id"];//顧客SEQ

	//すでに登されていたら省略
	if($product_id > 0){
		$confirm_sql = "SELECT COUNT(product_id) AS ct_id FROM shouhin WHERE product_id={$product_id} ";
		// error_log($confirm_sql,1,"nishitani@urlounge.co.jp");
		$confirm_rs = CustomQuery($confirm_sql);
		$confirm_data = db_fetch_array($confirm_rs);
		$confirm_count = $confirm_data["ct_id"];
		if($confirm_count > 0){
			$paramstxt .= "すでに商品に登録されています。SEQ　{$product_id}<br>";
		}
		$confirm_sql = "SELECT COUNT(DA_SEQ) AS ct_id FROM PMT_EV001 WHERE DA_SEQ={$product_id} ";
		$confirm_rs = CustomQuery($confirm_sql);
		// error_log($confirm_sql,1,"nishitani@urlounge.co.jp");
		$confirm_data = db_fetch_array($confirm_rs);
		$confirm_count = $confirm_data["ct_id"];
		if($confirm_count > 0){
			$paramstxt .= "すでにD在に登録されています。SEQ　{$product_id}<br>";
		}
		if($paramstxt != ""){
			$params["txt"] .= $paramstxt;
			$paramstxt = "";
			continue;
		}
	}


	//顧客番号取得
	$koban = "";//初期化
	$koban_query = " SELECT ecc_seq FROM Eoc WHERE ecc_id={$chigin_ecc_id} LIMIT 1";

	$koban_rs = CustomQuery($koban_query);
	// if(!$koban_rs){
	// 	error_log($koban_query,1,"nishitani@urlounge.co.jp");
	// }
	while ($koban_data = db_fetch_array($koban_rs))
	{
		$koban = $koban_data["ecc_seq"];
	}




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

	if($category_id > 0){
		$cate_sql = "SELECT category_name FROM store_categories WHERE category_id={$category_id} LIMIT 1";
		$cate_rs = CustomQuery($cate_sql);
		$cate_data = db_fetch_array($cate_rs);
		$product_style = $cate_data["category_name"];
	}else{
		$product_style = "";
	}
	// error_log("eee",1,"nishitani@urlounge.co.jp");

	$created_by = $data["created_by"];
	$create_at = $data["create_at"];



	$selecter = "`DA_BUYER`";//顧客番号
	$selecter .= ",`DA_WEIGHT`";
	$selecter .= ",`DA_THESPECIFICATIONSLOSSES`";
	$selecter .= ",`DA_MEMO`";
	$selecter .= ",`DA_REGISTEREDPERSON`";
	$selecter .= ",`DA_REGISTRATIONDATE`";
	$selecter .= ",`status`";
	$selecter .= ",`DA_RESPONSIBLE`";
	$selecter .= ",`DA_THESPECIFICATIONSSETTINGSUN`";

	$up_values = "'{$koban}'";
	$up_values .= ",'{$WEIGHT}'";
	$up_values .= ",'{$AMOUNT_MONEY}'";
	$up_values .= ",'{$ITEM}'";
	$up_values .= ",'{$created_by}'";
	$up_values .= ",NOW()";
	$up_values .= ",'127'";
	$up_values .= ",'{$created_by}'";
	$up_values .= ',NOW()';

	$sql = "INSERT INTO PMT_EV001({$selecter})VALUES({$up_values})";
	CustomQuery($sql);

	$app_uid_get_query = "SELECT APP_UID FROM PMT_EV001 WHERE DA_BUYER='{$koban}' ORDER BY APP_UID DESC LIMIT 1";
	$app_uidres = CustomQuery($app_uid_get_query);
	$app_uidresdata = db_fetch_array($app_uidres);
	$app_uid = $app_uidresdata["APP_UID"];



	$selecter = "`ecc_id`";
	$selecter .= ",`label_output_flag`";
	$selecter .= ",`category_id`";
	$selecter .= ",`sub_category_id1`";
	$selecter .= ",`yahoo_sex`";
	$selecter .= ",`product_num`";
	$selecter .= ",`yahoo_junle`";
	$selecter .= ",`satei_by`";
	$selecter .= ",`satei_hi`";
	$selecter .= ",`Eoc_chigins2_id`";
	$selecter .= ",`price`";
	$selecter .= ",`Parent_stone`";
	$selecter .= ",`Price_per_parent_stone`";
	$selecter .= ",`comment`";

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
	$selecter .= ",`status`";
	$selecter .= ",`REG_AUTHOR`";
	$selecter .= ",`DT_UP_DATE`";

	$selecter .= ",`logo`";
	$selecter .= ",`parts`";
	$selecter .= ",`guarantee`";
	$selecter .= ",`product_style`";


	$up_values = "'{$chigin_ecc_id}'";
	$up_values .= ",'{$label_output_flag}'";
	$up_values .= ",'17'";
	$up_values .= ",'415'";
	$up_values .= ",'3'";
	$up_values .= ",'631'";
	$up_values .= ",'ノーブランド(ノンブランド)'";
	$up_values .= ",'{$created_by}'";
	$up_values .= ",'{$create_at}'";
	$up_values .= ",'{$chigin_id}'";
	$up_values .= ",'{$AMOUNT_MONEY}'";
	$up_values .= ",'{$WEIGHT}'";
	$up_values .= ",'{$PER_PRICE}'";
	$up_values .= ",'{$ITEM}'";

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
	$up_values .= ",'127'";
	$up_values .= ",'{$created_by}'";
	$up_values .= ",NOW()";

	$up_values .= ",'無'";
	$up_values .= ",'無'";
	$up_values .= ",'無'";
	$up_values .= ",'{$product_style}'";


	$sql = "INSERT INTO shouhin({$selecter})VALUES({$up_values})";
	CustomQuery($sql);




	$seq_get_query = "SELECT product_id FROM shouhin WHERE Eoc_chigins2_id={$chigin_id} ORDER BY product_id DESC LIMIT 1";
	$seqres = CustomQuery($seq_get_query);
	$seqresdata = db_fetch_array($seqres);
	$get_product_id = $seqresdata["product_id"];

	/***********************************************************************
	品番生成のため、shouhinにアップデートをかける
	************************************************************************/
	if($get_product_id > 0){
		$tmpsql = "UPDATE shouhin set yahoo_sinaban = 'X' where product_id = {$get_product_id}";
		$tmprs = CustomQuery($tmpsql);
	}
	if($tmprs){
		/***********************************************************************
		商品の品番を取得
		************************************************************************/
		$seq_rs = CustomQuery("SELECT * FROM seq where product_id =	{$get_product_id}");
		$seq_data = db_fetch_array($seq_rs);

		if($seq_data["initial_name"] == ""){
			$ini = "X";
		}else{
			$ini= $seq_data["initial_name"];
		}

		$yahoo_seq = $seq_data["sub_cate"] . $ini . $seq_data["c"] . $seq_data["d"] . $seq_data["sex_ini"];

		/***********************************************************************
		shouhinに品番を設定
		************************************************************************/
		if($get_product_id > 0){
			$sql = "UPDATE shouhin set yahoo_sinaban = '{$yahoo_seq}' where product_id = {$get_product_id}";
			$rs = CustomQuery($sql);
			// $params["txt"] .= $sql."<br>";
		}

		/***********************************************************************
		D在に品番を設定
		************************************************************************/
		if($app_uid > 0){
			$sql = "UPDATE PMT_EV001 set DA_SEQ = '".$get_product_id."',DA_MANAGEMENTNO = '".$yahoo_seq."' ,DA_UPDATEDBY = {$uid} ,DA_UPDATEDDATE = NOW() where APP_UID = ".$app_uid;
			$rs = CustomQuery($sql);
			// $params["txt"] .= $sql."<br>";
		}

		/***********************************************************************
		金査にSEQを設定
		************************************************************************/
		if($chigin_id > 0){
			$seq_set_query = "UPDATE Eoc_chigins2 SET product_id={$get_product_id} , `status`='127' , updated_by={$uid} , update_at=NOW() WHERE chigin_id={$chigin_id}";
			CustomQuery($seq_set_query);
			// $params["txt"] .= $sql."<br>";
		}
		$params["txt"] .= "完了しました！<br>";
		$_SESSION["Eoc_chigins2_move_page"] = 'PMT_EV001';
		$_SESSION["Eoc_chigins2_move_key"] = $koban;
	}

	$product_id_list_array[] = $chigin_id;
};

if(count($product_id_list_array) > 0){
	$log_descri = "---Keys\n";
	$product_id_list = implode(",\n",$product_id_list_array);
	$log_descri = $log_descri."chigin_id : \n{$product_id_list}\n";
	$log_descri = $log_descri."---Fields\n";
	$log_descri = $log_descri."D-Cボタンバッチ処理\n";


	$insert_sql = "INSERT INTO evav62122_audit (datetime,ip,`user`,`table`,action,description) VALUES ({$time},'{$log_ip}','{$log_user}','{$log_table}','{$log_action}','{$log_descri}')";
	CustomQuery($insert_sql);
}


?>
