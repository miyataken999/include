<?php
require_once(getabspath("classes/cipherer.php"));




$tdatashouhin_for_labels = array();
	$tdatashouhin_for_labels[".truncateText"] = true;
	$tdatashouhin_for_labels[".NumberOfChars"] = 80;
	$tdatashouhin_for_labels[".ShortName"] = "shouhin_for_labels";
	$tdatashouhin_for_labels[".OwnerID"] = "";
	$tdatashouhin_for_labels[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelsshouhin_for_labels = array();
$fieldToolTipsshouhin_for_labels = array();
$pageTitlesshouhin_for_labels = array();
$placeHoldersshouhin_for_labels = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsshouhin_for_labels["Japanese"] = array();
	$fieldToolTipsshouhin_for_labels["Japanese"] = array();
	$placeHoldersshouhin_for_labels["Japanese"] = array();
	$pageTitlesshouhin_for_labels["Japanese"] = array();
	$fieldLabelsshouhin_for_labels["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsshouhin_for_labels["Japanese"]["product_id"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["product_id"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["title"] = "タイトル";
	$fieldToolTipsshouhin_for_labels["Japanese"]["title"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["title"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["price"] = "買取額";
	$fieldToolTipsshouhin_for_labels["Japanese"]["price"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["price"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipsshouhin_for_labels["Japanese"]["sales_price"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["sales_price"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["status"] = "商品状態";
	$fieldToolTipsshouhin_for_labels["Japanese"]["status"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["status"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipsshouhin_for_labels["Japanese"]["product_num"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["product_num"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipsshouhin_for_labels["Japanese"]["yahoo_kataban"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["yahoo_sinaban"] = "品番";
	$fieldToolTipsshouhin_for_labels["Japanese"]["yahoo_sinaban"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["yahoo_sinaban"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["Appraiser"] = "鑑定機関";
	$fieldToolTipsshouhin_for_labels["Japanese"]["Appraiser"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["Appraiser"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["Discrimination"] = "鑑別";
	$fieldToolTipsshouhin_for_labels["Japanese"]["Discrimination"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["Discrimination"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["accessories"] = "付属品";
	$fieldToolTipsshouhin_for_labels["Japanese"]["accessories"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["accessories"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["serial_number_for_storage"] = "機番（保管用）";
	$fieldToolTipsshouhin_for_labels["Japanese"]["serial_number_for_storage"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["serial_number_for_storage"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["event_price"] = "催事用販売額";
	$fieldToolTipsshouhin_for_labels["Japanese"]["event_price"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["event_price"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsshouhin_for_labels["Japanese"]["ecc_id"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["ecc_id"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["Parent_stone"] = "親石";
	$fieldToolTipsshouhin_for_labels["Japanese"]["Parent_stone"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["Parent_stone"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["Aside_stone"] = "脇石";
	$fieldToolTipsshouhin_for_labels["Japanese"]["Aside_stone"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["Aside_stone"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["comment"] = "コメント";
	$fieldToolTipsshouhin_for_labels["Japanese"]["comment"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["comment"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["kaitory_hi"] = "登録日";
	$fieldToolTipsshouhin_for_labels["Japanese"]["kaitory_hi"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["kaitory_hi"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["updated_at"] = "最終更新日";
	$fieldToolTipsshouhin_for_labels["Japanese"]["updated_at"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["updated_at"] = "";
	$fieldLabelsshouhin_for_labels["Japanese"]["title1"] = "タイトル1";
	$fieldToolTipsshouhin_for_labels["Japanese"]["title1"] = "";
	$placeHoldersshouhin_for_labels["Japanese"]["title1"] = "";
	if (count($fieldToolTipsshouhin_for_labels["Japanese"]))
		$tdatashouhin_for_labels[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsshouhin_for_labels[""] = array();
	$fieldToolTipsshouhin_for_labels[""] = array();
	$placeHoldersshouhin_for_labels[""] = array();
	$pageTitlesshouhin_for_labels[""] = array();
	$fieldLabelsshouhin_for_labels[""]["serial_number_for_storage"] = "Serial Number For Storage";
	$fieldToolTipsshouhin_for_labels[""]["serial_number_for_storage"] = "";
	$placeHoldersshouhin_for_labels[""]["serial_number_for_storage"] = "";
	$fieldLabelsshouhin_for_labels[""]["event_price"] = "Event Price";
	$fieldToolTipsshouhin_for_labels[""]["event_price"] = "";
	$placeHoldersshouhin_for_labels[""]["event_price"] = "";
	$fieldLabelsshouhin_for_labels[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsshouhin_for_labels[""]["ecc_id"] = "";
	$placeHoldersshouhin_for_labels[""]["ecc_id"] = "";
	$fieldLabelsshouhin_for_labels[""]["Parent_stone"] = "Parent Stone";
	$fieldToolTipsshouhin_for_labels[""]["Parent_stone"] = "";
	$placeHoldersshouhin_for_labels[""]["Parent_stone"] = "";
	$fieldLabelsshouhin_for_labels[""]["Aside_stone"] = "Aside Stone";
	$fieldToolTipsshouhin_for_labels[""]["Aside_stone"] = "";
	$placeHoldersshouhin_for_labels[""]["Aside_stone"] = "";
	$fieldLabelsshouhin_for_labels[""]["comment"] = "Comment";
	$fieldToolTipsshouhin_for_labels[""]["comment"] = "";
	$placeHoldersshouhin_for_labels[""]["comment"] = "";
	$fieldLabelsshouhin_for_labels[""]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipsshouhin_for_labels[""]["kaitory_hi"] = "";
	$placeHoldersshouhin_for_labels[""]["kaitory_hi"] = "";
	$fieldLabelsshouhin_for_labels[""]["updated_at"] = "Updated At";
	$fieldToolTipsshouhin_for_labels[""]["updated_at"] = "";
	$placeHoldersshouhin_for_labels[""]["updated_at"] = "";
	$fieldLabelsshouhin_for_labels[""]["title1"] = "Title1";
	$fieldToolTipsshouhin_for_labels[""]["title1"] = "";
	$placeHoldersshouhin_for_labels[""]["title1"] = "";
	if (count($fieldToolTipsshouhin_for_labels[""]))
		$tdatashouhin_for_labels[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsshouhin_for_labels["English"] = array();
	$fieldToolTipsshouhin_for_labels["English"] = array();
	$placeHoldersshouhin_for_labels["English"] = array();
	$pageTitlesshouhin_for_labels["English"] = array();
	$fieldLabelsshouhin_for_labels["English"]["serial_number_for_storage"] = "Serial Number For Storage";
	$fieldToolTipsshouhin_for_labels["English"]["serial_number_for_storage"] = "";
	$placeHoldersshouhin_for_labels["English"]["serial_number_for_storage"] = "";
	$fieldLabelsshouhin_for_labels["English"]["event_price"] = "Event Price";
	$fieldToolTipsshouhin_for_labels["English"]["event_price"] = "";
	$placeHoldersshouhin_for_labels["English"]["event_price"] = "";
	$fieldLabelsshouhin_for_labels["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsshouhin_for_labels["English"]["ecc_id"] = "";
	$placeHoldersshouhin_for_labels["English"]["ecc_id"] = "";
	$fieldLabelsshouhin_for_labels["English"]["Parent_stone"] = "Parent Stone";
	$fieldToolTipsshouhin_for_labels["English"]["Parent_stone"] = "";
	$placeHoldersshouhin_for_labels["English"]["Parent_stone"] = "";
	$fieldLabelsshouhin_for_labels["English"]["Aside_stone"] = "Aside Stone";
	$fieldToolTipsshouhin_for_labels["English"]["Aside_stone"] = "";
	$placeHoldersshouhin_for_labels["English"]["Aside_stone"] = "";
	$fieldLabelsshouhin_for_labels["English"]["comment"] = "Comment";
	$fieldToolTipsshouhin_for_labels["English"]["comment"] = "";
	$placeHoldersshouhin_for_labels["English"]["comment"] = "";
	$fieldLabelsshouhin_for_labels["English"]["kaitory_hi"] = "Kaitory Hi";
	$fieldToolTipsshouhin_for_labels["English"]["kaitory_hi"] = "";
	$placeHoldersshouhin_for_labels["English"]["kaitory_hi"] = "";
	$fieldLabelsshouhin_for_labels["English"]["updated_at"] = "Updated At";
	$fieldToolTipsshouhin_for_labels["English"]["updated_at"] = "";
	$placeHoldersshouhin_for_labels["English"]["updated_at"] = "";
	$fieldLabelsshouhin_for_labels["English"]["title1"] = "Title1";
	$fieldToolTipsshouhin_for_labels["English"]["title1"] = "";
	$placeHoldersshouhin_for_labels["English"]["title1"] = "";
	if (count($fieldToolTipsshouhin_for_labels["English"]))
		$tdatashouhin_for_labels[".isUseToolTips"] = true;
}


	$tdatashouhin_for_labels[".NCSearch"] = true;



$tdatashouhin_for_labels[".shortTableName"] = "shouhin_for_labels";
$tdatashouhin_for_labels[".nSecOptions"] = 0;
$tdatashouhin_for_labels[".recsPerRowPrint"] = 1;
$tdatashouhin_for_labels[".mainTableOwnerID"] = "";
$tdatashouhin_for_labels[".moveNext"] = 1;
$tdatashouhin_for_labels[".entityType"] = 1;

$tdatashouhin_for_labels[".strOriginalTableName"] = "shouhin";

	



$tdatashouhin_for_labels[".showAddInPopup"] = false;

$tdatashouhin_for_labels[".showEditInPopup"] = false;

$tdatashouhin_for_labels[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatashouhin_for_labels[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatashouhin_for_labels[".fieldsForRegister"] = array();

$tdatashouhin_for_labels[".listAjax"] = false;

	$tdatashouhin_for_labels[".audit"] = true;

	$tdatashouhin_for_labels[".locking"] = false;



$tdatashouhin_for_labels[".list"] = true;

$tdatashouhin_for_labels[".inlineEdit"] = true;


$tdatashouhin_for_labels[".reorderRecordsByHeader"] = true;
$tdatashouhin_for_labels[".createSortByDropdown"] = true;
$tdatashouhin_for_labels[".strSortControlSettingsJSON"] = "";




$tdatashouhin_for_labels[".import"] = true;

$tdatashouhin_for_labels[".exportTo"] = true;



$tdatashouhin_for_labels[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatashouhin_for_labels[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatashouhin_for_labels[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatashouhin_for_labels[".searchSaving"] = false;
//

$tdatashouhin_for_labels[".showSearchPanel"] = true;
		$tdatashouhin_for_labels[".flexibleSearch"] = true;

$tdatashouhin_for_labels[".isUseAjaxSuggest"] = true;

$tdatashouhin_for_labels[".rowHighlite"] = true;



																																																																																																																																																																																																									
					
					
					
					
					
																				

$tdatashouhin_for_labels[".ajaxCodeSnippetAdded"] = false;

$tdatashouhin_for_labels[".buttonsAdded"] = true;

$tdatashouhin_for_labels[".addPageEvents"] = true;

// use timepicker for search panel
$tdatashouhin_for_labels[".isUseTimeForSearch"] = false;



$tdatashouhin_for_labels[".badgeColor"] = "BC8F8F";


$tdatashouhin_for_labels[".allSearchFields"] = array();
$tdatashouhin_for_labels[".filterFields"] = array();
$tdatashouhin_for_labels[".requiredSearchFields"] = array();

$tdatashouhin_for_labels[".allSearchFields"][] = "status";
	$tdatashouhin_for_labels[".allSearchFields"][] = "product_id";
	$tdatashouhin_for_labels[".allSearchFields"][] = "ecc_id";
	$tdatashouhin_for_labels[".allSearchFields"][] = "yahoo_sinaban";
	$tdatashouhin_for_labels[".allSearchFields"][] = "title1";
	$tdatashouhin_for_labels[".allSearchFields"][] = "Parent_stone";
	$tdatashouhin_for_labels[".allSearchFields"][] = "Aside_stone";
	$tdatashouhin_for_labels[".allSearchFields"][] = "product_num";
	$tdatashouhin_for_labels[".allSearchFields"][] = "serial_number_for_storage";
	$tdatashouhin_for_labels[".allSearchFields"][] = "yahoo_kataban";
	$tdatashouhin_for_labels[".allSearchFields"][] = "Appraiser";
	$tdatashouhin_for_labels[".allSearchFields"][] = "Discrimination";
	$tdatashouhin_for_labels[".allSearchFields"][] = "accessories";
	$tdatashouhin_for_labels[".allSearchFields"][] = "price";
	$tdatashouhin_for_labels[".allSearchFields"][] = "sales_price";
	$tdatashouhin_for_labels[".allSearchFields"][] = "event_price";
	$tdatashouhin_for_labels[".allSearchFields"][] = "comment";
	$tdatashouhin_for_labels[".allSearchFields"][] = "kaitory_hi";
	$tdatashouhin_for_labels[".allSearchFields"][] = "updated_at";
	

$tdatashouhin_for_labels[".googleLikeFields"] = array();
$tdatashouhin_for_labels[".googleLikeFields"][] = "status";
$tdatashouhin_for_labels[".googleLikeFields"][] = "product_id";
$tdatashouhin_for_labels[".googleLikeFields"][] = "title";
$tdatashouhin_for_labels[".googleLikeFields"][] = "yahoo_sinaban";
$tdatashouhin_for_labels[".googleLikeFields"][] = "product_num";
$tdatashouhin_for_labels[".googleLikeFields"][] = "Appraiser";
$tdatashouhin_for_labels[".googleLikeFields"][] = "Discrimination";
$tdatashouhin_for_labels[".googleLikeFields"][] = "accessories";
$tdatashouhin_for_labels[".googleLikeFields"][] = "price";
$tdatashouhin_for_labels[".googleLikeFields"][] = "sales_price";
$tdatashouhin_for_labels[".googleLikeFields"][] = "serial_number_for_storage";
$tdatashouhin_for_labels[".googleLikeFields"][] = "yahoo_kataban";
$tdatashouhin_for_labels[".googleLikeFields"][] = "event_price";
$tdatashouhin_for_labels[".googleLikeFields"][] = "ecc_id";
$tdatashouhin_for_labels[".googleLikeFields"][] = "Parent_stone";
$tdatashouhin_for_labels[".googleLikeFields"][] = "Aside_stone";
$tdatashouhin_for_labels[".googleLikeFields"][] = "comment";
$tdatashouhin_for_labels[".googleLikeFields"][] = "kaitory_hi";
$tdatashouhin_for_labels[".googleLikeFields"][] = "updated_at";
$tdatashouhin_for_labels[".googleLikeFields"][] = "title1";

$tdatashouhin_for_labels[".panelSearchFields"] = array();
$tdatashouhin_for_labels[".searchPanelOptions"] = array();
$tdatashouhin_for_labels[".panelSearchFields"][] = "status";
	$tdatashouhin_for_labels[".panelSearchFields"][] = "product_id";
	$tdatashouhin_for_labels[".panelSearchFields"][] = "ecc_id";
	$tdatashouhin_for_labels[".panelSearchFields"][] = "yahoo_sinaban";
	$tdatashouhin_for_labels[".panelSearchFields"][] = "title";
	$tdatashouhin_for_labels[".panelSearchFields"][] = "product_num";
	$tdatashouhin_for_labels[".panelSearchFields"][] = "yahoo_kataban";
	$tdatashouhin_for_labels[".panelSearchFields"][] = "Appraiser";
	$tdatashouhin_for_labels[".panelSearchFields"][] = "Discrimination";
	$tdatashouhin_for_labels[".panelSearchFields"][] = "accessories";
	$tdatashouhin_for_labels[".panelSearchFields"][] = "price";
	$tdatashouhin_for_labels[".panelSearchFields"][] = "sales_price";
	
$tdatashouhin_for_labels[".advSearchFields"] = array();
$tdatashouhin_for_labels[".advSearchFields"][] = "status";
$tdatashouhin_for_labels[".advSearchFields"][] = "product_id";
$tdatashouhin_for_labels[".advSearchFields"][] = "ecc_id";
$tdatashouhin_for_labels[".advSearchFields"][] = "yahoo_sinaban";
$tdatashouhin_for_labels[".advSearchFields"][] = "title1";
$tdatashouhin_for_labels[".advSearchFields"][] = "Parent_stone";
$tdatashouhin_for_labels[".advSearchFields"][] = "Aside_stone";
$tdatashouhin_for_labels[".advSearchFields"][] = "product_num";
$tdatashouhin_for_labels[".advSearchFields"][] = "serial_number_for_storage";
$tdatashouhin_for_labels[".advSearchFields"][] = "yahoo_kataban";
$tdatashouhin_for_labels[".advSearchFields"][] = "Appraiser";
$tdatashouhin_for_labels[".advSearchFields"][] = "Discrimination";
$tdatashouhin_for_labels[".advSearchFields"][] = "accessories";
$tdatashouhin_for_labels[".advSearchFields"][] = "price";
$tdatashouhin_for_labels[".advSearchFields"][] = "sales_price";
$tdatashouhin_for_labels[".advSearchFields"][] = "event_price";
$tdatashouhin_for_labels[".advSearchFields"][] = "comment";
$tdatashouhin_for_labels[".advSearchFields"][] = "kaitory_hi";
$tdatashouhin_for_labels[".advSearchFields"][] = "updated_at";

$tdatashouhin_for_labels[".tableType"] = "list";

$tdatashouhin_for_labels[".printerPageOrientation"] = 0;
$tdatashouhin_for_labels[".nPrinterPageScale"] = 100;

$tdatashouhin_for_labels[".nPrinterSplitRecords"] = 40;

$tdatashouhin_for_labels[".nPrinterPDFSplitRecords"] = 40;



$tdatashouhin_for_labels[".geocodingEnabled"] = false;





$tdatashouhin_for_labels[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatashouhin_for_labels[".totalsFields"] = array();
$tdatashouhin_for_labels[".totalsFields"][] = array(
	"fName" => "price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdatashouhin_for_labels[".totalsFields"][] = array(
	"fName" => "sales_price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');

$tdatashouhin_for_labels[".pageSize"] = 20;

$tdatashouhin_for_labels[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatashouhin_for_labels[".strOrderBy"] = $tstrOrderBy;

$tdatashouhin_for_labels[".orderindexes"] = array();
$tdatashouhin_for_labels[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`product_id`");

$tdatashouhin_for_labels[".sqlHead"] = "SELECT `status`,  `product_id`,  `product_id` AS `title`,  `yahoo_sinaban`,  `product_num`,  `Appraiser`,  `Discrimination`,  `accessories`,  `price`,  `sales_price`,  `serial_number_for_storage`,  `yahoo_kataban`,  `event_price`,  `ecc_id`,  `Parent_stone`,  `Aside_stone`,  `comment`,  `kaitory_hi`,  `updated_at`,  `title` AS `title1`";
$tdatashouhin_for_labels[".sqlFrom"] = "FROM `shouhin`";
$tdatashouhin_for_labels[".sqlWhereExpr"] = "";
$tdatashouhin_for_labels[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatashouhin_for_labels[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatashouhin_for_labels[".arrGroupsPerPage"] = $arrGPP;

$tdatashouhin_for_labels[".highlightSearchResults"] = true;

$tableKeysshouhin_for_labels = array();
$tableKeysshouhin_for_labels[] = "product_id";
$tdatashouhin_for_labels[".Keys"] = $tableKeysshouhin_for_labels;

$tdatashouhin_for_labels[".listFields"] = array();
$tdatashouhin_for_labels[".listFields"][] = "status";
$tdatashouhin_for_labels[".listFields"][] = "product_id";
$tdatashouhin_for_labels[".listFields"][] = "ecc_id";
$tdatashouhin_for_labels[".listFields"][] = "yahoo_sinaban";
$tdatashouhin_for_labels[".listFields"][] = "title1";
$tdatashouhin_for_labels[".listFields"][] = "Parent_stone";
$tdatashouhin_for_labels[".listFields"][] = "Aside_stone";
$tdatashouhin_for_labels[".listFields"][] = "product_num";
$tdatashouhin_for_labels[".listFields"][] = "serial_number_for_storage";
$tdatashouhin_for_labels[".listFields"][] = "yahoo_kataban";
$tdatashouhin_for_labels[".listFields"][] = "Appraiser";
$tdatashouhin_for_labels[".listFields"][] = "Discrimination";
$tdatashouhin_for_labels[".listFields"][] = "accessories";
$tdatashouhin_for_labels[".listFields"][] = "price";
$tdatashouhin_for_labels[".listFields"][] = "sales_price";
$tdatashouhin_for_labels[".listFields"][] = "event_price";
$tdatashouhin_for_labels[".listFields"][] = "comment";
$tdatashouhin_for_labels[".listFields"][] = "kaitory_hi";
$tdatashouhin_for_labels[".listFields"][] = "updated_at";

$tdatashouhin_for_labels[".hideMobileList"] = array();


$tdatashouhin_for_labels[".viewFields"] = array();

$tdatashouhin_for_labels[".addFields"] = array();

$tdatashouhin_for_labels[".masterListFields"] = array();
$tdatashouhin_for_labels[".masterListFields"][] = "status";
$tdatashouhin_for_labels[".masterListFields"][] = "product_id";
$tdatashouhin_for_labels[".masterListFields"][] = "ecc_id";
$tdatashouhin_for_labels[".masterListFields"][] = "yahoo_sinaban";
$tdatashouhin_for_labels[".masterListFields"][] = "title1";
$tdatashouhin_for_labels[".masterListFields"][] = "title";
$tdatashouhin_for_labels[".masterListFields"][] = "Parent_stone";
$tdatashouhin_for_labels[".masterListFields"][] = "Aside_stone";
$tdatashouhin_for_labels[".masterListFields"][] = "product_num";
$tdatashouhin_for_labels[".masterListFields"][] = "serial_number_for_storage";
$tdatashouhin_for_labels[".masterListFields"][] = "yahoo_kataban";
$tdatashouhin_for_labels[".masterListFields"][] = "Appraiser";
$tdatashouhin_for_labels[".masterListFields"][] = "Discrimination";
$tdatashouhin_for_labels[".masterListFields"][] = "accessories";
$tdatashouhin_for_labels[".masterListFields"][] = "price";
$tdatashouhin_for_labels[".masterListFields"][] = "sales_price";
$tdatashouhin_for_labels[".masterListFields"][] = "event_price";
$tdatashouhin_for_labels[".masterListFields"][] = "comment";
$tdatashouhin_for_labels[".masterListFields"][] = "kaitory_hi";
$tdatashouhin_for_labels[".masterListFields"][] = "updated_at";

$tdatashouhin_for_labels[".inlineAddFields"] = array();

$tdatashouhin_for_labels[".editFields"] = array();

$tdatashouhin_for_labels[".inlineEditFields"] = array();
$tdatashouhin_for_labels[".inlineEditFields"][] = "status";
$tdatashouhin_for_labels[".inlineEditFields"][] = "title1";
$tdatashouhin_for_labels[".inlineEditFields"][] = "Parent_stone";
$tdatashouhin_for_labels[".inlineEditFields"][] = "Aside_stone";
$tdatashouhin_for_labels[".inlineEditFields"][] = "product_num";
$tdatashouhin_for_labels[".inlineEditFields"][] = "serial_number_for_storage";
$tdatashouhin_for_labels[".inlineEditFields"][] = "yahoo_kataban";
$tdatashouhin_for_labels[".inlineEditFields"][] = "Appraiser";
$tdatashouhin_for_labels[".inlineEditFields"][] = "Discrimination";
$tdatashouhin_for_labels[".inlineEditFields"][] = "accessories";
$tdatashouhin_for_labels[".inlineEditFields"][] = "price";
$tdatashouhin_for_labels[".inlineEditFields"][] = "sales_price";
$tdatashouhin_for_labels[".inlineEditFields"][] = "event_price";
$tdatashouhin_for_labels[".inlineEditFields"][] = "comment";
$tdatashouhin_for_labels[".inlineEditFields"][] = "kaitory_hi";
$tdatashouhin_for_labels[".inlineEditFields"][] = "updated_at";

$tdatashouhin_for_labels[".updateSelectedFields"] = array();


$tdatashouhin_for_labels[".exportFields"] = array();
$tdatashouhin_for_labels[".exportFields"][] = "status";
$tdatashouhin_for_labels[".exportFields"][] = "product_id";
$tdatashouhin_for_labels[".exportFields"][] = "ecc_id";
$tdatashouhin_for_labels[".exportFields"][] = "yahoo_sinaban";
$tdatashouhin_for_labels[".exportFields"][] = "title1";
$tdatashouhin_for_labels[".exportFields"][] = "Parent_stone";
$tdatashouhin_for_labels[".exportFields"][] = "Aside_stone";
$tdatashouhin_for_labels[".exportFields"][] = "product_num";
$tdatashouhin_for_labels[".exportFields"][] = "serial_number_for_storage";
$tdatashouhin_for_labels[".exportFields"][] = "yahoo_kataban";
$tdatashouhin_for_labels[".exportFields"][] = "Appraiser";
$tdatashouhin_for_labels[".exportFields"][] = "Discrimination";
$tdatashouhin_for_labels[".exportFields"][] = "accessories";
$tdatashouhin_for_labels[".exportFields"][] = "price";
$tdatashouhin_for_labels[".exportFields"][] = "sales_price";
$tdatashouhin_for_labels[".exportFields"][] = "event_price";
$tdatashouhin_for_labels[".exportFields"][] = "comment";
$tdatashouhin_for_labels[".exportFields"][] = "kaitory_hi";
$tdatashouhin_for_labels[".exportFields"][] = "updated_at";

$tdatashouhin_for_labels[".importFields"] = array();
$tdatashouhin_for_labels[".importFields"][] = "status";
$tdatashouhin_for_labels[".importFields"][] = "product_id";
$tdatashouhin_for_labels[".importFields"][] = "yahoo_sinaban";
$tdatashouhin_for_labels[".importFields"][] = "product_num";
$tdatashouhin_for_labels[".importFields"][] = "Appraiser";
$tdatashouhin_for_labels[".importFields"][] = "Discrimination";
$tdatashouhin_for_labels[".importFields"][] = "accessories";
$tdatashouhin_for_labels[".importFields"][] = "price";
$tdatashouhin_for_labels[".importFields"][] = "sales_price";
$tdatashouhin_for_labels[".importFields"][] = "serial_number_for_storage";
$tdatashouhin_for_labels[".importFields"][] = "yahoo_kataban";
$tdatashouhin_for_labels[".importFields"][] = "event_price";
$tdatashouhin_for_labels[".importFields"][] = "ecc_id";
$tdatashouhin_for_labels[".importFields"][] = "Parent_stone";
$tdatashouhin_for_labels[".importFields"][] = "Aside_stone";
$tdatashouhin_for_labels[".importFields"][] = "comment";
$tdatashouhin_for_labels[".importFields"][] = "kaitory_hi";
$tdatashouhin_for_labels[".importFields"][] = "updated_at";
$tdatashouhin_for_labels[".importFields"][] = "title1";

$tdatashouhin_for_labels[".printFields"] = array();

//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "goods_status";

	
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




	$tdatashouhin_for_labels["status"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","product_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`product_id`";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatashouhin_for_labels["product_id"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","title");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`product_id`";

	
	
			
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

	
	
	
				$edata["nRows"] = 40;
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








	$tdatashouhin_for_labels["title"] = $fdata;
//	yahoo_sinaban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "yahoo_sinaban";
	$fdata["GoodName"] = "yahoo_sinaban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","yahoo_sinaban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_sinaban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`yahoo_sinaban`";

	
	
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




	$tdatashouhin_for_labels["yahoo_sinaban"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","product_num");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
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
	$edata["LookupTable"] = "mst_brand2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "mst_band_title";

	
	
	
	

	
	
	
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




	$tdatashouhin_for_labels["product_num"] = $fdata;
//	Appraiser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Appraiser";
	$fdata["GoodName"] = "Appraiser";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","Appraiser");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Appraiser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Appraiser`";

	
	
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
	$edata["LookupTable"] = "mst_Appraiser";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "english_name";

	
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




	$tdatashouhin_for_labels["Appraiser"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","Discrimination");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
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

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 200;
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




	$tdatashouhin_for_labels["Discrimination"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "accessories";
	$fdata["GoodName"] = "accessories";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","accessories");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "accessories";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`accessories`";

	
	
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
	$edata["LookupTable"] = "mst_accessories";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 3;
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




	$tdatashouhin_for_labels["accessories"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`price`";

	
	
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




	$tdatashouhin_for_labels["price"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","sales_price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_price`";

	
	
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




	$tdatashouhin_for_labels["sales_price"] = $fdata;
//	serial_number_for_storage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "serial_number_for_storage";
	$fdata["GoodName"] = "serial_number_for_storage";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","serial_number_for_storage");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "serial_number_for_storage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`serial_number_for_storage`";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatashouhin_for_labels["serial_number_for_storage"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","yahoo_kataban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yahoo_kataban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`yahoo_kataban`";

	
	
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
			$edata["EditParams"].= " maxlength=129";

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




	$tdatashouhin_for_labels["yahoo_kataban"] = $fdata;
//	event_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "event_price";
	$fdata["GoodName"] = "event_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","event_price");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "event_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`event_price`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdatashouhin_for_labels["event_price"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ecc_id`";

	
	
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




	$tdatashouhin_for_labels["ecc_id"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","Parent_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Parent_stone`";

	
	
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




	$tdatashouhin_for_labels["Parent_stone"] = $fdata;
//	Aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Aside_stone";
	$fdata["GoodName"] = "Aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","Aside_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Aside_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Aside_stone`";

	
	
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




	$tdatashouhin_for_labels["Aside_stone"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","comment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`comment`";

	
	
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




	$tdatashouhin_for_labels["comment"] = $fdata;
//	kaitory_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "kaitory_hi";
	$fdata["GoodName"] = "kaitory_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","kaitory_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kaitory_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kaitory_hi`";

	
	
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




	$tdatashouhin_for_labels["kaitory_hi"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatashouhin_for_labels["updated_at"] = $fdata;
//	title1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "title1";
	$fdata["GoodName"] = "title1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("shouhin_for_labels","title1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`title`";

	
	
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




	$tdatashouhin_for_labels["title1"] = $fdata;


$tables_data["shouhin_for_labels"]=&$tdatashouhin_for_labels;
$field_labels["shouhin_for_labels"] = &$fieldLabelsshouhin_for_labels;
$fieldToolTips["shouhin_for_labels"] = &$fieldToolTipsshouhin_for_labels;
$placeHolders["shouhin_for_labels"] = &$placeHoldersshouhin_for_labels;
$page_titles["shouhin_for_labels"] = &$pageTitlesshouhin_for_labels;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["shouhin_for_labels"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["shouhin_for_labels"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_shouhin_for_labels()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`status`,  `product_id`,  `product_id` AS `title`,  `yahoo_sinaban`,  `product_num`,  `Appraiser`,  `Discrimination`,  `accessories`,  `price`,  `sales_price`,  `serial_number_for_storage`,  `yahoo_kataban`,  `event_price`,  `ecc_id`,  `Parent_stone`,  `Aside_stone`,  `comment`,  `kaitory_hi`,  `updated_at`,  `title` AS `title1`";
$proto0["m_strFrom"] = "FROM `shouhin`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `product_id` DESC";
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
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto6["m_sql"] = "`status`";
$proto6["m_srcTableName"] = "shouhin_for_labels";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto8["m_sql"] = "`product_id`";
$proto8["m_srcTableName"] = "shouhin_for_labels";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto10["m_sql"] = "`product_id`";
$proto10["m_srcTableName"] = "shouhin_for_labels";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "title";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sinaban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto12["m_sql"] = "`yahoo_sinaban`";
$proto12["m_srcTableName"] = "shouhin_for_labels";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto14["m_sql"] = "`product_num`";
$proto14["m_srcTableName"] = "shouhin_for_labels";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Appraiser",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto16["m_sql"] = "`Appraiser`";
$proto16["m_srcTableName"] = "shouhin_for_labels";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto18["m_sql"] = "`Discrimination`";
$proto18["m_srcTableName"] = "shouhin_for_labels";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto20["m_sql"] = "`accessories`";
$proto20["m_srcTableName"] = "shouhin_for_labels";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto22["m_sql"] = "`price`";
$proto22["m_srcTableName"] = "shouhin_for_labels";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto24["m_sql"] = "`sales_price`";
$proto24["m_srcTableName"] = "shouhin_for_labels";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number_for_storage",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto26["m_sql"] = "`serial_number_for_storage`";
$proto26["m_srcTableName"] = "shouhin_for_labels";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto28["m_sql"] = "`yahoo_kataban`";
$proto28["m_srcTableName"] = "shouhin_for_labels";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "event_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto30["m_sql"] = "`event_price`";
$proto30["m_srcTableName"] = "shouhin_for_labels";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto32["m_sql"] = "`ecc_id`";
$proto32["m_srcTableName"] = "shouhin_for_labels";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto34["m_sql"] = "`Parent_stone`";
$proto34["m_srcTableName"] = "shouhin_for_labels";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto36["m_sql"] = "`Aside_stone`";
$proto36["m_srcTableName"] = "shouhin_for_labels";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto38["m_sql"] = "`comment`";
$proto38["m_srcTableName"] = "shouhin_for_labels";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitory_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto40["m_sql"] = "`kaitory_hi`";
$proto40["m_srcTableName"] = "shouhin_for_labels";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto42["m_sql"] = "`updated_at`";
$proto42["m_srcTableName"] = "shouhin_for_labels";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto44["m_sql"] = "`title`";
$proto44["m_srcTableName"] = "shouhin_for_labels";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "title1";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "shouhin";
$proto47["m_srcTableName"] = "shouhin_for_labels";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "product_id";
$proto47["m_columns"][] = "category_id";
$proto47["m_columns"][] = "goods_title";
$proto47["m_columns"][] = "title";
$proto47["m_columns"][] = "sub_category_id1";
$proto47["m_columns"][] = "ecc_id";
$proto47["m_columns"][] = "price";
$proto47["m_columns"][] = "yahoo";
$proto47["m_columns"][] = "remark";
$proto47["m_columns"][] = "sales_price";
$proto47["m_columns"][] = "description";
$proto47["m_columns"][] = "status";
$proto47["m_columns"][] = "product_num";
$proto47["m_columns"][] = "updated_at";
$proto47["m_columns"][] = "yahoo_size";
$proto47["m_columns"][] = "yahoo_title";
$proto47["m_columns"][] = "yahoo_junle";
$proto47["m_columns"][] = "yahoo_sankou_uwadai";
$proto47["m_columns"][] = "yahoo_sozai";
$proto47["m_columns"][] = "yahoo_color";
$proto47["m_columns"][] = "yahoo_kataban";
$proto47["m_columns"][] = "yahoo_condition1";
$proto47["m_columns"][] = "yahoo_condition2";
$proto47["m_columns"][] = "yahoo_fuzokuhin";
$proto47["m_columns"][] = "yahoo_sinaban";
$proto47["m_columns"][] = "yahoo_saisun_sha";
$proto47["m_columns"][] = "yahoo_sex";
$proto47["m_columns"][] = "box_id";
$proto47["m_columns"][] = "nyuukin_price";
$proto47["m_columns"][] = "updated_by";
$proto47["m_columns"][] = "raku_title";
$proto47["m_columns"][] = "raku_hyoujisaki_category2";
$proto47["m_columns"][] = "raku_hyoujisaki_category";
$proto47["m_columns"][] = "raku_hyoujisaki_category3";
$proto47["m_columns"][] = "timesta";
$proto47["m_columns"][] = "saisun_start";
$proto47["m_columns"][] = "saisun_end";
$proto47["m_columns"][] = "label_output_flag";
$proto47["m_columns"][] = "season";
$proto47["m_columns"][] = "kanryou_henbi";
$proto47["m_columns"][] = "box_sort";
$proto47["m_columns"][] = "satei_by";
$proto47["m_columns"][] = "kaitori_by";
$proto47["m_columns"][] = "comment";
$proto47["m_columns"][] = "satei_hi";
$proto47["m_columns"][] = "kaitory_hi";
$proto47["m_columns"][] = "REG_PHOTOGRAPHER";
$proto47["m_columns"][] = "REG_AUTHOR";
$proto47["m_columns"][] = "REG_PACKINGS";
$proto47["m_columns"][] = "REG_KAKOU_DATE";
$proto47["m_columns"][] = "REG_KAKOU";
$proto47["m_columns"][] = "REG_EXHIBITOR";
$proto47["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto47["m_columns"][] = "DT_PACKING_DATE";
$proto47["m_columns"][] = "DT_UP_DATE";
$proto47["m_columns"][] = "AWAZU_DATE";
$proto47["m_columns"][] = "AWAZU_NIN";
$proto47["m_columns"][] = "sabun_date";
$proto47["m_columns"][] = "browseid";
$proto47["m_columns"][] = "browsenode";
$proto47["m_columns"][] = "gold_property";
$proto47["m_columns"][] = "ichiba_title";
$proto47["m_columns"][] = "Gram";
$proto47["m_columns"][] = "Parent_stone";
$proto47["m_columns"][] = "Aside_stone";
$proto47["m_columns"][] = "Appraiser";
$proto47["m_columns"][] = "Remarks";
$proto47["m_columns"][] = "Destination_selling";
$proto47["m_columns"][] = "Finish";
$proto47["m_columns"][] = "Discrimination";
$proto47["m_columns"][] = "accessories";
$proto47["m_columns"][] = "priority";
$proto47["m_columns"][] = "A_storage";
$proto47["m_columns"][] = "price_per_gram";
$proto47["m_columns"][] = "price_per_parent_stone";
$proto47["m_columns"][] = "price_per_aside_stone";
$proto47["m_columns"][] = "price_secret";
$proto47["m_columns"][] = "sales_price_secret";
$proto47["m_columns"][] = "eq";
$proto47["m_columns"][] = "en";
$proto47["m_columns"][] = "line";
$proto47["m_columns"][] = "item_name";
$proto47["m_columns"][] = "handle";
$proto47["m_columns"][] = "yahoo_color_id";
$proto47["m_columns"][] = "raku_hyoujisaki_category4";
$proto47["m_columns"][] = "raku_hyoujisaki_category5";
$proto47["m_columns"][] = "raku_dir_1";
$proto47["m_columns"][] = "raku_dir_2";
$proto47["m_columns"][] = "raku_dir_3";
$proto47["m_columns"][] = "raku_dir_4";
$proto47["m_columns"][] = "raku_dir_5";
$proto47["m_columns"][] = "raku_dir_result";
$proto47["m_columns"][] = "raku_tag_result";
$proto47["m_columns"][] = "serial_number";
$proto47["m_columns"][] = "Exhibition_Date";
$proto47["m_columns"][] = "search_keyword";
$proto47["m_columns"][] = "stamp";
$proto47["m_columns"][] = "motif";
$proto47["m_columns"][] = "Setting";
$proto47["m_columns"][] = "processing";
$proto47["m_columns"][] = "Sleeve_Length";
$proto47["m_columns"][] = "length";
$proto47["m_columns"][] = "Ring_size";
$proto47["m_columns"][] = "price_for_site";
$proto47["m_columns"][] = "yahoo_category_id";
$proto47["m_columns"][] = "Qty";
$proto47["m_columns"][] = "sales_period";
$proto47["m_columns"][] = "starting_price";
$proto47["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto47["m_columns"][] = "amount_of_image";
$proto47["m_columns"][] = "csv";
$proto47["m_columns"][] = "return_output_flag";
$proto47["m_columns"][] = "wasabi_flag";
$proto47["m_columns"][] = "ws_import_date";
$proto47["m_columns"][] = "logo";
$proto47["m_columns"][] = "parts";
$proto47["m_columns"][] = "country_of_origin";
$proto47["m_columns"][] = "zipper";
$proto47["m_columns"][] = "guarantee";
$proto47["m_columns"][] = "errors";
$proto47["m_columns"][] = "designer";
$proto47["m_columns"][] = "hahakai";
$proto47["m_columns"][] = "effect";
$proto47["m_columns"][] = "shape";
$proto47["m_columns"][] = "cutting_style";
$proto47["m_columns"][] = "chain_type";
$proto47["m_columns"][] = "number_of_stones";
$proto47["m_columns"][] = "amount";
$proto47["m_columns"][] = "satei_error";
$proto47["m_columns"][] = "producing_area";
$proto47["m_columns"][] = "shape_supplement";
$proto47["m_columns"][] = "side_gem";
$proto47["m_columns"][] = "product_style";
$proto47["m_columns"][] = "collar_neck_line";
$proto47["m_columns"][] = "breast";
$proto47["m_columns"][] = "silhouette";
$proto47["m_columns"][] = "sleeve";
$proto47["m_columns"][] = "unit";
$proto47["m_columns"][] = "hall_mark";
$proto47["m_columns"][] = "plate";
$proto47["m_columns"][] = "toe";
$proto47["m_columns"][] = "heel";
$proto47["m_columns"][] = "cloth";
$proto47["m_columns"][] = "serial_number_for_storage";
$proto47["m_columns"][] = "official_url";
$proto47["m_columns"][] = "main_details";
$proto47["m_columns"][] = "notation_size";
$proto47["m_columns"][] = "shoe_size_jp";
$proto47["m_columns"][] = "Eoc_chigins2_id";
$proto47["m_columns"][] = "country_of_origin_name";
$proto47["m_columns"][] = "mailingkit_id";
$proto47["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto47["m_columns"][] = "DA_WEIGHT";
$proto47["m_columns"][] = "DA_PER_CARAT";
$proto47["m_columns"][] = "DA_SHAPE";
$proto47["m_columns"][] = "DA_SELFGRES";
$proto47["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto47["m_columns"][] = "DA_SUGARCANE";
$proto47["m_columns"][] = "DA_RAPA";
$proto47["m_columns"][] = "DA_INTENSITY";
$proto47["m_columns"][] = "DA_OVERTONE";
$proto47["m_columns"][] = "DA_COLOR";
$proto47["m_columns"][] = "DA_CLARITY";
$proto47["m_columns"][] = "DA_CUT";
$proto47["m_columns"][] = "DA_POLISH";
$proto47["m_columns"][] = "DA_SYMMETRY";
$proto47["m_columns"][] = "DA_FLUO";
$proto47["m_columns"][] = "DA_COLOR_FLUO";
$proto47["m_columns"][] = "DA_WIDE";
$proto47["m_columns"][] = "DA_HIGH";
$proto47["m_columns"][] = "DA_DEPTH";
$proto47["m_columns"][] = "DA_APPRAISER";
$proto47["m_columns"][] = "DA_FRAPA";
$proto47["m_columns"][] = "DA_RATE";
$proto47["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto47["m_columns"][] = "DA_YOURNAME";
$proto47["m_columns"][] = "DA_RAPAB";
$proto47["m_columns"][] = "DA_GROSSPROFIT";
$proto47["m_columns"][] = "DA_INTEREST_1";
$proto47["m_columns"][] = "DA_no";
$proto47["m_columns"][] = "kinsa_flag";
$proto47["m_columns"][] = "price_for_site_flag";
$proto47["m_columns"][] = "Eoc_takuhai_id";
$proto47["m_columns"][] = "Eoc_unfinished_id";
$proto47["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto47["m_columns"][] = "chohyo_id";
$proto47["m_columns"][] = "location";
$proto47["m_columns"][] = "special_instructions_1";
$proto47["m_columns"][] = "special_instructions_2";
$proto47["m_columns"][] = "special_instructions_3";
$proto47["m_columns"][] = "chohyo_seihin_flag";
$proto47["m_columns"][] = "chohyo_dia_flag";
$proto47["m_columns"][] = "chohyo_type";
$proto47["m_columns"][] = "ichiyen_flag";
$proto47["m_columns"][] = "asuraku_fuka_flag";
$proto47["m_columns"][] = "parallel_import_flag";
$proto47["m_columns"][] = "meisai_number";
$proto47["m_columns"][] = "days_keep_price";
$proto47["m_columns"][] = "initial_included";
$proto47["m_columns"][] = "novelty";
$proto47["m_columns"][] = "tentou_label_output_flag";
$proto47["m_columns"][] = "itaku_flag";
$proto47["m_columns"][] = "including_catch";
$proto47["m_columns"][] = "ichiba_meeting_month";
$proto47["m_columns"][] = "ichiba_meeting_name";
$proto47["m_columns"][] = "ichiba_color";
$proto47["m_columns"][] = "ichiba_clarity";
$proto47["m_columns"][] = "ichiba_melee_gai";
$proto47["m_columns"][] = "ichiba_lot_pieces";
$proto47["m_columns"][] = "ichiba_image";
$proto47["m_columns"][] = "ichiba_img";
$proto47["m_columns"][] = "gold_check_id";
$proto47["m_columns"][] = "ichiba_exhibition_id";
$proto47["m_columns"][] = "ichiba_exhibition_sort";
$proto47["m_columns"][] = "cost";
$proto47["m_columns"][] = "auto_price_cut_prohibited";
$proto47["m_columns"][] = "event_price";
$proto47["m_columns"][] = "identification_cost";
$proto47["m_columns"][] = "other_cost";
$proto47["m_columns"][] = "stock_quantity";
$proto47["m_columns"][] = "Eoc_trader_id_for_buy";
$proto47["m_columns"][] = "Eoc_trader_id_for_sell";
$proto47["m_columns"][] = "multiplication_rate";
$proto47["m_columns"][] = "many_product_group_id";
$proto47["m_columns"][] = "trading_sort_id";
$proto47["m_columns"][] = "many_product_group_saiban";
$proto47["m_columns"][] = "purchase_category";
$proto47["m_columns"][] = "created_at";
$proto47["m_columns"][] = "created_by";
$proto47["m_columns"][] = "manual_input_price_per_gram";
$proto47["m_columns"][] = "satei_start";
$proto47["m_columns"][] = "self_DA_INTENSITY";
$proto47["m_columns"][] = "self_DA_OVERTONE";
$proto47["m_columns"][] = "self_DA_COLOR";
$proto47["m_columns"][] = "self_DA_CLARITY";
$proto47["m_columns"][] = "self_DA_CUT";
$proto47["m_columns"][] = "self_DA_POLISH";
$proto47["m_columns"][] = "self_DA_SYMMETRY";
$proto47["m_columns"][] = "self_DA_FLUO";
$proto47["m_columns"][] = "self_DA_COLOR_FLUO";
$proto47["m_columns"][] = "self_DA_FRAPA";
$proto47["m_columns"][] = "self_DA_RATE";
$proto47["m_columns"][] = "self_multiplication_rate";
$proto47["m_columns"][] = "is_seiyaku";
$proto47["m_columns"][] = "destination_sold_out";
$proto47["m_columns"][] = "mypage_update_prohibited";
$proto47["m_columns"][] = "gold_check_scan_id";
$proto47["m_columns"][] = "buy_campaign_data_id";
$proto47["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto47["m_columns"][] = "commission";
$proto47["m_columns"][] = "addtime_gold_check_id";
$proto47["m_columns"][] = "is_recovery";
$proto47["m_columns"][] = "sales_cost";
$proto47["m_columns"][] = "mst_business_partner_id";
$proto47["m_columns"][] = "DA_GROSSPROFIT_2";
$proto47["m_columns"][] = "DA_INTEREST_2";
$proto47["m_columns"][] = "minus_weight";
$proto47["m_columns"][] = "diameter_size";
$proto47["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "`shouhin`";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "shouhin_for_labels";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "shouhin_for_labels"
));

$proto50["m_column"]=$obj;
$proto50["m_bAsc"] = 0;
$proto50["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto50);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="shouhin_for_labels";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_shouhin_for_labels = createSqlQuery_shouhin_for_labels();


	
		;

																				

$tdatashouhin_for_labels[".sqlquery"] = $queryData_shouhin_for_labels;

include_once(getabspath("include/shouhin_for_labels_events.php"));
$tableEvents["shouhin_for_labels"] = new eventclass_shouhin_for_labels;
$tdatashouhin_for_labels[".hasEvents"] = true;

?>