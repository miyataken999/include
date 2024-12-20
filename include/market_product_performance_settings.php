<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamarket_product_performance = array();
	$tdatamarket_product_performance[".truncateText"] = true;
	$tdatamarket_product_performance[".NumberOfChars"] = 80;
	$tdatamarket_product_performance[".ShortName"] = "market_product_performance";
	$tdatamarket_product_performance[".OwnerID"] = "";
	$tdatamarket_product_performance[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelsmarket_product_performance = array();
$fieldToolTipsmarket_product_performance = array();
$pageTitlesmarket_product_performance = array();
$placeHoldersmarket_product_performance = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmarket_product_performance["Japanese"] = array();
	$fieldToolTipsmarket_product_performance["Japanese"] = array();
	$placeHoldersmarket_product_performance["Japanese"] = array();
	$pageTitlesmarket_product_performance["Japanese"] = array();
	$fieldLabelsmarket_product_performance["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsmarket_product_performance["Japanese"]["product_id"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["product_id"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["category_id"] = "大カテゴリー";
	$fieldToolTipsmarket_product_performance["Japanese"]["category_id"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["category_id"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["title"] = "タイトル";
	$fieldToolTipsmarket_product_performance["Japanese"]["title"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["title"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["sub_category_id1"] = "中カテゴリー";
	$fieldToolTipsmarket_product_performance["Japanese"]["sub_category_id1"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["nyuukin_price"] = "入金額";
	$fieldToolTipsmarket_product_performance["Japanese"]["nyuukin_price"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["nyuukin_price"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["comment"] = "コメント";
	$fieldToolTipsmarket_product_performance["Japanese"]["comment"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["comment"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["gold_property"] = "金性";
	$fieldToolTipsmarket_product_performance["Japanese"]["gold_property"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["gold_property"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["Gram"] = "金性グラム";
	$fieldToolTipsmarket_product_performance["Japanese"]["Gram"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["Gram"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["Parent_stone"] = "親石";
	$fieldToolTipsmarket_product_performance["Japanese"]["Parent_stone"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["Parent_stone"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["Aside_stone"] = "脇石";
	$fieldToolTipsmarket_product_performance["Japanese"]["Aside_stone"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["Aside_stone"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["Appraiser"] = "鑑定機関";
	$fieldToolTipsmarket_product_performance["Japanese"]["Appraiser"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["Appraiser"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["price_per_gram"] = "金性単価";
	$fieldToolTipsmarket_product_performance["Japanese"]["price_per_gram"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["price_per_gram"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["DA_YOURNAME"] = "芳名";
	$fieldToolTipsmarket_product_performance["Japanese"]["DA_YOURNAME"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["DA_YOURNAME"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["ichiba_meeting_month"] = "年月";
	$fieldToolTipsmarket_product_performance["Japanese"]["ichiba_meeting_month"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["ichiba_meeting_month"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["ichiba_meeting_name"] = "会";
	$fieldToolTipsmarket_product_performance["Japanese"]["ichiba_meeting_name"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["ichiba_meeting_name"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["ichiba_color"] = "カラー";
	$fieldToolTipsmarket_product_performance["Japanese"]["ichiba_color"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["ichiba_color"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["ichiba_clarity"] = "クラ";
	$fieldToolTipsmarket_product_performance["Japanese"]["ichiba_clarity"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["ichiba_clarity"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["ichiba_melee_gai"] = "メレガイ";
	$fieldToolTipsmarket_product_performance["Japanese"]["ichiba_melee_gai"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["ichiba_melee_gai"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["ichiba_lot_pieces"] = "lot pieces";
	$fieldToolTipsmarket_product_performance["Japanese"]["ichiba_lot_pieces"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["ichiba_lot_pieces"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["ichiba_image"] = "画像";
	$fieldToolTipsmarket_product_performance["Japanese"]["ichiba_image"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["ichiba_image"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["shape"] = "シェイプ";
	$fieldToolTipsmarket_product_performance["Japanese"]["shape"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["shape"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["zeinuki"] = "代金税抜";
	$fieldToolTipsmarket_product_performance["Japanese"]["zeinuki"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["zeinuki"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["avg"] = "Avg";
	$fieldToolTipsmarket_product_performance["Japanese"]["avg"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["avg"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["charagai"] = "親石＠";
	$fieldToolTipsmarket_product_performance["Japanese"]["charagai"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["charagai"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["sagaku"] = "差額";
	$fieldToolTipsmarket_product_performance["Japanese"]["sagaku"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["sagaku"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["arari"] = "粗利";
	$fieldToolTipsmarket_product_performance["Japanese"]["arari"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["arari"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["buy_tax"] = "Buy Tax";
	$fieldToolTipsmarket_product_performance["Japanese"]["buy_tax"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["buy_tax"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["sell_tax"] = "Sell Tax";
	$fieldToolTipsmarket_product_performance["Japanese"]["sell_tax"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["sell_tax"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["status"] = "商品状態";
	$fieldToolTipsmarket_product_performance["Japanese"]["status"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["status"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["price"] = "買取額";
	$fieldToolTipsmarket_product_performance["Japanese"]["price"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["price"] = "";
	$fieldLabelsmarket_product_performance["Japanese"]["ichiba_img"] = "画像";
	$fieldToolTipsmarket_product_performance["Japanese"]["ichiba_img"] = "";
	$placeHoldersmarket_product_performance["Japanese"]["ichiba_img"] = "";
	if (count($fieldToolTipsmarket_product_performance["Japanese"]))
		$tdatamarket_product_performance[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmarket_product_performance[""] = array();
	$fieldToolTipsmarket_product_performance[""] = array();
	$placeHoldersmarket_product_performance[""] = array();
	$pageTitlesmarket_product_performance[""] = array();
	$fieldLabelsmarket_product_performance[""]["DA_YOURNAME"] = "DA YOURNAME";
	$fieldToolTipsmarket_product_performance[""]["DA_YOURNAME"] = "";
	$placeHoldersmarket_product_performance[""]["DA_YOURNAME"] = "";
	$fieldLabelsmarket_product_performance[""]["ichiba_meeting_month"] = "Ichiba Meeting Month";
	$fieldToolTipsmarket_product_performance[""]["ichiba_meeting_month"] = "";
	$placeHoldersmarket_product_performance[""]["ichiba_meeting_month"] = "";
	$fieldLabelsmarket_product_performance[""]["ichiba_meeting_name"] = "Ichiba Meeting Name";
	$fieldToolTipsmarket_product_performance[""]["ichiba_meeting_name"] = "";
	$placeHoldersmarket_product_performance[""]["ichiba_meeting_name"] = "";
	$fieldLabelsmarket_product_performance[""]["ichiba_color"] = "Ichiba Color";
	$fieldToolTipsmarket_product_performance[""]["ichiba_color"] = "";
	$placeHoldersmarket_product_performance[""]["ichiba_color"] = "";
	$fieldLabelsmarket_product_performance[""]["ichiba_clarity"] = "Ichiba Clarity";
	$fieldToolTipsmarket_product_performance[""]["ichiba_clarity"] = "";
	$placeHoldersmarket_product_performance[""]["ichiba_clarity"] = "";
	$fieldLabelsmarket_product_performance[""]["ichiba_melee_gai"] = "Ichiba Melee Gai";
	$fieldToolTipsmarket_product_performance[""]["ichiba_melee_gai"] = "";
	$placeHoldersmarket_product_performance[""]["ichiba_melee_gai"] = "";
	$fieldLabelsmarket_product_performance[""]["ichiba_lot_pieces"] = "Ichiba Lot Pieces";
	$fieldToolTipsmarket_product_performance[""]["ichiba_lot_pieces"] = "";
	$placeHoldersmarket_product_performance[""]["ichiba_lot_pieces"] = "";
	$fieldLabelsmarket_product_performance[""]["ichiba_image"] = "Ichiba Image";
	$fieldToolTipsmarket_product_performance[""]["ichiba_image"] = "";
	$placeHoldersmarket_product_performance[""]["ichiba_image"] = "";
	$fieldLabelsmarket_product_performance[""]["shape"] = "Shape";
	$fieldToolTipsmarket_product_performance[""]["shape"] = "";
	$placeHoldersmarket_product_performance[""]["shape"] = "";
	$fieldLabelsmarket_product_performance[""]["zeinuki"] = "Zeinuki";
	$fieldToolTipsmarket_product_performance[""]["zeinuki"] = "";
	$placeHoldersmarket_product_performance[""]["zeinuki"] = "";
	$fieldLabelsmarket_product_performance[""]["avg"] = "Avg";
	$fieldToolTipsmarket_product_performance[""]["avg"] = "";
	$placeHoldersmarket_product_performance[""]["avg"] = "";
	$fieldLabelsmarket_product_performance[""]["charagai"] = "Charagai";
	$fieldToolTipsmarket_product_performance[""]["charagai"] = "";
	$placeHoldersmarket_product_performance[""]["charagai"] = "";
	$fieldLabelsmarket_product_performance[""]["sagaku"] = "Sagaku";
	$fieldToolTipsmarket_product_performance[""]["sagaku"] = "";
	$placeHoldersmarket_product_performance[""]["sagaku"] = "";
	$fieldLabelsmarket_product_performance[""]["arari"] = "Arari";
	$fieldToolTipsmarket_product_performance[""]["arari"] = "";
	$placeHoldersmarket_product_performance[""]["arari"] = "";
	$fieldLabelsmarket_product_performance[""]["buy_tax"] = "Buy Tax";
	$fieldToolTipsmarket_product_performance[""]["buy_tax"] = "";
	$placeHoldersmarket_product_performance[""]["buy_tax"] = "";
	$fieldLabelsmarket_product_performance[""]["sell_tax"] = "Sell Tax";
	$fieldToolTipsmarket_product_performance[""]["sell_tax"] = "";
	$placeHoldersmarket_product_performance[""]["sell_tax"] = "";
	$fieldLabelsmarket_product_performance[""]["status"] = "Status";
	$fieldToolTipsmarket_product_performance[""]["status"] = "";
	$placeHoldersmarket_product_performance[""]["status"] = "";
	$fieldLabelsmarket_product_performance[""]["price"] = "Price";
	$fieldToolTipsmarket_product_performance[""]["price"] = "";
	$placeHoldersmarket_product_performance[""]["price"] = "";
	$fieldLabelsmarket_product_performance[""]["ichiba_img"] = "Ichiba Img";
	$fieldToolTipsmarket_product_performance[""]["ichiba_img"] = "";
	$placeHoldersmarket_product_performance[""]["ichiba_img"] = "";
	if (count($fieldToolTipsmarket_product_performance[""]))
		$tdatamarket_product_performance[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmarket_product_performance["English"] = array();
	$fieldToolTipsmarket_product_performance["English"] = array();
	$placeHoldersmarket_product_performance["English"] = array();
	$pageTitlesmarket_product_performance["English"] = array();
	$fieldLabelsmarket_product_performance["English"]["DA_YOURNAME"] = "DA YOURNAME";
	$fieldToolTipsmarket_product_performance["English"]["DA_YOURNAME"] = "";
	$placeHoldersmarket_product_performance["English"]["DA_YOURNAME"] = "";
	$fieldLabelsmarket_product_performance["English"]["ichiba_meeting_month"] = "Ichiba Meeting Month";
	$fieldToolTipsmarket_product_performance["English"]["ichiba_meeting_month"] = "";
	$placeHoldersmarket_product_performance["English"]["ichiba_meeting_month"] = "";
	$fieldLabelsmarket_product_performance["English"]["ichiba_meeting_name"] = "Ichiba Meeting Name";
	$fieldToolTipsmarket_product_performance["English"]["ichiba_meeting_name"] = "";
	$placeHoldersmarket_product_performance["English"]["ichiba_meeting_name"] = "";
	$fieldLabelsmarket_product_performance["English"]["ichiba_color"] = "Ichiba Color";
	$fieldToolTipsmarket_product_performance["English"]["ichiba_color"] = "";
	$placeHoldersmarket_product_performance["English"]["ichiba_color"] = "";
	$fieldLabelsmarket_product_performance["English"]["ichiba_clarity"] = "Ichiba Clarity";
	$fieldToolTipsmarket_product_performance["English"]["ichiba_clarity"] = "";
	$placeHoldersmarket_product_performance["English"]["ichiba_clarity"] = "";
	$fieldLabelsmarket_product_performance["English"]["ichiba_melee_gai"] = "Ichiba Melee Gai";
	$fieldToolTipsmarket_product_performance["English"]["ichiba_melee_gai"] = "";
	$placeHoldersmarket_product_performance["English"]["ichiba_melee_gai"] = "";
	$fieldLabelsmarket_product_performance["English"]["ichiba_lot_pieces"] = "Ichiba Lot Pieces";
	$fieldToolTipsmarket_product_performance["English"]["ichiba_lot_pieces"] = "";
	$placeHoldersmarket_product_performance["English"]["ichiba_lot_pieces"] = "";
	$fieldLabelsmarket_product_performance["English"]["ichiba_image"] = "Ichiba Image";
	$fieldToolTipsmarket_product_performance["English"]["ichiba_image"] = "";
	$placeHoldersmarket_product_performance["English"]["ichiba_image"] = "";
	$fieldLabelsmarket_product_performance["English"]["shape"] = "Shape";
	$fieldToolTipsmarket_product_performance["English"]["shape"] = "";
	$placeHoldersmarket_product_performance["English"]["shape"] = "";
	$fieldLabelsmarket_product_performance["English"]["zeinuki"] = "Zeinuki";
	$fieldToolTipsmarket_product_performance["English"]["zeinuki"] = "";
	$placeHoldersmarket_product_performance["English"]["zeinuki"] = "";
	$fieldLabelsmarket_product_performance["English"]["avg"] = "Avg";
	$fieldToolTipsmarket_product_performance["English"]["avg"] = "";
	$placeHoldersmarket_product_performance["English"]["avg"] = "";
	$fieldLabelsmarket_product_performance["English"]["charagai"] = "Charagai";
	$fieldToolTipsmarket_product_performance["English"]["charagai"] = "";
	$placeHoldersmarket_product_performance["English"]["charagai"] = "";
	$fieldLabelsmarket_product_performance["English"]["sagaku"] = "Sagaku";
	$fieldToolTipsmarket_product_performance["English"]["sagaku"] = "";
	$placeHoldersmarket_product_performance["English"]["sagaku"] = "";
	$fieldLabelsmarket_product_performance["English"]["arari"] = "Arari";
	$fieldToolTipsmarket_product_performance["English"]["arari"] = "";
	$placeHoldersmarket_product_performance["English"]["arari"] = "";
	$fieldLabelsmarket_product_performance["English"]["buy_tax"] = "Buy Tax";
	$fieldToolTipsmarket_product_performance["English"]["buy_tax"] = "";
	$placeHoldersmarket_product_performance["English"]["buy_tax"] = "";
	$fieldLabelsmarket_product_performance["English"]["sell_tax"] = "Sell Tax";
	$fieldToolTipsmarket_product_performance["English"]["sell_tax"] = "";
	$placeHoldersmarket_product_performance["English"]["sell_tax"] = "";
	$fieldLabelsmarket_product_performance["English"]["status"] = "Status";
	$fieldToolTipsmarket_product_performance["English"]["status"] = "";
	$placeHoldersmarket_product_performance["English"]["status"] = "";
	$fieldLabelsmarket_product_performance["English"]["price"] = "Price";
	$fieldToolTipsmarket_product_performance["English"]["price"] = "";
	$placeHoldersmarket_product_performance["English"]["price"] = "";
	$fieldLabelsmarket_product_performance["English"]["ichiba_img"] = "Ichiba Img";
	$fieldToolTipsmarket_product_performance["English"]["ichiba_img"] = "";
	$placeHoldersmarket_product_performance["English"]["ichiba_img"] = "";
	if (count($fieldToolTipsmarket_product_performance["English"]))
		$tdatamarket_product_performance[".isUseToolTips"] = true;
}


	$tdatamarket_product_performance[".NCSearch"] = true;



$tdatamarket_product_performance[".shortTableName"] = "market_product_performance";
$tdatamarket_product_performance[".nSecOptions"] = 0;
$tdatamarket_product_performance[".recsPerRowPrint"] = 1;
$tdatamarket_product_performance[".mainTableOwnerID"] = "";
$tdatamarket_product_performance[".moveNext"] = 1;
$tdatamarket_product_performance[".entityType"] = 1;

$tdatamarket_product_performance[".strOriginalTableName"] = "shouhin";

	



$tdatamarket_product_performance[".showAddInPopup"] = false;

$tdatamarket_product_performance[".showEditInPopup"] = false;

$tdatamarket_product_performance[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamarket_product_performance[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamarket_product_performance[".fieldsForRegister"] = array();

$tdatamarket_product_performance[".listAjax"] = false;

	$tdatamarket_product_performance[".audit"] = true;

	$tdatamarket_product_performance[".locking"] = false;



$tdatamarket_product_performance[".list"] = true;

$tdatamarket_product_performance[".inlineEdit"] = true;


$tdatamarket_product_performance[".reorderRecordsByHeader"] = true;
$tdatamarket_product_performance[".createSortByDropdown"] = true;
$tdatamarket_product_performance[".strSortControlSettingsJSON"] = "";




$tdatamarket_product_performance[".import"] = true;

$tdatamarket_product_performance[".exportTo"] = true;


$tdatamarket_product_performance[".delete"] = true;

$tdatamarket_product_performance[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamarket_product_performance[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamarket_product_performance[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamarket_product_performance[".searchSaving"] = false;
//

$tdatamarket_product_performance[".showSearchPanel"] = true;
		$tdatamarket_product_performance[".flexibleSearch"] = true;

$tdatamarket_product_performance[".isUseAjaxSuggest"] = true;

$tdatamarket_product_performance[".rowHighlite"] = true;



																																																																																																																																																																		
					
					
					
					
					
																																																											

$tdatamarket_product_performance[".ajaxCodeSnippetAdded"] = false;

$tdatamarket_product_performance[".buttonsAdded"] = true;

$tdatamarket_product_performance[".addPageEvents"] = true;

// use timepicker for search panel
$tdatamarket_product_performance[".isUseTimeForSearch"] = false;



$tdatamarket_product_performance[".badgeColor"] = "E67349";


$tdatamarket_product_performance[".allSearchFields"] = array();
$tdatamarket_product_performance[".filterFields"] = array();
$tdatamarket_product_performance[".requiredSearchFields"] = array();

$tdatamarket_product_performance[".allSearchFields"][] = "ichiba_meeting_month";
	$tdatamarket_product_performance[".allSearchFields"][] = "ichiba_meeting_name";
	$tdatamarket_product_performance[".allSearchFields"][] = "product_id";
	$tdatamarket_product_performance[".allSearchFields"][] = "category_id";
	$tdatamarket_product_performance[".allSearchFields"][] = "sub_category_id1";
	$tdatamarket_product_performance[".allSearchFields"][] = "gold_property";
	$tdatamarket_product_performance[".allSearchFields"][] = "shape";
	$tdatamarket_product_performance[".allSearchFields"][] = "Parent_stone";
	$tdatamarket_product_performance[".allSearchFields"][] = "Aside_stone";
	$tdatamarket_product_performance[".allSearchFields"][] = "title";
	$tdatamarket_product_performance[".allSearchFields"][] = "comment";
	$tdatamarket_product_performance[".allSearchFields"][] = "ichiba_color";
	$tdatamarket_product_performance[".allSearchFields"][] = "ichiba_clarity";
	$tdatamarket_product_performance[".allSearchFields"][] = "price_per_gram";
	$tdatamarket_product_performance[".allSearchFields"][] = "Gram";
	$tdatamarket_product_performance[".allSearchFields"][] = "ichiba_melee_gai";
	$tdatamarket_product_performance[".allSearchFields"][] = "Appraiser";
	$tdatamarket_product_performance[".allSearchFields"][] = "zeinuki";
	$tdatamarket_product_performance[".allSearchFields"][] = "nyuukin_price";
	$tdatamarket_product_performance[".allSearchFields"][] = "ichiba_lot_pieces";
	$tdatamarket_product_performance[".allSearchFields"][] = "avg";
	$tdatamarket_product_performance[".allSearchFields"][] = "DA_YOURNAME";
	$tdatamarket_product_performance[".allSearchFields"][] = "ichiba_img";
	$tdatamarket_product_performance[".allSearchFields"][] = "charagai";
	$tdatamarket_product_performance[".allSearchFields"][] = "price";
	$tdatamarket_product_performance[".allSearchFields"][] = "sagaku";
	$tdatamarket_product_performance[".allSearchFields"][] = "arari";
	

$tdatamarket_product_performance[".googleLikeFields"] = array();
$tdatamarket_product_performance[".googleLikeFields"][] = "product_id";
$tdatamarket_product_performance[".googleLikeFields"][] = "category_id";
$tdatamarket_product_performance[".googleLikeFields"][] = "sub_category_id1";
$tdatamarket_product_performance[".googleLikeFields"][] = "title";
$tdatamarket_product_performance[".googleLikeFields"][] = "gold_property";
$tdatamarket_product_performance[".googleLikeFields"][] = "price_per_gram";
$tdatamarket_product_performance[".googleLikeFields"][] = "Gram";
$tdatamarket_product_performance[".googleLikeFields"][] = "Parent_stone";
$tdatamarket_product_performance[".googleLikeFields"][] = "Aside_stone";
$tdatamarket_product_performance[".googleLikeFields"][] = "nyuukin_price";
$tdatamarket_product_performance[".googleLikeFields"][] = "comment";
$tdatamarket_product_performance[".googleLikeFields"][] = "Appraiser";
$tdatamarket_product_performance[".googleLikeFields"][] = "DA_YOURNAME";
$tdatamarket_product_performance[".googleLikeFields"][] = "ichiba_meeting_month";
$tdatamarket_product_performance[".googleLikeFields"][] = "ichiba_meeting_name";
$tdatamarket_product_performance[".googleLikeFields"][] = "ichiba_color";
$tdatamarket_product_performance[".googleLikeFields"][] = "ichiba_clarity";
$tdatamarket_product_performance[".googleLikeFields"][] = "ichiba_melee_gai";
$tdatamarket_product_performance[".googleLikeFields"][] = "ichiba_lot_pieces";
$tdatamarket_product_performance[".googleLikeFields"][] = "ichiba_image";
$tdatamarket_product_performance[".googleLikeFields"][] = "shape";
$tdatamarket_product_performance[".googleLikeFields"][] = "zeinuki";
$tdatamarket_product_performance[".googleLikeFields"][] = "avg";
$tdatamarket_product_performance[".googleLikeFields"][] = "charagai";
$tdatamarket_product_performance[".googleLikeFields"][] = "sagaku";
$tdatamarket_product_performance[".googleLikeFields"][] = "arari";
$tdatamarket_product_performance[".googleLikeFields"][] = "buy_tax";
$tdatamarket_product_performance[".googleLikeFields"][] = "sell_tax";
$tdatamarket_product_performance[".googleLikeFields"][] = "status";
$tdatamarket_product_performance[".googleLikeFields"][] = "price";
$tdatamarket_product_performance[".googleLikeFields"][] = "ichiba_img";

$tdatamarket_product_performance[".panelSearchFields"] = array();
$tdatamarket_product_performance[".searchPanelOptions"] = array();
$tdatamarket_product_performance[".panelSearchFields"][] = "product_id";
	$tdatamarket_product_performance[".panelSearchFields"][] = "category_id";
	$tdatamarket_product_performance[".panelSearchFields"][] = "sub_category_id1";
	$tdatamarket_product_performance[".panelSearchFields"][] = "gold_property";
	$tdatamarket_product_performance[".panelSearchFields"][] = "Parent_stone";
	$tdatamarket_product_performance[".panelSearchFields"][] = "Aside_stone";
	$tdatamarket_product_performance[".panelSearchFields"][] = "title";
	$tdatamarket_product_performance[".panelSearchFields"][] = "comment";
	$tdatamarket_product_performance[".panelSearchFields"][] = "price_per_gram";
	$tdatamarket_product_performance[".panelSearchFields"][] = "Gram";
	$tdatamarket_product_performance[".panelSearchFields"][] = "Appraiser";
	$tdatamarket_product_performance[".panelSearchFields"][] = "nyuukin_price";
	
$tdatamarket_product_performance[".advSearchFields"] = array();
$tdatamarket_product_performance[".advSearchFields"][] = "ichiba_meeting_month";
$tdatamarket_product_performance[".advSearchFields"][] = "ichiba_meeting_name";
$tdatamarket_product_performance[".advSearchFields"][] = "product_id";
$tdatamarket_product_performance[".advSearchFields"][] = "category_id";
$tdatamarket_product_performance[".advSearchFields"][] = "sub_category_id1";
$tdatamarket_product_performance[".advSearchFields"][] = "gold_property";
$tdatamarket_product_performance[".advSearchFields"][] = "shape";
$tdatamarket_product_performance[".advSearchFields"][] = "Parent_stone";
$tdatamarket_product_performance[".advSearchFields"][] = "Aside_stone";
$tdatamarket_product_performance[".advSearchFields"][] = "title";
$tdatamarket_product_performance[".advSearchFields"][] = "comment";
$tdatamarket_product_performance[".advSearchFields"][] = "ichiba_color";
$tdatamarket_product_performance[".advSearchFields"][] = "ichiba_clarity";
$tdatamarket_product_performance[".advSearchFields"][] = "price_per_gram";
$tdatamarket_product_performance[".advSearchFields"][] = "Gram";
$tdatamarket_product_performance[".advSearchFields"][] = "ichiba_melee_gai";
$tdatamarket_product_performance[".advSearchFields"][] = "Appraiser";
$tdatamarket_product_performance[".advSearchFields"][] = "zeinuki";
$tdatamarket_product_performance[".advSearchFields"][] = "nyuukin_price";
$tdatamarket_product_performance[".advSearchFields"][] = "ichiba_lot_pieces";
$tdatamarket_product_performance[".advSearchFields"][] = "avg";
$tdatamarket_product_performance[".advSearchFields"][] = "DA_YOURNAME";
$tdatamarket_product_performance[".advSearchFields"][] = "ichiba_img";
$tdatamarket_product_performance[".advSearchFields"][] = "charagai";
$tdatamarket_product_performance[".advSearchFields"][] = "price";
$tdatamarket_product_performance[".advSearchFields"][] = "sagaku";
$tdatamarket_product_performance[".advSearchFields"][] = "arari";

$tdatamarket_product_performance[".tableType"] = "list";

$tdatamarket_product_performance[".printerPageOrientation"] = 0;
$tdatamarket_product_performance[".nPrinterPageScale"] = 100;

$tdatamarket_product_performance[".nPrinterSplitRecords"] = 40;

$tdatamarket_product_performance[".nPrinterPDFSplitRecords"] = 40;



$tdatamarket_product_performance[".geocodingEnabled"] = false;





$tdatamarket_product_performance[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatamarket_product_performance[".totalsFields"] = array();
$tdatamarket_product_performance[".totalsFields"][] = array(
	"fName" => "nyuukin_price",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');

$tdatamarket_product_performance[".pageSize"] = 20;

$tdatamarket_product_performance[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shouhin`.`product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamarket_product_performance[".strOrderBy"] = $tstrOrderBy;

$tdatamarket_product_performance[".orderindexes"] = array();
$tdatamarket_product_performance[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`shouhin`.`product_id`");

$tdatamarket_product_performance[".sqlHead"] = "SELECT `shouhin`.`product_id`,  `shouhin`.`category_id`,  `shouhin`.`sub_category_id1`,  `shouhin`.`title`,  `shouhin`.`gold_property`,  `shouhin`.`price_per_gram`,  `shouhin`.`Gram`,  `shouhin`.`Parent_stone`,  `shouhin`.`Aside_stone`,  `shouhin`.`nyuukin_price`,  `shouhin`.`comment`,  `shouhin`.`Appraiser`,  `shouhin`.`DA_YOURNAME`,  `shouhin`.`ichiba_meeting_month`,  `shouhin`.`ichiba_meeting_name`,  `shouhin`.`ichiba_color`,  `shouhin`.`ichiba_clarity`,  `shouhin`.`ichiba_melee_gai`,  `shouhin`.`ichiba_lot_pieces`,  `shouhin`.`ichiba_image`,  `shouhin`.`shape`,  `shouhin`.`nyuukin_price` AS `zeinuki`,  '' AS `avg`,  '' AS `charagai`,  '' AS `sagaku`,  '' AS `arari`,  `shouhin_tax`.`buy_tax`,  `shouhin_tax`.`sell_tax`,  `shouhin`.`status`,  `shouhin`.`price`,  `shouhin`.`ichiba_img`";
$tdatamarket_product_performance[".sqlFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `shouhin_tax` ON `shouhin`.`product_id` = `shouhin_tax`.`product_id`";
$tdatamarket_product_performance[".sqlWhereExpr"] = "(`shouhin`.`status` =118)";
$tdatamarket_product_performance[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamarket_product_performance[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamarket_product_performance[".arrGroupsPerPage"] = $arrGPP;

$tdatamarket_product_performance[".highlightSearchResults"] = true;

$tableKeysmarket_product_performance = array();
$tableKeysmarket_product_performance[] = "product_id";
$tdatamarket_product_performance[".Keys"] = $tableKeysmarket_product_performance;

$tdatamarket_product_performance[".listFields"] = array();
$tdatamarket_product_performance[".listFields"][] = "ichiba_meeting_month";
$tdatamarket_product_performance[".listFields"][] = "ichiba_meeting_name";
$tdatamarket_product_performance[".listFields"][] = "sub_category_id1";
$tdatamarket_product_performance[".listFields"][] = "shape";
$tdatamarket_product_performance[".listFields"][] = "ichiba_color";
$tdatamarket_product_performance[".listFields"][] = "ichiba_clarity";
$tdatamarket_product_performance[".listFields"][] = "category_id";
$tdatamarket_product_performance[".listFields"][] = "title";
$tdatamarket_product_performance[".listFields"][] = "gold_property";
$tdatamarket_product_performance[".listFields"][] = "price_per_gram";
$tdatamarket_product_performance[".listFields"][] = "Gram";
$tdatamarket_product_performance[".listFields"][] = "Parent_stone";
$tdatamarket_product_performance[".listFields"][] = "Aside_stone";
$tdatamarket_product_performance[".listFields"][] = "ichiba_melee_gai";
$tdatamarket_product_performance[".listFields"][] = "Appraiser";
$tdatamarket_product_performance[".listFields"][] = "zeinuki";
$tdatamarket_product_performance[".listFields"][] = "nyuukin_price";
$tdatamarket_product_performance[".listFields"][] = "ichiba_lot_pieces";
$tdatamarket_product_performance[".listFields"][] = "avg";
$tdatamarket_product_performance[".listFields"][] = "comment";
$tdatamarket_product_performance[".listFields"][] = "product_id";
$tdatamarket_product_performance[".listFields"][] = "DA_YOURNAME";
$tdatamarket_product_performance[".listFields"][] = "ichiba_img";
$tdatamarket_product_performance[".listFields"][] = "charagai";
$tdatamarket_product_performance[".listFields"][] = "price";
$tdatamarket_product_performance[".listFields"][] = "sagaku";
$tdatamarket_product_performance[".listFields"][] = "arari";

$tdatamarket_product_performance[".hideMobileList"] = array();


$tdatamarket_product_performance[".viewFields"] = array();

$tdatamarket_product_performance[".addFields"] = array();

$tdatamarket_product_performance[".masterListFields"] = array();
$tdatamarket_product_performance[".masterListFields"][] = "buy_tax";
$tdatamarket_product_performance[".masterListFields"][] = "sell_tax";
$tdatamarket_product_performance[".masterListFields"][] = "status";
$tdatamarket_product_performance[".masterListFields"][] = "ichiba_meeting_month";
$tdatamarket_product_performance[".masterListFields"][] = "ichiba_meeting_name";
$tdatamarket_product_performance[".masterListFields"][] = "sub_category_id1";
$tdatamarket_product_performance[".masterListFields"][] = "shape";
$tdatamarket_product_performance[".masterListFields"][] = "ichiba_color";
$tdatamarket_product_performance[".masterListFields"][] = "ichiba_clarity";
$tdatamarket_product_performance[".masterListFields"][] = "category_id";
$tdatamarket_product_performance[".masterListFields"][] = "title";
$tdatamarket_product_performance[".masterListFields"][] = "gold_property";
$tdatamarket_product_performance[".masterListFields"][] = "price_per_gram";
$tdatamarket_product_performance[".masterListFields"][] = "Gram";
$tdatamarket_product_performance[".masterListFields"][] = "Parent_stone";
$tdatamarket_product_performance[".masterListFields"][] = "Aside_stone";
$tdatamarket_product_performance[".masterListFields"][] = "ichiba_melee_gai";
$tdatamarket_product_performance[".masterListFields"][] = "Appraiser";
$tdatamarket_product_performance[".masterListFields"][] = "zeinuki";
$tdatamarket_product_performance[".masterListFields"][] = "nyuukin_price";
$tdatamarket_product_performance[".masterListFields"][] = "ichiba_lot_pieces";
$tdatamarket_product_performance[".masterListFields"][] = "avg";
$tdatamarket_product_performance[".masterListFields"][] = "comment";
$tdatamarket_product_performance[".masterListFields"][] = "product_id";
$tdatamarket_product_performance[".masterListFields"][] = "DA_YOURNAME";
$tdatamarket_product_performance[".masterListFields"][] = "ichiba_image";
$tdatamarket_product_performance[".masterListFields"][] = "ichiba_img";
$tdatamarket_product_performance[".masterListFields"][] = "charagai";
$tdatamarket_product_performance[".masterListFields"][] = "price";
$tdatamarket_product_performance[".masterListFields"][] = "sagaku";
$tdatamarket_product_performance[".masterListFields"][] = "arari";

$tdatamarket_product_performance[".inlineAddFields"] = array();

$tdatamarket_product_performance[".editFields"] = array();

$tdatamarket_product_performance[".inlineEditFields"] = array();
$tdatamarket_product_performance[".inlineEditFields"][] = "ichiba_meeting_month";
$tdatamarket_product_performance[".inlineEditFields"][] = "ichiba_meeting_name";
$tdatamarket_product_performance[".inlineEditFields"][] = "sub_category_id1";
$tdatamarket_product_performance[".inlineEditFields"][] = "shape";
$tdatamarket_product_performance[".inlineEditFields"][] = "ichiba_color";
$tdatamarket_product_performance[".inlineEditFields"][] = "ichiba_clarity";
$tdatamarket_product_performance[".inlineEditFields"][] = "category_id";
$tdatamarket_product_performance[".inlineEditFields"][] = "title";
$tdatamarket_product_performance[".inlineEditFields"][] = "gold_property";
$tdatamarket_product_performance[".inlineEditFields"][] = "price_per_gram";
$tdatamarket_product_performance[".inlineEditFields"][] = "Gram";
$tdatamarket_product_performance[".inlineEditFields"][] = "Parent_stone";
$tdatamarket_product_performance[".inlineEditFields"][] = "Aside_stone";
$tdatamarket_product_performance[".inlineEditFields"][] = "ichiba_melee_gai";
$tdatamarket_product_performance[".inlineEditFields"][] = "Appraiser";
$tdatamarket_product_performance[".inlineEditFields"][] = "nyuukin_price";
$tdatamarket_product_performance[".inlineEditFields"][] = "ichiba_lot_pieces";
$tdatamarket_product_performance[".inlineEditFields"][] = "comment";
$tdatamarket_product_performance[".inlineEditFields"][] = "DA_YOURNAME";
$tdatamarket_product_performance[".inlineEditFields"][] = "ichiba_img";

$tdatamarket_product_performance[".updateSelectedFields"] = array();


$tdatamarket_product_performance[".exportFields"] = array();
$tdatamarket_product_performance[".exportFields"][] = "ichiba_meeting_month";
$tdatamarket_product_performance[".exportFields"][] = "ichiba_meeting_name";
$tdatamarket_product_performance[".exportFields"][] = "sub_category_id1";
$tdatamarket_product_performance[".exportFields"][] = "shape";
$tdatamarket_product_performance[".exportFields"][] = "ichiba_color";
$tdatamarket_product_performance[".exportFields"][] = "ichiba_clarity";
$tdatamarket_product_performance[".exportFields"][] = "category_id";
$tdatamarket_product_performance[".exportFields"][] = "title";
$tdatamarket_product_performance[".exportFields"][] = "gold_property";
$tdatamarket_product_performance[".exportFields"][] = "price_per_gram";
$tdatamarket_product_performance[".exportFields"][] = "Gram";
$tdatamarket_product_performance[".exportFields"][] = "Parent_stone";
$tdatamarket_product_performance[".exportFields"][] = "Aside_stone";
$tdatamarket_product_performance[".exportFields"][] = "ichiba_melee_gai";
$tdatamarket_product_performance[".exportFields"][] = "Appraiser";
$tdatamarket_product_performance[".exportFields"][] = "zeinuki";
$tdatamarket_product_performance[".exportFields"][] = "nyuukin_price";
$tdatamarket_product_performance[".exportFields"][] = "ichiba_lot_pieces";
$tdatamarket_product_performance[".exportFields"][] = "avg";
$tdatamarket_product_performance[".exportFields"][] = "comment";
$tdatamarket_product_performance[".exportFields"][] = "product_id";
$tdatamarket_product_performance[".exportFields"][] = "DA_YOURNAME";
$tdatamarket_product_performance[".exportFields"][] = "ichiba_img";
$tdatamarket_product_performance[".exportFields"][] = "charagai";
$tdatamarket_product_performance[".exportFields"][] = "price";
$tdatamarket_product_performance[".exportFields"][] = "sagaku";
$tdatamarket_product_performance[".exportFields"][] = "arari";

$tdatamarket_product_performance[".importFields"] = array();
$tdatamarket_product_performance[".importFields"][] = "product_id";
$tdatamarket_product_performance[".importFields"][] = "category_id";
$tdatamarket_product_performance[".importFields"][] = "sub_category_id1";
$tdatamarket_product_performance[".importFields"][] = "title";
$tdatamarket_product_performance[".importFields"][] = "gold_property";
$tdatamarket_product_performance[".importFields"][] = "price_per_gram";
$tdatamarket_product_performance[".importFields"][] = "Gram";
$tdatamarket_product_performance[".importFields"][] = "Parent_stone";
$tdatamarket_product_performance[".importFields"][] = "Aside_stone";
$tdatamarket_product_performance[".importFields"][] = "nyuukin_price";
$tdatamarket_product_performance[".importFields"][] = "comment";
$tdatamarket_product_performance[".importFields"][] = "Appraiser";
$tdatamarket_product_performance[".importFields"][] = "DA_YOURNAME";
$tdatamarket_product_performance[".importFields"][] = "ichiba_meeting_month";
$tdatamarket_product_performance[".importFields"][] = "ichiba_meeting_name";
$tdatamarket_product_performance[".importFields"][] = "ichiba_color";
$tdatamarket_product_performance[".importFields"][] = "ichiba_clarity";
$tdatamarket_product_performance[".importFields"][] = "ichiba_melee_gai";
$tdatamarket_product_performance[".importFields"][] = "ichiba_lot_pieces";
$tdatamarket_product_performance[".importFields"][] = "shape";
$tdatamarket_product_performance[".importFields"][] = "zeinuki";
$tdatamarket_product_performance[".importFields"][] = "avg";
$tdatamarket_product_performance[".importFields"][] = "charagai";
$tdatamarket_product_performance[".importFields"][] = "sagaku";
$tdatamarket_product_performance[".importFields"][] = "arari";
$tdatamarket_product_performance[".importFields"][] = "ichiba_img";

$tdatamarket_product_performance[".printFields"] = array();

//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","product_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`product_id`";

	
	
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




	$tdatamarket_product_performance["product_id"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
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
	$edata["LinkFieldType"] = 3;
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




	$tdatamarket_product_performance["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
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
	$edata["LinkFieldType"] = 3;
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




	$tdatamarket_product_performance["sub_category_id1"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamarket_product_performance["title"] = $fdata;
//	gold_property
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "gold_property";
	$fdata["GoodName"] = "gold_property";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","gold_property");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gold_property";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`gold_property`";

	
	
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




	$tdatamarket_product_performance["gold_property"] = $fdata;
//	price_per_gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "price_per_gram";
	$fdata["GoodName"] = "price_per_gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","price_per_gram");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price_per_gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`price_per_gram`";

	
	
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




	$tdatamarket_product_performance["price_per_gram"] = $fdata;
//	Gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Gram";
	$fdata["GoodName"] = "Gram";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","Gram");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Gram`";

	
	
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




	$tdatamarket_product_performance["Gram"] = $fdata;
//	Parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Parent_stone";
	$fdata["GoodName"] = "Parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","Parent_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Parent_stone`";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamarket_product_performance["Parent_stone"] = $fdata;
//	Aside_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Aside_stone";
	$fdata["GoodName"] = "Aside_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","Aside_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Aside_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Aside_stone`";

	
	
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




	$tdatamarket_product_performance["Aside_stone"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","nyuukin_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatamarket_product_performance["nyuukin_price"] = $fdata;
//	comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "comment";
	$fdata["GoodName"] = "comment";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","comment");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatamarket_product_performance["comment"] = $fdata;
//	Appraiser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Appraiser";
	$fdata["GoodName"] = "Appraiser";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","Appraiser");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Appraiser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Appraiser`";

	
	
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




	$tdatamarket_product_performance["Appraiser"] = $fdata;
//	DA_YOURNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DA_YOURNAME";
	$fdata["GoodName"] = "DA_YOURNAME";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","DA_YOURNAME");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_YOURNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_YOURNAME`";

	
	
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
	$edata["LookupTable"] = "_DIA_DA_CUSTOMER";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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




	$tdatamarket_product_performance["DA_YOURNAME"] = $fdata;
//	ichiba_meeting_month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ichiba_meeting_month";
	$fdata["GoodName"] = "ichiba_meeting_month";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","ichiba_meeting_month");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_meeting_month";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`ichiba_meeting_month`";

	
	
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




	$tdatamarket_product_performance["ichiba_meeting_month"] = $fdata;
//	ichiba_meeting_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ichiba_meeting_name";
	$fdata["GoodName"] = "ichiba_meeting_name";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","ichiba_meeting_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_meeting_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`ichiba_meeting_name`";

	
	
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




	$tdatamarket_product_performance["ichiba_meeting_name"] = $fdata;
//	ichiba_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ichiba_color";
	$fdata["GoodName"] = "ichiba_color";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","ichiba_color");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_color";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`ichiba_color`";

	
	
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




	$tdatamarket_product_performance["ichiba_color"] = $fdata;
//	ichiba_clarity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ichiba_clarity";
	$fdata["GoodName"] = "ichiba_clarity";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","ichiba_clarity");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_clarity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`ichiba_clarity`";

	
	
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




	$tdatamarket_product_performance["ichiba_clarity"] = $fdata;
//	ichiba_melee_gai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "ichiba_melee_gai";
	$fdata["GoodName"] = "ichiba_melee_gai";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","ichiba_melee_gai");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_melee_gai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`ichiba_melee_gai`";

	
	
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




	$tdatamarket_product_performance["ichiba_melee_gai"] = $fdata;
//	ichiba_lot_pieces
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ichiba_lot_pieces";
	$fdata["GoodName"] = "ichiba_lot_pieces";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","ichiba_lot_pieces");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_lot_pieces";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`ichiba_lot_pieces`";

	
	
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




	$tdatamarket_product_performance["ichiba_lot_pieces"] = $fdata;
//	ichiba_image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "ichiba_image";
	$fdata["GoodName"] = "ichiba_image";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","ichiba_image");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ichiba_image";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`ichiba_image`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
		$edata["UseRTE"] = true;

	
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








	$tdatamarket_product_performance["ichiba_image"] = $fdata;
//	shape
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "shape";
	$fdata["GoodName"] = "shape";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","shape");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shape";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`shape`";

	
	
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
	$edata["LookupTable"] = "mst_shape";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamarket_product_performance["shape"] = $fdata;
//	zeinuki
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "zeinuki";
	$fdata["GoodName"] = "zeinuki";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","zeinuki");
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




	$tdatamarket_product_performance["zeinuki"] = $fdata;
//	avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "avg";
	$fdata["GoodName"] = "avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("market_product_performance","avg");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "avg";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
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




	$tdatamarket_product_performance["avg"] = $fdata;
//	charagai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "charagai";
	$fdata["GoodName"] = "charagai";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("market_product_performance","charagai");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "charagai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
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




	$tdatamarket_product_performance["charagai"] = $fdata;
//	sagaku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "sagaku";
	$fdata["GoodName"] = "sagaku";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("market_product_performance","sagaku");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sagaku";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
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




	$tdatamarket_product_performance["sagaku"] = $fdata;
//	arari
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "arari";
	$fdata["GoodName"] = "arari";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("market_product_performance","arari");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "arari";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
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




	$tdatamarket_product_performance["arari"] = $fdata;
//	buy_tax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "buy_tax";
	$fdata["GoodName"] = "buy_tax";
	$fdata["ownerTable"] = "shouhin_tax";
	$fdata["Label"] = GetFieldLabel("market_product_performance","buy_tax");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "buy_tax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_tax`.`buy_tax`";

	
	
			
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








	$tdatamarket_product_performance["buy_tax"] = $fdata;
//	sell_tax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "sell_tax";
	$fdata["GoodName"] = "sell_tax";
	$fdata["ownerTable"] = "shouhin_tax";
	$fdata["Label"] = GetFieldLabel("market_product_performance","sell_tax");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sell_tax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin_tax`.`sell_tax`";

	
	
			
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








	$tdatamarket_product_performance["sell_tax"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","status");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`status`";

	
	
			
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








	$tdatamarket_product_performance["status"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","price");
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




	$tdatamarket_product_performance["price"] = $fdata;
//	ichiba_img
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "ichiba_img";
	$fdata["GoodName"] = "ichiba_img";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("market_product_performance","ichiba_img");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_img";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`ichiba_img`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	



	
		$edata["UseRTE"] = true;

	
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




	$tdatamarket_product_performance["ichiba_img"] = $fdata;


$tables_data["market_product_performance"]=&$tdatamarket_product_performance;
$field_labels["market_product_performance"] = &$fieldLabelsmarket_product_performance;
$fieldToolTips["market_product_performance"] = &$fieldToolTipsmarket_product_performance;
$placeHolders["market_product_performance"] = &$placeHoldersmarket_product_performance;
$page_titles["market_product_performance"] = &$pageTitlesmarket_product_performance;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["market_product_performance"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["market_product_performance"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_market_product_performance()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`shouhin`.`product_id`,  `shouhin`.`category_id`,  `shouhin`.`sub_category_id1`,  `shouhin`.`title`,  `shouhin`.`gold_property`,  `shouhin`.`price_per_gram`,  `shouhin`.`Gram`,  `shouhin`.`Parent_stone`,  `shouhin`.`Aside_stone`,  `shouhin`.`nyuukin_price`,  `shouhin`.`comment`,  `shouhin`.`Appraiser`,  `shouhin`.`DA_YOURNAME`,  `shouhin`.`ichiba_meeting_month`,  `shouhin`.`ichiba_meeting_name`,  `shouhin`.`ichiba_color`,  `shouhin`.`ichiba_clarity`,  `shouhin`.`ichiba_melee_gai`,  `shouhin`.`ichiba_lot_pieces`,  `shouhin`.`ichiba_image`,  `shouhin`.`shape`,  `shouhin`.`nyuukin_price` AS `zeinuki`,  '' AS `avg`,  '' AS `charagai`,  '' AS `sagaku`,  '' AS `arari`,  `shouhin_tax`.`buy_tax`,  `shouhin_tax`.`sell_tax`,  `shouhin`.`status`,  `shouhin`.`price`,  `shouhin`.`ichiba_img`";
$proto0["m_strFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `shouhin_tax` ON `shouhin`.`product_id` = `shouhin_tax`.`product_id`";
$proto0["m_strWhere"] = "(`shouhin`.`status` =118)";
$proto0["m_strOrderBy"] = "ORDER BY `shouhin`.`product_id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`shouhin`.`status` =118";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=118";
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
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto6["m_sql"] = "`shouhin`.`product_id`";
$proto6["m_srcTableName"] = "market_product_performance";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto8["m_sql"] = "`shouhin`.`category_id`";
$proto8["m_srcTableName"] = "market_product_performance";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto10["m_sql"] = "`shouhin`.`sub_category_id1`";
$proto10["m_srcTableName"] = "market_product_performance";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto12["m_sql"] = "`shouhin`.`title`";
$proto12["m_srcTableName"] = "market_product_performance";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "gold_property",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto14["m_sql"] = "`shouhin`.`gold_property`";
$proto14["m_srcTableName"] = "market_product_performance";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "price_per_gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto16["m_sql"] = "`shouhin`.`price_per_gram`";
$proto16["m_srcTableName"] = "market_product_performance";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Gram",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto18["m_sql"] = "`shouhin`.`Gram`";
$proto18["m_srcTableName"] = "market_product_performance";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto20["m_sql"] = "`shouhin`.`Parent_stone`";
$proto20["m_srcTableName"] = "market_product_performance";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Aside_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto22["m_sql"] = "`shouhin`.`Aside_stone`";
$proto22["m_srcTableName"] = "market_product_performance";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto24["m_sql"] = "`shouhin`.`nyuukin_price`";
$proto24["m_srcTableName"] = "market_product_performance";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "comment",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto26["m_sql"] = "`shouhin`.`comment`";
$proto26["m_srcTableName"] = "market_product_performance";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Appraiser",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto28["m_sql"] = "`shouhin`.`Appraiser`";
$proto28["m_srcTableName"] = "market_product_performance";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_YOURNAME",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto30["m_sql"] = "`shouhin`.`DA_YOURNAME`";
$proto30["m_srcTableName"] = "market_product_performance";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_meeting_month",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto32["m_sql"] = "`shouhin`.`ichiba_meeting_month`";
$proto32["m_srcTableName"] = "market_product_performance";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_meeting_name",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto34["m_sql"] = "`shouhin`.`ichiba_meeting_name`";
$proto34["m_srcTableName"] = "market_product_performance";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_color",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto36["m_sql"] = "`shouhin`.`ichiba_color`";
$proto36["m_srcTableName"] = "market_product_performance";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_clarity",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto38["m_sql"] = "`shouhin`.`ichiba_clarity`";
$proto38["m_srcTableName"] = "market_product_performance";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_melee_gai",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto40["m_sql"] = "`shouhin`.`ichiba_melee_gai`";
$proto40["m_srcTableName"] = "market_product_performance";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_lot_pieces",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto42["m_sql"] = "`shouhin`.`ichiba_lot_pieces`";
$proto42["m_srcTableName"] = "market_product_performance";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_image",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto44["m_sql"] = "`shouhin`.`ichiba_image`";
$proto44["m_srcTableName"] = "market_product_performance";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "shape",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto46["m_sql"] = "`shouhin`.`shape`";
$proto46["m_srcTableName"] = "market_product_performance";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "nyuukin_price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto48["m_sql"] = "`shouhin`.`nyuukin_price`";
$proto48["m_srcTableName"] = "market_product_performance";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "zeinuki";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto50["m_sql"] = "''";
$proto50["m_srcTableName"] = "market_product_performance";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "avg";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto52["m_sql"] = "''";
$proto52["m_srcTableName"] = "market_product_performance";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "charagai";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto54["m_sql"] = "''";
$proto54["m_srcTableName"] = "market_product_performance";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "sagaku";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto56["m_sql"] = "''";
$proto56["m_srcTableName"] = "market_product_performance";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "arari";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "buy_tax",
	"m_strTable" => "shouhin_tax",
	"m_srcTableName" => "market_product_performance"
));

$proto58["m_sql"] = "`shouhin_tax`.`buy_tax`";
$proto58["m_srcTableName"] = "market_product_performance";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "sell_tax",
	"m_strTable" => "shouhin_tax",
	"m_srcTableName" => "market_product_performance"
));

$proto60["m_sql"] = "`shouhin_tax`.`sell_tax`";
$proto60["m_srcTableName"] = "market_product_performance";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto62["m_sql"] = "`shouhin`.`status`";
$proto62["m_srcTableName"] = "market_product_performance";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto64["m_sql"] = "`shouhin`.`price`";
$proto64["m_srcTableName"] = "market_product_performance";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_img",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto66["m_sql"] = "`shouhin`.`ichiba_img`";
$proto66["m_srcTableName"] = "market_product_performance";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto68=array();
$proto68["m_link"] = "SQLL_MAIN";
			$proto69=array();
$proto69["m_strName"] = "shouhin";
$proto69["m_srcTableName"] = "market_product_performance";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "product_id";
$proto69["m_columns"][] = "category_id";
$proto69["m_columns"][] = "goods_title";
$proto69["m_columns"][] = "title";
$proto69["m_columns"][] = "sub_category_id1";
$proto69["m_columns"][] = "ecc_id";
$proto69["m_columns"][] = "price";
$proto69["m_columns"][] = "yahoo";
$proto69["m_columns"][] = "remark";
$proto69["m_columns"][] = "sales_price";
$proto69["m_columns"][] = "description";
$proto69["m_columns"][] = "status";
$proto69["m_columns"][] = "product_num";
$proto69["m_columns"][] = "updated_at";
$proto69["m_columns"][] = "yahoo_size";
$proto69["m_columns"][] = "yahoo_title";
$proto69["m_columns"][] = "yahoo_junle";
$proto69["m_columns"][] = "yahoo_sankou_uwadai";
$proto69["m_columns"][] = "yahoo_sozai";
$proto69["m_columns"][] = "yahoo_color";
$proto69["m_columns"][] = "yahoo_kataban";
$proto69["m_columns"][] = "yahoo_condition1";
$proto69["m_columns"][] = "yahoo_condition2";
$proto69["m_columns"][] = "yahoo_fuzokuhin";
$proto69["m_columns"][] = "yahoo_sinaban";
$proto69["m_columns"][] = "yahoo_saisun_sha";
$proto69["m_columns"][] = "yahoo_sex";
$proto69["m_columns"][] = "box_id";
$proto69["m_columns"][] = "nyuukin_price";
$proto69["m_columns"][] = "updated_by";
$proto69["m_columns"][] = "raku_title";
$proto69["m_columns"][] = "raku_hyoujisaki_category2";
$proto69["m_columns"][] = "raku_hyoujisaki_category";
$proto69["m_columns"][] = "raku_hyoujisaki_category3";
$proto69["m_columns"][] = "timesta";
$proto69["m_columns"][] = "saisun_start";
$proto69["m_columns"][] = "saisun_end";
$proto69["m_columns"][] = "label_output_flag";
$proto69["m_columns"][] = "season";
$proto69["m_columns"][] = "kanryou_henbi";
$proto69["m_columns"][] = "box_sort";
$proto69["m_columns"][] = "satei_by";
$proto69["m_columns"][] = "kaitori_by";
$proto69["m_columns"][] = "comment";
$proto69["m_columns"][] = "satei_hi";
$proto69["m_columns"][] = "kaitory_hi";
$proto69["m_columns"][] = "REG_PHOTOGRAPHER";
$proto69["m_columns"][] = "REG_AUTHOR";
$proto69["m_columns"][] = "REG_PACKINGS";
$proto69["m_columns"][] = "REG_KAKOU_DATE";
$proto69["m_columns"][] = "REG_KAKOU";
$proto69["m_columns"][] = "REG_EXHIBITOR";
$proto69["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto69["m_columns"][] = "DT_PACKING_DATE";
$proto69["m_columns"][] = "DT_UP_DATE";
$proto69["m_columns"][] = "AWAZU_DATE";
$proto69["m_columns"][] = "AWAZU_NIN";
$proto69["m_columns"][] = "sabun_date";
$proto69["m_columns"][] = "browseid";
$proto69["m_columns"][] = "browsenode";
$proto69["m_columns"][] = "gold_property";
$proto69["m_columns"][] = "ichiba_title";
$proto69["m_columns"][] = "Gram";
$proto69["m_columns"][] = "Parent_stone";
$proto69["m_columns"][] = "Aside_stone";
$proto69["m_columns"][] = "Appraiser";
$proto69["m_columns"][] = "Remarks";
$proto69["m_columns"][] = "Destination_selling";
$proto69["m_columns"][] = "Finish";
$proto69["m_columns"][] = "Discrimination";
$proto69["m_columns"][] = "accessories";
$proto69["m_columns"][] = "priority";
$proto69["m_columns"][] = "A_storage";
$proto69["m_columns"][] = "price_per_gram";
$proto69["m_columns"][] = "price_per_parent_stone";
$proto69["m_columns"][] = "price_per_aside_stone";
$proto69["m_columns"][] = "price_secret";
$proto69["m_columns"][] = "sales_price_secret";
$proto69["m_columns"][] = "eq";
$proto69["m_columns"][] = "en";
$proto69["m_columns"][] = "line";
$proto69["m_columns"][] = "item_name";
$proto69["m_columns"][] = "handle";
$proto69["m_columns"][] = "yahoo_color_id";
$proto69["m_columns"][] = "raku_hyoujisaki_category4";
$proto69["m_columns"][] = "raku_hyoujisaki_category5";
$proto69["m_columns"][] = "raku_dir_1";
$proto69["m_columns"][] = "raku_dir_2";
$proto69["m_columns"][] = "raku_dir_3";
$proto69["m_columns"][] = "raku_dir_4";
$proto69["m_columns"][] = "raku_dir_5";
$proto69["m_columns"][] = "raku_dir_result";
$proto69["m_columns"][] = "raku_tag_result";
$proto69["m_columns"][] = "serial_number";
$proto69["m_columns"][] = "Exhibition_Date";
$proto69["m_columns"][] = "search_keyword";
$proto69["m_columns"][] = "stamp";
$proto69["m_columns"][] = "motif";
$proto69["m_columns"][] = "Setting";
$proto69["m_columns"][] = "processing";
$proto69["m_columns"][] = "Sleeve_Length";
$proto69["m_columns"][] = "length";
$proto69["m_columns"][] = "Ring_size";
$proto69["m_columns"][] = "price_for_site";
$proto69["m_columns"][] = "yahoo_category_id";
$proto69["m_columns"][] = "Qty";
$proto69["m_columns"][] = "sales_period";
$proto69["m_columns"][] = "starting_price";
$proto69["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto69["m_columns"][] = "amount_of_image";
$proto69["m_columns"][] = "csv";
$proto69["m_columns"][] = "return_output_flag";
$proto69["m_columns"][] = "wasabi_flag";
$proto69["m_columns"][] = "ws_import_date";
$proto69["m_columns"][] = "logo";
$proto69["m_columns"][] = "parts";
$proto69["m_columns"][] = "country_of_origin";
$proto69["m_columns"][] = "zipper";
$proto69["m_columns"][] = "guarantee";
$proto69["m_columns"][] = "errors";
$proto69["m_columns"][] = "designer";
$proto69["m_columns"][] = "hahakai";
$proto69["m_columns"][] = "effect";
$proto69["m_columns"][] = "shape";
$proto69["m_columns"][] = "cutting_style";
$proto69["m_columns"][] = "chain_type";
$proto69["m_columns"][] = "number_of_stones";
$proto69["m_columns"][] = "amount";
$proto69["m_columns"][] = "satei_error";
$proto69["m_columns"][] = "producing_area";
$proto69["m_columns"][] = "shape_supplement";
$proto69["m_columns"][] = "side_gem";
$proto69["m_columns"][] = "product_style";
$proto69["m_columns"][] = "collar_neck_line";
$proto69["m_columns"][] = "breast";
$proto69["m_columns"][] = "silhouette";
$proto69["m_columns"][] = "sleeve";
$proto69["m_columns"][] = "unit";
$proto69["m_columns"][] = "hall_mark";
$proto69["m_columns"][] = "plate";
$proto69["m_columns"][] = "toe";
$proto69["m_columns"][] = "heel";
$proto69["m_columns"][] = "cloth";
$proto69["m_columns"][] = "serial_number_for_storage";
$proto69["m_columns"][] = "official_url";
$proto69["m_columns"][] = "main_details";
$proto69["m_columns"][] = "notation_size";
$proto69["m_columns"][] = "shoe_size_jp";
$proto69["m_columns"][] = "Eoc_chigins2_id";
$proto69["m_columns"][] = "country_of_origin_name";
$proto69["m_columns"][] = "mailingkit_id";
$proto69["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto69["m_columns"][] = "DA_WEIGHT";
$proto69["m_columns"][] = "DA_PER_CARAT";
$proto69["m_columns"][] = "DA_SHAPE";
$proto69["m_columns"][] = "DA_SELFGRES";
$proto69["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto69["m_columns"][] = "DA_SUGARCANE";
$proto69["m_columns"][] = "DA_RAPA";
$proto69["m_columns"][] = "DA_INTENSITY";
$proto69["m_columns"][] = "DA_OVERTONE";
$proto69["m_columns"][] = "DA_COLOR";
$proto69["m_columns"][] = "DA_CLARITY";
$proto69["m_columns"][] = "DA_CUT";
$proto69["m_columns"][] = "DA_POLISH";
$proto69["m_columns"][] = "DA_SYMMETRY";
$proto69["m_columns"][] = "DA_FLUO";
$proto69["m_columns"][] = "DA_COLOR_FLUO";
$proto69["m_columns"][] = "DA_WIDE";
$proto69["m_columns"][] = "DA_HIGH";
$proto69["m_columns"][] = "DA_DEPTH";
$proto69["m_columns"][] = "DA_APPRAISER";
$proto69["m_columns"][] = "DA_FRAPA";
$proto69["m_columns"][] = "DA_RATE";
$proto69["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto69["m_columns"][] = "DA_YOURNAME";
$proto69["m_columns"][] = "DA_RAPAB";
$proto69["m_columns"][] = "DA_GROSSPROFIT";
$proto69["m_columns"][] = "DA_INTEREST_1";
$proto69["m_columns"][] = "DA_no";
$proto69["m_columns"][] = "kinsa_flag";
$proto69["m_columns"][] = "price_for_site_flag";
$proto69["m_columns"][] = "Eoc_takuhai_id";
$proto69["m_columns"][] = "Eoc_unfinished_id";
$proto69["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto69["m_columns"][] = "chohyo_id";
$proto69["m_columns"][] = "location";
$proto69["m_columns"][] = "special_instructions_1";
$proto69["m_columns"][] = "special_instructions_2";
$proto69["m_columns"][] = "special_instructions_3";
$proto69["m_columns"][] = "chohyo_seihin_flag";
$proto69["m_columns"][] = "chohyo_dia_flag";
$proto69["m_columns"][] = "chohyo_type";
$proto69["m_columns"][] = "ichiyen_flag";
$proto69["m_columns"][] = "asuraku_fuka_flag";
$proto69["m_columns"][] = "parallel_import_flag";
$proto69["m_columns"][] = "meisai_number";
$proto69["m_columns"][] = "days_keep_price";
$proto69["m_columns"][] = "initial_included";
$proto69["m_columns"][] = "novelty";
$proto69["m_columns"][] = "tentou_label_output_flag";
$proto69["m_columns"][] = "itaku_flag";
$proto69["m_columns"][] = "including_catch";
$proto69["m_columns"][] = "ichiba_meeting_month";
$proto69["m_columns"][] = "ichiba_meeting_name";
$proto69["m_columns"][] = "ichiba_color";
$proto69["m_columns"][] = "ichiba_clarity";
$proto69["m_columns"][] = "ichiba_melee_gai";
$proto69["m_columns"][] = "ichiba_lot_pieces";
$proto69["m_columns"][] = "ichiba_image";
$proto69["m_columns"][] = "ichiba_img";
$proto69["m_columns"][] = "gold_check_id";
$proto69["m_columns"][] = "ichiba_exhibition_id";
$proto69["m_columns"][] = "ichiba_exhibition_sort";
$proto69["m_columns"][] = "cost";
$proto69["m_columns"][] = "auto_price_cut_prohibited";
$proto69["m_columns"][] = "event_price";
$proto69["m_columns"][] = "identification_cost";
$proto69["m_columns"][] = "other_cost";
$proto69["m_columns"][] = "stock_quantity";
$proto69["m_columns"][] = "Eoc_trader_id_for_buy";
$proto69["m_columns"][] = "Eoc_trader_id_for_sell";
$proto69["m_columns"][] = "multiplication_rate";
$proto69["m_columns"][] = "many_product_group_id";
$proto69["m_columns"][] = "trading_sort_id";
$proto69["m_columns"][] = "many_product_group_saiban";
$proto69["m_columns"][] = "purchase_category";
$proto69["m_columns"][] = "created_at";
$proto69["m_columns"][] = "created_by";
$proto69["m_columns"][] = "manual_input_price_per_gram";
$proto69["m_columns"][] = "satei_start";
$proto69["m_columns"][] = "self_DA_INTENSITY";
$proto69["m_columns"][] = "self_DA_OVERTONE";
$proto69["m_columns"][] = "self_DA_COLOR";
$proto69["m_columns"][] = "self_DA_CLARITY";
$proto69["m_columns"][] = "self_DA_CUT";
$proto69["m_columns"][] = "self_DA_POLISH";
$proto69["m_columns"][] = "self_DA_SYMMETRY";
$proto69["m_columns"][] = "self_DA_FLUO";
$proto69["m_columns"][] = "self_DA_COLOR_FLUO";
$proto69["m_columns"][] = "self_DA_FRAPA";
$proto69["m_columns"][] = "self_DA_RATE";
$proto69["m_columns"][] = "self_multiplication_rate";
$proto69["m_columns"][] = "is_seiyaku";
$proto69["m_columns"][] = "destination_sold_out";
$proto69["m_columns"][] = "mypage_update_prohibited";
$proto69["m_columns"][] = "gold_check_scan_id";
$proto69["m_columns"][] = "buy_campaign_data_id";
$proto69["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto69["m_columns"][] = "commission";
$proto69["m_columns"][] = "addtime_gold_check_id";
$proto69["m_columns"][] = "is_recovery";
$proto69["m_columns"][] = "sales_cost";
$proto69["m_columns"][] = "mst_business_partner_id";
$proto69["m_columns"][] = "DA_GROSSPROFIT_2";
$proto69["m_columns"][] = "DA_INTEREST_2";
$proto69["m_columns"][] = "minus_weight";
$proto69["m_columns"][] = "diameter_size";
$proto69["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "`shouhin`";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "market_product_performance";
$proto70=array();
$proto70["m_sql"] = "";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "";
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
$proto73["m_strName"] = "shouhin_tax";
$proto73["m_srcTableName"] = "market_product_performance";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "product_id";
$proto73["m_columns"][] = "buy_tax";
$proto73["m_columns"][] = "sell_tax";
$proto73["m_columns"][] = "created_at";
$proto73["m_columns"][] = "updated_at";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "LEFT OUTER JOIN `shouhin_tax` ON `shouhin`.`product_id` = `shouhin_tax`.`product_id`";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "market_product_performance";
$proto74=array();
$proto74["m_sql"] = "`shouhin`.`product_id` = `shouhin_tax`.`product_id`";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= `shouhin_tax`.`product_id`";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto76=array();
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "market_product_performance"
));

$proto76["m_column"]=$obj;
$proto76["m_bAsc"] = 0;
$proto76["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto76);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="market_product_performance";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_market_product_performance = createSqlQuery_market_product_performance();


	
		;

																															

$tdatamarket_product_performance[".sqlquery"] = $queryData_market_product_performance;

include_once(getabspath("include/market_product_performance_events.php"));
$tableEvents["market_product_performance"] = new eventclass_market_product_performance;
$tdatamarket_product_performance[".hasEvents"] = true;

?>