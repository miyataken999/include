<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_saisan_rules = array();
	$tdatafreee_saisan_rules[".truncateText"] = true;
	$tdatafreee_saisan_rules[".NumberOfChars"] = 80;
	$tdatafreee_saisan_rules[".ShortName"] = "freee_saisan_rules";
	$tdatafreee_saisan_rules[".OwnerID"] = "";
	$tdatafreee_saisan_rules[".OriginalTable"] = "freee_saisan_rules";

//	field labels
$fieldLabelsfreee_saisan_rules = array();
$fieldToolTipsfreee_saisan_rules = array();
$pageTitlesfreee_saisan_rules = array();
$placeHoldersfreee_saisan_rules = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_saisan_rules["Japanese"] = array();
	$fieldToolTipsfreee_saisan_rules["Japanese"] = array();
	$placeHoldersfreee_saisan_rules["Japanese"] = array();
	$pageTitlesfreee_saisan_rules["Japanese"] = array();
	$fieldLabelsfreee_saisan_rules["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_saisan_rules["Japanese"]["id"] = "";
	$placeHoldersfreee_saisan_rules["Japanese"]["id"] = "";
	$fieldLabelsfreee_saisan_rules["Japanese"]["expenditure_or_income"] = "支出・収入";
	$fieldToolTipsfreee_saisan_rules["Japanese"]["expenditure_or_income"] = "";
	$placeHoldersfreee_saisan_rules["Japanese"]["expenditure_or_income"] = "";
	$fieldLabelsfreee_saisan_rules["Japanese"]["name"] = "採算項目";
	$fieldToolTipsfreee_saisan_rules["Japanese"]["name"] = "";
	$placeHoldersfreee_saisan_rules["Japanese"]["name"] = "";
	$fieldLabelsfreee_saisan_rules["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsfreee_saisan_rules["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_saisan_rules["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_saisan_rules["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsfreee_saisan_rules["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_saisan_rules["Japanese"]["updated_by"] = "";
	$fieldLabelsfreee_saisan_rules["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsfreee_saisan_rules["Japanese"]["created_at"] = "";
	$placeHoldersfreee_saisan_rules["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_saisan_rules["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsfreee_saisan_rules["Japanese"]["created_by"] = "";
	$placeHoldersfreee_saisan_rules["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_saisan_rules["Japanese"]["dept_group_id"] = "部署";
	$fieldToolTipsfreee_saisan_rules["Japanese"]["dept_group_id"] = "";
	$placeHoldersfreee_saisan_rules["Japanese"]["dept_group_id"] = "";
	$fieldLabelsfreee_saisan_rules["Japanese"]["expense_category_id"] = "経費カテゴリー";
	$fieldToolTipsfreee_saisan_rules["Japanese"]["expense_category_id"] = "";
	$placeHoldersfreee_saisan_rules["Japanese"]["expense_category_id"] = "";
	$fieldLabelsfreee_saisan_rules["Japanese"]["is_disabled"] = "非表示にする";
	$fieldToolTipsfreee_saisan_rules["Japanese"]["is_disabled"] = "";
	$placeHoldersfreee_saisan_rules["Japanese"]["is_disabled"] = "";
	if (count($fieldToolTipsfreee_saisan_rules["Japanese"]))
		$tdatafreee_saisan_rules[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_saisan_rules[""] = array();
	$fieldToolTipsfreee_saisan_rules[""] = array();
	$placeHoldersfreee_saisan_rules[""] = array();
	$pageTitlesfreee_saisan_rules[""] = array();
	$fieldLabelsfreee_saisan_rules[""]["id"] = "Id";
	$fieldToolTipsfreee_saisan_rules[""]["id"] = "";
	$placeHoldersfreee_saisan_rules[""]["id"] = "";
	$fieldLabelsfreee_saisan_rules[""]["expenditure_or_income"] = "Expenditure Or Income";
	$fieldToolTipsfreee_saisan_rules[""]["expenditure_or_income"] = "";
	$placeHoldersfreee_saisan_rules[""]["expenditure_or_income"] = "";
	$fieldLabelsfreee_saisan_rules[""]["name"] = "Name";
	$fieldToolTipsfreee_saisan_rules[""]["name"] = "";
	$placeHoldersfreee_saisan_rules[""]["name"] = "";
	$fieldLabelsfreee_saisan_rules[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_saisan_rules[""]["updated_at"] = "";
	$placeHoldersfreee_saisan_rules[""]["updated_at"] = "";
	$fieldLabelsfreee_saisan_rules[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_saisan_rules[""]["updated_by"] = "";
	$placeHoldersfreee_saisan_rules[""]["updated_by"] = "";
	$fieldLabelsfreee_saisan_rules[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_saisan_rules[""]["created_at"] = "";
	$placeHoldersfreee_saisan_rules[""]["created_at"] = "";
	$fieldLabelsfreee_saisan_rules[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_saisan_rules[""]["created_by"] = "";
	$placeHoldersfreee_saisan_rules[""]["created_by"] = "";
	$fieldLabelsfreee_saisan_rules[""]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsfreee_saisan_rules[""]["dept_group_id"] = "";
	$placeHoldersfreee_saisan_rules[""]["dept_group_id"] = "";
	$fieldLabelsfreee_saisan_rules[""]["expense_category_id"] = "Expense Category Id";
	$fieldToolTipsfreee_saisan_rules[""]["expense_category_id"] = "";
	$placeHoldersfreee_saisan_rules[""]["expense_category_id"] = "";
	$fieldLabelsfreee_saisan_rules[""]["is_disabled"] = "Is Disabled";
	$fieldToolTipsfreee_saisan_rules[""]["is_disabled"] = "";
	$placeHoldersfreee_saisan_rules[""]["is_disabled"] = "";
	if (count($fieldToolTipsfreee_saisan_rules[""]))
		$tdatafreee_saisan_rules[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_saisan_rules["English"] = array();
	$fieldToolTipsfreee_saisan_rules["English"] = array();
	$placeHoldersfreee_saisan_rules["English"] = array();
	$pageTitlesfreee_saisan_rules["English"] = array();
	$fieldLabelsfreee_saisan_rules["English"]["id"] = "Id";
	$fieldToolTipsfreee_saisan_rules["English"]["id"] = "";
	$placeHoldersfreee_saisan_rules["English"]["id"] = "";
	$fieldLabelsfreee_saisan_rules["English"]["expenditure_or_income"] = "Expenditure Or Income";
	$fieldToolTipsfreee_saisan_rules["English"]["expenditure_or_income"] = "";
	$placeHoldersfreee_saisan_rules["English"]["expenditure_or_income"] = "";
	$fieldLabelsfreee_saisan_rules["English"]["name"] = "Name";
	$fieldToolTipsfreee_saisan_rules["English"]["name"] = "";
	$placeHoldersfreee_saisan_rules["English"]["name"] = "";
	$fieldLabelsfreee_saisan_rules["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_saisan_rules["English"]["updated_at"] = "";
	$placeHoldersfreee_saisan_rules["English"]["updated_at"] = "";
	$fieldLabelsfreee_saisan_rules["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_saisan_rules["English"]["updated_by"] = "";
	$placeHoldersfreee_saisan_rules["English"]["updated_by"] = "";
	$fieldLabelsfreee_saisan_rules["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_saisan_rules["English"]["created_at"] = "";
	$placeHoldersfreee_saisan_rules["English"]["created_at"] = "";
	$fieldLabelsfreee_saisan_rules["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_saisan_rules["English"]["created_by"] = "";
	$placeHoldersfreee_saisan_rules["English"]["created_by"] = "";
	$fieldLabelsfreee_saisan_rules["English"]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsfreee_saisan_rules["English"]["dept_group_id"] = "";
	$placeHoldersfreee_saisan_rules["English"]["dept_group_id"] = "";
	$fieldLabelsfreee_saisan_rules["English"]["expense_category_id"] = "Expense Category Id";
	$fieldToolTipsfreee_saisan_rules["English"]["expense_category_id"] = "";
	$placeHoldersfreee_saisan_rules["English"]["expense_category_id"] = "";
	$fieldLabelsfreee_saisan_rules["English"]["is_disabled"] = "Is Disabled";
	$fieldToolTipsfreee_saisan_rules["English"]["is_disabled"] = "";
	$placeHoldersfreee_saisan_rules["English"]["is_disabled"] = "";
	if (count($fieldToolTipsfreee_saisan_rules["English"]))
		$tdatafreee_saisan_rules[".isUseToolTips"] = true;
}


	$tdatafreee_saisan_rules[".NCSearch"] = true;



$tdatafreee_saisan_rules[".shortTableName"] = "freee_saisan_rules";
$tdatafreee_saisan_rules[".nSecOptions"] = 0;
$tdatafreee_saisan_rules[".recsPerRowPrint"] = 1;
$tdatafreee_saisan_rules[".mainTableOwnerID"] = "";
$tdatafreee_saisan_rules[".moveNext"] = 1;
$tdatafreee_saisan_rules[".entityType"] = 0;

$tdatafreee_saisan_rules[".strOriginalTableName"] = "freee_saisan_rules";

	



$tdatafreee_saisan_rules[".showAddInPopup"] = false;

$tdatafreee_saisan_rules[".showEditInPopup"] = false;

$tdatafreee_saisan_rules[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_saisan_rules[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_saisan_rules[".fieldsForRegister"] = array();

$tdatafreee_saisan_rules[".listAjax"] = false;

	$tdatafreee_saisan_rules[".audit"] = false;

	$tdatafreee_saisan_rules[".locking"] = false;



$tdatafreee_saisan_rules[".list"] = true;

$tdatafreee_saisan_rules[".inlineEdit"] = true;


$tdatafreee_saisan_rules[".reorderRecordsByHeader"] = true;



$tdatafreee_saisan_rules[".inlineAdd"] = true;

$tdatafreee_saisan_rules[".import"] = true;

$tdatafreee_saisan_rules[".exportTo"] = true;


$tdatafreee_saisan_rules[".delete"] = true;

$tdatafreee_saisan_rules[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_saisan_rules[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_saisan_rules[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_saisan_rules[".searchSaving"] = false;
//

$tdatafreee_saisan_rules[".showSearchPanel"] = true;
		$tdatafreee_saisan_rules[".flexibleSearch"] = true;

$tdatafreee_saisan_rules[".isUseAjaxSuggest"] = true;

$tdatafreee_saisan_rules[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_saisan_rules[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_saisan_rules[".buttonsAdded"] = false;

$tdatafreee_saisan_rules[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_saisan_rules[".isUseTimeForSearch"] = false;




$tdatafreee_saisan_rules[".detailsLinksOnList"] = "1";

$tdatafreee_saisan_rules[".allSearchFields"] = array();
$tdatafreee_saisan_rules[".filterFields"] = array();
$tdatafreee_saisan_rules[".requiredSearchFields"] = array();

$tdatafreee_saisan_rules[".allSearchFields"][] = "id";
	$tdatafreee_saisan_rules[".allSearchFields"][] = "dept_group_id";
	$tdatafreee_saisan_rules[".allSearchFields"][] = "is_disabled";
	$tdatafreee_saisan_rules[".allSearchFields"][] = "expenditure_or_income";
	$tdatafreee_saisan_rules[".allSearchFields"][] = "name";
	$tdatafreee_saisan_rules[".allSearchFields"][] = "updated_at";
	$tdatafreee_saisan_rules[".allSearchFields"][] = "updated_by";
	$tdatafreee_saisan_rules[".allSearchFields"][] = "created_at";
	$tdatafreee_saisan_rules[".allSearchFields"][] = "created_by";
	

$tdatafreee_saisan_rules[".googleLikeFields"] = array();
$tdatafreee_saisan_rules[".googleLikeFields"][] = "id";
$tdatafreee_saisan_rules[".googleLikeFields"][] = "dept_group_id";
$tdatafreee_saisan_rules[".googleLikeFields"][] = "expenditure_or_income";
$tdatafreee_saisan_rules[".googleLikeFields"][] = "name";
$tdatafreee_saisan_rules[".googleLikeFields"][] = "updated_by";
$tdatafreee_saisan_rules[".googleLikeFields"][] = "created_at";
$tdatafreee_saisan_rules[".googleLikeFields"][] = "created_by";
$tdatafreee_saisan_rules[".googleLikeFields"][] = "updated_at";
$tdatafreee_saisan_rules[".googleLikeFields"][] = "expense_category_id";
$tdatafreee_saisan_rules[".googleLikeFields"][] = "is_disabled";


$tdatafreee_saisan_rules[".advSearchFields"] = array();
$tdatafreee_saisan_rules[".advSearchFields"][] = "id";
$tdatafreee_saisan_rules[".advSearchFields"][] = "dept_group_id";
$tdatafreee_saisan_rules[".advSearchFields"][] = "is_disabled";
$tdatafreee_saisan_rules[".advSearchFields"][] = "expenditure_or_income";
$tdatafreee_saisan_rules[".advSearchFields"][] = "name";
$tdatafreee_saisan_rules[".advSearchFields"][] = "updated_at";
$tdatafreee_saisan_rules[".advSearchFields"][] = "updated_by";
$tdatafreee_saisan_rules[".advSearchFields"][] = "created_at";
$tdatafreee_saisan_rules[".advSearchFields"][] = "created_by";

$tdatafreee_saisan_rules[".tableType"] = "list";

$tdatafreee_saisan_rules[".printerPageOrientation"] = 0;
$tdatafreee_saisan_rules[".nPrinterPageScale"] = 100;

$tdatafreee_saisan_rules[".nPrinterSplitRecords"] = 40;

$tdatafreee_saisan_rules[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_saisan_rules[".geocodingEnabled"] = false;





$tdatafreee_saisan_rules[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_saisan_rules[".pageSize"] = 500;

$tdatafreee_saisan_rules[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_saisan_rules[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_saisan_rules[".orderindexes"] = array();

$tdatafreee_saisan_rules[".sqlHead"] = "SELECT `id`,  `dept_group_id`,  `expenditure_or_income`,  `name`,  `updated_by`,  `created_at`,  `created_by`,  `updated_at`,  `expense_category_id`,  `is_disabled`";
$tdatafreee_saisan_rules[".sqlFrom"] = "FROM `freee_saisan_rules`";
$tdatafreee_saisan_rules[".sqlWhereExpr"] = "";
$tdatafreee_saisan_rules[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_saisan_rules[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_saisan_rules[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_saisan_rules[".highlightSearchResults"] = true;

$tableKeysfreee_saisan_rules = array();
$tableKeysfreee_saisan_rules[] = "id";
$tdatafreee_saisan_rules[".Keys"] = $tableKeysfreee_saisan_rules;

$tdatafreee_saisan_rules[".listFields"] = array();
$tdatafreee_saisan_rules[".listFields"][] = "id";
$tdatafreee_saisan_rules[".listFields"][] = "dept_group_id";
$tdatafreee_saisan_rules[".listFields"][] = "is_disabled";
$tdatafreee_saisan_rules[".listFields"][] = "expenditure_or_income";
$tdatafreee_saisan_rules[".listFields"][] = "name";
$tdatafreee_saisan_rules[".listFields"][] = "updated_at";
$tdatafreee_saisan_rules[".listFields"][] = "updated_by";
$tdatafreee_saisan_rules[".listFields"][] = "created_at";
$tdatafreee_saisan_rules[".listFields"][] = "created_by";

$tdatafreee_saisan_rules[".hideMobileList"] = array();


$tdatafreee_saisan_rules[".viewFields"] = array();

$tdatafreee_saisan_rules[".addFields"] = array();

$tdatafreee_saisan_rules[".masterListFields"] = array();
$tdatafreee_saisan_rules[".masterListFields"][] = "id";
$tdatafreee_saisan_rules[".masterListFields"][] = "dept_group_id";
$tdatafreee_saisan_rules[".masterListFields"][] = "is_disabled";
$tdatafreee_saisan_rules[".masterListFields"][] = "expenditure_or_income";
$tdatafreee_saisan_rules[".masterListFields"][] = "name";
$tdatafreee_saisan_rules[".masterListFields"][] = "updated_at";
$tdatafreee_saisan_rules[".masterListFields"][] = "updated_by";
$tdatafreee_saisan_rules[".masterListFields"][] = "created_at";
$tdatafreee_saisan_rules[".masterListFields"][] = "created_by";

$tdatafreee_saisan_rules[".inlineAddFields"] = array();
$tdatafreee_saisan_rules[".inlineAddFields"][] = "dept_group_id";
$tdatafreee_saisan_rules[".inlineAddFields"][] = "is_disabled";
$tdatafreee_saisan_rules[".inlineAddFields"][] = "expenditure_or_income";
$tdatafreee_saisan_rules[".inlineAddFields"][] = "name";

$tdatafreee_saisan_rules[".editFields"] = array();

$tdatafreee_saisan_rules[".inlineEditFields"] = array();
$tdatafreee_saisan_rules[".inlineEditFields"][] = "dept_group_id";
$tdatafreee_saisan_rules[".inlineEditFields"][] = "is_disabled";
$tdatafreee_saisan_rules[".inlineEditFields"][] = "expenditure_or_income";
$tdatafreee_saisan_rules[".inlineEditFields"][] = "name";

$tdatafreee_saisan_rules[".updateSelectedFields"] = array();


$tdatafreee_saisan_rules[".exportFields"] = array();
$tdatafreee_saisan_rules[".exportFields"][] = "id";
$tdatafreee_saisan_rules[".exportFields"][] = "dept_group_id";
$tdatafreee_saisan_rules[".exportFields"][] = "is_disabled";
$tdatafreee_saisan_rules[".exportFields"][] = "expenditure_or_income";
$tdatafreee_saisan_rules[".exportFields"][] = "name";
$tdatafreee_saisan_rules[".exportFields"][] = "updated_at";
$tdatafreee_saisan_rules[".exportFields"][] = "updated_by";
$tdatafreee_saisan_rules[".exportFields"][] = "created_at";
$tdatafreee_saisan_rules[".exportFields"][] = "created_by";

$tdatafreee_saisan_rules[".importFields"] = array();
$tdatafreee_saisan_rules[".importFields"][] = "id";
$tdatafreee_saisan_rules[".importFields"][] = "dept_group_id";
$tdatafreee_saisan_rules[".importFields"][] = "expenditure_or_income";
$tdatafreee_saisan_rules[".importFields"][] = "name";
$tdatafreee_saisan_rules[".importFields"][] = "updated_by";
$tdatafreee_saisan_rules[".importFields"][] = "created_at";
$tdatafreee_saisan_rules[".importFields"][] = "created_by";
$tdatafreee_saisan_rules[".importFields"][] = "updated_at";
$tdatafreee_saisan_rules[".importFields"][] = "is_disabled";

$tdatafreee_saisan_rules[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_saisan_rules";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rules","id");
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




	$tdatafreee_saisan_rules["id"] = $fdata;
//	dept_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dept_group_id";
	$fdata["GoodName"] = "dept_group_id";
	$fdata["ownerTable"] = "freee_saisan_rules";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rules","dept_group_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dept_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dept_group_id`";

	
	
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
	$edata["LookupTable"] = "mst_dept_group";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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




	$tdatafreee_saisan_rules["dept_group_id"] = $fdata;
//	expenditure_or_income
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "expenditure_or_income";
	$fdata["GoodName"] = "expenditure_or_income";
	$fdata["ownerTable"] = "freee_saisan_rules";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rules","expenditure_or_income");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "expenditure_or_income";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`expenditure_or_income`";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "支出";
	$edata["LookupValues"][] = "収入";
	$edata["LookupValues"][] = "在庫";

	
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




	$tdatafreee_saisan_rules["expenditure_or_income"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "freee_saisan_rules";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rules","name");
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




	$tdatafreee_saisan_rules["name"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_saisan_rules";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rules","updated_by");
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




	$tdatafreee_saisan_rules["updated_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_saisan_rules";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rules","created_at");
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




	$tdatafreee_saisan_rules["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_saisan_rules";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rules","created_by");
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

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdatafreee_saisan_rules["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_saisan_rules";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rules","updated_at");
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




	$tdatafreee_saisan_rules["updated_at"] = $fdata;
//	expense_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "expense_category_id";
	$fdata["GoodName"] = "expense_category_id";
	$fdata["ownerTable"] = "freee_saisan_rules";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rules","expense_category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "expense_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`expense_category_id`";

	
	
			
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
	$edata["LookupTable"] = "freee_expense_categories";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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








	$tdatafreee_saisan_rules["expense_category_id"] = $fdata;
//	is_disabled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "is_disabled";
	$fdata["GoodName"] = "is_disabled";
	$fdata["ownerTable"] = "freee_saisan_rules";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rules","is_disabled");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_disabled";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_disabled`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	



	
	
	
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




	$tdatafreee_saisan_rules["is_disabled"] = $fdata;


$tables_data["freee_saisan_rules"]=&$tdatafreee_saisan_rules;
$field_labels["freee_saisan_rules"] = &$fieldLabelsfreee_saisan_rules;
$fieldToolTips["freee_saisan_rules"] = &$fieldToolTipsfreee_saisan_rules;
$placeHolders["freee_saisan_rules"] = &$placeHoldersfreee_saisan_rules;
$page_titles["freee_saisan_rules"] = &$pageTitlesfreee_saisan_rules;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_saisan_rules"] = array();
//	freee_saisan_rule_details
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="freee_saisan_rule_details";
		$detailsParam["dOriginalTable"] = "freee_saisan_rule_details";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "freee_saisan_rule_details";
	$detailsParam["dCaptionTable"] = GetTableCaption("freee_saisan_rule_details");
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
		
	$detailsTablesData["freee_saisan_rules"][$dIndex] = $detailsParam;

	
		$detailsTablesData["freee_saisan_rules"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["freee_saisan_rules"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["freee_saisan_rules"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["freee_saisan_rules"][$dIndex]["detailKeys"][]="freee_saisan_rules_id";

// tables which are master tables for current table (detail)
$masterTablesData["freee_saisan_rules"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_saisan_rules()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `dept_group_id`,  `expenditure_or_income`,  `name`,  `updated_by`,  `created_at`,  `created_by`,  `updated_at`,  `expense_category_id`,  `is_disabled`";
$proto0["m_strFrom"] = "FROM `freee_saisan_rules`";
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
	"m_strTable" => "freee_saisan_rules",
	"m_srcTableName" => "freee_saisan_rules"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_saisan_rules";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dept_group_id",
	"m_strTable" => "freee_saisan_rules",
	"m_srcTableName" => "freee_saisan_rules"
));

$proto8["m_sql"] = "`dept_group_id`";
$proto8["m_srcTableName"] = "freee_saisan_rules";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "expenditure_or_income",
	"m_strTable" => "freee_saisan_rules",
	"m_srcTableName" => "freee_saisan_rules"
));

$proto10["m_sql"] = "`expenditure_or_income`";
$proto10["m_srcTableName"] = "freee_saisan_rules";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "freee_saisan_rules",
	"m_srcTableName" => "freee_saisan_rules"
));

$proto12["m_sql"] = "`name`";
$proto12["m_srcTableName"] = "freee_saisan_rules";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_saisan_rules",
	"m_srcTableName" => "freee_saisan_rules"
));

$proto14["m_sql"] = "`updated_by`";
$proto14["m_srcTableName"] = "freee_saisan_rules";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_saisan_rules",
	"m_srcTableName" => "freee_saisan_rules"
));

$proto16["m_sql"] = "`created_at`";
$proto16["m_srcTableName"] = "freee_saisan_rules";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_saisan_rules",
	"m_srcTableName" => "freee_saisan_rules"
));

$proto18["m_sql"] = "`created_by`";
$proto18["m_srcTableName"] = "freee_saisan_rules";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_saisan_rules",
	"m_srcTableName" => "freee_saisan_rules"
));

$proto20["m_sql"] = "`updated_at`";
$proto20["m_srcTableName"] = "freee_saisan_rules";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "expense_category_id",
	"m_strTable" => "freee_saisan_rules",
	"m_srcTableName" => "freee_saisan_rules"
));

$proto22["m_sql"] = "`expense_category_id`";
$proto22["m_srcTableName"] = "freee_saisan_rules";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "is_disabled",
	"m_strTable" => "freee_saisan_rules",
	"m_srcTableName" => "freee_saisan_rules"
));

$proto24["m_sql"] = "`is_disabled`";
$proto24["m_srcTableName"] = "freee_saisan_rules";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "freee_saisan_rules";
$proto27["m_srcTableName"] = "freee_saisan_rules";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "account_item_id";
$proto27["m_columns"][] = "dept_group_id";
$proto27["m_columns"][] = "section_id";
$proto27["m_columns"][] = "expenditure_or_income";
$proto27["m_columns"][] = "name";
$proto27["m_columns"][] = "updated_at";
$proto27["m_columns"][] = "updated_by";
$proto27["m_columns"][] = "created_at";
$proto27["m_columns"][] = "created_by";
$proto27["m_columns"][] = "expense_category_id";
$proto27["m_columns"][] = "is_disabled";
$proto27["m_columns"][] = "sort";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "`freee_saisan_rules`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "freee_saisan_rules";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="freee_saisan_rules";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_saisan_rules = createSqlQuery_freee_saisan_rules();


	
		;

										

$tdatafreee_saisan_rules[".sqlquery"] = $queryData_freee_saisan_rules;

include_once(getabspath("include/freee_saisan_rules_events.php"));
$tableEvents["freee_saisan_rules"] = new eventclass_freee_saisan_rules;
$tdatafreee_saisan_rules[".hasEvents"] = true;

?>