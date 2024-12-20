<?
// Parameters
// $data       - array of field values of the record being processed. To access specific
//               field value use $data["FieldName"]
//               "rs" is an alternate name for this parameter.
// $row        - array representing a row on the page
// $record     - array representing a table record on the page
// $pageObject - an object of Page class representing the current page

if($data['sougaku'] <= '150000'){
	$record["css"]='background: #fff; color: #111;';
}elseif($data['sougaku'] <= '500000'){
	$record["css"]='background: #e8e399; color: #111;';
}elseif($data['sougaku'] <= '5000000'){
	$record["css"]='background: #92cce8; color: #111;';
}elseif($data['sougaku'] > '5000000'){
	$record["css"]='background: #a7f29b; color: #111;';
}else{
	$record["css"]='background: #fff; color: #fff;';
}
?>
