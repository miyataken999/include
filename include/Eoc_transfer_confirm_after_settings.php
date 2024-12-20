<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_transfer_confirm_after = array();
	$tdataEoc_transfer_confirm_after[".truncateText"] = true;
	$tdataEoc_transfer_confirm_after[".NumberOfChars"] = 80;
	$tdataEoc_transfer_confirm_after[".ShortName"] = "Eoc_transfer_confirm_after";
	$tdataEoc_transfer_confirm_after[".OwnerID"] = "";
	$tdataEoc_transfer_confirm_after[".OriginalTable"] = "Eoc_takuhai";

//	field labels
$fieldLabelsEoc_transfer_confirm_after = array();
$fieldToolTipsEoc_transfer_confirm_after = array();
$pageTitlesEoc_transfer_confirm_after = array();
$placeHoldersEoc_transfer_confirm_after = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_transfer_confirm_after["Japanese"] = array();
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"] = array();
	$placeHoldersEoc_transfer_confirm_after["Japanese"] = array();
	$pageTitlesEoc_transfer_confirm_after["Japanese"] = array();
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["id"] = "宅配取引Id";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["id"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["id"] = "";
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["status"] = "ステータス";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["status"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["status"] = "";
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["name1"] = "名前";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["name1"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["name1"] = "";
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["name2"] = "フリガナ";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["name2"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["name2"] = "";
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["seiyakukin"] = "成約金";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["seiyakukin"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["seiyakukin"] = "";
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["updated_by"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["updated_by"] = "";
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["satei_sougaku"] = "査定総額";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["satei_sougaku"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["satei_sougaku"] = "";
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["kaibi_sougaku"] = "買い備総額";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["kaibi_sougaku"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["kaibi_sougaku"] = "";
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["satei_by"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["satei_by"] = "";
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["create_by"] = "買い備登録者";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["create_by"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["create_by"] = "";
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["price_error"] = "金額エラー";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["price_error"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["price_error"] = "";
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["purchase_type"] = "買取種別";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["purchase_type"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["purchase_type"] = "";
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["awazu_kensuu"] = "合わず件数";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["awazu_kensuu"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["awazu_kensuu"] = "";
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["kinyuukikan"] = "Kinyuukikan";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["kinyuukikan"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["kinyuukikan"] = "";
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["bank_details_code"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["bank_details_code"] = "";
	$fieldLabelsEoc_transfer_confirm_after["Japanese"]["name"] = "Name";
	$fieldToolTipsEoc_transfer_confirm_after["Japanese"]["name"] = "";
	$placeHoldersEoc_transfer_confirm_after["Japanese"]["name"] = "";
	if (count($fieldToolTipsEoc_transfer_confirm_after["Japanese"]))
		$tdataEoc_transfer_confirm_after[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_transfer_confirm_after[""] = array();
	$fieldToolTipsEoc_transfer_confirm_after[""] = array();
	$placeHoldersEoc_transfer_confirm_after[""] = array();
	$pageTitlesEoc_transfer_confirm_after[""] = array();
	$fieldLabelsEoc_transfer_confirm_after[""]["id"] = "Id";
	$fieldToolTipsEoc_transfer_confirm_after[""]["id"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["id"] = "";
	$fieldLabelsEoc_transfer_confirm_after[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_transfer_confirm_after[""]["ecc_id"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["ecc_id"] = "";
	$fieldLabelsEoc_transfer_confirm_after[""]["status"] = "Status";
	$fieldToolTipsEoc_transfer_confirm_after[""]["status"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["status"] = "";
	$fieldLabelsEoc_transfer_confirm_after[""]["name1"] = "Name1";
	$fieldToolTipsEoc_transfer_confirm_after[""]["name1"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["name1"] = "";
	$fieldLabelsEoc_transfer_confirm_after[""]["name2"] = "Name2";
	$fieldToolTipsEoc_transfer_confirm_after[""]["name2"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["name2"] = "";
	$fieldLabelsEoc_transfer_confirm_after[""]["seiyakukin"] = "Seiyakukin";
	$fieldToolTipsEoc_transfer_confirm_after[""]["seiyakukin"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["seiyakukin"] = "";
	$fieldLabelsEoc_transfer_confirm_after[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_transfer_confirm_after[""]["updated_at"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["updated_at"] = "";
	$fieldLabelsEoc_transfer_confirm_after[""]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_transfer_confirm_after[""]["updated_by"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["updated_by"] = "";
	$fieldLabelsEoc_transfer_confirm_after[""]["satei_sougaku"] = "Satei Sougaku";
	$fieldToolTipsEoc_transfer_confirm_after[""]["satei_sougaku"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["satei_sougaku"] = "";
	$fieldLabelsEoc_transfer_confirm_after[""]["kaibi_sougaku"] = "Kaibi Sougaku";
	$fieldToolTipsEoc_transfer_confirm_after[""]["kaibi_sougaku"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["kaibi_sougaku"] = "";
	$fieldLabelsEoc_transfer_confirm_after[""]["satei_by"] = "Satei By";
	$fieldToolTipsEoc_transfer_confirm_after[""]["satei_by"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["satei_by"] = "";
	$fieldLabelsEoc_transfer_confirm_after[""]["create_by"] = "Create By";
	$fieldToolTipsEoc_transfer_confirm_after[""]["create_by"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["create_by"] = "";
	$fieldLabelsEoc_transfer_confirm_after[""]["price_error"] = "Price Error";
	$fieldToolTipsEoc_transfer_confirm_after[""]["price_error"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["price_error"] = "";
	$fieldLabelsEoc_transfer_confirm_after[""]["purchase_type"] = "Purchase Type";
	$fieldToolTipsEoc_transfer_confirm_after[""]["purchase_type"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["purchase_type"] = "";
	$fieldLabelsEoc_transfer_confirm_after[""]["awazu_kensuu"] = "Awazu Kensuu";
	$fieldToolTipsEoc_transfer_confirm_after[""]["awazu_kensuu"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["awazu_kensuu"] = "";
	$fieldLabelsEoc_transfer_confirm_after[""]["kinyuukikan"] = "Kinyuukikan";
	$fieldToolTipsEoc_transfer_confirm_after[""]["kinyuukikan"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["kinyuukikan"] = "";
	$fieldLabelsEoc_transfer_confirm_after[""]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsEoc_transfer_confirm_after[""]["bank_details_code"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["bank_details_code"] = "";
	$fieldLabelsEoc_transfer_confirm_after[""]["name"] = "Name";
	$fieldToolTipsEoc_transfer_confirm_after[""]["name"] = "";
	$placeHoldersEoc_transfer_confirm_after[""]["name"] = "";
	if (count($fieldToolTipsEoc_transfer_confirm_after[""]))
		$tdataEoc_transfer_confirm_after[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_transfer_confirm_after["English"] = array();
	$fieldToolTipsEoc_transfer_confirm_after["English"] = array();
	$placeHoldersEoc_transfer_confirm_after["English"] = array();
	$pageTitlesEoc_transfer_confirm_after["English"] = array();
	$fieldLabelsEoc_transfer_confirm_after["English"]["id"] = "Id";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["id"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["id"] = "";
	$fieldLabelsEoc_transfer_confirm_after["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["ecc_id"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["ecc_id"] = "";
	$fieldLabelsEoc_transfer_confirm_after["English"]["status"] = "Status";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["status"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["status"] = "";
	$fieldLabelsEoc_transfer_confirm_after["English"]["name1"] = "Name1";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["name1"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["name1"] = "";
	$fieldLabelsEoc_transfer_confirm_after["English"]["name2"] = "Name2";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["name2"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["name2"] = "";
	$fieldLabelsEoc_transfer_confirm_after["English"]["seiyakukin"] = "Seiyakukin";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["seiyakukin"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["seiyakukin"] = "";
	$fieldLabelsEoc_transfer_confirm_after["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["updated_at"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["updated_at"] = "";
	$fieldLabelsEoc_transfer_confirm_after["English"]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["updated_by"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["updated_by"] = "";
	$fieldLabelsEoc_transfer_confirm_after["English"]["satei_sougaku"] = "Satei Sougaku";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["satei_sougaku"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["satei_sougaku"] = "";
	$fieldLabelsEoc_transfer_confirm_after["English"]["kaibi_sougaku"] = "Kaibi Sougaku";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["kaibi_sougaku"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["kaibi_sougaku"] = "";
	$fieldLabelsEoc_transfer_confirm_after["English"]["satei_by"] = "Satei By";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["satei_by"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["satei_by"] = "";
	$fieldLabelsEoc_transfer_confirm_after["English"]["create_by"] = "Create By";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["create_by"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["create_by"] = "";
	$fieldLabelsEoc_transfer_confirm_after["English"]["price_error"] = "Price Error";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["price_error"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["price_error"] = "";
	$fieldLabelsEoc_transfer_confirm_after["English"]["purchase_type"] = "Purchase Type";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["purchase_type"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["purchase_type"] = "";
	$fieldLabelsEoc_transfer_confirm_after["English"]["awazu_kensuu"] = "Awazu Kensuu";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["awazu_kensuu"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["awazu_kensuu"] = "";
	$fieldLabelsEoc_transfer_confirm_after["English"]["kinyuukikan"] = "Kinyuukikan";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["kinyuukikan"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["kinyuukikan"] = "";
	$fieldLabelsEoc_transfer_confirm_after["English"]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["bank_details_code"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["bank_details_code"] = "";
	$fieldLabelsEoc_transfer_confirm_after["English"]["name"] = "Name";
	$fieldToolTipsEoc_transfer_confirm_after["English"]["name"] = "";
	$placeHoldersEoc_transfer_confirm_after["English"]["name"] = "";
	if (count($fieldToolTipsEoc_transfer_confirm_after["English"]))
		$tdataEoc_transfer_confirm_after[".isUseToolTips"] = true;
}


	$tdataEoc_transfer_confirm_after[".NCSearch"] = true;



$tdataEoc_transfer_confirm_after[".shortTableName"] = "Eoc_transfer_confirm_after";
$tdataEoc_transfer_confirm_after[".nSecOptions"] = 0;
$tdataEoc_transfer_confirm_after[".recsPerRowPrint"] = 1;
$tdataEoc_transfer_confirm_after[".mainTableOwnerID"] = "";
$tdataEoc_transfer_confirm_after[".moveNext"] = 1;
$tdataEoc_transfer_confirm_after[".entityType"] = 1;

$tdataEoc_transfer_confirm_after[".strOriginalTableName"] = "Eoc_takuhai";

	



$tdataEoc_transfer_confirm_after[".showAddInPopup"] = false;

$tdataEoc_transfer_confirm_after[".showEditInPopup"] = false;

$tdataEoc_transfer_confirm_after[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_transfer_confirm_after[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_transfer_confirm_after[".fieldsForRegister"] = array();

$tdataEoc_transfer_confirm_after[".listAjax"] = false;

	$tdataEoc_transfer_confirm_after[".audit"] = true;

	$tdataEoc_transfer_confirm_after[".locking"] = false;



$tdataEoc_transfer_confirm_after[".list"] = true;

$tdataEoc_transfer_confirm_after[".inlineEdit"] = true;


$tdataEoc_transfer_confirm_after[".reorderRecordsByHeader"] = true;








$tdataEoc_transfer_confirm_after[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_transfer_confirm_after[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_transfer_confirm_after[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_transfer_confirm_after[".searchSaving"] = false;
//

$tdataEoc_transfer_confirm_after[".showSearchPanel"] = true;
		$tdataEoc_transfer_confirm_after[".flexibleSearch"] = true;

$tdataEoc_transfer_confirm_after[".isUseAjaxSuggest"] = true;

$tdataEoc_transfer_confirm_after[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataEoc_transfer_confirm_after[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_transfer_confirm_after[".buttonsAdded"] = false;

$tdataEoc_transfer_confirm_after[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_transfer_confirm_after[".isUseTimeForSearch"] = false;



$tdataEoc_transfer_confirm_after[".badgeColor"] = "D2691E";

$tdataEoc_transfer_confirm_after[".detailsLinksOnList"] = "1";

$tdataEoc_transfer_confirm_after[".allSearchFields"] = array();
$tdataEoc_transfer_confirm_after[".filterFields"] = array();
$tdataEoc_transfer_confirm_after[".requiredSearchFields"] = array();

$tdataEoc_transfer_confirm_after[".allSearchFields"][] = "kinyuukikan";
	$tdataEoc_transfer_confirm_after[".allSearchFields"][] = "price_error";
	$tdataEoc_transfer_confirm_after[".allSearchFields"][] = "awazu_kensuu";
	$tdataEoc_transfer_confirm_after[".allSearchFields"][] = "id";
	$tdataEoc_transfer_confirm_after[".allSearchFields"][] = "status";
	$tdataEoc_transfer_confirm_after[".allSearchFields"][] = "ecc_id";
	$tdataEoc_transfer_confirm_after[".allSearchFields"][] = "name1";
	$tdataEoc_transfer_confirm_after[".allSearchFields"][] = "name2";
	$tdataEoc_transfer_confirm_after[".allSearchFields"][] = "purchase_type";
	$tdataEoc_transfer_confirm_after[".allSearchFields"][] = "seiyakukin";
	$tdataEoc_transfer_confirm_after[".allSearchFields"][] = "satei_sougaku";
	$tdataEoc_transfer_confirm_after[".allSearchFields"][] = "kaibi_sougaku";
	$tdataEoc_transfer_confirm_after[".allSearchFields"][] = "satei_by";
	$tdataEoc_transfer_confirm_after[".allSearchFields"][] = "create_by";
	$tdataEoc_transfer_confirm_after[".allSearchFields"][] = "updated_at";
	$tdataEoc_transfer_confirm_after[".allSearchFields"][] = "updated_by";
	

$tdataEoc_transfer_confirm_after[".googleLikeFields"] = array();
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "id";
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "status";
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "ecc_id";
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "name1";
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "name2";
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "seiyakukin";
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "satei_sougaku";
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "kaibi_sougaku";
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "satei_by";
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "create_by";
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "updated_at";
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "updated_by";
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "price_error";
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "purchase_type";
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "awazu_kensuu";
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "kinyuukikan";
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "bank_details_code";
$tdataEoc_transfer_confirm_after[".googleLikeFields"][] = "name";


$tdataEoc_transfer_confirm_after[".advSearchFields"] = array();
$tdataEoc_transfer_confirm_after[".advSearchFields"][] = "kinyuukikan";
$tdataEoc_transfer_confirm_after[".advSearchFields"][] = "price_error";
$tdataEoc_transfer_confirm_after[".advSearchFields"][] = "awazu_kensuu";
$tdataEoc_transfer_confirm_after[".advSearchFields"][] = "id";
$tdataEoc_transfer_confirm_after[".advSearchFields"][] = "status";
$tdataEoc_transfer_confirm_after[".advSearchFields"][] = "ecc_id";
$tdataEoc_transfer_confirm_after[".advSearchFields"][] = "name1";
$tdataEoc_transfer_confirm_after[".advSearchFields"][] = "name2";
$tdataEoc_transfer_confirm_after[".advSearchFields"][] = "purchase_type";
$tdataEoc_transfer_confirm_after[".advSearchFields"][] = "seiyakukin";
$tdataEoc_transfer_confirm_after[".advSearchFields"][] = "satei_sougaku";
$tdataEoc_transfer_confirm_after[".advSearchFields"][] = "kaibi_sougaku";
$tdataEoc_transfer_confirm_after[".advSearchFields"][] = "satei_by";
$tdataEoc_transfer_confirm_after[".advSearchFields"][] = "create_by";
$tdataEoc_transfer_confirm_after[".advSearchFields"][] = "updated_at";
$tdataEoc_transfer_confirm_after[".advSearchFields"][] = "updated_by";

$tdataEoc_transfer_confirm_after[".tableType"] = "list";

$tdataEoc_transfer_confirm_after[".printerPageOrientation"] = 0;
$tdataEoc_transfer_confirm_after[".nPrinterPageScale"] = 100;

$tdataEoc_transfer_confirm_after[".nPrinterSplitRecords"] = 40;

$tdataEoc_transfer_confirm_after[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_transfer_confirm_after[".geocodingEnabled"] = false;





$tdataEoc_transfer_confirm_after[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_transfer_confirm_after[".pageSize"] = 100;

$tdataEoc_transfer_confirm_after[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Eoc_takuhai`.`id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_transfer_confirm_after[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_transfer_confirm_after[".orderindexes"] = array();
$tdataEoc_transfer_confirm_after[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`Eoc_takuhai`.`id`");

$tdataEoc_transfer_confirm_after[".sqlHead"] = "SELECT `Eoc_takuhai`.`id`,  `Eoc_takuhai`.`status`,  `Eoc`.`ecc_id`,  `Eoc`.`name1`,  `Eoc`.`name2`,  `Eoc_takuhai`.`seiyakukin`,  `vw_Eoc_takuhai_group_shouhin`.`satei_sougaku`,  `vw_Eoc_takuhai_group_Eoc_chigins`.`kaibi_sougaku`,  `vw_Eoc_takuhai_group_shouhin`.`satei_by`,  `vw_Eoc_takuhai_group_Eoc_chigins`.`create_by`,  `Eoc_takuhai`.`updated_at`,  `Eoc_takuhai`.`updated_by`,  `Eoc_takuhai`.`price_error`,  `Eoc_takuhai`.`purchase_type`,  `vw_Eoc_takuhai_group_shouhin_awazu`.`awazu_kensuu`,  (  case   when `Eoc`.`bank_details_code` = '' then `Eoc`.`bank_name`  else CONCAT('●金融機関名:', `mst_bank`.`name`, '\\n●金融機関コード:', `Eoc`.`bank_details_code`, '\\n●預金種別:', `Eoc`.`bank_details_deposit_type`, '\\n●支店名:', `Eoc`.`bank_details_blunch_name`, '\\n●支店コード:', `Eoc`.`bank_details_blunch_code`, '\\n●口座番号:', `Eoc`.`bank_details_account_number`, '\\n●記号:', `Eoc`.`bank_details_symbol`, '\\n●番号:', `Eoc`.`bank_details_number`, '\\n●名義人:', `Eoc`.`bank_details_account_name`)  end  ) AS `kinyuukikan`,  `Eoc`.`bank_details_code`,  `mst_bank`.`name`";
$tdataEoc_transfer_confirm_after[".sqlFrom"] = "FROM `Eoc_takuhai`  LEFT OUTER JOIN `Eoc` ON `Eoc_takuhai`.`ecc_id` = `Eoc`.`ecc_id`  LEFT OUTER JOIN `vw_Eoc_takuhai_group_shouhin` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_shouhin`.`Eoc_takuhai_id`  LEFT OUTER JOIN `vw_Eoc_takuhai_group_Eoc_chigins` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_Eoc_chigins`.`Eoc_takuhai_id`  LEFT OUTER JOIN `vw_Eoc_takuhai_group_shouhin_awazu` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_shouhin_awazu`.`Eoc_takuhai_id`  LEFT OUTER JOIN `mst_bank` ON `Eoc`.`bank_details_code` = `mst_bank`.`bank_code` AND `mst_bank`.category=1";
$tdataEoc_transfer_confirm_after[".sqlWhereExpr"] = "(`Eoc_takuhai`.`status` =6 OR `Eoc_takuhai`.`status` =7 OR `Eoc_takuhai`.`status` =8)";
$tdataEoc_transfer_confirm_after[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_transfer_confirm_after[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_transfer_confirm_after[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_transfer_confirm_after[".highlightSearchResults"] = true;

$tableKeysEoc_transfer_confirm_after = array();
$tableKeysEoc_transfer_confirm_after[] = "id";
$tdataEoc_transfer_confirm_after[".Keys"] = $tableKeysEoc_transfer_confirm_after;

$tdataEoc_transfer_confirm_after[".listFields"] = array();
$tdataEoc_transfer_confirm_after[".listFields"][] = "kinyuukikan";
$tdataEoc_transfer_confirm_after[".listFields"][] = "price_error";
$tdataEoc_transfer_confirm_after[".listFields"][] = "awazu_kensuu";
$tdataEoc_transfer_confirm_after[".listFields"][] = "id";
$tdataEoc_transfer_confirm_after[".listFields"][] = "status";
$tdataEoc_transfer_confirm_after[".listFields"][] = "ecc_id";
$tdataEoc_transfer_confirm_after[".listFields"][] = "name1";
$tdataEoc_transfer_confirm_after[".listFields"][] = "name2";
$tdataEoc_transfer_confirm_after[".listFields"][] = "purchase_type";
$tdataEoc_transfer_confirm_after[".listFields"][] = "seiyakukin";
$tdataEoc_transfer_confirm_after[".listFields"][] = "satei_sougaku";
$tdataEoc_transfer_confirm_after[".listFields"][] = "kaibi_sougaku";
$tdataEoc_transfer_confirm_after[".listFields"][] = "satei_by";
$tdataEoc_transfer_confirm_after[".listFields"][] = "create_by";
$tdataEoc_transfer_confirm_after[".listFields"][] = "updated_at";
$tdataEoc_transfer_confirm_after[".listFields"][] = "updated_by";

$tdataEoc_transfer_confirm_after[".hideMobileList"] = array();


$tdataEoc_transfer_confirm_after[".viewFields"] = array();

$tdataEoc_transfer_confirm_after[".addFields"] = array();

$tdataEoc_transfer_confirm_after[".masterListFields"] = array();
$tdataEoc_transfer_confirm_after[".masterListFields"][] = "kinyuukikan";
$tdataEoc_transfer_confirm_after[".masterListFields"][] = "price_error";
$tdataEoc_transfer_confirm_after[".masterListFields"][] = "awazu_kensuu";
$tdataEoc_transfer_confirm_after[".masterListFields"][] = "id";
$tdataEoc_transfer_confirm_after[".masterListFields"][] = "status";
$tdataEoc_transfer_confirm_after[".masterListFields"][] = "ecc_id";
$tdataEoc_transfer_confirm_after[".masterListFields"][] = "name1";
$tdataEoc_transfer_confirm_after[".masterListFields"][] = "name2";
$tdataEoc_transfer_confirm_after[".masterListFields"][] = "purchase_type";
$tdataEoc_transfer_confirm_after[".masterListFields"][] = "seiyakukin";
$tdataEoc_transfer_confirm_after[".masterListFields"][] = "satei_sougaku";
$tdataEoc_transfer_confirm_after[".masterListFields"][] = "kaibi_sougaku";
$tdataEoc_transfer_confirm_after[".masterListFields"][] = "satei_by";
$tdataEoc_transfer_confirm_after[".masterListFields"][] = "create_by";
$tdataEoc_transfer_confirm_after[".masterListFields"][] = "updated_at";
$tdataEoc_transfer_confirm_after[".masterListFields"][] = "updated_by";

$tdataEoc_transfer_confirm_after[".inlineAddFields"] = array();

$tdataEoc_transfer_confirm_after[".editFields"] = array();

$tdataEoc_transfer_confirm_after[".inlineEditFields"] = array();
$tdataEoc_transfer_confirm_after[".inlineEditFields"][] = "price_error";
$tdataEoc_transfer_confirm_after[".inlineEditFields"][] = "status";
$tdataEoc_transfer_confirm_after[".inlineEditFields"][] = "purchase_type";
$tdataEoc_transfer_confirm_after[".inlineEditFields"][] = "seiyakukin";

$tdataEoc_transfer_confirm_after[".updateSelectedFields"] = array();


$tdataEoc_transfer_confirm_after[".exportFields"] = array();

$tdataEoc_transfer_confirm_after[".importFields"] = array();

$tdataEoc_transfer_confirm_after[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`id`";

	
	
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




	$tdataEoc_transfer_confirm_after["id"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`status`";

	
	
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
	$edata["LookupTable"] = "mst_Eoc_takuhai_status";
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




	$tdataEoc_transfer_confirm_after["status"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","ecc_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`ecc_id`";

	
	
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




	$tdataEoc_transfer_confirm_after["ecc_id"] = $fdata;
//	name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name1";
	$fdata["GoodName"] = "name1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","name1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "name1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`name1`";

	
	
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




	$tdataEoc_transfer_confirm_after["name1"] = $fdata;
//	name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "name2";
	$fdata["GoodName"] = "name2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","name2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "name2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`name2`";

	
	
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




	$tdataEoc_transfer_confirm_after["name2"] = $fdata;
//	seiyakukin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "seiyakukin";
	$fdata["GoodName"] = "seiyakukin";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","seiyakukin");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "seiyakukin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`seiyakukin`";

	
	
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




	$tdataEoc_transfer_confirm_after["seiyakukin"] = $fdata;
//	satei_sougaku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "satei_sougaku";
	$fdata["GoodName"] = "satei_sougaku";
	$fdata["ownerTable"] = "vw_Eoc_takuhai_group_shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","satei_sougaku");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "satei_sougaku";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_Eoc_takuhai_group_shouhin`.`satei_sougaku`";

	
	
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




	$tdataEoc_transfer_confirm_after["satei_sougaku"] = $fdata;
//	kaibi_sougaku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "kaibi_sougaku";
	$fdata["GoodName"] = "kaibi_sougaku";
	$fdata["ownerTable"] = "vw_Eoc_takuhai_group_Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","kaibi_sougaku");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "kaibi_sougaku";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_Eoc_takuhai_group_Eoc_chigins`.`kaibi_sougaku`";

	
	
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




	$tdataEoc_transfer_confirm_after["kaibi_sougaku"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "vw_Eoc_takuhai_group_shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","satei_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "satei_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_Eoc_takuhai_group_shouhin`.`satei_by`";

	
	
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




	$tdataEoc_transfer_confirm_after["satei_by"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "vw_Eoc_takuhai_group_Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_Eoc_takuhai_group_Eoc_chigins`.`create_by`";

	
	
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




	$tdataEoc_transfer_confirm_after["create_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`updated_at`";

	
	
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




	$tdataEoc_transfer_confirm_after["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`updated_by`";

	
	
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
	$edata["LookupTable"] = "users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "first_name";

	
	$edata["LookupOrderBy"] = "income_id";

	
	
	
	

	
	
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




	$tdataEoc_transfer_confirm_after["updated_by"] = $fdata;
//	price_error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "price_error";
	$fdata["GoodName"] = "price_error";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","price_error");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "price_error";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`price_error`";

	
	
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




	$tdataEoc_transfer_confirm_after["price_error"] = $fdata;
//	purchase_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "purchase_type";
	$fdata["GoodName"] = "purchase_type";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","purchase_type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "purchase_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`purchase_type`";

	
	
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




	$tdataEoc_transfer_confirm_after["purchase_type"] = $fdata;
//	awazu_kensuu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "awazu_kensuu";
	$fdata["GoodName"] = "awazu_kensuu";
	$fdata["ownerTable"] = "vw_Eoc_takuhai_group_shouhin_awazu";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","awazu_kensuu");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "awazu_kensuu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_Eoc_takuhai_group_shouhin_awazu`.`awazu_kensuu`";

	
	
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




	$tdataEoc_transfer_confirm_after["awazu_kensuu"] = $fdata;
//	kinyuukikan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "kinyuukikan";
	$fdata["GoodName"] = "kinyuukikan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","kinyuukikan");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "kinyuukikan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(  case   when `Eoc`.`bank_details_code` = '' then `Eoc`.`bank_name`  else CONCAT('●金融機関名:', `mst_bank`.`name`, '\\n●金融機関コード:', `Eoc`.`bank_details_code`, '\\n●預金種別:', `Eoc`.`bank_details_deposit_type`, '\\n●支店名:', `Eoc`.`bank_details_blunch_name`, '\\n●支店コード:', `Eoc`.`bank_details_blunch_code`, '\\n●口座番号:', `Eoc`.`bank_details_account_number`, '\\n●記号:', `Eoc`.`bank_details_symbol`, '\\n●番号:', `Eoc`.`bank_details_number`, '\\n●名義人:', `Eoc`.`bank_details_account_name`)  end  )";

	
	
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




	$tdataEoc_transfer_confirm_after["kinyuukikan"] = $fdata;
//	bank_details_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "bank_details_code";
	$fdata["GoodName"] = "bank_details_code";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","bank_details_code");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "bank_details_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`bank_details_code`";

	
	
			
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








	$tdataEoc_transfer_confirm_after["bank_details_code"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_bank";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm_after","name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_bank`.`name`";

	
	
			
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








	$tdataEoc_transfer_confirm_after["name"] = $fdata;


$tables_data["Eoc_transfer_confirm_after"]=&$tdataEoc_transfer_confirm_after;
$field_labels["Eoc_transfer_confirm_after"] = &$fieldLabelsEoc_transfer_confirm_after;
$fieldToolTips["Eoc_transfer_confirm_after"] = &$fieldToolTipsEoc_transfer_confirm_after;
$placeHolders["Eoc_transfer_confirm_after"] = &$placeHoldersEoc_transfer_confirm_after;
$page_titles["Eoc_transfer_confirm_after"] = &$pageTitlesEoc_transfer_confirm_after;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_transfer_confirm_after"] = array();
//	shouhin
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="shouhin";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "shouhin";
	$detailsParam["dCaptionTable"] = GetTableCaption("shouhin");
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
		
	$detailsTablesData["Eoc_transfer_confirm_after"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_transfer_confirm_after"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_transfer_confirm_after"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_transfer_confirm_after"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_transfer_confirm_after"][$dIndex]["detailKeys"][]="Eoc_takuhai_id";
//	Eoc_chigins
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_chigins";
		$detailsParam["dOriginalTable"] = "Eoc_chigins";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_chigins";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_chigins");
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
		
	$detailsTablesData["Eoc_transfer_confirm_after"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_transfer_confirm_after"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_transfer_confirm_after"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_transfer_confirm_after"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_transfer_confirm_after"][$dIndex]["detailKeys"][]="Eoc_takuhai_id";
//	Eoc_guestquestion_for_catch
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_guestquestion_for_catch";
		$detailsParam["dOriginalTable"] = "Eoc_guestquestion";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_guestquestion_for_catch";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_guestquestion_for_catch");
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
		
	$detailsTablesData["Eoc_transfer_confirm_after"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_transfer_confirm_after"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_transfer_confirm_after"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc_transfer_confirm_after"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_transfer_confirm_after"][$dIndex]["detailKeys"][]="ecc_id";

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_transfer_confirm_after"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_transfer_confirm_after()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Eoc_takuhai`.`id`,  `Eoc_takuhai`.`status`,  `Eoc`.`ecc_id`,  `Eoc`.`name1`,  `Eoc`.`name2`,  `Eoc_takuhai`.`seiyakukin`,  `vw_Eoc_takuhai_group_shouhin`.`satei_sougaku`,  `vw_Eoc_takuhai_group_Eoc_chigins`.`kaibi_sougaku`,  `vw_Eoc_takuhai_group_shouhin`.`satei_by`,  `vw_Eoc_takuhai_group_Eoc_chigins`.`create_by`,  `Eoc_takuhai`.`updated_at`,  `Eoc_takuhai`.`updated_by`,  `Eoc_takuhai`.`price_error`,  `Eoc_takuhai`.`purchase_type`,  `vw_Eoc_takuhai_group_shouhin_awazu`.`awazu_kensuu`,  (  case   when `Eoc`.`bank_details_code` = '' then `Eoc`.`bank_name`  else CONCAT('●金融機関名:', `mst_bank`.`name`, '\\n●金融機関コード:', `Eoc`.`bank_details_code`, '\\n●預金種別:', `Eoc`.`bank_details_deposit_type`, '\\n●支店名:', `Eoc`.`bank_details_blunch_name`, '\\n●支店コード:', `Eoc`.`bank_details_blunch_code`, '\\n●口座番号:', `Eoc`.`bank_details_account_number`, '\\n●記号:', `Eoc`.`bank_details_symbol`, '\\n●番号:', `Eoc`.`bank_details_number`, '\\n●名義人:', `Eoc`.`bank_details_account_name`)  end  ) AS `kinyuukikan`,  `Eoc`.`bank_details_code`,  `mst_bank`.`name`";
$proto0["m_strFrom"] = "FROM `Eoc_takuhai`  LEFT OUTER JOIN `Eoc` ON `Eoc_takuhai`.`ecc_id` = `Eoc`.`ecc_id`  LEFT OUTER JOIN `vw_Eoc_takuhai_group_shouhin` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_shouhin`.`Eoc_takuhai_id`  LEFT OUTER JOIN `vw_Eoc_takuhai_group_Eoc_chigins` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_Eoc_chigins`.`Eoc_takuhai_id`  LEFT OUTER JOIN `vw_Eoc_takuhai_group_shouhin_awazu` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_shouhin_awazu`.`Eoc_takuhai_id`  LEFT OUTER JOIN `mst_bank` ON `Eoc`.`bank_details_code` = `mst_bank`.`bank_code` AND `mst_bank`.category=1";
$proto0["m_strWhere"] = "(`Eoc_takuhai`.`status` =6 OR `Eoc_takuhai`.`status` =7 OR `Eoc_takuhai`.`status` =8)";
$proto0["m_strOrderBy"] = "ORDER BY `Eoc_takuhai`.`id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`Eoc_takuhai`.`status` =6 OR `Eoc_takuhai`.`status` =7 OR `Eoc_takuhai`.`status` =8";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`Eoc_takuhai`.`status` =6 OR `Eoc_takuhai`.`status` =7 OR `Eoc_takuhai`.`status` =8"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`Eoc_takuhai`.`status` =6";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=6";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "`Eoc_takuhai`.`status` =7";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=7";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "`Eoc_takuhai`.`status` =8";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "=8";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto12["m_sql"] = "`Eoc_takuhai`.`id`";
$proto12["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto14["m_sql"] = "`Eoc_takuhai`.`status`";
$proto14["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto16["m_sql"] = "`Eoc`.`ecc_id`";
$proto16["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "name1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto18["m_sql"] = "`Eoc`.`name1`";
$proto18["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto20["m_sql"] = "`Eoc`.`name2`";
$proto20["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "seiyakukin",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto22["m_sql"] = "`Eoc_takuhai`.`seiyakukin`";
$proto22["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_sougaku",
	"m_strTable" => "vw_Eoc_takuhai_group_shouhin",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto24["m_sql"] = "`vw_Eoc_takuhai_group_shouhin`.`satei_sougaku`";
$proto24["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "kaibi_sougaku",
	"m_strTable" => "vw_Eoc_takuhai_group_Eoc_chigins",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto26["m_sql"] = "`vw_Eoc_takuhai_group_Eoc_chigins`.`kaibi_sougaku`";
$proto26["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "vw_Eoc_takuhai_group_shouhin",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto28["m_sql"] = "`vw_Eoc_takuhai_group_shouhin`.`satei_by`";
$proto28["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "vw_Eoc_takuhai_group_Eoc_chigins",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto30["m_sql"] = "`vw_Eoc_takuhai_group_Eoc_chigins`.`create_by`";
$proto30["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto32["m_sql"] = "`Eoc_takuhai`.`updated_at`";
$proto32["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto34["m_sql"] = "`Eoc_takuhai`.`updated_by`";
$proto34["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "price_error",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto36["m_sql"] = "`Eoc_takuhai`.`price_error`";
$proto36["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "purchase_type",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto38["m_sql"] = "`Eoc_takuhai`.`purchase_type`";
$proto38["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "awazu_kensuu",
	"m_strTable" => "vw_Eoc_takuhai_group_shouhin_awazu",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto40["m_sql"] = "`vw_Eoc_takuhai_group_shouhin_awazu`.`awazu_kensuu`";
$proto40["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(  case   when `Eoc`.`bank_details_code` = '' then `Eoc`.`bank_name`  else CONCAT('●金融機関名:', `mst_bank`.`name`, '\\n●金融機関コード:', `Eoc`.`bank_details_code`, '\\n●預金種別:', `Eoc`.`bank_details_deposit_type`, '\\n●支店名:', `Eoc`.`bank_details_blunch_name`, '\\n●支店コード:', `Eoc`.`bank_details_blunch_code`, '\\n●口座番号:', `Eoc`.`bank_details_account_number`, '\\n●記号:', `Eoc`.`bank_details_symbol`, '\\n●番号:', `Eoc`.`bank_details_number`, '\\n●名義人:', `Eoc`.`bank_details_account_name`)  end  )"
));

$proto42["m_sql"] = "(  case   when `Eoc`.`bank_details_code` = '' then `Eoc`.`bank_name`  else CONCAT('●金融機関名:', `mst_bank`.`name`, '\\n●金融機関コード:', `Eoc`.`bank_details_code`, '\\n●預金種別:', `Eoc`.`bank_details_deposit_type`, '\\n●支店名:', `Eoc`.`bank_details_blunch_name`, '\\n●支店コード:', `Eoc`.`bank_details_blunch_code`, '\\n●口座番号:', `Eoc`.`bank_details_account_number`, '\\n●記号:', `Eoc`.`bank_details_symbol`, '\\n●番号:', `Eoc`.`bank_details_number`, '\\n●名義人:', `Eoc`.`bank_details_account_name`)  end  )";
$proto42["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "kinyuukikan";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_code",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto44["m_sql"] = "`Eoc`.`bank_details_code`";
$proto44["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_bank",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto46["m_sql"] = "`mst_bank`.`name`";
$proto46["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "Eoc_takuhai";
$proto49["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id";
$proto49["m_columns"][] = "brand_confirm";
$proto49["m_columns"][] = "number_of_times";
$proto49["m_columns"][] = "type_selection";
$proto49["m_columns"][] = "reuse_box";
$proto49["m_columns"][] = "kit_detail";
$proto49["m_columns"][] = "date_select";
$proto49["m_columns"][] = "time_select";
$proto49["m_columns"][] = "date_select_hidden";
$proto49["m_columns"][] = "time_select_hidden";
$proto49["m_columns"][] = "speed_box";
$proto49["m_columns"][] = "date_and_time";
$proto49["m_columns"][] = "date_and_time_hidden";
$proto49["m_columns"][] = "user_name";
$proto49["m_columns"][] = "user_name_kana";
$proto49["m_columns"][] = "user_tel";
$proto49["m_columns"][] = "user_mail";
$proto49["m_columns"][] = "user_yuubinn";
$proto49["m_columns"][] = "user_todou";
$proto49["m_columns"][] = "user_sikutyouson";
$proto49["m_columns"][] = "user_banti";
$proto49["m_columns"][] = "tel_mail_line";
$proto49["m_columns"][] = "bikou";
$proto49["m_columns"][] = "insurance_speed";
$proto49["m_columns"][] = "insurance";
$proto49["m_columns"][] = "mail_magazin";
$proto49["m_columns"][] = "anke_1";
$proto49["m_columns"][] = "anke_2";
$proto49["m_columns"][] = "anke_3";
$proto49["m_columns"][] = "mail_text";
$proto49["m_columns"][] = "REMOTE_HOST";
$proto49["m_columns"][] = "REMOTE_ADDR";
$proto49["m_columns"][] = "USER_AGENT";
$proto49["m_columns"][] = "HTTP_REFERER";
$proto49["m_columns"][] = "key_code";
$proto49["m_columns"][] = "cv_site";
$proto49["m_columns"][] = "cv_device";
$proto49["m_columns"][] = "cv_page";
$proto49["m_columns"][] = "cv_time";
$proto49["m_columns"][] = "ecc_id";
$proto49["m_columns"][] = "kit_denpyou";
$proto49["m_columns"][] = "kit_huutou";
$proto49["m_columns"][] = "kit_S";
$proto49["m_columns"][] = "kit_M";
$proto49["m_columns"][] = "kit_L";
$proto49["m_columns"][] = "warehouse_instruction";
$proto49["m_columns"][] = "delivery_slip_instruction";
$proto49["m_columns"][] = "haisou_bangou";
$proto49["m_columns"][] = "shipping_number";
$proto49["m_columns"][] = "arrival_date";
$proto49["m_columns"][] = "updated_at";
$proto49["m_columns"][] = "updated_by";
$proto49["m_columns"][] = "line_satei";
$proto49["m_columns"][] = "insurance_kingaku";
$proto49["m_columns"][] = "status";
$proto49["m_columns"][] = "hakosuu";
$proto49["m_columns"][] = "purchase_type";
$proto49["m_columns"][] = "seiyakukin";
$proto49["m_columns"][] = "received_time";
$proto49["m_columns"][] = "transfer_id";
$proto49["m_columns"][] = "price_error";
$proto49["m_columns"][] = "speed_num";
$proto49["m_columns"][] = "shuka_status";
$proto49["m_columns"][] = "shuka_error";
$proto49["m_columns"][] = "haisou_gyousha";
$proto49["m_columns"][] = "user_address1";
$proto49["m_columns"][] = "user_address2";
$proto49["m_columns"][] = "not_hi_shuka";
$proto49["m_columns"][] = "created_at";
$proto49["m_columns"][] = "is_many_product";
$proto49["m_columns"][] = "Eoc_trader_id";
$proto49["m_columns"][] = "service_users_id";
$proto49["m_columns"][] = "mypage_update_prohibited";
$proto49["m_columns"][] = "memo";
$proto49["m_columns"][] = "satei_start";
$proto49["m_columns"][] = "satei_end";
$proto49["m_columns"][] = "satei_start_by";
$proto49["m_columns"][] = "contract_at";
$proto49["m_columns"][] = "ad_param";
$proto49["m_columns"][] = "is_NJ_or_BJ";
$proto49["m_columns"][] = "shipping_date";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "`Eoc_takuhai`";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
												$proto52=array();
$proto52["m_link"] = "SQLL_LEFTJOIN";
			$proto53=array();
$proto53["m_strName"] = "Eoc";
$proto53["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "ecc_id";
$proto53["m_columns"][] = "ecc_seq";
$proto53["m_columns"][] = "name1";
$proto53["m_columns"][] = "created_t";
$proto53["m_columns"][] = "registerd_id";
$proto53["m_columns"][] = "kaitori_staff_id";
$proto53["m_columns"][] = "name2";
$proto53["m_columns"][] = "wareki";
$proto53["m_columns"][] = "b1";
$proto53["m_columns"][] = "b2";
$proto53["m_columns"][] = "b3";
$proto53["m_columns"][] = "birth_day";
$proto53["m_columns"][] = "age";
$proto53["m_columns"][] = "zip";
$proto53["m_columns"][] = "zip1";
$proto53["m_columns"][] = "zip2";
$proto53["m_columns"][] = "address1";
$proto53["m_columns"][] = "address2";
$proto53["m_columns"][] = "address3";
$proto53["m_columns"][] = "tel";
$proto53["m_columns"][] = "tel2";
$proto53["m_columns"][] = "mail1";
$proto53["m_columns"][] = "mail2";
$proto53["m_columns"][] = "address_code";
$proto53["m_columns"][] = "bank_name";
$proto53["m_columns"][] = "bank_blunch_code";
$proto53["m_columns"][] = "bank_yokin_shubetu";
$proto53["m_columns"][] = "bank_account";
$proto53["m_columns"][] = "bank_acoount_name";
$proto53["m_columns"][] = "haisou_bangou";
$proto53["m_columns"][] = "sise_houhou";
$proto53["m_columns"][] = "hentou_houhou";
$proto53["m_columns"][] = "hentou_houhou_time";
$proto53["m_columns"][] = "mousikomi_id";
$proto53["m_columns"][] = "hituyou_shorui";
$proto53["m_columns"][] = "seiyaku_fuseiritu";
$proto53["m_columns"][] = "mitumori_taku";
$proto53["m_columns"][] = "seacanse";
$proto53["m_columns"][] = "remark";
$proto53["m_columns"][] = "type";
$proto53["m_columns"][] = "sales_flag";
$proto53["m_columns"][] = "src_type";
$proto53["m_columns"][] = "liquidation_shop_code";
$proto53["m_columns"][] = "insurance_amount_print";
$proto53["m_columns"][] = "jis_code";
$proto53["m_columns"][] = "updated_at";
$proto53["m_columns"][] = "_registerd_id";
$proto53["m_columns"][] = "mail_check_type";
$proto53["m_columns"][] = "purchase_type";
$proto53["m_columns"][] = "sex";
$proto53["m_columns"][] = "m_tel";
$proto53["m_columns"][] = "fax";
$proto53["m_columns"][] = "chigin_kaitori";
$proto53["m_columns"][] = "option1";
$proto53["m_columns"][] = "option2";
$proto53["m_columns"][] = "option3";
$proto53["m_columns"][] = "option4";
$proto53["m_columns"][] = "option5";
$proto53["m_columns"][] = "option6";
$proto53["m_columns"][] = "option7";
$proto53["m_columns"][] = "option8";
$proto53["m_columns"][] = "option9";
$proto53["m_columns"][] = "option10";
$proto53["m_columns"][] = "option11";
$proto53["m_columns"][] = "option12";
$proto53["m_columns"][] = "option13";
$proto53["m_columns"][] = "rakuda_csv_flag";
$proto53["m_columns"][] = "EOC_COURIER_CHECK";
$proto53["m_columns"][] = "EOC_SIZE";
$proto53["m_columns"][] = "EOC_NUMBER";
$proto53["m_columns"][] = "EOC_REUSE";
$proto53["m_columns"][] = "EOC__DELIVERY_DATES";
$proto53["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto53["m_columns"][] = "FIRST_NAME2";
$proto53["m_columns"][] = "LAST_NAME2";
$proto53["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto53["m_columns"][] = "EOC__BOX_NUMBER";
$proto53["m_columns"][] = "FIRST_NAME_KANA";
$proto53["m_columns"][] = "LAST_NAME_KANA";
$proto53["m_columns"][] = "FLAG_SPEED";
$proto53["m_columns"][] = "SEARCH_MEDIA";
$proto53["m_columns"][] = "SEARCH_SITE";
$proto53["m_columns"][] = "UN_REACHABLE";
$proto53["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto53["m_columns"][] = "FLG_MAIL_OTHER";
$proto53["m_columns"][] = "ALLSEIYAKU";
$proto53["m_columns"][] = "ICHIBUSEIYAKU";
$proto53["m_columns"][] = "seiyakukin";
$proto53["m_columns"][] = "kaitorihuka";
$proto53["m_columns"][] = "awazu_date";
$proto53["m_columns"][] = "seiyaku_price";
$proto53["m_columns"][] = "eoc_search_keyword";
$proto53["m_columns"][] = "sonota";
$proto53["m_columns"][] = "size_kosuu";
$proto53["m_columns"][] = "sagawa_shuuka_flag";
$proto53["m_columns"][] = "line_check";
$proto53["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto53["m_columns"][] = "kaitori_sougak";
$proto53["m_columns"][] = "flag";
$proto53["m_columns"][] = "key_code";
$proto53["m_columns"][] = "dm_check_type";
$proto53["m_columns"][] = "kit_flag";
$proto53["m_columns"][] = "kit_done_flag";
$proto53["m_columns"][] = "bank_details_code";
$proto53["m_columns"][] = "bank_details_blunch_name";
$proto53["m_columns"][] = "bank_details_blunch_code";
$proto53["m_columns"][] = "bank_details_account_number";
$proto53["m_columns"][] = "bank_details_symbol";
$proto53["m_columns"][] = "bank_details_number";
$proto53["m_columns"][] = "bank_details_account_name";
$proto53["m_columns"][] = "bank_details_deposit_type";
$proto53["m_columns"][] = "mypage_id";
$proto53["m_columns"][] = "UN_REACHABLE_brand";
$proto53["m_columns"][] = "sagawa_haisou_hoken";
$proto53["m_columns"][] = "transfer_confirm";
$proto53["m_columns"][] = "outside_bank";
$proto53["m_columns"][] = "new_name";
$proto53["m_columns"][] = "letterpack";
$proto53["m_columns"][] = "satei_saisoku_2_days";
$proto53["m_columns"][] = "satei_saisoku_7_days";
$proto53["m_columns"][] = "accept_flag";
$proto53["m_columns"][] = "delivery_flag";
$proto53["m_columns"][] = "refining_weight";
$proto53["m_columns"][] = "line_chat_url";
$proto53["m_columns"][] = "royal_customer_status";
$proto53["m_columns"][] = "is_business_customer";
$proto53["m_columns"][] = "is_exist_haisouhosyo";
$proto53["m_columns"][] = "meigi_hankaku_kana";
$proto53["m_columns"][] = "building_types";
$proto53["m_columns"][] = "dwelling_types";
$proto53["m_columns"][] = "is_yamato_csv";
$proto53["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "LEFT OUTER JOIN `Eoc` ON `Eoc_takuhai`.`ecc_id` = `Eoc`.`ecc_id`";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto54=array();
$proto54["m_sql"] = "`Eoc_takuhai`.`ecc_id` = `Eoc`.`ecc_id`";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "= `Eoc`.`ecc_id`";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto56=array();
$proto56["m_link"] = "SQLL_LEFTJOIN";
			$proto57=array();
$proto57["m_strName"] = "vw_Eoc_takuhai_group_shouhin";
$proto57["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "Eoc_takuhai_id";
$proto57["m_columns"][] = "satei_sougaku";
$proto57["m_columns"][] = "satei_kensuu";
$proto57["m_columns"][] = "satei_by";
$proto57["m_columns"][] = "satei_hi";
$proto57["m_columns"][] = "seiyaku_by";
$proto57["m_columns"][] = "seiyaku_hi";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "LEFT OUTER JOIN `vw_Eoc_takuhai_group_shouhin` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_shouhin`.`Eoc_takuhai_id`";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto58=array();
$proto58["m_sql"] = "`Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_shouhin`.`Eoc_takuhai_id`";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= `vw_Eoc_takuhai_group_shouhin`.`Eoc_takuhai_id`";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
												$proto60=array();
$proto60["m_link"] = "SQLL_LEFTJOIN";
			$proto61=array();
$proto61["m_strName"] = "vw_Eoc_takuhai_group_Eoc_chigins";
$proto61["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "Eoc_takuhai_id";
$proto61["m_columns"][] = "kaibi_sougaku";
$proto61["m_columns"][] = "kaibi_kensuu";
$proto61["m_columns"][] = "create_by";
$proto61["m_columns"][] = "ching_created_at";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "LEFT OUTER JOIN `vw_Eoc_takuhai_group_Eoc_chigins` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_Eoc_chigins`.`Eoc_takuhai_id`";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto62=array();
$proto62["m_sql"] = "`Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_Eoc_chigins`.`Eoc_takuhai_id`";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "= `vw_Eoc_takuhai_group_Eoc_chigins`.`Eoc_takuhai_id`";
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
$proto65["m_strName"] = "vw_Eoc_takuhai_group_shouhin_awazu";
$proto65["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "Eoc_takuhai_id";
$proto65["m_columns"][] = "awazu_kensuu";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "LEFT OUTER JOIN `vw_Eoc_takuhai_group_shouhin_awazu` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_shouhin_awazu`.`Eoc_takuhai_id`";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto66=array();
$proto66["m_sql"] = "`Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_shouhin_awazu`.`Eoc_takuhai_id`";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "= `vw_Eoc_takuhai_group_shouhin_awazu`.`Eoc_takuhai_id`";
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
$proto69["m_strName"] = "mst_bank";
$proto69["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "id";
$proto69["m_columns"][] = "bank_code";
$proto69["m_columns"][] = "siten_code";
$proto69["m_columns"][] = "kana";
$proto69["m_columns"][] = "name";
$proto69["m_columns"][] = "category";
$proto69["m_columns"][] = "update_by";
$proto69["m_columns"][] = "update_at";
$proto69["m_columns"][] = "create_by";
$proto69["m_columns"][] = "create_at";
$proto69["m_columns"][] = "bank_type";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "LEFT OUTER JOIN `mst_bank` ON `Eoc`.`bank_details_code` = `mst_bank`.`bank_code` AND `mst_bank`.category=1";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "Eoc_transfer_confirm_after";
$proto70=array();
$proto70["m_sql"] = "`Eoc`.`bank_details_code` = `mst_bank`.`bank_code` AND `mst_bank`.category=1";
$proto70["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`Eoc`.`bank_details_code` = `mst_bank`.`bank_code` AND `mst_bank`.category=1"
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
						$proto72=array();
$proto72["m_sql"] = "`Eoc`.`bank_details_code` = `mst_bank`.`bank_code`";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "bank_details_code",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "= `mst_bank`.`bank_code`";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

			$proto70["m_contained"][]=$obj;
						$proto74=array();
$proto74["m_sql"] = "`mst_bank`.category=1";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "mst_bank",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "=1";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

			$proto70["m_contained"][]=$obj;
$proto70["m_strCase"] = "";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto76=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm_after"
));

$proto76["m_column"]=$obj;
$proto76["m_bAsc"] = 0;
$proto76["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto76);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_transfer_confirm_after";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_transfer_confirm_after = createSqlQuery_Eoc_transfer_confirm_after();


	
		;

																		

$tdataEoc_transfer_confirm_after[".sqlquery"] = $queryData_Eoc_transfer_confirm_after;

include_once(getabspath("include/Eoc_transfer_confirm_after_events.php"));
$tableEvents["Eoc_transfer_confirm_after"] = new eventclass_Eoc_transfer_confirm_after;
$tdataEoc_transfer_confirm_after[".hasEvents"] = true;

?>