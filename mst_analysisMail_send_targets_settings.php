<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_analysisMail_send_targets = array();
	$tdatamst_analysisMail_send_targets[".truncateText"] = true;
	$tdatamst_analysisMail_send_targets[".NumberOfChars"] = 80;
	$tdatamst_analysisMail_send_targets[".ShortName"] = "mst_analysisMail_send_targets";
	$tdatamst_analysisMail_send_targets[".OwnerID"] = "";
	$tdatamst_analysisMail_send_targets[".OriginalTable"] = "mst_analysisMail_send_targets";

//	field labels
$fieldLabelsmst_analysisMail_send_targets = array();
$fieldToolTipsmst_analysisMail_send_targets = array();
$pageTitlesmst_analysisMail_send_targets = array();
$placeHoldersmst_analysisMail_send_targets = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_analysisMail_send_targets["Japanese"] = array();
	$fieldToolTipsmst_analysisMail_send_targets["Japanese"] = array();
	$placeHoldersmst_analysisMail_send_targets["Japanese"] = array();
	$pageTitlesmst_analysisMail_send_targets["Japanese"] = array();
	$fieldLabelsmst_analysisMail_send_targets["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_analysisMail_send_targets["Japanese"]["id"] = "";
	$placeHoldersmst_analysisMail_send_targets["Japanese"]["id"] = "";
	$fieldLabelsmst_analysisMail_send_targets["Japanese"]["send_group_id"] = "送信グループId";
	$fieldToolTipsmst_analysisMail_send_targets["Japanese"]["send_group_id"] = "";
	$placeHoldersmst_analysisMail_send_targets["Japanese"]["send_group_id"] = "";
	$fieldLabelsmst_analysisMail_send_targets["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsmst_analysisMail_send_targets["Japanese"]["ecc_id"] = "";
	$placeHoldersmst_analysisMail_send_targets["Japanese"]["ecc_id"] = "";
	$fieldLabelsmst_analysisMail_send_targets["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsmst_analysisMail_send_targets["Japanese"]["updated_by"] = "";
	$placeHoldersmst_analysisMail_send_targets["Japanese"]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_send_targets["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsmst_analysisMail_send_targets["Japanese"]["updated_at"] = "";
	$placeHoldersmst_analysisMail_send_targets["Japanese"]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_send_targets["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsmst_analysisMail_send_targets["Japanese"]["created_by"] = "";
	$placeHoldersmst_analysisMail_send_targets["Japanese"]["created_by"] = "";
	$fieldLabelsmst_analysisMail_send_targets["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsmst_analysisMail_send_targets["Japanese"]["created_at"] = "";
	$placeHoldersmst_analysisMail_send_targets["Japanese"]["created_at"] = "";
	$fieldLabelsmst_analysisMail_send_targets["Japanese"]["mail1"] = "メアド１";
	$fieldToolTipsmst_analysisMail_send_targets["Japanese"]["mail1"] = "";
	$placeHoldersmst_analysisMail_send_targets["Japanese"]["mail1"] = "";
	$fieldLabelsmst_analysisMail_send_targets["Japanese"]["mail2"] = "メアド２";
	$fieldToolTipsmst_analysisMail_send_targets["Japanese"]["mail2"] = "";
	$placeHoldersmst_analysisMail_send_targets["Japanese"]["mail2"] = "";
	$fieldLabelsmst_analysisMail_send_targets["Japanese"]["dm_check_type"] = "DM許可";
	$fieldToolTipsmst_analysisMail_send_targets["Japanese"]["dm_check_type"] = "";
	$placeHoldersmst_analysisMail_send_targets["Japanese"]["dm_check_type"] = "";
	$fieldLabelsmst_analysisMail_send_targets["Japanese"]["name1"] = "名前";
	$fieldToolTipsmst_analysisMail_send_targets["Japanese"]["name1"] = "";
	$placeHoldersmst_analysisMail_send_targets["Japanese"]["name1"] = "";
	$fieldLabelsmst_analysisMail_send_targets["Japanese"]["name2"] = "フリガナ";
	$fieldToolTipsmst_analysisMail_send_targets["Japanese"]["name2"] = "";
	$placeHoldersmst_analysisMail_send_targets["Japanese"]["name2"] = "";
	$fieldLabelsmst_analysisMail_send_targets["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipsmst_analysisMail_send_targets["Japanese"]["ecc_seq"] = "";
	$placeHoldersmst_analysisMail_send_targets["Japanese"]["ecc_seq"] = "";
	if (count($fieldToolTipsmst_analysisMail_send_targets["Japanese"]))
		$tdatamst_analysisMail_send_targets[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_analysisMail_send_targets[""] = array();
	$fieldToolTipsmst_analysisMail_send_targets[""] = array();
	$placeHoldersmst_analysisMail_send_targets[""] = array();
	$pageTitlesmst_analysisMail_send_targets[""] = array();
	$fieldLabelsmst_analysisMail_send_targets[""]["id"] = "Id";
	$fieldToolTipsmst_analysisMail_send_targets[""]["id"] = "";
	$placeHoldersmst_analysisMail_send_targets[""]["id"] = "";
	$fieldLabelsmst_analysisMail_send_targets[""]["send_group_id"] = "Send Group Id";
	$fieldToolTipsmst_analysisMail_send_targets[""]["send_group_id"] = "";
	$placeHoldersmst_analysisMail_send_targets[""]["send_group_id"] = "";
	$fieldLabelsmst_analysisMail_send_targets[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsmst_analysisMail_send_targets[""]["ecc_id"] = "";
	$placeHoldersmst_analysisMail_send_targets[""]["ecc_id"] = "";
	$fieldLabelsmst_analysisMail_send_targets[""]["updated_by"] = "Updated By";
	$fieldToolTipsmst_analysisMail_send_targets[""]["updated_by"] = "";
	$placeHoldersmst_analysisMail_send_targets[""]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_send_targets[""]["updated_at"] = "Updated At";
	$fieldToolTipsmst_analysisMail_send_targets[""]["updated_at"] = "";
	$placeHoldersmst_analysisMail_send_targets[""]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_send_targets[""]["created_by"] = "Created By";
	$fieldToolTipsmst_analysisMail_send_targets[""]["created_by"] = "";
	$placeHoldersmst_analysisMail_send_targets[""]["created_by"] = "";
	$fieldLabelsmst_analysisMail_send_targets[""]["created_at"] = "Created At";
	$fieldToolTipsmst_analysisMail_send_targets[""]["created_at"] = "";
	$placeHoldersmst_analysisMail_send_targets[""]["created_at"] = "";
	$fieldLabelsmst_analysisMail_send_targets[""]["mail1"] = "Mail1";
	$fieldToolTipsmst_analysisMail_send_targets[""]["mail1"] = "";
	$placeHoldersmst_analysisMail_send_targets[""]["mail1"] = "";
	$fieldLabelsmst_analysisMail_send_targets[""]["mail2"] = "Mail2";
	$fieldToolTipsmst_analysisMail_send_targets[""]["mail2"] = "";
	$placeHoldersmst_analysisMail_send_targets[""]["mail2"] = "";
	$fieldLabelsmst_analysisMail_send_targets[""]["dm_check_type"] = "Dm Check Type";
	$fieldToolTipsmst_analysisMail_send_targets[""]["dm_check_type"] = "";
	$placeHoldersmst_analysisMail_send_targets[""]["dm_check_type"] = "";
	$fieldLabelsmst_analysisMail_send_targets[""]["name1"] = "Name1";
	$fieldToolTipsmst_analysisMail_send_targets[""]["name1"] = "";
	$placeHoldersmst_analysisMail_send_targets[""]["name1"] = "";
	$fieldLabelsmst_analysisMail_send_targets[""]["name2"] = "Name2";
	$fieldToolTipsmst_analysisMail_send_targets[""]["name2"] = "";
	$placeHoldersmst_analysisMail_send_targets[""]["name2"] = "";
	$fieldLabelsmst_analysisMail_send_targets[""]["ecc_seq"] = "Ecc Seq";
	$fieldToolTipsmst_analysisMail_send_targets[""]["ecc_seq"] = "";
	$placeHoldersmst_analysisMail_send_targets[""]["ecc_seq"] = "";
	if (count($fieldToolTipsmst_analysisMail_send_targets[""]))
		$tdatamst_analysisMail_send_targets[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_analysisMail_send_targets["English"] = array();
	$fieldToolTipsmst_analysisMail_send_targets["English"] = array();
	$placeHoldersmst_analysisMail_send_targets["English"] = array();
	$pageTitlesmst_analysisMail_send_targets["English"] = array();
	$fieldLabelsmst_analysisMail_send_targets["English"]["id"] = "Id";
	$fieldToolTipsmst_analysisMail_send_targets["English"]["id"] = "";
	$placeHoldersmst_analysisMail_send_targets["English"]["id"] = "";
	$fieldLabelsmst_analysisMail_send_targets["English"]["send_group_id"] = "Send Group Id";
	$fieldToolTipsmst_analysisMail_send_targets["English"]["send_group_id"] = "";
	$placeHoldersmst_analysisMail_send_targets["English"]["send_group_id"] = "";
	$fieldLabelsmst_analysisMail_send_targets["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsmst_analysisMail_send_targets["English"]["ecc_id"] = "";
	$placeHoldersmst_analysisMail_send_targets["English"]["ecc_id"] = "";
	$fieldLabelsmst_analysisMail_send_targets["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmst_analysisMail_send_targets["English"]["updated_by"] = "";
	$placeHoldersmst_analysisMail_send_targets["English"]["updated_by"] = "";
	$fieldLabelsmst_analysisMail_send_targets["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmst_analysisMail_send_targets["English"]["updated_at"] = "";
	$placeHoldersmst_analysisMail_send_targets["English"]["updated_at"] = "";
	$fieldLabelsmst_analysisMail_send_targets["English"]["created_by"] = "Created By";
	$fieldToolTipsmst_analysisMail_send_targets["English"]["created_by"] = "";
	$placeHoldersmst_analysisMail_send_targets["English"]["created_by"] = "";
	$fieldLabelsmst_analysisMail_send_targets["English"]["created_at"] = "Created At";
	$fieldToolTipsmst_analysisMail_send_targets["English"]["created_at"] = "";
	$placeHoldersmst_analysisMail_send_targets["English"]["created_at"] = "";
	$fieldLabelsmst_analysisMail_send_targets["English"]["mail1"] = "Mail1";
	$fieldToolTipsmst_analysisMail_send_targets["English"]["mail1"] = "";
	$placeHoldersmst_analysisMail_send_targets["English"]["mail1"] = "";
	$fieldLabelsmst_analysisMail_send_targets["English"]["mail2"] = "Mail2";
	$fieldToolTipsmst_analysisMail_send_targets["English"]["mail2"] = "";
	$placeHoldersmst_analysisMail_send_targets["English"]["mail2"] = "";
	$fieldLabelsmst_analysisMail_send_targets["English"]["dm_check_type"] = "Dm Check Type";
	$fieldToolTipsmst_analysisMail_send_targets["English"]["dm_check_type"] = "";
	$placeHoldersmst_analysisMail_send_targets["English"]["dm_check_type"] = "";
	$fieldLabelsmst_analysisMail_send_targets["English"]["name1"] = "Name1";
	$fieldToolTipsmst_analysisMail_send_targets["English"]["name1"] = "";
	$placeHoldersmst_analysisMail_send_targets["English"]["name1"] = "";
	$fieldLabelsmst_analysisMail_send_targets["English"]["name2"] = "Name2";
	$fieldToolTipsmst_analysisMail_send_targets["English"]["name2"] = "";
	$placeHoldersmst_analysisMail_send_targets["English"]["name2"] = "";
	$fieldLabelsmst_analysisMail_send_targets["English"]["ecc_seq"] = "Ecc Seq";
	$fieldToolTipsmst_analysisMail_send_targets["English"]["ecc_seq"] = "";
	$placeHoldersmst_analysisMail_send_targets["English"]["ecc_seq"] = "";
	if (count($fieldToolTipsmst_analysisMail_send_targets["English"]))
		$tdatamst_analysisMail_send_targets[".isUseToolTips"] = true;
}


	$tdatamst_analysisMail_send_targets[".NCSearch"] = true;



$tdatamst_analysisMail_send_targets[".shortTableName"] = "mst_analysisMail_send_targets";
$tdatamst_analysisMail_send_targets[".nSecOptions"] = 0;
$tdatamst_analysisMail_send_targets[".recsPerRowPrint"] = 1;
$tdatamst_analysisMail_send_targets[".mainTableOwnerID"] = "";
$tdatamst_analysisMail_send_targets[".moveNext"] = 1;
$tdatamst_analysisMail_send_targets[".entityType"] = 0;

$tdatamst_analysisMail_send_targets[".strOriginalTableName"] = "mst_analysisMail_send_targets";

	



$tdatamst_analysisMail_send_targets[".showAddInPopup"] = false;

$tdatamst_analysisMail_send_targets[".showEditInPopup"] = false;

$tdatamst_analysisMail_send_targets[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_analysisMail_send_targets[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_analysisMail_send_targets[".fieldsForRegister"] = array();

$tdatamst_analysisMail_send_targets[".listAjax"] = false;

	$tdatamst_analysisMail_send_targets[".audit"] = true;

	$tdatamst_analysisMail_send_targets[".locking"] = false;



$tdatamst_analysisMail_send_targets[".list"] = true;

$tdatamst_analysisMail_send_targets[".inlineEdit"] = true;


$tdatamst_analysisMail_send_targets[".reorderRecordsByHeader"] = true;



$tdatamst_analysisMail_send_targets[".inlineAdd"] = true;

$tdatamst_analysisMail_send_targets[".import"] = true;

$tdatamst_analysisMail_send_targets[".exportTo"] = true;


$tdatamst_analysisMail_send_targets[".delete"] = true;

$tdatamst_analysisMail_send_targets[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_analysisMail_send_targets[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_analysisMail_send_targets[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_analysisMail_send_targets[".searchSaving"] = false;
//

$tdatamst_analysisMail_send_targets[".showSearchPanel"] = true;
		$tdatamst_analysisMail_send_targets[".flexibleSearch"] = true;

$tdatamst_analysisMail_send_targets[".isUseAjaxSuggest"] = true;

$tdatamst_analysisMail_send_targets[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatamst_analysisMail_send_targets[".ajaxCodeSnippetAdded"] = false;

$tdatamst_analysisMail_send_targets[".buttonsAdded"] = false;

$tdatamst_analysisMail_send_targets[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_analysisMail_send_targets[".isUseTimeForSearch"] = false;



$tdatamst_analysisMail_send_targets[".badgeColor"] = "4682b4";


$tdatamst_analysisMail_send_targets[".allSearchFields"] = array();
$tdatamst_analysisMail_send_targets[".filterFields"] = array();
$tdatamst_analysisMail_send_targets[".requiredSearchFields"] = array();

$tdatamst_analysisMail_send_targets[".allSearchFields"][] = "id";
	$tdatamst_analysisMail_send_targets[".allSearchFields"][] = "send_group_id";
	$tdatamst_analysisMail_send_targets[".allSearchFields"][] = "ecc_id";
	$tdatamst_analysisMail_send_targets[".allSearchFields"][] = "ecc_seq";
	$tdatamst_analysisMail_send_targets[".allSearchFields"][] = "name1";
	$tdatamst_analysisMail_send_targets[".allSearchFields"][] = "name2";
	$tdatamst_analysisMail_send_targets[".allSearchFields"][] = "mail1";
	$tdatamst_analysisMail_send_targets[".allSearchFields"][] = "mail2";
	$tdatamst_analysisMail_send_targets[".allSearchFields"][] = "dm_check_type";
	$tdatamst_analysisMail_send_targets[".allSearchFields"][] = "created_at";
	$tdatamst_analysisMail_send_targets[".allSearchFields"][] = "created_by";
	$tdatamst_analysisMail_send_targets[".allSearchFields"][] = "updated_at";
	$tdatamst_analysisMail_send_targets[".allSearchFields"][] = "updated_by";
	

$tdatamst_analysisMail_send_targets[".googleLikeFields"] = array();
$tdatamst_analysisMail_send_targets[".googleLikeFields"][] = "id";
$tdatamst_analysisMail_send_targets[".googleLikeFields"][] = "send_group_id";
$tdatamst_analysisMail_send_targets[".googleLikeFields"][] = "ecc_id";
$tdatamst_analysisMail_send_targets[".googleLikeFields"][] = "updated_by";
$tdatamst_analysisMail_send_targets[".googleLikeFields"][] = "updated_at";
$tdatamst_analysisMail_send_targets[".googleLikeFields"][] = "created_by";
$tdatamst_analysisMail_send_targets[".googleLikeFields"][] = "created_at";
$tdatamst_analysisMail_send_targets[".googleLikeFields"][] = "mail1";
$tdatamst_analysisMail_send_targets[".googleLikeFields"][] = "mail2";
$tdatamst_analysisMail_send_targets[".googleLikeFields"][] = "dm_check_type";
$tdatamst_analysisMail_send_targets[".googleLikeFields"][] = "name1";
$tdatamst_analysisMail_send_targets[".googleLikeFields"][] = "name2";
$tdatamst_analysisMail_send_targets[".googleLikeFields"][] = "ecc_seq";


$tdatamst_analysisMail_send_targets[".advSearchFields"] = array();
$tdatamst_analysisMail_send_targets[".advSearchFields"][] = "id";
$tdatamst_analysisMail_send_targets[".advSearchFields"][] = "send_group_id";
$tdatamst_analysisMail_send_targets[".advSearchFields"][] = "ecc_id";
$tdatamst_analysisMail_send_targets[".advSearchFields"][] = "ecc_seq";
$tdatamst_analysisMail_send_targets[".advSearchFields"][] = "name1";
$tdatamst_analysisMail_send_targets[".advSearchFields"][] = "name2";
$tdatamst_analysisMail_send_targets[".advSearchFields"][] = "mail1";
$tdatamst_analysisMail_send_targets[".advSearchFields"][] = "mail2";
$tdatamst_analysisMail_send_targets[".advSearchFields"][] = "dm_check_type";
$tdatamst_analysisMail_send_targets[".advSearchFields"][] = "created_at";
$tdatamst_analysisMail_send_targets[".advSearchFields"][] = "created_by";
$tdatamst_analysisMail_send_targets[".advSearchFields"][] = "updated_at";
$tdatamst_analysisMail_send_targets[".advSearchFields"][] = "updated_by";

$tdatamst_analysisMail_send_targets[".tableType"] = "list";

$tdatamst_analysisMail_send_targets[".printerPageOrientation"] = 0;
$tdatamst_analysisMail_send_targets[".nPrinterPageScale"] = 100;

$tdatamst_analysisMail_send_targets[".nPrinterSplitRecords"] = 40;

$tdatamst_analysisMail_send_targets[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_analysisMail_send_targets[".geocodingEnabled"] = false;





$tdatamst_analysisMail_send_targets[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_analysisMail_send_targets[".pageSize"] = 20;

$tdatamst_analysisMail_send_targets[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `mst_analysisMail_send_targets`.`id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_analysisMail_send_targets[".strOrderBy"] = $tstrOrderBy;

$tdatamst_analysisMail_send_targets[".orderindexes"] = array();
$tdatamst_analysisMail_send_targets[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`mst_analysisMail_send_targets`.`id`");

$tdatamst_analysisMail_send_targets[".sqlHead"] = "SELECT `mst_analysisMail_send_targets`.`id`,  `mst_analysisMail_send_targets`.`send_group_id`,  `mst_analysisMail_send_targets`.`ecc_id`,  `mst_analysisMail_send_targets`.`updated_by`,  `mst_analysisMail_send_targets`.`updated_at`,  `mst_analysisMail_send_targets`.`created_by`,  `mst_analysisMail_send_targets`.`created_at`,  `Eoc`.`mail1`,  `Eoc`.`mail2`,  `Eoc`.`dm_check_type`,  `Eoc`.`name1`,  `Eoc`.`name2`,  `Eoc`.`ecc_seq`";
$tdatamst_analysisMail_send_targets[".sqlFrom"] = "FROM `mst_analysisMail_send_targets`  LEFT OUTER JOIN `Eoc` ON `mst_analysisMail_send_targets`.`ecc_id` = `Eoc`.`ecc_id`";
$tdatamst_analysisMail_send_targets[".sqlWhereExpr"] = "";
$tdatamst_analysisMail_send_targets[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_analysisMail_send_targets[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_analysisMail_send_targets[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_analysisMail_send_targets[".highlightSearchResults"] = true;

$tableKeysmst_analysisMail_send_targets = array();
$tableKeysmst_analysisMail_send_targets[] = "id";
$tdatamst_analysisMail_send_targets[".Keys"] = $tableKeysmst_analysisMail_send_targets;

$tdatamst_analysisMail_send_targets[".listFields"] = array();
$tdatamst_analysisMail_send_targets[".listFields"][] = "id";
$tdatamst_analysisMail_send_targets[".listFields"][] = "send_group_id";
$tdatamst_analysisMail_send_targets[".listFields"][] = "ecc_id";
$tdatamst_analysisMail_send_targets[".listFields"][] = "ecc_seq";
$tdatamst_analysisMail_send_targets[".listFields"][] = "name1";
$tdatamst_analysisMail_send_targets[".listFields"][] = "name2";
$tdatamst_analysisMail_send_targets[".listFields"][] = "mail1";
$tdatamst_analysisMail_send_targets[".listFields"][] = "mail2";
$tdatamst_analysisMail_send_targets[".listFields"][] = "dm_check_type";
$tdatamst_analysisMail_send_targets[".listFields"][] = "created_at";
$tdatamst_analysisMail_send_targets[".listFields"][] = "created_by";
$tdatamst_analysisMail_send_targets[".listFields"][] = "updated_at";
$tdatamst_analysisMail_send_targets[".listFields"][] = "updated_by";

$tdatamst_analysisMail_send_targets[".hideMobileList"] = array();


$tdatamst_analysisMail_send_targets[".viewFields"] = array();

$tdatamst_analysisMail_send_targets[".addFields"] = array();

$tdatamst_analysisMail_send_targets[".masterListFields"] = array();
$tdatamst_analysisMail_send_targets[".masterListFields"][] = "id";
$tdatamst_analysisMail_send_targets[".masterListFields"][] = "send_group_id";
$tdatamst_analysisMail_send_targets[".masterListFields"][] = "ecc_id";
$tdatamst_analysisMail_send_targets[".masterListFields"][] = "ecc_seq";
$tdatamst_analysisMail_send_targets[".masterListFields"][] = "name1";
$tdatamst_analysisMail_send_targets[".masterListFields"][] = "name2";
$tdatamst_analysisMail_send_targets[".masterListFields"][] = "mail1";
$tdatamst_analysisMail_send_targets[".masterListFields"][] = "mail2";
$tdatamst_analysisMail_send_targets[".masterListFields"][] = "dm_check_type";
$tdatamst_analysisMail_send_targets[".masterListFields"][] = "created_at";
$tdatamst_analysisMail_send_targets[".masterListFields"][] = "created_by";
$tdatamst_analysisMail_send_targets[".masterListFields"][] = "updated_at";
$tdatamst_analysisMail_send_targets[".masterListFields"][] = "updated_by";

$tdatamst_analysisMail_send_targets[".inlineAddFields"] = array();
$tdatamst_analysisMail_send_targets[".inlineAddFields"][] = "send_group_id";
$tdatamst_analysisMail_send_targets[".inlineAddFields"][] = "ecc_id";

$tdatamst_analysisMail_send_targets[".editFields"] = array();

$tdatamst_analysisMail_send_targets[".inlineEditFields"] = array();
$tdatamst_analysisMail_send_targets[".inlineEditFields"][] = "send_group_id";
$tdatamst_analysisMail_send_targets[".inlineEditFields"][] = "ecc_id";

$tdatamst_analysisMail_send_targets[".updateSelectedFields"] = array();


$tdatamst_analysisMail_send_targets[".exportFields"] = array();
$tdatamst_analysisMail_send_targets[".exportFields"][] = "id";
$tdatamst_analysisMail_send_targets[".exportFields"][] = "send_group_id";
$tdatamst_analysisMail_send_targets[".exportFields"][] = "ecc_id";
$tdatamst_analysisMail_send_targets[".exportFields"][] = "ecc_seq";
$tdatamst_analysisMail_send_targets[".exportFields"][] = "name1";
$tdatamst_analysisMail_send_targets[".exportFields"][] = "name2";
$tdatamst_analysisMail_send_targets[".exportFields"][] = "mail1";
$tdatamst_analysisMail_send_targets[".exportFields"][] = "mail2";
$tdatamst_analysisMail_send_targets[".exportFields"][] = "dm_check_type";
$tdatamst_analysisMail_send_targets[".exportFields"][] = "created_at";
$tdatamst_analysisMail_send_targets[".exportFields"][] = "created_by";
$tdatamst_analysisMail_send_targets[".exportFields"][] = "updated_at";
$tdatamst_analysisMail_send_targets[".exportFields"][] = "updated_by";

$tdatamst_analysisMail_send_targets[".importFields"] = array();
$tdatamst_analysisMail_send_targets[".importFields"][] = "id";
$tdatamst_analysisMail_send_targets[".importFields"][] = "send_group_id";
$tdatamst_analysisMail_send_targets[".importFields"][] = "ecc_id";

$tdatamst_analysisMail_send_targets[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_analysisMail_send_targets";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_targets","id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_analysisMail_send_targets`.`id`";

	
	
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




	$tdatamst_analysisMail_send_targets["id"] = $fdata;
//	send_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "send_group_id";
	$fdata["GoodName"] = "send_group_id";
	$fdata["ownerTable"] = "mst_analysisMail_send_targets";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_targets","send_group_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "send_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_analysisMail_send_targets`.`send_group_id`";

	
	
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




	$tdatamst_analysisMail_send_targets["send_group_id"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "mst_analysisMail_send_targets";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_targets","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_analysisMail_send_targets`.`ecc_id`";

	
	
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




	$tdatamst_analysisMail_send_targets["ecc_id"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mst_analysisMail_send_targets";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_targets","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_analysisMail_send_targets`.`updated_by`";

	
	
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




	$tdatamst_analysisMail_send_targets["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mst_analysisMail_send_targets";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_targets","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_analysisMail_send_targets`.`updated_at`";

	
	
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




	$tdatamst_analysisMail_send_targets["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_analysisMail_send_targets";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_targets","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_analysisMail_send_targets`.`created_by`";

	
	
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




	$tdatamst_analysisMail_send_targets["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_analysisMail_send_targets";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_targets","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_analysisMail_send_targets`.`created_at`";

	
	
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




	$tdatamst_analysisMail_send_targets["created_at"] = $fdata;
//	mail1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mail1";
	$fdata["GoodName"] = "mail1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_targets","mail1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mail1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`mail1`";

	
	
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




	$tdatamst_analysisMail_send_targets["mail1"] = $fdata;
//	mail2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "mail2";
	$fdata["GoodName"] = "mail2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_targets","mail2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mail2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`mail2`";

	
	
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




	$tdatamst_analysisMail_send_targets["mail2"] = $fdata;
//	dm_check_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "dm_check_type";
	$fdata["GoodName"] = "dm_check_type";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_targets","dm_check_type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dm_check_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`dm_check_type`";

	
	
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




	$tdatamst_analysisMail_send_targets["dm_check_type"] = $fdata;
//	name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "name1";
	$fdata["GoodName"] = "name1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_targets","name1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatamst_analysisMail_send_targets["name1"] = $fdata;
//	name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "name2";
	$fdata["GoodName"] = "name2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_targets","name2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatamst_analysisMail_send_targets["name2"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("mst_analysisMail_send_targets","ecc_seq");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_seq";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`ecc_seq`";

	
	
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




	$tdatamst_analysisMail_send_targets["ecc_seq"] = $fdata;


$tables_data["mst_analysisMail_send_targets"]=&$tdatamst_analysisMail_send_targets;
$field_labels["mst_analysisMail_send_targets"] = &$fieldLabelsmst_analysisMail_send_targets;
$fieldToolTips["mst_analysisMail_send_targets"] = &$fieldToolTipsmst_analysisMail_send_targets;
$placeHolders["mst_analysisMail_send_targets"] = &$placeHoldersmst_analysisMail_send_targets;
$page_titles["mst_analysisMail_send_targets"] = &$pageTitlesmst_analysisMail_send_targets;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_analysisMail_send_targets"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_analysisMail_send_targets"] = array();


	
				$strOriginalDetailsTable="mst_analysisMail_send_groups";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="mst_analysisMail_send_groups";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mst_analysisMail_send_groups";
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
					$masterTablesData["mst_analysisMail_send_targets"][0] = $masterParams;
				$masterTablesData["mst_analysisMail_send_targets"][0]["masterKeys"] = array();
	$masterTablesData["mst_analysisMail_send_targets"][0]["masterKeys"][]="send_group_id";
				$masterTablesData["mst_analysisMail_send_targets"][0]["detailKeys"] = array();
	$masterTablesData["mst_analysisMail_send_targets"][0]["detailKeys"][]="send_group_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_analysisMail_send_targets()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`mst_analysisMail_send_targets`.`id`,  `mst_analysisMail_send_targets`.`send_group_id`,  `mst_analysisMail_send_targets`.`ecc_id`,  `mst_analysisMail_send_targets`.`updated_by`,  `mst_analysisMail_send_targets`.`updated_at`,  `mst_analysisMail_send_targets`.`created_by`,  `mst_analysisMail_send_targets`.`created_at`,  `Eoc`.`mail1`,  `Eoc`.`mail2`,  `Eoc`.`dm_check_type`,  `Eoc`.`name1`,  `Eoc`.`name2`,  `Eoc`.`ecc_seq`";
$proto0["m_strFrom"] = "FROM `mst_analysisMail_send_targets`  LEFT OUTER JOIN `Eoc` ON `mst_analysisMail_send_targets`.`ecc_id` = `Eoc`.`ecc_id`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `mst_analysisMail_send_targets`.`id` DESC";
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
	"m_strTable" => "mst_analysisMail_send_targets",
	"m_srcTableName" => "mst_analysisMail_send_targets"
));

$proto6["m_sql"] = "`mst_analysisMail_send_targets`.`id`";
$proto6["m_srcTableName"] = "mst_analysisMail_send_targets";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "send_group_id",
	"m_strTable" => "mst_analysisMail_send_targets",
	"m_srcTableName" => "mst_analysisMail_send_targets"
));

$proto8["m_sql"] = "`mst_analysisMail_send_targets`.`send_group_id`";
$proto8["m_srcTableName"] = "mst_analysisMail_send_targets";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "mst_analysisMail_send_targets",
	"m_srcTableName" => "mst_analysisMail_send_targets"
));

$proto10["m_sql"] = "`mst_analysisMail_send_targets`.`ecc_id`";
$proto10["m_srcTableName"] = "mst_analysisMail_send_targets";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mst_analysisMail_send_targets",
	"m_srcTableName" => "mst_analysisMail_send_targets"
));

$proto12["m_sql"] = "`mst_analysisMail_send_targets`.`updated_by`";
$proto12["m_srcTableName"] = "mst_analysisMail_send_targets";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mst_analysisMail_send_targets",
	"m_srcTableName" => "mst_analysisMail_send_targets"
));

$proto14["m_sql"] = "`mst_analysisMail_send_targets`.`updated_at`";
$proto14["m_srcTableName"] = "mst_analysisMail_send_targets";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_analysisMail_send_targets",
	"m_srcTableName" => "mst_analysisMail_send_targets"
));

$proto16["m_sql"] = "`mst_analysisMail_send_targets`.`created_by`";
$proto16["m_srcTableName"] = "mst_analysisMail_send_targets";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_analysisMail_send_targets",
	"m_srcTableName" => "mst_analysisMail_send_targets"
));

$proto18["m_sql"] = "`mst_analysisMail_send_targets`.`created_at`";
$proto18["m_srcTableName"] = "mst_analysisMail_send_targets";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "mail1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "mst_analysisMail_send_targets"
));

$proto20["m_sql"] = "`Eoc`.`mail1`";
$proto20["m_srcTableName"] = "mst_analysisMail_send_targets";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "mail2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "mst_analysisMail_send_targets"
));

$proto22["m_sql"] = "`Eoc`.`mail2`";
$proto22["m_srcTableName"] = "mst_analysisMail_send_targets";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "dm_check_type",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "mst_analysisMail_send_targets"
));

$proto24["m_sql"] = "`Eoc`.`dm_check_type`";
$proto24["m_srcTableName"] = "mst_analysisMail_send_targets";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "name1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "mst_analysisMail_send_targets"
));

$proto26["m_sql"] = "`Eoc`.`name1`";
$proto26["m_srcTableName"] = "mst_analysisMail_send_targets";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "mst_analysisMail_send_targets"
));

$proto28["m_sql"] = "`Eoc`.`name2`";
$proto28["m_srcTableName"] = "mst_analysisMail_send_targets";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "mst_analysisMail_send_targets"
));

$proto30["m_sql"] = "`Eoc`.`ecc_seq`";
$proto30["m_srcTableName"] = "mst_analysisMail_send_targets";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "mst_analysisMail_send_targets";
$proto33["m_srcTableName"] = "mst_analysisMail_send_targets";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "send_group_id";
$proto33["m_columns"][] = "ecc_id";
$proto33["m_columns"][] = "updated_by";
$proto33["m_columns"][] = "updated_at";
$proto33["m_columns"][] = "created_by";
$proto33["m_columns"][] = "created_at";
$proto33["m_columns"][] = "sort";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "`mst_analysisMail_send_targets`";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "mst_analysisMail_send_targets";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_LEFTJOIN";
			$proto37=array();
$proto37["m_strName"] = "Eoc";
$proto37["m_srcTableName"] = "mst_analysisMail_send_targets";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "ecc_id";
$proto37["m_columns"][] = "ecc_seq";
$proto37["m_columns"][] = "name1";
$proto37["m_columns"][] = "created_t";
$proto37["m_columns"][] = "registerd_id";
$proto37["m_columns"][] = "kaitori_staff_id";
$proto37["m_columns"][] = "name2";
$proto37["m_columns"][] = "wareki";
$proto37["m_columns"][] = "b1";
$proto37["m_columns"][] = "b2";
$proto37["m_columns"][] = "b3";
$proto37["m_columns"][] = "birth_day";
$proto37["m_columns"][] = "age";
$proto37["m_columns"][] = "zip";
$proto37["m_columns"][] = "zip1";
$proto37["m_columns"][] = "zip2";
$proto37["m_columns"][] = "address1";
$proto37["m_columns"][] = "address2";
$proto37["m_columns"][] = "address3";
$proto37["m_columns"][] = "tel";
$proto37["m_columns"][] = "tel2";
$proto37["m_columns"][] = "mail1";
$proto37["m_columns"][] = "mail2";
$proto37["m_columns"][] = "address_code";
$proto37["m_columns"][] = "bank_name";
$proto37["m_columns"][] = "bank_blunch_code";
$proto37["m_columns"][] = "bank_yokin_shubetu";
$proto37["m_columns"][] = "bank_account";
$proto37["m_columns"][] = "bank_acoount_name";
$proto37["m_columns"][] = "haisou_bangou";
$proto37["m_columns"][] = "sise_houhou";
$proto37["m_columns"][] = "hentou_houhou";
$proto37["m_columns"][] = "hentou_houhou_time";
$proto37["m_columns"][] = "mousikomi_id";
$proto37["m_columns"][] = "hituyou_shorui";
$proto37["m_columns"][] = "seiyaku_fuseiritu";
$proto37["m_columns"][] = "mitumori_taku";
$proto37["m_columns"][] = "seacanse";
$proto37["m_columns"][] = "remark";
$proto37["m_columns"][] = "type";
$proto37["m_columns"][] = "sales_flag";
$proto37["m_columns"][] = "src_type";
$proto37["m_columns"][] = "liquidation_shop_code";
$proto37["m_columns"][] = "insurance_amount_print";
$proto37["m_columns"][] = "jis_code";
$proto37["m_columns"][] = "updated_at";
$proto37["m_columns"][] = "_registerd_id";
$proto37["m_columns"][] = "mail_check_type";
$proto37["m_columns"][] = "purchase_type";
$proto37["m_columns"][] = "sex";
$proto37["m_columns"][] = "m_tel";
$proto37["m_columns"][] = "fax";
$proto37["m_columns"][] = "chigin_kaitori";
$proto37["m_columns"][] = "option1";
$proto37["m_columns"][] = "option2";
$proto37["m_columns"][] = "option3";
$proto37["m_columns"][] = "option4";
$proto37["m_columns"][] = "option5";
$proto37["m_columns"][] = "option6";
$proto37["m_columns"][] = "option7";
$proto37["m_columns"][] = "option8";
$proto37["m_columns"][] = "option9";
$proto37["m_columns"][] = "option10";
$proto37["m_columns"][] = "option11";
$proto37["m_columns"][] = "option12";
$proto37["m_columns"][] = "option13";
$proto37["m_columns"][] = "rakuda_csv_flag";
$proto37["m_columns"][] = "EOC_COURIER_CHECK";
$proto37["m_columns"][] = "EOC_SIZE";
$proto37["m_columns"][] = "EOC_NUMBER";
$proto37["m_columns"][] = "EOC_REUSE";
$proto37["m_columns"][] = "EOC__DELIVERY_DATES";
$proto37["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto37["m_columns"][] = "FIRST_NAME2";
$proto37["m_columns"][] = "LAST_NAME2";
$proto37["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto37["m_columns"][] = "EOC__BOX_NUMBER";
$proto37["m_columns"][] = "FIRST_NAME_KANA";
$proto37["m_columns"][] = "LAST_NAME_KANA";
$proto37["m_columns"][] = "FLAG_SPEED";
$proto37["m_columns"][] = "SEARCH_MEDIA";
$proto37["m_columns"][] = "SEARCH_SITE";
$proto37["m_columns"][] = "UN_REACHABLE";
$proto37["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto37["m_columns"][] = "FLG_MAIL_OTHER";
$proto37["m_columns"][] = "ALLSEIYAKU";
$proto37["m_columns"][] = "ICHIBUSEIYAKU";
$proto37["m_columns"][] = "seiyakukin";
$proto37["m_columns"][] = "kaitorihuka";
$proto37["m_columns"][] = "awazu_date";
$proto37["m_columns"][] = "seiyaku_price";
$proto37["m_columns"][] = "eoc_search_keyword";
$proto37["m_columns"][] = "sonota";
$proto37["m_columns"][] = "size_kosuu";
$proto37["m_columns"][] = "sagawa_shuuka_flag";
$proto37["m_columns"][] = "line_check";
$proto37["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto37["m_columns"][] = "kaitori_sougak";
$proto37["m_columns"][] = "flag";
$proto37["m_columns"][] = "key_code";
$proto37["m_columns"][] = "dm_check_type";
$proto37["m_columns"][] = "kit_flag";
$proto37["m_columns"][] = "kit_done_flag";
$proto37["m_columns"][] = "bank_details_code";
$proto37["m_columns"][] = "bank_details_blunch_name";
$proto37["m_columns"][] = "bank_details_blunch_code";
$proto37["m_columns"][] = "bank_details_account_number";
$proto37["m_columns"][] = "bank_details_symbol";
$proto37["m_columns"][] = "bank_details_number";
$proto37["m_columns"][] = "bank_details_account_name";
$proto37["m_columns"][] = "bank_details_deposit_type";
$proto37["m_columns"][] = "mypage_id";
$proto37["m_columns"][] = "UN_REACHABLE_brand";
$proto37["m_columns"][] = "sagawa_haisou_hoken";
$proto37["m_columns"][] = "transfer_confirm";
$proto37["m_columns"][] = "outside_bank";
$proto37["m_columns"][] = "new_name";
$proto37["m_columns"][] = "letterpack";
$proto37["m_columns"][] = "satei_saisoku_2_days";
$proto37["m_columns"][] = "satei_saisoku_7_days";
$proto37["m_columns"][] = "accept_flag";
$proto37["m_columns"][] = "delivery_flag";
$proto37["m_columns"][] = "refining_weight";
$proto37["m_columns"][] = "line_chat_url";
$proto37["m_columns"][] = "royal_customer_status";
$proto37["m_columns"][] = "is_business_customer";
$proto37["m_columns"][] = "is_exist_haisouhosyo";
$proto37["m_columns"][] = "meigi_hankaku_kana";
$proto37["m_columns"][] = "building_types";
$proto37["m_columns"][] = "dwelling_types";
$proto37["m_columns"][] = "is_yamato_csv";
$proto37["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "LEFT OUTER JOIN `Eoc` ON `mst_analysisMail_send_targets`.`ecc_id` = `Eoc`.`ecc_id`";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "mst_analysisMail_send_targets";
$proto38=array();
$proto38["m_sql"] = "`mst_analysisMail_send_targets`.`ecc_id` = `Eoc`.`ecc_id`";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "mst_analysisMail_send_targets",
	"m_srcTableName" => "mst_analysisMail_send_targets"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= `Eoc`.`ecc_id`";
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
	"m_strName" => "id",
	"m_strTable" => "mst_analysisMail_send_targets",
	"m_srcTableName" => "mst_analysisMail_send_targets"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 0;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_analysisMail_send_targets";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_analysisMail_send_targets = createSqlQuery_mst_analysisMail_send_targets();


	
		;

													

$tdatamst_analysisMail_send_targets[".sqlquery"] = $queryData_mst_analysisMail_send_targets;

$tableEvents["mst_analysisMail_send_targets"] = new eventsBase;
$tdatamst_analysisMail_send_targets[".hasEvents"] = false;

?>