<?
// Parameters
// $data       - array of field values of the record being processed. To access specific
//               field value use $data["FieldName"]
//               "rs" is an alternate name for this parameter.
// $row        - array representing a row on the page
// $record     - array representing a table record on the page
// $pageObject - an object of Page class representing the current page


switch ($data["status"]) {
	case '使用':
		$record["css"]='background: #99e8ae; color: #111;';
		break;
	case '使用済控え':
		$record["css"]='background: #99cae8; color: #111;';
		break;
	case '過去使用':
		$record["css"]='background: #e8e399; color: #111;';
		break;
	case '未使用':
		$record["css"]='background: #e89999; color: #111;';
		break;

	default:
		break;
}



?>
