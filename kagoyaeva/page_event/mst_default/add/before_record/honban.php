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

if(
		(isset($column_name))
		AND
		($column_name == "add_d")
	){
	$by_column = "created_by";
	$at_column = "created_at";
}else{
	$by_column = "create_by";
	$at_column = "create_at";
}


if($user_id != ""){

	/**********************************************************
	登録者
	**********************************************************/
	if($_SESSION['uid'] != ""){
		$values[$by_column] = $_SESSION['uid'];
	}

	/**********************************************************
	登録日
	**********************************************************/
	if($nowtime != ""){
		$values[$at_column] = $nowtime;
	}

}
