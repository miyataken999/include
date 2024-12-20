<?
$ecc_id = $values["ecc_id"];
$name1 = $values["name1"];
$name2 = $values["name2"];

if(preg_match("/　　/",$name1)){
	$name1_array = explode("　　", $name1);
	$name1_sei = $name1_array[0];
	$name1_mei = $name1_array[1];
}elseif(preg_match("/　/",$name1)){
	$name1_array = explode("　", $name1);
	$name1_sei = $name1_array[0];
	$name1_mei = $name1_array[1];
}elseif(preg_match("/   /",$name1)){
	$name1_array = explode("   ", $name1);
	$name1_sei = $name1_array[0];
	$name1_mei = $name1_array[1];
}elseif(preg_match("/  /",$name1)){
	$name1_array = explode("  ", $name1);
	$name1_sei = $name1_array[0];
	$name1_mei = $name1_array[1];
}elseif(preg_match("/ /",$name1)){
	$name1_array = explode(" ", $name1);
	$name1_sei = $name1_array[0];
	$name1_mei = $name1_array[1];
}else{
	$name1_sei = "";
	$name1_mei = "";
}

if(preg_match("/　/",$name2)){
	$name2_array = explode("　", $name2);
	$name2_sei = $name2_array[0];
	$name2_mei = $name2_array[1];
}elseif(preg_match("/ /",$name2)){
	$name2_array = explode(" ", $name2);
	$name2_sei = $name2_array[0];
	$name2_mei = $name2_array[1];
}else{
	$name2_sei = "";
	$name2_mei = "";
}

if($ecc_id != ""){
	$query = "UPDATE internet.Eoctest SET LAST_NAME2='{$name1_sei}' , FIRST_NAME2='{$name1_mei}' , LAST_NAME_KANA='{$name2_sei}' , FIRST_NAME_KANA='{$name2_mei}' WHERE ecc_id={$ecc_id} LIMIT 1";
}
// print $query."<br>";
$rs = CustomQuery($query);

