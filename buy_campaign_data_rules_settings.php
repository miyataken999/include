<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabuy_campaign_data_rules = array();
	$tdatabuy_campaign_data_rules[".truncateText"] = true;
	$tdatabuy_campaign_data_rules[".NumberOfChars"] = 80;
	$tdatabuy_campaign_data_rules[".ShortName"] = "buy_campaign_data_rules";
	$tdatabuy_campaign_data_rules[".OwnerID"] = "";
	$tdatabuy_campaign_data_rules[".OriginalTable"] = "buy_campaign_data_rules";

//	field labels
$fieldLabelsbuy_campaign_data_rules = array();
$fieldToolTipsbuy_campaign_data_rules = array();
$pageTitlesbuy_campaign_data_rules = array();
$placeHoldersbuy_campaign_data_rules = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsbuy_campaign_data_rules["Japanese"] = array();
	$fieldToolTipsbuy_campaign_data_rules["Japanese"] = array();
	$placeHoldersbuy_campaign_data_rules["Japanese"] = array();
	$pageTitlesbuy_campaign_data_rules["Japanese"] = array();
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["id"] = "Id";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["id"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["id"] = "";
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["sort"] = "Sort";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["sort"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["sort"] = "";
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["name"] = "Name";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["name"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["name"] = "";
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["shouhin_group_id"] = "商品グループID";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["shouhin_group_id"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["shouhin_group_id"] = "";
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["purchase_category"] = "買取種別";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["purchase_category"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["purchase_category"] = "";
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["category_id"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["category_id"] = "";
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["sub_category_id1"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["colorstone_id"] = "色石ID";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["colorstone_id"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["colorstone_id"] = "";
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["product_num"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["product_num"] = "";
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["carat"] = "カラット";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["carat"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["carat"] = "";
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["updated_by"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["updated_by"] = "";
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["updated_at"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["updated_at"] = "";
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["created_by"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["created_by"] = "";
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["created_at"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["created_at"] = "";
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["is_omit"] = "除外条件";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["is_omit"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["is_omit"] = "";
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["ruth_rule"] = "ルース条件";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["ruth_rule"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["ruth_rule"] = "";
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["is_J_purchase_category"] = "宝飾カテゴリ";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["is_J_purchase_category"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["is_J_purchase_category"] = "";
	$fieldLabelsbuy_campaign_data_rules["Japanese"]["is_B_purchase_category"] = "服飾カテゴリ";
	$fieldToolTipsbuy_campaign_data_rules["Japanese"]["is_B_purchase_category"] = "";
	$placeHoldersbuy_campaign_data_rules["Japanese"]["is_B_purchase_category"] = "";
	if (count($fieldToolTipsbuy_campaign_data_rules["Japanese"]))
		$tdatabuy_campaign_data_rules[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbuy_campaign_data_rules[""] = array();
	$fieldToolTipsbuy_campaign_data_rules[""] = array();
	$placeHoldersbuy_campaign_data_rules[""] = array();
	$pageTitlesbuy_campaign_data_rules[""] = array();
	$fieldLabelsbuy_campaign_data_rules[""]["id"] = "Id";
	$fieldToolTipsbuy_campaign_data_rules[""]["id"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["id"] = "";
	$fieldLabelsbuy_campaign_data_rules[""]["sort"] = "Sort";
	$fieldToolTipsbuy_campaign_data_rules[""]["sort"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["sort"] = "";
	$fieldLabelsbuy_campaign_data_rules[""]["name"] = "Name";
	$fieldToolTipsbuy_campaign_data_rules[""]["name"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["name"] = "";
	$fieldLabelsbuy_campaign_data_rules[""]["shouhin_group_id"] = "Shouhin Group Id";
	$fieldToolTipsbuy_campaign_data_rules[""]["shouhin_group_id"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["shouhin_group_id"] = "";
	$fieldLabelsbuy_campaign_data_rules[""]["purchase_category"] = "Purchase Category";
	$fieldToolTipsbuy_campaign_data_rules[""]["purchase_category"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["purchase_category"] = "";
	$fieldLabelsbuy_campaign_data_rules[""]["category_id"] = "Category Id";
	$fieldToolTipsbuy_campaign_data_rules[""]["category_id"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["category_id"] = "";
	$fieldLabelsbuy_campaign_data_rules[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsbuy_campaign_data_rules[""]["sub_category_id1"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["sub_category_id1"] = "";
	$fieldLabelsbuy_campaign_data_rules[""]["colorstone_id"] = "Colorstone Id";
	$fieldToolTipsbuy_campaign_data_rules[""]["colorstone_id"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["colorstone_id"] = "";
	$fieldLabelsbuy_campaign_data_rules[""]["product_num"] = "Product Num";
	$fieldToolTipsbuy_campaign_data_rules[""]["product_num"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["product_num"] = "";
	$fieldLabelsbuy_campaign_data_rules[""]["carat"] = "Carat";
	$fieldToolTipsbuy_campaign_data_rules[""]["carat"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["carat"] = "";
	$fieldLabelsbuy_campaign_data_rules[""]["updated_by"] = "Updated By";
	$fieldToolTipsbuy_campaign_data_rules[""]["updated_by"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["updated_by"] = "";
	$fieldLabelsbuy_campaign_data_rules[""]["updated_at"] = "Updated At";
	$fieldToolTipsbuy_campaign_data_rules[""]["updated_at"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["updated_at"] = "";
	$fieldLabelsbuy_campaign_data_rules[""]["created_by"] = "Created By";
	$fieldToolTipsbuy_campaign_data_rules[""]["created_by"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["created_by"] = "";
	$fieldLabelsbuy_campaign_data_rules[""]["created_at"] = "Created At";
	$fieldToolTipsbuy_campaign_data_rules[""]["created_at"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["created_at"] = "";
	$fieldLabelsbuy_campaign_data_rules[""]["is_omit"] = "Is Omit";
	$fieldToolTipsbuy_campaign_data_rules[""]["is_omit"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["is_omit"] = "";
	$fieldLabelsbuy_campaign_data_rules[""]["ruth_rule"] = "Ruth Rule";
	$fieldToolTipsbuy_campaign_data_rules[""]["ruth_rule"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["ruth_rule"] = "";
	$fieldLabelsbuy_campaign_data_rules[""]["is_J_purchase_category"] = "Is J Purchase Category";
	$fieldToolTipsbuy_campaign_data_rules[""]["is_J_purchase_category"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["is_J_purchase_category"] = "";
	$fieldLabelsbuy_campaign_data_rules[""]["is_B_purchase_category"] = "Is B Purchase Category";
	$fieldToolTipsbuy_campaign_data_rules[""]["is_B_purchase_category"] = "";
	$placeHoldersbuy_campaign_data_rules[""]["is_B_purchase_category"] = "";
	if (count($fieldToolTipsbuy_campaign_data_rules[""]))
		$tdatabuy_campaign_data_rules[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbuy_campaign_data_rules["English"] = array();
	$fieldToolTipsbuy_campaign_data_rules["English"] = array();
	$placeHoldersbuy_campaign_data_rules["English"] = array();
	$pageTitlesbuy_campaign_data_rules["English"] = array();
	$fieldLabelsbuy_campaign_data_rules["English"]["id"] = "Id";
	$fieldToolTipsbuy_campaign_data_rules["English"]["id"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["id"] = "";
	$fieldLabelsbuy_campaign_data_rules["English"]["sort"] = "Sort";
	$fieldToolTipsbuy_campaign_data_rules["English"]["sort"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["sort"] = "";
	$fieldLabelsbuy_campaign_data_rules["English"]["name"] = "Name";
	$fieldToolTipsbuy_campaign_data_rules["English"]["name"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["name"] = "";
	$fieldLabelsbuy_campaign_data_rules["English"]["shouhin_group_id"] = "Shouhin Group Id";
	$fieldToolTipsbuy_campaign_data_rules["English"]["shouhin_group_id"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["shouhin_group_id"] = "";
	$fieldLabelsbuy_campaign_data_rules["English"]["purchase_category"] = "Purchase Category";
	$fieldToolTipsbuy_campaign_data_rules["English"]["purchase_category"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["purchase_category"] = "";
	$fieldLabelsbuy_campaign_data_rules["English"]["category_id"] = "Category Id";
	$fieldToolTipsbuy_campaign_data_rules["English"]["category_id"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["category_id"] = "";
	$fieldLabelsbuy_campaign_data_rules["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsbuy_campaign_data_rules["English"]["sub_category_id1"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["sub_category_id1"] = "";
	$fieldLabelsbuy_campaign_data_rules["English"]["colorstone_id"] = "Colorstone Id";
	$fieldToolTipsbuy_campaign_data_rules["English"]["colorstone_id"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["colorstone_id"] = "";
	$fieldLabelsbuy_campaign_data_rules["English"]["product_num"] = "Product Num";
	$fieldToolTipsbuy_campaign_data_rules["English"]["product_num"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["product_num"] = "";
	$fieldLabelsbuy_campaign_data_rules["English"]["carat"] = "Carat";
	$fieldToolTipsbuy_campaign_data_rules["English"]["carat"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["carat"] = "";
	$fieldLabelsbuy_campaign_data_rules["English"]["updated_by"] = "Updated By";
	$fieldToolTipsbuy_campaign_data_rules["English"]["updated_by"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["updated_by"] = "";
	$fieldLabelsbuy_campaign_data_rules["English"]["updated_at"] = "Updated At";
	$fieldToolTipsbuy_campaign_data_rules["English"]["updated_at"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["updated_at"] = "";
	$fieldLabelsbuy_campaign_data_rules["English"]["created_by"] = "Created By";
	$fieldToolTipsbuy_campaign_data_rules["English"]["created_by"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["created_by"] = "";
	$fieldLabelsbuy_campaign_data_rules["English"]["created_at"] = "Created At";
	$fieldToolTipsbuy_campaign_data_rules["English"]["created_at"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["created_at"] = "";
	$fieldLabelsbuy_campaign_data_rules["English"]["is_omit"] = "Is Omit";
	$fieldToolTipsbuy_campaign_data_rules["English"]["is_omit"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["is_omit"] = "";
	$fieldLabelsbuy_campaign_data_rules["English"]["ruth_rule"] = "Ruth Rule";
	$fieldToolTipsbuy_campaign_data_rules["English"]["ruth_rule"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["ruth_rule"] = "";
	$fieldLabelsbuy_campaign_data_rules["English"]["is_J_purchase_category"] = "Is J Purchase Category";
	$fieldToolTipsbuy_campaign_data_rules["English"]["is_J_purchase_category"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["is_J_purchase_category"] = "";
	$fieldLabelsbuy_campaign_data_rules["English"]["is_B_purchase_category"] = "Is B Purchase Category";
	$fieldToolTipsbuy_campaign_data_rules["English"]["is_B_purchase_category"] = "";
	$placeHoldersbuy_campaign_data_rules["English"]["is_B_purchase_category"] = "";
	if (count($fieldToolTipsbuy_campaign_data_rules["English"]))
		$tdatabuy_campaign_data_rules[".isUseToolTips"] = true;
}


	$tdatabuy_campaign_data_rules[".NCSearch"] = true;



$tdatabuy_campaign_data_rules[".shortTableName"] = "buy_campaign_data_rules";
$tdatabuy_campaign_data_rules[".nSecOptions"] = 0;
$tdatabuy_campaign_data_rules[".recsPerRowPrint"] = 1;
$tdatabuy_campaign_data_rules[".mainTableOwnerID"] = "";
$tdatabuy_campaign_data_rules[".moveNext"] = 1;
$tdatabuy_campaign_data_rules[".entityType"] = 0;

$tdatabuy_campaign_data_rules[".strOriginalTableName"] = "buy_campaign_data_rules";

	



$tdatabuy_campaign_data_rules[".showAddInPopup"] = false;

$tdatabuy_campaign_data_rules[".showEditInPopup"] = false;

$tdatabuy_campaign_data_rules[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabuy_campaign_data_rules[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabuy_campaign_data_rules[".fieldsForRegister"] = array();

$tdatabuy_campaign_data_rules[".listAjax"] = false;

	$tdatabuy_campaign_data_rules[".audit"] = true;

	$tdatabuy_campaign_data_rules[".locking"] = false;



$tdatabuy_campaign_data_rules[".list"] = true;

$tdatabuy_campaign_data_rules[".inlineEdit"] = true;


$tdatabuy_campaign_data_rules[".reorderRecordsByHeader"] = true;



$tdatabuy_campaign_data_rules[".inlineAdd"] = true;

$tdatabuy_campaign_data_rules[".import"] = true;

$tdatabuy_campaign_data_rules[".exportTo"] = true;


$tdatabuy_campaign_data_rules[".delete"] = true;

$tdatabuy_campaign_data_rules[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatabuy_campaign_data_rules[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatabuy_campaign_data_rules[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatabuy_campaign_data_rules[".searchSaving"] = false;
//

$tdatabuy_campaign_data_rules[".showSearchPanel"] = true;
		$tdatabuy_campaign_data_rules[".flexibleSearch"] = true;

$tdatabuy_campaign_data_rules[".isUseAjaxSuggest"] = true;

$tdatabuy_campaign_data_rules[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatabuy_campaign_data_rules[".ajaxCodeSnippetAdded"] = false;

$tdatabuy_campaign_data_rules[".buttonsAdded"] = false;

$tdatabuy_campaign_data_rules[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabuy_campaign_data_rules[".isUseTimeForSearch"] = false;



$tdatabuy_campaign_data_rules[".badgeColor"] = "cfae83";


$tdatabuy_campaign_data_rules[".allSearchFields"] = array();
$tdatabuy_campaign_data_rules[".filterFields"] = array();
$tdatabuy_campaign_data_rules[".requiredSearchFields"] = array();

$tdatabuy_campaign_data_rules[".allSearchFields"][] = "id";
	$tdatabuy_campaign_data_rules[".allSearchFields"][] = "sort";
	$tdatabuy_campaign_data_rules[".allSearchFields"][] = "name";
	$tdatabuy_campaign_data_rules[".allSearchFields"][] = "shouhin_group_id";
	$tdatabuy_campaign_data_rules[".allSearchFields"][] = "purchase_category";
	$tdatabuy_campaign_data_rules[".allSearchFields"][] = "category_id";
	$tdatabuy_campaign_data_rules[".allSearchFields"][] = "sub_category_id1";
	$tdatabuy_campaign_data_rules[".allSearchFields"][] = "colorstone_id";
	$tdatabuy_campaign_data_rules[".allSearchFields"][] = "product_num";
	$tdatabuy_campaign_data_rules[".allSearchFields"][] = "ruth_rule";
	$tdatabuy_campaign_data_rules[".allSearchFields"][] = "carat";
	$tdatabuy_campaign_data_rules[".allSearchFields"][] = "updated_by";
	$tdatabuy_campaign_data_rules[".allSearchFields"][] = "updated_at";
	$tdatabuy_campaign_data_rules[".allSearchFields"][] = "created_by";
	$tdatabuy_campaign_data_rules[".allSearchFields"][] = "created_at";
	$tdatabuy_campaign_data_rules[".allSearchFields"][] = "is_omit";
	$tdatabuy_campaign_data_rules[".allSearchFields"][] = "is_J_purchase_category";
	$tdatabuy_campaign_data_rules[".allSearchFields"][] = "is_B_purchase_category";
	

$tdatabuy_campaign_data_rules[".googleLikeFields"] = array();
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "id";
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "sort";
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "name";
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "shouhin_group_id";
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "purchase_category";
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "category_id";
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "sub_category_id1";
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "colorstone_id";
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "product_num";
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "ruth_rule";
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "carat";
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "updated_by";
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "updated_at";
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "created_by";
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "created_at";
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "is_omit";
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "is_J_purchase_category";
$tdatabuy_campaign_data_rules[".googleLikeFields"][] = "is_B_purchase_category";


$tdatabuy_campaign_data_rules[".advSearchFields"] = array();
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "id";
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "sort";
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "name";
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "shouhin_group_id";
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "purchase_category";
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "category_id";
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "sub_category_id1";
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "colorstone_id";
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "product_num";
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "ruth_rule";
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "carat";
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "updated_by";
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "updated_at";
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "created_by";
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "created_at";
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "is_omit";
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "is_J_purchase_category";
$tdatabuy_campaign_data_rules[".advSearchFields"][] = "is_B_purchase_category";

$tdatabuy_campaign_data_rules[".tableType"] = "list";

$tdatabuy_campaign_data_rules[".printerPageOrientation"] = 0;
$tdatabuy_campaign_data_rules[".nPrinterPageScale"] = 100;

$tdatabuy_campaign_data_rules[".nPrinterSplitRecords"] = 40;

$tdatabuy_campaign_data_rules[".nPrinterPDFSplitRecords"] = 40;



$tdatabuy_campaign_data_rules[".geocodingEnabled"] = false;





$tdatabuy_campaign_data_rules[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabuy_campaign_data_rules[".pageSize"] = 20;

$tdatabuy_campaign_data_rules[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabuy_campaign_data_rules[".strOrderBy"] = $tstrOrderBy;

$tdatabuy_campaign_data_rules[".orderindexes"] = array();
$tdatabuy_campaign_data_rules[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatabuy_campaign_data_rules[".sqlHead"] = "SELECT `id`,  `sort`,  `name`,  `shouhin_group_id`,  `purchase_category`,  `category_id`,  `sub_category_id1`,  `colorstone_id`,  `product_num`,  `ruth_rule`,  `carat`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`,  `is_omit`,  `is_J_purchase_category`,  `is_B_purchase_category`";
$tdatabuy_campaign_data_rules[".sqlFrom"] = "FROM `buy_campaign_data_rules`";
$tdatabuy_campaign_data_rules[".sqlWhereExpr"] = "";
$tdatabuy_campaign_data_rules[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabuy_campaign_data_rules[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabuy_campaign_data_rules[".arrGroupsPerPage"] = $arrGPP;

$tdatabuy_campaign_data_rules[".highlightSearchResults"] = true;

$tableKeysbuy_campaign_data_rules = array();
$tableKeysbuy_campaign_data_rules[] = "id";
$tdatabuy_campaign_data_rules[".Keys"] = $tableKeysbuy_campaign_data_rules;

$tdatabuy_campaign_data_rules[".listFields"] = array();
$tdatabuy_campaign_data_rules[".listFields"][] = "ruth_rule";
$tdatabuy_campaign_data_rules[".listFields"][] = "is_omit";
$tdatabuy_campaign_data_rules[".listFields"][] = "is_J_purchase_category";
$tdatabuy_campaign_data_rules[".listFields"][] = "is_B_purchase_category";
$tdatabuy_campaign_data_rules[".listFields"][] = "id";
$tdatabuy_campaign_data_rules[".listFields"][] = "sort";
$tdatabuy_campaign_data_rules[".listFields"][] = "name";
$tdatabuy_campaign_data_rules[".listFields"][] = "shouhin_group_id";
$tdatabuy_campaign_data_rules[".listFields"][] = "purchase_category";
$tdatabuy_campaign_data_rules[".listFields"][] = "category_id";
$tdatabuy_campaign_data_rules[".listFields"][] = "sub_category_id1";
$tdatabuy_campaign_data_rules[".listFields"][] = "colorstone_id";
$tdatabuy_campaign_data_rules[".listFields"][] = "product_num";
$tdatabuy_campaign_data_rules[".listFields"][] = "carat";
$tdatabuy_campaign_data_rules[".listFields"][] = "updated_by";
$tdatabuy_campaign_data_rules[".listFields"][] = "updated_at";
$tdatabuy_campaign_data_rules[".listFields"][] = "created_by";
$tdatabuy_campaign_data_rules[".listFields"][] = "created_at";

$tdatabuy_campaign_data_rules[".hideMobileList"] = array();


$tdatabuy_campaign_data_rules[".viewFields"] = array();

$tdatabuy_campaign_data_rules[".addFields"] = array();

$tdatabuy_campaign_data_rules[".masterListFields"] = array();
$tdatabuy_campaign_data_rules[".masterListFields"][] = "id";
$tdatabuy_campaign_data_rules[".masterListFields"][] = "sort";
$tdatabuy_campaign_data_rules[".masterListFields"][] = "name";
$tdatabuy_campaign_data_rules[".masterListFields"][] = "shouhin_group_id";
$tdatabuy_campaign_data_rules[".masterListFields"][] = "purchase_category";
$tdatabuy_campaign_data_rules[".masterListFields"][] = "category_id";
$tdatabuy_campaign_data_rules[".masterListFields"][] = "sub_category_id1";
$tdatabuy_campaign_data_rules[".masterListFields"][] = "colorstone_id";
$tdatabuy_campaign_data_rules[".masterListFields"][] = "product_num";
$tdatabuy_campaign_data_rules[".masterListFields"][] = "ruth_rule";
$tdatabuy_campaign_data_rules[".masterListFields"][] = "carat";
$tdatabuy_campaign_data_rules[".masterListFields"][] = "updated_by";
$tdatabuy_campaign_data_rules[".masterListFields"][] = "updated_at";
$tdatabuy_campaign_data_rules[".masterListFields"][] = "created_by";
$tdatabuy_campaign_data_rules[".masterListFields"][] = "created_at";
$tdatabuy_campaign_data_rules[".masterListFields"][] = "is_omit";
$tdatabuy_campaign_data_rules[".masterListFields"][] = "is_J_purchase_category";
$tdatabuy_campaign_data_rules[".masterListFields"][] = "is_B_purchase_category";

$tdatabuy_campaign_data_rules[".inlineAddFields"] = array();
$tdatabuy_campaign_data_rules[".inlineAddFields"][] = "ruth_rule";
$tdatabuy_campaign_data_rules[".inlineAddFields"][] = "is_omit";
$tdatabuy_campaign_data_rules[".inlineAddFields"][] = "is_J_purchase_category";
$tdatabuy_campaign_data_rules[".inlineAddFields"][] = "is_B_purchase_category";
$tdatabuy_campaign_data_rules[".inlineAddFields"][] = "sort";
$tdatabuy_campaign_data_rules[".inlineAddFields"][] = "name";
$tdatabuy_campaign_data_rules[".inlineAddFields"][] = "shouhin_group_id";
$tdatabuy_campaign_data_rules[".inlineAddFields"][] = "purchase_category";
$tdatabuy_campaign_data_rules[".inlineAddFields"][] = "category_id";
$tdatabuy_campaign_data_rules[".inlineAddFields"][] = "sub_category_id1";
$tdatabuy_campaign_data_rules[".inlineAddFields"][] = "colorstone_id";
$tdatabuy_campaign_data_rules[".inlineAddFields"][] = "product_num";
$tdatabuy_campaign_data_rules[".inlineAddFields"][] = "carat";

$tdatabuy_campaign_data_rules[".editFields"] = array();

$tdatabuy_campaign_data_rules[".inlineEditFields"] = array();
$tdatabuy_campaign_data_rules[".inlineEditFields"][] = "ruth_rule";
$tdatabuy_campaign_data_rules[".inlineEditFields"][] = "is_omit";
$tdatabuy_campaign_data_rules[".inlineEditFields"][] = "is_J_purchase_category";
$tdatabuy_campaign_data_rules[".inlineEditFields"][] = "is_B_purchase_category";
$tdatabuy_campaign_data_rules[".inlineEditFields"][] = "sort";
$tdatabuy_campaign_data_rules[".inlineEditFields"][] = "name";
$tdatabuy_campaign_data_rules[".inlineEditFields"][] = "shouhin_group_id";
$tdatabuy_campaign_data_rules[".inlineEditFields"][] = "purchase_category";
$tdatabuy_campaign_data_rules[".inlineEditFields"][] = "category_id";
$tdatabuy_campaign_data_rules[".inlineEditFields"][] = "sub_category_id1";
$tdatabuy_campaign_data_rules[".inlineEditFields"][] = "colorstone_id";
$tdatabuy_campaign_data_rules[".inlineEditFields"][] = "product_num";
$tdatabuy_campaign_data_rules[".inlineEditFields"][] = "carat";

$tdatabuy_campaign_data_rules[".updateSelectedFields"] = array();


$tdatabuy_campaign_data_rules[".exportFields"] = array();
$tdatabuy_campaign_data_rules[".exportFields"][] = "id";
$tdatabuy_campaign_data_rules[".exportFields"][] = "sort";
$tdatabuy_campaign_data_rules[".exportFields"][] = "name";
$tdatabuy_campaign_data_rules[".exportFields"][] = "shouhin_group_id";
$tdatabuy_campaign_data_rules[".exportFields"][] = "purchase_category";
$tdatabuy_campaign_data_rules[".exportFields"][] = "category_id";
$tdatabuy_campaign_data_rules[".exportFields"][] = "sub_category_id1";
$tdatabuy_campaign_data_rules[".exportFields"][] = "colorstone_id";
$tdatabuy_campaign_data_rules[".exportFields"][] = "product_num";
$tdatabuy_campaign_data_rules[".exportFields"][] = "ruth_rule";
$tdatabuy_campaign_data_rules[".exportFields"][] = "carat";
$tdatabuy_campaign_data_rules[".exportFields"][] = "updated_by";
$tdatabuy_campaign_data_rules[".exportFields"][] = "updated_at";
$tdatabuy_campaign_data_rules[".exportFields"][] = "created_by";
$tdatabuy_campaign_data_rules[".exportFields"][] = "created_at";
$tdatabuy_campaign_data_rules[".exportFields"][] = "is_omit";
$tdatabuy_campaign_data_rules[".exportFields"][] = "is_J_purchase_category";
$tdatabuy_campaign_data_rules[".exportFields"][] = "is_B_purchase_category";

$tdatabuy_campaign_data_rules[".importFields"] = array();
$tdatabuy_campaign_data_rules[".importFields"][] = "id";
$tdatabuy_campaign_data_rules[".importFields"][] = "sort";
$tdatabuy_campaign_data_rules[".importFields"][] = "name";
$tdatabuy_campaign_data_rules[".importFields"][] = "shouhin_group_id";
$tdatabuy_campaign_data_rules[".importFields"][] = "purchase_category";
$tdatabuy_campaign_data_rules[".importFields"][] = "category_id";
$tdatabuy_campaign_data_rules[".importFields"][] = "sub_category_id1";
$tdatabuy_campaign_data_rules[".importFields"][] = "colorstone_id";
$tdatabuy_campaign_data_rules[".importFields"][] = "product_num";
$tdatabuy_campaign_data_rules[".importFields"][] = "ruth_rule";
$tdatabuy_campaign_data_rules[".importFields"][] = "carat";
$tdatabuy_campaign_data_rules[".importFields"][] = "updated_by";
$tdatabuy_campaign_data_rules[".importFields"][] = "updated_at";
$tdatabuy_campaign_data_rules[".importFields"][] = "created_by";
$tdatabuy_campaign_data_rules[".importFields"][] = "created_at";
$tdatabuy_campaign_data_rules[".importFields"][] = "is_omit";
$tdatabuy_campaign_data_rules[".importFields"][] = "is_J_purchase_category";
$tdatabuy_campaign_data_rules[".importFields"][] = "is_B_purchase_category";

$tdatabuy_campaign_data_rules[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","id");
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




	$tdatabuy_campaign_data_rules["id"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sort`";

	
	
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




	$tdatabuy_campaign_data_rules["sort"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatabuy_campaign_data_rules["name"] = $fdata;
//	shouhin_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "shouhin_group_id";
	$fdata["GoodName"] = "shouhin_group_id";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","shouhin_group_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shouhin_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_group_id`";

	
	
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
	$edata["LookupTable"] = "shouhin_group";
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




	$tdatabuy_campaign_data_rules["shouhin_group_id"] = $fdata;
//	purchase_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "purchase_category";
	$fdata["GoodName"] = "purchase_category";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","purchase_category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "purchase_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`purchase_category`";

	
	
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
	$edata["LookupTable"] = "_chigin_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "initial";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "initial";

	
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




	$tdatabuy_campaign_data_rules["purchase_category"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","category_id");
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
	$edata["LookupTable"] = "store_categories";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "category_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "category_name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "sub_category_id1";

	
	
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




	$tdatabuy_campaign_data_rules["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_category_id1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sub_category_id1`";

	
	
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
	$edata["LookupTable"] = "store_sub_categories";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "category_id", "lookup" => "category_id" );

	
	

	
	
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




	$tdatabuy_campaign_data_rules["sub_category_id1"] = $fdata;
//	colorstone_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "colorstone_id";
	$fdata["GoodName"] = "colorstone_id";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","colorstone_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "colorstone_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`colorstone_id`";

	
	
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
	$edata["LookupTable"] = "mst_colorstone";
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




	$tdatabuy_campaign_data_rules["colorstone_id"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","product_num");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`product_num`";

	
	
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
	$edata["LookupTable"] = "mst_brand2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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




	$tdatabuy_campaign_data_rules["product_num"] = $fdata;
//	ruth_rule
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ruth_rule";
	$fdata["GoodName"] = "ruth_rule";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","ruth_rule");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ruth_rule";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ruth_rule`";

	
	
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




	$tdatabuy_campaign_data_rules["ruth_rule"] = $fdata;
//	carat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "carat";
	$fdata["GoodName"] = "carat";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","carat");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "carat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`carat`";

	
	
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




	$tdatabuy_campaign_data_rules["carat"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","updated_by");
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




	$tdatabuy_campaign_data_rules["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","updated_at");
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




	$tdatabuy_campaign_data_rules["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","created_by");
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




	$tdatabuy_campaign_data_rules["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","created_at");
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




	$tdatabuy_campaign_data_rules["created_at"] = $fdata;
//	is_omit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "is_omit";
	$fdata["GoodName"] = "is_omit";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","is_omit");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_omit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_omit`";

	
	
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




	$tdatabuy_campaign_data_rules["is_omit"] = $fdata;
//	is_J_purchase_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "is_J_purchase_category";
	$fdata["GoodName"] = "is_J_purchase_category";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","is_J_purchase_category");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_J_purchase_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_J_purchase_category`";

	
	
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




	$tdatabuy_campaign_data_rules["is_J_purchase_category"] = $fdata;
//	is_B_purchase_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "is_B_purchase_category";
	$fdata["GoodName"] = "is_B_purchase_category";
	$fdata["ownerTable"] = "buy_campaign_data_rules";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_rules","is_B_purchase_category");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_B_purchase_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_B_purchase_category`";

	
	
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




	$tdatabuy_campaign_data_rules["is_B_purchase_category"] = $fdata;


$tables_data["buy_campaign_data_rules"]=&$tdatabuy_campaign_data_rules;
$field_labels["buy_campaign_data_rules"] = &$fieldLabelsbuy_campaign_data_rules;
$fieldToolTips["buy_campaign_data_rules"] = &$fieldToolTipsbuy_campaign_data_rules;
$placeHolders["buy_campaign_data_rules"] = &$placeHoldersbuy_campaign_data_rules;
$page_titles["buy_campaign_data_rules"] = &$pageTitlesbuy_campaign_data_rules;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["buy_campaign_data_rules"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["buy_campaign_data_rules"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_buy_campaign_data_rules()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `sort`,  `name`,  `shouhin_group_id`,  `purchase_category`,  `category_id`,  `sub_category_id1`,  `colorstone_id`,  `product_num`,  `ruth_rule`,  `carat`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`,  `is_omit`,  `is_J_purchase_category`,  `is_B_purchase_category`";
$proto0["m_strFrom"] = "FROM `buy_campaign_data_rules`";
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
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "buy_campaign_data_rules";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto8["m_sql"] = "`sort`";
$proto8["m_srcTableName"] = "buy_campaign_data_rules";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto10["m_sql"] = "`name`";
$proto10["m_srcTableName"] = "buy_campaign_data_rules";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "shouhin_group_id",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto12["m_sql"] = "`shouhin_group_id`";
$proto12["m_srcTableName"] = "buy_campaign_data_rules";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "purchase_category",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto14["m_sql"] = "`purchase_category`";
$proto14["m_srcTableName"] = "buy_campaign_data_rules";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto16["m_sql"] = "`category_id`";
$proto16["m_srcTableName"] = "buy_campaign_data_rules";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto18["m_sql"] = "`sub_category_id1`";
$proto18["m_srcTableName"] = "buy_campaign_data_rules";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "colorstone_id",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto20["m_sql"] = "`colorstone_id`";
$proto20["m_srcTableName"] = "buy_campaign_data_rules";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto22["m_sql"] = "`product_num`";
$proto22["m_srcTableName"] = "buy_campaign_data_rules";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ruth_rule",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto24["m_sql"] = "`ruth_rule`";
$proto24["m_srcTableName"] = "buy_campaign_data_rules";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "carat",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto26["m_sql"] = "`carat`";
$proto26["m_srcTableName"] = "buy_campaign_data_rules";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto28["m_sql"] = "`updated_by`";
$proto28["m_srcTableName"] = "buy_campaign_data_rules";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto30["m_sql"] = "`updated_at`";
$proto30["m_srcTableName"] = "buy_campaign_data_rules";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto32["m_sql"] = "`created_by`";
$proto32["m_srcTableName"] = "buy_campaign_data_rules";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto34["m_sql"] = "`created_at`";
$proto34["m_srcTableName"] = "buy_campaign_data_rules";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "is_omit",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto36["m_sql"] = "`is_omit`";
$proto36["m_srcTableName"] = "buy_campaign_data_rules";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "is_J_purchase_category",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto38["m_sql"] = "`is_J_purchase_category`";
$proto38["m_srcTableName"] = "buy_campaign_data_rules";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "is_B_purchase_category",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto40["m_sql"] = "`is_B_purchase_category`";
$proto40["m_srcTableName"] = "buy_campaign_data_rules";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "buy_campaign_data_rules";
$proto43["m_srcTableName"] = "buy_campaign_data_rules";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "id";
$proto43["m_columns"][] = "buy_campaign_data_detail_id";
$proto43["m_columns"][] = "sort";
$proto43["m_columns"][] = "name";
$proto43["m_columns"][] = "shouhin_group_id";
$proto43["m_columns"][] = "purchase_category";
$proto43["m_columns"][] = "category_id";
$proto43["m_columns"][] = "sub_category_id1";
$proto43["m_columns"][] = "colorstone_id";
$proto43["m_columns"][] = "product_num";
$proto43["m_columns"][] = "ruth_rule";
$proto43["m_columns"][] = "carat";
$proto43["m_columns"][] = "updated_by";
$proto43["m_columns"][] = "updated_at";
$proto43["m_columns"][] = "created_by";
$proto43["m_columns"][] = "created_at";
$proto43["m_columns"][] = "is_omit";
$proto43["m_columns"][] = "is_J_purchase_category";
$proto43["m_columns"][] = "is_B_purchase_category";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "`buy_campaign_data_rules`";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "buy_campaign_data_rules";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "buy_campaign_data_rules",
	"m_srcTableName" => "buy_campaign_data_rules"
));

$proto46["m_column"]=$obj;
$proto46["m_bAsc"] = 0;
$proto46["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto46);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="buy_campaign_data_rules";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_buy_campaign_data_rules = createSqlQuery_buy_campaign_data_rules();


	
		;

																		

$tdatabuy_campaign_data_rules[".sqlquery"] = $queryData_buy_campaign_data_rules;

include_once(getabspath("include/buy_campaign_data_rules_events.php"));
$tableEvents["buy_campaign_data_rules"] = new eventclass_buy_campaign_data_rules;
$tdatabuy_campaign_data_rules[".hasEvents"] = true;

?>