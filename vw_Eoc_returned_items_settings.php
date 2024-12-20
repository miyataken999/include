<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_Eoc_returned_items = array();
	$tdatavw_Eoc_returned_items[".truncateText"] = true;
	$tdatavw_Eoc_returned_items[".NumberOfChars"] = 80;
	$tdatavw_Eoc_returned_items[".ShortName"] = "vw_Eoc_returned_items";
	$tdatavw_Eoc_returned_items[".OwnerID"] = "";
	$tdatavw_Eoc_returned_items[".OriginalTable"] = "vw_Eoc_returned_items";

//	field labels
$fieldLabelsvw_Eoc_returned_items = array();
$fieldToolTipsvw_Eoc_returned_items = array();
$pageTitlesvw_Eoc_returned_items = array();
$placeHoldersvw_Eoc_returned_items = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_Eoc_returned_items["Japanese"] = array();
	$fieldToolTipsvw_Eoc_returned_items["Japanese"] = array();
	$placeHoldersvw_Eoc_returned_items["Japanese"] = array();
	$pageTitlesvw_Eoc_returned_items["Japanese"] = array();
	$fieldLabelsvw_Eoc_returned_items["Japanese"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsvw_Eoc_returned_items["Japanese"]["ecc_id"] = "";
	$placeHoldersvw_Eoc_returned_items["Japanese"]["ecc_id"] = "";
	$fieldLabelsvw_Eoc_returned_items["Japanese"]["Eoc_takuhai_id"] = "宅配取引ID";
	$fieldToolTipsvw_Eoc_returned_items["Japanese"]["Eoc_takuhai_id"] = "";
	$placeHoldersvw_Eoc_returned_items["Japanese"]["Eoc_takuhai_id"] = "";
	$fieldLabelsvw_Eoc_returned_items["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipsvw_Eoc_returned_items["Japanese"]["satei_hi"] = "";
	$placeHoldersvw_Eoc_returned_items["Japanese"]["satei_hi"] = "";
	$fieldLabelsvw_Eoc_returned_items["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipsvw_Eoc_returned_items["Japanese"]["satei_by"] = "";
	$placeHoldersvw_Eoc_returned_items["Japanese"]["satei_by"] = "";
	$fieldLabelsvw_Eoc_returned_items["Japanese"]["meisai"] = "返却明細";
	$fieldToolTipsvw_Eoc_returned_items["Japanese"]["meisai"] = "";
	$placeHoldersvw_Eoc_returned_items["Japanese"]["meisai"] = "";
	$fieldLabelsvw_Eoc_returned_items["Japanese"]["name1"] = "名前";
	$fieldToolTipsvw_Eoc_returned_items["Japanese"]["name1"] = "";
	$placeHoldersvw_Eoc_returned_items["Japanese"]["name1"] = "";
	$fieldLabelsvw_Eoc_returned_items["Japanese"]["name2"] = "フリガナ";
	$fieldToolTipsvw_Eoc_returned_items["Japanese"]["name2"] = "";
	$placeHoldersvw_Eoc_returned_items["Japanese"]["name2"] = "";
	if (count($fieldToolTipsvw_Eoc_returned_items["Japanese"]))
		$tdatavw_Eoc_returned_items[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_Eoc_returned_items[""] = array();
	$fieldToolTipsvw_Eoc_returned_items[""] = array();
	$placeHoldersvw_Eoc_returned_items[""] = array();
	$pageTitlesvw_Eoc_returned_items[""] = array();
	$fieldLabelsvw_Eoc_returned_items[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsvw_Eoc_returned_items[""]["ecc_id"] = "";
	$placeHoldersvw_Eoc_returned_items[""]["ecc_id"] = "";
	$fieldLabelsvw_Eoc_returned_items[""]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipsvw_Eoc_returned_items[""]["Eoc_takuhai_id"] = "";
	$placeHoldersvw_Eoc_returned_items[""]["Eoc_takuhai_id"] = "";
	$fieldLabelsvw_Eoc_returned_items[""]["satei_hi"] = "Satei Hi";
	$fieldToolTipsvw_Eoc_returned_items[""]["satei_hi"] = "";
	$placeHoldersvw_Eoc_returned_items[""]["satei_hi"] = "";
	$fieldLabelsvw_Eoc_returned_items[""]["satei_by"] = "Satei By";
	$fieldToolTipsvw_Eoc_returned_items[""]["satei_by"] = "";
	$placeHoldersvw_Eoc_returned_items[""]["satei_by"] = "";
	$fieldLabelsvw_Eoc_returned_items[""]["meisai"] = "Meisai";
	$fieldToolTipsvw_Eoc_returned_items[""]["meisai"] = "";
	$placeHoldersvw_Eoc_returned_items[""]["meisai"] = "";
	$fieldLabelsvw_Eoc_returned_items[""]["name1"] = "Name1";
	$fieldToolTipsvw_Eoc_returned_items[""]["name1"] = "";
	$placeHoldersvw_Eoc_returned_items[""]["name1"] = "";
	$fieldLabelsvw_Eoc_returned_items[""]["name2"] = "Name2";
	$fieldToolTipsvw_Eoc_returned_items[""]["name2"] = "";
	$placeHoldersvw_Eoc_returned_items[""]["name2"] = "";
	if (count($fieldToolTipsvw_Eoc_returned_items[""]))
		$tdatavw_Eoc_returned_items[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_Eoc_returned_items["English"] = array();
	$fieldToolTipsvw_Eoc_returned_items["English"] = array();
	$placeHoldersvw_Eoc_returned_items["English"] = array();
	$pageTitlesvw_Eoc_returned_items["English"] = array();
	$fieldLabelsvw_Eoc_returned_items["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsvw_Eoc_returned_items["English"]["ecc_id"] = "";
	$placeHoldersvw_Eoc_returned_items["English"]["ecc_id"] = "";
	$fieldLabelsvw_Eoc_returned_items["English"]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipsvw_Eoc_returned_items["English"]["Eoc_takuhai_id"] = "";
	$placeHoldersvw_Eoc_returned_items["English"]["Eoc_takuhai_id"] = "";
	$fieldLabelsvw_Eoc_returned_items["English"]["satei_hi"] = "Satei Hi";
	$fieldToolTipsvw_Eoc_returned_items["English"]["satei_hi"] = "";
	$placeHoldersvw_Eoc_returned_items["English"]["satei_hi"] = "";
	$fieldLabelsvw_Eoc_returned_items["English"]["satei_by"] = "Satei By";
	$fieldToolTipsvw_Eoc_returned_items["English"]["satei_by"] = "";
	$placeHoldersvw_Eoc_returned_items["English"]["satei_by"] = "";
	$fieldLabelsvw_Eoc_returned_items["English"]["meisai"] = "Meisai";
	$fieldToolTipsvw_Eoc_returned_items["English"]["meisai"] = "";
	$placeHoldersvw_Eoc_returned_items["English"]["meisai"] = "";
	$fieldLabelsvw_Eoc_returned_items["English"]["name1"] = "Name1";
	$fieldToolTipsvw_Eoc_returned_items["English"]["name1"] = "";
	$placeHoldersvw_Eoc_returned_items["English"]["name1"] = "";
	$fieldLabelsvw_Eoc_returned_items["English"]["name2"] = "Name2";
	$fieldToolTipsvw_Eoc_returned_items["English"]["name2"] = "";
	$placeHoldersvw_Eoc_returned_items["English"]["name2"] = "";
	if (count($fieldToolTipsvw_Eoc_returned_items["English"]))
		$tdatavw_Eoc_returned_items[".isUseToolTips"] = true;
}


	$tdatavw_Eoc_returned_items[".NCSearch"] = true;



$tdatavw_Eoc_returned_items[".shortTableName"] = "vw_Eoc_returned_items";
$tdatavw_Eoc_returned_items[".nSecOptions"] = 0;
$tdatavw_Eoc_returned_items[".recsPerRowPrint"] = 1;
$tdatavw_Eoc_returned_items[".mainTableOwnerID"] = "";
$tdatavw_Eoc_returned_items[".moveNext"] = 1;
$tdatavw_Eoc_returned_items[".entityType"] = 0;

$tdatavw_Eoc_returned_items[".strOriginalTableName"] = "vw_Eoc_returned_items";

	



$tdatavw_Eoc_returned_items[".showAddInPopup"] = false;

$tdatavw_Eoc_returned_items[".showEditInPopup"] = false;

$tdatavw_Eoc_returned_items[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_Eoc_returned_items[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_Eoc_returned_items[".fieldsForRegister"] = array();

$tdatavw_Eoc_returned_items[".listAjax"] = false;

	$tdatavw_Eoc_returned_items[".audit"] = false;

	$tdatavw_Eoc_returned_items[".locking"] = false;



$tdatavw_Eoc_returned_items[".list"] = true;



$tdatavw_Eoc_returned_items[".reorderRecordsByHeader"] = true;





$tdatavw_Eoc_returned_items[".exportTo"] = true;



$tdatavw_Eoc_returned_items[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_Eoc_returned_items[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_Eoc_returned_items[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_Eoc_returned_items[".searchSaving"] = false;
//

$tdatavw_Eoc_returned_items[".showSearchPanel"] = true;
		$tdatavw_Eoc_returned_items[".flexibleSearch"] = true;

$tdatavw_Eoc_returned_items[".isUseAjaxSuggest"] = true;

$tdatavw_Eoc_returned_items[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatavw_Eoc_returned_items[".ajaxCodeSnippetAdded"] = false;

$tdatavw_Eoc_returned_items[".buttonsAdded"] = false;

$tdatavw_Eoc_returned_items[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_Eoc_returned_items[".isUseTimeForSearch"] = false;




$tdatavw_Eoc_returned_items[".detailsLinksOnList"] = "1";

$tdatavw_Eoc_returned_items[".allSearchFields"] = array();
$tdatavw_Eoc_returned_items[".filterFields"] = array();
$tdatavw_Eoc_returned_items[".requiredSearchFields"] = array();

$tdatavw_Eoc_returned_items[".allSearchFields"][] = "Eoc_takuhai_id";
	$tdatavw_Eoc_returned_items[".allSearchFields"][] = "meisai";
	$tdatavw_Eoc_returned_items[".allSearchFields"][] = "ecc_id";
	$tdatavw_Eoc_returned_items[".allSearchFields"][] = "name1";
	$tdatavw_Eoc_returned_items[".allSearchFields"][] = "name2";
	$tdatavw_Eoc_returned_items[".allSearchFields"][] = "satei_hi";
	$tdatavw_Eoc_returned_items[".allSearchFields"][] = "satei_by";
	

$tdatavw_Eoc_returned_items[".googleLikeFields"] = array();
$tdatavw_Eoc_returned_items[".googleLikeFields"][] = "ecc_id";
$tdatavw_Eoc_returned_items[".googleLikeFields"][] = "meisai";
$tdatavw_Eoc_returned_items[".googleLikeFields"][] = "name1";
$tdatavw_Eoc_returned_items[".googleLikeFields"][] = "name2";
$tdatavw_Eoc_returned_items[".googleLikeFields"][] = "Eoc_takuhai_id";
$tdatavw_Eoc_returned_items[".googleLikeFields"][] = "satei_hi";
$tdatavw_Eoc_returned_items[".googleLikeFields"][] = "satei_by";

$tdatavw_Eoc_returned_items[".panelSearchFields"] = array();
$tdatavw_Eoc_returned_items[".searchPanelOptions"] = array();
$tdatavw_Eoc_returned_items[".panelSearchFields"][] = "Eoc_takuhai_id";
	$tdatavw_Eoc_returned_items[".panelSearchFields"][] = "meisai";
	$tdatavw_Eoc_returned_items[".panelSearchFields"][] = "ecc_id";
	$tdatavw_Eoc_returned_items[".panelSearchFields"][] = "name1";
	$tdatavw_Eoc_returned_items[".panelSearchFields"][] = "name2";
	$tdatavw_Eoc_returned_items[".panelSearchFields"][] = "satei_hi";
	$tdatavw_Eoc_returned_items[".panelSearchFields"][] = "satei_by";
	
$tdatavw_Eoc_returned_items[".advSearchFields"] = array();
$tdatavw_Eoc_returned_items[".advSearchFields"][] = "Eoc_takuhai_id";
$tdatavw_Eoc_returned_items[".advSearchFields"][] = "meisai";
$tdatavw_Eoc_returned_items[".advSearchFields"][] = "ecc_id";
$tdatavw_Eoc_returned_items[".advSearchFields"][] = "name1";
$tdatavw_Eoc_returned_items[".advSearchFields"][] = "name2";
$tdatavw_Eoc_returned_items[".advSearchFields"][] = "satei_hi";
$tdatavw_Eoc_returned_items[".advSearchFields"][] = "satei_by";

$tdatavw_Eoc_returned_items[".tableType"] = "list";

$tdatavw_Eoc_returned_items[".printerPageOrientation"] = 0;
$tdatavw_Eoc_returned_items[".nPrinterPageScale"] = 100;

$tdatavw_Eoc_returned_items[".nPrinterSplitRecords"] = 40;

$tdatavw_Eoc_returned_items[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_Eoc_returned_items[".geocodingEnabled"] = false;





$tdatavw_Eoc_returned_items[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavw_Eoc_returned_items[".pageSize"] = 100;

$tdatavw_Eoc_returned_items[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_Eoc_returned_items[".strOrderBy"] = $tstrOrderBy;

$tdatavw_Eoc_returned_items[".orderindexes"] = array();

$tdatavw_Eoc_returned_items[".sqlHead"] = "SELECT `ecc_id`,  `ecc_id` AS `meisai`,  `name1`,  `name2`,  `Eoc_takuhai_id`,  `satei_hi`,  `satei_by`";
$tdatavw_Eoc_returned_items[".sqlFrom"] = "FROM `vw_Eoc_returned_items`";
$tdatavw_Eoc_returned_items[".sqlWhereExpr"] = "";
$tdatavw_Eoc_returned_items[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_Eoc_returned_items[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_Eoc_returned_items[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_Eoc_returned_items[".highlightSearchResults"] = true;

$tableKeysvw_Eoc_returned_items = array();
$tdatavw_Eoc_returned_items[".Keys"] = $tableKeysvw_Eoc_returned_items;

$tdatavw_Eoc_returned_items[".listFields"] = array();
$tdatavw_Eoc_returned_items[".listFields"][] = "Eoc_takuhai_id";
$tdatavw_Eoc_returned_items[".listFields"][] = "meisai";
$tdatavw_Eoc_returned_items[".listFields"][] = "ecc_id";
$tdatavw_Eoc_returned_items[".listFields"][] = "name1";
$tdatavw_Eoc_returned_items[".listFields"][] = "name2";
$tdatavw_Eoc_returned_items[".listFields"][] = "satei_hi";
$tdatavw_Eoc_returned_items[".listFields"][] = "satei_by";

$tdatavw_Eoc_returned_items[".hideMobileList"] = array();


$tdatavw_Eoc_returned_items[".viewFields"] = array();

$tdatavw_Eoc_returned_items[".addFields"] = array();

$tdatavw_Eoc_returned_items[".masterListFields"] = array();
$tdatavw_Eoc_returned_items[".masterListFields"][] = "Eoc_takuhai_id";
$tdatavw_Eoc_returned_items[".masterListFields"][] = "meisai";
$tdatavw_Eoc_returned_items[".masterListFields"][] = "ecc_id";
$tdatavw_Eoc_returned_items[".masterListFields"][] = "name1";
$tdatavw_Eoc_returned_items[".masterListFields"][] = "name2";
$tdatavw_Eoc_returned_items[".masterListFields"][] = "satei_hi";
$tdatavw_Eoc_returned_items[".masterListFields"][] = "satei_by";

$tdatavw_Eoc_returned_items[".inlineAddFields"] = array();

$tdatavw_Eoc_returned_items[".editFields"] = array();

$tdatavw_Eoc_returned_items[".inlineEditFields"] = array();

$tdatavw_Eoc_returned_items[".updateSelectedFields"] = array();


$tdatavw_Eoc_returned_items[".exportFields"] = array();
$tdatavw_Eoc_returned_items[".exportFields"][] = "Eoc_takuhai_id";
$tdatavw_Eoc_returned_items[".exportFields"][] = "meisai";
$tdatavw_Eoc_returned_items[".exportFields"][] = "ecc_id";
$tdatavw_Eoc_returned_items[".exportFields"][] = "name1";
$tdatavw_Eoc_returned_items[".exportFields"][] = "name2";
$tdatavw_Eoc_returned_items[".exportFields"][] = "satei_hi";
$tdatavw_Eoc_returned_items[".exportFields"][] = "satei_by";

$tdatavw_Eoc_returned_items[".importFields"] = array();

$tdatavw_Eoc_returned_items[".printFields"] = array();

//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "vw_Eoc_returned_items";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_returned_items","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatavw_Eoc_returned_items["ecc_id"] = $fdata;
//	meisai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "meisai";
	$fdata["GoodName"] = "meisai";
	$fdata["ownerTable"] = "vw_Eoc_returned_items";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_returned_items","meisai");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ecc_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdatavw_Eoc_returned_items["meisai"] = $fdata;
//	name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name1";
	$fdata["GoodName"] = "name1";
	$fdata["ownerTable"] = "vw_Eoc_returned_items";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_returned_items","name1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`name1`";

	
	
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdatavw_Eoc_returned_items["name1"] = $fdata;
//	name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name2";
	$fdata["GoodName"] = "name2";
	$fdata["ownerTable"] = "vw_Eoc_returned_items";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_returned_items","name2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`name2`";

	
	
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdatavw_Eoc_returned_items["name2"] = $fdata;
//	Eoc_takuhai_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Eoc_takuhai_id";
	$fdata["GoodName"] = "Eoc_takuhai_id";
	$fdata["ownerTable"] = "vw_Eoc_returned_items";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_returned_items","Eoc_takuhai_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatavw_Eoc_returned_items["Eoc_takuhai_id"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "vw_Eoc_returned_items";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_returned_items","satei_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`satei_hi`";

	
	
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




	$tdatavw_Eoc_returned_items["satei_hi"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "vw_Eoc_returned_items";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_returned_items","satei_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`satei_by`";

	
	
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




	$tdatavw_Eoc_returned_items["satei_by"] = $fdata;


$tables_data["vw_Eoc_returned_items"]=&$tdatavw_Eoc_returned_items;
$field_labels["vw_Eoc_returned_items"] = &$fieldLabelsvw_Eoc_returned_items;
$fieldToolTips["vw_Eoc_returned_items"] = &$fieldToolTipsvw_Eoc_returned_items;
$placeHolders["vw_Eoc_returned_items"] = &$placeHoldersvw_Eoc_returned_items;
$page_titles["vw_Eoc_returned_items"] = &$pageTitlesvw_Eoc_returned_items;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_Eoc_returned_items"] = array();
//	shouhin
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="shouhin";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "shouhin";
	$detailsParam["dCaptionTable"] = GetTableCaption("shouhin");
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
		
	$detailsTablesData["vw_Eoc_returned_items"][$dIndex] = $detailsParam;

	
		$detailsTablesData["vw_Eoc_returned_items"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["vw_Eoc_returned_items"][$dIndex]["masterKeys"][]="Eoc_takuhai_id";

				$detailsTablesData["vw_Eoc_returned_items"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["vw_Eoc_returned_items"][$dIndex]["detailKeys"][]="Eoc_takuhai_id";

// tables which are master tables for current table (detail)
$masterTablesData["vw_Eoc_returned_items"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_Eoc_returned_items()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`ecc_id`,  `ecc_id` AS `meisai`,  `name1`,  `name2`,  `Eoc_takuhai_id`,  `satei_hi`,  `satei_by`";
$proto0["m_strFrom"] = "FROM `vw_Eoc_returned_items`";
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
	"m_strName" => "ecc_id",
	"m_strTable" => "vw_Eoc_returned_items",
	"m_srcTableName" => "vw_Eoc_returned_items"
));

$proto6["m_sql"] = "`ecc_id`";
$proto6["m_srcTableName"] = "vw_Eoc_returned_items";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "vw_Eoc_returned_items",
	"m_srcTableName" => "vw_Eoc_returned_items"
));

$proto8["m_sql"] = "`ecc_id`";
$proto8["m_srcTableName"] = "vw_Eoc_returned_items";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "meisai";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name1",
	"m_strTable" => "vw_Eoc_returned_items",
	"m_srcTableName" => "vw_Eoc_returned_items"
));

$proto10["m_sql"] = "`name1`";
$proto10["m_srcTableName"] = "vw_Eoc_returned_items";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "vw_Eoc_returned_items",
	"m_srcTableName" => "vw_Eoc_returned_items"
));

$proto12["m_sql"] = "`name2`";
$proto12["m_srcTableName"] = "vw_Eoc_returned_items";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_takuhai_id",
	"m_strTable" => "vw_Eoc_returned_items",
	"m_srcTableName" => "vw_Eoc_returned_items"
));

$proto14["m_sql"] = "`Eoc_takuhai_id`";
$proto14["m_srcTableName"] = "vw_Eoc_returned_items";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "vw_Eoc_returned_items",
	"m_srcTableName" => "vw_Eoc_returned_items"
));

$proto16["m_sql"] = "`satei_hi`";
$proto16["m_srcTableName"] = "vw_Eoc_returned_items";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "vw_Eoc_returned_items",
	"m_srcTableName" => "vw_Eoc_returned_items"
));

$proto18["m_sql"] = "`satei_by`";
$proto18["m_srcTableName"] = "vw_Eoc_returned_items";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "vw_Eoc_returned_items";
$proto21["m_srcTableName"] = "vw_Eoc_returned_items";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ecc_id";
$proto21["m_columns"][] = "name1";
$proto21["m_columns"][] = "name2";
$proto21["m_columns"][] = "Eoc_takuhai_id";
$proto21["m_columns"][] = "satei_hi";
$proto21["m_columns"][] = "satei_by";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`vw_Eoc_returned_items`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "vw_Eoc_returned_items";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vw_Eoc_returned_items";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_Eoc_returned_items = createSqlQuery_vw_Eoc_returned_items();


	
		;

							

$tdatavw_Eoc_returned_items[".sqlquery"] = $queryData_vw_Eoc_returned_items;

$tableEvents["vw_Eoc_returned_items"] = new eventsBase;
$tdatavw_Eoc_returned_items[".hasEvents"] = false;

?>