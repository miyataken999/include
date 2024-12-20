<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_apportionment_rules = array();
	$tdatafreee_apportionment_rules[".truncateText"] = true;
	$tdatafreee_apportionment_rules[".NumberOfChars"] = 80;
	$tdatafreee_apportionment_rules[".ShortName"] = "freee_apportionment_rules";
	$tdatafreee_apportionment_rules[".OwnerID"] = "";
	$tdatafreee_apportionment_rules[".OriginalTable"] = "freee_apportionment_rules";

//	field labels
$fieldLabelsfreee_apportionment_rules = array();
$fieldToolTipsfreee_apportionment_rules = array();
$pageTitlesfreee_apportionment_rules = array();
$placeHoldersfreee_apportionment_rules = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_apportionment_rules["Japanese"] = array();
	$fieldToolTipsfreee_apportionment_rules["Japanese"] = array();
	$placeHoldersfreee_apportionment_rules["Japanese"] = array();
	$pageTitlesfreee_apportionment_rules["Japanese"] = array();
	$fieldLabelsfreee_apportionment_rules["Japanese"]["id"] = "按分ルールId";
	$fieldToolTipsfreee_apportionment_rules["Japanese"]["id"] = "";
	$placeHoldersfreee_apportionment_rules["Japanese"]["id"] = "";
	$fieldLabelsfreee_apportionment_rules["Japanese"]["account_item_id"] = "勘定科目";
	$fieldToolTipsfreee_apportionment_rules["Japanese"]["account_item_id"] = "";
	$placeHoldersfreee_apportionment_rules["Japanese"]["account_item_id"] = "";
	$fieldLabelsfreee_apportionment_rules["Japanese"]["partner_id"] = "取引先";
	$fieldToolTipsfreee_apportionment_rules["Japanese"]["partner_id"] = "";
	$placeHoldersfreee_apportionment_rules["Japanese"]["partner_id"] = "";
	$fieldLabelsfreee_apportionment_rules["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsfreee_apportionment_rules["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_apportionment_rules["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_apportionment_rules["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsfreee_apportionment_rules["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_apportionment_rules["Japanese"]["updated_by"] = "";
	$fieldLabelsfreee_apportionment_rules["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsfreee_apportionment_rules["Japanese"]["created_at"] = "";
	$placeHoldersfreee_apportionment_rules["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_apportionment_rules["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsfreee_apportionment_rules["Japanese"]["created_by"] = "";
	$placeHoldersfreee_apportionment_rules["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_apportionment_rules["Japanese"]["account_category"] = "勘定科目小分類";
	$fieldToolTipsfreee_apportionment_rules["Japanese"]["account_category"] = "";
	$placeHoldersfreee_apportionment_rules["Japanese"]["account_category"] = "";
	$fieldLabelsfreee_apportionment_rules["Japanese"]["calc_base"] = "集計ベース";
	$fieldToolTipsfreee_apportionment_rules["Japanese"]["calc_base"] = "";
	$placeHoldersfreee_apportionment_rules["Japanese"]["calc_base"] = "";
	$fieldLabelsfreee_apportionment_rules["Japanese"]["is_not_anbun"] = "配賦/按分しない";
	$fieldToolTipsfreee_apportionment_rules["Japanese"]["is_not_anbun"] = "";
	$placeHoldersfreee_apportionment_rules["Japanese"]["is_not_anbun"] = "";
	$fieldLabelsfreee_apportionment_rules["Japanese"]["sort"] = "Sort";
	$fieldToolTipsfreee_apportionment_rules["Japanese"]["sort"] = "";
	$placeHoldersfreee_apportionment_rules["Japanese"]["sort"] = "";
	if (count($fieldToolTipsfreee_apportionment_rules["Japanese"]))
		$tdatafreee_apportionment_rules[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_apportionment_rules[""] = array();
	$fieldToolTipsfreee_apportionment_rules[""] = array();
	$placeHoldersfreee_apportionment_rules[""] = array();
	$pageTitlesfreee_apportionment_rules[""] = array();
	$fieldLabelsfreee_apportionment_rules[""]["id"] = "Id";
	$fieldToolTipsfreee_apportionment_rules[""]["id"] = "";
	$placeHoldersfreee_apportionment_rules[""]["id"] = "";
	$fieldLabelsfreee_apportionment_rules[""]["account_item_id"] = "Account Item Id";
	$fieldToolTipsfreee_apportionment_rules[""]["account_item_id"] = "";
	$placeHoldersfreee_apportionment_rules[""]["account_item_id"] = "";
	$fieldLabelsfreee_apportionment_rules[""]["partner_id"] = "Partner Id";
	$fieldToolTipsfreee_apportionment_rules[""]["partner_id"] = "";
	$placeHoldersfreee_apportionment_rules[""]["partner_id"] = "";
	$fieldLabelsfreee_apportionment_rules[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_apportionment_rules[""]["updated_at"] = "";
	$placeHoldersfreee_apportionment_rules[""]["updated_at"] = "";
	$fieldLabelsfreee_apportionment_rules[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_apportionment_rules[""]["updated_by"] = "";
	$placeHoldersfreee_apportionment_rules[""]["updated_by"] = "";
	$fieldLabelsfreee_apportionment_rules[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_apportionment_rules[""]["created_at"] = "";
	$placeHoldersfreee_apportionment_rules[""]["created_at"] = "";
	$fieldLabelsfreee_apportionment_rules[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_apportionment_rules[""]["created_by"] = "";
	$placeHoldersfreee_apportionment_rules[""]["created_by"] = "";
	$fieldLabelsfreee_apportionment_rules[""]["account_category"] = "Account Category";
	$fieldToolTipsfreee_apportionment_rules[""]["account_category"] = "";
	$placeHoldersfreee_apportionment_rules[""]["account_category"] = "";
	$fieldLabelsfreee_apportionment_rules[""]["calc_base"] = "Calc Base";
	$fieldToolTipsfreee_apportionment_rules[""]["calc_base"] = "";
	$placeHoldersfreee_apportionment_rules[""]["calc_base"] = "";
	$fieldLabelsfreee_apportionment_rules[""]["is_not_anbun"] = "Is Not Anbun";
	$fieldToolTipsfreee_apportionment_rules[""]["is_not_anbun"] = "";
	$placeHoldersfreee_apportionment_rules[""]["is_not_anbun"] = "";
	$fieldLabelsfreee_apportionment_rules[""]["sort"] = "Sort";
	$fieldToolTipsfreee_apportionment_rules[""]["sort"] = "";
	$placeHoldersfreee_apportionment_rules[""]["sort"] = "";
	if (count($fieldToolTipsfreee_apportionment_rules[""]))
		$tdatafreee_apportionment_rules[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_apportionment_rules["English"] = array();
	$fieldToolTipsfreee_apportionment_rules["English"] = array();
	$placeHoldersfreee_apportionment_rules["English"] = array();
	$pageTitlesfreee_apportionment_rules["English"] = array();
	$fieldLabelsfreee_apportionment_rules["English"]["id"] = "Id";
	$fieldToolTipsfreee_apportionment_rules["English"]["id"] = "";
	$placeHoldersfreee_apportionment_rules["English"]["id"] = "";
	$fieldLabelsfreee_apportionment_rules["English"]["account_item_id"] = "Account Item Id";
	$fieldToolTipsfreee_apportionment_rules["English"]["account_item_id"] = "";
	$placeHoldersfreee_apportionment_rules["English"]["account_item_id"] = "";
	$fieldLabelsfreee_apportionment_rules["English"]["partner_id"] = "Partner Id";
	$fieldToolTipsfreee_apportionment_rules["English"]["partner_id"] = "";
	$placeHoldersfreee_apportionment_rules["English"]["partner_id"] = "";
	$fieldLabelsfreee_apportionment_rules["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_apportionment_rules["English"]["updated_at"] = "";
	$placeHoldersfreee_apportionment_rules["English"]["updated_at"] = "";
	$fieldLabelsfreee_apportionment_rules["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_apportionment_rules["English"]["updated_by"] = "";
	$placeHoldersfreee_apportionment_rules["English"]["updated_by"] = "";
	$fieldLabelsfreee_apportionment_rules["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_apportionment_rules["English"]["created_at"] = "";
	$placeHoldersfreee_apportionment_rules["English"]["created_at"] = "";
	$fieldLabelsfreee_apportionment_rules["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_apportionment_rules["English"]["created_by"] = "";
	$placeHoldersfreee_apportionment_rules["English"]["created_by"] = "";
	$fieldLabelsfreee_apportionment_rules["English"]["account_category"] = "Account Category";
	$fieldToolTipsfreee_apportionment_rules["English"]["account_category"] = "";
	$placeHoldersfreee_apportionment_rules["English"]["account_category"] = "";
	$fieldLabelsfreee_apportionment_rules["English"]["calc_base"] = "Calc Base";
	$fieldToolTipsfreee_apportionment_rules["English"]["calc_base"] = "";
	$placeHoldersfreee_apportionment_rules["English"]["calc_base"] = "";
	$fieldLabelsfreee_apportionment_rules["English"]["is_not_anbun"] = "Is Not Anbun";
	$fieldToolTipsfreee_apportionment_rules["English"]["is_not_anbun"] = "";
	$placeHoldersfreee_apportionment_rules["English"]["is_not_anbun"] = "";
	$fieldLabelsfreee_apportionment_rules["English"]["sort"] = "Sort";
	$fieldToolTipsfreee_apportionment_rules["English"]["sort"] = "";
	$placeHoldersfreee_apportionment_rules["English"]["sort"] = "";
	if (count($fieldToolTipsfreee_apportionment_rules["English"]))
		$tdatafreee_apportionment_rules[".isUseToolTips"] = true;
}


	$tdatafreee_apportionment_rules[".NCSearch"] = true;



$tdatafreee_apportionment_rules[".shortTableName"] = "freee_apportionment_rules";
$tdatafreee_apportionment_rules[".nSecOptions"] = 0;
$tdatafreee_apportionment_rules[".recsPerRowPrint"] = 1;
$tdatafreee_apportionment_rules[".mainTableOwnerID"] = "";
$tdatafreee_apportionment_rules[".moveNext"] = 1;
$tdatafreee_apportionment_rules[".entityType"] = 0;

$tdatafreee_apportionment_rules[".strOriginalTableName"] = "freee_apportionment_rules";

	



$tdatafreee_apportionment_rules[".showAddInPopup"] = false;

$tdatafreee_apportionment_rules[".showEditInPopup"] = false;

$tdatafreee_apportionment_rules[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_apportionment_rules[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_apportionment_rules[".fieldsForRegister"] = array();

$tdatafreee_apportionment_rules[".listAjax"] = false;

	$tdatafreee_apportionment_rules[".audit"] = false;

	$tdatafreee_apportionment_rules[".locking"] = false;



$tdatafreee_apportionment_rules[".list"] = true;

$tdatafreee_apportionment_rules[".inlineEdit"] = true;


$tdatafreee_apportionment_rules[".reorderRecordsByHeader"] = true;



$tdatafreee_apportionment_rules[".inlineAdd"] = true;

$tdatafreee_apportionment_rules[".import"] = true;

$tdatafreee_apportionment_rules[".exportTo"] = true;


$tdatafreee_apportionment_rules[".delete"] = true;

$tdatafreee_apportionment_rules[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_apportionment_rules[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_apportionment_rules[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_apportionment_rules[".searchSaving"] = false;
//

$tdatafreee_apportionment_rules[".showSearchPanel"] = true;
		$tdatafreee_apportionment_rules[".flexibleSearch"] = true;

$tdatafreee_apportionment_rules[".isUseAjaxSuggest"] = true;

$tdatafreee_apportionment_rules[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_apportionment_rules[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_apportionment_rules[".buttonsAdded"] = false;

$tdatafreee_apportionment_rules[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_apportionment_rules[".isUseTimeForSearch"] = false;




$tdatafreee_apportionment_rules[".detailsLinksOnList"] = "1";

$tdatafreee_apportionment_rules[".allSearchFields"] = array();
$tdatafreee_apportionment_rules[".filterFields"] = array();
$tdatafreee_apportionment_rules[".requiredSearchFields"] = array();

$tdatafreee_apportionment_rules[".allSearchFields"][] = "id";
	$tdatafreee_apportionment_rules[".allSearchFields"][] = "sort";
	$tdatafreee_apportionment_rules[".allSearchFields"][] = "account_category";
	$tdatafreee_apportionment_rules[".allSearchFields"][] = "account_item_id";
	$tdatafreee_apportionment_rules[".allSearchFields"][] = "calc_base";
	$tdatafreee_apportionment_rules[".allSearchFields"][] = "is_not_anbun";
	$tdatafreee_apportionment_rules[".allSearchFields"][] = "updated_at";
	$tdatafreee_apportionment_rules[".allSearchFields"][] = "updated_by";
	$tdatafreee_apportionment_rules[".allSearchFields"][] = "created_at";
	$tdatafreee_apportionment_rules[".allSearchFields"][] = "created_by";
	

$tdatafreee_apportionment_rules[".googleLikeFields"] = array();
$tdatafreee_apportionment_rules[".googleLikeFields"][] = "id";
$tdatafreee_apportionment_rules[".googleLikeFields"][] = "account_item_id";
$tdatafreee_apportionment_rules[".googleLikeFields"][] = "updated_at";
$tdatafreee_apportionment_rules[".googleLikeFields"][] = "updated_by";
$tdatafreee_apportionment_rules[".googleLikeFields"][] = "created_at";
$tdatafreee_apportionment_rules[".googleLikeFields"][] = "created_by";
$tdatafreee_apportionment_rules[".googleLikeFields"][] = "account_category";
$tdatafreee_apportionment_rules[".googleLikeFields"][] = "calc_base";
$tdatafreee_apportionment_rules[".googleLikeFields"][] = "is_not_anbun";
$tdatafreee_apportionment_rules[".googleLikeFields"][] = "sort";

$tdatafreee_apportionment_rules[".panelSearchFields"] = array();
$tdatafreee_apportionment_rules[".searchPanelOptions"] = array();
$tdatafreee_apportionment_rules[".panelSearchFields"][] = "id";
	$tdatafreee_apportionment_rules[".panelSearchFields"][] = "account_category";
	$tdatafreee_apportionment_rules[".panelSearchFields"][] = "account_item_id";
	$tdatafreee_apportionment_rules[".panelSearchFields"][] = "calc_base";
	$tdatafreee_apportionment_rules[".panelSearchFields"][] = "is_not_anbun";
	
$tdatafreee_apportionment_rules[".advSearchFields"] = array();
$tdatafreee_apportionment_rules[".advSearchFields"][] = "id";
$tdatafreee_apportionment_rules[".advSearchFields"][] = "sort";
$tdatafreee_apportionment_rules[".advSearchFields"][] = "account_category";
$tdatafreee_apportionment_rules[".advSearchFields"][] = "account_item_id";
$tdatafreee_apportionment_rules[".advSearchFields"][] = "calc_base";
$tdatafreee_apportionment_rules[".advSearchFields"][] = "is_not_anbun";
$tdatafreee_apportionment_rules[".advSearchFields"][] = "updated_at";
$tdatafreee_apportionment_rules[".advSearchFields"][] = "updated_by";
$tdatafreee_apportionment_rules[".advSearchFields"][] = "created_at";
$tdatafreee_apportionment_rules[".advSearchFields"][] = "created_by";

$tdatafreee_apportionment_rules[".tableType"] = "list";

$tdatafreee_apportionment_rules[".printerPageOrientation"] = 0;
$tdatafreee_apportionment_rules[".nPrinterPageScale"] = 100;

$tdatafreee_apportionment_rules[".nPrinterSplitRecords"] = 40;

$tdatafreee_apportionment_rules[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_apportionment_rules[".geocodingEnabled"] = false;





$tdatafreee_apportionment_rules[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_apportionment_rules[".pageSize"] = 20;

$tdatafreee_apportionment_rules[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `freee_apportionment_rules`.`sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_apportionment_rules[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_apportionment_rules[".orderindexes"] = array();
$tdatafreee_apportionment_rules[".orderindexes"][] = array(11, (1 ? "ASC" : "DESC"), "`freee_apportionment_rules`.`sort`");

$tdatafreee_apportionment_rules[".sqlHead"] = "SELECT `freee_apportionment_rules`.`id`,  `freee_apportionment_rules`.`account_item_id`,  `freee_apportionment_rules`.`partner_id`,  `freee_apportionment_rules`.`updated_at`,  `freee_apportionment_rules`.`updated_by`,  `freee_apportionment_rules`.`created_at`,  `freee_apportionment_rules`.`created_by`,  `freee_account_items`.`account_category`,  `freee_apportionment_rules`.`calc_base`,  `freee_account_items`.`is_not_anbun`,  `freee_apportionment_rules`.`sort`";
$tdatafreee_apportionment_rules[".sqlFrom"] = "FROM `freee_apportionment_rules`  LEFT OUTER JOIN `freee_account_items` ON `freee_apportionment_rules`.`account_item_id` = `freee_account_items`.`id`";
$tdatafreee_apportionment_rules[".sqlWhereExpr"] = "";
$tdatafreee_apportionment_rules[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_apportionment_rules[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_apportionment_rules[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_apportionment_rules[".highlightSearchResults"] = true;

$tableKeysfreee_apportionment_rules = array();
$tableKeysfreee_apportionment_rules[] = "id";
$tdatafreee_apportionment_rules[".Keys"] = $tableKeysfreee_apportionment_rules;

$tdatafreee_apportionment_rules[".listFields"] = array();
$tdatafreee_apportionment_rules[".listFields"][] = "id";
$tdatafreee_apportionment_rules[".listFields"][] = "sort";
$tdatafreee_apportionment_rules[".listFields"][] = "account_category";
$tdatafreee_apportionment_rules[".listFields"][] = "account_item_id";
$tdatafreee_apportionment_rules[".listFields"][] = "calc_base";
$tdatafreee_apportionment_rules[".listFields"][] = "is_not_anbun";
$tdatafreee_apportionment_rules[".listFields"][] = "updated_at";
$tdatafreee_apportionment_rules[".listFields"][] = "updated_by";
$tdatafreee_apportionment_rules[".listFields"][] = "created_at";
$tdatafreee_apportionment_rules[".listFields"][] = "created_by";

$tdatafreee_apportionment_rules[".hideMobileList"] = array();


$tdatafreee_apportionment_rules[".viewFields"] = array();

$tdatafreee_apportionment_rules[".addFields"] = array();

$tdatafreee_apportionment_rules[".masterListFields"] = array();
$tdatafreee_apportionment_rules[".masterListFields"][] = "id";
$tdatafreee_apportionment_rules[".masterListFields"][] = "sort";
$tdatafreee_apportionment_rules[".masterListFields"][] = "account_category";
$tdatafreee_apportionment_rules[".masterListFields"][] = "account_item_id";
$tdatafreee_apportionment_rules[".masterListFields"][] = "calc_base";
$tdatafreee_apportionment_rules[".masterListFields"][] = "is_not_anbun";
$tdatafreee_apportionment_rules[".masterListFields"][] = "updated_at";
$tdatafreee_apportionment_rules[".masterListFields"][] = "updated_by";
$tdatafreee_apportionment_rules[".masterListFields"][] = "created_at";
$tdatafreee_apportionment_rules[".masterListFields"][] = "created_by";

$tdatafreee_apportionment_rules[".inlineAddFields"] = array();
$tdatafreee_apportionment_rules[".inlineAddFields"][] = "sort";
$tdatafreee_apportionment_rules[".inlineAddFields"][] = "account_item_id";
$tdatafreee_apportionment_rules[".inlineAddFields"][] = "calc_base";

$tdatafreee_apportionment_rules[".editFields"] = array();

$tdatafreee_apportionment_rules[".inlineEditFields"] = array();
$tdatafreee_apportionment_rules[".inlineEditFields"][] = "sort";
$tdatafreee_apportionment_rules[".inlineEditFields"][] = "account_item_id";
$tdatafreee_apportionment_rules[".inlineEditFields"][] = "calc_base";

$tdatafreee_apportionment_rules[".updateSelectedFields"] = array();


$tdatafreee_apportionment_rules[".exportFields"] = array();
$tdatafreee_apportionment_rules[".exportFields"][] = "id";
$tdatafreee_apportionment_rules[".exportFields"][] = "sort";
$tdatafreee_apportionment_rules[".exportFields"][] = "account_category";
$tdatafreee_apportionment_rules[".exportFields"][] = "account_item_id";
$tdatafreee_apportionment_rules[".exportFields"][] = "calc_base";
$tdatafreee_apportionment_rules[".exportFields"][] = "is_not_anbun";
$tdatafreee_apportionment_rules[".exportFields"][] = "updated_at";
$tdatafreee_apportionment_rules[".exportFields"][] = "updated_by";
$tdatafreee_apportionment_rules[".exportFields"][] = "created_at";
$tdatafreee_apportionment_rules[".exportFields"][] = "created_by";

$tdatafreee_apportionment_rules[".importFields"] = array();
$tdatafreee_apportionment_rules[".importFields"][] = "id";
$tdatafreee_apportionment_rules[".importFields"][] = "account_item_id";
$tdatafreee_apportionment_rules[".importFields"][] = "calc_base";
$tdatafreee_apportionment_rules[".importFields"][] = "sort";

$tdatafreee_apportionment_rules[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_apportionment_rules";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rules","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_apportionment_rules`.`id`";

	
	
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




	$tdatafreee_apportionment_rules["id"] = $fdata;
//	account_item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "account_item_id";
	$fdata["GoodName"] = "account_item_id";
	$fdata["ownerTable"] = "freee_apportionment_rules";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rules","account_item_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "account_item_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_apportionment_rules`.`account_item_id`";

	
	
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




	$tdatafreee_apportionment_rules["account_item_id"] = $fdata;
//	partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "partner_id";
	$fdata["GoodName"] = "partner_id";
	$fdata["ownerTable"] = "freee_apportionment_rules";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rules","partner_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "partner_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_apportionment_rules`.`partner_id`";

	
	
			
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








	$tdatafreee_apportionment_rules["partner_id"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_apportionment_rules";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rules","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_apportionment_rules`.`updated_at`";

	
	
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




	$tdatafreee_apportionment_rules["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_apportionment_rules";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rules","updated_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_apportionment_rules`.`updated_by`";

	
	
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




	$tdatafreee_apportionment_rules["updated_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_apportionment_rules";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rules","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_apportionment_rules`.`created_at`";

	
	
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




	$tdatafreee_apportionment_rules["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_apportionment_rules";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rules","created_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_apportionment_rules`.`created_by`";

	
	
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




	$tdatafreee_apportionment_rules["created_by"] = $fdata;
//	account_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "account_category";
	$fdata["GoodName"] = "account_category";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rules","account_category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "account_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_account_items`.`account_category`";

	
	
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
	$edata["LookupTable"] = "vw_freee_account_category";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "account_category";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "account_category";

	
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




	$tdatafreee_apportionment_rules["account_category"] = $fdata;
//	calc_base
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "calc_base";
	$fdata["GoodName"] = "calc_base";
	$fdata["ownerTable"] = "freee_apportionment_rules";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rules","calc_base");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "calc_base";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_apportionment_rules`.`calc_base`";

	
	
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
	$edata["LookupTable"] = "mst_freee_apportionment_rule_calc_bases";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
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




	$tdatafreee_apportionment_rules["calc_base"] = $fdata;
//	is_not_anbun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "is_not_anbun";
	$fdata["GoodName"] = "is_not_anbun";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rules","is_not_anbun");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_not_anbun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_account_items`.`is_not_anbun`";

	
	
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




	$tdatafreee_apportionment_rules["is_not_anbun"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "freee_apportionment_rules";
	$fdata["Label"] = GetFieldLabel("freee_apportionment_rules","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_apportionment_rules`.`sort`";

	
	
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




	$tdatafreee_apportionment_rules["sort"] = $fdata;


$tables_data["freee_apportionment_rules"]=&$tdatafreee_apportionment_rules;
$field_labels["freee_apportionment_rules"] = &$fieldLabelsfreee_apportionment_rules;
$fieldToolTips["freee_apportionment_rules"] = &$fieldToolTipsfreee_apportionment_rules;
$placeHolders["freee_apportionment_rules"] = &$placeHoldersfreee_apportionment_rules;
$page_titles["freee_apportionment_rules"] = &$pageTitlesfreee_apportionment_rules;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_apportionment_rules"] = array();
//	freee_apportionment_rule_detail
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="freee_apportionment_rule_detail";
		$detailsParam["dOriginalTable"] = "freee_apportionment_rule_detail";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "freee_apportionment_rule_detail";
	$detailsParam["dCaptionTable"] = GetTableCaption("freee_apportionment_rule_detail");
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
		
	$detailsTablesData["freee_apportionment_rules"][$dIndex] = $detailsParam;

	
		$detailsTablesData["freee_apportionment_rules"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["freee_apportionment_rules"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["freee_apportionment_rules"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["freee_apportionment_rules"][$dIndex]["detailKeys"][]="freee_apportionment_rule_id";

// tables which are master tables for current table (detail)
$masterTablesData["freee_apportionment_rules"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_apportionment_rules()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`freee_apportionment_rules`.`id`,  `freee_apportionment_rules`.`account_item_id`,  `freee_apportionment_rules`.`partner_id`,  `freee_apportionment_rules`.`updated_at`,  `freee_apportionment_rules`.`updated_by`,  `freee_apportionment_rules`.`created_at`,  `freee_apportionment_rules`.`created_by`,  `freee_account_items`.`account_category`,  `freee_apportionment_rules`.`calc_base`,  `freee_account_items`.`is_not_anbun`,  `freee_apportionment_rules`.`sort`";
$proto0["m_strFrom"] = "FROM `freee_apportionment_rules`  LEFT OUTER JOIN `freee_account_items` ON `freee_apportionment_rules`.`account_item_id` = `freee_account_items`.`id`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `freee_apportionment_rules`.`sort`";
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
	"m_strTable" => "freee_apportionment_rules",
	"m_srcTableName" => "freee_apportionment_rules"
));

$proto6["m_sql"] = "`freee_apportionment_rules`.`id`";
$proto6["m_srcTableName"] = "freee_apportionment_rules";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "account_item_id",
	"m_strTable" => "freee_apportionment_rules",
	"m_srcTableName" => "freee_apportionment_rules"
));

$proto8["m_sql"] = "`freee_apportionment_rules`.`account_item_id`";
$proto8["m_srcTableName"] = "freee_apportionment_rules";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "partner_id",
	"m_strTable" => "freee_apportionment_rules",
	"m_srcTableName" => "freee_apportionment_rules"
));

$proto10["m_sql"] = "`freee_apportionment_rules`.`partner_id`";
$proto10["m_srcTableName"] = "freee_apportionment_rules";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_apportionment_rules",
	"m_srcTableName" => "freee_apportionment_rules"
));

$proto12["m_sql"] = "`freee_apportionment_rules`.`updated_at`";
$proto12["m_srcTableName"] = "freee_apportionment_rules";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_apportionment_rules",
	"m_srcTableName" => "freee_apportionment_rules"
));

$proto14["m_sql"] = "`freee_apportionment_rules`.`updated_by`";
$proto14["m_srcTableName"] = "freee_apportionment_rules";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_apportionment_rules",
	"m_srcTableName" => "freee_apportionment_rules"
));

$proto16["m_sql"] = "`freee_apportionment_rules`.`created_at`";
$proto16["m_srcTableName"] = "freee_apportionment_rules";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_apportionment_rules",
	"m_srcTableName" => "freee_apportionment_rules"
));

$proto18["m_sql"] = "`freee_apportionment_rules`.`created_by`";
$proto18["m_srcTableName"] = "freee_apportionment_rules";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "account_category",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_apportionment_rules"
));

$proto20["m_sql"] = "`freee_account_items`.`account_category`";
$proto20["m_srcTableName"] = "freee_apportionment_rules";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "calc_base",
	"m_strTable" => "freee_apportionment_rules",
	"m_srcTableName" => "freee_apportionment_rules"
));

$proto22["m_sql"] = "`freee_apportionment_rules`.`calc_base`";
$proto22["m_srcTableName"] = "freee_apportionment_rules";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "is_not_anbun",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_apportionment_rules"
));

$proto24["m_sql"] = "`freee_account_items`.`is_not_anbun`";
$proto24["m_srcTableName"] = "freee_apportionment_rules";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "freee_apportionment_rules",
	"m_srcTableName" => "freee_apportionment_rules"
));

$proto26["m_sql"] = "`freee_apportionment_rules`.`sort`";
$proto26["m_srcTableName"] = "freee_apportionment_rules";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "freee_apportionment_rules";
$proto29["m_srcTableName"] = "freee_apportionment_rules";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "item_id";
$proto29["m_columns"][] = "account_item_id";
$proto29["m_columns"][] = "partner_id";
$proto29["m_columns"][] = "name";
$proto29["m_columns"][] = "sort";
$proto29["m_columns"][] = "updated_at";
$proto29["m_columns"][] = "updated_by";
$proto29["m_columns"][] = "created_at";
$proto29["m_columns"][] = "created_by";
$proto29["m_columns"][] = "is_all_groups";
$proto29["m_columns"][] = "is_jintouwari";
$proto29["m_columns"][] = "calc_base";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "`freee_apportionment_rules`";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "freee_apportionment_rules";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_LEFTJOIN";
			$proto33=array();
$proto33["m_strName"] = "freee_account_items";
$proto33["m_srcTableName"] = "freee_apportionment_rules";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "company_id";
$proto33["m_columns"][] = "name";
$proto33["m_columns"][] = "update_date";
$proto33["m_columns"][] = "shortcut1";
$proto33["m_columns"][] = "shortcut2";
$proto33["m_columns"][] = "created_at";
$proto33["m_columns"][] = "created_by";
$proto33["m_columns"][] = "updated_at";
$proto33["m_columns"][] = "updated_by";
$proto33["m_columns"][] = "tax_code";
$proto33["m_columns"][] = "default_tax_id";
$proto33["m_columns"][] = "default_tax_code";
$proto33["m_columns"][] = "account_category";
$proto33["m_columns"][] = "account_category_id";
$proto33["m_columns"][] = "categories";
$proto33["m_columns"][] = "available";
$proto33["m_columns"][] = "walletable_id";
$proto33["m_columns"][] = "group_name";
$proto33["m_columns"][] = "corresponding_income_name";
$proto33["m_columns"][] = "corresponding_income_id";
$proto33["m_columns"][] = "corresponding_expense_name";
$proto33["m_columns"][] = "corresponding_expense_id";
$proto33["m_columns"][] = "freee_expense_category_id";
$proto33["m_columns"][] = "is_PL_or_BS";
$proto33["m_columns"][] = "is_not_anbun";
$proto33["m_columns"][] = "description";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "LEFT OUTER JOIN `freee_account_items` ON `freee_apportionment_rules`.`account_item_id` = `freee_account_items`.`id`";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "freee_apportionment_rules";
$proto34=array();
$proto34["m_sql"] = "`freee_apportionment_rules`.`account_item_id` = `freee_account_items`.`id`";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "account_item_id",
	"m_strTable" => "freee_apportionment_rules",
	"m_srcTableName" => "freee_apportionment_rules"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= `freee_account_items`.`id`";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "freee_apportionment_rules",
	"m_srcTableName" => "freee_apportionment_rules"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 1;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="freee_apportionment_rules";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_apportionment_rules = createSqlQuery_freee_apportionment_rules();


	
		;

											

$tdatafreee_apportionment_rules[".sqlquery"] = $queryData_freee_apportionment_rules;

$tableEvents["freee_apportionment_rules"] = new eventsBase;
$tdatafreee_apportionment_rules[".hasEvents"] = false;

?>