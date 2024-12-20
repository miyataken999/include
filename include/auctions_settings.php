<?php
require_once(getabspath("classes/cipherer.php"));




$tdataauctions = array();
	$tdataauctions[".ShortName"] = "auctions";
	$tdataauctions[".OwnerID"] = "";
	$tdataauctions[".OriginalTable"] = "auctions";

//	field labels
$fieldLabelsauctions = array();
$fieldToolTipsauctions = array();
$pageTitlesauctions = array();
$placeHoldersauctions = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsauctions["Japanese"] = array();
	$fieldToolTipsauctions["Japanese"] = array();
	$placeHoldersauctions["Japanese"] = array();
	$pageTitlesauctions["Japanese"] = array();
	$fieldLabelsauctions["Japanese"]["id"] = "Id";
	$fieldToolTipsauctions["Japanese"]["id"] = "";
	$placeHoldersauctions["Japanese"]["id"] = "";
	$fieldLabelsauctions["Japanese"]["bod_id"] = "ボックスId";
	$fieldToolTipsauctions["Japanese"]["bod_id"] = "";
	$placeHoldersauctions["Japanese"]["bod_id"] = "";
	$fieldLabelsauctions["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsauctions["Japanese"]["product_id"] = "";
	$placeHoldersauctions["Japanese"]["product_id"] = "";
	$fieldLabelsauctions["Japanese"]["Categories"] = "Yカテゴリー";
	$fieldToolTipsauctions["Japanese"]["Categories"] = "";
	$placeHoldersauctions["Japanese"]["Categories"] = "";
	$fieldLabelsauctions["Japanese"]["Title"] = "Yタイトル";
	$fieldToolTipsauctions["Japanese"]["Title"] = "";
	$placeHoldersauctions["Japanese"]["Title"] = "";
	$fieldLabelsauctions["Japanese"]["Items_in_the_store_for_the_search_keyword"] = "検索キーワード";
	$fieldToolTipsauctions["Japanese"]["Items_in_the_store_for_the_search_keyword"] = "";
	$placeHoldersauctions["Japanese"]["Items_in_the_store_for_the_search_keyword"] = "";
	$fieldLabelsauctions["Japanese"]["Starting_price"] = "開始価格";
	$fieldToolTipsauctions["Japanese"]["Starting_price"] = "";
	$placeHoldersauctions["Japanese"]["Starting_price"] = "";
	$fieldLabelsauctions["Japanese"]["Qty"] = "在庫数";
	$fieldToolTipsauctions["Japanese"]["Qty"] = "";
	$placeHoldersauctions["Japanese"]["Qty"] = "";
	$fieldLabelsauctions["Japanese"]["raku_goods_name"] = "楽天タイトル";
	$fieldToolTipsauctions["Japanese"]["raku_goods_name"] = "";
	$placeHoldersauctions["Japanese"]["raku_goods_name"] = "";
	$fieldLabelsauctions["Japanese"]["sales_period_designation"] = "販売期間指定";
	$fieldToolTipsauctions["Japanese"]["sales_period_designation"] = "";
	$placeHoldersauctions["Japanese"]["sales_period_designation"] = "";
	$fieldLabelsauctions["Japanese"]["raku_new_arrival_url"] = "楽天★★★新着★★★";
	$fieldToolTipsauctions["Japanese"]["raku_new_arrival_url"] = "";
	$placeHoldersauctions["Japanese"]["raku_new_arrival_url"] = "";
	$fieldLabelsauctions["Japanese"]["shouhin_yahoo_sinaban"] = "楽天商品番号";
	$fieldToolTipsauctions["Japanese"]["shouhin_yahoo_sinaban"] = "";
	$placeHoldersauctions["Japanese"]["shouhin_yahoo_sinaban"] = "";
	$fieldLabelsauctions["Japanese"]["zip_link"] = "出品ZIPリンク";
	$fieldToolTipsauctions["Japanese"]["zip_link"] = "";
	$placeHoldersauctions["Japanese"]["zip_link"] = "";
	$fieldLabelsauctions["Japanese"]["y_preview"] = "Y Preview";
	$fieldToolTipsauctions["Japanese"]["y_preview"] = "";
	$placeHoldersauctions["Japanese"]["y_preview"] = "";
	$fieldLabelsauctions["Japanese"]["price"] = "買取額";
	$fieldToolTipsauctions["Japanese"]["price"] = "";
	$placeHoldersauctions["Japanese"]["price"] = "";
	$fieldLabelsauctions["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipsauctions["Japanese"]["sales_price"] = "";
	$placeHoldersauctions["Japanese"]["sales_price"] = "";
	$fieldLabelsauctions["Japanese"]["yahoo_condition1"] = "コンディション";
	$fieldToolTipsauctions["Japanese"]["yahoo_condition1"] = "";
	$placeHoldersauctions["Japanese"]["yahoo_condition1"] = "";
	$fieldLabelsauctions["Japanese"]["yahoo_size"] = "実寸サイズ";
	$fieldToolTipsauctions["Japanese"]["yahoo_size"] = "";
	$placeHoldersauctions["Japanese"]["yahoo_size"] = "";
	$fieldLabelsauctions["Japanese"]["remark"] = "商品説明";
	$fieldToolTipsauctions["Japanese"]["remark"] = "";
	$placeHoldersauctions["Japanese"]["remark"] = "";
	$fieldLabelsauctions["Japanese"]["yahoo_sex"] = "性別";
	$fieldToolTipsauctions["Japanese"]["yahoo_sex"] = "";
	$placeHoldersauctions["Japanese"]["yahoo_sex"] = "";
	$fieldLabelsauctions["Japanese"]["yahoo_sozai"] = "素材";
	$fieldToolTipsauctions["Japanese"]["yahoo_sozai"] = "";
	$placeHoldersauctions["Japanese"]["yahoo_sozai"] = "";
	$fieldLabelsauctions["Japanese"]["yahoo_color"] = "色";
	$fieldToolTipsauctions["Japanese"]["yahoo_color"] = "";
	$placeHoldersauctions["Japanese"]["yahoo_color"] = "";
	$fieldLabelsauctions["Japanese"]["yahoo_fuzokuhin"] = "付属品";
	$fieldToolTipsauctions["Japanese"]["yahoo_fuzokuhin"] = "";
	$placeHoldersauctions["Japanese"]["yahoo_fuzokuhin"] = "";
	$fieldLabelsauctions["Japanese"]["stamp"] = "刻印";
	$fieldToolTipsauctions["Japanese"]["stamp"] = "";
	$placeHoldersauctions["Japanese"]["stamp"] = "";
	$fieldLabelsauctions["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipsauctions["Japanese"]["yahoo_kataban"] = "";
	$placeHoldersauctions["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelsauctions["Japanese"]["yahoo_sankou_uwadai"] = "参考上代";
	$fieldToolTipsauctions["Japanese"]["yahoo_sankou_uwadai"] = "";
	$placeHoldersauctions["Japanese"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelsauctions["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipsauctions["Japanese"]["satei_by"] = "";
	$placeHoldersauctions["Japanese"]["satei_by"] = "";
	$fieldLabelsauctions["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipsauctions["Japanese"]["satei_hi"] = "";
	$placeHoldersauctions["Japanese"]["satei_hi"] = "";
	$fieldLabelsauctions["Japanese"]["REG_AUTHOR"] = "成約人";
	$fieldToolTipsauctions["Japanese"]["REG_AUTHOR"] = "";
	$placeHoldersauctions["Japanese"]["REG_AUTHOR"] = "";
	$fieldLabelsauctions["Japanese"]["DT_UP_DATE"] = "成約日";
	$fieldToolTipsauctions["Japanese"]["DT_UP_DATE"] = "";
	$placeHoldersauctions["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelsauctions["Japanese"]["kaitori_by"] = "登録人";
	$fieldToolTipsauctions["Japanese"]["kaitori_by"] = "";
	$placeHoldersauctions["Japanese"]["kaitori_by"] = "";
	$fieldLabelsauctions["Japanese"]["kaitory_hi"] = "登録日";
	$fieldToolTipsauctions["Japanese"]["kaitory_hi"] = "";
	$placeHoldersauctions["Japanese"]["kaitory_hi"] = "";
	$fieldLabelsauctions["Japanese"]["yahoo_saisun_sha"] = "採寸者";
	$fieldToolTipsauctions["Japanese"]["yahoo_saisun_sha"] = "";
	$placeHoldersauctions["Japanese"]["yahoo_saisun_sha"] = "";
	$fieldLabelsauctions["Japanese"]["saisun_start"] = "採寸開始";
	$fieldToolTipsauctions["Japanese"]["saisun_start"] = "";
	$placeHoldersauctions["Japanese"]["saisun_start"] = "";
	$fieldLabelsauctions["Japanese"]["saisun_end"] = "採寸終了";
	$fieldToolTipsauctions["Japanese"]["saisun_end"] = "";
	$placeHoldersauctions["Japanese"]["saisun_end"] = "";
	$fieldLabelsauctions["Japanese"]["REG_PHOTOGRAPHER"] = "撮影者";
	$fieldToolTipsauctions["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$placeHoldersauctions["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$fieldLabelsauctions["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "撮影日";
	$fieldToolTipsauctions["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$placeHoldersauctions["Japanese"]["REG_PHOTOGRAPHER_DATE"] = "";
	$fieldLabelsauctions["Japanese"]["REG_KAKOU"] = "画像加工者";
	$fieldToolTipsauctions["Japanese"]["REG_KAKOU"] = "";
	$placeHoldersauctions["Japanese"]["REG_KAKOU"] = "";
	$fieldLabelsauctions["Japanese"]["REG_KAKOU_DATE"] = "画像加工日";
	$fieldToolTipsauctions["Japanese"]["REG_KAKOU_DATE"] = "";
	$placeHoldersauctions["Japanese"]["REG_KAKOU_DATE"] = "";
	$fieldLabelsauctions["Japanese"]["REG_PACKINGS"] = "梱包者";
	$fieldToolTipsauctions["Japanese"]["REG_PACKINGS"] = "";
	$placeHoldersauctions["Japanese"]["REG_PACKINGS"] = "";
	$fieldLabelsauctions["Japanese"]["DT_PACKING_DATE"] = "梱包日";
	$fieldToolTipsauctions["Japanese"]["DT_PACKING_DATE"] = "";
	$placeHoldersauctions["Japanese"]["DT_PACKING_DATE"] = "";
	$fieldLabelsauctions["Japanese"]["REG_EXHIBITOR"] = "出品者";
	$fieldToolTipsauctions["Japanese"]["REG_EXHIBITOR"] = "";
	$placeHoldersauctions["Japanese"]["REG_EXHIBITOR"] = "";
	$fieldLabelsauctions["Japanese"]["Exhibition_Date"] = "出品日";
	$fieldToolTipsauctions["Japanese"]["Exhibition_Date"] = "";
	$placeHoldersauctions["Japanese"]["Exhibition_Date"] = "";
	$fieldLabelsauctions["Japanese"]["updated_by"] = "最終更新者";
	$fieldToolTipsauctions["Japanese"]["updated_by"] = "";
	$placeHoldersauctions["Japanese"]["updated_by"] = "";
	$fieldLabelsauctions["Japanese"]["updated_at"] = "最終更新日";
	$fieldToolTipsauctions["Japanese"]["updated_at"] = "";
	$placeHoldersauctions["Japanese"]["updated_at"] = "";
	if (count($fieldToolTipsauctions["Japanese"]))
		$tdataauctions[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsauctions[""] = array();
	$fieldToolTipsauctions[""] = array();
	$placeHoldersauctions[""] = array();
	$pageTitlesauctions[""] = array();
	if (count($fieldToolTipsauctions[""]))
		$tdataauctions[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsauctions["English"] = array();
	$fieldToolTipsauctions["English"] = array();
	$placeHoldersauctions["English"] = array();
	$pageTitlesauctions["English"] = array();
	if (count($fieldToolTipsauctions["English"]))
		$tdataauctions[".isUseToolTips"] = true;
}


	$tdataauctions[".NCSearch"] = true;



$tdataauctions[".shortTableName"] = "auctions";
$tdataauctions[".nSecOptions"] = 0;
$tdataauctions[".recsPerRowPrint"] = 1;
$tdataauctions[".mainTableOwnerID"] = "";
$tdataauctions[".moveNext"] = 1;
$tdataauctions[".entityType"] = 0;

$tdataauctions[".strOriginalTableName"] = "auctions";

	



$tdataauctions[".showAddInPopup"] = false;

$tdataauctions[".showEditInPopup"] = false;

$tdataauctions[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataauctions[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataauctions[".fieldsForRegister"] = array();

$tdataauctions[".listAjax"] = false;

	$tdataauctions[".audit"] = true;

	$tdataauctions[".locking"] = false;



$tdataauctions[".list"] = true;

$tdataauctions[".inlineEdit"] = true;


$tdataauctions[".reorderRecordsByHeader"] = true;
$tdataauctions[".createSortByDropdown"] = true;
$tdataauctions[".strSortControlSettingsJSON"] = "";




$tdataauctions[".import"] = true;

$tdataauctions[".exportTo"] = true;

$tdataauctions[".printFriendly"] = true;

$tdataauctions[".delete"] = true;

$tdataauctions[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataauctions[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataauctions[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataauctions[".searchSaving"] = true;
//

$tdataauctions[".showSearchPanel"] = true;
		$tdataauctions[".flexibleSearch"] = true;

$tdataauctions[".isUseAjaxSuggest"] = true;

$tdataauctions[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataauctions[".ajaxCodeSnippetAdded"] = false;

$tdataauctions[".buttonsAdded"] = false;

$tdataauctions[".addPageEvents"] = true;

// use timepicker for search panel
$tdataauctions[".isUseTimeForSearch"] = false;





$tdataauctions[".allSearchFields"] = array();
$tdataauctions[".filterFields"] = array();
$tdataauctions[".requiredSearchFields"] = array();

$tdataauctions[".allSearchFields"][] = "id";
	$tdataauctions[".allSearchFields"][] = "zip_link";
	$tdataauctions[".allSearchFields"][] = "bod_id";
	$tdataauctions[".allSearchFields"][] = "product_id";
	$tdataauctions[".allSearchFields"][] = "shouhin_yahoo_sinaban";
	$tdataauctions[".allSearchFields"][] = "Starting_price";
	$tdataauctions[".allSearchFields"][] = "Categories";
	$tdataauctions[".allSearchFields"][] = "Title";
	$tdataauctions[".allSearchFields"][] = "Items_in_the_store_for_the_search_keyword";
	$tdataauctions[".allSearchFields"][] = "raku_goods_name";
	$tdataauctions[".allSearchFields"][] = "price";
	$tdataauctions[".allSearchFields"][] = "sales_price";
	$tdataauctions[".allSearchFields"][] = "yahoo_condition1";
	$tdataauctions[".allSearchFields"][] = "yahoo_size";
	$tdataauctions[".allSearchFields"][] = "remark";
	$tdataauctions[".allSearchFields"][] = "yahoo_sex";
	$tdataauctions[".allSearchFields"][] = "yahoo_sozai";
	$tdataauctions[".allSearchFields"][] = "yahoo_color";
	$tdataauctions[".allSearchFields"][] = "yahoo_fuzokuhin";
	$tdataauctions[".allSearchFields"][] = "stamp";
	$tdataauctions[".allSearchFields"][] = "yahoo_kataban";
	$tdataauctions[".allSearchFields"][] = "yahoo_sankou_uwadai";
	$tdataauctions[".allSearchFields"][] = "satei_by";
	$tdataauctions[".allSearchFields"][] = "satei_hi";
	$tdataauctions[".allSearchFields"][] = "REG_AUTHOR";
	$tdataauctions[".allSearchFields"][] = "DT_UP_DATE";
	$tdataauctions[".allSearchFields"][] = "kaitori_by";
	$tdataauctions[".allSearchFields"][] = "kaitory_hi";
	$tdataauctions[".allSearchFields"][] = "yahoo_saisun_sha";
	$tdataauctions[".allSearchFields"][] = "saisun_start";
	$tdataauctions[".allSearchFields"][] = "saisun_end";
	$tdataauctions[".allSearchFields"][] = "REG_PHOTOGRAPHER";
	$tdataauctions[".allSearchFields"][] = "REG_PHOTOGRAPHER_DATE";
	$tdataauctions[".allSearchFields"][] = "REG_KAKOU";
	$tdataauctions[".allSearchFields"][] = "REG_KAKOU_DATE";
	$tdataauctions[".allSearchFields"][] = "REG_PACKINGS";
	$tdataauctions[".allSearchFields"][] = "DT_PACKING_DATE";
	$tdataauctions[".allSearchFields"][] = "REG_EXHIBITOR";
	$tdataauctions[".allSearchFields"][] = "Exhibition_Date";
	$tdataauctions[".allSearchFields"][] = "updated_by";
	$tdataauctions[".allSearchFields"][] = "updated_at";
	

$tdataauctions[".googleLikeFields"] = array();
$tdataauctions[".googleLikeFields"][] = "id";
$tdataauctions[".googleLikeFields"][] = "zip_link";
$tdataauctions[".googleLikeFields"][] = "bod_id";
$tdataauctions[".googleLikeFields"][] = "product_id";
$tdataauctions[".googleLikeFields"][] = "shouhin_yahoo_sinaban";
$tdataauctions[".googleLikeFields"][] = "Starting_price";
$tdataauctions[".googleLikeFields"][] = "Categories";
$tdataauctions[".googleLikeFields"][] = "Title";
$tdataauctions[".googleLikeFields"][] = "Items_in_the_store_for_the_search_keyword";
$tdataauctions[".googleLikeFields"][] = "raku_goods_name";
$tdataauctions[".googleLikeFields"][] = "price";
$tdataauctions[".googleLikeFields"][] = "sales_price";
$tdataauctions[".googleLikeFields"][] = "yahoo_condition1";
$tdataauctions[".googleLikeFields"][] = "yahoo_size";
$tdataauctions[".googleLikeFields"][] = "remark";
$tdataauctions[".googleLikeFields"][] = "yahoo_sex";
$tdataauctions[".googleLikeFields"][] = "yahoo_sozai";
$tdataauctions[".googleLikeFields"][] = "yahoo_color";
$tdataauctions[".googleLikeFields"][] = "yahoo_fuzokuhin";
$tdataauctions[".googleLikeFields"][] = "stamp";
$tdataauctions[".googleLikeFields"][] = "yahoo_kataban";
$tdataauctions[".googleLikeFields"][] = "yahoo_sankou_uwadai";
$tdataauctions[".googleLikeFields"][] = "satei_by";
$tdataauctions[".googleLikeFields"][] = "satei_hi";
$tdataauctions[".googleLikeFields"][] = "REG_AUTHOR";
$tdataauctions[".googleLikeFields"][] = "DT_UP_DATE";
$tdataauctions[".googleLikeFields"][] = "kaitori_by";
$tdataauctions[".googleLikeFields"][] = "kaitory_hi";
$tdataauctions[".googleLikeFields"][] = "yahoo_saisun_sha";
$tdataauctions[".googleLikeFields"][] = "saisun_start";
$tdataauctions[".googleLikeFields"][] = "saisun_end";
$tdataauctions[".googleLikeFields"][] = "REG_PHOTOGRAPHER";
$tdataauctions[".googleLikeFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdataauctions[".googleLikeFields"][] = "REG_KAKOU";
$tdataauctions[".googleLikeFields"][] = "REG_KAKOU_DATE";
$tdataauctions[".googleLikeFields"][] = "REG_PACKINGS";
$tdataauctions[".googleLikeFields"][] = "DT_PACKING_DATE";
$tdataauctions[".googleLikeFields"][] = "REG_EXHIBITOR";
$tdataauctions[".googleLikeFields"][] = "Exhibition_Date";
$tdataauctions[".googleLikeFields"][] = "updated_by";
$tdataauctions[".googleLikeFields"][] = "updated_at";


$tdataauctions[".advSearchFields"] = array();
$tdataauctions[".advSearchFields"][] = "id";
$tdataauctions[".advSearchFields"][] = "zip_link";
$tdataauctions[".advSearchFields"][] = "bod_id";
$tdataauctions[".advSearchFields"][] = "product_id";
$tdataauctions[".advSearchFields"][] = "shouhin_yahoo_sinaban";
$tdataauctions[".advSearchFields"][] = "Starting_price";
$tdataauctions[".advSearchFields"][] = "Categories";
$tdataauctions[".advSearchFields"][] = "Title";
$tdataauctions[".advSearchFields"][] = "Items_in_the_store_for_the_search_keyword";
$tdataauctions[".advSearchFields"][] = "raku_goods_name";
$tdataauctions[".advSearchFields"][] = "price";
$tdataauctions[".advSearchFields"][] = "sales_price";
$tdataauctions[".advSearchFields"][] = "yahoo_condition1";
$tdataauctions[".advSearchFields"][] = "yahoo_size";
$tdataauctions[".advSearchFields"][] = "remark";
$tdataauctions[".advSearchFields"][] = "yahoo_sex";
$tdataauctions[".advSearchFields"][] = "yahoo_sozai";
$tdataauctions[".advSearchFields"][] = "yahoo_color";
$tdataauctions[".advSearchFields"][] = "yahoo_fuzokuhin";
$tdataauctions[".advSearchFields"][] = "stamp";
$tdataauctions[".advSearchFields"][] = "yahoo_kataban";
$tdataauctions[".advSearchFields"][] = "yahoo_sankou_uwadai";
$tdataauctions[".advSearchFields"][] = "satei_by";
$tdataauctions[".advSearchFields"][] = "satei_hi";
$tdataauctions[".advSearchFields"][] = "REG_AUTHOR";
$tdataauctions[".advSearchFields"][] = "DT_UP_DATE";
$tdataauctions[".advSearchFields"][] = "kaitori_by";
$tdataauctions[".advSearchFields"][] = "kaitory_hi";
$tdataauctions[".advSearchFields"][] = "yahoo_saisun_sha";
$tdataauctions[".advSearchFields"][] = "saisun_start";
$tdataauctions[".advSearchFields"][] = "saisun_end";
$tdataauctions[".advSearchFields"][] = "REG_PHOTOGRAPHER";
$tdataauctions[".advSearchFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdataauctions[".advSearchFields"][] = "REG_KAKOU";
$tdataauctions[".advSearchFields"][] = "REG_KAKOU_DATE";
$tdataauctions[".advSearchFields"][] = "REG_PACKINGS";
$tdataauctions[".advSearchFields"][] = "DT_PACKING_DATE";
$tdataauctions[".advSearchFields"][] = "REG_EXHIBITOR";
$tdataauctions[".advSearchFields"][] = "Exhibition_Date";
$tdataauctions[".advSearchFields"][] = "updated_by";
$tdataauctions[".advSearchFields"][] = "updated_at";

$tdataauctions[".tableType"] = "list";

$tdataauctions[".printerPageOrientation"] = 0;
$tdataauctions[".nPrinterPageScale"] = 100;

$tdataauctions[".nPrinterSplitRecords"] = 40;

$tdataauctions[".nPrinterPDFSplitRecords"] = 40;



$tdataauctions[".geocodingEnabled"] = false;





$tdataauctions[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataauctions[".pageSize"] = 20;

$tdataauctions[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `auctions`.`id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataauctions[".strOrderBy"] = $tstrOrderBy;

$tdataauctions[".orderindexes"] = array();
$tdataauctions[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`auctions`.`id`");

$tdataauctions[".sqlHead"] = "SELECT `auctions`.`id`,  `auctions`.`bod_id` AS `zip_link`,  `auctions`.`bod_id`,  concat(\"/include/yahoo_template/temp.php?product_id=\", auctions.product_id, \"\") AS `y_preview`,  `auctions`.`product_id`,  `shouhin`.`yahoo_sinaban` AS `shouhin_yahoo_sinaban`,  `auctions`.`sales_period_designation`,  `auctions`.`Starting_price`,  `auctions`.`Categories`,  `auctions`.`Title`,  `auctions`.`Items_in_the_store_for_the_search_keyword`,  `auctions`.`raku_new_arrival_url`,  `auctions`.`raku_goods_name`,  `auctions`.`Qty`,  `shouhin`.`price`,  `shouhin`.`sales_price`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`yahoo_size`,  `shouhin`.`remark`,  `shouhin`.`yahoo_sex`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_color`,  `shouhin`.`yahoo_fuzokuhin`,  `shouhin`.`stamp`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`satei_by`,  `shouhin`.`satei_hi`,  `shouhin`.`REG_AUTHOR`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`kaitori_by`,  `shouhin`.`kaitory_hi`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`saisun_start`,  `shouhin`.`saisun_end`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`Exhibition_Date`,  `shouhin`.`updated_by`,  `shouhin`.`updated_at`";
$tdataauctions[".sqlFrom"] = "FROM `auctions`  LEFT OUTER JOIN `shouhin` ON `auctions`.`product_id` = `shouhin`.`product_id`";
$tdataauctions[".sqlWhereExpr"] = "";
$tdataauctions[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataauctions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataauctions[".arrGroupsPerPage"] = $arrGPP;

$tdataauctions[".highlightSearchResults"] = true;

$tableKeysauctions = array();
$tableKeysauctions[] = "id";
$tdataauctions[".Keys"] = $tableKeysauctions;

$tdataauctions[".listFields"] = array();
$tdataauctions[".listFields"][] = "id";
$tdataauctions[".listFields"][] = "y_preview";
$tdataauctions[".listFields"][] = "zip_link";
$tdataauctions[".listFields"][] = "bod_id";
$tdataauctions[".listFields"][] = "product_id";
$tdataauctions[".listFields"][] = "shouhin_yahoo_sinaban";
$tdataauctions[".listFields"][] = "Starting_price";
$tdataauctions[".listFields"][] = "Categories";
$tdataauctions[".listFields"][] = "Title";
$tdataauctions[".listFields"][] = "Items_in_the_store_for_the_search_keyword";
$tdataauctions[".listFields"][] = "raku_goods_name";
$tdataauctions[".listFields"][] = "price";
$tdataauctions[".listFields"][] = "sales_price";
$tdataauctions[".listFields"][] = "yahoo_condition1";
$tdataauctions[".listFields"][] = "yahoo_size";
$tdataauctions[".listFields"][] = "remark";
$tdataauctions[".listFields"][] = "yahoo_sex";
$tdataauctions[".listFields"][] = "yahoo_sozai";
$tdataauctions[".listFields"][] = "yahoo_color";
$tdataauctions[".listFields"][] = "yahoo_fuzokuhin";
$tdataauctions[".listFields"][] = "stamp";
$tdataauctions[".listFields"][] = "yahoo_kataban";
$tdataauctions[".listFields"][] = "yahoo_sankou_uwadai";
$tdataauctions[".listFields"][] = "satei_by";
$tdataauctions[".listFields"][] = "satei_hi";
$tdataauctions[".listFields"][] = "REG_AUTHOR";
$tdataauctions[".listFields"][] = "DT_UP_DATE";
$tdataauctions[".listFields"][] = "kaitori_by";
$tdataauctions[".listFields"][] = "kaitory_hi";
$tdataauctions[".listFields"][] = "yahoo_saisun_sha";
$tdataauctions[".listFields"][] = "saisun_start";
$tdataauctions[".listFields"][] = "saisun_end";
$tdataauctions[".listFields"][] = "REG_PHOTOGRAPHER";
$tdataauctions[".listFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdataauctions[".listFields"][] = "REG_KAKOU";
$tdataauctions[".listFields"][] = "REG_KAKOU_DATE";
$tdataauctions[".listFields"][] = "REG_PACKINGS";
$tdataauctions[".listFields"][] = "DT_PACKING_DATE";
$tdataauctions[".listFields"][] = "REG_EXHIBITOR";
$tdataauctions[".listFields"][] = "Exhibition_Date";
$tdataauctions[".listFields"][] = "updated_by";
$tdataauctions[".listFields"][] = "updated_at";

$tdataauctions[".hideMobileList"] = array();


$tdataauctions[".viewFields"] = array();

$tdataauctions[".addFields"] = array();

$tdataauctions[".masterListFields"] = array();
$tdataauctions[".masterListFields"][] = "id";
$tdataauctions[".masterListFields"][] = "y_preview";
$tdataauctions[".masterListFields"][] = "zip_link";
$tdataauctions[".masterListFields"][] = "bod_id";
$tdataauctions[".masterListFields"][] = "product_id";
$tdataauctions[".masterListFields"][] = "sales_period_designation";
$tdataauctions[".masterListFields"][] = "shouhin_yahoo_sinaban";
$tdataauctions[".masterListFields"][] = "Starting_price";
$tdataauctions[".masterListFields"][] = "Categories";
$tdataauctions[".masterListFields"][] = "Title";
$tdataauctions[".masterListFields"][] = "Items_in_the_store_for_the_search_keyword";
$tdataauctions[".masterListFields"][] = "raku_new_arrival_url";
$tdataauctions[".masterListFields"][] = "raku_goods_name";
$tdataauctions[".masterListFields"][] = "Qty";
$tdataauctions[".masterListFields"][] = "price";
$tdataauctions[".masterListFields"][] = "sales_price";
$tdataauctions[".masterListFields"][] = "yahoo_condition1";
$tdataauctions[".masterListFields"][] = "yahoo_size";
$tdataauctions[".masterListFields"][] = "remark";
$tdataauctions[".masterListFields"][] = "yahoo_sex";
$tdataauctions[".masterListFields"][] = "yahoo_sozai";
$tdataauctions[".masterListFields"][] = "yahoo_color";
$tdataauctions[".masterListFields"][] = "yahoo_fuzokuhin";
$tdataauctions[".masterListFields"][] = "stamp";
$tdataauctions[".masterListFields"][] = "yahoo_kataban";
$tdataauctions[".masterListFields"][] = "yahoo_sankou_uwadai";
$tdataauctions[".masterListFields"][] = "satei_by";
$tdataauctions[".masterListFields"][] = "satei_hi";
$tdataauctions[".masterListFields"][] = "REG_AUTHOR";
$tdataauctions[".masterListFields"][] = "DT_UP_DATE";
$tdataauctions[".masterListFields"][] = "kaitori_by";
$tdataauctions[".masterListFields"][] = "kaitory_hi";
$tdataauctions[".masterListFields"][] = "yahoo_saisun_sha";
$tdataauctions[".masterListFields"][] = "saisun_start";
$tdataauctions[".masterListFields"][] = "saisun_end";
$tdataauctions[".masterListFields"][] = "REG_PHOTOGRAPHER";
$tdataauctions[".masterListFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdataauctions[".masterListFields"][] = "REG_KAKOU";
$tdataauctions[".masterListFields"][] = "REG_KAKOU_DATE";
$tdataauctions[".masterListFields"][] = "REG_PACKINGS";
$tdataauctions[".masterListFields"][] = "DT_PACKING_DATE";
$tdataauctions[".masterListFields"][] = "REG_EXHIBITOR";
$tdataauctions[".masterListFields"][] = "Exhibition_Date";
$tdataauctions[".masterListFields"][] = "updated_by";
$tdataauctions[".masterListFields"][] = "updated_at";

$tdataauctions[".inlineAddFields"] = array();

$tdataauctions[".editFields"] = array();

$tdataauctions[".inlineEditFields"] = array();
$tdataauctions[".inlineEditFields"][] = "bod_id";
$tdataauctions[".inlineEditFields"][] = "product_id";
$tdataauctions[".inlineEditFields"][] = "Starting_price";
$tdataauctions[".inlineEditFields"][] = "Categories";
$tdataauctions[".inlineEditFields"][] = "Title";
$tdataauctions[".inlineEditFields"][] = "Items_in_the_store_for_the_search_keyword";
$tdataauctions[".inlineEditFields"][] = "raku_goods_name";

$tdataauctions[".updateSelectedFields"] = array();


$tdataauctions[".exportFields"] = array();
$tdataauctions[".exportFields"][] = "id";
$tdataauctions[".exportFields"][] = "zip_link";
$tdataauctions[".exportFields"][] = "bod_id";
$tdataauctions[".exportFields"][] = "product_id";
$tdataauctions[".exportFields"][] = "shouhin_yahoo_sinaban";
$tdataauctions[".exportFields"][] = "Starting_price";
$tdataauctions[".exportFields"][] = "Categories";
$tdataauctions[".exportFields"][] = "Title";
$tdataauctions[".exportFields"][] = "Items_in_the_store_for_the_search_keyword";
$tdataauctions[".exportFields"][] = "raku_goods_name";
$tdataauctions[".exportFields"][] = "price";
$tdataauctions[".exportFields"][] = "sales_price";
$tdataauctions[".exportFields"][] = "yahoo_condition1";
$tdataauctions[".exportFields"][] = "yahoo_size";
$tdataauctions[".exportFields"][] = "remark";
$tdataauctions[".exportFields"][] = "yahoo_sex";
$tdataauctions[".exportFields"][] = "yahoo_sozai";
$tdataauctions[".exportFields"][] = "yahoo_color";
$tdataauctions[".exportFields"][] = "yahoo_fuzokuhin";
$tdataauctions[".exportFields"][] = "stamp";
$tdataauctions[".exportFields"][] = "yahoo_kataban";
$tdataauctions[".exportFields"][] = "yahoo_sankou_uwadai";
$tdataauctions[".exportFields"][] = "satei_by";
$tdataauctions[".exportFields"][] = "satei_hi";
$tdataauctions[".exportFields"][] = "REG_AUTHOR";
$tdataauctions[".exportFields"][] = "DT_UP_DATE";
$tdataauctions[".exportFields"][] = "kaitori_by";
$tdataauctions[".exportFields"][] = "kaitory_hi";
$tdataauctions[".exportFields"][] = "yahoo_saisun_sha";
$tdataauctions[".exportFields"][] = "saisun_start";
$tdataauctions[".exportFields"][] = "saisun_end";
$tdataauctions[".exportFields"][] = "REG_PHOTOGRAPHER";
$tdataauctions[".exportFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdataauctions[".exportFields"][] = "REG_KAKOU";
$tdataauctions[".exportFields"][] = "REG_KAKOU_DATE";
$tdataauctions[".exportFields"][] = "REG_PACKINGS";
$tdataauctions[".exportFields"][] = "DT_PACKING_DATE";
$tdataauctions[".exportFields"][] = "REG_EXHIBITOR";
$tdataauctions[".exportFields"][] = "Exhibition_Date";
$tdataauctions[".exportFields"][] = "updated_by";
$tdataauctions[".exportFields"][] = "updated_at";

$tdataauctions[".importFields"] = array();
$tdataauctions[".importFields"][] = "id";
$tdataauctions[".importFields"][] = "zip_link";
$tdataauctions[".importFields"][] = "bod_id";
$tdataauctions[".importFields"][] = "product_id";
$tdataauctions[".importFields"][] = "shouhin_yahoo_sinaban";
$tdataauctions[".importFields"][] = "Starting_price";
$tdataauctions[".importFields"][] = "Categories";
$tdataauctions[".importFields"][] = "Title";
$tdataauctions[".importFields"][] = "Items_in_the_store_for_the_search_keyword";
$tdataauctions[".importFields"][] = "raku_goods_name";
$tdataauctions[".importFields"][] = "price";
$tdataauctions[".importFields"][] = "sales_price";
$tdataauctions[".importFields"][] = "yahoo_condition1";
$tdataauctions[".importFields"][] = "yahoo_size";
$tdataauctions[".importFields"][] = "remark";
$tdataauctions[".importFields"][] = "yahoo_sex";
$tdataauctions[".importFields"][] = "yahoo_sozai";
$tdataauctions[".importFields"][] = "yahoo_color";
$tdataauctions[".importFields"][] = "yahoo_fuzokuhin";
$tdataauctions[".importFields"][] = "stamp";
$tdataauctions[".importFields"][] = "yahoo_kataban";
$tdataauctions[".importFields"][] = "yahoo_sankou_uwadai";
$tdataauctions[".importFields"][] = "satei_by";
$tdataauctions[".importFields"][] = "satei_hi";
$tdataauctions[".importFields"][] = "REG_AUTHOR";
$tdataauctions[".importFields"][] = "DT_UP_DATE";
$tdataauctions[".importFields"][] = "kaitori_by";
$tdataauctions[".importFields"][] = "kaitory_hi";
$tdataauctions[".importFields"][] = "yahoo_saisun_sha";
$tdataauctions[".importFields"][] = "saisun_start";
$tdataauctions[".importFields"][] = "saisun_end";
$tdataauctions[".importFields"][] = "REG_PHOTOGRAPHER";
$tdataauctions[".importFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdataauctions[".importFields"][] = "REG_KAKOU";
$tdataauctions[".importFields"][] = "REG_KAKOU_DATE";
$tdataauctions[".importFields"][] = "REG_PACKINGS";
$tdataauctions[".importFields"][] = "DT_PACKING_DATE";
$tdataauctions[".importFields"][] = "REG_EXHIBITOR";
$tdataauctions[".importFields"][] = "Exhibition_Date";
$tdataauctions[".importFields"][] = "updated_by";
$tdataauctions[".importFields"][] = "updated_at";

$tdataauctions[".printFields"] = array();
$tdataauctions[".printFields"][] = "zip_link";
$tdataauctions[".printFields"][] = "bod_id";
$tdataauctions[".printFields"][] = "product_id";
$tdataauctions[".printFields"][] = "shouhin_yahoo_sinaban";
$tdataauctions[".printFields"][] = "Starting_price";
$tdataauctions[".printFields"][] = "Categories";
$tdataauctions[".printFields"][] = "Title";
$tdataauctions[".printFields"][] = "Items_in_the_store_for_the_search_keyword";
$tdataauctions[".printFields"][] = "raku_goods_name";
$tdataauctions[".printFields"][] = "price";
$tdataauctions[".printFields"][] = "sales_price";
$tdataauctions[".printFields"][] = "yahoo_condition1";
$tdataauctions[".printFields"][] = "yahoo_size";
$tdataauctions[".printFields"][] = "remark";
$tdataauctions[".printFields"][] = "yahoo_sex";
$tdataauctions[".printFields"][] = "yahoo_sozai";
$tdataauctions[".printFields"][] = "yahoo_color";
$tdataauctions[".printFields"][] = "yahoo_fuzokuhin";
$tdataauctions[".printFields"][] = "stamp";
$tdataauctions[".printFields"][] = "yahoo_kataban";
$tdataauctions[".printFields"][] = "yahoo_sankou_uwadai";
$tdataauctions[".printFields"][] = "satei_by";
$tdataauctions[".printFields"][] = "satei_hi";
$tdataauctions[".printFields"][] = "REG_AUTHOR";
$tdataauctions[".printFields"][] = "DT_UP_DATE";
$tdataauctions[".printFields"][] = "kaitori_by";
$tdataauctions[".printFields"][] = "kaitory_hi";
$tdataauctions[".printFields"][] = "yahoo_saisun_sha";
$tdataauctions[".printFields"][] = "saisun_start";
$tdataauctions[".printFields"][] = "saisun_end";
$tdataauctions[".printFields"][] = "REG_PHOTOGRAPHER";
$tdataauctions[".printFields"][] = "REG_PHOTOGRAPHER_DATE";
$tdataauctions[".printFields"][] = "REG_KAKOU";
$tdataauctions[".printFields"][] = "REG_KAKOU_DATE";
$tdataauctions[".printFields"][] = "REG_PACKINGS";
$tdataauctions[".printFields"][] = "DT_PACKING_DATE";
$tdataauctions[".printFields"][] = "REG_EXHIBITOR";
$tdataauctions[".printFields"][] = "Exhibition_Date";
$tdataauctions[".printFields"][] = "updated_by";
$tdataauctions[".printFields"][] = "updated_at";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "auctions";
	$fdata["Label"] = GetFieldLabel("auctions","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`auctions`.`id`";

	
	
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




	$tdataauctions["id"] = $fdata;
//	zip_link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "zip_link";
	$fdata["GoodName"] = "zip_link";
	$fdata["ownerTable"] = "auctions";
	$fdata["Label"] = GetFieldLabel("auctions","zip_link");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bod_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`auctions`.`bod_id`";

	
	
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




	$tdataauctions["zip_link"] = $fdata;
//	bod_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "bod_id";
	$fdata["GoodName"] = "bod_id";
	$fdata["ownerTable"] = "auctions";
	$fdata["Label"] = GetFieldLabel("auctions","bod_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bod_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`auctions`.`bod_id`";

	
	
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




	$tdataauctions["bod_id"] = $fdata;
//	y_preview
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "y_preview";
	$fdata["GoodName"] = "y_preview";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("auctions","y_preview");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "y_preview";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(\"/include/yahoo_template/temp.php?product_id=\", auctions.product_id, \"\")";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "プレビュー";
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








	$tdataauctions["y_preview"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "auctions";
	$fdata["Label"] = GetFieldLabel("auctions","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`auctions`.`product_id`";

	
	
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




	$tdataauctions["product_id"] = $fdata;
//	shouhin_yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "shouhin_yahoo_sinaban";
	$fdata["GoodName"] = "shouhin_yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","shouhin_yahoo_sinaban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sinaban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_sinaban`";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataauctions["shouhin_yahoo_sinaban"] = $fdata;
//	sales_period_designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sales_period_designation";
	$fdata["GoodName"] = "sales_period_designation";
	$fdata["ownerTable"] = "auctions";
	$fdata["Label"] = GetFieldLabel("auctions","sales_period_designation");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sales_period_designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`auctions`.`sales_period_designation`";

	
	
			
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








	$tdataauctions["sales_period_designation"] = $fdata;
//	Starting_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Starting_price";
	$fdata["GoodName"] = "Starting_price";
	$fdata["ownerTable"] = "auctions";
	$fdata["Label"] = GetFieldLabel("auctions","Starting_price");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Starting_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`auctions`.`Starting_price`";

	
	
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




	$tdataauctions["Starting_price"] = $fdata;
//	Categories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Categories";
	$fdata["GoodName"] = "Categories";
	$fdata["ownerTable"] = "auctions";
	$fdata["Label"] = GetFieldLabel("auctions","Categories");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Categories";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`auctions`.`Categories`";

	
	
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




	$tdataauctions["Categories"] = $fdata;
//	Title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Title";
	$fdata["GoodName"] = "Title";
	$fdata["ownerTable"] = "auctions";
	$fdata["Label"] = GetFieldLabel("auctions","Title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`auctions`.`Title`";

	
	
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




	$tdataauctions["Title"] = $fdata;
//	Items_in_the_store_for_the_search_keyword
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Items_in_the_store_for_the_search_keyword";
	$fdata["GoodName"] = "Items_in_the_store_for_the_search_keyword";
	$fdata["ownerTable"] = "auctions";
	$fdata["Label"] = GetFieldLabel("auctions","Items_in_the_store_for_the_search_keyword");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Items_in_the_store_for_the_search_keyword";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`auctions`.`Items_in_the_store_for_the_search_keyword`";

	
	
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




	$tdataauctions["Items_in_the_store_for_the_search_keyword"] = $fdata;
//	raku_new_arrival_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "raku_new_arrival_url";
	$fdata["GoodName"] = "raku_new_arrival_url";
	$fdata["ownerTable"] = "auctions";
	$fdata["Label"] = GetFieldLabel("auctions","raku_new_arrival_url");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "raku_new_arrival_url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`auctions`.`raku_new_arrival_url`";

	
	
			
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








	$tdataauctions["raku_new_arrival_url"] = $fdata;
//	raku_goods_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "raku_goods_name";
	$fdata["GoodName"] = "raku_goods_name";
	$fdata["ownerTable"] = "auctions";
	$fdata["Label"] = GetFieldLabel("auctions","raku_goods_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "raku_goods_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`auctions`.`raku_goods_name`";

	
	
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




	$tdataauctions["raku_goods_name"] = $fdata;
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "auctions";
	$fdata["Label"] = GetFieldLabel("auctions","Qty");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Qty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`auctions`.`Qty`";

	
	
			
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
			$edata["EditParams"].= " maxlength=4";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataauctions["Qty"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`price`";

	
	
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




	$tdataauctions["price"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","sales_price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`sales_price`";

	
	
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




	$tdataauctions["sales_price"] = $fdata;
//	yahoo_condition1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "yahoo_condition1";
	$fdata["GoodName"] = "yahoo_condition1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","yahoo_condition1");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_condition1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_condition1`";

	
	
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




	$tdataauctions["yahoo_condition1"] = $fdata;
//	yahoo_size
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "yahoo_size";
	$fdata["GoodName"] = "yahoo_size";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","yahoo_size");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_size";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_size`";

	
	
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




	$tdataauctions["yahoo_size"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","remark");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "remark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`remark`";

	
	
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




	$tdataauctions["remark"] = $fdata;
//	yahoo_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "yahoo_sex";
	$fdata["GoodName"] = "yahoo_sex";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","yahoo_sex");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_sex`";

	
	
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
	$edata["LookupTable"] = "_sex";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "sex_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "sex_name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdataauctions["yahoo_sex"] = $fdata;
//	yahoo_sozai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "yahoo_sozai";
	$fdata["GoodName"] = "yahoo_sozai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","yahoo_sozai");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sozai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_sozai`";

	
	
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




	$tdataauctions["yahoo_sozai"] = $fdata;
//	yahoo_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "yahoo_color";
	$fdata["GoodName"] = "yahoo_color";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","yahoo_color");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_color";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_color`";

	
	
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




	$tdataauctions["yahoo_color"] = $fdata;
//	yahoo_fuzokuhin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "yahoo_fuzokuhin";
	$fdata["GoodName"] = "yahoo_fuzokuhin";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","yahoo_fuzokuhin");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_fuzokuhin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_fuzokuhin`";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataauctions["yahoo_fuzokuhin"] = $fdata;
//	stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "stamp";
	$fdata["GoodName"] = "stamp";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","stamp");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "stamp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`stamp`";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataauctions["stamp"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","yahoo_kataban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_kataban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_kataban`";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataauctions["yahoo_kataban"] = $fdata;
//	yahoo_sankou_uwadai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "yahoo_sankou_uwadai";
	$fdata["GoodName"] = "yahoo_sankou_uwadai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","yahoo_sankou_uwadai");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sankou_uwadai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_sankou_uwadai`";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataauctions["yahoo_sankou_uwadai"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","satei_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`satei_by`";

	
	
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




	$tdataauctions["satei_by"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","satei_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`satei_hi`";

	
	
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

	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataauctions["satei_hi"] = $fdata;
//	REG_AUTHOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "REG_AUTHOR";
	$fdata["GoodName"] = "REG_AUTHOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","REG_AUTHOR");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_AUTHOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_AUTHOR`";

	
	
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




	$tdataauctions["REG_AUTHOR"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","DT_UP_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DT_UP_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DT_UP_DATE`";

	
	
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

	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataauctions["DT_UP_DATE"] = $fdata;
//	kaitori_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "kaitori_by";
	$fdata["GoodName"] = "kaitori_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","kaitori_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kaitori_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`kaitori_by`";

	
	
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




	$tdataauctions["kaitori_by"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "kaitory_hi";
	$fdata["GoodName"] = "kaitory_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","kaitory_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kaitory_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`kaitory_hi`";

	
	
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

	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataauctions["kaitory_hi"] = $fdata;
//	yahoo_saisun_sha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "yahoo_saisun_sha";
	$fdata["GoodName"] = "yahoo_saisun_sha";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","yahoo_saisun_sha");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_saisun_sha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`yahoo_saisun_sha`";

	
	
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




	$tdataauctions["yahoo_saisun_sha"] = $fdata;
//	saisun_start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "saisun_start";
	$fdata["GoodName"] = "saisun_start";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","saisun_start");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "saisun_start";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`saisun_start`";

	
	
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

	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataauctions["saisun_start"] = $fdata;
//	saisun_end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "saisun_end";
	$fdata["GoodName"] = "saisun_end";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","saisun_end");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "saisun_end";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`saisun_end`";

	
	
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

	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataauctions["saisun_end"] = $fdata;
//	REG_PHOTOGRAPHER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "REG_PHOTOGRAPHER";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","REG_PHOTOGRAPHER");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_PHOTOGRAPHER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_PHOTOGRAPHER`";

	
	
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




	$tdataauctions["REG_PHOTOGRAPHER"] = $fdata;
//	REG_PHOTOGRAPHER_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","REG_PHOTOGRAPHER_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_PHOTOGRAPHER_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_PHOTOGRAPHER_DATE`";

	
	
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

	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataauctions["REG_PHOTOGRAPHER_DATE"] = $fdata;
//	REG_KAKOU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "REG_KAKOU";
	$fdata["GoodName"] = "REG_KAKOU";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","REG_KAKOU");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_KAKOU";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_KAKOU`";

	
	
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




	$tdataauctions["REG_KAKOU"] = $fdata;
//	REG_KAKOU_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "REG_KAKOU_DATE";
	$fdata["GoodName"] = "REG_KAKOU_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","REG_KAKOU_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_KAKOU_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_KAKOU_DATE`";

	
	
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

	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataauctions["REG_KAKOU_DATE"] = $fdata;
//	REG_PACKINGS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "REG_PACKINGS";
	$fdata["GoodName"] = "REG_PACKINGS";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","REG_PACKINGS");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_PACKINGS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_PACKINGS`";

	
	
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




	$tdataauctions["REG_PACKINGS"] = $fdata;
//	DT_PACKING_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "DT_PACKING_DATE";
	$fdata["GoodName"] = "DT_PACKING_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","DT_PACKING_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DT_PACKING_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DT_PACKING_DATE`";

	
	
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

	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataauctions["DT_PACKING_DATE"] = $fdata;
//	REG_EXHIBITOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "REG_EXHIBITOR";
	$fdata["GoodName"] = "REG_EXHIBITOR";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","REG_EXHIBITOR");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_EXHIBITOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`REG_EXHIBITOR`";

	
	
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




	$tdataauctions["REG_EXHIBITOR"] = $fdata;
//	Exhibition_Date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Exhibition_Date";
	$fdata["GoodName"] = "Exhibition_Date";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","Exhibition_Date");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Exhibition_Date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Exhibition_Date`";

	
	
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

	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataauctions["Exhibition_Date"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","updated_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`updated_by`";

	
	
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




	$tdataauctions["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("auctions","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`updated_at`";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataauctions["updated_at"] = $fdata;


$tables_data["auctions"]=&$tdataauctions;
$field_labels["auctions"] = &$fieldLabelsauctions;
$fieldToolTips["auctions"] = &$fieldToolTipsauctions;
$placeHolders["auctions"] = &$placeHoldersauctions;
$page_titles["auctions"] = &$pageTitlesauctions;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["auctions"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["auctions"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_auctions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`auctions`.`id`,  `auctions`.`bod_id` AS `zip_link`,  `auctions`.`bod_id`,  concat(\"/include/yahoo_template/temp.php?product_id=\", auctions.product_id, \"\") AS `y_preview`,  `auctions`.`product_id`,  `shouhin`.`yahoo_sinaban` AS `shouhin_yahoo_sinaban`,  `auctions`.`sales_period_designation`,  `auctions`.`Starting_price`,  `auctions`.`Categories`,  `auctions`.`Title`,  `auctions`.`Items_in_the_store_for_the_search_keyword`,  `auctions`.`raku_new_arrival_url`,  `auctions`.`raku_goods_name`,  `auctions`.`Qty`,  `shouhin`.`price`,  `shouhin`.`sales_price`,  `shouhin`.`yahoo_condition1`,  `shouhin`.`yahoo_size`,  `shouhin`.`remark`,  `shouhin`.`yahoo_sex`,  `shouhin`.`yahoo_sozai`,  `shouhin`.`yahoo_color`,  `shouhin`.`yahoo_fuzokuhin`,  `shouhin`.`stamp`,  `shouhin`.`yahoo_kataban`,  `shouhin`.`yahoo_sankou_uwadai`,  `shouhin`.`satei_by`,  `shouhin`.`satei_hi`,  `shouhin`.`REG_AUTHOR`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`kaitori_by`,  `shouhin`.`kaitory_hi`,  `shouhin`.`yahoo_saisun_sha`,  `shouhin`.`saisun_start`,  `shouhin`.`saisun_end`,  `shouhin`.`REG_PHOTOGRAPHER`,  `shouhin`.`REG_PHOTOGRAPHER_DATE`,  `shouhin`.`REG_KAKOU`,  `shouhin`.`REG_KAKOU_DATE`,  `shouhin`.`REG_PACKINGS`,  `shouhin`.`DT_PACKING_DATE`,  `shouhin`.`REG_EXHIBITOR`,  `shouhin`.`Exhibition_Date`,  `shouhin`.`updated_by`,  `shouhin`.`updated_at`";
$proto0["m_strFrom"] = "FROM `auctions`  LEFT OUTER JOIN `shouhin` ON `auctions`.`product_id` = `shouhin`.`product_id`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `auctions`.`id` DESC";
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
	"m_strTable" => "auctions",
	"m_srcTableName" => "auctions"
));

$proto6["m_sql"] = "`auctions`.`id`";
$proto6["m_srcTableName"] = "auctions";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "bod_id",
	"m_strTable" => "auctions",
	"m_srcTableName" => "auctions"
));

$proto8["m_sql"] = "`auctions`.`bod_id`";
$proto8["m_srcTableName"] = "auctions";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "zip_link";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "bod_id",
	"m_strTable" => "auctions",
	"m_srcTableName" => "auctions"
));

$proto10["m_sql"] = "`auctions`.`bod_id`";
$proto10["m_srcTableName"] = "auctions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$proto13=array();
$proto13["m_functiontype"] = "SQLF_CUSTOM";
$proto13["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"/include/yahoo_template/temp.php?product_id=\""
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "auctions.product_id"
));

$proto13["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto13["m_arguments"][]=$obj;
$proto13["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto13);

$proto12["m_sql"] = "concat(\"/include/yahoo_template/temp.php?product_id=\", auctions.product_id, \"\")";
$proto12["m_srcTableName"] = "auctions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "y_preview";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "auctions",
	"m_srcTableName" => "auctions"
));

$proto17["m_sql"] = "`auctions`.`product_id`";
$proto17["m_srcTableName"] = "auctions";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto19["m_sql"] = "`shouhin`.`yahoo_sinaban`";
$proto19["m_srcTableName"] = "auctions";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "shouhin_yahoo_sinaban";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_period_designation",
	"m_strTable" => "auctions",
	"m_srcTableName" => "auctions"
));

$proto21["m_sql"] = "`auctions`.`sales_period_designation`";
$proto21["m_srcTableName"] = "auctions";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "Starting_price",
	"m_strTable" => "auctions",
	"m_srcTableName" => "auctions"
));

$proto23["m_sql"] = "`auctions`.`Starting_price`";
$proto23["m_srcTableName"] = "auctions";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Categories",
	"m_strTable" => "auctions",
	"m_srcTableName" => "auctions"
));

$proto25["m_sql"] = "`auctions`.`Categories`";
$proto25["m_srcTableName"] = "auctions";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "Title",
	"m_strTable" => "auctions",
	"m_srcTableName" => "auctions"
));

$proto27["m_sql"] = "`auctions`.`Title`";
$proto27["m_srcTableName"] = "auctions";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "Items_in_the_store_for_the_search_keyword",
	"m_strTable" => "auctions",
	"m_srcTableName" => "auctions"
));

$proto29["m_sql"] = "`auctions`.`Items_in_the_store_for_the_search_keyword`";
$proto29["m_srcTableName"] = "auctions";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_new_arrival_url",
	"m_strTable" => "auctions",
	"m_srcTableName" => "auctions"
));

$proto31["m_sql"] = "`auctions`.`raku_new_arrival_url`";
$proto31["m_srcTableName"] = "auctions";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "raku_goods_name",
	"m_strTable" => "auctions",
	"m_srcTableName" => "auctions"
));

$proto33["m_sql"] = "`auctions`.`raku_goods_name`";
$proto33["m_srcTableName"] = "auctions";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Qty",
	"m_strTable" => "auctions",
	"m_srcTableName" => "auctions"
));

$proto35["m_sql"] = "`auctions`.`Qty`";
$proto35["m_srcTableName"] = "auctions";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto37["m_sql"] = "`shouhin`.`price`";
$proto37["m_srcTableName"] = "auctions";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto39["m_sql"] = "`shouhin`.`sales_price`";
$proto39["m_srcTableName"] = "auctions";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto41["m_sql"] = "`shouhin`.`yahoo_condition1`";
$proto41["m_srcTableName"] = "auctions";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_size",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto43["m_sql"] = "`shouhin`.`yahoo_size`";
$proto43["m_srcTableName"] = "auctions";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto45["m_sql"] = "`shouhin`.`remark`";
$proto45["m_srcTableName"] = "auctions";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sex",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto47["m_sql"] = "`shouhin`.`yahoo_sex`";
$proto47["m_srcTableName"] = "auctions";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sozai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto49["m_sql"] = "`shouhin`.`yahoo_sozai`";
$proto49["m_srcTableName"] = "auctions";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_color",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto51["m_sql"] = "`shouhin`.`yahoo_color`";
$proto51["m_srcTableName"] = "auctions";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_fuzokuhin",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto53["m_sql"] = "`shouhin`.`yahoo_fuzokuhin`";
$proto53["m_srcTableName"] = "auctions";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "stamp",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto55["m_sql"] = "`shouhin`.`stamp`";
$proto55["m_srcTableName"] = "auctions";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto57["m_sql"] = "`shouhin`.`yahoo_kataban`";
$proto57["m_srcTableName"] = "auctions";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sankou_uwadai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto59["m_sql"] = "`shouhin`.`yahoo_sankou_uwadai`";
$proto59["m_srcTableName"] = "auctions";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto61["m_sql"] = "`shouhin`.`satei_by`";
$proto61["m_srcTableName"] = "auctions";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto63["m_sql"] = "`shouhin`.`satei_hi`";
$proto63["m_srcTableName"] = "auctions";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_AUTHOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto65["m_sql"] = "`shouhin`.`REG_AUTHOR`";
$proto65["m_srcTableName"] = "auctions";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto67["m_sql"] = "`shouhin`.`DT_UP_DATE`";
$proto67["m_srcTableName"] = "auctions";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto69["m_sql"] = "`shouhin`.`kaitori_by`";
$proto69["m_srcTableName"] = "auctions";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto71["m_sql"] = "`shouhin`.`kaitory_hi`";
$proto71["m_srcTableName"] = "auctions";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_saisun_sha",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto73["m_sql"] = "`shouhin`.`yahoo_saisun_sha`";
$proto73["m_srcTableName"] = "auctions";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_start",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto75["m_sql"] = "`shouhin`.`saisun_start`";
$proto75["m_srcTableName"] = "auctions";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "saisun_end",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto77["m_sql"] = "`shouhin`.`saisun_end`";
$proto77["m_srcTableName"] = "auctions";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto79["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER`";
$proto79["m_srcTableName"] = "auctions";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto81["m_sql"] = "`shouhin`.`REG_PHOTOGRAPHER_DATE`";
$proto81["m_srcTableName"] = "auctions";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto83["m_sql"] = "`shouhin`.`REG_KAKOU`";
$proto83["m_srcTableName"] = "auctions";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto85["m_sql"] = "`shouhin`.`REG_KAKOU_DATE`";
$proto85["m_srcTableName"] = "auctions";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PACKINGS",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto87["m_sql"] = "`shouhin`.`REG_PACKINGS`";
$proto87["m_srcTableName"] = "auctions";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_PACKING_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto89["m_sql"] = "`shouhin`.`DT_PACKING_DATE`";
$proto89["m_srcTableName"] = "auctions";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_EXHIBITOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto91["m_sql"] = "`shouhin`.`REG_EXHIBITOR`";
$proto91["m_srcTableName"] = "auctions";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "Exhibition_Date",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto93["m_sql"] = "`shouhin`.`Exhibition_Date`";
$proto93["m_srcTableName"] = "auctions";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto95["m_sql"] = "`shouhin`.`updated_by`";
$proto95["m_srcTableName"] = "auctions";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "auctions"
));

$proto97["m_sql"] = "`shouhin`.`updated_at`";
$proto97["m_srcTableName"] = "auctions";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto99=array();
$proto99["m_link"] = "SQLL_MAIN";
			$proto100=array();
$proto100["m_strName"] = "auctions";
$proto100["m_srcTableName"] = "auctions";
$proto100["m_columns"] = array();
$proto100["m_columns"][] = "id";
$proto100["m_columns"][] = "bod_id";
$proto100["m_columns"][] = "product_id";
$proto100["m_columns"][] = "store_product_id";
$proto100["m_columns"][] = "Control_Number";
$proto100["m_columns"][] = "Categories";
$proto100["m_columns"][] = "Title";
$proto100["m_columns"][] = "Description";
$proto100["m_columns"][] = "Description_for_mobile_version";
$proto100["m_columns"][] = "Items_in_the_store_for_the_search_keyword";
$proto100["m_columns"][] = "Starting_price";
$proto100["m_columns"][] = "Qty";
$proto100["m_columns"][] = "Limited_number_of_bids";
$proto100["m_columns"][] = "Period";
$proto100["m_columns"][] = "End_time";
$proto100["m_columns"][] = "State_of_the_original_shipment";
$proto100["m_columns"][] = "Shipment_of_the_original_city";
$proto100["m_columns"][] = "Expense";
$proto100["m_columns"][] = "Upfront_payment_deferred_payment";
$proto100["m_columns"][] = "Navigation_Settings_payment_bid";
$proto100["m_columns"][] = "Product_status";
$proto100["m_columns"][] = "Note:_Product_status";
$proto100["m_columns"][] = "Returns_whether_or_not";
$proto100["m_columns"][] = "Note_whether_the_return";
$proto100["m_columns"][] = "Image_1";
$proto100["m_columns"][] = "Image_1_Comments";
$proto100["m_columns"][] = "Image_2";
$proto100["m_columns"][] = "Image_2_comments";
$proto100["m_columns"][] = "Image_3";
$proto100["m_columns"][] = "Image_3_comments";
$proto100["m_columns"][] = "Image_4";
$proto100["m_columns"][] = "Image_4_comments";
$proto100["m_columns"][] = "Image_5";
$proto100["m_columns"][] = "Image_5_comments";
$proto100["m_columns"][] = "Image_6";
$proto100["m_columns"][] = "Image_6_comments";
$proto100["m_columns"][] = "Image_7";
$proto100["m_columns"][] = "Image_7_comments";
$proto100["m_columns"][] = "Image_8";
$proto100["m_columns"][] = "Image_8_comments";
$proto100["m_columns"][] = "Image_9";
$proto100["m_columns"][] = "Image_9_comments";
$proto100["m_columns"][] = "Image_10";
$proto100["m_columns"][] = "Image_10_comments";
$proto100["m_columns"][] = "Lowest_rating";
$proto100["m_columns"][] = "Automatic_extension";
$proto100["m_columns"][] = "Early_termination";
$proto100["m_columns"][] = "Price_summary";
$proto100["m_columns"][] = "Automatic_price_cut";
$proto100["m_columns"][] = "Charity";
$proto100["m_columns"][] = "Price_negotiation";
$proto100["m_columns"][] = "Auto_Relist_Item";
$proto100["m_columns"][] = "Lowest_winning_bid";
$proto100["m_columns"][] = "Auction_Spotlight";
$proto100["m_columns"][] = "Bold_text";
$proto100["m_columns"][] = "Background_color";
$proto100["m_columns"][] = "Sutoahottookushon";
$proto100["m_columns"][] = "Prominent_icon";
$proto100["m_columns"][] = "Icon_Gifts";
$proto100["m_columns"][] = "Yahoo_point_options";
$proto100["m_columns"][] = "Afirieitoopushon";
$proto100["m_columns"][] = "Package_size";
$proto100["m_columns"][] = "Weight_of_luggage";
$proto100["m_columns"][] = "FUN_BOON";
$proto100["m_columns"][] = "delvery_1";
$proto100["m_columns"][] = "delivery_link_1";
$proto100["m_columns"][] = "delivery_methods_1";
$proto100["m_columns"][] = "delivery_2";
$proto100["m_columns"][] = "delivery_link_2";
$proto100["m_columns"][] = "delivery_methods_2";
$proto100["m_columns"][] = "image_amount";
$proto100["m_columns"][] = "delivery_3";
$proto100["m_columns"][] = "delivery_link_3";
$proto100["m_columns"][] = "delivery_methods_3";
$proto100["m_columns"][] = "delivery_4";
$proto100["m_columns"][] = "delivery_link_4";
$proto100["m_columns"][] = "delivery_methods_4";
$proto100["m_columns"][] = "delivery_5";
$proto100["m_columns"][] = "delivery_link_5";
$proto100["m_columns"][] = "delivery_methods_5";
$proto100["m_columns"][] = "delivery_6";
$proto100["m_columns"][] = "delivery_link_6";
$proto100["m_columns"][] = "delivery_methods_6";
$proto100["m_columns"][] = "delivery_7";
$proto100["m_columns"][] = "delivery_link_7";
$proto100["m_columns"][] = "delivery_methods_7";
$proto100["m_columns"][] = "delivery_8";
$proto100["m_columns"][] = "delivery_link_8";
$proto100["m_columns"][] = "delivery_methods_8";
$proto100["m_columns"][] = "delivery_9";
$proto100["m_columns"][] = "delivery_link_9";
$proto100["m_columns"][] = "delivery_methods_9";
$proto100["m_columns"][] = "delivery_10";
$proto100["m_columns"][] = "delivery_link_10";
$proto100["m_columns"][] = "delivery_methods_10";
$proto100["m_columns"][] = "Image_1_Comments1";
$proto100["m_columns"][] = "amount_of_image";
$proto100["m_columns"][] = "International_shipping";
$proto100["m_columns"][] = "International shipping";
$proto100["m_columns"][] = "raku_cont_col";
$proto100["m_columns"][] = "raku_goods_name";
$proto100["m_columns"][] = "raku_tag";
$proto100["m_columns"][] = "raku_price";
$proto100["m_columns"][] = "raku_dir";
$proto100["m_columns"][] = "rak_pc_catch";
$proto100["m_columns"][] = "rak_moobile";
$proto100["m_columns"][] = "raku_shouhinjyouhou_layout";
$proto100["m_columns"][] = "raku_tax";
$proto100["m_columns"][] = "raku_send_price";
$proto100["m_columns"][] = "raku_kobetu_souryou";
$proto100["m_columns"][] = "raku_souryou_kubun1";
$proto100["m_columns"][] = "raku_souryou_kubun2";
$proto100["m_columns"][] = "raku_daibiki";
$proto100["m_columns"][] = "raku_souko_sitei";
$proto100["m_columns"][] = "raku_layout";
$proto100["m_columns"][] = "raku_chuumon_btn";
$proto100["m_columns"][] = "raku_siryou_seikyuu";
$proto100["m_columns"][] = "raku_shouhin_toiawase";
$proto100["m_columns"][] = "raku_sainyuuka_osirase";
$proto100["m_columns"][] = "raku_mobile_disp";
$proto100["m_columns"][] = "raku_nosi_taiou";
$proto100["m_columns"][] = "raku_pc_shouhin_setumei";
$proto100["m_columns"][] = "raku_mobile_setumei";
$proto100["m_columns"][] = "raku_smartphone_setumei";
$proto100["m_columns"][] = "raku_pcyou_hanbai_setumei";
$proto100["m_columns"][] = "raku_douga";
$proto100["m_columns"][] = "raku_hanbai_sitei_kikan";
$proto100["m_columns"][] = "raku_chuumon_uketukesuu";
$proto100["m_columns"][] = "raku_zaiko_tipe";
$proto100["m_columns"][] = "raku_zaiko_suu";
$proto100["m_columns"][] = "raku_zaiko_suu_hyouji";
$proto100["m_columns"][] = "raku_kumoku_kobetu_zaiko";
$proto100["m_columns"][] = "raku_koumoku_sentaku_tate";
$proto100["m_columns"][] = "koumoku_sentaku_kobetu_sikii";
$proto100["m_columns"][] = "raku__yamiichi_pass";
$proto100["m_columns"][] = "raku_catalog";
$proto100["m_columns"][] = "raku_zaiko_modosi";
$proto100["m_columns"][] = "raku_zaiko_kire";
$proto100["m_columns"][] = "raku_zaiko_ari";
$proto100["m_columns"][] = "raku_zaiko_kire_nouki";
$proto100["m_columns"][] = "raku_point";
$proto100["m_columns"][] = "raku_point_bairitu_tekiyo";
$proto100["m_columns"][] = "raku_header_footer";
$proto100["m_columns"][] = "raku_hyouji_koumoku_narabi";
$proto100["m_columns"][] = "raku_kyoutuu_setumei";
$proto100["m_columns"][] = "raku_medama";
$proto100["m_columns"][] = "raku_kyoutuu_setumei_dai";
$proto100["m_columns"][] = "raku_review";
$proto100["m_columns"][] = "raku_asuraku_haisou";
$proto100["m_columns"][] = "_raku_kaigai_haisou";
$proto100["m_columns"][] = "raku_saizu_hyou_link";
$proto100["m_columns"][] = "raku_image1";
$proto100["m_columns"][] = "raku_image2";
$proto100["m_columns"][] = "raku_image3";
$proto100["m_columns"][] = "raku_image4";
$proto100["m_columns"][] = "raku_hyoujisaki_category";
$proto100["m_columns"][] = "raku_search";
$proto100["m_columns"][] = "raku_koumoku_sentaku_yoko";
$proto100["m_columns"][] = "raku_hyouji_kakaku";
$proto100["m_columns"][] = "raku_shouhin_bangou";
$proto100["m_columns"][] = "rakuten.raku_cont_col";
$proto100["m_columns"][] = "raku_hyouji_big";
$proto100["m_columns"][] = "raku_hyouji_mid";
$proto100["m_columns"][] = "raku_hyouji_small";
$proto100["m_columns"][] = "raku_hyouji_det1";
$proto100["m_columns"][] = "raku_hyouji_det2";
$proto100["m_columns"][] = "raku_hyouji_det3";
$proto100["m_columns"][] = "raku_yuusendo";
$proto100["m_columns"][] = "raku_zaiko_makimodosi";
$proto100["m_columns"][] = "raku_one_page_fukusuu_housiki";
$proto100["m_columns"][] = "raku_zakiko_kirejino_chuumon";
$proto100["m_columns"][] = "raku_zaiko_AR";
$proto100["m_columns"][] = "raku_ziiko_AS";
$proto100["m_columns"][] = "Internationalshipping";
$proto100["m_columns"][] = "sales_period_designation";
$proto100["m_columns"][] = "raku_new_arrival_url";
$proto100["m_columns"][] = "updated_at";
$proto100["m_columns"][] = "created_at";
$obj = new SQLTable($proto100);

$proto99["m_table"] = $obj;
$proto99["m_sql"] = "`auctions`";
$proto99["m_alias"] = "";
$proto99["m_srcTableName"] = "auctions";
$proto101=array();
$proto101["m_sql"] = "";
$proto101["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto101["m_column"]=$obj;
$proto101["m_contained"] = array();
$proto101["m_strCase"] = "";
$proto101["m_havingmode"] = false;
$proto101["m_inBrackets"] = false;
$proto101["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto101);

$proto99["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto99);

$proto0["m_fromlist"][]=$obj;
												$proto103=array();
$proto103["m_link"] = "SQLL_LEFTJOIN";
			$proto104=array();
$proto104["m_strName"] = "shouhin";
$proto104["m_srcTableName"] = "auctions";
$proto104["m_columns"] = array();
$proto104["m_columns"][] = "product_id";
$proto104["m_columns"][] = "category_id";
$proto104["m_columns"][] = "goods_title";
$proto104["m_columns"][] = "title";
$proto104["m_columns"][] = "sub_category_id1";
$proto104["m_columns"][] = "ecc_id";
$proto104["m_columns"][] = "price";
$proto104["m_columns"][] = "yahoo";
$proto104["m_columns"][] = "remark";
$proto104["m_columns"][] = "sales_price";
$proto104["m_columns"][] = "description";
$proto104["m_columns"][] = "status";
$proto104["m_columns"][] = "product_num";
$proto104["m_columns"][] = "updated_at";
$proto104["m_columns"][] = "yahoo_size";
$proto104["m_columns"][] = "yahoo_title";
$proto104["m_columns"][] = "yahoo_junle";
$proto104["m_columns"][] = "yahoo_sankou_uwadai";
$proto104["m_columns"][] = "yahoo_sozai";
$proto104["m_columns"][] = "yahoo_color";
$proto104["m_columns"][] = "yahoo_kataban";
$proto104["m_columns"][] = "yahoo_condition1";
$proto104["m_columns"][] = "yahoo_condition2";
$proto104["m_columns"][] = "yahoo_fuzokuhin";
$proto104["m_columns"][] = "yahoo_sinaban";
$proto104["m_columns"][] = "yahoo_saisun_sha";
$proto104["m_columns"][] = "yahoo_sex";
$proto104["m_columns"][] = "box_id";
$proto104["m_columns"][] = "nyuukin_price";
$proto104["m_columns"][] = "updated_by";
$proto104["m_columns"][] = "raku_title";
$proto104["m_columns"][] = "raku_hyoujisaki_category2";
$proto104["m_columns"][] = "raku_hyoujisaki_category";
$proto104["m_columns"][] = "raku_hyoujisaki_category3";
$proto104["m_columns"][] = "timesta";
$proto104["m_columns"][] = "saisun_start";
$proto104["m_columns"][] = "saisun_end";
$proto104["m_columns"][] = "label_output_flag";
$proto104["m_columns"][] = "season";
$proto104["m_columns"][] = "kanryou_henbi";
$proto104["m_columns"][] = "box_sort";
$proto104["m_columns"][] = "satei_by";
$proto104["m_columns"][] = "kaitori_by";
$proto104["m_columns"][] = "comment";
$proto104["m_columns"][] = "satei_hi";
$proto104["m_columns"][] = "kaitory_hi";
$proto104["m_columns"][] = "REG_PHOTOGRAPHER";
$proto104["m_columns"][] = "REG_AUTHOR";
$proto104["m_columns"][] = "REG_PACKINGS";
$proto104["m_columns"][] = "REG_KAKOU_DATE";
$proto104["m_columns"][] = "REG_KAKOU";
$proto104["m_columns"][] = "REG_EXHIBITOR";
$proto104["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto104["m_columns"][] = "DT_PACKING_DATE";
$proto104["m_columns"][] = "DT_UP_DATE";
$proto104["m_columns"][] = "AWAZU_DATE";
$proto104["m_columns"][] = "AWAZU_NIN";
$proto104["m_columns"][] = "sabun_date";
$proto104["m_columns"][] = "browseid";
$proto104["m_columns"][] = "browsenode";
$proto104["m_columns"][] = "gold_property";
$proto104["m_columns"][] = "ichiba_title";
$proto104["m_columns"][] = "Gram";
$proto104["m_columns"][] = "Parent_stone";
$proto104["m_columns"][] = "Aside_stone";
$proto104["m_columns"][] = "Appraiser";
$proto104["m_columns"][] = "Remarks";
$proto104["m_columns"][] = "Destination_selling";
$proto104["m_columns"][] = "Finish";
$proto104["m_columns"][] = "Discrimination";
$proto104["m_columns"][] = "accessories";
$proto104["m_columns"][] = "priority";
$proto104["m_columns"][] = "A_storage";
$proto104["m_columns"][] = "price_per_gram";
$proto104["m_columns"][] = "price_per_parent_stone";
$proto104["m_columns"][] = "price_per_aside_stone";
$proto104["m_columns"][] = "price_secret";
$proto104["m_columns"][] = "sales_price_secret";
$proto104["m_columns"][] = "eq";
$proto104["m_columns"][] = "en";
$proto104["m_columns"][] = "line";
$proto104["m_columns"][] = "item_name";
$proto104["m_columns"][] = "handle";
$proto104["m_columns"][] = "yahoo_color_id";
$proto104["m_columns"][] = "raku_hyoujisaki_category4";
$proto104["m_columns"][] = "raku_hyoujisaki_category5";
$proto104["m_columns"][] = "raku_dir_1";
$proto104["m_columns"][] = "raku_dir_2";
$proto104["m_columns"][] = "raku_dir_3";
$proto104["m_columns"][] = "raku_dir_4";
$proto104["m_columns"][] = "raku_dir_5";
$proto104["m_columns"][] = "raku_dir_result";
$proto104["m_columns"][] = "raku_tag_result";
$proto104["m_columns"][] = "serial_number";
$proto104["m_columns"][] = "Exhibition_Date";
$proto104["m_columns"][] = "search_keyword";
$proto104["m_columns"][] = "stamp";
$proto104["m_columns"][] = "motif";
$proto104["m_columns"][] = "Setting";
$proto104["m_columns"][] = "processing";
$proto104["m_columns"][] = "Sleeve_Length";
$proto104["m_columns"][] = "length";
$proto104["m_columns"][] = "Ring_size";
$proto104["m_columns"][] = "price_for_site";
$proto104["m_columns"][] = "yahoo_category_id";
$proto104["m_columns"][] = "Qty";
$proto104["m_columns"][] = "sales_period";
$proto104["m_columns"][] = "starting_price";
$proto104["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto104["m_columns"][] = "amount_of_image";
$proto104["m_columns"][] = "csv";
$proto104["m_columns"][] = "return_output_flag";
$proto104["m_columns"][] = "wasabi_flag";
$proto104["m_columns"][] = "ws_import_date";
$proto104["m_columns"][] = "logo";
$proto104["m_columns"][] = "parts";
$proto104["m_columns"][] = "country_of_origin";
$proto104["m_columns"][] = "zipper";
$proto104["m_columns"][] = "guarantee";
$proto104["m_columns"][] = "errors";
$proto104["m_columns"][] = "designer";
$proto104["m_columns"][] = "hahakai";
$proto104["m_columns"][] = "effect";
$proto104["m_columns"][] = "shape";
$proto104["m_columns"][] = "cutting_style";
$proto104["m_columns"][] = "chain_type";
$proto104["m_columns"][] = "number_of_stones";
$proto104["m_columns"][] = "amount";
$proto104["m_columns"][] = "satei_error";
$proto104["m_columns"][] = "producing_area";
$proto104["m_columns"][] = "shape_supplement";
$proto104["m_columns"][] = "side_gem";
$proto104["m_columns"][] = "product_style";
$proto104["m_columns"][] = "collar_neck_line";
$proto104["m_columns"][] = "breast";
$proto104["m_columns"][] = "silhouette";
$proto104["m_columns"][] = "sleeve";
$proto104["m_columns"][] = "unit";
$proto104["m_columns"][] = "hall_mark";
$proto104["m_columns"][] = "plate";
$proto104["m_columns"][] = "toe";
$proto104["m_columns"][] = "heel";
$proto104["m_columns"][] = "cloth";
$proto104["m_columns"][] = "serial_number_for_storage";
$proto104["m_columns"][] = "official_url";
$proto104["m_columns"][] = "main_details";
$proto104["m_columns"][] = "notation_size";
$proto104["m_columns"][] = "shoe_size_jp";
$proto104["m_columns"][] = "Eoc_chigins2_id";
$proto104["m_columns"][] = "country_of_origin_name";
$proto104["m_columns"][] = "mailingkit_id";
$proto104["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto104["m_columns"][] = "DA_WEIGHT";
$proto104["m_columns"][] = "DA_PER_CARAT";
$proto104["m_columns"][] = "DA_SHAPE";
$proto104["m_columns"][] = "DA_SELFGRES";
$proto104["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto104["m_columns"][] = "DA_SUGARCANE";
$proto104["m_columns"][] = "DA_RAPA";
$proto104["m_columns"][] = "DA_INTENSITY";
$proto104["m_columns"][] = "DA_OVERTONE";
$proto104["m_columns"][] = "DA_COLOR";
$proto104["m_columns"][] = "DA_CLARITY";
$proto104["m_columns"][] = "DA_CUT";
$proto104["m_columns"][] = "DA_POLISH";
$proto104["m_columns"][] = "DA_SYMMETRY";
$proto104["m_columns"][] = "DA_FLUO";
$proto104["m_columns"][] = "DA_COLOR_FLUO";
$proto104["m_columns"][] = "DA_WIDE";
$proto104["m_columns"][] = "DA_HIGH";
$proto104["m_columns"][] = "DA_DEPTH";
$proto104["m_columns"][] = "DA_APPRAISER";
$proto104["m_columns"][] = "DA_FRAPA";
$proto104["m_columns"][] = "DA_RATE";
$proto104["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto104["m_columns"][] = "DA_YOURNAME";
$proto104["m_columns"][] = "DA_RAPAB";
$proto104["m_columns"][] = "DA_GROSSPROFIT";
$proto104["m_columns"][] = "DA_INTEREST_1";
$proto104["m_columns"][] = "DA_no";
$proto104["m_columns"][] = "kinsa_flag";
$proto104["m_columns"][] = "price_for_site_flag";
$proto104["m_columns"][] = "Eoc_takuhai_id";
$proto104["m_columns"][] = "Eoc_unfinished_id";
$proto104["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto104["m_columns"][] = "chohyo_id";
$proto104["m_columns"][] = "location";
$proto104["m_columns"][] = "special_instructions_1";
$proto104["m_columns"][] = "special_instructions_2";
$proto104["m_columns"][] = "special_instructions_3";
$proto104["m_columns"][] = "chohyo_seihin_flag";
$proto104["m_columns"][] = "chohyo_dia_flag";
$proto104["m_columns"][] = "chohyo_type";
$proto104["m_columns"][] = "ichiyen_flag";
$proto104["m_columns"][] = "asuraku_fuka_flag";
$proto104["m_columns"][] = "parallel_import_flag";
$proto104["m_columns"][] = "meisai_number";
$proto104["m_columns"][] = "days_keep_price";
$proto104["m_columns"][] = "initial_included";
$proto104["m_columns"][] = "novelty";
$proto104["m_columns"][] = "tentou_label_output_flag";
$proto104["m_columns"][] = "itaku_flag";
$proto104["m_columns"][] = "including_catch";
$proto104["m_columns"][] = "ichiba_meeting_month";
$proto104["m_columns"][] = "ichiba_meeting_name";
$proto104["m_columns"][] = "ichiba_color";
$proto104["m_columns"][] = "ichiba_clarity";
$proto104["m_columns"][] = "ichiba_melee_gai";
$proto104["m_columns"][] = "ichiba_lot_pieces";
$proto104["m_columns"][] = "ichiba_image";
$proto104["m_columns"][] = "ichiba_img";
$proto104["m_columns"][] = "gold_check_id";
$proto104["m_columns"][] = "ichiba_exhibition_id";
$proto104["m_columns"][] = "ichiba_exhibition_sort";
$proto104["m_columns"][] = "cost";
$proto104["m_columns"][] = "auto_price_cut_prohibited";
$proto104["m_columns"][] = "event_price";
$proto104["m_columns"][] = "identification_cost";
$proto104["m_columns"][] = "other_cost";
$proto104["m_columns"][] = "stock_quantity";
$proto104["m_columns"][] = "Eoc_trader_id_for_buy";
$proto104["m_columns"][] = "Eoc_trader_id_for_sell";
$proto104["m_columns"][] = "multiplication_rate";
$proto104["m_columns"][] = "many_product_group_id";
$proto104["m_columns"][] = "trading_sort_id";
$proto104["m_columns"][] = "many_product_group_saiban";
$proto104["m_columns"][] = "purchase_category";
$proto104["m_columns"][] = "created_at";
$proto104["m_columns"][] = "created_by";
$proto104["m_columns"][] = "manual_input_price_per_gram";
$proto104["m_columns"][] = "satei_start";
$proto104["m_columns"][] = "self_DA_INTENSITY";
$proto104["m_columns"][] = "self_DA_OVERTONE";
$proto104["m_columns"][] = "self_DA_COLOR";
$proto104["m_columns"][] = "self_DA_CLARITY";
$proto104["m_columns"][] = "self_DA_CUT";
$proto104["m_columns"][] = "self_DA_POLISH";
$proto104["m_columns"][] = "self_DA_SYMMETRY";
$proto104["m_columns"][] = "self_DA_FLUO";
$proto104["m_columns"][] = "self_DA_COLOR_FLUO";
$proto104["m_columns"][] = "self_DA_FRAPA";
$proto104["m_columns"][] = "self_DA_RATE";
$proto104["m_columns"][] = "self_multiplication_rate";
$proto104["m_columns"][] = "is_seiyaku";
$proto104["m_columns"][] = "destination_sold_out";
$proto104["m_columns"][] = "mypage_update_prohibited";
$proto104["m_columns"][] = "gold_check_scan_id";
$proto104["m_columns"][] = "buy_campaign_data_id";
$proto104["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto104["m_columns"][] = "commission";
$proto104["m_columns"][] = "addtime_gold_check_id";
$proto104["m_columns"][] = "is_recovery";
$proto104["m_columns"][] = "sales_cost";
$proto104["m_columns"][] = "mst_business_partner_id";
$proto104["m_columns"][] = "DA_GROSSPROFIT_2";
$proto104["m_columns"][] = "DA_INTEREST_2";
$proto104["m_columns"][] = "minus_weight";
$proto104["m_columns"][] = "diameter_size";
$proto104["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto104);

$proto103["m_table"] = $obj;
$proto103["m_sql"] = "LEFT OUTER JOIN `shouhin` ON `auctions`.`product_id` = `shouhin`.`product_id`";
$proto103["m_alias"] = "";
$proto103["m_srcTableName"] = "auctions";
$proto105=array();
$proto105["m_sql"] = "`auctions`.`product_id` = `shouhin`.`product_id`";
$proto105["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "auctions",
	"m_srcTableName" => "auctions"
));

$proto105["m_column"]=$obj;
$proto105["m_contained"] = array();
$proto105["m_strCase"] = "= `shouhin`.`product_id`";
$proto105["m_havingmode"] = false;
$proto105["m_inBrackets"] = false;
$proto105["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto105);

$proto103["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto103);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto107=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "auctions",
	"m_srcTableName" => "auctions"
));

$proto107["m_column"]=$obj;
$proto107["m_bAsc"] = 0;
$proto107["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto107);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="auctions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_auctions = createSqlQuery_auctions();


	
		;

																																													

$tdataauctions[".sqlquery"] = $queryData_auctions;

include_once(getabspath("include/auctions_events.php"));
$tableEvents["auctions"] = new eventclass_auctions;
$tdataauctions[".hasEvents"] = true;

?>