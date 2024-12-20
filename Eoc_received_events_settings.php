<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_received_events = array();
	$tdataEoc_received_events[".truncateText"] = true;
	$tdataEoc_received_events[".NumberOfChars"] = 80;
	$tdataEoc_received_events[".ShortName"] = "Eoc_received_events";
	$tdataEoc_received_events[".OwnerID"] = "";
	$tdataEoc_received_events[".OriginalTable"] = "Eoc_received_events";

//	field labels
$fieldLabelsEoc_received_events = array();
$fieldToolTipsEoc_received_events = array();
$pageTitlesEoc_received_events = array();
$placeHoldersEoc_received_events = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_received_events["Japanese"] = array();
	$fieldToolTipsEoc_received_events["Japanese"] = array();
	$placeHoldersEoc_received_events["Japanese"] = array();
	$pageTitlesEoc_received_events["Japanese"] = array();
	$fieldLabelsEoc_received_events["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_received_events["Japanese"]["id"] = "";
	$placeHoldersEoc_received_events["Japanese"]["id"] = "";
	$fieldLabelsEoc_received_events["Japanese"]["Eoc_received_id"] = "受付Id";
	$fieldToolTipsEoc_received_events["Japanese"]["Eoc_received_id"] = "";
	$placeHoldersEoc_received_events["Japanese"]["Eoc_received_id"] = "";
	$fieldLabelsEoc_received_events["Japanese"]["event"] = "イベント";
	$fieldToolTipsEoc_received_events["Japanese"]["event"] = "";
	$placeHoldersEoc_received_events["Japanese"]["event"] = "";
	$fieldLabelsEoc_received_events["Japanese"]["content"] = "内容";
	$fieldToolTipsEoc_received_events["Japanese"]["content"] = "";
	$placeHoldersEoc_received_events["Japanese"]["content"] = "";
	$fieldLabelsEoc_received_events["Japanese"]["content_by_text"] = "内容(テキスト)";
	$fieldToolTipsEoc_received_events["Japanese"]["content_by_text"] = "";
	$placeHoldersEoc_received_events["Japanese"]["content_by_text"] = "";
	if (count($fieldToolTipsEoc_received_events["Japanese"]))
		$tdataEoc_received_events[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_received_events[""] = array();
	$fieldToolTipsEoc_received_events[""] = array();
	$placeHoldersEoc_received_events[""] = array();
	$pageTitlesEoc_received_events[""] = array();
	$fieldLabelsEoc_received_events[""]["id"] = "Id";
	$fieldToolTipsEoc_received_events[""]["id"] = "";
	$placeHoldersEoc_received_events[""]["id"] = "";
	$fieldLabelsEoc_received_events[""]["Eoc_received_id"] = "Eoc Received Id";
	$fieldToolTipsEoc_received_events[""]["Eoc_received_id"] = "";
	$placeHoldersEoc_received_events[""]["Eoc_received_id"] = "";
	$fieldLabelsEoc_received_events[""]["event"] = "Event";
	$fieldToolTipsEoc_received_events[""]["event"] = "";
	$placeHoldersEoc_received_events[""]["event"] = "";
	$fieldLabelsEoc_received_events[""]["content"] = "Content";
	$fieldToolTipsEoc_received_events[""]["content"] = "";
	$placeHoldersEoc_received_events[""]["content"] = "";
	$fieldLabelsEoc_received_events[""]["content_by_text"] = "Content By Text";
	$fieldToolTipsEoc_received_events[""]["content_by_text"] = "";
	$placeHoldersEoc_received_events[""]["content_by_text"] = "";
	if (count($fieldToolTipsEoc_received_events[""]))
		$tdataEoc_received_events[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_received_events["English"] = array();
	$fieldToolTipsEoc_received_events["English"] = array();
	$placeHoldersEoc_received_events["English"] = array();
	$pageTitlesEoc_received_events["English"] = array();
	$fieldLabelsEoc_received_events["English"]["id"] = "Id";
	$fieldToolTipsEoc_received_events["English"]["id"] = "";
	$placeHoldersEoc_received_events["English"]["id"] = "";
	$fieldLabelsEoc_received_events["English"]["Eoc_received_id"] = "Eoc Received Id";
	$fieldToolTipsEoc_received_events["English"]["Eoc_received_id"] = "";
	$placeHoldersEoc_received_events["English"]["Eoc_received_id"] = "";
	$fieldLabelsEoc_received_events["English"]["event"] = "Event";
	$fieldToolTipsEoc_received_events["English"]["event"] = "";
	$placeHoldersEoc_received_events["English"]["event"] = "";
	$fieldLabelsEoc_received_events["English"]["content"] = "Content";
	$fieldToolTipsEoc_received_events["English"]["content"] = "";
	$placeHoldersEoc_received_events["English"]["content"] = "";
	$fieldLabelsEoc_received_events["English"]["content_by_text"] = "Content By Text";
	$fieldToolTipsEoc_received_events["English"]["content_by_text"] = "";
	$placeHoldersEoc_received_events["English"]["content_by_text"] = "";
	if (count($fieldToolTipsEoc_received_events["English"]))
		$tdataEoc_received_events[".isUseToolTips"] = true;
}


	$tdataEoc_received_events[".NCSearch"] = true;



$tdataEoc_received_events[".shortTableName"] = "Eoc_received_events";
$tdataEoc_received_events[".nSecOptions"] = 0;
$tdataEoc_received_events[".recsPerRowPrint"] = 1;
$tdataEoc_received_events[".mainTableOwnerID"] = "";
$tdataEoc_received_events[".moveNext"] = 1;
$tdataEoc_received_events[".entityType"] = 0;

$tdataEoc_received_events[".strOriginalTableName"] = "Eoc_received_events";

	



$tdataEoc_received_events[".showAddInPopup"] = false;

$tdataEoc_received_events[".showEditInPopup"] = false;

$tdataEoc_received_events[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_received_events[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_received_events[".fieldsForRegister"] = array();

$tdataEoc_received_events[".listAjax"] = false;

	$tdataEoc_received_events[".audit"] = true;

	$tdataEoc_received_events[".locking"] = false;



$tdataEoc_received_events[".list"] = true;

$tdataEoc_received_events[".inlineEdit"] = true;


$tdataEoc_received_events[".reorderRecordsByHeader"] = true;



$tdataEoc_received_events[".inlineAdd"] = true;




$tdataEoc_received_events[".delete"] = true;

$tdataEoc_received_events[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_received_events[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_received_events[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_received_events[".searchSaving"] = false;
//

$tdataEoc_received_events[".showSearchPanel"] = true;
		$tdataEoc_received_events[".flexibleSearch"] = true;

$tdataEoc_received_events[".isUseAjaxSuggest"] = true;

$tdataEoc_received_events[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdataEoc_received_events[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_received_events[".buttonsAdded"] = false;

$tdataEoc_received_events[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_received_events[".isUseTimeForSearch"] = false;



$tdataEoc_received_events[".badgeColor"] = "e67349";


$tdataEoc_received_events[".allSearchFields"] = array();
$tdataEoc_received_events[".filterFields"] = array();
$tdataEoc_received_events[".requiredSearchFields"] = array();

$tdataEoc_received_events[".allSearchFields"][] = "id";
	$tdataEoc_received_events[".allSearchFields"][] = "Eoc_received_id";
	$tdataEoc_received_events[".allSearchFields"][] = "event";
	$tdataEoc_received_events[".allSearchFields"][] = "content";
	$tdataEoc_received_events[".allSearchFields"][] = "content_by_text";
	

$tdataEoc_received_events[".googleLikeFields"] = array();
$tdataEoc_received_events[".googleLikeFields"][] = "id";
$tdataEoc_received_events[".googleLikeFields"][] = "Eoc_received_id";
$tdataEoc_received_events[".googleLikeFields"][] = "event";
$tdataEoc_received_events[".googleLikeFields"][] = "content";
$tdataEoc_received_events[".googleLikeFields"][] = "content_by_text";


$tdataEoc_received_events[".advSearchFields"] = array();
$tdataEoc_received_events[".advSearchFields"][] = "id";
$tdataEoc_received_events[".advSearchFields"][] = "Eoc_received_id";
$tdataEoc_received_events[".advSearchFields"][] = "event";
$tdataEoc_received_events[".advSearchFields"][] = "content";
$tdataEoc_received_events[".advSearchFields"][] = "content_by_text";

$tdataEoc_received_events[".tableType"] = "list";

$tdataEoc_received_events[".printerPageOrientation"] = 0;
$tdataEoc_received_events[".nPrinterPageScale"] = 100;

$tdataEoc_received_events[".nPrinterSplitRecords"] = 40;

$tdataEoc_received_events[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_received_events[".geocodingEnabled"] = false;





$tdataEoc_received_events[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_received_events[".pageSize"] = 20;

$tdataEoc_received_events[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_received_events[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_received_events[".orderindexes"] = array();
$tdataEoc_received_events[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`id`");

$tdataEoc_received_events[".sqlHead"] = "SELECT `id`,  `Eoc_received_id`,  `event`,  `content`,  `content_by_text`";
$tdataEoc_received_events[".sqlFrom"] = "FROM `Eoc_received_events`";
$tdataEoc_received_events[".sqlWhereExpr"] = "";
$tdataEoc_received_events[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_received_events[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_received_events[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_received_events[".highlightSearchResults"] = true;

$tableKeysEoc_received_events = array();
$tableKeysEoc_received_events[] = "id";
$tdataEoc_received_events[".Keys"] = $tableKeysEoc_received_events;

$tdataEoc_received_events[".listFields"] = array();
$tdataEoc_received_events[".listFields"][] = "id";
$tdataEoc_received_events[".listFields"][] = "Eoc_received_id";
$tdataEoc_received_events[".listFields"][] = "event";
$tdataEoc_received_events[".listFields"][] = "content";
$tdataEoc_received_events[".listFields"][] = "content_by_text";

$tdataEoc_received_events[".hideMobileList"] = array();


$tdataEoc_received_events[".viewFields"] = array();

$tdataEoc_received_events[".addFields"] = array();

$tdataEoc_received_events[".masterListFields"] = array();
$tdataEoc_received_events[".masterListFields"][] = "id";
$tdataEoc_received_events[".masterListFields"][] = "Eoc_received_id";
$tdataEoc_received_events[".masterListFields"][] = "event";
$tdataEoc_received_events[".masterListFields"][] = "content";
$tdataEoc_received_events[".masterListFields"][] = "content_by_text";

$tdataEoc_received_events[".inlineAddFields"] = array();
$tdataEoc_received_events[".inlineAddFields"][] = "event";
$tdataEoc_received_events[".inlineAddFields"][] = "content";
$tdataEoc_received_events[".inlineAddFields"][] = "content_by_text";

$tdataEoc_received_events[".editFields"] = array();

$tdataEoc_received_events[".inlineEditFields"] = array();
$tdataEoc_received_events[".inlineEditFields"][] = "event";
$tdataEoc_received_events[".inlineEditFields"][] = "content";
$tdataEoc_received_events[".inlineEditFields"][] = "content_by_text";

$tdataEoc_received_events[".updateSelectedFields"] = array();


$tdataEoc_received_events[".exportFields"] = array();

$tdataEoc_received_events[".importFields"] = array();

$tdataEoc_received_events[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_received_events";
	$fdata["Label"] = GetFieldLabel("Eoc_received_events","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_received_events["id"] = $fdata;
//	Eoc_received_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Eoc_received_id";
	$fdata["GoodName"] = "Eoc_received_id";
	$fdata["ownerTable"] = "Eoc_received_events";
	$fdata["Label"] = GetFieldLabel("Eoc_received_events","Eoc_received_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Eoc_received_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_received_id`";

	
	
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




	$tdataEoc_received_events["Eoc_received_id"] = $fdata;
//	event
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "event";
	$fdata["GoodName"] = "event";
	$fdata["ownerTable"] = "Eoc_received_events";
	$fdata["Label"] = GetFieldLabel("Eoc_received_events","event");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "event";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`event`";

	
	
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
	$edata["LookupTable"] = "mst_Eoc_received_events";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "content";

	
	
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




	$tdataEoc_received_events["event"] = $fdata;
//	content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "content";
	$fdata["GoodName"] = "content";
	$fdata["ownerTable"] = "Eoc_received_events";
	$fdata["Label"] = GetFieldLabel("Eoc_received_events","content");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "content";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`content`";

	
	
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
	$edata["LookupTable"] = "mst_Eoc_received_event_contents";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "event", "lookup" => "event_id" );

	
	

	
	
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




	$tdataEoc_received_events["content"] = $fdata;
//	content_by_text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "content_by_text";
	$fdata["GoodName"] = "content_by_text";
	$fdata["ownerTable"] = "Eoc_received_events";
	$fdata["Label"] = GetFieldLabel("Eoc_received_events","content_by_text");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "content_by_text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`content_by_text`";

	
	
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




	$tdataEoc_received_events["content_by_text"] = $fdata;


$tables_data["Eoc_received_events"]=&$tdataEoc_received_events;
$field_labels["Eoc_received_events"] = &$fieldLabelsEoc_received_events;
$fieldToolTips["Eoc_received_events"] = &$fieldToolTipsEoc_received_events;
$placeHolders["Eoc_received_events"] = &$placeHoldersEoc_received_events;
$page_titles["Eoc_received_events"] = &$pageTitlesEoc_received_events;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_received_events"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_received_events"] = array();


	
				$strOriginalDetailsTable="Eoc_received";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_received";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_received";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Eoc_received_events"][0] = $masterParams;
				$masterTablesData["Eoc_received_events"][0]["masterKeys"] = array();
	$masterTablesData["Eoc_received_events"][0]["masterKeys"][]="id";
				$masterTablesData["Eoc_received_events"][0]["detailKeys"] = array();
	$masterTablesData["Eoc_received_events"][0]["detailKeys"][]="Eoc_received_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_received_events()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `Eoc_received_id`,  `event`,  `content`,  `content_by_text`";
$proto0["m_strFrom"] = "FROM `Eoc_received_events`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `id`";
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
	"m_strTable" => "Eoc_received_events",
	"m_srcTableName" => "Eoc_received_events"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "Eoc_received_events";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_received_id",
	"m_strTable" => "Eoc_received_events",
	"m_srcTableName" => "Eoc_received_events"
));

$proto8["m_sql"] = "`Eoc_received_id`";
$proto8["m_srcTableName"] = "Eoc_received_events";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "event",
	"m_strTable" => "Eoc_received_events",
	"m_srcTableName" => "Eoc_received_events"
));

$proto10["m_sql"] = "`event`";
$proto10["m_srcTableName"] = "Eoc_received_events";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "content",
	"m_strTable" => "Eoc_received_events",
	"m_srcTableName" => "Eoc_received_events"
));

$proto12["m_sql"] = "`content`";
$proto12["m_srcTableName"] = "Eoc_received_events";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "content_by_text",
	"m_strTable" => "Eoc_received_events",
	"m_srcTableName" => "Eoc_received_events"
));

$proto14["m_sql"] = "`content_by_text`";
$proto14["m_srcTableName"] = "Eoc_received_events";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "Eoc_received_events";
$proto17["m_srcTableName"] = "Eoc_received_events";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "Eoc_received_id";
$proto17["m_columns"][] = "event";
$proto17["m_columns"][] = "content";
$proto17["m_columns"][] = "content_by_text";
$proto17["m_columns"][] = "Eoc_takuhai_events_id";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "`Eoc_received_events`";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Eoc_received_events";
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
	"m_strTable" => "Eoc_received_events",
	"m_srcTableName" => "Eoc_received_events"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 1;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_received_events";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_received_events = createSqlQuery_Eoc_received_events();


	
		;

					

$tdataEoc_received_events[".sqlquery"] = $queryData_Eoc_received_events;

include_once(getabspath("include/Eoc_received_events_events.php"));
$tableEvents["Eoc_received_events"] = new eventclass_Eoc_received_events;
$tdataEoc_received_events[".hasEvents"] = true;

?>