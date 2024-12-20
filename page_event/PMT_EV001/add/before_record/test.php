<?
// Description
// Occurs before new record is added
// Return true if you like to proceed with adding new record, return false otherwise.

// Parameters
// $values     - array of values to be written to the database.
//               To access specific field value use $values["FieldName"]
//               "dict" is an alternate name for this parameter.
// $message    - place the message to be displayed into this variable.
// $inline     - equals to true when the Inline Add in process, false otherwise
// $pageObject - an object of Page class representing the current page





if($values["DA_RAPA"] != ''){
	$values["DA_RAPA"] = (floor($values["DA_RAPA"]*10000))/10000;
}
if($values["DA_RAPAB"] != ''){
	$values["DA_RAPAB"] = (floor($values["DA_RAPAB"]*10000))/10000;
}
if($values["DA_GROSSPROFIT"] != ''){
	$values["DA_GROSSPROFIT"] = (floor($values["DA_GROSSPROFIT"]*10000))/10000;
}







