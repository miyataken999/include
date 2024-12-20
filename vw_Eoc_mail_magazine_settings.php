<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_Eoc_mail_magazine = array();
	$tdatavw_Eoc_mail_magazine[".truncateText"] = true;
	$tdatavw_Eoc_mail_magazine[".NumberOfChars"] = 80;
	$tdatavw_Eoc_mail_magazine[".ShortName"] = "vw_Eoc_mail_magazine";
	$tdatavw_Eoc_mail_magazine[".OwnerID"] = "";
	$tdatavw_Eoc_mail_magazine[".OriginalTable"] = "vw_Eoc_mail_magazine";

//	field labels
$fieldLabelsvw_Eoc_mail_magazine = array();
$fieldToolTipsvw_Eoc_mail_magazine = array();
$pageTitlesvw_Eoc_mail_magazine = array();
$placeHoldersvw_Eoc_mail_magazine = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_Eoc_mail_magazine["Japanese"] = array();
	$fieldToolTipsvw_Eoc_mail_magazine["Japanese"] = array();
	$placeHoldersvw_Eoc_mail_magazine["Japanese"] = array();
	$pageTitlesvw_Eoc_mail_magazine["Japanese"] = array();
	$fieldLabelsvw_Eoc_mail_magazine["Japanese"]["sex"] = "性別";
	$fieldToolTipsvw_Eoc_mail_magazine["Japanese"]["sex"] = "";
	$placeHoldersvw_Eoc_mail_magazine["Japanese"]["sex"] = "";
	$fieldLabelsvw_Eoc_mail_magazine["Japanese"]["todou"] = "都道府県";
	$fieldToolTipsvw_Eoc_mail_magazine["Japanese"]["todou"] = "";
	$placeHoldersvw_Eoc_mail_magazine["Japanese"]["todou"] = "";
	$fieldLabelsvw_Eoc_mail_magazine["Japanese"]["birth"] = "生年月日";
	$fieldToolTipsvw_Eoc_mail_magazine["Japanese"]["birth"] = "";
	$placeHoldersvw_Eoc_mail_magazine["Japanese"]["birth"] = "";
	$fieldLabelsvw_Eoc_mail_magazine["Japanese"]["mail"] = "E-Mail";
	$fieldToolTipsvw_Eoc_mail_magazine["Japanese"]["mail"] = "";
	$placeHoldersvw_Eoc_mail_magazine["Japanese"]["mail"] = "";
	$fieldLabelsvw_Eoc_mail_magazine["Japanese"]["mail_check"] = "サイトからのお知らせメールを希望しますか?";
	$fieldToolTipsvw_Eoc_mail_magazine["Japanese"]["mail_check"] = "";
	$placeHoldersvw_Eoc_mail_magazine["Japanese"]["mail_check"] = "";
	$fieldLabelsvw_Eoc_mail_magazine["Japanese"]["sougaku"] = "買取総額";
	$fieldToolTipsvw_Eoc_mail_magazine["Japanese"]["sougaku"] = "";
	$placeHoldersvw_Eoc_mail_magazine["Japanese"]["sougaku"] = "";
	$fieldLabelsvw_Eoc_mail_magazine["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsvw_Eoc_mail_magazine["Japanese"]["ecc_id"] = "";
	$placeHoldersvw_Eoc_mail_magazine["Japanese"]["ecc_id"] = "";
	if (count($fieldToolTipsvw_Eoc_mail_magazine["Japanese"]))
		$tdatavw_Eoc_mail_magazine[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_Eoc_mail_magazine[""] = array();
	$fieldToolTipsvw_Eoc_mail_magazine[""] = array();
	$placeHoldersvw_Eoc_mail_magazine[""] = array();
	$pageTitlesvw_Eoc_mail_magazine[""] = array();
	$fieldLabelsvw_Eoc_mail_magazine[""]["sex"] = "Sex";
	$fieldToolTipsvw_Eoc_mail_magazine[""]["sex"] = "";
	$placeHoldersvw_Eoc_mail_magazine[""]["sex"] = "";
	$fieldLabelsvw_Eoc_mail_magazine[""]["todou"] = "Todou";
	$fieldToolTipsvw_Eoc_mail_magazine[""]["todou"] = "";
	$placeHoldersvw_Eoc_mail_magazine[""]["todou"] = "";
	$fieldLabelsvw_Eoc_mail_magazine[""]["birth"] = "Birth";
	$fieldToolTipsvw_Eoc_mail_magazine[""]["birth"] = "";
	$placeHoldersvw_Eoc_mail_magazine[""]["birth"] = "";
	$fieldLabelsvw_Eoc_mail_magazine[""]["mail"] = "Mail";
	$fieldToolTipsvw_Eoc_mail_magazine[""]["mail"] = "";
	$placeHoldersvw_Eoc_mail_magazine[""]["mail"] = "";
	$fieldLabelsvw_Eoc_mail_magazine[""]["mail_check"] = "Mail Check";
	$fieldToolTipsvw_Eoc_mail_magazine[""]["mail_check"] = "";
	$placeHoldersvw_Eoc_mail_magazine[""]["mail_check"] = "";
	$fieldLabelsvw_Eoc_mail_magazine[""]["sougaku"] = "Sougaku";
	$fieldToolTipsvw_Eoc_mail_magazine[""]["sougaku"] = "";
	$placeHoldersvw_Eoc_mail_magazine[""]["sougaku"] = "";
	$fieldLabelsvw_Eoc_mail_magazine[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsvw_Eoc_mail_magazine[""]["ecc_id"] = "";
	$placeHoldersvw_Eoc_mail_magazine[""]["ecc_id"] = "";
	if (count($fieldToolTipsvw_Eoc_mail_magazine[""]))
		$tdatavw_Eoc_mail_magazine[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_Eoc_mail_magazine["English"] = array();
	$fieldToolTipsvw_Eoc_mail_magazine["English"] = array();
	$placeHoldersvw_Eoc_mail_magazine["English"] = array();
	$pageTitlesvw_Eoc_mail_magazine["English"] = array();
	$fieldLabelsvw_Eoc_mail_magazine["English"]["sex"] = "Sex";
	$fieldToolTipsvw_Eoc_mail_magazine["English"]["sex"] = "";
	$placeHoldersvw_Eoc_mail_magazine["English"]["sex"] = "";
	$fieldLabelsvw_Eoc_mail_magazine["English"]["todou"] = "Todou";
	$fieldToolTipsvw_Eoc_mail_magazine["English"]["todou"] = "";
	$placeHoldersvw_Eoc_mail_magazine["English"]["todou"] = "";
	$fieldLabelsvw_Eoc_mail_magazine["English"]["birth"] = "Birth";
	$fieldToolTipsvw_Eoc_mail_magazine["English"]["birth"] = "";
	$placeHoldersvw_Eoc_mail_magazine["English"]["birth"] = "";
	$fieldLabelsvw_Eoc_mail_magazine["English"]["mail"] = "Mail";
	$fieldToolTipsvw_Eoc_mail_magazine["English"]["mail"] = "";
	$placeHoldersvw_Eoc_mail_magazine["English"]["mail"] = "";
	$fieldLabelsvw_Eoc_mail_magazine["English"]["mail_check"] = "Mail Check";
	$fieldToolTipsvw_Eoc_mail_magazine["English"]["mail_check"] = "";
	$placeHoldersvw_Eoc_mail_magazine["English"]["mail_check"] = "";
	$fieldLabelsvw_Eoc_mail_magazine["English"]["sougaku"] = "Sougaku";
	$fieldToolTipsvw_Eoc_mail_magazine["English"]["sougaku"] = "";
	$placeHoldersvw_Eoc_mail_magazine["English"]["sougaku"] = "";
	$fieldLabelsvw_Eoc_mail_magazine["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsvw_Eoc_mail_magazine["English"]["ecc_id"] = "";
	$placeHoldersvw_Eoc_mail_magazine["English"]["ecc_id"] = "";
	if (count($fieldToolTipsvw_Eoc_mail_magazine["English"]))
		$tdatavw_Eoc_mail_magazine[".isUseToolTips"] = true;
}


	$tdatavw_Eoc_mail_magazine[".NCSearch"] = true;



$tdatavw_Eoc_mail_magazine[".shortTableName"] = "vw_Eoc_mail_magazine";
$tdatavw_Eoc_mail_magazine[".nSecOptions"] = 0;
$tdatavw_Eoc_mail_magazine[".recsPerRowPrint"] = 1;
$tdatavw_Eoc_mail_magazine[".mainTableOwnerID"] = "";
$tdatavw_Eoc_mail_magazine[".moveNext"] = 1;
$tdatavw_Eoc_mail_magazine[".entityType"] = 0;

$tdatavw_Eoc_mail_magazine[".strOriginalTableName"] = "vw_Eoc_mail_magazine";

	



$tdatavw_Eoc_mail_magazine[".showAddInPopup"] = false;

$tdatavw_Eoc_mail_magazine[".showEditInPopup"] = false;

$tdatavw_Eoc_mail_magazine[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_Eoc_mail_magazine[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_Eoc_mail_magazine[".fieldsForRegister"] = array();

$tdatavw_Eoc_mail_magazine[".listAjax"] = false;

	$tdatavw_Eoc_mail_magazine[".audit"] = false;

	$tdatavw_Eoc_mail_magazine[".locking"] = false;



$tdatavw_Eoc_mail_magazine[".list"] = true;



$tdatavw_Eoc_mail_magazine[".reorderRecordsByHeader"] = true;





$tdatavw_Eoc_mail_magazine[".exportTo"] = true;



$tdatavw_Eoc_mail_magazine[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_Eoc_mail_magazine[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_Eoc_mail_magazine[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_Eoc_mail_magazine[".searchSaving"] = false;
//

$tdatavw_Eoc_mail_magazine[".showSearchPanel"] = true;
		$tdatavw_Eoc_mail_magazine[".flexibleSearch"] = true;

$tdatavw_Eoc_mail_magazine[".isUseAjaxSuggest"] = true;

$tdatavw_Eoc_mail_magazine[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatavw_Eoc_mail_magazine[".ajaxCodeSnippetAdded"] = false;

$tdatavw_Eoc_mail_magazine[".buttonsAdded"] = false;

$tdatavw_Eoc_mail_magazine[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_Eoc_mail_magazine[".isUseTimeForSearch"] = false;





$tdatavw_Eoc_mail_magazine[".allSearchFields"] = array();
$tdatavw_Eoc_mail_magazine[".filterFields"] = array();
$tdatavw_Eoc_mail_magazine[".requiredSearchFields"] = array();

$tdatavw_Eoc_mail_magazine[".allSearchFields"][] = "sex";
	$tdatavw_Eoc_mail_magazine[".allSearchFields"][] = "todou";
	$tdatavw_Eoc_mail_magazine[".allSearchFields"][] = "birth";
	$tdatavw_Eoc_mail_magazine[".allSearchFields"][] = "mail";
	$tdatavw_Eoc_mail_magazine[".allSearchFields"][] = "mail_check";
	$tdatavw_Eoc_mail_magazine[".allSearchFields"][] = "sougaku";
	$tdatavw_Eoc_mail_magazine[".allSearchFields"][] = "ecc_id";
	

$tdatavw_Eoc_mail_magazine[".googleLikeFields"] = array();
$tdatavw_Eoc_mail_magazine[".googleLikeFields"][] = "sex";
$tdatavw_Eoc_mail_magazine[".googleLikeFields"][] = "todou";
$tdatavw_Eoc_mail_magazine[".googleLikeFields"][] = "birth";
$tdatavw_Eoc_mail_magazine[".googleLikeFields"][] = "mail";
$tdatavw_Eoc_mail_magazine[".googleLikeFields"][] = "mail_check";
$tdatavw_Eoc_mail_magazine[".googleLikeFields"][] = "sougaku";
$tdatavw_Eoc_mail_magazine[".googleLikeFields"][] = "ecc_id";

$tdatavw_Eoc_mail_magazine[".panelSearchFields"] = array();
$tdatavw_Eoc_mail_magazine[".searchPanelOptions"] = array();
$tdatavw_Eoc_mail_magazine[".panelSearchFields"][] = "sex";
	$tdatavw_Eoc_mail_magazine[".panelSearchFields"][] = "todou";
	$tdatavw_Eoc_mail_magazine[".panelSearchFields"][] = "birth";
	$tdatavw_Eoc_mail_magazine[".panelSearchFields"][] = "mail";
	$tdatavw_Eoc_mail_magazine[".panelSearchFields"][] = "mail_check";
	$tdatavw_Eoc_mail_magazine[".panelSearchFields"][] = "sougaku";
	$tdatavw_Eoc_mail_magazine[".panelSearchFields"][] = "ecc_id";
	
$tdatavw_Eoc_mail_magazine[".advSearchFields"] = array();
$tdatavw_Eoc_mail_magazine[".advSearchFields"][] = "sex";
$tdatavw_Eoc_mail_magazine[".advSearchFields"][] = "todou";
$tdatavw_Eoc_mail_magazine[".advSearchFields"][] = "birth";
$tdatavw_Eoc_mail_magazine[".advSearchFields"][] = "mail";
$tdatavw_Eoc_mail_magazine[".advSearchFields"][] = "mail_check";
$tdatavw_Eoc_mail_magazine[".advSearchFields"][] = "sougaku";
$tdatavw_Eoc_mail_magazine[".advSearchFields"][] = "ecc_id";

$tdatavw_Eoc_mail_magazine[".tableType"] = "list";

$tdatavw_Eoc_mail_magazine[".printerPageOrientation"] = 0;
$tdatavw_Eoc_mail_magazine[".nPrinterPageScale"] = 100;

$tdatavw_Eoc_mail_magazine[".nPrinterSplitRecords"] = 40;

$tdatavw_Eoc_mail_magazine[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_Eoc_mail_magazine[".geocodingEnabled"] = false;





$tdatavw_Eoc_mail_magazine[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavw_Eoc_mail_magazine[".pageSize"] = 20;

$tdatavw_Eoc_mail_magazine[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_Eoc_mail_magazine[".strOrderBy"] = $tstrOrderBy;

$tdatavw_Eoc_mail_magazine[".orderindexes"] = array();

$tdatavw_Eoc_mail_magazine[".sqlHead"] = "SELECT `sex`,  	`todou`,  	`birth`,  	`mail`,  	`mail_check`,  	`sougaku`,  	`ecc_id`";
$tdatavw_Eoc_mail_magazine[".sqlFrom"] = "FROM `vw_Eoc_mail_magazine`";
$tdatavw_Eoc_mail_magazine[".sqlWhereExpr"] = "";
$tdatavw_Eoc_mail_magazine[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_Eoc_mail_magazine[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_Eoc_mail_magazine[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_Eoc_mail_magazine[".highlightSearchResults"] = true;

$tableKeysvw_Eoc_mail_magazine = array();
$tdatavw_Eoc_mail_magazine[".Keys"] = $tableKeysvw_Eoc_mail_magazine;

$tdatavw_Eoc_mail_magazine[".listFields"] = array();
$tdatavw_Eoc_mail_magazine[".listFields"][] = "sex";
$tdatavw_Eoc_mail_magazine[".listFields"][] = "todou";
$tdatavw_Eoc_mail_magazine[".listFields"][] = "birth";
$tdatavw_Eoc_mail_magazine[".listFields"][] = "mail";
$tdatavw_Eoc_mail_magazine[".listFields"][] = "mail_check";
$tdatavw_Eoc_mail_magazine[".listFields"][] = "sougaku";
$tdatavw_Eoc_mail_magazine[".listFields"][] = "ecc_id";

$tdatavw_Eoc_mail_magazine[".hideMobileList"] = array();


$tdatavw_Eoc_mail_magazine[".viewFields"] = array();

$tdatavw_Eoc_mail_magazine[".addFields"] = array();

$tdatavw_Eoc_mail_magazine[".masterListFields"] = array();
$tdatavw_Eoc_mail_magazine[".masterListFields"][] = "sex";
$tdatavw_Eoc_mail_magazine[".masterListFields"][] = "todou";
$tdatavw_Eoc_mail_magazine[".masterListFields"][] = "birth";
$tdatavw_Eoc_mail_magazine[".masterListFields"][] = "mail";
$tdatavw_Eoc_mail_magazine[".masterListFields"][] = "mail_check";
$tdatavw_Eoc_mail_magazine[".masterListFields"][] = "sougaku";
$tdatavw_Eoc_mail_magazine[".masterListFields"][] = "ecc_id";

$tdatavw_Eoc_mail_magazine[".inlineAddFields"] = array();

$tdatavw_Eoc_mail_magazine[".editFields"] = array();

$tdatavw_Eoc_mail_magazine[".inlineEditFields"] = array();

$tdatavw_Eoc_mail_magazine[".updateSelectedFields"] = array();


$tdatavw_Eoc_mail_magazine[".exportFields"] = array();
$tdatavw_Eoc_mail_magazine[".exportFields"][] = "sex";
$tdatavw_Eoc_mail_magazine[".exportFields"][] = "todou";
$tdatavw_Eoc_mail_magazine[".exportFields"][] = "birth";
$tdatavw_Eoc_mail_magazine[".exportFields"][] = "mail";
$tdatavw_Eoc_mail_magazine[".exportFields"][] = "mail_check";
$tdatavw_Eoc_mail_magazine[".exportFields"][] = "sougaku";
$tdatavw_Eoc_mail_magazine[".exportFields"][] = "ecc_id";

$tdatavw_Eoc_mail_magazine[".importFields"] = array();

$tdatavw_Eoc_mail_magazine[".printFields"] = array();

//	sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sex";
	$fdata["GoodName"] = "sex";
	$fdata["ownerTable"] = "vw_Eoc_mail_magazine";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_mail_magazine","sex");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sex`";

	
	
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




	$tdatavw_Eoc_mail_magazine["sex"] = $fdata;
//	todou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "todou";
	$fdata["GoodName"] = "todou";
	$fdata["ownerTable"] = "vw_Eoc_mail_magazine";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_mail_magazine","todou");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "todou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`todou`";

	
	
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




	$tdatavw_Eoc_mail_magazine["todou"] = $fdata;
//	birth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "birth";
	$fdata["GoodName"] = "birth";
	$fdata["ownerTable"] = "vw_Eoc_mail_magazine";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_mail_magazine","birth");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "birth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`birth`";

	
	
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
			$edata["EditParams"].= " maxlength=35";

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




	$tdatavw_Eoc_mail_magazine["birth"] = $fdata;
//	mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mail";
	$fdata["GoodName"] = "mail";
	$fdata["ownerTable"] = "vw_Eoc_mail_magazine";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_mail_magazine","mail");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mail`";

	
	
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




	$tdatavw_Eoc_mail_magazine["mail"] = $fdata;
//	mail_check
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mail_check";
	$fdata["GoodName"] = "mail_check";
	$fdata["ownerTable"] = "vw_Eoc_mail_magazine";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_mail_magazine","mail_check");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mail_check";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mail_check`";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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




	$tdatavw_Eoc_mail_magazine["mail_check"] = $fdata;
//	sougaku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sougaku";
	$fdata["GoodName"] = "sougaku";
	$fdata["ownerTable"] = "vw_Eoc_mail_magazine";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_mail_magazine","sougaku");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sougaku";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sougaku`";

	
	
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




	$tdatavw_Eoc_mail_magazine["sougaku"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "vw_Eoc_mail_magazine";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_mail_magazine","ecc_id");
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




	$tdatavw_Eoc_mail_magazine["ecc_id"] = $fdata;


$tables_data["vw_Eoc_mail_magazine"]=&$tdatavw_Eoc_mail_magazine;
$field_labels["vw_Eoc_mail_magazine"] = &$fieldLabelsvw_Eoc_mail_magazine;
$fieldToolTips["vw_Eoc_mail_magazine"] = &$fieldToolTipsvw_Eoc_mail_magazine;
$placeHolders["vw_Eoc_mail_magazine"] = &$placeHoldersvw_Eoc_mail_magazine;
$page_titles["vw_Eoc_mail_magazine"] = &$pageTitlesvw_Eoc_mail_magazine;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_Eoc_mail_magazine"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_Eoc_mail_magazine"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_Eoc_mail_magazine()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`sex`,  	`todou`,  	`birth`,  	`mail`,  	`mail_check`,  	`sougaku`,  	`ecc_id`";
$proto0["m_strFrom"] = "FROM `vw_Eoc_mail_magazine`";
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
	"m_strName" => "sex",
	"m_strTable" => "vw_Eoc_mail_magazine",
	"m_srcTableName" => "vw_Eoc_mail_magazine"
));

$proto6["m_sql"] = "`sex`";
$proto6["m_srcTableName"] = "vw_Eoc_mail_magazine";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "todou",
	"m_strTable" => "vw_Eoc_mail_magazine",
	"m_srcTableName" => "vw_Eoc_mail_magazine"
));

$proto8["m_sql"] = "`todou`";
$proto8["m_srcTableName"] = "vw_Eoc_mail_magazine";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "birth",
	"m_strTable" => "vw_Eoc_mail_magazine",
	"m_srcTableName" => "vw_Eoc_mail_magazine"
));

$proto10["m_sql"] = "`birth`";
$proto10["m_srcTableName"] = "vw_Eoc_mail_magazine";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "mail",
	"m_strTable" => "vw_Eoc_mail_magazine",
	"m_srcTableName" => "vw_Eoc_mail_magazine"
));

$proto12["m_sql"] = "`mail`";
$proto12["m_srcTableName"] = "vw_Eoc_mail_magazine";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mail_check",
	"m_strTable" => "vw_Eoc_mail_magazine",
	"m_srcTableName" => "vw_Eoc_mail_magazine"
));

$proto14["m_sql"] = "`mail_check`";
$proto14["m_srcTableName"] = "vw_Eoc_mail_magazine";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sougaku",
	"m_strTable" => "vw_Eoc_mail_magazine",
	"m_srcTableName" => "vw_Eoc_mail_magazine"
));

$proto16["m_sql"] = "`sougaku`";
$proto16["m_srcTableName"] = "vw_Eoc_mail_magazine";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "vw_Eoc_mail_magazine",
	"m_srcTableName" => "vw_Eoc_mail_magazine"
));

$proto18["m_sql"] = "`ecc_id`";
$proto18["m_srcTableName"] = "vw_Eoc_mail_magazine";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "vw_Eoc_mail_magazine";
$proto21["m_srcTableName"] = "vw_Eoc_mail_magazine";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "sex";
$proto21["m_columns"][] = "todou";
$proto21["m_columns"][] = "birth";
$proto21["m_columns"][] = "mail";
$proto21["m_columns"][] = "mail_check";
$proto21["m_columns"][] = "sougaku";
$proto21["m_columns"][] = "ecc_id";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`vw_Eoc_mail_magazine`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "vw_Eoc_mail_magazine";
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
$proto0["m_srcTableName"]="vw_Eoc_mail_magazine";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_Eoc_mail_magazine = createSqlQuery_vw_Eoc_mail_magazine();


	
		;

							

$tdatavw_Eoc_mail_magazine[".sqlquery"] = $queryData_vw_Eoc_mail_magazine;

$tableEvents["vw_Eoc_mail_magazine"] = new eventsBase;
$tdatavw_Eoc_mail_magazine[".hasEvents"] = false;

?>