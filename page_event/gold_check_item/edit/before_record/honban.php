<?
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

if($user_id != ""){

	/**********************************************************
	更新者
	**********************************************************/
	if($_SESSION['uid'] != ""){
		$values["update_by"] = $_SESSION['uid'];
	}

	if($values["authorize_check"]==1){
		$values["authorize_by"] = $_SESSION['uid'];
	}else{
		$values["authorize_by"] = "";
	}

}


$id = $keys["id"];

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
					var_dump("選択できない払出金性です。");
				}
			}
		}
	}
}
