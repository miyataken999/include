<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_ichiba_meeting1 = array();
	$tdatamst_ichiba_meeting1[".truncateText"] = true;
	$tdatamst_ichiba_meeting1[".NumberOfChars"] = 80;
	$tdatamst_ichiba_meeting1[".ShortName"] = "mst_ichiba_meeting1";
	$tdatamst_ichiba_meeting1[".OwnerID"] = "";
	$tdatamst_ichiba_meeting1[".OriginalTable"] = "mst_ichiba_meeting";

//	field labels
$fieldLabelsmst_ichiba_meeting1 = array();
$fieldToolTipsmst_ichiba_meeting1 = array();
$pageTitlesmst_ichiba_meeting1 = array();
$placeHoldersmst_ichiba_meeting1 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_ichiba_meeting1["Japanese"] = array();
	$fieldToolTipsmst_ichiba_meeting1["Japanese"] = array();
	$placeHoldersmst_ichiba_meeting1["Japanese"] = array();
	$pageTitlesmst_ichiba_meeting1["Japanese"] = array();
	$fieldLabelsmst_ichiba_meeting1["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_ichiba_meeting1["Japanese"]["id"] = "";
	$placeHoldersmst_ichiba_meeting1["Japanese"]["id"] = "";
	$fieldLabelsmst_ichiba_meeting1["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_ichiba_meeting1["Japanese"]["name"] = "";
	$placeHoldersmst_ichiba_meeting1["Japanese"]["name"] = "";
	$fieldLabelsmst_ichiba_meeting1["Japanese"]["company"] = "Company";
	$fieldToolTipsmst_ichiba_meeting1["Japanese"]["company"] = "";
	$placeHoldersmst_ichiba_meeting1["Japanese"]["company"] = "";
	$fieldLabelsmst_ichiba_meeting1["Japanese"]["representative"] = "Representative";
	$fieldToolTipsmst_ichiba_meeting1["Japanese"]["representative"] = "";
	$placeHoldersmst_ichiba_meeting1["Japanese"]["representative"] = "";
	$fieldLabelsmst_ichiba_meeting1["Japanese"]["meeting_name"] = "Meeting Name";
	$fieldToolTipsmst_ichiba_meeting1["Japanese"]["meeting_name"] = "";
	$placeHoldersmst_ichiba_meeting1["Japanese"]["meeting_name"] = "";
	$fieldLabelsmst_ichiba_meeting1["Japanese"]["default_date"] = "Default Date";
	$fieldToolTipsmst_ichiba_meeting1["Japanese"]["default_date"] = "";
	$placeHoldersmst_ichiba_meeting1["Japanese"]["default_date"] = "";
	$fieldLabelsmst_ichiba_meeting1["Japanese"]["original_id"] = "Original Id";
	$fieldToolTipsmst_ichiba_meeting1["Japanese"]["original_id"] = "";
	$placeHoldersmst_ichiba_meeting1["Japanese"]["original_id"] = "";
	$fieldLabelsmst_ichiba_meeting1["Japanese"]["list_name"] = "List Name";
	$fieldToolTipsmst_ichiba_meeting1["Japanese"]["list_name"] = "";
	$placeHoldersmst_ichiba_meeting1["Japanese"]["list_name"] = "";
	if (count($fieldToolTipsmst_ichiba_meeting1["Japanese"]))
		$tdatamst_ichiba_meeting1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_ichiba_meeting1[""] = array();
	$fieldToolTipsmst_ichiba_meeting1[""] = array();
	$placeHoldersmst_ichiba_meeting1[""] = array();
	$pageTitlesmst_ichiba_meeting1[""] = array();
	if (count($fieldToolTipsmst_ichiba_meeting1[""]))
		$tdatamst_ichiba_meeting1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_ichiba_meeting1["English"] = array();
	$fieldToolTipsmst_ichiba_meeting1["English"] = array();
	$placeHoldersmst_ichiba_meeting1["English"] = array();
	$pageTitlesmst_ichiba_meeting1["English"] = array();
	if (count($fieldToolTipsmst_ichiba_meeting1["English"]))
		$tdatamst_ichiba_meeting1[".isUseToolTips"] = true;
}


	$tdatamst_ichiba_meeting1[".NCSearch"] = true;



$tdatamst_ichiba_meeting1[".shortTableName"] = "mst_ichiba_meeting1";
$tdatamst_ichiba_meeting1[".nSecOptions"] = 0;
$tdatamst_ichiba_meeting1[".recsPerRowPrint"] = 1;
$tdatamst_ichiba_meeting1[".mainTableOwnerID"] = "";
$tdatamst_ichiba_meeting1[".moveNext"] = 1;
$tdatamst_ichiba_meeting1[".entityType"] = 1;

$tdatamst_ichiba_meeting1[".strOriginalTableName"] = "mst_ichiba_meeting";

	



$tdatamst_ichiba_meeting1[".showAddInPopup"] = false;

$tdatamst_ichiba_meeting1[".showEditInPopup"] = false;

$tdatamst_ichiba_meeting1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_ichiba_meeting1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_ichiba_meeting1[".fieldsForRegister"] = array();

$tdatamst_ichiba_meeting1[".listAjax"] = false;

	$tdatamst_ichiba_meeting1[".audit"] = true;

	$tdatamst_ichiba_meeting1[".locking"] = false;



$tdatamst_ichiba_meeting1[".list"] = true;

$tdatamst_ichiba_meeting1[".inlineEdit"] = true;


$tdatamst_ichiba_meeting1[".reorderRecordsByHeader"] = true;



$tdatamst_ichiba_meeting1[".inlineAdd"] = true;

$tdatamst_ichiba_meeting1[".import"] = true;

$tdatamst_ichiba_meeting1[".exportTo"] = true;


$tdatamst_ichiba_meeting1[".delete"] = true;

$tdatamst_ichiba_meeting1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_ichiba_meeting1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_ichiba_meeting1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_ichiba_meeting1[".searchSaving"] = false;
//

$tdatamst_ichiba_meeting1[".showSearchPanel"] = true;
		$tdatamst_ichiba_meeting1[".flexibleSearch"] = true;

$tdatamst_ichiba_meeting1[".isUseAjaxSuggest"] = true;

$tdatamst_ichiba_meeting1[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_ichiba_meeting1[".ajaxCodeSnippetAdded"] = false;

$tdatamst_ichiba_meeting1[".buttonsAdded"] = false;

$tdatamst_ichiba_meeting1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_ichiba_meeting1[".isUseTimeForSearch"] = false;





$tdatamst_ichiba_meeting1[".allSearchFields"] = array();
$tdatamst_ichiba_meeting1[".filterFields"] = array();
$tdatamst_ichiba_meeting1[".requiredSearchFields"] = array();

$tdatamst_ichiba_meeting1[".allSearchFields"][] = "list_name";
	$tdatamst_ichiba_meeting1[".allSearchFields"][] = "id";
	$tdatamst_ichiba_meeting1[".allSearchFields"][] = "name";
	$tdatamst_ichiba_meeting1[".allSearchFields"][] = "company";
	$tdatamst_ichiba_meeting1[".allSearchFields"][] = "representative";
	$tdatamst_ichiba_meeting1[".allSearchFields"][] = "meeting_name";
	$tdatamst_ichiba_meeting1[".allSearchFields"][] = "default_date";
	$tdatamst_ichiba_meeting1[".allSearchFields"][] = "original_id";
	

$tdatamst_ichiba_meeting1[".googleLikeFields"] = array();
$tdatamst_ichiba_meeting1[".googleLikeFields"][] = "id";
$tdatamst_ichiba_meeting1[".googleLikeFields"][] = "name";
$tdatamst_ichiba_meeting1[".googleLikeFields"][] = "company";
$tdatamst_ichiba_meeting1[".googleLikeFields"][] = "representative";
$tdatamst_ichiba_meeting1[".googleLikeFields"][] = "meeting_name";
$tdatamst_ichiba_meeting1[".googleLikeFields"][] = "default_date";
$tdatamst_ichiba_meeting1[".googleLikeFields"][] = "original_id";
$tdatamst_ichiba_meeting1[".googleLikeFields"][] = "list_name";


$tdatamst_ichiba_meeting1[".advSearchFields"] = array();
$tdatamst_ichiba_meeting1[".advSearchFields"][] = "list_name";
$tdatamst_ichiba_meeting1[".advSearchFields"][] = "id";
$tdatamst_ichiba_meeting1[".advSearchFields"][] = "name";
$tdatamst_ichiba_meeting1[".advSearchFields"][] = "company";
$tdatamst_ichiba_meeting1[".advSearchFields"][] = "representative";
$tdatamst_ichiba_meeting1[".advSearchFields"][] = "meeting_name";
$tdatamst_ichiba_meeting1[".advSearchFields"][] = "default_date";
$tdatamst_ichiba_meeting1[".advSearchFields"][] = "original_id";

$tdatamst_ichiba_meeting1[".tableType"] = "list";

$tdatamst_ichiba_meeting1[".printerPageOrientation"] = 0;
$tdatamst_ichiba_meeting1[".nPrinterPageScale"] = 100;

$tdatamst_ichiba_meeting1[".nPrinterSplitRecords"] = 40;

$tdatamst_ichiba_meeting1[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_ichiba_meeting1[".geocodingEnabled"] = false;





$tdatamst_ichiba_meeting1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_ichiba_meeting1[".pageSize"] = 20;

$tdatamst_ichiba_meeting1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_ichiba_meeting1[".strOrderBy"] = $tstrOrderBy;

$tdatamst_ichiba_meeting1[".orderindexes"] = array();
$tdatamst_ichiba_meeting1[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_ichiba_meeting1[".sqlHead"] = "SELECT `id`,  `name`,  `company`,  `representative`,  `meeting_name`,  `default_date`,  `original_id`,  concat(`meeting_name`,`default_date`,'日') as 'list_name'";
$tdatamst_ichiba_meeting1[".sqlFrom"] = "FROM `mst_ichiba_meeting`";
$tdatamst_ichiba_meeting1[".sqlWhereExpr"] = "";
$tdatamst_ichiba_meeting1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_ichiba_meeting1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_ichiba_meeting1[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_ichiba_meeting1[".highlightSearchResults"] = true;

$tableKeysmst_ichiba_meeting1 = array();
$tableKeysmst_ichiba_meeting1[] = "id";
$tdatamst_ichiba_meeting1[".Keys"] = $tableKeysmst_ichiba_meeting1;

$tdatamst_ichiba_meeting1[".listFields"] = array();
$tdatamst_ichiba_meeting1[".listFields"][] = "list_name";
$tdatamst_ichiba_meeting1[".listFields"][] = "id";
$tdatamst_ichiba_meeting1[".listFields"][] = "name";
$tdatamst_ichiba_meeting1[".listFields"][] = "company";
$tdatamst_ichiba_meeting1[".listFields"][] = "representative";
$tdatamst_ichiba_meeting1[".listFields"][] = "meeting_name";
$tdatamst_ichiba_meeting1[".listFields"][] = "default_date";
$tdatamst_ichiba_meeting1[".listFields"][] = "original_id";

$tdatamst_ichiba_meeting1[".hideMobileList"] = array();


$tdatamst_ichiba_meeting1[".viewFields"] = array();
$tdatamst_ichiba_meeting1[".viewFields"][] = "list_name";

$tdatamst_ichiba_meeting1[".addFields"] = array();

$tdatamst_ichiba_meeting1[".masterListFields"] = array();
$tdatamst_ichiba_meeting1[".masterListFields"][] = "list_name";
$tdatamst_ichiba_meeting1[".masterListFields"][] = "id";
$tdatamst_ichiba_meeting1[".masterListFields"][] = "name";
$tdatamst_ichiba_meeting1[".masterListFields"][] = "company";
$tdatamst_ichiba_meeting1[".masterListFields"][] = "representative";
$tdatamst_ichiba_meeting1[".masterListFields"][] = "meeting_name";
$tdatamst_ichiba_meeting1[".masterListFields"][] = "default_date";
$tdatamst_ichiba_meeting1[".masterListFields"][] = "original_id";

$tdatamst_ichiba_meeting1[".inlineAddFields"] = array();
$tdatamst_ichiba_meeting1[".inlineAddFields"][] = "name";
$tdatamst_ichiba_meeting1[".inlineAddFields"][] = "company";
$tdatamst_ichiba_meeting1[".inlineAddFields"][] = "representative";
$tdatamst_ichiba_meeting1[".inlineAddFields"][] = "meeting_name";
$tdatamst_ichiba_meeting1[".inlineAddFields"][] = "default_date";
$tdatamst_ichiba_meeting1[".inlineAddFields"][] = "original_id";

$tdatamst_ichiba_meeting1[".editFields"] = array();

$tdatamst_ichiba_meeting1[".inlineEditFields"] = array();
$tdatamst_ichiba_meeting1[".inlineEditFields"][] = "name";
$tdatamst_ichiba_meeting1[".inlineEditFields"][] = "company";
$tdatamst_ichiba_meeting1[".inlineEditFields"][] = "representative";
$tdatamst_ichiba_meeting1[".inlineEditFields"][] = "meeting_name";
$tdatamst_ichiba_meeting1[".inlineEditFields"][] = "default_date";
$tdatamst_ichiba_meeting1[".inlineEditFields"][] = "original_id";

$tdatamst_ichiba_meeting1[".updateSelectedFields"] = array();


$tdatamst_ichiba_meeting1[".exportFields"] = array();
$tdatamst_ichiba_meeting1[".exportFields"][] = "list_name";
$tdatamst_ichiba_meeting1[".exportFields"][] = "id";
$tdatamst_ichiba_meeting1[".exportFields"][] = "name";
$tdatamst_ichiba_meeting1[".exportFields"][] = "company";
$tdatamst_ichiba_meeting1[".exportFields"][] = "representative";
$tdatamst_ichiba_meeting1[".exportFields"][] = "meeting_name";
$tdatamst_ichiba_meeting1[".exportFields"][] = "default_date";
$tdatamst_ichiba_meeting1[".exportFields"][] = "original_id";

$tdatamst_ichiba_meeting1[".importFields"] = array();
$tdatamst_ichiba_meeting1[".importFields"][] = "id";
$tdatamst_ichiba_meeting1[".importFields"][] = "name";
$tdatamst_ichiba_meeting1[".importFields"][] = "company";
$tdatamst_ichiba_meeting1[".importFields"][] = "representative";
$tdatamst_ichiba_meeting1[".importFields"][] = "meeting_name";
$tdatamst_ichiba_meeting1[".importFields"][] = "default_date";
$tdatamst_ichiba_meeting1[".importFields"][] = "original_id";
$tdatamst_ichiba_meeting1[".importFields"][] = "list_name";

$tdatamst_ichiba_meeting1[".printFields"] = array();
$tdatamst_ichiba_meeting1[".printFields"][] = "list_name";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_ichiba_meeting";
	$fdata["Label"] = GetFieldLabel("mst_ichiba_meeting1","id");
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




	$tdatamst_ichiba_meeting1["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_ichiba_meeting";
	$fdata["Label"] = GetFieldLabel("mst_ichiba_meeting1","name");
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




	$tdatamst_ichiba_meeting1["name"] = $fdata;
//	company
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "company";
	$fdata["GoodName"] = "company";
	$fdata["ownerTable"] = "mst_ichiba_meeting";
	$fdata["Label"] = GetFieldLabel("mst_ichiba_meeting1","company");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "company";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`company`";

	
	
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




	$tdatamst_ichiba_meeting1["company"] = $fdata;
//	representative
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "representative";
	$fdata["GoodName"] = "representative";
	$fdata["ownerTable"] = "mst_ichiba_meeting";
	$fdata["Label"] = GetFieldLabel("mst_ichiba_meeting1","representative");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "representative";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`representative`";

	
	
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




	$tdatamst_ichiba_meeting1["representative"] = $fdata;
//	meeting_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "meeting_name";
	$fdata["GoodName"] = "meeting_name";
	$fdata["ownerTable"] = "mst_ichiba_meeting";
	$fdata["Label"] = GetFieldLabel("mst_ichiba_meeting1","meeting_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "meeting_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`meeting_name`";

	
	
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




	$tdatamst_ichiba_meeting1["meeting_name"] = $fdata;
//	default_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "default_date";
	$fdata["GoodName"] = "default_date";
	$fdata["ownerTable"] = "mst_ichiba_meeting";
	$fdata["Label"] = GetFieldLabel("mst_ichiba_meeting1","default_date");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "default_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`default_date`";

	
	
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




	$tdatamst_ichiba_meeting1["default_date"] = $fdata;
//	original_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "original_id";
	$fdata["GoodName"] = "original_id";
	$fdata["ownerTable"] = "mst_ichiba_meeting";
	$fdata["Label"] = GetFieldLabel("mst_ichiba_meeting1","original_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "original_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`original_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatamst_ichiba_meeting1["original_id"] = $fdata;
//	list_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "list_name";
	$fdata["GoodName"] = "list_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("mst_ichiba_meeting1","list_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "list_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(`meeting_name`,`default_date`,'日')";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_ichiba_meeting1["list_name"] = $fdata;


$tables_data["mst_ichiba_meeting1"]=&$tdatamst_ichiba_meeting1;
$field_labels["mst_ichiba_meeting1"] = &$fieldLabelsmst_ichiba_meeting1;
$fieldToolTips["mst_ichiba_meeting1"] = &$fieldToolTipsmst_ichiba_meeting1;
$placeHolders["mst_ichiba_meeting1"] = &$placeHoldersmst_ichiba_meeting1;
$page_titles["mst_ichiba_meeting1"] = &$pageTitlesmst_ichiba_meeting1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_ichiba_meeting1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_ichiba_meeting1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_ichiba_meeting1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `company`,  `representative`,  `meeting_name`,  `default_date`,  `original_id`,  concat(`meeting_name`,`default_date`,'日') as 'list_name'";
$proto0["m_strFrom"] = "FROM `mst_ichiba_meeting`";
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
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting1"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_ichiba_meeting1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting1"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_ichiba_meeting1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "company",
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting1"
));

$proto10["m_sql"] = "`company`";
$proto10["m_srcTableName"] = "mst_ichiba_meeting1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "representative",
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting1"
));

$proto12["m_sql"] = "`representative`";
$proto12["m_srcTableName"] = "mst_ichiba_meeting1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "meeting_name",
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting1"
));

$proto14["m_sql"] = "`meeting_name`";
$proto14["m_srcTableName"] = "mst_ichiba_meeting1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "default_date",
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting1"
));

$proto16["m_sql"] = "`default_date`";
$proto16["m_srcTableName"] = "mst_ichiba_meeting1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "original_id",
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting1"
));

$proto18["m_sql"] = "`original_id`";
$proto18["m_srcTableName"] = "mst_ichiba_meeting1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_CUSTOM";
$proto21["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`meeting_name`"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`default_date`"
));

$proto21["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'日'"
));

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "concat(`meeting_name`,`default_date`,'日')";
$proto20["m_srcTableName"] = "mst_ichiba_meeting1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "list_name";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "mst_ichiba_meeting";
$proto26["m_srcTableName"] = "mst_ichiba_meeting1";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "id";
$proto26["m_columns"][] = "name";
$proto26["m_columns"][] = "company";
$proto26["m_columns"][] = "representative";
$proto26["m_columns"][] = "meeting_name";
$proto26["m_columns"][] = "default_date";
$proto26["m_columns"][] = "original_id";
$proto26["m_columns"][] = "product_list_sheet_id";
$proto26["m_columns"][] = "mst_business_partner_id";
$proto26["m_columns"][] = "set_product_status_id";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "`mst_ichiba_meeting`";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "mst_ichiba_meeting1";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto29=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_ichiba_meeting",
	"m_srcTableName" => "mst_ichiba_meeting1"
));

$proto29["m_column"]=$obj;
$proto29["m_bAsc"] = 0;
$proto29["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto29);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_ichiba_meeting1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_ichiba_meeting1 = createSqlQuery_mst_ichiba_meeting1();


	
		;

								

$tdatamst_ichiba_meeting1[".sqlquery"] = $queryData_mst_ichiba_meeting1;

$tableEvents["mst_ichiba_meeting1"] = new eventsBase;
$tdatamst_ichiba_meeting1[".hasEvents"] = false;

?>