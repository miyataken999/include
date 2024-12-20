<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee__account_items = array();
	$tdatafreee__account_items[".truncateText"] = true;
	$tdatafreee__account_items[".NumberOfChars"] = 80;
	$tdatafreee__account_items[".ShortName"] = "freee__account_items";
	$tdatafreee__account_items[".OwnerID"] = "";
	$tdatafreee__account_items[".OriginalTable"] = "freee_ account_items";

//	field labels
$fieldLabelsfreee__account_items = array();
$fieldToolTipsfreee__account_items = array();
$pageTitlesfreee__account_items = array();
$placeHoldersfreee__account_items = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee__account_items["Japanese"] = array();
	$fieldToolTipsfreee__account_items["Japanese"] = array();
	$placeHoldersfreee__account_items["Japanese"] = array();
	$pageTitlesfreee__account_items["Japanese"] = array();
	$fieldLabelsfreee__account_items["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee__account_items["Japanese"]["id"] = "";
	$placeHoldersfreee__account_items["Japanese"]["id"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["company_id"] = "Company Id";
	$fieldToolTipsfreee__account_items["Japanese"]["company_id"] = "";
	$placeHoldersfreee__account_items["Japanese"]["company_id"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["name"] = "Name";
	$fieldToolTipsfreee__account_items["Japanese"]["name"] = "";
	$placeHoldersfreee__account_items["Japanese"]["name"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["update_date"] = "Update Date";
	$fieldToolTipsfreee__account_items["Japanese"]["update_date"] = "";
	$placeHoldersfreee__account_items["Japanese"]["update_date"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee__account_items["Japanese"]["shortcut1"] = "";
	$placeHoldersfreee__account_items["Japanese"]["shortcut1"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee__account_items["Japanese"]["shortcut2"] = "";
	$placeHoldersfreee__account_items["Japanese"]["shortcut2"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee__account_items["Japanese"]["created_at"] = "";
	$placeHoldersfreee__account_items["Japanese"]["created_at"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsfreee__account_items["Japanese"]["created_by"] = "";
	$placeHoldersfreee__account_items["Japanese"]["created_by"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee__account_items["Japanese"]["updated_at"] = "";
	$placeHoldersfreee__account_items["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee__account_items["Japanese"]["updated_by"] = "";
	$placeHoldersfreee__account_items["Japanese"]["updated_by"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["tax_code"] = "Tax Code";
	$fieldToolTipsfreee__account_items["Japanese"]["tax_code"] = "";
	$placeHoldersfreee__account_items["Japanese"]["tax_code"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["default_tax_id"] = "Default Tax Id";
	$fieldToolTipsfreee__account_items["Japanese"]["default_tax_id"] = "";
	$placeHoldersfreee__account_items["Japanese"]["default_tax_id"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["default_tax_code"] = "Default Tax Code";
	$fieldToolTipsfreee__account_items["Japanese"]["default_tax_code"] = "";
	$placeHoldersfreee__account_items["Japanese"]["default_tax_code"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["account_category"] = "Account Category";
	$fieldToolTipsfreee__account_items["Japanese"]["account_category"] = "";
	$placeHoldersfreee__account_items["Japanese"]["account_category"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["account_category_id"] = "Account Category Id";
	$fieldToolTipsfreee__account_items["Japanese"]["account_category_id"] = "";
	$placeHoldersfreee__account_items["Japanese"]["account_category_id"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["categories"] = "Categories";
	$fieldToolTipsfreee__account_items["Japanese"]["categories"] = "";
	$placeHoldersfreee__account_items["Japanese"]["categories"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["available"] = "Available";
	$fieldToolTipsfreee__account_items["Japanese"]["available"] = "";
	$placeHoldersfreee__account_items["Japanese"]["available"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["walletable_id"] = "Walletable Id";
	$fieldToolTipsfreee__account_items["Japanese"]["walletable_id"] = "";
	$placeHoldersfreee__account_items["Japanese"]["walletable_id"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["group_name"] = "Group Name";
	$fieldToolTipsfreee__account_items["Japanese"]["group_name"] = "";
	$placeHoldersfreee__account_items["Japanese"]["group_name"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["corresponding_income_name"] = "Corresponding Income Name";
	$fieldToolTipsfreee__account_items["Japanese"]["corresponding_income_name"] = "";
	$placeHoldersfreee__account_items["Japanese"]["corresponding_income_name"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["corresponding_income_id"] = "Corresponding Income Id";
	$fieldToolTipsfreee__account_items["Japanese"]["corresponding_income_id"] = "";
	$placeHoldersfreee__account_items["Japanese"]["corresponding_income_id"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["corresponding_expense_name"] = "Corresponding Expense Name";
	$fieldToolTipsfreee__account_items["Japanese"]["corresponding_expense_name"] = "";
	$placeHoldersfreee__account_items["Japanese"]["corresponding_expense_name"] = "";
	$fieldLabelsfreee__account_items["Japanese"]["corresponding_expense_id"] = "Corresponding Expense Id";
	$fieldToolTipsfreee__account_items["Japanese"]["corresponding_expense_id"] = "";
	$placeHoldersfreee__account_items["Japanese"]["corresponding_expense_id"] = "";
	if (count($fieldToolTipsfreee__account_items["Japanese"]))
		$tdatafreee__account_items[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee__account_items[""] = array();
	$fieldToolTipsfreee__account_items[""] = array();
	$placeHoldersfreee__account_items[""] = array();
	$pageTitlesfreee__account_items[""] = array();
	$fieldLabelsfreee__account_items[""]["id"] = "Id";
	$fieldToolTipsfreee__account_items[""]["id"] = "";
	$placeHoldersfreee__account_items[""]["id"] = "";
	$fieldLabelsfreee__account_items[""]["company_id"] = "Company Id";
	$fieldToolTipsfreee__account_items[""]["company_id"] = "";
	$placeHoldersfreee__account_items[""]["company_id"] = "";
	$fieldLabelsfreee__account_items[""]["name"] = "Name";
	$fieldToolTipsfreee__account_items[""]["name"] = "";
	$placeHoldersfreee__account_items[""]["name"] = "";
	$fieldLabelsfreee__account_items[""]["update_date"] = "Update Date";
	$fieldToolTipsfreee__account_items[""]["update_date"] = "";
	$placeHoldersfreee__account_items[""]["update_date"] = "";
	$fieldLabelsfreee__account_items[""]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee__account_items[""]["shortcut1"] = "";
	$placeHoldersfreee__account_items[""]["shortcut1"] = "";
	$fieldLabelsfreee__account_items[""]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee__account_items[""]["shortcut2"] = "";
	$placeHoldersfreee__account_items[""]["shortcut2"] = "";
	$fieldLabelsfreee__account_items[""]["created_at"] = "Created At";
	$fieldToolTipsfreee__account_items[""]["created_at"] = "";
	$placeHoldersfreee__account_items[""]["created_at"] = "";
	$fieldLabelsfreee__account_items[""]["created_by"] = "Created By";
	$fieldToolTipsfreee__account_items[""]["created_by"] = "";
	$placeHoldersfreee__account_items[""]["created_by"] = "";
	$fieldLabelsfreee__account_items[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee__account_items[""]["updated_at"] = "";
	$placeHoldersfreee__account_items[""]["updated_at"] = "";
	$fieldLabelsfreee__account_items[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee__account_items[""]["updated_by"] = "";
	$placeHoldersfreee__account_items[""]["updated_by"] = "";
	$fieldLabelsfreee__account_items[""]["tax_code"] = "Tax Code";
	$fieldToolTipsfreee__account_items[""]["tax_code"] = "";
	$placeHoldersfreee__account_items[""]["tax_code"] = "";
	$fieldLabelsfreee__account_items[""]["default_tax_id"] = "Default Tax Id";
	$fieldToolTipsfreee__account_items[""]["default_tax_id"] = "";
	$placeHoldersfreee__account_items[""]["default_tax_id"] = "";
	$fieldLabelsfreee__account_items[""]["default_tax_code"] = "Default Tax Code";
	$fieldToolTipsfreee__account_items[""]["default_tax_code"] = "";
	$placeHoldersfreee__account_items[""]["default_tax_code"] = "";
	$fieldLabelsfreee__account_items[""]["account_category"] = "Account Category";
	$fieldToolTipsfreee__account_items[""]["account_category"] = "";
	$placeHoldersfreee__account_items[""]["account_category"] = "";
	$fieldLabelsfreee__account_items[""]["account_category_id"] = "Account Category Id";
	$fieldToolTipsfreee__account_items[""]["account_category_id"] = "";
	$placeHoldersfreee__account_items[""]["account_category_id"] = "";
	$fieldLabelsfreee__account_items[""]["categories"] = "Categories";
	$fieldToolTipsfreee__account_items[""]["categories"] = "";
	$placeHoldersfreee__account_items[""]["categories"] = "";
	$fieldLabelsfreee__account_items[""]["available"] = "Available";
	$fieldToolTipsfreee__account_items[""]["available"] = "";
	$placeHoldersfreee__account_items[""]["available"] = "";
	$fieldLabelsfreee__account_items[""]["walletable_id"] = "Walletable Id";
	$fieldToolTipsfreee__account_items[""]["walletable_id"] = "";
	$placeHoldersfreee__account_items[""]["walletable_id"] = "";
	$fieldLabelsfreee__account_items[""]["group_name"] = "Group Name";
	$fieldToolTipsfreee__account_items[""]["group_name"] = "";
	$placeHoldersfreee__account_items[""]["group_name"] = "";
	$fieldLabelsfreee__account_items[""]["corresponding_income_name"] = "Corresponding Income Name";
	$fieldToolTipsfreee__account_items[""]["corresponding_income_name"] = "";
	$placeHoldersfreee__account_items[""]["corresponding_income_name"] = "";
	$fieldLabelsfreee__account_items[""]["corresponding_income_id"] = "Corresponding Income Id";
	$fieldToolTipsfreee__account_items[""]["corresponding_income_id"] = "";
	$placeHoldersfreee__account_items[""]["corresponding_income_id"] = "";
	$fieldLabelsfreee__account_items[""]["corresponding_expense_name"] = "Corresponding Expense Name";
	$fieldToolTipsfreee__account_items[""]["corresponding_expense_name"] = "";
	$placeHoldersfreee__account_items[""]["corresponding_expense_name"] = "";
	$fieldLabelsfreee__account_items[""]["corresponding_expense_id"] = "Corresponding Expense Id";
	$fieldToolTipsfreee__account_items[""]["corresponding_expense_id"] = "";
	$placeHoldersfreee__account_items[""]["corresponding_expense_id"] = "";
	if (count($fieldToolTipsfreee__account_items[""]))
		$tdatafreee__account_items[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee__account_items["English"] = array();
	$fieldToolTipsfreee__account_items["English"] = array();
	$placeHoldersfreee__account_items["English"] = array();
	$pageTitlesfreee__account_items["English"] = array();
	$fieldLabelsfreee__account_items["English"]["id"] = "Id";
	$fieldToolTipsfreee__account_items["English"]["id"] = "";
	$placeHoldersfreee__account_items["English"]["id"] = "";
	$fieldLabelsfreee__account_items["English"]["company_id"] = "Company Id";
	$fieldToolTipsfreee__account_items["English"]["company_id"] = "";
	$placeHoldersfreee__account_items["English"]["company_id"] = "";
	$fieldLabelsfreee__account_items["English"]["name"] = "Name";
	$fieldToolTipsfreee__account_items["English"]["name"] = "";
	$placeHoldersfreee__account_items["English"]["name"] = "";
	$fieldLabelsfreee__account_items["English"]["update_date"] = "Update Date";
	$fieldToolTipsfreee__account_items["English"]["update_date"] = "";
	$placeHoldersfreee__account_items["English"]["update_date"] = "";
	$fieldLabelsfreee__account_items["English"]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee__account_items["English"]["shortcut1"] = "";
	$placeHoldersfreee__account_items["English"]["shortcut1"] = "";
	$fieldLabelsfreee__account_items["English"]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee__account_items["English"]["shortcut2"] = "";
	$placeHoldersfreee__account_items["English"]["shortcut2"] = "";
	$fieldLabelsfreee__account_items["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee__account_items["English"]["created_at"] = "";
	$placeHoldersfreee__account_items["English"]["created_at"] = "";
	$fieldLabelsfreee__account_items["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee__account_items["English"]["created_by"] = "";
	$placeHoldersfreee__account_items["English"]["created_by"] = "";
	$fieldLabelsfreee__account_items["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee__account_items["English"]["updated_at"] = "";
	$placeHoldersfreee__account_items["English"]["updated_at"] = "";
	$fieldLabelsfreee__account_items["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee__account_items["English"]["updated_by"] = "";
	$placeHoldersfreee__account_items["English"]["updated_by"] = "";
	$fieldLabelsfreee__account_items["English"]["tax_code"] = "Tax Code";
	$fieldToolTipsfreee__account_items["English"]["tax_code"] = "";
	$placeHoldersfreee__account_items["English"]["tax_code"] = "";
	$fieldLabelsfreee__account_items["English"]["default_tax_id"] = "Default Tax Id";
	$fieldToolTipsfreee__account_items["English"]["default_tax_id"] = "";
	$placeHoldersfreee__account_items["English"]["default_tax_id"] = "";
	$fieldLabelsfreee__account_items["English"]["default_tax_code"] = "Default Tax Code";
	$fieldToolTipsfreee__account_items["English"]["default_tax_code"] = "";
	$placeHoldersfreee__account_items["English"]["default_tax_code"] = "";
	$fieldLabelsfreee__account_items["English"]["account_category"] = "Account Category";
	$fieldToolTipsfreee__account_items["English"]["account_category"] = "";
	$placeHoldersfreee__account_items["English"]["account_category"] = "";
	$fieldLabelsfreee__account_items["English"]["account_category_id"] = "Account Category Id";
	$fieldToolTipsfreee__account_items["English"]["account_category_id"] = "";
	$placeHoldersfreee__account_items["English"]["account_category_id"] = "";
	$fieldLabelsfreee__account_items["English"]["categories"] = "Categories";
	$fieldToolTipsfreee__account_items["English"]["categories"] = "";
	$placeHoldersfreee__account_items["English"]["categories"] = "";
	$fieldLabelsfreee__account_items["English"]["available"] = "Available";
	$fieldToolTipsfreee__account_items["English"]["available"] = "";
	$placeHoldersfreee__account_items["English"]["available"] = "";
	$fieldLabelsfreee__account_items["English"]["walletable_id"] = "Walletable Id";
	$fieldToolTipsfreee__account_items["English"]["walletable_id"] = "";
	$placeHoldersfreee__account_items["English"]["walletable_id"] = "";
	$fieldLabelsfreee__account_items["English"]["group_name"] = "Group Name";
	$fieldToolTipsfreee__account_items["English"]["group_name"] = "";
	$placeHoldersfreee__account_items["English"]["group_name"] = "";
	$fieldLabelsfreee__account_items["English"]["corresponding_income_name"] = "Corresponding Income Name";
	$fieldToolTipsfreee__account_items["English"]["corresponding_income_name"] = "";
	$placeHoldersfreee__account_items["English"]["corresponding_income_name"] = "";
	$fieldLabelsfreee__account_items["English"]["corresponding_income_id"] = "Corresponding Income Id";
	$fieldToolTipsfreee__account_items["English"]["corresponding_income_id"] = "";
	$placeHoldersfreee__account_items["English"]["corresponding_income_id"] = "";
	$fieldLabelsfreee__account_items["English"]["corresponding_expense_name"] = "Corresponding Expense Name";
	$fieldToolTipsfreee__account_items["English"]["corresponding_expense_name"] = "";
	$placeHoldersfreee__account_items["English"]["corresponding_expense_name"] = "";
	$fieldLabelsfreee__account_items["English"]["corresponding_expense_id"] = "Corresponding Expense Id";
	$fieldToolTipsfreee__account_items["English"]["corresponding_expense_id"] = "";
	$placeHoldersfreee__account_items["English"]["corresponding_expense_id"] = "";
	if (count($fieldToolTipsfreee__account_items["English"]))
		$tdatafreee__account_items[".isUseToolTips"] = true;
}


	$tdatafreee__account_items[".NCSearch"] = true;



$tdatafreee__account_items[".shortTableName"] = "freee__account_items";
$tdatafreee__account_items[".nSecOptions"] = 0;
$tdatafreee__account_items[".recsPerRowPrint"] = 1;
$tdatafreee__account_items[".mainTableOwnerID"] = "";
$tdatafreee__account_items[".moveNext"] = 1;
$tdatafreee__account_items[".entityType"] = 0;

$tdatafreee__account_items[".strOriginalTableName"] = "freee_ account_items";

	



$tdatafreee__account_items[".showAddInPopup"] = false;

$tdatafreee__account_items[".showEditInPopup"] = false;

$tdatafreee__account_items[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee__account_items[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee__account_items[".fieldsForRegister"] = array();

$tdatafreee__account_items[".listAjax"] = false;

	$tdatafreee__account_items[".audit"] = false;

	$tdatafreee__account_items[".locking"] = false;






$tdatafreee__account_items[".reorderRecordsByHeader"] = true;








$tdatafreee__account_items[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee__account_items[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee__account_items[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee__account_items[".searchSaving"] = false;
//

$tdatafreee__account_items[".showSearchPanel"] = true;
		$tdatafreee__account_items[".flexibleSearch"] = true;

$tdatafreee__account_items[".isUseAjaxSuggest"] = true;

$tdatafreee__account_items[".rowHighlite"] = true;



																																																																																																																																																																																																																													

$tdatafreee__account_items[".ajaxCodeSnippetAdded"] = false;

$tdatafreee__account_items[".buttonsAdded"] = false;

$tdatafreee__account_items[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee__account_items[".isUseTimeForSearch"] = false;





$tdatafreee__account_items[".allSearchFields"] = array();
$tdatafreee__account_items[".filterFields"] = array();
$tdatafreee__account_items[".requiredSearchFields"] = array();



$tdatafreee__account_items[".googleLikeFields"] = array();
$tdatafreee__account_items[".googleLikeFields"][] = "id";
$tdatafreee__account_items[".googleLikeFields"][] = "company_id";
$tdatafreee__account_items[".googleLikeFields"][] = "name";
$tdatafreee__account_items[".googleLikeFields"][] = "update_date";
$tdatafreee__account_items[".googleLikeFields"][] = "shortcut1";
$tdatafreee__account_items[".googleLikeFields"][] = "shortcut2";
$tdatafreee__account_items[".googleLikeFields"][] = "created_at";
$tdatafreee__account_items[".googleLikeFields"][] = "created_by";
$tdatafreee__account_items[".googleLikeFields"][] = "updated_at";
$tdatafreee__account_items[".googleLikeFields"][] = "updated_by";
$tdatafreee__account_items[".googleLikeFields"][] = "tax_code";
$tdatafreee__account_items[".googleLikeFields"][] = "default_tax_id";
$tdatafreee__account_items[".googleLikeFields"][] = "default_tax_code";
$tdatafreee__account_items[".googleLikeFields"][] = "account_category";
$tdatafreee__account_items[".googleLikeFields"][] = "account_category_id";
$tdatafreee__account_items[".googleLikeFields"][] = "categories";
$tdatafreee__account_items[".googleLikeFields"][] = "available";
$tdatafreee__account_items[".googleLikeFields"][] = "walletable_id";
$tdatafreee__account_items[".googleLikeFields"][] = "group_name";
$tdatafreee__account_items[".googleLikeFields"][] = "corresponding_income_name";
$tdatafreee__account_items[".googleLikeFields"][] = "corresponding_income_id";
$tdatafreee__account_items[".googleLikeFields"][] = "corresponding_expense_name";
$tdatafreee__account_items[".googleLikeFields"][] = "corresponding_expense_id";



$tdatafreee__account_items[".tableType"] = "list";

$tdatafreee__account_items[".printerPageOrientation"] = 0;
$tdatafreee__account_items[".nPrinterPageScale"] = 100;

$tdatafreee__account_items[".nPrinterSplitRecords"] = 40;

$tdatafreee__account_items[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee__account_items[".geocodingEnabled"] = false;





$tdatafreee__account_items[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee__account_items[".pageSize"] = 20;

$tdatafreee__account_items[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee__account_items[".strOrderBy"] = $tstrOrderBy;

$tdatafreee__account_items[".orderindexes"] = array();

$tdatafreee__account_items[".sqlHead"] = "SELECT `id`,  	`company_id`,  	`name`,  	`update_date`,  	`shortcut1`,  	`shortcut2`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`tax_code`,  	`default_tax_id`,  	`default_tax_code`,  	`account_category`,  	`account_category_id`,  	`categories`,  	`available`,  	`walletable_id`,  	`group_name`,  	`corresponding_income_name`,  	`corresponding_income_id`,  	`corresponding_expense_name`,  	`corresponding_expense_id`";
$tdatafreee__account_items[".sqlFrom"] = "FROM `freee_ account_items`";
$tdatafreee__account_items[".sqlWhereExpr"] = "";
$tdatafreee__account_items[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee__account_items[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee__account_items[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee__account_items[".highlightSearchResults"] = true;

$tableKeysfreee__account_items = array();
$tableKeysfreee__account_items[] = "id";
$tdatafreee__account_items[".Keys"] = $tableKeysfreee__account_items;

$tdatafreee__account_items[".listFields"] = array();
$tdatafreee__account_items[".listFields"][] = "id";
$tdatafreee__account_items[".listFields"][] = "company_id";
$tdatafreee__account_items[".listFields"][] = "name";
$tdatafreee__account_items[".listFields"][] = "update_date";
$tdatafreee__account_items[".listFields"][] = "shortcut1";
$tdatafreee__account_items[".listFields"][] = "shortcut2";
$tdatafreee__account_items[".listFields"][] = "created_at";
$tdatafreee__account_items[".listFields"][] = "created_by";
$tdatafreee__account_items[".listFields"][] = "updated_at";
$tdatafreee__account_items[".listFields"][] = "updated_by";
$tdatafreee__account_items[".listFields"][] = "tax_code";
$tdatafreee__account_items[".listFields"][] = "default_tax_id";
$tdatafreee__account_items[".listFields"][] = "default_tax_code";
$tdatafreee__account_items[".listFields"][] = "account_category";
$tdatafreee__account_items[".listFields"][] = "account_category_id";
$tdatafreee__account_items[".listFields"][] = "categories";
$tdatafreee__account_items[".listFields"][] = "available";
$tdatafreee__account_items[".listFields"][] = "walletable_id";
$tdatafreee__account_items[".listFields"][] = "group_name";
$tdatafreee__account_items[".listFields"][] = "corresponding_income_name";
$tdatafreee__account_items[".listFields"][] = "corresponding_income_id";
$tdatafreee__account_items[".listFields"][] = "corresponding_expense_name";
$tdatafreee__account_items[".listFields"][] = "corresponding_expense_id";

$tdatafreee__account_items[".hideMobileList"] = array();


$tdatafreee__account_items[".viewFields"] = array();
$tdatafreee__account_items[".viewFields"][] = "id";
$tdatafreee__account_items[".viewFields"][] = "company_id";
$tdatafreee__account_items[".viewFields"][] = "name";
$tdatafreee__account_items[".viewFields"][] = "update_date";
$tdatafreee__account_items[".viewFields"][] = "shortcut1";
$tdatafreee__account_items[".viewFields"][] = "shortcut2";
$tdatafreee__account_items[".viewFields"][] = "created_at";
$tdatafreee__account_items[".viewFields"][] = "created_by";
$tdatafreee__account_items[".viewFields"][] = "updated_at";
$tdatafreee__account_items[".viewFields"][] = "updated_by";
$tdatafreee__account_items[".viewFields"][] = "tax_code";
$tdatafreee__account_items[".viewFields"][] = "default_tax_id";
$tdatafreee__account_items[".viewFields"][] = "default_tax_code";
$tdatafreee__account_items[".viewFields"][] = "account_category";
$tdatafreee__account_items[".viewFields"][] = "account_category_id";
$tdatafreee__account_items[".viewFields"][] = "categories";
$tdatafreee__account_items[".viewFields"][] = "available";
$tdatafreee__account_items[".viewFields"][] = "walletable_id";
$tdatafreee__account_items[".viewFields"][] = "group_name";
$tdatafreee__account_items[".viewFields"][] = "corresponding_income_name";
$tdatafreee__account_items[".viewFields"][] = "corresponding_income_id";
$tdatafreee__account_items[".viewFields"][] = "corresponding_expense_name";
$tdatafreee__account_items[".viewFields"][] = "corresponding_expense_id";

$tdatafreee__account_items[".addFields"] = array();
$tdatafreee__account_items[".addFields"][] = "id";
$tdatafreee__account_items[".addFields"][] = "company_id";
$tdatafreee__account_items[".addFields"][] = "name";
$tdatafreee__account_items[".addFields"][] = "update_date";
$tdatafreee__account_items[".addFields"][] = "shortcut1";
$tdatafreee__account_items[".addFields"][] = "shortcut2";
$tdatafreee__account_items[".addFields"][] = "created_at";
$tdatafreee__account_items[".addFields"][] = "created_by";
$tdatafreee__account_items[".addFields"][] = "updated_at";
$tdatafreee__account_items[".addFields"][] = "updated_by";
$tdatafreee__account_items[".addFields"][] = "tax_code";
$tdatafreee__account_items[".addFields"][] = "default_tax_id";
$tdatafreee__account_items[".addFields"][] = "default_tax_code";
$tdatafreee__account_items[".addFields"][] = "account_category";
$tdatafreee__account_items[".addFields"][] = "account_category_id";
$tdatafreee__account_items[".addFields"][] = "categories";
$tdatafreee__account_items[".addFields"][] = "available";
$tdatafreee__account_items[".addFields"][] = "walletable_id";
$tdatafreee__account_items[".addFields"][] = "group_name";
$tdatafreee__account_items[".addFields"][] = "corresponding_income_name";
$tdatafreee__account_items[".addFields"][] = "corresponding_income_id";
$tdatafreee__account_items[".addFields"][] = "corresponding_expense_name";
$tdatafreee__account_items[".addFields"][] = "corresponding_expense_id";

$tdatafreee__account_items[".masterListFields"] = array();
$tdatafreee__account_items[".masterListFields"][] = "id";
$tdatafreee__account_items[".masterListFields"][] = "company_id";
$tdatafreee__account_items[".masterListFields"][] = "name";
$tdatafreee__account_items[".masterListFields"][] = "update_date";
$tdatafreee__account_items[".masterListFields"][] = "shortcut1";
$tdatafreee__account_items[".masterListFields"][] = "shortcut2";
$tdatafreee__account_items[".masterListFields"][] = "created_at";
$tdatafreee__account_items[".masterListFields"][] = "created_by";
$tdatafreee__account_items[".masterListFields"][] = "updated_at";
$tdatafreee__account_items[".masterListFields"][] = "updated_by";
$tdatafreee__account_items[".masterListFields"][] = "tax_code";
$tdatafreee__account_items[".masterListFields"][] = "default_tax_id";
$tdatafreee__account_items[".masterListFields"][] = "default_tax_code";
$tdatafreee__account_items[".masterListFields"][] = "account_category";
$tdatafreee__account_items[".masterListFields"][] = "account_category_id";
$tdatafreee__account_items[".masterListFields"][] = "categories";
$tdatafreee__account_items[".masterListFields"][] = "available";
$tdatafreee__account_items[".masterListFields"][] = "walletable_id";
$tdatafreee__account_items[".masterListFields"][] = "group_name";
$tdatafreee__account_items[".masterListFields"][] = "corresponding_income_name";
$tdatafreee__account_items[".masterListFields"][] = "corresponding_income_id";
$tdatafreee__account_items[".masterListFields"][] = "corresponding_expense_name";
$tdatafreee__account_items[".masterListFields"][] = "corresponding_expense_id";

$tdatafreee__account_items[".inlineAddFields"] = array();
$tdatafreee__account_items[".inlineAddFields"][] = "id";
$tdatafreee__account_items[".inlineAddFields"][] = "company_id";
$tdatafreee__account_items[".inlineAddFields"][] = "name";
$tdatafreee__account_items[".inlineAddFields"][] = "update_date";
$tdatafreee__account_items[".inlineAddFields"][] = "shortcut1";
$tdatafreee__account_items[".inlineAddFields"][] = "shortcut2";
$tdatafreee__account_items[".inlineAddFields"][] = "created_at";
$tdatafreee__account_items[".inlineAddFields"][] = "created_by";
$tdatafreee__account_items[".inlineAddFields"][] = "updated_at";
$tdatafreee__account_items[".inlineAddFields"][] = "updated_by";
$tdatafreee__account_items[".inlineAddFields"][] = "tax_code";
$tdatafreee__account_items[".inlineAddFields"][] = "default_tax_id";
$tdatafreee__account_items[".inlineAddFields"][] = "default_tax_code";
$tdatafreee__account_items[".inlineAddFields"][] = "account_category";
$tdatafreee__account_items[".inlineAddFields"][] = "account_category_id";
$tdatafreee__account_items[".inlineAddFields"][] = "categories";
$tdatafreee__account_items[".inlineAddFields"][] = "available";
$tdatafreee__account_items[".inlineAddFields"][] = "walletable_id";
$tdatafreee__account_items[".inlineAddFields"][] = "group_name";
$tdatafreee__account_items[".inlineAddFields"][] = "corresponding_income_name";
$tdatafreee__account_items[".inlineAddFields"][] = "corresponding_income_id";
$tdatafreee__account_items[".inlineAddFields"][] = "corresponding_expense_name";
$tdatafreee__account_items[".inlineAddFields"][] = "corresponding_expense_id";

$tdatafreee__account_items[".editFields"] = array();
$tdatafreee__account_items[".editFields"][] = "id";
$tdatafreee__account_items[".editFields"][] = "company_id";
$tdatafreee__account_items[".editFields"][] = "name";
$tdatafreee__account_items[".editFields"][] = "update_date";
$tdatafreee__account_items[".editFields"][] = "shortcut1";
$tdatafreee__account_items[".editFields"][] = "shortcut2";
$tdatafreee__account_items[".editFields"][] = "created_at";
$tdatafreee__account_items[".editFields"][] = "created_by";
$tdatafreee__account_items[".editFields"][] = "updated_at";
$tdatafreee__account_items[".editFields"][] = "updated_by";
$tdatafreee__account_items[".editFields"][] = "tax_code";
$tdatafreee__account_items[".editFields"][] = "default_tax_id";
$tdatafreee__account_items[".editFields"][] = "default_tax_code";
$tdatafreee__account_items[".editFields"][] = "account_category";
$tdatafreee__account_items[".editFields"][] = "account_category_id";
$tdatafreee__account_items[".editFields"][] = "categories";
$tdatafreee__account_items[".editFields"][] = "available";
$tdatafreee__account_items[".editFields"][] = "walletable_id";
$tdatafreee__account_items[".editFields"][] = "group_name";
$tdatafreee__account_items[".editFields"][] = "corresponding_income_name";
$tdatafreee__account_items[".editFields"][] = "corresponding_income_id";
$tdatafreee__account_items[".editFields"][] = "corresponding_expense_name";
$tdatafreee__account_items[".editFields"][] = "corresponding_expense_id";

$tdatafreee__account_items[".inlineEditFields"] = array();
$tdatafreee__account_items[".inlineEditFields"][] = "id";
$tdatafreee__account_items[".inlineEditFields"][] = "company_id";
$tdatafreee__account_items[".inlineEditFields"][] = "name";
$tdatafreee__account_items[".inlineEditFields"][] = "update_date";
$tdatafreee__account_items[".inlineEditFields"][] = "shortcut1";
$tdatafreee__account_items[".inlineEditFields"][] = "shortcut2";
$tdatafreee__account_items[".inlineEditFields"][] = "created_at";
$tdatafreee__account_items[".inlineEditFields"][] = "created_by";
$tdatafreee__account_items[".inlineEditFields"][] = "updated_at";
$tdatafreee__account_items[".inlineEditFields"][] = "updated_by";
$tdatafreee__account_items[".inlineEditFields"][] = "tax_code";
$tdatafreee__account_items[".inlineEditFields"][] = "default_tax_id";
$tdatafreee__account_items[".inlineEditFields"][] = "default_tax_code";
$tdatafreee__account_items[".inlineEditFields"][] = "account_category";
$tdatafreee__account_items[".inlineEditFields"][] = "account_category_id";
$tdatafreee__account_items[".inlineEditFields"][] = "categories";
$tdatafreee__account_items[".inlineEditFields"][] = "available";
$tdatafreee__account_items[".inlineEditFields"][] = "walletable_id";
$tdatafreee__account_items[".inlineEditFields"][] = "group_name";
$tdatafreee__account_items[".inlineEditFields"][] = "corresponding_income_name";
$tdatafreee__account_items[".inlineEditFields"][] = "corresponding_income_id";
$tdatafreee__account_items[".inlineEditFields"][] = "corresponding_expense_name";
$tdatafreee__account_items[".inlineEditFields"][] = "corresponding_expense_id";

$tdatafreee__account_items[".updateSelectedFields"] = array();
$tdatafreee__account_items[".updateSelectedFields"][] = "id";
$tdatafreee__account_items[".updateSelectedFields"][] = "company_id";
$tdatafreee__account_items[".updateSelectedFields"][] = "name";
$tdatafreee__account_items[".updateSelectedFields"][] = "update_date";
$tdatafreee__account_items[".updateSelectedFields"][] = "shortcut1";
$tdatafreee__account_items[".updateSelectedFields"][] = "shortcut2";
$tdatafreee__account_items[".updateSelectedFields"][] = "created_at";
$tdatafreee__account_items[".updateSelectedFields"][] = "created_by";
$tdatafreee__account_items[".updateSelectedFields"][] = "updated_at";
$tdatafreee__account_items[".updateSelectedFields"][] = "updated_by";
$tdatafreee__account_items[".updateSelectedFields"][] = "tax_code";
$tdatafreee__account_items[".updateSelectedFields"][] = "default_tax_id";
$tdatafreee__account_items[".updateSelectedFields"][] = "default_tax_code";
$tdatafreee__account_items[".updateSelectedFields"][] = "account_category";
$tdatafreee__account_items[".updateSelectedFields"][] = "account_category_id";
$tdatafreee__account_items[".updateSelectedFields"][] = "categories";
$tdatafreee__account_items[".updateSelectedFields"][] = "available";
$tdatafreee__account_items[".updateSelectedFields"][] = "walletable_id";
$tdatafreee__account_items[".updateSelectedFields"][] = "group_name";
$tdatafreee__account_items[".updateSelectedFields"][] = "corresponding_income_name";
$tdatafreee__account_items[".updateSelectedFields"][] = "corresponding_income_id";
$tdatafreee__account_items[".updateSelectedFields"][] = "corresponding_expense_name";
$tdatafreee__account_items[".updateSelectedFields"][] = "corresponding_expense_id";


$tdatafreee__account_items[".exportFields"] = array();
$tdatafreee__account_items[".exportFields"][] = "id";
$tdatafreee__account_items[".exportFields"][] = "company_id";
$tdatafreee__account_items[".exportFields"][] = "name";
$tdatafreee__account_items[".exportFields"][] = "update_date";
$tdatafreee__account_items[".exportFields"][] = "shortcut1";
$tdatafreee__account_items[".exportFields"][] = "shortcut2";
$tdatafreee__account_items[".exportFields"][] = "created_at";
$tdatafreee__account_items[".exportFields"][] = "created_by";
$tdatafreee__account_items[".exportFields"][] = "updated_at";
$tdatafreee__account_items[".exportFields"][] = "updated_by";
$tdatafreee__account_items[".exportFields"][] = "tax_code";
$tdatafreee__account_items[".exportFields"][] = "default_tax_id";
$tdatafreee__account_items[".exportFields"][] = "default_tax_code";
$tdatafreee__account_items[".exportFields"][] = "account_category";
$tdatafreee__account_items[".exportFields"][] = "account_category_id";
$tdatafreee__account_items[".exportFields"][] = "categories";
$tdatafreee__account_items[".exportFields"][] = "available";
$tdatafreee__account_items[".exportFields"][] = "walletable_id";
$tdatafreee__account_items[".exportFields"][] = "group_name";
$tdatafreee__account_items[".exportFields"][] = "corresponding_income_name";
$tdatafreee__account_items[".exportFields"][] = "corresponding_income_id";
$tdatafreee__account_items[".exportFields"][] = "corresponding_expense_name";
$tdatafreee__account_items[".exportFields"][] = "corresponding_expense_id";

$tdatafreee__account_items[".importFields"] = array();
$tdatafreee__account_items[".importFields"][] = "id";
$tdatafreee__account_items[".importFields"][] = "company_id";
$tdatafreee__account_items[".importFields"][] = "name";
$tdatafreee__account_items[".importFields"][] = "update_date";
$tdatafreee__account_items[".importFields"][] = "shortcut1";
$tdatafreee__account_items[".importFields"][] = "shortcut2";
$tdatafreee__account_items[".importFields"][] = "created_at";
$tdatafreee__account_items[".importFields"][] = "created_by";
$tdatafreee__account_items[".importFields"][] = "updated_at";
$tdatafreee__account_items[".importFields"][] = "updated_by";
$tdatafreee__account_items[".importFields"][] = "tax_code";
$tdatafreee__account_items[".importFields"][] = "default_tax_id";
$tdatafreee__account_items[".importFields"][] = "default_tax_code";
$tdatafreee__account_items[".importFields"][] = "account_category";
$tdatafreee__account_items[".importFields"][] = "account_category_id";
$tdatafreee__account_items[".importFields"][] = "categories";
$tdatafreee__account_items[".importFields"][] = "available";
$tdatafreee__account_items[".importFields"][] = "walletable_id";
$tdatafreee__account_items[".importFields"][] = "group_name";
$tdatafreee__account_items[".importFields"][] = "corresponding_income_name";
$tdatafreee__account_items[".importFields"][] = "corresponding_income_id";
$tdatafreee__account_items[".importFields"][] = "corresponding_expense_name";
$tdatafreee__account_items[".importFields"][] = "corresponding_expense_id";

$tdatafreee__account_items[".printFields"] = array();
$tdatafreee__account_items[".printFields"][] = "id";
$tdatafreee__account_items[".printFields"][] = "company_id";
$tdatafreee__account_items[".printFields"][] = "name";
$tdatafreee__account_items[".printFields"][] = "update_date";
$tdatafreee__account_items[".printFields"][] = "shortcut1";
$tdatafreee__account_items[".printFields"][] = "shortcut2";
$tdatafreee__account_items[".printFields"][] = "created_at";
$tdatafreee__account_items[".printFields"][] = "created_by";
$tdatafreee__account_items[".printFields"][] = "updated_at";
$tdatafreee__account_items[".printFields"][] = "updated_by";
$tdatafreee__account_items[".printFields"][] = "tax_code";
$tdatafreee__account_items[".printFields"][] = "default_tax_id";
$tdatafreee__account_items[".printFields"][] = "default_tax_code";
$tdatafreee__account_items[".printFields"][] = "account_category";
$tdatafreee__account_items[".printFields"][] = "account_category_id";
$tdatafreee__account_items[".printFields"][] = "categories";
$tdatafreee__account_items[".printFields"][] = "available";
$tdatafreee__account_items[".printFields"][] = "walletable_id";
$tdatafreee__account_items[".printFields"][] = "group_name";
$tdatafreee__account_items[".printFields"][] = "corresponding_income_name";
$tdatafreee__account_items[".printFields"][] = "corresponding_income_id";
$tdatafreee__account_items[".printFields"][] = "corresponding_expense_name";
$tdatafreee__account_items[".printFields"][] = "corresponding_expense_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatafreee__account_items["id"] = $fdata;
//	company_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "company_id";
	$fdata["GoodName"] = "company_id";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","company_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "company_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`company_id`";

	
	
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
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatafreee__account_items["company_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

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
			$edata["EditParams"].= " maxlength=30";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatafreee__account_items["name"] = $fdata;
//	update_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_date";
	$fdata["GoodName"] = "update_date";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","update_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_date`";

	
	
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








	$tdatafreee__account_items["update_date"] = $fdata;
//	shortcut1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "shortcut1";
	$fdata["GoodName"] = "shortcut1";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","shortcut1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shortcut1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shortcut1`";

	
	
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








	$tdatafreee__account_items["shortcut1"] = $fdata;
//	shortcut2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "shortcut2";
	$fdata["GoodName"] = "shortcut2";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","shortcut2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shortcut2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shortcut2`";

	
	
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








	$tdatafreee__account_items["shortcut2"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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








	$tdatafreee__account_items["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

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








	$tdatafreee__account_items["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
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








	$tdatafreee__account_items["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

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








	$tdatafreee__account_items["updated_by"] = $fdata;
//	tax_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tax_code";
	$fdata["GoodName"] = "tax_code";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","tax_code");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tax_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tax_code`";

	
	
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








	$tdatafreee__account_items["tax_code"] = $fdata;
//	default_tax_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "default_tax_id";
	$fdata["GoodName"] = "default_tax_id";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","default_tax_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "default_tax_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`default_tax_id`";

	
	
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








	$tdatafreee__account_items["default_tax_id"] = $fdata;
//	default_tax_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "default_tax_code";
	$fdata["GoodName"] = "default_tax_code";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","default_tax_code");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "default_tax_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`default_tax_code`";

	
	
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








	$tdatafreee__account_items["default_tax_code"] = $fdata;
//	account_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "account_category";
	$fdata["GoodName"] = "account_category";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","account_category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "account_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`account_category`";

	
	
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








	$tdatafreee__account_items["account_category"] = $fdata;
//	account_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "account_category_id";
	$fdata["GoodName"] = "account_category_id";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","account_category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

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








	$tdatafreee__account_items["account_category_id"] = $fdata;
//	categories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "categories";
	$fdata["GoodName"] = "categories";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","categories");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "categories";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`categories`";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatafreee__account_items["categories"] = $fdata;
//	available
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "available";
	$fdata["GoodName"] = "available";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","available");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "available";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`available`";

	
	
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








	$tdatafreee__account_items["available"] = $fdata;
//	walletable_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "walletable_id";
	$fdata["GoodName"] = "walletable_id";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","walletable_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "walletable_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`walletable_id`";

	
	
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








	$tdatafreee__account_items["walletable_id"] = $fdata;
//	group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "group_name";
	$fdata["GoodName"] = "group_name";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","group_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "group_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group_name`";

	
	
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








	$tdatafreee__account_items["group_name"] = $fdata;
//	corresponding_income_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "corresponding_income_name";
	$fdata["GoodName"] = "corresponding_income_name";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","corresponding_income_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "corresponding_income_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`corresponding_income_name`";

	
	
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








	$tdatafreee__account_items["corresponding_income_name"] = $fdata;
//	corresponding_income_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "corresponding_income_id";
	$fdata["GoodName"] = "corresponding_income_id";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","corresponding_income_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "corresponding_income_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`corresponding_income_id`";

	
	
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








	$tdatafreee__account_items["corresponding_income_id"] = $fdata;
//	corresponding_expense_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "corresponding_expense_name";
	$fdata["GoodName"] = "corresponding_expense_name";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","corresponding_expense_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "corresponding_expense_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`corresponding_expense_name`";

	
	
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








	$tdatafreee__account_items["corresponding_expense_name"] = $fdata;
//	corresponding_expense_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "corresponding_expense_id";
	$fdata["GoodName"] = "corresponding_expense_id";
	$fdata["ownerTable"] = "freee_ account_items";
	$fdata["Label"] = GetFieldLabel("freee__account_items","corresponding_expense_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "corresponding_expense_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`corresponding_expense_id`";

	
	
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








	$tdatafreee__account_items["corresponding_expense_id"] = $fdata;


$tables_data["freee_ account_items"]=&$tdatafreee__account_items;
$field_labels["freee__account_items"] = &$fieldLabelsfreee__account_items;
$fieldToolTips["freee__account_items"] = &$fieldToolTipsfreee__account_items;
$placeHolders["freee__account_items"] = &$placeHoldersfreee__account_items;
$page_titles["freee__account_items"] = &$pageTitlesfreee__account_items;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_ account_items"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_ account_items"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee__account_items()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`company_id`,  	`name`,  	`update_date`,  	`shortcut1`,  	`shortcut2`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`tax_code`,  	`default_tax_id`,  	`default_tax_code`,  	`account_category`,  	`account_category_id`,  	`categories`,  	`available`,  	`walletable_id`,  	`group_name`,  	`corresponding_income_name`,  	`corresponding_income_id`,  	`corresponding_expense_name`,  	`corresponding_expense_id`";
$proto0["m_strFrom"] = "FROM `freee_ account_items`";
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
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_ account_items";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "company_id",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto8["m_sql"] = "`company_id`";
$proto8["m_srcTableName"] = "freee_ account_items";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto10["m_sql"] = "`name`";
$proto10["m_srcTableName"] = "freee_ account_items";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_date",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto12["m_sql"] = "`update_date`";
$proto12["m_srcTableName"] = "freee_ account_items";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "shortcut1",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto14["m_sql"] = "`shortcut1`";
$proto14["m_srcTableName"] = "freee_ account_items";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "shortcut2",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto16["m_sql"] = "`shortcut2`";
$proto16["m_srcTableName"] = "freee_ account_items";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "freee_ account_items";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto20["m_sql"] = "`created_by`";
$proto20["m_srcTableName"] = "freee_ account_items";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto22["m_sql"] = "`updated_at`";
$proto22["m_srcTableName"] = "freee_ account_items";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto24["m_sql"] = "`updated_by`";
$proto24["m_srcTableName"] = "freee_ account_items";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "tax_code",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto26["m_sql"] = "`tax_code`";
$proto26["m_srcTableName"] = "freee_ account_items";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "default_tax_id",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto28["m_sql"] = "`default_tax_id`";
$proto28["m_srcTableName"] = "freee_ account_items";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "default_tax_code",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto30["m_sql"] = "`default_tax_code`";
$proto30["m_srcTableName"] = "freee_ account_items";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "account_category",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto32["m_sql"] = "`account_category`";
$proto32["m_srcTableName"] = "freee_ account_items";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "account_category_id",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto34["m_sql"] = "`account_category_id`";
$proto34["m_srcTableName"] = "freee_ account_items";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "categories",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto36["m_sql"] = "`categories`";
$proto36["m_srcTableName"] = "freee_ account_items";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "available",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto38["m_sql"] = "`available`";
$proto38["m_srcTableName"] = "freee_ account_items";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "walletable_id",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto40["m_sql"] = "`walletable_id`";
$proto40["m_srcTableName"] = "freee_ account_items";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "group_name",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto42["m_sql"] = "`group_name`";
$proto42["m_srcTableName"] = "freee_ account_items";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "corresponding_income_name",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto44["m_sql"] = "`corresponding_income_name`";
$proto44["m_srcTableName"] = "freee_ account_items";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "corresponding_income_id",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto46["m_sql"] = "`corresponding_income_id`";
$proto46["m_srcTableName"] = "freee_ account_items";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "corresponding_expense_name",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto48["m_sql"] = "`corresponding_expense_name`";
$proto48["m_srcTableName"] = "freee_ account_items";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "corresponding_expense_id",
	"m_strTable" => "freee_ account_items",
	"m_srcTableName" => "freee_ account_items"
));

$proto50["m_sql"] = "`corresponding_expense_id`";
$proto50["m_srcTableName"] = "freee_ account_items";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "freee_ account_items";
$proto53["m_srcTableName"] = "freee_ account_items";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "id";
$proto53["m_columns"][] = "company_id";
$proto53["m_columns"][] = "name";
$proto53["m_columns"][] = "update_date";
$proto53["m_columns"][] = "shortcut1";
$proto53["m_columns"][] = "shortcut2";
$proto53["m_columns"][] = "created_at";
$proto53["m_columns"][] = "created_by";
$proto53["m_columns"][] = "updated_at";
$proto53["m_columns"][] = "updated_by";
$proto53["m_columns"][] = "tax_code";
$proto53["m_columns"][] = "default_tax_id";
$proto53["m_columns"][] = "default_tax_code";
$proto53["m_columns"][] = "account_category";
$proto53["m_columns"][] = "account_category_id";
$proto53["m_columns"][] = "categories";
$proto53["m_columns"][] = "available";
$proto53["m_columns"][] = "walletable_id";
$proto53["m_columns"][] = "group_name";
$proto53["m_columns"][] = "corresponding_income_name";
$proto53["m_columns"][] = "corresponding_income_id";
$proto53["m_columns"][] = "corresponding_expense_name";
$proto53["m_columns"][] = "corresponding_expense_id";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "`freee_ account_items`";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "freee_ account_items";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="freee_ account_items";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee__account_items = createSqlQuery_freee__account_items();


	
		;

																							

$tdatafreee__account_items[".sqlquery"] = $queryData_freee__account_items;

$tableEvents["freee_ account_items"] = new eventsBase;
$tdatafreee__account_items[".hasEvents"] = false;

?>