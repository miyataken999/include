<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_deals = array();
	$tdatafreee_deals[".truncateText"] = true;
	$tdatafreee_deals[".NumberOfChars"] = 80;
	$tdatafreee_deals[".ShortName"] = "freee_deals";
	$tdatafreee_deals[".OwnerID"] = "";
	$tdatafreee_deals[".OriginalTable"] = "freee_deals";

//	field labels
$fieldLabelsfreee_deals = array();
$fieldToolTipsfreee_deals = array();
$pageTitlesfreee_deals = array();
$placeHoldersfreee_deals = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_deals["Japanese"] = array();
	$fieldToolTipsfreee_deals["Japanese"] = array();
	$placeHoldersfreee_deals["Japanese"] = array();
	$pageTitlesfreee_deals["Japanese"] = array();
	$fieldLabelsfreee_deals["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_deals["Japanese"]["id"] = "";
	$placeHoldersfreee_deals["Japanese"]["id"] = "";
	$fieldLabelsfreee_deals["Japanese"]["company_id"] = "事業所ID";
	$fieldToolTipsfreee_deals["Japanese"]["company_id"] = "";
	$placeHoldersfreee_deals["Japanese"]["company_id"] = "";
	$fieldLabelsfreee_deals["Japanese"]["issue_date"] = "発生日";
	$fieldToolTipsfreee_deals["Japanese"]["issue_date"] = "";
	$placeHoldersfreee_deals["Japanese"]["issue_date"] = "";
	$fieldLabelsfreee_deals["Japanese"]["due_date"] = "支払期日";
	$fieldToolTipsfreee_deals["Japanese"]["due_date"] = "";
	$placeHoldersfreee_deals["Japanese"]["due_date"] = "";
	$fieldLabelsfreee_deals["Japanese"]["amount"] = "金額";
	$fieldToolTipsfreee_deals["Japanese"]["amount"] = "";
	$placeHoldersfreee_deals["Japanese"]["amount"] = "";
	$fieldLabelsfreee_deals["Japanese"]["due_amount"] = "支払金額";
	$fieldToolTipsfreee_deals["Japanese"]["due_amount"] = "";
	$placeHoldersfreee_deals["Japanese"]["due_amount"] = "";
	$fieldLabelsfreee_deals["Japanese"]["type"] = "収支区分";
	$fieldToolTipsfreee_deals["Japanese"]["type"] = "";
	$placeHoldersfreee_deals["Japanese"]["type"] = "";
	$fieldLabelsfreee_deals["Japanese"]["partner_id"] = "取引先ID";
	$fieldToolTipsfreee_deals["Japanese"]["partner_id"] = "";
	$placeHoldersfreee_deals["Japanese"]["partner_id"] = "";
	$fieldLabelsfreee_deals["Japanese"]["partner_code"] = "取引先コード";
	$fieldToolTipsfreee_deals["Japanese"]["partner_code"] = "";
	$placeHoldersfreee_deals["Japanese"]["partner_code"] = "";
	$fieldLabelsfreee_deals["Japanese"]["ref_number"] = "管理番号";
	$fieldToolTipsfreee_deals["Japanese"]["ref_number"] = "";
	$placeHoldersfreee_deals["Japanese"]["ref_number"] = "";
	$fieldLabelsfreee_deals["Japanese"]["status"] = "決済状況";
	$fieldToolTipsfreee_deals["Japanese"]["status"] = "";
	$placeHoldersfreee_deals["Japanese"]["status"] = "";
	$fieldLabelsfreee_deals["Japanese"]["renews"] = "取引の+更新行";
	$fieldToolTipsfreee_deals["Japanese"]["renews"] = "";
	$placeHoldersfreee_deals["Japanese"]["renews"] = "";
	$fieldLabelsfreee_deals["Japanese"]["payments"] = "取引の支払行";
	$fieldToolTipsfreee_deals["Japanese"]["payments"] = "";
	$placeHoldersfreee_deals["Japanese"]["payments"] = "";
	$fieldLabelsfreee_deals["Japanese"]["receipts"] = "証憑ファイル（ファイルボックスのファイル）";
	$fieldToolTipsfreee_deals["Japanese"]["receipts"] = "";
	$placeHoldersfreee_deals["Japanese"]["receipts"] = "";
	$fieldLabelsfreee_deals["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_deals["Japanese"]["created_at"] = "";
	$placeHoldersfreee_deals["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_deals["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsfreee_deals["Japanese"]["created_by"] = "";
	$placeHoldersfreee_deals["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_deals["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_deals["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_deals["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_deals["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_deals["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_deals["Japanese"]["updated_by"] = "";
	if (count($fieldToolTipsfreee_deals["Japanese"]))
		$tdatafreee_deals[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_deals[""] = array();
	$fieldToolTipsfreee_deals[""] = array();
	$placeHoldersfreee_deals[""] = array();
	$pageTitlesfreee_deals[""] = array();
	$fieldLabelsfreee_deals[""]["id"] = "Id";
	$fieldToolTipsfreee_deals[""]["id"] = "";
	$placeHoldersfreee_deals[""]["id"] = "";
	$fieldLabelsfreee_deals[""]["company_id"] = "Company Id";
	$fieldToolTipsfreee_deals[""]["company_id"] = "";
	$placeHoldersfreee_deals[""]["company_id"] = "";
	$fieldLabelsfreee_deals[""]["issue_date"] = "Issue Date";
	$fieldToolTipsfreee_deals[""]["issue_date"] = "";
	$placeHoldersfreee_deals[""]["issue_date"] = "";
	$fieldLabelsfreee_deals[""]["due_date"] = "Due Date";
	$fieldToolTipsfreee_deals[""]["due_date"] = "";
	$placeHoldersfreee_deals[""]["due_date"] = "";
	$fieldLabelsfreee_deals[""]["amount"] = "Amount";
	$fieldToolTipsfreee_deals[""]["amount"] = "";
	$placeHoldersfreee_deals[""]["amount"] = "";
	$fieldLabelsfreee_deals[""]["due_amount"] = "Due Amount";
	$fieldToolTipsfreee_deals[""]["due_amount"] = "";
	$placeHoldersfreee_deals[""]["due_amount"] = "";
	$fieldLabelsfreee_deals[""]["type"] = "Type";
	$fieldToolTipsfreee_deals[""]["type"] = "";
	$placeHoldersfreee_deals[""]["type"] = "";
	$fieldLabelsfreee_deals[""]["partner_id"] = "Partner Id";
	$fieldToolTipsfreee_deals[""]["partner_id"] = "";
	$placeHoldersfreee_deals[""]["partner_id"] = "";
	$fieldLabelsfreee_deals[""]["partner_code"] = "Partner Code";
	$fieldToolTipsfreee_deals[""]["partner_code"] = "";
	$placeHoldersfreee_deals[""]["partner_code"] = "";
	$fieldLabelsfreee_deals[""]["ref_number"] = "Ref Number";
	$fieldToolTipsfreee_deals[""]["ref_number"] = "";
	$placeHoldersfreee_deals[""]["ref_number"] = "";
	$fieldLabelsfreee_deals[""]["status"] = "Status";
	$fieldToolTipsfreee_deals[""]["status"] = "";
	$placeHoldersfreee_deals[""]["status"] = "";
	$fieldLabelsfreee_deals[""]["renews"] = "Renews";
	$fieldToolTipsfreee_deals[""]["renews"] = "";
	$placeHoldersfreee_deals[""]["renews"] = "";
	$fieldLabelsfreee_deals[""]["payments"] = "Payments";
	$fieldToolTipsfreee_deals[""]["payments"] = "";
	$placeHoldersfreee_deals[""]["payments"] = "";
	$fieldLabelsfreee_deals[""]["receipts"] = "Receipts";
	$fieldToolTipsfreee_deals[""]["receipts"] = "";
	$placeHoldersfreee_deals[""]["receipts"] = "";
	$fieldLabelsfreee_deals[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_deals[""]["created_at"] = "";
	$placeHoldersfreee_deals[""]["created_at"] = "";
	$fieldLabelsfreee_deals[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_deals[""]["created_by"] = "";
	$placeHoldersfreee_deals[""]["created_by"] = "";
	$fieldLabelsfreee_deals[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_deals[""]["updated_at"] = "";
	$placeHoldersfreee_deals[""]["updated_at"] = "";
	$fieldLabelsfreee_deals[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_deals[""]["updated_by"] = "";
	$placeHoldersfreee_deals[""]["updated_by"] = "";
	if (count($fieldToolTipsfreee_deals[""]))
		$tdatafreee_deals[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_deals["English"] = array();
	$fieldToolTipsfreee_deals["English"] = array();
	$placeHoldersfreee_deals["English"] = array();
	$pageTitlesfreee_deals["English"] = array();
	$fieldLabelsfreee_deals["English"]["id"] = "Id";
	$fieldToolTipsfreee_deals["English"]["id"] = "";
	$placeHoldersfreee_deals["English"]["id"] = "";
	$fieldLabelsfreee_deals["English"]["company_id"] = "Company Id";
	$fieldToolTipsfreee_deals["English"]["company_id"] = "";
	$placeHoldersfreee_deals["English"]["company_id"] = "";
	$fieldLabelsfreee_deals["English"]["issue_date"] = "Issue Date";
	$fieldToolTipsfreee_deals["English"]["issue_date"] = "";
	$placeHoldersfreee_deals["English"]["issue_date"] = "";
	$fieldLabelsfreee_deals["English"]["due_date"] = "Due Date";
	$fieldToolTipsfreee_deals["English"]["due_date"] = "";
	$placeHoldersfreee_deals["English"]["due_date"] = "";
	$fieldLabelsfreee_deals["English"]["amount"] = "Amount";
	$fieldToolTipsfreee_deals["English"]["amount"] = "";
	$placeHoldersfreee_deals["English"]["amount"] = "";
	$fieldLabelsfreee_deals["English"]["due_amount"] = "Due Amount";
	$fieldToolTipsfreee_deals["English"]["due_amount"] = "";
	$placeHoldersfreee_deals["English"]["due_amount"] = "";
	$fieldLabelsfreee_deals["English"]["type"] = "Type";
	$fieldToolTipsfreee_deals["English"]["type"] = "";
	$placeHoldersfreee_deals["English"]["type"] = "";
	$fieldLabelsfreee_deals["English"]["partner_id"] = "Partner Id";
	$fieldToolTipsfreee_deals["English"]["partner_id"] = "";
	$placeHoldersfreee_deals["English"]["partner_id"] = "";
	$fieldLabelsfreee_deals["English"]["partner_code"] = "Partner Code";
	$fieldToolTipsfreee_deals["English"]["partner_code"] = "";
	$placeHoldersfreee_deals["English"]["partner_code"] = "";
	$fieldLabelsfreee_deals["English"]["ref_number"] = "Ref Number";
	$fieldToolTipsfreee_deals["English"]["ref_number"] = "";
	$placeHoldersfreee_deals["English"]["ref_number"] = "";
	$fieldLabelsfreee_deals["English"]["status"] = "Status";
	$fieldToolTipsfreee_deals["English"]["status"] = "";
	$placeHoldersfreee_deals["English"]["status"] = "";
	$fieldLabelsfreee_deals["English"]["renews"] = "Renews";
	$fieldToolTipsfreee_deals["English"]["renews"] = "";
	$placeHoldersfreee_deals["English"]["renews"] = "";
	$fieldLabelsfreee_deals["English"]["payments"] = "Payments";
	$fieldToolTipsfreee_deals["English"]["payments"] = "";
	$placeHoldersfreee_deals["English"]["payments"] = "";
	$fieldLabelsfreee_deals["English"]["receipts"] = "Receipts";
	$fieldToolTipsfreee_deals["English"]["receipts"] = "";
	$placeHoldersfreee_deals["English"]["receipts"] = "";
	$fieldLabelsfreee_deals["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_deals["English"]["created_at"] = "";
	$placeHoldersfreee_deals["English"]["created_at"] = "";
	$fieldLabelsfreee_deals["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_deals["English"]["created_by"] = "";
	$placeHoldersfreee_deals["English"]["created_by"] = "";
	$fieldLabelsfreee_deals["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_deals["English"]["updated_at"] = "";
	$placeHoldersfreee_deals["English"]["updated_at"] = "";
	$fieldLabelsfreee_deals["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_deals["English"]["updated_by"] = "";
	$placeHoldersfreee_deals["English"]["updated_by"] = "";
	if (count($fieldToolTipsfreee_deals["English"]))
		$tdatafreee_deals[".isUseToolTips"] = true;
}


	$tdatafreee_deals[".NCSearch"] = true;



$tdatafreee_deals[".shortTableName"] = "freee_deals";
$tdatafreee_deals[".nSecOptions"] = 0;
$tdatafreee_deals[".recsPerRowPrint"] = 1;
$tdatafreee_deals[".mainTableOwnerID"] = "";
$tdatafreee_deals[".moveNext"] = 1;
$tdatafreee_deals[".entityType"] = 0;

$tdatafreee_deals[".strOriginalTableName"] = "freee_deals";

	



$tdatafreee_deals[".showAddInPopup"] = false;

$tdatafreee_deals[".showEditInPopup"] = false;

$tdatafreee_deals[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_deals[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_deals[".fieldsForRegister"] = array();

$tdatafreee_deals[".listAjax"] = false;

	$tdatafreee_deals[".audit"] = false;

	$tdatafreee_deals[".locking"] = false;



$tdatafreee_deals[".list"] = true;



$tdatafreee_deals[".reorderRecordsByHeader"] = true;





$tdatafreee_deals[".exportTo"] = true;



$tdatafreee_deals[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_deals[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_deals[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_deals[".searchSaving"] = false;
//

$tdatafreee_deals[".showSearchPanel"] = true;
		$tdatafreee_deals[".flexibleSearch"] = true;

$tdatafreee_deals[".isUseAjaxSuggest"] = true;

$tdatafreee_deals[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_deals[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_deals[".buttonsAdded"] = false;

$tdatafreee_deals[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_deals[".isUseTimeForSearch"] = false;




$tdatafreee_deals[".detailsLinksOnList"] = "1";

$tdatafreee_deals[".allSearchFields"] = array();
$tdatafreee_deals[".filterFields"] = array();
$tdatafreee_deals[".requiredSearchFields"] = array();

$tdatafreee_deals[".allSearchFields"][] = "id";
	$tdatafreee_deals[".allSearchFields"][] = "company_id";
	$tdatafreee_deals[".allSearchFields"][] = "issue_date";
	$tdatafreee_deals[".allSearchFields"][] = "due_date";
	$tdatafreee_deals[".allSearchFields"][] = "amount";
	$tdatafreee_deals[".allSearchFields"][] = "due_amount";
	$tdatafreee_deals[".allSearchFields"][] = "type";
	$tdatafreee_deals[".allSearchFields"][] = "partner_id";
	$tdatafreee_deals[".allSearchFields"][] = "partner_code";
	$tdatafreee_deals[".allSearchFields"][] = "ref_number";
	$tdatafreee_deals[".allSearchFields"][] = "status";
	$tdatafreee_deals[".allSearchFields"][] = "renews";
	$tdatafreee_deals[".allSearchFields"][] = "payments";
	$tdatafreee_deals[".allSearchFields"][] = "receipts";
	$tdatafreee_deals[".allSearchFields"][] = "created_at";
	$tdatafreee_deals[".allSearchFields"][] = "updated_at";
	

$tdatafreee_deals[".googleLikeFields"] = array();
$tdatafreee_deals[".googleLikeFields"][] = "id";
$tdatafreee_deals[".googleLikeFields"][] = "company_id";
$tdatafreee_deals[".googleLikeFields"][] = "issue_date";
$tdatafreee_deals[".googleLikeFields"][] = "due_date";
$tdatafreee_deals[".googleLikeFields"][] = "amount";
$tdatafreee_deals[".googleLikeFields"][] = "due_amount";
$tdatafreee_deals[".googleLikeFields"][] = "type";
$tdatafreee_deals[".googleLikeFields"][] = "partner_id";
$tdatafreee_deals[".googleLikeFields"][] = "partner_code";
$tdatafreee_deals[".googleLikeFields"][] = "ref_number";
$tdatafreee_deals[".googleLikeFields"][] = "status";
$tdatafreee_deals[".googleLikeFields"][] = "renews";
$tdatafreee_deals[".googleLikeFields"][] = "payments";
$tdatafreee_deals[".googleLikeFields"][] = "receipts";
$tdatafreee_deals[".googleLikeFields"][] = "created_at";
$tdatafreee_deals[".googleLikeFields"][] = "created_by";
$tdatafreee_deals[".googleLikeFields"][] = "updated_at";
$tdatafreee_deals[".googleLikeFields"][] = "updated_by";


$tdatafreee_deals[".advSearchFields"] = array();
$tdatafreee_deals[".advSearchFields"][] = "id";
$tdatafreee_deals[".advSearchFields"][] = "company_id";
$tdatafreee_deals[".advSearchFields"][] = "issue_date";
$tdatafreee_deals[".advSearchFields"][] = "due_date";
$tdatafreee_deals[".advSearchFields"][] = "amount";
$tdatafreee_deals[".advSearchFields"][] = "due_amount";
$tdatafreee_deals[".advSearchFields"][] = "type";
$tdatafreee_deals[".advSearchFields"][] = "partner_id";
$tdatafreee_deals[".advSearchFields"][] = "partner_code";
$tdatafreee_deals[".advSearchFields"][] = "ref_number";
$tdatafreee_deals[".advSearchFields"][] = "status";
$tdatafreee_deals[".advSearchFields"][] = "renews";
$tdatafreee_deals[".advSearchFields"][] = "payments";
$tdatafreee_deals[".advSearchFields"][] = "receipts";
$tdatafreee_deals[".advSearchFields"][] = "created_at";
$tdatafreee_deals[".advSearchFields"][] = "updated_at";

$tdatafreee_deals[".tableType"] = "list";

$tdatafreee_deals[".printerPageOrientation"] = 0;
$tdatafreee_deals[".nPrinterPageScale"] = 100;

$tdatafreee_deals[".nPrinterSplitRecords"] = 40;

$tdatafreee_deals[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_deals[".geocodingEnabled"] = false;





$tdatafreee_deals[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_deals[".pageSize"] = 100;

$tdatafreee_deals[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `issue_date` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_deals[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_deals[".orderindexes"] = array();
$tdatafreee_deals[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`issue_date`");

$tdatafreee_deals[".sqlHead"] = "SELECT `id`,  `company_id`,  `issue_date`,  `due_date`,  `amount`,  `due_amount`,  `type`,  `partner_id`,  `partner_code`,  `ref_number`,  `status`,  `renews`,  `payments`,  `receipts`,  `created_at`,  `created_by`,  `updated_at`,  `updated_by`";
$tdatafreee_deals[".sqlFrom"] = "FROM `freee_deals`";
$tdatafreee_deals[".sqlWhereExpr"] = "";
$tdatafreee_deals[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_deals[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_deals[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_deals[".highlightSearchResults"] = true;

$tableKeysfreee_deals = array();
$tableKeysfreee_deals[] = "id";
$tdatafreee_deals[".Keys"] = $tableKeysfreee_deals;

$tdatafreee_deals[".listFields"] = array();
$tdatafreee_deals[".listFields"][] = "id";
$tdatafreee_deals[".listFields"][] = "company_id";
$tdatafreee_deals[".listFields"][] = "issue_date";
$tdatafreee_deals[".listFields"][] = "due_date";
$tdatafreee_deals[".listFields"][] = "amount";
$tdatafreee_deals[".listFields"][] = "due_amount";
$tdatafreee_deals[".listFields"][] = "type";
$tdatafreee_deals[".listFields"][] = "partner_id";
$tdatafreee_deals[".listFields"][] = "partner_code";
$tdatafreee_deals[".listFields"][] = "ref_number";
$tdatafreee_deals[".listFields"][] = "status";
$tdatafreee_deals[".listFields"][] = "renews";
$tdatafreee_deals[".listFields"][] = "payments";
$tdatafreee_deals[".listFields"][] = "receipts";
$tdatafreee_deals[".listFields"][] = "created_at";
$tdatafreee_deals[".listFields"][] = "updated_at";

$tdatafreee_deals[".hideMobileList"] = array();


$tdatafreee_deals[".viewFields"] = array();

$tdatafreee_deals[".addFields"] = array();

$tdatafreee_deals[".masterListFields"] = array();
$tdatafreee_deals[".masterListFields"][] = "id";
$tdatafreee_deals[".masterListFields"][] = "company_id";
$tdatafreee_deals[".masterListFields"][] = "issue_date";
$tdatafreee_deals[".masterListFields"][] = "due_date";
$tdatafreee_deals[".masterListFields"][] = "amount";
$tdatafreee_deals[".masterListFields"][] = "due_amount";
$tdatafreee_deals[".masterListFields"][] = "type";
$tdatafreee_deals[".masterListFields"][] = "partner_id";
$tdatafreee_deals[".masterListFields"][] = "partner_code";
$tdatafreee_deals[".masterListFields"][] = "ref_number";
$tdatafreee_deals[".masterListFields"][] = "status";
$tdatafreee_deals[".masterListFields"][] = "renews";
$tdatafreee_deals[".masterListFields"][] = "payments";
$tdatafreee_deals[".masterListFields"][] = "receipts";
$tdatafreee_deals[".masterListFields"][] = "created_at";
$tdatafreee_deals[".masterListFields"][] = "created_by";
$tdatafreee_deals[".masterListFields"][] = "updated_at";
$tdatafreee_deals[".masterListFields"][] = "updated_by";

$tdatafreee_deals[".inlineAddFields"] = array();

$tdatafreee_deals[".editFields"] = array();

$tdatafreee_deals[".inlineEditFields"] = array();

$tdatafreee_deals[".updateSelectedFields"] = array();


$tdatafreee_deals[".exportFields"] = array();
$tdatafreee_deals[".exportFields"][] = "id";
$tdatafreee_deals[".exportFields"][] = "company_id";
$tdatafreee_deals[".exportFields"][] = "issue_date";
$tdatafreee_deals[".exportFields"][] = "due_date";
$tdatafreee_deals[".exportFields"][] = "amount";
$tdatafreee_deals[".exportFields"][] = "due_amount";
$tdatafreee_deals[".exportFields"][] = "type";
$tdatafreee_deals[".exportFields"][] = "partner_id";
$tdatafreee_deals[".exportFields"][] = "partner_code";
$tdatafreee_deals[".exportFields"][] = "ref_number";
$tdatafreee_deals[".exportFields"][] = "status";
$tdatafreee_deals[".exportFields"][] = "renews";
$tdatafreee_deals[".exportFields"][] = "payments";
$tdatafreee_deals[".exportFields"][] = "receipts";
$tdatafreee_deals[".exportFields"][] = "created_at";
$tdatafreee_deals[".exportFields"][] = "updated_at";

$tdatafreee_deals[".importFields"] = array();

$tdatafreee_deals[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","id");
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




	$tdatafreee_deals["id"] = $fdata;
//	company_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "company_id";
	$fdata["GoodName"] = "company_id";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","company_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "company_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`company_id`";

	
	
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




	$tdatafreee_deals["company_id"] = $fdata;
//	issue_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "issue_date";
	$fdata["GoodName"] = "issue_date";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","issue_date");
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




	$tdatafreee_deals["issue_date"] = $fdata;
//	due_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "due_date";
	$fdata["GoodName"] = "due_date";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","due_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "due_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`due_date`";

	
	
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




	$tdatafreee_deals["due_date"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","amount");
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




	$tdatafreee_deals["amount"] = $fdata;
//	due_amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "due_amount";
	$fdata["GoodName"] = "due_amount";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","due_amount");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "due_amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`due_amount`";

	
	
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




	$tdatafreee_deals["due_amount"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";

	
	
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




	$tdatafreee_deals["type"] = $fdata;
//	partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "partner_id";
	$fdata["GoodName"] = "partner_id";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","partner_id");
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




	$tdatafreee_deals["partner_id"] = $fdata;
//	partner_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "partner_code";
	$fdata["GoodName"] = "partner_code";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","partner_code");
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




	$tdatafreee_deals["partner_code"] = $fdata;
//	ref_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ref_number";
	$fdata["GoodName"] = "ref_number";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","ref_number");
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




	$tdatafreee_deals["ref_number"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","status");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`status`";

	
	
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




	$tdatafreee_deals["status"] = $fdata;
//	renews
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "renews";
	$fdata["GoodName"] = "renews";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","renews");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "renews";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`renews`";

	
	
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
			$edata["EditParams"].= " maxlength=5000";

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




	$tdatafreee_deals["renews"] = $fdata;
//	payments
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "payments";
	$fdata["GoodName"] = "payments";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","payments");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "payments";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`payments`";

	
	
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
			$edata["EditParams"].= " maxlength=5000";

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




	$tdatafreee_deals["payments"] = $fdata;
//	receipts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "receipts";
	$fdata["GoodName"] = "receipts";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","receipts");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "receipts";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`receipts`";

	
	
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
			$edata["EditParams"].= " maxlength=5000";

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




	$tdatafreee_deals["receipts"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","created_at");
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




	$tdatafreee_deals["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","created_by");
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








	$tdatafreee_deals["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","updated_at");
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




	$tdatafreee_deals["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_deals";
	$fdata["Label"] = GetFieldLabel("freee_deals","updated_by");
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








	$tdatafreee_deals["updated_by"] = $fdata;


$tables_data["freee_deals"]=&$tdatafreee_deals;
$field_labels["freee_deals"] = &$fieldLabelsfreee_deals;
$fieldToolTips["freee_deals"] = &$fieldToolTipsfreee_deals;
$placeHolders["freee_deals"] = &$placeHoldersfreee_deals;
$page_titles["freee_deals"] = &$pageTitlesfreee_deals;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_deals"] = array();
//	freee_deal_details
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="freee_deal_details";
		$detailsParam["dOriginalTable"] = "freee_deal_details";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "freee_deal_details";
	$detailsParam["dCaptionTable"] = GetTableCaption("freee_deal_details");
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
		
	$detailsTablesData["freee_deals"][$dIndex] = $detailsParam;

	
		$detailsTablesData["freee_deals"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["freee_deals"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["freee_deals"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["freee_deals"][$dIndex]["detailKeys"][]="freee_deals_id";

// tables which are master tables for current table (detail)
$masterTablesData["freee_deals"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_deals()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `company_id`,  `issue_date`,  `due_date`,  `amount`,  `due_amount`,  `type`,  `partner_id`,  `partner_code`,  `ref_number`,  `status`,  `renews`,  `payments`,  `receipts`,  `created_at`,  `created_by`,  `updated_at`,  `updated_by`";
$proto0["m_strFrom"] = "FROM `freee_deals`";
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
	"m_strName" => "id",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_deals";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "company_id",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto8["m_sql"] = "`company_id`";
$proto8["m_srcTableName"] = "freee_deals";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "issue_date",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto10["m_sql"] = "`issue_date`";
$proto10["m_srcTableName"] = "freee_deals";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "due_date",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto12["m_sql"] = "`due_date`";
$proto12["m_srcTableName"] = "freee_deals";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto14["m_sql"] = "`amount`";
$proto14["m_srcTableName"] = "freee_deals";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "due_amount",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto16["m_sql"] = "`due_amount`";
$proto16["m_srcTableName"] = "freee_deals";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto18["m_sql"] = "`type`";
$proto18["m_srcTableName"] = "freee_deals";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "partner_id",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto20["m_sql"] = "`partner_id`";
$proto20["m_srcTableName"] = "freee_deals";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "partner_code",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto22["m_sql"] = "`partner_code`";
$proto22["m_srcTableName"] = "freee_deals";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ref_number",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto24["m_sql"] = "`ref_number`";
$proto24["m_srcTableName"] = "freee_deals";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto26["m_sql"] = "`status`";
$proto26["m_srcTableName"] = "freee_deals";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "renews",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto28["m_sql"] = "`renews`";
$proto28["m_srcTableName"] = "freee_deals";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "payments",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto30["m_sql"] = "`payments`";
$proto30["m_srcTableName"] = "freee_deals";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "receipts",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto32["m_sql"] = "`receipts`";
$proto32["m_srcTableName"] = "freee_deals";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto34["m_sql"] = "`created_at`";
$proto34["m_srcTableName"] = "freee_deals";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto36["m_sql"] = "`created_by`";
$proto36["m_srcTableName"] = "freee_deals";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto38["m_sql"] = "`updated_at`";
$proto38["m_srcTableName"] = "freee_deals";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto40["m_sql"] = "`updated_by`";
$proto40["m_srcTableName"] = "freee_deals";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "freee_deals";
$proto43["m_srcTableName"] = "freee_deals";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "id";
$proto43["m_columns"][] = "company_id";
$proto43["m_columns"][] = "issue_date";
$proto43["m_columns"][] = "due_date";
$proto43["m_columns"][] = "amount";
$proto43["m_columns"][] = "due_amount";
$proto43["m_columns"][] = "type";
$proto43["m_columns"][] = "partner_id";
$proto43["m_columns"][] = "partner_code";
$proto43["m_columns"][] = "ref_number";
$proto43["m_columns"][] = "status";
$proto43["m_columns"][] = "renews";
$proto43["m_columns"][] = "payments";
$proto43["m_columns"][] = "receipts";
$proto43["m_columns"][] = "created_at";
$proto43["m_columns"][] = "created_by";
$proto43["m_columns"][] = "updated_at";
$proto43["m_columns"][] = "updated_by";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "`freee_deals`";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "freee_deals";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "issue_date",
	"m_strTable" => "freee_deals",
	"m_srcTableName" => "freee_deals"
));

$proto46["m_column"]=$obj;
$proto46["m_bAsc"] = 0;
$proto46["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto46);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="freee_deals";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_deals = createSqlQuery_freee_deals();


	
		;

																		

$tdatafreee_deals[".sqlquery"] = $queryData_freee_deals;

$tableEvents["freee_deals"] = new eventsBase;
$tdatafreee_deals[".hasEvents"] = false;

?>