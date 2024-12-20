<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_PLBS_by_day_details = array();
	$tdatafreee_PLBS_by_day_details[".truncateText"] = true;
	$tdatafreee_PLBS_by_day_details[".NumberOfChars"] = 80;
	$tdatafreee_PLBS_by_day_details[".ShortName"] = "freee_PLBS_by_day_details";
	$tdatafreee_PLBS_by_day_details[".OwnerID"] = "";
	$tdatafreee_PLBS_by_day_details[".OriginalTable"] = "freee_PLBS_by_day_details";

//	field labels
$fieldLabelsfreee_PLBS_by_day_details = array();
$fieldToolTipsfreee_PLBS_by_day_details = array();
$pageTitlesfreee_PLBS_by_day_details = array();
$placeHoldersfreee_PLBS_by_day_details = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_PLBS_by_day_details["Japanese"] = array();
	$fieldToolTipsfreee_PLBS_by_day_details["Japanese"] = array();
	$placeHoldersfreee_PLBS_by_day_details["Japanese"] = array();
	$pageTitlesfreee_PLBS_by_day_details["Japanese"] = array();
	$fieldLabelsfreee_PLBS_by_day_details["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_PLBS_by_day_details["Japanese"]["id"] = "";
	$placeHoldersfreee_PLBS_by_day_details["Japanese"]["id"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["Japanese"]["freee_plbs_id"] = "Freee Plbs Id";
	$fieldToolTipsfreee_PLBS_by_day_details["Japanese"]["freee_plbs_id"] = "";
	$placeHoldersfreee_PLBS_by_day_details["Japanese"]["freee_plbs_id"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["Japanese"]["account_item_name"] = "Account Item Name";
	$fieldToolTipsfreee_PLBS_by_day_details["Japanese"]["account_item_name"] = "";
	$placeHoldersfreee_PLBS_by_day_details["Japanese"]["account_item_name"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["Japanese"]["account_category_name"] = "Account Category Name";
	$fieldToolTipsfreee_PLBS_by_day_details["Japanese"]["account_category_name"] = "";
	$placeHoldersfreee_PLBS_by_day_details["Japanese"]["account_category_name"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["Japanese"]["hierarchy_level"] = "Hierarchy Level";
	$fieldToolTipsfreee_PLBS_by_day_details["Japanese"]["hierarchy_level"] = "";
	$placeHoldersfreee_PLBS_by_day_details["Japanese"]["hierarchy_level"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["Japanese"]["closing_balance"] = "Closing Balance";
	$fieldToolTipsfreee_PLBS_by_day_details["Japanese"]["closing_balance"] = "";
	$placeHoldersfreee_PLBS_by_day_details["Japanese"]["closing_balance"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["Japanese"]["parent_account_category_name"] = "Parent Account Category Name";
	$fieldToolTipsfreee_PLBS_by_day_details["Japanese"]["parent_account_category_name"] = "";
	$placeHoldersfreee_PLBS_by_day_details["Japanese"]["parent_account_category_name"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_PLBS_by_day_details["Japanese"]["created_at"] = "";
	$placeHoldersfreee_PLBS_by_day_details["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_PLBS_by_day_details["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_PLBS_by_day_details["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["Japanese"]["opening_balance"] = "Opening Balance";
	$fieldToolTipsfreee_PLBS_by_day_details["Japanese"]["opening_balance"] = "";
	$placeHoldersfreee_PLBS_by_day_details["Japanese"]["opening_balance"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["Japanese"]["debit_amount"] = "Debit Amount";
	$fieldToolTipsfreee_PLBS_by_day_details["Japanese"]["debit_amount"] = "";
	$placeHoldersfreee_PLBS_by_day_details["Japanese"]["debit_amount"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["Japanese"]["credit_amount"] = "Credit Amount";
	$fieldToolTipsfreee_PLBS_by_day_details["Japanese"]["credit_amount"] = "";
	$placeHoldersfreee_PLBS_by_day_details["Japanese"]["credit_amount"] = "";
	if (count($fieldToolTipsfreee_PLBS_by_day_details["Japanese"]))
		$tdatafreee_PLBS_by_day_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_PLBS_by_day_details[""] = array();
	$fieldToolTipsfreee_PLBS_by_day_details[""] = array();
	$placeHoldersfreee_PLBS_by_day_details[""] = array();
	$pageTitlesfreee_PLBS_by_day_details[""] = array();
	$fieldLabelsfreee_PLBS_by_day_details[""]["id"] = "Id";
	$fieldToolTipsfreee_PLBS_by_day_details[""]["id"] = "";
	$placeHoldersfreee_PLBS_by_day_details[""]["id"] = "";
	$fieldLabelsfreee_PLBS_by_day_details[""]["freee_plbs_id"] = "Freee Plbs Id";
	$fieldToolTipsfreee_PLBS_by_day_details[""]["freee_plbs_id"] = "";
	$placeHoldersfreee_PLBS_by_day_details[""]["freee_plbs_id"] = "";
	$fieldLabelsfreee_PLBS_by_day_details[""]["account_item_name"] = "Account Item Name";
	$fieldToolTipsfreee_PLBS_by_day_details[""]["account_item_name"] = "";
	$placeHoldersfreee_PLBS_by_day_details[""]["account_item_name"] = "";
	$fieldLabelsfreee_PLBS_by_day_details[""]["account_category_name"] = "Account Category Name";
	$fieldToolTipsfreee_PLBS_by_day_details[""]["account_category_name"] = "";
	$placeHoldersfreee_PLBS_by_day_details[""]["account_category_name"] = "";
	$fieldLabelsfreee_PLBS_by_day_details[""]["hierarchy_level"] = "Hierarchy Level";
	$fieldToolTipsfreee_PLBS_by_day_details[""]["hierarchy_level"] = "";
	$placeHoldersfreee_PLBS_by_day_details[""]["hierarchy_level"] = "";
	$fieldLabelsfreee_PLBS_by_day_details[""]["closing_balance"] = "Closing Balance";
	$fieldToolTipsfreee_PLBS_by_day_details[""]["closing_balance"] = "";
	$placeHoldersfreee_PLBS_by_day_details[""]["closing_balance"] = "";
	$fieldLabelsfreee_PLBS_by_day_details[""]["parent_account_category_name"] = "Parent Account Category Name";
	$fieldToolTipsfreee_PLBS_by_day_details[""]["parent_account_category_name"] = "";
	$placeHoldersfreee_PLBS_by_day_details[""]["parent_account_category_name"] = "";
	$fieldLabelsfreee_PLBS_by_day_details[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_PLBS_by_day_details[""]["created_at"] = "";
	$placeHoldersfreee_PLBS_by_day_details[""]["created_at"] = "";
	$fieldLabelsfreee_PLBS_by_day_details[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_PLBS_by_day_details[""]["updated_at"] = "";
	$placeHoldersfreee_PLBS_by_day_details[""]["updated_at"] = "";
	$fieldLabelsfreee_PLBS_by_day_details[""]["opening_balance"] = "Opening Balance";
	$fieldToolTipsfreee_PLBS_by_day_details[""]["opening_balance"] = "";
	$placeHoldersfreee_PLBS_by_day_details[""]["opening_balance"] = "";
	$fieldLabelsfreee_PLBS_by_day_details[""]["debit_amount"] = "Debit Amount";
	$fieldToolTipsfreee_PLBS_by_day_details[""]["debit_amount"] = "";
	$placeHoldersfreee_PLBS_by_day_details[""]["debit_amount"] = "";
	$fieldLabelsfreee_PLBS_by_day_details[""]["credit_amount"] = "Credit Amount";
	$fieldToolTipsfreee_PLBS_by_day_details[""]["credit_amount"] = "";
	$placeHoldersfreee_PLBS_by_day_details[""]["credit_amount"] = "";
	if (count($fieldToolTipsfreee_PLBS_by_day_details[""]))
		$tdatafreee_PLBS_by_day_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_PLBS_by_day_details["English"] = array();
	$fieldToolTipsfreee_PLBS_by_day_details["English"] = array();
	$placeHoldersfreee_PLBS_by_day_details["English"] = array();
	$pageTitlesfreee_PLBS_by_day_details["English"] = array();
	$fieldLabelsfreee_PLBS_by_day_details["English"]["id"] = "Id";
	$fieldToolTipsfreee_PLBS_by_day_details["English"]["id"] = "";
	$placeHoldersfreee_PLBS_by_day_details["English"]["id"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["English"]["freee_plbs_id"] = "Freee Plbs Id";
	$fieldToolTipsfreee_PLBS_by_day_details["English"]["freee_plbs_id"] = "";
	$placeHoldersfreee_PLBS_by_day_details["English"]["freee_plbs_id"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["English"]["account_item_name"] = "Account Item Name";
	$fieldToolTipsfreee_PLBS_by_day_details["English"]["account_item_name"] = "";
	$placeHoldersfreee_PLBS_by_day_details["English"]["account_item_name"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["English"]["account_category_name"] = "Account Category Name";
	$fieldToolTipsfreee_PLBS_by_day_details["English"]["account_category_name"] = "";
	$placeHoldersfreee_PLBS_by_day_details["English"]["account_category_name"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["English"]["hierarchy_level"] = "Hierarchy Level";
	$fieldToolTipsfreee_PLBS_by_day_details["English"]["hierarchy_level"] = "";
	$placeHoldersfreee_PLBS_by_day_details["English"]["hierarchy_level"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["English"]["closing_balance"] = "Closing Balance";
	$fieldToolTipsfreee_PLBS_by_day_details["English"]["closing_balance"] = "";
	$placeHoldersfreee_PLBS_by_day_details["English"]["closing_balance"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["English"]["parent_account_category_name"] = "Parent Account Category Name";
	$fieldToolTipsfreee_PLBS_by_day_details["English"]["parent_account_category_name"] = "";
	$placeHoldersfreee_PLBS_by_day_details["English"]["parent_account_category_name"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_PLBS_by_day_details["English"]["created_at"] = "";
	$placeHoldersfreee_PLBS_by_day_details["English"]["created_at"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_PLBS_by_day_details["English"]["updated_at"] = "";
	$placeHoldersfreee_PLBS_by_day_details["English"]["updated_at"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["English"]["opening_balance"] = "Opening Balance";
	$fieldToolTipsfreee_PLBS_by_day_details["English"]["opening_balance"] = "";
	$placeHoldersfreee_PLBS_by_day_details["English"]["opening_balance"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["English"]["debit_amount"] = "Debit Amount";
	$fieldToolTipsfreee_PLBS_by_day_details["English"]["debit_amount"] = "";
	$placeHoldersfreee_PLBS_by_day_details["English"]["debit_amount"] = "";
	$fieldLabelsfreee_PLBS_by_day_details["English"]["credit_amount"] = "Credit Amount";
	$fieldToolTipsfreee_PLBS_by_day_details["English"]["credit_amount"] = "";
	$placeHoldersfreee_PLBS_by_day_details["English"]["credit_amount"] = "";
	if (count($fieldToolTipsfreee_PLBS_by_day_details["English"]))
		$tdatafreee_PLBS_by_day_details[".isUseToolTips"] = true;
}


	$tdatafreee_PLBS_by_day_details[".NCSearch"] = true;



$tdatafreee_PLBS_by_day_details[".shortTableName"] = "freee_PLBS_by_day_details";
$tdatafreee_PLBS_by_day_details[".nSecOptions"] = 0;
$tdatafreee_PLBS_by_day_details[".recsPerRowPrint"] = 1;
$tdatafreee_PLBS_by_day_details[".mainTableOwnerID"] = "";
$tdatafreee_PLBS_by_day_details[".moveNext"] = 1;
$tdatafreee_PLBS_by_day_details[".entityType"] = 0;

$tdatafreee_PLBS_by_day_details[".strOriginalTableName"] = "freee_PLBS_by_day_details";

	



$tdatafreee_PLBS_by_day_details[".showAddInPopup"] = false;

$tdatafreee_PLBS_by_day_details[".showEditInPopup"] = false;

$tdatafreee_PLBS_by_day_details[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_PLBS_by_day_details[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_PLBS_by_day_details[".fieldsForRegister"] = array();

$tdatafreee_PLBS_by_day_details[".listAjax"] = false;

	$tdatafreee_PLBS_by_day_details[".audit"] = false;

	$tdatafreee_PLBS_by_day_details[".locking"] = false;



$tdatafreee_PLBS_by_day_details[".list"] = true;



$tdatafreee_PLBS_by_day_details[".reorderRecordsByHeader"] = true;





$tdatafreee_PLBS_by_day_details[".exportTo"] = true;



$tdatafreee_PLBS_by_day_details[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_PLBS_by_day_details[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_PLBS_by_day_details[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_PLBS_by_day_details[".searchSaving"] = false;
//

$tdatafreee_PLBS_by_day_details[".showSearchPanel"] = true;
		$tdatafreee_PLBS_by_day_details[".flexibleSearch"] = true;

$tdatafreee_PLBS_by_day_details[".isUseAjaxSuggest"] = true;

$tdatafreee_PLBS_by_day_details[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatafreee_PLBS_by_day_details[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_PLBS_by_day_details[".buttonsAdded"] = false;

$tdatafreee_PLBS_by_day_details[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_PLBS_by_day_details[".isUseTimeForSearch"] = false;



$tdatafreee_PLBS_by_day_details[".badgeColor"] = "b22222";


$tdatafreee_PLBS_by_day_details[".allSearchFields"] = array();
$tdatafreee_PLBS_by_day_details[".filterFields"] = array();
$tdatafreee_PLBS_by_day_details[".requiredSearchFields"] = array();

$tdatafreee_PLBS_by_day_details[".allSearchFields"][] = "id";
	$tdatafreee_PLBS_by_day_details[".allSearchFields"][] = "freee_plbs_id";
	$tdatafreee_PLBS_by_day_details[".allSearchFields"][] = "account_item_name";
	$tdatafreee_PLBS_by_day_details[".allSearchFields"][] = "account_category_name";
	$tdatafreee_PLBS_by_day_details[".allSearchFields"][] = "hierarchy_level";
	$tdatafreee_PLBS_by_day_details[".allSearchFields"][] = "closing_balance";
	$tdatafreee_PLBS_by_day_details[".allSearchFields"][] = "parent_account_category_name";
	$tdatafreee_PLBS_by_day_details[".allSearchFields"][] = "created_at";
	$tdatafreee_PLBS_by_day_details[".allSearchFields"][] = "updated_at";
	$tdatafreee_PLBS_by_day_details[".allSearchFields"][] = "opening_balance";
	$tdatafreee_PLBS_by_day_details[".allSearchFields"][] = "debit_amount";
	$tdatafreee_PLBS_by_day_details[".allSearchFields"][] = "credit_amount";
	

$tdatafreee_PLBS_by_day_details[".googleLikeFields"] = array();
$tdatafreee_PLBS_by_day_details[".googleLikeFields"][] = "id";
$tdatafreee_PLBS_by_day_details[".googleLikeFields"][] = "freee_plbs_id";
$tdatafreee_PLBS_by_day_details[".googleLikeFields"][] = "account_item_name";
$tdatafreee_PLBS_by_day_details[".googleLikeFields"][] = "account_category_name";
$tdatafreee_PLBS_by_day_details[".googleLikeFields"][] = "hierarchy_level";
$tdatafreee_PLBS_by_day_details[".googleLikeFields"][] = "closing_balance";
$tdatafreee_PLBS_by_day_details[".googleLikeFields"][] = "parent_account_category_name";
$tdatafreee_PLBS_by_day_details[".googleLikeFields"][] = "created_at";
$tdatafreee_PLBS_by_day_details[".googleLikeFields"][] = "updated_at";
$tdatafreee_PLBS_by_day_details[".googleLikeFields"][] = "opening_balance";
$tdatafreee_PLBS_by_day_details[".googleLikeFields"][] = "debit_amount";
$tdatafreee_PLBS_by_day_details[".googleLikeFields"][] = "credit_amount";


$tdatafreee_PLBS_by_day_details[".advSearchFields"] = array();
$tdatafreee_PLBS_by_day_details[".advSearchFields"][] = "id";
$tdatafreee_PLBS_by_day_details[".advSearchFields"][] = "freee_plbs_id";
$tdatafreee_PLBS_by_day_details[".advSearchFields"][] = "account_item_name";
$tdatafreee_PLBS_by_day_details[".advSearchFields"][] = "account_category_name";
$tdatafreee_PLBS_by_day_details[".advSearchFields"][] = "hierarchy_level";
$tdatafreee_PLBS_by_day_details[".advSearchFields"][] = "closing_balance";
$tdatafreee_PLBS_by_day_details[".advSearchFields"][] = "parent_account_category_name";
$tdatafreee_PLBS_by_day_details[".advSearchFields"][] = "created_at";
$tdatafreee_PLBS_by_day_details[".advSearchFields"][] = "updated_at";
$tdatafreee_PLBS_by_day_details[".advSearchFields"][] = "opening_balance";
$tdatafreee_PLBS_by_day_details[".advSearchFields"][] = "debit_amount";
$tdatafreee_PLBS_by_day_details[".advSearchFields"][] = "credit_amount";

$tdatafreee_PLBS_by_day_details[".tableType"] = "list";

$tdatafreee_PLBS_by_day_details[".printerPageOrientation"] = 0;
$tdatafreee_PLBS_by_day_details[".nPrinterPageScale"] = 100;

$tdatafreee_PLBS_by_day_details[".nPrinterSplitRecords"] = 40;

$tdatafreee_PLBS_by_day_details[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_PLBS_by_day_details[".geocodingEnabled"] = false;





$tdatafreee_PLBS_by_day_details[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_PLBS_by_day_details[".pageSize"] = 100;

$tdatafreee_PLBS_by_day_details[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_PLBS_by_day_details[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_PLBS_by_day_details[".orderindexes"] = array();

$tdatafreee_PLBS_by_day_details[".sqlHead"] = "SELECT `id`,  	`freee_plbs_id`,  	`account_item_name`,  	`account_category_name`,  	`hierarchy_level`,  	`closing_balance`,  	`parent_account_category_name`,  	`created_at`,  	`updated_at`,  	`opening_balance`,  	`debit_amount`,  	`credit_amount`";
$tdatafreee_PLBS_by_day_details[".sqlFrom"] = "FROM `freee_PLBS_by_day_details`";
$tdatafreee_PLBS_by_day_details[".sqlWhereExpr"] = "";
$tdatafreee_PLBS_by_day_details[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_PLBS_by_day_details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_PLBS_by_day_details[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_PLBS_by_day_details[".highlightSearchResults"] = true;

$tableKeysfreee_PLBS_by_day_details = array();
$tableKeysfreee_PLBS_by_day_details[] = "id";
$tdatafreee_PLBS_by_day_details[".Keys"] = $tableKeysfreee_PLBS_by_day_details;

$tdatafreee_PLBS_by_day_details[".listFields"] = array();
$tdatafreee_PLBS_by_day_details[".listFields"][] = "id";
$tdatafreee_PLBS_by_day_details[".listFields"][] = "freee_plbs_id";
$tdatafreee_PLBS_by_day_details[".listFields"][] = "account_item_name";
$tdatafreee_PLBS_by_day_details[".listFields"][] = "account_category_name";
$tdatafreee_PLBS_by_day_details[".listFields"][] = "hierarchy_level";
$tdatafreee_PLBS_by_day_details[".listFields"][] = "closing_balance";
$tdatafreee_PLBS_by_day_details[".listFields"][] = "parent_account_category_name";
$tdatafreee_PLBS_by_day_details[".listFields"][] = "created_at";
$tdatafreee_PLBS_by_day_details[".listFields"][] = "updated_at";
$tdatafreee_PLBS_by_day_details[".listFields"][] = "opening_balance";
$tdatafreee_PLBS_by_day_details[".listFields"][] = "debit_amount";
$tdatafreee_PLBS_by_day_details[".listFields"][] = "credit_amount";

$tdatafreee_PLBS_by_day_details[".hideMobileList"] = array();


$tdatafreee_PLBS_by_day_details[".viewFields"] = array();
$tdatafreee_PLBS_by_day_details[".viewFields"][] = "id";
$tdatafreee_PLBS_by_day_details[".viewFields"][] = "freee_plbs_id";
$tdatafreee_PLBS_by_day_details[".viewFields"][] = "account_item_name";
$tdatafreee_PLBS_by_day_details[".viewFields"][] = "account_category_name";
$tdatafreee_PLBS_by_day_details[".viewFields"][] = "hierarchy_level";
$tdatafreee_PLBS_by_day_details[".viewFields"][] = "closing_balance";
$tdatafreee_PLBS_by_day_details[".viewFields"][] = "parent_account_category_name";
$tdatafreee_PLBS_by_day_details[".viewFields"][] = "created_at";
$tdatafreee_PLBS_by_day_details[".viewFields"][] = "updated_at";
$tdatafreee_PLBS_by_day_details[".viewFields"][] = "opening_balance";
$tdatafreee_PLBS_by_day_details[".viewFields"][] = "debit_amount";
$tdatafreee_PLBS_by_day_details[".viewFields"][] = "credit_amount";

$tdatafreee_PLBS_by_day_details[".addFields"] = array();
$tdatafreee_PLBS_by_day_details[".addFields"][] = "freee_plbs_id";
$tdatafreee_PLBS_by_day_details[".addFields"][] = "account_item_name";
$tdatafreee_PLBS_by_day_details[".addFields"][] = "account_category_name";
$tdatafreee_PLBS_by_day_details[".addFields"][] = "hierarchy_level";
$tdatafreee_PLBS_by_day_details[".addFields"][] = "closing_balance";
$tdatafreee_PLBS_by_day_details[".addFields"][] = "parent_account_category_name";
$tdatafreee_PLBS_by_day_details[".addFields"][] = "created_at";
$tdatafreee_PLBS_by_day_details[".addFields"][] = "updated_at";
$tdatafreee_PLBS_by_day_details[".addFields"][] = "opening_balance";
$tdatafreee_PLBS_by_day_details[".addFields"][] = "debit_amount";
$tdatafreee_PLBS_by_day_details[".addFields"][] = "credit_amount";

$tdatafreee_PLBS_by_day_details[".masterListFields"] = array();
$tdatafreee_PLBS_by_day_details[".masterListFields"][] = "id";
$tdatafreee_PLBS_by_day_details[".masterListFields"][] = "freee_plbs_id";
$tdatafreee_PLBS_by_day_details[".masterListFields"][] = "account_item_name";
$tdatafreee_PLBS_by_day_details[".masterListFields"][] = "account_category_name";
$tdatafreee_PLBS_by_day_details[".masterListFields"][] = "hierarchy_level";
$tdatafreee_PLBS_by_day_details[".masterListFields"][] = "closing_balance";
$tdatafreee_PLBS_by_day_details[".masterListFields"][] = "parent_account_category_name";
$tdatafreee_PLBS_by_day_details[".masterListFields"][] = "created_at";
$tdatafreee_PLBS_by_day_details[".masterListFields"][] = "updated_at";
$tdatafreee_PLBS_by_day_details[".masterListFields"][] = "opening_balance";
$tdatafreee_PLBS_by_day_details[".masterListFields"][] = "debit_amount";
$tdatafreee_PLBS_by_day_details[".masterListFields"][] = "credit_amount";

$tdatafreee_PLBS_by_day_details[".inlineAddFields"] = array();
$tdatafreee_PLBS_by_day_details[".inlineAddFields"][] = "freee_plbs_id";
$tdatafreee_PLBS_by_day_details[".inlineAddFields"][] = "account_item_name";
$tdatafreee_PLBS_by_day_details[".inlineAddFields"][] = "account_category_name";
$tdatafreee_PLBS_by_day_details[".inlineAddFields"][] = "hierarchy_level";
$tdatafreee_PLBS_by_day_details[".inlineAddFields"][] = "closing_balance";
$tdatafreee_PLBS_by_day_details[".inlineAddFields"][] = "parent_account_category_name";
$tdatafreee_PLBS_by_day_details[".inlineAddFields"][] = "created_at";
$tdatafreee_PLBS_by_day_details[".inlineAddFields"][] = "updated_at";
$tdatafreee_PLBS_by_day_details[".inlineAddFields"][] = "opening_balance";
$tdatafreee_PLBS_by_day_details[".inlineAddFields"][] = "debit_amount";
$tdatafreee_PLBS_by_day_details[".inlineAddFields"][] = "credit_amount";

$tdatafreee_PLBS_by_day_details[".editFields"] = array();
$tdatafreee_PLBS_by_day_details[".editFields"][] = "freee_plbs_id";
$tdatafreee_PLBS_by_day_details[".editFields"][] = "account_item_name";
$tdatafreee_PLBS_by_day_details[".editFields"][] = "account_category_name";
$tdatafreee_PLBS_by_day_details[".editFields"][] = "hierarchy_level";
$tdatafreee_PLBS_by_day_details[".editFields"][] = "closing_balance";
$tdatafreee_PLBS_by_day_details[".editFields"][] = "parent_account_category_name";
$tdatafreee_PLBS_by_day_details[".editFields"][] = "created_at";
$tdatafreee_PLBS_by_day_details[".editFields"][] = "updated_at";
$tdatafreee_PLBS_by_day_details[".editFields"][] = "opening_balance";
$tdatafreee_PLBS_by_day_details[".editFields"][] = "debit_amount";
$tdatafreee_PLBS_by_day_details[".editFields"][] = "credit_amount";

$tdatafreee_PLBS_by_day_details[".inlineEditFields"] = array();
$tdatafreee_PLBS_by_day_details[".inlineEditFields"][] = "freee_plbs_id";
$tdatafreee_PLBS_by_day_details[".inlineEditFields"][] = "account_item_name";
$tdatafreee_PLBS_by_day_details[".inlineEditFields"][] = "account_category_name";
$tdatafreee_PLBS_by_day_details[".inlineEditFields"][] = "hierarchy_level";
$tdatafreee_PLBS_by_day_details[".inlineEditFields"][] = "closing_balance";
$tdatafreee_PLBS_by_day_details[".inlineEditFields"][] = "parent_account_category_name";
$tdatafreee_PLBS_by_day_details[".inlineEditFields"][] = "created_at";
$tdatafreee_PLBS_by_day_details[".inlineEditFields"][] = "updated_at";
$tdatafreee_PLBS_by_day_details[".inlineEditFields"][] = "opening_balance";
$tdatafreee_PLBS_by_day_details[".inlineEditFields"][] = "debit_amount";
$tdatafreee_PLBS_by_day_details[".inlineEditFields"][] = "credit_amount";

$tdatafreee_PLBS_by_day_details[".updateSelectedFields"] = array();
$tdatafreee_PLBS_by_day_details[".updateSelectedFields"][] = "freee_plbs_id";
$tdatafreee_PLBS_by_day_details[".updateSelectedFields"][] = "account_item_name";
$tdatafreee_PLBS_by_day_details[".updateSelectedFields"][] = "account_category_name";
$tdatafreee_PLBS_by_day_details[".updateSelectedFields"][] = "hierarchy_level";
$tdatafreee_PLBS_by_day_details[".updateSelectedFields"][] = "closing_balance";
$tdatafreee_PLBS_by_day_details[".updateSelectedFields"][] = "parent_account_category_name";
$tdatafreee_PLBS_by_day_details[".updateSelectedFields"][] = "created_at";
$tdatafreee_PLBS_by_day_details[".updateSelectedFields"][] = "updated_at";
$tdatafreee_PLBS_by_day_details[".updateSelectedFields"][] = "opening_balance";
$tdatafreee_PLBS_by_day_details[".updateSelectedFields"][] = "debit_amount";
$tdatafreee_PLBS_by_day_details[".updateSelectedFields"][] = "credit_amount";


$tdatafreee_PLBS_by_day_details[".exportFields"] = array();
$tdatafreee_PLBS_by_day_details[".exportFields"][] = "id";
$tdatafreee_PLBS_by_day_details[".exportFields"][] = "freee_plbs_id";
$tdatafreee_PLBS_by_day_details[".exportFields"][] = "account_item_name";
$tdatafreee_PLBS_by_day_details[".exportFields"][] = "account_category_name";
$tdatafreee_PLBS_by_day_details[".exportFields"][] = "hierarchy_level";
$tdatafreee_PLBS_by_day_details[".exportFields"][] = "closing_balance";
$tdatafreee_PLBS_by_day_details[".exportFields"][] = "parent_account_category_name";
$tdatafreee_PLBS_by_day_details[".exportFields"][] = "created_at";
$tdatafreee_PLBS_by_day_details[".exportFields"][] = "updated_at";
$tdatafreee_PLBS_by_day_details[".exportFields"][] = "opening_balance";
$tdatafreee_PLBS_by_day_details[".exportFields"][] = "debit_amount";
$tdatafreee_PLBS_by_day_details[".exportFields"][] = "credit_amount";

$tdatafreee_PLBS_by_day_details[".importFields"] = array();
$tdatafreee_PLBS_by_day_details[".importFields"][] = "id";
$tdatafreee_PLBS_by_day_details[".importFields"][] = "freee_plbs_id";
$tdatafreee_PLBS_by_day_details[".importFields"][] = "account_item_name";
$tdatafreee_PLBS_by_day_details[".importFields"][] = "account_category_name";
$tdatafreee_PLBS_by_day_details[".importFields"][] = "hierarchy_level";
$tdatafreee_PLBS_by_day_details[".importFields"][] = "closing_balance";
$tdatafreee_PLBS_by_day_details[".importFields"][] = "parent_account_category_name";
$tdatafreee_PLBS_by_day_details[".importFields"][] = "created_at";
$tdatafreee_PLBS_by_day_details[".importFields"][] = "updated_at";
$tdatafreee_PLBS_by_day_details[".importFields"][] = "opening_balance";
$tdatafreee_PLBS_by_day_details[".importFields"][] = "debit_amount";
$tdatafreee_PLBS_by_day_details[".importFields"][] = "credit_amount";

$tdatafreee_PLBS_by_day_details[".printFields"] = array();
$tdatafreee_PLBS_by_day_details[".printFields"][] = "id";
$tdatafreee_PLBS_by_day_details[".printFields"][] = "freee_plbs_id";
$tdatafreee_PLBS_by_day_details[".printFields"][] = "account_item_name";
$tdatafreee_PLBS_by_day_details[".printFields"][] = "account_category_name";
$tdatafreee_PLBS_by_day_details[".printFields"][] = "hierarchy_level";
$tdatafreee_PLBS_by_day_details[".printFields"][] = "closing_balance";
$tdatafreee_PLBS_by_day_details[".printFields"][] = "parent_account_category_name";
$tdatafreee_PLBS_by_day_details[".printFields"][] = "created_at";
$tdatafreee_PLBS_by_day_details[".printFields"][] = "updated_at";
$tdatafreee_PLBS_by_day_details[".printFields"][] = "opening_balance";
$tdatafreee_PLBS_by_day_details[".printFields"][] = "debit_amount";
$tdatafreee_PLBS_by_day_details[".printFields"][] = "credit_amount";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_PLBS_by_day_details";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_day_details","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatafreee_PLBS_by_day_details["id"] = $fdata;
//	freee_plbs_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "freee_plbs_id";
	$fdata["GoodName"] = "freee_plbs_id";
	$fdata["ownerTable"] = "freee_PLBS_by_day_details";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_day_details","freee_plbs_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_plbs_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_plbs_id`";

	
	
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




	$tdatafreee_PLBS_by_day_details["freee_plbs_id"] = $fdata;
//	account_item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "account_item_name";
	$fdata["GoodName"] = "account_item_name";
	$fdata["ownerTable"] = "freee_PLBS_by_day_details";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_day_details","account_item_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "account_item_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`account_item_name`";

	
	
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




	$tdatafreee_PLBS_by_day_details["account_item_name"] = $fdata;
//	account_category_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "account_category_name";
	$fdata["GoodName"] = "account_category_name";
	$fdata["ownerTable"] = "freee_PLBS_by_day_details";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_day_details","account_category_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "account_category_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`account_category_name`";

	
	
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




	$tdatafreee_PLBS_by_day_details["account_category_name"] = $fdata;
//	hierarchy_level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "hierarchy_level";
	$fdata["GoodName"] = "hierarchy_level";
	$fdata["ownerTable"] = "freee_PLBS_by_day_details";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_day_details","hierarchy_level");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hierarchy_level";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`hierarchy_level`";

	
	
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




	$tdatafreee_PLBS_by_day_details["hierarchy_level"] = $fdata;
//	closing_balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "closing_balance";
	$fdata["GoodName"] = "closing_balance";
	$fdata["ownerTable"] = "freee_PLBS_by_day_details";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_day_details","closing_balance");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "closing_balance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`closing_balance`";

	
	
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




	$tdatafreee_PLBS_by_day_details["closing_balance"] = $fdata;
//	parent_account_category_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "parent_account_category_name";
	$fdata["GoodName"] = "parent_account_category_name";
	$fdata["ownerTable"] = "freee_PLBS_by_day_details";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_day_details","parent_account_category_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "parent_account_category_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`parent_account_category_name`";

	
	
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




	$tdatafreee_PLBS_by_day_details["parent_account_category_name"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_PLBS_by_day_details";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_day_details","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatafreee_PLBS_by_day_details["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_PLBS_by_day_details";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_day_details","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatafreee_PLBS_by_day_details["updated_at"] = $fdata;
//	opening_balance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "opening_balance";
	$fdata["GoodName"] = "opening_balance";
	$fdata["ownerTable"] = "freee_PLBS_by_day_details";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_day_details","opening_balance");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "opening_balance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`opening_balance`";

	
	
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




	$tdatafreee_PLBS_by_day_details["opening_balance"] = $fdata;
//	debit_amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "debit_amount";
	$fdata["GoodName"] = "debit_amount";
	$fdata["ownerTable"] = "freee_PLBS_by_day_details";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_day_details","debit_amount");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "debit_amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`debit_amount`";

	
	
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




	$tdatafreee_PLBS_by_day_details["debit_amount"] = $fdata;
//	credit_amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "credit_amount";
	$fdata["GoodName"] = "credit_amount";
	$fdata["ownerTable"] = "freee_PLBS_by_day_details";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_day_details","credit_amount");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "credit_amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`credit_amount`";

	
	
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




	$tdatafreee_PLBS_by_day_details["credit_amount"] = $fdata;


$tables_data["freee_PLBS_by_day_details"]=&$tdatafreee_PLBS_by_day_details;
$field_labels["freee_PLBS_by_day_details"] = &$fieldLabelsfreee_PLBS_by_day_details;
$fieldToolTips["freee_PLBS_by_day_details"] = &$fieldToolTipsfreee_PLBS_by_day_details;
$placeHolders["freee_PLBS_by_day_details"] = &$placeHoldersfreee_PLBS_by_day_details;
$page_titles["freee_PLBS_by_day_details"] = &$pageTitlesfreee_PLBS_by_day_details;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_PLBS_by_day_details"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_PLBS_by_day_details"] = array();


	
				$strOriginalDetailsTable="freee_PLBS_by_day";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="freee_PLBS_by_day";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "freee_PLBS_by_day";
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
					$masterTablesData["freee_PLBS_by_day_details"][0] = $masterParams;
				$masterTablesData["freee_PLBS_by_day_details"][0]["masterKeys"] = array();
	$masterTablesData["freee_PLBS_by_day_details"][0]["masterKeys"][]="id";
				$masterTablesData["freee_PLBS_by_day_details"][0]["detailKeys"] = array();
	$masterTablesData["freee_PLBS_by_day_details"][0]["detailKeys"][]="freee_plbs_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_PLBS_by_day_details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`freee_plbs_id`,  	`account_item_name`,  	`account_category_name`,  	`hierarchy_level`,  	`closing_balance`,  	`parent_account_category_name`,  	`created_at`,  	`updated_at`,  	`opening_balance`,  	`debit_amount`,  	`credit_amount`";
$proto0["m_strFrom"] = "FROM `freee_PLBS_by_day_details`";
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
	"m_strTable" => "freee_PLBS_by_day_details",
	"m_srcTableName" => "freee_PLBS_by_day_details"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_PLBS_by_day_details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_plbs_id",
	"m_strTable" => "freee_PLBS_by_day_details",
	"m_srcTableName" => "freee_PLBS_by_day_details"
));

$proto8["m_sql"] = "`freee_plbs_id`";
$proto8["m_srcTableName"] = "freee_PLBS_by_day_details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "account_item_name",
	"m_strTable" => "freee_PLBS_by_day_details",
	"m_srcTableName" => "freee_PLBS_by_day_details"
));

$proto10["m_sql"] = "`account_item_name`";
$proto10["m_srcTableName"] = "freee_PLBS_by_day_details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "account_category_name",
	"m_strTable" => "freee_PLBS_by_day_details",
	"m_srcTableName" => "freee_PLBS_by_day_details"
));

$proto12["m_sql"] = "`account_category_name`";
$proto12["m_srcTableName"] = "freee_PLBS_by_day_details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "hierarchy_level",
	"m_strTable" => "freee_PLBS_by_day_details",
	"m_srcTableName" => "freee_PLBS_by_day_details"
));

$proto14["m_sql"] = "`hierarchy_level`";
$proto14["m_srcTableName"] = "freee_PLBS_by_day_details";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "closing_balance",
	"m_strTable" => "freee_PLBS_by_day_details",
	"m_srcTableName" => "freee_PLBS_by_day_details"
));

$proto16["m_sql"] = "`closing_balance`";
$proto16["m_srcTableName"] = "freee_PLBS_by_day_details";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "parent_account_category_name",
	"m_strTable" => "freee_PLBS_by_day_details",
	"m_srcTableName" => "freee_PLBS_by_day_details"
));

$proto18["m_sql"] = "`parent_account_category_name`";
$proto18["m_srcTableName"] = "freee_PLBS_by_day_details";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_PLBS_by_day_details",
	"m_srcTableName" => "freee_PLBS_by_day_details"
));

$proto20["m_sql"] = "`created_at`";
$proto20["m_srcTableName"] = "freee_PLBS_by_day_details";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_PLBS_by_day_details",
	"m_srcTableName" => "freee_PLBS_by_day_details"
));

$proto22["m_sql"] = "`updated_at`";
$proto22["m_srcTableName"] = "freee_PLBS_by_day_details";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "opening_balance",
	"m_strTable" => "freee_PLBS_by_day_details",
	"m_srcTableName" => "freee_PLBS_by_day_details"
));

$proto24["m_sql"] = "`opening_balance`";
$proto24["m_srcTableName"] = "freee_PLBS_by_day_details";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "debit_amount",
	"m_strTable" => "freee_PLBS_by_day_details",
	"m_srcTableName" => "freee_PLBS_by_day_details"
));

$proto26["m_sql"] = "`debit_amount`";
$proto26["m_srcTableName"] = "freee_PLBS_by_day_details";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "credit_amount",
	"m_strTable" => "freee_PLBS_by_day_details",
	"m_srcTableName" => "freee_PLBS_by_day_details"
));

$proto28["m_sql"] = "`credit_amount`";
$proto28["m_srcTableName"] = "freee_PLBS_by_day_details";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "freee_PLBS_by_day_details";
$proto31["m_srcTableName"] = "freee_PLBS_by_day_details";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "freee_plbs_id";
$proto31["m_columns"][] = "account_item_name";
$proto31["m_columns"][] = "account_category_name";
$proto31["m_columns"][] = "hierarchy_level";
$proto31["m_columns"][] = "closing_balance";
$proto31["m_columns"][] = "parent_account_category_name";
$proto31["m_columns"][] = "created_at";
$proto31["m_columns"][] = "updated_at";
$proto31["m_columns"][] = "opening_balance";
$proto31["m_columns"][] = "debit_amount";
$proto31["m_columns"][] = "credit_amount";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "`freee_PLBS_by_day_details`";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "freee_PLBS_by_day_details";
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
$proto0["m_srcTableName"]="freee_PLBS_by_day_details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_PLBS_by_day_details = createSqlQuery_freee_PLBS_by_day_details();


	
		;

												

$tdatafreee_PLBS_by_day_details[".sqlquery"] = $queryData_freee_PLBS_by_day_details;

$tableEvents["freee_PLBS_by_day_details"] = new eventsBase;
$tdatafreee_PLBS_by_day_details[".hasEvents"] = false;

?>