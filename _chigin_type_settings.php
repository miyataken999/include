<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_chigin_type = array();
	$tdata_chigin_type[".truncateText"] = true;
	$tdata_chigin_type[".NumberOfChars"] = 80;
	$tdata_chigin_type[".ShortName"] = "_chigin_type";
	$tdata_chigin_type[".OwnerID"] = "";
	$tdata_chigin_type[".OriginalTable"] = "_chigin_type";

//	field labels
$fieldLabels_chigin_type = array();
$fieldToolTips_chigin_type = array();
$pageTitles_chigin_type = array();
$placeHolders_chigin_type = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_chigin_type["Japanese"] = array();
	$fieldToolTips_chigin_type["Japanese"] = array();
	$placeHolders_chigin_type["Japanese"] = array();
	$pageTitles_chigin_type["Japanese"] = array();
	$fieldLabels_chigin_type["Japanese"]["id"] = "Id";
	$fieldToolTips_chigin_type["Japanese"]["id"] = "";
	$placeHolders_chigin_type["Japanese"]["id"] = "";
	$fieldLabels_chigin_type["Japanese"]["name"] = "Name";
	$fieldToolTips_chigin_type["Japanese"]["name"] = "";
	$placeHolders_chigin_type["Japanese"]["name"] = "";
	$fieldLabels_chigin_type["Japanese"]["account_item"] = "勘定科目";
	$fieldToolTips_chigin_type["Japanese"]["account_item"] = "";
	$placeHolders_chigin_type["Japanese"]["account_item"] = "";
	$fieldLabels_chigin_type["Japanese"]["update_by"] = "更新者";
	$fieldToolTips_chigin_type["Japanese"]["update_by"] = "";
	$placeHolders_chigin_type["Japanese"]["update_by"] = "";
	$fieldLabels_chigin_type["Japanese"]["update_at"] = "更新日";
	$fieldToolTips_chigin_type["Japanese"]["update_at"] = "";
	$placeHolders_chigin_type["Japanese"]["update_at"] = "";
	$fieldLabels_chigin_type["Japanese"]["create_by"] = "登録者";
	$fieldToolTips_chigin_type["Japanese"]["create_by"] = "";
	$placeHolders_chigin_type["Japanese"]["create_by"] = "";
	$fieldLabels_chigin_type["Japanese"]["create_at"] = "登録日";
	$fieldToolTips_chigin_type["Japanese"]["create_at"] = "";
	$placeHolders_chigin_type["Japanese"]["create_at"] = "";
	$fieldLabels_chigin_type["Japanese"]["sort"] = "Sort";
	$fieldToolTips_chigin_type["Japanese"]["sort"] = "";
	$placeHolders_chigin_type["Japanese"]["sort"] = "";
	$fieldLabels_chigin_type["Japanese"]["group"] = "部門";
	$fieldToolTips_chigin_type["Japanese"]["group"] = "";
	$placeHolders_chigin_type["Japanese"]["group"] = "";
	$fieldLabels_chigin_type["Japanese"]["initial"] = "Initial";
	$fieldToolTips_chigin_type["Japanese"]["initial"] = "";
	$placeHolders_chigin_type["Japanese"]["initial"] = "";
	$fieldLabels_chigin_type["Japanese"]["seiyaku_status"] = "成約ステータス";
	$fieldToolTips_chigin_type["Japanese"]["seiyaku_status"] = "";
	$placeHolders_chigin_type["Japanese"]["seiyaku_status"] = "";
	$fieldLabels_chigin_type["Japanese"]["satei_status"] = "査定ステータス";
	$fieldToolTips_chigin_type["Japanese"]["satei_status"] = "";
	$placeHolders_chigin_type["Japanese"]["satei_status"] = "";
	$fieldLabels_chigin_type["Japanese"]["freee_account_item_id"] = "Freee 勘定科目";
	$fieldToolTips_chigin_type["Japanese"]["freee_account_item_id"] = "";
	$placeHolders_chigin_type["Japanese"]["freee_account_item_id"] = "";
	$fieldLabels_chigin_type["Japanese"]["freee_item_id"] = "Freee 品目";
	$fieldToolTips_chigin_type["Japanese"]["freee_item_id"] = "";
	$placeHolders_chigin_type["Japanese"]["freee_item_id"] = "";
	$fieldLabels_chigin_type["Japanese"]["freee_section_id"] = "Freee 部門";
	$fieldToolTips_chigin_type["Japanese"]["freee_section_id"] = "";
	$placeHolders_chigin_type["Japanese"]["freee_section_id"] = "";
	$fieldLabels_chigin_type["Japanese"]["freee_account_item_id_from_B"] = "Freee 勘定科目 From B";
	$fieldToolTips_chigin_type["Japanese"]["freee_account_item_id_from_B"] = "";
	$placeHolders_chigin_type["Japanese"]["freee_account_item_id_from_B"] = "";
	$fieldLabels_chigin_type["Japanese"]["freee_item_id_from_B"] = "Freee 品目 From B";
	$fieldToolTips_chigin_type["Japanese"]["freee_item_id_from_B"] = "";
	$placeHolders_chigin_type["Japanese"]["freee_item_id_from_B"] = "";
	$fieldLabels_chigin_type["Japanese"]["freee_section_id_from_B"] = "Freee 部門 From B";
	$fieldToolTips_chigin_type["Japanese"]["freee_section_id_from_B"] = "";
	$placeHolders_chigin_type["Japanese"]["freee_section_id_from_B"] = "";
	$fieldLabels_chigin_type["Japanese"]["haraidasi_id"] = "買取備考払出";
	$fieldToolTips_chigin_type["Japanese"]["haraidasi_id"] = "";
	$placeHolders_chigin_type["Japanese"]["haraidasi_id"] = "";
	if (count($fieldToolTips_chigin_type["Japanese"]))
		$tdata_chigin_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_chigin_type[""] = array();
	$fieldToolTips_chigin_type[""] = array();
	$placeHolders_chigin_type[""] = array();
	$pageTitles_chigin_type[""] = array();
	$fieldLabels_chigin_type[""]["id"] = "Id";
	$fieldToolTips_chigin_type[""]["id"] = "";
	$placeHolders_chigin_type[""]["id"] = "";
	$fieldLabels_chigin_type[""]["name"] = "Name";
	$fieldToolTips_chigin_type[""]["name"] = "";
	$placeHolders_chigin_type[""]["name"] = "";
	$fieldLabels_chigin_type[""]["account_item"] = "Account Item";
	$fieldToolTips_chigin_type[""]["account_item"] = "";
	$placeHolders_chigin_type[""]["account_item"] = "";
	$fieldLabels_chigin_type[""]["update_by"] = "Update By";
	$fieldToolTips_chigin_type[""]["update_by"] = "";
	$placeHolders_chigin_type[""]["update_by"] = "";
	$fieldLabels_chigin_type[""]["update_at"] = "Update At";
	$fieldToolTips_chigin_type[""]["update_at"] = "";
	$placeHolders_chigin_type[""]["update_at"] = "";
	$fieldLabels_chigin_type[""]["create_by"] = "Create By";
	$fieldToolTips_chigin_type[""]["create_by"] = "";
	$placeHolders_chigin_type[""]["create_by"] = "";
	$fieldLabels_chigin_type[""]["create_at"] = "Create At";
	$fieldToolTips_chigin_type[""]["create_at"] = "";
	$placeHolders_chigin_type[""]["create_at"] = "";
	$fieldLabels_chigin_type[""]["sort"] = "Sort";
	$fieldToolTips_chigin_type[""]["sort"] = "";
	$placeHolders_chigin_type[""]["sort"] = "";
	$fieldLabels_chigin_type[""]["group"] = "Group";
	$fieldToolTips_chigin_type[""]["group"] = "";
	$placeHolders_chigin_type[""]["group"] = "";
	$fieldLabels_chigin_type[""]["initial"] = "Initial";
	$fieldToolTips_chigin_type[""]["initial"] = "";
	$placeHolders_chigin_type[""]["initial"] = "";
	$fieldLabels_chigin_type[""]["seiyaku_status"] = "Seiyaku Status";
	$fieldToolTips_chigin_type[""]["seiyaku_status"] = "";
	$placeHolders_chigin_type[""]["seiyaku_status"] = "";
	$fieldLabels_chigin_type[""]["satei_status"] = "Satei Status";
	$fieldToolTips_chigin_type[""]["satei_status"] = "";
	$placeHolders_chigin_type[""]["satei_status"] = "";
	$fieldLabels_chigin_type[""]["freee_account_item_id"] = "Freee Account Item Id";
	$fieldToolTips_chigin_type[""]["freee_account_item_id"] = "";
	$placeHolders_chigin_type[""]["freee_account_item_id"] = "";
	$fieldLabels_chigin_type[""]["freee_item_id"] = "Freee Item Id";
	$fieldToolTips_chigin_type[""]["freee_item_id"] = "";
	$placeHolders_chigin_type[""]["freee_item_id"] = "";
	$fieldLabels_chigin_type[""]["freee_section_id"] = "Freee Section Id";
	$fieldToolTips_chigin_type[""]["freee_section_id"] = "";
	$placeHolders_chigin_type[""]["freee_section_id"] = "";
	$fieldLabels_chigin_type[""]["freee_account_item_id_from_B"] = "Freee Account Item Id From B";
	$fieldToolTips_chigin_type[""]["freee_account_item_id_from_B"] = "";
	$placeHolders_chigin_type[""]["freee_account_item_id_from_B"] = "";
	$fieldLabels_chigin_type[""]["freee_item_id_from_B"] = "Freee Item Id From B";
	$fieldToolTips_chigin_type[""]["freee_item_id_from_B"] = "";
	$placeHolders_chigin_type[""]["freee_item_id_from_B"] = "";
	$fieldLabels_chigin_type[""]["freee_section_id_from_B"] = "Freee Section Id From B";
	$fieldToolTips_chigin_type[""]["freee_section_id_from_B"] = "";
	$placeHolders_chigin_type[""]["freee_section_id_from_B"] = "";
	$fieldLabels_chigin_type[""]["haraidasi_id"] = "Haraidasi Id";
	$fieldToolTips_chigin_type[""]["haraidasi_id"] = "";
	$placeHolders_chigin_type[""]["haraidasi_id"] = "";
	if (count($fieldToolTips_chigin_type[""]))
		$tdata_chigin_type[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabels_chigin_type["English"] = array();
	$fieldToolTips_chigin_type["English"] = array();
	$placeHolders_chigin_type["English"] = array();
	$pageTitles_chigin_type["English"] = array();
	$fieldLabels_chigin_type["English"]["id"] = "Id";
	$fieldToolTips_chigin_type["English"]["id"] = "";
	$placeHolders_chigin_type["English"]["id"] = "";
	$fieldLabels_chigin_type["English"]["name"] = "Name";
	$fieldToolTips_chigin_type["English"]["name"] = "";
	$placeHolders_chigin_type["English"]["name"] = "";
	$fieldLabels_chigin_type["English"]["account_item"] = "Account Item";
	$fieldToolTips_chigin_type["English"]["account_item"] = "";
	$placeHolders_chigin_type["English"]["account_item"] = "";
	$fieldLabels_chigin_type["English"]["update_by"] = "Update By";
	$fieldToolTips_chigin_type["English"]["update_by"] = "";
	$placeHolders_chigin_type["English"]["update_by"] = "";
	$fieldLabels_chigin_type["English"]["update_at"] = "Update At";
	$fieldToolTips_chigin_type["English"]["update_at"] = "";
	$placeHolders_chigin_type["English"]["update_at"] = "";
	$fieldLabels_chigin_type["English"]["create_by"] = "Create By";
	$fieldToolTips_chigin_type["English"]["create_by"] = "";
	$placeHolders_chigin_type["English"]["create_by"] = "";
	$fieldLabels_chigin_type["English"]["create_at"] = "Create At";
	$fieldToolTips_chigin_type["English"]["create_at"] = "";
	$placeHolders_chigin_type["English"]["create_at"] = "";
	$fieldLabels_chigin_type["English"]["sort"] = "Sort";
	$fieldToolTips_chigin_type["English"]["sort"] = "";
	$placeHolders_chigin_type["English"]["sort"] = "";
	$fieldLabels_chigin_type["English"]["group"] = "Group";
	$fieldToolTips_chigin_type["English"]["group"] = "";
	$placeHolders_chigin_type["English"]["group"] = "";
	$fieldLabels_chigin_type["English"]["initial"] = "Initial";
	$fieldToolTips_chigin_type["English"]["initial"] = "";
	$placeHolders_chigin_type["English"]["initial"] = "";
	$fieldLabels_chigin_type["English"]["seiyaku_status"] = "Seiyaku Status";
	$fieldToolTips_chigin_type["English"]["seiyaku_status"] = "";
	$placeHolders_chigin_type["English"]["seiyaku_status"] = "";
	$fieldLabels_chigin_type["English"]["satei_status"] = "Satei Status";
	$fieldToolTips_chigin_type["English"]["satei_status"] = "";
	$placeHolders_chigin_type["English"]["satei_status"] = "";
	$fieldLabels_chigin_type["English"]["freee_account_item_id"] = "Freee Account Item Id";
	$fieldToolTips_chigin_type["English"]["freee_account_item_id"] = "";
	$placeHolders_chigin_type["English"]["freee_account_item_id"] = "";
	$fieldLabels_chigin_type["English"]["freee_item_id"] = "Freee Item Id";
	$fieldToolTips_chigin_type["English"]["freee_item_id"] = "";
	$placeHolders_chigin_type["English"]["freee_item_id"] = "";
	$fieldLabels_chigin_type["English"]["freee_section_id"] = "Freee Section Id";
	$fieldToolTips_chigin_type["English"]["freee_section_id"] = "";
	$placeHolders_chigin_type["English"]["freee_section_id"] = "";
	$fieldLabels_chigin_type["English"]["freee_account_item_id_from_B"] = "Freee Account Item Id From B";
	$fieldToolTips_chigin_type["English"]["freee_account_item_id_from_B"] = "";
	$placeHolders_chigin_type["English"]["freee_account_item_id_from_B"] = "";
	$fieldLabels_chigin_type["English"]["freee_item_id_from_B"] = "Freee Item Id From B";
	$fieldToolTips_chigin_type["English"]["freee_item_id_from_B"] = "";
	$placeHolders_chigin_type["English"]["freee_item_id_from_B"] = "";
	$fieldLabels_chigin_type["English"]["freee_section_id_from_B"] = "Freee Section Id From B";
	$fieldToolTips_chigin_type["English"]["freee_section_id_from_B"] = "";
	$placeHolders_chigin_type["English"]["freee_section_id_from_B"] = "";
	$fieldLabels_chigin_type["English"]["haraidasi_id"] = "Haraidasi Id";
	$fieldToolTips_chigin_type["English"]["haraidasi_id"] = "";
	$placeHolders_chigin_type["English"]["haraidasi_id"] = "";
	if (count($fieldToolTips_chigin_type["English"]))
		$tdata_chigin_type[".isUseToolTips"] = true;
}


	$tdata_chigin_type[".NCSearch"] = true;



$tdata_chigin_type[".shortTableName"] = "_chigin_type";
$tdata_chigin_type[".nSecOptions"] = 0;
$tdata_chigin_type[".recsPerRowPrint"] = 1;
$tdata_chigin_type[".mainTableOwnerID"] = "";
$tdata_chigin_type[".moveNext"] = 1;
$tdata_chigin_type[".entityType"] = 0;

$tdata_chigin_type[".strOriginalTableName"] = "_chigin_type";

	



$tdata_chigin_type[".showAddInPopup"] = false;

$tdata_chigin_type[".showEditInPopup"] = false;

$tdata_chigin_type[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_chigin_type[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_chigin_type[".fieldsForRegister"] = array();

$tdata_chigin_type[".listAjax"] = false;

	$tdata_chigin_type[".audit"] = true;

	$tdata_chigin_type[".locking"] = false;



$tdata_chigin_type[".list"] = true;

$tdata_chigin_type[".inlineEdit"] = true;


$tdata_chigin_type[".reorderRecordsByHeader"] = true;



$tdata_chigin_type[".inlineAdd"] = true;

$tdata_chigin_type[".import"] = true;

$tdata_chigin_type[".exportTo"] = true;


$tdata_chigin_type[".delete"] = true;

$tdata_chigin_type[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_chigin_type[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_chigin_type[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_chigin_type[".searchSaving"] = false;
//

$tdata_chigin_type[".showSearchPanel"] = true;
		$tdata_chigin_type[".flexibleSearch"] = true;

$tdata_chigin_type[".isUseAjaxSuggest"] = true;

$tdata_chigin_type[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdata_chigin_type[".ajaxCodeSnippetAdded"] = false;

$tdata_chigin_type[".buttonsAdded"] = false;

$tdata_chigin_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_chigin_type[".isUseTimeForSearch"] = false;





$tdata_chigin_type[".allSearchFields"] = array();
$tdata_chigin_type[".filterFields"] = array();
$tdata_chigin_type[".requiredSearchFields"] = array();

$tdata_chigin_type[".allSearchFields"][] = "id";
	$tdata_chigin_type[".allSearchFields"][] = "sort";
	$tdata_chigin_type[".allSearchFields"][] = "name";
	$tdata_chigin_type[".allSearchFields"][] = "freee_account_item_id";
	$tdata_chigin_type[".allSearchFields"][] = "freee_account_item_id_from_B";
	$tdata_chigin_type[".allSearchFields"][] = "freee_item_id";
	$tdata_chigin_type[".allSearchFields"][] = "freee_item_id_from_B";
	$tdata_chigin_type[".allSearchFields"][] = "freee_section_id";
	$tdata_chigin_type[".allSearchFields"][] = "freee_section_id_from_B";
	$tdata_chigin_type[".allSearchFields"][] = "initial";
	$tdata_chigin_type[".allSearchFields"][] = "haraidasi_id";
	$tdata_chigin_type[".allSearchFields"][] = "seiyaku_status";
	$tdata_chigin_type[".allSearchFields"][] = "satei_status";
	$tdata_chigin_type[".allSearchFields"][] = "account_item";
	$tdata_chigin_type[".allSearchFields"][] = "group";
	$tdata_chigin_type[".allSearchFields"][] = "update_by";
	$tdata_chigin_type[".allSearchFields"][] = "update_at";
	$tdata_chigin_type[".allSearchFields"][] = "create_by";
	$tdata_chigin_type[".allSearchFields"][] = "create_at";
	

$tdata_chigin_type[".googleLikeFields"] = array();
$tdata_chigin_type[".googleLikeFields"][] = "id";
$tdata_chigin_type[".googleLikeFields"][] = "name";
$tdata_chigin_type[".googleLikeFields"][] = "account_item";
$tdata_chigin_type[".googleLikeFields"][] = "update_by";
$tdata_chigin_type[".googleLikeFields"][] = "update_at";
$tdata_chigin_type[".googleLikeFields"][] = "create_by";
$tdata_chigin_type[".googleLikeFields"][] = "create_at";
$tdata_chigin_type[".googleLikeFields"][] = "sort";
$tdata_chigin_type[".googleLikeFields"][] = "group";
$tdata_chigin_type[".googleLikeFields"][] = "initial";
$tdata_chigin_type[".googleLikeFields"][] = "seiyaku_status";
$tdata_chigin_type[".googleLikeFields"][] = "satei_status";
$tdata_chigin_type[".googleLikeFields"][] = "freee_account_item_id";
$tdata_chigin_type[".googleLikeFields"][] = "freee_item_id";
$tdata_chigin_type[".googleLikeFields"][] = "freee_section_id";
$tdata_chigin_type[".googleLikeFields"][] = "freee_account_item_id_from_B";
$tdata_chigin_type[".googleLikeFields"][] = "freee_item_id_from_B";
$tdata_chigin_type[".googleLikeFields"][] = "freee_section_id_from_B";
$tdata_chigin_type[".googleLikeFields"][] = "haraidasi_id";


$tdata_chigin_type[".advSearchFields"] = array();
$tdata_chigin_type[".advSearchFields"][] = "id";
$tdata_chigin_type[".advSearchFields"][] = "sort";
$tdata_chigin_type[".advSearchFields"][] = "name";
$tdata_chigin_type[".advSearchFields"][] = "freee_account_item_id";
$tdata_chigin_type[".advSearchFields"][] = "freee_account_item_id_from_B";
$tdata_chigin_type[".advSearchFields"][] = "freee_item_id";
$tdata_chigin_type[".advSearchFields"][] = "freee_item_id_from_B";
$tdata_chigin_type[".advSearchFields"][] = "freee_section_id";
$tdata_chigin_type[".advSearchFields"][] = "freee_section_id_from_B";
$tdata_chigin_type[".advSearchFields"][] = "initial";
$tdata_chigin_type[".advSearchFields"][] = "haraidasi_id";
$tdata_chigin_type[".advSearchFields"][] = "seiyaku_status";
$tdata_chigin_type[".advSearchFields"][] = "satei_status";
$tdata_chigin_type[".advSearchFields"][] = "account_item";
$tdata_chigin_type[".advSearchFields"][] = "group";
$tdata_chigin_type[".advSearchFields"][] = "update_by";
$tdata_chigin_type[".advSearchFields"][] = "update_at";
$tdata_chigin_type[".advSearchFields"][] = "create_by";
$tdata_chigin_type[".advSearchFields"][] = "create_at";

$tdata_chigin_type[".tableType"] = "list";

$tdata_chigin_type[".printerPageOrientation"] = 0;
$tdata_chigin_type[".nPrinterPageScale"] = 100;

$tdata_chigin_type[".nPrinterSplitRecords"] = 40;

$tdata_chigin_type[".nPrinterPDFSplitRecords"] = 40;



$tdata_chigin_type[".geocodingEnabled"] = false;





$tdata_chigin_type[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_chigin_type[".pageSize"] = 100;

$tdata_chigin_type[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_chigin_type[".strOrderBy"] = $tstrOrderBy;

$tdata_chigin_type[".orderindexes"] = array();
$tdata_chigin_type[".orderindexes"][] = array(8, (1 ? "ASC" : "DESC"), "`sort`");

$tdata_chigin_type[".sqlHead"] = "SELECT `id`,  `name`,  `account_item`,  `update_by`,  `update_at`,  `create_by`,  `create_at`,  `sort`,  `group`,  `initial`,  `seiyaku_status`,  `satei_status`,  `freee_account_item_id`,  `freee_item_id`,  `freee_section_id`,  `freee_account_item_id_from_B`,  `freee_item_id_from_B`,  `freee_section_id_from_B`,  `haraidasi_id`";
$tdata_chigin_type[".sqlFrom"] = "FROM `_chigin_type`";
$tdata_chigin_type[".sqlWhereExpr"] = "";
$tdata_chigin_type[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_chigin_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_chigin_type[".arrGroupsPerPage"] = $arrGPP;

$tdata_chigin_type[".highlightSearchResults"] = true;

$tableKeys_chigin_type = array();
$tableKeys_chigin_type[] = "id";
$tdata_chigin_type[".Keys"] = $tableKeys_chigin_type;

$tdata_chigin_type[".listFields"] = array();
$tdata_chigin_type[".listFields"][] = "id";
$tdata_chigin_type[".listFields"][] = "sort";
$tdata_chigin_type[".listFields"][] = "name";
$tdata_chigin_type[".listFields"][] = "freee_account_item_id";
$tdata_chigin_type[".listFields"][] = "freee_account_item_id_from_B";
$tdata_chigin_type[".listFields"][] = "freee_item_id";
$tdata_chigin_type[".listFields"][] = "freee_item_id_from_B";
$tdata_chigin_type[".listFields"][] = "freee_section_id";
$tdata_chigin_type[".listFields"][] = "freee_section_id_from_B";
$tdata_chigin_type[".listFields"][] = "initial";
$tdata_chigin_type[".listFields"][] = "haraidasi_id";
$tdata_chigin_type[".listFields"][] = "seiyaku_status";
$tdata_chigin_type[".listFields"][] = "satei_status";
$tdata_chigin_type[".listFields"][] = "account_item";
$tdata_chigin_type[".listFields"][] = "group";
$tdata_chigin_type[".listFields"][] = "update_by";
$tdata_chigin_type[".listFields"][] = "update_at";
$tdata_chigin_type[".listFields"][] = "create_by";
$tdata_chigin_type[".listFields"][] = "create_at";

$tdata_chigin_type[".hideMobileList"] = array();


$tdata_chigin_type[".viewFields"] = array();

$tdata_chigin_type[".addFields"] = array();

$tdata_chigin_type[".masterListFields"] = array();
$tdata_chigin_type[".masterListFields"][] = "id";
$tdata_chigin_type[".masterListFields"][] = "sort";
$tdata_chigin_type[".masterListFields"][] = "name";
$tdata_chigin_type[".masterListFields"][] = "freee_account_item_id";
$tdata_chigin_type[".masterListFields"][] = "freee_account_item_id_from_B";
$tdata_chigin_type[".masterListFields"][] = "freee_item_id";
$tdata_chigin_type[".masterListFields"][] = "freee_item_id_from_B";
$tdata_chigin_type[".masterListFields"][] = "freee_section_id";
$tdata_chigin_type[".masterListFields"][] = "freee_section_id_from_B";
$tdata_chigin_type[".masterListFields"][] = "initial";
$tdata_chigin_type[".masterListFields"][] = "haraidasi_id";
$tdata_chigin_type[".masterListFields"][] = "seiyaku_status";
$tdata_chigin_type[".masterListFields"][] = "satei_status";
$tdata_chigin_type[".masterListFields"][] = "account_item";
$tdata_chigin_type[".masterListFields"][] = "group";
$tdata_chigin_type[".masterListFields"][] = "update_by";
$tdata_chigin_type[".masterListFields"][] = "update_at";
$tdata_chigin_type[".masterListFields"][] = "create_by";
$tdata_chigin_type[".masterListFields"][] = "create_at";

$tdata_chigin_type[".inlineAddFields"] = array();
$tdata_chigin_type[".inlineAddFields"][] = "sort";
$tdata_chigin_type[".inlineAddFields"][] = "name";
$tdata_chigin_type[".inlineAddFields"][] = "freee_account_item_id";
$tdata_chigin_type[".inlineAddFields"][] = "freee_account_item_id_from_B";
$tdata_chigin_type[".inlineAddFields"][] = "freee_item_id";
$tdata_chigin_type[".inlineAddFields"][] = "freee_item_id_from_B";
$tdata_chigin_type[".inlineAddFields"][] = "freee_section_id";
$tdata_chigin_type[".inlineAddFields"][] = "freee_section_id_from_B";
$tdata_chigin_type[".inlineAddFields"][] = "initial";
$tdata_chigin_type[".inlineAddFields"][] = "haraidasi_id";
$tdata_chigin_type[".inlineAddFields"][] = "seiyaku_status";
$tdata_chigin_type[".inlineAddFields"][] = "satei_status";
$tdata_chigin_type[".inlineAddFields"][] = "account_item";
$tdata_chigin_type[".inlineAddFields"][] = "group";

$tdata_chigin_type[".editFields"] = array();

$tdata_chigin_type[".inlineEditFields"] = array();
$tdata_chigin_type[".inlineEditFields"][] = "sort";
$tdata_chigin_type[".inlineEditFields"][] = "name";
$tdata_chigin_type[".inlineEditFields"][] = "freee_account_item_id";
$tdata_chigin_type[".inlineEditFields"][] = "freee_account_item_id_from_B";
$tdata_chigin_type[".inlineEditFields"][] = "freee_item_id";
$tdata_chigin_type[".inlineEditFields"][] = "freee_item_id_from_B";
$tdata_chigin_type[".inlineEditFields"][] = "freee_section_id";
$tdata_chigin_type[".inlineEditFields"][] = "freee_section_id_from_B";
$tdata_chigin_type[".inlineEditFields"][] = "initial";
$tdata_chigin_type[".inlineEditFields"][] = "haraidasi_id";
$tdata_chigin_type[".inlineEditFields"][] = "seiyaku_status";
$tdata_chigin_type[".inlineEditFields"][] = "satei_status";
$tdata_chigin_type[".inlineEditFields"][] = "account_item";
$tdata_chigin_type[".inlineEditFields"][] = "group";

$tdata_chigin_type[".updateSelectedFields"] = array();


$tdata_chigin_type[".exportFields"] = array();
$tdata_chigin_type[".exportFields"][] = "id";
$tdata_chigin_type[".exportFields"][] = "sort";
$tdata_chigin_type[".exportFields"][] = "name";
$tdata_chigin_type[".exportFields"][] = "freee_account_item_id";
$tdata_chigin_type[".exportFields"][] = "freee_account_item_id_from_B";
$tdata_chigin_type[".exportFields"][] = "freee_item_id";
$tdata_chigin_type[".exportFields"][] = "freee_item_id_from_B";
$tdata_chigin_type[".exportFields"][] = "freee_section_id";
$tdata_chigin_type[".exportFields"][] = "freee_section_id_from_B";
$tdata_chigin_type[".exportFields"][] = "initial";
$tdata_chigin_type[".exportFields"][] = "haraidasi_id";
$tdata_chigin_type[".exportFields"][] = "seiyaku_status";
$tdata_chigin_type[".exportFields"][] = "satei_status";
$tdata_chigin_type[".exportFields"][] = "account_item";
$tdata_chigin_type[".exportFields"][] = "group";
$tdata_chigin_type[".exportFields"][] = "update_by";
$tdata_chigin_type[".exportFields"][] = "update_at";
$tdata_chigin_type[".exportFields"][] = "create_by";
$tdata_chigin_type[".exportFields"][] = "create_at";

$tdata_chigin_type[".importFields"] = array();
$tdata_chigin_type[".importFields"][] = "id";
$tdata_chigin_type[".importFields"][] = "name";
$tdata_chigin_type[".importFields"][] = "account_item";
$tdata_chigin_type[".importFields"][] = "sort";
$tdata_chigin_type[".importFields"][] = "group";
$tdata_chigin_type[".importFields"][] = "initial";
$tdata_chigin_type[".importFields"][] = "seiyaku_status";
$tdata_chigin_type[".importFields"][] = "satei_status";
$tdata_chigin_type[".importFields"][] = "freee_account_item_id";
$tdata_chigin_type[".importFields"][] = "freee_item_id";
$tdata_chigin_type[".importFields"][] = "freee_section_id";
$tdata_chigin_type[".importFields"][] = "freee_account_item_id_from_B";
$tdata_chigin_type[".importFields"][] = "freee_item_id_from_B";
$tdata_chigin_type[".importFields"][] = "freee_section_id_from_B";
$tdata_chigin_type[".importFields"][] = "haraidasi_id";

$tdata_chigin_type[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
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




	$tdata_chigin_type["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`name`";

	
	
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




	$tdata_chigin_type["name"] = $fdata;
//	account_item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "account_item";
	$fdata["GoodName"] = "account_item";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","account_item");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "account_item";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`account_item`";

	
	
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
	$edata["LookupTable"] = "mst_journal_account_item";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
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




	$tdata_chigin_type["account_item"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_by`";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdata_chigin_type["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_at`";

	
	
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




	$tdata_chigin_type["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_by`";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdata_chigin_type["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_at`";

	
	
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




	$tdata_chigin_type["create_at"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sort`";

	
	
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




	$tdata_chigin_type["sort"] = $fdata;
//	group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "group";
	$fdata["GoodName"] = "group";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","group");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "group";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group`";

	
	
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
	$edata["LookupTable"] = "mst_journal_group";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
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




	$tdata_chigin_type["group"] = $fdata;
//	initial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "initial";
	$fdata["GoodName"] = "initial";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","initial");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "initial";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`initial`";

	
	
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




	$tdata_chigin_type["initial"] = $fdata;
//	seiyaku_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "seiyaku_status";
	$fdata["GoodName"] = "seiyaku_status";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","seiyaku_status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "seiyaku_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`seiyaku_status`";

	
	
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
	$edata["LookupTable"] = "_goods_status2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "goods_id";
	$edata["LinkFieldType"] = 0;
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdata_chigin_type["seiyaku_status"] = $fdata;
//	satei_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "satei_status";
	$fdata["GoodName"] = "satei_status";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","satei_status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`satei_status`";

	
	
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
	$edata["LookupTable"] = "_goods_status2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "goods_id";
	$edata["LinkFieldType"] = 0;
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdata_chigin_type["satei_status"] = $fdata;
//	freee_account_item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "freee_account_item_id";
	$fdata["GoodName"] = "freee_account_item_id";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","freee_account_item_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_account_item_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_account_item_id`";

	
	
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




	$tdata_chigin_type["freee_account_item_id"] = $fdata;
//	freee_item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "freee_item_id";
	$fdata["GoodName"] = "freee_item_id";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","freee_item_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_item_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_item_id`";

	
	
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




	$tdata_chigin_type["freee_item_id"] = $fdata;
//	freee_section_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "freee_section_id";
	$fdata["GoodName"] = "freee_section_id";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","freee_section_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_section_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_section_id`";

	
	
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

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
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




	$tdata_chigin_type["freee_section_id"] = $fdata;
//	freee_account_item_id_from_B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "freee_account_item_id_from_B";
	$fdata["GoodName"] = "freee_account_item_id_from_B";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","freee_account_item_id_from_B");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_account_item_id_from_B";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_account_item_id_from_B`";

	
	
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




	$tdata_chigin_type["freee_account_item_id_from_B"] = $fdata;
//	freee_item_id_from_B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "freee_item_id_from_B";
	$fdata["GoodName"] = "freee_item_id_from_B";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","freee_item_id_from_B");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_item_id_from_B";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_item_id_from_B`";

	
	
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




	$tdata_chigin_type["freee_item_id_from_B"] = $fdata;
//	freee_section_id_from_B
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "freee_section_id_from_B";
	$fdata["GoodName"] = "freee_section_id_from_B";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","freee_section_id_from_B");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_section_id_from_B";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_section_id_from_B`";

	
	
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

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
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




	$tdata_chigin_type["freee_section_id_from_B"] = $fdata;
//	haraidasi_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "haraidasi_id";
	$fdata["GoodName"] = "haraidasi_id";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("_chigin_type","haraidasi_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "haraidasi_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`haraidasi_id`";

	
	
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
	$edata["LookupTable"] = "haraidasi";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "haraidasi_name";

	
	$edata["LookupOrderBy"] = "id";

	
	
	
	

	
	
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




	$tdata_chigin_type["haraidasi_id"] = $fdata;


$tables_data["_chigin_type"]=&$tdata_chigin_type;
$field_labels["_chigin_type"] = &$fieldLabels_chigin_type;
$fieldToolTips["_chigin_type"] = &$fieldToolTips_chigin_type;
$placeHolders["_chigin_type"] = &$placeHolders_chigin_type;
$page_titles["_chigin_type"] = &$pageTitles_chigin_type;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_chigin_type"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_chigin_type"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__chigin_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name`,  `account_item`,  `update_by`,  `update_at`,  `create_by`,  `create_at`,  `sort`,  `group`,  `initial`,  `seiyaku_status`,  `satei_status`,  `freee_account_item_id`,  `freee_item_id`,  `freee_section_id`,  `freee_account_item_id_from_B`,  `freee_item_id_from_B`,  `freee_section_id_from_B`,  `haraidasi_id`";
$proto0["m_strFrom"] = "FROM `_chigin_type`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `sort`";
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
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "_chigin_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto8["m_sql"] = "`name`";
$proto8["m_srcTableName"] = "_chigin_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "account_item",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto10["m_sql"] = "`account_item`";
$proto10["m_srcTableName"] = "_chigin_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto12["m_sql"] = "`update_by`";
$proto12["m_srcTableName"] = "_chigin_type";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto14["m_sql"] = "`update_at`";
$proto14["m_srcTableName"] = "_chigin_type";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto16["m_sql"] = "`create_by`";
$proto16["m_srcTableName"] = "_chigin_type";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto18["m_sql"] = "`create_at`";
$proto18["m_srcTableName"] = "_chigin_type";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto20["m_sql"] = "`sort`";
$proto20["m_srcTableName"] = "_chigin_type";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "group",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto22["m_sql"] = "`group`";
$proto22["m_srcTableName"] = "_chigin_type";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "initial",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto24["m_sql"] = "`initial`";
$proto24["m_srcTableName"] = "_chigin_type";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "seiyaku_status",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto26["m_sql"] = "`seiyaku_status`";
$proto26["m_srcTableName"] = "_chigin_type";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_status",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto28["m_sql"] = "`satei_status`";
$proto28["m_srcTableName"] = "_chigin_type";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_account_item_id",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto30["m_sql"] = "`freee_account_item_id`";
$proto30["m_srcTableName"] = "_chigin_type";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_item_id",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto32["m_sql"] = "`freee_item_id`";
$proto32["m_srcTableName"] = "_chigin_type";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_section_id",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto34["m_sql"] = "`freee_section_id`";
$proto34["m_srcTableName"] = "_chigin_type";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_account_item_id_from_B",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto36["m_sql"] = "`freee_account_item_id_from_B`";
$proto36["m_srcTableName"] = "_chigin_type";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_item_id_from_B",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto38["m_sql"] = "`freee_item_id_from_B`";
$proto38["m_srcTableName"] = "_chigin_type";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_section_id_from_B",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto40["m_sql"] = "`freee_section_id_from_B`";
$proto40["m_srcTableName"] = "_chigin_type";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "haraidasi_id",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto42["m_sql"] = "`haraidasi_id`";
$proto42["m_srcTableName"] = "_chigin_type";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "_chigin_type";
$proto45["m_srcTableName"] = "_chigin_type";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id";
$proto45["m_columns"][] = "name";
$proto45["m_columns"][] = "account_item";
$proto45["m_columns"][] = "update_by";
$proto45["m_columns"][] = "update_at";
$proto45["m_columns"][] = "create_by";
$proto45["m_columns"][] = "create_at";
$proto45["m_columns"][] = "sort";
$proto45["m_columns"][] = "group";
$proto45["m_columns"][] = "initial";
$proto45["m_columns"][] = "seiyaku_status";
$proto45["m_columns"][] = "satei_status";
$proto45["m_columns"][] = "freee_account_item_id";
$proto45["m_columns"][] = "freee_item_id";
$proto45["m_columns"][] = "freee_section_id";
$proto45["m_columns"][] = "freee_account_item_id_from_B";
$proto45["m_columns"][] = "freee_item_id_from_B";
$proto45["m_columns"][] = "freee_section_id_from_B";
$proto45["m_columns"][] = "use_many_satei";
$proto45["m_columns"][] = "haraidasi_id";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "`_chigin_type`";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "_chigin_type";
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
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "_chigin_type"
));

$proto48["m_column"]=$obj;
$proto48["m_bAsc"] = 1;
$proto48["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto48);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="_chigin_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__chigin_type = createSqlQuery__chigin_type();


	
		;

																			

$tdata_chigin_type[".sqlquery"] = $queryData__chigin_type;

include_once(getabspath("include/_chigin_type_events.php"));
$tableEvents["_chigin_type"] = new eventclass__chigin_type;
$tdata_chigin_type[".hasEvents"] = true;

?>