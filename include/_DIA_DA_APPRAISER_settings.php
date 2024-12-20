<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_DIA_DA_APPRAISER = array();
	$tdata_DIA_DA_APPRAISER[".truncateText"] = true;
	$tdata_DIA_DA_APPRAISER[".NumberOfChars"] = 80;
	$tdata_DIA_DA_APPRAISER[".ShortName"] = "_DIA_DA_APPRAISER";
	$tdata_DIA_DA_APPRAISER[".OwnerID"] = "";
	$tdata_DIA_DA_APPRAISER[".OriginalTable"] = "_DIA_DA_APPRAISER";

//	field labels
$fieldLabels_DIA_DA_APPRAISER = array();
$fieldToolTips_DIA_DA_APPRAISER = array();
$pageTitles_DIA_DA_APPRAISER = array();
$placeHolders_DIA_DA_APPRAISER = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_DIA_DA_APPRAISER["Japanese"] = array();
	$fieldToolTips_DIA_DA_APPRAISER["Japanese"] = array();
	$placeHolders_DIA_DA_APPRAISER["Japanese"] = array();
	$pageTitles_DIA_DA_APPRAISER["Japanese"] = array();
	$fieldLabels_DIA_DA_APPRAISER["Japanese"]["id"] = "Id";
	$fieldToolTips_DIA_DA_APPRAISER["Japanese"]["id"] = "";
	$placeHolders_DIA_DA_APPRAISER["Japanese"]["id"] = "";
	$fieldLabels_DIA_DA_APPRAISER["Japanese"]["name"] = "Name";
	$fieldToolTips_DIA_DA_APPRAISER["Japanese"]["name"] = "";
	$placeHolders_DIA_DA_APPRAISER["Japanese"]["name"] = "";
	$fieldLabels_DIA_DA_APPRAISER["Japanese"]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_APPRAISER["Japanese"]["sort"] = "";
	$placeHolders_DIA_DA_APPRAISER["Japanese"]["sort"] = "";
	$fieldLabels_DIA_DA_APPRAISER["Japanese"]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_APPRAISER["Japanese"]["parent"] = "";
	$placeHolders_DIA_DA_APPRAISER["Japanese"]["parent"] = "";
	$fieldLabels_DIA_DA_APPRAISER["Japanese"]["wa_name"] = "Wa Name";
	$fieldToolTips_DIA_DA_APPRAISER["Japanese"]["wa_name"] = "";
	$placeHolders_DIA_DA_APPRAISER["Japanese"]["wa_name"] = "";
	if (count($fieldToolTips_DIA_DA_APPRAISER["Japanese"]))
		$tdata_DIA_DA_APPRAISER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_DIA_DA_APPRAISER[""] = array();
	$fieldToolTips_DIA_DA_APPRAISER[""] = array();
	$placeHolders_DIA_DA_APPRAISER[""] = array();
	$pageTitles_DIA_DA_APPRAISER[""] = array();
	$fieldLabels_DIA_DA_APPRAISER[""]["id"] = "Id";
	$fieldToolTips_DIA_DA_APPRAISER[""]["id"] = "";
	$placeHolders_DIA_DA_APPRAISER[""]["id"] = "";
	$fieldLabels_DIA_DA_APPRAISER[""]["name"] = "Name";
	$fieldToolTips_DIA_DA_APPRAISER[""]["name"] = "";
	$placeHolders_DIA_DA_APPRAISER[""]["name"] = "";
	$fieldLabels_DIA_DA_APPRAISER[""]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_APPRAISER[""]["sort"] = "";
	$placeHolders_DIA_DA_APPRAISER[""]["sort"] = "";
	$fieldLabels_DIA_DA_APPRAISER[""]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_APPRAISER[""]["parent"] = "";
	$placeHolders_DIA_DA_APPRAISER[""]["parent"] = "";
	$fieldLabels_DIA_DA_APPRAISER[""]["wa_name"] = "Wa Name";
	$fieldToolTips_DIA_DA_APPRAISER[""]["wa_name"] = "";
	$placeHolders_DIA_DA_APPRAISER[""]["wa_name"] = "";
	if (count($fieldToolTips_DIA_DA_APPRAISER[""]))
		$tdata_DIA_DA_APPRAISER[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabels_DIA_DA_APPRAISER["English"] = array();
	$fieldToolTips_DIA_DA_APPRAISER["English"] = array();
	$placeHolders_DIA_DA_APPRAISER["English"] = array();
	$pageTitles_DIA_DA_APPRAISER["English"] = array();
	$fieldLabels_DIA_DA_APPRAISER["English"]["id"] = "Id";
	$fieldToolTips_DIA_DA_APPRAISER["English"]["id"] = "";
	$placeHolders_DIA_DA_APPRAISER["English"]["id"] = "";
	$fieldLabels_DIA_DA_APPRAISER["English"]["name"] = "Name";
	$fieldToolTips_DIA_DA_APPRAISER["English"]["name"] = "";
	$placeHolders_DIA_DA_APPRAISER["English"]["name"] = "";
	$fieldLabels_DIA_DA_APPRAISER["English"]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_APPRAISER["English"]["sort"] = "";
	$placeHolders_DIA_DA_APPRAISER["English"]["sort"] = "";
	$fieldLabels_DIA_DA_APPRAISER["English"]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_APPRAISER["English"]["parent"] = "";
	$placeHolders_DIA_DA_APPRAISER["English"]["parent"] = "";
	$fieldLabels_DIA_DA_APPRAISER["English"]["wa_name"] = "Wa Name";
	$fieldToolTips_DIA_DA_APPRAISER["English"]["wa_name"] = "";
	$placeHolders_DIA_DA_APPRAISER["English"]["wa_name"] = "";
	if (count($fieldToolTips_DIA_DA_APPRAISER["English"]))
		$tdata_DIA_DA_APPRAISER[".isUseToolTips"] = true;
}


	$tdata_DIA_DA_APPRAISER[".NCSearch"] = true;



$tdata_DIA_DA_APPRAISER[".shortTableName"] = "_DIA_DA_APPRAISER";
$tdata_DIA_DA_APPRAISER[".nSecOptions"] = 0;
$tdata_DIA_DA_APPRAISER[".recsPerRowPrint"] = 1;
$tdata_DIA_DA_APPRAISER[".mainTableOwnerID"] = "";
$tdata_DIA_DA_APPRAISER[".moveNext"] = 1;
$tdata_DIA_DA_APPRAISER[".entityType"] = 0;

$tdata_DIA_DA_APPRAISER[".strOriginalTableName"] = "_DIA_DA_APPRAISER";

	



$tdata_DIA_DA_APPRAISER[".showAddInPopup"] = false;

$tdata_DIA_DA_APPRAISER[".showEditInPopup"] = false;

$tdata_DIA_DA_APPRAISER[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_DIA_DA_APPRAISER[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_DIA_DA_APPRAISER[".fieldsForRegister"] = array();

$tdata_DIA_DA_APPRAISER[".listAjax"] = false;

	$tdata_DIA_DA_APPRAISER[".audit"] = false;

	$tdata_DIA_DA_APPRAISER[".locking"] = false;






$tdata_DIA_DA_APPRAISER[".reorderRecordsByHeader"] = true;








$tdata_DIA_DA_APPRAISER[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_DIA_DA_APPRAISER[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_DIA_DA_APPRAISER[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_DIA_DA_APPRAISER[".searchSaving"] = false;
//

$tdata_DIA_DA_APPRAISER[".showSearchPanel"] = true;
		$tdata_DIA_DA_APPRAISER[".flexibleSearch"] = true;

$tdata_DIA_DA_APPRAISER[".isUseAjaxSuggest"] = true;

$tdata_DIA_DA_APPRAISER[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdata_DIA_DA_APPRAISER[".ajaxCodeSnippetAdded"] = false;

$tdata_DIA_DA_APPRAISER[".buttonsAdded"] = false;

$tdata_DIA_DA_APPRAISER[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_DIA_DA_APPRAISER[".isUseTimeForSearch"] = false;





$tdata_DIA_DA_APPRAISER[".allSearchFields"] = array();
$tdata_DIA_DA_APPRAISER[".filterFields"] = array();
$tdata_DIA_DA_APPRAISER[".requiredSearchFields"] = array();



$tdata_DIA_DA_APPRAISER[".googleLikeFields"] = array();
$tdata_DIA_DA_APPRAISER[".googleLikeFields"][] = "id";
$tdata_DIA_DA_APPRAISER[".googleLikeFields"][] = "name";
$tdata_DIA_DA_APPRAISER[".googleLikeFields"][] = "sort";
$tdata_DIA_DA_APPRAISER[".googleLikeFields"][] = "parent";
$tdata_DIA_DA_APPRAISER[".googleLikeFields"][] = "wa_name";



$tdata_DIA_DA_APPRAISER[".tableType"] = "list";

$tdata_DIA_DA_APPRAISER[".printerPageOrientation"] = 0;
$tdata_DIA_DA_APPRAISER[".nPrinterPageScale"] = 100;

$tdata_DIA_DA_APPRAISER[".nPrinterSplitRecords"] = 40;

$tdata_DIA_DA_APPRAISER[".nPrinterPDFSplitRecords"] = 40;



$tdata_DIA_DA_APPRAISER[".geocodingEnabled"] = false;





$tdata_DIA_DA_APPRAISER[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_DIA_DA_APPRAISER[".pageSize"] = 20;

$tdata_DIA_DA_APPRAISER[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_DIA_DA_APPRAISER[".strOrderBy"] = $tstrOrderBy;

$tdata_DIA_DA_APPRAISER[".orderindexes"] = array();

$tdata_DIA_DA_APPRAISER[".sqlHead"] = "SELECT `id`,  	`name`,  	`sort`,  	`parent`,  	`wa_name`";
$tdata_DIA_DA_APPRAISER[".sqlFrom"] = "FROM `_DIA_DA_APPRAISER`";
$tdata_DIA_DA_APPRAISER[".sqlWhereExpr"] = "";
$tdata_DIA_DA_APPRAISER[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_DIA_DA_APPRAISER[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_DIA_DA_APPRAISER[".arrGroupsPerPage"] = $arrGPP;

$tdata_DIA_DA_APPRAISER[".highlightSearchResults"] = true;

$tableKeys_DIA_DA_APPRAISER = array();
$tableKeys_DIA_DA_APPRAISER[] = "id";
$tdata_DIA_DA_APPRAISER[".Keys"] = $tableKeys_DIA_DA_APPRAISER;

$tdata_DIA_DA_APPRAISER[".listFields"] = array();
$tdata_DIA_DA_APPRAISER[".listFields"][] = "id";
$tdata_DIA_DA_APPRAISER[".listFields"][] = "name";
$tdata_DIA_DA_APPRAISER[".listFields"][] = "sort";
$tdata_DIA_DA_APPRAISER[".listFields"][] = "parent";
$tdata_DIA_DA_APPRAISER[".listFields"][] = "wa_name";

$tdata_DIA_DA_APPRAISER[".hideMobileList"] = array();


$tdata_DIA_DA_APPRAISER[".viewFields"] = array();
$tdata_DIA_DA_APPRAISER[".viewFields"][] = "id";
$tdata_DIA_DA_APPRAISER[".viewFields"][] = "name";
$tdata_DIA_DA_APPRAISER[".viewFields"][] = "sort";
$tdata_DIA_DA_APPRAISER[".viewFields"][] = "parent";
$tdata_DIA_DA_APPRAISER[".viewFields"][] = "wa_name";

$tdata_DIA_DA_APPRAISER[".addFields"] = array();
$tdata_DIA_DA_APPRAISER[".addFields"][] = "name";
$tdata_DIA_DA_APPRAISER[".addFields"][] = "sort";
$tdata_DIA_DA_APPRAISER[".addFields"][] = "parent";
$tdata_DIA_DA_APPRAISER[".addFields"][] = "wa_name";

$tdata_DIA_DA_APPRAISER[".masterListFields"] = array();
$tdata_DIA_DA_APPRAISER[".masterListFields"][] = "id";
$tdata_DIA_DA_APPRAISER[".masterListFields"][] = "name";
$tdata_DIA_DA_APPRAISER[".masterListFields"][] = "sort";
$tdata_DIA_DA_APPRAISER[".masterListFields"][] = "parent";
$tdata_DIA_DA_APPRAISER[".masterListFields"][] = "wa_name";

$tdata_DIA_DA_APPRAISER[".inlineAddFields"] = array();
$tdata_DIA_DA_APPRAISER[".inlineAddFields"][] = "name";
$tdata_DIA_DA_APPRAISER[".inlineAddFields"][] = "sort";
$tdata_DIA_DA_APPRAISER[".inlineAddFields"][] = "parent";
$tdata_DIA_DA_APPRAISER[".inlineAddFields"][] = "wa_name";

$tdata_DIA_DA_APPRAISER[".editFields"] = array();
$tdata_DIA_DA_APPRAISER[".editFields"][] = "name";
$tdata_DIA_DA_APPRAISER[".editFields"][] = "sort";
$tdata_DIA_DA_APPRAISER[".editFields"][] = "parent";
$tdata_DIA_DA_APPRAISER[".editFields"][] = "wa_name";

$tdata_DIA_DA_APPRAISER[".inlineEditFields"] = array();
$tdata_DIA_DA_APPRAISER[".inlineEditFields"][] = "name";
$tdata_DIA_DA_APPRAISER[".inlineEditFields"][] = "sort";
$tdata_DIA_DA_APPRAISER[".inlineEditFields"][] = "parent";
$tdata_DIA_DA_APPRAISER[".inlineEditFields"][] = "wa_name";

$tdata_DIA_DA_APPRAISER[".updateSelectedFields"] = array();
$tdata_DIA_DA_APPRAISER[".updateSelectedFields"][] = "name";
$tdata_DIA_DA_APPRAISER[".updateSelectedFields"][] = "sort";
$tdata_DIA_DA_APPRAISER[".updateSelectedFields"][] = "parent";
$tdata_DIA_DA_APPRAISER[".updateSelectedFields"][] = "wa_name";


$tdata_DIA_DA_APPRAISER[".exportFields"] = array();
$tdata_DIA_DA_APPRAISER[".exportFields"][] = "id";
$tdata_DIA_DA_APPRAISER[".exportFields"][] = "name";
$tdata_DIA_DA_APPRAISER[".exportFields"][] = "sort";
$tdata_DIA_DA_APPRAISER[".exportFields"][] = "parent";
$tdata_DIA_DA_APPRAISER[".exportFields"][] = "wa_name";

$tdata_DIA_DA_APPRAISER[".importFields"] = array();
$tdata_DIA_DA_APPRAISER[".importFields"][] = "id";
$tdata_DIA_DA_APPRAISER[".importFields"][] = "name";
$tdata_DIA_DA_APPRAISER[".importFields"][] = "sort";
$tdata_DIA_DA_APPRAISER[".importFields"][] = "parent";
$tdata_DIA_DA_APPRAISER[".importFields"][] = "wa_name";

$tdata_DIA_DA_APPRAISER[".printFields"] = array();
$tdata_DIA_DA_APPRAISER[".printFields"][] = "id";
$tdata_DIA_DA_APPRAISER[".printFields"][] = "name";
$tdata_DIA_DA_APPRAISER[".printFields"][] = "sort";
$tdata_DIA_DA_APPRAISER[".printFields"][] = "parent";
$tdata_DIA_DA_APPRAISER[".printFields"][] = "wa_name";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "_DIA_DA_APPRAISER";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_APPRAISER","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

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








	$tdata_DIA_DA_APPRAISER["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "_DIA_DA_APPRAISER";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_APPRAISER","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

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








	$tdata_DIA_DA_APPRAISER["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "_DIA_DA_APPRAISER";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_APPRAISER","sort");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

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








	$tdata_DIA_DA_APPRAISER["sort"] = $fdata;
//	parent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "parent";
	$fdata["GoodName"] = "parent";
	$fdata["ownerTable"] = "_DIA_DA_APPRAISER";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_APPRAISER","parent");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "parent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`parent`";

	
	
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








	$tdata_DIA_DA_APPRAISER["parent"] = $fdata;
//	wa_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "wa_name";
	$fdata["GoodName"] = "wa_name";
	$fdata["ownerTable"] = "_DIA_DA_APPRAISER";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_APPRAISER","wa_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "wa_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`wa_name`";

	
	
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








	$tdata_DIA_DA_APPRAISER["wa_name"] = $fdata;


$tables_data["_DIA_DA_APPRAISER"]=&$tdata_DIA_DA_APPRAISER;
$field_labels["_DIA_DA_APPRAISER"] = &$fieldLabels_DIA_DA_APPRAISER;
$fieldToolTips["_DIA_DA_APPRAISER"] = &$fieldToolTips_DIA_DA_APPRAISER;
$placeHolders["_DIA_DA_APPRAISER"] = &$placeHolders_DIA_DA_APPRAISER;
$page_titles["_DIA_DA_APPRAISER"] = &$pageTitles_DIA_DA_APPRAISER;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_DIA_DA_APPRAISER"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_DIA_DA_APPRAISER"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__DIA_DA_APPRAISER()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`sort`,  	`parent`,  	`wa_name`";
$proto0["m_strFrom"] = "FROM `_DIA_DA_APPRAISER`";
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
	"m_strName" => "id",
	"m_strTable" => "_DIA_DA_APPRAISER",
	"m_srcTableName" => "_DIA_DA_APPRAISER"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "_DIA_DA_APPRAISER";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "_DIA_DA_APPRAISER",
	"m_srcTableName" => "_DIA_DA_APPRAISER"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "_DIA_DA_APPRAISER";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "_DIA_DA_APPRAISER",
	"m_srcTableName" => "_DIA_DA_APPRAISER"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "_DIA_DA_APPRAISER";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "parent",
	"m_strTable" => "_DIA_DA_APPRAISER",
	"m_srcTableName" => "_DIA_DA_APPRAISER"
));

$proto12["m_sql"] = "`parent`";
$proto12["m_srcTableName"] = "_DIA_DA_APPRAISER";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "wa_name",
	"m_strTable" => "_DIA_DA_APPRAISER",
	"m_srcTableName" => "_DIA_DA_APPRAISER"
));

$proto14["m_sql"] = "`wa_name`";
$proto14["m_srcTableName"] = "_DIA_DA_APPRAISER";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "_DIA_DA_APPRAISER";
$proto17["m_srcTableName"] = "_DIA_DA_APPRAISER";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "name";
$proto17["m_columns"][] = "sort";
$proto17["m_columns"][] = "parent";
$proto17["m_columns"][] = "wa_name";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "`_DIA_DA_APPRAISER`";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "_DIA_DA_APPRAISER";
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
$proto0["m_srcTableName"]="_DIA_DA_APPRAISER";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__DIA_DA_APPRAISER = createSqlQuery__DIA_DA_APPRAISER();


	
		;

					

$tdata_DIA_DA_APPRAISER[".sqlquery"] = $queryData__DIA_DA_APPRAISER;

$tableEvents["_DIA_DA_APPRAISER"] = new eventsBase;
$tdata_DIA_DA_APPRAISER[".hasEvents"] = false;

?>