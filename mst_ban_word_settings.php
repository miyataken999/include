<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_ban_word = array();
	$tdatamst_ban_word[".truncateText"] = true;
	$tdatamst_ban_word[".NumberOfChars"] = 80;
	$tdatamst_ban_word[".ShortName"] = "mst_ban_word";
	$tdatamst_ban_word[".OwnerID"] = "";
	$tdatamst_ban_word[".OriginalTable"] = "mst_ban_word";

//	field labels
$fieldLabelsmst_ban_word = array();
$fieldToolTipsmst_ban_word = array();
$pageTitlesmst_ban_word = array();
$placeHoldersmst_ban_word = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_ban_word["Japanese"] = array();
	$fieldToolTipsmst_ban_word["Japanese"] = array();
	$placeHoldersmst_ban_word["Japanese"] = array();
	$pageTitlesmst_ban_word["Japanese"] = array();
	$fieldLabelsmst_ban_word["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_ban_word["Japanese"]["id"] = "";
	$placeHoldersmst_ban_word["Japanese"]["id"] = "";
	$fieldLabelsmst_ban_word["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_ban_word["Japanese"]["name"] = "";
	$placeHoldersmst_ban_word["Japanese"]["name"] = "";
	$fieldLabelsmst_ban_word["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_ban_word["Japanese"]["sort"] = "";
	$placeHoldersmst_ban_word["Japanese"]["sort"] = "";
	$fieldLabelsmst_ban_word["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_ban_word["Japanese"]["create_by"] = "";
	$placeHoldersmst_ban_word["Japanese"]["create_by"] = "";
	$fieldLabelsmst_ban_word["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_ban_word["Japanese"]["create_at"] = "";
	$placeHoldersmst_ban_word["Japanese"]["create_at"] = "";
	$fieldLabelsmst_ban_word["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_ban_word["Japanese"]["update_by"] = "";
	$placeHoldersmst_ban_word["Japanese"]["update_by"] = "";
	$fieldLabelsmst_ban_word["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_ban_word["Japanese"]["update_at"] = "";
	$placeHoldersmst_ban_word["Japanese"]["update_at"] = "";
	if (count($fieldToolTipsmst_ban_word["Japanese"]))
		$tdatamst_ban_word[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_ban_word[""] = array();
	$fieldToolTipsmst_ban_word[""] = array();
	$placeHoldersmst_ban_word[""] = array();
	$pageTitlesmst_ban_word[""] = array();
	$fieldLabelsmst_ban_word[""]["id"] = "Id";
	$fieldToolTipsmst_ban_word[""]["id"] = "";
	$placeHoldersmst_ban_word[""]["id"] = "";
	$fieldLabelsmst_ban_word[""]["name"] = "Name";
	$fieldToolTipsmst_ban_word[""]["name"] = "";
	$placeHoldersmst_ban_word[""]["name"] = "";
	$fieldLabelsmst_ban_word[""]["sort"] = "Sort";
	$fieldToolTipsmst_ban_word[""]["sort"] = "";
	$placeHoldersmst_ban_word[""]["sort"] = "";
	$fieldLabelsmst_ban_word[""]["create_by"] = "Create By";
	$fieldToolTipsmst_ban_word[""]["create_by"] = "";
	$placeHoldersmst_ban_word[""]["create_by"] = "";
	$fieldLabelsmst_ban_word[""]["create_at"] = "Create At";
	$fieldToolTipsmst_ban_word[""]["create_at"] = "";
	$placeHoldersmst_ban_word[""]["create_at"] = "";
	$fieldLabelsmst_ban_word[""]["update_by"] = "Update By";
	$fieldToolTipsmst_ban_word[""]["update_by"] = "";
	$placeHoldersmst_ban_word[""]["update_by"] = "";
	$fieldLabelsmst_ban_word[""]["update_at"] = "Update At";
	$fieldToolTipsmst_ban_word[""]["update_at"] = "";
	$placeHoldersmst_ban_word[""]["update_at"] = "";
	if (count($fieldToolTipsmst_ban_word[""]))
		$tdatamst_ban_word[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_ban_word["English"] = array();
	$fieldToolTipsmst_ban_word["English"] = array();
	$placeHoldersmst_ban_word["English"] = array();
	$pageTitlesmst_ban_word["English"] = array();
	$fieldLabelsmst_ban_word["English"]["id"] = "Id";
	$fieldToolTipsmst_ban_word["English"]["id"] = "";
	$placeHoldersmst_ban_word["English"]["id"] = "";
	$fieldLabelsmst_ban_word["English"]["name"] = "Name";
	$fieldToolTipsmst_ban_word["English"]["name"] = "";
	$placeHoldersmst_ban_word["English"]["name"] = "";
	$fieldLabelsmst_ban_word["English"]["sort"] = "Sort";
	$fieldToolTipsmst_ban_word["English"]["sort"] = "";
	$placeHoldersmst_ban_word["English"]["sort"] = "";
	$fieldLabelsmst_ban_word["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_ban_word["English"]["create_by"] = "";
	$placeHoldersmst_ban_word["English"]["create_by"] = "";
	$fieldLabelsmst_ban_word["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_ban_word["English"]["create_at"] = "";
	$placeHoldersmst_ban_word["English"]["create_at"] = "";
	$fieldLabelsmst_ban_word["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_ban_word["English"]["update_by"] = "";
	$placeHoldersmst_ban_word["English"]["update_by"] = "";
	$fieldLabelsmst_ban_word["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_ban_word["English"]["update_at"] = "";
	$placeHoldersmst_ban_word["English"]["update_at"] = "";
	if (count($fieldToolTipsmst_ban_word["English"]))
		$tdatamst_ban_word[".isUseToolTips"] = true;
}


	$tdatamst_ban_word[".NCSearch"] = true;



$tdatamst_ban_word[".shortTableName"] = "mst_ban_word";
$tdatamst_ban_word[".nSecOptions"] = 0;
$tdatamst_ban_word[".recsPerRowPrint"] = 1;
$tdatamst_ban_word[".mainTableOwnerID"] = "";
$tdatamst_ban_word[".moveNext"] = 1;
$tdatamst_ban_word[".entityType"] = 0;

$tdatamst_ban_word[".strOriginalTableName"] = "mst_ban_word";

	



$tdatamst_ban_word[".showAddInPopup"] = false;

$tdatamst_ban_word[".showEditInPopup"] = false;

$tdatamst_ban_word[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_ban_word[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_ban_word[".fieldsForRegister"] = array();

$tdatamst_ban_word[".listAjax"] = false;

	$tdatamst_ban_word[".audit"] = true;

	$tdatamst_ban_word[".locking"] = false;



$tdatamst_ban_word[".list"] = true;

$tdatamst_ban_word[".inlineEdit"] = true;


$tdatamst_ban_word[".reorderRecordsByHeader"] = true;



$tdatamst_ban_word[".inlineAdd"] = true;




$tdatamst_ban_word[".delete"] = true;

$tdatamst_ban_word[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_ban_word[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_ban_word[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_ban_word[".searchSaving"] = false;
//

$tdatamst_ban_word[".showSearchPanel"] = true;
		$tdatamst_ban_word[".flexibleSearch"] = true;

$tdatamst_ban_word[".isUseAjaxSuggest"] = true;

$tdatamst_ban_word[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_ban_word[".ajaxCodeSnippetAdded"] = false;

$tdatamst_ban_word[".buttonsAdded"] = false;

$tdatamst_ban_word[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_ban_word[".isUseTimeForSearch"] = false;





$tdatamst_ban_word[".allSearchFields"] = array();
$tdatamst_ban_word[".filterFields"] = array();
$tdatamst_ban_word[".requiredSearchFields"] = array();

$tdatamst_ban_word[".allSearchFields"][] = "id";
	$tdatamst_ban_word[".allSearchFields"][] = "name";
	$tdatamst_ban_word[".allSearchFields"][] = "sort";
	$tdatamst_ban_word[".allSearchFields"][] = "create_by";
	$tdatamst_ban_word[".allSearchFields"][] = "create_at";
	$tdatamst_ban_word[".allSearchFields"][] = "update_by";
	$tdatamst_ban_word[".allSearchFields"][] = "update_at";
	

$tdatamst_ban_word[".googleLikeFields"] = array();
$tdatamst_ban_word[".googleLikeFields"][] = "id";
$tdatamst_ban_word[".googleLikeFields"][] = "name";
$tdatamst_ban_word[".googleLikeFields"][] = "sort";
$tdatamst_ban_word[".googleLikeFields"][] = "create_by";
$tdatamst_ban_word[".googleLikeFields"][] = "create_at";
$tdatamst_ban_word[".googleLikeFields"][] = "update_by";
$tdatamst_ban_word[".googleLikeFields"][] = "update_at";


$tdatamst_ban_word[".advSearchFields"] = array();
$tdatamst_ban_word[".advSearchFields"][] = "id";
$tdatamst_ban_word[".advSearchFields"][] = "name";
$tdatamst_ban_word[".advSearchFields"][] = "sort";
$tdatamst_ban_word[".advSearchFields"][] = "create_by";
$tdatamst_ban_word[".advSearchFields"][] = "create_at";
$tdatamst_ban_word[".advSearchFields"][] = "update_by";
$tdatamst_ban_word[".advSearchFields"][] = "update_at";

$tdatamst_ban_word[".tableType"] = "list";

$tdatamst_ban_word[".printerPageOrientation"] = 0;
$tdatamst_ban_word[".nPrinterPageScale"] = 100;

$tdatamst_ban_word[".nPrinterSplitRecords"] = 40;

$tdatamst_ban_word[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_ban_word[".geocodingEnabled"] = false;





$tdatamst_ban_word[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_ban_word[".pageSize"] = 100;

$tdatamst_ban_word[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_ban_word[".strOrderBy"] = $tstrOrderBy;

$tdatamst_ban_word[".orderindexes"] = array();
$tdatamst_ban_word[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_ban_word[".sqlHead"] = "SELECT `id`,  `name`,  `sort`,  `create_by`,  `create_at`,  `update_by`,  `update_at`";
$tdatamst_ban_word[".sqlFrom"] = "FROM `mst_ban_word`";
$tdatamst_ban_word[".sqlWhereExpr"] = "";
$tdatamst_ban_word[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_ban_word[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_ban_word[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_ban_word[".highlightSearchResults"] = true;

$tableKeysmst_ban_word = array();
$tableKeysmst_ban_word[] = "id";
$tdatamst_ban_word[".Keys"] = $tableKeysmst_ban_word;

$tdatamst_ban_word[".listFields"] = array();
$tdatamst_ban_word[".listFields"][] = "id";
$tdatamst_ban_word[".listFields"][] = "name";
$tdatamst_ban_word[".listFields"][] = "sort";
$tdatamst_ban_word[".listFields"][] = "create_by";
$tdatamst_ban_word[".listFields"][] = "create_at";
$tdatamst_ban_word[".listFields"][] = "update_by";
$tdatamst_ban_word[".listFields"][] = "update_at";

$tdatamst_ban_word[".hideMobileList"] = array();


$tdatamst_ban_word[".viewFields"] = array();

$tdatamst_ban_word[".addFields"] = array();

$tdatamst_ban_word[".masterListFields"] = array();
$tdatamst_ban_word[".masterListFields"][] = "id";
$tdatamst_ban_word[".masterListFields"][] = "name";
$tdatamst_ban_word[".masterListFields"][] = "sort";
$tdatamst_ban_word[".masterListFields"][] = "create_by";
$tdatamst_ban_word[".masterListFields"][] = "create_at";
$tdatamst_ban_word[".masterListFields"][] = "update_by";
$tdatamst_ban_word[".masterListFields"][] = "update_at";

$tdatamst_ban_word[".inlineAddFields"] = array();
$tdatamst_ban_word[".inlineAddFields"][] = "name";
$tdatamst_ban_word[".inlineAddFields"][] = "sort";

$tdatamst_ban_word[".editFields"] = array();

$tdatamst_ban_word[".inlineEditFields"] = array();
$tdatamst_ban_word[".inlineEditFields"][] = "name";
$tdatamst_ban_word[".inlineEditFields"][] = "sort";

$tdatamst_ban_word[".updateSelectedFields"] = array();


$tdatamst_ban_word[".exportFields"] = array();

$tdatamst_ban_word[".importFields"] = array();

$tdatamst_ban_word[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_ban_word";
	$fdata["Label"] = GetFieldLabel("mst_ban_word","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_ban_word["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_ban_word";
	$fdata["Label"] = GetFieldLabel("mst_ban_word","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_ban_word["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_ban_word";
	$fdata["Label"] = GetFieldLabel("mst_ban_word","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_ban_word["sort"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_ban_word";
	$fdata["Label"] = GetFieldLabel("mst_ban_word","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_ban_word["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_ban_word";
	$fdata["Label"] = GetFieldLabel("mst_ban_word","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_ban_word["create_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_ban_word";
	$fdata["Label"] = GetFieldLabel("mst_ban_word","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_ban_word["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_ban_word";
	$fdata["Label"] = GetFieldLabel("mst_ban_word","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatamst_ban_word["update_at"] = $fdata;


$tables_data["mst_ban_word"]=&$tdatamst_ban_word;
$field_labels["mst_ban_word"] = &$fieldLabelsmst_ban_word;
$fieldToolTips["mst_ban_word"] = &$fieldToolTipsmst_ban_word;
$placeHolders["mst_ban_word"] = &$placeHoldersmst_ban_word;
$page_titles["mst_ban_word"] = &$pageTitlesmst_ban_word;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_ban_word"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_ban_word"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_ban_word()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `sort`,  `create_by`,  `create_at`,  `update_by`,  `update_at`";
$proto0["m_strFrom"] = "FROM `mst_ban_word`";
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
	"m_strTable" => "mst_ban_word",
	"m_srcTableName" => "mst_ban_word"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_ban_word";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_ban_word",
	"m_srcTableName" => "mst_ban_word"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "mst_ban_word";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_ban_word",
	"m_srcTableName" => "mst_ban_word"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_ban_word";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_ban_word",
	"m_srcTableName" => "mst_ban_word"
));

$proto12["m_sql"] = "`create_by`";
$proto12["m_srcTableName"] = "mst_ban_word";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_ban_word",
	"m_srcTableName" => "mst_ban_word"
));

$proto14["m_sql"] = "`create_at`";
$proto14["m_srcTableName"] = "mst_ban_word";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_ban_word",
	"m_srcTableName" => "mst_ban_word"
));

$proto16["m_sql"] = "`update_by`";
$proto16["m_srcTableName"] = "mst_ban_word";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_ban_word",
	"m_srcTableName" => "mst_ban_word"
));

$proto18["m_sql"] = "`update_at`";
$proto18["m_srcTableName"] = "mst_ban_word";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "mst_ban_word";
$proto21["m_srcTableName"] = "mst_ban_word";
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
$proto20["m_sql"] = "`mst_ban_word`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "mst_ban_word";
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
	"m_strTable" => "mst_ban_word",
	"m_srcTableName" => "mst_ban_word"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_ban_word";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_ban_word = createSqlQuery_mst_ban_word();


	
		;

							

$tdatamst_ban_word[".sqlquery"] = $queryData_mst_ban_word;

include_once(getabspath("include/mst_ban_word_events.php"));
$tableEvents["mst_ban_word"] = new eventclass_mst_ban_word;
$tdatamst_ban_word[".hasEvents"] = true;

?>