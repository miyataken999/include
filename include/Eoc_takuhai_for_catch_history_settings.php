<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_takuhai_for_catch_history = array();
	$tdataEoc_takuhai_for_catch_history[".truncateText"] = true;
	$tdataEoc_takuhai_for_catch_history[".NumberOfChars"] = 80;
	$tdataEoc_takuhai_for_catch_history[".ShortName"] = "Eoc_takuhai_for_catch_history";
	$tdataEoc_takuhai_for_catch_history[".OwnerID"] = "";
	$tdataEoc_takuhai_for_catch_history[".OriginalTable"] = "Eoc_takuhai";

//	field labels
$fieldLabelsEoc_takuhai_for_catch_history = array();
$fieldToolTipsEoc_takuhai_for_catch_history = array();
$pageTitlesEoc_takuhai_for_catch_history = array();
$placeHoldersEoc_takuhai_for_catch_history = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"] = array();
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"] = array();
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"] = array();
	$pageTitlesEoc_takuhai_for_catch_history["Japanese"] = array();
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["id"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["id"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["cv_time"] = "申込日時";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["cv_time"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["cv_time"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["updated_by"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["updated_by"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["status"] = "ステータス";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["status"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["status"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["hakosuu"] = "箱数";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["hakosuu"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["hakosuu"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["purchase_type"] = "買取種別";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["purchase_type"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["purchase_type"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["seiyakukin"] = "成約金";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["seiyakukin"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["seiyakukin"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["received_time"] = "到着日時";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["received_time"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["received_time"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["speed_box"] = "スピード箱数";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["speed_box"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["speed_box"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["date_and_time_hidden"] = "希望集荷日時";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["date_and_time_hidden"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["date_and_time_hidden"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["kit_denpyou"] = "着払い伝票";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["kit_denpyou"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["kit_denpyou"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["kit_huutou"] = "クッション封筒";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["kit_huutou"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["kit_huutou"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["kit_S"] = "キットS";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["kit_S"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["kit_S"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["kit_M"] = "キットM";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["kit_M"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["kit_M"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["kit_L"] = "キットL";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["kit_L"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["kit_L"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["time_select_hidden"] = "配送時間指定";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["time_select_hidden"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["time_select_hidden"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["insurance_speed"] = "配送補償スピード";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["insurance_speed"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["insurance_speed"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["insurance"] = "配送補償";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["insurance"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["insurance"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["line_satei"] = "Line Satei";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["line_satei"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["line_satei"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["insurance_kingaku"] = "配送補償対象金額";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["insurance_kingaku"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["insurance_kingaku"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["key_code"] = "暗号化メールアドレス";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["key_code"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["key_code"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["cv_site"] = "申込サイト";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["cv_site"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["cv_site"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["transfer_id"] = "振込履歴Id";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["transfer_id"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["transfer_id"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["link_area"] = "Link";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["link_area"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["link_area"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["Japanese"]["shipping_date"] = "発送日";
	$fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]["shipping_date"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["Japanese"]["shipping_date"] = "";
	if (count($fieldToolTipsEoc_takuhai_for_catch_history["Japanese"]))
		$tdataEoc_takuhai_for_catch_history[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_takuhai_for_catch_history[""] = array();
	$fieldToolTipsEoc_takuhai_for_catch_history[""] = array();
	$placeHoldersEoc_takuhai_for_catch_history[""] = array();
	$pageTitlesEoc_takuhai_for_catch_history[""] = array();
	$fieldLabelsEoc_takuhai_for_catch_history[""]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["id"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["id"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["cv_time"] = "Cv Time";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["cv_time"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["cv_time"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["updated_at"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["updated_at"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["updated_by"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["updated_by"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["status"] = "Status";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["status"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["status"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["hakosuu"] = "Hakosuu";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["hakosuu"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["hakosuu"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["purchase_type"] = "Purchase Type";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["purchase_type"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["purchase_type"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["seiyakukin"] = "Seiyakukin";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["seiyakukin"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["seiyakukin"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["received_time"] = "Received Time";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["received_time"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["received_time"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["ecc_id"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["ecc_id"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["speed_box"] = "Speed Box";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["speed_box"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["speed_box"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["date_and_time_hidden"] = "Date And Time Hidden";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["date_and_time_hidden"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["date_and_time_hidden"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["kit_denpyou"] = "Kit Denpyou";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["kit_denpyou"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["kit_denpyou"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["kit_huutou"] = "Kit Huutou";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["kit_huutou"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["kit_huutou"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["kit_S"] = "Kit S";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["kit_S"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["kit_S"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["kit_M"] = "Kit M";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["kit_M"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["kit_M"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["kit_L"] = "Kit L";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["kit_L"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["kit_L"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["time_select_hidden"] = "Time Select Hidden";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["time_select_hidden"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["time_select_hidden"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["insurance_speed"] = "Insurance Speed";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["insurance_speed"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["insurance_speed"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["insurance"] = "Insurance";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["insurance"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["insurance"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["line_satei"] = "Line Satei";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["line_satei"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["line_satei"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["insurance_kingaku"] = "Insurance Kingaku";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["insurance_kingaku"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["insurance_kingaku"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["key_code"] = "Key Code";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["key_code"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["key_code"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["cv_site"] = "Cv Site";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["cv_site"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["cv_site"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["transfer_id"] = "Transfer Id";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["transfer_id"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["transfer_id"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["link_area"] = "Link Area";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["link_area"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["link_area"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history[""]["shipping_date"] = "Shipping Date";
	$fieldToolTipsEoc_takuhai_for_catch_history[""]["shipping_date"] = "";
	$placeHoldersEoc_takuhai_for_catch_history[""]["shipping_date"] = "";
	if (count($fieldToolTipsEoc_takuhai_for_catch_history[""]))
		$tdataEoc_takuhai_for_catch_history[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_takuhai_for_catch_history["English"] = array();
	$fieldToolTipsEoc_takuhai_for_catch_history["English"] = array();
	$placeHoldersEoc_takuhai_for_catch_history["English"] = array();
	$pageTitlesEoc_takuhai_for_catch_history["English"] = array();
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["id"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["id"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["cv_time"] = "Cv Time";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["cv_time"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["cv_time"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["updated_at"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["updated_at"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["updated_by"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["updated_by"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["status"] = "Status";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["status"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["status"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["hakosuu"] = "Hakosuu";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["hakosuu"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["hakosuu"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["purchase_type"] = "Purchase Type";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["purchase_type"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["purchase_type"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["seiyakukin"] = "Seiyakukin";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["seiyakukin"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["seiyakukin"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["received_time"] = "Received Time";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["received_time"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["received_time"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["ecc_id"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["ecc_id"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["speed_box"] = "Speed Box";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["speed_box"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["speed_box"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["date_and_time_hidden"] = "Date And Time Hidden";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["date_and_time_hidden"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["date_and_time_hidden"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["kit_denpyou"] = "Kit Denpyou";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["kit_denpyou"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["kit_denpyou"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["kit_huutou"] = "Kit Huutou";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["kit_huutou"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["kit_huutou"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["kit_S"] = "Kit S";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["kit_S"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["kit_S"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["kit_M"] = "Kit M";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["kit_M"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["kit_M"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["kit_L"] = "Kit L";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["kit_L"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["kit_L"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["time_select_hidden"] = "Time Select Hidden";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["time_select_hidden"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["time_select_hidden"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["insurance_speed"] = "Insurance Speed";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["insurance_speed"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["insurance_speed"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["insurance"] = "Insurance";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["insurance"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["insurance"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["line_satei"] = "Line Satei";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["line_satei"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["line_satei"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["insurance_kingaku"] = "Insurance Kingaku";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["insurance_kingaku"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["insurance_kingaku"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["key_code"] = "Key Code";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["key_code"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["key_code"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["cv_site"] = "Cv Site";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["cv_site"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["cv_site"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["transfer_id"] = "Transfer Id";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["transfer_id"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["transfer_id"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["link_area"] = "Link Area";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["link_area"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["link_area"] = "";
	$fieldLabelsEoc_takuhai_for_catch_history["English"]["shipping_date"] = "Shipping Date";
	$fieldToolTipsEoc_takuhai_for_catch_history["English"]["shipping_date"] = "";
	$placeHoldersEoc_takuhai_for_catch_history["English"]["shipping_date"] = "";
	if (count($fieldToolTipsEoc_takuhai_for_catch_history["English"]))
		$tdataEoc_takuhai_for_catch_history[".isUseToolTips"] = true;
}


	$tdataEoc_takuhai_for_catch_history[".NCSearch"] = true;



$tdataEoc_takuhai_for_catch_history[".shortTableName"] = "Eoc_takuhai_for_catch_history";
$tdataEoc_takuhai_for_catch_history[".nSecOptions"] = 0;
$tdataEoc_takuhai_for_catch_history[".recsPerRowPrint"] = 1;
$tdataEoc_takuhai_for_catch_history[".mainTableOwnerID"] = "";
$tdataEoc_takuhai_for_catch_history[".moveNext"] = 1;
$tdataEoc_takuhai_for_catch_history[".entityType"] = 1;

$tdataEoc_takuhai_for_catch_history[".strOriginalTableName"] = "Eoc_takuhai";

	



$tdataEoc_takuhai_for_catch_history[".showAddInPopup"] = false;

$tdataEoc_takuhai_for_catch_history[".showEditInPopup"] = false;

$tdataEoc_takuhai_for_catch_history[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_takuhai_for_catch_history[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_takuhai_for_catch_history[".fieldsForRegister"] = array();

$tdataEoc_takuhai_for_catch_history[".listAjax"] = false;

	$tdataEoc_takuhai_for_catch_history[".audit"] = true;

	$tdataEoc_takuhai_for_catch_history[".locking"] = false;



$tdataEoc_takuhai_for_catch_history[".list"] = true;

$tdataEoc_takuhai_for_catch_history[".inlineEdit"] = true;


$tdataEoc_takuhai_for_catch_history[".reorderRecordsByHeader"] = true;



$tdataEoc_takuhai_for_catch_history[".inlineAdd"] = true;

$tdataEoc_takuhai_for_catch_history[".import"] = true;

$tdataEoc_takuhai_for_catch_history[".exportTo"] = true;


$tdataEoc_takuhai_for_catch_history[".delete"] = true;

$tdataEoc_takuhai_for_catch_history[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_takuhai_for_catch_history[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_takuhai_for_catch_history[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_takuhai_for_catch_history[".searchSaving"] = false;
//

$tdataEoc_takuhai_for_catch_history[".showSearchPanel"] = true;
		$tdataEoc_takuhai_for_catch_history[".flexibleSearch"] = true;

$tdataEoc_takuhai_for_catch_history[".isUseAjaxSuggest"] = true;

$tdataEoc_takuhai_for_catch_history[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																		

$tdataEoc_takuhai_for_catch_history[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_takuhai_for_catch_history[".buttonsAdded"] = false;

$tdataEoc_takuhai_for_catch_history[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_takuhai_for_catch_history[".isUseTimeForSearch"] = false;



$tdataEoc_takuhai_for_catch_history[".badgeColor"] = "cfae83";

$tdataEoc_takuhai_for_catch_history[".detailsLinksOnList"] = "1";

$tdataEoc_takuhai_for_catch_history[".allSearchFields"] = array();
$tdataEoc_takuhai_for_catch_history[".filterFields"] = array();
$tdataEoc_takuhai_for_catch_history[".requiredSearchFields"] = array();

$tdataEoc_takuhai_for_catch_history[".allSearchFields"][] = "ecc_id";
	$tdataEoc_takuhai_for_catch_history[".allSearchFields"][] = "shipping_date";
	$tdataEoc_takuhai_for_catch_history[".allSearchFields"][] = "id";
	$tdataEoc_takuhai_for_catch_history[".allSearchFields"][] = "status";
	$tdataEoc_takuhai_for_catch_history[".allSearchFields"][] = "hakosuu";
	$tdataEoc_takuhai_for_catch_history[".allSearchFields"][] = "cv_time";
	$tdataEoc_takuhai_for_catch_history[".allSearchFields"][] = "received_time";
	$tdataEoc_takuhai_for_catch_history[".allSearchFields"][] = "cv_site";
	$tdataEoc_takuhai_for_catch_history[".allSearchFields"][] = "purchase_type";
	$tdataEoc_takuhai_for_catch_history[".allSearchFields"][] = "seiyakukin";
	$tdataEoc_takuhai_for_catch_history[".allSearchFields"][] = "transfer_id";
	$tdataEoc_takuhai_for_catch_history[".allSearchFields"][] = "updated_at";
	$tdataEoc_takuhai_for_catch_history[".allSearchFields"][] = "updated_by";
	

$tdataEoc_takuhai_for_catch_history[".googleLikeFields"] = array();
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "link_area";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "id";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "status";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "hakosuu";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "purchase_type";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "seiyakukin";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "received_time";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "cv_time";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "updated_at";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "updated_by";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "ecc_id";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "speed_box";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "kit_denpyou";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "kit_huutou";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "kit_S";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "kit_M";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "kit_L";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "time_select_hidden";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "insurance_speed";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "insurance";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "line_satei";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "insurance_kingaku";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "key_code";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "cv_site";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "transfer_id";
$tdataEoc_takuhai_for_catch_history[".googleLikeFields"][] = "shipping_date";


$tdataEoc_takuhai_for_catch_history[".advSearchFields"] = array();
$tdataEoc_takuhai_for_catch_history[".advSearchFields"][] = "ecc_id";
$tdataEoc_takuhai_for_catch_history[".advSearchFields"][] = "shipping_date";
$tdataEoc_takuhai_for_catch_history[".advSearchFields"][] = "id";
$tdataEoc_takuhai_for_catch_history[".advSearchFields"][] = "status";
$tdataEoc_takuhai_for_catch_history[".advSearchFields"][] = "hakosuu";
$tdataEoc_takuhai_for_catch_history[".advSearchFields"][] = "cv_time";
$tdataEoc_takuhai_for_catch_history[".advSearchFields"][] = "received_time";
$tdataEoc_takuhai_for_catch_history[".advSearchFields"][] = "cv_site";
$tdataEoc_takuhai_for_catch_history[".advSearchFields"][] = "purchase_type";
$tdataEoc_takuhai_for_catch_history[".advSearchFields"][] = "seiyakukin";
$tdataEoc_takuhai_for_catch_history[".advSearchFields"][] = "transfer_id";
$tdataEoc_takuhai_for_catch_history[".advSearchFields"][] = "updated_at";
$tdataEoc_takuhai_for_catch_history[".advSearchFields"][] = "updated_by";

$tdataEoc_takuhai_for_catch_history[".tableType"] = "list";

$tdataEoc_takuhai_for_catch_history[".printerPageOrientation"] = 0;
$tdataEoc_takuhai_for_catch_history[".nPrinterPageScale"] = 100;

$tdataEoc_takuhai_for_catch_history[".nPrinterSplitRecords"] = 40;

$tdataEoc_takuhai_for_catch_history[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_takuhai_for_catch_history[".geocodingEnabled"] = false;





$tdataEoc_takuhai_for_catch_history[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_takuhai_for_catch_history[".pageSize"] = 2;

$tdataEoc_takuhai_for_catch_history[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_takuhai_for_catch_history[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_takuhai_for_catch_history[".orderindexes"] = array();
$tdataEoc_takuhai_for_catch_history[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`id`");

$tdataEoc_takuhai_for_catch_history[".sqlHead"] = "SELECT \"\" AS `link_area`,  `id`,  `status`,  `hakosuu`,  `purchase_type`,  `seiyakukin`,  `received_time`,  `cv_time`,  `updated_at`,  `updated_by`,  `ecc_id`,  `speed_box`,  `date_and_time_hidden`,  `kit_denpyou`,  `kit_huutou`,  `kit_S`,  `kit_M`,  `kit_L`,  `time_select_hidden`,  `insurance_speed`,  `insurance`,  `line_satei`,  `insurance_kingaku`,  `key_code`,  `cv_site`,  `transfer_id`,  `shipping_date`";
$tdataEoc_takuhai_for_catch_history[".sqlFrom"] = "FROM `Eoc_takuhai`";
$tdataEoc_takuhai_for_catch_history[".sqlWhereExpr"] = "";
$tdataEoc_takuhai_for_catch_history[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_takuhai_for_catch_history[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_takuhai_for_catch_history[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_takuhai_for_catch_history[".highlightSearchResults"] = true;

$tableKeysEoc_takuhai_for_catch_history = array();
$tableKeysEoc_takuhai_for_catch_history[] = "id";
$tdataEoc_takuhai_for_catch_history[".Keys"] = $tableKeysEoc_takuhai_for_catch_history;

$tdataEoc_takuhai_for_catch_history[".listFields"] = array();
$tdataEoc_takuhai_for_catch_history[".listFields"][] = "link_area";
$tdataEoc_takuhai_for_catch_history[".listFields"][] = "id";
$tdataEoc_takuhai_for_catch_history[".listFields"][] = "status";
$tdataEoc_takuhai_for_catch_history[".listFields"][] = "shipping_date";
$tdataEoc_takuhai_for_catch_history[".listFields"][] = "hakosuu";
$tdataEoc_takuhai_for_catch_history[".listFields"][] = "cv_time";
$tdataEoc_takuhai_for_catch_history[".listFields"][] = "received_time";
$tdataEoc_takuhai_for_catch_history[".listFields"][] = "cv_site";
$tdataEoc_takuhai_for_catch_history[".listFields"][] = "purchase_type";
$tdataEoc_takuhai_for_catch_history[".listFields"][] = "seiyakukin";
$tdataEoc_takuhai_for_catch_history[".listFields"][] = "transfer_id";
$tdataEoc_takuhai_for_catch_history[".listFields"][] = "updated_at";
$tdataEoc_takuhai_for_catch_history[".listFields"][] = "updated_by";
$tdataEoc_takuhai_for_catch_history[".listFields"][] = "ecc_id";

$tdataEoc_takuhai_for_catch_history[".hideMobileList"] = array();


$tdataEoc_takuhai_for_catch_history[".viewFields"] = array();

$tdataEoc_takuhai_for_catch_history[".addFields"] = array();

$tdataEoc_takuhai_for_catch_history[".masterListFields"] = array();
$tdataEoc_takuhai_for_catch_history[".masterListFields"][] = "ecc_id";
$tdataEoc_takuhai_for_catch_history[".masterListFields"][] = "shipping_date";
$tdataEoc_takuhai_for_catch_history[".masterListFields"][] = "id";
$tdataEoc_takuhai_for_catch_history[".masterListFields"][] = "status";
$tdataEoc_takuhai_for_catch_history[".masterListFields"][] = "hakosuu";
$tdataEoc_takuhai_for_catch_history[".masterListFields"][] = "received_time";
$tdataEoc_takuhai_for_catch_history[".masterListFields"][] = "cv_site";
$tdataEoc_takuhai_for_catch_history[".masterListFields"][] = "purchase_type";
$tdataEoc_takuhai_for_catch_history[".masterListFields"][] = "seiyakukin";
$tdataEoc_takuhai_for_catch_history[".masterListFields"][] = "transfer_id";
$tdataEoc_takuhai_for_catch_history[".masterListFields"][] = "updated_at";
$tdataEoc_takuhai_for_catch_history[".masterListFields"][] = "updated_by";

$tdataEoc_takuhai_for_catch_history[".inlineAddFields"] = array();
$tdataEoc_takuhai_for_catch_history[".inlineAddFields"][] = "status";
$tdataEoc_takuhai_for_catch_history[".inlineAddFields"][] = "shipping_date";
$tdataEoc_takuhai_for_catch_history[".inlineAddFields"][] = "hakosuu";

$tdataEoc_takuhai_for_catch_history[".editFields"] = array();

$tdataEoc_takuhai_for_catch_history[".inlineEditFields"] = array();
$tdataEoc_takuhai_for_catch_history[".inlineEditFields"][] = "status";
$tdataEoc_takuhai_for_catch_history[".inlineEditFields"][] = "shipping_date";
$tdataEoc_takuhai_for_catch_history[".inlineEditFields"][] = "hakosuu";

$tdataEoc_takuhai_for_catch_history[".updateSelectedFields"] = array();


$tdataEoc_takuhai_for_catch_history[".exportFields"] = array();
$tdataEoc_takuhai_for_catch_history[".exportFields"][] = "ecc_id";
$tdataEoc_takuhai_for_catch_history[".exportFields"][] = "shipping_date";
$tdataEoc_takuhai_for_catch_history[".exportFields"][] = "id";
$tdataEoc_takuhai_for_catch_history[".exportFields"][] = "status";
$tdataEoc_takuhai_for_catch_history[".exportFields"][] = "hakosuu";
$tdataEoc_takuhai_for_catch_history[".exportFields"][] = "received_time";
$tdataEoc_takuhai_for_catch_history[".exportFields"][] = "cv_site";
$tdataEoc_takuhai_for_catch_history[".exportFields"][] = "purchase_type";
$tdataEoc_takuhai_for_catch_history[".exportFields"][] = "seiyakukin";
$tdataEoc_takuhai_for_catch_history[".exportFields"][] = "transfer_id";
$tdataEoc_takuhai_for_catch_history[".exportFields"][] = "updated_at";
$tdataEoc_takuhai_for_catch_history[".exportFields"][] = "updated_by";

$tdataEoc_takuhai_for_catch_history[".importFields"] = array();
$tdataEoc_takuhai_for_catch_history[".importFields"][] = "id";
$tdataEoc_takuhai_for_catch_history[".importFields"][] = "status";
$tdataEoc_takuhai_for_catch_history[".importFields"][] = "hakosuu";
$tdataEoc_takuhai_for_catch_history[".importFields"][] = "purchase_type";
$tdataEoc_takuhai_for_catch_history[".importFields"][] = "seiyakukin";
$tdataEoc_takuhai_for_catch_history[".importFields"][] = "received_time";
$tdataEoc_takuhai_for_catch_history[".importFields"][] = "updated_at";
$tdataEoc_takuhai_for_catch_history[".importFields"][] = "updated_by";
$tdataEoc_takuhai_for_catch_history[".importFields"][] = "ecc_id";
$tdataEoc_takuhai_for_catch_history[".importFields"][] = "cv_site";
$tdataEoc_takuhai_for_catch_history[".importFields"][] = "transfer_id";
$tdataEoc_takuhai_for_catch_history[".importFields"][] = "shipping_date";

$tdataEoc_takuhai_for_catch_history[".printFields"] = array();

//	link_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "link_area";
	$fdata["GoodName"] = "link_area";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","link_area");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "link_area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_takuhai_for_catch_history["link_area"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_for_catch_history["id"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`status`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "mst_Eoc_takuhai_status";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_for_catch_history["status"] = $fdata;
//	hakosuu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "hakosuu";
	$fdata["GoodName"] = "hakosuu";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","hakosuu");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hakosuu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`hakosuu`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "7";
	$edata["LookupValues"][] = "8";
	$edata["LookupValues"][] = "9";
	$edata["LookupValues"][] = "10";
	$edata["LookupValues"][] = "11";
	$edata["LookupValues"][] = "12";
	$edata["LookupValues"][] = "13";
	$edata["LookupValues"][] = "14";
	$edata["LookupValues"][] = "15";
	$edata["LookupValues"][] = "16";
	$edata["LookupValues"][] = "17";
	$edata["LookupValues"][] = "18";
	$edata["LookupValues"][] = "19";
	$edata["LookupValues"][] = "20";
	$edata["LookupValues"][] = "21";
	$edata["LookupValues"][] = "22";
	$edata["LookupValues"][] = "23";
	$edata["LookupValues"][] = "24";
	$edata["LookupValues"][] = "25";
	$edata["LookupValues"][] = "26";
	$edata["LookupValues"][] = "27";
	$edata["LookupValues"][] = "28";
	$edata["LookupValues"][] = "29";
	$edata["LookupValues"][] = "30";
	$edata["LookupValues"][] = "31";
	$edata["LookupValues"][] = "32";
	$edata["LookupValues"][] = "33";
	$edata["LookupValues"][] = "34";
	$edata["LookupValues"][] = "35";
	$edata["LookupValues"][] = "36";
	$edata["LookupValues"][] = "37";
	$edata["LookupValues"][] = "38";
	$edata["LookupValues"][] = "39";
	$edata["LookupValues"][] = "40";
	$edata["LookupValues"][] = "41";
	$edata["LookupValues"][] = "42";
	$edata["LookupValues"][] = "43";
	$edata["LookupValues"][] = "44";
	$edata["LookupValues"][] = "45";
	$edata["LookupValues"][] = "46";
	$edata["LookupValues"][] = "47";
	$edata["LookupValues"][] = "48";
	$edata["LookupValues"][] = "49";
	$edata["LookupValues"][] = "50";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_for_catch_history["hakosuu"] = $fdata;
//	purchase_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "purchase_type";
	$fdata["GoodName"] = "purchase_type";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","purchase_type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "purchase_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`purchase_type`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "_purchase_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "purchase_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "purchase_name";

	
	$edata["LookupOrderBy"] = "sorter";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_for_catch_history["purchase_type"] = $fdata;
//	seiyakukin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "seiyakukin";
	$fdata["GoodName"] = "seiyakukin";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","seiyakukin");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "seiyakukin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`seiyakukin`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_for_catch_history["seiyakukin"] = $fdata;
//	received_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "received_time";
	$fdata["GoodName"] = "received_time";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","received_time");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "received_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`received_time`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_takuhai_for_catch_history["received_time"] = $fdata;
//	cv_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cv_time";
	$fdata["GoodName"] = "cv_time";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","cv_time");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "cv_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cv_time`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_takuhai_for_catch_history["cv_time"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_at`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_takuhai_for_catch_history["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_by`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "first_name";

	
	$edata["LookupOrderBy"] = "income_id";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_for_catch_history["updated_by"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ecc_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_for_catch_history["ecc_id"] = $fdata;
//	speed_box
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "speed_box";
	$fdata["GoodName"] = "speed_box";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","speed_box");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "speed_box";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`speed_box`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_takuhai_for_catch_history["speed_box"] = $fdata;
//	date_and_time_hidden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "date_and_time_hidden";
	$fdata["GoodName"] = "date_and_time_hidden";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","date_and_time_hidden");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "date_and_time_hidden";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date_and_time_hidden`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_takuhai_for_catch_history["date_and_time_hidden"] = $fdata;
//	kit_denpyou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "kit_denpyou";
	$fdata["GoodName"] = "kit_denpyou";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","kit_denpyou");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "kit_denpyou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kit_denpyou`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_takuhai_for_catch_history["kit_denpyou"] = $fdata;
//	kit_huutou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "kit_huutou";
	$fdata["GoodName"] = "kit_huutou";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","kit_huutou");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "kit_huutou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kit_huutou`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_takuhai_for_catch_history["kit_huutou"] = $fdata;
//	kit_S
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "kit_S";
	$fdata["GoodName"] = "kit_S";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","kit_S");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "kit_S";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kit_S`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_takuhai_for_catch_history["kit_S"] = $fdata;
//	kit_M
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "kit_M";
	$fdata["GoodName"] = "kit_M";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","kit_M");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "kit_M";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kit_M`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_takuhai_for_catch_history["kit_M"] = $fdata;
//	kit_L
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "kit_L";
	$fdata["GoodName"] = "kit_L";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","kit_L");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "kit_L";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kit_L`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_takuhai_for_catch_history["kit_L"] = $fdata;
//	time_select_hidden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "time_select_hidden";
	$fdata["GoodName"] = "time_select_hidden";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","time_select_hidden");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "time_select_hidden";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`time_select_hidden`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_takuhai_for_catch_history["time_select_hidden"] = $fdata;
//	insurance_speed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "insurance_speed";
	$fdata["GoodName"] = "insurance_speed";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","insurance_speed");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "insurance_speed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`insurance_speed`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_takuhai_for_catch_history["insurance_speed"] = $fdata;
//	insurance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "insurance";
	$fdata["GoodName"] = "insurance";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","insurance");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "insurance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`insurance`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_takuhai_for_catch_history["insurance"] = $fdata;
//	line_satei
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "line_satei";
	$fdata["GoodName"] = "line_satei";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","line_satei");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "line_satei";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`line_satei`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_takuhai_for_catch_history["line_satei"] = $fdata;
//	insurance_kingaku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "insurance_kingaku";
	$fdata["GoodName"] = "insurance_kingaku";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","insurance_kingaku");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "insurance_kingaku";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`insurance_kingaku`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_takuhai_for_catch_history["insurance_kingaku"] = $fdata;
//	key_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "key_code";
	$fdata["GoodName"] = "key_code";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","key_code");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "key_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`key_code`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_takuhai_for_catch_history["key_code"] = $fdata;
//	cv_site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "cv_site";
	$fdata["GoodName"] = "cv_site";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","cv_site");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cv_site";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cv_site`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_for_catch_history["cv_site"] = $fdata;
//	transfer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "transfer_id";
	$fdata["GoodName"] = "transfer_id";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","transfer_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "transfer_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`transfer_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_for_catch_history["transfer_id"] = $fdata;
//	shipping_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "shipping_date";
	$fdata["GoodName"] = "shipping_date";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch_history","shipping_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shipping_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shipping_date`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_takuhai_for_catch_history["shipping_date"] = $fdata;


$tables_data["Eoc_takuhai_for_catch_history"]=&$tdataEoc_takuhai_for_catch_history;
$field_labels["Eoc_takuhai_for_catch_history"] = &$fieldLabelsEoc_takuhai_for_catch_history;
$fieldToolTips["Eoc_takuhai_for_catch_history"] = &$fieldToolTipsEoc_takuhai_for_catch_history;
$placeHolders["Eoc_takuhai_for_catch_history"] = &$placeHoldersEoc_takuhai_for_catch_history;
$page_titles["Eoc_takuhai_for_catch_history"] = &$pageTitlesEoc_takuhai_for_catch_history;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_takuhai_for_catch_history"] = array();
//	Eoc_takuhai_events
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_takuhai_events";
		$detailsParam["dOriginalTable"] = "Eoc_takuhai_events";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_takuhai_events";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_takuhai_events");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc_takuhai_for_catch_history"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_takuhai_for_catch_history"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_takuhai_for_catch_history"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_takuhai_for_catch_history"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_takuhai_for_catch_history"][$dIndex]["detailKeys"][]="Eoc_takuhai_id";
//	Eoc_chigins
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_chigins";
		$detailsParam["dOriginalTable"] = "Eoc_chigins";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_chigins";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_chigins");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = true;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc_takuhai_for_catch_history"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_takuhai_for_catch_history"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_takuhai_for_catch_history"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_takuhai_for_catch_history"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_takuhai_for_catch_history"][$dIndex]["detailKeys"][]="Eoc_takuhai_id";
//	shouhin
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="shouhin";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "shouhin";
	$detailsParam["dCaptionTable"] = GetTableCaption("shouhin");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = true;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc_takuhai_for_catch_history"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_takuhai_for_catch_history"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_takuhai_for_catch_history"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_takuhai_for_catch_history"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_takuhai_for_catch_history"][$dIndex]["detailKeys"][]="Eoc_takuhai_id";

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_takuhai_for_catch_history"] = array();


	
				$strOriginalDetailsTable="Eoc";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_catch";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_catch";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Eoc_takuhai_for_catch_history"][0] = $masterParams;
				$masterTablesData["Eoc_takuhai_for_catch_history"][0]["masterKeys"] = array();
	$masterTablesData["Eoc_takuhai_for_catch_history"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["Eoc_takuhai_for_catch_history"][0]["detailKeys"] = array();
	$masterTablesData["Eoc_takuhai_for_catch_history"][0]["detailKeys"][]="ecc_id";
		
	
				$strOriginalDetailsTable="Eoc";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Eoc_takuhai_for_catch_history"][1] = $masterParams;
				$masterTablesData["Eoc_takuhai_for_catch_history"][1]["masterKeys"] = array();
	$masterTablesData["Eoc_takuhai_for_catch_history"][1]["masterKeys"][]="ecc_id";
				$masterTablesData["Eoc_takuhai_for_catch_history"][1]["detailKeys"] = array();
	$masterTablesData["Eoc_takuhai_for_catch_history"][1]["detailKeys"][]="ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_takuhai_for_catch_history()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"\" AS `link_area`,  `id`,  `status`,  `hakosuu`,  `purchase_type`,  `seiyakukin`,  `received_time`,  `cv_time`,  `updated_at`,  `updated_by`,  `ecc_id`,  `speed_box`,  `date_and_time_hidden`,  `kit_denpyou`,  `kit_huutou`,  `kit_S`,  `kit_M`,  `kit_L`,  `time_select_hidden`,  `insurance_speed`,  `insurance`,  `line_satei`,  `insurance_kingaku`,  `key_code`,  `cv_site`,  `transfer_id`,  `shipping_date`";
$proto0["m_strFrom"] = "FROM `Eoc_takuhai`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto6["m_sql"] = "\"\"";
$proto6["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "link_area";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto8["m_sql"] = "`id`";
$proto8["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto10["m_sql"] = "`status`";
$proto10["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "hakosuu",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto12["m_sql"] = "`hakosuu`";
$proto12["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "purchase_type",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto14["m_sql"] = "`purchase_type`";
$proto14["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "seiyakukin",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto16["m_sql"] = "`seiyakukin`";
$proto16["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "received_time",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto18["m_sql"] = "`received_time`";
$proto18["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cv_time",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto20["m_sql"] = "`cv_time`";
$proto20["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto22["m_sql"] = "`updated_at`";
$proto22["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto24["m_sql"] = "`updated_by`";
$proto24["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto26["m_sql"] = "`ecc_id`";
$proto26["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "speed_box",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto28["m_sql"] = "`speed_box`";
$proto28["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "date_and_time_hidden",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto30["m_sql"] = "`date_and_time_hidden`";
$proto30["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_denpyou",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto32["m_sql"] = "`kit_denpyou`";
$proto32["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_huutou",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto34["m_sql"] = "`kit_huutou`";
$proto34["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_S",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto36["m_sql"] = "`kit_S`";
$proto36["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_M",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto38["m_sql"] = "`kit_M`";
$proto38["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_L",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto40["m_sql"] = "`kit_L`";
$proto40["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "time_select_hidden",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto42["m_sql"] = "`time_select_hidden`";
$proto42["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "insurance_speed",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto44["m_sql"] = "`insurance_speed`";
$proto44["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "insurance",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto46["m_sql"] = "`insurance`";
$proto46["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "line_satei",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto48["m_sql"] = "`line_satei`";
$proto48["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "insurance_kingaku",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto50["m_sql"] = "`insurance_kingaku`";
$proto50["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "key_code",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto52["m_sql"] = "`key_code`";
$proto52["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "cv_site",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto54["m_sql"] = "`cv_site`";
$proto54["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "transfer_id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto56["m_sql"] = "`transfer_id`";
$proto56["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "shipping_date",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto58["m_sql"] = "`shipping_date`";
$proto58["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto60=array();
$proto60["m_link"] = "SQLL_MAIN";
			$proto61=array();
$proto61["m_strName"] = "Eoc_takuhai";
$proto61["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "id";
$proto61["m_columns"][] = "brand_confirm";
$proto61["m_columns"][] = "number_of_times";
$proto61["m_columns"][] = "type_selection";
$proto61["m_columns"][] = "reuse_box";
$proto61["m_columns"][] = "kit_detail";
$proto61["m_columns"][] = "date_select";
$proto61["m_columns"][] = "time_select";
$proto61["m_columns"][] = "date_select_hidden";
$proto61["m_columns"][] = "time_select_hidden";
$proto61["m_columns"][] = "speed_box";
$proto61["m_columns"][] = "date_and_time";
$proto61["m_columns"][] = "date_and_time_hidden";
$proto61["m_columns"][] = "user_name";
$proto61["m_columns"][] = "user_name_kana";
$proto61["m_columns"][] = "user_tel";
$proto61["m_columns"][] = "user_mail";
$proto61["m_columns"][] = "user_yuubinn";
$proto61["m_columns"][] = "user_todou";
$proto61["m_columns"][] = "user_sikutyouson";
$proto61["m_columns"][] = "user_banti";
$proto61["m_columns"][] = "tel_mail_line";
$proto61["m_columns"][] = "bikou";
$proto61["m_columns"][] = "insurance_speed";
$proto61["m_columns"][] = "insurance";
$proto61["m_columns"][] = "mail_magazin";
$proto61["m_columns"][] = "anke_1";
$proto61["m_columns"][] = "anke_2";
$proto61["m_columns"][] = "anke_3";
$proto61["m_columns"][] = "mail_text";
$proto61["m_columns"][] = "REMOTE_HOST";
$proto61["m_columns"][] = "REMOTE_ADDR";
$proto61["m_columns"][] = "USER_AGENT";
$proto61["m_columns"][] = "HTTP_REFERER";
$proto61["m_columns"][] = "key_code";
$proto61["m_columns"][] = "cv_site";
$proto61["m_columns"][] = "cv_device";
$proto61["m_columns"][] = "cv_page";
$proto61["m_columns"][] = "cv_time";
$proto61["m_columns"][] = "ecc_id";
$proto61["m_columns"][] = "kit_denpyou";
$proto61["m_columns"][] = "kit_huutou";
$proto61["m_columns"][] = "kit_S";
$proto61["m_columns"][] = "kit_M";
$proto61["m_columns"][] = "kit_L";
$proto61["m_columns"][] = "warehouse_instruction";
$proto61["m_columns"][] = "delivery_slip_instruction";
$proto61["m_columns"][] = "haisou_bangou";
$proto61["m_columns"][] = "shipping_number";
$proto61["m_columns"][] = "arrival_date";
$proto61["m_columns"][] = "updated_at";
$proto61["m_columns"][] = "updated_by";
$proto61["m_columns"][] = "line_satei";
$proto61["m_columns"][] = "insurance_kingaku";
$proto61["m_columns"][] = "status";
$proto61["m_columns"][] = "hakosuu";
$proto61["m_columns"][] = "purchase_type";
$proto61["m_columns"][] = "seiyakukin";
$proto61["m_columns"][] = "received_time";
$proto61["m_columns"][] = "transfer_id";
$proto61["m_columns"][] = "price_error";
$proto61["m_columns"][] = "speed_num";
$proto61["m_columns"][] = "shuka_status";
$proto61["m_columns"][] = "shuka_error";
$proto61["m_columns"][] = "haisou_gyousha";
$proto61["m_columns"][] = "user_address1";
$proto61["m_columns"][] = "user_address2";
$proto61["m_columns"][] = "not_hi_shuka";
$proto61["m_columns"][] = "created_at";
$proto61["m_columns"][] = "is_many_product";
$proto61["m_columns"][] = "Eoc_trader_id";
$proto61["m_columns"][] = "service_users_id";
$proto61["m_columns"][] = "mypage_update_prohibited";
$proto61["m_columns"][] = "memo";
$proto61["m_columns"][] = "satei_start";
$proto61["m_columns"][] = "satei_end";
$proto61["m_columns"][] = "satei_start_by";
$proto61["m_columns"][] = "contract_at";
$proto61["m_columns"][] = "ad_param";
$proto61["m_columns"][] = "is_NJ_or_BJ";
$proto61["m_columns"][] = "shipping_date";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "`Eoc_takuhai`";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "Eoc_takuhai_for_catch_history";
$proto62=array();
$proto62["m_sql"] = "";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto64=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch_history"
));

$proto64["m_column"]=$obj;
$proto64["m_bAsc"] = 0;
$proto64["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto64);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_takuhai_for_catch_history";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_takuhai_for_catch_history = createSqlQuery_Eoc_takuhai_for_catch_history();


	
		;

																											

$tdataEoc_takuhai_for_catch_history[".sqlquery"] = $queryData_Eoc_takuhai_for_catch_history;

$tableEvents["Eoc_takuhai_for_catch_history"] = new eventsBase;
$tdataEoc_takuhai_for_catch_history[".hasEvents"] = false;

?>