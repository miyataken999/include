<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_Appraiser = array();
	$tdatamst_Appraiser[".truncateText"] = true;
	$tdatamst_Appraiser[".NumberOfChars"] = 80;
	$tdatamst_Appraiser[".ShortName"] = "mst_Appraiser";
	$tdatamst_Appraiser[".OwnerID"] = "";
	$tdatamst_Appraiser[".OriginalTable"] = "mst_Appraiser";

//	field labels
$fieldLabelsmst_Appraiser = array();
$fieldToolTipsmst_Appraiser = array();
$pageTitlesmst_Appraiser = array();
$placeHoldersmst_Appraiser = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_Appraiser["Japanese"] = array();
	$fieldToolTipsmst_Appraiser["Japanese"] = array();
	$placeHoldersmst_Appraiser["Japanese"] = array();
	$pageTitlesmst_Appraiser["Japanese"] = array();
	$fieldLabelsmst_Appraiser["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_Appraiser["Japanese"]["id"] = "";
	$placeHoldersmst_Appraiser["Japanese"]["id"] = "";
	$fieldLabelsmst_Appraiser["Japanese"]["val"] = "Name";
	$fieldToolTipsmst_Appraiser["Japanese"]["val"] = "";
	$placeHoldersmst_Appraiser["Japanese"]["val"] = "";
	$fieldLabelsmst_Appraiser["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_Appraiser["Japanese"]["sort"] = "";
	$placeHoldersmst_Appraiser["Japanese"]["sort"] = "";
	$fieldLabelsmst_Appraiser["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_Appraiser["Japanese"]["update_at"] = "";
	$placeHoldersmst_Appraiser["Japanese"]["update_at"] = "";
	$fieldLabelsmst_Appraiser["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_Appraiser["Japanese"]["update_by"] = "";
	$placeHoldersmst_Appraiser["Japanese"]["update_by"] = "";
	$fieldLabelsmst_Appraiser["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_Appraiser["Japanese"]["create_at"] = "";
	$placeHoldersmst_Appraiser["Japanese"]["create_at"] = "";
	$fieldLabelsmst_Appraiser["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_Appraiser["Japanese"]["create_by"] = "";
	$placeHoldersmst_Appraiser["Japanese"]["create_by"] = "";
	$fieldLabelsmst_Appraiser["Japanese"]["english_name"] = "英名";
	$fieldToolTipsmst_Appraiser["Japanese"]["english_name"] = "";
	$placeHoldersmst_Appraiser["Japanese"]["english_name"] = "";
	$fieldLabelsmst_Appraiser["Japanese"]["abbreviation"] = "略称";
	$fieldToolTipsmst_Appraiser["Japanese"]["abbreviation"] = "";
	$placeHoldersmst_Appraiser["Japanese"]["abbreviation"] = "";
	if (count($fieldToolTipsmst_Appraiser["Japanese"]))
		$tdatamst_Appraiser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_Appraiser[""] = array();
	$fieldToolTipsmst_Appraiser[""] = array();
	$placeHoldersmst_Appraiser[""] = array();
	$pageTitlesmst_Appraiser[""] = array();
	$fieldLabelsmst_Appraiser[""]["id"] = "Id";
	$fieldToolTipsmst_Appraiser[""]["id"] = "";
	$placeHoldersmst_Appraiser[""]["id"] = "";
	$fieldLabelsmst_Appraiser[""]["val"] = "Val";
	$fieldToolTipsmst_Appraiser[""]["val"] = "";
	$placeHoldersmst_Appraiser[""]["val"] = "";
	$fieldLabelsmst_Appraiser[""]["sort"] = "Sort";
	$fieldToolTipsmst_Appraiser[""]["sort"] = "";
	$placeHoldersmst_Appraiser[""]["sort"] = "";
	$fieldLabelsmst_Appraiser[""]["update_at"] = "Update At";
	$fieldToolTipsmst_Appraiser[""]["update_at"] = "";
	$placeHoldersmst_Appraiser[""]["update_at"] = "";
	$fieldLabelsmst_Appraiser[""]["update_by"] = "Update By";
	$fieldToolTipsmst_Appraiser[""]["update_by"] = "";
	$placeHoldersmst_Appraiser[""]["update_by"] = "";
	$fieldLabelsmst_Appraiser[""]["create_at"] = "Create At";
	$fieldToolTipsmst_Appraiser[""]["create_at"] = "";
	$placeHoldersmst_Appraiser[""]["create_at"] = "";
	$fieldLabelsmst_Appraiser[""]["create_by"] = "Create By";
	$fieldToolTipsmst_Appraiser[""]["create_by"] = "";
	$placeHoldersmst_Appraiser[""]["create_by"] = "";
	$fieldLabelsmst_Appraiser[""]["english_name"] = "English Name";
	$fieldToolTipsmst_Appraiser[""]["english_name"] = "";
	$placeHoldersmst_Appraiser[""]["english_name"] = "";
	$fieldLabelsmst_Appraiser[""]["abbreviation"] = "Abbreviation";
	$fieldToolTipsmst_Appraiser[""]["abbreviation"] = "";
	$placeHoldersmst_Appraiser[""]["abbreviation"] = "";
	if (count($fieldToolTipsmst_Appraiser[""]))
		$tdatamst_Appraiser[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_Appraiser["English"] = array();
	$fieldToolTipsmst_Appraiser["English"] = array();
	$placeHoldersmst_Appraiser["English"] = array();
	$pageTitlesmst_Appraiser["English"] = array();
	$fieldLabelsmst_Appraiser["English"]["id"] = "Id";
	$fieldToolTipsmst_Appraiser["English"]["id"] = "";
	$placeHoldersmst_Appraiser["English"]["id"] = "";
	$fieldLabelsmst_Appraiser["English"]["val"] = "Val";
	$fieldToolTipsmst_Appraiser["English"]["val"] = "";
	$placeHoldersmst_Appraiser["English"]["val"] = "";
	$fieldLabelsmst_Appraiser["English"]["sort"] = "Sort";
	$fieldToolTipsmst_Appraiser["English"]["sort"] = "";
	$placeHoldersmst_Appraiser["English"]["sort"] = "";
	$fieldLabelsmst_Appraiser["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_Appraiser["English"]["update_at"] = "";
	$placeHoldersmst_Appraiser["English"]["update_at"] = "";
	$fieldLabelsmst_Appraiser["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_Appraiser["English"]["update_by"] = "";
	$placeHoldersmst_Appraiser["English"]["update_by"] = "";
	$fieldLabelsmst_Appraiser["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_Appraiser["English"]["create_at"] = "";
	$placeHoldersmst_Appraiser["English"]["create_at"] = "";
	$fieldLabelsmst_Appraiser["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_Appraiser["English"]["create_by"] = "";
	$placeHoldersmst_Appraiser["English"]["create_by"] = "";
	$fieldLabelsmst_Appraiser["English"]["english_name"] = "English Name";
	$fieldToolTipsmst_Appraiser["English"]["english_name"] = "";
	$placeHoldersmst_Appraiser["English"]["english_name"] = "";
	$fieldLabelsmst_Appraiser["English"]["abbreviation"] = "Abbreviation";
	$fieldToolTipsmst_Appraiser["English"]["abbreviation"] = "";
	$placeHoldersmst_Appraiser["English"]["abbreviation"] = "";
	if (count($fieldToolTipsmst_Appraiser["English"]))
		$tdatamst_Appraiser[".isUseToolTips"] = true;
}


	$tdatamst_Appraiser[".NCSearch"] = true;



$tdatamst_Appraiser[".shortTableName"] = "mst_Appraiser";
$tdatamst_Appraiser[".nSecOptions"] = 0;
$tdatamst_Appraiser[".recsPerRowPrint"] = 1;
$tdatamst_Appraiser[".mainTableOwnerID"] = "";
$tdatamst_Appraiser[".moveNext"] = 1;
$tdatamst_Appraiser[".entityType"] = 0;

$tdatamst_Appraiser[".strOriginalTableName"] = "mst_Appraiser";

	



$tdatamst_Appraiser[".showAddInPopup"] = false;

$tdatamst_Appraiser[".showEditInPopup"] = false;

$tdatamst_Appraiser[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_Appraiser[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_Appraiser[".fieldsForRegister"] = array();

$tdatamst_Appraiser[".listAjax"] = false;

	$tdatamst_Appraiser[".audit"] = true;

	$tdatamst_Appraiser[".locking"] = false;



$tdatamst_Appraiser[".list"] = true;

$tdatamst_Appraiser[".inlineEdit"] = true;


$tdatamst_Appraiser[".reorderRecordsByHeader"] = true;



$tdatamst_Appraiser[".inlineAdd"] = true;

$tdatamst_Appraiser[".import"] = true;

$tdatamst_Appraiser[".exportTo"] = true;

$tdatamst_Appraiser[".printFriendly"] = true;

$tdatamst_Appraiser[".delete"] = true;

$tdatamst_Appraiser[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_Appraiser[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_Appraiser[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_Appraiser[".searchSaving"] = false;
//

$tdatamst_Appraiser[".showSearchPanel"] = true;
		$tdatamst_Appraiser[".flexibleSearch"] = true;

$tdatamst_Appraiser[".isUseAjaxSuggest"] = true;

$tdatamst_Appraiser[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_Appraiser[".ajaxCodeSnippetAdded"] = false;

$tdatamst_Appraiser[".buttonsAdded"] = false;

$tdatamst_Appraiser[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_Appraiser[".isUseTimeForSearch"] = false;





$tdatamst_Appraiser[".allSearchFields"] = array();
$tdatamst_Appraiser[".filterFields"] = array();
$tdatamst_Appraiser[".requiredSearchFields"] = array();

$tdatamst_Appraiser[".allSearchFields"][] = "id";
	$tdatamst_Appraiser[".allSearchFields"][] = "val";
	$tdatamst_Appraiser[".allSearchFields"][] = "sort";
	$tdatamst_Appraiser[".allSearchFields"][] = "update_at";
	$tdatamst_Appraiser[".allSearchFields"][] = "update_by";
	$tdatamst_Appraiser[".allSearchFields"][] = "create_at";
	$tdatamst_Appraiser[".allSearchFields"][] = "create_by";
	$tdatamst_Appraiser[".allSearchFields"][] = "english_name";
	$tdatamst_Appraiser[".allSearchFields"][] = "abbreviation";
	

$tdatamst_Appraiser[".googleLikeFields"] = array();
$tdatamst_Appraiser[".googleLikeFields"][] = "id";
$tdatamst_Appraiser[".googleLikeFields"][] = "val";
$tdatamst_Appraiser[".googleLikeFields"][] = "sort";
$tdatamst_Appraiser[".googleLikeFields"][] = "update_at";
$tdatamst_Appraiser[".googleLikeFields"][] = "update_by";
$tdatamst_Appraiser[".googleLikeFields"][] = "create_at";
$tdatamst_Appraiser[".googleLikeFields"][] = "create_by";
$tdatamst_Appraiser[".googleLikeFields"][] = "english_name";
$tdatamst_Appraiser[".googleLikeFields"][] = "abbreviation";

$tdatamst_Appraiser[".panelSearchFields"] = array();
$tdatamst_Appraiser[".searchPanelOptions"] = array();
$tdatamst_Appraiser[".panelSearchFields"][] = "val";
	
$tdatamst_Appraiser[".advSearchFields"] = array();
$tdatamst_Appraiser[".advSearchFields"][] = "id";
$tdatamst_Appraiser[".advSearchFields"][] = "val";
$tdatamst_Appraiser[".advSearchFields"][] = "sort";
$tdatamst_Appraiser[".advSearchFields"][] = "update_at";
$tdatamst_Appraiser[".advSearchFields"][] = "update_by";
$tdatamst_Appraiser[".advSearchFields"][] = "create_at";
$tdatamst_Appraiser[".advSearchFields"][] = "create_by";
$tdatamst_Appraiser[".advSearchFields"][] = "english_name";
$tdatamst_Appraiser[".advSearchFields"][] = "abbreviation";

$tdatamst_Appraiser[".tableType"] = "list";

$tdatamst_Appraiser[".printerPageOrientation"] = 0;
$tdatamst_Appraiser[".nPrinterPageScale"] = 100;

$tdatamst_Appraiser[".nPrinterSplitRecords"] = 40;

$tdatamst_Appraiser[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_Appraiser[".geocodingEnabled"] = false;





$tdatamst_Appraiser[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_Appraiser[".pageSize"] = 100;

$tdatamst_Appraiser[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_Appraiser[".strOrderBy"] = $tstrOrderBy;

$tdatamst_Appraiser[".orderindexes"] = array();
$tdatamst_Appraiser[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_Appraiser[".sqlHead"] = "SELECT `id`,  `val`,  `sort`,  `update_at`,  `update_by`,  `create_at`,  `create_by`,  `english_name`,  `abbreviation`";
$tdatamst_Appraiser[".sqlFrom"] = "FROM `mst_Appraiser`";
$tdatamst_Appraiser[".sqlWhereExpr"] = "";
$tdatamst_Appraiser[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_Appraiser[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_Appraiser[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_Appraiser[".highlightSearchResults"] = true;

$tableKeysmst_Appraiser = array();
$tableKeysmst_Appraiser[] = "id";
$tdatamst_Appraiser[".Keys"] = $tableKeysmst_Appraiser;

$tdatamst_Appraiser[".listFields"] = array();
$tdatamst_Appraiser[".listFields"][] = "id";
$tdatamst_Appraiser[".listFields"][] = "abbreviation";
$tdatamst_Appraiser[".listFields"][] = "val";
$tdatamst_Appraiser[".listFields"][] = "english_name";
$tdatamst_Appraiser[".listFields"][] = "sort";
$tdatamst_Appraiser[".listFields"][] = "update_by";
$tdatamst_Appraiser[".listFields"][] = "update_at";
$tdatamst_Appraiser[".listFields"][] = "create_by";
$tdatamst_Appraiser[".listFields"][] = "create_at";

$tdatamst_Appraiser[".hideMobileList"] = array();


$tdatamst_Appraiser[".viewFields"] = array();

$tdatamst_Appraiser[".addFields"] = array();

$tdatamst_Appraiser[".masterListFields"] = array();
$tdatamst_Appraiser[".masterListFields"][] = "id";
$tdatamst_Appraiser[".masterListFields"][] = "val";
$tdatamst_Appraiser[".masterListFields"][] = "sort";
$tdatamst_Appraiser[".masterListFields"][] = "update_at";
$tdatamst_Appraiser[".masterListFields"][] = "update_by";
$tdatamst_Appraiser[".masterListFields"][] = "create_at";
$tdatamst_Appraiser[".masterListFields"][] = "create_by";
$tdatamst_Appraiser[".masterListFields"][] = "english_name";
$tdatamst_Appraiser[".masterListFields"][] = "abbreviation";

$tdatamst_Appraiser[".inlineAddFields"] = array();
$tdatamst_Appraiser[".inlineAddFields"][] = "abbreviation";
$tdatamst_Appraiser[".inlineAddFields"][] = "val";
$tdatamst_Appraiser[".inlineAddFields"][] = "english_name";
$tdatamst_Appraiser[".inlineAddFields"][] = "sort";

$tdatamst_Appraiser[".editFields"] = array();

$tdatamst_Appraiser[".inlineEditFields"] = array();
$tdatamst_Appraiser[".inlineEditFields"][] = "abbreviation";
$tdatamst_Appraiser[".inlineEditFields"][] = "val";
$tdatamst_Appraiser[".inlineEditFields"][] = "english_name";
$tdatamst_Appraiser[".inlineEditFields"][] = "sort";

$tdatamst_Appraiser[".updateSelectedFields"] = array();


$tdatamst_Appraiser[".exportFields"] = array();
$tdatamst_Appraiser[".exportFields"][] = "id";
$tdatamst_Appraiser[".exportFields"][] = "val";
$tdatamst_Appraiser[".exportFields"][] = "sort";
$tdatamst_Appraiser[".exportFields"][] = "update_at";
$tdatamst_Appraiser[".exportFields"][] = "update_by";
$tdatamst_Appraiser[".exportFields"][] = "create_at";
$tdatamst_Appraiser[".exportFields"][] = "create_by";
$tdatamst_Appraiser[".exportFields"][] = "english_name";
$tdatamst_Appraiser[".exportFields"][] = "abbreviation";

$tdatamst_Appraiser[".importFields"] = array();
$tdatamst_Appraiser[".importFields"][] = "id";
$tdatamst_Appraiser[".importFields"][] = "val";
$tdatamst_Appraiser[".importFields"][] = "sort";
$tdatamst_Appraiser[".importFields"][] = "english_name";
$tdatamst_Appraiser[".importFields"][] = "abbreviation";

$tdatamst_Appraiser[".printFields"] = array();
$tdatamst_Appraiser[".printFields"][] = "id";
$tdatamst_Appraiser[".printFields"][] = "val";
$tdatamst_Appraiser[".printFields"][] = "sort";
$tdatamst_Appraiser[".printFields"][] = "update_at";
$tdatamst_Appraiser[".printFields"][] = "update_by";
$tdatamst_Appraiser[".printFields"][] = "create_at";
$tdatamst_Appraiser[".printFields"][] = "create_by";
$tdatamst_Appraiser[".printFields"][] = "english_name";
$tdatamst_Appraiser[".printFields"][] = "abbreviation";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_Appraiser";
	$fdata["Label"] = GetFieldLabel("mst_Appraiser","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_Appraiser["id"] = $fdata;
//	val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "val";
	$fdata["GoodName"] = "val";
	$fdata["ownerTable"] = "mst_Appraiser";
	$fdata["Label"] = GetFieldLabel("mst_Appraiser","val");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "val";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`val`";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_Appraiser["val"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_Appraiser";
	$fdata["Label"] = GetFieldLabel("mst_Appraiser","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

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




	$tdatamst_Appraiser["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_Appraiser";
	$fdata["Label"] = GetFieldLabel("mst_Appraiser","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_Appraiser["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_Appraiser";
	$fdata["Label"] = GetFieldLabel("mst_Appraiser","update_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_Appraiser["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_Appraiser";
	$fdata["Label"] = GetFieldLabel("mst_Appraiser","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_Appraiser["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_Appraiser";
	$fdata["Label"] = GetFieldLabel("mst_Appraiser","create_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatamst_Appraiser["create_by"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "mst_Appraiser";
	$fdata["Label"] = GetFieldLabel("mst_Appraiser","english_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "english_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`english_name`";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_Appraiser["english_name"] = $fdata;
//	abbreviation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "abbreviation";
	$fdata["GoodName"] = "abbreviation";
	$fdata["ownerTable"] = "mst_Appraiser";
	$fdata["Label"] = GetFieldLabel("mst_Appraiser","abbreviation");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "abbreviation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`abbreviation`";

	
	
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




	$tdatamst_Appraiser["abbreviation"] = $fdata;


$tables_data["mst_Appraiser"]=&$tdatamst_Appraiser;
$field_labels["mst_Appraiser"] = &$fieldLabelsmst_Appraiser;
$fieldToolTips["mst_Appraiser"] = &$fieldToolTipsmst_Appraiser;
$placeHolders["mst_Appraiser"] = &$placeHoldersmst_Appraiser;
$page_titles["mst_Appraiser"] = &$pageTitlesmst_Appraiser;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_Appraiser"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_Appraiser"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_Appraiser()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `val`,  `sort`,  `update_at`,  `update_by`,  `create_at`,  `create_by`,  `english_name`,  `abbreviation`";
$proto0["m_strFrom"] = "FROM `mst_Appraiser`";
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
	"m_strTable" => "mst_Appraiser",
	"m_srcTableName" => "mst_Appraiser"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_Appraiser";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "val",
	"m_strTable" => "mst_Appraiser",
	"m_srcTableName" => "mst_Appraiser"
));

$proto8["m_sql"] = "`val`";
$proto8["m_srcTableName"] = "mst_Appraiser";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_Appraiser",
	"m_srcTableName" => "mst_Appraiser"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_Appraiser";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_Appraiser",
	"m_srcTableName" => "mst_Appraiser"
));

$proto12["m_sql"] = "`update_at`";
$proto12["m_srcTableName"] = "mst_Appraiser";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_Appraiser",
	"m_srcTableName" => "mst_Appraiser"
));

$proto14["m_sql"] = "`update_by`";
$proto14["m_srcTableName"] = "mst_Appraiser";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_Appraiser",
	"m_srcTableName" => "mst_Appraiser"
));

$proto16["m_sql"] = "`create_at`";
$proto16["m_srcTableName"] = "mst_Appraiser";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_Appraiser",
	"m_srcTableName" => "mst_Appraiser"
));

$proto18["m_sql"] = "`create_by`";
$proto18["m_srcTableName"] = "mst_Appraiser";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "mst_Appraiser",
	"m_srcTableName" => "mst_Appraiser"
));

$proto20["m_sql"] = "`english_name`";
$proto20["m_srcTableName"] = "mst_Appraiser";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "abbreviation",
	"m_strTable" => "mst_Appraiser",
	"m_srcTableName" => "mst_Appraiser"
));

$proto22["m_sql"] = "`abbreviation`";
$proto22["m_srcTableName"] = "mst_Appraiser";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "mst_Appraiser";
$proto25["m_srcTableName"] = "mst_Appraiser";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "val";
$proto25["m_columns"][] = "sort";
$proto25["m_columns"][] = "update_at";
$proto25["m_columns"][] = "update_by";
$proto25["m_columns"][] = "create_at";
$proto25["m_columns"][] = "create_by";
$proto25["m_columns"][] = "english_name";
$proto25["m_columns"][] = "abbreviation";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`mst_Appraiser`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "mst_Appraiser";
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
	"m_strName" => "sort",
	"m_strTable" => "mst_Appraiser",
	"m_srcTableName" => "mst_Appraiser"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 1;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_Appraiser";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_Appraiser = createSqlQuery_mst_Appraiser();


	
		;

									

$tdatamst_Appraiser[".sqlquery"] = $queryData_mst_Appraiser;

include_once(getabspath("include/mst_Appraiser_events.php"));
$tableEvents["mst_Appraiser"] = new eventclass_mst_Appraiser;
$tdatamst_Appraiser[".hasEvents"] = true;

?>