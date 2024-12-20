<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_Discrimination = array();
	$tdatamst_Discrimination[".truncateText"] = true;
	$tdatamst_Discrimination[".NumberOfChars"] = 80;
	$tdatamst_Discrimination[".ShortName"] = "mst_Discrimination";
	$tdatamst_Discrimination[".OwnerID"] = "";
	$tdatamst_Discrimination[".OriginalTable"] = "mst_Discrimination";

//	field labels
$fieldLabelsmst_Discrimination = array();
$fieldToolTipsmst_Discrimination = array();
$pageTitlesmst_Discrimination = array();
$placeHoldersmst_Discrimination = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_Discrimination["Japanese"] = array();
	$fieldToolTipsmst_Discrimination["Japanese"] = array();
	$placeHoldersmst_Discrimination["Japanese"] = array();
	$pageTitlesmst_Discrimination["Japanese"] = array();
	$fieldLabelsmst_Discrimination["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_Discrimination["Japanese"]["id"] = "";
	$placeHoldersmst_Discrimination["Japanese"]["id"] = "";
	$fieldLabelsmst_Discrimination["Japanese"]["val"] = "Val";
	$fieldToolTipsmst_Discrimination["Japanese"]["val"] = "";
	$placeHoldersmst_Discrimination["Japanese"]["val"] = "";
	$fieldLabelsmst_Discrimination["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_Discrimination["Japanese"]["sort"] = "";
	$placeHoldersmst_Discrimination["Japanese"]["sort"] = "";
	$fieldLabelsmst_Discrimination["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_Discrimination["Japanese"]["update_at"] = "";
	$placeHoldersmst_Discrimination["Japanese"]["update_at"] = "";
	$fieldLabelsmst_Discrimination["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_Discrimination["Japanese"]["update_by"] = "";
	$placeHoldersmst_Discrimination["Japanese"]["update_by"] = "";
	$fieldLabelsmst_Discrimination["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_Discrimination["Japanese"]["create_at"] = "";
	$placeHoldersmst_Discrimination["Japanese"]["create_at"] = "";
	$fieldLabelsmst_Discrimination["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_Discrimination["Japanese"]["create_by"] = "";
	$placeHoldersmst_Discrimination["Japanese"]["create_by"] = "";
	$fieldLabelsmst_Discrimination["Japanese"]["destination"] = "送付先";
	$fieldToolTipsmst_Discrimination["Japanese"]["destination"] = "";
	$placeHoldersmst_Discrimination["Japanese"]["destination"] = "";
	$fieldLabelsmst_Discrimination["Japanese"]["cost"] = "鑑別コスト";
	$fieldToolTipsmst_Discrimination["Japanese"]["cost"] = "";
	$placeHoldersmst_Discrimination["Japanese"]["cost"] = "";
	if (count($fieldToolTipsmst_Discrimination["Japanese"]))
		$tdatamst_Discrimination[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_Discrimination[""] = array();
	$fieldToolTipsmst_Discrimination[""] = array();
	$placeHoldersmst_Discrimination[""] = array();
	$pageTitlesmst_Discrimination[""] = array();
	$fieldLabelsmst_Discrimination[""]["id"] = "Id";
	$fieldToolTipsmst_Discrimination[""]["id"] = "";
	$placeHoldersmst_Discrimination[""]["id"] = "";
	$fieldLabelsmst_Discrimination[""]["val"] = "Val";
	$fieldToolTipsmst_Discrimination[""]["val"] = "";
	$placeHoldersmst_Discrimination[""]["val"] = "";
	$fieldLabelsmst_Discrimination[""]["sort"] = "Sort";
	$fieldToolTipsmst_Discrimination[""]["sort"] = "";
	$placeHoldersmst_Discrimination[""]["sort"] = "";
	$fieldLabelsmst_Discrimination[""]["update_at"] = "Update At";
	$fieldToolTipsmst_Discrimination[""]["update_at"] = "";
	$placeHoldersmst_Discrimination[""]["update_at"] = "";
	$fieldLabelsmst_Discrimination[""]["update_by"] = "Update By";
	$fieldToolTipsmst_Discrimination[""]["update_by"] = "";
	$placeHoldersmst_Discrimination[""]["update_by"] = "";
	$fieldLabelsmst_Discrimination[""]["create_at"] = "Create At";
	$fieldToolTipsmst_Discrimination[""]["create_at"] = "";
	$placeHoldersmst_Discrimination[""]["create_at"] = "";
	$fieldLabelsmst_Discrimination[""]["create_by"] = "Create By";
	$fieldToolTipsmst_Discrimination[""]["create_by"] = "";
	$placeHoldersmst_Discrimination[""]["create_by"] = "";
	$fieldLabelsmst_Discrimination[""]["destination"] = "Destination";
	$fieldToolTipsmst_Discrimination[""]["destination"] = "";
	$placeHoldersmst_Discrimination[""]["destination"] = "";
	$fieldLabelsmst_Discrimination[""]["cost"] = "Cost";
	$fieldToolTipsmst_Discrimination[""]["cost"] = "";
	$placeHoldersmst_Discrimination[""]["cost"] = "";
	if (count($fieldToolTipsmst_Discrimination[""]))
		$tdatamst_Discrimination[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_Discrimination["English"] = array();
	$fieldToolTipsmst_Discrimination["English"] = array();
	$placeHoldersmst_Discrimination["English"] = array();
	$pageTitlesmst_Discrimination["English"] = array();
	$fieldLabelsmst_Discrimination["English"]["id"] = "Id";
	$fieldToolTipsmst_Discrimination["English"]["id"] = "";
	$placeHoldersmst_Discrimination["English"]["id"] = "";
	$fieldLabelsmst_Discrimination["English"]["val"] = "Val";
	$fieldToolTipsmst_Discrimination["English"]["val"] = "";
	$placeHoldersmst_Discrimination["English"]["val"] = "";
	$fieldLabelsmst_Discrimination["English"]["sort"] = "Sort";
	$fieldToolTipsmst_Discrimination["English"]["sort"] = "";
	$placeHoldersmst_Discrimination["English"]["sort"] = "";
	$fieldLabelsmst_Discrimination["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_Discrimination["English"]["update_at"] = "";
	$placeHoldersmst_Discrimination["English"]["update_at"] = "";
	$fieldLabelsmst_Discrimination["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_Discrimination["English"]["update_by"] = "";
	$placeHoldersmst_Discrimination["English"]["update_by"] = "";
	$fieldLabelsmst_Discrimination["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_Discrimination["English"]["create_at"] = "";
	$placeHoldersmst_Discrimination["English"]["create_at"] = "";
	$fieldLabelsmst_Discrimination["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_Discrimination["English"]["create_by"] = "";
	$placeHoldersmst_Discrimination["English"]["create_by"] = "";
	$fieldLabelsmst_Discrimination["English"]["destination"] = "Destination";
	$fieldToolTipsmst_Discrimination["English"]["destination"] = "";
	$placeHoldersmst_Discrimination["English"]["destination"] = "";
	$fieldLabelsmst_Discrimination["English"]["cost"] = "Cost";
	$fieldToolTipsmst_Discrimination["English"]["cost"] = "";
	$placeHoldersmst_Discrimination["English"]["cost"] = "";
	if (count($fieldToolTipsmst_Discrimination["English"]))
		$tdatamst_Discrimination[".isUseToolTips"] = true;
}


	$tdatamst_Discrimination[".NCSearch"] = true;



$tdatamst_Discrimination[".shortTableName"] = "mst_Discrimination";
$tdatamst_Discrimination[".nSecOptions"] = 0;
$tdatamst_Discrimination[".recsPerRowPrint"] = 1;
$tdatamst_Discrimination[".mainTableOwnerID"] = "";
$tdatamst_Discrimination[".moveNext"] = 1;
$tdatamst_Discrimination[".entityType"] = 0;

$tdatamst_Discrimination[".strOriginalTableName"] = "mst_Discrimination";

	



$tdatamst_Discrimination[".showAddInPopup"] = false;

$tdatamst_Discrimination[".showEditInPopup"] = false;

$tdatamst_Discrimination[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_Discrimination[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_Discrimination[".fieldsForRegister"] = array();

$tdatamst_Discrimination[".listAjax"] = false;

	$tdatamst_Discrimination[".audit"] = true;

	$tdatamst_Discrimination[".locking"] = false;



$tdatamst_Discrimination[".list"] = true;

$tdatamst_Discrimination[".inlineEdit"] = true;


$tdatamst_Discrimination[".reorderRecordsByHeader"] = true;



$tdatamst_Discrimination[".inlineAdd"] = true;

$tdatamst_Discrimination[".import"] = true;

$tdatamst_Discrimination[".exportTo"] = true;


$tdatamst_Discrimination[".delete"] = true;

$tdatamst_Discrimination[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_Discrimination[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_Discrimination[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_Discrimination[".searchSaving"] = false;
//

$tdatamst_Discrimination[".showSearchPanel"] = true;
		$tdatamst_Discrimination[".flexibleSearch"] = true;

$tdatamst_Discrimination[".isUseAjaxSuggest"] = true;

$tdatamst_Discrimination[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_Discrimination[".ajaxCodeSnippetAdded"] = false;

$tdatamst_Discrimination[".buttonsAdded"] = false;

$tdatamst_Discrimination[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_Discrimination[".isUseTimeForSearch"] = false;





$tdatamst_Discrimination[".allSearchFields"] = array();
$tdatamst_Discrimination[".filterFields"] = array();
$tdatamst_Discrimination[".requiredSearchFields"] = array();

$tdatamst_Discrimination[".allSearchFields"][] = "cost";
	$tdatamst_Discrimination[".allSearchFields"][] = "destination";
	

$tdatamst_Discrimination[".googleLikeFields"] = array();
$tdatamst_Discrimination[".googleLikeFields"][] = "id";
$tdatamst_Discrimination[".googleLikeFields"][] = "val";
$tdatamst_Discrimination[".googleLikeFields"][] = "sort";
$tdatamst_Discrimination[".googleLikeFields"][] = "update_at";
$tdatamst_Discrimination[".googleLikeFields"][] = "update_by";
$tdatamst_Discrimination[".googleLikeFields"][] = "create_at";
$tdatamst_Discrimination[".googleLikeFields"][] = "create_by";
$tdatamst_Discrimination[".googleLikeFields"][] = "destination";
$tdatamst_Discrimination[".googleLikeFields"][] = "cost";


$tdatamst_Discrimination[".advSearchFields"] = array();
$tdatamst_Discrimination[".advSearchFields"][] = "cost";
$tdatamst_Discrimination[".advSearchFields"][] = "destination";

$tdatamst_Discrimination[".tableType"] = "list";

$tdatamst_Discrimination[".printerPageOrientation"] = 0;
$tdatamst_Discrimination[".nPrinterPageScale"] = 100;

$tdatamst_Discrimination[".nPrinterSplitRecords"] = 40;

$tdatamst_Discrimination[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_Discrimination[".geocodingEnabled"] = false;





$tdatamst_Discrimination[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_Discrimination[".pageSize"] = 20;

$tdatamst_Discrimination[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_Discrimination[".strOrderBy"] = $tstrOrderBy;

$tdatamst_Discrimination[".orderindexes"] = array();

$tdatamst_Discrimination[".sqlHead"] = "SELECT `id`,  `val`,  `sort`,  `update_at`,  `update_by`,  `create_at`,  `create_by`,  `destination`,  `cost`";
$tdatamst_Discrimination[".sqlFrom"] = "FROM `mst_Discrimination`";
$tdatamst_Discrimination[".sqlWhereExpr"] = "";
$tdatamst_Discrimination[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_Discrimination[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_Discrimination[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_Discrimination[".highlightSearchResults"] = true;

$tableKeysmst_Discrimination = array();
$tableKeysmst_Discrimination[] = "id";
$tdatamst_Discrimination[".Keys"] = $tableKeysmst_Discrimination;

$tdatamst_Discrimination[".listFields"] = array();
$tdatamst_Discrimination[".listFields"][] = "id";
$tdatamst_Discrimination[".listFields"][] = "val";
$tdatamst_Discrimination[".listFields"][] = "sort";
$tdatamst_Discrimination[".listFields"][] = "destination";
$tdatamst_Discrimination[".listFields"][] = "cost";
$tdatamst_Discrimination[".listFields"][] = "update_at";
$tdatamst_Discrimination[".listFields"][] = "update_by";
$tdatamst_Discrimination[".listFields"][] = "create_at";
$tdatamst_Discrimination[".listFields"][] = "create_by";

$tdatamst_Discrimination[".hideMobileList"] = array();


$tdatamst_Discrimination[".viewFields"] = array();

$tdatamst_Discrimination[".addFields"] = array();

$tdatamst_Discrimination[".masterListFields"] = array();
$tdatamst_Discrimination[".masterListFields"][] = "cost";
$tdatamst_Discrimination[".masterListFields"][] = "id";
$tdatamst_Discrimination[".masterListFields"][] = "val";
$tdatamst_Discrimination[".masterListFields"][] = "sort";
$tdatamst_Discrimination[".masterListFields"][] = "destination";
$tdatamst_Discrimination[".masterListFields"][] = "update_at";
$tdatamst_Discrimination[".masterListFields"][] = "update_by";
$tdatamst_Discrimination[".masterListFields"][] = "create_at";
$tdatamst_Discrimination[".masterListFields"][] = "create_by";

$tdatamst_Discrimination[".inlineAddFields"] = array();
$tdatamst_Discrimination[".inlineAddFields"][] = "val";
$tdatamst_Discrimination[".inlineAddFields"][] = "sort";
$tdatamst_Discrimination[".inlineAddFields"][] = "destination";
$tdatamst_Discrimination[".inlineAddFields"][] = "cost";

$tdatamst_Discrimination[".editFields"] = array();

$tdatamst_Discrimination[".inlineEditFields"] = array();
$tdatamst_Discrimination[".inlineEditFields"][] = "val";
$tdatamst_Discrimination[".inlineEditFields"][] = "sort";
$tdatamst_Discrimination[".inlineEditFields"][] = "destination";
$tdatamst_Discrimination[".inlineEditFields"][] = "cost";

$tdatamst_Discrimination[".updateSelectedFields"] = array();


$tdatamst_Discrimination[".exportFields"] = array();
$tdatamst_Discrimination[".exportFields"][] = "cost";
$tdatamst_Discrimination[".exportFields"][] = "id";
$tdatamst_Discrimination[".exportFields"][] = "val";
$tdatamst_Discrimination[".exportFields"][] = "sort";
$tdatamst_Discrimination[".exportFields"][] = "destination";
$tdatamst_Discrimination[".exportFields"][] = "update_at";
$tdatamst_Discrimination[".exportFields"][] = "update_by";
$tdatamst_Discrimination[".exportFields"][] = "create_at";
$tdatamst_Discrimination[".exportFields"][] = "create_by";

$tdatamst_Discrimination[".importFields"] = array();
$tdatamst_Discrimination[".importFields"][] = "id";
$tdatamst_Discrimination[".importFields"][] = "val";
$tdatamst_Discrimination[".importFields"][] = "sort";
$tdatamst_Discrimination[".importFields"][] = "update_at";
$tdatamst_Discrimination[".importFields"][] = "update_by";
$tdatamst_Discrimination[".importFields"][] = "create_at";
$tdatamst_Discrimination[".importFields"][] = "create_by";
$tdatamst_Discrimination[".importFields"][] = "destination";
$tdatamst_Discrimination[".importFields"][] = "cost";

$tdatamst_Discrimination[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_Discrimination";
	$fdata["Label"] = GetFieldLabel("mst_Discrimination","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_Discrimination["id"] = $fdata;
//	val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "val";
	$fdata["GoodName"] = "val";
	$fdata["ownerTable"] = "mst_Discrimination";
	$fdata["Label"] = GetFieldLabel("mst_Discrimination","val");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
	
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








	$tdatamst_Discrimination["val"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_Discrimination";
	$fdata["Label"] = GetFieldLabel("mst_Discrimination","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
	
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








	$tdatamst_Discrimination["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_Discrimination";
	$fdata["Label"] = GetFieldLabel("mst_Discrimination","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_Discrimination["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_Discrimination";
	$fdata["Label"] = GetFieldLabel("mst_Discrimination","update_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_Discrimination["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_Discrimination";
	$fdata["Label"] = GetFieldLabel("mst_Discrimination","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_Discrimination["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_Discrimination";
	$fdata["Label"] = GetFieldLabel("mst_Discrimination","create_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_Discrimination["create_by"] = $fdata;
//	destination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "destination";
	$fdata["GoodName"] = "destination";
	$fdata["ownerTable"] = "mst_Discrimination";
	$fdata["Label"] = GetFieldLabel("mst_Discrimination","destination");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "destination";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`destination`";

	
	
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
	$edata["LookupTable"] = "mst_destination";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	

	
	
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




	$tdatamst_Discrimination["destination"] = $fdata;
//	cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cost";
	$fdata["GoodName"] = "cost";
	$fdata["ownerTable"] = "mst_Discrimination";
	$fdata["Label"] = GetFieldLabel("mst_Discrimination","cost");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cost`";

	
	
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




	$tdatamst_Discrimination["cost"] = $fdata;


$tables_data["mst_Discrimination"]=&$tdatamst_Discrimination;
$field_labels["mst_Discrimination"] = &$fieldLabelsmst_Discrimination;
$fieldToolTips["mst_Discrimination"] = &$fieldToolTipsmst_Discrimination;
$placeHolders["mst_Discrimination"] = &$placeHoldersmst_Discrimination;
$page_titles["mst_Discrimination"] = &$pageTitlesmst_Discrimination;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_Discrimination"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_Discrimination"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_Discrimination()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `val`,  `sort`,  `update_at`,  `update_by`,  `create_at`,  `create_by`,  `destination`,  `cost`";
$proto0["m_strFrom"] = "FROM `mst_Discrimination`";
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
	"m_strTable" => "mst_Discrimination",
	"m_srcTableName" => "mst_Discrimination"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_Discrimination";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "val",
	"m_strTable" => "mst_Discrimination",
	"m_srcTableName" => "mst_Discrimination"
));

$proto8["m_sql"] = "`val`";
$proto8["m_srcTableName"] = "mst_Discrimination";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_Discrimination",
	"m_srcTableName" => "mst_Discrimination"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_Discrimination";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_Discrimination",
	"m_srcTableName" => "mst_Discrimination"
));

$proto12["m_sql"] = "`update_at`";
$proto12["m_srcTableName"] = "mst_Discrimination";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_Discrimination",
	"m_srcTableName" => "mst_Discrimination"
));

$proto14["m_sql"] = "`update_by`";
$proto14["m_srcTableName"] = "mst_Discrimination";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_Discrimination",
	"m_srcTableName" => "mst_Discrimination"
));

$proto16["m_sql"] = "`create_at`";
$proto16["m_srcTableName"] = "mst_Discrimination";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_Discrimination",
	"m_srcTableName" => "mst_Discrimination"
));

$proto18["m_sql"] = "`create_by`";
$proto18["m_srcTableName"] = "mst_Discrimination";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "destination",
	"m_strTable" => "mst_Discrimination",
	"m_srcTableName" => "mst_Discrimination"
));

$proto20["m_sql"] = "`destination`";
$proto20["m_srcTableName"] = "mst_Discrimination";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cost",
	"m_strTable" => "mst_Discrimination",
	"m_srcTableName" => "mst_Discrimination"
));

$proto22["m_sql"] = "`cost`";
$proto22["m_srcTableName"] = "mst_Discrimination";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "mst_Discrimination";
$proto25["m_srcTableName"] = "mst_Discrimination";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "val";
$proto25["m_columns"][] = "sort";
$proto25["m_columns"][] = "destination";
$proto25["m_columns"][] = "update_at";
$proto25["m_columns"][] = "update_by";
$proto25["m_columns"][] = "create_at";
$proto25["m_columns"][] = "create_by";
$proto25["m_columns"][] = "cost";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`mst_Discrimination`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "mst_Discrimination";
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
$proto0["m_srcTableName"]="mst_Discrimination";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_Discrimination = createSqlQuery_mst_Discrimination();


	
		;

									

$tdatamst_Discrimination[".sqlquery"] = $queryData_mst_Discrimination;

include_once(getabspath("include/mst_Discrimination_events.php"));
$tableEvents["mst_Discrimination"] = new eventclass_mst_Discrimination;
$tdatamst_Discrimination[".hasEvents"] = true;

?>