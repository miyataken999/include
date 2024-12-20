<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_royal_customer_status = array();
	$tdatamst_royal_customer_status[".truncateText"] = true;
	$tdatamst_royal_customer_status[".NumberOfChars"] = 80;
	$tdatamst_royal_customer_status[".ShortName"] = "mst_royal_customer_status";
	$tdatamst_royal_customer_status[".OwnerID"] = "";
	$tdatamst_royal_customer_status[".OriginalTable"] = "mst_royal_customer_status";

//	field labels
$fieldLabelsmst_royal_customer_status = array();
$fieldToolTipsmst_royal_customer_status = array();
$pageTitlesmst_royal_customer_status = array();
$placeHoldersmst_royal_customer_status = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_royal_customer_status["Japanese"] = array();
	$fieldToolTipsmst_royal_customer_status["Japanese"] = array();
	$placeHoldersmst_royal_customer_status["Japanese"] = array();
	$pageTitlesmst_royal_customer_status["Japanese"] = array();
	$fieldLabelsmst_royal_customer_status["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_royal_customer_status["Japanese"]["id"] = "";
	$placeHoldersmst_royal_customer_status["Japanese"]["id"] = "";
	$fieldLabelsmst_royal_customer_status["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_royal_customer_status["Japanese"]["name"] = "";
	$placeHoldersmst_royal_customer_status["Japanese"]["name"] = "";
	$fieldLabelsmst_royal_customer_status["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_royal_customer_status["Japanese"]["sort"] = "";
	$placeHoldersmst_royal_customer_status["Japanese"]["sort"] = "";
	$fieldLabelsmst_royal_customer_status["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_royal_customer_status["Japanese"]["updated_by"] = "";
	$placeHoldersmst_royal_customer_status["Japanese"]["updated_by"] = "";
	$fieldLabelsmst_royal_customer_status["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_royal_customer_status["Japanese"]["updated_at"] = "";
	$placeHoldersmst_royal_customer_status["Japanese"]["updated_at"] = "";
	$fieldLabelsmst_royal_customer_status["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsmst_royal_customer_status["Japanese"]["created_by"] = "";
	$placeHoldersmst_royal_customer_status["Japanese"]["created_by"] = "";
	$fieldLabelsmst_royal_customer_status["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsmst_royal_customer_status["Japanese"]["created_at"] = "";
	$placeHoldersmst_royal_customer_status["Japanese"]["created_at"] = "";
	if (count($fieldToolTipsmst_royal_customer_status["Japanese"]))
		$tdatamst_royal_customer_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_royal_customer_status[""] = array();
	$fieldToolTipsmst_royal_customer_status[""] = array();
	$placeHoldersmst_royal_customer_status[""] = array();
	$pageTitlesmst_royal_customer_status[""] = array();
	$fieldLabelsmst_royal_customer_status[""]["id"] = "Id";
	$fieldToolTipsmst_royal_customer_status[""]["id"] = "";
	$placeHoldersmst_royal_customer_status[""]["id"] = "";
	$fieldLabelsmst_royal_customer_status[""]["name"] = "Name";
	$fieldToolTipsmst_royal_customer_status[""]["name"] = "";
	$placeHoldersmst_royal_customer_status[""]["name"] = "";
	$fieldLabelsmst_royal_customer_status[""]["sort"] = "Sort";
	$fieldToolTipsmst_royal_customer_status[""]["sort"] = "";
	$placeHoldersmst_royal_customer_status[""]["sort"] = "";
	$fieldLabelsmst_royal_customer_status[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_royal_customer_status[""]["updated_by"] = "";
	$placeHoldersmst_royal_customer_status[""]["updated_by"] = "";
	$fieldLabelsmst_royal_customer_status[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_royal_customer_status[""]["updated_at"] = "";
	$placeHoldersmst_royal_customer_status[""]["updated_at"] = "";
	$fieldLabelsmst_royal_customer_status[""]["created_by"] = "Created By";
	$fieldToolTipsmst_royal_customer_status[""]["created_by"] = "";
	$placeHoldersmst_royal_customer_status[""]["created_by"] = "";
	$fieldLabelsmst_royal_customer_status[""]["created_at"] = "Created At";
	$fieldToolTipsmst_royal_customer_status[""]["created_at"] = "";
	$placeHoldersmst_royal_customer_status[""]["created_at"] = "";
	if (count($fieldToolTipsmst_royal_customer_status[""]))
		$tdatamst_royal_customer_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_royal_customer_status["English"] = array();
	$fieldToolTipsmst_royal_customer_status["English"] = array();
	$placeHoldersmst_royal_customer_status["English"] = array();
	$pageTitlesmst_royal_customer_status["English"] = array();
	$fieldLabelsmst_royal_customer_status["English"]["id"] = "Id";
	$fieldToolTipsmst_royal_customer_status["English"]["id"] = "";
	$placeHoldersmst_royal_customer_status["English"]["id"] = "";
	$fieldLabelsmst_royal_customer_status["English"]["name"] = "Name";
	$fieldToolTipsmst_royal_customer_status["English"]["name"] = "";
	$placeHoldersmst_royal_customer_status["English"]["name"] = "";
	$fieldLabelsmst_royal_customer_status["English"]["sort"] = "Sort";
	$fieldToolTipsmst_royal_customer_status["English"]["sort"] = "";
	$placeHoldersmst_royal_customer_status["English"]["sort"] = "";
	$fieldLabelsmst_royal_customer_status["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_royal_customer_status["English"]["updated_by"] = "";
	$placeHoldersmst_royal_customer_status["English"]["updated_by"] = "";
	$fieldLabelsmst_royal_customer_status["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_royal_customer_status["English"]["updated_at"] = "";
	$placeHoldersmst_royal_customer_status["English"]["updated_at"] = "";
	$fieldLabelsmst_royal_customer_status["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_royal_customer_status["English"]["created_by"] = "";
	$placeHoldersmst_royal_customer_status["English"]["created_by"] = "";
	$fieldLabelsmst_royal_customer_status["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_royal_customer_status["English"]["created_at"] = "";
	$placeHoldersmst_royal_customer_status["English"]["created_at"] = "";
	if (count($fieldToolTipsmst_royal_customer_status["English"]))
		$tdatamst_royal_customer_status[".isUseToolTips"] = true;
}


	$tdatamst_royal_customer_status[".NCSearch"] = true;



$tdatamst_royal_customer_status[".shortTableName"] = "mst_royal_customer_status";
$tdatamst_royal_customer_status[".nSecOptions"] = 0;
$tdatamst_royal_customer_status[".recsPerRowPrint"] = 1;
$tdatamst_royal_customer_status[".mainTableOwnerID"] = "";
$tdatamst_royal_customer_status[".moveNext"] = 1;
$tdatamst_royal_customer_status[".entityType"] = 0;

$tdatamst_royal_customer_status[".strOriginalTableName"] = "mst_royal_customer_status";

	



$tdatamst_royal_customer_status[".showAddInPopup"] = false;

$tdatamst_royal_customer_status[".showEditInPopup"] = false;

$tdatamst_royal_customer_status[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_royal_customer_status[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_royal_customer_status[".fieldsForRegister"] = array();

$tdatamst_royal_customer_status[".listAjax"] = false;

	$tdatamst_royal_customer_status[".audit"] = true;

	$tdatamst_royal_customer_status[".locking"] = false;



$tdatamst_royal_customer_status[".list"] = true;

$tdatamst_royal_customer_status[".inlineEdit"] = true;


$tdatamst_royal_customer_status[".reorderRecordsByHeader"] = true;



$tdatamst_royal_customer_status[".inlineAdd"] = true;

$tdatamst_royal_customer_status[".import"] = true;

$tdatamst_royal_customer_status[".exportTo"] = true;


$tdatamst_royal_customer_status[".delete"] = true;

$tdatamst_royal_customer_status[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_royal_customer_status[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_royal_customer_status[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_royal_customer_status[".searchSaving"] = false;
//

$tdatamst_royal_customer_status[".showSearchPanel"] = true;
		$tdatamst_royal_customer_status[".flexibleSearch"] = true;

$tdatamst_royal_customer_status[".isUseAjaxSuggest"] = true;

$tdatamst_royal_customer_status[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_royal_customer_status[".ajaxCodeSnippetAdded"] = false;

$tdatamst_royal_customer_status[".buttonsAdded"] = false;

$tdatamst_royal_customer_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_royal_customer_status[".isUseTimeForSearch"] = false;





$tdatamst_royal_customer_status[".allSearchFields"] = array();
$tdatamst_royal_customer_status[".filterFields"] = array();
$tdatamst_royal_customer_status[".requiredSearchFields"] = array();

$tdatamst_royal_customer_status[".allSearchFields"][] = "id";
	$tdatamst_royal_customer_status[".allSearchFields"][] = "name";
	$tdatamst_royal_customer_status[".allSearchFields"][] = "sort";
	$tdatamst_royal_customer_status[".allSearchFields"][] = "updated_by";
	$tdatamst_royal_customer_status[".allSearchFields"][] = "updated_at";
	$tdatamst_royal_customer_status[".allSearchFields"][] = "created_by";
	$tdatamst_royal_customer_status[".allSearchFields"][] = "created_at";
	

$tdatamst_royal_customer_status[".googleLikeFields"] = array();
$tdatamst_royal_customer_status[".googleLikeFields"][] = "id";
$tdatamst_royal_customer_status[".googleLikeFields"][] = "name";
$tdatamst_royal_customer_status[".googleLikeFields"][] = "sort";
$tdatamst_royal_customer_status[".googleLikeFields"][] = "updated_by";
$tdatamst_royal_customer_status[".googleLikeFields"][] = "updated_at";
$tdatamst_royal_customer_status[".googleLikeFields"][] = "created_by";
$tdatamst_royal_customer_status[".googleLikeFields"][] = "created_at";


$tdatamst_royal_customer_status[".advSearchFields"] = array();
$tdatamst_royal_customer_status[".advSearchFields"][] = "id";
$tdatamst_royal_customer_status[".advSearchFields"][] = "name";
$tdatamst_royal_customer_status[".advSearchFields"][] = "sort";
$tdatamst_royal_customer_status[".advSearchFields"][] = "updated_by";
$tdatamst_royal_customer_status[".advSearchFields"][] = "updated_at";
$tdatamst_royal_customer_status[".advSearchFields"][] = "created_by";
$tdatamst_royal_customer_status[".advSearchFields"][] = "created_at";

$tdatamst_royal_customer_status[".tableType"] = "list";

$tdatamst_royal_customer_status[".printerPageOrientation"] = 0;
$tdatamst_royal_customer_status[".nPrinterPageScale"] = 100;

$tdatamst_royal_customer_status[".nPrinterSplitRecords"] = 40;

$tdatamst_royal_customer_status[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_royal_customer_status[".geocodingEnabled"] = false;





$tdatamst_royal_customer_status[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_royal_customer_status[".pageSize"] = 20;

$tdatamst_royal_customer_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_royal_customer_status[".strOrderBy"] = $tstrOrderBy;

$tdatamst_royal_customer_status[".orderindexes"] = array();

$tdatamst_royal_customer_status[".sqlHead"] = "SELECT `id`,  	`name`,  	`sort`,  	`updated_by`,  	`updated_at`,  	`created_by`,  	`created_at`";
$tdatamst_royal_customer_status[".sqlFrom"] = "FROM `mst_royal_customer_status`";
$tdatamst_royal_customer_status[".sqlWhereExpr"] = "";
$tdatamst_royal_customer_status[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_royal_customer_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_royal_customer_status[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_royal_customer_status[".highlightSearchResults"] = true;

$tableKeysmst_royal_customer_status = array();
$tableKeysmst_royal_customer_status[] = "id";
$tdatamst_royal_customer_status[".Keys"] = $tableKeysmst_royal_customer_status;

$tdatamst_royal_customer_status[".listFields"] = array();
$tdatamst_royal_customer_status[".listFields"][] = "id";
$tdatamst_royal_customer_status[".listFields"][] = "name";
$tdatamst_royal_customer_status[".listFields"][] = "sort";
$tdatamst_royal_customer_status[".listFields"][] = "updated_by";
$tdatamst_royal_customer_status[".listFields"][] = "updated_at";
$tdatamst_royal_customer_status[".listFields"][] = "created_by";
$tdatamst_royal_customer_status[".listFields"][] = "created_at";

$tdatamst_royal_customer_status[".hideMobileList"] = array();


$tdatamst_royal_customer_status[".viewFields"] = array();

$tdatamst_royal_customer_status[".addFields"] = array();

$tdatamst_royal_customer_status[".masterListFields"] = array();
$tdatamst_royal_customer_status[".masterListFields"][] = "id";
$tdatamst_royal_customer_status[".masterListFields"][] = "name";
$tdatamst_royal_customer_status[".masterListFields"][] = "sort";
$tdatamst_royal_customer_status[".masterListFields"][] = "updated_by";
$tdatamst_royal_customer_status[".masterListFields"][] = "updated_at";
$tdatamst_royal_customer_status[".masterListFields"][] = "created_by";
$tdatamst_royal_customer_status[".masterListFields"][] = "created_at";

$tdatamst_royal_customer_status[".inlineAddFields"] = array();
$tdatamst_royal_customer_status[".inlineAddFields"][] = "name";
$tdatamst_royal_customer_status[".inlineAddFields"][] = "sort";

$tdatamst_royal_customer_status[".editFields"] = array();

$tdatamst_royal_customer_status[".inlineEditFields"] = array();
$tdatamst_royal_customer_status[".inlineEditFields"][] = "name";
$tdatamst_royal_customer_status[".inlineEditFields"][] = "sort";

$tdatamst_royal_customer_status[".updateSelectedFields"] = array();


$tdatamst_royal_customer_status[".exportFields"] = array();
$tdatamst_royal_customer_status[".exportFields"][] = "id";
$tdatamst_royal_customer_status[".exportFields"][] = "name";
$tdatamst_royal_customer_status[".exportFields"][] = "sort";
$tdatamst_royal_customer_status[".exportFields"][] = "updated_by";
$tdatamst_royal_customer_status[".exportFields"][] = "updated_at";
$tdatamst_royal_customer_status[".exportFields"][] = "created_by";
$tdatamst_royal_customer_status[".exportFields"][] = "created_at";

$tdatamst_royal_customer_status[".importFields"] = array();
$tdatamst_royal_customer_status[".importFields"][] = "id";
$tdatamst_royal_customer_status[".importFields"][] = "name";
$tdatamst_royal_customer_status[".importFields"][] = "sort";
$tdatamst_royal_customer_status[".importFields"][] = "updated_by";
$tdatamst_royal_customer_status[".importFields"][] = "updated_at";
$tdatamst_royal_customer_status[".importFields"][] = "created_by";
$tdatamst_royal_customer_status[".importFields"][] = "created_at";

$tdatamst_royal_customer_status[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_royal_customer_status";
	$fdata["Label"] = GetFieldLabel("mst_royal_customer_status","id");
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




	$tdatamst_royal_customer_status["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_royal_customer_status";
	$fdata["Label"] = GetFieldLabel("mst_royal_customer_status","name");
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




	$tdatamst_royal_customer_status["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_royal_customer_status";
	$fdata["Label"] = GetFieldLabel("mst_royal_customer_status","sort");
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




	$tdatamst_royal_customer_status["sort"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_royal_customer_status";
	$fdata["Label"] = GetFieldLabel("mst_royal_customer_status","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_royal_customer_status["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_royal_customer_status";
	$fdata["Label"] = GetFieldLabel("mst_royal_customer_status","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_royal_customer_status["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_royal_customer_status";
	$fdata["Label"] = GetFieldLabel("mst_royal_customer_status","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_royal_customer_status["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_royal_customer_status";
	$fdata["Label"] = GetFieldLabel("mst_royal_customer_status","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdatamst_royal_customer_status["created_at"] = $fdata;


$tables_data["mst_royal_customer_status"]=&$tdatamst_royal_customer_status;
$field_labels["mst_royal_customer_status"] = &$fieldLabelsmst_royal_customer_status;
$fieldToolTips["mst_royal_customer_status"] = &$fieldToolTipsmst_royal_customer_status;
$placeHolders["mst_royal_customer_status"] = &$placeHoldersmst_royal_customer_status;
$page_titles["mst_royal_customer_status"] = &$pageTitlesmst_royal_customer_status;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_royal_customer_status"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_royal_customer_status"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_royal_customer_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`sort`,  	`updated_by`,  	`updated_at`,  	`created_by`,  	`created_at`";
$proto0["m_strFrom"] = "FROM `mst_royal_customer_status`";
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
	"m_strTable" => "mst_royal_customer_status",
	"m_srcTableName" => "mst_royal_customer_status"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_royal_customer_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_royal_customer_status",
	"m_srcTableName" => "mst_royal_customer_status"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_royal_customer_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_royal_customer_status",
	"m_srcTableName" => "mst_royal_customer_status"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_royal_customer_status";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_royal_customer_status",
	"m_srcTableName" => "mst_royal_customer_status"
));

$proto12["m_sql"] = "`updated_by`";
$proto12["m_srcTableName"] = "mst_royal_customer_status";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_royal_customer_status",
	"m_srcTableName" => "mst_royal_customer_status"
));

$proto14["m_sql"] = "`updated_at`";
$proto14["m_srcTableName"] = "mst_royal_customer_status";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_royal_customer_status",
	"m_srcTableName" => "mst_royal_customer_status"
));

$proto16["m_sql"] = "`created_by`";
$proto16["m_srcTableName"] = "mst_royal_customer_status";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_royal_customer_status",
	"m_srcTableName" => "mst_royal_customer_status"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "mst_royal_customer_status";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_royal_customer_status";
$proto21["m_srcTableName"] = "mst_royal_customer_status";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "sort";
$proto21["m_columns"][] = "updated_by";
$proto21["m_columns"][] = "updated_at";
$proto21["m_columns"][] = "created_by";
$proto21["m_columns"][] = "created_at";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`mst_royal_customer_status`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_royal_customer_status";
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
$proto0["m_srcTableName"]="mst_royal_customer_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_royal_customer_status = createSqlQuery_mst_royal_customer_status();


	
		;

							

$tdatamst_royal_customer_status[".sqlquery"] = $queryData_mst_royal_customer_status;

$tableEvents["mst_royal_customer_status"] = new eventsBase;
$tdatamst_royal_customer_status[".hasEvents"] = false;

?>