<?php

$values['shukka_date'] = date("Y/m/d");
$values['send_type'] = '3';



/**
更新2017/04/17 宮田　賢一誕生日の設定
*/
if(isset($data['b1']))
$values['b1'] = $values['b1']."/".sprintf('%02d', $data['b2'])."/".sprintf('%02d', 1);; 
$values['kaitori_sougak'] = str_replace(",", "", $values['kaitori_sougak']);
if($_POST[type] == "excel2007"){
	foreach ($values as $key => $value){
		//$search = array("\"", ",");
		//$values[$key] = str_replace($search, "", $values[$key]);
	}
}else{
foreach ($values as $key => $value){
		//$values[$key] = mb_convert_encoding($values[$key], "SJIS-win", "UTF-8");
		//$values[$key] = mb_convert_encoding($values[$key], "SJIS-win", "UTF-8");
		$search = array("\"", ",");
		$values[$key] = str_replace($search, "", $values[$key]);
	}

}
