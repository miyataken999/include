<?php

$id = $keys["id"];
//
if($id!=""){
	$gold_check_item_query = "SELECT `gold_check_id` FROM `gold_check_item` WHERE `id`='$id' LIMIT 1";
	$gold_check_item_rs = CustomQuery($gold_check_item_query);
	if($gold_check_item_rs!=false){
		$gold_check_item_data = db_fetch_array($gold_check_item_rs);
		$gold_check_id = $gold_check_item_data['gold_check_id'];
	}
	if($gold_check_id!=""){
		$query = "SELECT `slip_type` FROM `gold_check` WHERE `id`='$gold_check_id' LIMIT 1";
		$rs = CustomQuery($query);
		if($rs!=false){
			$data = db_fetch_array($rs);
			$slip_type = $data["slip_type"];
			if($slip_type==1){
				if(($values["name"]==49)or
				($values["name"]==50)or
				($values["name"]==51)or
				($values["name"]==52)or
				($values["name"]==53)or
				($values["name"]==54)or
				($values["name"]==55)or
				($values["name"]==56)
				){
					var_dump("選択できない払出品位です。");
				}
			}
		}
	}
}
