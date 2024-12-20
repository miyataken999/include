<?php
require_once(getabspath("classes/cipherer.php"));




$tdatachohyo_by_dia = array();
	$tdatachohyo_by_dia[".truncateText"] = true;
	$tdatachohyo_by_dia[".NumberOfChars"] = 80;
	$tdatachohyo_by_dia[".ShortName"] = "chohyo_by_dia";
	$tdatachohyo_by_dia[".OwnerID"] = "";
	$tdatachohyo_by_dia[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelschohyo_by_dia = array();
$fieldToolTipschohyo_by_dia = array();
$pageTitleschohyo_by_dia = array();
$placeHolderschohyo_by_dia = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelschohyo_by_dia["Japanese"] = array();
	$fieldToolTipschohyo_by_dia["Japanese"] = array();
	$placeHolderschohyo_by_dia["Japanese"] = array();
	$pageTitleschohyo_by_dia["Japanese"] = array();
	$fieldLabelschohyo_by_dia["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipschohyo_by_dia["Japanese"]["product_id"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["product_id"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipschohyo_by_dia["Japanese"]["category_id"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["category_id"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipschohyo_by_dia["Japanese"]["sub_category_id1"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["sub_category_id1"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["description"] = "メモ";
	$fieldToolTipschohyo_by_dia["Japanese"]["description"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["description"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["status"] = "商品状態";
	$fieldToolTipschohyo_by_dia["Japanese"]["status"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["status"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["Parent_stone"] = "親石";
	$fieldToolTipschohyo_by_dia["Japanese"]["Parent_stone"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["Parent_stone"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["No"] = "No";
	$fieldToolTipschohyo_by_dia["Japanese"]["No"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["No"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["onsya"] = "御社";
	$fieldToolTipschohyo_by_dia["Japanese"]["onsya"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["onsya"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["chohyo_id"] = "帳票Id";
	$fieldToolTipschohyo_by_dia["Japanese"]["chohyo_id"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["chohyo_id"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["Discrimination"] = "鑑別";
	$fieldToolTipschohyo_by_dia["Japanese"]["Discrimination"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["Discrimination"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipschohyo_by_dia["Japanese"]["ecc_id"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["ecc_id"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipschohyo_by_dia["Japanese"]["yahoo_sinaban"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["price"] = "買取額";
	$fieldToolTipschohyo_by_dia["Japanese"]["price"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["price"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipschohyo_by_dia["Japanese"]["satei_by"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["satei_by"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipschohyo_by_dia["Japanese"]["satei_hi"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["satei_hi"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["REG_AUTHOR"] = "成約人";
	$fieldToolTipschohyo_by_dia["Japanese"]["REG_AUTHOR"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["REG_AUTHOR"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["DT_UP_DATE"] = "成約日";
	$fieldToolTipschohyo_by_dia["Japanese"]["DT_UP_DATE"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["kaitori_by"] = "登録人";
	$fieldToolTipschohyo_by_dia["Japanese"]["kaitori_by"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["kaitori_by"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["kaitory_hi"] = "登録日";
	$fieldToolTipschohyo_by_dia["Japanese"]["kaitory_hi"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["kaitory_hi"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["updated_by"] = "最終更新者";
	$fieldToolTipschohyo_by_dia["Japanese"]["updated_by"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["updated_by"] = "";
	$fieldLabelschohyo_by_dia["Japanese"]["updated_at"] = "最終更新日";
	$fieldToolTipschohyo_by_dia["Japanese"]["updated_at"] = "";
	$placeHolderschohyo_by_dia["Japanese"]["updated_at"] = "";
	if (count($fieldToolTipschohyo_by_dia["Japanese"]))
		$tdatachohyo_by_dia[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelschohyo_by_dia[""] = array();
	$fieldToolTipschohyo_by_dia[""] = array();
	$placeHolderschohyo_by_dia[""] = array();
	$pageTitleschohyo_by_dia[""] = array();
	$fieldLabelschohyo_by_dia[""]["No"] = "No";
	$fieldToolTipschohyo_by_dia[""]["No"] = "";
	$placeHolderschohyo_by_dia[""]["No"] = "";
	$fieldLabelschohyo_by_dia[""]["onsya"] = "Onsya";
	$fieldToolTipschohyo_by_dia[""]["onsya"] = "";
	$placeHolderschohyo_by_dia[""]["onsya"] = "";
	$fieldLabelschohyo_by_dia[""]["chohyo_id"] = "Chohyo Id";
	$fieldToolTipschohyo_by_dia[""]["chohyo_id"] = "";
	$placeHolderschohyo_by_dia[""]["chohyo_id"] = "";
	$fieldLabelschohyo_by_dia[""]["Discrimination"] = "Discrimination";
	$fieldToolTipschohyo_by_dia[""]["Discrimination"] = "";
	$placeHolderschohyo_by_dia[""]["Discrimination"] = "";
	$fieldLabelschohyo_by_dia[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipschohyo_by_dia[""]["ecc_id"] = "";
	$placeHolderschohyo_by_dia[""]["ecc_id"] = "";
	$fieldLabelschohyo_by_dia[""]["yahoo_sinaban"] = "Yahoo Sinaban";
	$fieldToolTipschohyo_by_dia[""]["yahoo_sinaban"] = "";
	$placeHolderschohyo_by_dia[""]["yahoo_sinaban"] = "";
	$fieldLabelschohyo_by_dia[""]["price"] = "Price";
	$fieldToolTipschohyo_by_dia[""]["price"] = "";
	$placeHolderschohyo_by_dia[""]["price"] = "";
	$fieldLabelschohyo_by_dia[""]["satei_by"] = "Satei By";
	$fieldToolTipschohyo_by_dia[""]["satei_by"] = "";
	$placeHolderschohyo_by_dia[""]["satei_by"] = "";
	$fieldLabelschohyo_by_dia[""]["satei_hi"] = "Satei Hi";
	$fieldToolTipschohyo_by_dia[""]["satei_hi"] = "";
	$placeHolderschohyo_by_dia[""]["satei_hi"] = "";
	$fieldLabelschohyo_by_dia[""]["REG_AUTHOR"] = "REG AUTHOR";
	$fieldToolTipschohyo_by_dia[""]["REG_AUTHOR"] = "";
	$placeHolderschohyo_by_dia[""]["REG_AUTHOR"] = "";
	$fieldLabelschohyo_by_dia[""]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipschohyo_by_dia[""]["DT_UP_DATE"] = "";
	$placeHolderschohyo_by_dia[""]["DT_UP_DATE"] = "";
	$fieldLabelschohyo_by_dia[""]["kaitori_by"] = "Kaitori By";
	$fieldToolTipschohyo_by_dia[""]["kaitori_by"] = "";
	$placeHolderschohyo_by_dia[""]["kaitori_by"] = "";
	$fieldLabelschohyo_by_dia[""]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipschohyo_by_dia[""]["kaitory_hi"] = "";
	$placeHolderschohyo_by_dia[""]["kaitory_hi"] = "";
	$fieldLabelschohyo_by_dia[""]["updated_by"] = "Updated By";
	$fieldToolTipschohyo_by_dia[""]["updated_by"] = "";
	$placeHolderschohyo_by_dia[""]["updated_by"] = "";
	$fieldLabelschohyo_by_dia[""]["updated_at"] = "Updated At";
	$fieldToolTipschohyo_by_dia[""]["updated_at"] = "";
	$placeHolderschohyo_by_dia[""]["updated_at"] = "";
	if (count($fieldToolTipschohyo_by_dia[""]))
		$tdatachohyo_by_dia[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelschohyo_by_dia["English"] = array();
	$fieldToolTipschohyo_by_dia["English"] = array();
	$placeHolderschohyo_by_dia["English"] = array();
	$pageTitleschohyo_by_dia["English"] = array();
	$fieldLabelschohyo_by_dia["English"]["No"] = "No";
	$fieldToolTipschohyo_by_dia["English"]["No"] = "";
	$placeHolderschohyo_by_dia["English"]["No"] = "";
	$fieldLabelschohyo_by_dia["English"]["onsya"] = "Onsya";
	$fieldToolTipschohyo_by_dia["English"]["onsya"] = "";
	$placeHolderschohyo_by_dia["English"]["onsya"] = "";
	$fieldLabelschohyo_by_dia["English"]["chohyo_id"] = "Chohyo Id";
	$fieldToolTipschohyo_by_dia["English"]["chohyo_id"] = "";
	$placeHolderschohyo_by_dia["English"]["chohyo_id"] = "";
	$fieldLabelschohyo_by_dia["English"]["Discrimination"] = "Discrimination";
	$fieldToolTipschohyo_by_dia["English"]["Discrimination"] = "";
	$placeHolderschohyo_by_dia["English"]["Discrimination"] = "";
	$fieldLabelschohyo_by_dia["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipschohyo_by_dia["English"]["ecc_id"] = "";
	$placeHolderschohyo_by_dia["English"]["ecc_id"] = "";
	$fieldLabelschohyo_by_dia["English"]["yahoo_sinaban"] = "Yahoo Sinaban";
	$fieldToolTipschohyo_by_dia["English"]["yahoo_sinaban"] = "";
	$placeHolderschohyo_by_dia["English"]["yahoo_sinaban"] = "";
	$fieldLabelschohyo_by_dia["English"]["price"] = "Price";
	$fieldToolTipschohyo_by_dia["English"]["price"] = "";
	$placeHolderschohyo_by_dia["English"]["price"] = "";
	$fieldLabelschohyo_by_dia["English"]["satei_by"] = "Satei By";
	$fieldToolTipschohyo_by_dia["English"]["satei_by"] = "";
	$placeHolderschohyo_by_dia["English"]["satei_by"] = "";
	$fieldLabelschohyo_by_dia["English"]["satei_hi"] = "Satei Hi";
	$fieldToolTipschohyo_by_dia["English"]["satei_hi"] = "";
	$placeHolderschohyo_by_dia["English"]["satei_hi"] = "";
	$fieldLabelschohyo_by_dia["English"]["REG_AUTHOR"] = "REG AUTHOR";
	$fieldToolTipschohyo_by_dia["English"]["REG_AUTHOR"] = "";
	$placeHolderschohyo_by_dia["English"]["REG_AUTHOR"] = "";
	$fieldLabelschohyo_by_dia["English"]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipschohyo_by_dia["English"]["DT_UP_DATE"] = "";
	$placeHolderschohyo_by_dia["English"]["DT_UP_DATE"] = "";
	$fieldLabelschohyo_by_dia["English"]["kaitori_by"] = "Kaitori By";
	$fieldToolTipschohyo_by_dia["English"]["kaitori_by"] = "";
	$placeHolderschohyo_by_dia["English"]["kaitori_by"] = "";
	$fieldLabelschohyo_by_dia["English"]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipschohyo_by_dia["English"]["kaitory_hi"] = "";
	$placeHolderschohyo_by_dia["English"]["kaitory_hi"] = "";
	$fieldLabelschohyo_by_dia["English"]["updated_by"] = "Updated By";
	$fieldToolTipschohyo_by_dia["English"]["updated_by"] = "";
	$placeHolderschohyo_by_dia["English"]["updated_by"] = "";
	$fieldLabelschohyo_by_dia["English"]["updated_at"] = "Updated At";
	$fieldToolTipschohyo_by_dia["English"]["updated_at"] = "";
	$placeHolderschohyo_by_dia["English"]["updated_at"] = "";
	if (count($fieldToolTipschohyo_by_dia["English"]))
		$tdatachohyo_by_dia[".isUseToolTips"] = true;
}


	$tdatachohyo_by_dia[".NCSearch"] = true;



$tdatachohyo_by_dia[".shortTableName"] = "chohyo_by_dia";
$tdatachohyo_by_dia[".nSecOptions"] = 0;
$tdatachohyo_by_dia[".recsPerRowPrint"] = 1;
$tdatachohyo_by_dia[".mainTableOwnerID"] = "";
$tdatachohyo_by_dia[".moveNext"] = 1;
$tdatachohyo_by_dia[".entityType"] = 1;

$tdatachohyo_by_dia[".strOriginalTableName"] = "shouhin";

	



$tdatachohyo_by_dia[".showAddInPopup"] = false;

$tdatachohyo_by_dia[".showEditInPopup"] = false;

$tdatachohyo_by_dia[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatachohyo_by_dia[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatachohyo_by_dia[".fieldsForRegister"] = array();

$tdatachohyo_by_dia[".listAjax"] = false;

	$tdatachohyo_by_dia[".audit"] = true;

	$tdatachohyo_by_dia[".locking"] = false;



$tdatachohyo_by_dia[".list"] = true;

$tdatachohyo_by_dia[".inlineEdit"] = true;


$tdatachohyo_by_dia[".reorderRecordsByHeader"] = true;
$tdatachohyo_by_dia[".createSortByDropdown"] = true;
$tdatachohyo_by_dia[".strSortControlSettingsJSON"] = "";



$tdatachohyo_by_dia[".inlineAdd"] = true;

$tdatachohyo_by_dia[".import"] = true;

$tdatachohyo_by_dia[".exportTo"] = true;



$tdatachohyo_by_dia[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatachohyo_by_dia[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatachohyo_by_dia[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatachohyo_by_dia[".searchSaving"] = false;
//

$tdatachohyo_by_dia[".showSearchPanel"] = true;
		$tdatachohyo_by_dia[".flexibleSearch"] = true;

$tdatachohyo_by_dia[".isUseAjaxSuggest"] = true;

$tdatachohyo_by_dia[".rowHighlite"] = true;



																																																																																																																									
					
					
																																																																																																							

$tdatachohyo_by_dia[".ajaxCodeSnippetAdded"] = false;

$tdatachohyo_by_dia[".buttonsAdded"] = true;

$tdatachohyo_by_dia[".addPageEvents"] = true;

// use timepicker for search panel
$tdatachohyo_by_dia[".isUseTimeForSearch"] = false;



$tdatachohyo_by_dia[".badgeColor"] = "8FBC8B";


$tdatachohyo_by_dia[".allSearchFields"] = array();
$tdatachohyo_by_dia[".filterFields"] = array();
$tdatachohyo_by_dia[".requiredSearchFields"] = array();

$tdatachohyo_by_dia[".allSearchFields"][] = "status";
	$tdatachohyo_by_dia[".allSearchFields"][] = "product_id";
	$tdatachohyo_by_dia[".allSearchFields"][] = "category_id";
	$tdatachohyo_by_dia[".allSearchFields"][] = "sub_category_id1";
	$tdatachohyo_by_dia[".allSearchFields"][] = "Parent_stone";
	$tdatachohyo_by_dia[".allSearchFields"][] = "description";
	$tdatachohyo_by_dia[".allSearchFields"][] = "chohyo_id";
	$tdatachohyo_by_dia[".allSearchFields"][] = "ecc_id";
	$tdatachohyo_by_dia[".allSearchFields"][] = "yahoo_sinaban";
	$tdatachohyo_by_dia[".allSearchFields"][] = "price";
	$tdatachohyo_by_dia[".allSearchFields"][] = "satei_by";
	$tdatachohyo_by_dia[".allSearchFields"][] = "satei_hi";
	$tdatachohyo_by_dia[".allSearchFields"][] = "REG_AUTHOR";
	$tdatachohyo_by_dia[".allSearchFields"][] = "DT_UP_DATE";
	$tdatachohyo_by_dia[".allSearchFields"][] = "kaitori_by";
	$tdatachohyo_by_dia[".allSearchFields"][] = "kaitory_hi";
	$tdatachohyo_by_dia[".allSearchFields"][] = "updated_by";
	$tdatachohyo_by_dia[".allSearchFields"][] = "updated_at";
	

$tdatachohyo_by_dia[".googleLikeFields"] = array();
$tdatachohyo_by_dia[".googleLikeFields"][] = "status";
$tdatachohyo_by_dia[".googleLikeFields"][] = "product_id";
$tdatachohyo_by_dia[".googleLikeFields"][] = "category_id";
$tdatachohyo_by_dia[".googleLikeFields"][] = "sub_category_id1";
$tdatachohyo_by_dia[".googleLikeFields"][] = "Parent_stone";
$tdatachohyo_by_dia[".googleLikeFields"][] = "description";
$tdatachohyo_by_dia[".googleLikeFields"][] = "chohyo_id";
$tdatachohyo_by_dia[".googleLikeFields"][] = "ecc_id";
$tdatachohyo_by_dia[".googleLikeFields"][] = "yahoo_sinaban";
$tdatachohyo_by_dia[".googleLikeFields"][] = "price";
$tdatachohyo_by_dia[".googleLikeFields"][] = "satei_by";
$tdatachohyo_by_dia[".googleLikeFields"][] = "satei_hi";
$tdatachohyo_by_dia[".googleLikeFields"][] = "REG_AUTHOR";
$tdatachohyo_by_dia[".googleLikeFields"][] = "DT_UP_DATE";
$tdatachohyo_by_dia[".googleLikeFields"][] = "kaitori_by";
$tdatachohyo_by_dia[".googleLikeFields"][] = "kaitory_hi";
$tdatachohyo_by_dia[".googleLikeFields"][] = "updated_by";
$tdatachohyo_by_dia[".googleLikeFields"][] = "updated_at";

$tdatachohyo_by_dia[".panelSearchFields"] = array();
$tdatachohyo_by_dia[".searchPanelOptions"] = array();
$tdatachohyo_by_dia[".panelSearchFields"][] = "status";
	$tdatachohyo_by_dia[".panelSearchFields"][] = "product_id";
	$tdatachohyo_by_dia[".panelSearchFields"][] = "category_id";
	$tdatachohyo_by_dia[".panelSearchFields"][] = "sub_category_id1";
	$tdatachohyo_by_dia[".panelSearchFields"][] = "Parent_stone";
	$tdatachohyo_by_dia[".panelSearchFields"][] = "description";
	$tdatachohyo_by_dia[".panelSearchFields"][] = "chohyo_id";
	$tdatachohyo_by_dia[".panelSearchFields"][] = "ecc_id";
	$tdatachohyo_by_dia[".panelSearchFields"][] = "yahoo_sinaban";
	$tdatachohyo_by_dia[".panelSearchFields"][] = "price";
	$tdatachohyo_by_dia[".panelSearchFields"][] = "satei_by";
	$tdatachohyo_by_dia[".panelSearchFields"][] = "satei_hi";
	$tdatachohyo_by_dia[".panelSearchFields"][] = "REG_AUTHOR";
	$tdatachohyo_by_dia[".panelSearchFields"][] = "DT_UP_DATE";
	$tdatachohyo_by_dia[".panelSearchFields"][] = "kaitori_by";
	$tdatachohyo_by_dia[".panelSearchFields"][] = "kaitory_hi";
	$tdatachohyo_by_dia[".panelSearchFields"][] = "updated_by";
	$tdatachohyo_by_dia[".panelSearchFields"][] = "updated_at";
	
$tdatachohyo_by_dia[".advSearchFields"] = array();
$tdatachohyo_by_dia[".advSearchFields"][] = "status";
$tdatachohyo_by_dia[".advSearchFields"][] = "product_id";
$tdatachohyo_by_dia[".advSearchFields"][] = "category_id";
$tdatachohyo_by_dia[".advSearchFields"][] = "sub_category_id1";
$tdatachohyo_by_dia[".advSearchFields"][] = "Parent_stone";
$tdatachohyo_by_dia[".advSearchFields"][] = "description";
$tdatachohyo_by_dia[".advSearchFields"][] = "chohyo_id";
$tdatachohyo_by_dia[".advSearchFields"][] = "ecc_id";
$tdatachohyo_by_dia[".advSearchFields"][] = "yahoo_sinaban";
$tdatachohyo_by_dia[".advSearchFields"][] = "price";
$tdatachohyo_by_dia[".advSearchFields"][] = "satei_by";
$tdatachohyo_by_dia[".advSearchFields"][] = "satei_hi";
$tdatachohyo_by_dia[".advSearchFields"][] = "REG_AUTHOR";
$tdatachohyo_by_dia[".advSearchFields"][] = "DT_UP_DATE";
$tdatachohyo_by_dia[".advSearchFields"][] = "kaitori_by";
$tdatachohyo_by_dia[".advSearchFields"][] = "kaitory_hi";
$tdatachohyo_by_dia[".advSearchFields"][] = "updated_by";
$tdatachohyo_by_dia[".advSearchFields"][] = "updated_at";

$tdatachohyo_by_dia[".tableType"] = "list";

$tdatachohyo_by_dia[".printerPageOrientation"] = 0;
$tdatachohyo_by_dia[".nPrinterPageScale"] = 100;

$tdatachohyo_by_dia[".nPrinterSplitRecords"] = 40;

$tdatachohyo_by_dia[".nPrinterPDFSplitRecords"] = 40;



$tdatachohyo_by_dia[".geocodingEnabled"] = false;





$tdatachohyo_by_dia[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatachohyo_by_dia[".pageSize"] = 100;

$tdatachohyo_by_dia[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatachohyo_by_dia[".strOrderBy"] = $tstrOrderBy;

$tdatachohyo_by_dia[".orderindexes"] = array();
$tdatachohyo_by_dia[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "`product_id`");

$tdatachohyo_by_dia[".sqlHead"] = "select '' AS `No`,  '' AS `onsya`,  `status`,  `product_id`,  `category_id`,  `sub_category_id1`,  `Parent_stone`,  `description`,  `chohyo_id`,  `Discrimination`,  `ecc_id`,  `yahoo_sinaban`,  `price`,  `satei_by`,  `satei_hi`,  `REG_AUTHOR`,  `DT_UP_DATE`,  `kaitori_by`,  `kaitory_hi`,  `updated_by`,  `updated_at`";
$tdatachohyo_by_dia[".sqlFrom"] = "FROM `shouhin`";
$tdatachohyo_by_dia[".sqlWhereExpr"] = "(`status` = 127)";
$tdatachohyo_by_dia[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachohyo_by_dia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachohyo_by_dia[".arrGroupsPerPage"] = $arrGPP;

$tdatachohyo_by_dia[".highlightSearchResults"] = true;

$tableKeyschohyo_by_dia = array();
$tableKeyschohyo_by_dia[] = "product_id";
$tdatachohyo_by_dia[".Keys"] = $tableKeyschohyo_by_dia;

$tdatachohyo_by_dia[".listFields"] = array();
$tdatachohyo_by_dia[".listFields"][] = "status";
$tdatachohyo_by_dia[".listFields"][] = "chohyo_id";
$tdatachohyo_by_dia[".listFields"][] = "product_id";
$tdatachohyo_by_dia[".listFields"][] = "category_id";
$tdatachohyo_by_dia[".listFields"][] = "sub_category_id1";
$tdatachohyo_by_dia[".listFields"][] = "Parent_stone";
$tdatachohyo_by_dia[".listFields"][] = "description";
$tdatachohyo_by_dia[".listFields"][] = "ecc_id";
$tdatachohyo_by_dia[".listFields"][] = "yahoo_sinaban";
$tdatachohyo_by_dia[".listFields"][] = "price";
$tdatachohyo_by_dia[".listFields"][] = "satei_by";
$tdatachohyo_by_dia[".listFields"][] = "satei_hi";
$tdatachohyo_by_dia[".listFields"][] = "REG_AUTHOR";
$tdatachohyo_by_dia[".listFields"][] = "DT_UP_DATE";
$tdatachohyo_by_dia[".listFields"][] = "kaitori_by";
$tdatachohyo_by_dia[".listFields"][] = "kaitory_hi";
$tdatachohyo_by_dia[".listFields"][] = "updated_by";
$tdatachohyo_by_dia[".listFields"][] = "updated_at";

$tdatachohyo_by_dia[".hideMobileList"] = array();


$tdatachohyo_by_dia[".viewFields"] = array();

$tdatachohyo_by_dia[".addFields"] = array();

$tdatachohyo_by_dia[".masterListFields"] = array();
$tdatachohyo_by_dia[".masterListFields"][] = "Discrimination";
$tdatachohyo_by_dia[".masterListFields"][] = "status";
$tdatachohyo_by_dia[".masterListFields"][] = "No";
$tdatachohyo_by_dia[".masterListFields"][] = "product_id";
$tdatachohyo_by_dia[".masterListFields"][] = "onsya";
$tdatachohyo_by_dia[".masterListFields"][] = "category_id";
$tdatachohyo_by_dia[".masterListFields"][] = "sub_category_id1";
$tdatachohyo_by_dia[".masterListFields"][] = "Parent_stone";
$tdatachohyo_by_dia[".masterListFields"][] = "description";
$tdatachohyo_by_dia[".masterListFields"][] = "chohyo_id";
$tdatachohyo_by_dia[".masterListFields"][] = "ecc_id";
$tdatachohyo_by_dia[".masterListFields"][] = "yahoo_sinaban";
$tdatachohyo_by_dia[".masterListFields"][] = "price";
$tdatachohyo_by_dia[".masterListFields"][] = "satei_by";
$tdatachohyo_by_dia[".masterListFields"][] = "satei_hi";
$tdatachohyo_by_dia[".masterListFields"][] = "REG_AUTHOR";
$tdatachohyo_by_dia[".masterListFields"][] = "DT_UP_DATE";
$tdatachohyo_by_dia[".masterListFields"][] = "kaitori_by";
$tdatachohyo_by_dia[".masterListFields"][] = "kaitory_hi";
$tdatachohyo_by_dia[".masterListFields"][] = "updated_by";
$tdatachohyo_by_dia[".masterListFields"][] = "updated_at";

$tdatachohyo_by_dia[".inlineAddFields"] = array();
$tdatachohyo_by_dia[".inlineAddFields"][] = "status";
$tdatachohyo_by_dia[".inlineAddFields"][] = "chohyo_id";
$tdatachohyo_by_dia[".inlineAddFields"][] = "category_id";
$tdatachohyo_by_dia[".inlineAddFields"][] = "sub_category_id1";
$tdatachohyo_by_dia[".inlineAddFields"][] = "Parent_stone";
$tdatachohyo_by_dia[".inlineAddFields"][] = "description";

$tdatachohyo_by_dia[".editFields"] = array();

$tdatachohyo_by_dia[".inlineEditFields"] = array();
$tdatachohyo_by_dia[".inlineEditFields"][] = "status";
$tdatachohyo_by_dia[".inlineEditFields"][] = "chohyo_id";
$tdatachohyo_by_dia[".inlineEditFields"][] = "category_id";
$tdatachohyo_by_dia[".inlineEditFields"][] = "sub_category_id1";
$tdatachohyo_by_dia[".inlineEditFields"][] = "Parent_stone";
$tdatachohyo_by_dia[".inlineEditFields"][] = "description";

$tdatachohyo_by_dia[".updateSelectedFields"] = array();


$tdatachohyo_by_dia[".exportFields"] = array();
$tdatachohyo_by_dia[".exportFields"][] = "status";
$tdatachohyo_by_dia[".exportFields"][] = "product_id";
$tdatachohyo_by_dia[".exportFields"][] = "category_id";
$tdatachohyo_by_dia[".exportFields"][] = "sub_category_id1";
$tdatachohyo_by_dia[".exportFields"][] = "Parent_stone";
$tdatachohyo_by_dia[".exportFields"][] = "description";
$tdatachohyo_by_dia[".exportFields"][] = "chohyo_id";

$tdatachohyo_by_dia[".importFields"] = array();
$tdatachohyo_by_dia[".importFields"][] = "status";
$tdatachohyo_by_dia[".importFields"][] = "product_id";
$tdatachohyo_by_dia[".importFields"][] = "category_id";
$tdatachohyo_by_dia[".importFields"][] = "sub_category_id1";
$tdatachohyo_by_dia[".importFields"][] = "Parent_stone";
$tdatachohyo_by_dia[".importFields"][] = "description";
$tdatachohyo_by_dia[".importFields"][] = "chohyo_id";

$tdatachohyo_by_dia[".printFields"] = array();

//	No
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "No";
	$fdata["GoodName"] = "No";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","No");
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








	$tdatachohyo_by_dia["No"] = $fdata;
//	onsya
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "onsya";
	$fdata["GoodName"] = "onsya";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","onsya");
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








	$tdatachohyo_by_dia["onsya"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","status");
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




	$tdatachohyo_by_dia["status"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","product_id");
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




	$tdatachohyo_by_dia["product_id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","category_id");
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




	$tdatachohyo_by_dia["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","sub_category_id1");
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




	$tdatachohyo_by_dia["sub_category_id1"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","Parent_stone");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatachohyo_by_dia["Parent_stone"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","description");
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




	$tdatachohyo_by_dia["description"] = $fdata;
//	chohyo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "chohyo_id";
	$fdata["GoodName"] = "chohyo_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","chohyo_id");
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




	$tdatachohyo_by_dia["chohyo_id"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","Discrimination");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Discrimination";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Discrimination`";

	
	
			
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








	$tdatachohyo_by_dia["Discrimination"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","ecc_id");
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




	$tdatachohyo_by_dia["ecc_id"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","yahoo_sinaban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatachohyo_by_dia["yahoo_sinaban"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","price");
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




	$tdatachohyo_by_dia["price"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","satei_by");
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




	$tdatachohyo_by_dia["satei_by"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","satei_hi");
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




	$tdatachohyo_by_dia["satei_hi"] = $fdata;
//	REG_AUTHOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "REG_AUTHOR";
	$fdata["GoodName"] = "REG_AUTHOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","REG_AUTHOR");
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




	$tdatachohyo_by_dia["REG_AUTHOR"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","DT_UP_DATE");
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




	$tdatachohyo_by_dia["DT_UP_DATE"] = $fdata;
//	kaitori_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "kaitori_by";
	$fdata["GoodName"] = "kaitori_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","kaitori_by");
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




	$tdatachohyo_by_dia["kaitori_by"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "kaitory_hi";
	$fdata["GoodName"] = "kaitory_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","kaitory_hi");
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




	$tdatachohyo_by_dia["kaitory_hi"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","updated_by");
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




	$tdatachohyo_by_dia["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia","updated_at");
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




	$tdatachohyo_by_dia["updated_at"] = $fdata;


$tables_data["chohyo_by_dia"]=&$tdatachohyo_by_dia;
$field_labels["chohyo_by_dia"] = &$fieldLabelschohyo_by_dia;
$fieldToolTips["chohyo_by_dia"] = &$fieldToolTipschohyo_by_dia;
$placeHolders["chohyo_by_dia"] = &$placeHolderschohyo_by_dia;
$page_titles["chohyo_by_dia"] = &$pageTitleschohyo_by_dia;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["chohyo_by_dia"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["chohyo_by_dia"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_chohyo_by_dia()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "'' AS `No`,  '' AS `onsya`,  `status`,  `product_id`,  `category_id`,  `sub_category_id1`,  `Parent_stone`,  `description`,  `chohyo_id`,  `Discrimination`,  `ecc_id`,  `yahoo_sinaban`,  `price`,  `satei_by`,  `satei_hi`,  `REG_AUTHOR`,  `DT_UP_DATE`,  `kaitori_by`,  `kaitory_hi`,  `updated_by`,  `updated_at`";
$proto0["m_strFrom"] = "FROM `shouhin`";
$proto0["m_strWhere"] = "(`status` = 127)";
$proto0["m_strOrderBy"] = "ORDER BY `product_id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`status` = 127";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 127";
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
	"m_sql" => "''"
));

$proto6["m_sql"] = "''";
$proto6["m_srcTableName"] = "chohyo_by_dia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "No";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto8["m_sql"] = "''";
$proto8["m_srcTableName"] = "chohyo_by_dia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "onsya";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto10["m_sql"] = "`status`";
$proto10["m_srcTableName"] = "chohyo_by_dia";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto12["m_sql"] = "`product_id`";
$proto12["m_srcTableName"] = "chohyo_by_dia";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto14["m_sql"] = "`category_id`";
$proto14["m_srcTableName"] = "chohyo_by_dia";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto16["m_sql"] = "`sub_category_id1`";
$proto16["m_srcTableName"] = "chohyo_by_dia";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto18["m_sql"] = "`Parent_stone`";
$proto18["m_srcTableName"] = "chohyo_by_dia";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto20["m_sql"] = "`description`";
$proto20["m_srcTableName"] = "chohyo_by_dia";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "chohyo_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto22["m_sql"] = "`chohyo_id`";
$proto22["m_srcTableName"] = "chohyo_by_dia";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto24["m_sql"] = "`Discrimination`";
$proto24["m_srcTableName"] = "chohyo_by_dia";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto26["m_sql"] = "`ecc_id`";
$proto26["m_srcTableName"] = "chohyo_by_dia";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto28["m_sql"] = "`yahoo_sinaban`";
$proto28["m_srcTableName"] = "chohyo_by_dia";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto30["m_sql"] = "`price`";
$proto30["m_srcTableName"] = "chohyo_by_dia";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto32["m_sql"] = "`satei_by`";
$proto32["m_srcTableName"] = "chohyo_by_dia";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto34["m_sql"] = "`satei_hi`";
$proto34["m_srcTableName"] = "chohyo_by_dia";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_AUTHOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto36["m_sql"] = "`REG_AUTHOR`";
$proto36["m_srcTableName"] = "chohyo_by_dia";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto38["m_sql"] = "`DT_UP_DATE`";
$proto38["m_srcTableName"] = "chohyo_by_dia";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto40["m_sql"] = "`kaitori_by`";
$proto40["m_srcTableName"] = "chohyo_by_dia";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto42["m_sql"] = "`kaitory_hi`";
$proto42["m_srcTableName"] = "chohyo_by_dia";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto44["m_sql"] = "`updated_by`";
$proto44["m_srcTableName"] = "chohyo_by_dia";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto46["m_sql"] = "`updated_at`";
$proto46["m_srcTableName"] = "chohyo_by_dia";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "shouhin";
$proto49["m_srcTableName"] = "chohyo_by_dia";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "product_id";
$proto49["m_columns"][] = "category_id";
$proto49["m_columns"][] = "goods_title";
$proto49["m_columns"][] = "title";
$proto49["m_columns"][] = "sub_category_id1";
$proto49["m_columns"][] = "ecc_id";
$proto49["m_columns"][] = "price";
$proto49["m_columns"][] = "yahoo";
$proto49["m_columns"][] = "remark";
$proto49["m_columns"][] = "sales_price";
$proto49["m_columns"][] = "description";
$proto49["m_columns"][] = "status";
$proto49["m_columns"][] = "product_num";
$proto49["m_columns"][] = "updated_at";
$proto49["m_columns"][] = "yahoo_size";
$proto49["m_columns"][] = "yahoo_title";
$proto49["m_columns"][] = "yahoo_junle";
$proto49["m_columns"][] = "yahoo_sankou_uwadai";
$proto49["m_columns"][] = "yahoo_sozai";
$proto49["m_columns"][] = "yahoo_color";
$proto49["m_columns"][] = "yahoo_kataban";
$proto49["m_columns"][] = "yahoo_condition1";
$proto49["m_columns"][] = "yahoo_condition2";
$proto49["m_columns"][] = "yahoo_fuzokuhin";
$proto49["m_columns"][] = "yahoo_sinaban";
$proto49["m_columns"][] = "yahoo_saisun_sha";
$proto49["m_columns"][] = "yahoo_sex";
$proto49["m_columns"][] = "box_id";
$proto49["m_columns"][] = "nyuukin_price";
$proto49["m_columns"][] = "updated_by";
$proto49["m_columns"][] = "raku_title";
$proto49["m_columns"][] = "raku_hyoujisaki_category2";
$proto49["m_columns"][] = "raku_hyoujisaki_category";
$proto49["m_columns"][] = "raku_hyoujisaki_category3";
$proto49["m_columns"][] = "timesta";
$proto49["m_columns"][] = "saisun_start";
$proto49["m_columns"][] = "saisun_end";
$proto49["m_columns"][] = "label_output_flag";
$proto49["m_columns"][] = "season";
$proto49["m_columns"][] = "kanryou_henbi";
$proto49["m_columns"][] = "box_sort";
$proto49["m_columns"][] = "satei_by";
$proto49["m_columns"][] = "kaitori_by";
$proto49["m_columns"][] = "comment";
$proto49["m_columns"][] = "satei_hi";
$proto49["m_columns"][] = "kaitory_hi";
$proto49["m_columns"][] = "REG_PHOTOGRAPHER";
$proto49["m_columns"][] = "REG_AUTHOR";
$proto49["m_columns"][] = "REG_PACKINGS";
$proto49["m_columns"][] = "REG_KAKOU_DATE";
$proto49["m_columns"][] = "REG_KAKOU";
$proto49["m_columns"][] = "REG_EXHIBITOR";
$proto49["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto49["m_columns"][] = "DT_PACKING_DATE";
$proto49["m_columns"][] = "DT_UP_DATE";
$proto49["m_columns"][] = "AWAZU_DATE";
$proto49["m_columns"][] = "AWAZU_NIN";
$proto49["m_columns"][] = "sabun_date";
$proto49["m_columns"][] = "browseid";
$proto49["m_columns"][] = "browsenode";
$proto49["m_columns"][] = "gold_property";
$proto49["m_columns"][] = "ichiba_title";
$proto49["m_columns"][] = "Gram";
$proto49["m_columns"][] = "Parent_stone";
$proto49["m_columns"][] = "Aside_stone";
$proto49["m_columns"][] = "Appraiser";
$proto49["m_columns"][] = "Remarks";
$proto49["m_columns"][] = "Destination_selling";
$proto49["m_columns"][] = "Finish";
$proto49["m_columns"][] = "Discrimination";
$proto49["m_columns"][] = "accessories";
$proto49["m_columns"][] = "priority";
$proto49["m_columns"][] = "A_storage";
$proto49["m_columns"][] = "price_per_gram";
$proto49["m_columns"][] = "price_per_parent_stone";
$proto49["m_columns"][] = "price_per_aside_stone";
$proto49["m_columns"][] = "price_secret";
$proto49["m_columns"][] = "sales_price_secret";
$proto49["m_columns"][] = "eq";
$proto49["m_columns"][] = "en";
$proto49["m_columns"][] = "line";
$proto49["m_columns"][] = "item_name";
$proto49["m_columns"][] = "handle";
$proto49["m_columns"][] = "yahoo_color_id";
$proto49["m_columns"][] = "raku_hyoujisaki_category4";
$proto49["m_columns"][] = "raku_hyoujisaki_category5";
$proto49["m_columns"][] = "raku_dir_1";
$proto49["m_columns"][] = "raku_dir_2";
$proto49["m_columns"][] = "raku_dir_3";
$proto49["m_columns"][] = "raku_dir_4";
$proto49["m_columns"][] = "raku_dir_5";
$proto49["m_columns"][] = "raku_dir_result";
$proto49["m_columns"][] = "raku_tag_result";
$proto49["m_columns"][] = "serial_number";
$proto49["m_columns"][] = "Exhibition_Date";
$proto49["m_columns"][] = "search_keyword";
$proto49["m_columns"][] = "stamp";
$proto49["m_columns"][] = "motif";
$proto49["m_columns"][] = "Setting";
$proto49["m_columns"][] = "processing";
$proto49["m_columns"][] = "Sleeve_Length";
$proto49["m_columns"][] = "length";
$proto49["m_columns"][] = "Ring_size";
$proto49["m_columns"][] = "price_for_site";
$proto49["m_columns"][] = "yahoo_category_id";
$proto49["m_columns"][] = "Qty";
$proto49["m_columns"][] = "sales_period";
$proto49["m_columns"][] = "starting_price";
$proto49["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto49["m_columns"][] = "amount_of_image";
$proto49["m_columns"][] = "csv";
$proto49["m_columns"][] = "return_output_flag";
$proto49["m_columns"][] = "wasabi_flag";
$proto49["m_columns"][] = "ws_import_date";
$proto49["m_columns"][] = "logo";
$proto49["m_columns"][] = "parts";
$proto49["m_columns"][] = "country_of_origin";
$proto49["m_columns"][] = "zipper";
$proto49["m_columns"][] = "guarantee";
$proto49["m_columns"][] = "errors";
$proto49["m_columns"][] = "designer";
$proto49["m_columns"][] = "hahakai";
$proto49["m_columns"][] = "effect";
$proto49["m_columns"][] = "shape";
$proto49["m_columns"][] = "cutting_style";
$proto49["m_columns"][] = "chain_type";
$proto49["m_columns"][] = "number_of_stones";
$proto49["m_columns"][] = "amount";
$proto49["m_columns"][] = "satei_error";
$proto49["m_columns"][] = "producing_area";
$proto49["m_columns"][] = "shape_supplement";
$proto49["m_columns"][] = "side_gem";
$proto49["m_columns"][] = "product_style";
$proto49["m_columns"][] = "collar_neck_line";
$proto49["m_columns"][] = "breast";
$proto49["m_columns"][] = "silhouette";
$proto49["m_columns"][] = "sleeve";
$proto49["m_columns"][] = "unit";
$proto49["m_columns"][] = "hall_mark";
$proto49["m_columns"][] = "plate";
$proto49["m_columns"][] = "toe";
$proto49["m_columns"][] = "heel";
$proto49["m_columns"][] = "cloth";
$proto49["m_columns"][] = "serial_number_for_storage";
$proto49["m_columns"][] = "official_url";
$proto49["m_columns"][] = "main_details";
$proto49["m_columns"][] = "notation_size";
$proto49["m_columns"][] = "shoe_size_jp";
$proto49["m_columns"][] = "Eoc_chigins2_id";
$proto49["m_columns"][] = "country_of_origin_name";
$proto49["m_columns"][] = "mailingkit_id";
$proto49["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto49["m_columns"][] = "DA_WEIGHT";
$proto49["m_columns"][] = "DA_PER_CARAT";
$proto49["m_columns"][] = "DA_SHAPE";
$proto49["m_columns"][] = "DA_SELFGRES";
$proto49["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto49["m_columns"][] = "DA_SUGARCANE";
$proto49["m_columns"][] = "DA_RAPA";
$proto49["m_columns"][] = "DA_INTENSITY";
$proto49["m_columns"][] = "DA_OVERTONE";
$proto49["m_columns"][] = "DA_COLOR";
$proto49["m_columns"][] = "DA_CLARITY";
$proto49["m_columns"][] = "DA_CUT";
$proto49["m_columns"][] = "DA_POLISH";
$proto49["m_columns"][] = "DA_SYMMETRY";
$proto49["m_columns"][] = "DA_FLUO";
$proto49["m_columns"][] = "DA_COLOR_FLUO";
$proto49["m_columns"][] = "DA_WIDE";
$proto49["m_columns"][] = "DA_HIGH";
$proto49["m_columns"][] = "DA_DEPTH";
$proto49["m_columns"][] = "DA_APPRAISER";
$proto49["m_columns"][] = "DA_FRAPA";
$proto49["m_columns"][] = "DA_RATE";
$proto49["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto49["m_columns"][] = "DA_YOURNAME";
$proto49["m_columns"][] = "DA_RAPAB";
$proto49["m_columns"][] = "DA_GROSSPROFIT";
$proto49["m_columns"][] = "DA_INTEREST_1";
$proto49["m_columns"][] = "DA_no";
$proto49["m_columns"][] = "kinsa_flag";
$proto49["m_columns"][] = "price_for_site_flag";
$proto49["m_columns"][] = "Eoc_takuhai_id";
$proto49["m_columns"][] = "Eoc_unfinished_id";
$proto49["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto49["m_columns"][] = "chohyo_id";
$proto49["m_columns"][] = "location";
$proto49["m_columns"][] = "special_instructions_1";
$proto49["m_columns"][] = "special_instructions_2";
$proto49["m_columns"][] = "special_instructions_3";
$proto49["m_columns"][] = "chohyo_seihin_flag";
$proto49["m_columns"][] = "chohyo_dia_flag";
$proto49["m_columns"][] = "chohyo_type";
$proto49["m_columns"][] = "ichiyen_flag";
$proto49["m_columns"][] = "asuraku_fuka_flag";
$proto49["m_columns"][] = "parallel_import_flag";
$proto49["m_columns"][] = "meisai_number";
$proto49["m_columns"][] = "days_keep_price";
$proto49["m_columns"][] = "initial_included";
$proto49["m_columns"][] = "novelty";
$proto49["m_columns"][] = "tentou_label_output_flag";
$proto49["m_columns"][] = "itaku_flag";
$proto49["m_columns"][] = "including_catch";
$proto49["m_columns"][] = "ichiba_meeting_month";
$proto49["m_columns"][] = "ichiba_meeting_name";
$proto49["m_columns"][] = "ichiba_color";
$proto49["m_columns"][] = "ichiba_clarity";
$proto49["m_columns"][] = "ichiba_melee_gai";
$proto49["m_columns"][] = "ichiba_lot_pieces";
$proto49["m_columns"][] = "ichiba_image";
$proto49["m_columns"][] = "ichiba_img";
$proto49["m_columns"][] = "gold_check_id";
$proto49["m_columns"][] = "ichiba_exhibition_id";
$proto49["m_columns"][] = "ichiba_exhibition_sort";
$proto49["m_columns"][] = "cost";
$proto49["m_columns"][] = "auto_price_cut_prohibited";
$proto49["m_columns"][] = "event_price";
$proto49["m_columns"][] = "identification_cost";
$proto49["m_columns"][] = "other_cost";
$proto49["m_columns"][] = "stock_quantity";
$proto49["m_columns"][] = "Eoc_trader_id_for_buy";
$proto49["m_columns"][] = "Eoc_trader_id_for_sell";
$proto49["m_columns"][] = "multiplication_rate";
$proto49["m_columns"][] = "many_product_group_id";
$proto49["m_columns"][] = "trading_sort_id";
$proto49["m_columns"][] = "many_product_group_saiban";
$proto49["m_columns"][] = "purchase_category";
$proto49["m_columns"][] = "created_at";
$proto49["m_columns"][] = "created_by";
$proto49["m_columns"][] = "manual_input_price_per_gram";
$proto49["m_columns"][] = "satei_start";
$proto49["m_columns"][] = "self_DA_INTENSITY";
$proto49["m_columns"][] = "self_DA_OVERTONE";
$proto49["m_columns"][] = "self_DA_COLOR";
$proto49["m_columns"][] = "self_DA_CLARITY";
$proto49["m_columns"][] = "self_DA_CUT";
$proto49["m_columns"][] = "self_DA_POLISH";
$proto49["m_columns"][] = "self_DA_SYMMETRY";
$proto49["m_columns"][] = "self_DA_FLUO";
$proto49["m_columns"][] = "self_DA_COLOR_FLUO";
$proto49["m_columns"][] = "self_DA_FRAPA";
$proto49["m_columns"][] = "self_DA_RATE";
$proto49["m_columns"][] = "self_multiplication_rate";
$proto49["m_columns"][] = "is_seiyaku";
$proto49["m_columns"][] = "destination_sold_out";
$proto49["m_columns"][] = "mypage_update_prohibited";
$proto49["m_columns"][] = "gold_check_scan_id";
$proto49["m_columns"][] = "buy_campaign_data_id";
$proto49["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto49["m_columns"][] = "commission";
$proto49["m_columns"][] = "addtime_gold_check_id";
$proto49["m_columns"][] = "is_recovery";
$proto49["m_columns"][] = "sales_cost";
$proto49["m_columns"][] = "mst_business_partner_id";
$proto49["m_columns"][] = "DA_GROSSPROFIT_2";
$proto49["m_columns"][] = "DA_INTEREST_2";
$proto49["m_columns"][] = "minus_weight";
$proto49["m_columns"][] = "diameter_size";
$proto49["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "`shouhin`";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "chohyo_by_dia";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia"
));

$proto52["m_column"]=$obj;
$proto52["m_bAsc"] = 0;
$proto52["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto52);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="chohyo_by_dia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chohyo_by_dia = createSqlQuery_chohyo_by_dia();


	
		;

																					

$tdatachohyo_by_dia[".sqlquery"] = $queryData_chohyo_by_dia;

include_once(getabspath("include/chohyo_by_dia_events.php"));
$tableEvents["chohyo_by_dia"] = new eventclass_chohyo_by_dia;
$tdatachohyo_by_dia[".hasEvents"] = true;

?>