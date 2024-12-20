<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_freee_deals_data = array();
	$tdatavw_freee_deals_data[".truncateText"] = true;
	$tdatavw_freee_deals_data[".NumberOfChars"] = 80;
	$tdatavw_freee_deals_data[".ShortName"] = "vw_freee_deals_data";
	$tdatavw_freee_deals_data[".OwnerID"] = "";
	$tdatavw_freee_deals_data[".OriginalTable"] = "vw_freee_deals_data";

//	field labels
$fieldLabelsvw_freee_deals_data = array();
$fieldToolTipsvw_freee_deals_data = array();
$pageTitlesvw_freee_deals_data = array();
$placeHoldersvw_freee_deals_data = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_freee_deals_data["Japanese"] = array();
	$fieldToolTipsvw_freee_deals_data["Japanese"] = array();
	$placeHoldersvw_freee_deals_data["Japanese"] = array();
	$pageTitlesvw_freee_deals_data["Japanese"] = array();
	$fieldLabelsvw_freee_deals_data["Japanese"]["torihiki_id"] = "取引Id";
	$fieldToolTipsvw_freee_deals_data["Japanese"]["torihiki_id"] = "";
	$placeHoldersvw_freee_deals_data["Japanese"]["torihiki_id"] = "";
	$fieldLabelsvw_freee_deals_data["Japanese"]["torihikigyou_id"] = "取引行Id";
	$fieldToolTipsvw_freee_deals_data["Japanese"]["torihikigyou_id"] = "";
	$placeHoldersvw_freee_deals_data["Japanese"]["torihikigyou_id"] = "";
	$fieldLabelsvw_freee_deals_data["Japanese"]["account_item_id"] = "勘定科目";
	$fieldToolTipsvw_freee_deals_data["Japanese"]["account_item_id"] = "";
	$placeHoldersvw_freee_deals_data["Japanese"]["account_item_id"] = "";
	$fieldLabelsvw_freee_deals_data["Japanese"]["issue_date"] = "発生日";
	$fieldToolTipsvw_freee_deals_data["Japanese"]["issue_date"] = "";
	$placeHoldersvw_freee_deals_data["Japanese"]["issue_date"] = "";
	$fieldLabelsvw_freee_deals_data["Japanese"]["tax_code"] = "税区分コード";
	$fieldToolTipsvw_freee_deals_data["Japanese"]["tax_code"] = "";
	$placeHoldersvw_freee_deals_data["Japanese"]["tax_code"] = "";
	$fieldLabelsvw_freee_deals_data["Japanese"]["partner_id"] = "取引先Id";
	$fieldToolTipsvw_freee_deals_data["Japanese"]["partner_id"] = "";
	$placeHoldersvw_freee_deals_data["Japanese"]["partner_id"] = "";
	$fieldLabelsvw_freee_deals_data["Japanese"]["partner_code"] = "取引先Code";
	$fieldToolTipsvw_freee_deals_data["Japanese"]["partner_code"] = "";
	$placeHoldersvw_freee_deals_data["Japanese"]["partner_code"] = "";
	$fieldLabelsvw_freee_deals_data["Japanese"]["item_id"] = "品目";
	$fieldToolTipsvw_freee_deals_data["Japanese"]["item_id"] = "";
	$placeHoldersvw_freee_deals_data["Japanese"]["item_id"] = "";
	$fieldLabelsvw_freee_deals_data["Japanese"]["section_id"] = "部門";
	$fieldToolTipsvw_freee_deals_data["Japanese"]["section_id"] = "";
	$placeHoldersvw_freee_deals_data["Japanese"]["section_id"] = "";
	$fieldLabelsvw_freee_deals_data["Japanese"]["ref_number"] = "管理番号";
	$fieldToolTipsvw_freee_deals_data["Japanese"]["ref_number"] = "";
	$placeHoldersvw_freee_deals_data["Japanese"]["ref_number"] = "";
	$fieldLabelsvw_freee_deals_data["Japanese"]["tag_ids"] = "メモタグIds";
	$fieldToolTipsvw_freee_deals_data["Japanese"]["tag_ids"] = "";
	$placeHoldersvw_freee_deals_data["Japanese"]["tag_ids"] = "";
	$fieldLabelsvw_freee_deals_data["Japanese"]["description"] = "備考";
	$fieldToolTipsvw_freee_deals_data["Japanese"]["description"] = "";
	$placeHoldersvw_freee_deals_data["Japanese"]["description"] = "";
	$fieldLabelsvw_freee_deals_data["Japanese"]["entry_side"] = "貸借（貸方: credit, 借方: debit）";
	$fieldToolTipsvw_freee_deals_data["Japanese"]["entry_side"] = "";
	$placeHoldersvw_freee_deals_data["Japanese"]["entry_side"] = "";
	$fieldLabelsvw_freee_deals_data["Japanese"]["amount"] = "取引金額";
	$fieldToolTipsvw_freee_deals_data["Japanese"]["amount"] = "";
	$placeHoldersvw_freee_deals_data["Japanese"]["amount"] = "";
	$fieldLabelsvw_freee_deals_data["Japanese"]["vat"] = "消費税額";
	$fieldToolTipsvw_freee_deals_data["Japanese"]["vat"] = "";
	$placeHoldersvw_freee_deals_data["Japanese"]["vat"] = "";
	if (count($fieldToolTipsvw_freee_deals_data["Japanese"]))
		$tdatavw_freee_deals_data[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_freee_deals_data[""] = array();
	$fieldToolTipsvw_freee_deals_data[""] = array();
	$placeHoldersvw_freee_deals_data[""] = array();
	$pageTitlesvw_freee_deals_data[""] = array();
	$fieldLabelsvw_freee_deals_data[""]["torihiki_id"] = "Torihiki Id";
	$fieldToolTipsvw_freee_deals_data[""]["torihiki_id"] = "";
	$placeHoldersvw_freee_deals_data[""]["torihiki_id"] = "";
	$fieldLabelsvw_freee_deals_data[""]["torihikigyou_id"] = "Torihikigyou Id";
	$fieldToolTipsvw_freee_deals_data[""]["torihikigyou_id"] = "";
	$placeHoldersvw_freee_deals_data[""]["torihikigyou_id"] = "";
	$fieldLabelsvw_freee_deals_data[""]["account_item_id"] = "Account Item Id";
	$fieldToolTipsvw_freee_deals_data[""]["account_item_id"] = "";
	$placeHoldersvw_freee_deals_data[""]["account_item_id"] = "";
	$fieldLabelsvw_freee_deals_data[""]["issue_date"] = "Issue Date";
	$fieldToolTipsvw_freee_deals_data[""]["issue_date"] = "";
	$placeHoldersvw_freee_deals_data[""]["issue_date"] = "";
	$fieldLabelsvw_freee_deals_data[""]["tax_code"] = "Tax Code";
	$fieldToolTipsvw_freee_deals_data[""]["tax_code"] = "";
	$placeHoldersvw_freee_deals_data[""]["tax_code"] = "";
	$fieldLabelsvw_freee_deals_data[""]["partner_id"] = "Partner Id";
	$fieldToolTipsvw_freee_deals_data[""]["partner_id"] = "";
	$placeHoldersvw_freee_deals_data[""]["partner_id"] = "";
	$fieldLabelsvw_freee_deals_data[""]["partner_code"] = "Partner Code";
	$fieldToolTipsvw_freee_deals_data[""]["partner_code"] = "";
	$placeHoldersvw_freee_deals_data[""]["partner_code"] = "";
	$fieldLabelsvw_freee_deals_data[""]["item_id"] = "Item Id";
	$fieldToolTipsvw_freee_deals_data[""]["item_id"] = "";
	$placeHoldersvw_freee_deals_data[""]["item_id"] = "";
	$fieldLabelsvw_freee_deals_data[""]["section_id"] = "Section Id";
	$fieldToolTipsvw_freee_deals_data[""]["section_id"] = "";
	$placeHoldersvw_freee_deals_data[""]["section_id"] = "";
	$fieldLabelsvw_freee_deals_data[""]["ref_number"] = "Ref Number";
	$fieldToolTipsvw_freee_deals_data[""]["ref_number"] = "";
	$placeHoldersvw_freee_deals_data[""]["ref_number"] = "";
	$fieldLabelsvw_freee_deals_data[""]["tag_ids"] = "Tag Ids";
	$fieldToolTipsvw_freee_deals_data[""]["tag_ids"] = "";
	$placeHoldersvw_freee_deals_data[""]["tag_ids"] = "";
	$fieldLabelsvw_freee_deals_data[""]["description"] = "Description";
	$fieldToolTipsvw_freee_deals_data[""]["description"] = "";
	$placeHoldersvw_freee_deals_data[""]["description"] = "";
	$fieldLabelsvw_freee_deals_data[""]["entry_side"] = "Entry Side";
	$fieldToolTipsvw_freee_deals_data[""]["entry_side"] = "";
	$placeHoldersvw_freee_deals_data[""]["entry_side"] = "";
	$fieldLabelsvw_freee_deals_data[""]["amount"] = "Amount";
	$fieldToolTipsvw_freee_deals_data[""]["amount"] = "";
	$placeHoldersvw_freee_deals_data[""]["amount"] = "";
	$fieldLabelsvw_freee_deals_data[""]["vat"] = "Vat";
	$fieldToolTipsvw_freee_deals_data[""]["vat"] = "";
	$placeHoldersvw_freee_deals_data[""]["vat"] = "";
	if (count($fieldToolTipsvw_freee_deals_data[""]))
		$tdatavw_freee_deals_data[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_freee_deals_data["English"] = array();
	$fieldToolTipsvw_freee_deals_data["English"] = array();
	$placeHoldersvw_freee_deals_data["English"] = array();
	$pageTitlesvw_freee_deals_data["English"] = array();
	$fieldLabelsvw_freee_deals_data["English"]["torihiki_id"] = "Torihiki Id";
	$fieldToolTipsvw_freee_deals_data["English"]["torihiki_id"] = "";
	$placeHoldersvw_freee_deals_data["English"]["torihiki_id"] = "";
	$fieldLabelsvw_freee_deals_data["English"]["torihikigyou_id"] = "Torihikigyou Id";
	$fieldToolTipsvw_freee_deals_data["English"]["torihikigyou_id"] = "";
	$placeHoldersvw_freee_deals_data["English"]["torihikigyou_id"] = "";
	$fieldLabelsvw_freee_deals_data["English"]["account_item_id"] = "Account Item Id";
	$fieldToolTipsvw_freee_deals_data["English"]["account_item_id"] = "";
	$placeHoldersvw_freee_deals_data["English"]["account_item_id"] = "";
	$fieldLabelsvw_freee_deals_data["English"]["issue_date"] = "Issue Date";
	$fieldToolTipsvw_freee_deals_data["English"]["issue_date"] = "";
	$placeHoldersvw_freee_deals_data["English"]["issue_date"] = "";
	$fieldLabelsvw_freee_deals_data["English"]["tax_code"] = "Tax Code";
	$fieldToolTipsvw_freee_deals_data["English"]["tax_code"] = "";
	$placeHoldersvw_freee_deals_data["English"]["tax_code"] = "";
	$fieldLabelsvw_freee_deals_data["English"]["partner_id"] = "Partner Id";
	$fieldToolTipsvw_freee_deals_data["English"]["partner_id"] = "";
	$placeHoldersvw_freee_deals_data["English"]["partner_id"] = "";
	$fieldLabelsvw_freee_deals_data["English"]["partner_code"] = "Partner Code";
	$fieldToolTipsvw_freee_deals_data["English"]["partner_code"] = "";
	$placeHoldersvw_freee_deals_data["English"]["partner_code"] = "";
	$fieldLabelsvw_freee_deals_data["English"]["item_id"] = "Item Id";
	$fieldToolTipsvw_freee_deals_data["English"]["item_id"] = "";
	$placeHoldersvw_freee_deals_data["English"]["item_id"] = "";
	$fieldLabelsvw_freee_deals_data["English"]["section_id"] = "Section Id";
	$fieldToolTipsvw_freee_deals_data["English"]["section_id"] = "";
	$placeHoldersvw_freee_deals_data["English"]["section_id"] = "";
	$fieldLabelsvw_freee_deals_data["English"]["ref_number"] = "Ref Number";
	$fieldToolTipsvw_freee_deals_data["English"]["ref_number"] = "";
	$placeHoldersvw_freee_deals_data["English"]["ref_number"] = "";
	$fieldLabelsvw_freee_deals_data["English"]["tag_ids"] = "Tag Ids";
	$fieldToolTipsvw_freee_deals_data["English"]["tag_ids"] = "";
	$placeHoldersvw_freee_deals_data["English"]["tag_ids"] = "";
	$fieldLabelsvw_freee_deals_data["English"]["description"] = "Description";
	$fieldToolTipsvw_freee_deals_data["English"]["description"] = "";
	$placeHoldersvw_freee_deals_data["English"]["description"] = "";
	$fieldLabelsvw_freee_deals_data["English"]["entry_side"] = "Entry Side";
	$fieldToolTipsvw_freee_deals_data["English"]["entry_side"] = "";
	$placeHoldersvw_freee_deals_data["English"]["entry_side"] = "";
	$fieldLabelsvw_freee_deals_data["English"]["amount"] = "Amount";
	$fieldToolTipsvw_freee_deals_data["English"]["amount"] = "";
	$placeHoldersvw_freee_deals_data["English"]["amount"] = "";
	$fieldLabelsvw_freee_deals_data["English"]["vat"] = "Vat";
	$fieldToolTipsvw_freee_deals_data["English"]["vat"] = "";
	$placeHoldersvw_freee_deals_data["English"]["vat"] = "";
	if (count($fieldToolTipsvw_freee_deals_data["English"]))
		$tdatavw_freee_deals_data[".isUseToolTips"] = true;
}


	$tdatavw_freee_deals_data[".NCSearch"] = true;



$tdatavw_freee_deals_data[".shortTableName"] = "vw_freee_deals_data";
$tdatavw_freee_deals_data[".nSecOptions"] = 0;
$tdatavw_freee_deals_data[".recsPerRowPrint"] = 1;
$tdatavw_freee_deals_data[".mainTableOwnerID"] = "";
$tdatavw_freee_deals_data[".moveNext"] = 1;
$tdatavw_freee_deals_data[".entityType"] = 0;

$tdatavw_freee_deals_data[".strOriginalTableName"] = "vw_freee_deals_data";

	



$tdatavw_freee_deals_data[".showAddInPopup"] = false;

$tdatavw_freee_deals_data[".showEditInPopup"] = false;

$tdatavw_freee_deals_data[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_freee_deals_data[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_freee_deals_data[".fieldsForRegister"] = array();

$tdatavw_freee_deals_data[".listAjax"] = false;

	$tdatavw_freee_deals_data[".audit"] = false;

	$tdatavw_freee_deals_data[".locking"] = false;



$tdatavw_freee_deals_data[".list"] = true;



$tdatavw_freee_deals_data[".reorderRecordsByHeader"] = true;





$tdatavw_freee_deals_data[".exportTo"] = true;



$tdatavw_freee_deals_data[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_freee_deals_data[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_freee_deals_data[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_freee_deals_data[".searchSaving"] = false;
//

$tdatavw_freee_deals_data[".showSearchPanel"] = true;
		$tdatavw_freee_deals_data[".flexibleSearch"] = true;

$tdatavw_freee_deals_data[".isUseAjaxSuggest"] = true;

$tdatavw_freee_deals_data[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatavw_freee_deals_data[".ajaxCodeSnippetAdded"] = false;

$tdatavw_freee_deals_data[".buttonsAdded"] = false;

$tdatavw_freee_deals_data[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_freee_deals_data[".isUseTimeForSearch"] = false;





$tdatavw_freee_deals_data[".allSearchFields"] = array();
$tdatavw_freee_deals_data[".filterFields"] = array();
$tdatavw_freee_deals_data[".requiredSearchFields"] = array();

$tdatavw_freee_deals_data[".allSearchFields"][] = "torihiki_id";
	$tdatavw_freee_deals_data[".allSearchFields"][] = "torihikigyou_id";
	$tdatavw_freee_deals_data[".allSearchFields"][] = "account_item_id";
	$tdatavw_freee_deals_data[".allSearchFields"][] = "issue_date";
	$tdatavw_freee_deals_data[".allSearchFields"][] = "tax_code";
	$tdatavw_freee_deals_data[".allSearchFields"][] = "partner_id";
	$tdatavw_freee_deals_data[".allSearchFields"][] = "partner_code";
	$tdatavw_freee_deals_data[".allSearchFields"][] = "item_id";
	$tdatavw_freee_deals_data[".allSearchFields"][] = "section_id";
	$tdatavw_freee_deals_data[".allSearchFields"][] = "ref_number";
	$tdatavw_freee_deals_data[".allSearchFields"][] = "tag_ids";
	$tdatavw_freee_deals_data[".allSearchFields"][] = "description";
	$tdatavw_freee_deals_data[".allSearchFields"][] = "entry_side";
	$tdatavw_freee_deals_data[".allSearchFields"][] = "amount";
	$tdatavw_freee_deals_data[".allSearchFields"][] = "vat";
	

$tdatavw_freee_deals_data[".googleLikeFields"] = array();
$tdatavw_freee_deals_data[".googleLikeFields"][] = "torihiki_id";
$tdatavw_freee_deals_data[".googleLikeFields"][] = "torihikigyou_id";
$tdatavw_freee_deals_data[".googleLikeFields"][] = "account_item_id";
$tdatavw_freee_deals_data[".googleLikeFields"][] = "issue_date";
$tdatavw_freee_deals_data[".googleLikeFields"][] = "tax_code";
$tdatavw_freee_deals_data[".googleLikeFields"][] = "partner_id";
$tdatavw_freee_deals_data[".googleLikeFields"][] = "partner_code";
$tdatavw_freee_deals_data[".googleLikeFields"][] = "item_id";
$tdatavw_freee_deals_data[".googleLikeFields"][] = "section_id";
$tdatavw_freee_deals_data[".googleLikeFields"][] = "ref_number";
$tdatavw_freee_deals_data[".googleLikeFields"][] = "tag_ids";
$tdatavw_freee_deals_data[".googleLikeFields"][] = "description";
$tdatavw_freee_deals_data[".googleLikeFields"][] = "entry_side";
$tdatavw_freee_deals_data[".googleLikeFields"][] = "amount";
$tdatavw_freee_deals_data[".googleLikeFields"][] = "vat";


$tdatavw_freee_deals_data[".advSearchFields"] = array();
$tdatavw_freee_deals_data[".advSearchFields"][] = "torihiki_id";
$tdatavw_freee_deals_data[".advSearchFields"][] = "torihikigyou_id";
$tdatavw_freee_deals_data[".advSearchFields"][] = "account_item_id";
$tdatavw_freee_deals_data[".advSearchFields"][] = "issue_date";
$tdatavw_freee_deals_data[".advSearchFields"][] = "tax_code";
$tdatavw_freee_deals_data[".advSearchFields"][] = "partner_id";
$tdatavw_freee_deals_data[".advSearchFields"][] = "partner_code";
$tdatavw_freee_deals_data[".advSearchFields"][] = "item_id";
$tdatavw_freee_deals_data[".advSearchFields"][] = "section_id";
$tdatavw_freee_deals_data[".advSearchFields"][] = "ref_number";
$tdatavw_freee_deals_data[".advSearchFields"][] = "tag_ids";
$tdatavw_freee_deals_data[".advSearchFields"][] = "description";
$tdatavw_freee_deals_data[".advSearchFields"][] = "entry_side";
$tdatavw_freee_deals_data[".advSearchFields"][] = "amount";
$tdatavw_freee_deals_data[".advSearchFields"][] = "vat";

$tdatavw_freee_deals_data[".tableType"] = "list";

$tdatavw_freee_deals_data[".printerPageOrientation"] = 0;
$tdatavw_freee_deals_data[".nPrinterPageScale"] = 100;

$tdatavw_freee_deals_data[".nPrinterSplitRecords"] = 40;

$tdatavw_freee_deals_data[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_freee_deals_data[".geocodingEnabled"] = false;





$tdatavw_freee_deals_data[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavw_freee_deals_data[".pageSize"] = 20;

$tdatavw_freee_deals_data[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `issue_date` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_freee_deals_data[".strOrderBy"] = $tstrOrderBy;

$tdatavw_freee_deals_data[".orderindexes"] = array();
$tdatavw_freee_deals_data[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "`issue_date`");

$tdatavw_freee_deals_data[".sqlHead"] = "SELECT `torihiki_id`,  `torihikigyou_id`,  `account_item_id`,  `issue_date`,  `tax_code`,  `partner_id`,  `partner_code`,  `item_id`,  `section_id`,  `ref_number`,  `tag_ids`,  `description`,  `entry_side`,  `amount`,  `vat`";
$tdatavw_freee_deals_data[".sqlFrom"] = "FROM `vw_freee_deals_data`";
$tdatavw_freee_deals_data[".sqlWhereExpr"] = "";
$tdatavw_freee_deals_data[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_freee_deals_data[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_freee_deals_data[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_freee_deals_data[".highlightSearchResults"] = true;

$tableKeysvw_freee_deals_data = array();
$tableKeysvw_freee_deals_data[] = "torihikigyou_id";
$tdatavw_freee_deals_data[".Keys"] = $tableKeysvw_freee_deals_data;

$tdatavw_freee_deals_data[".listFields"] = array();
$tdatavw_freee_deals_data[".listFields"][] = "torihiki_id";
$tdatavw_freee_deals_data[".listFields"][] = "torihikigyou_id";
$tdatavw_freee_deals_data[".listFields"][] = "account_item_id";
$tdatavw_freee_deals_data[".listFields"][] = "issue_date";
$tdatavw_freee_deals_data[".listFields"][] = "tax_code";
$tdatavw_freee_deals_data[".listFields"][] = "partner_id";
$tdatavw_freee_deals_data[".listFields"][] = "partner_code";
$tdatavw_freee_deals_data[".listFields"][] = "item_id";
$tdatavw_freee_deals_data[".listFields"][] = "section_id";
$tdatavw_freee_deals_data[".listFields"][] = "ref_number";
$tdatavw_freee_deals_data[".listFields"][] = "tag_ids";
$tdatavw_freee_deals_data[".listFields"][] = "description";
$tdatavw_freee_deals_data[".listFields"][] = "entry_side";
$tdatavw_freee_deals_data[".listFields"][] = "amount";
$tdatavw_freee_deals_data[".listFields"][] = "vat";

$tdatavw_freee_deals_data[".hideMobileList"] = array();


$tdatavw_freee_deals_data[".viewFields"] = array();

$tdatavw_freee_deals_data[".addFields"] = array();

$tdatavw_freee_deals_data[".masterListFields"] = array();
$tdatavw_freee_deals_data[".masterListFields"][] = "torihiki_id";
$tdatavw_freee_deals_data[".masterListFields"][] = "torihikigyou_id";
$tdatavw_freee_deals_data[".masterListFields"][] = "account_item_id";
$tdatavw_freee_deals_data[".masterListFields"][] = "issue_date";
$tdatavw_freee_deals_data[".masterListFields"][] = "tax_code";
$tdatavw_freee_deals_data[".masterListFields"][] = "partner_id";
$tdatavw_freee_deals_data[".masterListFields"][] = "partner_code";
$tdatavw_freee_deals_data[".masterListFields"][] = "item_id";
$tdatavw_freee_deals_data[".masterListFields"][] = "section_id";
$tdatavw_freee_deals_data[".masterListFields"][] = "ref_number";
$tdatavw_freee_deals_data[".masterListFields"][] = "tag_ids";
$tdatavw_freee_deals_data[".masterListFields"][] = "description";
$tdatavw_freee_deals_data[".masterListFields"][] = "entry_side";
$tdatavw_freee_deals_data[".masterListFields"][] = "amount";
$tdatavw_freee_deals_data[".masterListFields"][] = "vat";

$tdatavw_freee_deals_data[".inlineAddFields"] = array();

$tdatavw_freee_deals_data[".editFields"] = array();

$tdatavw_freee_deals_data[".inlineEditFields"] = array();

$tdatavw_freee_deals_data[".updateSelectedFields"] = array();


$tdatavw_freee_deals_data[".exportFields"] = array();
$tdatavw_freee_deals_data[".exportFields"][] = "torihiki_id";
$tdatavw_freee_deals_data[".exportFields"][] = "torihikigyou_id";
$tdatavw_freee_deals_data[".exportFields"][] = "account_item_id";
$tdatavw_freee_deals_data[".exportFields"][] = "issue_date";
$tdatavw_freee_deals_data[".exportFields"][] = "tax_code";
$tdatavw_freee_deals_data[".exportFields"][] = "partner_id";
$tdatavw_freee_deals_data[".exportFields"][] = "partner_code";
$tdatavw_freee_deals_data[".exportFields"][] = "item_id";
$tdatavw_freee_deals_data[".exportFields"][] = "section_id";
$tdatavw_freee_deals_data[".exportFields"][] = "ref_number";
$tdatavw_freee_deals_data[".exportFields"][] = "tag_ids";
$tdatavw_freee_deals_data[".exportFields"][] = "description";
$tdatavw_freee_deals_data[".exportFields"][] = "entry_side";
$tdatavw_freee_deals_data[".exportFields"][] = "amount";
$tdatavw_freee_deals_data[".exportFields"][] = "vat";

$tdatavw_freee_deals_data[".importFields"] = array();

$tdatavw_freee_deals_data[".printFields"] = array();

//	torihiki_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "torihiki_id";
	$fdata["GoodName"] = "torihiki_id";
	$fdata["ownerTable"] = "vw_freee_deals_data";
	$fdata["Label"] = GetFieldLabel("vw_freee_deals_data","torihiki_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "torihiki_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`torihiki_id`";

	
	
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




	$tdatavw_freee_deals_data["torihiki_id"] = $fdata;
//	torihikigyou_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "torihikigyou_id";
	$fdata["GoodName"] = "torihikigyou_id";
	$fdata["ownerTable"] = "vw_freee_deals_data";
	$fdata["Label"] = GetFieldLabel("vw_freee_deals_data","torihikigyou_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "torihikigyou_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`torihikigyou_id`";

	
	
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




	$tdatavw_freee_deals_data["torihikigyou_id"] = $fdata;
//	account_item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "account_item_id";
	$fdata["GoodName"] = "account_item_id";
	$fdata["ownerTable"] = "vw_freee_deals_data";
	$fdata["Label"] = GetFieldLabel("vw_freee_deals_data","account_item_id");
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
	$edata["LinkFieldType"] = 200;
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




	$tdatavw_freee_deals_data["account_item_id"] = $fdata;
//	issue_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "issue_date";
	$fdata["GoodName"] = "issue_date";
	$fdata["ownerTable"] = "vw_freee_deals_data";
	$fdata["Label"] = GetFieldLabel("vw_freee_deals_data","issue_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatavw_freee_deals_data["issue_date"] = $fdata;
//	tax_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "tax_code";
	$fdata["GoodName"] = "tax_code";
	$fdata["ownerTable"] = "vw_freee_deals_data";
	$fdata["Label"] = GetFieldLabel("vw_freee_deals_data","tax_code");
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
	$edata["LinkFieldType"] = 3;
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




	$tdatavw_freee_deals_data["tax_code"] = $fdata;
//	partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "partner_id";
	$fdata["GoodName"] = "partner_id";
	$fdata["ownerTable"] = "vw_freee_deals_data";
	$fdata["Label"] = GetFieldLabel("vw_freee_deals_data","partner_id");
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
	$edata["LinkFieldType"] = 200;
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




	$tdatavw_freee_deals_data["partner_id"] = $fdata;
//	partner_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "partner_code";
	$fdata["GoodName"] = "partner_code";
	$fdata["ownerTable"] = "vw_freee_deals_data";
	$fdata["Label"] = GetFieldLabel("vw_freee_deals_data","partner_code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "partner_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`partner_code`";

	
	
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




	$tdatavw_freee_deals_data["partner_code"] = $fdata;
//	item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "item_id";
	$fdata["GoodName"] = "item_id";
	$fdata["ownerTable"] = "vw_freee_deals_data";
	$fdata["Label"] = GetFieldLabel("vw_freee_deals_data","item_id");
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
	$edata["LinkFieldType"] = 200;
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




	$tdatavw_freee_deals_data["item_id"] = $fdata;
//	section_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "section_id";
	$fdata["GoodName"] = "section_id";
	$fdata["ownerTable"] = "vw_freee_deals_data";
	$fdata["Label"] = GetFieldLabel("vw_freee_deals_data","section_id");
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
	$edata["LinkFieldType"] = 200;
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




	$tdatavw_freee_deals_data["section_id"] = $fdata;
//	ref_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ref_number";
	$fdata["GoodName"] = "ref_number";
	$fdata["ownerTable"] = "vw_freee_deals_data";
	$fdata["Label"] = GetFieldLabel("vw_freee_deals_data","ref_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ref_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ref_number`";

	
	
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




	$tdatavw_freee_deals_data["ref_number"] = $fdata;
//	tag_ids
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tag_ids";
	$fdata["GoodName"] = "tag_ids";
	$fdata["ownerTable"] = "vw_freee_deals_data";
	$fdata["Label"] = GetFieldLabel("vw_freee_deals_data","tag_ids");
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




	$tdatavw_freee_deals_data["tag_ids"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "vw_freee_deals_data";
	$fdata["Label"] = GetFieldLabel("vw_freee_deals_data","description");
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




	$tdatavw_freee_deals_data["description"] = $fdata;
//	entry_side
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "entry_side";
	$fdata["GoodName"] = "entry_side";
	$fdata["ownerTable"] = "vw_freee_deals_data";
	$fdata["Label"] = GetFieldLabel("vw_freee_deals_data","entry_side");
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




	$tdatavw_freee_deals_data["entry_side"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "vw_freee_deals_data";
	$fdata["Label"] = GetFieldLabel("vw_freee_deals_data","amount");
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

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
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




	$tdatavw_freee_deals_data["amount"] = $fdata;
//	vat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "vat";
	$fdata["GoodName"] = "vat";
	$fdata["ownerTable"] = "vw_freee_deals_data";
	$fdata["Label"] = GetFieldLabel("vw_freee_deals_data","vat");
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




	$tdatavw_freee_deals_data["vat"] = $fdata;


$tables_data["vw_freee_deals_data"]=&$tdatavw_freee_deals_data;
$field_labels["vw_freee_deals_data"] = &$fieldLabelsvw_freee_deals_data;
$fieldToolTips["vw_freee_deals_data"] = &$fieldToolTipsvw_freee_deals_data;
$placeHolders["vw_freee_deals_data"] = &$placeHoldersvw_freee_deals_data;
$page_titles["vw_freee_deals_data"] = &$pageTitlesvw_freee_deals_data;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_freee_deals_data"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_freee_deals_data"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_freee_deals_data()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`torihiki_id`,  `torihikigyou_id`,  `account_item_id`,  `issue_date`,  `tax_code`,  `partner_id`,  `partner_code`,  `item_id`,  `section_id`,  `ref_number`,  `tag_ids`,  `description`,  `entry_side`,  `amount`,  `vat`";
$proto0["m_strFrom"] = "FROM `vw_freee_deals_data`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `issue_date` DESC";
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
	"m_strName" => "torihiki_id",
	"m_strTable" => "vw_freee_deals_data",
	"m_srcTableName" => "vw_freee_deals_data"
));

$proto6["m_sql"] = "`torihiki_id`";
$proto6["m_srcTableName"] = "vw_freee_deals_data";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "torihikigyou_id",
	"m_strTable" => "vw_freee_deals_data",
	"m_srcTableName" => "vw_freee_deals_data"
));

$proto8["m_sql"] = "`torihikigyou_id`";
$proto8["m_srcTableName"] = "vw_freee_deals_data";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "account_item_id",
	"m_strTable" => "vw_freee_deals_data",
	"m_srcTableName" => "vw_freee_deals_data"
));

$proto10["m_sql"] = "`account_item_id`";
$proto10["m_srcTableName"] = "vw_freee_deals_data";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "issue_date",
	"m_strTable" => "vw_freee_deals_data",
	"m_srcTableName" => "vw_freee_deals_data"
));

$proto12["m_sql"] = "`issue_date`";
$proto12["m_srcTableName"] = "vw_freee_deals_data";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "tax_code",
	"m_strTable" => "vw_freee_deals_data",
	"m_srcTableName" => "vw_freee_deals_data"
));

$proto14["m_sql"] = "`tax_code`";
$proto14["m_srcTableName"] = "vw_freee_deals_data";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "partner_id",
	"m_strTable" => "vw_freee_deals_data",
	"m_srcTableName" => "vw_freee_deals_data"
));

$proto16["m_sql"] = "`partner_id`";
$proto16["m_srcTableName"] = "vw_freee_deals_data";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "partner_code",
	"m_strTable" => "vw_freee_deals_data",
	"m_srcTableName" => "vw_freee_deals_data"
));

$proto18["m_sql"] = "`partner_code`";
$proto18["m_srcTableName"] = "vw_freee_deals_data";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "item_id",
	"m_strTable" => "vw_freee_deals_data",
	"m_srcTableName" => "vw_freee_deals_data"
));

$proto20["m_sql"] = "`item_id`";
$proto20["m_srcTableName"] = "vw_freee_deals_data";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "section_id",
	"m_strTable" => "vw_freee_deals_data",
	"m_srcTableName" => "vw_freee_deals_data"
));

$proto22["m_sql"] = "`section_id`";
$proto22["m_srcTableName"] = "vw_freee_deals_data";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ref_number",
	"m_strTable" => "vw_freee_deals_data",
	"m_srcTableName" => "vw_freee_deals_data"
));

$proto24["m_sql"] = "`ref_number`";
$proto24["m_srcTableName"] = "vw_freee_deals_data";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "tag_ids",
	"m_strTable" => "vw_freee_deals_data",
	"m_srcTableName" => "vw_freee_deals_data"
));

$proto26["m_sql"] = "`tag_ids`";
$proto26["m_srcTableName"] = "vw_freee_deals_data";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "vw_freee_deals_data",
	"m_srcTableName" => "vw_freee_deals_data"
));

$proto28["m_sql"] = "`description`";
$proto28["m_srcTableName"] = "vw_freee_deals_data";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "entry_side",
	"m_strTable" => "vw_freee_deals_data",
	"m_srcTableName" => "vw_freee_deals_data"
));

$proto30["m_sql"] = "`entry_side`";
$proto30["m_srcTableName"] = "vw_freee_deals_data";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "vw_freee_deals_data",
	"m_srcTableName" => "vw_freee_deals_data"
));

$proto32["m_sql"] = "`amount`";
$proto32["m_srcTableName"] = "vw_freee_deals_data";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "vat",
	"m_strTable" => "vw_freee_deals_data",
	"m_srcTableName" => "vw_freee_deals_data"
));

$proto34["m_sql"] = "`vat`";
$proto34["m_srcTableName"] = "vw_freee_deals_data";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "vw_freee_deals_data";
$proto37["m_srcTableName"] = "vw_freee_deals_data";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "torihiki_id";
$proto37["m_columns"][] = "torihikigyou_id";
$proto37["m_columns"][] = "account_item_id";
$proto37["m_columns"][] = "issue_date";
$proto37["m_columns"][] = "tax_code";
$proto37["m_columns"][] = "partner_id";
$proto37["m_columns"][] = "partner_code";
$proto37["m_columns"][] = "item_id";
$proto37["m_columns"][] = "section_id";
$proto37["m_columns"][] = "ref_number";
$proto37["m_columns"][] = "tag_ids";
$proto37["m_columns"][] = "description";
$proto37["m_columns"][] = "entry_side";
$proto37["m_columns"][] = "amount";
$proto37["m_columns"][] = "vat";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "`vw_freee_deals_data`";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "vw_freee_deals_data";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "issue_date",
	"m_strTable" => "vw_freee_deals_data",
	"m_srcTableName" => "vw_freee_deals_data"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 0;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="vw_freee_deals_data";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_freee_deals_data = createSqlQuery_vw_freee_deals_data();


	
		;

															

$tdatavw_freee_deals_data[".sqlquery"] = $queryData_vw_freee_deals_data;

$tableEvents["vw_freee_deals_data"] = new eventsBase;
$tdatavw_freee_deals_data[".hasEvents"] = false;

?>