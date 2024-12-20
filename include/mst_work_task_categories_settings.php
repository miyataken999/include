<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_work_task_categories = array();
	$tdatamst_work_task_categories[".truncateText"] = true;
	$tdatamst_work_task_categories[".NumberOfChars"] = 80;
	$tdatamst_work_task_categories[".ShortName"] = "mst_work_task_categories";
	$tdatamst_work_task_categories[".OwnerID"] = "";
	$tdatamst_work_task_categories[".OriginalTable"] = "mst_work_task_categories";

//	field labels
$fieldLabelsmst_work_task_categories = array();
$fieldToolTipsmst_work_task_categories = array();
$pageTitlesmst_work_task_categories = array();
$placeHoldersmst_work_task_categories = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_work_task_categories["Japanese"] = array();
	$fieldToolTipsmst_work_task_categories["Japanese"] = array();
	$placeHoldersmst_work_task_categories["Japanese"] = array();
	$pageTitlesmst_work_task_categories["Japanese"] = array();
	$fieldLabelsmst_work_task_categories["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_work_task_categories["Japanese"]["id"] = "";
	$placeHoldersmst_work_task_categories["Japanese"]["id"] = "";
	$fieldLabelsmst_work_task_categories["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_work_task_categories["Japanese"]["name"] = "";
	$placeHoldersmst_work_task_categories["Japanese"]["name"] = "";
	$fieldLabelsmst_work_task_categories["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_work_task_categories["Japanese"]["sort"] = "";
	$placeHoldersmst_work_task_categories["Japanese"]["sort"] = "";
	$fieldLabelsmst_work_task_categories["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsmst_work_task_categories["Japanese"]["created_at"] = "";
	$placeHoldersmst_work_task_categories["Japanese"]["created_at"] = "";
	$fieldLabelsmst_work_task_categories["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_work_task_categories["Japanese"]["updated_at"] = "";
	$placeHoldersmst_work_task_categories["Japanese"]["updated_at"] = "";
	if (count($fieldToolTipsmst_work_task_categories["Japanese"]))
		$tdatamst_work_task_categories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_work_task_categories[""] = array();
	$fieldToolTipsmst_work_task_categories[""] = array();
	$placeHoldersmst_work_task_categories[""] = array();
	$pageTitlesmst_work_task_categories[""] = array();
	$fieldLabelsmst_work_task_categories[""]["id"] = "Id";
	$fieldToolTipsmst_work_task_categories[""]["id"] = "";
	$placeHoldersmst_work_task_categories[""]["id"] = "";
	$fieldLabelsmst_work_task_categories[""]["name"] = "Name";
	$fieldToolTipsmst_work_task_categories[""]["name"] = "";
	$placeHoldersmst_work_task_categories[""]["name"] = "";
	$fieldLabelsmst_work_task_categories[""]["sort"] = "Sort";
	$fieldToolTipsmst_work_task_categories[""]["sort"] = "";
	$placeHoldersmst_work_task_categories[""]["sort"] = "";
	$fieldLabelsmst_work_task_categories[""]["created_at"] = "Created At";
	$fieldToolTipsmst_work_task_categories[""]["created_at"] = "";
	$placeHoldersmst_work_task_categories[""]["created_at"] = "";
	$fieldLabelsmst_work_task_categories[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_work_task_categories[""]["updated_at"] = "";
	$placeHoldersmst_work_task_categories[""]["updated_at"] = "";
	if (count($fieldToolTipsmst_work_task_categories[""]))
		$tdatamst_work_task_categories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_work_task_categories["English"] = array();
	$fieldToolTipsmst_work_task_categories["English"] = array();
	$placeHoldersmst_work_task_categories["English"] = array();
	$pageTitlesmst_work_task_categories["English"] = array();
	$fieldLabelsmst_work_task_categories["English"]["id"] = "Id";
	$fieldToolTipsmst_work_task_categories["English"]["id"] = "";
	$placeHoldersmst_work_task_categories["English"]["id"] = "";
	$fieldLabelsmst_work_task_categories["English"]["name"] = "Name";
	$fieldToolTipsmst_work_task_categories["English"]["name"] = "";
	$placeHoldersmst_work_task_categories["English"]["name"] = "";
	$fieldLabelsmst_work_task_categories["English"]["sort"] = "Sort";
	$fieldToolTipsmst_work_task_categories["English"]["sort"] = "";
	$placeHoldersmst_work_task_categories["English"]["sort"] = "";
	$fieldLabelsmst_work_task_categories["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_work_task_categories["English"]["created_at"] = "";
	$placeHoldersmst_work_task_categories["English"]["created_at"] = "";
	$fieldLabelsmst_work_task_categories["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_work_task_categories["English"]["updated_at"] = "";
	$placeHoldersmst_work_task_categories["English"]["updated_at"] = "";
	if (count($fieldToolTipsmst_work_task_categories["English"]))
		$tdatamst_work_task_categories[".isUseToolTips"] = true;
}


	$tdatamst_work_task_categories[".NCSearch"] = true;



$tdatamst_work_task_categories[".shortTableName"] = "mst_work_task_categories";
$tdatamst_work_task_categories[".nSecOptions"] = 0;
$tdatamst_work_task_categories[".recsPerRowPrint"] = 1;
$tdatamst_work_task_categories[".mainTableOwnerID"] = "";
$tdatamst_work_task_categories[".moveNext"] = 1;
$tdatamst_work_task_categories[".entityType"] = 0;

$tdatamst_work_task_categories[".strOriginalTableName"] = "mst_work_task_categories";

	



$tdatamst_work_task_categories[".showAddInPopup"] = false;

$tdatamst_work_task_categories[".showEditInPopup"] = false;

$tdatamst_work_task_categories[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_work_task_categories[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_work_task_categories[".fieldsForRegister"] = array();

$tdatamst_work_task_categories[".listAjax"] = false;

	$tdatamst_work_task_categories[".audit"] = true;

	$tdatamst_work_task_categories[".locking"] = false;



$tdatamst_work_task_categories[".list"] = true;

$tdatamst_work_task_categories[".inlineEdit"] = true;


$tdatamst_work_task_categories[".reorderRecordsByHeader"] = true;



$tdatamst_work_task_categories[".inlineAdd"] = true;

$tdatamst_work_task_categories[".import"] = true;

$tdatamst_work_task_categories[".exportTo"] = true;


$tdatamst_work_task_categories[".delete"] = true;

$tdatamst_work_task_categories[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_work_task_categories[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_work_task_categories[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_work_task_categories[".searchSaving"] = false;
//

$tdatamst_work_task_categories[".showSearchPanel"] = true;
		$tdatamst_work_task_categories[".flexibleSearch"] = true;

$tdatamst_work_task_categories[".isUseAjaxSuggest"] = true;

$tdatamst_work_task_categories[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_work_task_categories[".ajaxCodeSnippetAdded"] = false;

$tdatamst_work_task_categories[".buttonsAdded"] = false;

$tdatamst_work_task_categories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_work_task_categories[".isUseTimeForSearch"] = false;





$tdatamst_work_task_categories[".allSearchFields"] = array();
$tdatamst_work_task_categories[".filterFields"] = array();
$tdatamst_work_task_categories[".requiredSearchFields"] = array();

$tdatamst_work_task_categories[".allSearchFields"][] = "id";
	$tdatamst_work_task_categories[".allSearchFields"][] = "name";
	$tdatamst_work_task_categories[".allSearchFields"][] = "sort";
	$tdatamst_work_task_categories[".allSearchFields"][] = "created_at";
	$tdatamst_work_task_categories[".allSearchFields"][] = "updated_at";
	

$tdatamst_work_task_categories[".googleLikeFields"] = array();
$tdatamst_work_task_categories[".googleLikeFields"][] = "id";
$tdatamst_work_task_categories[".googleLikeFields"][] = "name";
$tdatamst_work_task_categories[".googleLikeFields"][] = "sort";
$tdatamst_work_task_categories[".googleLikeFields"][] = "created_at";
$tdatamst_work_task_categories[".googleLikeFields"][] = "updated_at";


$tdatamst_work_task_categories[".advSearchFields"] = array();
$tdatamst_work_task_categories[".advSearchFields"][] = "id";
$tdatamst_work_task_categories[".advSearchFields"][] = "name";
$tdatamst_work_task_categories[".advSearchFields"][] = "sort";
$tdatamst_work_task_categories[".advSearchFields"][] = "created_at";
$tdatamst_work_task_categories[".advSearchFields"][] = "updated_at";

$tdatamst_work_task_categories[".tableType"] = "list";

$tdatamst_work_task_categories[".printerPageOrientation"] = 0;
$tdatamst_work_task_categories[".nPrinterPageScale"] = 100;

$tdatamst_work_task_categories[".nPrinterSplitRecords"] = 40;

$tdatamst_work_task_categories[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_work_task_categories[".geocodingEnabled"] = false;





$tdatamst_work_task_categories[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_work_task_categories[".pageSize"] = 100;

$tdatamst_work_task_categories[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_work_task_categories[".strOrderBy"] = $tstrOrderBy;

$tdatamst_work_task_categories[".orderindexes"] = array();
$tdatamst_work_task_categories[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_work_task_categories[".sqlHead"] = "SELECT `id`,  `name`,  `sort`,  `created_at`,  `updated_at`";
$tdatamst_work_task_categories[".sqlFrom"] = "FROM `mst_work_task_categories`";
$tdatamst_work_task_categories[".sqlWhereExpr"] = "";
$tdatamst_work_task_categories[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_work_task_categories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_work_task_categories[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_work_task_categories[".highlightSearchResults"] = true;

$tableKeysmst_work_task_categories = array();
$tableKeysmst_work_task_categories[] = "id";
$tdatamst_work_task_categories[".Keys"] = $tableKeysmst_work_task_categories;

$tdatamst_work_task_categories[".listFields"] = array();
$tdatamst_work_task_categories[".listFields"][] = "id";
$tdatamst_work_task_categories[".listFields"][] = "name";
$tdatamst_work_task_categories[".listFields"][] = "sort";
$tdatamst_work_task_categories[".listFields"][] = "created_at";
$tdatamst_work_task_categories[".listFields"][] = "updated_at";

$tdatamst_work_task_categories[".hideMobileList"] = array();


$tdatamst_work_task_categories[".viewFields"] = array();

$tdatamst_work_task_categories[".addFields"] = array();

$tdatamst_work_task_categories[".masterListFields"] = array();
$tdatamst_work_task_categories[".masterListFields"][] = "id";
$tdatamst_work_task_categories[".masterListFields"][] = "name";
$tdatamst_work_task_categories[".masterListFields"][] = "sort";
$tdatamst_work_task_categories[".masterListFields"][] = "created_at";
$tdatamst_work_task_categories[".masterListFields"][] = "updated_at";

$tdatamst_work_task_categories[".inlineAddFields"] = array();
$tdatamst_work_task_categories[".inlineAddFields"][] = "name";
$tdatamst_work_task_categories[".inlineAddFields"][] = "sort";

$tdatamst_work_task_categories[".editFields"] = array();

$tdatamst_work_task_categories[".inlineEditFields"] = array();
$tdatamst_work_task_categories[".inlineEditFields"][] = "name";
$tdatamst_work_task_categories[".inlineEditFields"][] = "sort";

$tdatamst_work_task_categories[".updateSelectedFields"] = array();


$tdatamst_work_task_categories[".exportFields"] = array();
$tdatamst_work_task_categories[".exportFields"][] = "id";
$tdatamst_work_task_categories[".exportFields"][] = "name";
$tdatamst_work_task_categories[".exportFields"][] = "sort";
$tdatamst_work_task_categories[".exportFields"][] = "created_at";
$tdatamst_work_task_categories[".exportFields"][] = "updated_at";

$tdatamst_work_task_categories[".importFields"] = array();
$tdatamst_work_task_categories[".importFields"][] = "id";
$tdatamst_work_task_categories[".importFields"][] = "name";
$tdatamst_work_task_categories[".importFields"][] = "sort";

$tdatamst_work_task_categories[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_work_task_categories";
	$fdata["Label"] = GetFieldLabel("mst_work_task_categories","id");
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




	$tdatamst_work_task_categories["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_work_task_categories";
	$fdata["Label"] = GetFieldLabel("mst_work_task_categories","name");
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




	$tdatamst_work_task_categories["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_work_task_categories";
	$fdata["Label"] = GetFieldLabel("mst_work_task_categories","sort");
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




	$tdatamst_work_task_categories["sort"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_work_task_categories";
	$fdata["Label"] = GetFieldLabel("mst_work_task_categories","created_at");
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




	$tdatamst_work_task_categories["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_work_task_categories";
	$fdata["Label"] = GetFieldLabel("mst_work_task_categories","updated_at");
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




	$tdatamst_work_task_categories["updated_at"] = $fdata;


$tables_data["mst_work_task_categories"]=&$tdatamst_work_task_categories;
$field_labels["mst_work_task_categories"] = &$fieldLabelsmst_work_task_categories;
$fieldToolTips["mst_work_task_categories"] = &$fieldToolTipsmst_work_task_categories;
$placeHolders["mst_work_task_categories"] = &$placeHoldersmst_work_task_categories;
$page_titles["mst_work_task_categories"] = &$pageTitlesmst_work_task_categories;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_work_task_categories"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_work_task_categories"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_work_task_categories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `sort`,  `created_at`,  `updated_at`";
$proto0["m_strFrom"] = "FROM `mst_work_task_categories`";
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
	"m_strTable" => "mst_work_task_categories",
	"m_srcTableName" => "mst_work_task_categories"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_work_task_categories";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_work_task_categories",
	"m_srcTableName" => "mst_work_task_categories"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_work_task_categories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_work_task_categories",
	"m_srcTableName" => "mst_work_task_categories"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_work_task_categories";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_work_task_categories",
	"m_srcTableName" => "mst_work_task_categories"
));

$proto12["m_sql"] = "`created_at`";
$proto12["m_srcTableName"] = "mst_work_task_categories";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_work_task_categories",
	"m_srcTableName" => "mst_work_task_categories"
));

$proto14["m_sql"] = "`updated_at`";
$proto14["m_srcTableName"] = "mst_work_task_categories";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "mst_work_task_categories";
$proto17["m_srcTableName"] = "mst_work_task_categories";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "name";
$proto17["m_columns"][] = "sort";
$proto17["m_columns"][] = "created_at";
$proto17["m_columns"][] = "updated_at";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "`mst_work_task_categories`";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "mst_work_task_categories";
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
	"m_strTable" => "mst_work_task_categories",
	"m_srcTableName" => "mst_work_task_categories"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 0;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_work_task_categories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_work_task_categories = createSqlQuery_mst_work_task_categories();


	
		;

					

$tdatamst_work_task_categories[".sqlquery"] = $queryData_mst_work_task_categories;

$tableEvents["mst_work_task_categories"] = new eventsBase;
$tdatamst_work_task_categories[".hasEvents"] = false;

?>