<?php
require_once(getabspath("classes/cipherer.php"));




$tdatachohyo_by_dia_result = array();
	$tdatachohyo_by_dia_result[".truncateText"] = true;
	$tdatachohyo_by_dia_result[".NumberOfChars"] = 80;
	$tdatachohyo_by_dia_result[".ShortName"] = "chohyo_by_dia_result";
	$tdatachohyo_by_dia_result[".OwnerID"] = "";
	$tdatachohyo_by_dia_result[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelschohyo_by_dia_result = array();
$fieldToolTipschohyo_by_dia_result = array();
$pageTitleschohyo_by_dia_result = array();
$placeHolderschohyo_by_dia_result = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelschohyo_by_dia_result["Japanese"] = array();
	$fieldToolTipschohyo_by_dia_result["Japanese"] = array();
	$placeHolderschohyo_by_dia_result["Japanese"] = array();
	$pageTitleschohyo_by_dia_result["Japanese"] = array();
	$fieldLabelschohyo_by_dia_result["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipschohyo_by_dia_result["Japanese"]["product_id"] = "";
	$placeHolderschohyo_by_dia_result["Japanese"]["product_id"] = "";
	$fieldLabelschohyo_by_dia_result["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipschohyo_by_dia_result["Japanese"]["category_id"] = "";
	$placeHolderschohyo_by_dia_result["Japanese"]["category_id"] = "";
	$fieldLabelschohyo_by_dia_result["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipschohyo_by_dia_result["Japanese"]["sub_category_id1"] = "";
	$placeHolderschohyo_by_dia_result["Japanese"]["sub_category_id1"] = "";
	$fieldLabelschohyo_by_dia_result["Japanese"]["description"] = "メモ";
	$fieldToolTipschohyo_by_dia_result["Japanese"]["description"] = "";
	$placeHolderschohyo_by_dia_result["Japanese"]["description"] = "";
	$fieldLabelschohyo_by_dia_result["Japanese"]["status"] = "商品状態";
	$fieldToolTipschohyo_by_dia_result["Japanese"]["status"] = "";
	$placeHolderschohyo_by_dia_result["Japanese"]["status"] = "";
	$fieldLabelschohyo_by_dia_result["Japanese"]["Parent_stone"] = "親石";
	$fieldToolTipschohyo_by_dia_result["Japanese"]["Parent_stone"] = "";
	$placeHolderschohyo_by_dia_result["Japanese"]["Parent_stone"] = "";
	$fieldLabelschohyo_by_dia_result["Japanese"]["No"] = "No";
	$fieldToolTipschohyo_by_dia_result["Japanese"]["No"] = "";
	$placeHolderschohyo_by_dia_result["Japanese"]["No"] = "";
	$fieldLabelschohyo_by_dia_result["Japanese"]["onsya"] = "御社";
	$fieldToolTipschohyo_by_dia_result["Japanese"]["onsya"] = "";
	$placeHolderschohyo_by_dia_result["Japanese"]["onsya"] = "";
	$fieldLabelschohyo_by_dia_result["Japanese"]["chohyo_id"] = "帳票Id";
	$fieldToolTipschohyo_by_dia_result["Japanese"]["chohyo_id"] = "";
	$placeHolderschohyo_by_dia_result["Japanese"]["chohyo_id"] = "";
	$fieldLabelschohyo_by_dia_result["Japanese"]["chohyo_type"] = "Chohyo Type";
	$fieldToolTipschohyo_by_dia_result["Japanese"]["chohyo_type"] = "";
	$placeHolderschohyo_by_dia_result["Japanese"]["chohyo_type"] = "";
	$fieldLabelschohyo_by_dia_result["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipschohyo_by_dia_result["Japanese"]["satei_by"] = "";
	$placeHolderschohyo_by_dia_result["Japanese"]["satei_by"] = "";
	$fieldLabelschohyo_by_dia_result["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipschohyo_by_dia_result["Japanese"]["satei_hi"] = "";
	$placeHolderschohyo_by_dia_result["Japanese"]["satei_hi"] = "";
	$fieldLabelschohyo_by_dia_result["Japanese"]["REG_AUTHOR"] = "成約人";
	$fieldToolTipschohyo_by_dia_result["Japanese"]["REG_AUTHOR"] = "";
	$placeHolderschohyo_by_dia_result["Japanese"]["REG_AUTHOR"] = "";
	$fieldLabelschohyo_by_dia_result["Japanese"]["DT_UP_DATE"] = "成約日";
	$fieldToolTipschohyo_by_dia_result["Japanese"]["DT_UP_DATE"] = "";
	$placeHolderschohyo_by_dia_result["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelschohyo_by_dia_result["Japanese"]["kaitori_by"] = "登録人";
	$fieldToolTipschohyo_by_dia_result["Japanese"]["kaitori_by"] = "";
	$placeHolderschohyo_by_dia_result["Japanese"]["kaitori_by"] = "";
	$fieldLabelschohyo_by_dia_result["Japanese"]["kaitory_hi"] = "登録日";
	$fieldToolTipschohyo_by_dia_result["Japanese"]["kaitory_hi"] = "";
	$placeHolderschohyo_by_dia_result["Japanese"]["kaitory_hi"] = "";
	if (count($fieldToolTipschohyo_by_dia_result["Japanese"]))
		$tdatachohyo_by_dia_result[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelschohyo_by_dia_result[""] = array();
	$fieldToolTipschohyo_by_dia_result[""] = array();
	$placeHolderschohyo_by_dia_result[""] = array();
	$pageTitleschohyo_by_dia_result[""] = array();
	$fieldLabelschohyo_by_dia_result[""]["No"] = "No";
	$fieldToolTipschohyo_by_dia_result[""]["No"] = "";
	$placeHolderschohyo_by_dia_result[""]["No"] = "";
	$fieldLabelschohyo_by_dia_result[""]["onsya"] = "Onsya";
	$fieldToolTipschohyo_by_dia_result[""]["onsya"] = "";
	$placeHolderschohyo_by_dia_result[""]["onsya"] = "";
	$fieldLabelschohyo_by_dia_result[""]["chohyo_id"] = "Chohyo Id";
	$fieldToolTipschohyo_by_dia_result[""]["chohyo_id"] = "";
	$placeHolderschohyo_by_dia_result[""]["chohyo_id"] = "";
	$fieldLabelschohyo_by_dia_result[""]["chohyo_type"] = "Chohyo Type";
	$fieldToolTipschohyo_by_dia_result[""]["chohyo_type"] = "";
	$placeHolderschohyo_by_dia_result[""]["chohyo_type"] = "";
	$fieldLabelschohyo_by_dia_result[""]["satei_by"] = "Satei By";
	$fieldToolTipschohyo_by_dia_result[""]["satei_by"] = "";
	$placeHolderschohyo_by_dia_result[""]["satei_by"] = "";
	$fieldLabelschohyo_by_dia_result[""]["satei_hi"] = "Satei Hi";
	$fieldToolTipschohyo_by_dia_result[""]["satei_hi"] = "";
	$placeHolderschohyo_by_dia_result[""]["satei_hi"] = "";
	$fieldLabelschohyo_by_dia_result[""]["REG_AUTHOR"] = "REG AUTHOR";
	$fieldToolTipschohyo_by_dia_result[""]["REG_AUTHOR"] = "";
	$placeHolderschohyo_by_dia_result[""]["REG_AUTHOR"] = "";
	$fieldLabelschohyo_by_dia_result[""]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipschohyo_by_dia_result[""]["DT_UP_DATE"] = "";
	$placeHolderschohyo_by_dia_result[""]["DT_UP_DATE"] = "";
	$fieldLabelschohyo_by_dia_result[""]["kaitori_by"] = "Kaitori By";
	$fieldToolTipschohyo_by_dia_result[""]["kaitori_by"] = "";
	$placeHolderschohyo_by_dia_result[""]["kaitori_by"] = "";
	$fieldLabelschohyo_by_dia_result[""]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipschohyo_by_dia_result[""]["kaitory_hi"] = "";
	$placeHolderschohyo_by_dia_result[""]["kaitory_hi"] = "";
	if (count($fieldToolTipschohyo_by_dia_result[""]))
		$tdatachohyo_by_dia_result[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelschohyo_by_dia_result["English"] = array();
	$fieldToolTipschohyo_by_dia_result["English"] = array();
	$placeHolderschohyo_by_dia_result["English"] = array();
	$pageTitleschohyo_by_dia_result["English"] = array();
	$fieldLabelschohyo_by_dia_result["English"]["No"] = "No";
	$fieldToolTipschohyo_by_dia_result["English"]["No"] = "";
	$placeHolderschohyo_by_dia_result["English"]["No"] = "";
	$fieldLabelschohyo_by_dia_result["English"]["onsya"] = "Onsya";
	$fieldToolTipschohyo_by_dia_result["English"]["onsya"] = "";
	$placeHolderschohyo_by_dia_result["English"]["onsya"] = "";
	$fieldLabelschohyo_by_dia_result["English"]["chohyo_id"] = "Chohyo Id";
	$fieldToolTipschohyo_by_dia_result["English"]["chohyo_id"] = "";
	$placeHolderschohyo_by_dia_result["English"]["chohyo_id"] = "";
	$fieldLabelschohyo_by_dia_result["English"]["chohyo_type"] = "Chohyo Type";
	$fieldToolTipschohyo_by_dia_result["English"]["chohyo_type"] = "";
	$placeHolderschohyo_by_dia_result["English"]["chohyo_type"] = "";
	$fieldLabelschohyo_by_dia_result["English"]["satei_by"] = "Satei By";
	$fieldToolTipschohyo_by_dia_result["English"]["satei_by"] = "";
	$placeHolderschohyo_by_dia_result["English"]["satei_by"] = "";
	$fieldLabelschohyo_by_dia_result["English"]["satei_hi"] = "Satei Hi";
	$fieldToolTipschohyo_by_dia_result["English"]["satei_hi"] = "";
	$placeHolderschohyo_by_dia_result["English"]["satei_hi"] = "";
	$fieldLabelschohyo_by_dia_result["English"]["REG_AUTHOR"] = "REG AUTHOR";
	$fieldToolTipschohyo_by_dia_result["English"]["REG_AUTHOR"] = "";
	$placeHolderschohyo_by_dia_result["English"]["REG_AUTHOR"] = "";
	$fieldLabelschohyo_by_dia_result["English"]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipschohyo_by_dia_result["English"]["DT_UP_DATE"] = "";
	$placeHolderschohyo_by_dia_result["English"]["DT_UP_DATE"] = "";
	$fieldLabelschohyo_by_dia_result["English"]["kaitori_by"] = "Kaitori By";
	$fieldToolTipschohyo_by_dia_result["English"]["kaitori_by"] = "";
	$placeHolderschohyo_by_dia_result["English"]["kaitori_by"] = "";
	$fieldLabelschohyo_by_dia_result["English"]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipschohyo_by_dia_result["English"]["kaitory_hi"] = "";
	$placeHolderschohyo_by_dia_result["English"]["kaitory_hi"] = "";
	if (count($fieldToolTipschohyo_by_dia_result["English"]))
		$tdatachohyo_by_dia_result[".isUseToolTips"] = true;
}


	$tdatachohyo_by_dia_result[".NCSearch"] = true;



$tdatachohyo_by_dia_result[".shortTableName"] = "chohyo_by_dia_result";
$tdatachohyo_by_dia_result[".nSecOptions"] = 0;
$tdatachohyo_by_dia_result[".recsPerRowPrint"] = 1;
$tdatachohyo_by_dia_result[".mainTableOwnerID"] = "";
$tdatachohyo_by_dia_result[".moveNext"] = 1;
$tdatachohyo_by_dia_result[".entityType"] = 1;

$tdatachohyo_by_dia_result[".strOriginalTableName"] = "shouhin";

	



$tdatachohyo_by_dia_result[".showAddInPopup"] = false;

$tdatachohyo_by_dia_result[".showEditInPopup"] = false;

$tdatachohyo_by_dia_result[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatachohyo_by_dia_result[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatachohyo_by_dia_result[".fieldsForRegister"] = array();

$tdatachohyo_by_dia_result[".listAjax"] = false;

	$tdatachohyo_by_dia_result[".audit"] = true;

	$tdatachohyo_by_dia_result[".locking"] = false;



$tdatachohyo_by_dia_result[".list"] = true;

$tdatachohyo_by_dia_result[".inlineEdit"] = true;


$tdatachohyo_by_dia_result[".reorderRecordsByHeader"] = true;
$tdatachohyo_by_dia_result[".createSortByDropdown"] = true;
$tdatachohyo_by_dia_result[".strSortControlSettingsJSON"] = "";



$tdatachohyo_by_dia_result[".inlineAdd"] = true;

$tdatachohyo_by_dia_result[".import"] = true;

$tdatachohyo_by_dia_result[".exportTo"] = true;



$tdatachohyo_by_dia_result[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatachohyo_by_dia_result[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatachohyo_by_dia_result[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatachohyo_by_dia_result[".searchSaving"] = false;
//

$tdatachohyo_by_dia_result[".showSearchPanel"] = true;
		$tdatachohyo_by_dia_result[".flexibleSearch"] = true;

$tdatachohyo_by_dia_result[".isUseAjaxSuggest"] = true;

$tdatachohyo_by_dia_result[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																															
					
					
					
																																																																																																																																																																																																																																																																																																																																																																														

$tdatachohyo_by_dia_result[".ajaxCodeSnippetAdded"] = false;

$tdatachohyo_by_dia_result[".buttonsAdded"] = true;

$tdatachohyo_by_dia_result[".addPageEvents"] = true;

// use timepicker for search panel
$tdatachohyo_by_dia_result[".isUseTimeForSearch"] = false;



$tdatachohyo_by_dia_result[".badgeColor"] = "8fbc8b";


$tdatachohyo_by_dia_result[".allSearchFields"] = array();
$tdatachohyo_by_dia_result[".filterFields"] = array();
$tdatachohyo_by_dia_result[".requiredSearchFields"] = array();

$tdatachohyo_by_dia_result[".allSearchFields"][] = "satei_by";
	$tdatachohyo_by_dia_result[".allSearchFields"][] = "satei_hi";
	$tdatachohyo_by_dia_result[".allSearchFields"][] = "REG_AUTHOR";
	$tdatachohyo_by_dia_result[".allSearchFields"][] = "DT_UP_DATE";
	$tdatachohyo_by_dia_result[".allSearchFields"][] = "kaitori_by";
	$tdatachohyo_by_dia_result[".allSearchFields"][] = "kaitory_hi";
	$tdatachohyo_by_dia_result[".allSearchFields"][] = "onsya";
	$tdatachohyo_by_dia_result[".allSearchFields"][] = "status";
	$tdatachohyo_by_dia_result[".allSearchFields"][] = "chohyo_id";
	$tdatachohyo_by_dia_result[".allSearchFields"][] = "product_id";
	$tdatachohyo_by_dia_result[".allSearchFields"][] = "category_id";
	$tdatachohyo_by_dia_result[".allSearchFields"][] = "sub_category_id1";
	$tdatachohyo_by_dia_result[".allSearchFields"][] = "Parent_stone";
	$tdatachohyo_by_dia_result[".allSearchFields"][] = "description";
	

$tdatachohyo_by_dia_result[".googleLikeFields"] = array();
$tdatachohyo_by_dia_result[".googleLikeFields"][] = "No";
$tdatachohyo_by_dia_result[".googleLikeFields"][] = "onsya";
$tdatachohyo_by_dia_result[".googleLikeFields"][] = "status";
$tdatachohyo_by_dia_result[".googleLikeFields"][] = "product_id";
$tdatachohyo_by_dia_result[".googleLikeFields"][] = "category_id";
$tdatachohyo_by_dia_result[".googleLikeFields"][] = "sub_category_id1";
$tdatachohyo_by_dia_result[".googleLikeFields"][] = "Parent_stone";
$tdatachohyo_by_dia_result[".googleLikeFields"][] = "description";
$tdatachohyo_by_dia_result[".googleLikeFields"][] = "chohyo_id";
$tdatachohyo_by_dia_result[".googleLikeFields"][] = "chohyo_type";
$tdatachohyo_by_dia_result[".googleLikeFields"][] = "satei_by";
$tdatachohyo_by_dia_result[".googleLikeFields"][] = "satei_hi";
$tdatachohyo_by_dia_result[".googleLikeFields"][] = "REG_AUTHOR";
$tdatachohyo_by_dia_result[".googleLikeFields"][] = "DT_UP_DATE";
$tdatachohyo_by_dia_result[".googleLikeFields"][] = "kaitori_by";
$tdatachohyo_by_dia_result[".googleLikeFields"][] = "kaitory_hi";

$tdatachohyo_by_dia_result[".panelSearchFields"] = array();
$tdatachohyo_by_dia_result[".searchPanelOptions"] = array();
$tdatachohyo_by_dia_result[".panelSearchFields"][] = "status";
	$tdatachohyo_by_dia_result[".panelSearchFields"][] = "product_id";
	$tdatachohyo_by_dia_result[".panelSearchFields"][] = "category_id";
	$tdatachohyo_by_dia_result[".panelSearchFields"][] = "sub_category_id1";
	$tdatachohyo_by_dia_result[".panelSearchFields"][] = "Parent_stone";
	$tdatachohyo_by_dia_result[".panelSearchFields"][] = "description";
	
$tdatachohyo_by_dia_result[".advSearchFields"] = array();
$tdatachohyo_by_dia_result[".advSearchFields"][] = "satei_by";
$tdatachohyo_by_dia_result[".advSearchFields"][] = "satei_hi";
$tdatachohyo_by_dia_result[".advSearchFields"][] = "REG_AUTHOR";
$tdatachohyo_by_dia_result[".advSearchFields"][] = "DT_UP_DATE";
$tdatachohyo_by_dia_result[".advSearchFields"][] = "kaitori_by";
$tdatachohyo_by_dia_result[".advSearchFields"][] = "kaitory_hi";
$tdatachohyo_by_dia_result[".advSearchFields"][] = "onsya";
$tdatachohyo_by_dia_result[".advSearchFields"][] = "status";
$tdatachohyo_by_dia_result[".advSearchFields"][] = "chohyo_id";
$tdatachohyo_by_dia_result[".advSearchFields"][] = "product_id";
$tdatachohyo_by_dia_result[".advSearchFields"][] = "category_id";
$tdatachohyo_by_dia_result[".advSearchFields"][] = "sub_category_id1";
$tdatachohyo_by_dia_result[".advSearchFields"][] = "Parent_stone";
$tdatachohyo_by_dia_result[".advSearchFields"][] = "description";

$tdatachohyo_by_dia_result[".tableType"] = "list";

$tdatachohyo_by_dia_result[".printerPageOrientation"] = 0;
$tdatachohyo_by_dia_result[".nPrinterPageScale"] = 100;

$tdatachohyo_by_dia_result[".nPrinterSplitRecords"] = 40;

$tdatachohyo_by_dia_result[".nPrinterPDFSplitRecords"] = 40;



$tdatachohyo_by_dia_result[".geocodingEnabled"] = false;





$tdatachohyo_by_dia_result[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatachohyo_by_dia_result[".totalsFields"] = array();
$tdatachohyo_by_dia_result[".totalsFields"][] = array(
	"fName" => "product_id",
	"numRows" => 0,
	"totalsType" => "COUNT",
	"viewFormat" => '');

$tdatachohyo_by_dia_result[".pageSize"] = 100;

$tdatachohyo_by_dia_result[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatachohyo_by_dia_result[".strOrderBy"] = $tstrOrderBy;

$tdatachohyo_by_dia_result[".orderindexes"] = array();
$tdatachohyo_by_dia_result[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "`product_id`");

$tdatachohyo_by_dia_result[".sqlHead"] = "select '' AS `No`,  '' AS `onsya`,  `status`,  `product_id`,  `category_id`,  `sub_category_id1`,  `Parent_stone`,  `description`,  `chohyo_id`,  `chohyo_type`,  `satei_by`,  `satei_hi`,  `REG_AUTHOR`,  `DT_UP_DATE`,  `kaitori_by`,  `kaitory_hi`";
$tdatachohyo_by_dia_result[".sqlFrom"] = "FROM `shouhin`";
$tdatachohyo_by_dia_result[".sqlWhereExpr"] = "(`chohyo_id` <> '') AND (`chohyo_type` =2)";
$tdatachohyo_by_dia_result[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachohyo_by_dia_result[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachohyo_by_dia_result[".arrGroupsPerPage"] = $arrGPP;

$tdatachohyo_by_dia_result[".highlightSearchResults"] = true;

$tableKeyschohyo_by_dia_result = array();
$tableKeyschohyo_by_dia_result[] = "product_id";
$tdatachohyo_by_dia_result[".Keys"] = $tableKeyschohyo_by_dia_result;

$tdatachohyo_by_dia_result[".listFields"] = array();
$tdatachohyo_by_dia_result[".listFields"][] = "onsya";
$tdatachohyo_by_dia_result[".listFields"][] = "status";
$tdatachohyo_by_dia_result[".listFields"][] = "chohyo_id";
$tdatachohyo_by_dia_result[".listFields"][] = "product_id";
$tdatachohyo_by_dia_result[".listFields"][] = "category_id";
$tdatachohyo_by_dia_result[".listFields"][] = "sub_category_id1";
$tdatachohyo_by_dia_result[".listFields"][] = "Parent_stone";
$tdatachohyo_by_dia_result[".listFields"][] = "description";
$tdatachohyo_by_dia_result[".listFields"][] = "satei_by";
$tdatachohyo_by_dia_result[".listFields"][] = "satei_hi";
$tdatachohyo_by_dia_result[".listFields"][] = "REG_AUTHOR";
$tdatachohyo_by_dia_result[".listFields"][] = "DT_UP_DATE";
$tdatachohyo_by_dia_result[".listFields"][] = "kaitori_by";
$tdatachohyo_by_dia_result[".listFields"][] = "kaitory_hi";

$tdatachohyo_by_dia_result[".hideMobileList"] = array();


$tdatachohyo_by_dia_result[".viewFields"] = array();

$tdatachohyo_by_dia_result[".addFields"] = array();

$tdatachohyo_by_dia_result[".masterListFields"] = array();
$tdatachohyo_by_dia_result[".masterListFields"][] = "chohyo_type";
$tdatachohyo_by_dia_result[".masterListFields"][] = "satei_by";
$tdatachohyo_by_dia_result[".masterListFields"][] = "satei_hi";
$tdatachohyo_by_dia_result[".masterListFields"][] = "REG_AUTHOR";
$tdatachohyo_by_dia_result[".masterListFields"][] = "DT_UP_DATE";
$tdatachohyo_by_dia_result[".masterListFields"][] = "kaitori_by";
$tdatachohyo_by_dia_result[".masterListFields"][] = "kaitory_hi";
$tdatachohyo_by_dia_result[".masterListFields"][] = "No";
$tdatachohyo_by_dia_result[".masterListFields"][] = "onsya";
$tdatachohyo_by_dia_result[".masterListFields"][] = "status";
$tdatachohyo_by_dia_result[".masterListFields"][] = "chohyo_id";
$tdatachohyo_by_dia_result[".masterListFields"][] = "product_id";
$tdatachohyo_by_dia_result[".masterListFields"][] = "category_id";
$tdatachohyo_by_dia_result[".masterListFields"][] = "sub_category_id1";
$tdatachohyo_by_dia_result[".masterListFields"][] = "Parent_stone";
$tdatachohyo_by_dia_result[".masterListFields"][] = "description";

$tdatachohyo_by_dia_result[".inlineAddFields"] = array();
$tdatachohyo_by_dia_result[".inlineAddFields"][] = "status";
$tdatachohyo_by_dia_result[".inlineAddFields"][] = "chohyo_id";
$tdatachohyo_by_dia_result[".inlineAddFields"][] = "category_id";
$tdatachohyo_by_dia_result[".inlineAddFields"][] = "sub_category_id1";
$tdatachohyo_by_dia_result[".inlineAddFields"][] = "Parent_stone";
$tdatachohyo_by_dia_result[".inlineAddFields"][] = "description";
$tdatachohyo_by_dia_result[".inlineAddFields"][] = "satei_by";
$tdatachohyo_by_dia_result[".inlineAddFields"][] = "satei_hi";
$tdatachohyo_by_dia_result[".inlineAddFields"][] = "REG_AUTHOR";
$tdatachohyo_by_dia_result[".inlineAddFields"][] = "DT_UP_DATE";
$tdatachohyo_by_dia_result[".inlineAddFields"][] = "kaitori_by";
$tdatachohyo_by_dia_result[".inlineAddFields"][] = "kaitory_hi";

$tdatachohyo_by_dia_result[".editFields"] = array();

$tdatachohyo_by_dia_result[".inlineEditFields"] = array();
$tdatachohyo_by_dia_result[".inlineEditFields"][] = "status";
$tdatachohyo_by_dia_result[".inlineEditFields"][] = "chohyo_id";
$tdatachohyo_by_dia_result[".inlineEditFields"][] = "category_id";
$tdatachohyo_by_dia_result[".inlineEditFields"][] = "sub_category_id1";
$tdatachohyo_by_dia_result[".inlineEditFields"][] = "Parent_stone";
$tdatachohyo_by_dia_result[".inlineEditFields"][] = "description";
$tdatachohyo_by_dia_result[".inlineEditFields"][] = "satei_by";
$tdatachohyo_by_dia_result[".inlineEditFields"][] = "satei_hi";
$tdatachohyo_by_dia_result[".inlineEditFields"][] = "REG_AUTHOR";
$tdatachohyo_by_dia_result[".inlineEditFields"][] = "DT_UP_DATE";
$tdatachohyo_by_dia_result[".inlineEditFields"][] = "kaitori_by";
$tdatachohyo_by_dia_result[".inlineEditFields"][] = "kaitory_hi";

$tdatachohyo_by_dia_result[".updateSelectedFields"] = array();


$tdatachohyo_by_dia_result[".exportFields"] = array();
$tdatachohyo_by_dia_result[".exportFields"][] = "onsya";
$tdatachohyo_by_dia_result[".exportFields"][] = "status";
$tdatachohyo_by_dia_result[".exportFields"][] = "chohyo_id";
$tdatachohyo_by_dia_result[".exportFields"][] = "product_id";
$tdatachohyo_by_dia_result[".exportFields"][] = "category_id";
$tdatachohyo_by_dia_result[".exportFields"][] = "sub_category_id1";
$tdatachohyo_by_dia_result[".exportFields"][] = "Parent_stone";
$tdatachohyo_by_dia_result[".exportFields"][] = "description";
$tdatachohyo_by_dia_result[".exportFields"][] = "satei_by";
$tdatachohyo_by_dia_result[".exportFields"][] = "satei_hi";
$tdatachohyo_by_dia_result[".exportFields"][] = "REG_AUTHOR";
$tdatachohyo_by_dia_result[".exportFields"][] = "DT_UP_DATE";
$tdatachohyo_by_dia_result[".exportFields"][] = "kaitori_by";
$tdatachohyo_by_dia_result[".exportFields"][] = "kaitory_hi";

$tdatachohyo_by_dia_result[".importFields"] = array();
$tdatachohyo_by_dia_result[".importFields"][] = "onsya";
$tdatachohyo_by_dia_result[".importFields"][] = "status";
$tdatachohyo_by_dia_result[".importFields"][] = "product_id";
$tdatachohyo_by_dia_result[".importFields"][] = "category_id";
$tdatachohyo_by_dia_result[".importFields"][] = "sub_category_id1";
$tdatachohyo_by_dia_result[".importFields"][] = "Parent_stone";
$tdatachohyo_by_dia_result[".importFields"][] = "description";
$tdatachohyo_by_dia_result[".importFields"][] = "chohyo_id";
$tdatachohyo_by_dia_result[".importFields"][] = "satei_by";
$tdatachohyo_by_dia_result[".importFields"][] = "satei_hi";
$tdatachohyo_by_dia_result[".importFields"][] = "REG_AUTHOR";
$tdatachohyo_by_dia_result[".importFields"][] = "DT_UP_DATE";
$tdatachohyo_by_dia_result[".importFields"][] = "kaitori_by";
$tdatachohyo_by_dia_result[".importFields"][] = "kaitory_hi";

$tdatachohyo_by_dia_result[".printFields"] = array();

//	No
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "No";
	$fdata["GoodName"] = "No";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia_result","No");
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








	$tdatachohyo_by_dia_result["No"] = $fdata;
//	onsya
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "onsya";
	$fdata["GoodName"] = "onsya";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia_result","onsya");
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




	$tdatachohyo_by_dia_result["onsya"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia_result","status");
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




	$tdatachohyo_by_dia_result["status"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia_result","product_id");
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




	$tdatachohyo_by_dia_result["product_id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia_result","category_id");
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




	$tdatachohyo_by_dia_result["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia_result","sub_category_id1");
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




	$tdatachohyo_by_dia_result["sub_category_id1"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia_result","Parent_stone");
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




	$tdatachohyo_by_dia_result["Parent_stone"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia_result","description");
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




	$tdatachohyo_by_dia_result["description"] = $fdata;
//	chohyo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "chohyo_id";
	$fdata["GoodName"] = "chohyo_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia_result","chohyo_id");
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




	$tdatachohyo_by_dia_result["chohyo_id"] = $fdata;
//	chohyo_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "chohyo_type";
	$fdata["GoodName"] = "chohyo_type";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia_result","chohyo_type");
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








	$tdatachohyo_by_dia_result["chohyo_type"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia_result","satei_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatachohyo_by_dia_result["satei_by"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia_result","satei_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatachohyo_by_dia_result["satei_hi"] = $fdata;
//	REG_AUTHOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "REG_AUTHOR";
	$fdata["GoodName"] = "REG_AUTHOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia_result","REG_AUTHOR");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatachohyo_by_dia_result["REG_AUTHOR"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia_result","DT_UP_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatachohyo_by_dia_result["DT_UP_DATE"] = $fdata;
//	kaitori_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "kaitori_by";
	$fdata["GoodName"] = "kaitori_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia_result","kaitori_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatachohyo_by_dia_result["kaitori_by"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "kaitory_hi";
	$fdata["GoodName"] = "kaitory_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("chohyo_by_dia_result","kaitory_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatachohyo_by_dia_result["kaitory_hi"] = $fdata;


$tables_data["chohyo_by_dia_result"]=&$tdatachohyo_by_dia_result;
$field_labels["chohyo_by_dia_result"] = &$fieldLabelschohyo_by_dia_result;
$fieldToolTips["chohyo_by_dia_result"] = &$fieldToolTipschohyo_by_dia_result;
$placeHolders["chohyo_by_dia_result"] = &$placeHolderschohyo_by_dia_result;
$page_titles["chohyo_by_dia_result"] = &$pageTitleschohyo_by_dia_result;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["chohyo_by_dia_result"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["chohyo_by_dia_result"] = array();


	
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
					$masterTablesData["chohyo_by_dia_result"][0] = $masterParams;
				$masterTablesData["chohyo_by_dia_result"][0]["masterKeys"] = array();
	$masterTablesData["chohyo_by_dia_result"][0]["masterKeys"][]="id";
				$masterTablesData["chohyo_by_dia_result"][0]["detailKeys"] = array();
	$masterTablesData["chohyo_by_dia_result"][0]["detailKeys"][]="chohyo_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_chohyo_by_dia_result()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "'' AS `No`,  '' AS `onsya`,  `status`,  `product_id`,  `category_id`,  `sub_category_id1`,  `Parent_stone`,  `description`,  `chohyo_id`,  `chohyo_type`,  `satei_by`,  `satei_hi`,  `REG_AUTHOR`,  `DT_UP_DATE`,  `kaitori_by`,  `kaitory_hi`";
$proto0["m_strFrom"] = "FROM `shouhin`";
$proto0["m_strWhere"] = "(`chohyo_id` <> '') AND (`chohyo_type` =2)";
$proto0["m_strOrderBy"] = "ORDER BY `product_id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(`chohyo_id` <> '') AND (`chohyo_type` =2)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(`chohyo_id` <> '') AND (`chohyo_type` =2)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`chohyo_id` <> ''";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "chohyo_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia_result"
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
$proto6["m_sql"] = "`chohyo_type` =2";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "chohyo_type",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia_result"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=2";
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
$proto10["m_srcTableName"] = "chohyo_by_dia_result";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "No";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto12["m_sql"] = "''";
$proto12["m_srcTableName"] = "chohyo_by_dia_result";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "onsya";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia_result"
));

$proto14["m_sql"] = "`status`";
$proto14["m_srcTableName"] = "chohyo_by_dia_result";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia_result"
));

$proto16["m_sql"] = "`product_id`";
$proto16["m_srcTableName"] = "chohyo_by_dia_result";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia_result"
));

$proto18["m_sql"] = "`category_id`";
$proto18["m_srcTableName"] = "chohyo_by_dia_result";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia_result"
));

$proto20["m_sql"] = "`sub_category_id1`";
$proto20["m_srcTableName"] = "chohyo_by_dia_result";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia_result"
));

$proto22["m_sql"] = "`Parent_stone`";
$proto22["m_srcTableName"] = "chohyo_by_dia_result";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia_result"
));

$proto24["m_sql"] = "`description`";
$proto24["m_srcTableName"] = "chohyo_by_dia_result";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "chohyo_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia_result"
));

$proto26["m_sql"] = "`chohyo_id`";
$proto26["m_srcTableName"] = "chohyo_by_dia_result";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "chohyo_type",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia_result"
));

$proto28["m_sql"] = "`chohyo_type`";
$proto28["m_srcTableName"] = "chohyo_by_dia_result";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia_result"
));

$proto30["m_sql"] = "`satei_by`";
$proto30["m_srcTableName"] = "chohyo_by_dia_result";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia_result"
));

$proto32["m_sql"] = "`satei_hi`";
$proto32["m_srcTableName"] = "chohyo_by_dia_result";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_AUTHOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia_result"
));

$proto34["m_sql"] = "`REG_AUTHOR`";
$proto34["m_srcTableName"] = "chohyo_by_dia_result";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia_result"
));

$proto36["m_sql"] = "`DT_UP_DATE`";
$proto36["m_srcTableName"] = "chohyo_by_dia_result";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia_result"
));

$proto38["m_sql"] = "`kaitori_by`";
$proto38["m_srcTableName"] = "chohyo_by_dia_result";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia_result"
));

$proto40["m_sql"] = "`kaitory_hi`";
$proto40["m_srcTableName"] = "chohyo_by_dia_result";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "shouhin";
$proto43["m_srcTableName"] = "chohyo_by_dia_result";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "product_id";
$proto43["m_columns"][] = "category_id";
$proto43["m_columns"][] = "goods_title";
$proto43["m_columns"][] = "title";
$proto43["m_columns"][] = "sub_category_id1";
$proto43["m_columns"][] = "ecc_id";
$proto43["m_columns"][] = "price";
$proto43["m_columns"][] = "yahoo";
$proto43["m_columns"][] = "remark";
$proto43["m_columns"][] = "sales_price";
$proto43["m_columns"][] = "description";
$proto43["m_columns"][] = "status";
$proto43["m_columns"][] = "product_num";
$proto43["m_columns"][] = "updated_at";
$proto43["m_columns"][] = "yahoo_size";
$proto43["m_columns"][] = "yahoo_title";
$proto43["m_columns"][] = "yahoo_junle";
$proto43["m_columns"][] = "yahoo_sankou_uwadai";
$proto43["m_columns"][] = "yahoo_sozai";
$proto43["m_columns"][] = "yahoo_color";
$proto43["m_columns"][] = "yahoo_kataban";
$proto43["m_columns"][] = "yahoo_condition1";
$proto43["m_columns"][] = "yahoo_condition2";
$proto43["m_columns"][] = "yahoo_fuzokuhin";
$proto43["m_columns"][] = "yahoo_sinaban";
$proto43["m_columns"][] = "yahoo_saisun_sha";
$proto43["m_columns"][] = "yahoo_sex";
$proto43["m_columns"][] = "box_id";
$proto43["m_columns"][] = "nyuukin_price";
$proto43["m_columns"][] = "updated_by";
$proto43["m_columns"][] = "raku_title";
$proto43["m_columns"][] = "raku_hyoujisaki_category2";
$proto43["m_columns"][] = "raku_hyoujisaki_category";
$proto43["m_columns"][] = "raku_hyoujisaki_category3";
$proto43["m_columns"][] = "timesta";
$proto43["m_columns"][] = "saisun_start";
$proto43["m_columns"][] = "saisun_end";
$proto43["m_columns"][] = "label_output_flag";
$proto43["m_columns"][] = "season";
$proto43["m_columns"][] = "kanryou_henbi";
$proto43["m_columns"][] = "box_sort";
$proto43["m_columns"][] = "satei_by";
$proto43["m_columns"][] = "kaitori_by";
$proto43["m_columns"][] = "comment";
$proto43["m_columns"][] = "satei_hi";
$proto43["m_columns"][] = "kaitory_hi";
$proto43["m_columns"][] = "REG_PHOTOGRAPHER";
$proto43["m_columns"][] = "REG_AUTHOR";
$proto43["m_columns"][] = "REG_PACKINGS";
$proto43["m_columns"][] = "REG_KAKOU_DATE";
$proto43["m_columns"][] = "REG_KAKOU";
$proto43["m_columns"][] = "REG_EXHIBITOR";
$proto43["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto43["m_columns"][] = "DT_PACKING_DATE";
$proto43["m_columns"][] = "DT_UP_DATE";
$proto43["m_columns"][] = "AWAZU_DATE";
$proto43["m_columns"][] = "AWAZU_NIN";
$proto43["m_columns"][] = "sabun_date";
$proto43["m_columns"][] = "browseid";
$proto43["m_columns"][] = "browsenode";
$proto43["m_columns"][] = "gold_property";
$proto43["m_columns"][] = "ichiba_title";
$proto43["m_columns"][] = "Gram";
$proto43["m_columns"][] = "Parent_stone";
$proto43["m_columns"][] = "Aside_stone";
$proto43["m_columns"][] = "Appraiser";
$proto43["m_columns"][] = "Remarks";
$proto43["m_columns"][] = "Destination_selling";
$proto43["m_columns"][] = "Finish";
$proto43["m_columns"][] = "Discrimination";
$proto43["m_columns"][] = "accessories";
$proto43["m_columns"][] = "priority";
$proto43["m_columns"][] = "A_storage";
$proto43["m_columns"][] = "price_per_gram";
$proto43["m_columns"][] = "price_per_parent_stone";
$proto43["m_columns"][] = "price_per_aside_stone";
$proto43["m_columns"][] = "price_secret";
$proto43["m_columns"][] = "sales_price_secret";
$proto43["m_columns"][] = "eq";
$proto43["m_columns"][] = "en";
$proto43["m_columns"][] = "line";
$proto43["m_columns"][] = "item_name";
$proto43["m_columns"][] = "handle";
$proto43["m_columns"][] = "yahoo_color_id";
$proto43["m_columns"][] = "raku_hyoujisaki_category4";
$proto43["m_columns"][] = "raku_hyoujisaki_category5";
$proto43["m_columns"][] = "raku_dir_1";
$proto43["m_columns"][] = "raku_dir_2";
$proto43["m_columns"][] = "raku_dir_3";
$proto43["m_columns"][] = "raku_dir_4";
$proto43["m_columns"][] = "raku_dir_5";
$proto43["m_columns"][] = "raku_dir_result";
$proto43["m_columns"][] = "raku_tag_result";
$proto43["m_columns"][] = "serial_number";
$proto43["m_columns"][] = "Exhibition_Date";
$proto43["m_columns"][] = "search_keyword";
$proto43["m_columns"][] = "stamp";
$proto43["m_columns"][] = "motif";
$proto43["m_columns"][] = "Setting";
$proto43["m_columns"][] = "processing";
$proto43["m_columns"][] = "Sleeve_Length";
$proto43["m_columns"][] = "length";
$proto43["m_columns"][] = "Ring_size";
$proto43["m_columns"][] = "price_for_site";
$proto43["m_columns"][] = "yahoo_category_id";
$proto43["m_columns"][] = "Qty";
$proto43["m_columns"][] = "sales_period";
$proto43["m_columns"][] = "starting_price";
$proto43["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto43["m_columns"][] = "amount_of_image";
$proto43["m_columns"][] = "csv";
$proto43["m_columns"][] = "return_output_flag";
$proto43["m_columns"][] = "wasabi_flag";
$proto43["m_columns"][] = "ws_import_date";
$proto43["m_columns"][] = "logo";
$proto43["m_columns"][] = "parts";
$proto43["m_columns"][] = "country_of_origin";
$proto43["m_columns"][] = "zipper";
$proto43["m_columns"][] = "guarantee";
$proto43["m_columns"][] = "errors";
$proto43["m_columns"][] = "designer";
$proto43["m_columns"][] = "hahakai";
$proto43["m_columns"][] = "effect";
$proto43["m_columns"][] = "shape";
$proto43["m_columns"][] = "cutting_style";
$proto43["m_columns"][] = "chain_type";
$proto43["m_columns"][] = "number_of_stones";
$proto43["m_columns"][] = "amount";
$proto43["m_columns"][] = "satei_error";
$proto43["m_columns"][] = "producing_area";
$proto43["m_columns"][] = "shape_supplement";
$proto43["m_columns"][] = "side_gem";
$proto43["m_columns"][] = "product_style";
$proto43["m_columns"][] = "collar_neck_line";
$proto43["m_columns"][] = "breast";
$proto43["m_columns"][] = "silhouette";
$proto43["m_columns"][] = "sleeve";
$proto43["m_columns"][] = "unit";
$proto43["m_columns"][] = "hall_mark";
$proto43["m_columns"][] = "plate";
$proto43["m_columns"][] = "toe";
$proto43["m_columns"][] = "heel";
$proto43["m_columns"][] = "cloth";
$proto43["m_columns"][] = "serial_number_for_storage";
$proto43["m_columns"][] = "official_url";
$proto43["m_columns"][] = "main_details";
$proto43["m_columns"][] = "notation_size";
$proto43["m_columns"][] = "shoe_size_jp";
$proto43["m_columns"][] = "Eoc_chigins2_id";
$proto43["m_columns"][] = "country_of_origin_name";
$proto43["m_columns"][] = "mailingkit_id";
$proto43["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto43["m_columns"][] = "DA_WEIGHT";
$proto43["m_columns"][] = "DA_PER_CARAT";
$proto43["m_columns"][] = "DA_SHAPE";
$proto43["m_columns"][] = "DA_SELFGRES";
$proto43["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto43["m_columns"][] = "DA_SUGARCANE";
$proto43["m_columns"][] = "DA_RAPA";
$proto43["m_columns"][] = "DA_INTENSITY";
$proto43["m_columns"][] = "DA_OVERTONE";
$proto43["m_columns"][] = "DA_COLOR";
$proto43["m_columns"][] = "DA_CLARITY";
$proto43["m_columns"][] = "DA_CUT";
$proto43["m_columns"][] = "DA_POLISH";
$proto43["m_columns"][] = "DA_SYMMETRY";
$proto43["m_columns"][] = "DA_FLUO";
$proto43["m_columns"][] = "DA_COLOR_FLUO";
$proto43["m_columns"][] = "DA_WIDE";
$proto43["m_columns"][] = "DA_HIGH";
$proto43["m_columns"][] = "DA_DEPTH";
$proto43["m_columns"][] = "DA_APPRAISER";
$proto43["m_columns"][] = "DA_FRAPA";
$proto43["m_columns"][] = "DA_RATE";
$proto43["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto43["m_columns"][] = "DA_YOURNAME";
$proto43["m_columns"][] = "DA_RAPAB";
$proto43["m_columns"][] = "DA_GROSSPROFIT";
$proto43["m_columns"][] = "DA_INTEREST_1";
$proto43["m_columns"][] = "DA_no";
$proto43["m_columns"][] = "kinsa_flag";
$proto43["m_columns"][] = "price_for_site_flag";
$proto43["m_columns"][] = "Eoc_takuhai_id";
$proto43["m_columns"][] = "Eoc_unfinished_id";
$proto43["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto43["m_columns"][] = "chohyo_id";
$proto43["m_columns"][] = "location";
$proto43["m_columns"][] = "special_instructions_1";
$proto43["m_columns"][] = "special_instructions_2";
$proto43["m_columns"][] = "special_instructions_3";
$proto43["m_columns"][] = "chohyo_seihin_flag";
$proto43["m_columns"][] = "chohyo_dia_flag";
$proto43["m_columns"][] = "chohyo_type";
$proto43["m_columns"][] = "ichiyen_flag";
$proto43["m_columns"][] = "asuraku_fuka_flag";
$proto43["m_columns"][] = "parallel_import_flag";
$proto43["m_columns"][] = "meisai_number";
$proto43["m_columns"][] = "days_keep_price";
$proto43["m_columns"][] = "initial_included";
$proto43["m_columns"][] = "novelty";
$proto43["m_columns"][] = "tentou_label_output_flag";
$proto43["m_columns"][] = "itaku_flag";
$proto43["m_columns"][] = "including_catch";
$proto43["m_columns"][] = "ichiba_meeting_month";
$proto43["m_columns"][] = "ichiba_meeting_name";
$proto43["m_columns"][] = "ichiba_color";
$proto43["m_columns"][] = "ichiba_clarity";
$proto43["m_columns"][] = "ichiba_melee_gai";
$proto43["m_columns"][] = "ichiba_lot_pieces";
$proto43["m_columns"][] = "ichiba_image";
$proto43["m_columns"][] = "ichiba_img";
$proto43["m_columns"][] = "gold_check_id";
$proto43["m_columns"][] = "ichiba_exhibition_id";
$proto43["m_columns"][] = "ichiba_exhibition_sort";
$proto43["m_columns"][] = "cost";
$proto43["m_columns"][] = "auto_price_cut_prohibited";
$proto43["m_columns"][] = "event_price";
$proto43["m_columns"][] = "identification_cost";
$proto43["m_columns"][] = "other_cost";
$proto43["m_columns"][] = "stock_quantity";
$proto43["m_columns"][] = "Eoc_trader_id_for_buy";
$proto43["m_columns"][] = "Eoc_trader_id_for_sell";
$proto43["m_columns"][] = "multiplication_rate";
$proto43["m_columns"][] = "many_product_group_id";
$proto43["m_columns"][] = "trading_sort_id";
$proto43["m_columns"][] = "many_product_group_saiban";
$proto43["m_columns"][] = "purchase_category";
$proto43["m_columns"][] = "created_at";
$proto43["m_columns"][] = "created_by";
$proto43["m_columns"][] = "manual_input_price_per_gram";
$proto43["m_columns"][] = "satei_start";
$proto43["m_columns"][] = "self_DA_INTENSITY";
$proto43["m_columns"][] = "self_DA_OVERTONE";
$proto43["m_columns"][] = "self_DA_COLOR";
$proto43["m_columns"][] = "self_DA_CLARITY";
$proto43["m_columns"][] = "self_DA_CUT";
$proto43["m_columns"][] = "self_DA_POLISH";
$proto43["m_columns"][] = "self_DA_SYMMETRY";
$proto43["m_columns"][] = "self_DA_FLUO";
$proto43["m_columns"][] = "self_DA_COLOR_FLUO";
$proto43["m_columns"][] = "self_DA_FRAPA";
$proto43["m_columns"][] = "self_DA_RATE";
$proto43["m_columns"][] = "self_multiplication_rate";
$proto43["m_columns"][] = "is_seiyaku";
$proto43["m_columns"][] = "destination_sold_out";
$proto43["m_columns"][] = "mypage_update_prohibited";
$proto43["m_columns"][] = "gold_check_scan_id";
$proto43["m_columns"][] = "buy_campaign_data_id";
$proto43["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto43["m_columns"][] = "commission";
$proto43["m_columns"][] = "addtime_gold_check_id";
$proto43["m_columns"][] = "is_recovery";
$proto43["m_columns"][] = "sales_cost";
$proto43["m_columns"][] = "mst_business_partner_id";
$proto43["m_columns"][] = "DA_GROSSPROFIT_2";
$proto43["m_columns"][] = "DA_INTEREST_2";
$proto43["m_columns"][] = "minus_weight";
$proto43["m_columns"][] = "diameter_size";
$proto43["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "`shouhin`";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "chohyo_by_dia_result";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "chohyo_by_dia_result"
));

$proto46["m_column"]=$obj;
$proto46["m_bAsc"] = 0;
$proto46["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto46);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="chohyo_by_dia_result";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chohyo_by_dia_result = createSqlQuery_chohyo_by_dia_result();


	
		;

																

$tdatachohyo_by_dia_result[".sqlquery"] = $queryData_chohyo_by_dia_result;

include_once(getabspath("include/chohyo_by_dia_result_events.php"));
$tableEvents["chohyo_by_dia_result"] = new eventclass_chohyo_by_dia_result;
$tdatachohyo_by_dia_result[".hasEvents"] = true;

?>