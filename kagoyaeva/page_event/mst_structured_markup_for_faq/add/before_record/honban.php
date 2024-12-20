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
