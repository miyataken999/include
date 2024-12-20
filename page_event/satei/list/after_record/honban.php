<?
// Parameters
// $data       - array of field values of the record being processed. To access specific
//               field value use $data["FieldName"]
//               "rs" is an alternate name for this parameter.
// $row        - array representing a row on the page
// $record     - array representing a table record on the page
// $pageObject - an object of Page class representing the current page





if($data["errors"] != ""){
	$record["css"]='background: #f00; color: #fff;';
}elseif($data["satei_error"] != ""){
	$record["css"]='background: #ff0; color: #000;';
}else{
	$record["css"]='background: #fff; color: #333;';
}

?>
