<?
// Description
// Occurs before record is inserted
// Return true if you want to proceed with adding the record, return false otherwise.

// Parameters
// $rawvalues  - raw field values from the imported file
// $values     - field values to be inserted into the database
// $pageObject - an object of Page class representing the current page
// $message    - put a message into this variable. It will be added to the Import log in
//               case



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
if($rawvalues["status"] == 120){
	if($values["kanryou_henbi"] == ''){
		$values["kanryou_henbi"] = date("Y/m/d H:i:s");
	}
}





