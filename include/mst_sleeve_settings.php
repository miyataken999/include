<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_sleeve = array();
	$tdatamst_sleeve[".truncateText"] = true;
	$tdatamst_sleeve[".NumberOfChars"] = 80;
	$tdatamst_sleeve[".ShortName"] = "mst_sleeve";
	$tdatamst_sleeve[".OwnerID"] = "";
	$tdatamst_sleeve[".OriginalTable"] = "mst_sleeve";

//	field labels
$fieldLabelsmst_sleeve = array();
$fieldToolTipsmst_sleeve = array();
$pageTitlesmst_sleeve = array();
$placeHoldersmst_sleeve = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_sleeve["Japanese"] = array();
	$fieldToolTipsmst_sleeve["Japanese"] = array();
	$placeHoldersmst_sleeve["Japanese"] = array();
	$pageTitlesmst_sleeve["Japanese"] = array();
	$fieldLabelsmst_sleeve["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_sleeve["Japanese"]["id"] = "";
	$placeHoldersmst_sleeve["Japanese"]["id"] = "";
	$fieldLabelsmst_sleeve["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_sleeve["Japanese"]["name"] = "";
	$placeHoldersmst_sleeve["Japanese"]["name"] = "";
	$fieldLabelsmst_sleeve["Japanese"]["english_name"] = "English Name";
	$fieldToolTipsmst_sleeve["Japanese"]["english_name"] = "";
	$placeHoldersmst_sleeve["Japanese"]["english_name"] = "";
	$fieldLabelsmst_sleeve["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_sleeve["Japanese"]["sort"] = "";
	$placeHoldersmst_sleeve["Japanese"]["sort"] = "";
	$fieldLabelsmst_sleeve["Japanese"]["line_category"] = "Line Category";
	$fieldToolTipsmst_sleeve["Japanese"]["line_category"] = "";
	$placeHoldersmst_sleeve["Japanese"]["line_category"] = "";
	$fieldLabelsmst_sleeve["Japanese"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_sleeve["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_sleeve["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_sleeve["Japanese"]["category_id"] = "Category Id";
	$fieldToolTipsmst_sleeve["Japanese"]["category_id"] = "";
	$placeHoldersmst_sleeve["Japanese"]["category_id"] = "";
	$fieldLabelsmst_sleeve["Japanese"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_sleeve["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_sleeve["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_sleeve["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_sleeve["Japanese"]["update_by"] = "";
	$placeHoldersmst_sleeve["Japanese"]["update_by"] = "";
	$fieldLabelsmst_sleeve["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_sleeve["Japanese"]["update_at"] = "";
	$placeHoldersmst_sleeve["Japanese"]["update_at"] = "";
	$fieldLabelsmst_sleeve["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_sleeve["Japanese"]["create_by"] = "";
	$placeHoldersmst_sleeve["Japanese"]["create_by"] = "";
	$fieldLabelsmst_sleeve["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_sleeve["Japanese"]["create_at"] = "";
	$placeHoldersmst_sleeve["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_sleeve["Japanese"]))
		$tdatamst_sleeve[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_sleeve[""] = array();
	$fieldToolTipsmst_sleeve[""] = array();
	$placeHoldersmst_sleeve[""] = array();
	$pageTitlesmst_sleeve[""] = array();
	$fieldLabelsmst_sleeve[""]["id"] = "Id";
	$fieldToolTipsmst_sleeve[""]["id"] = "";
	$placeHoldersmst_sleeve[""]["id"] = "";
	$fieldLabelsmst_sleeve[""]["name"] = "Name";
	$fieldToolTipsmst_sleeve[""]["name"] = "";
	$placeHoldersmst_sleeve[""]["name"] = "";
	$fieldLabelsmst_sleeve[""]["english_name"] = "English Name";
	$fieldToolTipsmst_sleeve[""]["english_name"] = "";
	$placeHoldersmst_sleeve[""]["english_name"] = "";
	$fieldLabelsmst_sleeve[""]["sort"] = "Sort";
	$fieldToolTipsmst_sleeve[""]["sort"] = "";
	$placeHoldersmst_sleeve[""]["sort"] = "";
	$fieldLabelsmst_sleeve[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_sleeve[""]["line_category"] = "";
	$placeHoldersmst_sleeve[""]["line_category"] = "";
	$fieldLabelsmst_sleeve[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_sleeve[""]["yahoo_junle"] = "";
	$placeHoldersmst_sleeve[""]["yahoo_junle"] = "";
	$fieldLabelsmst_sleeve[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_sleeve[""]["category_id"] = "";
	$placeHoldersmst_sleeve[""]["category_id"] = "";
	$fieldLabelsmst_sleeve[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_sleeve[""]["sub_category_id1"] = "";
	$placeHoldersmst_sleeve[""]["sub_category_id1"] = "";
	$fieldLabelsmst_sleeve[""]["update_by"] = "Update By";
	$fieldToolTipsmst_sleeve[""]["update_by"] = "";
	$placeHoldersmst_sleeve[""]["update_by"] = "";
	$fieldLabelsmst_sleeve[""]["update_at"] = "Update At";
	$fieldToolTipsmst_sleeve[""]["update_at"] = "";
	$placeHoldersmst_sleeve[""]["update_at"] = "";
	$fieldLabelsmst_sleeve[""]["create_by"] = "Create By";
	$fieldToolTipsmst_sleeve[""]["create_by"] = "";
	$placeHoldersmst_sleeve[""]["create_by"] = "";
	$fieldLabelsmst_sleeve[""]["create_at"] = "Create At";
	$fieldToolTipsmst_sleeve[""]["create_at"] = "";
	$placeHoldersmst_sleeve[""]["create_at"] = "";
	if (count($fieldToolTipsmst_sleeve[""]))
		$tdatamst_sleeve[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_sleeve["English"] = array();
	$fieldToolTipsmst_sleeve["English"] = array();
	$placeHoldersmst_sleeve["English"] = array();
	$pageTitlesmst_sleeve["English"] = array();
	$fieldLabelsmst_sleeve["English"]["id"] = "Id";
	$fieldToolTipsmst_sleeve["English"]["id"] = "";
	$placeHoldersmst_sleeve["English"]["id"] = "";
	$fieldLabelsmst_sleeve["English"]["name"] = "Name";
	$fieldToolTipsmst_sleeve["English"]["name"] = "";
	$placeHoldersmst_sleeve["English"]["name"] = "";
	$fieldLabelsmst_sleeve["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_sleeve["English"]["english_name"] = "";
	$placeHoldersmst_sleeve["English"]["english_name"] = "";
	$fieldLabelsmst_sleeve["English"]["sort"] = "Sort";
	$fieldToolTipsmst_sleeve["English"]["sort"] = "";
	$placeHoldersmst_sleeve["English"]["sort"] = "";
	$fieldLabelsmst_sleeve["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_sleeve["English"]["line_category"] = "";
	$placeHoldersmst_sleeve["English"]["line_category"] = "";
	$fieldLabelsmst_sleeve["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_sleeve["English"]["yahoo_junle"] = "";
	$placeHoldersmst_sleeve["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_sleeve["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_sleeve["English"]["category_id"] = "";
	$placeHoldersmst_sleeve["English"]["category_id"] = "";
	$fieldLabelsmst_sleeve["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_sleeve["English"]["sub_category_id1"] = "";
	$placeHoldersmst_sleeve["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_sleeve["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_sleeve["English"]["update_by"] = "";
	$placeHoldersmst_sleeve["English"]["update_by"] = "";
	$fieldLabelsmst_sleeve["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_sleeve["English"]["update_at"] = "";
	$placeHoldersmst_sleeve["English"]["update_at"] = "";
	$fieldLabelsmst_sleeve["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_sleeve["English"]["create_by"] = "";
	$placeHoldersmst_sleeve["English"]["create_by"] = "";
	$fieldLabelsmst_sleeve["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_sleeve["English"]["create_at"] = "";
	$placeHoldersmst_sleeve["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_sleeve["English"]))
		$tdatamst_sleeve[".isUseToolTips"] = true;
}


	$tdatamst_sleeve[".NCSearch"] = true;



$tdatamst_sleeve[".shortTableName"] = "mst_sleeve";
$tdatamst_sleeve[".nSecOptions"] = 0;
$tdatamst_sleeve[".recsPerRowPrint"] = 1;
$tdatamst_sleeve[".mainTableOwnerID"] = "";
$tdatamst_sleeve[".moveNext"] = 1;
$tdatamst_sleeve[".entityType"] = 0;

$tdatamst_sleeve[".strOriginalTableName"] = "mst_sleeve";

	



$tdatamst_sleeve[".showAddInPopup"] = false;

$tdatamst_sleeve[".showEditInPopup"] = false;

$tdatamst_sleeve[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_sleeve[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_sleeve[".fieldsForRegister"] = array();

$tdatamst_sleeve[".listAjax"] = false;

	$tdatamst_sleeve[".audit"] = true;

	$tdatamst_sleeve[".locking"] = false;



$tdatamst_sleeve[".list"] = true;

$tdatamst_sleeve[".inlineEdit"] = true;


$tdatamst_sleeve[".reorderRecordsByHeader"] = true;



$tdatamst_sleeve[".inlineAdd"] = true;

$tdatamst_sleeve[".import"] = true;

$tdatamst_sleeve[".exportTo"] = true;

$tdatamst_sleeve[".printFriendly"] = true;

$tdatamst_sleeve[".delete"] = true;

$tdatamst_sleeve[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_sleeve[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_sleeve[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_sleeve[".searchSaving"] = false;
//

$tdatamst_sleeve[".showSearchPanel"] = true;
		$tdatamst_sleeve[".flexibleSearch"] = true;

$tdatamst_sleeve[".isUseAjaxSuggest"] = true;

$tdatamst_sleeve[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_sleeve[".ajaxCodeSnippetAdded"] = false;

$tdatamst_sleeve[".buttonsAdded"] = false;

$tdatamst_sleeve[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_sleeve[".isUseTimeForSearch"] = false;





$tdatamst_sleeve[".allSearchFields"] = array();
$tdatamst_sleeve[".filterFields"] = array();
$tdatamst_sleeve[".requiredSearchFields"] = array();

$tdatamst_sleeve[".allSearchFields"][] = "id";
	$tdatamst_sleeve[".allSearchFields"][] = "name";
	$tdatamst_sleeve[".allSearchFields"][] = "english_name";
	$tdatamst_sleeve[".allSearchFields"][] = "sort";
	$tdatamst_sleeve[".allSearchFields"][] = "line_category";
	$tdatamst_sleeve[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_sleeve[".allSearchFields"][] = "category_id";
	$tdatamst_sleeve[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_sleeve[".allSearchFields"][] = "update_by";
	$tdatamst_sleeve[".allSearchFields"][] = "update_at";
	$tdatamst_sleeve[".allSearchFields"][] = "create_by";
	$tdatamst_sleeve[".allSearchFields"][] = "create_at";
	

$tdatamst_sleeve[".googleLikeFields"] = array();
$tdatamst_sleeve[".googleLikeFields"][] = "id";
$tdatamst_sleeve[".googleLikeFields"][] = "name";
$tdatamst_sleeve[".googleLikeFields"][] = "english_name";
$tdatamst_sleeve[".googleLikeFields"][] = "sort";
$tdatamst_sleeve[".googleLikeFields"][] = "line_category";
$tdatamst_sleeve[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_sleeve[".googleLikeFields"][] = "category_id";
$tdatamst_sleeve[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_sleeve[".googleLikeFields"][] = "update_by";
$tdatamst_sleeve[".googleLikeFields"][] = "update_at";
$tdatamst_sleeve[".googleLikeFields"][] = "create_by";
$tdatamst_sleeve[".googleLikeFields"][] = "create_at";


$tdatamst_sleeve[".advSearchFields"] = array();
$tdatamst_sleeve[".advSearchFields"][] = "id";
$tdatamst_sleeve[".advSearchFields"][] = "name";
$tdatamst_sleeve[".advSearchFields"][] = "english_name";
$tdatamst_sleeve[".advSearchFields"][] = "sort";
$tdatamst_sleeve[".advSearchFields"][] = "line_category";
$tdatamst_sleeve[".advSearchFields"][] = "yahoo_junle";
$tdatamst_sleeve[".advSearchFields"][] = "category_id";
$tdatamst_sleeve[".advSearchFields"][] = "sub_category_id1";
$tdatamst_sleeve[".advSearchFields"][] = "update_by";
$tdatamst_sleeve[".advSearchFields"][] = "update_at";
$tdatamst_sleeve[".advSearchFields"][] = "create_by";
$tdatamst_sleeve[".advSearchFields"][] = "create_at";

$tdatamst_sleeve[".tableType"] = "list";

$tdatamst_sleeve[".printerPageOrientation"] = 0;
$tdatamst_sleeve[".nPrinterPageScale"] = 100;

$tdatamst_sleeve[".nPrinterSplitRecords"] = 40;

$tdatamst_sleeve[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_sleeve[".geocodingEnabled"] = false;





$tdatamst_sleeve[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_sleeve[".pageSize"] = 100;

$tdatamst_sleeve[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_sleeve[".strOrderBy"] = $tstrOrderBy;

$tdatamst_sleeve[".orderindexes"] = array();

$tdatamst_sleeve[".sqlHead"] = "SELECT id,  	name,  	english_name,  	sort,  	line_category,  	yahoo_junle,  	category_id,  	sub_category_id1,  	update_by,  	update_at,  	create_by,  	create_at";
$tdatamst_sleeve[".sqlFrom"] = "FROM mst_sleeve";
$tdatamst_sleeve[".sqlWhereExpr"] = "";
$tdatamst_sleeve[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_sleeve[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_sleeve[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_sleeve[".highlightSearchResults"] = true;

$tableKeysmst_sleeve = array();
$tableKeysmst_sleeve[] = "id";
$tdatamst_sleeve[".Keys"] = $tableKeysmst_sleeve;

$tdatamst_sleeve[".listFields"] = array();
$tdatamst_sleeve[".listFields"][] = "id";
$tdatamst_sleeve[".listFields"][] = "name";
$tdatamst_sleeve[".listFields"][] = "english_name";
$tdatamst_sleeve[".listFields"][] = "sort";
$tdatamst_sleeve[".listFields"][] = "line_category";
$tdatamst_sleeve[".listFields"][] = "yahoo_junle";
$tdatamst_sleeve[".listFields"][] = "category_id";
$tdatamst_sleeve[".listFields"][] = "sub_category_id1";
$tdatamst_sleeve[".listFields"][] = "update_by";
$tdatamst_sleeve[".listFields"][] = "update_at";
$tdatamst_sleeve[".listFields"][] = "create_by";
$tdatamst_sleeve[".listFields"][] = "create_at";

$tdatamst_sleeve[".hideMobileList"] = array();


$tdatamst_sleeve[".viewFields"] = array();

$tdatamst_sleeve[".addFields"] = array();

$tdatamst_sleeve[".masterListFields"] = array();
$tdatamst_sleeve[".masterListFields"][] = "id";
$tdatamst_sleeve[".masterListFields"][] = "name";
$tdatamst_sleeve[".masterListFields"][] = "english_name";
$tdatamst_sleeve[".masterListFields"][] = "sort";
$tdatamst_sleeve[".masterListFields"][] = "line_category";
$tdatamst_sleeve[".masterListFields"][] = "yahoo_junle";
$tdatamst_sleeve[".masterListFields"][] = "category_id";
$tdatamst_sleeve[".masterListFields"][] = "sub_category_id1";
$tdatamst_sleeve[".masterListFields"][] = "update_by";
$tdatamst_sleeve[".masterListFields"][] = "update_at";
$tdatamst_sleeve[".masterListFields"][] = "create_by";
$tdatamst_sleeve[".masterListFields"][] = "create_at";

$tdatamst_sleeve[".inlineAddFields"] = array();
$tdatamst_sleeve[".inlineAddFields"][] = "name";
$tdatamst_sleeve[".inlineAddFields"][] = "english_name";
$tdatamst_sleeve[".inlineAddFields"][] = "sort";
$tdatamst_sleeve[".inlineAddFields"][] = "line_category";
$tdatamst_sleeve[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_sleeve[".inlineAddFields"][] = "category_id";
$tdatamst_sleeve[".inlineAddFields"][] = "sub_category_id1";

$tdatamst_sleeve[".editFields"] = array();

$tdatamst_sleeve[".inlineEditFields"] = array();
$tdatamst_sleeve[".inlineEditFields"][] = "name";
$tdatamst_sleeve[".inlineEditFields"][] = "english_name";
$tdatamst_sleeve[".inlineEditFields"][] = "sort";
$tdatamst_sleeve[".inlineEditFields"][] = "line_category";
$tdatamst_sleeve[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_sleeve[".inlineEditFields"][] = "category_id";
$tdatamst_sleeve[".inlineEditFields"][] = "sub_category_id1";

$tdatamst_sleeve[".updateSelectedFields"] = array();


$tdatamst_sleeve[".exportFields"] = array();
$tdatamst_sleeve[".exportFields"][] = "id";
$tdatamst_sleeve[".exportFields"][] = "name";
$tdatamst_sleeve[".exportFields"][] = "english_name";
$tdatamst_sleeve[".exportFields"][] = "sort";
$tdatamst_sleeve[".exportFields"][] = "line_category";
$tdatamst_sleeve[".exportFields"][] = "yahoo_junle";
$tdatamst_sleeve[".exportFields"][] = "category_id";
$tdatamst_sleeve[".exportFields"][] = "sub_category_id1";
$tdatamst_sleeve[".exportFields"][] = "update_by";
$tdatamst_sleeve[".exportFields"][] = "update_at";
$tdatamst_sleeve[".exportFields"][] = "create_by";
$tdatamst_sleeve[".exportFields"][] = "create_at";

$tdatamst_sleeve[".importFields"] = array();
$tdatamst_sleeve[".importFields"][] = "id";
$tdatamst_sleeve[".importFields"][] = "name";
$tdatamst_sleeve[".importFields"][] = "english_name";
$tdatamst_sleeve[".importFields"][] = "sort";
$tdatamst_sleeve[".importFields"][] = "line_category";
$tdatamst_sleeve[".importFields"][] = "yahoo_junle";
$tdatamst_sleeve[".importFields"][] = "category_id";
$tdatamst_sleeve[".importFields"][] = "sub_category_id1";

$tdatamst_sleeve[".printFields"] = array();
$tdatamst_sleeve[".printFields"][] = "id";
$tdatamst_sleeve[".printFields"][] = "name";
$tdatamst_sleeve[".printFields"][] = "english_name";
$tdatamst_sleeve[".printFields"][] = "sort";
$tdatamst_sleeve[".printFields"][] = "line_category";
$tdatamst_sleeve[".printFields"][] = "yahoo_junle";
$tdatamst_sleeve[".printFields"][] = "category_id";
$tdatamst_sleeve[".printFields"][] = "sub_category_id1";
$tdatamst_sleeve[".printFields"][] = "update_by";
$tdatamst_sleeve[".printFields"][] = "update_at";
$tdatamst_sleeve[".printFields"][] = "create_by";
$tdatamst_sleeve[".printFields"][] = "create_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_sleeve";
	$fdata["Label"] = GetFieldLabel("mst_sleeve","id");
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




	$tdatamst_sleeve["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_sleeve";
	$fdata["Label"] = GetFieldLabel("mst_sleeve","name");
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




	$tdatamst_sleeve["name"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_sleeve";
	$fdata["Label"] = GetFieldLabel("mst_sleeve","english_name");
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




	$tdatamst_sleeve["english_name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_sleeve";
	$fdata["Label"] = GetFieldLabel("mst_sleeve","sort");
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




	$tdatamst_sleeve["sort"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_sleeve";
	$fdata["Label"] = GetFieldLabel("mst_sleeve","line_category");
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




	$tdatamst_sleeve["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_sleeve";
	$fdata["Label"] = GetFieldLabel("mst_sleeve","yahoo_junle");
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




	$tdatamst_sleeve["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_sleeve";
	$fdata["Label"] = GetFieldLabel("mst_sleeve","category_id");
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




	$tdatamst_sleeve["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_sleeve";
	$fdata["Label"] = GetFieldLabel("mst_sleeve","sub_category_id1");
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




	$tdatamst_sleeve["sub_category_id1"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_sleeve";
	$fdata["Label"] = GetFieldLabel("mst_sleeve","update_by");
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




	$tdatamst_sleeve["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_sleeve";
	$fdata["Label"] = GetFieldLabel("mst_sleeve","update_at");
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




	$tdatamst_sleeve["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_sleeve";
	$fdata["Label"] = GetFieldLabel("mst_sleeve","create_by");
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




	$tdatamst_sleeve["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_sleeve";
	$fdata["Label"] = GetFieldLabel("mst_sleeve","create_at");
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




	$tdatamst_sleeve["create_at"] = $fdata;


$tables_data["mst_sleeve"]=&$tdatamst_sleeve;
$field_labels["mst_sleeve"] = &$fieldLabelsmst_sleeve;
$fieldToolTips["mst_sleeve"] = &$fieldToolTipsmst_sleeve;
$placeHolders["mst_sleeve"] = &$placeHoldersmst_sleeve;
$page_titles["mst_sleeve"] = &$pageTitlesmst_sleeve;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_sleeve"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_sleeve"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_sleeve()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	english_name,  	sort,  	line_category,  	yahoo_junle,  	category_id,  	sub_category_id1,  	update_by,  	update_at,  	create_by,  	create_at";
$proto0["m_strFrom"] = "FROM mst_sleeve";
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
	"m_strTable" => "mst_sleeve",
	"m_srcTableName" => "mst_sleeve"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_sleeve";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_sleeve",
	"m_srcTableName" => "mst_sleeve"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_sleeve";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_sleeve",
	"m_srcTableName" => "mst_sleeve"
));

$proto10["m_sql"] = "english_name";
$proto10["m_srcTableName"] = "mst_sleeve";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_sleeve",
	"m_srcTableName" => "mst_sleeve"
));

$proto12["m_sql"] = "sort";
$proto12["m_srcTableName"] = "mst_sleeve";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_sleeve",
	"m_srcTableName" => "mst_sleeve"
));

$proto14["m_sql"] = "line_category";
$proto14["m_srcTableName"] = "mst_sleeve";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_sleeve",
	"m_srcTableName" => "mst_sleeve"
));

$proto16["m_sql"] = "yahoo_junle";
$proto16["m_srcTableName"] = "mst_sleeve";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_sleeve",
	"m_srcTableName" => "mst_sleeve"
));

$proto18["m_sql"] = "category_id";
$proto18["m_srcTableName"] = "mst_sleeve";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_sleeve",
	"m_srcTableName" => "mst_sleeve"
));

$proto20["m_sql"] = "sub_category_id1";
$proto20["m_srcTableName"] = "mst_sleeve";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_sleeve",
	"m_srcTableName" => "mst_sleeve"
));

$proto22["m_sql"] = "update_by";
$proto22["m_srcTableName"] = "mst_sleeve";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_sleeve",
	"m_srcTableName" => "mst_sleeve"
));

$proto24["m_sql"] = "update_at";
$proto24["m_srcTableName"] = "mst_sleeve";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_sleeve",
	"m_srcTableName" => "mst_sleeve"
));

$proto26["m_sql"] = "create_by";
$proto26["m_srcTableName"] = "mst_sleeve";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_sleeve",
	"m_srcTableName" => "mst_sleeve"
));

$proto28["m_sql"] = "create_at";
$proto28["m_srcTableName"] = "mst_sleeve";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "mst_sleeve";
$proto31["m_srcTableName"] = "mst_sleeve";
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
$proto30["m_sql"] = "mst_sleeve";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "mst_sleeve";
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
$proto0["m_srcTableName"]="mst_sleeve";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_sleeve = createSqlQuery_mst_sleeve();


	
		;

												

$tdatamst_sleeve[".sqlquery"] = $queryData_mst_sleeve;

$tableEvents["mst_sleeve"] = new eventsBase;
$tdatamst_sleeve[".hasEvents"] = false;

?>