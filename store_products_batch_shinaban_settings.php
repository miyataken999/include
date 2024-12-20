<?php
require_once(getabspath("classes/cipherer.php"));




$tdatastore_products_batch_shinaban = array();
	$tdatastore_products_batch_shinaban[".truncateText"] = true;
	$tdatastore_products_batch_shinaban[".NumberOfChars"] = 80;
	$tdatastore_products_batch_shinaban[".ShortName"] = "store_products_batch_shinaban";
	$tdatastore_products_batch_shinaban[".OwnerID"] = "";
	$tdatastore_products_batch_shinaban[".OriginalTable"] = "store_products_batch";

//	field labels
$fieldLabelsstore_products_batch_shinaban = array();
$fieldToolTipsstore_products_batch_shinaban = array();
$pageTitlesstore_products_batch_shinaban = array();
$placeHoldersstore_products_batch_shinaban = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsstore_products_batch_shinaban["Japanese"] = array();
	$fieldToolTipsstore_products_batch_shinaban["Japanese"] = array();
	$placeHoldersstore_products_batch_shinaban["Japanese"] = array();
	$pageTitlesstore_products_batch_shinaban["Japanese"] = array();
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["id"] = "Id";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["id"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["id"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["product_id"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["product_id"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["yahoo_sinaban"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["yahoo_title"] = "タイトル";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["yahoo_title"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["yahoo_title"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["prices"] = "買取額";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["prices"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["prices"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["salse_prices"] = "販売額";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["salse_prices"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["salse_prices"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["salse_price"] = "入金額";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["salse_price"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["salse_price"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["yahoo_condition2"] = "コンディション";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["yahoo_condition2"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["yahoo_condition2"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["remark"] = "メモ";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["remark"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["remark"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["line"] = "Line";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["line"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["line"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["ITEM"] = "ITEM";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["ITEM"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["ITEM"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["yahoo_sozai"] = "Yahoo Sozai";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["yahoo_sozai"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["yahoo_sozai"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["motif"] = "Motif";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["motif"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["motif"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["Setting"] = "Setting";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["Setting"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["Setting"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["processing"] = "Processing";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["processing"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["processing"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["Sleeve_Length"] = "Sleeve Length";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["Sleeve_Length"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["Sleeve_Length"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["length"] = "Length";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["length"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["length"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["gold_property"] = "Gold Property";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["gold_property"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["gold_property"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["ichiba_title"] = "Ichiba Title";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["ichiba_title"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["ichiba_title"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["Gram"] = "Gram";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["Gram"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["Gram"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["Parent_stone"] = "Parent Stone";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["Parent_stone"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["Parent_stone"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["Aside_stone"] = "Aside Stone";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["Aside_stone"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["Aside_stone"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["Appraiser"] = "Appraiser";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["Appraiser"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["Appraiser"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["satei_by"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["satei_by"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["yahoo_saisun_sha"] = "Y採寸者";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["yahoo_saisun_sha"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["yahoo_saisun_sha"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["REG_PHOTOGRAPHER"] = "撮影者";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["REG_PHOTOGRAPHER"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["REG_KAKOU"] = "画像加工者";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["REG_KAKOU"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["REG_KAKOU"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["REG_PACKINGS"] = "梱包者";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["REG_PACKINGS"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["REG_PACKINGS"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["REG_AUTHOR"] = "成約人";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["REG_AUTHOR"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["REG_AUTHOR"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["REG_EXHIBITOR"] = "出品者";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["REG_EXHIBITOR"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["REG_EXHIBITOR"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["_satatus"] = "ステータスAC";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["_satatus"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["_satatus"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["satatus2"] = "ステータス";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["satatus2"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["satatus2"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["status"] = "STバッチ結果";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["status"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["status"] = "";
	$fieldLabelsstore_products_batch_shinaban["Japanese"]["comment1"] = "コメント";
	$fieldToolTipsstore_products_batch_shinaban["Japanese"]["comment1"] = "";
	$placeHoldersstore_products_batch_shinaban["Japanese"]["comment1"] = "";
	if (count($fieldToolTipsstore_products_batch_shinaban["Japanese"]))
		$tdatastore_products_batch_shinaban[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsstore_products_batch_shinaban[""] = array();
	$fieldToolTipsstore_products_batch_shinaban[""] = array();
	$placeHoldersstore_products_batch_shinaban[""] = array();
	$pageTitlesstore_products_batch_shinaban[""] = array();
	if (count($fieldToolTipsstore_products_batch_shinaban[""]))
		$tdatastore_products_batch_shinaban[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstore_products_batch_shinaban["English"] = array();
	$fieldToolTipsstore_products_batch_shinaban["English"] = array();
	$placeHoldersstore_products_batch_shinaban["English"] = array();
	$pageTitlesstore_products_batch_shinaban["English"] = array();
	if (count($fieldToolTipsstore_products_batch_shinaban["English"]))
		$tdatastore_products_batch_shinaban[".isUseToolTips"] = true;
}


	$tdatastore_products_batch_shinaban[".NCSearch"] = true;



$tdatastore_products_batch_shinaban[".shortTableName"] = "store_products_batch_shinaban";
$tdatastore_products_batch_shinaban[".nSecOptions"] = 0;
$tdatastore_products_batch_shinaban[".recsPerRowPrint"] = 1;
$tdatastore_products_batch_shinaban[".mainTableOwnerID"] = "";
$tdatastore_products_batch_shinaban[".moveNext"] = 1;
$tdatastore_products_batch_shinaban[".entityType"] = 1;

$tdatastore_products_batch_shinaban[".strOriginalTableName"] = "store_products_batch";

	



$tdatastore_products_batch_shinaban[".showAddInPopup"] = false;

$tdatastore_products_batch_shinaban[".showEditInPopup"] = false;

$tdatastore_products_batch_shinaban[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatastore_products_batch_shinaban[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatastore_products_batch_shinaban[".fieldsForRegister"] = array();

$tdatastore_products_batch_shinaban[".listAjax"] = false;

	$tdatastore_products_batch_shinaban[".audit"] = false;

	$tdatastore_products_batch_shinaban[".locking"] = false;

$tdatastore_products_batch_shinaban[".edit"] = true;
$tdatastore_products_batch_shinaban[".afterEditAction"] = 1;
$tdatastore_products_batch_shinaban[".closePopupAfterEdit"] = 1;
$tdatastore_products_batch_shinaban[".afterEditActionDetTable"] = "";

$tdatastore_products_batch_shinaban[".add"] = true;
$tdatastore_products_batch_shinaban[".afterAddAction"] = 1;
$tdatastore_products_batch_shinaban[".closePopupAfterAdd"] = 1;
$tdatastore_products_batch_shinaban[".afterAddActionDetTable"] = "";

$tdatastore_products_batch_shinaban[".list"] = true;

$tdatastore_products_batch_shinaban[".inlineEdit"] = true;


$tdatastore_products_batch_shinaban[".reorderRecordsByHeader"] = true;



$tdatastore_products_batch_shinaban[".inlineAdd"] = true;
$tdatastore_products_batch_shinaban[".copy"] = true;
$tdatastore_products_batch_shinaban[".view"] = true;

$tdatastore_products_batch_shinaban[".import"] = true;

$tdatastore_products_batch_shinaban[".exportTo"] = true;

$tdatastore_products_batch_shinaban[".printFriendly"] = true;

$tdatastore_products_batch_shinaban[".delete"] = true;

$tdatastore_products_batch_shinaban[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatastore_products_batch_shinaban[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatastore_products_batch_shinaban[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatastore_products_batch_shinaban[".searchSaving"] = false;
//

$tdatastore_products_batch_shinaban[".showSearchPanel"] = true;
		$tdatastore_products_batch_shinaban[".flexibleSearch"] = true;

$tdatastore_products_batch_shinaban[".isUseAjaxSuggest"] = true;

$tdatastore_products_batch_shinaban[".rowHighlite"] = true;



																	
					
					
					
					
					
					
					
					
					
					
					
							
					
																							

$tdatastore_products_batch_shinaban[".ajaxCodeSnippetAdded"] = false;

$tdatastore_products_batch_shinaban[".buttonsAdded"] = true;

$tdatastore_products_batch_shinaban[".addPageEvents"] = true;

// use timepicker for search panel
$tdatastore_products_batch_shinaban[".isUseTimeForSearch"] = false;



$tdatastore_products_batch_shinaban[".badgeColor"] = "CD5C5C";


$tdatastore_products_batch_shinaban[".allSearchFields"] = array();
$tdatastore_products_batch_shinaban[".filterFields"] = array();
$tdatastore_products_batch_shinaban[".requiredSearchFields"] = array();

$tdatastore_products_batch_shinaban[".allSearchFields"][] = "id";
	$tdatastore_products_batch_shinaban[".allSearchFields"][] = "product_id";
	$tdatastore_products_batch_shinaban[".allSearchFields"][] = "yahoo_sinaban";
	$tdatastore_products_batch_shinaban[".allSearchFields"][] = "yahoo_title";
	$tdatastore_products_batch_shinaban[".allSearchFields"][] = "prices";
	$tdatastore_products_batch_shinaban[".allSearchFields"][] = "salse_prices";
	$tdatastore_products_batch_shinaban[".allSearchFields"][] = "salse_price";
	$tdatastore_products_batch_shinaban[".allSearchFields"][] = "remark";
	$tdatastore_products_batch_shinaban[".allSearchFields"][] = "satei_by";
	$tdatastore_products_batch_shinaban[".allSearchFields"][] = "yahoo_saisun_sha";
	$tdatastore_products_batch_shinaban[".allSearchFields"][] = "REG_PHOTOGRAPHER";
	$tdatastore_products_batch_shinaban[".allSearchFields"][] = "REG_KAKOU";
	$tdatastore_products_batch_shinaban[".allSearchFields"][] = "REG_PACKINGS";
	$tdatastore_products_batch_shinaban[".allSearchFields"][] = "REG_AUTHOR";
	$tdatastore_products_batch_shinaban[".allSearchFields"][] = "REG_EXHIBITOR";
	$tdatastore_products_batch_shinaban[".allSearchFields"][] = "_satatus";
	$tdatastore_products_batch_shinaban[".allSearchFields"][] = "satatus2";
	$tdatastore_products_batch_shinaban[".allSearchFields"][] = "comment1";
	

$tdatastore_products_batch_shinaban[".googleLikeFields"] = array();
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "id";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "product_id";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "yahoo_sinaban";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "yahoo_title";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "prices";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "salse_prices";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "salse_price";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "yahoo_condition2";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "remark";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "line";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "ITEM";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "yahoo_sozai";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "motif";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "Setting";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "processing";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "Sleeve_Length";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "length";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "gold_property";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "ichiba_title";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "Gram";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "Parent_stone";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "Aside_stone";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "Appraiser";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "satei_by";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "yahoo_saisun_sha";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "REG_PHOTOGRAPHER";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "REG_KAKOU";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "REG_PACKINGS";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "REG_AUTHOR";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "REG_EXHIBITOR";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "_satatus";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "satatus2";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "status";
$tdatastore_products_batch_shinaban[".googleLikeFields"][] = "comment1";


$tdatastore_products_batch_shinaban[".advSearchFields"] = array();
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "id";
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "product_id";
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "yahoo_sinaban";
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "yahoo_title";
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "prices";
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "salse_prices";
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "salse_price";
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "remark";
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "satei_by";
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "yahoo_saisun_sha";
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "REG_PHOTOGRAPHER";
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "REG_KAKOU";
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "REG_PACKINGS";
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "REG_AUTHOR";
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "REG_EXHIBITOR";
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "_satatus";
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "satatus2";
$tdatastore_products_batch_shinaban[".advSearchFields"][] = "comment1";

$tdatastore_products_batch_shinaban[".tableType"] = "list";

$tdatastore_products_batch_shinaban[".printerPageOrientation"] = 0;
$tdatastore_products_batch_shinaban[".nPrinterPageScale"] = 100;

$tdatastore_products_batch_shinaban[".nPrinterSplitRecords"] = 40;

$tdatastore_products_batch_shinaban[".nPrinterPDFSplitRecords"] = 40;



$tdatastore_products_batch_shinaban[".geocodingEnabled"] = false;





$tdatastore_products_batch_shinaban[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatastore_products_batch_shinaban[".pageSize"] = 20;

$tdatastore_products_batch_shinaban[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY store_products_batch.id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatastore_products_batch_shinaban[".strOrderBy"] = $tstrOrderBy;

$tdatastore_products_batch_shinaban[".orderindexes"] = array();
$tdatastore_products_batch_shinaban[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "store_products_batch.id");

$tdatastore_products_batch_shinaban[".sqlHead"] = "SELECT store_products_batch.id,  store_products_batch.product_id,  store_products_batch.yahoo_sinaban,  store_products_batch.yahoo_title,  store_products_batch.prices,  store_products_batch.salse_prices,  store_products_batch.salse_price,  store_products.yahoo_condition2,  store_products_batch.remark,  store_products.line,  store_products.ITEM,  store_products.yahoo_sozai,  store_products.motif,  store_products.Setting,  store_products.processing,  store_products.Sleeve_Length,  store_products.length,  store_products.gold_property,  store_products.ichiba_title,  store_products.Gram,  store_products.Parent_stone,  store_products.Aside_stone,  store_products.Appraiser,  store_products.satei_by,  store_products.yahoo_saisun_sha,  store_products.REG_PHOTOGRAPHER,  store_products.REG_KAKOU,  store_products.REG_PACKINGS,  store_products.REG_AUTHOR,  store_products.REG_EXHIBITOR,  store_products_batch.`_satatus`,  store_products_batch.`_satatus` AS satatus2,  store_products.status,  store_products_batch.`comment` AS comment1";
$tdatastore_products_batch_shinaban[".sqlFrom"] = "FROM store_products_batch  LEFT OUTER JOIN store_products ON store_products_batch.product_id = store_products.product_id";
$tdatastore_products_batch_shinaban[".sqlWhereExpr"] = "";
$tdatastore_products_batch_shinaban[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastore_products_batch_shinaban[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastore_products_batch_shinaban[".arrGroupsPerPage"] = $arrGPP;

$tdatastore_products_batch_shinaban[".highlightSearchResults"] = true;

$tableKeysstore_products_batch_shinaban = array();
$tableKeysstore_products_batch_shinaban[] = "id";
$tdatastore_products_batch_shinaban[".Keys"] = $tableKeysstore_products_batch_shinaban;

$tdatastore_products_batch_shinaban[".listFields"] = array();
$tdatastore_products_batch_shinaban[".listFields"][] = "product_id";
$tdatastore_products_batch_shinaban[".listFields"][] = "yahoo_sinaban";
$tdatastore_products_batch_shinaban[".listFields"][] = "yahoo_title";
$tdatastore_products_batch_shinaban[".listFields"][] = "prices";
$tdatastore_products_batch_shinaban[".listFields"][] = "salse_prices";
$tdatastore_products_batch_shinaban[".listFields"][] = "salse_price";
$tdatastore_products_batch_shinaban[".listFields"][] = "comment1";
$tdatastore_products_batch_shinaban[".listFields"][] = "remark";
$tdatastore_products_batch_shinaban[".listFields"][] = "satei_by";
$tdatastore_products_batch_shinaban[".listFields"][] = "yahoo_saisun_sha";
$tdatastore_products_batch_shinaban[".listFields"][] = "REG_PHOTOGRAPHER";
$tdatastore_products_batch_shinaban[".listFields"][] = "REG_KAKOU";
$tdatastore_products_batch_shinaban[".listFields"][] = "REG_PACKINGS";
$tdatastore_products_batch_shinaban[".listFields"][] = "REG_AUTHOR";
$tdatastore_products_batch_shinaban[".listFields"][] = "REG_EXHIBITOR";
$tdatastore_products_batch_shinaban[".listFields"][] = "_satatus";
$tdatastore_products_batch_shinaban[".listFields"][] = "satatus2";
$tdatastore_products_batch_shinaban[".listFields"][] = "status";

$tdatastore_products_batch_shinaban[".hideMobileList"] = array();


$tdatastore_products_batch_shinaban[".viewFields"] = array();
$tdatastore_products_batch_shinaban[".viewFields"][] = "id";
$tdatastore_products_batch_shinaban[".viewFields"][] = "product_id";
$tdatastore_products_batch_shinaban[".viewFields"][] = "yahoo_sinaban";
$tdatastore_products_batch_shinaban[".viewFields"][] = "yahoo_title";
$tdatastore_products_batch_shinaban[".viewFields"][] = "prices";
$tdatastore_products_batch_shinaban[".viewFields"][] = "salse_prices";
$tdatastore_products_batch_shinaban[".viewFields"][] = "salse_price";
$tdatastore_products_batch_shinaban[".viewFields"][] = "remark";
$tdatastore_products_batch_shinaban[".viewFields"][] = "_satatus";
$tdatastore_products_batch_shinaban[".viewFields"][] = "satatus2";
$tdatastore_products_batch_shinaban[".viewFields"][] = "comment1";

$tdatastore_products_batch_shinaban[".addFields"] = array();
$tdatastore_products_batch_shinaban[".addFields"][] = "yahoo_title";
$tdatastore_products_batch_shinaban[".addFields"][] = "comment1";
$tdatastore_products_batch_shinaban[".addFields"][] = "product_id";
$tdatastore_products_batch_shinaban[".addFields"][] = "yahoo_sinaban";
$tdatastore_products_batch_shinaban[".addFields"][] = "prices";
$tdatastore_products_batch_shinaban[".addFields"][] = "salse_prices";
$tdatastore_products_batch_shinaban[".addFields"][] = "salse_price";
$tdatastore_products_batch_shinaban[".addFields"][] = "remark";
$tdatastore_products_batch_shinaban[".addFields"][] = "_satatus";

$tdatastore_products_batch_shinaban[".masterListFields"] = array();
$tdatastore_products_batch_shinaban[".masterListFields"][] = "id";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "product_id";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "yahoo_sinaban";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "yahoo_title";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "prices";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "salse_prices";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "salse_price";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "yahoo_condition2";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "remark";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "line";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "ITEM";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "yahoo_sozai";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "motif";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "Setting";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "processing";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "Sleeve_Length";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "length";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "gold_property";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "ichiba_title";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "Gram";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "Parent_stone";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "Aside_stone";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "Appraiser";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "satei_by";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "yahoo_saisun_sha";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "REG_PHOTOGRAPHER";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "REG_KAKOU";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "REG_PACKINGS";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "REG_AUTHOR";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "REG_EXHIBITOR";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "_satatus";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "satatus2";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "status";
$tdatastore_products_batch_shinaban[".masterListFields"][] = "comment1";

$tdatastore_products_batch_shinaban[".inlineAddFields"] = array();
$tdatastore_products_batch_shinaban[".inlineAddFields"][] = "product_id";
$tdatastore_products_batch_shinaban[".inlineAddFields"][] = "yahoo_sinaban";
$tdatastore_products_batch_shinaban[".inlineAddFields"][] = "yahoo_title";
$tdatastore_products_batch_shinaban[".inlineAddFields"][] = "prices";
$tdatastore_products_batch_shinaban[".inlineAddFields"][] = "salse_prices";
$tdatastore_products_batch_shinaban[".inlineAddFields"][] = "salse_price";
$tdatastore_products_batch_shinaban[".inlineAddFields"][] = "remark";
$tdatastore_products_batch_shinaban[".inlineAddFields"][] = "_satatus";

$tdatastore_products_batch_shinaban[".editFields"] = array();
$tdatastore_products_batch_shinaban[".editFields"][] = "yahoo_title";
$tdatastore_products_batch_shinaban[".editFields"][] = "product_id";
$tdatastore_products_batch_shinaban[".editFields"][] = "yahoo_sinaban";
$tdatastore_products_batch_shinaban[".editFields"][] = "prices";
$tdatastore_products_batch_shinaban[".editFields"][] = "salse_price";
$tdatastore_products_batch_shinaban[".editFields"][] = "salse_prices";
$tdatastore_products_batch_shinaban[".editFields"][] = "remark";
$tdatastore_products_batch_shinaban[".editFields"][] = "_satatus";

$tdatastore_products_batch_shinaban[".inlineEditFields"] = array();
$tdatastore_products_batch_shinaban[".inlineEditFields"][] = "product_id";
$tdatastore_products_batch_shinaban[".inlineEditFields"][] = "yahoo_sinaban";
$tdatastore_products_batch_shinaban[".inlineEditFields"][] = "yahoo_title";
$tdatastore_products_batch_shinaban[".inlineEditFields"][] = "prices";
$tdatastore_products_batch_shinaban[".inlineEditFields"][] = "salse_prices";
$tdatastore_products_batch_shinaban[".inlineEditFields"][] = "salse_price";
$tdatastore_products_batch_shinaban[".inlineEditFields"][] = "remark";
$tdatastore_products_batch_shinaban[".inlineEditFields"][] = "_satatus";

$tdatastore_products_batch_shinaban[".updateSelectedFields"] = array();
$tdatastore_products_batch_shinaban[".updateSelectedFields"][] = "yahoo_title";
$tdatastore_products_batch_shinaban[".updateSelectedFields"][] = "product_id";
$tdatastore_products_batch_shinaban[".updateSelectedFields"][] = "yahoo_sinaban";
$tdatastore_products_batch_shinaban[".updateSelectedFields"][] = "prices";
$tdatastore_products_batch_shinaban[".updateSelectedFields"][] = "salse_price";
$tdatastore_products_batch_shinaban[".updateSelectedFields"][] = "salse_prices";
$tdatastore_products_batch_shinaban[".updateSelectedFields"][] = "remark";
$tdatastore_products_batch_shinaban[".updateSelectedFields"][] = "_satatus";


$tdatastore_products_batch_shinaban[".exportFields"] = array();
$tdatastore_products_batch_shinaban[".exportFields"][] = "line";
$tdatastore_products_batch_shinaban[".exportFields"][] = "ITEM";
$tdatastore_products_batch_shinaban[".exportFields"][] = "yahoo_sozai";
$tdatastore_products_batch_shinaban[".exportFields"][] = "motif";
$tdatastore_products_batch_shinaban[".exportFields"][] = "Setting";
$tdatastore_products_batch_shinaban[".exportFields"][] = "processing";
$tdatastore_products_batch_shinaban[".exportFields"][] = "Sleeve_Length";
$tdatastore_products_batch_shinaban[".exportFields"][] = "length";
$tdatastore_products_batch_shinaban[".exportFields"][] = "gold_property";
$tdatastore_products_batch_shinaban[".exportFields"][] = "ichiba_title";
$tdatastore_products_batch_shinaban[".exportFields"][] = "Gram";
$tdatastore_products_batch_shinaban[".exportFields"][] = "Parent_stone";
$tdatastore_products_batch_shinaban[".exportFields"][] = "Aside_stone";
$tdatastore_products_batch_shinaban[".exportFields"][] = "Appraiser";
$tdatastore_products_batch_shinaban[".exportFields"][] = "comment1";
$tdatastore_products_batch_shinaban[".exportFields"][] = "yahoo_title";
$tdatastore_products_batch_shinaban[".exportFields"][] = "product_id";
$tdatastore_products_batch_shinaban[".exportFields"][] = "yahoo_sinaban";
$tdatastore_products_batch_shinaban[".exportFields"][] = "prices";
$tdatastore_products_batch_shinaban[".exportFields"][] = "salse_prices";
$tdatastore_products_batch_shinaban[".exportFields"][] = "salse_price";
$tdatastore_products_batch_shinaban[".exportFields"][] = "yahoo_condition2";
$tdatastore_products_batch_shinaban[".exportFields"][] = "remark";
$tdatastore_products_batch_shinaban[".exportFields"][] = "satei_by";
$tdatastore_products_batch_shinaban[".exportFields"][] = "yahoo_saisun_sha";
$tdatastore_products_batch_shinaban[".exportFields"][] = "REG_AUTHOR";
$tdatastore_products_batch_shinaban[".exportFields"][] = "REG_PHOTOGRAPHER";
$tdatastore_products_batch_shinaban[".exportFields"][] = "REG_KAKOU";
$tdatastore_products_batch_shinaban[".exportFields"][] = "REG_PACKINGS";
$tdatastore_products_batch_shinaban[".exportFields"][] = "REG_EXHIBITOR";
$tdatastore_products_batch_shinaban[".exportFields"][] = "_satatus";
$tdatastore_products_batch_shinaban[".exportFields"][] = "satatus2";

$tdatastore_products_batch_shinaban[".importFields"] = array();
$tdatastore_products_batch_shinaban[".importFields"][] = "id";
$tdatastore_products_batch_shinaban[".importFields"][] = "product_id";
$tdatastore_products_batch_shinaban[".importFields"][] = "yahoo_sinaban";
$tdatastore_products_batch_shinaban[".importFields"][] = "yahoo_title";
$tdatastore_products_batch_shinaban[".importFields"][] = "prices";
$tdatastore_products_batch_shinaban[".importFields"][] = "salse_prices";
$tdatastore_products_batch_shinaban[".importFields"][] = "salse_price";
$tdatastore_products_batch_shinaban[".importFields"][] = "yahoo_condition2";
$tdatastore_products_batch_shinaban[".importFields"][] = "remark";
$tdatastore_products_batch_shinaban[".importFields"][] = "line";
$tdatastore_products_batch_shinaban[".importFields"][] = "ITEM";
$tdatastore_products_batch_shinaban[".importFields"][] = "yahoo_sozai";
$tdatastore_products_batch_shinaban[".importFields"][] = "motif";
$tdatastore_products_batch_shinaban[".importFields"][] = "Setting";
$tdatastore_products_batch_shinaban[".importFields"][] = "processing";
$tdatastore_products_batch_shinaban[".importFields"][] = "Sleeve_Length";
$tdatastore_products_batch_shinaban[".importFields"][] = "length";
$tdatastore_products_batch_shinaban[".importFields"][] = "gold_property";
$tdatastore_products_batch_shinaban[".importFields"][] = "ichiba_title";
$tdatastore_products_batch_shinaban[".importFields"][] = "Gram";
$tdatastore_products_batch_shinaban[".importFields"][] = "Parent_stone";
$tdatastore_products_batch_shinaban[".importFields"][] = "Aside_stone";
$tdatastore_products_batch_shinaban[".importFields"][] = "Appraiser";
$tdatastore_products_batch_shinaban[".importFields"][] = "satei_by";
$tdatastore_products_batch_shinaban[".importFields"][] = "yahoo_saisun_sha";
$tdatastore_products_batch_shinaban[".importFields"][] = "REG_PHOTOGRAPHER";
$tdatastore_products_batch_shinaban[".importFields"][] = "REG_KAKOU";
$tdatastore_products_batch_shinaban[".importFields"][] = "REG_PACKINGS";
$tdatastore_products_batch_shinaban[".importFields"][] = "REG_AUTHOR";
$tdatastore_products_batch_shinaban[".importFields"][] = "REG_EXHIBITOR";
$tdatastore_products_batch_shinaban[".importFields"][] = "_satatus";
$tdatastore_products_batch_shinaban[".importFields"][] = "satatus2";
$tdatastore_products_batch_shinaban[".importFields"][] = "status";
$tdatastore_products_batch_shinaban[".importFields"][] = "comment1";

$tdatastore_products_batch_shinaban[".printFields"] = array();
$tdatastore_products_batch_shinaban[".printFields"][] = "id";
$tdatastore_products_batch_shinaban[".printFields"][] = "product_id";
$tdatastore_products_batch_shinaban[".printFields"][] = "yahoo_sinaban";
$tdatastore_products_batch_shinaban[".printFields"][] = "yahoo_title";
$tdatastore_products_batch_shinaban[".printFields"][] = "prices";
$tdatastore_products_batch_shinaban[".printFields"][] = "salse_prices";
$tdatastore_products_batch_shinaban[".printFields"][] = "salse_price";
$tdatastore_products_batch_shinaban[".printFields"][] = "remark";
$tdatastore_products_batch_shinaban[".printFields"][] = "_satatus";
$tdatastore_products_batch_shinaban[".printFields"][] = "satatus2";
$tdatastore_products_batch_shinaban[".printFields"][] = "comment1";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "store_products_batch";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products_batch.id";

	
	
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




	$tdatastore_products_batch_shinaban["id"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "store_products_batch";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","product_id");
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

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products_batch.product_id";

	
	
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




	$tdatastore_products_batch_shinaban["product_id"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "store_products_batch";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","yahoo_sinaban");
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

		$fdata["strField"] = "yahoo_sinaban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products_batch.yahoo_sinaban";

	
	
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
			$edata["EditParams"].= " maxlength=11";

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




	$tdatastore_products_batch_shinaban["yahoo_sinaban"] = $fdata;
//	yahoo_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "yahoo_title";
	$fdata["GoodName"] = "yahoo_title";
	$fdata["ownerTable"] = "store_products_batch";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","yahoo_title");
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

		$fdata["strField"] = "yahoo_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products_batch.yahoo_title";

	
	
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




	$tdatastore_products_batch_shinaban["yahoo_title"] = $fdata;
//	prices
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "prices";
	$fdata["GoodName"] = "prices";
	$fdata["ownerTable"] = "store_products_batch";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","prices");
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

		$fdata["strField"] = "prices";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products_batch.prices";

	
	
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




	$tdatastore_products_batch_shinaban["prices"] = $fdata;
//	salse_prices
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "salse_prices";
	$fdata["GoodName"] = "salse_prices";
	$fdata["ownerTable"] = "store_products_batch";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","salse_prices");
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

		$fdata["strField"] = "salse_prices";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products_batch.salse_prices";

	
	
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




	$tdatastore_products_batch_shinaban["salse_prices"] = $fdata;
//	salse_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "salse_price";
	$fdata["GoodName"] = "salse_price";
	$fdata["ownerTable"] = "store_products_batch";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","salse_price");
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

		$fdata["strField"] = "salse_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products_batch.salse_price";

	
	
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




	$tdatastore_products_batch_shinaban["salse_price"] = $fdata;
//	yahoo_condition2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yahoo_condition2";
	$fdata["GoodName"] = "yahoo_condition2";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","yahoo_condition2");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_condition2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.yahoo_condition2";

	
	
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








	$tdatastore_products_batch_shinaban["yahoo_condition2"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "store_products_batch";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","remark");
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

		$fdata["strField"] = "remark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products_batch.remark";

	
	
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




	$tdatastore_products_batch_shinaban["remark"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","line");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.line";

	
	
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








	$tdatastore_products_batch_shinaban["line"] = $fdata;
//	ITEM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ITEM";
	$fdata["GoodName"] = "ITEM";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","ITEM");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ITEM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.ITEM";

	
	
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








	$tdatastore_products_batch_shinaban["ITEM"] = $fdata;
//	yahoo_sozai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "yahoo_sozai";
	$fdata["GoodName"] = "yahoo_sozai";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","yahoo_sozai");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sozai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.yahoo_sozai";

	
	
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








	$tdatastore_products_batch_shinaban["yahoo_sozai"] = $fdata;
//	motif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "motif";
	$fdata["GoodName"] = "motif";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","motif");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "motif";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.motif";

	
	
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
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatastore_products_batch_shinaban["motif"] = $fdata;
//	Setting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Setting";
	$fdata["GoodName"] = "Setting";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","Setting");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Setting";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.Setting";

	
	
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
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatastore_products_batch_shinaban["Setting"] = $fdata;
//	processing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "processing";
	$fdata["GoodName"] = "processing";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","processing");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "processing";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.processing";

	
	
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
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatastore_products_batch_shinaban["processing"] = $fdata;
//	Sleeve_Length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Sleeve_Length";
	$fdata["GoodName"] = "Sleeve_Length";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","Sleeve_Length");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Sleeve_Length";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.Sleeve_Length";

	
	
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
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatastore_products_batch_shinaban["Sleeve_Length"] = $fdata;
//	length
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "length";
	$fdata["GoodName"] = "length";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","length");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "length";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.length";

	
	
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
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatastore_products_batch_shinaban["length"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","gold_property");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gold_property";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.gold_property";

	
	
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
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatastore_products_batch_shinaban["gold_property"] = $fdata;
//	ichiba_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ichiba_title";
	$fdata["GoodName"] = "ichiba_title";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","ichiba_title");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.ichiba_title";

	
	
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








	$tdatastore_products_batch_shinaban["ichiba_title"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","Gram");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.Gram";

	
	
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








	$tdatastore_products_batch_shinaban["Gram"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","Parent_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.Parent_stone";

	
	
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








	$tdatastore_products_batch_shinaban["Parent_stone"] = $fdata;
//	Aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Aside_stone";
	$fdata["GoodName"] = "Aside_stone";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","Aside_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Aside_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.Aside_stone";

	
	
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








	$tdatastore_products_batch_shinaban["Aside_stone"] = $fdata;
//	Appraiser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Appraiser";
	$fdata["GoodName"] = "Appraiser";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","Appraiser");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Appraiser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.Appraiser";

	
	
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








	$tdatastore_products_batch_shinaban["Appraiser"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","satei_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.satei_by";

	
	
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




	$tdatastore_products_batch_shinaban["satei_by"] = $fdata;
//	yahoo_saisun_sha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "yahoo_saisun_sha";
	$fdata["GoodName"] = "yahoo_saisun_sha";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","yahoo_saisun_sha");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_saisun_sha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.yahoo_saisun_sha";

	
	
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




	$tdatastore_products_batch_shinaban["yahoo_saisun_sha"] = $fdata;
//	REG_PHOTOGRAPHER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "REG_PHOTOGRAPHER";
	$fdata["GoodName"] = "REG_PHOTOGRAPHER";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","REG_PHOTOGRAPHER");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_PHOTOGRAPHER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.REG_PHOTOGRAPHER";

	
	
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




	$tdatastore_products_batch_shinaban["REG_PHOTOGRAPHER"] = $fdata;
//	REG_KAKOU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "REG_KAKOU";
	$fdata["GoodName"] = "REG_KAKOU";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","REG_KAKOU");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_KAKOU";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.REG_KAKOU";

	
	
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




	$tdatastore_products_batch_shinaban["REG_KAKOU"] = $fdata;
//	REG_PACKINGS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "REG_PACKINGS";
	$fdata["GoodName"] = "REG_PACKINGS";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","REG_PACKINGS");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_PACKINGS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.REG_PACKINGS";

	
	
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




	$tdatastore_products_batch_shinaban["REG_PACKINGS"] = $fdata;
//	REG_AUTHOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "REG_AUTHOR";
	$fdata["GoodName"] = "REG_AUTHOR";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","REG_AUTHOR");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_AUTHOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.REG_AUTHOR";

	
	
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




	$tdatastore_products_batch_shinaban["REG_AUTHOR"] = $fdata;
//	REG_EXHIBITOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "REG_EXHIBITOR";
	$fdata["GoodName"] = "REG_EXHIBITOR";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","REG_EXHIBITOR");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REG_EXHIBITOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.REG_EXHIBITOR";

	
	
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




	$tdatastore_products_batch_shinaban["REG_EXHIBITOR"] = $fdata;
//	_satatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "_satatus";
	$fdata["GoodName"] = "_satatus";
	$fdata["ownerTable"] = "store_products_batch";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","_satatus");
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

		$fdata["strField"] = "_satatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products_batch.`_satatus`";

	
	
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




	$tdatastore_products_batch_shinaban["_satatus"] = $fdata;
//	satatus2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "satatus2";
	$fdata["GoodName"] = "satatus2";
	$fdata["ownerTable"] = "store_products_batch";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","satatus2");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "_satatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products_batch.`_satatus`";

	
	
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




	$tdatastore_products_batch_shinaban["satatus2"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "store_products";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products.status";

	
	
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








	$tdatastore_products_batch_shinaban["status"] = $fdata;
//	comment1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "comment1";
	$fdata["GoodName"] = "comment1";
	$fdata["ownerTable"] = "store_products_batch";
	$fdata["Label"] = GetFieldLabel("store_products_batch_shinaban","comment1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "store_products_batch.`comment`";

	
	
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




	$tdatastore_products_batch_shinaban["comment1"] = $fdata;


$tables_data["store_products_batch_shinaban"]=&$tdatastore_products_batch_shinaban;
$field_labels["store_products_batch_shinaban"] = &$fieldLabelsstore_products_batch_shinaban;
$fieldToolTips["store_products_batch_shinaban"] = &$fieldToolTipsstore_products_batch_shinaban;
$placeHolders["store_products_batch_shinaban"] = &$placeHoldersstore_products_batch_shinaban;
$page_titles["store_products_batch_shinaban"] = &$pageTitlesstore_products_batch_shinaban;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["store_products_batch_shinaban"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["store_products_batch_shinaban"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_store_products_batch_shinaban()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "store_products_batch.id,  store_products_batch.product_id,  store_products_batch.yahoo_sinaban,  store_products_batch.yahoo_title,  store_products_batch.prices,  store_products_batch.salse_prices,  store_products_batch.salse_price,  store_products.yahoo_condition2,  store_products_batch.remark,  store_products.line,  store_products.ITEM,  store_products.yahoo_sozai,  store_products.motif,  store_products.Setting,  store_products.processing,  store_products.Sleeve_Length,  store_products.length,  store_products.gold_property,  store_products.ichiba_title,  store_products.Gram,  store_products.Parent_stone,  store_products.Aside_stone,  store_products.Appraiser,  store_products.satei_by,  store_products.yahoo_saisun_sha,  store_products.REG_PHOTOGRAPHER,  store_products.REG_KAKOU,  store_products.REG_PACKINGS,  store_products.REG_AUTHOR,  store_products.REG_EXHIBITOR,  store_products_batch.`_satatus`,  store_products_batch.`_satatus` AS satatus2,  store_products.status,  store_products_batch.`comment` AS comment1";
$proto0["m_strFrom"] = "FROM store_products_batch  LEFT OUTER JOIN store_products ON store_products_batch.product_id = store_products.product_id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY store_products_batch.id DESC";
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
	"m_strTable" => "store_products_batch",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto6["m_sql"] = "store_products_batch.id";
$proto6["m_srcTableName"] = "store_products_batch_shinaban";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "store_products_batch",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto8["m_sql"] = "store_products_batch.product_id";
$proto8["m_srcTableName"] = "store_products_batch_shinaban";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "store_products_batch",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto10["m_sql"] = "store_products_batch.yahoo_sinaban";
$proto10["m_srcTableName"] = "store_products_batch_shinaban";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_title",
	"m_strTable" => "store_products_batch",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto12["m_sql"] = "store_products_batch.yahoo_title";
$proto12["m_srcTableName"] = "store_products_batch_shinaban";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "prices",
	"m_strTable" => "store_products_batch",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto14["m_sql"] = "store_products_batch.prices";
$proto14["m_srcTableName"] = "store_products_batch_shinaban";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "salse_prices",
	"m_strTable" => "store_products_batch",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto16["m_sql"] = "store_products_batch.salse_prices";
$proto16["m_srcTableName"] = "store_products_batch_shinaban";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "salse_price",
	"m_strTable" => "store_products_batch",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto18["m_sql"] = "store_products_batch.salse_price";
$proto18["m_srcTableName"] = "store_products_batch_shinaban";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition2",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto20["m_sql"] = "store_products.yahoo_condition2";
$proto20["m_srcTableName"] = "store_products_batch_shinaban";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "store_products_batch",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto22["m_sql"] = "store_products_batch.remark";
$proto22["m_srcTableName"] = "store_products_batch_shinaban";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto24["m_sql"] = "store_products.line";
$proto24["m_srcTableName"] = "store_products_batch_shinaban";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ITEM",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto26["m_sql"] = "store_products.ITEM";
$proto26["m_srcTableName"] = "store_products_batch_shinaban";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sozai",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto28["m_sql"] = "store_products.yahoo_sozai";
$proto28["m_srcTableName"] = "store_products_batch_shinaban";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "motif",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto30["m_sql"] = "store_products.motif";
$proto30["m_srcTableName"] = "store_products_batch_shinaban";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Setting",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto32["m_sql"] = "store_products.Setting";
$proto32["m_srcTableName"] = "store_products_batch_shinaban";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "processing",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto34["m_sql"] = "store_products.processing";
$proto34["m_srcTableName"] = "store_products_batch_shinaban";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Sleeve_Length",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto36["m_sql"] = "store_products.Sleeve_Length";
$proto36["m_srcTableName"] = "store_products_batch_shinaban";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "length",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto38["m_sql"] = "store_products.length";
$proto38["m_srcTableName"] = "store_products_batch_shinaban";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto40["m_sql"] = "store_products.gold_property";
$proto40["m_srcTableName"] = "store_products_batch_shinaban";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_title",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto42["m_sql"] = "store_products.ichiba_title";
$proto42["m_srcTableName"] = "store_products_batch_shinaban";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto44["m_sql"] = "store_products.Gram";
$proto44["m_srcTableName"] = "store_products_batch_shinaban";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto46["m_sql"] = "store_products.Parent_stone";
$proto46["m_srcTableName"] = "store_products_batch_shinaban";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Aside_stone",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto48["m_sql"] = "store_products.Aside_stone";
$proto48["m_srcTableName"] = "store_products_batch_shinaban";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Appraiser",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto50["m_sql"] = "store_products.Appraiser";
$proto50["m_srcTableName"] = "store_products_batch_shinaban";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto52["m_sql"] = "store_products.satei_by";
$proto52["m_srcTableName"] = "store_products_batch_shinaban";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_saisun_sha",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto54["m_sql"] = "store_products.yahoo_saisun_sha";
$proto54["m_srcTableName"] = "store_products_batch_shinaban";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PHOTOGRAPHER",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto56["m_sql"] = "store_products.REG_PHOTOGRAPHER";
$proto56["m_srcTableName"] = "store_products_batch_shinaban";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_KAKOU",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto58["m_sql"] = "store_products.REG_KAKOU";
$proto58["m_srcTableName"] = "store_products_batch_shinaban";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_PACKINGS",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto60["m_sql"] = "store_products.REG_PACKINGS";
$proto60["m_srcTableName"] = "store_products_batch_shinaban";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_AUTHOR",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto62["m_sql"] = "store_products.REG_AUTHOR";
$proto62["m_srcTableName"] = "store_products_batch_shinaban";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "REG_EXHIBITOR",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto64["m_sql"] = "store_products.REG_EXHIBITOR";
$proto64["m_srcTableName"] = "store_products_batch_shinaban";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "_satatus",
	"m_strTable" => "store_products_batch",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto66["m_sql"] = "store_products_batch.`_satatus`";
$proto66["m_srcTableName"] = "store_products_batch_shinaban";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "_satatus",
	"m_strTable" => "store_products_batch",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto68["m_sql"] = "store_products_batch.`_satatus`";
$proto68["m_srcTableName"] = "store_products_batch_shinaban";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "satatus2";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "store_products",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto70["m_sql"] = "store_products.status";
$proto70["m_srcTableName"] = "store_products_batch_shinaban";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "store_products_batch",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto72["m_sql"] = "store_products_batch.`comment`";
$proto72["m_srcTableName"] = "store_products_batch_shinaban";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "comment1";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto74=array();
$proto74["m_link"] = "SQLL_MAIN";
			$proto75=array();
$proto75["m_strName"] = "store_products_batch";
$proto75["m_srcTableName"] = "store_products_batch_shinaban";
$proto75["m_columns"] = array();
$proto75["m_columns"][] = "id";
$proto75["m_columns"][] = "product_id";
$proto75["m_columns"][] = "product_id2";
$proto75["m_columns"][] = "category_id";
$proto75["m_columns"][] = "goods_title";
$proto75["m_columns"][] = "title";
$proto75["m_columns"][] = "sub_category_id1";
$proto75["m_columns"][] = "product_no";
$proto75["m_columns"][] = "sub_category_id2";
$proto75["m_columns"][] = "sub_category_id3";
$proto75["m_columns"][] = "ecc_id";
$proto75["m_columns"][] = "product_name";
$proto75["m_columns"][] = "price";
$proto75["m_columns"][] = "yahoo";
$proto75["m_columns"][] = "remark";
$proto75["m_columns"][] = "sales_price";
$proto75["m_columns"][] = "registrator_id";
$proto75["m_columns"][] = "image_url";
$proto75["m_columns"][] = "description";
$proto75["m_columns"][] = "is_recommended";
$proto75["m_columns"][] = "kenpin_date";
$proto75["m_columns"][] = "status";
$proto75["m_columns"][] = "stone_level";
$proto75["m_columns"][] = "stone_level_jyuuryou";
$proto75["m_columns"][] = "stone_level_keijyou";
$proto75["m_columns"][] = "stone_level_color";
$proto75["m_columns"][] = "stone_level_crarity_cut";
$proto75["m_columns"][] = "stone_level_other";
$proto75["m_columns"][] = "product_num";
$proto75["m_columns"][] = "updated_at";
$proto75["m_columns"][] = "create_at";
$proto75["m_columns"][] = "buyer_id";
$proto75["m_columns"][] = "yahoo_size";
$proto75["m_columns"][] = "yahoo_title";
$proto75["m_columns"][] = "yahoo_junle";
$proto75["m_columns"][] = "yahoo_brand";
$proto75["m_columns"][] = "yahoo_goods_name";
$proto75["m_columns"][] = "yahoo_sankou_uwadai";
$proto75["m_columns"][] = "yahoo_sozai";
$proto75["m_columns"][] = "yahoo_color";
$proto75["m_columns"][] = "yahoo_other";
$proto75["m_columns"][] = "yahoo_kataban";
$proto75["m_columns"][] = "yahoo_condition1";
$proto75["m_columns"][] = "yahoo_condition2";
$proto75["m_columns"][] = "yahoo_condition3";
$proto75["m_columns"][] = "yahoo_fuzokuhin";
$proto75["m_columns"][] = "yahoo_sinaban";
$proto75["m_columns"][] = "yahoo_saisun_sha";
$proto75["m_columns"][] = "yahoo_siire_tenpo";
$proto75["m_columns"][] = "yahoo_siire_dai";
$proto75["m_columns"][] = "yahoo_image1";
$proto75["m_columns"][] = "yahoo_image2";
$proto75["m_columns"][] = "yahoo_image3";
$proto75["m_columns"][] = "yahoo_image4";
$proto75["m_columns"][] = "yahoo_image5";
$proto75["m_columns"][] = "yahoo_sex";
$proto75["m_columns"][] = "csv";
$proto75["m_columns"][] = "box_id";
$proto75["m_columns"][] = "created_box";
$proto75["m_columns"][] = "chigin_flag";
$proto75["m_columns"][] = "rakusatu_at";
$proto75["m_columns"][] = "rakusatu_flag";
$proto75["m_columns"][] = "return_mishuppin_flag";
$proto75["m_columns"][] = "nyuukin_by";
$proto75["m_columns"][] = "nyuukin_at";
$proto75["m_columns"][] = "nyuukin_price";
$proto75["m_columns"][] = "haisoumae_flag";
$proto75["m_columns"][] = "mishuppin_flag";
$proto75["m_columns"][] = "haisouato_flag";
$proto75["m_columns"][] = "kanryou_flag";
$proto75["m_columns"][] = "kanryouhozon_flag";
$proto75["m_columns"][] = "nyuukin_regist_by";
$proto75["m_columns"][] = "created_box_at";
$proto75["m_columns"][] = "delete_box_at";
$proto75["m_columns"][] = "ehiden_checked_flag";
$proto75["m_columns"][] = "kobutu_flag";
$proto75["m_columns"][] = "yahoo_id";
$proto75["m_columns"][] = "doukon_id";
$proto75["m_columns"][] = "size_henkou";
$proto75["m_columns"][] = "s_send_money";
$proto75["m_columns"][] = "s_rakusatu_gaku";
$proto75["m_columns"][] = "s_tax";
$proto75["m_columns"][] = "mail_address";
$proto75["m_columns"][] = "doukon_flag2";
$proto75["m_columns"][] = "kessai_shubetu";
$proto75["m_columns"][] = "rakusatu_hi";
$proto75["m_columns"][] = "change_state";
$proto75["m_columns"][] = "auction_id";
$proto75["m_columns"][] = "mail_to";
$proto75["m_columns"][] = "mail_check";
$proto75["m_columns"][] = "mail_subject";
$proto75["m_columns"][] = "mail_text";
$proto75["m_columns"][] = "mail_test1";
$proto75["m_columns"][] = "mail_link";
$proto75["m_columns"][] = "mail_shouhinn_jouhou_flag";
$proto75["m_columns"][] = "mail_souryou_daibiki_flag";
$proto75["m_columns"][] = "mail_haisou_houhou_flag";
$proto75["m_columns"][] = "mail_kessai_houhou_flag";
$proto75["m_columns"][] = "mall_torikhiki_bangou_flag";
$proto75["m_columns"][] = "mail_order_flag";
$proto75["m_columns"][] = "mail_subject2";
$proto75["m_columns"][] = "mail_m_text1";
$proto75["m_columns"][] = "mail_m_myouc_flag";
$proto75["m_columns"][] = "mail_m_text2";
$proto75["m_columns"][] = "mai_m_signeture";
$proto75["m_columns"][] = "mail_tmplate_id";
$proto75["m_columns"][] = "mail_sent_data";
$proto75["m_columns"][] = "mail_sent_flag";
$proto75["m_columns"][] = "mail_shouhin_shousai_flag";
$proto75["m_columns"][] = "mail_rakusatusha_simei_flag";
$proto75["m_columns"][] = "yahoo_state";
$proto75["m_columns"][] = "rakusatu_create_at";
$proto75["m_columns"][] = "page_url";
$proto75["m_columns"][] = "updated_by";
$proto75["m_columns"][] = "raku_title";
$proto75["m_columns"][] = "raku_hyouji_big";
$proto75["m_columns"][] = "raku_hyouji_big2";
$proto75["m_columns"][] = "raku_hyouji_big3";
$proto75["m_columns"][] = "raku_hyouji_mini3";
$proto75["m_columns"][] = "raku_hyouji_small3";
$proto75["m_columns"][] = "raku_hyouji_mini2";
$proto75["m_columns"][] = "raku_hyouji_mid";
$proto75["m_columns"][] = "raku_hyouji_mini1";
$proto75["m_columns"][] = "raku_hyouji_mini";
$proto75["m_columns"][] = "raku_hyouji_mid2";
$proto75["m_columns"][] = "raku_hyouji_mid3";
$proto75["m_columns"][] = "raku_hyouji_small";
$proto75["m_columns"][] = "raku_hyouji_smail2";
$proto75["m_columns"][] = "raku_hyouji_smail3";
$proto75["m_columns"][] = "raku_hyouji_det2";
$proto75["m_columns"][] = "raku_hyouji_det1";
$proto75["m_columns"][] = "raku_hyouji_det3";
$proto75["m_columns"][] = "raku_hyoujisaki_category2";
$proto75["m_columns"][] = "raku_hyoujisaki_category";
$proto75["m_columns"][] = "raku_hyoujisaki_category3";
$proto75["m_columns"][] = "shuppin_count";
$proto75["m_columns"][] = "is_active";
$proto75["m_columns"][] = "dia_junle";
$proto75["m_columns"][] = "dia_sunpou";
$proto75["m_columns"][] = "dia_kantei_kikan";
$proto75["m_columns"][] = "dia_color_grade";
$proto75["m_columns"][] = "dia_clarity";
$proto75["m_columns"][] = "dia_cut";
$proto75["m_columns"][] = "dia_self_no";
$proto75["m_columns"][] = "dia_carat";
$proto75["m_columns"][] = "dia_sheipcut";
$proto75["m_columns"][] = "dia_polish";
$proto75["m_columns"][] = "dia_symmelry";
$proto75["m_columns"][] = "dia_table";
$proto75["m_columns"][] = "dia_depth";
$proto75["m_columns"][] = "dia_remarks";
$proto75["m_columns"][] = "dia_accessories";
$proto75["m_columns"][] = "dia_fluorescence";
$proto75["m_columns"][] = "dia_preview";
$proto75["m_columns"][] = "dis_comment";
$proto75["m_columns"][] = "haisou_bikou";
$proto75["m_columns"][] = "measure_by";
$proto75["m_columns"][] = "timesta";
$proto75["m_columns"][] = "saisun_start";
$proto75["m_columns"][] = "saisun_end";
$proto75["m_columns"][] = "haisou_bangou";
$proto75["m_columns"][] = "haisoumae_mail";
$proto75["m_columns"][] = "haisoumae_mail_ikkatu_sousin";
$proto75["m_columns"][] = "haisou_gyousha";
$proto75["m_columns"][] = "haisou_bangou2";
$proto75["m_columns"][] = "haisoumae_mail_to";
$proto75["m_columns"][] = "label_output_flag";
$proto75["m_columns"][] = "mail_send_end";
$proto75["m_columns"][] = "rakusatu_mail_count";
$proto75["m_columns"][] = "nyuukin_goukei";
$proto75["m_columns"][] = "nyuukin_tax";
$proto75["m_columns"][] = "nyuukin_type";
$proto75["m_columns"][] = "nyuukin_send_maney";
$proto75["m_columns"][] = "nyuukin_mail_log";
$proto75["m_columns"][] = "nyuukin_rakusatu_money";
$proto75["m_columns"][] = "nyuukin_card_monery";
$proto75["m_columns"][] = "nyuukin_daibiki_money";
$proto75["m_columns"][] = "nyuukin_send_to";
$proto75["m_columns"][] = "season_all";
$proto75["m_columns"][] = "season_spring";
$proto75["m_columns"][] = "season_summer";
$proto75["m_columns"][] = "season_winter";
$proto75["m_columns"][] = "season_autum";
$proto75["m_columns"][] = "item_big";
$proto75["m_columns"][] = "item_mid";
$proto75["m_columns"][] = "auction_short_url";
$proto75["m_columns"][] = "auction_auc_id";
$proto75["m_columns"][] = "logi_jan_code";
$proto75["m_columns"][] = "logi_stocking_code";
$proto75["m_columns"][] = "logi_goods_classification";
$proto75["m_columns"][] = "logi_handling_division";
$proto75["m_columns"][] = "logi_stock_number";
$proto75["m_columns"][] = "logi_order_store";
$proto75["m_columns"][] = "logi_lot";
$proto75["m_columns"][] = "logi_flagship_goods_code";
$proto75["m_columns"][] = "rakuten_csv_input_at";
$proto75["m_columns"][] = "rakusatu_wareki";
$proto75["m_columns"][] = "finish_haisou_back";
$proto75["m_columns"][] = "title_next_enjine";
$proto75["m_columns"][] = "return_update_flag";
$proto75["m_columns"][] = "kanryou_henbi";
$proto75["m_columns"][] = "box_sort";
$proto75["m_columns"][] = "division";
$proto75["m_columns"][] = "label_output_flage";
$proto75["m_columns"][] = "image_output";
$proto75["m_columns"][] = "raku_iframe_output";
$proto75["m_columns"][] = "raku_Image_output";
$proto75["m_columns"][] = "box_id_new";
$proto75["m_columns"][] = "label_output_single";
$proto75["m_columns"][] = "satei_by";
$proto75["m_columns"][] = "kanri_by";
$proto75["m_columns"][] = "kaitori_by";
$proto75["m_columns"][] = "rakuten_site_ari";
$proto75["m_columns"][] = "comment";
$proto75["m_columns"][] = "satei_hi";
$proto75["m_columns"][] = "kaitory_hi";
$proto75["m_columns"][] = "REG_PHOTOGRAPHER";
$proto75["m_columns"][] = "REG_AUTHOR";
$proto75["m_columns"][] = "REG_PACKINGS";
$proto75["m_columns"][] = "REG_KAKOU_DATE";
$proto75["m_columns"][] = "REG_KAKOU";
$proto75["m_columns"][] = "REG_EXHIBITOR";
$proto75["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto75["m_columns"][] = "DT_SHOOTING_DATE";
$proto75["m_columns"][] = "DT_PACKING_DATE";
$proto75["m_columns"][] = "DT_UP_DATE";
$proto75["m_columns"][] = "CASE_ID";
$proto75["m_columns"][] = "MATERIAL";
$proto75["m_columns"][] = "ITEM";
$proto75["m_columns"][] = "WEIGHT_KIND";
$proto75["m_columns"][] = "WEIGHT";
$proto75["m_columns"][] = "PER_PRICE";
$proto75["m_columns"][] = "AMOUNT_MONEY";
$proto75["m_columns"][] = "REG_KANRYOU";
$proto75["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto75["m_columns"][] = "SEARCH_MEDIA";
$proto75["m_columns"][] = "SEARCH_SITE";
$proto75["m_columns"][] = "AWAZU_DATE";
$proto75["m_columns"][] = "AWAZU_NIN";
$proto75["m_columns"][] = "FLG_EHIDEN_NYUUKO";
$proto75["m_columns"][] = "FLG_AWAZAU";
$proto75["m_columns"][] = "FLG_BAIKYAKU";
$proto75["m_columns"][] = "sabun_date";
$proto75["m_columns"][] = "browseid";
$proto75["m_columns"][] = "browsenode";
$proto75["m_columns"][] = "brand_mid_id";
$proto75["m_columns"][] = "size_table";
$proto75["m_columns"][] = "condition_template";
$proto75["m_columns"][] = "gold_property";
$proto75["m_columns"][] = "ichiba_title";
$proto75["m_columns"][] = "Gram";
$proto75["m_columns"][] = "Parent_stone";
$proto75["m_columns"][] = "Aside_stone";
$proto75["m_columns"][] = "Appraiser";
$proto75["m_columns"][] = "Remarks";
$proto75["m_columns"][] = "Destination_selling";
$proto75["m_columns"][] = "Finish";
$proto75["m_columns"][] = "Discrimination";
$proto75["m_columns"][] = "accessories";
$proto75["m_columns"][] = "priority";
$proto75["m_columns"][] = "A_storage";
$proto75["m_columns"][] = "price_per_gram";
$proto75["m_columns"][] = "price_per_parent_stone";
$proto75["m_columns"][] = "price_per_aside_stone";
$proto75["m_columns"][] = "yuusen";
$proto75["m_columns"][] = "a_hokan";
$proto75["m_columns"][] = "price_secret";
$proto75["m_columns"][] = "sales_price_secret";
$proto75["m_columns"][] = "eq";
$proto75["m_columns"][] = "en";
$proto75["m_columns"][] = "line";
$proto75["m_columns"][] = "item_name";
$proto75["m_columns"][] = "handle";
$proto75["m_columns"][] = "yahoo_color_id";
$proto75["m_columns"][] = "raku_sub_category_id2";
$proto75["m_columns"][] = "raku_hyoujisaki_category4";
$proto75["m_columns"][] = "raku_hyoujisaki_category5";
$proto75["m_columns"][] = "luxury";
$proto75["m_columns"][] = "line_category";
$proto75["m_columns"][] = "raku_dir_1";
$proto75["m_columns"][] = "raku_dir_2";
$proto75["m_columns"][] = "raku_dir_3";
$proto75["m_columns"][] = "raku_dir_4";
$proto75["m_columns"][] = "raku_dir_5";
$proto75["m_columns"][] = "raku_dir_result";
$proto75["m_columns"][] = "raku_tag_result";
$proto75["m_columns"][] = "serial_number";
$proto75["m_columns"][] = "Exhibition_Date";
$proto75["m_columns"][] = "search_keyword";
$proto75["m_columns"][] = "stamp";
$proto75["m_columns"][] = "motif";
$proto75["m_columns"][] = "Setting";
$proto75["m_columns"][] = "processing";
$proto75["m_columns"][] = "Sleeve_Length";
$proto75["m_columns"][] = "length";
$proto75["m_columns"][] = "Ring_size";
$proto75["m_columns"][] = "price_for_site";
$proto75["m_columns"][] = "prices";
$proto75["m_columns"][] = "salse_price";
$proto75["m_columns"][] = "salse_prices";
$proto75["m_columns"][] = "_satatus";
$obj = new SQLTable($proto75);

$proto74["m_table"] = $obj;
$proto74["m_sql"] = "store_products_batch";
$proto74["m_alias"] = "";
$proto74["m_srcTableName"] = "store_products_batch_shinaban";
$proto76=array();
$proto76["m_sql"] = "";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

$proto74["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto74);

$proto0["m_fromlist"][]=$obj;
												$proto78=array();
$proto78["m_link"] = "SQLL_LEFTJOIN";
			$proto79=array();
$proto79["m_strName"] = "store_products";
$proto79["m_srcTableName"] = "store_products_batch_shinaban";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "product_id";
$proto79["m_columns"][] = "product_id2";
$proto79["m_columns"][] = "category_id";
$proto79["m_columns"][] = "goods_title";
$proto79["m_columns"][] = "title";
$proto79["m_columns"][] = "sub_category_id1";
$proto79["m_columns"][] = "product_no";
$proto79["m_columns"][] = "sub_category_id2";
$proto79["m_columns"][] = "sub_category_id3";
$proto79["m_columns"][] = "ecc_id";
$proto79["m_columns"][] = "product_name";
$proto79["m_columns"][] = "price";
$proto79["m_columns"][] = "yahoo";
$proto79["m_columns"][] = "remark";
$proto79["m_columns"][] = "sales_price";
$proto79["m_columns"][] = "registrator_id";
$proto79["m_columns"][] = "image_url";
$proto79["m_columns"][] = "description";
$proto79["m_columns"][] = "is_recommended";
$proto79["m_columns"][] = "kenpin_date";
$proto79["m_columns"][] = "status";
$proto79["m_columns"][] = "stone_level";
$proto79["m_columns"][] = "stone_level_jyuuryou";
$proto79["m_columns"][] = "stone_level_keijyou";
$proto79["m_columns"][] = "stone_level_color";
$proto79["m_columns"][] = "stone_level_crarity_cut";
$proto79["m_columns"][] = "stone_level_other";
$proto79["m_columns"][] = "product_num";
$proto79["m_columns"][] = "updated_at";
$proto79["m_columns"][] = "create_at";
$proto79["m_columns"][] = "buyer_id";
$proto79["m_columns"][] = "yahoo_size";
$proto79["m_columns"][] = "yahoo_title";
$proto79["m_columns"][] = "yahoo_junle";
$proto79["m_columns"][] = "yahoo_brand";
$proto79["m_columns"][] = "yahoo_goods_name";
$proto79["m_columns"][] = "yahoo_sankou_uwadai";
$proto79["m_columns"][] = "yahoo_sozai";
$proto79["m_columns"][] = "yahoo_color";
$proto79["m_columns"][] = "yahoo_other";
$proto79["m_columns"][] = "yahoo_kataban";
$proto79["m_columns"][] = "yahoo_condition1";
$proto79["m_columns"][] = "yahoo_condition2";
$proto79["m_columns"][] = "yahoo_condition3";
$proto79["m_columns"][] = "yahoo_fuzokuhin";
$proto79["m_columns"][] = "yahoo_sinaban";
$proto79["m_columns"][] = "yahoo_saisun_sha";
$proto79["m_columns"][] = "yahoo_siire_tenpo";
$proto79["m_columns"][] = "yahoo_siire_dai";
$proto79["m_columns"][] = "yahoo_image1";
$proto79["m_columns"][] = "yahoo_image2";
$proto79["m_columns"][] = "yahoo_image3";
$proto79["m_columns"][] = "yahoo_image4";
$proto79["m_columns"][] = "yahoo_image5";
$proto79["m_columns"][] = "yahoo_sex";
$proto79["m_columns"][] = "csv";
$proto79["m_columns"][] = "box_id";
$proto79["m_columns"][] = "created_box";
$proto79["m_columns"][] = "chigin_flag";
$proto79["m_columns"][] = "rakusatu_at";
$proto79["m_columns"][] = "rakusatu_flag";
$proto79["m_columns"][] = "return_mishuppin_flag";
$proto79["m_columns"][] = "nyuukin_by";
$proto79["m_columns"][] = "nyuukin_at";
$proto79["m_columns"][] = "nyuukin_price";
$proto79["m_columns"][] = "haisoumae_flag";
$proto79["m_columns"][] = "mishuppin_flag";
$proto79["m_columns"][] = "haisouato_flag";
$proto79["m_columns"][] = "kanryou_flag";
$proto79["m_columns"][] = "kanryouhozon_flag";
$proto79["m_columns"][] = "nyuukin_regist_by";
$proto79["m_columns"][] = "created_box_at";
$proto79["m_columns"][] = "delete_box_at";
$proto79["m_columns"][] = "ehiden_checked_flag";
$proto79["m_columns"][] = "kobutu_flag";
$proto79["m_columns"][] = "yahoo_id";
$proto79["m_columns"][] = "doukon_id";
$proto79["m_columns"][] = "size_henkou";
$proto79["m_columns"][] = "s_send_money";
$proto79["m_columns"][] = "s_rakusatu_gaku";
$proto79["m_columns"][] = "s_tax";
$proto79["m_columns"][] = "mail_address";
$proto79["m_columns"][] = "doukon_flag2";
$proto79["m_columns"][] = "kessai_shubetu";
$proto79["m_columns"][] = "rakusatu_hi";
$proto79["m_columns"][] = "change_state";
$proto79["m_columns"][] = "auction_id";
$proto79["m_columns"][] = "mail_to";
$proto79["m_columns"][] = "mail_check";
$proto79["m_columns"][] = "mail_subject";
$proto79["m_columns"][] = "mail_text";
$proto79["m_columns"][] = "mail_test1";
$proto79["m_columns"][] = "mail_link";
$proto79["m_columns"][] = "mail_shouhinn_jouhou_flag";
$proto79["m_columns"][] = "mail_souryou_daibiki_flag";
$proto79["m_columns"][] = "mail_haisou_houhou_flag";
$proto79["m_columns"][] = "mail_kessai_houhou_flag";
$proto79["m_columns"][] = "mall_torikhiki_bangou_flag";
$proto79["m_columns"][] = "mail_order_flag";
$proto79["m_columns"][] = "mail_subject2";
$proto79["m_columns"][] = "mail_m_text1";
$proto79["m_columns"][] = "mail_m_myouc_flag";
$proto79["m_columns"][] = "mail_m_text2";
$proto79["m_columns"][] = "mai_m_signeture";
$proto79["m_columns"][] = "mail_tmplate_id";
$proto79["m_columns"][] = "mail_sent_data";
$proto79["m_columns"][] = "mail_sent_flag";
$proto79["m_columns"][] = "mail_shouhin_shousai_flag";
$proto79["m_columns"][] = "mail_rakusatusha_simei_flag";
$proto79["m_columns"][] = "yahoo_state";
$proto79["m_columns"][] = "rakusatu_create_at";
$proto79["m_columns"][] = "page_url";
$proto79["m_columns"][] = "updated_by";
$proto79["m_columns"][] = "raku_title";
$proto79["m_columns"][] = "raku_hyouji_big";
$proto79["m_columns"][] = "raku_hyouji_big2";
$proto79["m_columns"][] = "raku_hyouji_big3";
$proto79["m_columns"][] = "raku_hyouji_mini3";
$proto79["m_columns"][] = "raku_hyouji_small3";
$proto79["m_columns"][] = "raku_hyouji_mini2";
$proto79["m_columns"][] = "raku_hyouji_mid";
$proto79["m_columns"][] = "raku_hyouji_mini1";
$proto79["m_columns"][] = "raku_hyouji_mini";
$proto79["m_columns"][] = "raku_hyouji_mid2";
$proto79["m_columns"][] = "raku_hyouji_mid3";
$proto79["m_columns"][] = "raku_hyouji_small";
$proto79["m_columns"][] = "raku_hyouji_smail2";
$proto79["m_columns"][] = "raku_hyouji_smail3";
$proto79["m_columns"][] = "raku_hyouji_det2";
$proto79["m_columns"][] = "raku_hyouji_det1";
$proto79["m_columns"][] = "raku_hyouji_det3";
$proto79["m_columns"][] = "raku_hyoujisaki_category2";
$proto79["m_columns"][] = "raku_hyoujisaki_category";
$proto79["m_columns"][] = "raku_hyoujisaki_category3";
$proto79["m_columns"][] = "shuppin_count";
$proto79["m_columns"][] = "is_active";
$proto79["m_columns"][] = "dia_junle";
$proto79["m_columns"][] = "dia_sunpou";
$proto79["m_columns"][] = "dia_kantei_kikan";
$proto79["m_columns"][] = "dia_color_grade";
$proto79["m_columns"][] = "dia_clarity";
$proto79["m_columns"][] = "dia_cut";
$proto79["m_columns"][] = "dia_self_no";
$proto79["m_columns"][] = "dia_carat";
$proto79["m_columns"][] = "dia_sheipcut";
$proto79["m_columns"][] = "dia_polish";
$proto79["m_columns"][] = "dia_symmelry";
$proto79["m_columns"][] = "dia_table";
$proto79["m_columns"][] = "dia_depth";
$proto79["m_columns"][] = "dia_remarks";
$proto79["m_columns"][] = "dia_accessories";
$proto79["m_columns"][] = "dia_fluorescence";
$proto79["m_columns"][] = "dia_preview";
$proto79["m_columns"][] = "dis_comment";
$proto79["m_columns"][] = "haisou_bikou";
$proto79["m_columns"][] = "measure_by";
$proto79["m_columns"][] = "timesta";
$proto79["m_columns"][] = "saisun_start";
$proto79["m_columns"][] = "saisun_end";
$proto79["m_columns"][] = "haisou_bangou";
$proto79["m_columns"][] = "haisoumae_mail";
$proto79["m_columns"][] = "haisoumae_mail_ikkatu_sousin";
$proto79["m_columns"][] = "haisou_gyousha";
$proto79["m_columns"][] = "haisou_bangou2";
$proto79["m_columns"][] = "haisoumae_mail_to";
$proto79["m_columns"][] = "label_output_flag";
$proto79["m_columns"][] = "mail_send_end";
$proto79["m_columns"][] = "rakusatu_mail_count";
$proto79["m_columns"][] = "nyuukin_goukei";
$proto79["m_columns"][] = "nyuukin_tax";
$proto79["m_columns"][] = "nyuukin_type";
$proto79["m_columns"][] = "nyuukin_send_maney";
$proto79["m_columns"][] = "nyuukin_mail_log";
$proto79["m_columns"][] = "nyuukin_rakusatu_money";
$proto79["m_columns"][] = "nyuukin_card_monery";
$proto79["m_columns"][] = "nyuukin_daibiki_money";
$proto79["m_columns"][] = "nyuukin_send_to";
$proto79["m_columns"][] = "season_all";
$proto79["m_columns"][] = "season_spring";
$proto79["m_columns"][] = "season_summer";
$proto79["m_columns"][] = "season_winter";
$proto79["m_columns"][] = "season_autum";
$proto79["m_columns"][] = "item_big";
$proto79["m_columns"][] = "item_mid";
$proto79["m_columns"][] = "auction_short_url";
$proto79["m_columns"][] = "auction_auc_id";
$proto79["m_columns"][] = "logi_jan_code";
$proto79["m_columns"][] = "logi_stocking_code";
$proto79["m_columns"][] = "logi_goods_classification";
$proto79["m_columns"][] = "logi_handling_division";
$proto79["m_columns"][] = "logi_stock_number";
$proto79["m_columns"][] = "logi_order_store";
$proto79["m_columns"][] = "logi_lot";
$proto79["m_columns"][] = "logi_flagship_goods_code";
$proto79["m_columns"][] = "rakuten_csv_input_at";
$proto79["m_columns"][] = "rakusatu_wareki";
$proto79["m_columns"][] = "finish_haisou_back";
$proto79["m_columns"][] = "title_next_enjine";
$proto79["m_columns"][] = "return_update_flag";
$proto79["m_columns"][] = "kanryou_henbi";
$proto79["m_columns"][] = "box_sort";
$proto79["m_columns"][] = "division";
$proto79["m_columns"][] = "label_output_flage";
$proto79["m_columns"][] = "image_output";
$proto79["m_columns"][] = "raku_iframe_output";
$proto79["m_columns"][] = "raku_Image_output";
$proto79["m_columns"][] = "box_id_new";
$proto79["m_columns"][] = "label_output_single";
$proto79["m_columns"][] = "satei_by";
$proto79["m_columns"][] = "kanri_by";
$proto79["m_columns"][] = "kaitori_by";
$proto79["m_columns"][] = "rakuten_site_ari";
$proto79["m_columns"][] = "comment";
$proto79["m_columns"][] = "satei_hi";
$proto79["m_columns"][] = "kaitory_hi";
$proto79["m_columns"][] = "REG_PHOTOGRAPHER";
$proto79["m_columns"][] = "REG_AUTHOR";
$proto79["m_columns"][] = "REG_PACKINGS";
$proto79["m_columns"][] = "REG_KAKOU_DATE";
$proto79["m_columns"][] = "REG_KAKOU";
$proto79["m_columns"][] = "REG_EXHIBITOR";
$proto79["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto79["m_columns"][] = "DT_SHOOTING_DATE";
$proto79["m_columns"][] = "DT_PACKING_DATE";
$proto79["m_columns"][] = "DT_UP_DATE";
$proto79["m_columns"][] = "CASE_ID";
$proto79["m_columns"][] = "MATERIAL";
$proto79["m_columns"][] = "ITEM";
$proto79["m_columns"][] = "WEIGHT_KIND";
$proto79["m_columns"][] = "WEIGHT";
$proto79["m_columns"][] = "PER_PRICE";
$proto79["m_columns"][] = "AMOUNT_MONEY";
$proto79["m_columns"][] = "REG_KANRYOU";
$proto79["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto79["m_columns"][] = "SEARCH_MEDIA";
$proto79["m_columns"][] = "SEARCH_SITE";
$proto79["m_columns"][] = "AWAZU_DATE";
$proto79["m_columns"][] = "AWAZU_NIN";
$proto79["m_columns"][] = "FLG_EHIDEN_NYUUKO";
$proto79["m_columns"][] = "FLG_AWAZAU";
$proto79["m_columns"][] = "FLG_BAIKYAKU";
$proto79["m_columns"][] = "sabun_date";
$proto79["m_columns"][] = "browseid";
$proto79["m_columns"][] = "browsenode";
$proto79["m_columns"][] = "brand_mid_id";
$proto79["m_columns"][] = "size_table";
$proto79["m_columns"][] = "condition_template";
$proto79["m_columns"][] = "gold_property";
$proto79["m_columns"][] = "ichiba_title";
$proto79["m_columns"][] = "Gram";
$proto79["m_columns"][] = "Parent_stone";
$proto79["m_columns"][] = "Aside_stone";
$proto79["m_columns"][] = "Appraiser";
$proto79["m_columns"][] = "Remarks";
$proto79["m_columns"][] = "Destination_selling";
$proto79["m_columns"][] = "Finish";
$proto79["m_columns"][] = "Discrimination";
$proto79["m_columns"][] = "accessories";
$proto79["m_columns"][] = "priority";
$proto79["m_columns"][] = "A_storage";
$proto79["m_columns"][] = "price_per_gram";
$proto79["m_columns"][] = "price_per_parent_stone";
$proto79["m_columns"][] = "price_per_aside_stone";
$proto79["m_columns"][] = "yuusen";
$proto79["m_columns"][] = "a_hokan";
$proto79["m_columns"][] = "price_secret";
$proto79["m_columns"][] = "sales_price_secret";
$proto79["m_columns"][] = "eq";
$proto79["m_columns"][] = "en";
$proto79["m_columns"][] = "line";
$proto79["m_columns"][] = "item_name";
$proto79["m_columns"][] = "handle";
$proto79["m_columns"][] = "yahoo_color_id";
$proto79["m_columns"][] = "raku_sub_category_id2";
$proto79["m_columns"][] = "raku_hyoujisaki_category4";
$proto79["m_columns"][] = "raku_hyoujisaki_category5";
$proto79["m_columns"][] = "luxury";
$proto79["m_columns"][] = "line_category";
$proto79["m_columns"][] = "raku_dir_1";
$proto79["m_columns"][] = "raku_dir_2";
$proto79["m_columns"][] = "raku_dir_3";
$proto79["m_columns"][] = "raku_dir_4";
$proto79["m_columns"][] = "raku_dir_5";
$proto79["m_columns"][] = "raku_dir_result";
$proto79["m_columns"][] = "raku_tag_result";
$proto79["m_columns"][] = "serial_number";
$proto79["m_columns"][] = "Exhibition_Date";
$proto79["m_columns"][] = "search_keyword";
$proto79["m_columns"][] = "stamp";
$proto79["m_columns"][] = "motif";
$proto79["m_columns"][] = "Setting";
$proto79["m_columns"][] = "processing";
$proto79["m_columns"][] = "Sleeve_Length";
$proto79["m_columns"][] = "length";
$proto79["m_columns"][] = "Ring_size";
$proto79["m_columns"][] = "price_for_site";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "LEFT OUTER JOIN store_products ON store_products_batch.product_id = store_products.product_id";
$proto78["m_alias"] = "";
$proto78["m_srcTableName"] = "store_products_batch_shinaban";
$proto80=array();
$proto80["m_sql"] = "store_products_batch.product_id = store_products.product_id";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "store_products_batch",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "= store_products.product_id";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto82=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "store_products_batch",
	"m_srcTableName" => "store_products_batch_shinaban"
));

$proto82["m_column"]=$obj;
$proto82["m_bAsc"] = 0;
$proto82["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto82);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="store_products_batch_shinaban";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_store_products_batch_shinaban = createSqlQuery_store_products_batch_shinaban();


	
		;

																																		

$tdatastore_products_batch_shinaban[".sqlquery"] = $queryData_store_products_batch_shinaban;

include_once(getabspath("include/store_products_batch_shinaban_events.php"));
$tableEvents["store_products_batch_shinaban"] = new eventclass_store_products_batch_shinaban;
$tdatastore_products_batch_shinaban[".hasEvents"] = true;

?>