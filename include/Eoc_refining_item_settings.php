<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_refining_item = array();
	$tdataEoc_refining_item[".truncateText"] = true;
	$tdataEoc_refining_item[".NumberOfChars"] = 80;
	$tdataEoc_refining_item[".ShortName"] = "Eoc_refining_item";
	$tdataEoc_refining_item[".OwnerID"] = "";
	$tdataEoc_refining_item[".OriginalTable"] = "Eoc_refining_item";

//	field labels
$fieldLabelsEoc_refining_item = array();
$fieldToolTipsEoc_refining_item = array();
$pageTitlesEoc_refining_item = array();
$placeHoldersEoc_refining_item = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_refining_item["Japanese"] = array();
	$fieldToolTipsEoc_refining_item["Japanese"] = array();
	$placeHoldersEoc_refining_item["Japanese"] = array();
	$pageTitlesEoc_refining_item["Japanese"] = array();
	$fieldLabelsEoc_refining_item["Japanese"]["id"] = "id";
	$fieldToolTipsEoc_refining_item["Japanese"]["id"] = "";
	$placeHoldersEoc_refining_item["Japanese"]["id"] = "";
	$fieldLabelsEoc_refining_item["Japanese"]["Eoc_refining_id"] = "取引id";
	$fieldToolTipsEoc_refining_item["Japanese"]["Eoc_refining_id"] = "";
	$placeHoldersEoc_refining_item["Japanese"]["Eoc_refining_id"] = "";
	$fieldLabelsEoc_refining_item["Japanese"]["mst__bullion_type_id"] = "地金種別";
	$fieldToolTipsEoc_refining_item["Japanese"]["mst__bullion_type_id"] = "";
	$placeHoldersEoc_refining_item["Japanese"]["mst__bullion_type_id"] = "";
	$fieldLabelsEoc_refining_item["Japanese"]["sale_gram"] = "納品時売却重量";
	$fieldToolTipsEoc_refining_item["Japanese"]["sale_gram"] = "";
	$placeHoldersEoc_refining_item["Japanese"]["sale_gram"] = "";
	$fieldLabelsEoc_refining_item["Japanese"]["weight_accept"] = "引受重量";
	$fieldToolTipsEoc_refining_item["Japanese"]["weight_accept"] = "";
	$placeHoldersEoc_refining_item["Japanese"]["weight_accept"] = "";
	$fieldLabelsEoc_refining_item["Japanese"]["500gbar_num_accept"] = "引受本数(500ｇ)";
	$fieldToolTipsEoc_refining_item["Japanese"]["500gbar_num_accept"] = "";
	$placeHoldersEoc_refining_item["Japanese"]["500gbar_num_accept"] = "";
	$fieldLabelsEoc_refining_item["Japanese"]["100gbar_num_accept"] = "引受本数(100ｇ)";
	$fieldToolTipsEoc_refining_item["Japanese"]["100gbar_num_accept"] = "";
	$placeHoldersEoc_refining_item["Japanese"]["100gbar_num_accept"] = "";
	$fieldLabelsEoc_refining_item["Japanese"]["price_accept"] = "引受申告価格";
	$fieldToolTipsEoc_refining_item["Japanese"]["price_accept"] = "";
	$placeHoldersEoc_refining_item["Japanese"]["price_accept"] = "";
	$fieldLabelsEoc_refining_item["Japanese"]["weight_delivery"] = "納品重量";
	$fieldToolTipsEoc_refining_item["Japanese"]["weight_delivery"] = "";
	$placeHoldersEoc_refining_item["Japanese"]["weight_delivery"] = "";
	$fieldLabelsEoc_refining_item["Japanese"]["500gbar_num_delivery"] = "納品本数(500ｇ)";
	$fieldToolTipsEoc_refining_item["Japanese"]["500gbar_num_delivery"] = "";
	$placeHoldersEoc_refining_item["Japanese"]["500gbar_num_delivery"] = "";
	$fieldLabelsEoc_refining_item["Japanese"]["100gbar_num_delivery"] = "納品本数(100ｇ)";
	$fieldToolTipsEoc_refining_item["Japanese"]["100gbar_num_delivery"] = "";
	$placeHoldersEoc_refining_item["Japanese"]["100gbar_num_delivery"] = "";
	$fieldLabelsEoc_refining_item["Japanese"]["price_delivery"] = "納品申告価格";
	$fieldToolTipsEoc_refining_item["Japanese"]["price_delivery"] = "";
	$placeHoldersEoc_refining_item["Japanese"]["price_delivery"] = "";
	$fieldLabelsEoc_refining_item["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsEoc_refining_item["Japanese"]["update_by"] = "";
	$placeHoldersEoc_refining_item["Japanese"]["update_by"] = "";
	$fieldLabelsEoc_refining_item["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsEoc_refining_item["Japanese"]["update_at"] = "";
	$placeHoldersEoc_refining_item["Japanese"]["update_at"] = "";
	$fieldLabelsEoc_refining_item["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsEoc_refining_item["Japanese"]["create_by"] = "";
	$placeHoldersEoc_refining_item["Japanese"]["create_by"] = "";
	$fieldLabelsEoc_refining_item["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsEoc_refining_item["Japanese"]["create_at"] = "";
	$placeHoldersEoc_refining_item["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsEoc_refining_item["Japanese"]))
		$tdataEoc_refining_item[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_refining_item[""] = array();
	$fieldToolTipsEoc_refining_item[""] = array();
	$placeHoldersEoc_refining_item[""] = array();
	$pageTitlesEoc_refining_item[""] = array();
	$fieldLabelsEoc_refining_item[""]["id"] = "Id";
	$fieldToolTipsEoc_refining_item[""]["id"] = "";
	$placeHoldersEoc_refining_item[""]["id"] = "";
	$fieldLabelsEoc_refining_item[""]["Eoc_refining_id"] = "Eoc Refining Id";
	$fieldToolTipsEoc_refining_item[""]["Eoc_refining_id"] = "";
	$placeHoldersEoc_refining_item[""]["Eoc_refining_id"] = "";
	$fieldLabelsEoc_refining_item[""]["mst__bullion_type_id"] = "Mst  Bullion Type Id";
	$fieldToolTipsEoc_refining_item[""]["mst__bullion_type_id"] = "";
	$placeHoldersEoc_refining_item[""]["mst__bullion_type_id"] = "";
	$fieldLabelsEoc_refining_item[""]["sale_gram"] = "Sale Gram";
	$fieldToolTipsEoc_refining_item[""]["sale_gram"] = "";
	$placeHoldersEoc_refining_item[""]["sale_gram"] = "";
	$fieldLabelsEoc_refining_item[""]["weight_accept"] = "Weight Accept";
	$fieldToolTipsEoc_refining_item[""]["weight_accept"] = "";
	$placeHoldersEoc_refining_item[""]["weight_accept"] = "";
	$fieldLabelsEoc_refining_item[""]["500gbar_num_accept"] = "500gbar Num Accept";
	$fieldToolTipsEoc_refining_item[""]["500gbar_num_accept"] = "";
	$placeHoldersEoc_refining_item[""]["500gbar_num_accept"] = "";
	$fieldLabelsEoc_refining_item[""]["100gbar_num_accept"] = "100gbar Num Accept";
	$fieldToolTipsEoc_refining_item[""]["100gbar_num_accept"] = "";
	$placeHoldersEoc_refining_item[""]["100gbar_num_accept"] = "";
	$fieldLabelsEoc_refining_item[""]["price_accept"] = "Price Accept";
	$fieldToolTipsEoc_refining_item[""]["price_accept"] = "";
	$placeHoldersEoc_refining_item[""]["price_accept"] = "";
	$fieldLabelsEoc_refining_item[""]["weight_delivery"] = "Weight Delivery";
	$fieldToolTipsEoc_refining_item[""]["weight_delivery"] = "";
	$placeHoldersEoc_refining_item[""]["weight_delivery"] = "";
	$fieldLabelsEoc_refining_item[""]["500gbar_num_delivery"] = "500gbar Num Delivery";
	$fieldToolTipsEoc_refining_item[""]["500gbar_num_delivery"] = "";
	$placeHoldersEoc_refining_item[""]["500gbar_num_delivery"] = "";
	$fieldLabelsEoc_refining_item[""]["100gbar_num_delivery"] = "100gbar Num Delivery";
	$fieldToolTipsEoc_refining_item[""]["100gbar_num_delivery"] = "";
	$placeHoldersEoc_refining_item[""]["100gbar_num_delivery"] = "";
	$fieldLabelsEoc_refining_item[""]["price_delivery"] = "Price Delivery";
	$fieldToolTipsEoc_refining_item[""]["price_delivery"] = "";
	$placeHoldersEoc_refining_item[""]["price_delivery"] = "";
	$fieldLabelsEoc_refining_item[""]["update_by"] = "Update By";
	$fieldToolTipsEoc_refining_item[""]["update_by"] = "";
	$placeHoldersEoc_refining_item[""]["update_by"] = "";
	$fieldLabelsEoc_refining_item[""]["update_at"] = "Update At";
	$fieldToolTipsEoc_refining_item[""]["update_at"] = "";
	$placeHoldersEoc_refining_item[""]["update_at"] = "";
	$fieldLabelsEoc_refining_item[""]["create_by"] = "Create By";
	$fieldToolTipsEoc_refining_item[""]["create_by"] = "";
	$placeHoldersEoc_refining_item[""]["create_by"] = "";
	$fieldLabelsEoc_refining_item[""]["create_at"] = "Create At";
	$fieldToolTipsEoc_refining_item[""]["create_at"] = "";
	$placeHoldersEoc_refining_item[""]["create_at"] = "";
	if (count($fieldToolTipsEoc_refining_item[""]))
		$tdataEoc_refining_item[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_refining_item["English"] = array();
	$fieldToolTipsEoc_refining_item["English"] = array();
	$placeHoldersEoc_refining_item["English"] = array();
	$pageTitlesEoc_refining_item["English"] = array();
	$fieldLabelsEoc_refining_item["English"]["id"] = "Id";
	$fieldToolTipsEoc_refining_item["English"]["id"] = "";
	$placeHoldersEoc_refining_item["English"]["id"] = "";
	$fieldLabelsEoc_refining_item["English"]["Eoc_refining_id"] = "Eoc Refining Id";
	$fieldToolTipsEoc_refining_item["English"]["Eoc_refining_id"] = "";
	$placeHoldersEoc_refining_item["English"]["Eoc_refining_id"] = "";
	$fieldLabelsEoc_refining_item["English"]["mst__bullion_type_id"] = "Mst  Bullion Type Id";
	$fieldToolTipsEoc_refining_item["English"]["mst__bullion_type_id"] = "";
	$placeHoldersEoc_refining_item["English"]["mst__bullion_type_id"] = "";
	$fieldLabelsEoc_refining_item["English"]["sale_gram"] = "Sale Gram";
	$fieldToolTipsEoc_refining_item["English"]["sale_gram"] = "";
	$placeHoldersEoc_refining_item["English"]["sale_gram"] = "";
	$fieldLabelsEoc_refining_item["English"]["weight_accept"] = "Weight Accept";
	$fieldToolTipsEoc_refining_item["English"]["weight_accept"] = "";
	$placeHoldersEoc_refining_item["English"]["weight_accept"] = "";
	$fieldLabelsEoc_refining_item["English"]["500gbar_num_accept"] = "500gbar Num Accept";
	$fieldToolTipsEoc_refining_item["English"]["500gbar_num_accept"] = "";
	$placeHoldersEoc_refining_item["English"]["500gbar_num_accept"] = "";
	$fieldLabelsEoc_refining_item["English"]["100gbar_num_accept"] = "100gbar Num Accept";
	$fieldToolTipsEoc_refining_item["English"]["100gbar_num_accept"] = "";
	$placeHoldersEoc_refining_item["English"]["100gbar_num_accept"] = "";
	$fieldLabelsEoc_refining_item["English"]["price_accept"] = "Price Accept";
	$fieldToolTipsEoc_refining_item["English"]["price_accept"] = "";
	$placeHoldersEoc_refining_item["English"]["price_accept"] = "";
	$fieldLabelsEoc_refining_item["English"]["weight_delivery"] = "Weight Delivery";
	$fieldToolTipsEoc_refining_item["English"]["weight_delivery"] = "";
	$placeHoldersEoc_refining_item["English"]["weight_delivery"] = "";
	$fieldLabelsEoc_refining_item["English"]["500gbar_num_delivery"] = "500gbar Num Delivery";
	$fieldToolTipsEoc_refining_item["English"]["500gbar_num_delivery"] = "";
	$placeHoldersEoc_refining_item["English"]["500gbar_num_delivery"] = "";
	$fieldLabelsEoc_refining_item["English"]["100gbar_num_delivery"] = "100gbar Num Delivery";
	$fieldToolTipsEoc_refining_item["English"]["100gbar_num_delivery"] = "";
	$placeHoldersEoc_refining_item["English"]["100gbar_num_delivery"] = "";
	$fieldLabelsEoc_refining_item["English"]["price_delivery"] = "Price Delivery";
	$fieldToolTipsEoc_refining_item["English"]["price_delivery"] = "";
	$placeHoldersEoc_refining_item["English"]["price_delivery"] = "";
	$fieldLabelsEoc_refining_item["English"]["update_by"] = "Update By";
	$fieldToolTipsEoc_refining_item["English"]["update_by"] = "";
	$placeHoldersEoc_refining_item["English"]["update_by"] = "";
	$fieldLabelsEoc_refining_item["English"]["update_at"] = "Update At";
	$fieldToolTipsEoc_refining_item["English"]["update_at"] = "";
	$placeHoldersEoc_refining_item["English"]["update_at"] = "";
	$fieldLabelsEoc_refining_item["English"]["create_by"] = "Create By";
	$fieldToolTipsEoc_refining_item["English"]["create_by"] = "";
	$placeHoldersEoc_refining_item["English"]["create_by"] = "";
	$fieldLabelsEoc_refining_item["English"]["create_at"] = "Create At";
	$fieldToolTipsEoc_refining_item["English"]["create_at"] = "";
	$placeHoldersEoc_refining_item["English"]["create_at"] = "";
	if (count($fieldToolTipsEoc_refining_item["English"]))
		$tdataEoc_refining_item[".isUseToolTips"] = true;
}


	$tdataEoc_refining_item[".NCSearch"] = true;



$tdataEoc_refining_item[".shortTableName"] = "Eoc_refining_item";
$tdataEoc_refining_item[".nSecOptions"] = 0;
$tdataEoc_refining_item[".recsPerRowPrint"] = 1;
$tdataEoc_refining_item[".mainTableOwnerID"] = "";
$tdataEoc_refining_item[".moveNext"] = 1;
$tdataEoc_refining_item[".entityType"] = 0;

$tdataEoc_refining_item[".strOriginalTableName"] = "Eoc_refining_item";

	



$tdataEoc_refining_item[".showAddInPopup"] = false;

$tdataEoc_refining_item[".showEditInPopup"] = false;

$tdataEoc_refining_item[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_refining_item[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_refining_item[".fieldsForRegister"] = array();

$tdataEoc_refining_item[".listAjax"] = false;

	$tdataEoc_refining_item[".audit"] = true;

	$tdataEoc_refining_item[".locking"] = false;



$tdataEoc_refining_item[".list"] = true;

$tdataEoc_refining_item[".inlineEdit"] = true;


$tdataEoc_refining_item[".reorderRecordsByHeader"] = true;



$tdataEoc_refining_item[".inlineAdd"] = true;

$tdataEoc_refining_item[".import"] = true;

$tdataEoc_refining_item[".exportTo"] = true;


$tdataEoc_refining_item[".delete"] = true;

$tdataEoc_refining_item[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_refining_item[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_refining_item[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_refining_item[".searchSaving"] = false;
//

$tdataEoc_refining_item[".showSearchPanel"] = true;
		$tdataEoc_refining_item[".flexibleSearch"] = true;

$tdataEoc_refining_item[".isUseAjaxSuggest"] = true;

$tdataEoc_refining_item[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdataEoc_refining_item[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_refining_item[".buttonsAdded"] = false;

$tdataEoc_refining_item[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_refining_item[".isUseTimeForSearch"] = false;



$tdataEoc_refining_item[".badgeColor"] = "3cb371";


$tdataEoc_refining_item[".allSearchFields"] = array();
$tdataEoc_refining_item[".filterFields"] = array();
$tdataEoc_refining_item[".requiredSearchFields"] = array();

$tdataEoc_refining_item[".allSearchFields"][] = "id";
	$tdataEoc_refining_item[".allSearchFields"][] = "Eoc_refining_id";
	$tdataEoc_refining_item[".allSearchFields"][] = "mst__bullion_type_id";
	$tdataEoc_refining_item[".allSearchFields"][] = "sale_gram";
	$tdataEoc_refining_item[".allSearchFields"][] = "weight_accept";
	$tdataEoc_refining_item[".allSearchFields"][] = "500gbar_num_accept";
	$tdataEoc_refining_item[".allSearchFields"][] = "100gbar_num_accept";
	$tdataEoc_refining_item[".allSearchFields"][] = "price_accept";
	$tdataEoc_refining_item[".allSearchFields"][] = "weight_delivery";
	$tdataEoc_refining_item[".allSearchFields"][] = "500gbar_num_delivery";
	$tdataEoc_refining_item[".allSearchFields"][] = "100gbar_num_delivery";
	$tdataEoc_refining_item[".allSearchFields"][] = "price_delivery";
	$tdataEoc_refining_item[".allSearchFields"][] = "update_by";
	$tdataEoc_refining_item[".allSearchFields"][] = "update_at";
	$tdataEoc_refining_item[".allSearchFields"][] = "create_by";
	$tdataEoc_refining_item[".allSearchFields"][] = "create_at";
	

$tdataEoc_refining_item[".googleLikeFields"] = array();
$tdataEoc_refining_item[".googleLikeFields"][] = "id";
$tdataEoc_refining_item[".googleLikeFields"][] = "Eoc_refining_id";
$tdataEoc_refining_item[".googleLikeFields"][] = "mst__bullion_type_id";
$tdataEoc_refining_item[".googleLikeFields"][] = "sale_gram";
$tdataEoc_refining_item[".googleLikeFields"][] = "weight_accept";
$tdataEoc_refining_item[".googleLikeFields"][] = "500gbar_num_accept";
$tdataEoc_refining_item[".googleLikeFields"][] = "100gbar_num_accept";
$tdataEoc_refining_item[".googleLikeFields"][] = "price_accept";
$tdataEoc_refining_item[".googleLikeFields"][] = "weight_delivery";
$tdataEoc_refining_item[".googleLikeFields"][] = "500gbar_num_delivery";
$tdataEoc_refining_item[".googleLikeFields"][] = "100gbar_num_delivery";
$tdataEoc_refining_item[".googleLikeFields"][] = "price_delivery";
$tdataEoc_refining_item[".googleLikeFields"][] = "update_by";
$tdataEoc_refining_item[".googleLikeFields"][] = "update_at";
$tdataEoc_refining_item[".googleLikeFields"][] = "create_by";
$tdataEoc_refining_item[".googleLikeFields"][] = "create_at";


$tdataEoc_refining_item[".advSearchFields"] = array();
$tdataEoc_refining_item[".advSearchFields"][] = "id";
$tdataEoc_refining_item[".advSearchFields"][] = "Eoc_refining_id";
$tdataEoc_refining_item[".advSearchFields"][] = "mst__bullion_type_id";
$tdataEoc_refining_item[".advSearchFields"][] = "sale_gram";
$tdataEoc_refining_item[".advSearchFields"][] = "weight_accept";
$tdataEoc_refining_item[".advSearchFields"][] = "500gbar_num_accept";
$tdataEoc_refining_item[".advSearchFields"][] = "100gbar_num_accept";
$tdataEoc_refining_item[".advSearchFields"][] = "price_accept";
$tdataEoc_refining_item[".advSearchFields"][] = "weight_delivery";
$tdataEoc_refining_item[".advSearchFields"][] = "500gbar_num_delivery";
$tdataEoc_refining_item[".advSearchFields"][] = "100gbar_num_delivery";
$tdataEoc_refining_item[".advSearchFields"][] = "price_delivery";
$tdataEoc_refining_item[".advSearchFields"][] = "update_by";
$tdataEoc_refining_item[".advSearchFields"][] = "update_at";
$tdataEoc_refining_item[".advSearchFields"][] = "create_by";
$tdataEoc_refining_item[".advSearchFields"][] = "create_at";

$tdataEoc_refining_item[".tableType"] = "list";

$tdataEoc_refining_item[".printerPageOrientation"] = 0;
$tdataEoc_refining_item[".nPrinterPageScale"] = 100;

$tdataEoc_refining_item[".nPrinterSplitRecords"] = 40;

$tdataEoc_refining_item[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_refining_item[".geocodingEnabled"] = false;





$tdataEoc_refining_item[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_refining_item[".pageSize"] = 20;

$tdataEoc_refining_item[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_refining_item[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_refining_item[".orderindexes"] = array();

$tdataEoc_refining_item[".sqlHead"] = "SELECT `id`,  	`Eoc_refining_id`,  	`mst__bullion_type_id`,  	`sale_gram`,  	`weight_accept`,  	`500gbar_num_accept`,  	`100gbar_num_accept`,  	`price_accept`,  	`weight_delivery`,  	`500gbar_num_delivery`,  	`100gbar_num_delivery`,  	`price_delivery`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$tdataEoc_refining_item[".sqlFrom"] = "FROM `Eoc_refining_item`";
$tdataEoc_refining_item[".sqlWhereExpr"] = "";
$tdataEoc_refining_item[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_refining_item[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_refining_item[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_refining_item[".highlightSearchResults"] = true;

$tableKeysEoc_refining_item = array();
$tableKeysEoc_refining_item[] = "id";
$tdataEoc_refining_item[".Keys"] = $tableKeysEoc_refining_item;

$tdataEoc_refining_item[".listFields"] = array();
$tdataEoc_refining_item[".listFields"][] = "id";
$tdataEoc_refining_item[".listFields"][] = "Eoc_refining_id";
$tdataEoc_refining_item[".listFields"][] = "mst__bullion_type_id";
$tdataEoc_refining_item[".listFields"][] = "sale_gram";
$tdataEoc_refining_item[".listFields"][] = "weight_accept";
$tdataEoc_refining_item[".listFields"][] = "500gbar_num_accept";
$tdataEoc_refining_item[".listFields"][] = "100gbar_num_accept";
$tdataEoc_refining_item[".listFields"][] = "price_accept";
$tdataEoc_refining_item[".listFields"][] = "weight_delivery";
$tdataEoc_refining_item[".listFields"][] = "500gbar_num_delivery";
$tdataEoc_refining_item[".listFields"][] = "100gbar_num_delivery";
$tdataEoc_refining_item[".listFields"][] = "price_delivery";
$tdataEoc_refining_item[".listFields"][] = "update_by";
$tdataEoc_refining_item[".listFields"][] = "update_at";
$tdataEoc_refining_item[".listFields"][] = "create_by";
$tdataEoc_refining_item[".listFields"][] = "create_at";

$tdataEoc_refining_item[".hideMobileList"] = array();


$tdataEoc_refining_item[".viewFields"] = array();

$tdataEoc_refining_item[".addFields"] = array();

$tdataEoc_refining_item[".masterListFields"] = array();
$tdataEoc_refining_item[".masterListFields"][] = "id";
$tdataEoc_refining_item[".masterListFields"][] = "Eoc_refining_id";
$tdataEoc_refining_item[".masterListFields"][] = "mst__bullion_type_id";
$tdataEoc_refining_item[".masterListFields"][] = "sale_gram";
$tdataEoc_refining_item[".masterListFields"][] = "weight_accept";
$tdataEoc_refining_item[".masterListFields"][] = "500gbar_num_accept";
$tdataEoc_refining_item[".masterListFields"][] = "100gbar_num_accept";
$tdataEoc_refining_item[".masterListFields"][] = "price_accept";
$tdataEoc_refining_item[".masterListFields"][] = "weight_delivery";
$tdataEoc_refining_item[".masterListFields"][] = "500gbar_num_delivery";
$tdataEoc_refining_item[".masterListFields"][] = "100gbar_num_delivery";
$tdataEoc_refining_item[".masterListFields"][] = "price_delivery";
$tdataEoc_refining_item[".masterListFields"][] = "update_by";
$tdataEoc_refining_item[".masterListFields"][] = "update_at";
$tdataEoc_refining_item[".masterListFields"][] = "create_by";
$tdataEoc_refining_item[".masterListFields"][] = "create_at";

$tdataEoc_refining_item[".inlineAddFields"] = array();
$tdataEoc_refining_item[".inlineAddFields"][] = "mst__bullion_type_id";
$tdataEoc_refining_item[".inlineAddFields"][] = "sale_gram";
$tdataEoc_refining_item[".inlineAddFields"][] = "weight_accept";
$tdataEoc_refining_item[".inlineAddFields"][] = "500gbar_num_accept";
$tdataEoc_refining_item[".inlineAddFields"][] = "100gbar_num_accept";
$tdataEoc_refining_item[".inlineAddFields"][] = "price_accept";
$tdataEoc_refining_item[".inlineAddFields"][] = "weight_delivery";
$tdataEoc_refining_item[".inlineAddFields"][] = "500gbar_num_delivery";
$tdataEoc_refining_item[".inlineAddFields"][] = "100gbar_num_delivery";
$tdataEoc_refining_item[".inlineAddFields"][] = "price_delivery";

$tdataEoc_refining_item[".editFields"] = array();

$tdataEoc_refining_item[".inlineEditFields"] = array();
$tdataEoc_refining_item[".inlineEditFields"][] = "mst__bullion_type_id";
$tdataEoc_refining_item[".inlineEditFields"][] = "sale_gram";
$tdataEoc_refining_item[".inlineEditFields"][] = "weight_accept";
$tdataEoc_refining_item[".inlineEditFields"][] = "500gbar_num_accept";
$tdataEoc_refining_item[".inlineEditFields"][] = "100gbar_num_accept";
$tdataEoc_refining_item[".inlineEditFields"][] = "price_accept";
$tdataEoc_refining_item[".inlineEditFields"][] = "weight_delivery";
$tdataEoc_refining_item[".inlineEditFields"][] = "500gbar_num_delivery";
$tdataEoc_refining_item[".inlineEditFields"][] = "100gbar_num_delivery";
$tdataEoc_refining_item[".inlineEditFields"][] = "price_delivery";

$tdataEoc_refining_item[".updateSelectedFields"] = array();


$tdataEoc_refining_item[".exportFields"] = array();
$tdataEoc_refining_item[".exportFields"][] = "id";
$tdataEoc_refining_item[".exportFields"][] = "Eoc_refining_id";
$tdataEoc_refining_item[".exportFields"][] = "mst__bullion_type_id";
$tdataEoc_refining_item[".exportFields"][] = "sale_gram";
$tdataEoc_refining_item[".exportFields"][] = "weight_accept";
$tdataEoc_refining_item[".exportFields"][] = "500gbar_num_accept";
$tdataEoc_refining_item[".exportFields"][] = "100gbar_num_accept";
$tdataEoc_refining_item[".exportFields"][] = "price_accept";
$tdataEoc_refining_item[".exportFields"][] = "weight_delivery";
$tdataEoc_refining_item[".exportFields"][] = "500gbar_num_delivery";
$tdataEoc_refining_item[".exportFields"][] = "100gbar_num_delivery";
$tdataEoc_refining_item[".exportFields"][] = "price_delivery";
$tdataEoc_refining_item[".exportFields"][] = "update_by";
$tdataEoc_refining_item[".exportFields"][] = "update_at";
$tdataEoc_refining_item[".exportFields"][] = "create_by";
$tdataEoc_refining_item[".exportFields"][] = "create_at";

$tdataEoc_refining_item[".importFields"] = array();
$tdataEoc_refining_item[".importFields"][] = "id";
$tdataEoc_refining_item[".importFields"][] = "Eoc_refining_id";
$tdataEoc_refining_item[".importFields"][] = "mst__bullion_type_id";
$tdataEoc_refining_item[".importFields"][] = "sale_gram";
$tdataEoc_refining_item[".importFields"][] = "weight_accept";
$tdataEoc_refining_item[".importFields"][] = "500gbar_num_accept";
$tdataEoc_refining_item[".importFields"][] = "100gbar_num_accept";
$tdataEoc_refining_item[".importFields"][] = "price_accept";
$tdataEoc_refining_item[".importFields"][] = "weight_delivery";
$tdataEoc_refining_item[".importFields"][] = "500gbar_num_delivery";
$tdataEoc_refining_item[".importFields"][] = "100gbar_num_delivery";
$tdataEoc_refining_item[".importFields"][] = "price_delivery";
$tdataEoc_refining_item[".importFields"][] = "update_by";
$tdataEoc_refining_item[".importFields"][] = "update_at";
$tdataEoc_refining_item[".importFields"][] = "create_by";
$tdataEoc_refining_item[".importFields"][] = "create_at";

$tdataEoc_refining_item[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_refining_item";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_item","id");
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




	$tdataEoc_refining_item["id"] = $fdata;
//	Eoc_refining_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Eoc_refining_id";
	$fdata["GoodName"] = "Eoc_refining_id";
	$fdata["ownerTable"] = "Eoc_refining_item";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_item","Eoc_refining_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_refining_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_refining_id`";

	
	
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




	$tdataEoc_refining_item["Eoc_refining_id"] = $fdata;
//	mst__bullion_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mst__bullion_type_id";
	$fdata["GoodName"] = "mst__bullion_type_id";
	$fdata["ownerTable"] = "Eoc_refining_item";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_item","mst__bullion_type_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mst__bullion_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst__bullion_type_id`";

	
	
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
	$edata["LookupTable"] = "mst_bullion_type";
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




	$tdataEoc_refining_item["mst__bullion_type_id"] = $fdata;
//	sale_gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sale_gram";
	$fdata["GoodName"] = "sale_gram";
	$fdata["ownerTable"] = "Eoc_refining_item";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_item","sale_gram");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sale_gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sale_gram`";

	
	
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




	$tdataEoc_refining_item["sale_gram"] = $fdata;
//	weight_accept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "weight_accept";
	$fdata["GoodName"] = "weight_accept";
	$fdata["ownerTable"] = "Eoc_refining_item";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_item","weight_accept");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "weight_accept";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`weight_accept`";

	
	
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




	$tdataEoc_refining_item["weight_accept"] = $fdata;
//	500gbar_num_accept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "500gbar_num_accept";
	$fdata["GoodName"] = "500gbar_num_accept";
	$fdata["ownerTable"] = "Eoc_refining_item";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_item","500gbar_num_accept");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "500gbar_num_accept";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`500gbar_num_accept`";

	
	
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




	$tdataEoc_refining_item["500gbar_num_accept"] = $fdata;
//	100gbar_num_accept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "100gbar_num_accept";
	$fdata["GoodName"] = "100gbar_num_accept";
	$fdata["ownerTable"] = "Eoc_refining_item";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_item","100gbar_num_accept");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "100gbar_num_accept";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`100gbar_num_accept`";

	
	
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




	$tdataEoc_refining_item["100gbar_num_accept"] = $fdata;
//	price_accept
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "price_accept";
	$fdata["GoodName"] = "price_accept";
	$fdata["ownerTable"] = "Eoc_refining_item";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_item","price_accept");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_accept";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`price_accept`";

	
	
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




	$tdataEoc_refining_item["price_accept"] = $fdata;
//	weight_delivery
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "weight_delivery";
	$fdata["GoodName"] = "weight_delivery";
	$fdata["ownerTable"] = "Eoc_refining_item";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_item","weight_delivery");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "weight_delivery";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`weight_delivery`";

	
	
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




	$tdataEoc_refining_item["weight_delivery"] = $fdata;
//	500gbar_num_delivery
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "500gbar_num_delivery";
	$fdata["GoodName"] = "500gbar_num_delivery";
	$fdata["ownerTable"] = "Eoc_refining_item";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_item","500gbar_num_delivery");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "500gbar_num_delivery";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`500gbar_num_delivery`";

	
	
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




	$tdataEoc_refining_item["500gbar_num_delivery"] = $fdata;
//	100gbar_num_delivery
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "100gbar_num_delivery";
	$fdata["GoodName"] = "100gbar_num_delivery";
	$fdata["ownerTable"] = "Eoc_refining_item";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_item","100gbar_num_delivery");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "100gbar_num_delivery";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`100gbar_num_delivery`";

	
	
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




	$tdataEoc_refining_item["100gbar_num_delivery"] = $fdata;
//	price_delivery
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "price_delivery";
	$fdata["GoodName"] = "price_delivery";
	$fdata["ownerTable"] = "Eoc_refining_item";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_item","price_delivery");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_delivery";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`price_delivery`";

	
	
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




	$tdataEoc_refining_item["price_delivery"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "Eoc_refining_item";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_item","update_by");
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




	$tdataEoc_refining_item["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "Eoc_refining_item";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_item","update_at");
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




	$tdataEoc_refining_item["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "Eoc_refining_item";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_item","create_by");
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




	$tdataEoc_refining_item["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "Eoc_refining_item";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_item","create_at");
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




	$tdataEoc_refining_item["create_at"] = $fdata;


$tables_data["Eoc_refining_item"]=&$tdataEoc_refining_item;
$field_labels["Eoc_refining_item"] = &$fieldLabelsEoc_refining_item;
$fieldToolTips["Eoc_refining_item"] = &$fieldToolTipsEoc_refining_item;
$placeHolders["Eoc_refining_item"] = &$placeHoldersEoc_refining_item;
$page_titles["Eoc_refining_item"] = &$pageTitlesEoc_refining_item;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_refining_item"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_refining_item"] = array();


	
				$strOriginalDetailsTable="Eoc_refining";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_refining";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_refining";
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
					$masterTablesData["Eoc_refining_item"][0] = $masterParams;
				$masterTablesData["Eoc_refining_item"][0]["masterKeys"] = array();
	$masterTablesData["Eoc_refining_item"][0]["masterKeys"][]="id";
				$masterTablesData["Eoc_refining_item"][0]["detailKeys"] = array();
	$masterTablesData["Eoc_refining_item"][0]["detailKeys"][]="Eoc_refining_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_refining_item()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`Eoc_refining_id`,  	`mst__bullion_type_id`,  	`sale_gram`,  	`weight_accept`,  	`500gbar_num_accept`,  	`100gbar_num_accept`,  	`price_accept`,  	`weight_delivery`,  	`500gbar_num_delivery`,  	`100gbar_num_delivery`,  	`price_delivery`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$proto0["m_strFrom"] = "FROM `Eoc_refining_item`";
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
	"m_strTable" => "Eoc_refining_item",
	"m_srcTableName" => "Eoc_refining_item"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "Eoc_refining_item";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_refining_id",
	"m_strTable" => "Eoc_refining_item",
	"m_srcTableName" => "Eoc_refining_item"
));

$proto8["m_sql"] = "`Eoc_refining_id`";
$proto8["m_srcTableName"] = "Eoc_refining_item";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mst__bullion_type_id",
	"m_strTable" => "Eoc_refining_item",
	"m_srcTableName" => "Eoc_refining_item"
));

$proto10["m_sql"] = "`mst__bullion_type_id`";
$proto10["m_srcTableName"] = "Eoc_refining_item";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sale_gram",
	"m_strTable" => "Eoc_refining_item",
	"m_srcTableName" => "Eoc_refining_item"
));

$proto12["m_sql"] = "`sale_gram`";
$proto12["m_srcTableName"] = "Eoc_refining_item";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "weight_accept",
	"m_strTable" => "Eoc_refining_item",
	"m_srcTableName" => "Eoc_refining_item"
));

$proto14["m_sql"] = "`weight_accept`";
$proto14["m_srcTableName"] = "Eoc_refining_item";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "500gbar_num_accept",
	"m_strTable" => "Eoc_refining_item",
	"m_srcTableName" => "Eoc_refining_item"
));

$proto16["m_sql"] = "`500gbar_num_accept`";
$proto16["m_srcTableName"] = "Eoc_refining_item";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "100gbar_num_accept",
	"m_strTable" => "Eoc_refining_item",
	"m_srcTableName" => "Eoc_refining_item"
));

$proto18["m_sql"] = "`100gbar_num_accept`";
$proto18["m_srcTableName"] = "Eoc_refining_item";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "price_accept",
	"m_strTable" => "Eoc_refining_item",
	"m_srcTableName" => "Eoc_refining_item"
));

$proto20["m_sql"] = "`price_accept`";
$proto20["m_srcTableName"] = "Eoc_refining_item";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "weight_delivery",
	"m_strTable" => "Eoc_refining_item",
	"m_srcTableName" => "Eoc_refining_item"
));

$proto22["m_sql"] = "`weight_delivery`";
$proto22["m_srcTableName"] = "Eoc_refining_item";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "500gbar_num_delivery",
	"m_strTable" => "Eoc_refining_item",
	"m_srcTableName" => "Eoc_refining_item"
));

$proto24["m_sql"] = "`500gbar_num_delivery`";
$proto24["m_srcTableName"] = "Eoc_refining_item";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "100gbar_num_delivery",
	"m_strTable" => "Eoc_refining_item",
	"m_srcTableName" => "Eoc_refining_item"
));

$proto26["m_sql"] = "`100gbar_num_delivery`";
$proto26["m_srcTableName"] = "Eoc_refining_item";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "price_delivery",
	"m_strTable" => "Eoc_refining_item",
	"m_srcTableName" => "Eoc_refining_item"
));

$proto28["m_sql"] = "`price_delivery`";
$proto28["m_srcTableName"] = "Eoc_refining_item";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "Eoc_refining_item",
	"m_srcTableName" => "Eoc_refining_item"
));

$proto30["m_sql"] = "`update_by`";
$proto30["m_srcTableName"] = "Eoc_refining_item";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "Eoc_refining_item",
	"m_srcTableName" => "Eoc_refining_item"
));

$proto32["m_sql"] = "`update_at`";
$proto32["m_srcTableName"] = "Eoc_refining_item";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "Eoc_refining_item",
	"m_srcTableName" => "Eoc_refining_item"
));

$proto34["m_sql"] = "`create_by`";
$proto34["m_srcTableName"] = "Eoc_refining_item";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "Eoc_refining_item",
	"m_srcTableName" => "Eoc_refining_item"
));

$proto36["m_sql"] = "`create_at`";
$proto36["m_srcTableName"] = "Eoc_refining_item";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "Eoc_refining_item";
$proto39["m_srcTableName"] = "Eoc_refining_item";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "Eoc_refining_id";
$proto39["m_columns"][] = "mst__bullion_type_id";
$proto39["m_columns"][] = "sale_gram";
$proto39["m_columns"][] = "weight_accept";
$proto39["m_columns"][] = "500gbar_num_accept";
$proto39["m_columns"][] = "100gbar_num_accept";
$proto39["m_columns"][] = "price_accept";
$proto39["m_columns"][] = "weight_delivery";
$proto39["m_columns"][] = "500gbar_num_delivery";
$proto39["m_columns"][] = "100gbar_num_delivery";
$proto39["m_columns"][] = "price_delivery";
$proto39["m_columns"][] = "update_by";
$proto39["m_columns"][] = "update_at";
$proto39["m_columns"][] = "create_by";
$proto39["m_columns"][] = "create_at";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "`Eoc_refining_item`";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "Eoc_refining_item";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Eoc_refining_item";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_refining_item = createSqlQuery_Eoc_refining_item();


	
		;

																

$tdataEoc_refining_item[".sqlquery"] = $queryData_Eoc_refining_item;

include_once(getabspath("include/Eoc_refining_item_events.php"));
$tableEvents["Eoc_refining_item"] = new eventclass_Eoc_refining_item;
$tdataEoc_refining_item[".hasEvents"] = true;

?>