<?php
require_once(getabspath("classes/cipherer.php"));




$tdatachohyo_by_seihin_result = array();
	$tdatachohyo_by_seihin_result[".truncateText"] = true;
	$tdatachohyo_by_seihin_result[".NumberOfChars"] = 80;
	$tdatachohyo_by_seihin_result[".ShortName"] = "chohyo_by_seihin_result";
	$tdatachohyo_by_seihin_result[".OwnerID"] = "";
	$tdatachohyo_by_seihin_result[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelschohyo_by_seihin_result = array();
$fieldToolTipschohyo_by_seihin_result = array();
$pageTitleschohyo_by_seihin_result = array();
$placeHolderschohyo_by_seihin_result = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelschohyo_by_seihin_result["Japanese"] = array();
	$fieldToolTipschohyo_by_seihin_result["Japanese"] = array();
	$placeHolderschohyo_by_seihin_result["Japanese"] = array();
	$pageTitleschohyo_by_seihin_result["Japanese"] = array();
	$fieldLabelschohyo_by_seihin_result["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["product_id"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["product_id"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["category_id"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["category_id"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["sub_category_id1"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["sub_category_id1"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["status"] = "商品状態";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["status"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["status"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["product_num"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["product_num"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["yahoo_sinaban"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["gold_property"] = "金性";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["gold_property"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["gold_property"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["Gram"] = "金性グラム";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["Gram"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["Gram"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["Finish"] = "仕上";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["Finish"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["Finish"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["Discrimination"] = "鑑別";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["Discrimination"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["Discrimination"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["No"] = "No";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["No"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["No"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["location"] = "ロケーション";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["location"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["location"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["onsya"] = "御社";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["onsya"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["onsya"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["special_instructions_1"] = "特別指示1";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["special_instructions_1"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["special_instructions_1"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["special_instructions_2"] = "特別指示2";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["special_instructions_2"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["special_instructions_2"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["special_instructions_3"] = "特別指示3";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["special_instructions_3"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["special_instructions_3"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["chohyo_id"] = "帳票Id";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["chohyo_id"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["chohyo_id"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["accessories"] = "付属品";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["accessories"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["accessories"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["chohyo_type"] = "Chohyo Type";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["chohyo_type"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["chohyo_type"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["satei_by"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["satei_by"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["satei_hi"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["satei_hi"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["REG_AUTHOR"] = "成約人";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["REG_AUTHOR"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["REG_AUTHOR"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["DT_UP_DATE"] = "成約日";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["DT_UP_DATE"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["kaitori_by"] = "登録人";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["kaitori_by"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["kaitori_by"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["kaitory_hi"] = "登録日";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["kaitory_hi"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["kaitory_hi"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["description"] = "メモ";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["description"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["description"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["Parent_stone"] = "親石";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["Parent_stone"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["Parent_stone"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["Aside_stone"] = "脇石";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["Aside_stone"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["Aside_stone"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["price_secret"] = "買取額隠語";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["price_secret"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["price_secret"] = "";
	$fieldLabelschohyo_by_seihin_result["Japanese"]["sales_price_secret"] = "販売額隠語";
	$fieldToolTipschohyo_by_seihin_result["Japanese"]["sales_price_secret"] = "";
	$placeHolderschohyo_by_seihin_result["Japanese"]["sales_price_secret"] = "";
	if (count($fieldToolTipschohyo_by_seihin_result["Japanese"]))
		$tdatachohyo_by_seihin_result[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelschohyo_by_seihin_result[""] = array();
	$fieldToolTipschohyo_by_seihin_result[""] = array();
	$placeHolderschohyo_by_seihin_result[""] = array();
	$pageTitleschohyo_by_seihin_result[""] = array();
	$fieldLabelschohyo_by_seihin_result[""]["No"] = "No";
	$fieldToolTipschohyo_by_seihin_result[""]["No"] = "";
	$placeHolderschohyo_by_seihin_result[""]["No"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["location"] = "Location";
	$fieldToolTipschohyo_by_seihin_result[""]["location"] = "";
	$placeHolderschohyo_by_seihin_result[""]["location"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["onsya"] = "Onsya";
	$fieldToolTipschohyo_by_seihin_result[""]["onsya"] = "";
	$placeHolderschohyo_by_seihin_result[""]["onsya"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["special_instructions_1"] = "Special Instructions 1";
	$fieldToolTipschohyo_by_seihin_result[""]["special_instructions_1"] = "";
	$placeHolderschohyo_by_seihin_result[""]["special_instructions_1"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["special_instructions_2"] = "Special Instructions 2";
	$fieldToolTipschohyo_by_seihin_result[""]["special_instructions_2"] = "";
	$placeHolderschohyo_by_seihin_result[""]["special_instructions_2"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["special_instructions_3"] = "Special Instructions 3";
	$fieldToolTipschohyo_by_seihin_result[""]["special_instructions_3"] = "";
	$placeHolderschohyo_by_seihin_result[""]["special_instructions_3"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["chohyo_id"] = "Chohyo Id";
	$fieldToolTipschohyo_by_seihin_result[""]["chohyo_id"] = "";
	$placeHolderschohyo_by_seihin_result[""]["chohyo_id"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["accessories"] = "Accessories";
	$fieldToolTipschohyo_by_seihin_result[""]["accessories"] = "";
	$placeHolderschohyo_by_seihin_result[""]["accessories"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["chohyo_type"] = "Chohyo Type";
	$fieldToolTipschohyo_by_seihin_result[""]["chohyo_type"] = "";
	$placeHolderschohyo_by_seihin_result[""]["chohyo_type"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["satei_by"] = "Satei By";
	$fieldToolTipschohyo_by_seihin_result[""]["satei_by"] = "";
	$placeHolderschohyo_by_seihin_result[""]["satei_by"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["satei_hi"] = "Satei Hi";
	$fieldToolTipschohyo_by_seihin_result[""]["satei_hi"] = "";
	$placeHolderschohyo_by_seihin_result[""]["satei_hi"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["REG_AUTHOR"] = "REG AUTHOR";
	$fieldToolTipschohyo_by_seihin_result[""]["REG_AUTHOR"] = "";
	$placeHolderschohyo_by_seihin_result[""]["REG_AUTHOR"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipschohyo_by_seihin_result[""]["DT_UP_DATE"] = "";
	$placeHolderschohyo_by_seihin_result[""]["DT_UP_DATE"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["kaitori_by"] = "Kaitori By";
	$fieldToolTipschohyo_by_seihin_result[""]["kaitori_by"] = "";
	$placeHolderschohyo_by_seihin_result[""]["kaitori_by"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipschohyo_by_seihin_result[""]["kaitory_hi"] = "";
	$placeHolderschohyo_by_seihin_result[""]["kaitory_hi"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["description"] = "Description";
	$fieldToolTipschohyo_by_seihin_result[""]["description"] = "";
	$placeHolderschohyo_by_seihin_result[""]["description"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["Parent_stone"] = "Parent Stone";
	$fieldToolTipschohyo_by_seihin_result[""]["Parent_stone"] = "";
	$placeHolderschohyo_by_seihin_result[""]["Parent_stone"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["Aside_stone"] = "Aside Stone";
	$fieldToolTipschohyo_by_seihin_result[""]["Aside_stone"] = "";
	$placeHolderschohyo_by_seihin_result[""]["Aside_stone"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["price_secret"] = "Price Secret";
	$fieldToolTipschohyo_by_seihin_result[""]["price_secret"] = "";
	$placeHolderschohyo_by_seihin_result[""]["price_secret"] = "";
	$fieldLabelschohyo_by_seihin_result[""]["sales_price_secret"] = "Sales Price Secret";
	$fieldToolTipschohyo_by_seihin_result[""]["sales_price_secret"] = "";
	$placeHolderschohyo_by_seihin_result[""]["sales_price_secret"] = "";
	if (count($fieldToolTipschohyo_by_seihin_result[""]))
		$tdatachohyo_by_seihin_result[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelschohyo_by_seihin_result["English"] = array();
	$fieldToolTipschohyo_by_seihin_result["English"] = array();
	$placeHolderschohyo_by_seihin_result["English"] = array();
	$pageTitleschohyo_by_seihin_result["English"] = array();
	$fieldLabelschohyo_by_seihin_result["English"]["No"] = "No";
	$fieldToolTipschohyo_by_seihin_result["English"]["No"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["No"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["location"] = "Location";
	$fieldToolTipschohyo_by_seihin_result["English"]["location"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["location"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["onsya"] = "Onsya";
	$fieldToolTipschohyo_by_seihin_result["English"]["onsya"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["onsya"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["special_instructions_1"] = "Special Instructions 1";
	$fieldToolTipschohyo_by_seihin_result["English"]["special_instructions_1"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["special_instructions_1"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["special_instructions_2"] = "Special Instructions 2";
	$fieldToolTipschohyo_by_seihin_result["English"]["special_instructions_2"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["special_instructions_2"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["special_instructions_3"] = "Special Instructions 3";
	$fieldToolTipschohyo_by_seihin_result["English"]["special_instructions_3"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["special_instructions_3"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["chohyo_id"] = "Chohyo Id";
	$fieldToolTipschohyo_by_seihin_result["English"]["chohyo_id"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["chohyo_id"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["accessories"] = "Accessories";
	$fieldToolTipschohyo_by_seihin_result["English"]["accessories"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["accessories"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["chohyo_type"] = "Chohyo Type";
	$fieldToolTipschohyo_by_seihin_result["English"]["chohyo_type"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["chohyo_type"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["satei_by"] = "Satei By";
	$fieldToolTipschohyo_by_seihin_result["English"]["satei_by"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["satei_by"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["satei_hi"] = "Satei Hi";
	$fieldToolTipschohyo_by_seihin_result["English"]["satei_hi"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["satei_hi"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["REG_AUTHOR"] = "REG AUTHOR";
	$fieldToolTipschohyo_by_seihin_result["English"]["REG_AUTHOR"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["REG_AUTHOR"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipschohyo_by_seihin_result["English"]["DT_UP_DATE"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["DT_UP_DATE"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["kaitori_by"] = "Kaitori By";
	$fieldToolTipschohyo_by_seihin_result["English"]["kaitori_by"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["kaitori_by"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipschohyo_by_seihin_result["English"]["kaitory_hi"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["kaitory_hi"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["description"] = "Description";
	$fieldToolTipschohyo_by_seihin_result["English"]["description"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["description"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["Parent_stone"] = "Parent Stone";
	$fieldToolTipschohyo_by_seihin_result["English"]["Parent_stone"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["Parent_stone"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["Aside_stone"] = "Aside Stone";
	$fieldToolTipschohyo_by_seihin_result["English"]["Aside_stone"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["Aside_stone"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["price_secret"] = "Price Secret";
	$fieldToolTipschohyo_by_seihin_result["English"]["price_secret"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["price_secret"] = "";
	$fieldLabelschohyo_by_seihin_result["English"]["sales_price_secret"] = "Sales Price Secret";
	$fieldToolTipschohyo_by_seihin_result["English"]["sales_price_secret"] = "";
	$placeHolderschohyo_by_seihin_result["English"]["sales_price_secret"] = "";
	if (count($fieldToolTipschohyo_by_seihin_result["English"]))
		$tdatachohyo_by_seihin_result[".isUseToolTips"] = true;
}


	$tdatachohyo_by_seihin_result[".NCSearch"] = true;



$tdatachohyo_by_seihin_result[".shortTableName"] = "chohyo_by_seihin_result";
$tdatachohyo_by_seihin_result[".nSecOptions"] = 0;
$tdatachohyo_by_seihin_result[".recsPerRowPrint"] = 1;
$tdatachohyo_by_seihin_result[".mainTableOwnerID"] = "";
$tdatachohyo_by_seihin_result[".moveNext"] = 1;
$tdatachohyo_by_seihin_result[".entityType"] = 1;

$tdatachohyo_by_seihin_result[".strOriginalTableName"] = "shouhin";

	



$tdatachohyo_by_seihin_result[".showAddInPopup"] = false;

$tdatachohyo_by_seihin_result[".showEditInPopup"] = false;

$tdatachohyo_by_seihin_result[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatachohyo_by_seihin_result[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatachohyo_by_seihin_result[".fieldsForRegister"] = array();

$tdatachohyo_by_seihin_result[".listAjax"] = false;

	$tdatachohyo_by_seihin_result[".audit"] = true;

	$tdatachohyo_by_seihin_result[".locking"] = false;



$tdatachohyo_by_seihin_result[".list"] = true;

$tdatachohyo_by_seihin_result[".inlineEdit"] = true;


$tdatachohyo_by_seihin_result[".reorderRecordsByHeader"] = true;
$tdatachohyo_by_seihin_result[".createSortByDropdown"] = true;
$tdatachohyo_by_seihin_result[".strSortControlSettingsJSON"] = "";



$tdatachohyo_by_seihin_result[".inlineAdd"] = true;

$tdatachohyo_by_seihin_result[".import"] = true;

$tdatachohyo_by_seihin_result[".exportTo"] = true;



$tdatachohyo_by_seihin_result[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatachohyo_by_seihin_result[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatachohyo_by_seihin_result[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatachohyo_by_seihin_result[".searchSaving"] = false;
//

$tdatachohyo_by_seihin_result[".showSearchPanel"] = true;
		$tdatachohyo_by_seihin_result[".flexibleSearch"] = true;

$tdatachohyo_by_seihin_result[".isUseAjaxSuggest"] = true;

$tdatachohyo_by_seihin_result[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																															
					
					
					
																																																																																																																																																																																																																																																																																																																																																																																														

$tdatachohyo_by_seihin_result[".ajaxCodeSnippetAdded"] = false;

$tdatachohyo_by_seihin_result[".buttonsAdded"] = true;

$tdatachohyo_by_seihin_result[".addPageEvents"] = true;

// use timepicker for search panel
$tdatachohyo_by_seihin_result[".isUseTimeForSearch"] = false;



$tdatachohyo_by_seihin_result[".badgeColor"] = "7b68ee";


$tdatachohyo_by_seihin_result[".allSearchFields"] = array();
$tdatachohyo_by_seihin_result[".filterFields"] = array();
$tdatachohyo_by_seihin_result[".requiredSearchFields"] = array();

$tdatachohyo_by_seihin_result[".allSearchFields"][] = "price_secret";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "sales_price_secret";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "description";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "Parent_stone";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "Aside_stone";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "satei_by";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "satei_hi";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "REG_AUTHOR";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "DT_UP_DATE";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "kaitori_by";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "kaitory_hi";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "location";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "onsya";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "status";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "chohyo_id";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "product_id";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "yahoo_sinaban";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "Finish";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "Discrimination";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "accessories";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "special_instructions_1";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "special_instructions_2";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "special_instructions_3";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "product_num";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "category_id";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "sub_category_id1";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "gold_property";
	$tdatachohyo_by_seihin_result[".allSearchFields"][] = "Gram";
	

$tdatachohyo_by_seihin_result[".googleLikeFields"] = array();
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "No";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "location";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "onsya";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "status";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "product_id";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "yahoo_sinaban";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "Finish";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "Discrimination";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "accessories";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "special_instructions_1";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "special_instructions_2";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "special_instructions_3";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "product_num";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "category_id";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "sub_category_id1";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "gold_property";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "Gram";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "chohyo_id";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "chohyo_type";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "satei_by";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "satei_hi";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "REG_AUTHOR";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "DT_UP_DATE";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "kaitori_by";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "kaitory_hi";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "description";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "Parent_stone";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "Aside_stone";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "price_secret";
$tdatachohyo_by_seihin_result[".googleLikeFields"][] = "sales_price_secret";

$tdatachohyo_by_seihin_result[".panelSearchFields"] = array();
$tdatachohyo_by_seihin_result[".searchPanelOptions"] = array();
$tdatachohyo_by_seihin_result[".panelSearchFields"][] = "status";
	$tdatachohyo_by_seihin_result[".panelSearchFields"][] = "product_id";
	$tdatachohyo_by_seihin_result[".panelSearchFields"][] = "yahoo_sinaban";
	$tdatachohyo_by_seihin_result[".panelSearchFields"][] = "Finish";
	$tdatachohyo_by_seihin_result[".panelSearchFields"][] = "Discrimination";
	$tdatachohyo_by_seihin_result[".panelSearchFields"][] = "product_num";
	$tdatachohyo_by_seihin_result[".panelSearchFields"][] = "category_id";
	$tdatachohyo_by_seihin_result[".panelSearchFields"][] = "sub_category_id1";
	$tdatachohyo_by_seihin_result[".panelSearchFields"][] = "gold_property";
	$tdatachohyo_by_seihin_result[".panelSearchFields"][] = "Gram";
	
$tdatachohyo_by_seihin_result[".advSearchFields"] = array();
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "price_secret";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "sales_price_secret";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "description";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "Parent_stone";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "Aside_stone";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "satei_by";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "satei_hi";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "REG_AUTHOR";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "DT_UP_DATE";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "kaitori_by";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "kaitory_hi";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "location";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "onsya";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "status";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "chohyo_id";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "product_id";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "yahoo_sinaban";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "Finish";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "Discrimination";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "accessories";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "special_instructions_1";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "special_instructions_2";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "special_instructions_3";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "product_num";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "category_id";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "sub_category_id1";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "gold_property";
$tdatachohyo_by_seihin_result[".advSearchFields"][] = "Gram";

$tdatachohyo_by_seihin_result[".tableType"] = "list";

$tdatachohyo_by_seihin_result[".printerPageOrientation"] = 0;
$tdatachohyo_by_seihin_result[".nPrinterPageScale"] = 100;

$tdatachohyo_by_seihin_result[".nPrinterSplitRecords"] = 40;

$tdatachohyo_by_seihin_result[".nPrinterPDFSplitRecords"] = 40;



$tdatachohyo_by_seihin_result[".geocodingEnabled"] = false;





$tdatachohyo_by_seihin_result[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatachohyo_by_seihin_result[".totalsFields"] = array();
$tdatachohyo_by_seihin_result[".totalsFields"][] = array(
	"fName" => "product_id",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => '');

$tdatachohyo_by_seihin_result[".pageSize"] = 100;

$tdatachohyo_by_seihin_result[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatachohyo_by_seihin_result[".strOrderBy"] = $tstrOrderBy;

$tdatachohyo_by_seihin_result[".orderindexes"] = array();
$tdatachohyo_by_seihin_result[".orderindexes"][] = array(5, (0 ? "ASC" : "DESC"), "`product_id`");

$tdatachohyo_by_seihin_result[".sqlHead"] = "select '' AS `No`,  `location`,  '' AS `onsya`,  `status`,  `product_id`,  `yahoo_sinaban`,  `Finish`,  `Discrimination`,  `accessories`,  `special_instructions_1`,  `special_instructions_2`,  `special_instructions_3`,  `product_num`,  `category_id`,  `sub_category_id1`,  `gold_property`,  `Gram`,  `chohyo_id`,  `chohyo_type`,  `satei_by`,  `satei_hi`,  `REG_AUTHOR`,  `DT_UP_DATE`,  `kaitori_by`,  `kaitory_hi`,  `description`,  `Parent_stone`,  `Aside_stone`,  `price_secret`,  `sales_price_secret`";
$tdatachohyo_by_seihin_result[".sqlFrom"] = "FROM `shouhin`";
$tdatachohyo_by_seihin_result[".sqlWhereExpr"] = "(`chohyo_id` <> '') AND (`chohyo_type` =1)";
$tdatachohyo_by_seihin_result[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachohyo_by_seihin_result[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachohyo_by_seihin_result[".arrGroupsPerPage"] = $arrGPP;

$tdatachohyo_by_seihin_result[".highlightSearchResults"] = true;

$tableKeyschohyo_by_seihin_result = array();
$tableKeyschohyo_by_seihin_result[] = "product_id";
$tdatachohyo_by_seihin_result[".Keys"] = $tableKeyschohyo_by_seihin_result;

$tdatachohyo_by_seihin_result[".listFields"] = array();
$tdatachohyo_by_seihin_result[".listFields"][] = "location";
$tdatachohyo_by_seihin_result[".listFields"][] = "onsya";
$tdatachohyo_by_seihin_result[".listFields"][] = "status";
$tdatachohyo_by_seihin_result[".listFields"][] = "chohyo_id";
$tdatachohyo_by_seihin_result[".listFields"][] = "product_id";
$tdatachohyo_by_seihin_result[".listFields"][] = "yahoo_sinaban";
$tdatachohyo_by_seihin_result[".listFields"][] = "Finish";
$tdatachohyo_by_seihin_result[".listFields"][] = "Discrimination";
$tdatachohyo_by_seihin_result[".listFields"][] = "accessories";
$tdatachohyo_by_seihin_result[".listFields"][] = "description";
$tdatachohyo_by_seihin_result[".listFields"][] = "special_instructions_1";
$tdatachohyo_by_seihin_result[".listFields"][] = "special_instructions_2";
$tdatachohyo_by_seihin_result[".listFields"][] = "special_instructions_3";
$tdatachohyo_by_seihin_result[".listFields"][] = "product_num";
$tdatachohyo_by_seihin_result[".listFields"][] = "category_id";
$tdatachohyo_by_seihin_result[".listFields"][] = "sub_category_id1";
$tdatachohyo_by_seihin_result[".listFields"][] = "Parent_stone";
$tdatachohyo_by_seihin_result[".listFields"][] = "Aside_stone";
$tdatachohyo_by_seihin_result[".listFields"][] = "gold_property";
$tdatachohyo_by_seihin_result[".listFields"][] = "Gram";
$tdatachohyo_by_seihin_result[".listFields"][] = "satei_by";
$tdatachohyo_by_seihin_result[".listFields"][] = "price_secret";
$tdatachohyo_by_seihin_result[".listFields"][] = "sales_price_secret";
$tdatachohyo_by_seihin_result[".listFields"][] = "satei_hi";
$tdatachohyo_by_seihin_result[".listFields"][] = "REG_AUTHOR";
$tdatachohyo_by_seihin_result[".listFields"][] = "DT_UP_DATE";
$tdatachohyo_by_seihin_result[".listFields"][] = "kaitori_by";
$tdatachohyo_by_seihin_result[".listFields"][] = "kaitory_hi";

$tdatachohyo_by_seihin_result[".hideMobileList"] = array();


$tdatachohyo_by_seihin_result[".viewFields"] = array();

$tdatachohyo_by_seihin_result[".addFields"] = array();

$tdatachohyo_by_seihin_result[".masterListFields"] = array();
$tdatachohyo_by_seihin_result[".masterListFields"][] = "chohyo_type";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "satei_by";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "satei_hi";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "REG_AUTHOR";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "DT_UP_DATE";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "kaitori_by";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "kaitory_hi";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "description";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "Parent_stone";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "Aside_stone";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "price_secret";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "sales_price_secret";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "No";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "location";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "onsya";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "status";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "chohyo_id";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "product_id";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "yahoo_sinaban";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "Finish";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "Discrimination";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "accessories";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "special_instructions_1";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "special_instructions_2";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "special_instructions_3";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "product_num";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "category_id";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "sub_category_id1";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "gold_property";
$tdatachohyo_by_seihin_result[".masterListFields"][] = "Gram";

$tdatachohyo_by_seihin_result[".inlineAddFields"] = array();
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "location";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "status";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "chohyo_id";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "Finish";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "Discrimination";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "accessories";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "description";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "special_instructions_1";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "special_instructions_2";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "special_instructions_3";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "product_num";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "category_id";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "sub_category_id1";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "Parent_stone";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "Aside_stone";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "gold_property";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "Gram";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "price_secret";
$tdatachohyo_by_seihin_result[".inlineAddFields"][] = "sales_price_secret";

$tdatachohyo_by_seihin_result[".editFields"] = array();

$tdatachohyo_by_seihin_result[".inlineEditFields"] = array();
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "location";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "status";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "chohyo_id";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "Finish";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "Discrimination";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "accessories";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "description";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "special_instructions_1";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "special_instructions_2";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "special_instructions_3";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "product_num";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "category_id";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "sub_category_id1";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "Parent_stone";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "Aside_stone";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "gold_property";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "Gram";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "price_secret";
$tdatachohyo_by_seihin_result[".inlineEditFields"][] = "sales_price_secret";

$tdatachohyo_by_seihin_result[".updateSelectedFields"] = array();


$tdatachohyo_by_seihin_result[".exportFields"] = array();
$tdatachohyo_by_seihin_result[".exportFields"][] = "location";
$tdatachohyo_by_seihin_result[".exportFields"][] = "onsya";
$tdatachohyo_by_seihin_result[".exportFields"][] = "status";
$tdatachohyo_by_seihin_result[".exportFields"][] = "chohyo_id";
$tdatachohyo_by_seihin_result[".exportFields"][] = "product_id";
$tdatachohyo_by_seihin_result[".exportFields"][] = "yahoo_sinaban";
$tdatachohyo_by_seihin_result[".exportFields"][] = "Finish";
$tdatachohyo_by_seihin_result[".exportFields"][] = "Discrimination";
$tdatachohyo_by_seihin_result[".exportFields"][] = "accessories";
$tdatachohyo_by_seihin_result[".exportFields"][] = "description";
$tdatachohyo_by_seihin_result[".exportFields"][] = "special_instructions_1";
$tdatachohyo_by_seihin_result[".exportFields"][] = "special_instructions_2";
$tdatachohyo_by_seihin_result[".exportFields"][] = "special_instructions_3";
$tdatachohyo_by_seihin_result[".exportFields"][] = "product_num";
$tdatachohyo_by_seihin_result[".exportFields"][] = "category_id";
$tdatachohyo_by_seihin_result[".exportFields"][] = "sub_category_id1";
$tdatachohyo_by_seihin_result[".exportFields"][] = "Parent_stone";
$tdatachohyo_by_seihin_result[".exportFields"][] = "Aside_stone";
$tdatachohyo_by_seihin_result[".exportFields"][] = "gold_property";
$tdatachohyo_by_seihin_result[".exportFields"][] = "Gram";
$tdatachohyo_by_seihin_result[".exportFields"][] = "satei_by";
$tdatachohyo_by_seihin_result[".exportFields"][] = "price_secret";
$tdatachohyo_by_seihin_result[".exportFields"][] = "sales_price_secret";
$tdatachohyo_by_seihin_result[".exportFields"][] = "satei_hi";
$tdatachohyo_by_seihin_result[".exportFields"][] = "REG_AUTHOR";
$tdatachohyo_by_seihin_result[".exportFields"][] = "DT_UP_DATE";
$tdatachohyo_by_seihin_result[".exportFields"][] = "kaitori_by";
$tdatachohyo_by_seihin_result[".exportFields"][] = "kaitory_hi";

$tdatachohyo_by_seihin_result[".importFields"] = array();
$tdatachohyo_by_seihin_result[".importFields"][] = "location";
$tdatachohyo_by_seihin_result[".importFields"][] = "onsya";
$tdatachohyo_by_seihin_result[".importFields"][] = "status";
$tdatachohyo_by_seihin_result[".importFields"][] = "product_id";
$tdatachohyo_by_seihin_result[".importFields"][] = "yahoo_sinaban";
$tdatachohyo_by_seihin_result[".importFields"][] = "Finish";
$tdatachohyo_by_seihin_result[".importFields"][] = "Discrimination";
$tdatachohyo_by_seihin_result[".importFields"][] = "accessories";
$tdatachohyo_by_seihin_result[".importFields"][] = "special_instructions_1";
$tdatachohyo_by_seihin_result[".importFields"][] = "special_instructions_2";
$tdatachohyo_by_seihin_result[".importFields"][] = "special_instructions_3";
$tdatachohyo_by_seihin_result[".importFields"][] = "product_num";
$tdatachohyo_by_seihin_result[".importFields"][] = "category_id";
$tdatachohyo_by_seihin_result[".importFields"][] = "sub_category_id1";
$tdatachohyo_by_seihin_result[".importFields"][] = "gold_property";
$tdatachohyo_by_seihin_result[".importFields"][] = "Gram";
$tdatachohyo_by_seihin_result[".importFields"][] = "chohyo_id";
$tdatachohyo_by_seihin_result[".importFields"][] = "description";
$tdatachohyo_by_seihin_result[".importFields"][] = "Parent_stone";
$tdatachohyo_by_seihin_result[".importFields"][] = "Aside_stone";
$tdatachohyo_by_seihin_result[".importFields"][] = "price_secret";
$tdatachohyo_by_seihin_result[".importFields"][] = "sales_price_secret";

$tdatachohyo_by_seihin_result[".printFields"] = array();

//	No
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "No";
	$fdata["GoodName"] = "No";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","No");
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








	$tdatachohyo_by_seihin_result["No"] = $fdata;
//	location
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "location";
	$fdata["GoodName"] = "location";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","location");
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




	$tdatachohyo_by_seihin_result["location"] = $fdata;
//	onsya
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "onsya";
	$fdata["GoodName"] = "onsya";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","onsya");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "onsya";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatachohyo_by_seihin_result["onsya"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","status");
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




	$tdatachohyo_by_seihin_result["status"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","product_id");
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




	$tdatachohyo_by_seihin_result["product_id"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","yahoo_sinaban");
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




	$tdatachohyo_by_seihin_result["yahoo_sinaban"] = $fdata;
//	Finish
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Finish";
	$fdata["GoodName"] = "Finish";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","Finish");
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




	$tdatachohyo_by_seihin_result["Finish"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","Discrimination");
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




	$tdatachohyo_by_seihin_result["Discrimination"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "accessories";
	$fdata["GoodName"] = "accessories";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","accessories");
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




	$tdatachohyo_by_seihin_result["accessories"] = $fdata;
//	special_instructions_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "special_instructions_1";
	$fdata["GoodName"] = "special_instructions_1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","special_instructions_1");
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




	$tdatachohyo_by_seihin_result["special_instructions_1"] = $fdata;
//	special_instructions_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "special_instructions_2";
	$fdata["GoodName"] = "special_instructions_2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","special_instructions_2");
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




	$tdatachohyo_by_seihin_result["special_instructions_2"] = $fdata;
//	special_instructions_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "special_instructions_3";
	$fdata["GoodName"] = "special_instructions_3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","special_instructions_3");
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




	$tdatachohyo_by_seihin_result["special_instructions_3"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","product_num");
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




	$tdatachohyo_by_seihin_result["product_num"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","category_id");
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




	$tdatachohyo_by_seihin_result["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","sub_category_id1");
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




	$tdatachohyo_by_seihin_result["sub_category_id1"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","gold_property");
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




	$tdatachohyo_by_seihin_result["gold_property"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","Gram");
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




	$tdatachohyo_by_seihin_result["Gram"] = $fdata;
//	chohyo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "chohyo_id";
	$fdata["GoodName"] = "chohyo_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","chohyo_id");
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




	$tdatachohyo_by_seihin_result["chohyo_id"] = $fdata;
//	chohyo_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "chohyo_type";
	$fdata["GoodName"] = "chohyo_type";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","chohyo_type");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "chohyo_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`chohyo_type`";

	
	
			
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








	$tdatachohyo_by_seihin_result["chohyo_type"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","satei_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatachohyo_by_seihin_result["satei_by"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","satei_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatachohyo_by_seihin_result["satei_hi"] = $fdata;
//	REG_AUTHOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "REG_AUTHOR";
	$fdata["GoodName"] = "REG_AUTHOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","REG_AUTHOR");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatachohyo_by_seihin_result["REG_AUTHOR"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","DT_UP_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatachohyo_by_seihin_result["DT_UP_DATE"] = $fdata;
//	kaitori_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "kaitori_by";
	$fdata["GoodName"] = "kaitori_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","kaitori_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatachohyo_by_seihin_result["kaitori_by"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "kaitory_hi";
	$fdata["GoodName"] = "kaitory_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","kaitory_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatachohyo_by_seihin_result["kaitory_hi"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","description");
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




	$tdatachohyo_by_seihin_result["description"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","Parent_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Parent_stone`";

	
	
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




	$tdatachohyo_by_seihin_result["Parent_stone"] = $fdata;
//	Aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Aside_stone";
	$fdata["GoodName"] = "Aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","Aside_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Aside_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Aside_stone`";

	
	
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




	$tdatachohyo_by_seihin_result["Aside_stone"] = $fdata;
//	price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "price_secret";
	$fdata["GoodName"] = "price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","price_secret");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_secret";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`price_secret`";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatachohyo_by_seihin_result["price_secret"] = $fdata;
//	sales_price_secret
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "sales_price_secret";
	$fdata["GoodName"] = "sales_price_secret";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_seihin_result","sales_price_secret");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_price_secret";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_price_secret`";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatachohyo_by_seihin_result["sales_price_secret"] = $fdata;


$tables_data["chohyo_by_seihin_result"]=&$tdatachohyo_by_seihin_result;
$field_labels["chohyo_by_seihin_result"] = &$fieldLabelschohyo_by_seihin_result;
$fieldToolTips["chohyo_by_seihin_result"] = &$fieldToolTipschohyo_by_seihin_result;
$placeHolders["chohyo_by_seihin_result"] = &$placeHolderschohyo_by_seihin_result;
$page_titles["chohyo_by_seihin_result"] = &$pageTitleschohyo_by_seihin_result;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["chohyo_by_seihin_result"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["chohyo_by_seihin_result"] = array();


	
				$strOriginalDetailsTable="chohyo";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="chohyo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "chohyo";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "1";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["chohyo_by_seihin_result"][0] = $masterParams;
				$masterTablesData["chohyo_by_seihin_result"][0]["masterKeys"] = array();
	$masterTablesData["chohyo_by_seihin_result"][0]["masterKeys"][]="id";
				$masterTablesData["chohyo_by_seihin_result"][0]["detailKeys"] = array();
	$masterTablesData["chohyo_by_seihin_result"][0]["detailKeys"][]="chohyo_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_chohyo_by_seihin_result()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "'' AS `No`,  `location`,  '' AS `onsya`,  `status`,  `product_id`,  `yahoo_sinaban`,  `Finish`,  `Discrimination`,  `accessories`,  `special_instructions_1`,  `special_instructions_2`,  `special_instructions_3`,  `product_num`,  `category_id`,  `sub_category_id1`,  `gold_property`,  `Gram`,  `chohyo_id`,  `chohyo_type`,  `satei_by`,  `satei_hi`,  `REG_AUTHOR`,  `DT_UP_DATE`,  `kaitori_by`,  `kaitory_hi`,  `description`,  `Parent_stone`,  `Aside_stone`,  `price_secret`,  `sales_price_secret`";
$proto0["m_strFrom"] = "FROM `shouhin`";
$proto0["m_strWhere"] = "(`chohyo_id` <> '') AND (`chohyo_type` =1)";
$proto0["m_strOrderBy"] = "ORDER BY `product_id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(`chohyo_id` <> '') AND (`chohyo_type` =1)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(`chohyo_id` <> '') AND (`chohyo_type` =1)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`chohyo_id` <> ''";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "chohyo_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "<> ''";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "`chohyo_type` =1";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "chohyo_type",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=1";
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
	"m_sql" => "''"
));

$proto10["m_sql"] = "''";
$proto10["m_srcTableName"] = "chohyo_by_seihin_result";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "No";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "location",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto12["m_sql"] = "`location`";
$proto12["m_srcTableName"] = "chohyo_by_seihin_result";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto14["m_sql"] = "''";
$proto14["m_srcTableName"] = "chohyo_by_seihin_result";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "onsya";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto16["m_sql"] = "`status`";
$proto16["m_srcTableName"] = "chohyo_by_seihin_result";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto18["m_sql"] = "`product_id`";
$proto18["m_srcTableName"] = "chohyo_by_seihin_result";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto20["m_sql"] = "`yahoo_sinaban`";
$proto20["m_srcTableName"] = "chohyo_by_seihin_result";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Finish",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto22["m_sql"] = "`Finish`";
$proto22["m_srcTableName"] = "chohyo_by_seihin_result";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto24["m_sql"] = "`Discrimination`";
$proto24["m_srcTableName"] = "chohyo_by_seihin_result";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto26["m_sql"] = "`accessories`";
$proto26["m_srcTableName"] = "chohyo_by_seihin_result";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "special_instructions_1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto28["m_sql"] = "`special_instructions_1`";
$proto28["m_srcTableName"] = "chohyo_by_seihin_result";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "special_instructions_2",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto30["m_sql"] = "`special_instructions_2`";
$proto30["m_srcTableName"] = "chohyo_by_seihin_result";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "special_instructions_3",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto32["m_sql"] = "`special_instructions_3`";
$proto32["m_srcTableName"] = "chohyo_by_seihin_result";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto34["m_sql"] = "`product_num`";
$proto34["m_srcTableName"] = "chohyo_by_seihin_result";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto36["m_sql"] = "`category_id`";
$proto36["m_srcTableName"] = "chohyo_by_seihin_result";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto38["m_sql"] = "`sub_category_id1`";
$proto38["m_srcTableName"] = "chohyo_by_seihin_result";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto40["m_sql"] = "`gold_property`";
$proto40["m_srcTableName"] = "chohyo_by_seihin_result";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto42["m_sql"] = "`Gram`";
$proto42["m_srcTableName"] = "chohyo_by_seihin_result";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "chohyo_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto44["m_sql"] = "`chohyo_id`";
$proto44["m_srcTableName"] = "chohyo_by_seihin_result";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "chohyo_type",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto46["m_sql"] = "`chohyo_type`";
$proto46["m_srcTableName"] = "chohyo_by_seihin_result";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto48["m_sql"] = "`satei_by`";
$proto48["m_srcTableName"] = "chohyo_by_seihin_result";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto50["m_sql"] = "`satei_hi`";
$proto50["m_srcTableName"] = "chohyo_by_seihin_result";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_AUTHOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto52["m_sql"] = "`REG_AUTHOR`";
$proto52["m_srcTableName"] = "chohyo_by_seihin_result";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto54["m_sql"] = "`DT_UP_DATE`";
$proto54["m_srcTableName"] = "chohyo_by_seihin_result";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto56["m_sql"] = "`kaitori_by`";
$proto56["m_srcTableName"] = "chohyo_by_seihin_result";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto58["m_sql"] = "`kaitory_hi`";
$proto58["m_srcTableName"] = "chohyo_by_seihin_result";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto60["m_sql"] = "`description`";
$proto60["m_srcTableName"] = "chohyo_by_seihin_result";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto62["m_sql"] = "`Parent_stone`";
$proto62["m_srcTableName"] = "chohyo_by_seihin_result";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto64["m_sql"] = "`Aside_stone`";
$proto64["m_srcTableName"] = "chohyo_by_seihin_result";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto66["m_sql"] = "`price_secret`";
$proto66["m_srcTableName"] = "chohyo_by_seihin_result";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price_secret",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto68["m_sql"] = "`sales_price_secret`";
$proto68["m_srcTableName"] = "chohyo_by_seihin_result";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto70=array();
$proto70["m_link"] = "SQLL_MAIN";
			$proto71=array();
$proto71["m_strName"] = "shouhin";
$proto71["m_srcTableName"] = "chohyo_by_seihin_result";
$proto71["m_columns"] = array();
$proto71["m_columns"][] = "product_id";
$proto71["m_columns"][] = "category_id";
$proto71["m_columns"][] = "goods_title";
$proto71["m_columns"][] = "title";
$proto71["m_columns"][] = "sub_category_id1";
$proto71["m_columns"][] = "ecc_id";
$proto71["m_columns"][] = "price";
$proto71["m_columns"][] = "yahoo";
$proto71["m_columns"][] = "remark";
$proto71["m_columns"][] = "sales_price";
$proto71["m_columns"][] = "description";
$proto71["m_columns"][] = "status";
$proto71["m_columns"][] = "product_num";
$proto71["m_columns"][] = "updated_at";
$proto71["m_columns"][] = "yahoo_size";
$proto71["m_columns"][] = "yahoo_title";
$proto71["m_columns"][] = "yahoo_junle";
$proto71["m_columns"][] = "yahoo_sankou_uwadai";
$proto71["m_columns"][] = "yahoo_sozai";
$proto71["m_columns"][] = "yahoo_color";
$proto71["m_columns"][] = "yahoo_kataban";
$proto71["m_columns"][] = "yahoo_condition1";
$proto71["m_columns"][] = "yahoo_condition2";
$proto71["m_columns"][] = "yahoo_fuzokuhin";
$proto71["m_columns"][] = "yahoo_sinaban";
$proto71["m_columns"][] = "yahoo_saisun_sha";
$proto71["m_columns"][] = "yahoo_sex";
$proto71["m_columns"][] = "box_id";
$proto71["m_columns"][] = "nyuukin_price";
$proto71["m_columns"][] = "updated_by";
$proto71["m_columns"][] = "raku_title";
$proto71["m_columns"][] = "raku_hyoujisaki_category2";
$proto71["m_columns"][] = "raku_hyoujisaki_category";
$proto71["m_columns"][] = "raku_hyoujisaki_category3";
$proto71["m_columns"][] = "timesta";
$proto71["m_columns"][] = "saisun_start";
$proto71["m_columns"][] = "saisun_end";
$proto71["m_columns"][] = "label_output_flag";
$proto71["m_columns"][] = "season";
$proto71["m_columns"][] = "kanryou_henbi";
$proto71["m_columns"][] = "box_sort";
$proto71["m_columns"][] = "satei_by";
$proto71["m_columns"][] = "kaitori_by";
$proto71["m_columns"][] = "comment";
$proto71["m_columns"][] = "satei_hi";
$proto71["m_columns"][] = "kaitory_hi";
$proto71["m_columns"][] = "REG_PHOTOGRAPHER";
$proto71["m_columns"][] = "REG_AUTHOR";
$proto71["m_columns"][] = "REG_PACKINGS";
$proto71["m_columns"][] = "REG_KAKOU_DATE";
$proto71["m_columns"][] = "REG_KAKOU";
$proto71["m_columns"][] = "REG_EXHIBITOR";
$proto71["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto71["m_columns"][] = "DT_PACKING_DATE";
$proto71["m_columns"][] = "DT_UP_DATE";
$proto71["m_columns"][] = "AWAZU_DATE";
$proto71["m_columns"][] = "AWAZU_NIN";
$proto71["m_columns"][] = "sabun_date";
$proto71["m_columns"][] = "browseid";
$proto71["m_columns"][] = "browsenode";
$proto71["m_columns"][] = "gold_property";
$proto71["m_columns"][] = "ichiba_title";
$proto71["m_columns"][] = "Gram";
$proto71["m_columns"][] = "Parent_stone";
$proto71["m_columns"][] = "Aside_stone";
$proto71["m_columns"][] = "Appraiser";
$proto71["m_columns"][] = "Remarks";
$proto71["m_columns"][] = "Destination_selling";
$proto71["m_columns"][] = "Finish";
$proto71["m_columns"][] = "Discrimination";
$proto71["m_columns"][] = "accessories";
$proto71["m_columns"][] = "priority";
$proto71["m_columns"][] = "A_storage";
$proto71["m_columns"][] = "price_per_gram";
$proto71["m_columns"][] = "price_per_parent_stone";
$proto71["m_columns"][] = "price_per_aside_stone";
$proto71["m_columns"][] = "price_secret";
$proto71["m_columns"][] = "sales_price_secret";
$proto71["m_columns"][] = "eq";
$proto71["m_columns"][] = "en";
$proto71["m_columns"][] = "line";
$proto71["m_columns"][] = "item_name";
$proto71["m_columns"][] = "handle";
$proto71["m_columns"][] = "yahoo_color_id";
$proto71["m_columns"][] = "raku_hyoujisaki_category4";
$proto71["m_columns"][] = "raku_hyoujisaki_category5";
$proto71["m_columns"][] = "raku_dir_1";
$proto71["m_columns"][] = "raku_dir_2";
$proto71["m_columns"][] = "raku_dir_3";
$proto71["m_columns"][] = "raku_dir_4";
$proto71["m_columns"][] = "raku_dir_5";
$proto71["m_columns"][] = "raku_dir_result";
$proto71["m_columns"][] = "raku_tag_result";
$proto71["m_columns"][] = "serial_number";
$proto71["m_columns"][] = "Exhibition_Date";
$proto71["m_columns"][] = "search_keyword";
$proto71["m_columns"][] = "stamp";
$proto71["m_columns"][] = "motif";
$proto71["m_columns"][] = "Setting";
$proto71["m_columns"][] = "processing";
$proto71["m_columns"][] = "Sleeve_Length";
$proto71["m_columns"][] = "length";
$proto71["m_columns"][] = "Ring_size";
$proto71["m_columns"][] = "price_for_site";
$proto71["m_columns"][] = "yahoo_category_id";
$proto71["m_columns"][] = "Qty";
$proto71["m_columns"][] = "sales_period";
$proto71["m_columns"][] = "starting_price";
$proto71["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto71["m_columns"][] = "amount_of_image";
$proto71["m_columns"][] = "csv";
$proto71["m_columns"][] = "return_output_flag";
$proto71["m_columns"][] = "wasabi_flag";
$proto71["m_columns"][] = "ws_import_date";
$proto71["m_columns"][] = "logo";
$proto71["m_columns"][] = "parts";
$proto71["m_columns"][] = "country_of_origin";
$proto71["m_columns"][] = "zipper";
$proto71["m_columns"][] = "guarantee";
$proto71["m_columns"][] = "errors";
$proto71["m_columns"][] = "designer";
$proto71["m_columns"][] = "hahakai";
$proto71["m_columns"][] = "effect";
$proto71["m_columns"][] = "shape";
$proto71["m_columns"][] = "cutting_style";
$proto71["m_columns"][] = "chain_type";
$proto71["m_columns"][] = "number_of_stones";
$proto71["m_columns"][] = "amount";
$proto71["m_columns"][] = "satei_error";
$proto71["m_columns"][] = "producing_area";
$proto71["m_columns"][] = "shape_supplement";
$proto71["m_columns"][] = "side_gem";
$proto71["m_columns"][] = "product_style";
$proto71["m_columns"][] = "collar_neck_line";
$proto71["m_columns"][] = "breast";
$proto71["m_columns"][] = "silhouette";
$proto71["m_columns"][] = "sleeve";
$proto71["m_columns"][] = "unit";
$proto71["m_columns"][] = "hall_mark";
$proto71["m_columns"][] = "plate";
$proto71["m_columns"][] = "toe";
$proto71["m_columns"][] = "heel";
$proto71["m_columns"][] = "cloth";
$proto71["m_columns"][] = "serial_number_for_storage";
$proto71["m_columns"][] = "official_url";
$proto71["m_columns"][] = "main_details";
$proto71["m_columns"][] = "notation_size";
$proto71["m_columns"][] = "shoe_size_jp";
$proto71["m_columns"][] = "Eoc_chigins2_id";
$proto71["m_columns"][] = "country_of_origin_name";
$proto71["m_columns"][] = "mailingkit_id";
$proto71["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto71["m_columns"][] = "DA_WEIGHT";
$proto71["m_columns"][] = "DA_PER_CARAT";
$proto71["m_columns"][] = "DA_SHAPE";
$proto71["m_columns"][] = "DA_SELFGRES";
$proto71["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto71["m_columns"][] = "DA_SUGARCANE";
$proto71["m_columns"][] = "DA_RAPA";
$proto71["m_columns"][] = "DA_INTENSITY";
$proto71["m_columns"][] = "DA_OVERTONE";
$proto71["m_columns"][] = "DA_COLOR";
$proto71["m_columns"][] = "DA_CLARITY";
$proto71["m_columns"][] = "DA_CUT";
$proto71["m_columns"][] = "DA_POLISH";
$proto71["m_columns"][] = "DA_SYMMETRY";
$proto71["m_columns"][] = "DA_FLUO";
$proto71["m_columns"][] = "DA_COLOR_FLUO";
$proto71["m_columns"][] = "DA_WIDE";
$proto71["m_columns"][] = "DA_HIGH";
$proto71["m_columns"][] = "DA_DEPTH";
$proto71["m_columns"][] = "DA_APPRAISER";
$proto71["m_columns"][] = "DA_FRAPA";
$proto71["m_columns"][] = "DA_RATE";
$proto71["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto71["m_columns"][] = "DA_YOURNAME";
$proto71["m_columns"][] = "DA_RAPAB";
$proto71["m_columns"][] = "DA_GROSSPROFIT";
$proto71["m_columns"][] = "DA_INTEREST_1";
$proto71["m_columns"][] = "DA_no";
$proto71["m_columns"][] = "kinsa_flag";
$proto71["m_columns"][] = "price_for_site_flag";
$proto71["m_columns"][] = "Eoc_takuhai_id";
$proto71["m_columns"][] = "Eoc_unfinished_id";
$proto71["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto71["m_columns"][] = "chohyo_id";
$proto71["m_columns"][] = "location";
$proto71["m_columns"][] = "special_instructions_1";
$proto71["m_columns"][] = "special_instructions_2";
$proto71["m_columns"][] = "special_instructions_3";
$proto71["m_columns"][] = "chohyo_seihin_flag";
$proto71["m_columns"][] = "chohyo_dia_flag";
$proto71["m_columns"][] = "chohyo_type";
$proto71["m_columns"][] = "ichiyen_flag";
$proto71["m_columns"][] = "asuraku_fuka_flag";
$proto71["m_columns"][] = "parallel_import_flag";
$proto71["m_columns"][] = "meisai_number";
$proto71["m_columns"][] = "days_keep_price";
$proto71["m_columns"][] = "initial_included";
$proto71["m_columns"][] = "novelty";
$proto71["m_columns"][] = "tentou_label_output_flag";
$proto71["m_columns"][] = "itaku_flag";
$proto71["m_columns"][] = "including_catch";
$proto71["m_columns"][] = "ichiba_meeting_month";
$proto71["m_columns"][] = "ichiba_meeting_name";
$proto71["m_columns"][] = "ichiba_color";
$proto71["m_columns"][] = "ichiba_clarity";
$proto71["m_columns"][] = "ichiba_melee_gai";
$proto71["m_columns"][] = "ichiba_lot_pieces";
$proto71["m_columns"][] = "ichiba_image";
$proto71["m_columns"][] = "ichiba_img";
$proto71["m_columns"][] = "gold_check_id";
$proto71["m_columns"][] = "ichiba_exhibition_id";
$proto71["m_columns"][] = "ichiba_exhibition_sort";
$proto71["m_columns"][] = "cost";
$proto71["m_columns"][] = "auto_price_cut_prohibited";
$proto71["m_columns"][] = "event_price";
$proto71["m_columns"][] = "identification_cost";
$proto71["m_columns"][] = "other_cost";
$proto71["m_columns"][] = "stock_quantity";
$proto71["m_columns"][] = "Eoc_trader_id_for_buy";
$proto71["m_columns"][] = "Eoc_trader_id_for_sell";
$proto71["m_columns"][] = "multiplication_rate";
$proto71["m_columns"][] = "many_product_group_id";
$proto71["m_columns"][] = "trading_sort_id";
$proto71["m_columns"][] = "many_product_group_saiban";
$proto71["m_columns"][] = "purchase_category";
$proto71["m_columns"][] = "created_at";
$proto71["m_columns"][] = "created_by";
$proto71["m_columns"][] = "manual_input_price_per_gram";
$proto71["m_columns"][] = "satei_start";
$proto71["m_columns"][] = "self_DA_INTENSITY";
$proto71["m_columns"][] = "self_DA_OVERTONE";
$proto71["m_columns"][] = "self_DA_COLOR";
$proto71["m_columns"][] = "self_DA_CLARITY";
$proto71["m_columns"][] = "self_DA_CUT";
$proto71["m_columns"][] = "self_DA_POLISH";
$proto71["m_columns"][] = "self_DA_SYMMETRY";
$proto71["m_columns"][] = "self_DA_FLUO";
$proto71["m_columns"][] = "self_DA_COLOR_FLUO";
$proto71["m_columns"][] = "self_DA_FRAPA";
$proto71["m_columns"][] = "self_DA_RATE";
$proto71["m_columns"][] = "self_multiplication_rate";
$proto71["m_columns"][] = "is_seiyaku";
$proto71["m_columns"][] = "destination_sold_out";
$proto71["m_columns"][] = "mypage_update_prohibited";
$proto71["m_columns"][] = "gold_check_scan_id";
$proto71["m_columns"][] = "buy_campaign_data_id";
$proto71["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto71["m_columns"][] = "commission";
$proto71["m_columns"][] = "addtime_gold_check_id";
$proto71["m_columns"][] = "is_recovery";
$proto71["m_columns"][] = "sales_cost";
$proto71["m_columns"][] = "mst_business_partner_id";
$proto71["m_columns"][] = "DA_GROSSPROFIT_2";
$proto71["m_columns"][] = "DA_INTEREST_2";
$proto71["m_columns"][] = "minus_weight";
$proto71["m_columns"][] = "diameter_size";
$proto71["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto71);

$proto70["m_table"] = $obj;
$proto70["m_sql"] = "`shouhin`";
$proto70["m_alias"] = "";
$proto70["m_srcTableName"] = "chohyo_by_seihin_result";
$proto72=array();
$proto72["m_sql"] = "";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

$proto70["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto70);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto74=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_seihin_result"
));

$proto74["m_column"]=$obj;
$proto74["m_bAsc"] = 0;
$proto74["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto74);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="chohyo_by_seihin_result";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chohyo_by_seihin_result = createSqlQuery_chohyo_by_seihin_result();


	
		;

																														

$tdatachohyo_by_seihin_result[".sqlquery"] = $queryData_chohyo_by_seihin_result;

include_once(getabspath("include/chohyo_by_seihin_result_events.php"));
$tableEvents["chohyo_by_seihin_result"] = new eventclass_chohyo_by_seihin_result;
$tdatachohyo_by_seihin_result[".hasEvents"] = true;

?>