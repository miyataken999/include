<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_analysisMail_status = array();
	$tdatamst_analysisMail_status[".truncateText"] = true;
	$tdatamst_analysisMail_status[".NumberOfChars"] = 80;
	$tdatamst_analysisMail_status[".ShortName"] = "mst_analysisMail_status";
	$tdatamst_analysisMail_status[".OwnerID"] = "";
	$tdatamst_analysisMail_status[".OriginalTable"] = "mst_analysisMail_status";

//	field labels
$fieldLabelsmst_analysisMail_status = array();
$fieldToolTipsmst_analysisMail_status = array();
$pageTitlesmst_analysisMail_status = array();
$placeHoldersmst_analysisMail_status = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_analysisMail_status["Japanese"] = array();
	$fieldToolTipsmst_analysisMail_status["Japanese"] = array();
	$placeHoldersmst_analysisMail_status["Japanese"] = array();
	$pageTitlesmst_analysisMail_status["Japanese"] = array();
	$fieldLabelsmst_analysisMail_status["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_analysisMail_status["Japanese"]["id"] = "";
	$placeHoldersmst_analysisMail_status["Japanese"]["id"] = "";
	$fieldLabelsmst_analysisMail_status["Japanese"]["name"] = "名称";
	$fieldToolTipsmst_analysisMail_status["Japanese"]["name"] = "";
	$placeHoldersmst_analysisMail_status["Japanese"]["name"] = "";
	$fieldLabelsmst_analysisMail_status["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsmst_analysisMail_status["Japanese"]["updated_by"] = "";
	$placeHoldersmst_analysisMail_status["Japanese"]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_status["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsmst_analysisMail_status["Japanese"]["updated_at"] = "";
	$placeHoldersmst_analysisMail_status["Japanese"]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_status["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsmst_analysisMail_status["Japanese"]["created_by"] = "";
	$placeHoldersmst_analysisMail_status["Japanese"]["created_by"] = "";
	$fieldLabelsmst_analysisMail_status["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsmst_analysisMail_status["Japanese"]["created_at"] = "";
	$placeHoldersmst_analysisMail_status["Japanese"]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_status["Japanese"]))
		$tdatamst_analysisMail_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_analysisMail_status[""] = array();
	$fieldToolTipsmst_analysisMail_status[""] = array();
	$placeHoldersmst_analysisMail_status[""] = array();
	$pageTitlesmst_analysisMail_status[""] = array();
	$fieldLabelsmst_analysisMail_status[""]["id"] = "Id";
	$fieldToolTipsmst_analysisMail_status[""]["id"] = "";
	$placeHoldersmst_analysisMail_status[""]["id"] = "";
	$fieldLabelsmst_analysisMail_status[""]["name"] = "Name";
	$fieldToolTipsmst_analysisMail_status[""]["name"] = "";
	$placeHoldersmst_analysisMail_status[""]["name"] = "";
	$fieldLabelsmst_analysisMail_status[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_analysisMail_status[""]["updated_by"] = "";
	$placeHoldersmst_analysisMail_status[""]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_status[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_analysisMail_status[""]["updated_at"] = "";
	$placeHoldersmst_analysisMail_status[""]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_status[""]["created_by"] = "Created By";
	$fieldToolTipsmst_analysisMail_status[""]["created_by"] = "";
	$placeHoldersmst_analysisMail_status[""]["created_by"] = "";
	$fieldLabelsmst_analysisMail_status[""]["created_at"] = "Created At";
	$fieldToolTipsmst_analysisMail_status[""]["created_at"] = "";
	$placeHoldersmst_analysisMail_status[""]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_status[""]))
		$tdatamst_analysisMail_status[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_analysisMail_status["English"] = array();
	$fieldToolTipsmst_analysisMail_status["English"] = array();
	$placeHoldersmst_analysisMail_status["English"] = array();
	$pageTitlesmst_analysisMail_status["English"] = array();
	$fieldLabelsmst_analysisMail_status["English"]["id"] = "Id";
	$fieldToolTipsmst_analysisMail_status["English"]["id"] = "";
	$placeHoldersmst_analysisMail_status["English"]["id"] = "";
	$fieldLabelsmst_analysisMail_status["English"]["name"] = "Name";
	$fieldToolTipsmst_analysisMail_status["English"]["name"] = "";
	$placeHoldersmst_analysisMail_status["English"]["name"] = "";
	$fieldLabelsmst_analysisMail_status["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_analysisMail_status["English"]["updated_by"] = "";
	$placeHoldersmst_analysisMail_status["English"]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_status["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_analysisMail_status["English"]["updated_at"] = "";
	$placeHoldersmst_analysisMail_status["English"]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_status["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_analysisMail_status["English"]["created_by"] = "";
	$placeHoldersmst_analysisMail_status["English"]["created_by"] = "";
	$fieldLabelsmst_analysisMail_status["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_analysisMail_status["English"]["created_at"] = "";
	$placeHoldersmst_analysisMail_status["English"]["created_at"] = "";
	if (count($fieldToolTipsmst_analysisMail_status["English"]))
		$tdatamst_analysisMail_status[".isUseToolTips"] = true;
}


	$tdatamst_analysisMail_status[".NCSearch"] = true;



$tdatamst_analysisMail_status[".shortTableName"] = "mst_analysisMail_status";
$tdatamst_analysisMail_status[".nSecOptions"] = 0;
$tdatamst_analysisMail_status[".recsPerRowPrint"] = 1;
$tdatamst_analysisMail_status[".mainTableOwnerID"] = "";
$tdatamst_analysisMail_status[".moveNext"] = 1;
$tdatamst_analysisMail_status[".entityType"] = 0;

$tdatamst_analysisMail_status[".strOriginalTableName"] = "mst_analysisMail_status";

	



$tdatamst_analysisMail_status[".showAddInPopup"] = false;

$tdatamst_analysisMail_status[".showEditInPopup"] = false;

$tdatamst_analysisMail_status[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_analysisMail_status[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_analysisMail_status[".fieldsForRegister"] = array();

$tdatamst_analysisMail_status[".listAjax"] = false;

	$tdatamst_analysisMail_status[".audit"] = true;

	$tdatamst_analysisMail_status[".locking"] = false;



$tdatamst_analysisMail_status[".list"] = true;

$tdatamst_analysisMail_status[".inlineEdit"] = true;


$tdatamst_analysisMail_status[".reorderRecordsByHeader"] = true;



$tdatamst_analysisMail_status[".inlineAdd"] = true;

$tdatamst_analysisMail_status[".import"] = true;

$tdatamst_analysisMail_status[".exportTo"] = true;


$tdatamst_analysisMail_status[".delete"] = true;

$tdatamst_analysisMail_status[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_analysisMail_status[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_analysisMail_status[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_analysisMail_status[".searchSaving"] = false;
//

$tdatamst_analysisMail_status[".showSearchPanel"] = true;
		$tdatamst_analysisMail_status[".flexibleSearch"] = true;

$tdatamst_analysisMail_status[".isUseAjaxSuggest"] = true;

$tdatamst_analysisMail_status[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_analysisMail_status[".ajaxCodeSnippetAdded"] = false;

$tdatamst_analysisMail_status[".buttonsAdded"] = false;

$tdatamst_analysisMail_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_analysisMail_status[".isUseTimeForSearch"] = false;





$tdatamst_analysisMail_status[".allSearchFields"] = array();
$tdatamst_analysisMail_status[".filterFields"] = array();
$tdatamst_analysisMail_status[".requiredSearchFields"] = array();

$tdatamst_analysisMail_status[".allSearchFields"][] = "id";
	$tdatamst_analysisMail_status[".allSearchFields"][] = "name";
	$tdatamst_analysisMail_status[".allSearchFields"][] = "updated_by";
	$tdatamst_analysisMail_status[".allSearchFields"][] = "updated_at";
	$tdatamst_analysisMail_status[".allSearchFields"][] = "created_by";
	$tdatamst_analysisMail_status[".allSearchFields"][] = "created_at";
	

$tdatamst_analysisMail_status[".googleLikeFields"] = array();
$tdatamst_analysisMail_status[".googleLikeFields"][] = "id";
$tdatamst_analysisMail_status[".googleLikeFields"][] = "name";
$tdatamst_analysisMail_status[".googleLikeFields"][] = "updated_by";
$tdatamst_analysisMail_status[".googleLikeFields"][] = "updated_at";
$tdatamst_analysisMail_status[".googleLikeFields"][] = "created_by";
$tdatamst_analysisMail_status[".googleLikeFields"][] = "created_at";


$tdatamst_analysisMail_status[".advSearchFields"] = array();
$tdatamst_analysisMail_status[".advSearchFields"][] = "id";
$tdatamst_analysisMail_status[".advSearchFields"][] = "name";
$tdatamst_analysisMail_status[".advSearchFields"][] = "updated_by";
$tdatamst_analysisMail_status[".advSearchFields"][] = "updated_at";
$tdatamst_analysisMail_status[".advSearchFields"][] = "created_by";
$tdatamst_analysisMail_status[".advSearchFields"][] = "created_at";

$tdatamst_analysisMail_status[".tableType"] = "list";

$tdatamst_analysisMail_status[".printerPageOrientation"] = 0;
$tdatamst_analysisMail_status[".nPrinterPageScale"] = 100;

$tdatamst_analysisMail_status[".nPrinterSplitRecords"] = 40;

$tdatamst_analysisMail_status[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_analysisMail_status[".geocodingEnabled"] = false;





$tdatamst_analysisMail_status[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_analysisMail_status[".pageSize"] = 20;

$tdatamst_analysisMail_status[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_analysisMail_status[".strOrderBy"] = $tstrOrderBy;

$tdatamst_analysisMail_status[".orderindexes"] = array();
$tdatamst_analysisMail_status[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_analysisMail_status[".sqlHead"] = "SELECT `id`,  `name`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$tdatamst_analysisMail_status[".sqlFrom"] = "FROM `mst_analysisMail_status`";
$tdatamst_analysisMail_status[".sqlWhereExpr"] = "";
$tdatamst_analysisMail_status[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_analysisMail_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_analysisMail_status[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_analysisMail_status[".highlightSearchResults"] = true;

$tableKeysmst_analysisMail_status = array();
$tableKeysmst_analysisMail_status[] = "id";
$tdatamst_analysisMail_status[".Keys"] = $tableKeysmst_analysisMail_status;

$tdatamst_analysisMail_status[".listFields"] = array();
$tdatamst_analysisMail_status[".listFields"][] = "id";
$tdatamst_analysisMail_status[".listFields"][] = "name";
$tdatamst_analysisMail_status[".listFields"][] = "updated_by";
$tdatamst_analysisMail_status[".listFields"][] = "updated_at";
$tdatamst_analysisMail_status[".listFields"][] = "created_by";
$tdatamst_analysisMail_status[".listFields"][] = "created_at";

$tdatamst_analysisMail_status[".hideMobileList"] = array();


$tdatamst_analysisMail_status[".viewFields"] = array();

$tdatamst_analysisMail_status[".addFields"] = array();

$tdatamst_analysisMail_status[".masterListFields"] = array();
$tdatamst_analysisMail_status[".masterListFields"][] = "id";
$tdatamst_analysisMail_status[".masterListFields"][] = "name";
$tdatamst_analysisMail_status[".masterListFields"][] = "updated_by";
$tdatamst_analysisMail_status[".masterListFields"][] = "updated_at";
$tdatamst_analysisMail_status[".masterListFields"][] = "created_by";
$tdatamst_analysisMail_status[".masterListFields"][] = "created_at";

$tdatamst_analysisMail_status[".inlineAddFields"] = array();
$tdatamst_analysisMail_status[".inlineAddFields"][] = "name";

$tdatamst_analysisMail_status[".editFields"] = array();

$tdatamst_analysisMail_status[".inlineEditFields"] = array();
$tdatamst_analysisMail_status[".inlineEditFields"][] = "name";

$tdatamst_analysisMail_status[".updateSelectedFields"] = array();


$tdatamst_analysisMail_status[".exportFields"] = array();
$tdatamst_analysisMail_status[".exportFields"][] = "id";
$tdatamst_analysisMail_status[".exportFields"][] = "name";
$tdatamst_analysisMail_status[".exportFields"][] = "updated_by";
$tdatamst_analysisMail_status[".exportFields"][] = "updated_at";
$tdatamst_analysisMail_status[".exportFields"][] = "created_by";
$tdatamst_analysisMail_status[".exportFields"][] = "created_at";

$tdatamst_analysisMail_status[".importFields"] = array();
$tdatamst_analysisMail_status[".importFields"][] = "id";
$tdatamst_analysisMail_status[".importFields"][] = "name";

$tdatamst_analysisMail_status[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_analysisMail_status";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_status","id");
	$fdata["FieldType"] = 20;

	
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




	$tdatamst_analysisMail_status["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_analysisMail_status";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_status","name");
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




	$tdatamst_analysisMail_status["name"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_analysisMail_status";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_status","updated_by");
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




	$tdatamst_analysisMail_status["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_analysisMail_status";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_status","updated_at");
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




	$tdatamst_analysisMail_status["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_analysisMail_status";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_status","created_by");
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




	$tdatamst_analysisMail_status["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_analysisMail_status";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_status","created_at");
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




	$tdatamst_analysisMail_status["created_at"] = $fdata;


$tables_data["mst_analysisMail_status"]=&$tdatamst_analysisMail_status;
$field_labels["mst_analysisMail_status"] = &$fieldLabelsmst_analysisMail_status;
$fieldToolTips["mst_analysisMail_status"] = &$fieldToolTipsmst_analysisMail_status;
$placeHolders["mst_analysisMail_status"] = &$placeHoldersmst_analysisMail_status;
$page_titles["mst_analysisMail_status"] = &$pageTitlesmst_analysisMail_status;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_analysisMail_status"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_analysisMail_status"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_analysisMail_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$proto0["m_strFrom"] = "FROM `mst_analysisMail_status`";
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
	"m_strTable" => "mst_analysisMail_status",
	"m_srcTableName" => "mst_analysisMail_status"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_analysisMail_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_analysisMail_status",
	"m_srcTableName" => "mst_analysisMail_status"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_analysisMail_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_analysisMail_status",
	"m_srcTableName" => "mst_analysisMail_status"
));

$proto10["m_sql"] = "`updated_by`";
$proto10["m_srcTableName"] = "mst_analysisMail_status";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_analysisMail_status",
	"m_srcTableName" => "mst_analysisMail_status"
));

$proto12["m_sql"] = "`updated_at`";
$proto12["m_srcTableName"] = "mst_analysisMail_status";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_analysisMail_status",
	"m_srcTableName" => "mst_analysisMail_status"
));

$proto14["m_sql"] = "`created_by`";
$proto14["m_srcTableName"] = "mst_analysisMail_status";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_analysisMail_status",
	"m_srcTableName" => "mst_analysisMail_status"
));

$proto16["m_sql"] = "`created_at`";
$proto16["m_srcTableName"] = "mst_analysisMail_status";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "mst_analysisMail_status";
$proto19["m_srcTableName"] = "mst_analysisMail_status";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "name";
$proto19["m_columns"][] = "updated_by";
$proto19["m_columns"][] = "updated_at";
$proto19["m_columns"][] = "created_by";
$proto19["m_columns"][] = "created_at";
$proto19["m_columns"][] = "sort";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`mst_analysisMail_status`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "mst_analysisMail_status";
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
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_analysisMail_status",
	"m_srcTableName" => "mst_analysisMail_status"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 0;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_analysisMail_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_analysisMail_status = createSqlQuery_mst_analysisMail_status();


	
		;

						

$tdatamst_analysisMail_status[".sqlquery"] = $queryData_mst_analysisMail_status;

$tableEvents["mst_analysisMail_status"] = new eventsBase;
$tdatamst_analysisMail_status[".hasEvents"] = false;

?>