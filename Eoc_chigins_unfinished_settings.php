<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_chigins_unfinished = array();
	$tdataEoc_chigins_unfinished[".truncateText"] = true;
	$tdataEoc_chigins_unfinished[".NumberOfChars"] = 80;
	$tdataEoc_chigins_unfinished[".ShortName"] = "Eoc_chigins_unfinished";
	$tdataEoc_chigins_unfinished[".OwnerID"] = "";
	$tdataEoc_chigins_unfinished[".OriginalTable"] = "Eoc_chigins_unfinished";

//	field labels
$fieldLabelsEoc_chigins_unfinished = array();
$fieldToolTipsEoc_chigins_unfinished = array();
$pageTitlesEoc_chigins_unfinished = array();
$placeHoldersEoc_chigins_unfinished = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_chigins_unfinished["Japanese"] = array();
	$fieldToolTipsEoc_chigins_unfinished["Japanese"] = array();
	$placeHoldersEoc_chigins_unfinished["Japanese"] = array();
	$pageTitlesEoc_chigins_unfinished["Japanese"] = array();
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["id"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["id"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["Eoc_unfinished_id"] = "店頭取引Id";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["Eoc_unfinished_id"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["Eoc_unfinished_id"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["row"] = "Row";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["row"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["row"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["category"] = "cate";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["category"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["category"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["MATERIAL"] = "金性";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["MATERIAL"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["MATERIAL"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["jewelry"] = "宝石";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["jewelry"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["jewelry"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["details"] = "品名・詳細";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["details"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["details"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["weight"] = "重量等";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["weight"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["weight"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["gram"] = "単位";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["gram"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["gram"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["unit_price"] = "単価";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["unit_price"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["unit_price"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["main_stone"] = "主石";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["main_stone"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["main_stone"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["main_stone_unit_price"] = "主石単価";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["main_stone_unit_price"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["main_stone_unit_price"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["aside_stone"] = "脇石";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["aside_stone"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["aside_stone"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["aside_stone_unit_price"] = "脇石単価";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["aside_stone_unit_price"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["aside_stone_unit_price"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["bikou"] = "備考";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["bikou"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["bikou"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["price"] = "金額";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["price"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["price"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["item"] = "形状";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["item"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["item"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["satei_by"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["satei_by"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["brand"] = "ブランド";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["brand"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["brand"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["product_id"] = "商品SEQ";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["product_id"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["product_id"] = "";
	$fieldLabelsEoc_chigins_unfinished["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipsEoc_chigins_unfinished["Japanese"]["sales_price"] = "";
	$placeHoldersEoc_chigins_unfinished["Japanese"]["sales_price"] = "";
	if (count($fieldToolTipsEoc_chigins_unfinished["Japanese"]))
		$tdataEoc_chigins_unfinished[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_chigins_unfinished[""] = array();
	$fieldToolTipsEoc_chigins_unfinished[""] = array();
	$placeHoldersEoc_chigins_unfinished[""] = array();
	$pageTitlesEoc_chigins_unfinished[""] = array();
	$fieldLabelsEoc_chigins_unfinished[""]["id"] = "Id";
	$fieldToolTipsEoc_chigins_unfinished[""]["id"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["id"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipsEoc_chigins_unfinished[""]["Eoc_unfinished_id"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["Eoc_unfinished_id"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["row"] = "Row";
	$fieldToolTipsEoc_chigins_unfinished[""]["row"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["row"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["category"] = "Category";
	$fieldToolTipsEoc_chigins_unfinished[""]["category"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["category"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["MATERIAL"] = "MATERIAL";
	$fieldToolTipsEoc_chigins_unfinished[""]["MATERIAL"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["MATERIAL"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["jewelry"] = "Jewelry";
	$fieldToolTipsEoc_chigins_unfinished[""]["jewelry"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["jewelry"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["details"] = "Details";
	$fieldToolTipsEoc_chigins_unfinished[""]["details"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["details"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["weight"] = "Weight";
	$fieldToolTipsEoc_chigins_unfinished[""]["weight"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["weight"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["gram"] = "Gram";
	$fieldToolTipsEoc_chigins_unfinished[""]["gram"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["gram"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["unit_price"] = "Unit Price";
	$fieldToolTipsEoc_chigins_unfinished[""]["unit_price"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["unit_price"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["main_stone"] = "Main Stone";
	$fieldToolTipsEoc_chigins_unfinished[""]["main_stone"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["main_stone"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["main_stone_unit_price"] = "Main Stone Unit Price";
	$fieldToolTipsEoc_chigins_unfinished[""]["main_stone_unit_price"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["main_stone_unit_price"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["aside_stone"] = "Aside Stone";
	$fieldToolTipsEoc_chigins_unfinished[""]["aside_stone"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["aside_stone"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["aside_stone_unit_price"] = "Aside Stone Unit Price";
	$fieldToolTipsEoc_chigins_unfinished[""]["aside_stone_unit_price"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["aside_stone_unit_price"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["bikou"] = "Bikou";
	$fieldToolTipsEoc_chigins_unfinished[""]["bikou"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["bikou"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["price"] = "Price";
	$fieldToolTipsEoc_chigins_unfinished[""]["price"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["price"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_chigins_unfinished[""]["updated_at"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["updated_at"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["item"] = "Item";
	$fieldToolTipsEoc_chigins_unfinished[""]["item"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["item"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["satei_by"] = "Satei By";
	$fieldToolTipsEoc_chigins_unfinished[""]["satei_by"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["satei_by"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["brand"] = "Brand";
	$fieldToolTipsEoc_chigins_unfinished[""]["brand"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["brand"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["product_id"] = "Product Id";
	$fieldToolTipsEoc_chigins_unfinished[""]["product_id"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["product_id"] = "";
	$fieldLabelsEoc_chigins_unfinished[""]["sales_price"] = "Sales Price";
	$fieldToolTipsEoc_chigins_unfinished[""]["sales_price"] = "";
	$placeHoldersEoc_chigins_unfinished[""]["sales_price"] = "";
	if (count($fieldToolTipsEoc_chigins_unfinished[""]))
		$tdataEoc_chigins_unfinished[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_chigins_unfinished["English"] = array();
	$fieldToolTipsEoc_chigins_unfinished["English"] = array();
	$placeHoldersEoc_chigins_unfinished["English"] = array();
	$pageTitlesEoc_chigins_unfinished["English"] = array();
	$fieldLabelsEoc_chigins_unfinished["English"]["id"] = "Id";
	$fieldToolTipsEoc_chigins_unfinished["English"]["id"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["id"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipsEoc_chigins_unfinished["English"]["Eoc_unfinished_id"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["Eoc_unfinished_id"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["row"] = "Row";
	$fieldToolTipsEoc_chigins_unfinished["English"]["row"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["row"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["category"] = "Category";
	$fieldToolTipsEoc_chigins_unfinished["English"]["category"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["category"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["MATERIAL"] = "MATERIAL";
	$fieldToolTipsEoc_chigins_unfinished["English"]["MATERIAL"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["MATERIAL"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["jewelry"] = "Jewelry";
	$fieldToolTipsEoc_chigins_unfinished["English"]["jewelry"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["jewelry"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["details"] = "Details";
	$fieldToolTipsEoc_chigins_unfinished["English"]["details"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["details"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["weight"] = "Weight";
	$fieldToolTipsEoc_chigins_unfinished["English"]["weight"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["weight"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["gram"] = "Gram";
	$fieldToolTipsEoc_chigins_unfinished["English"]["gram"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["gram"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["unit_price"] = "Unit Price";
	$fieldToolTipsEoc_chigins_unfinished["English"]["unit_price"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["unit_price"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["main_stone"] = "Main Stone";
	$fieldToolTipsEoc_chigins_unfinished["English"]["main_stone"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["main_stone"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["main_stone_unit_price"] = "Main Stone Unit Price";
	$fieldToolTipsEoc_chigins_unfinished["English"]["main_stone_unit_price"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["main_stone_unit_price"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["aside_stone"] = "Aside Stone";
	$fieldToolTipsEoc_chigins_unfinished["English"]["aside_stone"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["aside_stone"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["aside_stone_unit_price"] = "Aside Stone Unit Price";
	$fieldToolTipsEoc_chigins_unfinished["English"]["aside_stone_unit_price"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["aside_stone_unit_price"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["bikou"] = "Bikou";
	$fieldToolTipsEoc_chigins_unfinished["English"]["bikou"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["bikou"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["price"] = "Price";
	$fieldToolTipsEoc_chigins_unfinished["English"]["price"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["price"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_chigins_unfinished["English"]["updated_at"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["updated_at"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["item"] = "Item";
	$fieldToolTipsEoc_chigins_unfinished["English"]["item"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["item"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["satei_by"] = "Satei By";
	$fieldToolTipsEoc_chigins_unfinished["English"]["satei_by"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["satei_by"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["brand"] = "Brand";
	$fieldToolTipsEoc_chigins_unfinished["English"]["brand"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["brand"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["product_id"] = "Product Id";
	$fieldToolTipsEoc_chigins_unfinished["English"]["product_id"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["product_id"] = "";
	$fieldLabelsEoc_chigins_unfinished["English"]["sales_price"] = "Sales Price";
	$fieldToolTipsEoc_chigins_unfinished["English"]["sales_price"] = "";
	$placeHoldersEoc_chigins_unfinished["English"]["sales_price"] = "";
	if (count($fieldToolTipsEoc_chigins_unfinished["English"]))
		$tdataEoc_chigins_unfinished[".isUseToolTips"] = true;
}


	$tdataEoc_chigins_unfinished[".NCSearch"] = true;



$tdataEoc_chigins_unfinished[".shortTableName"] = "Eoc_chigins_unfinished";
$tdataEoc_chigins_unfinished[".nSecOptions"] = 0;
$tdataEoc_chigins_unfinished[".recsPerRowPrint"] = 1;
$tdataEoc_chigins_unfinished[".mainTableOwnerID"] = "";
$tdataEoc_chigins_unfinished[".moveNext"] = 1;
$tdataEoc_chigins_unfinished[".entityType"] = 0;

$tdataEoc_chigins_unfinished[".strOriginalTableName"] = "Eoc_chigins_unfinished";

	



$tdataEoc_chigins_unfinished[".showAddInPopup"] = false;

$tdataEoc_chigins_unfinished[".showEditInPopup"] = false;

$tdataEoc_chigins_unfinished[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_chigins_unfinished[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_chigins_unfinished[".fieldsForRegister"] = array();

$tdataEoc_chigins_unfinished[".listAjax"] = false;

	$tdataEoc_chigins_unfinished[".audit"] = false;

	$tdataEoc_chigins_unfinished[".locking"] = false;



$tdataEoc_chigins_unfinished[".list"] = true;



$tdataEoc_chigins_unfinished[".reorderRecordsByHeader"] = true;





$tdataEoc_chigins_unfinished[".exportTo"] = true;


$tdataEoc_chigins_unfinished[".delete"] = true;

$tdataEoc_chigins_unfinished[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_chigins_unfinished[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_chigins_unfinished[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_chigins_unfinished[".searchSaving"] = false;
//

$tdataEoc_chigins_unfinished[".showSearchPanel"] = true;
		$tdataEoc_chigins_unfinished[".flexibleSearch"] = true;

$tdataEoc_chigins_unfinished[".isUseAjaxSuggest"] = true;

$tdataEoc_chigins_unfinished[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdataEoc_chigins_unfinished[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_chigins_unfinished[".buttonsAdded"] = false;

$tdataEoc_chigins_unfinished[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_chigins_unfinished[".isUseTimeForSearch"] = false;



$tdataEoc_chigins_unfinished[".badgeColor"] = "008b8b";


$tdataEoc_chigins_unfinished[".allSearchFields"] = array();
$tdataEoc_chigins_unfinished[".filterFields"] = array();
$tdataEoc_chigins_unfinished[".requiredSearchFields"] = array();

$tdataEoc_chigins_unfinished[".allSearchFields"][] = "satei_by";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "id";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "Eoc_unfinished_id";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "row";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "category";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "MATERIAL";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "jewelry";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "brand";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "details";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "item";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "weight";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "gram";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "unit_price";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "main_stone";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "main_stone_unit_price";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "aside_stone";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "aside_stone_unit_price";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "bikou";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "price";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "sales_price";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "updated_at";
	$tdataEoc_chigins_unfinished[".allSearchFields"][] = "product_id";
	

$tdataEoc_chigins_unfinished[".googleLikeFields"] = array();
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "id";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "row";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "category";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "MATERIAL";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "jewelry";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "details";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "item";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "weight";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "gram";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "unit_price";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "main_stone";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "main_stone_unit_price";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "aside_stone";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "aside_stone_unit_price";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "bikou";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "price";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "updated_at";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "satei_by";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "brand";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "product_id";
$tdataEoc_chigins_unfinished[".googleLikeFields"][] = "sales_price";


$tdataEoc_chigins_unfinished[".advSearchFields"] = array();
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "satei_by";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "id";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "row";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "category";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "MATERIAL";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "jewelry";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "brand";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "details";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "item";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "weight";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "gram";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "unit_price";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "main_stone";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "main_stone_unit_price";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "aside_stone";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "aside_stone_unit_price";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "bikou";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "price";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "sales_price";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "updated_at";
$tdataEoc_chigins_unfinished[".advSearchFields"][] = "product_id";

$tdataEoc_chigins_unfinished[".tableType"] = "list";

$tdataEoc_chigins_unfinished[".printerPageOrientation"] = 0;
$tdataEoc_chigins_unfinished[".nPrinterPageScale"] = 100;

$tdataEoc_chigins_unfinished[".nPrinterSplitRecords"] = 40;

$tdataEoc_chigins_unfinished[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_chigins_unfinished[".geocodingEnabled"] = false;





$tdataEoc_chigins_unfinished[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdataEoc_chigins_unfinished[".totalsFields"] = array();
$tdataEoc_chigins_unfinished[".totalsFields"][] = array(
	"fName" => "price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Currency');

$tdataEoc_chigins_unfinished[".pageSize"] = 20;

$tdataEoc_chigins_unfinished[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_chigins_unfinished[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_chigins_unfinished[".orderindexes"] = array();
$tdataEoc_chigins_unfinished[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdataEoc_chigins_unfinished[".sqlHead"] = "SELECT `id`,  `Eoc_unfinished_id`,  `row`,  `category`,  `MATERIAL`,  `jewelry`,  `details`,  `item`,  `weight`,  `gram`,  `unit_price`,  `main_stone`,  `main_stone_unit_price`,  `aside_stone`,  `aside_stone_unit_price`,  `bikou`,  `price`,  `updated_at`,  `satei_by`,  `brand`,  `product_id`,  `sales_price`";
$tdataEoc_chigins_unfinished[".sqlFrom"] = "FROM `Eoc_chigins_unfinished`";
$tdataEoc_chigins_unfinished[".sqlWhereExpr"] = "";
$tdataEoc_chigins_unfinished[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_chigins_unfinished[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_chigins_unfinished[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_chigins_unfinished[".highlightSearchResults"] = true;

$tableKeysEoc_chigins_unfinished = array();
$tableKeysEoc_chigins_unfinished[] = "id";
$tdataEoc_chigins_unfinished[".Keys"] = $tableKeysEoc_chigins_unfinished;

$tdataEoc_chigins_unfinished[".listFields"] = array();
$tdataEoc_chigins_unfinished[".listFields"][] = "satei_by";
$tdataEoc_chigins_unfinished[".listFields"][] = "id";
$tdataEoc_chigins_unfinished[".listFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins_unfinished[".listFields"][] = "row";
$tdataEoc_chigins_unfinished[".listFields"][] = "category";
$tdataEoc_chigins_unfinished[".listFields"][] = "MATERIAL";
$tdataEoc_chigins_unfinished[".listFields"][] = "jewelry";
$tdataEoc_chigins_unfinished[".listFields"][] = "brand";
$tdataEoc_chigins_unfinished[".listFields"][] = "details";
$tdataEoc_chigins_unfinished[".listFields"][] = "item";
$tdataEoc_chigins_unfinished[".listFields"][] = "weight";
$tdataEoc_chigins_unfinished[".listFields"][] = "gram";
$tdataEoc_chigins_unfinished[".listFields"][] = "unit_price";
$tdataEoc_chigins_unfinished[".listFields"][] = "main_stone";
$tdataEoc_chigins_unfinished[".listFields"][] = "main_stone_unit_price";
$tdataEoc_chigins_unfinished[".listFields"][] = "aside_stone";
$tdataEoc_chigins_unfinished[".listFields"][] = "aside_stone_unit_price";
$tdataEoc_chigins_unfinished[".listFields"][] = "bikou";
$tdataEoc_chigins_unfinished[".listFields"][] = "price";
$tdataEoc_chigins_unfinished[".listFields"][] = "sales_price";
$tdataEoc_chigins_unfinished[".listFields"][] = "updated_at";
$tdataEoc_chigins_unfinished[".listFields"][] = "product_id";

$tdataEoc_chigins_unfinished[".hideMobileList"] = array();


$tdataEoc_chigins_unfinished[".viewFields"] = array();

$tdataEoc_chigins_unfinished[".addFields"] = array();

$tdataEoc_chigins_unfinished[".masterListFields"] = array();
$tdataEoc_chigins_unfinished[".masterListFields"][] = "satei_by";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "id";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "row";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "category";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "MATERIAL";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "jewelry";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "brand";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "details";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "item";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "weight";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "gram";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "unit_price";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "main_stone";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "main_stone_unit_price";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "aside_stone";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "aside_stone_unit_price";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "bikou";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "price";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "sales_price";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "updated_at";
$tdataEoc_chigins_unfinished[".masterListFields"][] = "product_id";

$tdataEoc_chigins_unfinished[".inlineAddFields"] = array();

$tdataEoc_chigins_unfinished[".editFields"] = array();

$tdataEoc_chigins_unfinished[".inlineEditFields"] = array();

$tdataEoc_chigins_unfinished[".updateSelectedFields"] = array();


$tdataEoc_chigins_unfinished[".exportFields"] = array();
$tdataEoc_chigins_unfinished[".exportFields"][] = "satei_by";
$tdataEoc_chigins_unfinished[".exportFields"][] = "id";
$tdataEoc_chigins_unfinished[".exportFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins_unfinished[".exportFields"][] = "row";
$tdataEoc_chigins_unfinished[".exportFields"][] = "category";
$tdataEoc_chigins_unfinished[".exportFields"][] = "MATERIAL";
$tdataEoc_chigins_unfinished[".exportFields"][] = "jewelry";
$tdataEoc_chigins_unfinished[".exportFields"][] = "brand";
$tdataEoc_chigins_unfinished[".exportFields"][] = "details";
$tdataEoc_chigins_unfinished[".exportFields"][] = "item";
$tdataEoc_chigins_unfinished[".exportFields"][] = "weight";
$tdataEoc_chigins_unfinished[".exportFields"][] = "gram";
$tdataEoc_chigins_unfinished[".exportFields"][] = "unit_price";
$tdataEoc_chigins_unfinished[".exportFields"][] = "main_stone";
$tdataEoc_chigins_unfinished[".exportFields"][] = "main_stone_unit_price";
$tdataEoc_chigins_unfinished[".exportFields"][] = "aside_stone";
$tdataEoc_chigins_unfinished[".exportFields"][] = "aside_stone_unit_price";
$tdataEoc_chigins_unfinished[".exportFields"][] = "bikou";
$tdataEoc_chigins_unfinished[".exportFields"][] = "price";
$tdataEoc_chigins_unfinished[".exportFields"][] = "sales_price";
$tdataEoc_chigins_unfinished[".exportFields"][] = "updated_at";
$tdataEoc_chigins_unfinished[".exportFields"][] = "product_id";

$tdataEoc_chigins_unfinished[".importFields"] = array();

$tdataEoc_chigins_unfinished[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","id");
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




	$tdataEoc_chigins_unfinished["id"] = $fdata;
//	Eoc_unfinished_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Eoc_unfinished_id";
	$fdata["GoodName"] = "Eoc_unfinished_id";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","Eoc_unfinished_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_unfinished_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_unfinished_id`";

	
	
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




	$tdataEoc_chigins_unfinished["Eoc_unfinished_id"] = $fdata;
//	row
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "row";
	$fdata["GoodName"] = "row";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","row");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "row";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`row`";

	
	
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




	$tdataEoc_chigins_unfinished["row"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category`";

	
	
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




	$tdataEoc_chigins_unfinished["category"] = $fdata;
//	MATERIAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MATERIAL";
	$fdata["GoodName"] = "MATERIAL";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","MATERIAL");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MATERIAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`MATERIAL`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdataEoc_chigins_unfinished["MATERIAL"] = $fdata;
//	jewelry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "jewelry";
	$fdata["GoodName"] = "jewelry";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","jewelry");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jewelry";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`jewelry`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdataEoc_chigins_unfinished["jewelry"] = $fdata;
//	details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "details";
	$fdata["GoodName"] = "details";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","details");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "details";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`details`";

	
	
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




	$tdataEoc_chigins_unfinished["details"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","item");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "item";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`item`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdataEoc_chigins_unfinished["item"] = $fdata;
//	weight
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "weight";
	$fdata["GoodName"] = "weight";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","weight");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "weight";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`weight`";

	
	
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




	$tdataEoc_chigins_unfinished["weight"] = $fdata;
//	gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "gram";
	$fdata["GoodName"] = "gram";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","gram");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gram`";

	
	
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




	$tdataEoc_chigins_unfinished["gram"] = $fdata;
//	unit_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "unit_price";
	$fdata["GoodName"] = "unit_price";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","unit_price");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "unit_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`unit_price`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdataEoc_chigins_unfinished["unit_price"] = $fdata;
//	main_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "main_stone";
	$fdata["GoodName"] = "main_stone";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","main_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "main_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`main_stone`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdataEoc_chigins_unfinished["main_stone"] = $fdata;
//	main_stone_unit_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "main_stone_unit_price";
	$fdata["GoodName"] = "main_stone_unit_price";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","main_stone_unit_price");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "main_stone_unit_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`main_stone_unit_price`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdataEoc_chigins_unfinished["main_stone_unit_price"] = $fdata;
//	aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "aside_stone";
	$fdata["GoodName"] = "aside_stone";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","aside_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "aside_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`aside_stone`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdataEoc_chigins_unfinished["aside_stone"] = $fdata;
//	aside_stone_unit_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "aside_stone_unit_price";
	$fdata["GoodName"] = "aside_stone_unit_price";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","aside_stone_unit_price");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "aside_stone_unit_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`aside_stone_unit_price`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdataEoc_chigins_unfinished["aside_stone_unit_price"] = $fdata;
//	bikou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "bikou";
	$fdata["GoodName"] = "bikou";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","bikou");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataEoc_chigins_unfinished["bikou"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`price`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdataEoc_chigins_unfinished["price"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","updated_at");
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




	$tdataEoc_chigins_unfinished["updated_at"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","satei_by");
	$fdata["FieldType"] = 3;

	
	
	
			
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




	$tdataEoc_chigins_unfinished["satei_by"] = $fdata;
//	brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "brand";
	$fdata["GoodName"] = "brand";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","brand");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "brand";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brand`";

	
	
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




	$tdataEoc_chigins_unfinished["brand"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
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




	$tdataEoc_chigins_unfinished["product_id"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "Eoc_chigins_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_unfinished","sales_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_price`";

	
	
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




	$tdataEoc_chigins_unfinished["sales_price"] = $fdata;


$tables_data["Eoc_chigins_unfinished"]=&$tdataEoc_chigins_unfinished;
$field_labels["Eoc_chigins_unfinished"] = &$fieldLabelsEoc_chigins_unfinished;
$fieldToolTips["Eoc_chigins_unfinished"] = &$fieldToolTipsEoc_chigins_unfinished;
$placeHolders["Eoc_chigins_unfinished"] = &$placeHoldersEoc_chigins_unfinished;
$page_titles["Eoc_chigins_unfinished"] = &$pageTitlesEoc_chigins_unfinished;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_chigins_unfinished"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_chigins_unfinished"] = array();


	
				$strOriginalDetailsTable="Eoc_unfinished";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_unfinished";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_unfinished";
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
					$masterTablesData["Eoc_chigins_unfinished"][0] = $masterParams;
				$masterTablesData["Eoc_chigins_unfinished"][0]["masterKeys"] = array();
	$masterTablesData["Eoc_chigins_unfinished"][0]["masterKeys"][]="id";
				$masterTablesData["Eoc_chigins_unfinished"][0]["detailKeys"] = array();
	$masterTablesData["Eoc_chigins_unfinished"][0]["detailKeys"][]="Eoc_unfinished_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_chigins_unfinished()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `Eoc_unfinished_id`,  `row`,  `category`,  `MATERIAL`,  `jewelry`,  `details`,  `item`,  `weight`,  `gram`,  `unit_price`,  `main_stone`,  `main_stone_unit_price`,  `aside_stone`,  `aside_stone_unit_price`,  `bikou`,  `price`,  `updated_at`,  `satei_by`,  `brand`,  `product_id`,  `sales_price`";
$proto0["m_strFrom"] = "FROM `Eoc_chigins_unfinished`";
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
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_unfinished_id",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto8["m_sql"] = "`Eoc_unfinished_id`";
$proto8["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "row",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto10["m_sql"] = "`row`";
$proto10["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto12["m_sql"] = "`category`";
$proto12["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MATERIAL",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto14["m_sql"] = "`MATERIAL`";
$proto14["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "jewelry",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto16["m_sql"] = "`jewelry`";
$proto16["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "details",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto18["m_sql"] = "`details`";
$proto18["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto20["m_sql"] = "`item`";
$proto20["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "weight",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto22["m_sql"] = "`weight`";
$proto22["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "gram",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto24["m_sql"] = "`gram`";
$proto24["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_price",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto26["m_sql"] = "`unit_price`";
$proto26["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "main_stone",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto28["m_sql"] = "`main_stone`";
$proto28["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "main_stone_unit_price",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto30["m_sql"] = "`main_stone_unit_price`";
$proto30["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "aside_stone",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto32["m_sql"] = "`aside_stone`";
$proto32["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "aside_stone_unit_price",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto34["m_sql"] = "`aside_stone_unit_price`";
$proto34["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "bikou",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto36["m_sql"] = "`bikou`";
$proto36["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto38["m_sql"] = "`price`";
$proto38["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto40["m_sql"] = "`updated_at`";
$proto40["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto42["m_sql"] = "`satei_by`";
$proto42["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "brand",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto44["m_sql"] = "`brand`";
$proto44["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto46["m_sql"] = "`product_id`";
$proto46["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto48["m_sql"] = "`sales_price`";
$proto48["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "Eoc_chigins_unfinished";
$proto51["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "id";
$proto51["m_columns"][] = "Eoc_unfinished_id";
$proto51["m_columns"][] = "row";
$proto51["m_columns"][] = "category";
$proto51["m_columns"][] = "MATERIAL";
$proto51["m_columns"][] = "jewelry";
$proto51["m_columns"][] = "details";
$proto51["m_columns"][] = "item";
$proto51["m_columns"][] = "sub_item";
$proto51["m_columns"][] = "weight";
$proto51["m_columns"][] = "gram";
$proto51["m_columns"][] = "unit_price";
$proto51["m_columns"][] = "main_stone";
$proto51["m_columns"][] = "main_stone_unit_price";
$proto51["m_columns"][] = "aside_stone";
$proto51["m_columns"][] = "aside_stone_unit_price";
$proto51["m_columns"][] = "bikou";
$proto51["m_columns"][] = "price";
$proto51["m_columns"][] = "updated_at";
$proto51["m_columns"][] = "satei_by";
$proto51["m_columns"][] = "brand";
$proto51["m_columns"][] = "product_id";
$proto51["m_columns"][] = "sales_price";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "`Eoc_chigins_unfinished`";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "Eoc_chigins_unfinished";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_chigins_unfinished",
	"m_srcTableName" => "Eoc_chigins_unfinished"
));

$proto54["m_column"]=$obj;
$proto54["m_bAsc"] = 0;
$proto54["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto54);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_chigins_unfinished";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_chigins_unfinished = createSqlQuery_Eoc_chigins_unfinished();


	
		;

																						

$tdataEoc_chigins_unfinished[".sqlquery"] = $queryData_Eoc_chigins_unfinished;

$tableEvents["Eoc_chigins_unfinished"] = new eventsBase;
$tdataEoc_chigins_unfinished[".hasEvents"] = false;

?>