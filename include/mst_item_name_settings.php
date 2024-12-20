<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_item_name = array();
	$tdatamst_item_name[".truncateText"] = true;
	$tdatamst_item_name[".NumberOfChars"] = 80;
	$tdatamst_item_name[".ShortName"] = "mst_item_name";
	$tdatamst_item_name[".OwnerID"] = "";
	$tdatamst_item_name[".OriginalTable"] = "mst_item_name";

//	field labels
$fieldLabelsmst_item_name = array();
$fieldToolTipsmst_item_name = array();
$pageTitlesmst_item_name = array();
$placeHoldersmst_item_name = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_item_name["Japanese"] = array();
	$fieldToolTipsmst_item_name["Japanese"] = array();
	$placeHoldersmst_item_name["Japanese"] = array();
	$pageTitlesmst_item_name["Japanese"] = array();
	$fieldLabelsmst_item_name["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_item_name["Japanese"]["id"] = "";
	$placeHoldersmst_item_name["Japanese"]["id"] = "";
	$fieldLabelsmst_item_name["Japanese"]["name"] = "Name";
	$fieldToolTipsmst_item_name["Japanese"]["name"] = "";
	$placeHoldersmst_item_name["Japanese"]["name"] = "";
	$fieldLabelsmst_item_name["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_item_name["Japanese"]["sort"] = "";
	$placeHoldersmst_item_name["Japanese"]["sort"] = "";
	$fieldLabelsmst_item_name["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_item_name["Japanese"]["update_at"] = "";
	$placeHoldersmst_item_name["Japanese"]["update_at"] = "";
	$fieldLabelsmst_item_name["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_item_name["Japanese"]["update_by"] = "";
	$placeHoldersmst_item_name["Japanese"]["update_by"] = "";
	$fieldLabelsmst_item_name["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_item_name["Japanese"]["create_at"] = "";
	$placeHoldersmst_item_name["Japanese"]["create_at"] = "";
	$fieldLabelsmst_item_name["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_item_name["Japanese"]["create_by"] = "";
	$placeHoldersmst_item_name["Japanese"]["create_by"] = "";
	$fieldLabelsmst_item_name["Japanese"]["yahoo_junle"] = "ブランドID";
	$fieldToolTipsmst_item_name["Japanese"]["yahoo_junle"] = "";
	$placeHoldersmst_item_name["Japanese"]["yahoo_junle"] = "";
	$fieldLabelsmst_item_name["Japanese"]["category_id"] = "大カテ";
	$fieldToolTipsmst_item_name["Japanese"]["category_id"] = "";
	$placeHoldersmst_item_name["Japanese"]["category_id"] = "";
	$fieldLabelsmst_item_name["Japanese"]["sub_category_id1"] = "中カテ";
	$fieldToolTipsmst_item_name["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmst_item_name["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmst_item_name["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipsmst_item_name["Japanese"]["yahoo_kataban"] = "";
	$placeHoldersmst_item_name["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelsmst_item_name["Japanese"]["url"] = "URL";
	$fieldToolTipsmst_item_name["Japanese"]["url"] = "";
	$placeHoldersmst_item_name["Japanese"]["url"] = "";
	$fieldLabelsmst_item_name["Japanese"]["yahoo_sankou_uwadai"] = "参考上代";
	$fieldToolTipsmst_item_name["Japanese"]["yahoo_sankou_uwadai"] = "";
	$placeHoldersmst_item_name["Japanese"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelsmst_item_name["Japanese"]["gold_property"] = "金性";
	$fieldToolTipsmst_item_name["Japanese"]["gold_property"] = "";
	$placeHoldersmst_item_name["Japanese"]["gold_property"] = "";
	$fieldLabelsmst_item_name["Japanese"]["Gram"] = "金性グラム";
	$fieldToolTipsmst_item_name["Japanese"]["Gram"] = "";
	$placeHoldersmst_item_name["Japanese"]["Gram"] = "";
	$fieldLabelsmst_item_name["Japanese"]["unit"] = "単位";
	$fieldToolTipsmst_item_name["Japanese"]["unit"] = "";
	$placeHoldersmst_item_name["Japanese"]["unit"] = "";
	$fieldLabelsmst_item_name["Japanese"]["line"] = "ライン";
	$fieldToolTipsmst_item_name["Japanese"]["line"] = "";
	$placeHoldersmst_item_name["Japanese"]["line"] = "";
	$fieldLabelsmst_item_name["Japanese"]["count"] = "商品件数";
	$fieldToolTipsmst_item_name["Japanese"]["count"] = "";
	$placeHoldersmst_item_name["Japanese"]["count"] = "";
	$fieldLabelsmst_item_name["Japanese"]["sum_nyuukin_price"] = "入金総額";
	$fieldToolTipsmst_item_name["Japanese"]["sum_nyuukin_price"] = "";
	$placeHoldersmst_item_name["Japanese"]["sum_nyuukin_price"] = "";
	if (count($fieldToolTipsmst_item_name["Japanese"]))
		$tdatamst_item_name[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_item_name[""] = array();
	$fieldToolTipsmst_item_name[""] = array();
	$placeHoldersmst_item_name[""] = array();
	$pageTitlesmst_item_name[""] = array();
	$fieldLabelsmst_item_name[""]["id"] = "Id";
	$fieldToolTipsmst_item_name[""]["id"] = "";
	$placeHoldersmst_item_name[""]["id"] = "";
	$fieldLabelsmst_item_name[""]["name"] = "Name";
	$fieldToolTipsmst_item_name[""]["name"] = "";
	$placeHoldersmst_item_name[""]["name"] = "";
	$fieldLabelsmst_item_name[""]["sort"] = "Sort";
	$fieldToolTipsmst_item_name[""]["sort"] = "";
	$placeHoldersmst_item_name[""]["sort"] = "";
	$fieldLabelsmst_item_name[""]["update_at"] = "Update At";
	$fieldToolTipsmst_item_name[""]["update_at"] = "";
	$placeHoldersmst_item_name[""]["update_at"] = "";
	$fieldLabelsmst_item_name[""]["update_by"] = "Update By";
	$fieldToolTipsmst_item_name[""]["update_by"] = "";
	$placeHoldersmst_item_name[""]["update_by"] = "";
	$fieldLabelsmst_item_name[""]["create_at"] = "Create At";
	$fieldToolTipsmst_item_name[""]["create_at"] = "";
	$placeHoldersmst_item_name[""]["create_at"] = "";
	$fieldLabelsmst_item_name[""]["create_by"] = "Create By";
	$fieldToolTipsmst_item_name[""]["create_by"] = "";
	$placeHoldersmst_item_name[""]["create_by"] = "";
	$fieldLabelsmst_item_name[""]["yahoo_junle"] = "Yahoo Junle";
	$fieldToolTipsmst_item_name[""]["yahoo_junle"] = "";
	$placeHoldersmst_item_name[""]["yahoo_junle"] = "";
	$fieldLabelsmst_item_name[""]["category_id"] = "Category Id";
	$fieldToolTipsmst_item_name[""]["category_id"] = "";
	$placeHoldersmst_item_name[""]["category_id"] = "";
	$fieldLabelsmst_item_name[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsmst_item_name[""]["sub_category_id1"] = "";
	$placeHoldersmst_item_name[""]["sub_category_id1"] = "";
	$fieldLabelsmst_item_name[""]["yahoo_kataban"] = "Yahoo Kataban";
	$fieldToolTipsmst_item_name[""]["yahoo_kataban"] = "";
	$placeHoldersmst_item_name[""]["yahoo_kataban"] = "";
	$fieldLabelsmst_item_name[""]["url"] = "Url";
	$fieldToolTipsmst_item_name[""]["url"] = "";
	$placeHoldersmst_item_name[""]["url"] = "";
	$fieldLabelsmst_item_name[""]["yahoo_sankou_uwadai"] = "Yahoo Sankou Uwadai";
	$fieldToolTipsmst_item_name[""]["yahoo_sankou_uwadai"] = "";
	$placeHoldersmst_item_name[""]["yahoo_sankou_uwadai"] = "";
	$fieldLabelsmst_item_name[""]["gold_property"] = "Gold Property";
	$fieldToolTipsmst_item_name[""]["gold_property"] = "";
	$placeHoldersmst_item_name[""]["gold_property"] = "";
	$fieldLabelsmst_item_name[""]["Gram"] = "Gram";
	$fieldToolTipsmst_item_name[""]["Gram"] = "";
	$placeHoldersmst_item_name[""]["Gram"] = "";
	$fieldLabelsmst_item_name[""]["unit"] = "Unit";
	$fieldToolTipsmst_item_name[""]["unit"] = "";
	$placeHoldersmst_item_name[""]["unit"] = "";
	$fieldLabelsmst_item_name[""]["line"] = "Line";
	$fieldToolTipsmst_item_name[""]["line"] = "";
	$placeHoldersmst_item_name[""]["line"] = "";
	$fieldLabelsmst_item_name[""]["count"] = "Count";
	$fieldToolTipsmst_item_name[""]["count"] = "";
	$placeHoldersmst_item_name[""]["count"] = "";
	$fieldLabelsmst_item_name[""]["sum_nyuukin_price"] = "Sum Nyuukin Price";
	$fieldToolTipsmst_item_name[""]["sum_nyuukin_price"] = "";
	$placeHoldersmst_item_name[""]["sum_nyuukin_price"] = "";
	if (count($fieldToolTipsmst_item_name[""]))
		$tdatamst_item_name[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_item_name["English"] = array();
	$fieldToolTipsmst_item_name["English"] = array();
	$placeHoldersmst_item_name["English"] = array();
	$pageTitlesmst_item_name["English"] = array();
	$fieldLabelsmst_item_name["English"]["count"] = "Count";
	$fieldToolTipsmst_item_name["English"]["count"] = "";
	$placeHoldersmst_item_name["English"]["count"] = "";
	$fieldLabelsmst_item_name["English"]["sum_nyuukin_price"] = "Sum Nyuukin Price";
	$fieldToolTipsmst_item_name["English"]["sum_nyuukin_price"] = "";
	$placeHoldersmst_item_name["English"]["sum_nyuukin_price"] = "";
	if (count($fieldToolTipsmst_item_name["English"]))
		$tdatamst_item_name[".isUseToolTips"] = true;
}


	$tdatamst_item_name[".NCSearch"] = true;



$tdatamst_item_name[".shortTableName"] = "mst_item_name";
$tdatamst_item_name[".nSecOptions"] = 0;
$tdatamst_item_name[".recsPerRowPrint"] = 1;
$tdatamst_item_name[".mainTableOwnerID"] = "";
$tdatamst_item_name[".moveNext"] = 1;
$tdatamst_item_name[".entityType"] = 0;

$tdatamst_item_name[".strOriginalTableName"] = "mst_item_name";

	



$tdatamst_item_name[".showAddInPopup"] = false;

$tdatamst_item_name[".showEditInPopup"] = false;

$tdatamst_item_name[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_item_name[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_item_name[".fieldsForRegister"] = array();

$tdatamst_item_name[".listAjax"] = false;

	$tdatamst_item_name[".audit"] = true;

	$tdatamst_item_name[".locking"] = false;



$tdatamst_item_name[".list"] = true;

$tdatamst_item_name[".inlineEdit"] = true;


$tdatamst_item_name[".reorderRecordsByHeader"] = true;



$tdatamst_item_name[".inlineAdd"] = true;

$tdatamst_item_name[".import"] = true;

$tdatamst_item_name[".exportTo"] = true;


$tdatamst_item_name[".delete"] = true;

$tdatamst_item_name[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_item_name[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_item_name[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_item_name[".searchSaving"] = false;
//

$tdatamst_item_name[".showSearchPanel"] = true;
		$tdatamst_item_name[".flexibleSearch"] = true;

$tdatamst_item_name[".isUseAjaxSuggest"] = true;

$tdatamst_item_name[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_item_name[".ajaxCodeSnippetAdded"] = false;

$tdatamst_item_name[".buttonsAdded"] = false;

$tdatamst_item_name[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_item_name[".isUseTimeForSearch"] = false;





$tdatamst_item_name[".allSearchFields"] = array();
$tdatamst_item_name[".filterFields"] = array();
$tdatamst_item_name[".requiredSearchFields"] = array();

$tdatamst_item_name[".allSearchFields"][] = "count";
	$tdatamst_item_name[".allSearchFields"][] = "sum_nyuukin_price";
	$tdatamst_item_name[".allSearchFields"][] = "id";
	$tdatamst_item_name[".allSearchFields"][] = "name";
	$tdatamst_item_name[".allSearchFields"][] = "sort";
	$tdatamst_item_name[".allSearchFields"][] = "yahoo_junle";
	$tdatamst_item_name[".allSearchFields"][] = "yahoo_kataban";
	$tdatamst_item_name[".allSearchFields"][] = "category_id";
	$tdatamst_item_name[".allSearchFields"][] = "sub_category_id1";
	$tdatamst_item_name[".allSearchFields"][] = "gold_property";
	$tdatamst_item_name[".allSearchFields"][] = "Gram";
	$tdatamst_item_name[".allSearchFields"][] = "unit";
	$tdatamst_item_name[".allSearchFields"][] = "url";
	$tdatamst_item_name[".allSearchFields"][] = "yahoo_sankou_uwadai";
	$tdatamst_item_name[".allSearchFields"][] = "update_at";
	$tdatamst_item_name[".allSearchFields"][] = "update_by";
	$tdatamst_item_name[".allSearchFields"][] = "create_at";
	$tdatamst_item_name[".allSearchFields"][] = "create_by";
	

$tdatamst_item_name[".googleLikeFields"] = array();
$tdatamst_item_name[".googleLikeFields"][] = "id";
$tdatamst_item_name[".googleLikeFields"][] = "name";
$tdatamst_item_name[".googleLikeFields"][] = "sort";
$tdatamst_item_name[".googleLikeFields"][] = "update_at";
$tdatamst_item_name[".googleLikeFields"][] = "update_by";
$tdatamst_item_name[".googleLikeFields"][] = "create_at";
$tdatamst_item_name[".googleLikeFields"][] = "create_by";
$tdatamst_item_name[".googleLikeFields"][] = "yahoo_junle";
$tdatamst_item_name[".googleLikeFields"][] = "category_id";
$tdatamst_item_name[".googleLikeFields"][] = "sub_category_id1";
$tdatamst_item_name[".googleLikeFields"][] = "yahoo_kataban";
$tdatamst_item_name[".googleLikeFields"][] = "url";
$tdatamst_item_name[".googleLikeFields"][] = "yahoo_sankou_uwadai";
$tdatamst_item_name[".googleLikeFields"][] = "gold_property";
$tdatamst_item_name[".googleLikeFields"][] = "Gram";
$tdatamst_item_name[".googleLikeFields"][] = "unit";
$tdatamst_item_name[".googleLikeFields"][] = "line";
$tdatamst_item_name[".googleLikeFields"][] = "count";
$tdatamst_item_name[".googleLikeFields"][] = "sum_nyuukin_price";

$tdatamst_item_name[".panelSearchFields"] = array();
$tdatamst_item_name[".searchPanelOptions"] = array();
$tdatamst_item_name[".panelSearchFields"][] = "name";
	$tdatamst_item_name[".panelSearchFields"][] = "yahoo_junle";
	
$tdatamst_item_name[".advSearchFields"] = array();
$tdatamst_item_name[".advSearchFields"][] = "count";
$tdatamst_item_name[".advSearchFields"][] = "sum_nyuukin_price";
$tdatamst_item_name[".advSearchFields"][] = "id";
$tdatamst_item_name[".advSearchFields"][] = "name";
$tdatamst_item_name[".advSearchFields"][] = "sort";
$tdatamst_item_name[".advSearchFields"][] = "yahoo_junle";
$tdatamst_item_name[".advSearchFields"][] = "yahoo_kataban";
$tdatamst_item_name[".advSearchFields"][] = "category_id";
$tdatamst_item_name[".advSearchFields"][] = "sub_category_id1";
$tdatamst_item_name[".advSearchFields"][] = "gold_property";
$tdatamst_item_name[".advSearchFields"][] = "Gram";
$tdatamst_item_name[".advSearchFields"][] = "unit";
$tdatamst_item_name[".advSearchFields"][] = "url";
$tdatamst_item_name[".advSearchFields"][] = "yahoo_sankou_uwadai";
$tdatamst_item_name[".advSearchFields"][] = "update_at";
$tdatamst_item_name[".advSearchFields"][] = "update_by";
$tdatamst_item_name[".advSearchFields"][] = "create_at";
$tdatamst_item_name[".advSearchFields"][] = "create_by";

$tdatamst_item_name[".tableType"] = "list";

$tdatamst_item_name[".printerPageOrientation"] = 0;
$tdatamst_item_name[".nPrinterPageScale"] = 100;

$tdatamst_item_name[".nPrinterSplitRecords"] = 40;

$tdatamst_item_name[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_item_name[".geocodingEnabled"] = false;





$tdatamst_item_name[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_item_name[".pageSize"] = 500;

$tdatamst_item_name[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `mst_item_name`.`id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_item_name[".strOrderBy"] = $tstrOrderBy;

$tdatamst_item_name[".orderindexes"] = array();
$tdatamst_item_name[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`mst_item_name`.`id`");

$tdatamst_item_name[".sqlHead"] = "SELECT `mst_item_name`.`id`,  `mst_item_name`.`name`,  `mst_item_name`.`sort`,  `mst_item_name`.`update_at`,  `mst_item_name`.`update_by`,  `mst_item_name`.`create_at`,  `mst_item_name`.`create_by`,  `mst_item_name`.`yahoo_junle`,  `mst_item_name`.`category_id`,  `mst_item_name`.`sub_category_id1`,  `mst_item_name`.`yahoo_kataban`,  `mst_item_name`.`url`,  `mst_item_name`.`yahoo_sankou_uwadai`,  `mst_item_name`.`gold_property`,  `mst_item_name`.`Gram`,  `mst_item_name`.`unit`,  `mst_item_name`.`line`,  `mst_item_name_report`.`count`,  `mst_item_name_report`.`sum_nyuukin_price`";
$tdatamst_item_name[".sqlFrom"] = "FROM `mst_item_name`  LEFT OUTER JOIN `mst_item_name_report` ON `mst_item_name`.`name` = `mst_item_name_report`.`item_name`";
$tdatamst_item_name[".sqlWhereExpr"] = "";
$tdatamst_item_name[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_item_name[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_item_name[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_item_name[".highlightSearchResults"] = true;

$tableKeysmst_item_name = array();
$tableKeysmst_item_name[] = "id";
$tdatamst_item_name[".Keys"] = $tableKeysmst_item_name;

$tdatamst_item_name[".listFields"] = array();
$tdatamst_item_name[".listFields"][] = "id";
$tdatamst_item_name[".listFields"][] = "count";
$tdatamst_item_name[".listFields"][] = "sum_nyuukin_price";
$tdatamst_item_name[".listFields"][] = "name";
$tdatamst_item_name[".listFields"][] = "sort";
$tdatamst_item_name[".listFields"][] = "yahoo_junle";
$tdatamst_item_name[".listFields"][] = "yahoo_kataban";
$tdatamst_item_name[".listFields"][] = "category_id";
$tdatamst_item_name[".listFields"][] = "sub_category_id1";
$tdatamst_item_name[".listFields"][] = "gold_property";
$tdatamst_item_name[".listFields"][] = "Gram";
$tdatamst_item_name[".listFields"][] = "unit";
$tdatamst_item_name[".listFields"][] = "url";
$tdatamst_item_name[".listFields"][] = "yahoo_sankou_uwadai";
$tdatamst_item_name[".listFields"][] = "update_at";
$tdatamst_item_name[".listFields"][] = "update_by";
$tdatamst_item_name[".listFields"][] = "create_at";
$tdatamst_item_name[".listFields"][] = "create_by";

$tdatamst_item_name[".hideMobileList"] = array();


$tdatamst_item_name[".viewFields"] = array();

$tdatamst_item_name[".addFields"] = array();

$tdatamst_item_name[".masterListFields"] = array();
$tdatamst_item_name[".masterListFields"][] = "count";
$tdatamst_item_name[".masterListFields"][] = "sum_nyuukin_price";
$tdatamst_item_name[".masterListFields"][] = "id";
$tdatamst_item_name[".masterListFields"][] = "name";
$tdatamst_item_name[".masterListFields"][] = "sort";
$tdatamst_item_name[".masterListFields"][] = "line";
$tdatamst_item_name[".masterListFields"][] = "yahoo_junle";
$tdatamst_item_name[".masterListFields"][] = "yahoo_kataban";
$tdatamst_item_name[".masterListFields"][] = "category_id";
$tdatamst_item_name[".masterListFields"][] = "sub_category_id1";
$tdatamst_item_name[".masterListFields"][] = "gold_property";
$tdatamst_item_name[".masterListFields"][] = "Gram";
$tdatamst_item_name[".masterListFields"][] = "unit";
$tdatamst_item_name[".masterListFields"][] = "url";
$tdatamst_item_name[".masterListFields"][] = "yahoo_sankou_uwadai";
$tdatamst_item_name[".masterListFields"][] = "update_at";
$tdatamst_item_name[".masterListFields"][] = "update_by";
$tdatamst_item_name[".masterListFields"][] = "create_at";
$tdatamst_item_name[".masterListFields"][] = "create_by";

$tdatamst_item_name[".inlineAddFields"] = array();
$tdatamst_item_name[".inlineAddFields"][] = "name";
$tdatamst_item_name[".inlineAddFields"][] = "sort";
$tdatamst_item_name[".inlineAddFields"][] = "yahoo_junle";
$tdatamst_item_name[".inlineAddFields"][] = "yahoo_kataban";
$tdatamst_item_name[".inlineAddFields"][] = "category_id";
$tdatamst_item_name[".inlineAddFields"][] = "sub_category_id1";
$tdatamst_item_name[".inlineAddFields"][] = "gold_property";
$tdatamst_item_name[".inlineAddFields"][] = "Gram";
$tdatamst_item_name[".inlineAddFields"][] = "unit";
$tdatamst_item_name[".inlineAddFields"][] = "url";
$tdatamst_item_name[".inlineAddFields"][] = "yahoo_sankou_uwadai";

$tdatamst_item_name[".editFields"] = array();

$tdatamst_item_name[".inlineEditFields"] = array();
$tdatamst_item_name[".inlineEditFields"][] = "name";
$tdatamst_item_name[".inlineEditFields"][] = "sort";
$tdatamst_item_name[".inlineEditFields"][] = "yahoo_junle";
$tdatamst_item_name[".inlineEditFields"][] = "yahoo_kataban";
$tdatamst_item_name[".inlineEditFields"][] = "category_id";
$tdatamst_item_name[".inlineEditFields"][] = "sub_category_id1";
$tdatamst_item_name[".inlineEditFields"][] = "gold_property";
$tdatamst_item_name[".inlineEditFields"][] = "Gram";
$tdatamst_item_name[".inlineEditFields"][] = "unit";
$tdatamst_item_name[".inlineEditFields"][] = "url";
$tdatamst_item_name[".inlineEditFields"][] = "yahoo_sankou_uwadai";

$tdatamst_item_name[".updateSelectedFields"] = array();


$tdatamst_item_name[".exportFields"] = array();
$tdatamst_item_name[".exportFields"][] = "count";
$tdatamst_item_name[".exportFields"][] = "sum_nyuukin_price";
$tdatamst_item_name[".exportFields"][] = "id";
$tdatamst_item_name[".exportFields"][] = "name";
$tdatamst_item_name[".exportFields"][] = "sort";
$tdatamst_item_name[".exportFields"][] = "yahoo_junle";
$tdatamst_item_name[".exportFields"][] = "yahoo_kataban";
$tdatamst_item_name[".exportFields"][] = "category_id";
$tdatamst_item_name[".exportFields"][] = "sub_category_id1";
$tdatamst_item_name[".exportFields"][] = "gold_property";
$tdatamst_item_name[".exportFields"][] = "Gram";
$tdatamst_item_name[".exportFields"][] = "unit";
$tdatamst_item_name[".exportFields"][] = "url";
$tdatamst_item_name[".exportFields"][] = "yahoo_sankou_uwadai";
$tdatamst_item_name[".exportFields"][] = "update_at";
$tdatamst_item_name[".exportFields"][] = "update_by";
$tdatamst_item_name[".exportFields"][] = "create_at";
$tdatamst_item_name[".exportFields"][] = "create_by";

$tdatamst_item_name[".importFields"] = array();
$tdatamst_item_name[".importFields"][] = "id";
$tdatamst_item_name[".importFields"][] = "name";
$tdatamst_item_name[".importFields"][] = "sort";
$tdatamst_item_name[".importFields"][] = "update_at";
$tdatamst_item_name[".importFields"][] = "update_by";
$tdatamst_item_name[".importFields"][] = "create_at";
$tdatamst_item_name[".importFields"][] = "create_by";
$tdatamst_item_name[".importFields"][] = "yahoo_junle";
$tdatamst_item_name[".importFields"][] = "category_id";
$tdatamst_item_name[".importFields"][] = "sub_category_id1";
$tdatamst_item_name[".importFields"][] = "yahoo_kataban";
$tdatamst_item_name[".importFields"][] = "url";
$tdatamst_item_name[".importFields"][] = "yahoo_sankou_uwadai";
$tdatamst_item_name[".importFields"][] = "gold_property";
$tdatamst_item_name[".importFields"][] = "Gram";
$tdatamst_item_name[".importFields"][] = "unit";
$tdatamst_item_name[".importFields"][] = "count";
$tdatamst_item_name[".importFields"][] = "sum_nyuukin_price";

$tdatamst_item_name[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_item_name";
	$fdata["Label"] = GetFieldLabel("mst_item_name","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name`.`id`";

	
	
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




	$tdatamst_item_name["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_item_name";
	$fdata["Label"] = GetFieldLabel("mst_item_name","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name`.`name`";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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




	$tdatamst_item_name["name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_item_name";
	$fdata["Label"] = GetFieldLabel("mst_item_name","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name`.`sort`";

	
	
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




	$tdatamst_item_name["sort"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_item_name";
	$fdata["Label"] = GetFieldLabel("mst_item_name","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name`.`update_at`";

	
	
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




	$tdatamst_item_name["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_item_name";
	$fdata["Label"] = GetFieldLabel("mst_item_name","update_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name`.`update_by`";

	
	
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




	$tdatamst_item_name["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_item_name";
	$fdata["Label"] = GetFieldLabel("mst_item_name","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name`.`create_at`";

	
	
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




	$tdatamst_item_name["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_item_name";
	$fdata["Label"] = GetFieldLabel("mst_item_name","create_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name`.`create_by`";

	
	
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




	$tdatamst_item_name["create_by"] = $fdata;
//	yahoo_junle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yahoo_junle";
	$fdata["GoodName"] = "yahoo_junle";
	$fdata["ownerTable"] = "mst_item_name";
	$fdata["Label"] = GetFieldLabel("mst_item_name","yahoo_junle");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_junle";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name`.`yahoo_junle`";

	
	
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




	$tdatamst_item_name["yahoo_junle"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mst_item_name";
	$fdata["Label"] = GetFieldLabel("mst_item_name","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name`.`category_id`";

	
	
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




	$tdatamst_item_name["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "mst_item_name";
	$fdata["Label"] = GetFieldLabel("mst_item_name","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_category_id1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name`.`sub_category_id1`";

	
	
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




	$tdatamst_item_name["sub_category_id1"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "mst_item_name";
	$fdata["Label"] = GetFieldLabel("mst_item_name","yahoo_kataban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_kataban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name`.`yahoo_kataban`";

	
	
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




	$tdatamst_item_name["yahoo_kataban"] = $fdata;
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "mst_item_name";
	$fdata["Label"] = GetFieldLabel("mst_item_name","url");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name`.`url`";

	
	
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




	$tdatamst_item_name["url"] = $fdata;
//	yahoo_sankou_uwadai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "yahoo_sankou_uwadai";
	$fdata["GoodName"] = "yahoo_sankou_uwadai";
	$fdata["ownerTable"] = "mst_item_name";
	$fdata["Label"] = GetFieldLabel("mst_item_name","yahoo_sankou_uwadai");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sankou_uwadai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name`.`yahoo_sankou_uwadai`";

	
	
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




	$tdatamst_item_name["yahoo_sankou_uwadai"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "mst_item_name";
	$fdata["Label"] = GetFieldLabel("mst_item_name","gold_property");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gold_property";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name`.`gold_property`";

	
	
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




	$tdatamst_item_name["gold_property"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "mst_item_name";
	$fdata["Label"] = GetFieldLabel("mst_item_name","Gram");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name`.`Gram`";

	
	
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




	$tdatamst_item_name["Gram"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "mst_item_name";
	$fdata["Label"] = GetFieldLabel("mst_item_name","unit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name`.`unit`";

	
	
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




	$tdatamst_item_name["unit"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "mst_item_name";
	$fdata["Label"] = GetFieldLabel("mst_item_name","line");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name`.`line`";

	
	
			
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
	$edata["LookupTable"] = "mst_item";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	

	
	
	
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








	$tdatamst_item_name["line"] = $fdata;
//	count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "count";
	$fdata["GoodName"] = "count";
	$fdata["ownerTable"] = "mst_item_name_report";
	$fdata["Label"] = GetFieldLabel("mst_item_name","count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name_report`.`count`";

	
	
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




	$tdatamst_item_name["count"] = $fdata;
//	sum_nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "sum_nyuukin_price";
	$fdata["GoodName"] = "sum_nyuukin_price";
	$fdata["ownerTable"] = "mst_item_name_report";
	$fdata["Label"] = GetFieldLabel("mst_item_name","sum_nyuukin_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sum_nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_item_name_report`.`sum_nyuukin_price`";

	
	
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




	$tdatamst_item_name["sum_nyuukin_price"] = $fdata;


$tables_data["mst_item_name"]=&$tdatamst_item_name;
$field_labels["mst_item_name"] = &$fieldLabelsmst_item_name;
$fieldToolTips["mst_item_name"] = &$fieldToolTipsmst_item_name;
$placeHolders["mst_item_name"] = &$placeHoldersmst_item_name;
$page_titles["mst_item_name"] = &$pageTitlesmst_item_name;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_item_name"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_item_name"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_item_name()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`mst_item_name`.`id`,  `mst_item_name`.`name`,  `mst_item_name`.`sort`,  `mst_item_name`.`update_at`,  `mst_item_name`.`update_by`,  `mst_item_name`.`create_at`,  `mst_item_name`.`create_by`,  `mst_item_name`.`yahoo_junle`,  `mst_item_name`.`category_id`,  `mst_item_name`.`sub_category_id1`,  `mst_item_name`.`yahoo_kataban`,  `mst_item_name`.`url`,  `mst_item_name`.`yahoo_sankou_uwadai`,  `mst_item_name`.`gold_property`,  `mst_item_name`.`Gram`,  `mst_item_name`.`unit`,  `mst_item_name`.`line`,  `mst_item_name_report`.`count`,  `mst_item_name_report`.`sum_nyuukin_price`";
$proto0["m_strFrom"] = "FROM `mst_item_name`  LEFT OUTER JOIN `mst_item_name_report` ON `mst_item_name`.`name` = `mst_item_name_report`.`item_name`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `mst_item_name`.`id` DESC";
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
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto6["m_sql"] = "`mst_item_name`.`id`";
$proto6["m_srcTableName"] = "mst_item_name";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto8["m_sql"] = "`mst_item_name`.`name`";
$proto8["m_srcTableName"] = "mst_item_name";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto10["m_sql"] = "`mst_item_name`.`sort`";
$proto10["m_srcTableName"] = "mst_item_name";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto12["m_sql"] = "`mst_item_name`.`update_at`";
$proto12["m_srcTableName"] = "mst_item_name";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto14["m_sql"] = "`mst_item_name`.`update_by`";
$proto14["m_srcTableName"] = "mst_item_name";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto16["m_sql"] = "`mst_item_name`.`create_at`";
$proto16["m_srcTableName"] = "mst_item_name";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto18["m_sql"] = "`mst_item_name`.`create_by`";
$proto18["m_srcTableName"] = "mst_item_name";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_junle",
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto20["m_sql"] = "`mst_item_name`.`yahoo_junle`";
$proto20["m_srcTableName"] = "mst_item_name";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto22["m_sql"] = "`mst_item_name`.`category_id`";
$proto22["m_srcTableName"] = "mst_item_name";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto24["m_sql"] = "`mst_item_name`.`sub_category_id1`";
$proto24["m_srcTableName"] = "mst_item_name";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto26["m_sql"] = "`mst_item_name`.`yahoo_kataban`";
$proto26["m_srcTableName"] = "mst_item_name";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "url",
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto28["m_sql"] = "`mst_item_name`.`url`";
$proto28["m_srcTableName"] = "mst_item_name";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sankou_uwadai",
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto30["m_sql"] = "`mst_item_name`.`yahoo_sankou_uwadai`";
$proto30["m_srcTableName"] = "mst_item_name";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto32["m_sql"] = "`mst_item_name`.`gold_property`";
$proto32["m_srcTableName"] = "mst_item_name";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto34["m_sql"] = "`mst_item_name`.`Gram`";
$proto34["m_srcTableName"] = "mst_item_name";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto36["m_sql"] = "`mst_item_name`.`unit`";
$proto36["m_srcTableName"] = "mst_item_name";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto38["m_sql"] = "`mst_item_name`.`line`";
$proto38["m_srcTableName"] = "mst_item_name";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "count",
	"m_strTable" => "mst_item_name_report",
	"m_srcTableName" => "mst_item_name"
));

$proto40["m_sql"] = "`mst_item_name_report`.`count`";
$proto40["m_srcTableName"] = "mst_item_name";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "sum_nyuukin_price",
	"m_strTable" => "mst_item_name_report",
	"m_srcTableName" => "mst_item_name"
));

$proto42["m_sql"] = "`mst_item_name_report`.`sum_nyuukin_price`";
$proto42["m_srcTableName"] = "mst_item_name";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "mst_item_name";
$proto45["m_srcTableName"] = "mst_item_name";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id";
$proto45["m_columns"][] = "name";
$proto45["m_columns"][] = "sort";
$proto45["m_columns"][] = "update_at";
$proto45["m_columns"][] = "update_by";
$proto45["m_columns"][] = "create_at";
$proto45["m_columns"][] = "create_by";
$proto45["m_columns"][] = "yahoo_junle";
$proto45["m_columns"][] = "category_id";
$proto45["m_columns"][] = "sub_category_id1";
$proto45["m_columns"][] = "yahoo_kataban";
$proto45["m_columns"][] = "url";
$proto45["m_columns"][] = "yahoo_sankou_uwadai";
$proto45["m_columns"][] = "gold_property";
$proto45["m_columns"][] = "Gram";
$proto45["m_columns"][] = "unit";
$proto45["m_columns"][] = "line";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "`mst_item_name`";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "mst_item_name";
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
$proto49["m_strName"] = "mst_item_name_report";
$proto49["m_srcTableName"] = "mst_item_name";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "item_name_id";
$proto49["m_columns"][] = "count";
$proto49["m_columns"][] = "sum_nyuukin_price";
$proto49["m_columns"][] = "profit_rate";
$proto49["m_columns"][] = "created_at";
$proto49["m_columns"][] = "updated_at";
$proto49["m_columns"][] = "item_name";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "LEFT OUTER JOIN `mst_item_name_report` ON `mst_item_name`.`name` = `mst_item_name_report`.`item_name`";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "mst_item_name";
$proto50=array();
$proto50["m_sql"] = "`mst_item_name`.`name` = `mst_item_name_report`.`item_name`";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "= `mst_item_name_report`.`item_name`";
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
	"m_strTable" => "mst_item_name",
	"m_srcTableName" => "mst_item_name"
));

$proto52["m_column"]=$obj;
$proto52["m_bAsc"] = 0;
$proto52["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto52);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_item_name";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_item_name = createSqlQuery_mst_item_name();


	
		;

																			

$tdatamst_item_name[".sqlquery"] = $queryData_mst_item_name;

include_once(getabspath("include/mst_item_name_events.php"));
$tableEvents["mst_item_name"] = new eventclass_mst_item_name;
$tdatamst_item_name[".hasEvents"] = true;

?>