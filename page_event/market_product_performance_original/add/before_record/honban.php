<?
// Parameters
// $values     - array of values to be written to the database.
//               To access specific field value use $values["FieldName"]
//               "dict" is an alternate name for this parameter.
// $message    - place the message to be displayed into this variable.
// $inline     - equals to true when the Inline Add in process, false otherwise
// $pageObject - an object of Page class representing the current page


$nowtime = date("Y-m-d H:i:s");
$user_id = $_SESSION['uid'];

if($user_id != ""){

	/**********************************************************
	登録者
	**********************************************************/
	if($_SESSION['uid'] != ""){
		$values["created_by"] = $_SESSION['uid'];
	}

	/**********************************************************
	登録日
	**********************************************************/
	if($nowtime != ""){
		$values["created_at"] = $nowtime;
	}

}
// /**********************************************************
// $tax | 税率
// **********************************************************/
// $created_date = $data["create_at"];
// $tax_rate = 1.1;
// if($created_date!=""){
// 	$mst_tax_query = "SELECT `rate` FROM `mst_tax` WHERE `start_time` < '{$created_date}' ORDER BY `id` DESC LIMIT 1";
// 	$mst_tax_rs = CustomQuery($mst_tax_query);
// 	if($mst_tax_rs!=false){
// 		$mst_tax_data = db_fetch_array($mst_tax_rs);
// 		if(($mst_tax_data["rate"]!=0)or($mst_tax_data["rate"]!="")){
// 			$tax_rate = $mst_tax_data["rate"];
// 		}
// 	}
// }
// /**********************************************************
// end　$tax
// **********************************************************/
//
//
//
//
// $zeinuki = str_replace(",","",$values["zeinuki"]);
// /**********************************************************
// nyuukin_price |【zeinuki】−（【代金税抜】×0.03×消費税率）
// **********************************************************/
// 	$nuyuukin_price = $zeinuki-($zeinuki*0.03*$tax_rate);
// 	$values["nyuukin_price"] = $nuyuukin_price;
// /**********************************************************
// end	nyuukin_price
// **********************************************************/
//
// /**********************************************************
// avg |【Parent_stone】/【ichiba_lot_pieces】
// **********************************************************/
// if((is_numeric($values["Parent_stone"]))and(is_numeric($values["ichiba_lot_pieces"]))){
// 	if(($values["Parent_stone"]!=0)and($values["ichiba_lot_pieces"]!=0)){
// 		$values["avg"] = $values["Parent_stone"]/$values["ichiba_lot_pieces"];
// 	}else{
// 		$values["avg"] = "";
// 	}
// }else{
// 	$values["avg"] = "";
// }
// /**********************************************************
// end	avg
// **********************************************************/
//
// /**********************************************************
// charagai | (floor((【zeinuki】-((【Gram】-((【Parent_stone】+【Aside_stone】)*0.2))*【price_per_gram】)-((【ichiba_melee_gai】*1000)*【Aside_stone】))/【Parent_stone】))
// **********************************************************/
// $charagai_keisan_1 = "";
// $charagai_keisan_2 = "";
// $stone_gram = "";
// $keisan_gram = "";
//
// $price_per_gram=str_replace(",","",$values["price_per_gram"]);
// if(is_numeric($values["Parent_stone"])){
// 	$parent_stone = $values["Parent_stone"];
// }else{
// 	$parent_stone = "";
// }
// if(is_numeric($values["Aside_stone"])){
// 	$aside_stone = $values["Aside_stone"];
// }else{
// 	$aside_stone = "";
// }
// if(($parent_stone!="") or ($values["Gram"]!="") or ($aside_stone!="")){
// 	if($aside_stone!=""){
// 		$stone_gram = $aside_stone * 0.2;
// 		if(is_numeric($values["ichiba_melee_gai"])){
// 			$charagai_keisan_1 = $values["ichiba_melee_gai"] * 1000 * $aside_stone;
// 		}
// 	}
// 	if($parent_stone != ""){
// 		$stone_gram = $stone_gram+$parent_stone * 0.2;
// 	}
// 	if($values["Gram"]!=""){
// 		$keisan_gram = $values["Gram"] - $stone_gram;
// 	}else{
// 		$keisan_gram = $stone_gram;
// 	}
// 	$charagai_keisan_2 = $keisan_gram * $price_per_gram;
// 	if($charagai_keisan_1 != ""){
// 		$charagai_keisan = $zeinuki - ($charagai_keisan_1 + $charagai_keisan_2);
// 	}else{
// 		$charagai_keisan = $zeinuki - $charagai_keisan_2;
// 	}
// 	if(($parent_stone!="") or ($parent_stone!=0)){
// 		$charagai_keisan = floor($charagai_keisan/$parent_stone);
// 	}else{
// 		$charagai_keisan = "";
// 	}
// }else{
// 	$charagai_keisan = "";
// }
// $values["charagai"]=$charagai_keisan;
// /**********************************************************
// end	charagai
// **********************************************************/
//
// $price = str_replace(",","",$values["price"]);
// /**********************************************************
// price_without_tax 【price】/消費税率
// **********************************************************/
// $price_without_tax = $price/$tax_rate;
// $values["price_without_tax"] = $price_without_tax;
// /**********************************************************
// end	price_without_tax
// **********************************************************/
//
// /**********************************************************
// sagaku 【nyuukin_price】-【price_without_tax】
// **********************************************************/
// $values["sagaku"] = $values["nyuukin_price"]-$values["price_without_tax"];
// /**********************************************************
// end	sagaku
// **********************************************************/
//
// /**********************************************************
// arari 【sagaku】/【nyuukin_price】
// **********************************************************/
// if(($values["sagaku"]!="")and($values["sagaku"]!=0)and($values["nyuukin_price"]!="")and($values["nyuukin_price"]!="")){
// 	$values["arari"] = floor(($values["sagaku"]/$values["nyuukin_price"])*100);
// }
// /**********************************************************
// end	arari
// **********************************************************/
