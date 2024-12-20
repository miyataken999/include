<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_employees_details = array();
	$tdatafreee_employees_details[".truncateText"] = true;
	$tdatafreee_employees_details[".NumberOfChars"] = 80;
	$tdatafreee_employees_details[".ShortName"] = "freee_employees_details";
	$tdatafreee_employees_details[".OwnerID"] = "";
	$tdatafreee_employees_details[".OriginalTable"] = "freee_employees_details";

//	field labels
$fieldLabelsfreee_employees_details = array();
$fieldToolTipsfreee_employees_details = array();
$pageTitlesfreee_employees_details = array();
$placeHoldersfreee_employees_details = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_employees_details["Japanese"] = array();
	$fieldToolTipsfreee_employees_details["Japanese"] = array();
	$placeHoldersfreee_employees_details["Japanese"] = array();
	$pageTitlesfreee_employees_details["Japanese"] = array();
	$fieldLabelsfreee_employees_details["Japanese"]["employee_id"] = "従業員id";
	$fieldToolTipsfreee_employees_details["Japanese"]["employee_id"] = "";
	$placeHoldersfreee_employees_details["Japanese"]["employee_id"] = "";
	$fieldLabelsfreee_employees_details["Japanese"]["name"] = "Name";
	$fieldToolTipsfreee_employees_details["Japanese"]["name"] = "";
	$placeHoldersfreee_employees_details["Japanese"]["name"] = "";
	$fieldLabelsfreee_employees_details["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_employees_details["Japanese"]["created_at"] = "";
	$placeHoldersfreee_employees_details["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_employees_details["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_employees_details["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_employees_details["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_employees_details["Japanese"]["birth_date"] = "Birth Date";
	$fieldToolTipsfreee_employees_details["Japanese"]["birth_date"] = "";
	$placeHoldersfreee_employees_details["Japanese"]["birth_date"] = "";
	$fieldLabelsfreee_employees_details["Japanese"]["user_id"] = "User Id(EVA)";
	$fieldToolTipsfreee_employees_details["Japanese"]["user_id"] = "";
	$placeHoldersfreee_employees_details["Japanese"]["user_id"] = "";
	$fieldLabelsfreee_employees_details["Japanese"]["retire_date"] = "Retire Date";
	$fieldToolTipsfreee_employees_details["Japanese"]["retire_date"] = "";
	$placeHoldersfreee_employees_details["Japanese"]["retire_date"] = "";
	if (count($fieldToolTipsfreee_employees_details["Japanese"]))
		$tdatafreee_employees_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_employees_details[""] = array();
	$fieldToolTipsfreee_employees_details[""] = array();
	$placeHoldersfreee_employees_details[""] = array();
	$pageTitlesfreee_employees_details[""] = array();
	$fieldLabelsfreee_employees_details[""]["employee_id"] = "Employee Id";
	$fieldToolTipsfreee_employees_details[""]["employee_id"] = "";
	$placeHoldersfreee_employees_details[""]["employee_id"] = "";
	$fieldLabelsfreee_employees_details[""]["name"] = "Name";
	$fieldToolTipsfreee_employees_details[""]["name"] = "";
	$placeHoldersfreee_employees_details[""]["name"] = "";
	$fieldLabelsfreee_employees_details[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_employees_details[""]["created_at"] = "";
	$placeHoldersfreee_employees_details[""]["created_at"] = "";
	$fieldLabelsfreee_employees_details[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_employees_details[""]["updated_at"] = "";
	$placeHoldersfreee_employees_details[""]["updated_at"] = "";
	$fieldLabelsfreee_employees_details[""]["birth_date"] = "Birth Date";
	$fieldToolTipsfreee_employees_details[""]["birth_date"] = "";
	$placeHoldersfreee_employees_details[""]["birth_date"] = "";
	$fieldLabelsfreee_employees_details[""]["user_id"] = "User Id";
	$fieldToolTipsfreee_employees_details[""]["user_id"] = "";
	$placeHoldersfreee_employees_details[""]["user_id"] = "";
	$fieldLabelsfreee_employees_details[""]["retire_date"] = "Retire Date";
	$fieldToolTipsfreee_employees_details[""]["retire_date"] = "";
	$placeHoldersfreee_employees_details[""]["retire_date"] = "";
	if (count($fieldToolTipsfreee_employees_details[""]))
		$tdatafreee_employees_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_employees_details["English"] = array();
	$fieldToolTipsfreee_employees_details["English"] = array();
	$placeHoldersfreee_employees_details["English"] = array();
	$pageTitlesfreee_employees_details["English"] = array();
	$fieldLabelsfreee_employees_details["English"]["employee_id"] = "Employee Id";
	$fieldToolTipsfreee_employees_details["English"]["employee_id"] = "";
	$placeHoldersfreee_employees_details["English"]["employee_id"] = "";
	$fieldLabelsfreee_employees_details["English"]["name"] = "Name";
	$fieldToolTipsfreee_employees_details["English"]["name"] = "";
	$placeHoldersfreee_employees_details["English"]["name"] = "";
	$fieldLabelsfreee_employees_details["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_employees_details["English"]["created_at"] = "";
	$placeHoldersfreee_employees_details["English"]["created_at"] = "";
	$fieldLabelsfreee_employees_details["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_employees_details["English"]["updated_at"] = "";
	$placeHoldersfreee_employees_details["English"]["updated_at"] = "";
	$fieldLabelsfreee_employees_details["English"]["birth_date"] = "Birth Date";
	$fieldToolTipsfreee_employees_details["English"]["birth_date"] = "";
	$placeHoldersfreee_employees_details["English"]["birth_date"] = "";
	$fieldLabelsfreee_employees_details["English"]["user_id"] = "User Id";
	$fieldToolTipsfreee_employees_details["English"]["user_id"] = "";
	$placeHoldersfreee_employees_details["English"]["user_id"] = "";
	$fieldLabelsfreee_employees_details["English"]["retire_date"] = "Retire Date";
	$fieldToolTipsfreee_employees_details["English"]["retire_date"] = "";
	$placeHoldersfreee_employees_details["English"]["retire_date"] = "";
	if (count($fieldToolTipsfreee_employees_details["English"]))
		$tdatafreee_employees_details[".isUseToolTips"] = true;
}


	$tdatafreee_employees_details[".NCSearch"] = true;



$tdatafreee_employees_details[".shortTableName"] = "freee_employees_details";
$tdatafreee_employees_details[".nSecOptions"] = 0;
$tdatafreee_employees_details[".recsPerRowPrint"] = 1;
$tdatafreee_employees_details[".mainTableOwnerID"] = "";
$tdatafreee_employees_details[".moveNext"] = 1;
$tdatafreee_employees_details[".entityType"] = 0;

$tdatafreee_employees_details[".strOriginalTableName"] = "freee_employees_details";

	



$tdatafreee_employees_details[".showAddInPopup"] = false;

$tdatafreee_employees_details[".showEditInPopup"] = false;

$tdatafreee_employees_details[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_employees_details[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_employees_details[".fieldsForRegister"] = array();

$tdatafreee_employees_details[".listAjax"] = false;

	$tdatafreee_employees_details[".audit"] = false;

	$tdatafreee_employees_details[".locking"] = false;



$tdatafreee_employees_details[".list"] = true;

$tdatafreee_employees_details[".inlineEdit"] = true;


$tdatafreee_employees_details[".reorderRecordsByHeader"] = true;




$tdatafreee_employees_details[".import"] = true;

$tdatafreee_employees_details[".exportTo"] = true;



$tdatafreee_employees_details[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_employees_details[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_employees_details[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_employees_details[".searchSaving"] = false;
//

$tdatafreee_employees_details[".showSearchPanel"] = true;
		$tdatafreee_employees_details[".flexibleSearch"] = true;

$tdatafreee_employees_details[".isUseAjaxSuggest"] = true;

$tdatafreee_employees_details[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatafreee_employees_details[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_employees_details[".buttonsAdded"] = false;

$tdatafreee_employees_details[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_employees_details[".isUseTimeForSearch"] = false;



$tdatafreee_employees_details[".badgeColor"] = "6da5c8";


$tdatafreee_employees_details[".allSearchFields"] = array();
$tdatafreee_employees_details[".filterFields"] = array();
$tdatafreee_employees_details[".requiredSearchFields"] = array();

$tdatafreee_employees_details[".allSearchFields"][] = "employee_id";
	$tdatafreee_employees_details[".allSearchFields"][] = "name";
	$tdatafreee_employees_details[".allSearchFields"][] = "birth_date";
	$tdatafreee_employees_details[".allSearchFields"][] = "user_id";
	$tdatafreee_employees_details[".allSearchFields"][] = "retire_date";
	

$tdatafreee_employees_details[".googleLikeFields"] = array();
$tdatafreee_employees_details[".googleLikeFields"][] = "employee_id";
$tdatafreee_employees_details[".googleLikeFields"][] = "name";
$tdatafreee_employees_details[".googleLikeFields"][] = "created_at";
$tdatafreee_employees_details[".googleLikeFields"][] = "updated_at";
$tdatafreee_employees_details[".googleLikeFields"][] = "birth_date";
$tdatafreee_employees_details[".googleLikeFields"][] = "user_id";
$tdatafreee_employees_details[".googleLikeFields"][] = "retire_date";


$tdatafreee_employees_details[".advSearchFields"] = array();
$tdatafreee_employees_details[".advSearchFields"][] = "employee_id";
$tdatafreee_employees_details[".advSearchFields"][] = "name";
$tdatafreee_employees_details[".advSearchFields"][] = "birth_date";
$tdatafreee_employees_details[".advSearchFields"][] = "user_id";
$tdatafreee_employees_details[".advSearchFields"][] = "retire_date";

$tdatafreee_employees_details[".tableType"] = "list";

$tdatafreee_employees_details[".printerPageOrientation"] = 0;
$tdatafreee_employees_details[".nPrinterPageScale"] = 100;

$tdatafreee_employees_details[".nPrinterSplitRecords"] = 40;

$tdatafreee_employees_details[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_employees_details[".geocodingEnabled"] = false;





$tdatafreee_employees_details[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_employees_details[".pageSize"] = 100;

$tdatafreee_employees_details[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_employees_details[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_employees_details[".orderindexes"] = array();

$tdatafreee_employees_details[".sqlHead"] = "SELECT `employee_id`,  	`name`,  	`created_at`,  	`updated_at`,  	`birth_date`,  	`user_id`,  	`retire_date`";
$tdatafreee_employees_details[".sqlFrom"] = "FROM `freee_employees_details`";
$tdatafreee_employees_details[".sqlWhereExpr"] = "";
$tdatafreee_employees_details[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_employees_details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_employees_details[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_employees_details[".highlightSearchResults"] = true;

$tableKeysfreee_employees_details = array();
$tableKeysfreee_employees_details[] = "employee_id";
$tdatafreee_employees_details[".Keys"] = $tableKeysfreee_employees_details;

$tdatafreee_employees_details[".listFields"] = array();
$tdatafreee_employees_details[".listFields"][] = "employee_id";
$tdatafreee_employees_details[".listFields"][] = "name";
$tdatafreee_employees_details[".listFields"][] = "birth_date";
$tdatafreee_employees_details[".listFields"][] = "user_id";
$tdatafreee_employees_details[".listFields"][] = "retire_date";

$tdatafreee_employees_details[".hideMobileList"] = array();


$tdatafreee_employees_details[".viewFields"] = array();

$tdatafreee_employees_details[".addFields"] = array();

$tdatafreee_employees_details[".masterListFields"] = array();
$tdatafreee_employees_details[".masterListFields"][] = "employee_id";
$tdatafreee_employees_details[".masterListFields"][] = "name";
$tdatafreee_employees_details[".masterListFields"][] = "created_at";
$tdatafreee_employees_details[".masterListFields"][] = "updated_at";
$tdatafreee_employees_details[".masterListFields"][] = "birth_date";
$tdatafreee_employees_details[".masterListFields"][] = "user_id";
$tdatafreee_employees_details[".masterListFields"][] = "retire_date";

$tdatafreee_employees_details[".inlineAddFields"] = array();

$tdatafreee_employees_details[".editFields"] = array();

$tdatafreee_employees_details[".inlineEditFields"] = array();
$tdatafreee_employees_details[".inlineEditFields"][] = "user_id";
$tdatafreee_employees_details[".inlineEditFields"][] = "retire_date";

$tdatafreee_employees_details[".updateSelectedFields"] = array();


$tdatafreee_employees_details[".exportFields"] = array();
$tdatafreee_employees_details[".exportFields"][] = "employee_id";
$tdatafreee_employees_details[".exportFields"][] = "name";
$tdatafreee_employees_details[".exportFields"][] = "birth_date";
$tdatafreee_employees_details[".exportFields"][] = "user_id";
$tdatafreee_employees_details[".exportFields"][] = "retire_date";

$tdatafreee_employees_details[".importFields"] = array();
$tdatafreee_employees_details[".importFields"][] = "user_id";
$tdatafreee_employees_details[".importFields"][] = "retire_date";

$tdatafreee_employees_details[".printFields"] = array();

//	employee_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "employee_id";
	$fdata["GoodName"] = "employee_id";
	$fdata["ownerTable"] = "freee_employees_details";
	$fdata["Label"] = GetFieldLabel("freee_employees_details","employee_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "employee_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`employee_id`";

	
	
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




	$tdatafreee_employees_details["employee_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "freee_employees_details";
	$fdata["Label"] = GetFieldLabel("freee_employees_details","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatafreee_employees_details["name"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_employees_details";
	$fdata["Label"] = GetFieldLabel("freee_employees_details","created_at");
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








	$tdatafreee_employees_details["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_employees_details";
	$fdata["Label"] = GetFieldLabel("freee_employees_details","updated_at");
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








	$tdatafreee_employees_details["updated_at"] = $fdata;
//	birth_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "birth_date";
	$fdata["GoodName"] = "birth_date";
	$fdata["ownerTable"] = "freee_employees_details";
	$fdata["Label"] = GetFieldLabel("freee_employees_details","birth_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "birth_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`birth_date`";

	
	
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




	$tdatafreee_employees_details["birth_date"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "freee_employees_details";
	$fdata["Label"] = GetFieldLabel("freee_employees_details","user_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_id`";

	
	
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




	$tdatafreee_employees_details["user_id"] = $fdata;
//	retire_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "retire_date";
	$fdata["GoodName"] = "retire_date";
	$fdata["ownerTable"] = "freee_employees_details";
	$fdata["Label"] = GetFieldLabel("freee_employees_details","retire_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "retire_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`retire_date`";

	
	
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




	$tdatafreee_employees_details["retire_date"] = $fdata;


$tables_data["freee_employees_details"]=&$tdatafreee_employees_details;
$field_labels["freee_employees_details"] = &$fieldLabelsfreee_employees_details;
$fieldToolTips["freee_employees_details"] = &$fieldToolTipsfreee_employees_details;
$placeHolders["freee_employees_details"] = &$placeHoldersfreee_employees_details;
$page_titles["freee_employees_details"] = &$pageTitlesfreee_employees_details;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_employees_details"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_employees_details"] = array();


	
				$strOriginalDetailsTable="freee_work_record_summaries";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="freee_work_record_summaries";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "freee_work_record_summaries";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["freee_employees_details"][0] = $masterParams;
				$masterTablesData["freee_employees_details"][0]["masterKeys"] = array();
	$masterTablesData["freee_employees_details"][0]["masterKeys"][]="employee_id";
				$masterTablesData["freee_employees_details"][0]["detailKeys"] = array();
	$masterTablesData["freee_employees_details"][0]["detailKeys"][]="employee_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_employees_details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`employee_id`,  	`name`,  	`created_at`,  	`updated_at`,  	`birth_date`,  	`user_id`,  	`retire_date`";
$proto0["m_strFrom"] = "FROM `freee_employees_details`";
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
	"m_strName" => "employee_id",
	"m_strTable" => "freee_employees_details",
	"m_srcTableName" => "freee_employees_details"
));

$proto6["m_sql"] = "`employee_id`";
$proto6["m_srcTableName"] = "freee_employees_details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "freee_employees_details",
	"m_srcTableName" => "freee_employees_details"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "freee_employees_details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_employees_details",
	"m_srcTableName" => "freee_employees_details"
));

$proto10["m_sql"] = "`created_at`";
$proto10["m_srcTableName"] = "freee_employees_details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_employees_details",
	"m_srcTableName" => "freee_employees_details"
));

$proto12["m_sql"] = "`updated_at`";
$proto12["m_srcTableName"] = "freee_employees_details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "birth_date",
	"m_strTable" => "freee_employees_details",
	"m_srcTableName" => "freee_employees_details"
));

$proto14["m_sql"] = "`birth_date`";
$proto14["m_srcTableName"] = "freee_employees_details";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "freee_employees_details",
	"m_srcTableName" => "freee_employees_details"
));

$proto16["m_sql"] = "`user_id`";
$proto16["m_srcTableName"] = "freee_employees_details";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "retire_date",
	"m_strTable" => "freee_employees_details",
	"m_srcTableName" => "freee_employees_details"
));

$proto18["m_sql"] = "`retire_date`";
$proto18["m_srcTableName"] = "freee_employees_details";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "freee_employees_details";
$proto21["m_srcTableName"] = "freee_employees_details";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "employee_id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "created_at";
$proto21["m_columns"][] = "updated_at";
$proto21["m_columns"][] = "birth_date";
$proto21["m_columns"][] = "user_id";
$proto21["m_columns"][] = "retire_date";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`freee_employees_details`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "freee_employees_details";
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
$proto0["m_srcTableName"]="freee_employees_details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_employees_details = createSqlQuery_freee_employees_details();


	
		;

							

$tdatafreee_employees_details[".sqlquery"] = $queryData_freee_employees_details;

$tableEvents["freee_employees_details"] = new eventsBase;
$tdatafreee_employees_details[".hasEvents"] = false;

?>