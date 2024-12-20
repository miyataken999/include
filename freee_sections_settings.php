<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_sections = array();
	$tdatafreee_sections[".truncateText"] = true;
	$tdatafreee_sections[".NumberOfChars"] = 80;
	$tdatafreee_sections[".ShortName"] = "freee_sections";
	$tdatafreee_sections[".OwnerID"] = "";
	$tdatafreee_sections[".OriginalTable"] = "freee_sections";

//	field labels
$fieldLabelsfreee_sections = array();
$fieldToolTipsfreee_sections = array();
$pageTitlesfreee_sections = array();
$placeHoldersfreee_sections = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_sections["Japanese"] = array();
	$fieldToolTipsfreee_sections["Japanese"] = array();
	$placeHoldersfreee_sections["Japanese"] = array();
	$pageTitlesfreee_sections["Japanese"] = array();
	$fieldLabelsfreee_sections["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_sections["Japanese"]["id"] = "";
	$placeHoldersfreee_sections["Japanese"]["id"] = "";
	$fieldLabelsfreee_sections["Japanese"]["company_id"] = "Company Id";
	$fieldToolTipsfreee_sections["Japanese"]["company_id"] = "";
	$placeHoldersfreee_sections["Japanese"]["company_id"] = "";
	$fieldLabelsfreee_sections["Japanese"]["name"] = "Name";
	$fieldToolTipsfreee_sections["Japanese"]["name"] = "";
	$placeHoldersfreee_sections["Japanese"]["name"] = "";
	$fieldLabelsfreee_sections["Japanese"]["update_date"] = "Update Date";
	$fieldToolTipsfreee_sections["Japanese"]["update_date"] = "";
	$placeHoldersfreee_sections["Japanese"]["update_date"] = "";
	$fieldLabelsfreee_sections["Japanese"]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee_sections["Japanese"]["shortcut1"] = "";
	$placeHoldersfreee_sections["Japanese"]["shortcut1"] = "";
	$fieldLabelsfreee_sections["Japanese"]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee_sections["Japanese"]["shortcut2"] = "";
	$placeHoldersfreee_sections["Japanese"]["shortcut2"] = "";
	$fieldLabelsfreee_sections["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_sections["Japanese"]["created_at"] = "";
	$placeHoldersfreee_sections["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_sections["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsfreee_sections["Japanese"]["created_by"] = "";
	$placeHoldersfreee_sections["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_sections["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_sections["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_sections["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_sections["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_sections["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_sections["Japanese"]["updated_by"] = "";
	$fieldLabelsfreee_sections["Japanese"]["available"] = "Available";
	$fieldToolTipsfreee_sections["Japanese"]["available"] = "";
	$placeHoldersfreee_sections["Japanese"]["available"] = "";
	$fieldLabelsfreee_sections["Japanese"]["long_name"] = "Long Name";
	$fieldToolTipsfreee_sections["Japanese"]["long_name"] = "";
	$placeHoldersfreee_sections["Japanese"]["long_name"] = "";
	$fieldLabelsfreee_sections["Japanese"]["indent_count"] = "Indent Count";
	$fieldToolTipsfreee_sections["Japanese"]["indent_count"] = "";
	$placeHoldersfreee_sections["Japanese"]["indent_count"] = "";
	$fieldLabelsfreee_sections["Japanese"]["parent_id"] = "Parent Id";
	$fieldToolTipsfreee_sections["Japanese"]["parent_id"] = "";
	$placeHoldersfreee_sections["Japanese"]["parent_id"] = "";
	if (count($fieldToolTipsfreee_sections["Japanese"]))
		$tdatafreee_sections[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_sections[""] = array();
	$fieldToolTipsfreee_sections[""] = array();
	$placeHoldersfreee_sections[""] = array();
	$pageTitlesfreee_sections[""] = array();
	$fieldLabelsfreee_sections[""]["id"] = "Id";
	$fieldToolTipsfreee_sections[""]["id"] = "";
	$placeHoldersfreee_sections[""]["id"] = "";
	$fieldLabelsfreee_sections[""]["company_id"] = "Company Id";
	$fieldToolTipsfreee_sections[""]["company_id"] = "";
	$placeHoldersfreee_sections[""]["company_id"] = "";
	$fieldLabelsfreee_sections[""]["name"] = "Name";
	$fieldToolTipsfreee_sections[""]["name"] = "";
	$placeHoldersfreee_sections[""]["name"] = "";
	$fieldLabelsfreee_sections[""]["update_date"] = "Update Date";
	$fieldToolTipsfreee_sections[""]["update_date"] = "";
	$placeHoldersfreee_sections[""]["update_date"] = "";
	$fieldLabelsfreee_sections[""]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee_sections[""]["shortcut1"] = "";
	$placeHoldersfreee_sections[""]["shortcut1"] = "";
	$fieldLabelsfreee_sections[""]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee_sections[""]["shortcut2"] = "";
	$placeHoldersfreee_sections[""]["shortcut2"] = "";
	$fieldLabelsfreee_sections[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_sections[""]["created_at"] = "";
	$placeHoldersfreee_sections[""]["created_at"] = "";
	$fieldLabelsfreee_sections[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_sections[""]["created_by"] = "";
	$placeHoldersfreee_sections[""]["created_by"] = "";
	$fieldLabelsfreee_sections[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_sections[""]["updated_at"] = "";
	$placeHoldersfreee_sections[""]["updated_at"] = "";
	$fieldLabelsfreee_sections[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_sections[""]["updated_by"] = "";
	$placeHoldersfreee_sections[""]["updated_by"] = "";
	$fieldLabelsfreee_sections[""]["available"] = "Available";
	$fieldToolTipsfreee_sections[""]["available"] = "";
	$placeHoldersfreee_sections[""]["available"] = "";
	$fieldLabelsfreee_sections[""]["long_name"] = "Long Name";
	$fieldToolTipsfreee_sections[""]["long_name"] = "";
	$placeHoldersfreee_sections[""]["long_name"] = "";
	$fieldLabelsfreee_sections[""]["indent_count"] = "Indent Count";
	$fieldToolTipsfreee_sections[""]["indent_count"] = "";
	$placeHoldersfreee_sections[""]["indent_count"] = "";
	$fieldLabelsfreee_sections[""]["parent_id"] = "Parent Id";
	$fieldToolTipsfreee_sections[""]["parent_id"] = "";
	$placeHoldersfreee_sections[""]["parent_id"] = "";
	if (count($fieldToolTipsfreee_sections[""]))
		$tdatafreee_sections[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_sections["English"] = array();
	$fieldToolTipsfreee_sections["English"] = array();
	$placeHoldersfreee_sections["English"] = array();
	$pageTitlesfreee_sections["English"] = array();
	$fieldLabelsfreee_sections["English"]["id"] = "Id";
	$fieldToolTipsfreee_sections["English"]["id"] = "";
	$placeHoldersfreee_sections["English"]["id"] = "";
	$fieldLabelsfreee_sections["English"]["company_id"] = "Company Id";
	$fieldToolTipsfreee_sections["English"]["company_id"] = "";
	$placeHoldersfreee_sections["English"]["company_id"] = "";
	$fieldLabelsfreee_sections["English"]["name"] = "Name";
	$fieldToolTipsfreee_sections["English"]["name"] = "";
	$placeHoldersfreee_sections["English"]["name"] = "";
	$fieldLabelsfreee_sections["English"]["update_date"] = "Update Date";
	$fieldToolTipsfreee_sections["English"]["update_date"] = "";
	$placeHoldersfreee_sections["English"]["update_date"] = "";
	$fieldLabelsfreee_sections["English"]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee_sections["English"]["shortcut1"] = "";
	$placeHoldersfreee_sections["English"]["shortcut1"] = "";
	$fieldLabelsfreee_sections["English"]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee_sections["English"]["shortcut2"] = "";
	$placeHoldersfreee_sections["English"]["shortcut2"] = "";
	$fieldLabelsfreee_sections["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_sections["English"]["created_at"] = "";
	$placeHoldersfreee_sections["English"]["created_at"] = "";
	$fieldLabelsfreee_sections["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_sections["English"]["created_by"] = "";
	$placeHoldersfreee_sections["English"]["created_by"] = "";
	$fieldLabelsfreee_sections["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_sections["English"]["updated_at"] = "";
	$placeHoldersfreee_sections["English"]["updated_at"] = "";
	$fieldLabelsfreee_sections["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_sections["English"]["updated_by"] = "";
	$placeHoldersfreee_sections["English"]["updated_by"] = "";
	$fieldLabelsfreee_sections["English"]["available"] = "Available";
	$fieldToolTipsfreee_sections["English"]["available"] = "";
	$placeHoldersfreee_sections["English"]["available"] = "";
	$fieldLabelsfreee_sections["English"]["long_name"] = "Long Name";
	$fieldToolTipsfreee_sections["English"]["long_name"] = "";
	$placeHoldersfreee_sections["English"]["long_name"] = "";
	$fieldLabelsfreee_sections["English"]["indent_count"] = "Indent Count";
	$fieldToolTipsfreee_sections["English"]["indent_count"] = "";
	$placeHoldersfreee_sections["English"]["indent_count"] = "";
	$fieldLabelsfreee_sections["English"]["parent_id"] = "Parent Id";
	$fieldToolTipsfreee_sections["English"]["parent_id"] = "";
	$placeHoldersfreee_sections["English"]["parent_id"] = "";
	if (count($fieldToolTipsfreee_sections["English"]))
		$tdatafreee_sections[".isUseToolTips"] = true;
}


	$tdatafreee_sections[".NCSearch"] = true;



$tdatafreee_sections[".shortTableName"] = "freee_sections";
$tdatafreee_sections[".nSecOptions"] = 0;
$tdatafreee_sections[".recsPerRowPrint"] = 1;
$tdatafreee_sections[".mainTableOwnerID"] = "";
$tdatafreee_sections[".moveNext"] = 1;
$tdatafreee_sections[".entityType"] = 0;

$tdatafreee_sections[".strOriginalTableName"] = "freee_sections";

	



$tdatafreee_sections[".showAddInPopup"] = false;

$tdatafreee_sections[".showEditInPopup"] = false;

$tdatafreee_sections[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_sections[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_sections[".fieldsForRegister"] = array();

$tdatafreee_sections[".listAjax"] = false;

	$tdatafreee_sections[".audit"] = false;

	$tdatafreee_sections[".locking"] = false;



$tdatafreee_sections[".list"] = true;



$tdatafreee_sections[".reorderRecordsByHeader"] = true;





$tdatafreee_sections[".exportTo"] = true;



$tdatafreee_sections[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_sections[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_sections[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_sections[".searchSaving"] = false;
//

$tdatafreee_sections[".showSearchPanel"] = true;
		$tdatafreee_sections[".flexibleSearch"] = true;

$tdatafreee_sections[".isUseAjaxSuggest"] = true;

$tdatafreee_sections[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_sections[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_sections[".buttonsAdded"] = false;

$tdatafreee_sections[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_sections[".isUseTimeForSearch"] = false;





$tdatafreee_sections[".allSearchFields"] = array();
$tdatafreee_sections[".filterFields"] = array();
$tdatafreee_sections[".requiredSearchFields"] = array();

$tdatafreee_sections[".allSearchFields"][] = "id";
	$tdatafreee_sections[".allSearchFields"][] = "company_id";
	$tdatafreee_sections[".allSearchFields"][] = "name";
	$tdatafreee_sections[".allSearchFields"][] = "update_date";
	$tdatafreee_sections[".allSearchFields"][] = "shortcut1";
	$tdatafreee_sections[".allSearchFields"][] = "shortcut2";
	$tdatafreee_sections[".allSearchFields"][] = "created_at";
	$tdatafreee_sections[".allSearchFields"][] = "created_by";
	$tdatafreee_sections[".allSearchFields"][] = "updated_at";
	$tdatafreee_sections[".allSearchFields"][] = "updated_by";
	$tdatafreee_sections[".allSearchFields"][] = "available";
	$tdatafreee_sections[".allSearchFields"][] = "long_name";
	$tdatafreee_sections[".allSearchFields"][] = "indent_count";
	$tdatafreee_sections[".allSearchFields"][] = "parent_id";
	

$tdatafreee_sections[".googleLikeFields"] = array();
$tdatafreee_sections[".googleLikeFields"][] = "id";
$tdatafreee_sections[".googleLikeFields"][] = "company_id";
$tdatafreee_sections[".googleLikeFields"][] = "name";
$tdatafreee_sections[".googleLikeFields"][] = "update_date";
$tdatafreee_sections[".googleLikeFields"][] = "shortcut1";
$tdatafreee_sections[".googleLikeFields"][] = "shortcut2";
$tdatafreee_sections[".googleLikeFields"][] = "created_at";
$tdatafreee_sections[".googleLikeFields"][] = "created_by";
$tdatafreee_sections[".googleLikeFields"][] = "updated_at";
$tdatafreee_sections[".googleLikeFields"][] = "updated_by";
$tdatafreee_sections[".googleLikeFields"][] = "available";
$tdatafreee_sections[".googleLikeFields"][] = "long_name";
$tdatafreee_sections[".googleLikeFields"][] = "indent_count";
$tdatafreee_sections[".googleLikeFields"][] = "parent_id";


$tdatafreee_sections[".advSearchFields"] = array();
$tdatafreee_sections[".advSearchFields"][] = "id";
$tdatafreee_sections[".advSearchFields"][] = "company_id";
$tdatafreee_sections[".advSearchFields"][] = "name";
$tdatafreee_sections[".advSearchFields"][] = "update_date";
$tdatafreee_sections[".advSearchFields"][] = "shortcut1";
$tdatafreee_sections[".advSearchFields"][] = "shortcut2";
$tdatafreee_sections[".advSearchFields"][] = "created_at";
$tdatafreee_sections[".advSearchFields"][] = "created_by";
$tdatafreee_sections[".advSearchFields"][] = "updated_at";
$tdatafreee_sections[".advSearchFields"][] = "updated_by";
$tdatafreee_sections[".advSearchFields"][] = "available";
$tdatafreee_sections[".advSearchFields"][] = "long_name";
$tdatafreee_sections[".advSearchFields"][] = "indent_count";
$tdatafreee_sections[".advSearchFields"][] = "parent_id";

$tdatafreee_sections[".tableType"] = "list";

$tdatafreee_sections[".printerPageOrientation"] = 0;
$tdatafreee_sections[".nPrinterPageScale"] = 100;

$tdatafreee_sections[".nPrinterSplitRecords"] = 40;

$tdatafreee_sections[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_sections[".geocodingEnabled"] = false;





$tdatafreee_sections[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_sections[".pageSize"] = 100;

$tdatafreee_sections[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_sections[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_sections[".orderindexes"] = array();

$tdatafreee_sections[".sqlHead"] = "SELECT `id`,  	`company_id`,  	`name`,  	`update_date`,  	`shortcut1`,  	`shortcut2`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`available`,  	`long_name`,  	`indent_count`,  	`parent_id`";
$tdatafreee_sections[".sqlFrom"] = "FROM `freee_sections`";
$tdatafreee_sections[".sqlWhereExpr"] = "";
$tdatafreee_sections[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_sections[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_sections[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_sections[".highlightSearchResults"] = true;

$tableKeysfreee_sections = array();
$tableKeysfreee_sections[] = "id";
$tdatafreee_sections[".Keys"] = $tableKeysfreee_sections;

$tdatafreee_sections[".listFields"] = array();
$tdatafreee_sections[".listFields"][] = "id";
$tdatafreee_sections[".listFields"][] = "company_id";
$tdatafreee_sections[".listFields"][] = "name";
$tdatafreee_sections[".listFields"][] = "update_date";
$tdatafreee_sections[".listFields"][] = "shortcut1";
$tdatafreee_sections[".listFields"][] = "shortcut2";
$tdatafreee_sections[".listFields"][] = "created_at";
$tdatafreee_sections[".listFields"][] = "created_by";
$tdatafreee_sections[".listFields"][] = "updated_at";
$tdatafreee_sections[".listFields"][] = "updated_by";
$tdatafreee_sections[".listFields"][] = "available";
$tdatafreee_sections[".listFields"][] = "long_name";
$tdatafreee_sections[".listFields"][] = "indent_count";
$tdatafreee_sections[".listFields"][] = "parent_id";

$tdatafreee_sections[".hideMobileList"] = array();


$tdatafreee_sections[".viewFields"] = array();

$tdatafreee_sections[".addFields"] = array();

$tdatafreee_sections[".masterListFields"] = array();
$tdatafreee_sections[".masterListFields"][] = "id";
$tdatafreee_sections[".masterListFields"][] = "company_id";
$tdatafreee_sections[".masterListFields"][] = "name";
$tdatafreee_sections[".masterListFields"][] = "update_date";
$tdatafreee_sections[".masterListFields"][] = "shortcut1";
$tdatafreee_sections[".masterListFields"][] = "shortcut2";
$tdatafreee_sections[".masterListFields"][] = "created_at";
$tdatafreee_sections[".masterListFields"][] = "created_by";
$tdatafreee_sections[".masterListFields"][] = "updated_at";
$tdatafreee_sections[".masterListFields"][] = "updated_by";
$tdatafreee_sections[".masterListFields"][] = "available";
$tdatafreee_sections[".masterListFields"][] = "long_name";
$tdatafreee_sections[".masterListFields"][] = "indent_count";
$tdatafreee_sections[".masterListFields"][] = "parent_id";

$tdatafreee_sections[".inlineAddFields"] = array();

$tdatafreee_sections[".editFields"] = array();

$tdatafreee_sections[".inlineEditFields"] = array();

$tdatafreee_sections[".updateSelectedFields"] = array();


$tdatafreee_sections[".exportFields"] = array();
$tdatafreee_sections[".exportFields"][] = "id";
$tdatafreee_sections[".exportFields"][] = "company_id";
$tdatafreee_sections[".exportFields"][] = "name";
$tdatafreee_sections[".exportFields"][] = "update_date";
$tdatafreee_sections[".exportFields"][] = "shortcut1";
$tdatafreee_sections[".exportFields"][] = "shortcut2";
$tdatafreee_sections[".exportFields"][] = "created_at";
$tdatafreee_sections[".exportFields"][] = "created_by";
$tdatafreee_sections[".exportFields"][] = "updated_at";
$tdatafreee_sections[".exportFields"][] = "updated_by";
$tdatafreee_sections[".exportFields"][] = "available";
$tdatafreee_sections[".exportFields"][] = "long_name";
$tdatafreee_sections[".exportFields"][] = "indent_count";
$tdatafreee_sections[".exportFields"][] = "parent_id";

$tdatafreee_sections[".importFields"] = array();

$tdatafreee_sections[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_sections";
	$fdata["Label"] = GetFieldLabel("freee_sections","id");
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




	$tdatafreee_sections["id"] = $fdata;
//	company_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "company_id";
	$fdata["GoodName"] = "company_id";
	$fdata["ownerTable"] = "freee_sections";
	$fdata["Label"] = GetFieldLabel("freee_sections","company_id");
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




	$tdatafreee_sections["company_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "freee_sections";
	$fdata["Label"] = GetFieldLabel("freee_sections","name");
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




	$tdatafreee_sections["name"] = $fdata;
//	update_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_date";
	$fdata["GoodName"] = "update_date";
	$fdata["ownerTable"] = "freee_sections";
	$fdata["Label"] = GetFieldLabel("freee_sections","update_date");
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




	$tdatafreee_sections["update_date"] = $fdata;
//	shortcut1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "shortcut1";
	$fdata["GoodName"] = "shortcut1";
	$fdata["ownerTable"] = "freee_sections";
	$fdata["Label"] = GetFieldLabel("freee_sections","shortcut1");
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




	$tdatafreee_sections["shortcut1"] = $fdata;
//	shortcut2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "shortcut2";
	$fdata["GoodName"] = "shortcut2";
	$fdata["ownerTable"] = "freee_sections";
	$fdata["Label"] = GetFieldLabel("freee_sections","shortcut2");
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




	$tdatafreee_sections["shortcut2"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_sections";
	$fdata["Label"] = GetFieldLabel("freee_sections","created_at");
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




	$tdatafreee_sections["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_sections";
	$fdata["Label"] = GetFieldLabel("freee_sections","created_by");
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




	$tdatafreee_sections["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_sections";
	$fdata["Label"] = GetFieldLabel("freee_sections","updated_at");
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




	$tdatafreee_sections["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_sections";
	$fdata["Label"] = GetFieldLabel("freee_sections","updated_by");
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




	$tdatafreee_sections["updated_by"] = $fdata;
//	available
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "available";
	$fdata["GoodName"] = "available";
	$fdata["ownerTable"] = "freee_sections";
	$fdata["Label"] = GetFieldLabel("freee_sections","available");
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




	$tdatafreee_sections["available"] = $fdata;
//	long_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "long_name";
	$fdata["GoodName"] = "long_name";
	$fdata["ownerTable"] = "freee_sections";
	$fdata["Label"] = GetFieldLabel("freee_sections","long_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "long_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`long_name`";

	
	
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




	$tdatafreee_sections["long_name"] = $fdata;
//	indent_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "indent_count";
	$fdata["GoodName"] = "indent_count";
	$fdata["ownerTable"] = "freee_sections";
	$fdata["Label"] = GetFieldLabel("freee_sections","indent_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "indent_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`indent_count`";

	
	
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




	$tdatafreee_sections["indent_count"] = $fdata;
//	parent_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "parent_id";
	$fdata["GoodName"] = "parent_id";
	$fdata["ownerTable"] = "freee_sections";
	$fdata["Label"] = GetFieldLabel("freee_sections","parent_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "parent_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`parent_id`";

	
	
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




	$tdatafreee_sections["parent_id"] = $fdata;


$tables_data["freee_sections"]=&$tdatafreee_sections;
$field_labels["freee_sections"] = &$fieldLabelsfreee_sections;
$fieldToolTips["freee_sections"] = &$fieldToolTipsfreee_sections;
$placeHolders["freee_sections"] = &$placeHoldersfreee_sections;
$page_titles["freee_sections"] = &$pageTitlesfreee_sections;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_sections"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_sections"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_sections()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`company_id`,  	`name`,  	`update_date`,  	`shortcut1`,  	`shortcut2`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`available`,  	`long_name`,  	`indent_count`,  	`parent_id`";
$proto0["m_strFrom"] = "FROM `freee_sections`";
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
	"m_strTable" => "freee_sections",
	"m_srcTableName" => "freee_sections"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_sections";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "company_id",
	"m_strTable" => "freee_sections",
	"m_srcTableName" => "freee_sections"
));

$proto8["m_sql"] = "`company_id`";
$proto8["m_srcTableName"] = "freee_sections";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "freee_sections",
	"m_srcTableName" => "freee_sections"
));

$proto10["m_sql"] = "`name`";
$proto10["m_srcTableName"] = "freee_sections";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_date",
	"m_strTable" => "freee_sections",
	"m_srcTableName" => "freee_sections"
));

$proto12["m_sql"] = "`update_date`";
$proto12["m_srcTableName"] = "freee_sections";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "shortcut1",
	"m_strTable" => "freee_sections",
	"m_srcTableName" => "freee_sections"
));

$proto14["m_sql"] = "`shortcut1`";
$proto14["m_srcTableName"] = "freee_sections";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "shortcut2",
	"m_strTable" => "freee_sections",
	"m_srcTableName" => "freee_sections"
));

$proto16["m_sql"] = "`shortcut2`";
$proto16["m_srcTableName"] = "freee_sections";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_sections",
	"m_srcTableName" => "freee_sections"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "freee_sections";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_sections",
	"m_srcTableName" => "freee_sections"
));

$proto20["m_sql"] = "`created_by`";
$proto20["m_srcTableName"] = "freee_sections";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_sections",
	"m_srcTableName" => "freee_sections"
));

$proto22["m_sql"] = "`updated_at`";
$proto22["m_srcTableName"] = "freee_sections";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_sections",
	"m_srcTableName" => "freee_sections"
));

$proto24["m_sql"] = "`updated_by`";
$proto24["m_srcTableName"] = "freee_sections";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "available",
	"m_strTable" => "freee_sections",
	"m_srcTableName" => "freee_sections"
));

$proto26["m_sql"] = "`available`";
$proto26["m_srcTableName"] = "freee_sections";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "long_name",
	"m_strTable" => "freee_sections",
	"m_srcTableName" => "freee_sections"
));

$proto28["m_sql"] = "`long_name`";
$proto28["m_srcTableName"] = "freee_sections";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "indent_count",
	"m_strTable" => "freee_sections",
	"m_srcTableName" => "freee_sections"
));

$proto30["m_sql"] = "`indent_count`";
$proto30["m_srcTableName"] = "freee_sections";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "parent_id",
	"m_strTable" => "freee_sections",
	"m_srcTableName" => "freee_sections"
));

$proto32["m_sql"] = "`parent_id`";
$proto32["m_srcTableName"] = "freee_sections";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "freee_sections";
$proto35["m_srcTableName"] = "freee_sections";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "company_id";
$proto35["m_columns"][] = "name";
$proto35["m_columns"][] = "update_date";
$proto35["m_columns"][] = "shortcut1";
$proto35["m_columns"][] = "shortcut2";
$proto35["m_columns"][] = "created_at";
$proto35["m_columns"][] = "created_by";
$proto35["m_columns"][] = "updated_at";
$proto35["m_columns"][] = "updated_by";
$proto35["m_columns"][] = "available";
$proto35["m_columns"][] = "long_name";
$proto35["m_columns"][] = "indent_count";
$proto35["m_columns"][] = "parent_id";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "`freee_sections`";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "freee_sections";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="freee_sections";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_sections = createSqlQuery_freee_sections();


	
		;

														

$tdatafreee_sections[".sqlquery"] = $queryData_freee_sections;

$tableEvents["freee_sections"] = new eventsBase;
$tdatafreee_sections[".hasEvents"] = false;

?>