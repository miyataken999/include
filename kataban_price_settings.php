<?php
require_once(getabspath("classes/cipherer.php"));




$tdatakataban_price = array();
	$tdatakataban_price[".truncateText"] = true;
	$tdatakataban_price[".NumberOfChars"] = 80;
	$tdatakataban_price[".ShortName"] = "kataban_price";
	$tdatakataban_price[".OwnerID"] = "";
	$tdatakataban_price[".OriginalTable"] = "kataban_price";

//	field labels
$fieldLabelskataban_price = array();
$fieldToolTipskataban_price = array();
$pageTitleskataban_price = array();
$placeHolderskataban_price = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelskataban_price["Japanese"] = array();
	$fieldToolTipskataban_price["Japanese"] = array();
	$placeHolderskataban_price["Japanese"] = array();
	$pageTitleskataban_price["Japanese"] = array();
	$fieldLabelskataban_price["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipskataban_price["Japanese"]["product_num"] = "";
	$placeHolderskataban_price["Japanese"]["product_num"] = "";
	$fieldLabelskataban_price["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipskataban_price["Japanese"]["yahoo_kataban"] = "";
	$placeHolderskataban_price["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelskataban_price["Japanese"]["N_min_price"] = "【N】最小値";
	$fieldToolTipskataban_price["Japanese"]["N_min_price"] = "";
	$placeHolderskataban_price["Japanese"]["N_min_price"] = "";
	$fieldLabelskataban_price["Japanese"]["N_avg_price"] = "【N】平均値";
	$fieldToolTipskataban_price["Japanese"]["N_avg_price"] = "";
	$placeHolderskataban_price["Japanese"]["N_avg_price"] = "";
	$fieldLabelskataban_price["Japanese"]["N_max_price"] = "【N】最大値";
	$fieldToolTipskataban_price["Japanese"]["N_max_price"] = "";
	$placeHolderskataban_price["Japanese"]["N_max_price"] = "";
	$fieldLabelskataban_price["Japanese"]["S_min_price"] = "【S】最小値";
	$fieldToolTipskataban_price["Japanese"]["S_min_price"] = "";
	$placeHolderskataban_price["Japanese"]["S_min_price"] = "";
	$fieldLabelskataban_price["Japanese"]["S_avg_price"] = "【S】平均値";
	$fieldToolTipskataban_price["Japanese"]["S_avg_price"] = "";
	$placeHolderskataban_price["Japanese"]["S_avg_price"] = "";
	$fieldLabelskataban_price["Japanese"]["S_max_price"] = "【S】最大値";
	$fieldToolTipskataban_price["Japanese"]["S_max_price"] = "";
	$placeHolderskataban_price["Japanese"]["S_max_price"] = "";
	$fieldLabelskataban_price["Japanese"]["A_min_price"] = "【A】最小値";
	$fieldToolTipskataban_price["Japanese"]["A_min_price"] = "";
	$placeHolderskataban_price["Japanese"]["A_min_price"] = "";
	$fieldLabelskataban_price["Japanese"]["A_avg_price"] = "【A】平均値";
	$fieldToolTipskataban_price["Japanese"]["A_avg_price"] = "";
	$placeHolderskataban_price["Japanese"]["A_avg_price"] = "";
	$fieldLabelskataban_price["Japanese"]["A_max_price"] = "【A】最大値";
	$fieldToolTipskataban_price["Japanese"]["A_max_price"] = "";
	$placeHolderskataban_price["Japanese"]["A_max_price"] = "";
	$fieldLabelskataban_price["Japanese"]["B_min_price"] = "【B】最小値";
	$fieldToolTipskataban_price["Japanese"]["B_min_price"] = "";
	$placeHolderskataban_price["Japanese"]["B_min_price"] = "";
	$fieldLabelskataban_price["Japanese"]["B_avg_price"] = "【B】平均値";
	$fieldToolTipskataban_price["Japanese"]["B_avg_price"] = "";
	$placeHolderskataban_price["Japanese"]["B_avg_price"] = "";
	$fieldLabelskataban_price["Japanese"]["B_max_price"] = "【B】最大値";
	$fieldToolTipskataban_price["Japanese"]["B_max_price"] = "";
	$placeHolderskataban_price["Japanese"]["B_max_price"] = "";
	$fieldLabelskataban_price["Japanese"]["C_min_price"] = "【C】最小値";
	$fieldToolTipskataban_price["Japanese"]["C_min_price"] = "";
	$placeHolderskataban_price["Japanese"]["C_min_price"] = "";
	$fieldLabelskataban_price["Japanese"]["C_avg_price"] = "【C】平均値";
	$fieldToolTipskataban_price["Japanese"]["C_avg_price"] = "";
	$placeHolderskataban_price["Japanese"]["C_avg_price"] = "";
	$fieldLabelskataban_price["Japanese"]["C_max_price"] = "【C】最大値";
	$fieldToolTipskataban_price["Japanese"]["C_max_price"] = "";
	$placeHolderskataban_price["Japanese"]["C_max_price"] = "";
	if (count($fieldToolTipskataban_price["Japanese"]))
		$tdatakataban_price[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelskataban_price[""] = array();
	$fieldToolTipskataban_price[""] = array();
	$placeHolderskataban_price[""] = array();
	$pageTitleskataban_price[""] = array();
	$fieldLabelskataban_price[""]["product_num"] = "Product Num";
	$fieldToolTipskataban_price[""]["product_num"] = "";
	$placeHolderskataban_price[""]["product_num"] = "";
	$fieldLabelskataban_price[""]["yahoo_kataban"] = "Yahoo Kataban";
	$fieldToolTipskataban_price[""]["yahoo_kataban"] = "";
	$placeHolderskataban_price[""]["yahoo_kataban"] = "";
	$fieldLabelskataban_price[""]["N_min_price"] = "N Min Price";
	$fieldToolTipskataban_price[""]["N_min_price"] = "";
	$placeHolderskataban_price[""]["N_min_price"] = "";
	$fieldLabelskataban_price[""]["N_avg_price"] = "N Avg Price";
	$fieldToolTipskataban_price[""]["N_avg_price"] = "";
	$placeHolderskataban_price[""]["N_avg_price"] = "";
	$fieldLabelskataban_price[""]["N_max_price"] = "N Max Price";
	$fieldToolTipskataban_price[""]["N_max_price"] = "";
	$placeHolderskataban_price[""]["N_max_price"] = "";
	$fieldLabelskataban_price[""]["S_min_price"] = "S Min Price";
	$fieldToolTipskataban_price[""]["S_min_price"] = "";
	$placeHolderskataban_price[""]["S_min_price"] = "";
	$fieldLabelskataban_price[""]["S_avg_price"] = "S Avg Price";
	$fieldToolTipskataban_price[""]["S_avg_price"] = "";
	$placeHolderskataban_price[""]["S_avg_price"] = "";
	$fieldLabelskataban_price[""]["S_max_price"] = "S Max Price";
	$fieldToolTipskataban_price[""]["S_max_price"] = "";
	$placeHolderskataban_price[""]["S_max_price"] = "";
	$fieldLabelskataban_price[""]["A_min_price"] = "A Min Price";
	$fieldToolTipskataban_price[""]["A_min_price"] = "";
	$placeHolderskataban_price[""]["A_min_price"] = "";
	$fieldLabelskataban_price[""]["A_avg_price"] = "A Avg Price";
	$fieldToolTipskataban_price[""]["A_avg_price"] = "";
	$placeHolderskataban_price[""]["A_avg_price"] = "";
	$fieldLabelskataban_price[""]["A_max_price"] = "A Max Price";
	$fieldToolTipskataban_price[""]["A_max_price"] = "";
	$placeHolderskataban_price[""]["A_max_price"] = "";
	$fieldLabelskataban_price[""]["B_min_price"] = "B Min Price";
	$fieldToolTipskataban_price[""]["B_min_price"] = "";
	$placeHolderskataban_price[""]["B_min_price"] = "";
	$fieldLabelskataban_price[""]["B_avg_price"] = "B Avg Price";
	$fieldToolTipskataban_price[""]["B_avg_price"] = "";
	$placeHolderskataban_price[""]["B_avg_price"] = "";
	$fieldLabelskataban_price[""]["B_max_price"] = "B Max Price";
	$fieldToolTipskataban_price[""]["B_max_price"] = "";
	$placeHolderskataban_price[""]["B_max_price"] = "";
	$fieldLabelskataban_price[""]["C_min_price"] = "C Min Price";
	$fieldToolTipskataban_price[""]["C_min_price"] = "";
	$placeHolderskataban_price[""]["C_min_price"] = "";
	$fieldLabelskataban_price[""]["C_avg_price"] = "C Avg Price";
	$fieldToolTipskataban_price[""]["C_avg_price"] = "";
	$placeHolderskataban_price[""]["C_avg_price"] = "";
	$fieldLabelskataban_price[""]["C_max_price"] = "C Max Price";
	$fieldToolTipskataban_price[""]["C_max_price"] = "";
	$placeHolderskataban_price[""]["C_max_price"] = "";
	if (count($fieldToolTipskataban_price[""]))
		$tdatakataban_price[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelskataban_price["English"] = array();
	$fieldToolTipskataban_price["English"] = array();
	$placeHolderskataban_price["English"] = array();
	$pageTitleskataban_price["English"] = array();
	$fieldLabelskataban_price["English"]["product_num"] = "Product Num";
	$fieldToolTipskataban_price["English"]["product_num"] = "";
	$placeHolderskataban_price["English"]["product_num"] = "";
	$fieldLabelskataban_price["English"]["yahoo_kataban"] = "Yahoo Kataban";
	$fieldToolTipskataban_price["English"]["yahoo_kataban"] = "";
	$placeHolderskataban_price["English"]["yahoo_kataban"] = "";
	$fieldLabelskataban_price["English"]["N_min_price"] = "N Min Price";
	$fieldToolTipskataban_price["English"]["N_min_price"] = "";
	$placeHolderskataban_price["English"]["N_min_price"] = "";
	$fieldLabelskataban_price["English"]["N_avg_price"] = "N Avg Price";
	$fieldToolTipskataban_price["English"]["N_avg_price"] = "";
	$placeHolderskataban_price["English"]["N_avg_price"] = "";
	$fieldLabelskataban_price["English"]["N_max_price"] = "N Max Price";
	$fieldToolTipskataban_price["English"]["N_max_price"] = "";
	$placeHolderskataban_price["English"]["N_max_price"] = "";
	$fieldLabelskataban_price["English"]["S_min_price"] = "S Min Price";
	$fieldToolTipskataban_price["English"]["S_min_price"] = "";
	$placeHolderskataban_price["English"]["S_min_price"] = "";
	$fieldLabelskataban_price["English"]["S_avg_price"] = "S Avg Price";
	$fieldToolTipskataban_price["English"]["S_avg_price"] = "";
	$placeHolderskataban_price["English"]["S_avg_price"] = "";
	$fieldLabelskataban_price["English"]["S_max_price"] = "S Max Price";
	$fieldToolTipskataban_price["English"]["S_max_price"] = "";
	$placeHolderskataban_price["English"]["S_max_price"] = "";
	$fieldLabelskataban_price["English"]["A_min_price"] = "A Min Price";
	$fieldToolTipskataban_price["English"]["A_min_price"] = "";
	$placeHolderskataban_price["English"]["A_min_price"] = "";
	$fieldLabelskataban_price["English"]["A_avg_price"] = "A Avg Price";
	$fieldToolTipskataban_price["English"]["A_avg_price"] = "";
	$placeHolderskataban_price["English"]["A_avg_price"] = "";
	$fieldLabelskataban_price["English"]["A_max_price"] = "A Max Price";
	$fieldToolTipskataban_price["English"]["A_max_price"] = "";
	$placeHolderskataban_price["English"]["A_max_price"] = "";
	$fieldLabelskataban_price["English"]["B_min_price"] = "B Min Price";
	$fieldToolTipskataban_price["English"]["B_min_price"] = "";
	$placeHolderskataban_price["English"]["B_min_price"] = "";
	$fieldLabelskataban_price["English"]["B_avg_price"] = "B Avg Price";
	$fieldToolTipskataban_price["English"]["B_avg_price"] = "";
	$placeHolderskataban_price["English"]["B_avg_price"] = "";
	$fieldLabelskataban_price["English"]["B_max_price"] = "B Max Price";
	$fieldToolTipskataban_price["English"]["B_max_price"] = "";
	$placeHolderskataban_price["English"]["B_max_price"] = "";
	$fieldLabelskataban_price["English"]["C_min_price"] = "C Min Price";
	$fieldToolTipskataban_price["English"]["C_min_price"] = "";
	$placeHolderskataban_price["English"]["C_min_price"] = "";
	$fieldLabelskataban_price["English"]["C_avg_price"] = "C Avg Price";
	$fieldToolTipskataban_price["English"]["C_avg_price"] = "";
	$placeHolderskataban_price["English"]["C_avg_price"] = "";
	$fieldLabelskataban_price["English"]["C_max_price"] = "C Max Price";
	$fieldToolTipskataban_price["English"]["C_max_price"] = "";
	$placeHolderskataban_price["English"]["C_max_price"] = "";
	if (count($fieldToolTipskataban_price["English"]))
		$tdatakataban_price[".isUseToolTips"] = true;
}


	$tdatakataban_price[".NCSearch"] = true;



$tdatakataban_price[".shortTableName"] = "kataban_price";
$tdatakataban_price[".nSecOptions"] = 0;
$tdatakataban_price[".recsPerRowPrint"] = 1;
$tdatakataban_price[".mainTableOwnerID"] = "";
$tdatakataban_price[".moveNext"] = 1;
$tdatakataban_price[".entityType"] = 0;

$tdatakataban_price[".strOriginalTableName"] = "kataban_price";

	



$tdatakataban_price[".showAddInPopup"] = false;

$tdatakataban_price[".showEditInPopup"] = false;

$tdatakataban_price[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatakataban_price[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatakataban_price[".fieldsForRegister"] = array();

$tdatakataban_price[".listAjax"] = false;

	$tdatakataban_price[".audit"] = false;

	$tdatakataban_price[".locking"] = false;



$tdatakataban_price[".list"] = true;



$tdatakataban_price[".reorderRecordsByHeader"] = true;




$tdatakataban_price[".import"] = true;




$tdatakataban_price[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatakataban_price[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatakataban_price[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatakataban_price[".searchSaving"] = false;
//

$tdatakataban_price[".showSearchPanel"] = true;
		$tdatakataban_price[".flexibleSearch"] = true;

$tdatakataban_price[".isUseAjaxSuggest"] = true;

$tdatakataban_price[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatakataban_price[".ajaxCodeSnippetAdded"] = false;

$tdatakataban_price[".buttonsAdded"] = false;

$tdatakataban_price[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakataban_price[".isUseTimeForSearch"] = false;





$tdatakataban_price[".allSearchFields"] = array();
$tdatakataban_price[".filterFields"] = array();
$tdatakataban_price[".requiredSearchFields"] = array();

$tdatakataban_price[".allSearchFields"][] = "product_num";
	$tdatakataban_price[".allSearchFields"][] = "yahoo_kataban";
	$tdatakataban_price[".allSearchFields"][] = "N_min_price";
	$tdatakataban_price[".allSearchFields"][] = "N_avg_price";
	$tdatakataban_price[".allSearchFields"][] = "N_max_price";
	$tdatakataban_price[".allSearchFields"][] = "S_min_price";
	$tdatakataban_price[".allSearchFields"][] = "S_avg_price";
	$tdatakataban_price[".allSearchFields"][] = "S_max_price";
	$tdatakataban_price[".allSearchFields"][] = "A_min_price";
	$tdatakataban_price[".allSearchFields"][] = "A_avg_price";
	$tdatakataban_price[".allSearchFields"][] = "A_max_price";
	$tdatakataban_price[".allSearchFields"][] = "B_min_price";
	$tdatakataban_price[".allSearchFields"][] = "B_avg_price";
	$tdatakataban_price[".allSearchFields"][] = "B_max_price";
	$tdatakataban_price[".allSearchFields"][] = "C_min_price";
	$tdatakataban_price[".allSearchFields"][] = "C_avg_price";
	$tdatakataban_price[".allSearchFields"][] = "C_max_price";
	

$tdatakataban_price[".googleLikeFields"] = array();
$tdatakataban_price[".googleLikeFields"][] = "product_num";
$tdatakataban_price[".googleLikeFields"][] = "yahoo_kataban";
$tdatakataban_price[".googleLikeFields"][] = "N_min_price";
$tdatakataban_price[".googleLikeFields"][] = "N_avg_price";
$tdatakataban_price[".googleLikeFields"][] = "N_max_price";
$tdatakataban_price[".googleLikeFields"][] = "S_min_price";
$tdatakataban_price[".googleLikeFields"][] = "S_avg_price";
$tdatakataban_price[".googleLikeFields"][] = "S_max_price";
$tdatakataban_price[".googleLikeFields"][] = "A_min_price";
$tdatakataban_price[".googleLikeFields"][] = "A_avg_price";
$tdatakataban_price[".googleLikeFields"][] = "A_max_price";
$tdatakataban_price[".googleLikeFields"][] = "B_min_price";
$tdatakataban_price[".googleLikeFields"][] = "B_avg_price";
$tdatakataban_price[".googleLikeFields"][] = "B_max_price";
$tdatakataban_price[".googleLikeFields"][] = "C_min_price";
$tdatakataban_price[".googleLikeFields"][] = "C_avg_price";
$tdatakataban_price[".googleLikeFields"][] = "C_max_price";


$tdatakataban_price[".advSearchFields"] = array();
$tdatakataban_price[".advSearchFields"][] = "product_num";
$tdatakataban_price[".advSearchFields"][] = "yahoo_kataban";
$tdatakataban_price[".advSearchFields"][] = "N_min_price";
$tdatakataban_price[".advSearchFields"][] = "N_avg_price";
$tdatakataban_price[".advSearchFields"][] = "N_max_price";
$tdatakataban_price[".advSearchFields"][] = "S_min_price";
$tdatakataban_price[".advSearchFields"][] = "S_avg_price";
$tdatakataban_price[".advSearchFields"][] = "S_max_price";
$tdatakataban_price[".advSearchFields"][] = "A_min_price";
$tdatakataban_price[".advSearchFields"][] = "A_avg_price";
$tdatakataban_price[".advSearchFields"][] = "A_max_price";
$tdatakataban_price[".advSearchFields"][] = "B_min_price";
$tdatakataban_price[".advSearchFields"][] = "B_avg_price";
$tdatakataban_price[".advSearchFields"][] = "B_max_price";
$tdatakataban_price[".advSearchFields"][] = "C_min_price";
$tdatakataban_price[".advSearchFields"][] = "C_avg_price";
$tdatakataban_price[".advSearchFields"][] = "C_max_price";

$tdatakataban_price[".tableType"] = "list";

$tdatakataban_price[".printerPageOrientation"] = 0;
$tdatakataban_price[".nPrinterPageScale"] = 100;

$tdatakataban_price[".nPrinterSplitRecords"] = 40;

$tdatakataban_price[".nPrinterPDFSplitRecords"] = 40;



$tdatakataban_price[".geocodingEnabled"] = false;





$tdatakataban_price[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatakataban_price[".pageSize"] = 100;

$tdatakataban_price[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatakataban_price[".strOrderBy"] = $tstrOrderBy;

$tdatakataban_price[".orderindexes"] = array();

$tdatakataban_price[".sqlHead"] = "SELECT `product_num`,  `yahoo_kataban`,  `N_min_price`,  `N_avg_price`,  `N_max_price`,  `S_min_price`,  `S_avg_price`,  `S_max_price`,  `A_min_price`,  `A_avg_price`,  `A_max_price`,  `B_min_price`,  `B_avg_price`,  `B_max_price`,  `C_min_price`,  `C_avg_price`,  `C_max_price`";
$tdatakataban_price[".sqlFrom"] = "FROM `kataban_price`";
$tdatakataban_price[".sqlWhereExpr"] = "";
$tdatakataban_price[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakataban_price[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakataban_price[".arrGroupsPerPage"] = $arrGPP;

$tdatakataban_price[".highlightSearchResults"] = true;

$tableKeyskataban_price = array();
$tableKeyskataban_price[] = "product_num";
$tableKeyskataban_price[] = "yahoo_kataban";
$tdatakataban_price[".Keys"] = $tableKeyskataban_price;

$tdatakataban_price[".listFields"] = array();
$tdatakataban_price[".listFields"][] = "product_num";
$tdatakataban_price[".listFields"][] = "yahoo_kataban";
$tdatakataban_price[".listFields"][] = "N_min_price";
$tdatakataban_price[".listFields"][] = "N_avg_price";
$tdatakataban_price[".listFields"][] = "N_max_price";
$tdatakataban_price[".listFields"][] = "S_min_price";
$tdatakataban_price[".listFields"][] = "S_avg_price";
$tdatakataban_price[".listFields"][] = "S_max_price";
$tdatakataban_price[".listFields"][] = "A_min_price";
$tdatakataban_price[".listFields"][] = "A_avg_price";
$tdatakataban_price[".listFields"][] = "A_max_price";
$tdatakataban_price[".listFields"][] = "B_min_price";
$tdatakataban_price[".listFields"][] = "B_avg_price";
$tdatakataban_price[".listFields"][] = "B_max_price";
$tdatakataban_price[".listFields"][] = "C_min_price";
$tdatakataban_price[".listFields"][] = "C_avg_price";
$tdatakataban_price[".listFields"][] = "C_max_price";

$tdatakataban_price[".hideMobileList"] = array();


$tdatakataban_price[".viewFields"] = array();

$tdatakataban_price[".addFields"] = array();

$tdatakataban_price[".masterListFields"] = array();
$tdatakataban_price[".masterListFields"][] = "product_num";
$tdatakataban_price[".masterListFields"][] = "yahoo_kataban";
$tdatakataban_price[".masterListFields"][] = "N_min_price";
$tdatakataban_price[".masterListFields"][] = "N_avg_price";
$tdatakataban_price[".masterListFields"][] = "N_max_price";
$tdatakataban_price[".masterListFields"][] = "S_min_price";
$tdatakataban_price[".masterListFields"][] = "S_avg_price";
$tdatakataban_price[".masterListFields"][] = "S_max_price";
$tdatakataban_price[".masterListFields"][] = "A_min_price";
$tdatakataban_price[".masterListFields"][] = "A_avg_price";
$tdatakataban_price[".masterListFields"][] = "A_max_price";
$tdatakataban_price[".masterListFields"][] = "B_min_price";
$tdatakataban_price[".masterListFields"][] = "B_avg_price";
$tdatakataban_price[".masterListFields"][] = "B_max_price";
$tdatakataban_price[".masterListFields"][] = "C_min_price";
$tdatakataban_price[".masterListFields"][] = "C_avg_price";
$tdatakataban_price[".masterListFields"][] = "C_max_price";

$tdatakataban_price[".inlineAddFields"] = array();

$tdatakataban_price[".editFields"] = array();

$tdatakataban_price[".inlineEditFields"] = array();

$tdatakataban_price[".updateSelectedFields"] = array();


$tdatakataban_price[".exportFields"] = array();

$tdatakataban_price[".importFields"] = array();
$tdatakataban_price[".importFields"][] = "product_num";
$tdatakataban_price[".importFields"][] = "yahoo_kataban";
$tdatakataban_price[".importFields"][] = "N_min_price";
$tdatakataban_price[".importFields"][] = "N_avg_price";
$tdatakataban_price[".importFields"][] = "N_max_price";
$tdatakataban_price[".importFields"][] = "S_min_price";
$tdatakataban_price[".importFields"][] = "S_avg_price";
$tdatakataban_price[".importFields"][] = "S_max_price";
$tdatakataban_price[".importFields"][] = "A_min_price";
$tdatakataban_price[".importFields"][] = "A_avg_price";
$tdatakataban_price[".importFields"][] = "A_max_price";
$tdatakataban_price[".importFields"][] = "B_min_price";
$tdatakataban_price[".importFields"][] = "B_avg_price";
$tdatakataban_price[".importFields"][] = "B_max_price";
$tdatakataban_price[".importFields"][] = "C_min_price";
$tdatakataban_price[".importFields"][] = "C_avg_price";
$tdatakataban_price[".importFields"][] = "C_max_price";

$tdatakataban_price[".printFields"] = array();

//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "kataban_price";
	$fdata["Label"] = GetFieldLabel("kataban_price","product_num");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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
	$edata["LookupTable"] = "mst_brand";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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




	$tdatakataban_price["product_num"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "kataban_price";
	$fdata["Label"] = GetFieldLabel("kataban_price","yahoo_kataban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatakataban_price["yahoo_kataban"] = $fdata;
//	N_min_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "N_min_price";
	$fdata["GoodName"] = "N_min_price";
	$fdata["ownerTable"] = "kataban_price";
	$fdata["Label"] = GetFieldLabel("kataban_price","N_min_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "N_min_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`N_min_price`";

	
	
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




	$tdatakataban_price["N_min_price"] = $fdata;
//	N_avg_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "N_avg_price";
	$fdata["GoodName"] = "N_avg_price";
	$fdata["ownerTable"] = "kataban_price";
	$fdata["Label"] = GetFieldLabel("kataban_price","N_avg_price");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "N_avg_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`N_avg_price`";

	
	
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




	$tdatakataban_price["N_avg_price"] = $fdata;
//	N_max_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "N_max_price";
	$fdata["GoodName"] = "N_max_price";
	$fdata["ownerTable"] = "kataban_price";
	$fdata["Label"] = GetFieldLabel("kataban_price","N_max_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "N_max_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`N_max_price`";

	
	
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




	$tdatakataban_price["N_max_price"] = $fdata;
//	S_min_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "S_min_price";
	$fdata["GoodName"] = "S_min_price";
	$fdata["ownerTable"] = "kataban_price";
	$fdata["Label"] = GetFieldLabel("kataban_price","S_min_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "S_min_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`S_min_price`";

	
	
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




	$tdatakataban_price["S_min_price"] = $fdata;
//	S_avg_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "S_avg_price";
	$fdata["GoodName"] = "S_avg_price";
	$fdata["ownerTable"] = "kataban_price";
	$fdata["Label"] = GetFieldLabel("kataban_price","S_avg_price");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "S_avg_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`S_avg_price`";

	
	
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




	$tdatakataban_price["S_avg_price"] = $fdata;
//	S_max_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "S_max_price";
	$fdata["GoodName"] = "S_max_price";
	$fdata["ownerTable"] = "kataban_price";
	$fdata["Label"] = GetFieldLabel("kataban_price","S_max_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "S_max_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`S_max_price`";

	
	
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




	$tdatakataban_price["S_max_price"] = $fdata;
//	A_min_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "A_min_price";
	$fdata["GoodName"] = "A_min_price";
	$fdata["ownerTable"] = "kataban_price";
	$fdata["Label"] = GetFieldLabel("kataban_price","A_min_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "A_min_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`A_min_price`";

	
	
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




	$tdatakataban_price["A_min_price"] = $fdata;
//	A_avg_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "A_avg_price";
	$fdata["GoodName"] = "A_avg_price";
	$fdata["ownerTable"] = "kataban_price";
	$fdata["Label"] = GetFieldLabel("kataban_price","A_avg_price");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "A_avg_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`A_avg_price`";

	
	
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




	$tdatakataban_price["A_avg_price"] = $fdata;
//	A_max_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "A_max_price";
	$fdata["GoodName"] = "A_max_price";
	$fdata["ownerTable"] = "kataban_price";
	$fdata["Label"] = GetFieldLabel("kataban_price","A_max_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "A_max_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`A_max_price`";

	
	
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




	$tdatakataban_price["A_max_price"] = $fdata;
//	B_min_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "B_min_price";
	$fdata["GoodName"] = "B_min_price";
	$fdata["ownerTable"] = "kataban_price";
	$fdata["Label"] = GetFieldLabel("kataban_price","B_min_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "B_min_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`B_min_price`";

	
	
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




	$tdatakataban_price["B_min_price"] = $fdata;
//	B_avg_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "B_avg_price";
	$fdata["GoodName"] = "B_avg_price";
	$fdata["ownerTable"] = "kataban_price";
	$fdata["Label"] = GetFieldLabel("kataban_price","B_avg_price");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "B_avg_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`B_avg_price`";

	
	
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




	$tdatakataban_price["B_avg_price"] = $fdata;
//	B_max_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "B_max_price";
	$fdata["GoodName"] = "B_max_price";
	$fdata["ownerTable"] = "kataban_price";
	$fdata["Label"] = GetFieldLabel("kataban_price","B_max_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "B_max_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`B_max_price`";

	
	
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




	$tdatakataban_price["B_max_price"] = $fdata;
//	C_min_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "C_min_price";
	$fdata["GoodName"] = "C_min_price";
	$fdata["ownerTable"] = "kataban_price";
	$fdata["Label"] = GetFieldLabel("kataban_price","C_min_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "C_min_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`C_min_price`";

	
	
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




	$tdatakataban_price["C_min_price"] = $fdata;
//	C_avg_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "C_avg_price";
	$fdata["GoodName"] = "C_avg_price";
	$fdata["ownerTable"] = "kataban_price";
	$fdata["Label"] = GetFieldLabel("kataban_price","C_avg_price");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "C_avg_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`C_avg_price`";

	
	
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




	$tdatakataban_price["C_avg_price"] = $fdata;
//	C_max_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "C_max_price";
	$fdata["GoodName"] = "C_max_price";
	$fdata["ownerTable"] = "kataban_price";
	$fdata["Label"] = GetFieldLabel("kataban_price","C_max_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "C_max_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`C_max_price`";

	
	
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




	$tdatakataban_price["C_max_price"] = $fdata;


$tables_data["kataban_price"]=&$tdatakataban_price;
$field_labels["kataban_price"] = &$fieldLabelskataban_price;
$fieldToolTips["kataban_price"] = &$fieldToolTipskataban_price;
$placeHolders["kataban_price"] = &$placeHolderskataban_price;
$page_titles["kataban_price"] = &$pageTitleskataban_price;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["kataban_price"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["kataban_price"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_kataban_price()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`product_num`,  `yahoo_kataban`,  `N_min_price`,  `N_avg_price`,  `N_max_price`,  `S_min_price`,  `S_avg_price`,  `S_max_price`,  `A_min_price`,  `A_avg_price`,  `A_max_price`,  `B_min_price`,  `B_avg_price`,  `B_max_price`,  `C_min_price`,  `C_avg_price`,  `C_max_price`";
$proto0["m_strFrom"] = "FROM `kataban_price`";
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
	"m_strName" => "product_num",
	"m_strTable" => "kataban_price",
	"m_srcTableName" => "kataban_price"
));

$proto6["m_sql"] = "`product_num`";
$proto6["m_srcTableName"] = "kataban_price";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "kataban_price",
	"m_srcTableName" => "kataban_price"
));

$proto8["m_sql"] = "`yahoo_kataban`";
$proto8["m_srcTableName"] = "kataban_price";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "N_min_price",
	"m_strTable" => "kataban_price",
	"m_srcTableName" => "kataban_price"
));

$proto10["m_sql"] = "`N_min_price`";
$proto10["m_srcTableName"] = "kataban_price";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "N_avg_price",
	"m_strTable" => "kataban_price",
	"m_srcTableName" => "kataban_price"
));

$proto12["m_sql"] = "`N_avg_price`";
$proto12["m_srcTableName"] = "kataban_price";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "N_max_price",
	"m_strTable" => "kataban_price",
	"m_srcTableName" => "kataban_price"
));

$proto14["m_sql"] = "`N_max_price`";
$proto14["m_srcTableName"] = "kataban_price";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "S_min_price",
	"m_strTable" => "kataban_price",
	"m_srcTableName" => "kataban_price"
));

$proto16["m_sql"] = "`S_min_price`";
$proto16["m_srcTableName"] = "kataban_price";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "S_avg_price",
	"m_strTable" => "kataban_price",
	"m_srcTableName" => "kataban_price"
));

$proto18["m_sql"] = "`S_avg_price`";
$proto18["m_srcTableName"] = "kataban_price";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "S_max_price",
	"m_strTable" => "kataban_price",
	"m_srcTableName" => "kataban_price"
));

$proto20["m_sql"] = "`S_max_price`";
$proto20["m_srcTableName"] = "kataban_price";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "A_min_price",
	"m_strTable" => "kataban_price",
	"m_srcTableName" => "kataban_price"
));

$proto22["m_sql"] = "`A_min_price`";
$proto22["m_srcTableName"] = "kataban_price";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "A_avg_price",
	"m_strTable" => "kataban_price",
	"m_srcTableName" => "kataban_price"
));

$proto24["m_sql"] = "`A_avg_price`";
$proto24["m_srcTableName"] = "kataban_price";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "A_max_price",
	"m_strTable" => "kataban_price",
	"m_srcTableName" => "kataban_price"
));

$proto26["m_sql"] = "`A_max_price`";
$proto26["m_srcTableName"] = "kataban_price";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "B_min_price",
	"m_strTable" => "kataban_price",
	"m_srcTableName" => "kataban_price"
));

$proto28["m_sql"] = "`B_min_price`";
$proto28["m_srcTableName"] = "kataban_price";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "B_avg_price",
	"m_strTable" => "kataban_price",
	"m_srcTableName" => "kataban_price"
));

$proto30["m_sql"] = "`B_avg_price`";
$proto30["m_srcTableName"] = "kataban_price";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "B_max_price",
	"m_strTable" => "kataban_price",
	"m_srcTableName" => "kataban_price"
));

$proto32["m_sql"] = "`B_max_price`";
$proto32["m_srcTableName"] = "kataban_price";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "C_min_price",
	"m_strTable" => "kataban_price",
	"m_srcTableName" => "kataban_price"
));

$proto34["m_sql"] = "`C_min_price`";
$proto34["m_srcTableName"] = "kataban_price";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "C_avg_price",
	"m_strTable" => "kataban_price",
	"m_srcTableName" => "kataban_price"
));

$proto36["m_sql"] = "`C_avg_price`";
$proto36["m_srcTableName"] = "kataban_price";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "C_max_price",
	"m_strTable" => "kataban_price",
	"m_srcTableName" => "kataban_price"
));

$proto38["m_sql"] = "`C_max_price`";
$proto38["m_srcTableName"] = "kataban_price";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "kataban_price";
$proto41["m_srcTableName"] = "kataban_price";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "product_num";
$proto41["m_columns"][] = "yahoo_kataban";
$proto41["m_columns"][] = "avg_price";
$proto41["m_columns"][] = "min_price";
$proto41["m_columns"][] = "min_price_condition";
$proto41["m_columns"][] = "min_price_satei_hi";
$proto41["m_columns"][] = "max_price";
$proto41["m_columns"][] = "max_price_condition";
$proto41["m_columns"][] = "max_price_satei_hi";
$proto41["m_columns"][] = "create_by";
$proto41["m_columns"][] = "create_at";
$proto41["m_columns"][] = "update_by";
$proto41["m_columns"][] = "update_at";
$proto41["m_columns"][] = "N_avg_price";
$proto41["m_columns"][] = "N_min_price";
$proto41["m_columns"][] = "N_max_price";
$proto41["m_columns"][] = "S_avg_price";
$proto41["m_columns"][] = "S_min_price";
$proto41["m_columns"][] = "S_max_price";
$proto41["m_columns"][] = "A_avg_price";
$proto41["m_columns"][] = "A_min_price";
$proto41["m_columns"][] = "A_max_price";
$proto41["m_columns"][] = "B_avg_price";
$proto41["m_columns"][] = "B_min_price";
$proto41["m_columns"][] = "B_max_price";
$proto41["m_columns"][] = "C_avg_price";
$proto41["m_columns"][] = "C_min_price";
$proto41["m_columns"][] = "C_max_price";
$proto41["m_columns"][] = "X_avg_price";
$proto41["m_columns"][] = "X_min_price";
$proto41["m_columns"][] = "X_max_price";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "`kataban_price`";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "kataban_price";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="kataban_price";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kataban_price = createSqlQuery_kataban_price();


	
		;

																	

$tdatakataban_price[".sqlquery"] = $queryData_kataban_price;

$tableEvents["kataban_price"] = new eventsBase;
$tdatakataban_price[".hasEvents"] = false;

?>