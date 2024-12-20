<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_inventory_item = array();
	$tdataEoc_inventory_item[".truncateText"] = true;
	$tdataEoc_inventory_item[".NumberOfChars"] = 80;
	$tdataEoc_inventory_item[".ShortName"] = "Eoc_inventory_item";
	$tdataEoc_inventory_item[".OwnerID"] = "";
	$tdataEoc_inventory_item[".OriginalTable"] = "Eoc_inventory_item";

//	field labels
$fieldLabelsEoc_inventory_item = array();
$fieldToolTipsEoc_inventory_item = array();
$pageTitlesEoc_inventory_item = array();
$placeHoldersEoc_inventory_item = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_inventory_item["Japanese"] = array();
	$fieldToolTipsEoc_inventory_item["Japanese"] = array();
	$placeHoldersEoc_inventory_item["Japanese"] = array();
	$pageTitlesEoc_inventory_item["Japanese"] = array();
	$fieldLabelsEoc_inventory_item["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_inventory_item["Japanese"]["id"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["id"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsEoc_inventory_item["Japanese"]["product_id"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["product_id"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["Eoc_inventory_id"] = "Eoc Inventory Id";
	$fieldToolTipsEoc_inventory_item["Japanese"]["Eoc_inventory_id"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["Eoc_inventory_id"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsEoc_inventory_item["Japanese"]["created_at"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["created_at"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_inventory_item["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["purchase_category"] = "買取種別";
	$fieldToolTipsEoc_inventory_item["Japanese"]["purchase_category"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["purchase_category"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["mst_business_partner_id"] = "販売先";
	$fieldToolTipsEoc_inventory_item["Japanese"]["mst_business_partner_id"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["mst_business_partner_id"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["status"] = "商品状態";
	$fieldToolTipsEoc_inventory_item["Japanese"]["status"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["status"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsEoc_inventory_item["Japanese"]["category_id"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["category_id"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsEoc_inventory_item["Japanese"]["sub_category_id1"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["price"] = "買取額";
	$fieldToolTipsEoc_inventory_item["Japanese"]["price"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["price"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipsEoc_inventory_item["Japanese"]["sales_price"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["sales_price"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["title"] = "タイトル";
	$fieldToolTipsEoc_inventory_item["Japanese"]["title"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["title"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipsEoc_inventory_item["Japanese"]["satei_hi"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["satei_hi"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["DT_UP_DATE"] = "成約日";
	$fieldToolTipsEoc_inventory_item["Japanese"]["DT_UP_DATE"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["DT_UP_DATE"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["Destination_selling"] = "売り先";
	$fieldToolTipsEoc_inventory_item["Japanese"]["Destination_selling"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["Destination_selling"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["nyuukin_price"] = "入金額";
	$fieldToolTipsEoc_inventory_item["Japanese"]["nyuukin_price"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["nyuukin_price"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["kanryou_henbi"] = "完了変更日";
	$fieldToolTipsEoc_inventory_item["Japanese"]["kanryou_henbi"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["kanryou_henbi"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["description"] = "メモ";
	$fieldToolTipsEoc_inventory_item["Japanese"]["description"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["description"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["comment"] = "コメント";
	$fieldToolTipsEoc_inventory_item["Japanese"]["comment"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["comment"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["date"] = "日付";
	$fieldToolTipsEoc_inventory_item["Japanese"]["date"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["date"] = "";
	$fieldLabelsEoc_inventory_item["Japanese"]["price_without_tax"] = "買取額抜";
	$fieldToolTipsEoc_inventory_item["Japanese"]["price_without_tax"] = "";
	$placeHoldersEoc_inventory_item["Japanese"]["price_without_tax"] = "";
	if (count($fieldToolTipsEoc_inventory_item["Japanese"]))
		$tdataEoc_inventory_item[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_inventory_item[""] = array();
	$fieldToolTipsEoc_inventory_item[""] = array();
	$placeHoldersEoc_inventory_item[""] = array();
	$pageTitlesEoc_inventory_item[""] = array();
	$fieldLabelsEoc_inventory_item[""]["id"] = "Id";
	$fieldToolTipsEoc_inventory_item[""]["id"] = "";
	$placeHoldersEoc_inventory_item[""]["id"] = "";
	$fieldLabelsEoc_inventory_item[""]["product_id"] = "Product Id";
	$fieldToolTipsEoc_inventory_item[""]["product_id"] = "";
	$placeHoldersEoc_inventory_item[""]["product_id"] = "";
	$fieldLabelsEoc_inventory_item[""]["Eoc_inventory_id"] = "Eoc Inventory Id";
	$fieldToolTipsEoc_inventory_item[""]["Eoc_inventory_id"] = "";
	$placeHoldersEoc_inventory_item[""]["Eoc_inventory_id"] = "";
	$fieldLabelsEoc_inventory_item[""]["created_at"] = "Created At";
	$fieldToolTipsEoc_inventory_item[""]["created_at"] = "";
	$placeHoldersEoc_inventory_item[""]["created_at"] = "";
	$fieldLabelsEoc_inventory_item[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_inventory_item[""]["updated_at"] = "";
	$placeHoldersEoc_inventory_item[""]["updated_at"] = "";
	$fieldLabelsEoc_inventory_item[""]["purchase_category"] = "Purchase Category";
	$fieldToolTipsEoc_inventory_item[""]["purchase_category"] = "";
	$placeHoldersEoc_inventory_item[""]["purchase_category"] = "";
	$fieldLabelsEoc_inventory_item[""]["mst_business_partner_id"] = "Mst Business Partner Id";
	$fieldToolTipsEoc_inventory_item[""]["mst_business_partner_id"] = "";
	$placeHoldersEoc_inventory_item[""]["mst_business_partner_id"] = "";
	$fieldLabelsEoc_inventory_item[""]["status"] = "Status";
	$fieldToolTipsEoc_inventory_item[""]["status"] = "";
	$placeHoldersEoc_inventory_item[""]["status"] = "";
	$fieldLabelsEoc_inventory_item[""]["category_id"] = "Category Id";
	$fieldToolTipsEoc_inventory_item[""]["category_id"] = "";
	$placeHoldersEoc_inventory_item[""]["category_id"] = "";
	$fieldLabelsEoc_inventory_item[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsEoc_inventory_item[""]["sub_category_id1"] = "";
	$placeHoldersEoc_inventory_item[""]["sub_category_id1"] = "";
	$fieldLabelsEoc_inventory_item[""]["price"] = "Price";
	$fieldToolTipsEoc_inventory_item[""]["price"] = "";
	$placeHoldersEoc_inventory_item[""]["price"] = "";
	$fieldLabelsEoc_inventory_item[""]["sales_price"] = "Sales Price";
	$fieldToolTipsEoc_inventory_item[""]["sales_price"] = "";
	$placeHoldersEoc_inventory_item[""]["sales_price"] = "";
	$fieldLabelsEoc_inventory_item[""]["title"] = "Title";
	$fieldToolTipsEoc_inventory_item[""]["title"] = "";
	$placeHoldersEoc_inventory_item[""]["title"] = "";
	$fieldLabelsEoc_inventory_item[""]["satei_hi"] = "Satei Hi";
	$fieldToolTipsEoc_inventory_item[""]["satei_hi"] = "";
	$placeHoldersEoc_inventory_item[""]["satei_hi"] = "";
	$fieldLabelsEoc_inventory_item[""]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipsEoc_inventory_item[""]["DT_UP_DATE"] = "";
	$placeHoldersEoc_inventory_item[""]["DT_UP_DATE"] = "";
	$fieldLabelsEoc_inventory_item[""]["Destination_selling"] = "Destination Selling";
	$fieldToolTipsEoc_inventory_item[""]["Destination_selling"] = "";
	$placeHoldersEoc_inventory_item[""]["Destination_selling"] = "";
	$fieldLabelsEoc_inventory_item[""]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipsEoc_inventory_item[""]["nyuukin_price"] = "";
	$placeHoldersEoc_inventory_item[""]["nyuukin_price"] = "";
	$fieldLabelsEoc_inventory_item[""]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipsEoc_inventory_item[""]["kanryou_henbi"] = "";
	$placeHoldersEoc_inventory_item[""]["kanryou_henbi"] = "";
	$fieldLabelsEoc_inventory_item[""]["description"] = "Description";
	$fieldToolTipsEoc_inventory_item[""]["description"] = "";
	$placeHoldersEoc_inventory_item[""]["description"] = "";
	$fieldLabelsEoc_inventory_item[""]["comment"] = "Comment";
	$fieldToolTipsEoc_inventory_item[""]["comment"] = "";
	$placeHoldersEoc_inventory_item[""]["comment"] = "";
	$fieldLabelsEoc_inventory_item[""]["date"] = "Date";
	$fieldToolTipsEoc_inventory_item[""]["date"] = "";
	$placeHoldersEoc_inventory_item[""]["date"] = "";
	$fieldLabelsEoc_inventory_item[""]["price_without_tax"] = "Price Without Tax";
	$fieldToolTipsEoc_inventory_item[""]["price_without_tax"] = "";
	$placeHoldersEoc_inventory_item[""]["price_without_tax"] = "";
	if (count($fieldToolTipsEoc_inventory_item[""]))
		$tdataEoc_inventory_item[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_inventory_item["English"] = array();
	$fieldToolTipsEoc_inventory_item["English"] = array();
	$placeHoldersEoc_inventory_item["English"] = array();
	$pageTitlesEoc_inventory_item["English"] = array();
	$fieldLabelsEoc_inventory_item["English"]["id"] = "Id";
	$fieldToolTipsEoc_inventory_item["English"]["id"] = "";
	$placeHoldersEoc_inventory_item["English"]["id"] = "";
	$fieldLabelsEoc_inventory_item["English"]["product_id"] = "Product Id";
	$fieldToolTipsEoc_inventory_item["English"]["product_id"] = "";
	$placeHoldersEoc_inventory_item["English"]["product_id"] = "";
	$fieldLabelsEoc_inventory_item["English"]["Eoc_inventory_id"] = "Eoc Inventory Id";
	$fieldToolTipsEoc_inventory_item["English"]["Eoc_inventory_id"] = "";
	$placeHoldersEoc_inventory_item["English"]["Eoc_inventory_id"] = "";
	$fieldLabelsEoc_inventory_item["English"]["created_at"] = "Created At";
	$fieldToolTipsEoc_inventory_item["English"]["created_at"] = "";
	$placeHoldersEoc_inventory_item["English"]["created_at"] = "";
	$fieldLabelsEoc_inventory_item["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_inventory_item["English"]["updated_at"] = "";
	$placeHoldersEoc_inventory_item["English"]["updated_at"] = "";
	$fieldLabelsEoc_inventory_item["English"]["purchase_category"] = "Purchase Category";
	$fieldToolTipsEoc_inventory_item["English"]["purchase_category"] = "";
	$placeHoldersEoc_inventory_item["English"]["purchase_category"] = "";
	$fieldLabelsEoc_inventory_item["English"]["mst_business_partner_id"] = "Mst Business Partner Id";
	$fieldToolTipsEoc_inventory_item["English"]["mst_business_partner_id"] = "";
	$placeHoldersEoc_inventory_item["English"]["mst_business_partner_id"] = "";
	$fieldLabelsEoc_inventory_item["English"]["status"] = "Status";
	$fieldToolTipsEoc_inventory_item["English"]["status"] = "";
	$placeHoldersEoc_inventory_item["English"]["status"] = "";
	$fieldLabelsEoc_inventory_item["English"]["category_id"] = "Category Id";
	$fieldToolTipsEoc_inventory_item["English"]["category_id"] = "";
	$placeHoldersEoc_inventory_item["English"]["category_id"] = "";
	$fieldLabelsEoc_inventory_item["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsEoc_inventory_item["English"]["sub_category_id1"] = "";
	$placeHoldersEoc_inventory_item["English"]["sub_category_id1"] = "";
	$fieldLabelsEoc_inventory_item["English"]["price"] = "Price";
	$fieldToolTipsEoc_inventory_item["English"]["price"] = "";
	$placeHoldersEoc_inventory_item["English"]["price"] = "";
	$fieldLabelsEoc_inventory_item["English"]["sales_price"] = "Sales Price";
	$fieldToolTipsEoc_inventory_item["English"]["sales_price"] = "";
	$placeHoldersEoc_inventory_item["English"]["sales_price"] = "";
	$fieldLabelsEoc_inventory_item["English"]["title"] = "Title";
	$fieldToolTipsEoc_inventory_item["English"]["title"] = "";
	$placeHoldersEoc_inventory_item["English"]["title"] = "";
	$fieldLabelsEoc_inventory_item["English"]["satei_hi"] = "Satei Hi";
	$fieldToolTipsEoc_inventory_item["English"]["satei_hi"] = "";
	$placeHoldersEoc_inventory_item["English"]["satei_hi"] = "";
	$fieldLabelsEoc_inventory_item["English"]["DT_UP_DATE"] = "DT UP DATE";
	$fieldToolTipsEoc_inventory_item["English"]["DT_UP_DATE"] = "";
	$placeHoldersEoc_inventory_item["English"]["DT_UP_DATE"] = "";
	$fieldLabelsEoc_inventory_item["English"]["Destination_selling"] = "Destination Selling";
	$fieldToolTipsEoc_inventory_item["English"]["Destination_selling"] = "";
	$placeHoldersEoc_inventory_item["English"]["Destination_selling"] = "";
	$fieldLabelsEoc_inventory_item["English"]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipsEoc_inventory_item["English"]["nyuukin_price"] = "";
	$placeHoldersEoc_inventory_item["English"]["nyuukin_price"] = "";
	$fieldLabelsEoc_inventory_item["English"]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipsEoc_inventory_item["English"]["kanryou_henbi"] = "";
	$placeHoldersEoc_inventory_item["English"]["kanryou_henbi"] = "";
	$fieldLabelsEoc_inventory_item["English"]["description"] = "Description";
	$fieldToolTipsEoc_inventory_item["English"]["description"] = "";
	$placeHoldersEoc_inventory_item["English"]["description"] = "";
	$fieldLabelsEoc_inventory_item["English"]["comment"] = "Comment";
	$fieldToolTipsEoc_inventory_item["English"]["comment"] = "";
	$placeHoldersEoc_inventory_item["English"]["comment"] = "";
	$fieldLabelsEoc_inventory_item["English"]["date"] = "Date";
	$fieldToolTipsEoc_inventory_item["English"]["date"] = "";
	$placeHoldersEoc_inventory_item["English"]["date"] = "";
	$fieldLabelsEoc_inventory_item["English"]["price_without_tax"] = "Price Without Tax";
	$fieldToolTipsEoc_inventory_item["English"]["price_without_tax"] = "";
	$placeHoldersEoc_inventory_item["English"]["price_without_tax"] = "";
	if (count($fieldToolTipsEoc_inventory_item["English"]))
		$tdataEoc_inventory_item[".isUseToolTips"] = true;
}


	$tdataEoc_inventory_item[".NCSearch"] = true;



$tdataEoc_inventory_item[".shortTableName"] = "Eoc_inventory_item";
$tdataEoc_inventory_item[".nSecOptions"] = 0;
$tdataEoc_inventory_item[".recsPerRowPrint"] = 1;
$tdataEoc_inventory_item[".mainTableOwnerID"] = "";
$tdataEoc_inventory_item[".moveNext"] = 1;
$tdataEoc_inventory_item[".entityType"] = 0;

$tdataEoc_inventory_item[".strOriginalTableName"] = "Eoc_inventory_item";

	



$tdataEoc_inventory_item[".showAddInPopup"] = false;

$tdataEoc_inventory_item[".showEditInPopup"] = false;

$tdataEoc_inventory_item[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_inventory_item[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_inventory_item[".fieldsForRegister"] = array();

$tdataEoc_inventory_item[".listAjax"] = false;

	$tdataEoc_inventory_item[".audit"] = false;

	$tdataEoc_inventory_item[".locking"] = false;



$tdataEoc_inventory_item[".list"] = true;



$tdataEoc_inventory_item[".reorderRecordsByHeader"] = true;





$tdataEoc_inventory_item[".exportTo"] = true;



$tdataEoc_inventory_item[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_inventory_item[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_inventory_item[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_inventory_item[".searchSaving"] = false;
//

$tdataEoc_inventory_item[".showSearchPanel"] = true;
		$tdataEoc_inventory_item[".flexibleSearch"] = true;

$tdataEoc_inventory_item[".isUseAjaxSuggest"] = true;

$tdataEoc_inventory_item[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdataEoc_inventory_item[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_inventory_item[".buttonsAdded"] = false;

$tdataEoc_inventory_item[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_inventory_item[".isUseTimeForSearch"] = false;



$tdataEoc_inventory_item[".badgeColor"] = "daa520";


$tdataEoc_inventory_item[".allSearchFields"] = array();
$tdataEoc_inventory_item[".filterFields"] = array();
$tdataEoc_inventory_item[".requiredSearchFields"] = array();

$tdataEoc_inventory_item[".allSearchFields"][] = "id";
	$tdataEoc_inventory_item[".allSearchFields"][] = "date";
	$tdataEoc_inventory_item[".allSearchFields"][] = "Eoc_inventory_id";
	$tdataEoc_inventory_item[".allSearchFields"][] = "product_id";
	$tdataEoc_inventory_item[".allSearchFields"][] = "purchase_category";
	$tdataEoc_inventory_item[".allSearchFields"][] = "mst_business_partner_id";
	$tdataEoc_inventory_item[".allSearchFields"][] = "Destination_selling";
	$tdataEoc_inventory_item[".allSearchFields"][] = "status";
	$tdataEoc_inventory_item[".allSearchFields"][] = "category_id";
	$tdataEoc_inventory_item[".allSearchFields"][] = "sub_category_id1";
	$tdataEoc_inventory_item[".allSearchFields"][] = "price_without_tax";
	$tdataEoc_inventory_item[".allSearchFields"][] = "price";
	$tdataEoc_inventory_item[".allSearchFields"][] = "sales_price";
	$tdataEoc_inventory_item[".allSearchFields"][] = "nyuukin_price";
	$tdataEoc_inventory_item[".allSearchFields"][] = "satei_hi";
	$tdataEoc_inventory_item[".allSearchFields"][] = "DT_UP_DATE";
	$tdataEoc_inventory_item[".allSearchFields"][] = "kanryou_henbi";
	$tdataEoc_inventory_item[".allSearchFields"][] = "title";
	$tdataEoc_inventory_item[".allSearchFields"][] = "description";
	$tdataEoc_inventory_item[".allSearchFields"][] = "comment";
	$tdataEoc_inventory_item[".allSearchFields"][] = "created_at";
	$tdataEoc_inventory_item[".allSearchFields"][] = "updated_at";
	

$tdataEoc_inventory_item[".googleLikeFields"] = array();
$tdataEoc_inventory_item[".googleLikeFields"][] = "id";
$tdataEoc_inventory_item[".googleLikeFields"][] = "product_id";
$tdataEoc_inventory_item[".googleLikeFields"][] = "Eoc_inventory_id";
$tdataEoc_inventory_item[".googleLikeFields"][] = "created_at";
$tdataEoc_inventory_item[".googleLikeFields"][] = "updated_at";
$tdataEoc_inventory_item[".googleLikeFields"][] = "purchase_category";
$tdataEoc_inventory_item[".googleLikeFields"][] = "mst_business_partner_id";
$tdataEoc_inventory_item[".googleLikeFields"][] = "status";
$tdataEoc_inventory_item[".googleLikeFields"][] = "category_id";
$tdataEoc_inventory_item[".googleLikeFields"][] = "sub_category_id1";
$tdataEoc_inventory_item[".googleLikeFields"][] = "price";
$tdataEoc_inventory_item[".googleLikeFields"][] = "price_without_tax";
$tdataEoc_inventory_item[".googleLikeFields"][] = "sales_price";
$tdataEoc_inventory_item[".googleLikeFields"][] = "title";
$tdataEoc_inventory_item[".googleLikeFields"][] = "satei_hi";
$tdataEoc_inventory_item[".googleLikeFields"][] = "DT_UP_DATE";
$tdataEoc_inventory_item[".googleLikeFields"][] = "Destination_selling";
$tdataEoc_inventory_item[".googleLikeFields"][] = "nyuukin_price";
$tdataEoc_inventory_item[".googleLikeFields"][] = "kanryou_henbi";
$tdataEoc_inventory_item[".googleLikeFields"][] = "description";
$tdataEoc_inventory_item[".googleLikeFields"][] = "comment";
$tdataEoc_inventory_item[".googleLikeFields"][] = "date";


$tdataEoc_inventory_item[".advSearchFields"] = array();
$tdataEoc_inventory_item[".advSearchFields"][] = "id";
$tdataEoc_inventory_item[".advSearchFields"][] = "date";
$tdataEoc_inventory_item[".advSearchFields"][] = "Eoc_inventory_id";
$tdataEoc_inventory_item[".advSearchFields"][] = "product_id";
$tdataEoc_inventory_item[".advSearchFields"][] = "purchase_category";
$tdataEoc_inventory_item[".advSearchFields"][] = "mst_business_partner_id";
$tdataEoc_inventory_item[".advSearchFields"][] = "Destination_selling";
$tdataEoc_inventory_item[".advSearchFields"][] = "status";
$tdataEoc_inventory_item[".advSearchFields"][] = "category_id";
$tdataEoc_inventory_item[".advSearchFields"][] = "sub_category_id1";
$tdataEoc_inventory_item[".advSearchFields"][] = "price_without_tax";
$tdataEoc_inventory_item[".advSearchFields"][] = "price";
$tdataEoc_inventory_item[".advSearchFields"][] = "sales_price";
$tdataEoc_inventory_item[".advSearchFields"][] = "nyuukin_price";
$tdataEoc_inventory_item[".advSearchFields"][] = "satei_hi";
$tdataEoc_inventory_item[".advSearchFields"][] = "DT_UP_DATE";
$tdataEoc_inventory_item[".advSearchFields"][] = "kanryou_henbi";
$tdataEoc_inventory_item[".advSearchFields"][] = "title";
$tdataEoc_inventory_item[".advSearchFields"][] = "description";
$tdataEoc_inventory_item[".advSearchFields"][] = "comment";
$tdataEoc_inventory_item[".advSearchFields"][] = "created_at";
$tdataEoc_inventory_item[".advSearchFields"][] = "updated_at";

$tdataEoc_inventory_item[".tableType"] = "list";

$tdataEoc_inventory_item[".printerPageOrientation"] = 0;
$tdataEoc_inventory_item[".nPrinterPageScale"] = 100;

$tdataEoc_inventory_item[".nPrinterSplitRecords"] = 40;

$tdataEoc_inventory_item[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_inventory_item[".geocodingEnabled"] = false;





$tdataEoc_inventory_item[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_inventory_item[".pageSize"] = 20;

$tdataEoc_inventory_item[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Eoc_inventory`.`date` DESC, `Eoc_inventory_item`.`product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_inventory_item[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_inventory_item[".orderindexes"] = array();
$tdataEoc_inventory_item[".orderindexes"][] = array(22, (0 ? "ASC" : "DESC"), "`Eoc_inventory`.`date`");
$tdataEoc_inventory_item[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`Eoc_inventory_item`.`product_id`");

$tdataEoc_inventory_item[".sqlHead"] = "SELECT `Eoc_inventory_item`.`id`,  `Eoc_inventory_item`.`product_id`,  `Eoc_inventory_item`.`Eoc_inventory_id`,  `Eoc_inventory_item`.`created_at`,  `Eoc_inventory_item`.`updated_at`,  `purchase_category_report`.`purchase_category`,  `sales_report`.`mst_business_partner_id`,  `shouhin`.`status`,  `shouhin`.`category_id`,  `shouhin`.`sub_category_id1`,  `shouhin`.`price`,  \"\" AS `price_without_tax`,  `shouhin`.`sales_price`,  `shouhin`.`title`,  `shouhin`.`satei_hi`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`Destination_selling`,  `shouhin`.`nyuukin_price`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`description`,  `shouhin`.`comment`,  `Eoc_inventory`.`date`";
$tdataEoc_inventory_item[".sqlFrom"] = "FROM `Eoc_inventory_item`  LEFT OUTER JOIN `shouhin` ON `Eoc_inventory_item`.`product_id` = `shouhin`.`product_id`  LEFT OUTER JOIN `sales_report` ON `Eoc_inventory_item`.`product_id` = `sales_report`.`product_id`  LEFT OUTER JOIN `purchase_category_report` ON `Eoc_inventory_item`.`product_id` = `purchase_category_report`.`product_id`  LEFT OUTER JOIN `Eoc_inventory` ON `Eoc_inventory_item`.`Eoc_inventory_id` = `Eoc_inventory`.`id`";
$tdataEoc_inventory_item[".sqlWhereExpr"] = "(`Eoc_inventory`.`date` >= DATE_FORMAT(`shouhin`.`DT_UP_DATE`,'%Y%m%d'))  	AND 	  	(  		`Eoc_inventory`.`date` < DATE_FORMAT(`shouhin`.`kanryou_henbi`,'%Y%m%d')  		OR  		`shouhin`.`kanryou_henbi` IS NULL  		OR  		`shouhin`.`kanryou_henbi` = '0000-00-00 00:00:00'  	)";
$tdataEoc_inventory_item[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_inventory_item[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_inventory_item[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_inventory_item[".highlightSearchResults"] = true;

$tableKeysEoc_inventory_item = array();
$tableKeysEoc_inventory_item[] = "id";
$tdataEoc_inventory_item[".Keys"] = $tableKeysEoc_inventory_item;

$tdataEoc_inventory_item[".listFields"] = array();
$tdataEoc_inventory_item[".listFields"][] = "id";
$tdataEoc_inventory_item[".listFields"][] = "date";
$tdataEoc_inventory_item[".listFields"][] = "Eoc_inventory_id";
$tdataEoc_inventory_item[".listFields"][] = "product_id";
$tdataEoc_inventory_item[".listFields"][] = "purchase_category";
$tdataEoc_inventory_item[".listFields"][] = "mst_business_partner_id";
$tdataEoc_inventory_item[".listFields"][] = "Destination_selling";
$tdataEoc_inventory_item[".listFields"][] = "status";
$tdataEoc_inventory_item[".listFields"][] = "category_id";
$tdataEoc_inventory_item[".listFields"][] = "sub_category_id1";
$tdataEoc_inventory_item[".listFields"][] = "price_without_tax";
$tdataEoc_inventory_item[".listFields"][] = "price";
$tdataEoc_inventory_item[".listFields"][] = "sales_price";
$tdataEoc_inventory_item[".listFields"][] = "nyuukin_price";
$tdataEoc_inventory_item[".listFields"][] = "satei_hi";
$tdataEoc_inventory_item[".listFields"][] = "DT_UP_DATE";
$tdataEoc_inventory_item[".listFields"][] = "kanryou_henbi";
$tdataEoc_inventory_item[".listFields"][] = "title";
$tdataEoc_inventory_item[".listFields"][] = "description";
$tdataEoc_inventory_item[".listFields"][] = "comment";
$tdataEoc_inventory_item[".listFields"][] = "created_at";
$tdataEoc_inventory_item[".listFields"][] = "updated_at";

$tdataEoc_inventory_item[".hideMobileList"] = array();


$tdataEoc_inventory_item[".viewFields"] = array();

$tdataEoc_inventory_item[".addFields"] = array();

$tdataEoc_inventory_item[".masterListFields"] = array();
$tdataEoc_inventory_item[".masterListFields"][] = "id";
$tdataEoc_inventory_item[".masterListFields"][] = "date";
$tdataEoc_inventory_item[".masterListFields"][] = "Eoc_inventory_id";
$tdataEoc_inventory_item[".masterListFields"][] = "product_id";
$tdataEoc_inventory_item[".masterListFields"][] = "purchase_category";
$tdataEoc_inventory_item[".masterListFields"][] = "mst_business_partner_id";
$tdataEoc_inventory_item[".masterListFields"][] = "Destination_selling";
$tdataEoc_inventory_item[".masterListFields"][] = "status";
$tdataEoc_inventory_item[".masterListFields"][] = "category_id";
$tdataEoc_inventory_item[".masterListFields"][] = "sub_category_id1";
$tdataEoc_inventory_item[".masterListFields"][] = "price_without_tax";
$tdataEoc_inventory_item[".masterListFields"][] = "price";
$tdataEoc_inventory_item[".masterListFields"][] = "sales_price";
$tdataEoc_inventory_item[".masterListFields"][] = "nyuukin_price";
$tdataEoc_inventory_item[".masterListFields"][] = "satei_hi";
$tdataEoc_inventory_item[".masterListFields"][] = "DT_UP_DATE";
$tdataEoc_inventory_item[".masterListFields"][] = "kanryou_henbi";
$tdataEoc_inventory_item[".masterListFields"][] = "title";
$tdataEoc_inventory_item[".masterListFields"][] = "description";
$tdataEoc_inventory_item[".masterListFields"][] = "comment";
$tdataEoc_inventory_item[".masterListFields"][] = "created_at";
$tdataEoc_inventory_item[".masterListFields"][] = "updated_at";

$tdataEoc_inventory_item[".inlineAddFields"] = array();

$tdataEoc_inventory_item[".editFields"] = array();

$tdataEoc_inventory_item[".inlineEditFields"] = array();

$tdataEoc_inventory_item[".updateSelectedFields"] = array();


$tdataEoc_inventory_item[".exportFields"] = array();
$tdataEoc_inventory_item[".exportFields"][] = "id";
$tdataEoc_inventory_item[".exportFields"][] = "date";
$tdataEoc_inventory_item[".exportFields"][] = "Eoc_inventory_id";
$tdataEoc_inventory_item[".exportFields"][] = "product_id";
$tdataEoc_inventory_item[".exportFields"][] = "purchase_category";
$tdataEoc_inventory_item[".exportFields"][] = "mst_business_partner_id";
$tdataEoc_inventory_item[".exportFields"][] = "Destination_selling";
$tdataEoc_inventory_item[".exportFields"][] = "status";
$tdataEoc_inventory_item[".exportFields"][] = "category_id";
$tdataEoc_inventory_item[".exportFields"][] = "sub_category_id1";
$tdataEoc_inventory_item[".exportFields"][] = "price_without_tax";
$tdataEoc_inventory_item[".exportFields"][] = "price";
$tdataEoc_inventory_item[".exportFields"][] = "sales_price";
$tdataEoc_inventory_item[".exportFields"][] = "nyuukin_price";
$tdataEoc_inventory_item[".exportFields"][] = "satei_hi";
$tdataEoc_inventory_item[".exportFields"][] = "DT_UP_DATE";
$tdataEoc_inventory_item[".exportFields"][] = "kanryou_henbi";
$tdataEoc_inventory_item[".exportFields"][] = "title";
$tdataEoc_inventory_item[".exportFields"][] = "description";
$tdataEoc_inventory_item[".exportFields"][] = "comment";
$tdataEoc_inventory_item[".exportFields"][] = "created_at";
$tdataEoc_inventory_item[".exportFields"][] = "updated_at";

$tdataEoc_inventory_item[".importFields"] = array();

$tdataEoc_inventory_item[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_inventory_item";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_inventory_item`.`id`";

	
	
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




	$tdataEoc_inventory_item["id"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "Eoc_inventory_item";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_inventory_item`.`product_id`";

	
	
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




	$tdataEoc_inventory_item["product_id"] = $fdata;
//	Eoc_inventory_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Eoc_inventory_id";
	$fdata["GoodName"] = "Eoc_inventory_id";
	$fdata["ownerTable"] = "Eoc_inventory_item";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","Eoc_inventory_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_inventory_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_inventory_item`.`Eoc_inventory_id`";

	
	
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




	$tdataEoc_inventory_item["Eoc_inventory_id"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "Eoc_inventory_item";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_inventory_item`.`created_at`";

	
	
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




	$tdataEoc_inventory_item["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_inventory_item";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_inventory_item`.`updated_at`";

	
	
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




	$tdataEoc_inventory_item["updated_at"] = $fdata;
//	purchase_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "purchase_category";
	$fdata["GoodName"] = "purchase_category";
	$fdata["ownerTable"] = "purchase_category_report";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","purchase_category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "purchase_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`purchase_category_report`.`purchase_category`";

	
	
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




	$tdataEoc_inventory_item["purchase_category"] = $fdata;
//	mst_business_partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "mst_business_partner_id";
	$fdata["GoodName"] = "mst_business_partner_id";
	$fdata["ownerTable"] = "sales_report";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","mst_business_partner_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mst_business_partner_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sales_report`.`mst_business_partner_id`";

	
	
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
	$edata["LookupTable"] = "mst_business_partner";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
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




	$tdataEoc_inventory_item["mst_business_partner_id"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`status`";

	
	
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




	$tdataEoc_inventory_item["status"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`category_id`";

	
	
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




	$tdataEoc_inventory_item["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_category_id1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`sub_category_id1`";

	
	
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




	$tdataEoc_inventory_item["sub_category_id1"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`price`";

	
	
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




	$tdataEoc_inventory_item["price"] = $fdata;
//	price_without_tax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "price_without_tax";
	$fdata["GoodName"] = "price_without_tax";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","price_without_tax");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_without_tax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"\"";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_inventory_item["price_without_tax"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","sales_price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`sales_price`";

	
	
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




	$tdataEoc_inventory_item["sales_price"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`title`";

	
	
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




	$tdataEoc_inventory_item["title"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","satei_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdataEoc_inventory_item["satei_hi"] = $fdata;
//	DT_UP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "DT_UP_DATE";
	$fdata["GoodName"] = "DT_UP_DATE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","DT_UP_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdataEoc_inventory_item["DT_UP_DATE"] = $fdata;
//	Destination_selling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Destination_selling";
	$fdata["GoodName"] = "Destination_selling";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","Destination_selling");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Destination_selling";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Destination_selling`";

	
	
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
	$edata["LookupTable"] = "mst_Destination_selling";
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




	$tdataEoc_inventory_item["Destination_selling"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","nyuukin_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`nyuukin_price`";

	
	
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




	$tdataEoc_inventory_item["nyuukin_price"] = $fdata;
//	kanryou_henbi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "kanryou_henbi";
	$fdata["GoodName"] = "kanryou_henbi";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","kanryou_henbi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kanryou_henbi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`kanryou_henbi`";

	
	
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




	$tdataEoc_inventory_item["kanryou_henbi"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","description");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`description`";

	
	
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




	$tdataEoc_inventory_item["description"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","comment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`comment`";

	
	
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




	$tdataEoc_inventory_item["comment"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "Eoc_inventory";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory_item","date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_inventory`.`date`";

	
	
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




	$tdataEoc_inventory_item["date"] = $fdata;


$tables_data["Eoc_inventory_item"]=&$tdataEoc_inventory_item;
$field_labels["Eoc_inventory_item"] = &$fieldLabelsEoc_inventory_item;
$fieldToolTips["Eoc_inventory_item"] = &$fieldToolTipsEoc_inventory_item;
$placeHolders["Eoc_inventory_item"] = &$placeHoldersEoc_inventory_item;
$page_titles["Eoc_inventory_item"] = &$pageTitlesEoc_inventory_item;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_inventory_item"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_inventory_item"] = array();


	
				$strOriginalDetailsTable="Eoc_inventory";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_inventory";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_inventory";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Eoc_inventory_item"][0] = $masterParams;
				$masterTablesData["Eoc_inventory_item"][0]["masterKeys"] = array();
	$masterTablesData["Eoc_inventory_item"][0]["masterKeys"][]="id";
				$masterTablesData["Eoc_inventory_item"][0]["detailKeys"] = array();
	$masterTablesData["Eoc_inventory_item"][0]["detailKeys"][]="Eoc_inventory_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_inventory_item()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Eoc_inventory_item`.`id`,  `Eoc_inventory_item`.`product_id`,  `Eoc_inventory_item`.`Eoc_inventory_id`,  `Eoc_inventory_item`.`created_at`,  `Eoc_inventory_item`.`updated_at`,  `purchase_category_report`.`purchase_category`,  `sales_report`.`mst_business_partner_id`,  `shouhin`.`status`,  `shouhin`.`category_id`,  `shouhin`.`sub_category_id1`,  `shouhin`.`price`,  \"\" AS `price_without_tax`,  `shouhin`.`sales_price`,  `shouhin`.`title`,  `shouhin`.`satei_hi`,  `shouhin`.`DT_UP_DATE`,  `shouhin`.`Destination_selling`,  `shouhin`.`nyuukin_price`,  `shouhin`.`kanryou_henbi`,  `shouhin`.`description`,  `shouhin`.`comment`,  `Eoc_inventory`.`date`";
$proto0["m_strFrom"] = "FROM `Eoc_inventory_item`  LEFT OUTER JOIN `shouhin` ON `Eoc_inventory_item`.`product_id` = `shouhin`.`product_id`  LEFT OUTER JOIN `sales_report` ON `Eoc_inventory_item`.`product_id` = `sales_report`.`product_id`  LEFT OUTER JOIN `purchase_category_report` ON `Eoc_inventory_item`.`product_id` = `purchase_category_report`.`product_id`  LEFT OUTER JOIN `Eoc_inventory` ON `Eoc_inventory_item`.`Eoc_inventory_id` = `Eoc_inventory`.`id`";
$proto0["m_strWhere"] = "(`Eoc_inventory`.`date` >= DATE_FORMAT(`shouhin`.`DT_UP_DATE`,'%Y%m%d'))  	AND 	  	(  		`Eoc_inventory`.`date` < DATE_FORMAT(`shouhin`.`kanryou_henbi`,'%Y%m%d')  		OR  		`shouhin`.`kanryou_henbi` IS NULL  		OR  		`shouhin`.`kanryou_henbi` = '0000-00-00 00:00:00'  	)";
$proto0["m_strOrderBy"] = "ORDER BY `Eoc_inventory`.`date` DESC, `Eoc_inventory_item`.`product_id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(`Eoc_inventory`.`date` >= DATE_FORMAT(`shouhin`.`DT_UP_DATE`,'%Y%m%d'))  	AND 	  	(  		`Eoc_inventory`.`date` < DATE_FORMAT(`shouhin`.`kanryou_henbi`,'%Y%m%d')  		OR  		`shouhin`.`kanryou_henbi` IS NULL  		OR  		`shouhin`.`kanryou_henbi` = '0000-00-00 00:00:00'  	)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(`Eoc_inventory`.`date` >= DATE_FORMAT(`shouhin`.`DT_UP_DATE`,'%Y%m%d'))  	AND 	  	(  		`Eoc_inventory`.`date` < DATE_FORMAT(`shouhin`.`kanryou_henbi`,'%Y%m%d')  		OR  		`shouhin`.`kanryou_henbi` IS NULL  		OR  		`shouhin`.`kanryou_henbi` = '0000-00-00 00:00:00'  	)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`Eoc_inventory`.`date` >= DATE_FORMAT(`shouhin`.`DT_UP_DATE`,'%Y%m%d')";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = ">= DATE_FORMAT(`shouhin`.`DT_UP_DATE`,'%Y%m%d')";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "  		`Eoc_inventory`.`date` < DATE_FORMAT(`shouhin`.`kanryou_henbi`,'%Y%m%d')  		OR  		`shouhin`.`kanryou_henbi` IS NULL  		OR  		`shouhin`.`kanryou_henbi` = '0000-00-00 00:00:00'  	";
$proto6["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "  		`Eoc_inventory`.`date` < DATE_FORMAT(`shouhin`.`kanryou_henbi`,'%Y%m%d')  		OR  		`shouhin`.`kanryou_henbi` IS NULL  		OR  		`shouhin`.`kanryou_henbi` = '0000-00-00 00:00:00'  	"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
						$proto8=array();
$proto8["m_sql"] = "`Eoc_inventory`.`date` < DATE_FORMAT(`shouhin`.`kanryou_henbi`,'%Y%m%d')";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "< DATE_FORMAT(`shouhin`.`kanryou_henbi`,'%Y%m%d')";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto6["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "`shouhin`.`kanryou_henbi` IS NULL";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "IS NULL";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto6["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "`shouhin`.`kanryou_henbi` = '0000-00-00 00:00:00'";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "= '0000-00-00 00:00:00'";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto6["m_contained"][]=$obj;
$proto6["m_strCase"] = "";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_inventory_item",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto16["m_sql"] = "`Eoc_inventory_item`.`id`";
$proto16["m_srcTableName"] = "Eoc_inventory_item";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "Eoc_inventory_item",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto18["m_sql"] = "`Eoc_inventory_item`.`product_id`";
$proto18["m_srcTableName"] = "Eoc_inventory_item";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_inventory_id",
	"m_strTable" => "Eoc_inventory_item",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto20["m_sql"] = "`Eoc_inventory_item`.`Eoc_inventory_id`";
$proto20["m_srcTableName"] = "Eoc_inventory_item";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "Eoc_inventory_item",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto22["m_sql"] = "`Eoc_inventory_item`.`created_at`";
$proto22["m_srcTableName"] = "Eoc_inventory_item";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_inventory_item",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto24["m_sql"] = "`Eoc_inventory_item`.`updated_at`";
$proto24["m_srcTableName"] = "Eoc_inventory_item";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "purchase_category",
	"m_strTable" => "purchase_category_report",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto26["m_sql"] = "`purchase_category_report`.`purchase_category`";
$proto26["m_srcTableName"] = "Eoc_inventory_item";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "mst_business_partner_id",
	"m_strTable" => "sales_report",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto28["m_sql"] = "`sales_report`.`mst_business_partner_id`";
$proto28["m_srcTableName"] = "Eoc_inventory_item";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto30["m_sql"] = "`shouhin`.`status`";
$proto30["m_srcTableName"] = "Eoc_inventory_item";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto32["m_sql"] = "`shouhin`.`category_id`";
$proto32["m_srcTableName"] = "Eoc_inventory_item";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto34["m_sql"] = "`shouhin`.`sub_category_id1`";
$proto34["m_srcTableName"] = "Eoc_inventory_item";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto36["m_sql"] = "`shouhin`.`price`";
$proto36["m_srcTableName"] = "Eoc_inventory_item";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto38["m_sql"] = "\"\"";
$proto38["m_srcTableName"] = "Eoc_inventory_item";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "price_without_tax";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto40["m_sql"] = "`shouhin`.`sales_price`";
$proto40["m_srcTableName"] = "Eoc_inventory_item";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto42["m_sql"] = "`shouhin`.`title`";
$proto42["m_srcTableName"] = "Eoc_inventory_item";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto44["m_sql"] = "`shouhin`.`satei_hi`";
$proto44["m_srcTableName"] = "Eoc_inventory_item";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "DT_UP_DATE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto46["m_sql"] = "`shouhin`.`DT_UP_DATE`";
$proto46["m_srcTableName"] = "Eoc_inventory_item";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Destination_selling",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto48["m_sql"] = "`shouhin`.`Destination_selling`";
$proto48["m_srcTableName"] = "Eoc_inventory_item";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto50["m_sql"] = "`shouhin`.`nyuukin_price`";
$proto50["m_srcTableName"] = "Eoc_inventory_item";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto52["m_sql"] = "`shouhin`.`kanryou_henbi`";
$proto52["m_srcTableName"] = "Eoc_inventory_item";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto54["m_sql"] = "`shouhin`.`description`";
$proto54["m_srcTableName"] = "Eoc_inventory_item";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto56["m_sql"] = "`shouhin`.`comment`";
$proto56["m_srcTableName"] = "Eoc_inventory_item";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto58["m_sql"] = "`Eoc_inventory`.`date`";
$proto58["m_srcTableName"] = "Eoc_inventory_item";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto60=array();
$proto60["m_link"] = "SQLL_MAIN";
			$proto61=array();
$proto61["m_strName"] = "Eoc_inventory_item";
$proto61["m_srcTableName"] = "Eoc_inventory_item";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "id";
$proto61["m_columns"][] = "product_id";
$proto61["m_columns"][] = "Eoc_inventory_id";
$proto61["m_columns"][] = "created_at";
$proto61["m_columns"][] = "updated_at";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "`Eoc_inventory_item`";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "Eoc_inventory_item";
$proto62=array();
$proto62["m_sql"] = "";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
												$proto64=array();
$proto64["m_link"] = "SQLL_LEFTJOIN";
			$proto65=array();
$proto65["m_strName"] = "shouhin";
$proto65["m_srcTableName"] = "Eoc_inventory_item";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "product_id";
$proto65["m_columns"][] = "category_id";
$proto65["m_columns"][] = "goods_title";
$proto65["m_columns"][] = "title";
$proto65["m_columns"][] = "sub_category_id1";
$proto65["m_columns"][] = "ecc_id";
$proto65["m_columns"][] = "price";
$proto65["m_columns"][] = "yahoo";
$proto65["m_columns"][] = "remark";
$proto65["m_columns"][] = "sales_price";
$proto65["m_columns"][] = "description";
$proto65["m_columns"][] = "status";
$proto65["m_columns"][] = "product_num";
$proto65["m_columns"][] = "updated_at";
$proto65["m_columns"][] = "yahoo_size";
$proto65["m_columns"][] = "yahoo_title";
$proto65["m_columns"][] = "yahoo_junle";
$proto65["m_columns"][] = "yahoo_sankou_uwadai";
$proto65["m_columns"][] = "yahoo_sozai";
$proto65["m_columns"][] = "yahoo_color";
$proto65["m_columns"][] = "yahoo_kataban";
$proto65["m_columns"][] = "yahoo_condition1";
$proto65["m_columns"][] = "yahoo_condition2";
$proto65["m_columns"][] = "yahoo_fuzokuhin";
$proto65["m_columns"][] = "yahoo_sinaban";
$proto65["m_columns"][] = "yahoo_saisun_sha";
$proto65["m_columns"][] = "yahoo_sex";
$proto65["m_columns"][] = "box_id";
$proto65["m_columns"][] = "nyuukin_price";
$proto65["m_columns"][] = "updated_by";
$proto65["m_columns"][] = "raku_title";
$proto65["m_columns"][] = "raku_hyoujisaki_category2";
$proto65["m_columns"][] = "raku_hyoujisaki_category";
$proto65["m_columns"][] = "raku_hyoujisaki_category3";
$proto65["m_columns"][] = "timesta";
$proto65["m_columns"][] = "saisun_start";
$proto65["m_columns"][] = "saisun_end";
$proto65["m_columns"][] = "label_output_flag";
$proto65["m_columns"][] = "season";
$proto65["m_columns"][] = "kanryou_henbi";
$proto65["m_columns"][] = "box_sort";
$proto65["m_columns"][] = "satei_by";
$proto65["m_columns"][] = "kaitori_by";
$proto65["m_columns"][] = "comment";
$proto65["m_columns"][] = "satei_hi";
$proto65["m_columns"][] = "kaitory_hi";
$proto65["m_columns"][] = "REG_PHOTOGRAPHER";
$proto65["m_columns"][] = "REG_AUTHOR";
$proto65["m_columns"][] = "REG_PACKINGS";
$proto65["m_columns"][] = "REG_KAKOU_DATE";
$proto65["m_columns"][] = "REG_KAKOU";
$proto65["m_columns"][] = "REG_EXHIBITOR";
$proto65["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto65["m_columns"][] = "DT_PACKING_DATE";
$proto65["m_columns"][] = "DT_UP_DATE";
$proto65["m_columns"][] = "AWAZU_DATE";
$proto65["m_columns"][] = "AWAZU_NIN";
$proto65["m_columns"][] = "sabun_date";
$proto65["m_columns"][] = "browseid";
$proto65["m_columns"][] = "browsenode";
$proto65["m_columns"][] = "gold_property";
$proto65["m_columns"][] = "ichiba_title";
$proto65["m_columns"][] = "Gram";
$proto65["m_columns"][] = "Parent_stone";
$proto65["m_columns"][] = "Aside_stone";
$proto65["m_columns"][] = "Appraiser";
$proto65["m_columns"][] = "Remarks";
$proto65["m_columns"][] = "Destination_selling";
$proto65["m_columns"][] = "Finish";
$proto65["m_columns"][] = "Discrimination";
$proto65["m_columns"][] = "accessories";
$proto65["m_columns"][] = "priority";
$proto65["m_columns"][] = "A_storage";
$proto65["m_columns"][] = "price_per_gram";
$proto65["m_columns"][] = "price_per_parent_stone";
$proto65["m_columns"][] = "price_per_aside_stone";
$proto65["m_columns"][] = "price_secret";
$proto65["m_columns"][] = "sales_price_secret";
$proto65["m_columns"][] = "eq";
$proto65["m_columns"][] = "en";
$proto65["m_columns"][] = "line";
$proto65["m_columns"][] = "item_name";
$proto65["m_columns"][] = "handle";
$proto65["m_columns"][] = "yahoo_color_id";
$proto65["m_columns"][] = "raku_hyoujisaki_category4";
$proto65["m_columns"][] = "raku_hyoujisaki_category5";
$proto65["m_columns"][] = "raku_dir_1";
$proto65["m_columns"][] = "raku_dir_2";
$proto65["m_columns"][] = "raku_dir_3";
$proto65["m_columns"][] = "raku_dir_4";
$proto65["m_columns"][] = "raku_dir_5";
$proto65["m_columns"][] = "raku_dir_result";
$proto65["m_columns"][] = "raku_tag_result";
$proto65["m_columns"][] = "serial_number";
$proto65["m_columns"][] = "Exhibition_Date";
$proto65["m_columns"][] = "search_keyword";
$proto65["m_columns"][] = "stamp";
$proto65["m_columns"][] = "motif";
$proto65["m_columns"][] = "Setting";
$proto65["m_columns"][] = "processing";
$proto65["m_columns"][] = "Sleeve_Length";
$proto65["m_columns"][] = "length";
$proto65["m_columns"][] = "Ring_size";
$proto65["m_columns"][] = "price_for_site";
$proto65["m_columns"][] = "yahoo_category_id";
$proto65["m_columns"][] = "Qty";
$proto65["m_columns"][] = "sales_period";
$proto65["m_columns"][] = "starting_price";
$proto65["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto65["m_columns"][] = "amount_of_image";
$proto65["m_columns"][] = "csv";
$proto65["m_columns"][] = "return_output_flag";
$proto65["m_columns"][] = "wasabi_flag";
$proto65["m_columns"][] = "ws_import_date";
$proto65["m_columns"][] = "logo";
$proto65["m_columns"][] = "parts";
$proto65["m_columns"][] = "country_of_origin";
$proto65["m_columns"][] = "zipper";
$proto65["m_columns"][] = "guarantee";
$proto65["m_columns"][] = "errors";
$proto65["m_columns"][] = "designer";
$proto65["m_columns"][] = "hahakai";
$proto65["m_columns"][] = "effect";
$proto65["m_columns"][] = "shape";
$proto65["m_columns"][] = "cutting_style";
$proto65["m_columns"][] = "chain_type";
$proto65["m_columns"][] = "number_of_stones";
$proto65["m_columns"][] = "amount";
$proto65["m_columns"][] = "satei_error";
$proto65["m_columns"][] = "producing_area";
$proto65["m_columns"][] = "shape_supplement";
$proto65["m_columns"][] = "side_gem";
$proto65["m_columns"][] = "product_style";
$proto65["m_columns"][] = "collar_neck_line";
$proto65["m_columns"][] = "breast";
$proto65["m_columns"][] = "silhouette";
$proto65["m_columns"][] = "sleeve";
$proto65["m_columns"][] = "unit";
$proto65["m_columns"][] = "hall_mark";
$proto65["m_columns"][] = "plate";
$proto65["m_columns"][] = "toe";
$proto65["m_columns"][] = "heel";
$proto65["m_columns"][] = "cloth";
$proto65["m_columns"][] = "serial_number_for_storage";
$proto65["m_columns"][] = "official_url";
$proto65["m_columns"][] = "main_details";
$proto65["m_columns"][] = "notation_size";
$proto65["m_columns"][] = "shoe_size_jp";
$proto65["m_columns"][] = "Eoc_chigins2_id";
$proto65["m_columns"][] = "country_of_origin_name";
$proto65["m_columns"][] = "mailingkit_id";
$proto65["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto65["m_columns"][] = "DA_WEIGHT";
$proto65["m_columns"][] = "DA_PER_CARAT";
$proto65["m_columns"][] = "DA_SHAPE";
$proto65["m_columns"][] = "DA_SELFGRES";
$proto65["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto65["m_columns"][] = "DA_SUGARCANE";
$proto65["m_columns"][] = "DA_RAPA";
$proto65["m_columns"][] = "DA_INTENSITY";
$proto65["m_columns"][] = "DA_OVERTONE";
$proto65["m_columns"][] = "DA_COLOR";
$proto65["m_columns"][] = "DA_CLARITY";
$proto65["m_columns"][] = "DA_CUT";
$proto65["m_columns"][] = "DA_POLISH";
$proto65["m_columns"][] = "DA_SYMMETRY";
$proto65["m_columns"][] = "DA_FLUO";
$proto65["m_columns"][] = "DA_COLOR_FLUO";
$proto65["m_columns"][] = "DA_WIDE";
$proto65["m_columns"][] = "DA_HIGH";
$proto65["m_columns"][] = "DA_DEPTH";
$proto65["m_columns"][] = "DA_APPRAISER";
$proto65["m_columns"][] = "DA_FRAPA";
$proto65["m_columns"][] = "DA_RATE";
$proto65["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto65["m_columns"][] = "DA_YOURNAME";
$proto65["m_columns"][] = "DA_RAPAB";
$proto65["m_columns"][] = "DA_GROSSPROFIT";
$proto65["m_columns"][] = "DA_INTEREST_1";
$proto65["m_columns"][] = "DA_no";
$proto65["m_columns"][] = "kinsa_flag";
$proto65["m_columns"][] = "price_for_site_flag";
$proto65["m_columns"][] = "Eoc_takuhai_id";
$proto65["m_columns"][] = "Eoc_unfinished_id";
$proto65["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto65["m_columns"][] = "chohyo_id";
$proto65["m_columns"][] = "location";
$proto65["m_columns"][] = "special_instructions_1";
$proto65["m_columns"][] = "special_instructions_2";
$proto65["m_columns"][] = "special_instructions_3";
$proto65["m_columns"][] = "chohyo_seihin_flag";
$proto65["m_columns"][] = "chohyo_dia_flag";
$proto65["m_columns"][] = "chohyo_type";
$proto65["m_columns"][] = "ichiyen_flag";
$proto65["m_columns"][] = "asuraku_fuka_flag";
$proto65["m_columns"][] = "parallel_import_flag";
$proto65["m_columns"][] = "meisai_number";
$proto65["m_columns"][] = "days_keep_price";
$proto65["m_columns"][] = "initial_included";
$proto65["m_columns"][] = "novelty";
$proto65["m_columns"][] = "tentou_label_output_flag";
$proto65["m_columns"][] = "itaku_flag";
$proto65["m_columns"][] = "including_catch";
$proto65["m_columns"][] = "ichiba_meeting_month";
$proto65["m_columns"][] = "ichiba_meeting_name";
$proto65["m_columns"][] = "ichiba_color";
$proto65["m_columns"][] = "ichiba_clarity";
$proto65["m_columns"][] = "ichiba_melee_gai";
$proto65["m_columns"][] = "ichiba_lot_pieces";
$proto65["m_columns"][] = "ichiba_image";
$proto65["m_columns"][] = "ichiba_img";
$proto65["m_columns"][] = "gold_check_id";
$proto65["m_columns"][] = "ichiba_exhibition_id";
$proto65["m_columns"][] = "ichiba_exhibition_sort";
$proto65["m_columns"][] = "cost";
$proto65["m_columns"][] = "auto_price_cut_prohibited";
$proto65["m_columns"][] = "event_price";
$proto65["m_columns"][] = "identification_cost";
$proto65["m_columns"][] = "other_cost";
$proto65["m_columns"][] = "stock_quantity";
$proto65["m_columns"][] = "Eoc_trader_id_for_buy";
$proto65["m_columns"][] = "Eoc_trader_id_for_sell";
$proto65["m_columns"][] = "multiplication_rate";
$proto65["m_columns"][] = "many_product_group_id";
$proto65["m_columns"][] = "trading_sort_id";
$proto65["m_columns"][] = "many_product_group_saiban";
$proto65["m_columns"][] = "purchase_category";
$proto65["m_columns"][] = "created_at";
$proto65["m_columns"][] = "created_by";
$proto65["m_columns"][] = "manual_input_price_per_gram";
$proto65["m_columns"][] = "satei_start";
$proto65["m_columns"][] = "self_DA_INTENSITY";
$proto65["m_columns"][] = "self_DA_OVERTONE";
$proto65["m_columns"][] = "self_DA_COLOR";
$proto65["m_columns"][] = "self_DA_CLARITY";
$proto65["m_columns"][] = "self_DA_CUT";
$proto65["m_columns"][] = "self_DA_POLISH";
$proto65["m_columns"][] = "self_DA_SYMMETRY";
$proto65["m_columns"][] = "self_DA_FLUO";
$proto65["m_columns"][] = "self_DA_COLOR_FLUO";
$proto65["m_columns"][] = "self_DA_FRAPA";
$proto65["m_columns"][] = "self_DA_RATE";
$proto65["m_columns"][] = "self_multiplication_rate";
$proto65["m_columns"][] = "is_seiyaku";
$proto65["m_columns"][] = "destination_sold_out";
$proto65["m_columns"][] = "mypage_update_prohibited";
$proto65["m_columns"][] = "gold_check_scan_id";
$proto65["m_columns"][] = "buy_campaign_data_id";
$proto65["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto65["m_columns"][] = "commission";
$proto65["m_columns"][] = "addtime_gold_check_id";
$proto65["m_columns"][] = "is_recovery";
$proto65["m_columns"][] = "sales_cost";
$proto65["m_columns"][] = "mst_business_partner_id";
$proto65["m_columns"][] = "DA_GROSSPROFIT_2";
$proto65["m_columns"][] = "DA_INTEREST_2";
$proto65["m_columns"][] = "minus_weight";
$proto65["m_columns"][] = "diameter_size";
$proto65["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "LEFT OUTER JOIN `shouhin` ON `Eoc_inventory_item`.`product_id` = `shouhin`.`product_id`";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "Eoc_inventory_item";
$proto66=array();
$proto66["m_sql"] = "`Eoc_inventory_item`.`product_id` = `shouhin`.`product_id`";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "Eoc_inventory_item",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "= `shouhin`.`product_id`";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
												$proto68=array();
$proto68["m_link"] = "SQLL_LEFTJOIN";
			$proto69=array();
$proto69["m_strName"] = "sales_report";
$proto69["m_srcTableName"] = "Eoc_inventory_item";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "id";
$proto69["m_columns"][] = "product_id";
$proto69["m_columns"][] = "sales_date";
$proto69["m_columns"][] = "contract_date";
$proto69["m_columns"][] = "exhibition_date";
$proto69["m_columns"][] = "created_at";
$proto69["m_columns"][] = "updated_at";
$proto69["m_columns"][] = "memo";
$proto69["m_columns"][] = "repo_type";
$proto69["m_columns"][] = "mst_business_partner_id";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "LEFT OUTER JOIN `sales_report` ON `Eoc_inventory_item`.`product_id` = `sales_report`.`product_id`";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "Eoc_inventory_item";
$proto70=array();
$proto70["m_sql"] = "`Eoc_inventory_item`.`product_id` = `sales_report`.`product_id`";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "Eoc_inventory_item",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "= `sales_report`.`product_id`";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
												$proto72=array();
$proto72["m_link"] = "SQLL_LEFTJOIN";
			$proto73=array();
$proto73["m_strName"] = "purchase_category_report";
$proto73["m_srcTableName"] = "Eoc_inventory_item";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "product_id";
$proto73["m_columns"][] = "purchase_category";
$proto73["m_columns"][] = "updated_at";
$proto73["m_columns"][] = "created_at";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "LEFT OUTER JOIN `purchase_category_report` ON `Eoc_inventory_item`.`product_id` = `purchase_category_report`.`product_id`";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "Eoc_inventory_item";
$proto74=array();
$proto74["m_sql"] = "`Eoc_inventory_item`.`product_id` = `purchase_category_report`.`product_id`";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "Eoc_inventory_item",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= `purchase_category_report`.`product_id`";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
												$proto76=array();
$proto76["m_link"] = "SQLL_LEFTJOIN";
			$proto77=array();
$proto77["m_strName"] = "Eoc_inventory";
$proto77["m_srcTableName"] = "Eoc_inventory_item";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "id";
$proto77["m_columns"][] = "date";
$proto77["m_columns"][] = "inventory_j_ec";
$proto77["m_columns"][] = "inventory_j_ichiba";
$proto77["m_columns"][] = "inventory_k";
$proto77["m_columns"][] = "inventory_d";
$proto77["m_columns"][] = "inventory_b_ec";
$proto77["m_columns"][] = "inventory_b_ichiba";
$proto77["m_columns"][] = "inventory_w_ec";
$proto77["m_columns"][] = "inventory_w_ichiba";
$proto77["m_columns"][] = "inventory_c";
$proto77["m_columns"][] = "sales_j_ec";
$proto77["m_columns"][] = "sales_j_ichiba";
$proto77["m_columns"][] = "sales_k";
$proto77["m_columns"][] = "sales_d";
$proto77["m_columns"][] = "sales_b_ec";
$proto77["m_columns"][] = "sales_b_ichiba";
$proto77["m_columns"][] = "sales_w_ec";
$proto77["m_columns"][] = "sales_w_ichiba";
$proto77["m_columns"][] = "sales_c";
$proto77["m_columns"][] = "buy_during_period_j_ec";
$proto77["m_columns"][] = "buy_during_period_j_ichiba";
$proto77["m_columns"][] = "buy_during_period_k";
$proto77["m_columns"][] = "buy_during_period_d";
$proto77["m_columns"][] = "buy_during_period_b_ec";
$proto77["m_columns"][] = "buy_during_period_b_ichiba";
$proto77["m_columns"][] = "buy_during_period_w_ec";
$proto77["m_columns"][] = "buy_during_period_w_ichiba";
$proto77["m_columns"][] = "buy_during_period_c";
$proto77["m_columns"][] = "created_at";
$proto77["m_columns"][] = "updated_at";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "LEFT OUTER JOIN `Eoc_inventory` ON `Eoc_inventory_item`.`Eoc_inventory_id` = `Eoc_inventory`.`id`";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "Eoc_inventory_item";
$proto78=array();
$proto78["m_sql"] = "`Eoc_inventory_item`.`Eoc_inventory_id` = `Eoc_inventory`.`id`";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Eoc_inventory_id",
	"m_strTable" => "Eoc_inventory_item",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "= `Eoc_inventory`.`id`";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto80=array();
						$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto80["m_column"]=$obj;
$proto80["m_bAsc"] = 0;
$proto80["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto80);

$proto0["m_orderby"][]=$obj;					
												$proto82=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "Eoc_inventory_item",
	"m_srcTableName" => "Eoc_inventory_item"
));

$proto82["m_column"]=$obj;
$proto82["m_bAsc"] = 0;
$proto82["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto82);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_inventory_item";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_inventory_item = createSqlQuery_Eoc_inventory_item();


	
		;

																						

$tdataEoc_inventory_item[".sqlquery"] = $queryData_Eoc_inventory_item;

$tableEvents["Eoc_inventory_item"] = new eventsBase;
$tdataEoc_inventory_item[".hasEvents"] = false;

?>