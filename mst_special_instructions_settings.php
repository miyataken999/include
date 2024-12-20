<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_special_instructions = array();
	$tdatamst_special_instructions[".truncateText"] = true;
	$tdatamst_special_instructions[".NumberOfChars"] = 80;
	$tdatamst_special_instructions[".ShortName"] = "mst_special_instructions";
	$tdatamst_special_instructions[".OwnerID"] = "";
	$tdatamst_special_instructions[".OriginalTable"] = "mst_special_instructions";

//	field labels
$fieldLabelsmst_special_instructions = array();
$fieldToolTipsmst_special_instructions = array();
$pageTitlesmst_special_instructions = array();
$placeHoldersmst_special_instructions = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_special_instructions["Japanese"] = array();
	$fieldToolTipsmst_special_instructions["Japanese"] = array();
	$placeHoldersmst_special_instructions["Japanese"] = array();
	$pageTitlesmst_special_instructions["Japanese"] = array();
	$fieldLabelsmst_special_instructions["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_special_instructions["Japanese"]["id"] = "";
	$placeHoldersmst_special_instructions["Japanese"]["id"] = "";
	$fieldLabelsmst_special_instructions["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_special_instructions["Japanese"]["name"] = "";
	$placeHoldersmst_special_instructions["Japanese"]["name"] = "";
	$fieldLabelsmst_special_instructions["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_special_instructions["Japanese"]["sort"] = "";
	$placeHoldersmst_special_instructions["Japanese"]["sort"] = "";
	$fieldLabelsmst_special_instructions["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_special_instructions["Japanese"]["create_by"] = "";
	$placeHoldersmst_special_instructions["Japanese"]["create_by"] = "";
	$fieldLabelsmst_special_instructions["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_special_instructions["Japanese"]["create_at"] = "";
	$placeHoldersmst_special_instructions["Japanese"]["create_at"] = "";
	$fieldLabelsmst_special_instructions["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_special_instructions["Japanese"]["update_by"] = "";
	$placeHoldersmst_special_instructions["Japanese"]["update_by"] = "";
	$fieldLabelsmst_special_instructions["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_special_instructions["Japanese"]["update_at"] = "";
	$placeHoldersmst_special_instructions["Japanese"]["update_at"] = "";
	if (count($fieldToolTipsmst_special_instructions["Japanese"]))
		$tdatamst_special_instructions[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_special_instructions[""] = array();
	$fieldToolTipsmst_special_instructions[""] = array();
	$placeHoldersmst_special_instructions[""] = array();
	$pageTitlesmst_special_instructions[""] = array();
	$fieldLabelsmst_special_instructions[""]["id"] = "Id";
	$fieldToolTipsmst_special_instructions[""]["id"] = "";
	$placeHoldersmst_special_instructions[""]["id"] = "";
	$fieldLabelsmst_special_instructions[""]["name"] = "Name";
	$fieldToolTipsmst_special_instructions[""]["name"] = "";
	$placeHoldersmst_special_instructions[""]["name"] = "";
	$fieldLabelsmst_special_instructions[""]["sort"] = "Sort";
	$fieldToolTipsmst_special_instructions[""]["sort"] = "";
	$placeHoldersmst_special_instructions[""]["sort"] = "";
	$fieldLabelsmst_special_instructions[""]["create_by"] = "Create By";
	$fieldToolTipsmst_special_instructions[""]["create_by"] = "";
	$placeHoldersmst_special_instructions[""]["create_by"] = "";
	$fieldLabelsmst_special_instructions[""]["create_at"] = "Create At";
	$fieldToolTipsmst_special_instructions[""]["create_at"] = "";
	$placeHoldersmst_special_instructions[""]["create_at"] = "";
	$fieldLabelsmst_special_instructions[""]["update_by"] = "Update By";
	$fieldToolTipsmst_special_instructions[""]["update_by"] = "";
	$placeHoldersmst_special_instructions[""]["update_by"] = "";
	$fieldLabelsmst_special_instructions[""]["update_at"] = "Update At";
	$fieldToolTipsmst_special_instructions[""]["update_at"] = "";
	$placeHoldersmst_special_instructions[""]["update_at"] = "";
	if (count($fieldToolTipsmst_special_instructions[""]))
		$tdatamst_special_instructions[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_special_instructions["English"] = array();
	$fieldToolTipsmst_special_instructions["English"] = array();
	$placeHoldersmst_special_instructions["English"] = array();
	$pageTitlesmst_special_instructions["English"] = array();
	$fieldLabelsmst_special_instructions["English"]["id"] = "Id";
	$fieldToolTipsmst_special_instructions["English"]["id"] = "";
	$placeHoldersmst_special_instructions["English"]["id"] = "";
	$fieldLabelsmst_special_instructions["English"]["name"] = "Name";
	$fieldToolTipsmst_special_instructions["English"]["name"] = "";
	$placeHoldersmst_special_instructions["English"]["name"] = "";
	$fieldLabelsmst_special_instructions["English"]["sort"] = "Sort";
	$fieldToolTipsmst_special_instructions["English"]["sort"] = "";
	$placeHoldersmst_special_instructions["English"]["sort"] = "";
	$fieldLabelsmst_special_instructions["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_special_instructions["English"]["create_by"] = "";
	$placeHoldersmst_special_instructions["English"]["create_by"] = "";
	$fieldLabelsmst_special_instructions["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_special_instructions["English"]["create_at"] = "";
	$placeHoldersmst_special_instructions["English"]["create_at"] = "";
	$fieldLabelsmst_special_instructions["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_special_instructions["English"]["update_by"] = "";
	$placeHoldersmst_special_instructions["English"]["update_by"] = "";
	$fieldLabelsmst_special_instructions["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_special_instructions["English"]["update_at"] = "";
	$placeHoldersmst_special_instructions["English"]["update_at"] = "";
	if (count($fieldToolTipsmst_special_instructions["English"]))
		$tdatamst_special_instructions[".isUseToolTips"] = true;
}


	$tdatamst_special_instructions[".NCSearch"] = true;



$tdatamst_special_instructions[".shortTableName"] = "mst_special_instructions";
$tdatamst_special_instructions[".nSecOptions"] = 0;
$tdatamst_special_instructions[".recsPerRowPrint"] = 1;
$tdatamst_special_instructions[".mainTableOwnerID"] = "";
$tdatamst_special_instructions[".moveNext"] = 1;
$tdatamst_special_instructions[".entityType"] = 0;

$tdatamst_special_instructions[".strOriginalTableName"] = "mst_special_instructions";

	



$tdatamst_special_instructions[".showAddInPopup"] = false;

$tdatamst_special_instructions[".showEditInPopup"] = false;

$tdatamst_special_instructions[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_special_instructions[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_special_instructions[".fieldsForRegister"] = array();

$tdatamst_special_instructions[".listAjax"] = false;

	$tdatamst_special_instructions[".audit"] = true;

	$tdatamst_special_instructions[".locking"] = false;



$tdatamst_special_instructions[".list"] = true;

$tdatamst_special_instructions[".inlineEdit"] = true;


$tdatamst_special_instructions[".reorderRecordsByHeader"] = true;



$tdatamst_special_instructions[".inlineAdd"] = true;

$tdatamst_special_instructions[".import"] = true;

$tdatamst_special_instructions[".exportTo"] = true;


$tdatamst_special_instructions[".delete"] = true;

$tdatamst_special_instructions[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_special_instructions[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_special_instructions[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_special_instructions[".searchSaving"] = false;
//

$tdatamst_special_instructions[".showSearchPanel"] = true;
		$tdatamst_special_instructions[".flexibleSearch"] = true;

$tdatamst_special_instructions[".isUseAjaxSuggest"] = true;

$tdatamst_special_instructions[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_special_instructions[".ajaxCodeSnippetAdded"] = false;

$tdatamst_special_instructions[".buttonsAdded"] = false;

$tdatamst_special_instructions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_special_instructions[".isUseTimeForSearch"] = false;





$tdatamst_special_instructions[".allSearchFields"] = array();
$tdatamst_special_instructions[".filterFields"] = array();
$tdatamst_special_instructions[".requiredSearchFields"] = array();

$tdatamst_special_instructions[".allSearchFields"][] = "id";
	$tdatamst_special_instructions[".allSearchFields"][] = "name";
	$tdatamst_special_instructions[".allSearchFields"][] = "sort";
	$tdatamst_special_instructions[".allSearchFields"][] = "create_by";
	$tdatamst_special_instructions[".allSearchFields"][] = "create_at";
	$tdatamst_special_instructions[".allSearchFields"][] = "update_by";
	$tdatamst_special_instructions[".allSearchFields"][] = "update_at";
	

$tdatamst_special_instructions[".googleLikeFields"] = array();
$tdatamst_special_instructions[".googleLikeFields"][] = "id";
$tdatamst_special_instructions[".googleLikeFields"][] = "name";
$tdatamst_special_instructions[".googleLikeFields"][] = "sort";
$tdatamst_special_instructions[".googleLikeFields"][] = "create_by";
$tdatamst_special_instructions[".googleLikeFields"][] = "create_at";
$tdatamst_special_instructions[".googleLikeFields"][] = "update_by";
$tdatamst_special_instructions[".googleLikeFields"][] = "update_at";


$tdatamst_special_instructions[".advSearchFields"] = array();
$tdatamst_special_instructions[".advSearchFields"][] = "id";
$tdatamst_special_instructions[".advSearchFields"][] = "name";
$tdatamst_special_instructions[".advSearchFields"][] = "sort";
$tdatamst_special_instructions[".advSearchFields"][] = "create_by";
$tdatamst_special_instructions[".advSearchFields"][] = "create_at";
$tdatamst_special_instructions[".advSearchFields"][] = "update_by";
$tdatamst_special_instructions[".advSearchFields"][] = "update_at";

$tdatamst_special_instructions[".tableType"] = "list";

$tdatamst_special_instructions[".printerPageOrientation"] = 0;
$tdatamst_special_instructions[".nPrinterPageScale"] = 100;

$tdatamst_special_instructions[".nPrinterSplitRecords"] = 40;

$tdatamst_special_instructions[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_special_instructions[".geocodingEnabled"] = false;





$tdatamst_special_instructions[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_special_instructions[".pageSize"] = 20;

$tdatamst_special_instructions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_special_instructions[".strOrderBy"] = $tstrOrderBy;

$tdatamst_special_instructions[".orderindexes"] = array();

$tdatamst_special_instructions[".sqlHead"] = "SELECT `id`,  	`name`,  	`sort`,  	`create_by`,  	`create_at`,  	`update_by`,  	`update_at`";
$tdatamst_special_instructions[".sqlFrom"] = "FROM `mst_special_instructions`";
$tdatamst_special_instructions[".sqlWhereExpr"] = "";
$tdatamst_special_instructions[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_special_instructions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_special_instructions[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_special_instructions[".highlightSearchResults"] = true;

$tableKeysmst_special_instructions = array();
$tableKeysmst_special_instructions[] = "id";
$tdatamst_special_instructions[".Keys"] = $tableKeysmst_special_instructions;

$tdatamst_special_instructions[".listFields"] = array();
$tdatamst_special_instructions[".listFields"][] = "id";
$tdatamst_special_instructions[".listFields"][] = "name";
$tdatamst_special_instructions[".listFields"][] = "sort";
$tdatamst_special_instructions[".listFields"][] = "create_by";
$tdatamst_special_instructions[".listFields"][] = "create_at";
$tdatamst_special_instructions[".listFields"][] = "update_by";
$tdatamst_special_instructions[".listFields"][] = "update_at";

$tdatamst_special_instructions[".hideMobileList"] = array();


$tdatamst_special_instructions[".viewFields"] = array();

$tdatamst_special_instructions[".addFields"] = array();

$tdatamst_special_instructions[".masterListFields"] = array();
$tdatamst_special_instructions[".masterListFields"][] = "id";
$tdatamst_special_instructions[".masterListFields"][] = "name";
$tdatamst_special_instructions[".masterListFields"][] = "sort";
$tdatamst_special_instructions[".masterListFields"][] = "create_by";
$tdatamst_special_instructions[".masterListFields"][] = "create_at";
$tdatamst_special_instructions[".masterListFields"][] = "update_by";
$tdatamst_special_instructions[".masterListFields"][] = "update_at";

$tdatamst_special_instructions[".inlineAddFields"] = array();
$tdatamst_special_instructions[".inlineAddFields"][] = "name";
$tdatamst_special_instructions[".inlineAddFields"][] = "sort";

$tdatamst_special_instructions[".editFields"] = array();

$tdatamst_special_instructions[".inlineEditFields"] = array();
$tdatamst_special_instructions[".inlineEditFields"][] = "name";
$tdatamst_special_instructions[".inlineEditFields"][] = "sort";

$tdatamst_special_instructions[".updateSelectedFields"] = array();


$tdatamst_special_instructions[".exportFields"] = array();
$tdatamst_special_instructions[".exportFields"][] = "id";
$tdatamst_special_instructions[".exportFields"][] = "name";
$tdatamst_special_instructions[".exportFields"][] = "sort";
$tdatamst_special_instructions[".exportFields"][] = "create_by";
$tdatamst_special_instructions[".exportFields"][] = "create_at";
$tdatamst_special_instructions[".exportFields"][] = "update_by";
$tdatamst_special_instructions[".exportFields"][] = "update_at";

$tdatamst_special_instructions[".importFields"] = array();
$tdatamst_special_instructions[".importFields"][] = "id";
$tdatamst_special_instructions[".importFields"][] = "name";
$tdatamst_special_instructions[".importFields"][] = "sort";

$tdatamst_special_instructions[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_special_instructions";
	$fdata["Label"] = GetFieldLabel("mst_special_instructions","id");
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




	$tdatamst_special_instructions["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_special_instructions";
	$fdata["Label"] = GetFieldLabel("mst_special_instructions","name");
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




	$tdatamst_special_instructions["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_special_instructions";
	$fdata["Label"] = GetFieldLabel("mst_special_instructions","sort");
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




	$tdatamst_special_instructions["sort"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_special_instructions";
	$fdata["Label"] = GetFieldLabel("mst_special_instructions","create_by");
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




	$tdatamst_special_instructions["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_special_instructions";
	$fdata["Label"] = GetFieldLabel("mst_special_instructions","create_at");
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




	$tdatamst_special_instructions["create_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_special_instructions";
	$fdata["Label"] = GetFieldLabel("mst_special_instructions","update_by");
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




	$tdatamst_special_instructions["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_special_instructions";
	$fdata["Label"] = GetFieldLabel("mst_special_instructions","update_at");
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




	$tdatamst_special_instructions["update_at"] = $fdata;


$tables_data["mst_special_instructions"]=&$tdatamst_special_instructions;
$field_labels["mst_special_instructions"] = &$fieldLabelsmst_special_instructions;
$fieldToolTips["mst_special_instructions"] = &$fieldToolTipsmst_special_instructions;
$placeHolders["mst_special_instructions"] = &$placeHoldersmst_special_instructions;
$page_titles["mst_special_instructions"] = &$pageTitlesmst_special_instructions;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_special_instructions"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_special_instructions"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_special_instructions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`sort`,  	`create_by`,  	`create_at`,  	`update_by`,  	`update_at`";
$proto0["m_strFrom"] = "FROM `mst_special_instructions`";
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
	"m_strTable" => "mst_special_instructions",
	"m_srcTableName" => "mst_special_instructions"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_special_instructions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_special_instructions",
	"m_srcTableName" => "mst_special_instructions"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_special_instructions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_special_instructions",
	"m_srcTableName" => "mst_special_instructions"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_special_instructions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_special_instructions",
	"m_srcTableName" => "mst_special_instructions"
));

$proto12["m_sql"] = "`create_by`";
$proto12["m_srcTableName"] = "mst_special_instructions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_special_instructions",
	"m_srcTableName" => "mst_special_instructions"
));

$proto14["m_sql"] = "`create_at`";
$proto14["m_srcTableName"] = "mst_special_instructions";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_special_instructions",
	"m_srcTableName" => "mst_special_instructions"
));

$proto16["m_sql"] = "`update_by`";
$proto16["m_srcTableName"] = "mst_special_instructions";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_special_instructions",
	"m_srcTableName" => "mst_special_instructions"
));

$proto18["m_sql"] = "`update_at`";
$proto18["m_srcTableName"] = "mst_special_instructions";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_special_instructions";
$proto21["m_srcTableName"] = "mst_special_instructions";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "sort";
$proto21["m_columns"][] = "create_by";
$proto21["m_columns"][] = "create_at";
$proto21["m_columns"][] = "update_by";
$proto21["m_columns"][] = "update_at";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`mst_special_instructions`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_special_instructions";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mst_special_instructions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_special_instructions = createSqlQuery_mst_special_instructions();


	
		;

							

$tdatamst_special_instructions[".sqlquery"] = $queryData_mst_special_instructions;

include_once(getabspath("include/mst_special_instructions_events.php"));
$tableEvents["mst_special_instructions"] = new eventclass_mst_special_instructions;
$tdatamst_special_instructions[".hasEvents"] = true;

?>