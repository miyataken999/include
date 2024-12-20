<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_DA_POLISH = array();
	$tdatamst_DA_POLISH[".truncateText"] = true;
	$tdatamst_DA_POLISH[".NumberOfChars"] = 80;
	$tdatamst_DA_POLISH[".ShortName"] = "mst_DA_POLISH";
	$tdatamst_DA_POLISH[".OwnerID"] = "";
	$tdatamst_DA_POLISH[".OriginalTable"] = "mst_DA_POLISH";

//	field labels
$fieldLabelsmst_DA_POLISH = array();
$fieldToolTipsmst_DA_POLISH = array();
$pageTitlesmst_DA_POLISH = array();
$placeHoldersmst_DA_POLISH = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_DA_POLISH["Japanese"] = array();
	$fieldToolTipsmst_DA_POLISH["Japanese"] = array();
	$placeHoldersmst_DA_POLISH["Japanese"] = array();
	$pageTitlesmst_DA_POLISH["Japanese"] = array();
	$fieldLabelsmst_DA_POLISH["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_DA_POLISH["Japanese"]["id"] = "";
	$placeHoldersmst_DA_POLISH["Japanese"]["id"] = "";
	$fieldLabelsmst_DA_POLISH["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_DA_POLISH["Japanese"]["name"] = "";
	$placeHoldersmst_DA_POLISH["Japanese"]["name"] = "";
	$fieldLabelsmst_DA_POLISH["Japanese"]["english_name"] = "English Name";
	$fieldToolTipsmst_DA_POLISH["Japanese"]["english_name"] = "";
	$placeHoldersmst_DA_POLISH["Japanese"]["english_name"] = "";
	$fieldLabelsmst_DA_POLISH["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_DA_POLISH["Japanese"]["sort"] = "";
	$placeHoldersmst_DA_POLISH["Japanese"]["sort"] = "";
	$fieldLabelsmst_DA_POLISH["Japanese"]["line_category"] = "Line Category";
	$fieldToolTipsmst_DA_POLISH["Japanese"]["line_category"] = "";
	$placeHoldersmst_DA_POLISH["Japanese"]["line_category"] = "";
	$fieldLabelsmst_DA_POLISH["Japanese"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_DA_POLISH["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_DA_POLISH["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_DA_POLISH["Japanese"]["category_id"] = "大カテ";
	$fieldToolTipsmst_DA_POLISH["Japanese"]["category_id"] = "";
	$placeHoldersmst_DA_POLISH["Japanese"]["category_id"] = "";
	$fieldLabelsmst_DA_POLISH["Japanese"]["sub_category_id1"] = "中カテ";
	$fieldToolTipsmst_DA_POLISH["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_DA_POLISH["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_DA_POLISH["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_DA_POLISH["Japanese"]["update_at"] = "";
	$placeHoldersmst_DA_POLISH["Japanese"]["update_at"] = "";
	$fieldLabelsmst_DA_POLISH["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_DA_POLISH["Japanese"]["update_by"] = "";
	$placeHoldersmst_DA_POLISH["Japanese"]["update_by"] = "";
	$fieldLabelsmst_DA_POLISH["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_DA_POLISH["Japanese"]["create_at"] = "";
	$placeHoldersmst_DA_POLISH["Japanese"]["create_at"] = "";
	$fieldLabelsmst_DA_POLISH["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_DA_POLISH["Japanese"]["create_by"] = "";
	$placeHoldersmst_DA_POLISH["Japanese"]["create_by"] = "";
	if (count($fieldToolTipsmst_DA_POLISH["Japanese"]))
		$tdatamst_DA_POLISH[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_DA_POLISH[""] = array();
	$fieldToolTipsmst_DA_POLISH[""] = array();
	$placeHoldersmst_DA_POLISH[""] = array();
	$pageTitlesmst_DA_POLISH[""] = array();
	$fieldLabelsmst_DA_POLISH[""]["id"] = "Id";
	$fieldToolTipsmst_DA_POLISH[""]["id"] = "";
	$placeHoldersmst_DA_POLISH[""]["id"] = "";
	$fieldLabelsmst_DA_POLISH[""]["name"] = "Name";
	$fieldToolTipsmst_DA_POLISH[""]["name"] = "";
	$placeHoldersmst_DA_POLISH[""]["name"] = "";
	$fieldLabelsmst_DA_POLISH[""]["english_name"] = "English Name";
	$fieldToolTipsmst_DA_POLISH[""]["english_name"] = "";
	$placeHoldersmst_DA_POLISH[""]["english_name"] = "";
	$fieldLabelsmst_DA_POLISH[""]["sort"] = "Sort";
	$fieldToolTipsmst_DA_POLISH[""]["sort"] = "";
	$placeHoldersmst_DA_POLISH[""]["sort"] = "";
	$fieldLabelsmst_DA_POLISH[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_DA_POLISH[""]["line_category"] = "";
	$placeHoldersmst_DA_POLISH[""]["line_category"] = "";
	$fieldLabelsmst_DA_POLISH[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_DA_POLISH[""]["yahoo_junle"] = "";
	$placeHoldersmst_DA_POLISH[""]["yahoo_junle"] = "";
	$fieldLabelsmst_DA_POLISH[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_DA_POLISH[""]["category_id"] = "";
	$placeHoldersmst_DA_POLISH[""]["category_id"] = "";
	$fieldLabelsmst_DA_POLISH[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_DA_POLISH[""]["sub_category_id1"] = "";
	$placeHoldersmst_DA_POLISH[""]["sub_category_id1"] = "";
	$fieldLabelsmst_DA_POLISH[""]["update_at"] = "Update At";
	$fieldToolTipsmst_DA_POLISH[""]["update_at"] = "";
	$placeHoldersmst_DA_POLISH[""]["update_at"] = "";
	$fieldLabelsmst_DA_POLISH[""]["update_by"] = "Update By";
	$fieldToolTipsmst_DA_POLISH[""]["update_by"] = "";
	$placeHoldersmst_DA_POLISH[""]["update_by"] = "";
	$fieldLabelsmst_DA_POLISH[""]["create_at"] = "Create At";
	$fieldToolTipsmst_DA_POLISH[""]["create_at"] = "";
	$placeHoldersmst_DA_POLISH[""]["create_at"] = "";
	$fieldLabelsmst_DA_POLISH[""]["create_by"] = "Create By";
	$fieldToolTipsmst_DA_POLISH[""]["create_by"] = "";
	$placeHoldersmst_DA_POLISH[""]["create_by"] = "";
	if (count($fieldToolTipsmst_DA_POLISH[""]))
		$tdatamst_DA_POLISH[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_DA_POLISH["English"] = array();
	$fieldToolTipsmst_DA_POLISH["English"] = array();
	$placeHoldersmst_DA_POLISH["English"] = array();
	$pageTitlesmst_DA_POLISH["English"] = array();
	$fieldLabelsmst_DA_POLISH["English"]["id"] = "Id";
	$fieldToolTipsmst_DA_POLISH["English"]["id"] = "";
	$placeHoldersmst_DA_POLISH["English"]["id"] = "";
	$fieldLabelsmst_DA_POLISH["English"]["name"] = "Name";
	$fieldToolTipsmst_DA_POLISH["English"]["name"] = "";
	$placeHoldersmst_DA_POLISH["English"]["name"] = "";
	$fieldLabelsmst_DA_POLISH["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_DA_POLISH["English"]["english_name"] = "";
	$placeHoldersmst_DA_POLISH["English"]["english_name"] = "";
	$fieldLabelsmst_DA_POLISH["English"]["sort"] = "Sort";
	$fieldToolTipsmst_DA_POLISH["English"]["sort"] = "";
	$placeHoldersmst_DA_POLISH["English"]["sort"] = "";
	$fieldLabelsmst_DA_POLISH["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_DA_POLISH["English"]["line_category"] = "";
	$placeHoldersmst_DA_POLISH["English"]["line_category"] = "";
	$fieldLabelsmst_DA_POLISH["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_DA_POLISH["English"]["yahoo_junle"] = "";
	$placeHoldersmst_DA_POLISH["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_DA_POLISH["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_DA_POLISH["English"]["category_id"] = "";
	$placeHoldersmst_DA_POLISH["English"]["category_id"] = "";
	$fieldLabelsmst_DA_POLISH["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_DA_POLISH["English"]["sub_category_id1"] = "";
	$placeHoldersmst_DA_POLISH["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_DA_POLISH["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_DA_POLISH["English"]["update_at"] = "";
	$placeHoldersmst_DA_POLISH["English"]["update_at"] = "";
	$fieldLabelsmst_DA_POLISH["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_DA_POLISH["English"]["update_by"] = "";
	$placeHoldersmst_DA_POLISH["English"]["update_by"] = "";
	$fieldLabelsmst_DA_POLISH["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_DA_POLISH["English"]["create_at"] = "";
	$placeHoldersmst_DA_POLISH["English"]["create_at"] = "";
	$fieldLabelsmst_DA_POLISH["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_DA_POLISH["English"]["create_by"] = "";
	$placeHoldersmst_DA_POLISH["English"]["create_by"] = "";
	if (count($fieldToolTipsmst_DA_POLISH["English"]))
		$tdatamst_DA_POLISH[".isUseToolTips"] = true;
}


	$tdatamst_DA_POLISH[".NCSearch"] = true;



$tdatamst_DA_POLISH[".shortTableName"] = "mst_DA_POLISH";
$tdatamst_DA_POLISH[".nSecOptions"] = 0;
$tdatamst_DA_POLISH[".recsPerRowPrint"] = 1;
$tdatamst_DA_POLISH[".mainTableOwnerID"] = "";
$tdatamst_DA_POLISH[".moveNext"] = 1;
$tdatamst_DA_POLISH[".entityType"] = 0;

$tdatamst_DA_POLISH[".strOriginalTableName"] = "mst_DA_POLISH";

	



$tdatamst_DA_POLISH[".showAddInPopup"] = false;

$tdatamst_DA_POLISH[".showEditInPopup"] = false;

$tdatamst_DA_POLISH[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_DA_POLISH[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_DA_POLISH[".fieldsForRegister"] = array();

$tdatamst_DA_POLISH[".listAjax"] = false;

	$tdatamst_DA_POLISH[".audit"] = true;

	$tdatamst_DA_POLISH[".locking"] = false;



$tdatamst_DA_POLISH[".list"] = true;

$tdatamst_DA_POLISH[".inlineEdit"] = true;


$tdatamst_DA_POLISH[".reorderRecordsByHeader"] = true;



$tdatamst_DA_POLISH[".inlineAdd"] = true;

$tdatamst_DA_POLISH[".import"] = true;

$tdatamst_DA_POLISH[".exportTo"] = true;


$tdatamst_DA_POLISH[".delete"] = true;

$tdatamst_DA_POLISH[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_DA_POLISH[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_DA_POLISH[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_DA_POLISH[".searchSaving"] = false;
//

$tdatamst_DA_POLISH[".showSearchPanel"] = true;
		$tdatamst_DA_POLISH[".flexibleSearch"] = true;

$tdatamst_DA_POLISH[".isUseAjaxSuggest"] = true;

$tdatamst_DA_POLISH[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_DA_POLISH[".ajaxCodeSnippetAdded"] = false;

$tdatamst_DA_POLISH[".buttonsAdded"] = false;

$tdatamst_DA_POLISH[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_DA_POLISH[".isUseTimeForSearch"] = false;





$tdatamst_DA_POLISH[".allSearchFields"] = array();
$tdatamst_DA_POLISH[".filterFields"] = array();
$tdatamst_DA_POLISH[".requiredSearchFields"] = array();

$tdatamst_DA_POLISH[".allSearchFields"][] = "id";
	$tdatamst_DA_POLISH[".allSearchFields"][] = "name";
	$tdatamst_DA_POLISH[".allSearchFields"][] = "english_name";
	$tdatamst_DA_POLISH[".allSearchFields"][] = "sort";
	$tdatamst_DA_POLISH[".allSearchFields"][] = "line_category";
	$tdatamst_DA_POLISH[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_DA_POLISH[".allSearchFields"][] = "category_id";
	$tdatamst_DA_POLISH[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_DA_POLISH[".allSearchFields"][] = "update_at";
	$tdatamst_DA_POLISH[".allSearchFields"][] = "update_by";
	$tdatamst_DA_POLISH[".allSearchFields"][] = "create_at";
	$tdatamst_DA_POLISH[".allSearchFields"][] = "create_by";
	

$tdatamst_DA_POLISH[".googleLikeFields"] = array();
$tdatamst_DA_POLISH[".googleLikeFields"][] = "id";
$tdatamst_DA_POLISH[".googleLikeFields"][] = "name";
$tdatamst_DA_POLISH[".googleLikeFields"][] = "english_name";
$tdatamst_DA_POLISH[".googleLikeFields"][] = "sort";
$tdatamst_DA_POLISH[".googleLikeFields"][] = "line_category";
$tdatamst_DA_POLISH[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_DA_POLISH[".googleLikeFields"][] = "category_id";
$tdatamst_DA_POLISH[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_DA_POLISH[".googleLikeFields"][] = "update_at";
$tdatamst_DA_POLISH[".googleLikeFields"][] = "update_by";
$tdatamst_DA_POLISH[".googleLikeFields"][] = "create_at";
$tdatamst_DA_POLISH[".googleLikeFields"][] = "create_by";

$tdatamst_DA_POLISH[".panelSearchFields"] = array();
$tdatamst_DA_POLISH[".searchPanelOptions"] = array();
$tdatamst_DA_POLISH[".panelSearchFields"][] = "name";
	$tdatamst_DA_POLISH[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_DA_POLISH[".advSearchFields"] = array();
$tdatamst_DA_POLISH[".advSearchFields"][] = "id";
$tdatamst_DA_POLISH[".advSearchFields"][] = "name";
$tdatamst_DA_POLISH[".advSearchFields"][] = "english_name";
$tdatamst_DA_POLISH[".advSearchFields"][] = "sort";
$tdatamst_DA_POLISH[".advSearchFields"][] = "line_category";
$tdatamst_DA_POLISH[".advSearchFields"][] = "yahoo_junle";
$tdatamst_DA_POLISH[".advSearchFields"][] = "category_id";
$tdatamst_DA_POLISH[".advSearchFields"][] = "sub_category_id1";
$tdatamst_DA_POLISH[".advSearchFields"][] = "update_at";
$tdatamst_DA_POLISH[".advSearchFields"][] = "update_by";
$tdatamst_DA_POLISH[".advSearchFields"][] = "create_at";
$tdatamst_DA_POLISH[".advSearchFields"][] = "create_by";

$tdatamst_DA_POLISH[".tableType"] = "list";

$tdatamst_DA_POLISH[".printerPageOrientation"] = 0;
$tdatamst_DA_POLISH[".nPrinterPageScale"] = 100;

$tdatamst_DA_POLISH[".nPrinterSplitRecords"] = 40;

$tdatamst_DA_POLISH[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_DA_POLISH[".geocodingEnabled"] = false;





$tdatamst_DA_POLISH[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_DA_POLISH[".pageSize"] = 20;

$tdatamst_DA_POLISH[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY sort";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_DA_POLISH[".strOrderBy"] = $tstrOrderBy;

$tdatamst_DA_POLISH[".orderindexes"] = array();
$tdatamst_DA_POLISH[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_DA_POLISH[".sqlHead"] = "SELECT id,  name,  english_name,  sort,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  update_at,  update_by,  create_at,  create_by";
$tdatamst_DA_POLISH[".sqlFrom"] = "FROM mst_DA_POLISH";
$tdatamst_DA_POLISH[".sqlWhereExpr"] = "";
$tdatamst_DA_POLISH[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_DA_POLISH[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_DA_POLISH[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_DA_POLISH[".highlightSearchResults"] = true;

$tableKeysmst_DA_POLISH = array();
$tableKeysmst_DA_POLISH[] = "id";
$tdatamst_DA_POLISH[".Keys"] = $tableKeysmst_DA_POLISH;

$tdatamst_DA_POLISH[".listFields"] = array();
$tdatamst_DA_POLISH[".listFields"][] = "id";
$tdatamst_DA_POLISH[".listFields"][] = "name";
$tdatamst_DA_POLISH[".listFields"][] = "english_name";
$tdatamst_DA_POLISH[".listFields"][] = "sort";
$tdatamst_DA_POLISH[".listFields"][] = "line_category";
$tdatamst_DA_POLISH[".listFields"][] = "yahoo_junle";
$tdatamst_DA_POLISH[".listFields"][] = "category_id";
$tdatamst_DA_POLISH[".listFields"][] = "sub_category_id1";
$tdatamst_DA_POLISH[".listFields"][] = "update_at";
$tdatamst_DA_POLISH[".listFields"][] = "update_by";
$tdatamst_DA_POLISH[".listFields"][] = "create_at";
$tdatamst_DA_POLISH[".listFields"][] = "create_by";

$tdatamst_DA_POLISH[".hideMobileList"] = array();


$tdatamst_DA_POLISH[".viewFields"] = array();

$tdatamst_DA_POLISH[".addFields"] = array();

$tdatamst_DA_POLISH[".masterListFields"] = array();
$tdatamst_DA_POLISH[".masterListFields"][] = "id";
$tdatamst_DA_POLISH[".masterListFields"][] = "name";
$tdatamst_DA_POLISH[".masterListFields"][] = "english_name";
$tdatamst_DA_POLISH[".masterListFields"][] = "sort";
$tdatamst_DA_POLISH[".masterListFields"][] = "line_category";
$tdatamst_DA_POLISH[".masterListFields"][] = "yahoo_junle";
$tdatamst_DA_POLISH[".masterListFields"][] = "category_id";
$tdatamst_DA_POLISH[".masterListFields"][] = "sub_category_id1";
$tdatamst_DA_POLISH[".masterListFields"][] = "update_at";
$tdatamst_DA_POLISH[".masterListFields"][] = "update_by";
$tdatamst_DA_POLISH[".masterListFields"][] = "create_at";
$tdatamst_DA_POLISH[".masterListFields"][] = "create_by";

$tdatamst_DA_POLISH[".inlineAddFields"] = array();
$tdatamst_DA_POLISH[".inlineAddFields"][] = "name";
$tdatamst_DA_POLISH[".inlineAddFields"][] = "english_name";
$tdatamst_DA_POLISH[".inlineAddFields"][] = "sort";
$tdatamst_DA_POLISH[".inlineAddFields"][] = "line_category";
$tdatamst_DA_POLISH[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_DA_POLISH[".inlineAddFields"][] = "category_id";
$tdatamst_DA_POLISH[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_DA_POLISH[".editFields"] = array();

$tdatamst_DA_POLISH[".inlineEditFields"] = array();
$tdatamst_DA_POLISH[".inlineEditFields"][] = "name";
$tdatamst_DA_POLISH[".inlineEditFields"][] = "english_name";
$tdatamst_DA_POLISH[".inlineEditFields"][] = "sort";
$tdatamst_DA_POLISH[".inlineEditFields"][] = "line_category";
$tdatamst_DA_POLISH[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_DA_POLISH[".inlineEditFields"][] = "category_id";
$tdatamst_DA_POLISH[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_DA_POLISH[".updateSelectedFields"] = array();


$tdatamst_DA_POLISH[".exportFields"] = array();
$tdatamst_DA_POLISH[".exportFields"][] = "id";
$tdatamst_DA_POLISH[".exportFields"][] = "name";
$tdatamst_DA_POLISH[".exportFields"][] = "english_name";
$tdatamst_DA_POLISH[".exportFields"][] = "sort";
$tdatamst_DA_POLISH[".exportFields"][] = "line_category";
$tdatamst_DA_POLISH[".exportFields"][] = "yahoo_junle";
$tdatamst_DA_POLISH[".exportFields"][] = "category_id";
$tdatamst_DA_POLISH[".exportFields"][] = "sub_category_id1";
$tdatamst_DA_POLISH[".exportFields"][] = "update_at";
$tdatamst_DA_POLISH[".exportFields"][] = "update_by";
$tdatamst_DA_POLISH[".exportFields"][] = "create_at";
$tdatamst_DA_POLISH[".exportFields"][] = "create_by";

$tdatamst_DA_POLISH[".importFields"] = array();
$tdatamst_DA_POLISH[".importFields"][] = "id";
$tdatamst_DA_POLISH[".importFields"][] = "name";
$tdatamst_DA_POLISH[".importFields"][] = "english_name";
$tdatamst_DA_POLISH[".importFields"][] = "sort";
$tdatamst_DA_POLISH[".importFields"][] = "line_category";
$tdatamst_DA_POLISH[".importFields"][] = "yahoo_junle";
$tdatamst_DA_POLISH[".importFields"][] = "category_id";
$tdatamst_DA_POLISH[".importFields"][] = "sub_category_id1";

$tdatamst_DA_POLISH[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_DA_POLISH";
	$fdata["Label"] = GetFieldLabel("mst_DA_POLISH","id");
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




	$tdatamst_DA_POLISH["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_DA_POLISH";
	$fdata["Label"] = GetFieldLabel("mst_DA_POLISH","name");
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




	$tdatamst_DA_POLISH["name"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_DA_POLISH";
	$fdata["Label"] = GetFieldLabel("mst_DA_POLISH","english_name");
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




	$tdatamst_DA_POLISH["english_name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_DA_POLISH";
	$fdata["Label"] = GetFieldLabel("mst_DA_POLISH","sort");
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




	$tdatamst_DA_POLISH["sort"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_DA_POLISH";
	$fdata["Label"] = GetFieldLabel("mst_DA_POLISH","line_category");
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




	$tdatamst_DA_POLISH["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_DA_POLISH";
	$fdata["Label"] = GetFieldLabel("mst_DA_POLISH","yahoo_junle");
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




	$tdatamst_DA_POLISH["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_DA_POLISH";
	$fdata["Label"] = GetFieldLabel("mst_DA_POLISH","category_id");
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




	$tdatamst_DA_POLISH["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_DA_POLISH";
	$fdata["Label"] = GetFieldLabel("mst_DA_POLISH","sub_category_id1");
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




	$tdatamst_DA_POLISH["sub_category_id1"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_DA_POLISH";
	$fdata["Label"] = GetFieldLabel("mst_DA_POLISH","update_at");
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




	$tdatamst_DA_POLISH["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_DA_POLISH";
	$fdata["Label"] = GetFieldLabel("mst_DA_POLISH","update_by");
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




	$tdatamst_DA_POLISH["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_DA_POLISH";
	$fdata["Label"] = GetFieldLabel("mst_DA_POLISH","create_at");
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




	$tdatamst_DA_POLISH["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_DA_POLISH";
	$fdata["Label"] = GetFieldLabel("mst_DA_POLISH","create_by");
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




	$tdatamst_DA_POLISH["create_by"] = $fdata;


$tables_data["mst_DA_POLISH"]=&$tdatamst_DA_POLISH;
$field_labels["mst_DA_POLISH"] = &$fieldLabelsmst_DA_POLISH;
$fieldToolTips["mst_DA_POLISH"] = &$fieldToolTipsmst_DA_POLISH;
$placeHolders["mst_DA_POLISH"] = &$placeHoldersmst_DA_POLISH;
$page_titles["mst_DA_POLISH"] = &$pageTitlesmst_DA_POLISH;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_DA_POLISH"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_DA_POLISH"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_DA_POLISH()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  english_name,  sort,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  update_at,  update_by,  create_at,  create_by";
$proto0["m_strFrom"] = "FROM mst_DA_POLISH";
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
	"m_strTable" => "mst_DA_POLISH",
	"m_srcTableName" => "mst_DA_POLISH"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_DA_POLISH";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_DA_POLISH",
	"m_srcTableName" => "mst_DA_POLISH"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_DA_POLISH";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_DA_POLISH",
	"m_srcTableName" => "mst_DA_POLISH"
));

$proto10["m_sql"] = "english_name";
$proto10["m_srcTableName"] = "mst_DA_POLISH";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_DA_POLISH",
	"m_srcTableName" => "mst_DA_POLISH"
));

$proto12["m_sql"] = "sort";
$proto12["m_srcTableName"] = "mst_DA_POLISH";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_DA_POLISH",
	"m_srcTableName" => "mst_DA_POLISH"
));

$proto14["m_sql"] = "line_category";
$proto14["m_srcTableName"] = "mst_DA_POLISH";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_DA_POLISH",
	"m_srcTableName" => "mst_DA_POLISH"
));

$proto16["m_sql"] = "yahoo_junle";
$proto16["m_srcTableName"] = "mst_DA_POLISH";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_DA_POLISH",
	"m_srcTableName" => "mst_DA_POLISH"
));

$proto18["m_sql"] = "category_id";
$proto18["m_srcTableName"] = "mst_DA_POLISH";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_DA_POLISH",
	"m_srcTableName" => "mst_DA_POLISH"
));

$proto20["m_sql"] = "sub_category_id1";
$proto20["m_srcTableName"] = "mst_DA_POLISH";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_DA_POLISH",
	"m_srcTableName" => "mst_DA_POLISH"
));

$proto22["m_sql"] = "update_at";
$proto22["m_srcTableName"] = "mst_DA_POLISH";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_DA_POLISH",
	"m_srcTableName" => "mst_DA_POLISH"
));

$proto24["m_sql"] = "update_by";
$proto24["m_srcTableName"] = "mst_DA_POLISH";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_DA_POLISH",
	"m_srcTableName" => "mst_DA_POLISH"
));

$proto26["m_sql"] = "create_at";
$proto26["m_srcTableName"] = "mst_DA_POLISH";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_DA_POLISH",
	"m_srcTableName" => "mst_DA_POLISH"
));

$proto28["m_sql"] = "create_by";
$proto28["m_srcTableName"] = "mst_DA_POLISH";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_DA_POLISH";
$proto31["m_srcTableName"] = "mst_DA_POLISH";
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
$proto30["m_sql"] = "mst_DA_POLISH";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_DA_POLISH";
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
	"m_strTable" => "mst_DA_POLISH",
	"m_srcTableName" => "mst_DA_POLISH"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 1;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_DA_POLISH";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_DA_POLISH = createSqlQuery_mst_DA_POLISH();


	
		;

												

$tdatamst_DA_POLISH[".sqlquery"] = $queryData_mst_DA_POLISH;

include_once(getabspath("include/mst_DA_POLISH_events.php"));
$tableEvents["mst_DA_POLISH"] = new eventclass_mst_DA_POLISH;
$tdatamst_DA_POLISH[".hasEvents"] = true;

?>