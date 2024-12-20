<?php
require_once(getabspath("classes/cipherer.php"));




$tdatastore_categories = array();
	$tdatastore_categories[".ShortName"] = "store_categories";
	$tdatastore_categories[".OwnerID"] = "";
	$tdatastore_categories[".OriginalTable"] = "store_categories";

//	field labels
$fieldLabelsstore_categories = array();
$fieldToolTipsstore_categories = array();
$pageTitlesstore_categories = array();
$placeHoldersstore_categories = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsstore_categories["Japanese"] = array();
	$fieldToolTipsstore_categories["Japanese"] = array();
	$placeHoldersstore_categories["Japanese"] = array();
	$pageTitlesstore_categories["Japanese"] = array();
	$fieldLabelsstore_categories["Japanese"]["category_id"] = "Category Id";
	$fieldToolTipsstore_categories["Japanese"]["category_id"] = "";
	$placeHoldersstore_categories["Japanese"]["category_id"] = "";
	$fieldLabelsstore_categories["Japanese"]["category_name"] = "Category Name";
	$fieldToolTipsstore_categories["Japanese"]["category_name"] = "";
	$placeHoldersstore_categories["Japanese"]["category_name"] = "";
	$fieldLabelsstore_categories["Japanese"]["category_initial"] = "Category Initial";
	$fieldToolTipsstore_categories["Japanese"]["category_initial"] = "";
	$placeHoldersstore_categories["Japanese"]["category_initial"] = "";
	$fieldLabelsstore_categories["Japanese"]["sort"] = "Sort";
	$fieldToolTipsstore_categories["Japanese"]["sort"] = "";
	$placeHoldersstore_categories["Japanese"]["sort"] = "";
	$fieldLabelsstore_categories["Japanese"]["store_editorial_products"] = "Store Editorial Products";
	$fieldToolTipsstore_categories["Japanese"]["store_editorial_products"] = "";
	$placeHoldersstore_categories["Japanese"]["store_editorial_products"] = "";
	$fieldLabelsstore_categories["Japanese"]["category_is_active"] = "Category Is Active";
	$fieldToolTipsstore_categories["Japanese"]["category_is_active"] = "";
	$placeHoldersstore_categories["Japanese"]["category_is_active"] = "";
	$fieldLabelsstore_categories["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsstore_categories["Japanese"]["created_at"] = "";
	$placeHoldersstore_categories["Japanese"]["created_at"] = "";
	$fieldLabelsstore_categories["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsstore_categories["Japanese"]["created_by"] = "";
	$placeHoldersstore_categories["Japanese"]["created_by"] = "";
	$fieldLabelsstore_categories["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsstore_categories["Japanese"]["updated_at"] = "";
	$placeHoldersstore_categories["Japanese"]["updated_at"] = "";
	$fieldLabelsstore_categories["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsstore_categories["Japanese"]["updated_by"] = "";
	$placeHoldersstore_categories["Japanese"]["updated_by"] = "";
	$fieldLabelsstore_categories["Japanese"]["is_purchase_D"] = "種別D";
	$fieldToolTipsstore_categories["Japanese"]["is_purchase_D"] = "";
	$placeHoldersstore_categories["Japanese"]["is_purchase_D"] = "";
	$fieldLabelsstore_categories["Japanese"]["is_purchase_K"] = "種別K";
	$fieldToolTipsstore_categories["Japanese"]["is_purchase_K"] = "";
	$placeHoldersstore_categories["Japanese"]["is_purchase_K"] = "";
	$fieldLabelsstore_categories["Japanese"]["is_purchase_J"] = "種別J";
	$fieldToolTipsstore_categories["Japanese"]["is_purchase_J"] = "";
	$placeHoldersstore_categories["Japanese"]["is_purchase_J"] = "";
	$fieldLabelsstore_categories["Japanese"]["is_purchase_B"] = "種別B";
	$fieldToolTipsstore_categories["Japanese"]["is_purchase_B"] = "";
	$placeHoldersstore_categories["Japanese"]["is_purchase_B"] = "";
	$fieldLabelsstore_categories["Japanese"]["is_purchase_H"] = "種別H";
	$fieldToolTipsstore_categories["Japanese"]["is_purchase_H"] = "";
	$placeHoldersstore_categories["Japanese"]["is_purchase_H"] = "";
	$fieldLabelsstore_categories["Japanese"]["is_purchase_W"] = "種別W";
	$fieldToolTipsstore_categories["Japanese"]["is_purchase_W"] = "";
	$placeHoldersstore_categories["Japanese"]["is_purchase_W"] = "";
	if (count($fieldToolTipsstore_categories["Japanese"]))
		$tdatastore_categories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsstore_categories[""] = array();
	$fieldToolTipsstore_categories[""] = array();
	$placeHoldersstore_categories[""] = array();
	$pageTitlesstore_categories[""] = array();
	if (count($fieldToolTipsstore_categories[""]))
		$tdatastore_categories[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstore_categories["English"] = array();
	$fieldToolTipsstore_categories["English"] = array();
	$placeHoldersstore_categories["English"] = array();
	$pageTitlesstore_categories["English"] = array();
	if (count($fieldToolTipsstore_categories["English"]))
		$tdatastore_categories[".isUseToolTips"] = true;
}


	$tdatastore_categories[".NCSearch"] = true;



$tdatastore_categories[".shortTableName"] = "store_categories";
$tdatastore_categories[".nSecOptions"] = 0;
$tdatastore_categories[".recsPerRowPrint"] = 1;
$tdatastore_categories[".mainTableOwnerID"] = "";
$tdatastore_categories[".moveNext"] = 1;
$tdatastore_categories[".entityType"] = 0;

$tdatastore_categories[".strOriginalTableName"] = "store_categories";

	



$tdatastore_categories[".showAddInPopup"] = false;

$tdatastore_categories[".showEditInPopup"] = false;

$tdatastore_categories[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatastore_categories[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatastore_categories[".fieldsForRegister"] = array();

$tdatastore_categories[".listAjax"] = false;

	$tdatastore_categories[".audit"] = true;

	$tdatastore_categories[".locking"] = false;

$tdatastore_categories[".edit"] = true;
$tdatastore_categories[".afterEditAction"] = 1;
$tdatastore_categories[".closePopupAfterEdit"] = 1;
$tdatastore_categories[".afterEditActionDetTable"] = "";

$tdatastore_categories[".add"] = true;
$tdatastore_categories[".afterAddAction"] = 1;
$tdatastore_categories[".closePopupAfterAdd"] = 1;
$tdatastore_categories[".afterAddActionDetTable"] = "";

$tdatastore_categories[".list"] = true;

$tdatastore_categories[".inlineEdit"] = true;

$tdatastore_categories[".updateSelected"] = true;

$tdatastore_categories[".reorderRecordsByHeader"] = true;



$tdatastore_categories[".inlineAdd"] = true;
$tdatastore_categories[".copy"] = true;
$tdatastore_categories[".view"] = true;

$tdatastore_categories[".import"] = true;

$tdatastore_categories[".exportTo"] = true;

$tdatastore_categories[".printFriendly"] = true;

$tdatastore_categories[".delete"] = true;

$tdatastore_categories[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatastore_categories[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatastore_categories[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatastore_categories[".searchSaving"] = false;
//

$tdatastore_categories[".showSearchPanel"] = true;
		$tdatastore_categories[".flexibleSearch"] = true;

$tdatastore_categories[".isUseAjaxSuggest"] = true;

$tdatastore_categories[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatastore_categories[".ajaxCodeSnippetAdded"] = false;

$tdatastore_categories[".buttonsAdded"] = false;

$tdatastore_categories[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastore_categories[".isUseTimeForSearch"] = false;




$tdatastore_categories[".detailsLinksOnList"] = "1";

$tdatastore_categories[".allSearchFields"] = array();
$tdatastore_categories[".filterFields"] = array();
$tdatastore_categories[".requiredSearchFields"] = array();

$tdatastore_categories[".allSearchFields"][] = "is_purchase_K";
	$tdatastore_categories[".allSearchFields"][] = "is_purchase_B";
	$tdatastore_categories[".allSearchFields"][] = "is_purchase_J";
	$tdatastore_categories[".allSearchFields"][] = "is_purchase_D";
	$tdatastore_categories[".allSearchFields"][] = "is_purchase_W";
	$tdatastore_categories[".allSearchFields"][] = "is_purchase_H";
	$tdatastore_categories[".allSearchFields"][] = "category_id";
	$tdatastore_categories[".allSearchFields"][] = "category_name";
	$tdatastore_categories[".allSearchFields"][] = "category_initial";
	$tdatastore_categories[".allSearchFields"][] = "sort";
	$tdatastore_categories[".allSearchFields"][] = "store_editorial_products";
	$tdatastore_categories[".allSearchFields"][] = "category_is_active";
	$tdatastore_categories[".allSearchFields"][] = "created_by";
	$tdatastore_categories[".allSearchFields"][] = "created_at";
	$tdatastore_categories[".allSearchFields"][] = "updated_by";
	$tdatastore_categories[".allSearchFields"][] = "updated_at";
	

$tdatastore_categories[".googleLikeFields"] = array();
$tdatastore_categories[".googleLikeFields"][] = "category_id";
$tdatastore_categories[".googleLikeFields"][] = "category_name";
$tdatastore_categories[".googleLikeFields"][] = "category_initial";
$tdatastore_categories[".googleLikeFields"][] = "sort";
$tdatastore_categories[".googleLikeFields"][] = "store_editorial_products";
$tdatastore_categories[".googleLikeFields"][] = "category_is_active";
$tdatastore_categories[".googleLikeFields"][] = "created_at";
$tdatastore_categories[".googleLikeFields"][] = "created_by";
$tdatastore_categories[".googleLikeFields"][] = "updated_at";
$tdatastore_categories[".googleLikeFields"][] = "updated_by";
$tdatastore_categories[".googleLikeFields"][] = "is_purchase_D";
$tdatastore_categories[".googleLikeFields"][] = "is_purchase_K";
$tdatastore_categories[".googleLikeFields"][] = "is_purchase_J";
$tdatastore_categories[".googleLikeFields"][] = "is_purchase_B";
$tdatastore_categories[".googleLikeFields"][] = "is_purchase_H";
$tdatastore_categories[".googleLikeFields"][] = "is_purchase_W";

$tdatastore_categories[".panelSearchFields"] = array();
$tdatastore_categories[".searchPanelOptions"] = array();
$tdatastore_categories[".panelSearchFields"][] = "category_id";
	$tdatastore_categories[".panelSearchFields"][] = "category_name";
	$tdatastore_categories[".panelSearchFields"][] = "category_initial";
	$tdatastore_categories[".panelSearchFields"][] = "sort";
	$tdatastore_categories[".panelSearchFields"][] = "store_editorial_products";
	$tdatastore_categories[".panelSearchFields"][] = "category_is_active";
	
$tdatastore_categories[".advSearchFields"] = array();
$tdatastore_categories[".advSearchFields"][] = "is_purchase_K";
$tdatastore_categories[".advSearchFields"][] = "is_purchase_B";
$tdatastore_categories[".advSearchFields"][] = "is_purchase_J";
$tdatastore_categories[".advSearchFields"][] = "is_purchase_D";
$tdatastore_categories[".advSearchFields"][] = "is_purchase_W";
$tdatastore_categories[".advSearchFields"][] = "is_purchase_H";
$tdatastore_categories[".advSearchFields"][] = "category_id";
$tdatastore_categories[".advSearchFields"][] = "category_name";
$tdatastore_categories[".advSearchFields"][] = "category_initial";
$tdatastore_categories[".advSearchFields"][] = "sort";
$tdatastore_categories[".advSearchFields"][] = "store_editorial_products";
$tdatastore_categories[".advSearchFields"][] = "category_is_active";
$tdatastore_categories[".advSearchFields"][] = "created_by";
$tdatastore_categories[".advSearchFields"][] = "created_at";
$tdatastore_categories[".advSearchFields"][] = "updated_by";
$tdatastore_categories[".advSearchFields"][] = "updated_at";

$tdatastore_categories[".tableType"] = "list";

$tdatastore_categories[".printerPageOrientation"] = 0;
$tdatastore_categories[".nPrinterPageScale"] = 100;

$tdatastore_categories[".nPrinterSplitRecords"] = 40;

$tdatastore_categories[".nPrinterPDFSplitRecords"] = 40;



$tdatastore_categories[".geocodingEnabled"] = false;





$tdatastore_categories[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatastore_categories[".pageSize"] = 50;

$tdatastore_categories[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastore_categories[".strOrderBy"] = $tstrOrderBy;

$tdatastore_categories[".orderindexes"] = array();
$tdatastore_categories[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "`sort`");

$tdatastore_categories[".sqlHead"] = "SELECT `category_id`,  `category_name`,  `category_initial`,  `sort`,  `store_editorial_products`,  `category_is_active`,  `created_at`,  `created_by`,  `updated_at`,  `updated_by`,  `is_purchase_D`,  `is_purchase_K`,  `is_purchase_J`,  `is_purchase_B`,  `is_purchase_H`,  `is_purchase_W`";
$tdatastore_categories[".sqlFrom"] = "FROM `store_categories`";
$tdatastore_categories[".sqlWhereExpr"] = "";
$tdatastore_categories[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastore_categories[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastore_categories[".arrGroupsPerPage"] = $arrGPP;

$tdatastore_categories[".highlightSearchResults"] = true;

$tableKeysstore_categories = array();
$tableKeysstore_categories[] = "category_id";
$tdatastore_categories[".Keys"] = $tableKeysstore_categories;

$tdatastore_categories[".listFields"] = array();
$tdatastore_categories[".listFields"][] = "is_purchase_K";
$tdatastore_categories[".listFields"][] = "is_purchase_B";
$tdatastore_categories[".listFields"][] = "is_purchase_J";
$tdatastore_categories[".listFields"][] = "is_purchase_D";
$tdatastore_categories[".listFields"][] = "is_purchase_W";
$tdatastore_categories[".listFields"][] = "is_purchase_H";
$tdatastore_categories[".listFields"][] = "category_id";
$tdatastore_categories[".listFields"][] = "category_name";
$tdatastore_categories[".listFields"][] = "category_initial";
$tdatastore_categories[".listFields"][] = "sort";
$tdatastore_categories[".listFields"][] = "store_editorial_products";
$tdatastore_categories[".listFields"][] = "category_is_active";
$tdatastore_categories[".listFields"][] = "created_by";
$tdatastore_categories[".listFields"][] = "created_at";
$tdatastore_categories[".listFields"][] = "updated_by";
$tdatastore_categories[".listFields"][] = "updated_at";

$tdatastore_categories[".hideMobileList"] = array();


$tdatastore_categories[".viewFields"] = array();
$tdatastore_categories[".viewFields"][] = "is_purchase_K";
$tdatastore_categories[".viewFields"][] = "is_purchase_B";
$tdatastore_categories[".viewFields"][] = "is_purchase_J";
$tdatastore_categories[".viewFields"][] = "is_purchase_D";
$tdatastore_categories[".viewFields"][] = "is_purchase_W";
$tdatastore_categories[".viewFields"][] = "is_purchase_H";
$tdatastore_categories[".viewFields"][] = "category_id";
$tdatastore_categories[".viewFields"][] = "category_name";
$tdatastore_categories[".viewFields"][] = "category_initial";
$tdatastore_categories[".viewFields"][] = "sort";
$tdatastore_categories[".viewFields"][] = "store_editorial_products";
$tdatastore_categories[".viewFields"][] = "category_is_active";
$tdatastore_categories[".viewFields"][] = "created_by";
$tdatastore_categories[".viewFields"][] = "created_at";
$tdatastore_categories[".viewFields"][] = "updated_by";
$tdatastore_categories[".viewFields"][] = "updated_at";

$tdatastore_categories[".addFields"] = array();
$tdatastore_categories[".addFields"][] = "is_purchase_K";
$tdatastore_categories[".addFields"][] = "is_purchase_B";
$tdatastore_categories[".addFields"][] = "is_purchase_J";
$tdatastore_categories[".addFields"][] = "is_purchase_D";
$tdatastore_categories[".addFields"][] = "is_purchase_W";
$tdatastore_categories[".addFields"][] = "is_purchase_H";
$tdatastore_categories[".addFields"][] = "category_name";
$tdatastore_categories[".addFields"][] = "category_initial";
$tdatastore_categories[".addFields"][] = "sort";
$tdatastore_categories[".addFields"][] = "store_editorial_products";
$tdatastore_categories[".addFields"][] = "category_is_active";
$tdatastore_categories[".addFields"][] = "created_by";
$tdatastore_categories[".addFields"][] = "created_at";
$tdatastore_categories[".addFields"][] = "updated_by";
$tdatastore_categories[".addFields"][] = "updated_at";

$tdatastore_categories[".masterListFields"] = array();
$tdatastore_categories[".masterListFields"][] = "is_purchase_K";
$tdatastore_categories[".masterListFields"][] = "is_purchase_B";
$tdatastore_categories[".masterListFields"][] = "is_purchase_J";
$tdatastore_categories[".masterListFields"][] = "is_purchase_D";
$tdatastore_categories[".masterListFields"][] = "is_purchase_W";
$tdatastore_categories[".masterListFields"][] = "is_purchase_H";
$tdatastore_categories[".masterListFields"][] = "category_id";
$tdatastore_categories[".masterListFields"][] = "category_name";
$tdatastore_categories[".masterListFields"][] = "category_initial";
$tdatastore_categories[".masterListFields"][] = "sort";
$tdatastore_categories[".masterListFields"][] = "store_editorial_products";
$tdatastore_categories[".masterListFields"][] = "category_is_active";
$tdatastore_categories[".masterListFields"][] = "created_by";
$tdatastore_categories[".masterListFields"][] = "created_at";
$tdatastore_categories[".masterListFields"][] = "updated_by";
$tdatastore_categories[".masterListFields"][] = "updated_at";

$tdatastore_categories[".inlineAddFields"] = array();
$tdatastore_categories[".inlineAddFields"][] = "is_purchase_K";
$tdatastore_categories[".inlineAddFields"][] = "is_purchase_B";
$tdatastore_categories[".inlineAddFields"][] = "is_purchase_J";
$tdatastore_categories[".inlineAddFields"][] = "is_purchase_D";
$tdatastore_categories[".inlineAddFields"][] = "is_purchase_W";
$tdatastore_categories[".inlineAddFields"][] = "is_purchase_H";
$tdatastore_categories[".inlineAddFields"][] = "category_name";
$tdatastore_categories[".inlineAddFields"][] = "category_initial";
$tdatastore_categories[".inlineAddFields"][] = "sort";
$tdatastore_categories[".inlineAddFields"][] = "store_editorial_products";
$tdatastore_categories[".inlineAddFields"][] = "category_is_active";
$tdatastore_categories[".inlineAddFields"][] = "created_by";
$tdatastore_categories[".inlineAddFields"][] = "created_at";
$tdatastore_categories[".inlineAddFields"][] = "updated_by";
$tdatastore_categories[".inlineAddFields"][] = "updated_at";

$tdatastore_categories[".editFields"] = array();
$tdatastore_categories[".editFields"][] = "is_purchase_K";
$tdatastore_categories[".editFields"][] = "is_purchase_B";
$tdatastore_categories[".editFields"][] = "is_purchase_J";
$tdatastore_categories[".editFields"][] = "is_purchase_D";
$tdatastore_categories[".editFields"][] = "is_purchase_W";
$tdatastore_categories[".editFields"][] = "is_purchase_H";
$tdatastore_categories[".editFields"][] = "category_name";
$tdatastore_categories[".editFields"][] = "category_initial";
$tdatastore_categories[".editFields"][] = "sort";
$tdatastore_categories[".editFields"][] = "store_editorial_products";
$tdatastore_categories[".editFields"][] = "category_is_active";
$tdatastore_categories[".editFields"][] = "created_by";
$tdatastore_categories[".editFields"][] = "created_at";
$tdatastore_categories[".editFields"][] = "updated_by";
$tdatastore_categories[".editFields"][] = "updated_at";

$tdatastore_categories[".inlineEditFields"] = array();
$tdatastore_categories[".inlineEditFields"][] = "is_purchase_K";
$tdatastore_categories[".inlineEditFields"][] = "is_purchase_B";
$tdatastore_categories[".inlineEditFields"][] = "is_purchase_J";
$tdatastore_categories[".inlineEditFields"][] = "is_purchase_D";
$tdatastore_categories[".inlineEditFields"][] = "is_purchase_W";
$tdatastore_categories[".inlineEditFields"][] = "is_purchase_H";
$tdatastore_categories[".inlineEditFields"][] = "category_name";
$tdatastore_categories[".inlineEditFields"][] = "category_initial";
$tdatastore_categories[".inlineEditFields"][] = "sort";
$tdatastore_categories[".inlineEditFields"][] = "store_editorial_products";
$tdatastore_categories[".inlineEditFields"][] = "category_is_active";
$tdatastore_categories[".inlineEditFields"][] = "created_by";
$tdatastore_categories[".inlineEditFields"][] = "created_at";
$tdatastore_categories[".inlineEditFields"][] = "updated_by";
$tdatastore_categories[".inlineEditFields"][] = "updated_at";

$tdatastore_categories[".updateSelectedFields"] = array();
$tdatastore_categories[".updateSelectedFields"][] = "category_name";
$tdatastore_categories[".updateSelectedFields"][] = "category_initial";
$tdatastore_categories[".updateSelectedFields"][] = "sort";
$tdatastore_categories[".updateSelectedFields"][] = "store_editorial_products";
$tdatastore_categories[".updateSelectedFields"][] = "category_is_active";


$tdatastore_categories[".exportFields"] = array();
$tdatastore_categories[".exportFields"][] = "is_purchase_K";
$tdatastore_categories[".exportFields"][] = "is_purchase_B";
$tdatastore_categories[".exportFields"][] = "is_purchase_J";
$tdatastore_categories[".exportFields"][] = "is_purchase_D";
$tdatastore_categories[".exportFields"][] = "is_purchase_W";
$tdatastore_categories[".exportFields"][] = "is_purchase_H";
$tdatastore_categories[".exportFields"][] = "category_id";
$tdatastore_categories[".exportFields"][] = "category_name";
$tdatastore_categories[".exportFields"][] = "category_initial";
$tdatastore_categories[".exportFields"][] = "sort";
$tdatastore_categories[".exportFields"][] = "store_editorial_products";
$tdatastore_categories[".exportFields"][] = "category_is_active";
$tdatastore_categories[".exportFields"][] = "created_by";
$tdatastore_categories[".exportFields"][] = "created_at";
$tdatastore_categories[".exportFields"][] = "updated_by";
$tdatastore_categories[".exportFields"][] = "updated_at";

$tdatastore_categories[".importFields"] = array();
$tdatastore_categories[".importFields"][] = "category_id";
$tdatastore_categories[".importFields"][] = "category_name";
$tdatastore_categories[".importFields"][] = "category_initial";
$tdatastore_categories[".importFields"][] = "sort";
$tdatastore_categories[".importFields"][] = "store_editorial_products";
$tdatastore_categories[".importFields"][] = "category_is_active";
$tdatastore_categories[".importFields"][] = "created_at";
$tdatastore_categories[".importFields"][] = "created_by";
$tdatastore_categories[".importFields"][] = "updated_at";
$tdatastore_categories[".importFields"][] = "updated_by";
$tdatastore_categories[".importFields"][] = "is_purchase_D";
$tdatastore_categories[".importFields"][] = "is_purchase_K";
$tdatastore_categories[".importFields"][] = "is_purchase_J";
$tdatastore_categories[".importFields"][] = "is_purchase_B";
$tdatastore_categories[".importFields"][] = "is_purchase_H";
$tdatastore_categories[".importFields"][] = "is_purchase_W";

$tdatastore_categories[".printFields"] = array();
$tdatastore_categories[".printFields"][] = "is_purchase_K";
$tdatastore_categories[".printFields"][] = "is_purchase_B";
$tdatastore_categories[".printFields"][] = "is_purchase_J";
$tdatastore_categories[".printFields"][] = "is_purchase_D";
$tdatastore_categories[".printFields"][] = "is_purchase_W";
$tdatastore_categories[".printFields"][] = "is_purchase_H";
$tdatastore_categories[".printFields"][] = "category_id";
$tdatastore_categories[".printFields"][] = "category_name";
$tdatastore_categories[".printFields"][] = "category_initial";
$tdatastore_categories[".printFields"][] = "sort";
$tdatastore_categories[".printFields"][] = "store_editorial_products";
$tdatastore_categories[".printFields"][] = "category_is_active";
$tdatastore_categories[".printFields"][] = "created_by";
$tdatastore_categories[".printFields"][] = "created_at";
$tdatastore_categories[".printFields"][] = "updated_by";
$tdatastore_categories[".printFields"][] = "updated_at";

//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "store_categories";
	$fdata["Label"] = GetFieldLabel("store_categories","category_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

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




	$tdatastore_categories["category_id"] = $fdata;
//	category_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_name";
	$fdata["GoodName"] = "category_name";
	$fdata["ownerTable"] = "store_categories";
	$fdata["Label"] = GetFieldLabel("store_categories","category_name");
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

		$fdata["strField"] = "category_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_name`";

	
	
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




	$tdatastore_categories["category_name"] = $fdata;
//	category_initial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "category_initial";
	$fdata["GoodName"] = "category_initial";
	$fdata["ownerTable"] = "store_categories";
	$fdata["Label"] = GetFieldLabel("store_categories","category_initial");
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

		$fdata["strField"] = "category_initial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_initial`";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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




	$tdatastore_categories["category_initial"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "store_categories";
	$fdata["Label"] = GetFieldLabel("store_categories","sort");
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




	$tdatastore_categories["sort"] = $fdata;
//	store_editorial_products
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "store_editorial_products";
	$fdata["GoodName"] = "store_editorial_products";
	$fdata["ownerTable"] = "store_categories";
	$fdata["Label"] = GetFieldLabel("store_categories","store_editorial_products");
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

		$fdata["strField"] = "store_editorial_products";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`store_editorial_products`";

	
	
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




	$tdatastore_categories["store_editorial_products"] = $fdata;
//	category_is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "category_is_active";
	$fdata["GoodName"] = "category_is_active";
	$fdata["ownerTable"] = "store_categories";
	$fdata["Label"] = GetFieldLabel("store_categories","category_is_active");
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

		$fdata["strField"] = "category_is_active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_is_active`";

	
	
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




	$tdatastore_categories["category_is_active"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "store_categories";
	$fdata["Label"] = GetFieldLabel("store_categories","created_at");
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




	$tdatastore_categories["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "store_categories";
	$fdata["Label"] = GetFieldLabel("store_categories","created_by");
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




	$tdatastore_categories["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "store_categories";
	$fdata["Label"] = GetFieldLabel("store_categories","updated_at");
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




	$tdatastore_categories["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "store_categories";
	$fdata["Label"] = GetFieldLabel("store_categories","updated_by");
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




	$tdatastore_categories["updated_by"] = $fdata;
//	is_purchase_D
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "is_purchase_D";
	$fdata["GoodName"] = "is_purchase_D";
	$fdata["ownerTable"] = "store_categories";
	$fdata["Label"] = GetFieldLabel("store_categories","is_purchase_D");
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

		$fdata["strField"] = "is_purchase_D";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_purchase_D`";

	
	
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




	$tdatastore_categories["is_purchase_D"] = $fdata;
//	is_purchase_K
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "is_purchase_K";
	$fdata["GoodName"] = "is_purchase_K";
	$fdata["ownerTable"] = "store_categories";
	$fdata["Label"] = GetFieldLabel("store_categories","is_purchase_K");
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

		$fdata["strField"] = "is_purchase_K";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_purchase_K`";

	
	
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




	$tdatastore_categories["is_purchase_K"] = $fdata;
//	is_purchase_J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "is_purchase_J";
	$fdata["GoodName"] = "is_purchase_J";
	$fdata["ownerTable"] = "store_categories";
	$fdata["Label"] = GetFieldLabel("store_categories","is_purchase_J");
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

		$fdata["strField"] = "is_purchase_J";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_purchase_J`";

	
	
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




	$tdatastore_categories["is_purchase_J"] = $fdata;
//	is_purchase_B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "is_purchase_B";
	$fdata["GoodName"] = "is_purchase_B";
	$fdata["ownerTable"] = "store_categories";
	$fdata["Label"] = GetFieldLabel("store_categories","is_purchase_B");
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

		$fdata["strField"] = "is_purchase_B";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_purchase_B`";

	
	
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




	$tdatastore_categories["is_purchase_B"] = $fdata;
//	is_purchase_H
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "is_purchase_H";
	$fdata["GoodName"] = "is_purchase_H";
	$fdata["ownerTable"] = "store_categories";
	$fdata["Label"] = GetFieldLabel("store_categories","is_purchase_H");
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

		$fdata["strField"] = "is_purchase_H";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_purchase_H`";

	
	
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




	$tdatastore_categories["is_purchase_H"] = $fdata;
//	is_purchase_W
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "is_purchase_W";
	$fdata["GoodName"] = "is_purchase_W";
	$fdata["ownerTable"] = "store_categories";
	$fdata["Label"] = GetFieldLabel("store_categories","is_purchase_W");
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

		$fdata["strField"] = "is_purchase_W";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_purchase_W`";

	
	
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




	$tdatastore_categories["is_purchase_W"] = $fdata;


$tables_data["store_categories"]=&$tdatastore_categories;
$field_labels["store_categories"] = &$fieldLabelsstore_categories;
$fieldToolTips["store_categories"] = &$fieldToolTipsstore_categories;
$placeHolders["store_categories"] = &$placeHoldersstore_categories;
$page_titles["store_categories"] = &$pageTitlesstore_categories;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["store_categories"] = array();
//	store_sub_categories
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="store_sub_categories";
		$detailsParam["dOriginalTable"] = "store_sub_categories";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "store_sub_categories";
	$detailsParam["dCaptionTable"] = GetTableCaption("store_sub_categories");
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
		
	$detailsTablesData["store_categories"][$dIndex] = $detailsParam;

	
		$detailsTablesData["store_categories"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["store_categories"][$dIndex]["masterKeys"][]="category_id";

				$detailsTablesData["store_categories"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["store_categories"][$dIndex]["detailKeys"][]="category_id";
//	mst_rakuten_category
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="mst_rakuten_category";
		$detailsParam["dOriginalTable"] = "mst_rakuten_category";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mst_rakuten_category";
	$detailsParam["dCaptionTable"] = GetTableCaption("mst_rakuten_category");
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
		
	$detailsTablesData["store_categories"][$dIndex] = $detailsParam;

	
		$detailsTablesData["store_categories"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["store_categories"][$dIndex]["masterKeys"][]="category_id";

				$detailsTablesData["store_categories"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["store_categories"][$dIndex]["detailKeys"][]="parent_id";
//	mst_saisun_item_by_category
	
	

		$dIndex = 2;
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
		
	$detailsTablesData["store_categories"][$dIndex] = $detailsParam;

	
		$detailsTablesData["store_categories"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["store_categories"][$dIndex]["masterKeys"][]="category_id";

				$detailsTablesData["store_categories"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["store_categories"][$dIndex]["detailKeys"][]="category_id";

// tables which are master tables for current table (detail)
$masterTablesData["store_categories"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_store_categories()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`category_id`,  `category_name`,  `category_initial`,  `sort`,  `store_editorial_products`,  `category_is_active`,  `created_at`,  `created_by`,  `updated_at`,  `updated_by`,  `is_purchase_D`,  `is_purchase_K`,  `is_purchase_J`,  `is_purchase_B`,  `is_purchase_H`,  `is_purchase_W`";
$proto0["m_strFrom"] = "FROM `store_categories`";
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
	"m_strName" => "category_id",
	"m_strTable" => "store_categories",
	"m_srcTableName" => "store_categories"
));

$proto6["m_sql"] = "`category_id`";
$proto6["m_srcTableName"] = "store_categories";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category_name",
	"m_strTable" => "store_categories",
	"m_srcTableName" => "store_categories"
));

$proto8["m_sql"] = "`category_name`";
$proto8["m_srcTableName"] = "store_categories";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "category_initial",
	"m_strTable" => "store_categories",
	"m_srcTableName" => "store_categories"
));

$proto10["m_sql"] = "`category_initial`";
$proto10["m_srcTableName"] = "store_categories";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "store_categories",
	"m_srcTableName" => "store_categories"
));

$proto12["m_sql"] = "`sort`";
$proto12["m_srcTableName"] = "store_categories";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "store_editorial_products",
	"m_strTable" => "store_categories",
	"m_srcTableName" => "store_categories"
));

$proto14["m_sql"] = "`store_editorial_products`";
$proto14["m_srcTableName"] = "store_categories";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "category_is_active",
	"m_strTable" => "store_categories",
	"m_srcTableName" => "store_categories"
));

$proto16["m_sql"] = "`category_is_active`";
$proto16["m_srcTableName"] = "store_categories";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "store_categories",
	"m_srcTableName" => "store_categories"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "store_categories";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "store_categories",
	"m_srcTableName" => "store_categories"
));

$proto20["m_sql"] = "`created_by`";
$proto20["m_srcTableName"] = "store_categories";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "store_categories",
	"m_srcTableName" => "store_categories"
));

$proto22["m_sql"] = "`updated_at`";
$proto22["m_srcTableName"] = "store_categories";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "store_categories",
	"m_srcTableName" => "store_categories"
));

$proto24["m_sql"] = "`updated_by`";
$proto24["m_srcTableName"] = "store_categories";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "is_purchase_D",
	"m_strTable" => "store_categories",
	"m_srcTableName" => "store_categories"
));

$proto26["m_sql"] = "`is_purchase_D`";
$proto26["m_srcTableName"] = "store_categories";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "is_purchase_K",
	"m_strTable" => "store_categories",
	"m_srcTableName" => "store_categories"
));

$proto28["m_sql"] = "`is_purchase_K`";
$proto28["m_srcTableName"] = "store_categories";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "is_purchase_J",
	"m_strTable" => "store_categories",
	"m_srcTableName" => "store_categories"
));

$proto30["m_sql"] = "`is_purchase_J`";
$proto30["m_srcTableName"] = "store_categories";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "is_purchase_B",
	"m_strTable" => "store_categories",
	"m_srcTableName" => "store_categories"
));

$proto32["m_sql"] = "`is_purchase_B`";
$proto32["m_srcTableName"] = "store_categories";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "is_purchase_H",
	"m_strTable" => "store_categories",
	"m_srcTableName" => "store_categories"
));

$proto34["m_sql"] = "`is_purchase_H`";
$proto34["m_srcTableName"] = "store_categories";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "is_purchase_W",
	"m_strTable" => "store_categories",
	"m_srcTableName" => "store_categories"
));

$proto36["m_sql"] = "`is_purchase_W`";
$proto36["m_srcTableName"] = "store_categories";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "store_categories";
$proto39["m_srcTableName"] = "store_categories";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "category_id";
$proto39["m_columns"][] = "category_name";
$proto39["m_columns"][] = "category_initial";
$proto39["m_columns"][] = "sort";
$proto39["m_columns"][] = "store_editorial_products";
$proto39["m_columns"][] = "category_is_active";
$proto39["m_columns"][] = "condition_tmp_id";
$proto39["m_columns"][] = "saisun_tmpl";
$proto39["m_columns"][] = "created_at";
$proto39["m_columns"][] = "created_by";
$proto39["m_columns"][] = "updated_at";
$proto39["m_columns"][] = "updated_by";
$proto39["m_columns"][] = "output_template";
$proto39["m_columns"][] = "jewelry_flag";
$proto39["m_columns"][] = "sales_category";
$proto39["m_columns"][] = "is_purchase_D";
$proto39["m_columns"][] = "is_purchase_K";
$proto39["m_columns"][] = "is_purchase_J";
$proto39["m_columns"][] = "is_purchase_B";
$proto39["m_columns"][] = "is_purchase_H";
$proto39["m_columns"][] = "is_purchase_W";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "`store_categories`";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "store_categories";
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
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "store_categories",
	"m_srcTableName" => "store_categories"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 1;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="store_categories";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_store_categories = createSqlQuery_store_categories();


	
		;

																

$tdatastore_categories[".sqlquery"] = $queryData_store_categories;

$tableEvents["store_categories"] = new eventsBase;
$tdatastore_categories[".hasEvents"] = false;

?>