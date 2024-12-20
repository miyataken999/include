<?

function MstSel($title,$fielddata,$fieldName,$mst_name,$mst_key,$mst_sel_name,$kugiri){
	if($fielddata != ""){
		$query = "SELECT {$mst_sel_name} FROM {$mst_name} WHERE {$mst_key} = {$fielddata} LIMIT 1";
		$sql = mysql_query($query);
		$res = mysql_fetch_assoc($sql);
		$fielddata = $res[$mst_sel_name];
		if($title != ""){$title .= $kugiri;}
		$title .= $fielddata;
	}
	return $title;
}


$title = "";


$fieldName = 'product_num';	$kugiri = " / ";
$mst_name = "mst_brand";	$mst_key = 'id';	$mst_sel_name = 'name';
$title = MstSel($title,$res[$fieldName],$fieldName,$mst_name,$mst_key,$mst_sel_name,$kugiri);


$motif = $res["motif"];
if($motif != ""){
	if($title != ""){ $title .= " / ";}
	$title .= "{$res['motif']}";
}

$line = $res["line"];
if($line != ""){
	if($title != ""){ $title .= " / ";}
	$title .= "{$res['line']}";
}

$item_name = $res["item_name"];
if($item_name != ""){
	if($title != ""){ $title .= " / ";}
	$title .= "{$res['item_name']}";
}


$fieldName = 'sub_category_id1';	$kugiri = " / ";
$mst_name = "store_sub_categories";	$mst_key = 'id';	$mst_sel_name = 'name';
$title = MstSel($title,$res[$fieldName],$fieldName,$mst_name,$mst_key,$mst_sel_name,$kugiri);


$fieldName = 'category_id';	$kugiri = " / ";
$mst_name = "store_categories";	$mst_key = 'category_id';	$mst_sel_name = 'category_name';
$title = MstSel($title,$res[$fieldName],$fieldName,$mst_name,$mst_key,$mst_sel_name,$kugiri);

$serial_number = $res["serial_number"];
if($serial_number != ""){
	if($title != ""){ $title .= " / ";}
	$title .= "{$res['serial_number']}";
}

$yahoo_kataban = $res["yahoo_kataban"];
if($yahoo_kataban != ""){
	if($title != ""){ $title .= " / ";}
	$title .= "{$res['yahoo_kataban']}";
}

$stamp = $res["stamp"];
if($stamp != ""){
	if($title != ""){ $title .= " / ";}
	$title .= "{$res['stamp']}";
}

$Setting = $res["Setting"];
if($Setting != ""){
	if($title != ""){ $title .= " / ";}
	$title .= "{$res['Setting']}";
}

$Destination_selling = $res["Destination_selling"];
if($Destination_selling != ""){
	if($title != ""){ $title .= " / ";}
	$title .= "{$res['Destination_selling']}";
}

$Finish = $res["Finish"];
if($Finish != ""){
	if($title != ""){ $title .= " / ";}
	$title .= "{$res['Finish']}";
}

$Discrimination = $res["Discrimination"];
if($Discrimination != ""){
	if($title != ""){ $title .= " / ";}
	$title .= "{$res['Discrimination']}";
}

$accessories = $res["accessories"];
if($accessories != ""){
	if($title != ""){ $title .= " / ";}
	$title .= "{$res['accessories']}";
}

$MATERIAL = $res["MATERIAL"];
if($MATERIAL != ""){
	if($title != ""){ $title .= " / ";}
	$title .= "{$res['MATERIAL']}";
}

$ITEM = $res["ITEM"];
if($ITEM != ""){
	if($title != ""){ $title .= " / ";}
	$title .= "{$res['ITEM']}";
}

// $WEIGHT = $res["WEIGHT"];
// if($WEIGHT != ""){
// 	if($title != ""){ $title .= " / ";}
// 	$title .= "{$res['WEIGHT']}";
// 	$title .= "{$res['gram']}";
// }



// $yahoo_kataban = $res["yahoo_kataban"];
// if($yahoo_kataban != ""){
// 	$yahoo_kataban = " / ".$yahoo_kataban;
// }



?>

