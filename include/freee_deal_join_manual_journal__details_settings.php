<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_deal_join_manual_journal__details = array();
	$tdatafreee_deal_join_manual_journal__details[".truncateText"] = true;
	$tdatafreee_deal_join_manual_journal__details[".NumberOfChars"] = 80;
	$tdatafreee_deal_join_manual_journal__details[".ShortName"] = "freee_deal_join_manual_journal__details";
	$tdatafreee_deal_join_manual_journal__details[".OwnerID"] = "";
	$tdatafreee_deal_join_manual_journal__details[".OriginalTable"] = "freee_deal_join_manual_journal__details";

//	field labels
$fieldLabelsfreee_deal_join_manual_journal__details = array();
$fieldToolTipsfreee_deal_join_manual_journal__details = array();
$pageTitlesfreee_deal_join_manual_journal__details = array();
$placeHoldersfreee_deal_join_manual_journal__details = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"] = array();
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"] = array();
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"] = array();
	$pageTitlesfreee_deal_join_manual_journal__details["Japanese"] = array();
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["entry_side"] = "Entry Side";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["entry_side"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["entry_side"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["account_item_id"] = "Account Item Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["account_item_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["account_item_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["tax_code"] = "Tax Code";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["tax_code"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["tax_code"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["partner_id"] = "Partner Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["partner_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["partner_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["item_id"] = "Item Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["item_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["item_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["section_id"] = "Section Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["section_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["section_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["tag_ids"] = "Tag Ids";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["tag_ids"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["tag_ids"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["amount"] = "Amount";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["amount"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["amount"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["vat"] = "Vat";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["vat"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["vat"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["description"] = "Description";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["description"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["description"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["issue_date"] = "Issue Date";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["issue_date"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["issue_date"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["data_type"] = "Data Type";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["data_type"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["data_type"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["freee_deal_detail_id"] = "Freee Deal Detail Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["freee_deal_detail_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["freee_deal_detail_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["freee_manual_journal_detail_id"] = "Freee Manual Journal Detail Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["freee_manual_journal_detail_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["freee_manual_journal_detail_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["created_at"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["created_by"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["updated_by"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["Japanese"]["is_manual"] = "手動固定";
	$fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]["is_manual"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["Japanese"]["is_manual"] = "";
	if (count($fieldToolTipsfreee_deal_join_manual_journal__details["Japanese"]))
		$tdatafreee_deal_join_manual_journal__details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_deal_join_manual_journal__details[""] = array();
	$fieldToolTipsfreee_deal_join_manual_journal__details[""] = array();
	$placeHoldersfreee_deal_join_manual_journal__details[""] = array();
	$pageTitlesfreee_deal_join_manual_journal__details[""] = array();
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["id"] = "Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["entry_side"] = "Entry Side";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["entry_side"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["entry_side"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["account_item_id"] = "Account Item Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["account_item_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["account_item_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["tax_code"] = "Tax Code";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["tax_code"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["tax_code"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["partner_id"] = "Partner Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["partner_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["partner_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["item_id"] = "Item Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["item_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["item_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["section_id"] = "Section Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["section_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["section_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["tag_ids"] = "Tag Ids";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["tag_ids"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["tag_ids"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["amount"] = "Amount";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["amount"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["amount"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["vat"] = "Vat";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["vat"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["vat"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["description"] = "Description";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["description"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["description"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["issue_date"] = "Issue Date";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["issue_date"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["issue_date"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["data_type"] = "Data Type";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["data_type"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["data_type"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["freee_deal_detail_id"] = "Freee Deal Detail Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["freee_deal_detail_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["freee_deal_detail_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["freee_manual_journal_detail_id"] = "Freee Manual Journal Detail Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["freee_manual_journal_detail_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["freee_manual_journal_detail_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["created_at"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["created_at"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["created_by"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["created_by"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["updated_at"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["updated_at"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["updated_by"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["updated_by"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details[""]["is_manual"] = "Is Manual";
	$fieldToolTipsfreee_deal_join_manual_journal__details[""]["is_manual"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details[""]["is_manual"] = "";
	if (count($fieldToolTipsfreee_deal_join_manual_journal__details[""]))
		$tdatafreee_deal_join_manual_journal__details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_deal_join_manual_journal__details["English"] = array();
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"] = array();
	$placeHoldersfreee_deal_join_manual_journal__details["English"] = array();
	$pageTitlesfreee_deal_join_manual_journal__details["English"] = array();
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["id"] = "Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["entry_side"] = "Entry Side";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["entry_side"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["entry_side"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["account_item_id"] = "Account Item Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["account_item_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["account_item_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["tax_code"] = "Tax Code";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["tax_code"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["tax_code"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["partner_id"] = "Partner Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["partner_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["partner_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["item_id"] = "Item Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["item_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["item_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["section_id"] = "Section Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["section_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["section_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["tag_ids"] = "Tag Ids";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["tag_ids"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["tag_ids"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["amount"] = "Amount";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["amount"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["amount"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["vat"] = "Vat";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["vat"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["vat"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["description"] = "Description";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["description"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["description"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["issue_date"] = "Issue Date";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["issue_date"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["issue_date"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["data_type"] = "Data Type";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["data_type"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["data_type"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["freee_deal_detail_id"] = "Freee Deal Detail Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["freee_deal_detail_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["freee_deal_detail_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["freee_manual_journal_detail_id"] = "Freee Manual Journal Detail Id";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["freee_manual_journal_detail_id"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["freee_manual_journal_detail_id"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["created_at"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["created_at"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["created_by"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["created_by"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["updated_at"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["updated_at"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["updated_by"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["updated_by"] = "";
	$fieldLabelsfreee_deal_join_manual_journal__details["English"]["is_manual"] = "Is Manual";
	$fieldToolTipsfreee_deal_join_manual_journal__details["English"]["is_manual"] = "";
	$placeHoldersfreee_deal_join_manual_journal__details["English"]["is_manual"] = "";
	if (count($fieldToolTipsfreee_deal_join_manual_journal__details["English"]))
		$tdatafreee_deal_join_manual_journal__details[".isUseToolTips"] = true;
}


	$tdatafreee_deal_join_manual_journal__details[".NCSearch"] = true;



$tdatafreee_deal_join_manual_journal__details[".shortTableName"] = "freee_deal_join_manual_journal__details";
$tdatafreee_deal_join_manual_journal__details[".nSecOptions"] = 0;
$tdatafreee_deal_join_manual_journal__details[".recsPerRowPrint"] = 1;
$tdatafreee_deal_join_manual_journal__details[".mainTableOwnerID"] = "";
$tdatafreee_deal_join_manual_journal__details[".moveNext"] = 1;
$tdatafreee_deal_join_manual_journal__details[".entityType"] = 0;

$tdatafreee_deal_join_manual_journal__details[".strOriginalTableName"] = "freee_deal_join_manual_journal__details";

	



$tdatafreee_deal_join_manual_journal__details[".showAddInPopup"] = false;

$tdatafreee_deal_join_manual_journal__details[".showEditInPopup"] = false;

$tdatafreee_deal_join_manual_journal__details[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_deal_join_manual_journal__details[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_deal_join_manual_journal__details[".fieldsForRegister"] = array();

$tdatafreee_deal_join_manual_journal__details[".listAjax"] = false;

	$tdatafreee_deal_join_manual_journal__details[".audit"] = false;

	$tdatafreee_deal_join_manual_journal__details[".locking"] = false;



$tdatafreee_deal_join_manual_journal__details[".list"] = true;



$tdatafreee_deal_join_manual_journal__details[".reorderRecordsByHeader"] = true;








$tdatafreee_deal_join_manual_journal__details[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_deal_join_manual_journal__details[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_deal_join_manual_journal__details[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_deal_join_manual_journal__details[".searchSaving"] = false;
//

$tdatafreee_deal_join_manual_journal__details[".showSearchPanel"] = true;
		$tdatafreee_deal_join_manual_journal__details[".flexibleSearch"] = true;

$tdatafreee_deal_join_manual_journal__details[".isUseAjaxSuggest"] = true;

$tdatafreee_deal_join_manual_journal__details[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_deal_join_manual_journal__details[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_deal_join_manual_journal__details[".buttonsAdded"] = false;

$tdatafreee_deal_join_manual_journal__details[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_deal_join_manual_journal__details[".isUseTimeForSearch"] = false;




$tdatafreee_deal_join_manual_journal__details[".detailsLinksOnList"] = "1";

$tdatafreee_deal_join_manual_journal__details[".allSearchFields"] = array();
$tdatafreee_deal_join_manual_journal__details[".filterFields"] = array();
$tdatafreee_deal_join_manual_journal__details[".requiredSearchFields"] = array();

$tdatafreee_deal_join_manual_journal__details[".allSearchFields"][] = "id";
	$tdatafreee_deal_join_manual_journal__details[".allSearchFields"][] = "entry_side";
	$tdatafreee_deal_join_manual_journal__details[".allSearchFields"][] = "account_item_id";
	$tdatafreee_deal_join_manual_journal__details[".allSearchFields"][] = "tax_code";
	$tdatafreee_deal_join_manual_journal__details[".allSearchFields"][] = "partner_id";
	$tdatafreee_deal_join_manual_journal__details[".allSearchFields"][] = "item_id";
	$tdatafreee_deal_join_manual_journal__details[".allSearchFields"][] = "section_id";
	$tdatafreee_deal_join_manual_journal__details[".allSearchFields"][] = "tag_ids";
	$tdatafreee_deal_join_manual_journal__details[".allSearchFields"][] = "amount";
	$tdatafreee_deal_join_manual_journal__details[".allSearchFields"][] = "vat";
	$tdatafreee_deal_join_manual_journal__details[".allSearchFields"][] = "description";
	$tdatafreee_deal_join_manual_journal__details[".allSearchFields"][] = "issue_date";
	$tdatafreee_deal_join_manual_journal__details[".allSearchFields"][] = "data_type";
	$tdatafreee_deal_join_manual_journal__details[".allSearchFields"][] = "freee_deal_detail_id";
	$tdatafreee_deal_join_manual_journal__details[".allSearchFields"][] = "freee_manual_journal_detail_id";
	$tdatafreee_deal_join_manual_journal__details[".allSearchFields"][] = "is_manual";
	

$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"] = array();
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "id";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "entry_side";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "account_item_id";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "tax_code";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "partner_id";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "item_id";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "section_id";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "tag_ids";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "amount";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "vat";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "description";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "issue_date";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "data_type";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "freee_deal_detail_id";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "freee_manual_journal_detail_id";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "created_at";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "created_by";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "updated_at";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "updated_by";
$tdatafreee_deal_join_manual_journal__details[".googleLikeFields"][] = "is_manual";


$tdatafreee_deal_join_manual_journal__details[".advSearchFields"] = array();
$tdatafreee_deal_join_manual_journal__details[".advSearchFields"][] = "id";
$tdatafreee_deal_join_manual_journal__details[".advSearchFields"][] = "entry_side";
$tdatafreee_deal_join_manual_journal__details[".advSearchFields"][] = "account_item_id";
$tdatafreee_deal_join_manual_journal__details[".advSearchFields"][] = "tax_code";
$tdatafreee_deal_join_manual_journal__details[".advSearchFields"][] = "partner_id";
$tdatafreee_deal_join_manual_journal__details[".advSearchFields"][] = "item_id";
$tdatafreee_deal_join_manual_journal__details[".advSearchFields"][] = "section_id";
$tdatafreee_deal_join_manual_journal__details[".advSearchFields"][] = "tag_ids";
$tdatafreee_deal_join_manual_journal__details[".advSearchFields"][] = "amount";
$tdatafreee_deal_join_manual_journal__details[".advSearchFields"][] = "vat";
$tdatafreee_deal_join_manual_journal__details[".advSearchFields"][] = "description";
$tdatafreee_deal_join_manual_journal__details[".advSearchFields"][] = "issue_date";
$tdatafreee_deal_join_manual_journal__details[".advSearchFields"][] = "data_type";
$tdatafreee_deal_join_manual_journal__details[".advSearchFields"][] = "freee_deal_detail_id";
$tdatafreee_deal_join_manual_journal__details[".advSearchFields"][] = "freee_manual_journal_detail_id";
$tdatafreee_deal_join_manual_journal__details[".advSearchFields"][] = "is_manual";

$tdatafreee_deal_join_manual_journal__details[".tableType"] = "list";

$tdatafreee_deal_join_manual_journal__details[".printerPageOrientation"] = 0;
$tdatafreee_deal_join_manual_journal__details[".nPrinterPageScale"] = 100;

$tdatafreee_deal_join_manual_journal__details[".nPrinterSplitRecords"] = 40;

$tdatafreee_deal_join_manual_journal__details[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_deal_join_manual_journal__details[".geocodingEnabled"] = false;





$tdatafreee_deal_join_manual_journal__details[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_deal_join_manual_journal__details[".pageSize"] = 20;

$tdatafreee_deal_join_manual_journal__details[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_deal_join_manual_journal__details[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_deal_join_manual_journal__details[".orderindexes"] = array();

$tdatafreee_deal_join_manual_journal__details[".sqlHead"] = "SELECT `id`,  	`entry_side`,  	`account_item_id`,  	`tax_code`,  	`partner_id`,  	`item_id`,  	`section_id`,  	`tag_ids`,  	`amount`,  	`vat`,  	`description`,  	`issue_date`,  	`data_type`,  	`freee_deal_detail_id`,  	`freee_manual_journal_detail_id`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`is_manual`";
$tdatafreee_deal_join_manual_journal__details[".sqlFrom"] = "FROM `freee_deal_join_manual_journal__details`";
$tdatafreee_deal_join_manual_journal__details[".sqlWhereExpr"] = "";
$tdatafreee_deal_join_manual_journal__details[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_deal_join_manual_journal__details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_deal_join_manual_journal__details[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_deal_join_manual_journal__details[".highlightSearchResults"] = true;

$tableKeysfreee_deal_join_manual_journal__details = array();
$tableKeysfreee_deal_join_manual_journal__details[] = "id";
$tdatafreee_deal_join_manual_journal__details[".Keys"] = $tableKeysfreee_deal_join_manual_journal__details;

$tdatafreee_deal_join_manual_journal__details[".listFields"] = array();
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "id";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "is_manual";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "entry_side";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "account_item_id";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "tax_code";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "partner_id";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "item_id";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "section_id";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "tag_ids";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "amount";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "vat";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "description";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "issue_date";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "data_type";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "freee_deal_detail_id";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "freee_manual_journal_detail_id";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "created_at";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "created_by";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "updated_at";
$tdatafreee_deal_join_manual_journal__details[".listFields"][] = "updated_by";

$tdatafreee_deal_join_manual_journal__details[".hideMobileList"] = array();


$tdatafreee_deal_join_manual_journal__details[".viewFields"] = array();

$tdatafreee_deal_join_manual_journal__details[".addFields"] = array();

$tdatafreee_deal_join_manual_journal__details[".masterListFields"] = array();
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "id";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "entry_side";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "account_item_id";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "tax_code";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "partner_id";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "item_id";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "section_id";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "tag_ids";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "amount";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "vat";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "description";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "issue_date";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "data_type";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "freee_deal_detail_id";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "freee_manual_journal_detail_id";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "created_at";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "created_by";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "updated_at";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "updated_by";
$tdatafreee_deal_join_manual_journal__details[".masterListFields"][] = "is_manual";

$tdatafreee_deal_join_manual_journal__details[".inlineAddFields"] = array();

$tdatafreee_deal_join_manual_journal__details[".editFields"] = array();

$tdatafreee_deal_join_manual_journal__details[".inlineEditFields"] = array();

$tdatafreee_deal_join_manual_journal__details[".updateSelectedFields"] = array();


$tdatafreee_deal_join_manual_journal__details[".exportFields"] = array();

$tdatafreee_deal_join_manual_journal__details[".importFields"] = array();

$tdatafreee_deal_join_manual_journal__details[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatafreee_deal_join_manual_journal__details["id"] = $fdata;
//	entry_side
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "entry_side";
	$fdata["GoodName"] = "entry_side";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","entry_side");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "entry_side";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`entry_side`";

	
	
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




	$tdatafreee_deal_join_manual_journal__details["entry_side"] = $fdata;
//	account_item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "account_item_id";
	$fdata["GoodName"] = "account_item_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","account_item_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "account_item_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`account_item_id`";

	
	
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




	$tdatafreee_deal_join_manual_journal__details["account_item_id"] = $fdata;
//	tax_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tax_code";
	$fdata["GoodName"] = "tax_code";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","tax_code");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "tax_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tax_code`";

	
	
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




	$tdatafreee_deal_join_manual_journal__details["tax_code"] = $fdata;
//	partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "partner_id";
	$fdata["GoodName"] = "partner_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","partner_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "partner_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`partner_id`";

	
	
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




	$tdatafreee_deal_join_manual_journal__details["partner_id"] = $fdata;
//	item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "item_id";
	$fdata["GoodName"] = "item_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","item_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "item_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`item_id`";

	
	
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




	$tdatafreee_deal_join_manual_journal__details["item_id"] = $fdata;
//	section_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "section_id";
	$fdata["GoodName"] = "section_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","section_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "section_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`section_id`";

	
	
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




	$tdatafreee_deal_join_manual_journal__details["section_id"] = $fdata;
//	tag_ids
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tag_ids";
	$fdata["GoodName"] = "tag_ids";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","tag_ids");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "tag_ids";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tag_ids`";

	
	
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
			$edata["EditParams"].= " maxlength=3000";

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




	$tdatafreee_deal_join_manual_journal__details["tag_ids"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","amount");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`amount`";

	
	
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




	$tdatafreee_deal_join_manual_journal__details["amount"] = $fdata;
//	vat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "vat";
	$fdata["GoodName"] = "vat";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","vat");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "vat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vat`";

	
	
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




	$tdatafreee_deal_join_manual_journal__details["vat"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","description");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`description`";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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




	$tdatafreee_deal_join_manual_journal__details["description"] = $fdata;
//	issue_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "issue_date";
	$fdata["GoodName"] = "issue_date";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","issue_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "issue_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`issue_date`";

	
	
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




	$tdatafreee_deal_join_manual_journal__details["issue_date"] = $fdata;
//	data_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "data_type";
	$fdata["GoodName"] = "data_type";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","data_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "data_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`data_type`";

	
	
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




	$tdatafreee_deal_join_manual_journal__details["data_type"] = $fdata;
//	freee_deal_detail_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "freee_deal_detail_id";
	$fdata["GoodName"] = "freee_deal_detail_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","freee_deal_detail_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "freee_deal_detail_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_detail_id`";

	
	
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




	$tdatafreee_deal_join_manual_journal__details["freee_deal_detail_id"] = $fdata;
//	freee_manual_journal_detail_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "freee_manual_journal_detail_id";
	$fdata["GoodName"] = "freee_manual_journal_detail_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","freee_manual_journal_detail_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "freee_manual_journal_detail_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_manual_journal_detail_id`";

	
	
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




	$tdatafreee_deal_join_manual_journal__details["freee_manual_journal_detail_id"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_at`";

	
	
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








	$tdatafreee_deal_join_manual_journal__details["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_by`";

	
	
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








	$tdatafreee_deal_join_manual_journal__details["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_at`";

	
	
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








	$tdatafreee_deal_join_manual_journal__details["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_by`";

	
	
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








	$tdatafreee_deal_join_manual_journal__details["updated_by"] = $fdata;
//	is_manual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "is_manual";
	$fdata["GoodName"] = "is_manual";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_deal_join_manual_journal__details","is_manual");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "is_manual";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_manual`";

	
	
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




	$tdatafreee_deal_join_manual_journal__details["is_manual"] = $fdata;


$tables_data["freee_deal_join_manual_journal__details"]=&$tdatafreee_deal_join_manual_journal__details;
$field_labels["freee_deal_join_manual_journal__details"] = &$fieldLabelsfreee_deal_join_manual_journal__details;
$fieldToolTips["freee_deal_join_manual_journal__details"] = &$fieldToolTipsfreee_deal_join_manual_journal__details;
$placeHolders["freee_deal_join_manual_journal__details"] = &$placeHoldersfreee_deal_join_manual_journal__details;
$page_titles["freee_deal_join_manual_journal__details"] = &$pageTitlesfreee_deal_join_manual_journal__details;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_deal_join_manual_journal__details"] = array();
//	freee_saisanhyou
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="freee_saisanhyou";
		$detailsParam["dOriginalTable"] = "freee_saisanhyou";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "freee_saisanhyou";
	$detailsParam["dCaptionTable"] = GetTableCaption("freee_saisanhyou");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["freee_deal_join_manual_journal__details"][$dIndex] = $detailsParam;

	
		$detailsTablesData["freee_deal_join_manual_journal__details"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["freee_deal_join_manual_journal__details"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["freee_deal_join_manual_journal__details"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["freee_deal_join_manual_journal__details"][$dIndex]["detailKeys"][]="freee_deal_join_manual_journal__detail_id";

// tables which are master tables for current table (detail)
$masterTablesData["freee_deal_join_manual_journal__details"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_deal_join_manual_journal__details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`entry_side`,  	`account_item_id`,  	`tax_code`,  	`partner_id`,  	`item_id`,  	`section_id`,  	`tag_ids`,  	`amount`,  	`vat`,  	`description`,  	`issue_date`,  	`data_type`,  	`freee_deal_detail_id`,  	`freee_manual_journal_detail_id`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`is_manual`";
$proto0["m_strFrom"] = "FROM `freee_deal_join_manual_journal__details`";
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
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "entry_side",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto8["m_sql"] = "`entry_side`";
$proto8["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "account_item_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto10["m_sql"] = "`account_item_id`";
$proto10["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tax_code",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto12["m_sql"] = "`tax_code`";
$proto12["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "partner_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto14["m_sql"] = "`partner_id`";
$proto14["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "item_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto16["m_sql"] = "`item_id`";
$proto16["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "section_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto18["m_sql"] = "`section_id`";
$proto18["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tag_ids",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto20["m_sql"] = "`tag_ids`";
$proto20["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto22["m_sql"] = "`amount`";
$proto22["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "vat",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto24["m_sql"] = "`vat`";
$proto24["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto26["m_sql"] = "`description`";
$proto26["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "issue_date",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto28["m_sql"] = "`issue_date`";
$proto28["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "data_type",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto30["m_sql"] = "`data_type`";
$proto30["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_deal_detail_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto32["m_sql"] = "`freee_deal_detail_id`";
$proto32["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_manual_journal_detail_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto34["m_sql"] = "`freee_manual_journal_detail_id`";
$proto34["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto36["m_sql"] = "`created_at`";
$proto36["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto38["m_sql"] = "`created_by`";
$proto38["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto40["m_sql"] = "`updated_at`";
$proto40["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto42["m_sql"] = "`updated_by`";
$proto42["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "is_manual",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_deal_join_manual_journal__details"
));

$proto44["m_sql"] = "`is_manual`";
$proto44["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "freee_deal_join_manual_journal__details";
$proto47["m_srcTableName"] = "freee_deal_join_manual_journal__details";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id";
$proto47["m_columns"][] = "entry_side";
$proto47["m_columns"][] = "account_item_id";
$proto47["m_columns"][] = "tax_code";
$proto47["m_columns"][] = "partner_id";
$proto47["m_columns"][] = "item_id";
$proto47["m_columns"][] = "section_id";
$proto47["m_columns"][] = "tag_ids";
$proto47["m_columns"][] = "amount";
$proto47["m_columns"][] = "vat";
$proto47["m_columns"][] = "description";
$proto47["m_columns"][] = "issue_date";
$proto47["m_columns"][] = "data_type";
$proto47["m_columns"][] = "freee_deal_detail_id";
$proto47["m_columns"][] = "freee_manual_journal_detail_id";
$proto47["m_columns"][] = "created_at";
$proto47["m_columns"][] = "created_by";
$proto47["m_columns"][] = "updated_at";
$proto47["m_columns"][] = "updated_by";
$proto47["m_columns"][] = "is_manual";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "`freee_deal_join_manual_journal__details`";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "freee_deal_join_manual_journal__details";
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
$proto0["m_srcTableName"]="freee_deal_join_manual_journal__details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_deal_join_manual_journal__details = createSqlQuery_freee_deal_join_manual_journal__details();


	
		;

																				

$tdatafreee_deal_join_manual_journal__details[".sqlquery"] = $queryData_freee_deal_join_manual_journal__details;

$tableEvents["freee_deal_join_manual_journal__details"] = new eventsBase;
$tdatafreee_deal_join_manual_journal__details[".hasEvents"] = false;

?>