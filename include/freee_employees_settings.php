<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_employees = array();
	$tdatafreee_employees[".truncateText"] = true;
	$tdatafreee_employees[".NumberOfChars"] = 80;
	$tdatafreee_employees[".ShortName"] = "freee_employees";
	$tdatafreee_employees[".OwnerID"] = "";
	$tdatafreee_employees[".OriginalTable"] = "freee_employees";

//	field labels
$fieldLabelsfreee_employees = array();
$fieldToolTipsfreee_employees = array();
$pageTitlesfreee_employees = array();
$placeHoldersfreee_employees = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_employees["Japanese"] = array();
	$fieldToolTipsfreee_employees["Japanese"] = array();
	$placeHoldersfreee_employees["Japanese"] = array();
	$pageTitlesfreee_employees["Japanese"] = array();
	$fieldLabelsfreee_employees["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_employees["Japanese"]["id"] = "";
	$placeHoldersfreee_employees["Japanese"]["id"] = "";
	$fieldLabelsfreee_employees["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_employees["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_employees["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_employees["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_employees["Japanese"]["created_at"] = "";
	$placeHoldersfreee_employees["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_employees["Japanese"]["employee_id"] = "Employee Id";
	$fieldToolTipsfreee_employees["Japanese"]["employee_id"] = "";
	$placeHoldersfreee_employees["Japanese"]["employee_id"] = "";
	$fieldLabelsfreee_employees["Japanese"]["display_name"] = "Display Name";
	$fieldToolTipsfreee_employees["Japanese"]["display_name"] = "";
	$placeHoldersfreee_employees["Japanese"]["display_name"] = "";
	$fieldLabelsfreee_employees["Japanese"]["entry_date"] = "Entry Date";
	$fieldToolTipsfreee_employees["Japanese"]["entry_date"] = "";
	$placeHoldersfreee_employees["Japanese"]["entry_date"] = "";
	$fieldLabelsfreee_employees["Japanese"]["retire_date"] = "Retire Date";
	$fieldToolTipsfreee_employees["Japanese"]["retire_date"] = "";
	$placeHoldersfreee_employees["Japanese"]["retire_date"] = "";
	$fieldLabelsfreee_employees["Japanese"]["get_month"] = "Get Month";
	$fieldToolTipsfreee_employees["Japanese"]["get_month"] = "";
	$placeHoldersfreee_employees["Japanese"]["get_month"] = "";
	$fieldLabelsfreee_employees["Japanese"]["birth_date"] = "Birth Date";
	$fieldToolTipsfreee_employees["Japanese"]["birth_date"] = "";
	$placeHoldersfreee_employees["Japanese"]["birth_date"] = "";
	if (count($fieldToolTipsfreee_employees["Japanese"]))
		$tdatafreee_employees[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_employees[""] = array();
	$fieldToolTipsfreee_employees[""] = array();
	$placeHoldersfreee_employees[""] = array();
	$pageTitlesfreee_employees[""] = array();
	$fieldLabelsfreee_employees[""]["id"] = "Id";
	$fieldToolTipsfreee_employees[""]["id"] = "";
	$placeHoldersfreee_employees[""]["id"] = "";
	$fieldLabelsfreee_employees[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_employees[""]["updated_at"] = "";
	$placeHoldersfreee_employees[""]["updated_at"] = "";
	$fieldLabelsfreee_employees[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_employees[""]["created_at"] = "";
	$placeHoldersfreee_employees[""]["created_at"] = "";
	$fieldLabelsfreee_employees[""]["employee_id"] = "Employee Id";
	$fieldToolTipsfreee_employees[""]["employee_id"] = "";
	$placeHoldersfreee_employees[""]["employee_id"] = "";
	$fieldLabelsfreee_employees[""]["display_name"] = "Display Name";
	$fieldToolTipsfreee_employees[""]["display_name"] = "";
	$placeHoldersfreee_employees[""]["display_name"] = "";
	$fieldLabelsfreee_employees[""]["entry_date"] = "Entry Date";
	$fieldToolTipsfreee_employees[""]["entry_date"] = "";
	$placeHoldersfreee_employees[""]["entry_date"] = "";
	$fieldLabelsfreee_employees[""]["retire_date"] = "Retire Date";
	$fieldToolTipsfreee_employees[""]["retire_date"] = "";
	$placeHoldersfreee_employees[""]["retire_date"] = "";
	$fieldLabelsfreee_employees[""]["get_month"] = "Get Month";
	$fieldToolTipsfreee_employees[""]["get_month"] = "";
	$placeHoldersfreee_employees[""]["get_month"] = "";
	$fieldLabelsfreee_employees[""]["birth_date"] = "Birth Date";
	$fieldToolTipsfreee_employees[""]["birth_date"] = "";
	$placeHoldersfreee_employees[""]["birth_date"] = "";
	if (count($fieldToolTipsfreee_employees[""]))
		$tdatafreee_employees[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_employees["English"] = array();
	$fieldToolTipsfreee_employees["English"] = array();
	$placeHoldersfreee_employees["English"] = array();
	$pageTitlesfreee_employees["English"] = array();
	$fieldLabelsfreee_employees["English"]["id"] = "Id";
	$fieldToolTipsfreee_employees["English"]["id"] = "";
	$placeHoldersfreee_employees["English"]["id"] = "";
	$fieldLabelsfreee_employees["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_employees["English"]["updated_at"] = "";
	$placeHoldersfreee_employees["English"]["updated_at"] = "";
	$fieldLabelsfreee_employees["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_employees["English"]["created_at"] = "";
	$placeHoldersfreee_employees["English"]["created_at"] = "";
	$fieldLabelsfreee_employees["English"]["employee_id"] = "Employee Id";
	$fieldToolTipsfreee_employees["English"]["employee_id"] = "";
	$placeHoldersfreee_employees["English"]["employee_id"] = "";
	$fieldLabelsfreee_employees["English"]["display_name"] = "Display Name";
	$fieldToolTipsfreee_employees["English"]["display_name"] = "";
	$placeHoldersfreee_employees["English"]["display_name"] = "";
	$fieldLabelsfreee_employees["English"]["entry_date"] = "Entry Date";
	$fieldToolTipsfreee_employees["English"]["entry_date"] = "";
	$placeHoldersfreee_employees["English"]["entry_date"] = "";
	$fieldLabelsfreee_employees["English"]["retire_date"] = "Retire Date";
	$fieldToolTipsfreee_employees["English"]["retire_date"] = "";
	$placeHoldersfreee_employees["English"]["retire_date"] = "";
	$fieldLabelsfreee_employees["English"]["get_month"] = "Get Month";
	$fieldToolTipsfreee_employees["English"]["get_month"] = "";
	$placeHoldersfreee_employees["English"]["get_month"] = "";
	$fieldLabelsfreee_employees["English"]["birth_date"] = "Birth Date";
	$fieldToolTipsfreee_employees["English"]["birth_date"] = "";
	$placeHoldersfreee_employees["English"]["birth_date"] = "";
	if (count($fieldToolTipsfreee_employees["English"]))
		$tdatafreee_employees[".isUseToolTips"] = true;
}


	$tdatafreee_employees[".NCSearch"] = true;



$tdatafreee_employees[".shortTableName"] = "freee_employees";
$tdatafreee_employees[".nSecOptions"] = 0;
$tdatafreee_employees[".recsPerRowPrint"] = 1;
$tdatafreee_employees[".mainTableOwnerID"] = "";
$tdatafreee_employees[".moveNext"] = 1;
$tdatafreee_employees[".entityType"] = 0;

$tdatafreee_employees[".strOriginalTableName"] = "freee_employees";

	



$tdatafreee_employees[".showAddInPopup"] = false;

$tdatafreee_employees[".showEditInPopup"] = false;

$tdatafreee_employees[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_employees[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_employees[".fieldsForRegister"] = array();

$tdatafreee_employees[".listAjax"] = false;

	$tdatafreee_employees[".audit"] = false;

	$tdatafreee_employees[".locking"] = false;



$tdatafreee_employees[".list"] = true;



$tdatafreee_employees[".reorderRecordsByHeader"] = true;





$tdatafreee_employees[".exportTo"] = true;



$tdatafreee_employees[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_employees[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_employees[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_employees[".searchSaving"] = false;
//

$tdatafreee_employees[".showSearchPanel"] = true;
		$tdatafreee_employees[".flexibleSearch"] = true;

$tdatafreee_employees[".isUseAjaxSuggest"] = true;

$tdatafreee_employees[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_employees[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_employees[".buttonsAdded"] = false;

$tdatafreee_employees[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_employees[".isUseTimeForSearch"] = false;





$tdatafreee_employees[".allSearchFields"] = array();
$tdatafreee_employees[".filterFields"] = array();
$tdatafreee_employees[".requiredSearchFields"] = array();

$tdatafreee_employees[".allSearchFields"][] = "id";
	$tdatafreee_employees[".allSearchFields"][] = "employee_id";
	$tdatafreee_employees[".allSearchFields"][] = "display_name";
	$tdatafreee_employees[".allSearchFields"][] = "entry_date";
	$tdatafreee_employees[".allSearchFields"][] = "retire_date";
	$tdatafreee_employees[".allSearchFields"][] = "get_month";
	$tdatafreee_employees[".allSearchFields"][] = "birth_date";
	

$tdatafreee_employees[".googleLikeFields"] = array();
$tdatafreee_employees[".googleLikeFields"][] = "id";
$tdatafreee_employees[".googleLikeFields"][] = "updated_at";
$tdatafreee_employees[".googleLikeFields"][] = "created_at";
$tdatafreee_employees[".googleLikeFields"][] = "employee_id";
$tdatafreee_employees[".googleLikeFields"][] = "display_name";
$tdatafreee_employees[".googleLikeFields"][] = "entry_date";
$tdatafreee_employees[".googleLikeFields"][] = "retire_date";
$tdatafreee_employees[".googleLikeFields"][] = "get_month";
$tdatafreee_employees[".googleLikeFields"][] = "birth_date";


$tdatafreee_employees[".advSearchFields"] = array();
$tdatafreee_employees[".advSearchFields"][] = "id";
$tdatafreee_employees[".advSearchFields"][] = "employee_id";
$tdatafreee_employees[".advSearchFields"][] = "display_name";
$tdatafreee_employees[".advSearchFields"][] = "entry_date";
$tdatafreee_employees[".advSearchFields"][] = "retire_date";
$tdatafreee_employees[".advSearchFields"][] = "get_month";
$tdatafreee_employees[".advSearchFields"][] = "birth_date";

$tdatafreee_employees[".tableType"] = "list";

$tdatafreee_employees[".printerPageOrientation"] = 0;
$tdatafreee_employees[".nPrinterPageScale"] = 100;

$tdatafreee_employees[".nPrinterSplitRecords"] = 40;

$tdatafreee_employees[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_employees[".geocodingEnabled"] = false;





$tdatafreee_employees[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_employees[".pageSize"] = 100;

$tdatafreee_employees[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_employees[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_employees[".orderindexes"] = array();

$tdatafreee_employees[".sqlHead"] = "SELECT `id`,  	`updated_at`,  	`created_at`,  	`employee_id`,  	`display_name`,  	`entry_date`,  	`retire_date`,  	`get_month`,  	`birth_date`";
$tdatafreee_employees[".sqlFrom"] = "FROM `freee_employees`";
$tdatafreee_employees[".sqlWhereExpr"] = "";
$tdatafreee_employees[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_employees[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_employees[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_employees[".highlightSearchResults"] = true;

$tableKeysfreee_employees = array();
$tableKeysfreee_employees[] = "id";
$tdatafreee_employees[".Keys"] = $tableKeysfreee_employees;

$tdatafreee_employees[".listFields"] = array();
$tdatafreee_employees[".listFields"][] = "id";
$tdatafreee_employees[".listFields"][] = "employee_id";
$tdatafreee_employees[".listFields"][] = "display_name";
$tdatafreee_employees[".listFields"][] = "entry_date";
$tdatafreee_employees[".listFields"][] = "retire_date";
$tdatafreee_employees[".listFields"][] = "get_month";
$tdatafreee_employees[".listFields"][] = "birth_date";

$tdatafreee_employees[".hideMobileList"] = array();


$tdatafreee_employees[".viewFields"] = array();

$tdatafreee_employees[".addFields"] = array();

$tdatafreee_employees[".masterListFields"] = array();
$tdatafreee_employees[".masterListFields"][] = "id";
$tdatafreee_employees[".masterListFields"][] = "updated_at";
$tdatafreee_employees[".masterListFields"][] = "created_at";
$tdatafreee_employees[".masterListFields"][] = "employee_id";
$tdatafreee_employees[".masterListFields"][] = "display_name";
$tdatafreee_employees[".masterListFields"][] = "entry_date";
$tdatafreee_employees[".masterListFields"][] = "retire_date";
$tdatafreee_employees[".masterListFields"][] = "get_month";
$tdatafreee_employees[".masterListFields"][] = "birth_date";

$tdatafreee_employees[".inlineAddFields"] = array();

$tdatafreee_employees[".editFields"] = array();

$tdatafreee_employees[".inlineEditFields"] = array();

$tdatafreee_employees[".updateSelectedFields"] = array();


$tdatafreee_employees[".exportFields"] = array();
$tdatafreee_employees[".exportFields"][] = "id";
$tdatafreee_employees[".exportFields"][] = "employee_id";
$tdatafreee_employees[".exportFields"][] = "display_name";
$tdatafreee_employees[".exportFields"][] = "entry_date";
$tdatafreee_employees[".exportFields"][] = "retire_date";
$tdatafreee_employees[".exportFields"][] = "get_month";
$tdatafreee_employees[".exportFields"][] = "birth_date";

$tdatafreee_employees[".importFields"] = array();

$tdatafreee_employees[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_employees";
	$fdata["Label"] = GetFieldLabel("freee_employees","id");
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




	$tdatafreee_employees["id"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_employees";
	$fdata["Label"] = GetFieldLabel("freee_employees","updated_at");
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








	$tdatafreee_employees["updated_at"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_employees";
	$fdata["Label"] = GetFieldLabel("freee_employees","created_at");
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








	$tdatafreee_employees["created_at"] = $fdata;
//	employee_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "employee_id";
	$fdata["GoodName"] = "employee_id";
	$fdata["ownerTable"] = "freee_employees";
	$fdata["Label"] = GetFieldLabel("freee_employees","employee_id");
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




	$tdatafreee_employees["employee_id"] = $fdata;
//	display_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "display_name";
	$fdata["GoodName"] = "display_name";
	$fdata["ownerTable"] = "freee_employees";
	$fdata["Label"] = GetFieldLabel("freee_employees","display_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "display_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`display_name`";

	
	
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




	$tdatafreee_employees["display_name"] = $fdata;
//	entry_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "entry_date";
	$fdata["GoodName"] = "entry_date";
	$fdata["ownerTable"] = "freee_employees";
	$fdata["Label"] = GetFieldLabel("freee_employees","entry_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "entry_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`entry_date`";

	
	
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




	$tdatafreee_employees["entry_date"] = $fdata;
//	retire_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "retire_date";
	$fdata["GoodName"] = "retire_date";
	$fdata["ownerTable"] = "freee_employees";
	$fdata["Label"] = GetFieldLabel("freee_employees","retire_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatafreee_employees["retire_date"] = $fdata;
//	get_month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "get_month";
	$fdata["GoodName"] = "get_month";
	$fdata["ownerTable"] = "freee_employees";
	$fdata["Label"] = GetFieldLabel("freee_employees","get_month");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "get_month";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`get_month`";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatafreee_employees["get_month"] = $fdata;
//	birth_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "birth_date";
	$fdata["GoodName"] = "birth_date";
	$fdata["ownerTable"] = "freee_employees";
	$fdata["Label"] = GetFieldLabel("freee_employees","birth_date");
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




	$tdatafreee_employees["birth_date"] = $fdata;


$tables_data["freee_employees"]=&$tdatafreee_employees;
$field_labels["freee_employees"] = &$fieldLabelsfreee_employees;
$fieldToolTips["freee_employees"] = &$fieldToolTipsfreee_employees;
$placeHolders["freee_employees"] = &$placeHoldersfreee_employees;
$page_titles["freee_employees"] = &$pageTitlesfreee_employees;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_employees"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_employees"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_employees()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`updated_at`,  	`created_at`,  	`employee_id`,  	`display_name`,  	`entry_date`,  	`retire_date`,  	`get_month`,  	`birth_date`";
$proto0["m_strFrom"] = "FROM `freee_employees`";
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
	"m_strTable" => "freee_employees",
	"m_srcTableName" => "freee_employees"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_employees";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_employees",
	"m_srcTableName" => "freee_employees"
));

$proto8["m_sql"] = "`updated_at`";
$proto8["m_srcTableName"] = "freee_employees";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_employees",
	"m_srcTableName" => "freee_employees"
));

$proto10["m_sql"] = "`created_at`";
$proto10["m_srcTableName"] = "freee_employees";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "employee_id",
	"m_strTable" => "freee_employees",
	"m_srcTableName" => "freee_employees"
));

$proto12["m_sql"] = "`employee_id`";
$proto12["m_srcTableName"] = "freee_employees";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "display_name",
	"m_strTable" => "freee_employees",
	"m_srcTableName" => "freee_employees"
));

$proto14["m_sql"] = "`display_name`";
$proto14["m_srcTableName"] = "freee_employees";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "entry_date",
	"m_strTable" => "freee_employees",
	"m_srcTableName" => "freee_employees"
));

$proto16["m_sql"] = "`entry_date`";
$proto16["m_srcTableName"] = "freee_employees";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "retire_date",
	"m_strTable" => "freee_employees",
	"m_srcTableName" => "freee_employees"
));

$proto18["m_sql"] = "`retire_date`";
$proto18["m_srcTableName"] = "freee_employees";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "get_month",
	"m_strTable" => "freee_employees",
	"m_srcTableName" => "freee_employees"
));

$proto20["m_sql"] = "`get_month`";
$proto20["m_srcTableName"] = "freee_employees";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "birth_date",
	"m_strTable" => "freee_employees",
	"m_srcTableName" => "freee_employees"
));

$proto22["m_sql"] = "`birth_date`";
$proto22["m_srcTableName"] = "freee_employees";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "freee_employees";
$proto25["m_srcTableName"] = "freee_employees";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "updated_at";
$proto25["m_columns"][] = "created_at";
$proto25["m_columns"][] = "employee_id";
$proto25["m_columns"][] = "display_name";
$proto25["m_columns"][] = "entry_date";
$proto25["m_columns"][] = "retire_date";
$proto25["m_columns"][] = "get_month";
$proto25["m_columns"][] = "birth_date";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`freee_employees`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "freee_employees";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="freee_employees";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_employees = createSqlQuery_freee_employees();


	
		;

									

$tdatafreee_employees[".sqlquery"] = $queryData_freee_employees;

$tableEvents["freee_employees"] = new eventsBase;
$tdatafreee_employees[".hasEvents"] = false;

?>