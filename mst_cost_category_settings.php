<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_cost_category = array();
	$tdatamst_cost_category[".truncateText"] = true;
	$tdatamst_cost_category[".NumberOfChars"] = 80;
	$tdatamst_cost_category[".ShortName"] = "mst_cost_category";
	$tdatamst_cost_category[".OwnerID"] = "";
	$tdatamst_cost_category[".OriginalTable"] = "mst_cost_category";

//	field labels
$fieldLabelsmst_cost_category = array();
$fieldToolTipsmst_cost_category = array();
$pageTitlesmst_cost_category = array();
$placeHoldersmst_cost_category = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_cost_category["Japanese"] = array();
	$fieldToolTipsmst_cost_category["Japanese"] = array();
	$placeHoldersmst_cost_category["Japanese"] = array();
	$pageTitlesmst_cost_category["Japanese"] = array();
	$fieldLabelsmst_cost_category["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_cost_category["Japanese"]["id"] = "";
	$placeHoldersmst_cost_category["Japanese"]["id"] = "";
	$fieldLabelsmst_cost_category["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_cost_category["Japanese"]["name"] = "";
	$placeHoldersmst_cost_category["Japanese"]["name"] = "";
	$fieldLabelsmst_cost_category["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsmst_cost_category["Japanese"]["created_at"] = "";
	$placeHoldersmst_cost_category["Japanese"]["created_at"] = "";
	$fieldLabelsmst_cost_category["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsmst_cost_category["Japanese"]["created_by"] = "";
	$placeHoldersmst_cost_category["Japanese"]["created_by"] = "";
	$fieldLabelsmst_cost_category["Japanese"]["upadated_at"] = "更新日";
	$fieldToolTipsmst_cost_category["Japanese"]["upadated_at"] = "";
	$placeHoldersmst_cost_category["Japanese"]["upadated_at"] = "";
	$fieldLabelsmst_cost_category["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsmst_cost_category["Japanese"]["updated_by"] = "";
	$placeHoldersmst_cost_category["Japanese"]["updated_by"] = "";
	if (count($fieldToolTipsmst_cost_category["Japanese"]))
		$tdatamst_cost_category[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_cost_category[""] = array();
	$fieldToolTipsmst_cost_category[""] = array();
	$placeHoldersmst_cost_category[""] = array();
	$pageTitlesmst_cost_category[""] = array();
	$fieldLabelsmst_cost_category[""]["id"] = "Id";
	$fieldToolTipsmst_cost_category[""]["id"] = "";
	$placeHoldersmst_cost_category[""]["id"] = "";
	$fieldLabelsmst_cost_category[""]["name"] = "Name";
	$fieldToolTipsmst_cost_category[""]["name"] = "";
	$placeHoldersmst_cost_category[""]["name"] = "";
	$fieldLabelsmst_cost_category[""]["created_at"] = "Created At";
	$fieldToolTipsmst_cost_category[""]["created_at"] = "";
	$placeHoldersmst_cost_category[""]["created_at"] = "";
	$fieldLabelsmst_cost_category[""]["created_by"] = "Created By";
	$fieldToolTipsmst_cost_category[""]["created_by"] = "";
	$placeHoldersmst_cost_category[""]["created_by"] = "";
	$fieldLabelsmst_cost_category[""]["upadated_at"] = "Upadated At";
	$fieldToolTipsmst_cost_category[""]["upadated_at"] = "";
	$placeHoldersmst_cost_category[""]["upadated_at"] = "";
	$fieldLabelsmst_cost_category[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_cost_category[""]["updated_by"] = "";
	$placeHoldersmst_cost_category[""]["updated_by"] = "";
	if (count($fieldToolTipsmst_cost_category[""]))
		$tdatamst_cost_category[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_cost_category["English"] = array();
	$fieldToolTipsmst_cost_category["English"] = array();
	$placeHoldersmst_cost_category["English"] = array();
	$pageTitlesmst_cost_category["English"] = array();
	$fieldLabelsmst_cost_category["English"]["id"] = "Id";
	$fieldToolTipsmst_cost_category["English"]["id"] = "";
	$placeHoldersmst_cost_category["English"]["id"] = "";
	$fieldLabelsmst_cost_category["English"]["name"] = "Name";
	$fieldToolTipsmst_cost_category["English"]["name"] = "";
	$placeHoldersmst_cost_category["English"]["name"] = "";
	$fieldLabelsmst_cost_category["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_cost_category["English"]["created_at"] = "";
	$placeHoldersmst_cost_category["English"]["created_at"] = "";
	$fieldLabelsmst_cost_category["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_cost_category["English"]["created_by"] = "";
	$placeHoldersmst_cost_category["English"]["created_by"] = "";
	$fieldLabelsmst_cost_category["English"]["upadated_at"] = "Upadated At";
	$fieldToolTipsmst_cost_category["English"]["upadated_at"] = "";
	$placeHoldersmst_cost_category["English"]["upadated_at"] = "";
	$fieldLabelsmst_cost_category["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_cost_category["English"]["updated_by"] = "";
	$placeHoldersmst_cost_category["English"]["updated_by"] = "";
	if (count($fieldToolTipsmst_cost_category["English"]))
		$tdatamst_cost_category[".isUseToolTips"] = true;
}


	$tdatamst_cost_category[".NCSearch"] = true;



$tdatamst_cost_category[".shortTableName"] = "mst_cost_category";
$tdatamst_cost_category[".nSecOptions"] = 0;
$tdatamst_cost_category[".recsPerRowPrint"] = 1;
$tdatamst_cost_category[".mainTableOwnerID"] = "";
$tdatamst_cost_category[".moveNext"] = 1;
$tdatamst_cost_category[".entityType"] = 0;

$tdatamst_cost_category[".strOriginalTableName"] = "mst_cost_category";

	



$tdatamst_cost_category[".showAddInPopup"] = false;

$tdatamst_cost_category[".showEditInPopup"] = false;

$tdatamst_cost_category[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_cost_category[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_cost_category[".fieldsForRegister"] = array();

$tdatamst_cost_category[".listAjax"] = false;

	$tdatamst_cost_category[".audit"] = true;

	$tdatamst_cost_category[".locking"] = false;



$tdatamst_cost_category[".list"] = true;

$tdatamst_cost_category[".inlineEdit"] = true;


$tdatamst_cost_category[".reorderRecordsByHeader"] = true;



$tdatamst_cost_category[".inlineAdd"] = true;

$tdatamst_cost_category[".import"] = true;

$tdatamst_cost_category[".exportTo"] = true;


$tdatamst_cost_category[".delete"] = true;

$tdatamst_cost_category[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_cost_category[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_cost_category[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_cost_category[".searchSaving"] = false;
//

$tdatamst_cost_category[".showSearchPanel"] = true;
		$tdatamst_cost_category[".flexibleSearch"] = true;

$tdatamst_cost_category[".isUseAjaxSuggest"] = true;

$tdatamst_cost_category[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_cost_category[".ajaxCodeSnippetAdded"] = false;

$tdatamst_cost_category[".buttonsAdded"] = false;

$tdatamst_cost_category[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_cost_category[".isUseTimeForSearch"] = false;





$tdatamst_cost_category[".allSearchFields"] = array();
$tdatamst_cost_category[".filterFields"] = array();
$tdatamst_cost_category[".requiredSearchFields"] = array();

$tdatamst_cost_category[".allSearchFields"][] = "id";
	$tdatamst_cost_category[".allSearchFields"][] = "name";
	$tdatamst_cost_category[".allSearchFields"][] = "created_at";
	$tdatamst_cost_category[".allSearchFields"][] = "created_by";
	$tdatamst_cost_category[".allSearchFields"][] = "upadated_at";
	$tdatamst_cost_category[".allSearchFields"][] = "updated_by";
	

$tdatamst_cost_category[".googleLikeFields"] = array();
$tdatamst_cost_category[".googleLikeFields"][] = "id";
$tdatamst_cost_category[".googleLikeFields"][] = "name";
$tdatamst_cost_category[".googleLikeFields"][] = "created_at";
$tdatamst_cost_category[".googleLikeFields"][] = "created_by";
$tdatamst_cost_category[".googleLikeFields"][] = "upadated_at";
$tdatamst_cost_category[".googleLikeFields"][] = "updated_by";


$tdatamst_cost_category[".advSearchFields"] = array();
$tdatamst_cost_category[".advSearchFields"][] = "id";
$tdatamst_cost_category[".advSearchFields"][] = "name";
$tdatamst_cost_category[".advSearchFields"][] = "created_at";
$tdatamst_cost_category[".advSearchFields"][] = "created_by";
$tdatamst_cost_category[".advSearchFields"][] = "upadated_at";
$tdatamst_cost_category[".advSearchFields"][] = "updated_by";

$tdatamst_cost_category[".tableType"] = "list";

$tdatamst_cost_category[".printerPageOrientation"] = 0;
$tdatamst_cost_category[".nPrinterPageScale"] = 100;

$tdatamst_cost_category[".nPrinterSplitRecords"] = 40;

$tdatamst_cost_category[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_cost_category[".geocodingEnabled"] = false;





$tdatamst_cost_category[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_cost_category[".pageSize"] = 20;

$tdatamst_cost_category[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_cost_category[".strOrderBy"] = $tstrOrderBy;

$tdatamst_cost_category[".orderindexes"] = array();

$tdatamst_cost_category[".sqlHead"] = "SELECT `id`,  	`name`,  	`created_at`,  	`created_by`,  	`upadated_at`,  	`updated_by`";
$tdatamst_cost_category[".sqlFrom"] = "FROM `mst_cost_category`";
$tdatamst_cost_category[".sqlWhereExpr"] = "";
$tdatamst_cost_category[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_cost_category[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_cost_category[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_cost_category[".highlightSearchResults"] = true;

$tableKeysmst_cost_category = array();
$tableKeysmst_cost_category[] = "id";
$tdatamst_cost_category[".Keys"] = $tableKeysmst_cost_category;

$tdatamst_cost_category[".listFields"] = array();
$tdatamst_cost_category[".listFields"][] = "id";
$tdatamst_cost_category[".listFields"][] = "name";
$tdatamst_cost_category[".listFields"][] = "created_at";
$tdatamst_cost_category[".listFields"][] = "created_by";
$tdatamst_cost_category[".listFields"][] = "upadated_at";
$tdatamst_cost_category[".listFields"][] = "updated_by";

$tdatamst_cost_category[".hideMobileList"] = array();


$tdatamst_cost_category[".viewFields"] = array();

$tdatamst_cost_category[".addFields"] = array();

$tdatamst_cost_category[".masterListFields"] = array();
$tdatamst_cost_category[".masterListFields"][] = "id";
$tdatamst_cost_category[".masterListFields"][] = "name";
$tdatamst_cost_category[".masterListFields"][] = "created_at";
$tdatamst_cost_category[".masterListFields"][] = "created_by";
$tdatamst_cost_category[".masterListFields"][] = "upadated_at";
$tdatamst_cost_category[".masterListFields"][] = "updated_by";

$tdatamst_cost_category[".inlineAddFields"] = array();
$tdatamst_cost_category[".inlineAddFields"][] = "name";

$tdatamst_cost_category[".editFields"] = array();

$tdatamst_cost_category[".inlineEditFields"] = array();
$tdatamst_cost_category[".inlineEditFields"][] = "name";

$tdatamst_cost_category[".updateSelectedFields"] = array();


$tdatamst_cost_category[".exportFields"] = array();
$tdatamst_cost_category[".exportFields"][] = "id";
$tdatamst_cost_category[".exportFields"][] = "name";
$tdatamst_cost_category[".exportFields"][] = "created_at";
$tdatamst_cost_category[".exportFields"][] = "created_by";
$tdatamst_cost_category[".exportFields"][] = "upadated_at";
$tdatamst_cost_category[".exportFields"][] = "updated_by";

$tdatamst_cost_category[".importFields"] = array();
$tdatamst_cost_category[".importFields"][] = "id";
$tdatamst_cost_category[".importFields"][] = "name";
$tdatamst_cost_category[".importFields"][] = "created_at";
$tdatamst_cost_category[".importFields"][] = "created_by";
$tdatamst_cost_category[".importFields"][] = "upadated_at";
$tdatamst_cost_category[".importFields"][] = "updated_by";

$tdatamst_cost_category[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_cost_category";
	$fdata["Label"] = GetFieldLabel("mst_cost_category","id");
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




	$tdatamst_cost_category["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_cost_category";
	$fdata["Label"] = GetFieldLabel("mst_cost_category","name");
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




	$tdatamst_cost_category["name"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_cost_category";
	$fdata["Label"] = GetFieldLabel("mst_cost_category","created_at");
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




	$tdatamst_cost_category["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_cost_category";
	$fdata["Label"] = GetFieldLabel("mst_cost_category","created_by");
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




	$tdatamst_cost_category["created_by"] = $fdata;
//	upadated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "upadated_at";
	$fdata["GoodName"] = "upadated_at";
	$fdata["ownerTable"] = "mst_cost_category";
	$fdata["Label"] = GetFieldLabel("mst_cost_category","upadated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "upadated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`upadated_at`";

	
	
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




	$tdatamst_cost_category["upadated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_cost_category";
	$fdata["Label"] = GetFieldLabel("mst_cost_category","updated_by");
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




	$tdatamst_cost_category["updated_by"] = $fdata;


$tables_data["mst_cost_category"]=&$tdatamst_cost_category;
$field_labels["mst_cost_category"] = &$fieldLabelsmst_cost_category;
$fieldToolTips["mst_cost_category"] = &$fieldToolTipsmst_cost_category;
$placeHolders["mst_cost_category"] = &$placeHoldersmst_cost_category;
$page_titles["mst_cost_category"] = &$pageTitlesmst_cost_category;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_cost_category"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_cost_category"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_cost_category()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`created_at`,  	`created_by`,  	`upadated_at`,  	`updated_by`";
$proto0["m_strFrom"] = "FROM `mst_cost_category`";
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
	"m_strTable" => "mst_cost_category",
	"m_srcTableName" => "mst_cost_category"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_cost_category";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_cost_category",
	"m_srcTableName" => "mst_cost_category"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_cost_category";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_cost_category",
	"m_srcTableName" => "mst_cost_category"
));

$proto10["m_sql"] = "`created_at`";
$proto10["m_srcTableName"] = "mst_cost_category";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_cost_category",
	"m_srcTableName" => "mst_cost_category"
));

$proto12["m_sql"] = "`created_by`";
$proto12["m_srcTableName"] = "mst_cost_category";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "upadated_at",
	"m_strTable" => "mst_cost_category",
	"m_srcTableName" => "mst_cost_category"
));

$proto14["m_sql"] = "`upadated_at`";
$proto14["m_srcTableName"] = "mst_cost_category";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_cost_category",
	"m_srcTableName" => "mst_cost_category"
));

$proto16["m_sql"] = "`updated_by`";
$proto16["m_srcTableName"] = "mst_cost_category";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "mst_cost_category";
$proto19["m_srcTableName"] = "mst_cost_category";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "name";
$proto19["m_columns"][] = "created_at";
$proto19["m_columns"][] = "created_by";
$proto19["m_columns"][] = "upadated_at";
$proto19["m_columns"][] = "updated_by";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`mst_cost_category`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "mst_cost_category";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mst_cost_category";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_cost_category = createSqlQuery_mst_cost_category();


	
		;

						

$tdatamst_cost_category[".sqlquery"] = $queryData_mst_cost_category;

$tableEvents["mst_cost_category"] = new eventsBase;
$tdatamst_cost_category[".hasEvents"] = false;

?>