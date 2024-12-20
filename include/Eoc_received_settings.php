<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_received = array();
	$tdataEoc_received[".truncateText"] = true;
	$tdataEoc_received[".NumberOfChars"] = 80;
	$tdataEoc_received[".ShortName"] = "Eoc_received";
	$tdataEoc_received[".OwnerID"] = "";
	$tdataEoc_received[".OriginalTable"] = "Eoc_received";

//	field labels
$fieldLabelsEoc_received = array();
$fieldToolTipsEoc_received = array();
$pageTitlesEoc_received = array();
$placeHoldersEoc_received = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_received["Japanese"] = array();
	$fieldToolTipsEoc_received["Japanese"] = array();
	$placeHoldersEoc_received["Japanese"] = array();
	$pageTitlesEoc_received["Japanese"] = array();
	$fieldLabelsEoc_received["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_received["Japanese"]["id"] = "";
	$placeHoldersEoc_received["Japanese"]["id"] = "";
	$fieldLabelsEoc_received["Japanese"]["hokosuu"] = "箱数";
	$fieldToolTipsEoc_received["Japanese"]["hokosuu"] = "";
	$placeHoldersEoc_received["Japanese"]["hokosuu"] = "";
	$fieldLabelsEoc_received["Japanese"]["time"] = "到着日";
	$fieldToolTipsEoc_received["Japanese"]["time"] = "";
	$placeHoldersEoc_received["Japanese"]["time"] = "";
	$fieldLabelsEoc_received["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsEoc_received["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc_received["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc_received["Japanese"]["purchase_type"] = "買取種別";
	$fieldToolTipsEoc_received["Japanese"]["purchase_type"] = "";
	$placeHoldersEoc_received["Japanese"]["purchase_type"] = "";
	if (count($fieldToolTipsEoc_received["Japanese"]))
		$tdataEoc_received[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_received[""] = array();
	$fieldToolTipsEoc_received[""] = array();
	$placeHoldersEoc_received[""] = array();
	$pageTitlesEoc_received[""] = array();
	$fieldLabelsEoc_received[""]["id"] = "Id";
	$fieldToolTipsEoc_received[""]["id"] = "";
	$placeHoldersEoc_received[""]["id"] = "";
	$fieldLabelsEoc_received[""]["hokosuu"] = "Hokosuu";
	$fieldToolTipsEoc_received[""]["hokosuu"] = "";
	$placeHoldersEoc_received[""]["hokosuu"] = "";
	$fieldLabelsEoc_received[""]["time"] = "Time";
	$fieldToolTipsEoc_received[""]["time"] = "";
	$placeHoldersEoc_received[""]["time"] = "";
	$fieldLabelsEoc_received[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_received[""]["ecc_id"] = "";
	$placeHoldersEoc_received[""]["ecc_id"] = "";
	$fieldLabelsEoc_received[""]["purchase_type"] = "Purchase Type";
	$fieldToolTipsEoc_received[""]["purchase_type"] = "";
	$placeHoldersEoc_received[""]["purchase_type"] = "";
	if (count($fieldToolTipsEoc_received[""]))
		$tdataEoc_received[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_received["English"] = array();
	$fieldToolTipsEoc_received["English"] = array();
	$placeHoldersEoc_received["English"] = array();
	$pageTitlesEoc_received["English"] = array();
	$fieldLabelsEoc_received["English"]["id"] = "Id";
	$fieldToolTipsEoc_received["English"]["id"] = "";
	$placeHoldersEoc_received["English"]["id"] = "";
	$fieldLabelsEoc_received["English"]["hokosuu"] = "Hokosuu";
	$fieldToolTipsEoc_received["English"]["hokosuu"] = "";
	$placeHoldersEoc_received["English"]["hokosuu"] = "";
	$fieldLabelsEoc_received["English"]["time"] = "Time";
	$fieldToolTipsEoc_received["English"]["time"] = "";
	$placeHoldersEoc_received["English"]["time"] = "";
	$fieldLabelsEoc_received["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_received["English"]["ecc_id"] = "";
	$placeHoldersEoc_received["English"]["ecc_id"] = "";
	$fieldLabelsEoc_received["English"]["purchase_type"] = "Purchase Type";
	$fieldToolTipsEoc_received["English"]["purchase_type"] = "";
	$placeHoldersEoc_received["English"]["purchase_type"] = "";
	if (count($fieldToolTipsEoc_received["English"]))
		$tdataEoc_received[".isUseToolTips"] = true;
}


	$tdataEoc_received[".NCSearch"] = true;



$tdataEoc_received[".shortTableName"] = "Eoc_received";
$tdataEoc_received[".nSecOptions"] = 0;
$tdataEoc_received[".recsPerRowPrint"] = 1;
$tdataEoc_received[".mainTableOwnerID"] = "";
$tdataEoc_received[".moveNext"] = 1;
$tdataEoc_received[".entityType"] = 0;

$tdataEoc_received[".strOriginalTableName"] = "Eoc_received";

	



$tdataEoc_received[".showAddInPopup"] = false;

$tdataEoc_received[".showEditInPopup"] = false;

$tdataEoc_received[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_received[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_received[".fieldsForRegister"] = array();

$tdataEoc_received[".listAjax"] = false;

	$tdataEoc_received[".audit"] = true;

	$tdataEoc_received[".locking"] = false;



$tdataEoc_received[".list"] = true;

$tdataEoc_received[".inlineEdit"] = true;


$tdataEoc_received[".reorderRecordsByHeader"] = true;



$tdataEoc_received[".inlineAdd"] = true;




$tdataEoc_received[".delete"] = true;

$tdataEoc_received[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_received[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_received[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_received[".searchSaving"] = false;
//

$tdataEoc_received[".showSearchPanel"] = true;
		$tdataEoc_received[".flexibleSearch"] = true;

$tdataEoc_received[".isUseAjaxSuggest"] = true;

$tdataEoc_received[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataEoc_received[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_received[".buttonsAdded"] = false;

$tdataEoc_received[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_received[".isUseTimeForSearch"] = false;



$tdataEoc_received[".badgeColor"] = "e07878";

$tdataEoc_received[".detailsLinksOnList"] = "1";

$tdataEoc_received[".allSearchFields"] = array();
$tdataEoc_received[".filterFields"] = array();
$tdataEoc_received[".requiredSearchFields"] = array();

$tdataEoc_received[".allSearchFields"][] = "id";
	$tdataEoc_received[".allSearchFields"][] = "hokosuu";
	$tdataEoc_received[".allSearchFields"][] = "time";
	$tdataEoc_received[".allSearchFields"][] = "ecc_id";
	$tdataEoc_received[".allSearchFields"][] = "purchase_type";
	

$tdataEoc_received[".googleLikeFields"] = array();
$tdataEoc_received[".googleLikeFields"][] = "id";
$tdataEoc_received[".googleLikeFields"][] = "hokosuu";
$tdataEoc_received[".googleLikeFields"][] = "time";
$tdataEoc_received[".googleLikeFields"][] = "ecc_id";
$tdataEoc_received[".googleLikeFields"][] = "purchase_type";


$tdataEoc_received[".advSearchFields"] = array();
$tdataEoc_received[".advSearchFields"][] = "id";
$tdataEoc_received[".advSearchFields"][] = "hokosuu";
$tdataEoc_received[".advSearchFields"][] = "time";
$tdataEoc_received[".advSearchFields"][] = "ecc_id";
$tdataEoc_received[".advSearchFields"][] = "purchase_type";

$tdataEoc_received[".tableType"] = "list";

$tdataEoc_received[".printerPageOrientation"] = 0;
$tdataEoc_received[".nPrinterPageScale"] = 100;

$tdataEoc_received[".nPrinterSplitRecords"] = 40;

$tdataEoc_received[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_received[".geocodingEnabled"] = false;





$tdataEoc_received[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_received[".pageSize"] = 1;

$tdataEoc_received[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_received[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_received[".orderindexes"] = array();
$tdataEoc_received[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdataEoc_received[".sqlHead"] = "SELECT `id`,  `hokosuu`,  `time`,  `ecc_id`,  `purchase_type`";
$tdataEoc_received[".sqlFrom"] = "FROM `Eoc_received`";
$tdataEoc_received[".sqlWhereExpr"] = "";
$tdataEoc_received[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_received[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_received[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_received[".highlightSearchResults"] = true;

$tableKeysEoc_received = array();
$tableKeysEoc_received[] = "id";
$tdataEoc_received[".Keys"] = $tableKeysEoc_received;

$tdataEoc_received[".listFields"] = array();
$tdataEoc_received[".listFields"][] = "id";
$tdataEoc_received[".listFields"][] = "hokosuu";
$tdataEoc_received[".listFields"][] = "time";
$tdataEoc_received[".listFields"][] = "ecc_id";
$tdataEoc_received[".listFields"][] = "purchase_type";

$tdataEoc_received[".hideMobileList"] = array();


$tdataEoc_received[".viewFields"] = array();

$tdataEoc_received[".addFields"] = array();

$tdataEoc_received[".masterListFields"] = array();
$tdataEoc_received[".masterListFields"][] = "id";
$tdataEoc_received[".masterListFields"][] = "hokosuu";
$tdataEoc_received[".masterListFields"][] = "time";
$tdataEoc_received[".masterListFields"][] = "ecc_id";
$tdataEoc_received[".masterListFields"][] = "purchase_type";

$tdataEoc_received[".inlineAddFields"] = array();
$tdataEoc_received[".inlineAddFields"][] = "hokosuu";
$tdataEoc_received[".inlineAddFields"][] = "purchase_type";

$tdataEoc_received[".editFields"] = array();

$tdataEoc_received[".inlineEditFields"] = array();
$tdataEoc_received[".inlineEditFields"][] = "hokosuu";
$tdataEoc_received[".inlineEditFields"][] = "time";
$tdataEoc_received[".inlineEditFields"][] = "purchase_type";

$tdataEoc_received[".updateSelectedFields"] = array();


$tdataEoc_received[".exportFields"] = array();

$tdataEoc_received[".importFields"] = array();

$tdataEoc_received[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_received";
	$fdata["Label"] = GetFieldLabel("Eoc_received","id");
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




	$tdataEoc_received["id"] = $fdata;
//	hokosuu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "hokosuu";
	$fdata["GoodName"] = "hokosuu";
	$fdata["ownerTable"] = "Eoc_received";
	$fdata["Label"] = GetFieldLabel("Eoc_received","hokosuu");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "hokosuu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`hokosuu`";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "6";
	$edata["LookupValues"][] = "7";
	$edata["LookupValues"][] = "8";
	$edata["LookupValues"][] = "9";
	$edata["LookupValues"][] = "10";
	$edata["LookupValues"][] = "11";
	$edata["LookupValues"][] = "12";
	$edata["LookupValues"][] = "13";
	$edata["LookupValues"][] = "14";
	$edata["LookupValues"][] = "15";
	$edata["LookupValues"][] = "16";
	$edata["LookupValues"][] = "17";
	$edata["LookupValues"][] = "18";
	$edata["LookupValues"][] = "19";
	$edata["LookupValues"][] = "20";
	$edata["LookupValues"][] = "21";
	$edata["LookupValues"][] = "22";
	$edata["LookupValues"][] = "23";
	$edata["LookupValues"][] = "24";
	$edata["LookupValues"][] = "25";
	$edata["LookupValues"][] = "26";
	$edata["LookupValues"][] = "27";
	$edata["LookupValues"][] = "28";
	$edata["LookupValues"][] = "29";
	$edata["LookupValues"][] = "30";
	$edata["LookupValues"][] = "31";
	$edata["LookupValues"][] = "32";
	$edata["LookupValues"][] = "33";
	$edata["LookupValues"][] = "34";
	$edata["LookupValues"][] = "35";
	$edata["LookupValues"][] = "36";
	$edata["LookupValues"][] = "37";
	$edata["LookupValues"][] = "38";
	$edata["LookupValues"][] = "39";
	$edata["LookupValues"][] = "40";
	$edata["LookupValues"][] = "41";
	$edata["LookupValues"][] = "42";
	$edata["LookupValues"][] = "43";
	$edata["LookupValues"][] = "44";
	$edata["LookupValues"][] = "45";
	$edata["LookupValues"][] = "46";
	$edata["LookupValues"][] = "47";
	$edata["LookupValues"][] = "48";
	$edata["LookupValues"][] = "49";
	$edata["LookupValues"][] = "50";

	
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




	$tdataEoc_received["hokosuu"] = $fdata;
//	time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "time";
	$fdata["GoodName"] = "time";
	$fdata["ownerTable"] = "Eoc_received";
	$fdata["Label"] = GetFieldLabel("Eoc_received","time");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`time`";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_received["time"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc_received";
	$fdata["Label"] = GetFieldLabel("Eoc_received","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ecc_id`";

	
	
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




	$tdataEoc_received["ecc_id"] = $fdata;
//	purchase_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "purchase_type";
	$fdata["GoodName"] = "purchase_type";
	$fdata["ownerTable"] = "Eoc_received";
	$fdata["Label"] = GetFieldLabel("Eoc_received","purchase_type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "purchase_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`purchase_type`";

	
	
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
	$edata["LookupTable"] = "_purchase_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "purchase_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "purchase_name";

	
	$edata["LookupOrderBy"] = "sorter";

	
	
	
	

	
	
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




	$tdataEoc_received["purchase_type"] = $fdata;


$tables_data["Eoc_received"]=&$tdataEoc_received;
$field_labels["Eoc_received"] = &$fieldLabelsEoc_received;
$fieldToolTips["Eoc_received"] = &$fieldToolTipsEoc_received;
$placeHolders["Eoc_received"] = &$placeHoldersEoc_received;
$page_titles["Eoc_received"] = &$pageTitlesEoc_received;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_received"] = array();
//	Eoc_received_events
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_received_events";
		$detailsParam["dOriginalTable"] = "Eoc_received_events";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_received_events";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_received_events");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc_received"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_received"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_received"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_received"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_received"][$dIndex]["detailKeys"][]="Eoc_received_id";

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_received"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_received()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `hokosuu`,  `time`,  `ecc_id`,  `purchase_type`";
$proto0["m_strFrom"] = "FROM `Eoc_received`";
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
	"m_strTable" => "Eoc_received",
	"m_srcTableName" => "Eoc_received"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "Eoc_received";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "hokosuu",
	"m_strTable" => "Eoc_received",
	"m_srcTableName" => "Eoc_received"
));

$proto8["m_sql"] = "`hokosuu`";
$proto8["m_srcTableName"] = "Eoc_received";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "time",
	"m_strTable" => "Eoc_received",
	"m_srcTableName" => "Eoc_received"
));

$proto10["m_sql"] = "`time`";
$proto10["m_srcTableName"] = "Eoc_received";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc_received",
	"m_srcTableName" => "Eoc_received"
));

$proto12["m_sql"] = "`ecc_id`";
$proto12["m_srcTableName"] = "Eoc_received";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "purchase_type",
	"m_strTable" => "Eoc_received",
	"m_srcTableName" => "Eoc_received"
));

$proto14["m_sql"] = "`purchase_type`";
$proto14["m_srcTableName"] = "Eoc_received";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "Eoc_received";
$proto17["m_srcTableName"] = "Eoc_received";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "hokosuu";
$proto17["m_columns"][] = "time";
$proto17["m_columns"][] = "ecc_id";
$proto17["m_columns"][] = "purchase_type";
$proto17["m_columns"][] = "seiyakukin";
$proto17["m_columns"][] = "Eoc_takuhai_id";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "`Eoc_received`";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Eoc_received";
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
	"m_strTable" => "Eoc_received",
	"m_srcTableName" => "Eoc_received"
));

$proto20["m_column"]=$obj;
$proto20["m_bAsc"] = 0;
$proto20["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto20);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_received";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_received = createSqlQuery_Eoc_received();


	
		;

					

$tdataEoc_received[".sqlquery"] = $queryData_Eoc_received;

include_once(getabspath("include/Eoc_received_events.php"));
$tableEvents["Eoc_received"] = new eventclass_Eoc_received;
$tdataEoc_received[".hasEvents"] = true;

?>