<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_takuhai_speed = array();
	$tdataEoc_takuhai_speed[".truncateText"] = true;
	$tdataEoc_takuhai_speed[".NumberOfChars"] = 80;
	$tdataEoc_takuhai_speed[".ShortName"] = "Eoc_takuhai_speed";
	$tdataEoc_takuhai_speed[".OwnerID"] = "";
	$tdataEoc_takuhai_speed[".OriginalTable"] = "Eoc_takuhai";

//	field labels
$fieldLabelsEoc_takuhai_speed = array();
$fieldToolTipsEoc_takuhai_speed = array();
$pageTitlesEoc_takuhai_speed = array();
$placeHoldersEoc_takuhai_speed = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_takuhai_speed["Japanese"] = array();
	$fieldToolTipsEoc_takuhai_speed["Japanese"] = array();
	$placeHoldersEoc_takuhai_speed["Japanese"] = array();
	$pageTitlesEoc_takuhai_speed["Japanese"] = array();
	$fieldLabelsEoc_takuhai_speed["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["id"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["id"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["type_selection"] = "宅配タイプ";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["type_selection"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["type_selection"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["speed_box"] = "スピード箱数";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["speed_box"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["speed_box"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["date_and_time_hidden"] = "希望集荷日時";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["date_and_time_hidden"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["date_and_time_hidden"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["user_name"] = "名前";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["user_name"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["user_name"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["user_name_kana"] = "フリガナ";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["user_name_kana"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["user_name_kana"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["user_tel"] = "電話番号";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["user_tel"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["user_tel"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["user_mail"] = "メアド";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["user_mail"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["user_mail"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["user_yuubinn"] = "郵便番号";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["user_yuubinn"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["user_yuubinn"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["user_todou"] = "都道府県";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["user_todou"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["user_todou"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["user_sikutyouson"] = "市区町村";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["user_sikutyouson"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["user_sikutyouson"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["user_banti"] = "市区町村以下";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["user_banti"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["user_banti"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["bikou"] = "備考";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["bikou"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["bikou"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["insurance_speed"] = "配送補償スピード";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["insurance_speed"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["insurance_speed"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["updated_by"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["updated_by"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["speed_num"] = "ハイシューカ申込番号";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["speed_num"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["speed_num"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["shuka_error"] = "集荷エラー";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["shuka_error"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["shuka_error"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["status"] = "ステータス";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["status"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["status"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["new_link"] = "新規申込";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["new_link"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["new_link"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["edit_link"] = "各種手続き";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["edit_link"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["edit_link"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["haisou_gyousha"] = "配送業者";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["haisou_gyousha"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["haisou_gyousha"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["user_address1"] = "住所1(送り状用)";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["user_address1"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["user_address1"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["user_address2"] = "住所2(送り状用)";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["user_address2"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["user_address2"] = "";
	$fieldLabelsEoc_takuhai_speed["Japanese"]["not_hi_shuka"] = "ハイシューカを使わず集荷依頼済";
	$fieldToolTipsEoc_takuhai_speed["Japanese"]["not_hi_shuka"] = "";
	$placeHoldersEoc_takuhai_speed["Japanese"]["not_hi_shuka"] = "";
	if (count($fieldToolTipsEoc_takuhai_speed["Japanese"]))
		$tdataEoc_takuhai_speed[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_takuhai_speed[""] = array();
	$fieldToolTipsEoc_takuhai_speed[""] = array();
	$placeHoldersEoc_takuhai_speed[""] = array();
	$pageTitlesEoc_takuhai_speed[""] = array();
	$fieldLabelsEoc_takuhai_speed[""]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_speed[""]["id"] = "";
	$placeHoldersEoc_takuhai_speed[""]["id"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["type_selection"] = "Type Selection";
	$fieldToolTipsEoc_takuhai_speed[""]["type_selection"] = "";
	$placeHoldersEoc_takuhai_speed[""]["type_selection"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["speed_box"] = "Speed Box";
	$fieldToolTipsEoc_takuhai_speed[""]["speed_box"] = "";
	$placeHoldersEoc_takuhai_speed[""]["speed_box"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["date_and_time_hidden"] = "Date And Time Hidden";
	$fieldToolTipsEoc_takuhai_speed[""]["date_and_time_hidden"] = "";
	$placeHoldersEoc_takuhai_speed[""]["date_and_time_hidden"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["user_name"] = "User Name";
	$fieldToolTipsEoc_takuhai_speed[""]["user_name"] = "";
	$placeHoldersEoc_takuhai_speed[""]["user_name"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["user_name_kana"] = "User Name Kana";
	$fieldToolTipsEoc_takuhai_speed[""]["user_name_kana"] = "";
	$placeHoldersEoc_takuhai_speed[""]["user_name_kana"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["user_tel"] = "User Tel";
	$fieldToolTipsEoc_takuhai_speed[""]["user_tel"] = "";
	$placeHoldersEoc_takuhai_speed[""]["user_tel"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["user_mail"] = "User Mail";
	$fieldToolTipsEoc_takuhai_speed[""]["user_mail"] = "";
	$placeHoldersEoc_takuhai_speed[""]["user_mail"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["user_yuubinn"] = "User Yuubinn";
	$fieldToolTipsEoc_takuhai_speed[""]["user_yuubinn"] = "";
	$placeHoldersEoc_takuhai_speed[""]["user_yuubinn"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["user_todou"] = "User Todou";
	$fieldToolTipsEoc_takuhai_speed[""]["user_todou"] = "";
	$placeHoldersEoc_takuhai_speed[""]["user_todou"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["user_sikutyouson"] = "User Sikutyouson";
	$fieldToolTipsEoc_takuhai_speed[""]["user_sikutyouson"] = "";
	$placeHoldersEoc_takuhai_speed[""]["user_sikutyouson"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["user_banti"] = "User Banti";
	$fieldToolTipsEoc_takuhai_speed[""]["user_banti"] = "";
	$placeHoldersEoc_takuhai_speed[""]["user_banti"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["bikou"] = "Bikou";
	$fieldToolTipsEoc_takuhai_speed[""]["bikou"] = "";
	$placeHoldersEoc_takuhai_speed[""]["bikou"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["insurance_speed"] = "Insurance Speed";
	$fieldToolTipsEoc_takuhai_speed[""]["insurance_speed"] = "";
	$placeHoldersEoc_takuhai_speed[""]["insurance_speed"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_takuhai_speed[""]["updated_at"] = "";
	$placeHoldersEoc_takuhai_speed[""]["updated_at"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_takuhai_speed[""]["updated_by"] = "";
	$placeHoldersEoc_takuhai_speed[""]["updated_by"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["speed_num"] = "Speed Num";
	$fieldToolTipsEoc_takuhai_speed[""]["speed_num"] = "";
	$placeHoldersEoc_takuhai_speed[""]["speed_num"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["shuka_error"] = "Shuka Error";
	$fieldToolTipsEoc_takuhai_speed[""]["shuka_error"] = "";
	$placeHoldersEoc_takuhai_speed[""]["shuka_error"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["status"] = "Status";
	$fieldToolTipsEoc_takuhai_speed[""]["status"] = "";
	$placeHoldersEoc_takuhai_speed[""]["status"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["new_link"] = "New Link";
	$fieldToolTipsEoc_takuhai_speed[""]["new_link"] = "";
	$placeHoldersEoc_takuhai_speed[""]["new_link"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["edit_link"] = "Edit Link";
	$fieldToolTipsEoc_takuhai_speed[""]["edit_link"] = "";
	$placeHoldersEoc_takuhai_speed[""]["edit_link"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["haisou_gyousha"] = "Haisou Gyousha";
	$fieldToolTipsEoc_takuhai_speed[""]["haisou_gyousha"] = "";
	$placeHoldersEoc_takuhai_speed[""]["haisou_gyousha"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["user_address1"] = "User Address1";
	$fieldToolTipsEoc_takuhai_speed[""]["user_address1"] = "";
	$placeHoldersEoc_takuhai_speed[""]["user_address1"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["user_address2"] = "User Address2";
	$fieldToolTipsEoc_takuhai_speed[""]["user_address2"] = "";
	$placeHoldersEoc_takuhai_speed[""]["user_address2"] = "";
	$fieldLabelsEoc_takuhai_speed[""]["not_hi_shuka"] = "Not Hi Shuka";
	$fieldToolTipsEoc_takuhai_speed[""]["not_hi_shuka"] = "";
	$placeHoldersEoc_takuhai_speed[""]["not_hi_shuka"] = "";
	if (count($fieldToolTipsEoc_takuhai_speed[""]))
		$tdataEoc_takuhai_speed[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_takuhai_speed["English"] = array();
	$fieldToolTipsEoc_takuhai_speed["English"] = array();
	$placeHoldersEoc_takuhai_speed["English"] = array();
	$pageTitlesEoc_takuhai_speed["English"] = array();
	$fieldLabelsEoc_takuhai_speed["English"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_speed["English"]["id"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["id"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["type_selection"] = "Type Selection";
	$fieldToolTipsEoc_takuhai_speed["English"]["type_selection"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["type_selection"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["speed_box"] = "Speed Box";
	$fieldToolTipsEoc_takuhai_speed["English"]["speed_box"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["speed_box"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["date_and_time_hidden"] = "Date And Time Hidden";
	$fieldToolTipsEoc_takuhai_speed["English"]["date_and_time_hidden"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["date_and_time_hidden"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["user_name"] = "User Name";
	$fieldToolTipsEoc_takuhai_speed["English"]["user_name"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["user_name"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["user_name_kana"] = "User Name Kana";
	$fieldToolTipsEoc_takuhai_speed["English"]["user_name_kana"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["user_name_kana"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["user_tel"] = "User Tel";
	$fieldToolTipsEoc_takuhai_speed["English"]["user_tel"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["user_tel"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["user_mail"] = "User Mail";
	$fieldToolTipsEoc_takuhai_speed["English"]["user_mail"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["user_mail"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["user_yuubinn"] = "User Yuubinn";
	$fieldToolTipsEoc_takuhai_speed["English"]["user_yuubinn"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["user_yuubinn"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["user_todou"] = "User Todou";
	$fieldToolTipsEoc_takuhai_speed["English"]["user_todou"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["user_todou"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["user_sikutyouson"] = "User Sikutyouson";
	$fieldToolTipsEoc_takuhai_speed["English"]["user_sikutyouson"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["user_sikutyouson"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["user_banti"] = "User Banti";
	$fieldToolTipsEoc_takuhai_speed["English"]["user_banti"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["user_banti"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["bikou"] = "Bikou";
	$fieldToolTipsEoc_takuhai_speed["English"]["bikou"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["bikou"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["insurance_speed"] = "Insurance Speed";
	$fieldToolTipsEoc_takuhai_speed["English"]["insurance_speed"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["insurance_speed"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_takuhai_speed["English"]["updated_at"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["updated_at"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_takuhai_speed["English"]["updated_by"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["updated_by"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["speed_num"] = "Speed Num";
	$fieldToolTipsEoc_takuhai_speed["English"]["speed_num"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["speed_num"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["shuka_error"] = "Shuka Error";
	$fieldToolTipsEoc_takuhai_speed["English"]["shuka_error"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["shuka_error"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["status"] = "Status";
	$fieldToolTipsEoc_takuhai_speed["English"]["status"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["status"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["new_link"] = "New Link";
	$fieldToolTipsEoc_takuhai_speed["English"]["new_link"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["new_link"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["edit_link"] = "Edit Link";
	$fieldToolTipsEoc_takuhai_speed["English"]["edit_link"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["edit_link"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["haisou_gyousha"] = "Haisou Gyousha";
	$fieldToolTipsEoc_takuhai_speed["English"]["haisou_gyousha"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["haisou_gyousha"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["user_address1"] = "User Address1";
	$fieldToolTipsEoc_takuhai_speed["English"]["user_address1"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["user_address1"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["user_address2"] = "User Address2";
	$fieldToolTipsEoc_takuhai_speed["English"]["user_address2"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["user_address2"] = "";
	$fieldLabelsEoc_takuhai_speed["English"]["not_hi_shuka"] = "Not Hi Shuka";
	$fieldToolTipsEoc_takuhai_speed["English"]["not_hi_shuka"] = "";
	$placeHoldersEoc_takuhai_speed["English"]["not_hi_shuka"] = "";
	if (count($fieldToolTipsEoc_takuhai_speed["English"]))
		$tdataEoc_takuhai_speed[".isUseToolTips"] = true;
}


	$tdataEoc_takuhai_speed[".NCSearch"] = true;



$tdataEoc_takuhai_speed[".shortTableName"] = "Eoc_takuhai_speed";
$tdataEoc_takuhai_speed[".nSecOptions"] = 0;
$tdataEoc_takuhai_speed[".recsPerRowPrint"] = 1;
$tdataEoc_takuhai_speed[".mainTableOwnerID"] = "";
$tdataEoc_takuhai_speed[".moveNext"] = 1;
$tdataEoc_takuhai_speed[".entityType"] = 1;

$tdataEoc_takuhai_speed[".strOriginalTableName"] = "Eoc_takuhai";

	



$tdataEoc_takuhai_speed[".showAddInPopup"] = false;

$tdataEoc_takuhai_speed[".showEditInPopup"] = false;

$tdataEoc_takuhai_speed[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_takuhai_speed[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_takuhai_speed[".fieldsForRegister"] = array();

$tdataEoc_takuhai_speed[".listAjax"] = false;

	$tdataEoc_takuhai_speed[".audit"] = true;

	$tdataEoc_takuhai_speed[".locking"] = false;



$tdataEoc_takuhai_speed[".list"] = true;



$tdataEoc_takuhai_speed[".reorderRecordsByHeader"] = true;



$tdataEoc_takuhai_speed[".view"] = true;

$tdataEoc_takuhai_speed[".import"] = true;

$tdataEoc_takuhai_speed[".exportTo"] = true;



$tdataEoc_takuhai_speed[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_takuhai_speed[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_takuhai_speed[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_takuhai_speed[".searchSaving"] = false;
//

$tdataEoc_takuhai_speed[".showSearchPanel"] = true;
		$tdataEoc_takuhai_speed[".flexibleSearch"] = true;

$tdataEoc_takuhai_speed[".isUseAjaxSuggest"] = true;

$tdataEoc_takuhai_speed[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataEoc_takuhai_speed[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_takuhai_speed[".buttonsAdded"] = false;

$tdataEoc_takuhai_speed[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_takuhai_speed[".isUseTimeForSearch"] = false;



$tdataEoc_takuhai_speed[".badgeColor"] = "6493EA";


$tdataEoc_takuhai_speed[".allSearchFields"] = array();
$tdataEoc_takuhai_speed[".filterFields"] = array();
$tdataEoc_takuhai_speed[".requiredSearchFields"] = array();

$tdataEoc_takuhai_speed[".allSearchFields"][] = "new_link";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "edit_link";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "haisou_gyousha";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "user_address1";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "user_address2";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "not_hi_shuka";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "id";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "status";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "speed_num";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "shuka_error";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "type_selection";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "date_and_time_hidden";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "speed_box";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "user_name";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "user_name_kana";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "user_tel";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "user_mail";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "user_yuubinn";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "user_todou";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "user_sikutyouson";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "user_banti";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "insurance_speed";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "bikou";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "updated_by";
	$tdataEoc_takuhai_speed[".allSearchFields"][] = "updated_at";
	

$tdataEoc_takuhai_speed[".googleLikeFields"] = array();
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "new_link";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "edit_link";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "id";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "type_selection";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "speed_box";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "user_name";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "user_name_kana";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "user_tel";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "user_mail";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "user_yuubinn";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "user_todou";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "user_sikutyouson";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "user_banti";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "bikou";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "insurance_speed";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "updated_at";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "updated_by";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "speed_num";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "shuka_error";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "status";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "haisou_gyousha";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "user_address1";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "user_address2";
$tdataEoc_takuhai_speed[".googleLikeFields"][] = "not_hi_shuka";


$tdataEoc_takuhai_speed[".advSearchFields"] = array();
$tdataEoc_takuhai_speed[".advSearchFields"][] = "new_link";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "edit_link";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "haisou_gyousha";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "user_address1";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "user_address2";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "not_hi_shuka";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "id";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "status";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "speed_num";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "shuka_error";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "type_selection";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "speed_box";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "user_name";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "user_name_kana";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "user_tel";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "user_mail";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "user_yuubinn";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "user_todou";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "user_sikutyouson";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "user_banti";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "insurance_speed";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "bikou";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "updated_by";
$tdataEoc_takuhai_speed[".advSearchFields"][] = "updated_at";

$tdataEoc_takuhai_speed[".tableType"] = "list";

$tdataEoc_takuhai_speed[".printerPageOrientation"] = 0;
$tdataEoc_takuhai_speed[".nPrinterPageScale"] = 100;

$tdataEoc_takuhai_speed[".nPrinterSplitRecords"] = 40;

$tdataEoc_takuhai_speed[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_takuhai_speed[".geocodingEnabled"] = false;





$tdataEoc_takuhai_speed[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_takuhai_speed[".pageSize"] = 20;

$tdataEoc_takuhai_speed[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_takuhai_speed[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_takuhai_speed[".orderindexes"] = array();
$tdataEoc_takuhai_speed[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdataEoc_takuhai_speed[".sqlHead"] = "SELECT `id` AS `new_link`,  `speed_num` AS `edit_link`,  `id`,  `type_selection`,  `speed_box`,  `date_and_time_hidden`,  `user_name`,  `user_name_kana`,  `user_tel`,  `user_mail`,  `user_yuubinn`,  `user_todou`,  `user_sikutyouson`,  `user_banti`,  `bikou`,  `insurance_speed`,  `updated_at`,  `updated_by`,  `speed_num`,  `shuka_error`,  `status`,  `haisou_gyousha`,  `user_address1`,  `user_address2`,  `not_hi_shuka`";
$tdataEoc_takuhai_speed[".sqlFrom"] = "FROM `Eoc_takuhai`";
$tdataEoc_takuhai_speed[".sqlWhereExpr"] = "(`type_selection` =\"スピードタイプ\") AND (`status` =1 OR `status` =14 OR `status` =15 OR `status` =2)";
$tdataEoc_takuhai_speed[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_takuhai_speed[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_takuhai_speed[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_takuhai_speed[".highlightSearchResults"] = true;

$tableKeysEoc_takuhai_speed = array();
$tableKeysEoc_takuhai_speed[] = "id";
$tdataEoc_takuhai_speed[".Keys"] = $tableKeysEoc_takuhai_speed;

$tdataEoc_takuhai_speed[".listFields"] = array();
$tdataEoc_takuhai_speed[".listFields"][] = "new_link";
$tdataEoc_takuhai_speed[".listFields"][] = "edit_link";
$tdataEoc_takuhai_speed[".listFields"][] = "status";
$tdataEoc_takuhai_speed[".listFields"][] = "haisou_gyousha";
$tdataEoc_takuhai_speed[".listFields"][] = "speed_num";
$tdataEoc_takuhai_speed[".listFields"][] = "shuka_error";
$tdataEoc_takuhai_speed[".listFields"][] = "id";
$tdataEoc_takuhai_speed[".listFields"][] = "type_selection";
$tdataEoc_takuhai_speed[".listFields"][] = "speed_box";
$tdataEoc_takuhai_speed[".listFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai_speed[".listFields"][] = "user_name";
$tdataEoc_takuhai_speed[".listFields"][] = "user_name_kana";
$tdataEoc_takuhai_speed[".listFields"][] = "user_tel";
$tdataEoc_takuhai_speed[".listFields"][] = "user_mail";
$tdataEoc_takuhai_speed[".listFields"][] = "user_yuubinn";
$tdataEoc_takuhai_speed[".listFields"][] = "user_todou";
$tdataEoc_takuhai_speed[".listFields"][] = "user_sikutyouson";
$tdataEoc_takuhai_speed[".listFields"][] = "user_banti";
$tdataEoc_takuhai_speed[".listFields"][] = "user_address1";
$tdataEoc_takuhai_speed[".listFields"][] = "user_address2";
$tdataEoc_takuhai_speed[".listFields"][] = "bikou";
$tdataEoc_takuhai_speed[".listFields"][] = "insurance_speed";
$tdataEoc_takuhai_speed[".listFields"][] = "not_hi_shuka";
$tdataEoc_takuhai_speed[".listFields"][] = "updated_at";
$tdataEoc_takuhai_speed[".listFields"][] = "updated_by";

$tdataEoc_takuhai_speed[".hideMobileList"] = array();


$tdataEoc_takuhai_speed[".viewFields"] = array();
$tdataEoc_takuhai_speed[".viewFields"][] = "new_link";
$tdataEoc_takuhai_speed[".viewFields"][] = "edit_link";
$tdataEoc_takuhai_speed[".viewFields"][] = "speed_num";
$tdataEoc_takuhai_speed[".viewFields"][] = "shuka_error";
$tdataEoc_takuhai_speed[".viewFields"][] = "status";
$tdataEoc_takuhai_speed[".viewFields"][] = "haisou_gyousha";
$tdataEoc_takuhai_speed[".viewFields"][] = "user_address1";
$tdataEoc_takuhai_speed[".viewFields"][] = "user_address2";
$tdataEoc_takuhai_speed[".viewFields"][] = "not_hi_shuka";
$tdataEoc_takuhai_speed[".viewFields"][] = "updated_by";
$tdataEoc_takuhai_speed[".viewFields"][] = "updated_at";
$tdataEoc_takuhai_speed[".viewFields"][] = "id";
$tdataEoc_takuhai_speed[".viewFields"][] = "type_selection";
$tdataEoc_takuhai_speed[".viewFields"][] = "speed_box";
$tdataEoc_takuhai_speed[".viewFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai_speed[".viewFields"][] = "user_name";
$tdataEoc_takuhai_speed[".viewFields"][] = "user_name_kana";
$tdataEoc_takuhai_speed[".viewFields"][] = "user_tel";
$tdataEoc_takuhai_speed[".viewFields"][] = "user_mail";
$tdataEoc_takuhai_speed[".viewFields"][] = "user_yuubinn";
$tdataEoc_takuhai_speed[".viewFields"][] = "user_todou";
$tdataEoc_takuhai_speed[".viewFields"][] = "user_sikutyouson";
$tdataEoc_takuhai_speed[".viewFields"][] = "user_banti";
$tdataEoc_takuhai_speed[".viewFields"][] = "bikou";
$tdataEoc_takuhai_speed[".viewFields"][] = "insurance_speed";

$tdataEoc_takuhai_speed[".addFields"] = array();

$tdataEoc_takuhai_speed[".masterListFields"] = array();
$tdataEoc_takuhai_speed[".masterListFields"][] = "new_link";
$tdataEoc_takuhai_speed[".masterListFields"][] = "edit_link";
$tdataEoc_takuhai_speed[".masterListFields"][] = "id";
$tdataEoc_takuhai_speed[".masterListFields"][] = "type_selection";
$tdataEoc_takuhai_speed[".masterListFields"][] = "speed_box";
$tdataEoc_takuhai_speed[".masterListFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai_speed[".masterListFields"][] = "user_name";
$tdataEoc_takuhai_speed[".masterListFields"][] = "user_name_kana";
$tdataEoc_takuhai_speed[".masterListFields"][] = "user_tel";
$tdataEoc_takuhai_speed[".masterListFields"][] = "user_mail";
$tdataEoc_takuhai_speed[".masterListFields"][] = "user_yuubinn";
$tdataEoc_takuhai_speed[".masterListFields"][] = "user_todou";
$tdataEoc_takuhai_speed[".masterListFields"][] = "user_sikutyouson";
$tdataEoc_takuhai_speed[".masterListFields"][] = "user_banti";
$tdataEoc_takuhai_speed[".masterListFields"][] = "bikou";
$tdataEoc_takuhai_speed[".masterListFields"][] = "insurance_speed";
$tdataEoc_takuhai_speed[".masterListFields"][] = "updated_at";
$tdataEoc_takuhai_speed[".masterListFields"][] = "updated_by";
$tdataEoc_takuhai_speed[".masterListFields"][] = "speed_num";
$tdataEoc_takuhai_speed[".masterListFields"][] = "shuka_error";
$tdataEoc_takuhai_speed[".masterListFields"][] = "status";
$tdataEoc_takuhai_speed[".masterListFields"][] = "haisou_gyousha";
$tdataEoc_takuhai_speed[".masterListFields"][] = "user_address1";
$tdataEoc_takuhai_speed[".masterListFields"][] = "user_address2";
$tdataEoc_takuhai_speed[".masterListFields"][] = "not_hi_shuka";

$tdataEoc_takuhai_speed[".inlineAddFields"] = array();

$tdataEoc_takuhai_speed[".editFields"] = array();

$tdataEoc_takuhai_speed[".inlineEditFields"] = array();

$tdataEoc_takuhai_speed[".updateSelectedFields"] = array();


$tdataEoc_takuhai_speed[".exportFields"] = array();
$tdataEoc_takuhai_speed[".exportFields"][] = "new_link";
$tdataEoc_takuhai_speed[".exportFields"][] = "edit_link";
$tdataEoc_takuhai_speed[".exportFields"][] = "shuka_error";
$tdataEoc_takuhai_speed[".exportFields"][] = "status";
$tdataEoc_takuhai_speed[".exportFields"][] = "haisou_gyousha";
$tdataEoc_takuhai_speed[".exportFields"][] = "user_address1";
$tdataEoc_takuhai_speed[".exportFields"][] = "user_address2";
$tdataEoc_takuhai_speed[".exportFields"][] = "updated_by";
$tdataEoc_takuhai_speed[".exportFields"][] = "updated_at";
$tdataEoc_takuhai_speed[".exportFields"][] = "id";
$tdataEoc_takuhai_speed[".exportFields"][] = "type_selection";
$tdataEoc_takuhai_speed[".exportFields"][] = "speed_box";
$tdataEoc_takuhai_speed[".exportFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai_speed[".exportFields"][] = "user_name";
$tdataEoc_takuhai_speed[".exportFields"][] = "user_name_kana";
$tdataEoc_takuhai_speed[".exportFields"][] = "user_tel";
$tdataEoc_takuhai_speed[".exportFields"][] = "user_mail";
$tdataEoc_takuhai_speed[".exportFields"][] = "user_yuubinn";
$tdataEoc_takuhai_speed[".exportFields"][] = "user_todou";
$tdataEoc_takuhai_speed[".exportFields"][] = "user_sikutyouson";
$tdataEoc_takuhai_speed[".exportFields"][] = "user_banti";
$tdataEoc_takuhai_speed[".exportFields"][] = "bikou";
$tdataEoc_takuhai_speed[".exportFields"][] = "insurance_speed";

$tdataEoc_takuhai_speed[".importFields"] = array();
$tdataEoc_takuhai_speed[".importFields"][] = "new_link";
$tdataEoc_takuhai_speed[".importFields"][] = "edit_link";
$tdataEoc_takuhai_speed[".importFields"][] = "id";
$tdataEoc_takuhai_speed[".importFields"][] = "type_selection";
$tdataEoc_takuhai_speed[".importFields"][] = "speed_box";
$tdataEoc_takuhai_speed[".importFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai_speed[".importFields"][] = "user_name";
$tdataEoc_takuhai_speed[".importFields"][] = "user_name_kana";
$tdataEoc_takuhai_speed[".importFields"][] = "user_tel";
$tdataEoc_takuhai_speed[".importFields"][] = "user_mail";
$tdataEoc_takuhai_speed[".importFields"][] = "user_yuubinn";
$tdataEoc_takuhai_speed[".importFields"][] = "user_todou";
$tdataEoc_takuhai_speed[".importFields"][] = "user_sikutyouson";
$tdataEoc_takuhai_speed[".importFields"][] = "user_banti";
$tdataEoc_takuhai_speed[".importFields"][] = "bikou";
$tdataEoc_takuhai_speed[".importFields"][] = "insurance_speed";
$tdataEoc_takuhai_speed[".importFields"][] = "updated_at";
$tdataEoc_takuhai_speed[".importFields"][] = "updated_by";
$tdataEoc_takuhai_speed[".importFields"][] = "shuka_error";
$tdataEoc_takuhai_speed[".importFields"][] = "status";
$tdataEoc_takuhai_speed[".importFields"][] = "haisou_gyousha";
$tdataEoc_takuhai_speed[".importFields"][] = "user_address1";
$tdataEoc_takuhai_speed[".importFields"][] = "user_address2";

$tdataEoc_takuhai_speed[".printFields"] = array();

//	new_link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "new_link";
	$fdata["GoodName"] = "new_link";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","new_link");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id`";

	
	
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




	$tdataEoc_takuhai_speed["new_link"] = $fdata;
//	edit_link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "edit_link";
	$fdata["GoodName"] = "edit_link";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","edit_link");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "speed_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`speed_num`";

	
	
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
			$edata["EditParams"].= " maxlength=11";

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




	$tdataEoc_takuhai_speed["edit_link"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdataEoc_takuhai_speed["id"] = $fdata;
//	type_selection
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "type_selection";
	$fdata["GoodName"] = "type_selection";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","type_selection");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdataEoc_takuhai_speed["type_selection"] = $fdata;
//	speed_box
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "speed_box";
	$fdata["GoodName"] = "speed_box";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","speed_box");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "speed_box";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`speed_box`";

	
	
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




	$tdataEoc_takuhai_speed["speed_box"] = $fdata;
//	date_and_time_hidden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "date_and_time_hidden";
	$fdata["GoodName"] = "date_and_time_hidden";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","date_and_time_hidden");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date_and_time_hidden";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date_and_time_hidden`";

	
	
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




	$tdataEoc_takuhai_speed["date_and_time_hidden"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","user_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_name`";

	
	
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




	$tdataEoc_takuhai_speed["user_name"] = $fdata;
//	user_name_kana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "user_name_kana";
	$fdata["GoodName"] = "user_name_kana";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","user_name_kana");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_name_kana";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_name_kana`";

	
	
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




	$tdataEoc_takuhai_speed["user_name_kana"] = $fdata;
//	user_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "user_tel";
	$fdata["GoodName"] = "user_tel";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","user_tel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_tel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_tel`";

	
	
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




	$tdataEoc_takuhai_speed["user_tel"] = $fdata;
//	user_mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "user_mail";
	$fdata["GoodName"] = "user_mail";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","user_mail");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_mail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_mail`";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_speed["user_mail"] = $fdata;
//	user_yuubinn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "user_yuubinn";
	$fdata["GoodName"] = "user_yuubinn";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","user_yuubinn");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_yuubinn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_yuubinn`";

	
	
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




	$tdataEoc_takuhai_speed["user_yuubinn"] = $fdata;
//	user_todou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "user_todou";
	$fdata["GoodName"] = "user_todou";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","user_todou");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_todou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_todou`";

	
	
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




	$tdataEoc_takuhai_speed["user_todou"] = $fdata;
//	user_sikutyouson
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "user_sikutyouson";
	$fdata["GoodName"] = "user_sikutyouson";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","user_sikutyouson");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_sikutyouson";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_sikutyouson`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdataEoc_takuhai_speed["user_sikutyouson"] = $fdata;
//	user_banti
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "user_banti";
	$fdata["GoodName"] = "user_banti";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","user_banti");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_banti";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_banti`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdataEoc_takuhai_speed["user_banti"] = $fdata;
//	bikou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "bikou";
	$fdata["GoodName"] = "bikou";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","bikou");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bikou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`bikou`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdataEoc_takuhai_speed["bikou"] = $fdata;
//	insurance_speed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "insurance_speed";
	$fdata["GoodName"] = "insurance_speed";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","insurance_speed");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "insurance_speed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`insurance_speed`";

	
	
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




	$tdataEoc_takuhai_speed["insurance_speed"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdataEoc_takuhai_speed["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdataEoc_takuhai_speed["updated_by"] = $fdata;
//	speed_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "speed_num";
	$fdata["GoodName"] = "speed_num";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","speed_num");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "speed_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`speed_num`";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_speed["speed_num"] = $fdata;
//	shuka_error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "shuka_error";
	$fdata["GoodName"] = "shuka_error";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","shuka_error");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shuka_error";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shuka_error`";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "Eoc_takuhai_error";
	$edata["LookupConnId"] = "internet_at_urlounge_co_jp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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




	$tdataEoc_takuhai_speed["shuka_error"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdataEoc_takuhai_speed["status"] = $fdata;
//	haisou_gyousha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "haisou_gyousha";
	$fdata["GoodName"] = "haisou_gyousha";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","haisou_gyousha");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "haisou_gyousha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`haisou_gyousha`";

	
	
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
	$edata["LookupValues"][] = "佐川";
	$edata["LookupValues"][] = "ヤマト";

	
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




	$tdataEoc_takuhai_speed["haisou_gyousha"] = $fdata;
//	user_address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "user_address1";
	$fdata["GoodName"] = "user_address1";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","user_address1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_address1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_address1`";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_speed["user_address1"] = $fdata;
//	user_address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "user_address2";
	$fdata["GoodName"] = "user_address2";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","user_address2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_address2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_address2`";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_speed["user_address2"] = $fdata;
//	not_hi_shuka
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "not_hi_shuka";
	$fdata["GoodName"] = "not_hi_shuka";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_speed","not_hi_shuka");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "not_hi_shuka";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`not_hi_shuka`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




	$tdataEoc_takuhai_speed["not_hi_shuka"] = $fdata;


$tables_data["Eoc_takuhai_speed"]=&$tdataEoc_takuhai_speed;
$field_labels["Eoc_takuhai_speed"] = &$fieldLabelsEoc_takuhai_speed;
$fieldToolTips["Eoc_takuhai_speed"] = &$fieldToolTipsEoc_takuhai_speed;
$placeHolders["Eoc_takuhai_speed"] = &$placeHoldersEoc_takuhai_speed;
$page_titles["Eoc_takuhai_speed"] = &$pageTitlesEoc_takuhai_speed;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_takuhai_speed"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_takuhai_speed"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_takuhai_speed()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id` AS `new_link`,  `speed_num` AS `edit_link`,  `id`,  `type_selection`,  `speed_box`,  `date_and_time_hidden`,  `user_name`,  `user_name_kana`,  `user_tel`,  `user_mail`,  `user_yuubinn`,  `user_todou`,  `user_sikutyouson`,  `user_banti`,  `bikou`,  `insurance_speed`,  `updated_at`,  `updated_by`,  `speed_num`,  `shuka_error`,  `status`,  `haisou_gyousha`,  `user_address1`,  `user_address2`,  `not_hi_shuka`";
$proto0["m_strFrom"] = "FROM `Eoc_takuhai`";
$proto0["m_strWhere"] = "(`type_selection` =\"スピードタイプ\") AND (`status` =1 OR `status` =14 OR `status` =15 OR `status` =2)";
$proto0["m_strOrderBy"] = "ORDER BY `id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(`type_selection` =\"スピードタイプ\") AND (`status` =1 OR `status` =14 OR `status` =15 OR `status` =2)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(`type_selection` =\"スピードタイプ\") AND (`status` =1 OR `status` =14 OR `status` =15 OR `status` =2)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`type_selection` =\"スピードタイプ\"";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "type_selection",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=\"スピードタイプ\"";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "`status` =1 OR `status` =14 OR `status` =15 OR `status` =2";
$proto6["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`status` =1 OR `status` =14 OR `status` =15 OR `status` =2"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
						$proto8=array();
$proto8["m_sql"] = "`status` =1";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "=1";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto6["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "`status` =14";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "=14";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto6["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "`status` =15";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "=15";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto6["m_contained"][]=$obj;
						$proto14=array();
$proto14["m_sql"] = "`status` =2";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "=2";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto6["m_contained"][]=$obj;
$proto6["m_strCase"] = "";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto18["m_sql"] = "`id`";
$proto18["m_srcTableName"] = "Eoc_takuhai_speed";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "new_link";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "speed_num",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto20["m_sql"] = "`speed_num`";
$proto20["m_srcTableName"] = "Eoc_takuhai_speed";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "edit_link";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto22["m_sql"] = "`id`";
$proto22["m_srcTableName"] = "Eoc_takuhai_speed";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "type_selection",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto24["m_sql"] = "`type_selection`";
$proto24["m_srcTableName"] = "Eoc_takuhai_speed";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "speed_box",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto26["m_sql"] = "`speed_box`";
$proto26["m_srcTableName"] = "Eoc_takuhai_speed";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "date_and_time_hidden",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto28["m_sql"] = "`date_and_time_hidden`";
$proto28["m_srcTableName"] = "Eoc_takuhai_speed";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto30["m_sql"] = "`user_name`";
$proto30["m_srcTableName"] = "Eoc_takuhai_speed";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name_kana",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto32["m_sql"] = "`user_name_kana`";
$proto32["m_srcTableName"] = "Eoc_takuhai_speed";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "user_tel",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto34["m_sql"] = "`user_tel`";
$proto34["m_srcTableName"] = "Eoc_takuhai_speed";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "user_mail",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto36["m_sql"] = "`user_mail`";
$proto36["m_srcTableName"] = "Eoc_takuhai_speed";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "user_yuubinn",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto38["m_sql"] = "`user_yuubinn`";
$proto38["m_srcTableName"] = "Eoc_takuhai_speed";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "user_todou",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto40["m_sql"] = "`user_todou`";
$proto40["m_srcTableName"] = "Eoc_takuhai_speed";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "user_sikutyouson",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto42["m_sql"] = "`user_sikutyouson`";
$proto42["m_srcTableName"] = "Eoc_takuhai_speed";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "user_banti",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto44["m_sql"] = "`user_banti`";
$proto44["m_srcTableName"] = "Eoc_takuhai_speed";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "bikou",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto46["m_sql"] = "`bikou`";
$proto46["m_srcTableName"] = "Eoc_takuhai_speed";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "insurance_speed",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto48["m_sql"] = "`insurance_speed`";
$proto48["m_srcTableName"] = "Eoc_takuhai_speed";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto50["m_sql"] = "`updated_at`";
$proto50["m_srcTableName"] = "Eoc_takuhai_speed";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto52["m_sql"] = "`updated_by`";
$proto52["m_srcTableName"] = "Eoc_takuhai_speed";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "speed_num",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto54["m_sql"] = "`speed_num`";
$proto54["m_srcTableName"] = "Eoc_takuhai_speed";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "shuka_error",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto56["m_sql"] = "`shuka_error`";
$proto56["m_srcTableName"] = "Eoc_takuhai_speed";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto58["m_sql"] = "`status`";
$proto58["m_srcTableName"] = "Eoc_takuhai_speed";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "haisou_gyousha",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto60["m_sql"] = "`haisou_gyousha`";
$proto60["m_srcTableName"] = "Eoc_takuhai_speed";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "user_address1",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto62["m_sql"] = "`user_address1`";
$proto62["m_srcTableName"] = "Eoc_takuhai_speed";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "user_address2",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto64["m_sql"] = "`user_address2`";
$proto64["m_srcTableName"] = "Eoc_takuhai_speed";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "not_hi_shuka",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto66["m_sql"] = "`not_hi_shuka`";
$proto66["m_srcTableName"] = "Eoc_takuhai_speed";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto68=array();
$proto68["m_link"] = "SQLL_MAIN";
			$proto69=array();
$proto69["m_strName"] = "Eoc_takuhai";
$proto69["m_srcTableName"] = "Eoc_takuhai_speed";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "id";
$proto69["m_columns"][] = "brand_confirm";
$proto69["m_columns"][] = "number_of_times";
$proto69["m_columns"][] = "type_selection";
$proto69["m_columns"][] = "reuse_box";
$proto69["m_columns"][] = "kit_detail";
$proto69["m_columns"][] = "date_select";
$proto69["m_columns"][] = "time_select";
$proto69["m_columns"][] = "date_select_hidden";
$proto69["m_columns"][] = "time_select_hidden";
$proto69["m_columns"][] = "speed_box";
$proto69["m_columns"][] = "date_and_time";
$proto69["m_columns"][] = "date_and_time_hidden";
$proto69["m_columns"][] = "user_name";
$proto69["m_columns"][] = "user_name_kana";
$proto69["m_columns"][] = "user_tel";
$proto69["m_columns"][] = "user_mail";
$proto69["m_columns"][] = "user_yuubinn";
$proto69["m_columns"][] = "user_todou";
$proto69["m_columns"][] = "user_sikutyouson";
$proto69["m_columns"][] = "user_banti";
$proto69["m_columns"][] = "tel_mail_line";
$proto69["m_columns"][] = "bikou";
$proto69["m_columns"][] = "insurance_speed";
$proto69["m_columns"][] = "insurance";
$proto69["m_columns"][] = "mail_magazin";
$proto69["m_columns"][] = "anke_1";
$proto69["m_columns"][] = "anke_2";
$proto69["m_columns"][] = "anke_3";
$proto69["m_columns"][] = "mail_text";
$proto69["m_columns"][] = "REMOTE_HOST";
$proto69["m_columns"][] = "REMOTE_ADDR";
$proto69["m_columns"][] = "USER_AGENT";
$proto69["m_columns"][] = "HTTP_REFERER";
$proto69["m_columns"][] = "key_code";
$proto69["m_columns"][] = "cv_site";
$proto69["m_columns"][] = "cv_device";
$proto69["m_columns"][] = "cv_page";
$proto69["m_columns"][] = "cv_time";
$proto69["m_columns"][] = "ecc_id";
$proto69["m_columns"][] = "kit_denpyou";
$proto69["m_columns"][] = "kit_huutou";
$proto69["m_columns"][] = "kit_S";
$proto69["m_columns"][] = "kit_M";
$proto69["m_columns"][] = "kit_L";
$proto69["m_columns"][] = "warehouse_instruction";
$proto69["m_columns"][] = "delivery_slip_instruction";
$proto69["m_columns"][] = "haisou_bangou";
$proto69["m_columns"][] = "shipping_number";
$proto69["m_columns"][] = "arrival_date";
$proto69["m_columns"][] = "updated_at";
$proto69["m_columns"][] = "updated_by";
$proto69["m_columns"][] = "line_satei";
$proto69["m_columns"][] = "insurance_kingaku";
$proto69["m_columns"][] = "status";
$proto69["m_columns"][] = "hakosuu";
$proto69["m_columns"][] = "purchase_type";
$proto69["m_columns"][] = "seiyakukin";
$proto69["m_columns"][] = "received_time";
$proto69["m_columns"][] = "transfer_id";
$proto69["m_columns"][] = "price_error";
$proto69["m_columns"][] = "speed_num";
$proto69["m_columns"][] = "shuka_status";
$proto69["m_columns"][] = "shuka_error";
$proto69["m_columns"][] = "haisou_gyousha";
$proto69["m_columns"][] = "user_address1";
$proto69["m_columns"][] = "user_address2";
$proto69["m_columns"][] = "not_hi_shuka";
$proto69["m_columns"][] = "created_at";
$proto69["m_columns"][] = "is_many_product";
$proto69["m_columns"][] = "Eoc_trader_id";
$proto69["m_columns"][] = "service_users_id";
$proto69["m_columns"][] = "mypage_update_prohibited";
$proto69["m_columns"][] = "memo";
$proto69["m_columns"][] = "satei_start";
$proto69["m_columns"][] = "satei_end";
$proto69["m_columns"][] = "satei_start_by";
$proto69["m_columns"][] = "contract_at";
$proto69["m_columns"][] = "ad_param";
$proto69["m_columns"][] = "is_NJ_or_BJ";
$proto69["m_columns"][] = "shipping_date";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "`Eoc_takuhai`";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "Eoc_takuhai_speed";
$proto70=array();
$proto70["m_sql"] = "";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto72=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai_speed"
));

$proto72["m_column"]=$obj;
$proto72["m_bAsc"] = 0;
$proto72["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto72);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_takuhai_speed";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_takuhai_speed = createSqlQuery_Eoc_takuhai_speed();


	
		;

																									

$tdataEoc_takuhai_speed[".sqlquery"] = $queryData_Eoc_takuhai_speed;

include_once(getabspath("include/Eoc_takuhai_speed_events.php"));
$tableEvents["Eoc_takuhai_speed"] = new eventclass_Eoc_takuhai_speed;
$tdataEoc_takuhai_speed[".hasEvents"] = true;

?>