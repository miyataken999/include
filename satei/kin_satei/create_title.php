<?

include_once "./function.php";

$title = "";

$fieldName = 'product_num';	$kugiri = " ";
$mst_name = "mst_brand";	$mst_key = 'id';	$mst_sel_name = 'name';
if(($res[$fieldName] != 631) AND ($res[$fieldName] != "")){
	$title = MstSel($title,$res[$fieldName],$fieldName,$mst_name,$mst_key,$mst_sel_name,$kugiri);
}

$gold_property = $res["gold_property"];
if($gold_property != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['gold_property']}";
}

$fieldName = 'sub_category_id1';	$kugiri = " ";
$mst_name = "store_sub_categories";	$mst_key = 'id';	$mst_sel_name = 'name';
$title = MstSel($title,$res[$fieldName],$fieldName,$mst_name,$mst_key,$mst_sel_name,$kugiri);


$fieldName = 'category_id';	$kugiri = " ";
$mst_name = "store_categories";	$mst_key = 'category_id';	$mst_sel_name = 'category_name';
if($res[$fieldName] != 12){
	$title = MstSel($title,$res[$fieldName],$fieldName,$mst_name,$mst_key,$mst_sel_name,$kugiri);
}



$Gram = $res["Gram"];
if($Gram != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['Gram']}{$res['unit']}";
}

$Parent_stone = $res["Parent_stone"];
if($Parent_stone != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['Parent_stone']}ct";
}

$Aside_stone = $res["Aside_stone"];
if($Aside_stone != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['Aside_stone']}ct";
}

$DA_SELFGRES = $res["DA_SELFGRES"];
if($DA_SELFGRES != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['DA_SELFGRES']}";
}
// DA_INTENSITY
$fieldName = 'DA_INTENSITY';	$kugiri = " ";
$mst_name = "mst_Intensity";	$mst_key = 'ID0';	$mst_sel_name = 'Name';
$title = MstSel($title,$res[$fieldName],$fieldName,$mst_name,$mst_key,$mst_sel_name,$kugiri);
// DA_OVERTONE
$fieldName = 'DA_OVERTONE';	$kugiri = " ";
$mst_name = "mst_overtone";	$mst_key = 'Id';	$mst_sel_name = 'Name';
$title = MstSel($title,$res[$fieldName],$fieldName,$mst_name,$mst_key,$mst_sel_name,$kugiri);

$DA_COLOR = $res["DA_COLOR"];
if($DA_COLOR != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['DA_COLOR']}";
}
$DA_CLARITY = $res["DA_CLARITY"];
if($DA_CLARITY != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['DA_CLARITY']}";
}
$DA_CUT = $res['DA_CUT'];
if($DA_CUT != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['DA_CUT']}";
}
$DA_POLISH = $res["DA_POLISH"];
if($DA_POLISH != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['DA_POLISH']}";
}
$DA_SYMMETRY = $res["DA_SYMMETRY"];
if($DA_SYMMETRY != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['DA_SYMMETRY']}";
}
$DA_FLUO = $res["DA_FLUO"];
if($DA_FLUO != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['DA_FLUO']}";
}
//

$fieldName = 'DA_COLOR_FLUO';	$kugiri = " ";
$mst_name = "_DIA_DA_FLUO";	$mst_key = 'Id';	$mst_sel_name = 'Name';
$title = MstSel($title,$res[$fieldName],$fieldName,$mst_name,$mst_key,$mst_sel_name,$kugiri);

$line = $res["line"];
if($line != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['line']}";
}

$item_name = $res["item_name"];
if($item_name != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['item_name']}";
}

$serial_number = $res["serial_number"];
if($serial_number != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['serial_number']}";
}


$comment = $res["comment"];
if($comment != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['comment']}";
}

?>
