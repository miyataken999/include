<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_takuhai_for_catch = array();
	$tdataEoc_takuhai_for_catch[".truncateText"] = true;
	$tdataEoc_takuhai_for_catch[".NumberOfChars"] = 80;
	$tdataEoc_takuhai_for_catch[".ShortName"] = "Eoc_takuhai_for_catch";
	$tdataEoc_takuhai_for_catch[".OwnerID"] = "";
	$tdataEoc_takuhai_for_catch[".OriginalTable"] = "Eoc_takuhai";

//	field labels
$fieldLabelsEoc_takuhai_for_catch = array();
$fieldToolTipsEoc_takuhai_for_catch = array();
$pageTitlesEoc_takuhai_for_catch = array();
$placeHoldersEoc_takuhai_for_catch = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_takuhai_for_catch["Japanese"] = array();
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"] = array();
	$placeHoldersEoc_takuhai_for_catch["Japanese"] = array();
	$pageTitlesEoc_takuhai_for_catch["Japanese"] = array();
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["id"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["id"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["cv_time"] = "申込日時";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["cv_time"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["cv_time"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["updated_by"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["updated_by"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["status"] = "ステータス";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["status"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["status"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["hakosuu"] = "箱数";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["hakosuu"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["hakosuu"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["purchase_type"] = "買取種別";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["purchase_type"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["purchase_type"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["seiyakukin"] = "成約金";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["seiyakukin"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["seiyakukin"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["received_time"] = "到着日時";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["received_time"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["received_time"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["speed_box"] = "スピード箱数";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["speed_box"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["speed_box"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["date_and_time_hidden"] = "希望集荷日時";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["date_and_time_hidden"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["date_and_time_hidden"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["kit_denpyou"] = "着払い伝票";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["kit_denpyou"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["kit_denpyou"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["kit_huutou"] = "クッション封筒";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["kit_huutou"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["kit_huutou"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["kit_S"] = "キットS";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["kit_S"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["kit_S"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["kit_M"] = "キットM";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["kit_M"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["kit_M"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["kit_L"] = "キットL";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["kit_L"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["kit_L"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["time_select_hidden"] = "配送時間指定";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["time_select_hidden"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["time_select_hidden"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["insurance_speed"] = "配送補償スピード";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["insurance_speed"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["insurance_speed"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["insurance"] = "配送補償";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["insurance"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["insurance"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["line_satei"] = "Line Satei";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["line_satei"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["line_satei"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["insurance_kingaku"] = "配送補償対象金額";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["insurance_kingaku"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["insurance_kingaku"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["key_code"] = "暗号化メールアドレス";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["key_code"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["key_code"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["cv_site"] = "申込サイト";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["cv_site"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["cv_site"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["transfer_id"] = "振込履歴Id";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["transfer_id"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["transfer_id"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["type_selection"] = "宅配タイプ";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["type_selection"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["type_selection"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["link_area"] = "link";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["link_area"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["link_area"] = "";
	$fieldLabelsEoc_takuhai_for_catch["Japanese"]["shipping_date"] = "発送日";
	$fieldToolTipsEoc_takuhai_for_catch["Japanese"]["shipping_date"] = "";
	$placeHoldersEoc_takuhai_for_catch["Japanese"]["shipping_date"] = "";
	if (count($fieldToolTipsEoc_takuhai_for_catch["Japanese"]))
		$tdataEoc_takuhai_for_catch[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_takuhai_for_catch[""] = array();
	$fieldToolTipsEoc_takuhai_for_catch[""] = array();
	$placeHoldersEoc_takuhai_for_catch[""] = array();
	$pageTitlesEoc_takuhai_for_catch[""] = array();
	$fieldLabelsEoc_takuhai_for_catch[""]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_for_catch[""]["id"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["id"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["cv_time"] = "Cv Time";
	$fieldToolTipsEoc_takuhai_for_catch[""]["cv_time"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["cv_time"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_takuhai_for_catch[""]["updated_at"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["updated_at"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_takuhai_for_catch[""]["updated_by"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["updated_by"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["status"] = "Status";
	$fieldToolTipsEoc_takuhai_for_catch[""]["status"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["status"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["hakosuu"] = "Hakosuu";
	$fieldToolTipsEoc_takuhai_for_catch[""]["hakosuu"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["hakosuu"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["purchase_type"] = "Purchase Type";
	$fieldToolTipsEoc_takuhai_for_catch[""]["purchase_type"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["purchase_type"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["seiyakukin"] = "Seiyakukin";
	$fieldToolTipsEoc_takuhai_for_catch[""]["seiyakukin"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["seiyakukin"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["received_time"] = "Received Time";
	$fieldToolTipsEoc_takuhai_for_catch[""]["received_time"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["received_time"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_takuhai_for_catch[""]["ecc_id"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["ecc_id"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["speed_box"] = "Speed Box";
	$fieldToolTipsEoc_takuhai_for_catch[""]["speed_box"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["speed_box"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["date_and_time_hidden"] = "Date And Time Hidden";
	$fieldToolTipsEoc_takuhai_for_catch[""]["date_and_time_hidden"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["date_and_time_hidden"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["kit_denpyou"] = "Kit Denpyou";
	$fieldToolTipsEoc_takuhai_for_catch[""]["kit_denpyou"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["kit_denpyou"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["kit_huutou"] = "Kit Huutou";
	$fieldToolTipsEoc_takuhai_for_catch[""]["kit_huutou"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["kit_huutou"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["kit_S"] = "Kit S";
	$fieldToolTipsEoc_takuhai_for_catch[""]["kit_S"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["kit_S"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["kit_M"] = "Kit M";
	$fieldToolTipsEoc_takuhai_for_catch[""]["kit_M"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["kit_M"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["kit_L"] = "Kit L";
	$fieldToolTipsEoc_takuhai_for_catch[""]["kit_L"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["kit_L"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["time_select_hidden"] = "Time Select Hidden";
	$fieldToolTipsEoc_takuhai_for_catch[""]["time_select_hidden"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["time_select_hidden"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["insurance_speed"] = "Insurance Speed";
	$fieldToolTipsEoc_takuhai_for_catch[""]["insurance_speed"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["insurance_speed"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["insurance"] = "Insurance";
	$fieldToolTipsEoc_takuhai_for_catch[""]["insurance"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["insurance"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["line_satei"] = "Line Satei";
	$fieldToolTipsEoc_takuhai_for_catch[""]["line_satei"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["line_satei"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["insurance_kingaku"] = "Insurance Kingaku";
	$fieldToolTipsEoc_takuhai_for_catch[""]["insurance_kingaku"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["insurance_kingaku"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["key_code"] = "Key Code";
	$fieldToolTipsEoc_takuhai_for_catch[""]["key_code"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["key_code"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["cv_site"] = "Cv Site";
	$fieldToolTipsEoc_takuhai_for_catch[""]["cv_site"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["cv_site"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["transfer_id"] = "Transfer Id";
	$fieldToolTipsEoc_takuhai_for_catch[""]["transfer_id"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["transfer_id"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["type_selection"] = "Type Selection";
	$fieldToolTipsEoc_takuhai_for_catch[""]["type_selection"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["type_selection"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["link_area"] = "Link Area";
	$fieldToolTipsEoc_takuhai_for_catch[""]["link_area"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["link_area"] = "";
	$fieldLabelsEoc_takuhai_for_catch[""]["shipping_date"] = "Shipping Date";
	$fieldToolTipsEoc_takuhai_for_catch[""]["shipping_date"] = "";
	$placeHoldersEoc_takuhai_for_catch[""]["shipping_date"] = "";
	if (count($fieldToolTipsEoc_takuhai_for_catch[""]))
		$tdataEoc_takuhai_for_catch[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_takuhai_for_catch["English"] = array();
	$fieldToolTipsEoc_takuhai_for_catch["English"] = array();
	$placeHoldersEoc_takuhai_for_catch["English"] = array();
	$pageTitlesEoc_takuhai_for_catch["English"] = array();
	$fieldLabelsEoc_takuhai_for_catch["English"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["id"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["id"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["cv_time"] = "Cv Time";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["cv_time"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["cv_time"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["updated_at"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["updated_at"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["updated_by"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["updated_by"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["status"] = "Status";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["status"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["status"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["hakosuu"] = "Hakosuu";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["hakosuu"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["hakosuu"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["purchase_type"] = "Purchase Type";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["purchase_type"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["purchase_type"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["seiyakukin"] = "Seiyakukin";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["seiyakukin"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["seiyakukin"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["received_time"] = "Received Time";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["received_time"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["received_time"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["ecc_id"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["ecc_id"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["speed_box"] = "Speed Box";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["speed_box"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["speed_box"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["date_and_time_hidden"] = "Date And Time Hidden";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["date_and_time_hidden"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["date_and_time_hidden"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["kit_denpyou"] = "Kit Denpyou";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["kit_denpyou"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["kit_denpyou"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["kit_huutou"] = "Kit Huutou";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["kit_huutou"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["kit_huutou"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["kit_S"] = "Kit S";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["kit_S"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["kit_S"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["kit_M"] = "Kit M";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["kit_M"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["kit_M"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["kit_L"] = "Kit L";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["kit_L"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["kit_L"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["time_select_hidden"] = "Time Select Hidden";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["time_select_hidden"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["time_select_hidden"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["insurance_speed"] = "Insurance Speed";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["insurance_speed"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["insurance_speed"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["insurance"] = "Insurance";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["insurance"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["insurance"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["line_satei"] = "Line Satei";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["line_satei"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["line_satei"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["insurance_kingaku"] = "Insurance Kingaku";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["insurance_kingaku"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["insurance_kingaku"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["key_code"] = "Key Code";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["key_code"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["key_code"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["cv_site"] = "Cv Site";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["cv_site"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["cv_site"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["transfer_id"] = "Transfer Id";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["transfer_id"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["transfer_id"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["type_selection"] = "Type Selection";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["type_selection"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["type_selection"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["link_area"] = "Link Area";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["link_area"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["link_area"] = "";
	$fieldLabelsEoc_takuhai_for_catch["English"]["shipping_date"] = "Shipping Date";
	$fieldToolTipsEoc_takuhai_for_catch["English"]["shipping_date"] = "";
	$placeHoldersEoc_takuhai_for_catch["English"]["shipping_date"] = "";
	if (count($fieldToolTipsEoc_takuhai_for_catch["English"]))
		$tdataEoc_takuhai_for_catch[".isUseToolTips"] = true;
}


	$tdataEoc_takuhai_for_catch[".NCSearch"] = true;



$tdataEoc_takuhai_for_catch[".shortTableName"] = "Eoc_takuhai_for_catch";
$tdataEoc_takuhai_for_catch[".nSecOptions"] = 0;
$tdataEoc_takuhai_for_catch[".recsPerRowPrint"] = 1;
$tdataEoc_takuhai_for_catch[".mainTableOwnerID"] = "";
$tdataEoc_takuhai_for_catch[".moveNext"] = 1;
$tdataEoc_takuhai_for_catch[".entityType"] = 1;

$tdataEoc_takuhai_for_catch[".strOriginalTableName"] = "Eoc_takuhai";

	



$tdataEoc_takuhai_for_catch[".showAddInPopup"] = false;

$tdataEoc_takuhai_for_catch[".showEditInPopup"] = false;

$tdataEoc_takuhai_for_catch[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_takuhai_for_catch[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_takuhai_for_catch[".fieldsForRegister"] = array();

$tdataEoc_takuhai_for_catch[".listAjax"] = false;

	$tdataEoc_takuhai_for_catch[".audit"] = true;

	$tdataEoc_takuhai_for_catch[".locking"] = false;



$tdataEoc_takuhai_for_catch[".list"] = true;

$tdataEoc_takuhai_for_catch[".inlineEdit"] = true;


$tdataEoc_takuhai_for_catch[".reorderRecordsByHeader"] = true;




$tdataEoc_takuhai_for_catch[".import"] = true;

$tdataEoc_takuhai_for_catch[".exportTo"] = true;


$tdataEoc_takuhai_for_catch[".delete"] = true;

$tdataEoc_takuhai_for_catch[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_takuhai_for_catch[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_takuhai_for_catch[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_takuhai_for_catch[".searchSaving"] = false;
//

$tdataEoc_takuhai_for_catch[".showSearchPanel"] = true;
		$tdataEoc_takuhai_for_catch[".flexibleSearch"] = true;

$tdataEoc_takuhai_for_catch[".isUseAjaxSuggest"] = true;

$tdataEoc_takuhai_for_catch[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdataEoc_takuhai_for_catch[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_takuhai_for_catch[".buttonsAdded"] = false;

$tdataEoc_takuhai_for_catch[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_takuhai_for_catch[".isUseTimeForSearch"] = false;



$tdataEoc_takuhai_for_catch[".badgeColor"] = "cfae83";

$tdataEoc_takuhai_for_catch[".detailsLinksOnList"] = "1";

$tdataEoc_takuhai_for_catch[".allSearchFields"] = array();
$tdataEoc_takuhai_for_catch[".filterFields"] = array();
$tdataEoc_takuhai_for_catch[".requiredSearchFields"] = array();

$tdataEoc_takuhai_for_catch[".allSearchFields"][] = "ecc_id";
	$tdataEoc_takuhai_for_catch[".allSearchFields"][] = "id";
	$tdataEoc_takuhai_for_catch[".allSearchFields"][] = "status";
	$tdataEoc_takuhai_for_catch[".allSearchFields"][] = "hakosuu";
	$tdataEoc_takuhai_for_catch[".allSearchFields"][] = "cv_time";
	$tdataEoc_takuhai_for_catch[".allSearchFields"][] = "received_time";
	$tdataEoc_takuhai_for_catch[".allSearchFields"][] = "cv_site";
	$tdataEoc_takuhai_for_catch[".allSearchFields"][] = "purchase_type";
	$tdataEoc_takuhai_for_catch[".allSearchFields"][] = "type_selection";
	$tdataEoc_takuhai_for_catch[".allSearchFields"][] = "insurance_kingaku";
	$tdataEoc_takuhai_for_catch[".allSearchFields"][] = "updated_at";
	$tdataEoc_takuhai_for_catch[".allSearchFields"][] = "updated_by";
	

$tdataEoc_takuhai_for_catch[".googleLikeFields"] = array();
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "link_area";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "id";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "status";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "hakosuu";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "purchase_type";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "seiyakukin";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "received_time";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "cv_time";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "updated_at";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "updated_by";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "ecc_id";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "speed_box";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "kit_denpyou";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "kit_huutou";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "kit_S";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "kit_M";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "kit_L";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "time_select_hidden";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "insurance_speed";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "insurance";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "line_satei";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "insurance_kingaku";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "key_code";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "cv_site";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "transfer_id";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "type_selection";
$tdataEoc_takuhai_for_catch[".googleLikeFields"][] = "shipping_date";


$tdataEoc_takuhai_for_catch[".advSearchFields"] = array();
$tdataEoc_takuhai_for_catch[".advSearchFields"][] = "ecc_id";
$tdataEoc_takuhai_for_catch[".advSearchFields"][] = "id";
$tdataEoc_takuhai_for_catch[".advSearchFields"][] = "status";
$tdataEoc_takuhai_for_catch[".advSearchFields"][] = "hakosuu";
$tdataEoc_takuhai_for_catch[".advSearchFields"][] = "cv_time";
$tdataEoc_takuhai_for_catch[".advSearchFields"][] = "received_time";
$tdataEoc_takuhai_for_catch[".advSearchFields"][] = "cv_site";
$tdataEoc_takuhai_for_catch[".advSearchFields"][] = "purchase_type";
$tdataEoc_takuhai_for_catch[".advSearchFields"][] = "type_selection";
$tdataEoc_takuhai_for_catch[".advSearchFields"][] = "insurance_kingaku";
$tdataEoc_takuhai_for_catch[".advSearchFields"][] = "updated_at";
$tdataEoc_takuhai_for_catch[".advSearchFields"][] = "updated_by";

$tdataEoc_takuhai_for_catch[".tableType"] = "list";

$tdataEoc_takuhai_for_catch[".printerPageOrientation"] = 0;
$tdataEoc_takuhai_for_catch[".nPrinterPageScale"] = 100;

$tdataEoc_takuhai_for_catch[".nPrinterSplitRecords"] = 40;

$tdataEoc_takuhai_for_catch[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_takuhai_for_catch[".geocodingEnabled"] = false;





$tdataEoc_takuhai_for_catch[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_takuhai_for_catch[".pageSize"] = 1;

$tdataEoc_takuhai_for_catch[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_takuhai_for_catch[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_takuhai_for_catch[".orderindexes"] = array();
$tdataEoc_takuhai_for_catch[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`id`");

$tdataEoc_takuhai_for_catch[".sqlHead"] = "SELECT \"\" AS `link_area`,  `id`,  `status`,  `hakosuu`,  `purchase_type`,  `seiyakukin`,  `received_time`,  `cv_time`,  `updated_at`,  `updated_by`,  `ecc_id`,  `speed_box`,  `date_and_time_hidden`,  `kit_denpyou`,  `kit_huutou`,  `kit_S`,  `kit_M`,  `kit_L`,  `time_select_hidden`,  `insurance_speed`,  `insurance`,  `line_satei`,  `insurance_kingaku`,  `key_code`,  `cv_site`,  `transfer_id`,  `type_selection`,  `shipping_date`";
$tdataEoc_takuhai_for_catch[".sqlFrom"] = "FROM `Eoc_takuhai`";
$tdataEoc_takuhai_for_catch[".sqlWhereExpr"] = "(`status` =1 OR `status` =4)";
$tdataEoc_takuhai_for_catch[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_takuhai_for_catch[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_takuhai_for_catch[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_takuhai_for_catch[".highlightSearchResults"] = true;

$tableKeysEoc_takuhai_for_catch = array();
$tableKeysEoc_takuhai_for_catch[] = "id";
$tdataEoc_takuhai_for_catch[".Keys"] = $tableKeysEoc_takuhai_for_catch;

$tdataEoc_takuhai_for_catch[".listFields"] = array();
$tdataEoc_takuhai_for_catch[".listFields"][] = "link_area";
$tdataEoc_takuhai_for_catch[".listFields"][] = "id";
$tdataEoc_takuhai_for_catch[".listFields"][] = "status";
$tdataEoc_takuhai_for_catch[".listFields"][] = "hakosuu";
$tdataEoc_takuhai_for_catch[".listFields"][] = "shipping_date";
$tdataEoc_takuhai_for_catch[".listFields"][] = "cv_time";
$tdataEoc_takuhai_for_catch[".listFields"][] = "received_time";
$tdataEoc_takuhai_for_catch[".listFields"][] = "cv_site";
$tdataEoc_takuhai_for_catch[".listFields"][] = "purchase_type";
$tdataEoc_takuhai_for_catch[".listFields"][] = "type_selection";
$tdataEoc_takuhai_for_catch[".listFields"][] = "insurance_kingaku";
$tdataEoc_takuhai_for_catch[".listFields"][] = "updated_at";
$tdataEoc_takuhai_for_catch[".listFields"][] = "updated_by";

$tdataEoc_takuhai_for_catch[".hideMobileList"] = array();


$tdataEoc_takuhai_for_catch[".viewFields"] = array();

$tdataEoc_takuhai_for_catch[".addFields"] = array();

$tdataEoc_takuhai_for_catch[".masterListFields"] = array();
$tdataEoc_takuhai_for_catch[".masterListFields"][] = "ecc_id";
$tdataEoc_takuhai_for_catch[".masterListFields"][] = "shipping_date";
$tdataEoc_takuhai_for_catch[".masterListFields"][] = "id";
$tdataEoc_takuhai_for_catch[".masterListFields"][] = "status";
$tdataEoc_takuhai_for_catch[".masterListFields"][] = "hakosuu";
$tdataEoc_takuhai_for_catch[".masterListFields"][] = "received_time";
$tdataEoc_takuhai_for_catch[".masterListFields"][] = "cv_site";
$tdataEoc_takuhai_for_catch[".masterListFields"][] = "purchase_type";
$tdataEoc_takuhai_for_catch[".masterListFields"][] = "type_selection";
$tdataEoc_takuhai_for_catch[".masterListFields"][] = "insurance_kingaku";
$tdataEoc_takuhai_for_catch[".masterListFields"][] = "updated_at";
$tdataEoc_takuhai_for_catch[".masterListFields"][] = "updated_by";

$tdataEoc_takuhai_for_catch[".inlineAddFields"] = array();

$tdataEoc_takuhai_for_catch[".editFields"] = array();

$tdataEoc_takuhai_for_catch[".inlineEditFields"] = array();
$tdataEoc_takuhai_for_catch[".inlineEditFields"][] = "hakosuu";
$tdataEoc_takuhai_for_catch[".inlineEditFields"][] = "shipping_date";
$tdataEoc_takuhai_for_catch[".inlineEditFields"][] = "type_selection";
$tdataEoc_takuhai_for_catch[".inlineEditFields"][] = "insurance_kingaku";

$tdataEoc_takuhai_for_catch[".updateSelectedFields"] = array();


$tdataEoc_takuhai_for_catch[".exportFields"] = array();
$tdataEoc_takuhai_for_catch[".exportFields"][] = "ecc_id";
$tdataEoc_takuhai_for_catch[".exportFields"][] = "id";
$tdataEoc_takuhai_for_catch[".exportFields"][] = "status";
$tdataEoc_takuhai_for_catch[".exportFields"][] = "hakosuu";
$tdataEoc_takuhai_for_catch[".exportFields"][] = "received_time";
$tdataEoc_takuhai_for_catch[".exportFields"][] = "cv_site";
$tdataEoc_takuhai_for_catch[".exportFields"][] = "purchase_type";
$tdataEoc_takuhai_for_catch[".exportFields"][] = "type_selection";
$tdataEoc_takuhai_for_catch[".exportFields"][] = "insurance_kingaku";
$tdataEoc_takuhai_for_catch[".exportFields"][] = "updated_at";
$tdataEoc_takuhai_for_catch[".exportFields"][] = "updated_by";

$tdataEoc_takuhai_for_catch[".importFields"] = array();
$tdataEoc_takuhai_for_catch[".importFields"][] = "id";
$tdataEoc_takuhai_for_catch[".importFields"][] = "status";
$tdataEoc_takuhai_for_catch[".importFields"][] = "hakosuu";
$tdataEoc_takuhai_for_catch[".importFields"][] = "purchase_type";
$tdataEoc_takuhai_for_catch[".importFields"][] = "received_time";
$tdataEoc_takuhai_for_catch[".importFields"][] = "updated_at";
$tdataEoc_takuhai_for_catch[".importFields"][] = "updated_by";
$tdataEoc_takuhai_for_catch[".importFields"][] = "ecc_id";
$tdataEoc_takuhai_for_catch[".importFields"][] = "insurance_kingaku";
$tdataEoc_takuhai_for_catch[".importFields"][] = "cv_site";
$tdataEoc_takuhai_for_catch[".importFields"][] = "type_selection";

$tdataEoc_takuhai_for_catch[".printFields"] = array();

//	link_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "link_area";
	$fdata["GoodName"] = "link_area";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","link_area");
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








	$tdataEoc_takuhai_for_catch["link_area"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","id");
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




	$tdataEoc_takuhai_for_catch["id"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataEoc_takuhai_for_catch["status"] = $fdata;
//	hakosuu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "hakosuu";
	$fdata["GoodName"] = "hakosuu";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","hakosuu");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
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




	$tdataEoc_takuhai_for_catch["hakosuu"] = $fdata;
//	purchase_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "purchase_type";
	$fdata["GoodName"] = "purchase_type";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","purchase_type");
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




	$tdataEoc_takuhai_for_catch["purchase_type"] = $fdata;
//	seiyakukin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "seiyakukin";
	$fdata["GoodName"] = "seiyakukin";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","seiyakukin");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "seiyakukin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`seiyakukin`";

	
	
			
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








	$tdataEoc_takuhai_for_catch["seiyakukin"] = $fdata;
//	received_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "received_time";
	$fdata["GoodName"] = "received_time";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","received_time");
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




	$tdataEoc_takuhai_for_catch["received_time"] = $fdata;
//	cv_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cv_time";
	$fdata["GoodName"] = "cv_time";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","cv_time");
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




	$tdataEoc_takuhai_for_catch["cv_time"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","updated_at");
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




	$tdataEoc_takuhai_for_catch["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","updated_by");
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




	$tdataEoc_takuhai_for_catch["updated_by"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
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




	$tdataEoc_takuhai_for_catch["ecc_id"] = $fdata;
//	speed_box
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "speed_box";
	$fdata["GoodName"] = "speed_box";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","speed_box");
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








	$tdataEoc_takuhai_for_catch["speed_box"] = $fdata;
//	date_and_time_hidden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "date_and_time_hidden";
	$fdata["GoodName"] = "date_and_time_hidden";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","date_and_time_hidden");
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








	$tdataEoc_takuhai_for_catch["date_and_time_hidden"] = $fdata;
//	kit_denpyou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "kit_denpyou";
	$fdata["GoodName"] = "kit_denpyou";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","kit_denpyou");
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








	$tdataEoc_takuhai_for_catch["kit_denpyou"] = $fdata;
//	kit_huutou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "kit_huutou";
	$fdata["GoodName"] = "kit_huutou";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","kit_huutou");
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








	$tdataEoc_takuhai_for_catch["kit_huutou"] = $fdata;
//	kit_S
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "kit_S";
	$fdata["GoodName"] = "kit_S";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","kit_S");
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








	$tdataEoc_takuhai_for_catch["kit_S"] = $fdata;
//	kit_M
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "kit_M";
	$fdata["GoodName"] = "kit_M";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","kit_M");
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








	$tdataEoc_takuhai_for_catch["kit_M"] = $fdata;
//	kit_L
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "kit_L";
	$fdata["GoodName"] = "kit_L";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","kit_L");
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








	$tdataEoc_takuhai_for_catch["kit_L"] = $fdata;
//	time_select_hidden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "time_select_hidden";
	$fdata["GoodName"] = "time_select_hidden";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","time_select_hidden");
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








	$tdataEoc_takuhai_for_catch["time_select_hidden"] = $fdata;
//	insurance_speed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "insurance_speed";
	$fdata["GoodName"] = "insurance_speed";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","insurance_speed");
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








	$tdataEoc_takuhai_for_catch["insurance_speed"] = $fdata;
//	insurance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "insurance";
	$fdata["GoodName"] = "insurance";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","insurance");
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








	$tdataEoc_takuhai_for_catch["insurance"] = $fdata;
//	line_satei
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "line_satei";
	$fdata["GoodName"] = "line_satei";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","line_satei");
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








	$tdataEoc_takuhai_for_catch["line_satei"] = $fdata;
//	insurance_kingaku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "insurance_kingaku";
	$fdata["GoodName"] = "insurance_kingaku";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","insurance_kingaku");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "insurance_kingaku";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`insurance_kingaku`";

	
	
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




	$tdataEoc_takuhai_for_catch["insurance_kingaku"] = $fdata;
//	key_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "key_code";
	$fdata["GoodName"] = "key_code";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","key_code");
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








	$tdataEoc_takuhai_for_catch["key_code"] = $fdata;
//	cv_site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "cv_site";
	$fdata["GoodName"] = "cv_site";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","cv_site");
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




	$tdataEoc_takuhai_for_catch["cv_site"] = $fdata;
//	transfer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "transfer_id";
	$fdata["GoodName"] = "transfer_id";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","transfer_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "transfer_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`transfer_id`";

	
	
			
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








	$tdataEoc_takuhai_for_catch["transfer_id"] = $fdata;
//	type_selection
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "type_selection";
	$fdata["GoodName"] = "type_selection";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","type_selection");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "type_selection";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type_selection`";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_for_catch["type_selection"] = $fdata;
//	shipping_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "shipping_date";
	$fdata["GoodName"] = "shipping_date";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_for_catch","shipping_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
	
	
	
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








	$tdataEoc_takuhai_for_catch["shipping_date"] = $fdata;


$tables_data["Eoc_takuhai_for_catch"]=&$tdataEoc_takuhai_for_catch;
$field_labels["Eoc_takuhai_for_catch"] = &$fieldLabelsEoc_takuhai_for_catch;
$fieldToolTips["Eoc_takuhai_for_catch"] = &$fieldToolTipsEoc_takuhai_for_catch;
$placeHolders["Eoc_takuhai_for_catch"] = &$placeHoldersEoc_takuhai_for_catch;
$page_titles["Eoc_takuhai_for_catch"] = &$pageTitlesEoc_takuhai_for_catch;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_takuhai_for_catch"] = array();
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
		
	$detailsTablesData["Eoc_takuhai_for_catch"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_takuhai_for_catch"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_takuhai_for_catch"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_takuhai_for_catch"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_takuhai_for_catch"][$dIndex]["detailKeys"][]="Eoc_takuhai_id";
//	shouhin
	
	

		$dIndex = 1;
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
		
	$detailsTablesData["Eoc_takuhai_for_catch"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_takuhai_for_catch"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_takuhai_for_catch"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_takuhai_for_catch"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_takuhai_for_catch"][$dIndex]["detailKeys"][]="Eoc_takuhai_id";

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_takuhai_for_catch"] = array();


	
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
					$masterTablesData["Eoc_takuhai_for_catch"][0] = $masterParams;
				$masterTablesData["Eoc_takuhai_for_catch"][0]["masterKeys"] = array();
	$masterTablesData["Eoc_takuhai_for_catch"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["Eoc_takuhai_for_catch"][0]["detailKeys"] = array();
	$masterTablesData["Eoc_takuhai_for_catch"][0]["detailKeys"][]="ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_takuhai_for_catch()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"\" AS `link_area`,  `id`,  `status`,  `hakosuu`,  `purchase_type`,  `seiyakukin`,  `received_time`,  `cv_time`,  `updated_at`,  `updated_by`,  `ecc_id`,  `speed_box`,  `date_and_time_hidden`,  `kit_denpyou`,  `kit_huutou`,  `kit_S`,  `kit_M`,  `kit_L`,  `time_select_hidden`,  `insurance_speed`,  `insurance`,  `line_satei`,  `insurance_kingaku`,  `key_code`,  `cv_site`,  `transfer_id`,  `type_selection`,  `shipping_date`";
$proto0["m_strFrom"] = "FROM `Eoc_takuhai`";
$proto0["m_strWhere"] = "(`status` =1 OR `status` =4)";
$proto0["m_strOrderBy"] = "ORDER BY `id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`status` =1 OR `status` =4";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`status` =1 OR `status` =4"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`status` =1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=1";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "`status` =4";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=4";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto10["m_sql"] = "\"\"";
$proto10["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "link_area";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto12["m_sql"] = "`id`";
$proto12["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto14["m_sql"] = "`status`";
$proto14["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "hakosuu",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto16["m_sql"] = "`hakosuu`";
$proto16["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "purchase_type",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto18["m_sql"] = "`purchase_type`";
$proto18["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "seiyakukin",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto20["m_sql"] = "`seiyakukin`";
$proto20["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "received_time",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto22["m_sql"] = "`received_time`";
$proto22["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cv_time",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto24["m_sql"] = "`cv_time`";
$proto24["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto26["m_sql"] = "`updated_at`";
$proto26["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto28["m_sql"] = "`updated_by`";
$proto28["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto30["m_sql"] = "`ecc_id`";
$proto30["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "speed_box",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto32["m_sql"] = "`speed_box`";
$proto32["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "date_and_time_hidden",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto34["m_sql"] = "`date_and_time_hidden`";
$proto34["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_denpyou",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto36["m_sql"] = "`kit_denpyou`";
$proto36["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_huutou",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto38["m_sql"] = "`kit_huutou`";
$proto38["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_S",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto40["m_sql"] = "`kit_S`";
$proto40["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_M",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto42["m_sql"] = "`kit_M`";
$proto42["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_L",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto44["m_sql"] = "`kit_L`";
$proto44["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "time_select_hidden",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto46["m_sql"] = "`time_select_hidden`";
$proto46["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "insurance_speed",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto48["m_sql"] = "`insurance_speed`";
$proto48["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "insurance",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto50["m_sql"] = "`insurance`";
$proto50["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "line_satei",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto52["m_sql"] = "`line_satei`";
$proto52["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "insurance_kingaku",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto54["m_sql"] = "`insurance_kingaku`";
$proto54["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "key_code",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto56["m_sql"] = "`key_code`";
$proto56["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cv_site",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto58["m_sql"] = "`cv_site`";
$proto58["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "transfer_id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto60["m_sql"] = "`transfer_id`";
$proto60["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "type_selection",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto62["m_sql"] = "`type_selection`";
$proto62["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "shipping_date",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto64["m_sql"] = "`shipping_date`";
$proto64["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto66=array();
$proto66["m_link"] = "SQLL_MAIN";
			$proto67=array();
$proto67["m_strName"] = "Eoc_takuhai";
$proto67["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "id";
$proto67["m_columns"][] = "brand_confirm";
$proto67["m_columns"][] = "number_of_times";
$proto67["m_columns"][] = "type_selection";
$proto67["m_columns"][] = "reuse_box";
$proto67["m_columns"][] = "kit_detail";
$proto67["m_columns"][] = "date_select";
$proto67["m_columns"][] = "time_select";
$proto67["m_columns"][] = "date_select_hidden";
$proto67["m_columns"][] = "time_select_hidden";
$proto67["m_columns"][] = "speed_box";
$proto67["m_columns"][] = "date_and_time";
$proto67["m_columns"][] = "date_and_time_hidden";
$proto67["m_columns"][] = "user_name";
$proto67["m_columns"][] = "user_name_kana";
$proto67["m_columns"][] = "user_tel";
$proto67["m_columns"][] = "user_mail";
$proto67["m_columns"][] = "user_yuubinn";
$proto67["m_columns"][] = "user_todou";
$proto67["m_columns"][] = "user_sikutyouson";
$proto67["m_columns"][] = "user_banti";
$proto67["m_columns"][] = "tel_mail_line";
$proto67["m_columns"][] = "bikou";
$proto67["m_columns"][] = "insurance_speed";
$proto67["m_columns"][] = "insurance";
$proto67["m_columns"][] = "mail_magazin";
$proto67["m_columns"][] = "anke_1";
$proto67["m_columns"][] = "anke_2";
$proto67["m_columns"][] = "anke_3";
$proto67["m_columns"][] = "mail_text";
$proto67["m_columns"][] = "REMOTE_HOST";
$proto67["m_columns"][] = "REMOTE_ADDR";
$proto67["m_columns"][] = "USER_AGENT";
$proto67["m_columns"][] = "HTTP_REFERER";
$proto67["m_columns"][] = "key_code";
$proto67["m_columns"][] = "cv_site";
$proto67["m_columns"][] = "cv_device";
$proto67["m_columns"][] = "cv_page";
$proto67["m_columns"][] = "cv_time";
$proto67["m_columns"][] = "ecc_id";
$proto67["m_columns"][] = "kit_denpyou";
$proto67["m_columns"][] = "kit_huutou";
$proto67["m_columns"][] = "kit_S";
$proto67["m_columns"][] = "kit_M";
$proto67["m_columns"][] = "kit_L";
$proto67["m_columns"][] = "warehouse_instruction";
$proto67["m_columns"][] = "delivery_slip_instruction";
$proto67["m_columns"][] = "haisou_bangou";
$proto67["m_columns"][] = "shipping_number";
$proto67["m_columns"][] = "arrival_date";
$proto67["m_columns"][] = "updated_at";
$proto67["m_columns"][] = "updated_by";
$proto67["m_columns"][] = "line_satei";
$proto67["m_columns"][] = "insurance_kingaku";
$proto67["m_columns"][] = "status";
$proto67["m_columns"][] = "hakosuu";
$proto67["m_columns"][] = "purchase_type";
$proto67["m_columns"][] = "seiyakukin";
$proto67["m_columns"][] = "received_time";
$proto67["m_columns"][] = "transfer_id";
$proto67["m_columns"][] = "price_error";
$proto67["m_columns"][] = "speed_num";
$proto67["m_columns"][] = "shuka_status";
$proto67["m_columns"][] = "shuka_error";
$proto67["m_columns"][] = "haisou_gyousha";
$proto67["m_columns"][] = "user_address1";
$proto67["m_columns"][] = "user_address2";
$proto67["m_columns"][] = "not_hi_shuka";
$proto67["m_columns"][] = "created_at";
$proto67["m_columns"][] = "is_many_product";
$proto67["m_columns"][] = "Eoc_trader_id";
$proto67["m_columns"][] = "service_users_id";
$proto67["m_columns"][] = "mypage_update_prohibited";
$proto67["m_columns"][] = "memo";
$proto67["m_columns"][] = "satei_start";
$proto67["m_columns"][] = "satei_end";
$proto67["m_columns"][] = "satei_start_by";
$proto67["m_columns"][] = "contract_at";
$proto67["m_columns"][] = "ad_param";
$proto67["m_columns"][] = "is_NJ_or_BJ";
$proto67["m_columns"][] = "shipping_date";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "`Eoc_takuhai`";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "Eoc_takuhai_for_catch";
$proto68=array();
$proto68["m_sql"] = "";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto70=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_for_catch"
));

$proto70["m_column"]=$obj;
$proto70["m_bAsc"] = 0;
$proto70["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto70);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_takuhai_for_catch";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_takuhai_for_catch = createSqlQuery_Eoc_takuhai_for_catch();


	
		;

																												

$tdataEoc_takuhai_for_catch[".sqlquery"] = $queryData_Eoc_takuhai_for_catch;

$tableEvents["Eoc_takuhai_for_catch"] = new eventsBase;
$tdataEoc_takuhai_for_catch[".hasEvents"] = false;

?>