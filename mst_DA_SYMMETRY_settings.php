<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_DA_SYMMETRY = array();
	$tdatamst_DA_SYMMETRY[".truncateText"] = true;
	$tdatamst_DA_SYMMETRY[".NumberOfChars"] = 80;
	$tdatamst_DA_SYMMETRY[".ShortName"] = "mst_DA_SYMMETRY";
	$tdatamst_DA_SYMMETRY[".OwnerID"] = "";
	$tdatamst_DA_SYMMETRY[".OriginalTable"] = "mst_DA_SYMMETRY";

//	field labels
$fieldLabelsmst_DA_SYMMETRY = array();
$fieldToolTipsmst_DA_SYMMETRY = array();
$pageTitlesmst_DA_SYMMETRY = array();
$placeHoldersmst_DA_SYMMETRY = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_DA_SYMMETRY["Japanese"] = array();
	$fieldToolTipsmst_DA_SYMMETRY["Japanese"] = array();
	$placeHoldersmst_DA_SYMMETRY["Japanese"] = array();
	$pageTitlesmst_DA_SYMMETRY["Japanese"] = array();
	$fieldLabelsmst_DA_SYMMETRY["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_DA_SYMMETRY["Japanese"]["id"] = "";
	$placeHoldersmst_DA_SYMMETRY["Japanese"]["id"] = "";
	$fieldLabelsmst_DA_SYMMETRY["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_DA_SYMMETRY["Japanese"]["name"] = "";
	$placeHoldersmst_DA_SYMMETRY["Japanese"]["name"] = "";
	$fieldLabelsmst_DA_SYMMETRY["Japanese"]["english_name"] = "English Name";
	$fieldToolTipsmst_DA_SYMMETRY["Japanese"]["english_name"] = "";
	$placeHoldersmst_DA_SYMMETRY["Japanese"]["english_name"] = "";
	$fieldLabelsmst_DA_SYMMETRY["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_DA_SYMMETRY["Japanese"]["sort"] = "";
	$placeHoldersmst_DA_SYMMETRY["Japanese"]["sort"] = "";
	$fieldLabelsmst_DA_SYMMETRY["Japanese"]["line_category"] = "Line Category";
	$fieldToolTipsmst_DA_SYMMETRY["Japanese"]["line_category"] = "";
	$placeHoldersmst_DA_SYMMETRY["Japanese"]["line_category"] = "";
	$fieldLabelsmst_DA_SYMMETRY["Japanese"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_DA_SYMMETRY["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_DA_SYMMETRY["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_DA_SYMMETRY["Japanese"]["category_id"] = "大カテ";
	$fieldToolTipsmst_DA_SYMMETRY["Japanese"]["category_id"] = "";
	$placeHoldersmst_DA_SYMMETRY["Japanese"]["category_id"] = "";
	$fieldLabelsmst_DA_SYMMETRY["Japanese"]["sub_category_id1"] = "中カテ";
	$fieldToolTipsmst_DA_SYMMETRY["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_DA_SYMMETRY["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_DA_SYMMETRY["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_DA_SYMMETRY["Japanese"]["update_at"] = "";
	$placeHoldersmst_DA_SYMMETRY["Japanese"]["update_at"] = "";
	$fieldLabelsmst_DA_SYMMETRY["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_DA_SYMMETRY["Japanese"]["update_by"] = "";
	$placeHoldersmst_DA_SYMMETRY["Japanese"]["update_by"] = "";
	$fieldLabelsmst_DA_SYMMETRY["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_DA_SYMMETRY["Japanese"]["create_at"] = "";
	$placeHoldersmst_DA_SYMMETRY["Japanese"]["create_at"] = "";
	$fieldLabelsmst_DA_SYMMETRY["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_DA_SYMMETRY["Japanese"]["create_by"] = "";
	$placeHoldersmst_DA_SYMMETRY["Japanese"]["create_by"] = "";
	if (count($fieldToolTipsmst_DA_SYMMETRY["Japanese"]))
		$tdatamst_DA_SYMMETRY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_DA_SYMMETRY[""] = array();
	$fieldToolTipsmst_DA_SYMMETRY[""] = array();
	$placeHoldersmst_DA_SYMMETRY[""] = array();
	$pageTitlesmst_DA_SYMMETRY[""] = array();
	$fieldLabelsmst_DA_SYMMETRY[""]["id"] = "Id";
	$fieldToolTipsmst_DA_SYMMETRY[""]["id"] = "";
	$placeHoldersmst_DA_SYMMETRY[""]["id"] = "";
	$fieldLabelsmst_DA_SYMMETRY[""]["name"] = "Name";
	$fieldToolTipsmst_DA_SYMMETRY[""]["name"] = "";
	$placeHoldersmst_DA_SYMMETRY[""]["name"] = "";
	$fieldLabelsmst_DA_SYMMETRY[""]["english_name"] = "English Name";
	$fieldToolTipsmst_DA_SYMMETRY[""]["english_name"] = "";
	$placeHoldersmst_DA_SYMMETRY[""]["english_name"] = "";
	$fieldLabelsmst_DA_SYMMETRY[""]["sort"] = "Sort";
	$fieldToolTipsmst_DA_SYMMETRY[""]["sort"] = "";
	$placeHoldersmst_DA_SYMMETRY[""]["sort"] = "";
	$fieldLabelsmst_DA_SYMMETRY[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_DA_SYMMETRY[""]["line_category"] = "";
	$placeHoldersmst_DA_SYMMETRY[""]["line_category"] = "";
	$fieldLabelsmst_DA_SYMMETRY[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_DA_SYMMETRY[""]["yahoo_junle"] = "";
	$placeHoldersmst_DA_SYMMETRY[""]["yahoo_junle"] = "";
	$fieldLabelsmst_DA_SYMMETRY[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_DA_SYMMETRY[""]["category_id"] = "";
	$placeHoldersmst_DA_SYMMETRY[""]["category_id"] = "";
	$fieldLabelsmst_DA_SYMMETRY[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_DA_SYMMETRY[""]["sub_category_id1"] = "";
	$placeHoldersmst_DA_SYMMETRY[""]["sub_category_id1"] = "";
	$fieldLabelsmst_DA_SYMMETRY[""]["update_at"] = "Update At";
	$fieldToolTipsmst_DA_SYMMETRY[""]["update_at"] = "";
	$placeHoldersmst_DA_SYMMETRY[""]["update_at"] = "";
	$fieldLabelsmst_DA_SYMMETRY[""]["update_by"] = "Update By";
	$fieldToolTipsmst_DA_SYMMETRY[""]["update_by"] = "";
	$placeHoldersmst_DA_SYMMETRY[""]["update_by"] = "";
	$fieldLabelsmst_DA_SYMMETRY[""]["create_at"] = "Create At";
	$fieldToolTipsmst_DA_SYMMETRY[""]["create_at"] = "";
	$placeHoldersmst_DA_SYMMETRY[""]["create_at"] = "";
	$fieldLabelsmst_DA_SYMMETRY[""]["create_by"] = "Create By";
	$fieldToolTipsmst_DA_SYMMETRY[""]["create_by"] = "";
	$placeHoldersmst_DA_SYMMETRY[""]["create_by"] = "";
	if (count($fieldToolTipsmst_DA_SYMMETRY[""]))
		$tdatamst_DA_SYMMETRY[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_DA_SYMMETRY["English"] = array();
	$fieldToolTipsmst_DA_SYMMETRY["English"] = array();
	$placeHoldersmst_DA_SYMMETRY["English"] = array();
	$pageTitlesmst_DA_SYMMETRY["English"] = array();
	$fieldLabelsmst_DA_SYMMETRY["English"]["id"] = "Id";
	$fieldToolTipsmst_DA_SYMMETRY["English"]["id"] = "";
	$placeHoldersmst_DA_SYMMETRY["English"]["id"] = "";
	$fieldLabelsmst_DA_SYMMETRY["English"]["name"] = "Name";
	$fieldToolTipsmst_DA_SYMMETRY["English"]["name"] = "";
	$placeHoldersmst_DA_SYMMETRY["English"]["name"] = "";
	$fieldLabelsmst_DA_SYMMETRY["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_DA_SYMMETRY["English"]["english_name"] = "";
	$placeHoldersmst_DA_SYMMETRY["English"]["english_name"] = "";
	$fieldLabelsmst_DA_SYMMETRY["English"]["sort"] = "Sort";
	$fieldToolTipsmst_DA_SYMMETRY["English"]["sort"] = "";
	$placeHoldersmst_DA_SYMMETRY["English"]["sort"] = "";
	$fieldLabelsmst_DA_SYMMETRY["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_DA_SYMMETRY["English"]["line_category"] = "";
	$placeHoldersmst_DA_SYMMETRY["English"]["line_category"] = "";
	$fieldLabelsmst_DA_SYMMETRY["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_DA_SYMMETRY["English"]["yahoo_junle"] = "";
	$placeHoldersmst_DA_SYMMETRY["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_DA_SYMMETRY["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_DA_SYMMETRY["English"]["category_id"] = "";
	$placeHoldersmst_DA_SYMMETRY["English"]["category_id"] = "";
	$fieldLabelsmst_DA_SYMMETRY["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_DA_SYMMETRY["English"]["sub_category_id1"] = "";
	$placeHoldersmst_DA_SYMMETRY["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_DA_SYMMETRY["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_DA_SYMMETRY["English"]["update_at"] = "";
	$placeHoldersmst_DA_SYMMETRY["English"]["update_at"] = "";
	$fieldLabelsmst_DA_SYMMETRY["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_DA_SYMMETRY["English"]["update_by"] = "";
	$placeHoldersmst_DA_SYMMETRY["English"]["update_by"] = "";
	$fieldLabelsmst_DA_SYMMETRY["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_DA_SYMMETRY["English"]["create_at"] = "";
	$placeHoldersmst_DA_SYMMETRY["English"]["create_at"] = "";
	$fieldLabelsmst_DA_SYMMETRY["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_DA_SYMMETRY["English"]["create_by"] = "";
	$placeHoldersmst_DA_SYMMETRY["English"]["create_by"] = "";
	if (count($fieldToolTipsmst_DA_SYMMETRY["English"]))
		$tdatamst_DA_SYMMETRY[".isUseToolTips"] = true;
}


	$tdatamst_DA_SYMMETRY[".NCSearch"] = true;



$tdatamst_DA_SYMMETRY[".shortTableName"] = "mst_DA_SYMMETRY";
$tdatamst_DA_SYMMETRY[".nSecOptions"] = 0;
$tdatamst_DA_SYMMETRY[".recsPerRowPrint"] = 1;
$tdatamst_DA_SYMMETRY[".mainTableOwnerID"] = "";
$tdatamst_DA_SYMMETRY[".moveNext"] = 1;
$tdatamst_DA_SYMMETRY[".entityType"] = 0;

$tdatamst_DA_SYMMETRY[".strOriginalTableName"] = "mst_DA_SYMMETRY";

	



$tdatamst_DA_SYMMETRY[".showAddInPopup"] = false;

$tdatamst_DA_SYMMETRY[".showEditInPopup"] = false;

$tdatamst_DA_SYMMETRY[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_DA_SYMMETRY[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_DA_SYMMETRY[".fieldsForRegister"] = array();

$tdatamst_DA_SYMMETRY[".listAjax"] = false;

	$tdatamst_DA_SYMMETRY[".audit"] = true;

	$tdatamst_DA_SYMMETRY[".locking"] = false;



$tdatamst_DA_SYMMETRY[".list"] = true;

$tdatamst_DA_SYMMETRY[".inlineEdit"] = true;


$tdatamst_DA_SYMMETRY[".reorderRecordsByHeader"] = true;



$tdatamst_DA_SYMMETRY[".inlineAdd"] = true;

$tdatamst_DA_SYMMETRY[".import"] = true;

$tdatamst_DA_SYMMETRY[".exportTo"] = true;


$tdatamst_DA_SYMMETRY[".delete"] = true;

$tdatamst_DA_SYMMETRY[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_DA_SYMMETRY[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_DA_SYMMETRY[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_DA_SYMMETRY[".searchSaving"] = false;
//

$tdatamst_DA_SYMMETRY[".showSearchPanel"] = true;
		$tdatamst_DA_SYMMETRY[".flexibleSearch"] = true;

$tdatamst_DA_SYMMETRY[".isUseAjaxSuggest"] = true;

$tdatamst_DA_SYMMETRY[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_DA_SYMMETRY[".ajaxCodeSnippetAdded"] = false;

$tdatamst_DA_SYMMETRY[".buttonsAdded"] = false;

$tdatamst_DA_SYMMETRY[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_DA_SYMMETRY[".isUseTimeForSearch"] = false;





$tdatamst_DA_SYMMETRY[".allSearchFields"] = array();
$tdatamst_DA_SYMMETRY[".filterFields"] = array();
$tdatamst_DA_SYMMETRY[".requiredSearchFields"] = array();

$tdatamst_DA_SYMMETRY[".allSearchFields"][] = "id";
	$tdatamst_DA_SYMMETRY[".allSearchFields"][] = "name";
	$tdatamst_DA_SYMMETRY[".allSearchFields"][] = "english_name";
	$tdatamst_DA_SYMMETRY[".allSearchFields"][] = "sort";
	$tdatamst_DA_SYMMETRY[".allSearchFields"][] = "line_category";
	$tdatamst_DA_SYMMETRY[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_DA_SYMMETRY[".allSearchFields"][] = "category_id";
	$tdatamst_DA_SYMMETRY[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_DA_SYMMETRY[".allSearchFields"][] = "update_at";
	$tdatamst_DA_SYMMETRY[".allSearchFields"][] = "update_by";
	$tdatamst_DA_SYMMETRY[".allSearchFields"][] = "create_at";
	$tdatamst_DA_SYMMETRY[".allSearchFields"][] = "create_by";
	

$tdatamst_DA_SYMMETRY[".googleLikeFields"] = array();
$tdatamst_DA_SYMMETRY[".googleLikeFields"][] = "id";
$tdatamst_DA_SYMMETRY[".googleLikeFields"][] = "name";
$tdatamst_DA_SYMMETRY[".googleLikeFields"][] = "english_name";
$tdatamst_DA_SYMMETRY[".googleLikeFields"][] = "sort";
$tdatamst_DA_SYMMETRY[".googleLikeFields"][] = "line_category";
$tdatamst_DA_SYMMETRY[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_DA_SYMMETRY[".googleLikeFields"][] = "category_id";
$tdatamst_DA_SYMMETRY[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_DA_SYMMETRY[".googleLikeFields"][] = "update_at";
$tdatamst_DA_SYMMETRY[".googleLikeFields"][] = "update_by";
$tdatamst_DA_SYMMETRY[".googleLikeFields"][] = "create_at";
$tdatamst_DA_SYMMETRY[".googleLikeFields"][] = "create_by";

$tdatamst_DA_SYMMETRY[".panelSearchFields"] = array();
$tdatamst_DA_SYMMETRY[".searchPanelOptions"] = array();
$tdatamst_DA_SYMMETRY[".panelSearchFields"][] = "name";
	$tdatamst_DA_SYMMETRY[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_DA_SYMMETRY[".advSearchFields"] = array();
$tdatamst_DA_SYMMETRY[".advSearchFields"][] = "id";
$tdatamst_DA_SYMMETRY[".advSearchFields"][] = "name";
$tdatamst_DA_SYMMETRY[".advSearchFields"][] = "english_name";
$tdatamst_DA_SYMMETRY[".advSearchFields"][] = "sort";
$tdatamst_DA_SYMMETRY[".advSearchFields"][] = "line_category";
$tdatamst_DA_SYMMETRY[".advSearchFields"][] = "yahoo_junle";
$tdatamst_DA_SYMMETRY[".advSearchFields"][] = "category_id";
$tdatamst_DA_SYMMETRY[".advSearchFields"][] = "sub_category_id1";
$tdatamst_DA_SYMMETRY[".advSearchFields"][] = "update_at";
$tdatamst_DA_SYMMETRY[".advSearchFields"][] = "update_by";
$tdatamst_DA_SYMMETRY[".advSearchFields"][] = "create_at";
$tdatamst_DA_SYMMETRY[".advSearchFields"][] = "create_by";

$tdatamst_DA_SYMMETRY[".tableType"] = "list";

$tdatamst_DA_SYMMETRY[".printerPageOrientation"] = 0;
$tdatamst_DA_SYMMETRY[".nPrinterPageScale"] = 100;

$tdatamst_DA_SYMMETRY[".nPrinterSplitRecords"] = 40;

$tdatamst_DA_SYMMETRY[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_DA_SYMMETRY[".geocodingEnabled"] = false;





$tdatamst_DA_SYMMETRY[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_DA_SYMMETRY[".pageSize"] = 20;

$tdatamst_DA_SYMMETRY[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY sort";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_DA_SYMMETRY[".strOrderBy"] = $tstrOrderBy;

$tdatamst_DA_SYMMETRY[".orderindexes"] = array();
$tdatamst_DA_SYMMETRY[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_DA_SYMMETRY[".sqlHead"] = "SELECT id,  name,  english_name,  sort,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  update_at,  update_by,  create_at,  create_by";
$tdatamst_DA_SYMMETRY[".sqlFrom"] = "FROM mst_DA_SYMMETRY";
$tdatamst_DA_SYMMETRY[".sqlWhereExpr"] = "";
$tdatamst_DA_SYMMETRY[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_DA_SYMMETRY[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_DA_SYMMETRY[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_DA_SYMMETRY[".highlightSearchResults"] = true;

$tableKeysmst_DA_SYMMETRY = array();
$tableKeysmst_DA_SYMMETRY[] = "id";
$tdatamst_DA_SYMMETRY[".Keys"] = $tableKeysmst_DA_SYMMETRY;

$tdatamst_DA_SYMMETRY[".listFields"] = array();
$tdatamst_DA_SYMMETRY[".listFields"][] = "id";
$tdatamst_DA_SYMMETRY[".listFields"][] = "name";
$tdatamst_DA_SYMMETRY[".listFields"][] = "english_name";
$tdatamst_DA_SYMMETRY[".listFields"][] = "sort";
$tdatamst_DA_SYMMETRY[".listFields"][] = "line_category";
$tdatamst_DA_SYMMETRY[".listFields"][] = "yahoo_junle";
$tdatamst_DA_SYMMETRY[".listFields"][] = "category_id";
$tdatamst_DA_SYMMETRY[".listFields"][] = "sub_category_id1";
$tdatamst_DA_SYMMETRY[".listFields"][] = "update_at";
$tdatamst_DA_SYMMETRY[".listFields"][] = "update_by";
$tdatamst_DA_SYMMETRY[".listFields"][] = "create_at";
$tdatamst_DA_SYMMETRY[".listFields"][] = "create_by";

$tdatamst_DA_SYMMETRY[".hideMobileList"] = array();


$tdatamst_DA_SYMMETRY[".viewFields"] = array();

$tdatamst_DA_SYMMETRY[".addFields"] = array();

$tdatamst_DA_SYMMETRY[".masterListFields"] = array();
$tdatamst_DA_SYMMETRY[".masterListFields"][] = "id";
$tdatamst_DA_SYMMETRY[".masterListFields"][] = "name";
$tdatamst_DA_SYMMETRY[".masterListFields"][] = "english_name";
$tdatamst_DA_SYMMETRY[".masterListFields"][] = "sort";
$tdatamst_DA_SYMMETRY[".masterListFields"][] = "line_category";
$tdatamst_DA_SYMMETRY[".masterListFields"][] = "yahoo_junle";
$tdatamst_DA_SYMMETRY[".masterListFields"][] = "category_id";
$tdatamst_DA_SYMMETRY[".masterListFields"][] = "sub_category_id1";
$tdatamst_DA_SYMMETRY[".masterListFields"][] = "update_at";
$tdatamst_DA_SYMMETRY[".masterListFields"][] = "update_by";
$tdatamst_DA_SYMMETRY[".masterListFields"][] = "create_at";
$tdatamst_DA_SYMMETRY[".masterListFields"][] = "create_by";

$tdatamst_DA_SYMMETRY[".inlineAddFields"] = array();
$tdatamst_DA_SYMMETRY[".inlineAddFields"][] = "name";
$tdatamst_DA_SYMMETRY[".inlineAddFields"][] = "english_name";
$tdatamst_DA_SYMMETRY[".inlineAddFields"][] = "sort";
$tdatamst_DA_SYMMETRY[".inlineAddFields"][] = "line_category";
$tdatamst_DA_SYMMETRY[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_DA_SYMMETRY[".inlineAddFields"][] = "category_id";
$tdatamst_DA_SYMMETRY[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_DA_SYMMETRY[".editFields"] = array();

$tdatamst_DA_SYMMETRY[".inlineEditFields"] = array();
$tdatamst_DA_SYMMETRY[".inlineEditFields"][] = "name";
$tdatamst_DA_SYMMETRY[".inlineEditFields"][] = "english_name";
$tdatamst_DA_SYMMETRY[".inlineEditFields"][] = "sort";
$tdatamst_DA_SYMMETRY[".inlineEditFields"][] = "line_category";
$tdatamst_DA_SYMMETRY[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_DA_SYMMETRY[".inlineEditFields"][] = "category_id";
$tdatamst_DA_SYMMETRY[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_DA_SYMMETRY[".updateSelectedFields"] = array();


$tdatamst_DA_SYMMETRY[".exportFields"] = array();
$tdatamst_DA_SYMMETRY[".exportFields"][] = "id";
$tdatamst_DA_SYMMETRY[".exportFields"][] = "name";
$tdatamst_DA_SYMMETRY[".exportFields"][] = "english_name";
$tdatamst_DA_SYMMETRY[".exportFields"][] = "sort";
$tdatamst_DA_SYMMETRY[".exportFields"][] = "line_category";
$tdatamst_DA_SYMMETRY[".exportFields"][] = "yahoo_junle";
$tdatamst_DA_SYMMETRY[".exportFields"][] = "category_id";
$tdatamst_DA_SYMMETRY[".exportFields"][] = "sub_category_id1";
$tdatamst_DA_SYMMETRY[".exportFields"][] = "update_at";
$tdatamst_DA_SYMMETRY[".exportFields"][] = "update_by";
$tdatamst_DA_SYMMETRY[".exportFields"][] = "create_at";
$tdatamst_DA_SYMMETRY[".exportFields"][] = "create_by";

$tdatamst_DA_SYMMETRY[".importFields"] = array();
$tdatamst_DA_SYMMETRY[".importFields"][] = "id";
$tdatamst_DA_SYMMETRY[".importFields"][] = "name";
$tdatamst_DA_SYMMETRY[".importFields"][] = "english_name";
$tdatamst_DA_SYMMETRY[".importFields"][] = "sort";
$tdatamst_DA_SYMMETRY[".importFields"][] = "line_category";
$tdatamst_DA_SYMMETRY[".importFields"][] = "yahoo_junle";
$tdatamst_DA_SYMMETRY[".importFields"][] = "category_id";
$tdatamst_DA_SYMMETRY[".importFields"][] = "sub_category_id1";

$tdatamst_DA_SYMMETRY[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_DA_SYMMETRY";
	$fdata["Label"] = GetFieldLabel("mst_DA_SYMMETRY","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_DA_SYMMETRY["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_DA_SYMMETRY";
	$fdata["Label"] = GetFieldLabel("mst_DA_SYMMETRY","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_DA_SYMMETRY["name"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_DA_SYMMETRY";
	$fdata["Label"] = GetFieldLabel("mst_DA_SYMMETRY","english_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_DA_SYMMETRY["english_name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_DA_SYMMETRY";
	$fdata["Label"] = GetFieldLabel("mst_DA_SYMMETRY","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_DA_SYMMETRY["sort"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_DA_SYMMETRY";
	$fdata["Label"] = GetFieldLabel("mst_DA_SYMMETRY","line_category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_DA_SYMMETRY["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_DA_SYMMETRY";
	$fdata["Label"] = GetFieldLabel("mst_DA_SYMMETRY","yahoo_junle");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_DA_SYMMETRY["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_DA_SYMMETRY";
	$fdata["Label"] = GetFieldLabel("mst_DA_SYMMETRY","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_DA_SYMMETRY["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_DA_SYMMETRY";
	$fdata["Label"] = GetFieldLabel("mst_DA_SYMMETRY","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_DA_SYMMETRY["sub_category_id1"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_DA_SYMMETRY";
	$fdata["Label"] = GetFieldLabel("mst_DA_SYMMETRY","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_DA_SYMMETRY["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_DA_SYMMETRY";
	$fdata["Label"] = GetFieldLabel("mst_DA_SYMMETRY","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_DA_SYMMETRY["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_DA_SYMMETRY";
	$fdata["Label"] = GetFieldLabel("mst_DA_SYMMETRY","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_DA_SYMMETRY["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_DA_SYMMETRY";
	$fdata["Label"] = GetFieldLabel("mst_DA_SYMMETRY","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_DA_SYMMETRY["create_by"] = $fdata;


$tables_data["mst_DA_SYMMETRY"]=&$tdatamst_DA_SYMMETRY;
$field_labels["mst_DA_SYMMETRY"] = &$fieldLabelsmst_DA_SYMMETRY;
$fieldToolTips["mst_DA_SYMMETRY"] = &$fieldToolTipsmst_DA_SYMMETRY;
$placeHolders["mst_DA_SYMMETRY"] = &$placeHoldersmst_DA_SYMMETRY;
$page_titles["mst_DA_SYMMETRY"] = &$pageTitlesmst_DA_SYMMETRY;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_DA_SYMMETRY"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_DA_SYMMETRY"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_DA_SYMMETRY()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  english_name,  sort,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  update_at,  update_by,  create_at,  create_by";
$proto0["m_strFrom"] = "FROM mst_DA_SYMMETRY";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY sort";
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
	"m_strTable" => "mst_DA_SYMMETRY",
	"m_srcTableName" => "mst_DA_SYMMETRY"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_DA_SYMMETRY";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_DA_SYMMETRY",
	"m_srcTableName" => "mst_DA_SYMMETRY"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_DA_SYMMETRY";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_DA_SYMMETRY",
	"m_srcTableName" => "mst_DA_SYMMETRY"
));

$proto10["m_sql"] = "english_name";
$proto10["m_srcTableName"] = "mst_DA_SYMMETRY";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_DA_SYMMETRY",
	"m_srcTableName" => "mst_DA_SYMMETRY"
));

$proto12["m_sql"] = "sort";
$proto12["m_srcTableName"] = "mst_DA_SYMMETRY";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_DA_SYMMETRY",
	"m_srcTableName" => "mst_DA_SYMMETRY"
));

$proto14["m_sql"] = "line_category";
$proto14["m_srcTableName"] = "mst_DA_SYMMETRY";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_DA_SYMMETRY",
	"m_srcTableName" => "mst_DA_SYMMETRY"
));

$proto16["m_sql"] = "yahoo_junle";
$proto16["m_srcTableName"] = "mst_DA_SYMMETRY";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_DA_SYMMETRY",
	"m_srcTableName" => "mst_DA_SYMMETRY"
));

$proto18["m_sql"] = "category_id";
$proto18["m_srcTableName"] = "mst_DA_SYMMETRY";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_DA_SYMMETRY",
	"m_srcTableName" => "mst_DA_SYMMETRY"
));

$proto20["m_sql"] = "sub_category_id1";
$proto20["m_srcTableName"] = "mst_DA_SYMMETRY";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_DA_SYMMETRY",
	"m_srcTableName" => "mst_DA_SYMMETRY"
));

$proto22["m_sql"] = "update_at";
$proto22["m_srcTableName"] = "mst_DA_SYMMETRY";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_DA_SYMMETRY",
	"m_srcTableName" => "mst_DA_SYMMETRY"
));

$proto24["m_sql"] = "update_by";
$proto24["m_srcTableName"] = "mst_DA_SYMMETRY";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_DA_SYMMETRY",
	"m_srcTableName" => "mst_DA_SYMMETRY"
));

$proto26["m_sql"] = "create_at";
$proto26["m_srcTableName"] = "mst_DA_SYMMETRY";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_DA_SYMMETRY",
	"m_srcTableName" => "mst_DA_SYMMETRY"
));

$proto28["m_sql"] = "create_by";
$proto28["m_srcTableName"] = "mst_DA_SYMMETRY";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_DA_SYMMETRY";
$proto31["m_srcTableName"] = "mst_DA_SYMMETRY";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "name";
$proto31["m_columns"][] = "english_name";
$proto31["m_columns"][] = "sort";
$proto31["m_columns"][] = "line_category";
$proto31["m_columns"][] = "yahoo_junle";
$proto31["m_columns"][] = "category_id";
$proto31["m_columns"][] = "sub_category_id1";
$proto31["m_columns"][] = "update_at";
$proto31["m_columns"][] = "update_by";
$proto31["m_columns"][] = "create_at";
$proto31["m_columns"][] = "create_by";
$proto31["m_columns"][] = "full_name";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "mst_DA_SYMMETRY";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_DA_SYMMETRY";
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
	"m_strTable" => "mst_DA_SYMMETRY",
	"m_srcTableName" => "mst_DA_SYMMETRY"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 1;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_DA_SYMMETRY";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_DA_SYMMETRY = createSqlQuery_mst_DA_SYMMETRY();


	
		;

												

$tdatamst_DA_SYMMETRY[".sqlquery"] = $queryData_mst_DA_SYMMETRY;

include_once(getabspath("include/mst_DA_SYMMETRY_events.php"));
$tableEvents["mst_DA_SYMMETRY"] = new eventclass_mst_DA_SYMMETRY;
$tdatamst_DA_SYMMETRY[".hasEvents"] = true;

?>