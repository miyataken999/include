<?
// Parameters
// $data       - array of field values of the record being processed. To access specific
//               field value use $data["FieldName"]
//               "rs" is an alternate name for this parameter.
// $row        - array representing a row on the page
// $record     - array representing a table record on the page
// $pageObject - an object of Page class representing the current page


// $seiyakukin = $data['seiyakukin'];
$satei_sougaku = $data['satei_sougaku'];
$kaibi_sougaku = $data['kaibi_sougaku'];

if($satei_sougaku == $kaibi_sougaku){
	$record["css"]='background: #0f0; color: #111;';
}else{
	$record["css"]='background: #f00; color: #fff;';
}

// $out = "";
// if($seiyakukin == $satei_sougaku){
// 	if($seiyakukin != $kaibi_sougaku){
// 		$out = "kaibi";
// 	}
// }elseif($seiyakukin == $kaibi_sougaku){
// 	if($seiyakukin != $satei_sougaku){
// 		$out = "satei";
// 	}
// }elseif($satei_sougaku == $kaibi_sougaku){
// 	if($satei_sougaku != $seiyakukin){
// 		$out = "seiyakukin";
// 	}
// }else{
// 	$out = "all";
// }


// switch ($out) {
// 	case 'all':
// 		$record["css"]='background: #f00; color: #fff;';
// 		break;
// 	case 'kaibi':
// 		$record["css"]='background: #fa5; color: #111;';
// 		break;
// 	case 'satei':
// 		$record["css"]='background: #ff0; color: #111;';
// 		break;
// 	case 'seiyakukin':
// 		$record["css"]='background: #0ff; color: #111;';
// 		break;
// 	default:
// 		$record["css"]='background: #0f0; color: #111;';
// 		break;
// }






?>
