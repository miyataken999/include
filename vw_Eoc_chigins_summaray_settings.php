<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_Eoc_chigins_summaray = array();
	$tdatavw_Eoc_chigins_summaray[".truncateText"] = true;
	$tdatavw_Eoc_chigins_summaray[".NumberOfChars"] = 80;
	$tdatavw_Eoc_chigins_summaray[".ShortName"] = "vw_Eoc_chigins_summaray";
	$tdatavw_Eoc_chigins_summaray[".OwnerID"] = "";
	$tdatavw_Eoc_chigins_summaray[".OriginalTable"] = "vw_Eoc_chigins_summaray";

//	field labels
$fieldLabelsvw_Eoc_chigins_summaray = array();
$fieldToolTipsvw_Eoc_chigins_summaray = array();
$pageTitlesvw_Eoc_chigins_summaray = array();
$placeHoldersvw_Eoc_chigins_summaray = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_Eoc_chigins_summaray["Japanese"] = array();
	$fieldToolTipsvw_Eoc_chigins_summaray["Japanese"] = array();
	$placeHoldersvw_Eoc_chigins_summaray["Japanese"] = array();
	$pageTitlesvw_Eoc_chigins_summaray["Japanese"] = array();
	$fieldLabelsvw_Eoc_chigins_summaray["Japanese"]["date"] = "買取備考作成日";
	$fieldToolTipsvw_Eoc_chigins_summaray["Japanese"]["date"] = "";
	$placeHoldersvw_Eoc_chigins_summaray["Japanese"]["date"] = "";
	$fieldLabelsvw_Eoc_chigins_summaray["Japanese"]["chigin_ecc_id"] = "顧客SEQ";
	$fieldToolTipsvw_Eoc_chigins_summaray["Japanese"]["chigin_ecc_id"] = "";
	$placeHoldersvw_Eoc_chigins_summaray["Japanese"]["chigin_ecc_id"] = "";
	$fieldLabelsvw_Eoc_chigins_summaray["Japanese"]["chigin_type"] = "買取種別";
	$fieldToolTipsvw_Eoc_chigins_summaray["Japanese"]["chigin_type"] = "";
	$placeHoldersvw_Eoc_chigins_summaray["Japanese"]["chigin_type"] = "";
	$fieldLabelsvw_Eoc_chigins_summaray["Japanese"]["sum_price"] = "買取総額";
	$fieldToolTipsvw_Eoc_chigins_summaray["Japanese"]["sum_price"] = "";
	$placeHoldersvw_Eoc_chigins_summaray["Japanese"]["sum_price"] = "";
	$fieldLabelsvw_Eoc_chigins_summaray["Japanese"]["ids"] = "買取備考Ids";
	$fieldToolTipsvw_Eoc_chigins_summaray["Japanese"]["ids"] = "";
	$placeHoldersvw_Eoc_chigins_summaray["Japanese"]["ids"] = "";
	$fieldLabelsvw_Eoc_chigins_summaray["Japanese"]["area"] = "地域";
	$fieldToolTipsvw_Eoc_chigins_summaray["Japanese"]["area"] = "";
	$placeHoldersvw_Eoc_chigins_summaray["Japanese"]["area"] = "";
	if (count($fieldToolTipsvw_Eoc_chigins_summaray["Japanese"]))
		$tdatavw_Eoc_chigins_summaray[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_Eoc_chigins_summaray[""] = array();
	$fieldToolTipsvw_Eoc_chigins_summaray[""] = array();
	$placeHoldersvw_Eoc_chigins_summaray[""] = array();
	$pageTitlesvw_Eoc_chigins_summaray[""] = array();
	$fieldLabelsvw_Eoc_chigins_summaray[""]["date"] = "Date";
	$fieldToolTipsvw_Eoc_chigins_summaray[""]["date"] = "";
	$placeHoldersvw_Eoc_chigins_summaray[""]["date"] = "";
	$fieldLabelsvw_Eoc_chigins_summaray[""]["chigin_ecc_id"] = "Chigin Ecc Id";
	$fieldToolTipsvw_Eoc_chigins_summaray[""]["chigin_ecc_id"] = "";
	$placeHoldersvw_Eoc_chigins_summaray[""]["chigin_ecc_id"] = "";
	$fieldLabelsvw_Eoc_chigins_summaray[""]["chigin_type"] = "Chigin Type";
	$fieldToolTipsvw_Eoc_chigins_summaray[""]["chigin_type"] = "";
	$placeHoldersvw_Eoc_chigins_summaray[""]["chigin_type"] = "";
	$fieldLabelsvw_Eoc_chigins_summaray[""]["sum_price"] = "Sum Price";
	$fieldToolTipsvw_Eoc_chigins_summaray[""]["sum_price"] = "";
	$placeHoldersvw_Eoc_chigins_summaray[""]["sum_price"] = "";
	$fieldLabelsvw_Eoc_chigins_summaray[""]["ids"] = "Ids";
	$fieldToolTipsvw_Eoc_chigins_summaray[""]["ids"] = "";
	$placeHoldersvw_Eoc_chigins_summaray[""]["ids"] = "";
	$fieldLabelsvw_Eoc_chigins_summaray[""]["area"] = "Area";
	$fieldToolTipsvw_Eoc_chigins_summaray[""]["area"] = "";
	$placeHoldersvw_Eoc_chigins_summaray[""]["area"] = "";
	if (count($fieldToolTipsvw_Eoc_chigins_summaray[""]))
		$tdatavw_Eoc_chigins_summaray[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_Eoc_chigins_summaray["English"] = array();
	$fieldToolTipsvw_Eoc_chigins_summaray["English"] = array();
	$placeHoldersvw_Eoc_chigins_summaray["English"] = array();
	$pageTitlesvw_Eoc_chigins_summaray["English"] = array();
	$fieldLabelsvw_Eoc_chigins_summaray["English"]["date"] = "Date";
	$fieldToolTipsvw_Eoc_chigins_summaray["English"]["date"] = "";
	$placeHoldersvw_Eoc_chigins_summaray["English"]["date"] = "";
	$fieldLabelsvw_Eoc_chigins_summaray["English"]["chigin_ecc_id"] = "Chigin Ecc Id";
	$fieldToolTipsvw_Eoc_chigins_summaray["English"]["chigin_ecc_id"] = "";
	$placeHoldersvw_Eoc_chigins_summaray["English"]["chigin_ecc_id"] = "";
	$fieldLabelsvw_Eoc_chigins_summaray["English"]["chigin_type"] = "Chigin Type";
	$fieldToolTipsvw_Eoc_chigins_summaray["English"]["chigin_type"] = "";
	$placeHoldersvw_Eoc_chigins_summaray["English"]["chigin_type"] = "";
	$fieldLabelsvw_Eoc_chigins_summaray["English"]["sum_price"] = "Sum Price";
	$fieldToolTipsvw_Eoc_chigins_summaray["English"]["sum_price"] = "";
	$placeHoldersvw_Eoc_chigins_summaray["English"]["sum_price"] = "";
	$fieldLabelsvw_Eoc_chigins_summaray["English"]["ids"] = "Ids";
	$fieldToolTipsvw_Eoc_chigins_summaray["English"]["ids"] = "";
	$placeHoldersvw_Eoc_chigins_summaray["English"]["ids"] = "";
	$fieldLabelsvw_Eoc_chigins_summaray["English"]["area"] = "Area";
	$fieldToolTipsvw_Eoc_chigins_summaray["English"]["area"] = "";
	$placeHoldersvw_Eoc_chigins_summaray["English"]["area"] = "";
	if (count($fieldToolTipsvw_Eoc_chigins_summaray["English"]))
		$tdatavw_Eoc_chigins_summaray[".isUseToolTips"] = true;
}


	$tdatavw_Eoc_chigins_summaray[".NCSearch"] = true;



$tdatavw_Eoc_chigins_summaray[".shortTableName"] = "vw_Eoc_chigins_summaray";
$tdatavw_Eoc_chigins_summaray[".nSecOptions"] = 0;
$tdatavw_Eoc_chigins_summaray[".recsPerRowPrint"] = 1;
$tdatavw_Eoc_chigins_summaray[".mainTableOwnerID"] = "";
$tdatavw_Eoc_chigins_summaray[".moveNext"] = 1;
$tdatavw_Eoc_chigins_summaray[".entityType"] = 0;

$tdatavw_Eoc_chigins_summaray[".strOriginalTableName"] = "vw_Eoc_chigins_summaray";

	



$tdatavw_Eoc_chigins_summaray[".showAddInPopup"] = false;

$tdatavw_Eoc_chigins_summaray[".showEditInPopup"] = false;

$tdatavw_Eoc_chigins_summaray[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_Eoc_chigins_summaray[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_Eoc_chigins_summaray[".fieldsForRegister"] = array();

$tdatavw_Eoc_chigins_summaray[".listAjax"] = false;

	$tdatavw_Eoc_chigins_summaray[".audit"] = false;

	$tdatavw_Eoc_chigins_summaray[".locking"] = false;



$tdatavw_Eoc_chigins_summaray[".list"] = true;



$tdatavw_Eoc_chigins_summaray[".reorderRecordsByHeader"] = true;





$tdatavw_Eoc_chigins_summaray[".exportTo"] = true;



$tdatavw_Eoc_chigins_summaray[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_Eoc_chigins_summaray[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_Eoc_chigins_summaray[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_Eoc_chigins_summaray[".searchSaving"] = false;
//

$tdatavw_Eoc_chigins_summaray[".showSearchPanel"] = true;
		$tdatavw_Eoc_chigins_summaray[".flexibleSearch"] = true;

$tdatavw_Eoc_chigins_summaray[".isUseAjaxSuggest"] = true;

$tdatavw_Eoc_chigins_summaray[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatavw_Eoc_chigins_summaray[".ajaxCodeSnippetAdded"] = false;

$tdatavw_Eoc_chigins_summaray[".buttonsAdded"] = false;

$tdatavw_Eoc_chigins_summaray[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_Eoc_chigins_summaray[".isUseTimeForSearch"] = false;





$tdatavw_Eoc_chigins_summaray[".allSearchFields"] = array();
$tdatavw_Eoc_chigins_summaray[".filterFields"] = array();
$tdatavw_Eoc_chigins_summaray[".requiredSearchFields"] = array();

$tdatavw_Eoc_chigins_summaray[".allSearchFields"][] = "date";
	$tdatavw_Eoc_chigins_summaray[".allSearchFields"][] = "chigin_ecc_id";
	$tdatavw_Eoc_chigins_summaray[".allSearchFields"][] = "chigin_type";
	$tdatavw_Eoc_chigins_summaray[".allSearchFields"][] = "sum_price";
	$tdatavw_Eoc_chigins_summaray[".allSearchFields"][] = "area";
	

$tdatavw_Eoc_chigins_summaray[".googleLikeFields"] = array();
$tdatavw_Eoc_chigins_summaray[".googleLikeFields"][] = "date";
$tdatavw_Eoc_chigins_summaray[".googleLikeFields"][] = "chigin_ecc_id";
$tdatavw_Eoc_chigins_summaray[".googleLikeFields"][] = "chigin_type";
$tdatavw_Eoc_chigins_summaray[".googleLikeFields"][] = "sum_price";
$tdatavw_Eoc_chigins_summaray[".googleLikeFields"][] = "area";


$tdatavw_Eoc_chigins_summaray[".advSearchFields"] = array();
$tdatavw_Eoc_chigins_summaray[".advSearchFields"][] = "date";
$tdatavw_Eoc_chigins_summaray[".advSearchFields"][] = "chigin_ecc_id";
$tdatavw_Eoc_chigins_summaray[".advSearchFields"][] = "chigin_type";
$tdatavw_Eoc_chigins_summaray[".advSearchFields"][] = "sum_price";
$tdatavw_Eoc_chigins_summaray[".advSearchFields"][] = "area";

$tdatavw_Eoc_chigins_summaray[".tableType"] = "list";

$tdatavw_Eoc_chigins_summaray[".printerPageOrientation"] = 0;
$tdatavw_Eoc_chigins_summaray[".nPrinterPageScale"] = 100;

$tdatavw_Eoc_chigins_summaray[".nPrinterSplitRecords"] = 40;

$tdatavw_Eoc_chigins_summaray[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_Eoc_chigins_summaray[".geocodingEnabled"] = false;





$tdatavw_Eoc_chigins_summaray[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatavw_Eoc_chigins_summaray[".totalsFields"] = array();
$tdatavw_Eoc_chigins_summaray[".totalsFields"][] = array(
	"fName" => "sum_price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatavw_Eoc_chigins_summaray[".pageSize"] = 20;

$tdatavw_Eoc_chigins_summaray[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_Eoc_chigins_summaray[".strOrderBy"] = $tstrOrderBy;

$tdatavw_Eoc_chigins_summaray[".orderindexes"] = array();

$tdatavw_Eoc_chigins_summaray[".sqlHead"] = "SELECT `date`,  	`chigin_ecc_id`,  	`chigin_type`,  	`sum_price`,  	`ids`,  	`area`";
$tdatavw_Eoc_chigins_summaray[".sqlFrom"] = "FROM `vw_Eoc_chigins_summaray`";
$tdatavw_Eoc_chigins_summaray[".sqlWhereExpr"] = "";
$tdatavw_Eoc_chigins_summaray[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_Eoc_chigins_summaray[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_Eoc_chigins_summaray[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_Eoc_chigins_summaray[".highlightSearchResults"] = true;

$tableKeysvw_Eoc_chigins_summaray = array();
$tdatavw_Eoc_chigins_summaray[".Keys"] = $tableKeysvw_Eoc_chigins_summaray;

$tdatavw_Eoc_chigins_summaray[".listFields"] = array();
$tdatavw_Eoc_chigins_summaray[".listFields"][] = "date";
$tdatavw_Eoc_chigins_summaray[".listFields"][] = "chigin_ecc_id";
$tdatavw_Eoc_chigins_summaray[".listFields"][] = "chigin_type";
$tdatavw_Eoc_chigins_summaray[".listFields"][] = "sum_price";
$tdatavw_Eoc_chigins_summaray[".listFields"][] = "ids";
$tdatavw_Eoc_chigins_summaray[".listFields"][] = "area";

$tdatavw_Eoc_chigins_summaray[".hideMobileList"] = array();


$tdatavw_Eoc_chigins_summaray[".viewFields"] = array();

$tdatavw_Eoc_chigins_summaray[".addFields"] = array();

$tdatavw_Eoc_chigins_summaray[".masterListFields"] = array();
$tdatavw_Eoc_chigins_summaray[".masterListFields"][] = "date";
$tdatavw_Eoc_chigins_summaray[".masterListFields"][] = "chigin_ecc_id";
$tdatavw_Eoc_chigins_summaray[".masterListFields"][] = "chigin_type";
$tdatavw_Eoc_chigins_summaray[".masterListFields"][] = "sum_price";
$tdatavw_Eoc_chigins_summaray[".masterListFields"][] = "ids";
$tdatavw_Eoc_chigins_summaray[".masterListFields"][] = "area";

$tdatavw_Eoc_chigins_summaray[".inlineAddFields"] = array();

$tdatavw_Eoc_chigins_summaray[".editFields"] = array();

$tdatavw_Eoc_chigins_summaray[".inlineEditFields"] = array();

$tdatavw_Eoc_chigins_summaray[".updateSelectedFields"] = array();


$tdatavw_Eoc_chigins_summaray[".exportFields"] = array();
$tdatavw_Eoc_chigins_summaray[".exportFields"][] = "date";
$tdatavw_Eoc_chigins_summaray[".exportFields"][] = "chigin_ecc_id";
$tdatavw_Eoc_chigins_summaray[".exportFields"][] = "chigin_type";
$tdatavw_Eoc_chigins_summaray[".exportFields"][] = "sum_price";
$tdatavw_Eoc_chigins_summaray[".exportFields"][] = "area";

$tdatavw_Eoc_chigins_summaray[".importFields"] = array();

$tdatavw_Eoc_chigins_summaray[".printFields"] = array();

//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "vw_Eoc_chigins_summaray";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_summaray","date");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatavw_Eoc_chigins_summaray["date"] = $fdata;
//	chigin_ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "chigin_ecc_id";
	$fdata["GoodName"] = "chigin_ecc_id";
	$fdata["ownerTable"] = "vw_Eoc_chigins_summaray";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_summaray","chigin_ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "chigin_ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`chigin_ecc_id`";

	
	
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




	$tdatavw_Eoc_chigins_summaray["chigin_ecc_id"] = $fdata;
//	chigin_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "chigin_type";
	$fdata["GoodName"] = "chigin_type";
	$fdata["ownerTable"] = "vw_Eoc_chigins_summaray";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_summaray","chigin_type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "chigin_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`chigin_type`";

	
	
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




	$tdatavw_Eoc_chigins_summaray["chigin_type"] = $fdata;
//	sum_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sum_price";
	$fdata["GoodName"] = "sum_price";
	$fdata["ownerTable"] = "vw_Eoc_chigins_summaray";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_summaray","sum_price");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sum_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sum_price`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
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




	$tdatavw_Eoc_chigins_summaray["sum_price"] = $fdata;
//	ids
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ids";
	$fdata["GoodName"] = "ids";
	$fdata["ownerTable"] = "vw_Eoc_chigins_summaray";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_summaray","ids");
	$fdata["FieldType"] = 128;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ids";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ids`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
						$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;

	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
	



	
	
	
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








	$tdatavw_Eoc_chigins_summaray["ids"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "vw_Eoc_chigins_summaray";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_summaray","area");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`area`";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatavw_Eoc_chigins_summaray["area"] = $fdata;


$tables_data["vw_Eoc_chigins_summaray"]=&$tdatavw_Eoc_chigins_summaray;
$field_labels["vw_Eoc_chigins_summaray"] = &$fieldLabelsvw_Eoc_chigins_summaray;
$fieldToolTips["vw_Eoc_chigins_summaray"] = &$fieldToolTipsvw_Eoc_chigins_summaray;
$placeHolders["vw_Eoc_chigins_summaray"] = &$placeHoldersvw_Eoc_chigins_summaray;
$page_titles["vw_Eoc_chigins_summaray"] = &$pageTitlesvw_Eoc_chigins_summaray;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_Eoc_chigins_summaray"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_Eoc_chigins_summaray"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_Eoc_chigins_summaray()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`date`,  	`chigin_ecc_id`,  	`chigin_type`,  	`sum_price`,  	`ids`,  	`area`";
$proto0["m_strFrom"] = "FROM `vw_Eoc_chigins_summaray`";
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
	"m_strName" => "date",
	"m_strTable" => "vw_Eoc_chigins_summaray",
	"m_srcTableName" => "vw_Eoc_chigins_summaray"
));

$proto6["m_sql"] = "`date`";
$proto6["m_srcTableName"] = "vw_Eoc_chigins_summaray";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "chigin_ecc_id",
	"m_strTable" => "vw_Eoc_chigins_summaray",
	"m_srcTableName" => "vw_Eoc_chigins_summaray"
));

$proto8["m_sql"] = "`chigin_ecc_id`";
$proto8["m_srcTableName"] = "vw_Eoc_chigins_summaray";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "chigin_type",
	"m_strTable" => "vw_Eoc_chigins_summaray",
	"m_srcTableName" => "vw_Eoc_chigins_summaray"
));

$proto10["m_sql"] = "`chigin_type`";
$proto10["m_srcTableName"] = "vw_Eoc_chigins_summaray";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sum_price",
	"m_strTable" => "vw_Eoc_chigins_summaray",
	"m_srcTableName" => "vw_Eoc_chigins_summaray"
));

$proto12["m_sql"] = "`sum_price`";
$proto12["m_srcTableName"] = "vw_Eoc_chigins_summaray";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ids",
	"m_strTable" => "vw_Eoc_chigins_summaray",
	"m_srcTableName" => "vw_Eoc_chigins_summaray"
));

$proto14["m_sql"] = "`ids`";
$proto14["m_srcTableName"] = "vw_Eoc_chigins_summaray";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "vw_Eoc_chigins_summaray",
	"m_srcTableName" => "vw_Eoc_chigins_summaray"
));

$proto16["m_sql"] = "`area`";
$proto16["m_srcTableName"] = "vw_Eoc_chigins_summaray";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "vw_Eoc_chigins_summaray";
$proto19["m_srcTableName"] = "vw_Eoc_chigins_summaray";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "date";
$proto19["m_columns"][] = "chigin_ecc_id";
$proto19["m_columns"][] = "chigin_type";
$proto19["m_columns"][] = "sum_price";
$proto19["m_columns"][] = "ids";
$proto19["m_columns"][] = "area";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "`vw_Eoc_chigins_summaray`";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "vw_Eoc_chigins_summaray";
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
$proto0["m_srcTableName"]="vw_Eoc_chigins_summaray";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_Eoc_chigins_summaray = createSqlQuery_vw_Eoc_chigins_summaray();


	
		;

						

$tdatavw_Eoc_chigins_summaray[".sqlquery"] = $queryData_vw_Eoc_chigins_summaray;

$tableEvents["vw_Eoc_chigins_summaray"] = new eventsBase;
$tdatavw_Eoc_chigins_summaray[".hasEvents"] = false;

?>