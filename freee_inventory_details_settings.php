<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_inventory_details = array();
	$tdatafreee_inventory_details[".truncateText"] = true;
	$tdatafreee_inventory_details[".NumberOfChars"] = 80;
	$tdatafreee_inventory_details[".ShortName"] = "freee_inventory_details";
	$tdatafreee_inventory_details[".OwnerID"] = "";
	$tdatafreee_inventory_details[".OriginalTable"] = "freee_inventory_details";

//	field labels
$fieldLabelsfreee_inventory_details = array();
$fieldToolTipsfreee_inventory_details = array();
$pageTitlesfreee_inventory_details = array();
$placeHoldersfreee_inventory_details = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_inventory_details["Japanese"] = array();
	$fieldToolTipsfreee_inventory_details["Japanese"] = array();
	$placeHoldersfreee_inventory_details["Japanese"] = array();
	$pageTitlesfreee_inventory_details["Japanese"] = array();
	$fieldLabelsfreee_inventory_details["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_inventory_details["Japanese"]["id"] = "";
	$placeHoldersfreee_inventory_details["Japanese"]["id"] = "";
	$fieldLabelsfreee_inventory_details["Japanese"]["date"] = "Date";
	$fieldToolTipsfreee_inventory_details["Japanese"]["date"] = "";
	$placeHoldersfreee_inventory_details["Japanese"]["date"] = "";
	$fieldLabelsfreee_inventory_details["Japanese"]["K_toB"] = "K ToB";
	$fieldToolTipsfreee_inventory_details["Japanese"]["K_toB"] = "";
	$placeHoldersfreee_inventory_details["Japanese"]["K_toB"] = "";
	$fieldLabelsfreee_inventory_details["Japanese"]["D_toB"] = "D ToB";
	$fieldToolTipsfreee_inventory_details["Japanese"]["D_toB"] = "";
	$placeHoldersfreee_inventory_details["Japanese"]["D_toB"] = "";
	$fieldLabelsfreee_inventory_details["Japanese"]["J_toB"] = "J ToB";
	$fieldToolTipsfreee_inventory_details["Japanese"]["J_toB"] = "";
	$placeHoldersfreee_inventory_details["Japanese"]["J_toB"] = "";
	$fieldLabelsfreee_inventory_details["Japanese"]["W_toB"] = "W ToB";
	$fieldToolTipsfreee_inventory_details["Japanese"]["W_toB"] = "";
	$placeHoldersfreee_inventory_details["Japanese"]["W_toB"] = "";
	$fieldLabelsfreee_inventory_details["Japanese"]["B_toB"] = "B ToB";
	$fieldToolTipsfreee_inventory_details["Japanese"]["B_toB"] = "";
	$placeHoldersfreee_inventory_details["Japanese"]["B_toB"] = "";
	$fieldLabelsfreee_inventory_details["Japanese"]["K_toC"] = "K ToC";
	$fieldToolTipsfreee_inventory_details["Japanese"]["K_toC"] = "";
	$placeHoldersfreee_inventory_details["Japanese"]["K_toC"] = "";
	$fieldLabelsfreee_inventory_details["Japanese"]["D_toC"] = "D ToC";
	$fieldToolTipsfreee_inventory_details["Japanese"]["D_toC"] = "";
	$placeHoldersfreee_inventory_details["Japanese"]["D_toC"] = "";
	$fieldLabelsfreee_inventory_details["Japanese"]["J_toC"] = "J ToC";
	$fieldToolTipsfreee_inventory_details["Japanese"]["J_toC"] = "";
	$placeHoldersfreee_inventory_details["Japanese"]["J_toC"] = "";
	$fieldLabelsfreee_inventory_details["Japanese"]["W_toC"] = "W ToC";
	$fieldToolTipsfreee_inventory_details["Japanese"]["W_toC"] = "";
	$placeHoldersfreee_inventory_details["Japanese"]["W_toC"] = "";
	$fieldLabelsfreee_inventory_details["Japanese"]["B_toC"] = "B ToC";
	$fieldToolTipsfreee_inventory_details["Japanese"]["B_toC"] = "";
	$placeHoldersfreee_inventory_details["Japanese"]["B_toC"] = "";
	$fieldLabelsfreee_inventory_details["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_inventory_details["Japanese"]["created_at"] = "";
	$placeHoldersfreee_inventory_details["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_inventory_details["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_inventory_details["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_inventory_details["Japanese"]["updated_at"] = "";
	if (count($fieldToolTipsfreee_inventory_details["Japanese"]))
		$tdatafreee_inventory_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_inventory_details[""] = array();
	$fieldToolTipsfreee_inventory_details[""] = array();
	$placeHoldersfreee_inventory_details[""] = array();
	$pageTitlesfreee_inventory_details[""] = array();
	$fieldLabelsfreee_inventory_details[""]["id"] = "Id";
	$fieldToolTipsfreee_inventory_details[""]["id"] = "";
	$placeHoldersfreee_inventory_details[""]["id"] = "";
	$fieldLabelsfreee_inventory_details[""]["date"] = "Date";
	$fieldToolTipsfreee_inventory_details[""]["date"] = "";
	$placeHoldersfreee_inventory_details[""]["date"] = "";
	$fieldLabelsfreee_inventory_details[""]["K_toB"] = "K ToB";
	$fieldToolTipsfreee_inventory_details[""]["K_toB"] = "";
	$placeHoldersfreee_inventory_details[""]["K_toB"] = "";
	$fieldLabelsfreee_inventory_details[""]["D_toB"] = "D ToB";
	$fieldToolTipsfreee_inventory_details[""]["D_toB"] = "";
	$placeHoldersfreee_inventory_details[""]["D_toB"] = "";
	$fieldLabelsfreee_inventory_details[""]["J_toB"] = "J ToB";
	$fieldToolTipsfreee_inventory_details[""]["J_toB"] = "";
	$placeHoldersfreee_inventory_details[""]["J_toB"] = "";
	$fieldLabelsfreee_inventory_details[""]["W_toB"] = "W ToB";
	$fieldToolTipsfreee_inventory_details[""]["W_toB"] = "";
	$placeHoldersfreee_inventory_details[""]["W_toB"] = "";
	$fieldLabelsfreee_inventory_details[""]["B_toB"] = "B ToB";
	$fieldToolTipsfreee_inventory_details[""]["B_toB"] = "";
	$placeHoldersfreee_inventory_details[""]["B_toB"] = "";
	$fieldLabelsfreee_inventory_details[""]["K_toC"] = "K ToC";
	$fieldToolTipsfreee_inventory_details[""]["K_toC"] = "";
	$placeHoldersfreee_inventory_details[""]["K_toC"] = "";
	$fieldLabelsfreee_inventory_details[""]["D_toC"] = "D ToC";
	$fieldToolTipsfreee_inventory_details[""]["D_toC"] = "";
	$placeHoldersfreee_inventory_details[""]["D_toC"] = "";
	$fieldLabelsfreee_inventory_details[""]["J_toC"] = "J ToC";
	$fieldToolTipsfreee_inventory_details[""]["J_toC"] = "";
	$placeHoldersfreee_inventory_details[""]["J_toC"] = "";
	$fieldLabelsfreee_inventory_details[""]["W_toC"] = "W ToC";
	$fieldToolTipsfreee_inventory_details[""]["W_toC"] = "";
	$placeHoldersfreee_inventory_details[""]["W_toC"] = "";
	$fieldLabelsfreee_inventory_details[""]["B_toC"] = "B ToC";
	$fieldToolTipsfreee_inventory_details[""]["B_toC"] = "";
	$placeHoldersfreee_inventory_details[""]["B_toC"] = "";
	$fieldLabelsfreee_inventory_details[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_inventory_details[""]["created_at"] = "";
	$placeHoldersfreee_inventory_details[""]["created_at"] = "";
	$fieldLabelsfreee_inventory_details[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_inventory_details[""]["updated_at"] = "";
	$placeHoldersfreee_inventory_details[""]["updated_at"] = "";
	if (count($fieldToolTipsfreee_inventory_details[""]))
		$tdatafreee_inventory_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_inventory_details["English"] = array();
	$fieldToolTipsfreee_inventory_details["English"] = array();
	$placeHoldersfreee_inventory_details["English"] = array();
	$pageTitlesfreee_inventory_details["English"] = array();
	$fieldLabelsfreee_inventory_details["English"]["id"] = "Id";
	$fieldToolTipsfreee_inventory_details["English"]["id"] = "";
	$placeHoldersfreee_inventory_details["English"]["id"] = "";
	$fieldLabelsfreee_inventory_details["English"]["date"] = "Date";
	$fieldToolTipsfreee_inventory_details["English"]["date"] = "";
	$placeHoldersfreee_inventory_details["English"]["date"] = "";
	$fieldLabelsfreee_inventory_details["English"]["K_toB"] = "K ToB";
	$fieldToolTipsfreee_inventory_details["English"]["K_toB"] = "";
	$placeHoldersfreee_inventory_details["English"]["K_toB"] = "";
	$fieldLabelsfreee_inventory_details["English"]["D_toB"] = "D ToB";
	$fieldToolTipsfreee_inventory_details["English"]["D_toB"] = "";
	$placeHoldersfreee_inventory_details["English"]["D_toB"] = "";
	$fieldLabelsfreee_inventory_details["English"]["J_toB"] = "J ToB";
	$fieldToolTipsfreee_inventory_details["English"]["J_toB"] = "";
	$placeHoldersfreee_inventory_details["English"]["J_toB"] = "";
	$fieldLabelsfreee_inventory_details["English"]["W_toB"] = "W ToB";
	$fieldToolTipsfreee_inventory_details["English"]["W_toB"] = "";
	$placeHoldersfreee_inventory_details["English"]["W_toB"] = "";
	$fieldLabelsfreee_inventory_details["English"]["B_toB"] = "B ToB";
	$fieldToolTipsfreee_inventory_details["English"]["B_toB"] = "";
	$placeHoldersfreee_inventory_details["English"]["B_toB"] = "";
	$fieldLabelsfreee_inventory_details["English"]["K_toC"] = "K ToC";
	$fieldToolTipsfreee_inventory_details["English"]["K_toC"] = "";
	$placeHoldersfreee_inventory_details["English"]["K_toC"] = "";
	$fieldLabelsfreee_inventory_details["English"]["D_toC"] = "D ToC";
	$fieldToolTipsfreee_inventory_details["English"]["D_toC"] = "";
	$placeHoldersfreee_inventory_details["English"]["D_toC"] = "";
	$fieldLabelsfreee_inventory_details["English"]["J_toC"] = "J ToC";
	$fieldToolTipsfreee_inventory_details["English"]["J_toC"] = "";
	$placeHoldersfreee_inventory_details["English"]["J_toC"] = "";
	$fieldLabelsfreee_inventory_details["English"]["W_toC"] = "W ToC";
	$fieldToolTipsfreee_inventory_details["English"]["W_toC"] = "";
	$placeHoldersfreee_inventory_details["English"]["W_toC"] = "";
	$fieldLabelsfreee_inventory_details["English"]["B_toC"] = "B ToC";
	$fieldToolTipsfreee_inventory_details["English"]["B_toC"] = "";
	$placeHoldersfreee_inventory_details["English"]["B_toC"] = "";
	$fieldLabelsfreee_inventory_details["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_inventory_details["English"]["created_at"] = "";
	$placeHoldersfreee_inventory_details["English"]["created_at"] = "";
	$fieldLabelsfreee_inventory_details["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_inventory_details["English"]["updated_at"] = "";
	$placeHoldersfreee_inventory_details["English"]["updated_at"] = "";
	if (count($fieldToolTipsfreee_inventory_details["English"]))
		$tdatafreee_inventory_details[".isUseToolTips"] = true;
}


	$tdatafreee_inventory_details[".NCSearch"] = true;



$tdatafreee_inventory_details[".shortTableName"] = "freee_inventory_details";
$tdatafreee_inventory_details[".nSecOptions"] = 0;
$tdatafreee_inventory_details[".recsPerRowPrint"] = 1;
$tdatafreee_inventory_details[".mainTableOwnerID"] = "";
$tdatafreee_inventory_details[".moveNext"] = 1;
$tdatafreee_inventory_details[".entityType"] = 0;

$tdatafreee_inventory_details[".strOriginalTableName"] = "freee_inventory_details";

	



$tdatafreee_inventory_details[".showAddInPopup"] = false;

$tdatafreee_inventory_details[".showEditInPopup"] = false;

$tdatafreee_inventory_details[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_inventory_details[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_inventory_details[".fieldsForRegister"] = array();

$tdatafreee_inventory_details[".listAjax"] = false;

	$tdatafreee_inventory_details[".audit"] = false;

	$tdatafreee_inventory_details[".locking"] = false;



$tdatafreee_inventory_details[".list"] = true;



$tdatafreee_inventory_details[".reorderRecordsByHeader"] = true;





$tdatafreee_inventory_details[".exportTo"] = true;



$tdatafreee_inventory_details[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_inventory_details[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_inventory_details[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_inventory_details[".searchSaving"] = false;
//

$tdatafreee_inventory_details[".showSearchPanel"] = true;
		$tdatafreee_inventory_details[".flexibleSearch"] = true;

$tdatafreee_inventory_details[".isUseAjaxSuggest"] = true;

$tdatafreee_inventory_details[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_inventory_details[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_inventory_details[".buttonsAdded"] = false;

$tdatafreee_inventory_details[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_inventory_details[".isUseTimeForSearch"] = false;





$tdatafreee_inventory_details[".allSearchFields"] = array();
$tdatafreee_inventory_details[".filterFields"] = array();
$tdatafreee_inventory_details[".requiredSearchFields"] = array();

$tdatafreee_inventory_details[".allSearchFields"][] = "id";
	$tdatafreee_inventory_details[".allSearchFields"][] = "date";
	$tdatafreee_inventory_details[".allSearchFields"][] = "K_toB";
	$tdatafreee_inventory_details[".allSearchFields"][] = "D_toB";
	$tdatafreee_inventory_details[".allSearchFields"][] = "J_toB";
	$tdatafreee_inventory_details[".allSearchFields"][] = "W_toB";
	$tdatafreee_inventory_details[".allSearchFields"][] = "B_toB";
	$tdatafreee_inventory_details[".allSearchFields"][] = "K_toC";
	$tdatafreee_inventory_details[".allSearchFields"][] = "D_toC";
	$tdatafreee_inventory_details[".allSearchFields"][] = "J_toC";
	$tdatafreee_inventory_details[".allSearchFields"][] = "W_toC";
	$tdatafreee_inventory_details[".allSearchFields"][] = "B_toC";
	$tdatafreee_inventory_details[".allSearchFields"][] = "created_at";
	$tdatafreee_inventory_details[".allSearchFields"][] = "updated_at";
	

$tdatafreee_inventory_details[".googleLikeFields"] = array();
$tdatafreee_inventory_details[".googleLikeFields"][] = "id";
$tdatafreee_inventory_details[".googleLikeFields"][] = "date";
$tdatafreee_inventory_details[".googleLikeFields"][] = "K_toB";
$tdatafreee_inventory_details[".googleLikeFields"][] = "D_toB";
$tdatafreee_inventory_details[".googleLikeFields"][] = "J_toB";
$tdatafreee_inventory_details[".googleLikeFields"][] = "W_toB";
$tdatafreee_inventory_details[".googleLikeFields"][] = "B_toB";
$tdatafreee_inventory_details[".googleLikeFields"][] = "K_toC";
$tdatafreee_inventory_details[".googleLikeFields"][] = "D_toC";
$tdatafreee_inventory_details[".googleLikeFields"][] = "J_toC";
$tdatafreee_inventory_details[".googleLikeFields"][] = "W_toC";
$tdatafreee_inventory_details[".googleLikeFields"][] = "B_toC";
$tdatafreee_inventory_details[".googleLikeFields"][] = "created_at";
$tdatafreee_inventory_details[".googleLikeFields"][] = "updated_at";


$tdatafreee_inventory_details[".advSearchFields"] = array();
$tdatafreee_inventory_details[".advSearchFields"][] = "id";
$tdatafreee_inventory_details[".advSearchFields"][] = "date";
$tdatafreee_inventory_details[".advSearchFields"][] = "K_toB";
$tdatafreee_inventory_details[".advSearchFields"][] = "D_toB";
$tdatafreee_inventory_details[".advSearchFields"][] = "J_toB";
$tdatafreee_inventory_details[".advSearchFields"][] = "W_toB";
$tdatafreee_inventory_details[".advSearchFields"][] = "B_toB";
$tdatafreee_inventory_details[".advSearchFields"][] = "K_toC";
$tdatafreee_inventory_details[".advSearchFields"][] = "D_toC";
$tdatafreee_inventory_details[".advSearchFields"][] = "J_toC";
$tdatafreee_inventory_details[".advSearchFields"][] = "W_toC";
$tdatafreee_inventory_details[".advSearchFields"][] = "B_toC";
$tdatafreee_inventory_details[".advSearchFields"][] = "created_at";
$tdatafreee_inventory_details[".advSearchFields"][] = "updated_at";

$tdatafreee_inventory_details[".tableType"] = "list";

$tdatafreee_inventory_details[".printerPageOrientation"] = 0;
$tdatafreee_inventory_details[".nPrinterPageScale"] = 100;

$tdatafreee_inventory_details[".nPrinterSplitRecords"] = 40;

$tdatafreee_inventory_details[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_inventory_details[".geocodingEnabled"] = false;





$tdatafreee_inventory_details[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_inventory_details[".pageSize"] = 20;

$tdatafreee_inventory_details[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_inventory_details[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_inventory_details[".orderindexes"] = array();

$tdatafreee_inventory_details[".sqlHead"] = "SELECT `id`,  	`date`,  	`K_toB`,  	`D_toB`,  	`J_toB`,  	`W_toB`,  	`B_toB`,  	`K_toC`,  	`D_toC`,  	`J_toC`,  	`W_toC`,  	`B_toC`,  	`created_at`,  	`updated_at`";
$tdatafreee_inventory_details[".sqlFrom"] = "FROM `freee_inventory_details`";
$tdatafreee_inventory_details[".sqlWhereExpr"] = "";
$tdatafreee_inventory_details[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_inventory_details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_inventory_details[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_inventory_details[".highlightSearchResults"] = true;

$tableKeysfreee_inventory_details = array();
$tableKeysfreee_inventory_details[] = "id";
$tdatafreee_inventory_details[".Keys"] = $tableKeysfreee_inventory_details;

$tdatafreee_inventory_details[".listFields"] = array();
$tdatafreee_inventory_details[".listFields"][] = "id";
$tdatafreee_inventory_details[".listFields"][] = "date";
$tdatafreee_inventory_details[".listFields"][] = "K_toB";
$tdatafreee_inventory_details[".listFields"][] = "D_toB";
$tdatafreee_inventory_details[".listFields"][] = "J_toB";
$tdatafreee_inventory_details[".listFields"][] = "W_toB";
$tdatafreee_inventory_details[".listFields"][] = "B_toB";
$tdatafreee_inventory_details[".listFields"][] = "K_toC";
$tdatafreee_inventory_details[".listFields"][] = "D_toC";
$tdatafreee_inventory_details[".listFields"][] = "J_toC";
$tdatafreee_inventory_details[".listFields"][] = "W_toC";
$tdatafreee_inventory_details[".listFields"][] = "B_toC";
$tdatafreee_inventory_details[".listFields"][] = "created_at";
$tdatafreee_inventory_details[".listFields"][] = "updated_at";

$tdatafreee_inventory_details[".hideMobileList"] = array();


$tdatafreee_inventory_details[".viewFields"] = array();
$tdatafreee_inventory_details[".viewFields"][] = "id";
$tdatafreee_inventory_details[".viewFields"][] = "date";
$tdatafreee_inventory_details[".viewFields"][] = "K_toB";
$tdatafreee_inventory_details[".viewFields"][] = "D_toB";
$tdatafreee_inventory_details[".viewFields"][] = "J_toB";
$tdatafreee_inventory_details[".viewFields"][] = "W_toB";
$tdatafreee_inventory_details[".viewFields"][] = "B_toB";
$tdatafreee_inventory_details[".viewFields"][] = "K_toC";
$tdatafreee_inventory_details[".viewFields"][] = "D_toC";
$tdatafreee_inventory_details[".viewFields"][] = "J_toC";
$tdatafreee_inventory_details[".viewFields"][] = "W_toC";
$tdatafreee_inventory_details[".viewFields"][] = "B_toC";
$tdatafreee_inventory_details[".viewFields"][] = "created_at";
$tdatafreee_inventory_details[".viewFields"][] = "updated_at";

$tdatafreee_inventory_details[".addFields"] = array();
$tdatafreee_inventory_details[".addFields"][] = "date";
$tdatafreee_inventory_details[".addFields"][] = "K_toB";
$tdatafreee_inventory_details[".addFields"][] = "D_toB";
$tdatafreee_inventory_details[".addFields"][] = "J_toB";
$tdatafreee_inventory_details[".addFields"][] = "W_toB";
$tdatafreee_inventory_details[".addFields"][] = "B_toB";
$tdatafreee_inventory_details[".addFields"][] = "K_toC";
$tdatafreee_inventory_details[".addFields"][] = "D_toC";
$tdatafreee_inventory_details[".addFields"][] = "J_toC";
$tdatafreee_inventory_details[".addFields"][] = "W_toC";
$tdatafreee_inventory_details[".addFields"][] = "B_toC";
$tdatafreee_inventory_details[".addFields"][] = "created_at";
$tdatafreee_inventory_details[".addFields"][] = "updated_at";

$tdatafreee_inventory_details[".masterListFields"] = array();
$tdatafreee_inventory_details[".masterListFields"][] = "id";
$tdatafreee_inventory_details[".masterListFields"][] = "date";
$tdatafreee_inventory_details[".masterListFields"][] = "K_toB";
$tdatafreee_inventory_details[".masterListFields"][] = "D_toB";
$tdatafreee_inventory_details[".masterListFields"][] = "J_toB";
$tdatafreee_inventory_details[".masterListFields"][] = "W_toB";
$tdatafreee_inventory_details[".masterListFields"][] = "B_toB";
$tdatafreee_inventory_details[".masterListFields"][] = "K_toC";
$tdatafreee_inventory_details[".masterListFields"][] = "D_toC";
$tdatafreee_inventory_details[".masterListFields"][] = "J_toC";
$tdatafreee_inventory_details[".masterListFields"][] = "W_toC";
$tdatafreee_inventory_details[".masterListFields"][] = "B_toC";
$tdatafreee_inventory_details[".masterListFields"][] = "created_at";
$tdatafreee_inventory_details[".masterListFields"][] = "updated_at";

$tdatafreee_inventory_details[".inlineAddFields"] = array();
$tdatafreee_inventory_details[".inlineAddFields"][] = "date";
$tdatafreee_inventory_details[".inlineAddFields"][] = "K_toB";
$tdatafreee_inventory_details[".inlineAddFields"][] = "D_toB";
$tdatafreee_inventory_details[".inlineAddFields"][] = "J_toB";
$tdatafreee_inventory_details[".inlineAddFields"][] = "W_toB";
$tdatafreee_inventory_details[".inlineAddFields"][] = "B_toB";
$tdatafreee_inventory_details[".inlineAddFields"][] = "K_toC";
$tdatafreee_inventory_details[".inlineAddFields"][] = "D_toC";
$tdatafreee_inventory_details[".inlineAddFields"][] = "J_toC";
$tdatafreee_inventory_details[".inlineAddFields"][] = "W_toC";
$tdatafreee_inventory_details[".inlineAddFields"][] = "B_toC";
$tdatafreee_inventory_details[".inlineAddFields"][] = "created_at";
$tdatafreee_inventory_details[".inlineAddFields"][] = "updated_at";

$tdatafreee_inventory_details[".editFields"] = array();
$tdatafreee_inventory_details[".editFields"][] = "date";
$tdatafreee_inventory_details[".editFields"][] = "K_toB";
$tdatafreee_inventory_details[".editFields"][] = "D_toB";
$tdatafreee_inventory_details[".editFields"][] = "J_toB";
$tdatafreee_inventory_details[".editFields"][] = "W_toB";
$tdatafreee_inventory_details[".editFields"][] = "B_toB";
$tdatafreee_inventory_details[".editFields"][] = "K_toC";
$tdatafreee_inventory_details[".editFields"][] = "D_toC";
$tdatafreee_inventory_details[".editFields"][] = "J_toC";
$tdatafreee_inventory_details[".editFields"][] = "W_toC";
$tdatafreee_inventory_details[".editFields"][] = "B_toC";
$tdatafreee_inventory_details[".editFields"][] = "created_at";
$tdatafreee_inventory_details[".editFields"][] = "updated_at";

$tdatafreee_inventory_details[".inlineEditFields"] = array();
$tdatafreee_inventory_details[".inlineEditFields"][] = "date";
$tdatafreee_inventory_details[".inlineEditFields"][] = "K_toB";
$tdatafreee_inventory_details[".inlineEditFields"][] = "D_toB";
$tdatafreee_inventory_details[".inlineEditFields"][] = "J_toB";
$tdatafreee_inventory_details[".inlineEditFields"][] = "W_toB";
$tdatafreee_inventory_details[".inlineEditFields"][] = "B_toB";
$tdatafreee_inventory_details[".inlineEditFields"][] = "K_toC";
$tdatafreee_inventory_details[".inlineEditFields"][] = "D_toC";
$tdatafreee_inventory_details[".inlineEditFields"][] = "J_toC";
$tdatafreee_inventory_details[".inlineEditFields"][] = "W_toC";
$tdatafreee_inventory_details[".inlineEditFields"][] = "B_toC";
$tdatafreee_inventory_details[".inlineEditFields"][] = "created_at";
$tdatafreee_inventory_details[".inlineEditFields"][] = "updated_at";

$tdatafreee_inventory_details[".updateSelectedFields"] = array();
$tdatafreee_inventory_details[".updateSelectedFields"][] = "date";
$tdatafreee_inventory_details[".updateSelectedFields"][] = "K_toB";
$tdatafreee_inventory_details[".updateSelectedFields"][] = "D_toB";
$tdatafreee_inventory_details[".updateSelectedFields"][] = "J_toB";
$tdatafreee_inventory_details[".updateSelectedFields"][] = "W_toB";
$tdatafreee_inventory_details[".updateSelectedFields"][] = "B_toB";
$tdatafreee_inventory_details[".updateSelectedFields"][] = "K_toC";
$tdatafreee_inventory_details[".updateSelectedFields"][] = "D_toC";
$tdatafreee_inventory_details[".updateSelectedFields"][] = "J_toC";
$tdatafreee_inventory_details[".updateSelectedFields"][] = "W_toC";
$tdatafreee_inventory_details[".updateSelectedFields"][] = "B_toC";
$tdatafreee_inventory_details[".updateSelectedFields"][] = "created_at";
$tdatafreee_inventory_details[".updateSelectedFields"][] = "updated_at";


$tdatafreee_inventory_details[".exportFields"] = array();
$tdatafreee_inventory_details[".exportFields"][] = "id";
$tdatafreee_inventory_details[".exportFields"][] = "date";
$tdatafreee_inventory_details[".exportFields"][] = "K_toB";
$tdatafreee_inventory_details[".exportFields"][] = "D_toB";
$tdatafreee_inventory_details[".exportFields"][] = "J_toB";
$tdatafreee_inventory_details[".exportFields"][] = "W_toB";
$tdatafreee_inventory_details[".exportFields"][] = "B_toB";
$tdatafreee_inventory_details[".exportFields"][] = "K_toC";
$tdatafreee_inventory_details[".exportFields"][] = "D_toC";
$tdatafreee_inventory_details[".exportFields"][] = "J_toC";
$tdatafreee_inventory_details[".exportFields"][] = "W_toC";
$tdatafreee_inventory_details[".exportFields"][] = "B_toC";
$tdatafreee_inventory_details[".exportFields"][] = "created_at";
$tdatafreee_inventory_details[".exportFields"][] = "updated_at";

$tdatafreee_inventory_details[".importFields"] = array();
$tdatafreee_inventory_details[".importFields"][] = "id";
$tdatafreee_inventory_details[".importFields"][] = "date";
$tdatafreee_inventory_details[".importFields"][] = "K_toB";
$tdatafreee_inventory_details[".importFields"][] = "D_toB";
$tdatafreee_inventory_details[".importFields"][] = "J_toB";
$tdatafreee_inventory_details[".importFields"][] = "W_toB";
$tdatafreee_inventory_details[".importFields"][] = "B_toB";
$tdatafreee_inventory_details[".importFields"][] = "K_toC";
$tdatafreee_inventory_details[".importFields"][] = "D_toC";
$tdatafreee_inventory_details[".importFields"][] = "J_toC";
$tdatafreee_inventory_details[".importFields"][] = "W_toC";
$tdatafreee_inventory_details[".importFields"][] = "B_toC";
$tdatafreee_inventory_details[".importFields"][] = "created_at";
$tdatafreee_inventory_details[".importFields"][] = "updated_at";

$tdatafreee_inventory_details[".printFields"] = array();
$tdatafreee_inventory_details[".printFields"][] = "id";
$tdatafreee_inventory_details[".printFields"][] = "date";
$tdatafreee_inventory_details[".printFields"][] = "K_toB";
$tdatafreee_inventory_details[".printFields"][] = "D_toB";
$tdatafreee_inventory_details[".printFields"][] = "J_toB";
$tdatafreee_inventory_details[".printFields"][] = "W_toB";
$tdatafreee_inventory_details[".printFields"][] = "B_toB";
$tdatafreee_inventory_details[".printFields"][] = "K_toC";
$tdatafreee_inventory_details[".printFields"][] = "D_toC";
$tdatafreee_inventory_details[".printFields"][] = "J_toC";
$tdatafreee_inventory_details[".printFields"][] = "W_toC";
$tdatafreee_inventory_details[".printFields"][] = "B_toC";
$tdatafreee_inventory_details[".printFields"][] = "created_at";
$tdatafreee_inventory_details[".printFields"][] = "updated_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_inventory_details";
	$fdata["Label"] = GetFieldLabel("freee_inventory_details","id");
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




	$tdatafreee_inventory_details["id"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "freee_inventory_details";
	$fdata["Label"] = GetFieldLabel("freee_inventory_details","date");
	$fdata["FieldType"] = 7;

	
	
	
			
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

		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
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




	$tdatafreee_inventory_details["date"] = $fdata;
//	K_toB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "K_toB";
	$fdata["GoodName"] = "K_toB";
	$fdata["ownerTable"] = "freee_inventory_details";
	$fdata["Label"] = GetFieldLabel("freee_inventory_details","K_toB");
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

		$fdata["strField"] = "K_toB";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`K_toB`";

	
	
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




	$tdatafreee_inventory_details["K_toB"] = $fdata;
//	D_toB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "D_toB";
	$fdata["GoodName"] = "D_toB";
	$fdata["ownerTable"] = "freee_inventory_details";
	$fdata["Label"] = GetFieldLabel("freee_inventory_details","D_toB");
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

		$fdata["strField"] = "D_toB";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`D_toB`";

	
	
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




	$tdatafreee_inventory_details["D_toB"] = $fdata;
//	J_toB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "J_toB";
	$fdata["GoodName"] = "J_toB";
	$fdata["ownerTable"] = "freee_inventory_details";
	$fdata["Label"] = GetFieldLabel("freee_inventory_details","J_toB");
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

		$fdata["strField"] = "J_toB";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`J_toB`";

	
	
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




	$tdatafreee_inventory_details["J_toB"] = $fdata;
//	W_toB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "W_toB";
	$fdata["GoodName"] = "W_toB";
	$fdata["ownerTable"] = "freee_inventory_details";
	$fdata["Label"] = GetFieldLabel("freee_inventory_details","W_toB");
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

		$fdata["strField"] = "W_toB";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`W_toB`";

	
	
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




	$tdatafreee_inventory_details["W_toB"] = $fdata;
//	B_toB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "B_toB";
	$fdata["GoodName"] = "B_toB";
	$fdata["ownerTable"] = "freee_inventory_details";
	$fdata["Label"] = GetFieldLabel("freee_inventory_details","B_toB");
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

		$fdata["strField"] = "B_toB";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`B_toB`";

	
	
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




	$tdatafreee_inventory_details["B_toB"] = $fdata;
//	K_toC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "K_toC";
	$fdata["GoodName"] = "K_toC";
	$fdata["ownerTable"] = "freee_inventory_details";
	$fdata["Label"] = GetFieldLabel("freee_inventory_details","K_toC");
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

		$fdata["strField"] = "K_toC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`K_toC`";

	
	
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




	$tdatafreee_inventory_details["K_toC"] = $fdata;
//	D_toC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "D_toC";
	$fdata["GoodName"] = "D_toC";
	$fdata["ownerTable"] = "freee_inventory_details";
	$fdata["Label"] = GetFieldLabel("freee_inventory_details","D_toC");
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

		$fdata["strField"] = "D_toC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`D_toC`";

	
	
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




	$tdatafreee_inventory_details["D_toC"] = $fdata;
//	J_toC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "J_toC";
	$fdata["GoodName"] = "J_toC";
	$fdata["ownerTable"] = "freee_inventory_details";
	$fdata["Label"] = GetFieldLabel("freee_inventory_details","J_toC");
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

		$fdata["strField"] = "J_toC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`J_toC`";

	
	
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




	$tdatafreee_inventory_details["J_toC"] = $fdata;
//	W_toC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "W_toC";
	$fdata["GoodName"] = "W_toC";
	$fdata["ownerTable"] = "freee_inventory_details";
	$fdata["Label"] = GetFieldLabel("freee_inventory_details","W_toC");
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

		$fdata["strField"] = "W_toC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`W_toC`";

	
	
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




	$tdatafreee_inventory_details["W_toC"] = $fdata;
//	B_toC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "B_toC";
	$fdata["GoodName"] = "B_toC";
	$fdata["ownerTable"] = "freee_inventory_details";
	$fdata["Label"] = GetFieldLabel("freee_inventory_details","B_toC");
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

		$fdata["strField"] = "B_toC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`B_toC`";

	
	
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




	$tdatafreee_inventory_details["B_toC"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_inventory_details";
	$fdata["Label"] = GetFieldLabel("freee_inventory_details","created_at");
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




	$tdatafreee_inventory_details["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_inventory_details";
	$fdata["Label"] = GetFieldLabel("freee_inventory_details","updated_at");
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




	$tdatafreee_inventory_details["updated_at"] = $fdata;


$tables_data["freee_inventory_details"]=&$tdatafreee_inventory_details;
$field_labels["freee_inventory_details"] = &$fieldLabelsfreee_inventory_details;
$fieldToolTips["freee_inventory_details"] = &$fieldToolTipsfreee_inventory_details;
$placeHolders["freee_inventory_details"] = &$placeHoldersfreee_inventory_details;
$page_titles["freee_inventory_details"] = &$pageTitlesfreee_inventory_details;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_inventory_details"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_inventory_details"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_inventory_details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`date`,  	`K_toB`,  	`D_toB`,  	`J_toB`,  	`W_toB`,  	`B_toB`,  	`K_toC`,  	`D_toC`,  	`J_toC`,  	`W_toC`,  	`B_toC`,  	`created_at`,  	`updated_at`";
$proto0["m_strFrom"] = "FROM `freee_inventory_details`";
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
	"m_strTable" => "freee_inventory_details",
	"m_srcTableName" => "freee_inventory_details"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_inventory_details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "freee_inventory_details",
	"m_srcTableName" => "freee_inventory_details"
));

$proto8["m_sql"] = "`date`";
$proto8["m_srcTableName"] = "freee_inventory_details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "K_toB",
	"m_strTable" => "freee_inventory_details",
	"m_srcTableName" => "freee_inventory_details"
));

$proto10["m_sql"] = "`K_toB`";
$proto10["m_srcTableName"] = "freee_inventory_details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "D_toB",
	"m_strTable" => "freee_inventory_details",
	"m_srcTableName" => "freee_inventory_details"
));

$proto12["m_sql"] = "`D_toB`";
$proto12["m_srcTableName"] = "freee_inventory_details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "J_toB",
	"m_strTable" => "freee_inventory_details",
	"m_srcTableName" => "freee_inventory_details"
));

$proto14["m_sql"] = "`J_toB`";
$proto14["m_srcTableName"] = "freee_inventory_details";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "W_toB",
	"m_strTable" => "freee_inventory_details",
	"m_srcTableName" => "freee_inventory_details"
));

$proto16["m_sql"] = "`W_toB`";
$proto16["m_srcTableName"] = "freee_inventory_details";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "B_toB",
	"m_strTable" => "freee_inventory_details",
	"m_srcTableName" => "freee_inventory_details"
));

$proto18["m_sql"] = "`B_toB`";
$proto18["m_srcTableName"] = "freee_inventory_details";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "K_toC",
	"m_strTable" => "freee_inventory_details",
	"m_srcTableName" => "freee_inventory_details"
));

$proto20["m_sql"] = "`K_toC`";
$proto20["m_srcTableName"] = "freee_inventory_details";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "D_toC",
	"m_strTable" => "freee_inventory_details",
	"m_srcTableName" => "freee_inventory_details"
));

$proto22["m_sql"] = "`D_toC`";
$proto22["m_srcTableName"] = "freee_inventory_details";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "J_toC",
	"m_strTable" => "freee_inventory_details",
	"m_srcTableName" => "freee_inventory_details"
));

$proto24["m_sql"] = "`J_toC`";
$proto24["m_srcTableName"] = "freee_inventory_details";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "W_toC",
	"m_strTable" => "freee_inventory_details",
	"m_srcTableName" => "freee_inventory_details"
));

$proto26["m_sql"] = "`W_toC`";
$proto26["m_srcTableName"] = "freee_inventory_details";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "B_toC",
	"m_strTable" => "freee_inventory_details",
	"m_srcTableName" => "freee_inventory_details"
));

$proto28["m_sql"] = "`B_toC`";
$proto28["m_srcTableName"] = "freee_inventory_details";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_inventory_details",
	"m_srcTableName" => "freee_inventory_details"
));

$proto30["m_sql"] = "`created_at`";
$proto30["m_srcTableName"] = "freee_inventory_details";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_inventory_details",
	"m_srcTableName" => "freee_inventory_details"
));

$proto32["m_sql"] = "`updated_at`";
$proto32["m_srcTableName"] = "freee_inventory_details";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "freee_inventory_details";
$proto35["m_srcTableName"] = "freee_inventory_details";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "date";
$proto35["m_columns"][] = "K_toB";
$proto35["m_columns"][] = "D_toB";
$proto35["m_columns"][] = "J_toB";
$proto35["m_columns"][] = "W_toB";
$proto35["m_columns"][] = "B_toB";
$proto35["m_columns"][] = "K_toC";
$proto35["m_columns"][] = "D_toC";
$proto35["m_columns"][] = "J_toC";
$proto35["m_columns"][] = "W_toC";
$proto35["m_columns"][] = "B_toC";
$proto35["m_columns"][] = "created_at";
$proto35["m_columns"][] = "updated_at";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "`freee_inventory_details`";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "freee_inventory_details";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="freee_inventory_details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_inventory_details = createSqlQuery_freee_inventory_details();


	
		;

														

$tdatafreee_inventory_details[".sqlquery"] = $queryData_freee_inventory_details;

$tableEvents["freee_inventory_details"] = new eventsBase;
$tdatafreee_inventory_details[".hasEvents"] = false;

?>