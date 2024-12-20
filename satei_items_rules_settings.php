<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasatei_items_rules = array();
	$tdatasatei_items_rules[".truncateText"] = true;
	$tdatasatei_items_rules[".NumberOfChars"] = 80;
	$tdatasatei_items_rules[".ShortName"] = "satei_items_rules";
	$tdatasatei_items_rules[".OwnerID"] = "";
	$tdatasatei_items_rules[".OriginalTable"] = "satei_items_rules";

//	field labels
$fieldLabelssatei_items_rules = array();
$fieldToolTipssatei_items_rules = array();
$pageTitlessatei_items_rules = array();
$placeHolderssatei_items_rules = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelssatei_items_rules["Japanese"] = array();
	$fieldToolTipssatei_items_rules["Japanese"] = array();
	$placeHolderssatei_items_rules["Japanese"] = array();
	$pageTitlessatei_items_rules["Japanese"] = array();
	$fieldLabelssatei_items_rules["Japanese"]["id"] = "Id";
	$fieldToolTipssatei_items_rules["Japanese"]["id"] = "";
	$placeHolderssatei_items_rules["Japanese"]["id"] = "";
	$fieldLabelssatei_items_rules["Japanese"]["sort"] = "Sort";
	$fieldToolTipssatei_items_rules["Japanese"]["sort"] = "";
	$placeHolderssatei_items_rules["Japanese"]["sort"] = "";
	$fieldLabelssatei_items_rules["Japanese"]["update_by"] = "更新者";
	$fieldToolTipssatei_items_rules["Japanese"]["update_by"] = "";
	$placeHolderssatei_items_rules["Japanese"]["update_by"] = "";
	$fieldLabelssatei_items_rules["Japanese"]["update_at"] = "更新日";
	$fieldToolTipssatei_items_rules["Japanese"]["update_at"] = "";
	$placeHolderssatei_items_rules["Japanese"]["update_at"] = "";
	$fieldLabelssatei_items_rules["Japanese"]["create_by"] = "作成者";
	$fieldToolTipssatei_items_rules["Japanese"]["create_by"] = "";
	$placeHolderssatei_items_rules["Japanese"]["create_by"] = "";
	$fieldLabelssatei_items_rules["Japanese"]["create_at"] = "作成日";
	$fieldToolTipssatei_items_rules["Japanese"]["create_at"] = "";
	$placeHolderssatei_items_rules["Japanese"]["create_at"] = "";
	$fieldLabelssatei_items_rules["Japanese"]["template"] = "テンプレート";
	$fieldToolTipssatei_items_rules["Japanese"]["template"] = "";
	$placeHolderssatei_items_rules["Japanese"]["template"] = "";
	$fieldLabelssatei_items_rules["Japanese"]["purchase_category"] = "種別";
	$fieldToolTipssatei_items_rules["Japanese"]["purchase_category"] = "";
	$placeHolderssatei_items_rules["Japanese"]["purchase_category"] = "";
	$fieldLabelssatei_items_rules["Japanese"]["category_id"] = "大カテ";
	$fieldToolTipssatei_items_rules["Japanese"]["category_id"] = "";
	$placeHolderssatei_items_rules["Japanese"]["category_id"] = "";
	$fieldLabelssatei_items_rules["Japanese"]["sub_category_id1"] = "中カテ";
	$fieldToolTipssatei_items_rules["Japanese"]["sub_category_id1"] = "";
	$placeHolderssatei_items_rules["Japanese"]["sub_category_id1"] = "";
	$fieldLabelssatei_items_rules["Japanese"]["product_num"] = "ブランド";
	$fieldToolTipssatei_items_rules["Japanese"]["product_num"] = "";
	$placeHolderssatei_items_rules["Japanese"]["product_num"] = "";
	$fieldLabelssatei_items_rules["Japanese"]["colorstone_id"] = "宝石";
	$fieldToolTipssatei_items_rules["Japanese"]["colorstone_id"] = "";
	$placeHolderssatei_items_rules["Japanese"]["colorstone_id"] = "";
	$fieldLabelssatei_items_rules["Japanese"]["is_satei_group_brand"] = "服飾特定ブランド";
	$fieldToolTipssatei_items_rules["Japanese"]["is_satei_group_brand"] = "";
	$placeHolderssatei_items_rules["Japanese"]["is_satei_group_brand"] = "";
	$fieldLabelssatei_items_rules["Japanese"]["name"] = "タイトル（メモ）";
	$fieldToolTipssatei_items_rules["Japanese"]["name"] = "";
	$placeHolderssatei_items_rules["Japanese"]["name"] = "";
	$fieldLabelssatei_items_rules["Japanese"]["jewerly_category"] = "宝飾大カテ";
	$fieldToolTipssatei_items_rules["Japanese"]["jewerly_category"] = "";
	$placeHolderssatei_items_rules["Japanese"]["jewerly_category"] = "";
	$fieldLabelssatei_items_rules["Japanese"]["is_satei_group_jewelry"] = "宝飾特定ブランド";
	$fieldToolTipssatei_items_rules["Japanese"]["is_satei_group_jewelry"] = "";
	$placeHolderssatei_items_rules["Japanese"]["is_satei_group_jewelry"] = "";
	$fieldLabelssatei_items_rules["Japanese"]["is_exclude"] = "除外";
	$fieldToolTipssatei_items_rules["Japanese"]["is_exclude"] = "";
	$placeHolderssatei_items_rules["Japanese"]["is_exclude"] = "";
	if (count($fieldToolTipssatei_items_rules["Japanese"]))
		$tdatasatei_items_rules[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssatei_items_rules[""] = array();
	$fieldToolTipssatei_items_rules[""] = array();
	$placeHolderssatei_items_rules[""] = array();
	$pageTitlessatei_items_rules[""] = array();
	$fieldLabelssatei_items_rules[""]["id"] = "Id";
	$fieldToolTipssatei_items_rules[""]["id"] = "";
	$placeHolderssatei_items_rules[""]["id"] = "";
	$fieldLabelssatei_items_rules[""]["sort"] = "Sort";
	$fieldToolTipssatei_items_rules[""]["sort"] = "";
	$placeHolderssatei_items_rules[""]["sort"] = "";
	$fieldLabelssatei_items_rules[""]["update_by"] = "Update By";
	$fieldToolTipssatei_items_rules[""]["update_by"] = "";
	$placeHolderssatei_items_rules[""]["update_by"] = "";
	$fieldLabelssatei_items_rules[""]["update_at"] = "Update At";
	$fieldToolTipssatei_items_rules[""]["update_at"] = "";
	$placeHolderssatei_items_rules[""]["update_at"] = "";
	$fieldLabelssatei_items_rules[""]["create_by"] = "Create By";
	$fieldToolTipssatei_items_rules[""]["create_by"] = "";
	$placeHolderssatei_items_rules[""]["create_by"] = "";
	$fieldLabelssatei_items_rules[""]["create_at"] = "Create At";
	$fieldToolTipssatei_items_rules[""]["create_at"] = "";
	$placeHolderssatei_items_rules[""]["create_at"] = "";
	$fieldLabelssatei_items_rules[""]["template"] = "Template";
	$fieldToolTipssatei_items_rules[""]["template"] = "";
	$placeHolderssatei_items_rules[""]["template"] = "";
	$fieldLabelssatei_items_rules[""]["purchase_category"] = "Purchase Category";
	$fieldToolTipssatei_items_rules[""]["purchase_category"] = "";
	$placeHolderssatei_items_rules[""]["purchase_category"] = "";
	$fieldLabelssatei_items_rules[""]["category_id"] = "Category Id";
	$fieldToolTipssatei_items_rules[""]["category_id"] = "";
	$placeHolderssatei_items_rules[""]["category_id"] = "";
	$fieldLabelssatei_items_rules[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipssatei_items_rules[""]["sub_category_id1"] = "";
	$placeHolderssatei_items_rules[""]["sub_category_id1"] = "";
	$fieldLabelssatei_items_rules[""]["product_num"] = "Product Num";
	$fieldToolTipssatei_items_rules[""]["product_num"] = "";
	$placeHolderssatei_items_rules[""]["product_num"] = "";
	$fieldLabelssatei_items_rules[""]["colorstone_id"] = "Colorstone Id";
	$fieldToolTipssatei_items_rules[""]["colorstone_id"] = "";
	$placeHolderssatei_items_rules[""]["colorstone_id"] = "";
	$fieldLabelssatei_items_rules[""]["is_satei_group_brand"] = "Is Satei Group Brand";
	$fieldToolTipssatei_items_rules[""]["is_satei_group_brand"] = "";
	$placeHolderssatei_items_rules[""]["is_satei_group_brand"] = "";
	$fieldLabelssatei_items_rules[""]["name"] = "Name";
	$fieldToolTipssatei_items_rules[""]["name"] = "";
	$placeHolderssatei_items_rules[""]["name"] = "";
	$fieldLabelssatei_items_rules[""]["jewerly_category"] = "Jewerly Category";
	$fieldToolTipssatei_items_rules[""]["jewerly_category"] = "";
	$placeHolderssatei_items_rules[""]["jewerly_category"] = "";
	$fieldLabelssatei_items_rules[""]["is_satei_group_jewelry"] = "Is Satei Group Jewelry";
	$fieldToolTipssatei_items_rules[""]["is_satei_group_jewelry"] = "";
	$placeHolderssatei_items_rules[""]["is_satei_group_jewelry"] = "";
	$fieldLabelssatei_items_rules[""]["is_exclude"] = "Is Exclude";
	$fieldToolTipssatei_items_rules[""]["is_exclude"] = "";
	$placeHolderssatei_items_rules[""]["is_exclude"] = "";
	if (count($fieldToolTipssatei_items_rules[""]))
		$tdatasatei_items_rules[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssatei_items_rules["English"] = array();
	$fieldToolTipssatei_items_rules["English"] = array();
	$placeHolderssatei_items_rules["English"] = array();
	$pageTitlessatei_items_rules["English"] = array();
	$fieldLabelssatei_items_rules["English"]["id"] = "Id";
	$fieldToolTipssatei_items_rules["English"]["id"] = "";
	$placeHolderssatei_items_rules["English"]["id"] = "";
	$fieldLabelssatei_items_rules["English"]["sort"] = "Sort";
	$fieldToolTipssatei_items_rules["English"]["sort"] = "";
	$placeHolderssatei_items_rules["English"]["sort"] = "";
	$fieldLabelssatei_items_rules["English"]["update_by"] = "Update By";
	$fieldToolTipssatei_items_rules["English"]["update_by"] = "";
	$placeHolderssatei_items_rules["English"]["update_by"] = "";
	$fieldLabelssatei_items_rules["English"]["update_at"] = "Update At";
	$fieldToolTipssatei_items_rules["English"]["update_at"] = "";
	$placeHolderssatei_items_rules["English"]["update_at"] = "";
	$fieldLabelssatei_items_rules["English"]["create_by"] = "Create By";
	$fieldToolTipssatei_items_rules["English"]["create_by"] = "";
	$placeHolderssatei_items_rules["English"]["create_by"] = "";
	$fieldLabelssatei_items_rules["English"]["create_at"] = "Create At";
	$fieldToolTipssatei_items_rules["English"]["create_at"] = "";
	$placeHolderssatei_items_rules["English"]["create_at"] = "";
	$fieldLabelssatei_items_rules["English"]["template"] = "Template";
	$fieldToolTipssatei_items_rules["English"]["template"] = "";
	$placeHolderssatei_items_rules["English"]["template"] = "";
	$fieldLabelssatei_items_rules["English"]["purchase_category"] = "Purchase Category";
	$fieldToolTipssatei_items_rules["English"]["purchase_category"] = "";
	$placeHolderssatei_items_rules["English"]["purchase_category"] = "";
	$fieldLabelssatei_items_rules["English"]["category_id"] = "Category Id";
	$fieldToolTipssatei_items_rules["English"]["category_id"] = "";
	$placeHolderssatei_items_rules["English"]["category_id"] = "";
	$fieldLabelssatei_items_rules["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipssatei_items_rules["English"]["sub_category_id1"] = "";
	$placeHolderssatei_items_rules["English"]["sub_category_id1"] = "";
	$fieldLabelssatei_items_rules["English"]["product_num"] = "Product Num";
	$fieldToolTipssatei_items_rules["English"]["product_num"] = "";
	$placeHolderssatei_items_rules["English"]["product_num"] = "";
	$fieldLabelssatei_items_rules["English"]["colorstone_id"] = "Colorstone Id";
	$fieldToolTipssatei_items_rules["English"]["colorstone_id"] = "";
	$placeHolderssatei_items_rules["English"]["colorstone_id"] = "";
	$fieldLabelssatei_items_rules["English"]["is_satei_group_brand"] = "Is Satei Group Brand";
	$fieldToolTipssatei_items_rules["English"]["is_satei_group_brand"] = "";
	$placeHolderssatei_items_rules["English"]["is_satei_group_brand"] = "";
	$fieldLabelssatei_items_rules["English"]["name"] = "Name";
	$fieldToolTipssatei_items_rules["English"]["name"] = "";
	$placeHolderssatei_items_rules["English"]["name"] = "";
	$fieldLabelssatei_items_rules["English"]["jewerly_category"] = "Jewerly Category";
	$fieldToolTipssatei_items_rules["English"]["jewerly_category"] = "";
	$placeHolderssatei_items_rules["English"]["jewerly_category"] = "";
	$fieldLabelssatei_items_rules["English"]["is_satei_group_jewelry"] = "Is Satei Group Jewelry";
	$fieldToolTipssatei_items_rules["English"]["is_satei_group_jewelry"] = "";
	$placeHolderssatei_items_rules["English"]["is_satei_group_jewelry"] = "";
	$fieldLabelssatei_items_rules["English"]["is_exclude"] = "Is Exclude";
	$fieldToolTipssatei_items_rules["English"]["is_exclude"] = "";
	$placeHolderssatei_items_rules["English"]["is_exclude"] = "";
	if (count($fieldToolTipssatei_items_rules["English"]))
		$tdatasatei_items_rules[".isUseToolTips"] = true;
}


	$tdatasatei_items_rules[".NCSearch"] = true;



$tdatasatei_items_rules[".shortTableName"] = "satei_items_rules";
$tdatasatei_items_rules[".nSecOptions"] = 0;
$tdatasatei_items_rules[".recsPerRowPrint"] = 1;
$tdatasatei_items_rules[".mainTableOwnerID"] = "";
$tdatasatei_items_rules[".moveNext"] = 1;
$tdatasatei_items_rules[".entityType"] = 0;

$tdatasatei_items_rules[".strOriginalTableName"] = "satei_items_rules";

	



$tdatasatei_items_rules[".showAddInPopup"] = false;

$tdatasatei_items_rules[".showEditInPopup"] = false;

$tdatasatei_items_rules[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasatei_items_rules[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasatei_items_rules[".fieldsForRegister"] = array();

$tdatasatei_items_rules[".listAjax"] = false;

	$tdatasatei_items_rules[".audit"] = false;

	$tdatasatei_items_rules[".locking"] = false;

$tdatasatei_items_rules[".edit"] = true;
$tdatasatei_items_rules[".afterEditAction"] = 1;
$tdatasatei_items_rules[".closePopupAfterEdit"] = 1;
$tdatasatei_items_rules[".afterEditActionDetTable"] = "";

$tdatasatei_items_rules[".add"] = true;
$tdatasatei_items_rules[".afterAddAction"] = 1;
$tdatasatei_items_rules[".closePopupAfterAdd"] = 1;
$tdatasatei_items_rules[".afterAddActionDetTable"] = "";

$tdatasatei_items_rules[".list"] = true;

$tdatasatei_items_rules[".inlineEdit"] = true;


$tdatasatei_items_rules[".reorderRecordsByHeader"] = true;



$tdatasatei_items_rules[".inlineAdd"] = true;

$tdatasatei_items_rules[".import"] = true;

$tdatasatei_items_rules[".exportTo"] = true;


$tdatasatei_items_rules[".delete"] = true;

$tdatasatei_items_rules[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasatei_items_rules[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasatei_items_rules[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasatei_items_rules[".searchSaving"] = false;
//

$tdatasatei_items_rules[".showSearchPanel"] = true;
		$tdatasatei_items_rules[".flexibleSearch"] = true;

$tdatasatei_items_rules[".isUseAjaxSuggest"] = true;

$tdatasatei_items_rules[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatasatei_items_rules[".ajaxCodeSnippetAdded"] = false;

$tdatasatei_items_rules[".buttonsAdded"] = false;

$tdatasatei_items_rules[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasatei_items_rules[".isUseTimeForSearch"] = false;





$tdatasatei_items_rules[".allSearchFields"] = array();
$tdatasatei_items_rules[".filterFields"] = array();
$tdatasatei_items_rules[".requiredSearchFields"] = array();

$tdatasatei_items_rules[".allSearchFields"][] = "id";
	$tdatasatei_items_rules[".allSearchFields"][] = "is_exclude";
	$tdatasatei_items_rules[".allSearchFields"][] = "sort";
	$tdatasatei_items_rules[".allSearchFields"][] = "purchase_category";
	$tdatasatei_items_rules[".allSearchFields"][] = "jewerly_category";
	$tdatasatei_items_rules[".allSearchFields"][] = "category_id";
	$tdatasatei_items_rules[".allSearchFields"][] = "sub_category_id1";
	$tdatasatei_items_rules[".allSearchFields"][] = "product_num";
	$tdatasatei_items_rules[".allSearchFields"][] = "colorstone_id";
	$tdatasatei_items_rules[".allSearchFields"][] = "is_satei_group_brand";
	$tdatasatei_items_rules[".allSearchFields"][] = "is_satei_group_jewelry";
	$tdatasatei_items_rules[".allSearchFields"][] = "template";
	$tdatasatei_items_rules[".allSearchFields"][] = "name";
	$tdatasatei_items_rules[".allSearchFields"][] = "update_by";
	$tdatasatei_items_rules[".allSearchFields"][] = "update_at";
	$tdatasatei_items_rules[".allSearchFields"][] = "create_by";
	$tdatasatei_items_rules[".allSearchFields"][] = "create_at";
	

$tdatasatei_items_rules[".googleLikeFields"] = array();
$tdatasatei_items_rules[".googleLikeFields"][] = "id";
$tdatasatei_items_rules[".googleLikeFields"][] = "sort";
$tdatasatei_items_rules[".googleLikeFields"][] = "update_by";
$tdatasatei_items_rules[".googleLikeFields"][] = "update_at";
$tdatasatei_items_rules[".googleLikeFields"][] = "create_by";
$tdatasatei_items_rules[".googleLikeFields"][] = "create_at";
$tdatasatei_items_rules[".googleLikeFields"][] = "template";
$tdatasatei_items_rules[".googleLikeFields"][] = "purchase_category";
$tdatasatei_items_rules[".googleLikeFields"][] = "category_id";
$tdatasatei_items_rules[".googleLikeFields"][] = "sub_category_id1";
$tdatasatei_items_rules[".googleLikeFields"][] = "product_num";
$tdatasatei_items_rules[".googleLikeFields"][] = "colorstone_id";
$tdatasatei_items_rules[".googleLikeFields"][] = "is_satei_group_brand";
$tdatasatei_items_rules[".googleLikeFields"][] = "name";
$tdatasatei_items_rules[".googleLikeFields"][] = "jewerly_category";
$tdatasatei_items_rules[".googleLikeFields"][] = "is_satei_group_jewelry";
$tdatasatei_items_rules[".googleLikeFields"][] = "is_exclude";


$tdatasatei_items_rules[".advSearchFields"] = array();
$tdatasatei_items_rules[".advSearchFields"][] = "id";
$tdatasatei_items_rules[".advSearchFields"][] = "is_exclude";
$tdatasatei_items_rules[".advSearchFields"][] = "sort";
$tdatasatei_items_rules[".advSearchFields"][] = "purchase_category";
$tdatasatei_items_rules[".advSearchFields"][] = "jewerly_category";
$tdatasatei_items_rules[".advSearchFields"][] = "category_id";
$tdatasatei_items_rules[".advSearchFields"][] = "sub_category_id1";
$tdatasatei_items_rules[".advSearchFields"][] = "product_num";
$tdatasatei_items_rules[".advSearchFields"][] = "colorstone_id";
$tdatasatei_items_rules[".advSearchFields"][] = "is_satei_group_brand";
$tdatasatei_items_rules[".advSearchFields"][] = "is_satei_group_jewelry";
$tdatasatei_items_rules[".advSearchFields"][] = "template";
$tdatasatei_items_rules[".advSearchFields"][] = "name";
$tdatasatei_items_rules[".advSearchFields"][] = "update_by";
$tdatasatei_items_rules[".advSearchFields"][] = "update_at";
$tdatasatei_items_rules[".advSearchFields"][] = "create_by";
$tdatasatei_items_rules[".advSearchFields"][] = "create_at";

$tdatasatei_items_rules[".tableType"] = "list";

$tdatasatei_items_rules[".printerPageOrientation"] = 0;
$tdatasatei_items_rules[".nPrinterPageScale"] = 100;

$tdatasatei_items_rules[".nPrinterSplitRecords"] = 40;

$tdatasatei_items_rules[".nPrinterPDFSplitRecords"] = 40;



$tdatasatei_items_rules[".geocodingEnabled"] = false;





$tdatasatei_items_rules[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatasatei_items_rules[".pageSize"] = 100;

$tdatasatei_items_rules[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasatei_items_rules[".strOrderBy"] = $tstrOrderBy;

$tdatasatei_items_rules[".orderindexes"] = array();
$tdatasatei_items_rules[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "`sort`");

$tdatasatei_items_rules[".sqlHead"] = "SELECT `id`,  `sort`,  `update_by`,  `update_at`,  `create_by`,  `create_at`,  `template`,  `purchase_category`,  `category_id`,  `sub_category_id1`,  `product_num`,  `colorstone_id`,  `is_satei_group_brand`,  `name`,  `jewerly_category`,  `is_satei_group_jewelry`,  `is_exclude`";
$tdatasatei_items_rules[".sqlFrom"] = "FROM `satei_items_rules`";
$tdatasatei_items_rules[".sqlWhereExpr"] = "";
$tdatasatei_items_rules[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasatei_items_rules[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasatei_items_rules[".arrGroupsPerPage"] = $arrGPP;

$tdatasatei_items_rules[".highlightSearchResults"] = true;

$tableKeyssatei_items_rules = array();
$tableKeyssatei_items_rules[] = "id";
$tdatasatei_items_rules[".Keys"] = $tableKeyssatei_items_rules;

$tdatasatei_items_rules[".listFields"] = array();
$tdatasatei_items_rules[".listFields"][] = "id";
$tdatasatei_items_rules[".listFields"][] = "is_exclude";
$tdatasatei_items_rules[".listFields"][] = "sort";
$tdatasatei_items_rules[".listFields"][] = "purchase_category";
$tdatasatei_items_rules[".listFields"][] = "jewerly_category";
$tdatasatei_items_rules[".listFields"][] = "category_id";
$tdatasatei_items_rules[".listFields"][] = "sub_category_id1";
$tdatasatei_items_rules[".listFields"][] = "product_num";
$tdatasatei_items_rules[".listFields"][] = "colorstone_id";
$tdatasatei_items_rules[".listFields"][] = "is_satei_group_brand";
$tdatasatei_items_rules[".listFields"][] = "is_satei_group_jewelry";
$tdatasatei_items_rules[".listFields"][] = "template";
$tdatasatei_items_rules[".listFields"][] = "name";
$tdatasatei_items_rules[".listFields"][] = "update_by";
$tdatasatei_items_rules[".listFields"][] = "update_at";
$tdatasatei_items_rules[".listFields"][] = "create_by";
$tdatasatei_items_rules[".listFields"][] = "create_at";

$tdatasatei_items_rules[".hideMobileList"] = array();


$tdatasatei_items_rules[".viewFields"] = array();

$tdatasatei_items_rules[".addFields"] = array();
$tdatasatei_items_rules[".addFields"][] = "is_exclude";
$tdatasatei_items_rules[".addFields"][] = "sort";
$tdatasatei_items_rules[".addFields"][] = "purchase_category";
$tdatasatei_items_rules[".addFields"][] = "jewerly_category";
$tdatasatei_items_rules[".addFields"][] = "category_id";
$tdatasatei_items_rules[".addFields"][] = "sub_category_id1";
$tdatasatei_items_rules[".addFields"][] = "product_num";
$tdatasatei_items_rules[".addFields"][] = "colorstone_id";
$tdatasatei_items_rules[".addFields"][] = "is_satei_group_brand";
$tdatasatei_items_rules[".addFields"][] = "is_satei_group_jewelry";
$tdatasatei_items_rules[".addFields"][] = "template";
$tdatasatei_items_rules[".addFields"][] = "name";

$tdatasatei_items_rules[".masterListFields"] = array();
$tdatasatei_items_rules[".masterListFields"][] = "id";
$tdatasatei_items_rules[".masterListFields"][] = "is_exclude";
$tdatasatei_items_rules[".masterListFields"][] = "sort";
$tdatasatei_items_rules[".masterListFields"][] = "purchase_category";
$tdatasatei_items_rules[".masterListFields"][] = "jewerly_category";
$tdatasatei_items_rules[".masterListFields"][] = "category_id";
$tdatasatei_items_rules[".masterListFields"][] = "sub_category_id1";
$tdatasatei_items_rules[".masterListFields"][] = "product_num";
$tdatasatei_items_rules[".masterListFields"][] = "colorstone_id";
$tdatasatei_items_rules[".masterListFields"][] = "is_satei_group_brand";
$tdatasatei_items_rules[".masterListFields"][] = "is_satei_group_jewelry";
$tdatasatei_items_rules[".masterListFields"][] = "template";
$tdatasatei_items_rules[".masterListFields"][] = "name";
$tdatasatei_items_rules[".masterListFields"][] = "update_by";
$tdatasatei_items_rules[".masterListFields"][] = "update_at";
$tdatasatei_items_rules[".masterListFields"][] = "create_by";
$tdatasatei_items_rules[".masterListFields"][] = "create_at";

$tdatasatei_items_rules[".inlineAddFields"] = array();
$tdatasatei_items_rules[".inlineAddFields"][] = "is_exclude";
$tdatasatei_items_rules[".inlineAddFields"][] = "sort";
$tdatasatei_items_rules[".inlineAddFields"][] = "purchase_category";
$tdatasatei_items_rules[".inlineAddFields"][] = "jewerly_category";
$tdatasatei_items_rules[".inlineAddFields"][] = "category_id";
$tdatasatei_items_rules[".inlineAddFields"][] = "sub_category_id1";
$tdatasatei_items_rules[".inlineAddFields"][] = "product_num";
$tdatasatei_items_rules[".inlineAddFields"][] = "colorstone_id";
$tdatasatei_items_rules[".inlineAddFields"][] = "is_satei_group_brand";
$tdatasatei_items_rules[".inlineAddFields"][] = "is_satei_group_jewelry";
$tdatasatei_items_rules[".inlineAddFields"][] = "template";
$tdatasatei_items_rules[".inlineAddFields"][] = "name";

$tdatasatei_items_rules[".editFields"] = array();
$tdatasatei_items_rules[".editFields"][] = "is_exclude";
$tdatasatei_items_rules[".editFields"][] = "sort";
$tdatasatei_items_rules[".editFields"][] = "purchase_category";
$tdatasatei_items_rules[".editFields"][] = "jewerly_category";
$tdatasatei_items_rules[".editFields"][] = "category_id";
$tdatasatei_items_rules[".editFields"][] = "sub_category_id1";
$tdatasatei_items_rules[".editFields"][] = "product_num";
$tdatasatei_items_rules[".editFields"][] = "colorstone_id";
$tdatasatei_items_rules[".editFields"][] = "is_satei_group_brand";
$tdatasatei_items_rules[".editFields"][] = "is_satei_group_jewelry";
$tdatasatei_items_rules[".editFields"][] = "template";
$tdatasatei_items_rules[".editFields"][] = "name";

$tdatasatei_items_rules[".inlineEditFields"] = array();
$tdatasatei_items_rules[".inlineEditFields"][] = "is_exclude";
$tdatasatei_items_rules[".inlineEditFields"][] = "sort";
$tdatasatei_items_rules[".inlineEditFields"][] = "purchase_category";
$tdatasatei_items_rules[".inlineEditFields"][] = "jewerly_category";
$tdatasatei_items_rules[".inlineEditFields"][] = "category_id";
$tdatasatei_items_rules[".inlineEditFields"][] = "sub_category_id1";
$tdatasatei_items_rules[".inlineEditFields"][] = "product_num";
$tdatasatei_items_rules[".inlineEditFields"][] = "colorstone_id";
$tdatasatei_items_rules[".inlineEditFields"][] = "is_satei_group_brand";
$tdatasatei_items_rules[".inlineEditFields"][] = "is_satei_group_jewelry";
$tdatasatei_items_rules[".inlineEditFields"][] = "template";
$tdatasatei_items_rules[".inlineEditFields"][] = "name";

$tdatasatei_items_rules[".updateSelectedFields"] = array();
$tdatasatei_items_rules[".updateSelectedFields"][] = "is_exclude";
$tdatasatei_items_rules[".updateSelectedFields"][] = "sort";
$tdatasatei_items_rules[".updateSelectedFields"][] = "purchase_category";
$tdatasatei_items_rules[".updateSelectedFields"][] = "jewerly_category";
$tdatasatei_items_rules[".updateSelectedFields"][] = "category_id";
$tdatasatei_items_rules[".updateSelectedFields"][] = "sub_category_id1";
$tdatasatei_items_rules[".updateSelectedFields"][] = "product_num";
$tdatasatei_items_rules[".updateSelectedFields"][] = "colorstone_id";
$tdatasatei_items_rules[".updateSelectedFields"][] = "is_satei_group_brand";
$tdatasatei_items_rules[".updateSelectedFields"][] = "is_satei_group_jewelry";
$tdatasatei_items_rules[".updateSelectedFields"][] = "template";
$tdatasatei_items_rules[".updateSelectedFields"][] = "name";


$tdatasatei_items_rules[".exportFields"] = array();
$tdatasatei_items_rules[".exportFields"][] = "id";
$tdatasatei_items_rules[".exportFields"][] = "is_exclude";
$tdatasatei_items_rules[".exportFields"][] = "sort";
$tdatasatei_items_rules[".exportFields"][] = "purchase_category";
$tdatasatei_items_rules[".exportFields"][] = "jewerly_category";
$tdatasatei_items_rules[".exportFields"][] = "category_id";
$tdatasatei_items_rules[".exportFields"][] = "sub_category_id1";
$tdatasatei_items_rules[".exportFields"][] = "product_num";
$tdatasatei_items_rules[".exportFields"][] = "colorstone_id";
$tdatasatei_items_rules[".exportFields"][] = "is_satei_group_brand";
$tdatasatei_items_rules[".exportFields"][] = "is_satei_group_jewelry";
$tdatasatei_items_rules[".exportFields"][] = "template";
$tdatasatei_items_rules[".exportFields"][] = "name";
$tdatasatei_items_rules[".exportFields"][] = "update_by";
$tdatasatei_items_rules[".exportFields"][] = "update_at";
$tdatasatei_items_rules[".exportFields"][] = "create_by";
$tdatasatei_items_rules[".exportFields"][] = "create_at";

$tdatasatei_items_rules[".importFields"] = array();
$tdatasatei_items_rules[".importFields"][] = "id";
$tdatasatei_items_rules[".importFields"][] = "sort";
$tdatasatei_items_rules[".importFields"][] = "template";
$tdatasatei_items_rules[".importFields"][] = "purchase_category";
$tdatasatei_items_rules[".importFields"][] = "category_id";
$tdatasatei_items_rules[".importFields"][] = "sub_category_id1";
$tdatasatei_items_rules[".importFields"][] = "product_num";
$tdatasatei_items_rules[".importFields"][] = "colorstone_id";
$tdatasatei_items_rules[".importFields"][] = "is_satei_group_brand";
$tdatasatei_items_rules[".importFields"][] = "name";
$tdatasatei_items_rules[".importFields"][] = "jewerly_category";
$tdatasatei_items_rules[".importFields"][] = "is_satei_group_jewelry";
$tdatasatei_items_rules[".importFields"][] = "is_exclude";

$tdatasatei_items_rules[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "satei_items_rules";
	$fdata["Label"] = GetFieldLabel("satei_items_rules","id");
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




	$tdatasatei_items_rules["id"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "satei_items_rules";
	$fdata["Label"] = GetFieldLabel("satei_items_rules","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatasatei_items_rules["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "satei_items_rules";
	$fdata["Label"] = GetFieldLabel("satei_items_rules","update_by");
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




	$tdatasatei_items_rules["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "satei_items_rules";
	$fdata["Label"] = GetFieldLabel("satei_items_rules","update_at");
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




	$tdatasatei_items_rules["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "satei_items_rules";
	$fdata["Label"] = GetFieldLabel("satei_items_rules","create_by");
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




	$tdatasatei_items_rules["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "satei_items_rules";
	$fdata["Label"] = GetFieldLabel("satei_items_rules","create_at");
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




	$tdatasatei_items_rules["create_at"] = $fdata;
//	template
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "template";
	$fdata["GoodName"] = "template";
	$fdata["ownerTable"] = "satei_items_rules";
	$fdata["Label"] = GetFieldLabel("satei_items_rules","template");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "template";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`template`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatasatei_items_rules["template"] = $fdata;
//	purchase_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "purchase_category";
	$fdata["GoodName"] = "purchase_category";
	$fdata["ownerTable"] = "satei_items_rules";
	$fdata["Label"] = GetFieldLabel("satei_items_rules","purchase_category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatasatei_items_rules["purchase_category"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "satei_items_rules";
	$fdata["Label"] = GetFieldLabel("satei_items_rules","category_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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
	$edata["LookupTable"] = "vw_store_categories_add_all";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "category_id";
	$edata["LinkFieldType"] = 13;
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




	$tdatasatei_items_rules["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "satei_items_rules";
	$fdata["Label"] = GetFieldLabel("satei_items_rules","sub_category_id1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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
	$edata["LookupTable"] = "vw_store_sub_categories_add_all";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 13;
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




	$tdatasatei_items_rules["sub_category_id1"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "satei_items_rules";
	$fdata["Label"] = GetFieldLabel("satei_items_rules","product_num");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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
	$edata["LookupTable"] = "vw_mst_brand2_add_all";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 13;
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




	$tdatasatei_items_rules["product_num"] = $fdata;
//	colorstone_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "colorstone_id";
	$fdata["GoodName"] = "colorstone_id";
	$fdata["ownerTable"] = "satei_items_rules";
	$fdata["Label"] = GetFieldLabel("satei_items_rules","colorstone_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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




	$tdatasatei_items_rules["colorstone_id"] = $fdata;
//	is_satei_group_brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "is_satei_group_brand";
	$fdata["GoodName"] = "is_satei_group_brand";
	$fdata["ownerTable"] = "satei_items_rules";
	$fdata["Label"] = GetFieldLabel("satei_items_rules","is_satei_group_brand");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_satei_group_brand";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_satei_group_brand`";

	
	
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




	$tdatasatei_items_rules["is_satei_group_brand"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "satei_items_rules";
	$fdata["Label"] = GetFieldLabel("satei_items_rules","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatasatei_items_rules["name"] = $fdata;
//	jewerly_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "jewerly_category";
	$fdata["GoodName"] = "jewerly_category";
	$fdata["ownerTable"] = "satei_items_rules";
	$fdata["Label"] = GetFieldLabel("satei_items_rules","jewerly_category");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jewerly_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`jewerly_category`";

	
	
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




	$tdatasatei_items_rules["jewerly_category"] = $fdata;
//	is_satei_group_jewelry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "is_satei_group_jewelry";
	$fdata["GoodName"] = "is_satei_group_jewelry";
	$fdata["ownerTable"] = "satei_items_rules";
	$fdata["Label"] = GetFieldLabel("satei_items_rules","is_satei_group_jewelry");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_satei_group_jewelry";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_satei_group_jewelry`";

	
	
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




	$tdatasatei_items_rules["is_satei_group_jewelry"] = $fdata;
//	is_exclude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "is_exclude";
	$fdata["GoodName"] = "is_exclude";
	$fdata["ownerTable"] = "satei_items_rules";
	$fdata["Label"] = GetFieldLabel("satei_items_rules","is_exclude");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_exclude";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_exclude`";

	
	
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




	$tdatasatei_items_rules["is_exclude"] = $fdata;


$tables_data["satei_items_rules"]=&$tdatasatei_items_rules;
$field_labels["satei_items_rules"] = &$fieldLabelssatei_items_rules;
$fieldToolTips["satei_items_rules"] = &$fieldToolTipssatei_items_rules;
$placeHolders["satei_items_rules"] = &$placeHolderssatei_items_rules;
$page_titles["satei_items_rules"] = &$pageTitlessatei_items_rules;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["satei_items_rules"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["satei_items_rules"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_satei_items_rules()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `sort`,  `update_by`,  `update_at`,  `create_by`,  `create_at`,  `template`,  `purchase_category`,  `category_id`,  `sub_category_id1`,  `product_num`,  `colorstone_id`,  `is_satei_group_brand`,  `name`,  `jewerly_category`,  `is_satei_group_jewelry`,  `is_exclude`";
$proto0["m_strFrom"] = "FROM `satei_items_rules`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `sort`";
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
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "satei_items_rules";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto8["m_sql"] = "`sort`";
$proto8["m_srcTableName"] = "satei_items_rules";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto10["m_sql"] = "`update_by`";
$proto10["m_srcTableName"] = "satei_items_rules";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto12["m_sql"] = "`update_at`";
$proto12["m_srcTableName"] = "satei_items_rules";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto14["m_sql"] = "`create_by`";
$proto14["m_srcTableName"] = "satei_items_rules";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto16["m_sql"] = "`create_at`";
$proto16["m_srcTableName"] = "satei_items_rules";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "template",
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto18["m_sql"] = "`template`";
$proto18["m_srcTableName"] = "satei_items_rules";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "purchase_category",
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto20["m_sql"] = "`purchase_category`";
$proto20["m_srcTableName"] = "satei_items_rules";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto22["m_sql"] = "`category_id`";
$proto22["m_srcTableName"] = "satei_items_rules";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto24["m_sql"] = "`sub_category_id1`";
$proto24["m_srcTableName"] = "satei_items_rules";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto26["m_sql"] = "`product_num`";
$proto26["m_srcTableName"] = "satei_items_rules";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "colorstone_id",
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto28["m_sql"] = "`colorstone_id`";
$proto28["m_srcTableName"] = "satei_items_rules";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "is_satei_group_brand",
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto30["m_sql"] = "`is_satei_group_brand`";
$proto30["m_srcTableName"] = "satei_items_rules";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto32["m_sql"] = "`name`";
$proto32["m_srcTableName"] = "satei_items_rules";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "jewerly_category",
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto34["m_sql"] = "`jewerly_category`";
$proto34["m_srcTableName"] = "satei_items_rules";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "is_satei_group_jewelry",
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto36["m_sql"] = "`is_satei_group_jewelry`";
$proto36["m_srcTableName"] = "satei_items_rules";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "is_exclude",
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto38["m_sql"] = "`is_exclude`";
$proto38["m_srcTableName"] = "satei_items_rules";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "satei_items_rules";
$proto41["m_srcTableName"] = "satei_items_rules";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id";
$proto41["m_columns"][] = "sort";
$proto41["m_columns"][] = "update_by";
$proto41["m_columns"][] = "update_at";
$proto41["m_columns"][] = "create_by";
$proto41["m_columns"][] = "create_at";
$proto41["m_columns"][] = "template";
$proto41["m_columns"][] = "purchase_category";
$proto41["m_columns"][] = "category_id";
$proto41["m_columns"][] = "sub_category_id1";
$proto41["m_columns"][] = "product_num";
$proto41["m_columns"][] = "colorstone_id";
$proto41["m_columns"][] = "is_satei_group_brand";
$proto41["m_columns"][] = "name";
$proto41["m_columns"][] = "jewerly_category";
$proto41["m_columns"][] = "is_satei_group_jewelry";
$proto41["m_columns"][] = "is_exclude";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "`satei_items_rules`";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "satei_items_rules";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "satei_items_rules",
	"m_srcTableName" => "satei_items_rules"
));

$proto44["m_column"]=$obj;
$proto44["m_bAsc"] = 1;
$proto44["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto44);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="satei_items_rules";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_satei_items_rules = createSqlQuery_satei_items_rules();


	
		;

																	

$tdatasatei_items_rules[".sqlquery"] = $queryData_satei_items_rules;

$tableEvents["satei_items_rules"] = new eventsBase;
$tdatasatei_items_rules[".hasEvents"] = false;

?>