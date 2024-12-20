<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_Eoc_received_events = array();
	$tdatamst_Eoc_received_events[".truncateText"] = true;
	$tdatamst_Eoc_received_events[".NumberOfChars"] = 80;
	$tdatamst_Eoc_received_events[".ShortName"] = "mst_Eoc_received_events";
	$tdatamst_Eoc_received_events[".OwnerID"] = "";
	$tdatamst_Eoc_received_events[".OriginalTable"] = "mst_Eoc_received_events";

//	field labels
$fieldLabelsmst_Eoc_received_events = array();
$fieldToolTipsmst_Eoc_received_events = array();
$pageTitlesmst_Eoc_received_events = array();
$placeHoldersmst_Eoc_received_events = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_Eoc_received_events["Japanese"] = array();
	$fieldToolTipsmst_Eoc_received_events["Japanese"] = array();
	$placeHoldersmst_Eoc_received_events["Japanese"] = array();
	$pageTitlesmst_Eoc_received_events["Japanese"] = array();
	$fieldLabelsmst_Eoc_received_events["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_Eoc_received_events["Japanese"]["id"] = "";
	$placeHoldersmst_Eoc_received_events["Japanese"]["id"] = "";
	$fieldLabelsmst_Eoc_received_events["Japanese"]["name"] = "名称";
	$fieldToolTipsmst_Eoc_received_events["Japanese"]["name"] = "";
	$placeHoldersmst_Eoc_received_events["Japanese"]["name"] = "";
	$fieldLabelsmst_Eoc_received_events["Japanese"]["sort"] = "ソート";
	$fieldToolTipsmst_Eoc_received_events["Japanese"]["sort"] = "";
	$placeHoldersmst_Eoc_received_events["Japanese"]["sort"] = "";
	$fieldLabelsmst_Eoc_received_events["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_Eoc_received_events["Japanese"]["create_by"] = "";
	$placeHoldersmst_Eoc_received_events["Japanese"]["create_by"] = "";
	$fieldLabelsmst_Eoc_received_events["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_Eoc_received_events["Japanese"]["create_at"] = "";
	$placeHoldersmst_Eoc_received_events["Japanese"]["create_at"] = "";
	$fieldLabelsmst_Eoc_received_events["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_Eoc_received_events["Japanese"]["update_by"] = "";
	$placeHoldersmst_Eoc_received_events["Japanese"]["update_by"] = "";
	$fieldLabelsmst_Eoc_received_events["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_Eoc_received_events["Japanese"]["update_at"] = "";
	$placeHoldersmst_Eoc_received_events["Japanese"]["update_at"] = "";
	if (count($fieldToolTipsmst_Eoc_received_events["Japanese"]))
		$tdatamst_Eoc_received_events[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_Eoc_received_events[""] = array();
	$fieldToolTipsmst_Eoc_received_events[""] = array();
	$placeHoldersmst_Eoc_received_events[""] = array();
	$pageTitlesmst_Eoc_received_events[""] = array();
	$fieldLabelsmst_Eoc_received_events[""]["id"] = "Id";
	$fieldToolTipsmst_Eoc_received_events[""]["id"] = "";
	$placeHoldersmst_Eoc_received_events[""]["id"] = "";
	$fieldLabelsmst_Eoc_received_events[""]["name"] = "Name";
	$fieldToolTipsmst_Eoc_received_events[""]["name"] = "";
	$placeHoldersmst_Eoc_received_events[""]["name"] = "";
	$fieldLabelsmst_Eoc_received_events[""]["sort"] = "Sort";
	$fieldToolTipsmst_Eoc_received_events[""]["sort"] = "";
	$placeHoldersmst_Eoc_received_events[""]["sort"] = "";
	$fieldLabelsmst_Eoc_received_events[""]["create_by"] = "Create By";
	$fieldToolTipsmst_Eoc_received_events[""]["create_by"] = "";
	$placeHoldersmst_Eoc_received_events[""]["create_by"] = "";
	$fieldLabelsmst_Eoc_received_events[""]["create_at"] = "Create At";
	$fieldToolTipsmst_Eoc_received_events[""]["create_at"] = "";
	$placeHoldersmst_Eoc_received_events[""]["create_at"] = "";
	$fieldLabelsmst_Eoc_received_events[""]["update_by"] = "Update By";
	$fieldToolTipsmst_Eoc_received_events[""]["update_by"] = "";
	$placeHoldersmst_Eoc_received_events[""]["update_by"] = "";
	$fieldLabelsmst_Eoc_received_events[""]["update_at"] = "Update At";
	$fieldToolTipsmst_Eoc_received_events[""]["update_at"] = "";
	$placeHoldersmst_Eoc_received_events[""]["update_at"] = "";
	if (count($fieldToolTipsmst_Eoc_received_events[""]))
		$tdatamst_Eoc_received_events[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_Eoc_received_events["English"] = array();
	$fieldToolTipsmst_Eoc_received_events["English"] = array();
	$placeHoldersmst_Eoc_received_events["English"] = array();
	$pageTitlesmst_Eoc_received_events["English"] = array();
	$fieldLabelsmst_Eoc_received_events["English"]["id"] = "Id";
	$fieldToolTipsmst_Eoc_received_events["English"]["id"] = "";
	$placeHoldersmst_Eoc_received_events["English"]["id"] = "";
	$fieldLabelsmst_Eoc_received_events["English"]["name"] = "Name";
	$fieldToolTipsmst_Eoc_received_events["English"]["name"] = "";
	$placeHoldersmst_Eoc_received_events["English"]["name"] = "";
	$fieldLabelsmst_Eoc_received_events["English"]["sort"] = "Sort";
	$fieldToolTipsmst_Eoc_received_events["English"]["sort"] = "";
	$placeHoldersmst_Eoc_received_events["English"]["sort"] = "";
	$fieldLabelsmst_Eoc_received_events["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_Eoc_received_events["English"]["create_by"] = "";
	$placeHoldersmst_Eoc_received_events["English"]["create_by"] = "";
	$fieldLabelsmst_Eoc_received_events["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_Eoc_received_events["English"]["create_at"] = "";
	$placeHoldersmst_Eoc_received_events["English"]["create_at"] = "";
	$fieldLabelsmst_Eoc_received_events["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_Eoc_received_events["English"]["update_by"] = "";
	$placeHoldersmst_Eoc_received_events["English"]["update_by"] = "";
	$fieldLabelsmst_Eoc_received_events["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_Eoc_received_events["English"]["update_at"] = "";
	$placeHoldersmst_Eoc_received_events["English"]["update_at"] = "";
	if (count($fieldToolTipsmst_Eoc_received_events["English"]))
		$tdatamst_Eoc_received_events[".isUseToolTips"] = true;
}


	$tdatamst_Eoc_received_events[".NCSearch"] = true;



$tdatamst_Eoc_received_events[".shortTableName"] = "mst_Eoc_received_events";
$tdatamst_Eoc_received_events[".nSecOptions"] = 0;
$tdatamst_Eoc_received_events[".recsPerRowPrint"] = 1;
$tdatamst_Eoc_received_events[".mainTableOwnerID"] = "";
$tdatamst_Eoc_received_events[".moveNext"] = 1;
$tdatamst_Eoc_received_events[".entityType"] = 0;

$tdatamst_Eoc_received_events[".strOriginalTableName"] = "mst_Eoc_received_events";

	



$tdatamst_Eoc_received_events[".showAddInPopup"] = false;

$tdatamst_Eoc_received_events[".showEditInPopup"] = false;

$tdatamst_Eoc_received_events[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_Eoc_received_events[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_Eoc_received_events[".fieldsForRegister"] = array();

$tdatamst_Eoc_received_events[".listAjax"] = false;

	$tdatamst_Eoc_received_events[".audit"] = true;

	$tdatamst_Eoc_received_events[".locking"] = false;



$tdatamst_Eoc_received_events[".list"] = true;

$tdatamst_Eoc_received_events[".inlineEdit"] = true;


$tdatamst_Eoc_received_events[".reorderRecordsByHeader"] = true;



$tdatamst_Eoc_received_events[".inlineAdd"] = true;

$tdatamst_Eoc_received_events[".import"] = true;

$tdatamst_Eoc_received_events[".exportTo"] = true;


$tdatamst_Eoc_received_events[".delete"] = true;

$tdatamst_Eoc_received_events[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_Eoc_received_events[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_Eoc_received_events[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_Eoc_received_events[".searchSaving"] = false;
//

$tdatamst_Eoc_received_events[".showSearchPanel"] = true;
		$tdatamst_Eoc_received_events[".flexibleSearch"] = true;

$tdatamst_Eoc_received_events[".isUseAjaxSuggest"] = true;

$tdatamst_Eoc_received_events[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_Eoc_received_events[".ajaxCodeSnippetAdded"] = false;

$tdatamst_Eoc_received_events[".buttonsAdded"] = false;

$tdatamst_Eoc_received_events[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_Eoc_received_events[".isUseTimeForSearch"] = false;




$tdatamst_Eoc_received_events[".detailsLinksOnList"] = "1";

$tdatamst_Eoc_received_events[".allSearchFields"] = array();
$tdatamst_Eoc_received_events[".filterFields"] = array();
$tdatamst_Eoc_received_events[".requiredSearchFields"] = array();



$tdatamst_Eoc_received_events[".googleLikeFields"] = array();
$tdatamst_Eoc_received_events[".googleLikeFields"][] = "id";
$tdatamst_Eoc_received_events[".googleLikeFields"][] = "name";
$tdatamst_Eoc_received_events[".googleLikeFields"][] = "sort";
$tdatamst_Eoc_received_events[".googleLikeFields"][] = "create_by";
$tdatamst_Eoc_received_events[".googleLikeFields"][] = "create_at";
$tdatamst_Eoc_received_events[".googleLikeFields"][] = "update_by";
$tdatamst_Eoc_received_events[".googleLikeFields"][] = "update_at";



$tdatamst_Eoc_received_events[".tableType"] = "list";

$tdatamst_Eoc_received_events[".printerPageOrientation"] = 0;
$tdatamst_Eoc_received_events[".nPrinterPageScale"] = 100;

$tdatamst_Eoc_received_events[".nPrinterSplitRecords"] = 40;

$tdatamst_Eoc_received_events[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_Eoc_received_events[".geocodingEnabled"] = false;





$tdatamst_Eoc_received_events[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_Eoc_received_events[".pageSize"] = 20;

$tdatamst_Eoc_received_events[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_Eoc_received_events[".strOrderBy"] = $tstrOrderBy;

$tdatamst_Eoc_received_events[".orderindexes"] = array();
$tdatamst_Eoc_received_events[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_Eoc_received_events[".sqlHead"] = "SELECT `id`,  `name`,  `sort`,  `create_by`,  `create_at`,  `update_by`,  `update_at`";
$tdatamst_Eoc_received_events[".sqlFrom"] = "FROM `mst_Eoc_received_events`";
$tdatamst_Eoc_received_events[".sqlWhereExpr"] = "";
$tdatamst_Eoc_received_events[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_Eoc_received_events[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_Eoc_received_events[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_Eoc_received_events[".highlightSearchResults"] = true;

$tableKeysmst_Eoc_received_events = array();
$tableKeysmst_Eoc_received_events[] = "id";
$tdatamst_Eoc_received_events[".Keys"] = $tableKeysmst_Eoc_received_events;

$tdatamst_Eoc_received_events[".listFields"] = array();
$tdatamst_Eoc_received_events[".listFields"][] = "id";
$tdatamst_Eoc_received_events[".listFields"][] = "name";
$tdatamst_Eoc_received_events[".listFields"][] = "sort";
$tdatamst_Eoc_received_events[".listFields"][] = "create_by";
$tdatamst_Eoc_received_events[".listFields"][] = "create_at";
$tdatamst_Eoc_received_events[".listFields"][] = "update_by";
$tdatamst_Eoc_received_events[".listFields"][] = "update_at";

$tdatamst_Eoc_received_events[".hideMobileList"] = array();


$tdatamst_Eoc_received_events[".viewFields"] = array();

$tdatamst_Eoc_received_events[".addFields"] = array();

$tdatamst_Eoc_received_events[".masterListFields"] = array();
$tdatamst_Eoc_received_events[".masterListFields"][] = "id";
$tdatamst_Eoc_received_events[".masterListFields"][] = "name";
$tdatamst_Eoc_received_events[".masterListFields"][] = "sort";
$tdatamst_Eoc_received_events[".masterListFields"][] = "create_by";
$tdatamst_Eoc_received_events[".masterListFields"][] = "create_at";
$tdatamst_Eoc_received_events[".masterListFields"][] = "update_by";
$tdatamst_Eoc_received_events[".masterListFields"][] = "update_at";

$tdatamst_Eoc_received_events[".inlineAddFields"] = array();
$tdatamst_Eoc_received_events[".inlineAddFields"][] = "name";
$tdatamst_Eoc_received_events[".inlineAddFields"][] = "sort";

$tdatamst_Eoc_received_events[".editFields"] = array();

$tdatamst_Eoc_received_events[".inlineEditFields"] = array();
$tdatamst_Eoc_received_events[".inlineEditFields"][] = "name";
$tdatamst_Eoc_received_events[".inlineEditFields"][] = "sort";

$tdatamst_Eoc_received_events[".updateSelectedFields"] = array();


$tdatamst_Eoc_received_events[".exportFields"] = array();
$tdatamst_Eoc_received_events[".exportFields"][] = "id";
$tdatamst_Eoc_received_events[".exportFields"][] = "name";
$tdatamst_Eoc_received_events[".exportFields"][] = "sort";
$tdatamst_Eoc_received_events[".exportFields"][] = "create_by";
$tdatamst_Eoc_received_events[".exportFields"][] = "create_at";
$tdatamst_Eoc_received_events[".exportFields"][] = "update_by";
$tdatamst_Eoc_received_events[".exportFields"][] = "update_at";

$tdatamst_Eoc_received_events[".importFields"] = array();

$tdatamst_Eoc_received_events[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_Eoc_received_events";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_events","id");
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








	$tdatamst_Eoc_received_events["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_Eoc_received_events";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_events","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
	
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








	$tdatamst_Eoc_received_events["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_Eoc_received_events";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_events","sort");
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








	$tdatamst_Eoc_received_events["sort"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_Eoc_received_events";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_events","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
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








	$tdatamst_Eoc_received_events["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_Eoc_received_events";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_events","create_at");
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








	$tdatamst_Eoc_received_events["create_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_Eoc_received_events";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_events","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
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








	$tdatamst_Eoc_received_events["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_Eoc_received_events";
	$fdata["Label"] = GetFieldLabel("mst_Eoc_received_events","update_at");
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








	$tdatamst_Eoc_received_events["update_at"] = $fdata;


$tables_data["mst_Eoc_received_events"]=&$tdatamst_Eoc_received_events;
$field_labels["mst_Eoc_received_events"] = &$fieldLabelsmst_Eoc_received_events;
$fieldToolTips["mst_Eoc_received_events"] = &$fieldToolTipsmst_Eoc_received_events;
$placeHolders["mst_Eoc_received_events"] = &$placeHoldersmst_Eoc_received_events;
$page_titles["mst_Eoc_received_events"] = &$pageTitlesmst_Eoc_received_events;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_Eoc_received_events"] = array();
//	mst_Eoc_received_event_contents
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="mst_Eoc_received_event_contents";
		$detailsParam["dOriginalTable"] = "mst_Eoc_received_event_contents";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mst_Eoc_received_event_contents";
	$detailsParam["dCaptionTable"] = GetTableCaption("mst_Eoc_received_event_contents");
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
		
	$detailsTablesData["mst_Eoc_received_events"][$dIndex] = $detailsParam;

	
		$detailsTablesData["mst_Eoc_received_events"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["mst_Eoc_received_events"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["mst_Eoc_received_events"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["mst_Eoc_received_events"][$dIndex]["detailKeys"][]="event_id";

// tables which are master tables for current table (detail)
$masterTablesData["mst_Eoc_received_events"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_Eoc_received_events()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `sort`,  `create_by`,  `create_at`,  `update_by`,  `update_at`";
$proto0["m_strFrom"] = "FROM `mst_Eoc_received_events`";
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
	"m_strTable" => "mst_Eoc_received_events",
	"m_srcTableName" => "mst_Eoc_received_events"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_Eoc_received_events";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_Eoc_received_events",
	"m_srcTableName" => "mst_Eoc_received_events"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_Eoc_received_events";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_Eoc_received_events",
	"m_srcTableName" => "mst_Eoc_received_events"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_Eoc_received_events";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_Eoc_received_events",
	"m_srcTableName" => "mst_Eoc_received_events"
));

$proto12["m_sql"] = "`create_by`";
$proto12["m_srcTableName"] = "mst_Eoc_received_events";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_Eoc_received_events",
	"m_srcTableName" => "mst_Eoc_received_events"
));

$proto14["m_sql"] = "`create_at`";
$proto14["m_srcTableName"] = "mst_Eoc_received_events";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_Eoc_received_events",
	"m_srcTableName" => "mst_Eoc_received_events"
));

$proto16["m_sql"] = "`update_by`";
$proto16["m_srcTableName"] = "mst_Eoc_received_events";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_Eoc_received_events",
	"m_srcTableName" => "mst_Eoc_received_events"
));

$proto18["m_sql"] = "`update_at`";
$proto18["m_srcTableName"] = "mst_Eoc_received_events";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_Eoc_received_events";
$proto21["m_srcTableName"] = "mst_Eoc_received_events";
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
$proto20["m_sql"] = "`mst_Eoc_received_events`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_Eoc_received_events";
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
	"m_strTable" => "mst_Eoc_received_events",
	"m_srcTableName" => "mst_Eoc_received_events"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_Eoc_received_events";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_Eoc_received_events = createSqlQuery_mst_Eoc_received_events();


	
		;

							

$tdatamst_Eoc_received_events[".sqlquery"] = $queryData_mst_Eoc_received_events;

include_once(getabspath("include/mst_Eoc_received_events_events.php"));
$tableEvents["mst_Eoc_received_events"] = new eventclass_mst_Eoc_received_events;
$tdatamst_Eoc_received_events[".hasEvents"] = true;

?>