<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_gold_of_bullion_merchants = array();
	$tdatamst_gold_of_bullion_merchants[".truncateText"] = true;
	$tdatamst_gold_of_bullion_merchants[".NumberOfChars"] = 80;
	$tdatamst_gold_of_bullion_merchants[".ShortName"] = "mst_gold_of_bullion_merchants";
	$tdatamst_gold_of_bullion_merchants[".OwnerID"] = "";
	$tdatamst_gold_of_bullion_merchants[".OriginalTable"] = "mst_gold_of_bullion_merchants";

//	field labels
$fieldLabelsmst_gold_of_bullion_merchants = array();
$fieldToolTipsmst_gold_of_bullion_merchants = array();
$pageTitlesmst_gold_of_bullion_merchants = array();
$placeHoldersmst_gold_of_bullion_merchants = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_gold_of_bullion_merchants["Japanese"] = array();
	$fieldToolTipsmst_gold_of_bullion_merchants["Japanese"] = array();
	$placeHoldersmst_gold_of_bullion_merchants["Japanese"] = array();
	$pageTitlesmst_gold_of_bullion_merchants["Japanese"] = array();
	$fieldLabelsmst_gold_of_bullion_merchants["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_gold_of_bullion_merchants["Japanese"]["id"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["Japanese"]["id"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["Japanese"]["name"] = "名称";
	$fieldToolTipsmst_gold_of_bullion_merchants["Japanese"]["name"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["Japanese"]["name"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_gold_of_bullion_merchants["Japanese"]["create_at"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["Japanese"]["create_at"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_gold_of_bullion_merchants["Japanese"]["create_by"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["Japanese"]["create_by"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_gold_of_bullion_merchants["Japanese"]["update_at"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["Japanese"]["update_at"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_gold_of_bullion_merchants["Japanese"]["update_by"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["Japanese"]["update_by"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_gold_of_bullion_merchants["Japanese"]["sort"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["Japanese"]["sort"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["Japanese"]["price"] = "金額";
	$fieldToolTipsmst_gold_of_bullion_merchants["Japanese"]["price"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["Japanese"]["price"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["Japanese"]["rate"] = "料率";
	$fieldToolTipsmst_gold_of_bullion_merchants["Japanese"]["rate"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["Japanese"]["rate"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["Japanese"]["addition_price"] = "加算額";
	$fieldToolTipsmst_gold_of_bullion_merchants["Japanese"]["addition_price"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["Japanese"]["addition_price"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["Japanese"]["category"] = "金性";
	$fieldToolTipsmst_gold_of_bullion_merchants["Japanese"]["category"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["Japanese"]["category"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["Japanese"]["formula"] = "計算式";
	$fieldToolTipsmst_gold_of_bullion_merchants["Japanese"]["formula"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["Japanese"]["formula"] = "";
	if (count($fieldToolTipsmst_gold_of_bullion_merchants["Japanese"]))
		$tdatamst_gold_of_bullion_merchants[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_gold_of_bullion_merchants[""] = array();
	$fieldToolTipsmst_gold_of_bullion_merchants[""] = array();
	$placeHoldersmst_gold_of_bullion_merchants[""] = array();
	$pageTitlesmst_gold_of_bullion_merchants[""] = array();
	$fieldLabelsmst_gold_of_bullion_merchants[""]["id"] = "Id";
	$fieldToolTipsmst_gold_of_bullion_merchants[""]["id"] = "";
	$placeHoldersmst_gold_of_bullion_merchants[""]["id"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants[""]["name"] = "Name";
	$fieldToolTipsmst_gold_of_bullion_merchants[""]["name"] = "";
	$placeHoldersmst_gold_of_bullion_merchants[""]["name"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants[""]["create_at"] = "Create At";
	$fieldToolTipsmst_gold_of_bullion_merchants[""]["create_at"] = "";
	$placeHoldersmst_gold_of_bullion_merchants[""]["create_at"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants[""]["create_by"] = "Create By";
	$fieldToolTipsmst_gold_of_bullion_merchants[""]["create_by"] = "";
	$placeHoldersmst_gold_of_bullion_merchants[""]["create_by"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants[""]["update_at"] = "Update At";
	$fieldToolTipsmst_gold_of_bullion_merchants[""]["update_at"] = "";
	$placeHoldersmst_gold_of_bullion_merchants[""]["update_at"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants[""]["update_by"] = "Update By";
	$fieldToolTipsmst_gold_of_bullion_merchants[""]["update_by"] = "";
	$placeHoldersmst_gold_of_bullion_merchants[""]["update_by"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants[""]["sort"] = "Sort";
	$fieldToolTipsmst_gold_of_bullion_merchants[""]["sort"] = "";
	$placeHoldersmst_gold_of_bullion_merchants[""]["sort"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants[""]["price"] = "Price";
	$fieldToolTipsmst_gold_of_bullion_merchants[""]["price"] = "";
	$placeHoldersmst_gold_of_bullion_merchants[""]["price"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants[""]["rate"] = "Rate";
	$fieldToolTipsmst_gold_of_bullion_merchants[""]["rate"] = "";
	$placeHoldersmst_gold_of_bullion_merchants[""]["rate"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants[""]["addition_price"] = "Addition Price";
	$fieldToolTipsmst_gold_of_bullion_merchants[""]["addition_price"] = "";
	$placeHoldersmst_gold_of_bullion_merchants[""]["addition_price"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants[""]["category"] = "Category";
	$fieldToolTipsmst_gold_of_bullion_merchants[""]["category"] = "";
	$placeHoldersmst_gold_of_bullion_merchants[""]["category"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants[""]["formula"] = "Formula";
	$fieldToolTipsmst_gold_of_bullion_merchants[""]["formula"] = "";
	$placeHoldersmst_gold_of_bullion_merchants[""]["formula"] = "";
	if (count($fieldToolTipsmst_gold_of_bullion_merchants[""]))
		$tdatamst_gold_of_bullion_merchants[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_gold_of_bullion_merchants["English"] = array();
	$fieldToolTipsmst_gold_of_bullion_merchants["English"] = array();
	$placeHoldersmst_gold_of_bullion_merchants["English"] = array();
	$pageTitlesmst_gold_of_bullion_merchants["English"] = array();
	$fieldLabelsmst_gold_of_bullion_merchants["English"]["id"] = "Id";
	$fieldToolTipsmst_gold_of_bullion_merchants["English"]["id"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["English"]["id"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["English"]["name"] = "Name";
	$fieldToolTipsmst_gold_of_bullion_merchants["English"]["name"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["English"]["name"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_gold_of_bullion_merchants["English"]["create_at"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["English"]["create_at"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_gold_of_bullion_merchants["English"]["create_by"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["English"]["create_by"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_gold_of_bullion_merchants["English"]["update_at"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["English"]["update_at"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_gold_of_bullion_merchants["English"]["update_by"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["English"]["update_by"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["English"]["sort"] = "Sort";
	$fieldToolTipsmst_gold_of_bullion_merchants["English"]["sort"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["English"]["sort"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["English"]["price"] = "Price";
	$fieldToolTipsmst_gold_of_bullion_merchants["English"]["price"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["English"]["price"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["English"]["rate"] = "Rate";
	$fieldToolTipsmst_gold_of_bullion_merchants["English"]["rate"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["English"]["rate"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["English"]["addition_price"] = "Addition Price";
	$fieldToolTipsmst_gold_of_bullion_merchants["English"]["addition_price"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["English"]["addition_price"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["English"]["category"] = "Category";
	$fieldToolTipsmst_gold_of_bullion_merchants["English"]["category"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["English"]["category"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants["English"]["formula"] = "Formula";
	$fieldToolTipsmst_gold_of_bullion_merchants["English"]["formula"] = "";
	$placeHoldersmst_gold_of_bullion_merchants["English"]["formula"] = "";
	if (count($fieldToolTipsmst_gold_of_bullion_merchants["English"]))
		$tdatamst_gold_of_bullion_merchants[".isUseToolTips"] = true;
}


	$tdatamst_gold_of_bullion_merchants[".NCSearch"] = true;



$tdatamst_gold_of_bullion_merchants[".shortTableName"] = "mst_gold_of_bullion_merchants";
$tdatamst_gold_of_bullion_merchants[".nSecOptions"] = 0;
$tdatamst_gold_of_bullion_merchants[".recsPerRowPrint"] = 1;
$tdatamst_gold_of_bullion_merchants[".mainTableOwnerID"] = "";
$tdatamst_gold_of_bullion_merchants[".moveNext"] = 1;
$tdatamst_gold_of_bullion_merchants[".entityType"] = 0;

$tdatamst_gold_of_bullion_merchants[".strOriginalTableName"] = "mst_gold_of_bullion_merchants";

	



$tdatamst_gold_of_bullion_merchants[".showAddInPopup"] = false;

$tdatamst_gold_of_bullion_merchants[".showEditInPopup"] = false;

$tdatamst_gold_of_bullion_merchants[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_gold_of_bullion_merchants[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_gold_of_bullion_merchants[".fieldsForRegister"] = array();

$tdatamst_gold_of_bullion_merchants[".listAjax"] = false;

	$tdatamst_gold_of_bullion_merchants[".audit"] = false;

	$tdatamst_gold_of_bullion_merchants[".locking"] = false;



$tdatamst_gold_of_bullion_merchants[".list"] = true;

$tdatamst_gold_of_bullion_merchants[".inlineEdit"] = true;


$tdatamst_gold_of_bullion_merchants[".reorderRecordsByHeader"] = true;



$tdatamst_gold_of_bullion_merchants[".inlineAdd"] = true;

$tdatamst_gold_of_bullion_merchants[".import"] = true;

$tdatamst_gold_of_bullion_merchants[".exportTo"] = true;


$tdatamst_gold_of_bullion_merchants[".delete"] = true;

$tdatamst_gold_of_bullion_merchants[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_gold_of_bullion_merchants[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_gold_of_bullion_merchants[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_gold_of_bullion_merchants[".searchSaving"] = false;
//

$tdatamst_gold_of_bullion_merchants[".showSearchPanel"] = true;
		$tdatamst_gold_of_bullion_merchants[".flexibleSearch"] = true;

$tdatamst_gold_of_bullion_merchants[".isUseAjaxSuggest"] = true;

$tdatamst_gold_of_bullion_merchants[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_gold_of_bullion_merchants[".ajaxCodeSnippetAdded"] = false;

$tdatamst_gold_of_bullion_merchants[".buttonsAdded"] = false;

$tdatamst_gold_of_bullion_merchants[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_gold_of_bullion_merchants[".isUseTimeForSearch"] = false;





$tdatamst_gold_of_bullion_merchants[".allSearchFields"] = array();
$tdatamst_gold_of_bullion_merchants[".filterFields"] = array();
$tdatamst_gold_of_bullion_merchants[".requiredSearchFields"] = array();

$tdatamst_gold_of_bullion_merchants[".allSearchFields"][] = "id";
	$tdatamst_gold_of_bullion_merchants[".allSearchFields"][] = "name";
	$tdatamst_gold_of_bullion_merchants[".allSearchFields"][] = "category";
	$tdatamst_gold_of_bullion_merchants[".allSearchFields"][] = "rate";
	$tdatamst_gold_of_bullion_merchants[".allSearchFields"][] = "addition_price";
	$tdatamst_gold_of_bullion_merchants[".allSearchFields"][] = "formula";
	$tdatamst_gold_of_bullion_merchants[".allSearchFields"][] = "sort";
	$tdatamst_gold_of_bullion_merchants[".allSearchFields"][] = "create_at";
	$tdatamst_gold_of_bullion_merchants[".allSearchFields"][] = "create_by";
	$tdatamst_gold_of_bullion_merchants[".allSearchFields"][] = "update_at";
	$tdatamst_gold_of_bullion_merchants[".allSearchFields"][] = "update_by";
	

$tdatamst_gold_of_bullion_merchants[".googleLikeFields"] = array();
$tdatamst_gold_of_bullion_merchants[".googleLikeFields"][] = "id";
$tdatamst_gold_of_bullion_merchants[".googleLikeFields"][] = "name";
$tdatamst_gold_of_bullion_merchants[".googleLikeFields"][] = "create_at";
$tdatamst_gold_of_bullion_merchants[".googleLikeFields"][] = "create_by";
$tdatamst_gold_of_bullion_merchants[".googleLikeFields"][] = "update_at";
$tdatamst_gold_of_bullion_merchants[".googleLikeFields"][] = "update_by";
$tdatamst_gold_of_bullion_merchants[".googleLikeFields"][] = "sort";
$tdatamst_gold_of_bullion_merchants[".googleLikeFields"][] = "price";
$tdatamst_gold_of_bullion_merchants[".googleLikeFields"][] = "rate";
$tdatamst_gold_of_bullion_merchants[".googleLikeFields"][] = "addition_price";
$tdatamst_gold_of_bullion_merchants[".googleLikeFields"][] = "category";
$tdatamst_gold_of_bullion_merchants[".googleLikeFields"][] = "formula";


$tdatamst_gold_of_bullion_merchants[".advSearchFields"] = array();
$tdatamst_gold_of_bullion_merchants[".advSearchFields"][] = "id";
$tdatamst_gold_of_bullion_merchants[".advSearchFields"][] = "name";
$tdatamst_gold_of_bullion_merchants[".advSearchFields"][] = "category";
$tdatamst_gold_of_bullion_merchants[".advSearchFields"][] = "rate";
$tdatamst_gold_of_bullion_merchants[".advSearchFields"][] = "addition_price";
$tdatamst_gold_of_bullion_merchants[".advSearchFields"][] = "formula";
$tdatamst_gold_of_bullion_merchants[".advSearchFields"][] = "sort";
$tdatamst_gold_of_bullion_merchants[".advSearchFields"][] = "create_at";
$tdatamst_gold_of_bullion_merchants[".advSearchFields"][] = "create_by";
$tdatamst_gold_of_bullion_merchants[".advSearchFields"][] = "update_at";
$tdatamst_gold_of_bullion_merchants[".advSearchFields"][] = "update_by";

$tdatamst_gold_of_bullion_merchants[".tableType"] = "list";

$tdatamst_gold_of_bullion_merchants[".printerPageOrientation"] = 0;
$tdatamst_gold_of_bullion_merchants[".nPrinterPageScale"] = 100;

$tdatamst_gold_of_bullion_merchants[".nPrinterSplitRecords"] = 40;

$tdatamst_gold_of_bullion_merchants[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_gold_of_bullion_merchants[".geocodingEnabled"] = false;





$tdatamst_gold_of_bullion_merchants[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_gold_of_bullion_merchants[".pageSize"] = 500;

$tdatamst_gold_of_bullion_merchants[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_gold_of_bullion_merchants[".strOrderBy"] = $tstrOrderBy;

$tdatamst_gold_of_bullion_merchants[".orderindexes"] = array();
$tdatamst_gold_of_bullion_merchants[".orderindexes"][] = array(7, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_gold_of_bullion_merchants[".sqlHead"] = "SELECT `id`,  `name`,  `create_at`,  `create_by`,  `update_at`,  `update_by`,  `sort`,  `price`,  `rate`,  `addition_price`,  `category`,  `formula`";
$tdatamst_gold_of_bullion_merchants[".sqlFrom"] = "FROM `mst_gold_of_bullion_merchants`";
$tdatamst_gold_of_bullion_merchants[".sqlWhereExpr"] = "";
$tdatamst_gold_of_bullion_merchants[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_gold_of_bullion_merchants[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_gold_of_bullion_merchants[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_gold_of_bullion_merchants[".highlightSearchResults"] = true;

$tableKeysmst_gold_of_bullion_merchants = array();
$tableKeysmst_gold_of_bullion_merchants[] = "id";
$tdatamst_gold_of_bullion_merchants[".Keys"] = $tableKeysmst_gold_of_bullion_merchants;

$tdatamst_gold_of_bullion_merchants[".listFields"] = array();
$tdatamst_gold_of_bullion_merchants[".listFields"][] = "id";
$tdatamst_gold_of_bullion_merchants[".listFields"][] = "name";
$tdatamst_gold_of_bullion_merchants[".listFields"][] = "category";
$tdatamst_gold_of_bullion_merchants[".listFields"][] = "rate";
$tdatamst_gold_of_bullion_merchants[".listFields"][] = "addition_price";
$tdatamst_gold_of_bullion_merchants[".listFields"][] = "formula";
$tdatamst_gold_of_bullion_merchants[".listFields"][] = "sort";
$tdatamst_gold_of_bullion_merchants[".listFields"][] = "create_at";
$tdatamst_gold_of_bullion_merchants[".listFields"][] = "create_by";
$tdatamst_gold_of_bullion_merchants[".listFields"][] = "update_at";
$tdatamst_gold_of_bullion_merchants[".listFields"][] = "update_by";

$tdatamst_gold_of_bullion_merchants[".hideMobileList"] = array();


$tdatamst_gold_of_bullion_merchants[".viewFields"] = array();

$tdatamst_gold_of_bullion_merchants[".addFields"] = array();

$tdatamst_gold_of_bullion_merchants[".masterListFields"] = array();
$tdatamst_gold_of_bullion_merchants[".masterListFields"][] = "id";
$tdatamst_gold_of_bullion_merchants[".masterListFields"][] = "name";
$tdatamst_gold_of_bullion_merchants[".masterListFields"][] = "category";
$tdatamst_gold_of_bullion_merchants[".masterListFields"][] = "rate";
$tdatamst_gold_of_bullion_merchants[".masterListFields"][] = "addition_price";
$tdatamst_gold_of_bullion_merchants[".masterListFields"][] = "price";
$tdatamst_gold_of_bullion_merchants[".masterListFields"][] = "formula";
$tdatamst_gold_of_bullion_merchants[".masterListFields"][] = "sort";
$tdatamst_gold_of_bullion_merchants[".masterListFields"][] = "create_at";
$tdatamst_gold_of_bullion_merchants[".masterListFields"][] = "create_by";
$tdatamst_gold_of_bullion_merchants[".masterListFields"][] = "update_at";
$tdatamst_gold_of_bullion_merchants[".masterListFields"][] = "update_by";

$tdatamst_gold_of_bullion_merchants[".inlineAddFields"] = array();
$tdatamst_gold_of_bullion_merchants[".inlineAddFields"][] = "name";
$tdatamst_gold_of_bullion_merchants[".inlineAddFields"][] = "category";
$tdatamst_gold_of_bullion_merchants[".inlineAddFields"][] = "rate";
$tdatamst_gold_of_bullion_merchants[".inlineAddFields"][] = "addition_price";
$tdatamst_gold_of_bullion_merchants[".inlineAddFields"][] = "formula";
$tdatamst_gold_of_bullion_merchants[".inlineAddFields"][] = "sort";

$tdatamst_gold_of_bullion_merchants[".editFields"] = array();

$tdatamst_gold_of_bullion_merchants[".inlineEditFields"] = array();
$tdatamst_gold_of_bullion_merchants[".inlineEditFields"][] = "name";
$tdatamst_gold_of_bullion_merchants[".inlineEditFields"][] = "category";
$tdatamst_gold_of_bullion_merchants[".inlineEditFields"][] = "rate";
$tdatamst_gold_of_bullion_merchants[".inlineEditFields"][] = "addition_price";
$tdatamst_gold_of_bullion_merchants[".inlineEditFields"][] = "formula";
$tdatamst_gold_of_bullion_merchants[".inlineEditFields"][] = "sort";

$tdatamst_gold_of_bullion_merchants[".updateSelectedFields"] = array();


$tdatamst_gold_of_bullion_merchants[".exportFields"] = array();
$tdatamst_gold_of_bullion_merchants[".exportFields"][] = "id";
$tdatamst_gold_of_bullion_merchants[".exportFields"][] = "name";
$tdatamst_gold_of_bullion_merchants[".exportFields"][] = "category";
$tdatamst_gold_of_bullion_merchants[".exportFields"][] = "rate";
$tdatamst_gold_of_bullion_merchants[".exportFields"][] = "addition_price";
$tdatamst_gold_of_bullion_merchants[".exportFields"][] = "formula";
$tdatamst_gold_of_bullion_merchants[".exportFields"][] = "sort";
$tdatamst_gold_of_bullion_merchants[".exportFields"][] = "create_at";
$tdatamst_gold_of_bullion_merchants[".exportFields"][] = "create_by";
$tdatamst_gold_of_bullion_merchants[".exportFields"][] = "update_at";
$tdatamst_gold_of_bullion_merchants[".exportFields"][] = "update_by";

$tdatamst_gold_of_bullion_merchants[".importFields"] = array();
$tdatamst_gold_of_bullion_merchants[".importFields"][] = "id";
$tdatamst_gold_of_bullion_merchants[".importFields"][] = "name";
$tdatamst_gold_of_bullion_merchants[".importFields"][] = "sort";
$tdatamst_gold_of_bullion_merchants[".importFields"][] = "rate";
$tdatamst_gold_of_bullion_merchants[".importFields"][] = "addition_price";
$tdatamst_gold_of_bullion_merchants[".importFields"][] = "category";
$tdatamst_gold_of_bullion_merchants[".importFields"][] = "formula";

$tdatamst_gold_of_bullion_merchants[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants","id");
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




	$tdatamst_gold_of_bullion_merchants["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`name`";

	
	
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




	$tdatamst_gold_of_bullion_merchants["name"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_at`";

	
	
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




	$tdatamst_gold_of_bullion_merchants["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_by`";

	
	
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




	$tdatamst_gold_of_bullion_merchants["create_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_at`";

	
	
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




	$tdatamst_gold_of_bullion_merchants["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_by`";

	
	
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




	$tdatamst_gold_of_bullion_merchants["update_by"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sort`";

	
	
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




	$tdatamst_gold_of_bullion_merchants["sort"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants","price");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`price`";

	
	
			
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








	$tdatamst_gold_of_bullion_merchants["price"] = $fdata;
//	rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "rate";
	$fdata["GoodName"] = "rate";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants","rate");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`rate`";

	
	
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




	$tdatamst_gold_of_bullion_merchants["rate"] = $fdata;
//	addition_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "addition_price";
	$fdata["GoodName"] = "addition_price";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants","addition_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "addition_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`addition_price`";

	
	
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




	$tdatamst_gold_of_bullion_merchants["addition_price"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants","category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatamst_gold_of_bullion_merchants["category"] = $fdata;
//	formula
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "formula";
	$fdata["GoodName"] = "formula";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants","formula");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "formula";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`formula`";

	
	
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




	$tdatamst_gold_of_bullion_merchants["formula"] = $fdata;


$tables_data["mst_gold_of_bullion_merchants"]=&$tdatamst_gold_of_bullion_merchants;
$field_labels["mst_gold_of_bullion_merchants"] = &$fieldLabelsmst_gold_of_bullion_merchants;
$fieldToolTips["mst_gold_of_bullion_merchants"] = &$fieldToolTipsmst_gold_of_bullion_merchants;
$placeHolders["mst_gold_of_bullion_merchants"] = &$placeHoldersmst_gold_of_bullion_merchants;
$page_titles["mst_gold_of_bullion_merchants"] = &$pageTitlesmst_gold_of_bullion_merchants;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_gold_of_bullion_merchants"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_gold_of_bullion_merchants"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_gold_of_bullion_merchants()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `create_at`,  `create_by`,  `update_at`,  `update_by`,  `sort`,  `price`,  `rate`,  `addition_price`,  `category`,  `formula`";
$proto0["m_strFrom"] = "FROM `mst_gold_of_bullion_merchants`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `sort`";
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
	"m_strTable" => "mst_gold_of_bullion_merchants",
	"m_srcTableName" => "mst_gold_of_bullion_merchants"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_gold_of_bullion_merchants";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_gold_of_bullion_merchants",
	"m_srcTableName" => "mst_gold_of_bullion_merchants"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_gold_of_bullion_merchants";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_gold_of_bullion_merchants",
	"m_srcTableName" => "mst_gold_of_bullion_merchants"
));

$proto10["m_sql"] = "`create_at`";
$proto10["m_srcTableName"] = "mst_gold_of_bullion_merchants";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_gold_of_bullion_merchants",
	"m_srcTableName" => "mst_gold_of_bullion_merchants"
));

$proto12["m_sql"] = "`create_by`";
$proto12["m_srcTableName"] = "mst_gold_of_bullion_merchants";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_gold_of_bullion_merchants",
	"m_srcTableName" => "mst_gold_of_bullion_merchants"
));

$proto14["m_sql"] = "`update_at`";
$proto14["m_srcTableName"] = "mst_gold_of_bullion_merchants";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_gold_of_bullion_merchants",
	"m_srcTableName" => "mst_gold_of_bullion_merchants"
));

$proto16["m_sql"] = "`update_by`";
$proto16["m_srcTableName"] = "mst_gold_of_bullion_merchants";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_gold_of_bullion_merchants",
	"m_srcTableName" => "mst_gold_of_bullion_merchants"
));

$proto18["m_sql"] = "`sort`";
$proto18["m_srcTableName"] = "mst_gold_of_bullion_merchants";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "mst_gold_of_bullion_merchants",
	"m_srcTableName" => "mst_gold_of_bullion_merchants"
));

$proto20["m_sql"] = "`price`";
$proto20["m_srcTableName"] = "mst_gold_of_bullion_merchants";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "rate",
	"m_strTable" => "mst_gold_of_bullion_merchants",
	"m_srcTableName" => "mst_gold_of_bullion_merchants"
));

$proto22["m_sql"] = "`rate`";
$proto22["m_srcTableName"] = "mst_gold_of_bullion_merchants";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "addition_price",
	"m_strTable" => "mst_gold_of_bullion_merchants",
	"m_srcTableName" => "mst_gold_of_bullion_merchants"
));

$proto24["m_sql"] = "`addition_price`";
$proto24["m_srcTableName"] = "mst_gold_of_bullion_merchants";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "mst_gold_of_bullion_merchants",
	"m_srcTableName" => "mst_gold_of_bullion_merchants"
));

$proto26["m_sql"] = "`category`";
$proto26["m_srcTableName"] = "mst_gold_of_bullion_merchants";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "formula",
	"m_strTable" => "mst_gold_of_bullion_merchants",
	"m_srcTableName" => "mst_gold_of_bullion_merchants"
));

$proto28["m_sql"] = "`formula`";
$proto28["m_srcTableName"] = "mst_gold_of_bullion_merchants";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_gold_of_bullion_merchants";
$proto31["m_srcTableName"] = "mst_gold_of_bullion_merchants";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "name";
$proto31["m_columns"][] = "create_at";
$proto31["m_columns"][] = "create_by";
$proto31["m_columns"][] = "update_at";
$proto31["m_columns"][] = "update_by";
$proto31["m_columns"][] = "sort";
$proto31["m_columns"][] = "price";
$proto31["m_columns"][] = "rate";
$proto31["m_columns"][] = "addition_price";
$proto31["m_columns"][] = "category";
$proto31["m_columns"][] = "formula";
$proto31["m_columns"][] = "round";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "`mst_gold_of_bullion_merchants`";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_gold_of_bullion_merchants";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_gold_of_bullion_merchants",
	"m_srcTableName" => "mst_gold_of_bullion_merchants"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 1;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_gold_of_bullion_merchants";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_gold_of_bullion_merchants = createSqlQuery_mst_gold_of_bullion_merchants();


	
		;

												

$tdatamst_gold_of_bullion_merchants[".sqlquery"] = $queryData_mst_gold_of_bullion_merchants;

include_once(getabspath("include/mst_gold_of_bullion_merchants_events.php"));
$tableEvents["mst_gold_of_bullion_merchants"] = new eventclass_mst_gold_of_bullion_merchants;
$tdatamst_gold_of_bullion_merchants[".hasEvents"] = true;

?>