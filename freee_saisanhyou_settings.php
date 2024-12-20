<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_saisanhyou = array();
	$tdatafreee_saisanhyou[".truncateText"] = true;
	$tdatafreee_saisanhyou[".NumberOfChars"] = 80;
	$tdatafreee_saisanhyou[".ShortName"] = "freee_saisanhyou";
	$tdatafreee_saisanhyou[".OwnerID"] = "";
	$tdatafreee_saisanhyou[".OriginalTable"] = "freee_saisanhyou";

//	field labels
$fieldLabelsfreee_saisanhyou = array();
$fieldToolTipsfreee_saisanhyou = array();
$pageTitlesfreee_saisanhyou = array();
$placeHoldersfreee_saisanhyou = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_saisanhyou["Japanese"] = array();
	$fieldToolTipsfreee_saisanhyou["Japanese"] = array();
	$placeHoldersfreee_saisanhyou["Japanese"] = array();
	$pageTitlesfreee_saisanhyou["Japanese"] = array();
	$fieldLabelsfreee_saisanhyou["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_saisanhyou["Japanese"]["id"] = "";
	$placeHoldersfreee_saisanhyou["Japanese"]["id"] = "";
	$fieldLabelsfreee_saisanhyou["Japanese"]["freee_deal_join_manual_journal__detail_id"] = "取引+振替伝票Id";
	$fieldToolTipsfreee_saisanhyou["Japanese"]["freee_deal_join_manual_journal__detail_id"] = "";
	$placeHoldersfreee_saisanhyou["Japanese"]["freee_deal_join_manual_journal__detail_id"] = "";
	$fieldLabelsfreee_saisanhyou["Japanese"]["dept_group_id"] = "部署";
	$fieldToolTipsfreee_saisanhyou["Japanese"]["dept_group_id"] = "";
	$placeHoldersfreee_saisanhyou["Japanese"]["dept_group_id"] = "";
	$fieldLabelsfreee_saisanhyou["Japanese"]["issue_date"] = "発生日";
	$fieldToolTipsfreee_saisanhyou["Japanese"]["issue_date"] = "";
	$placeHoldersfreee_saisanhyou["Japanese"]["issue_date"] = "";
	$fieldLabelsfreee_saisanhyou["Japanese"]["amount"] = "金額";
	$fieldToolTipsfreee_saisanhyou["Japanese"]["amount"] = "";
	$placeHoldersfreee_saisanhyou["Japanese"]["amount"] = "";
	$fieldLabelsfreee_saisanhyou["Japanese"]["account_item_id"] = "勘定科目";
	$fieldToolTipsfreee_saisanhyou["Japanese"]["account_item_id"] = "";
	$placeHoldersfreee_saisanhyou["Japanese"]["account_item_id"] = "";
	$fieldLabelsfreee_saisanhyou["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_saisanhyou["Japanese"]["created_at"] = "";
	$placeHoldersfreee_saisanhyou["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_saisanhyou["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_saisanhyou["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_saisanhyou["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_saisanhyou["Japanese"]["entry_side"] = "貸借";
	$fieldToolTipsfreee_saisanhyou["Japanese"]["entry_side"] = "";
	$placeHoldersfreee_saisanhyou["Japanese"]["entry_side"] = "";
	$fieldLabelsfreee_saisanhyou["Japanese"]["partner_id"] = "取引先";
	$fieldToolTipsfreee_saisanhyou["Japanese"]["partner_id"] = "";
	$placeHoldersfreee_saisanhyou["Japanese"]["partner_id"] = "";
	$fieldLabelsfreee_saisanhyou["Japanese"]["item_id"] = "品目";
	$fieldToolTipsfreee_saisanhyou["Japanese"]["item_id"] = "";
	$placeHoldersfreee_saisanhyou["Japanese"]["item_id"] = "";
	$fieldLabelsfreee_saisanhyou["Japanese"]["section_id"] = "部門";
	$fieldToolTipsfreee_saisanhyou["Japanese"]["section_id"] = "";
	$placeHoldersfreee_saisanhyou["Japanese"]["section_id"] = "";
	$fieldLabelsfreee_saisanhyou["Japanese"]["freee_deal_detail_id"] = "取引詳細Id";
	$fieldToolTipsfreee_saisanhyou["Japanese"]["freee_deal_detail_id"] = "";
	$placeHoldersfreee_saisanhyou["Japanese"]["freee_deal_detail_id"] = "";
	$fieldLabelsfreee_saisanhyou["Japanese"]["freee_manual_journal_detail_id"] = "振替伝票詳細Id";
	$fieldToolTipsfreee_saisanhyou["Japanese"]["freee_manual_journal_detail_id"] = "";
	$placeHoldersfreee_saisanhyou["Japanese"]["freee_manual_journal_detail_id"] = "";
	$fieldLabelsfreee_saisanhyou["Japanese"]["freee_in_house_sale_id"] = "社内売りId";
	$fieldToolTipsfreee_saisanhyou["Japanese"]["freee_in_house_sale_id"] = "";
	$placeHoldersfreee_saisanhyou["Japanese"]["freee_in_house_sale_id"] = "";
	$fieldLabelsfreee_saisanhyou["Japanese"]["freee_deals_id"] = "取引Id";
	$fieldToolTipsfreee_saisanhyou["Japanese"]["freee_deals_id"] = "";
	$placeHoldersfreee_saisanhyou["Japanese"]["freee_deals_id"] = "";
	if (count($fieldToolTipsfreee_saisanhyou["Japanese"]))
		$tdatafreee_saisanhyou[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_saisanhyou[""] = array();
	$fieldToolTipsfreee_saisanhyou[""] = array();
	$placeHoldersfreee_saisanhyou[""] = array();
	$pageTitlesfreee_saisanhyou[""] = array();
	$fieldLabelsfreee_saisanhyou[""]["id"] = "Id";
	$fieldToolTipsfreee_saisanhyou[""]["id"] = "";
	$placeHoldersfreee_saisanhyou[""]["id"] = "";
	$fieldLabelsfreee_saisanhyou[""]["freee_deal_join_manual_journal__detail_id"] = "Freee Deal Join Manual Journal  Detail Id";
	$fieldToolTipsfreee_saisanhyou[""]["freee_deal_join_manual_journal__detail_id"] = "";
	$placeHoldersfreee_saisanhyou[""]["freee_deal_join_manual_journal__detail_id"] = "";
	$fieldLabelsfreee_saisanhyou[""]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsfreee_saisanhyou[""]["dept_group_id"] = "";
	$placeHoldersfreee_saisanhyou[""]["dept_group_id"] = "";
	$fieldLabelsfreee_saisanhyou[""]["issue_date"] = "Issue Date";
	$fieldToolTipsfreee_saisanhyou[""]["issue_date"] = "";
	$placeHoldersfreee_saisanhyou[""]["issue_date"] = "";
	$fieldLabelsfreee_saisanhyou[""]["amount"] = "Amount";
	$fieldToolTipsfreee_saisanhyou[""]["amount"] = "";
	$placeHoldersfreee_saisanhyou[""]["amount"] = "";
	$fieldLabelsfreee_saisanhyou[""]["account_item_id"] = "Account Item Id";
	$fieldToolTipsfreee_saisanhyou[""]["account_item_id"] = "";
	$placeHoldersfreee_saisanhyou[""]["account_item_id"] = "";
	$fieldLabelsfreee_saisanhyou[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_saisanhyou[""]["created_at"] = "";
	$placeHoldersfreee_saisanhyou[""]["created_at"] = "";
	$fieldLabelsfreee_saisanhyou[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_saisanhyou[""]["updated_at"] = "";
	$placeHoldersfreee_saisanhyou[""]["updated_at"] = "";
	$fieldLabelsfreee_saisanhyou[""]["entry_side"] = "Entry Side";
	$fieldToolTipsfreee_saisanhyou[""]["entry_side"] = "";
	$placeHoldersfreee_saisanhyou[""]["entry_side"] = "";
	$fieldLabelsfreee_saisanhyou[""]["partner_id"] = "Partner Id";
	$fieldToolTipsfreee_saisanhyou[""]["partner_id"] = "";
	$placeHoldersfreee_saisanhyou[""]["partner_id"] = "";
	$fieldLabelsfreee_saisanhyou[""]["item_id"] = "Item Id";
	$fieldToolTipsfreee_saisanhyou[""]["item_id"] = "";
	$placeHoldersfreee_saisanhyou[""]["item_id"] = "";
	$fieldLabelsfreee_saisanhyou[""]["section_id"] = "Section Id";
	$fieldToolTipsfreee_saisanhyou[""]["section_id"] = "";
	$placeHoldersfreee_saisanhyou[""]["section_id"] = "";
	$fieldLabelsfreee_saisanhyou[""]["freee_deal_detail_id"] = "Freee Deal Detail Id";
	$fieldToolTipsfreee_saisanhyou[""]["freee_deal_detail_id"] = "";
	$placeHoldersfreee_saisanhyou[""]["freee_deal_detail_id"] = "";
	$fieldLabelsfreee_saisanhyou[""]["freee_manual_journal_detail_id"] = "Freee Manual Journal Detail Id";
	$fieldToolTipsfreee_saisanhyou[""]["freee_manual_journal_detail_id"] = "";
	$placeHoldersfreee_saisanhyou[""]["freee_manual_journal_detail_id"] = "";
	$fieldLabelsfreee_saisanhyou[""]["freee_in_house_sale_id"] = "Freee In House Sale Id";
	$fieldToolTipsfreee_saisanhyou[""]["freee_in_house_sale_id"] = "";
	$placeHoldersfreee_saisanhyou[""]["freee_in_house_sale_id"] = "";
	$fieldLabelsfreee_saisanhyou[""]["freee_deals_id"] = "Freee Deals Id";
	$fieldToolTipsfreee_saisanhyou[""]["freee_deals_id"] = "";
	$placeHoldersfreee_saisanhyou[""]["freee_deals_id"] = "";
	if (count($fieldToolTipsfreee_saisanhyou[""]))
		$tdatafreee_saisanhyou[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_saisanhyou["English"] = array();
	$fieldToolTipsfreee_saisanhyou["English"] = array();
	$placeHoldersfreee_saisanhyou["English"] = array();
	$pageTitlesfreee_saisanhyou["English"] = array();
	$fieldLabelsfreee_saisanhyou["English"]["id"] = "Id";
	$fieldToolTipsfreee_saisanhyou["English"]["id"] = "";
	$placeHoldersfreee_saisanhyou["English"]["id"] = "";
	$fieldLabelsfreee_saisanhyou["English"]["freee_deal_join_manual_journal__detail_id"] = "Freee Deal Join Manual Journal  Detail Id";
	$fieldToolTipsfreee_saisanhyou["English"]["freee_deal_join_manual_journal__detail_id"] = "";
	$placeHoldersfreee_saisanhyou["English"]["freee_deal_join_manual_journal__detail_id"] = "";
	$fieldLabelsfreee_saisanhyou["English"]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsfreee_saisanhyou["English"]["dept_group_id"] = "";
	$placeHoldersfreee_saisanhyou["English"]["dept_group_id"] = "";
	$fieldLabelsfreee_saisanhyou["English"]["issue_date"] = "Issue Date";
	$fieldToolTipsfreee_saisanhyou["English"]["issue_date"] = "";
	$placeHoldersfreee_saisanhyou["English"]["issue_date"] = "";
	$fieldLabelsfreee_saisanhyou["English"]["amount"] = "Amount";
	$fieldToolTipsfreee_saisanhyou["English"]["amount"] = "";
	$placeHoldersfreee_saisanhyou["English"]["amount"] = "";
	$fieldLabelsfreee_saisanhyou["English"]["account_item_id"] = "Account Item Id";
	$fieldToolTipsfreee_saisanhyou["English"]["account_item_id"] = "";
	$placeHoldersfreee_saisanhyou["English"]["account_item_id"] = "";
	$fieldLabelsfreee_saisanhyou["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_saisanhyou["English"]["created_at"] = "";
	$placeHoldersfreee_saisanhyou["English"]["created_at"] = "";
	$fieldLabelsfreee_saisanhyou["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_saisanhyou["English"]["updated_at"] = "";
	$placeHoldersfreee_saisanhyou["English"]["updated_at"] = "";
	$fieldLabelsfreee_saisanhyou["English"]["entry_side"] = "Entry Side";
	$fieldToolTipsfreee_saisanhyou["English"]["entry_side"] = "";
	$placeHoldersfreee_saisanhyou["English"]["entry_side"] = "";
	$fieldLabelsfreee_saisanhyou["English"]["partner_id"] = "Partner Id";
	$fieldToolTipsfreee_saisanhyou["English"]["partner_id"] = "";
	$placeHoldersfreee_saisanhyou["English"]["partner_id"] = "";
	$fieldLabelsfreee_saisanhyou["English"]["item_id"] = "Item Id";
	$fieldToolTipsfreee_saisanhyou["English"]["item_id"] = "";
	$placeHoldersfreee_saisanhyou["English"]["item_id"] = "";
	$fieldLabelsfreee_saisanhyou["English"]["section_id"] = "Section Id";
	$fieldToolTipsfreee_saisanhyou["English"]["section_id"] = "";
	$placeHoldersfreee_saisanhyou["English"]["section_id"] = "";
	$fieldLabelsfreee_saisanhyou["English"]["freee_deal_detail_id"] = "Freee Deal Detail Id";
	$fieldToolTipsfreee_saisanhyou["English"]["freee_deal_detail_id"] = "";
	$placeHoldersfreee_saisanhyou["English"]["freee_deal_detail_id"] = "";
	$fieldLabelsfreee_saisanhyou["English"]["freee_manual_journal_detail_id"] = "Freee Manual Journal Detail Id";
	$fieldToolTipsfreee_saisanhyou["English"]["freee_manual_journal_detail_id"] = "";
	$placeHoldersfreee_saisanhyou["English"]["freee_manual_journal_detail_id"] = "";
	$fieldLabelsfreee_saisanhyou["English"]["freee_in_house_sale_id"] = "Freee In House Sale Id";
	$fieldToolTipsfreee_saisanhyou["English"]["freee_in_house_sale_id"] = "";
	$placeHoldersfreee_saisanhyou["English"]["freee_in_house_sale_id"] = "";
	$fieldLabelsfreee_saisanhyou["English"]["freee_deals_id"] = "Freee Deals Id";
	$fieldToolTipsfreee_saisanhyou["English"]["freee_deals_id"] = "";
	$placeHoldersfreee_saisanhyou["English"]["freee_deals_id"] = "";
	if (count($fieldToolTipsfreee_saisanhyou["English"]))
		$tdatafreee_saisanhyou[".isUseToolTips"] = true;
}


	$tdatafreee_saisanhyou[".NCSearch"] = true;



$tdatafreee_saisanhyou[".shortTableName"] = "freee_saisanhyou";
$tdatafreee_saisanhyou[".nSecOptions"] = 0;
$tdatafreee_saisanhyou[".recsPerRowPrint"] = 1;
$tdatafreee_saisanhyou[".mainTableOwnerID"] = "";
$tdatafreee_saisanhyou[".moveNext"] = 1;
$tdatafreee_saisanhyou[".entityType"] = 0;

$tdatafreee_saisanhyou[".strOriginalTableName"] = "freee_saisanhyou";

	



$tdatafreee_saisanhyou[".showAddInPopup"] = false;

$tdatafreee_saisanhyou[".showEditInPopup"] = false;

$tdatafreee_saisanhyou[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_saisanhyou[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_saisanhyou[".fieldsForRegister"] = array();

$tdatafreee_saisanhyou[".listAjax"] = false;

	$tdatafreee_saisanhyou[".audit"] = false;

	$tdatafreee_saisanhyou[".locking"] = false;



$tdatafreee_saisanhyou[".list"] = true;

$tdatafreee_saisanhyou[".inlineEdit"] = true;


$tdatafreee_saisanhyou[".reorderRecordsByHeader"] = true;





$tdatafreee_saisanhyou[".exportTo"] = true;



$tdatafreee_saisanhyou[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_saisanhyou[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_saisanhyou[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_saisanhyou[".searchSaving"] = false;
//

$tdatafreee_saisanhyou[".showSearchPanel"] = true;
		$tdatafreee_saisanhyou[".flexibleSearch"] = true;

$tdatafreee_saisanhyou[".isUseAjaxSuggest"] = true;

$tdatafreee_saisanhyou[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatafreee_saisanhyou[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_saisanhyou[".buttonsAdded"] = false;

$tdatafreee_saisanhyou[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_saisanhyou[".isUseTimeForSearch"] = false;



$tdatafreee_saisanhyou[".badgeColor"] = "5f9ea0";

$tdatafreee_saisanhyou[".detailsLinksOnList"] = "1";

$tdatafreee_saisanhyou[".allSearchFields"] = array();
$tdatafreee_saisanhyou[".filterFields"] = array();
$tdatafreee_saisanhyou[".requiredSearchFields"] = array();

$tdatafreee_saisanhyou[".allSearchFields"][] = "freee_in_house_sale_id";
	$tdatafreee_saisanhyou[".allSearchFields"][] = "id";
	$tdatafreee_saisanhyou[".allSearchFields"][] = "issue_date";
	$tdatafreee_saisanhyou[".allSearchFields"][] = "amount";
	$tdatafreee_saisanhyou[".allSearchFields"][] = "entry_side";
	$tdatafreee_saisanhyou[".allSearchFields"][] = "dept_group_id";
	$tdatafreee_saisanhyou[".allSearchFields"][] = "section_id";
	$tdatafreee_saisanhyou[".allSearchFields"][] = "item_id";
	$tdatafreee_saisanhyou[".allSearchFields"][] = "account_item_id";
	$tdatafreee_saisanhyou[".allSearchFields"][] = "partner_id";
	$tdatafreee_saisanhyou[".allSearchFields"][] = "freee_deal_join_manual_journal__detail_id";
	$tdatafreee_saisanhyou[".allSearchFields"][] = "freee_deals_id";
	$tdatafreee_saisanhyou[".allSearchFields"][] = "freee_deal_detail_id";
	$tdatafreee_saisanhyou[".allSearchFields"][] = "freee_manual_journal_detail_id";
	$tdatafreee_saisanhyou[".allSearchFields"][] = "created_at";
	$tdatafreee_saisanhyou[".allSearchFields"][] = "updated_at";
	

$tdatafreee_saisanhyou[".googleLikeFields"] = array();
$tdatafreee_saisanhyou[".googleLikeFields"][] = "id";
$tdatafreee_saisanhyou[".googleLikeFields"][] = "freee_deal_join_manual_journal__detail_id";
$tdatafreee_saisanhyou[".googleLikeFields"][] = "dept_group_id";
$tdatafreee_saisanhyou[".googleLikeFields"][] = "issue_date";
$tdatafreee_saisanhyou[".googleLikeFields"][] = "amount";
$tdatafreee_saisanhyou[".googleLikeFields"][] = "created_at";
$tdatafreee_saisanhyou[".googleLikeFields"][] = "updated_at";
$tdatafreee_saisanhyou[".googleLikeFields"][] = "entry_side";
$tdatafreee_saisanhyou[".googleLikeFields"][] = "account_item_id";
$tdatafreee_saisanhyou[".googleLikeFields"][] = "partner_id";
$tdatafreee_saisanhyou[".googleLikeFields"][] = "item_id";
$tdatafreee_saisanhyou[".googleLikeFields"][] = "section_id";
$tdatafreee_saisanhyou[".googleLikeFields"][] = "freee_deal_detail_id";
$tdatafreee_saisanhyou[".googleLikeFields"][] = "freee_manual_journal_detail_id";
$tdatafreee_saisanhyou[".googleLikeFields"][] = "freee_in_house_sale_id";
$tdatafreee_saisanhyou[".googleLikeFields"][] = "freee_deals_id";

$tdatafreee_saisanhyou[".panelSearchFields"] = array();
$tdatafreee_saisanhyou[".searchPanelOptions"] = array();
$tdatafreee_saisanhyou[".panelSearchFields"][] = "issue_date";
	$tdatafreee_saisanhyou[".panelSearchFields"][] = "entry_side";
	$tdatafreee_saisanhyou[".panelSearchFields"][] = "dept_group_id";
	$tdatafreee_saisanhyou[".panelSearchFields"][] = "section_id";
	$tdatafreee_saisanhyou[".panelSearchFields"][] = "item_id";
	$tdatafreee_saisanhyou[".panelSearchFields"][] = "account_item_id";
	$tdatafreee_saisanhyou[".panelSearchFields"][] = "partner_id";
	
$tdatafreee_saisanhyou[".advSearchFields"] = array();
$tdatafreee_saisanhyou[".advSearchFields"][] = "freee_in_house_sale_id";
$tdatafreee_saisanhyou[".advSearchFields"][] = "id";
$tdatafreee_saisanhyou[".advSearchFields"][] = "issue_date";
$tdatafreee_saisanhyou[".advSearchFields"][] = "amount";
$tdatafreee_saisanhyou[".advSearchFields"][] = "entry_side";
$tdatafreee_saisanhyou[".advSearchFields"][] = "dept_group_id";
$tdatafreee_saisanhyou[".advSearchFields"][] = "section_id";
$tdatafreee_saisanhyou[".advSearchFields"][] = "item_id";
$tdatafreee_saisanhyou[".advSearchFields"][] = "account_item_id";
$tdatafreee_saisanhyou[".advSearchFields"][] = "partner_id";
$tdatafreee_saisanhyou[".advSearchFields"][] = "freee_deal_join_manual_journal__detail_id";
$tdatafreee_saisanhyou[".advSearchFields"][] = "freee_deals_id";
$tdatafreee_saisanhyou[".advSearchFields"][] = "freee_deal_detail_id";
$tdatafreee_saisanhyou[".advSearchFields"][] = "freee_manual_journal_detail_id";
$tdatafreee_saisanhyou[".advSearchFields"][] = "created_at";
$tdatafreee_saisanhyou[".advSearchFields"][] = "updated_at";

$tdatafreee_saisanhyou[".tableType"] = "list";

$tdatafreee_saisanhyou[".printerPageOrientation"] = 0;
$tdatafreee_saisanhyou[".nPrinterPageScale"] = 100;

$tdatafreee_saisanhyou[".nPrinterSplitRecords"] = 40;

$tdatafreee_saisanhyou[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_saisanhyou[".geocodingEnabled"] = false;





$tdatafreee_saisanhyou[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatafreee_saisanhyou[".totalsFields"] = array();
$tdatafreee_saisanhyou[".totalsFields"][] = array(
	"fName" => "amount",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');

$tdatafreee_saisanhyou[".pageSize"] = 1000;

$tdatafreee_saisanhyou[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_saisanhyou[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_saisanhyou[".orderindexes"] = array();

$tdatafreee_saisanhyou[".sqlHead"] = "SELECT `freee_saisanhyou`.`id`,  `freee_saisanhyou`.`freee_deal_join_manual_journal__detail_id`,  `freee_saisanhyou`.`dept_group_id`,  `freee_saisanhyou`.`issue_date`,  `freee_saisanhyou`.`amount`,  `freee_saisanhyou`.`created_at`,  `freee_saisanhyou`.`updated_at`,  `freee_deal_join_manual_journal__details`.`entry_side`,  `freee_deal_join_manual_journal__details`.`account_item_id`,  `freee_deal_join_manual_journal__details`.`partner_id`,  `freee_deal_join_manual_journal__details`.`item_id`,  `freee_deal_join_manual_journal__details`.`section_id`,  `freee_deal_join_manual_journal__details`.`freee_deal_detail_id`,  `freee_deal_join_manual_journal__details`.`freee_manual_journal_detail_id`,  `freee_saisanhyou`.`freee_in_house_sale_id`,  `freee_deal_details`.`freee_deals_id`";
$tdatafreee_saisanhyou[".sqlFrom"] = "FROM `freee_saisanhyou`  LEFT OUTER JOIN `freee_deal_join_manual_journal__details` ON `freee_saisanhyou`.`freee_deal_join_manual_journal__detail_id` = `freee_deal_join_manual_journal__details`.`id`  LEFT OUTER JOIN `freee_deal_details` ON `freee_deal_join_manual_journal__details`.`freee_deal_detail_id` = `freee_deal_details`.`id`";
$tdatafreee_saisanhyou[".sqlWhereExpr"] = "";
$tdatafreee_saisanhyou[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_saisanhyou[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_saisanhyou[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_saisanhyou[".highlightSearchResults"] = true;

$tableKeysfreee_saisanhyou = array();
$tableKeysfreee_saisanhyou[] = "id";
$tdatafreee_saisanhyou[".Keys"] = $tableKeysfreee_saisanhyou;

$tdatafreee_saisanhyou[".listFields"] = array();
$tdatafreee_saisanhyou[".listFields"][] = "freee_in_house_sale_id";
$tdatafreee_saisanhyou[".listFields"][] = "id";
$tdatafreee_saisanhyou[".listFields"][] = "issue_date";
$tdatafreee_saisanhyou[".listFields"][] = "amount";
$tdatafreee_saisanhyou[".listFields"][] = "entry_side";
$tdatafreee_saisanhyou[".listFields"][] = "dept_group_id";
$tdatafreee_saisanhyou[".listFields"][] = "section_id";
$tdatafreee_saisanhyou[".listFields"][] = "item_id";
$tdatafreee_saisanhyou[".listFields"][] = "account_item_id";
$tdatafreee_saisanhyou[".listFields"][] = "partner_id";
$tdatafreee_saisanhyou[".listFields"][] = "freee_deal_join_manual_journal__detail_id";
$tdatafreee_saisanhyou[".listFields"][] = "freee_deals_id";
$tdatafreee_saisanhyou[".listFields"][] = "freee_deal_detail_id";
$tdatafreee_saisanhyou[".listFields"][] = "freee_manual_journal_detail_id";
$tdatafreee_saisanhyou[".listFields"][] = "created_at";
$tdatafreee_saisanhyou[".listFields"][] = "updated_at";

$tdatafreee_saisanhyou[".hideMobileList"] = array();


$tdatafreee_saisanhyou[".viewFields"] = array();

$tdatafreee_saisanhyou[".addFields"] = array();

$tdatafreee_saisanhyou[".masterListFields"] = array();
$tdatafreee_saisanhyou[".masterListFields"][] = "freee_in_house_sale_id";
$tdatafreee_saisanhyou[".masterListFields"][] = "id";
$tdatafreee_saisanhyou[".masterListFields"][] = "issue_date";
$tdatafreee_saisanhyou[".masterListFields"][] = "amount";
$tdatafreee_saisanhyou[".masterListFields"][] = "entry_side";
$tdatafreee_saisanhyou[".masterListFields"][] = "dept_group_id";
$tdatafreee_saisanhyou[".masterListFields"][] = "section_id";
$tdatafreee_saisanhyou[".masterListFields"][] = "item_id";
$tdatafreee_saisanhyou[".masterListFields"][] = "account_item_id";
$tdatafreee_saisanhyou[".masterListFields"][] = "partner_id";
$tdatafreee_saisanhyou[".masterListFields"][] = "freee_deal_join_manual_journal__detail_id";
$tdatafreee_saisanhyou[".masterListFields"][] = "freee_deals_id";
$tdatafreee_saisanhyou[".masterListFields"][] = "freee_deal_detail_id";
$tdatafreee_saisanhyou[".masterListFields"][] = "freee_manual_journal_detail_id";
$tdatafreee_saisanhyou[".masterListFields"][] = "created_at";
$tdatafreee_saisanhyou[".masterListFields"][] = "updated_at";

$tdatafreee_saisanhyou[".inlineAddFields"] = array();

$tdatafreee_saisanhyou[".editFields"] = array();

$tdatafreee_saisanhyou[".inlineEditFields"] = array();
$tdatafreee_saisanhyou[".inlineEditFields"][] = "issue_date";
$tdatafreee_saisanhyou[".inlineEditFields"][] = "amount";
$tdatafreee_saisanhyou[".inlineEditFields"][] = "dept_group_id";
$tdatafreee_saisanhyou[".inlineEditFields"][] = "account_item_id";
$tdatafreee_saisanhyou[".inlineEditFields"][] = "freee_deal_join_manual_journal__detail_id";

$tdatafreee_saisanhyou[".updateSelectedFields"] = array();


$tdatafreee_saisanhyou[".exportFields"] = array();
$tdatafreee_saisanhyou[".exportFields"][] = "freee_in_house_sale_id";
$tdatafreee_saisanhyou[".exportFields"][] = "id";
$tdatafreee_saisanhyou[".exportFields"][] = "issue_date";
$tdatafreee_saisanhyou[".exportFields"][] = "amount";
$tdatafreee_saisanhyou[".exportFields"][] = "entry_side";
$tdatafreee_saisanhyou[".exportFields"][] = "dept_group_id";
$tdatafreee_saisanhyou[".exportFields"][] = "section_id";
$tdatafreee_saisanhyou[".exportFields"][] = "item_id";
$tdatafreee_saisanhyou[".exportFields"][] = "account_item_id";
$tdatafreee_saisanhyou[".exportFields"][] = "partner_id";
$tdatafreee_saisanhyou[".exportFields"][] = "freee_deal_join_manual_journal__detail_id";
$tdatafreee_saisanhyou[".exportFields"][] = "freee_deals_id";
$tdatafreee_saisanhyou[".exportFields"][] = "freee_deal_detail_id";
$tdatafreee_saisanhyou[".exportFields"][] = "freee_manual_journal_detail_id";
$tdatafreee_saisanhyou[".exportFields"][] = "created_at";
$tdatafreee_saisanhyou[".exportFields"][] = "updated_at";

$tdatafreee_saisanhyou[".importFields"] = array();

$tdatafreee_saisanhyou[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_saisanhyou";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou","id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_saisanhyou`.`id`";

	
	
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




	$tdatafreee_saisanhyou["id"] = $fdata;
//	freee_deal_join_manual_journal__detail_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "freee_deal_join_manual_journal__detail_id";
	$fdata["GoodName"] = "freee_deal_join_manual_journal__detail_id";
	$fdata["ownerTable"] = "freee_saisanhyou";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou","freee_deal_join_manual_journal__detail_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_deal_join_manual_journal__detail_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_saisanhyou`.`freee_deal_join_manual_journal__detail_id`";

	
	
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




	$tdatafreee_saisanhyou["freee_deal_join_manual_journal__detail_id"] = $fdata;
//	dept_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "dept_group_id";
	$fdata["GoodName"] = "dept_group_id";
	$fdata["ownerTable"] = "freee_saisanhyou";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou","dept_group_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dept_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_saisanhyou`.`dept_group_id`";

	
	
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
	$edata["LookupTable"] = "mst_dept_group";
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




	$tdatafreee_saisanhyou["dept_group_id"] = $fdata;
//	issue_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "issue_date";
	$fdata["GoodName"] = "issue_date";
	$fdata["ownerTable"] = "freee_saisanhyou";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou","issue_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "issue_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_saisanhyou`.`issue_date`";

	
	
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




	$tdatafreee_saisanhyou["issue_date"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "freee_saisanhyou";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou","amount");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_saisanhyou`.`amount`";

	
	
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




	$tdatafreee_saisanhyou["amount"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_saisanhyou";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_saisanhyou`.`created_at`";

	
	
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




	$tdatafreee_saisanhyou["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_saisanhyou";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_saisanhyou`.`updated_at`";

	
	
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




	$tdatafreee_saisanhyou["updated_at"] = $fdata;
//	entry_side
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "entry_side";
	$fdata["GoodName"] = "entry_side";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou","entry_side");
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




	$tdatafreee_saisanhyou["entry_side"] = $fdata;
//	account_item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "account_item_id";
	$fdata["GoodName"] = "account_item_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou","account_item_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
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
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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




	$tdatafreee_saisanhyou["account_item_id"] = $fdata;
//	partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "partner_id";
	$fdata["GoodName"] = "partner_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou","partner_id");
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




	$tdatafreee_saisanhyou["partner_id"] = $fdata;
//	item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "item_id";
	$fdata["GoodName"] = "item_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou","item_id");
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




	$tdatafreee_saisanhyou["item_id"] = $fdata;
//	section_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "section_id";
	$fdata["GoodName"] = "section_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou","section_id");
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




	$tdatafreee_saisanhyou["section_id"] = $fdata;
//	freee_deal_detail_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "freee_deal_detail_id";
	$fdata["GoodName"] = "freee_deal_detail_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou","freee_deal_detail_id");
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




	$tdatafreee_saisanhyou["freee_deal_detail_id"] = $fdata;
//	freee_manual_journal_detail_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "freee_manual_journal_detail_id";
	$fdata["GoodName"] = "freee_manual_journal_detail_id";
	$fdata["ownerTable"] = "freee_deal_join_manual_journal__details";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou","freee_manual_journal_detail_id");
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




	$tdatafreee_saisanhyou["freee_manual_journal_detail_id"] = $fdata;
//	freee_in_house_sale_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "freee_in_house_sale_id";
	$fdata["GoodName"] = "freee_in_house_sale_id";
	$fdata["ownerTable"] = "freee_saisanhyou";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou","freee_in_house_sale_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_in_house_sale_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_saisanhyou`.`freee_in_house_sale_id`";

	
	
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




	$tdatafreee_saisanhyou["freee_in_house_sale_id"] = $fdata;
//	freee_deals_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "freee_deals_id";
	$fdata["GoodName"] = "freee_deals_id";
	$fdata["ownerTable"] = "freee_deal_details";
	$fdata["Label"] = GetFieldLabel("freee_saisanhyou","freee_deals_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_deals_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_deal_details`.`freee_deals_id`";

	
	
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




	$tdatafreee_saisanhyou["freee_deals_id"] = $fdata;


$tables_data["freee_saisanhyou"]=&$tdatafreee_saisanhyou;
$field_labels["freee_saisanhyou"] = &$fieldLabelsfreee_saisanhyou;
$fieldToolTips["freee_saisanhyou"] = &$fieldToolTipsfreee_saisanhyou;
$placeHolders["freee_saisanhyou"] = &$placeHoldersfreee_saisanhyou;
$page_titles["freee_saisanhyou"] = &$pageTitlesfreee_saisanhyou;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_saisanhyou"] = array();
//	freee_in_house_sales
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="freee_in_house_sales";
		$detailsParam["dOriginalTable"] = "freee_in_house_sales";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "freee_in_house_sales";
	$detailsParam["dCaptionTable"] = GetTableCaption("freee_in_house_sales");
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
		
	$detailsTablesData["freee_saisanhyou"][$dIndex] = $detailsParam;

	
		$detailsTablesData["freee_saisanhyou"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["freee_saisanhyou"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["freee_saisanhyou"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["freee_saisanhyou"][$dIndex]["detailKeys"][]="freee_saisanhyou_id";

// tables which are master tables for current table (detail)
$masterTablesData["freee_saisanhyou"] = array();


	
				$strOriginalDetailsTable="freee_deal_join_manual_journal__details";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="freee_deal_join_manual_journal__details";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "freee_deal_join_manual_journal__details";
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
					$masterTablesData["freee_saisanhyou"][0] = $masterParams;
				$masterTablesData["freee_saisanhyou"][0]["masterKeys"] = array();
	$masterTablesData["freee_saisanhyou"][0]["masterKeys"][]="id";
				$masterTablesData["freee_saisanhyou"][0]["detailKeys"] = array();
	$masterTablesData["freee_saisanhyou"][0]["detailKeys"][]="freee_deal_join_manual_journal__detail_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_saisanhyou()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`freee_saisanhyou`.`id`,  `freee_saisanhyou`.`freee_deal_join_manual_journal__detail_id`,  `freee_saisanhyou`.`dept_group_id`,  `freee_saisanhyou`.`issue_date`,  `freee_saisanhyou`.`amount`,  `freee_saisanhyou`.`created_at`,  `freee_saisanhyou`.`updated_at`,  `freee_deal_join_manual_journal__details`.`entry_side`,  `freee_deal_join_manual_journal__details`.`account_item_id`,  `freee_deal_join_manual_journal__details`.`partner_id`,  `freee_deal_join_manual_journal__details`.`item_id`,  `freee_deal_join_manual_journal__details`.`section_id`,  `freee_deal_join_manual_journal__details`.`freee_deal_detail_id`,  `freee_deal_join_manual_journal__details`.`freee_manual_journal_detail_id`,  `freee_saisanhyou`.`freee_in_house_sale_id`,  `freee_deal_details`.`freee_deals_id`";
$proto0["m_strFrom"] = "FROM `freee_saisanhyou`  LEFT OUTER JOIN `freee_deal_join_manual_journal__details` ON `freee_saisanhyou`.`freee_deal_join_manual_journal__detail_id` = `freee_deal_join_manual_journal__details`.`id`  LEFT OUTER JOIN `freee_deal_details` ON `freee_deal_join_manual_journal__details`.`freee_deal_detail_id` = `freee_deal_details`.`id`";
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
	"m_strTable" => "freee_saisanhyou",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto6["m_sql"] = "`freee_saisanhyou`.`id`";
$proto6["m_srcTableName"] = "freee_saisanhyou";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_deal_join_manual_journal__detail_id",
	"m_strTable" => "freee_saisanhyou",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto8["m_sql"] = "`freee_saisanhyou`.`freee_deal_join_manual_journal__detail_id`";
$proto8["m_srcTableName"] = "freee_saisanhyou";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "dept_group_id",
	"m_strTable" => "freee_saisanhyou",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto10["m_sql"] = "`freee_saisanhyou`.`dept_group_id`";
$proto10["m_srcTableName"] = "freee_saisanhyou";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "issue_date",
	"m_strTable" => "freee_saisanhyou",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto12["m_sql"] = "`freee_saisanhyou`.`issue_date`";
$proto12["m_srcTableName"] = "freee_saisanhyou";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "freee_saisanhyou",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto14["m_sql"] = "`freee_saisanhyou`.`amount`";
$proto14["m_srcTableName"] = "freee_saisanhyou";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_saisanhyou",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto16["m_sql"] = "`freee_saisanhyou`.`created_at`";
$proto16["m_srcTableName"] = "freee_saisanhyou";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_saisanhyou",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto18["m_sql"] = "`freee_saisanhyou`.`updated_at`";
$proto18["m_srcTableName"] = "freee_saisanhyou";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "entry_side",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto20["m_sql"] = "`freee_deal_join_manual_journal__details`.`entry_side`";
$proto20["m_srcTableName"] = "freee_saisanhyou";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "account_item_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto22["m_sql"] = "`freee_deal_join_manual_journal__details`.`account_item_id`";
$proto22["m_srcTableName"] = "freee_saisanhyou";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "partner_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto24["m_sql"] = "`freee_deal_join_manual_journal__details`.`partner_id`";
$proto24["m_srcTableName"] = "freee_saisanhyou";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "item_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto26["m_sql"] = "`freee_deal_join_manual_journal__details`.`item_id`";
$proto26["m_srcTableName"] = "freee_saisanhyou";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "section_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto28["m_sql"] = "`freee_deal_join_manual_journal__details`.`section_id`";
$proto28["m_srcTableName"] = "freee_saisanhyou";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_deal_detail_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto30["m_sql"] = "`freee_deal_join_manual_journal__details`.`freee_deal_detail_id`";
$proto30["m_srcTableName"] = "freee_saisanhyou";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_manual_journal_detail_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto32["m_sql"] = "`freee_deal_join_manual_journal__details`.`freee_manual_journal_detail_id`";
$proto32["m_srcTableName"] = "freee_saisanhyou";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_in_house_sale_id",
	"m_strTable" => "freee_saisanhyou",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto34["m_sql"] = "`freee_saisanhyou`.`freee_in_house_sale_id`";
$proto34["m_srcTableName"] = "freee_saisanhyou";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_deals_id",
	"m_strTable" => "freee_deal_details",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto36["m_sql"] = "`freee_deal_details`.`freee_deals_id`";
$proto36["m_srcTableName"] = "freee_saisanhyou";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "freee_saisanhyou";
$proto39["m_srcTableName"] = "freee_saisanhyou";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "freee_deal_join_manual_journal__detail_id";
$proto39["m_columns"][] = "dept_group_id";
$proto39["m_columns"][] = "issue_date";
$proto39["m_columns"][] = "amount";
$proto39["m_columns"][] = "account_item_id";
$proto39["m_columns"][] = "created_at";
$proto39["m_columns"][] = "updated_at";
$proto39["m_columns"][] = "freee_in_house_sale_id";
$proto39["m_columns"][] = "parent_id__freee_saisanhyou";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "`freee_saisanhyou`";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "freee_saisanhyou";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
												$proto42=array();
$proto42["m_link"] = "SQLL_LEFTJOIN";
			$proto43=array();
$proto43["m_strName"] = "freee_deal_join_manual_journal__details";
$proto43["m_srcTableName"] = "freee_saisanhyou";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "id";
$proto43["m_columns"][] = "entry_side";
$proto43["m_columns"][] = "account_item_id";
$proto43["m_columns"][] = "tax_code";
$proto43["m_columns"][] = "partner_id";
$proto43["m_columns"][] = "item_id";
$proto43["m_columns"][] = "section_id";
$proto43["m_columns"][] = "tag_ids";
$proto43["m_columns"][] = "amount";
$proto43["m_columns"][] = "vat";
$proto43["m_columns"][] = "description";
$proto43["m_columns"][] = "issue_date";
$proto43["m_columns"][] = "data_type";
$proto43["m_columns"][] = "freee_deal_detail_id";
$proto43["m_columns"][] = "freee_manual_journal_detail_id";
$proto43["m_columns"][] = "created_at";
$proto43["m_columns"][] = "created_by";
$proto43["m_columns"][] = "updated_at";
$proto43["m_columns"][] = "updated_by";
$proto43["m_columns"][] = "is_manual";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "LEFT OUTER JOIN `freee_deal_join_manual_journal__details` ON `freee_saisanhyou`.`freee_deal_join_manual_journal__detail_id` = `freee_deal_join_manual_journal__details`.`id`";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "freee_saisanhyou";
$proto44=array();
$proto44["m_sql"] = "`freee_saisanhyou`.`freee_deal_join_manual_journal__detail_id` = `freee_deal_join_manual_journal__details`.`id`";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "freee_deal_join_manual_journal__detail_id",
	"m_strTable" => "freee_saisanhyou",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= `freee_deal_join_manual_journal__details`.`id`";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
												$proto46=array();
$proto46["m_link"] = "SQLL_LEFTJOIN";
			$proto47=array();
$proto47["m_strName"] = "freee_deal_details";
$proto47["m_srcTableName"] = "freee_saisanhyou";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id";
$proto47["m_columns"][] = "account_item_id";
$proto47["m_columns"][] = "tax_code";
$proto47["m_columns"][] = "item_id";
$proto47["m_columns"][] = "section_id";
$proto47["m_columns"][] = "tag_ids";
$proto47["m_columns"][] = "segment_1_tag_id";
$proto47["m_columns"][] = "segment_2_tag_id";
$proto47["m_columns"][] = "segment_3_tag_id";
$proto47["m_columns"][] = "amount";
$proto47["m_columns"][] = "vat";
$proto47["m_columns"][] = "description";
$proto47["m_columns"][] = "entry_side";
$proto47["m_columns"][] = "freee_deals_id";
$proto47["m_columns"][] = "created_at";
$proto47["m_columns"][] = "created_by";
$proto47["m_columns"][] = "updated_at";
$proto47["m_columns"][] = "updated_by";
$proto47["m_columns"][] = "before_account_item_id";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "LEFT OUTER JOIN `freee_deal_details` ON `freee_deal_join_manual_journal__details`.`freee_deal_detail_id` = `freee_deal_details`.`id`";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "freee_saisanhyou";
$proto48=array();
$proto48["m_sql"] = "`freee_deal_join_manual_journal__details`.`freee_deal_detail_id` = `freee_deal_details`.`id`";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "freee_deal_detail_id",
	"m_strTable" => "freee_deal_join_manual_journal__details",
	"m_srcTableName" => "freee_saisanhyou"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= `freee_deal_details`.`id`";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="freee_saisanhyou";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_saisanhyou = createSqlQuery_freee_saisanhyou();


	
		;

																

$tdatafreee_saisanhyou[".sqlquery"] = $queryData_freee_saisanhyou;

$tableEvents["freee_saisanhyou"] = new eventsBase;
$tdatafreee_saisanhyou[".hasEvents"] = false;

?>