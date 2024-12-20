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

if(
    (isset($column_name))
    AND
    ($column_name == "add_d")
){
	$by_column = "updated_by";
}else{
	$by_column = "update_by";
}


if($user_id != ""){

	/**********************************************************
	更新者
	**********************************************************/
	if($_SESSION['uid'] != ""){
		$values[$by_column] = $_SESSION['uid'];
	}


}
