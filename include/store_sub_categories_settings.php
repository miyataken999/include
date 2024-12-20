<?php
require_once(getabspath("classes/cipherer.php"));




$tdatastore_sub_categories = array();
	$tdatastore_sub_categories[".ShortName"] = "store_sub_categories";
	$tdatastore_sub_categories[".OwnerID"] = "";
	$tdatastore_sub_categories[".OriginalTable"] = "store_sub_categories";

//	field labels
$fieldLabelsstore_sub_categories = array();
$fieldToolTipsstore_sub_categories = array();
$pageTitlesstore_sub_categories = array();
$placeHoldersstore_sub_categories = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsstore_sub_categories["Japanese"] = array();
	$fieldToolTipsstore_sub_categories["Japanese"] = array();
	$placeHoldersstore_sub_categories["Japanese"] = array();
	$pageTitlesstore_sub_categories["Japanese"] = array();
	$fieldLabelsstore_sub_categories["Japanese"]["id"] = "Id";
	$fieldToolTipsstore_sub_categories["Japanese"]["id"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["id"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["category_id"] = "Category Id";
	$fieldToolTipsstore_sub_categories["Japanese"]["category_id"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["category_id"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["name"] = "Name";
	$fieldToolTipsstore_sub_categories["Japanese"]["name"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["name"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["template_id"] = "Template Id";
	$fieldToolTipsstore_sub_categories["Japanese"]["template_id"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["template_id"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["initial_name"] = "Initial Name";
	$fieldToolTipsstore_sub_categories["Japanese"]["initial_name"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["initial_name"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["view1"] = "View1";
	$fieldToolTipsstore_sub_categories["Japanese"]["view1"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["view1"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["view2"] = "View2";
	$fieldToolTipsstore_sub_categories["Japanese"]["view2"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["view2"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["view3"] = "View3";
	$fieldToolTipsstore_sub_categories["Japanese"]["view3"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["view3"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["size1"] = "Size1";
	$fieldToolTipsstore_sub_categories["Japanese"]["size1"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["size1"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["size2"] = "Size2";
	$fieldToolTipsstore_sub_categories["Japanese"]["size2"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["size2"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["size3"] = "Size3";
	$fieldToolTipsstore_sub_categories["Japanese"]["size3"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["size3"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["size4"] = "Size4";
	$fieldToolTipsstore_sub_categories["Japanese"]["size4"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["size4"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["size5"] = "Size5";
	$fieldToolTipsstore_sub_categories["Japanese"]["size5"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["size5"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["size6"] = "採寸項目";
	$fieldToolTipsstore_sub_categories["Japanese"]["size6"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["size6"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["sort"] = "Sort";
	$fieldToolTipsstore_sub_categories["Japanese"]["sort"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["sort"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["brawseid"] = "ブラウズID男";
	$fieldToolTipsstore_sub_categories["Japanese"]["brawseid"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["brawseid"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["brandnode"] = "ブラウズノード";
	$fieldToolTipsstore_sub_categories["Japanese"]["brandnode"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["brandnode"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["brandidwomen"] = "ブラウズID女";
	$fieldToolTipsstore_sub_categories["Japanese"]["brandidwomen"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["brandidwomen"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["condition_details"] = "コンディション詳細テンプレート";
	$fieldToolTipsstore_sub_categories["Japanese"]["condition_details"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["condition_details"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsstore_sub_categories["Japanese"]["updated_at"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["updated_at"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsstore_sub_categories["Japanese"]["updated_by"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["updated_by"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsstore_sub_categories["Japanese"]["created_by"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["created_by"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsstore_sub_categories["Japanese"]["created_at"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["created_at"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["related_words"] = "関連ワード";
	$fieldToolTipsstore_sub_categories["Japanese"]["related_words"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["related_words"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["hansokuhi_flag"] = "販促費フラグ";
	$fieldToolTipsstore_sub_categories["Japanese"]["hansokuhi_flag"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["hansokuhi_flag"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["category_class"] = "部門";
	$fieldToolTipsstore_sub_categories["Japanese"]["category_class"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["category_class"] = "";
	$fieldLabelsstore_sub_categories["Japanese"]["colorstone_id"] = "カラーストーン";
	$fieldToolTipsstore_sub_categories["Japanese"]["colorstone_id"] = "";
	$placeHoldersstore_sub_categories["Japanese"]["colorstone_id"] = "";
	if (count($fieldToolTipsstore_sub_categories["Japanese"]))
		$tdatastore_sub_categories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsstore_sub_categories[""] = array();
	$fieldToolTipsstore_sub_categories[""] = array();
	$placeHoldersstore_sub_categories[""] = array();
	$pageTitlesstore_sub_categories[""] = array();
	if (count($fieldToolTipsstore_sub_categories[""]))
		$tdatastore_sub_categories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstore_sub_categories["English"] = array();
	$fieldToolTipsstore_sub_categories["English"] = array();
	$placeHoldersstore_sub_categories["English"] = array();
	$pageTitlesstore_sub_categories["English"] = array();
	if (count($fieldToolTipsstore_sub_categories["English"]))
		$tdatastore_sub_categories[".isUseToolTips"] = true;
}


	$tdatastore_sub_categories[".NCSearch"] = true;



$tdatastore_sub_categories[".shortTableName"] = "store_sub_categories";
$tdatastore_sub_categories[".nSecOptions"] = 0;
$tdatastore_sub_categories[".recsPerRowPrint"] = 1;
$tdatastore_sub_categories[".mainTableOwnerID"] = "";
$tdatastore_sub_categories[".moveNext"] = 1;
$tdatastore_sub_categories[".entityType"] = 0;

$tdatastore_sub_categories[".strOriginalTableName"] = "store_sub_categories";

	



$tdatastore_sub_categories[".showAddInPopup"] = false;

$tdatastore_sub_categories[".showEditInPopup"] = false;

$tdatastore_sub_categories[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatastore_sub_categories[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatastore_sub_categories[".fieldsForRegister"] = array();

$tdatastore_sub_categories[".listAjax"] = false;

	$tdatastore_sub_categories[".audit"] = true;

	$tdatastore_sub_categories[".locking"] = false;

$tdatastore_sub_categories[".edit"] = true;
$tdatastore_sub_categories[".afterEditAction"] = 1;
$tdatastore_sub_categories[".closePopupAfterEdit"] = 1;
$tdatastore_sub_categories[".afterEditActionDetTable"] = "";

$tdatastore_sub_categories[".add"] = true;
$tdatastore_sub_categories[".afterAddAction"] = 1;
$tdatastore_sub_categories[".closePopupAfterAdd"] = 1;
$tdatastore_sub_categories[".afterAddActionDetTable"] = "";

$tdatastore_sub_categories[".list"] = true;

$tdatastore_sub_categories[".inlineEdit"] = true;

$tdatastore_sub_categories[".updateSelected"] = true;

$tdatastore_sub_categories[".reorderRecordsByHeader"] = true;



$tdatastore_sub_categories[".inlineAdd"] = true;
$tdatastore_sub_categories[".copy"] = true;
$tdatastore_sub_categories[".view"] = true;

$tdatastore_sub_categories[".import"] = true;

$tdatastore_sub_categories[".exportTo"] = true;

$tdatastore_sub_categories[".printFriendly"] = true;

$tdatastore_sub_categories[".delete"] = true;

$tdatastore_sub_categories[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatastore_sub_categories[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatastore_sub_categories[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatastore_sub_categories[".searchSaving"] = false;
//

$tdatastore_sub_categories[".showSearchPanel"] = true;
		$tdatastore_sub_categories[".flexibleSearch"] = true;

$tdatastore_sub_categories[".isUseAjaxSuggest"] = true;

$tdatastore_sub_categories[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatastore_sub_categories[".ajaxCodeSnippetAdded"] = false;

$tdatastore_sub_categories[".buttonsAdded"] = false;

$tdatastore_sub_categories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastore_sub_categories[".isUseTimeForSearch"] = false;



$tdatastore_sub_categories[".badgeColor"] = "5f9ea0";

$tdatastore_sub_categories[".detailsLinksOnList"] = "1";

$tdatastore_sub_categories[".allSearchFields"] = array();
$tdatastore_sub_categories[".filterFields"] = array();
$tdatastore_sub_categories[".requiredSearchFields"] = array();

$tdatastore_sub_categories[".allSearchFields"][] = "related_words";
	$tdatastore_sub_categories[".allSearchFields"][] = "hansokuhi_flag";
	$tdatastore_sub_categories[".allSearchFields"][] = "category_class";
	$tdatastore_sub_categories[".allSearchFields"][] = "colorstone_id";
	$tdatastore_sub_categories[".allSearchFields"][] = "id";
	$tdatastore_sub_categories[".allSearchFields"][] = "category_id";
	$tdatastore_sub_categories[".allSearchFields"][] = "sort";
	$tdatastore_sub_categories[".allSearchFields"][] = "name";
	$tdatastore_sub_categories[".allSearchFields"][] = "initial_name";
	$tdatastore_sub_categories[".allSearchFields"][] = "condition_details";
	$tdatastore_sub_categories[".allSearchFields"][] = "brandnode";
	$tdatastore_sub_categories[".allSearchFields"][] = "brawseid";
	$tdatastore_sub_categories[".allSearchFields"][] = "brandidwomen";
	$tdatastore_sub_categories[".allSearchFields"][] = "template_id";
	$tdatastore_sub_categories[".allSearchFields"][] = "view1";
	$tdatastore_sub_categories[".allSearchFields"][] = "view2";
	$tdatastore_sub_categories[".allSearchFields"][] = "view3";
	$tdatastore_sub_categories[".allSearchFields"][] = "size1";
	$tdatastore_sub_categories[".allSearchFields"][] = "size2";
	$tdatastore_sub_categories[".allSearchFields"][] = "size3";
	$tdatastore_sub_categories[".allSearchFields"][] = "size4";
	$tdatastore_sub_categories[".allSearchFields"][] = "size5";
	$tdatastore_sub_categories[".allSearchFields"][] = "created_by";
	$tdatastore_sub_categories[".allSearchFields"][] = "created_at";
	$tdatastore_sub_categories[".allSearchFields"][] = "updated_by";
	$tdatastore_sub_categories[".allSearchFields"][] = "updated_at";
	

$tdatastore_sub_categories[".googleLikeFields"] = array();
$tdatastore_sub_categories[".googleLikeFields"][] = "id";
$tdatastore_sub_categories[".googleLikeFields"][] = "category_id";
$tdatastore_sub_categories[".googleLikeFields"][] = "name";
$tdatastore_sub_categories[".googleLikeFields"][] = "template_id";
$tdatastore_sub_categories[".googleLikeFields"][] = "initial_name";
$tdatastore_sub_categories[".googleLikeFields"][] = "view1";
$tdatastore_sub_categories[".googleLikeFields"][] = "view2";
$tdatastore_sub_categories[".googleLikeFields"][] = "view3";
$tdatastore_sub_categories[".googleLikeFields"][] = "size1";
$tdatastore_sub_categories[".googleLikeFields"][] = "size2";
$tdatastore_sub_categories[".googleLikeFields"][] = "size3";
$tdatastore_sub_categories[".googleLikeFields"][] = "size4";
$tdatastore_sub_categories[".googleLikeFields"][] = "size5";
$tdatastore_sub_categories[".googleLikeFields"][] = "size6";
$tdatastore_sub_categories[".googleLikeFields"][] = "sort";
$tdatastore_sub_categories[".googleLikeFields"][] = "brawseid";
$tdatastore_sub_categories[".googleLikeFields"][] = "brandnode";
$tdatastore_sub_categories[".googleLikeFields"][] = "brandidwomen";
$tdatastore_sub_categories[".googleLikeFields"][] = "condition_details";
$tdatastore_sub_categories[".googleLikeFields"][] = "updated_at";
$tdatastore_sub_categories[".googleLikeFields"][] = "updated_by";
$tdatastore_sub_categories[".googleLikeFields"][] = "created_by";
$tdatastore_sub_categories[".googleLikeFields"][] = "created_at";
$tdatastore_sub_categories[".googleLikeFields"][] = "related_words";
$tdatastore_sub_categories[".googleLikeFields"][] = "hansokuhi_flag";
$tdatastore_sub_categories[".googleLikeFields"][] = "category_class";
$tdatastore_sub_categories[".googleLikeFields"][] = "colorstone_id";

$tdatastore_sub_categories[".panelSearchFields"] = array();
$tdatastore_sub_categories[".searchPanelOptions"] = array();
$tdatastore_sub_categories[".panelSearchFields"][] = "id";
	$tdatastore_sub_categories[".panelSearchFields"][] = "category_id";
	$tdatastore_sub_categories[".panelSearchFields"][] = "sort";
	$tdatastore_sub_categories[".panelSearchFields"][] = "name";
	$tdatastore_sub_categories[".panelSearchFields"][] = "initial_name";
	$tdatastore_sub_categories[".panelSearchFields"][] = "size6";
	$tdatastore_sub_categories[".panelSearchFields"][] = "condition_details";
	$tdatastore_sub_categories[".panelSearchFields"][] = "brandnode";
	$tdatastore_sub_categories[".panelSearchFields"][] = "brawseid";
	$tdatastore_sub_categories[".panelSearchFields"][] = "brandidwomen";
	$tdatastore_sub_categories[".panelSearchFields"][] = "template_id";
	$tdatastore_sub_categories[".panelSearchFields"][] = "view1";
	$tdatastore_sub_categories[".panelSearchFields"][] = "view2";
	$tdatastore_sub_categories[".panelSearchFields"][] = "view3";
	$tdatastore_sub_categories[".panelSearchFields"][] = "size1";
	$tdatastore_sub_categories[".panelSearchFields"][] = "size2";
	$tdatastore_sub_categories[".panelSearchFields"][] = "size3";
	$tdatastore_sub_categories[".panelSearchFields"][] = "size4";
	$tdatastore_sub_categories[".panelSearchFields"][] = "size5";
	
$tdatastore_sub_categories[".advSearchFields"] = array();
$tdatastore_sub_categories[".advSearchFields"][] = "related_words";
$tdatastore_sub_categories[".advSearchFields"][] = "hansokuhi_flag";
$tdatastore_sub_categories[".advSearchFields"][] = "category_class";
$tdatastore_sub_categories[".advSearchFields"][] = "colorstone_id";
$tdatastore_sub_categories[".advSearchFields"][] = "id";
$tdatastore_sub_categories[".advSearchFields"][] = "category_id";
$tdatastore_sub_categories[".advSearchFields"][] = "sort";
$tdatastore_sub_categories[".advSearchFields"][] = "name";
$tdatastore_sub_categories[".advSearchFields"][] = "initial_name";
$tdatastore_sub_categories[".advSearchFields"][] = "condition_details";
$tdatastore_sub_categories[".advSearchFields"][] = "brandnode";
$tdatastore_sub_categories[".advSearchFields"][] = "brawseid";
$tdatastore_sub_categories[".advSearchFields"][] = "brandidwomen";
$tdatastore_sub_categories[".advSearchFields"][] = "template_id";
$tdatastore_sub_categories[".advSearchFields"][] = "view1";
$tdatastore_sub_categories[".advSearchFields"][] = "view2";
$tdatastore_sub_categories[".advSearchFields"][] = "view3";
$tdatastore_sub_categories[".advSearchFields"][] = "size1";
$tdatastore_sub_categories[".advSearchFields"][] = "size2";
$tdatastore_sub_categories[".advSearchFields"][] = "size3";
$tdatastore_sub_categories[".advSearchFields"][] = "size4";
$tdatastore_sub_categories[".advSearchFields"][] = "size5";
$tdatastore_sub_categories[".advSearchFields"][] = "created_by";
$tdatastore_sub_categories[".advSearchFields"][] = "created_at";
$tdatastore_sub_categories[".advSearchFields"][] = "updated_by";
$tdatastore_sub_categories[".advSearchFields"][] = "updated_at";

$tdatastore_sub_categories[".tableType"] = "list";

$tdatastore_sub_categories[".printerPageOrientation"] = 0;
$tdatastore_sub_categories[".nPrinterPageScale"] = 100;

$tdatastore_sub_categories[".nPrinterSplitRecords"] = 40;

$tdatastore_sub_categories[".nPrinterPDFSplitRecords"] = 40;



$tdatastore_sub_categories[".geocodingEnabled"] = false;





$tdatastore_sub_categories[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatastore_sub_categories[".pageSize"] = 50;

$tdatastore_sub_categories[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastore_sub_categories[".strOrderBy"] = $tstrOrderBy;

$tdatastore_sub_categories[".orderindexes"] = array();

$tdatastore_sub_categories[".sqlHead"] = "SELECT `id`,  `category_id`,  `name`,  `template_id`,  `initial_name`,  `view1`,  `view2`,  `view3`,  `size1`,  `size2`,  `size3`,  `size4`,  `size5`,  `size6`,  `sort`,  `brawseid`,  `brandnode`,  `brandidwomen`,  `condition_details`,  `updated_at`,  `updated_by`,  `created_by`,  `created_at`,  `related_words`,  `hansokuhi_flag`,  `category_class`,  `colorstone_id`";
$tdatastore_sub_categories[".sqlFrom"] = "FROM `store_sub_categories`";
$tdatastore_sub_categories[".sqlWhereExpr"] = "";
$tdatastore_sub_categories[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastore_sub_categories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastore_sub_categories[".arrGroupsPerPage"] = $arrGPP;

$tdatastore_sub_categories[".highlightSearchResults"] = true;

$tableKeysstore_sub_categories = array();
$tableKeysstore_sub_categories[] = "id";
$tdatastore_sub_categories[".Keys"] = $tableKeysstore_sub_categories;

$tdatastore_sub_categories[".listFields"] = array();
$tdatastore_sub_categories[".listFields"][] = "category_class";
$tdatastore_sub_categories[".listFields"][] = "id";
$tdatastore_sub_categories[".listFields"][] = "category_id";
$tdatastore_sub_categories[".listFields"][] = "sort";
$tdatastore_sub_categories[".listFields"][] = "colorstone_id";
$tdatastore_sub_categories[".listFields"][] = "name";
$tdatastore_sub_categories[".listFields"][] = "initial_name";
$tdatastore_sub_categories[".listFields"][] = "related_words";
$tdatastore_sub_categories[".listFields"][] = "hansokuhi_flag";
$tdatastore_sub_categories[".listFields"][] = "condition_details";
$tdatastore_sub_categories[".listFields"][] = "brandnode";
$tdatastore_sub_categories[".listFields"][] = "brawseid";
$tdatastore_sub_categories[".listFields"][] = "brandidwomen";
$tdatastore_sub_categories[".listFields"][] = "template_id";
$tdatastore_sub_categories[".listFields"][] = "view1";
$tdatastore_sub_categories[".listFields"][] = "view2";
$tdatastore_sub_categories[".listFields"][] = "view3";
$tdatastore_sub_categories[".listFields"][] = "size1";
$tdatastore_sub_categories[".listFields"][] = "size2";
$tdatastore_sub_categories[".listFields"][] = "size3";
$tdatastore_sub_categories[".listFields"][] = "size4";
$tdatastore_sub_categories[".listFields"][] = "size5";
$tdatastore_sub_categories[".listFields"][] = "created_by";
$tdatastore_sub_categories[".listFields"][] = "created_at";
$tdatastore_sub_categories[".listFields"][] = "updated_by";
$tdatastore_sub_categories[".listFields"][] = "updated_at";

$tdatastore_sub_categories[".hideMobileList"] = array();


$tdatastore_sub_categories[".viewFields"] = array();
$tdatastore_sub_categories[".viewFields"][] = "related_words";
$tdatastore_sub_categories[".viewFields"][] = "hansokuhi_flag";
$tdatastore_sub_categories[".viewFields"][] = "category_class";
$tdatastore_sub_categories[".viewFields"][] = "colorstone_id";
$tdatastore_sub_categories[".viewFields"][] = "id";
$tdatastore_sub_categories[".viewFields"][] = "category_id";
$tdatastore_sub_categories[".viewFields"][] = "sort";
$tdatastore_sub_categories[".viewFields"][] = "name";
$tdatastore_sub_categories[".viewFields"][] = "initial_name";
$tdatastore_sub_categories[".viewFields"][] = "condition_details";
$tdatastore_sub_categories[".viewFields"][] = "brandnode";
$tdatastore_sub_categories[".viewFields"][] = "brawseid";
$tdatastore_sub_categories[".viewFields"][] = "brandidwomen";
$tdatastore_sub_categories[".viewFields"][] = "template_id";
$tdatastore_sub_categories[".viewFields"][] = "view1";
$tdatastore_sub_categories[".viewFields"][] = "view2";
$tdatastore_sub_categories[".viewFields"][] = "view3";
$tdatastore_sub_categories[".viewFields"][] = "size1";
$tdatastore_sub_categories[".viewFields"][] = "size2";
$tdatastore_sub_categories[".viewFields"][] = "size3";
$tdatastore_sub_categories[".viewFields"][] = "size4";
$tdatastore_sub_categories[".viewFields"][] = "size5";
$tdatastore_sub_categories[".viewFields"][] = "created_by";
$tdatastore_sub_categories[".viewFields"][] = "created_at";
$tdatastore_sub_categories[".viewFields"][] = "updated_by";
$tdatastore_sub_categories[".viewFields"][] = "updated_at";

$tdatastore_sub_categories[".addFields"] = array();
$tdatastore_sub_categories[".addFields"][] = "related_words";
$tdatastore_sub_categories[".addFields"][] = "hansokuhi_flag";
$tdatastore_sub_categories[".addFields"][] = "category_class";
$tdatastore_sub_categories[".addFields"][] = "colorstone_id";
$tdatastore_sub_categories[".addFields"][] = "category_id";
$tdatastore_sub_categories[".addFields"][] = "sort";
$tdatastore_sub_categories[".addFields"][] = "name";
$tdatastore_sub_categories[".addFields"][] = "initial_name";
$tdatastore_sub_categories[".addFields"][] = "condition_details";
$tdatastore_sub_categories[".addFields"][] = "brandnode";
$tdatastore_sub_categories[".addFields"][] = "brawseid";
$tdatastore_sub_categories[".addFields"][] = "brandidwomen";
$tdatastore_sub_categories[".addFields"][] = "template_id";
$tdatastore_sub_categories[".addFields"][] = "view1";
$tdatastore_sub_categories[".addFields"][] = "view2";
$tdatastore_sub_categories[".addFields"][] = "view3";
$tdatastore_sub_categories[".addFields"][] = "size1";
$tdatastore_sub_categories[".addFields"][] = "size2";
$tdatastore_sub_categories[".addFields"][] = "size3";
$tdatastore_sub_categories[".addFields"][] = "size4";
$tdatastore_sub_categories[".addFields"][] = "size5";
$tdatastore_sub_categories[".addFields"][] = "created_by";
$tdatastore_sub_categories[".addFields"][] = "created_at";
$tdatastore_sub_categories[".addFields"][] = "updated_by";
$tdatastore_sub_categories[".addFields"][] = "updated_at";

$tdatastore_sub_categories[".masterListFields"] = array();
$tdatastore_sub_categories[".masterListFields"][] = "related_words";
$tdatastore_sub_categories[".masterListFields"][] = "hansokuhi_flag";
$tdatastore_sub_categories[".masterListFields"][] = "category_class";
$tdatastore_sub_categories[".masterListFields"][] = "colorstone_id";
$tdatastore_sub_categories[".masterListFields"][] = "id";
$tdatastore_sub_categories[".masterListFields"][] = "category_id";
$tdatastore_sub_categories[".masterListFields"][] = "sort";
$tdatastore_sub_categories[".masterListFields"][] = "name";
$tdatastore_sub_categories[".masterListFields"][] = "initial_name";
$tdatastore_sub_categories[".masterListFields"][] = "condition_details";
$tdatastore_sub_categories[".masterListFields"][] = "brandnode";
$tdatastore_sub_categories[".masterListFields"][] = "brawseid";
$tdatastore_sub_categories[".masterListFields"][] = "brandidwomen";
$tdatastore_sub_categories[".masterListFields"][] = "template_id";
$tdatastore_sub_categories[".masterListFields"][] = "view1";
$tdatastore_sub_categories[".masterListFields"][] = "view2";
$tdatastore_sub_categories[".masterListFields"][] = "view3";
$tdatastore_sub_categories[".masterListFields"][] = "size1";
$tdatastore_sub_categories[".masterListFields"][] = "size2";
$tdatastore_sub_categories[".masterListFields"][] = "size3";
$tdatastore_sub_categories[".masterListFields"][] = "size4";
$tdatastore_sub_categories[".masterListFields"][] = "size5";
$tdatastore_sub_categories[".masterListFields"][] = "created_by";
$tdatastore_sub_categories[".masterListFields"][] = "created_at";
$tdatastore_sub_categories[".masterListFields"][] = "updated_by";
$tdatastore_sub_categories[".masterListFields"][] = "updated_at";

$tdatastore_sub_categories[".inlineAddFields"] = array();
$tdatastore_sub_categories[".inlineAddFields"][] = "category_class";
$tdatastore_sub_categories[".inlineAddFields"][] = "category_id";
$tdatastore_sub_categories[".inlineAddFields"][] = "sort";
$tdatastore_sub_categories[".inlineAddFields"][] = "colorstone_id";
$tdatastore_sub_categories[".inlineAddFields"][] = "name";
$tdatastore_sub_categories[".inlineAddFields"][] = "initial_name";
$tdatastore_sub_categories[".inlineAddFields"][] = "related_words";
$tdatastore_sub_categories[".inlineAddFields"][] = "hansokuhi_flag";
$tdatastore_sub_categories[".inlineAddFields"][] = "condition_details";
$tdatastore_sub_categories[".inlineAddFields"][] = "brandnode";
$tdatastore_sub_categories[".inlineAddFields"][] = "brawseid";
$tdatastore_sub_categories[".inlineAddFields"][] = "brandidwomen";
$tdatastore_sub_categories[".inlineAddFields"][] = "template_id";
$tdatastore_sub_categories[".inlineAddFields"][] = "view1";
$tdatastore_sub_categories[".inlineAddFields"][] = "view2";
$tdatastore_sub_categories[".inlineAddFields"][] = "view3";
$tdatastore_sub_categories[".inlineAddFields"][] = "size1";
$tdatastore_sub_categories[".inlineAddFields"][] = "size2";
$tdatastore_sub_categories[".inlineAddFields"][] = "size3";
$tdatastore_sub_categories[".inlineAddFields"][] = "size4";
$tdatastore_sub_categories[".inlineAddFields"][] = "size5";
$tdatastore_sub_categories[".inlineAddFields"][] = "created_by";
$tdatastore_sub_categories[".inlineAddFields"][] = "created_at";
$tdatastore_sub_categories[".inlineAddFields"][] = "updated_by";
$tdatastore_sub_categories[".inlineAddFields"][] = "updated_at";

$tdatastore_sub_categories[".editFields"] = array();
$tdatastore_sub_categories[".editFields"][] = "related_words";
$tdatastore_sub_categories[".editFields"][] = "hansokuhi_flag";
$tdatastore_sub_categories[".editFields"][] = "category_class";
$tdatastore_sub_categories[".editFields"][] = "colorstone_id";
$tdatastore_sub_categories[".editFields"][] = "category_id";
$tdatastore_sub_categories[".editFields"][] = "sort";
$tdatastore_sub_categories[".editFields"][] = "name";
$tdatastore_sub_categories[".editFields"][] = "initial_name";
$tdatastore_sub_categories[".editFields"][] = "condition_details";
$tdatastore_sub_categories[".editFields"][] = "brandnode";
$tdatastore_sub_categories[".editFields"][] = "brawseid";
$tdatastore_sub_categories[".editFields"][] = "brandidwomen";
$tdatastore_sub_categories[".editFields"][] = "template_id";
$tdatastore_sub_categories[".editFields"][] = "view1";
$tdatastore_sub_categories[".editFields"][] = "view2";
$tdatastore_sub_categories[".editFields"][] = "view3";
$tdatastore_sub_categories[".editFields"][] = "size1";
$tdatastore_sub_categories[".editFields"][] = "size2";
$tdatastore_sub_categories[".editFields"][] = "size3";
$tdatastore_sub_categories[".editFields"][] = "size4";
$tdatastore_sub_categories[".editFields"][] = "size5";
$tdatastore_sub_categories[".editFields"][] = "created_by";
$tdatastore_sub_categories[".editFields"][] = "created_at";
$tdatastore_sub_categories[".editFields"][] = "updated_by";
$tdatastore_sub_categories[".editFields"][] = "updated_at";

$tdatastore_sub_categories[".inlineEditFields"] = array();
$tdatastore_sub_categories[".inlineEditFields"][] = "category_class";
$tdatastore_sub_categories[".inlineEditFields"][] = "category_id";
$tdatastore_sub_categories[".inlineEditFields"][] = "sort";
$tdatastore_sub_categories[".inlineEditFields"][] = "colorstone_id";
$tdatastore_sub_categories[".inlineEditFields"][] = "name";
$tdatastore_sub_categories[".inlineEditFields"][] = "initial_name";
$tdatastore_sub_categories[".inlineEditFields"][] = "related_words";
$tdatastore_sub_categories[".inlineEditFields"][] = "hansokuhi_flag";
$tdatastore_sub_categories[".inlineEditFields"][] = "condition_details";
$tdatastore_sub_categories[".inlineEditFields"][] = "brandnode";
$tdatastore_sub_categories[".inlineEditFields"][] = "brawseid";
$tdatastore_sub_categories[".inlineEditFields"][] = "brandidwomen";
$tdatastore_sub_categories[".inlineEditFields"][] = "template_id";
$tdatastore_sub_categories[".inlineEditFields"][] = "view1";
$tdatastore_sub_categories[".inlineEditFields"][] = "view2";
$tdatastore_sub_categories[".inlineEditFields"][] = "view3";
$tdatastore_sub_categories[".inlineEditFields"][] = "size1";
$tdatastore_sub_categories[".inlineEditFields"][] = "size2";
$tdatastore_sub_categories[".inlineEditFields"][] = "size3";
$tdatastore_sub_categories[".inlineEditFields"][] = "size4";
$tdatastore_sub_categories[".inlineEditFields"][] = "size5";
$tdatastore_sub_categories[".inlineEditFields"][] = "created_by";
$tdatastore_sub_categories[".inlineEditFields"][] = "created_at";
$tdatastore_sub_categories[".inlineEditFields"][] = "updated_by";
$tdatastore_sub_categories[".inlineEditFields"][] = "updated_at";

$tdatastore_sub_categories[".updateSelectedFields"] = array();
$tdatastore_sub_categories[".updateSelectedFields"][] = "category_id";
$tdatastore_sub_categories[".updateSelectedFields"][] = "sort";
$tdatastore_sub_categories[".updateSelectedFields"][] = "name";
$tdatastore_sub_categories[".updateSelectedFields"][] = "initial_name";
$tdatastore_sub_categories[".updateSelectedFields"][] = "condition_details";
$tdatastore_sub_categories[".updateSelectedFields"][] = "brandnode";
$tdatastore_sub_categories[".updateSelectedFields"][] = "brawseid";
$tdatastore_sub_categories[".updateSelectedFields"][] = "brandidwomen";
$tdatastore_sub_categories[".updateSelectedFields"][] = "template_id";
$tdatastore_sub_categories[".updateSelectedFields"][] = "view1";
$tdatastore_sub_categories[".updateSelectedFields"][] = "view2";
$tdatastore_sub_categories[".updateSelectedFields"][] = "view3";
$tdatastore_sub_categories[".updateSelectedFields"][] = "size1";
$tdatastore_sub_categories[".updateSelectedFields"][] = "size2";
$tdatastore_sub_categories[".updateSelectedFields"][] = "size3";
$tdatastore_sub_categories[".updateSelectedFields"][] = "size4";
$tdatastore_sub_categories[".updateSelectedFields"][] = "size5";


$tdatastore_sub_categories[".exportFields"] = array();
$tdatastore_sub_categories[".exportFields"][] = "related_words";
$tdatastore_sub_categories[".exportFields"][] = "hansokuhi_flag";
$tdatastore_sub_categories[".exportFields"][] = "category_class";
$tdatastore_sub_categories[".exportFields"][] = "colorstone_id";
$tdatastore_sub_categories[".exportFields"][] = "id";
$tdatastore_sub_categories[".exportFields"][] = "category_id";
$tdatastore_sub_categories[".exportFields"][] = "sort";
$tdatastore_sub_categories[".exportFields"][] = "name";
$tdatastore_sub_categories[".exportFields"][] = "initial_name";
$tdatastore_sub_categories[".exportFields"][] = "condition_details";
$tdatastore_sub_categories[".exportFields"][] = "brandnode";
$tdatastore_sub_categories[".exportFields"][] = "brawseid";
$tdatastore_sub_categories[".exportFields"][] = "brandidwomen";
$tdatastore_sub_categories[".exportFields"][] = "template_id";
$tdatastore_sub_categories[".exportFields"][] = "view1";
$tdatastore_sub_categories[".exportFields"][] = "view2";
$tdatastore_sub_categories[".exportFields"][] = "view3";
$tdatastore_sub_categories[".exportFields"][] = "size1";
$tdatastore_sub_categories[".exportFields"][] = "size2";
$tdatastore_sub_categories[".exportFields"][] = "size3";
$tdatastore_sub_categories[".exportFields"][] = "size4";
$tdatastore_sub_categories[".exportFields"][] = "size5";
$tdatastore_sub_categories[".exportFields"][] = "created_by";
$tdatastore_sub_categories[".exportFields"][] = "created_at";
$tdatastore_sub_categories[".exportFields"][] = "updated_by";
$tdatastore_sub_categories[".exportFields"][] = "updated_at";

$tdatastore_sub_categories[".importFields"] = array();
$tdatastore_sub_categories[".importFields"][] = "id";
$tdatastore_sub_categories[".importFields"][] = "category_id";
$tdatastore_sub_categories[".importFields"][] = "name";
$tdatastore_sub_categories[".importFields"][] = "template_id";
$tdatastore_sub_categories[".importFields"][] = "initial_name";
$tdatastore_sub_categories[".importFields"][] = "view1";
$tdatastore_sub_categories[".importFields"][] = "view2";
$tdatastore_sub_categories[".importFields"][] = "view3";
$tdatastore_sub_categories[".importFields"][] = "size1";
$tdatastore_sub_categories[".importFields"][] = "size2";
$tdatastore_sub_categories[".importFields"][] = "size3";
$tdatastore_sub_categories[".importFields"][] = "size4";
$tdatastore_sub_categories[".importFields"][] = "size5";
$tdatastore_sub_categories[".importFields"][] = "sort";
$tdatastore_sub_categories[".importFields"][] = "brawseid";
$tdatastore_sub_categories[".importFields"][] = "brandnode";
$tdatastore_sub_categories[".importFields"][] = "brandidwomen";
$tdatastore_sub_categories[".importFields"][] = "condition_details";
$tdatastore_sub_categories[".importFields"][] = "updated_at";
$tdatastore_sub_categories[".importFields"][] = "updated_by";
$tdatastore_sub_categories[".importFields"][] = "created_by";
$tdatastore_sub_categories[".importFields"][] = "created_at";
$tdatastore_sub_categories[".importFields"][] = "related_words";
$tdatastore_sub_categories[".importFields"][] = "hansokuhi_flag";
$tdatastore_sub_categories[".importFields"][] = "category_class";
$tdatastore_sub_categories[".importFields"][] = "colorstone_id";

$tdatastore_sub_categories[".printFields"] = array();
$tdatastore_sub_categories[".printFields"][] = "related_words";
$tdatastore_sub_categories[".printFields"][] = "hansokuhi_flag";
$tdatastore_sub_categories[".printFields"][] = "category_class";
$tdatastore_sub_categories[".printFields"][] = "colorstone_id";
$tdatastore_sub_categories[".printFields"][] = "id";
$tdatastore_sub_categories[".printFields"][] = "category_id";
$tdatastore_sub_categories[".printFields"][] = "sort";
$tdatastore_sub_categories[".printFields"][] = "name";
$tdatastore_sub_categories[".printFields"][] = "initial_name";
$tdatastore_sub_categories[".printFields"][] = "condition_details";
$tdatastore_sub_categories[".printFields"][] = "brandnode";
$tdatastore_sub_categories[".printFields"][] = "brawseid";
$tdatastore_sub_categories[".printFields"][] = "brandidwomen";
$tdatastore_sub_categories[".printFields"][] = "template_id";
$tdatastore_sub_categories[".printFields"][] = "view1";
$tdatastore_sub_categories[".printFields"][] = "view2";
$tdatastore_sub_categories[".printFields"][] = "view3";
$tdatastore_sub_categories[".printFields"][] = "size1";
$tdatastore_sub_categories[".printFields"][] = "size2";
$tdatastore_sub_categories[".printFields"][] = "size3";
$tdatastore_sub_categories[".printFields"][] = "size4";
$tdatastore_sub_categories[".printFields"][] = "size5";
$tdatastore_sub_categories[".printFields"][] = "created_by";
$tdatastore_sub_categories[".printFields"][] = "created_at";
$tdatastore_sub_categories[".printFields"][] = "updated_by";
$tdatastore_sub_categories[".printFields"][] = "updated_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","id");
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




	$tdatastore_sub_categories["id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","category_id");
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




	$tdatastore_sub_categories["category_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","name");
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdatastore_sub_categories["name"] = $fdata;
//	template_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "template_id";
	$fdata["GoodName"] = "template_id";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","template_id");
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

		$fdata["strField"] = "template_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`template_id`";

	
	
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




	$tdatastore_sub_categories["template_id"] = $fdata;
//	initial_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "initial_name";
	$fdata["GoodName"] = "initial_name";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","initial_name");
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

		$fdata["strField"] = "initial_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`initial_name`";

	
	
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdatastore_sub_categories["initial_name"] = $fdata;
//	view1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "view1";
	$fdata["GoodName"] = "view1";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","view1");
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

		$fdata["strField"] = "view1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`view1`";

	
	
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




	$tdatastore_sub_categories["view1"] = $fdata;
//	view2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "view2";
	$fdata["GoodName"] = "view2";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","view2");
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

		$fdata["strField"] = "view2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`view2`";

	
	
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




	$tdatastore_sub_categories["view2"] = $fdata;
//	view3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "view3";
	$fdata["GoodName"] = "view3";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","view3");
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

		$fdata["strField"] = "view3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`view3`";

	
	
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




	$tdatastore_sub_categories["view3"] = $fdata;
//	size1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "size1";
	$fdata["GoodName"] = "size1";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","size1");
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

		$fdata["strField"] = "size1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`size1`";

	
	
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




	$tdatastore_sub_categories["size1"] = $fdata;
//	size2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "size2";
	$fdata["GoodName"] = "size2";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","size2");
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

		$fdata["strField"] = "size2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`size2`";

	
	
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




	$tdatastore_sub_categories["size2"] = $fdata;
//	size3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "size3";
	$fdata["GoodName"] = "size3";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","size3");
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

		$fdata["strField"] = "size3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`size3`";

	
	
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




	$tdatastore_sub_categories["size3"] = $fdata;
//	size4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "size4";
	$fdata["GoodName"] = "size4";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","size4");
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

		$fdata["strField"] = "size4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`size4`";

	
	
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




	$tdatastore_sub_categories["size4"] = $fdata;
//	size5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "size5";
	$fdata["GoodName"] = "size5";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","size5");
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

		$fdata["strField"] = "size5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`size5`";

	
	
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




	$tdatastore_sub_categories["size5"] = $fdata;
//	size6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "size6";
	$fdata["GoodName"] = "size6";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","size6");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "size6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`size6`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 420;
			$edata["nCols"] = 650;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatastore_sub_categories["size6"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","sort");
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




	$tdatastore_sub_categories["sort"] = $fdata;
//	brawseid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "brawseid";
	$fdata["GoodName"] = "brawseid";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","brawseid");
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

		$fdata["strField"] = "brawseid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brawseid`";

	
	
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




	$tdatastore_sub_categories["brawseid"] = $fdata;
//	brandnode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "brandnode";
	$fdata["GoodName"] = "brandnode";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","brandnode");
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

		$fdata["strField"] = "brandnode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brandnode`";

	
	
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




	$tdatastore_sub_categories["brandnode"] = $fdata;
//	brandidwomen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "brandidwomen";
	$fdata["GoodName"] = "brandidwomen";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","brandidwomen");
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

		$fdata["strField"] = "brandidwomen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brandidwomen`";

	
	
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




	$tdatastore_sub_categories["brandidwomen"] = $fdata;
//	condition_details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "condition_details";
	$fdata["GoodName"] = "condition_details";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","condition_details");
	$fdata["FieldType"] = 201;

	
	
	
			
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

		$fdata["strField"] = "condition_details";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`condition_details`";

	
	
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

	
	
	
				$edata["nRows"] = 200;
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




	$tdatastore_sub_categories["condition_details"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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

	
	
		$edata["DateEditType"] = 11;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatastore_sub_categories["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","updated_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatastore_sub_categories["updated_by"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","created_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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
			$edata["EditParams"].= " maxlength=50";

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




	$tdatastore_sub_categories["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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

	
	
		$edata["DateEditType"] = 11;
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




	$tdatastore_sub_categories["created_at"] = $fdata;
//	related_words
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "related_words";
	$fdata["GoodName"] = "related_words";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","related_words");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "related_words";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`related_words`";

	
	
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




	$tdatastore_sub_categories["related_words"] = $fdata;
//	hansokuhi_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "hansokuhi_flag";
	$fdata["GoodName"] = "hansokuhi_flag";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","hansokuhi_flag");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hansokuhi_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`hansokuhi_flag`";

	
	
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




	$tdatastore_sub_categories["hansokuhi_flag"] = $fdata;
//	category_class
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "category_class";
	$fdata["GoodName"] = "category_class";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","category_class");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_class";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_class`";

	
	
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
	$edata["LookupTable"] = "mst_category_class";
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




	$tdatastore_sub_categories["category_class"] = $fdata;
//	colorstone_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "colorstone_id";
	$fdata["GoodName"] = "colorstone_id";
	$fdata["ownerTable"] = "store_sub_categories";
	$fdata["Label"] = GetFieldLabel("store_sub_categories","colorstone_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatastore_sub_categories["colorstone_id"] = $fdata;


$tables_data["store_sub_categories"]=&$tdatastore_sub_categories;
$field_labels["store_sub_categories"] = &$fieldLabelsstore_sub_categories;
$fieldToolTips["store_sub_categories"] = &$fieldToolTipsstore_sub_categories;
$placeHolders["store_sub_categories"] = &$placeHoldersstore_sub_categories;
$page_titles["store_sub_categories"] = &$pageTitlesstore_sub_categories;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["store_sub_categories"] = array();
//	mst_saisun_item_by_category
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="mst_saisun_item_by_category";
		$detailsParam["dOriginalTable"] = "mst_saisun_item_by_category";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mst_saisun_item_by_category";
	$detailsParam["dCaptionTable"] = GetTableCaption("mst_saisun_item_by_category");
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
		
	$detailsTablesData["store_sub_categories"][$dIndex] = $detailsParam;

	
		$detailsTablesData["store_sub_categories"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["store_sub_categories"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["store_sub_categories"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["store_sub_categories"][$dIndex]["detailKeys"][]="sub_category_id1";

// tables which are master tables for current table (detail)
$masterTablesData["store_sub_categories"] = array();


	
				$strOriginalDetailsTable="store_categories";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="store_categories";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "store_categories";
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
					$masterTablesData["store_sub_categories"][0] = $masterParams;
				$masterTablesData["store_sub_categories"][0]["masterKeys"] = array();
	$masterTablesData["store_sub_categories"][0]["masterKeys"][]="category_id";
				$masterTablesData["store_sub_categories"][0]["detailKeys"] = array();
	$masterTablesData["store_sub_categories"][0]["detailKeys"][]="category_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_store_sub_categories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `category_id`,  `name`,  `template_id`,  `initial_name`,  `view1`,  `view2`,  `view3`,  `size1`,  `size2`,  `size3`,  `size4`,  `size5`,  `size6`,  `sort`,  `brawseid`,  `brandnode`,  `brandidwomen`,  `condition_details`,  `updated_at`,  `updated_by`,  `created_by`,  `created_at`,  `related_words`,  `hansokuhi_flag`,  `category_class`,  `colorstone_id`";
$proto0["m_strFrom"] = "FROM `store_sub_categories`";
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
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "store_sub_categories";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto8["m_sql"] = "`category_id`";
$proto8["m_srcTableName"] = "store_sub_categories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto10["m_sql"] = "`name`";
$proto10["m_srcTableName"] = "store_sub_categories";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "template_id",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto12["m_sql"] = "`template_id`";
$proto12["m_srcTableName"] = "store_sub_categories";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "initial_name",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto14["m_sql"] = "`initial_name`";
$proto14["m_srcTableName"] = "store_sub_categories";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "view1",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto16["m_sql"] = "`view1`";
$proto16["m_srcTableName"] = "store_sub_categories";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "view2",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto18["m_sql"] = "`view2`";
$proto18["m_srcTableName"] = "store_sub_categories";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "view3",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto20["m_sql"] = "`view3`";
$proto20["m_srcTableName"] = "store_sub_categories";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "size1",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto22["m_sql"] = "`size1`";
$proto22["m_srcTableName"] = "store_sub_categories";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "size2",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto24["m_sql"] = "`size2`";
$proto24["m_srcTableName"] = "store_sub_categories";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "size3",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto26["m_sql"] = "`size3`";
$proto26["m_srcTableName"] = "store_sub_categories";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "size4",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto28["m_sql"] = "`size4`";
$proto28["m_srcTableName"] = "store_sub_categories";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "size5",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto30["m_sql"] = "`size5`";
$proto30["m_srcTableName"] = "store_sub_categories";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "size6",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto32["m_sql"] = "`size6`";
$proto32["m_srcTableName"] = "store_sub_categories";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto34["m_sql"] = "`sort`";
$proto34["m_srcTableName"] = "store_sub_categories";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "brawseid",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto36["m_sql"] = "`brawseid`";
$proto36["m_srcTableName"] = "store_sub_categories";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "brandnode",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto38["m_sql"] = "`brandnode`";
$proto38["m_srcTableName"] = "store_sub_categories";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "brandidwomen",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto40["m_sql"] = "`brandidwomen`";
$proto40["m_srcTableName"] = "store_sub_categories";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "condition_details",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto42["m_sql"] = "`condition_details`";
$proto42["m_srcTableName"] = "store_sub_categories";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto44["m_sql"] = "`updated_at`";
$proto44["m_srcTableName"] = "store_sub_categories";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto46["m_sql"] = "`updated_by`";
$proto46["m_srcTableName"] = "store_sub_categories";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto48["m_sql"] = "`created_by`";
$proto48["m_srcTableName"] = "store_sub_categories";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto50["m_sql"] = "`created_at`";
$proto50["m_srcTableName"] = "store_sub_categories";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "related_words",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto52["m_sql"] = "`related_words`";
$proto52["m_srcTableName"] = "store_sub_categories";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "hansokuhi_flag",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto54["m_sql"] = "`hansokuhi_flag`";
$proto54["m_srcTableName"] = "store_sub_categories";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "category_class",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto56["m_sql"] = "`category_class`";
$proto56["m_srcTableName"] = "store_sub_categories";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "colorstone_id",
	"m_strTable" => "store_sub_categories",
	"m_srcTableName" => "store_sub_categories"
));

$proto58["m_sql"] = "`colorstone_id`";
$proto58["m_srcTableName"] = "store_sub_categories";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto60=array();
$proto60["m_link"] = "SQLL_MAIN";
			$proto61=array();
$proto61["m_strName"] = "store_sub_categories";
$proto61["m_srcTableName"] = "store_sub_categories";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "id";
$proto61["m_columns"][] = "category_id";
$proto61["m_columns"][] = "name";
$proto61["m_columns"][] = "template_id";
$proto61["m_columns"][] = "initial_name";
$proto61["m_columns"][] = "view1";
$proto61["m_columns"][] = "view2";
$proto61["m_columns"][] = "view3";
$proto61["m_columns"][] = "size1";
$proto61["m_columns"][] = "size2";
$proto61["m_columns"][] = "size3";
$proto61["m_columns"][] = "size4";
$proto61["m_columns"][] = "size5";
$proto61["m_columns"][] = "size6";
$proto61["m_columns"][] = "sort";
$proto61["m_columns"][] = "brawseid";
$proto61["m_columns"][] = "brandnode";
$proto61["m_columns"][] = "brandidwomen";
$proto61["m_columns"][] = "condition_id";
$proto61["m_columns"][] = "condition_tmp";
$proto61["m_columns"][] = "rakuten_koumoku";
$proto61["m_columns"][] = "saisun_priority_check";
$proto61["m_columns"][] = "condition_details";
$proto61["m_columns"][] = "updated_at";
$proto61["m_columns"][] = "updated_by";
$proto61["m_columns"][] = "created_at";
$proto61["m_columns"][] = "created_by";
$proto61["m_columns"][] = "output_template";
$proto61["m_columns"][] = "saisun_model_id";
$proto61["m_columns"][] = "related_words";
$proto61["m_columns"][] = "hansokuhi_flag";
$proto61["m_columns"][] = "category_class";
$proto61["m_columns"][] = "sales_category";
$proto61["m_columns"][] = "colorstone_id";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "`store_sub_categories`";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "store_sub_categories";
$proto62=array();
$proto62["m_sql"] = "";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="store_sub_categories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_store_sub_categories = createSqlQuery_store_sub_categories();


	
		;

																											

$tdatastore_sub_categories[".sqlquery"] = $queryData_store_sub_categories;

$tableEvents["store_sub_categories"] = new eventsBase;
$tdatastore_sub_categories[".hasEvents"] = false;

?>