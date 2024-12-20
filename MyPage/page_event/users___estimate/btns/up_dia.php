<?


$dt_query = "SELECT * FROM users___estimate_dia WHERE estimate_id={$estimate_id} LIMIT 1";
$dt_rs = CustomQuery($dt_query);
$dt_data = db_fetch_array($dt_rs);
foreach ($dt_data as $key => $value) {
	$$key = str_replace("'","’",$value);
	$$key = str_replace("\"","”",$value);
	$$key = str_replace("`","’",$value);
}



$ITEM = "";
if($jewelry_brand_name != ""){
	if($ITEM != ""){$ITEM .= "\n";}
	$ITEM .= $jewelry_brand_name;
}
if($shape != ""){
	if($ITEM != ""){$ITEM .= "\n";}
	$ITEM .= $shape;
}
if($color != ""){
	if($ITEM != ""){$ITEM .= "\n";}
	$ITEM .= $color;
}
if($clarity != ""){
	if($ITEM != ""){$ITEM .= "\n";}
	$ITEM .= $clarity;
}
if($cut_grade != ""){
	if($ITEM != ""){$ITEM .= "\n";}
	$ITEM .= $cut_grade;
}
if($polish != ""){
	if($ITEM != ""){$ITEM .= "\n";}
	$ITEM .= $polish;
}
if($symmetry != ""){
	if($ITEM != ""){$ITEM .= "\n";}
	$ITEM .= $symmetry;
}
if($fluorescence_intensity != ""){
	if($ITEM != ""){$ITEM .= "\n";}
	$ITEM .= $fluorescence_intensity;
}
if($fluorescence_color != ""){
	if($ITEM != ""){$ITEM .= "\n";}
	$ITEM .= $fluorescence_color;
}
if($buy_time != ""){
	if($ITEM != ""){$ITEM .= "\n";}
	$ITEM .= $buy_time;
}
if($buy_price != ""){
	if($ITEM != ""){$ITEM .= "\n";}
	$ITEM .= $buy_price;
}
if($labo_name != ""){
	if($ITEM != ""){$ITEM .= "\n";}
	$ITEM .= $labo_name;
}
if($bikou != ""){
	if($ITEM != ""){$ITEM .= "\n";}
	$ITEM .= $bikou;
}



if($chigin_id > 0){

	$params["txt"] .= "更新処理<br>";

	$up_query = "";

	$up_query .= "`WEIGHT`";
	$up_query .= "='{$carat_weight}'";

	$up_query .= ",`ITEM`";
	$up_query .= "='{$ITEM}'";

	$up_query .= ",`updated_by`";
	$up_query .= "='{$uid}'";

	$up_query .= ",`update_at`";
	$up_query .= "=NOW()";


	include $_SERVER["DOCUMENT_ROOT"]."/include/MyPage/connection.php";
	$sql = "UPDATE Eoc_chigins2 SET {$up_query}WHERE chigin_id={$chigin_id} LIMIT 1";
	$params["txt"] .= "{$sql}<br>";
	$set_res = mysql_query('SET NAMES utf8');
	$up_res = mysql_query($sql);
	$params["txt"] .= "{$up_res}<br>";
	$close_flag = mysql_close($link);

	$update_query = "UPDATE users___estimate SET `status`=4,updated_by={$uid},updated_at=NOW() WHERE id={$estimate_id} LIMIT 1";
	CustomQuery($update_query);
	$params["txt"] .= "update_query {$update_query}<br>";


}else{


	$selecter = "`WEIGHT`";
	$selecter .= ",`ITEM`";
	$selecter .= ",`created_by`";
	$selecter .= ",`create_at`";
	$selecter .= ",`chigin_ecc_id`";
	$selecter .= ",`status`";

	$up_values = "'{$carat_weight}'";
	$up_values .= ",'{$ITEM}'";
	$up_values .= ",'{$uid}'";
	$up_values .= ",NOW()";
	$up_values .= ",'{$ecc_id}'";
	$up_values .= ",'126'";

	include $_SERVER["DOCUMENT_ROOT"]."/include/MyPage/connection.php";
	$sql = "INSERT INTO Eoc_chigins2({$selecter})VALUES({$up_values})";
	$params["txt"] .= "{$sql}<br>";
	$set_res = mysql_query('SET NAMES utf8');
	$ins_res = mysql_query($sql);
	$params["txt"] .= "{$ins_res}<br>";
	$mysql_insert_id = mysql_insert_id();
	$close_flag = mysql_close($link);

	$update_query = "UPDATE users___estimate SET `status`=4,chigin_id={$mysql_insert_id},updated_by={$uid},updated_at=NOW() WHERE id={$estimate_id} LIMIT 1";
	CustomQuery($update_query);
	$params["txt"] .= "update_query {$update_query}<br>";


}



