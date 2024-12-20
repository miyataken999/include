<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_manual_journal_details = array();
	$tdatafreee_manual_journal_details[".truncateText"] = true;
	$tdatafreee_manual_journal_details[".NumberOfChars"] = 80;
	$tdatafreee_manual_journal_details[".ShortName"] = "freee_manual_journal_details";
	$tdatafreee_manual_journal_details[".OwnerID"] = "";
	$tdatafreee_manual_journal_details[".OriginalTable"] = "freee_manual_journal_details";

//	field labels
$fieldLabelsfreee_manual_journal_details = array();
$fieldToolTipsfreee_manual_journal_details = array();
$pageTitlesfreee_manual_journal_details = array();
$placeHoldersfreee_manual_journal_details = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_manual_journal_details["Japanese"] = array();
	$fieldToolTipsfreee_manual_journal_details["Japanese"] = array();
	$placeHoldersfreee_manual_journal_details["Japanese"] = array();
	$pageTitlesfreee_manual_journal_details["Japanese"] = array();
	$fieldLabelsfreee_manual_journal_details["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["id"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["id"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["entry_side"] = "貸借";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["entry_side"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["entry_side"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["account_item_id"] = "勘定科目";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["account_item_id"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["account_item_id"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["tax_code"] = "税区分";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["tax_code"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["tax_code"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["partner_id"] = "取引先";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["partner_id"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["partner_id"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["item_id"] = "品目";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["item_id"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["item_id"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["section_id"] = "部門";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["section_id"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["section_id"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["tag_ids"] = "メモタグ";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["tag_ids"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["tag_ids"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["segment_1_tag_id"] = "Segment 1 Tag Id";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["segment_1_tag_id"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["segment_1_tag_id"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["segment_2_tag_id"] = "Segment 2 Tag Id";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["segment_2_tag_id"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["segment_2_tag_id"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["segment_3_tag_id"] = "Segment 3 Tag Id";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["segment_3_tag_id"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["segment_3_tag_id"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["amount"] = "金額";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["amount"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["amount"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["vat"] = "消費税";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["vat"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["vat"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["description"] = "備考";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["description"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["description"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["freee_manual_journal_id"] = "振替伝票ID";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["freee_manual_journal_id"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["freee_manual_journal_id"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["created_at"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["created_by"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_manual_journal_details["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_manual_journal_details["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_manual_journal_details["Japanese"]["updated_by"] = "";
	if (count($fieldToolTipsfreee_manual_journal_details["Japanese"]))
		$tdatafreee_manual_journal_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_manual_journal_details[""] = array();
	$fieldToolTipsfreee_manual_journal_details[""] = array();
	$placeHoldersfreee_manual_journal_details[""] = array();
	$pageTitlesfreee_manual_journal_details[""] = array();
	$fieldLabelsfreee_manual_journal_details[""]["id"] = "Id";
	$fieldToolTipsfreee_manual_journal_details[""]["id"] = "";
	$placeHoldersfreee_manual_journal_details[""]["id"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["entry_side"] = "Entry Side";
	$fieldToolTipsfreee_manual_journal_details[""]["entry_side"] = "";
	$placeHoldersfreee_manual_journal_details[""]["entry_side"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["account_item_id"] = "Account Item Id";
	$fieldToolTipsfreee_manual_journal_details[""]["account_item_id"] = "";
	$placeHoldersfreee_manual_journal_details[""]["account_item_id"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["tax_code"] = "Tax Code";
	$fieldToolTipsfreee_manual_journal_details[""]["tax_code"] = "";
	$placeHoldersfreee_manual_journal_details[""]["tax_code"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["partner_id"] = "Partner Id";
	$fieldToolTipsfreee_manual_journal_details[""]["partner_id"] = "";
	$placeHoldersfreee_manual_journal_details[""]["partner_id"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["item_id"] = "Item Id";
	$fieldToolTipsfreee_manual_journal_details[""]["item_id"] = "";
	$placeHoldersfreee_manual_journal_details[""]["item_id"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["section_id"] = "Section Id";
	$fieldToolTipsfreee_manual_journal_details[""]["section_id"] = "";
	$placeHoldersfreee_manual_journal_details[""]["section_id"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["tag_ids"] = "Tag Ids";
	$fieldToolTipsfreee_manual_journal_details[""]["tag_ids"] = "";
	$placeHoldersfreee_manual_journal_details[""]["tag_ids"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["segment_1_tag_id"] = "Segment 1 Tag Id";
	$fieldToolTipsfreee_manual_journal_details[""]["segment_1_tag_id"] = "";
	$placeHoldersfreee_manual_journal_details[""]["segment_1_tag_id"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["segment_2_tag_id"] = "Segment 2 Tag Id";
	$fieldToolTipsfreee_manual_journal_details[""]["segment_2_tag_id"] = "";
	$placeHoldersfreee_manual_journal_details[""]["segment_2_tag_id"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["segment_3_tag_id"] = "Segment 3 Tag Id";
	$fieldToolTipsfreee_manual_journal_details[""]["segment_3_tag_id"] = "";
	$placeHoldersfreee_manual_journal_details[""]["segment_3_tag_id"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["amount"] = "Amount";
	$fieldToolTipsfreee_manual_journal_details[""]["amount"] = "";
	$placeHoldersfreee_manual_journal_details[""]["amount"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["vat"] = "Vat";
	$fieldToolTipsfreee_manual_journal_details[""]["vat"] = "";
	$placeHoldersfreee_manual_journal_details[""]["vat"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["description"] = "Description";
	$fieldToolTipsfreee_manual_journal_details[""]["description"] = "";
	$placeHoldersfreee_manual_journal_details[""]["description"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["freee_manual_journal_id"] = "Freee Manual Journal Id";
	$fieldToolTipsfreee_manual_journal_details[""]["freee_manual_journal_id"] = "";
	$placeHoldersfreee_manual_journal_details[""]["freee_manual_journal_id"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_manual_journal_details[""]["created_at"] = "";
	$placeHoldersfreee_manual_journal_details[""]["created_at"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_manual_journal_details[""]["created_by"] = "";
	$placeHoldersfreee_manual_journal_details[""]["created_by"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_manual_journal_details[""]["updated_at"] = "";
	$placeHoldersfreee_manual_journal_details[""]["updated_at"] = "";
	$fieldLabelsfreee_manual_journal_details[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_manual_journal_details[""]["updated_by"] = "";
	$placeHoldersfreee_manual_journal_details[""]["updated_by"] = "";
	if (count($fieldToolTipsfreee_manual_journal_details[""]))
		$tdatafreee_manual_journal_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_manual_journal_details["English"] = array();
	$fieldToolTipsfreee_manual_journal_details["English"] = array();
	$placeHoldersfreee_manual_journal_details["English"] = array();
	$pageTitlesfreee_manual_journal_details["English"] = array();
	$fieldLabelsfreee_manual_journal_details["English"]["id"] = "Id";
	$fieldToolTipsfreee_manual_journal_details["English"]["id"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["id"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["entry_side"] = "Entry Side";
	$fieldToolTipsfreee_manual_journal_details["English"]["entry_side"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["entry_side"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["account_item_id"] = "Account Item Id";
	$fieldToolTipsfreee_manual_journal_details["English"]["account_item_id"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["account_item_id"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["tax_code"] = "Tax Code";
	$fieldToolTipsfreee_manual_journal_details["English"]["tax_code"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["tax_code"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["partner_id"] = "Partner Id";
	$fieldToolTipsfreee_manual_journal_details["English"]["partner_id"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["partner_id"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["item_id"] = "Item Id";
	$fieldToolTipsfreee_manual_journal_details["English"]["item_id"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["item_id"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["section_id"] = "Section Id";
	$fieldToolTipsfreee_manual_journal_details["English"]["section_id"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["section_id"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["tag_ids"] = "Tag Ids";
	$fieldToolTipsfreee_manual_journal_details["English"]["tag_ids"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["tag_ids"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["segment_1_tag_id"] = "Segment 1 Tag Id";
	$fieldToolTipsfreee_manual_journal_details["English"]["segment_1_tag_id"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["segment_1_tag_id"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["segment_2_tag_id"] = "Segment 2 Tag Id";
	$fieldToolTipsfreee_manual_journal_details["English"]["segment_2_tag_id"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["segment_2_tag_id"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["segment_3_tag_id"] = "Segment 3 Tag Id";
	$fieldToolTipsfreee_manual_journal_details["English"]["segment_3_tag_id"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["segment_3_tag_id"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["amount"] = "Amount";
	$fieldToolTipsfreee_manual_journal_details["English"]["amount"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["amount"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["vat"] = "Vat";
	$fieldToolTipsfreee_manual_journal_details["English"]["vat"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["vat"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["description"] = "Description";
	$fieldToolTipsfreee_manual_journal_details["English"]["description"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["description"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["freee_manual_journal_id"] = "Freee Manual Journal Id";
	$fieldToolTipsfreee_manual_journal_details["English"]["freee_manual_journal_id"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["freee_manual_journal_id"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_manual_journal_details["English"]["created_at"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["created_at"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_manual_journal_details["English"]["created_by"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["created_by"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_manual_journal_details["English"]["updated_at"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["updated_at"] = "";
	$fieldLabelsfreee_manual_journal_details["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_manual_journal_details["English"]["updated_by"] = "";
	$placeHoldersfreee_manual_journal_details["English"]["updated_by"] = "";
	if (count($fieldToolTipsfreee_manual_journal_details["English"]))
		$tdatafreee_manual_journal_details[".isUseToolTips"] = true;
}


	$tdatafreee_manual_journal_details[".NCSearch"] = true;



$tdatafreee_manual_journal_details[".shortTableName"] = "freee_manual_journal_details";
$tdatafreee_manual_journal_details[".nSecOptions"] = 0;
$tdatafreee_manual_journal_details[".recsPerRowPrint"] = 1;
$tdatafreee_manual_journal_details[".mainTableOwnerID"] = "";
$tdatafreee_manual_journal_details[".moveNext"] = 1;
$tdatafreee_manual_journal_details[".entityType"] = 0;

$tdatafreee_manual_journal_details[".strOriginalTableName"] = "freee_manual_journal_details";

	



$tdatafreee_manual_journal_details[".showAddInPopup"] = false;

$tdatafreee_manual_journal_details[".showEditInPopup"] = false;

$tdatafreee_manual_journal_details[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_manual_journal_details[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_manual_journal_details[".fieldsForRegister"] = array();

$tdatafreee_manual_journal_details[".listAjax"] = false;

	$tdatafreee_manual_journal_details[".audit"] = false;

	$tdatafreee_manual_journal_details[".locking"] = false;



$tdatafreee_manual_journal_details[".list"] = true;



$tdatafreee_manual_journal_details[".reorderRecordsByHeader"] = true;





$tdatafreee_manual_journal_details[".exportTo"] = true;



$tdatafreee_manual_journal_details[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_manual_journal_details[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_manual_journal_details[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_manual_journal_details[".searchSaving"] = false;
//

$tdatafreee_manual_journal_details[".showSearchPanel"] = true;
		$tdatafreee_manual_journal_details[".flexibleSearch"] = true;

$tdatafreee_manual_journal_details[".isUseAjaxSuggest"] = true;

$tdatafreee_manual_journal_details[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_manual_journal_details[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_manual_journal_details[".buttonsAdded"] = false;

$tdatafreee_manual_journal_details[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_manual_journal_details[".isUseTimeForSearch"] = false;





$tdatafreee_manual_journal_details[".allSearchFields"] = array();
$tdatafreee_manual_journal_details[".filterFields"] = array();
$tdatafreee_manual_journal_details[".requiredSearchFields"] = array();

$tdatafreee_manual_journal_details[".allSearchFields"][] = "id";
	$tdatafreee_manual_journal_details[".allSearchFields"][] = "freee_manual_journal_id";
	$tdatafreee_manual_journal_details[".allSearchFields"][] = "entry_side";
	$tdatafreee_manual_journal_details[".allSearchFields"][] = "account_item_id";
	$tdatafreee_manual_journal_details[".allSearchFields"][] = "section_id";
	$tdatafreee_manual_journal_details[".allSearchFields"][] = "item_id";
	$tdatafreee_manual_journal_details[".allSearchFields"][] = "amount";
	$tdatafreee_manual_journal_details[".allSearchFields"][] = "vat";
	$tdatafreee_manual_journal_details[".allSearchFields"][] = "partner_id";
	$tdatafreee_manual_journal_details[".allSearchFields"][] = "tag_ids";
	$tdatafreee_manual_journal_details[".allSearchFields"][] = "tax_code";
	$tdatafreee_manual_journal_details[".allSearchFields"][] = "description";
	

$tdatafreee_manual_journal_details[".googleLikeFields"] = array();
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "id";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "entry_side";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "account_item_id";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "tax_code";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "partner_id";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "item_id";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "section_id";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "tag_ids";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "segment_1_tag_id";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "segment_2_tag_id";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "segment_3_tag_id";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "amount";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "vat";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "description";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "freee_manual_journal_id";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "created_at";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "created_by";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "updated_at";
$tdatafreee_manual_journal_details[".googleLikeFields"][] = "updated_by";


$tdatafreee_manual_journal_details[".advSearchFields"] = array();
$tdatafreee_manual_journal_details[".advSearchFields"][] = "id";
$tdatafreee_manual_journal_details[".advSearchFields"][] = "freee_manual_journal_id";
$tdatafreee_manual_journal_details[".advSearchFields"][] = "entry_side";
$tdatafreee_manual_journal_details[".advSearchFields"][] = "account_item_id";
$tdatafreee_manual_journal_details[".advSearchFields"][] = "section_id";
$tdatafreee_manual_journal_details[".advSearchFields"][] = "item_id";
$tdatafreee_manual_journal_details[".advSearchFields"][] = "amount";
$tdatafreee_manual_journal_details[".advSearchFields"][] = "vat";
$tdatafreee_manual_journal_details[".advSearchFields"][] = "partner_id";
$tdatafreee_manual_journal_details[".advSearchFields"][] = "tag_ids";
$tdatafreee_manual_journal_details[".advSearchFields"][] = "tax_code";
$tdatafreee_manual_journal_details[".advSearchFields"][] = "description";

$tdatafreee_manual_journal_details[".tableType"] = "list";

$tdatafreee_manual_journal_details[".printerPageOrientation"] = 0;
$tdatafreee_manual_journal_details[".nPrinterPageScale"] = 100;

$tdatafreee_manual_journal_details[".nPrinterSplitRecords"] = 40;

$tdatafreee_manual_journal_details[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_manual_journal_details[".geocodingEnabled"] = false;





$tdatafreee_manual_journal_details[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatafreee_manual_journal_details[".totalsFields"] = array();
$tdatafreee_manual_journal_details[".totalsFields"][] = array(
	"fName" => "amount",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatafreee_manual_journal_details[".totalsFields"][] = array(
	"fName" => "vat",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');

$tdatafreee_manual_journal_details[".pageSize"] = 100;

$tdatafreee_manual_journal_details[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_manual_journal_details[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_manual_journal_details[".orderindexes"] = array();

$tdatafreee_manual_journal_details[".sqlHead"] = "SELECT `id`,  	`entry_side`,  	`account_item_id`,  	`tax_code`,  	`partner_id`,  	`item_id`,  	`section_id`,  	`tag_ids`,  	`segment_1_tag_id`,  	`segment_2_tag_id`,  	`segment_3_tag_id`,  	`amount`,  	`vat`,  	`description`,  	`freee_manual_journal_id`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`";
$tdatafreee_manual_journal_details[".sqlFrom"] = "FROM `freee_manual_journal_details`";
$tdatafreee_manual_journal_details[".sqlWhereExpr"] = "";
$tdatafreee_manual_journal_details[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_manual_journal_details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_manual_journal_details[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_manual_journal_details[".highlightSearchResults"] = true;

$tableKeysfreee_manual_journal_details = array();
$tableKeysfreee_manual_journal_details[] = "id";
$tdatafreee_manual_journal_details[".Keys"] = $tableKeysfreee_manual_journal_details;

$tdatafreee_manual_journal_details[".listFields"] = array();
$tdatafreee_manual_journal_details[".listFields"][] = "id";
$tdatafreee_manual_journal_details[".listFields"][] = "freee_manual_journal_id";
$tdatafreee_manual_journal_details[".listFields"][] = "entry_side";
$tdatafreee_manual_journal_details[".listFields"][] = "account_item_id";
$tdatafreee_manual_journal_details[".listFields"][] = "section_id";
$tdatafreee_manual_journal_details[".listFields"][] = "item_id";
$tdatafreee_manual_journal_details[".listFields"][] = "amount";
$tdatafreee_manual_journal_details[".listFields"][] = "vat";
$tdatafreee_manual_journal_details[".listFields"][] = "partner_id";
$tdatafreee_manual_journal_details[".listFields"][] = "tag_ids";
$tdatafreee_manual_journal_details[".listFields"][] = "tax_code";
$tdatafreee_manual_journal_details[".listFields"][] = "description";

$tdatafreee_manual_journal_details[".hideMobileList"] = array();


$tdatafreee_manual_journal_details[".viewFields"] = array();

$tdatafreee_manual_journal_details[".addFields"] = array();

$tdatafreee_manual_journal_details[".masterListFields"] = array();
$tdatafreee_manual_journal_details[".masterListFields"][] = "segment_1_tag_id";
$tdatafreee_manual_journal_details[".masterListFields"][] = "segment_2_tag_id";
$tdatafreee_manual_journal_details[".masterListFields"][] = "segment_3_tag_id";
$tdatafreee_manual_journal_details[".masterListFields"][] = "created_at";
$tdatafreee_manual_journal_details[".masterListFields"][] = "created_by";
$tdatafreee_manual_journal_details[".masterListFields"][] = "updated_at";
$tdatafreee_manual_journal_details[".masterListFields"][] = "updated_by";
$tdatafreee_manual_journal_details[".masterListFields"][] = "id";
$tdatafreee_manual_journal_details[".masterListFields"][] = "freee_manual_journal_id";
$tdatafreee_manual_journal_details[".masterListFields"][] = "entry_side";
$tdatafreee_manual_journal_details[".masterListFields"][] = "account_item_id";
$tdatafreee_manual_journal_details[".masterListFields"][] = "section_id";
$tdatafreee_manual_journal_details[".masterListFields"][] = "item_id";
$tdatafreee_manual_journal_details[".masterListFields"][] = "amount";
$tdatafreee_manual_journal_details[".masterListFields"][] = "vat";
$tdatafreee_manual_journal_details[".masterListFields"][] = "partner_id";
$tdatafreee_manual_journal_details[".masterListFields"][] = "tag_ids";
$tdatafreee_manual_journal_details[".masterListFields"][] = "tax_code";
$tdatafreee_manual_journal_details[".masterListFields"][] = "description";

$tdatafreee_manual_journal_details[".inlineAddFields"] = array();

$tdatafreee_manual_journal_details[".editFields"] = array();

$tdatafreee_manual_journal_details[".inlineEditFields"] = array();

$tdatafreee_manual_journal_details[".updateSelectedFields"] = array();


$tdatafreee_manual_journal_details[".exportFields"] = array();
$tdatafreee_manual_journal_details[".exportFields"][] = "id";
$tdatafreee_manual_journal_details[".exportFields"][] = "freee_manual_journal_id";
$tdatafreee_manual_journal_details[".exportFields"][] = "entry_side";
$tdatafreee_manual_journal_details[".exportFields"][] = "account_item_id";
$tdatafreee_manual_journal_details[".exportFields"][] = "section_id";
$tdatafreee_manual_journal_details[".exportFields"][] = "item_id";
$tdatafreee_manual_journal_details[".exportFields"][] = "amount";
$tdatafreee_manual_journal_details[".exportFields"][] = "vat";
$tdatafreee_manual_journal_details[".exportFields"][] = "partner_id";
$tdatafreee_manual_journal_details[".exportFields"][] = "tag_ids";
$tdatafreee_manual_journal_details[".exportFields"][] = "tax_code";
$tdatafreee_manual_journal_details[".exportFields"][] = "description";

$tdatafreee_manual_journal_details[".importFields"] = array();

$tdatafreee_manual_journal_details[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","id");
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




	$tdatafreee_manual_journal_details["id"] = $fdata;
//	entry_side
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "entry_side";
	$fdata["GoodName"] = "entry_side";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","entry_side");
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




	$tdatafreee_manual_journal_details["entry_side"] = $fdata;
//	account_item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "account_item_id";
	$fdata["GoodName"] = "account_item_id";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","account_item_id");
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




	$tdatafreee_manual_journal_details["account_item_id"] = $fdata;
//	tax_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "tax_code";
	$fdata["GoodName"] = "tax_code";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","tax_code");
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




	$tdatafreee_manual_journal_details["tax_code"] = $fdata;
//	partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "partner_id";
	$fdata["GoodName"] = "partner_id";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","partner_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatafreee_manual_journal_details["partner_id"] = $fdata;
//	item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "item_id";
	$fdata["GoodName"] = "item_id";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","item_id");
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




	$tdatafreee_manual_journal_details["item_id"] = $fdata;
//	section_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "section_id";
	$fdata["GoodName"] = "section_id";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","section_id");
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




	$tdatafreee_manual_journal_details["section_id"] = $fdata;
//	tag_ids
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tag_ids";
	$fdata["GoodName"] = "tag_ids";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","tag_ids");
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




	$tdatafreee_manual_journal_details["tag_ids"] = $fdata;
//	segment_1_tag_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "segment_1_tag_id";
	$fdata["GoodName"] = "segment_1_tag_id";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","segment_1_tag_id");
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








	$tdatafreee_manual_journal_details["segment_1_tag_id"] = $fdata;
//	segment_2_tag_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "segment_2_tag_id";
	$fdata["GoodName"] = "segment_2_tag_id";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","segment_2_tag_id");
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








	$tdatafreee_manual_journal_details["segment_2_tag_id"] = $fdata;
//	segment_3_tag_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "segment_3_tag_id";
	$fdata["GoodName"] = "segment_3_tag_id";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","segment_3_tag_id");
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








	$tdatafreee_manual_journal_details["segment_3_tag_id"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","amount");
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




	$tdatafreee_manual_journal_details["amount"] = $fdata;
//	vat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "vat";
	$fdata["GoodName"] = "vat";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","vat");
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




	$tdatafreee_manual_journal_details["vat"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","description");
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




	$tdatafreee_manual_journal_details["description"] = $fdata;
//	freee_manual_journal_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "freee_manual_journal_id";
	$fdata["GoodName"] = "freee_manual_journal_id";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","freee_manual_journal_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_manual_journal_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_manual_journal_id`";

	
	
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




	$tdatafreee_manual_journal_details["freee_manual_journal_id"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_at`";

	
	
			
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








	$tdatafreee_manual_journal_details["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","created_by");
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








	$tdatafreee_manual_journal_details["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`updated_at`";

	
	
			
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








	$tdatafreee_manual_journal_details["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_manual_journal_details";
	$fdata["Label"] = GetFieldLabel("freee_manual_journal_details","updated_by");
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








	$tdatafreee_manual_journal_details["updated_by"] = $fdata;


$tables_data["freee_manual_journal_details"]=&$tdatafreee_manual_journal_details;
$field_labels["freee_manual_journal_details"] = &$fieldLabelsfreee_manual_journal_details;
$fieldToolTips["freee_manual_journal_details"] = &$fieldToolTipsfreee_manual_journal_details;
$placeHolders["freee_manual_journal_details"] = &$placeHoldersfreee_manual_journal_details;
$page_titles["freee_manual_journal_details"] = &$pageTitlesfreee_manual_journal_details;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_manual_journal_details"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_manual_journal_details"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_manual_journal_details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`entry_side`,  	`account_item_id`,  	`tax_code`,  	`partner_id`,  	`item_id`,  	`section_id`,  	`tag_ids`,  	`segment_1_tag_id`,  	`segment_2_tag_id`,  	`segment_3_tag_id`,  	`amount`,  	`vat`,  	`description`,  	`freee_manual_journal_id`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`";
$proto0["m_strFrom"] = "FROM `freee_manual_journal_details`";
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
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_manual_journal_details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "entry_side",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto8["m_sql"] = "`entry_side`";
$proto8["m_srcTableName"] = "freee_manual_journal_details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "account_item_id",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto10["m_sql"] = "`account_item_id`";
$proto10["m_srcTableName"] = "freee_manual_journal_details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "tax_code",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto12["m_sql"] = "`tax_code`";
$proto12["m_srcTableName"] = "freee_manual_journal_details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "partner_id",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto14["m_sql"] = "`partner_id`";
$proto14["m_srcTableName"] = "freee_manual_journal_details";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "item_id",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto16["m_sql"] = "`item_id`";
$proto16["m_srcTableName"] = "freee_manual_journal_details";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "section_id",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto18["m_sql"] = "`section_id`";
$proto18["m_srcTableName"] = "freee_manual_journal_details";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tag_ids",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto20["m_sql"] = "`tag_ids`";
$proto20["m_srcTableName"] = "freee_manual_journal_details";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "segment_1_tag_id",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto22["m_sql"] = "`segment_1_tag_id`";
$proto22["m_srcTableName"] = "freee_manual_journal_details";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "segment_2_tag_id",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto24["m_sql"] = "`segment_2_tag_id`";
$proto24["m_srcTableName"] = "freee_manual_journal_details";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "segment_3_tag_id",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto26["m_sql"] = "`segment_3_tag_id`";
$proto26["m_srcTableName"] = "freee_manual_journal_details";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto28["m_sql"] = "`amount`";
$proto28["m_srcTableName"] = "freee_manual_journal_details";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "vat",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto30["m_sql"] = "`vat`";
$proto30["m_srcTableName"] = "freee_manual_journal_details";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto32["m_sql"] = "`description`";
$proto32["m_srcTableName"] = "freee_manual_journal_details";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_manual_journal_id",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto34["m_sql"] = "`freee_manual_journal_id`";
$proto34["m_srcTableName"] = "freee_manual_journal_details";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto36["m_sql"] = "`created_at`";
$proto36["m_srcTableName"] = "freee_manual_journal_details";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto38["m_sql"] = "`created_by`";
$proto38["m_srcTableName"] = "freee_manual_journal_details";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto40["m_sql"] = "`updated_at`";
$proto40["m_srcTableName"] = "freee_manual_journal_details";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_manual_journal_details",
	"m_srcTableName" => "freee_manual_journal_details"
));

$proto42["m_sql"] = "`updated_by`";
$proto42["m_srcTableName"] = "freee_manual_journal_details";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "freee_manual_journal_details";
$proto45["m_srcTableName"] = "freee_manual_journal_details";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id";
$proto45["m_columns"][] = "entry_side";
$proto45["m_columns"][] = "account_item_id";
$proto45["m_columns"][] = "tax_code";
$proto45["m_columns"][] = "partner_id";
$proto45["m_columns"][] = "item_id";
$proto45["m_columns"][] = "section_id";
$proto45["m_columns"][] = "tag_ids";
$proto45["m_columns"][] = "segment_1_tag_id";
$proto45["m_columns"][] = "segment_2_tag_id";
$proto45["m_columns"][] = "segment_3_tag_id";
$proto45["m_columns"][] = "amount";
$proto45["m_columns"][] = "vat";
$proto45["m_columns"][] = "description";
$proto45["m_columns"][] = "freee_manual_journal_id";
$proto45["m_columns"][] = "created_at";
$proto45["m_columns"][] = "created_by";
$proto45["m_columns"][] = "updated_at";
$proto45["m_columns"][] = "updated_by";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "`freee_manual_journal_details`";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "freee_manual_journal_details";
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
$proto0["m_srcTableName"]="freee_manual_journal_details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_manual_journal_details = createSqlQuery_freee_manual_journal_details();


	
		;

																			

$tdatafreee_manual_journal_details[".sqlquery"] = $queryData_freee_manual_journal_details;

$tableEvents["freee_manual_journal_details"] = new eventsBase;
$tdatafreee_manual_journal_details[".hasEvents"] = false;

?>