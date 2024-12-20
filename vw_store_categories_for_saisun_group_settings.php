<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_store_categories_for_saisun_group = array();
	$tdatavw_store_categories_for_saisun_group[".truncateText"] = true;
	$tdatavw_store_categories_for_saisun_group[".NumberOfChars"] = 80;
	$tdatavw_store_categories_for_saisun_group[".ShortName"] = "vw_store_categories_for_saisun_group";
	$tdatavw_store_categories_for_saisun_group[".OwnerID"] = "";
	$tdatavw_store_categories_for_saisun_group[".OriginalTable"] = "vw_store_categories_for_saisun_group";

//	field labels
$fieldLabelsvw_store_categories_for_saisun_group = array();
$fieldToolTipsvw_store_categories_for_saisun_group = array();
$pageTitlesvw_store_categories_for_saisun_group = array();
$placeHoldersvw_store_categories_for_saisun_group = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_store_categories_for_saisun_group["Japanese"] = array();
	$fieldToolTipsvw_store_categories_for_saisun_group["Japanese"] = array();
	$placeHoldersvw_store_categories_for_saisun_group["Japanese"] = array();
	$pageTitlesvw_store_categories_for_saisun_group["Japanese"] = array();
	$fieldLabelsvw_store_categories_for_saisun_group["Japanese"]["category_id"] = "Category Id";
	$fieldToolTipsvw_store_categories_for_saisun_group["Japanese"]["category_id"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["Japanese"]["category_id"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["Japanese"]["category_name"] = "Category Name";
	$fieldToolTipsvw_store_categories_for_saisun_group["Japanese"]["category_name"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["Japanese"]["category_name"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["Japanese"]["category_initial"] = "Category Initial";
	$fieldToolTipsvw_store_categories_for_saisun_group["Japanese"]["category_initial"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["Japanese"]["category_initial"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["Japanese"]["sort"] = "Sort";
	$fieldToolTipsvw_store_categories_for_saisun_group["Japanese"]["sort"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["Japanese"]["sort"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["Japanese"]["store_editorial_products"] = "Store Editorial Products";
	$fieldToolTipsvw_store_categories_for_saisun_group["Japanese"]["store_editorial_products"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["Japanese"]["store_editorial_products"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["Japanese"]["category_is_active"] = "Category Is Active";
	$fieldToolTipsvw_store_categories_for_saisun_group["Japanese"]["category_is_active"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["Japanese"]["category_is_active"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["Japanese"]["condition_tmp_id"] = "Condition Tmp Id";
	$fieldToolTipsvw_store_categories_for_saisun_group["Japanese"]["condition_tmp_id"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["Japanese"]["condition_tmp_id"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["Japanese"]["saisun_tmpl"] = "Saisun Tmpl";
	$fieldToolTipsvw_store_categories_for_saisun_group["Japanese"]["saisun_tmpl"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["Japanese"]["saisun_tmpl"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsvw_store_categories_for_saisun_group["Japanese"]["created_at"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["Japanese"]["created_at"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsvw_store_categories_for_saisun_group["Japanese"]["created_by"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["Japanese"]["created_by"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsvw_store_categories_for_saisun_group["Japanese"]["updated_at"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["Japanese"]["updated_at"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsvw_store_categories_for_saisun_group["Japanese"]["updated_by"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["Japanese"]["updated_by"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["Japanese"]["output_template"] = "Output Template";
	$fieldToolTipsvw_store_categories_for_saisun_group["Japanese"]["output_template"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["Japanese"]["output_template"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["Japanese"]["jewelry_flag"] = "Jewelry Flag";
	$fieldToolTipsvw_store_categories_for_saisun_group["Japanese"]["jewelry_flag"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["Japanese"]["jewelry_flag"] = "";
	if (count($fieldToolTipsvw_store_categories_for_saisun_group["Japanese"]))
		$tdatavw_store_categories_for_saisun_group[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_store_categories_for_saisun_group[""] = array();
	$fieldToolTipsvw_store_categories_for_saisun_group[""] = array();
	$placeHoldersvw_store_categories_for_saisun_group[""] = array();
	$pageTitlesvw_store_categories_for_saisun_group[""] = array();
	$fieldLabelsvw_store_categories_for_saisun_group[""]["category_id"] = "Category Id";
	$fieldToolTipsvw_store_categories_for_saisun_group[""]["category_id"] = "";
	$placeHoldersvw_store_categories_for_saisun_group[""]["category_id"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group[""]["category_name"] = "Category Name";
	$fieldToolTipsvw_store_categories_for_saisun_group[""]["category_name"] = "";
	$placeHoldersvw_store_categories_for_saisun_group[""]["category_name"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group[""]["category_initial"] = "Category Initial";
	$fieldToolTipsvw_store_categories_for_saisun_group[""]["category_initial"] = "";
	$placeHoldersvw_store_categories_for_saisun_group[""]["category_initial"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group[""]["sort"] = "Sort";
	$fieldToolTipsvw_store_categories_for_saisun_group[""]["sort"] = "";
	$placeHoldersvw_store_categories_for_saisun_group[""]["sort"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group[""]["store_editorial_products"] = "Store Editorial Products";
	$fieldToolTipsvw_store_categories_for_saisun_group[""]["store_editorial_products"] = "";
	$placeHoldersvw_store_categories_for_saisun_group[""]["store_editorial_products"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group[""]["category_is_active"] = "Category Is Active";
	$fieldToolTipsvw_store_categories_for_saisun_group[""]["category_is_active"] = "";
	$placeHoldersvw_store_categories_for_saisun_group[""]["category_is_active"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group[""]["condition_tmp_id"] = "Condition Tmp Id";
	$fieldToolTipsvw_store_categories_for_saisun_group[""]["condition_tmp_id"] = "";
	$placeHoldersvw_store_categories_for_saisun_group[""]["condition_tmp_id"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group[""]["saisun_tmpl"] = "Saisun Tmpl";
	$fieldToolTipsvw_store_categories_for_saisun_group[""]["saisun_tmpl"] = "";
	$placeHoldersvw_store_categories_for_saisun_group[""]["saisun_tmpl"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group[""]["created_at"] = "Created At";
	$fieldToolTipsvw_store_categories_for_saisun_group[""]["created_at"] = "";
	$placeHoldersvw_store_categories_for_saisun_group[""]["created_at"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group[""]["created_by"] = "Created By";
	$fieldToolTipsvw_store_categories_for_saisun_group[""]["created_by"] = "";
	$placeHoldersvw_store_categories_for_saisun_group[""]["created_by"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group[""]["updated_at"] = "Updated At";
	$fieldToolTipsvw_store_categories_for_saisun_group[""]["updated_at"] = "";
	$placeHoldersvw_store_categories_for_saisun_group[""]["updated_at"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group[""]["updated_by"] = "Updated By";
	$fieldToolTipsvw_store_categories_for_saisun_group[""]["updated_by"] = "";
	$placeHoldersvw_store_categories_for_saisun_group[""]["updated_by"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group[""]["output_template"] = "Output Template";
	$fieldToolTipsvw_store_categories_for_saisun_group[""]["output_template"] = "";
	$placeHoldersvw_store_categories_for_saisun_group[""]["output_template"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group[""]["jewelry_flag"] = "Jewelry Flag";
	$fieldToolTipsvw_store_categories_for_saisun_group[""]["jewelry_flag"] = "";
	$placeHoldersvw_store_categories_for_saisun_group[""]["jewelry_flag"] = "";
	if (count($fieldToolTipsvw_store_categories_for_saisun_group[""]))
		$tdatavw_store_categories_for_saisun_group[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_store_categories_for_saisun_group["English"] = array();
	$fieldToolTipsvw_store_categories_for_saisun_group["English"] = array();
	$placeHoldersvw_store_categories_for_saisun_group["English"] = array();
	$pageTitlesvw_store_categories_for_saisun_group["English"] = array();
	$fieldLabelsvw_store_categories_for_saisun_group["English"]["category_id"] = "Category Id";
	$fieldToolTipsvw_store_categories_for_saisun_group["English"]["category_id"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["English"]["category_id"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["English"]["category_name"] = "Category Name";
	$fieldToolTipsvw_store_categories_for_saisun_group["English"]["category_name"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["English"]["category_name"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["English"]["category_initial"] = "Category Initial";
	$fieldToolTipsvw_store_categories_for_saisun_group["English"]["category_initial"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["English"]["category_initial"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["English"]["sort"] = "Sort";
	$fieldToolTipsvw_store_categories_for_saisun_group["English"]["sort"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["English"]["sort"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["English"]["store_editorial_products"] = "Store Editorial Products";
	$fieldToolTipsvw_store_categories_for_saisun_group["English"]["store_editorial_products"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["English"]["store_editorial_products"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["English"]["category_is_active"] = "Category Is Active";
	$fieldToolTipsvw_store_categories_for_saisun_group["English"]["category_is_active"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["English"]["category_is_active"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["English"]["condition_tmp_id"] = "Condition Tmp Id";
	$fieldToolTipsvw_store_categories_for_saisun_group["English"]["condition_tmp_id"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["English"]["condition_tmp_id"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["English"]["saisun_tmpl"] = "Saisun Tmpl";
	$fieldToolTipsvw_store_categories_for_saisun_group["English"]["saisun_tmpl"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["English"]["saisun_tmpl"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["English"]["created_at"] = "Created At";
	$fieldToolTipsvw_store_categories_for_saisun_group["English"]["created_at"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["English"]["created_at"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["English"]["created_by"] = "Created By";
	$fieldToolTipsvw_store_categories_for_saisun_group["English"]["created_by"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["English"]["created_by"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["English"]["updated_at"] = "Updated At";
	$fieldToolTipsvw_store_categories_for_saisun_group["English"]["updated_at"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["English"]["updated_at"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["English"]["updated_by"] = "Updated By";
	$fieldToolTipsvw_store_categories_for_saisun_group["English"]["updated_by"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["English"]["updated_by"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["English"]["output_template"] = "Output Template";
	$fieldToolTipsvw_store_categories_for_saisun_group["English"]["output_template"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["English"]["output_template"] = "";
	$fieldLabelsvw_store_categories_for_saisun_group["English"]["jewelry_flag"] = "Jewelry Flag";
	$fieldToolTipsvw_store_categories_for_saisun_group["English"]["jewelry_flag"] = "";
	$placeHoldersvw_store_categories_for_saisun_group["English"]["jewelry_flag"] = "";
	if (count($fieldToolTipsvw_store_categories_for_saisun_group["English"]))
		$tdatavw_store_categories_for_saisun_group[".isUseToolTips"] = true;
}


	$tdatavw_store_categories_for_saisun_group[".NCSearch"] = true;



$tdatavw_store_categories_for_saisun_group[".shortTableName"] = "vw_store_categories_for_saisun_group";
$tdatavw_store_categories_for_saisun_group[".nSecOptions"] = 0;
$tdatavw_store_categories_for_saisun_group[".recsPerRowPrint"] = 1;
$tdatavw_store_categories_for_saisun_group[".mainTableOwnerID"] = "";
$tdatavw_store_categories_for_saisun_group[".moveNext"] = 1;
$tdatavw_store_categories_for_saisun_group[".entityType"] = 0;

$tdatavw_store_categories_for_saisun_group[".strOriginalTableName"] = "vw_store_categories_for_saisun_group";

	



$tdatavw_store_categories_for_saisun_group[".showAddInPopup"] = false;

$tdatavw_store_categories_for_saisun_group[".showEditInPopup"] = false;

$tdatavw_store_categories_for_saisun_group[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_store_categories_for_saisun_group[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_store_categories_for_saisun_group[".fieldsForRegister"] = array();

$tdatavw_store_categories_for_saisun_group[".listAjax"] = false;

	$tdatavw_store_categories_for_saisun_group[".audit"] = false;

	$tdatavw_store_categories_for_saisun_group[".locking"] = false;






$tdatavw_store_categories_for_saisun_group[".reorderRecordsByHeader"] = true;








$tdatavw_store_categories_for_saisun_group[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_store_categories_for_saisun_group[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_store_categories_for_saisun_group[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_store_categories_for_saisun_group[".searchSaving"] = false;
//

$tdatavw_store_categories_for_saisun_group[".showSearchPanel"] = true;
		$tdatavw_store_categories_for_saisun_group[".flexibleSearch"] = true;

$tdatavw_store_categories_for_saisun_group[".isUseAjaxSuggest"] = true;

$tdatavw_store_categories_for_saisun_group[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatavw_store_categories_for_saisun_group[".ajaxCodeSnippetAdded"] = false;

$tdatavw_store_categories_for_saisun_group[".buttonsAdded"] = false;

$tdatavw_store_categories_for_saisun_group[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_store_categories_for_saisun_group[".isUseTimeForSearch"] = false;





$tdatavw_store_categories_for_saisun_group[".allSearchFields"] = array();
$tdatavw_store_categories_for_saisun_group[".filterFields"] = array();
$tdatavw_store_categories_for_saisun_group[".requiredSearchFields"] = array();



$tdatavw_store_categories_for_saisun_group[".googleLikeFields"] = array();
$tdatavw_store_categories_for_saisun_group[".googleLikeFields"][] = "category_id";
$tdatavw_store_categories_for_saisun_group[".googleLikeFields"][] = "category_name";
$tdatavw_store_categories_for_saisun_group[".googleLikeFields"][] = "category_initial";
$tdatavw_store_categories_for_saisun_group[".googleLikeFields"][] = "sort";
$tdatavw_store_categories_for_saisun_group[".googleLikeFields"][] = "store_editorial_products";
$tdatavw_store_categories_for_saisun_group[".googleLikeFields"][] = "category_is_active";
$tdatavw_store_categories_for_saisun_group[".googleLikeFields"][] = "condition_tmp_id";
$tdatavw_store_categories_for_saisun_group[".googleLikeFields"][] = "saisun_tmpl";
$tdatavw_store_categories_for_saisun_group[".googleLikeFields"][] = "created_at";
$tdatavw_store_categories_for_saisun_group[".googleLikeFields"][] = "created_by";
$tdatavw_store_categories_for_saisun_group[".googleLikeFields"][] = "updated_at";
$tdatavw_store_categories_for_saisun_group[".googleLikeFields"][] = "updated_by";
$tdatavw_store_categories_for_saisun_group[".googleLikeFields"][] = "output_template";
$tdatavw_store_categories_for_saisun_group[".googleLikeFields"][] = "jewelry_flag";



$tdatavw_store_categories_for_saisun_group[".tableType"] = "list";

$tdatavw_store_categories_for_saisun_group[".printerPageOrientation"] = 0;
$tdatavw_store_categories_for_saisun_group[".nPrinterPageScale"] = 100;

$tdatavw_store_categories_for_saisun_group[".nPrinterSplitRecords"] = 40;

$tdatavw_store_categories_for_saisun_group[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_store_categories_for_saisun_group[".geocodingEnabled"] = false;





$tdatavw_store_categories_for_saisun_group[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavw_store_categories_for_saisun_group[".pageSize"] = 20;

$tdatavw_store_categories_for_saisun_group[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_store_categories_for_saisun_group[".strOrderBy"] = $tstrOrderBy;

$tdatavw_store_categories_for_saisun_group[".orderindexes"] = array();

$tdatavw_store_categories_for_saisun_group[".sqlHead"] = "SELECT `category_id`,  	`category_name`,  	`category_initial`,  	`sort`,  	`store_editorial_products`,  	`category_is_active`,  	`condition_tmp_id`,  	`saisun_tmpl`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`output_template`,  	`jewelry_flag`";
$tdatavw_store_categories_for_saisun_group[".sqlFrom"] = "FROM `vw_store_categories_for_saisun_group`";
$tdatavw_store_categories_for_saisun_group[".sqlWhereExpr"] = "";
$tdatavw_store_categories_for_saisun_group[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_store_categories_for_saisun_group[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_store_categories_for_saisun_group[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_store_categories_for_saisun_group[".highlightSearchResults"] = true;

$tableKeysvw_store_categories_for_saisun_group = array();
$tdatavw_store_categories_for_saisun_group[".Keys"] = $tableKeysvw_store_categories_for_saisun_group;

$tdatavw_store_categories_for_saisun_group[".listFields"] = array();
$tdatavw_store_categories_for_saisun_group[".listFields"][] = "category_id";
$tdatavw_store_categories_for_saisun_group[".listFields"][] = "category_name";
$tdatavw_store_categories_for_saisun_group[".listFields"][] = "category_initial";
$tdatavw_store_categories_for_saisun_group[".listFields"][] = "sort";
$tdatavw_store_categories_for_saisun_group[".listFields"][] = "store_editorial_products";
$tdatavw_store_categories_for_saisun_group[".listFields"][] = "category_is_active";
$tdatavw_store_categories_for_saisun_group[".listFields"][] = "condition_tmp_id";
$tdatavw_store_categories_for_saisun_group[".listFields"][] = "saisun_tmpl";
$tdatavw_store_categories_for_saisun_group[".listFields"][] = "created_at";
$tdatavw_store_categories_for_saisun_group[".listFields"][] = "created_by";
$tdatavw_store_categories_for_saisun_group[".listFields"][] = "updated_at";
$tdatavw_store_categories_for_saisun_group[".listFields"][] = "updated_by";
$tdatavw_store_categories_for_saisun_group[".listFields"][] = "output_template";
$tdatavw_store_categories_for_saisun_group[".listFields"][] = "jewelry_flag";

$tdatavw_store_categories_for_saisun_group[".hideMobileList"] = array();


$tdatavw_store_categories_for_saisun_group[".viewFields"] = array();
$tdatavw_store_categories_for_saisun_group[".viewFields"][] = "category_id";
$tdatavw_store_categories_for_saisun_group[".viewFields"][] = "category_name";
$tdatavw_store_categories_for_saisun_group[".viewFields"][] = "category_initial";
$tdatavw_store_categories_for_saisun_group[".viewFields"][] = "sort";
$tdatavw_store_categories_for_saisun_group[".viewFields"][] = "store_editorial_products";
$tdatavw_store_categories_for_saisun_group[".viewFields"][] = "category_is_active";
$tdatavw_store_categories_for_saisun_group[".viewFields"][] = "condition_tmp_id";
$tdatavw_store_categories_for_saisun_group[".viewFields"][] = "saisun_tmpl";
$tdatavw_store_categories_for_saisun_group[".viewFields"][] = "created_at";
$tdatavw_store_categories_for_saisun_group[".viewFields"][] = "created_by";
$tdatavw_store_categories_for_saisun_group[".viewFields"][] = "updated_at";
$tdatavw_store_categories_for_saisun_group[".viewFields"][] = "updated_by";
$tdatavw_store_categories_for_saisun_group[".viewFields"][] = "output_template";
$tdatavw_store_categories_for_saisun_group[".viewFields"][] = "jewelry_flag";

$tdatavw_store_categories_for_saisun_group[".addFields"] = array();
$tdatavw_store_categories_for_saisun_group[".addFields"][] = "category_id";
$tdatavw_store_categories_for_saisun_group[".addFields"][] = "category_name";
$tdatavw_store_categories_for_saisun_group[".addFields"][] = "category_initial";
$tdatavw_store_categories_for_saisun_group[".addFields"][] = "sort";
$tdatavw_store_categories_for_saisun_group[".addFields"][] = "store_editorial_products";
$tdatavw_store_categories_for_saisun_group[".addFields"][] = "category_is_active";
$tdatavw_store_categories_for_saisun_group[".addFields"][] = "condition_tmp_id";
$tdatavw_store_categories_for_saisun_group[".addFields"][] = "saisun_tmpl";
$tdatavw_store_categories_for_saisun_group[".addFields"][] = "created_at";
$tdatavw_store_categories_for_saisun_group[".addFields"][] = "created_by";
$tdatavw_store_categories_for_saisun_group[".addFields"][] = "updated_at";
$tdatavw_store_categories_for_saisun_group[".addFields"][] = "updated_by";
$tdatavw_store_categories_for_saisun_group[".addFields"][] = "output_template";
$tdatavw_store_categories_for_saisun_group[".addFields"][] = "jewelry_flag";

$tdatavw_store_categories_for_saisun_group[".masterListFields"] = array();
$tdatavw_store_categories_for_saisun_group[".masterListFields"][] = "category_id";
$tdatavw_store_categories_for_saisun_group[".masterListFields"][] = "category_name";
$tdatavw_store_categories_for_saisun_group[".masterListFields"][] = "category_initial";
$tdatavw_store_categories_for_saisun_group[".masterListFields"][] = "sort";
$tdatavw_store_categories_for_saisun_group[".masterListFields"][] = "store_editorial_products";
$tdatavw_store_categories_for_saisun_group[".masterListFields"][] = "category_is_active";
$tdatavw_store_categories_for_saisun_group[".masterListFields"][] = "condition_tmp_id";
$tdatavw_store_categories_for_saisun_group[".masterListFields"][] = "saisun_tmpl";
$tdatavw_store_categories_for_saisun_group[".masterListFields"][] = "created_at";
$tdatavw_store_categories_for_saisun_group[".masterListFields"][] = "created_by";
$tdatavw_store_categories_for_saisun_group[".masterListFields"][] = "updated_at";
$tdatavw_store_categories_for_saisun_group[".masterListFields"][] = "updated_by";
$tdatavw_store_categories_for_saisun_group[".masterListFields"][] = "output_template";
$tdatavw_store_categories_for_saisun_group[".masterListFields"][] = "jewelry_flag";

$tdatavw_store_categories_for_saisun_group[".inlineAddFields"] = array();
$tdatavw_store_categories_for_saisun_group[".inlineAddFields"][] = "category_id";
$tdatavw_store_categories_for_saisun_group[".inlineAddFields"][] = "category_name";
$tdatavw_store_categories_for_saisun_group[".inlineAddFields"][] = "category_initial";
$tdatavw_store_categories_for_saisun_group[".inlineAddFields"][] = "sort";
$tdatavw_store_categories_for_saisun_group[".inlineAddFields"][] = "store_editorial_products";
$tdatavw_store_categories_for_saisun_group[".inlineAddFields"][] = "category_is_active";
$tdatavw_store_categories_for_saisun_group[".inlineAddFields"][] = "condition_tmp_id";
$tdatavw_store_categories_for_saisun_group[".inlineAddFields"][] = "saisun_tmpl";
$tdatavw_store_categories_for_saisun_group[".inlineAddFields"][] = "created_at";
$tdatavw_store_categories_for_saisun_group[".inlineAddFields"][] = "created_by";
$tdatavw_store_categories_for_saisun_group[".inlineAddFields"][] = "updated_at";
$tdatavw_store_categories_for_saisun_group[".inlineAddFields"][] = "updated_by";
$tdatavw_store_categories_for_saisun_group[".inlineAddFields"][] = "output_template";
$tdatavw_store_categories_for_saisun_group[".inlineAddFields"][] = "jewelry_flag";

$tdatavw_store_categories_for_saisun_group[".editFields"] = array();
$tdatavw_store_categories_for_saisun_group[".editFields"][] = "category_id";
$tdatavw_store_categories_for_saisun_group[".editFields"][] = "category_name";
$tdatavw_store_categories_for_saisun_group[".editFields"][] = "category_initial";
$tdatavw_store_categories_for_saisun_group[".editFields"][] = "sort";
$tdatavw_store_categories_for_saisun_group[".editFields"][] = "store_editorial_products";
$tdatavw_store_categories_for_saisun_group[".editFields"][] = "category_is_active";
$tdatavw_store_categories_for_saisun_group[".editFields"][] = "condition_tmp_id";
$tdatavw_store_categories_for_saisun_group[".editFields"][] = "saisun_tmpl";
$tdatavw_store_categories_for_saisun_group[".editFields"][] = "created_at";
$tdatavw_store_categories_for_saisun_group[".editFields"][] = "created_by";
$tdatavw_store_categories_for_saisun_group[".editFields"][] = "updated_at";
$tdatavw_store_categories_for_saisun_group[".editFields"][] = "updated_by";
$tdatavw_store_categories_for_saisun_group[".editFields"][] = "output_template";
$tdatavw_store_categories_for_saisun_group[".editFields"][] = "jewelry_flag";

$tdatavw_store_categories_for_saisun_group[".inlineEditFields"] = array();
$tdatavw_store_categories_for_saisun_group[".inlineEditFields"][] = "category_id";
$tdatavw_store_categories_for_saisun_group[".inlineEditFields"][] = "category_name";
$tdatavw_store_categories_for_saisun_group[".inlineEditFields"][] = "category_initial";
$tdatavw_store_categories_for_saisun_group[".inlineEditFields"][] = "sort";
$tdatavw_store_categories_for_saisun_group[".inlineEditFields"][] = "store_editorial_products";
$tdatavw_store_categories_for_saisun_group[".inlineEditFields"][] = "category_is_active";
$tdatavw_store_categories_for_saisun_group[".inlineEditFields"][] = "condition_tmp_id";
$tdatavw_store_categories_for_saisun_group[".inlineEditFields"][] = "saisun_tmpl";
$tdatavw_store_categories_for_saisun_group[".inlineEditFields"][] = "created_at";
$tdatavw_store_categories_for_saisun_group[".inlineEditFields"][] = "created_by";
$tdatavw_store_categories_for_saisun_group[".inlineEditFields"][] = "updated_at";
$tdatavw_store_categories_for_saisun_group[".inlineEditFields"][] = "updated_by";
$tdatavw_store_categories_for_saisun_group[".inlineEditFields"][] = "output_template";
$tdatavw_store_categories_for_saisun_group[".inlineEditFields"][] = "jewelry_flag";

$tdatavw_store_categories_for_saisun_group[".updateSelectedFields"] = array();
$tdatavw_store_categories_for_saisun_group[".updateSelectedFields"][] = "category_id";
$tdatavw_store_categories_for_saisun_group[".updateSelectedFields"][] = "category_name";
$tdatavw_store_categories_for_saisun_group[".updateSelectedFields"][] = "category_initial";
$tdatavw_store_categories_for_saisun_group[".updateSelectedFields"][] = "sort";
$tdatavw_store_categories_for_saisun_group[".updateSelectedFields"][] = "store_editorial_products";
$tdatavw_store_categories_for_saisun_group[".updateSelectedFields"][] = "category_is_active";
$tdatavw_store_categories_for_saisun_group[".updateSelectedFields"][] = "condition_tmp_id";
$tdatavw_store_categories_for_saisun_group[".updateSelectedFields"][] = "saisun_tmpl";
$tdatavw_store_categories_for_saisun_group[".updateSelectedFields"][] = "created_at";
$tdatavw_store_categories_for_saisun_group[".updateSelectedFields"][] = "created_by";
$tdatavw_store_categories_for_saisun_group[".updateSelectedFields"][] = "updated_at";
$tdatavw_store_categories_for_saisun_group[".updateSelectedFields"][] = "updated_by";
$tdatavw_store_categories_for_saisun_group[".updateSelectedFields"][] = "output_template";
$tdatavw_store_categories_for_saisun_group[".updateSelectedFields"][] = "jewelry_flag";


$tdatavw_store_categories_for_saisun_group[".exportFields"] = array();
$tdatavw_store_categories_for_saisun_group[".exportFields"][] = "category_id";
$tdatavw_store_categories_for_saisun_group[".exportFields"][] = "category_name";
$tdatavw_store_categories_for_saisun_group[".exportFields"][] = "category_initial";
$tdatavw_store_categories_for_saisun_group[".exportFields"][] = "sort";
$tdatavw_store_categories_for_saisun_group[".exportFields"][] = "store_editorial_products";
$tdatavw_store_categories_for_saisun_group[".exportFields"][] = "category_is_active";
$tdatavw_store_categories_for_saisun_group[".exportFields"][] = "condition_tmp_id";
$tdatavw_store_categories_for_saisun_group[".exportFields"][] = "saisun_tmpl";
$tdatavw_store_categories_for_saisun_group[".exportFields"][] = "created_at";
$tdatavw_store_categories_for_saisun_group[".exportFields"][] = "created_by";
$tdatavw_store_categories_for_saisun_group[".exportFields"][] = "updated_at";
$tdatavw_store_categories_for_saisun_group[".exportFields"][] = "updated_by";
$tdatavw_store_categories_for_saisun_group[".exportFields"][] = "output_template";
$tdatavw_store_categories_for_saisun_group[".exportFields"][] = "jewelry_flag";

$tdatavw_store_categories_for_saisun_group[".importFields"] = array();
$tdatavw_store_categories_for_saisun_group[".importFields"][] = "category_id";
$tdatavw_store_categories_for_saisun_group[".importFields"][] = "category_name";
$tdatavw_store_categories_for_saisun_group[".importFields"][] = "category_initial";
$tdatavw_store_categories_for_saisun_group[".importFields"][] = "sort";
$tdatavw_store_categories_for_saisun_group[".importFields"][] = "store_editorial_products";
$tdatavw_store_categories_for_saisun_group[".importFields"][] = "category_is_active";
$tdatavw_store_categories_for_saisun_group[".importFields"][] = "condition_tmp_id";
$tdatavw_store_categories_for_saisun_group[".importFields"][] = "saisun_tmpl";
$tdatavw_store_categories_for_saisun_group[".importFields"][] = "created_at";
$tdatavw_store_categories_for_saisun_group[".importFields"][] = "created_by";
$tdatavw_store_categories_for_saisun_group[".importFields"][] = "updated_at";
$tdatavw_store_categories_for_saisun_group[".importFields"][] = "updated_by";
$tdatavw_store_categories_for_saisun_group[".importFields"][] = "output_template";
$tdatavw_store_categories_for_saisun_group[".importFields"][] = "jewelry_flag";

$tdatavw_store_categories_for_saisun_group[".printFields"] = array();
$tdatavw_store_categories_for_saisun_group[".printFields"][] = "category_id";
$tdatavw_store_categories_for_saisun_group[".printFields"][] = "category_name";
$tdatavw_store_categories_for_saisun_group[".printFields"][] = "category_initial";
$tdatavw_store_categories_for_saisun_group[".printFields"][] = "sort";
$tdatavw_store_categories_for_saisun_group[".printFields"][] = "store_editorial_products";
$tdatavw_store_categories_for_saisun_group[".printFields"][] = "category_is_active";
$tdatavw_store_categories_for_saisun_group[".printFields"][] = "condition_tmp_id";
$tdatavw_store_categories_for_saisun_group[".printFields"][] = "saisun_tmpl";
$tdatavw_store_categories_for_saisun_group[".printFields"][] = "created_at";
$tdatavw_store_categories_for_saisun_group[".printFields"][] = "created_by";
$tdatavw_store_categories_for_saisun_group[".printFields"][] = "updated_at";
$tdatavw_store_categories_for_saisun_group[".printFields"][] = "updated_by";
$tdatavw_store_categories_for_saisun_group[".printFields"][] = "output_template";
$tdatavw_store_categories_for_saisun_group[".printFields"][] = "jewelry_flag";

//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "vw_store_categories_for_saisun_group";
	$fdata["Label"] = GetFieldLabel("vw_store_categories_for_saisun_group","category_id");
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








	$tdatavw_store_categories_for_saisun_group["category_id"] = $fdata;
//	category_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_name";
	$fdata["GoodName"] = "category_name";
	$fdata["ownerTable"] = "vw_store_categories_for_saisun_group";
	$fdata["Label"] = GetFieldLabel("vw_store_categories_for_saisun_group","category_name");
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








	$tdatavw_store_categories_for_saisun_group["category_name"] = $fdata;
//	category_initial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "category_initial";
	$fdata["GoodName"] = "category_initial";
	$fdata["ownerTable"] = "vw_store_categories_for_saisun_group";
	$fdata["Label"] = GetFieldLabel("vw_store_categories_for_saisun_group","category_initial");
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








	$tdatavw_store_categories_for_saisun_group["category_initial"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "vw_store_categories_for_saisun_group";
	$fdata["Label"] = GetFieldLabel("vw_store_categories_for_saisun_group","sort");
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








	$tdatavw_store_categories_for_saisun_group["sort"] = $fdata;
//	store_editorial_products
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "store_editorial_products";
	$fdata["GoodName"] = "store_editorial_products";
	$fdata["ownerTable"] = "vw_store_categories_for_saisun_group";
	$fdata["Label"] = GetFieldLabel("vw_store_categories_for_saisun_group","store_editorial_products");
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








	$tdatavw_store_categories_for_saisun_group["store_editorial_products"] = $fdata;
//	category_is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "category_is_active";
	$fdata["GoodName"] = "category_is_active";
	$fdata["ownerTable"] = "vw_store_categories_for_saisun_group";
	$fdata["Label"] = GetFieldLabel("vw_store_categories_for_saisun_group","category_is_active");
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








	$tdatavw_store_categories_for_saisun_group["category_is_active"] = $fdata;
//	condition_tmp_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "condition_tmp_id";
	$fdata["GoodName"] = "condition_tmp_id";
	$fdata["ownerTable"] = "vw_store_categories_for_saisun_group";
	$fdata["Label"] = GetFieldLabel("vw_store_categories_for_saisun_group","condition_tmp_id");
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

		$fdata["strField"] = "condition_tmp_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`condition_tmp_id`";

	
	
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








	$tdatavw_store_categories_for_saisun_group["condition_tmp_id"] = $fdata;
//	saisun_tmpl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "saisun_tmpl";
	$fdata["GoodName"] = "saisun_tmpl";
	$fdata["ownerTable"] = "vw_store_categories_for_saisun_group";
	$fdata["Label"] = GetFieldLabel("vw_store_categories_for_saisun_group","saisun_tmpl");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "saisun_tmpl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`saisun_tmpl`";

	
	
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








	$tdatavw_store_categories_for_saisun_group["saisun_tmpl"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "vw_store_categories_for_saisun_group";
	$fdata["Label"] = GetFieldLabel("vw_store_categories_for_saisun_group","created_at");
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








	$tdatavw_store_categories_for_saisun_group["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "vw_store_categories_for_saisun_group";
	$fdata["Label"] = GetFieldLabel("vw_store_categories_for_saisun_group","created_by");
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








	$tdatavw_store_categories_for_saisun_group["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "vw_store_categories_for_saisun_group";
	$fdata["Label"] = GetFieldLabel("vw_store_categories_for_saisun_group","updated_at");
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








	$tdatavw_store_categories_for_saisun_group["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "vw_store_categories_for_saisun_group";
	$fdata["Label"] = GetFieldLabel("vw_store_categories_for_saisun_group","updated_by");
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatavw_store_categories_for_saisun_group["updated_by"] = $fdata;
//	output_template
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "output_template";
	$fdata["GoodName"] = "output_template";
	$fdata["ownerTable"] = "vw_store_categories_for_saisun_group";
	$fdata["Label"] = GetFieldLabel("vw_store_categories_for_saisun_group","output_template");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "output_template";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`output_template`";

	
	
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








	$tdatavw_store_categories_for_saisun_group["output_template"] = $fdata;
//	jewelry_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "jewelry_flag";
	$fdata["GoodName"] = "jewelry_flag";
	$fdata["ownerTable"] = "vw_store_categories_for_saisun_group";
	$fdata["Label"] = GetFieldLabel("vw_store_categories_for_saisun_group","jewelry_flag");
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

		$fdata["strField"] = "jewelry_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`jewelry_flag`";

	
	
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








	$tdatavw_store_categories_for_saisun_group["jewelry_flag"] = $fdata;


$tables_data["vw_store_categories_for_saisun_group"]=&$tdatavw_store_categories_for_saisun_group;
$field_labels["vw_store_categories_for_saisun_group"] = &$fieldLabelsvw_store_categories_for_saisun_group;
$fieldToolTips["vw_store_categories_for_saisun_group"] = &$fieldToolTipsvw_store_categories_for_saisun_group;
$placeHolders["vw_store_categories_for_saisun_group"] = &$placeHoldersvw_store_categories_for_saisun_group;
$page_titles["vw_store_categories_for_saisun_group"] = &$pageTitlesvw_store_categories_for_saisun_group;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_store_categories_for_saisun_group"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_store_categories_for_saisun_group"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_store_categories_for_saisun_group()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`category_id`,  	`category_name`,  	`category_initial`,  	`sort`,  	`store_editorial_products`,  	`category_is_active`,  	`condition_tmp_id`,  	`saisun_tmpl`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`output_template`,  	`jewelry_flag`";
$proto0["m_strFrom"] = "FROM `vw_store_categories_for_saisun_group`";
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
	"m_strName" => "category_id",
	"m_strTable" => "vw_store_categories_for_saisun_group",
	"m_srcTableName" => "vw_store_categories_for_saisun_group"
));

$proto6["m_sql"] = "`category_id`";
$proto6["m_srcTableName"] = "vw_store_categories_for_saisun_group";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category_name",
	"m_strTable" => "vw_store_categories_for_saisun_group",
	"m_srcTableName" => "vw_store_categories_for_saisun_group"
));

$proto8["m_sql"] = "`category_name`";
$proto8["m_srcTableName"] = "vw_store_categories_for_saisun_group";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "category_initial",
	"m_strTable" => "vw_store_categories_for_saisun_group",
	"m_srcTableName" => "vw_store_categories_for_saisun_group"
));

$proto10["m_sql"] = "`category_initial`";
$proto10["m_srcTableName"] = "vw_store_categories_for_saisun_group";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "vw_store_categories_for_saisun_group",
	"m_srcTableName" => "vw_store_categories_for_saisun_group"
));

$proto12["m_sql"] = "`sort`";
$proto12["m_srcTableName"] = "vw_store_categories_for_saisun_group";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "store_editorial_products",
	"m_strTable" => "vw_store_categories_for_saisun_group",
	"m_srcTableName" => "vw_store_categories_for_saisun_group"
));

$proto14["m_sql"] = "`store_editorial_products`";
$proto14["m_srcTableName"] = "vw_store_categories_for_saisun_group";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "category_is_active",
	"m_strTable" => "vw_store_categories_for_saisun_group",
	"m_srcTableName" => "vw_store_categories_for_saisun_group"
));

$proto16["m_sql"] = "`category_is_active`";
$proto16["m_srcTableName"] = "vw_store_categories_for_saisun_group";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "condition_tmp_id",
	"m_strTable" => "vw_store_categories_for_saisun_group",
	"m_srcTableName" => "vw_store_categories_for_saisun_group"
));

$proto18["m_sql"] = "`condition_tmp_id`";
$proto18["m_srcTableName"] = "vw_store_categories_for_saisun_group";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_tmpl",
	"m_strTable" => "vw_store_categories_for_saisun_group",
	"m_srcTableName" => "vw_store_categories_for_saisun_group"
));

$proto20["m_sql"] = "`saisun_tmpl`";
$proto20["m_srcTableName"] = "vw_store_categories_for_saisun_group";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "vw_store_categories_for_saisun_group",
	"m_srcTableName" => "vw_store_categories_for_saisun_group"
));

$proto22["m_sql"] = "`created_at`";
$proto22["m_srcTableName"] = "vw_store_categories_for_saisun_group";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "vw_store_categories_for_saisun_group",
	"m_srcTableName" => "vw_store_categories_for_saisun_group"
));

$proto24["m_sql"] = "`created_by`";
$proto24["m_srcTableName"] = "vw_store_categories_for_saisun_group";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "vw_store_categories_for_saisun_group",
	"m_srcTableName" => "vw_store_categories_for_saisun_group"
));

$proto26["m_sql"] = "`updated_at`";
$proto26["m_srcTableName"] = "vw_store_categories_for_saisun_group";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "vw_store_categories_for_saisun_group",
	"m_srcTableName" => "vw_store_categories_for_saisun_group"
));

$proto28["m_sql"] = "`updated_by`";
$proto28["m_srcTableName"] = "vw_store_categories_for_saisun_group";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "output_template",
	"m_strTable" => "vw_store_categories_for_saisun_group",
	"m_srcTableName" => "vw_store_categories_for_saisun_group"
));

$proto30["m_sql"] = "`output_template`";
$proto30["m_srcTableName"] = "vw_store_categories_for_saisun_group";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "jewelry_flag",
	"m_strTable" => "vw_store_categories_for_saisun_group",
	"m_srcTableName" => "vw_store_categories_for_saisun_group"
));

$proto32["m_sql"] = "`jewelry_flag`";
$proto32["m_srcTableName"] = "vw_store_categories_for_saisun_group";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "vw_store_categories_for_saisun_group";
$proto35["m_srcTableName"] = "vw_store_categories_for_saisun_group";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "category_id";
$proto35["m_columns"][] = "category_name";
$proto35["m_columns"][] = "category_initial";
$proto35["m_columns"][] = "sort";
$proto35["m_columns"][] = "store_editorial_products";
$proto35["m_columns"][] = "category_is_active";
$proto35["m_columns"][] = "condition_tmp_id";
$proto35["m_columns"][] = "saisun_tmpl";
$proto35["m_columns"][] = "created_at";
$proto35["m_columns"][] = "created_by";
$proto35["m_columns"][] = "updated_at";
$proto35["m_columns"][] = "updated_by";
$proto35["m_columns"][] = "output_template";
$proto35["m_columns"][] = "jewelry_flag";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "`vw_store_categories_for_saisun_group`";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "vw_store_categories_for_saisun_group";
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
$proto0["m_srcTableName"]="vw_store_categories_for_saisun_group";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_store_categories_for_saisun_group = createSqlQuery_vw_store_categories_for_saisun_group();


	
		;

														

$tdatavw_store_categories_for_saisun_group[".sqlquery"] = $queryData_vw_store_categories_for_saisun_group;

$tableEvents["vw_store_categories_for_saisun_group"] = new eventsBase;
$tdatavw_store_categories_for_saisun_group[".hasEvents"] = false;

?>