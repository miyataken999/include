<?php
require_once(getabspath("classes/cipherer.php"));




$tdatashop_front_seiren_brands = array();
	$tdatashop_front_seiren_brands[".truncateText"] = true;
	$tdatashop_front_seiren_brands[".NumberOfChars"] = 80;
	$tdatashop_front_seiren_brands[".ShortName"] = "shop_front_seiren_brands";
	$tdatashop_front_seiren_brands[".OwnerID"] = "";
	$tdatashop_front_seiren_brands[".OriginalTable"] = "shop_front_seiren_brands";

//	field labels
$fieldLabelsshop_front_seiren_brands = array();
$fieldToolTipsshop_front_seiren_brands = array();
$pageTitlesshop_front_seiren_brands = array();
$placeHoldersshop_front_seiren_brands = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsshop_front_seiren_brands["Japanese"] = array();
	$fieldToolTipsshop_front_seiren_brands["Japanese"] = array();
	$placeHoldersshop_front_seiren_brands["Japanese"] = array();
	$pageTitlesshop_front_seiren_brands["Japanese"] = array();
	$fieldLabelsshop_front_seiren_brands["Japanese"]["id"] = "Id";
	$fieldToolTipsshop_front_seiren_brands["Japanese"]["id"] = "";
	$placeHoldersshop_front_seiren_brands["Japanese"]["id"] = "";
	$fieldLabelsshop_front_seiren_brands["Japanese"]["brand_name"] = "Brand Name";
	$fieldToolTipsshop_front_seiren_brands["Japanese"]["brand_name"] = "";
	$placeHoldersshop_front_seiren_brands["Japanese"]["brand_name"] = "";
	$fieldLabelsshop_front_seiren_brands["Japanese"]["gold"] = "Gold";
	$fieldToolTipsshop_front_seiren_brands["Japanese"]["gold"] = "";
	$placeHoldersshop_front_seiren_brands["Japanese"]["gold"] = "";
	$fieldLabelsshop_front_seiren_brands["Japanese"]["silver"] = "Silver";
	$fieldToolTipsshop_front_seiren_brands["Japanese"]["silver"] = "";
	$placeHoldersshop_front_seiren_brands["Japanese"]["silver"] = "";
	$fieldLabelsshop_front_seiren_brands["Japanese"]["platinum"] = "Platinum";
	$fieldToolTipsshop_front_seiren_brands["Japanese"]["platinum"] = "";
	$placeHoldersshop_front_seiren_brands["Japanese"]["platinum"] = "";
	$fieldLabelsshop_front_seiren_brands["Japanese"]["palladium"] = "Palladium";
	$fieldToolTipsshop_front_seiren_brands["Japanese"]["palladium"] = "";
	$placeHoldersshop_front_seiren_brands["Japanese"]["palladium"] = "";
	$fieldLabelsshop_front_seiren_brands["Japanese"]["tokyo_commodity_exchange"] = "Tokyo Commodity Exchange";
	$fieldToolTipsshop_front_seiren_brands["Japanese"]["tokyo_commodity_exchange"] = "";
	$placeHoldersshop_front_seiren_brands["Japanese"]["tokyo_commodity_exchange"] = "";
	$fieldLabelsshop_front_seiren_brands["Japanese"]["lbma"] = "Lbma";
	$fieldToolTipsshop_front_seiren_brands["Japanese"]["lbma"] = "";
	$placeHoldersshop_front_seiren_brands["Japanese"]["lbma"] = "";
	$fieldLabelsshop_front_seiren_brands["Japanese"]["lppm"] = "Lppm";
	$fieldToolTipsshop_front_seiren_brands["Japanese"]["lppm"] = "";
	$placeHoldersshop_front_seiren_brands["Japanese"]["lppm"] = "";
	$fieldLabelsshop_front_seiren_brands["Japanese"]["gdb"] = "Gdb";
	$fieldToolTipsshop_front_seiren_brands["Japanese"]["gdb"] = "";
	$placeHoldersshop_front_seiren_brands["Japanese"]["gdb"] = "";
	$fieldLabelsshop_front_seiren_brands["Japanese"]["type"] = "Type";
	$fieldToolTipsshop_front_seiren_brands["Japanese"]["type"] = "";
	$placeHoldersshop_front_seiren_brands["Japanese"]["type"] = "";
	if (count($fieldToolTipsshop_front_seiren_brands["Japanese"]))
		$tdatashop_front_seiren_brands[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsshop_front_seiren_brands[""] = array();
	$fieldToolTipsshop_front_seiren_brands[""] = array();
	$placeHoldersshop_front_seiren_brands[""] = array();
	$pageTitlesshop_front_seiren_brands[""] = array();
	$fieldLabelsshop_front_seiren_brands[""]["id"] = "Id";
	$fieldToolTipsshop_front_seiren_brands[""]["id"] = "";
	$placeHoldersshop_front_seiren_brands[""]["id"] = "";
	$fieldLabelsshop_front_seiren_brands[""]["brand_name"] = "Brand Name";
	$fieldToolTipsshop_front_seiren_brands[""]["brand_name"] = "";
	$placeHoldersshop_front_seiren_brands[""]["brand_name"] = "";
	$fieldLabelsshop_front_seiren_brands[""]["gold"] = "Gold";
	$fieldToolTipsshop_front_seiren_brands[""]["gold"] = "";
	$placeHoldersshop_front_seiren_brands[""]["gold"] = "";
	$fieldLabelsshop_front_seiren_brands[""]["silver"] = "Silver";
	$fieldToolTipsshop_front_seiren_brands[""]["silver"] = "";
	$placeHoldersshop_front_seiren_brands[""]["silver"] = "";
	$fieldLabelsshop_front_seiren_brands[""]["platinum"] = "Platinum";
	$fieldToolTipsshop_front_seiren_brands[""]["platinum"] = "";
	$placeHoldersshop_front_seiren_brands[""]["platinum"] = "";
	$fieldLabelsshop_front_seiren_brands[""]["palladium"] = "Palladium";
	$fieldToolTipsshop_front_seiren_brands[""]["palladium"] = "";
	$placeHoldersshop_front_seiren_brands[""]["palladium"] = "";
	$fieldLabelsshop_front_seiren_brands[""]["tokyo_commodity_exchange"] = "Tokyo Commodity Exchange";
	$fieldToolTipsshop_front_seiren_brands[""]["tokyo_commodity_exchange"] = "";
	$placeHoldersshop_front_seiren_brands[""]["tokyo_commodity_exchange"] = "";
	$fieldLabelsshop_front_seiren_brands[""]["lbma"] = "Lbma";
	$fieldToolTipsshop_front_seiren_brands[""]["lbma"] = "";
	$placeHoldersshop_front_seiren_brands[""]["lbma"] = "";
	$fieldLabelsshop_front_seiren_brands[""]["lppm"] = "Lppm";
	$fieldToolTipsshop_front_seiren_brands[""]["lppm"] = "";
	$placeHoldersshop_front_seiren_brands[""]["lppm"] = "";
	$fieldLabelsshop_front_seiren_brands[""]["gdb"] = "Gdb";
	$fieldToolTipsshop_front_seiren_brands[""]["gdb"] = "";
	$placeHoldersshop_front_seiren_brands[""]["gdb"] = "";
	$fieldLabelsshop_front_seiren_brands[""]["type"] = "Type";
	$fieldToolTipsshop_front_seiren_brands[""]["type"] = "";
	$placeHoldersshop_front_seiren_brands[""]["type"] = "";
	if (count($fieldToolTipsshop_front_seiren_brands[""]))
		$tdatashop_front_seiren_brands[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsshop_front_seiren_brands["English"] = array();
	$fieldToolTipsshop_front_seiren_brands["English"] = array();
	$placeHoldersshop_front_seiren_brands["English"] = array();
	$pageTitlesshop_front_seiren_brands["English"] = array();
	$fieldLabelsshop_front_seiren_brands["English"]["id"] = "Id";
	$fieldToolTipsshop_front_seiren_brands["English"]["id"] = "";
	$placeHoldersshop_front_seiren_brands["English"]["id"] = "";
	$fieldLabelsshop_front_seiren_brands["English"]["brand_name"] = "Brand Name";
	$fieldToolTipsshop_front_seiren_brands["English"]["brand_name"] = "";
	$placeHoldersshop_front_seiren_brands["English"]["brand_name"] = "";
	$fieldLabelsshop_front_seiren_brands["English"]["gold"] = "Gold";
	$fieldToolTipsshop_front_seiren_brands["English"]["gold"] = "";
	$placeHoldersshop_front_seiren_brands["English"]["gold"] = "";
	$fieldLabelsshop_front_seiren_brands["English"]["silver"] = "Silver";
	$fieldToolTipsshop_front_seiren_brands["English"]["silver"] = "";
	$placeHoldersshop_front_seiren_brands["English"]["silver"] = "";
	$fieldLabelsshop_front_seiren_brands["English"]["platinum"] = "Platinum";
	$fieldToolTipsshop_front_seiren_brands["English"]["platinum"] = "";
	$placeHoldersshop_front_seiren_brands["English"]["platinum"] = "";
	$fieldLabelsshop_front_seiren_brands["English"]["palladium"] = "Palladium";
	$fieldToolTipsshop_front_seiren_brands["English"]["palladium"] = "";
	$placeHoldersshop_front_seiren_brands["English"]["palladium"] = "";
	$fieldLabelsshop_front_seiren_brands["English"]["tokyo_commodity_exchange"] = "Tokyo Commodity Exchange";
	$fieldToolTipsshop_front_seiren_brands["English"]["tokyo_commodity_exchange"] = "";
	$placeHoldersshop_front_seiren_brands["English"]["tokyo_commodity_exchange"] = "";
	$fieldLabelsshop_front_seiren_brands["English"]["lbma"] = "Lbma";
	$fieldToolTipsshop_front_seiren_brands["English"]["lbma"] = "";
	$placeHoldersshop_front_seiren_brands["English"]["lbma"] = "";
	$fieldLabelsshop_front_seiren_brands["English"]["lppm"] = "Lppm";
	$fieldToolTipsshop_front_seiren_brands["English"]["lppm"] = "";
	$placeHoldersshop_front_seiren_brands["English"]["lppm"] = "";
	$fieldLabelsshop_front_seiren_brands["English"]["gdb"] = "Gdb";
	$fieldToolTipsshop_front_seiren_brands["English"]["gdb"] = "";
	$placeHoldersshop_front_seiren_brands["English"]["gdb"] = "";
	$fieldLabelsshop_front_seiren_brands["English"]["type"] = "Type";
	$fieldToolTipsshop_front_seiren_brands["English"]["type"] = "";
	$placeHoldersshop_front_seiren_brands["English"]["type"] = "";
	if (count($fieldToolTipsshop_front_seiren_brands["English"]))
		$tdatashop_front_seiren_brands[".isUseToolTips"] = true;
}


	$tdatashop_front_seiren_brands[".NCSearch"] = true;



$tdatashop_front_seiren_brands[".shortTableName"] = "shop_front_seiren_brands";
$tdatashop_front_seiren_brands[".nSecOptions"] = 0;
$tdatashop_front_seiren_brands[".recsPerRowPrint"] = 1;
$tdatashop_front_seiren_brands[".mainTableOwnerID"] = "";
$tdatashop_front_seiren_brands[".moveNext"] = 1;
$tdatashop_front_seiren_brands[".entityType"] = 0;

$tdatashop_front_seiren_brands[".strOriginalTableName"] = "shop_front_seiren_brands";

	



$tdatashop_front_seiren_brands[".showAddInPopup"] = false;

$tdatashop_front_seiren_brands[".showEditInPopup"] = false;

$tdatashop_front_seiren_brands[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatashop_front_seiren_brands[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatashop_front_seiren_brands[".fieldsForRegister"] = array();

$tdatashop_front_seiren_brands[".listAjax"] = false;

	$tdatashop_front_seiren_brands[".audit"] = true;

	$tdatashop_front_seiren_brands[".locking"] = false;



$tdatashop_front_seiren_brands[".list"] = true;

$tdatashop_front_seiren_brands[".inlineEdit"] = true;


$tdatashop_front_seiren_brands[".reorderRecordsByHeader"] = true;



$tdatashop_front_seiren_brands[".inlineAdd"] = true;

$tdatashop_front_seiren_brands[".import"] = true;

$tdatashop_front_seiren_brands[".exportTo"] = true;



$tdatashop_front_seiren_brands[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatashop_front_seiren_brands[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatashop_front_seiren_brands[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatashop_front_seiren_brands[".searchSaving"] = false;
//

$tdatashop_front_seiren_brands[".showSearchPanel"] = true;
		$tdatashop_front_seiren_brands[".flexibleSearch"] = true;

$tdatashop_front_seiren_brands[".isUseAjaxSuggest"] = true;

$tdatashop_front_seiren_brands[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatashop_front_seiren_brands[".ajaxCodeSnippetAdded"] = false;

$tdatashop_front_seiren_brands[".buttonsAdded"] = false;

$tdatashop_front_seiren_brands[".addPageEvents"] = false;

// use timepicker for search panel
$tdatashop_front_seiren_brands[".isUseTimeForSearch"] = false;





$tdatashop_front_seiren_brands[".allSearchFields"] = array();
$tdatashop_front_seiren_brands[".filterFields"] = array();
$tdatashop_front_seiren_brands[".requiredSearchFields"] = array();

$tdatashop_front_seiren_brands[".allSearchFields"][] = "id";
	$tdatashop_front_seiren_brands[".allSearchFields"][] = "brand_name";
	$tdatashop_front_seiren_brands[".allSearchFields"][] = "gold";
	$tdatashop_front_seiren_brands[".allSearchFields"][] = "silver";
	$tdatashop_front_seiren_brands[".allSearchFields"][] = "platinum";
	$tdatashop_front_seiren_brands[".allSearchFields"][] = "palladium";
	$tdatashop_front_seiren_brands[".allSearchFields"][] = "tokyo_commodity_exchange";
	$tdatashop_front_seiren_brands[".allSearchFields"][] = "lbma";
	$tdatashop_front_seiren_brands[".allSearchFields"][] = "lppm";
	$tdatashop_front_seiren_brands[".allSearchFields"][] = "gdb";
	$tdatashop_front_seiren_brands[".allSearchFields"][] = "type";
	

$tdatashop_front_seiren_brands[".googleLikeFields"] = array();
$tdatashop_front_seiren_brands[".googleLikeFields"][] = "id";
$tdatashop_front_seiren_brands[".googleLikeFields"][] = "brand_name";
$tdatashop_front_seiren_brands[".googleLikeFields"][] = "gold";
$tdatashop_front_seiren_brands[".googleLikeFields"][] = "silver";
$tdatashop_front_seiren_brands[".googleLikeFields"][] = "platinum";
$tdatashop_front_seiren_brands[".googleLikeFields"][] = "palladium";
$tdatashop_front_seiren_brands[".googleLikeFields"][] = "tokyo_commodity_exchange";
$tdatashop_front_seiren_brands[".googleLikeFields"][] = "lbma";
$tdatashop_front_seiren_brands[".googleLikeFields"][] = "lppm";
$tdatashop_front_seiren_brands[".googleLikeFields"][] = "gdb";
$tdatashop_front_seiren_brands[".googleLikeFields"][] = "type";


$tdatashop_front_seiren_brands[".advSearchFields"] = array();
$tdatashop_front_seiren_brands[".advSearchFields"][] = "id";
$tdatashop_front_seiren_brands[".advSearchFields"][] = "brand_name";
$tdatashop_front_seiren_brands[".advSearchFields"][] = "gold";
$tdatashop_front_seiren_brands[".advSearchFields"][] = "silver";
$tdatashop_front_seiren_brands[".advSearchFields"][] = "platinum";
$tdatashop_front_seiren_brands[".advSearchFields"][] = "palladium";
$tdatashop_front_seiren_brands[".advSearchFields"][] = "tokyo_commodity_exchange";
$tdatashop_front_seiren_brands[".advSearchFields"][] = "lbma";
$tdatashop_front_seiren_brands[".advSearchFields"][] = "lppm";
$tdatashop_front_seiren_brands[".advSearchFields"][] = "gdb";
$tdatashop_front_seiren_brands[".advSearchFields"][] = "type";

$tdatashop_front_seiren_brands[".tableType"] = "list";

$tdatashop_front_seiren_brands[".printerPageOrientation"] = 0;
$tdatashop_front_seiren_brands[".nPrinterPageScale"] = 100;

$tdatashop_front_seiren_brands[".nPrinterSplitRecords"] = 40;

$tdatashop_front_seiren_brands[".nPrinterPDFSplitRecords"] = 40;



$tdatashop_front_seiren_brands[".geocodingEnabled"] = false;





$tdatashop_front_seiren_brands[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatashop_front_seiren_brands[".pageSize"] = 20;

$tdatashop_front_seiren_brands[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatashop_front_seiren_brands[".strOrderBy"] = $tstrOrderBy;

$tdatashop_front_seiren_brands[".orderindexes"] = array();

$tdatashop_front_seiren_brands[".sqlHead"] = "SELECT `id`,  	`brand_name`,  	`gold`,  	`silver`,  	`platinum`,  	`palladium`,  	`tokyo_commodity_exchange`,  	`lbma`,  	`lppm`,  	`gdb`,  	`type`";
$tdatashop_front_seiren_brands[".sqlFrom"] = "FROM `shop_front_seiren_brands`";
$tdatashop_front_seiren_brands[".sqlWhereExpr"] = "";
$tdatashop_front_seiren_brands[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatashop_front_seiren_brands[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatashop_front_seiren_brands[".arrGroupsPerPage"] = $arrGPP;

$tdatashop_front_seiren_brands[".highlightSearchResults"] = true;

$tableKeysshop_front_seiren_brands = array();
$tableKeysshop_front_seiren_brands[] = "id";
$tdatashop_front_seiren_brands[".Keys"] = $tableKeysshop_front_seiren_brands;

$tdatashop_front_seiren_brands[".listFields"] = array();
$tdatashop_front_seiren_brands[".listFields"][] = "id";
$tdatashop_front_seiren_brands[".listFields"][] = "brand_name";
$tdatashop_front_seiren_brands[".listFields"][] = "gold";
$tdatashop_front_seiren_brands[".listFields"][] = "silver";
$tdatashop_front_seiren_brands[".listFields"][] = "platinum";
$tdatashop_front_seiren_brands[".listFields"][] = "palladium";
$tdatashop_front_seiren_brands[".listFields"][] = "tokyo_commodity_exchange";
$tdatashop_front_seiren_brands[".listFields"][] = "lbma";
$tdatashop_front_seiren_brands[".listFields"][] = "lppm";
$tdatashop_front_seiren_brands[".listFields"][] = "gdb";
$tdatashop_front_seiren_brands[".listFields"][] = "type";

$tdatashop_front_seiren_brands[".hideMobileList"] = array();


$tdatashop_front_seiren_brands[".viewFields"] = array();
$tdatashop_front_seiren_brands[".viewFields"][] = "type";

$tdatashop_front_seiren_brands[".addFields"] = array();
$tdatashop_front_seiren_brands[".addFields"][] = "type";

$tdatashop_front_seiren_brands[".masterListFields"] = array();
$tdatashop_front_seiren_brands[".masterListFields"][] = "id";
$tdatashop_front_seiren_brands[".masterListFields"][] = "brand_name";
$tdatashop_front_seiren_brands[".masterListFields"][] = "gold";
$tdatashop_front_seiren_brands[".masterListFields"][] = "silver";
$tdatashop_front_seiren_brands[".masterListFields"][] = "platinum";
$tdatashop_front_seiren_brands[".masterListFields"][] = "palladium";
$tdatashop_front_seiren_brands[".masterListFields"][] = "tokyo_commodity_exchange";
$tdatashop_front_seiren_brands[".masterListFields"][] = "lbma";
$tdatashop_front_seiren_brands[".masterListFields"][] = "lppm";
$tdatashop_front_seiren_brands[".masterListFields"][] = "gdb";
$tdatashop_front_seiren_brands[".masterListFields"][] = "type";

$tdatashop_front_seiren_brands[".inlineAddFields"] = array();
$tdatashop_front_seiren_brands[".inlineAddFields"][] = "brand_name";
$tdatashop_front_seiren_brands[".inlineAddFields"][] = "gold";
$tdatashop_front_seiren_brands[".inlineAddFields"][] = "silver";
$tdatashop_front_seiren_brands[".inlineAddFields"][] = "platinum";
$tdatashop_front_seiren_brands[".inlineAddFields"][] = "palladium";
$tdatashop_front_seiren_brands[".inlineAddFields"][] = "tokyo_commodity_exchange";
$tdatashop_front_seiren_brands[".inlineAddFields"][] = "lbma";
$tdatashop_front_seiren_brands[".inlineAddFields"][] = "lppm";
$tdatashop_front_seiren_brands[".inlineAddFields"][] = "gdb";
$tdatashop_front_seiren_brands[".inlineAddFields"][] = "type";

$tdatashop_front_seiren_brands[".editFields"] = array();
$tdatashop_front_seiren_brands[".editFields"][] = "type";

$tdatashop_front_seiren_brands[".inlineEditFields"] = array();
$tdatashop_front_seiren_brands[".inlineEditFields"][] = "brand_name";
$tdatashop_front_seiren_brands[".inlineEditFields"][] = "gold";
$tdatashop_front_seiren_brands[".inlineEditFields"][] = "silver";
$tdatashop_front_seiren_brands[".inlineEditFields"][] = "platinum";
$tdatashop_front_seiren_brands[".inlineEditFields"][] = "palladium";
$tdatashop_front_seiren_brands[".inlineEditFields"][] = "tokyo_commodity_exchange";
$tdatashop_front_seiren_brands[".inlineEditFields"][] = "lbma";
$tdatashop_front_seiren_brands[".inlineEditFields"][] = "lppm";
$tdatashop_front_seiren_brands[".inlineEditFields"][] = "gdb";
$tdatashop_front_seiren_brands[".inlineEditFields"][] = "type";

$tdatashop_front_seiren_brands[".updateSelectedFields"] = array();
$tdatashop_front_seiren_brands[".updateSelectedFields"][] = "type";


$tdatashop_front_seiren_brands[".exportFields"] = array();
$tdatashop_front_seiren_brands[".exportFields"][] = "id";
$tdatashop_front_seiren_brands[".exportFields"][] = "brand_name";
$tdatashop_front_seiren_brands[".exportFields"][] = "gold";
$tdatashop_front_seiren_brands[".exportFields"][] = "silver";
$tdatashop_front_seiren_brands[".exportFields"][] = "platinum";
$tdatashop_front_seiren_brands[".exportFields"][] = "palladium";
$tdatashop_front_seiren_brands[".exportFields"][] = "tokyo_commodity_exchange";
$tdatashop_front_seiren_brands[".exportFields"][] = "lbma";
$tdatashop_front_seiren_brands[".exportFields"][] = "lppm";
$tdatashop_front_seiren_brands[".exportFields"][] = "gdb";
$tdatashop_front_seiren_brands[".exportFields"][] = "type";

$tdatashop_front_seiren_brands[".importFields"] = array();
$tdatashop_front_seiren_brands[".importFields"][] = "id";
$tdatashop_front_seiren_brands[".importFields"][] = "brand_name";
$tdatashop_front_seiren_brands[".importFields"][] = "gold";
$tdatashop_front_seiren_brands[".importFields"][] = "silver";
$tdatashop_front_seiren_brands[".importFields"][] = "platinum";
$tdatashop_front_seiren_brands[".importFields"][] = "palladium";
$tdatashop_front_seiren_brands[".importFields"][] = "tokyo_commodity_exchange";
$tdatashop_front_seiren_brands[".importFields"][] = "lbma";
$tdatashop_front_seiren_brands[".importFields"][] = "lppm";
$tdatashop_front_seiren_brands[".importFields"][] = "gdb";
$tdatashop_front_seiren_brands[".importFields"][] = "type";

$tdatashop_front_seiren_brands[".printFields"] = array();
$tdatashop_front_seiren_brands[".printFields"][] = "type";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "shop_front_seiren_brands";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_brands","id");
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




	$tdatashop_front_seiren_brands["id"] = $fdata;
//	brand_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "brand_name";
	$fdata["GoodName"] = "brand_name";
	$fdata["ownerTable"] = "shop_front_seiren_brands";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_brands","brand_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "brand_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brand_name`";

	
	
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




	$tdatashop_front_seiren_brands["brand_name"] = $fdata;
//	gold
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "gold";
	$fdata["GoodName"] = "gold";
	$fdata["ownerTable"] = "shop_front_seiren_brands";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_brands","gold");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gold";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gold`";

	
	
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




	$tdatashop_front_seiren_brands["gold"] = $fdata;
//	silver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "silver";
	$fdata["GoodName"] = "silver";
	$fdata["ownerTable"] = "shop_front_seiren_brands";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_brands","silver");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "silver";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`silver`";

	
	
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




	$tdatashop_front_seiren_brands["silver"] = $fdata;
//	platinum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "platinum";
	$fdata["GoodName"] = "platinum";
	$fdata["ownerTable"] = "shop_front_seiren_brands";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_brands","platinum");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "platinum";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`platinum`";

	
	
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




	$tdatashop_front_seiren_brands["platinum"] = $fdata;
//	palladium
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "palladium";
	$fdata["GoodName"] = "palladium";
	$fdata["ownerTable"] = "shop_front_seiren_brands";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_brands","palladium");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "palladium";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`palladium`";

	
	
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




	$tdatashop_front_seiren_brands["palladium"] = $fdata;
//	tokyo_commodity_exchange
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tokyo_commodity_exchange";
	$fdata["GoodName"] = "tokyo_commodity_exchange";
	$fdata["ownerTable"] = "shop_front_seiren_brands";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_brands","tokyo_commodity_exchange");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tokyo_commodity_exchange";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tokyo_commodity_exchange`";

	
	
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




	$tdatashop_front_seiren_brands["tokyo_commodity_exchange"] = $fdata;
//	lbma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "lbma";
	$fdata["GoodName"] = "lbma";
	$fdata["ownerTable"] = "shop_front_seiren_brands";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_brands","lbma");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "lbma";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`lbma`";

	
	
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




	$tdatashop_front_seiren_brands["lbma"] = $fdata;
//	lppm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "lppm";
	$fdata["GoodName"] = "lppm";
	$fdata["ownerTable"] = "shop_front_seiren_brands";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_brands","lppm");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "lppm";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`lppm`";

	
	
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




	$tdatashop_front_seiren_brands["lppm"] = $fdata;
//	gdb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "gdb";
	$fdata["GoodName"] = "gdb";
	$fdata["ownerTable"] = "shop_front_seiren_brands";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_brands","gdb");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gdb";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gdb`";

	
	
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




	$tdatashop_front_seiren_brands["gdb"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "shop_front_seiren_brands";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_brands","type");
	$fdata["FieldType"] = 16;

	
	
	
			
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

		$fdata["strField"] = "type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";

	
	
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




	$tdatashop_front_seiren_brands["type"] = $fdata;


$tables_data["shop_front_seiren_brands"]=&$tdatashop_front_seiren_brands;
$field_labels["shop_front_seiren_brands"] = &$fieldLabelsshop_front_seiren_brands;
$fieldToolTips["shop_front_seiren_brands"] = &$fieldToolTipsshop_front_seiren_brands;
$placeHolders["shop_front_seiren_brands"] = &$placeHoldersshop_front_seiren_brands;
$page_titles["shop_front_seiren_brands"] = &$pageTitlesshop_front_seiren_brands;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["shop_front_seiren_brands"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["shop_front_seiren_brands"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_shop_front_seiren_brands()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`brand_name`,  	`gold`,  	`silver`,  	`platinum`,  	`palladium`,  	`tokyo_commodity_exchange`,  	`lbma`,  	`lppm`,  	`gdb`,  	`type`";
$proto0["m_strFrom"] = "FROM `shop_front_seiren_brands`";
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
	"m_strTable" => "shop_front_seiren_brands",
	"m_srcTableName" => "shop_front_seiren_brands"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "shop_front_seiren_brands";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "brand_name",
	"m_strTable" => "shop_front_seiren_brands",
	"m_srcTableName" => "shop_front_seiren_brands"
));

$proto8["m_sql"] = "`brand_name`";
$proto8["m_srcTableName"] = "shop_front_seiren_brands";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "gold",
	"m_strTable" => "shop_front_seiren_brands",
	"m_srcTableName" => "shop_front_seiren_brands"
));

$proto10["m_sql"] = "`gold`";
$proto10["m_srcTableName"] = "shop_front_seiren_brands";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "silver",
	"m_strTable" => "shop_front_seiren_brands",
	"m_srcTableName" => "shop_front_seiren_brands"
));

$proto12["m_sql"] = "`silver`";
$proto12["m_srcTableName"] = "shop_front_seiren_brands";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "platinum",
	"m_strTable" => "shop_front_seiren_brands",
	"m_srcTableName" => "shop_front_seiren_brands"
));

$proto14["m_sql"] = "`platinum`";
$proto14["m_srcTableName"] = "shop_front_seiren_brands";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "palladium",
	"m_strTable" => "shop_front_seiren_brands",
	"m_srcTableName" => "shop_front_seiren_brands"
));

$proto16["m_sql"] = "`palladium`";
$proto16["m_srcTableName"] = "shop_front_seiren_brands";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tokyo_commodity_exchange",
	"m_strTable" => "shop_front_seiren_brands",
	"m_srcTableName" => "shop_front_seiren_brands"
));

$proto18["m_sql"] = "`tokyo_commodity_exchange`";
$proto18["m_srcTableName"] = "shop_front_seiren_brands";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "lbma",
	"m_strTable" => "shop_front_seiren_brands",
	"m_srcTableName" => "shop_front_seiren_brands"
));

$proto20["m_sql"] = "`lbma`";
$proto20["m_srcTableName"] = "shop_front_seiren_brands";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "lppm",
	"m_strTable" => "shop_front_seiren_brands",
	"m_srcTableName" => "shop_front_seiren_brands"
));

$proto22["m_sql"] = "`lppm`";
$proto22["m_srcTableName"] = "shop_front_seiren_brands";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "gdb",
	"m_strTable" => "shop_front_seiren_brands",
	"m_srcTableName" => "shop_front_seiren_brands"
));

$proto24["m_sql"] = "`gdb`";
$proto24["m_srcTableName"] = "shop_front_seiren_brands";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "shop_front_seiren_brands",
	"m_srcTableName" => "shop_front_seiren_brands"
));

$proto26["m_sql"] = "`type`";
$proto26["m_srcTableName"] = "shop_front_seiren_brands";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "shop_front_seiren_brands";
$proto29["m_srcTableName"] = "shop_front_seiren_brands";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "brand_name";
$proto29["m_columns"][] = "gold";
$proto29["m_columns"][] = "silver";
$proto29["m_columns"][] = "platinum";
$proto29["m_columns"][] = "palladium";
$proto29["m_columns"][] = "tokyo_commodity_exchange";
$proto29["m_columns"][] = "lbma";
$proto29["m_columns"][] = "lppm";
$proto29["m_columns"][] = "gdb";
$proto29["m_columns"][] = "type";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "`shop_front_seiren_brands`";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "shop_front_seiren_brands";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="shop_front_seiren_brands";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_shop_front_seiren_brands = createSqlQuery_shop_front_seiren_brands();


	
		;

											

$tdatashop_front_seiren_brands[".sqlquery"] = $queryData_shop_front_seiren_brands;

$tableEvents["shop_front_seiren_brands"] = new eventsBase;
$tdatashop_front_seiren_brands[".hasEvents"] = false;

?>