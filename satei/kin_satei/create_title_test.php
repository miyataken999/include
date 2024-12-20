<?

include_once "./function.php";

$title = "";

$fieldName = 'product_num';	$kugiri = " ";
$mst_name = "mst_brand";	$mst_key = 'id';	$mst_sel_name = 'name';
if((isset($res[$fieldName])) AND ($res[$fieldName] != 631) AND ($res[$fieldName] != "")){
	$title = MstSel($title,$res[$fieldName],$fieldName,$mst_name,$mst_key,$mst_sel_name,$kugiri);
}

if(isset($res["gold_property"])){
	$gold_property = $res["gold_property"];
}else{
	$gold_property = '';
}
if($gold_property != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['gold_property']}";
}

$fieldName = 'sub_category_id1';	$kugiri = " ";
$mst_name = "store_sub_categories";	$mst_key = 'id';	$mst_sel_name = 'name';
$title = MstSel($title,$res[$fieldName],$fieldName,$mst_name,$mst_key,$mst_sel_name,$kugiri);


$comment = $res["comment"];
if($comment != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['comment']}";
}


$fieldName = 'category_id';	$kugiri = " ";
$mst_name = "store_categories";	$mst_key = 'category_id';	$mst_sel_name = 'category_name';
$title = MstSel($title,$res[$fieldName],$fieldName,$mst_name,$mst_key,$mst_sel_name,$kugiri);


if(isset($res["Gram"])){
	$Gram = $res["Gram"];
}else{
	$Gram = '';
}
if($Gram != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['Gram']}{$res['unit']}";
}

if(isset($res["Parent_stone"])){
	$Parent_stone = $res["Parent_stone"];
}else{
	$Parent_stone = '';
}
if($Parent_stone != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['Parent_stone']}ct";
}

if(isset($res["Aside_stone"])){
	$Aside_stone = $res["Aside_stone"];
}else{
	$Aside_stone = '';
}
if($Aside_stone != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['Aside_stone']}ct";
}

if(isset($res["DA_SELFGRES"])){
	$DA_SELFGRES = $res["DA_SELFGRES"];
}else{
	$DA_SELFGRES = '';
}
if($DA_SELFGRES != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['DA_SELFGRES']}";
}



if(isset($res["line"])){
	$line = $res["line"];
}else{
	$line = '';
}
if($line != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['line']}";
}

if(isset($res["item_name"])){
	$item_name = $res["item_name"];
}else{
	$item_name = '';
}
if($item_name != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['item_name']}";
}

if(isset($res["serial_number"])){
	$serial_number = $res["serial_number"];
}else{
	$serial_number = '';
}
if($serial_number != ""){
	if($title != ""){ $title .= " ";}
	$title .= "{$res['serial_number']}";
}



?>

