<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_expense_categories = array();
	$tdatafreee_expense_categories[".truncateText"] = true;
	$tdatafreee_expense_categories[".NumberOfChars"] = 80;
	$tdatafreee_expense_categories[".ShortName"] = "freee_expense_categories";
	$tdatafreee_expense_categories[".OwnerID"] = "";
	$tdatafreee_expense_categories[".OriginalTable"] = "freee_expense_categories";

//	field labels
$fieldLabelsfreee_expense_categories = array();
$fieldToolTipsfreee_expense_categories = array();
$pageTitlesfreee_expense_categories = array();
$placeHoldersfreee_expense_categories = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_expense_categories["Japanese"] = array();
	$fieldToolTipsfreee_expense_categories["Japanese"] = array();
	$placeHoldersfreee_expense_categories["Japanese"] = array();
	$pageTitlesfreee_expense_categories["Japanese"] = array();
	$fieldLabelsfreee_expense_categories["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_expense_categories["Japanese"]["id"] = "";
	$placeHoldersfreee_expense_categories["Japanese"]["id"] = "";
	$fieldLabelsfreee_expense_categories["Japanese"]["name"] = "和名";
	$fieldToolTipsfreee_expense_categories["Japanese"]["name"] = "";
	$placeHoldersfreee_expense_categories["Japanese"]["name"] = "";
	$fieldLabelsfreee_expense_categories["Japanese"]["sort"] = "Sort";
	$fieldToolTipsfreee_expense_categories["Japanese"]["sort"] = "";
	$placeHoldersfreee_expense_categories["Japanese"]["sort"] = "";
	$fieldLabelsfreee_expense_categories["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsfreee_expense_categories["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_expense_categories["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_expense_categories["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsfreee_expense_categories["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_expense_categories["Japanese"]["updated_by"] = "";
	$fieldLabelsfreee_expense_categories["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsfreee_expense_categories["Japanese"]["created_at"] = "";
	$placeHoldersfreee_expense_categories["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_expense_categories["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsfreee_expense_categories["Japanese"]["created_by"] = "";
	$placeHoldersfreee_expense_categories["Japanese"]["created_by"] = "";
	if (count($fieldToolTipsfreee_expense_categories["Japanese"]))
		$tdatafreee_expense_categories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_expense_categories[""] = array();
	$fieldToolTipsfreee_expense_categories[""] = array();
	$placeHoldersfreee_expense_categories[""] = array();
	$pageTitlesfreee_expense_categories[""] = array();
	$fieldLabelsfreee_expense_categories[""]["id"] = "Id";
	$fieldToolTipsfreee_expense_categories[""]["id"] = "";
	$placeHoldersfreee_expense_categories[""]["id"] = "";
	$fieldLabelsfreee_expense_categories[""]["name"] = "Name";
	$fieldToolTipsfreee_expense_categories[""]["name"] = "";
	$placeHoldersfreee_expense_categories[""]["name"] = "";
	$fieldLabelsfreee_expense_categories[""]["sort"] = "Sort";
	$fieldToolTipsfreee_expense_categories[""]["sort"] = "";
	$placeHoldersfreee_expense_categories[""]["sort"] = "";
	$fieldLabelsfreee_expense_categories[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_expense_categories[""]["updated_at"] = "";
	$placeHoldersfreee_expense_categories[""]["updated_at"] = "";
	$fieldLabelsfreee_expense_categories[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_expense_categories[""]["updated_by"] = "";
	$placeHoldersfreee_expense_categories[""]["updated_by"] = "";
	$fieldLabelsfreee_expense_categories[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_expense_categories[""]["created_at"] = "";
	$placeHoldersfreee_expense_categories[""]["created_at"] = "";
	$fieldLabelsfreee_expense_categories[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_expense_categories[""]["created_by"] = "";
	$placeHoldersfreee_expense_categories[""]["created_by"] = "";
	if (count($fieldToolTipsfreee_expense_categories[""]))
		$tdatafreee_expense_categories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_expense_categories["English"] = array();
	$fieldToolTipsfreee_expense_categories["English"] = array();
	$placeHoldersfreee_expense_categories["English"] = array();
	$pageTitlesfreee_expense_categories["English"] = array();
	$fieldLabelsfreee_expense_categories["English"]["id"] = "Id";
	$fieldToolTipsfreee_expense_categories["English"]["id"] = "";
	$placeHoldersfreee_expense_categories["English"]["id"] = "";
	$fieldLabelsfreee_expense_categories["English"]["name"] = "Name";
	$fieldToolTipsfreee_expense_categories["English"]["name"] = "";
	$placeHoldersfreee_expense_categories["English"]["name"] = "";
	$fieldLabelsfreee_expense_categories["English"]["sort"] = "Sort";
	$fieldToolTipsfreee_expense_categories["English"]["sort"] = "";
	$placeHoldersfreee_expense_categories["English"]["sort"] = "";
	$fieldLabelsfreee_expense_categories["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_expense_categories["English"]["updated_at"] = "";
	$placeHoldersfreee_expense_categories["English"]["updated_at"] = "";
	$fieldLabelsfreee_expense_categories["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_expense_categories["English"]["updated_by"] = "";
	$placeHoldersfreee_expense_categories["English"]["updated_by"] = "";
	$fieldLabelsfreee_expense_categories["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_expense_categories["English"]["created_at"] = "";
	$placeHoldersfreee_expense_categories["English"]["created_at"] = "";
	$fieldLabelsfreee_expense_categories["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_expense_categories["English"]["created_by"] = "";
	$placeHoldersfreee_expense_categories["English"]["created_by"] = "";
	if (count($fieldToolTipsfreee_expense_categories["English"]))
		$tdatafreee_expense_categories[".isUseToolTips"] = true;
}


	$tdatafreee_expense_categories[".NCSearch"] = true;



$tdatafreee_expense_categories[".shortTableName"] = "freee_expense_categories";
$tdatafreee_expense_categories[".nSecOptions"] = 0;
$tdatafreee_expense_categories[".recsPerRowPrint"] = 1;
$tdatafreee_expense_categories[".mainTableOwnerID"] = "";
$tdatafreee_expense_categories[".moveNext"] = 1;
$tdatafreee_expense_categories[".entityType"] = 0;

$tdatafreee_expense_categories[".strOriginalTableName"] = "freee_expense_categories";

	



$tdatafreee_expense_categories[".showAddInPopup"] = false;

$tdatafreee_expense_categories[".showEditInPopup"] = false;

$tdatafreee_expense_categories[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_expense_categories[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_expense_categories[".fieldsForRegister"] = array();

$tdatafreee_expense_categories[".listAjax"] = false;

	$tdatafreee_expense_categories[".audit"] = false;

	$tdatafreee_expense_categories[".locking"] = false;



$tdatafreee_expense_categories[".list"] = true;

$tdatafreee_expense_categories[".inlineEdit"] = true;


$tdatafreee_expense_categories[".reorderRecordsByHeader"] = true;



$tdatafreee_expense_categories[".inlineAdd"] = true;

$tdatafreee_expense_categories[".import"] = true;

$tdatafreee_expense_categories[".exportTo"] = true;


$tdatafreee_expense_categories[".delete"] = true;

$tdatafreee_expense_categories[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_expense_categories[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_expense_categories[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_expense_categories[".searchSaving"] = false;
//

$tdatafreee_expense_categories[".showSearchPanel"] = true;
		$tdatafreee_expense_categories[".flexibleSearch"] = true;

$tdatafreee_expense_categories[".isUseAjaxSuggest"] = true;

$tdatafreee_expense_categories[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_expense_categories[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_expense_categories[".buttonsAdded"] = false;

$tdatafreee_expense_categories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_expense_categories[".isUseTimeForSearch"] = false;





$tdatafreee_expense_categories[".allSearchFields"] = array();
$tdatafreee_expense_categories[".filterFields"] = array();
$tdatafreee_expense_categories[".requiredSearchFields"] = array();

$tdatafreee_expense_categories[".allSearchFields"][] = "id";
	$tdatafreee_expense_categories[".allSearchFields"][] = "name";
	$tdatafreee_expense_categories[".allSearchFields"][] = "sort";
	$tdatafreee_expense_categories[".allSearchFields"][] = "updated_at";
	$tdatafreee_expense_categories[".allSearchFields"][] = "updated_by";
	$tdatafreee_expense_categories[".allSearchFields"][] = "created_at";
	$tdatafreee_expense_categories[".allSearchFields"][] = "created_by";
	

$tdatafreee_expense_categories[".googleLikeFields"] = array();
$tdatafreee_expense_categories[".googleLikeFields"][] = "id";
$tdatafreee_expense_categories[".googleLikeFields"][] = "name";
$tdatafreee_expense_categories[".googleLikeFields"][] = "sort";
$tdatafreee_expense_categories[".googleLikeFields"][] = "updated_at";
$tdatafreee_expense_categories[".googleLikeFields"][] = "updated_by";
$tdatafreee_expense_categories[".googleLikeFields"][] = "created_at";
$tdatafreee_expense_categories[".googleLikeFields"][] = "created_by";


$tdatafreee_expense_categories[".advSearchFields"] = array();
$tdatafreee_expense_categories[".advSearchFields"][] = "id";
$tdatafreee_expense_categories[".advSearchFields"][] = "name";
$tdatafreee_expense_categories[".advSearchFields"][] = "sort";
$tdatafreee_expense_categories[".advSearchFields"][] = "updated_at";
$tdatafreee_expense_categories[".advSearchFields"][] = "updated_by";
$tdatafreee_expense_categories[".advSearchFields"][] = "created_at";
$tdatafreee_expense_categories[".advSearchFields"][] = "created_by";

$tdatafreee_expense_categories[".tableType"] = "list";

$tdatafreee_expense_categories[".printerPageOrientation"] = 0;
$tdatafreee_expense_categories[".nPrinterPageScale"] = 100;

$tdatafreee_expense_categories[".nPrinterSplitRecords"] = 40;

$tdatafreee_expense_categories[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_expense_categories[".geocodingEnabled"] = false;





$tdatafreee_expense_categories[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_expense_categories[".pageSize"] = 20;

$tdatafreee_expense_categories[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_expense_categories[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_expense_categories[".orderindexes"] = array();
$tdatafreee_expense_categories[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`sort`");

$tdatafreee_expense_categories[".sqlHead"] = "SELECT `id`,  `name`,  `sort`,  `updated_at`,  `updated_by`,  `created_at`,  `created_by`";
$tdatafreee_expense_categories[".sqlFrom"] = "FROM `freee_expense_categories`";
$tdatafreee_expense_categories[".sqlWhereExpr"] = "";
$tdatafreee_expense_categories[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_expense_categories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_expense_categories[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_expense_categories[".highlightSearchResults"] = true;

$tableKeysfreee_expense_categories = array();
$tableKeysfreee_expense_categories[] = "id";
$tdatafreee_expense_categories[".Keys"] = $tableKeysfreee_expense_categories;

$tdatafreee_expense_categories[".listFields"] = array();
$tdatafreee_expense_categories[".listFields"][] = "id";
$tdatafreee_expense_categories[".listFields"][] = "name";
$tdatafreee_expense_categories[".listFields"][] = "sort";
$tdatafreee_expense_categories[".listFields"][] = "updated_at";
$tdatafreee_expense_categories[".listFields"][] = "updated_by";
$tdatafreee_expense_categories[".listFields"][] = "created_at";
$tdatafreee_expense_categories[".listFields"][] = "created_by";

$tdatafreee_expense_categories[".hideMobileList"] = array();


$tdatafreee_expense_categories[".viewFields"] = array();

$tdatafreee_expense_categories[".addFields"] = array();

$tdatafreee_expense_categories[".masterListFields"] = array();
$tdatafreee_expense_categories[".masterListFields"][] = "id";
$tdatafreee_expense_categories[".masterListFields"][] = "name";
$tdatafreee_expense_categories[".masterListFields"][] = "sort";
$tdatafreee_expense_categories[".masterListFields"][] = "updated_at";
$tdatafreee_expense_categories[".masterListFields"][] = "updated_by";
$tdatafreee_expense_categories[".masterListFields"][] = "created_at";
$tdatafreee_expense_categories[".masterListFields"][] = "created_by";

$tdatafreee_expense_categories[".inlineAddFields"] = array();
$tdatafreee_expense_categories[".inlineAddFields"][] = "name";
$tdatafreee_expense_categories[".inlineAddFields"][] = "sort";

$tdatafreee_expense_categories[".editFields"] = array();

$tdatafreee_expense_categories[".inlineEditFields"] = array();
$tdatafreee_expense_categories[".inlineEditFields"][] = "name";
$tdatafreee_expense_categories[".inlineEditFields"][] = "sort";

$tdatafreee_expense_categories[".updateSelectedFields"] = array();


$tdatafreee_expense_categories[".exportFields"] = array();
$tdatafreee_expense_categories[".exportFields"][] = "id";
$tdatafreee_expense_categories[".exportFields"][] = "name";
$tdatafreee_expense_categories[".exportFields"][] = "sort";
$tdatafreee_expense_categories[".exportFields"][] = "updated_at";
$tdatafreee_expense_categories[".exportFields"][] = "updated_by";
$tdatafreee_expense_categories[".exportFields"][] = "created_at";
$tdatafreee_expense_categories[".exportFields"][] = "created_by";

$tdatafreee_expense_categories[".importFields"] = array();
$tdatafreee_expense_categories[".importFields"][] = "id";
$tdatafreee_expense_categories[".importFields"][] = "name";
$tdatafreee_expense_categories[".importFields"][] = "sort";
$tdatafreee_expense_categories[".importFields"][] = "updated_at";
$tdatafreee_expense_categories[".importFields"][] = "updated_by";
$tdatafreee_expense_categories[".importFields"][] = "created_at";
$tdatafreee_expense_categories[".importFields"][] = "created_by";

$tdatafreee_expense_categories[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_expense_categories";
	$fdata["Label"] = GetFieldLabel("freee_expense_categories","id");
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




	$tdatafreee_expense_categories["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "freee_expense_categories";
	$fdata["Label"] = GetFieldLabel("freee_expense_categories","name");
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




	$tdatafreee_expense_categories["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "freee_expense_categories";
	$fdata["Label"] = GetFieldLabel("freee_expense_categories","sort");
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




	$tdatafreee_expense_categories["sort"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_expense_categories";
	$fdata["Label"] = GetFieldLabel("freee_expense_categories","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_at`";

	
	
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




	$tdatafreee_expense_categories["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_expense_categories";
	$fdata["Label"] = GetFieldLabel("freee_expense_categories","updated_by");
	$fdata["FieldType"] = 200;

	
	
	
			
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

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdatafreee_expense_categories["updated_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_expense_categories";
	$fdata["Label"] = GetFieldLabel("freee_expense_categories","created_at");
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




	$tdatafreee_expense_categories["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_expense_categories";
	$fdata["Label"] = GetFieldLabel("freee_expense_categories","created_by");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdatafreee_expense_categories["created_by"] = $fdata;


$tables_data["freee_expense_categories"]=&$tdatafreee_expense_categories;
$field_labels["freee_expense_categories"] = &$fieldLabelsfreee_expense_categories;
$fieldToolTips["freee_expense_categories"] = &$fieldToolTipsfreee_expense_categories;
$placeHolders["freee_expense_categories"] = &$placeHoldersfreee_expense_categories;
$page_titles["freee_expense_categories"] = &$pageTitlesfreee_expense_categories;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_expense_categories"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_expense_categories"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_expense_categories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `sort`,  `updated_at`,  `updated_by`,  `created_at`,  `created_by`";
$proto0["m_strFrom"] = "FROM `freee_expense_categories`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `sort` DESC";
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
	"m_strTable" => "freee_expense_categories",
	"m_srcTableName" => "freee_expense_categories"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_expense_categories";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "freee_expense_categories",
	"m_srcTableName" => "freee_expense_categories"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "freee_expense_categories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "freee_expense_categories",
	"m_srcTableName" => "freee_expense_categories"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "freee_expense_categories";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_expense_categories",
	"m_srcTableName" => "freee_expense_categories"
));

$proto12["m_sql"] = "`updated_at`";
$proto12["m_srcTableName"] = "freee_expense_categories";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_expense_categories",
	"m_srcTableName" => "freee_expense_categories"
));

$proto14["m_sql"] = "`updated_by`";
$proto14["m_srcTableName"] = "freee_expense_categories";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_expense_categories",
	"m_srcTableName" => "freee_expense_categories"
));

$proto16["m_sql"] = "`created_at`";
$proto16["m_srcTableName"] = "freee_expense_categories";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_expense_categories",
	"m_srcTableName" => "freee_expense_categories"
));

$proto18["m_sql"] = "`created_by`";
$proto18["m_srcTableName"] = "freee_expense_categories";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "freee_expense_categories";
$proto21["m_srcTableName"] = "freee_expense_categories";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "name";
$proto21["m_columns"][] = "sort";
$proto21["m_columns"][] = "updated_at";
$proto21["m_columns"][] = "updated_by";
$proto21["m_columns"][] = "created_at";
$proto21["m_columns"][] = "created_by";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`freee_expense_categories`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "freee_expense_categories";
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
	"m_strTable" => "freee_expense_categories",
	"m_srcTableName" => "freee_expense_categories"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="freee_expense_categories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_expense_categories = createSqlQuery_freee_expense_categories();


	
		;

							

$tdatafreee_expense_categories[".sqlquery"] = $queryData_freee_expense_categories;

$tableEvents["freee_expense_categories"] = new eventsBase;
$tdatafreee_expense_categories[".hasEvents"] = false;

?>