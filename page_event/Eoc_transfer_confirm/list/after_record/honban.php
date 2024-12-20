<?
// Parameters
// $data       - array of field values of the record being processed. To access specific
//               field value use $data["FieldName"]
//               "rs" is an alternate name for this parameter.
// $row        - array representing a row on the page
// $record     - array representing a table record on the page
// $pageObject - an object of Page class representing the current page


// $seiyakukin = $data['seiyakukin'];
$satei_sougaku = round($data['satei_sougaku']);
$kaibi_sougaku = round($data['kaibi_sougaku']);

// echo '<br>';
// echo '$satei_sougaku'.$satei_sougaku;
// echo '<br>';
// echo '$kaibi_sougaku'.$kaibi_sougaku;
// echo '<br>';



if($satei_sougaku == $kaibi_sougaku){
	$record["css"]='background: #0f0; color: #111;';

	$Eoc_takuhai_id = $data["id"];

	// 楽天買取（ポイント支払）
	// 128
	$sql = "SELECT id FROM Eoc_takuhai_events WHERE Eoc_takuhai_id='{$Eoc_takuhai_id}' AND content='128' limit 1 ";
	$rs = CustomQuery($sql);
	$item_name_data = db_fetch_array($rs);
	if(count($item_name_data) > 0){
		$record["css"]='background: url("https://rifa.life/include/page_event/Eoc_transfer_confirm/rakuten.png") left bottom no-repeat #111; color: #fff; background-size: 60px;';
	}else{
		// 楽天買取（楽天キャッシュ支払）
		// 177
		$sql = "SELECT id FROM Eoc_takuhai_events WHERE Eoc_takuhai_id='{$Eoc_takuhai_id}' AND content='177' limit 1 ";
		$rs = CustomQuery($sql);
		$item_name_data = db_fetch_array($rs);
		if(count($item_name_data) > 0){
			$record["css"]='background: #c10000; color: #fff';
		}

	}

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
