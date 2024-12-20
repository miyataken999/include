<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_deal_join_manual_journal__detail__memotag = array();
	$tdatafreee_deal_join_manual_journal__detail__memotag[".truncateText"] = true;
	$tdatafreee_deal_join_manual_journal__detail__memotag[".NumberOfChars"] = 80;
	$tdatafreee_deal_join_manual_journal__detail__memotag[".ShortName"] = "freee_deal_join_manual_journal__detail__memotag";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".OwnerID"] = "";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".OriginalTable"] = "freee_deal_join_manual_journal__detail__memotag";

//	field labels
$fieldLabelsfreee_deal_join_manual_journal__detail__memotag = array();
$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag = array();
$pageTitlesfreee_deal_join_manual_journal__detail__memotag = array();
$placeHoldersfreee_deal_join_manual_journal__detail__memotag = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"] = array();
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"] = array();
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"] = array();
	$pageTitlesfreee_deal_join_manual_journal__detail__memotag["Japanese"] = array();
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"]["id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["freee_deal_join_manual_journal__detail_id"] = "合体データId";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["freee_deal_join_manual_journal__detail_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"]["freee_deal_join_manual_journal__detail_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["memotag_id"] = "メモタグ";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["memotag_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"]["memotag_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["entry_side"] = "貸借";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["entry_side"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"]["entry_side"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["account_item_id"] = "勘定科目";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["account_item_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"]["account_item_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["tax_code"] = "税区分";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["tax_code"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"]["tax_code"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["partner_id"] = "取引先";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["partner_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"]["partner_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["item_id"] = "品目";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["item_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"]["item_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["section_id"] = "部門";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["section_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"]["section_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["tag_ids"] = "Tag Ids";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["tag_ids"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"]["tag_ids"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["amount"] = "金額";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["amount"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"]["amount"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["vat"] = "消費税";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["vat"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"]["vat"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["description"] = "備考";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["description"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"]["description"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["issue_date"] = "発生日";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["issue_date"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"]["issue_date"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["data_type"] = "タイプ";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["data_type"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"]["data_type"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["freee_deal_detail_id"] = "取引データID";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["freee_deal_detail_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"]["freee_deal_detail_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["freee_manual_journal_detail_id"] = "振替伝票ID";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]["freee_manual_journal_detail_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["Japanese"]["freee_manual_journal_detail_id"] = "";
	if (count($fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["Japanese"]))
		$tdatafreee_deal_join_manual_journal__detail__memotag[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""] = array();
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""] = array();
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""] = array();
	$pageTitlesfreee_deal_join_manual_journal__detail__memotag[""] = array();
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""]["id"] = "Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]["id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""]["id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""]["freee_deal_join_manual_journal__detail_id"] = "Freee Deal Join Manual Journal  Detail Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]["freee_deal_join_manual_journal__detail_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""]["freee_deal_join_manual_journal__detail_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""]["memotag_id"] = "Memotag Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]["memotag_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""]["memotag_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""]["entry_side"] = "Entry Side";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]["entry_side"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""]["entry_side"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""]["account_item_id"] = "Account Item Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]["account_item_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""]["account_item_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""]["tax_code"] = "Tax Code";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]["tax_code"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""]["tax_code"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""]["partner_id"] = "Partner Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]["partner_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""]["partner_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""]["item_id"] = "Item Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]["item_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""]["item_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""]["section_id"] = "Section Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]["section_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""]["section_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""]["tag_ids"] = "Tag Ids";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]["tag_ids"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""]["tag_ids"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""]["amount"] = "Amount";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]["amount"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""]["amount"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""]["vat"] = "Vat";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]["vat"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""]["vat"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""]["description"] = "Description";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]["description"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""]["description"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""]["issue_date"] = "Issue Date";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]["issue_date"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""]["issue_date"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""]["data_type"] = "Data Type";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]["data_type"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""]["data_type"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""]["freee_deal_detail_id"] = "Freee Deal Detail Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]["freee_deal_detail_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""]["freee_deal_detail_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag[""]["freee_manual_journal_detail_id"] = "Freee Manual Journal Detail Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]["freee_manual_journal_detail_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag[""]["freee_manual_journal_detail_id"] = "";
	if (count($fieldToolTipsfreee_deal_join_manual_journal__detail__memotag[""]))
		$tdatafreee_deal_join_manual_journal__detail__memotag[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"] = array();
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"] = array();
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"] = array();
	$pageTitlesfreee_deal_join_manual_journal__detail__memotag["English"] = array();
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"]["id"] = "Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]["id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"]["id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"]["freee_deal_join_manual_journal__detail_id"] = "Freee Deal Join Manual Journal  Detail Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]["freee_deal_join_manual_journal__detail_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"]["freee_deal_join_manual_journal__detail_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"]["memotag_id"] = "Memotag Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]["memotag_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"]["memotag_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"]["entry_side"] = "Entry Side";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]["entry_side"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"]["entry_side"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"]["account_item_id"] = "Account Item Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]["account_item_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"]["account_item_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"]["tax_code"] = "Tax Code";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]["tax_code"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"]["tax_code"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"]["partner_id"] = "Partner Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]["partner_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"]["partner_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"]["item_id"] = "Item Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]["item_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"]["item_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"]["section_id"] = "Section Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]["section_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"]["section_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"]["tag_ids"] = "Tag Ids";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]["tag_ids"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"]["tag_ids"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"]["amount"] = "Amount";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]["amount"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"]["amount"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"]["vat"] = "Vat";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]["vat"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"]["vat"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"]["description"] = "Description";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]["description"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"]["description"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"]["issue_date"] = "Issue Date";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]["issue_date"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"]["issue_date"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"]["data_type"] = "Data Type";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]["data_type"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"]["data_type"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"]["freee_deal_detail_id"] = "Freee Deal Detail Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]["freee_deal_detail_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"]["freee_deal_detail_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__detail__memotag["English"]["freee_manual_journal_detail_id"] = "Freee Manual Journal Detail Id";
	$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]["freee_manual_journal_detail_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__detail__memotag["English"]["freee_manual_journal_detail_id"] = "";
	if (count($fieldToolTipsfreee_deal_join_manual_journal__detail__memotag["English"]))
		$tdatafreee_deal_join_manual_journal__detail__memotag[".isUseToolTips"] = true;
}


	$tdatafreee_deal_join_manual_journal__detail__memotag[".NCSearch"] = true;



$tdatafreee_deal_join_manual_journal__detail__memotag[".shortTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$tdatafreee_deal_join_manual_journal__detail__memotag[".nSecOptions"] = 0;
$tdatafreee_deal_join_manual_journal__detail__memotag[".recsPerRowPrint"] = 1;
$tdatafreee_deal_join_manual_journal__detail__memotag[".mainTableOwnerID"] = "";
$tdatafreee_deal_join_manual_journal__detail__memotag[".moveNext"] = 1;
$tdatafreee_deal_join_manual_journal__detail__memotag[".entityType"] = 0;

$tdatafreee_deal_join_manual_journal__detail__memotag[".strOriginalTableName"] = "freee_deal_join_manual_journal__detail__memotag";

	



$tdatafreee_deal_join_manual_journal__detail__memotag[".showAddInPopup"] = false;

$tdatafreee_deal_join_manual_journal__detail__memotag[".showEditInPopup"] = false;

$tdatafreee_deal_join_manual_journal__detail__memotag[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_deal_join_manual_journal__detail__memotag[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_deal_join_manual_journal__detail__memotag[".fieldsForRegister"] = array();

$tdatafreee_deal_join_manual_journal__detail__memotag[".listAjax"] = false;

	$tdatafreee_deal_join_manual_journal__detail__memotag[".audit"] = false;

	$tdatafreee_deal_join_manual_journal__detail__memotag[".locking"] = false;



$tdatafreee_deal_join_manual_journal__detail__memotag[".list"] = true;



$tdatafreee_deal_join_manual_journal__detail__memotag[".reorderRecordsByHeader"] = true;





$tdatafreee_deal_join_manual_journal__detail__memotag[".exportTo"] = true;



$tdatafreee_deal_join_manual_journal__detail__memotag[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_deal_join_manual_journal__detail__memotag[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_deal_join_manual_journal__detail__memotag[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_deal_join_manual_journal__detail__memotag[".searchSaving"] = false;
//

$tdatafreee_deal_join_manual_journal__detail__memotag[".showSearchPanel"] = true;
		$tdatafreee_deal_join_manual_journal__detail__memotag[".flexibleSearch"] = true;

$tdatafreee_deal_join_manual_journal__detail__memotag[".isUseAjaxSuggest"] = true;

$tdatafreee_deal_join_manual_journal__detail__memotag[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_deal_join_manual_journal__detail__memotag[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_deal_join_manual_journal__detail__memotag[".buttonsAdded"] = false;

$tdatafreee_deal_join_manual_journal__detail__memotag[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_deal_join_manual_journal__detail__memotag[".isUseTimeForSearch"] = false;





$tdatafreee_deal_join_manual_journal__detail__memotag[".allSearchFields"] = array();
$tdatafreee_deal_join_manual_journal__detail__memotag[".filterFields"] = array();
$tdatafreee_deal_join_manual_journal__detail__memotag[".requiredSearchFields"] = array();

$tdatafreee_deal_join_manual_journal__detail__memotag[".allSearchFields"][] = "id";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".allSearchFields"][] = "freee_deal_join_manual_journal__detail_id";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".allSearchFields"][] = "memotag_id";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".allSearchFields"][] = "entry_side";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".allSearchFields"][] = "issue_date";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".allSearchFields"][] = "account_item_id";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".allSearchFields"][] = "section_id";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".allSearchFields"][] = "item_id";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".allSearchFields"][] = "amount";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".allSearchFields"][] = "vat";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".allSearchFields"][] = "partner_id";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".allSearchFields"][] = "tax_code";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".allSearchFields"][] = "description";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".allSearchFields"][] = "data_type";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".allSearchFields"][] = "freee_deal_detail_id";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".allSearchFields"][] = "freee_manual_journal_detail_id";
	

$tdatafreee_deal_join_manual_journal__detail__memotag[".googleLikeFields"] = array();
$tdatafreee_deal_join_manual_journal__detail__memotag[".googleLikeFields"][] = "id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".googleLikeFields"][] = "freee_deal_join_manual_journal__detail_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".googleLikeFields"][] = "memotag_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".googleLikeFields"][] = "entry_side";
$tdatafreee_deal_join_manual_journal__detail__memotag[".googleLikeFields"][] = "account_item_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".googleLikeFields"][] = "tax_code";
$tdatafreee_deal_join_manual_journal__detail__memotag[".googleLikeFields"][] = "partner_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".googleLikeFields"][] = "item_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".googleLikeFields"][] = "section_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".googleLikeFields"][] = "amount";
$tdatafreee_deal_join_manual_journal__detail__memotag[".googleLikeFields"][] = "vat";
$tdatafreee_deal_join_manual_journal__detail__memotag[".googleLikeFields"][] = "description";
$tdatafreee_deal_join_manual_journal__detail__memotag[".googleLikeFields"][] = "issue_date";
$tdatafreee_deal_join_manual_journal__detail__memotag[".googleLikeFields"][] = "data_type";
$tdatafreee_deal_join_manual_journal__detail__memotag[".googleLikeFields"][] = "freee_deal_detail_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".googleLikeFields"][] = "freee_manual_journal_detail_id";

$tdatafreee_deal_join_manual_journal__detail__memotag[".panelSearchFields"] = array();
$tdatafreee_deal_join_manual_journal__detail__memotag[".searchPanelOptions"] = array();
$tdatafreee_deal_join_manual_journal__detail__memotag[".panelSearchFields"][] = "id";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".panelSearchFields"][] = "freee_deal_join_manual_journal__detail_id";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".panelSearchFields"][] = "memotag_id";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".panelSearchFields"][] = "entry_side";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".panelSearchFields"][] = "issue_date";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".panelSearchFields"][] = "account_item_id";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".panelSearchFields"][] = "section_id";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".panelSearchFields"][] = "item_id";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".panelSearchFields"][] = "amount";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".panelSearchFields"][] = "vat";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".panelSearchFields"][] = "partner_id";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".panelSearchFields"][] = "tax_code";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".panelSearchFields"][] = "description";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".panelSearchFields"][] = "data_type";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".panelSearchFields"][] = "freee_deal_detail_id";
	$tdatafreee_deal_join_manual_journal__detail__memotag[".panelSearchFields"][] = "freee_manual_journal_detail_id";
	
$tdatafreee_deal_join_manual_journal__detail__memotag[".advSearchFields"] = array();
$tdatafreee_deal_join_manual_journal__detail__memotag[".advSearchFields"][] = "id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".advSearchFields"][] = "freee_deal_join_manual_journal__detail_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".advSearchFields"][] = "memotag_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".advSearchFields"][] = "entry_side";
$tdatafreee_deal_join_manual_journal__detail__memotag[".advSearchFields"][] = "issue_date";
$tdatafreee_deal_join_manual_journal__detail__memotag[".advSearchFields"][] = "account_item_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".advSearchFields"][] = "section_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".advSearchFields"][] = "item_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".advSearchFields"][] = "amount";
$tdatafreee_deal_join_manual_journal__detail__memotag[".advSearchFields"][] = "vat";
$tdatafreee_deal_join_manual_journal__detail__memotag[".advSearchFields"][] = "partner_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".advSearchFields"][] = "tax_code";
$tdatafreee_deal_join_manual_journal__detail__memotag[".advSearchFields"][] = "description";
$tdatafreee_deal_join_manual_journal__detail__memotag[".advSearchFields"][] = "data_type";
$tdatafreee_deal_join_manual_journal__detail__memotag[".advSearchFields"][] = "freee_deal_detail_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".advSearchFields"][] = "freee_manual_journal_detail_id";

$tdatafreee_deal_join_manual_journal__detail__memotag[".tableType"] = "list";

$tdatafreee_deal_join_manual_journal__detail__memotag[".printerPageOrientation"] = 0;
$tdatafreee_deal_join_manual_journal__detail__memotag[".nPrinterPageScale"] = 100;

$tdatafreee_deal_join_manual_journal__detail__memotag[".nPrinterSplitRecords"] = 40;

$tdatafreee_deal_join_manual_journal__detail__memotag[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_deal_join_manual_journal__detail__memotag[".geocodingEnabled"] = false;





$tdatafreee_deal_join_manual_journal__detail__memotag[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatafreee_deal_join_manual_journal__detail__memotag[".totalsFields"] = array();
$tdatafreee_deal_join_manual_journal__detail__memotag[".totalsFields"][] = array(
	"fName" => "amount",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatafreee_deal_join_manual_journal__detail__memotag[".totalsFields"][] = array(
	"fName" => "vat",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');

$tdatafreee_deal_join_manual_journal__detail__memotag[".pageSize"] = 100;

$tdatafreee_deal_join_manual_journal__detail__memotag[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `freee_deal_join_manual_journal__details`.`issue_date` DESC, `freee_deal_join_manual_journal__details`.`amount` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_deal_join_manual_journal__detail__memotag[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_deal_join_manual_journal__detail__memotag[".orderindexes"] = array();
$tdatafreee_deal_join_manual_journal__detail__memotag[".orderindexes"][] = array(14, (0 ? "ASC" : "DESC"), "`freee_deal_join_manual_journal__details`.`issue_date`");
$tdatafreee_deal_join_manual_journal__detail__memotag[".orderindexes"][] = array(11, (0 ? "ASC" : "DESC"), "`freee_deal_join_manual_journal__details`.`amount`");

$tdatafreee_deal_join_manual_journal__detail__memotag[".sqlHead"] = "SELECT `freee_deal_join_manual_journal__detail__memotag`.`id`,  `freee_deal_join_manual_journal__detail__memotag`.`freee_deal_join_manual_journal__detail_id`,  `freee_deal_join_manual_journal__detail__memotag`.`memotag_id`,  `freee_deal_join_manual_journal__details`.`entry_side`,  `freee_deal_join_manual_journal__details`.`account_item_id`,  `freee_deal_join_manual_journal__details`.`tax_code`,  `freee_deal_join_manual_journal__details`.`partner_id`,  `freee_deal_join_manual_journal__details`.`item_id`,  `freee_deal_join_manual_journal__details`.`section_id`,  `freee_deal_join_manual_journal__details`.`tag_ids`,  `freee_deal_join_manual_journal__details`.`amount`,  `freee_deal_join_manual_journal__details`.`vat`,  `freee_deal_join_manual_journal__details`.`description`,  `freee_deal_join_manual_journal__details`.`issue_date`,  `freee_deal_join_manual_journal__details`.`data_type`,  `freee_deal_join_manual_journal__details`.`freee_deal_detail_id`,  `freee_deal_join_manual_journal__details`.`freee_manual_journal_detail_id`";
$tdatafreee_deal_join_manual_journal__detail__memotag[".sqlFrom"] = "FROM `freee_deal_join_manual_journal__detail__memotag`  LEFT OUTER JOIN `freee_deal_join_manual_journal__details` ON `freee_deal_join_manual_journal__detail__memotag`.`freee_deal_join_manual_journal__detail_id` = `freee_deal_join_manual_journal__details`.`id`";
$tdatafreee_deal_join_manual_journal__detail__memotag[".sqlWhereExpr"] = "";
$tdatafreee_deal_join_manual_journal__detail__memotag[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_deal_join_manual_journal__detail__memotag[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_deal_join_manual_journal__detail__memotag[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_deal_join_manual_journal__detail__memotag[".highlightSearchResults"] = true;

$tableKeysfreee_deal_join_manual_journal__detail__memotag = array();
$tableKeysfreee_deal_join_manual_journal__detail__memotag[] = "id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".Keys"] = $tableKeysfreee_deal_join_manual_journal__detail__memotag;

$tdatafreee_deal_join_manual_journal__detail__memotag[".listFields"] = array();
$tdatafreee_deal_join_manual_journal__detail__memotag[".listFields"][] = "id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".listFields"][] = "freee_deal_join_manual_journal__detail_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".listFields"][] = "memotag_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".listFields"][] = "entry_side";
$tdatafreee_deal_join_manual_journal__detail__memotag[".listFields"][] = "issue_date";
$tdatafreee_deal_join_manual_journal__detail__memotag[".listFields"][] = "account_item_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".listFields"][] = "section_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".listFields"][] = "item_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".listFields"][] = "amount";
$tdatafreee_deal_join_manual_journal__detail__memotag[".listFields"][] = "vat";
$tdatafreee_deal_join_manual_journal__detail__memotag[".listFields"][] = "partner_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".listFields"][] = "tax_code";
$tdatafreee_deal_join_manual_journal__detail__memotag[".listFields"][] = "description";
$tdatafreee_deal_join_manual_journal__detail__memotag[".listFields"][] = "data_type";
$tdatafreee_deal_join_manual_journal__detail__memotag[".listFields"][] = "freee_deal_detail_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".listFields"][] = "freee_manual_journal_detail_id";

$tdatafreee_deal_join_manual_journal__detail__memotag[".hideMobileList"] = array();


$tdatafreee_deal_join_manual_journal__detail__memotag[".viewFields"] = array();

$tdatafreee_deal_join_manual_journal__detail__memotag[".addFields"] = array();

$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"] = array();
$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"][] = "tag_ids";
$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"][] = "id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"][] = "freee_deal_join_manual_journal__detail_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"][] = "memotag_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"][] = "entry_side";
$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"][] = "issue_date";
$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"][] = "account_item_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"][] = "section_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"][] = "item_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"][] = "amount";
$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"][] = "vat";
$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"][] = "partner_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"][] = "tax_code";
$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"][] = "description";
$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"][] = "data_type";
$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"][] = "freee_deal_detail_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".masterListFields"][] = "freee_manual_journal_detail_id";

$tdatafreee_deal_join_manual_journal__detail__memotag[".inlineAddFields"] = array();

$tdatafreee_deal_join_manual_journal__detail__memotag[".editFields"] = array();

$tdatafreee_deal_join_manual_journal__detail__memotag[".inlineEditFields"] = array();

$tdatafreee_deal_join_manual_journal__detail__memotag[".updateSelectedFields"] = array();


$tdatafreee_deal_join_manual_journal__detail__memotag[".exportFields"] = array();
$tdatafreee_deal_join_manual_journal__detail__memotag[".exportFields"][] = "id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".exportFields"][] = "freee_deal_join_manual_journal__detail_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".exportFields"][] = "memotag_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".exportFields"][] = "entry_side";
$tdatafreee_deal_join_manual_journal__detail__memotag[".exportFields"][] = "issue_date";
$tdatafreee_deal_join_manual_journal__detail__memotag[".exportFields"][] = "account_item_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".exportFields"][] = "section_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".exportFields"][] = "item_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".exportFields"][] = "amount";
$tdatafreee_deal_join_manual_journal__detail__memotag[".exportFields"][] = "vat";
$tdatafreee_deal_join_manual_journal__detail__memotag[".exportFields"][] = "partner_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".exportFields"][] = "tax_code";
$tdatafreee_deal_join_manual_journal__detail__memotag[".exportFields"][] = "description";
$tdatafreee_deal_join_manual_journal__detail__memotag[".exportFields"][] = "data_type";
$tdatafreee_deal_join_manual_journal__detail__memotag[".exportFields"][] = "freee_deal_detail_id";
$tdatafreee_deal_join_manual_journal__detail__memotag[".exportFields"][] = "freee_manual_journal_detail_id";

$tdatafreee_deal_join_manual_journal__detail__memotag[".importFields"] = array();

$tdatafreee_deal_join_manual_journal__detail__memotag[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__detail__memotag";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__detail__memotag","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_join_manual_journal__detail__memotag`.`id`";

	
	
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




	$tdatafreee_deal_join_manual_journal__detail__memotag["id"] = $fdata;
//	freee_deal_join_manual_journal__detail_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "freee_deal_join_manual_journal__detail_id";
	$fdata["GoodName"] = "freee_deal_join_manual_journal__detail_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__detail__memotag";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__detail__memotag","freee_deal_join_manual_journal__detail_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_deal_join_manual_journal__detail_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_join_manual_journal__detail__memotag`.`freee_deal_join_manual_journal__detail_id`";

	
	
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




	$tdatafreee_deal_join_manual_journal__detail__memotag["freee_deal_join_manual_journal__detail_id"] = $fdata;
//	memotag_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "memotag_id";
	$fdata["GoodName"] = "memotag_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__detail__memotag";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__detail__memotag","memotag_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "memotag_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_join_manual_journal__detail__memotag`.`memotag_id`";

	
	
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
	$edata["LookupTable"] = "freee_memotags";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdatafreee_deal_join_manual_journal__detail__memotag["memotag_id"] = $fdata;
//	entry_side
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "entry_side";
	$fdata["GoodName"] = "entry_side";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__detail__memotag","entry_side");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "entry_side";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_join_manual_journal__details`.`entry_side`";

	
	
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
	$edata["LookupTable"] = "mst_freee_entry_side";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "value";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdatafreee_deal_join_manual_journal__detail__memotag["entry_side"] = $fdata;
//	account_item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "account_item_id";
	$fdata["GoodName"] = "account_item_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__detail__memotag","account_item_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "account_item_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_join_manual_journal__details`.`account_item_id`";

	
	
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
	$edata["LookupTable"] = "freee_account_items";
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




	$tdatafreee_deal_join_manual_journal__detail__memotag["account_item_id"] = $fdata;
//	tax_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tax_code";
	$fdata["GoodName"] = "tax_code";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__detail__memotag","tax_code");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tax_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_join_manual_journal__details`.`tax_code`";

	
	
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
	$edata["LookupTable"] = "freee_taxes";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name_ja";

	
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




	$tdatafreee_deal_join_manual_journal__detail__memotag["tax_code"] = $fdata;
//	partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "partner_id";
	$fdata["GoodName"] = "partner_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__detail__memotag","partner_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "partner_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_join_manual_journal__details`.`partner_id`";

	
	
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
	$edata["LookupTable"] = "freee_partners";
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




	$tdatafreee_deal_join_manual_journal__detail__memotag["partner_id"] = $fdata;
//	item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "item_id";
	$fdata["GoodName"] = "item_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__detail__memotag","item_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "item_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_join_manual_journal__details`.`item_id`";

	
	
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
	$edata["LookupTable"] = "freee_items";
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




	$tdatafreee_deal_join_manual_journal__detail__memotag["item_id"] = $fdata;
//	section_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "section_id";
	$fdata["GoodName"] = "section_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__detail__memotag","section_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "section_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_join_manual_journal__details`.`section_id`";

	
	
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
	$edata["LookupTable"] = "freee_sections";
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




	$tdatafreee_deal_join_manual_journal__detail__memotag["section_id"] = $fdata;
//	tag_ids
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "tag_ids";
	$fdata["GoodName"] = "tag_ids";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__detail__memotag","tag_ids");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "tag_ids";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_join_manual_journal__details`.`tag_ids`";

	
	
			
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








	$tdatafreee_deal_join_manual_journal__detail__memotag["tag_ids"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__detail__memotag","amount");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_join_manual_journal__details`.`amount`";

	
	
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




	$tdatafreee_deal_join_manual_journal__detail__memotag["amount"] = $fdata;
//	vat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "vat";
	$fdata["GoodName"] = "vat";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__detail__memotag","vat");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "vat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_join_manual_journal__details`.`vat`";

	
	
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




	$tdatafreee_deal_join_manual_journal__detail__memotag["vat"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__detail__memotag","description");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_join_manual_journal__details`.`description`";

	
	
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




	$tdatafreee_deal_join_manual_journal__detail__memotag["description"] = $fdata;
//	issue_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "issue_date";
	$fdata["GoodName"] = "issue_date";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__detail__memotag","issue_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "issue_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_join_manual_journal__details`.`issue_date`";

	
	
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
		$fdata["defaultSearchOption"] = "Between";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatafreee_deal_join_manual_journal__detail__memotag["issue_date"] = $fdata;
//	data_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "data_type";
	$fdata["GoodName"] = "data_type";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__detail__memotag","data_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "data_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_join_manual_journal__details`.`data_type`";

	
	
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




	$tdatafreee_deal_join_manual_journal__detail__memotag["data_type"] = $fdata;
//	freee_deal_detail_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "freee_deal_detail_id";
	$fdata["GoodName"] = "freee_deal_detail_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__detail__memotag","freee_deal_detail_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_deal_detail_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_join_manual_journal__details`.`freee_deal_detail_id`";

	
	
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




	$tdatafreee_deal_join_manual_journal__detail__memotag["freee_deal_detail_id"] = $fdata;
//	freee_manual_journal_detail_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "freee_manual_journal_detail_id";
	$fdata["GoodName"] = "freee_manual_journal_detail_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__detail__memotag","freee_manual_journal_detail_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_manual_journal_detail_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_join_manual_journal__details`.`freee_manual_journal_detail_id`";

	
	
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




	$tdatafreee_deal_join_manual_journal__detail__memotag["freee_manual_journal_detail_id"] = $fdata;


$tables_data["freee_deal_join_manual_journal__detail__memotag"]=&$tdatafreee_deal_join_manual_journal__detail__memotag;
$field_labels["freee_deal_join_manual_journal__detail__memotag"] = &$fieldLabelsfreee_deal_join_manual_journal__detail__memotag;
$fieldToolTips["freee_deal_join_manual_journal__detail__memotag"] = &$fieldToolTipsfreee_deal_join_manual_journal__detail__memotag;
$placeHolders["freee_deal_join_manual_journal__detail__memotag"] = &$placeHoldersfreee_deal_join_manual_journal__detail__memotag;
$page_titles["freee_deal_join_manual_journal__detail__memotag"] = &$pageTitlesfreee_deal_join_manual_journal__detail__memotag;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_deal_join_manual_journal__detail__memotag"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_deal_join_manual_journal__detail__memotag"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_deal_join_manual_journal__detail__memotag()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`freee_deal_join_manual_journal__detail__memotag`.`id`,  `freee_deal_join_manual_journal__detail__memotag`.`freee_deal_join_manual_journal__detail_id`,  `freee_deal_join_manual_journal__detail__memotag`.`memotag_id`,  `freee_deal_join_manual_journal__details`.`entry_side`,  `freee_deal_join_manual_journal__details`.`account_item_id`,  `freee_deal_join_manual_journal__details`.`tax_code`,  `freee_deal_join_manual_journal__details`.`partner_id`,  `freee_deal_join_manual_journal__details`.`item_id`,  `freee_deal_join_manual_journal__details`.`section_id`,  `freee_deal_join_manual_journal__details`.`tag_ids`,  `freee_deal_join_manual_journal__details`.`amount`,  `freee_deal_join_manual_journal__details`.`vat`,  `freee_deal_join_manual_journal__details`.`description`,  `freee_deal_join_manual_journal__details`.`issue_date`,  `freee_deal_join_manual_journal__details`.`data_type`,  `freee_deal_join_manual_journal__details`.`freee_deal_detail_id`,  `freee_deal_join_manual_journal__details`.`freee_manual_journal_detail_id`";
$proto0["m_strFrom"] = "FROM `freee_deal_join_manual_journal__detail__memotag`  LEFT OUTER JOIN `freee_deal_join_manual_journal__details` ON `freee_deal_join_manual_journal__detail__memotag`.`freee_deal_join_manual_journal__detail_id` = `freee_deal_join_manual_journal__details`.`id`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `freee_deal_join_manual_journal__details`.`issue_date` DESC, `freee_deal_join_manual_journal__details`.`amount` DESC";
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
	"m_strTable" => "freee_deal_join_manual_journal__detail__memotag",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto6["m_sql"] = "`freee_deal_join_manual_journal__detail__memotag`.`id`";
$proto6["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_deal_join_manual_journal__detail_id",
	"m_strTable" => "freee_deal_join_manual_journal__detail__memotag",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto8["m_sql"] = "`freee_deal_join_manual_journal__detail__memotag`.`freee_deal_join_manual_journal__detail_id`";
$proto8["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "memotag_id",
	"m_strTable" => "freee_deal_join_manual_journal__detail__memotag",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto10["m_sql"] = "`freee_deal_join_manual_journal__detail__memotag`.`memotag_id`";
$proto10["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "entry_side",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto12["m_sql"] = "`freee_deal_join_manual_journal__details`.`entry_side`";
$proto12["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "account_item_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto14["m_sql"] = "`freee_deal_join_manual_journal__details`.`account_item_id`";
$proto14["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tax_code",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto16["m_sql"] = "`freee_deal_join_manual_journal__details`.`tax_code`";
$proto16["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "partner_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto18["m_sql"] = "`freee_deal_join_manual_journal__details`.`partner_id`";
$proto18["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "item_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto20["m_sql"] = "`freee_deal_join_manual_journal__details`.`item_id`";
$proto20["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "section_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto22["m_sql"] = "`freee_deal_join_manual_journal__details`.`section_id`";
$proto22["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "tag_ids",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto24["m_sql"] = "`freee_deal_join_manual_journal__details`.`tag_ids`";
$proto24["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto26["m_sql"] = "`freee_deal_join_manual_journal__details`.`amount`";
$proto26["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "vat",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto28["m_sql"] = "`freee_deal_join_manual_journal__details`.`vat`";
$proto28["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto30["m_sql"] = "`freee_deal_join_manual_journal__details`.`description`";
$proto30["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "issue_date",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto32["m_sql"] = "`freee_deal_join_manual_journal__details`.`issue_date`";
$proto32["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "data_type",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto34["m_sql"] = "`freee_deal_join_manual_journal__details`.`data_type`";
$proto34["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_deal_detail_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto36["m_sql"] = "`freee_deal_join_manual_journal__details`.`freee_deal_detail_id`";
$proto36["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_manual_journal_detail_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto38["m_sql"] = "`freee_deal_join_manual_journal__details`.`freee_manual_journal_detail_id`";
$proto38["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto41["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id";
$proto41["m_columns"][] = "freee_deal_join_manual_journal__detail_id";
$proto41["m_columns"][] = "memotag_id";
$proto41["m_columns"][] = "updated_by";
$proto41["m_columns"][] = "updated_at";
$proto41["m_columns"][] = "created_by";
$proto41["m_columns"][] = "created_at";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "`freee_deal_join_manual_journal__detail__memotag`";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
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
												$proto44=array();
$proto44["m_link"] = "SQLL_LEFTJOIN";
			$proto45=array();
$proto45["m_strName"] = "freee_deal_join_manual_journal__details";
$proto45["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id";
$proto45["m_columns"][] = "entry_side";
$proto45["m_columns"][] = "account_item_id";
$proto45["m_columns"][] = "tax_code";
$proto45["m_columns"][] = "partner_id";
$proto45["m_columns"][] = "item_id";
$proto45["m_columns"][] = "section_id";
$proto45["m_columns"][] = "tag_ids";
$proto45["m_columns"][] = "amount";
$proto45["m_columns"][] = "vat";
$proto45["m_columns"][] = "description";
$proto45["m_columns"][] = "issue_date";
$proto45["m_columns"][] = "data_type";
$proto45["m_columns"][] = "freee_deal_detail_id";
$proto45["m_columns"][] = "freee_manual_journal_detail_id";
$proto45["m_columns"][] = "created_at";
$proto45["m_columns"][] = "created_by";
$proto45["m_columns"][] = "updated_at";
$proto45["m_columns"][] = "updated_by";
$proto45["m_columns"][] = "is_manual";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "LEFT OUTER JOIN `freee_deal_join_manual_journal__details` ON `freee_deal_join_manual_journal__detail__memotag`.`freee_deal_join_manual_journal__detail_id` = `freee_deal_join_manual_journal__details`.`id`";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "freee_deal_join_manual_journal__detail__memotag";
$proto46=array();
$proto46["m_sql"] = "`freee_deal_join_manual_journal__detail__memotag`.`freee_deal_join_manual_journal__detail_id` = `freee_deal_join_manual_journal__details`.`id`";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "freee_deal_join_manual_journal__detail_id",
	"m_strTable" => "freee_deal_join_manual_journal__detail__memotag",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= `freee_deal_join_manual_journal__details`.`id`";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "issue_date",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto48["m_column"]=$obj;
$proto48["m_bAsc"] = 0;
$proto48["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto48);

$proto0["m_orderby"][]=$obj;					
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__detail__memotag"
));

$proto50["m_column"]=$obj;
$proto50["m_bAsc"] = 0;
$proto50["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto50);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="freee_deal_join_manual_journal__detail__memotag";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_deal_join_manual_journal__detail__memotag = createSqlQuery_freee_deal_join_manual_journal__detail__memotag();


	
		;

																	

$tdatafreee_deal_join_manual_journal__detail__memotag[".sqlquery"] = $queryData_freee_deal_join_manual_journal__detail__memotag;

$tableEvents["freee_deal_join_manual_journal__detail__memotag"] = new eventsBase;
$tdatafreee_deal_join_manual_journal__detail__memotag[".hasEvents"] = false;

?>