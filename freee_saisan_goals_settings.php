<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_saisan_goals = array();
	$tdatafreee_saisan_goals[".truncateText"] = true;
	$tdatafreee_saisan_goals[".NumberOfChars"] = 80;
	$tdatafreee_saisan_goals[".ShortName"] = "freee_saisan_goals";
	$tdatafreee_saisan_goals[".OwnerID"] = "";
	$tdatafreee_saisan_goals[".OriginalTable"] = "freee_saisan_goals";

//	field labels
$fieldLabelsfreee_saisan_goals = array();
$fieldToolTipsfreee_saisan_goals = array();
$pageTitlesfreee_saisan_goals = array();
$placeHoldersfreee_saisan_goals = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_saisan_goals["Japanese"] = array();
	$fieldToolTipsfreee_saisan_goals["Japanese"] = array();
	$placeHoldersfreee_saisan_goals["Japanese"] = array();
	$pageTitlesfreee_saisan_goals["Japanese"] = array();
	$fieldLabelsfreee_saisan_goals["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_saisan_goals["Japanese"]["id"] = "";
	$placeHoldersfreee_saisan_goals["Japanese"]["id"] = "";
	$fieldLabelsfreee_saisan_goals["Japanese"]["dept_group_id"] = "部署Id";
	$fieldToolTipsfreee_saisan_goals["Japanese"]["dept_group_id"] = "";
	$placeHoldersfreee_saisan_goals["Japanese"]["dept_group_id"] = "";
	$fieldLabelsfreee_saisan_goals["Japanese"]["total_work_hours"] = "総時間";
	$fieldToolTipsfreee_saisan_goals["Japanese"]["total_work_hours"] = "";
	$placeHoldersfreee_saisan_goals["Japanese"]["total_work_hours"] = "";
	$fieldLabelsfreee_saisan_goals["Japanese"]["revenue_per_hour"] = "時間当たり収益";
	$fieldToolTipsfreee_saisan_goals["Japanese"]["revenue_per_hour"] = "";
	$placeHoldersfreee_saisan_goals["Japanese"]["revenue_per_hour"] = "";
	$fieldLabelsfreee_saisan_goals["Japanese"]["total_expenses"] = "経費合計";
	$fieldToolTipsfreee_saisan_goals["Japanese"]["total_expenses"] = "";
	$placeHoldersfreee_saisan_goals["Japanese"]["total_expenses"] = "";
	$fieldLabelsfreee_saisan_goals["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsfreee_saisan_goals["Japanese"]["created_at"] = "";
	$placeHoldersfreee_saisan_goals["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_saisan_goals["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsfreee_saisan_goals["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_saisan_goals["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_saisan_goals["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsfreee_saisan_goals["Japanese"]["created_by"] = "";
	$placeHoldersfreee_saisan_goals["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_saisan_goals["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsfreee_saisan_goals["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_saisan_goals["Japanese"]["updated_by"] = "";
	$fieldLabelsfreee_saisan_goals["Japanese"]["year_month"] = "年月";
	$fieldToolTipsfreee_saisan_goals["Japanese"]["year_month"] = "";
	$placeHoldersfreee_saisan_goals["Japanese"]["year_month"] = "";
	$fieldLabelsfreee_saisan_goals["Japanese"]["amount_of_sales"] = "売上高";
	$fieldToolTipsfreee_saisan_goals["Japanese"]["amount_of_sales"] = "";
	$placeHoldersfreee_saisan_goals["Japanese"]["amount_of_sales"] = "";
	$fieldLabelsfreee_saisan_goals["Japanese"]["gross_profit"] = "粗利";
	$fieldToolTipsfreee_saisan_goals["Japanese"]["gross_profit"] = "";
	$placeHoldersfreee_saisan_goals["Japanese"]["gross_profit"] = "";
	if (count($fieldToolTipsfreee_saisan_goals["Japanese"]))
		$tdatafreee_saisan_goals[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_saisan_goals[""] = array();
	$fieldToolTipsfreee_saisan_goals[""] = array();
	$placeHoldersfreee_saisan_goals[""] = array();
	$pageTitlesfreee_saisan_goals[""] = array();
	$fieldLabelsfreee_saisan_goals[""]["id"] = "Id";
	$fieldToolTipsfreee_saisan_goals[""]["id"] = "";
	$placeHoldersfreee_saisan_goals[""]["id"] = "";
	$fieldLabelsfreee_saisan_goals[""]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsfreee_saisan_goals[""]["dept_group_id"] = "";
	$placeHoldersfreee_saisan_goals[""]["dept_group_id"] = "";
	$fieldLabelsfreee_saisan_goals[""]["total_work_hours"] = "Total Work Hours";
	$fieldToolTipsfreee_saisan_goals[""]["total_work_hours"] = "";
	$placeHoldersfreee_saisan_goals[""]["total_work_hours"] = "";
	$fieldLabelsfreee_saisan_goals[""]["revenue_per_hour"] = "Revenue Per Hour";
	$fieldToolTipsfreee_saisan_goals[""]["revenue_per_hour"] = "";
	$placeHoldersfreee_saisan_goals[""]["revenue_per_hour"] = "";
	$fieldLabelsfreee_saisan_goals[""]["total_expenses"] = "Total Expenses";
	$fieldToolTipsfreee_saisan_goals[""]["total_expenses"] = "";
	$placeHoldersfreee_saisan_goals[""]["total_expenses"] = "";
	$fieldLabelsfreee_saisan_goals[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_saisan_goals[""]["created_at"] = "";
	$placeHoldersfreee_saisan_goals[""]["created_at"] = "";
	$fieldLabelsfreee_saisan_goals[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_saisan_goals[""]["updated_at"] = "";
	$placeHoldersfreee_saisan_goals[""]["updated_at"] = "";
	$fieldLabelsfreee_saisan_goals[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_saisan_goals[""]["created_by"] = "";
	$placeHoldersfreee_saisan_goals[""]["created_by"] = "";
	$fieldLabelsfreee_saisan_goals[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_saisan_goals[""]["updated_by"] = "";
	$placeHoldersfreee_saisan_goals[""]["updated_by"] = "";
	$fieldLabelsfreee_saisan_goals[""]["year_month"] = "Year Month";
	$fieldToolTipsfreee_saisan_goals[""]["year_month"] = "";
	$placeHoldersfreee_saisan_goals[""]["year_month"] = "";
	$fieldLabelsfreee_saisan_goals[""]["amount_of_sales"] = "Amount Of Sales";
	$fieldToolTipsfreee_saisan_goals[""]["amount_of_sales"] = "";
	$placeHoldersfreee_saisan_goals[""]["amount_of_sales"] = "";
	$fieldLabelsfreee_saisan_goals[""]["gross_profit"] = "Gross Profit";
	$fieldToolTipsfreee_saisan_goals[""]["gross_profit"] = "";
	$placeHoldersfreee_saisan_goals[""]["gross_profit"] = "";
	if (count($fieldToolTipsfreee_saisan_goals[""]))
		$tdatafreee_saisan_goals[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_saisan_goals["English"] = array();
	$fieldToolTipsfreee_saisan_goals["English"] = array();
	$placeHoldersfreee_saisan_goals["English"] = array();
	$pageTitlesfreee_saisan_goals["English"] = array();
	$fieldLabelsfreee_saisan_goals["English"]["id"] = "Id";
	$fieldToolTipsfreee_saisan_goals["English"]["id"] = "";
	$placeHoldersfreee_saisan_goals["English"]["id"] = "";
	$fieldLabelsfreee_saisan_goals["English"]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsfreee_saisan_goals["English"]["dept_group_id"] = "";
	$placeHoldersfreee_saisan_goals["English"]["dept_group_id"] = "";
	$fieldLabelsfreee_saisan_goals["English"]["total_work_hours"] = "Total Work Hours";
	$fieldToolTipsfreee_saisan_goals["English"]["total_work_hours"] = "";
	$placeHoldersfreee_saisan_goals["English"]["total_work_hours"] = "";
	$fieldLabelsfreee_saisan_goals["English"]["revenue_per_hour"] = "Revenue Per Hour";
	$fieldToolTipsfreee_saisan_goals["English"]["revenue_per_hour"] = "";
	$placeHoldersfreee_saisan_goals["English"]["revenue_per_hour"] = "";
	$fieldLabelsfreee_saisan_goals["English"]["total_expenses"] = "Total Expenses";
	$fieldToolTipsfreee_saisan_goals["English"]["total_expenses"] = "";
	$placeHoldersfreee_saisan_goals["English"]["total_expenses"] = "";
	$fieldLabelsfreee_saisan_goals["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_saisan_goals["English"]["created_at"] = "";
	$placeHoldersfreee_saisan_goals["English"]["created_at"] = "";
	$fieldLabelsfreee_saisan_goals["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_saisan_goals["English"]["updated_at"] = "";
	$placeHoldersfreee_saisan_goals["English"]["updated_at"] = "";
	$fieldLabelsfreee_saisan_goals["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_saisan_goals["English"]["created_by"] = "";
	$placeHoldersfreee_saisan_goals["English"]["created_by"] = "";
	$fieldLabelsfreee_saisan_goals["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_saisan_goals["English"]["updated_by"] = "";
	$placeHoldersfreee_saisan_goals["English"]["updated_by"] = "";
	$fieldLabelsfreee_saisan_goals["English"]["year_month"] = "Year Month";
	$fieldToolTipsfreee_saisan_goals["English"]["year_month"] = "";
	$placeHoldersfreee_saisan_goals["English"]["year_month"] = "";
	$fieldLabelsfreee_saisan_goals["English"]["amount_of_sales"] = "Amount Of Sales";
	$fieldToolTipsfreee_saisan_goals["English"]["amount_of_sales"] = "";
	$placeHoldersfreee_saisan_goals["English"]["amount_of_sales"] = "";
	$fieldLabelsfreee_saisan_goals["English"]["gross_profit"] = "Gross Profit";
	$fieldToolTipsfreee_saisan_goals["English"]["gross_profit"] = "";
	$placeHoldersfreee_saisan_goals["English"]["gross_profit"] = "";
	if (count($fieldToolTipsfreee_saisan_goals["English"]))
		$tdatafreee_saisan_goals[".isUseToolTips"] = true;
}


	$tdatafreee_saisan_goals[".NCSearch"] = true;



$tdatafreee_saisan_goals[".shortTableName"] = "freee_saisan_goals";
$tdatafreee_saisan_goals[".nSecOptions"] = 0;
$tdatafreee_saisan_goals[".recsPerRowPrint"] = 1;
$tdatafreee_saisan_goals[".mainTableOwnerID"] = "";
$tdatafreee_saisan_goals[".moveNext"] = 1;
$tdatafreee_saisan_goals[".entityType"] = 0;

$tdatafreee_saisan_goals[".strOriginalTableName"] = "freee_saisan_goals";

	



$tdatafreee_saisan_goals[".showAddInPopup"] = false;

$tdatafreee_saisan_goals[".showEditInPopup"] = false;

$tdatafreee_saisan_goals[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_saisan_goals[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_saisan_goals[".fieldsForRegister"] = array();

$tdatafreee_saisan_goals[".listAjax"] = false;

	$tdatafreee_saisan_goals[".audit"] = true;

	$tdatafreee_saisan_goals[".locking"] = false;



$tdatafreee_saisan_goals[".list"] = true;

$tdatafreee_saisan_goals[".inlineEdit"] = true;


$tdatafreee_saisan_goals[".reorderRecordsByHeader"] = true;



$tdatafreee_saisan_goals[".inlineAdd"] = true;

$tdatafreee_saisan_goals[".import"] = true;

$tdatafreee_saisan_goals[".exportTo"] = true;


$tdatafreee_saisan_goals[".delete"] = true;

$tdatafreee_saisan_goals[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_saisan_goals[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_saisan_goals[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_saisan_goals[".searchSaving"] = false;
//

$tdatafreee_saisan_goals[".showSearchPanel"] = true;
		$tdatafreee_saisan_goals[".flexibleSearch"] = true;

$tdatafreee_saisan_goals[".isUseAjaxSuggest"] = true;

$tdatafreee_saisan_goals[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_saisan_goals[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_saisan_goals[".buttonsAdded"] = false;

$tdatafreee_saisan_goals[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_saisan_goals[".isUseTimeForSearch"] = false;





$tdatafreee_saisan_goals[".allSearchFields"] = array();
$tdatafreee_saisan_goals[".filterFields"] = array();
$tdatafreee_saisan_goals[".requiredSearchFields"] = array();

$tdatafreee_saisan_goals[".allSearchFields"][] = "id";
	$tdatafreee_saisan_goals[".allSearchFields"][] = "dept_group_id";
	$tdatafreee_saisan_goals[".allSearchFields"][] = "year_month";
	$tdatafreee_saisan_goals[".allSearchFields"][] = "amount_of_sales";
	$tdatafreee_saisan_goals[".allSearchFields"][] = "gross_profit";
	$tdatafreee_saisan_goals[".allSearchFields"][] = "created_at";
	$tdatafreee_saisan_goals[".allSearchFields"][] = "updated_at";
	$tdatafreee_saisan_goals[".allSearchFields"][] = "created_by";
	$tdatafreee_saisan_goals[".allSearchFields"][] = "updated_by";
	

$tdatafreee_saisan_goals[".googleLikeFields"] = array();
$tdatafreee_saisan_goals[".googleLikeFields"][] = "id";
$tdatafreee_saisan_goals[".googleLikeFields"][] = "dept_group_id";
$tdatafreee_saisan_goals[".googleLikeFields"][] = "year_month";
$tdatafreee_saisan_goals[".googleLikeFields"][] = "total_work_hours";
$tdatafreee_saisan_goals[".googleLikeFields"][] = "revenue_per_hour";
$tdatafreee_saisan_goals[".googleLikeFields"][] = "total_expenses";
$tdatafreee_saisan_goals[".googleLikeFields"][] = "created_at";
$tdatafreee_saisan_goals[".googleLikeFields"][] = "updated_at";
$tdatafreee_saisan_goals[".googleLikeFields"][] = "created_by";
$tdatafreee_saisan_goals[".googleLikeFields"][] = "updated_by";
$tdatafreee_saisan_goals[".googleLikeFields"][] = "amount_of_sales";
$tdatafreee_saisan_goals[".googleLikeFields"][] = "gross_profit";


$tdatafreee_saisan_goals[".advSearchFields"] = array();
$tdatafreee_saisan_goals[".advSearchFields"][] = "id";
$tdatafreee_saisan_goals[".advSearchFields"][] = "dept_group_id";
$tdatafreee_saisan_goals[".advSearchFields"][] = "year_month";
$tdatafreee_saisan_goals[".advSearchFields"][] = "amount_of_sales";
$tdatafreee_saisan_goals[".advSearchFields"][] = "gross_profit";
$tdatafreee_saisan_goals[".advSearchFields"][] = "created_at";
$tdatafreee_saisan_goals[".advSearchFields"][] = "updated_at";
$tdatafreee_saisan_goals[".advSearchFields"][] = "created_by";
$tdatafreee_saisan_goals[".advSearchFields"][] = "updated_by";

$tdatafreee_saisan_goals[".tableType"] = "list";

$tdatafreee_saisan_goals[".printerPageOrientation"] = 0;
$tdatafreee_saisan_goals[".nPrinterPageScale"] = 100;

$tdatafreee_saisan_goals[".nPrinterSplitRecords"] = 40;

$tdatafreee_saisan_goals[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_saisan_goals[".geocodingEnabled"] = false;





$tdatafreee_saisan_goals[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_saisan_goals[".pageSize"] = 20;

$tdatafreee_saisan_goals[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_saisan_goals[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_saisan_goals[".orderindexes"] = array();

$tdatafreee_saisan_goals[".sqlHead"] = "SELECT `id`,  	`dept_group_id`,  	`year_month`,  	`total_work_hours`,  	`revenue_per_hour`,  	`total_expenses`,  	`created_at`,  	`updated_at`,  	`created_by`,  	`updated_by`,  	`amount_of_sales`,  	`gross_profit`";
$tdatafreee_saisan_goals[".sqlFrom"] = "FROM `freee_saisan_goals`";
$tdatafreee_saisan_goals[".sqlWhereExpr"] = "";
$tdatafreee_saisan_goals[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_saisan_goals[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_saisan_goals[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_saisan_goals[".highlightSearchResults"] = true;

$tableKeysfreee_saisan_goals = array();
$tableKeysfreee_saisan_goals[] = "id";
$tdatafreee_saisan_goals[".Keys"] = $tableKeysfreee_saisan_goals;

$tdatafreee_saisan_goals[".listFields"] = array();
$tdatafreee_saisan_goals[".listFields"][] = "id";
$tdatafreee_saisan_goals[".listFields"][] = "dept_group_id";
$tdatafreee_saisan_goals[".listFields"][] = "year_month";
$tdatafreee_saisan_goals[".listFields"][] = "amount_of_sales";
$tdatafreee_saisan_goals[".listFields"][] = "gross_profit";
$tdatafreee_saisan_goals[".listFields"][] = "created_at";
$tdatafreee_saisan_goals[".listFields"][] = "updated_at";
$tdatafreee_saisan_goals[".listFields"][] = "created_by";
$tdatafreee_saisan_goals[".listFields"][] = "updated_by";

$tdatafreee_saisan_goals[".hideMobileList"] = array();


$tdatafreee_saisan_goals[".viewFields"] = array();

$tdatafreee_saisan_goals[".addFields"] = array();

$tdatafreee_saisan_goals[".masterListFields"] = array();
$tdatafreee_saisan_goals[".masterListFields"][] = "total_work_hours";
$tdatafreee_saisan_goals[".masterListFields"][] = "revenue_per_hour";
$tdatafreee_saisan_goals[".masterListFields"][] = "total_expenses";
$tdatafreee_saisan_goals[".masterListFields"][] = "id";
$tdatafreee_saisan_goals[".masterListFields"][] = "dept_group_id";
$tdatafreee_saisan_goals[".masterListFields"][] = "year_month";
$tdatafreee_saisan_goals[".masterListFields"][] = "amount_of_sales";
$tdatafreee_saisan_goals[".masterListFields"][] = "gross_profit";
$tdatafreee_saisan_goals[".masterListFields"][] = "created_at";
$tdatafreee_saisan_goals[".masterListFields"][] = "updated_at";
$tdatafreee_saisan_goals[".masterListFields"][] = "created_by";
$tdatafreee_saisan_goals[".masterListFields"][] = "updated_by";

$tdatafreee_saisan_goals[".inlineAddFields"] = array();
$tdatafreee_saisan_goals[".inlineAddFields"][] = "dept_group_id";
$tdatafreee_saisan_goals[".inlineAddFields"][] = "year_month";
$tdatafreee_saisan_goals[".inlineAddFields"][] = "amount_of_sales";
$tdatafreee_saisan_goals[".inlineAddFields"][] = "gross_profit";

$tdatafreee_saisan_goals[".editFields"] = array();

$tdatafreee_saisan_goals[".inlineEditFields"] = array();
$tdatafreee_saisan_goals[".inlineEditFields"][] = "dept_group_id";
$tdatafreee_saisan_goals[".inlineEditFields"][] = "year_month";
$tdatafreee_saisan_goals[".inlineEditFields"][] = "amount_of_sales";
$tdatafreee_saisan_goals[".inlineEditFields"][] = "gross_profit";

$tdatafreee_saisan_goals[".updateSelectedFields"] = array();


$tdatafreee_saisan_goals[".exportFields"] = array();
$tdatafreee_saisan_goals[".exportFields"][] = "id";
$tdatafreee_saisan_goals[".exportFields"][] = "dept_group_id";
$tdatafreee_saisan_goals[".exportFields"][] = "year_month";
$tdatafreee_saisan_goals[".exportFields"][] = "amount_of_sales";
$tdatafreee_saisan_goals[".exportFields"][] = "gross_profit";
$tdatafreee_saisan_goals[".exportFields"][] = "created_at";
$tdatafreee_saisan_goals[".exportFields"][] = "updated_at";
$tdatafreee_saisan_goals[".exportFields"][] = "created_by";
$tdatafreee_saisan_goals[".exportFields"][] = "updated_by";

$tdatafreee_saisan_goals[".importFields"] = array();
$tdatafreee_saisan_goals[".importFields"][] = "id";
$tdatafreee_saisan_goals[".importFields"][] = "dept_group_id";
$tdatafreee_saisan_goals[".importFields"][] = "year_month";
$tdatafreee_saisan_goals[".importFields"][] = "amount_of_sales";
$tdatafreee_saisan_goals[".importFields"][] = "gross_profit";

$tdatafreee_saisan_goals[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_saisan_goals";
	$fdata["Label"] = GetFieldLabel("freee_saisan_goals","id");
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




	$tdatafreee_saisan_goals["id"] = $fdata;
//	dept_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dept_group_id";
	$fdata["GoodName"] = "dept_group_id";
	$fdata["ownerTable"] = "freee_saisan_goals";
	$fdata["Label"] = GetFieldLabel("freee_saisan_goals","dept_group_id");
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




	$tdatafreee_saisan_goals["dept_group_id"] = $fdata;
//	year_month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "year_month";
	$fdata["GoodName"] = "year_month";
	$fdata["ownerTable"] = "freee_saisan_goals";
	$fdata["Label"] = GetFieldLabel("freee_saisan_goals","year_month");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "year_month";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`year_month`";

	
	
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




	$tdatafreee_saisan_goals["year_month"] = $fdata;
//	total_work_hours
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total_work_hours";
	$fdata["GoodName"] = "total_work_hours";
	$fdata["ownerTable"] = "freee_saisan_goals";
	$fdata["Label"] = GetFieldLabel("freee_saisan_goals","total_work_hours");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "total_work_hours";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_work_hours`";

	
	
			
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








	$tdatafreee_saisan_goals["total_work_hours"] = $fdata;
//	revenue_per_hour
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "revenue_per_hour";
	$fdata["GoodName"] = "revenue_per_hour";
	$fdata["ownerTable"] = "freee_saisan_goals";
	$fdata["Label"] = GetFieldLabel("freee_saisan_goals","revenue_per_hour");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "revenue_per_hour";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`revenue_per_hour`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
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








	$tdatafreee_saisan_goals["revenue_per_hour"] = $fdata;
//	total_expenses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "total_expenses";
	$fdata["GoodName"] = "total_expenses";
	$fdata["ownerTable"] = "freee_saisan_goals";
	$fdata["Label"] = GetFieldLabel("freee_saisan_goals","total_expenses");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "total_expenses";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_expenses`";

	
	
			
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








	$tdatafreee_saisan_goals["total_expenses"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_saisan_goals";
	$fdata["Label"] = GetFieldLabel("freee_saisan_goals","created_at");
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




	$tdatafreee_saisan_goals["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_saisan_goals";
	$fdata["Label"] = GetFieldLabel("freee_saisan_goals","updated_at");
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




	$tdatafreee_saisan_goals["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_saisan_goals";
	$fdata["Label"] = GetFieldLabel("freee_saisan_goals","created_by");
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




	$tdatafreee_saisan_goals["created_by"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_saisan_goals";
	$fdata["Label"] = GetFieldLabel("freee_saisan_goals","updated_by");
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




	$tdatafreee_saisan_goals["updated_by"] = $fdata;
//	amount_of_sales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "amount_of_sales";
	$fdata["GoodName"] = "amount_of_sales";
	$fdata["ownerTable"] = "freee_saisan_goals";
	$fdata["Label"] = GetFieldLabel("freee_saisan_goals","amount_of_sales");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "amount_of_sales";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`amount_of_sales`";

	
	
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




	$tdatafreee_saisan_goals["amount_of_sales"] = $fdata;
//	gross_profit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "gross_profit";
	$fdata["GoodName"] = "gross_profit";
	$fdata["ownerTable"] = "freee_saisan_goals";
	$fdata["Label"] = GetFieldLabel("freee_saisan_goals","gross_profit");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gross_profit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gross_profit`";

	
	
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




	$tdatafreee_saisan_goals["gross_profit"] = $fdata;


$tables_data["freee_saisan_goals"]=&$tdatafreee_saisan_goals;
$field_labels["freee_saisan_goals"] = &$fieldLabelsfreee_saisan_goals;
$fieldToolTips["freee_saisan_goals"] = &$fieldToolTipsfreee_saisan_goals;
$placeHolders["freee_saisan_goals"] = &$placeHoldersfreee_saisan_goals;
$page_titles["freee_saisan_goals"] = &$pageTitlesfreee_saisan_goals;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_saisan_goals"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_saisan_goals"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_saisan_goals()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`dept_group_id`,  	`year_month`,  	`total_work_hours`,  	`revenue_per_hour`,  	`total_expenses`,  	`created_at`,  	`updated_at`,  	`created_by`,  	`updated_by`,  	`amount_of_sales`,  	`gross_profit`";
$proto0["m_strFrom"] = "FROM `freee_saisan_goals`";
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
	"m_strTable" => "freee_saisan_goals",
	"m_srcTableName" => "freee_saisan_goals"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_saisan_goals";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dept_group_id",
	"m_strTable" => "freee_saisan_goals",
	"m_srcTableName" => "freee_saisan_goals"
));

$proto8["m_sql"] = "`dept_group_id`";
$proto8["m_srcTableName"] = "freee_saisan_goals";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "year_month",
	"m_strTable" => "freee_saisan_goals",
	"m_srcTableName" => "freee_saisan_goals"
));

$proto10["m_sql"] = "`year_month`";
$proto10["m_srcTableName"] = "freee_saisan_goals";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "total_work_hours",
	"m_strTable" => "freee_saisan_goals",
	"m_srcTableName" => "freee_saisan_goals"
));

$proto12["m_sql"] = "`total_work_hours`";
$proto12["m_srcTableName"] = "freee_saisan_goals";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "revenue_per_hour",
	"m_strTable" => "freee_saisan_goals",
	"m_srcTableName" => "freee_saisan_goals"
));

$proto14["m_sql"] = "`revenue_per_hour`";
$proto14["m_srcTableName"] = "freee_saisan_goals";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "total_expenses",
	"m_strTable" => "freee_saisan_goals",
	"m_srcTableName" => "freee_saisan_goals"
));

$proto16["m_sql"] = "`total_expenses`";
$proto16["m_srcTableName"] = "freee_saisan_goals";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_saisan_goals",
	"m_srcTableName" => "freee_saisan_goals"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "freee_saisan_goals";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_saisan_goals",
	"m_srcTableName" => "freee_saisan_goals"
));

$proto20["m_sql"] = "`updated_at`";
$proto20["m_srcTableName"] = "freee_saisan_goals";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_saisan_goals",
	"m_srcTableName" => "freee_saisan_goals"
));

$proto22["m_sql"] = "`created_by`";
$proto22["m_srcTableName"] = "freee_saisan_goals";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_saisan_goals",
	"m_srcTableName" => "freee_saisan_goals"
));

$proto24["m_sql"] = "`updated_by`";
$proto24["m_srcTableName"] = "freee_saisan_goals";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "amount_of_sales",
	"m_strTable" => "freee_saisan_goals",
	"m_srcTableName" => "freee_saisan_goals"
));

$proto26["m_sql"] = "`amount_of_sales`";
$proto26["m_srcTableName"] = "freee_saisan_goals";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "gross_profit",
	"m_strTable" => "freee_saisan_goals",
	"m_srcTableName" => "freee_saisan_goals"
));

$proto28["m_sql"] = "`gross_profit`";
$proto28["m_srcTableName"] = "freee_saisan_goals";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "freee_saisan_goals";
$proto31["m_srcTableName"] = "freee_saisan_goals";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "dept_group_id";
$proto31["m_columns"][] = "year_month";
$proto31["m_columns"][] = "total_work_hours";
$proto31["m_columns"][] = "revenue_per_hour";
$proto31["m_columns"][] = "total_expenses";
$proto31["m_columns"][] = "created_at";
$proto31["m_columns"][] = "updated_at";
$proto31["m_columns"][] = "created_by";
$proto31["m_columns"][] = "updated_by";
$proto31["m_columns"][] = "amount_of_sales";
$proto31["m_columns"][] = "gross_profit";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "`freee_saisan_goals`";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "freee_saisan_goals";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="freee_saisan_goals";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_saisan_goals = createSqlQuery_freee_saisan_goals();


	
		;

												

$tdatafreee_saisan_goals[".sqlquery"] = $queryData_freee_saisan_goals;

include_once(getabspath("include/freee_saisan_goals_events.php"));
$tableEvents["freee_saisan_goals"] = new eventclass_freee_saisan_goals;
$tdatafreee_saisan_goals[".hasEvents"] = true;

?>