<?php
require_once(getabspath("classes/cipherer.php"));




$tdatausers_group_memberships = array();
	$tdatausers_group_memberships[".truncateText"] = true;
	$tdatausers_group_memberships[".NumberOfChars"] = 80;
	$tdatausers_group_memberships[".ShortName"] = "users_group_memberships";
	$tdatausers_group_memberships[".OwnerID"] = "";
	$tdatausers_group_memberships[".OriginalTable"] = "users_group_memberships";

//	field labels
$fieldLabelsusers_group_memberships = array();
$fieldToolTipsusers_group_memberships = array();
$pageTitlesusers_group_memberships = array();
$placeHoldersusers_group_memberships = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsusers_group_memberships["Japanese"] = array();
	$fieldToolTipsusers_group_memberships["Japanese"] = array();
	$placeHoldersusers_group_memberships["Japanese"] = array();
	$pageTitlesusers_group_memberships["Japanese"] = array();
	$fieldLabelsusers_group_memberships["Japanese"]["id"] = "Id";
	$fieldToolTipsusers_group_memberships["Japanese"]["id"] = "";
	$placeHoldersusers_group_memberships["Japanese"]["id"] = "";
	$fieldLabelsusers_group_memberships["Japanese"]["user_id"] = "User Id";
	$fieldToolTipsusers_group_memberships["Japanese"]["user_id"] = "";
	$placeHoldersusers_group_memberships["Japanese"]["user_id"] = "";
	$fieldLabelsusers_group_memberships["Japanese"]["dept_group_id"] = "部署";
	$fieldToolTipsusers_group_memberships["Japanese"]["dept_group_id"] = "";
	$placeHoldersusers_group_memberships["Japanese"]["dept_group_id"] = "";
	$fieldLabelsusers_group_memberships["Japanese"]["start_date"] = "開始日";
	$fieldToolTipsusers_group_memberships["Japanese"]["start_date"] = "";
	$placeHoldersusers_group_memberships["Japanese"]["start_date"] = "";
	$fieldLabelsusers_group_memberships["Japanese"]["end_date"] = "終了日";
	$fieldToolTipsusers_group_memberships["Japanese"]["end_date"] = "";
	$placeHoldersusers_group_memberships["Japanese"]["end_date"] = "";
	$fieldLabelsusers_group_memberships["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsusers_group_memberships["Japanese"]["created_at"] = "";
	$placeHoldersusers_group_memberships["Japanese"]["created_at"] = "";
	$fieldLabelsusers_group_memberships["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsusers_group_memberships["Japanese"]["created_by"] = "";
	$placeHoldersusers_group_memberships["Japanese"]["created_by"] = "";
	$fieldLabelsusers_group_memberships["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsusers_group_memberships["Japanese"]["updated_at"] = "";
	$placeHoldersusers_group_memberships["Japanese"]["updated_at"] = "";
	$fieldLabelsusers_group_memberships["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsusers_group_memberships["Japanese"]["updated_by"] = "";
	$placeHoldersusers_group_memberships["Japanese"]["updated_by"] = "";
	if (count($fieldToolTipsusers_group_memberships["Japanese"]))
		$tdatausers_group_memberships[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsusers_group_memberships[""] = array();
	$fieldToolTipsusers_group_memberships[""] = array();
	$placeHoldersusers_group_memberships[""] = array();
	$pageTitlesusers_group_memberships[""] = array();
	$fieldLabelsusers_group_memberships[""]["id"] = "Id";
	$fieldToolTipsusers_group_memberships[""]["id"] = "";
	$placeHoldersusers_group_memberships[""]["id"] = "";
	$fieldLabelsusers_group_memberships[""]["user_id"] = "User Id";
	$fieldToolTipsusers_group_memberships[""]["user_id"] = "";
	$placeHoldersusers_group_memberships[""]["user_id"] = "";
	$fieldLabelsusers_group_memberships[""]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsusers_group_memberships[""]["dept_group_id"] = "";
	$placeHoldersusers_group_memberships[""]["dept_group_id"] = "";
	$fieldLabelsusers_group_memberships[""]["start_date"] = "Start Date";
	$fieldToolTipsusers_group_memberships[""]["start_date"] = "";
	$placeHoldersusers_group_memberships[""]["start_date"] = "";
	$fieldLabelsusers_group_memberships[""]["end_date"] = "End Date";
	$fieldToolTipsusers_group_memberships[""]["end_date"] = "";
	$placeHoldersusers_group_memberships[""]["end_date"] = "";
	$fieldLabelsusers_group_memberships[""]["created_at"] = "Created At";
	$fieldToolTipsusers_group_memberships[""]["created_at"] = "";
	$placeHoldersusers_group_memberships[""]["created_at"] = "";
	$fieldLabelsusers_group_memberships[""]["created_by"] = "Created By";
	$fieldToolTipsusers_group_memberships[""]["created_by"] = "";
	$placeHoldersusers_group_memberships[""]["created_by"] = "";
	$fieldLabelsusers_group_memberships[""]["updated_at"] = "Updated At";
	$fieldToolTipsusers_group_memberships[""]["updated_at"] = "";
	$placeHoldersusers_group_memberships[""]["updated_at"] = "";
	$fieldLabelsusers_group_memberships[""]["updated_by"] = "Updated By";
	$fieldToolTipsusers_group_memberships[""]["updated_by"] = "";
	$placeHoldersusers_group_memberships[""]["updated_by"] = "";
	if (count($fieldToolTipsusers_group_memberships[""]))
		$tdatausers_group_memberships[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusers_group_memberships["English"] = array();
	$fieldToolTipsusers_group_memberships["English"] = array();
	$placeHoldersusers_group_memberships["English"] = array();
	$pageTitlesusers_group_memberships["English"] = array();
	$fieldLabelsusers_group_memberships["English"]["id"] = "Id";
	$fieldToolTipsusers_group_memberships["English"]["id"] = "";
	$placeHoldersusers_group_memberships["English"]["id"] = "";
	$fieldLabelsusers_group_memberships["English"]["user_id"] = "User Id";
	$fieldToolTipsusers_group_memberships["English"]["user_id"] = "";
	$placeHoldersusers_group_memberships["English"]["user_id"] = "";
	$fieldLabelsusers_group_memberships["English"]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsusers_group_memberships["English"]["dept_group_id"] = "";
	$placeHoldersusers_group_memberships["English"]["dept_group_id"] = "";
	$fieldLabelsusers_group_memberships["English"]["start_date"] = "Start Date";
	$fieldToolTipsusers_group_memberships["English"]["start_date"] = "";
	$placeHoldersusers_group_memberships["English"]["start_date"] = "";
	$fieldLabelsusers_group_memberships["English"]["end_date"] = "End Date";
	$fieldToolTipsusers_group_memberships["English"]["end_date"] = "";
	$placeHoldersusers_group_memberships["English"]["end_date"] = "";
	$fieldLabelsusers_group_memberships["English"]["created_at"] = "Created At";
	$fieldToolTipsusers_group_memberships["English"]["created_at"] = "";
	$placeHoldersusers_group_memberships["English"]["created_at"] = "";
	$fieldLabelsusers_group_memberships["English"]["created_by"] = "Created By";
	$fieldToolTipsusers_group_memberships["English"]["created_by"] = "";
	$placeHoldersusers_group_memberships["English"]["created_by"] = "";
	$fieldLabelsusers_group_memberships["English"]["updated_at"] = "Updated At";
	$fieldToolTipsusers_group_memberships["English"]["updated_at"] = "";
	$placeHoldersusers_group_memberships["English"]["updated_at"] = "";
	$fieldLabelsusers_group_memberships["English"]["updated_by"] = "Updated By";
	$fieldToolTipsusers_group_memberships["English"]["updated_by"] = "";
	$placeHoldersusers_group_memberships["English"]["updated_by"] = "";
	if (count($fieldToolTipsusers_group_memberships["English"]))
		$tdatausers_group_memberships[".isUseToolTips"] = true;
}


	$tdatausers_group_memberships[".NCSearch"] = true;



$tdatausers_group_memberships[".shortTableName"] = "users_group_memberships";
$tdatausers_group_memberships[".nSecOptions"] = 0;
$tdatausers_group_memberships[".recsPerRowPrint"] = 1;
$tdatausers_group_memberships[".mainTableOwnerID"] = "";
$tdatausers_group_memberships[".moveNext"] = 1;
$tdatausers_group_memberships[".entityType"] = 0;

$tdatausers_group_memberships[".strOriginalTableName"] = "users_group_memberships";

	



$tdatausers_group_memberships[".showAddInPopup"] = false;

$tdatausers_group_memberships[".showEditInPopup"] = false;

$tdatausers_group_memberships[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausers_group_memberships[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausers_group_memberships[".fieldsForRegister"] = array();

$tdatausers_group_memberships[".listAjax"] = false;

	$tdatausers_group_memberships[".audit"] = true;

	$tdatausers_group_memberships[".locking"] = false;



$tdatausers_group_memberships[".list"] = true;

$tdatausers_group_memberships[".inlineEdit"] = true;


$tdatausers_group_memberships[".reorderRecordsByHeader"] = true;



$tdatausers_group_memberships[".inlineAdd"] = true;

$tdatausers_group_memberships[".import"] = true;

$tdatausers_group_memberships[".exportTo"] = true;


$tdatausers_group_memberships[".delete"] = true;

$tdatausers_group_memberships[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatausers_group_memberships[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatausers_group_memberships[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatausers_group_memberships[".searchSaving"] = false;
//

$tdatausers_group_memberships[".showSearchPanel"] = true;
		$tdatausers_group_memberships[".flexibleSearch"] = true;

$tdatausers_group_memberships[".isUseAjaxSuggest"] = true;

$tdatausers_group_memberships[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatausers_group_memberships[".ajaxCodeSnippetAdded"] = false;

$tdatausers_group_memberships[".buttonsAdded"] = false;

$tdatausers_group_memberships[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausers_group_memberships[".isUseTimeForSearch"] = false;



$tdatausers_group_memberships[".badgeColor"] = "4682b4";


$tdatausers_group_memberships[".allSearchFields"] = array();
$tdatausers_group_memberships[".filterFields"] = array();
$tdatausers_group_memberships[".requiredSearchFields"] = array();

$tdatausers_group_memberships[".allSearchFields"][] = "id";
	$tdatausers_group_memberships[".allSearchFields"][] = "user_id";
	$tdatausers_group_memberships[".allSearchFields"][] = "dept_group_id";
	$tdatausers_group_memberships[".allSearchFields"][] = "start_date";
	$tdatausers_group_memberships[".allSearchFields"][] = "end_date";
	$tdatausers_group_memberships[".allSearchFields"][] = "created_at";
	$tdatausers_group_memberships[".allSearchFields"][] = "created_by";
	$tdatausers_group_memberships[".allSearchFields"][] = "updated_at";
	$tdatausers_group_memberships[".allSearchFields"][] = "updated_by";
	

$tdatausers_group_memberships[".googleLikeFields"] = array();
$tdatausers_group_memberships[".googleLikeFields"][] = "id";
$tdatausers_group_memberships[".googleLikeFields"][] = "user_id";
$tdatausers_group_memberships[".googleLikeFields"][] = "dept_group_id";
$tdatausers_group_memberships[".googleLikeFields"][] = "start_date";
$tdatausers_group_memberships[".googleLikeFields"][] = "end_date";
$tdatausers_group_memberships[".googleLikeFields"][] = "created_at";
$tdatausers_group_memberships[".googleLikeFields"][] = "created_by";
$tdatausers_group_memberships[".googleLikeFields"][] = "updated_at";
$tdatausers_group_memberships[".googleLikeFields"][] = "updated_by";


$tdatausers_group_memberships[".advSearchFields"] = array();
$tdatausers_group_memberships[".advSearchFields"][] = "id";
$tdatausers_group_memberships[".advSearchFields"][] = "user_id";
$tdatausers_group_memberships[".advSearchFields"][] = "dept_group_id";
$tdatausers_group_memberships[".advSearchFields"][] = "start_date";
$tdatausers_group_memberships[".advSearchFields"][] = "end_date";
$tdatausers_group_memberships[".advSearchFields"][] = "created_at";
$tdatausers_group_memberships[".advSearchFields"][] = "created_by";
$tdatausers_group_memberships[".advSearchFields"][] = "updated_at";
$tdatausers_group_memberships[".advSearchFields"][] = "updated_by";

$tdatausers_group_memberships[".tableType"] = "list";

$tdatausers_group_memberships[".printerPageOrientation"] = 0;
$tdatausers_group_memberships[".nPrinterPageScale"] = 100;

$tdatausers_group_memberships[".nPrinterSplitRecords"] = 40;

$tdatausers_group_memberships[".nPrinterPDFSplitRecords"] = 40;



$tdatausers_group_memberships[".geocodingEnabled"] = false;





$tdatausers_group_memberships[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatausers_group_memberships[".pageSize"] = 20;

$tdatausers_group_memberships[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausers_group_memberships[".strOrderBy"] = $tstrOrderBy;

$tdatausers_group_memberships[".orderindexes"] = array();
$tdatausers_group_memberships[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatausers_group_memberships[".sqlHead"] = "SELECT `id`,  `user_id`,  `dept_group_id`,  `start_date`,  `end_date`,  `created_at`,  `created_by`,  `updated_at`,  `updated_by`";
$tdatausers_group_memberships[".sqlFrom"] = "FROM `users_group_memberships`";
$tdatausers_group_memberships[".sqlWhereExpr"] = "";
$tdatausers_group_memberships[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausers_group_memberships[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausers_group_memberships[".arrGroupsPerPage"] = $arrGPP;

$tdatausers_group_memberships[".highlightSearchResults"] = true;

$tableKeysusers_group_memberships = array();
$tableKeysusers_group_memberships[] = "id";
$tdatausers_group_memberships[".Keys"] = $tableKeysusers_group_memberships;

$tdatausers_group_memberships[".listFields"] = array();
$tdatausers_group_memberships[".listFields"][] = "id";
$tdatausers_group_memberships[".listFields"][] = "user_id";
$tdatausers_group_memberships[".listFields"][] = "dept_group_id";
$tdatausers_group_memberships[".listFields"][] = "start_date";
$tdatausers_group_memberships[".listFields"][] = "end_date";
$tdatausers_group_memberships[".listFields"][] = "created_at";
$tdatausers_group_memberships[".listFields"][] = "created_by";
$tdatausers_group_memberships[".listFields"][] = "updated_at";
$tdatausers_group_memberships[".listFields"][] = "updated_by";

$tdatausers_group_memberships[".hideMobileList"] = array();


$tdatausers_group_memberships[".viewFields"] = array();

$tdatausers_group_memberships[".addFields"] = array();

$tdatausers_group_memberships[".masterListFields"] = array();
$tdatausers_group_memberships[".masterListFields"][] = "id";
$tdatausers_group_memberships[".masterListFields"][] = "user_id";
$tdatausers_group_memberships[".masterListFields"][] = "dept_group_id";
$tdatausers_group_memberships[".masterListFields"][] = "start_date";
$tdatausers_group_memberships[".masterListFields"][] = "end_date";
$tdatausers_group_memberships[".masterListFields"][] = "created_at";
$tdatausers_group_memberships[".masterListFields"][] = "created_by";
$tdatausers_group_memberships[".masterListFields"][] = "updated_at";
$tdatausers_group_memberships[".masterListFields"][] = "updated_by";

$tdatausers_group_memberships[".inlineAddFields"] = array();
$tdatausers_group_memberships[".inlineAddFields"][] = "user_id";
$tdatausers_group_memberships[".inlineAddFields"][] = "dept_group_id";
$tdatausers_group_memberships[".inlineAddFields"][] = "start_date";
$tdatausers_group_memberships[".inlineAddFields"][] = "end_date";

$tdatausers_group_memberships[".editFields"] = array();

$tdatausers_group_memberships[".inlineEditFields"] = array();
$tdatausers_group_memberships[".inlineEditFields"][] = "user_id";
$tdatausers_group_memberships[".inlineEditFields"][] = "dept_group_id";
$tdatausers_group_memberships[".inlineEditFields"][] = "start_date";
$tdatausers_group_memberships[".inlineEditFields"][] = "end_date";

$tdatausers_group_memberships[".updateSelectedFields"] = array();


$tdatausers_group_memberships[".exportFields"] = array();
$tdatausers_group_memberships[".exportFields"][] = "id";
$tdatausers_group_memberships[".exportFields"][] = "user_id";
$tdatausers_group_memberships[".exportFields"][] = "dept_group_id";
$tdatausers_group_memberships[".exportFields"][] = "start_date";
$tdatausers_group_memberships[".exportFields"][] = "end_date";
$tdatausers_group_memberships[".exportFields"][] = "created_at";
$tdatausers_group_memberships[".exportFields"][] = "created_by";
$tdatausers_group_memberships[".exportFields"][] = "updated_at";
$tdatausers_group_memberships[".exportFields"][] = "updated_by";

$tdatausers_group_memberships[".importFields"] = array();
$tdatausers_group_memberships[".importFields"][] = "id";
$tdatausers_group_memberships[".importFields"][] = "user_id";
$tdatausers_group_memberships[".importFields"][] = "dept_group_id";
$tdatausers_group_memberships[".importFields"][] = "start_date";
$tdatausers_group_memberships[".importFields"][] = "end_date";
$tdatausers_group_memberships[".importFields"][] = "created_at";
$tdatausers_group_memberships[".importFields"][] = "created_by";
$tdatausers_group_memberships[".importFields"][] = "updated_at";
$tdatausers_group_memberships[".importFields"][] = "updated_by";

$tdatausers_group_memberships[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "users_group_memberships";
	$fdata["Label"] = GetFieldLabel("users_group_memberships","id");
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




	$tdatausers_group_memberships["id"] = $fdata;
//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "users_group_memberships";
	$fdata["Label"] = GetFieldLabel("users_group_memberships","user_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_id`";

	
	
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




	$tdatausers_group_memberships["user_id"] = $fdata;
//	dept_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dept_group_id";
	$fdata["GoodName"] = "dept_group_id";
	$fdata["ownerTable"] = "users_group_memberships";
	$fdata["Label"] = GetFieldLabel("users_group_memberships","dept_group_id");
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




	$tdatausers_group_memberships["dept_group_id"] = $fdata;
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "users_group_memberships";
	$fdata["Label"] = GetFieldLabel("users_group_memberships","start_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "start_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`start_date`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdatausers_group_memberships["start_date"] = $fdata;
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "users_group_memberships";
	$fdata["Label"] = GetFieldLabel("users_group_memberships","end_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "end_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`end_date`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdatausers_group_memberships["end_date"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "users_group_memberships";
	$fdata["Label"] = GetFieldLabel("users_group_memberships","created_at");
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




	$tdatausers_group_memberships["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "users_group_memberships";
	$fdata["Label"] = GetFieldLabel("users_group_memberships","created_by");
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




	$tdatausers_group_memberships["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "users_group_memberships";
	$fdata["Label"] = GetFieldLabel("users_group_memberships","updated_at");
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




	$tdatausers_group_memberships["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "users_group_memberships";
	$fdata["Label"] = GetFieldLabel("users_group_memberships","updated_by");
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




	$tdatausers_group_memberships["updated_by"] = $fdata;


$tables_data["users_group_memberships"]=&$tdatausers_group_memberships;
$field_labels["users_group_memberships"] = &$fieldLabelsusers_group_memberships;
$fieldToolTips["users_group_memberships"] = &$fieldToolTipsusers_group_memberships;
$placeHolders["users_group_memberships"] = &$placeHoldersusers_group_memberships;
$page_titles["users_group_memberships"] = &$pageTitlesusers_group_memberships;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["users_group_memberships"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["users_group_memberships"] = array();


	
				$strOriginalDetailsTable="users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="admin_users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "admin_users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["users_group_memberships"][0] = $masterParams;
				$masterTablesData["users_group_memberships"][0]["masterKeys"] = array();
	$masterTablesData["users_group_memberships"][0]["masterKeys"][]="user_id";
				$masterTablesData["users_group_memberships"][0]["detailKeys"] = array();
	$masterTablesData["users_group_memberships"][0]["detailKeys"][]="user_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_users_group_memberships()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `user_id`,  `dept_group_id`,  `start_date`,  `end_date`,  `created_at`,  `created_by`,  `updated_at`,  `updated_by`";
$proto0["m_strFrom"] = "FROM `users_group_memberships`";
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
	"m_strTable" => "users_group_memberships",
	"m_srcTableName" => "users_group_memberships"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "users_group_memberships";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id",
	"m_strTable" => "users_group_memberships",
	"m_srcTableName" => "users_group_memberships"
));

$proto8["m_sql"] = "`user_id`";
$proto8["m_srcTableName"] = "users_group_memberships";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dept_group_id",
	"m_strTable" => "users_group_memberships",
	"m_srcTableName" => "users_group_memberships"
));

$proto10["m_sql"] = "`dept_group_id`";
$proto10["m_srcTableName"] = "users_group_memberships";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "users_group_memberships",
	"m_srcTableName" => "users_group_memberships"
));

$proto12["m_sql"] = "`start_date`";
$proto12["m_srcTableName"] = "users_group_memberships";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "users_group_memberships",
	"m_srcTableName" => "users_group_memberships"
));

$proto14["m_sql"] = "`end_date`";
$proto14["m_srcTableName"] = "users_group_memberships";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "users_group_memberships",
	"m_srcTableName" => "users_group_memberships"
));

$proto16["m_sql"] = "`created_at`";
$proto16["m_srcTableName"] = "users_group_memberships";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "users_group_memberships",
	"m_srcTableName" => "users_group_memberships"
));

$proto18["m_sql"] = "`created_by`";
$proto18["m_srcTableName"] = "users_group_memberships";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "users_group_memberships",
	"m_srcTableName" => "users_group_memberships"
));

$proto20["m_sql"] = "`updated_at`";
$proto20["m_srcTableName"] = "users_group_memberships";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "users_group_memberships",
	"m_srcTableName" => "users_group_memberships"
));

$proto22["m_sql"] = "`updated_by`";
$proto22["m_srcTableName"] = "users_group_memberships";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "users_group_memberships";
$proto25["m_srcTableName"] = "users_group_memberships";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "user_id";
$proto25["m_columns"][] = "dept_group_id";
$proto25["m_columns"][] = "start_date";
$proto25["m_columns"][] = "end_date";
$proto25["m_columns"][] = "created_at";
$proto25["m_columns"][] = "created_by";
$proto25["m_columns"][] = "updated_at";
$proto25["m_columns"][] = "updated_by";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`users_group_memberships`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "users_group_memberships";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "users_group_memberships",
	"m_srcTableName" => "users_group_memberships"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 0;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="users_group_memberships";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_users_group_memberships = createSqlQuery_users_group_memberships();


	
		;

									

$tdatausers_group_memberships[".sqlquery"] = $queryData_users_group_memberships;

include_once(getabspath("include/users_group_memberships_events.php"));
$tableEvents["users_group_memberships"] = new eventclass_users_group_memberships;
$tdatausers_group_memberships[".hasEvents"] = true;

?>