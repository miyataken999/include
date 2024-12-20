<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_finish_terms = array();
	$tdatamst_finish_terms[".truncateText"] = true;
	$tdatamst_finish_terms[".NumberOfChars"] = 80;
	$tdatamst_finish_terms[".ShortName"] = "mst_finish_terms";
	$tdatamst_finish_terms[".OwnerID"] = "";
	$tdatamst_finish_terms[".OriginalTable"] = "mst_finish_terms";

//	field labels
$fieldLabelsmst_finish_terms = array();
$fieldToolTipsmst_finish_terms = array();
$pageTitlesmst_finish_terms = array();
$placeHoldersmst_finish_terms = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_finish_terms["Japanese"] = array();
	$fieldToolTipsmst_finish_terms["Japanese"] = array();
	$placeHoldersmst_finish_terms["Japanese"] = array();
	$pageTitlesmst_finish_terms["Japanese"] = array();
	$fieldLabelsmst_finish_terms["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_finish_terms["Japanese"]["id"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["id"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["mst_Finish_id"] = "仕上";
	$fieldToolTipsmst_finish_terms["Japanese"]["mst_Finish_id"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["mst_Finish_id"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_finish_terms["Japanese"]["category_id"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["category_id"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["parent_stone_lower_limit"] = "親石下限";
	$fieldToolTipsmst_finish_terms["Japanese"]["parent_stone_lower_limit"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["parent_stone_lower_limit"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["cost"] = "コスト";
	$fieldToolTipsmst_finish_terms["Japanese"]["cost"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["cost"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsmst_finish_terms["Japanese"]["created_by"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["created_by"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsmst_finish_terms["Japanese"]["created_at"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["created_at"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsmst_finish_terms["Japanese"]["updated_by"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["updated_by"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsmst_finish_terms["Japanese"]["updated_at"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["updated_at"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["Discrimination"] = "鑑別";
	$fieldToolTipsmst_finish_terms["Japanese"]["Discrimination"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["Discrimination"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["colorstone_id"] = "カラーストーン";
	$fieldToolTipsmst_finish_terms["Japanese"]["colorstone_id"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["colorstone_id"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["shape"] = "シェイプ";
	$fieldToolTipsmst_finish_terms["Japanese"]["shape"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["shape"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["cutting_syle"] = "カッティングスタイル";
	$fieldToolTipsmst_finish_terms["Japanese"]["cutting_syle"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["cutting_syle"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["DA_CUT"] = "カット";
	$fieldToolTipsmst_finish_terms["Japanese"]["DA_CUT"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["DA_CUT"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["status"] = "商品状態";
	$fieldToolTipsmst_finish_terms["Japanese"]["status"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["status"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["finish_sort"] = "仕上げソート";
	$fieldToolTipsmst_finish_terms["Japanese"]["finish_sort"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["finish_sort"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["discrimination_sort"] = "鑑別ソート";
	$fieldToolTipsmst_finish_terms["Japanese"]["discrimination_sort"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["discrimination_sort"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["effect"] = "効果";
	$fieldToolTipsmst_finish_terms["Japanese"]["effect"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["effect"] = "";
	$fieldLabelsmst_finish_terms["Japanese"]["cost_category"] = "コストカテゴリ";
	$fieldToolTipsmst_finish_terms["Japanese"]["cost_category"] = "";
	$placeHoldersmst_finish_terms["Japanese"]["cost_category"] = "";
	if (count($fieldToolTipsmst_finish_terms["Japanese"]))
		$tdatamst_finish_terms[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_finish_terms[""] = array();
	$fieldToolTipsmst_finish_terms[""] = array();
	$placeHoldersmst_finish_terms[""] = array();
	$pageTitlesmst_finish_terms[""] = array();
	$fieldLabelsmst_finish_terms[""]["id"] = "Id";
	$fieldToolTipsmst_finish_terms[""]["id"] = "";
	$placeHoldersmst_finish_terms[""]["id"] = "";
	$fieldLabelsmst_finish_terms[""]["mst_Finish_id"] = "Mst Finish Id";
	$fieldToolTipsmst_finish_terms[""]["mst_Finish_id"] = "";
	$placeHoldersmst_finish_terms[""]["mst_Finish_id"] = "";
	$fieldLabelsmst_finish_terms[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_finish_terms[""]["category_id"] = "";
	$placeHoldersmst_finish_terms[""]["category_id"] = "";
	$fieldLabelsmst_finish_terms[""]["parent_stone_lower_limit"] = "Parent Stone Lower Limit";
	$fieldToolTipsmst_finish_terms[""]["parent_stone_lower_limit"] = "";
	$placeHoldersmst_finish_terms[""]["parent_stone_lower_limit"] = "";
	$fieldLabelsmst_finish_terms[""]["cost"] = "Cost";
	$fieldToolTipsmst_finish_terms[""]["cost"] = "";
	$placeHoldersmst_finish_terms[""]["cost"] = "";
	$fieldLabelsmst_finish_terms[""]["created_by"] = "Created By";
	$fieldToolTipsmst_finish_terms[""]["created_by"] = "";
	$placeHoldersmst_finish_terms[""]["created_by"] = "";
	$fieldLabelsmst_finish_terms[""]["created_at"] = "Created At";
	$fieldToolTipsmst_finish_terms[""]["created_at"] = "";
	$placeHoldersmst_finish_terms[""]["created_at"] = "";
	$fieldLabelsmst_finish_terms[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_finish_terms[""]["updated_by"] = "";
	$placeHoldersmst_finish_terms[""]["updated_by"] = "";
	$fieldLabelsmst_finish_terms[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_finish_terms[""]["updated_at"] = "";
	$placeHoldersmst_finish_terms[""]["updated_at"] = "";
	$fieldLabelsmst_finish_terms[""]["Discrimination"] = "Discrimination";
	$fieldToolTipsmst_finish_terms[""]["Discrimination"] = "";
	$placeHoldersmst_finish_terms[""]["Discrimination"] = "";
	$fieldLabelsmst_finish_terms[""]["colorstone_id"] = "Colorstone Id";
	$fieldToolTipsmst_finish_terms[""]["colorstone_id"] = "";
	$placeHoldersmst_finish_terms[""]["colorstone_id"] = "";
	$fieldLabelsmst_finish_terms[""]["shape"] = "Shape";
	$fieldToolTipsmst_finish_terms[""]["shape"] = "";
	$placeHoldersmst_finish_terms[""]["shape"] = "";
	$fieldLabelsmst_finish_terms[""]["cutting_syle"] = "Cutting Syle";
	$fieldToolTipsmst_finish_terms[""]["cutting_syle"] = "";
	$placeHoldersmst_finish_terms[""]["cutting_syle"] = "";
	$fieldLabelsmst_finish_terms[""]["DA_CUT"] = "DA CUT";
	$fieldToolTipsmst_finish_terms[""]["DA_CUT"] = "";
	$placeHoldersmst_finish_terms[""]["DA_CUT"] = "";
	$fieldLabelsmst_finish_terms[""]["status"] = "Status";
	$fieldToolTipsmst_finish_terms[""]["status"] = "";
	$placeHoldersmst_finish_terms[""]["status"] = "";
	$fieldLabelsmst_finish_terms[""]["finish_sort"] = "Finish Sort";
	$fieldToolTipsmst_finish_terms[""]["finish_sort"] = "";
	$placeHoldersmst_finish_terms[""]["finish_sort"] = "";
	$fieldLabelsmst_finish_terms[""]["discrimination_sort"] = "Discrimination Sort";
	$fieldToolTipsmst_finish_terms[""]["discrimination_sort"] = "";
	$placeHoldersmst_finish_terms[""]["discrimination_sort"] = "";
	$fieldLabelsmst_finish_terms[""]["effect"] = "Effect";
	$fieldToolTipsmst_finish_terms[""]["effect"] = "";
	$placeHoldersmst_finish_terms[""]["effect"] = "";
	$fieldLabelsmst_finish_terms[""]["cost_category"] = "Cost Category";
	$fieldToolTipsmst_finish_terms[""]["cost_category"] = "";
	$placeHoldersmst_finish_terms[""]["cost_category"] = "";
	if (count($fieldToolTipsmst_finish_terms[""]))
		$tdatamst_finish_terms[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_finish_terms["English"] = array();
	$fieldToolTipsmst_finish_terms["English"] = array();
	$placeHoldersmst_finish_terms["English"] = array();
	$pageTitlesmst_finish_terms["English"] = array();
	$fieldLabelsmst_finish_terms["English"]["id"] = "Id";
	$fieldToolTipsmst_finish_terms["English"]["id"] = "";
	$placeHoldersmst_finish_terms["English"]["id"] = "";
	$fieldLabelsmst_finish_terms["English"]["mst_Finish_id"] = "Mst Finish Id";
	$fieldToolTipsmst_finish_terms["English"]["mst_Finish_id"] = "";
	$placeHoldersmst_finish_terms["English"]["mst_Finish_id"] = "";
	$fieldLabelsmst_finish_terms["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_finish_terms["English"]["category_id"] = "";
	$placeHoldersmst_finish_terms["English"]["category_id"] = "";
	$fieldLabelsmst_finish_terms["English"]["parent_stone_lower_limit"] = "Parent Stone Lower Limit";
	$fieldToolTipsmst_finish_terms["English"]["parent_stone_lower_limit"] = "";
	$placeHoldersmst_finish_terms["English"]["parent_stone_lower_limit"] = "";
	$fieldLabelsmst_finish_terms["English"]["cost"] = "Cost";
	$fieldToolTipsmst_finish_terms["English"]["cost"] = "";
	$placeHoldersmst_finish_terms["English"]["cost"] = "";
	$fieldLabelsmst_finish_terms["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_finish_terms["English"]["created_by"] = "";
	$placeHoldersmst_finish_terms["English"]["created_by"] = "";
	$fieldLabelsmst_finish_terms["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_finish_terms["English"]["created_at"] = "";
	$placeHoldersmst_finish_terms["English"]["created_at"] = "";
	$fieldLabelsmst_finish_terms["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_finish_terms["English"]["updated_by"] = "";
	$placeHoldersmst_finish_terms["English"]["updated_by"] = "";
	$fieldLabelsmst_finish_terms["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_finish_terms["English"]["updated_at"] = "";
	$placeHoldersmst_finish_terms["English"]["updated_at"] = "";
	$fieldLabelsmst_finish_terms["English"]["Discrimination"] = "Discrimination";
	$fieldToolTipsmst_finish_terms["English"]["Discrimination"] = "";
	$placeHoldersmst_finish_terms["English"]["Discrimination"] = "";
	$fieldLabelsmst_finish_terms["English"]["colorstone_id"] = "Colorstone Id";
	$fieldToolTipsmst_finish_terms["English"]["colorstone_id"] = "";
	$placeHoldersmst_finish_terms["English"]["colorstone_id"] = "";
	$fieldLabelsmst_finish_terms["English"]["shape"] = "Shape";
	$fieldToolTipsmst_finish_terms["English"]["shape"] = "";
	$placeHoldersmst_finish_terms["English"]["shape"] = "";
	$fieldLabelsmst_finish_terms["English"]["cutting_syle"] = "Cutting Syle";
	$fieldToolTipsmst_finish_terms["English"]["cutting_syle"] = "";
	$placeHoldersmst_finish_terms["English"]["cutting_syle"] = "";
	$fieldLabelsmst_finish_terms["English"]["DA_CUT"] = "DA CUT";
	$fieldToolTipsmst_finish_terms["English"]["DA_CUT"] = "";
	$placeHoldersmst_finish_terms["English"]["DA_CUT"] = "";
	$fieldLabelsmst_finish_terms["English"]["status"] = "Status";
	$fieldToolTipsmst_finish_terms["English"]["status"] = "";
	$placeHoldersmst_finish_terms["English"]["status"] = "";
	$fieldLabelsmst_finish_terms["English"]["finish_sort"] = "Finish Sort";
	$fieldToolTipsmst_finish_terms["English"]["finish_sort"] = "";
	$placeHoldersmst_finish_terms["English"]["finish_sort"] = "";
	$fieldLabelsmst_finish_terms["English"]["discrimination_sort"] = "Discrimination Sort";
	$fieldToolTipsmst_finish_terms["English"]["discrimination_sort"] = "";
	$placeHoldersmst_finish_terms["English"]["discrimination_sort"] = "";
	$fieldLabelsmst_finish_terms["English"]["effect"] = "Effect";
	$fieldToolTipsmst_finish_terms["English"]["effect"] = "";
	$placeHoldersmst_finish_terms["English"]["effect"] = "";
	$fieldLabelsmst_finish_terms["English"]["cost_category"] = "Cost Category";
	$fieldToolTipsmst_finish_terms["English"]["cost_category"] = "";
	$placeHoldersmst_finish_terms["English"]["cost_category"] = "";
	if (count($fieldToolTipsmst_finish_terms["English"]))
		$tdatamst_finish_terms[".isUseToolTips"] = true;
}


	$tdatamst_finish_terms[".NCSearch"] = true;



$tdatamst_finish_terms[".shortTableName"] = "mst_finish_terms";
$tdatamst_finish_terms[".nSecOptions"] = 0;
$tdatamst_finish_terms[".recsPerRowPrint"] = 1;
$tdatamst_finish_terms[".mainTableOwnerID"] = "";
$tdatamst_finish_terms[".moveNext"] = 1;
$tdatamst_finish_terms[".entityType"] = 0;

$tdatamst_finish_terms[".strOriginalTableName"] = "mst_finish_terms";

	



$tdatamst_finish_terms[".showAddInPopup"] = false;

$tdatamst_finish_terms[".showEditInPopup"] = false;

$tdatamst_finish_terms[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_finish_terms[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_finish_terms[".fieldsForRegister"] = array();

$tdatamst_finish_terms[".listAjax"] = false;

	$tdatamst_finish_terms[".audit"] = true;

	$tdatamst_finish_terms[".locking"] = false;



$tdatamst_finish_terms[".list"] = true;

$tdatamst_finish_terms[".inlineEdit"] = true;


$tdatamst_finish_terms[".reorderRecordsByHeader"] = true;



$tdatamst_finish_terms[".inlineAdd"] = true;

$tdatamst_finish_terms[".import"] = true;

$tdatamst_finish_terms[".exportTo"] = true;


$tdatamst_finish_terms[".delete"] = true;

$tdatamst_finish_terms[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_finish_terms[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_finish_terms[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_finish_terms[".searchSaving"] = false;
//

$tdatamst_finish_terms[".showSearchPanel"] = true;
		$tdatamst_finish_terms[".flexibleSearch"] = true;

$tdatamst_finish_terms[".isUseAjaxSuggest"] = true;

$tdatamst_finish_terms[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_finish_terms[".ajaxCodeSnippetAdded"] = false;

$tdatamst_finish_terms[".buttonsAdded"] = false;

$tdatamst_finish_terms[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_finish_terms[".isUseTimeForSearch"] = false;





$tdatamst_finish_terms[".allSearchFields"] = array();
$tdatamst_finish_terms[".filterFields"] = array();
$tdatamst_finish_terms[".requiredSearchFields"] = array();

$tdatamst_finish_terms[".allSearchFields"][] = "id";
	$tdatamst_finish_terms[".allSearchFields"][] = "mst_Finish_id";
	$tdatamst_finish_terms[".allSearchFields"][] = "category_id";
	$tdatamst_finish_terms[".allSearchFields"][] = "parent_stone_lower_limit";
	$tdatamst_finish_terms[".allSearchFields"][] = "cost";
	$tdatamst_finish_terms[".allSearchFields"][] = "created_by";
	$tdatamst_finish_terms[".allSearchFields"][] = "created_at";
	$tdatamst_finish_terms[".allSearchFields"][] = "updated_by";
	$tdatamst_finish_terms[".allSearchFields"][] = "updated_at";
	$tdatamst_finish_terms[".allSearchFields"][] = "Discrimination";
	$tdatamst_finish_terms[".allSearchFields"][] = "colorstone_id";
	$tdatamst_finish_terms[".allSearchFields"][] = "shape";
	$tdatamst_finish_terms[".allSearchFields"][] = "cutting_syle";
	$tdatamst_finish_terms[".allSearchFields"][] = "DA_CUT";
	$tdatamst_finish_terms[".allSearchFields"][] = "status";
	$tdatamst_finish_terms[".allSearchFields"][] = "finish_sort";
	$tdatamst_finish_terms[".allSearchFields"][] = "discrimination_sort";
	$tdatamst_finish_terms[".allSearchFields"][] = "effect";
	$tdatamst_finish_terms[".allSearchFields"][] = "cost_category";
	

$tdatamst_finish_terms[".googleLikeFields"] = array();
$tdatamst_finish_terms[".googleLikeFields"][] = "id";
$tdatamst_finish_terms[".googleLikeFields"][] = "mst_Finish_id";
$tdatamst_finish_terms[".googleLikeFields"][] = "category_id";
$tdatamst_finish_terms[".googleLikeFields"][] = "parent_stone_lower_limit";
$tdatamst_finish_terms[".googleLikeFields"][] = "cost";
$tdatamst_finish_terms[".googleLikeFields"][] = "created_by";
$tdatamst_finish_terms[".googleLikeFields"][] = "created_at";
$tdatamst_finish_terms[".googleLikeFields"][] = "updated_by";
$tdatamst_finish_terms[".googleLikeFields"][] = "updated_at";
$tdatamst_finish_terms[".googleLikeFields"][] = "Discrimination";
$tdatamst_finish_terms[".googleLikeFields"][] = "colorstone_id";
$tdatamst_finish_terms[".googleLikeFields"][] = "shape";
$tdatamst_finish_terms[".googleLikeFields"][] = "cutting_syle";
$tdatamst_finish_terms[".googleLikeFields"][] = "DA_CUT";
$tdatamst_finish_terms[".googleLikeFields"][] = "status";
$tdatamst_finish_terms[".googleLikeFields"][] = "finish_sort";
$tdatamst_finish_terms[".googleLikeFields"][] = "discrimination_sort";
$tdatamst_finish_terms[".googleLikeFields"][] = "effect";
$tdatamst_finish_terms[".googleLikeFields"][] = "cost_category";

$tdatamst_finish_terms[".panelSearchFields"] = array();
$tdatamst_finish_terms[".searchPanelOptions"] = array();
$tdatamst_finish_terms[".panelSearchFields"][] = "mst_Finish_id";
	$tdatamst_finish_terms[".panelSearchFields"][] = "Discrimination";
	$tdatamst_finish_terms[".panelSearchFields"][] = "cost_category";
	
$tdatamst_finish_terms[".advSearchFields"] = array();
$tdatamst_finish_terms[".advSearchFields"][] = "id";
$tdatamst_finish_terms[".advSearchFields"][] = "mst_Finish_id";
$tdatamst_finish_terms[".advSearchFields"][] = "category_id";
$tdatamst_finish_terms[".advSearchFields"][] = "parent_stone_lower_limit";
$tdatamst_finish_terms[".advSearchFields"][] = "cost";
$tdatamst_finish_terms[".advSearchFields"][] = "created_by";
$tdatamst_finish_terms[".advSearchFields"][] = "created_at";
$tdatamst_finish_terms[".advSearchFields"][] = "updated_by";
$tdatamst_finish_terms[".advSearchFields"][] = "updated_at";
$tdatamst_finish_terms[".advSearchFields"][] = "Discrimination";
$tdatamst_finish_terms[".advSearchFields"][] = "colorstone_id";
$tdatamst_finish_terms[".advSearchFields"][] = "shape";
$tdatamst_finish_terms[".advSearchFields"][] = "cutting_syle";
$tdatamst_finish_terms[".advSearchFields"][] = "DA_CUT";
$tdatamst_finish_terms[".advSearchFields"][] = "status";
$tdatamst_finish_terms[".advSearchFields"][] = "finish_sort";
$tdatamst_finish_terms[".advSearchFields"][] = "discrimination_sort";
$tdatamst_finish_terms[".advSearchFields"][] = "effect";
$tdatamst_finish_terms[".advSearchFields"][] = "cost_category";

$tdatamst_finish_terms[".tableType"] = "list";

$tdatamst_finish_terms[".printerPageOrientation"] = 0;
$tdatamst_finish_terms[".nPrinterPageScale"] = 100;

$tdatamst_finish_terms[".nPrinterSplitRecords"] = 40;

$tdatamst_finish_terms[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_finish_terms[".geocodingEnabled"] = false;





$tdatamst_finish_terms[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_finish_terms[".pageSize"] = 20;

$tdatamst_finish_terms[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_finish_terms[".strOrderBy"] = $tstrOrderBy;

$tdatamst_finish_terms[".orderindexes"] = array();

$tdatamst_finish_terms[".sqlHead"] = "SELECT `id`,  	`mst_Finish_id`,  	`category_id`,  	`parent_stone_lower_limit`,  	`cost`,  	`created_by`,  	`created_at`,  	`updated_by`,  	`updated_at`,  	`Discrimination`,  	`colorstone_id`,  	`shape`,  	`cutting_syle`,  	`DA_CUT`,  	`status`,  	`finish_sort`,  	`discrimination_sort`,  	`effect`,  	`cost_category`";
$tdatamst_finish_terms[".sqlFrom"] = "FROM `mst_finish_terms`";
$tdatamst_finish_terms[".sqlWhereExpr"] = "";
$tdatamst_finish_terms[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_finish_terms[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_finish_terms[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_finish_terms[".highlightSearchResults"] = true;

$tableKeysmst_finish_terms = array();
$tableKeysmst_finish_terms[] = "id";
$tdatamst_finish_terms[".Keys"] = $tableKeysmst_finish_terms;

$tdatamst_finish_terms[".listFields"] = array();
$tdatamst_finish_terms[".listFields"][] = "cost_category";
$tdatamst_finish_terms[".listFields"][] = "finish_sort";
$tdatamst_finish_terms[".listFields"][] = "discrimination_sort";
$tdatamst_finish_terms[".listFields"][] = "id";
$tdatamst_finish_terms[".listFields"][] = "mst_Finish_id";
$tdatamst_finish_terms[".listFields"][] = "Discrimination";
$tdatamst_finish_terms[".listFields"][] = "category_id";
$tdatamst_finish_terms[".listFields"][] = "colorstone_id";
$tdatamst_finish_terms[".listFields"][] = "shape";
$tdatamst_finish_terms[".listFields"][] = "cutting_syle";
$tdatamst_finish_terms[".listFields"][] = "DA_CUT";
$tdatamst_finish_terms[".listFields"][] = "effect";
$tdatamst_finish_terms[".listFields"][] = "status";
$tdatamst_finish_terms[".listFields"][] = "parent_stone_lower_limit";
$tdatamst_finish_terms[".listFields"][] = "cost";
$tdatamst_finish_terms[".listFields"][] = "created_by";
$tdatamst_finish_terms[".listFields"][] = "created_at";
$tdatamst_finish_terms[".listFields"][] = "updated_by";
$tdatamst_finish_terms[".listFields"][] = "updated_at";

$tdatamst_finish_terms[".hideMobileList"] = array();


$tdatamst_finish_terms[".viewFields"] = array();

$tdatamst_finish_terms[".addFields"] = array();

$tdatamst_finish_terms[".masterListFields"] = array();
$tdatamst_finish_terms[".masterListFields"][] = "id";
$tdatamst_finish_terms[".masterListFields"][] = "mst_Finish_id";
$tdatamst_finish_terms[".masterListFields"][] = "category_id";
$tdatamst_finish_terms[".masterListFields"][] = "parent_stone_lower_limit";
$tdatamst_finish_terms[".masterListFields"][] = "cost";
$tdatamst_finish_terms[".masterListFields"][] = "created_by";
$tdatamst_finish_terms[".masterListFields"][] = "created_at";
$tdatamst_finish_terms[".masterListFields"][] = "updated_by";
$tdatamst_finish_terms[".masterListFields"][] = "updated_at";
$tdatamst_finish_terms[".masterListFields"][] = "Discrimination";
$tdatamst_finish_terms[".masterListFields"][] = "colorstone_id";
$tdatamst_finish_terms[".masterListFields"][] = "shape";
$tdatamst_finish_terms[".masterListFields"][] = "cutting_syle";
$tdatamst_finish_terms[".masterListFields"][] = "DA_CUT";
$tdatamst_finish_terms[".masterListFields"][] = "status";
$tdatamst_finish_terms[".masterListFields"][] = "finish_sort";
$tdatamst_finish_terms[".masterListFields"][] = "discrimination_sort";
$tdatamst_finish_terms[".masterListFields"][] = "effect";
$tdatamst_finish_terms[".masterListFields"][] = "cost_category";

$tdatamst_finish_terms[".inlineAddFields"] = array();
$tdatamst_finish_terms[".inlineAddFields"][] = "cost_category";
$tdatamst_finish_terms[".inlineAddFields"][] = "finish_sort";
$tdatamst_finish_terms[".inlineAddFields"][] = "discrimination_sort";
$tdatamst_finish_terms[".inlineAddFields"][] = "mst_Finish_id";
$tdatamst_finish_terms[".inlineAddFields"][] = "Discrimination";
$tdatamst_finish_terms[".inlineAddFields"][] = "category_id";
$tdatamst_finish_terms[".inlineAddFields"][] = "colorstone_id";
$tdatamst_finish_terms[".inlineAddFields"][] = "shape";
$tdatamst_finish_terms[".inlineAddFields"][] = "cutting_syle";
$tdatamst_finish_terms[".inlineAddFields"][] = "DA_CUT";
$tdatamst_finish_terms[".inlineAddFields"][] = "effect";
$tdatamst_finish_terms[".inlineAddFields"][] = "status";
$tdatamst_finish_terms[".inlineAddFields"][] = "parent_stone_lower_limit";
$tdatamst_finish_terms[".inlineAddFields"][] = "cost";

$tdatamst_finish_terms[".editFields"] = array();

$tdatamst_finish_terms[".inlineEditFields"] = array();
$tdatamst_finish_terms[".inlineEditFields"][] = "cost_category";
$tdatamst_finish_terms[".inlineEditFields"][] = "finish_sort";
$tdatamst_finish_terms[".inlineEditFields"][] = "discrimination_sort";
$tdatamst_finish_terms[".inlineEditFields"][] = "mst_Finish_id";
$tdatamst_finish_terms[".inlineEditFields"][] = "Discrimination";
$tdatamst_finish_terms[".inlineEditFields"][] = "category_id";
$tdatamst_finish_terms[".inlineEditFields"][] = "colorstone_id";
$tdatamst_finish_terms[".inlineEditFields"][] = "shape";
$tdatamst_finish_terms[".inlineEditFields"][] = "cutting_syle";
$tdatamst_finish_terms[".inlineEditFields"][] = "DA_CUT";
$tdatamst_finish_terms[".inlineEditFields"][] = "effect";
$tdatamst_finish_terms[".inlineEditFields"][] = "status";
$tdatamst_finish_terms[".inlineEditFields"][] = "parent_stone_lower_limit";
$tdatamst_finish_terms[".inlineEditFields"][] = "cost";

$tdatamst_finish_terms[".updateSelectedFields"] = array();


$tdatamst_finish_terms[".exportFields"] = array();
$tdatamst_finish_terms[".exportFields"][] = "id";
$tdatamst_finish_terms[".exportFields"][] = "mst_Finish_id";
$tdatamst_finish_terms[".exportFields"][] = "category_id";
$tdatamst_finish_terms[".exportFields"][] = "parent_stone_lower_limit";
$tdatamst_finish_terms[".exportFields"][] = "cost";
$tdatamst_finish_terms[".exportFields"][] = "created_by";
$tdatamst_finish_terms[".exportFields"][] = "created_at";
$tdatamst_finish_terms[".exportFields"][] = "updated_by";
$tdatamst_finish_terms[".exportFields"][] = "updated_at";
$tdatamst_finish_terms[".exportFields"][] = "Discrimination";
$tdatamst_finish_terms[".exportFields"][] = "colorstone_id";
$tdatamst_finish_terms[".exportFields"][] = "shape";
$tdatamst_finish_terms[".exportFields"][] = "cutting_syle";
$tdatamst_finish_terms[".exportFields"][] = "DA_CUT";
$tdatamst_finish_terms[".exportFields"][] = "status";
$tdatamst_finish_terms[".exportFields"][] = "finish_sort";
$tdatamst_finish_terms[".exportFields"][] = "discrimination_sort";
$tdatamst_finish_terms[".exportFields"][] = "effect";
$tdatamst_finish_terms[".exportFields"][] = "cost_category";

$tdatamst_finish_terms[".importFields"] = array();
$tdatamst_finish_terms[".importFields"][] = "id";
$tdatamst_finish_terms[".importFields"][] = "mst_Finish_id";
$tdatamst_finish_terms[".importFields"][] = "category_id";
$tdatamst_finish_terms[".importFields"][] = "parent_stone_lower_limit";
$tdatamst_finish_terms[".importFields"][] = "cost";
$tdatamst_finish_terms[".importFields"][] = "created_by";
$tdatamst_finish_terms[".importFields"][] = "created_at";
$tdatamst_finish_terms[".importFields"][] = "updated_by";
$tdatamst_finish_terms[".importFields"][] = "updated_at";
$tdatamst_finish_terms[".importFields"][] = "Discrimination";
$tdatamst_finish_terms[".importFields"][] = "colorstone_id";
$tdatamst_finish_terms[".importFields"][] = "shape";
$tdatamst_finish_terms[".importFields"][] = "cutting_syle";
$tdatamst_finish_terms[".importFields"][] = "DA_CUT";
$tdatamst_finish_terms[".importFields"][] = "status";
$tdatamst_finish_terms[".importFields"][] = "finish_sort";
$tdatamst_finish_terms[".importFields"][] = "discrimination_sort";
$tdatamst_finish_terms[".importFields"][] = "effect";
$tdatamst_finish_terms[".importFields"][] = "cost_category";

$tdatamst_finish_terms[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","id");
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




	$tdatamst_finish_terms["id"] = $fdata;
//	mst_Finish_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mst_Finish_id";
	$fdata["GoodName"] = "mst_Finish_id";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","mst_Finish_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mst_Finish_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_Finish_id`";

	
	
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
	$edata["LookupTable"] = "mst_Finish";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "val";

	
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




	$tdatamst_finish_terms["mst_Finish_id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","category_id");
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




	$tdatamst_finish_terms["category_id"] = $fdata;
//	parent_stone_lower_limit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "parent_stone_lower_limit";
	$fdata["GoodName"] = "parent_stone_lower_limit";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","parent_stone_lower_limit");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "parent_stone_lower_limit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`parent_stone_lower_limit`";

	
	
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




	$tdatamst_finish_terms["parent_stone_lower_limit"] = $fdata;
//	cost
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cost";
	$fdata["GoodName"] = "cost";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","cost");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cost";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cost`";

	
	
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




	$tdatamst_finish_terms["cost"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","created_by");
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




	$tdatamst_finish_terms["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","created_at");
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




	$tdatamst_finish_terms["created_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","updated_by");
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




	$tdatamst_finish_terms["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","updated_at");
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




	$tdatamst_finish_terms["updated_at"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","Discrimination");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Discrimination";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Discrimination`";

	
	
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
	$edata["LookupTable"] = "mst_Discrimination";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "val";

	
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




	$tdatamst_finish_terms["Discrimination"] = $fdata;
//	colorstone_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "colorstone_id";
	$fdata["GoodName"] = "colorstone_id";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","colorstone_id");
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




	$tdatamst_finish_terms["colorstone_id"] = $fdata;
//	shape
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "shape";
	$fdata["GoodName"] = "shape";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","shape");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shape";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shape`";

	
	
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
	$edata["LookupTable"] = "mst_shape";
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




	$tdatamst_finish_terms["shape"] = $fdata;
//	cutting_syle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cutting_syle";
	$fdata["GoodName"] = "cutting_syle";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","cutting_syle");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cutting_syle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cutting_syle`";

	
	
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
	$edata["LookupTable"] = "mst_cutting_style";
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




	$tdatamst_finish_terms["cutting_syle"] = $fdata;
//	DA_CUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DA_CUT";
	$fdata["GoodName"] = "DA_CUT";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","DA_CUT");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_CUT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_CUT`";

	
	
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
	$edata["LookupTable"] = "_DIA_DA_CUT";
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




	$tdatamst_finish_terms["DA_CUT"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`status`";

	
	
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
	$edata["LookupTable"] = "_goods_status2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "goods_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "goods_status";

	
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




	$tdatamst_finish_terms["status"] = $fdata;
//	finish_sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "finish_sort";
	$fdata["GoodName"] = "finish_sort";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","finish_sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "finish_sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`finish_sort`";

	
	
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




	$tdatamst_finish_terms["finish_sort"] = $fdata;
//	discrimination_sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "discrimination_sort";
	$fdata["GoodName"] = "discrimination_sort";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","discrimination_sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "discrimination_sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`discrimination_sort`";

	
	
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




	$tdatamst_finish_terms["discrimination_sort"] = $fdata;
//	effect
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "effect";
	$fdata["GoodName"] = "effect";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","effect");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "effect";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`effect`";

	
	
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
	$edata["LookupTable"] = "mst_effect";
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




	$tdatamst_finish_terms["effect"] = $fdata;
//	cost_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "cost_category";
	$fdata["GoodName"] = "cost_category";
	$fdata["ownerTable"] = "mst_finish_terms";
	$fdata["Label"] = GetFieldLabel("mst_finish_terms","cost_category");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cost_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cost_category`";

	
	
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
	$edata["LookupTable"] = "mst_cost_category";
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




	$tdatamst_finish_terms["cost_category"] = $fdata;


$tables_data["mst_finish_terms"]=&$tdatamst_finish_terms;
$field_labels["mst_finish_terms"] = &$fieldLabelsmst_finish_terms;
$fieldToolTips["mst_finish_terms"] = &$fieldToolTipsmst_finish_terms;
$placeHolders["mst_finish_terms"] = &$placeHoldersmst_finish_terms;
$page_titles["mst_finish_terms"] = &$pageTitlesmst_finish_terms;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_finish_terms"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_finish_terms"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_finish_terms()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`mst_Finish_id`,  	`category_id`,  	`parent_stone_lower_limit`,  	`cost`,  	`created_by`,  	`created_at`,  	`updated_by`,  	`updated_at`,  	`Discrimination`,  	`colorstone_id`,  	`shape`,  	`cutting_syle`,  	`DA_CUT`,  	`status`,  	`finish_sort`,  	`discrimination_sort`,  	`effect`,  	`cost_category`";
$proto0["m_strFrom"] = "FROM `mst_finish_terms`";
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
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_finish_terms";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mst_Finish_id",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto8["m_sql"] = "`mst_Finish_id`";
$proto8["m_srcTableName"] = "mst_finish_terms";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto10["m_sql"] = "`category_id`";
$proto10["m_srcTableName"] = "mst_finish_terms";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "parent_stone_lower_limit",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto12["m_sql"] = "`parent_stone_lower_limit`";
$proto12["m_srcTableName"] = "mst_finish_terms";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cost",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto14["m_sql"] = "`cost`";
$proto14["m_srcTableName"] = "mst_finish_terms";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto16["m_sql"] = "`created_by`";
$proto16["m_srcTableName"] = "mst_finish_terms";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "mst_finish_terms";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto20["m_sql"] = "`updated_by`";
$proto20["m_srcTableName"] = "mst_finish_terms";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto22["m_sql"] = "`updated_at`";
$proto22["m_srcTableName"] = "mst_finish_terms";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto24["m_sql"] = "`Discrimination`";
$proto24["m_srcTableName"] = "mst_finish_terms";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "colorstone_id",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto26["m_sql"] = "`colorstone_id`";
$proto26["m_srcTableName"] = "mst_finish_terms";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "shape",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto28["m_sql"] = "`shape`";
$proto28["m_srcTableName"] = "mst_finish_terms";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cutting_syle",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto30["m_sql"] = "`cutting_syle`";
$proto30["m_srcTableName"] = "mst_finish_terms";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_CUT",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto32["m_sql"] = "`DA_CUT`";
$proto32["m_srcTableName"] = "mst_finish_terms";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto34["m_sql"] = "`status`";
$proto34["m_srcTableName"] = "mst_finish_terms";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "finish_sort",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto36["m_sql"] = "`finish_sort`";
$proto36["m_srcTableName"] = "mst_finish_terms";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "discrimination_sort",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto38["m_sql"] = "`discrimination_sort`";
$proto38["m_srcTableName"] = "mst_finish_terms";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "effect",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto40["m_sql"] = "`effect`";
$proto40["m_srcTableName"] = "mst_finish_terms";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "cost_category",
	"m_strTable" => "mst_finish_terms",
	"m_srcTableName" => "mst_finish_terms"
));

$proto42["m_sql"] = "`cost_category`";
$proto42["m_srcTableName"] = "mst_finish_terms";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "mst_finish_terms";
$proto45["m_srcTableName"] = "mst_finish_terms";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id";
$proto45["m_columns"][] = "mst_Finish_id";
$proto45["m_columns"][] = "category_id";
$proto45["m_columns"][] = "parent_stone_lower_limit";
$proto45["m_columns"][] = "cost";
$proto45["m_columns"][] = "created_by";
$proto45["m_columns"][] = "created_at";
$proto45["m_columns"][] = "updated_by";
$proto45["m_columns"][] = "updated_at";
$proto45["m_columns"][] = "Discrimination";
$proto45["m_columns"][] = "colorstone_id";
$proto45["m_columns"][] = "shape";
$proto45["m_columns"][] = "cutting_syle";
$proto45["m_columns"][] = "DA_CUT";
$proto45["m_columns"][] = "status";
$proto45["m_columns"][] = "finish_sort";
$proto45["m_columns"][] = "discrimination_sort";
$proto45["m_columns"][] = "effect";
$proto45["m_columns"][] = "cost_category";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "`mst_finish_terms`";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "mst_finish_terms";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="mst_finish_terms";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_finish_terms = createSqlQuery_mst_finish_terms();


	
		;

																			

$tdatamst_finish_terms[".sqlquery"] = $queryData_mst_finish_terms;

include_once(getabspath("include/mst_finish_terms_events.php"));
$tableEvents["mst_finish_terms"] = new eventclass_mst_finish_terms;
$tdatamst_finish_terms[".hasEvents"] = true;

?>