<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_destination = array();
	$tdatamst_destination[".truncateText"] = true;
	$tdatamst_destination[".NumberOfChars"] = 80;
	$tdatamst_destination[".ShortName"] = "mst_destination";
	$tdatamst_destination[".OwnerID"] = "";
	$tdatamst_destination[".OriginalTable"] = "mst_destination";

//	field labels
$fieldLabelsmst_destination = array();
$fieldToolTipsmst_destination = array();
$pageTitlesmst_destination = array();
$placeHoldersmst_destination = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_destination["Japanese"] = array();
	$fieldToolTipsmst_destination["Japanese"] = array();
	$placeHoldersmst_destination["Japanese"] = array();
	$pageTitlesmst_destination["Japanese"] = array();
	$fieldLabelsmst_destination["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_destination["Japanese"]["id"] = "";
	$placeHoldersmst_destination["Japanese"]["id"] = "";
	$fieldLabelsmst_destination["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_destination["Japanese"]["name"] = "";
	$placeHoldersmst_destination["Japanese"]["name"] = "";
	$fieldLabelsmst_destination["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_destination["Japanese"]["sort"] = "";
	$placeHoldersmst_destination["Japanese"]["sort"] = "";
	$fieldLabelsmst_destination["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_destination["Japanese"]["create_by"] = "";
	$placeHoldersmst_destination["Japanese"]["create_by"] = "";
	$fieldLabelsmst_destination["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_destination["Japanese"]["create_at"] = "";
	$placeHoldersmst_destination["Japanese"]["create_at"] = "";
	$fieldLabelsmst_destination["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_destination["Japanese"]["update_by"] = "";
	$placeHoldersmst_destination["Japanese"]["update_by"] = "";
	$fieldLabelsmst_destination["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_destination["Japanese"]["update_at"] = "";
	$placeHoldersmst_destination["Japanese"]["update_at"] = "";
	if (count($fieldToolTipsmst_destination["Japanese"]))
		$tdatamst_destination[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_destination[""] = array();
	$fieldToolTipsmst_destination[""] = array();
	$placeHoldersmst_destination[""] = array();
	$pageTitlesmst_destination[""] = array();
	$fieldLabelsmst_destination[""]["id"] = "Id";
	$fieldToolTipsmst_destination[""]["id"] = "";
	$placeHoldersmst_destination[""]["id"] = "";
	$fieldLabelsmst_destination[""]["name"] = "Name";
	$fieldToolTipsmst_destination[""]["name"] = "";
	$placeHoldersmst_destination[""]["name"] = "";
	$fieldLabelsmst_destination[""]["sort"] = "Sort";
	$fieldToolTipsmst_destination[""]["sort"] = "";
	$placeHoldersmst_destination[""]["sort"] = "";
	$fieldLabelsmst_destination[""]["create_by"] = "Create By";
	$fieldToolTipsmst_destination[""]["create_by"] = "";
	$placeHoldersmst_destination[""]["create_by"] = "";
	$fieldLabelsmst_destination[""]["create_at"] = "Create At";
	$fieldToolTipsmst_destination[""]["create_at"] = "";
	$placeHoldersmst_destination[""]["create_at"] = "";
	$fieldLabelsmst_destination[""]["update_by"] = "Update By";
	$fieldToolTipsmst_destination[""]["update_by"] = "";
	$placeHoldersmst_destination[""]["update_by"] = "";
	$fieldLabelsmst_destination[""]["update_at"] = "Update At";
	$fieldToolTipsmst_destination[""]["update_at"] = "";
	$placeHoldersmst_destination[""]["update_at"] = "";
	if (count($fieldToolTipsmst_destination[""]))
		$tdatamst_destination[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_destination["English"] = array();
	$fieldToolTipsmst_destination["English"] = array();
	$placeHoldersmst_destination["English"] = array();
	$pageTitlesmst_destination["English"] = array();
	$fieldLabelsmst_destination["English"]["id"] = "Id";
	$fieldToolTipsmst_destination["English"]["id"] = "";
	$placeHoldersmst_destination["English"]["id"] = "";
	$fieldLabelsmst_destination["English"]["name"] = "Name";
	$fieldToolTipsmst_destination["English"]["name"] = "";
	$placeHoldersmst_destination["English"]["name"] = "";
	$fieldLabelsmst_destination["English"]["sort"] = "Sort";
	$fieldToolTipsmst_destination["English"]["sort"] = "";
	$placeHoldersmst_destination["English"]["sort"] = "";
	$fieldLabelsmst_destination["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_destination["English"]["create_by"] = "";
	$placeHoldersmst_destination["English"]["create_by"] = "";
	$fieldLabelsmst_destination["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_destination["English"]["create_at"] = "";
	$placeHoldersmst_destination["English"]["create_at"] = "";
	$fieldLabelsmst_destination["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_destination["English"]["update_by"] = "";
	$placeHoldersmst_destination["English"]["update_by"] = "";
	$fieldLabelsmst_destination["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_destination["English"]["update_at"] = "";
	$placeHoldersmst_destination["English"]["update_at"] = "";
	if (count($fieldToolTipsmst_destination["English"]))
		$tdatamst_destination[".isUseToolTips"] = true;
}


	$tdatamst_destination[".NCSearch"] = true;



$tdatamst_destination[".shortTableName"] = "mst_destination";
$tdatamst_destination[".nSecOptions"] = 0;
$tdatamst_destination[".recsPerRowPrint"] = 1;
$tdatamst_destination[".mainTableOwnerID"] = "";
$tdatamst_destination[".moveNext"] = 1;
$tdatamst_destination[".entityType"] = 0;

$tdatamst_destination[".strOriginalTableName"] = "mst_destination";

	



$tdatamst_destination[".showAddInPopup"] = false;

$tdatamst_destination[".showEditInPopup"] = false;

$tdatamst_destination[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_destination[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_destination[".fieldsForRegister"] = array();

$tdatamst_destination[".listAjax"] = false;

	$tdatamst_destination[".audit"] = false;

	$tdatamst_destination[".locking"] = false;



$tdatamst_destination[".list"] = true;

$tdatamst_destination[".inlineEdit"] = true;


$tdatamst_destination[".reorderRecordsByHeader"] = true;



$tdatamst_destination[".inlineAdd"] = true;

$tdatamst_destination[".import"] = true;

$tdatamst_destination[".exportTo"] = true;


$tdatamst_destination[".delete"] = true;

$tdatamst_destination[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_destination[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_destination[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_destination[".searchSaving"] = false;
//

$tdatamst_destination[".showSearchPanel"] = true;
		$tdatamst_destination[".flexibleSearch"] = true;

$tdatamst_destination[".isUseAjaxSuggest"] = true;

$tdatamst_destination[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_destination[".ajaxCodeSnippetAdded"] = false;

$tdatamst_destination[".buttonsAdded"] = false;

$tdatamst_destination[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_destination[".isUseTimeForSearch"] = false;





$tdatamst_destination[".allSearchFields"] = array();
$tdatamst_destination[".filterFields"] = array();
$tdatamst_destination[".requiredSearchFields"] = array();

$tdatamst_destination[".allSearchFields"][] = "id";
	$tdatamst_destination[".allSearchFields"][] = "name";
	$tdatamst_destination[".allSearchFields"][] = "sort";
	$tdatamst_destination[".allSearchFields"][] = "create_by";
	$tdatamst_destination[".allSearchFields"][] = "create_at";
	$tdatamst_destination[".allSearchFields"][] = "update_by";
	$tdatamst_destination[".allSearchFields"][] = "update_at";
	

$tdatamst_destination[".googleLikeFields"] = array();
$tdatamst_destination[".googleLikeFields"][] = "id";
$tdatamst_destination[".googleLikeFields"][] = "name";
$tdatamst_destination[".googleLikeFields"][] = "sort";
$tdatamst_destination[".googleLikeFields"][] = "create_by";
$tdatamst_destination[".googleLikeFields"][] = "create_at";
$tdatamst_destination[".googleLikeFields"][] = "update_by";
$tdatamst_destination[".googleLikeFields"][] = "update_at";


$tdatamst_destination[".advSearchFields"] = array();
$tdatamst_destination[".advSearchFields"][] = "id";
$tdatamst_destination[".advSearchFields"][] = "name";
$tdatamst_destination[".advSearchFields"][] = "sort";
$tdatamst_destination[".advSearchFields"][] = "create_by";
$tdatamst_destination[".advSearchFields"][] = "create_at";
$tdatamst_destination[".advSearchFields"][] = "update_by";
$tdatamst_destination[".advSearchFields"][] = "update_at";

$tdatamst_destination[".tableType"] = "list";

$tdatamst_destination[".printerPageOrientation"] = 0;
$tdatamst_destination[".nPrinterPageScale"] = 100;

$tdatamst_destination[".nPrinterSplitRecords"] = 40;

$tdatamst_destination[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_destination[".geocodingEnabled"] = false;





$tdatamst_destination[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_destination[".pageSize"] = 20;

$tdatamst_destination[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_destination[".strOrderBy"] = $tstrOrderBy;

$tdatamst_destination[".orderindexes"] = array();

$tdatamst_destination[".sqlHead"] = "SELECT `id`,  	`name`,  	`sort`,  	`create_by`,  	`create_at`,  	`update_by`,  	`update_at`";
$tdatamst_destination[".sqlFrom"] = "FROM `mst_destination`";
$tdatamst_destination[".sqlWhereExpr"] = "";
$tdatamst_destination[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_destination[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_destination[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_destination[".highlightSearchResults"] = true;

$tableKeysmst_destination = array();
$tableKeysmst_destination[] = "id";
$tdatamst_destination[".Keys"] = $tableKeysmst_destination;

$tdatamst_destination[".listFields"] = array();
$tdatamst_destination[".listFields"][] = "id";
$tdatamst_destination[".listFields"][] = "name";
$tdatamst_destination[".listFields"][] = "sort";
$tdatamst_destination[".listFields"][] = "create_by";
$tdatamst_destination[".listFields"][] = "create_at";
$tdatamst_destination[".listFields"][] = "update_by";
$tdatamst_destination[".listFields"][] = "update_at";

$tdatamst_destination[".hideMobileList"] = array();


$tdatamst_destination[".viewFields"] = array();

$tdatamst_destination[".addFields"] = array();

$tdatamst_destination[".masterListFields"] = array();
$tdatamst_destination[".masterListFields"][] = "id";
$tdatamst_destination[".masterListFields"][] = "name";
$tdatamst_destination[".masterListFields"][] = "sort";
$tdatamst_destination[".masterListFields"][] = "create_by";
$tdatamst_destination[".masterListFields"][] = "create_at";
$tdatamst_destination[".masterListFields"][] = "update_by";
$tdatamst_destination[".masterListFields"][] = "update_at";

$tdatamst_destination[".inlineAddFields"] = array();
$tdatamst_destination[".inlineAddFields"][] = "name";
$tdatamst_destination[".inlineAddFields"][] = "sort";
$tdatamst_destination[".inlineAddFields"][] = "create_by";
$tdatamst_destination[".inlineAddFields"][] = "create_at";
$tdatamst_destination[".inlineAddFields"][] = "update_by";
$tdatamst_destination[".inlineAddFields"][] = "update_at";

$tdatamst_destination[".editFields"] = array();

$tdatamst_destination[".inlineEditFields"] = array();
$tdatamst_destination[".inlineEditFields"][] = "name";
$tdatamst_destination[".inlineEditFields"][] = "sort";
$tdatamst_destination[".inlineEditFields"][] = "create_by";
$tdatamst_destination[".inlineEditFields"][] = "create_at";
$tdatamst_destination[".inlineEditFields"][] = "update_by";
$tdatamst_destination[".inlineEditFields"][] = "update_at";

$tdatamst_destination[".updateSelectedFields"] = array();


$tdatamst_destination[".exportFields"] = array();
$tdatamst_destination[".exportFields"][] = "id";
$tdatamst_destination[".exportFields"][] = "name";
$tdatamst_destination[".exportFields"][] = "sort";
$tdatamst_destination[".exportFields"][] = "create_by";
$tdatamst_destination[".exportFields"][] = "create_at";
$tdatamst_destination[".exportFields"][] = "update_by";
$tdatamst_destination[".exportFields"][] = "update_at";

$tdatamst_destination[".importFields"] = array();
$tdatamst_destination[".importFields"][] = "id";
$tdatamst_destination[".importFields"][] = "name";
$tdatamst_destination[".importFields"][] = "sort";
$tdatamst_destination[".importFields"][] = "create_by";
$tdatamst_destination[".importFields"][] = "create_at";
$tdatamst_destination[".importFields"][] = "update_by";
$tdatamst_destination[".importFields"][] = "update_at";

$tdatamst_destination[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_destination";
	$fdata["Label"] = GetFieldLabel("mst_destination","id");
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




	$tdatamst_destination["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_destination";
	$fdata["Label"] = GetFieldLabel("mst_destination","name");
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




	$tdatamst_destination["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_destination";
	$fdata["Label"] = GetFieldLabel("mst_destination","sort");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatamst_destination["sort"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_destination";
	$fdata["Label"] = GetFieldLabel("mst_destination","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatamst_destination["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_destination";
	$fdata["Label"] = GetFieldLabel("mst_destination","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatamst_destination["create_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_destination";
	$fdata["Label"] = GetFieldLabel("mst_destination","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatamst_destination["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_destination";
	$fdata["Label"] = GetFieldLabel("mst_destination","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatamst_destination["update_at"] = $fdata;


$tables_data["mst_destination"]=&$tdatamst_destination;
$field_labels["mst_destination"] = &$fieldLabelsmst_destination;
$fieldToolTips["mst_destination"] = &$fieldToolTipsmst_destination;
$placeHolders["mst_destination"] = &$placeHoldersmst_destination;
$page_titles["mst_destination"] = &$pageTitlesmst_destination;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_destination"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_destination"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_destination()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`name`,  	`sort`,  	`create_by`,  	`create_at`,  	`update_by`,  	`update_at`";
$proto0["m_strFrom"] = "FROM `mst_destination`";
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
	"m_strTable" => "mst_destination",
	"m_srcTableName" => "mst_destination"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_destination";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_destination",
	"m_srcTableName" => "mst_destination"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_destination";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_destination",
	"m_srcTableName" => "mst_destination"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_destination";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_destination",
	"m_srcTableName" => "mst_destination"
));

$proto12["m_sql"] = "`create_by`";
$proto12["m_srcTableName"] = "mst_destination";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_destination",
	"m_srcTableName" => "mst_destination"
));

$proto14["m_sql"] = "`create_at`";
$proto14["m_srcTableName"] = "mst_destination";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_destination",
	"m_srcTableName" => "mst_destination"
));

$proto16["m_sql"] = "`update_by`";
$proto16["m_srcTableName"] = "mst_destination";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_destination",
	"m_srcTableName" => "mst_destination"
));

$proto18["m_sql"] = "`update_at`";
$proto18["m_srcTableName"] = "mst_destination";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_destination";
$proto21["m_srcTableName"] = "mst_destination";
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
$proto20["m_sql"] = "`mst_destination`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_destination";
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
$proto0["m_srcTableName"]="mst_destination";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_destination = createSqlQuery_mst_destination();


	
		;

							

$tdatamst_destination[".sqlquery"] = $queryData_mst_destination;

include_once(getabspath("include/mst_destination_events.php"));
$tableEvents["mst_destination"] = new eventclass_mst_destination;
$tdatamst_destination[".hasEvents"] = true;

?>