<?php
require_once(getabspath("classes/cipherer.php"));




$tdatagold_check_item = array();
	$tdatagold_check_item[".truncateText"] = true;
	$tdatagold_check_item[".NumberOfChars"] = 80;
	$tdatagold_check_item[".ShortName"] = "gold_check_item";
	$tdatagold_check_item[".OwnerID"] = "";
	$tdatagold_check_item[".OriginalTable"] = "gold_check_item";

//	field labels
$fieldLabelsgold_check_item = array();
$fieldToolTipsgold_check_item = array();
$pageTitlesgold_check_item = array();
$placeHoldersgold_check_item = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsgold_check_item["Japanese"] = array();
	$fieldToolTipsgold_check_item["Japanese"] = array();
	$placeHoldersgold_check_item["Japanese"] = array();
	$pageTitlesgold_check_item["Japanese"] = array();
	$fieldLabelsgold_check_item["Japanese"]["id"] = "Id";
	$fieldToolTipsgold_check_item["Japanese"]["id"] = "";
	$placeHoldersgold_check_item["Japanese"]["id"] = "";
	$fieldLabelsgold_check_item["Japanese"]["gold_check_id"] = "地金チェックId";
	$fieldToolTipsgold_check_item["Japanese"]["gold_check_id"] = "";
	$placeHoldersgold_check_item["Japanese"]["gold_check_id"] = "";
	$fieldLabelsgold_check_item["Japanese"]["sort"] = "Sort";
	$fieldToolTipsgold_check_item["Japanese"]["sort"] = "";
	$placeHoldersgold_check_item["Japanese"]["sort"] = "";
	$fieldLabelsgold_check_item["Japanese"]["name"] = "払出品位";
	$fieldToolTipsgold_check_item["Japanese"]["name"] = "";
	$placeHoldersgold_check_item["Japanese"]["name"] = "";
	$fieldLabelsgold_check_item["Japanese"]["gram"] = "ジャーナルg";
	$fieldToolTipsgold_check_item["Japanese"]["gram"] = "";
	$placeHoldersgold_check_item["Japanese"]["gram"] = "";
	$fieldLabelsgold_check_item["Japanese"]["unit"] = "単価";
	$fieldToolTipsgold_check_item["Japanese"]["unit"] = "";
	$placeHoldersgold_check_item["Japanese"]["unit"] = "";
	$fieldLabelsgold_check_item["Japanese"]["price"] = "価格";
	$fieldToolTipsgold_check_item["Japanese"]["price"] = "";
	$placeHoldersgold_check_item["Japanese"]["price"] = "";
	$fieldLabelsgold_check_item["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsgold_check_item["Japanese"]["create_at"] = "";
	$placeHoldersgold_check_item["Japanese"]["create_at"] = "";
	$fieldLabelsgold_check_item["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsgold_check_item["Japanese"]["create_by"] = "";
	$placeHoldersgold_check_item["Japanese"]["create_by"] = "";
	$fieldLabelsgold_check_item["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsgold_check_item["Japanese"]["update_at"] = "";
	$placeHoldersgold_check_item["Japanese"]["update_at"] = "";
	$fieldLabelsgold_check_item["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsgold_check_item["Japanese"]["update_by"] = "";
	$placeHoldersgold_check_item["Japanese"]["update_by"] = "";
	$fieldLabelsgold_check_item["Japanese"]["company"] = "会社id";
	$fieldToolTipsgold_check_item["Japanese"]["company"] = "";
	$placeHoldersgold_check_item["Japanese"]["company"] = "";
	$fieldLabelsgold_check_item["Japanese"]["better_flg"] = "Better";
	$fieldToolTipsgold_check_item["Japanese"]["better_flg"] = "";
	$placeHoldersgold_check_item["Japanese"]["better_flg"] = "";
	$fieldLabelsgold_check_item["Japanese"]["sort1"] = "Sort1";
	$fieldToolTipsgold_check_item["Japanese"]["sort1"] = "";
	$placeHoldersgold_check_item["Japanese"]["sort1"] = "";
	$fieldLabelsgold_check_item["Japanese"]["gram_2"] = "伝票重量";
	$fieldToolTipsgold_check_item["Japanese"]["gram_2"] = "";
	$placeHoldersgold_check_item["Japanese"]["gram_2"] = "";
	$fieldLabelsgold_check_item["Japanese"]["sabun"] = "差分";
	$fieldToolTipsgold_check_item["Japanese"]["sabun"] = "";
	$placeHoldersgold_check_item["Japanese"]["sabun"] = "";
	$fieldLabelsgold_check_item["Japanese"]["authorize_check"] = "承認チェック";
	$fieldToolTipsgold_check_item["Japanese"]["authorize_check"] = "";
	$placeHoldersgold_check_item["Japanese"]["authorize_check"] = "";
	$fieldLabelsgold_check_item["Japanese"]["authorize_by"] = "承認者";
	$fieldToolTipsgold_check_item["Japanese"]["authorize_by"] = "";
	$placeHoldersgold_check_item["Japanese"]["authorize_by"] = "";
	if (count($fieldToolTipsgold_check_item["Japanese"]))
		$tdatagold_check_item[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsgold_check_item[""] = array();
	$fieldToolTipsgold_check_item[""] = array();
	$placeHoldersgold_check_item[""] = array();
	$pageTitlesgold_check_item[""] = array();
	$fieldLabelsgold_check_item[""]["id"] = "Id";
	$fieldToolTipsgold_check_item[""]["id"] = "";
	$placeHoldersgold_check_item[""]["id"] = "";
	$fieldLabelsgold_check_item[""]["gold_check_id"] = "Gold Check Id";
	$fieldToolTipsgold_check_item[""]["gold_check_id"] = "";
	$placeHoldersgold_check_item[""]["gold_check_id"] = "";
	$fieldLabelsgold_check_item[""]["sort"] = "Sort";
	$fieldToolTipsgold_check_item[""]["sort"] = "";
	$placeHoldersgold_check_item[""]["sort"] = "";
	$fieldLabelsgold_check_item[""]["name"] = "Name";
	$fieldToolTipsgold_check_item[""]["name"] = "";
	$placeHoldersgold_check_item[""]["name"] = "";
	$fieldLabelsgold_check_item[""]["gram"] = "Gram";
	$fieldToolTipsgold_check_item[""]["gram"] = "";
	$placeHoldersgold_check_item[""]["gram"] = "";
	$fieldLabelsgold_check_item[""]["unit"] = "Unit";
	$fieldToolTipsgold_check_item[""]["unit"] = "";
	$placeHoldersgold_check_item[""]["unit"] = "";
	$fieldLabelsgold_check_item[""]["price"] = "Price";
	$fieldToolTipsgold_check_item[""]["price"] = "";
	$placeHoldersgold_check_item[""]["price"] = "";
	$fieldLabelsgold_check_item[""]["create_at"] = "Create At";
	$fieldToolTipsgold_check_item[""]["create_at"] = "";
	$placeHoldersgold_check_item[""]["create_at"] = "";
	$fieldLabelsgold_check_item[""]["create_by"] = "Create By";
	$fieldToolTipsgold_check_item[""]["create_by"] = "";
	$placeHoldersgold_check_item[""]["create_by"] = "";
	$fieldLabelsgold_check_item[""]["update_at"] = "Update At";
	$fieldToolTipsgold_check_item[""]["update_at"] = "";
	$placeHoldersgold_check_item[""]["update_at"] = "";
	$fieldLabelsgold_check_item[""]["update_by"] = "Update By";
	$fieldToolTipsgold_check_item[""]["update_by"] = "";
	$placeHoldersgold_check_item[""]["update_by"] = "";
	$fieldLabelsgold_check_item[""]["company"] = "Company";
	$fieldToolTipsgold_check_item[""]["company"] = "";
	$placeHoldersgold_check_item[""]["company"] = "";
	$fieldLabelsgold_check_item[""]["better_flg"] = "Better Flg";
	$fieldToolTipsgold_check_item[""]["better_flg"] = "";
	$placeHoldersgold_check_item[""]["better_flg"] = "";
	$fieldLabelsgold_check_item[""]["sort1"] = "Sort1";
	$fieldToolTipsgold_check_item[""]["sort1"] = "";
	$placeHoldersgold_check_item[""]["sort1"] = "";
	$fieldLabelsgold_check_item[""]["gram_2"] = "Gram 2";
	$fieldToolTipsgold_check_item[""]["gram_2"] = "";
	$placeHoldersgold_check_item[""]["gram_2"] = "";
	$fieldLabelsgold_check_item[""]["sabun"] = "Sabun";
	$fieldToolTipsgold_check_item[""]["sabun"] = "";
	$placeHoldersgold_check_item[""]["sabun"] = "";
	$fieldLabelsgold_check_item[""]["authorize_check"] = "Authorize Check";
	$fieldToolTipsgold_check_item[""]["authorize_check"] = "";
	$placeHoldersgold_check_item[""]["authorize_check"] = "";
	$fieldLabelsgold_check_item[""]["authorize_by"] = "Authorize By";
	$fieldToolTipsgold_check_item[""]["authorize_by"] = "";
	$placeHoldersgold_check_item[""]["authorize_by"] = "";
	if (count($fieldToolTipsgold_check_item[""]))
		$tdatagold_check_item[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgold_check_item["English"] = array();
	$fieldToolTipsgold_check_item["English"] = array();
	$placeHoldersgold_check_item["English"] = array();
	$pageTitlesgold_check_item["English"] = array();
	$fieldLabelsgold_check_item["English"]["id"] = "Id";
	$fieldToolTipsgold_check_item["English"]["id"] = "";
	$placeHoldersgold_check_item["English"]["id"] = "";
	$fieldLabelsgold_check_item["English"]["gold_check_id"] = "Gold Check Id";
	$fieldToolTipsgold_check_item["English"]["gold_check_id"] = "";
	$placeHoldersgold_check_item["English"]["gold_check_id"] = "";
	$fieldLabelsgold_check_item["English"]["sort"] = "Sort";
	$fieldToolTipsgold_check_item["English"]["sort"] = "";
	$placeHoldersgold_check_item["English"]["sort"] = "";
	$fieldLabelsgold_check_item["English"]["name"] = "Name";
	$fieldToolTipsgold_check_item["English"]["name"] = "";
	$placeHoldersgold_check_item["English"]["name"] = "";
	$fieldLabelsgold_check_item["English"]["gram"] = "Gram";
	$fieldToolTipsgold_check_item["English"]["gram"] = "";
	$placeHoldersgold_check_item["English"]["gram"] = "";
	$fieldLabelsgold_check_item["English"]["unit"] = "Unit";
	$fieldToolTipsgold_check_item["English"]["unit"] = "";
	$placeHoldersgold_check_item["English"]["unit"] = "";
	$fieldLabelsgold_check_item["English"]["price"] = "Price";
	$fieldToolTipsgold_check_item["English"]["price"] = "";
	$placeHoldersgold_check_item["English"]["price"] = "";
	$fieldLabelsgold_check_item["English"]["create_at"] = "Create At";
	$fieldToolTipsgold_check_item["English"]["create_at"] = "";
	$placeHoldersgold_check_item["English"]["create_at"] = "";
	$fieldLabelsgold_check_item["English"]["create_by"] = "Create By";
	$fieldToolTipsgold_check_item["English"]["create_by"] = "";
	$placeHoldersgold_check_item["English"]["create_by"] = "";
	$fieldLabelsgold_check_item["English"]["update_at"] = "Update At";
	$fieldToolTipsgold_check_item["English"]["update_at"] = "";
	$placeHoldersgold_check_item["English"]["update_at"] = "";
	$fieldLabelsgold_check_item["English"]["update_by"] = "Update By";
	$fieldToolTipsgold_check_item["English"]["update_by"] = "";
	$placeHoldersgold_check_item["English"]["update_by"] = "";
	$fieldLabelsgold_check_item["English"]["company"] = "Company";
	$fieldToolTipsgold_check_item["English"]["company"] = "";
	$placeHoldersgold_check_item["English"]["company"] = "";
	$fieldLabelsgold_check_item["English"]["better_flg"] = "Better Flg";
	$fieldToolTipsgold_check_item["English"]["better_flg"] = "";
	$placeHoldersgold_check_item["English"]["better_flg"] = "";
	$fieldLabelsgold_check_item["English"]["sort1"] = "Sort1";
	$fieldToolTipsgold_check_item["English"]["sort1"] = "";
	$placeHoldersgold_check_item["English"]["sort1"] = "";
	$fieldLabelsgold_check_item["English"]["gram_2"] = "Gram 2";
	$fieldToolTipsgold_check_item["English"]["gram_2"] = "";
	$placeHoldersgold_check_item["English"]["gram_2"] = "";
	$fieldLabelsgold_check_item["English"]["sabun"] = "Sabun";
	$fieldToolTipsgold_check_item["English"]["sabun"] = "";
	$placeHoldersgold_check_item["English"]["sabun"] = "";
	$fieldLabelsgold_check_item["English"]["authorize_check"] = "Authorize Check";
	$fieldToolTipsgold_check_item["English"]["authorize_check"] = "";
	$placeHoldersgold_check_item["English"]["authorize_check"] = "";
	$fieldLabelsgold_check_item["English"]["authorize_by"] = "Authorize By";
	$fieldToolTipsgold_check_item["English"]["authorize_by"] = "";
	$placeHoldersgold_check_item["English"]["authorize_by"] = "";
	if (count($fieldToolTipsgold_check_item["English"]))
		$tdatagold_check_item[".isUseToolTips"] = true;
}


	$tdatagold_check_item[".NCSearch"] = true;



$tdatagold_check_item[".shortTableName"] = "gold_check_item";
$tdatagold_check_item[".nSecOptions"] = 0;
$tdatagold_check_item[".recsPerRowPrint"] = 1;
$tdatagold_check_item[".mainTableOwnerID"] = "";
$tdatagold_check_item[".moveNext"] = 1;
$tdatagold_check_item[".entityType"] = 0;

$tdatagold_check_item[".strOriginalTableName"] = "gold_check_item";

	



$tdatagold_check_item[".showAddInPopup"] = false;

$tdatagold_check_item[".showEditInPopup"] = false;

$tdatagold_check_item[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatagold_check_item[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatagold_check_item[".fieldsForRegister"] = array();

$tdatagold_check_item[".listAjax"] = false;

	$tdatagold_check_item[".audit"] = true;

	$tdatagold_check_item[".locking"] = false;



$tdatagold_check_item[".list"] = true;

$tdatagold_check_item[".inlineEdit"] = true;


$tdatagold_check_item[".reorderRecordsByHeader"] = true;



$tdatagold_check_item[".inlineAdd"] = true;

$tdatagold_check_item[".import"] = true;

$tdatagold_check_item[".exportTo"] = true;


$tdatagold_check_item[".delete"] = true;

$tdatagold_check_item[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatagold_check_item[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatagold_check_item[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatagold_check_item[".searchSaving"] = false;
//

$tdatagold_check_item[".showSearchPanel"] = true;
		$tdatagold_check_item[".flexibleSearch"] = true;

$tdatagold_check_item[".isUseAjaxSuggest"] = true;

$tdatagold_check_item[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatagold_check_item[".ajaxCodeSnippetAdded"] = false;

$tdatagold_check_item[".buttonsAdded"] = false;

$tdatagold_check_item[".addPageEvents"] = true;

// use timepicker for search panel
$tdatagold_check_item[".isUseTimeForSearch"] = false;



$tdatagold_check_item[".badgeColor"] = "edca00";


$tdatagold_check_item[".allSearchFields"] = array();
$tdatagold_check_item[".filterFields"] = array();
$tdatagold_check_item[".requiredSearchFields"] = array();

$tdatagold_check_item[".allSearchFields"][] = "authorize_check";
	$tdatagold_check_item[".allSearchFields"][] = "authorize_by";
	$tdatagold_check_item[".allSearchFields"][] = "id";
	$tdatagold_check_item[".allSearchFields"][] = "gold_check_id";
	$tdatagold_check_item[".allSearchFields"][] = "name";
	$tdatagold_check_item[".allSearchFields"][] = "gram";
	$tdatagold_check_item[".allSearchFields"][] = "gram_2";
	$tdatagold_check_item[".allSearchFields"][] = "sabun";
	$tdatagold_check_item[".allSearchFields"][] = "unit";
	$tdatagold_check_item[".allSearchFields"][] = "price";
	$tdatagold_check_item[".allSearchFields"][] = "create_at";
	$tdatagold_check_item[".allSearchFields"][] = "create_by";
	$tdatagold_check_item[".allSearchFields"][] = "update_at";
	$tdatagold_check_item[".allSearchFields"][] = "update_by";
	

$tdatagold_check_item[".googleLikeFields"] = array();
$tdatagold_check_item[".googleLikeFields"][] = "id";
$tdatagold_check_item[".googleLikeFields"][] = "gold_check_id";
$tdatagold_check_item[".googleLikeFields"][] = "sort";
$tdatagold_check_item[".googleLikeFields"][] = "name";
$tdatagold_check_item[".googleLikeFields"][] = "gram";
$tdatagold_check_item[".googleLikeFields"][] = "unit";
$tdatagold_check_item[".googleLikeFields"][] = "price";
$tdatagold_check_item[".googleLikeFields"][] = "create_at";
$tdatagold_check_item[".googleLikeFields"][] = "create_by";
$tdatagold_check_item[".googleLikeFields"][] = "update_at";
$tdatagold_check_item[".googleLikeFields"][] = "update_by";
$tdatagold_check_item[".googleLikeFields"][] = "company";
$tdatagold_check_item[".googleLikeFields"][] = "better_flg";
$tdatagold_check_item[".googleLikeFields"][] = "sort1";
$tdatagold_check_item[".googleLikeFields"][] = "gram_2";
$tdatagold_check_item[".googleLikeFields"][] = "sabun";
$tdatagold_check_item[".googleLikeFields"][] = "authorize_check";
$tdatagold_check_item[".googleLikeFields"][] = "authorize_by";


$tdatagold_check_item[".advSearchFields"] = array();
$tdatagold_check_item[".advSearchFields"][] = "authorize_check";
$tdatagold_check_item[".advSearchFields"][] = "authorize_by";
$tdatagold_check_item[".advSearchFields"][] = "id";
$tdatagold_check_item[".advSearchFields"][] = "gold_check_id";
$tdatagold_check_item[".advSearchFields"][] = "name";
$tdatagold_check_item[".advSearchFields"][] = "gram";
$tdatagold_check_item[".advSearchFields"][] = "gram_2";
$tdatagold_check_item[".advSearchFields"][] = "sabun";
$tdatagold_check_item[".advSearchFields"][] = "unit";
$tdatagold_check_item[".advSearchFields"][] = "price";
$tdatagold_check_item[".advSearchFields"][] = "create_at";
$tdatagold_check_item[".advSearchFields"][] = "create_by";
$tdatagold_check_item[".advSearchFields"][] = "update_at";
$tdatagold_check_item[".advSearchFields"][] = "update_by";

$tdatagold_check_item[".tableType"] = "list";

$tdatagold_check_item[".printerPageOrientation"] = 0;
$tdatagold_check_item[".nPrinterPageScale"] = 100;

$tdatagold_check_item[".nPrinterSplitRecords"] = 40;

$tdatagold_check_item[".nPrinterPDFSplitRecords"] = 40;



$tdatagold_check_item[".geocodingEnabled"] = false;





$tdatagold_check_item[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatagold_check_item[".totalsFields"] = array();
$tdatagold_check_item[".totalsFields"][] = array(
	"fName" => "gram",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdatagold_check_item[".totalsFields"][] = array(
	"fName" => "sabun",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatagold_check_item[".totalsFields"][] = array(
	"fName" => "price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdatagold_check_item[".pageSize"] = 100;

$tdatagold_check_item[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `gold_check_item`.`id`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatagold_check_item[".strOrderBy"] = $tstrOrderBy;

$tdatagold_check_item[".orderindexes"] = array();
$tdatagold_check_item[".orderindexes"][] = array(1, (1 ? "ASC" : "DESC"), "`gold_check_item`.`id`");

$tdatagold_check_item[".sqlHead"] = "SELECT `gold_check_item`.`id`,  `gold_check_item`.`gold_check_id`,  `gold_check_item`.`sort`,  `gold_check_item`.`name`,  `gold_check_item`.`gram`,  `gold_check_item`.`unit`,  `gold_check_item`.`price`,  `gold_check_item`.`create_at`,  `gold_check_item`.`create_by`,  `gold_check_item`.`update_at`,  `gold_check_item`.`update_by`,  `gold_check`.`company`,  \"\" AS `better_flg`,  `mst_gold_of_bullion_merchants`.`sort` AS `sort1`,  `gold_check_item`.`gram_2`,  (`gram` - `gram_2`) AS `sabun`,  `gold_check_item`.`authorize_check`,  `gold_check_item`.`authorize_by`";
$tdatagold_check_item[".sqlFrom"] = "FROM `gold_check_item`  LEFT OUTER JOIN `gold_check` ON `gold_check_item`.`gold_check_id` = `gold_check`.`id`  LEFT OUTER JOIN `mst_gold_of_bullion_merchants` ON `gold_check_item`.`name` = `mst_gold_of_bullion_merchants`.`id`";
$tdatagold_check_item[".sqlWhereExpr"] = "";
$tdatagold_check_item[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagold_check_item[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagold_check_item[".arrGroupsPerPage"] = $arrGPP;

$tdatagold_check_item[".highlightSearchResults"] = true;

$tableKeysgold_check_item = array();
$tableKeysgold_check_item[] = "id";
$tdatagold_check_item[".Keys"] = $tableKeysgold_check_item;

$tdatagold_check_item[".listFields"] = array();
$tdatagold_check_item[".listFields"][] = "authorize_check";
$tdatagold_check_item[".listFields"][] = "authorize_by";
$tdatagold_check_item[".listFields"][] = "id";
$tdatagold_check_item[".listFields"][] = "sort1";
$tdatagold_check_item[".listFields"][] = "gold_check_id";
$tdatagold_check_item[".listFields"][] = "name";
$tdatagold_check_item[".listFields"][] = "gram";
$tdatagold_check_item[".listFields"][] = "gram_2";
$tdatagold_check_item[".listFields"][] = "sabun";
$tdatagold_check_item[".listFields"][] = "unit";
$tdatagold_check_item[".listFields"][] = "price";
$tdatagold_check_item[".listFields"][] = "create_at";
$tdatagold_check_item[".listFields"][] = "create_by";
$tdatagold_check_item[".listFields"][] = "update_at";
$tdatagold_check_item[".listFields"][] = "update_by";
$tdatagold_check_item[".listFields"][] = "better_flg";

$tdatagold_check_item[".hideMobileList"] = array();


$tdatagold_check_item[".viewFields"] = array();

$tdatagold_check_item[".addFields"] = array();

$tdatagold_check_item[".masterListFields"] = array();
$tdatagold_check_item[".masterListFields"][] = "authorize_check";
$tdatagold_check_item[".masterListFields"][] = "authorize_by";
$tdatagold_check_item[".masterListFields"][] = "id";
$tdatagold_check_item[".masterListFields"][] = "company";
$tdatagold_check_item[".masterListFields"][] = "sort1";
$tdatagold_check_item[".masterListFields"][] = "gold_check_id";
$tdatagold_check_item[".masterListFields"][] = "sort";
$tdatagold_check_item[".masterListFields"][] = "name";
$tdatagold_check_item[".masterListFields"][] = "gram";
$tdatagold_check_item[".masterListFields"][] = "gram_2";
$tdatagold_check_item[".masterListFields"][] = "sabun";
$tdatagold_check_item[".masterListFields"][] = "unit";
$tdatagold_check_item[".masterListFields"][] = "price";
$tdatagold_check_item[".masterListFields"][] = "create_at";
$tdatagold_check_item[".masterListFields"][] = "create_by";
$tdatagold_check_item[".masterListFields"][] = "update_at";
$tdatagold_check_item[".masterListFields"][] = "update_by";
$tdatagold_check_item[".masterListFields"][] = "better_flg";

$tdatagold_check_item[".inlineAddFields"] = array();
$tdatagold_check_item[".inlineAddFields"][] = "authorize_check";
$tdatagold_check_item[".inlineAddFields"][] = "gold_check_id";
$tdatagold_check_item[".inlineAddFields"][] = "name";
$tdatagold_check_item[".inlineAddFields"][] = "gram";
$tdatagold_check_item[".inlineAddFields"][] = "gram_2";
$tdatagold_check_item[".inlineAddFields"][] = "unit";
$tdatagold_check_item[".inlineAddFields"][] = "price";
$tdatagold_check_item[".inlineAddFields"][] = "better_flg";

$tdatagold_check_item[".editFields"] = array();

$tdatagold_check_item[".inlineEditFields"] = array();
$tdatagold_check_item[".inlineEditFields"][] = "authorize_check";
$tdatagold_check_item[".inlineEditFields"][] = "gold_check_id";
$tdatagold_check_item[".inlineEditFields"][] = "name";
$tdatagold_check_item[".inlineEditFields"][] = "gram";
$tdatagold_check_item[".inlineEditFields"][] = "gram_2";
$tdatagold_check_item[".inlineEditFields"][] = "unit";
$tdatagold_check_item[".inlineEditFields"][] = "price";

$tdatagold_check_item[".updateSelectedFields"] = array();


$tdatagold_check_item[".exportFields"] = array();
$tdatagold_check_item[".exportFields"][] = "authorize_check";
$tdatagold_check_item[".exportFields"][] = "authorize_by";
$tdatagold_check_item[".exportFields"][] = "id";
$tdatagold_check_item[".exportFields"][] = "gold_check_id";
$tdatagold_check_item[".exportFields"][] = "name";
$tdatagold_check_item[".exportFields"][] = "gram";
$tdatagold_check_item[".exportFields"][] = "gram_2";
$tdatagold_check_item[".exportFields"][] = "sabun";
$tdatagold_check_item[".exportFields"][] = "unit";
$tdatagold_check_item[".exportFields"][] = "price";
$tdatagold_check_item[".exportFields"][] = "create_at";
$tdatagold_check_item[".exportFields"][] = "create_by";
$tdatagold_check_item[".exportFields"][] = "update_at";
$tdatagold_check_item[".exportFields"][] = "update_by";

$tdatagold_check_item[".importFields"] = array();
$tdatagold_check_item[".importFields"][] = "id";
$tdatagold_check_item[".importFields"][] = "gold_check_id";
$tdatagold_check_item[".importFields"][] = "name";
$tdatagold_check_item[".importFields"][] = "gram";
$tdatagold_check_item[".importFields"][] = "unit";
$tdatagold_check_item[".importFields"][] = "price";
$tdatagold_check_item[".importFields"][] = "gram_2";
$tdatagold_check_item[".importFields"][] = "authorize_check";
$tdatagold_check_item[".importFields"][] = "authorize_by";

$tdatagold_check_item[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "gold_check_item";
	$fdata["Label"] = GetFieldLabel("gold_check_item","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_check_item`.`id`";

	
	
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




	$tdatagold_check_item["id"] = $fdata;
//	gold_check_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "gold_check_id";
	$fdata["GoodName"] = "gold_check_id";
	$fdata["ownerTable"] = "gold_check_item";
	$fdata["Label"] = GetFieldLabel("gold_check_item","gold_check_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gold_check_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_check_item`.`gold_check_id`";

	
	
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




	$tdatagold_check_item["gold_check_id"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "gold_check_item";
	$fdata["Label"] = GetFieldLabel("gold_check_item","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_check_item`.`sort`";

	
	
			
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








	$tdatagold_check_item["sort"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "gold_check_item";
	$fdata["Label"] = GetFieldLabel("gold_check_item","name");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_check_item`.`name`";

	
	
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
	$edata["LookupTable"] = "mst_gold_of_bullion_merchants";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatagold_check_item["name"] = $fdata;
//	gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "gram";
	$fdata["GoodName"] = "gram";
	$fdata["ownerTable"] = "gold_check_item";
	$fdata["Label"] = GetFieldLabel("gold_check_item","gram");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_check_item`.`gram`";

	
	
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




	$tdatagold_check_item["gram"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "gold_check_item";
	$fdata["Label"] = GetFieldLabel("gold_check_item","unit");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_check_item`.`unit`";

	
	
				$fdata["FieldPermissions"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatagold_check_item["unit"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "gold_check_item";
	$fdata["Label"] = GetFieldLabel("gold_check_item","price");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_check_item`.`price`";

	
	
				$fdata["FieldPermissions"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatagold_check_item["price"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "gold_check_item";
	$fdata["Label"] = GetFieldLabel("gold_check_item","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_check_item`.`create_at`";

	
	
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




	$tdatagold_check_item["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "gold_check_item";
	$fdata["Label"] = GetFieldLabel("gold_check_item","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_check_item`.`create_by`";

	
	
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




	$tdatagold_check_item["create_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "gold_check_item";
	$fdata["Label"] = GetFieldLabel("gold_check_item","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_check_item`.`update_at`";

	
	
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




	$tdatagold_check_item["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "gold_check_item";
	$fdata["Label"] = GetFieldLabel("gold_check_item","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_check_item`.`update_by`";

	
	
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




	$tdatagold_check_item["update_by"] = $fdata;
//	company
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "company";
	$fdata["GoodName"] = "company";
	$fdata["ownerTable"] = "gold_check";
	$fdata["Label"] = GetFieldLabel("gold_check_item","company");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "company";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_check`.`company`";

	
	
			
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








	$tdatagold_check_item["company"] = $fdata;
//	better_flg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "better_flg";
	$fdata["GoodName"] = "better_flg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gold_check_item","better_flg");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
	
	
	
		$fdata["strField"] = "better_flg";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"\"";

	
	
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








	$tdatagold_check_item["better_flg"] = $fdata;
//	sort1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sort1";
	$fdata["GoodName"] = "sort1";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants";
	$fdata["Label"] = GetFieldLabel("gold_check_item","sort1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_gold_of_bullion_merchants`.`sort`";

	
	
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








	$tdatagold_check_item["sort1"] = $fdata;
//	gram_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "gram_2";
	$fdata["GoodName"] = "gram_2";
	$fdata["ownerTable"] = "gold_check_item";
	$fdata["Label"] = GetFieldLabel("gold_check_item","gram_2");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gram_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_check_item`.`gram_2`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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




	$tdatagold_check_item["gram_2"] = $fdata;
//	sabun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "sabun";
	$fdata["GoodName"] = "sabun";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("gold_check_item","sabun");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sabun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(`gram` - `gram_2`)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 1;

	
	
	
	
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




	$tdatagold_check_item["sabun"] = $fdata;
//	authorize_check
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "authorize_check";
	$fdata["GoodName"] = "authorize_check";
	$fdata["ownerTable"] = "gold_check_item";
	$fdata["Label"] = GetFieldLabel("gold_check_item","authorize_check");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "authorize_check";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_check_item`.`authorize_check`";

	
	
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




	$tdatagold_check_item["authorize_check"] = $fdata;
//	authorize_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "authorize_by";
	$fdata["GoodName"] = "authorize_by";
	$fdata["ownerTable"] = "gold_check_item";
	$fdata["Label"] = GetFieldLabel("gold_check_item","authorize_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "authorize_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold_check_item`.`authorize_by`";

	
	
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




	$tdatagold_check_item["authorize_by"] = $fdata;


$tables_data["gold_check_item"]=&$tdatagold_check_item;
$field_labels["gold_check_item"] = &$fieldLabelsgold_check_item;
$fieldToolTips["gold_check_item"] = &$fieldToolTipsgold_check_item;
$placeHolders["gold_check_item"] = &$placeHoldersgold_check_item;
$page_titles["gold_check_item"] = &$pageTitlesgold_check_item;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["gold_check_item"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["gold_check_item"] = array();


	
				$strOriginalDetailsTable="gold_check";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="gold_check";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "gold_check";
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
					$masterTablesData["gold_check_item"][0] = $masterParams;
				$masterTablesData["gold_check_item"][0]["masterKeys"] = array();
	$masterTablesData["gold_check_item"][0]["masterKeys"][]="id";
				$masterTablesData["gold_check_item"][0]["detailKeys"] = array();
	$masterTablesData["gold_check_item"][0]["detailKeys"][]="gold_check_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_gold_check_item()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`gold_check_item`.`id`,  `gold_check_item`.`gold_check_id`,  `gold_check_item`.`sort`,  `gold_check_item`.`name`,  `gold_check_item`.`gram`,  `gold_check_item`.`unit`,  `gold_check_item`.`price`,  `gold_check_item`.`create_at`,  `gold_check_item`.`create_by`,  `gold_check_item`.`update_at`,  `gold_check_item`.`update_by`,  `gold_check`.`company`,  \"\" AS `better_flg`,  `mst_gold_of_bullion_merchants`.`sort` AS `sort1`,  `gold_check_item`.`gram_2`,  (`gram` - `gram_2`) AS `sabun`,  `gold_check_item`.`authorize_check`,  `gold_check_item`.`authorize_by`";
$proto0["m_strFrom"] = "FROM `gold_check_item`  LEFT OUTER JOIN `gold_check` ON `gold_check_item`.`gold_check_id` = `gold_check`.`id`  LEFT OUTER JOIN `mst_gold_of_bullion_merchants` ON `gold_check_item`.`name` = `mst_gold_of_bullion_merchants`.`id`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `gold_check_item`.`id`";
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
	"m_strTable" => "gold_check_item",
	"m_srcTableName" => "gold_check_item"
));

$proto6["m_sql"] = "`gold_check_item`.`id`";
$proto6["m_srcTableName"] = "gold_check_item";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_check_id",
	"m_strTable" => "gold_check_item",
	"m_srcTableName" => "gold_check_item"
));

$proto8["m_sql"] = "`gold_check_item`.`gold_check_id`";
$proto8["m_srcTableName"] = "gold_check_item";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "gold_check_item",
	"m_srcTableName" => "gold_check_item"
));

$proto10["m_sql"] = "`gold_check_item`.`sort`";
$proto10["m_srcTableName"] = "gold_check_item";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "gold_check_item",
	"m_srcTableName" => "gold_check_item"
));

$proto12["m_sql"] = "`gold_check_item`.`name`";
$proto12["m_srcTableName"] = "gold_check_item";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "gram",
	"m_strTable" => "gold_check_item",
	"m_srcTableName" => "gold_check_item"
));

$proto14["m_sql"] = "`gold_check_item`.`gram`";
$proto14["m_srcTableName"] = "gold_check_item";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "gold_check_item",
	"m_srcTableName" => "gold_check_item"
));

$proto16["m_sql"] = "`gold_check_item`.`unit`";
$proto16["m_srcTableName"] = "gold_check_item";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "gold_check_item",
	"m_srcTableName" => "gold_check_item"
));

$proto18["m_sql"] = "`gold_check_item`.`price`";
$proto18["m_srcTableName"] = "gold_check_item";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "gold_check_item",
	"m_srcTableName" => "gold_check_item"
));

$proto20["m_sql"] = "`gold_check_item`.`create_at`";
$proto20["m_srcTableName"] = "gold_check_item";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "gold_check_item",
	"m_srcTableName" => "gold_check_item"
));

$proto22["m_sql"] = "`gold_check_item`.`create_by`";
$proto22["m_srcTableName"] = "gold_check_item";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "gold_check_item",
	"m_srcTableName" => "gold_check_item"
));

$proto24["m_sql"] = "`gold_check_item`.`update_at`";
$proto24["m_srcTableName"] = "gold_check_item";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "gold_check_item",
	"m_srcTableName" => "gold_check_item"
));

$proto26["m_sql"] = "`gold_check_item`.`update_by`";
$proto26["m_srcTableName"] = "gold_check_item";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "company",
	"m_strTable" => "gold_check",
	"m_srcTableName" => "gold_check_item"
));

$proto28["m_sql"] = "`gold_check`.`company`";
$proto28["m_srcTableName"] = "gold_check_item";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto30["m_sql"] = "\"\"";
$proto30["m_srcTableName"] = "gold_check_item";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "better_flg";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_gold_of_bullion_merchants",
	"m_srcTableName" => "gold_check_item"
));

$proto32["m_sql"] = "`mst_gold_of_bullion_merchants`.`sort`";
$proto32["m_srcTableName"] = "gold_check_item";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "sort1";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "gram_2",
	"m_strTable" => "gold_check_item",
	"m_srcTableName" => "gold_check_item"
));

$proto34["m_sql"] = "`gold_check_item`.`gram_2`";
$proto34["m_srcTableName"] = "gold_check_item";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(`gram` - `gram_2`)"
));

$proto36["m_sql"] = "(`gram` - `gram_2`)";
$proto36["m_srcTableName"] = "gold_check_item";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "sabun";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "authorize_check",
	"m_strTable" => "gold_check_item",
	"m_srcTableName" => "gold_check_item"
));

$proto38["m_sql"] = "`gold_check_item`.`authorize_check`";
$proto38["m_srcTableName"] = "gold_check_item";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "authorize_by",
	"m_strTable" => "gold_check_item",
	"m_srcTableName" => "gold_check_item"
));

$proto40["m_sql"] = "`gold_check_item`.`authorize_by`";
$proto40["m_srcTableName"] = "gold_check_item";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "gold_check_item";
$proto43["m_srcTableName"] = "gold_check_item";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "id";
$proto43["m_columns"][] = "gold_check_id";
$proto43["m_columns"][] = "sort";
$proto43["m_columns"][] = "name";
$proto43["m_columns"][] = "gram";
$proto43["m_columns"][] = "unit";
$proto43["m_columns"][] = "price";
$proto43["m_columns"][] = "create_at";
$proto43["m_columns"][] = "create_by";
$proto43["m_columns"][] = "update_at";
$proto43["m_columns"][] = "update_by";
$proto43["m_columns"][] = "better_flg";
$proto43["m_columns"][] = "gram_2";
$proto43["m_columns"][] = "authorize_check";
$proto43["m_columns"][] = "authorize_by";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "`gold_check_item`";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "gold_check_item";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
												$proto46=array();
$proto46["m_link"] = "SQLL_LEFTJOIN";
			$proto47=array();
$proto47["m_strName"] = "gold_check";
$proto47["m_srcTableName"] = "gold_check_item";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id";
$proto47["m_columns"][] = "company";
$proto47["m_columns"][] = "delivery_num";
$proto47["m_columns"][] = "create_at";
$proto47["m_columns"][] = "create_by";
$proto47["m_columns"][] = "update_at";
$proto47["m_columns"][] = "update_by";
$proto47["m_columns"][] = "slip_type";
$proto47["m_columns"][] = "trade_day";
$proto47["m_columns"][] = "billing_amount";
$proto47["m_columns"][] = "file_link";
$proto47["m_columns"][] = "seiren_price";
$proto47["m_columns"][] = "kanryou_henbi";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "LEFT OUTER JOIN `gold_check` ON `gold_check_item`.`gold_check_id` = `gold_check`.`id`";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "gold_check_item";
$proto48=array();
$proto48["m_sql"] = "`gold_check_item`.`gold_check_id` = `gold_check`.`id`";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "gold_check_id",
	"m_strTable" => "gold_check_item",
	"m_srcTableName" => "gold_check_item"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= `gold_check`.`id`";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
												$proto50=array();
$proto50["m_link"] = "SQLL_LEFTJOIN";
			$proto51=array();
$proto51["m_strName"] = "mst_gold_of_bullion_merchants";
$proto51["m_srcTableName"] = "gold_check_item";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "id";
$proto51["m_columns"][] = "name";
$proto51["m_columns"][] = "create_at";
$proto51["m_columns"][] = "create_by";
$proto51["m_columns"][] = "update_at";
$proto51["m_columns"][] = "update_by";
$proto51["m_columns"][] = "sort";
$proto51["m_columns"][] = "price";
$proto51["m_columns"][] = "rate";
$proto51["m_columns"][] = "addition_price";
$proto51["m_columns"][] = "category";
$proto51["m_columns"][] = "formula";
$proto51["m_columns"][] = "round";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "LEFT OUTER JOIN `mst_gold_of_bullion_merchants` ON `gold_check_item`.`name` = `mst_gold_of_bullion_merchants`.`id`";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "gold_check_item";
$proto52=array();
$proto52["m_sql"] = "`gold_check_item`.`name` = `mst_gold_of_bullion_merchants`.`id`";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "gold_check_item",
	"m_srcTableName" => "gold_check_item"
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "= `mst_gold_of_bullion_merchants`.`id`";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "gold_check_item",
	"m_srcTableName" => "gold_check_item"
));

$proto54["m_column"]=$obj;
$proto54["m_bAsc"] = 1;
$proto54["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto54);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="gold_check_item";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gold_check_item = createSqlQuery_gold_check_item();


	
		;

																		

$tdatagold_check_item[".sqlquery"] = $queryData_gold_check_item;

include_once(getabspath("include/gold_check_item_events.php"));
$tableEvents["gold_check_item"] = new eventclass_gold_check_item;
$tdatagold_check_item[".hasEvents"] = true;

?>