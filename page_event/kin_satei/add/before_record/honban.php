<?
// Description
// Occurs before new record is added
// Return true if you like to proceed with adding new record, return false otherwise.

// Parameters
// $values     - array of values to be written to the database.
//               To access specific field value use $values["FieldName"]
//               "dict" is an alternate name for this parameter.
// $message    - place the message to be displayed into this variable.
// $inline     - equals to true when the Inline Add in process, false otherwise
// $pageObject - an object of Page class representing the current page

$nowtime = date("Y-m-d H:i:s");
$user_id = $_SESSION['uid'];
if($values['product_num'] == ""){
  $values['product_num'] = 631;
}
$brand_id = $values["product_num"];

/**********************************************************
査定日
**********************************************************/
$values["satei_hi"] = $nowtime;

/**********************************************************
ブランドジャンル日本語名項目へ保存
**********************************************************/
if($brand_id != ""){
	$sql = "SELECT name FROM mst_brand WHERE id = {$brand_id}";
	$rs = CustomQuery($sql);
	$data = db_fetch_array($rs);
	$brand_name = $data["name"];

	$values["yahoo_junle"] = $brand_name;
}


//売却済(33)になってたら、成約人、成約日いれる
$_st = $values["status"];
if((($_st == 33) OR ($_st == 127)) && ($nowtime != "") && ($user_id != "")){
		$values["REG_AUTHOR"] = $user_id;
		$values["DT_UP_DATE"] = $nowtime;

		//売り先が「市場/宝飾」だったら、ST「宝飾出品待機」
		if($values["Destination_selling"] == "市場/宝飾"){
			$values["status"] = 121;
		}elseif($values["Destination_selling"] == "市場/服飾"){
			$values["status"] = 111;
		}
}

//合わず(34)になってたら、空だったら、入れる。
if(($_st == 34) && ($nowtime != "") && ($user_id != "")){
		$values["AWAZU_NIN"] = $user_id;
		$values["AWAZU_DATE"] = $nowtime;
}


//地金スクラップ(119)になってたら、入金額、完了変更日入れる。
if(($_st == 119) && ($nowtime != "") && ($user_id != "")){
		$values["nyuukin_price"] = $values["price"];
		$values["kanryou_henbi"] = $nowtime;
		$values["REG_AUTHOR"] = $user_id;
		$values["DT_UP_DATE"] = $nowtime;
}

//金性マスタ　直接完了フラグ立っているとき、G完了にする
if($new_st == 119){
  $gold_property = $values['gold_property'];
  $mst_gold_property_sql = "SELECT * FROM `mst_gold_property` WHERE `val`='$gold_property'";
  $mst_gold_property_rs = CustomQuery($mst_gold_property_sql);
  if($mst_gold_property_rs != false){
    $mst_gold_property_data = db_fetch_array($mst_gold_property_rs);
    $direct_completion = $mst_gold_property_data["direct_completion"];
    if($direct_completion==1){
      $values["status"] = 142;
    }
  }
}


//金査フラグ
$values["kinsa_flag"] = 1;




//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//宅配取引更新
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
$ecc_id = $values["ecc_id"];
if($ecc_id > 0){
	/**********************************************************
	宅配取引「到着済」か「査定中」か「成約あり」があれば、その宅配取引IDをこれに付与
	**********************************************************/
	$Eoc_takuhai_query = "SELECT * FROM Eoc_takuhai WHERE `ecc_id`={$ecc_id} AND ((`status`=4) OR (`status`=5) OR (`status`=12)) ORDER BY id DESC limit 1";
	$Eoc_takuhai_rs = CustomQuery($Eoc_takuhai_query);
	$Eoc_takuhai_data = db_fetch_array($Eoc_takuhai_rs);
	//到着済idをGET
	$Eoc_takuhai_id = $Eoc_takuhai_data["id"];

	if($Eoc_takuhai_id > 0){
		$values["Eoc_takuhai_id"] = $Eoc_takuhai_id;

		//買い備が存在すれば、成約あり、なければ査定中
		$kaibi_query = "SELECT COUNT(chigin_id) as 'kaibi_ct' FROM Eoc_chigins WHERE Eoc_takuhai_id={$Eoc_takuhai_id} ";
		$kaibi_rs = CustomQuery($kaibi_query);
		$kaibi_data = db_fetch_array($kaibi_rs);
		$kaibi_ct = $kaibi_data["kaibi_ct"];
		if($kaibi_ct >= 1){
			//宅配取引のステータス 「成約あり」に変更
			$Eoc_takuhai_query = "UPDATE Eoc_takuhai SET `status`=5,`updated_by`='{$user_id}' WHERE id='{$Eoc_takuhai_id}' limit 1";
			CustomQuery($Eoc_takuhai_query);
		}else{
			//宅配取引のステータス 「査定中」に変更
			$Eoc_takuhai_query = "UPDATE Eoc_takuhai SET `status`=12,`updated_by`='{$user_id}' WHERE id='{$Eoc_takuhai_id}' limit 1";
			CustomQuery($Eoc_takuhai_query);
		}
	}
}
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■
//宅配取引更新　END
//■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■■


?>
