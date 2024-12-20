<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_Eoc_timeline_category = array();
	$tdatamst_Eoc_timeline_category[".truncateText"] = true;
	$tdatamst_Eoc_timeline_category[".NumberOfChars"] = 80;
	$tdatamst_Eoc_timeline_category[".ShortName"] = "mst_Eoc_timeline_category";
	$tdatamst_Eoc_timeline_category[".OwnerID"] = "";
	$tdatamst_Eoc_timeline_category[".OriginalTable"] = "mst_Eoc_timeline_category";

//	field labels
$fieldLabelsmst_Eoc_timeline_category = array();
$fieldToolTipsmst_Eoc_timeline_category = array();
$pageTitlesmst_Eoc_timeline_category = array();
$placeHoldersmst_Eoc_timeline_category = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_Eoc_timeline_category["Japanese"] = array();
	$fieldToolTipsmst_Eoc_timeline_category["Japanese"] = array();
	$placeHoldersmst_Eoc_timeline_category["Japanese"] = array();
	$pageTitlesmst_Eoc_timeline_category["Japanese"] = array();
	$fieldLabelsmst_Eoc_timeline_category["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_Eoc_timeline_category["Japanese"]["id"] = "";
	$placeHoldersmst_Eoc_timeline_category["Japanese"]["id"] = "";
	$fieldLabelsmst_Eoc_timeline_category["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_Eoc_timeline_category["Japanese"]["name"] = "";
	$placeHoldersmst_Eoc_timeline_category["Japanese"]["name"] = "";
	$fieldLabelsmst_Eoc_timeline_category["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_Eoc_timeline_category["Japanese"]["sort"] = "";
	$placeHoldersmst_Eoc_timeline_category["Japanese"]["sort"] = "";
	$fieldLabelsmst_Eoc_timeline_category["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_Eoc_timeline_category["Japanese"]["create_by"] = "";
	$placeHoldersmst_Eoc_timeline_category["Japanese"]["create_by"] = "";
	$fieldLabelsmst_Eoc_timeline_category["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_Eoc_timeline_category["Japanese"]["create_at"] = "";
	$placeHoldersmst_Eoc_timeline_category["Japanese"]["create_at"] = "";
	$fieldLabelsmst_Eoc_timeline_category["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_Eoc_timeline_category["Japanese"]["update_by"] = "";
	$placeHoldersmst_Eoc_timeline_category["Japanese"]["update_by"] = "";
	$fieldLabelsmst_Eoc_timeline_category["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_Eoc_timeline_category["Japanese"]["update_at"] = "";
	$placeHoldersmst_Eoc_timeline_category["Japanese"]["update_at"] = "";
	if (count($fieldToolTipsmst_Eoc_timeline_category["Japanese"]))
		$tdatamst_Eoc_timeline_category[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_Eoc_timeline_category[""] = array();
	$fieldToolTipsmst_Eoc_timeline_category[""] = array();
	$placeHoldersmst_Eoc_timeline_category[""] = array();
	$pageTitlesmst_Eoc_timeline_category[""] = array();
	$fieldLabelsmst_Eoc_timeline_category[""]["id"] = "Id";
	$fieldToolTipsmst_Eoc_timeline_category[""]["id"] = "";
	$placeHoldersmst_Eoc_timeline_category[""]["id"] = "";
	$fieldLabelsmst_Eoc_timeline_category[""]["name"] = "Name";
	$fieldToolTipsmst_Eoc_timeline_category[""]["name"] = "";
	$placeHoldersmst_Eoc_timeline_category[""]["name"] = "";
	$fieldLabelsmst_Eoc_timeline_category[""]["sort"] = "Sort";
	$fieldToolTipsmst_Eoc_timeline_category[""]["sort"] = "";
	$placeHoldersmst_Eoc_timeline_category[""]["sort"] = "";
	$fieldLabelsmst_Eoc_timeline_category[""]["create_by"] = "Create By";
	$fieldToolTipsmst_Eoc_timeline_category[""]["create_by"] = "";
	$placeHoldersmst_Eoc_timeline_category[""]["create_by"] = "";
	$fieldLabelsmst_Eoc_timeline_category[""]["create_at"] = "Create At";
	$fieldToolTipsmst_Eoc_timeline_category[""]["create_at"] = "";
	$placeHoldersmst_Eoc_timeline_category[""]["create_at"] = "";
	$fieldLabelsmst_Eoc_timeline_category[""]["update_by"] = "Update By";
	$fieldToolTipsmst_Eoc_timeline_category[""]["update_by"] = "";
	$placeHoldersmst_Eoc_timeline_category[""]["update_by"] = "";
	$fieldLabelsmst_Eoc_timeline_category[""]["update_at"] = "Update At";
	$fieldToolTipsmst_Eoc_timeline_category[""]["update_at"] = "";
	$placeHoldersmst_Eoc_timeline_category[""]["update_at"] = "";
	if (count($fieldToolTipsmst_Eoc_timeline_category[""]))
		$tdatamst_Eoc_timeline_category[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_Eoc_timeline_category["English"] = array();
	$fieldToolTipsmst_Eoc_timeline_category["English"] = array();
	$placeHoldersmst_Eoc_timeline_category["English"] = array();
	$pageTitlesmst_Eoc_timeline_category["English"] = array();
	$fieldLabelsmst_Eoc_timeline_category["English"]["id"] = "Id";
	$fieldToolTipsmst_Eoc_timeline_category["English"]["id"] = "";
	$placeHoldersmst_Eoc_timeline_category["English"]["id"] = "";
	$fieldLabelsmst_Eoc_timeline_category["English"]["name"] = "Name";
	$fieldToolTipsmst_Eoc_timeline_category["English"]["name"] = "";
	$placeHoldersmst_Eoc_timeline_category["English"]["name"] = "";
	$fieldLabelsmst_Eoc_timeline_category["English"]["sort"] = "Sort";
	$fieldToolTipsmst_Eoc_timeline_category["English"]["sort"] = "";
	$placeHoldersmst_Eoc_timeline_category["English"]["sort"] = "";
	$fieldLabelsmst_Eoc_timeline_category["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_Eoc_timeline_category["English"]["create_by"] = "";
	$placeHoldersmst_Eoc_timeline_category["English"]["create_by"] = "";
	$fieldLabelsmst_Eoc_timeline_category["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_Eoc_timeline_category["English"]["create_at"] = "";
	$placeHoldersmst_Eoc_timeline_category["English"]["create_at"] = "";
	$fieldLabelsmst_Eoc_timeline_category["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_Eoc_timeline_category["English"]["update_by"] = "";
	$placeHoldersmst_Eoc_timeline_category["English"]["update_by"] = "";
	$fieldLabelsmst_Eoc_timeline_category["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_Eoc_timeline_category["English"]["update_at"] = "";
	$placeHoldersmst_Eoc_timeline_category["English"]["update_at"] = "";
	if (count($fieldToolTipsmst_Eoc_timeline_category["English"]))
		$tdatamst_Eoc_timeline_category[".isUseToolTips"] = true;
}


	$tdatamst_Eoc_timeline_category[".NCSearch"] = true;



$tdatamst_Eoc_timeline_category[".shortTableName"] = "mst_Eoc_timeline_category";
$tdatamst_Eoc_timeline_category[".nSecOptions"] = 0;
$tdatamst_Eoc_timeline_category[".recsPerRowPrint"] = 1;
$tdatamst_Eoc_timeline_category[".mainTableOwnerID"] = "";
$tdatamst_Eoc_timeline_category[".moveNext"] = 1;
$tdatamst_Eoc_timeline_category[".entityType"] = 0;

$tdatamst_Eoc_timeline_category[".strOriginalTableName"] = "mst_Eoc_timeline_category";

	



$tdatamst_Eoc_timeline_category[".showAddInPopup"] = false;

$tdatamst_Eoc_timeline_category[".showEditInPopup"] = false;

$tdatamst_Eoc_timeline_category[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_Eoc_timeline_category[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_Eoc_timeline_category[".fieldsForRegister"] = array();

$tdatamst_Eoc_timeline_category[".listAjax"] = false;

	$tdatamst_Eoc_timeline_category[".audit"] = true;

	$tdatamst_Eoc_timeline_category[".locking"] = false;



$tdatamst_Eoc_timeline_category[".list"] = true;

$tdatamst_Eoc_timeline_category[".inlineEdit"] = true;


$tdatamst_Eoc_timeline_category[".reorderRecordsByHeader"] = true;



$tdatamst_Eoc_timeline_category[".inlineAdd"] = true;

$tdatamst_Eoc_timeline_category[".import"] = true;

$tdatamst_Eoc_timeline_category[".exportTo"] = true;


$tdatamst_Eoc_timeline_category[".delete"] = true;

$tdatamst_Eoc_timeline_category[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_Eoc_timeline_category[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_Eoc_timeline_category[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_Eoc_timeline_category[".searchSaving"] = false;
//

$tdatamst_Eoc_timeline_category[".showSearchPanel"] = true;
		$tdatamst_Eoc_timeline_category[".flexibleSearch"] = true;

$tdatamst_Eoc_timeline_category[".isUseAjaxSuggest"] = true;

$tdatamst_Eoc_timeline_category[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_Eoc_timeline_category[".ajaxCodeSnippetAdded"] = false;

$tdatamst_Eoc_timeline_category[".buttonsAdded"] = false;

$tdatamst_Eoc_timeline_category[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_Eoc_timeline_category[".isUseTimeForSearch"] = false;





$tdatamst_Eoc_timeline_category[".allSearchFields"] = array();
$tdatamst_Eoc_timeline_category[".filterFields"] = array();
$tdatamst_Eoc_timeline_category[".requiredSearchFields"] = array();

$tdatamst_Eoc_timeline_category[".allSearchFields"][] = "id";
	$tdatamst_Eoc_timeline_category[".allSearchFields"][] = "name";
	$tdatamst_Eoc_timeline_category[".allSearchFields"][] = "sort";
	$tdatamst_Eoc_timeline_category[".allSearchFields"][] = "create_by";
	$tdatamst_Eoc_timeline_category[".allSearchFields"][] = "create_at";
	$tdatamst_Eoc_timeline_category[".allSearchFields"][] = "update_by";
	$tdatamst_Eoc_timeline_category[".allSearchFields"][] = "update_at";
	

$tdatamst_Eoc_timeline_category[".googleLikeFields"] = array();
$tdatamst_Eoc_timeline_category[".googleLikeFields"][] = "id";
$tdatamst_Eoc_timeline_category[".googleLikeFields"][] = "name";
$tdatamst_Eoc_timeline_category[".googleLikeFields"][] = "sort";
$tdatamst_Eoc_timeline_category[".googleLikeFields"][] = "create_by";
$tdatamst_Eoc_timeline_category[".googleLikeFields"][] = "create_at";
$tdatamst_Eoc_timeline_category[".googleLikeFields"][] = "update_by";
$tdatamst_Eoc_timeline_category[".googleLikeFields"][] = "update_at";


$tdatamst_Eoc_timeline_category[".advSearchFields"] = array();
$tdatamst_Eoc_timeline_category[".advSearchFields"][] = "id";
$tdatamst_Eoc_timeline_category[".advSearchFields"][] = "name";
$tdatamst_Eoc_timeline_category[".advSearchFields"][] = "sort";
$tdatamst_Eoc_timeline_category[".advSearchFields"][] = "create_by";
$tdatamst_Eoc_timeline_category[".advSearchFields"][] = "create_at";
$tdatamst_Eoc_timeline_category[".advSearchFields"][] = "update_by";
$tdatamst_Eoc_timeline_category[".advSearchFields"][] = "update_at";

$tdatamst_Eoc_timeline_category[".tableType"] = "list";

$tdatamst_Eoc_timeline_category[".printerPageOrientation"] = 0;
$tdatamst_Eoc_timeline_category[".nPrinterPageScale"] = 100;

$tdatamst_Eoc_timeline_category[".nPrinterSplitRecords"] = 40;

$tdatamst_Eoc_timeline_category[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_Eoc_timeline_category[".geocodingEnabled"] = false;





$tdatamst_Eoc_timeline_category[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_Eoc_timeline_category[".pageSize"] = 20;

$tdatamst_Eoc_timeline_category[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_Eoc_timeline_category[".strOrderBy"] = $tstrOrderBy;

$tdatamst_Eoc_timeline_category[".orderindexes"] = array();
$tdatamst_Eoc_timeline_category[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_Eoc_timeline_category[".sqlHead"] = "SELECT `id`,  `name`,  `sort`,  `create_by`,  `create_at`,  `update_by`,  `update_at`";
$tdatamst_Eoc_timeline_category[".sqlFrom"] = "FROM `mst_Eoc_timeline_category`";
$tdatamst_Eoc_timeline_category[".sqlWhereExpr"] = "";
$tdatamst_Eoc_timeline_category[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_Eoc_timeline_category[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_Eoc_timeline_category[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_Eoc_timeline_category[".highlightSearchResults"] = true;

$tableKeysmst_Eoc_timeline_category = array();
$tableKeysmst_Eoc_timeline_category[] = "id";
$tdatamst_Eoc_timeline_category[".Keys"] = $tableKeysmst_Eoc_timeline_category;

$tdatamst_Eoc_timeline_category[".listFields"] = array();
$tdatamst_Eoc_timeline_category[".listFields"][] = "id";
$tdatamst_Eoc_timeline_category[".listFields"][] = "name";
$tdatamst_Eoc_timeline_category[".listFields"][] = "sort";
$tdatamst_Eoc_timeline_category[".listFields"][] = "create_by";
$tdatamst_Eoc_timeline_category[".listFields"][] = "create_at";
$tdatamst_Eoc_timeline_category[".listFields"][] = "update_by";
$tdatamst_Eoc_timeline_category[".listFields"][] = "update_at";

$tdatamst_Eoc_timeline_category[".hideMobileList"] = array();


$tdatamst_Eoc_timeline_category[".viewFields"] = array();

$tdatamst_Eoc_timeline_category[".addFields"] = array();

$tdatamst_Eoc_timeline_category[".masterListFields"] = array();
$tdatamst_Eoc_timeline_category[".masterListFields"][] = "id";
$tdatamst_Eoc_timeline_category[".masterListFields"][] = "name";
$tdatamst_Eoc_timeline_category[".masterListFields"][] = "sort";
$tdatamst_Eoc_timeline_category[".masterListFields"][] = "create_by";
$tdatamst_Eoc_timeline_category[".masterListFields"][] = "create_at";
$tdatamst_Eoc_timeline_category[".masterListFields"][] = "update_by";
$tdatamst_Eoc_timeline_category[".masterListFields"][] = "update_at";

$tdatamst_Eoc_timeline_category[".inlineAddFields"] = array();
$tdatamst_Eoc_timeline_category[".inlineAddFields"][] = "name";
$tdatamst_Eoc_timeline_category[".inlineAddFields"][] = "sort";

$tdatamst_Eoc_timeline_category[".editFields"] = array();

$tdatamst_Eoc_timeline_category[".inlineEditFields"] = array();
$tdatamst_Eoc_timeline_category[".inlineEditFields"][] = "name";
$tdatamst_Eoc_timeline_category[".inlineEditFields"][] = "sort";

$tdatamst_Eoc_timeline_category[".updateSelectedFields"] = array();


$tdatamst_Eoc_timeline_category[".exportFields"] = array();
$tdatamst_Eoc_timeline_category[".exportFields"][] = "id";
$tdatamst_Eoc_timeline_category[".exportFields"][] = "name";
$tdatamst_Eoc_timeline_category[".exportFields"][] = "sort";
$tdatamst_Eoc_timeline_category[".exportFields"][] = "create_by";
$tdatamst_Eoc_timeline_category[".exportFields"][] = "create_at";
$tdatamst_Eoc_timeline_category[".exportFields"][] = "update_by";
$tdatamst_Eoc_timeline_category[".exportFields"][] = "update_at";

$tdatamst_Eoc_timeline_category[".importFields"] = array();
$tdatamst_Eoc_timeline_category[".importFields"][] = "id";
$tdatamst_Eoc_timeline_category[".importFields"][] = "name";
$tdatamst_Eoc_timeline_category[".importFields"][] = "sort";

$tdatamst_Eoc_timeline_category[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_Eoc_timeline_category";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_timeline_category","id");
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




	$tdatamst_Eoc_timeline_category["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_Eoc_timeline_category";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_timeline_category","name");
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




	$tdatamst_Eoc_timeline_category["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_Eoc_timeline_category";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_timeline_category","sort");
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




	$tdatamst_Eoc_timeline_category["sort"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_Eoc_timeline_category";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_timeline_category","create_by");
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




	$tdatamst_Eoc_timeline_category["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_Eoc_timeline_category";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_timeline_category","create_at");
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




	$tdatamst_Eoc_timeline_category["create_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_Eoc_timeline_category";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_timeline_category","update_by");
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




	$tdatamst_Eoc_timeline_category["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_Eoc_timeline_category";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_timeline_category","update_at");
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




	$tdatamst_Eoc_timeline_category["update_at"] = $fdata;


$tables_data["mst_Eoc_timeline_category"]=&$tdatamst_Eoc_timeline_category;
$field_labels["mst_Eoc_timeline_category"] = &$fieldLabelsmst_Eoc_timeline_category;
$fieldToolTips["mst_Eoc_timeline_category"] = &$fieldToolTipsmst_Eoc_timeline_category;
$placeHolders["mst_Eoc_timeline_category"] = &$placeHoldersmst_Eoc_timeline_category;
$page_titles["mst_Eoc_timeline_category"] = &$pageTitlesmst_Eoc_timeline_category;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_Eoc_timeline_category"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_Eoc_timeline_category"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_Eoc_timeline_category()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `sort`,  `create_by`,  `create_at`,  `update_by`,  `update_at`";
$proto0["m_strFrom"] = "FROM `mst_Eoc_timeline_category`";
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
	"m_strTable" => "mst_Eoc_timeline_category",
	"m_srcTableName" => "mst_Eoc_timeline_category"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_Eoc_timeline_category";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_Eoc_timeline_category",
	"m_srcTableName" => "mst_Eoc_timeline_category"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_Eoc_timeline_category";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_Eoc_timeline_category",
	"m_srcTableName" => "mst_Eoc_timeline_category"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_Eoc_timeline_category";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_Eoc_timeline_category",
	"m_srcTableName" => "mst_Eoc_timeline_category"
));

$proto12["m_sql"] = "`create_by`";
$proto12["m_srcTableName"] = "mst_Eoc_timeline_category";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_Eoc_timeline_category",
	"m_srcTableName" => "mst_Eoc_timeline_category"
));

$proto14["m_sql"] = "`create_at`";
$proto14["m_srcTableName"] = "mst_Eoc_timeline_category";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_Eoc_timeline_category",
	"m_srcTableName" => "mst_Eoc_timeline_category"
));

$proto16["m_sql"] = "`update_by`";
$proto16["m_srcTableName"] = "mst_Eoc_timeline_category";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_Eoc_timeline_category",
	"m_srcTableName" => "mst_Eoc_timeline_category"
));

$proto18["m_sql"] = "`update_at`";
$proto18["m_srcTableName"] = "mst_Eoc_timeline_category";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_Eoc_timeline_category";
$proto21["m_srcTableName"] = "mst_Eoc_timeline_category";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "sort";
$proto21["m_columns"][] = "create_by";
$proto21["m_columns"][] = "create_at";
$proto21["m_columns"][] = "update_by";
$proto21["m_columns"][] = "update_at";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`mst_Eoc_timeline_category`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_Eoc_timeline_category";
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
	"m_strTable" => "mst_Eoc_timeline_category",
	"m_srcTableName" => "mst_Eoc_timeline_category"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_Eoc_timeline_category";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_Eoc_timeline_category = createSqlQuery_mst_Eoc_timeline_category();


	
		;

							

$tdatamst_Eoc_timeline_category[".sqlquery"] = $queryData_mst_Eoc_timeline_category;

include_once(getabspath("include/mst_Eoc_timeline_category_events.php"));
$tableEvents["mst_Eoc_timeline_category"] = new eventclass_mst_Eoc_timeline_category;
$tdatamst_Eoc_timeline_category[".hasEvents"] = true;

?>