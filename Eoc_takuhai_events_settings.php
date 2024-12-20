<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_takuhai_events = array();
	$tdataEoc_takuhai_events[".truncateText"] = true;
	$tdataEoc_takuhai_events[".NumberOfChars"] = 80;
	$tdataEoc_takuhai_events[".ShortName"] = "Eoc_takuhai_events";
	$tdataEoc_takuhai_events[".OwnerID"] = "";
	$tdataEoc_takuhai_events[".OriginalTable"] = "Eoc_takuhai_events";

//	field labels
$fieldLabelsEoc_takuhai_events = array();
$fieldToolTipsEoc_takuhai_events = array();
$pageTitlesEoc_takuhai_events = array();
$placeHoldersEoc_takuhai_events = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_takuhai_events["Japanese"] = array();
	$fieldToolTipsEoc_takuhai_events["Japanese"] = array();
	$placeHoldersEoc_takuhai_events["Japanese"] = array();
	$pageTitlesEoc_takuhai_events["Japanese"] = array();
	$fieldLabelsEoc_takuhai_events["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_events["Japanese"]["id"] = "";
	$placeHoldersEoc_takuhai_events["Japanese"]["id"] = "";
	$fieldLabelsEoc_takuhai_events["Japanese"]["Eoc_takuhai_id"] = "宅配申込Id";
	$fieldToolTipsEoc_takuhai_events["Japanese"]["Eoc_takuhai_id"] = "";
	$placeHoldersEoc_takuhai_events["Japanese"]["Eoc_takuhai_id"] = "";
	$fieldLabelsEoc_takuhai_events["Japanese"]["event"] = "イベント";
	$fieldToolTipsEoc_takuhai_events["Japanese"]["event"] = "";
	$placeHoldersEoc_takuhai_events["Japanese"]["event"] = "";
	$fieldLabelsEoc_takuhai_events["Japanese"]["content"] = "内容";
	$fieldToolTipsEoc_takuhai_events["Japanese"]["content"] = "";
	$placeHoldersEoc_takuhai_events["Japanese"]["content"] = "";
	$fieldLabelsEoc_takuhai_events["Japanese"]["content_by_text"] = "内容(テキスト)";
	$fieldToolTipsEoc_takuhai_events["Japanese"]["content_by_text"] = "";
	$placeHoldersEoc_takuhai_events["Japanese"]["content_by_text"] = "";
	$fieldLabelsEoc_takuhai_events["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsEoc_takuhai_events["Japanese"]["create_at"] = "";
	$placeHoldersEoc_takuhai_events["Japanese"]["create_at"] = "";
	$fieldLabelsEoc_takuhai_events["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsEoc_takuhai_events["Japanese"]["create_by"] = "";
	$placeHoldersEoc_takuhai_events["Japanese"]["create_by"] = "";
	$fieldLabelsEoc_takuhai_events["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsEoc_takuhai_events["Japanese"]["update_at"] = "";
	$placeHoldersEoc_takuhai_events["Japanese"]["update_at"] = "";
	$fieldLabelsEoc_takuhai_events["Japanese"]["update_by"] = "更新車";
	$fieldToolTipsEoc_takuhai_events["Japanese"]["update_by"] = "";
	$placeHoldersEoc_takuhai_events["Japanese"]["update_by"] = "";
	if (count($fieldToolTipsEoc_takuhai_events["Japanese"]))
		$tdataEoc_takuhai_events[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_takuhai_events[""] = array();
	$fieldToolTipsEoc_takuhai_events[""] = array();
	$placeHoldersEoc_takuhai_events[""] = array();
	$pageTitlesEoc_takuhai_events[""] = array();
	$fieldLabelsEoc_takuhai_events[""]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_events[""]["id"] = "";
	$placeHoldersEoc_takuhai_events[""]["id"] = "";
	$fieldLabelsEoc_takuhai_events[""]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipsEoc_takuhai_events[""]["Eoc_takuhai_id"] = "";
	$placeHoldersEoc_takuhai_events[""]["Eoc_takuhai_id"] = "";
	$fieldLabelsEoc_takuhai_events[""]["event"] = "Event";
	$fieldToolTipsEoc_takuhai_events[""]["event"] = "";
	$placeHoldersEoc_takuhai_events[""]["event"] = "";
	$fieldLabelsEoc_takuhai_events[""]["content"] = "Content";
	$fieldToolTipsEoc_takuhai_events[""]["content"] = "";
	$placeHoldersEoc_takuhai_events[""]["content"] = "";
	$fieldLabelsEoc_takuhai_events[""]["content_by_text"] = "Content By Text";
	$fieldToolTipsEoc_takuhai_events[""]["content_by_text"] = "";
	$placeHoldersEoc_takuhai_events[""]["content_by_text"] = "";
	$fieldLabelsEoc_takuhai_events[""]["create_at"] = "Create At";
	$fieldToolTipsEoc_takuhai_events[""]["create_at"] = "";
	$placeHoldersEoc_takuhai_events[""]["create_at"] = "";
	$fieldLabelsEoc_takuhai_events[""]["create_by"] = "Create By";
	$fieldToolTipsEoc_takuhai_events[""]["create_by"] = "";
	$placeHoldersEoc_takuhai_events[""]["create_by"] = "";
	$fieldLabelsEoc_takuhai_events[""]["update_at"] = "Update At";
	$fieldToolTipsEoc_takuhai_events[""]["update_at"] = "";
	$placeHoldersEoc_takuhai_events[""]["update_at"] = "";
	$fieldLabelsEoc_takuhai_events[""]["update_by"] = "Update By";
	$fieldToolTipsEoc_takuhai_events[""]["update_by"] = "";
	$placeHoldersEoc_takuhai_events[""]["update_by"] = "";
	if (count($fieldToolTipsEoc_takuhai_events[""]))
		$tdataEoc_takuhai_events[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_takuhai_events["English"] = array();
	$fieldToolTipsEoc_takuhai_events["English"] = array();
	$placeHoldersEoc_takuhai_events["English"] = array();
	$pageTitlesEoc_takuhai_events["English"] = array();
	$fieldLabelsEoc_takuhai_events["English"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_events["English"]["id"] = "";
	$placeHoldersEoc_takuhai_events["English"]["id"] = "";
	$fieldLabelsEoc_takuhai_events["English"]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipsEoc_takuhai_events["English"]["Eoc_takuhai_id"] = "";
	$placeHoldersEoc_takuhai_events["English"]["Eoc_takuhai_id"] = "";
	$fieldLabelsEoc_takuhai_events["English"]["event"] = "Event";
	$fieldToolTipsEoc_takuhai_events["English"]["event"] = "";
	$placeHoldersEoc_takuhai_events["English"]["event"] = "";
	$fieldLabelsEoc_takuhai_events["English"]["content"] = "Content";
	$fieldToolTipsEoc_takuhai_events["English"]["content"] = "";
	$placeHoldersEoc_takuhai_events["English"]["content"] = "";
	$fieldLabelsEoc_takuhai_events["English"]["content_by_text"] = "Content By Text";
	$fieldToolTipsEoc_takuhai_events["English"]["content_by_text"] = "";
	$placeHoldersEoc_takuhai_events["English"]["content_by_text"] = "";
	$fieldLabelsEoc_takuhai_events["English"]["create_at"] = "Create At";
	$fieldToolTipsEoc_takuhai_events["English"]["create_at"] = "";
	$placeHoldersEoc_takuhai_events["English"]["create_at"] = "";
	$fieldLabelsEoc_takuhai_events["English"]["create_by"] = "Create By";
	$fieldToolTipsEoc_takuhai_events["English"]["create_by"] = "";
	$placeHoldersEoc_takuhai_events["English"]["create_by"] = "";
	$fieldLabelsEoc_takuhai_events["English"]["update_at"] = "Update At";
	$fieldToolTipsEoc_takuhai_events["English"]["update_at"] = "";
	$placeHoldersEoc_takuhai_events["English"]["update_at"] = "";
	$fieldLabelsEoc_takuhai_events["English"]["update_by"] = "Update By";
	$fieldToolTipsEoc_takuhai_events["English"]["update_by"] = "";
	$placeHoldersEoc_takuhai_events["English"]["update_by"] = "";
	if (count($fieldToolTipsEoc_takuhai_events["English"]))
		$tdataEoc_takuhai_events[".isUseToolTips"] = true;
}


	$tdataEoc_takuhai_events[".NCSearch"] = true;



$tdataEoc_takuhai_events[".shortTableName"] = "Eoc_takuhai_events";
$tdataEoc_takuhai_events[".nSecOptions"] = 0;
$tdataEoc_takuhai_events[".recsPerRowPrint"] = 1;
$tdataEoc_takuhai_events[".mainTableOwnerID"] = "";
$tdataEoc_takuhai_events[".moveNext"] = 1;
$tdataEoc_takuhai_events[".entityType"] = 0;

$tdataEoc_takuhai_events[".strOriginalTableName"] = "Eoc_takuhai_events";

	



$tdataEoc_takuhai_events[".showAddInPopup"] = false;

$tdataEoc_takuhai_events[".showEditInPopup"] = false;

$tdataEoc_takuhai_events[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_takuhai_events[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_takuhai_events[".fieldsForRegister"] = array();

$tdataEoc_takuhai_events[".listAjax"] = false;

	$tdataEoc_takuhai_events[".audit"] = true;

	$tdataEoc_takuhai_events[".locking"] = false;



$tdataEoc_takuhai_events[".list"] = true;

$tdataEoc_takuhai_events[".inlineEdit"] = true;


$tdataEoc_takuhai_events[".reorderRecordsByHeader"] = true;



$tdataEoc_takuhai_events[".inlineAdd"] = true;




$tdataEoc_takuhai_events[".delete"] = true;

$tdataEoc_takuhai_events[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_takuhai_events[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_takuhai_events[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_takuhai_events[".searchSaving"] = false;
//

$tdataEoc_takuhai_events[".showSearchPanel"] = true;
		$tdataEoc_takuhai_events[".flexibleSearch"] = true;

$tdataEoc_takuhai_events[".isUseAjaxSuggest"] = true;

$tdataEoc_takuhai_events[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																		

$tdataEoc_takuhai_events[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_takuhai_events[".buttonsAdded"] = false;

$tdataEoc_takuhai_events[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_takuhai_events[".isUseTimeForSearch"] = false;



$tdataEoc_takuhai_events[".badgeColor"] = "cd853f";


$tdataEoc_takuhai_events[".allSearchFields"] = array();
$tdataEoc_takuhai_events[".filterFields"] = array();
$tdataEoc_takuhai_events[".requiredSearchFields"] = array();

$tdataEoc_takuhai_events[".allSearchFields"][] = "id";
	$tdataEoc_takuhai_events[".allSearchFields"][] = "Eoc_takuhai_id";
	$tdataEoc_takuhai_events[".allSearchFields"][] = "event";
	$tdataEoc_takuhai_events[".allSearchFields"][] = "content";
	$tdataEoc_takuhai_events[".allSearchFields"][] = "content_by_text";
	$tdataEoc_takuhai_events[".allSearchFields"][] = "create_at";
	$tdataEoc_takuhai_events[".allSearchFields"][] = "create_by";
	$tdataEoc_takuhai_events[".allSearchFields"][] = "update_at";
	$tdataEoc_takuhai_events[".allSearchFields"][] = "update_by";
	

$tdataEoc_takuhai_events[".googleLikeFields"] = array();
$tdataEoc_takuhai_events[".googleLikeFields"][] = "id";
$tdataEoc_takuhai_events[".googleLikeFields"][] = "Eoc_takuhai_id";
$tdataEoc_takuhai_events[".googleLikeFields"][] = "event";
$tdataEoc_takuhai_events[".googleLikeFields"][] = "content";
$tdataEoc_takuhai_events[".googleLikeFields"][] = "content_by_text";
$tdataEoc_takuhai_events[".googleLikeFields"][] = "create_at";
$tdataEoc_takuhai_events[".googleLikeFields"][] = "create_by";
$tdataEoc_takuhai_events[".googleLikeFields"][] = "update_at";
$tdataEoc_takuhai_events[".googleLikeFields"][] = "update_by";


$tdataEoc_takuhai_events[".advSearchFields"] = array();
$tdataEoc_takuhai_events[".advSearchFields"][] = "id";
$tdataEoc_takuhai_events[".advSearchFields"][] = "Eoc_takuhai_id";
$tdataEoc_takuhai_events[".advSearchFields"][] = "event";
$tdataEoc_takuhai_events[".advSearchFields"][] = "content";
$tdataEoc_takuhai_events[".advSearchFields"][] = "content_by_text";
$tdataEoc_takuhai_events[".advSearchFields"][] = "create_at";
$tdataEoc_takuhai_events[".advSearchFields"][] = "create_by";
$tdataEoc_takuhai_events[".advSearchFields"][] = "update_at";
$tdataEoc_takuhai_events[".advSearchFields"][] = "update_by";

$tdataEoc_takuhai_events[".tableType"] = "list";

$tdataEoc_takuhai_events[".printerPageOrientation"] = 0;
$tdataEoc_takuhai_events[".nPrinterPageScale"] = 100;

$tdataEoc_takuhai_events[".nPrinterSplitRecords"] = 40;

$tdataEoc_takuhai_events[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_takuhai_events[".geocodingEnabled"] = false;





$tdataEoc_takuhai_events[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_takuhai_events[".pageSize"] = 20;

$tdataEoc_takuhai_events[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_takuhai_events[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_takuhai_events[".orderindexes"] = array();
$tdataEoc_takuhai_events[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdataEoc_takuhai_events[".sqlHead"] = "SELECT `id`,  `Eoc_takuhai_id`,  `event`,  `content`,  `content_by_text`,  `create_at`,  `create_by`,  `update_at`,  `update_by`";
$tdataEoc_takuhai_events[".sqlFrom"] = "FROM `Eoc_takuhai_events`";
$tdataEoc_takuhai_events[".sqlWhereExpr"] = "";
$tdataEoc_takuhai_events[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_takuhai_events[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_takuhai_events[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_takuhai_events[".highlightSearchResults"] = true;

$tableKeysEoc_takuhai_events = array();
$tableKeysEoc_takuhai_events[] = "id";
$tdataEoc_takuhai_events[".Keys"] = $tableKeysEoc_takuhai_events;

$tdataEoc_takuhai_events[".listFields"] = array();
$tdataEoc_takuhai_events[".listFields"][] = "id";
$tdataEoc_takuhai_events[".listFields"][] = "Eoc_takuhai_id";
$tdataEoc_takuhai_events[".listFields"][] = "event";
$tdataEoc_takuhai_events[".listFields"][] = "content";
$tdataEoc_takuhai_events[".listFields"][] = "content_by_text";
$tdataEoc_takuhai_events[".listFields"][] = "create_at";
$tdataEoc_takuhai_events[".listFields"][] = "create_by";
$tdataEoc_takuhai_events[".listFields"][] = "update_at";
$tdataEoc_takuhai_events[".listFields"][] = "update_by";

$tdataEoc_takuhai_events[".hideMobileList"] = array();


$tdataEoc_takuhai_events[".viewFields"] = array();

$tdataEoc_takuhai_events[".addFields"] = array();

$tdataEoc_takuhai_events[".masterListFields"] = array();
$tdataEoc_takuhai_events[".masterListFields"][] = "id";
$tdataEoc_takuhai_events[".masterListFields"][] = "Eoc_takuhai_id";
$tdataEoc_takuhai_events[".masterListFields"][] = "event";
$tdataEoc_takuhai_events[".masterListFields"][] = "content";
$tdataEoc_takuhai_events[".masterListFields"][] = "content_by_text";
$tdataEoc_takuhai_events[".masterListFields"][] = "create_at";
$tdataEoc_takuhai_events[".masterListFields"][] = "create_by";
$tdataEoc_takuhai_events[".masterListFields"][] = "update_at";
$tdataEoc_takuhai_events[".masterListFields"][] = "update_by";

$tdataEoc_takuhai_events[".inlineAddFields"] = array();
$tdataEoc_takuhai_events[".inlineAddFields"][] = "event";
$tdataEoc_takuhai_events[".inlineAddFields"][] = "content";
$tdataEoc_takuhai_events[".inlineAddFields"][] = "content_by_text";

$tdataEoc_takuhai_events[".editFields"] = array();

$tdataEoc_takuhai_events[".inlineEditFields"] = array();
$tdataEoc_takuhai_events[".inlineEditFields"][] = "event";
$tdataEoc_takuhai_events[".inlineEditFields"][] = "content";
$tdataEoc_takuhai_events[".inlineEditFields"][] = "content_by_text";

$tdataEoc_takuhai_events[".updateSelectedFields"] = array();


$tdataEoc_takuhai_events[".exportFields"] = array();

$tdataEoc_takuhai_events[".importFields"] = array();

$tdataEoc_takuhai_events[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_takuhai_events";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_events","id");
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




	$tdataEoc_takuhai_events["id"] = $fdata;
//	Eoc_takuhai_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Eoc_takuhai_id";
	$fdata["GoodName"] = "Eoc_takuhai_id";
	$fdata["ownerTable"] = "Eoc_takuhai_events";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_events","Eoc_takuhai_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Eoc_takuhai_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai_id`";

	
	
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




	$tdataEoc_takuhai_events["Eoc_takuhai_id"] = $fdata;
//	event
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "event";
	$fdata["GoodName"] = "event";
	$fdata["ownerTable"] = "Eoc_takuhai_events";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_events","event");
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "content";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_events["event"] = $fdata;
//	content
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "content";
	$fdata["GoodName"] = "content";
	$fdata["ownerTable"] = "Eoc_takuhai_events";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_events","content");
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "event", "lookup" => "event_id" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_events["content"] = $fdata;
//	content_by_text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "content_by_text";
	$fdata["GoodName"] = "content_by_text";
	$fdata["ownerTable"] = "Eoc_takuhai_events";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_events","content_by_text");
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 80;
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




	$tdataEoc_takuhai_events["content_by_text"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "Eoc_takuhai_events";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_events","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_at`";

	
	
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




	$tdataEoc_takuhai_events["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "Eoc_takuhai_events";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_events","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_by`";

	
	
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




	$tdataEoc_takuhai_events["create_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "Eoc_takuhai_events";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_events","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_at`";

	
	
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




	$tdataEoc_takuhai_events["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "Eoc_takuhai_events";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_events","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_by`";

	
	
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




	$tdataEoc_takuhai_events["update_by"] = $fdata;


$tables_data["Eoc_takuhai_events"]=&$tdataEoc_takuhai_events;
$field_labels["Eoc_takuhai_events"] = &$fieldLabelsEoc_takuhai_events;
$fieldToolTips["Eoc_takuhai_events"] = &$fieldToolTipsEoc_takuhai_events;
$placeHolders["Eoc_takuhai_events"] = &$placeHoldersEoc_takuhai_events;
$page_titles["Eoc_takuhai_events"] = &$pageTitlesEoc_takuhai_events;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_takuhai_events"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_takuhai_events"] = array();


	
				$strOriginalDetailsTable="Eoc_takuhai";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_takuhai_for_catch";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_takuhai_for_catch";
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
					$masterTablesData["Eoc_takuhai_events"][0] = $masterParams;
				$masterTablesData["Eoc_takuhai_events"][0]["masterKeys"] = array();
	$masterTablesData["Eoc_takuhai_events"][0]["masterKeys"][]="id";
				$masterTablesData["Eoc_takuhai_events"][0]["detailKeys"] = array();
	$masterTablesData["Eoc_takuhai_events"][0]["detailKeys"][]="Eoc_takuhai_id";
		
	
				$strOriginalDetailsTable="Eoc_takuhai";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_takuhai_for_catch_history";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_takuhai_for_catch_history";
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
					$masterTablesData["Eoc_takuhai_events"][1] = $masterParams;
				$masterTablesData["Eoc_takuhai_events"][1]["masterKeys"] = array();
	$masterTablesData["Eoc_takuhai_events"][1]["masterKeys"][]="id";
				$masterTablesData["Eoc_takuhai_events"][1]["detailKeys"] = array();
	$masterTablesData["Eoc_takuhai_events"][1]["detailKeys"][]="Eoc_takuhai_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_takuhai_events()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `Eoc_takuhai_id`,  `event`,  `content`,  `content_by_text`,  `create_at`,  `create_by`,  `update_at`,  `update_by`";
$proto0["m_strFrom"] = "FROM `Eoc_takuhai_events`";
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
	"m_strTable" => "Eoc_takuhai_events",
	"m_srcTableName" => "Eoc_takuhai_events"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "Eoc_takuhai_events";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_takuhai_id",
	"m_strTable" => "Eoc_takuhai_events",
	"m_srcTableName" => "Eoc_takuhai_events"
));

$proto8["m_sql"] = "`Eoc_takuhai_id`";
$proto8["m_srcTableName"] = "Eoc_takuhai_events";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "event",
	"m_strTable" => "Eoc_takuhai_events",
	"m_srcTableName" => "Eoc_takuhai_events"
));

$proto10["m_sql"] = "`event`";
$proto10["m_srcTableName"] = "Eoc_takuhai_events";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "content",
	"m_strTable" => "Eoc_takuhai_events",
	"m_srcTableName" => "Eoc_takuhai_events"
));

$proto12["m_sql"] = "`content`";
$proto12["m_srcTableName"] = "Eoc_takuhai_events";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "content_by_text",
	"m_strTable" => "Eoc_takuhai_events",
	"m_srcTableName" => "Eoc_takuhai_events"
));

$proto14["m_sql"] = "`content_by_text`";
$proto14["m_srcTableName"] = "Eoc_takuhai_events";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "Eoc_takuhai_events",
	"m_srcTableName" => "Eoc_takuhai_events"
));

$proto16["m_sql"] = "`create_at`";
$proto16["m_srcTableName"] = "Eoc_takuhai_events";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "Eoc_takuhai_events",
	"m_srcTableName" => "Eoc_takuhai_events"
));

$proto18["m_sql"] = "`create_by`";
$proto18["m_srcTableName"] = "Eoc_takuhai_events";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "Eoc_takuhai_events",
	"m_srcTableName" => "Eoc_takuhai_events"
));

$proto20["m_sql"] = "`update_at`";
$proto20["m_srcTableName"] = "Eoc_takuhai_events";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "Eoc_takuhai_events",
	"m_srcTableName" => "Eoc_takuhai_events"
));

$proto22["m_sql"] = "`update_by`";
$proto22["m_srcTableName"] = "Eoc_takuhai_events";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "Eoc_takuhai_events";
$proto25["m_srcTableName"] = "Eoc_takuhai_events";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "Eoc_takuhai_id";
$proto25["m_columns"][] = "event";
$proto25["m_columns"][] = "content";
$proto25["m_columns"][] = "content_by_text";
$proto25["m_columns"][] = "create_at";
$proto25["m_columns"][] = "create_by";
$proto25["m_columns"][] = "update_at";
$proto25["m_columns"][] = "update_by";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`Eoc_takuhai_events`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "Eoc_takuhai_events";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai_events",
	"m_srcTableName" => "Eoc_takuhai_events"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 0;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_takuhai_events";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_takuhai_events = createSqlQuery_Eoc_takuhai_events();


	
		;

									

$tdataEoc_takuhai_events[".sqlquery"] = $queryData_Eoc_takuhai_events;

include_once(getabspath("include/Eoc_takuhai_events_events.php"));
$tableEvents["Eoc_takuhai_events"] = new eventclass_Eoc_takuhai_events;
$tdataEoc_takuhai_events[".hasEvents"] = true;

?>