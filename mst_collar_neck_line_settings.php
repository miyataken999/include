<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_collar_neck_line = array();
	$tdatamst_collar_neck_line[".truncateText"] = true;
	$tdatamst_collar_neck_line[".NumberOfChars"] = 80;
	$tdatamst_collar_neck_line[".ShortName"] = "mst_collar_neck_line";
	$tdatamst_collar_neck_line[".OwnerID"] = "";
	$tdatamst_collar_neck_line[".OriginalTable"] = "mst_collar_neck_line";

//	field labels
$fieldLabelsmst_collar_neck_line = array();
$fieldToolTipsmst_collar_neck_line = array();
$pageTitlesmst_collar_neck_line = array();
$placeHoldersmst_collar_neck_line = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_collar_neck_line["Japanese"] = array();
	$fieldToolTipsmst_collar_neck_line["Japanese"] = array();
	$placeHoldersmst_collar_neck_line["Japanese"] = array();
	$pageTitlesmst_collar_neck_line["Japanese"] = array();
	$fieldLabelsmst_collar_neck_line["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_collar_neck_line["Japanese"]["id"] = "";
	$placeHoldersmst_collar_neck_line["Japanese"]["id"] = "";
	$fieldLabelsmst_collar_neck_line["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_collar_neck_line["Japanese"]["name"] = "";
	$placeHoldersmst_collar_neck_line["Japanese"]["name"] = "";
	$fieldLabelsmst_collar_neck_line["Japanese"]["english_name"] = "English Name";
	$fieldToolTipsmst_collar_neck_line["Japanese"]["english_name"] = "";
	$placeHoldersmst_collar_neck_line["Japanese"]["english_name"] = "";
	$fieldLabelsmst_collar_neck_line["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_collar_neck_line["Japanese"]["sort"] = "";
	$placeHoldersmst_collar_neck_line["Japanese"]["sort"] = "";
	$fieldLabelsmst_collar_neck_line["Japanese"]["line_category"] = "Line Category";
	$fieldToolTipsmst_collar_neck_line["Japanese"]["line_category"] = "";
	$placeHoldersmst_collar_neck_line["Japanese"]["line_category"] = "";
	$fieldLabelsmst_collar_neck_line["Japanese"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_collar_neck_line["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_collar_neck_line["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_collar_neck_line["Japanese"]["category_id"] = "Category Id";
	$fieldToolTipsmst_collar_neck_line["Japanese"]["category_id"] = "";
	$placeHoldersmst_collar_neck_line["Japanese"]["category_id"] = "";
	$fieldLabelsmst_collar_neck_line["Japanese"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_collar_neck_line["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_collar_neck_line["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_collar_neck_line["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_collar_neck_line["Japanese"]["update_by"] = "";
	$placeHoldersmst_collar_neck_line["Japanese"]["update_by"] = "";
	$fieldLabelsmst_collar_neck_line["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_collar_neck_line["Japanese"]["update_at"] = "";
	$placeHoldersmst_collar_neck_line["Japanese"]["update_at"] = "";
	$fieldLabelsmst_collar_neck_line["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_collar_neck_line["Japanese"]["create_by"] = "";
	$placeHoldersmst_collar_neck_line["Japanese"]["create_by"] = "";
	$fieldLabelsmst_collar_neck_line["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_collar_neck_line["Japanese"]["create_at"] = "";
	$placeHoldersmst_collar_neck_line["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_collar_neck_line["Japanese"]))
		$tdatamst_collar_neck_line[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_collar_neck_line[""] = array();
	$fieldToolTipsmst_collar_neck_line[""] = array();
	$placeHoldersmst_collar_neck_line[""] = array();
	$pageTitlesmst_collar_neck_line[""] = array();
	$fieldLabelsmst_collar_neck_line[""]["id"] = "Id";
	$fieldToolTipsmst_collar_neck_line[""]["id"] = "";
	$placeHoldersmst_collar_neck_line[""]["id"] = "";
	$fieldLabelsmst_collar_neck_line[""]["name"] = "Name";
	$fieldToolTipsmst_collar_neck_line[""]["name"] = "";
	$placeHoldersmst_collar_neck_line[""]["name"] = "";
	$fieldLabelsmst_collar_neck_line[""]["english_name"] = "English Name";
	$fieldToolTipsmst_collar_neck_line[""]["english_name"] = "";
	$placeHoldersmst_collar_neck_line[""]["english_name"] = "";
	$fieldLabelsmst_collar_neck_line[""]["sort"] = "Sort";
	$fieldToolTipsmst_collar_neck_line[""]["sort"] = "";
	$placeHoldersmst_collar_neck_line[""]["sort"] = "";
	$fieldLabelsmst_collar_neck_line[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_collar_neck_line[""]["line_category"] = "";
	$placeHoldersmst_collar_neck_line[""]["line_category"] = "";
	$fieldLabelsmst_collar_neck_line[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_collar_neck_line[""]["yahoo_junle"] = "";
	$placeHoldersmst_collar_neck_line[""]["yahoo_junle"] = "";
	$fieldLabelsmst_collar_neck_line[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_collar_neck_line[""]["category_id"] = "";
	$placeHoldersmst_collar_neck_line[""]["category_id"] = "";
	$fieldLabelsmst_collar_neck_line[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_collar_neck_line[""]["sub_category_id1"] = "";
	$placeHoldersmst_collar_neck_line[""]["sub_category_id1"] = "";
	$fieldLabelsmst_collar_neck_line[""]["update_by"] = "Update By";
	$fieldToolTipsmst_collar_neck_line[""]["update_by"] = "";
	$placeHoldersmst_collar_neck_line[""]["update_by"] = "";
	$fieldLabelsmst_collar_neck_line[""]["update_at"] = "Update At";
	$fieldToolTipsmst_collar_neck_line[""]["update_at"] = "";
	$placeHoldersmst_collar_neck_line[""]["update_at"] = "";
	$fieldLabelsmst_collar_neck_line[""]["create_by"] = "Create By";
	$fieldToolTipsmst_collar_neck_line[""]["create_by"] = "";
	$placeHoldersmst_collar_neck_line[""]["create_by"] = "";
	$fieldLabelsmst_collar_neck_line[""]["create_at"] = "Create At";
	$fieldToolTipsmst_collar_neck_line[""]["create_at"] = "";
	$placeHoldersmst_collar_neck_line[""]["create_at"] = "";
	if (count($fieldToolTipsmst_collar_neck_line[""]))
		$tdatamst_collar_neck_line[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_collar_neck_line["English"] = array();
	$fieldToolTipsmst_collar_neck_line["English"] = array();
	$placeHoldersmst_collar_neck_line["English"] = array();
	$pageTitlesmst_collar_neck_line["English"] = array();
	$fieldLabelsmst_collar_neck_line["English"]["id"] = "Id";
	$fieldToolTipsmst_collar_neck_line["English"]["id"] = "";
	$placeHoldersmst_collar_neck_line["English"]["id"] = "";
	$fieldLabelsmst_collar_neck_line["English"]["name"] = "Name";
	$fieldToolTipsmst_collar_neck_line["English"]["name"] = "";
	$placeHoldersmst_collar_neck_line["English"]["name"] = "";
	$fieldLabelsmst_collar_neck_line["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_collar_neck_line["English"]["english_name"] = "";
	$placeHoldersmst_collar_neck_line["English"]["english_name"] = "";
	$fieldLabelsmst_collar_neck_line["English"]["sort"] = "Sort";
	$fieldToolTipsmst_collar_neck_line["English"]["sort"] = "";
	$placeHoldersmst_collar_neck_line["English"]["sort"] = "";
	$fieldLabelsmst_collar_neck_line["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_collar_neck_line["English"]["line_category"] = "";
	$placeHoldersmst_collar_neck_line["English"]["line_category"] = "";
	$fieldLabelsmst_collar_neck_line["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_collar_neck_line["English"]["yahoo_junle"] = "";
	$placeHoldersmst_collar_neck_line["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_collar_neck_line["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_collar_neck_line["English"]["category_id"] = "";
	$placeHoldersmst_collar_neck_line["English"]["category_id"] = "";
	$fieldLabelsmst_collar_neck_line["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_collar_neck_line["English"]["sub_category_id1"] = "";
	$placeHoldersmst_collar_neck_line["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_collar_neck_line["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_collar_neck_line["English"]["update_by"] = "";
	$placeHoldersmst_collar_neck_line["English"]["update_by"] = "";
	$fieldLabelsmst_collar_neck_line["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_collar_neck_line["English"]["update_at"] = "";
	$placeHoldersmst_collar_neck_line["English"]["update_at"] = "";
	$fieldLabelsmst_collar_neck_line["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_collar_neck_line["English"]["create_by"] = "";
	$placeHoldersmst_collar_neck_line["English"]["create_by"] = "";
	$fieldLabelsmst_collar_neck_line["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_collar_neck_line["English"]["create_at"] = "";
	$placeHoldersmst_collar_neck_line["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_collar_neck_line["English"]))
		$tdatamst_collar_neck_line[".isUseToolTips"] = true;
}


	$tdatamst_collar_neck_line[".NCSearch"] = true;



$tdatamst_collar_neck_line[".shortTableName"] = "mst_collar_neck_line";
$tdatamst_collar_neck_line[".nSecOptions"] = 0;
$tdatamst_collar_neck_line[".recsPerRowPrint"] = 1;
$tdatamst_collar_neck_line[".mainTableOwnerID"] = "";
$tdatamst_collar_neck_line[".moveNext"] = 1;
$tdatamst_collar_neck_line[".entityType"] = 0;

$tdatamst_collar_neck_line[".strOriginalTableName"] = "mst_collar_neck_line";

	



$tdatamst_collar_neck_line[".showAddInPopup"] = false;

$tdatamst_collar_neck_line[".showEditInPopup"] = false;

$tdatamst_collar_neck_line[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_collar_neck_line[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_collar_neck_line[".fieldsForRegister"] = array();

$tdatamst_collar_neck_line[".listAjax"] = false;

	$tdatamst_collar_neck_line[".audit"] = true;

	$tdatamst_collar_neck_line[".locking"] = false;



$tdatamst_collar_neck_line[".list"] = true;

$tdatamst_collar_neck_line[".inlineEdit"] = true;


$tdatamst_collar_neck_line[".reorderRecordsByHeader"] = true;



$tdatamst_collar_neck_line[".inlineAdd"] = true;

$tdatamst_collar_neck_line[".import"] = true;

$tdatamst_collar_neck_line[".exportTo"] = true;

$tdatamst_collar_neck_line[".printFriendly"] = true;

$tdatamst_collar_neck_line[".delete"] = true;

$tdatamst_collar_neck_line[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_collar_neck_line[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_collar_neck_line[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_collar_neck_line[".searchSaving"] = false;
//

$tdatamst_collar_neck_line[".showSearchPanel"] = true;
		$tdatamst_collar_neck_line[".flexibleSearch"] = true;

$tdatamst_collar_neck_line[".isUseAjaxSuggest"] = true;

$tdatamst_collar_neck_line[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_collar_neck_line[".ajaxCodeSnippetAdded"] = false;

$tdatamst_collar_neck_line[".buttonsAdded"] = false;

$tdatamst_collar_neck_line[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_collar_neck_line[".isUseTimeForSearch"] = false;





$tdatamst_collar_neck_line[".allSearchFields"] = array();
$tdatamst_collar_neck_line[".filterFields"] = array();
$tdatamst_collar_neck_line[".requiredSearchFields"] = array();

$tdatamst_collar_neck_line[".allSearchFields"][] = "id";
	$tdatamst_collar_neck_line[".allSearchFields"][] = "name";
	$tdatamst_collar_neck_line[".allSearchFields"][] = "english_name";
	$tdatamst_collar_neck_line[".allSearchFields"][] = "sort";
	$tdatamst_collar_neck_line[".allSearchFields"][] = "line_category";
	$tdatamst_collar_neck_line[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_collar_neck_line[".allSearchFields"][] = "category_id";
	$tdatamst_collar_neck_line[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_collar_neck_line[".allSearchFields"][] = "update_by";
	$tdatamst_collar_neck_line[".allSearchFields"][] = "update_at";
	$tdatamst_collar_neck_line[".allSearchFields"][] = "create_by";
	$tdatamst_collar_neck_line[".allSearchFields"][] = "create_at";
	

$tdatamst_collar_neck_line[".googleLikeFields"] = array();
$tdatamst_collar_neck_line[".googleLikeFields"][] = "id";
$tdatamst_collar_neck_line[".googleLikeFields"][] = "name";
$tdatamst_collar_neck_line[".googleLikeFields"][] = "english_name";
$tdatamst_collar_neck_line[".googleLikeFields"][] = "sort";
$tdatamst_collar_neck_line[".googleLikeFields"][] = "line_category";
$tdatamst_collar_neck_line[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_collar_neck_line[".googleLikeFields"][] = "category_id";
$tdatamst_collar_neck_line[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_collar_neck_line[".googleLikeFields"][] = "update_by";
$tdatamst_collar_neck_line[".googleLikeFields"][] = "update_at";
$tdatamst_collar_neck_line[".googleLikeFields"][] = "create_by";
$tdatamst_collar_neck_line[".googleLikeFields"][] = "create_at";

$tdatamst_collar_neck_line[".panelSearchFields"] = array();
$tdatamst_collar_neck_line[".searchPanelOptions"] = array();
$tdatamst_collar_neck_line[".panelSearchFields"][] = "name";
	$tdatamst_collar_neck_line[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_collar_neck_line[".advSearchFields"] = array();
$tdatamst_collar_neck_line[".advSearchFields"][] = "id";
$tdatamst_collar_neck_line[".advSearchFields"][] = "name";
$tdatamst_collar_neck_line[".advSearchFields"][] = "english_name";
$tdatamst_collar_neck_line[".advSearchFields"][] = "sort";
$tdatamst_collar_neck_line[".advSearchFields"][] = "line_category";
$tdatamst_collar_neck_line[".advSearchFields"][] = "yahoo_junle";
$tdatamst_collar_neck_line[".advSearchFields"][] = "category_id";
$tdatamst_collar_neck_line[".advSearchFields"][] = "sub_category_id1";
$tdatamst_collar_neck_line[".advSearchFields"][] = "update_by";
$tdatamst_collar_neck_line[".advSearchFields"][] = "update_at";
$tdatamst_collar_neck_line[".advSearchFields"][] = "create_by";
$tdatamst_collar_neck_line[".advSearchFields"][] = "create_at";

$tdatamst_collar_neck_line[".tableType"] = "list";

$tdatamst_collar_neck_line[".printerPageOrientation"] = 0;
$tdatamst_collar_neck_line[".nPrinterPageScale"] = 100;

$tdatamst_collar_neck_line[".nPrinterSplitRecords"] = 40;

$tdatamst_collar_neck_line[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_collar_neck_line[".geocodingEnabled"] = false;





$tdatamst_collar_neck_line[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_collar_neck_line[".pageSize"] = 100;

$tdatamst_collar_neck_line[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_collar_neck_line[".strOrderBy"] = $tstrOrderBy;

$tdatamst_collar_neck_line[".orderindexes"] = array();

$tdatamst_collar_neck_line[".sqlHead"] = "SELECT id,  	name,  	english_name,  	sort,  	line_category,  	yahoo_junle,  	category_id,  	sub_category_id1,  	update_by,  	update_at,  	create_by,  	create_at";
$tdatamst_collar_neck_line[".sqlFrom"] = "FROM mst_collar_neck_line";
$tdatamst_collar_neck_line[".sqlWhereExpr"] = "";
$tdatamst_collar_neck_line[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_collar_neck_line[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_collar_neck_line[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_collar_neck_line[".highlightSearchResults"] = true;

$tableKeysmst_collar_neck_line = array();
$tableKeysmst_collar_neck_line[] = "id";
$tdatamst_collar_neck_line[".Keys"] = $tableKeysmst_collar_neck_line;

$tdatamst_collar_neck_line[".listFields"] = array();
$tdatamst_collar_neck_line[".listFields"][] = "id";
$tdatamst_collar_neck_line[".listFields"][] = "name";
$tdatamst_collar_neck_line[".listFields"][] = "english_name";
$tdatamst_collar_neck_line[".listFields"][] = "sort";
$tdatamst_collar_neck_line[".listFields"][] = "line_category";
$tdatamst_collar_neck_line[".listFields"][] = "yahoo_junle";
$tdatamst_collar_neck_line[".listFields"][] = "category_id";
$tdatamst_collar_neck_line[".listFields"][] = "sub_category_id1";
$tdatamst_collar_neck_line[".listFields"][] = "update_by";
$tdatamst_collar_neck_line[".listFields"][] = "update_at";
$tdatamst_collar_neck_line[".listFields"][] = "create_by";
$tdatamst_collar_neck_line[".listFields"][] = "create_at";

$tdatamst_collar_neck_line[".hideMobileList"] = array();


$tdatamst_collar_neck_line[".viewFields"] = array();

$tdatamst_collar_neck_line[".addFields"] = array();

$tdatamst_collar_neck_line[".masterListFields"] = array();
$tdatamst_collar_neck_line[".masterListFields"][] = "id";
$tdatamst_collar_neck_line[".masterListFields"][] = "name";
$tdatamst_collar_neck_line[".masterListFields"][] = "english_name";
$tdatamst_collar_neck_line[".masterListFields"][] = "sort";
$tdatamst_collar_neck_line[".masterListFields"][] = "line_category";
$tdatamst_collar_neck_line[".masterListFields"][] = "yahoo_junle";
$tdatamst_collar_neck_line[".masterListFields"][] = "category_id";
$tdatamst_collar_neck_line[".masterListFields"][] = "sub_category_id1";
$tdatamst_collar_neck_line[".masterListFields"][] = "update_by";
$tdatamst_collar_neck_line[".masterListFields"][] = "update_at";
$tdatamst_collar_neck_line[".masterListFields"][] = "create_by";
$tdatamst_collar_neck_line[".masterListFields"][] = "create_at";

$tdatamst_collar_neck_line[".inlineAddFields"] = array();
$tdatamst_collar_neck_line[".inlineAddFields"][] = "name";
$tdatamst_collar_neck_line[".inlineAddFields"][] = "english_name";
$tdatamst_collar_neck_line[".inlineAddFields"][] = "sort";
$tdatamst_collar_neck_line[".inlineAddFields"][] = "line_category";
$tdatamst_collar_neck_line[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_collar_neck_line[".inlineAddFields"][] = "category_id";
$tdatamst_collar_neck_line[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_collar_neck_line[".editFields"] = array();

$tdatamst_collar_neck_line[".inlineEditFields"] = array();
$tdatamst_collar_neck_line[".inlineEditFields"][] = "name";
$tdatamst_collar_neck_line[".inlineEditFields"][] = "english_name";
$tdatamst_collar_neck_line[".inlineEditFields"][] = "sort";
$tdatamst_collar_neck_line[".inlineEditFields"][] = "line_category";
$tdatamst_collar_neck_line[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_collar_neck_line[".inlineEditFields"][] = "category_id";
$tdatamst_collar_neck_line[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_collar_neck_line[".updateSelectedFields"] = array();


$tdatamst_collar_neck_line[".exportFields"] = array();
$tdatamst_collar_neck_line[".exportFields"][] = "id";
$tdatamst_collar_neck_line[".exportFields"][] = "name";
$tdatamst_collar_neck_line[".exportFields"][] = "english_name";
$tdatamst_collar_neck_line[".exportFields"][] = "sort";
$tdatamst_collar_neck_line[".exportFields"][] = "line_category";
$tdatamst_collar_neck_line[".exportFields"][] = "yahoo_junle";
$tdatamst_collar_neck_line[".exportFields"][] = "category_id";
$tdatamst_collar_neck_line[".exportFields"][] = "sub_category_id1";
$tdatamst_collar_neck_line[".exportFields"][] = "update_by";
$tdatamst_collar_neck_line[".exportFields"][] = "update_at";
$tdatamst_collar_neck_line[".exportFields"][] = "create_by";
$tdatamst_collar_neck_line[".exportFields"][] = "create_at";

$tdatamst_collar_neck_line[".importFields"] = array();
$tdatamst_collar_neck_line[".importFields"][] = "id";
$tdatamst_collar_neck_line[".importFields"][] = "name";
$tdatamst_collar_neck_line[".importFields"][] = "english_name";
$tdatamst_collar_neck_line[".importFields"][] = "sort";
$tdatamst_collar_neck_line[".importFields"][] = "line_category";
$tdatamst_collar_neck_line[".importFields"][] = "yahoo_junle";
$tdatamst_collar_neck_line[".importFields"][] = "category_id";
$tdatamst_collar_neck_line[".importFields"][] = "sub_category_id1";

$tdatamst_collar_neck_line[".printFields"] = array();
$tdatamst_collar_neck_line[".printFields"][] = "id";
$tdatamst_collar_neck_line[".printFields"][] = "name";
$tdatamst_collar_neck_line[".printFields"][] = "english_name";
$tdatamst_collar_neck_line[".printFields"][] = "sort";
$tdatamst_collar_neck_line[".printFields"][] = "line_category";
$tdatamst_collar_neck_line[".printFields"][] = "yahoo_junle";
$tdatamst_collar_neck_line[".printFields"][] = "category_id";
$tdatamst_collar_neck_line[".printFields"][] = "sub_category_id1";
$tdatamst_collar_neck_line[".printFields"][] = "update_by";
$tdatamst_collar_neck_line[".printFields"][] = "update_at";
$tdatamst_collar_neck_line[".printFields"][] = "create_by";
$tdatamst_collar_neck_line[".printFields"][] = "create_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_collar_neck_line";
	$fdata["Label"] = GetFieldLabel("mst_collar_neck_line","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




	$tdatamst_collar_neck_line["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_collar_neck_line";
	$fdata["Label"] = GetFieldLabel("mst_collar_neck_line","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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




	$tdatamst_collar_neck_line["name"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_collar_neck_line";
	$fdata["Label"] = GetFieldLabel("mst_collar_neck_line","english_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "english_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "english_name";

	
	
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




	$tdatamst_collar_neck_line["english_name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_collar_neck_line";
	$fdata["Label"] = GetFieldLabel("mst_collar_neck_line","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sort";

	
	
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




	$tdatamst_collar_neck_line["sort"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_collar_neck_line";
	$fdata["Label"] = GetFieldLabel("mst_collar_neck_line","line_category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "line_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "line_category";

	
	
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




	$tdatamst_collar_neck_line["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_collar_neck_line";
	$fdata["Label"] = GetFieldLabel("mst_collar_neck_line","yahoo_junle");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_junle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "yahoo_junle";

	
	
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




	$tdatamst_collar_neck_line["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_collar_neck_line";
	$fdata["Label"] = GetFieldLabel("mst_collar_neck_line","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category_id";

	
	
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




	$tdatamst_collar_neck_line["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_collar_neck_line";
	$fdata["Label"] = GetFieldLabel("mst_collar_neck_line","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_category_id1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sub_category_id1";

	
	
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




	$tdatamst_collar_neck_line["sub_category_id1"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_collar_neck_line";
	$fdata["Label"] = GetFieldLabel("mst_collar_neck_line","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_by";

	
	
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




	$tdatamst_collar_neck_line["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_collar_neck_line";
	$fdata["Label"] = GetFieldLabel("mst_collar_neck_line","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_at";

	
	
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




	$tdatamst_collar_neck_line["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_collar_neck_line";
	$fdata["Label"] = GetFieldLabel("mst_collar_neck_line","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_by";

	
	
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




	$tdatamst_collar_neck_line["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_collar_neck_line";
	$fdata["Label"] = GetFieldLabel("mst_collar_neck_line","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_at";

	
	
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




	$tdatamst_collar_neck_line["create_at"] = $fdata;


$tables_data["mst_collar_neck_line"]=&$tdatamst_collar_neck_line;
$field_labels["mst_collar_neck_line"] = &$fieldLabelsmst_collar_neck_line;
$fieldToolTips["mst_collar_neck_line"] = &$fieldToolTipsmst_collar_neck_line;
$placeHolders["mst_collar_neck_line"] = &$placeHoldersmst_collar_neck_line;
$page_titles["mst_collar_neck_line"] = &$pageTitlesmst_collar_neck_line;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_collar_neck_line"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_collar_neck_line"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_collar_neck_line()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	english_name,  	sort,  	line_category,  	yahoo_junle,  	category_id,  	sub_category_id1,  	update_by,  	update_at,  	create_by,  	create_at";
$proto0["m_strFrom"] = "FROM mst_collar_neck_line";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
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
	"m_strTable" => "mst_collar_neck_line",
	"m_srcTableName" => "mst_collar_neck_line"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_collar_neck_line";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_collar_neck_line",
	"m_srcTableName" => "mst_collar_neck_line"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_collar_neck_line";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_collar_neck_line",
	"m_srcTableName" => "mst_collar_neck_line"
));

$proto10["m_sql"] = "english_name";
$proto10["m_srcTableName"] = "mst_collar_neck_line";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_collar_neck_line",
	"m_srcTableName" => "mst_collar_neck_line"
));

$proto12["m_sql"] = "sort";
$proto12["m_srcTableName"] = "mst_collar_neck_line";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_collar_neck_line",
	"m_srcTableName" => "mst_collar_neck_line"
));

$proto14["m_sql"] = "line_category";
$proto14["m_srcTableName"] = "mst_collar_neck_line";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_collar_neck_line",
	"m_srcTableName" => "mst_collar_neck_line"
));

$proto16["m_sql"] = "yahoo_junle";
$proto16["m_srcTableName"] = "mst_collar_neck_line";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_collar_neck_line",
	"m_srcTableName" => "mst_collar_neck_line"
));

$proto18["m_sql"] = "category_id";
$proto18["m_srcTableName"] = "mst_collar_neck_line";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_collar_neck_line",
	"m_srcTableName" => "mst_collar_neck_line"
));

$proto20["m_sql"] = "sub_category_id1";
$proto20["m_srcTableName"] = "mst_collar_neck_line";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_collar_neck_line",
	"m_srcTableName" => "mst_collar_neck_line"
));

$proto22["m_sql"] = "update_by";
$proto22["m_srcTableName"] = "mst_collar_neck_line";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_collar_neck_line",
	"m_srcTableName" => "mst_collar_neck_line"
));

$proto24["m_sql"] = "update_at";
$proto24["m_srcTableName"] = "mst_collar_neck_line";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_collar_neck_line",
	"m_srcTableName" => "mst_collar_neck_line"
));

$proto26["m_sql"] = "create_by";
$proto26["m_srcTableName"] = "mst_collar_neck_line";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_collar_neck_line",
	"m_srcTableName" => "mst_collar_neck_line"
));

$proto28["m_sql"] = "create_at";
$proto28["m_srcTableName"] = "mst_collar_neck_line";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_collar_neck_line";
$proto31["m_srcTableName"] = "mst_collar_neck_line";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "name";
$proto31["m_columns"][] = "english_name";
$proto31["m_columns"][] = "sort";
$proto31["m_columns"][] = "line_category";
$proto31["m_columns"][] = "yahoo_junle";
$proto31["m_columns"][] = "category_id";
$proto31["m_columns"][] = "sub_category_id1";
$proto31["m_columns"][] = "update_by";
$proto31["m_columns"][] = "update_at";
$proto31["m_columns"][] = "create_by";
$proto31["m_columns"][] = "create_at";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "mst_collar_neck_line";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_collar_neck_line";
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
$proto0["m_srcTableName"]="mst_collar_neck_line";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_collar_neck_line = createSqlQuery_mst_collar_neck_line();


	
		;

												

$tdatamst_collar_neck_line[".sqlquery"] = $queryData_mst_collar_neck_line;

$tableEvents["mst_collar_neck_line"] = new eventsBase;
$tdatamst_collar_neck_line[".hasEvents"] = false;

?>