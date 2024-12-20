<?
// Parameters
// $data       - array of field values of the record being processed. To access specific
//               field value use $data["FieldName"]
//               "rs" is an alternate name for this parameter.
// $row        - array representing a row on the page
// $record     - array representing a table record on the page
// $pageObject - an object of Page class representing the current page


if($data['content'] != ''){
	$sql = "select color from mst_Eoc_received_event_contents where id = ".$data["content"];
	$rs = CustomQuery($sql);
	$data = db_fetch_array($rs);
	$color_id = $data["color"];

	if($color_id != ''){
		$sql = "select code, font_color from mst_color_code where id = ".$color_id;
		$rs = CustomQuery($sql);
		$data = db_fetch_array($rs);
		$backcolor = $data["code"];
		$font_color = $data["font_color"];
		if($font_color == ''){
			$font_color = '#111';
		}
		$record["css"]="background: {$backcolor}; color: {$font_color};";
	}
}


?>
