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


//桁数の調整
if($values["DA_RAPA"] != ''){
	$values["DA_RAPA"] = (floor($values["DA_RAPA"]*10000))/10000;
}
if($values["DA_RAPAB"] != ''){
	$values["DA_RAPAB"] = (floor($values["DA_RAPAB"]*10000))/10000;
}
if($values["DA_GROSSPROFIT"] != ''){
	$values["DA_GROSSPROFIT"] = (floor($values["DA_GROSSPROFIT"]*10000))/10000;
}

$values["updated_by"] = $_SESSION["uid"];
$values["updated_at"] = date("Y/m/d H:i:s");

//完了変更日の設定
if($values["status"] == 120){
	if($oldvalues["kanryou_henbi"] == ''){
		$values["kanryou_henbi"] = date("Y/m/d H:i:s");
	}
}
