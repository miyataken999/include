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
		$values["updated_by"] = $_SESSION['uid'];
	}
$values["updated_at"] = $nowtime;

}

if($values["display_url"]!=""){
	if(stristr($values["display_url"],"kinkaimasu.jp")){
		$after_domain = strstr($values["display_url"],"kinkaimasu.jp");
	}elseif(stristr($values["display_url"],"diakaimasu.jp")){
		$after_domain = strstr($values["display_url"],"diakaimasu.jp");
	}elseif(stristr($values["display_url"],"brandkaimasu.com")){
		$after_domain = strstr($values["display_url"],"brandkaimasu.com");
	}else{
		$after_domain = "";
	}
	if($after_domain != ""){
		$values["url_hierarchy"] = mb_substr_count($after_domain,'/');
	}else{
		$values["url_hierarchy"] = "";
	}
}
