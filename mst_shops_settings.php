<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_shops = array();
	$tdatamst_shops[".truncateText"] = true;
	$tdatamst_shops[".NumberOfChars"] = 80;
	$tdatamst_shops[".ShortName"] = "mst_shops";
	$tdatamst_shops[".OwnerID"] = "";
	$tdatamst_shops[".OriginalTable"] = "mst_shops";

//	field labels
$fieldLabelsmst_shops = array();
$fieldToolTipsmst_shops = array();
$pageTitlesmst_shops = array();
$placeHoldersmst_shops = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_shops["Japanese"] = array();
	$fieldToolTipsmst_shops["Japanese"] = array();
	$placeHoldersmst_shops["Japanese"] = array();
	$pageTitlesmst_shops["Japanese"] = array();
	$fieldLabelsmst_shops["Japanese"]["shop_id"] = "Shop Id";
	$fieldToolTipsmst_shops["Japanese"]["shop_id"] = "";
	$placeHoldersmst_shops["Japanese"]["shop_id"] = "";
	$fieldLabelsmst_shops["Japanese"]["shop_name"] = "Shop Name";
	$fieldToolTipsmst_shops["Japanese"]["shop_name"] = "";
	$placeHoldersmst_shops["Japanese"]["shop_name"] = "";
	$fieldLabelsmst_shops["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsmst_shops["Japanese"]["created_at"] = "";
	$placeHoldersmst_shops["Japanese"]["created_at"] = "";
	$fieldLabelsmst_shops["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsmst_shops["Japanese"]["created_by"] = "";
	$placeHoldersmst_shops["Japanese"]["created_by"] = "";
	$fieldLabelsmst_shops["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_shops["Japanese"]["updated_at"] = "";
	$placeHoldersmst_shops["Japanese"]["updated_at"] = "";
	$fieldLabelsmst_shops["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_shops["Japanese"]["updated_by"] = "";
	$placeHoldersmst_shops["Japanese"]["updated_by"] = "";
	if (count($fieldToolTipsmst_shops["Japanese"]))
		$tdatamst_shops[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_shops[""] = array();
	$fieldToolTipsmst_shops[""] = array();
	$placeHoldersmst_shops[""] = array();
	$pageTitlesmst_shops[""] = array();
	$fieldLabelsmst_shops[""]["shop_id"] = "Shop Id";
	$fieldToolTipsmst_shops[""]["shop_id"] = "";
	$placeHoldersmst_shops[""]["shop_id"] = "";
	$fieldLabelsmst_shops[""]["shop_name"] = "Shop Name";
	$fieldToolTipsmst_shops[""]["shop_name"] = "";
	$placeHoldersmst_shops[""]["shop_name"] = "";
	$fieldLabelsmst_shops[""]["created_at"] = "Created At";
	$fieldToolTipsmst_shops[""]["created_at"] = "";
	$placeHoldersmst_shops[""]["created_at"] = "";
	$fieldLabelsmst_shops[""]["created_by"] = "Created By";
	$fieldToolTipsmst_shops[""]["created_by"] = "";
	$placeHoldersmst_shops[""]["created_by"] = "";
	$fieldLabelsmst_shops[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_shops[""]["updated_at"] = "";
	$placeHoldersmst_shops[""]["updated_at"] = "";
	$fieldLabelsmst_shops[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_shops[""]["updated_by"] = "";
	$placeHoldersmst_shops[""]["updated_by"] = "";
	if (count($fieldToolTipsmst_shops[""]))
		$tdatamst_shops[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_shops["English"] = array();
	$fieldToolTipsmst_shops["English"] = array();
	$placeHoldersmst_shops["English"] = array();
	$pageTitlesmst_shops["English"] = array();
	$fieldLabelsmst_shops["English"]["shop_id"] = "Shop Id";
	$fieldToolTipsmst_shops["English"]["shop_id"] = "";
	$placeHoldersmst_shops["English"]["shop_id"] = "";
	$fieldLabelsmst_shops["English"]["shop_name"] = "Shop Name";
	$fieldToolTipsmst_shops["English"]["shop_name"] = "";
	$placeHoldersmst_shops["English"]["shop_name"] = "";
	$fieldLabelsmst_shops["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_shops["English"]["created_at"] = "";
	$placeHoldersmst_shops["English"]["created_at"] = "";
	$fieldLabelsmst_shops["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_shops["English"]["created_by"] = "";
	$placeHoldersmst_shops["English"]["created_by"] = "";
	$fieldLabelsmst_shops["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_shops["English"]["updated_at"] = "";
	$placeHoldersmst_shops["English"]["updated_at"] = "";
	$fieldLabelsmst_shops["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_shops["English"]["updated_by"] = "";
	$placeHoldersmst_shops["English"]["updated_by"] = "";
	if (count($fieldToolTipsmst_shops["English"]))
		$tdatamst_shops[".isUseToolTips"] = true;
}


	$tdatamst_shops[".NCSearch"] = true;



$tdatamst_shops[".shortTableName"] = "mst_shops";
$tdatamst_shops[".nSecOptions"] = 0;
$tdatamst_shops[".recsPerRowPrint"] = 1;
$tdatamst_shops[".mainTableOwnerID"] = "";
$tdatamst_shops[".moveNext"] = 1;
$tdatamst_shops[".entityType"] = 0;

$tdatamst_shops[".strOriginalTableName"] = "mst_shops";

	



$tdatamst_shops[".showAddInPopup"] = false;

$tdatamst_shops[".showEditInPopup"] = false;

$tdatamst_shops[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_shops[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_shops[".fieldsForRegister"] = array();

$tdatamst_shops[".listAjax"] = false;

	$tdatamst_shops[".audit"] = true;

	$tdatamst_shops[".locking"] = false;



$tdatamst_shops[".list"] = true;

$tdatamst_shops[".inlineEdit"] = true;


$tdatamst_shops[".reorderRecordsByHeader"] = true;



$tdatamst_shops[".inlineAdd"] = true;

$tdatamst_shops[".import"] = true;

$tdatamst_shops[".exportTo"] = true;


$tdatamst_shops[".delete"] = true;

$tdatamst_shops[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_shops[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_shops[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_shops[".searchSaving"] = false;
//

$tdatamst_shops[".showSearchPanel"] = true;
		$tdatamst_shops[".flexibleSearch"] = true;

$tdatamst_shops[".isUseAjaxSuggest"] = true;

$tdatamst_shops[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_shops[".ajaxCodeSnippetAdded"] = false;

$tdatamst_shops[".buttonsAdded"] = false;

$tdatamst_shops[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_shops[".isUseTimeForSearch"] = false;





$tdatamst_shops[".allSearchFields"] = array();
$tdatamst_shops[".filterFields"] = array();
$tdatamst_shops[".requiredSearchFields"] = array();

$tdatamst_shops[".allSearchFields"][] = "shop_id";
	$tdatamst_shops[".allSearchFields"][] = "shop_name";
	$tdatamst_shops[".allSearchFields"][] = "created_at";
	$tdatamst_shops[".allSearchFields"][] = "created_by";
	$tdatamst_shops[".allSearchFields"][] = "updated_at";
	$tdatamst_shops[".allSearchFields"][] = "updated_by";
	

$tdatamst_shops[".googleLikeFields"] = array();
$tdatamst_shops[".googleLikeFields"][] = "shop_id";
$tdatamst_shops[".googleLikeFields"][] = "shop_name";
$tdatamst_shops[".googleLikeFields"][] = "created_at";
$tdatamst_shops[".googleLikeFields"][] = "created_by";
$tdatamst_shops[".googleLikeFields"][] = "updated_at";
$tdatamst_shops[".googleLikeFields"][] = "updated_by";


$tdatamst_shops[".advSearchFields"] = array();
$tdatamst_shops[".advSearchFields"][] = "shop_id";
$tdatamst_shops[".advSearchFields"][] = "shop_name";
$tdatamst_shops[".advSearchFields"][] = "created_at";
$tdatamst_shops[".advSearchFields"][] = "created_by";
$tdatamst_shops[".advSearchFields"][] = "updated_at";
$tdatamst_shops[".advSearchFields"][] = "updated_by";

$tdatamst_shops[".tableType"] = "list";

$tdatamst_shops[".printerPageOrientation"] = 0;
$tdatamst_shops[".nPrinterPageScale"] = 100;

$tdatamst_shops[".nPrinterSplitRecords"] = 40;

$tdatamst_shops[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_shops[".geocodingEnabled"] = false;





$tdatamst_shops[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_shops[".pageSize"] = 20;

$tdatamst_shops[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_shops[".strOrderBy"] = $tstrOrderBy;

$tdatamst_shops[".orderindexes"] = array();

$tdatamst_shops[".sqlHead"] = "SELECT `shop_id`,  	`shop_name`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`";
$tdatamst_shops[".sqlFrom"] = "FROM `mst_shops`";
$tdatamst_shops[".sqlWhereExpr"] = "";
$tdatamst_shops[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_shops[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_shops[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_shops[".highlightSearchResults"] = true;

$tableKeysmst_shops = array();
$tableKeysmst_shops[] = "shop_id";
$tdatamst_shops[".Keys"] = $tableKeysmst_shops;

$tdatamst_shops[".listFields"] = array();
$tdatamst_shops[".listFields"][] = "shop_id";
$tdatamst_shops[".listFields"][] = "shop_name";
$tdatamst_shops[".listFields"][] = "created_at";
$tdatamst_shops[".listFields"][] = "created_by";
$tdatamst_shops[".listFields"][] = "updated_at";
$tdatamst_shops[".listFields"][] = "updated_by";

$tdatamst_shops[".hideMobileList"] = array();


$tdatamst_shops[".viewFields"] = array();

$tdatamst_shops[".addFields"] = array();

$tdatamst_shops[".masterListFields"] = array();
$tdatamst_shops[".masterListFields"][] = "shop_id";
$tdatamst_shops[".masterListFields"][] = "shop_name";
$tdatamst_shops[".masterListFields"][] = "created_at";
$tdatamst_shops[".masterListFields"][] = "created_by";
$tdatamst_shops[".masterListFields"][] = "updated_at";
$tdatamst_shops[".masterListFields"][] = "updated_by";

$tdatamst_shops[".inlineAddFields"] = array();
$tdatamst_shops[".inlineAddFields"][] = "shop_name";

$tdatamst_shops[".editFields"] = array();

$tdatamst_shops[".inlineEditFields"] = array();
$tdatamst_shops[".inlineEditFields"][] = "shop_name";

$tdatamst_shops[".updateSelectedFields"] = array();


$tdatamst_shops[".exportFields"] = array();
$tdatamst_shops[".exportFields"][] = "shop_id";
$tdatamst_shops[".exportFields"][] = "shop_name";
$tdatamst_shops[".exportFields"][] = "created_at";
$tdatamst_shops[".exportFields"][] = "created_by";
$tdatamst_shops[".exportFields"][] = "updated_at";
$tdatamst_shops[".exportFields"][] = "updated_by";

$tdatamst_shops[".importFields"] = array();
$tdatamst_shops[".importFields"][] = "shop_id";
$tdatamst_shops[".importFields"][] = "shop_name";

$tdatamst_shops[".printFields"] = array();

//	shop_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "shop_id";
	$fdata["GoodName"] = "shop_id";
	$fdata["ownerTable"] = "mst_shops";
	$fdata["Label"] = GetFieldLabel("mst_shops","shop_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shop_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shop_id`";

	
	
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




	$tdatamst_shops["shop_id"] = $fdata;
//	shop_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "shop_name";
	$fdata["GoodName"] = "shop_name";
	$fdata["ownerTable"] = "mst_shops";
	$fdata["Label"] = GetFieldLabel("mst_shops","shop_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shop_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shop_name`";

	
	
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




	$tdatamst_shops["shop_name"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_shops";
	$fdata["Label"] = GetFieldLabel("mst_shops","created_at");
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




	$tdatamst_shops["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_shops";
	$fdata["Label"] = GetFieldLabel("mst_shops","created_by");
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




	$tdatamst_shops["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_shops";
	$fdata["Label"] = GetFieldLabel("mst_shops","updated_at");
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




	$tdatamst_shops["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_shops";
	$fdata["Label"] = GetFieldLabel("mst_shops","updated_by");
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




	$tdatamst_shops["updated_by"] = $fdata;


$tables_data["mst_shops"]=&$tdatamst_shops;
$field_labels["mst_shops"] = &$fieldLabelsmst_shops;
$fieldToolTips["mst_shops"] = &$fieldToolTipsmst_shops;
$placeHolders["mst_shops"] = &$placeHoldersmst_shops;
$page_titles["mst_shops"] = &$pageTitlesmst_shops;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_shops"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_shops"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_shops()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`shop_id`,  	`shop_name`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`";
$proto0["m_strFrom"] = "FROM `mst_shops`";
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
	"m_strName" => "shop_id",
	"m_strTable" => "mst_shops",
	"m_srcTableName" => "mst_shops"
));

$proto6["m_sql"] = "`shop_id`";
$proto6["m_srcTableName"] = "mst_shops";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "shop_name",
	"m_strTable" => "mst_shops",
	"m_srcTableName" => "mst_shops"
));

$proto8["m_sql"] = "`shop_name`";
$proto8["m_srcTableName"] = "mst_shops";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_shops",
	"m_srcTableName" => "mst_shops"
));

$proto10["m_sql"] = "`created_at`";
$proto10["m_srcTableName"] = "mst_shops";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_shops",
	"m_srcTableName" => "mst_shops"
));

$proto12["m_sql"] = "`created_by`";
$proto12["m_srcTableName"] = "mst_shops";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_shops",
	"m_srcTableName" => "mst_shops"
));

$proto14["m_sql"] = "`updated_at`";
$proto14["m_srcTableName"] = "mst_shops";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_shops",
	"m_srcTableName" => "mst_shops"
));

$proto16["m_sql"] = "`updated_by`";
$proto16["m_srcTableName"] = "mst_shops";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "mst_shops";
$proto19["m_srcTableName"] = "mst_shops";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "shop_id";
$proto19["m_columns"][] = "shop_name";
$proto19["m_columns"][] = "created_at";
$proto19["m_columns"][] = "created_by";
$proto19["m_columns"][] = "updated_at";
$proto19["m_columns"][] = "updated_by";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`mst_shops`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "mst_shops";
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
$proto0["m_srcTableName"]="mst_shops";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_shops = createSqlQuery_mst_shops();


	
		;

						

$tdatamst_shops[".sqlquery"] = $queryData_mst_shops;

$tableEvents["mst_shops"] = new eventsBase;
$tdatamst_shops[".hasEvents"] = false;

?>