<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_deal_details = array();
	$tdatafreee_deal_details[".truncateText"] = true;
	$tdatafreee_deal_details[".NumberOfChars"] = 80;
	$tdatafreee_deal_details[".ShortName"] = "freee_deal_details";
	$tdatafreee_deal_details[".OwnerID"] = "";
	$tdatafreee_deal_details[".OriginalTable"] = "freee_deal_details";

//	field labels
$fieldLabelsfreee_deal_details = array();
$fieldToolTipsfreee_deal_details = array();
$pageTitlesfreee_deal_details = array();
$placeHoldersfreee_deal_details = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_deal_details["Japanese"] = array();
	$fieldToolTipsfreee_deal_details["Japanese"] = array();
	$placeHoldersfreee_deal_details["Japanese"] = array();
	$pageTitlesfreee_deal_details["Japanese"] = array();
	$fieldLabelsfreee_deal_details["Japanese"]["id"] = "取引行ID";
	$fieldToolTipsfreee_deal_details["Japanese"]["id"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["id"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["account_item_id"] = "勘定科目ID";
	$fieldToolTipsfreee_deal_details["Japanese"]["account_item_id"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["account_item_id"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["tax_code"] = "税区分コード";
	$fieldToolTipsfreee_deal_details["Japanese"]["tax_code"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["tax_code"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["item_id"] = "品目ID";
	$fieldToolTipsfreee_deal_details["Japanese"]["item_id"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["item_id"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["section_id"] = "部門ID";
	$fieldToolTipsfreee_deal_details["Japanese"]["section_id"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["section_id"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["tag_ids"] = "メモタグID";
	$fieldToolTipsfreee_deal_details["Japanese"]["tag_ids"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["tag_ids"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["segment_1_tag_id"] = "セグメント１ID";
	$fieldToolTipsfreee_deal_details["Japanese"]["segment_1_tag_id"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["segment_1_tag_id"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["segment_2_tag_id"] = "セグメント２ID";
	$fieldToolTipsfreee_deal_details["Japanese"]["segment_2_tag_id"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["segment_2_tag_id"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["segment_3_tag_id"] = "セグメント３ID";
	$fieldToolTipsfreee_deal_details["Japanese"]["segment_3_tag_id"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["segment_3_tag_id"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["amount"] = "取引金額";
	$fieldToolTipsfreee_deal_details["Japanese"]["amount"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["amount"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["vat"] = "消費税額";
	$fieldToolTipsfreee_deal_details["Japanese"]["vat"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["vat"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["description"] = "備考";
	$fieldToolTipsfreee_deal_details["Japanese"]["description"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["description"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["entry_side"] = "貸借";
	$fieldToolTipsfreee_deal_details["Japanese"]["entry_side"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["entry_side"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["freee_deals_id"] = "Freee取引データId";
	$fieldToolTipsfreee_deal_details["Japanese"]["freee_deals_id"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["freee_deals_id"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_deal_details["Japanese"]["created_at"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsfreee_deal_details["Japanese"]["created_by"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_deal_details["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_deal_details["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["updated_by"] = "";
	$fieldLabelsfreee_deal_details["Japanese"]["before_account_item_id"] = "Before Account Item Id";
	$fieldToolTipsfreee_deal_details["Japanese"]["before_account_item_id"] = "";
	$placeHoldersfreee_deal_details["Japanese"]["before_account_item_id"] = "";
	if (count($fieldToolTipsfreee_deal_details["Japanese"]))
		$tdatafreee_deal_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_deal_details[""] = array();
	$fieldToolTipsfreee_deal_details[""] = array();
	$placeHoldersfreee_deal_details[""] = array();
	$pageTitlesfreee_deal_details[""] = array();
	$fieldLabelsfreee_deal_details[""]["id"] = "Id";
	$fieldToolTipsfreee_deal_details[""]["id"] = "";
	$placeHoldersfreee_deal_details[""]["id"] = "";
	$fieldLabelsfreee_deal_details[""]["account_item_id"] = "Account Item Id";
	$fieldToolTipsfreee_deal_details[""]["account_item_id"] = "";
	$placeHoldersfreee_deal_details[""]["account_item_id"] = "";
	$fieldLabelsfreee_deal_details[""]["tax_code"] = "Tax Code";
	$fieldToolTipsfreee_deal_details[""]["tax_code"] = "";
	$placeHoldersfreee_deal_details[""]["tax_code"] = "";
	$fieldLabelsfreee_deal_details[""]["item_id"] = "Item Id";
	$fieldToolTipsfreee_deal_details[""]["item_id"] = "";
	$placeHoldersfreee_deal_details[""]["item_id"] = "";
	$fieldLabelsfreee_deal_details[""]["section_id"] = "Section Id";
	$fieldToolTipsfreee_deal_details[""]["section_id"] = "";
	$placeHoldersfreee_deal_details[""]["section_id"] = "";
	$fieldLabelsfreee_deal_details[""]["tag_ids"] = "Tag Ids";
	$fieldToolTipsfreee_deal_details[""]["tag_ids"] = "";
	$placeHoldersfreee_deal_details[""]["tag_ids"] = "";
	$fieldLabelsfreee_deal_details[""]["segment_1_tag_id"] = "Segment 1 Tag Id";
	$fieldToolTipsfreee_deal_details[""]["segment_1_tag_id"] = "";
	$placeHoldersfreee_deal_details[""]["segment_1_tag_id"] = "";
	$fieldLabelsfreee_deal_details[""]["segment_2_tag_id"] = "Segment 2 Tag Id";
	$fieldToolTipsfreee_deal_details[""]["segment_2_tag_id"] = "";
	$placeHoldersfreee_deal_details[""]["segment_2_tag_id"] = "";
	$fieldLabelsfreee_deal_details[""]["segment_3_tag_id"] = "Segment 3 Tag Id";
	$fieldToolTipsfreee_deal_details[""]["segment_3_tag_id"] = "";
	$placeHoldersfreee_deal_details[""]["segment_3_tag_id"] = "";
	$fieldLabelsfreee_deal_details[""]["amount"] = "Amount";
	$fieldToolTipsfreee_deal_details[""]["amount"] = "";
	$placeHoldersfreee_deal_details[""]["amount"] = "";
	$fieldLabelsfreee_deal_details[""]["vat"] = "Vat";
	$fieldToolTipsfreee_deal_details[""]["vat"] = "";
	$placeHoldersfreee_deal_details[""]["vat"] = "";
	$fieldLabelsfreee_deal_details[""]["description"] = "Description";
	$fieldToolTipsfreee_deal_details[""]["description"] = "";
	$placeHoldersfreee_deal_details[""]["description"] = "";
	$fieldLabelsfreee_deal_details[""]["entry_side"] = "Entry Side";
	$fieldToolTipsfreee_deal_details[""]["entry_side"] = "";
	$placeHoldersfreee_deal_details[""]["entry_side"] = "";
	$fieldLabelsfreee_deal_details[""]["freee_deals_id"] = "Freee Deals Id";
	$fieldToolTipsfreee_deal_details[""]["freee_deals_id"] = "";
	$placeHoldersfreee_deal_details[""]["freee_deals_id"] = "";
	$fieldLabelsfreee_deal_details[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_deal_details[""]["created_at"] = "";
	$placeHoldersfreee_deal_details[""]["created_at"] = "";
	$fieldLabelsfreee_deal_details[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_deal_details[""]["created_by"] = "";
	$placeHoldersfreee_deal_details[""]["created_by"] = "";
	$fieldLabelsfreee_deal_details[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_deal_details[""]["updated_at"] = "";
	$placeHoldersfreee_deal_details[""]["updated_at"] = "";
	$fieldLabelsfreee_deal_details[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_deal_details[""]["updated_by"] = "";
	$placeHoldersfreee_deal_details[""]["updated_by"] = "";
	$fieldLabelsfreee_deal_details[""]["before_account_item_id"] = "Before Account Item Id";
	$fieldToolTipsfreee_deal_details[""]["before_account_item_id"] = "";
	$placeHoldersfreee_deal_details[""]["before_account_item_id"] = "";
	if (count($fieldToolTipsfreee_deal_details[""]))
		$tdatafreee_deal_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_deal_details["English"] = array();
	$fieldToolTipsfreee_deal_details["English"] = array();
	$placeHoldersfreee_deal_details["English"] = array();
	$pageTitlesfreee_deal_details["English"] = array();
	$fieldLabelsfreee_deal_details["English"]["id"] = "Id";
	$fieldToolTipsfreee_deal_details["English"]["id"] = "";
	$placeHoldersfreee_deal_details["English"]["id"] = "";
	$fieldLabelsfreee_deal_details["English"]["account_item_id"] = "Account Item Id";
	$fieldToolTipsfreee_deal_details["English"]["account_item_id"] = "";
	$placeHoldersfreee_deal_details["English"]["account_item_id"] = "";
	$fieldLabelsfreee_deal_details["English"]["tax_code"] = "Tax Code";
	$fieldToolTipsfreee_deal_details["English"]["tax_code"] = "";
	$placeHoldersfreee_deal_details["English"]["tax_code"] = "";
	$fieldLabelsfreee_deal_details["English"]["item_id"] = "Item Id";
	$fieldToolTipsfreee_deal_details["English"]["item_id"] = "";
	$placeHoldersfreee_deal_details["English"]["item_id"] = "";
	$fieldLabelsfreee_deal_details["English"]["section_id"] = "Section Id";
	$fieldToolTipsfreee_deal_details["English"]["section_id"] = "";
	$placeHoldersfreee_deal_details["English"]["section_id"] = "";
	$fieldLabelsfreee_deal_details["English"]["tag_ids"] = "Tag Ids";
	$fieldToolTipsfreee_deal_details["English"]["tag_ids"] = "";
	$placeHoldersfreee_deal_details["English"]["tag_ids"] = "";
	$fieldLabelsfreee_deal_details["English"]["segment_1_tag_id"] = "Segment 1 Tag Id";
	$fieldToolTipsfreee_deal_details["English"]["segment_1_tag_id"] = "";
	$placeHoldersfreee_deal_details["English"]["segment_1_tag_id"] = "";
	$fieldLabelsfreee_deal_details["English"]["segment_2_tag_id"] = "Segment 2 Tag Id";
	$fieldToolTipsfreee_deal_details["English"]["segment_2_tag_id"] = "";
	$placeHoldersfreee_deal_details["English"]["segment_2_tag_id"] = "";
	$fieldLabelsfreee_deal_details["English"]["segment_3_tag_id"] = "Segment 3 Tag Id";
	$fieldToolTipsfreee_deal_details["English"]["segment_3_tag_id"] = "";
	$placeHoldersfreee_deal_details["English"]["segment_3_tag_id"] = "";
	$fieldLabelsfreee_deal_details["English"]["amount"] = "Amount";
	$fieldToolTipsfreee_deal_details["English"]["amount"] = "";
	$placeHoldersfreee_deal_details["English"]["amount"] = "";
	$fieldLabelsfreee_deal_details["English"]["vat"] = "Vat";
	$fieldToolTipsfreee_deal_details["English"]["vat"] = "";
	$placeHoldersfreee_deal_details["English"]["vat"] = "";
	$fieldLabelsfreee_deal_details["English"]["description"] = "Description";
	$fieldToolTipsfreee_deal_details["English"]["description"] = "";
	$placeHoldersfreee_deal_details["English"]["description"] = "";
	$fieldLabelsfreee_deal_details["English"]["entry_side"] = "Entry Side";
	$fieldToolTipsfreee_deal_details["English"]["entry_side"] = "";
	$placeHoldersfreee_deal_details["English"]["entry_side"] = "";
	$fieldLabelsfreee_deal_details["English"]["freee_deals_id"] = "Freee Deals Id";
	$fieldToolTipsfreee_deal_details["English"]["freee_deals_id"] = "";
	$placeHoldersfreee_deal_details["English"]["freee_deals_id"] = "";
	$fieldLabelsfreee_deal_details["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_deal_details["English"]["created_at"] = "";
	$placeHoldersfreee_deal_details["English"]["created_at"] = "";
	$fieldLabelsfreee_deal_details["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_deal_details["English"]["created_by"] = "";
	$placeHoldersfreee_deal_details["English"]["created_by"] = "";
	$fieldLabelsfreee_deal_details["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_deal_details["English"]["updated_at"] = "";
	$placeHoldersfreee_deal_details["English"]["updated_at"] = "";
	$fieldLabelsfreee_deal_details["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_deal_details["English"]["updated_by"] = "";
	$placeHoldersfreee_deal_details["English"]["updated_by"] = "";
	$fieldLabelsfreee_deal_details["English"]["before_account_item_id"] = "Before Account Item Id";
	$fieldToolTipsfreee_deal_details["English"]["before_account_item_id"] = "";
	$placeHoldersfreee_deal_details["English"]["before_account_item_id"] = "";
	if (count($fieldToolTipsfreee_deal_details["English"]))
		$tdatafreee_deal_details[".isUseToolTips"] = true;
}


	$tdatafreee_deal_details[".NCSearch"] = true;



$tdatafreee_deal_details[".shortTableName"] = "freee_deal_details";
$tdatafreee_deal_details[".nSecOptions"] = 0;
$tdatafreee_deal_details[".recsPerRowPrint"] = 1;
$tdatafreee_deal_details[".mainTableOwnerID"] = "";
$tdatafreee_deal_details[".moveNext"] = 1;
$tdatafreee_deal_details[".entityType"] = 0;

$tdatafreee_deal_details[".strOriginalTableName"] = "freee_deal_details";

	



$tdatafreee_deal_details[".showAddInPopup"] = false;

$tdatafreee_deal_details[".showEditInPopup"] = false;

$tdatafreee_deal_details[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_deal_details[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_deal_details[".fieldsForRegister"] = array();

$tdatafreee_deal_details[".listAjax"] = false;

	$tdatafreee_deal_details[".audit"] = false;

	$tdatafreee_deal_details[".locking"] = false;



$tdatafreee_deal_details[".list"] = true;



$tdatafreee_deal_details[".reorderRecordsByHeader"] = true;





$tdatafreee_deal_details[".exportTo"] = true;



$tdatafreee_deal_details[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_deal_details[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_deal_details[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_deal_details[".searchSaving"] = false;
//

$tdatafreee_deal_details[".showSearchPanel"] = true;
		$tdatafreee_deal_details[".flexibleSearch"] = true;

$tdatafreee_deal_details[".isUseAjaxSuggest"] = true;

$tdatafreee_deal_details[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatafreee_deal_details[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_deal_details[".buttonsAdded"] = false;

$tdatafreee_deal_details[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_deal_details[".isUseTimeForSearch"] = false;



$tdatafreee_deal_details[".badgeColor"] = "6b8e23";


$tdatafreee_deal_details[".allSearchFields"] = array();
$tdatafreee_deal_details[".filterFields"] = array();
$tdatafreee_deal_details[".requiredSearchFields"] = array();

$tdatafreee_deal_details[".allSearchFields"][] = "before_account_item_id";
	$tdatafreee_deal_details[".allSearchFields"][] = "id";
	$tdatafreee_deal_details[".allSearchFields"][] = "freee_deals_id";
	$tdatafreee_deal_details[".allSearchFields"][] = "entry_side";
	$tdatafreee_deal_details[".allSearchFields"][] = "account_item_id";
	$tdatafreee_deal_details[".allSearchFields"][] = "section_id";
	$tdatafreee_deal_details[".allSearchFields"][] = "item_id";
	$tdatafreee_deal_details[".allSearchFields"][] = "amount";
	$tdatafreee_deal_details[".allSearchFields"][] = "vat";
	$tdatafreee_deal_details[".allSearchFields"][] = "tag_ids";
	$tdatafreee_deal_details[".allSearchFields"][] = "tax_code";
	$tdatafreee_deal_details[".allSearchFields"][] = "description";
	$tdatafreee_deal_details[".allSearchFields"][] = "created_at";
	$tdatafreee_deal_details[".allSearchFields"][] = "updated_at";
	

$tdatafreee_deal_details[".googleLikeFields"] = array();
$tdatafreee_deal_details[".googleLikeFields"][] = "id";
$tdatafreee_deal_details[".googleLikeFields"][] = "account_item_id";
$tdatafreee_deal_details[".googleLikeFields"][] = "tax_code";
$tdatafreee_deal_details[".googleLikeFields"][] = "item_id";
$tdatafreee_deal_details[".googleLikeFields"][] = "section_id";
$tdatafreee_deal_details[".googleLikeFields"][] = "tag_ids";
$tdatafreee_deal_details[".googleLikeFields"][] = "segment_1_tag_id";
$tdatafreee_deal_details[".googleLikeFields"][] = "segment_2_tag_id";
$tdatafreee_deal_details[".googleLikeFields"][] = "segment_3_tag_id";
$tdatafreee_deal_details[".googleLikeFields"][] = "amount";
$tdatafreee_deal_details[".googleLikeFields"][] = "vat";
$tdatafreee_deal_details[".googleLikeFields"][] = "description";
$tdatafreee_deal_details[".googleLikeFields"][] = "entry_side";
$tdatafreee_deal_details[".googleLikeFields"][] = "freee_deals_id";
$tdatafreee_deal_details[".googleLikeFields"][] = "created_at";
$tdatafreee_deal_details[".googleLikeFields"][] = "created_by";
$tdatafreee_deal_details[".googleLikeFields"][] = "updated_at";
$tdatafreee_deal_details[".googleLikeFields"][] = "updated_by";
$tdatafreee_deal_details[".googleLikeFields"][] = "before_account_item_id";


$tdatafreee_deal_details[".advSearchFields"] = array();
$tdatafreee_deal_details[".advSearchFields"][] = "before_account_item_id";
$tdatafreee_deal_details[".advSearchFields"][] = "id";
$tdatafreee_deal_details[".advSearchFields"][] = "freee_deals_id";
$tdatafreee_deal_details[".advSearchFields"][] = "entry_side";
$tdatafreee_deal_details[".advSearchFields"][] = "account_item_id";
$tdatafreee_deal_details[".advSearchFields"][] = "section_id";
$tdatafreee_deal_details[".advSearchFields"][] = "item_id";
$tdatafreee_deal_details[".advSearchFields"][] = "amount";
$tdatafreee_deal_details[".advSearchFields"][] = "vat";
$tdatafreee_deal_details[".advSearchFields"][] = "tag_ids";
$tdatafreee_deal_details[".advSearchFields"][] = "tax_code";
$tdatafreee_deal_details[".advSearchFields"][] = "description";
$tdatafreee_deal_details[".advSearchFields"][] = "created_at";
$tdatafreee_deal_details[".advSearchFields"][] = "updated_at";

$tdatafreee_deal_details[".tableType"] = "list";

$tdatafreee_deal_details[".printerPageOrientation"] = 0;
$tdatafreee_deal_details[".nPrinterPageScale"] = 100;

$tdatafreee_deal_details[".nPrinterSplitRecords"] = 40;

$tdatafreee_deal_details[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_deal_details[".geocodingEnabled"] = false;





$tdatafreee_deal_details[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatafreee_deal_details[".totalsFields"] = array();
$tdatafreee_deal_details[".totalsFields"][] = array(
	"fName" => "amount",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatafreee_deal_details[".totalsFields"][] = array(
	"fName" => "vat",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');

$tdatafreee_deal_details[".pageSize"] = 100;

$tdatafreee_deal_details[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_deal_details[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_deal_details[".orderindexes"] = array();

$tdatafreee_deal_details[".sqlHead"] = "SELECT `id`,  	`account_item_id`,  	`tax_code`,  	`item_id`,  	`section_id`,  	`tag_ids`,  	`segment_1_tag_id`,  	`segment_2_tag_id`,  	`segment_3_tag_id`,  	`amount`,  	`vat`,  	`description`,  	`entry_side`,  	`freee_deals_id`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`before_account_item_id`";
$tdatafreee_deal_details[".sqlFrom"] = "FROM `freee_deal_details`";
$tdatafreee_deal_details[".sqlWhereExpr"] = "";
$tdatafreee_deal_details[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_deal_details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_deal_details[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_deal_details[".highlightSearchResults"] = true;

$tableKeysfreee_deal_details = array();
$tableKeysfreee_deal_details[] = "id";
$tdatafreee_deal_details[".Keys"] = $tableKeysfreee_deal_details;

$tdatafreee_deal_details[".listFields"] = array();
$tdatafreee_deal_details[".listFields"][] = "before_account_item_id";
$tdatafreee_deal_details[".listFields"][] = "id";
$tdatafreee_deal_details[".listFields"][] = "freee_deals_id";
$tdatafreee_deal_details[".listFields"][] = "entry_side";
$tdatafreee_deal_details[".listFields"][] = "account_item_id";
$tdatafreee_deal_details[".listFields"][] = "section_id";
$tdatafreee_deal_details[".listFields"][] = "item_id";
$tdatafreee_deal_details[".listFields"][] = "amount";
$tdatafreee_deal_details[".listFields"][] = "vat";
$tdatafreee_deal_details[".listFields"][] = "tag_ids";
$tdatafreee_deal_details[".listFields"][] = "tax_code";
$tdatafreee_deal_details[".listFields"][] = "description";
$tdatafreee_deal_details[".listFields"][] = "created_at";
$tdatafreee_deal_details[".listFields"][] = "updated_at";

$tdatafreee_deal_details[".hideMobileList"] = array();


$tdatafreee_deal_details[".viewFields"] = array();
$tdatafreee_deal_details[".viewFields"][] = "before_account_item_id";

$tdatafreee_deal_details[".addFields"] = array();
$tdatafreee_deal_details[".addFields"][] = "before_account_item_id";

$tdatafreee_deal_details[".masterListFields"] = array();
$tdatafreee_deal_details[".masterListFields"][] = "segment_1_tag_id";
$tdatafreee_deal_details[".masterListFields"][] = "segment_2_tag_id";
$tdatafreee_deal_details[".masterListFields"][] = "segment_3_tag_id";
$tdatafreee_deal_details[".masterListFields"][] = "created_by";
$tdatafreee_deal_details[".masterListFields"][] = "updated_by";
$tdatafreee_deal_details[".masterListFields"][] = "before_account_item_id";
$tdatafreee_deal_details[".masterListFields"][] = "id";
$tdatafreee_deal_details[".masterListFields"][] = "freee_deals_id";
$tdatafreee_deal_details[".masterListFields"][] = "entry_side";
$tdatafreee_deal_details[".masterListFields"][] = "account_item_id";
$tdatafreee_deal_details[".masterListFields"][] = "section_id";
$tdatafreee_deal_details[".masterListFields"][] = "item_id";
$tdatafreee_deal_details[".masterListFields"][] = "amount";
$tdatafreee_deal_details[".masterListFields"][] = "vat";
$tdatafreee_deal_details[".masterListFields"][] = "tag_ids";
$tdatafreee_deal_details[".masterListFields"][] = "tax_code";
$tdatafreee_deal_details[".masterListFields"][] = "description";
$tdatafreee_deal_details[".masterListFields"][] = "created_at";
$tdatafreee_deal_details[".masterListFields"][] = "updated_at";

$tdatafreee_deal_details[".inlineAddFields"] = array();
$tdatafreee_deal_details[".inlineAddFields"][] = "before_account_item_id";

$tdatafreee_deal_details[".editFields"] = array();
$tdatafreee_deal_details[".editFields"][] = "before_account_item_id";

$tdatafreee_deal_details[".inlineEditFields"] = array();
$tdatafreee_deal_details[".inlineEditFields"][] = "before_account_item_id";

$tdatafreee_deal_details[".updateSelectedFields"] = array();
$tdatafreee_deal_details[".updateSelectedFields"][] = "before_account_item_id";


$tdatafreee_deal_details[".exportFields"] = array();
$tdatafreee_deal_details[".exportFields"][] = "before_account_item_id";
$tdatafreee_deal_details[".exportFields"][] = "id";
$tdatafreee_deal_details[".exportFields"][] = "freee_deals_id";
$tdatafreee_deal_details[".exportFields"][] = "entry_side";
$tdatafreee_deal_details[".exportFields"][] = "account_item_id";
$tdatafreee_deal_details[".exportFields"][] = "section_id";
$tdatafreee_deal_details[".exportFields"][] = "item_id";
$tdatafreee_deal_details[".exportFields"][] = "amount";
$tdatafreee_deal_details[".exportFields"][] = "vat";
$tdatafreee_deal_details[".exportFields"][] = "tag_ids";
$tdatafreee_deal_details[".exportFields"][] = "tax_code";
$tdatafreee_deal_details[".exportFields"][] = "description";
$tdatafreee_deal_details[".exportFields"][] = "created_at";
$tdatafreee_deal_details[".exportFields"][] = "updated_at";

$tdatafreee_deal_details[".importFields"] = array();
$tdatafreee_deal_details[".importFields"][] = "before_account_item_id";

$tdatafreee_deal_details[".printFields"] = array();
$tdatafreee_deal_details[".printFields"][] = "before_account_item_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","id");
	$fdata["FieldType"] = 20;

	
	
	
			
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




	$tdatafreee_deal_details["id"] = $fdata;
//	account_item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "account_item_id";
	$fdata["GoodName"] = "account_item_id";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","account_item_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatafreee_deal_details["account_item_id"] = $fdata;
//	tax_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tax_code";
	$fdata["GoodName"] = "tax_code";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","tax_code");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatafreee_deal_details["tax_code"] = $fdata;
//	item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "item_id";
	$fdata["GoodName"] = "item_id";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","item_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatafreee_deal_details["item_id"] = $fdata;
//	section_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "section_id";
	$fdata["GoodName"] = "section_id";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","section_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatafreee_deal_details["section_id"] = $fdata;
//	tag_ids
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tag_ids";
	$fdata["GoodName"] = "tag_ids";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","tag_ids");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatafreee_deal_details["tag_ids"] = $fdata;
//	segment_1_tag_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "segment_1_tag_id";
	$fdata["GoodName"] = "segment_1_tag_id";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","segment_1_tag_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "segment_1_tag_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`segment_1_tag_id`";

	
	
			
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








	$tdatafreee_deal_details["segment_1_tag_id"] = $fdata;
//	segment_2_tag_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "segment_2_tag_id";
	$fdata["GoodName"] = "segment_2_tag_id";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","segment_2_tag_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "segment_2_tag_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`segment_2_tag_id`";

	
	
			
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








	$tdatafreee_deal_details["segment_2_tag_id"] = $fdata;
//	segment_3_tag_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "segment_3_tag_id";
	$fdata["GoodName"] = "segment_3_tag_id";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","segment_3_tag_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "segment_3_tag_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`segment_3_tag_id`";

	
	
			
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








	$tdatafreee_deal_details["segment_3_tag_id"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","amount");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatafreee_deal_details["amount"] = $fdata;
//	vat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "vat";
	$fdata["GoodName"] = "vat";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","vat");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatafreee_deal_details["vat"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","description");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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
			$edata["EditParams"].= " maxlength=500";

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




	$tdatafreee_deal_details["description"] = $fdata;
//	entry_side
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "entry_side";
	$fdata["GoodName"] = "entry_side";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","entry_side");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatafreee_deal_details["entry_side"] = $fdata;
//	freee_deals_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "freee_deals_id";
	$fdata["GoodName"] = "freee_deals_id";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","freee_deals_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_deals_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deals_id`";

	
	
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




	$tdatafreee_deal_details["freee_deals_id"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatafreee_deal_details["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_by`";

	
	
			
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








	$tdatafreee_deal_details["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatafreee_deal_details["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_by`";

	
	
			
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








	$tdatafreee_deal_details["updated_by"] = $fdata;
//	before_account_item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "before_account_item_id";
	$fdata["GoodName"] = "before_account_item_id";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_deal_details","before_account_item_id");
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

		$fdata["strField"] = "before_account_item_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`before_account_item_id`";

	
	
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




	$tdatafreee_deal_details["before_account_item_id"] = $fdata;


$tables_data["freee_deal_details"]=&$tdatafreee_deal_details;
$field_labels["freee_deal_details"] = &$fieldLabelsfreee_deal_details;
$fieldToolTips["freee_deal_details"] = &$fieldToolTipsfreee_deal_details;
$placeHolders["freee_deal_details"] = &$placeHoldersfreee_deal_details;
$page_titles["freee_deal_details"] = &$pageTitlesfreee_deal_details;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_deal_details"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_deal_details"] = array();


	
				$strOriginalDetailsTable="freee_deals";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="freee_deals";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "freee_deals";
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
					$masterTablesData["freee_deal_details"][0] = $masterParams;
				$masterTablesData["freee_deal_details"][0]["masterKeys"] = array();
	$masterTablesData["freee_deal_details"][0]["masterKeys"][]="id";
				$masterTablesData["freee_deal_details"][0]["detailKeys"] = array();
	$masterTablesData["freee_deal_details"][0]["detailKeys"][]="freee_deals_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_deal_details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`account_item_id`,  	`tax_code`,  	`item_id`,  	`section_id`,  	`tag_ids`,  	`segment_1_tag_id`,  	`segment_2_tag_id`,  	`segment_3_tag_id`,  	`amount`,  	`vat`,  	`description`,  	`entry_side`,  	`freee_deals_id`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`before_account_item_id`";
$proto0["m_strFrom"] = "FROM `freee_deal_details`";
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
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_deal_details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "account_item_id",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto8["m_sql"] = "`account_item_id`";
$proto8["m_srcTableName"] = "freee_deal_details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tax_code",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto10["m_sql"] = "`tax_code`";
$proto10["m_srcTableName"] = "freee_deal_details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "item_id",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto12["m_sql"] = "`item_id`";
$proto12["m_srcTableName"] = "freee_deal_details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "section_id",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto14["m_sql"] = "`section_id`";
$proto14["m_srcTableName"] = "freee_deal_details";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tag_ids",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto16["m_sql"] = "`tag_ids`";
$proto16["m_srcTableName"] = "freee_deal_details";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "segment_1_tag_id",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto18["m_sql"] = "`segment_1_tag_id`";
$proto18["m_srcTableName"] = "freee_deal_details";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "segment_2_tag_id",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto20["m_sql"] = "`segment_2_tag_id`";
$proto20["m_srcTableName"] = "freee_deal_details";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "segment_3_tag_id",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto22["m_sql"] = "`segment_3_tag_id`";
$proto22["m_srcTableName"] = "freee_deal_details";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto24["m_sql"] = "`amount`";
$proto24["m_srcTableName"] = "freee_deal_details";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "vat",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto26["m_sql"] = "`vat`";
$proto26["m_srcTableName"] = "freee_deal_details";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto28["m_sql"] = "`description`";
$proto28["m_srcTableName"] = "freee_deal_details";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "entry_side",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto30["m_sql"] = "`entry_side`";
$proto30["m_srcTableName"] = "freee_deal_details";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_deals_id",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto32["m_sql"] = "`freee_deals_id`";
$proto32["m_srcTableName"] = "freee_deal_details";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto34["m_sql"] = "`created_at`";
$proto34["m_srcTableName"] = "freee_deal_details";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto36["m_sql"] = "`created_by`";
$proto36["m_srcTableName"] = "freee_deal_details";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto38["m_sql"] = "`updated_at`";
$proto38["m_srcTableName"] = "freee_deal_details";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto40["m_sql"] = "`updated_by`";
$proto40["m_srcTableName"] = "freee_deal_details";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "before_account_item_id",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_deal_details"
));

$proto42["m_sql"] = "`before_account_item_id`";
$proto42["m_srcTableName"] = "freee_deal_details";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "freee_deal_details";
$proto45["m_srcTableName"] = "freee_deal_details";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id";
$proto45["m_columns"][] = "account_item_id";
$proto45["m_columns"][] = "tax_code";
$proto45["m_columns"][] = "item_id";
$proto45["m_columns"][] = "section_id";
$proto45["m_columns"][] = "tag_ids";
$proto45["m_columns"][] = "segment_1_tag_id";
$proto45["m_columns"][] = "segment_2_tag_id";
$proto45["m_columns"][] = "segment_3_tag_id";
$proto45["m_columns"][] = "amount";
$proto45["m_columns"][] = "vat";
$proto45["m_columns"][] = "description";
$proto45["m_columns"][] = "entry_side";
$proto45["m_columns"][] = "freee_deals_id";
$proto45["m_columns"][] = "created_at";
$proto45["m_columns"][] = "created_by";
$proto45["m_columns"][] = "updated_at";
$proto45["m_columns"][] = "updated_by";
$proto45["m_columns"][] = "before_account_item_id";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "`freee_deal_details`";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "freee_deal_details";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="freee_deal_details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_deal_details = createSqlQuery_freee_deal_details();


	
		;

																			

$tdatafreee_deal_details[".sqlquery"] = $queryData_freee_deal_details;

$tableEvents["freee_deal_details"] = new eventsBase;
$tdatafreee_deal_details[".hasEvents"] = false;

?>