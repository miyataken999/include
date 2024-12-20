<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_items = array();
	$tdatafreee_items[".truncateText"] = true;
	$tdatafreee_items[".NumberOfChars"] = 80;
	$tdatafreee_items[".ShortName"] = "freee_items";
	$tdatafreee_items[".OwnerID"] = "";
	$tdatafreee_items[".OriginalTable"] = "freee_items";

//	field labels
$fieldLabelsfreee_items = array();
$fieldToolTipsfreee_items = array();
$pageTitlesfreee_items = array();
$placeHoldersfreee_items = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_items["Japanese"] = array();
	$fieldToolTipsfreee_items["Japanese"] = array();
	$placeHoldersfreee_items["Japanese"] = array();
	$pageTitlesfreee_items["Japanese"] = array();
	$fieldLabelsfreee_items["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_items["Japanese"]["id"] = "";
	$placeHoldersfreee_items["Japanese"]["id"] = "";
	$fieldLabelsfreee_items["Japanese"]["company_id"] = "Company Id";
	$fieldToolTipsfreee_items["Japanese"]["company_id"] = "";
	$placeHoldersfreee_items["Japanese"]["company_id"] = "";
	$fieldLabelsfreee_items["Japanese"]["name"] = "Name";
	$fieldToolTipsfreee_items["Japanese"]["name"] = "";
	$placeHoldersfreee_items["Japanese"]["name"] = "";
	$fieldLabelsfreee_items["Japanese"]["update_date"] = "Update Date";
	$fieldToolTipsfreee_items["Japanese"]["update_date"] = "";
	$placeHoldersfreee_items["Japanese"]["update_date"] = "";
	$fieldLabelsfreee_items["Japanese"]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee_items["Japanese"]["shortcut1"] = "";
	$placeHoldersfreee_items["Japanese"]["shortcut1"] = "";
	$fieldLabelsfreee_items["Japanese"]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee_items["Japanese"]["shortcut2"] = "";
	$placeHoldersfreee_items["Japanese"]["shortcut2"] = "";
	$fieldLabelsfreee_items["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_items["Japanese"]["created_at"] = "";
	$placeHoldersfreee_items["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_items["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsfreee_items["Japanese"]["created_by"] = "";
	$placeHoldersfreee_items["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_items["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_items["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_items["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_items["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_items["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_items["Japanese"]["updated_by"] = "";
	$fieldLabelsfreee_items["Japanese"]["available"] = "Available";
	$fieldToolTipsfreee_items["Japanese"]["available"] = "";
	$placeHoldersfreee_items["Japanese"]["available"] = "";
	if (count($fieldToolTipsfreee_items["Japanese"]))
		$tdatafreee_items[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_items[""] = array();
	$fieldToolTipsfreee_items[""] = array();
	$placeHoldersfreee_items[""] = array();
	$pageTitlesfreee_items[""] = array();
	$fieldLabelsfreee_items[""]["id"] = "Id";
	$fieldToolTipsfreee_items[""]["id"] = "";
	$placeHoldersfreee_items[""]["id"] = "";
	$fieldLabelsfreee_items[""]["company_id"] = "Company Id";
	$fieldToolTipsfreee_items[""]["company_id"] = "";
	$placeHoldersfreee_items[""]["company_id"] = "";
	$fieldLabelsfreee_items[""]["name"] = "Name";
	$fieldToolTipsfreee_items[""]["name"] = "";
	$placeHoldersfreee_items[""]["name"] = "";
	$fieldLabelsfreee_items[""]["update_date"] = "Update Date";
	$fieldToolTipsfreee_items[""]["update_date"] = "";
	$placeHoldersfreee_items[""]["update_date"] = "";
	$fieldLabelsfreee_items[""]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee_items[""]["shortcut1"] = "";
	$placeHoldersfreee_items[""]["shortcut1"] = "";
	$fieldLabelsfreee_items[""]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee_items[""]["shortcut2"] = "";
	$placeHoldersfreee_items[""]["shortcut2"] = "";
	$fieldLabelsfreee_items[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_items[""]["created_at"] = "";
	$placeHoldersfreee_items[""]["created_at"] = "";
	$fieldLabelsfreee_items[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_items[""]["created_by"] = "";
	$placeHoldersfreee_items[""]["created_by"] = "";
	$fieldLabelsfreee_items[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_items[""]["updated_at"] = "";
	$placeHoldersfreee_items[""]["updated_at"] = "";
	$fieldLabelsfreee_items[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_items[""]["updated_by"] = "";
	$placeHoldersfreee_items[""]["updated_by"] = "";
	$fieldLabelsfreee_items[""]["available"] = "Available";
	$fieldToolTipsfreee_items[""]["available"] = "";
	$placeHoldersfreee_items[""]["available"] = "";
	if (count($fieldToolTipsfreee_items[""]))
		$tdatafreee_items[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_items["English"] = array();
	$fieldToolTipsfreee_items["English"] = array();
	$placeHoldersfreee_items["English"] = array();
	$pageTitlesfreee_items["English"] = array();
	$fieldLabelsfreee_items["English"]["id"] = "Id";
	$fieldToolTipsfreee_items["English"]["id"] = "";
	$placeHoldersfreee_items["English"]["id"] = "";
	$fieldLabelsfreee_items["English"]["company_id"] = "Company Id";
	$fieldToolTipsfreee_items["English"]["company_id"] = "";
	$placeHoldersfreee_items["English"]["company_id"] = "";
	$fieldLabelsfreee_items["English"]["name"] = "Name";
	$fieldToolTipsfreee_items["English"]["name"] = "";
	$placeHoldersfreee_items["English"]["name"] = "";
	$fieldLabelsfreee_items["English"]["update_date"] = "Update Date";
	$fieldToolTipsfreee_items["English"]["update_date"] = "";
	$placeHoldersfreee_items["English"]["update_date"] = "";
	$fieldLabelsfreee_items["English"]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee_items["English"]["shortcut1"] = "";
	$placeHoldersfreee_items["English"]["shortcut1"] = "";
	$fieldLabelsfreee_items["English"]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee_items["English"]["shortcut2"] = "";
	$placeHoldersfreee_items["English"]["shortcut2"] = "";
	$fieldLabelsfreee_items["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_items["English"]["created_at"] = "";
	$placeHoldersfreee_items["English"]["created_at"] = "";
	$fieldLabelsfreee_items["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_items["English"]["created_by"] = "";
	$placeHoldersfreee_items["English"]["created_by"] = "";
	$fieldLabelsfreee_items["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_items["English"]["updated_at"] = "";
	$placeHoldersfreee_items["English"]["updated_at"] = "";
	$fieldLabelsfreee_items["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_items["English"]["updated_by"] = "";
	$placeHoldersfreee_items["English"]["updated_by"] = "";
	$fieldLabelsfreee_items["English"]["available"] = "Available";
	$fieldToolTipsfreee_items["English"]["available"] = "";
	$placeHoldersfreee_items["English"]["available"] = "";
	if (count($fieldToolTipsfreee_items["English"]))
		$tdatafreee_items[".isUseToolTips"] = true;
}


	$tdatafreee_items[".NCSearch"] = true;



$tdatafreee_items[".shortTableName"] = "freee_items";
$tdatafreee_items[".nSecOptions"] = 0;
$tdatafreee_items[".recsPerRowPrint"] = 1;
$tdatafreee_items[".mainTableOwnerID"] = "";
$tdatafreee_items[".moveNext"] = 1;
$tdatafreee_items[".entityType"] = 0;

$tdatafreee_items[".strOriginalTableName"] = "freee_items";

	



$tdatafreee_items[".showAddInPopup"] = false;

$tdatafreee_items[".showEditInPopup"] = false;

$tdatafreee_items[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_items[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_items[".fieldsForRegister"] = array();

$tdatafreee_items[".listAjax"] = false;

	$tdatafreee_items[".audit"] = false;

	$tdatafreee_items[".locking"] = false;



$tdatafreee_items[".list"] = true;



$tdatafreee_items[".reorderRecordsByHeader"] = true;





$tdatafreee_items[".exportTo"] = true;



$tdatafreee_items[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_items[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_items[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_items[".searchSaving"] = false;
//

$tdatafreee_items[".showSearchPanel"] = true;
		$tdatafreee_items[".flexibleSearch"] = true;

$tdatafreee_items[".isUseAjaxSuggest"] = true;

$tdatafreee_items[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_items[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_items[".buttonsAdded"] = false;

$tdatafreee_items[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_items[".isUseTimeForSearch"] = false;





$tdatafreee_items[".allSearchFields"] = array();
$tdatafreee_items[".filterFields"] = array();
$tdatafreee_items[".requiredSearchFields"] = array();

$tdatafreee_items[".allSearchFields"][] = "id";
	$tdatafreee_items[".allSearchFields"][] = "company_id";
	$tdatafreee_items[".allSearchFields"][] = "name";
	$tdatafreee_items[".allSearchFields"][] = "update_date";
	$tdatafreee_items[".allSearchFields"][] = "shortcut1";
	$tdatafreee_items[".allSearchFields"][] = "shortcut2";
	$tdatafreee_items[".allSearchFields"][] = "created_at";
	$tdatafreee_items[".allSearchFields"][] = "created_by";
	$tdatafreee_items[".allSearchFields"][] = "updated_at";
	$tdatafreee_items[".allSearchFields"][] = "updated_by";
	$tdatafreee_items[".allSearchFields"][] = "available";
	

$tdatafreee_items[".googleLikeFields"] = array();
$tdatafreee_items[".googleLikeFields"][] = "id";
$tdatafreee_items[".googleLikeFields"][] = "company_id";
$tdatafreee_items[".googleLikeFields"][] = "name";
$tdatafreee_items[".googleLikeFields"][] = "update_date";
$tdatafreee_items[".googleLikeFields"][] = "shortcut1";
$tdatafreee_items[".googleLikeFields"][] = "shortcut2";
$tdatafreee_items[".googleLikeFields"][] = "created_at";
$tdatafreee_items[".googleLikeFields"][] = "created_by";
$tdatafreee_items[".googleLikeFields"][] = "updated_at";
$tdatafreee_items[".googleLikeFields"][] = "updated_by";
$tdatafreee_items[".googleLikeFields"][] = "available";


$tdatafreee_items[".advSearchFields"] = array();
$tdatafreee_items[".advSearchFields"][] = "id";
$tdatafreee_items[".advSearchFields"][] = "company_id";
$tdatafreee_items[".advSearchFields"][] = "name";
$tdatafreee_items[".advSearchFields"][] = "update_date";
$tdatafreee_items[".advSearchFields"][] = "shortcut1";
$tdatafreee_items[".advSearchFields"][] = "shortcut2";
$tdatafreee_items[".advSearchFields"][] = "created_at";
$tdatafreee_items[".advSearchFields"][] = "created_by";
$tdatafreee_items[".advSearchFields"][] = "updated_at";
$tdatafreee_items[".advSearchFields"][] = "updated_by";
$tdatafreee_items[".advSearchFields"][] = "available";

$tdatafreee_items[".tableType"] = "list";

$tdatafreee_items[".printerPageOrientation"] = 0;
$tdatafreee_items[".nPrinterPageScale"] = 100;

$tdatafreee_items[".nPrinterSplitRecords"] = 40;

$tdatafreee_items[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_items[".geocodingEnabled"] = false;





$tdatafreee_items[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_items[".pageSize"] = 100;

$tdatafreee_items[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_items[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_items[".orderindexes"] = array();

$tdatafreee_items[".sqlHead"] = "SELECT `id`,  	`company_id`,  	`name`,  	`update_date`,  	`shortcut1`,  	`shortcut2`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`available`";
$tdatafreee_items[".sqlFrom"] = "FROM `freee_items`";
$tdatafreee_items[".sqlWhereExpr"] = "";
$tdatafreee_items[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_items[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_items[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_items[".highlightSearchResults"] = true;

$tableKeysfreee_items = array();
$tableKeysfreee_items[] = "id";
$tdatafreee_items[".Keys"] = $tableKeysfreee_items;

$tdatafreee_items[".listFields"] = array();
$tdatafreee_items[".listFields"][] = "id";
$tdatafreee_items[".listFields"][] = "company_id";
$tdatafreee_items[".listFields"][] = "name";
$tdatafreee_items[".listFields"][] = "update_date";
$tdatafreee_items[".listFields"][] = "shortcut1";
$tdatafreee_items[".listFields"][] = "shortcut2";
$tdatafreee_items[".listFields"][] = "created_at";
$tdatafreee_items[".listFields"][] = "created_by";
$tdatafreee_items[".listFields"][] = "updated_at";
$tdatafreee_items[".listFields"][] = "updated_by";
$tdatafreee_items[".listFields"][] = "available";

$tdatafreee_items[".hideMobileList"] = array();


$tdatafreee_items[".viewFields"] = array();

$tdatafreee_items[".addFields"] = array();

$tdatafreee_items[".masterListFields"] = array();
$tdatafreee_items[".masterListFields"][] = "id";
$tdatafreee_items[".masterListFields"][] = "company_id";
$tdatafreee_items[".masterListFields"][] = "name";
$tdatafreee_items[".masterListFields"][] = "update_date";
$tdatafreee_items[".masterListFields"][] = "shortcut1";
$tdatafreee_items[".masterListFields"][] = "shortcut2";
$tdatafreee_items[".masterListFields"][] = "created_at";
$tdatafreee_items[".masterListFields"][] = "created_by";
$tdatafreee_items[".masterListFields"][] = "updated_at";
$tdatafreee_items[".masterListFields"][] = "updated_by";
$tdatafreee_items[".masterListFields"][] = "available";

$tdatafreee_items[".inlineAddFields"] = array();

$tdatafreee_items[".editFields"] = array();

$tdatafreee_items[".inlineEditFields"] = array();

$tdatafreee_items[".updateSelectedFields"] = array();


$tdatafreee_items[".exportFields"] = array();
$tdatafreee_items[".exportFields"][] = "id";
$tdatafreee_items[".exportFields"][] = "company_id";
$tdatafreee_items[".exportFields"][] = "name";
$tdatafreee_items[".exportFields"][] = "update_date";
$tdatafreee_items[".exportFields"][] = "shortcut1";
$tdatafreee_items[".exportFields"][] = "shortcut2";
$tdatafreee_items[".exportFields"][] = "created_at";
$tdatafreee_items[".exportFields"][] = "created_by";
$tdatafreee_items[".exportFields"][] = "updated_at";
$tdatafreee_items[".exportFields"][] = "updated_by";
$tdatafreee_items[".exportFields"][] = "available";

$tdatafreee_items[".importFields"] = array();

$tdatafreee_items[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_items";
	$fdata["Label"] = GetFieldLabel("freee_items","id");
	$fdata["FieldType"] = 20;

	
	
	
			
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




	$tdatafreee_items["id"] = $fdata;
//	company_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "company_id";
	$fdata["GoodName"] = "company_id";
	$fdata["ownerTable"] = "freee_items";
	$fdata["Label"] = GetFieldLabel("freee_items","company_id");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatafreee_items["company_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "freee_items";
	$fdata["Label"] = GetFieldLabel("freee_items","name");
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
			$edata["EditParams"].= " maxlength=30";

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




	$tdatafreee_items["name"] = $fdata;
//	update_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_date";
	$fdata["GoodName"] = "update_date";
	$fdata["ownerTable"] = "freee_items";
	$fdata["Label"] = GetFieldLabel("freee_items","update_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_date`";

	
	
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




	$tdatafreee_items["update_date"] = $fdata;
//	shortcut1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "shortcut1";
	$fdata["GoodName"] = "shortcut1";
	$fdata["ownerTable"] = "freee_items";
	$fdata["Label"] = GetFieldLabel("freee_items","shortcut1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shortcut1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shortcut1`";

	
	
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




	$tdatafreee_items["shortcut1"] = $fdata;
//	shortcut2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "shortcut2";
	$fdata["GoodName"] = "shortcut2";
	$fdata["ownerTable"] = "freee_items";
	$fdata["Label"] = GetFieldLabel("freee_items","shortcut2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shortcut2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shortcut2`";

	
	
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




	$tdatafreee_items["shortcut2"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_items";
	$fdata["Label"] = GetFieldLabel("freee_items","created_at");
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




	$tdatafreee_items["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_items";
	$fdata["Label"] = GetFieldLabel("freee_items","created_by");
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




	$tdatafreee_items["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_items";
	$fdata["Label"] = GetFieldLabel("freee_items","updated_at");
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




	$tdatafreee_items["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_items";
	$fdata["Label"] = GetFieldLabel("freee_items","updated_by");
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




	$tdatafreee_items["updated_by"] = $fdata;
//	available
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "available";
	$fdata["GoodName"] = "available";
	$fdata["ownerTable"] = "freee_items";
	$fdata["Label"] = GetFieldLabel("freee_items","available");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "available";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`available`";

	
	
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




	$tdatafreee_items["available"] = $fdata;


$tables_data["freee_items"]=&$tdatafreee_items;
$field_labels["freee_items"] = &$fieldLabelsfreee_items;
$fieldToolTips["freee_items"] = &$fieldToolTipsfreee_items;
$placeHolders["freee_items"] = &$placeHoldersfreee_items;
$page_titles["freee_items"] = &$pageTitlesfreee_items;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_items"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_items"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_items()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`company_id`,  	`name`,  	`update_date`,  	`shortcut1`,  	`shortcut2`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`available`";
$proto0["m_strFrom"] = "FROM `freee_items`";
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
	"m_strTable" => "freee_items",
	"m_srcTableName" => "freee_items"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_items";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "company_id",
	"m_strTable" => "freee_items",
	"m_srcTableName" => "freee_items"
));

$proto8["m_sql"] = "`company_id`";
$proto8["m_srcTableName"] = "freee_items";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "freee_items",
	"m_srcTableName" => "freee_items"
));

$proto10["m_sql"] = "`name`";
$proto10["m_srcTableName"] = "freee_items";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_date",
	"m_strTable" => "freee_items",
	"m_srcTableName" => "freee_items"
));

$proto12["m_sql"] = "`update_date`";
$proto12["m_srcTableName"] = "freee_items";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "shortcut1",
	"m_strTable" => "freee_items",
	"m_srcTableName" => "freee_items"
));

$proto14["m_sql"] = "`shortcut1`";
$proto14["m_srcTableName"] = "freee_items";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "shortcut2",
	"m_strTable" => "freee_items",
	"m_srcTableName" => "freee_items"
));

$proto16["m_sql"] = "`shortcut2`";
$proto16["m_srcTableName"] = "freee_items";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_items",
	"m_srcTableName" => "freee_items"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "freee_items";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_items",
	"m_srcTableName" => "freee_items"
));

$proto20["m_sql"] = "`created_by`";
$proto20["m_srcTableName"] = "freee_items";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_items",
	"m_srcTableName" => "freee_items"
));

$proto22["m_sql"] = "`updated_at`";
$proto22["m_srcTableName"] = "freee_items";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_items",
	"m_srcTableName" => "freee_items"
));

$proto24["m_sql"] = "`updated_by`";
$proto24["m_srcTableName"] = "freee_items";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "available",
	"m_strTable" => "freee_items",
	"m_srcTableName" => "freee_items"
));

$proto26["m_sql"] = "`available`";
$proto26["m_srcTableName"] = "freee_items";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "freee_items";
$proto29["m_srcTableName"] = "freee_items";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "company_id";
$proto29["m_columns"][] = "name";
$proto29["m_columns"][] = "update_date";
$proto29["m_columns"][] = "shortcut1";
$proto29["m_columns"][] = "shortcut2";
$proto29["m_columns"][] = "created_at";
$proto29["m_columns"][] = "created_by";
$proto29["m_columns"][] = "updated_at";
$proto29["m_columns"][] = "updated_by";
$proto29["m_columns"][] = "available";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "`freee_items`";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "freee_items";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="freee_items";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_items = createSqlQuery_freee_items();


	
		;

											

$tdatafreee_items[".sqlquery"] = $queryData_freee_items;

$tableEvents["freee_items"] = new eventsBase;
$tdatafreee_items[".hasEvents"] = false;

?>