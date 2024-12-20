<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_Eoc_received_event_contents = array();
	$tdatamst_Eoc_received_event_contents[".truncateText"] = true;
	$tdatamst_Eoc_received_event_contents[".NumberOfChars"] = 80;
	$tdatamst_Eoc_received_event_contents[".ShortName"] = "mst_Eoc_received_event_contents";
	$tdatamst_Eoc_received_event_contents[".OwnerID"] = "";
	$tdatamst_Eoc_received_event_contents[".OriginalTable"] = "mst_Eoc_received_event_contents";

//	field labels
$fieldLabelsmst_Eoc_received_event_contents = array();
$fieldToolTipsmst_Eoc_received_event_contents = array();
$pageTitlesmst_Eoc_received_event_contents = array();
$placeHoldersmst_Eoc_received_event_contents = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_Eoc_received_event_contents["Japanese"] = array();
	$fieldToolTipsmst_Eoc_received_event_contents["Japanese"] = array();
	$placeHoldersmst_Eoc_received_event_contents["Japanese"] = array();
	$pageTitlesmst_Eoc_received_event_contents["Japanese"] = array();
	$fieldLabelsmst_Eoc_received_event_contents["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_Eoc_received_event_contents["Japanese"]["id"] = "";
	$placeHoldersmst_Eoc_received_event_contents["Japanese"]["id"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["Japanese"]["name"] = "名称";
	$fieldToolTipsmst_Eoc_received_event_contents["Japanese"]["name"] = "";
	$placeHoldersmst_Eoc_received_event_contents["Japanese"]["name"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["Japanese"]["sort"] = "ソート";
	$fieldToolTipsmst_Eoc_received_event_contents["Japanese"]["sort"] = "";
	$placeHoldersmst_Eoc_received_event_contents["Japanese"]["sort"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["Japanese"]["event_id"] = "イベントId";
	$fieldToolTipsmst_Eoc_received_event_contents["Japanese"]["event_id"] = "";
	$placeHoldersmst_Eoc_received_event_contents["Japanese"]["event_id"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_Eoc_received_event_contents["Japanese"]["create_by"] = "";
	$placeHoldersmst_Eoc_received_event_contents["Japanese"]["create_by"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_Eoc_received_event_contents["Japanese"]["create_at"] = "";
	$placeHoldersmst_Eoc_received_event_contents["Japanese"]["create_at"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_Eoc_received_event_contents["Japanese"]["update_by"] = "";
	$placeHoldersmst_Eoc_received_event_contents["Japanese"]["update_by"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_Eoc_received_event_contents["Japanese"]["update_at"] = "";
	$placeHoldersmst_Eoc_received_event_contents["Japanese"]["update_at"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["Japanese"]["category_id"] = "大カテ";
	$fieldToolTipsmst_Eoc_received_event_contents["Japanese"]["category_id"] = "";
	$placeHoldersmst_Eoc_received_event_contents["Japanese"]["category_id"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["Japanese"]["sub_category_id1"] = "中カテ";
	$fieldToolTipsmst_Eoc_received_event_contents["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_Eoc_received_event_contents["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["Japanese"]["gold_property"] = "金性";
	$fieldToolTipsmst_Eoc_received_event_contents["Japanese"]["gold_property"] = "";
	$placeHoldersmst_Eoc_received_event_contents["Japanese"]["gold_property"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["Japanese"]["Gram"] = "金性グラム";
	$fieldToolTipsmst_Eoc_received_event_contents["Japanese"]["Gram"] = "";
	$placeHoldersmst_Eoc_received_event_contents["Japanese"]["Gram"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["Japanese"]["unit"] = "単位";
	$fieldToolTipsmst_Eoc_received_event_contents["Japanese"]["unit"] = "";
	$placeHoldersmst_Eoc_received_event_contents["Japanese"]["unit"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["Japanese"]["price_per_gram"] = "金性単価";
	$fieldToolTipsmst_Eoc_received_event_contents["Japanese"]["price_per_gram"] = "";
	$placeHoldersmst_Eoc_received_event_contents["Japanese"]["price_per_gram"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["Japanese"]["price"] = "買取額";
	$fieldToolTipsmst_Eoc_received_event_contents["Japanese"]["price"] = "";
	$placeHoldersmst_Eoc_received_event_contents["Japanese"]["price"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["Japanese"]["color"] = "カラー";
	$fieldToolTipsmst_Eoc_received_event_contents["Japanese"]["color"] = "";
	$placeHoldersmst_Eoc_received_event_contents["Japanese"]["color"] = "";
	if (count($fieldToolTipsmst_Eoc_received_event_contents["Japanese"]))
		$tdatamst_Eoc_received_event_contents[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_Eoc_received_event_contents[""] = array();
	$fieldToolTipsmst_Eoc_received_event_contents[""] = array();
	$placeHoldersmst_Eoc_received_event_contents[""] = array();
	$pageTitlesmst_Eoc_received_event_contents[""] = array();
	$fieldLabelsmst_Eoc_received_event_contents[""]["id"] = "Id";
	$fieldToolTipsmst_Eoc_received_event_contents[""]["id"] = "";
	$placeHoldersmst_Eoc_received_event_contents[""]["id"] = "";
	$fieldLabelsmst_Eoc_received_event_contents[""]["name"] = "Name";
	$fieldToolTipsmst_Eoc_received_event_contents[""]["name"] = "";
	$placeHoldersmst_Eoc_received_event_contents[""]["name"] = "";
	$fieldLabelsmst_Eoc_received_event_contents[""]["sort"] = "Sort";
	$fieldToolTipsmst_Eoc_received_event_contents[""]["sort"] = "";
	$placeHoldersmst_Eoc_received_event_contents[""]["sort"] = "";
	$fieldLabelsmst_Eoc_received_event_contents[""]["event_id"] = "Event Id";
	$fieldToolTipsmst_Eoc_received_event_contents[""]["event_id"] = "";
	$placeHoldersmst_Eoc_received_event_contents[""]["event_id"] = "";
	$fieldLabelsmst_Eoc_received_event_contents[""]["create_by"] = "Create By";
	$fieldToolTipsmst_Eoc_received_event_contents[""]["create_by"] = "";
	$placeHoldersmst_Eoc_received_event_contents[""]["create_by"] = "";
	$fieldLabelsmst_Eoc_received_event_contents[""]["create_at"] = "Create At";
	$fieldToolTipsmst_Eoc_received_event_contents[""]["create_at"] = "";
	$placeHoldersmst_Eoc_received_event_contents[""]["create_at"] = "";
	$fieldLabelsmst_Eoc_received_event_contents[""]["update_by"] = "Update By";
	$fieldToolTipsmst_Eoc_received_event_contents[""]["update_by"] = "";
	$placeHoldersmst_Eoc_received_event_contents[""]["update_by"] = "";
	$fieldLabelsmst_Eoc_received_event_contents[""]["update_at"] = "Update At";
	$fieldToolTipsmst_Eoc_received_event_contents[""]["update_at"] = "";
	$placeHoldersmst_Eoc_received_event_contents[""]["update_at"] = "";
	$fieldLabelsmst_Eoc_received_event_contents[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_Eoc_received_event_contents[""]["category_id"] = "";
	$placeHoldersmst_Eoc_received_event_contents[""]["category_id"] = "";
	$fieldLabelsmst_Eoc_received_event_contents[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_Eoc_received_event_contents[""]["sub_category_id1"] = "";
	$placeHoldersmst_Eoc_received_event_contents[""]["sub_category_id1"] = "";
	$fieldLabelsmst_Eoc_received_event_contents[""]["gold_property"] = "Gold Property";
	$fieldToolTipsmst_Eoc_received_event_contents[""]["gold_property"] = "";
	$placeHoldersmst_Eoc_received_event_contents[""]["gold_property"] = "";
	$fieldLabelsmst_Eoc_received_event_contents[""]["Gram"] = "Gram";
	$fieldToolTipsmst_Eoc_received_event_contents[""]["Gram"] = "";
	$placeHoldersmst_Eoc_received_event_contents[""]["Gram"] = "";
	$fieldLabelsmst_Eoc_received_event_contents[""]["unit"] = "Unit";
	$fieldToolTipsmst_Eoc_received_event_contents[""]["unit"] = "";
	$placeHoldersmst_Eoc_received_event_contents[""]["unit"] = "";
	$fieldLabelsmst_Eoc_received_event_contents[""]["price_per_gram"] = "Price Per Gram";
	$fieldToolTipsmst_Eoc_received_event_contents[""]["price_per_gram"] = "";
	$placeHoldersmst_Eoc_received_event_contents[""]["price_per_gram"] = "";
	$fieldLabelsmst_Eoc_received_event_contents[""]["price"] = "Price";
	$fieldToolTipsmst_Eoc_received_event_contents[""]["price"] = "";
	$placeHoldersmst_Eoc_received_event_contents[""]["price"] = "";
	$fieldLabelsmst_Eoc_received_event_contents[""]["color"] = "Color";
	$fieldToolTipsmst_Eoc_received_event_contents[""]["color"] = "";
	$placeHoldersmst_Eoc_received_event_contents[""]["color"] = "";
	if (count($fieldToolTipsmst_Eoc_received_event_contents[""]))
		$tdatamst_Eoc_received_event_contents[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_Eoc_received_event_contents["English"] = array();
	$fieldToolTipsmst_Eoc_received_event_contents["English"] = array();
	$placeHoldersmst_Eoc_received_event_contents["English"] = array();
	$pageTitlesmst_Eoc_received_event_contents["English"] = array();
	$fieldLabelsmst_Eoc_received_event_contents["English"]["id"] = "Id";
	$fieldToolTipsmst_Eoc_received_event_contents["English"]["id"] = "";
	$placeHoldersmst_Eoc_received_event_contents["English"]["id"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["English"]["name"] = "Name";
	$fieldToolTipsmst_Eoc_received_event_contents["English"]["name"] = "";
	$placeHoldersmst_Eoc_received_event_contents["English"]["name"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["English"]["sort"] = "Sort";
	$fieldToolTipsmst_Eoc_received_event_contents["English"]["sort"] = "";
	$placeHoldersmst_Eoc_received_event_contents["English"]["sort"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["English"]["event_id"] = "Event Id";
	$fieldToolTipsmst_Eoc_received_event_contents["English"]["event_id"] = "";
	$placeHoldersmst_Eoc_received_event_contents["English"]["event_id"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_Eoc_received_event_contents["English"]["create_by"] = "";
	$placeHoldersmst_Eoc_received_event_contents["English"]["create_by"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_Eoc_received_event_contents["English"]["create_at"] = "";
	$placeHoldersmst_Eoc_received_event_contents["English"]["create_at"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_Eoc_received_event_contents["English"]["update_by"] = "";
	$placeHoldersmst_Eoc_received_event_contents["English"]["update_by"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_Eoc_received_event_contents["English"]["update_at"] = "";
	$placeHoldersmst_Eoc_received_event_contents["English"]["update_at"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_Eoc_received_event_contents["English"]["category_id"] = "";
	$placeHoldersmst_Eoc_received_event_contents["English"]["category_id"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_Eoc_received_event_contents["English"]["sub_category_id1"] = "";
	$placeHoldersmst_Eoc_received_event_contents["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["English"]["gold_property"] = "Gold Property";
	$fieldToolTipsmst_Eoc_received_event_contents["English"]["gold_property"] = "";
	$placeHoldersmst_Eoc_received_event_contents["English"]["gold_property"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["English"]["Gram"] = "Gram";
	$fieldToolTipsmst_Eoc_received_event_contents["English"]["Gram"] = "";
	$placeHoldersmst_Eoc_received_event_contents["English"]["Gram"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["English"]["unit"] = "Unit";
	$fieldToolTipsmst_Eoc_received_event_contents["English"]["unit"] = "";
	$placeHoldersmst_Eoc_received_event_contents["English"]["unit"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["English"]["price_per_gram"] = "Price Per Gram";
	$fieldToolTipsmst_Eoc_received_event_contents["English"]["price_per_gram"] = "";
	$placeHoldersmst_Eoc_received_event_contents["English"]["price_per_gram"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["English"]["price"] = "Price";
	$fieldToolTipsmst_Eoc_received_event_contents["English"]["price"] = "";
	$placeHoldersmst_Eoc_received_event_contents["English"]["price"] = "";
	$fieldLabelsmst_Eoc_received_event_contents["English"]["color"] = "Color";
	$fieldToolTipsmst_Eoc_received_event_contents["English"]["color"] = "";
	$placeHoldersmst_Eoc_received_event_contents["English"]["color"] = "";
	if (count($fieldToolTipsmst_Eoc_received_event_contents["English"]))
		$tdatamst_Eoc_received_event_contents[".isUseToolTips"] = true;
}


	$tdatamst_Eoc_received_event_contents[".NCSearch"] = true;



$tdatamst_Eoc_received_event_contents[".shortTableName"] = "mst_Eoc_received_event_contents";
$tdatamst_Eoc_received_event_contents[".nSecOptions"] = 0;
$tdatamst_Eoc_received_event_contents[".recsPerRowPrint"] = 1;
$tdatamst_Eoc_received_event_contents[".mainTableOwnerID"] = "";
$tdatamst_Eoc_received_event_contents[".moveNext"] = 1;
$tdatamst_Eoc_received_event_contents[".entityType"] = 0;

$tdatamst_Eoc_received_event_contents[".strOriginalTableName"] = "mst_Eoc_received_event_contents";

	



$tdatamst_Eoc_received_event_contents[".showAddInPopup"] = false;

$tdatamst_Eoc_received_event_contents[".showEditInPopup"] = false;

$tdatamst_Eoc_received_event_contents[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_Eoc_received_event_contents[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_Eoc_received_event_contents[".fieldsForRegister"] = array();

$tdatamst_Eoc_received_event_contents[".listAjax"] = false;

	$tdatamst_Eoc_received_event_contents[".audit"] = true;

	$tdatamst_Eoc_received_event_contents[".locking"] = false;



$tdatamst_Eoc_received_event_contents[".list"] = true;

$tdatamst_Eoc_received_event_contents[".inlineEdit"] = true;


$tdatamst_Eoc_received_event_contents[".reorderRecordsByHeader"] = true;



$tdatamst_Eoc_received_event_contents[".inlineAdd"] = true;

$tdatamst_Eoc_received_event_contents[".import"] = true;

$tdatamst_Eoc_received_event_contents[".exportTo"] = true;


$tdatamst_Eoc_received_event_contents[".delete"] = true;

$tdatamst_Eoc_received_event_contents[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_Eoc_received_event_contents[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_Eoc_received_event_contents[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_Eoc_received_event_contents[".searchSaving"] = false;
//

$tdatamst_Eoc_received_event_contents[".showSearchPanel"] = true;
		$tdatamst_Eoc_received_event_contents[".flexibleSearch"] = true;

$tdatamst_Eoc_received_event_contents[".isUseAjaxSuggest"] = true;

$tdatamst_Eoc_received_event_contents[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatamst_Eoc_received_event_contents[".ajaxCodeSnippetAdded"] = false;

$tdatamst_Eoc_received_event_contents[".buttonsAdded"] = false;

$tdatamst_Eoc_received_event_contents[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_Eoc_received_event_contents[".isUseTimeForSearch"] = false;



$tdatamst_Eoc_received_event_contents[".badgeColor"] = "b22222";


$tdatamst_Eoc_received_event_contents[".allSearchFields"] = array();
$tdatamst_Eoc_received_event_contents[".filterFields"] = array();
$tdatamst_Eoc_received_event_contents[".requiredSearchFields"] = array();

$tdatamst_Eoc_received_event_contents[".allSearchFields"][] = "color";
	$tdatamst_Eoc_received_event_contents[".allSearchFields"][] = "category_id";
	$tdatamst_Eoc_received_event_contents[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_Eoc_received_event_contents[".allSearchFields"][] = "gold_property";
	$tdatamst_Eoc_received_event_contents[".allSearchFields"][] = "Gram";
	$tdatamst_Eoc_received_event_contents[".allSearchFields"][] = "unit";
	$tdatamst_Eoc_received_event_contents[".allSearchFields"][] = "price_per_gram";
	$tdatamst_Eoc_received_event_contents[".allSearchFields"][] = "price";
	

$tdatamst_Eoc_received_event_contents[".googleLikeFields"] = array();
$tdatamst_Eoc_received_event_contents[".googleLikeFields"][] = "id";
$tdatamst_Eoc_received_event_contents[".googleLikeFields"][] = "name";
$tdatamst_Eoc_received_event_contents[".googleLikeFields"][] = "sort";
$tdatamst_Eoc_received_event_contents[".googleLikeFields"][] = "event_id";
$tdatamst_Eoc_received_event_contents[".googleLikeFields"][] = "create_by";
$tdatamst_Eoc_received_event_contents[".googleLikeFields"][] = "create_at";
$tdatamst_Eoc_received_event_contents[".googleLikeFields"][] = "update_by";
$tdatamst_Eoc_received_event_contents[".googleLikeFields"][] = "update_at";
$tdatamst_Eoc_received_event_contents[".googleLikeFields"][] = "category_id";
$tdatamst_Eoc_received_event_contents[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_Eoc_received_event_contents[".googleLikeFields"][] = "gold_property";
$tdatamst_Eoc_received_event_contents[".googleLikeFields"][] = "Gram";
$tdatamst_Eoc_received_event_contents[".googleLikeFields"][] = "unit";
$tdatamst_Eoc_received_event_contents[".googleLikeFields"][] = "price_per_gram";
$tdatamst_Eoc_received_event_contents[".googleLikeFields"][] = "price";
$tdatamst_Eoc_received_event_contents[".googleLikeFields"][] = "color";


$tdatamst_Eoc_received_event_contents[".advSearchFields"] = array();
$tdatamst_Eoc_received_event_contents[".advSearchFields"][] = "color";
$tdatamst_Eoc_received_event_contents[".advSearchFields"][] = "category_id";
$tdatamst_Eoc_received_event_contents[".advSearchFields"][] = "sub_category_id1";
$tdatamst_Eoc_received_event_contents[".advSearchFields"][] = "gold_property";
$tdatamst_Eoc_received_event_contents[".advSearchFields"][] = "Gram";
$tdatamst_Eoc_received_event_contents[".advSearchFields"][] = "unit";
$tdatamst_Eoc_received_event_contents[".advSearchFields"][] = "price_per_gram";
$tdatamst_Eoc_received_event_contents[".advSearchFields"][] = "price";

$tdatamst_Eoc_received_event_contents[".tableType"] = "list";

$tdatamst_Eoc_received_event_contents[".printerPageOrientation"] = 0;
$tdatamst_Eoc_received_event_contents[".nPrinterPageScale"] = 100;

$tdatamst_Eoc_received_event_contents[".nPrinterSplitRecords"] = 40;

$tdatamst_Eoc_received_event_contents[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_Eoc_received_event_contents[".geocodingEnabled"] = false;





$tdatamst_Eoc_received_event_contents[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_Eoc_received_event_contents[".pageSize"] = 20;

$tdatamst_Eoc_received_event_contents[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_Eoc_received_event_contents[".strOrderBy"] = $tstrOrderBy;

$tdatamst_Eoc_received_event_contents[".orderindexes"] = array();
$tdatamst_Eoc_received_event_contents[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_Eoc_received_event_contents[".sqlHead"] = "SELECT `id`,  `name`,  `sort`,  `event_id`,  `create_by`,  `create_at`,  `update_by`,  `update_at`,  `category_id`,  `sub_category_id1`,  `gold_property`,  `Gram`,  `unit`,  `price_per_gram`,  `price`,  `color`";
$tdatamst_Eoc_received_event_contents[".sqlFrom"] = "FROM `mst_Eoc_received_event_contents`";
$tdatamst_Eoc_received_event_contents[".sqlWhereExpr"] = "";
$tdatamst_Eoc_received_event_contents[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_Eoc_received_event_contents[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_Eoc_received_event_contents[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_Eoc_received_event_contents[".highlightSearchResults"] = true;

$tableKeysmst_Eoc_received_event_contents = array();
$tableKeysmst_Eoc_received_event_contents[] = "id";
$tdatamst_Eoc_received_event_contents[".Keys"] = $tableKeysmst_Eoc_received_event_contents;

$tdatamst_Eoc_received_event_contents[".listFields"] = array();
$tdatamst_Eoc_received_event_contents[".listFields"][] = "id";
$tdatamst_Eoc_received_event_contents[".listFields"][] = "color";
$tdatamst_Eoc_received_event_contents[".listFields"][] = "name";
$tdatamst_Eoc_received_event_contents[".listFields"][] = "sort";
$tdatamst_Eoc_received_event_contents[".listFields"][] = "event_id";
$tdatamst_Eoc_received_event_contents[".listFields"][] = "category_id";
$tdatamst_Eoc_received_event_contents[".listFields"][] = "sub_category_id1";
$tdatamst_Eoc_received_event_contents[".listFields"][] = "gold_property";
$tdatamst_Eoc_received_event_contents[".listFields"][] = "Gram";
$tdatamst_Eoc_received_event_contents[".listFields"][] = "unit";
$tdatamst_Eoc_received_event_contents[".listFields"][] = "price_per_gram";
$tdatamst_Eoc_received_event_contents[".listFields"][] = "price";
$tdatamst_Eoc_received_event_contents[".listFields"][] = "create_by";
$tdatamst_Eoc_received_event_contents[".listFields"][] = "create_at";
$tdatamst_Eoc_received_event_contents[".listFields"][] = "update_by";
$tdatamst_Eoc_received_event_contents[".listFields"][] = "update_at";

$tdatamst_Eoc_received_event_contents[".hideMobileList"] = array();


$tdatamst_Eoc_received_event_contents[".viewFields"] = array();

$tdatamst_Eoc_received_event_contents[".addFields"] = array();

$tdatamst_Eoc_received_event_contents[".masterListFields"] = array();
$tdatamst_Eoc_received_event_contents[".masterListFields"][] = "color";
$tdatamst_Eoc_received_event_contents[".masterListFields"][] = "id";
$tdatamst_Eoc_received_event_contents[".masterListFields"][] = "name";
$tdatamst_Eoc_received_event_contents[".masterListFields"][] = "sort";
$tdatamst_Eoc_received_event_contents[".masterListFields"][] = "event_id";
$tdatamst_Eoc_received_event_contents[".masterListFields"][] = "category_id";
$tdatamst_Eoc_received_event_contents[".masterListFields"][] = "sub_category_id1";
$tdatamst_Eoc_received_event_contents[".masterListFields"][] = "gold_property";
$tdatamst_Eoc_received_event_contents[".masterListFields"][] = "Gram";
$tdatamst_Eoc_received_event_contents[".masterListFields"][] = "unit";
$tdatamst_Eoc_received_event_contents[".masterListFields"][] = "price_per_gram";
$tdatamst_Eoc_received_event_contents[".masterListFields"][] = "price";
$tdatamst_Eoc_received_event_contents[".masterListFields"][] = "create_by";
$tdatamst_Eoc_received_event_contents[".masterListFields"][] = "create_at";
$tdatamst_Eoc_received_event_contents[".masterListFields"][] = "update_by";
$tdatamst_Eoc_received_event_contents[".masterListFields"][] = "update_at";

$tdatamst_Eoc_received_event_contents[".inlineAddFields"] = array();
$tdatamst_Eoc_received_event_contents[".inlineAddFields"][] = "color";
$tdatamst_Eoc_received_event_contents[".inlineAddFields"][] = "name";
$tdatamst_Eoc_received_event_contents[".inlineAddFields"][] = "sort";
$tdatamst_Eoc_received_event_contents[".inlineAddFields"][] = "category_id";
$tdatamst_Eoc_received_event_contents[".inlineAddFields"][] = "sub_category_id1";
$tdatamst_Eoc_received_event_contents[".inlineAddFields"][] = "gold_property";
$tdatamst_Eoc_received_event_contents[".inlineAddFields"][] = "Gram";
$tdatamst_Eoc_received_event_contents[".inlineAddFields"][] = "unit";
$tdatamst_Eoc_received_event_contents[".inlineAddFields"][] = "price_per_gram";
$tdatamst_Eoc_received_event_contents[".inlineAddFields"][] = "price";

$tdatamst_Eoc_received_event_contents[".editFields"] = array();

$tdatamst_Eoc_received_event_contents[".inlineEditFields"] = array();
$tdatamst_Eoc_received_event_contents[".inlineEditFields"][] = "color";
$tdatamst_Eoc_received_event_contents[".inlineEditFields"][] = "name";
$tdatamst_Eoc_received_event_contents[".inlineEditFields"][] = "sort";
$tdatamst_Eoc_received_event_contents[".inlineEditFields"][] = "category_id";
$tdatamst_Eoc_received_event_contents[".inlineEditFields"][] = "sub_category_id1";
$tdatamst_Eoc_received_event_contents[".inlineEditFields"][] = "gold_property";
$tdatamst_Eoc_received_event_contents[".inlineEditFields"][] = "Gram";
$tdatamst_Eoc_received_event_contents[".inlineEditFields"][] = "unit";
$tdatamst_Eoc_received_event_contents[".inlineEditFields"][] = "price_per_gram";
$tdatamst_Eoc_received_event_contents[".inlineEditFields"][] = "price";

$tdatamst_Eoc_received_event_contents[".updateSelectedFields"] = array();


$tdatamst_Eoc_received_event_contents[".exportFields"] = array();
$tdatamst_Eoc_received_event_contents[".exportFields"][] = "color";
$tdatamst_Eoc_received_event_contents[".exportFields"][] = "id";
$tdatamst_Eoc_received_event_contents[".exportFields"][] = "name";
$tdatamst_Eoc_received_event_contents[".exportFields"][] = "sort";
$tdatamst_Eoc_received_event_contents[".exportFields"][] = "event_id";
$tdatamst_Eoc_received_event_contents[".exportFields"][] = "category_id";
$tdatamst_Eoc_received_event_contents[".exportFields"][] = "sub_category_id1";
$tdatamst_Eoc_received_event_contents[".exportFields"][] = "gold_property";
$tdatamst_Eoc_received_event_contents[".exportFields"][] = "Gram";
$tdatamst_Eoc_received_event_contents[".exportFields"][] = "unit";
$tdatamst_Eoc_received_event_contents[".exportFields"][] = "price_per_gram";
$tdatamst_Eoc_received_event_contents[".exportFields"][] = "price";
$tdatamst_Eoc_received_event_contents[".exportFields"][] = "create_by";
$tdatamst_Eoc_received_event_contents[".exportFields"][] = "create_at";
$tdatamst_Eoc_received_event_contents[".exportFields"][] = "update_by";
$tdatamst_Eoc_received_event_contents[".exportFields"][] = "update_at";

$tdatamst_Eoc_received_event_contents[".importFields"] = array();
$tdatamst_Eoc_received_event_contents[".importFields"][] = "category_id";
$tdatamst_Eoc_received_event_contents[".importFields"][] = "sub_category_id1";
$tdatamst_Eoc_received_event_contents[".importFields"][] = "gold_property";
$tdatamst_Eoc_received_event_contents[".importFields"][] = "Gram";
$tdatamst_Eoc_received_event_contents[".importFields"][] = "unit";
$tdatamst_Eoc_received_event_contents[".importFields"][] = "price_per_gram";
$tdatamst_Eoc_received_event_contents[".importFields"][] = "price";
$tdatamst_Eoc_received_event_contents[".importFields"][] = "color";

$tdatamst_Eoc_received_event_contents[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_Eoc_received_event_contents";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_event_contents","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_Eoc_received_event_contents["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_Eoc_received_event_contents";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_event_contents","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
	
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








	$tdatamst_Eoc_received_event_contents["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_Eoc_received_event_contents";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_event_contents","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
	
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








	$tdatamst_Eoc_received_event_contents["sort"] = $fdata;
//	event_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "event_id";
	$fdata["GoodName"] = "event_id";
	$fdata["ownerTable"] = "mst_Eoc_received_event_contents";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_event_contents","event_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "event_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`event_id`";

	
	
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








	$tdatamst_Eoc_received_event_contents["event_id"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_Eoc_received_event_contents";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_event_contents","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_Eoc_received_event_contents["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_Eoc_received_event_contents";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_event_contents","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_Eoc_received_event_contents["create_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_Eoc_received_event_contents";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_event_contents","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_Eoc_received_event_contents["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_Eoc_received_event_contents";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_event_contents","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_Eoc_received_event_contents["update_at"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_Eoc_received_event_contents";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_event_contents","category_id");
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
	$edata["LinkFieldType"] = 0;
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




	$tdatamst_Eoc_received_event_contents["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_Eoc_received_event_contents";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_event_contents","sub_category_id1");
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
	$edata["LinkFieldType"] = 0;
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




	$tdatamst_Eoc_received_event_contents["sub_category_id1"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "mst_Eoc_received_event_contents";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_event_contents","gold_property");
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
	$edata["LinkFieldType"] = 0;
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




	$tdatamst_Eoc_received_event_contents["gold_property"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "mst_Eoc_received_event_contents";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_event_contents","Gram");
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




	$tdatamst_Eoc_received_event_contents["Gram"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "mst_Eoc_received_event_contents";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_event_contents","unit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`unit`";

	
	
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
	$edata["LookupTable"] = "mst_unit";
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




	$tdatamst_Eoc_received_event_contents["unit"] = $fdata;
//	price_per_gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "price_per_gram";
	$fdata["GoodName"] = "price_per_gram";
	$fdata["ownerTable"] = "mst_Eoc_received_event_contents";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_event_contents","price_per_gram");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_per_gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`price_per_gram`";

	
	
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




	$tdatamst_Eoc_received_event_contents["price_per_gram"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "mst_Eoc_received_event_contents";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_event_contents","price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`price`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
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




	$tdatamst_Eoc_received_event_contents["price"] = $fdata;
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "mst_Eoc_received_event_contents";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_event_contents","color");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "color";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`color`";

	
	
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
	$edata["LookupTable"] = "mst_color_code";
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




	$tdatamst_Eoc_received_event_contents["color"] = $fdata;


$tables_data["mst_Eoc_received_event_contents"]=&$tdatamst_Eoc_received_event_contents;
$field_labels["mst_Eoc_received_event_contents"] = &$fieldLabelsmst_Eoc_received_event_contents;
$fieldToolTips["mst_Eoc_received_event_contents"] = &$fieldToolTipsmst_Eoc_received_event_contents;
$placeHolders["mst_Eoc_received_event_contents"] = &$placeHoldersmst_Eoc_received_event_contents;
$page_titles["mst_Eoc_received_event_contents"] = &$pageTitlesmst_Eoc_received_event_contents;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_Eoc_received_event_contents"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_Eoc_received_event_contents"] = array();


	
				$strOriginalDetailsTable="mst_Eoc_received_events";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="mst_Eoc_received_events";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mst_Eoc_received_events";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["mst_Eoc_received_event_contents"][0] = $masterParams;
				$masterTablesData["mst_Eoc_received_event_contents"][0]["masterKeys"] = array();
	$masterTablesData["mst_Eoc_received_event_contents"][0]["masterKeys"][]="id";
				$masterTablesData["mst_Eoc_received_event_contents"][0]["detailKeys"] = array();
	$masterTablesData["mst_Eoc_received_event_contents"][0]["detailKeys"][]="event_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_Eoc_received_event_contents()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `sort`,  `event_id`,  `create_by`,  `create_at`,  `update_by`,  `update_at`,  `category_id`,  `sub_category_id1`,  `gold_property`,  `Gram`,  `unit`,  `price_per_gram`,  `price`,  `color`";
$proto0["m_strFrom"] = "FROM `mst_Eoc_received_event_contents`";
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
	"m_strTable" => "mst_Eoc_received_event_contents",
	"m_srcTableName" => "mst_Eoc_received_event_contents"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_Eoc_received_event_contents",
	"m_srcTableName" => "mst_Eoc_received_event_contents"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_Eoc_received_event_contents",
	"m_srcTableName" => "mst_Eoc_received_event_contents"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "event_id",
	"m_strTable" => "mst_Eoc_received_event_contents",
	"m_srcTableName" => "mst_Eoc_received_event_contents"
));

$proto12["m_sql"] = "`event_id`";
$proto12["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_Eoc_received_event_contents",
	"m_srcTableName" => "mst_Eoc_received_event_contents"
));

$proto14["m_sql"] = "`create_by`";
$proto14["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_Eoc_received_event_contents",
	"m_srcTableName" => "mst_Eoc_received_event_contents"
));

$proto16["m_sql"] = "`create_at`";
$proto16["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_Eoc_received_event_contents",
	"m_srcTableName" => "mst_Eoc_received_event_contents"
));

$proto18["m_sql"] = "`update_by`";
$proto18["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_Eoc_received_event_contents",
	"m_srcTableName" => "mst_Eoc_received_event_contents"
));

$proto20["m_sql"] = "`update_at`";
$proto20["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_Eoc_received_event_contents",
	"m_srcTableName" => "mst_Eoc_received_event_contents"
));

$proto22["m_sql"] = "`category_id`";
$proto22["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_Eoc_received_event_contents",
	"m_srcTableName" => "mst_Eoc_received_event_contents"
));

$proto24["m_sql"] = "`sub_category_id1`";
$proto24["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "mst_Eoc_received_event_contents",
	"m_srcTableName" => "mst_Eoc_received_event_contents"
));

$proto26["m_sql"] = "`gold_property`";
$proto26["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "mst_Eoc_received_event_contents",
	"m_srcTableName" => "mst_Eoc_received_event_contents"
));

$proto28["m_sql"] = "`Gram`";
$proto28["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "mst_Eoc_received_event_contents",
	"m_srcTableName" => "mst_Eoc_received_event_contents"
));

$proto30["m_sql"] = "`unit`";
$proto30["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_gram",
	"m_strTable" => "mst_Eoc_received_event_contents",
	"m_srcTableName" => "mst_Eoc_received_event_contents"
));

$proto32["m_sql"] = "`price_per_gram`";
$proto32["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "mst_Eoc_received_event_contents",
	"m_srcTableName" => "mst_Eoc_received_event_contents"
));

$proto34["m_sql"] = "`price`";
$proto34["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "mst_Eoc_received_event_contents",
	"m_srcTableName" => "mst_Eoc_received_event_contents"
));

$proto36["m_sql"] = "`color`";
$proto36["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "mst_Eoc_received_event_contents";
$proto39["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "name";
$proto39["m_columns"][] = "sort";
$proto39["m_columns"][] = "event_id";
$proto39["m_columns"][] = "create_by";
$proto39["m_columns"][] = "create_at";
$proto39["m_columns"][] = "update_by";
$proto39["m_columns"][] = "update_at";
$proto39["m_columns"][] = "category_id";
$proto39["m_columns"][] = "sub_category_id1";
$proto39["m_columns"][] = "gold_property";
$proto39["m_columns"][] = "Gram";
$proto39["m_columns"][] = "unit";
$proto39["m_columns"][] = "price_per_gram";
$proto39["m_columns"][] = "price";
$proto39["m_columns"][] = "color";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "`mst_Eoc_received_event_contents`";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "mst_Eoc_received_event_contents";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_Eoc_received_event_contents",
	"m_srcTableName" => "mst_Eoc_received_event_contents"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 1;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_Eoc_received_event_contents";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_Eoc_received_event_contents = createSqlQuery_mst_Eoc_received_event_contents();


	
		;

																

$tdatamst_Eoc_received_event_contents[".sqlquery"] = $queryData_mst_Eoc_received_event_contents;

include_once(getabspath("include/mst_Eoc_received_event_contents_events.php"));
$tableEvents["mst_Eoc_received_event_contents"] = new eventclass_mst_Eoc_received_event_contents;
$tdatamst_Eoc_received_event_contents[".hasEvents"] = true;

?>