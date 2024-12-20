<?
// Description
// Occurs before record is updated
// Return true if you like to proceed with updating record, return false otherwise

// Parameters
// $values     - array of values to be written to the database.
//               To access specific field value use $values["FieldName"]
//               "dict" is an alternate name for this parameter.
// $where      - WHERE clause that points to the edited record. Example: ID=19
// $oldvalues  - array with existing field values. To access specific column value use
//               $oldvalues["FieldName"]
// $keys       - array of key column values that point to the edited record. To access
//               specific key column use $keys["KeyFieldName"]
// $message    - place the message to be displayed into this variable.
// $inline     - equals to true when the Inline Edit in process, false otherwise
// $pageObject - an object of Page class representing the current page



$nowtime = date("Y-m-d H:i:s");
$user_id = $_SESSION['uid'];
if($values['product_num'] == ""){
  $values['product_num'] = 631;
}
$brand_id = $values["product_num"];


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




$old_st = $oldvalues["status"];
$new_st = $values["status"];
/*++++++++++++++++++++++++++++++

売却済以外から売却済(33)になった場合

++++++++++++++++++++++++++++++*/
if( ( ( ($new_st == 33) && ($old_st != 33) ) OR ( ($new_st == 127) && ($old_st != 127) ) ) && ($nowtime != "") && ($user_id != "") ){
		$values["REG_AUTHOR"] = $user_id;
		$values["DT_UP_DATE"] = $nowtime;

		//売り先が「市場/宝飾」だったら、ST「宝飾出品待機」
		if($values["Destination_selling"] == "市場/宝飾"){
			$values["status"] = 121;
		}elseif($values["Destination_selling"] == "市場/服飾"){
			$values["status"] = 111;
		}
    $date = date('Y/m/d H:i:s');
    $product_id = $keys["product_id"];
    $market_query = "SELECT `product_id` FROM `market_product_performance_original` WHERE `product_id` ='{$product_id}' LIMIT 1";
    $market_rs = CustomQuery($market_query);
    $market_data = db_fetch_array($market_rs);
    $ct = count($market_data);
    if(($market_data == FALSE)or($ct == 0)){
      $market_insert_sql = "INSERT INTO `market_product_performance_original` (`product_id`,`front_hidden_flg`,`created_at`) VALUES ('$product_id','True','$date')";
      $market_insert = CustomQuery($market_insert_sql);
    }
}

/*++++++++++++++++++++++++++++++

合わず以外から合わず(34)になった場合

++++++++++++++++++++++++++++++*/
if(($new_st == 34) && ($old_st != 34) && ($nowtime != "") && ($user_id != "")){
		$values["AWAZU_NIN"] = $user_id;
		$values["AWAZU_DATE"] = $nowtime;
}


/*++++++++++++++++++++++++++++++

地金スクラップ(119)になってたら、完了変更日が空欄だったら、入金額、完了変更日入れる。

++++++++++++++++++++++++++++++*/
if(($new_st == 119) && ($nowtime != "") && ($user_id != "") && ($oldvalues["kanryou_henbi"] == "")){
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

if(($new_st == 119)or($new_st == 33)){
  if(
    ($values["category_id"] == 12)
    and (
      ($values["sub_category_id1"] == 840)
      or ($values["sub_category_id1"] == 838)
      or ($values["sub_category_id1"] == 839)
      or ($values["sub_category_id1"] == 847)
    )
  ){
    $values["status"]=142;
  }
}

$values["kinsa_flag"] = 1;
$values["updated_by"] = $user_id;
$values["updated_at"] = $nowtime;






?>
