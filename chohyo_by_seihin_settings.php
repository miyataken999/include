<?php
require_once(getabspath("classes/cipherer.php"));




$tdatachohyo_by_seihin = array();
	$tdatachohyo_by_seihin[".truncateText"] = true;
	$tdatachohyo_by_seihin[".NumberOfChars"] = 80;
	$tdatachohyo_by_seihin[".ShortName"] = "chohyo_by_seihin";
	$tdatachohyo_by_seihin[".OwnerID"] = "";
	$tdatachohyo_by_seihin[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelschohyo_by_seihin = array();
$fieldToolTipschohyo_by_seihin = array();
$pageTitleschohyo_by_seihin = array();
$placeHolderschohyo_by_seihin = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelschohyo_by_seihin["Japanese"] = array();
	$fieldToolTipschohyo_by_seihin["Japanese"] = array();
	$placeHolderschohyo_by_seihin["Japanese"] = array();
	$pageTitleschohyo_by_seihin["Japanese"] = array();
	$fieldLabelschohyo_by_seihin["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipschohyo_by_seihin["Japanese"]["product_id"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["product_id"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipschohyo_by_seihin["Japanese"]["category_id"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["category_id"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipschohyo_by_seihin["Japanese"]["sub_category_id1"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["sub_category_id1"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["status"] = "商品状態";
	$fieldToolTipschohyo_by_seihin["Japanese"]["status"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["status"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipschohyo_by_seihin["Japanese"]["product_num"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["product_num"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipschohyo_by_seihin["Japanese"]["yahoo_sinaban"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["gold_property"] = "金性";
	$fieldToolTipschohyo_by_seihin["Japanese"]["gold_property"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["gold_property"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["Gram"] = "金性グラム";
	$fieldToolTipschohyo_by_seihin["Japanese"]["Gram"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["Gram"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["Finish"] = "仕上";
	$fieldToolTipschohyo_by_seihin["Japanese"]["Finish"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["Finish"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["Discrimination"] = "鑑別";
	$fieldToolTipschohyo_by_seihin["Japanese"]["Discrimination"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["Discrimination"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["No"] = "No";
	$fieldToolTipschohyo_by_seihin["Japanese"]["No"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["No"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["location"] = "ロケーション";
	$fieldToolTipschohyo_by_seihin["Japanese"]["location"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["location"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["onsya"] = "御社";
	$fieldToolTipschohyo_by_seihin["Japanese"]["onsya"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["onsya"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["special_instructions_1"] = "特別指示1";
	$fieldToolTipschohyo_by_seihin["Japanese"]["special_instructions_1"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["special_instructions_1"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["special_instructions_2"] = "特別指示2";
	$fieldToolTipschohyo_by_seihin["Japanese"]["special_instructions_2"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["special_instructions_2"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["special_instructions_3"] = "特別指示3";
	$fieldToolTipschohyo_by_seihin["Japanese"]["special_instructions_3"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["special_instructions_3"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["chohyo_id"] = "帳票Id";
	$fieldToolTipschohyo_by_seihin["Japanese"]["chohyo_id"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["chohyo_id"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["accessories"] = "付属品";
	$fieldToolTipschohyo_by_seihin["Japanese"]["accessories"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["accessories"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipschohyo_by_seihin["Japanese"]["ecc_id"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["ecc_id"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["price"] = "買取額";
	$fieldToolTipschohyo_by_seihin["Japanese"]["price"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["price"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipschohyo_by_seihin["Japanese"]["satei_by"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["satei_by"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipschohyo_by_seihin["Japanese"]["satei_hi"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["satei_hi"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["REG_AUTHOR"] = "成約人";
	$fieldToolTipschohyo_by_seihin["Japanese"]["REG_AUTHOR"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["REG_AUTHOR"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["DT_UP_DATE"] = "成約日";
	$fieldToolTipschohyo_by_seihin["Japanese"]["DT_UP_DATE"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["kaitori_by"] = "登録人";
	$fieldToolTipschohyo_by_seihin["Japanese"]["kaitori_by"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["kaitori_by"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["kaitory_hi"] = "登録日";
	$fieldToolTipschohyo_by_seihin["Japanese"]["kaitory_hi"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["kaitory_hi"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["updated_by"] = "最終更新者";
	$fieldToolTipschohyo_by_seihin["Japanese"]["updated_by"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["updated_by"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["updated_at"] = "最終更新日";
	$fieldToolTipschohyo_by_seihin["Japanese"]["updated_at"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["updated_at"] = "";
	$fieldLabelschohyo_by_seihin["Japanese"]["description"] = "メモ";
	$fieldToolTipschohyo_by_seihin["Japanese"]["description"] = "";
	$placeHolderschohyo_by_seihin["Japanese"]["description"] = "";
	if (count($fieldToolTipschohyo_by_seihin["Japanese"]))
		$tdatachohyo_by_seihin[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelschohyo_by_seihin[""] = array();
	$fieldToolTipschohyo_by_seihin[""] = array();
	$placeHolderschohyo_by_seihin[""] = array();
	$pageTitleschohyo_by_seihin[""] = array();
	$fieldLabelschohyo_by_seihin[""]["No"] = "No";
	$fieldToolTipschohyo_by_seihin[""]["No"] = "";
	$placeHolderschohyo_by_seihin[""]["No"] = "";
	$fieldLabelschohyo_by_seihin[""]["location"] = "Location";
	$fieldToolTipschohyo_by_seihin[""]["location"] = "";
	$placeHolderschohyo_by_seihin[""]["location"] = "";
	$fieldLabelschohyo_by_seihin[""]["onsya"] = "Onsya";
	$fieldToolTipschohyo_by_seihin[""]["onsya"] = "";
	$placeHolderschohyo_by_seihin[""]["onsya"] = "";
	$fieldLabelschohyo_by_seihin[""]["special_instructions_1"] = "Special Instructions 1";
	$fieldToolTipschohyo_by_seihin[""]["special_instructions_1"] = "";
	$placeHolderschohyo_by_seihin[""]["special_instructions_1"] = "";
	$fieldLabelschohyo_by_seihin[""]["special_instructions_2"] = "Special Instructions 2";
	$fieldToolTipschohyo_by_seihin[""]["special_instructions_2"] = "";
	$placeHolderschohyo_by_seihin[""]["special_instructions_2"] = "";
	$fieldLabelschohyo_by_seihin[""]["special_instructions_3"] = "Special Instructions 3";
	$fieldToolTipschohyo_by_seihin[""]["special_instructions_3"] = "";
	$placeHolderschohyo_by_seihin[""]["special_instructions_3"] = "";
	$fieldLabelschohyo_by_seihin[""]["chohyo_id"] = "Chohyo Id";
	$fieldToolTipschohyo_by_seihin[""]["chohyo_id"] = "";
	$placeHolderschohyo_by_seihin[""]["chohyo_id"] = "";
	$fieldLabelschohyo_by_seihin[""]["accessories"] = "Accessories";
	$fieldToolTipschohyo_by_seihin[""]["accessories"] = "";
	$placeHolderschohyo_by_seihin[""]["accessories"] = "";
	$fieldLabelschohyo_by_seihin[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipschohyo_by_seihin[""]["ecc_id"] = "";
	$placeHolderschohyo_by_seihin[""]["ecc_id"] = "";
	$fieldLabelschohyo_by_seihin[""]["price"] = "Price";
	$fieldToolTipschohyo_by_seihin[""]["price"] = "";
	$placeHolderschohyo_by_seihin[""]["price"] = "";
	$fieldLabelschohyo_by_seihin[""]["satei_by"] = "Satei By";
	$fieldToolTipschohyo_by_seihin[""]["satei_by"] = "";
	$placeHolderschohyo_by_seihin[""]["satei_by"] = "";
	$fieldLabelschohyo_by_seihin[""]["satei_hi"] = "Satei Hi";
	$fieldToolTipschohyo_by_seihin[""]["satei_hi"] = "";
	$placeHolderschohyo_by_seihin[""]["satei_hi"] = "";
	$fieldLabelschohyo_by_seihin[""]["REG_AUTHOR"] = "REG AUTHOR";
	$fieldToolTipschohyo_by_seihin[""]["REG_AUTHOR"] = "";
	$placeHolderschohyo_by_seihin[""]["REG_AUTHOR"] = "";
	$fieldLabelschohyo_by_seihin[""]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipschohyo_by_seihin[""]["DT_UP_DATE"] = "";
	$placeHolderschohyo_by_seihin[""]["DT_UP_DATE"] = "";
	$fieldLabelschohyo_by_seihin[""]["kaitori_by"] = "Kaitori By";
	$fieldToolTipschohyo_by_seihin[""]["kaitori_by"] = "";
	$placeHolderschohyo_by_seihin[""]["kaitori_by"] = "";
	$fieldLabelschohyo_by_seihin[""]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipschohyo_by_seihin[""]["kaitory_hi"] = "";
	$placeHolderschohyo_by_seihin[""]["kaitory_hi"] = "";
	$fieldLabelschohyo_by_seihin[""]["updated_by"] = "Updated By";
	$fieldToolTipschohyo_by_seihin[""]["updated_by"] = "";
	$placeHolderschohyo_by_seihin[""]["updated_by"] = "";
	$fieldLabelschohyo_by_seihin[""]["updated_at"] = "Updated At";
	$fieldToolTipschohyo_by_seihin[""]["updated_at"] = "";
	$placeHolderschohyo_by_seihin[""]["updated_at"] = "";
	$fieldLabelschohyo_by_seihin[""]["description"] = "Description";
	$fieldToolTipschohyo_by_seihin[""]["description"] = "";
	$placeHolderschohyo_by_seihin[""]["description"] = "";
	if (count($fieldToolTipschohyo_by_seihin[""]))
		$tdatachohyo_by_seihin[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelschohyo_by_seihin["English"] = array();
	$fieldToolTipschohyo_by_seihin["English"] = array();
	$placeHolderschohyo_by_seihin["English"] = array();
	$pageTitleschohyo_by_seihin["English"] = array();
	$fieldLabelschohyo_by_seihin["English"]["No"] = "No";
	$fieldToolTipschohyo_by_seihin["English"]["No"] = "";
	$placeHolderschohyo_by_seihin["English"]["No"] = "";
	$fieldLabelschohyo_by_seihin["English"]["location"] = "Location";
	$fieldToolTipschohyo_by_seihin["English"]["location"] = "";
	$placeHolderschohyo_by_seihin["English"]["location"] = "";
	$fieldLabelschohyo_by_seihin["English"]["onsya"] = "Onsya";
	$fieldToolTipschohyo_by_seihin["English"]["onsya"] = "";
	$placeHolderschohyo_by_seihin["English"]["onsya"] = "";
	$fieldLabelschohyo_by_seihin["English"]["special_instructions_1"] = "Special Instructions 1";
	$fieldToolTipschohyo_by_seihin["English"]["special_instructions_1"] = "";
	$placeHolderschohyo_by_seihin["English"]["special_instructions_1"] = "";
	$fieldLabelschohyo_by_seihin["English"]["special_instructions_2"] = "Special Instructions 2";
	$fieldToolTipschohyo_by_seihin["English"]["special_instructions_2"] = "";
	$placeHolderschohyo_by_seihin["English"]["special_instructions_2"] = "";
	$fieldLabelschohyo_by_seihin["English"]["special_instructions_3"] = "Special Instructions 3";
	$fieldToolTipschohyo_by_seihin["English"]["special_instructions_3"] = "";
	$placeHolderschohyo_by_seihin["English"]["special_instructions_3"] = "";
	$fieldLabelschohyo_by_seihin["English"]["chohyo_id"] = "Chohyo Id";
	$fieldToolTipschohyo_by_seihin["English"]["chohyo_id"] = "";
	$placeHolderschohyo_by_seihin["English"]["chohyo_id"] = "";
	$fieldLabelschohyo_by_seihin["English"]["accessories"] = "Accessories";
	$fieldToolTipschohyo_by_seihin["English"]["accessories"] = "";
	$placeHolderschohyo_by_seihin["English"]["accessories"] = "";
	$fieldLabelschohyo_by_seihin["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipschohyo_by_seihin["English"]["ecc_id"] = "";
	$placeHolderschohyo_by_seihin["English"]["ecc_id"] = "";
	$fieldLabelschohyo_by_seihin["English"]["price"] = "Price";
	$fieldToolTipschohyo_by_seihin["English"]["price"] = "";
	$placeHolderschohyo_by_seihin["English"]["price"] = "";
	$fieldLabelschohyo_by_seihin["English"]["satei_by"] = "Satei By";
	$fieldToolTipschohyo_by_seihin["English"]["satei_by"] = "";
	$placeHolderschohyo_by_seihin["English"]["satei_by"] = "";
	$fieldLabelschohyo_by_seihin["English"]["satei_hi"] = "Satei Hi";
	$fieldToolTipschohyo_by_seihin["English"]["satei_hi"] = "";
	$placeHolderschohyo_by_seihin["English"]["satei_hi"] = "";
	$fieldLabelschohyo_by_seihin["English"]["REG_AUTHOR"] = "REG AUTHOR";
	$fieldToolTipschohyo_by_seihin["English"]["REG_AUTHOR"] = "";
	$placeHolderschohyo_by_seihin["English"]["REG_AUTHOR"] = "";
	$fieldLabelschohyo_by_seihin["English"]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipschohyo_by_seihin["English"]["DT_UP_DATE"] = "";
	$placeHolderschohyo_by_seihin["English"]["DT_UP_DATE"] = "";
	$fieldLabelschohyo_by_seihin["English"]["kaitori_by"] = "Kaitori By";
	$fieldToolTipschohyo_by_seihin["English"]["kaitori_by"] = "";
	$placeHolderschohyo_by_seihin["English"]["kaitori_by"] = "";
	$fieldLabelschohyo_by_seihin["English"]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipschohyo_by_seihin["English"]["kaitory_hi"] = "";
	$placeHolderschohyo_by_seihin["English"]["kaitory_hi"] = "";
	$fieldLabelschohyo_by_seihin["English"]["updated_by"] = "Updated By";
	$fieldToolTipschohyo_by_seihin["English"]["updated_by"] = "";
	$placeHolderschohyo_by_seihin["English"]["updated_by"] = "";
	$fieldLabelschohyo_by_seihin["English"]["updated_at"] = "Updated At";
	$fieldToolTipschohyo_by_seihin["English"]["updated_at"] = "";
	$placeHolderschohyo_by_seihin["English"]["updated_at"] = "";
	$fieldLabelschohyo_by_seihin["English"]["description"] = "Description";
	$fieldToolTipschohyo_by_seihin["English"]["description"] = "";
	$placeHolderschohyo_by_seihin["English"]["description"] = "";
	if (count($fieldToolTipschohyo_by_seihin["English"]))
		$tdatachohyo_by_seihin[".isUseToolTips"] = true;
}


	$tdatachohyo_by_seihin[".NCSearch"] = true;



$tdatachohyo_by_seihin[".shortTableName"] = "chohyo_by_seihin";
$tdatachohyo_by_seihin[".nSecOptions"] = 0;
$tdatachohyo_by_seihin[".recsPerRowPrint"] = 1;
$tdatachohyo_by_seihin[".mainTableOwnerID"] = "";
$tdatachohyo_by_seihin[".moveNext"] = 1;
$tdatachohyo_by_seihin[".entityType"] = 1;

$tdatachohyo_by_seihin[".strOriginalTableName"] = "shouhin";

	



$tdatachohyo_by_seihin[".showAddInPopup"] = false;

$tdatachohyo_by_seihin[".showEditInPopup"] = false;

$tdatachohyo_by_seihin[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatachohyo_by_seihin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatachohyo_by_seihin[".fieldsForRegister"] = array();

$tdatachohyo_by_seihin[".listAjax"] = false;

	$tdatachohyo_by_seihin[".audit"] = true;

	$tdatachohyo_by_seihin[".locking"] = false;



$tdatachohyo_by_seihin[".list"] = true;

$tdatachohyo_by_seihin[".inlineEdit"] = true;


$tdatachohyo_by_seihin[".reorderRecordsByHeader"] = true;
$tdatachohyo_by_seihin[".createSortByDropdown"] = true;
$tdatachohyo_by_seihin[".strSortControlSettingsJSON"] = "";



$tdatachohyo_by_seihin[".inlineAdd"] = true;

$tdatachohyo_by_seihin[".import"] = true;

$tdatachohyo_by_seihin[".exportTo"] = true;



$tdatachohyo_by_seihin[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatachohyo_by_seihin[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatachohyo_by_seihin[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatachohyo_by_seihin[".searchSaving"] = false;
//

$tdatachohyo_by_seihin[".showSearchPanel"] = true;
		$tdatachohyo_by_seihin[".flexibleSearch"] = true;

$tdatachohyo_by_seihin[".isUseAjaxSuggest"] = true;

$tdatachohyo_by_seihin[".rowHighlite"] = true;



																																																																																																																						
					
					
																		
					
					
																																																																																										

$tdatachohyo_by_seihin[".ajaxCodeSnippetAdded"] = false;

$tdatachohyo_by_seihin[".buttonsAdded"] = true;

$tdatachohyo_by_seihin[".addPageEvents"] = true;

// use timepicker for search panel
$tdatachohyo_by_seihin[".isUseTimeForSearch"] = false;



$tdatachohyo_by_seihin[".badgeColor"] = "7B68EE";


$tdatachohyo_by_seihin[".allSearchFields"] = array();
$tdatachohyo_by_seihin[".filterFields"] = array();
$tdatachohyo_by_seihin[".requiredSearchFields"] = array();

$tdatachohyo_by_seihin[".allSearchFields"][] = "description";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "location";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "status";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "product_id";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "yahoo_sinaban";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "Finish";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "Discrimination";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "accessories";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "special_instructions_1";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "special_instructions_2";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "special_instructions_3";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "product_num";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "category_id";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "sub_category_id1";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "gold_property";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "Gram";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "chohyo_id";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "ecc_id";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "price";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "satei_by";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "satei_hi";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "REG_AUTHOR";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "DT_UP_DATE";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "kaitori_by";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "kaitory_hi";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "updated_by";
	$tdatachohyo_by_seihin[".allSearchFields"][] = "updated_at";
	

$tdatachohyo_by_seihin[".googleLikeFields"] = array();
$tdatachohyo_by_seihin[".googleLikeFields"][] = "location";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "status";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "product_id";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "yahoo_sinaban";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "Finish";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "Discrimination";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "accessories";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "special_instructions_1";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "special_instructions_2";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "special_instructions_3";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "product_num";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "category_id";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "sub_category_id1";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "gold_property";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "Gram";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "chohyo_id";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "ecc_id";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "price";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "satei_by";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "satei_hi";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "REG_AUTHOR";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "DT_UP_DATE";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "kaitori_by";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "kaitory_hi";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "updated_by";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "updated_at";
$tdatachohyo_by_seihin[".googleLikeFields"][] = "description";

$tdatachohyo_by_seihin[".panelSearchFields"] = array();
$tdatachohyo_by_seihin[".searchPanelOptions"] = array();
$tdatachohyo_by_seihin[".panelSearchFields"][] = "location";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "status";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "product_id";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "yahoo_sinaban";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "Finish";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "Discrimination";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "accessories";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "special_instructions_1";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "special_instructions_2";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "special_instructions_3";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "product_num";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "category_id";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "sub_category_id1";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "gold_property";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "Gram";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "ecc_id";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "price";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "satei_by";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "satei_hi";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "REG_AUTHOR";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "DT_UP_DATE";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "kaitori_by";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "kaitory_hi";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "updated_by";
	$tdatachohyo_by_seihin[".panelSearchFields"][] = "updated_at";
	
$tdatachohyo_by_seihin[".advSearchFields"] = array();
$tdatachohyo_by_seihin[".advSearchFields"][] = "description";
$tdatachohyo_by_seihin[".advSearchFields"][] = "location";
$tdatachohyo_by_seihin[".advSearchFields"][] = "status";
$tdatachohyo_by_seihin[".advSearchFields"][] = "product_id";
$tdatachohyo_by_seihin[".advSearchFields"][] = "yahoo_sinaban";
$tdatachohyo_by_seihin[".advSearchFields"][] = "Finish";
$tdatachohyo_by_seihin[".advSearchFields"][] = "Discrimination";
$tdatachohyo_by_seihin[".advSearchFields"][] = "accessories";
$tdatachohyo_by_seihin[".advSearchFields"][] = "special_instructions_1";
$tdatachohyo_by_seihin[".advSearchFields"][] = "special_instructions_2";
$tdatachohyo_by_seihin[".advSearchFields"][] = "special_instructions_3";
$tdatachohyo_by_seihin[".advSearchFields"][] = "product_num";
$tdatachohyo_by_seihin[".advSearchFields"][] = "category_id";
$tdatachohyo_by_seihin[".advSearchFields"][] = "sub_category_id1";
$tdatachohyo_by_seihin[".advSearchFields"][] = "gold_property";
$tdatachohyo_by_seihin[".advSearchFields"][] = "Gram";
$tdatachohyo_by_seihin[".advSearchFields"][] = "chohyo_id";
$tdatachohyo_by_seihin[".advSearchFields"][] = "ecc_id";
$tdatachohyo_by_seihin[".advSearchFields"][] = "price";
$tdatachohyo_by_seihin[".advSearchFields"][] = "satei_by";
$tdatachohyo_by_seihin[".advSearchFields"][] = "satei_hi";
$tdatachohyo_by_seihin[".advSearchFields"][] = "REG_AUTHOR";
$tdatachohyo_by_seihin[".advSearchFields"][] = "DT_UP_DATE";
$tdatachohyo_by_seihin[".advSearchFields"][] = "kaitori_by";
$tdatachohyo_by_seihin[".advSearchFields"][] = "kaitory_hi";
$tdatachohyo_by_seihin[".advSearchFields"][] = "updated_by";
$tdatachohyo_by_seihin[".advSearchFields"][] = "updated_at";

$tdatachohyo_by_seihin[".tableType"] = "list";

$tdatachohyo_by_seihin[".printerPageOrientation"] = 0;
$tdatachohyo_by_seihin[".nPrinterPageScale"] = 100;

$tdatachohyo_by_seihin[".nPrinterSplitRecords"] = 40;

$tdatachohyo_by_seihin[".nPrinterPDFSplitRecords"] = 40;



$tdatachohyo_by_seihin[".geocodingEnabled"] = false;





$tdatachohyo_by_seihin[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatachohyo_by_seihin[".pageSize"] = 100;

$tdatachohyo_by_seihin[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatachohyo_by_seihin[".strOrderBy"] = $tstrOrderBy;

$tdatachohyo_by_seihin[".orderindexes"] = array();
$tdatachohyo_by_seihin[".orderindexes"][] = array(5, (0 ? "ASC" : "DESC"), "`product_id`");

$tdatachohyo_by_seihin[".sqlHead"] = "select '' AS `No`,  `location`,  '' AS `onsya`,  `status`,  `product_id`,  `yahoo_sinaban`,  `Finish`,  `Discrimination`,  `accessories`,  `special_instructions_1`,  `special_instructions_2`,  `special_instructions_3`,  `product_num`,  `category_id`,  `sub_category_id1`,  `gold_property`,  `Gram`,  `chohyo_id`,  `ecc_id`,  `price`,  `satei_by`,  `satei_hi`,  `REG_AUTHOR`,  `DT_UP_DATE`,  `kaitori_by`,  `kaitory_hi`,  `updated_by`,  `updated_at`,  `description`";
$tdatachohyo_by_seihin[".sqlFrom"] = "FROM `shouhin`";
$tdatachohyo_by_seihin[".sqlWhereExpr"] = "(`status` = 110 OR `status` = 33)  AND (((SELECT `chohyo_flag` FROM `mst_Finish` AS `f` WHERE `f`.`val` = `shouhin`.`Finish` limit 1 ) =1) OR (Discrimination != ''))";
$tdatachohyo_by_seihin[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachohyo_by_seihin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachohyo_by_seihin[".arrGroupsPerPage"] = $arrGPP;

$tdatachohyo_by_seihin[".highlightSearchResults"] = true;

$tableKeyschohyo_by_seihin = array();
$tableKeyschohyo_by_seihin[] = "product_id";
$tdatachohyo_by_seihin[".Keys"] = $tableKeyschohyo_by_seihin;

$tdatachohyo_by_seihin[".listFields"] = array();
$tdatachohyo_by_seihin[".listFields"][] = "location";
$tdatachohyo_by_seihin[".listFields"][] = "status";
$tdatachohyo_by_seihin[".listFields"][] = "chohyo_id";
$tdatachohyo_by_seihin[".listFields"][] = "product_id";
$tdatachohyo_by_seihin[".listFields"][] = "yahoo_sinaban";
$tdatachohyo_by_seihin[".listFields"][] = "Finish";
$tdatachohyo_by_seihin[".listFields"][] = "Discrimination";
$tdatachohyo_by_seihin[".listFields"][] = "accessories";
$tdatachohyo_by_seihin[".listFields"][] = "description";
$tdatachohyo_by_seihin[".listFields"][] = "special_instructions_1";
$tdatachohyo_by_seihin[".listFields"][] = "special_instructions_2";
$tdatachohyo_by_seihin[".listFields"][] = "special_instructions_3";
$tdatachohyo_by_seihin[".listFields"][] = "product_num";
$tdatachohyo_by_seihin[".listFields"][] = "category_id";
$tdatachohyo_by_seihin[".listFields"][] = "sub_category_id1";
$tdatachohyo_by_seihin[".listFields"][] = "gold_property";
$tdatachohyo_by_seihin[".listFields"][] = "Gram";
$tdatachohyo_by_seihin[".listFields"][] = "ecc_id";
$tdatachohyo_by_seihin[".listFields"][] = "price";
$tdatachohyo_by_seihin[".listFields"][] = "satei_by";
$tdatachohyo_by_seihin[".listFields"][] = "satei_hi";
$tdatachohyo_by_seihin[".listFields"][] = "REG_AUTHOR";
$tdatachohyo_by_seihin[".listFields"][] = "DT_UP_DATE";
$tdatachohyo_by_seihin[".listFields"][] = "kaitori_by";
$tdatachohyo_by_seihin[".listFields"][] = "kaitory_hi";
$tdatachohyo_by_seihin[".listFields"][] = "updated_by";
$tdatachohyo_by_seihin[".listFields"][] = "updated_at";

$tdatachohyo_by_seihin[".hideMobileList"] = array();


$tdatachohyo_by_seihin[".viewFields"] = array();

$tdatachohyo_by_seihin[".addFields"] = array();

$tdatachohyo_by_seihin[".masterListFields"] = array();
$tdatachohyo_by_seihin[".masterListFields"][] = "description";
$tdatachohyo_by_seihin[".masterListFields"][] = "location";
$tdatachohyo_by_seihin[".masterListFields"][] = "No";
$tdatachohyo_by_seihin[".masterListFields"][] = "status";
$tdatachohyo_by_seihin[".masterListFields"][] = "product_id";
$tdatachohyo_by_seihin[".masterListFields"][] = "onsya";
$tdatachohyo_by_seihin[".masterListFields"][] = "yahoo_sinaban";
$tdatachohyo_by_seihin[".masterListFields"][] = "Finish";
$tdatachohyo_by_seihin[".masterListFields"][] = "Discrimination";
$tdatachohyo_by_seihin[".masterListFields"][] = "accessories";
$tdatachohyo_by_seihin[".masterListFields"][] = "special_instructions_1";
$tdatachohyo_by_seihin[".masterListFields"][] = "special_instructions_2";
$tdatachohyo_by_seihin[".masterListFields"][] = "special_instructions_3";
$tdatachohyo_by_seihin[".masterListFields"][] = "product_num";
$tdatachohyo_by_seihin[".masterListFields"][] = "category_id";
$tdatachohyo_by_seihin[".masterListFields"][] = "sub_category_id1";
$tdatachohyo_by_seihin[".masterListFields"][] = "gold_property";
$tdatachohyo_by_seihin[".masterListFields"][] = "Gram";
$tdatachohyo_by_seihin[".masterListFields"][] = "chohyo_id";
$tdatachohyo_by_seihin[".masterListFields"][] = "ecc_id";
$tdatachohyo_by_seihin[".masterListFields"][] = "price";
$tdatachohyo_by_seihin[".masterListFields"][] = "satei_by";
$tdatachohyo_by_seihin[".masterListFields"][] = "satei_hi";
$tdatachohyo_by_seihin[".masterListFields"][] = "REG_AUTHOR";
$tdatachohyo_by_seihin[".masterListFields"][] = "DT_UP_DATE";
$tdatachohyo_by_seihin[".masterListFields"][] = "kaitori_by";
$tdatachohyo_by_seihin[".masterListFields"][] = "kaitory_hi";
$tdatachohyo_by_seihin[".masterListFields"][] = "updated_by";
$tdatachohyo_by_seihin[".masterListFields"][] = "updated_at";

$tdatachohyo_by_seihin[".inlineAddFields"] = array();
$tdatachohyo_by_seihin[".inlineAddFields"][] = "location";
$tdatachohyo_by_seihin[".inlineAddFields"][] = "status";
$tdatachohyo_by_seihin[".inlineAddFields"][] = "chohyo_id";
$tdatachohyo_by_seihin[".inlineAddFields"][] = "Finish";
$tdatachohyo_by_seihin[".inlineAddFields"][] = "Discrimination";
$tdatachohyo_by_seihin[".inlineAddFields"][] = "accessories";
$tdatachohyo_by_seihin[".inlineAddFields"][] = "description";
$tdatachohyo_by_seihin[".inlineAddFields"][] = "special_instructions_1";
$tdatachohyo_by_seihin[".inlineAddFields"][] = "special_instructions_2";
$tdatachohyo_by_seihin[".inlineAddFields"][] = "special_instructions_3";
$tdatachohyo_by_seihin[".inlineAddFields"][] = "product_num";
$tdatachohyo_by_seihin[".inlineAddFields"][] = "category_id";
$tdatachohyo_by_seihin[".inlineAddFields"][] = "sub_category_id1";
$tdatachohyo_by_seihin[".inlineAddFields"][] = "gold_property";
$tdatachohyo_by_seihin[".inlineAddFields"][] = "Gram";

$tdatachohyo_by_seihin[".editFields"] = array();

$tdatachohyo_by_seihin[".inlineEditFields"] = array();
$tdatachohyo_by_seihin[".inlineEditFields"][] = "location";
$tdatachohyo_by_seihin[".inlineEditFields"][] = "status";
$tdatachohyo_by_seihin[".inlineEditFields"][] = "chohyo_id";
$tdatachohyo_by_seihin[".inlineEditFields"][] = "Finish";
$tdatachohyo_by_seihin[".inlineEditFields"][] = "Discrimination";
$tdatachohyo_by_seihin[".inlineEditFields"][] = "accessories";
$tdatachohyo_by_seihin[".inlineEditFields"][] = "description";
$tdatachohyo_by_seihin[".inlineEditFields"][] = "special_instructions_1";
$tdatachohyo_by_seihin[".inlineEditFields"][] = "special_instructions_2";
$tdatachohyo_by_seihin[".inlineEditFields"][] = "special_instructions_3";
$tdatachohyo_by_seihin[".inlineEditFields"][] = "product_num";
$tdatachohyo_by_seihin[".inlineEditFields"][] = "category_id";
$tdatachohyo_by_seihin[".inlineEditFields"][] = "sub_category_id1";
$tdatachohyo_by_seihin[".inlineEditFields"][] = "gold_property";
$tdatachohyo_by_seihin[".inlineEditFields"][] = "Gram";

$tdatachohyo_by_seihin[".updateSelectedFields"] = array();


$tdatachohyo_by_seihin[".exportFields"] = array();
$tdatachohyo_by_seihin[".exportFields"][] = "location";
$tdatachohyo_by_seihin[".exportFields"][] = "status";
$tdatachohyo_by_seihin[".exportFields"][] = "product_id";
$tdatachohyo_by_seihin[".exportFields"][] = "yahoo_sinaban";
$tdatachohyo_by_seihin[".exportFields"][] = "Finish";
$tdatachohyo_by_seihin[".exportFields"][] = "Discrimination";
$tdatachohyo_by_seihin[".exportFields"][] = "accessories";
$tdatachohyo_by_seihin[".exportFields"][] = "description";
$tdatachohyo_by_seihin[".exportFields"][] = "special_instructions_1";
$tdatachohyo_by_seihin[".exportFields"][] = "special_instructions_2";
$tdatachohyo_by_seihin[".exportFields"][] = "special_instructions_3";
$tdatachohyo_by_seihin[".exportFields"][] = "product_num";
$tdatachohyo_by_seihin[".exportFields"][] = "category_id";
$tdatachohyo_by_seihin[".exportFields"][] = "sub_category_id1";
$tdatachohyo_by_seihin[".exportFields"][] = "gold_property";
$tdatachohyo_by_seihin[".exportFields"][] = "Gram";
$tdatachohyo_by_seihin[".exportFields"][] = "chohyo_id";

$tdatachohyo_by_seihin[".importFields"] = array();
$tdatachohyo_by_seihin[".importFields"][] = "location";
$tdatachohyo_by_seihin[".importFields"][] = "status";
$tdatachohyo_by_seihin[".importFields"][] = "product_id";
$tdatachohyo_by_seihin[".importFields"][] = "yahoo_sinaban";
$tdatachohyo_by_seihin[".importFields"][] = "Finish";
$tdatachohyo_by_seihin[".importFields"][] = "Discrimination";
$tdatachohyo_by_seihin[".importFields"][] = "accessories";
$tdatachohyo_by_seihin[".importFields"][] = "special_instructions_1";
$tdatachohyo_by_seihin[".importFields"][] = "special_instructions_2";
$tdatachohyo_by_seihin[".importFields"][] = "special_instructions_3";
$tdatachohyo_by_seihin[".importFields"][] = "product_num";
$tdatachohyo_by_seihin[".importFields"][] = "category_id";
$tdatachohyo_by_seihin[".importFields"][] = "sub_category_id1";
$tdatachohyo_by_seihin[".importFields"][] = "gold_property";
$tdatachohyo_by_seihin[".importFields"][] = "Gram";
$tdatachohyo_by_seihin[".importFields"][] = "chohyo_id";
$tdatachohyo_by_seihin[".importFields"][] = "description";

$tdatachohyo_by_seihin[".printFields"] = array();

//	No
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "No";
	$fdata["GoodName"] = "No";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","No");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "No";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
			
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatachohyo_by_seihin["No"] = $fdata;
//	location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "location";
	$fdata["GoodName"] = "location";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","location");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "location";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`location`";

	
	
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




	$tdatachohyo_by_seihin["location"] = $fdata;
//	onsya
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "onsya";
	$fdata["GoodName"] = "onsya";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","onsya");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "onsya";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
			
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatachohyo_by_seihin["onsya"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","status");
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
	$edata["LookupTable"] = "_goods_status2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "goods_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "goods_status";

	
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




	$tdatachohyo_by_seihin["status"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","product_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`product_id`";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatachohyo_by_seihin["product_id"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","yahoo_sinaban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sinaban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`yahoo_sinaban`";

	
	
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




	$tdatachohyo_by_seihin["yahoo_sinaban"] = $fdata;
//	Finish
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Finish";
	$fdata["GoodName"] = "Finish";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","Finish");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Finish";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Finish`";

	
	
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
	$edata["LookupTable"] = "mst_Finish";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "val";

	
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




	$tdatachohyo_by_seihin["Finish"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","Discrimination");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Discrimination";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Discrimination`";

	
	
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
	$edata["LookupTable"] = "mst_Discrimination";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "val";

	
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




	$tdatachohyo_by_seihin["Discrimination"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "accessories";
	$fdata["GoodName"] = "accessories";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","accessories");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "accessories";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`accessories`";

	
	
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
	$edata["LookupTable"] = "mst_accessories";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "val";

	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatachohyo_by_seihin["accessories"] = $fdata;
//	special_instructions_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "special_instructions_1";
	$fdata["GoodName"] = "special_instructions_1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","special_instructions_1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "special_instructions_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`special_instructions_1`";

	
	
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
	$edata["LookupTable"] = "mst_special_instructions";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
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




	$tdatachohyo_by_seihin["special_instructions_1"] = $fdata;
//	special_instructions_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "special_instructions_2";
	$fdata["GoodName"] = "special_instructions_2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","special_instructions_2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "special_instructions_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`special_instructions_2`";

	
	
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
	$edata["LookupTable"] = "mst_special_instructions";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
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




	$tdatachohyo_by_seihin["special_instructions_2"] = $fdata;
//	special_instructions_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "special_instructions_3";
	$fdata["GoodName"] = "special_instructions_3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","special_instructions_3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "special_instructions_3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`special_instructions_3`";

	
	
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
	$edata["LookupTable"] = "mst_special_instructions";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
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




	$tdatachohyo_by_seihin["special_instructions_3"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","product_num");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`product_num`";

	
	
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
	$edata["LookupTable"] = "mst_brand2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "mst_band_title";

	
	
	
	

	
	
	
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




	$tdatachohyo_by_seihin["product_num"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_id`";

	
	
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
	$edata["LookupTable"] = "store_categories";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "category_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "category_name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "sub_category_id1";

	
	
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




	$tdatachohyo_by_seihin["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_category_id1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sub_category_id1`";

	
	
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
	$edata["LookupTable"] = "store_sub_categories";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "category_id", "lookup" => "category_id" );

	
	

	
	
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




	$tdatachohyo_by_seihin["sub_category_id1"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","gold_property");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gold_property";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_property`";

	
	
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
	$edata["LookupTable"] = "mst_gold_property";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "val";

	
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




	$tdatachohyo_by_seihin["gold_property"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","Gram");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Gram`";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdatachohyo_by_seihin["Gram"] = $fdata;
//	chohyo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "chohyo_id";
	$fdata["GoodName"] = "chohyo_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","chohyo_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "chohyo_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`chohyo_id`";

	
	
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




	$tdatachohyo_by_seihin["chohyo_id"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdatachohyo_by_seihin["ecc_id"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`price`";

	
	
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




	$tdatachohyo_by_seihin["price"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","satei_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "satei_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`satei_by`";

	
	
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
	$edata["LinkFieldType"] = 3;
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




	$tdatachohyo_by_seihin["satei_by"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","satei_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "satei_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`satei_hi`";

	
	
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




	$tdatachohyo_by_seihin["satei_hi"] = $fdata;
//	REG_AUTHOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "REG_AUTHOR";
	$fdata["GoodName"] = "REG_AUTHOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","REG_AUTHOR");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "REG_AUTHOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`REG_AUTHOR`";

	
	
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
	$edata["LinkFieldType"] = 3;
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




	$tdatachohyo_by_seihin["REG_AUTHOR"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","DT_UP_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "DT_UP_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DT_UP_DATE`";

	
	
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




	$tdatachohyo_by_seihin["DT_UP_DATE"] = $fdata;
//	kaitori_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "kaitori_by";
	$fdata["GoodName"] = "kaitori_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","kaitori_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "kaitori_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kaitori_by`";

	
	
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
	$edata["LinkFieldType"] = 3;
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




	$tdatachohyo_by_seihin["kaitori_by"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "kaitory_hi";
	$fdata["GoodName"] = "kaitory_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","kaitory_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "kaitory_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kaitory_hi`";

	
	
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




	$tdatachohyo_by_seihin["kaitory_hi"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","updated_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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
	$edata["LinkFieldType"] = 3;
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




	$tdatachohyo_by_seihin["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatachohyo_by_seihin["updated_at"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin","description");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`description`";

	
	
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

	
	
	
				$edata["nRows"] = 40;
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




	$tdatachohyo_by_seihin["description"] = $fdata;


$tables_data["chohyo_by_seihin"]=&$tdatachohyo_by_seihin;
$field_labels["chohyo_by_seihin"] = &$fieldLabelschohyo_by_seihin;
$fieldToolTips["chohyo_by_seihin"] = &$fieldToolTipschohyo_by_seihin;
$placeHolders["chohyo_by_seihin"] = &$placeHolderschohyo_by_seihin;
$page_titles["chohyo_by_seihin"] = &$pageTitleschohyo_by_seihin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["chohyo_by_seihin"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["chohyo_by_seihin"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_chohyo_by_seihin()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "'' AS `No`,  `location`,  '' AS `onsya`,  `status`,  `product_id`,  `yahoo_sinaban`,  `Finish`,  `Discrimination`,  `accessories`,  `special_instructions_1`,  `special_instructions_2`,  `special_instructions_3`,  `product_num`,  `category_id`,  `sub_category_id1`,  `gold_property`,  `Gram`,  `chohyo_id`,  `ecc_id`,  `price`,  `satei_by`,  `satei_hi`,  `REG_AUTHOR`,  `DT_UP_DATE`,  `kaitori_by`,  `kaitory_hi`,  `updated_by`,  `updated_at`,  `description`";
$proto0["m_strFrom"] = "FROM `shouhin`";
$proto0["m_strWhere"] = "(`status` = 110 OR `status` = 33)  AND (((SELECT `chohyo_flag` FROM `mst_Finish` AS `f` WHERE `f`.`val` = `shouhin`.`Finish` limit 1 ) =1) OR (Discrimination != ''))";
$proto0["m_strOrderBy"] = "ORDER BY `product_id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(`status` = 110 OR `status` = 33)  AND (((SELECT `chohyo_flag` FROM `mst_Finish` AS `f` WHERE `f`.`val` = `shouhin`.`Finish` limit 1 ) =1) OR (Discrimination != ''))";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(`status` = 110 OR `status` = 33)  AND (((SELECT `chohyo_flag` FROM `mst_Finish` AS `f` WHERE `f`.`val` = `shouhin`.`Finish` limit 1 ) =1) OR (Discrimination != ''))"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`status` = 110 OR `status` = 33";
$proto4["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`status` = 110 OR `status` = 33"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
						$proto6=array();
$proto6["m_sql"] = "`status` = 110";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 110";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto4["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "`status` = 33";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "= 33";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto4["m_contained"][]=$obj;
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "((SELECT `chohyo_flag` FROM `mst_Finish` AS `f` WHERE `f`.`val` = `shouhin`.`Finish` limit 1 ) =1) OR (Discrimination != '')";
$proto10["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "((SELECT `chohyo_flag` FROM `mst_Finish` AS `f` WHERE `f`.`val` = `shouhin`.`Finish` limit 1 ) =1) OR (Discrimination != '')"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
						$proto12=array();
$proto12["m_sql"] = "(SELECT `chohyo_flag` FROM `mst_Finish` AS `f` WHERE `f`.`val` = `shouhin`.`Finish` limit 1 ) =1";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$proto13=array();
$proto13["m_strHead"] = "SELECT";
$proto13["m_strFieldList"] = "`chohyo_flag`";
$proto13["m_strFrom"] = "FROM `mst_Finish` AS `f`";
$proto13["m_strWhere"] = "`f`.`val` = `shouhin`.`Finish`";
$proto13["m_strOrderBy"] = "";
$proto13["m_strTail"] = "limit 1";
	
		;
			$proto13["cipherer"] = null;
$proto15=array();
$proto15["m_sql"] = "`f`.`val` = `shouhin`.`Finish`";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "val",
	"m_strTable" => "f",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "= `shouhin`.`Finish`";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_where"] = $obj;
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto13["m_having"] = $obj;
$proto13["m_fieldlist"] = array();
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "chohyo_flag",
	"m_strTable" => "f",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto19["m_sql"] = "`chohyo_flag`";
$proto19["m_srcTableName"] = "chohyo_by_seihin";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto13["m_fieldlist"][]=$obj;
$proto13["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strName"] = "mst_Finish";
$proto22["m_srcTableName"] = "chohyo_by_seihin";
$proto22["m_columns"] = array();
$proto22["m_columns"][] = "id";
$proto22["m_columns"][] = "val";
$proto22["m_columns"][] = "sort";
$proto22["m_columns"][] = "chohyo_flag";
$proto22["m_columns"][] = "update_at";
$proto22["m_columns"][] = "update_by";
$proto22["m_columns"][] = "create_at";
$proto22["m_columns"][] = "create_by";
$proto22["m_columns"][] = "cost";
$obj = new SQLTable($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "`mst_Finish` AS `f`";
$proto21["m_alias"] = "f";
$proto21["m_srcTableName"] = "chohyo_by_seihin";
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto13["m_fromlist"][]=$obj;
$proto13["m_groupby"] = array();
$proto13["m_orderby"] = array();
$proto13["m_srcTableName"]="chohyo_by_seihin";		
$obj = new SQLQuery($proto13);

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "=1";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = true;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto10["m_contained"][]=$obj;
						$proto25=array();
$proto25["m_sql"] = "Discrimination != ''";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "!= ''";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = true;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

			$proto10["m_contained"][]=$obj;
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto29=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto29["m_sql"] = "''";
$proto29["m_srcTableName"] = "chohyo_by_seihin";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "No";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "location",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto31["m_sql"] = "`location`";
$proto31["m_srcTableName"] = "chohyo_by_seihin";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto33["m_sql"] = "''";
$proto33["m_srcTableName"] = "chohyo_by_seihin";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "onsya";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto35["m_sql"] = "`status`";
$proto35["m_srcTableName"] = "chohyo_by_seihin";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto37["m_sql"] = "`product_id`";
$proto37["m_srcTableName"] = "chohyo_by_seihin";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto39["m_sql"] = "`yahoo_sinaban`";
$proto39["m_srcTableName"] = "chohyo_by_seihin";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "Finish",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto41["m_sql"] = "`Finish`";
$proto41["m_srcTableName"] = "chohyo_by_seihin";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto43["m_sql"] = "`Discrimination`";
$proto43["m_srcTableName"] = "chohyo_by_seihin";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto45["m_sql"] = "`accessories`";
$proto45["m_srcTableName"] = "chohyo_by_seihin";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "special_instructions_1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto47["m_sql"] = "`special_instructions_1`";
$proto47["m_srcTableName"] = "chohyo_by_seihin";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "special_instructions_2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto49["m_sql"] = "`special_instructions_2`";
$proto49["m_srcTableName"] = "chohyo_by_seihin";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "special_instructions_3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto51["m_sql"] = "`special_instructions_3`";
$proto51["m_srcTableName"] = "chohyo_by_seihin";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto53["m_sql"] = "`product_num`";
$proto53["m_srcTableName"] = "chohyo_by_seihin";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto55["m_sql"] = "`category_id`";
$proto55["m_srcTableName"] = "chohyo_by_seihin";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto57["m_sql"] = "`sub_category_id1`";
$proto57["m_srcTableName"] = "chohyo_by_seihin";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto59["m_sql"] = "`gold_property`";
$proto59["m_srcTableName"] = "chohyo_by_seihin";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto61["m_sql"] = "`Gram`";
$proto61["m_srcTableName"] = "chohyo_by_seihin";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "chohyo_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto63["m_sql"] = "`chohyo_id`";
$proto63["m_srcTableName"] = "chohyo_by_seihin";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto65["m_sql"] = "`ecc_id`";
$proto65["m_srcTableName"] = "chohyo_by_seihin";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto67["m_sql"] = "`price`";
$proto67["m_srcTableName"] = "chohyo_by_seihin";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto69["m_sql"] = "`satei_by`";
$proto69["m_srcTableName"] = "chohyo_by_seihin";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto71["m_sql"] = "`satei_hi`";
$proto71["m_srcTableName"] = "chohyo_by_seihin";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_AUTHOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto73["m_sql"] = "`REG_AUTHOR`";
$proto73["m_srcTableName"] = "chohyo_by_seihin";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto75["m_sql"] = "`DT_UP_DATE`";
$proto75["m_srcTableName"] = "chohyo_by_seihin";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto77["m_sql"] = "`kaitori_by`";
$proto77["m_srcTableName"] = "chohyo_by_seihin";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto79["m_sql"] = "`kaitory_hi`";
$proto79["m_srcTableName"] = "chohyo_by_seihin";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto81["m_sql"] = "`updated_by`";
$proto81["m_srcTableName"] = "chohyo_by_seihin";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto83["m_sql"] = "`updated_at`";
$proto83["m_srcTableName"] = "chohyo_by_seihin";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto85["m_sql"] = "`description`";
$proto85["m_srcTableName"] = "chohyo_by_seihin";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto87=array();
$proto87["m_link"] = "SQLL_MAIN";
			$proto88=array();
$proto88["m_strName"] = "shouhin";
$proto88["m_srcTableName"] = "chohyo_by_seihin";
$proto88["m_columns"] = array();
$proto88["m_columns"][] = "product_id";
$proto88["m_columns"][] = "category_id";
$proto88["m_columns"][] = "goods_title";
$proto88["m_columns"][] = "title";
$proto88["m_columns"][] = "sub_category_id1";
$proto88["m_columns"][] = "ecc_id";
$proto88["m_columns"][] = "price";
$proto88["m_columns"][] = "yahoo";
$proto88["m_columns"][] = "remark";
$proto88["m_columns"][] = "sales_price";
$proto88["m_columns"][] = "description";
$proto88["m_columns"][] = "status";
$proto88["m_columns"][] = "product_num";
$proto88["m_columns"][] = "updated_at";
$proto88["m_columns"][] = "yahoo_size";
$proto88["m_columns"][] = "yahoo_title";
$proto88["m_columns"][] = "yahoo_junle";
$proto88["m_columns"][] = "yahoo_sankou_uwadai";
$proto88["m_columns"][] = "yahoo_sozai";
$proto88["m_columns"][] = "yahoo_color";
$proto88["m_columns"][] = "yahoo_kataban";
$proto88["m_columns"][] = "yahoo_condition1";
$proto88["m_columns"][] = "yahoo_condition2";
$proto88["m_columns"][] = "yahoo_fuzokuhin";
$proto88["m_columns"][] = "yahoo_sinaban";
$proto88["m_columns"][] = "yahoo_saisun_sha";
$proto88["m_columns"][] = "yahoo_sex";
$proto88["m_columns"][] = "box_id";
$proto88["m_columns"][] = "nyuukin_price";
$proto88["m_columns"][] = "updated_by";
$proto88["m_columns"][] = "raku_title";
$proto88["m_columns"][] = "raku_hyoujisaki_category2";
$proto88["m_columns"][] = "raku_hyoujisaki_category";
$proto88["m_columns"][] = "raku_hyoujisaki_category3";
$proto88["m_columns"][] = "timesta";
$proto88["m_columns"][] = "saisun_start";
$proto88["m_columns"][] = "saisun_end";
$proto88["m_columns"][] = "label_output_flag";
$proto88["m_columns"][] = "season";
$proto88["m_columns"][] = "kanryou_henbi";
$proto88["m_columns"][] = "box_sort";
$proto88["m_columns"][] = "satei_by";
$proto88["m_columns"][] = "kaitori_by";
$proto88["m_columns"][] = "comment";
$proto88["m_columns"][] = "satei_hi";
$proto88["m_columns"][] = "kaitory_hi";
$proto88["m_columns"][] = "REG_PHOTOGRAPHER";
$proto88["m_columns"][] = "REG_AUTHOR";
$proto88["m_columns"][] = "REG_PACKINGS";
$proto88["m_columns"][] = "REG_KAKOU_DATE";
$proto88["m_columns"][] = "REG_KAKOU";
$proto88["m_columns"][] = "REG_EXHIBITOR";
$proto88["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto88["m_columns"][] = "DT_PACKING_DATE";
$proto88["m_columns"][] = "DT_UP_DATE";
$proto88["m_columns"][] = "AWAZU_DATE";
$proto88["m_columns"][] = "AWAZU_NIN";
$proto88["m_columns"][] = "sabun_date";
$proto88["m_columns"][] = "browseid";
$proto88["m_columns"][] = "browsenode";
$proto88["m_columns"][] = "gold_property";
$proto88["m_columns"][] = "ichiba_title";
$proto88["m_columns"][] = "Gram";
$proto88["m_columns"][] = "Parent_stone";
$proto88["m_columns"][] = "Aside_stone";
$proto88["m_columns"][] = "Appraiser";
$proto88["m_columns"][] = "Remarks";
$proto88["m_columns"][] = "Destination_selling";
$proto88["m_columns"][] = "Finish";
$proto88["m_columns"][] = "Discrimination";
$proto88["m_columns"][] = "accessories";
$proto88["m_columns"][] = "priority";
$proto88["m_columns"][] = "A_storage";
$proto88["m_columns"][] = "price_per_gram";
$proto88["m_columns"][] = "price_per_parent_stone";
$proto88["m_columns"][] = "price_per_aside_stone";
$proto88["m_columns"][] = "price_secret";
$proto88["m_columns"][] = "sales_price_secret";
$proto88["m_columns"][] = "eq";
$proto88["m_columns"][] = "en";
$proto88["m_columns"][] = "line";
$proto88["m_columns"][] = "item_name";
$proto88["m_columns"][] = "handle";
$proto88["m_columns"][] = "yahoo_color_id";
$proto88["m_columns"][] = "raku_hyoujisaki_category4";
$proto88["m_columns"][] = "raku_hyoujisaki_category5";
$proto88["m_columns"][] = "raku_dir_1";
$proto88["m_columns"][] = "raku_dir_2";
$proto88["m_columns"][] = "raku_dir_3";
$proto88["m_columns"][] = "raku_dir_4";
$proto88["m_columns"][] = "raku_dir_5";
$proto88["m_columns"][] = "raku_dir_result";
$proto88["m_columns"][] = "raku_tag_result";
$proto88["m_columns"][] = "serial_number";
$proto88["m_columns"][] = "Exhibition_Date";
$proto88["m_columns"][] = "search_keyword";
$proto88["m_columns"][] = "stamp";
$proto88["m_columns"][] = "motif";
$proto88["m_columns"][] = "Setting";
$proto88["m_columns"][] = "processing";
$proto88["m_columns"][] = "Sleeve_Length";
$proto88["m_columns"][] = "length";
$proto88["m_columns"][] = "Ring_size";
$proto88["m_columns"][] = "price_for_site";
$proto88["m_columns"][] = "yahoo_category_id";
$proto88["m_columns"][] = "Qty";
$proto88["m_columns"][] = "sales_period";
$proto88["m_columns"][] = "starting_price";
$proto88["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto88["m_columns"][] = "amount_of_image";
$proto88["m_columns"][] = "csv";
$proto88["m_columns"][] = "return_output_flag";
$proto88["m_columns"][] = "wasabi_flag";
$proto88["m_columns"][] = "ws_import_date";
$proto88["m_columns"][] = "logo";
$proto88["m_columns"][] = "parts";
$proto88["m_columns"][] = "country_of_origin";
$proto88["m_columns"][] = "zipper";
$proto88["m_columns"][] = "guarantee";
$proto88["m_columns"][] = "errors";
$proto88["m_columns"][] = "designer";
$proto88["m_columns"][] = "hahakai";
$proto88["m_columns"][] = "effect";
$proto88["m_columns"][] = "shape";
$proto88["m_columns"][] = "cutting_style";
$proto88["m_columns"][] = "chain_type";
$proto88["m_columns"][] = "number_of_stones";
$proto88["m_columns"][] = "amount";
$proto88["m_columns"][] = "satei_error";
$proto88["m_columns"][] = "producing_area";
$proto88["m_columns"][] = "shape_supplement";
$proto88["m_columns"][] = "side_gem";
$proto88["m_columns"][] = "product_style";
$proto88["m_columns"][] = "collar_neck_line";
$proto88["m_columns"][] = "breast";
$proto88["m_columns"][] = "silhouette";
$proto88["m_columns"][] = "sleeve";
$proto88["m_columns"][] = "unit";
$proto88["m_columns"][] = "hall_mark";
$proto88["m_columns"][] = "plate";
$proto88["m_columns"][] = "toe";
$proto88["m_columns"][] = "heel";
$proto88["m_columns"][] = "cloth";
$proto88["m_columns"][] = "serial_number_for_storage";
$proto88["m_columns"][] = "official_url";
$proto88["m_columns"][] = "main_details";
$proto88["m_columns"][] = "notation_size";
$proto88["m_columns"][] = "shoe_size_jp";
$proto88["m_columns"][] = "Eoc_chigins2_id";
$proto88["m_columns"][] = "country_of_origin_name";
$proto88["m_columns"][] = "mailingkit_id";
$proto88["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto88["m_columns"][] = "DA_WEIGHT";
$proto88["m_columns"][] = "DA_PER_CARAT";
$proto88["m_columns"][] = "DA_SHAPE";
$proto88["m_columns"][] = "DA_SELFGRES";
$proto88["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto88["m_columns"][] = "DA_SUGARCANE";
$proto88["m_columns"][] = "DA_RAPA";
$proto88["m_columns"][] = "DA_INTENSITY";
$proto88["m_columns"][] = "DA_OVERTONE";
$proto88["m_columns"][] = "DA_COLOR";
$proto88["m_columns"][] = "DA_CLARITY";
$proto88["m_columns"][] = "DA_CUT";
$proto88["m_columns"][] = "DA_POLISH";
$proto88["m_columns"][] = "DA_SYMMETRY";
$proto88["m_columns"][] = "DA_FLUO";
$proto88["m_columns"][] = "DA_COLOR_FLUO";
$proto88["m_columns"][] = "DA_WIDE";
$proto88["m_columns"][] = "DA_HIGH";
$proto88["m_columns"][] = "DA_DEPTH";
$proto88["m_columns"][] = "DA_APPRAISER";
$proto88["m_columns"][] = "DA_FRAPA";
$proto88["m_columns"][] = "DA_RATE";
$proto88["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto88["m_columns"][] = "DA_YOURNAME";
$proto88["m_columns"][] = "DA_RAPAB";
$proto88["m_columns"][] = "DA_GROSSPROFIT";
$proto88["m_columns"][] = "DA_INTEREST_1";
$proto88["m_columns"][] = "DA_no";
$proto88["m_columns"][] = "kinsa_flag";
$proto88["m_columns"][] = "price_for_site_flag";
$proto88["m_columns"][] = "Eoc_takuhai_id";
$proto88["m_columns"][] = "Eoc_unfinished_id";
$proto88["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto88["m_columns"][] = "chohyo_id";
$proto88["m_columns"][] = "location";
$proto88["m_columns"][] = "special_instructions_1";
$proto88["m_columns"][] = "special_instructions_2";
$proto88["m_columns"][] = "special_instructions_3";
$proto88["m_columns"][] = "chohyo_seihin_flag";
$proto88["m_columns"][] = "chohyo_dia_flag";
$proto88["m_columns"][] = "chohyo_type";
$proto88["m_columns"][] = "ichiyen_flag";
$proto88["m_columns"][] = "asuraku_fuka_flag";
$proto88["m_columns"][] = "parallel_import_flag";
$proto88["m_columns"][] = "meisai_number";
$proto88["m_columns"][] = "days_keep_price";
$proto88["m_columns"][] = "initial_included";
$proto88["m_columns"][] = "novelty";
$proto88["m_columns"][] = "tentou_label_output_flag";
$proto88["m_columns"][] = "itaku_flag";
$proto88["m_columns"][] = "including_catch";
$proto88["m_columns"][] = "ichiba_meeting_month";
$proto88["m_columns"][] = "ichiba_meeting_name";
$proto88["m_columns"][] = "ichiba_color";
$proto88["m_columns"][] = "ichiba_clarity";
$proto88["m_columns"][] = "ichiba_melee_gai";
$proto88["m_columns"][] = "ichiba_lot_pieces";
$proto88["m_columns"][] = "ichiba_image";
$proto88["m_columns"][] = "ichiba_img";
$proto88["m_columns"][] = "gold_check_id";
$proto88["m_columns"][] = "ichiba_exhibition_id";
$proto88["m_columns"][] = "ichiba_exhibition_sort";
$proto88["m_columns"][] = "cost";
$proto88["m_columns"][] = "auto_price_cut_prohibited";
$proto88["m_columns"][] = "event_price";
$proto88["m_columns"][] = "identification_cost";
$proto88["m_columns"][] = "other_cost";
$proto88["m_columns"][] = "stock_quantity";
$proto88["m_columns"][] = "Eoc_trader_id_for_buy";
$proto88["m_columns"][] = "Eoc_trader_id_for_sell";
$proto88["m_columns"][] = "multiplication_rate";
$proto88["m_columns"][] = "many_product_group_id";
$proto88["m_columns"][] = "trading_sort_id";
$proto88["m_columns"][] = "many_product_group_saiban";
$proto88["m_columns"][] = "purchase_category";
$proto88["m_columns"][] = "created_at";
$proto88["m_columns"][] = "created_by";
$proto88["m_columns"][] = "manual_input_price_per_gram";
$proto88["m_columns"][] = "satei_start";
$proto88["m_columns"][] = "self_DA_INTENSITY";
$proto88["m_columns"][] = "self_DA_OVERTONE";
$proto88["m_columns"][] = "self_DA_COLOR";
$proto88["m_columns"][] = "self_DA_CLARITY";
$proto88["m_columns"][] = "self_DA_CUT";
$proto88["m_columns"][] = "self_DA_POLISH";
$proto88["m_columns"][] = "self_DA_SYMMETRY";
$proto88["m_columns"][] = "self_DA_FLUO";
$proto88["m_columns"][] = "self_DA_COLOR_FLUO";
$proto88["m_columns"][] = "self_DA_FRAPA";
$proto88["m_columns"][] = "self_DA_RATE";
$proto88["m_columns"][] = "self_multiplication_rate";
$proto88["m_columns"][] = "is_seiyaku";
$proto88["m_columns"][] = "destination_sold_out";
$proto88["m_columns"][] = "mypage_update_prohibited";
$proto88["m_columns"][] = "gold_check_scan_id";
$proto88["m_columns"][] = "buy_campaign_data_id";
$proto88["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto88["m_columns"][] = "commission";
$proto88["m_columns"][] = "addtime_gold_check_id";
$proto88["m_columns"][] = "is_recovery";
$proto88["m_columns"][] = "sales_cost";
$proto88["m_columns"][] = "mst_business_partner_id";
$proto88["m_columns"][] = "DA_GROSSPROFIT_2";
$proto88["m_columns"][] = "DA_INTEREST_2";
$proto88["m_columns"][] = "minus_weight";
$proto88["m_columns"][] = "diameter_size";
$proto88["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto88);

$proto87["m_table"] = $obj;
$proto87["m_sql"] = "`shouhin`";
$proto87["m_alias"] = "";
$proto87["m_srcTableName"] = "chohyo_by_seihin";
$proto89=array();
$proto89["m_sql"] = "";
$proto89["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto89["m_column"]=$obj;
$proto89["m_contained"] = array();
$proto89["m_strCase"] = "";
$proto89["m_havingmode"] = false;
$proto89["m_inBrackets"] = false;
$proto89["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto89);

$proto87["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto87);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto91=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin"
));

$proto91["m_column"]=$obj;
$proto91["m_bAsc"] = 0;
$proto91["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto91);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="chohyo_by_seihin";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chohyo_by_seihin = createSqlQuery_chohyo_by_seihin();


	
		;

																													

$tdatachohyo_by_seihin[".sqlquery"] = $queryData_chohyo_by_seihin;

include_once(getabspath("include/chohyo_by_seihin_events.php"));
$tableEvents["chohyo_by_seihin"] = new eventclass_chohyo_by_seihin;
$tdatachohyo_by_seihin[".hasEvents"] = true;

?>