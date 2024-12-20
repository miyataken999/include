<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_country_of_origin = array();
	$tdatamst_country_of_origin[".truncateText"] = true;
	$tdatamst_country_of_origin[".NumberOfChars"] = 80;
	$tdatamst_country_of_origin[".ShortName"] = "mst_country_of_origin";
	$tdatamst_country_of_origin[".OwnerID"] = "";
	$tdatamst_country_of_origin[".OriginalTable"] = "mst_country_of_origin";

//	field labels
$fieldLabelsmst_country_of_origin = array();
$fieldToolTipsmst_country_of_origin = array();
$pageTitlesmst_country_of_origin = array();
$placeHoldersmst_country_of_origin = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_country_of_origin["Japanese"] = array();
	$fieldToolTipsmst_country_of_origin["Japanese"] = array();
	$placeHoldersmst_country_of_origin["Japanese"] = array();
	$pageTitlesmst_country_of_origin["Japanese"] = array();
	$fieldLabelsmst_country_of_origin["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_country_of_origin["Japanese"]["id"] = "";
	$placeHoldersmst_country_of_origin["Japanese"]["id"] = "";
	$fieldLabelsmst_country_of_origin["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_country_of_origin["Japanese"]["name"] = "";
	$placeHoldersmst_country_of_origin["Japanese"]["name"] = "";
	$fieldLabelsmst_country_of_origin["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_country_of_origin["Japanese"]["sort"] = "";
	$placeHoldersmst_country_of_origin["Japanese"]["sort"] = "";
	$fieldLabelsmst_country_of_origin["Japanese"]["line"] = "ラインカテゴリー";
	$fieldToolTipsmst_country_of_origin["Japanese"]["line"] = "";
	$placeHoldersmst_country_of_origin["Japanese"]["line"] = "";
	$fieldLabelsmst_country_of_origin["Japanese"]["yahoo_junle"] = "ブランドID";
	$fieldToolTipsmst_country_of_origin["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_country_of_origin["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_country_of_origin["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_country_of_origin["Japanese"]["category_id"] = "";
	$placeHoldersmst_country_of_origin["Japanese"]["category_id"] = "";
	$fieldLabelsmst_country_of_origin["Japanese"]["sub_category_id1"] = "中カテゴリ―";
	$fieldToolTipsmst_country_of_origin["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_country_of_origin["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_country_of_origin["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsmst_country_of_origin["Japanese"]["updated_at"] = "";
	$placeHoldersmst_country_of_origin["Japanese"]["updated_at"] = "";
	$fieldLabelsmst_country_of_origin["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsmst_country_of_origin["Japanese"]["updated_by"] = "";
	$placeHoldersmst_country_of_origin["Japanese"]["updated_by"] = "";
	$fieldLabelsmst_country_of_origin["Japanese"]["created_at"] = "登録日";
	$fieldToolTipsmst_country_of_origin["Japanese"]["created_at"] = "";
	$placeHoldersmst_country_of_origin["Japanese"]["created_at"] = "";
	$fieldLabelsmst_country_of_origin["Japanese"]["created_by"] = "登録者";
	$fieldToolTipsmst_country_of_origin["Japanese"]["created_by"] = "";
	$placeHoldersmst_country_of_origin["Japanese"]["created_by"] = "";
	$fieldLabelsmst_country_of_origin["Japanese"]["english_name"] = "英名";
	$fieldToolTipsmst_country_of_origin["Japanese"]["english_name"] = "";
	$placeHoldersmst_country_of_origin["Japanese"]["english_name"] = "";
	$fieldLabelsmst_country_of_origin["Japanese"]["country_group"] = "ホールマーク参照用";
	$fieldToolTipsmst_country_of_origin["Japanese"]["country_group"] = "";
	$placeHoldersmst_country_of_origin["Japanese"]["country_group"] = "";
	if (count($fieldToolTipsmst_country_of_origin["Japanese"]))
		$tdatamst_country_of_origin[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_country_of_origin[""] = array();
	$fieldToolTipsmst_country_of_origin[""] = array();
	$placeHoldersmst_country_of_origin[""] = array();
	$pageTitlesmst_country_of_origin[""] = array();
	$fieldLabelsmst_country_of_origin[""]["id"] = "Id";
	$fieldToolTipsmst_country_of_origin[""]["id"] = "";
	$placeHoldersmst_country_of_origin[""]["id"] = "";
	$fieldLabelsmst_country_of_origin[""]["name"] = "Name";
	$fieldToolTipsmst_country_of_origin[""]["name"] = "";
	$placeHoldersmst_country_of_origin[""]["name"] = "";
	$fieldLabelsmst_country_of_origin[""]["sort"] = "Sort";
	$fieldToolTipsmst_country_of_origin[""]["sort"] = "";
	$placeHoldersmst_country_of_origin[""]["sort"] = "";
	$fieldLabelsmst_country_of_origin[""]["line"] = "Line";
	$fieldToolTipsmst_country_of_origin[""]["line"] = "";
	$placeHoldersmst_country_of_origin[""]["line"] = "";
	$fieldLabelsmst_country_of_origin[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_country_of_origin[""]["yahoo_junle"] = "";
	$placeHoldersmst_country_of_origin[""]["yahoo_junle"] = "";
	$fieldLabelsmst_country_of_origin[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_country_of_origin[""]["category_id"] = "";
	$placeHoldersmst_country_of_origin[""]["category_id"] = "";
	$fieldLabelsmst_country_of_origin[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_country_of_origin[""]["sub_category_id1"] = "";
	$placeHoldersmst_country_of_origin[""]["sub_category_id1"] = "";
	$fieldLabelsmst_country_of_origin[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_country_of_origin[""]["updated_at"] = "";
	$placeHoldersmst_country_of_origin[""]["updated_at"] = "";
	$fieldLabelsmst_country_of_origin[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_country_of_origin[""]["updated_by"] = "";
	$placeHoldersmst_country_of_origin[""]["updated_by"] = "";
	$fieldLabelsmst_country_of_origin[""]["created_at"] = "Created At";
	$fieldToolTipsmst_country_of_origin[""]["created_at"] = "";
	$placeHoldersmst_country_of_origin[""]["created_at"] = "";
	$fieldLabelsmst_country_of_origin[""]["created_by"] = "Created By";
	$fieldToolTipsmst_country_of_origin[""]["created_by"] = "";
	$placeHoldersmst_country_of_origin[""]["created_by"] = "";
	$fieldLabelsmst_country_of_origin[""]["english_name"] = "English Name";
	$fieldToolTipsmst_country_of_origin[""]["english_name"] = "";
	$placeHoldersmst_country_of_origin[""]["english_name"] = "";
	$fieldLabelsmst_country_of_origin[""]["country_group"] = "Country Group";
	$fieldToolTipsmst_country_of_origin[""]["country_group"] = "";
	$placeHoldersmst_country_of_origin[""]["country_group"] = "";
	if (count($fieldToolTipsmst_country_of_origin[""]))
		$tdatamst_country_of_origin[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_country_of_origin["English"] = array();
	$fieldToolTipsmst_country_of_origin["English"] = array();
	$placeHoldersmst_country_of_origin["English"] = array();
	$pageTitlesmst_country_of_origin["English"] = array();
	$fieldLabelsmst_country_of_origin["English"]["id"] = "Id";
	$fieldToolTipsmst_country_of_origin["English"]["id"] = "";
	$placeHoldersmst_country_of_origin["English"]["id"] = "";
	$fieldLabelsmst_country_of_origin["English"]["name"] = "Name";
	$fieldToolTipsmst_country_of_origin["English"]["name"] = "";
	$placeHoldersmst_country_of_origin["English"]["name"] = "";
	$fieldLabelsmst_country_of_origin["English"]["sort"] = "Sort";
	$fieldToolTipsmst_country_of_origin["English"]["sort"] = "";
	$placeHoldersmst_country_of_origin["English"]["sort"] = "";
	$fieldLabelsmst_country_of_origin["English"]["line"] = "Line";
	$fieldToolTipsmst_country_of_origin["English"]["line"] = "";
	$placeHoldersmst_country_of_origin["English"]["line"] = "";
	$fieldLabelsmst_country_of_origin["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_country_of_origin["English"]["yahoo_junle"] = "";
	$placeHoldersmst_country_of_origin["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_country_of_origin["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_country_of_origin["English"]["category_id"] = "";
	$placeHoldersmst_country_of_origin["English"]["category_id"] = "";
	$fieldLabelsmst_country_of_origin["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_country_of_origin["English"]["sub_category_id1"] = "";
	$placeHoldersmst_country_of_origin["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_country_of_origin["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_country_of_origin["English"]["updated_at"] = "";
	$placeHoldersmst_country_of_origin["English"]["updated_at"] = "";
	$fieldLabelsmst_country_of_origin["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_country_of_origin["English"]["updated_by"] = "";
	$placeHoldersmst_country_of_origin["English"]["updated_by"] = "";
	$fieldLabelsmst_country_of_origin["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_country_of_origin["English"]["created_at"] = "";
	$placeHoldersmst_country_of_origin["English"]["created_at"] = "";
	$fieldLabelsmst_country_of_origin["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_country_of_origin["English"]["created_by"] = "";
	$placeHoldersmst_country_of_origin["English"]["created_by"] = "";
	$fieldLabelsmst_country_of_origin["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_country_of_origin["English"]["english_name"] = "";
	$placeHoldersmst_country_of_origin["English"]["english_name"] = "";
	$fieldLabelsmst_country_of_origin["English"]["country_group"] = "Country Group";
	$fieldToolTipsmst_country_of_origin["English"]["country_group"] = "";
	$placeHoldersmst_country_of_origin["English"]["country_group"] = "";
	if (count($fieldToolTipsmst_country_of_origin["English"]))
		$tdatamst_country_of_origin[".isUseToolTips"] = true;
}


	$tdatamst_country_of_origin[".NCSearch"] = true;



$tdatamst_country_of_origin[".shortTableName"] = "mst_country_of_origin";
$tdatamst_country_of_origin[".nSecOptions"] = 0;
$tdatamst_country_of_origin[".recsPerRowPrint"] = 1;
$tdatamst_country_of_origin[".mainTableOwnerID"] = "";
$tdatamst_country_of_origin[".moveNext"] = 1;
$tdatamst_country_of_origin[".entityType"] = 0;

$tdatamst_country_of_origin[".strOriginalTableName"] = "mst_country_of_origin";

	



$tdatamst_country_of_origin[".showAddInPopup"] = false;

$tdatamst_country_of_origin[".showEditInPopup"] = false;

$tdatamst_country_of_origin[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_country_of_origin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_country_of_origin[".fieldsForRegister"] = array();

$tdatamst_country_of_origin[".listAjax"] = false;

	$tdatamst_country_of_origin[".audit"] = true;

	$tdatamst_country_of_origin[".locking"] = false;



$tdatamst_country_of_origin[".list"] = true;

$tdatamst_country_of_origin[".inlineEdit"] = true;


$tdatamst_country_of_origin[".reorderRecordsByHeader"] = true;



$tdatamst_country_of_origin[".inlineAdd"] = true;

$tdatamst_country_of_origin[".import"] = true;

$tdatamst_country_of_origin[".exportTo"] = true;

$tdatamst_country_of_origin[".printFriendly"] = true;

$tdatamst_country_of_origin[".delete"] = true;

$tdatamst_country_of_origin[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_country_of_origin[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_country_of_origin[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_country_of_origin[".searchSaving"] = false;
//

$tdatamst_country_of_origin[".showSearchPanel"] = true;
		$tdatamst_country_of_origin[".flexibleSearch"] = true;

$tdatamst_country_of_origin[".isUseAjaxSuggest"] = true;

$tdatamst_country_of_origin[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_country_of_origin[".ajaxCodeSnippetAdded"] = false;

$tdatamst_country_of_origin[".buttonsAdded"] = false;

$tdatamst_country_of_origin[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_country_of_origin[".isUseTimeForSearch"] = false;





$tdatamst_country_of_origin[".allSearchFields"] = array();
$tdatamst_country_of_origin[".filterFields"] = array();
$tdatamst_country_of_origin[".requiredSearchFields"] = array();

$tdatamst_country_of_origin[".allSearchFields"][] = "id";
	$tdatamst_country_of_origin[".allSearchFields"][] = "name";
	$tdatamst_country_of_origin[".allSearchFields"][] = "sort";
	$tdatamst_country_of_origin[".allSearchFields"][] = "line";
	$tdatamst_country_of_origin[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_country_of_origin[".allSearchFields"][] = "category_id";
	$tdatamst_country_of_origin[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_country_of_origin[".allSearchFields"][] = "updated_at";
	$tdatamst_country_of_origin[".allSearchFields"][] = "updated_by";
	$tdatamst_country_of_origin[".allSearchFields"][] = "created_at";
	$tdatamst_country_of_origin[".allSearchFields"][] = "created_by";
	$tdatamst_country_of_origin[".allSearchFields"][] = "english_name";
	$tdatamst_country_of_origin[".allSearchFields"][] = "country_group";
	

$tdatamst_country_of_origin[".googleLikeFields"] = array();
$tdatamst_country_of_origin[".googleLikeFields"][] = "id";
$tdatamst_country_of_origin[".googleLikeFields"][] = "name";
$tdatamst_country_of_origin[".googleLikeFields"][] = "sort";
$tdatamst_country_of_origin[".googleLikeFields"][] = "line";
$tdatamst_country_of_origin[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_country_of_origin[".googleLikeFields"][] = "category_id";
$tdatamst_country_of_origin[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_country_of_origin[".googleLikeFields"][] = "updated_at";
$tdatamst_country_of_origin[".googleLikeFields"][] = "updated_by";
$tdatamst_country_of_origin[".googleLikeFields"][] = "created_at";
$tdatamst_country_of_origin[".googleLikeFields"][] = "created_by";
$tdatamst_country_of_origin[".googleLikeFields"][] = "english_name";
$tdatamst_country_of_origin[".googleLikeFields"][] = "country_group";

$tdatamst_country_of_origin[".panelSearchFields"] = array();
$tdatamst_country_of_origin[".searchPanelOptions"] = array();
$tdatamst_country_of_origin[".panelSearchFields"][] = "id";
	$tdatamst_country_of_origin[".panelSearchFields"][] = "name";
	$tdatamst_country_of_origin[".panelSearchFields"][] = "sort";
	$tdatamst_country_of_origin[".panelSearchFields"][] = "line";
	$tdatamst_country_of_origin[".panelSearchFields"][] = "yahoo_junle";
	$tdatamst_country_of_origin[".panelSearchFields"][] = "category_id";
	$tdatamst_country_of_origin[".panelSearchFields"][] = "sub_category_id1";
	
$tdatamst_country_of_origin[".advSearchFields"] = array();
$tdatamst_country_of_origin[".advSearchFields"][] = "id";
$tdatamst_country_of_origin[".advSearchFields"][] = "name";
$tdatamst_country_of_origin[".advSearchFields"][] = "sort";
$tdatamst_country_of_origin[".advSearchFields"][] = "line";
$tdatamst_country_of_origin[".advSearchFields"][] = "yahoo_junle";
$tdatamst_country_of_origin[".advSearchFields"][] = "category_id";
$tdatamst_country_of_origin[".advSearchFields"][] = "sub_category_id1";
$tdatamst_country_of_origin[".advSearchFields"][] = "updated_at";
$tdatamst_country_of_origin[".advSearchFields"][] = "updated_by";
$tdatamst_country_of_origin[".advSearchFields"][] = "created_at";
$tdatamst_country_of_origin[".advSearchFields"][] = "created_by";
$tdatamst_country_of_origin[".advSearchFields"][] = "english_name";
$tdatamst_country_of_origin[".advSearchFields"][] = "country_group";

$tdatamst_country_of_origin[".tableType"] = "list";

$tdatamst_country_of_origin[".printerPageOrientation"] = 0;
$tdatamst_country_of_origin[".nPrinterPageScale"] = 100;

$tdatamst_country_of_origin[".nPrinterSplitRecords"] = 40;

$tdatamst_country_of_origin[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_country_of_origin[".geocodingEnabled"] = false;





$tdatamst_country_of_origin[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_country_of_origin[".pageSize"] = 100;

$tdatamst_country_of_origin[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_country_of_origin[".strOrderBy"] = $tstrOrderBy;

$tdatamst_country_of_origin[".orderindexes"] = array();
$tdatamst_country_of_origin[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_country_of_origin[".sqlHead"] = "SELECT `id`,  `name`,  `sort`,  `line`,  `yahoo_junle`,  `category_id`,  `sub_category_id1`,  `updated_at`,  `updated_by`,  `created_at`,  `created_by`,  `english_name`,  `country_group`";
$tdatamst_country_of_origin[".sqlFrom"] = "FROM `mst_country_of_origin`";
$tdatamst_country_of_origin[".sqlWhereExpr"] = "";
$tdatamst_country_of_origin[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_country_of_origin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_country_of_origin[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_country_of_origin[".highlightSearchResults"] = true;

$tableKeysmst_country_of_origin = array();
$tableKeysmst_country_of_origin[] = "id";
$tdatamst_country_of_origin[".Keys"] = $tableKeysmst_country_of_origin;

$tdatamst_country_of_origin[".listFields"] = array();
$tdatamst_country_of_origin[".listFields"][] = "id";
$tdatamst_country_of_origin[".listFields"][] = "name";
$tdatamst_country_of_origin[".listFields"][] = "english_name";
$tdatamst_country_of_origin[".listFields"][] = "sort";
$tdatamst_country_of_origin[".listFields"][] = "country_group";
$tdatamst_country_of_origin[".listFields"][] = "line";
$tdatamst_country_of_origin[".listFields"][] = "yahoo_junle";
$tdatamst_country_of_origin[".listFields"][] = "category_id";
$tdatamst_country_of_origin[".listFields"][] = "sub_category_id1";
$tdatamst_country_of_origin[".listFields"][] = "updated_by";
$tdatamst_country_of_origin[".listFields"][] = "updated_at";
$tdatamst_country_of_origin[".listFields"][] = "created_by";
$tdatamst_country_of_origin[".listFields"][] = "created_at";

$tdatamst_country_of_origin[".hideMobileList"] = array();


$tdatamst_country_of_origin[".viewFields"] = array();

$tdatamst_country_of_origin[".addFields"] = array();

$tdatamst_country_of_origin[".masterListFields"] = array();
$tdatamst_country_of_origin[".masterListFields"][] = "id";
$tdatamst_country_of_origin[".masterListFields"][] = "name";
$tdatamst_country_of_origin[".masterListFields"][] = "sort";
$tdatamst_country_of_origin[".masterListFields"][] = "line";
$tdatamst_country_of_origin[".masterListFields"][] = "yahoo_junle";
$tdatamst_country_of_origin[".masterListFields"][] = "category_id";
$tdatamst_country_of_origin[".masterListFields"][] = "sub_category_id1";
$tdatamst_country_of_origin[".masterListFields"][] = "updated_at";
$tdatamst_country_of_origin[".masterListFields"][] = "updated_by";
$tdatamst_country_of_origin[".masterListFields"][] = "created_at";
$tdatamst_country_of_origin[".masterListFields"][] = "created_by";
$tdatamst_country_of_origin[".masterListFields"][] = "english_name";
$tdatamst_country_of_origin[".masterListFields"][] = "country_group";

$tdatamst_country_of_origin[".inlineAddFields"] = array();
$tdatamst_country_of_origin[".inlineAddFields"][] = "name";
$tdatamst_country_of_origin[".inlineAddFields"][] = "english_name";
$tdatamst_country_of_origin[".inlineAddFields"][] = "sort";
$tdatamst_country_of_origin[".inlineAddFields"][] = "country_group";
$tdatamst_country_of_origin[".inlineAddFields"][] = "line";
$tdatamst_country_of_origin[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_country_of_origin[".inlineAddFields"][] = "category_id";
$tdatamst_country_of_origin[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_country_of_origin[".editFields"] = array();

$tdatamst_country_of_origin[".inlineEditFields"] = array();
$tdatamst_country_of_origin[".inlineEditFields"][] = "name";
$tdatamst_country_of_origin[".inlineEditFields"][] = "english_name";
$tdatamst_country_of_origin[".inlineEditFields"][] = "sort";
$tdatamst_country_of_origin[".inlineEditFields"][] = "country_group";
$tdatamst_country_of_origin[".inlineEditFields"][] = "line";
$tdatamst_country_of_origin[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_country_of_origin[".inlineEditFields"][] = "category_id";
$tdatamst_country_of_origin[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_country_of_origin[".updateSelectedFields"] = array();


$tdatamst_country_of_origin[".exportFields"] = array();
$tdatamst_country_of_origin[".exportFields"][] = "id";
$tdatamst_country_of_origin[".exportFields"][] = "name";
$tdatamst_country_of_origin[".exportFields"][] = "english_name";
$tdatamst_country_of_origin[".exportFields"][] = "sort";
$tdatamst_country_of_origin[".exportFields"][] = "country_group";
$tdatamst_country_of_origin[".exportFields"][] = "line";
$tdatamst_country_of_origin[".exportFields"][] = "yahoo_junle";
$tdatamst_country_of_origin[".exportFields"][] = "category_id";
$tdatamst_country_of_origin[".exportFields"][] = "sub_category_id1";
$tdatamst_country_of_origin[".exportFields"][] = "updated_at";
$tdatamst_country_of_origin[".exportFields"][] = "updated_by";
$tdatamst_country_of_origin[".exportFields"][] = "created_at";
$tdatamst_country_of_origin[".exportFields"][] = "created_by";

$tdatamst_country_of_origin[".importFields"] = array();
$tdatamst_country_of_origin[".importFields"][] = "id";
$tdatamst_country_of_origin[".importFields"][] = "name";
$tdatamst_country_of_origin[".importFields"][] = "sort";
$tdatamst_country_of_origin[".importFields"][] = "line";
$tdatamst_country_of_origin[".importFields"][] = "yahoo_junle";
$tdatamst_country_of_origin[".importFields"][] = "category_id";
$tdatamst_country_of_origin[".importFields"][] = "sub_category_id1";
$tdatamst_country_of_origin[".importFields"][] = "english_name";
$tdatamst_country_of_origin[".importFields"][] = "country_group";

$tdatamst_country_of_origin[".printFields"] = array();
$tdatamst_country_of_origin[".printFields"][] = "english_name";
$tdatamst_country_of_origin[".printFields"][] = "country_group";
$tdatamst_country_of_origin[".printFields"][] = "id";
$tdatamst_country_of_origin[".printFields"][] = "name";
$tdatamst_country_of_origin[".printFields"][] = "sort";
$tdatamst_country_of_origin[".printFields"][] = "line";
$tdatamst_country_of_origin[".printFields"][] = "yahoo_junle";
$tdatamst_country_of_origin[".printFields"][] = "category_id";
$tdatamst_country_of_origin[".printFields"][] = "sub_category_id1";
$tdatamst_country_of_origin[".printFields"][] = "updated_at";
$tdatamst_country_of_origin[".printFields"][] = "updated_by";
$tdatamst_country_of_origin[".printFields"][] = "created_at";
$tdatamst_country_of_origin[".printFields"][] = "created_by";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_country_of_origin";
	$fdata["Label"] = GetFieldLabel("mst_country_of_origin","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_country_of_origin["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_country_of_origin";
	$fdata["Label"] = GetFieldLabel("mst_country_of_origin","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_country_of_origin["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_country_of_origin";
	$fdata["Label"] = GetFieldLabel("mst_country_of_origin","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_country_of_origin["sort"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "mst_country_of_origin";
	$fdata["Label"] = GetFieldLabel("mst_country_of_origin","line");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`line`";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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




	$tdatamst_country_of_origin["line"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_country_of_origin";
	$fdata["Label"] = GetFieldLabel("mst_country_of_origin","yahoo_junle");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_junle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`yahoo_junle`";

	
	
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

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
	
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




	$tdatamst_country_of_origin["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_country_of_origin";
	$fdata["Label"] = GetFieldLabel("mst_country_of_origin","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_country_of_origin["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_country_of_origin";
	$fdata["Label"] = GetFieldLabel("mst_country_of_origin","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_country_of_origin["sub_category_id1"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_country_of_origin";
	$fdata["Label"] = GetFieldLabel("mst_country_of_origin","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_country_of_origin["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_country_of_origin";
	$fdata["Label"] = GetFieldLabel("mst_country_of_origin","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_country_of_origin["updated_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_country_of_origin";
	$fdata["Label"] = GetFieldLabel("mst_country_of_origin","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_at`";

	
	
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




	$tdatamst_country_of_origin["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_country_of_origin";
	$fdata["Label"] = GetFieldLabel("mst_country_of_origin","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_by`";

	
	
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




	$tdatamst_country_of_origin["created_by"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_country_of_origin";
	$fdata["Label"] = GetFieldLabel("mst_country_of_origin","english_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "english_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`english_name`";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_country_of_origin["english_name"] = $fdata;
//	country_group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "country_group";
	$fdata["GoodName"] = "country_group";
	$fdata["ownerTable"] = "mst_country_of_origin";
	$fdata["Label"] = GetFieldLabel("mst_country_of_origin","country_group");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "country_group";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`country_group`";

	
	
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
	$edata["LookupTable"] = "mst_hall_mark";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "country_of_origin";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "country_of_origin";

	
	$edata["LookupOrderBy"] = "country_of_origin";

	
	
	
	

	
	
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




	$tdatamst_country_of_origin["country_group"] = $fdata;


$tables_data["mst_country_of_origin"]=&$tdatamst_country_of_origin;
$field_labels["mst_country_of_origin"] = &$fieldLabelsmst_country_of_origin;
$fieldToolTips["mst_country_of_origin"] = &$fieldToolTipsmst_country_of_origin;
$placeHolders["mst_country_of_origin"] = &$placeHoldersmst_country_of_origin;
$page_titles["mst_country_of_origin"] = &$pageTitlesmst_country_of_origin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_country_of_origin"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_country_of_origin"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_country_of_origin()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `sort`,  `line`,  `yahoo_junle`,  `category_id`,  `sub_category_id1`,  `updated_at`,  `updated_by`,  `created_at`,  `created_by`,  `english_name`,  `country_group`";
$proto0["m_strFrom"] = "FROM `mst_country_of_origin`";
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
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_country_of_origin"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_country_of_origin";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_country_of_origin"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_country_of_origin";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_country_of_origin"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_country_of_origin";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_country_of_origin"
));

$proto12["m_sql"] = "`line`";
$proto12["m_srcTableName"] = "mst_country_of_origin";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_country_of_origin"
));

$proto14["m_sql"] = "`yahoo_junle`";
$proto14["m_srcTableName"] = "mst_country_of_origin";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_country_of_origin"
));

$proto16["m_sql"] = "`category_id`";
$proto16["m_srcTableName"] = "mst_country_of_origin";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_country_of_origin"
));

$proto18["m_sql"] = "`sub_category_id1`";
$proto18["m_srcTableName"] = "mst_country_of_origin";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_country_of_origin"
));

$proto20["m_sql"] = "`updated_at`";
$proto20["m_srcTableName"] = "mst_country_of_origin";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_country_of_origin"
));

$proto22["m_sql"] = "`updated_by`";
$proto22["m_srcTableName"] = "mst_country_of_origin";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_country_of_origin"
));

$proto24["m_sql"] = "`created_at`";
$proto24["m_srcTableName"] = "mst_country_of_origin";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_country_of_origin"
));

$proto26["m_sql"] = "`created_by`";
$proto26["m_srcTableName"] = "mst_country_of_origin";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_country_of_origin"
));

$proto28["m_sql"] = "`english_name`";
$proto28["m_srcTableName"] = "mst_country_of_origin";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "country_group",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_country_of_origin"
));

$proto30["m_sql"] = "`country_group`";
$proto30["m_srcTableName"] = "mst_country_of_origin";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "mst_country_of_origin";
$proto33["m_srcTableName"] = "mst_country_of_origin";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "name";
$proto33["m_columns"][] = "sort";
$proto33["m_columns"][] = "line";
$proto33["m_columns"][] = "yahoo_junle";
$proto33["m_columns"][] = "category_id";
$proto33["m_columns"][] = "sub_category_id1";
$proto33["m_columns"][] = "updated_at";
$proto33["m_columns"][] = "updated_by";
$proto33["m_columns"][] = "created_at";
$proto33["m_columns"][] = "created_by";
$proto33["m_columns"][] = "english_name";
$proto33["m_columns"][] = "country_group";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "`mst_country_of_origin`";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "mst_country_of_origin";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_country_of_origin",
	"m_srcTableName" => "mst_country_of_origin"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 1;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_country_of_origin";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_country_of_origin = createSqlQuery_mst_country_of_origin();


	
		;

													

$tdatamst_country_of_origin[".sqlquery"] = $queryData_mst_country_of_origin;

include_once(getabspath("include/mst_country_of_origin_events.php"));
$tableEvents["mst_country_of_origin"] = new eventclass_mst_country_of_origin;
$tdatamst_country_of_origin[".hasEvents"] = true;

?>