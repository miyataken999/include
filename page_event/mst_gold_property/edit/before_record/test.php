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

$current_page_pass = $_SERVER["REQUEST_URI"];
// mst_gold_property_list.php
/**********************************************************
更新者
**********************************************************/
if(strstr($current_page_pass, "/aa_list.php")){
	$up_column = "updated_by";
}else{
	$up_column = "update_by";
}

if($user_id != ""){
	if($_SESSION['uid'] != ""){
		$values[$up_column] = $_SESSION['uid'];
	}

	/**********************************************************
	登録日
	**********************************************************/
	if($nowtime != ""){
		$values["update_at"] = $nowtime;
		// $values["create_at"] = $nowtime;
		// if(isset($values["update_at"])){
		//
		// }elseif(isset($values["updated_at"])){
		// 	$values["updated_at"] = $nowtime;
		// }
	}
}
