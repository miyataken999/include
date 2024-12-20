<?
// Parameters
// $data       - array of field values of the record being processed. To access specific
//               field value use $data["FieldName"]
//               "rs" is an alternate name for this parameter.
// $row        - array representing a row on the page
// $record     - array representing a table record on the page
// $pageObject - an object of Page class representing the current page

if($data['open_flag'] == 1){
	$record["css"]='background: #7fff00; color: #111;';
}elseif($data['check_flag'] == 1){
	$record["css"]='background: #fe4040; color: #111;';
}else{
	$record["css"]='background: #fff; color: #111;';
}
?>
