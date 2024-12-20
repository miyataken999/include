<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_DIA_DA_CUT = array();
	$tdata_DIA_DA_CUT[".truncateText"] = true;
	$tdata_DIA_DA_CUT[".NumberOfChars"] = 80;
	$tdata_DIA_DA_CUT[".ShortName"] = "_DIA_DA_CUT";
	$tdata_DIA_DA_CUT[".OwnerID"] = "";
	$tdata_DIA_DA_CUT[".OriginalTable"] = "_DIA_DA_CUT";

//	field labels
$fieldLabels_DIA_DA_CUT = array();
$fieldToolTips_DIA_DA_CUT = array();
$pageTitles_DIA_DA_CUT = array();
$placeHolders_DIA_DA_CUT = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_DIA_DA_CUT["Japanese"] = array();
	$fieldToolTips_DIA_DA_CUT["Japanese"] = array();
	$placeHolders_DIA_DA_CUT["Japanese"] = array();
	$pageTitles_DIA_DA_CUT["Japanese"] = array();
	$fieldLabels_DIA_DA_CUT["Japanese"]["id"] = "Id";
	$fieldToolTips_DIA_DA_CUT["Japanese"]["id"] = "";
	$placeHolders_DIA_DA_CUT["Japanese"]["id"] = "";
	$fieldLabels_DIA_DA_CUT["Japanese"]["name"] = "Name";
	$fieldToolTips_DIA_DA_CUT["Japanese"]["name"] = "";
	$placeHolders_DIA_DA_CUT["Japanese"]["name"] = "";
	$fieldLabels_DIA_DA_CUT["Japanese"]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_CUT["Japanese"]["sort"] = "";
	$placeHolders_DIA_DA_CUT["Japanese"]["sort"] = "";
	$fieldLabels_DIA_DA_CUT["Japanese"]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_CUT["Japanese"]["parent"] = "";
	$placeHolders_DIA_DA_CUT["Japanese"]["parent"] = "";
	$fieldLabels_DIA_DA_CUT["Japanese"]["wa_name"] = "和名";
	$fieldToolTips_DIA_DA_CUT["Japanese"]["wa_name"] = "";
	$placeHolders_DIA_DA_CUT["Japanese"]["wa_name"] = "";
	$fieldLabels_DIA_DA_CUT["Japanese"]["description"] = "説明";
	$fieldToolTips_DIA_DA_CUT["Japanese"]["description"] = "";
	$placeHolders_DIA_DA_CUT["Japanese"]["description"] = "";
	$fieldLabels_DIA_DA_CUT["Japanese"]["short_name"] = "略称";
	$fieldToolTips_DIA_DA_CUT["Japanese"]["short_name"] = "";
	$placeHolders_DIA_DA_CUT["Japanese"]["short_name"] = "";
	if (count($fieldToolTips_DIA_DA_CUT["Japanese"]))
		$tdata_DIA_DA_CUT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_DIA_DA_CUT[""] = array();
	$fieldToolTips_DIA_DA_CUT[""] = array();
	$placeHolders_DIA_DA_CUT[""] = array();
	$pageTitles_DIA_DA_CUT[""] = array();
	$fieldLabels_DIA_DA_CUT[""]["id"] = "Id";
	$fieldToolTips_DIA_DA_CUT[""]["id"] = "";
	$placeHolders_DIA_DA_CUT[""]["id"] = "";
	$fieldLabels_DIA_DA_CUT[""]["name"] = "Name";
	$fieldToolTips_DIA_DA_CUT[""]["name"] = "";
	$placeHolders_DIA_DA_CUT[""]["name"] = "";
	$fieldLabels_DIA_DA_CUT[""]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_CUT[""]["sort"] = "";
	$placeHolders_DIA_DA_CUT[""]["sort"] = "";
	$fieldLabels_DIA_DA_CUT[""]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_CUT[""]["parent"] = "";
	$placeHolders_DIA_DA_CUT[""]["parent"] = "";
	$fieldLabels_DIA_DA_CUT[""]["wa_name"] = "Wa Name";
	$fieldToolTips_DIA_DA_CUT[""]["wa_name"] = "";
	$placeHolders_DIA_DA_CUT[""]["wa_name"] = "";
	$fieldLabels_DIA_DA_CUT[""]["description"] = "Description";
	$fieldToolTips_DIA_DA_CUT[""]["description"] = "";
	$placeHolders_DIA_DA_CUT[""]["description"] = "";
	$fieldLabels_DIA_DA_CUT[""]["short_name"] = "Short Name";
	$fieldToolTips_DIA_DA_CUT[""]["short_name"] = "";
	$placeHolders_DIA_DA_CUT[""]["short_name"] = "";
	if (count($fieldToolTips_DIA_DA_CUT[""]))
		$tdata_DIA_DA_CUT[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabels_DIA_DA_CUT["English"] = array();
	$fieldToolTips_DIA_DA_CUT["English"] = array();
	$placeHolders_DIA_DA_CUT["English"] = array();
	$pageTitles_DIA_DA_CUT["English"] = array();
	$fieldLabels_DIA_DA_CUT["English"]["id"] = "Id";
	$fieldToolTips_DIA_DA_CUT["English"]["id"] = "";
	$placeHolders_DIA_DA_CUT["English"]["id"] = "";
	$fieldLabels_DIA_DA_CUT["English"]["name"] = "Name";
	$fieldToolTips_DIA_DA_CUT["English"]["name"] = "";
	$placeHolders_DIA_DA_CUT["English"]["name"] = "";
	$fieldLabels_DIA_DA_CUT["English"]["sort"] = "Sort";
	$fieldToolTips_DIA_DA_CUT["English"]["sort"] = "";
	$placeHolders_DIA_DA_CUT["English"]["sort"] = "";
	$fieldLabels_DIA_DA_CUT["English"]["parent"] = "Parent";
	$fieldToolTips_DIA_DA_CUT["English"]["parent"] = "";
	$placeHolders_DIA_DA_CUT["English"]["parent"] = "";
	$fieldLabels_DIA_DA_CUT["English"]["wa_name"] = "Wa Name";
	$fieldToolTips_DIA_DA_CUT["English"]["wa_name"] = "";
	$placeHolders_DIA_DA_CUT["English"]["wa_name"] = "";
	$fieldLabels_DIA_DA_CUT["English"]["description"] = "Description";
	$fieldToolTips_DIA_DA_CUT["English"]["description"] = "";
	$placeHolders_DIA_DA_CUT["English"]["description"] = "";
	$fieldLabels_DIA_DA_CUT["English"]["short_name"] = "Short Name";
	$fieldToolTips_DIA_DA_CUT["English"]["short_name"] = "";
	$placeHolders_DIA_DA_CUT["English"]["short_name"] = "";
	if (count($fieldToolTips_DIA_DA_CUT["English"]))
		$tdata_DIA_DA_CUT[".isUseToolTips"] = true;
}


	$tdata_DIA_DA_CUT[".NCSearch"] = true;



$tdata_DIA_DA_CUT[".shortTableName"] = "_DIA_DA_CUT";
$tdata_DIA_DA_CUT[".nSecOptions"] = 0;
$tdata_DIA_DA_CUT[".recsPerRowPrint"] = 1;
$tdata_DIA_DA_CUT[".mainTableOwnerID"] = "";
$tdata_DIA_DA_CUT[".moveNext"] = 1;
$tdata_DIA_DA_CUT[".entityType"] = 0;

$tdata_DIA_DA_CUT[".strOriginalTableName"] = "_DIA_DA_CUT";

	



$tdata_DIA_DA_CUT[".showAddInPopup"] = false;

$tdata_DIA_DA_CUT[".showEditInPopup"] = false;

$tdata_DIA_DA_CUT[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_DIA_DA_CUT[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_DIA_DA_CUT[".fieldsForRegister"] = array();

$tdata_DIA_DA_CUT[".listAjax"] = false;

	$tdata_DIA_DA_CUT[".audit"] = true;

	$tdata_DIA_DA_CUT[".locking"] = false;



$tdata_DIA_DA_CUT[".list"] = true;

$tdata_DIA_DA_CUT[".inlineEdit"] = true;


$tdata_DIA_DA_CUT[".reorderRecordsByHeader"] = true;



$tdata_DIA_DA_CUT[".inlineAdd"] = true;

$tdata_DIA_DA_CUT[".import"] = true;

$tdata_DIA_DA_CUT[".exportTo"] = true;


$tdata_DIA_DA_CUT[".delete"] = true;

$tdata_DIA_DA_CUT[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_DIA_DA_CUT[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_DIA_DA_CUT[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_DIA_DA_CUT[".searchSaving"] = false;
//

$tdata_DIA_DA_CUT[".showSearchPanel"] = true;
		$tdata_DIA_DA_CUT[".flexibleSearch"] = true;

$tdata_DIA_DA_CUT[".isUseAjaxSuggest"] = true;

$tdata_DIA_DA_CUT[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdata_DIA_DA_CUT[".ajaxCodeSnippetAdded"] = false;

$tdata_DIA_DA_CUT[".buttonsAdded"] = false;

$tdata_DIA_DA_CUT[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_DIA_DA_CUT[".isUseTimeForSearch"] = false;





$tdata_DIA_DA_CUT[".allSearchFields"] = array();
$tdata_DIA_DA_CUT[".filterFields"] = array();
$tdata_DIA_DA_CUT[".requiredSearchFields"] = array();

$tdata_DIA_DA_CUT[".allSearchFields"][] = "id";
	$tdata_DIA_DA_CUT[".allSearchFields"][] = "name";
	$tdata_DIA_DA_CUT[".allSearchFields"][] = "short_name";
	$tdata_DIA_DA_CUT[".allSearchFields"][] = "sort";
	$tdata_DIA_DA_CUT[".allSearchFields"][] = "wa_name";
	$tdata_DIA_DA_CUT[".allSearchFields"][] = "description";
	

$tdata_DIA_DA_CUT[".googleLikeFields"] = array();
$tdata_DIA_DA_CUT[".googleLikeFields"][] = "id";
$tdata_DIA_DA_CUT[".googleLikeFields"][] = "name";
$tdata_DIA_DA_CUT[".googleLikeFields"][] = "sort";
$tdata_DIA_DA_CUT[".googleLikeFields"][] = "parent";
$tdata_DIA_DA_CUT[".googleLikeFields"][] = "wa_name";
$tdata_DIA_DA_CUT[".googleLikeFields"][] = "description";
$tdata_DIA_DA_CUT[".googleLikeFields"][] = "short_name";


$tdata_DIA_DA_CUT[".advSearchFields"] = array();
$tdata_DIA_DA_CUT[".advSearchFields"][] = "id";
$tdata_DIA_DA_CUT[".advSearchFields"][] = "name";
$tdata_DIA_DA_CUT[".advSearchFields"][] = "short_name";
$tdata_DIA_DA_CUT[".advSearchFields"][] = "sort";
$tdata_DIA_DA_CUT[".advSearchFields"][] = "wa_name";
$tdata_DIA_DA_CUT[".advSearchFields"][] = "description";

$tdata_DIA_DA_CUT[".tableType"] = "list";

$tdata_DIA_DA_CUT[".printerPageOrientation"] = 0;
$tdata_DIA_DA_CUT[".nPrinterPageScale"] = 100;

$tdata_DIA_DA_CUT[".nPrinterSplitRecords"] = 40;

$tdata_DIA_DA_CUT[".nPrinterPDFSplitRecords"] = 40;



$tdata_DIA_DA_CUT[".geocodingEnabled"] = false;





$tdata_DIA_DA_CUT[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_DIA_DA_CUT[".pageSize"] = 20;

$tdata_DIA_DA_CUT[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_DIA_DA_CUT[".strOrderBy"] = $tstrOrderBy;

$tdata_DIA_DA_CUT[".orderindexes"] = array();

$tdata_DIA_DA_CUT[".sqlHead"] = "SELECT `id`,  	`name`,  	`sort`,  	`parent`,  	`wa_name`,  	`description`,  	`short_name`";
$tdata_DIA_DA_CUT[".sqlFrom"] = "FROM `_DIA_DA_CUT`";
$tdata_DIA_DA_CUT[".sqlWhereExpr"] = "";
$tdata_DIA_DA_CUT[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_DIA_DA_CUT[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_DIA_DA_CUT[".arrGroupsPerPage"] = $arrGPP;

$tdata_DIA_DA_CUT[".highlightSearchResults"] = true;

$tableKeys_DIA_DA_CUT = array();
$tableKeys_DIA_DA_CUT[] = "id";
$tdata_DIA_DA_CUT[".Keys"] = $tableKeys_DIA_DA_CUT;

$tdata_DIA_DA_CUT[".listFields"] = array();
$tdata_DIA_DA_CUT[".listFields"][] = "id";
$tdata_DIA_DA_CUT[".listFields"][] = "name";
$tdata_DIA_DA_CUT[".listFields"][] = "short_name";
$tdata_DIA_DA_CUT[".listFields"][] = "sort";
$tdata_DIA_DA_CUT[".listFields"][] = "wa_name";
$tdata_DIA_DA_CUT[".listFields"][] = "description";

$tdata_DIA_DA_CUT[".hideMobileList"] = array();


$tdata_DIA_DA_CUT[".viewFields"] = array();

$tdata_DIA_DA_CUT[".addFields"] = array();

$tdata_DIA_DA_CUT[".masterListFields"] = array();
$tdata_DIA_DA_CUT[".masterListFields"][] = "parent";
$tdata_DIA_DA_CUT[".masterListFields"][] = "id";
$tdata_DIA_DA_CUT[".masterListFields"][] = "name";
$tdata_DIA_DA_CUT[".masterListFields"][] = "short_name";
$tdata_DIA_DA_CUT[".masterListFields"][] = "sort";
$tdata_DIA_DA_CUT[".masterListFields"][] = "wa_name";
$tdata_DIA_DA_CUT[".masterListFields"][] = "description";

$tdata_DIA_DA_CUT[".inlineAddFields"] = array();
$tdata_DIA_DA_CUT[".inlineAddFields"][] = "name";
$tdata_DIA_DA_CUT[".inlineAddFields"][] = "short_name";
$tdata_DIA_DA_CUT[".inlineAddFields"][] = "sort";
$tdata_DIA_DA_CUT[".inlineAddFields"][] = "wa_name";
$tdata_DIA_DA_CUT[".inlineAddFields"][] = "description";

$tdata_DIA_DA_CUT[".editFields"] = array();

$tdata_DIA_DA_CUT[".inlineEditFields"] = array();
$tdata_DIA_DA_CUT[".inlineEditFields"][] = "name";
$tdata_DIA_DA_CUT[".inlineEditFields"][] = "short_name";
$tdata_DIA_DA_CUT[".inlineEditFields"][] = "sort";
$tdata_DIA_DA_CUT[".inlineEditFields"][] = "wa_name";
$tdata_DIA_DA_CUT[".inlineEditFields"][] = "description";

$tdata_DIA_DA_CUT[".updateSelectedFields"] = array();


$tdata_DIA_DA_CUT[".exportFields"] = array();
$tdata_DIA_DA_CUT[".exportFields"][] = "id";
$tdata_DIA_DA_CUT[".exportFields"][] = "name";
$tdata_DIA_DA_CUT[".exportFields"][] = "short_name";
$tdata_DIA_DA_CUT[".exportFields"][] = "sort";
$tdata_DIA_DA_CUT[".exportFields"][] = "wa_name";
$tdata_DIA_DA_CUT[".exportFields"][] = "description";

$tdata_DIA_DA_CUT[".importFields"] = array();
$tdata_DIA_DA_CUT[".importFields"][] = "id";
$tdata_DIA_DA_CUT[".importFields"][] = "name";
$tdata_DIA_DA_CUT[".importFields"][] = "sort";
$tdata_DIA_DA_CUT[".importFields"][] = "wa_name";
$tdata_DIA_DA_CUT[".importFields"][] = "description";
$tdata_DIA_DA_CUT[".importFields"][] = "short_name";

$tdata_DIA_DA_CUT[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "_DIA_DA_CUT";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_CUT","id");
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




	$tdata_DIA_DA_CUT["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "_DIA_DA_CUT";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_CUT","name");
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




	$tdata_DIA_DA_CUT["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "_DIA_DA_CUT";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_CUT","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
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




	$tdata_DIA_DA_CUT["sort"] = $fdata;
//	parent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "parent";
	$fdata["GoodName"] = "parent";
	$fdata["ownerTable"] = "_DIA_DA_CUT";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_CUT","parent");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "parent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`parent`";

	
	
			
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








	$tdata_DIA_DA_CUT["parent"] = $fdata;
//	wa_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "wa_name";
	$fdata["GoodName"] = "wa_name";
	$fdata["ownerTable"] = "_DIA_DA_CUT";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_CUT","wa_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdata_DIA_DA_CUT["wa_name"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "_DIA_DA_CUT";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_CUT","description");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`description`";

	
	
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




	$tdata_DIA_DA_CUT["description"] = $fdata;
//	short_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "short_name";
	$fdata["GoodName"] = "short_name";
	$fdata["ownerTable"] = "_DIA_DA_CUT";
	$fdata["Label"] = GetFieldLabel("_DIA_DA_CUT","short_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "short_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`short_name`";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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




	$tdata_DIA_DA_CUT["short_name"] = $fdata;


$tables_data["_DIA_DA_CUT"]=&$tdata_DIA_DA_CUT;
$field_labels["_DIA_DA_CUT"] = &$fieldLabels_DIA_DA_CUT;
$fieldToolTips["_DIA_DA_CUT"] = &$fieldToolTips_DIA_DA_CUT;
$placeHolders["_DIA_DA_CUT"] = &$placeHolders_DIA_DA_CUT;
$page_titles["_DIA_DA_CUT"] = &$pageTitles_DIA_DA_CUT;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_DIA_DA_CUT"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_DIA_DA_CUT"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__DIA_DA_CUT()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`sort`,  	`parent`,  	`wa_name`,  	`description`,  	`short_name`";
$proto0["m_strFrom"] = "FROM `_DIA_DA_CUT`";
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
	"m_strTable" => "_DIA_DA_CUT",
	"m_srcTableName" => "_DIA_DA_CUT"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "_DIA_DA_CUT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "_DIA_DA_CUT",
	"m_srcTableName" => "_DIA_DA_CUT"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "_DIA_DA_CUT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "_DIA_DA_CUT",
	"m_srcTableName" => "_DIA_DA_CUT"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "_DIA_DA_CUT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "parent",
	"m_strTable" => "_DIA_DA_CUT",
	"m_srcTableName" => "_DIA_DA_CUT"
));

$proto12["m_sql"] = "`parent`";
$proto12["m_srcTableName"] = "_DIA_DA_CUT";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "wa_name",
	"m_strTable" => "_DIA_DA_CUT",
	"m_srcTableName" => "_DIA_DA_CUT"
));

$proto14["m_sql"] = "`wa_name`";
$proto14["m_srcTableName"] = "_DIA_DA_CUT";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "_DIA_DA_CUT",
	"m_srcTableName" => "_DIA_DA_CUT"
));

$proto16["m_sql"] = "`description`";
$proto16["m_srcTableName"] = "_DIA_DA_CUT";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "short_name",
	"m_strTable" => "_DIA_DA_CUT",
	"m_srcTableName" => "_DIA_DA_CUT"
));

$proto18["m_sql"] = "`short_name`";
$proto18["m_srcTableName"] = "_DIA_DA_CUT";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "_DIA_DA_CUT";
$proto21["m_srcTableName"] = "_DIA_DA_CUT";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "sort";
$proto21["m_columns"][] = "parent";
$proto21["m_columns"][] = "wa_name";
$proto21["m_columns"][] = "description";
$proto21["m_columns"][] = "short_name";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`_DIA_DA_CUT`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "_DIA_DA_CUT";
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
$proto0["m_srcTableName"]="_DIA_DA_CUT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__DIA_DA_CUT = createSqlQuery__DIA_DA_CUT();


	
		;

							

$tdata_DIA_DA_CUT[".sqlquery"] = $queryData__DIA_DA_CUT;

$tableEvents["_DIA_DA_CUT"] = new eventsBase;
$tdata_DIA_DA_CUT[".hasEvents"] = false;

?>