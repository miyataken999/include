<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_number_of_stones = array();
	$tdatamst_number_of_stones[".truncateText"] = true;
	$tdatamst_number_of_stones[".NumberOfChars"] = 80;
	$tdatamst_number_of_stones[".ShortName"] = "mst_number_of_stones";
	$tdatamst_number_of_stones[".OwnerID"] = "";
	$tdatamst_number_of_stones[".OriginalTable"] = "mst_number_of_stones";

//	field labels
$fieldLabelsmst_number_of_stones = array();
$fieldToolTipsmst_number_of_stones = array();
$pageTitlesmst_number_of_stones = array();
$placeHoldersmst_number_of_stones = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_number_of_stones["Japanese"] = array();
	$fieldToolTipsmst_number_of_stones["Japanese"] = array();
	$placeHoldersmst_number_of_stones["Japanese"] = array();
	$pageTitlesmst_number_of_stones["Japanese"] = array();
	$fieldLabelsmst_number_of_stones["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_number_of_stones["Japanese"]["id"] = "";
	$placeHoldersmst_number_of_stones["Japanese"]["id"] = "";
	$fieldLabelsmst_number_of_stones["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_number_of_stones["Japanese"]["name"] = "";
	$placeHoldersmst_number_of_stones["Japanese"]["name"] = "";
	$fieldLabelsmst_number_of_stones["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_number_of_stones["Japanese"]["sort"] = "";
	$placeHoldersmst_number_of_stones["Japanese"]["sort"] = "";
	$fieldLabelsmst_number_of_stones["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_number_of_stones["Japanese"]["update_at"] = "";
	$placeHoldersmst_number_of_stones["Japanese"]["update_at"] = "";
	$fieldLabelsmst_number_of_stones["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_number_of_stones["Japanese"]["update_by"] = "";
	$placeHoldersmst_number_of_stones["Japanese"]["update_by"] = "";
	$fieldLabelsmst_number_of_stones["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_number_of_stones["Japanese"]["create_at"] = "";
	$placeHoldersmst_number_of_stones["Japanese"]["create_at"] = "";
	$fieldLabelsmst_number_of_stones["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_number_of_stones["Japanese"]["create_by"] = "";
	$placeHoldersmst_number_of_stones["Japanese"]["create_by"] = "";
	$fieldLabelsmst_number_of_stones["Japanese"]["line_category"] = "ラインカテゴリー";
	$fieldToolTipsmst_number_of_stones["Japanese"]["line_category"] = "";
	$placeHoldersmst_number_of_stones["Japanese"]["line_category"] = "";
	$fieldLabelsmst_number_of_stones["Japanese"]["yahoo_junle"] = "ブランドID";
	$fieldToolTipsmst_number_of_stones["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_number_of_stones["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_number_of_stones["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_number_of_stones["Japanese"]["category_id"] = "";
	$placeHoldersmst_number_of_stones["Japanese"]["category_id"] = "";
	$fieldLabelsmst_number_of_stones["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsmst_number_of_stones["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_number_of_stones["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_number_of_stones["Japanese"]["english_name"] = "英名";
	$fieldToolTipsmst_number_of_stones["Japanese"]["english_name"] = "";
	$placeHoldersmst_number_of_stones["Japanese"]["english_name"] = "";
	if (count($fieldToolTipsmst_number_of_stones["Japanese"]))
		$tdatamst_number_of_stones[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_number_of_stones[""] = array();
	$fieldToolTipsmst_number_of_stones[""] = array();
	$placeHoldersmst_number_of_stones[""] = array();
	$pageTitlesmst_number_of_stones[""] = array();
	$fieldLabelsmst_number_of_stones[""]["id"] = "Id";
	$fieldToolTipsmst_number_of_stones[""]["id"] = "";
	$placeHoldersmst_number_of_stones[""]["id"] = "";
	$fieldLabelsmst_number_of_stones[""]["name"] = "Name";
	$fieldToolTipsmst_number_of_stones[""]["name"] = "";
	$placeHoldersmst_number_of_stones[""]["name"] = "";
	$fieldLabelsmst_number_of_stones[""]["sort"] = "Sort";
	$fieldToolTipsmst_number_of_stones[""]["sort"] = "";
	$placeHoldersmst_number_of_stones[""]["sort"] = "";
	$fieldLabelsmst_number_of_stones[""]["update_at"] = "Update At";
	$fieldToolTipsmst_number_of_stones[""]["update_at"] = "";
	$placeHoldersmst_number_of_stones[""]["update_at"] = "";
	$fieldLabelsmst_number_of_stones[""]["update_by"] = "Update By";
	$fieldToolTipsmst_number_of_stones[""]["update_by"] = "";
	$placeHoldersmst_number_of_stones[""]["update_by"] = "";
	$fieldLabelsmst_number_of_stones[""]["create_at"] = "Create At";
	$fieldToolTipsmst_number_of_stones[""]["create_at"] = "";
	$placeHoldersmst_number_of_stones[""]["create_at"] = "";
	$fieldLabelsmst_number_of_stones[""]["create_by"] = "Create By";
	$fieldToolTipsmst_number_of_stones[""]["create_by"] = "";
	$placeHoldersmst_number_of_stones[""]["create_by"] = "";
	$fieldLabelsmst_number_of_stones[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_number_of_stones[""]["line_category"] = "";
	$placeHoldersmst_number_of_stones[""]["line_category"] = "";
	$fieldLabelsmst_number_of_stones[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_number_of_stones[""]["yahoo_junle"] = "";
	$placeHoldersmst_number_of_stones[""]["yahoo_junle"] = "";
	$fieldLabelsmst_number_of_stones[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_number_of_stones[""]["category_id"] = "";
	$placeHoldersmst_number_of_stones[""]["category_id"] = "";
	$fieldLabelsmst_number_of_stones[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_number_of_stones[""]["sub_category_id1"] = "";
	$placeHoldersmst_number_of_stones[""]["sub_category_id1"] = "";
	$fieldLabelsmst_number_of_stones[""]["english_name"] = "English Name";
	$fieldToolTipsmst_number_of_stones[""]["english_name"] = "";
	$placeHoldersmst_number_of_stones[""]["english_name"] = "";
	if (count($fieldToolTipsmst_number_of_stones[""]))
		$tdatamst_number_of_stones[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_number_of_stones["English"] = array();
	$fieldToolTipsmst_number_of_stones["English"] = array();
	$placeHoldersmst_number_of_stones["English"] = array();
	$pageTitlesmst_number_of_stones["English"] = array();
	$fieldLabelsmst_number_of_stones["English"]["id"] = "Id";
	$fieldToolTipsmst_number_of_stones["English"]["id"] = "";
	$placeHoldersmst_number_of_stones["English"]["id"] = "";
	$fieldLabelsmst_number_of_stones["English"]["name"] = "Name";
	$fieldToolTipsmst_number_of_stones["English"]["name"] = "";
	$placeHoldersmst_number_of_stones["English"]["name"] = "";
	$fieldLabelsmst_number_of_stones["English"]["sort"] = "Sort";
	$fieldToolTipsmst_number_of_stones["English"]["sort"] = "";
	$placeHoldersmst_number_of_stones["English"]["sort"] = "";
	$fieldLabelsmst_number_of_stones["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_number_of_stones["English"]["update_at"] = "";
	$placeHoldersmst_number_of_stones["English"]["update_at"] = "";
	$fieldLabelsmst_number_of_stones["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_number_of_stones["English"]["update_by"] = "";
	$placeHoldersmst_number_of_stones["English"]["update_by"] = "";
	$fieldLabelsmst_number_of_stones["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_number_of_stones["English"]["create_at"] = "";
	$placeHoldersmst_number_of_stones["English"]["create_at"] = "";
	$fieldLabelsmst_number_of_stones["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_number_of_stones["English"]["create_by"] = "";
	$placeHoldersmst_number_of_stones["English"]["create_by"] = "";
	$fieldLabelsmst_number_of_stones["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_number_of_stones["English"]["line_category"] = "";
	$placeHoldersmst_number_of_stones["English"]["line_category"] = "";
	$fieldLabelsmst_number_of_stones["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_number_of_stones["English"]["yahoo_junle"] = "";
	$placeHoldersmst_number_of_stones["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_number_of_stones["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_number_of_stones["English"]["category_id"] = "";
	$placeHoldersmst_number_of_stones["English"]["category_id"] = "";
	$fieldLabelsmst_number_of_stones["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_number_of_stones["English"]["sub_category_id1"] = "";
	$placeHoldersmst_number_of_stones["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_number_of_stones["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_number_of_stones["English"]["english_name"] = "";
	$placeHoldersmst_number_of_stones["English"]["english_name"] = "";
	if (count($fieldToolTipsmst_number_of_stones["English"]))
		$tdatamst_number_of_stones[".isUseToolTips"] = true;
}


	$tdatamst_number_of_stones[".NCSearch"] = true;



$tdatamst_number_of_stones[".shortTableName"] = "mst_number_of_stones";
$tdatamst_number_of_stones[".nSecOptions"] = 0;
$tdatamst_number_of_stones[".recsPerRowPrint"] = 1;
$tdatamst_number_of_stones[".mainTableOwnerID"] = "";
$tdatamst_number_of_stones[".moveNext"] = 1;
$tdatamst_number_of_stones[".entityType"] = 0;

$tdatamst_number_of_stones[".strOriginalTableName"] = "mst_number_of_stones";

	



$tdatamst_number_of_stones[".showAddInPopup"] = false;

$tdatamst_number_of_stones[".showEditInPopup"] = false;

$tdatamst_number_of_stones[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_number_of_stones[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_number_of_stones[".fieldsForRegister"] = array();

$tdatamst_number_of_stones[".listAjax"] = false;

	$tdatamst_number_of_stones[".audit"] = true;

	$tdatamst_number_of_stones[".locking"] = false;



$tdatamst_number_of_stones[".list"] = true;

$tdatamst_number_of_stones[".inlineEdit"] = true;


$tdatamst_number_of_stones[".reorderRecordsByHeader"] = true;



$tdatamst_number_of_stones[".inlineAdd"] = true;

$tdatamst_number_of_stones[".import"] = true;

$tdatamst_number_of_stones[".exportTo"] = true;

$tdatamst_number_of_stones[".printFriendly"] = true;

$tdatamst_number_of_stones[".delete"] = true;

$tdatamst_number_of_stones[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_number_of_stones[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_number_of_stones[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_number_of_stones[".searchSaving"] = false;
//

$tdatamst_number_of_stones[".showSearchPanel"] = true;
		$tdatamst_number_of_stones[".flexibleSearch"] = true;

$tdatamst_number_of_stones[".isUseAjaxSuggest"] = true;

$tdatamst_number_of_stones[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_number_of_stones[".ajaxCodeSnippetAdded"] = false;

$tdatamst_number_of_stones[".buttonsAdded"] = false;

$tdatamst_number_of_stones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_number_of_stones[".isUseTimeForSearch"] = false;





$tdatamst_number_of_stones[".allSearchFields"] = array();
$tdatamst_number_of_stones[".filterFields"] = array();
$tdatamst_number_of_stones[".requiredSearchFields"] = array();

$tdatamst_number_of_stones[".allSearchFields"][] = "id";
	$tdatamst_number_of_stones[".allSearchFields"][] = "name";
	$tdatamst_number_of_stones[".allSearchFields"][] = "sort";
	$tdatamst_number_of_stones[".allSearchFields"][] = "update_at";
	$tdatamst_number_of_stones[".allSearchFields"][] = "update_by";
	$tdatamst_number_of_stones[".allSearchFields"][] = "create_at";
	$tdatamst_number_of_stones[".allSearchFields"][] = "create_by";
	$tdatamst_number_of_stones[".allSearchFields"][] = "line_category";
	$tdatamst_number_of_stones[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_number_of_stones[".allSearchFields"][] = "category_id";
	$tdatamst_number_of_stones[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_number_of_stones[".allSearchFields"][] = "english_name";
	

$tdatamst_number_of_stones[".googleLikeFields"] = array();
$tdatamst_number_of_stones[".googleLikeFields"][] = "id";
$tdatamst_number_of_stones[".googleLikeFields"][] = "name";
$tdatamst_number_of_stones[".googleLikeFields"][] = "sort";
$tdatamst_number_of_stones[".googleLikeFields"][] = "update_at";
$tdatamst_number_of_stones[".googleLikeFields"][] = "update_by";
$tdatamst_number_of_stones[".googleLikeFields"][] = "create_at";
$tdatamst_number_of_stones[".googleLikeFields"][] = "create_by";
$tdatamst_number_of_stones[".googleLikeFields"][] = "line_category";
$tdatamst_number_of_stones[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_number_of_stones[".googleLikeFields"][] = "category_id";
$tdatamst_number_of_stones[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_number_of_stones[".googleLikeFields"][] = "english_name";


$tdatamst_number_of_stones[".advSearchFields"] = array();
$tdatamst_number_of_stones[".advSearchFields"][] = "id";
$tdatamst_number_of_stones[".advSearchFields"][] = "name";
$tdatamst_number_of_stones[".advSearchFields"][] = "sort";
$tdatamst_number_of_stones[".advSearchFields"][] = "update_at";
$tdatamst_number_of_stones[".advSearchFields"][] = "update_by";
$tdatamst_number_of_stones[".advSearchFields"][] = "create_at";
$tdatamst_number_of_stones[".advSearchFields"][] = "create_by";
$tdatamst_number_of_stones[".advSearchFields"][] = "line_category";
$tdatamst_number_of_stones[".advSearchFields"][] = "yahoo_junle";
$tdatamst_number_of_stones[".advSearchFields"][] = "category_id";
$tdatamst_number_of_stones[".advSearchFields"][] = "sub_category_id1";
$tdatamst_number_of_stones[".advSearchFields"][] = "english_name";

$tdatamst_number_of_stones[".tableType"] = "list";

$tdatamst_number_of_stones[".printerPageOrientation"] = 0;
$tdatamst_number_of_stones[".nPrinterPageScale"] = 100;

$tdatamst_number_of_stones[".nPrinterSplitRecords"] = 40;

$tdatamst_number_of_stones[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_number_of_stones[".geocodingEnabled"] = false;





$tdatamst_number_of_stones[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_number_of_stones[".pageSize"] = 100;

$tdatamst_number_of_stones[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_number_of_stones[".strOrderBy"] = $tstrOrderBy;

$tdatamst_number_of_stones[".orderindexes"] = array();
$tdatamst_number_of_stones[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_number_of_stones[".sqlHead"] = "SELECT id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$tdatamst_number_of_stones[".sqlFrom"] = "FROM mst_number_of_stones";
$tdatamst_number_of_stones[".sqlWhereExpr"] = "";
$tdatamst_number_of_stones[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_number_of_stones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_number_of_stones[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_number_of_stones[".highlightSearchResults"] = true;

$tableKeysmst_number_of_stones = array();
$tableKeysmst_number_of_stones[] = "id";
$tdatamst_number_of_stones[".Keys"] = $tableKeysmst_number_of_stones;

$tdatamst_number_of_stones[".listFields"] = array();
$tdatamst_number_of_stones[".listFields"][] = "id";
$tdatamst_number_of_stones[".listFields"][] = "name";
$tdatamst_number_of_stones[".listFields"][] = "english_name";
$tdatamst_number_of_stones[".listFields"][] = "sort";
$tdatamst_number_of_stones[".listFields"][] = "line_category";
$tdatamst_number_of_stones[".listFields"][] = "yahoo_junle";
$tdatamst_number_of_stones[".listFields"][] = "category_id";
$tdatamst_number_of_stones[".listFields"][] = "sub_category_id1";
$tdatamst_number_of_stones[".listFields"][] = "update_by";
$tdatamst_number_of_stones[".listFields"][] = "update_at";
$tdatamst_number_of_stones[".listFields"][] = "create_by";
$tdatamst_number_of_stones[".listFields"][] = "create_at";

$tdatamst_number_of_stones[".hideMobileList"] = array();


$tdatamst_number_of_stones[".viewFields"] = array();

$tdatamst_number_of_stones[".addFields"] = array();

$tdatamst_number_of_stones[".masterListFields"] = array();
$tdatamst_number_of_stones[".masterListFields"][] = "id";
$tdatamst_number_of_stones[".masterListFields"][] = "name";
$tdatamst_number_of_stones[".masterListFields"][] = "sort";
$tdatamst_number_of_stones[".masterListFields"][] = "update_at";
$tdatamst_number_of_stones[".masterListFields"][] = "update_by";
$tdatamst_number_of_stones[".masterListFields"][] = "create_at";
$tdatamst_number_of_stones[".masterListFields"][] = "create_by";
$tdatamst_number_of_stones[".masterListFields"][] = "line_category";
$tdatamst_number_of_stones[".masterListFields"][] = "yahoo_junle";
$tdatamst_number_of_stones[".masterListFields"][] = "category_id";
$tdatamst_number_of_stones[".masterListFields"][] = "sub_category_id1";
$tdatamst_number_of_stones[".masterListFields"][] = "english_name";

$tdatamst_number_of_stones[".inlineAddFields"] = array();
$tdatamst_number_of_stones[".inlineAddFields"][] = "name";
$tdatamst_number_of_stones[".inlineAddFields"][] = "english_name";
$tdatamst_number_of_stones[".inlineAddFields"][] = "sort";
$tdatamst_number_of_stones[".inlineAddFields"][] = "line_category";
$tdatamst_number_of_stones[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_number_of_stones[".inlineAddFields"][] = "category_id";
$tdatamst_number_of_stones[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_number_of_stones[".editFields"] = array();

$tdatamst_number_of_stones[".inlineEditFields"] = array();
$tdatamst_number_of_stones[".inlineEditFields"][] = "name";
$tdatamst_number_of_stones[".inlineEditFields"][] = "english_name";
$tdatamst_number_of_stones[".inlineEditFields"][] = "sort";
$tdatamst_number_of_stones[".inlineEditFields"][] = "line_category";
$tdatamst_number_of_stones[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_number_of_stones[".inlineEditFields"][] = "category_id";
$tdatamst_number_of_stones[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_number_of_stones[".updateSelectedFields"] = array();


$tdatamst_number_of_stones[".exportFields"] = array();
$tdatamst_number_of_stones[".exportFields"][] = "id";
$tdatamst_number_of_stones[".exportFields"][] = "name";
$tdatamst_number_of_stones[".exportFields"][] = "sort";
$tdatamst_number_of_stones[".exportFields"][] = "update_at";
$tdatamst_number_of_stones[".exportFields"][] = "update_by";
$tdatamst_number_of_stones[".exportFields"][] = "create_at";
$tdatamst_number_of_stones[".exportFields"][] = "create_by";
$tdatamst_number_of_stones[".exportFields"][] = "line_category";
$tdatamst_number_of_stones[".exportFields"][] = "yahoo_junle";
$tdatamst_number_of_stones[".exportFields"][] = "category_id";
$tdatamst_number_of_stones[".exportFields"][] = "sub_category_id1";
$tdatamst_number_of_stones[".exportFields"][] = "english_name";

$tdatamst_number_of_stones[".importFields"] = array();
$tdatamst_number_of_stones[".importFields"][] = "id";
$tdatamst_number_of_stones[".importFields"][] = "name";
$tdatamst_number_of_stones[".importFields"][] = "sort";
$tdatamst_number_of_stones[".importFields"][] = "line_category";
$tdatamst_number_of_stones[".importFields"][] = "yahoo_junle";
$tdatamst_number_of_stones[".importFields"][] = "category_id";
$tdatamst_number_of_stones[".importFields"][] = "sub_category_id1";
$tdatamst_number_of_stones[".importFields"][] = "english_name";

$tdatamst_number_of_stones[".printFields"] = array();
$tdatamst_number_of_stones[".printFields"][] = "english_name";
$tdatamst_number_of_stones[".printFields"][] = "id";
$tdatamst_number_of_stones[".printFields"][] = "name";
$tdatamst_number_of_stones[".printFields"][] = "sort";
$tdatamst_number_of_stones[".printFields"][] = "line_category";
$tdatamst_number_of_stones[".printFields"][] = "yahoo_junle";
$tdatamst_number_of_stones[".printFields"][] = "category_id";
$tdatamst_number_of_stones[".printFields"][] = "sub_category_id1";
$tdatamst_number_of_stones[".printFields"][] = "update_by";
$tdatamst_number_of_stones[".printFields"][] = "update_at";
$tdatamst_number_of_stones[".printFields"][] = "create_by";
$tdatamst_number_of_stones[".printFields"][] = "create_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_number_of_stones";
	$fdata["Label"] = GetFieldLabel("mst_number_of_stones","id");
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




	$tdatamst_number_of_stones["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_number_of_stones";
	$fdata["Label"] = GetFieldLabel("mst_number_of_stones","name");
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

	
	



		$edata["IsRequired"] = true;

	
	
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




	$tdatamst_number_of_stones["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_number_of_stones";
	$fdata["Label"] = GetFieldLabel("mst_number_of_stones","sort");
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




	$tdatamst_number_of_stones["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_number_of_stones";
	$fdata["Label"] = GetFieldLabel("mst_number_of_stones","update_at");
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




	$tdatamst_number_of_stones["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_number_of_stones";
	$fdata["Label"] = GetFieldLabel("mst_number_of_stones","update_by");
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




	$tdatamst_number_of_stones["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_number_of_stones";
	$fdata["Label"] = GetFieldLabel("mst_number_of_stones","create_at");
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




	$tdatamst_number_of_stones["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_number_of_stones";
	$fdata["Label"] = GetFieldLabel("mst_number_of_stones","create_by");
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




	$tdatamst_number_of_stones["create_by"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_number_of_stones";
	$fdata["Label"] = GetFieldLabel("mst_number_of_stones","line_category");
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




	$tdatamst_number_of_stones["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_number_of_stones";
	$fdata["Label"] = GetFieldLabel("mst_number_of_stones","yahoo_junle");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "mst_brand2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
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




	$tdatamst_number_of_stones["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_number_of_stones";
	$fdata["Label"] = GetFieldLabel("mst_number_of_stones","category_id");
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




	$tdatamst_number_of_stones["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_number_of_stones";
	$fdata["Label"] = GetFieldLabel("mst_number_of_stones","sub_category_id1");
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




	$tdatamst_number_of_stones["sub_category_id1"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_number_of_stones";
	$fdata["Label"] = GetFieldLabel("mst_number_of_stones","english_name");
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

	
	



		$edata["IsRequired"] = true;

	
	
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




	$tdatamst_number_of_stones["english_name"] = $fdata;


$tables_data["mst_number_of_stones"]=&$tdatamst_number_of_stones;
$field_labels["mst_number_of_stones"] = &$fieldLabelsmst_number_of_stones;
$fieldToolTips["mst_number_of_stones"] = &$fieldToolTipsmst_number_of_stones;
$placeHolders["mst_number_of_stones"] = &$placeHoldersmst_number_of_stones;
$page_titles["mst_number_of_stones"] = &$pageTitlesmst_number_of_stones;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_number_of_stones"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_number_of_stones"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_number_of_stones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  sort,  update_at,  update_by,  create_at,  create_by,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  english_name";
$proto0["m_strFrom"] = "FROM mst_number_of_stones";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
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
	"m_strTable" => "mst_number_of_stones",
	"m_srcTableName" => "mst_number_of_stones"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_number_of_stones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_number_of_stones",
	"m_srcTableName" => "mst_number_of_stones"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_number_of_stones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_number_of_stones",
	"m_srcTableName" => "mst_number_of_stones"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_number_of_stones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_number_of_stones",
	"m_srcTableName" => "mst_number_of_stones"
));

$proto12["m_sql"] = "update_at";
$proto12["m_srcTableName"] = "mst_number_of_stones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_number_of_stones",
	"m_srcTableName" => "mst_number_of_stones"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_number_of_stones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_number_of_stones",
	"m_srcTableName" => "mst_number_of_stones"
));

$proto16["m_sql"] = "create_at";
$proto16["m_srcTableName"] = "mst_number_of_stones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_number_of_stones",
	"m_srcTableName" => "mst_number_of_stones"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_number_of_stones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_number_of_stones",
	"m_srcTableName" => "mst_number_of_stones"
));

$proto20["m_sql"] = "line_category";
$proto20["m_srcTableName"] = "mst_number_of_stones";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_number_of_stones",
	"m_srcTableName" => "mst_number_of_stones"
));

$proto22["m_sql"] = "yahoo_junle";
$proto22["m_srcTableName"] = "mst_number_of_stones";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_number_of_stones",
	"m_srcTableName" => "mst_number_of_stones"
));

$proto24["m_sql"] = "category_id";
$proto24["m_srcTableName"] = "mst_number_of_stones";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_number_of_stones",
	"m_srcTableName" => "mst_number_of_stones"
));

$proto26["m_sql"] = "sub_category_id1";
$proto26["m_srcTableName"] = "mst_number_of_stones";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_number_of_stones",
	"m_srcTableName" => "mst_number_of_stones"
));

$proto28["m_sql"] = "english_name";
$proto28["m_srcTableName"] = "mst_number_of_stones";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_number_of_stones";
$proto31["m_srcTableName"] = "mst_number_of_stones";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "name";
$proto31["m_columns"][] = "sort";
$proto31["m_columns"][] = "update_at";
$proto31["m_columns"][] = "update_by";
$proto31["m_columns"][] = "create_at";
$proto31["m_columns"][] = "create_by";
$proto31["m_columns"][] = "line_category";
$proto31["m_columns"][] = "yahoo_junle";
$proto31["m_columns"][] = "category_id";
$proto31["m_columns"][] = "sub_category_id1";
$proto31["m_columns"][] = "english_name";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "mst_number_of_stones";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_number_of_stones";
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
	"m_strName" => "id",
	"m_strTable" => "mst_number_of_stones",
	"m_srcTableName" => "mst_number_of_stones"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 0;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_number_of_stones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_number_of_stones = createSqlQuery_mst_number_of_stones();


	
		;

												

$tdatamst_number_of_stones[".sqlquery"] = $queryData_mst_number_of_stones;

include_once(getabspath("include/mst_number_of_stones_events.php"));
$tableEvents["mst_number_of_stones"] = new eventclass_mst_number_of_stones;
$tdatamst_number_of_stones[".hasEvents"] = true;

?>