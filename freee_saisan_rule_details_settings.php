<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_saisan_rule_details = array();
	$tdatafreee_saisan_rule_details[".truncateText"] = true;
	$tdatafreee_saisan_rule_details[".NumberOfChars"] = 80;
	$tdatafreee_saisan_rule_details[".ShortName"] = "freee_saisan_rule_details";
	$tdatafreee_saisan_rule_details[".OwnerID"] = "";
	$tdatafreee_saisan_rule_details[".OriginalTable"] = "freee_saisan_rule_details";

//	field labels
$fieldLabelsfreee_saisan_rule_details = array();
$fieldToolTipsfreee_saisan_rule_details = array();
$pageTitlesfreee_saisan_rule_details = array();
$placeHoldersfreee_saisan_rule_details = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_saisan_rule_details["Japanese"] = array();
	$fieldToolTipsfreee_saisan_rule_details["Japanese"] = array();
	$placeHoldersfreee_saisan_rule_details["Japanese"] = array();
	$pageTitlesfreee_saisan_rule_details["Japanese"] = array();
	$fieldLabelsfreee_saisan_rule_details["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_saisan_rule_details["Japanese"]["id"] = "";
	$placeHoldersfreee_saisan_rule_details["Japanese"]["id"] = "";
	$fieldLabelsfreee_saisan_rule_details["Japanese"]["freee_saisan_rules_id"] = "freee_saisan_rules_id";
	$fieldToolTipsfreee_saisan_rule_details["Japanese"]["freee_saisan_rules_id"] = "";
	$placeHoldersfreee_saisan_rule_details["Japanese"]["freee_saisan_rules_id"] = "";
	$fieldLabelsfreee_saisan_rule_details["Japanese"]["partner_id"] = "取引先ID";
	$fieldToolTipsfreee_saisan_rule_details["Japanese"]["partner_id"] = "";
	$placeHoldersfreee_saisan_rule_details["Japanese"]["partner_id"] = "";
	$fieldLabelsfreee_saisan_rule_details["Japanese"]["item_id"] = "品目ID";
	$fieldToolTipsfreee_saisan_rule_details["Japanese"]["item_id"] = "";
	$placeHoldersfreee_saisan_rule_details["Japanese"]["item_id"] = "";
	$fieldLabelsfreee_saisan_rule_details["Japanese"]["name"] = "和名";
	$fieldToolTipsfreee_saisan_rule_details["Japanese"]["name"] = "";
	$placeHoldersfreee_saisan_rule_details["Japanese"]["name"] = "";
	$fieldLabelsfreee_saisan_rule_details["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsfreee_saisan_rule_details["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_saisan_rule_details["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_saisan_rule_details["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsfreee_saisan_rule_details["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_saisan_rule_details["Japanese"]["updated_by"] = "";
	$fieldLabelsfreee_saisan_rule_details["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsfreee_saisan_rule_details["Japanese"]["created_at"] = "";
	$placeHoldersfreee_saisan_rule_details["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_saisan_rule_details["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsfreee_saisan_rule_details["Japanese"]["created_by"] = "";
	$placeHoldersfreee_saisan_rule_details["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_saisan_rule_details["Japanese"]["account_item_id"] = "勘定科目ID";
	$fieldToolTipsfreee_saisan_rule_details["Japanese"]["account_item_id"] = "";
	$placeHoldersfreee_saisan_rule_details["Japanese"]["account_item_id"] = "";
	if (count($fieldToolTipsfreee_saisan_rule_details["Japanese"]))
		$tdatafreee_saisan_rule_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_saisan_rule_details[""] = array();
	$fieldToolTipsfreee_saisan_rule_details[""] = array();
	$placeHoldersfreee_saisan_rule_details[""] = array();
	$pageTitlesfreee_saisan_rule_details[""] = array();
	$fieldLabelsfreee_saisan_rule_details[""]["id"] = "Id";
	$fieldToolTipsfreee_saisan_rule_details[""]["id"] = "";
	$placeHoldersfreee_saisan_rule_details[""]["id"] = "";
	$fieldLabelsfreee_saisan_rule_details[""]["freee_saisan_rules_id"] = "Freee Saisan Rules Id";
	$fieldToolTipsfreee_saisan_rule_details[""]["freee_saisan_rules_id"] = "";
	$placeHoldersfreee_saisan_rule_details[""]["freee_saisan_rules_id"] = "";
	$fieldLabelsfreee_saisan_rule_details[""]["partner_id"] = "Partner Id";
	$fieldToolTipsfreee_saisan_rule_details[""]["partner_id"] = "";
	$placeHoldersfreee_saisan_rule_details[""]["partner_id"] = "";
	$fieldLabelsfreee_saisan_rule_details[""]["item_id"] = "Item Id";
	$fieldToolTipsfreee_saisan_rule_details[""]["item_id"] = "";
	$placeHoldersfreee_saisan_rule_details[""]["item_id"] = "";
	$fieldLabelsfreee_saisan_rule_details[""]["name"] = "Name";
	$fieldToolTipsfreee_saisan_rule_details[""]["name"] = "";
	$placeHoldersfreee_saisan_rule_details[""]["name"] = "";
	$fieldLabelsfreee_saisan_rule_details[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_saisan_rule_details[""]["updated_at"] = "";
	$placeHoldersfreee_saisan_rule_details[""]["updated_at"] = "";
	$fieldLabelsfreee_saisan_rule_details[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_saisan_rule_details[""]["updated_by"] = "";
	$placeHoldersfreee_saisan_rule_details[""]["updated_by"] = "";
	$fieldLabelsfreee_saisan_rule_details[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_saisan_rule_details[""]["created_at"] = "";
	$placeHoldersfreee_saisan_rule_details[""]["created_at"] = "";
	$fieldLabelsfreee_saisan_rule_details[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_saisan_rule_details[""]["created_by"] = "";
	$placeHoldersfreee_saisan_rule_details[""]["created_by"] = "";
	$fieldLabelsfreee_saisan_rule_details[""]["account_item_id"] = "Account Item Id";
	$fieldToolTipsfreee_saisan_rule_details[""]["account_item_id"] = "";
	$placeHoldersfreee_saisan_rule_details[""]["account_item_id"] = "";
	if (count($fieldToolTipsfreee_saisan_rule_details[""]))
		$tdatafreee_saisan_rule_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_saisan_rule_details["English"] = array();
	$fieldToolTipsfreee_saisan_rule_details["English"] = array();
	$placeHoldersfreee_saisan_rule_details["English"] = array();
	$pageTitlesfreee_saisan_rule_details["English"] = array();
	$fieldLabelsfreee_saisan_rule_details["English"]["id"] = "Id";
	$fieldToolTipsfreee_saisan_rule_details["English"]["id"] = "";
	$placeHoldersfreee_saisan_rule_details["English"]["id"] = "";
	$fieldLabelsfreee_saisan_rule_details["English"]["freee_saisan_rules_id"] = "Freee Saisan Rules Id";
	$fieldToolTipsfreee_saisan_rule_details["English"]["freee_saisan_rules_id"] = "";
	$placeHoldersfreee_saisan_rule_details["English"]["freee_saisan_rules_id"] = "";
	$fieldLabelsfreee_saisan_rule_details["English"]["partner_id"] = "Partner Id";
	$fieldToolTipsfreee_saisan_rule_details["English"]["partner_id"] = "";
	$placeHoldersfreee_saisan_rule_details["English"]["partner_id"] = "";
	$fieldLabelsfreee_saisan_rule_details["English"]["item_id"] = "Item Id";
	$fieldToolTipsfreee_saisan_rule_details["English"]["item_id"] = "";
	$placeHoldersfreee_saisan_rule_details["English"]["item_id"] = "";
	$fieldLabelsfreee_saisan_rule_details["English"]["name"] = "Name";
	$fieldToolTipsfreee_saisan_rule_details["English"]["name"] = "";
	$placeHoldersfreee_saisan_rule_details["English"]["name"] = "";
	$fieldLabelsfreee_saisan_rule_details["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_saisan_rule_details["English"]["updated_at"] = "";
	$placeHoldersfreee_saisan_rule_details["English"]["updated_at"] = "";
	$fieldLabelsfreee_saisan_rule_details["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_saisan_rule_details["English"]["updated_by"] = "";
	$placeHoldersfreee_saisan_rule_details["English"]["updated_by"] = "";
	$fieldLabelsfreee_saisan_rule_details["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_saisan_rule_details["English"]["created_at"] = "";
	$placeHoldersfreee_saisan_rule_details["English"]["created_at"] = "";
	$fieldLabelsfreee_saisan_rule_details["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_saisan_rule_details["English"]["created_by"] = "";
	$placeHoldersfreee_saisan_rule_details["English"]["created_by"] = "";
	$fieldLabelsfreee_saisan_rule_details["English"]["account_item_id"] = "Account Item Id";
	$fieldToolTipsfreee_saisan_rule_details["English"]["account_item_id"] = "";
	$placeHoldersfreee_saisan_rule_details["English"]["account_item_id"] = "";
	if (count($fieldToolTipsfreee_saisan_rule_details["English"]))
		$tdatafreee_saisan_rule_details[".isUseToolTips"] = true;
}


	$tdatafreee_saisan_rule_details[".NCSearch"] = true;



$tdatafreee_saisan_rule_details[".shortTableName"] = "freee_saisan_rule_details";
$tdatafreee_saisan_rule_details[".nSecOptions"] = 0;
$tdatafreee_saisan_rule_details[".recsPerRowPrint"] = 1;
$tdatafreee_saisan_rule_details[".mainTableOwnerID"] = "";
$tdatafreee_saisan_rule_details[".moveNext"] = 1;
$tdatafreee_saisan_rule_details[".entityType"] = 0;

$tdatafreee_saisan_rule_details[".strOriginalTableName"] = "freee_saisan_rule_details";

	



$tdatafreee_saisan_rule_details[".showAddInPopup"] = false;

$tdatafreee_saisan_rule_details[".showEditInPopup"] = false;

$tdatafreee_saisan_rule_details[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_saisan_rule_details[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_saisan_rule_details[".fieldsForRegister"] = array();

$tdatafreee_saisan_rule_details[".listAjax"] = false;

	$tdatafreee_saisan_rule_details[".audit"] = false;

	$tdatafreee_saisan_rule_details[".locking"] = false;



$tdatafreee_saisan_rule_details[".list"] = true;

$tdatafreee_saisan_rule_details[".inlineEdit"] = true;


$tdatafreee_saisan_rule_details[".reorderRecordsByHeader"] = true;



$tdatafreee_saisan_rule_details[".inlineAdd"] = true;

$tdatafreee_saisan_rule_details[".import"] = true;

$tdatafreee_saisan_rule_details[".exportTo"] = true;


$tdatafreee_saisan_rule_details[".delete"] = true;

$tdatafreee_saisan_rule_details[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_saisan_rule_details[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_saisan_rule_details[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_saisan_rule_details[".searchSaving"] = false;
//

$tdatafreee_saisan_rule_details[".showSearchPanel"] = true;
		$tdatafreee_saisan_rule_details[".flexibleSearch"] = true;

$tdatafreee_saisan_rule_details[".isUseAjaxSuggest"] = true;

$tdatafreee_saisan_rule_details[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatafreee_saisan_rule_details[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_saisan_rule_details[".buttonsAdded"] = false;

$tdatafreee_saisan_rule_details[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_saisan_rule_details[".isUseTimeForSearch"] = false;



$tdatafreee_saisan_rule_details[".badgeColor"] = "6493ea";


$tdatafreee_saisan_rule_details[".allSearchFields"] = array();
$tdatafreee_saisan_rule_details[".filterFields"] = array();
$tdatafreee_saisan_rule_details[".requiredSearchFields"] = array();

$tdatafreee_saisan_rule_details[".allSearchFields"][] = "id";
	$tdatafreee_saisan_rule_details[".allSearchFields"][] = "account_item_id";
	$tdatafreee_saisan_rule_details[".allSearchFields"][] = "item_id";
	$tdatafreee_saisan_rule_details[".allSearchFields"][] = "updated_at";
	$tdatafreee_saisan_rule_details[".allSearchFields"][] = "updated_by";
	$tdatafreee_saisan_rule_details[".allSearchFields"][] = "created_at";
	$tdatafreee_saisan_rule_details[".allSearchFields"][] = "created_by";
	$tdatafreee_saisan_rule_details[".allSearchFields"][] = "freee_saisan_rules_id";
	

$tdatafreee_saisan_rule_details[".googleLikeFields"] = array();
$tdatafreee_saisan_rule_details[".googleLikeFields"][] = "id";
$tdatafreee_saisan_rule_details[".googleLikeFields"][] = "freee_saisan_rules_id";
$tdatafreee_saisan_rule_details[".googleLikeFields"][] = "partner_id";
$tdatafreee_saisan_rule_details[".googleLikeFields"][] = "item_id";
$tdatafreee_saisan_rule_details[".googleLikeFields"][] = "name";
$tdatafreee_saisan_rule_details[".googleLikeFields"][] = "updated_at";
$tdatafreee_saisan_rule_details[".googleLikeFields"][] = "updated_by";
$tdatafreee_saisan_rule_details[".googleLikeFields"][] = "created_at";
$tdatafreee_saisan_rule_details[".googleLikeFields"][] = "created_by";
$tdatafreee_saisan_rule_details[".googleLikeFields"][] = "account_item_id";


$tdatafreee_saisan_rule_details[".advSearchFields"] = array();
$tdatafreee_saisan_rule_details[".advSearchFields"][] = "id";
$tdatafreee_saisan_rule_details[".advSearchFields"][] = "account_item_id";
$tdatafreee_saisan_rule_details[".advSearchFields"][] = "item_id";
$tdatafreee_saisan_rule_details[".advSearchFields"][] = "updated_at";
$tdatafreee_saisan_rule_details[".advSearchFields"][] = "updated_by";
$tdatafreee_saisan_rule_details[".advSearchFields"][] = "created_at";
$tdatafreee_saisan_rule_details[".advSearchFields"][] = "created_by";
$tdatafreee_saisan_rule_details[".advSearchFields"][] = "freee_saisan_rules_id";

$tdatafreee_saisan_rule_details[".tableType"] = "list";

$tdatafreee_saisan_rule_details[".printerPageOrientation"] = 0;
$tdatafreee_saisan_rule_details[".nPrinterPageScale"] = 100;

$tdatafreee_saisan_rule_details[".nPrinterSplitRecords"] = 40;

$tdatafreee_saisan_rule_details[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_saisan_rule_details[".geocodingEnabled"] = false;





$tdatafreee_saisan_rule_details[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_saisan_rule_details[".pageSize"] = 20;

$tdatafreee_saisan_rule_details[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_saisan_rule_details[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_saisan_rule_details[".orderindexes"] = array();

$tdatafreee_saisan_rule_details[".sqlHead"] = "SELECT `id`,  	`freee_saisan_rules_id`,  	`partner_id`,  	`item_id`,  	`name`,  	`updated_at`,  	`updated_by`,  	`created_at`,  	`created_by`,  	`account_item_id`";
$tdatafreee_saisan_rule_details[".sqlFrom"] = "FROM `freee_saisan_rule_details`";
$tdatafreee_saisan_rule_details[".sqlWhereExpr"] = "";
$tdatafreee_saisan_rule_details[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_saisan_rule_details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_saisan_rule_details[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_saisan_rule_details[".highlightSearchResults"] = true;

$tableKeysfreee_saisan_rule_details = array();
$tableKeysfreee_saisan_rule_details[] = "id";
$tdatafreee_saisan_rule_details[".Keys"] = $tableKeysfreee_saisan_rule_details;

$tdatafreee_saisan_rule_details[".listFields"] = array();
$tdatafreee_saisan_rule_details[".listFields"][] = "id";
$tdatafreee_saisan_rule_details[".listFields"][] = "account_item_id";
$tdatafreee_saisan_rule_details[".listFields"][] = "item_id";
$tdatafreee_saisan_rule_details[".listFields"][] = "updated_at";
$tdatafreee_saisan_rule_details[".listFields"][] = "updated_by";
$tdatafreee_saisan_rule_details[".listFields"][] = "created_at";
$tdatafreee_saisan_rule_details[".listFields"][] = "created_by";
$tdatafreee_saisan_rule_details[".listFields"][] = "freee_saisan_rules_id";

$tdatafreee_saisan_rule_details[".hideMobileList"] = array();


$tdatafreee_saisan_rule_details[".viewFields"] = array();

$tdatafreee_saisan_rule_details[".addFields"] = array();

$tdatafreee_saisan_rule_details[".masterListFields"] = array();
$tdatafreee_saisan_rule_details[".masterListFields"][] = "id";
$tdatafreee_saisan_rule_details[".masterListFields"][] = "account_item_id";
$tdatafreee_saisan_rule_details[".masterListFields"][] = "item_id";
$tdatafreee_saisan_rule_details[".masterListFields"][] = "partner_id";
$tdatafreee_saisan_rule_details[".masterListFields"][] = "updated_at";
$tdatafreee_saisan_rule_details[".masterListFields"][] = "updated_by";
$tdatafreee_saisan_rule_details[".masterListFields"][] = "name";
$tdatafreee_saisan_rule_details[".masterListFields"][] = "created_at";
$tdatafreee_saisan_rule_details[".masterListFields"][] = "created_by";
$tdatafreee_saisan_rule_details[".masterListFields"][] = "freee_saisan_rules_id";

$tdatafreee_saisan_rule_details[".inlineAddFields"] = array();
$tdatafreee_saisan_rule_details[".inlineAddFields"][] = "account_item_id";
$tdatafreee_saisan_rule_details[".inlineAddFields"][] = "item_id";
$tdatafreee_saisan_rule_details[".inlineAddFields"][] = "freee_saisan_rules_id";

$tdatafreee_saisan_rule_details[".editFields"] = array();

$tdatafreee_saisan_rule_details[".inlineEditFields"] = array();
$tdatafreee_saisan_rule_details[".inlineEditFields"][] = "account_item_id";
$tdatafreee_saisan_rule_details[".inlineEditFields"][] = "item_id";
$tdatafreee_saisan_rule_details[".inlineEditFields"][] = "freee_saisan_rules_id";

$tdatafreee_saisan_rule_details[".updateSelectedFields"] = array();


$tdatafreee_saisan_rule_details[".exportFields"] = array();
$tdatafreee_saisan_rule_details[".exportFields"][] = "id";
$tdatafreee_saisan_rule_details[".exportFields"][] = "account_item_id";
$tdatafreee_saisan_rule_details[".exportFields"][] = "item_id";
$tdatafreee_saisan_rule_details[".exportFields"][] = "updated_at";
$tdatafreee_saisan_rule_details[".exportFields"][] = "updated_by";
$tdatafreee_saisan_rule_details[".exportFields"][] = "created_at";
$tdatafreee_saisan_rule_details[".exportFields"][] = "created_by";
$tdatafreee_saisan_rule_details[".exportFields"][] = "freee_saisan_rules_id";

$tdatafreee_saisan_rule_details[".importFields"] = array();
$tdatafreee_saisan_rule_details[".importFields"][] = "id";
$tdatafreee_saisan_rule_details[".importFields"][] = "freee_saisan_rules_id";
$tdatafreee_saisan_rule_details[".importFields"][] = "item_id";
$tdatafreee_saisan_rule_details[".importFields"][] = "updated_at";
$tdatafreee_saisan_rule_details[".importFields"][] = "updated_by";
$tdatafreee_saisan_rule_details[".importFields"][] = "created_at";
$tdatafreee_saisan_rule_details[".importFields"][] = "created_by";
$tdatafreee_saisan_rule_details[".importFields"][] = "account_item_id";

$tdatafreee_saisan_rule_details[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_saisan_rule_details";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rule_details","id");
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




	$tdatafreee_saisan_rule_details["id"] = $fdata;
//	freee_saisan_rules_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "freee_saisan_rules_id";
	$fdata["GoodName"] = "freee_saisan_rules_id";
	$fdata["ownerTable"] = "freee_saisan_rule_details";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rule_details","freee_saisan_rules_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_saisan_rules_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_saisan_rules_id`";

	
	
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




	$tdatafreee_saisan_rule_details["freee_saisan_rules_id"] = $fdata;
//	partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "partner_id";
	$fdata["GoodName"] = "partner_id";
	$fdata["ownerTable"] = "freee_saisan_rule_details";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rule_details","partner_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "partner_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`partner_id`";

	
	
			
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








	$tdatafreee_saisan_rule_details["partner_id"] = $fdata;
//	item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "item_id";
	$fdata["GoodName"] = "item_id";
	$fdata["ownerTable"] = "freee_saisan_rule_details";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rule_details","item_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatafreee_saisan_rule_details["item_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "freee_saisan_rule_details";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rule_details","name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`name`";

	
	
			
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








	$tdatafreee_saisan_rule_details["name"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_saisan_rule_details";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rule_details","updated_at");
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




	$tdatafreee_saisan_rule_details["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_saisan_rule_details";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rule_details","updated_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatafreee_saisan_rule_details["updated_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_saisan_rule_details";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rule_details","created_at");
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




	$tdatafreee_saisan_rule_details["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_saisan_rule_details";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rule_details","created_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_by`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdatafreee_saisan_rule_details["created_by"] = $fdata;
//	account_item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "account_item_id";
	$fdata["GoodName"] = "account_item_id";
	$fdata["ownerTable"] = "freee_saisan_rule_details";
	$fdata["Label"] = GetFieldLabel("freee_saisan_rule_details","account_item_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatafreee_saisan_rule_details["account_item_id"] = $fdata;


$tables_data["freee_saisan_rule_details"]=&$tdatafreee_saisan_rule_details;
$field_labels["freee_saisan_rule_details"] = &$fieldLabelsfreee_saisan_rule_details;
$fieldToolTips["freee_saisan_rule_details"] = &$fieldToolTipsfreee_saisan_rule_details;
$placeHolders["freee_saisan_rule_details"] = &$placeHoldersfreee_saisan_rule_details;
$page_titles["freee_saisan_rule_details"] = &$pageTitlesfreee_saisan_rule_details;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_saisan_rule_details"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_saisan_rule_details"] = array();


	
				$strOriginalDetailsTable="freee_saisan_rules";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="freee_saisan_rules";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "freee_saisan_rules";
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
					$masterTablesData["freee_saisan_rule_details"][0] = $masterParams;
				$masterTablesData["freee_saisan_rule_details"][0]["masterKeys"] = array();
	$masterTablesData["freee_saisan_rule_details"][0]["masterKeys"][]="id";
				$masterTablesData["freee_saisan_rule_details"][0]["detailKeys"] = array();
	$masterTablesData["freee_saisan_rule_details"][0]["detailKeys"][]="freee_saisan_rules_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_saisan_rule_details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`freee_saisan_rules_id`,  	`partner_id`,  	`item_id`,  	`name`,  	`updated_at`,  	`updated_by`,  	`created_at`,  	`created_by`,  	`account_item_id`";
$proto0["m_strFrom"] = "FROM `freee_saisan_rule_details`";
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
	"m_strTable" => "freee_saisan_rule_details",
	"m_srcTableName" => "freee_saisan_rule_details"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_saisan_rule_details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_saisan_rules_id",
	"m_strTable" => "freee_saisan_rule_details",
	"m_srcTableName" => "freee_saisan_rule_details"
));

$proto8["m_sql"] = "`freee_saisan_rules_id`";
$proto8["m_srcTableName"] = "freee_saisan_rule_details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "partner_id",
	"m_strTable" => "freee_saisan_rule_details",
	"m_srcTableName" => "freee_saisan_rule_details"
));

$proto10["m_sql"] = "`partner_id`";
$proto10["m_srcTableName"] = "freee_saisan_rule_details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "item_id",
	"m_strTable" => "freee_saisan_rule_details",
	"m_srcTableName" => "freee_saisan_rule_details"
));

$proto12["m_sql"] = "`item_id`";
$proto12["m_srcTableName"] = "freee_saisan_rule_details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "freee_saisan_rule_details",
	"m_srcTableName" => "freee_saisan_rule_details"
));

$proto14["m_sql"] = "`name`";
$proto14["m_srcTableName"] = "freee_saisan_rule_details";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_saisan_rule_details",
	"m_srcTableName" => "freee_saisan_rule_details"
));

$proto16["m_sql"] = "`updated_at`";
$proto16["m_srcTableName"] = "freee_saisan_rule_details";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_saisan_rule_details",
	"m_srcTableName" => "freee_saisan_rule_details"
));

$proto18["m_sql"] = "`updated_by`";
$proto18["m_srcTableName"] = "freee_saisan_rule_details";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_saisan_rule_details",
	"m_srcTableName" => "freee_saisan_rule_details"
));

$proto20["m_sql"] = "`created_at`";
$proto20["m_srcTableName"] = "freee_saisan_rule_details";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_saisan_rule_details",
	"m_srcTableName" => "freee_saisan_rule_details"
));

$proto22["m_sql"] = "`created_by`";
$proto22["m_srcTableName"] = "freee_saisan_rule_details";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "account_item_id",
	"m_strTable" => "freee_saisan_rule_details",
	"m_srcTableName" => "freee_saisan_rule_details"
));

$proto24["m_sql"] = "`account_item_id`";
$proto24["m_srcTableName"] = "freee_saisan_rule_details";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "freee_saisan_rule_details";
$proto27["m_srcTableName"] = "freee_saisan_rule_details";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "freee_saisan_rules_id";
$proto27["m_columns"][] = "partner_id";
$proto27["m_columns"][] = "item_id";
$proto27["m_columns"][] = "name";
$proto27["m_columns"][] = "updated_at";
$proto27["m_columns"][] = "updated_by";
$proto27["m_columns"][] = "created_at";
$proto27["m_columns"][] = "created_by";
$proto27["m_columns"][] = "account_item_id";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "`freee_saisan_rule_details`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "freee_saisan_rule_details";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="freee_saisan_rule_details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_saisan_rule_details = createSqlQuery_freee_saisan_rule_details();


	
		;

										

$tdatafreee_saisan_rule_details[".sqlquery"] = $queryData_freee_saisan_rule_details;

include_once(getabspath("include/freee_saisan_rule_details_events.php"));
$tableEvents["freee_saisan_rule_details"] = new eventclass_freee_saisan_rule_details;
$tdatafreee_saisan_rule_details[".hasEvents"] = true;

?>