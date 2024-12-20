<?
// Parameters
// $data       - array of field values of the record being processed. To access specific
//               field value use $data["FieldName"]
//               "rs" is an alternate name for this parameter.
// $row        - array representing a row on the page
// $record     - array representing a table record on the page
// $pageObject - an object of Page class representing the current page


switch ($data['event']) {
	case '1':
		$record["css"]='background: #fff; color: #111;';
		break;
	case '2':
		$record["css"]='background: #f00; color: #fff;';
		break;
	case '3':
		$record["css"]='background: #f0f; color: #fff;';
		break;
	case '4':
		$record["css"]='background: #4a86e8; color: #fff;';
		break;
	case '5':
		$record["css"]='background: #f4c7c3; color: #111;';
		break;
	case '6':
		$record["css"]='background: #0f0; color: #111;';
		break;
	case '7':
		$record["css"]='background: #f90; color: #111;';
		break;
	case '8':
		$record["css"]='background: #980000; color: #fff;';
		break;
	case '9':
		$record["css"]='background: #fff; color: #111;';
		break;
	case '10':
		$record["css"]='background: #0ff; color: #111;';
		break;
	case '11':
		$record["css"]='background: #bf9000; color: #111;';
		break;
	case '12':
		$record["css"]='background: #90f; color: #fff;';
		break;
	case '13':
		$record["css"]='background: #f00; color: #fff;';
		break;
	case '14':
		$record["css"]='background: #f00; color: #fff;';
		break;
	case '15':
		$record["css"]='background: #fff; color: #111;';
		break;
	case '16':
		$record["css"]='background: #fff; color: #111;';
		break;

}




?>
