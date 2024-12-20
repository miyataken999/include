<?php
// Description
// Occurs before record is exported
// Use this event to modify record before it is exported.

// Parameters
// $data       - array of values selected from the database table              
// $values     - array of values to be written to the export file              
// $pageObject - an object of Page class representing the current page
$values["supplementary_subject"] = $values["supplementary_subject"] . '仕入';
// if(($values["group"] != '該当なし')&&($values["group"] != '')){
// 	$values["group"] = $values["group"] . '部門';
// }

if($values["chigin_ecc_id"] > 0){
	$chigin_ecc_id = $values["chigin_ecc_id"];
	//宅配取引のステータス 「成約あり」に変更
	$query = "select `purchase_type` from `Eoc` where `ecc_id` = '{$chigin_ecc_id}' limit 1";
	$rs = CustomQuery($query);
	if($rs != false){
		$data = db_fetch_array($rs);
		$purchase_type = $data["purchase_type"];//mst参照
		if($purchase_type == "52"){
			$values["memo_tag"] = "業者仕入";
			if($values['account_item'] == '宝飾C買取'){
				$values['account_item'] = '宝飾B仕入';
			}elseif($values['account_item'] == '服飾C買取'){
				$values['account_item'] = '服飾B仕入';
			}elseif($values['account_item'] == '時計C買取'){
				$values['account_item'] = '時計B仕入';
			}elseif($values['account_item'] == 'ダイヤC買取'){
				$values['account_item'] = 'ダイヤB仕入';
			}
		}
	}
}
$values["ching_created_at"] = date("Y/m/d",strtotime($values["ching_created_at"]));