<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_breast = array();
	$tdatamst_breast[".truncateText"] = true;
	$tdatamst_breast[".NumberOfChars"] = 80;
	$tdatamst_breast[".ShortName"] = "mst_breast";
	$tdatamst_breast[".OwnerID"] = "";
	$tdatamst_breast[".OriginalTable"] = "mst_breast";

//	field labels
$fieldLabelsmst_breast = array();
$fieldToolTipsmst_breast = array();
$pageTitlesmst_breast = array();
$placeHoldersmst_breast = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_breast["Japanese"] = array();
	$fieldToolTipsmst_breast["Japanese"] = array();
	$placeHoldersmst_breast["Japanese"] = array();
	$pageTitlesmst_breast["Japanese"] = array();
	$fieldLabelsmst_breast["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_breast["Japanese"]["id"] = "";
	$placeHoldersmst_breast["Japanese"]["id"] = "";
	$fieldLabelsmst_breast["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_breast["Japanese"]["name"] = "";
	$placeHoldersmst_breast["Japanese"]["name"] = "";
	$fieldLabelsmst_breast["Japanese"]["english_name"] = "English Name";
	$fieldToolTipsmst_breast["Japanese"]["english_name"] = "";
	$placeHoldersmst_breast["Japanese"]["english_name"] = "";
	$fieldLabelsmst_breast["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_breast["Japanese"]["sort"] = "";
	$placeHoldersmst_breast["Japanese"]["sort"] = "";
	$fieldLabelsmst_breast["Japanese"]["line_category"] = "Line Category";
	$fieldToolTipsmst_breast["Japanese"]["line_category"] = "";
	$placeHoldersmst_breast["Japanese"]["line_category"] = "";
	$fieldLabelsmst_breast["Japanese"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_breast["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_breast["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_breast["Japanese"]["category_id"] = "Category Id";
	$fieldToolTipsmst_breast["Japanese"]["category_id"] = "";
	$placeHoldersmst_breast["Japanese"]["category_id"] = "";
	$fieldLabelsmst_breast["Japanese"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_breast["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_breast["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_breast["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_breast["Japanese"]["update_by"] = "";
	$placeHoldersmst_breast["Japanese"]["update_by"] = "";
	$fieldLabelsmst_breast["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_breast["Japanese"]["update_at"] = "";
	$placeHoldersmst_breast["Japanese"]["update_at"] = "";
	$fieldLabelsmst_breast["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_breast["Japanese"]["create_by"] = "";
	$placeHoldersmst_breast["Japanese"]["create_by"] = "";
	$fieldLabelsmst_breast["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_breast["Japanese"]["create_at"] = "";
	$placeHoldersmst_breast["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_breast["Japanese"]))
		$tdatamst_breast[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_breast[""] = array();
	$fieldToolTipsmst_breast[""] = array();
	$placeHoldersmst_breast[""] = array();
	$pageTitlesmst_breast[""] = array();
	$fieldLabelsmst_breast[""]["id"] = "Id";
	$fieldToolTipsmst_breast[""]["id"] = "";
	$placeHoldersmst_breast[""]["id"] = "";
	$fieldLabelsmst_breast[""]["name"] = "Name";
	$fieldToolTipsmst_breast[""]["name"] = "";
	$placeHoldersmst_breast[""]["name"] = "";
	$fieldLabelsmst_breast[""]["english_name"] = "English Name";
	$fieldToolTipsmst_breast[""]["english_name"] = "";
	$placeHoldersmst_breast[""]["english_name"] = "";
	$fieldLabelsmst_breast[""]["sort"] = "Sort";
	$fieldToolTipsmst_breast[""]["sort"] = "";
	$placeHoldersmst_breast[""]["sort"] = "";
	$fieldLabelsmst_breast[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_breast[""]["line_category"] = "";
	$placeHoldersmst_breast[""]["line_category"] = "";
	$fieldLabelsmst_breast[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_breast[""]["yahoo_junle"] = "";
	$placeHoldersmst_breast[""]["yahoo_junle"] = "";
	$fieldLabelsmst_breast[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_breast[""]["category_id"] = "";
	$placeHoldersmst_breast[""]["category_id"] = "";
	$fieldLabelsmst_breast[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_breast[""]["sub_category_id1"] = "";
	$placeHoldersmst_breast[""]["sub_category_id1"] = "";
	$fieldLabelsmst_breast[""]["update_by"] = "Update By";
	$fieldToolTipsmst_breast[""]["update_by"] = "";
	$placeHoldersmst_breast[""]["update_by"] = "";
	$fieldLabelsmst_breast[""]["update_at"] = "Update At";
	$fieldToolTipsmst_breast[""]["update_at"] = "";
	$placeHoldersmst_breast[""]["update_at"] = "";
	$fieldLabelsmst_breast[""]["create_by"] = "Create By";
	$fieldToolTipsmst_breast[""]["create_by"] = "";
	$placeHoldersmst_breast[""]["create_by"] = "";
	$fieldLabelsmst_breast[""]["create_at"] = "Create At";
	$fieldToolTipsmst_breast[""]["create_at"] = "";
	$placeHoldersmst_breast[""]["create_at"] = "";
	if (count($fieldToolTipsmst_breast[""]))
		$tdatamst_breast[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_breast["English"] = array();
	$fieldToolTipsmst_breast["English"] = array();
	$placeHoldersmst_breast["English"] = array();
	$pageTitlesmst_breast["English"] = array();
	$fieldLabelsmst_breast["English"]["id"] = "Id";
	$fieldToolTipsmst_breast["English"]["id"] = "";
	$placeHoldersmst_breast["English"]["id"] = "";
	$fieldLabelsmst_breast["English"]["name"] = "Name";
	$fieldToolTipsmst_breast["English"]["name"] = "";
	$placeHoldersmst_breast["English"]["name"] = "";
	$fieldLabelsmst_breast["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_breast["English"]["english_name"] = "";
	$placeHoldersmst_breast["English"]["english_name"] = "";
	$fieldLabelsmst_breast["English"]["sort"] = "Sort";
	$fieldToolTipsmst_breast["English"]["sort"] = "";
	$placeHoldersmst_breast["English"]["sort"] = "";
	$fieldLabelsmst_breast["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_breast["English"]["line_category"] = "";
	$placeHoldersmst_breast["English"]["line_category"] = "";
	$fieldLabelsmst_breast["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_breast["English"]["yahoo_junle"] = "";
	$placeHoldersmst_breast["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_breast["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_breast["English"]["category_id"] = "";
	$placeHoldersmst_breast["English"]["category_id"] = "";
	$fieldLabelsmst_breast["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_breast["English"]["sub_category_id1"] = "";
	$placeHoldersmst_breast["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_breast["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_breast["English"]["update_by"] = "";
	$placeHoldersmst_breast["English"]["update_by"] = "";
	$fieldLabelsmst_breast["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_breast["English"]["update_at"] = "";
	$placeHoldersmst_breast["English"]["update_at"] = "";
	$fieldLabelsmst_breast["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_breast["English"]["create_by"] = "";
	$placeHoldersmst_breast["English"]["create_by"] = "";
	$fieldLabelsmst_breast["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_breast["English"]["create_at"] = "";
	$placeHoldersmst_breast["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_breast["English"]))
		$tdatamst_breast[".isUseToolTips"] = true;
}


	$tdatamst_breast[".NCSearch"] = true;



$tdatamst_breast[".shortTableName"] = "mst_breast";
$tdatamst_breast[".nSecOptions"] = 0;
$tdatamst_breast[".recsPerRowPrint"] = 1;
$tdatamst_breast[".mainTableOwnerID"] = "";
$tdatamst_breast[".moveNext"] = 1;
$tdatamst_breast[".entityType"] = 0;

$tdatamst_breast[".strOriginalTableName"] = "mst_breast";

	



$tdatamst_breast[".showAddInPopup"] = false;

$tdatamst_breast[".showEditInPopup"] = false;

$tdatamst_breast[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_breast[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_breast[".fieldsForRegister"] = array();

$tdatamst_breast[".listAjax"] = false;

	$tdatamst_breast[".audit"] = true;

	$tdatamst_breast[".locking"] = false;



$tdatamst_breast[".list"] = true;

$tdatamst_breast[".inlineEdit"] = true;


$tdatamst_breast[".reorderRecordsByHeader"] = true;



$tdatamst_breast[".inlineAdd"] = true;

$tdatamst_breast[".import"] = true;

$tdatamst_breast[".exportTo"] = true;

$tdatamst_breast[".printFriendly"] = true;

$tdatamst_breast[".delete"] = true;

$tdatamst_breast[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_breast[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_breast[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_breast[".searchSaving"] = false;
//

$tdatamst_breast[".showSearchPanel"] = true;
		$tdatamst_breast[".flexibleSearch"] = true;

$tdatamst_breast[".isUseAjaxSuggest"] = true;

$tdatamst_breast[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_breast[".ajaxCodeSnippetAdded"] = false;

$tdatamst_breast[".buttonsAdded"] = false;

$tdatamst_breast[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_breast[".isUseTimeForSearch"] = false;





$tdatamst_breast[".allSearchFields"] = array();
$tdatamst_breast[".filterFields"] = array();
$tdatamst_breast[".requiredSearchFields"] = array();

$tdatamst_breast[".allSearchFields"][] = "id";
	$tdatamst_breast[".allSearchFields"][] = "name";
	$tdatamst_breast[".allSearchFields"][] = "english_name";
	$tdatamst_breast[".allSearchFields"][] = "sort";
	$tdatamst_breast[".allSearchFields"][] = "line_category";
	$tdatamst_breast[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_breast[".allSearchFields"][] = "category_id";
	$tdatamst_breast[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_breast[".allSearchFields"][] = "update_by";
	$tdatamst_breast[".allSearchFields"][] = "update_at";
	$tdatamst_breast[".allSearchFields"][] = "create_by";
	$tdatamst_breast[".allSearchFields"][] = "create_at";
	

$tdatamst_breast[".googleLikeFields"] = array();
$tdatamst_breast[".googleLikeFields"][] = "id";
$tdatamst_breast[".googleLikeFields"][] = "name";
$tdatamst_breast[".googleLikeFields"][] = "english_name";
$tdatamst_breast[".googleLikeFields"][] = "sort";
$tdatamst_breast[".googleLikeFields"][] = "line_category";
$tdatamst_breast[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_breast[".googleLikeFields"][] = "category_id";
$tdatamst_breast[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_breast[".googleLikeFields"][] = "update_by";
$tdatamst_breast[".googleLikeFields"][] = "update_at";
$tdatamst_breast[".googleLikeFields"][] = "create_by";
$tdatamst_breast[".googleLikeFields"][] = "create_at";

$tdatamst_breast[".panelSearchFields"] = array();
$tdatamst_breast[".searchPanelOptions"] = array();
$tdatamst_breast[".panelSearchFields"][] = "name";
	$tdatamst_breast[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_breast[".advSearchFields"] = array();
$tdatamst_breast[".advSearchFields"][] = "id";
$tdatamst_breast[".advSearchFields"][] = "name";
$tdatamst_breast[".advSearchFields"][] = "english_name";
$tdatamst_breast[".advSearchFields"][] = "sort";
$tdatamst_breast[".advSearchFields"][] = "line_category";
$tdatamst_breast[".advSearchFields"][] = "yahoo_junle";
$tdatamst_breast[".advSearchFields"][] = "category_id";
$tdatamst_breast[".advSearchFields"][] = "sub_category_id1";
$tdatamst_breast[".advSearchFields"][] = "update_by";
$tdatamst_breast[".advSearchFields"][] = "update_at";
$tdatamst_breast[".advSearchFields"][] = "create_by";
$tdatamst_breast[".advSearchFields"][] = "create_at";

$tdatamst_breast[".tableType"] = "list";

$tdatamst_breast[".printerPageOrientation"] = 0;
$tdatamst_breast[".nPrinterPageScale"] = 100;

$tdatamst_breast[".nPrinterSplitRecords"] = 40;

$tdatamst_breast[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_breast[".geocodingEnabled"] = false;





$tdatamst_breast[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_breast[".pageSize"] = 100;

$tdatamst_breast[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_breast[".strOrderBy"] = $tstrOrderBy;

$tdatamst_breast[".orderindexes"] = array();

$tdatamst_breast[".sqlHead"] = "SELECT id,  	name,  	english_name,  	sort,  	line_category,  	yahoo_junle,  	category_id,  	sub_category_id1,  	update_by,  	update_at,  	create_by,  	create_at";
$tdatamst_breast[".sqlFrom"] = "FROM mst_breast";
$tdatamst_breast[".sqlWhereExpr"] = "";
$tdatamst_breast[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_breast[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_breast[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_breast[".highlightSearchResults"] = true;

$tableKeysmst_breast = array();
$tableKeysmst_breast[] = "id";
$tdatamst_breast[".Keys"] = $tableKeysmst_breast;

$tdatamst_breast[".listFields"] = array();
$tdatamst_breast[".listFields"][] = "id";
$tdatamst_breast[".listFields"][] = "name";
$tdatamst_breast[".listFields"][] = "english_name";
$tdatamst_breast[".listFields"][] = "sort";
$tdatamst_breast[".listFields"][] = "line_category";
$tdatamst_breast[".listFields"][] = "yahoo_junle";
$tdatamst_breast[".listFields"][] = "category_id";
$tdatamst_breast[".listFields"][] = "sub_category_id1";
$tdatamst_breast[".listFields"][] = "update_by";
$tdatamst_breast[".listFields"][] = "update_at";
$tdatamst_breast[".listFields"][] = "create_by";
$tdatamst_breast[".listFields"][] = "create_at";

$tdatamst_breast[".hideMobileList"] = array();


$tdatamst_breast[".viewFields"] = array();

$tdatamst_breast[".addFields"] = array();

$tdatamst_breast[".masterListFields"] = array();
$tdatamst_breast[".masterListFields"][] = "id";
$tdatamst_breast[".masterListFields"][] = "name";
$tdatamst_breast[".masterListFields"][] = "english_name";
$tdatamst_breast[".masterListFields"][] = "sort";
$tdatamst_breast[".masterListFields"][] = "line_category";
$tdatamst_breast[".masterListFields"][] = "yahoo_junle";
$tdatamst_breast[".masterListFields"][] = "category_id";
$tdatamst_breast[".masterListFields"][] = "sub_category_id1";
$tdatamst_breast[".masterListFields"][] = "update_by";
$tdatamst_breast[".masterListFields"][] = "update_at";
$tdatamst_breast[".masterListFields"][] = "create_by";
$tdatamst_breast[".masterListFields"][] = "create_at";

$tdatamst_breast[".inlineAddFields"] = array();
$tdatamst_breast[".inlineAddFields"][] = "name";
$tdatamst_breast[".inlineAddFields"][] = "english_name";
$tdatamst_breast[".inlineAddFields"][] = "sort";
$tdatamst_breast[".inlineAddFields"][] = "line_category";
$tdatamst_breast[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_breast[".inlineAddFields"][] = "category_id";
$tdatamst_breast[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_breast[".editFields"] = array();

$tdatamst_breast[".inlineEditFields"] = array();
$tdatamst_breast[".inlineEditFields"][] = "name";
$tdatamst_breast[".inlineEditFields"][] = "english_name";
$tdatamst_breast[".inlineEditFields"][] = "sort";
$tdatamst_breast[".inlineEditFields"][] = "line_category";
$tdatamst_breast[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_breast[".inlineEditFields"][] = "category_id";
$tdatamst_breast[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_breast[".updateSelectedFields"] = array();


$tdatamst_breast[".exportFields"] = array();
$tdatamst_breast[".exportFields"][] = "id";
$tdatamst_breast[".exportFields"][] = "name";
$tdatamst_breast[".exportFields"][] = "english_name";
$tdatamst_breast[".exportFields"][] = "sort";
$tdatamst_breast[".exportFields"][] = "line_category";
$tdatamst_breast[".exportFields"][] = "yahoo_junle";
$tdatamst_breast[".exportFields"][] = "category_id";
$tdatamst_breast[".exportFields"][] = "sub_category_id1";
$tdatamst_breast[".exportFields"][] = "update_by";
$tdatamst_breast[".exportFields"][] = "update_at";
$tdatamst_breast[".exportFields"][] = "create_by";
$tdatamst_breast[".exportFields"][] = "create_at";

$tdatamst_breast[".importFields"] = array();
$tdatamst_breast[".importFields"][] = "id";
$tdatamst_breast[".importFields"][] = "name";
$tdatamst_breast[".importFields"][] = "english_name";
$tdatamst_breast[".importFields"][] = "sort";
$tdatamst_breast[".importFields"][] = "line_category";
$tdatamst_breast[".importFields"][] = "yahoo_junle";
$tdatamst_breast[".importFields"][] = "category_id";
$tdatamst_breast[".importFields"][] = "sub_category_id1";

$tdatamst_breast[".printFields"] = array();
$tdatamst_breast[".printFields"][] = "id";
$tdatamst_breast[".printFields"][] = "name";
$tdatamst_breast[".printFields"][] = "english_name";
$tdatamst_breast[".printFields"][] = "sort";
$tdatamst_breast[".printFields"][] = "line_category";
$tdatamst_breast[".printFields"][] = "yahoo_junle";
$tdatamst_breast[".printFields"][] = "category_id";
$tdatamst_breast[".printFields"][] = "sub_category_id1";
$tdatamst_breast[".printFields"][] = "update_by";
$tdatamst_breast[".printFields"][] = "update_at";
$tdatamst_breast[".printFields"][] = "create_by";
$tdatamst_breast[".printFields"][] = "create_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_breast";
	$fdata["Label"] = GetFieldLabel("mst_breast","id");
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




	$tdatamst_breast["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_breast";
	$fdata["Label"] = GetFieldLabel("mst_breast","name");
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




	$tdatamst_breast["name"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_breast";
	$fdata["Label"] = GetFieldLabel("mst_breast","english_name");
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




	$tdatamst_breast["english_name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_breast";
	$fdata["Label"] = GetFieldLabel("mst_breast","sort");
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




	$tdatamst_breast["sort"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_breast";
	$fdata["Label"] = GetFieldLabel("mst_breast","line_category");
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




	$tdatamst_breast["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_breast";
	$fdata["Label"] = GetFieldLabel("mst_breast","yahoo_junle");
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




	$tdatamst_breast["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_breast";
	$fdata["Label"] = GetFieldLabel("mst_breast","category_id");
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




	$tdatamst_breast["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_breast";
	$fdata["Label"] = GetFieldLabel("mst_breast","sub_category_id1");
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




	$tdatamst_breast["sub_category_id1"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_breast";
	$fdata["Label"] = GetFieldLabel("mst_breast","update_by");
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




	$tdatamst_breast["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_breast";
	$fdata["Label"] = GetFieldLabel("mst_breast","update_at");
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




	$tdatamst_breast["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_breast";
	$fdata["Label"] = GetFieldLabel("mst_breast","create_by");
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




	$tdatamst_breast["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_breast";
	$fdata["Label"] = GetFieldLabel("mst_breast","create_at");
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




	$tdatamst_breast["create_at"] = $fdata;


$tables_data["mst_breast"]=&$tdatamst_breast;
$field_labels["mst_breast"] = &$fieldLabelsmst_breast;
$fieldToolTips["mst_breast"] = &$fieldToolTipsmst_breast;
$placeHolders["mst_breast"] = &$placeHoldersmst_breast;
$page_titles["mst_breast"] = &$pageTitlesmst_breast;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_breast"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_breast"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_breast()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	english_name,  	sort,  	line_category,  	yahoo_junle,  	category_id,  	sub_category_id1,  	update_by,  	update_at,  	create_by,  	create_at";
$proto0["m_strFrom"] = "FROM mst_breast";
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
	"m_strTable" => "mst_breast",
	"m_srcTableName" => "mst_breast"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_breast";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_breast",
	"m_srcTableName" => "mst_breast"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_breast";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_breast",
	"m_srcTableName" => "mst_breast"
));

$proto10["m_sql"] = "english_name";
$proto10["m_srcTableName"] = "mst_breast";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_breast",
	"m_srcTableName" => "mst_breast"
));

$proto12["m_sql"] = "sort";
$proto12["m_srcTableName"] = "mst_breast";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_breast",
	"m_srcTableName" => "mst_breast"
));

$proto14["m_sql"] = "line_category";
$proto14["m_srcTableName"] = "mst_breast";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_breast",
	"m_srcTableName" => "mst_breast"
));

$proto16["m_sql"] = "yahoo_junle";
$proto16["m_srcTableName"] = "mst_breast";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_breast",
	"m_srcTableName" => "mst_breast"
));

$proto18["m_sql"] = "category_id";
$proto18["m_srcTableName"] = "mst_breast";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_breast",
	"m_srcTableName" => "mst_breast"
));

$proto20["m_sql"] = "sub_category_id1";
$proto20["m_srcTableName"] = "mst_breast";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_breast",
	"m_srcTableName" => "mst_breast"
));

$proto22["m_sql"] = "update_by";
$proto22["m_srcTableName"] = "mst_breast";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_breast",
	"m_srcTableName" => "mst_breast"
));

$proto24["m_sql"] = "update_at";
$proto24["m_srcTableName"] = "mst_breast";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_breast",
	"m_srcTableName" => "mst_breast"
));

$proto26["m_sql"] = "create_by";
$proto26["m_srcTableName"] = "mst_breast";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_breast",
	"m_srcTableName" => "mst_breast"
));

$proto28["m_sql"] = "create_at";
$proto28["m_srcTableName"] = "mst_breast";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_breast";
$proto31["m_srcTableName"] = "mst_breast";
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
$proto30["m_sql"] = "mst_breast";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_breast";
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
$proto0["m_srcTableName"]="mst_breast";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_breast = createSqlQuery_mst_breast();


	
		;

												

$tdatamst_breast[".sqlquery"] = $queryData_mst_breast;

$tableEvents["mst_breast"] = new eventsBase;
$tdatamst_breast[".hasEvents"] = false;

?>