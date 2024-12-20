<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_work_task_statuses = array();
	$tdatamst_work_task_statuses[".truncateText"] = true;
	$tdatamst_work_task_statuses[".NumberOfChars"] = 80;
	$tdatamst_work_task_statuses[".ShortName"] = "mst_work_task_statuses";
	$tdatamst_work_task_statuses[".OwnerID"] = "";
	$tdatamst_work_task_statuses[".OriginalTable"] = "mst_work_task_statuses";

//	field labels
$fieldLabelsmst_work_task_statuses = array();
$fieldToolTipsmst_work_task_statuses = array();
$pageTitlesmst_work_task_statuses = array();
$placeHoldersmst_work_task_statuses = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_work_task_statuses["Japanese"] = array();
	$fieldToolTipsmst_work_task_statuses["Japanese"] = array();
	$placeHoldersmst_work_task_statuses["Japanese"] = array();
	$pageTitlesmst_work_task_statuses["Japanese"] = array();
	$fieldLabelsmst_work_task_statuses["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_work_task_statuses["Japanese"]["id"] = "";
	$placeHoldersmst_work_task_statuses["Japanese"]["id"] = "";
	$fieldLabelsmst_work_task_statuses["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_work_task_statuses["Japanese"]["name"] = "";
	$placeHoldersmst_work_task_statuses["Japanese"]["name"] = "";
	$fieldLabelsmst_work_task_statuses["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_work_task_statuses["Japanese"]["sort"] = "";
	$placeHoldersmst_work_task_statuses["Japanese"]["sort"] = "";
	$fieldLabelsmst_work_task_statuses["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsmst_work_task_statuses["Japanese"]["created_at"] = "";
	$placeHoldersmst_work_task_statuses["Japanese"]["created_at"] = "";
	$fieldLabelsmst_work_task_statuses["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_work_task_statuses["Japanese"]["updated_at"] = "";
	$placeHoldersmst_work_task_statuses["Japanese"]["updated_at"] = "";
	if (count($fieldToolTipsmst_work_task_statuses["Japanese"]))
		$tdatamst_work_task_statuses[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_work_task_statuses[""] = array();
	$fieldToolTipsmst_work_task_statuses[""] = array();
	$placeHoldersmst_work_task_statuses[""] = array();
	$pageTitlesmst_work_task_statuses[""] = array();
	$fieldLabelsmst_work_task_statuses[""]["id"] = "Id";
	$fieldToolTipsmst_work_task_statuses[""]["id"] = "";
	$placeHoldersmst_work_task_statuses[""]["id"] = "";
	$fieldLabelsmst_work_task_statuses[""]["name"] = "Name";
	$fieldToolTipsmst_work_task_statuses[""]["name"] = "";
	$placeHoldersmst_work_task_statuses[""]["name"] = "";
	$fieldLabelsmst_work_task_statuses[""]["sort"] = "Sort";
	$fieldToolTipsmst_work_task_statuses[""]["sort"] = "";
	$placeHoldersmst_work_task_statuses[""]["sort"] = "";
	$fieldLabelsmst_work_task_statuses[""]["created_at"] = "Created At";
	$fieldToolTipsmst_work_task_statuses[""]["created_at"] = "";
	$placeHoldersmst_work_task_statuses[""]["created_at"] = "";
	$fieldLabelsmst_work_task_statuses[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_work_task_statuses[""]["updated_at"] = "";
	$placeHoldersmst_work_task_statuses[""]["updated_at"] = "";
	if (count($fieldToolTipsmst_work_task_statuses[""]))
		$tdatamst_work_task_statuses[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_work_task_statuses["English"] = array();
	$fieldToolTipsmst_work_task_statuses["English"] = array();
	$placeHoldersmst_work_task_statuses["English"] = array();
	$pageTitlesmst_work_task_statuses["English"] = array();
	$fieldLabelsmst_work_task_statuses["English"]["id"] = "Id";
	$fieldToolTipsmst_work_task_statuses["English"]["id"] = "";
	$placeHoldersmst_work_task_statuses["English"]["id"] = "";
	$fieldLabelsmst_work_task_statuses["English"]["name"] = "Name";
	$fieldToolTipsmst_work_task_statuses["English"]["name"] = "";
	$placeHoldersmst_work_task_statuses["English"]["name"] = "";
	$fieldLabelsmst_work_task_statuses["English"]["sort"] = "Sort";
	$fieldToolTipsmst_work_task_statuses["English"]["sort"] = "";
	$placeHoldersmst_work_task_statuses["English"]["sort"] = "";
	$fieldLabelsmst_work_task_statuses["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_work_task_statuses["English"]["created_at"] = "";
	$placeHoldersmst_work_task_statuses["English"]["created_at"] = "";
	$fieldLabelsmst_work_task_statuses["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_work_task_statuses["English"]["updated_at"] = "";
	$placeHoldersmst_work_task_statuses["English"]["updated_at"] = "";
	if (count($fieldToolTipsmst_work_task_statuses["English"]))
		$tdatamst_work_task_statuses[".isUseToolTips"] = true;
}


	$tdatamst_work_task_statuses[".NCSearch"] = true;



$tdatamst_work_task_statuses[".shortTableName"] = "mst_work_task_statuses";
$tdatamst_work_task_statuses[".nSecOptions"] = 0;
$tdatamst_work_task_statuses[".recsPerRowPrint"] = 1;
$tdatamst_work_task_statuses[".mainTableOwnerID"] = "";
$tdatamst_work_task_statuses[".moveNext"] = 1;
$tdatamst_work_task_statuses[".entityType"] = 0;

$tdatamst_work_task_statuses[".strOriginalTableName"] = "mst_work_task_statuses";

	



$tdatamst_work_task_statuses[".showAddInPopup"] = false;

$tdatamst_work_task_statuses[".showEditInPopup"] = false;

$tdatamst_work_task_statuses[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_work_task_statuses[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_work_task_statuses[".fieldsForRegister"] = array();

$tdatamst_work_task_statuses[".listAjax"] = false;

	$tdatamst_work_task_statuses[".audit"] = true;

	$tdatamst_work_task_statuses[".locking"] = false;



$tdatamst_work_task_statuses[".list"] = true;

$tdatamst_work_task_statuses[".inlineEdit"] = true;


$tdatamst_work_task_statuses[".reorderRecordsByHeader"] = true;



$tdatamst_work_task_statuses[".inlineAdd"] = true;

$tdatamst_work_task_statuses[".import"] = true;

$tdatamst_work_task_statuses[".exportTo"] = true;


$tdatamst_work_task_statuses[".delete"] = true;

$tdatamst_work_task_statuses[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_work_task_statuses[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_work_task_statuses[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_work_task_statuses[".searchSaving"] = false;
//

$tdatamst_work_task_statuses[".showSearchPanel"] = true;
		$tdatamst_work_task_statuses[".flexibleSearch"] = true;

$tdatamst_work_task_statuses[".isUseAjaxSuggest"] = true;

$tdatamst_work_task_statuses[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_work_task_statuses[".ajaxCodeSnippetAdded"] = false;

$tdatamst_work_task_statuses[".buttonsAdded"] = false;

$tdatamst_work_task_statuses[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_work_task_statuses[".isUseTimeForSearch"] = false;





$tdatamst_work_task_statuses[".allSearchFields"] = array();
$tdatamst_work_task_statuses[".filterFields"] = array();
$tdatamst_work_task_statuses[".requiredSearchFields"] = array();

$tdatamst_work_task_statuses[".allSearchFields"][] = "id";
	$tdatamst_work_task_statuses[".allSearchFields"][] = "name";
	$tdatamst_work_task_statuses[".allSearchFields"][] = "sort";
	$tdatamst_work_task_statuses[".allSearchFields"][] = "created_at";
	$tdatamst_work_task_statuses[".allSearchFields"][] = "updated_at";
	

$tdatamst_work_task_statuses[".googleLikeFields"] = array();
$tdatamst_work_task_statuses[".googleLikeFields"][] = "id";
$tdatamst_work_task_statuses[".googleLikeFields"][] = "name";
$tdatamst_work_task_statuses[".googleLikeFields"][] = "sort";
$tdatamst_work_task_statuses[".googleLikeFields"][] = "created_at";
$tdatamst_work_task_statuses[".googleLikeFields"][] = "updated_at";


$tdatamst_work_task_statuses[".advSearchFields"] = array();
$tdatamst_work_task_statuses[".advSearchFields"][] = "id";
$tdatamst_work_task_statuses[".advSearchFields"][] = "name";
$tdatamst_work_task_statuses[".advSearchFields"][] = "sort";
$tdatamst_work_task_statuses[".advSearchFields"][] = "created_at";
$tdatamst_work_task_statuses[".advSearchFields"][] = "updated_at";

$tdatamst_work_task_statuses[".tableType"] = "list";

$tdatamst_work_task_statuses[".printerPageOrientation"] = 0;
$tdatamst_work_task_statuses[".nPrinterPageScale"] = 100;

$tdatamst_work_task_statuses[".nPrinterSplitRecords"] = 40;

$tdatamst_work_task_statuses[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_work_task_statuses[".geocodingEnabled"] = false;





$tdatamst_work_task_statuses[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_work_task_statuses[".pageSize"] = 20;

$tdatamst_work_task_statuses[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_work_task_statuses[".strOrderBy"] = $tstrOrderBy;

$tdatamst_work_task_statuses[".orderindexes"] = array();
$tdatamst_work_task_statuses[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_work_task_statuses[".sqlHead"] = "SELECT `id`,  `name`,  `sort`,  `created_at`,  `updated_at`";
$tdatamst_work_task_statuses[".sqlFrom"] = "FROM `mst_work_task_statuses`";
$tdatamst_work_task_statuses[".sqlWhereExpr"] = "";
$tdatamst_work_task_statuses[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_work_task_statuses[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_work_task_statuses[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_work_task_statuses[".highlightSearchResults"] = true;

$tableKeysmst_work_task_statuses = array();
$tableKeysmst_work_task_statuses[] = "id";
$tdatamst_work_task_statuses[".Keys"] = $tableKeysmst_work_task_statuses;

$tdatamst_work_task_statuses[".listFields"] = array();
$tdatamst_work_task_statuses[".listFields"][] = "id";
$tdatamst_work_task_statuses[".listFields"][] = "name";
$tdatamst_work_task_statuses[".listFields"][] = "sort";
$tdatamst_work_task_statuses[".listFields"][] = "created_at";
$tdatamst_work_task_statuses[".listFields"][] = "updated_at";

$tdatamst_work_task_statuses[".hideMobileList"] = array();


$tdatamst_work_task_statuses[".viewFields"] = array();

$tdatamst_work_task_statuses[".addFields"] = array();

$tdatamst_work_task_statuses[".masterListFields"] = array();
$tdatamst_work_task_statuses[".masterListFields"][] = "id";
$tdatamst_work_task_statuses[".masterListFields"][] = "name";
$tdatamst_work_task_statuses[".masterListFields"][] = "sort";
$tdatamst_work_task_statuses[".masterListFields"][] = "created_at";
$tdatamst_work_task_statuses[".masterListFields"][] = "updated_at";

$tdatamst_work_task_statuses[".inlineAddFields"] = array();
$tdatamst_work_task_statuses[".inlineAddFields"][] = "name";
$tdatamst_work_task_statuses[".inlineAddFields"][] = "sort";

$tdatamst_work_task_statuses[".editFields"] = array();

$tdatamst_work_task_statuses[".inlineEditFields"] = array();
$tdatamst_work_task_statuses[".inlineEditFields"][] = "name";
$tdatamst_work_task_statuses[".inlineEditFields"][] = "sort";

$tdatamst_work_task_statuses[".updateSelectedFields"] = array();


$tdatamst_work_task_statuses[".exportFields"] = array();
$tdatamst_work_task_statuses[".exportFields"][] = "id";
$tdatamst_work_task_statuses[".exportFields"][] = "name";
$tdatamst_work_task_statuses[".exportFields"][] = "sort";
$tdatamst_work_task_statuses[".exportFields"][] = "created_at";
$tdatamst_work_task_statuses[".exportFields"][] = "updated_at";

$tdatamst_work_task_statuses[".importFields"] = array();
$tdatamst_work_task_statuses[".importFields"][] = "id";
$tdatamst_work_task_statuses[".importFields"][] = "name";
$tdatamst_work_task_statuses[".importFields"][] = "sort";

$tdatamst_work_task_statuses[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_work_task_statuses";
	$fdata["Label"] = GetFieldLabel("mst_work_task_statuses","id");
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




	$tdatamst_work_task_statuses["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_work_task_statuses";
	$fdata["Label"] = GetFieldLabel("mst_work_task_statuses","name");
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




	$tdatamst_work_task_statuses["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_work_task_statuses";
	$fdata["Label"] = GetFieldLabel("mst_work_task_statuses","sort");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatamst_work_task_statuses["sort"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_work_task_statuses";
	$fdata["Label"] = GetFieldLabel("mst_work_task_statuses","created_at");
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




	$tdatamst_work_task_statuses["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_work_task_statuses";
	$fdata["Label"] = GetFieldLabel("mst_work_task_statuses","updated_at");
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




	$tdatamst_work_task_statuses["updated_at"] = $fdata;


$tables_data["mst_work_task_statuses"]=&$tdatamst_work_task_statuses;
$field_labels["mst_work_task_statuses"] = &$fieldLabelsmst_work_task_statuses;
$fieldToolTips["mst_work_task_statuses"] = &$fieldToolTipsmst_work_task_statuses;
$placeHolders["mst_work_task_statuses"] = &$placeHoldersmst_work_task_statuses;
$page_titles["mst_work_task_statuses"] = &$pageTitlesmst_work_task_statuses;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_work_task_statuses"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_work_task_statuses"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_work_task_statuses()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `sort`,  `created_at`,  `updated_at`";
$proto0["m_strFrom"] = "FROM `mst_work_task_statuses`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `id` DESC";
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
	"m_strTable" => "mst_work_task_statuses",
	"m_srcTableName" => "mst_work_task_statuses"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_work_task_statuses";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_work_task_statuses",
	"m_srcTableName" => "mst_work_task_statuses"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_work_task_statuses";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_work_task_statuses",
	"m_srcTableName" => "mst_work_task_statuses"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_work_task_statuses";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_work_task_statuses",
	"m_srcTableName" => "mst_work_task_statuses"
));

$proto12["m_sql"] = "`created_at`";
$proto12["m_srcTableName"] = "mst_work_task_statuses";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_work_task_statuses",
	"m_srcTableName" => "mst_work_task_statuses"
));

$proto14["m_sql"] = "`updated_at`";
$proto14["m_srcTableName"] = "mst_work_task_statuses";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "mst_work_task_statuses";
$proto17["m_srcTableName"] = "mst_work_task_statuses";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "name";
$proto17["m_columns"][] = "sort";
$proto17["m_columns"][] = "created_at";
$proto17["m_columns"][] = "updated_at";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "`mst_work_task_statuses`";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "mst_work_task_statuses";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_work_task_statuses",
	"m_srcTableName" => "mst_work_task_statuses"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 0;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_work_task_statuses";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_work_task_statuses = createSqlQuery_mst_work_task_statuses();


	
		;

					

$tdatamst_work_task_statuses[".sqlquery"] = $queryData_mst_work_task_statuses;

$tableEvents["mst_work_task_statuses"] = new eventsBase;
$tdatamst_work_task_statuses[".hasEvents"] = false;

?>