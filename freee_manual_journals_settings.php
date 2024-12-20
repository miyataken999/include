<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_manual_journals = array();
	$tdatafreee_manual_journals[".truncateText"] = true;
	$tdatafreee_manual_journals[".NumberOfChars"] = 80;
	$tdatafreee_manual_journals[".ShortName"] = "freee_manual_journals";
	$tdatafreee_manual_journals[".OwnerID"] = "";
	$tdatafreee_manual_journals[".OriginalTable"] = "freee_manual_journals";

//	field labels
$fieldLabelsfreee_manual_journals = array();
$fieldToolTipsfreee_manual_journals = array();
$pageTitlesfreee_manual_journals = array();
$placeHoldersfreee_manual_journals = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_manual_journals["Japanese"] = array();
	$fieldToolTipsfreee_manual_journals["Japanese"] = array();
	$placeHoldersfreee_manual_journals["Japanese"] = array();
	$pageTitlesfreee_manual_journals["Japanese"] = array();
	$fieldLabelsfreee_manual_journals["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_manual_journals["Japanese"]["id"] = "";
	$placeHoldersfreee_manual_journals["Japanese"]["id"] = "";
	$fieldLabelsfreee_manual_journals["Japanese"]["company_id"] = "Company Id";
	$fieldToolTipsfreee_manual_journals["Japanese"]["company_id"] = "";
	$placeHoldersfreee_manual_journals["Japanese"]["company_id"] = "";
	$fieldLabelsfreee_manual_journals["Japanese"]["issue_date"] = "Issue Date";
	$fieldToolTipsfreee_manual_journals["Japanese"]["issue_date"] = "";
	$placeHoldersfreee_manual_journals["Japanese"]["issue_date"] = "";
	$fieldLabelsfreee_manual_journals["Japanese"]["adjustment"] = "Adjustment";
	$fieldToolTipsfreee_manual_journals["Japanese"]["adjustment"] = "";
	$placeHoldersfreee_manual_journals["Japanese"]["adjustment"] = "";
	$fieldLabelsfreee_manual_journals["Japanese"]["txn_number"] = "Txn Number";
	$fieldToolTipsfreee_manual_journals["Japanese"]["txn_number"] = "";
	$placeHoldersfreee_manual_journals["Japanese"]["txn_number"] = "";
	$fieldLabelsfreee_manual_journals["Japanese"]["details"] = "Details";
	$fieldToolTipsfreee_manual_journals["Japanese"]["details"] = "";
	$placeHoldersfreee_manual_journals["Japanese"]["details"] = "";
	$fieldLabelsfreee_manual_journals["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_manual_journals["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_manual_journals["Japanese"]["updated_by"] = "";
	$fieldLabelsfreee_manual_journals["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_manual_journals["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_manual_journals["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_manual_journals["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsfreee_manual_journals["Japanese"]["created_by"] = "";
	$placeHoldersfreee_manual_journals["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_manual_journals["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_manual_journals["Japanese"]["created_at"] = "";
	$placeHoldersfreee_manual_journals["Japanese"]["created_at"] = "";
	if (count($fieldToolTipsfreee_manual_journals["Japanese"]))
		$tdatafreee_manual_journals[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_manual_journals[""] = array();
	$fieldToolTipsfreee_manual_journals[""] = array();
	$placeHoldersfreee_manual_journals[""] = array();
	$pageTitlesfreee_manual_journals[""] = array();
	$fieldLabelsfreee_manual_journals[""]["id"] = "Id";
	$fieldToolTipsfreee_manual_journals[""]["id"] = "";
	$placeHoldersfreee_manual_journals[""]["id"] = "";
	$fieldLabelsfreee_manual_journals[""]["company_id"] = "Company Id";
	$fieldToolTipsfreee_manual_journals[""]["company_id"] = "";
	$placeHoldersfreee_manual_journals[""]["company_id"] = "";
	$fieldLabelsfreee_manual_journals[""]["issue_date"] = "Issue Date";
	$fieldToolTipsfreee_manual_journals[""]["issue_date"] = "";
	$placeHoldersfreee_manual_journals[""]["issue_date"] = "";
	$fieldLabelsfreee_manual_journals[""]["adjustment"] = "Adjustment";
	$fieldToolTipsfreee_manual_journals[""]["adjustment"] = "";
	$placeHoldersfreee_manual_journals[""]["adjustment"] = "";
	$fieldLabelsfreee_manual_journals[""]["txn_number"] = "Txn Number";
	$fieldToolTipsfreee_manual_journals[""]["txn_number"] = "";
	$placeHoldersfreee_manual_journals[""]["txn_number"] = "";
	$fieldLabelsfreee_manual_journals[""]["details"] = "Details";
	$fieldToolTipsfreee_manual_journals[""]["details"] = "";
	$placeHoldersfreee_manual_journals[""]["details"] = "";
	$fieldLabelsfreee_manual_journals[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_manual_journals[""]["updated_by"] = "";
	$placeHoldersfreee_manual_journals[""]["updated_by"] = "";
	$fieldLabelsfreee_manual_journals[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_manual_journals[""]["updated_at"] = "";
	$placeHoldersfreee_manual_journals[""]["updated_at"] = "";
	$fieldLabelsfreee_manual_journals[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_manual_journals[""]["created_by"] = "";
	$placeHoldersfreee_manual_journals[""]["created_by"] = "";
	$fieldLabelsfreee_manual_journals[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_manual_journals[""]["created_at"] = "";
	$placeHoldersfreee_manual_journals[""]["created_at"] = "";
	if (count($fieldToolTipsfreee_manual_journals[""]))
		$tdatafreee_manual_journals[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_manual_journals["English"] = array();
	$fieldToolTipsfreee_manual_journals["English"] = array();
	$placeHoldersfreee_manual_journals["English"] = array();
	$pageTitlesfreee_manual_journals["English"] = array();
	$fieldLabelsfreee_manual_journals["English"]["id"] = "Id";
	$fieldToolTipsfreee_manual_journals["English"]["id"] = "";
	$placeHoldersfreee_manual_journals["English"]["id"] = "";
	$fieldLabelsfreee_manual_journals["English"]["company_id"] = "Company Id";
	$fieldToolTipsfreee_manual_journals["English"]["company_id"] = "";
	$placeHoldersfreee_manual_journals["English"]["company_id"] = "";
	$fieldLabelsfreee_manual_journals["English"]["issue_date"] = "Issue Date";
	$fieldToolTipsfreee_manual_journals["English"]["issue_date"] = "";
	$placeHoldersfreee_manual_journals["English"]["issue_date"] = "";
	$fieldLabelsfreee_manual_journals["English"]["adjustment"] = "Adjustment";
	$fieldToolTipsfreee_manual_journals["English"]["adjustment"] = "";
	$placeHoldersfreee_manual_journals["English"]["adjustment"] = "";
	$fieldLabelsfreee_manual_journals["English"]["txn_number"] = "Txn Number";
	$fieldToolTipsfreee_manual_journals["English"]["txn_number"] = "";
	$placeHoldersfreee_manual_journals["English"]["txn_number"] = "";
	$fieldLabelsfreee_manual_journals["English"]["details"] = "Details";
	$fieldToolTipsfreee_manual_journals["English"]["details"] = "";
	$placeHoldersfreee_manual_journals["English"]["details"] = "";
	$fieldLabelsfreee_manual_journals["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_manual_journals["English"]["updated_by"] = "";
	$placeHoldersfreee_manual_journals["English"]["updated_by"] = "";
	$fieldLabelsfreee_manual_journals["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_manual_journals["English"]["updated_at"] = "";
	$placeHoldersfreee_manual_journals["English"]["updated_at"] = "";
	$fieldLabelsfreee_manual_journals["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_manual_journals["English"]["created_by"] = "";
	$placeHoldersfreee_manual_journals["English"]["created_by"] = "";
	$fieldLabelsfreee_manual_journals["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_manual_journals["English"]["created_at"] = "";
	$placeHoldersfreee_manual_journals["English"]["created_at"] = "";
	if (count($fieldToolTipsfreee_manual_journals["English"]))
		$tdatafreee_manual_journals[".isUseToolTips"] = true;
}


	$tdatafreee_manual_journals[".NCSearch"] = true;



$tdatafreee_manual_journals[".shortTableName"] = "freee_manual_journals";
$tdatafreee_manual_journals[".nSecOptions"] = 0;
$tdatafreee_manual_journals[".recsPerRowPrint"] = 1;
$tdatafreee_manual_journals[".mainTableOwnerID"] = "";
$tdatafreee_manual_journals[".moveNext"] = 1;
$tdatafreee_manual_journals[".entityType"] = 0;

$tdatafreee_manual_journals[".strOriginalTableName"] = "freee_manual_journals";

	



$tdatafreee_manual_journals[".showAddInPopup"] = false;

$tdatafreee_manual_journals[".showEditInPopup"] = false;

$tdatafreee_manual_journals[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_manual_journals[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_manual_journals[".fieldsForRegister"] = array();

$tdatafreee_manual_journals[".listAjax"] = false;

	$tdatafreee_manual_journals[".audit"] = false;

	$tdatafreee_manual_journals[".locking"] = false;



$tdatafreee_manual_journals[".list"] = true;



$tdatafreee_manual_journals[".reorderRecordsByHeader"] = true;





$tdatafreee_manual_journals[".exportTo"] = true;



$tdatafreee_manual_journals[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_manual_journals[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_manual_journals[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_manual_journals[".searchSaving"] = false;
//

$tdatafreee_manual_journals[".showSearchPanel"] = true;
		$tdatafreee_manual_journals[".flexibleSearch"] = true;

$tdatafreee_manual_journals[".isUseAjaxSuggest"] = true;

$tdatafreee_manual_journals[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_manual_journals[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_manual_journals[".buttonsAdded"] = false;

$tdatafreee_manual_journals[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_manual_journals[".isUseTimeForSearch"] = false;





$tdatafreee_manual_journals[".allSearchFields"] = array();
$tdatafreee_manual_journals[".filterFields"] = array();
$tdatafreee_manual_journals[".requiredSearchFields"] = array();

$tdatafreee_manual_journals[".allSearchFields"][] = "id";
	$tdatafreee_manual_journals[".allSearchFields"][] = "company_id";
	$tdatafreee_manual_journals[".allSearchFields"][] = "issue_date";
	$tdatafreee_manual_journals[".allSearchFields"][] = "adjustment";
	$tdatafreee_manual_journals[".allSearchFields"][] = "txn_number";
	$tdatafreee_manual_journals[".allSearchFields"][] = "details";
	

$tdatafreee_manual_journals[".googleLikeFields"] = array();
$tdatafreee_manual_journals[".googleLikeFields"][] = "id";
$tdatafreee_manual_journals[".googleLikeFields"][] = "company_id";
$tdatafreee_manual_journals[".googleLikeFields"][] = "issue_date";
$tdatafreee_manual_journals[".googleLikeFields"][] = "adjustment";
$tdatafreee_manual_journals[".googleLikeFields"][] = "txn_number";
$tdatafreee_manual_journals[".googleLikeFields"][] = "details";
$tdatafreee_manual_journals[".googleLikeFields"][] = "updated_by";
$tdatafreee_manual_journals[".googleLikeFields"][] = "updated_at";
$tdatafreee_manual_journals[".googleLikeFields"][] = "created_by";
$tdatafreee_manual_journals[".googleLikeFields"][] = "created_at";


$tdatafreee_manual_journals[".advSearchFields"] = array();
$tdatafreee_manual_journals[".advSearchFields"][] = "id";
$tdatafreee_manual_journals[".advSearchFields"][] = "company_id";
$tdatafreee_manual_journals[".advSearchFields"][] = "issue_date";
$tdatafreee_manual_journals[".advSearchFields"][] = "adjustment";
$tdatafreee_manual_journals[".advSearchFields"][] = "txn_number";
$tdatafreee_manual_journals[".advSearchFields"][] = "details";

$tdatafreee_manual_journals[".tableType"] = "list";

$tdatafreee_manual_journals[".printerPageOrientation"] = 0;
$tdatafreee_manual_journals[".nPrinterPageScale"] = 100;

$tdatafreee_manual_journals[".nPrinterSplitRecords"] = 40;

$tdatafreee_manual_journals[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_manual_journals[".geocodingEnabled"] = false;





$tdatafreee_manual_journals[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_manual_journals[".pageSize"] = 100;

$tdatafreee_manual_journals[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `issue_date` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_manual_journals[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_manual_journals[".orderindexes"] = array();
$tdatafreee_manual_journals[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`issue_date`");

$tdatafreee_manual_journals[".sqlHead"] = "SELECT `id`,  `company_id`,  `issue_date`,  `adjustment`,  `txn_number`,  `details`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$tdatafreee_manual_journals[".sqlFrom"] = "FROM `freee_manual_journals`";
$tdatafreee_manual_journals[".sqlWhereExpr"] = "";
$tdatafreee_manual_journals[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_manual_journals[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_manual_journals[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_manual_journals[".highlightSearchResults"] = true;

$tableKeysfreee_manual_journals = array();
$tableKeysfreee_manual_journals[] = "id";
$tdatafreee_manual_journals[".Keys"] = $tableKeysfreee_manual_journals;

$tdatafreee_manual_journals[".listFields"] = array();
$tdatafreee_manual_journals[".listFields"][] = "id";
$tdatafreee_manual_journals[".listFields"][] = "company_id";
$tdatafreee_manual_journals[".listFields"][] = "issue_date";
$tdatafreee_manual_journals[".listFields"][] = "adjustment";
$tdatafreee_manual_journals[".listFields"][] = "txn_number";
$tdatafreee_manual_journals[".listFields"][] = "details";

$tdatafreee_manual_journals[".hideMobileList"] = array();


$tdatafreee_manual_journals[".viewFields"] = array();

$tdatafreee_manual_journals[".addFields"] = array();

$tdatafreee_manual_journals[".masterListFields"] = array();
$tdatafreee_manual_journals[".masterListFields"][] = "id";
$tdatafreee_manual_journals[".masterListFields"][] = "company_id";
$tdatafreee_manual_journals[".masterListFields"][] = "issue_date";
$tdatafreee_manual_journals[".masterListFields"][] = "adjustment";
$tdatafreee_manual_journals[".masterListFields"][] = "txn_number";
$tdatafreee_manual_journals[".masterListFields"][] = "details";
$tdatafreee_manual_journals[".masterListFields"][] = "updated_by";
$tdatafreee_manual_journals[".masterListFields"][] = "updated_at";
$tdatafreee_manual_journals[".masterListFields"][] = "created_by";
$tdatafreee_manual_journals[".masterListFields"][] = "created_at";

$tdatafreee_manual_journals[".inlineAddFields"] = array();

$tdatafreee_manual_journals[".editFields"] = array();

$tdatafreee_manual_journals[".inlineEditFields"] = array();

$tdatafreee_manual_journals[".updateSelectedFields"] = array();


$tdatafreee_manual_journals[".exportFields"] = array();
$tdatafreee_manual_journals[".exportFields"][] = "id";
$tdatafreee_manual_journals[".exportFields"][] = "company_id";
$tdatafreee_manual_journals[".exportFields"][] = "issue_date";
$tdatafreee_manual_journals[".exportFields"][] = "adjustment";
$tdatafreee_manual_journals[".exportFields"][] = "txn_number";
$tdatafreee_manual_journals[".exportFields"][] = "details";

$tdatafreee_manual_journals[".importFields"] = array();

$tdatafreee_manual_journals[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_manual_journals";
	$fdata["Label"] = GetFieldLabel("freee_manual_journals","id");
	$fdata["FieldType"] = 3;

	
	
	
			
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




	$tdatafreee_manual_journals["id"] = $fdata;
//	company_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "company_id";
	$fdata["GoodName"] = "company_id";
	$fdata["ownerTable"] = "freee_manual_journals";
	$fdata["Label"] = GetFieldLabel("freee_manual_journals","company_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "company_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`company_id`";

	
	
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




	$tdatafreee_manual_journals["company_id"] = $fdata;
//	issue_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "issue_date";
	$fdata["GoodName"] = "issue_date";
	$fdata["ownerTable"] = "freee_manual_journals";
	$fdata["Label"] = GetFieldLabel("freee_manual_journals","issue_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "issue_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`issue_date`";

	
	
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




	$tdatafreee_manual_journals["issue_date"] = $fdata;
//	adjustment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "adjustment";
	$fdata["GoodName"] = "adjustment";
	$fdata["ownerTable"] = "freee_manual_journals";
	$fdata["Label"] = GetFieldLabel("freee_manual_journals","adjustment");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "adjustment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`adjustment`";

	
	
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




	$tdatafreee_manual_journals["adjustment"] = $fdata;
//	txn_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "txn_number";
	$fdata["GoodName"] = "txn_number";
	$fdata["ownerTable"] = "freee_manual_journals";
	$fdata["Label"] = GetFieldLabel("freee_manual_journals","txn_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "txn_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`txn_number`";

	
	
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




	$tdatafreee_manual_journals["txn_number"] = $fdata;
//	details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "details";
	$fdata["GoodName"] = "details";
	$fdata["ownerTable"] = "freee_manual_journals";
	$fdata["Label"] = GetFieldLabel("freee_manual_journals","details");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "details";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`details`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatafreee_manual_journals["details"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_manual_journals";
	$fdata["Label"] = GetFieldLabel("freee_manual_journals","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_by`";

	
	
			
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








	$tdatafreee_manual_journals["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_manual_journals";
	$fdata["Label"] = GetFieldLabel("freee_manual_journals","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_at`";

	
	
			
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








	$tdatafreee_manual_journals["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_manual_journals";
	$fdata["Label"] = GetFieldLabel("freee_manual_journals","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_by`";

	
	
			
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








	$tdatafreee_manual_journals["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_manual_journals";
	$fdata["Label"] = GetFieldLabel("freee_manual_journals","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_at`";

	
	
			
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








	$tdatafreee_manual_journals["created_at"] = $fdata;


$tables_data["freee_manual_journals"]=&$tdatafreee_manual_journals;
$field_labels["freee_manual_journals"] = &$fieldLabelsfreee_manual_journals;
$fieldToolTips["freee_manual_journals"] = &$fieldToolTipsfreee_manual_journals;
$placeHolders["freee_manual_journals"] = &$placeHoldersfreee_manual_journals;
$page_titles["freee_manual_journals"] = &$pageTitlesfreee_manual_journals;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_manual_journals"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_manual_journals"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_manual_journals()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `company_id`,  `issue_date`,  `adjustment`,  `txn_number`,  `details`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$proto0["m_strFrom"] = "FROM `freee_manual_journals`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `issue_date` DESC";
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
	"m_strTable" => "freee_manual_journals",
	"m_srcTableName" => "freee_manual_journals"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_manual_journals";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "company_id",
	"m_strTable" => "freee_manual_journals",
	"m_srcTableName" => "freee_manual_journals"
));

$proto8["m_sql"] = "`company_id`";
$proto8["m_srcTableName"] = "freee_manual_journals";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "issue_date",
	"m_strTable" => "freee_manual_journals",
	"m_srcTableName" => "freee_manual_journals"
));

$proto10["m_sql"] = "`issue_date`";
$proto10["m_srcTableName"] = "freee_manual_journals";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "adjustment",
	"m_strTable" => "freee_manual_journals",
	"m_srcTableName" => "freee_manual_journals"
));

$proto12["m_sql"] = "`adjustment`";
$proto12["m_srcTableName"] = "freee_manual_journals";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "txn_number",
	"m_strTable" => "freee_manual_journals",
	"m_srcTableName" => "freee_manual_journals"
));

$proto14["m_sql"] = "`txn_number`";
$proto14["m_srcTableName"] = "freee_manual_journals";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "details",
	"m_strTable" => "freee_manual_journals",
	"m_srcTableName" => "freee_manual_journals"
));

$proto16["m_sql"] = "`details`";
$proto16["m_srcTableName"] = "freee_manual_journals";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_manual_journals",
	"m_srcTableName" => "freee_manual_journals"
));

$proto18["m_sql"] = "`updated_by`";
$proto18["m_srcTableName"] = "freee_manual_journals";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_manual_journals",
	"m_srcTableName" => "freee_manual_journals"
));

$proto20["m_sql"] = "`updated_at`";
$proto20["m_srcTableName"] = "freee_manual_journals";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_manual_journals",
	"m_srcTableName" => "freee_manual_journals"
));

$proto22["m_sql"] = "`created_by`";
$proto22["m_srcTableName"] = "freee_manual_journals";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_manual_journals",
	"m_srcTableName" => "freee_manual_journals"
));

$proto24["m_sql"] = "`created_at`";
$proto24["m_srcTableName"] = "freee_manual_journals";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "freee_manual_journals";
$proto27["m_srcTableName"] = "freee_manual_journals";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "company_id";
$proto27["m_columns"][] = "issue_date";
$proto27["m_columns"][] = "adjustment";
$proto27["m_columns"][] = "txn_number";
$proto27["m_columns"][] = "details";
$proto27["m_columns"][] = "updated_by";
$proto27["m_columns"][] = "updated_at";
$proto27["m_columns"][] = "created_by";
$proto27["m_columns"][] = "created_at";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "`freee_manual_journals`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "freee_manual_journals";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "issue_date",
	"m_strTable" => "freee_manual_journals",
	"m_srcTableName" => "freee_manual_journals"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="freee_manual_journals";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_manual_journals = createSqlQuery_freee_manual_journals();


	
		;

										

$tdatafreee_manual_journals[".sqlquery"] = $queryData_freee_manual_journals;

$tableEvents["freee_manual_journals"] = new eventsBase;
$tdatafreee_manual_journals[".hasEvents"] = false;

?>