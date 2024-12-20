<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_saisun_item = array();
	$tdatamst_saisun_item[".truncateText"] = true;
	$tdatamst_saisun_item[".NumberOfChars"] = 80;
	$tdatamst_saisun_item[".ShortName"] = "mst_saisun_item";
	$tdatamst_saisun_item[".OwnerID"] = "";
	$tdatamst_saisun_item[".OriginalTable"] = "mst_saisun_item";

//	field labels
$fieldLabelsmst_saisun_item = array();
$fieldToolTipsmst_saisun_item = array();
$pageTitlesmst_saisun_item = array();
$placeHoldersmst_saisun_item = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_saisun_item["Japanese"] = array();
	$fieldToolTipsmst_saisun_item["Japanese"] = array();
	$placeHoldersmst_saisun_item["Japanese"] = array();
	$pageTitlesmst_saisun_item["Japanese"] = array();
	$fieldLabelsmst_saisun_item["Japanese"]["id"] = "項目名";
	$fieldToolTipsmst_saisun_item["Japanese"]["id"] = "";
	$placeHoldersmst_saisun_item["Japanese"]["id"] = "";
	$fieldLabelsmst_saisun_item["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmst_saisun_item["Japanese"]["category_id"] = "";
	$placeHoldersmst_saisun_item["Japanese"]["category_id"] = "";
	$fieldLabelsmst_saisun_item["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsmst_saisun_item["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_saisun_item["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_saisun_item["Japanese"]["name"] = "項目和名";
	$fieldToolTipsmst_saisun_item["Japanese"]["name"] = "";
	$placeHoldersmst_saisun_item["Japanese"]["name"] = "";
	$fieldLabelsmst_saisun_item["Japanese"]["data_unit"] = "単位";
	$fieldToolTipsmst_saisun_item["Japanese"]["data_unit"] = "";
	$placeHoldersmst_saisun_item["Japanese"]["data_unit"] = "";
	$fieldLabelsmst_saisun_item["Japanese"]["input_type"] = "入力フォーマット";
	$fieldToolTipsmst_saisun_item["Japanese"]["input_type"] = "";
	$placeHoldersmst_saisun_item["Japanese"]["input_type"] = "";
	$fieldLabelsmst_saisun_item["Japanese"]["select_list"] = "リストボックス内容";
	$fieldToolTipsmst_saisun_item["Japanese"]["select_list"] = "";
	$placeHoldersmst_saisun_item["Japanese"]["select_list"] = "";
	$fieldLabelsmst_saisun_item["Japanese"]["line_break"] = "Line Break";
	$fieldToolTipsmst_saisun_item["Japanese"]["line_break"] = "";
	$placeHoldersmst_saisun_item["Japanese"]["line_break"] = "";
	$fieldLabelsmst_saisun_item["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_saisun_item["Japanese"]["update_by"] = "";
	$placeHoldersmst_saisun_item["Japanese"]["update_by"] = "";
	$fieldLabelsmst_saisun_item["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_saisun_item["Japanese"]["update_at"] = "";
	$placeHoldersmst_saisun_item["Japanese"]["update_at"] = "";
	$fieldLabelsmst_saisun_item["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsmst_saisun_item["Japanese"]["create_by"] = "";
	$placeHoldersmst_saisun_item["Japanese"]["create_by"] = "";
	$fieldLabelsmst_saisun_item["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsmst_saisun_item["Japanese"]["create_at"] = "";
	$placeHoldersmst_saisun_item["Japanese"]["create_at"] = "";
	$fieldLabelsmst_saisun_item["Japanese"]["data_title"] = "データタイトル";
	$fieldToolTipsmst_saisun_item["Japanese"]["data_title"] = "";
	$placeHoldersmst_saisun_item["Japanese"]["data_title"] = "";
	$fieldLabelsmst_saisun_item["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_saisun_item["Japanese"]["sort"] = "";
	$placeHoldersmst_saisun_item["Japanese"]["sort"] = "";
	$fieldLabelsmst_saisun_item["Japanese"]["data_category_title"] = "データカテゴリータイトル";
	$fieldToolTipsmst_saisun_item["Japanese"]["data_category_title"] = "";
	$placeHoldersmst_saisun_item["Japanese"]["data_category_title"] = "";
	$fieldLabelsmst_saisun_item["Japanese"]["memo"] = "メモ";
	$fieldToolTipsmst_saisun_item["Japanese"]["memo"] = "";
	$placeHoldersmst_saisun_item["Japanese"]["memo"] = "";
	if (count($fieldToolTipsmst_saisun_item["Japanese"]))
		$tdatamst_saisun_item[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_saisun_item[""] = array();
	$fieldToolTipsmst_saisun_item[""] = array();
	$placeHoldersmst_saisun_item[""] = array();
	$pageTitlesmst_saisun_item[""] = array();
	$fieldLabelsmst_saisun_item[""]["id"] = "Id";
	$fieldToolTipsmst_saisun_item[""]["id"] = "";
	$placeHoldersmst_saisun_item[""]["id"] = "";
	$fieldLabelsmst_saisun_item[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_saisun_item[""]["category_id"] = "";
	$placeHoldersmst_saisun_item[""]["category_id"] = "";
	$fieldLabelsmst_saisun_item[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_saisun_item[""]["sub_category_id1"] = "";
	$placeHoldersmst_saisun_item[""]["sub_category_id1"] = "";
	$fieldLabelsmst_saisun_item[""]["name"] = "Name";
	$fieldToolTipsmst_saisun_item[""]["name"] = "";
	$placeHoldersmst_saisun_item[""]["name"] = "";
	$fieldLabelsmst_saisun_item[""]["data_unit"] = "Data Unit";
	$fieldToolTipsmst_saisun_item[""]["data_unit"] = "";
	$placeHoldersmst_saisun_item[""]["data_unit"] = "";
	$fieldLabelsmst_saisun_item[""]["input_type"] = "Input Type";
	$fieldToolTipsmst_saisun_item[""]["input_type"] = "";
	$placeHoldersmst_saisun_item[""]["input_type"] = "";
	$fieldLabelsmst_saisun_item[""]["select_list"] = "Select List";
	$fieldToolTipsmst_saisun_item[""]["select_list"] = "";
	$placeHoldersmst_saisun_item[""]["select_list"] = "";
	$fieldLabelsmst_saisun_item[""]["line_break"] = "Line Break";
	$fieldToolTipsmst_saisun_item[""]["line_break"] = "";
	$placeHoldersmst_saisun_item[""]["line_break"] = "";
	$fieldLabelsmst_saisun_item[""]["update_by"] = "Update By";
	$fieldToolTipsmst_saisun_item[""]["update_by"] = "";
	$placeHoldersmst_saisun_item[""]["update_by"] = "";
	$fieldLabelsmst_saisun_item[""]["update_at"] = "Update At";
	$fieldToolTipsmst_saisun_item[""]["update_at"] = "";
	$placeHoldersmst_saisun_item[""]["update_at"] = "";
	$fieldLabelsmst_saisun_item[""]["create_by"] = "Create By";
	$fieldToolTipsmst_saisun_item[""]["create_by"] = "";
	$placeHoldersmst_saisun_item[""]["create_by"] = "";
	$fieldLabelsmst_saisun_item[""]["create_at"] = "Create At";
	$fieldToolTipsmst_saisun_item[""]["create_at"] = "";
	$placeHoldersmst_saisun_item[""]["create_at"] = "";
	$fieldLabelsmst_saisun_item[""]["data_title"] = "Data Title";
	$fieldToolTipsmst_saisun_item[""]["data_title"] = "";
	$placeHoldersmst_saisun_item[""]["data_title"] = "";
	$fieldLabelsmst_saisun_item[""]["sort"] = "Sort";
	$fieldToolTipsmst_saisun_item[""]["sort"] = "";
	$placeHoldersmst_saisun_item[""]["sort"] = "";
	$fieldLabelsmst_saisun_item[""]["data_category_title"] = "Data Category Title";
	$fieldToolTipsmst_saisun_item[""]["data_category_title"] = "";
	$placeHoldersmst_saisun_item[""]["data_category_title"] = "";
	$fieldLabelsmst_saisun_item[""]["memo"] = "Memo";
	$fieldToolTipsmst_saisun_item[""]["memo"] = "";
	$placeHoldersmst_saisun_item[""]["memo"] = "";
	if (count($fieldToolTipsmst_saisun_item[""]))
		$tdatamst_saisun_item[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_saisun_item["English"] = array();
	$fieldToolTipsmst_saisun_item["English"] = array();
	$placeHoldersmst_saisun_item["English"] = array();
	$pageTitlesmst_saisun_item["English"] = array();
	$fieldLabelsmst_saisun_item["English"]["id"] = "Id";
	$fieldToolTipsmst_saisun_item["English"]["id"] = "";
	$placeHoldersmst_saisun_item["English"]["id"] = "";
	$fieldLabelsmst_saisun_item["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_saisun_item["English"]["category_id"] = "";
	$placeHoldersmst_saisun_item["English"]["category_id"] = "";
	$fieldLabelsmst_saisun_item["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_saisun_item["English"]["sub_category_id1"] = "";
	$placeHoldersmst_saisun_item["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_saisun_item["English"]["name"] = "Name";
	$fieldToolTipsmst_saisun_item["English"]["name"] = "";
	$placeHoldersmst_saisun_item["English"]["name"] = "";
	$fieldLabelsmst_saisun_item["English"]["data_unit"] = "Data Unit";
	$fieldToolTipsmst_saisun_item["English"]["data_unit"] = "";
	$placeHoldersmst_saisun_item["English"]["data_unit"] = "";
	$fieldLabelsmst_saisun_item["English"]["input_type"] = "Input Type";
	$fieldToolTipsmst_saisun_item["English"]["input_type"] = "";
	$placeHoldersmst_saisun_item["English"]["input_type"] = "";
	$fieldLabelsmst_saisun_item["English"]["select_list"] = "Select List";
	$fieldToolTipsmst_saisun_item["English"]["select_list"] = "";
	$placeHoldersmst_saisun_item["English"]["select_list"] = "";
	$fieldLabelsmst_saisun_item["English"]["line_break"] = "Line Break";
	$fieldToolTipsmst_saisun_item["English"]["line_break"] = "";
	$placeHoldersmst_saisun_item["English"]["line_break"] = "";
	$fieldLabelsmst_saisun_item["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_saisun_item["English"]["update_by"] = "";
	$placeHoldersmst_saisun_item["English"]["update_by"] = "";
	$fieldLabelsmst_saisun_item["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_saisun_item["English"]["update_at"] = "";
	$placeHoldersmst_saisun_item["English"]["update_at"] = "";
	$fieldLabelsmst_saisun_item["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_saisun_item["English"]["create_by"] = "";
	$placeHoldersmst_saisun_item["English"]["create_by"] = "";
	$fieldLabelsmst_saisun_item["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_saisun_item["English"]["create_at"] = "";
	$placeHoldersmst_saisun_item["English"]["create_at"] = "";
	$fieldLabelsmst_saisun_item["English"]["data_title"] = "Data Title";
	$fieldToolTipsmst_saisun_item["English"]["data_title"] = "";
	$placeHoldersmst_saisun_item["English"]["data_title"] = "";
	$fieldLabelsmst_saisun_item["English"]["sort"] = "Sort";
	$fieldToolTipsmst_saisun_item["English"]["sort"] = "";
	$placeHoldersmst_saisun_item["English"]["sort"] = "";
	$fieldLabelsmst_saisun_item["English"]["data_category_title"] = "Data Category Title";
	$fieldToolTipsmst_saisun_item["English"]["data_category_title"] = "";
	$placeHoldersmst_saisun_item["English"]["data_category_title"] = "";
	$fieldLabelsmst_saisun_item["English"]["memo"] = "Memo";
	$fieldToolTipsmst_saisun_item["English"]["memo"] = "";
	$placeHoldersmst_saisun_item["English"]["memo"] = "";
	if (count($fieldToolTipsmst_saisun_item["English"]))
		$tdatamst_saisun_item[".isUseToolTips"] = true;
}


	$tdatamst_saisun_item[".NCSearch"] = true;



$tdatamst_saisun_item[".shortTableName"] = "mst_saisun_item";
$tdatamst_saisun_item[".nSecOptions"] = 0;
$tdatamst_saisun_item[".recsPerRowPrint"] = 1;
$tdatamst_saisun_item[".mainTableOwnerID"] = "";
$tdatamst_saisun_item[".moveNext"] = 1;
$tdatamst_saisun_item[".entityType"] = 0;

$tdatamst_saisun_item[".strOriginalTableName"] = "mst_saisun_item";

	



$tdatamst_saisun_item[".showAddInPopup"] = false;

$tdatamst_saisun_item[".showEditInPopup"] = false;

$tdatamst_saisun_item[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_saisun_item[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_saisun_item[".fieldsForRegister"] = array();

$tdatamst_saisun_item[".listAjax"] = false;

	$tdatamst_saisun_item[".audit"] = true;

	$tdatamst_saisun_item[".locking"] = false;



$tdatamst_saisun_item[".list"] = true;

$tdatamst_saisun_item[".inlineEdit"] = true;


$tdatamst_saisun_item[".reorderRecordsByHeader"] = true;



$tdatamst_saisun_item[".inlineAdd"] = true;

$tdatamst_saisun_item[".import"] = true;

$tdatamst_saisun_item[".exportTo"] = true;


$tdatamst_saisun_item[".delete"] = true;

$tdatamst_saisun_item[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_saisun_item[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_saisun_item[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_saisun_item[".searchSaving"] = false;
//

$tdatamst_saisun_item[".showSearchPanel"] = true;
		$tdatamst_saisun_item[".flexibleSearch"] = true;

$tdatamst_saisun_item[".isUseAjaxSuggest"] = true;

$tdatamst_saisun_item[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_saisun_item[".ajaxCodeSnippetAdded"] = false;

$tdatamst_saisun_item[".buttonsAdded"] = false;

$tdatamst_saisun_item[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_saisun_item[".isUseTimeForSearch"] = false;





$tdatamst_saisun_item[".allSearchFields"] = array();
$tdatamst_saisun_item[".filterFields"] = array();
$tdatamst_saisun_item[".requiredSearchFields"] = array();

$tdatamst_saisun_item[".allSearchFields"][] = "id";
	$tdatamst_saisun_item[".allSearchFields"][] = "category_id";
	$tdatamst_saisun_item[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_saisun_item[".allSearchFields"][] = "name";
	$tdatamst_saisun_item[".allSearchFields"][] = "data_unit";
	$tdatamst_saisun_item[".allSearchFields"][] = "input_type";
	$tdatamst_saisun_item[".allSearchFields"][] = "select_list";
	$tdatamst_saisun_item[".allSearchFields"][] = "line_break";
	$tdatamst_saisun_item[".allSearchFields"][] = "update_by";
	$tdatamst_saisun_item[".allSearchFields"][] = "update_at";
	$tdatamst_saisun_item[".allSearchFields"][] = "create_by";
	$tdatamst_saisun_item[".allSearchFields"][] = "create_at";
	$tdatamst_saisun_item[".allSearchFields"][] = "data_title";
	$tdatamst_saisun_item[".allSearchFields"][] = "sort";
	$tdatamst_saisun_item[".allSearchFields"][] = "data_category_title";
	$tdatamst_saisun_item[".allSearchFields"][] = "memo";
	

$tdatamst_saisun_item[".googleLikeFields"] = array();
$tdatamst_saisun_item[".googleLikeFields"][] = "id";
$tdatamst_saisun_item[".googleLikeFields"][] = "category_id";
$tdatamst_saisun_item[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_saisun_item[".googleLikeFields"][] = "name";
$tdatamst_saisun_item[".googleLikeFields"][] = "data_unit";
$tdatamst_saisun_item[".googleLikeFields"][] = "input_type";
$tdatamst_saisun_item[".googleLikeFields"][] = "select_list";
$tdatamst_saisun_item[".googleLikeFields"][] = "line_break";
$tdatamst_saisun_item[".googleLikeFields"][] = "update_by";
$tdatamst_saisun_item[".googleLikeFields"][] = "update_at";
$tdatamst_saisun_item[".googleLikeFields"][] = "create_by";
$tdatamst_saisun_item[".googleLikeFields"][] = "create_at";
$tdatamst_saisun_item[".googleLikeFields"][] = "data_title";
$tdatamst_saisun_item[".googleLikeFields"][] = "sort";
$tdatamst_saisun_item[".googleLikeFields"][] = "data_category_title";
$tdatamst_saisun_item[".googleLikeFields"][] = "memo";


$tdatamst_saisun_item[".advSearchFields"] = array();
$tdatamst_saisun_item[".advSearchFields"][] = "id";
$tdatamst_saisun_item[".advSearchFields"][] = "category_id";
$tdatamst_saisun_item[".advSearchFields"][] = "sub_category_id1";
$tdatamst_saisun_item[".advSearchFields"][] = "name";
$tdatamst_saisun_item[".advSearchFields"][] = "data_unit";
$tdatamst_saisun_item[".advSearchFields"][] = "input_type";
$tdatamst_saisun_item[".advSearchFields"][] = "select_list";
$tdatamst_saisun_item[".advSearchFields"][] = "line_break";
$tdatamst_saisun_item[".advSearchFields"][] = "update_by";
$tdatamst_saisun_item[".advSearchFields"][] = "update_at";
$tdatamst_saisun_item[".advSearchFields"][] = "create_by";
$tdatamst_saisun_item[".advSearchFields"][] = "create_at";
$tdatamst_saisun_item[".advSearchFields"][] = "data_title";
$tdatamst_saisun_item[".advSearchFields"][] = "sort";
$tdatamst_saisun_item[".advSearchFields"][] = "data_category_title";
$tdatamst_saisun_item[".advSearchFields"][] = "memo";

$tdatamst_saisun_item[".tableType"] = "list";

$tdatamst_saisun_item[".printerPageOrientation"] = 0;
$tdatamst_saisun_item[".nPrinterPageScale"] = 100;

$tdatamst_saisun_item[".nPrinterSplitRecords"] = 40;

$tdatamst_saisun_item[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_saisun_item[".geocodingEnabled"] = false;





$tdatamst_saisun_item[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_saisun_item[".pageSize"] = 100;

$tdatamst_saisun_item[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_saisun_item[".strOrderBy"] = $tstrOrderBy;

$tdatamst_saisun_item[".orderindexes"] = array();
$tdatamst_saisun_item[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatamst_saisun_item[".sqlHead"] = "SELECT id,  category_id,  sub_category_id1,  name,  data_unit,  input_type,  select_list,  line_break,  update_by,  update_at,  create_by,  create_at,  data_title,  sort,  data_category_title,  `memo`";
$tdatamst_saisun_item[".sqlFrom"] = "FROM mst_saisun_item";
$tdatamst_saisun_item[".sqlWhereExpr"] = "";
$tdatamst_saisun_item[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_saisun_item[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_saisun_item[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_saisun_item[".highlightSearchResults"] = true;

$tableKeysmst_saisun_item = array();
$tableKeysmst_saisun_item[] = "id";
$tdatamst_saisun_item[".Keys"] = $tableKeysmst_saisun_item;

$tdatamst_saisun_item[".listFields"] = array();
$tdatamst_saisun_item[".listFields"][] = "id";
$tdatamst_saisun_item[".listFields"][] = "category_id";
$tdatamst_saisun_item[".listFields"][] = "sub_category_id1";
$tdatamst_saisun_item[".listFields"][] = "sort";
$tdatamst_saisun_item[".listFields"][] = "name";
$tdatamst_saisun_item[".listFields"][] = "data_title";
$tdatamst_saisun_item[".listFields"][] = "data_category_title";
$tdatamst_saisun_item[".listFields"][] = "data_unit";
$tdatamst_saisun_item[".listFields"][] = "input_type";
$tdatamst_saisun_item[".listFields"][] = "select_list";
$tdatamst_saisun_item[".listFields"][] = "line_break";
$tdatamst_saisun_item[".listFields"][] = "memo";
$tdatamst_saisun_item[".listFields"][] = "update_by";
$tdatamst_saisun_item[".listFields"][] = "update_at";
$tdatamst_saisun_item[".listFields"][] = "create_by";
$tdatamst_saisun_item[".listFields"][] = "create_at";

$tdatamst_saisun_item[".hideMobileList"] = array();


$tdatamst_saisun_item[".viewFields"] = array();

$tdatamst_saisun_item[".addFields"] = array();

$tdatamst_saisun_item[".masterListFields"] = array();
$tdatamst_saisun_item[".masterListFields"][] = "id";
$tdatamst_saisun_item[".masterListFields"][] = "category_id";
$tdatamst_saisun_item[".masterListFields"][] = "sub_category_id1";
$tdatamst_saisun_item[".masterListFields"][] = "name";
$tdatamst_saisun_item[".masterListFields"][] = "data_unit";
$tdatamst_saisun_item[".masterListFields"][] = "input_type";
$tdatamst_saisun_item[".masterListFields"][] = "select_list";
$tdatamst_saisun_item[".masterListFields"][] = "line_break";
$tdatamst_saisun_item[".masterListFields"][] = "update_by";
$tdatamst_saisun_item[".masterListFields"][] = "update_at";
$tdatamst_saisun_item[".masterListFields"][] = "create_by";
$tdatamst_saisun_item[".masterListFields"][] = "create_at";
$tdatamst_saisun_item[".masterListFields"][] = "data_title";
$tdatamst_saisun_item[".masterListFields"][] = "sort";
$tdatamst_saisun_item[".masterListFields"][] = "data_category_title";
$tdatamst_saisun_item[".masterListFields"][] = "memo";

$tdatamst_saisun_item[".inlineAddFields"] = array();
$tdatamst_saisun_item[".inlineAddFields"][] = "id";
$tdatamst_saisun_item[".inlineAddFields"][] = "category_id";
$tdatamst_saisun_item[".inlineAddFields"][] = "sub_category_id1";
$tdatamst_saisun_item[".inlineAddFields"][] = "sort";
$tdatamst_saisun_item[".inlineAddFields"][] = "name";
$tdatamst_saisun_item[".inlineAddFields"][] = "data_title";
$tdatamst_saisun_item[".inlineAddFields"][] = "data_category_title";
$tdatamst_saisun_item[".inlineAddFields"][] = "data_unit";
$tdatamst_saisun_item[".inlineAddFields"][] = "input_type";
$tdatamst_saisun_item[".inlineAddFields"][] = "select_list";
$tdatamst_saisun_item[".inlineAddFields"][] = "line_break";
$tdatamst_saisun_item[".inlineAddFields"][] = "memo";

$tdatamst_saisun_item[".editFields"] = array();

$tdatamst_saisun_item[".inlineEditFields"] = array();
$tdatamst_saisun_item[".inlineEditFields"][] = "category_id";
$tdatamst_saisun_item[".inlineEditFields"][] = "sub_category_id1";
$tdatamst_saisun_item[".inlineEditFields"][] = "sort";
$tdatamst_saisun_item[".inlineEditFields"][] = "name";
$tdatamst_saisun_item[".inlineEditFields"][] = "data_title";
$tdatamst_saisun_item[".inlineEditFields"][] = "data_category_title";
$tdatamst_saisun_item[".inlineEditFields"][] = "data_unit";
$tdatamst_saisun_item[".inlineEditFields"][] = "input_type";
$tdatamst_saisun_item[".inlineEditFields"][] = "select_list";
$tdatamst_saisun_item[".inlineEditFields"][] = "line_break";
$tdatamst_saisun_item[".inlineEditFields"][] = "memo";

$tdatamst_saisun_item[".updateSelectedFields"] = array();


$tdatamst_saisun_item[".exportFields"] = array();
$tdatamst_saisun_item[".exportFields"][] = "data_category_title";
$tdatamst_saisun_item[".exportFields"][] = "memo";
$tdatamst_saisun_item[".exportFields"][] = "id";
$tdatamst_saisun_item[".exportFields"][] = "category_id";
$tdatamst_saisun_item[".exportFields"][] = "sub_category_id1";
$tdatamst_saisun_item[".exportFields"][] = "sort";
$tdatamst_saisun_item[".exportFields"][] = "name";
$tdatamst_saisun_item[".exportFields"][] = "data_title";
$tdatamst_saisun_item[".exportFields"][] = "data_unit";
$tdatamst_saisun_item[".exportFields"][] = "input_type";
$tdatamst_saisun_item[".exportFields"][] = "select_list";
$tdatamst_saisun_item[".exportFields"][] = "line_break";
$tdatamst_saisun_item[".exportFields"][] = "update_by";
$tdatamst_saisun_item[".exportFields"][] = "update_at";
$tdatamst_saisun_item[".exportFields"][] = "create_by";
$tdatamst_saisun_item[".exportFields"][] = "create_at";

$tdatamst_saisun_item[".importFields"] = array();
$tdatamst_saisun_item[".importFields"][] = "id";
$tdatamst_saisun_item[".importFields"][] = "category_id";
$tdatamst_saisun_item[".importFields"][] = "sub_category_id1";
$tdatamst_saisun_item[".importFields"][] = "name";
$tdatamst_saisun_item[".importFields"][] = "data_unit";
$tdatamst_saisun_item[".importFields"][] = "input_type";
$tdatamst_saisun_item[".importFields"][] = "select_list";
$tdatamst_saisun_item[".importFields"][] = "line_break";
$tdatamst_saisun_item[".importFields"][] = "data_title";
$tdatamst_saisun_item[".importFields"][] = "sort";
$tdatamst_saisun_item[".importFields"][] = "data_category_title";
$tdatamst_saisun_item[".importFields"][] = "memo";

$tdatamst_saisun_item[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_saisun_item";
	$fdata["Label"] = GetFieldLabel("mst_saisun_item","id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Regular expression");
				$edata["validateAs"]["regExp"] = "[a-zA-Z_0-9]*";
	$edata["validateAs"]["customMessages"]["RegExp"] = array("message" => "半角英数字と「_」のみです。", "messageType" => "Text");
			$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "同じ値があります。別名にしてください。", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_saisun_item["id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_saisun_item";
	$fdata["Label"] = GetFieldLabel("mst_saisun_item","category_id");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category_id";

	
	
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




	$tdatamst_saisun_item["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_saisun_item";
	$fdata["Label"] = GetFieldLabel("mst_saisun_item","sub_category_id1");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_category_id1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sub_category_id1";

	
	
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




	$tdatamst_saisun_item["sub_category_id1"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_saisun_item";
	$fdata["Label"] = GetFieldLabel("mst_saisun_item","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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




	$tdatamst_saisun_item["name"] = $fdata;
//	data_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "data_unit";
	$fdata["GoodName"] = "data_unit";
	$fdata["ownerTable"] = "mst_saisun_item";
	$fdata["Label"] = GetFieldLabel("mst_saisun_item","data_unit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "data_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_unit";

	
	
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




	$tdatamst_saisun_item["data_unit"] = $fdata;
//	input_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "input_type";
	$fdata["GoodName"] = "input_type";
	$fdata["ownerTable"] = "mst_saisun_item";
	$fdata["Label"] = GetFieldLabel("mst_saisun_item","input_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "input_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "input_type";

	
	
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




	$tdatamst_saisun_item["input_type"] = $fdata;
//	select_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "select_list";
	$fdata["GoodName"] = "select_list";
	$fdata["ownerTable"] = "mst_saisun_item";
	$fdata["Label"] = GetFieldLabel("mst_saisun_item","select_list");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "select_list";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "select_list";

	
	
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




	$tdatamst_saisun_item["select_list"] = $fdata;
//	line_break
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "line_break";
	$fdata["GoodName"] = "line_break";
	$fdata["ownerTable"] = "mst_saisun_item";
	$fdata["Label"] = GetFieldLabel("mst_saisun_item","line_break");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "line_break";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "line_break";

	
	
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




	$tdatamst_saisun_item["line_break"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_saisun_item";
	$fdata["Label"] = GetFieldLabel("mst_saisun_item","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_by";

	
	
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




	$tdatamst_saisun_item["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_saisun_item";
	$fdata["Label"] = GetFieldLabel("mst_saisun_item","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_at";

	
	
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




	$tdatamst_saisun_item["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_saisun_item";
	$fdata["Label"] = GetFieldLabel("mst_saisun_item","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_by";

	
	
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




	$tdatamst_saisun_item["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_saisun_item";
	$fdata["Label"] = GetFieldLabel("mst_saisun_item","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_at";

	
	
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




	$tdatamst_saisun_item["create_at"] = $fdata;
//	data_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "data_title";
	$fdata["GoodName"] = "data_title";
	$fdata["ownerTable"] = "mst_saisun_item";
	$fdata["Label"] = GetFieldLabel("mst_saisun_item","data_title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "data_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_title";

	
	
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




	$tdatamst_saisun_item["data_title"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_saisun_item";
	$fdata["Label"] = GetFieldLabel("mst_saisun_item","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sort";

	
	
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




	$tdatamst_saisun_item["sort"] = $fdata;
//	data_category_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "data_category_title";
	$fdata["GoodName"] = "data_category_title";
	$fdata["ownerTable"] = "mst_saisun_item";
	$fdata["Label"] = GetFieldLabel("mst_saisun_item","data_category_title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "data_category_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_category_title";

	
	
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




	$tdatamst_saisun_item["data_category_title"] = $fdata;
//	memo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "memo";
	$fdata["GoodName"] = "memo";
	$fdata["ownerTable"] = "mst_saisun_item";
	$fdata["Label"] = GetFieldLabel("mst_saisun_item","memo");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "memo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`memo`";

	
	
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




	$tdatamst_saisun_item["memo"] = $fdata;


$tables_data["mst_saisun_item"]=&$tdatamst_saisun_item;
$field_labels["mst_saisun_item"] = &$fieldLabelsmst_saisun_item;
$fieldToolTips["mst_saisun_item"] = &$fieldToolTipsmst_saisun_item;
$placeHolders["mst_saisun_item"] = &$placeHoldersmst_saisun_item;
$page_titles["mst_saisun_item"] = &$pageTitlesmst_saisun_item;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_saisun_item"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_saisun_item"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_saisun_item()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  category_id,  sub_category_id1,  name,  data_unit,  input_type,  select_list,  line_break,  update_by,  update_at,  create_by,  create_at,  data_title,  sort,  data_category_title,  `memo`";
$proto0["m_strFrom"] = "FROM mst_saisun_item";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
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
	"m_strTable" => "mst_saisun_item",
	"m_srcTableName" => "mst_saisun_item"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_saisun_item";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_saisun_item",
	"m_srcTableName" => "mst_saisun_item"
));

$proto8["m_sql"] = "category_id";
$proto8["m_srcTableName"] = "mst_saisun_item";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_saisun_item",
	"m_srcTableName" => "mst_saisun_item"
));

$proto10["m_sql"] = "sub_category_id1";
$proto10["m_srcTableName"] = "mst_saisun_item";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_saisun_item",
	"m_srcTableName" => "mst_saisun_item"
));

$proto12["m_sql"] = "name";
$proto12["m_srcTableName"] = "mst_saisun_item";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "data_unit",
	"m_strTable" => "mst_saisun_item",
	"m_srcTableName" => "mst_saisun_item"
));

$proto14["m_sql"] = "data_unit";
$proto14["m_srcTableName"] = "mst_saisun_item";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "input_type",
	"m_strTable" => "mst_saisun_item",
	"m_srcTableName" => "mst_saisun_item"
));

$proto16["m_sql"] = "input_type";
$proto16["m_srcTableName"] = "mst_saisun_item";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "select_list",
	"m_strTable" => "mst_saisun_item",
	"m_srcTableName" => "mst_saisun_item"
));

$proto18["m_sql"] = "select_list";
$proto18["m_srcTableName"] = "mst_saisun_item";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "line_break",
	"m_strTable" => "mst_saisun_item",
	"m_srcTableName" => "mst_saisun_item"
));

$proto20["m_sql"] = "line_break";
$proto20["m_srcTableName"] = "mst_saisun_item";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_saisun_item",
	"m_srcTableName" => "mst_saisun_item"
));

$proto22["m_sql"] = "update_by";
$proto22["m_srcTableName"] = "mst_saisun_item";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_saisun_item",
	"m_srcTableName" => "mst_saisun_item"
));

$proto24["m_sql"] = "update_at";
$proto24["m_srcTableName"] = "mst_saisun_item";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_saisun_item",
	"m_srcTableName" => "mst_saisun_item"
));

$proto26["m_sql"] = "create_by";
$proto26["m_srcTableName"] = "mst_saisun_item";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_saisun_item",
	"m_srcTableName" => "mst_saisun_item"
));

$proto28["m_sql"] = "create_at";
$proto28["m_srcTableName"] = "mst_saisun_item";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "data_title",
	"m_strTable" => "mst_saisun_item",
	"m_srcTableName" => "mst_saisun_item"
));

$proto30["m_sql"] = "data_title";
$proto30["m_srcTableName"] = "mst_saisun_item";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_saisun_item",
	"m_srcTableName" => "mst_saisun_item"
));

$proto32["m_sql"] = "sort";
$proto32["m_srcTableName"] = "mst_saisun_item";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "data_category_title",
	"m_strTable" => "mst_saisun_item",
	"m_srcTableName" => "mst_saisun_item"
));

$proto34["m_sql"] = "data_category_title";
$proto34["m_srcTableName"] = "mst_saisun_item";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "memo",
	"m_strTable" => "mst_saisun_item",
	"m_srcTableName" => "mst_saisun_item"
));

$proto36["m_sql"] = "`memo`";
$proto36["m_srcTableName"] = "mst_saisun_item";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "mst_saisun_item";
$proto39["m_srcTableName"] = "mst_saisun_item";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "category_id";
$proto39["m_columns"][] = "sub_category_id1";
$proto39["m_columns"][] = "name";
$proto39["m_columns"][] = "data_unit";
$proto39["m_columns"][] = "input_type";
$proto39["m_columns"][] = "select_list";
$proto39["m_columns"][] = "line_break";
$proto39["m_columns"][] = "update_by";
$proto39["m_columns"][] = "update_at";
$proto39["m_columns"][] = "create_by";
$proto39["m_columns"][] = "create_at";
$proto39["m_columns"][] = "data_title";
$proto39["m_columns"][] = "sort";
$proto39["m_columns"][] = "data_category_title";
$proto39["m_columns"][] = "memo";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "mst_saisun_item";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "mst_saisun_item";
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
	"m_strName" => "id",
	"m_strTable" => "mst_saisun_item",
	"m_srcTableName" => "mst_saisun_item"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_saisun_item";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_saisun_item = createSqlQuery_mst_saisun_item();


	
		;

																

$tdatamst_saisun_item[".sqlquery"] = $queryData_mst_saisun_item;

include_once(getabspath("include/mst_saisun_item_events.php"));
$tableEvents["mst_saisun_item"] = new eventclass_mst_saisun_item;
$tdatamst_saisun_item[".hasEvents"] = true;

?>