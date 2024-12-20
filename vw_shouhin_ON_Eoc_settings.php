<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_shouhin_ON_Eoc = array();
	$tdatavw_shouhin_ON_Eoc[".truncateText"] = true;
	$tdatavw_shouhin_ON_Eoc[".NumberOfChars"] = 150;
	$tdatavw_shouhin_ON_Eoc[".ShortName"] = "vw_shouhin_ON_Eoc";
	$tdatavw_shouhin_ON_Eoc[".OwnerID"] = "";
	$tdatavw_shouhin_ON_Eoc[".OriginalTable"] = "vw_shouhin_ON_Eoc";

//	field labels
$fieldLabelsvw_shouhin_ON_Eoc = array();
$fieldToolTipsvw_shouhin_ON_Eoc = array();
$pageTitlesvw_shouhin_ON_Eoc = array();
$placeHoldersvw_shouhin_ON_Eoc = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"] = array();
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"] = array();
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"] = array();
	$pageTitlesvw_shouhin_ON_Eoc["Japanese"] = array();
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["product_id"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["product_id"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["status"] = "商品状態";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["status"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["status"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["product_num"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["product_num"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["title"] = "タイトル";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["title"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["title"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["serial_number"] = "機番";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["serial_number"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["serial_number"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["line"] = "ライン";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["line"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["line"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["item_name"] = "アイテム名";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["item_name"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["item_name"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["yahoo_kataban"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["category_id"] = "大カテ";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["category_id"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["category_id"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["sub_category_id1"] = "中カテ";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["sub_category_id1"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["yahoo_condition2"] = "コンディション";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["yahoo_condition2"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["yahoo_condition2"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["price"] = "買取額";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["price"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["price"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["sales_price"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["sales_price"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["nyuukin_price"] = "入金額";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["nyuukin_price"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["nyuukin_price"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["comment"] = "コメント";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["comment"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["comment"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["description"] = "メモ";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["description"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["description"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["satei_hi"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["satei_hi"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["satei_by"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["satei_by"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["ecc_id"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["ecc_id"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["b1"] = "生年月日";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["b1"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["b1"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["address1"] = "都道府県";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["address1"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["address1"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["Japanese"]["remark"] = "備考";
	$fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]["remark"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["Japanese"]["remark"] = "";
	if (count($fieldToolTipsvw_shouhin_ON_Eoc["Japanese"]))
		$tdatavw_shouhin_ON_Eoc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_shouhin_ON_Eoc[""] = array();
	$fieldToolTipsvw_shouhin_ON_Eoc[""] = array();
	$placeHoldersvw_shouhin_ON_Eoc[""] = array();
	$pageTitlesvw_shouhin_ON_Eoc[""] = array();
	$fieldLabelsvw_shouhin_ON_Eoc[""]["product_id"] = "Product Id";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["product_id"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["product_id"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["status"] = "Status";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["status"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["status"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["product_num"] = "Product Num";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["product_num"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["product_num"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["title"] = "Title";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["title"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["title"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["serial_number"] = "Serial Number";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["serial_number"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["serial_number"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["line"] = "Line";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["line"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["line"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["item_name"] = "Item Name";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["item_name"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["item_name"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["yahoo_kataban"] = "Yahoo Kataban";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["yahoo_kataban"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["yahoo_kataban"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["category_id"] = "Category Id";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["category_id"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["category_id"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["sub_category_id1"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["sub_category_id1"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["yahoo_condition2"] = "Yahoo Condition2";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["yahoo_condition2"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["yahoo_condition2"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["price"] = "Price";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["price"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["price"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["sales_price"] = "Sales Price";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["sales_price"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["sales_price"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["nyuukin_price"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["nyuukin_price"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["comment"] = "Comment";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["comment"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["comment"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["description"] = "Description";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["description"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["description"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["satei_hi"] = "Satei Hi";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["satei_hi"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["satei_hi"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["satei_by"] = "Satei By";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["satei_by"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["satei_by"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["ecc_id"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["ecc_id"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["b1"] = "B1";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["b1"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["b1"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["address1"] = "Address1";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["address1"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["address1"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc[""]["remark"] = "Remark";
	$fieldToolTipsvw_shouhin_ON_Eoc[""]["remark"] = "";
	$placeHoldersvw_shouhin_ON_Eoc[""]["remark"] = "";
	if (count($fieldToolTipsvw_shouhin_ON_Eoc[""]))
		$tdatavw_shouhin_ON_Eoc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_shouhin_ON_Eoc["English"] = array();
	$fieldToolTipsvw_shouhin_ON_Eoc["English"] = array();
	$placeHoldersvw_shouhin_ON_Eoc["English"] = array();
	$pageTitlesvw_shouhin_ON_Eoc["English"] = array();
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["product_id"] = "Product Id";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["product_id"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["product_id"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["status"] = "Status";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["status"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["status"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["product_num"] = "Product Num";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["product_num"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["product_num"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["title"] = "Title";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["title"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["title"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["serial_number"] = "Serial Number";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["serial_number"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["serial_number"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["line"] = "Line";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["line"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["line"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["item_name"] = "Item Name";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["item_name"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["item_name"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["yahoo_kataban"] = "Yahoo Kataban";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["yahoo_kataban"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["yahoo_kataban"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["category_id"] = "Category Id";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["category_id"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["category_id"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["sub_category_id1"] = "Sub Category Id1";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["sub_category_id1"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["sub_category_id1"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["yahoo_condition2"] = "Yahoo Condition2";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["yahoo_condition2"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["yahoo_condition2"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["price"] = "Price";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["price"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["price"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["sales_price"] = "Sales Price";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["sales_price"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["sales_price"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["nyuukin_price"] = "Nyuukin Price";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["nyuukin_price"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["nyuukin_price"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["comment"] = "Comment";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["comment"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["comment"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["description"] = "Description";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["description"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["description"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["satei_hi"] = "Satei Hi";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["satei_hi"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["satei_hi"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["satei_by"] = "Satei By";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["satei_by"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["satei_by"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["ecc_id"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["ecc_id"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["b1"] = "B1";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["b1"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["b1"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["address1"] = "Address1";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["address1"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["address1"] = "";
	$fieldLabelsvw_shouhin_ON_Eoc["English"]["remark"] = "Remark";
	$fieldToolTipsvw_shouhin_ON_Eoc["English"]["remark"] = "";
	$placeHoldersvw_shouhin_ON_Eoc["English"]["remark"] = "";
	if (count($fieldToolTipsvw_shouhin_ON_Eoc["English"]))
		$tdatavw_shouhin_ON_Eoc[".isUseToolTips"] = true;
}


	$tdatavw_shouhin_ON_Eoc[".NCSearch"] = true;



$tdatavw_shouhin_ON_Eoc[".shortTableName"] = "vw_shouhin_ON_Eoc";
$tdatavw_shouhin_ON_Eoc[".nSecOptions"] = 0;
$tdatavw_shouhin_ON_Eoc[".recsPerRowPrint"] = 1;
$tdatavw_shouhin_ON_Eoc[".mainTableOwnerID"] = "";
$tdatavw_shouhin_ON_Eoc[".moveNext"] = 1;
$tdatavw_shouhin_ON_Eoc[".entityType"] = 0;

$tdatavw_shouhin_ON_Eoc[".strOriginalTableName"] = "vw_shouhin_ON_Eoc";

	



$tdatavw_shouhin_ON_Eoc[".showAddInPopup"] = false;

$tdatavw_shouhin_ON_Eoc[".showEditInPopup"] = false;

$tdatavw_shouhin_ON_Eoc[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_shouhin_ON_Eoc[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_shouhin_ON_Eoc[".fieldsForRegister"] = array();

$tdatavw_shouhin_ON_Eoc[".listAjax"] = false;

	$tdatavw_shouhin_ON_Eoc[".audit"] = true;

	$tdatavw_shouhin_ON_Eoc[".locking"] = false;



$tdatavw_shouhin_ON_Eoc[".list"] = true;



$tdatavw_shouhin_ON_Eoc[".reorderRecordsByHeader"] = true;








$tdatavw_shouhin_ON_Eoc[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_shouhin_ON_Eoc[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_shouhin_ON_Eoc[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_shouhin_ON_Eoc[".searchSaving"] = false;
//

$tdatavw_shouhin_ON_Eoc[".showSearchPanel"] = true;
		$tdatavw_shouhin_ON_Eoc[".flexibleSearch"] = true;

$tdatavw_shouhin_ON_Eoc[".isUseAjaxSuggest"] = true;

$tdatavw_shouhin_ON_Eoc[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatavw_shouhin_ON_Eoc[".ajaxCodeSnippetAdded"] = false;

$tdatavw_shouhin_ON_Eoc[".buttonsAdded"] = false;

$tdatavw_shouhin_ON_Eoc[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_shouhin_ON_Eoc[".isUseTimeForSearch"] = false;





$tdatavw_shouhin_ON_Eoc[".allSearchFields"] = array();
$tdatavw_shouhin_ON_Eoc[".filterFields"] = array();
$tdatavw_shouhin_ON_Eoc[".requiredSearchFields"] = array();

$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "product_id";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "status";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "product_num";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "title";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "serial_number";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "line";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "item_name";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "yahoo_kataban";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "category_id";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "sub_category_id1";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "yahoo_condition2";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "price";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "sales_price";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "nyuukin_price";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "comment";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "description";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "satei_hi";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "satei_by";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "ecc_id";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "b1";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "address1";
	$tdatavw_shouhin_ON_Eoc[".allSearchFields"][] = "remark";
	

$tdatavw_shouhin_ON_Eoc[".googleLikeFields"] = array();
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "product_id";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "status";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "product_num";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "title";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "serial_number";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "line";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "item_name";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "yahoo_kataban";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "category_id";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "sub_category_id1";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "yahoo_condition2";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "price";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "sales_price";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "nyuukin_price";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "comment";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "description";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "satei_hi";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "satei_by";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "ecc_id";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "b1";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "address1";
$tdatavw_shouhin_ON_Eoc[".googleLikeFields"][] = "remark";

$tdatavw_shouhin_ON_Eoc[".panelSearchFields"] = array();
$tdatavw_shouhin_ON_Eoc[".searchPanelOptions"] = array();
$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "product_id";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "status";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "product_num";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "title";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "serial_number";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "line";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "item_name";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "yahoo_kataban";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "category_id";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "sub_category_id1";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "yahoo_condition2";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "price";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "sales_price";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "nyuukin_price";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "comment";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "description";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "satei_hi";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "satei_by";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "ecc_id";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "b1";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "address1";
	$tdatavw_shouhin_ON_Eoc[".panelSearchFields"][] = "remark";
	
$tdatavw_shouhin_ON_Eoc[".advSearchFields"] = array();
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "product_id";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "status";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "product_num";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "title";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "serial_number";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "line";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "item_name";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "yahoo_kataban";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "category_id";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "sub_category_id1";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "yahoo_condition2";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "price";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "sales_price";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "nyuukin_price";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "comment";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "description";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "satei_hi";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "satei_by";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "ecc_id";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "b1";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "address1";
$tdatavw_shouhin_ON_Eoc[".advSearchFields"][] = "remark";

$tdatavw_shouhin_ON_Eoc[".tableType"] = "list";

$tdatavw_shouhin_ON_Eoc[".printerPageOrientation"] = 0;
$tdatavw_shouhin_ON_Eoc[".nPrinterPageScale"] = 100;

$tdatavw_shouhin_ON_Eoc[".nPrinterSplitRecords"] = 40;

$tdatavw_shouhin_ON_Eoc[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_shouhin_ON_Eoc[".geocodingEnabled"] = false;





$tdatavw_shouhin_ON_Eoc[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatavw_shouhin_ON_Eoc[".totalsFields"] = array();
$tdatavw_shouhin_ON_Eoc[".totalsFields"][] = array(
	"fName" => "price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatavw_shouhin_ON_Eoc[".totalsFields"][] = array(
	"fName" => "sales_price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');
$tdatavw_shouhin_ON_Eoc[".totalsFields"][] = array(
	"fName" => "nyuukin_price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');

$tdatavw_shouhin_ON_Eoc[".pageSize"] = 20;

$tdatavw_shouhin_ON_Eoc[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY product_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_shouhin_ON_Eoc[".strOrderBy"] = $tstrOrderBy;

$tdatavw_shouhin_ON_Eoc[".orderindexes"] = array();
$tdatavw_shouhin_ON_Eoc[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`product_id`");

$tdatavw_shouhin_ON_Eoc[".sqlHead"] = "SELECT product_id,  status,  product_num,  title,  serial_number,  line,  item_name,  yahoo_kataban,  category_id,  sub_category_id1,  yahoo_condition2,  price,  sales_price,  nyuukin_price,  `comment`,  description,  satei_hi,  satei_by,  ecc_id,  b1,  address1,  remark";
$tdatavw_shouhin_ON_Eoc[".sqlFrom"] = "FROM vw_shouhin_ON_Eoc";
$tdatavw_shouhin_ON_Eoc[".sqlWhereExpr"] = "";
$tdatavw_shouhin_ON_Eoc[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_shouhin_ON_Eoc[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_shouhin_ON_Eoc[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_shouhin_ON_Eoc[".highlightSearchResults"] = true;

$tableKeysvw_shouhin_ON_Eoc = array();
$tableKeysvw_shouhin_ON_Eoc[] = "product_id";
$tdatavw_shouhin_ON_Eoc[".Keys"] = $tableKeysvw_shouhin_ON_Eoc;

$tdatavw_shouhin_ON_Eoc[".listFields"] = array();
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "product_id";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "status";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "product_num";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "title";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "serial_number";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "line";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "item_name";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "yahoo_kataban";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "category_id";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "sub_category_id1";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "yahoo_condition2";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "price";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "sales_price";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "nyuukin_price";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "comment";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "description";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "satei_hi";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "satei_by";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "ecc_id";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "b1";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "address1";
$tdatavw_shouhin_ON_Eoc[".listFields"][] = "remark";

$tdatavw_shouhin_ON_Eoc[".hideMobileList"] = array();


$tdatavw_shouhin_ON_Eoc[".viewFields"] = array();

$tdatavw_shouhin_ON_Eoc[".addFields"] = array();

$tdatavw_shouhin_ON_Eoc[".masterListFields"] = array();
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "product_id";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "status";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "product_num";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "title";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "serial_number";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "line";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "item_name";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "yahoo_kataban";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "category_id";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "sub_category_id1";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "yahoo_condition2";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "price";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "sales_price";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "nyuukin_price";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "comment";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "description";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "satei_hi";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "satei_by";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "ecc_id";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "b1";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "address1";
$tdatavw_shouhin_ON_Eoc[".masterListFields"][] = "remark";

$tdatavw_shouhin_ON_Eoc[".inlineAddFields"] = array();

$tdatavw_shouhin_ON_Eoc[".editFields"] = array();

$tdatavw_shouhin_ON_Eoc[".inlineEditFields"] = array();

$tdatavw_shouhin_ON_Eoc[".updateSelectedFields"] = array();


$tdatavw_shouhin_ON_Eoc[".exportFields"] = array();

$tdatavw_shouhin_ON_Eoc[".importFields"] = array();

$tdatavw_shouhin_ON_Eoc[".printFields"] = array();

//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_id";

	
	
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




	$tdatavw_shouhin_ON_Eoc["product_id"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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




	$tdatavw_shouhin_ON_Eoc["status"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","product_num");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "product_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_num";

	
	
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
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




	$tdatavw_shouhin_ON_Eoc["product_num"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
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




	$tdatavw_shouhin_ON_Eoc["title"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","serial_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "serial_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "serial_number";

	
	
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




	$tdatavw_shouhin_ON_Eoc["serial_number"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","line");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "line";

	
	
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




	$tdatavw_shouhin_ON_Eoc["line"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","item_name");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "item_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "item_name";

	
	
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




	$tdatavw_shouhin_ON_Eoc["item_name"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","yahoo_kataban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "yahoo_kataban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "yahoo_kataban";

	
	
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
			$edata["EditParams"].= " maxlength=256";

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




	$tdatavw_shouhin_ON_Eoc["yahoo_kataban"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatavw_shouhin_ON_Eoc["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatavw_shouhin_ON_Eoc["sub_category_id1"] = $fdata;
//	yahoo_condition2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "yahoo_condition2";
	$fdata["GoodName"] = "yahoo_condition2";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","yahoo_condition2");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "yahoo_condition2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "yahoo_condition2";

	
	
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




	$tdatavw_shouhin_ON_Eoc["yahoo_condition2"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "price";

	
	
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




	$tdatavw_shouhin_ON_Eoc["price"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","sales_price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sales_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sales_price";

	
	
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




	$tdatavw_shouhin_ON_Eoc["sales_price"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","nyuukin_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nyuukin_price";

	
	
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




	$tdatavw_shouhin_ON_Eoc["nyuukin_price"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","comment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatavw_shouhin_ON_Eoc["comment"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","description");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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




	$tdatavw_shouhin_ON_Eoc["description"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","satei_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "satei_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "satei_hi";

	
	
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




	$tdatavw_shouhin_ON_Eoc["satei_hi"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","satei_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "satei_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "satei_by";

	
	
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




	$tdatavw_shouhin_ON_Eoc["satei_by"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ecc_id";

	
	
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




	$tdatavw_shouhin_ON_Eoc["ecc_id"] = $fdata;
//	b1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "b1";
	$fdata["GoodName"] = "b1";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","b1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "b1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "b1";

	
	
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




	$tdatavw_shouhin_ON_Eoc["b1"] = $fdata;
//	address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "address1";
	$fdata["GoodName"] = "address1";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","address1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "address1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address1";

	
	
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




	$tdatavw_shouhin_ON_Eoc["address1"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "vw_shouhin_ON_Eoc";
	$fdata["Label"] = GetFieldLabel("vw_shouhin_ON_Eoc","remark");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "remark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remark";

	
	
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




	$tdatavw_shouhin_ON_Eoc["remark"] = $fdata;


$tables_data["vw_shouhin_ON_Eoc"]=&$tdatavw_shouhin_ON_Eoc;
$field_labels["vw_shouhin_ON_Eoc"] = &$fieldLabelsvw_shouhin_ON_Eoc;
$fieldToolTips["vw_shouhin_ON_Eoc"] = &$fieldToolTipsvw_shouhin_ON_Eoc;
$placeHolders["vw_shouhin_ON_Eoc"] = &$placeHoldersvw_shouhin_ON_Eoc;
$page_titles["vw_shouhin_ON_Eoc"] = &$pageTitlesvw_shouhin_ON_Eoc;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_shouhin_ON_Eoc"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_shouhin_ON_Eoc"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_shouhin_ON_Eoc()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "product_id,  status,  product_num,  title,  serial_number,  line,  item_name,  yahoo_kataban,  category_id,  sub_category_id1,  yahoo_condition2,  price,  sales_price,  nyuukin_price,  `comment`,  description,  satei_hi,  satei_by,  ecc_id,  b1,  address1,  remark";
$proto0["m_strFrom"] = "FROM vw_shouhin_ON_Eoc";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY product_id DESC";
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
	"m_strName" => "product_id",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto6["m_sql"] = "product_id";
$proto6["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto8["m_sql"] = "status";
$proto8["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto10["m_sql"] = "product_num";
$proto10["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto12["m_sql"] = "title";
$proto12["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto14["m_sql"] = "serial_number";
$proto14["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto16["m_sql"] = "line";
$proto16["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto18["m_sql"] = "item_name";
$proto18["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto20["m_sql"] = "yahoo_kataban";
$proto20["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto22["m_sql"] = "category_id";
$proto22["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto24["m_sql"] = "sub_category_id1";
$proto24["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_condition2",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto26["m_sql"] = "yahoo_condition2";
$proto26["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto28["m_sql"] = "price";
$proto28["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto30["m_sql"] = "sales_price";
$proto30["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto32["m_sql"] = "nyuukin_price";
$proto32["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto34["m_sql"] = "`comment`";
$proto34["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto36["m_sql"] = "description";
$proto36["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto38["m_sql"] = "satei_hi";
$proto38["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto40["m_sql"] = "satei_by";
$proto40["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto42["m_sql"] = "ecc_id";
$proto42["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "b1",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto44["m_sql"] = "b1";
$proto44["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "address1",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto46["m_sql"] = "address1";
$proto46["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto48["m_sql"] = "remark";
$proto48["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto50=array();
$proto50["m_link"] = "SQLL_MAIN";
			$proto51=array();
$proto51["m_strName"] = "vw_shouhin_ON_Eoc";
$proto51["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto51["m_columns"] = array();
$proto51["m_columns"][] = "product_id";
$proto51["m_columns"][] = "status";
$proto51["m_columns"][] = "product_num";
$proto51["m_columns"][] = "title";
$proto51["m_columns"][] = "serial_number";
$proto51["m_columns"][] = "line";
$proto51["m_columns"][] = "item_name";
$proto51["m_columns"][] = "yahoo_kataban";
$proto51["m_columns"][] = "category_id";
$proto51["m_columns"][] = "sub_category_id1";
$proto51["m_columns"][] = "yahoo_condition2";
$proto51["m_columns"][] = "price";
$proto51["m_columns"][] = "sales_price";
$proto51["m_columns"][] = "nyuukin_price";
$proto51["m_columns"][] = "comment";
$proto51["m_columns"][] = "description";
$proto51["m_columns"][] = "satei_hi";
$proto51["m_columns"][] = "satei_by";
$proto51["m_columns"][] = "ecc_id";
$proto51["m_columns"][] = "b1";
$proto51["m_columns"][] = "address1";
$proto51["m_columns"][] = "remark";
$obj = new SQLTable($proto51);

$proto50["m_table"] = $obj;
$proto50["m_sql"] = "vw_shouhin_ON_Eoc";
$proto50["m_alias"] = "";
$proto50["m_srcTableName"] = "vw_shouhin_ON_Eoc";
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto50);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto54=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "vw_shouhin_ON_Eoc",
	"m_srcTableName" => "vw_shouhin_ON_Eoc"
));

$proto54["m_column"]=$obj;
$proto54["m_bAsc"] = 0;
$proto54["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto54);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="vw_shouhin_ON_Eoc";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_shouhin_ON_Eoc = createSqlQuery_vw_shouhin_ON_Eoc();


	
		;

																						

$tdatavw_shouhin_ON_Eoc[".sqlquery"] = $queryData_vw_shouhin_ON_Eoc;

$tableEvents["vw_shouhin_ON_Eoc"] = new eventsBase;
$tdatavw_shouhin_ON_Eoc[".hasEvents"] = false;

?>