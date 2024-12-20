<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_account_categories_revenue = array();
	$tdatafreee_account_categories_revenue[".truncateText"] = true;
	$tdatafreee_account_categories_revenue[".NumberOfChars"] = 80;
	$tdatafreee_account_categories_revenue[".ShortName"] = "freee_account_categories_revenue";
	$tdatafreee_account_categories_revenue[".OwnerID"] = "";
	$tdatafreee_account_categories_revenue[".OriginalTable"] = "freee_account_categories_revenue";

//	field labels
$fieldLabelsfreee_account_categories_revenue = array();
$fieldToolTipsfreee_account_categories_revenue = array();
$pageTitlesfreee_account_categories_revenue = array();
$placeHoldersfreee_account_categories_revenue = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_account_categories_revenue["Japanese"] = array();
	$fieldToolTipsfreee_account_categories_revenue["Japanese"] = array();
	$placeHoldersfreee_account_categories_revenue["Japanese"] = array();
	$pageTitlesfreee_account_categories_revenue["Japanese"] = array();
	$fieldLabelsfreee_account_categories_revenue["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_account_categories_revenue["Japanese"]["id"] = "";
	$placeHoldersfreee_account_categories_revenue["Japanese"]["id"] = "";
	$fieldLabelsfreee_account_categories_revenue["Japanese"]["account_category_id"] = "Account Category Id";
	$fieldToolTipsfreee_account_categories_revenue["Japanese"]["account_category_id"] = "";
	$placeHoldersfreee_account_categories_revenue["Japanese"]["account_category_id"] = "";
	$fieldLabelsfreee_account_categories_revenue["Japanese"]["is_revenue"] = "Is Revenue";
	$fieldToolTipsfreee_account_categories_revenue["Japanese"]["is_revenue"] = "";
	$placeHoldersfreee_account_categories_revenue["Japanese"]["is_revenue"] = "";
	$fieldLabelsfreee_account_categories_revenue["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsfreee_account_categories_revenue["Japanese"]["update_by"] = "";
	$placeHoldersfreee_account_categories_revenue["Japanese"]["update_by"] = "";
	$fieldLabelsfreee_account_categories_revenue["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsfreee_account_categories_revenue["Japanese"]["update_at"] = "";
	$placeHoldersfreee_account_categories_revenue["Japanese"]["update_at"] = "";
	$fieldLabelsfreee_account_categories_revenue["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsfreee_account_categories_revenue["Japanese"]["create_by"] = "";
	$placeHoldersfreee_account_categories_revenue["Japanese"]["create_by"] = "";
	$fieldLabelsfreee_account_categories_revenue["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsfreee_account_categories_revenue["Japanese"]["create_at"] = "";
	$placeHoldersfreee_account_categories_revenue["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsfreee_account_categories_revenue["Japanese"]))
		$tdatafreee_account_categories_revenue[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_account_categories_revenue[""] = array();
	$fieldToolTipsfreee_account_categories_revenue[""] = array();
	$placeHoldersfreee_account_categories_revenue[""] = array();
	$pageTitlesfreee_account_categories_revenue[""] = array();
	$fieldLabelsfreee_account_categories_revenue[""]["id"] = "Id";
	$fieldToolTipsfreee_account_categories_revenue[""]["id"] = "";
	$placeHoldersfreee_account_categories_revenue[""]["id"] = "";
	$fieldLabelsfreee_account_categories_revenue[""]["account_category_id"] = "Account Category Id";
	$fieldToolTipsfreee_account_categories_revenue[""]["account_category_id"] = "";
	$placeHoldersfreee_account_categories_revenue[""]["account_category_id"] = "";
	$fieldLabelsfreee_account_categories_revenue[""]["is_revenue"] = "Is Revenue";
	$fieldToolTipsfreee_account_categories_revenue[""]["is_revenue"] = "";
	$placeHoldersfreee_account_categories_revenue[""]["is_revenue"] = "";
	$fieldLabelsfreee_account_categories_revenue[""]["update_by"] = "Update By";
	$fieldToolTipsfreee_account_categories_revenue[""]["update_by"] = "";
	$placeHoldersfreee_account_categories_revenue[""]["update_by"] = "";
	$fieldLabelsfreee_account_categories_revenue[""]["update_at"] = "Update At";
	$fieldToolTipsfreee_account_categories_revenue[""]["update_at"] = "";
	$placeHoldersfreee_account_categories_revenue[""]["update_at"] = "";
	$fieldLabelsfreee_account_categories_revenue[""]["create_by"] = "Create By";
	$fieldToolTipsfreee_account_categories_revenue[""]["create_by"] = "";
	$placeHoldersfreee_account_categories_revenue[""]["create_by"] = "";
	$fieldLabelsfreee_account_categories_revenue[""]["create_at"] = "Create At";
	$fieldToolTipsfreee_account_categories_revenue[""]["create_at"] = "";
	$placeHoldersfreee_account_categories_revenue[""]["create_at"] = "";
	if (count($fieldToolTipsfreee_account_categories_revenue[""]))
		$tdatafreee_account_categories_revenue[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_account_categories_revenue["English"] = array();
	$fieldToolTipsfreee_account_categories_revenue["English"] = array();
	$placeHoldersfreee_account_categories_revenue["English"] = array();
	$pageTitlesfreee_account_categories_revenue["English"] = array();
	$fieldLabelsfreee_account_categories_revenue["English"]["id"] = "Id";
	$fieldToolTipsfreee_account_categories_revenue["English"]["id"] = "";
	$placeHoldersfreee_account_categories_revenue["English"]["id"] = "";
	$fieldLabelsfreee_account_categories_revenue["English"]["account_category_id"] = "Account Category Id";
	$fieldToolTipsfreee_account_categories_revenue["English"]["account_category_id"] = "";
	$placeHoldersfreee_account_categories_revenue["English"]["account_category_id"] = "";
	$fieldLabelsfreee_account_categories_revenue["English"]["is_revenue"] = "Is Revenue";
	$fieldToolTipsfreee_account_categories_revenue["English"]["is_revenue"] = "";
	$placeHoldersfreee_account_categories_revenue["English"]["is_revenue"] = "";
	$fieldLabelsfreee_account_categories_revenue["English"]["update_by"] = "Update By";
	$fieldToolTipsfreee_account_categories_revenue["English"]["update_by"] = "";
	$placeHoldersfreee_account_categories_revenue["English"]["update_by"] = "";
	$fieldLabelsfreee_account_categories_revenue["English"]["update_at"] = "Update At";
	$fieldToolTipsfreee_account_categories_revenue["English"]["update_at"] = "";
	$placeHoldersfreee_account_categories_revenue["English"]["update_at"] = "";
	$fieldLabelsfreee_account_categories_revenue["English"]["create_by"] = "Create By";
	$fieldToolTipsfreee_account_categories_revenue["English"]["create_by"] = "";
	$placeHoldersfreee_account_categories_revenue["English"]["create_by"] = "";
	$fieldLabelsfreee_account_categories_revenue["English"]["create_at"] = "Create At";
	$fieldToolTipsfreee_account_categories_revenue["English"]["create_at"] = "";
	$placeHoldersfreee_account_categories_revenue["English"]["create_at"] = "";
	if (count($fieldToolTipsfreee_account_categories_revenue["English"]))
		$tdatafreee_account_categories_revenue[".isUseToolTips"] = true;
}


	$tdatafreee_account_categories_revenue[".NCSearch"] = true;



$tdatafreee_account_categories_revenue[".shortTableName"] = "freee_account_categories_revenue";
$tdatafreee_account_categories_revenue[".nSecOptions"] = 0;
$tdatafreee_account_categories_revenue[".recsPerRowPrint"] = 1;
$tdatafreee_account_categories_revenue[".mainTableOwnerID"] = "";
$tdatafreee_account_categories_revenue[".moveNext"] = 1;
$tdatafreee_account_categories_revenue[".entityType"] = 0;

$tdatafreee_account_categories_revenue[".strOriginalTableName"] = "freee_account_categories_revenue";

	



$tdatafreee_account_categories_revenue[".showAddInPopup"] = false;

$tdatafreee_account_categories_revenue[".showEditInPopup"] = false;

$tdatafreee_account_categories_revenue[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_account_categories_revenue[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_account_categories_revenue[".fieldsForRegister"] = array();

$tdatafreee_account_categories_revenue[".listAjax"] = false;

	$tdatafreee_account_categories_revenue[".audit"] = false;

	$tdatafreee_account_categories_revenue[".locking"] = false;



$tdatafreee_account_categories_revenue[".list"] = true;

$tdatafreee_account_categories_revenue[".inlineEdit"] = true;


$tdatafreee_account_categories_revenue[".reorderRecordsByHeader"] = true;



$tdatafreee_account_categories_revenue[".inlineAdd"] = true;

$tdatafreee_account_categories_revenue[".import"] = true;

$tdatafreee_account_categories_revenue[".exportTo"] = true;


$tdatafreee_account_categories_revenue[".delete"] = true;

$tdatafreee_account_categories_revenue[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_account_categories_revenue[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_account_categories_revenue[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_account_categories_revenue[".searchSaving"] = false;
//

$tdatafreee_account_categories_revenue[".showSearchPanel"] = true;
		$tdatafreee_account_categories_revenue[".flexibleSearch"] = true;

$tdatafreee_account_categories_revenue[".isUseAjaxSuggest"] = true;

$tdatafreee_account_categories_revenue[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_account_categories_revenue[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_account_categories_revenue[".buttonsAdded"] = false;

$tdatafreee_account_categories_revenue[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_account_categories_revenue[".isUseTimeForSearch"] = false;





$tdatafreee_account_categories_revenue[".allSearchFields"] = array();
$tdatafreee_account_categories_revenue[".filterFields"] = array();
$tdatafreee_account_categories_revenue[".requiredSearchFields"] = array();

$tdatafreee_account_categories_revenue[".allSearchFields"][] = "id";
	$tdatafreee_account_categories_revenue[".allSearchFields"][] = "account_category_id";
	$tdatafreee_account_categories_revenue[".allSearchFields"][] = "is_revenue";
	$tdatafreee_account_categories_revenue[".allSearchFields"][] = "update_by";
	$tdatafreee_account_categories_revenue[".allSearchFields"][] = "update_at";
	$tdatafreee_account_categories_revenue[".allSearchFields"][] = "create_by";
	$tdatafreee_account_categories_revenue[".allSearchFields"][] = "create_at";
	

$tdatafreee_account_categories_revenue[".googleLikeFields"] = array();
$tdatafreee_account_categories_revenue[".googleLikeFields"][] = "id";
$tdatafreee_account_categories_revenue[".googleLikeFields"][] = "account_category_id";
$tdatafreee_account_categories_revenue[".googleLikeFields"][] = "is_revenue";
$tdatafreee_account_categories_revenue[".googleLikeFields"][] = "update_by";
$tdatafreee_account_categories_revenue[".googleLikeFields"][] = "update_at";
$tdatafreee_account_categories_revenue[".googleLikeFields"][] = "create_by";
$tdatafreee_account_categories_revenue[".googleLikeFields"][] = "create_at";


$tdatafreee_account_categories_revenue[".advSearchFields"] = array();
$tdatafreee_account_categories_revenue[".advSearchFields"][] = "id";
$tdatafreee_account_categories_revenue[".advSearchFields"][] = "account_category_id";
$tdatafreee_account_categories_revenue[".advSearchFields"][] = "is_revenue";
$tdatafreee_account_categories_revenue[".advSearchFields"][] = "update_by";
$tdatafreee_account_categories_revenue[".advSearchFields"][] = "update_at";
$tdatafreee_account_categories_revenue[".advSearchFields"][] = "create_by";
$tdatafreee_account_categories_revenue[".advSearchFields"][] = "create_at";

$tdatafreee_account_categories_revenue[".tableType"] = "list";

$tdatafreee_account_categories_revenue[".printerPageOrientation"] = 0;
$tdatafreee_account_categories_revenue[".nPrinterPageScale"] = 100;

$tdatafreee_account_categories_revenue[".nPrinterSplitRecords"] = 40;

$tdatafreee_account_categories_revenue[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_account_categories_revenue[".geocodingEnabled"] = false;





$tdatafreee_account_categories_revenue[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_account_categories_revenue[".pageSize"] = 20;

$tdatafreee_account_categories_revenue[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_account_categories_revenue[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_account_categories_revenue[".orderindexes"] = array();

$tdatafreee_account_categories_revenue[".sqlHead"] = "SELECT `id`,  	`account_category_id`,  	`is_revenue`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$tdatafreee_account_categories_revenue[".sqlFrom"] = "FROM `freee_account_categories_revenue`";
$tdatafreee_account_categories_revenue[".sqlWhereExpr"] = "";
$tdatafreee_account_categories_revenue[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_account_categories_revenue[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_account_categories_revenue[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_account_categories_revenue[".highlightSearchResults"] = true;

$tableKeysfreee_account_categories_revenue = array();
$tableKeysfreee_account_categories_revenue[] = "id";
$tdatafreee_account_categories_revenue[".Keys"] = $tableKeysfreee_account_categories_revenue;

$tdatafreee_account_categories_revenue[".listFields"] = array();
$tdatafreee_account_categories_revenue[".listFields"][] = "id";
$tdatafreee_account_categories_revenue[".listFields"][] = "account_category_id";
$tdatafreee_account_categories_revenue[".listFields"][] = "is_revenue";
$tdatafreee_account_categories_revenue[".listFields"][] = "update_by";
$tdatafreee_account_categories_revenue[".listFields"][] = "update_at";
$tdatafreee_account_categories_revenue[".listFields"][] = "create_by";
$tdatafreee_account_categories_revenue[".listFields"][] = "create_at";

$tdatafreee_account_categories_revenue[".hideMobileList"] = array();


$tdatafreee_account_categories_revenue[".viewFields"] = array();

$tdatafreee_account_categories_revenue[".addFields"] = array();

$tdatafreee_account_categories_revenue[".masterListFields"] = array();
$tdatafreee_account_categories_revenue[".masterListFields"][] = "id";
$tdatafreee_account_categories_revenue[".masterListFields"][] = "account_category_id";
$tdatafreee_account_categories_revenue[".masterListFields"][] = "is_revenue";
$tdatafreee_account_categories_revenue[".masterListFields"][] = "update_by";
$tdatafreee_account_categories_revenue[".masterListFields"][] = "update_at";
$tdatafreee_account_categories_revenue[".masterListFields"][] = "create_by";
$tdatafreee_account_categories_revenue[".masterListFields"][] = "create_at";

$tdatafreee_account_categories_revenue[".inlineAddFields"] = array();
$tdatafreee_account_categories_revenue[".inlineAddFields"][] = "account_category_id";
$tdatafreee_account_categories_revenue[".inlineAddFields"][] = "is_revenue";

$tdatafreee_account_categories_revenue[".editFields"] = array();

$tdatafreee_account_categories_revenue[".inlineEditFields"] = array();
$tdatafreee_account_categories_revenue[".inlineEditFields"][] = "account_category_id";
$tdatafreee_account_categories_revenue[".inlineEditFields"][] = "is_revenue";

$tdatafreee_account_categories_revenue[".updateSelectedFields"] = array();


$tdatafreee_account_categories_revenue[".exportFields"] = array();
$tdatafreee_account_categories_revenue[".exportFields"][] = "id";
$tdatafreee_account_categories_revenue[".exportFields"][] = "account_category_id";
$tdatafreee_account_categories_revenue[".exportFields"][] = "is_revenue";
$tdatafreee_account_categories_revenue[".exportFields"][] = "update_by";
$tdatafreee_account_categories_revenue[".exportFields"][] = "update_at";
$tdatafreee_account_categories_revenue[".exportFields"][] = "create_by";
$tdatafreee_account_categories_revenue[".exportFields"][] = "create_at";

$tdatafreee_account_categories_revenue[".importFields"] = array();
$tdatafreee_account_categories_revenue[".importFields"][] = "id";
$tdatafreee_account_categories_revenue[".importFields"][] = "account_category_id";
$tdatafreee_account_categories_revenue[".importFields"][] = "is_revenue";
$tdatafreee_account_categories_revenue[".importFields"][] = "update_by";
$tdatafreee_account_categories_revenue[".importFields"][] = "update_at";
$tdatafreee_account_categories_revenue[".importFields"][] = "create_by";
$tdatafreee_account_categories_revenue[".importFields"][] = "create_at";

$tdatafreee_account_categories_revenue[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_account_categories_revenue";
	$fdata["Label"] = GetFieldLabel("freee_account_categories_revenue","id");
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




	$tdatafreee_account_categories_revenue["id"] = $fdata;
//	account_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "account_category_id";
	$fdata["GoodName"] = "account_category_id";
	$fdata["ownerTable"] = "freee_account_categories_revenue";
	$fdata["Label"] = GetFieldLabel("freee_account_categories_revenue","account_category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "account_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`account_category_id`";

	
	
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
	$edata["LookupTable"] = "vw_freee_account_category";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "account_category_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "account_category";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdatafreee_account_categories_revenue["account_category_id"] = $fdata;
//	is_revenue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "is_revenue";
	$fdata["GoodName"] = "is_revenue";
	$fdata["ownerTable"] = "freee_account_categories_revenue";
	$fdata["Label"] = GetFieldLabel("freee_account_categories_revenue","is_revenue");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_revenue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_revenue`";

	
	
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




	$tdatafreee_account_categories_revenue["is_revenue"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "freee_account_categories_revenue";
	$fdata["Label"] = GetFieldLabel("freee_account_categories_revenue","update_by");
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




	$tdatafreee_account_categories_revenue["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "freee_account_categories_revenue";
	$fdata["Label"] = GetFieldLabel("freee_account_categories_revenue","update_at");
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




	$tdatafreee_account_categories_revenue["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "freee_account_categories_revenue";
	$fdata["Label"] = GetFieldLabel("freee_account_categories_revenue","create_by");
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




	$tdatafreee_account_categories_revenue["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "freee_account_categories_revenue";
	$fdata["Label"] = GetFieldLabel("freee_account_categories_revenue","create_at");
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




	$tdatafreee_account_categories_revenue["create_at"] = $fdata;


$tables_data["freee_account_categories_revenue"]=&$tdatafreee_account_categories_revenue;
$field_labels["freee_account_categories_revenue"] = &$fieldLabelsfreee_account_categories_revenue;
$fieldToolTips["freee_account_categories_revenue"] = &$fieldToolTipsfreee_account_categories_revenue;
$placeHolders["freee_account_categories_revenue"] = &$placeHoldersfreee_account_categories_revenue;
$page_titles["freee_account_categories_revenue"] = &$pageTitlesfreee_account_categories_revenue;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_account_categories_revenue"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_account_categories_revenue"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_account_categories_revenue()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`account_category_id`,  	`is_revenue`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$proto0["m_strFrom"] = "FROM `freee_account_categories_revenue`";
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
	"m_strTable" => "freee_account_categories_revenue",
	"m_srcTableName" => "freee_account_categories_revenue"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_account_categories_revenue";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "account_category_id",
	"m_strTable" => "freee_account_categories_revenue",
	"m_srcTableName" => "freee_account_categories_revenue"
));

$proto8["m_sql"] = "`account_category_id`";
$proto8["m_srcTableName"] = "freee_account_categories_revenue";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "is_revenue",
	"m_strTable" => "freee_account_categories_revenue",
	"m_srcTableName" => "freee_account_categories_revenue"
));

$proto10["m_sql"] = "`is_revenue`";
$proto10["m_srcTableName"] = "freee_account_categories_revenue";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "freee_account_categories_revenue",
	"m_srcTableName" => "freee_account_categories_revenue"
));

$proto12["m_sql"] = "`update_by`";
$proto12["m_srcTableName"] = "freee_account_categories_revenue";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "freee_account_categories_revenue",
	"m_srcTableName" => "freee_account_categories_revenue"
));

$proto14["m_sql"] = "`update_at`";
$proto14["m_srcTableName"] = "freee_account_categories_revenue";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "freee_account_categories_revenue",
	"m_srcTableName" => "freee_account_categories_revenue"
));

$proto16["m_sql"] = "`create_by`";
$proto16["m_srcTableName"] = "freee_account_categories_revenue";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "freee_account_categories_revenue",
	"m_srcTableName" => "freee_account_categories_revenue"
));

$proto18["m_sql"] = "`create_at`";
$proto18["m_srcTableName"] = "freee_account_categories_revenue";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "freee_account_categories_revenue";
$proto21["m_srcTableName"] = "freee_account_categories_revenue";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "account_category_id";
$proto21["m_columns"][] = "is_revenue";
$proto21["m_columns"][] = "update_by";
$proto21["m_columns"][] = "update_at";
$proto21["m_columns"][] = "create_by";
$proto21["m_columns"][] = "create_at";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`freee_account_categories_revenue`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "freee_account_categories_revenue";
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
$proto0["m_srcTableName"]="freee_account_categories_revenue";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_account_categories_revenue = createSqlQuery_freee_account_categories_revenue();


	
		;

							

$tdatafreee_account_categories_revenue[".sqlquery"] = $queryData_freee_account_categories_revenue;

include_once(getabspath("include/freee_account_categories_revenue_events.php"));
$tableEvents["freee_account_categories_revenue"] = new eventclass_freee_account_categories_revenue;
$tdatafreee_account_categories_revenue[".hasEvents"] = true;

?>