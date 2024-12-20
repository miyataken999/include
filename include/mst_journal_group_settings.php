<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_journal_group = array();
	$tdatamst_journal_group[".truncateText"] = true;
	$tdatamst_journal_group[".NumberOfChars"] = 80;
	$tdatamst_journal_group[".ShortName"] = "mst_journal_group";
	$tdatamst_journal_group[".OwnerID"] = "";
	$tdatamst_journal_group[".OriginalTable"] = "mst_journal_group";

//	field labels
$fieldLabelsmst_journal_group = array();
$fieldToolTipsmst_journal_group = array();
$pageTitlesmst_journal_group = array();
$placeHoldersmst_journal_group = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_journal_group["Japanese"] = array();
	$fieldToolTipsmst_journal_group["Japanese"] = array();
	$placeHoldersmst_journal_group["Japanese"] = array();
	$pageTitlesmst_journal_group["Japanese"] = array();
	$fieldLabelsmst_journal_group["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_journal_group["Japanese"]["id"] = "";
	$placeHoldersmst_journal_group["Japanese"]["id"] = "";
	$fieldLabelsmst_journal_group["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_journal_group["Japanese"]["name"] = "";
	$placeHoldersmst_journal_group["Japanese"]["name"] = "";
	$fieldLabelsmst_journal_group["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_journal_group["Japanese"]["sort"] = "";
	$placeHoldersmst_journal_group["Japanese"]["sort"] = "";
	$fieldLabelsmst_journal_group["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_journal_group["Japanese"]["update_by"] = "";
	$placeHoldersmst_journal_group["Japanese"]["update_by"] = "";
	$fieldLabelsmst_journal_group["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_journal_group["Japanese"]["update_at"] = "";
	$placeHoldersmst_journal_group["Japanese"]["update_at"] = "";
	$fieldLabelsmst_journal_group["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_journal_group["Japanese"]["create_by"] = "";
	$placeHoldersmst_journal_group["Japanese"]["create_by"] = "";
	$fieldLabelsmst_journal_group["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_journal_group["Japanese"]["create_at"] = "";
	$placeHoldersmst_journal_group["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_journal_group["Japanese"]))
		$tdatamst_journal_group[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_journal_group[""] = array();
	$fieldToolTipsmst_journal_group[""] = array();
	$placeHoldersmst_journal_group[""] = array();
	$pageTitlesmst_journal_group[""] = array();
	$fieldLabelsmst_journal_group[""]["id"] = "Id";
	$fieldToolTipsmst_journal_group[""]["id"] = "";
	$placeHoldersmst_journal_group[""]["id"] = "";
	$fieldLabelsmst_journal_group[""]["name"] = "Name";
	$fieldToolTipsmst_journal_group[""]["name"] = "";
	$placeHoldersmst_journal_group[""]["name"] = "";
	$fieldLabelsmst_journal_group[""]["sort"] = "Sort";
	$fieldToolTipsmst_journal_group[""]["sort"] = "";
	$placeHoldersmst_journal_group[""]["sort"] = "";
	$fieldLabelsmst_journal_group[""]["update_by"] = "Update By";
	$fieldToolTipsmst_journal_group[""]["update_by"] = "";
	$placeHoldersmst_journal_group[""]["update_by"] = "";
	$fieldLabelsmst_journal_group[""]["update_at"] = "Update At";
	$fieldToolTipsmst_journal_group[""]["update_at"] = "";
	$placeHoldersmst_journal_group[""]["update_at"] = "";
	$fieldLabelsmst_journal_group[""]["create_by"] = "Create By";
	$fieldToolTipsmst_journal_group[""]["create_by"] = "";
	$placeHoldersmst_journal_group[""]["create_by"] = "";
	$fieldLabelsmst_journal_group[""]["create_at"] = "Create At";
	$fieldToolTipsmst_journal_group[""]["create_at"] = "";
	$placeHoldersmst_journal_group[""]["create_at"] = "";
	if (count($fieldToolTipsmst_journal_group[""]))
		$tdatamst_journal_group[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_journal_group["English"] = array();
	$fieldToolTipsmst_journal_group["English"] = array();
	$placeHoldersmst_journal_group["English"] = array();
	$pageTitlesmst_journal_group["English"] = array();
	$fieldLabelsmst_journal_group["English"]["id"] = "Id";
	$fieldToolTipsmst_journal_group["English"]["id"] = "";
	$placeHoldersmst_journal_group["English"]["id"] = "";
	$fieldLabelsmst_journal_group["English"]["name"] = "Name";
	$fieldToolTipsmst_journal_group["English"]["name"] = "";
	$placeHoldersmst_journal_group["English"]["name"] = "";
	$fieldLabelsmst_journal_group["English"]["sort"] = "Sort";
	$fieldToolTipsmst_journal_group["English"]["sort"] = "";
	$placeHoldersmst_journal_group["English"]["sort"] = "";
	$fieldLabelsmst_journal_group["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_journal_group["English"]["update_by"] = "";
	$placeHoldersmst_journal_group["English"]["update_by"] = "";
	$fieldLabelsmst_journal_group["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_journal_group["English"]["update_at"] = "";
	$placeHoldersmst_journal_group["English"]["update_at"] = "";
	$fieldLabelsmst_journal_group["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_journal_group["English"]["create_by"] = "";
	$placeHoldersmst_journal_group["English"]["create_by"] = "";
	$fieldLabelsmst_journal_group["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_journal_group["English"]["create_at"] = "";
	$placeHoldersmst_journal_group["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_journal_group["English"]))
		$tdatamst_journal_group[".isUseToolTips"] = true;
}


	$tdatamst_journal_group[".NCSearch"] = true;



$tdatamst_journal_group[".shortTableName"] = "mst_journal_group";
$tdatamst_journal_group[".nSecOptions"] = 0;
$tdatamst_journal_group[".recsPerRowPrint"] = 1;
$tdatamst_journal_group[".mainTableOwnerID"] = "";
$tdatamst_journal_group[".moveNext"] = 1;
$tdatamst_journal_group[".entityType"] = 0;

$tdatamst_journal_group[".strOriginalTableName"] = "mst_journal_group";

	



$tdatamst_journal_group[".showAddInPopup"] = false;

$tdatamst_journal_group[".showEditInPopup"] = false;

$tdatamst_journal_group[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_journal_group[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_journal_group[".fieldsForRegister"] = array();

$tdatamst_journal_group[".listAjax"] = false;

	$tdatamst_journal_group[".audit"] = true;

	$tdatamst_journal_group[".locking"] = false;



$tdatamst_journal_group[".list"] = true;

$tdatamst_journal_group[".inlineEdit"] = true;


$tdatamst_journal_group[".reorderRecordsByHeader"] = true;



$tdatamst_journal_group[".inlineAdd"] = true;

$tdatamst_journal_group[".import"] = true;

$tdatamst_journal_group[".exportTo"] = true;


$tdatamst_journal_group[".delete"] = true;

$tdatamst_journal_group[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_journal_group[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_journal_group[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_journal_group[".searchSaving"] = false;
//

$tdatamst_journal_group[".showSearchPanel"] = true;
		$tdatamst_journal_group[".flexibleSearch"] = true;

$tdatamst_journal_group[".isUseAjaxSuggest"] = true;

$tdatamst_journal_group[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_journal_group[".ajaxCodeSnippetAdded"] = false;

$tdatamst_journal_group[".buttonsAdded"] = false;

$tdatamst_journal_group[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_journal_group[".isUseTimeForSearch"] = false;





$tdatamst_journal_group[".allSearchFields"] = array();
$tdatamst_journal_group[".filterFields"] = array();
$tdatamst_journal_group[".requiredSearchFields"] = array();



$tdatamst_journal_group[".googleLikeFields"] = array();
$tdatamst_journal_group[".googleLikeFields"][] = "id";
$tdatamst_journal_group[".googleLikeFields"][] = "name";
$tdatamst_journal_group[".googleLikeFields"][] = "sort";
$tdatamst_journal_group[".googleLikeFields"][] = "update_by";
$tdatamst_journal_group[".googleLikeFields"][] = "update_at";
$tdatamst_journal_group[".googleLikeFields"][] = "create_by";
$tdatamst_journal_group[".googleLikeFields"][] = "create_at";



$tdatamst_journal_group[".tableType"] = "list";

$tdatamst_journal_group[".printerPageOrientation"] = 0;
$tdatamst_journal_group[".nPrinterPageScale"] = 100;

$tdatamst_journal_group[".nPrinterSplitRecords"] = 40;

$tdatamst_journal_group[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_journal_group[".geocodingEnabled"] = false;





$tdatamst_journal_group[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_journal_group[".pageSize"] = 20;

$tdatamst_journal_group[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_journal_group[".strOrderBy"] = $tstrOrderBy;

$tdatamst_journal_group[".orderindexes"] = array();

$tdatamst_journal_group[".sqlHead"] = "SELECT id,  	name,  	sort,  	update_by,  	update_at,  	create_by,  	create_at";
$tdatamst_journal_group[".sqlFrom"] = "FROM mst_journal_group";
$tdatamst_journal_group[".sqlWhereExpr"] = "";
$tdatamst_journal_group[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_journal_group[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_journal_group[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_journal_group[".highlightSearchResults"] = true;

$tableKeysmst_journal_group = array();
$tableKeysmst_journal_group[] = "id";
$tdatamst_journal_group[".Keys"] = $tableKeysmst_journal_group;

$tdatamst_journal_group[".listFields"] = array();
$tdatamst_journal_group[".listFields"][] = "id";
$tdatamst_journal_group[".listFields"][] = "name";
$tdatamst_journal_group[".listFields"][] = "sort";
$tdatamst_journal_group[".listFields"][] = "update_by";
$tdatamst_journal_group[".listFields"][] = "update_at";
$tdatamst_journal_group[".listFields"][] = "create_by";
$tdatamst_journal_group[".listFields"][] = "create_at";

$tdatamst_journal_group[".hideMobileList"] = array();


$tdatamst_journal_group[".viewFields"] = array();

$tdatamst_journal_group[".addFields"] = array();

$tdatamst_journal_group[".masterListFields"] = array();
$tdatamst_journal_group[".masterListFields"][] = "id";
$tdatamst_journal_group[".masterListFields"][] = "name";
$tdatamst_journal_group[".masterListFields"][] = "sort";
$tdatamst_journal_group[".masterListFields"][] = "update_by";
$tdatamst_journal_group[".masterListFields"][] = "update_at";
$tdatamst_journal_group[".masterListFields"][] = "create_by";
$tdatamst_journal_group[".masterListFields"][] = "create_at";

$tdatamst_journal_group[".inlineAddFields"] = array();
$tdatamst_journal_group[".inlineAddFields"][] = "name";
$tdatamst_journal_group[".inlineAddFields"][] = "sort";

$tdatamst_journal_group[".editFields"] = array();

$tdatamst_journal_group[".inlineEditFields"] = array();
$tdatamst_journal_group[".inlineEditFields"][] = "name";
$tdatamst_journal_group[".inlineEditFields"][] = "sort";

$tdatamst_journal_group[".updateSelectedFields"] = array();


$tdatamst_journal_group[".exportFields"] = array();
$tdatamst_journal_group[".exportFields"][] = "id";
$tdatamst_journal_group[".exportFields"][] = "name";
$tdatamst_journal_group[".exportFields"][] = "sort";
$tdatamst_journal_group[".exportFields"][] = "update_by";
$tdatamst_journal_group[".exportFields"][] = "update_at";
$tdatamst_journal_group[".exportFields"][] = "create_by";
$tdatamst_journal_group[".exportFields"][] = "create_at";

$tdatamst_journal_group[".importFields"] = array();
$tdatamst_journal_group[".importFields"][] = "id";
$tdatamst_journal_group[".importFields"][] = "name";
$tdatamst_journal_group[".importFields"][] = "sort";

$tdatamst_journal_group[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_journal_group";
	$fdata["Label"] = GetFieldLabel("mst_journal_group","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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








	$tdatamst_journal_group["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_journal_group";
	$fdata["Label"] = GetFieldLabel("mst_journal_group","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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








	$tdatamst_journal_group["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_journal_group";
	$fdata["Label"] = GetFieldLabel("mst_journal_group","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sort";

	
	
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








	$tdatamst_journal_group["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_journal_group";
	$fdata["Label"] = GetFieldLabel("mst_journal_group","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_by";

	
	
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








	$tdatamst_journal_group["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_journal_group";
	$fdata["Label"] = GetFieldLabel("mst_journal_group","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_at";

	
	
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








	$tdatamst_journal_group["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_journal_group";
	$fdata["Label"] = GetFieldLabel("mst_journal_group","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_by";

	
	
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








	$tdatamst_journal_group["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_journal_group";
	$fdata["Label"] = GetFieldLabel("mst_journal_group","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_at";

	
	
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








	$tdatamst_journal_group["create_at"] = $fdata;


$tables_data["mst_journal_group"]=&$tdatamst_journal_group;
$field_labels["mst_journal_group"] = &$fieldLabelsmst_journal_group;
$fieldToolTips["mst_journal_group"] = &$fieldToolTipsmst_journal_group;
$placeHolders["mst_journal_group"] = &$placeHoldersmst_journal_group;
$page_titles["mst_journal_group"] = &$pageTitlesmst_journal_group;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_journal_group"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_journal_group"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_journal_group()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	sort,  	update_by,  	update_at,  	create_by,  	create_at";
$proto0["m_strFrom"] = "FROM mst_journal_group";
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
	"m_strTable" => "mst_journal_group",
	"m_srcTableName" => "mst_journal_group"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_journal_group";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_journal_group",
	"m_srcTableName" => "mst_journal_group"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_journal_group";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_journal_group",
	"m_srcTableName" => "mst_journal_group"
));

$proto10["m_sql"] = "sort";
$proto10["m_srcTableName"] = "mst_journal_group";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_journal_group",
	"m_srcTableName" => "mst_journal_group"
));

$proto12["m_sql"] = "update_by";
$proto12["m_srcTableName"] = "mst_journal_group";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_journal_group",
	"m_srcTableName" => "mst_journal_group"
));

$proto14["m_sql"] = "update_at";
$proto14["m_srcTableName"] = "mst_journal_group";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_journal_group",
	"m_srcTableName" => "mst_journal_group"
));

$proto16["m_sql"] = "create_by";
$proto16["m_srcTableName"] = "mst_journal_group";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_journal_group",
	"m_srcTableName" => "mst_journal_group"
));

$proto18["m_sql"] = "create_at";
$proto18["m_srcTableName"] = "mst_journal_group";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_journal_group";
$proto21["m_srcTableName"] = "mst_journal_group";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "sort";
$proto21["m_columns"][] = "update_by";
$proto21["m_columns"][] = "update_at";
$proto21["m_columns"][] = "create_by";
$proto21["m_columns"][] = "create_at";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "mst_journal_group";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_journal_group";
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
$proto0["m_srcTableName"]="mst_journal_group";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_journal_group = createSqlQuery_mst_journal_group();


	
		;

							

$tdatamst_journal_group[".sqlquery"] = $queryData_mst_journal_group;

$tableEvents["mst_journal_group"] = new eventsBase;
$tdatamst_journal_group[".hasEvents"] = false;

?>