<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_quality = array();
	$tdatamst_quality[".truncateText"] = true;
	$tdatamst_quality[".NumberOfChars"] = 80;
	$tdatamst_quality[".ShortName"] = "mst_quality";
	$tdatamst_quality[".OwnerID"] = "";
	$tdatamst_quality[".OriginalTable"] = "mst_quality";

//	field labels
$fieldLabelsmst_quality = array();
$fieldToolTipsmst_quality = array();
$pageTitlesmst_quality = array();
$placeHoldersmst_quality = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_quality["Japanese"] = array();
	$fieldToolTipsmst_quality["Japanese"] = array();
	$placeHoldersmst_quality["Japanese"] = array();
	$pageTitlesmst_quality["Japanese"] = array();
	$fieldLabelsmst_quality["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_quality["Japanese"]["id"] = "";
	$placeHoldersmst_quality["Japanese"]["id"] = "";
	$fieldLabelsmst_quality["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_quality["Japanese"]["sort"] = "";
	$placeHoldersmst_quality["Japanese"]["sort"] = "";
	$fieldLabelsmst_quality["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_quality["Japanese"]["name"] = "";
	$placeHoldersmst_quality["Japanese"]["name"] = "";
	$fieldLabelsmst_quality["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsmst_quality["Japanese"]["create_at"] = "";
	$placeHoldersmst_quality["Japanese"]["create_at"] = "";
	$fieldLabelsmst_quality["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsmst_quality["Japanese"]["create_by"] = "";
	$placeHoldersmst_quality["Japanese"]["create_by"] = "";
	$fieldLabelsmst_quality["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_quality["Japanese"]["update_at"] = "";
	$placeHoldersmst_quality["Japanese"]["update_at"] = "";
	$fieldLabelsmst_quality["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_quality["Japanese"]["update_by"] = "";
	$placeHoldersmst_quality["Japanese"]["update_by"] = "";
	if (count($fieldToolTipsmst_quality["Japanese"]))
		$tdatamst_quality[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_quality[""] = array();
	$fieldToolTipsmst_quality[""] = array();
	$placeHoldersmst_quality[""] = array();
	$pageTitlesmst_quality[""] = array();
	$fieldLabelsmst_quality[""]["id"] = "Id";
	$fieldToolTipsmst_quality[""]["id"] = "";
	$placeHoldersmst_quality[""]["id"] = "";
	$fieldLabelsmst_quality[""]["sort"] = "Sort";
	$fieldToolTipsmst_quality[""]["sort"] = "";
	$placeHoldersmst_quality[""]["sort"] = "";
	$fieldLabelsmst_quality[""]["name"] = "Name";
	$fieldToolTipsmst_quality[""]["name"] = "";
	$placeHoldersmst_quality[""]["name"] = "";
	$fieldLabelsmst_quality[""]["create_at"] = "Create At";
	$fieldToolTipsmst_quality[""]["create_at"] = "";
	$placeHoldersmst_quality[""]["create_at"] = "";
	$fieldLabelsmst_quality[""]["create_by"] = "Create By";
	$fieldToolTipsmst_quality[""]["create_by"] = "";
	$placeHoldersmst_quality[""]["create_by"] = "";
	$fieldLabelsmst_quality[""]["update_at"] = "Update At";
	$fieldToolTipsmst_quality[""]["update_at"] = "";
	$placeHoldersmst_quality[""]["update_at"] = "";
	$fieldLabelsmst_quality[""]["update_by"] = "Update By";
	$fieldToolTipsmst_quality[""]["update_by"] = "";
	$placeHoldersmst_quality[""]["update_by"] = "";
	if (count($fieldToolTipsmst_quality[""]))
		$tdatamst_quality[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_quality["English"] = array();
	$fieldToolTipsmst_quality["English"] = array();
	$placeHoldersmst_quality["English"] = array();
	$pageTitlesmst_quality["English"] = array();
	$fieldLabelsmst_quality["English"]["id"] = "Id";
	$fieldToolTipsmst_quality["English"]["id"] = "";
	$placeHoldersmst_quality["English"]["id"] = "";
	$fieldLabelsmst_quality["English"]["sort"] = "Sort";
	$fieldToolTipsmst_quality["English"]["sort"] = "";
	$placeHoldersmst_quality["English"]["sort"] = "";
	$fieldLabelsmst_quality["English"]["name"] = "Name";
	$fieldToolTipsmst_quality["English"]["name"] = "";
	$placeHoldersmst_quality["English"]["name"] = "";
	$fieldLabelsmst_quality["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_quality["English"]["create_at"] = "";
	$placeHoldersmst_quality["English"]["create_at"] = "";
	$fieldLabelsmst_quality["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_quality["English"]["create_by"] = "";
	$placeHoldersmst_quality["English"]["create_by"] = "";
	$fieldLabelsmst_quality["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_quality["English"]["update_at"] = "";
	$placeHoldersmst_quality["English"]["update_at"] = "";
	$fieldLabelsmst_quality["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_quality["English"]["update_by"] = "";
	$placeHoldersmst_quality["English"]["update_by"] = "";
	if (count($fieldToolTipsmst_quality["English"]))
		$tdatamst_quality[".isUseToolTips"] = true;
}


	$tdatamst_quality[".NCSearch"] = true;



$tdatamst_quality[".shortTableName"] = "mst_quality";
$tdatamst_quality[".nSecOptions"] = 0;
$tdatamst_quality[".recsPerRowPrint"] = 1;
$tdatamst_quality[".mainTableOwnerID"] = "";
$tdatamst_quality[".moveNext"] = 1;
$tdatamst_quality[".entityType"] = 0;

$tdatamst_quality[".strOriginalTableName"] = "mst_quality";

	



$tdatamst_quality[".showAddInPopup"] = false;

$tdatamst_quality[".showEditInPopup"] = false;

$tdatamst_quality[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_quality[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_quality[".fieldsForRegister"] = array();

$tdatamst_quality[".listAjax"] = false;

	$tdatamst_quality[".audit"] = false;

	$tdatamst_quality[".locking"] = false;



$tdatamst_quality[".list"] = true;

$tdatamst_quality[".inlineEdit"] = true;


$tdatamst_quality[".reorderRecordsByHeader"] = true;



$tdatamst_quality[".inlineAdd"] = true;

$tdatamst_quality[".import"] = true;

$tdatamst_quality[".exportTo"] = true;


$tdatamst_quality[".delete"] = true;

$tdatamst_quality[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_quality[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_quality[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_quality[".searchSaving"] = false;
//

$tdatamst_quality[".showSearchPanel"] = true;
		$tdatamst_quality[".flexibleSearch"] = true;

$tdatamst_quality[".isUseAjaxSuggest"] = true;

$tdatamst_quality[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_quality[".ajaxCodeSnippetAdded"] = false;

$tdatamst_quality[".buttonsAdded"] = false;

$tdatamst_quality[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_quality[".isUseTimeForSearch"] = false;





$tdatamst_quality[".allSearchFields"] = array();
$tdatamst_quality[".filterFields"] = array();
$tdatamst_quality[".requiredSearchFields"] = array();

$tdatamst_quality[".allSearchFields"][] = "id";
	$tdatamst_quality[".allSearchFields"][] = "sort";
	$tdatamst_quality[".allSearchFields"][] = "name";
	$tdatamst_quality[".allSearchFields"][] = "create_at";
	$tdatamst_quality[".allSearchFields"][] = "create_by";
	$tdatamst_quality[".allSearchFields"][] = "update_at";
	$tdatamst_quality[".allSearchFields"][] = "update_by";
	

$tdatamst_quality[".googleLikeFields"] = array();
$tdatamst_quality[".googleLikeFields"][] = "id";
$tdatamst_quality[".googleLikeFields"][] = "sort";
$tdatamst_quality[".googleLikeFields"][] = "name";
$tdatamst_quality[".googleLikeFields"][] = "create_at";
$tdatamst_quality[".googleLikeFields"][] = "create_by";
$tdatamst_quality[".googleLikeFields"][] = "update_at";
$tdatamst_quality[".googleLikeFields"][] = "update_by";


$tdatamst_quality[".advSearchFields"] = array();
$tdatamst_quality[".advSearchFields"][] = "id";
$tdatamst_quality[".advSearchFields"][] = "sort";
$tdatamst_quality[".advSearchFields"][] = "name";
$tdatamst_quality[".advSearchFields"][] = "create_at";
$tdatamst_quality[".advSearchFields"][] = "create_by";
$tdatamst_quality[".advSearchFields"][] = "update_at";
$tdatamst_quality[".advSearchFields"][] = "update_by";

$tdatamst_quality[".tableType"] = "list";

$tdatamst_quality[".printerPageOrientation"] = 0;
$tdatamst_quality[".nPrinterPageScale"] = 100;

$tdatamst_quality[".nPrinterSplitRecords"] = 40;

$tdatamst_quality[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_quality[".geocodingEnabled"] = false;





$tdatamst_quality[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_quality[".pageSize"] = 20;

$tdatamst_quality[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_quality[".strOrderBy"] = $tstrOrderBy;

$tdatamst_quality[".orderindexes"] = array();

$tdatamst_quality[".sqlHead"] = "SELECT `id`,  	`sort`,  	`name`,  	`create_at`,  	`create_by`,  	`update_at`,  	`update_by`";
$tdatamst_quality[".sqlFrom"] = "FROM `mst_quality`";
$tdatamst_quality[".sqlWhereExpr"] = "";
$tdatamst_quality[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_quality[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_quality[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_quality[".highlightSearchResults"] = true;

$tableKeysmst_quality = array();
$tableKeysmst_quality[] = "id";
$tdatamst_quality[".Keys"] = $tableKeysmst_quality;

$tdatamst_quality[".listFields"] = array();
$tdatamst_quality[".listFields"][] = "id";
$tdatamst_quality[".listFields"][] = "sort";
$tdatamst_quality[".listFields"][] = "name";
$tdatamst_quality[".listFields"][] = "create_at";
$tdatamst_quality[".listFields"][] = "create_by";
$tdatamst_quality[".listFields"][] = "update_at";
$tdatamst_quality[".listFields"][] = "update_by";

$tdatamst_quality[".hideMobileList"] = array();


$tdatamst_quality[".viewFields"] = array();

$tdatamst_quality[".addFields"] = array();

$tdatamst_quality[".masterListFields"] = array();
$tdatamst_quality[".masterListFields"][] = "id";
$tdatamst_quality[".masterListFields"][] = "sort";
$tdatamst_quality[".masterListFields"][] = "name";
$tdatamst_quality[".masterListFields"][] = "create_at";
$tdatamst_quality[".masterListFields"][] = "create_by";
$tdatamst_quality[".masterListFields"][] = "update_at";
$tdatamst_quality[".masterListFields"][] = "update_by";

$tdatamst_quality[".inlineAddFields"] = array();
$tdatamst_quality[".inlineAddFields"][] = "sort";
$tdatamst_quality[".inlineAddFields"][] = "name";

$tdatamst_quality[".editFields"] = array();

$tdatamst_quality[".inlineEditFields"] = array();
$tdatamst_quality[".inlineEditFields"][] = "sort";
$tdatamst_quality[".inlineEditFields"][] = "name";

$tdatamst_quality[".updateSelectedFields"] = array();


$tdatamst_quality[".exportFields"] = array();
$tdatamst_quality[".exportFields"][] = "id";
$tdatamst_quality[".exportFields"][] = "sort";
$tdatamst_quality[".exportFields"][] = "name";
$tdatamst_quality[".exportFields"][] = "create_at";
$tdatamst_quality[".exportFields"][] = "create_by";
$tdatamst_quality[".exportFields"][] = "update_at";
$tdatamst_quality[".exportFields"][] = "update_by";

$tdatamst_quality[".importFields"] = array();
$tdatamst_quality[".importFields"][] = "id";
$tdatamst_quality[".importFields"][] = "sort";
$tdatamst_quality[".importFields"][] = "name";
$tdatamst_quality[".importFields"][] = "create_at";
$tdatamst_quality[".importFields"][] = "create_by";
$tdatamst_quality[".importFields"][] = "update_at";
$tdatamst_quality[".importFields"][] = "update_by";

$tdatamst_quality[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_quality";
	$fdata["Label"] = GetFieldLabel("mst_quality","id");
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




	$tdatamst_quality["id"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_quality";
	$fdata["Label"] = GetFieldLabel("mst_quality","sort");
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




	$tdatamst_quality["sort"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_quality";
	$fdata["Label"] = GetFieldLabel("mst_quality","name");
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




	$tdatamst_quality["name"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_quality";
	$fdata["Label"] = GetFieldLabel("mst_quality","create_at");
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




	$tdatamst_quality["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_quality";
	$fdata["Label"] = GetFieldLabel("mst_quality","create_by");
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




	$tdatamst_quality["create_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_quality";
	$fdata["Label"] = GetFieldLabel("mst_quality","update_at");
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




	$tdatamst_quality["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_quality";
	$fdata["Label"] = GetFieldLabel("mst_quality","update_by");
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




	$tdatamst_quality["update_by"] = $fdata;


$tables_data["mst_quality"]=&$tdatamst_quality;
$field_labels["mst_quality"] = &$fieldLabelsmst_quality;
$fieldToolTips["mst_quality"] = &$fieldToolTipsmst_quality;
$placeHolders["mst_quality"] = &$placeHoldersmst_quality;
$page_titles["mst_quality"] = &$pageTitlesmst_quality;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_quality"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_quality"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_quality()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`sort`,  	`name`,  	`create_at`,  	`create_by`,  	`update_at`,  	`update_by`";
$proto0["m_strFrom"] = "FROM `mst_quality`";
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
	"m_strTable" => "mst_quality",
	"m_srcTableName" => "mst_quality"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_quality";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_quality",
	"m_srcTableName" => "mst_quality"
));

$proto8["m_sql"] = "`sort`";
$proto8["m_srcTableName"] = "mst_quality";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_quality",
	"m_srcTableName" => "mst_quality"
));

$proto10["m_sql"] = "`name`";
$proto10["m_srcTableName"] = "mst_quality";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_quality",
	"m_srcTableName" => "mst_quality"
));

$proto12["m_sql"] = "`create_at`";
$proto12["m_srcTableName"] = "mst_quality";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_quality",
	"m_srcTableName" => "mst_quality"
));

$proto14["m_sql"] = "`create_by`";
$proto14["m_srcTableName"] = "mst_quality";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_quality",
	"m_srcTableName" => "mst_quality"
));

$proto16["m_sql"] = "`update_at`";
$proto16["m_srcTableName"] = "mst_quality";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_quality",
	"m_srcTableName" => "mst_quality"
));

$proto18["m_sql"] = "`update_by`";
$proto18["m_srcTableName"] = "mst_quality";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_quality";
$proto21["m_srcTableName"] = "mst_quality";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "sort";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "create_at";
$proto21["m_columns"][] = "create_by";
$proto21["m_columns"][] = "update_at";
$proto21["m_columns"][] = "update_by";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`mst_quality`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_quality";
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
$proto0["m_srcTableName"]="mst_quality";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_quality = createSqlQuery_mst_quality();


	
		;

							

$tdatamst_quality[".sqlquery"] = $queryData_mst_quality;

include_once(getabspath("include/mst_quality_events.php"));
$tableEvents["mst_quality"] = new eventclass_mst_quality;
$tdatamst_quality[".hasEvents"] = true;

?>