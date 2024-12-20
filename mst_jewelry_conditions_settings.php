<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_jewelry_conditions = array();
	$tdatamst_jewelry_conditions[".truncateText"] = true;
	$tdatamst_jewelry_conditions[".NumberOfChars"] = 80;
	$tdatamst_jewelry_conditions[".ShortName"] = "mst_jewelry_conditions";
	$tdatamst_jewelry_conditions[".OwnerID"] = "";
	$tdatamst_jewelry_conditions[".OriginalTable"] = "mst_jewelry_conditions";

//	field labels
$fieldLabelsmst_jewelry_conditions = array();
$fieldToolTipsmst_jewelry_conditions = array();
$pageTitlesmst_jewelry_conditions = array();
$placeHoldersmst_jewelry_conditions = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_jewelry_conditions["Japanese"] = array();
	$fieldToolTipsmst_jewelry_conditions["Japanese"] = array();
	$placeHoldersmst_jewelry_conditions["Japanese"] = array();
	$pageTitlesmst_jewelry_conditions["Japanese"] = array();
	$fieldLabelsmst_jewelry_conditions["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_jewelry_conditions["Japanese"]["id"] = "";
	$placeHoldersmst_jewelry_conditions["Japanese"]["id"] = "";
	$fieldLabelsmst_jewelry_conditions["Japanese"]["name"] = "表示名";
	$fieldToolTipsmst_jewelry_conditions["Japanese"]["name"] = "";
	$placeHoldersmst_jewelry_conditions["Japanese"]["name"] = "";
	$fieldLabelsmst_jewelry_conditions["Japanese"]["sort"] = "ソート";
	$fieldToolTipsmst_jewelry_conditions["Japanese"]["sort"] = "";
	$placeHoldersmst_jewelry_conditions["Japanese"]["sort"] = "";
	$fieldLabelsmst_jewelry_conditions["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsmst_jewelry_conditions["Japanese"]["create_at"] = "";
	$placeHoldersmst_jewelry_conditions["Japanese"]["create_at"] = "";
	$fieldLabelsmst_jewelry_conditions["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_jewelry_conditions["Japanese"]["update_at"] = "";
	$placeHoldersmst_jewelry_conditions["Japanese"]["update_at"] = "";
	$fieldLabelsmst_jewelry_conditions["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsmst_jewelry_conditions["Japanese"]["create_by"] = "";
	$placeHoldersmst_jewelry_conditions["Japanese"]["create_by"] = "";
	$fieldLabelsmst_jewelry_conditions["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_jewelry_conditions["Japanese"]["update_by"] = "";
	$placeHoldersmst_jewelry_conditions["Japanese"]["update_by"] = "";
	if (count($fieldToolTipsmst_jewelry_conditions["Japanese"]))
		$tdatamst_jewelry_conditions[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_jewelry_conditions[""] = array();
	$fieldToolTipsmst_jewelry_conditions[""] = array();
	$placeHoldersmst_jewelry_conditions[""] = array();
	$pageTitlesmst_jewelry_conditions[""] = array();
	$fieldLabelsmst_jewelry_conditions[""]["id"] = "Id";
	$fieldToolTipsmst_jewelry_conditions[""]["id"] = "";
	$placeHoldersmst_jewelry_conditions[""]["id"] = "";
	$fieldLabelsmst_jewelry_conditions[""]["name"] = "Name";
	$fieldToolTipsmst_jewelry_conditions[""]["name"] = "";
	$placeHoldersmst_jewelry_conditions[""]["name"] = "";
	$fieldLabelsmst_jewelry_conditions[""]["sort"] = "Sort";
	$fieldToolTipsmst_jewelry_conditions[""]["sort"] = "";
	$placeHoldersmst_jewelry_conditions[""]["sort"] = "";
	$fieldLabelsmst_jewelry_conditions[""]["create_at"] = "Create At";
	$fieldToolTipsmst_jewelry_conditions[""]["create_at"] = "";
	$placeHoldersmst_jewelry_conditions[""]["create_at"] = "";
	$fieldLabelsmst_jewelry_conditions[""]["update_at"] = "Update At";
	$fieldToolTipsmst_jewelry_conditions[""]["update_at"] = "";
	$placeHoldersmst_jewelry_conditions[""]["update_at"] = "";
	$fieldLabelsmst_jewelry_conditions[""]["create_by"] = "Create By";
	$fieldToolTipsmst_jewelry_conditions[""]["create_by"] = "";
	$placeHoldersmst_jewelry_conditions[""]["create_by"] = "";
	$fieldLabelsmst_jewelry_conditions[""]["update_by"] = "Update By";
	$fieldToolTipsmst_jewelry_conditions[""]["update_by"] = "";
	$placeHoldersmst_jewelry_conditions[""]["update_by"] = "";
	if (count($fieldToolTipsmst_jewelry_conditions[""]))
		$tdatamst_jewelry_conditions[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_jewelry_conditions["English"] = array();
	$fieldToolTipsmst_jewelry_conditions["English"] = array();
	$placeHoldersmst_jewelry_conditions["English"] = array();
	$pageTitlesmst_jewelry_conditions["English"] = array();
	$fieldLabelsmst_jewelry_conditions["English"]["id"] = "Id";
	$fieldToolTipsmst_jewelry_conditions["English"]["id"] = "";
	$placeHoldersmst_jewelry_conditions["English"]["id"] = "";
	$fieldLabelsmst_jewelry_conditions["English"]["name"] = "Name";
	$fieldToolTipsmst_jewelry_conditions["English"]["name"] = "";
	$placeHoldersmst_jewelry_conditions["English"]["name"] = "";
	$fieldLabelsmst_jewelry_conditions["English"]["sort"] = "Sort";
	$fieldToolTipsmst_jewelry_conditions["English"]["sort"] = "";
	$placeHoldersmst_jewelry_conditions["English"]["sort"] = "";
	$fieldLabelsmst_jewelry_conditions["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_jewelry_conditions["English"]["create_at"] = "";
	$placeHoldersmst_jewelry_conditions["English"]["create_at"] = "";
	$fieldLabelsmst_jewelry_conditions["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_jewelry_conditions["English"]["update_at"] = "";
	$placeHoldersmst_jewelry_conditions["English"]["update_at"] = "";
	$fieldLabelsmst_jewelry_conditions["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_jewelry_conditions["English"]["create_by"] = "";
	$placeHoldersmst_jewelry_conditions["English"]["create_by"] = "";
	$fieldLabelsmst_jewelry_conditions["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_jewelry_conditions["English"]["update_by"] = "";
	$placeHoldersmst_jewelry_conditions["English"]["update_by"] = "";
	if (count($fieldToolTipsmst_jewelry_conditions["English"]))
		$tdatamst_jewelry_conditions[".isUseToolTips"] = true;
}


	$tdatamst_jewelry_conditions[".NCSearch"] = true;



$tdatamst_jewelry_conditions[".shortTableName"] = "mst_jewelry_conditions";
$tdatamst_jewelry_conditions[".nSecOptions"] = 0;
$tdatamst_jewelry_conditions[".recsPerRowPrint"] = 1;
$tdatamst_jewelry_conditions[".mainTableOwnerID"] = "";
$tdatamst_jewelry_conditions[".moveNext"] = 1;
$tdatamst_jewelry_conditions[".entityType"] = 0;

$tdatamst_jewelry_conditions[".strOriginalTableName"] = "mst_jewelry_conditions";

	



$tdatamst_jewelry_conditions[".showAddInPopup"] = false;

$tdatamst_jewelry_conditions[".showEditInPopup"] = false;

$tdatamst_jewelry_conditions[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_jewelry_conditions[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_jewelry_conditions[".fieldsForRegister"] = array();

$tdatamst_jewelry_conditions[".listAjax"] = false;

	$tdatamst_jewelry_conditions[".audit"] = true;

	$tdatamst_jewelry_conditions[".locking"] = false;



$tdatamst_jewelry_conditions[".list"] = true;

$tdatamst_jewelry_conditions[".inlineEdit"] = true;


$tdatamst_jewelry_conditions[".reorderRecordsByHeader"] = true;



$tdatamst_jewelry_conditions[".inlineAdd"] = true;

$tdatamst_jewelry_conditions[".import"] = true;

$tdatamst_jewelry_conditions[".exportTo"] = true;


$tdatamst_jewelry_conditions[".delete"] = true;

$tdatamst_jewelry_conditions[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_jewelry_conditions[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_jewelry_conditions[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_jewelry_conditions[".searchSaving"] = false;
//

$tdatamst_jewelry_conditions[".showSearchPanel"] = true;
		$tdatamst_jewelry_conditions[".flexibleSearch"] = true;

$tdatamst_jewelry_conditions[".isUseAjaxSuggest"] = true;

$tdatamst_jewelry_conditions[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_jewelry_conditions[".ajaxCodeSnippetAdded"] = false;

$tdatamst_jewelry_conditions[".buttonsAdded"] = false;

$tdatamst_jewelry_conditions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_jewelry_conditions[".isUseTimeForSearch"] = false;





$tdatamst_jewelry_conditions[".allSearchFields"] = array();
$tdatamst_jewelry_conditions[".filterFields"] = array();
$tdatamst_jewelry_conditions[".requiredSearchFields"] = array();

$tdatamst_jewelry_conditions[".allSearchFields"][] = "id";
	$tdatamst_jewelry_conditions[".allSearchFields"][] = "name";
	$tdatamst_jewelry_conditions[".allSearchFields"][] = "sort";
	$tdatamst_jewelry_conditions[".allSearchFields"][] = "create_at";
	$tdatamst_jewelry_conditions[".allSearchFields"][] = "create_by";
	$tdatamst_jewelry_conditions[".allSearchFields"][] = "update_at";
	$tdatamst_jewelry_conditions[".allSearchFields"][] = "update_by";
	

$tdatamst_jewelry_conditions[".googleLikeFields"] = array();
$tdatamst_jewelry_conditions[".googleLikeFields"][] = "id";
$tdatamst_jewelry_conditions[".googleLikeFields"][] = "name";
$tdatamst_jewelry_conditions[".googleLikeFields"][] = "sort";
$tdatamst_jewelry_conditions[".googleLikeFields"][] = "create_at";
$tdatamst_jewelry_conditions[".googleLikeFields"][] = "update_at";
$tdatamst_jewelry_conditions[".googleLikeFields"][] = "create_by";
$tdatamst_jewelry_conditions[".googleLikeFields"][] = "update_by";


$tdatamst_jewelry_conditions[".advSearchFields"] = array();
$tdatamst_jewelry_conditions[".advSearchFields"][] = "id";
$tdatamst_jewelry_conditions[".advSearchFields"][] = "name";
$tdatamst_jewelry_conditions[".advSearchFields"][] = "sort";
$tdatamst_jewelry_conditions[".advSearchFields"][] = "create_at";
$tdatamst_jewelry_conditions[".advSearchFields"][] = "create_by";
$tdatamst_jewelry_conditions[".advSearchFields"][] = "update_at";
$tdatamst_jewelry_conditions[".advSearchFields"][] = "update_by";

$tdatamst_jewelry_conditions[".tableType"] = "list";

$tdatamst_jewelry_conditions[".printerPageOrientation"] = 0;
$tdatamst_jewelry_conditions[".nPrinterPageScale"] = 100;

$tdatamst_jewelry_conditions[".nPrinterSplitRecords"] = 40;

$tdatamst_jewelry_conditions[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_jewelry_conditions[".geocodingEnabled"] = false;





$tdatamst_jewelry_conditions[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_jewelry_conditions[".pageSize"] = 20;

$tdatamst_jewelry_conditions[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_jewelry_conditions[".strOrderBy"] = $tstrOrderBy;

$tdatamst_jewelry_conditions[".orderindexes"] = array();
$tdatamst_jewelry_conditions[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_jewelry_conditions[".sqlHead"] = "SELECT `id`,  `name`,  `sort`,  `create_at`,  `update_at`,  `create_by`,  `update_by`";
$tdatamst_jewelry_conditions[".sqlFrom"] = "FROM `mst_jewelry_conditions`";
$tdatamst_jewelry_conditions[".sqlWhereExpr"] = "";
$tdatamst_jewelry_conditions[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_jewelry_conditions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_jewelry_conditions[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_jewelry_conditions[".highlightSearchResults"] = true;

$tableKeysmst_jewelry_conditions = array();
$tableKeysmst_jewelry_conditions[] = "id";
$tdatamst_jewelry_conditions[".Keys"] = $tableKeysmst_jewelry_conditions;

$tdatamst_jewelry_conditions[".listFields"] = array();
$tdatamst_jewelry_conditions[".listFields"][] = "id";
$tdatamst_jewelry_conditions[".listFields"][] = "name";
$tdatamst_jewelry_conditions[".listFields"][] = "sort";
$tdatamst_jewelry_conditions[".listFields"][] = "create_at";
$tdatamst_jewelry_conditions[".listFields"][] = "create_by";
$tdatamst_jewelry_conditions[".listFields"][] = "update_at";
$tdatamst_jewelry_conditions[".listFields"][] = "update_by";

$tdatamst_jewelry_conditions[".hideMobileList"] = array();


$tdatamst_jewelry_conditions[".viewFields"] = array();

$tdatamst_jewelry_conditions[".addFields"] = array();

$tdatamst_jewelry_conditions[".masterListFields"] = array();
$tdatamst_jewelry_conditions[".masterListFields"][] = "id";
$tdatamst_jewelry_conditions[".masterListFields"][] = "name";
$tdatamst_jewelry_conditions[".masterListFields"][] = "sort";
$tdatamst_jewelry_conditions[".masterListFields"][] = "create_at";
$tdatamst_jewelry_conditions[".masterListFields"][] = "create_by";
$tdatamst_jewelry_conditions[".masterListFields"][] = "update_at";
$tdatamst_jewelry_conditions[".masterListFields"][] = "update_by";

$tdatamst_jewelry_conditions[".inlineAddFields"] = array();
$tdatamst_jewelry_conditions[".inlineAddFields"][] = "name";
$tdatamst_jewelry_conditions[".inlineAddFields"][] = "sort";

$tdatamst_jewelry_conditions[".editFields"] = array();

$tdatamst_jewelry_conditions[".inlineEditFields"] = array();
$tdatamst_jewelry_conditions[".inlineEditFields"][] = "name";
$tdatamst_jewelry_conditions[".inlineEditFields"][] = "sort";

$tdatamst_jewelry_conditions[".updateSelectedFields"] = array();


$tdatamst_jewelry_conditions[".exportFields"] = array();
$tdatamst_jewelry_conditions[".exportFields"][] = "id";
$tdatamst_jewelry_conditions[".exportFields"][] = "name";
$tdatamst_jewelry_conditions[".exportFields"][] = "sort";
$tdatamst_jewelry_conditions[".exportFields"][] = "create_at";
$tdatamst_jewelry_conditions[".exportFields"][] = "create_by";
$tdatamst_jewelry_conditions[".exportFields"][] = "update_at";
$tdatamst_jewelry_conditions[".exportFields"][] = "update_by";

$tdatamst_jewelry_conditions[".importFields"] = array();
$tdatamst_jewelry_conditions[".importFields"][] = "id";
$tdatamst_jewelry_conditions[".importFields"][] = "name";
$tdatamst_jewelry_conditions[".importFields"][] = "sort";

$tdatamst_jewelry_conditions[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_jewelry_conditions";
	$fdata["Label"] = GetFieldLabel("mst_jewelry_conditions","id");
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




	$tdatamst_jewelry_conditions["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_jewelry_conditions";
	$fdata["Label"] = GetFieldLabel("mst_jewelry_conditions","name");
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




	$tdatamst_jewelry_conditions["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_jewelry_conditions";
	$fdata["Label"] = GetFieldLabel("mst_jewelry_conditions","sort");
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




	$tdatamst_jewelry_conditions["sort"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_jewelry_conditions";
	$fdata["Label"] = GetFieldLabel("mst_jewelry_conditions","create_at");
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




	$tdatamst_jewelry_conditions["create_at"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_jewelry_conditions";
	$fdata["Label"] = GetFieldLabel("mst_jewelry_conditions","update_at");
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




	$tdatamst_jewelry_conditions["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_jewelry_conditions";
	$fdata["Label"] = GetFieldLabel("mst_jewelry_conditions","create_by");
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




	$tdatamst_jewelry_conditions["create_by"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_jewelry_conditions";
	$fdata["Label"] = GetFieldLabel("mst_jewelry_conditions","update_by");
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




	$tdatamst_jewelry_conditions["update_by"] = $fdata;


$tables_data["mst_jewelry_conditions"]=&$tdatamst_jewelry_conditions;
$field_labels["mst_jewelry_conditions"] = &$fieldLabelsmst_jewelry_conditions;
$fieldToolTips["mst_jewelry_conditions"] = &$fieldToolTipsmst_jewelry_conditions;
$placeHolders["mst_jewelry_conditions"] = &$placeHoldersmst_jewelry_conditions;
$page_titles["mst_jewelry_conditions"] = &$pageTitlesmst_jewelry_conditions;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_jewelry_conditions"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_jewelry_conditions"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_jewelry_conditions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `sort`,  `create_at`,  `update_at`,  `create_by`,  `update_by`";
$proto0["m_strFrom"] = "FROM `mst_jewelry_conditions`";
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
	"m_strTable" => "mst_jewelry_conditions",
	"m_srcTableName" => "mst_jewelry_conditions"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_jewelry_conditions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_jewelry_conditions",
	"m_srcTableName" => "mst_jewelry_conditions"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_jewelry_conditions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_jewelry_conditions",
	"m_srcTableName" => "mst_jewelry_conditions"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_jewelry_conditions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_jewelry_conditions",
	"m_srcTableName" => "mst_jewelry_conditions"
));

$proto12["m_sql"] = "`create_at`";
$proto12["m_srcTableName"] = "mst_jewelry_conditions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_jewelry_conditions",
	"m_srcTableName" => "mst_jewelry_conditions"
));

$proto14["m_sql"] = "`update_at`";
$proto14["m_srcTableName"] = "mst_jewelry_conditions";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_jewelry_conditions",
	"m_srcTableName" => "mst_jewelry_conditions"
));

$proto16["m_sql"] = "`create_by`";
$proto16["m_srcTableName"] = "mst_jewelry_conditions";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_jewelry_conditions",
	"m_srcTableName" => "mst_jewelry_conditions"
));

$proto18["m_sql"] = "`update_by`";
$proto18["m_srcTableName"] = "mst_jewelry_conditions";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_jewelry_conditions";
$proto21["m_srcTableName"] = "mst_jewelry_conditions";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "sort";
$proto21["m_columns"][] = "create_at";
$proto21["m_columns"][] = "update_at";
$proto21["m_columns"][] = "create_by";
$proto21["m_columns"][] = "update_by";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`mst_jewelry_conditions`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_jewelry_conditions";
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
	"m_strTable" => "mst_jewelry_conditions",
	"m_srcTableName" => "mst_jewelry_conditions"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_jewelry_conditions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_jewelry_conditions = createSqlQuery_mst_jewelry_conditions();


	
		;

							

$tdatamst_jewelry_conditions[".sqlquery"] = $queryData_mst_jewelry_conditions;

include_once(getabspath("include/mst_jewelry_conditions_events.php"));
$tableEvents["mst_jewelry_conditions"] = new eventclass_mst_jewelry_conditions;
$tdatamst_jewelry_conditions[".hasEvents"] = true;

?>