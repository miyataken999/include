<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_sell_campaign = array();
	$tdatamst_sell_campaign[".truncateText"] = true;
	$tdatamst_sell_campaign[".NumberOfChars"] = 80;
	$tdatamst_sell_campaign[".ShortName"] = "mst_sell_campaign";
	$tdatamst_sell_campaign[".OwnerID"] = "";
	$tdatamst_sell_campaign[".OriginalTable"] = "mst_sell_campaign";

//	field labels
$fieldLabelsmst_sell_campaign = array();
$fieldToolTipsmst_sell_campaign = array();
$pageTitlesmst_sell_campaign = array();
$placeHoldersmst_sell_campaign = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_sell_campaign["Japanese"] = array();
	$fieldToolTipsmst_sell_campaign["Japanese"] = array();
	$placeHoldersmst_sell_campaign["Japanese"] = array();
	$pageTitlesmst_sell_campaign["Japanese"] = array();
	$fieldLabelsmst_sell_campaign["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_sell_campaign["Japanese"]["id"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["id"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["mall_name"] = "対象モール";
	$fieldToolTipsmst_sell_campaign["Japanese"]["mall_name"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["mall_name"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["campaign_name"] = "企画名";
	$fieldToolTipsmst_sell_campaign["Japanese"]["campaign_name"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["campaign_name"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["camp_startDate"] = "開始日";
	$fieldToolTipsmst_sell_campaign["Japanese"]["camp_startDate"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["camp_startDate"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["camp_lastDate"] = "終了日";
	$fieldToolTipsmst_sell_campaign["Japanese"]["camp_lastDate"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["camp_lastDate"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["h1_sub"] = "タイトル下";
	$fieldToolTipsmst_sell_campaign["Japanese"]["h1_sub"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["h1_sub"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["top_txt"] = "リード文";
	$fieldToolTipsmst_sell_campaign["Japanese"]["top_txt"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["top_txt"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["content1_ttl"] = "Content1";
	$fieldToolTipsmst_sell_campaign["Japanese"]["content1_ttl"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["content1_ttl"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["content1_sub"] = "サブテキスト";
	$fieldToolTipsmst_sell_campaign["Japanese"]["content1_sub"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["content1_sub"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["content1"] = "SEQ";
	$fieldToolTipsmst_sell_campaign["Japanese"]["content1"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["content1"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["content1_column"] = "列";
	$fieldToolTipsmst_sell_campaign["Japanese"]["content1_column"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["content1_column"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["content2_ttl"] = "Content2";
	$fieldToolTipsmst_sell_campaign["Japanese"]["content2_ttl"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["content2_ttl"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["content2_sub"] = "サブテキスト";
	$fieldToolTipsmst_sell_campaign["Japanese"]["content2_sub"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["content2_sub"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["content2"] = "SEQ";
	$fieldToolTipsmst_sell_campaign["Japanese"]["content2"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["content2"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["content2_column"] = "列";
	$fieldToolTipsmst_sell_campaign["Japanese"]["content2_column"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["content2_column"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["content3_ttl"] = "Content3";
	$fieldToolTipsmst_sell_campaign["Japanese"]["content3_ttl"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["content3_ttl"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["content3_sub"] = "サブテキスト";
	$fieldToolTipsmst_sell_campaign["Japanese"]["content3_sub"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["content3_sub"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["content3"] = "SEQ";
	$fieldToolTipsmst_sell_campaign["Japanese"]["content3"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["content3"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["content3_column"] = "列";
	$fieldToolTipsmst_sell_campaign["Japanese"]["content3_column"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["content3_column"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["search_box1_on"] = "検索リンク1";
	$fieldToolTipsmst_sell_campaign["Japanese"]["search_box1_on"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["search_box1_on"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["search_box1_title"] = "タイトル";
	$fieldToolTipsmst_sell_campaign["Japanese"]["search_box1_title"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["search_box1_title"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["search_box1_word"] = "キーワード";
	$fieldToolTipsmst_sell_campaign["Japanese"]["search_box1_word"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["search_box1_word"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["search_box2_on"] = "検索リンク2";
	$fieldToolTipsmst_sell_campaign["Japanese"]["search_box2_on"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["search_box2_on"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["search_box2_title"] = "タイトル";
	$fieldToolTipsmst_sell_campaign["Japanese"]["search_box2_title"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["search_box2_title"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["search_box2_word"] = "キーワード";
	$fieldToolTipsmst_sell_campaign["Japanese"]["search_box2_word"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["search_box2_word"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["coupon_id"] = "クーポンId";
	$fieldToolTipsmst_sell_campaign["Japanese"]["coupon_id"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["coupon_id"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["inSession"] = "稼働";
	$fieldToolTipsmst_sell_campaign["Japanese"]["inSession"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["inSession"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["folderName"] = "フォルダ名";
	$fieldToolTipsmst_sell_campaign["Japanese"]["folderName"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["folderName"] = "";
	$fieldLabelsmst_sell_campaign["Japanese"]["preview"] = "Preview";
	$fieldToolTipsmst_sell_campaign["Japanese"]["preview"] = "";
	$placeHoldersmst_sell_campaign["Japanese"]["preview"] = "";
	if (count($fieldToolTipsmst_sell_campaign["Japanese"]))
		$tdatamst_sell_campaign[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_sell_campaign[""] = array();
	$fieldToolTipsmst_sell_campaign[""] = array();
	$placeHoldersmst_sell_campaign[""] = array();
	$pageTitlesmst_sell_campaign[""] = array();
	$fieldLabelsmst_sell_campaign[""]["id"] = "Id";
	$fieldToolTipsmst_sell_campaign[""]["id"] = "";
	$placeHoldersmst_sell_campaign[""]["id"] = "";
	$fieldLabelsmst_sell_campaign[""]["mall_name"] = "Mall Name";
	$fieldToolTipsmst_sell_campaign[""]["mall_name"] = "";
	$placeHoldersmst_sell_campaign[""]["mall_name"] = "";
	$fieldLabelsmst_sell_campaign[""]["campaign_name"] = "Campaign Name";
	$fieldToolTipsmst_sell_campaign[""]["campaign_name"] = "";
	$placeHoldersmst_sell_campaign[""]["campaign_name"] = "";
	$fieldLabelsmst_sell_campaign[""]["camp_startDate"] = "Camp StartDate";
	$fieldToolTipsmst_sell_campaign[""]["camp_startDate"] = "";
	$placeHoldersmst_sell_campaign[""]["camp_startDate"] = "";
	$fieldLabelsmst_sell_campaign[""]["camp_lastDate"] = "Camp LastDate";
	$fieldToolTipsmst_sell_campaign[""]["camp_lastDate"] = "";
	$placeHoldersmst_sell_campaign[""]["camp_lastDate"] = "";
	$fieldLabelsmst_sell_campaign[""]["h1_sub"] = "H1 Sub";
	$fieldToolTipsmst_sell_campaign[""]["h1_sub"] = "";
	$placeHoldersmst_sell_campaign[""]["h1_sub"] = "";
	$fieldLabelsmst_sell_campaign[""]["top_txt"] = "Top Txt";
	$fieldToolTipsmst_sell_campaign[""]["top_txt"] = "";
	$placeHoldersmst_sell_campaign[""]["top_txt"] = "";
	$fieldLabelsmst_sell_campaign[""]["content1_ttl"] = "Content1 Ttl";
	$fieldToolTipsmst_sell_campaign[""]["content1_ttl"] = "";
	$placeHoldersmst_sell_campaign[""]["content1_ttl"] = "";
	$fieldLabelsmst_sell_campaign[""]["content1_sub"] = "Content1 Sub";
	$fieldToolTipsmst_sell_campaign[""]["content1_sub"] = "";
	$placeHoldersmst_sell_campaign[""]["content1_sub"] = "";
	$fieldLabelsmst_sell_campaign[""]["content1"] = "Content1";
	$fieldToolTipsmst_sell_campaign[""]["content1"] = "";
	$placeHoldersmst_sell_campaign[""]["content1"] = "";
	$fieldLabelsmst_sell_campaign[""]["content1_column"] = "Content1 Column";
	$fieldToolTipsmst_sell_campaign[""]["content1_column"] = "";
	$placeHoldersmst_sell_campaign[""]["content1_column"] = "";
	$fieldLabelsmst_sell_campaign[""]["content2_ttl"] = "Content2 Ttl";
	$fieldToolTipsmst_sell_campaign[""]["content2_ttl"] = "";
	$placeHoldersmst_sell_campaign[""]["content2_ttl"] = "";
	$fieldLabelsmst_sell_campaign[""]["content2_sub"] = "Content2 Sub";
	$fieldToolTipsmst_sell_campaign[""]["content2_sub"] = "";
	$placeHoldersmst_sell_campaign[""]["content2_sub"] = "";
	$fieldLabelsmst_sell_campaign[""]["content2"] = "Content2";
	$fieldToolTipsmst_sell_campaign[""]["content2"] = "";
	$placeHoldersmst_sell_campaign[""]["content2"] = "";
	$fieldLabelsmst_sell_campaign[""]["content2_column"] = "Content2 Column";
	$fieldToolTipsmst_sell_campaign[""]["content2_column"] = "";
	$placeHoldersmst_sell_campaign[""]["content2_column"] = "";
	$fieldLabelsmst_sell_campaign[""]["content3_ttl"] = "Content3 Ttl";
	$fieldToolTipsmst_sell_campaign[""]["content3_ttl"] = "";
	$placeHoldersmst_sell_campaign[""]["content3_ttl"] = "";
	$fieldLabelsmst_sell_campaign[""]["content3_sub"] = "Content3 Sub";
	$fieldToolTipsmst_sell_campaign[""]["content3_sub"] = "";
	$placeHoldersmst_sell_campaign[""]["content3_sub"] = "";
	$fieldLabelsmst_sell_campaign[""]["content3"] = "Content3";
	$fieldToolTipsmst_sell_campaign[""]["content3"] = "";
	$placeHoldersmst_sell_campaign[""]["content3"] = "";
	$fieldLabelsmst_sell_campaign[""]["content3_column"] = "Content3 Column";
	$fieldToolTipsmst_sell_campaign[""]["content3_column"] = "";
	$placeHoldersmst_sell_campaign[""]["content3_column"] = "";
	$fieldLabelsmst_sell_campaign[""]["search_box1_on"] = "Search Box1 On";
	$fieldToolTipsmst_sell_campaign[""]["search_box1_on"] = "";
	$placeHoldersmst_sell_campaign[""]["search_box1_on"] = "";
	$fieldLabelsmst_sell_campaign[""]["search_box1_title"] = "Search Box1 Title";
	$fieldToolTipsmst_sell_campaign[""]["search_box1_title"] = "";
	$placeHoldersmst_sell_campaign[""]["search_box1_title"] = "";
	$fieldLabelsmst_sell_campaign[""]["search_box1_word"] = "Search Box1 Word";
	$fieldToolTipsmst_sell_campaign[""]["search_box1_word"] = "";
	$placeHoldersmst_sell_campaign[""]["search_box1_word"] = "";
	$fieldLabelsmst_sell_campaign[""]["search_box2_on"] = "Search Box2 On";
	$fieldToolTipsmst_sell_campaign[""]["search_box2_on"] = "";
	$placeHoldersmst_sell_campaign[""]["search_box2_on"] = "";
	$fieldLabelsmst_sell_campaign[""]["search_box2_title"] = "Search Box2 Title";
	$fieldToolTipsmst_sell_campaign[""]["search_box2_title"] = "";
	$placeHoldersmst_sell_campaign[""]["search_box2_title"] = "";
	$fieldLabelsmst_sell_campaign[""]["search_box2_word"] = "Search Box2 Word";
	$fieldToolTipsmst_sell_campaign[""]["search_box2_word"] = "";
	$placeHoldersmst_sell_campaign[""]["search_box2_word"] = "";
	$fieldLabelsmst_sell_campaign[""]["coupon_id"] = "Coupon Id";
	$fieldToolTipsmst_sell_campaign[""]["coupon_id"] = "";
	$placeHoldersmst_sell_campaign[""]["coupon_id"] = "";
	$fieldLabelsmst_sell_campaign[""]["inSession"] = "In Session";
	$fieldToolTipsmst_sell_campaign[""]["inSession"] = "";
	$placeHoldersmst_sell_campaign[""]["inSession"] = "";
	$fieldLabelsmst_sell_campaign[""]["folderName"] = "Folder Name";
	$fieldToolTipsmst_sell_campaign[""]["folderName"] = "";
	$placeHoldersmst_sell_campaign[""]["folderName"] = "";
	$fieldLabelsmst_sell_campaign[""]["preview"] = "Preview";
	$fieldToolTipsmst_sell_campaign[""]["preview"] = "";
	$placeHoldersmst_sell_campaign[""]["preview"] = "";
	if (count($fieldToolTipsmst_sell_campaign[""]))
		$tdatamst_sell_campaign[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_sell_campaign["English"] = array();
	$fieldToolTipsmst_sell_campaign["English"] = array();
	$placeHoldersmst_sell_campaign["English"] = array();
	$pageTitlesmst_sell_campaign["English"] = array();
	$fieldLabelsmst_sell_campaign["English"]["id"] = "Id";
	$fieldToolTipsmst_sell_campaign["English"]["id"] = "";
	$placeHoldersmst_sell_campaign["English"]["id"] = "";
	$fieldLabelsmst_sell_campaign["English"]["mall_name"] = "Mall Name";
	$fieldToolTipsmst_sell_campaign["English"]["mall_name"] = "";
	$placeHoldersmst_sell_campaign["English"]["mall_name"] = "";
	$fieldLabelsmst_sell_campaign["English"]["campaign_name"] = "Campaign Name";
	$fieldToolTipsmst_sell_campaign["English"]["campaign_name"] = "";
	$placeHoldersmst_sell_campaign["English"]["campaign_name"] = "";
	$fieldLabelsmst_sell_campaign["English"]["camp_startDate"] = "Camp StartDate";
	$fieldToolTipsmst_sell_campaign["English"]["camp_startDate"] = "";
	$placeHoldersmst_sell_campaign["English"]["camp_startDate"] = "";
	$fieldLabelsmst_sell_campaign["English"]["camp_lastDate"] = "Camp LastDate";
	$fieldToolTipsmst_sell_campaign["English"]["camp_lastDate"] = "";
	$placeHoldersmst_sell_campaign["English"]["camp_lastDate"] = "";
	$fieldLabelsmst_sell_campaign["English"]["h1_sub"] = "H1 Sub";
	$fieldToolTipsmst_sell_campaign["English"]["h1_sub"] = "";
	$placeHoldersmst_sell_campaign["English"]["h1_sub"] = "";
	$fieldLabelsmst_sell_campaign["English"]["top_txt"] = "Top Txt";
	$fieldToolTipsmst_sell_campaign["English"]["top_txt"] = "";
	$placeHoldersmst_sell_campaign["English"]["top_txt"] = "";
	$fieldLabelsmst_sell_campaign["English"]["content1_ttl"] = "Content1 Ttl";
	$fieldToolTipsmst_sell_campaign["English"]["content1_ttl"] = "";
	$placeHoldersmst_sell_campaign["English"]["content1_ttl"] = "";
	$fieldLabelsmst_sell_campaign["English"]["content1_sub"] = "Content1 Sub";
	$fieldToolTipsmst_sell_campaign["English"]["content1_sub"] = "";
	$placeHoldersmst_sell_campaign["English"]["content1_sub"] = "";
	$fieldLabelsmst_sell_campaign["English"]["content1"] = "Content1";
	$fieldToolTipsmst_sell_campaign["English"]["content1"] = "";
	$placeHoldersmst_sell_campaign["English"]["content1"] = "";
	$fieldLabelsmst_sell_campaign["English"]["content1_column"] = "Content1 Column";
	$fieldToolTipsmst_sell_campaign["English"]["content1_column"] = "";
	$placeHoldersmst_sell_campaign["English"]["content1_column"] = "";
	$fieldLabelsmst_sell_campaign["English"]["content2_ttl"] = "Content2 Ttl";
	$fieldToolTipsmst_sell_campaign["English"]["content2_ttl"] = "";
	$placeHoldersmst_sell_campaign["English"]["content2_ttl"] = "";
	$fieldLabelsmst_sell_campaign["English"]["content2_sub"] = "Content2 Sub";
	$fieldToolTipsmst_sell_campaign["English"]["content2_sub"] = "";
	$placeHoldersmst_sell_campaign["English"]["content2_sub"] = "";
	$fieldLabelsmst_sell_campaign["English"]["content2"] = "Content2";
	$fieldToolTipsmst_sell_campaign["English"]["content2"] = "";
	$placeHoldersmst_sell_campaign["English"]["content2"] = "";
	$fieldLabelsmst_sell_campaign["English"]["content2_column"] = "Content2 Column";
	$fieldToolTipsmst_sell_campaign["English"]["content2_column"] = "";
	$placeHoldersmst_sell_campaign["English"]["content2_column"] = "";
	$fieldLabelsmst_sell_campaign["English"]["content3_ttl"] = "Content3 Ttl";
	$fieldToolTipsmst_sell_campaign["English"]["content3_ttl"] = "";
	$placeHoldersmst_sell_campaign["English"]["content3_ttl"] = "";
	$fieldLabelsmst_sell_campaign["English"]["content3_sub"] = "Content3 Sub";
	$fieldToolTipsmst_sell_campaign["English"]["content3_sub"] = "";
	$placeHoldersmst_sell_campaign["English"]["content3_sub"] = "";
	$fieldLabelsmst_sell_campaign["English"]["content3"] = "Content3";
	$fieldToolTipsmst_sell_campaign["English"]["content3"] = "";
	$placeHoldersmst_sell_campaign["English"]["content3"] = "";
	$fieldLabelsmst_sell_campaign["English"]["content3_column"] = "Content3 Column";
	$fieldToolTipsmst_sell_campaign["English"]["content3_column"] = "";
	$placeHoldersmst_sell_campaign["English"]["content3_column"] = "";
	$fieldLabelsmst_sell_campaign["English"]["search_box1_on"] = "Search Box1 On";
	$fieldToolTipsmst_sell_campaign["English"]["search_box1_on"] = "";
	$placeHoldersmst_sell_campaign["English"]["search_box1_on"] = "";
	$fieldLabelsmst_sell_campaign["English"]["search_box1_title"] = "Search Box1 Title";
	$fieldToolTipsmst_sell_campaign["English"]["search_box1_title"] = "";
	$placeHoldersmst_sell_campaign["English"]["search_box1_title"] = "";
	$fieldLabelsmst_sell_campaign["English"]["search_box1_word"] = "Search Box1 Word";
	$fieldToolTipsmst_sell_campaign["English"]["search_box1_word"] = "";
	$placeHoldersmst_sell_campaign["English"]["search_box1_word"] = "";
	$fieldLabelsmst_sell_campaign["English"]["search_box2_on"] = "Search Box2 On";
	$fieldToolTipsmst_sell_campaign["English"]["search_box2_on"] = "";
	$placeHoldersmst_sell_campaign["English"]["search_box2_on"] = "";
	$fieldLabelsmst_sell_campaign["English"]["search_box2_title"] = "Search Box2 Title";
	$fieldToolTipsmst_sell_campaign["English"]["search_box2_title"] = "";
	$placeHoldersmst_sell_campaign["English"]["search_box2_title"] = "";
	$fieldLabelsmst_sell_campaign["English"]["search_box2_word"] = "Search Box2 Word";
	$fieldToolTipsmst_sell_campaign["English"]["search_box2_word"] = "";
	$placeHoldersmst_sell_campaign["English"]["search_box2_word"] = "";
	$fieldLabelsmst_sell_campaign["English"]["coupon_id"] = "Coupon Id";
	$fieldToolTipsmst_sell_campaign["English"]["coupon_id"] = "";
	$placeHoldersmst_sell_campaign["English"]["coupon_id"] = "";
	$fieldLabelsmst_sell_campaign["English"]["inSession"] = "In Session";
	$fieldToolTipsmst_sell_campaign["English"]["inSession"] = "";
	$placeHoldersmst_sell_campaign["English"]["inSession"] = "";
	$fieldLabelsmst_sell_campaign["English"]["folderName"] = "Folder Name";
	$fieldToolTipsmst_sell_campaign["English"]["folderName"] = "";
	$placeHoldersmst_sell_campaign["English"]["folderName"] = "";
	$fieldLabelsmst_sell_campaign["English"]["preview"] = "Preview";
	$fieldToolTipsmst_sell_campaign["English"]["preview"] = "";
	$placeHoldersmst_sell_campaign["English"]["preview"] = "";
	if (count($fieldToolTipsmst_sell_campaign["English"]))
		$tdatamst_sell_campaign[".isUseToolTips"] = true;
}


	$tdatamst_sell_campaign[".NCSearch"] = true;



$tdatamst_sell_campaign[".shortTableName"] = "mst_sell_campaign";
$tdatamst_sell_campaign[".nSecOptions"] = 0;
$tdatamst_sell_campaign[".recsPerRowPrint"] = 1;
$tdatamst_sell_campaign[".mainTableOwnerID"] = "";
$tdatamst_sell_campaign[".moveNext"] = 1;
$tdatamst_sell_campaign[".entityType"] = 0;

$tdatamst_sell_campaign[".strOriginalTableName"] = "mst_sell_campaign";

	



$tdatamst_sell_campaign[".showAddInPopup"] = false;

$tdatamst_sell_campaign[".showEditInPopup"] = false;

$tdatamst_sell_campaign[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_sell_campaign[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_sell_campaign[".fieldsForRegister"] = array();

$tdatamst_sell_campaign[".listAjax"] = false;

	$tdatamst_sell_campaign[".audit"] = true;

	$tdatamst_sell_campaign[".locking"] = false;



$tdatamst_sell_campaign[".list"] = true;

$tdatamst_sell_campaign[".inlineEdit"] = true;


$tdatamst_sell_campaign[".reorderRecordsByHeader"] = true;



$tdatamst_sell_campaign[".inlineAdd"] = true;

$tdatamst_sell_campaign[".import"] = true;

$tdatamst_sell_campaign[".exportTo"] = true;


$tdatamst_sell_campaign[".delete"] = true;

$tdatamst_sell_campaign[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_sell_campaign[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_sell_campaign[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_sell_campaign[".searchSaving"] = false;
//

$tdatamst_sell_campaign[".showSearchPanel"] = true;
		$tdatamst_sell_campaign[".flexibleSearch"] = true;

$tdatamst_sell_campaign[".isUseAjaxSuggest"] = true;

$tdatamst_sell_campaign[".rowHighlite"] = true;



																																																								

$tdatamst_sell_campaign[".ajaxCodeSnippetAdded"] = false;

$tdatamst_sell_campaign[".buttonsAdded"] = false;

$tdatamst_sell_campaign[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_sell_campaign[".isUseTimeForSearch"] = false;





$tdatamst_sell_campaign[".allSearchFields"] = array();
$tdatamst_sell_campaign[".filterFields"] = array();
$tdatamst_sell_campaign[".requiredSearchFields"] = array();

$tdatamst_sell_campaign[".allSearchFields"][] = "preview";
	$tdatamst_sell_campaign[".allSearchFields"][] = "id";
	$tdatamst_sell_campaign[".allSearchFields"][] = "mall_name";
	$tdatamst_sell_campaign[".allSearchFields"][] = "campaign_name";
	$tdatamst_sell_campaign[".allSearchFields"][] = "camp_startDate";
	$tdatamst_sell_campaign[".allSearchFields"][] = "camp_lastDate";
	$tdatamst_sell_campaign[".allSearchFields"][] = "h1_sub";
	$tdatamst_sell_campaign[".allSearchFields"][] = "top_txt";
	$tdatamst_sell_campaign[".allSearchFields"][] = "content1_ttl";
	$tdatamst_sell_campaign[".allSearchFields"][] = "content1_sub";
	$tdatamst_sell_campaign[".allSearchFields"][] = "content1";
	$tdatamst_sell_campaign[".allSearchFields"][] = "content1_column";
	$tdatamst_sell_campaign[".allSearchFields"][] = "content2_ttl";
	$tdatamst_sell_campaign[".allSearchFields"][] = "content2_sub";
	$tdatamst_sell_campaign[".allSearchFields"][] = "content2";
	$tdatamst_sell_campaign[".allSearchFields"][] = "content2_column";
	$tdatamst_sell_campaign[".allSearchFields"][] = "content3_ttl";
	$tdatamst_sell_campaign[".allSearchFields"][] = "content3_sub";
	$tdatamst_sell_campaign[".allSearchFields"][] = "content3";
	$tdatamst_sell_campaign[".allSearchFields"][] = "content3_column";
	$tdatamst_sell_campaign[".allSearchFields"][] = "search_box1_on";
	$tdatamst_sell_campaign[".allSearchFields"][] = "search_box1_title";
	$tdatamst_sell_campaign[".allSearchFields"][] = "search_box1_word";
	$tdatamst_sell_campaign[".allSearchFields"][] = "search_box2_on";
	$tdatamst_sell_campaign[".allSearchFields"][] = "search_box2_title";
	$tdatamst_sell_campaign[".allSearchFields"][] = "search_box2_word";
	$tdatamst_sell_campaign[".allSearchFields"][] = "coupon_id";
	$tdatamst_sell_campaign[".allSearchFields"][] = "inSession";
	$tdatamst_sell_campaign[".allSearchFields"][] = "folderName";
	

$tdatamst_sell_campaign[".googleLikeFields"] = array();
$tdatamst_sell_campaign[".googleLikeFields"][] = "id";
$tdatamst_sell_campaign[".googleLikeFields"][] = "preview";
$tdatamst_sell_campaign[".googleLikeFields"][] = "mall_name";
$tdatamst_sell_campaign[".googleLikeFields"][] = "campaign_name";
$tdatamst_sell_campaign[".googleLikeFields"][] = "camp_startDate";
$tdatamst_sell_campaign[".googleLikeFields"][] = "camp_lastDate";
$tdatamst_sell_campaign[".googleLikeFields"][] = "h1_sub";
$tdatamst_sell_campaign[".googleLikeFields"][] = "top_txt";
$tdatamst_sell_campaign[".googleLikeFields"][] = "content1_ttl";
$tdatamst_sell_campaign[".googleLikeFields"][] = "content1_sub";
$tdatamst_sell_campaign[".googleLikeFields"][] = "content1";
$tdatamst_sell_campaign[".googleLikeFields"][] = "content1_column";
$tdatamst_sell_campaign[".googleLikeFields"][] = "content2_ttl";
$tdatamst_sell_campaign[".googleLikeFields"][] = "content2_sub";
$tdatamst_sell_campaign[".googleLikeFields"][] = "content2";
$tdatamst_sell_campaign[".googleLikeFields"][] = "content2_column";
$tdatamst_sell_campaign[".googleLikeFields"][] = "content3_ttl";
$tdatamst_sell_campaign[".googleLikeFields"][] = "content3_sub";
$tdatamst_sell_campaign[".googleLikeFields"][] = "content3";
$tdatamst_sell_campaign[".googleLikeFields"][] = "content3_column";
$tdatamst_sell_campaign[".googleLikeFields"][] = "search_box1_on";
$tdatamst_sell_campaign[".googleLikeFields"][] = "search_box1_title";
$tdatamst_sell_campaign[".googleLikeFields"][] = "search_box1_word";
$tdatamst_sell_campaign[".googleLikeFields"][] = "search_box2_on";
$tdatamst_sell_campaign[".googleLikeFields"][] = "search_box2_title";
$tdatamst_sell_campaign[".googleLikeFields"][] = "search_box2_word";
$tdatamst_sell_campaign[".googleLikeFields"][] = "coupon_id";
$tdatamst_sell_campaign[".googleLikeFields"][] = "inSession";
$tdatamst_sell_campaign[".googleLikeFields"][] = "folderName";


$tdatamst_sell_campaign[".advSearchFields"] = array();
$tdatamst_sell_campaign[".advSearchFields"][] = "preview";
$tdatamst_sell_campaign[".advSearchFields"][] = "id";
$tdatamst_sell_campaign[".advSearchFields"][] = "mall_name";
$tdatamst_sell_campaign[".advSearchFields"][] = "campaign_name";
$tdatamst_sell_campaign[".advSearchFields"][] = "camp_startDate";
$tdatamst_sell_campaign[".advSearchFields"][] = "camp_lastDate";
$tdatamst_sell_campaign[".advSearchFields"][] = "h1_sub";
$tdatamst_sell_campaign[".advSearchFields"][] = "top_txt";
$tdatamst_sell_campaign[".advSearchFields"][] = "content1_ttl";
$tdatamst_sell_campaign[".advSearchFields"][] = "content1_sub";
$tdatamst_sell_campaign[".advSearchFields"][] = "content1";
$tdatamst_sell_campaign[".advSearchFields"][] = "content1_column";
$tdatamst_sell_campaign[".advSearchFields"][] = "content2_ttl";
$tdatamst_sell_campaign[".advSearchFields"][] = "content2_sub";
$tdatamst_sell_campaign[".advSearchFields"][] = "content2";
$tdatamst_sell_campaign[".advSearchFields"][] = "content2_column";
$tdatamst_sell_campaign[".advSearchFields"][] = "content3_ttl";
$tdatamst_sell_campaign[".advSearchFields"][] = "content3_sub";
$tdatamst_sell_campaign[".advSearchFields"][] = "content3";
$tdatamst_sell_campaign[".advSearchFields"][] = "content3_column";
$tdatamst_sell_campaign[".advSearchFields"][] = "search_box1_on";
$tdatamst_sell_campaign[".advSearchFields"][] = "search_box1_title";
$tdatamst_sell_campaign[".advSearchFields"][] = "search_box1_word";
$tdatamst_sell_campaign[".advSearchFields"][] = "search_box2_on";
$tdatamst_sell_campaign[".advSearchFields"][] = "search_box2_title";
$tdatamst_sell_campaign[".advSearchFields"][] = "search_box2_word";
$tdatamst_sell_campaign[".advSearchFields"][] = "coupon_id";
$tdatamst_sell_campaign[".advSearchFields"][] = "inSession";
$tdatamst_sell_campaign[".advSearchFields"][] = "folderName";

$tdatamst_sell_campaign[".tableType"] = "list";

$tdatamst_sell_campaign[".printerPageOrientation"] = 0;
$tdatamst_sell_campaign[".nPrinterPageScale"] = 100;

$tdatamst_sell_campaign[".nPrinterSplitRecords"] = 40;

$tdatamst_sell_campaign[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_sell_campaign[".geocodingEnabled"] = false;





$tdatamst_sell_campaign[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_sell_campaign[".pageSize"] = 100;

$tdatamst_sell_campaign[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_sell_campaign[".strOrderBy"] = $tstrOrderBy;

$tdatamst_sell_campaign[".orderindexes"] = array();
$tdatamst_sell_campaign[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "id");

$tdatamst_sell_campaign[".sqlHead"] = "SELECT id,  id AS preview,  mall_name,  campaign_name,  camp_startDate,  camp_lastDate,  h1_sub,  top_txt,  content1_ttl,  content1_sub,  content1,  content1_column,  content2_ttl,  content2_sub,  content2,  content2_column,  content3_ttl,  content3_sub,  content3,  content3_column,  search_box1_on,  search_box1_title,  search_box1_word,  search_box2_on,  search_box2_title,  search_box2_word,  coupon_id,  inSession,  folderName";
$tdatamst_sell_campaign[".sqlFrom"] = "FROM mst_sell_campaign";
$tdatamst_sell_campaign[".sqlWhereExpr"] = "";
$tdatamst_sell_campaign[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_sell_campaign[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_sell_campaign[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_sell_campaign[".highlightSearchResults"] = true;

$tableKeysmst_sell_campaign = array();
$tableKeysmst_sell_campaign[] = "id";
$tdatamst_sell_campaign[".Keys"] = $tableKeysmst_sell_campaign;

$tdatamst_sell_campaign[".listFields"] = array();
$tdatamst_sell_campaign[".listFields"][] = "preview";
$tdatamst_sell_campaign[".listFields"][] = "id";
$tdatamst_sell_campaign[".listFields"][] = "inSession";
$tdatamst_sell_campaign[".listFields"][] = "camp_startDate";
$tdatamst_sell_campaign[".listFields"][] = "camp_lastDate";
$tdatamst_sell_campaign[".listFields"][] = "mall_name";
$tdatamst_sell_campaign[".listFields"][] = "folderName";
$tdatamst_sell_campaign[".listFields"][] = "campaign_name";
$tdatamst_sell_campaign[".listFields"][] = "coupon_id";
$tdatamst_sell_campaign[".listFields"][] = "h1_sub";
$tdatamst_sell_campaign[".listFields"][] = "top_txt";
$tdatamst_sell_campaign[".listFields"][] = "content1_ttl";
$tdatamst_sell_campaign[".listFields"][] = "content1_sub";
$tdatamst_sell_campaign[".listFields"][] = "content1";
$tdatamst_sell_campaign[".listFields"][] = "content1_column";
$tdatamst_sell_campaign[".listFields"][] = "content2_ttl";
$tdatamst_sell_campaign[".listFields"][] = "content2_sub";
$tdatamst_sell_campaign[".listFields"][] = "content2";
$tdatamst_sell_campaign[".listFields"][] = "content2_column";
$tdatamst_sell_campaign[".listFields"][] = "content3_ttl";
$tdatamst_sell_campaign[".listFields"][] = "content3_sub";
$tdatamst_sell_campaign[".listFields"][] = "content3";
$tdatamst_sell_campaign[".listFields"][] = "content3_column";
$tdatamst_sell_campaign[".listFields"][] = "search_box1_on";
$tdatamst_sell_campaign[".listFields"][] = "search_box1_title";
$tdatamst_sell_campaign[".listFields"][] = "search_box1_word";
$tdatamst_sell_campaign[".listFields"][] = "search_box2_on";
$tdatamst_sell_campaign[".listFields"][] = "search_box2_title";
$tdatamst_sell_campaign[".listFields"][] = "search_box2_word";

$tdatamst_sell_campaign[".hideMobileList"] = array();


$tdatamst_sell_campaign[".viewFields"] = array();

$tdatamst_sell_campaign[".addFields"] = array();

$tdatamst_sell_campaign[".masterListFields"] = array();
$tdatamst_sell_campaign[".masterListFields"][] = "id";
$tdatamst_sell_campaign[".masterListFields"][] = "preview";
$tdatamst_sell_campaign[".masterListFields"][] = "mall_name";
$tdatamst_sell_campaign[".masterListFields"][] = "campaign_name";
$tdatamst_sell_campaign[".masterListFields"][] = "camp_startDate";
$tdatamst_sell_campaign[".masterListFields"][] = "camp_lastDate";
$tdatamst_sell_campaign[".masterListFields"][] = "h1_sub";
$tdatamst_sell_campaign[".masterListFields"][] = "top_txt";
$tdatamst_sell_campaign[".masterListFields"][] = "content1_ttl";
$tdatamst_sell_campaign[".masterListFields"][] = "content1_sub";
$tdatamst_sell_campaign[".masterListFields"][] = "content1";
$tdatamst_sell_campaign[".masterListFields"][] = "content1_column";
$tdatamst_sell_campaign[".masterListFields"][] = "content2_ttl";
$tdatamst_sell_campaign[".masterListFields"][] = "content2_sub";
$tdatamst_sell_campaign[".masterListFields"][] = "content2";
$tdatamst_sell_campaign[".masterListFields"][] = "content2_column";
$tdatamst_sell_campaign[".masterListFields"][] = "content3_ttl";
$tdatamst_sell_campaign[".masterListFields"][] = "content3_sub";
$tdatamst_sell_campaign[".masterListFields"][] = "content3";
$tdatamst_sell_campaign[".masterListFields"][] = "content3_column";
$tdatamst_sell_campaign[".masterListFields"][] = "search_box1_on";
$tdatamst_sell_campaign[".masterListFields"][] = "search_box1_title";
$tdatamst_sell_campaign[".masterListFields"][] = "search_box1_word";
$tdatamst_sell_campaign[".masterListFields"][] = "search_box2_on";
$tdatamst_sell_campaign[".masterListFields"][] = "search_box2_title";
$tdatamst_sell_campaign[".masterListFields"][] = "search_box2_word";
$tdatamst_sell_campaign[".masterListFields"][] = "coupon_id";
$tdatamst_sell_campaign[".masterListFields"][] = "inSession";
$tdatamst_sell_campaign[".masterListFields"][] = "folderName";

$tdatamst_sell_campaign[".inlineAddFields"] = array();
$tdatamst_sell_campaign[".inlineAddFields"][] = "inSession";
$tdatamst_sell_campaign[".inlineAddFields"][] = "camp_startDate";
$tdatamst_sell_campaign[".inlineAddFields"][] = "camp_lastDate";
$tdatamst_sell_campaign[".inlineAddFields"][] = "mall_name";
$tdatamst_sell_campaign[".inlineAddFields"][] = "folderName";
$tdatamst_sell_campaign[".inlineAddFields"][] = "campaign_name";
$tdatamst_sell_campaign[".inlineAddFields"][] = "coupon_id";
$tdatamst_sell_campaign[".inlineAddFields"][] = "h1_sub";
$tdatamst_sell_campaign[".inlineAddFields"][] = "top_txt";
$tdatamst_sell_campaign[".inlineAddFields"][] = "content1_ttl";
$tdatamst_sell_campaign[".inlineAddFields"][] = "content1_sub";
$tdatamst_sell_campaign[".inlineAddFields"][] = "content1";
$tdatamst_sell_campaign[".inlineAddFields"][] = "content1_column";
$tdatamst_sell_campaign[".inlineAddFields"][] = "content2_ttl";
$tdatamst_sell_campaign[".inlineAddFields"][] = "content2_sub";
$tdatamst_sell_campaign[".inlineAddFields"][] = "content2";
$tdatamst_sell_campaign[".inlineAddFields"][] = "content2_column";
$tdatamst_sell_campaign[".inlineAddFields"][] = "content3_ttl";
$tdatamst_sell_campaign[".inlineAddFields"][] = "content3_sub";
$tdatamst_sell_campaign[".inlineAddFields"][] = "content3";
$tdatamst_sell_campaign[".inlineAddFields"][] = "content3_column";
$tdatamst_sell_campaign[".inlineAddFields"][] = "search_box1_on";
$tdatamst_sell_campaign[".inlineAddFields"][] = "search_box1_title";
$tdatamst_sell_campaign[".inlineAddFields"][] = "search_box1_word";
$tdatamst_sell_campaign[".inlineAddFields"][] = "search_box2_on";
$tdatamst_sell_campaign[".inlineAddFields"][] = "search_box2_title";
$tdatamst_sell_campaign[".inlineAddFields"][] = "search_box2_word";

$tdatamst_sell_campaign[".editFields"] = array();

$tdatamst_sell_campaign[".inlineEditFields"] = array();
$tdatamst_sell_campaign[".inlineEditFields"][] = "inSession";
$tdatamst_sell_campaign[".inlineEditFields"][] = "camp_startDate";
$tdatamst_sell_campaign[".inlineEditFields"][] = "camp_lastDate";
$tdatamst_sell_campaign[".inlineEditFields"][] = "mall_name";
$tdatamst_sell_campaign[".inlineEditFields"][] = "folderName";
$tdatamst_sell_campaign[".inlineEditFields"][] = "campaign_name";
$tdatamst_sell_campaign[".inlineEditFields"][] = "coupon_id";
$tdatamst_sell_campaign[".inlineEditFields"][] = "h1_sub";
$tdatamst_sell_campaign[".inlineEditFields"][] = "top_txt";
$tdatamst_sell_campaign[".inlineEditFields"][] = "content1_ttl";
$tdatamst_sell_campaign[".inlineEditFields"][] = "content1_sub";
$tdatamst_sell_campaign[".inlineEditFields"][] = "content1";
$tdatamst_sell_campaign[".inlineEditFields"][] = "content1_column";
$tdatamst_sell_campaign[".inlineEditFields"][] = "content2_ttl";
$tdatamst_sell_campaign[".inlineEditFields"][] = "content2_sub";
$tdatamst_sell_campaign[".inlineEditFields"][] = "content2";
$tdatamst_sell_campaign[".inlineEditFields"][] = "content2_column";
$tdatamst_sell_campaign[".inlineEditFields"][] = "content3_ttl";
$tdatamst_sell_campaign[".inlineEditFields"][] = "content3_sub";
$tdatamst_sell_campaign[".inlineEditFields"][] = "content3";
$tdatamst_sell_campaign[".inlineEditFields"][] = "content3_column";
$tdatamst_sell_campaign[".inlineEditFields"][] = "search_box1_on";
$tdatamst_sell_campaign[".inlineEditFields"][] = "search_box1_title";
$tdatamst_sell_campaign[".inlineEditFields"][] = "search_box1_word";
$tdatamst_sell_campaign[".inlineEditFields"][] = "search_box2_on";
$tdatamst_sell_campaign[".inlineEditFields"][] = "search_box2_title";
$tdatamst_sell_campaign[".inlineEditFields"][] = "search_box2_word";

$tdatamst_sell_campaign[".updateSelectedFields"] = array();


$tdatamst_sell_campaign[".exportFields"] = array();
$tdatamst_sell_campaign[".exportFields"][] = "preview";
$tdatamst_sell_campaign[".exportFields"][] = "id";
$tdatamst_sell_campaign[".exportFields"][] = "inSession";
$tdatamst_sell_campaign[".exportFields"][] = "mall_name";
$tdatamst_sell_campaign[".exportFields"][] = "folderName";
$tdatamst_sell_campaign[".exportFields"][] = "campaign_name";
$tdatamst_sell_campaign[".exportFields"][] = "camp_startDate";
$tdatamst_sell_campaign[".exportFields"][] = "camp_lastDate";
$tdatamst_sell_campaign[".exportFields"][] = "h1_sub";
$tdatamst_sell_campaign[".exportFields"][] = "top_txt";
$tdatamst_sell_campaign[".exportFields"][] = "content1_ttl";
$tdatamst_sell_campaign[".exportFields"][] = "content1_sub";
$tdatamst_sell_campaign[".exportFields"][] = "content1";
$tdatamst_sell_campaign[".exportFields"][] = "content1_column";
$tdatamst_sell_campaign[".exportFields"][] = "content2_ttl";
$tdatamst_sell_campaign[".exportFields"][] = "content2_sub";
$tdatamst_sell_campaign[".exportFields"][] = "content2";
$tdatamst_sell_campaign[".exportFields"][] = "content2_column";
$tdatamst_sell_campaign[".exportFields"][] = "content3_ttl";
$tdatamst_sell_campaign[".exportFields"][] = "content3_sub";
$tdatamst_sell_campaign[".exportFields"][] = "content3";
$tdatamst_sell_campaign[".exportFields"][] = "content3_column";
$tdatamst_sell_campaign[".exportFields"][] = "search_box1_on";
$tdatamst_sell_campaign[".exportFields"][] = "search_box1_title";
$tdatamst_sell_campaign[".exportFields"][] = "search_box1_word";
$tdatamst_sell_campaign[".exportFields"][] = "search_box2_on";
$tdatamst_sell_campaign[".exportFields"][] = "search_box2_title";
$tdatamst_sell_campaign[".exportFields"][] = "search_box2_word";
$tdatamst_sell_campaign[".exportFields"][] = "coupon_id";

$tdatamst_sell_campaign[".importFields"] = array();
$tdatamst_sell_campaign[".importFields"][] = "id";
$tdatamst_sell_campaign[".importFields"][] = "preview";
$tdatamst_sell_campaign[".importFields"][] = "mall_name";
$tdatamst_sell_campaign[".importFields"][] = "campaign_name";
$tdatamst_sell_campaign[".importFields"][] = "camp_startDate";
$tdatamst_sell_campaign[".importFields"][] = "camp_lastDate";
$tdatamst_sell_campaign[".importFields"][] = "h1_sub";
$tdatamst_sell_campaign[".importFields"][] = "top_txt";
$tdatamst_sell_campaign[".importFields"][] = "content1_ttl";
$tdatamst_sell_campaign[".importFields"][] = "content1_sub";
$tdatamst_sell_campaign[".importFields"][] = "content1";
$tdatamst_sell_campaign[".importFields"][] = "content1_column";
$tdatamst_sell_campaign[".importFields"][] = "content2_ttl";
$tdatamst_sell_campaign[".importFields"][] = "content2_sub";
$tdatamst_sell_campaign[".importFields"][] = "content2";
$tdatamst_sell_campaign[".importFields"][] = "content2_column";
$tdatamst_sell_campaign[".importFields"][] = "content3_ttl";
$tdatamst_sell_campaign[".importFields"][] = "content3_sub";
$tdatamst_sell_campaign[".importFields"][] = "content3";
$tdatamst_sell_campaign[".importFields"][] = "content3_column";
$tdatamst_sell_campaign[".importFields"][] = "search_box1_on";
$tdatamst_sell_campaign[".importFields"][] = "search_box1_title";
$tdatamst_sell_campaign[".importFields"][] = "search_box1_word";
$tdatamst_sell_campaign[".importFields"][] = "search_box2_on";
$tdatamst_sell_campaign[".importFields"][] = "search_box2_title";
$tdatamst_sell_campaign[".importFields"][] = "search_box2_word";
$tdatamst_sell_campaign[".importFields"][] = "coupon_id";
$tdatamst_sell_campaign[".importFields"][] = "inSession";
$tdatamst_sell_campaign[".importFields"][] = "folderName";

$tdatamst_sell_campaign[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




	$tdatamst_sell_campaign["id"] = $fdata;
//	preview
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "preview";
	$fdata["GoodName"] = "preview";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","preview");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




	$tdatamst_sell_campaign["preview"] = $fdata;
//	mall_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mall_name";
	$fdata["GoodName"] = "mall_name";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","mall_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mall_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mall_name";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_sell_campaign["mall_name"] = $fdata;
//	campaign_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "campaign_name";
	$fdata["GoodName"] = "campaign_name";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","campaign_name");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "campaign_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "campaign_name";

	
	
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




	$tdatamst_sell_campaign["campaign_name"] = $fdata;
//	camp_startDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "camp_startDate";
	$fdata["GoodName"] = "camp_startDate";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","camp_startDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "camp_startDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "camp_startDate";

	
	
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




	$tdatamst_sell_campaign["camp_startDate"] = $fdata;
//	camp_lastDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "camp_lastDate";
	$fdata["GoodName"] = "camp_lastDate";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","camp_lastDate");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "camp_lastDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "camp_lastDate";

	
	
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




	$tdatamst_sell_campaign["camp_lastDate"] = $fdata;
//	h1_sub
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "h1_sub";
	$fdata["GoodName"] = "h1_sub";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","h1_sub");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "h1_sub";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "h1_sub";

	
	
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




	$tdatamst_sell_campaign["h1_sub"] = $fdata;
//	top_txt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "top_txt";
	$fdata["GoodName"] = "top_txt";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","top_txt");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "top_txt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "top_txt";

	
	
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




	$tdatamst_sell_campaign["top_txt"] = $fdata;
//	content1_ttl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "content1_ttl";
	$fdata["GoodName"] = "content1_ttl";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","content1_ttl");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "content1_ttl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "content1_ttl";

	
	
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




	$tdatamst_sell_campaign["content1_ttl"] = $fdata;
//	content1_sub
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "content1_sub";
	$fdata["GoodName"] = "content1_sub";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","content1_sub");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "content1_sub";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "content1_sub";

	
	
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




	$tdatamst_sell_campaign["content1_sub"] = $fdata;
//	content1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "content1";
	$fdata["GoodName"] = "content1";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","content1");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "content1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "content1";

	
	
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




	$tdatamst_sell_campaign["content1"] = $fdata;
//	content1_column
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "content1_column";
	$fdata["GoodName"] = "content1_column";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","content1_column");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "content1_column";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "content1_column";

	
	
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




	$tdatamst_sell_campaign["content1_column"] = $fdata;
//	content2_ttl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "content2_ttl";
	$fdata["GoodName"] = "content2_ttl";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","content2_ttl");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "content2_ttl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "content2_ttl";

	
	
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




	$tdatamst_sell_campaign["content2_ttl"] = $fdata;
//	content2_sub
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "content2_sub";
	$fdata["GoodName"] = "content2_sub";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","content2_sub");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "content2_sub";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "content2_sub";

	
	
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




	$tdatamst_sell_campaign["content2_sub"] = $fdata;
//	content2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "content2";
	$fdata["GoodName"] = "content2";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","content2");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "content2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "content2";

	
	
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




	$tdatamst_sell_campaign["content2"] = $fdata;
//	content2_column
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "content2_column";
	$fdata["GoodName"] = "content2_column";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","content2_column");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "content2_column";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "content2_column";

	
	
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




	$tdatamst_sell_campaign["content2_column"] = $fdata;
//	content3_ttl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "content3_ttl";
	$fdata["GoodName"] = "content3_ttl";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","content3_ttl");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "content3_ttl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "content3_ttl";

	
	
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




	$tdatamst_sell_campaign["content3_ttl"] = $fdata;
//	content3_sub
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "content3_sub";
	$fdata["GoodName"] = "content3_sub";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","content3_sub");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "content3_sub";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "content3_sub";

	
	
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




	$tdatamst_sell_campaign["content3_sub"] = $fdata;
//	content3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "content3";
	$fdata["GoodName"] = "content3";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","content3");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "content3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "content3";

	
	
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




	$tdatamst_sell_campaign["content3"] = $fdata;
//	content3_column
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "content3_column";
	$fdata["GoodName"] = "content3_column";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","content3_column");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "content3_column";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "content3_column";

	
	
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




	$tdatamst_sell_campaign["content3_column"] = $fdata;
//	search_box1_on
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "search_box1_on";
	$fdata["GoodName"] = "search_box1_on";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","search_box1_on");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "search_box1_on";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "search_box1_on";

	
	
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




	$tdatamst_sell_campaign["search_box1_on"] = $fdata;
//	search_box1_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "search_box1_title";
	$fdata["GoodName"] = "search_box1_title";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","search_box1_title");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "search_box1_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "search_box1_title";

	
	
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




	$tdatamst_sell_campaign["search_box1_title"] = $fdata;
//	search_box1_word
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "search_box1_word";
	$fdata["GoodName"] = "search_box1_word";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","search_box1_word");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "search_box1_word";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "search_box1_word";

	
	
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




	$tdatamst_sell_campaign["search_box1_word"] = $fdata;
//	search_box2_on
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "search_box2_on";
	$fdata["GoodName"] = "search_box2_on";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","search_box2_on");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "search_box2_on";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "search_box2_on";

	
	
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




	$tdatamst_sell_campaign["search_box2_on"] = $fdata;
//	search_box2_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "search_box2_title";
	$fdata["GoodName"] = "search_box2_title";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","search_box2_title");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "search_box2_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "search_box2_title";

	
	
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




	$tdatamst_sell_campaign["search_box2_title"] = $fdata;
//	search_box2_word
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "search_box2_word";
	$fdata["GoodName"] = "search_box2_word";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","search_box2_word");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "search_box2_word";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "search_box2_word";

	
	
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




	$tdatamst_sell_campaign["search_box2_word"] = $fdata;
//	coupon_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "coupon_id";
	$fdata["GoodName"] = "coupon_id";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","coupon_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "coupon_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "coupon_id";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_sell_campaign["coupon_id"] = $fdata;
//	inSession
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "inSession";
	$fdata["GoodName"] = "inSession";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","inSession");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inSession";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inSession";

	
	
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




	$tdatamst_sell_campaign["inSession"] = $fdata;
//	folderName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "folderName";
	$fdata["GoodName"] = "folderName";
	$fdata["ownerTable"] = "mst_sell_campaign";
	$fdata["Label"] = GetFieldLabel("mst_sell_campaign","folderName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "folderName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "folderName";

	
	
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




	$tdatamst_sell_campaign["folderName"] = $fdata;


$tables_data["mst_sell_campaign"]=&$tdatamst_sell_campaign;
$field_labels["mst_sell_campaign"] = &$fieldLabelsmst_sell_campaign;
$fieldToolTips["mst_sell_campaign"] = &$fieldToolTipsmst_sell_campaign;
$placeHolders["mst_sell_campaign"] = &$placeHoldersmst_sell_campaign;
$page_titles["mst_sell_campaign"] = &$pageTitlesmst_sell_campaign;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_sell_campaign"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_sell_campaign"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_sell_campaign()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  id AS preview,  mall_name,  campaign_name,  camp_startDate,  camp_lastDate,  h1_sub,  top_txt,  content1_ttl,  content1_sub,  content1,  content1_column,  content2_ttl,  content2_sub,  content2,  content2_column,  content3_ttl,  content3_sub,  content3,  content3_column,  search_box1_on,  search_box1_title,  search_box1_word,  search_box2_on,  search_box2_title,  search_box2_word,  coupon_id,  inSession,  folderName";
$proto0["m_strFrom"] = "FROM mst_sell_campaign";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY id DESC";
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
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_sell_campaign";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto8["m_sql"] = "id";
$proto8["m_srcTableName"] = "mst_sell_campaign";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "preview";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mall_name",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto10["m_sql"] = "mall_name";
$proto10["m_srcTableName"] = "mst_sell_campaign";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "campaign_name",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto12["m_sql"] = "campaign_name";
$proto12["m_srcTableName"] = "mst_sell_campaign";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "camp_startDate",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto14["m_sql"] = "camp_startDate";
$proto14["m_srcTableName"] = "mst_sell_campaign";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "camp_lastDate",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto16["m_sql"] = "camp_lastDate";
$proto16["m_srcTableName"] = "mst_sell_campaign";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "h1_sub",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto18["m_sql"] = "h1_sub";
$proto18["m_srcTableName"] = "mst_sell_campaign";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "top_txt",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto20["m_sql"] = "top_txt";
$proto20["m_srcTableName"] = "mst_sell_campaign";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "content1_ttl",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto22["m_sql"] = "content1_ttl";
$proto22["m_srcTableName"] = "mst_sell_campaign";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "content1_sub",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto24["m_sql"] = "content1_sub";
$proto24["m_srcTableName"] = "mst_sell_campaign";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "content1",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto26["m_sql"] = "content1";
$proto26["m_srcTableName"] = "mst_sell_campaign";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "content1_column",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto28["m_sql"] = "content1_column";
$proto28["m_srcTableName"] = "mst_sell_campaign";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "content2_ttl",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto30["m_sql"] = "content2_ttl";
$proto30["m_srcTableName"] = "mst_sell_campaign";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "content2_sub",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto32["m_sql"] = "content2_sub";
$proto32["m_srcTableName"] = "mst_sell_campaign";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "content2",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto34["m_sql"] = "content2";
$proto34["m_srcTableName"] = "mst_sell_campaign";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "content2_column",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto36["m_sql"] = "content2_column";
$proto36["m_srcTableName"] = "mst_sell_campaign";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "content3_ttl",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto38["m_sql"] = "content3_ttl";
$proto38["m_srcTableName"] = "mst_sell_campaign";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "content3_sub",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto40["m_sql"] = "content3_sub";
$proto40["m_srcTableName"] = "mst_sell_campaign";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "content3",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto42["m_sql"] = "content3";
$proto42["m_srcTableName"] = "mst_sell_campaign";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "content3_column",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto44["m_sql"] = "content3_column";
$proto44["m_srcTableName"] = "mst_sell_campaign";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "search_box1_on",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto46["m_sql"] = "search_box1_on";
$proto46["m_srcTableName"] = "mst_sell_campaign";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "search_box1_title",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto48["m_sql"] = "search_box1_title";
$proto48["m_srcTableName"] = "mst_sell_campaign";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "search_box1_word",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto50["m_sql"] = "search_box1_word";
$proto50["m_srcTableName"] = "mst_sell_campaign";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "search_box2_on",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto52["m_sql"] = "search_box2_on";
$proto52["m_srcTableName"] = "mst_sell_campaign";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "search_box2_title",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto54["m_sql"] = "search_box2_title";
$proto54["m_srcTableName"] = "mst_sell_campaign";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "search_box2_word",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto56["m_sql"] = "search_box2_word";
$proto56["m_srcTableName"] = "mst_sell_campaign";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "coupon_id",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto58["m_sql"] = "coupon_id";
$proto58["m_srcTableName"] = "mst_sell_campaign";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "inSession",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto60["m_sql"] = "inSession";
$proto60["m_srcTableName"] = "mst_sell_campaign";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "folderName",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto62["m_sql"] = "folderName";
$proto62["m_srcTableName"] = "mst_sell_campaign";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "mst_sell_campaign";
$proto65["m_srcTableName"] = "mst_sell_campaign";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "inSession";
$proto65["m_columns"][] = "folderName";
$proto65["m_columns"][] = "id";
$proto65["m_columns"][] = "mall_name";
$proto65["m_columns"][] = "campaign_name";
$proto65["m_columns"][] = "camp_startDate";
$proto65["m_columns"][] = "camp_lastDate";
$proto65["m_columns"][] = "h1_sub";
$proto65["m_columns"][] = "top_txt";
$proto65["m_columns"][] = "coupon_name";
$proto65["m_columns"][] = "coupon_id";
$proto65["m_columns"][] = "content1_ttl";
$proto65["m_columns"][] = "content1_sub";
$proto65["m_columns"][] = "content1";
$proto65["m_columns"][] = "content1_row";
$proto65["m_columns"][] = "content1_column";
$proto65["m_columns"][] = "content2_ttl";
$proto65["m_columns"][] = "content2_sub";
$proto65["m_columns"][] = "content2";
$proto65["m_columns"][] = "content2_row";
$proto65["m_columns"][] = "content2_column";
$proto65["m_columns"][] = "content3_ttl";
$proto65["m_columns"][] = "content3_sub";
$proto65["m_columns"][] = "content3";
$proto65["m_columns"][] = "content3_row";
$proto65["m_columns"][] = "content3_column";
$proto65["m_columns"][] = "search_box1_on";
$proto65["m_columns"][] = "search_box1_title";
$proto65["m_columns"][] = "search_box1_word";
$proto65["m_columns"][] = "search_box1_row";
$proto65["m_columns"][] = "search_box1_column";
$proto65["m_columns"][] = "search_box2_on";
$proto65["m_columns"][] = "search_box2_title";
$proto65["m_columns"][] = "search_box2_word";
$proto65["m_columns"][] = "search_box2_row";
$proto65["m_columns"][] = "search_box2_column";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "mst_sell_campaign";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "mst_sell_campaign";
$proto66=array();
$proto66["m_sql"] = "";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto68=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "mst_sell_campaign",
	"m_srcTableName" => "mst_sell_campaign"
));

$proto68["m_column"]=$obj;
$proto68["m_bAsc"] = 0;
$proto68["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto68);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_sell_campaign";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_sell_campaign = createSqlQuery_mst_sell_campaign();


	
		;

																													

$tdatamst_sell_campaign[".sqlquery"] = $queryData_mst_sell_campaign;

$tableEvents["mst_sell_campaign"] = new eventsBase;
$tdatamst_sell_campaign[".hasEvents"] = false;

?>