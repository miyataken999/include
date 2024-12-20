<?php
require_once(getabspath("classes/cipherer.php"));




$tdatawork_tasks = array();
	$tdatawork_tasks[".ShortName"] = "work_tasks";
	$tdatawork_tasks[".OwnerID"] = "";
	$tdatawork_tasks[".OriginalTable"] = "work_tasks";

//	field labels
$fieldLabelswork_tasks = array();
$fieldToolTipswork_tasks = array();
$pageTitleswork_tasks = array();
$placeHolderswork_tasks = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelswork_tasks["Japanese"] = array();
	$fieldToolTipswork_tasks["Japanese"] = array();
	$placeHolderswork_tasks["Japanese"] = array();
	$pageTitleswork_tasks["Japanese"] = array();
	$fieldLabelswork_tasks["Japanese"]["id"] = "Id";
	$fieldToolTipswork_tasks["Japanese"]["id"] = "";
	$placeHolderswork_tasks["Japanese"]["id"] = "";
	$fieldLabelswork_tasks["Japanese"]["status_id"] = "ステータス";
	$fieldToolTipswork_tasks["Japanese"]["status_id"] = "";
	$placeHolderswork_tasks["Japanese"]["status_id"] = "";
	$fieldLabelswork_tasks["Japanese"]["title"] = "タイトル";
	$fieldToolTipswork_tasks["Japanese"]["title"] = "";
	$placeHolderswork_tasks["Japanese"]["title"] = "";
	$fieldLabelswork_tasks["Japanese"]["category_id"] = "カテゴリー";
	$fieldToolTipswork_tasks["Japanese"]["category_id"] = "";
	$placeHolderswork_tasks["Japanese"]["category_id"] = "";
	$fieldLabelswork_tasks["Japanese"]["details"] = "詳細";
	$fieldToolTipswork_tasks["Japanese"]["details"] = "";
	$placeHolderswork_tasks["Japanese"]["details"] = "";
	$fieldLabelswork_tasks["Japanese"]["work_limit"] = "期限";
	$fieldToolTipswork_tasks["Japanese"]["work_limit"] = "";
	$placeHolderswork_tasks["Japanese"]["work_limit"] = "";
	$fieldLabelswork_tasks["Japanese"]["dept_group_id"] = "担当部署";
	$fieldToolTipswork_tasks["Japanese"]["dept_group_id"] = "";
	$placeHolderswork_tasks["Japanese"]["dept_group_id"] = "";
	$fieldLabelswork_tasks["Japanese"]["work_at"] = "作業日";
	$fieldToolTipswork_tasks["Japanese"]["work_at"] = "";
	$placeHolderswork_tasks["Japanese"]["work_at"] = "";
	$fieldLabelswork_tasks["Japanese"]["work_by"] = "作業者";
	$fieldToolTipswork_tasks["Japanese"]["work_by"] = "";
	$placeHolderswork_tasks["Japanese"]["work_by"] = "";
	$fieldLabelswork_tasks["Japanese"]["created_at"] = "作成日";
	$fieldToolTipswork_tasks["Japanese"]["created_at"] = "";
	$placeHolderswork_tasks["Japanese"]["created_at"] = "";
	$fieldLabelswork_tasks["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipswork_tasks["Japanese"]["updated_at"] = "";
	$placeHolderswork_tasks["Japanese"]["updated_at"] = "";
	if (count($fieldToolTipswork_tasks["Japanese"]))
		$tdatawork_tasks[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelswork_tasks[""] = array();
	$fieldToolTipswork_tasks[""] = array();
	$placeHolderswork_tasks[""] = array();
	$pageTitleswork_tasks[""] = array();
	$fieldLabelswork_tasks[""]["id"] = "Id";
	$fieldToolTipswork_tasks[""]["id"] = "";
	$placeHolderswork_tasks[""]["id"] = "";
	$fieldLabelswork_tasks[""]["status_id"] = "Status Id";
	$fieldToolTipswork_tasks[""]["status_id"] = "";
	$placeHolderswork_tasks[""]["status_id"] = "";
	$fieldLabelswork_tasks[""]["title"] = "Title";
	$fieldToolTipswork_tasks[""]["title"] = "";
	$placeHolderswork_tasks[""]["title"] = "";
	$fieldLabelswork_tasks[""]["category_id"] = "Category Id";
	$fieldToolTipswork_tasks[""]["category_id"] = "";
	$placeHolderswork_tasks[""]["category_id"] = "";
	$fieldLabelswork_tasks[""]["details"] = "Details";
	$fieldToolTipswork_tasks[""]["details"] = "";
	$placeHolderswork_tasks[""]["details"] = "";
	$fieldLabelswork_tasks[""]["work_limit"] = "Work Limit";
	$fieldToolTipswork_tasks[""]["work_limit"] = "";
	$placeHolderswork_tasks[""]["work_limit"] = "";
	$fieldLabelswork_tasks[""]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipswork_tasks[""]["dept_group_id"] = "";
	$placeHolderswork_tasks[""]["dept_group_id"] = "";
	$fieldLabelswork_tasks[""]["work_at"] = "Work At";
	$fieldToolTipswork_tasks[""]["work_at"] = "";
	$placeHolderswork_tasks[""]["work_at"] = "";
	$fieldLabelswork_tasks[""]["work_by"] = "Work By";
	$fieldToolTipswork_tasks[""]["work_by"] = "";
	$placeHolderswork_tasks[""]["work_by"] = "";
	$fieldLabelswork_tasks[""]["created_at"] = "Created At";
	$fieldToolTipswork_tasks[""]["created_at"] = "";
	$placeHolderswork_tasks[""]["created_at"] = "";
	$fieldLabelswork_tasks[""]["updated_at"] = "Updated At";
	$fieldToolTipswork_tasks[""]["updated_at"] = "";
	$placeHolderswork_tasks[""]["updated_at"] = "";
	if (count($fieldToolTipswork_tasks[""]))
		$tdatawork_tasks[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelswork_tasks["English"] = array();
	$fieldToolTipswork_tasks["English"] = array();
	$placeHolderswork_tasks["English"] = array();
	$pageTitleswork_tasks["English"] = array();
	$fieldLabelswork_tasks["English"]["id"] = "Id";
	$fieldToolTipswork_tasks["English"]["id"] = "";
	$placeHolderswork_tasks["English"]["id"] = "";
	$fieldLabelswork_tasks["English"]["status_id"] = "Status Id";
	$fieldToolTipswork_tasks["English"]["status_id"] = "";
	$placeHolderswork_tasks["English"]["status_id"] = "";
	$fieldLabelswork_tasks["English"]["title"] = "Title";
	$fieldToolTipswork_tasks["English"]["title"] = "";
	$placeHolderswork_tasks["English"]["title"] = "";
	$fieldLabelswork_tasks["English"]["category_id"] = "Category Id";
	$fieldToolTipswork_tasks["English"]["category_id"] = "";
	$placeHolderswork_tasks["English"]["category_id"] = "";
	$fieldLabelswork_tasks["English"]["details"] = "Details";
	$fieldToolTipswork_tasks["English"]["details"] = "";
	$placeHolderswork_tasks["English"]["details"] = "";
	$fieldLabelswork_tasks["English"]["work_limit"] = "Work Limit";
	$fieldToolTipswork_tasks["English"]["work_limit"] = "";
	$placeHolderswork_tasks["English"]["work_limit"] = "";
	$fieldLabelswork_tasks["English"]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipswork_tasks["English"]["dept_group_id"] = "";
	$placeHolderswork_tasks["English"]["dept_group_id"] = "";
	$fieldLabelswork_tasks["English"]["work_at"] = "Work At";
	$fieldToolTipswork_tasks["English"]["work_at"] = "";
	$placeHolderswork_tasks["English"]["work_at"] = "";
	$fieldLabelswork_tasks["English"]["work_by"] = "Work By";
	$fieldToolTipswork_tasks["English"]["work_by"] = "";
	$placeHolderswork_tasks["English"]["work_by"] = "";
	$fieldLabelswork_tasks["English"]["created_at"] = "Created At";
	$fieldToolTipswork_tasks["English"]["created_at"] = "";
	$placeHolderswork_tasks["English"]["created_at"] = "";
	$fieldLabelswork_tasks["English"]["updated_at"] = "Updated At";
	$fieldToolTipswork_tasks["English"]["updated_at"] = "";
	$placeHolderswork_tasks["English"]["updated_at"] = "";
	if (count($fieldToolTipswork_tasks["English"]))
		$tdatawork_tasks[".isUseToolTips"] = true;
}


	$tdatawork_tasks[".NCSearch"] = true;



$tdatawork_tasks[".shortTableName"] = "work_tasks";
$tdatawork_tasks[".nSecOptions"] = 0;
$tdatawork_tasks[".recsPerRowPrint"] = 1;
$tdatawork_tasks[".mainTableOwnerID"] = "";
$tdatawork_tasks[".moveNext"] = 1;
$tdatawork_tasks[".entityType"] = 0;

$tdatawork_tasks[".strOriginalTableName"] = "work_tasks";

	



$tdatawork_tasks[".showAddInPopup"] = false;

$tdatawork_tasks[".showEditInPopup"] = false;

$tdatawork_tasks[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatawork_tasks[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatawork_tasks[".fieldsForRegister"] = array();

$tdatawork_tasks[".listAjax"] = false;

	$tdatawork_tasks[".audit"] = true;

	$tdatawork_tasks[".locking"] = false;



$tdatawork_tasks[".list"] = true;

$tdatawork_tasks[".inlineEdit"] = true;


$tdatawork_tasks[".reorderRecordsByHeader"] = true;



$tdatawork_tasks[".inlineAdd"] = true;

$tdatawork_tasks[".import"] = true;

$tdatawork_tasks[".exportTo"] = true;


$tdatawork_tasks[".delete"] = true;

$tdatawork_tasks[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatawork_tasks[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatawork_tasks[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatawork_tasks[".searchSaving"] = false;
//

$tdatawork_tasks[".showSearchPanel"] = true;
		$tdatawork_tasks[".flexibleSearch"] = true;

$tdatawork_tasks[".isUseAjaxSuggest"] = true;

$tdatawork_tasks[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatawork_tasks[".ajaxCodeSnippetAdded"] = false;

$tdatawork_tasks[".buttonsAdded"] = false;

$tdatawork_tasks[".addPageEvents"] = false;

// use timepicker for search panel
$tdatawork_tasks[".isUseTimeForSearch"] = false;





$tdatawork_tasks[".allSearchFields"] = array();
$tdatawork_tasks[".filterFields"] = array();
$tdatawork_tasks[".requiredSearchFields"] = array();

$tdatawork_tasks[".allSearchFields"][] = "id";
	$tdatawork_tasks[".allSearchFields"][] = "status_id";
	$tdatawork_tasks[".allSearchFields"][] = "title";
	$tdatawork_tasks[".allSearchFields"][] = "category_id";
	$tdatawork_tasks[".allSearchFields"][] = "details";
	$tdatawork_tasks[".allSearchFields"][] = "work_limit";
	$tdatawork_tasks[".allSearchFields"][] = "dept_group_id";
	$tdatawork_tasks[".allSearchFields"][] = "work_at";
	$tdatawork_tasks[".allSearchFields"][] = "work_by";
	$tdatawork_tasks[".allSearchFields"][] = "created_at";
	$tdatawork_tasks[".allSearchFields"][] = "updated_at";
	

$tdatawork_tasks[".googleLikeFields"] = array();
$tdatawork_tasks[".googleLikeFields"][] = "id";
$tdatawork_tasks[".googleLikeFields"][] = "status_id";
$tdatawork_tasks[".googleLikeFields"][] = "title";
$tdatawork_tasks[".googleLikeFields"][] = "category_id";
$tdatawork_tasks[".googleLikeFields"][] = "details";
$tdatawork_tasks[".googleLikeFields"][] = "work_limit";
$tdatawork_tasks[".googleLikeFields"][] = "dept_group_id";
$tdatawork_tasks[".googleLikeFields"][] = "work_at";
$tdatawork_tasks[".googleLikeFields"][] = "work_by";
$tdatawork_tasks[".googleLikeFields"][] = "created_at";
$tdatawork_tasks[".googleLikeFields"][] = "updated_at";


$tdatawork_tasks[".advSearchFields"] = array();
$tdatawork_tasks[".advSearchFields"][] = "id";
$tdatawork_tasks[".advSearchFields"][] = "status_id";
$tdatawork_tasks[".advSearchFields"][] = "title";
$tdatawork_tasks[".advSearchFields"][] = "category_id";
$tdatawork_tasks[".advSearchFields"][] = "details";
$tdatawork_tasks[".advSearchFields"][] = "work_limit";
$tdatawork_tasks[".advSearchFields"][] = "dept_group_id";
$tdatawork_tasks[".advSearchFields"][] = "work_at";
$tdatawork_tasks[".advSearchFields"][] = "work_by";
$tdatawork_tasks[".advSearchFields"][] = "created_at";
$tdatawork_tasks[".advSearchFields"][] = "updated_at";

$tdatawork_tasks[".tableType"] = "list";

$tdatawork_tasks[".printerPageOrientation"] = 0;
$tdatawork_tasks[".nPrinterPageScale"] = 100;

$tdatawork_tasks[".nPrinterSplitRecords"] = 40;

$tdatawork_tasks[".nPrinterPDFSplitRecords"] = 40;



$tdatawork_tasks[".geocodingEnabled"] = false;





$tdatawork_tasks[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatawork_tasks[".pageSize"] = 100;

$tdatawork_tasks[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatawork_tasks[".strOrderBy"] = $tstrOrderBy;

$tdatawork_tasks[".orderindexes"] = array();
$tdatawork_tasks[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatawork_tasks[".sqlHead"] = "SELECT `id`,  `status_id`,  `title`,  `category_id`,  `details`,  `work_limit`,  `dept_group_id`,  `work_at`,  `work_by`,  `created_at`,  `updated_at`";
$tdatawork_tasks[".sqlFrom"] = "FROM `work_tasks`";
$tdatawork_tasks[".sqlWhereExpr"] = "";
$tdatawork_tasks[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatawork_tasks[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatawork_tasks[".arrGroupsPerPage"] = $arrGPP;

$tdatawork_tasks[".highlightSearchResults"] = true;

$tableKeyswork_tasks = array();
$tableKeyswork_tasks[] = "id";
$tdatawork_tasks[".Keys"] = $tableKeyswork_tasks;

$tdatawork_tasks[".listFields"] = array();
$tdatawork_tasks[".listFields"][] = "id";
$tdatawork_tasks[".listFields"][] = "status_id";
$tdatawork_tasks[".listFields"][] = "title";
$tdatawork_tasks[".listFields"][] = "category_id";
$tdatawork_tasks[".listFields"][] = "details";
$tdatawork_tasks[".listFields"][] = "work_limit";
$tdatawork_tasks[".listFields"][] = "dept_group_id";
$tdatawork_tasks[".listFields"][] = "work_at";
$tdatawork_tasks[".listFields"][] = "work_by";
$tdatawork_tasks[".listFields"][] = "created_at";
$tdatawork_tasks[".listFields"][] = "updated_at";

$tdatawork_tasks[".hideMobileList"] = array();


$tdatawork_tasks[".viewFields"] = array();

$tdatawork_tasks[".addFields"] = array();

$tdatawork_tasks[".masterListFields"] = array();
$tdatawork_tasks[".masterListFields"][] = "id";
$tdatawork_tasks[".masterListFields"][] = "status_id";
$tdatawork_tasks[".masterListFields"][] = "title";
$tdatawork_tasks[".masterListFields"][] = "category_id";
$tdatawork_tasks[".masterListFields"][] = "details";
$tdatawork_tasks[".masterListFields"][] = "work_limit";
$tdatawork_tasks[".masterListFields"][] = "dept_group_id";
$tdatawork_tasks[".masterListFields"][] = "work_at";
$tdatawork_tasks[".masterListFields"][] = "work_by";
$tdatawork_tasks[".masterListFields"][] = "created_at";
$tdatawork_tasks[".masterListFields"][] = "updated_at";

$tdatawork_tasks[".inlineAddFields"] = array();
$tdatawork_tasks[".inlineAddFields"][] = "status_id";
$tdatawork_tasks[".inlineAddFields"][] = "title";
$tdatawork_tasks[".inlineAddFields"][] = "category_id";
$tdatawork_tasks[".inlineAddFields"][] = "details";
$tdatawork_tasks[".inlineAddFields"][] = "work_limit";
$tdatawork_tasks[".inlineAddFields"][] = "dept_group_id";
$tdatawork_tasks[".inlineAddFields"][] = "work_at";
$tdatawork_tasks[".inlineAddFields"][] = "work_by";
$tdatawork_tasks[".inlineAddFields"][] = "created_at";
$tdatawork_tasks[".inlineAddFields"][] = "updated_at";

$tdatawork_tasks[".editFields"] = array();

$tdatawork_tasks[".inlineEditFields"] = array();
$tdatawork_tasks[".inlineEditFields"][] = "status_id";
$tdatawork_tasks[".inlineEditFields"][] = "title";
$tdatawork_tasks[".inlineEditFields"][] = "category_id";
$tdatawork_tasks[".inlineEditFields"][] = "details";
$tdatawork_tasks[".inlineEditFields"][] = "work_limit";
$tdatawork_tasks[".inlineEditFields"][] = "dept_group_id";
$tdatawork_tasks[".inlineEditFields"][] = "work_at";
$tdatawork_tasks[".inlineEditFields"][] = "work_by";
$tdatawork_tasks[".inlineEditFields"][] = "created_at";
$tdatawork_tasks[".inlineEditFields"][] = "updated_at";

$tdatawork_tasks[".updateSelectedFields"] = array();


$tdatawork_tasks[".exportFields"] = array();
$tdatawork_tasks[".exportFields"][] = "id";
$tdatawork_tasks[".exportFields"][] = "status_id";
$tdatawork_tasks[".exportFields"][] = "title";
$tdatawork_tasks[".exportFields"][] = "category_id";
$tdatawork_tasks[".exportFields"][] = "details";
$tdatawork_tasks[".exportFields"][] = "work_limit";
$tdatawork_tasks[".exportFields"][] = "dept_group_id";
$tdatawork_tasks[".exportFields"][] = "work_at";
$tdatawork_tasks[".exportFields"][] = "work_by";
$tdatawork_tasks[".exportFields"][] = "created_at";
$tdatawork_tasks[".exportFields"][] = "updated_at";

$tdatawork_tasks[".importFields"] = array();
$tdatawork_tasks[".importFields"][] = "id";
$tdatawork_tasks[".importFields"][] = "status_id";
$tdatawork_tasks[".importFields"][] = "title";
$tdatawork_tasks[".importFields"][] = "category_id";
$tdatawork_tasks[".importFields"][] = "details";
$tdatawork_tasks[".importFields"][] = "work_limit";
$tdatawork_tasks[".importFields"][] = "dept_group_id";
$tdatawork_tasks[".importFields"][] = "work_at";
$tdatawork_tasks[".importFields"][] = "work_by";
$tdatawork_tasks[".importFields"][] = "created_at";
$tdatawork_tasks[".importFields"][] = "updated_at";

$tdatawork_tasks[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "work_tasks";
	$fdata["Label"] = GetFieldLabel("work_tasks","id");
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




	$tdatawork_tasks["id"] = $fdata;
//	status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status_id";
	$fdata["GoodName"] = "status_id";
	$fdata["ownerTable"] = "work_tasks";
	$fdata["Label"] = GetFieldLabel("work_tasks","status_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`status_id`";

	
	
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
	$edata["LookupTable"] = "mst_work_task_statuses";
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




	$tdatawork_tasks["status_id"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "work_tasks";
	$fdata["Label"] = GetFieldLabel("work_tasks","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`title`";

	
	
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




	$tdatawork_tasks["title"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "work_tasks";
	$fdata["Label"] = GetFieldLabel("work_tasks","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_id`";

	
	
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
	$edata["LookupTable"] = "mst_work_task_categories";
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




	$tdatawork_tasks["category_id"] = $fdata;
//	details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "details";
	$fdata["GoodName"] = "details";
	$fdata["ownerTable"] = "work_tasks";
	$fdata["Label"] = GetFieldLabel("work_tasks","details");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "details";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`details`";

	
	
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




	$tdatawork_tasks["details"] = $fdata;
//	work_limit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "work_limit";
	$fdata["GoodName"] = "work_limit";
	$fdata["ownerTable"] = "work_tasks";
	$fdata["Label"] = GetFieldLabel("work_tasks","work_limit");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "work_limit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`work_limit`";

	
	
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




	$tdatawork_tasks["work_limit"] = $fdata;
//	dept_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dept_group_id";
	$fdata["GoodName"] = "dept_group_id";
	$fdata["ownerTable"] = "work_tasks";
	$fdata["Label"] = GetFieldLabel("work_tasks","dept_group_id");
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




	$tdatawork_tasks["dept_group_id"] = $fdata;
//	work_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "work_at";
	$fdata["GoodName"] = "work_at";
	$fdata["ownerTable"] = "work_tasks";
	$fdata["Label"] = GetFieldLabel("work_tasks","work_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "work_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`work_at`";

	
	
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




	$tdatawork_tasks["work_at"] = $fdata;
//	work_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "work_by";
	$fdata["GoodName"] = "work_by";
	$fdata["ownerTable"] = "work_tasks";
	$fdata["Label"] = GetFieldLabel("work_tasks","work_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "work_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`work_by`";

	
	
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




	$tdatawork_tasks["work_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "work_tasks";
	$fdata["Label"] = GetFieldLabel("work_tasks","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatawork_tasks["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "work_tasks";
	$fdata["Label"] = GetFieldLabel("work_tasks","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatawork_tasks["updated_at"] = $fdata;


$tables_data["work_tasks"]=&$tdatawork_tasks;
$field_labels["work_tasks"] = &$fieldLabelswork_tasks;
$fieldToolTips["work_tasks"] = &$fieldToolTipswork_tasks;
$placeHolders["work_tasks"] = &$placeHolderswork_tasks;
$page_titles["work_tasks"] = &$pageTitleswork_tasks;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["work_tasks"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["work_tasks"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_work_tasks()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `status_id`,  `title`,  `category_id`,  `details`,  `work_limit`,  `dept_group_id`,  `work_at`,  `work_by`,  `created_at`,  `updated_at`";
$proto0["m_strFrom"] = "FROM `work_tasks`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `id` DESC";
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
	"m_strTable" => "work_tasks",
	"m_srcTableName" => "work_tasks"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "work_tasks";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status_id",
	"m_strTable" => "work_tasks",
	"m_srcTableName" => "work_tasks"
));

$proto8["m_sql"] = "`status_id`";
$proto8["m_srcTableName"] = "work_tasks";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "work_tasks",
	"m_srcTableName" => "work_tasks"
));

$proto10["m_sql"] = "`title`";
$proto10["m_srcTableName"] = "work_tasks";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "work_tasks",
	"m_srcTableName" => "work_tasks"
));

$proto12["m_sql"] = "`category_id`";
$proto12["m_srcTableName"] = "work_tasks";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "details",
	"m_strTable" => "work_tasks",
	"m_srcTableName" => "work_tasks"
));

$proto14["m_sql"] = "`details`";
$proto14["m_srcTableName"] = "work_tasks";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "work_limit",
	"m_strTable" => "work_tasks",
	"m_srcTableName" => "work_tasks"
));

$proto16["m_sql"] = "`work_limit`";
$proto16["m_srcTableName"] = "work_tasks";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "dept_group_id",
	"m_strTable" => "work_tasks",
	"m_srcTableName" => "work_tasks"
));

$proto18["m_sql"] = "`dept_group_id`";
$proto18["m_srcTableName"] = "work_tasks";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "work_at",
	"m_strTable" => "work_tasks",
	"m_srcTableName" => "work_tasks"
));

$proto20["m_sql"] = "`work_at`";
$proto20["m_srcTableName"] = "work_tasks";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "work_by",
	"m_strTable" => "work_tasks",
	"m_srcTableName" => "work_tasks"
));

$proto22["m_sql"] = "`work_by`";
$proto22["m_srcTableName"] = "work_tasks";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "work_tasks",
	"m_srcTableName" => "work_tasks"
));

$proto24["m_sql"] = "`created_at`";
$proto24["m_srcTableName"] = "work_tasks";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "work_tasks",
	"m_srcTableName" => "work_tasks"
));

$proto26["m_sql"] = "`updated_at`";
$proto26["m_srcTableName"] = "work_tasks";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "work_tasks";
$proto29["m_srcTableName"] = "work_tasks";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "status_id";
$proto29["m_columns"][] = "title";
$proto29["m_columns"][] = "category_id";
$proto29["m_columns"][] = "details";
$proto29["m_columns"][] = "work_limit";
$proto29["m_columns"][] = "dept_group_id";
$proto29["m_columns"][] = "work_at";
$proto29["m_columns"][] = "work_by";
$proto29["m_columns"][] = "created_at";
$proto29["m_columns"][] = "updated_at";
$proto29["m_columns"][] = "created_by";
$proto29["m_columns"][] = "updated_by";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "`work_tasks`";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "work_tasks";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "work_tasks",
	"m_srcTableName" => "work_tasks"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 0;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="work_tasks";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_work_tasks = createSqlQuery_work_tasks();


	
		;

											

$tdatawork_tasks[".sqlquery"] = $queryData_work_tasks;

include_once(getabspath("include/work_tasks_events.php"));
$tableEvents["work_tasks"] = new eventclass_work_tasks;
$tdatawork_tasks[".hasEvents"] = true;

?>