<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_colorstone = array();
	$tdatamst_colorstone[".truncateText"] = true;
	$tdatamst_colorstone[".NumberOfChars"] = 80;
	$tdatamst_colorstone[".ShortName"] = "mst_colorstone";
	$tdatamst_colorstone[".OwnerID"] = "";
	$tdatamst_colorstone[".OriginalTable"] = "mst_colorstone";

//	field labels
$fieldLabelsmst_colorstone = array();
$fieldToolTipsmst_colorstone = array();
$pageTitlesmst_colorstone = array();
$placeHoldersmst_colorstone = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_colorstone["Japanese"] = array();
	$fieldToolTipsmst_colorstone["Japanese"] = array();
	$placeHoldersmst_colorstone["Japanese"] = array();
	$pageTitlesmst_colorstone["Japanese"] = array();
	$fieldLabelsmst_colorstone["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_colorstone["Japanese"]["id"] = "";
	$placeHoldersmst_colorstone["Japanese"]["id"] = "";
	$fieldLabelsmst_colorstone["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_colorstone["Japanese"]["name"] = "";
	$placeHoldersmst_colorstone["Japanese"]["name"] = "";
	$fieldLabelsmst_colorstone["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsmst_colorstone["Japanese"]["updated_by"] = "";
	$placeHoldersmst_colorstone["Japanese"]["updated_by"] = "";
	$fieldLabelsmst_colorstone["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsmst_colorstone["Japanese"]["created_at"] = "";
	$placeHoldersmst_colorstone["Japanese"]["created_at"] = "";
	$fieldLabelsmst_colorstone["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsmst_colorstone["Japanese"]["created_by"] = "";
	$placeHoldersmst_colorstone["Japanese"]["created_by"] = "";
	$fieldLabelsmst_colorstone["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_colorstone["Japanese"]["update_at"] = "";
	$placeHoldersmst_colorstone["Japanese"]["update_at"] = "";
	$fieldLabelsmst_colorstone["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_colorstone["Japanese"]["sort"] = "";
	$placeHoldersmst_colorstone["Japanese"]["sort"] = "";
	if (count($fieldToolTipsmst_colorstone["Japanese"]))
		$tdatamst_colorstone[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_colorstone[""] = array();
	$fieldToolTipsmst_colorstone[""] = array();
	$placeHoldersmst_colorstone[""] = array();
	$pageTitlesmst_colorstone[""] = array();
	$fieldLabelsmst_colorstone[""]["id"] = "Id";
	$fieldToolTipsmst_colorstone[""]["id"] = "";
	$placeHoldersmst_colorstone[""]["id"] = "";
	$fieldLabelsmst_colorstone[""]["name"] = "Name";
	$fieldToolTipsmst_colorstone[""]["name"] = "";
	$placeHoldersmst_colorstone[""]["name"] = "";
	$fieldLabelsmst_colorstone[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_colorstone[""]["updated_by"] = "";
	$placeHoldersmst_colorstone[""]["updated_by"] = "";
	$fieldLabelsmst_colorstone[""]["created_at"] = "Created At";
	$fieldToolTipsmst_colorstone[""]["created_at"] = "";
	$placeHoldersmst_colorstone[""]["created_at"] = "";
	$fieldLabelsmst_colorstone[""]["created_by"] = "Created By";
	$fieldToolTipsmst_colorstone[""]["created_by"] = "";
	$placeHoldersmst_colorstone[""]["created_by"] = "";
	$fieldLabelsmst_colorstone[""]["update_at"] = "Update At";
	$fieldToolTipsmst_colorstone[""]["update_at"] = "";
	$placeHoldersmst_colorstone[""]["update_at"] = "";
	$fieldLabelsmst_colorstone[""]["sort"] = "Sort";
	$fieldToolTipsmst_colorstone[""]["sort"] = "";
	$placeHoldersmst_colorstone[""]["sort"] = "";
	if (count($fieldToolTipsmst_colorstone[""]))
		$tdatamst_colorstone[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_colorstone["English"] = array();
	$fieldToolTipsmst_colorstone["English"] = array();
	$placeHoldersmst_colorstone["English"] = array();
	$pageTitlesmst_colorstone["English"] = array();
	$fieldLabelsmst_colorstone["English"]["id"] = "Id";
	$fieldToolTipsmst_colorstone["English"]["id"] = "";
	$placeHoldersmst_colorstone["English"]["id"] = "";
	$fieldLabelsmst_colorstone["English"]["name"] = "Name";
	$fieldToolTipsmst_colorstone["English"]["name"] = "";
	$placeHoldersmst_colorstone["English"]["name"] = "";
	$fieldLabelsmst_colorstone["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_colorstone["English"]["updated_by"] = "";
	$placeHoldersmst_colorstone["English"]["updated_by"] = "";
	$fieldLabelsmst_colorstone["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_colorstone["English"]["created_at"] = "";
	$placeHoldersmst_colorstone["English"]["created_at"] = "";
	$fieldLabelsmst_colorstone["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_colorstone["English"]["created_by"] = "";
	$placeHoldersmst_colorstone["English"]["created_by"] = "";
	$fieldLabelsmst_colorstone["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_colorstone["English"]["update_at"] = "";
	$placeHoldersmst_colorstone["English"]["update_at"] = "";
	$fieldLabelsmst_colorstone["English"]["sort"] = "Sort";
	$fieldToolTipsmst_colorstone["English"]["sort"] = "";
	$placeHoldersmst_colorstone["English"]["sort"] = "";
	if (count($fieldToolTipsmst_colorstone["English"]))
		$tdatamst_colorstone[".isUseToolTips"] = true;
}


	$tdatamst_colorstone[".NCSearch"] = true;



$tdatamst_colorstone[".shortTableName"] = "mst_colorstone";
$tdatamst_colorstone[".nSecOptions"] = 0;
$tdatamst_colorstone[".recsPerRowPrint"] = 1;
$tdatamst_colorstone[".mainTableOwnerID"] = "";
$tdatamst_colorstone[".moveNext"] = 1;
$tdatamst_colorstone[".entityType"] = 0;

$tdatamst_colorstone[".strOriginalTableName"] = "mst_colorstone";

	



$tdatamst_colorstone[".showAddInPopup"] = false;

$tdatamst_colorstone[".showEditInPopup"] = false;

$tdatamst_colorstone[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_colorstone[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_colorstone[".fieldsForRegister"] = array();

$tdatamst_colorstone[".listAjax"] = false;

	$tdatamst_colorstone[".audit"] = true;

	$tdatamst_colorstone[".locking"] = false;



$tdatamst_colorstone[".list"] = true;

$tdatamst_colorstone[".inlineEdit"] = true;


$tdatamst_colorstone[".reorderRecordsByHeader"] = true;



$tdatamst_colorstone[".inlineAdd"] = true;

$tdatamst_colorstone[".import"] = true;

$tdatamst_colorstone[".exportTo"] = true;


$tdatamst_colorstone[".delete"] = true;

$tdatamst_colorstone[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_colorstone[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_colorstone[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_colorstone[".searchSaving"] = false;
//

$tdatamst_colorstone[".showSearchPanel"] = true;
		$tdatamst_colorstone[".flexibleSearch"] = true;

$tdatamst_colorstone[".isUseAjaxSuggest"] = true;

$tdatamst_colorstone[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_colorstone[".ajaxCodeSnippetAdded"] = false;

$tdatamst_colorstone[".buttonsAdded"] = false;

$tdatamst_colorstone[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_colorstone[".isUseTimeForSearch"] = false;





$tdatamst_colorstone[".allSearchFields"] = array();
$tdatamst_colorstone[".filterFields"] = array();
$tdatamst_colorstone[".requiredSearchFields"] = array();

$tdatamst_colorstone[".allSearchFields"][] = "sort";
	$tdatamst_colorstone[".allSearchFields"][] = "id";
	$tdatamst_colorstone[".allSearchFields"][] = "name";
	$tdatamst_colorstone[".allSearchFields"][] = "updated_by";
	$tdatamst_colorstone[".allSearchFields"][] = "created_at";
	$tdatamst_colorstone[".allSearchFields"][] = "created_by";
	$tdatamst_colorstone[".allSearchFields"][] = "update_at";
	

$tdatamst_colorstone[".googleLikeFields"] = array();
$tdatamst_colorstone[".googleLikeFields"][] = "id";
$tdatamst_colorstone[".googleLikeFields"][] = "name";
$tdatamst_colorstone[".googleLikeFields"][] = "updated_by";
$tdatamst_colorstone[".googleLikeFields"][] = "created_at";
$tdatamst_colorstone[".googleLikeFields"][] = "created_by";
$tdatamst_colorstone[".googleLikeFields"][] = "update_at";
$tdatamst_colorstone[".googleLikeFields"][] = "sort";


$tdatamst_colorstone[".advSearchFields"] = array();
$tdatamst_colorstone[".advSearchFields"][] = "sort";
$tdatamst_colorstone[".advSearchFields"][] = "id";
$tdatamst_colorstone[".advSearchFields"][] = "name";
$tdatamst_colorstone[".advSearchFields"][] = "updated_by";
$tdatamst_colorstone[".advSearchFields"][] = "created_at";
$tdatamst_colorstone[".advSearchFields"][] = "created_by";
$tdatamst_colorstone[".advSearchFields"][] = "update_at";

$tdatamst_colorstone[".tableType"] = "list";

$tdatamst_colorstone[".printerPageOrientation"] = 0;
$tdatamst_colorstone[".nPrinterPageScale"] = 100;

$tdatamst_colorstone[".nPrinterSplitRecords"] = 40;

$tdatamst_colorstone[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_colorstone[".geocodingEnabled"] = false;





$tdatamst_colorstone[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_colorstone[".pageSize"] = 20;

$tdatamst_colorstone[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_colorstone[".strOrderBy"] = $tstrOrderBy;

$tdatamst_colorstone[".orderindexes"] = array();

$tdatamst_colorstone[".sqlHead"] = "SELECT `id`,  `name`,  `updated_by`,  `created_at`,  `created_by`,  `update_at`,  `sort`";
$tdatamst_colorstone[".sqlFrom"] = "FROM `mst_colorstone`";
$tdatamst_colorstone[".sqlWhereExpr"] = "";
$tdatamst_colorstone[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_colorstone[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_colorstone[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_colorstone[".highlightSearchResults"] = true;

$tableKeysmst_colorstone = array();
$tableKeysmst_colorstone[] = "id";
$tdatamst_colorstone[".Keys"] = $tableKeysmst_colorstone;

$tdatamst_colorstone[".listFields"] = array();
$tdatamst_colorstone[".listFields"][] = "sort";
$tdatamst_colorstone[".listFields"][] = "id";
$tdatamst_colorstone[".listFields"][] = "name";
$tdatamst_colorstone[".listFields"][] = "update_at";
$tdatamst_colorstone[".listFields"][] = "updated_by";
$tdatamst_colorstone[".listFields"][] = "created_at";
$tdatamst_colorstone[".listFields"][] = "created_by";

$tdatamst_colorstone[".hideMobileList"] = array();


$tdatamst_colorstone[".viewFields"] = array();

$tdatamst_colorstone[".addFields"] = array();

$tdatamst_colorstone[".masterListFields"] = array();
$tdatamst_colorstone[".masterListFields"][] = "id";
$tdatamst_colorstone[".masterListFields"][] = "name";
$tdatamst_colorstone[".masterListFields"][] = "updated_by";
$tdatamst_colorstone[".masterListFields"][] = "created_at";
$tdatamst_colorstone[".masterListFields"][] = "created_by";
$tdatamst_colorstone[".masterListFields"][] = "update_at";
$tdatamst_colorstone[".masterListFields"][] = "sort";

$tdatamst_colorstone[".inlineAddFields"] = array();
$tdatamst_colorstone[".inlineAddFields"][] = "sort";
$tdatamst_colorstone[".inlineAddFields"][] = "name";

$tdatamst_colorstone[".editFields"] = array();

$tdatamst_colorstone[".inlineEditFields"] = array();
$tdatamst_colorstone[".inlineEditFields"][] = "sort";
$tdatamst_colorstone[".inlineEditFields"][] = "name";

$tdatamst_colorstone[".updateSelectedFields"] = array();


$tdatamst_colorstone[".exportFields"] = array();
$tdatamst_colorstone[".exportFields"][] = "sort";
$tdatamst_colorstone[".exportFields"][] = "id";
$tdatamst_colorstone[".exportFields"][] = "name";
$tdatamst_colorstone[".exportFields"][] = "update_at";
$tdatamst_colorstone[".exportFields"][] = "updated_by";
$tdatamst_colorstone[".exportFields"][] = "created_at";
$tdatamst_colorstone[".exportFields"][] = "created_by";

$tdatamst_colorstone[".importFields"] = array();
$tdatamst_colorstone[".importFields"][] = "id";
$tdatamst_colorstone[".importFields"][] = "name";
$tdatamst_colorstone[".importFields"][] = "updated_by";
$tdatamst_colorstone[".importFields"][] = "created_at";
$tdatamst_colorstone[".importFields"][] = "created_by";
$tdatamst_colorstone[".importFields"][] = "update_at";
$tdatamst_colorstone[".importFields"][] = "sort";

$tdatamst_colorstone[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_colorstone";
	$fdata["Label"] = GetFieldLabel("mst_colorstone","id");
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




	$tdatamst_colorstone["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_colorstone";
	$fdata["Label"] = GetFieldLabel("mst_colorstone","name");
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




	$tdatamst_colorstone["name"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_colorstone";
	$fdata["Label"] = GetFieldLabel("mst_colorstone","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_by`";

	
	
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




	$tdatamst_colorstone["updated_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_colorstone";
	$fdata["Label"] = GetFieldLabel("mst_colorstone","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_at`";

	
	
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




	$tdatamst_colorstone["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_colorstone";
	$fdata["Label"] = GetFieldLabel("mst_colorstone","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_by`";

	
	
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




	$tdatamst_colorstone["created_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_colorstone";
	$fdata["Label"] = GetFieldLabel("mst_colorstone","update_at");
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




	$tdatamst_colorstone["update_at"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_colorstone";
	$fdata["Label"] = GetFieldLabel("mst_colorstone","sort");
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




	$tdatamst_colorstone["sort"] = $fdata;


$tables_data["mst_colorstone"]=&$tdatamst_colorstone;
$field_labels["mst_colorstone"] = &$fieldLabelsmst_colorstone;
$fieldToolTips["mst_colorstone"] = &$fieldToolTipsmst_colorstone;
$placeHolders["mst_colorstone"] = &$placeHoldersmst_colorstone;
$page_titles["mst_colorstone"] = &$pageTitlesmst_colorstone;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_colorstone"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_colorstone"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_colorstone()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `updated_by`,  `created_at`,  `created_by`,  `update_at`,  `sort`";
$proto0["m_strFrom"] = "FROM `mst_colorstone`";
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
	"m_strTable" => "mst_colorstone",
	"m_srcTableName" => "mst_colorstone"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_colorstone";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_colorstone",
	"m_srcTableName" => "mst_colorstone"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_colorstone";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_colorstone",
	"m_srcTableName" => "mst_colorstone"
));

$proto10["m_sql"] = "`updated_by`";
$proto10["m_srcTableName"] = "mst_colorstone";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_colorstone",
	"m_srcTableName" => "mst_colorstone"
));

$proto12["m_sql"] = "`created_at`";
$proto12["m_srcTableName"] = "mst_colorstone";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_colorstone",
	"m_srcTableName" => "mst_colorstone"
));

$proto14["m_sql"] = "`created_by`";
$proto14["m_srcTableName"] = "mst_colorstone";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_colorstone",
	"m_srcTableName" => "mst_colorstone"
));

$proto16["m_sql"] = "`update_at`";
$proto16["m_srcTableName"] = "mst_colorstone";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_colorstone",
	"m_srcTableName" => "mst_colorstone"
));

$proto18["m_sql"] = "`sort`";
$proto18["m_srcTableName"] = "mst_colorstone";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_colorstone";
$proto21["m_srcTableName"] = "mst_colorstone";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "updated_at";
$proto21["m_columns"][] = "updated_by";
$proto21["m_columns"][] = "created_at";
$proto21["m_columns"][] = "created_by";
$proto21["m_columns"][] = "update_at";
$proto21["m_columns"][] = "sort";
$proto21["m_columns"][] = "img_url";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`mst_colorstone`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_colorstone";
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
$proto0["m_srcTableName"]="mst_colorstone";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_colorstone = createSqlQuery_mst_colorstone();


	
		;

							

$tdatamst_colorstone[".sqlquery"] = $queryData_mst_colorstone;

include_once(getabspath("include/mst_colorstone_events.php"));
$tableEvents["mst_colorstone"] = new eventclass_mst_colorstone;
$tdatamst_colorstone[".hasEvents"] = true;

?>