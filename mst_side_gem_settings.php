<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_side_gem = array();
	$tdatamst_side_gem[".truncateText"] = true;
	$tdatamst_side_gem[".NumberOfChars"] = 80;
	$tdatamst_side_gem[".ShortName"] = "mst_side_gem";
	$tdatamst_side_gem[".OwnerID"] = "";
	$tdatamst_side_gem[".OriginalTable"] = "mst_side_gem";

//	field labels
$fieldLabelsmst_side_gem = array();
$fieldToolTipsmst_side_gem = array();
$pageTitlesmst_side_gem = array();
$placeHoldersmst_side_gem = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_side_gem["Japanese"] = array();
	$fieldToolTipsmst_side_gem["Japanese"] = array();
	$placeHoldersmst_side_gem["Japanese"] = array();
	$pageTitlesmst_side_gem["Japanese"] = array();
	$fieldLabelsmst_side_gem["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_side_gem["Japanese"]["id"] = "";
	$placeHoldersmst_side_gem["Japanese"]["id"] = "";
	$fieldLabelsmst_side_gem["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_side_gem["Japanese"]["name"] = "";
	$placeHoldersmst_side_gem["Japanese"]["name"] = "";
	$fieldLabelsmst_side_gem["Japanese"]["english_name"] = "英名";
	$fieldToolTipsmst_side_gem["Japanese"]["english_name"] = "";
	$placeHoldersmst_side_gem["Japanese"]["english_name"] = "";
	$fieldLabelsmst_side_gem["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_side_gem["Japanese"]["sort"] = "";
	$placeHoldersmst_side_gem["Japanese"]["sort"] = "";
	$fieldLabelsmst_side_gem["Japanese"]["line_category"] = "Line Category";
	$fieldToolTipsmst_side_gem["Japanese"]["line_category"] = "";
	$placeHoldersmst_side_gem["Japanese"]["line_category"] = "";
	$fieldLabelsmst_side_gem["Japanese"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_side_gem["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_side_gem["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_side_gem["Japanese"]["category_id"] = "Category Id";
	$fieldToolTipsmst_side_gem["Japanese"]["category_id"] = "";
	$placeHoldersmst_side_gem["Japanese"]["category_id"] = "";
	$fieldLabelsmst_side_gem["Japanese"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_side_gem["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_side_gem["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_side_gem["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_side_gem["Japanese"]["update_by"] = "";
	$placeHoldersmst_side_gem["Japanese"]["update_by"] = "";
	$fieldLabelsmst_side_gem["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_side_gem["Japanese"]["update_at"] = "";
	$placeHoldersmst_side_gem["Japanese"]["update_at"] = "";
	$fieldLabelsmst_side_gem["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_side_gem["Japanese"]["create_by"] = "";
	$placeHoldersmst_side_gem["Japanese"]["create_by"] = "";
	$fieldLabelsmst_side_gem["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_side_gem["Japanese"]["create_at"] = "";
	$placeHoldersmst_side_gem["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_side_gem["Japanese"]))
		$tdatamst_side_gem[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_side_gem[""] = array();
	$fieldToolTipsmst_side_gem[""] = array();
	$placeHoldersmst_side_gem[""] = array();
	$pageTitlesmst_side_gem[""] = array();
	$fieldLabelsmst_side_gem[""]["id"] = "Id";
	$fieldToolTipsmst_side_gem[""]["id"] = "";
	$placeHoldersmst_side_gem[""]["id"] = "";
	$fieldLabelsmst_side_gem[""]["name"] = "Name";
	$fieldToolTipsmst_side_gem[""]["name"] = "";
	$placeHoldersmst_side_gem[""]["name"] = "";
	$fieldLabelsmst_side_gem[""]["english_name"] = "English Name";
	$fieldToolTipsmst_side_gem[""]["english_name"] = "";
	$placeHoldersmst_side_gem[""]["english_name"] = "";
	$fieldLabelsmst_side_gem[""]["sort"] = "Sort";
	$fieldToolTipsmst_side_gem[""]["sort"] = "";
	$placeHoldersmst_side_gem[""]["sort"] = "";
	$fieldLabelsmst_side_gem[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_side_gem[""]["line_category"] = "";
	$placeHoldersmst_side_gem[""]["line_category"] = "";
	$fieldLabelsmst_side_gem[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_side_gem[""]["yahoo_junle"] = "";
	$placeHoldersmst_side_gem[""]["yahoo_junle"] = "";
	$fieldLabelsmst_side_gem[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_side_gem[""]["category_id"] = "";
	$placeHoldersmst_side_gem[""]["category_id"] = "";
	$fieldLabelsmst_side_gem[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_side_gem[""]["sub_category_id1"] = "";
	$placeHoldersmst_side_gem[""]["sub_category_id1"] = "";
	$fieldLabelsmst_side_gem[""]["update_by"] = "Update By";
	$fieldToolTipsmst_side_gem[""]["update_by"] = "";
	$placeHoldersmst_side_gem[""]["update_by"] = "";
	$fieldLabelsmst_side_gem[""]["update_at"] = "Update At";
	$fieldToolTipsmst_side_gem[""]["update_at"] = "";
	$placeHoldersmst_side_gem[""]["update_at"] = "";
	$fieldLabelsmst_side_gem[""]["create_by"] = "Create By";
	$fieldToolTipsmst_side_gem[""]["create_by"] = "";
	$placeHoldersmst_side_gem[""]["create_by"] = "";
	$fieldLabelsmst_side_gem[""]["create_at"] = "Create At";
	$fieldToolTipsmst_side_gem[""]["create_at"] = "";
	$placeHoldersmst_side_gem[""]["create_at"] = "";
	if (count($fieldToolTipsmst_side_gem[""]))
		$tdatamst_side_gem[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_side_gem["English"] = array();
	$fieldToolTipsmst_side_gem["English"] = array();
	$placeHoldersmst_side_gem["English"] = array();
	$pageTitlesmst_side_gem["English"] = array();
	$fieldLabelsmst_side_gem["English"]["id"] = "Id";
	$fieldToolTipsmst_side_gem["English"]["id"] = "";
	$placeHoldersmst_side_gem["English"]["id"] = "";
	$fieldLabelsmst_side_gem["English"]["name"] = "Name";
	$fieldToolTipsmst_side_gem["English"]["name"] = "";
	$placeHoldersmst_side_gem["English"]["name"] = "";
	$fieldLabelsmst_side_gem["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_side_gem["English"]["english_name"] = "";
	$placeHoldersmst_side_gem["English"]["english_name"] = "";
	$fieldLabelsmst_side_gem["English"]["sort"] = "Sort";
	$fieldToolTipsmst_side_gem["English"]["sort"] = "";
	$placeHoldersmst_side_gem["English"]["sort"] = "";
	$fieldLabelsmst_side_gem["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_side_gem["English"]["line_category"] = "";
	$placeHoldersmst_side_gem["English"]["line_category"] = "";
	$fieldLabelsmst_side_gem["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_side_gem["English"]["yahoo_junle"] = "";
	$placeHoldersmst_side_gem["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_side_gem["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_side_gem["English"]["category_id"] = "";
	$placeHoldersmst_side_gem["English"]["category_id"] = "";
	$fieldLabelsmst_side_gem["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_side_gem["English"]["sub_category_id1"] = "";
	$placeHoldersmst_side_gem["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_side_gem["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_side_gem["English"]["update_by"] = "";
	$placeHoldersmst_side_gem["English"]["update_by"] = "";
	$fieldLabelsmst_side_gem["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_side_gem["English"]["update_at"] = "";
	$placeHoldersmst_side_gem["English"]["update_at"] = "";
	$fieldLabelsmst_side_gem["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_side_gem["English"]["create_by"] = "";
	$placeHoldersmst_side_gem["English"]["create_by"] = "";
	$fieldLabelsmst_side_gem["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_side_gem["English"]["create_at"] = "";
	$placeHoldersmst_side_gem["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_side_gem["English"]))
		$tdatamst_side_gem[".isUseToolTips"] = true;
}


	$tdatamst_side_gem[".NCSearch"] = true;



$tdatamst_side_gem[".shortTableName"] = "mst_side_gem";
$tdatamst_side_gem[".nSecOptions"] = 0;
$tdatamst_side_gem[".recsPerRowPrint"] = 1;
$tdatamst_side_gem[".mainTableOwnerID"] = "";
$tdatamst_side_gem[".moveNext"] = 1;
$tdatamst_side_gem[".entityType"] = 0;

$tdatamst_side_gem[".strOriginalTableName"] = "mst_side_gem";

	



$tdatamst_side_gem[".showAddInPopup"] = false;

$tdatamst_side_gem[".showEditInPopup"] = false;

$tdatamst_side_gem[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_side_gem[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_side_gem[".fieldsForRegister"] = array();

$tdatamst_side_gem[".listAjax"] = false;

	$tdatamst_side_gem[".audit"] = true;

	$tdatamst_side_gem[".locking"] = false;



$tdatamst_side_gem[".list"] = true;

$tdatamst_side_gem[".inlineEdit"] = true;


$tdatamst_side_gem[".reorderRecordsByHeader"] = true;



$tdatamst_side_gem[".inlineAdd"] = true;

$tdatamst_side_gem[".import"] = true;

$tdatamst_side_gem[".exportTo"] = true;

$tdatamst_side_gem[".printFriendly"] = true;

$tdatamst_side_gem[".delete"] = true;

$tdatamst_side_gem[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_side_gem[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_side_gem[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_side_gem[".searchSaving"] = false;
//

$tdatamst_side_gem[".showSearchPanel"] = true;
		$tdatamst_side_gem[".flexibleSearch"] = true;

$tdatamst_side_gem[".isUseAjaxSuggest"] = true;

$tdatamst_side_gem[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_side_gem[".ajaxCodeSnippetAdded"] = false;

$tdatamst_side_gem[".buttonsAdded"] = false;

$tdatamst_side_gem[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_side_gem[".isUseTimeForSearch"] = false;





$tdatamst_side_gem[".allSearchFields"] = array();
$tdatamst_side_gem[".filterFields"] = array();
$tdatamst_side_gem[".requiredSearchFields"] = array();

$tdatamst_side_gem[".allSearchFields"][] = "id";
	$tdatamst_side_gem[".allSearchFields"][] = "name";
	$tdatamst_side_gem[".allSearchFields"][] = "english_name";
	$tdatamst_side_gem[".allSearchFields"][] = "sort";
	$tdatamst_side_gem[".allSearchFields"][] = "line_category";
	$tdatamst_side_gem[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_side_gem[".allSearchFields"][] = "category_id";
	$tdatamst_side_gem[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_side_gem[".allSearchFields"][] = "update_by";
	$tdatamst_side_gem[".allSearchFields"][] = "update_at";
	$tdatamst_side_gem[".allSearchFields"][] = "create_by";
	$tdatamst_side_gem[".allSearchFields"][] = "create_at";
	

$tdatamst_side_gem[".googleLikeFields"] = array();
$tdatamst_side_gem[".googleLikeFields"][] = "id";
$tdatamst_side_gem[".googleLikeFields"][] = "name";
$tdatamst_side_gem[".googleLikeFields"][] = "english_name";
$tdatamst_side_gem[".googleLikeFields"][] = "sort";
$tdatamst_side_gem[".googleLikeFields"][] = "line_category";
$tdatamst_side_gem[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_side_gem[".googleLikeFields"][] = "category_id";
$tdatamst_side_gem[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_side_gem[".googleLikeFields"][] = "update_by";
$tdatamst_side_gem[".googleLikeFields"][] = "update_at";
$tdatamst_side_gem[".googleLikeFields"][] = "create_by";
$tdatamst_side_gem[".googleLikeFields"][] = "create_at";

$tdatamst_side_gem[".panelSearchFields"] = array();
$tdatamst_side_gem[".searchPanelOptions"] = array();
$tdatamst_side_gem[".panelSearchFields"][] = "name";
	$tdatamst_side_gem[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_side_gem[".advSearchFields"] = array();
$tdatamst_side_gem[".advSearchFields"][] = "id";
$tdatamst_side_gem[".advSearchFields"][] = "name";
$tdatamst_side_gem[".advSearchFields"][] = "english_name";
$tdatamst_side_gem[".advSearchFields"][] = "sort";
$tdatamst_side_gem[".advSearchFields"][] = "line_category";
$tdatamst_side_gem[".advSearchFields"][] = "yahoo_junle";
$tdatamst_side_gem[".advSearchFields"][] = "category_id";
$tdatamst_side_gem[".advSearchFields"][] = "sub_category_id1";
$tdatamst_side_gem[".advSearchFields"][] = "update_by";
$tdatamst_side_gem[".advSearchFields"][] = "update_at";
$tdatamst_side_gem[".advSearchFields"][] = "create_by";
$tdatamst_side_gem[".advSearchFields"][] = "create_at";

$tdatamst_side_gem[".tableType"] = "list";

$tdatamst_side_gem[".printerPageOrientation"] = 0;
$tdatamst_side_gem[".nPrinterPageScale"] = 100;

$tdatamst_side_gem[".nPrinterSplitRecords"] = 40;

$tdatamst_side_gem[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_side_gem[".geocodingEnabled"] = false;





$tdatamst_side_gem[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_side_gem[".pageSize"] = 100;

$tdatamst_side_gem[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY sort";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_side_gem[".strOrderBy"] = $tstrOrderBy;

$tdatamst_side_gem[".orderindexes"] = array();
$tdatamst_side_gem[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_side_gem[".sqlHead"] = "SELECT id,  name,  english_name,  sort,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  update_by,  update_at,  create_by,  create_at";
$tdatamst_side_gem[".sqlFrom"] = "FROM mst_side_gem";
$tdatamst_side_gem[".sqlWhereExpr"] = "";
$tdatamst_side_gem[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_side_gem[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_side_gem[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_side_gem[".highlightSearchResults"] = true;

$tableKeysmst_side_gem = array();
$tableKeysmst_side_gem[] = "id";
$tdatamst_side_gem[".Keys"] = $tableKeysmst_side_gem;

$tdatamst_side_gem[".listFields"] = array();
$tdatamst_side_gem[".listFields"][] = "id";
$tdatamst_side_gem[".listFields"][] = "name";
$tdatamst_side_gem[".listFields"][] = "english_name";
$tdatamst_side_gem[".listFields"][] = "sort";
$tdatamst_side_gem[".listFields"][] = "line_category";
$tdatamst_side_gem[".listFields"][] = "yahoo_junle";
$tdatamst_side_gem[".listFields"][] = "category_id";
$tdatamst_side_gem[".listFields"][] = "sub_category_id1";
$tdatamst_side_gem[".listFields"][] = "update_by";
$tdatamst_side_gem[".listFields"][] = "update_at";
$tdatamst_side_gem[".listFields"][] = "create_by";
$tdatamst_side_gem[".listFields"][] = "create_at";

$tdatamst_side_gem[".hideMobileList"] = array();


$tdatamst_side_gem[".viewFields"] = array();

$tdatamst_side_gem[".addFields"] = array();

$tdatamst_side_gem[".masterListFields"] = array();
$tdatamst_side_gem[".masterListFields"][] = "id";
$tdatamst_side_gem[".masterListFields"][] = "name";
$tdatamst_side_gem[".masterListFields"][] = "english_name";
$tdatamst_side_gem[".masterListFields"][] = "sort";
$tdatamst_side_gem[".masterListFields"][] = "line_category";
$tdatamst_side_gem[".masterListFields"][] = "yahoo_junle";
$tdatamst_side_gem[".masterListFields"][] = "category_id";
$tdatamst_side_gem[".masterListFields"][] = "sub_category_id1";
$tdatamst_side_gem[".masterListFields"][] = "update_by";
$tdatamst_side_gem[".masterListFields"][] = "update_at";
$tdatamst_side_gem[".masterListFields"][] = "create_by";
$tdatamst_side_gem[".masterListFields"][] = "create_at";

$tdatamst_side_gem[".inlineAddFields"] = array();
$tdatamst_side_gem[".inlineAddFields"][] = "name";
$tdatamst_side_gem[".inlineAddFields"][] = "english_name";
$tdatamst_side_gem[".inlineAddFields"][] = "sort";
$tdatamst_side_gem[".inlineAddFields"][] = "line_category";
$tdatamst_side_gem[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_side_gem[".inlineAddFields"][] = "category_id";
$tdatamst_side_gem[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_side_gem[".editFields"] = array();

$tdatamst_side_gem[".inlineEditFields"] = array();
$tdatamst_side_gem[".inlineEditFields"][] = "name";
$tdatamst_side_gem[".inlineEditFields"][] = "english_name";
$tdatamst_side_gem[".inlineEditFields"][] = "sort";
$tdatamst_side_gem[".inlineEditFields"][] = "line_category";
$tdatamst_side_gem[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_side_gem[".inlineEditFields"][] = "category_id";
$tdatamst_side_gem[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_side_gem[".updateSelectedFields"] = array();


$tdatamst_side_gem[".exportFields"] = array();
$tdatamst_side_gem[".exportFields"][] = "id";
$tdatamst_side_gem[".exportFields"][] = "name";
$tdatamst_side_gem[".exportFields"][] = "english_name";
$tdatamst_side_gem[".exportFields"][] = "sort";
$tdatamst_side_gem[".exportFields"][] = "line_category";
$tdatamst_side_gem[".exportFields"][] = "yahoo_junle";
$tdatamst_side_gem[".exportFields"][] = "category_id";
$tdatamst_side_gem[".exportFields"][] = "sub_category_id1";
$tdatamst_side_gem[".exportFields"][] = "update_by";
$tdatamst_side_gem[".exportFields"][] = "update_at";
$tdatamst_side_gem[".exportFields"][] = "create_by";
$tdatamst_side_gem[".exportFields"][] = "create_at";

$tdatamst_side_gem[".importFields"] = array();
$tdatamst_side_gem[".importFields"][] = "id";
$tdatamst_side_gem[".importFields"][] = "name";
$tdatamst_side_gem[".importFields"][] = "english_name";
$tdatamst_side_gem[".importFields"][] = "sort";
$tdatamst_side_gem[".importFields"][] = "line_category";
$tdatamst_side_gem[".importFields"][] = "yahoo_junle";
$tdatamst_side_gem[".importFields"][] = "category_id";
$tdatamst_side_gem[".importFields"][] = "sub_category_id1";

$tdatamst_side_gem[".printFields"] = array();
$tdatamst_side_gem[".printFields"][] = "id";
$tdatamst_side_gem[".printFields"][] = "name";
$tdatamst_side_gem[".printFields"][] = "english_name";
$tdatamst_side_gem[".printFields"][] = "sort";
$tdatamst_side_gem[".printFields"][] = "line_category";
$tdatamst_side_gem[".printFields"][] = "yahoo_junle";
$tdatamst_side_gem[".printFields"][] = "category_id";
$tdatamst_side_gem[".printFields"][] = "sub_category_id1";
$tdatamst_side_gem[".printFields"][] = "update_by";
$tdatamst_side_gem[".printFields"][] = "update_at";
$tdatamst_side_gem[".printFields"][] = "create_by";
$tdatamst_side_gem[".printFields"][] = "create_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_side_gem";
	$fdata["Label"] = GetFieldLabel("mst_side_gem","id");
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




	$tdatamst_side_gem["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_side_gem";
	$fdata["Label"] = GetFieldLabel("mst_side_gem","name");
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




	$tdatamst_side_gem["name"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_side_gem";
	$fdata["Label"] = GetFieldLabel("mst_side_gem","english_name");
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




	$tdatamst_side_gem["english_name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_side_gem";
	$fdata["Label"] = GetFieldLabel("mst_side_gem","sort");
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




	$tdatamst_side_gem["sort"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_side_gem";
	$fdata["Label"] = GetFieldLabel("mst_side_gem","line_category");
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




	$tdatamst_side_gem["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_side_gem";
	$fdata["Label"] = GetFieldLabel("mst_side_gem","yahoo_junle");
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




	$tdatamst_side_gem["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_side_gem";
	$fdata["Label"] = GetFieldLabel("mst_side_gem","category_id");
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




	$tdatamst_side_gem["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_side_gem";
	$fdata["Label"] = GetFieldLabel("mst_side_gem","sub_category_id1");
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




	$tdatamst_side_gem["sub_category_id1"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_side_gem";
	$fdata["Label"] = GetFieldLabel("mst_side_gem","update_by");
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




	$tdatamst_side_gem["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_side_gem";
	$fdata["Label"] = GetFieldLabel("mst_side_gem","update_at");
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




	$tdatamst_side_gem["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_side_gem";
	$fdata["Label"] = GetFieldLabel("mst_side_gem","create_by");
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




	$tdatamst_side_gem["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_side_gem";
	$fdata["Label"] = GetFieldLabel("mst_side_gem","create_at");
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




	$tdatamst_side_gem["create_at"] = $fdata;


$tables_data["mst_side_gem"]=&$tdatamst_side_gem;
$field_labels["mst_side_gem"] = &$fieldLabelsmst_side_gem;
$fieldToolTips["mst_side_gem"] = &$fieldToolTipsmst_side_gem;
$placeHolders["mst_side_gem"] = &$placeHoldersmst_side_gem;
$page_titles["mst_side_gem"] = &$pageTitlesmst_side_gem;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_side_gem"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_side_gem"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_side_gem()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  english_name,  sort,  line_category,  yahoo_junle,  category_id,  sub_category_id1,  update_by,  update_at,  create_by,  create_at";
$proto0["m_strFrom"] = "FROM mst_side_gem";
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
	"m_strTable" => "mst_side_gem",
	"m_srcTableName" => "mst_side_gem"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_side_gem";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_side_gem",
	"m_srcTableName" => "mst_side_gem"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_side_gem";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_side_gem",
	"m_srcTableName" => "mst_side_gem"
));

$proto10["m_sql"] = "english_name";
$proto10["m_srcTableName"] = "mst_side_gem";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_side_gem",
	"m_srcTableName" => "mst_side_gem"
));

$proto12["m_sql"] = "sort";
$proto12["m_srcTableName"] = "mst_side_gem";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_side_gem",
	"m_srcTableName" => "mst_side_gem"
));

$proto14["m_sql"] = "line_category";
$proto14["m_srcTableName"] = "mst_side_gem";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_side_gem",
	"m_srcTableName" => "mst_side_gem"
));

$proto16["m_sql"] = "yahoo_junle";
$proto16["m_srcTableName"] = "mst_side_gem";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_side_gem",
	"m_srcTableName" => "mst_side_gem"
));

$proto18["m_sql"] = "category_id";
$proto18["m_srcTableName"] = "mst_side_gem";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_side_gem",
	"m_srcTableName" => "mst_side_gem"
));

$proto20["m_sql"] = "sub_category_id1";
$proto20["m_srcTableName"] = "mst_side_gem";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_side_gem",
	"m_srcTableName" => "mst_side_gem"
));

$proto22["m_sql"] = "update_by";
$proto22["m_srcTableName"] = "mst_side_gem";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_side_gem",
	"m_srcTableName" => "mst_side_gem"
));

$proto24["m_sql"] = "update_at";
$proto24["m_srcTableName"] = "mst_side_gem";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_side_gem",
	"m_srcTableName" => "mst_side_gem"
));

$proto26["m_sql"] = "create_by";
$proto26["m_srcTableName"] = "mst_side_gem";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_side_gem",
	"m_srcTableName" => "mst_side_gem"
));

$proto28["m_sql"] = "create_at";
$proto28["m_srcTableName"] = "mst_side_gem";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_side_gem";
$proto31["m_srcTableName"] = "mst_side_gem";
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
$proto30["m_sql"] = "mst_side_gem";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_side_gem";
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
	"m_strTable" => "mst_side_gem",
	"m_srcTableName" => "mst_side_gem"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 1;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_side_gem";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_side_gem = createSqlQuery_mst_side_gem();


	
		;

												

$tdatamst_side_gem[".sqlquery"] = $queryData_mst_side_gem;

include_once(getabspath("include/mst_side_gem_events.php"));
$tableEvents["mst_side_gem"] = new eventclass_mst_side_gem;
$tdatamst_side_gem[".hasEvents"] = true;

?>