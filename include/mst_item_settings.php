<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_item = array();
	$tdatamst_item[".truncateText"] = true;
	$tdatamst_item[".NumberOfChars"] = 80;
	$tdatamst_item[".ShortName"] = "mst_item";
	$tdatamst_item[".OwnerID"] = "";
	$tdatamst_item[".OriginalTable"] = "mst_item";

//	field labels
$fieldLabelsmst_item = array();
$fieldToolTipsmst_item = array();
$pageTitlesmst_item = array();
$placeHoldersmst_item = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_item["Japanese"] = array();
	$fieldToolTipsmst_item["Japanese"] = array();
	$placeHoldersmst_item["Japanese"] = array();
	$pageTitlesmst_item["Japanese"] = array();
	$fieldLabelsmst_item["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_item["Japanese"]["id"] = "";
	$placeHoldersmst_item["Japanese"]["id"] = "";
	$fieldLabelsmst_item["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_item["Japanese"]["name"] = "";
	$placeHoldersmst_item["Japanese"]["name"] = "";
	$fieldLabelsmst_item["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_item["Japanese"]["sort"] = "";
	$placeHoldersmst_item["Japanese"]["sort"] = "";
	$fieldLabelsmst_item["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_item["Japanese"]["update_at"] = "";
	$placeHoldersmst_item["Japanese"]["update_at"] = "";
	$fieldLabelsmst_item["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_item["Japanese"]["update_by"] = "";
	$placeHoldersmst_item["Japanese"]["update_by"] = "";
	$fieldLabelsmst_item["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_item["Japanese"]["create_at"] = "";
	$placeHoldersmst_item["Japanese"]["create_at"] = "";
	$fieldLabelsmst_item["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_item["Japanese"]["create_by"] = "";
	$placeHoldersmst_item["Japanese"]["create_by"] = "";
	$fieldLabelsmst_item["Japanese"]["line_category"] = "ラインカテゴリー";
	$fieldToolTipsmst_item["Japanese"]["line_category"] = "";
	$placeHoldersmst_item["Japanese"]["line_category"] = "";
	$fieldLabelsmst_item["Japanese"]["yahoo_junle"] = "ブランドID";
	$fieldToolTipsmst_item["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_item["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_item["Japanese"]["category_id"] = "大カテ";
	$fieldToolTipsmst_item["Japanese"]["category_id"] = "";
	$placeHoldersmst_item["Japanese"]["category_id"] = "";
	$fieldLabelsmst_item["Japanese"]["sub_category_id1"] = "中カテ";
	$fieldToolTipsmst_item["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_item["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_item["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipsmst_item["Japanese"]["yahoo_kataban"] = "";
	$placeHoldersmst_item["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelsmst_item["Japanese"]["url"] = "URL";
	$fieldToolTipsmst_item["Japanese"]["url"] = "";
	$placeHoldersmst_item["Japanese"]["url"] = "";
	$fieldLabelsmst_item["Japanese"]["yahoo_sankou_uwadai"] = "参考上代";
	$fieldToolTipsmst_item["Japanese"]["yahoo_sankou_uwadai"] = "";
	$placeHoldersmst_item["Japanese"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelsmst_item["Japanese"]["gold_property"] = "金性";
	$fieldToolTipsmst_item["Japanese"]["gold_property"] = "";
	$placeHoldersmst_item["Japanese"]["gold_property"] = "";
	$fieldLabelsmst_item["Japanese"]["Gram"] = "金性グラム";
	$fieldToolTipsmst_item["Japanese"]["Gram"] = "";
	$placeHoldersmst_item["Japanese"]["Gram"] = "";
	$fieldLabelsmst_item["Japanese"]["unit"] = "単位";
	$fieldToolTipsmst_item["Japanese"]["unit"] = "";
	$placeHoldersmst_item["Japanese"]["unit"] = "";
	$fieldLabelsmst_item["Japanese"]["count"] = "商品件数";
	$fieldToolTipsmst_item["Japanese"]["count"] = "";
	$placeHoldersmst_item["Japanese"]["count"] = "";
	$fieldLabelsmst_item["Japanese"]["sum_nyuukin_price"] = "入金総額";
	$fieldToolTipsmst_item["Japanese"]["sum_nyuukin_price"] = "";
	$placeHoldersmst_item["Japanese"]["sum_nyuukin_price"] = "";
	if (count($fieldToolTipsmst_item["Japanese"]))
		$tdatamst_item[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_item[""] = array();
	$fieldToolTipsmst_item[""] = array();
	$placeHoldersmst_item[""] = array();
	$pageTitlesmst_item[""] = array();
	$fieldLabelsmst_item[""]["id"] = "Id";
	$fieldToolTipsmst_item[""]["id"] = "";
	$placeHoldersmst_item[""]["id"] = "";
	$fieldLabelsmst_item[""]["name"] = "Name";
	$fieldToolTipsmst_item[""]["name"] = "";
	$placeHoldersmst_item[""]["name"] = "";
	$fieldLabelsmst_item[""]["sort"] = "Sort";
	$fieldToolTipsmst_item[""]["sort"] = "";
	$placeHoldersmst_item[""]["sort"] = "";
	$fieldLabelsmst_item[""]["update_at"] = "Update At";
	$fieldToolTipsmst_item[""]["update_at"] = "";
	$placeHoldersmst_item[""]["update_at"] = "";
	$fieldLabelsmst_item[""]["update_by"] = "Update By";
	$fieldToolTipsmst_item[""]["update_by"] = "";
	$placeHoldersmst_item[""]["update_by"] = "";
	$fieldLabelsmst_item[""]["create_at"] = "Create At";
	$fieldToolTipsmst_item[""]["create_at"] = "";
	$placeHoldersmst_item[""]["create_at"] = "";
	$fieldLabelsmst_item[""]["create_by"] = "Create By";
	$fieldToolTipsmst_item[""]["create_by"] = "";
	$placeHoldersmst_item[""]["create_by"] = "";
	$fieldLabelsmst_item[""]["line_category"] = "Line Category";
	$fieldToolTipsmst_item[""]["line_category"] = "";
	$placeHoldersmst_item[""]["line_category"] = "";
	$fieldLabelsmst_item[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_item[""]["yahoo_junle"] = "";
	$placeHoldersmst_item[""]["yahoo_junle"] = "";
	$fieldLabelsmst_item[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_item[""]["category_id"] = "";
	$placeHoldersmst_item[""]["category_id"] = "";
	$fieldLabelsmst_item[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_item[""]["sub_category_id1"] = "";
	$placeHoldersmst_item[""]["sub_category_id1"] = "";
	$fieldLabelsmst_item[""]["yahoo_kataban"] = "Yahoo Kataban";
	$fieldToolTipsmst_item[""]["yahoo_kataban"] = "";
	$placeHoldersmst_item[""]["yahoo_kataban"] = "";
	$fieldLabelsmst_item[""]["url"] = "Url";
	$fieldToolTipsmst_item[""]["url"] = "";
	$placeHoldersmst_item[""]["url"] = "";
	$fieldLabelsmst_item[""]["yahoo_sankou_uwadai"] = "Yahoo Sankou Uwadai";
	$fieldToolTipsmst_item[""]["yahoo_sankou_uwadai"] = "";
	$placeHoldersmst_item[""]["yahoo_sankou_uwadai"] = "";
	$fieldLabelsmst_item[""]["gold_property"] = "Gold Property";
	$fieldToolTipsmst_item[""]["gold_property"] = "";
	$placeHoldersmst_item[""]["gold_property"] = "";
	$fieldLabelsmst_item[""]["Gram"] = "Gram";
	$fieldToolTipsmst_item[""]["Gram"] = "";
	$placeHoldersmst_item[""]["Gram"] = "";
	$fieldLabelsmst_item[""]["unit"] = "Unit";
	$fieldToolTipsmst_item[""]["unit"] = "";
	$placeHoldersmst_item[""]["unit"] = "";
	$fieldLabelsmst_item[""]["count"] = "Count";
	$fieldToolTipsmst_item[""]["count"] = "";
	$placeHoldersmst_item[""]["count"] = "";
	$fieldLabelsmst_item[""]["sum_nyuukin_price"] = "Sum Nyuukin Price";
	$fieldToolTipsmst_item[""]["sum_nyuukin_price"] = "";
	$placeHoldersmst_item[""]["sum_nyuukin_price"] = "";
	if (count($fieldToolTipsmst_item[""]))
		$tdatamst_item[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_item["English"] = array();
	$fieldToolTipsmst_item["English"] = array();
	$placeHoldersmst_item["English"] = array();
	$pageTitlesmst_item["English"] = array();
	$fieldLabelsmst_item["English"]["id"] = "Id";
	$fieldToolTipsmst_item["English"]["id"] = "";
	$placeHoldersmst_item["English"]["id"] = "";
	$fieldLabelsmst_item["English"]["name"] = "Name";
	$fieldToolTipsmst_item["English"]["name"] = "";
	$placeHoldersmst_item["English"]["name"] = "";
	$fieldLabelsmst_item["English"]["sort"] = "Sort";
	$fieldToolTipsmst_item["English"]["sort"] = "";
	$placeHoldersmst_item["English"]["sort"] = "";
	$fieldLabelsmst_item["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_item["English"]["update_at"] = "";
	$placeHoldersmst_item["English"]["update_at"] = "";
	$fieldLabelsmst_item["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_item["English"]["update_by"] = "";
	$placeHoldersmst_item["English"]["update_by"] = "";
	$fieldLabelsmst_item["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_item["English"]["create_at"] = "";
	$placeHoldersmst_item["English"]["create_at"] = "";
	$fieldLabelsmst_item["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_item["English"]["create_by"] = "";
	$placeHoldersmst_item["English"]["create_by"] = "";
	$fieldLabelsmst_item["English"]["line_category"] = "Line Category";
	$fieldToolTipsmst_item["English"]["line_category"] = "";
	$placeHoldersmst_item["English"]["line_category"] = "";
	$fieldLabelsmst_item["English"]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_item["English"]["yahoo_junle"] = "";
	$placeHoldersmst_item["English"]["yahoo_junle"] = "";
	$fieldLabelsmst_item["English"]["category_id"] = "Category Id";
	$fieldToolTipsmst_item["English"]["category_id"] = "";
	$placeHoldersmst_item["English"]["category_id"] = "";
	$fieldLabelsmst_item["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_item["English"]["sub_category_id1"] = "";
	$placeHoldersmst_item["English"]["sub_category_id1"] = "";
	$fieldLabelsmst_item["English"]["yahoo_kataban"] = "Yahoo Kataban";
	$fieldToolTipsmst_item["English"]["yahoo_kataban"] = "";
	$placeHoldersmst_item["English"]["yahoo_kataban"] = "";
	$fieldLabelsmst_item["English"]["url"] = "Url";
	$fieldToolTipsmst_item["English"]["url"] = "";
	$placeHoldersmst_item["English"]["url"] = "";
	$fieldLabelsmst_item["English"]["yahoo_sankou_uwadai"] = "Yahoo Sankou Uwadai";
	$fieldToolTipsmst_item["English"]["yahoo_sankou_uwadai"] = "";
	$placeHoldersmst_item["English"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelsmst_item["English"]["gold_property"] = "Gold Property";
	$fieldToolTipsmst_item["English"]["gold_property"] = "";
	$placeHoldersmst_item["English"]["gold_property"] = "";
	$fieldLabelsmst_item["English"]["Gram"] = "Gram";
	$fieldToolTipsmst_item["English"]["Gram"] = "";
	$placeHoldersmst_item["English"]["Gram"] = "";
	$fieldLabelsmst_item["English"]["unit"] = "Unit";
	$fieldToolTipsmst_item["English"]["unit"] = "";
	$placeHoldersmst_item["English"]["unit"] = "";
	$fieldLabelsmst_item["English"]["count"] = "Count";
	$fieldToolTipsmst_item["English"]["count"] = "";
	$placeHoldersmst_item["English"]["count"] = "";
	$fieldLabelsmst_item["English"]["sum_nyuukin_price"] = "Sum Nyuukin Price";
	$fieldToolTipsmst_item["English"]["sum_nyuukin_price"] = "";
	$placeHoldersmst_item["English"]["sum_nyuukin_price"] = "";
	if (count($fieldToolTipsmst_item["English"]))
		$tdatamst_item[".isUseToolTips"] = true;
}


	$tdatamst_item[".NCSearch"] = true;



$tdatamst_item[".shortTableName"] = "mst_item";
$tdatamst_item[".nSecOptions"] = 0;
$tdatamst_item[".recsPerRowPrint"] = 1;
$tdatamst_item[".mainTableOwnerID"] = "";
$tdatamst_item[".moveNext"] = 1;
$tdatamst_item[".entityType"] = 0;

$tdatamst_item[".strOriginalTableName"] = "mst_item";

	



$tdatamst_item[".showAddInPopup"] = false;

$tdatamst_item[".showEditInPopup"] = false;

$tdatamst_item[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_item[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_item[".fieldsForRegister"] = array();

$tdatamst_item[".listAjax"] = false;

	$tdatamst_item[".audit"] = true;

	$tdatamst_item[".locking"] = false;



$tdatamst_item[".list"] = true;

$tdatamst_item[".inlineEdit"] = true;


$tdatamst_item[".reorderRecordsByHeader"] = true;



$tdatamst_item[".inlineAdd"] = true;

$tdatamst_item[".import"] = true;

$tdatamst_item[".exportTo"] = true;


$tdatamst_item[".delete"] = true;

$tdatamst_item[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_item[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_item[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_item[".searchSaving"] = false;
//

$tdatamst_item[".showSearchPanel"] = true;
		$tdatamst_item[".flexibleSearch"] = true;

$tdatamst_item[".isUseAjaxSuggest"] = true;

$tdatamst_item[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_item[".ajaxCodeSnippetAdded"] = false;

$tdatamst_item[".buttonsAdded"] = false;

$tdatamst_item[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_item[".isUseTimeForSearch"] = false;





$tdatamst_item[".allSearchFields"] = array();
$tdatamst_item[".filterFields"] = array();
$tdatamst_item[".requiredSearchFields"] = array();

$tdatamst_item[".allSearchFields"][] = "id";
	$tdatamst_item[".allSearchFields"][] = "count";
	$tdatamst_item[".allSearchFields"][] = "sum_nyuukin_price";
	$tdatamst_item[".allSearchFields"][] = "name";
	$tdatamst_item[".allSearchFields"][] = "sort";
	$tdatamst_item[".allSearchFields"][] = "line_category";
	$tdatamst_item[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_item[".allSearchFields"][] = "yahoo_kataban";
	$tdatamst_item[".allSearchFields"][] = "category_id";
	$tdatamst_item[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_item[".allSearchFields"][] = "gold_property";
	$tdatamst_item[".allSearchFields"][] = "Gram";
	$tdatamst_item[".allSearchFields"][] = "unit";
	$tdatamst_item[".allSearchFields"][] = "url";
	$tdatamst_item[".allSearchFields"][] = "yahoo_sankou_uwadai";
	$tdatamst_item[".allSearchFields"][] = "update_at";
	$tdatamst_item[".allSearchFields"][] = "update_by";
	$tdatamst_item[".allSearchFields"][] = "create_at";
	$tdatamst_item[".allSearchFields"][] = "create_by";
	

$tdatamst_item[".googleLikeFields"] = array();
$tdatamst_item[".googleLikeFields"][] = "id";
$tdatamst_item[".googleLikeFields"][] = "name";
$tdatamst_item[".googleLikeFields"][] = "sort";
$tdatamst_item[".googleLikeFields"][] = "update_at";
$tdatamst_item[".googleLikeFields"][] = "update_by";
$tdatamst_item[".googleLikeFields"][] = "create_at";
$tdatamst_item[".googleLikeFields"][] = "create_by";
$tdatamst_item[".googleLikeFields"][] = "line_category";
$tdatamst_item[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_item[".googleLikeFields"][] = "category_id";
$tdatamst_item[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_item[".googleLikeFields"][] = "yahoo_kataban";
$tdatamst_item[".googleLikeFields"][] = "url";
$tdatamst_item[".googleLikeFields"][] = "yahoo_sankou_uwadai";
$tdatamst_item[".googleLikeFields"][] = "gold_property";
$tdatamst_item[".googleLikeFields"][] = "Gram";
$tdatamst_item[".googleLikeFields"][] = "unit";
$tdatamst_item[".googleLikeFields"][] = "count";
$tdatamst_item[".googleLikeFields"][] = "sum_nyuukin_price";

$tdatamst_item[".panelSearchFields"] = array();
$tdatamst_item[".searchPanelOptions"] = array();
$tdatamst_item[".panelSearchFields"][] = "name";
	$tdatamst_item[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_item[".advSearchFields"] = array();
$tdatamst_item[".advSearchFields"][] = "id";
$tdatamst_item[".advSearchFields"][] = "count";
$tdatamst_item[".advSearchFields"][] = "sum_nyuukin_price";
$tdatamst_item[".advSearchFields"][] = "name";
$tdatamst_item[".advSearchFields"][] = "sort";
$tdatamst_item[".advSearchFields"][] = "line_category";
$tdatamst_item[".advSearchFields"][] = "yahoo_junle";
$tdatamst_item[".advSearchFields"][] = "yahoo_kataban";
$tdatamst_item[".advSearchFields"][] = "category_id";
$tdatamst_item[".advSearchFields"][] = "sub_category_id1";
$tdatamst_item[".advSearchFields"][] = "gold_property";
$tdatamst_item[".advSearchFields"][] = "Gram";
$tdatamst_item[".advSearchFields"][] = "unit";
$tdatamst_item[".advSearchFields"][] = "url";
$tdatamst_item[".advSearchFields"][] = "yahoo_sankou_uwadai";
$tdatamst_item[".advSearchFields"][] = "update_at";
$tdatamst_item[".advSearchFields"][] = "update_by";
$tdatamst_item[".advSearchFields"][] = "create_at";
$tdatamst_item[".advSearchFields"][] = "create_by";

$tdatamst_item[".tableType"] = "list";

$tdatamst_item[".printerPageOrientation"] = 0;
$tdatamst_item[".nPrinterPageScale"] = 100;

$tdatamst_item[".nPrinterSplitRecords"] = 40;

$tdatamst_item[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_item[".geocodingEnabled"] = false;





$tdatamst_item[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_item[".pageSize"] = 500;

$tdatamst_item[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `mst_item`.`id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_item[".strOrderBy"] = $tstrOrderBy;

$tdatamst_item[".orderindexes"] = array();
$tdatamst_item[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`mst_item`.`id`");

$tdatamst_item[".sqlHead"] = "SELECT `mst_item`.`id`,  `mst_item`.`name`,  `mst_item`.`sort`,  `mst_item`.`update_at`,  `mst_item`.`update_by`,  `mst_item`.`create_at`,  `mst_item`.`create_by`,  `mst_item`.`line_category`,  `mst_item`.`yahoo_junle`,  `mst_item`.`category_id`,  `mst_item`.`sub_category_id1`,  `mst_item`.`yahoo_kataban`,  `mst_item`.`url`,  `mst_item`.`yahoo_sankou_uwadai`,  `mst_item`.`gold_property`,  `mst_item`.`Gram`,  `mst_item`.`unit`,  `line_report`.`count`,  `line_report`.`sum_nyuukin_price`";
$tdatamst_item[".sqlFrom"] = "FROM `mst_item`  LEFT OUTER JOIN `line_report` ON `mst_item`.`name` = `line_report`.`line`";
$tdatamst_item[".sqlWhereExpr"] = "";
$tdatamst_item[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_item[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_item[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_item[".highlightSearchResults"] = true;

$tableKeysmst_item = array();
$tableKeysmst_item[] = "id";
$tdatamst_item[".Keys"] = $tableKeysmst_item;

$tdatamst_item[".listFields"] = array();
$tdatamst_item[".listFields"][] = "id";
$tdatamst_item[".listFields"][] = "count";
$tdatamst_item[".listFields"][] = "sum_nyuukin_price";
$tdatamst_item[".listFields"][] = "name";
$tdatamst_item[".listFields"][] = "sort";
$tdatamst_item[".listFields"][] = "line_category";
$tdatamst_item[".listFields"][] = "yahoo_junle";
$tdatamst_item[".listFields"][] = "yahoo_kataban";
$tdatamst_item[".listFields"][] = "category_id";
$tdatamst_item[".listFields"][] = "sub_category_id1";
$tdatamst_item[".listFields"][] = "gold_property";
$tdatamst_item[".listFields"][] = "Gram";
$tdatamst_item[".listFields"][] = "unit";
$tdatamst_item[".listFields"][] = "url";
$tdatamst_item[".listFields"][] = "yahoo_sankou_uwadai";
$tdatamst_item[".listFields"][] = "update_at";
$tdatamst_item[".listFields"][] = "update_by";
$tdatamst_item[".listFields"][] = "create_at";
$tdatamst_item[".listFields"][] = "create_by";

$tdatamst_item[".hideMobileList"] = array();


$tdatamst_item[".viewFields"] = array();

$tdatamst_item[".addFields"] = array();

$tdatamst_item[".masterListFields"] = array();
$tdatamst_item[".masterListFields"][] = "id";
$tdatamst_item[".masterListFields"][] = "count";
$tdatamst_item[".masterListFields"][] = "sum_nyuukin_price";
$tdatamst_item[".masterListFields"][] = "name";
$tdatamst_item[".masterListFields"][] = "sort";
$tdatamst_item[".masterListFields"][] = "line_category";
$tdatamst_item[".masterListFields"][] = "yahoo_junle";
$tdatamst_item[".masterListFields"][] = "yahoo_kataban";
$tdatamst_item[".masterListFields"][] = "category_id";
$tdatamst_item[".masterListFields"][] = "sub_category_id1";
$tdatamst_item[".masterListFields"][] = "gold_property";
$tdatamst_item[".masterListFields"][] = "Gram";
$tdatamst_item[".masterListFields"][] = "unit";
$tdatamst_item[".masterListFields"][] = "url";
$tdatamst_item[".masterListFields"][] = "yahoo_sankou_uwadai";
$tdatamst_item[".masterListFields"][] = "update_at";
$tdatamst_item[".masterListFields"][] = "update_by";
$tdatamst_item[".masterListFields"][] = "create_at";
$tdatamst_item[".masterListFields"][] = "create_by";

$tdatamst_item[".inlineAddFields"] = array();
$tdatamst_item[".inlineAddFields"][] = "name";
$tdatamst_item[".inlineAddFields"][] = "sort";
$tdatamst_item[".inlineAddFields"][] = "line_category";
$tdatamst_item[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_item[".inlineAddFields"][] = "yahoo_kataban";
$tdatamst_item[".inlineAddFields"][] = "category_id";
$tdatamst_item[".inlineAddFields"][] = "sub_category_id1";
$tdatamst_item[".inlineAddFields"][] = "gold_property";
$tdatamst_item[".inlineAddFields"][] = "Gram";
$tdatamst_item[".inlineAddFields"][] = "unit";
$tdatamst_item[".inlineAddFields"][] = "url";
$tdatamst_item[".inlineAddFields"][] = "yahoo_sankou_uwadai";

$tdatamst_item[".editFields"] = array();

$tdatamst_item[".inlineEditFields"] = array();
$tdatamst_item[".inlineEditFields"][] = "name";
$tdatamst_item[".inlineEditFields"][] = "sort";
$tdatamst_item[".inlineEditFields"][] = "line_category";
$tdatamst_item[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_item[".inlineEditFields"][] = "yahoo_kataban";
$tdatamst_item[".inlineEditFields"][] = "category_id";
$tdatamst_item[".inlineEditFields"][] = "sub_category_id1";
$tdatamst_item[".inlineEditFields"][] = "gold_property";
$tdatamst_item[".inlineEditFields"][] = "Gram";
$tdatamst_item[".inlineEditFields"][] = "unit";
$tdatamst_item[".inlineEditFields"][] = "url";
$tdatamst_item[".inlineEditFields"][] = "yahoo_sankou_uwadai";

$tdatamst_item[".updateSelectedFields"] = array();


$tdatamst_item[".exportFields"] = array();
$tdatamst_item[".exportFields"][] = "id";
$tdatamst_item[".exportFields"][] = "count";
$tdatamst_item[".exportFields"][] = "sum_nyuukin_price";
$tdatamst_item[".exportFields"][] = "name";
$tdatamst_item[".exportFields"][] = "sort";
$tdatamst_item[".exportFields"][] = "line_category";
$tdatamst_item[".exportFields"][] = "yahoo_junle";
$tdatamst_item[".exportFields"][] = "yahoo_kataban";
$tdatamst_item[".exportFields"][] = "category_id";
$tdatamst_item[".exportFields"][] = "sub_category_id1";
$tdatamst_item[".exportFields"][] = "gold_property";
$tdatamst_item[".exportFields"][] = "Gram";
$tdatamst_item[".exportFields"][] = "unit";
$tdatamst_item[".exportFields"][] = "url";
$tdatamst_item[".exportFields"][] = "yahoo_sankou_uwadai";
$tdatamst_item[".exportFields"][] = "update_at";
$tdatamst_item[".exportFields"][] = "update_by";
$tdatamst_item[".exportFields"][] = "create_at";
$tdatamst_item[".exportFields"][] = "create_by";

$tdatamst_item[".importFields"] = array();
$tdatamst_item[".importFields"][] = "id";
$tdatamst_item[".importFields"][] = "name";
$tdatamst_item[".importFields"][] = "sort";
$tdatamst_item[".importFields"][] = "update_at";
$tdatamst_item[".importFields"][] = "update_by";
$tdatamst_item[".importFields"][] = "create_at";
$tdatamst_item[".importFields"][] = "create_by";
$tdatamst_item[".importFields"][] = "line_category";
$tdatamst_item[".importFields"][] = "yahoo_junle";
$tdatamst_item[".importFields"][] = "category_id";
$tdatamst_item[".importFields"][] = "sub_category_id1";
$tdatamst_item[".importFields"][] = "yahoo_kataban";
$tdatamst_item[".importFields"][] = "url";
$tdatamst_item[".importFields"][] = "yahoo_sankou_uwadai";
$tdatamst_item[".importFields"][] = "gold_property";
$tdatamst_item[".importFields"][] = "Gram";
$tdatamst_item[".importFields"][] = "unit";

$tdatamst_item[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_item";
	$fdata["Label"] = GetFieldLabel("mst_item","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item`.`id`";

	
	
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




	$tdatamst_item["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_item";
	$fdata["Label"] = GetFieldLabel("mst_item","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item`.`name`";

	
	
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




	$tdatamst_item["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_item";
	$fdata["Label"] = GetFieldLabel("mst_item","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item`.`sort`";

	
	
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




	$tdatamst_item["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_item";
	$fdata["Label"] = GetFieldLabel("mst_item","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item`.`update_at`";

	
	
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




	$tdatamst_item["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_item";
	$fdata["Label"] = GetFieldLabel("mst_item","update_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item`.`update_by`";

	
	
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




	$tdatamst_item["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_item";
	$fdata["Label"] = GetFieldLabel("mst_item","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item`.`create_at`";

	
	
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




	$tdatamst_item["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_item";
	$fdata["Label"] = GetFieldLabel("mst_item","create_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item`.`create_by`";

	
	
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




	$tdatamst_item["create_by"] = $fdata;
//	line_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "line_category";
	$fdata["GoodName"] = "line_category";
	$fdata["ownerTable"] = "mst_item";
	$fdata["Label"] = GetFieldLabel("mst_item","line_category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "line_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item`.`line_category`";

	
	
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
	$edata["LookupTable"] = "mst_line";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "line_category";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "line_category";

	
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




	$tdatamst_item["line_category"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_item";
	$fdata["Label"] = GetFieldLabel("mst_item","yahoo_junle");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_junle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item`.`yahoo_junle`";

	
	
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

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
	
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




	$tdatamst_item["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_item";
	$fdata["Label"] = GetFieldLabel("mst_item","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item`.`category_id`";

	
	
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




	$tdatamst_item["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_item";
	$fdata["Label"] = GetFieldLabel("mst_item","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_category_id1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item`.`sub_category_id1`";

	
	
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




	$tdatamst_item["sub_category_id1"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "mst_item";
	$fdata["Label"] = GetFieldLabel("mst_item","yahoo_kataban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_kataban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item`.`yahoo_kataban`";

	
	
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




	$tdatamst_item["yahoo_kataban"] = $fdata;
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "mst_item";
	$fdata["Label"] = GetFieldLabel("mst_item","url");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item`.`url`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
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




	$tdatamst_item["url"] = $fdata;
//	yahoo_sankou_uwadai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "yahoo_sankou_uwadai";
	$fdata["GoodName"] = "yahoo_sankou_uwadai";
	$fdata["ownerTable"] = "mst_item";
	$fdata["Label"] = GetFieldLabel("mst_item","yahoo_sankou_uwadai");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sankou_uwadai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item`.`yahoo_sankou_uwadai`";

	
	
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
			$edata["EditParams"].= " maxlength=128";

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




	$tdatamst_item["yahoo_sankou_uwadai"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "mst_item";
	$fdata["Label"] = GetFieldLabel("mst_item","gold_property");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gold_property";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item`.`gold_property`";

	
	
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
	$edata["LookupTable"] = "mst_gold_property";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "val";

	
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




	$tdatamst_item["gold_property"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "mst_item";
	$fdata["Label"] = GetFieldLabel("mst_item","Gram");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item`.`Gram`";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdatamst_item["Gram"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "mst_item";
	$fdata["Label"] = GetFieldLabel("mst_item","unit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item`.`unit`";

	
	
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
	$edata["LookupTable"] = "mst_unit";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
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




	$tdatamst_item["unit"] = $fdata;
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "line_report";
	$fdata["Label"] = GetFieldLabel("mst_item","count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`line_report`.`count`";

	
	
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




	$tdatamst_item["count"] = $fdata;
//	sum_nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "sum_nyuukin_price";
	$fdata["GoodName"] = "sum_nyuukin_price";
	$fdata["ownerTable"] = "line_report";
	$fdata["Label"] = GetFieldLabel("mst_item","sum_nyuukin_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sum_nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`line_report`.`sum_nyuukin_price`";

	
	
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




	$tdatamst_item["sum_nyuukin_price"] = $fdata;


$tables_data["mst_item"]=&$tdatamst_item;
$field_labels["mst_item"] = &$fieldLabelsmst_item;
$fieldToolTips["mst_item"] = &$fieldToolTipsmst_item;
$placeHolders["mst_item"] = &$placeHoldersmst_item;
$page_titles["mst_item"] = &$pageTitlesmst_item;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_item"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_item"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_item()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`mst_item`.`id`,  `mst_item`.`name`,  `mst_item`.`sort`,  `mst_item`.`update_at`,  `mst_item`.`update_by`,  `mst_item`.`create_at`,  `mst_item`.`create_by`,  `mst_item`.`line_category`,  `mst_item`.`yahoo_junle`,  `mst_item`.`category_id`,  `mst_item`.`sub_category_id1`,  `mst_item`.`yahoo_kataban`,  `mst_item`.`url`,  `mst_item`.`yahoo_sankou_uwadai`,  `mst_item`.`gold_property`,  `mst_item`.`Gram`,  `mst_item`.`unit`,  `line_report`.`count`,  `line_report`.`sum_nyuukin_price`";
$proto0["m_strFrom"] = "FROM `mst_item`  LEFT OUTER JOIN `line_report` ON `mst_item`.`name` = `line_report`.`line`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `mst_item`.`id` DESC";
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
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto6["m_sql"] = "`mst_item`.`id`";
$proto6["m_srcTableName"] = "mst_item";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto8["m_sql"] = "`mst_item`.`name`";
$proto8["m_srcTableName"] = "mst_item";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto10["m_sql"] = "`mst_item`.`sort`";
$proto10["m_srcTableName"] = "mst_item";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto12["m_sql"] = "`mst_item`.`update_at`";
$proto12["m_srcTableName"] = "mst_item";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto14["m_sql"] = "`mst_item`.`update_by`";
$proto14["m_srcTableName"] = "mst_item";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto16["m_sql"] = "`mst_item`.`create_at`";
$proto16["m_srcTableName"] = "mst_item";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto18["m_sql"] = "`mst_item`.`create_by`";
$proto18["m_srcTableName"] = "mst_item";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "line_category",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto20["m_sql"] = "`mst_item`.`line_category`";
$proto20["m_srcTableName"] = "mst_item";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto22["m_sql"] = "`mst_item`.`yahoo_junle`";
$proto22["m_srcTableName"] = "mst_item";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto24["m_sql"] = "`mst_item`.`category_id`";
$proto24["m_srcTableName"] = "mst_item";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto26["m_sql"] = "`mst_item`.`sub_category_id1`";
$proto26["m_srcTableName"] = "mst_item";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto28["m_sql"] = "`mst_item`.`yahoo_kataban`";
$proto28["m_srcTableName"] = "mst_item";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "url",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto30["m_sql"] = "`mst_item`.`url`";
$proto30["m_srcTableName"] = "mst_item";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sankou_uwadai",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto32["m_sql"] = "`mst_item`.`yahoo_sankou_uwadai`";
$proto32["m_srcTableName"] = "mst_item";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto34["m_sql"] = "`mst_item`.`gold_property`";
$proto34["m_srcTableName"] = "mst_item";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto36["m_sql"] = "`mst_item`.`Gram`";
$proto36["m_srcTableName"] = "mst_item";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto38["m_sql"] = "`mst_item`.`unit`";
$proto38["m_srcTableName"] = "mst_item";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "count",
	"m_strTable" => "line_report",
	"m_srcTableName" => "mst_item"
));

$proto40["m_sql"] = "`line_report`.`count`";
$proto40["m_srcTableName"] = "mst_item";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "sum_nyuukin_price",
	"m_strTable" => "line_report",
	"m_srcTableName" => "mst_item"
));

$proto42["m_sql"] = "`line_report`.`sum_nyuukin_price`";
$proto42["m_srcTableName"] = "mst_item";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "mst_item";
$proto45["m_srcTableName"] = "mst_item";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id";
$proto45["m_columns"][] = "name";
$proto45["m_columns"][] = "sort";
$proto45["m_columns"][] = "update_at";
$proto45["m_columns"][] = "update_by";
$proto45["m_columns"][] = "create_at";
$proto45["m_columns"][] = "create_by";
$proto45["m_columns"][] = "line_category";
$proto45["m_columns"][] = "yahoo_junle";
$proto45["m_columns"][] = "category_id";
$proto45["m_columns"][] = "sub_category_id1";
$proto45["m_columns"][] = "yahoo_kataban";
$proto45["m_columns"][] = "url";
$proto45["m_columns"][] = "yahoo_sankou_uwadai";
$proto45["m_columns"][] = "gold_property";
$proto45["m_columns"][] = "Gram";
$proto45["m_columns"][] = "unit";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "`mst_item`";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "mst_item";
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
												$proto48=array();
$proto48["m_link"] = "SQLL_LEFTJOIN";
			$proto49=array();
$proto49["m_strName"] = "line_report";
$proto49["m_srcTableName"] = "mst_item";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id";
$proto49["m_columns"][] = "count";
$proto49["m_columns"][] = "sum_nyuukin_price";
$proto49["m_columns"][] = "profit_rate";
$proto49["m_columns"][] = "created_at";
$proto49["m_columns"][] = "updated_at";
$proto49["m_columns"][] = "line";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "LEFT OUTER JOIN `line_report` ON `mst_item`.`name` = `line_report`.`line`";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "mst_item";
$proto50=array();
$proto50["m_sql"] = "`mst_item`.`name` = `line_report`.`line`";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "= `line_report`.`line`";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_item",
	"m_srcTableName" => "mst_item"
));

$proto52["m_column"]=$obj;
$proto52["m_bAsc"] = 0;
$proto52["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto52);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_item";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_item = createSqlQuery_mst_item();


	
		;

																			

$tdatamst_item[".sqlquery"] = $queryData_mst_item;

include_once(getabspath("include/mst_item_events.php"));
$tableEvents["mst_item"] = new eventclass_mst_item;
$tdatamst_item[".hasEvents"] = true;

?>