<?php
require_once(getabspath("classes/cipherer.php"));




$tdataroyal_customer_type = array();
	$tdataroyal_customer_type[".truncateText"] = true;
	$tdataroyal_customer_type[".NumberOfChars"] = 80;
	$tdataroyal_customer_type[".ShortName"] = "royal_customer_type";
	$tdataroyal_customer_type[".OwnerID"] = "";
	$tdataroyal_customer_type[".OriginalTable"] = "royal_customer_type";

//	field labels
$fieldLabelsroyal_customer_type = array();
$fieldToolTipsroyal_customer_type = array();
$pageTitlesroyal_customer_type = array();
$placeHoldersroyal_customer_type = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsroyal_customer_type["Japanese"] = array();
	$fieldToolTipsroyal_customer_type["Japanese"] = array();
	$placeHoldersroyal_customer_type["Japanese"] = array();
	$pageTitlesroyal_customer_type["Japanese"] = array();
	$fieldLabelsroyal_customer_type["Japanese"]["id"] = "Id";
	$fieldToolTipsroyal_customer_type["Japanese"]["id"] = "";
	$placeHoldersroyal_customer_type["Japanese"]["id"] = "";
	$fieldLabelsroyal_customer_type["Japanese"]["name"] = "Name";
	$fieldToolTipsroyal_customer_type["Japanese"]["name"] = "";
	$placeHoldersroyal_customer_type["Japanese"]["name"] = "";
	$fieldLabelsroyal_customer_type["Japanese"]["sort"] = "Sort";
	$fieldToolTipsroyal_customer_type["Japanese"]["sort"] = "";
	$placeHoldersroyal_customer_type["Japanese"]["sort"] = "";
	$fieldLabelsroyal_customer_type["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsroyal_customer_type["Japanese"]["updated_by"] = "";
	$placeHoldersroyal_customer_type["Japanese"]["updated_by"] = "";
	$fieldLabelsroyal_customer_type["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsroyal_customer_type["Japanese"]["updated_at"] = "";
	$placeHoldersroyal_customer_type["Japanese"]["updated_at"] = "";
	$fieldLabelsroyal_customer_type["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsroyal_customer_type["Japanese"]["created_by"] = "";
	$placeHoldersroyal_customer_type["Japanese"]["created_by"] = "";
	$fieldLabelsroyal_customer_type["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsroyal_customer_type["Japanese"]["created_at"] = "";
	$placeHoldersroyal_customer_type["Japanese"]["created_at"] = "";
	if (count($fieldToolTipsroyal_customer_type["Japanese"]))
		$tdataroyal_customer_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsroyal_customer_type[""] = array();
	$fieldToolTipsroyal_customer_type[""] = array();
	$placeHoldersroyal_customer_type[""] = array();
	$pageTitlesroyal_customer_type[""] = array();
	$fieldLabelsroyal_customer_type[""]["id"] = "Id";
	$fieldToolTipsroyal_customer_type[""]["id"] = "";
	$placeHoldersroyal_customer_type[""]["id"] = "";
	$fieldLabelsroyal_customer_type[""]["name"] = "Name";
	$fieldToolTipsroyal_customer_type[""]["name"] = "";
	$placeHoldersroyal_customer_type[""]["name"] = "";
	$fieldLabelsroyal_customer_type[""]["sort"] = "Sort";
	$fieldToolTipsroyal_customer_type[""]["sort"] = "";
	$placeHoldersroyal_customer_type[""]["sort"] = "";
	$fieldLabelsroyal_customer_type[""]["updated_by"] = "Updated By";
	$fieldToolTipsroyal_customer_type[""]["updated_by"] = "";
	$placeHoldersroyal_customer_type[""]["updated_by"] = "";
	$fieldLabelsroyal_customer_type[""]["updated_at"] = "Updated At";
	$fieldToolTipsroyal_customer_type[""]["updated_at"] = "";
	$placeHoldersroyal_customer_type[""]["updated_at"] = "";
	$fieldLabelsroyal_customer_type[""]["created_by"] = "Created By";
	$fieldToolTipsroyal_customer_type[""]["created_by"] = "";
	$placeHoldersroyal_customer_type[""]["created_by"] = "";
	$fieldLabelsroyal_customer_type[""]["created_at"] = "Created At";
	$fieldToolTipsroyal_customer_type[""]["created_at"] = "";
	$placeHoldersroyal_customer_type[""]["created_at"] = "";
	if (count($fieldToolTipsroyal_customer_type[""]))
		$tdataroyal_customer_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsroyal_customer_type["English"] = array();
	$fieldToolTipsroyal_customer_type["English"] = array();
	$placeHoldersroyal_customer_type["English"] = array();
	$pageTitlesroyal_customer_type["English"] = array();
	$fieldLabelsroyal_customer_type["English"]["id"] = "Id";
	$fieldToolTipsroyal_customer_type["English"]["id"] = "";
	$placeHoldersroyal_customer_type["English"]["id"] = "";
	$fieldLabelsroyal_customer_type["English"]["name"] = "Name";
	$fieldToolTipsroyal_customer_type["English"]["name"] = "";
	$placeHoldersroyal_customer_type["English"]["name"] = "";
	$fieldLabelsroyal_customer_type["English"]["sort"] = "Sort";
	$fieldToolTipsroyal_customer_type["English"]["sort"] = "";
	$placeHoldersroyal_customer_type["English"]["sort"] = "";
	$fieldLabelsroyal_customer_type["English"]["updated_by"] = "Updated By";
	$fieldToolTipsroyal_customer_type["English"]["updated_by"] = "";
	$placeHoldersroyal_customer_type["English"]["updated_by"] = "";
	$fieldLabelsroyal_customer_type["English"]["updated_at"] = "Updated At";
	$fieldToolTipsroyal_customer_type["English"]["updated_at"] = "";
	$placeHoldersroyal_customer_type["English"]["updated_at"] = "";
	$fieldLabelsroyal_customer_type["English"]["created_by"] = "Created By";
	$fieldToolTipsroyal_customer_type["English"]["created_by"] = "";
	$placeHoldersroyal_customer_type["English"]["created_by"] = "";
	$fieldLabelsroyal_customer_type["English"]["created_at"] = "Created At";
	$fieldToolTipsroyal_customer_type["English"]["created_at"] = "";
	$placeHoldersroyal_customer_type["English"]["created_at"] = "";
	if (count($fieldToolTipsroyal_customer_type["English"]))
		$tdataroyal_customer_type[".isUseToolTips"] = true;
}


	$tdataroyal_customer_type[".NCSearch"] = true;



$tdataroyal_customer_type[".shortTableName"] = "royal_customer_type";
$tdataroyal_customer_type[".nSecOptions"] = 0;
$tdataroyal_customer_type[".recsPerRowPrint"] = 1;
$tdataroyal_customer_type[".mainTableOwnerID"] = "";
$tdataroyal_customer_type[".moveNext"] = 1;
$tdataroyal_customer_type[".entityType"] = 0;

$tdataroyal_customer_type[".strOriginalTableName"] = "royal_customer_type";

	



$tdataroyal_customer_type[".showAddInPopup"] = false;

$tdataroyal_customer_type[".showEditInPopup"] = false;

$tdataroyal_customer_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataroyal_customer_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataroyal_customer_type[".fieldsForRegister"] = array();

$tdataroyal_customer_type[".listAjax"] = false;

	$tdataroyal_customer_type[".audit"] = true;

	$tdataroyal_customer_type[".locking"] = false;



$tdataroyal_customer_type[".list"] = true;

$tdataroyal_customer_type[".inlineEdit"] = true;


$tdataroyal_customer_type[".reorderRecordsByHeader"] = true;



$tdataroyal_customer_type[".inlineAdd"] = true;

$tdataroyal_customer_type[".import"] = true;

$tdataroyal_customer_type[".exportTo"] = true;


$tdataroyal_customer_type[".delete"] = true;

$tdataroyal_customer_type[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataroyal_customer_type[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataroyal_customer_type[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataroyal_customer_type[".searchSaving"] = false;
//

$tdataroyal_customer_type[".showSearchPanel"] = true;
		$tdataroyal_customer_type[".flexibleSearch"] = true;

$tdataroyal_customer_type[".isUseAjaxSuggest"] = true;

$tdataroyal_customer_type[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataroyal_customer_type[".ajaxCodeSnippetAdded"] = false;

$tdataroyal_customer_type[".buttonsAdded"] = false;

$tdataroyal_customer_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdataroyal_customer_type[".isUseTimeForSearch"] = false;





$tdataroyal_customer_type[".allSearchFields"] = array();
$tdataroyal_customer_type[".filterFields"] = array();
$tdataroyal_customer_type[".requiredSearchFields"] = array();

$tdataroyal_customer_type[".allSearchFields"][] = "id";
	$tdataroyal_customer_type[".allSearchFields"][] = "name";
	$tdataroyal_customer_type[".allSearchFields"][] = "sort";
	$tdataroyal_customer_type[".allSearchFields"][] = "updated_by";
	$tdataroyal_customer_type[".allSearchFields"][] = "updated_at";
	$tdataroyal_customer_type[".allSearchFields"][] = "created_by";
	$tdataroyal_customer_type[".allSearchFields"][] = "created_at";
	

$tdataroyal_customer_type[".googleLikeFields"] = array();
$tdataroyal_customer_type[".googleLikeFields"][] = "id";
$tdataroyal_customer_type[".googleLikeFields"][] = "name";
$tdataroyal_customer_type[".googleLikeFields"][] = "sort";
$tdataroyal_customer_type[".googleLikeFields"][] = "updated_by";
$tdataroyal_customer_type[".googleLikeFields"][] = "updated_at";
$tdataroyal_customer_type[".googleLikeFields"][] = "created_by";
$tdataroyal_customer_type[".googleLikeFields"][] = "created_at";


$tdataroyal_customer_type[".advSearchFields"] = array();
$tdataroyal_customer_type[".advSearchFields"][] = "id";
$tdataroyal_customer_type[".advSearchFields"][] = "name";
$tdataroyal_customer_type[".advSearchFields"][] = "sort";
$tdataroyal_customer_type[".advSearchFields"][] = "updated_by";
$tdataroyal_customer_type[".advSearchFields"][] = "updated_at";
$tdataroyal_customer_type[".advSearchFields"][] = "created_by";
$tdataroyal_customer_type[".advSearchFields"][] = "created_at";

$tdataroyal_customer_type[".tableType"] = "list";

$tdataroyal_customer_type[".printerPageOrientation"] = 0;
$tdataroyal_customer_type[".nPrinterPageScale"] = 100;

$tdataroyal_customer_type[".nPrinterSplitRecords"] = 40;

$tdataroyal_customer_type[".nPrinterPDFSplitRecords"] = 40;



$tdataroyal_customer_type[".geocodingEnabled"] = false;





$tdataroyal_customer_type[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataroyal_customer_type[".pageSize"] = 20;

$tdataroyal_customer_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataroyal_customer_type[".strOrderBy"] = $tstrOrderBy;

$tdataroyal_customer_type[".orderindexes"] = array();

$tdataroyal_customer_type[".sqlHead"] = "SELECT `id`,  	`name`,  	`sort`,  	`updated_by`,  	`updated_at`,  	`created_by`,  	`created_at`";
$tdataroyal_customer_type[".sqlFrom"] = "FROM `royal_customer_type`";
$tdataroyal_customer_type[".sqlWhereExpr"] = "";
$tdataroyal_customer_type[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataroyal_customer_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataroyal_customer_type[".arrGroupsPerPage"] = $arrGPP;

$tdataroyal_customer_type[".highlightSearchResults"] = true;

$tableKeysroyal_customer_type = array();
$tableKeysroyal_customer_type[] = "id";
$tdataroyal_customer_type[".Keys"] = $tableKeysroyal_customer_type;

$tdataroyal_customer_type[".listFields"] = array();
$tdataroyal_customer_type[".listFields"][] = "id";
$tdataroyal_customer_type[".listFields"][] = "name";
$tdataroyal_customer_type[".listFields"][] = "sort";
$tdataroyal_customer_type[".listFields"][] = "updated_by";
$tdataroyal_customer_type[".listFields"][] = "updated_at";
$tdataroyal_customer_type[".listFields"][] = "created_by";
$tdataroyal_customer_type[".listFields"][] = "created_at";

$tdataroyal_customer_type[".hideMobileList"] = array();


$tdataroyal_customer_type[".viewFields"] = array();

$tdataroyal_customer_type[".addFields"] = array();

$tdataroyal_customer_type[".masterListFields"] = array();
$tdataroyal_customer_type[".masterListFields"][] = "id";
$tdataroyal_customer_type[".masterListFields"][] = "name";
$tdataroyal_customer_type[".masterListFields"][] = "sort";
$tdataroyal_customer_type[".masterListFields"][] = "updated_by";
$tdataroyal_customer_type[".masterListFields"][] = "updated_at";
$tdataroyal_customer_type[".masterListFields"][] = "created_by";
$tdataroyal_customer_type[".masterListFields"][] = "created_at";

$tdataroyal_customer_type[".inlineAddFields"] = array();
$tdataroyal_customer_type[".inlineAddFields"][] = "name";
$tdataroyal_customer_type[".inlineAddFields"][] = "sort";
$tdataroyal_customer_type[".inlineAddFields"][] = "updated_by";
$tdataroyal_customer_type[".inlineAddFields"][] = "updated_at";
$tdataroyal_customer_type[".inlineAddFields"][] = "created_by";
$tdataroyal_customer_type[".inlineAddFields"][] = "created_at";

$tdataroyal_customer_type[".editFields"] = array();

$tdataroyal_customer_type[".inlineEditFields"] = array();
$tdataroyal_customer_type[".inlineEditFields"][] = "name";
$tdataroyal_customer_type[".inlineEditFields"][] = "sort";
$tdataroyal_customer_type[".inlineEditFields"][] = "updated_by";
$tdataroyal_customer_type[".inlineEditFields"][] = "updated_at";
$tdataroyal_customer_type[".inlineEditFields"][] = "created_by";
$tdataroyal_customer_type[".inlineEditFields"][] = "created_at";

$tdataroyal_customer_type[".updateSelectedFields"] = array();


$tdataroyal_customer_type[".exportFields"] = array();
$tdataroyal_customer_type[".exportFields"][] = "id";
$tdataroyal_customer_type[".exportFields"][] = "name";
$tdataroyal_customer_type[".exportFields"][] = "sort";
$tdataroyal_customer_type[".exportFields"][] = "updated_by";
$tdataroyal_customer_type[".exportFields"][] = "updated_at";
$tdataroyal_customer_type[".exportFields"][] = "created_by";
$tdataroyal_customer_type[".exportFields"][] = "created_at";

$tdataroyal_customer_type[".importFields"] = array();
$tdataroyal_customer_type[".importFields"][] = "id";
$tdataroyal_customer_type[".importFields"][] = "name";
$tdataroyal_customer_type[".importFields"][] = "sort";
$tdataroyal_customer_type[".importFields"][] = "updated_by";
$tdataroyal_customer_type[".importFields"][] = "updated_at";
$tdataroyal_customer_type[".importFields"][] = "created_by";
$tdataroyal_customer_type[".importFields"][] = "created_at";

$tdataroyal_customer_type[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "royal_customer_type";
	$fdata["Label"] = GetFieldLabel("royal_customer_type","id");
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




	$tdataroyal_customer_type["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "royal_customer_type";
	$fdata["Label"] = GetFieldLabel("royal_customer_type","name");
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




	$tdataroyal_customer_type["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "royal_customer_type";
	$fdata["Label"] = GetFieldLabel("royal_customer_type","sort");
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




	$tdataroyal_customer_type["sort"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "royal_customer_type";
	$fdata["Label"] = GetFieldLabel("royal_customer_type","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdataroyal_customer_type["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "royal_customer_type";
	$fdata["Label"] = GetFieldLabel("royal_customer_type","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdataroyal_customer_type["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "royal_customer_type";
	$fdata["Label"] = GetFieldLabel("royal_customer_type","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdataroyal_customer_type["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "royal_customer_type";
	$fdata["Label"] = GetFieldLabel("royal_customer_type","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdataroyal_customer_type["created_at"] = $fdata;


$tables_data["royal_customer_type"]=&$tdataroyal_customer_type;
$field_labels["royal_customer_type"] = &$fieldLabelsroyal_customer_type;
$fieldToolTips["royal_customer_type"] = &$fieldToolTipsroyal_customer_type;
$placeHolders["royal_customer_type"] = &$placeHoldersroyal_customer_type;
$page_titles["royal_customer_type"] = &$pageTitlesroyal_customer_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["royal_customer_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["royal_customer_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_royal_customer_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`sort`,  	`updated_by`,  	`updated_at`,  	`created_by`,  	`created_at`";
$proto0["m_strFrom"] = "FROM `royal_customer_type`";
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
	"m_strTable" => "royal_customer_type",
	"m_srcTableName" => "royal_customer_type"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "royal_customer_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "royal_customer_type",
	"m_srcTableName" => "royal_customer_type"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "royal_customer_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "royal_customer_type",
	"m_srcTableName" => "royal_customer_type"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "royal_customer_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "royal_customer_type",
	"m_srcTableName" => "royal_customer_type"
));

$proto12["m_sql"] = "`updated_by`";
$proto12["m_srcTableName"] = "royal_customer_type";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "royal_customer_type",
	"m_srcTableName" => "royal_customer_type"
));

$proto14["m_sql"] = "`updated_at`";
$proto14["m_srcTableName"] = "royal_customer_type";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "royal_customer_type",
	"m_srcTableName" => "royal_customer_type"
));

$proto16["m_sql"] = "`created_by`";
$proto16["m_srcTableName"] = "royal_customer_type";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "royal_customer_type",
	"m_srcTableName" => "royal_customer_type"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "royal_customer_type";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "royal_customer_type";
$proto21["m_srcTableName"] = "royal_customer_type";
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
$proto20["m_sql"] = "`royal_customer_type`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "royal_customer_type";
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
$proto0["m_srcTableName"]="royal_customer_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_royal_customer_type = createSqlQuery_royal_customer_type();


	
		;

							

$tdataroyal_customer_type[".sqlquery"] = $queryData_royal_customer_type;

$tableEvents["royal_customer_type"] = new eventsBase;
$tdataroyal_customer_type[".hasEvents"] = false;

?>