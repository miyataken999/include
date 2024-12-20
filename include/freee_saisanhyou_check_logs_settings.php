<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_saisanhyou_check_logs = array();
	$tdatafreee_saisanhyou_check_logs[".truncateText"] = true;
	$tdatafreee_saisanhyou_check_logs[".NumberOfChars"] = 80;
	$tdatafreee_saisanhyou_check_logs[".ShortName"] = "freee_saisanhyou_check_logs";
	$tdatafreee_saisanhyou_check_logs[".OwnerID"] = "";
	$tdatafreee_saisanhyou_check_logs[".OriginalTable"] = "freee_saisanhyou_check_logs";

//	field labels
$fieldLabelsfreee_saisanhyou_check_logs = array();
$fieldToolTipsfreee_saisanhyou_check_logs = array();
$pageTitlesfreee_saisanhyou_check_logs = array();
$placeHoldersfreee_saisanhyou_check_logs = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_saisanhyou_check_logs["Japanese"] = array();
	$fieldToolTipsfreee_saisanhyou_check_logs["Japanese"] = array();
	$placeHoldersfreee_saisanhyou_check_logs["Japanese"] = array();
	$pageTitlesfreee_saisanhyou_check_logs["Japanese"] = array();
	$fieldLabelsfreee_saisanhyou_check_logs["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_saisanhyou_check_logs["Japanese"]["id"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["Japanese"]["id"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs["Japanese"]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsfreee_saisanhyou_check_logs["Japanese"]["dept_group_id"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["Japanese"]["dept_group_id"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs["Japanese"]["freee_saisanhyou_id"] = "Freee Saisanhyou Id";
	$fieldToolTipsfreee_saisanhyou_check_logs["Japanese"]["freee_saisanhyou_id"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["Japanese"]["freee_saisanhyou_id"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs["Japanese"]["approved_by"] = "Approved By";
	$fieldToolTipsfreee_saisanhyou_check_logs["Japanese"]["approved_by"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["Japanese"]["approved_by"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs["Japanese"]["approved_at"] = "Approved At";
	$fieldToolTipsfreee_saisanhyou_check_logs["Japanese"]["approved_at"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["Japanese"]["approved_at"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsfreee_saisanhyou_check_logs["Japanese"]["created_by"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_saisanhyou_check_logs["Japanese"]["created_at"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_saisanhyou_check_logs["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["Japanese"]["updated_by"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_saisanhyou_check_logs["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["Japanese"]["updated_at"] = "";
	if (count($fieldToolTipsfreee_saisanhyou_check_logs["Japanese"]))
		$tdatafreee_saisanhyou_check_logs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_saisanhyou_check_logs[""] = array();
	$fieldToolTipsfreee_saisanhyou_check_logs[""] = array();
	$placeHoldersfreee_saisanhyou_check_logs[""] = array();
	$pageTitlesfreee_saisanhyou_check_logs[""] = array();
	$fieldLabelsfreee_saisanhyou_check_logs[""]["id"] = "Id";
	$fieldToolTipsfreee_saisanhyou_check_logs[""]["id"] = "";
	$placeHoldersfreee_saisanhyou_check_logs[""]["id"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs[""]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsfreee_saisanhyou_check_logs[""]["dept_group_id"] = "";
	$placeHoldersfreee_saisanhyou_check_logs[""]["dept_group_id"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs[""]["freee_saisanhyou_id"] = "Freee Saisanhyou Id";
	$fieldToolTipsfreee_saisanhyou_check_logs[""]["freee_saisanhyou_id"] = "";
	$placeHoldersfreee_saisanhyou_check_logs[""]["freee_saisanhyou_id"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs[""]["approved_by"] = "Approved By";
	$fieldToolTipsfreee_saisanhyou_check_logs[""]["approved_by"] = "";
	$placeHoldersfreee_saisanhyou_check_logs[""]["approved_by"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs[""]["approved_at"] = "Approved At";
	$fieldToolTipsfreee_saisanhyou_check_logs[""]["approved_at"] = "";
	$placeHoldersfreee_saisanhyou_check_logs[""]["approved_at"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_saisanhyou_check_logs[""]["created_by"] = "";
	$placeHoldersfreee_saisanhyou_check_logs[""]["created_by"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_saisanhyou_check_logs[""]["created_at"] = "";
	$placeHoldersfreee_saisanhyou_check_logs[""]["created_at"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_saisanhyou_check_logs[""]["updated_by"] = "";
	$placeHoldersfreee_saisanhyou_check_logs[""]["updated_by"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_saisanhyou_check_logs[""]["updated_at"] = "";
	$placeHoldersfreee_saisanhyou_check_logs[""]["updated_at"] = "";
	if (count($fieldToolTipsfreee_saisanhyou_check_logs[""]))
		$tdatafreee_saisanhyou_check_logs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_saisanhyou_check_logs["English"] = array();
	$fieldToolTipsfreee_saisanhyou_check_logs["English"] = array();
	$placeHoldersfreee_saisanhyou_check_logs["English"] = array();
	$pageTitlesfreee_saisanhyou_check_logs["English"] = array();
	$fieldLabelsfreee_saisanhyou_check_logs["English"]["id"] = "Id";
	$fieldToolTipsfreee_saisanhyou_check_logs["English"]["id"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["English"]["id"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs["English"]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsfreee_saisanhyou_check_logs["English"]["dept_group_id"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["English"]["dept_group_id"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs["English"]["freee_saisanhyou_id"] = "Freee Saisanhyou Id";
	$fieldToolTipsfreee_saisanhyou_check_logs["English"]["freee_saisanhyou_id"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["English"]["freee_saisanhyou_id"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs["English"]["approved_by"] = "Approved By";
	$fieldToolTipsfreee_saisanhyou_check_logs["English"]["approved_by"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["English"]["approved_by"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs["English"]["approved_at"] = "Approved At";
	$fieldToolTipsfreee_saisanhyou_check_logs["English"]["approved_at"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["English"]["approved_at"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_saisanhyou_check_logs["English"]["created_by"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["English"]["created_by"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_saisanhyou_check_logs["English"]["created_at"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["English"]["created_at"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_saisanhyou_check_logs["English"]["updated_by"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["English"]["updated_by"] = "";
	$fieldLabelsfreee_saisanhyou_check_logs["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_saisanhyou_check_logs["English"]["updated_at"] = "";
	$placeHoldersfreee_saisanhyou_check_logs["English"]["updated_at"] = "";
	if (count($fieldToolTipsfreee_saisanhyou_check_logs["English"]))
		$tdatafreee_saisanhyou_check_logs[".isUseToolTips"] = true;
}


	$tdatafreee_saisanhyou_check_logs[".NCSearch"] = true;



$tdatafreee_saisanhyou_check_logs[".shortTableName"] = "freee_saisanhyou_check_logs";
$tdatafreee_saisanhyou_check_logs[".nSecOptions"] = 0;
$tdatafreee_saisanhyou_check_logs[".recsPerRowPrint"] = 1;
$tdatafreee_saisanhyou_check_logs[".mainTableOwnerID"] = "";
$tdatafreee_saisanhyou_check_logs[".moveNext"] = 1;
$tdatafreee_saisanhyou_check_logs[".entityType"] = 0;

$tdatafreee_saisanhyou_check_logs[".strOriginalTableName"] = "freee_saisanhyou_check_logs";

	



$tdatafreee_saisanhyou_check_logs[".showAddInPopup"] = false;

$tdatafreee_saisanhyou_check_logs[".showEditInPopup"] = false;

$tdatafreee_saisanhyou_check_logs[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_saisanhyou_check_logs[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_saisanhyou_check_logs[".fieldsForRegister"] = array();

$tdatafreee_saisanhyou_check_logs[".listAjax"] = false;

	$tdatafreee_saisanhyou_check_logs[".audit"] = false;

	$tdatafreee_saisanhyou_check_logs[".locking"] = false;

$tdatafreee_saisanhyou_check_logs[".edit"] = true;
$tdatafreee_saisanhyou_check_logs[".afterEditAction"] = 1;
$tdatafreee_saisanhyou_check_logs[".closePopupAfterEdit"] = 1;
$tdatafreee_saisanhyou_check_logs[".afterEditActionDetTable"] = "";


$tdatafreee_saisanhyou_check_logs[".list"] = true;

$tdatafreee_saisanhyou_check_logs[".inlineEdit"] = true;


$tdatafreee_saisanhyou_check_logs[".reorderRecordsByHeader"] = true;



$tdatafreee_saisanhyou_check_logs[".inlineAdd"] = true;

$tdatafreee_saisanhyou_check_logs[".import"] = true;

$tdatafreee_saisanhyou_check_logs[".exportTo"] = true;


$tdatafreee_saisanhyou_check_logs[".delete"] = true;

$tdatafreee_saisanhyou_check_logs[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_saisanhyou_check_logs[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_saisanhyou_check_logs[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_saisanhyou_check_logs[".searchSaving"] = false;
//

$tdatafreee_saisanhyou_check_logs[".showSearchPanel"] = true;
		$tdatafreee_saisanhyou_check_logs[".flexibleSearch"] = true;

$tdatafreee_saisanhyou_check_logs[".isUseAjaxSuggest"] = true;

$tdatafreee_saisanhyou_check_logs[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_saisanhyou_check_logs[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_saisanhyou_check_logs[".buttonsAdded"] = false;

$tdatafreee_saisanhyou_check_logs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_saisanhyou_check_logs[".isUseTimeForSearch"] = false;





$tdatafreee_saisanhyou_check_logs[".allSearchFields"] = array();
$tdatafreee_saisanhyou_check_logs[".filterFields"] = array();
$tdatafreee_saisanhyou_check_logs[".requiredSearchFields"] = array();

$tdatafreee_saisanhyou_check_logs[".allSearchFields"][] = "id";
	$tdatafreee_saisanhyou_check_logs[".allSearchFields"][] = "dept_group_id";
	$tdatafreee_saisanhyou_check_logs[".allSearchFields"][] = "freee_saisanhyou_id";
	$tdatafreee_saisanhyou_check_logs[".allSearchFields"][] = "approved_by";
	$tdatafreee_saisanhyou_check_logs[".allSearchFields"][] = "approved_at";
	$tdatafreee_saisanhyou_check_logs[".allSearchFields"][] = "created_by";
	$tdatafreee_saisanhyou_check_logs[".allSearchFields"][] = "created_at";
	$tdatafreee_saisanhyou_check_logs[".allSearchFields"][] = "updated_by";
	$tdatafreee_saisanhyou_check_logs[".allSearchFields"][] = "updated_at";
	

$tdatafreee_saisanhyou_check_logs[".googleLikeFields"] = array();
$tdatafreee_saisanhyou_check_logs[".googleLikeFields"][] = "id";
$tdatafreee_saisanhyou_check_logs[".googleLikeFields"][] = "dept_group_id";
$tdatafreee_saisanhyou_check_logs[".googleLikeFields"][] = "freee_saisanhyou_id";
$tdatafreee_saisanhyou_check_logs[".googleLikeFields"][] = "approved_by";
$tdatafreee_saisanhyou_check_logs[".googleLikeFields"][] = "approved_at";
$tdatafreee_saisanhyou_check_logs[".googleLikeFields"][] = "created_by";
$tdatafreee_saisanhyou_check_logs[".googleLikeFields"][] = "created_at";
$tdatafreee_saisanhyou_check_logs[".googleLikeFields"][] = "updated_by";
$tdatafreee_saisanhyou_check_logs[".googleLikeFields"][] = "updated_at";


$tdatafreee_saisanhyou_check_logs[".advSearchFields"] = array();
$tdatafreee_saisanhyou_check_logs[".advSearchFields"][] = "id";
$tdatafreee_saisanhyou_check_logs[".advSearchFields"][] = "dept_group_id";
$tdatafreee_saisanhyou_check_logs[".advSearchFields"][] = "freee_saisanhyou_id";
$tdatafreee_saisanhyou_check_logs[".advSearchFields"][] = "approved_by";
$tdatafreee_saisanhyou_check_logs[".advSearchFields"][] = "approved_at";
$tdatafreee_saisanhyou_check_logs[".advSearchFields"][] = "created_by";
$tdatafreee_saisanhyou_check_logs[".advSearchFields"][] = "created_at";
$tdatafreee_saisanhyou_check_logs[".advSearchFields"][] = "updated_by";
$tdatafreee_saisanhyou_check_logs[".advSearchFields"][] = "updated_at";

$tdatafreee_saisanhyou_check_logs[".tableType"] = "list";

$tdatafreee_saisanhyou_check_logs[".printerPageOrientation"] = 0;
$tdatafreee_saisanhyou_check_logs[".nPrinterPageScale"] = 100;

$tdatafreee_saisanhyou_check_logs[".nPrinterSplitRecords"] = 40;

$tdatafreee_saisanhyou_check_logs[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_saisanhyou_check_logs[".geocodingEnabled"] = false;





$tdatafreee_saisanhyou_check_logs[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_saisanhyou_check_logs[".pageSize"] = 20;

$tdatafreee_saisanhyou_check_logs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_saisanhyou_check_logs[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_saisanhyou_check_logs[".orderindexes"] = array();

$tdatafreee_saisanhyou_check_logs[".sqlHead"] = "SELECT `id`,  	`dept_group_id`,  	`freee_saisanhyou_id`,  	`approved_by`,  	`approved_at`,  	`created_by`,  	`created_at`,  	`updated_by`,  	`updated_at`";
$tdatafreee_saisanhyou_check_logs[".sqlFrom"] = "FROM `freee_saisanhyou_check_logs`";
$tdatafreee_saisanhyou_check_logs[".sqlWhereExpr"] = "";
$tdatafreee_saisanhyou_check_logs[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_saisanhyou_check_logs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_saisanhyou_check_logs[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_saisanhyou_check_logs[".highlightSearchResults"] = true;

$tableKeysfreee_saisanhyou_check_logs = array();
$tableKeysfreee_saisanhyou_check_logs[] = "id";
$tdatafreee_saisanhyou_check_logs[".Keys"] = $tableKeysfreee_saisanhyou_check_logs;

$tdatafreee_saisanhyou_check_logs[".listFields"] = array();
$tdatafreee_saisanhyou_check_logs[".listFields"][] = "id";
$tdatafreee_saisanhyou_check_logs[".listFields"][] = "dept_group_id";
$tdatafreee_saisanhyou_check_logs[".listFields"][] = "freee_saisanhyou_id";
$tdatafreee_saisanhyou_check_logs[".listFields"][] = "approved_by";
$tdatafreee_saisanhyou_check_logs[".listFields"][] = "approved_at";
$tdatafreee_saisanhyou_check_logs[".listFields"][] = "created_by";
$tdatafreee_saisanhyou_check_logs[".listFields"][] = "created_at";
$tdatafreee_saisanhyou_check_logs[".listFields"][] = "updated_by";
$tdatafreee_saisanhyou_check_logs[".listFields"][] = "updated_at";

$tdatafreee_saisanhyou_check_logs[".hideMobileList"] = array();


$tdatafreee_saisanhyou_check_logs[".viewFields"] = array();

$tdatafreee_saisanhyou_check_logs[".addFields"] = array();

$tdatafreee_saisanhyou_check_logs[".masterListFields"] = array();
$tdatafreee_saisanhyou_check_logs[".masterListFields"][] = "id";
$tdatafreee_saisanhyou_check_logs[".masterListFields"][] = "dept_group_id";
$tdatafreee_saisanhyou_check_logs[".masterListFields"][] = "freee_saisanhyou_id";
$tdatafreee_saisanhyou_check_logs[".masterListFields"][] = "approved_by";
$tdatafreee_saisanhyou_check_logs[".masterListFields"][] = "approved_at";
$tdatafreee_saisanhyou_check_logs[".masterListFields"][] = "created_by";
$tdatafreee_saisanhyou_check_logs[".masterListFields"][] = "created_at";
$tdatafreee_saisanhyou_check_logs[".masterListFields"][] = "updated_by";
$tdatafreee_saisanhyou_check_logs[".masterListFields"][] = "updated_at";

$tdatafreee_saisanhyou_check_logs[".inlineAddFields"] = array();
$tdatafreee_saisanhyou_check_logs[".inlineAddFields"][] = "dept_group_id";
$tdatafreee_saisanhyou_check_logs[".inlineAddFields"][] = "freee_saisanhyou_id";
$tdatafreee_saisanhyou_check_logs[".inlineAddFields"][] = "approved_by";
$tdatafreee_saisanhyou_check_logs[".inlineAddFields"][] = "approved_at";

$tdatafreee_saisanhyou_check_logs[".editFields"] = array();
$tdatafreee_saisanhyou_check_logs[".editFields"][] = "dept_group_id";
$tdatafreee_saisanhyou_check_logs[".editFields"][] = "freee_saisanhyou_id";
$tdatafreee_saisanhyou_check_logs[".editFields"][] = "approved_by";
$tdatafreee_saisanhyou_check_logs[".editFields"][] = "approved_at";
$tdatafreee_saisanhyou_check_logs[".editFields"][] = "created_by";
$tdatafreee_saisanhyou_check_logs[".editFields"][] = "created_at";
$tdatafreee_saisanhyou_check_logs[".editFields"][] = "updated_by";
$tdatafreee_saisanhyou_check_logs[".editFields"][] = "updated_at";

$tdatafreee_saisanhyou_check_logs[".inlineEditFields"] = array();
$tdatafreee_saisanhyou_check_logs[".inlineEditFields"][] = "dept_group_id";
$tdatafreee_saisanhyou_check_logs[".inlineEditFields"][] = "freee_saisanhyou_id";
$tdatafreee_saisanhyou_check_logs[".inlineEditFields"][] = "approved_by";
$tdatafreee_saisanhyou_check_logs[".inlineEditFields"][] = "approved_at";

$tdatafreee_saisanhyou_check_logs[".updateSelectedFields"] = array();
$tdatafreee_saisanhyou_check_logs[".updateSelectedFields"][] = "dept_group_id";
$tdatafreee_saisanhyou_check_logs[".updateSelectedFields"][] = "freee_saisanhyou_id";
$tdatafreee_saisanhyou_check_logs[".updateSelectedFields"][] = "approved_by";
$tdatafreee_saisanhyou_check_logs[".updateSelectedFields"][] = "approved_at";
$tdatafreee_saisanhyou_check_logs[".updateSelectedFields"][] = "created_by";
$tdatafreee_saisanhyou_check_logs[".updateSelectedFields"][] = "created_at";
$tdatafreee_saisanhyou_check_logs[".updateSelectedFields"][] = "updated_by";
$tdatafreee_saisanhyou_check_logs[".updateSelectedFields"][] = "updated_at";


$tdatafreee_saisanhyou_check_logs[".exportFields"] = array();
$tdatafreee_saisanhyou_check_logs[".exportFields"][] = "id";
$tdatafreee_saisanhyou_check_logs[".exportFields"][] = "dept_group_id";
$tdatafreee_saisanhyou_check_logs[".exportFields"][] = "freee_saisanhyou_id";
$tdatafreee_saisanhyou_check_logs[".exportFields"][] = "approved_by";
$tdatafreee_saisanhyou_check_logs[".exportFields"][] = "approved_at";
$tdatafreee_saisanhyou_check_logs[".exportFields"][] = "created_by";
$tdatafreee_saisanhyou_check_logs[".exportFields"][] = "created_at";
$tdatafreee_saisanhyou_check_logs[".exportFields"][] = "updated_by";
$tdatafreee_saisanhyou_check_logs[".exportFields"][] = "updated_at";

$tdatafreee_saisanhyou_check_logs[".importFields"] = array();
$tdatafreee_saisanhyou_check_logs[".importFields"][] = "id";
$tdatafreee_saisanhyou_check_logs[".importFields"][] = "dept_group_id";
$tdatafreee_saisanhyou_check_logs[".importFields"][] = "freee_saisanhyou_id";
$tdatafreee_saisanhyou_check_logs[".importFields"][] = "approved_by";
$tdatafreee_saisanhyou_check_logs[".importFields"][] = "approved_at";
$tdatafreee_saisanhyou_check_logs[".importFields"][] = "created_by";
$tdatafreee_saisanhyou_check_logs[".importFields"][] = "created_at";
$tdatafreee_saisanhyou_check_logs[".importFields"][] = "updated_by";
$tdatafreee_saisanhyou_check_logs[".importFields"][] = "updated_at";

$tdatafreee_saisanhyou_check_logs[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_saisanhyou_check_logs";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou_check_logs","id");
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




	$tdatafreee_saisanhyou_check_logs["id"] = $fdata;
//	dept_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dept_group_id";
	$fdata["GoodName"] = "dept_group_id";
	$fdata["ownerTable"] = "freee_saisanhyou_check_logs";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou_check_logs","dept_group_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatafreee_saisanhyou_check_logs["dept_group_id"] = $fdata;
//	freee_saisanhyou_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "freee_saisanhyou_id";
	$fdata["GoodName"] = "freee_saisanhyou_id";
	$fdata["ownerTable"] = "freee_saisanhyou_check_logs";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou_check_logs","freee_saisanhyou_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_saisanhyou_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_saisanhyou_id`";

	
	
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




	$tdatafreee_saisanhyou_check_logs["freee_saisanhyou_id"] = $fdata;
//	approved_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "approved_by";
	$fdata["GoodName"] = "approved_by";
	$fdata["ownerTable"] = "freee_saisanhyou_check_logs";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou_check_logs","approved_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "approved_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`approved_by`";

	
	
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




	$tdatafreee_saisanhyou_check_logs["approved_by"] = $fdata;
//	approved_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "approved_at";
	$fdata["GoodName"] = "approved_at";
	$fdata["ownerTable"] = "freee_saisanhyou_check_logs";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou_check_logs","approved_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "approved_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`approved_at`";

	
	
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




	$tdatafreee_saisanhyou_check_logs["approved_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_saisanhyou_check_logs";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou_check_logs","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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




	$tdatafreee_saisanhyou_check_logs["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_saisanhyou_check_logs";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou_check_logs","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_at`";

	
	
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




	$tdatafreee_saisanhyou_check_logs["created_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_saisanhyou_check_logs";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou_check_logs","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
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




	$tdatafreee_saisanhyou_check_logs["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_saisanhyou_check_logs";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou_check_logs","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_at`";

	
	
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




	$tdatafreee_saisanhyou_check_logs["updated_at"] = $fdata;


$tables_data["freee_saisanhyou_check_logs"]=&$tdatafreee_saisanhyou_check_logs;
$field_labels["freee_saisanhyou_check_logs"] = &$fieldLabelsfreee_saisanhyou_check_logs;
$fieldToolTips["freee_saisanhyou_check_logs"] = &$fieldToolTipsfreee_saisanhyou_check_logs;
$placeHolders["freee_saisanhyou_check_logs"] = &$placeHoldersfreee_saisanhyou_check_logs;
$page_titles["freee_saisanhyou_check_logs"] = &$pageTitlesfreee_saisanhyou_check_logs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_saisanhyou_check_logs"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_saisanhyou_check_logs"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_saisanhyou_check_logs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`dept_group_id`,  	`freee_saisanhyou_id`,  	`approved_by`,  	`approved_at`,  	`created_by`,  	`created_at`,  	`updated_by`,  	`updated_at`";
$proto0["m_strFrom"] = "FROM `freee_saisanhyou_check_logs`";
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
	"m_strTable" => "freee_saisanhyou_check_logs",
	"m_srcTableName" => "freee_saisanhyou_check_logs"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_saisanhyou_check_logs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dept_group_id",
	"m_strTable" => "freee_saisanhyou_check_logs",
	"m_srcTableName" => "freee_saisanhyou_check_logs"
));

$proto8["m_sql"] = "`dept_group_id`";
$proto8["m_srcTableName"] = "freee_saisanhyou_check_logs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_saisanhyou_id",
	"m_strTable" => "freee_saisanhyou_check_logs",
	"m_srcTableName" => "freee_saisanhyou_check_logs"
));

$proto10["m_sql"] = "`freee_saisanhyou_id`";
$proto10["m_srcTableName"] = "freee_saisanhyou_check_logs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "approved_by",
	"m_strTable" => "freee_saisanhyou_check_logs",
	"m_srcTableName" => "freee_saisanhyou_check_logs"
));

$proto12["m_sql"] = "`approved_by`";
$proto12["m_srcTableName"] = "freee_saisanhyou_check_logs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "approved_at",
	"m_strTable" => "freee_saisanhyou_check_logs",
	"m_srcTableName" => "freee_saisanhyou_check_logs"
));

$proto14["m_sql"] = "`approved_at`";
$proto14["m_srcTableName"] = "freee_saisanhyou_check_logs";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_saisanhyou_check_logs",
	"m_srcTableName" => "freee_saisanhyou_check_logs"
));

$proto16["m_sql"] = "`created_by`";
$proto16["m_srcTableName"] = "freee_saisanhyou_check_logs";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_saisanhyou_check_logs",
	"m_srcTableName" => "freee_saisanhyou_check_logs"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "freee_saisanhyou_check_logs";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_saisanhyou_check_logs",
	"m_srcTableName" => "freee_saisanhyou_check_logs"
));

$proto20["m_sql"] = "`updated_by`";
$proto20["m_srcTableName"] = "freee_saisanhyou_check_logs";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_saisanhyou_check_logs",
	"m_srcTableName" => "freee_saisanhyou_check_logs"
));

$proto22["m_sql"] = "`updated_at`";
$proto22["m_srcTableName"] = "freee_saisanhyou_check_logs";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "freee_saisanhyou_check_logs";
$proto25["m_srcTableName"] = "freee_saisanhyou_check_logs";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "dept_group_id";
$proto25["m_columns"][] = "freee_saisanhyou_id";
$proto25["m_columns"][] = "approved_by";
$proto25["m_columns"][] = "approved_at";
$proto25["m_columns"][] = "created_by";
$proto25["m_columns"][] = "created_at";
$proto25["m_columns"][] = "updated_by";
$proto25["m_columns"][] = "updated_at";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "`freee_saisanhyou_check_logs`";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "freee_saisanhyou_check_logs";
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
$proto0["m_srcTableName"]="freee_saisanhyou_check_logs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_saisanhyou_check_logs = createSqlQuery_freee_saisanhyou_check_logs();


	
		;

									

$tdatafreee_saisanhyou_check_logs[".sqlquery"] = $queryData_freee_saisanhyou_check_logs;

$tableEvents["freee_saisanhyou_check_logs"] = new eventsBase;
$tdatafreee_saisanhyou_check_logs[".hasEvents"] = false;

?>