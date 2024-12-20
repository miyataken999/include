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
		$values["create_by"] = $_SESSION['uid'];
	}

	/**********************************************************
	登録日
	**********************************************************/
	if($nowtime != ""){
		$values["create_at"] = $nowtime;
	}

}



if($values["id"] != ""){
	$fieldName = $values["id"];
	$comment = $values["name"];

	$query = "ALTER TABLE `products_detail` ADD COLUMN `{$fieldName}`  text COMMENT '{$comment}'";
	CustomQuery($query);

}
