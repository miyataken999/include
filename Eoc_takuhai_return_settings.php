<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_takuhai_return = array();
	$tdataEoc_takuhai_return[".truncateText"] = true;
	$tdataEoc_takuhai_return[".NumberOfChars"] = 80;
	$tdataEoc_takuhai_return[".ShortName"] = "Eoc_takuhai_return";
	$tdataEoc_takuhai_return[".OwnerID"] = "";
	$tdataEoc_takuhai_return[".OriginalTable"] = "Eoc_takuhai_return";

//	field labels
$fieldLabelsEoc_takuhai_return = array();
$fieldToolTipsEoc_takuhai_return = array();
$pageTitlesEoc_takuhai_return = array();
$placeHoldersEoc_takuhai_return = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_takuhai_return["Japanese"] = array();
	$fieldToolTipsEoc_takuhai_return["Japanese"] = array();
	$placeHoldersEoc_takuhai_return["Japanese"] = array();
	$pageTitlesEoc_takuhai_return["Japanese"] = array();
	$fieldLabelsEoc_takuhai_return["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_return["Japanese"]["id"] = "";
	$placeHoldersEoc_takuhai_return["Japanese"]["id"] = "";
	$fieldLabelsEoc_takuhai_return["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsEoc_takuhai_return["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc_takuhai_return["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc_takuhai_return["Japanese"]["Eoc_takuhai_id"] = "宅配取引ID";
	$fieldToolTipsEoc_takuhai_return["Japanese"]["Eoc_takuhai_id"] = "";
	$placeHoldersEoc_takuhai_return["Japanese"]["Eoc_takuhai_id"] = "";
	$fieldLabelsEoc_takuhai_return["Japanese"]["is_cash_on_delivery"] = "着払いチェック";
	$fieldToolTipsEoc_takuhai_return["Japanese"]["is_cash_on_delivery"] = "";
	$placeHoldersEoc_takuhai_return["Japanese"]["is_cash_on_delivery"] = "";
	$fieldLabelsEoc_takuhai_return["Japanese"]["comment"] = "コメント";
	$fieldToolTipsEoc_takuhai_return["Japanese"]["comment"] = "";
	$placeHoldersEoc_takuhai_return["Japanese"]["comment"] = "";
	$fieldLabelsEoc_takuhai_return["Japanese"]["num_of_box"] = "箱数";
	$fieldToolTipsEoc_takuhai_return["Japanese"]["num_of_box"] = "";
	$placeHoldersEoc_takuhai_return["Japanese"]["num_of_box"] = "";
	$fieldLabelsEoc_takuhai_return["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsEoc_takuhai_return["Japanese"]["created_at"] = "";
	$placeHoldersEoc_takuhai_return["Japanese"]["created_at"] = "";
	$fieldLabelsEoc_takuhai_return["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsEoc_takuhai_return["Japanese"]["created_by"] = "";
	$placeHoldersEoc_takuhai_return["Japanese"]["created_by"] = "";
	$fieldLabelsEoc_takuhai_return["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_takuhai_return["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_takuhai_return["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_takuhai_return["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsEoc_takuhai_return["Japanese"]["updated_by"] = "";
	$placeHoldersEoc_takuhai_return["Japanese"]["updated_by"] = "";
	$fieldLabelsEoc_takuhai_return["Japanese"]["returned_at"] = "返却日";
	$fieldToolTipsEoc_takuhai_return["Japanese"]["returned_at"] = "";
	$placeHoldersEoc_takuhai_return["Japanese"]["returned_at"] = "";
	$fieldLabelsEoc_takuhai_return["Japanese"]["returned_by"] = "返却担当者";
	$fieldToolTipsEoc_takuhai_return["Japanese"]["returned_by"] = "";
	$placeHoldersEoc_takuhai_return["Japanese"]["returned_by"] = "";
	$fieldLabelsEoc_takuhai_return["Japanese"]["stored_at"] = "梱包日";
	$fieldToolTipsEoc_takuhai_return["Japanese"]["stored_at"] = "";
	$placeHoldersEoc_takuhai_return["Japanese"]["stored_at"] = "";
	$fieldLabelsEoc_takuhai_return["Japanese"]["stored_by"] = "梱包担当者";
	$fieldToolTipsEoc_takuhai_return["Japanese"]["stored_by"] = "";
	$placeHoldersEoc_takuhai_return["Japanese"]["stored_by"] = "";
	$fieldLabelsEoc_takuhai_return["Japanese"]["link"] = "Link";
	$fieldToolTipsEoc_takuhai_return["Japanese"]["link"] = "";
	$placeHoldersEoc_takuhai_return["Japanese"]["link"] = "";
	if (count($fieldToolTipsEoc_takuhai_return["Japanese"]))
		$tdataEoc_takuhai_return[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_takuhai_return[""] = array();
	$fieldToolTipsEoc_takuhai_return[""] = array();
	$placeHoldersEoc_takuhai_return[""] = array();
	$pageTitlesEoc_takuhai_return[""] = array();
	$fieldLabelsEoc_takuhai_return[""]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_return[""]["id"] = "";
	$placeHoldersEoc_takuhai_return[""]["id"] = "";
	$fieldLabelsEoc_takuhai_return[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_takuhai_return[""]["ecc_id"] = "";
	$placeHoldersEoc_takuhai_return[""]["ecc_id"] = "";
	$fieldLabelsEoc_takuhai_return[""]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipsEoc_takuhai_return[""]["Eoc_takuhai_id"] = "";
	$placeHoldersEoc_takuhai_return[""]["Eoc_takuhai_id"] = "";
	$fieldLabelsEoc_takuhai_return[""]["is_cash_on_delivery"] = "Is Cash On Delivery";
	$fieldToolTipsEoc_takuhai_return[""]["is_cash_on_delivery"] = "";
	$placeHoldersEoc_takuhai_return[""]["is_cash_on_delivery"] = "";
	$fieldLabelsEoc_takuhai_return[""]["comment"] = "Comment";
	$fieldToolTipsEoc_takuhai_return[""]["comment"] = "";
	$placeHoldersEoc_takuhai_return[""]["comment"] = "";
	$fieldLabelsEoc_takuhai_return[""]["num_of_box"] = "Num Of Box";
	$fieldToolTipsEoc_takuhai_return[""]["num_of_box"] = "";
	$placeHoldersEoc_takuhai_return[""]["num_of_box"] = "";
	$fieldLabelsEoc_takuhai_return[""]["created_at"] = "Created At";
	$fieldToolTipsEoc_takuhai_return[""]["created_at"] = "";
	$placeHoldersEoc_takuhai_return[""]["created_at"] = "";
	$fieldLabelsEoc_takuhai_return[""]["created_by"] = "Created By";
	$fieldToolTipsEoc_takuhai_return[""]["created_by"] = "";
	$placeHoldersEoc_takuhai_return[""]["created_by"] = "";
	$fieldLabelsEoc_takuhai_return[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_takuhai_return[""]["updated_at"] = "";
	$placeHoldersEoc_takuhai_return[""]["updated_at"] = "";
	$fieldLabelsEoc_takuhai_return[""]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_takuhai_return[""]["updated_by"] = "";
	$placeHoldersEoc_takuhai_return[""]["updated_by"] = "";
	$fieldLabelsEoc_takuhai_return[""]["returned_at"] = "Returned At";
	$fieldToolTipsEoc_takuhai_return[""]["returned_at"] = "";
	$placeHoldersEoc_takuhai_return[""]["returned_at"] = "";
	$fieldLabelsEoc_takuhai_return[""]["returned_by"] = "Returned By";
	$fieldToolTipsEoc_takuhai_return[""]["returned_by"] = "";
	$placeHoldersEoc_takuhai_return[""]["returned_by"] = "";
	$fieldLabelsEoc_takuhai_return[""]["stored_at"] = "Stored At";
	$fieldToolTipsEoc_takuhai_return[""]["stored_at"] = "";
	$placeHoldersEoc_takuhai_return[""]["stored_at"] = "";
	$fieldLabelsEoc_takuhai_return[""]["stored_by"] = "Stored By";
	$fieldToolTipsEoc_takuhai_return[""]["stored_by"] = "";
	$placeHoldersEoc_takuhai_return[""]["stored_by"] = "";
	$fieldLabelsEoc_takuhai_return[""]["link"] = "Link";
	$fieldToolTipsEoc_takuhai_return[""]["link"] = "";
	$placeHoldersEoc_takuhai_return[""]["link"] = "";
	if (count($fieldToolTipsEoc_takuhai_return[""]))
		$tdataEoc_takuhai_return[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_takuhai_return["English"] = array();
	$fieldToolTipsEoc_takuhai_return["English"] = array();
	$placeHoldersEoc_takuhai_return["English"] = array();
	$pageTitlesEoc_takuhai_return["English"] = array();
	$fieldLabelsEoc_takuhai_return["English"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai_return["English"]["id"] = "";
	$placeHoldersEoc_takuhai_return["English"]["id"] = "";
	$fieldLabelsEoc_takuhai_return["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_takuhai_return["English"]["ecc_id"] = "";
	$placeHoldersEoc_takuhai_return["English"]["ecc_id"] = "";
	$fieldLabelsEoc_takuhai_return["English"]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipsEoc_takuhai_return["English"]["Eoc_takuhai_id"] = "";
	$placeHoldersEoc_takuhai_return["English"]["Eoc_takuhai_id"] = "";
	$fieldLabelsEoc_takuhai_return["English"]["is_cash_on_delivery"] = "Is Cash On Delivery";
	$fieldToolTipsEoc_takuhai_return["English"]["is_cash_on_delivery"] = "";
	$placeHoldersEoc_takuhai_return["English"]["is_cash_on_delivery"] = "";
	$fieldLabelsEoc_takuhai_return["English"]["comment"] = "Comment";
	$fieldToolTipsEoc_takuhai_return["English"]["comment"] = "";
	$placeHoldersEoc_takuhai_return["English"]["comment"] = "";
	$fieldLabelsEoc_takuhai_return["English"]["num_of_box"] = "Num Of Box";
	$fieldToolTipsEoc_takuhai_return["English"]["num_of_box"] = "";
	$placeHoldersEoc_takuhai_return["English"]["num_of_box"] = "";
	$fieldLabelsEoc_takuhai_return["English"]["created_at"] = "Created At";
	$fieldToolTipsEoc_takuhai_return["English"]["created_at"] = "";
	$placeHoldersEoc_takuhai_return["English"]["created_at"] = "";
	$fieldLabelsEoc_takuhai_return["English"]["created_by"] = "Created By";
	$fieldToolTipsEoc_takuhai_return["English"]["created_by"] = "";
	$placeHoldersEoc_takuhai_return["English"]["created_by"] = "";
	$fieldLabelsEoc_takuhai_return["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_takuhai_return["English"]["updated_at"] = "";
	$placeHoldersEoc_takuhai_return["English"]["updated_at"] = "";
	$fieldLabelsEoc_takuhai_return["English"]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_takuhai_return["English"]["updated_by"] = "";
	$placeHoldersEoc_takuhai_return["English"]["updated_by"] = "";
	$fieldLabelsEoc_takuhai_return["English"]["returned_at"] = "Returned At";
	$fieldToolTipsEoc_takuhai_return["English"]["returned_at"] = "";
	$placeHoldersEoc_takuhai_return["English"]["returned_at"] = "";
	$fieldLabelsEoc_takuhai_return["English"]["returned_by"] = "Returned By";
	$fieldToolTipsEoc_takuhai_return["English"]["returned_by"] = "";
	$placeHoldersEoc_takuhai_return["English"]["returned_by"] = "";
	$fieldLabelsEoc_takuhai_return["English"]["stored_at"] = "Stored At";
	$fieldToolTipsEoc_takuhai_return["English"]["stored_at"] = "";
	$placeHoldersEoc_takuhai_return["English"]["stored_at"] = "";
	$fieldLabelsEoc_takuhai_return["English"]["stored_by"] = "Stored By";
	$fieldToolTipsEoc_takuhai_return["English"]["stored_by"] = "";
	$placeHoldersEoc_takuhai_return["English"]["stored_by"] = "";
	$fieldLabelsEoc_takuhai_return["English"]["link"] = "Link";
	$fieldToolTipsEoc_takuhai_return["English"]["link"] = "";
	$placeHoldersEoc_takuhai_return["English"]["link"] = "";
	if (count($fieldToolTipsEoc_takuhai_return["English"]))
		$tdataEoc_takuhai_return[".isUseToolTips"] = true;
}


	$tdataEoc_takuhai_return[".NCSearch"] = true;



$tdataEoc_takuhai_return[".shortTableName"] = "Eoc_takuhai_return";
$tdataEoc_takuhai_return[".nSecOptions"] = 0;
$tdataEoc_takuhai_return[".recsPerRowPrint"] = 1;
$tdataEoc_takuhai_return[".mainTableOwnerID"] = "";
$tdataEoc_takuhai_return[".moveNext"] = 1;
$tdataEoc_takuhai_return[".entityType"] = 0;

$tdataEoc_takuhai_return[".strOriginalTableName"] = "Eoc_takuhai_return";

	



$tdataEoc_takuhai_return[".showAddInPopup"] = false;

$tdataEoc_takuhai_return[".showEditInPopup"] = false;

$tdataEoc_takuhai_return[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_takuhai_return[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_takuhai_return[".fieldsForRegister"] = array();

$tdataEoc_takuhai_return[".listAjax"] = false;

	$tdataEoc_takuhai_return[".audit"] = true;

	$tdataEoc_takuhai_return[".locking"] = false;



$tdataEoc_takuhai_return[".list"] = true;

$tdataEoc_takuhai_return[".inlineEdit"] = true;


$tdataEoc_takuhai_return[".reorderRecordsByHeader"] = true;



$tdataEoc_takuhai_return[".inlineAdd"] = true;

$tdataEoc_takuhai_return[".import"] = true;

$tdataEoc_takuhai_return[".exportTo"] = true;


$tdataEoc_takuhai_return[".delete"] = true;

$tdataEoc_takuhai_return[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_takuhai_return[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_takuhai_return[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_takuhai_return[".searchSaving"] = false;
//

$tdataEoc_takuhai_return[".showSearchPanel"] = true;
		$tdataEoc_takuhai_return[".flexibleSearch"] = true;

$tdataEoc_takuhai_return[".isUseAjaxSuggest"] = true;

$tdataEoc_takuhai_return[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataEoc_takuhai_return[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_takuhai_return[".buttonsAdded"] = false;

$tdataEoc_takuhai_return[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_takuhai_return[".isUseTimeForSearch"] = false;




$tdataEoc_takuhai_return[".detailsLinksOnList"] = "1";

$tdataEoc_takuhai_return[".allSearchFields"] = array();
$tdataEoc_takuhai_return[".filterFields"] = array();
$tdataEoc_takuhai_return[".requiredSearchFields"] = array();

$tdataEoc_takuhai_return[".allSearchFields"][] = "link";
	$tdataEoc_takuhai_return[".allSearchFields"][] = "id";
	$tdataEoc_takuhai_return[".allSearchFields"][] = "ecc_id";
	$tdataEoc_takuhai_return[".allSearchFields"][] = "Eoc_takuhai_id";
	$tdataEoc_takuhai_return[".allSearchFields"][] = "is_cash_on_delivery";
	$tdataEoc_takuhai_return[".allSearchFields"][] = "comment";
	$tdataEoc_takuhai_return[".allSearchFields"][] = "num_of_box";
	$tdataEoc_takuhai_return[".allSearchFields"][] = "stored_by";
	$tdataEoc_takuhai_return[".allSearchFields"][] = "stored_at";
	$tdataEoc_takuhai_return[".allSearchFields"][] = "returned_by";
	$tdataEoc_takuhai_return[".allSearchFields"][] = "returned_at";
	$tdataEoc_takuhai_return[".allSearchFields"][] = "created_by";
	$tdataEoc_takuhai_return[".allSearchFields"][] = "created_at";
	$tdataEoc_takuhai_return[".allSearchFields"][] = "updated_by";
	$tdataEoc_takuhai_return[".allSearchFields"][] = "updated_at";
	

$tdataEoc_takuhai_return[".googleLikeFields"] = array();
$tdataEoc_takuhai_return[".googleLikeFields"][] = "link";
$tdataEoc_takuhai_return[".googleLikeFields"][] = "id";
$tdataEoc_takuhai_return[".googleLikeFields"][] = "ecc_id";
$tdataEoc_takuhai_return[".googleLikeFields"][] = "Eoc_takuhai_id";
$tdataEoc_takuhai_return[".googleLikeFields"][] = "is_cash_on_delivery";
$tdataEoc_takuhai_return[".googleLikeFields"][] = "comment";
$tdataEoc_takuhai_return[".googleLikeFields"][] = "num_of_box";
$tdataEoc_takuhai_return[".googleLikeFields"][] = "created_at";
$tdataEoc_takuhai_return[".googleLikeFields"][] = "created_by";
$tdataEoc_takuhai_return[".googleLikeFields"][] = "updated_at";
$tdataEoc_takuhai_return[".googleLikeFields"][] = "updated_by";
$tdataEoc_takuhai_return[".googleLikeFields"][] = "returned_at";
$tdataEoc_takuhai_return[".googleLikeFields"][] = "returned_by";
$tdataEoc_takuhai_return[".googleLikeFields"][] = "stored_at";
$tdataEoc_takuhai_return[".googleLikeFields"][] = "stored_by";

$tdataEoc_takuhai_return[".panelSearchFields"] = array();
$tdataEoc_takuhai_return[".searchPanelOptions"] = array();
$tdataEoc_takuhai_return[".panelSearchFields"][] = "id";
	$tdataEoc_takuhai_return[".panelSearchFields"][] = "ecc_id";
	$tdataEoc_takuhai_return[".panelSearchFields"][] = "Eoc_takuhai_id";
	
$tdataEoc_takuhai_return[".advSearchFields"] = array();
$tdataEoc_takuhai_return[".advSearchFields"][] = "link";
$tdataEoc_takuhai_return[".advSearchFields"][] = "id";
$tdataEoc_takuhai_return[".advSearchFields"][] = "ecc_id";
$tdataEoc_takuhai_return[".advSearchFields"][] = "Eoc_takuhai_id";
$tdataEoc_takuhai_return[".advSearchFields"][] = "is_cash_on_delivery";
$tdataEoc_takuhai_return[".advSearchFields"][] = "comment";
$tdataEoc_takuhai_return[".advSearchFields"][] = "num_of_box";
$tdataEoc_takuhai_return[".advSearchFields"][] = "stored_by";
$tdataEoc_takuhai_return[".advSearchFields"][] = "stored_at";
$tdataEoc_takuhai_return[".advSearchFields"][] = "returned_by";
$tdataEoc_takuhai_return[".advSearchFields"][] = "returned_at";
$tdataEoc_takuhai_return[".advSearchFields"][] = "created_by";
$tdataEoc_takuhai_return[".advSearchFields"][] = "created_at";
$tdataEoc_takuhai_return[".advSearchFields"][] = "updated_by";
$tdataEoc_takuhai_return[".advSearchFields"][] = "updated_at";

$tdataEoc_takuhai_return[".tableType"] = "list";

$tdataEoc_takuhai_return[".printerPageOrientation"] = 0;
$tdataEoc_takuhai_return[".nPrinterPageScale"] = 100;

$tdataEoc_takuhai_return[".nPrinterSplitRecords"] = 40;

$tdataEoc_takuhai_return[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_takuhai_return[".geocodingEnabled"] = false;





$tdataEoc_takuhai_return[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_takuhai_return[".pageSize"] = 20;

$tdataEoc_takuhai_return[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_takuhai_return[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_takuhai_return[".orderindexes"] = array();
$tdataEoc_takuhai_return[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`id`");

$tdataEoc_takuhai_return[".sqlHead"] = "SELECT '' as `link`,  `id`,  `ecc_id`,  `Eoc_takuhai_id`,  `is_cash_on_delivery`,  `comment`,  `num_of_box`,  `created_at`,  `created_by`,  `updated_at`,  `updated_by`,  `returned_at`,  `returned_by`,  `stored_at`,  `stored_by`";
$tdataEoc_takuhai_return[".sqlFrom"] = "FROM `Eoc_takuhai_return`";
$tdataEoc_takuhai_return[".sqlWhereExpr"] = "";
$tdataEoc_takuhai_return[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_takuhai_return[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_takuhai_return[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_takuhai_return[".highlightSearchResults"] = true;

$tableKeysEoc_takuhai_return = array();
$tableKeysEoc_takuhai_return[] = "id";
$tdataEoc_takuhai_return[".Keys"] = $tableKeysEoc_takuhai_return;

$tdataEoc_takuhai_return[".listFields"] = array();
$tdataEoc_takuhai_return[".listFields"][] = "link";
$tdataEoc_takuhai_return[".listFields"][] = "id";
$tdataEoc_takuhai_return[".listFields"][] = "ecc_id";
$tdataEoc_takuhai_return[".listFields"][] = "Eoc_takuhai_id";
$tdataEoc_takuhai_return[".listFields"][] = "is_cash_on_delivery";
$tdataEoc_takuhai_return[".listFields"][] = "comment";
$tdataEoc_takuhai_return[".listFields"][] = "num_of_box";
$tdataEoc_takuhai_return[".listFields"][] = "stored_by";
$tdataEoc_takuhai_return[".listFields"][] = "stored_at";
$tdataEoc_takuhai_return[".listFields"][] = "returned_by";
$tdataEoc_takuhai_return[".listFields"][] = "returned_at";
$tdataEoc_takuhai_return[".listFields"][] = "created_by";
$tdataEoc_takuhai_return[".listFields"][] = "created_at";
$tdataEoc_takuhai_return[".listFields"][] = "updated_by";
$tdataEoc_takuhai_return[".listFields"][] = "updated_at";

$tdataEoc_takuhai_return[".hideMobileList"] = array();


$tdataEoc_takuhai_return[".viewFields"] = array();

$tdataEoc_takuhai_return[".addFields"] = array();

$tdataEoc_takuhai_return[".masterListFields"] = array();
$tdataEoc_takuhai_return[".masterListFields"][] = "link";
$tdataEoc_takuhai_return[".masterListFields"][] = "id";
$tdataEoc_takuhai_return[".masterListFields"][] = "ecc_id";
$tdataEoc_takuhai_return[".masterListFields"][] = "Eoc_takuhai_id";
$tdataEoc_takuhai_return[".masterListFields"][] = "is_cash_on_delivery";
$tdataEoc_takuhai_return[".masterListFields"][] = "comment";
$tdataEoc_takuhai_return[".masterListFields"][] = "num_of_box";
$tdataEoc_takuhai_return[".masterListFields"][] = "stored_by";
$tdataEoc_takuhai_return[".masterListFields"][] = "stored_at";
$tdataEoc_takuhai_return[".masterListFields"][] = "returned_by";
$tdataEoc_takuhai_return[".masterListFields"][] = "returned_at";
$tdataEoc_takuhai_return[".masterListFields"][] = "created_by";
$tdataEoc_takuhai_return[".masterListFields"][] = "created_at";
$tdataEoc_takuhai_return[".masterListFields"][] = "updated_by";
$tdataEoc_takuhai_return[".masterListFields"][] = "updated_at";

$tdataEoc_takuhai_return[".inlineAddFields"] = array();

$tdataEoc_takuhai_return[".editFields"] = array();

$tdataEoc_takuhai_return[".inlineEditFields"] = array();

$tdataEoc_takuhai_return[".updateSelectedFields"] = array();


$tdataEoc_takuhai_return[".exportFields"] = array();
$tdataEoc_takuhai_return[".exportFields"][] = "link";
$tdataEoc_takuhai_return[".exportFields"][] = "id";
$tdataEoc_takuhai_return[".exportFields"][] = "ecc_id";
$tdataEoc_takuhai_return[".exportFields"][] = "Eoc_takuhai_id";
$tdataEoc_takuhai_return[".exportFields"][] = "is_cash_on_delivery";
$tdataEoc_takuhai_return[".exportFields"][] = "comment";
$tdataEoc_takuhai_return[".exportFields"][] = "num_of_box";
$tdataEoc_takuhai_return[".exportFields"][] = "stored_by";
$tdataEoc_takuhai_return[".exportFields"][] = "stored_at";
$tdataEoc_takuhai_return[".exportFields"][] = "returned_by";
$tdataEoc_takuhai_return[".exportFields"][] = "returned_at";
$tdataEoc_takuhai_return[".exportFields"][] = "created_by";
$tdataEoc_takuhai_return[".exportFields"][] = "created_at";
$tdataEoc_takuhai_return[".exportFields"][] = "updated_by";
$tdataEoc_takuhai_return[".exportFields"][] = "updated_at";

$tdataEoc_takuhai_return[".importFields"] = array();
$tdataEoc_takuhai_return[".importFields"][] = "link";
$tdataEoc_takuhai_return[".importFields"][] = "id";
$tdataEoc_takuhai_return[".importFields"][] = "ecc_id";
$tdataEoc_takuhai_return[".importFields"][] = "Eoc_takuhai_id";
$tdataEoc_takuhai_return[".importFields"][] = "is_cash_on_delivery";
$tdataEoc_takuhai_return[".importFields"][] = "comment";
$tdataEoc_takuhai_return[".importFields"][] = "num_of_box";
$tdataEoc_takuhai_return[".importFields"][] = "created_at";
$tdataEoc_takuhai_return[".importFields"][] = "created_by";
$tdataEoc_takuhai_return[".importFields"][] = "updated_at";
$tdataEoc_takuhai_return[".importFields"][] = "updated_by";
$tdataEoc_takuhai_return[".importFields"][] = "returned_at";
$tdataEoc_takuhai_return[".importFields"][] = "returned_by";
$tdataEoc_takuhai_return[".importFields"][] = "stored_at";
$tdataEoc_takuhai_return[".importFields"][] = "stored_by";

$tdataEoc_takuhai_return[".printFields"] = array();

//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return","link");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "link";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_takuhai_return["link"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_takuhai_return";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return","id");
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




	$tdataEoc_takuhai_return["id"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc_takuhai_return";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ecc_id`";

	
	
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




	$tdataEoc_takuhai_return["ecc_id"] = $fdata;
//	Eoc_takuhai_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Eoc_takuhai_id";
	$fdata["GoodName"] = "Eoc_takuhai_id";
	$fdata["ownerTable"] = "Eoc_takuhai_return";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return","Eoc_takuhai_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_takuhai_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai_id`";

	
	
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




	$tdataEoc_takuhai_return["Eoc_takuhai_id"] = $fdata;
//	is_cash_on_delivery
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "is_cash_on_delivery";
	$fdata["GoodName"] = "is_cash_on_delivery";
	$fdata["ownerTable"] = "Eoc_takuhai_return";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return","is_cash_on_delivery");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_cash_on_delivery";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_cash_on_delivery`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdataEoc_takuhai_return["is_cash_on_delivery"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "Eoc_takuhai_return";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return","comment");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`comment`";

	
	
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




	$tdataEoc_takuhai_return["comment"] = $fdata;
//	num_of_box
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "num_of_box";
	$fdata["GoodName"] = "num_of_box";
	$fdata["ownerTable"] = "Eoc_takuhai_return";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return","num_of_box");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "num_of_box";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`num_of_box`";

	
	
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




	$tdataEoc_takuhai_return["num_of_box"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "Eoc_takuhai_return";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return","created_at");
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




	$tdataEoc_takuhai_return["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "Eoc_takuhai_return";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return","created_by");
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




	$tdataEoc_takuhai_return["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_takuhai_return";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return","updated_at");
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




	$tdataEoc_takuhai_return["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "Eoc_takuhai_return";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return","updated_by");
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




	$tdataEoc_takuhai_return["updated_by"] = $fdata;
//	returned_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "returned_at";
	$fdata["GoodName"] = "returned_at";
	$fdata["ownerTable"] = "Eoc_takuhai_return";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return","returned_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "returned_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`returned_at`";

	
	
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




	$tdataEoc_takuhai_return["returned_at"] = $fdata;
//	returned_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "returned_by";
	$fdata["GoodName"] = "returned_by";
	$fdata["ownerTable"] = "Eoc_takuhai_return";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return","returned_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "returned_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`returned_by`";

	
	
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




	$tdataEoc_takuhai_return["returned_by"] = $fdata;
//	stored_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "stored_at";
	$fdata["GoodName"] = "stored_at";
	$fdata["ownerTable"] = "Eoc_takuhai_return";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return","stored_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "stored_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`stored_at`";

	
	
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




	$tdataEoc_takuhai_return["stored_at"] = $fdata;
//	stored_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "stored_by";
	$fdata["GoodName"] = "stored_by";
	$fdata["ownerTable"] = "Eoc_takuhai_return";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai_return","stored_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "stored_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`stored_by`";

	
	
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




	$tdataEoc_takuhai_return["stored_by"] = $fdata;


$tables_data["Eoc_takuhai_return"]=&$tdataEoc_takuhai_return;
$field_labels["Eoc_takuhai_return"] = &$fieldLabelsEoc_takuhai_return;
$fieldToolTips["Eoc_takuhai_return"] = &$fieldToolTipsEoc_takuhai_return;
$placeHolders["Eoc_takuhai_return"] = &$placeHoldersEoc_takuhai_return;
$page_titles["Eoc_takuhai_return"] = &$pageTitlesEoc_takuhai_return;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_takuhai_return"] = array();
//	Eoc_takuhai_return_items
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_takuhai_return_items";
		$detailsParam["dOriginalTable"] = "Eoc_takuhai_return_items";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_takuhai_return_items";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_takuhai_return_items");
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
		
	$detailsTablesData["Eoc_takuhai_return"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_takuhai_return"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_takuhai_return"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_takuhai_return"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_takuhai_return"][$dIndex]["detailKeys"][]="Eoc_takuhai_return_id";

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_takuhai_return"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_takuhai_return()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "'' as `link`,  `id`,  `ecc_id`,  `Eoc_takuhai_id`,  `is_cash_on_delivery`,  `comment`,  `num_of_box`,  `created_at`,  `created_by`,  `updated_at`,  `updated_by`,  `returned_at`,  `returned_by`,  `stored_at`,  `stored_by`";
$proto0["m_strFrom"] = "FROM `Eoc_takuhai_return`";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto6["m_sql"] = "''";
$proto6["m_srcTableName"] = "Eoc_takuhai_return";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "link";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai_return",
	"m_srcTableName" => "Eoc_takuhai_return"
));

$proto8["m_sql"] = "`id`";
$proto8["m_srcTableName"] = "Eoc_takuhai_return";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc_takuhai_return",
	"m_srcTableName" => "Eoc_takuhai_return"
));

$proto10["m_sql"] = "`ecc_id`";
$proto10["m_srcTableName"] = "Eoc_takuhai_return";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_takuhai_id",
	"m_strTable" => "Eoc_takuhai_return",
	"m_srcTableName" => "Eoc_takuhai_return"
));

$proto12["m_sql"] = "`Eoc_takuhai_id`";
$proto12["m_srcTableName"] = "Eoc_takuhai_return";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "is_cash_on_delivery",
	"m_strTable" => "Eoc_takuhai_return",
	"m_srcTableName" => "Eoc_takuhai_return"
));

$proto14["m_sql"] = "`is_cash_on_delivery`";
$proto14["m_srcTableName"] = "Eoc_takuhai_return";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "Eoc_takuhai_return",
	"m_srcTableName" => "Eoc_takuhai_return"
));

$proto16["m_sql"] = "`comment`";
$proto16["m_srcTableName"] = "Eoc_takuhai_return";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "num_of_box",
	"m_strTable" => "Eoc_takuhai_return",
	"m_srcTableName" => "Eoc_takuhai_return"
));

$proto18["m_sql"] = "`num_of_box`";
$proto18["m_srcTableName"] = "Eoc_takuhai_return";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "Eoc_takuhai_return",
	"m_srcTableName" => "Eoc_takuhai_return"
));

$proto20["m_sql"] = "`created_at`";
$proto20["m_srcTableName"] = "Eoc_takuhai_return";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "Eoc_takuhai_return",
	"m_srcTableName" => "Eoc_takuhai_return"
));

$proto22["m_sql"] = "`created_by`";
$proto22["m_srcTableName"] = "Eoc_takuhai_return";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_takuhai_return",
	"m_srcTableName" => "Eoc_takuhai_return"
));

$proto24["m_sql"] = "`updated_at`";
$proto24["m_srcTableName"] = "Eoc_takuhai_return";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "Eoc_takuhai_return",
	"m_srcTableName" => "Eoc_takuhai_return"
));

$proto26["m_sql"] = "`updated_by`";
$proto26["m_srcTableName"] = "Eoc_takuhai_return";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "returned_at",
	"m_strTable" => "Eoc_takuhai_return",
	"m_srcTableName" => "Eoc_takuhai_return"
));

$proto28["m_sql"] = "`returned_at`";
$proto28["m_srcTableName"] = "Eoc_takuhai_return";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "returned_by",
	"m_strTable" => "Eoc_takuhai_return",
	"m_srcTableName" => "Eoc_takuhai_return"
));

$proto30["m_sql"] = "`returned_by`";
$proto30["m_srcTableName"] = "Eoc_takuhai_return";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "stored_at",
	"m_strTable" => "Eoc_takuhai_return",
	"m_srcTableName" => "Eoc_takuhai_return"
));

$proto32["m_sql"] = "`stored_at`";
$proto32["m_srcTableName"] = "Eoc_takuhai_return";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "stored_by",
	"m_strTable" => "Eoc_takuhai_return",
	"m_srcTableName" => "Eoc_takuhai_return"
));

$proto34["m_sql"] = "`stored_by`";
$proto34["m_srcTableName"] = "Eoc_takuhai_return";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "Eoc_takuhai_return";
$proto37["m_srcTableName"] = "Eoc_takuhai_return";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id";
$proto37["m_columns"][] = "ecc_id";
$proto37["m_columns"][] = "Eoc_takuhai_id";
$proto37["m_columns"][] = "is_cash_on_delivery";
$proto37["m_columns"][] = "comment";
$proto37["m_columns"][] = "num_of_box";
$proto37["m_columns"][] = "created_at";
$proto37["m_columns"][] = "created_by";
$proto37["m_columns"][] = "updated_at";
$proto37["m_columns"][] = "updated_by";
$proto37["m_columns"][] = "returned_at";
$proto37["m_columns"][] = "returned_by";
$proto37["m_columns"][] = "stored_at";
$proto37["m_columns"][] = "stored_by";
$proto37["m_columns"][] = "is_exist_idfile";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "`Eoc_takuhai_return`";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "Eoc_takuhai_return";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai_return",
	"m_srcTableName" => "Eoc_takuhai_return"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 0;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_takuhai_return";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_takuhai_return = createSqlQuery_Eoc_takuhai_return();


	
		;

															

$tdataEoc_takuhai_return[".sqlquery"] = $queryData_Eoc_takuhai_return;

$tableEvents["Eoc_takuhai_return"] = new eventsBase;
$tdataEoc_takuhai_return[".hasEvents"] = false;

?>