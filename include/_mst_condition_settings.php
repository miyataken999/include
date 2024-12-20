<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_mst_condition = array();
	$tdata_mst_condition[".truncateText"] = true;
	$tdata_mst_condition[".NumberOfChars"] = 80;
	$tdata_mst_condition[".ShortName"] = "_mst_condition";
	$tdata_mst_condition[".OwnerID"] = "";
	$tdata_mst_condition[".OriginalTable"] = "_mst_condition";

//	field labels
$fieldLabels_mst_condition = array();
$fieldToolTips_mst_condition = array();
$pageTitles_mst_condition = array();
$placeHolders_mst_condition = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_mst_condition["Japanese"] = array();
	$fieldToolTips_mst_condition["Japanese"] = array();
	$placeHolders_mst_condition["Japanese"] = array();
	$pageTitles_mst_condition["Japanese"] = array();
	$fieldLabels_mst_condition["Japanese"]["id"] = "Id";
	$fieldToolTips_mst_condition["Japanese"]["id"] = "";
	$placeHolders_mst_condition["Japanese"]["id"] = "";
	$fieldLabels_mst_condition["Japanese"]["condition_name"] = "表示名";
	$fieldToolTips_mst_condition["Japanese"]["condition_name"] = "";
	$placeHolders_mst_condition["Japanese"]["condition_name"] = "";
	$fieldLabels_mst_condition["Japanese"]["sort"] = "ソート";
	$fieldToolTips_mst_condition["Japanese"]["sort"] = "";
	$placeHolders_mst_condition["Japanese"]["sort"] = "";
	$fieldLabels_mst_condition["Japanese"]["create_at"] = "作成日";
	$fieldToolTips_mst_condition["Japanese"]["create_at"] = "";
	$placeHolders_mst_condition["Japanese"]["create_at"] = "";
	$fieldLabels_mst_condition["Japanese"]["update_at"] = "更新日";
	$fieldToolTips_mst_condition["Japanese"]["update_at"] = "";
	$placeHolders_mst_condition["Japanese"]["update_at"] = "";
	$fieldLabels_mst_condition["Japanese"]["create_by"] = "作成者";
	$fieldToolTips_mst_condition["Japanese"]["create_by"] = "";
	$placeHolders_mst_condition["Japanese"]["create_by"] = "";
	$fieldLabels_mst_condition["Japanese"]["update_by"] = "更新者";
	$fieldToolTips_mst_condition["Japanese"]["update_by"] = "";
	$placeHolders_mst_condition["Japanese"]["update_by"] = "";
	if (count($fieldToolTips_mst_condition["Japanese"]))
		$tdata_mst_condition[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_mst_condition[""] = array();
	$fieldToolTips_mst_condition[""] = array();
	$placeHolders_mst_condition[""] = array();
	$pageTitles_mst_condition[""] = array();
	$fieldLabels_mst_condition[""]["id"] = "Id";
	$fieldToolTips_mst_condition[""]["id"] = "";
	$placeHolders_mst_condition[""]["id"] = "";
	$fieldLabels_mst_condition[""]["condition_name"] = "Condition Name";
	$fieldToolTips_mst_condition[""]["condition_name"] = "";
	$placeHolders_mst_condition[""]["condition_name"] = "";
	$fieldLabels_mst_condition[""]["sort"] = "Sort";
	$fieldToolTips_mst_condition[""]["sort"] = "";
	$placeHolders_mst_condition[""]["sort"] = "";
	$fieldLabels_mst_condition[""]["create_at"] = "Create At";
	$fieldToolTips_mst_condition[""]["create_at"] = "";
	$placeHolders_mst_condition[""]["create_at"] = "";
	$fieldLabels_mst_condition[""]["update_at"] = "Update At";
	$fieldToolTips_mst_condition[""]["update_at"] = "";
	$placeHolders_mst_condition[""]["update_at"] = "";
	$fieldLabels_mst_condition[""]["create_by"] = "Create By";
	$fieldToolTips_mst_condition[""]["create_by"] = "";
	$placeHolders_mst_condition[""]["create_by"] = "";
	$fieldLabels_mst_condition[""]["update_by"] = "Update By";
	$fieldToolTips_mst_condition[""]["update_by"] = "";
	$placeHolders_mst_condition[""]["update_by"] = "";
	if (count($fieldToolTips_mst_condition[""]))
		$tdata_mst_condition[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabels_mst_condition["English"] = array();
	$fieldToolTips_mst_condition["English"] = array();
	$placeHolders_mst_condition["English"] = array();
	$pageTitles_mst_condition["English"] = array();
	$fieldLabels_mst_condition["English"]["id"] = "Id";
	$fieldToolTips_mst_condition["English"]["id"] = "";
	$placeHolders_mst_condition["English"]["id"] = "";
	$fieldLabels_mst_condition["English"]["condition_name"] = "Condition Name";
	$fieldToolTips_mst_condition["English"]["condition_name"] = "";
	$placeHolders_mst_condition["English"]["condition_name"] = "";
	$fieldLabels_mst_condition["English"]["sort"] = "Sort";
	$fieldToolTips_mst_condition["English"]["sort"] = "";
	$placeHolders_mst_condition["English"]["sort"] = "";
	$fieldLabels_mst_condition["English"]["create_at"] = "Create At";
	$fieldToolTips_mst_condition["English"]["create_at"] = "";
	$placeHolders_mst_condition["English"]["create_at"] = "";
	$fieldLabels_mst_condition["English"]["update_at"] = "Update At";
	$fieldToolTips_mst_condition["English"]["update_at"] = "";
	$placeHolders_mst_condition["English"]["update_at"] = "";
	$fieldLabels_mst_condition["English"]["create_by"] = "Create By";
	$fieldToolTips_mst_condition["English"]["create_by"] = "";
	$placeHolders_mst_condition["English"]["create_by"] = "";
	$fieldLabels_mst_condition["English"]["update_by"] = "Update By";
	$fieldToolTips_mst_condition["English"]["update_by"] = "";
	$placeHolders_mst_condition["English"]["update_by"] = "";
	if (count($fieldToolTips_mst_condition["English"]))
		$tdata_mst_condition[".isUseToolTips"] = true;
}


	$tdata_mst_condition[".NCSearch"] = true;



$tdata_mst_condition[".shortTableName"] = "_mst_condition";
$tdata_mst_condition[".nSecOptions"] = 0;
$tdata_mst_condition[".recsPerRowPrint"] = 1;
$tdata_mst_condition[".mainTableOwnerID"] = "";
$tdata_mst_condition[".moveNext"] = 1;
$tdata_mst_condition[".entityType"] = 0;

$tdata_mst_condition[".strOriginalTableName"] = "_mst_condition";

	



$tdata_mst_condition[".showAddInPopup"] = false;

$tdata_mst_condition[".showEditInPopup"] = false;

$tdata_mst_condition[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_mst_condition[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_mst_condition[".fieldsForRegister"] = array();

$tdata_mst_condition[".listAjax"] = false;

	$tdata_mst_condition[".audit"] = true;

	$tdata_mst_condition[".locking"] = false;



$tdata_mst_condition[".list"] = true;

$tdata_mst_condition[".inlineEdit"] = true;


$tdata_mst_condition[".reorderRecordsByHeader"] = true;



$tdata_mst_condition[".inlineAdd"] = true;

$tdata_mst_condition[".import"] = true;

$tdata_mst_condition[".exportTo"] = true;


$tdata_mst_condition[".delete"] = true;

$tdata_mst_condition[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_mst_condition[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_mst_condition[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_mst_condition[".searchSaving"] = false;
//

$tdata_mst_condition[".showSearchPanel"] = true;
		$tdata_mst_condition[".flexibleSearch"] = true;

$tdata_mst_condition[".isUseAjaxSuggest"] = true;

$tdata_mst_condition[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdata_mst_condition[".ajaxCodeSnippetAdded"] = false;

$tdata_mst_condition[".buttonsAdded"] = false;

$tdata_mst_condition[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_mst_condition[".isUseTimeForSearch"] = false;





$tdata_mst_condition[".allSearchFields"] = array();
$tdata_mst_condition[".filterFields"] = array();
$tdata_mst_condition[".requiredSearchFields"] = array();

$tdata_mst_condition[".allSearchFields"][] = "id";
	$tdata_mst_condition[".allSearchFields"][] = "condition_name";
	$tdata_mst_condition[".allSearchFields"][] = "sort";
	$tdata_mst_condition[".allSearchFields"][] = "create_at";
	$tdata_mst_condition[".allSearchFields"][] = "create_by";
	$tdata_mst_condition[".allSearchFields"][] = "update_at";
	$tdata_mst_condition[".allSearchFields"][] = "update_by";
	

$tdata_mst_condition[".googleLikeFields"] = array();
$tdata_mst_condition[".googleLikeFields"][] = "id";
$tdata_mst_condition[".googleLikeFields"][] = "condition_name";
$tdata_mst_condition[".googleLikeFields"][] = "sort";
$tdata_mst_condition[".googleLikeFields"][] = "create_at";
$tdata_mst_condition[".googleLikeFields"][] = "update_at";
$tdata_mst_condition[".googleLikeFields"][] = "create_by";
$tdata_mst_condition[".googleLikeFields"][] = "update_by";


$tdata_mst_condition[".advSearchFields"] = array();
$tdata_mst_condition[".advSearchFields"][] = "id";
$tdata_mst_condition[".advSearchFields"][] = "condition_name";
$tdata_mst_condition[".advSearchFields"][] = "sort";
$tdata_mst_condition[".advSearchFields"][] = "create_at";
$tdata_mst_condition[".advSearchFields"][] = "create_by";
$tdata_mst_condition[".advSearchFields"][] = "update_at";
$tdata_mst_condition[".advSearchFields"][] = "update_by";

$tdata_mst_condition[".tableType"] = "list";

$tdata_mst_condition[".printerPageOrientation"] = 0;
$tdata_mst_condition[".nPrinterPageScale"] = 100;

$tdata_mst_condition[".nPrinterSplitRecords"] = 40;

$tdata_mst_condition[".nPrinterPDFSplitRecords"] = 40;



$tdata_mst_condition[".geocodingEnabled"] = false;





$tdata_mst_condition[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_mst_condition[".pageSize"] = 20;

$tdata_mst_condition[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_mst_condition[".strOrderBy"] = $tstrOrderBy;

$tdata_mst_condition[".orderindexes"] = array();
$tdata_mst_condition[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`sort`");

$tdata_mst_condition[".sqlHead"] = "SELECT `id`,  `condition_name`,  `sort`,  `create_at`,  `update_at`,  `create_by`,  `update_by`";
$tdata_mst_condition[".sqlFrom"] = "FROM `_mst_condition`";
$tdata_mst_condition[".sqlWhereExpr"] = "";
$tdata_mst_condition[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_mst_condition[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_mst_condition[".arrGroupsPerPage"] = $arrGPP;

$tdata_mst_condition[".highlightSearchResults"] = true;

$tableKeys_mst_condition = array();
$tableKeys_mst_condition[] = "id";
$tdata_mst_condition[".Keys"] = $tableKeys_mst_condition;

$tdata_mst_condition[".listFields"] = array();
$tdata_mst_condition[".listFields"][] = "id";
$tdata_mst_condition[".listFields"][] = "condition_name";
$tdata_mst_condition[".listFields"][] = "sort";
$tdata_mst_condition[".listFields"][] = "create_at";
$tdata_mst_condition[".listFields"][] = "create_by";
$tdata_mst_condition[".listFields"][] = "update_at";
$tdata_mst_condition[".listFields"][] = "update_by";

$tdata_mst_condition[".hideMobileList"] = array();


$tdata_mst_condition[".viewFields"] = array();

$tdata_mst_condition[".addFields"] = array();

$tdata_mst_condition[".masterListFields"] = array();
$tdata_mst_condition[".masterListFields"][] = "id";
$tdata_mst_condition[".masterListFields"][] = "condition_name";
$tdata_mst_condition[".masterListFields"][] = "sort";
$tdata_mst_condition[".masterListFields"][] = "create_at";
$tdata_mst_condition[".masterListFields"][] = "create_by";
$tdata_mst_condition[".masterListFields"][] = "update_at";
$tdata_mst_condition[".masterListFields"][] = "update_by";

$tdata_mst_condition[".inlineAddFields"] = array();
$tdata_mst_condition[".inlineAddFields"][] = "condition_name";
$tdata_mst_condition[".inlineAddFields"][] = "sort";

$tdata_mst_condition[".editFields"] = array();

$tdata_mst_condition[".inlineEditFields"] = array();
$tdata_mst_condition[".inlineEditFields"][] = "condition_name";
$tdata_mst_condition[".inlineEditFields"][] = "sort";

$tdata_mst_condition[".updateSelectedFields"] = array();


$tdata_mst_condition[".exportFields"] = array();
$tdata_mst_condition[".exportFields"][] = "id";
$tdata_mst_condition[".exportFields"][] = "condition_name";
$tdata_mst_condition[".exportFields"][] = "sort";
$tdata_mst_condition[".exportFields"][] = "create_at";
$tdata_mst_condition[".exportFields"][] = "create_by";
$tdata_mst_condition[".exportFields"][] = "update_at";
$tdata_mst_condition[".exportFields"][] = "update_by";

$tdata_mst_condition[".importFields"] = array();
$tdata_mst_condition[".importFields"][] = "id";
$tdata_mst_condition[".importFields"][] = "condition_name";
$tdata_mst_condition[".importFields"][] = "sort";

$tdata_mst_condition[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "_mst_condition";
	$fdata["Label"] = GetFieldLabel("_mst_condition","id");
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




	$tdata_mst_condition["id"] = $fdata;
//	condition_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "condition_name";
	$fdata["GoodName"] = "condition_name";
	$fdata["ownerTable"] = "_mst_condition";
	$fdata["Label"] = GetFieldLabel("_mst_condition","condition_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "condition_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`condition_name`";

	
	
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




	$tdata_mst_condition["condition_name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "_mst_condition";
	$fdata["Label"] = GetFieldLabel("_mst_condition","sort");
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




	$tdata_mst_condition["sort"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "_mst_condition";
	$fdata["Label"] = GetFieldLabel("_mst_condition","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdata_mst_condition["create_at"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "_mst_condition";
	$fdata["Label"] = GetFieldLabel("_mst_condition","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdata_mst_condition["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "_mst_condition";
	$fdata["Label"] = GetFieldLabel("_mst_condition","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdata_mst_condition["create_by"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "_mst_condition";
	$fdata["Label"] = GetFieldLabel("_mst_condition","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdata_mst_condition["update_by"] = $fdata;


$tables_data["_mst_condition"]=&$tdata_mst_condition;
$field_labels["_mst_condition"] = &$fieldLabels_mst_condition;
$fieldToolTips["_mst_condition"] = &$fieldToolTips_mst_condition;
$placeHolders["_mst_condition"] = &$placeHolders_mst_condition;
$page_titles["_mst_condition"] = &$pageTitles_mst_condition;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_mst_condition"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_mst_condition"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__mst_condition()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `condition_name`,  `sort`,  `create_at`,  `update_at`,  `create_by`,  `update_by`";
$proto0["m_strFrom"] = "FROM `_mst_condition`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `sort`";
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
	"m_strTable" => "_mst_condition",
	"m_srcTableName" => "_mst_condition"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "_mst_condition";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "condition_name",
	"m_strTable" => "_mst_condition",
	"m_srcTableName" => "_mst_condition"
));

$proto8["m_sql"] = "`condition_name`";
$proto8["m_srcTableName"] = "_mst_condition";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "_mst_condition",
	"m_srcTableName" => "_mst_condition"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "_mst_condition";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "_mst_condition",
	"m_srcTableName" => "_mst_condition"
));

$proto12["m_sql"] = "`create_at`";
$proto12["m_srcTableName"] = "_mst_condition";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "_mst_condition",
	"m_srcTableName" => "_mst_condition"
));

$proto14["m_sql"] = "`update_at`";
$proto14["m_srcTableName"] = "_mst_condition";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "_mst_condition",
	"m_srcTableName" => "_mst_condition"
));

$proto16["m_sql"] = "`create_by`";
$proto16["m_srcTableName"] = "_mst_condition";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "_mst_condition",
	"m_srcTableName" => "_mst_condition"
));

$proto18["m_sql"] = "`update_by`";
$proto18["m_srcTableName"] = "_mst_condition";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "_mst_condition";
$proto21["m_srcTableName"] = "_mst_condition";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "condition_name";
$proto21["m_columns"][] = "sort";
$proto21["m_columns"][] = "create_at";
$proto21["m_columns"][] = "update_at";
$proto21["m_columns"][] = "create_by";
$proto21["m_columns"][] = "update_by";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`_mst_condition`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "_mst_condition";
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
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "_mst_condition",
	"m_srcTableName" => "_mst_condition"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="_mst_condition";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__mst_condition = createSqlQuery__mst_condition();


	
		;

							

$tdata_mst_condition[".sqlquery"] = $queryData__mst_condition;

include_once(getabspath("include/_mst_condition_events.php"));
$tableEvents["_mst_condition"] = new eventclass__mst_condition;
$tdata_mst_condition[".hasEvents"] = true;

?>