<?
// Description
// Occurs before new record is added
// Return true if you like to proceed with adding new record, return false otherwise.

// Parameters
// $values     - array of values to be written to the database.
//               To access specific field value use $values["FieldName"]
//               "dict" is an alternate name for this parameter.
// $message    - place the message to be displayed into this variable.
// $inline     - equals to true when the Inline Add in process, false otherwise
// $pageObject - an object of Page class representing the current page




//桁数の調整
if($values["DA_RAPA"] != ''){
	$values["DA_RAPA"] = (floor($values["DA_RAPA"]*10000))/10000;
}
if($values["DA_RAPAB"] != ''){
	$values["DA_RAPAB"] = (floor($values["DA_RAPAB"]*10000))/10000;
}
if($values["DA_GROSSPROFIT"] != ''){
	$values["DA_GROSSPROFIT"] = (floor($values["DA_GROSSPROFIT"]*10000))/10000;
}


//初期値の設定
$values["category_id"] = 17;
$values["sub_category_id1"] = 415;
$values["yahoo_sex"] = 3;
$values["product_num"] = 631;
$values["yahoo_junle"] = 'ノーブランド(ノンブランド)';
$values["unit"] = 'ct';


// 査定日の設定。※査定人は、ラウンジデザ子のため、手動にさせる。
$values["satei_hi"] = date("Y/m/d H:i:s");

//完了変更日の設定
if($values["status"] == 120){
	if($values["kanryou_henbi"] == ''){
		$values["kanryou_henbi"] = date("Y/m/d H:i:s");
	}
}

//タイトルの設定
$values["title"] = "{$values['Gram']} {$values['DA_COLOR']} {$values['DA_CLARITY']} {$values['DA_CUT']} {$values['DA_FLUO']} {$values['updated_at']}";
