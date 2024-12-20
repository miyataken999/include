<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_in_house_sales = array();
	$tdatafreee_in_house_sales[".truncateText"] = true;
	$tdatafreee_in_house_sales[".NumberOfChars"] = 80;
	$tdatafreee_in_house_sales[".ShortName"] = "freee_in_house_sales";
	$tdatafreee_in_house_sales[".OwnerID"] = "";
	$tdatafreee_in_house_sales[".OriginalTable"] = "freee_in_house_sales";

//	field labels
$fieldLabelsfreee_in_house_sales = array();
$fieldToolTipsfreee_in_house_sales = array();
$pageTitlesfreee_in_house_sales = array();
$placeHoldersfreee_in_house_sales = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_in_house_sales["Japanese"] = array();
	$fieldToolTipsfreee_in_house_sales["Japanese"] = array();
	$placeHoldersfreee_in_house_sales["Japanese"] = array();
	$pageTitlesfreee_in_house_sales["Japanese"] = array();
	$fieldLabelsfreee_in_house_sales["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_in_house_sales["Japanese"]["id"] = "";
	$placeHoldersfreee_in_house_sales["Japanese"]["id"] = "";
	$fieldLabelsfreee_in_house_sales["Japanese"]["from_dept_group_id"] = "販売部署";
	$fieldToolTipsfreee_in_house_sales["Japanese"]["from_dept_group_id"] = "";
	$placeHoldersfreee_in_house_sales["Japanese"]["from_dept_group_id"] = "";
	$fieldLabelsfreee_in_house_sales["Japanese"]["to_dept_group_id"] = "買取部署";
	$fieldToolTipsfreee_in_house_sales["Japanese"]["to_dept_group_id"] = "";
	$placeHoldersfreee_in_house_sales["Japanese"]["to_dept_group_id"] = "";
	$fieldLabelsfreee_in_house_sales["Japanese"]["account_item_id"] = "勘定科目";
	$fieldToolTipsfreee_in_house_sales["Japanese"]["account_item_id"] = "";
	$placeHoldersfreee_in_house_sales["Japanese"]["account_item_id"] = "";
	$fieldLabelsfreee_in_house_sales["Japanese"]["amount"] = "金額";
	$fieldToolTipsfreee_in_house_sales["Japanese"]["amount"] = "";
	$placeHoldersfreee_in_house_sales["Japanese"]["amount"] = "";
	$fieldLabelsfreee_in_house_sales["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsfreee_in_house_sales["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_in_house_sales["Japanese"]["updated_by"] = "";
	$fieldLabelsfreee_in_house_sales["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsfreee_in_house_sales["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_in_house_sales["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_in_house_sales["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsfreee_in_house_sales["Japanese"]["created_by"] = "";
	$placeHoldersfreee_in_house_sales["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_in_house_sales["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsfreee_in_house_sales["Japanese"]["created_at"] = "";
	$placeHoldersfreee_in_house_sales["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_in_house_sales["Japanese"]["freee_saisanhyou_id"] = "採算表（親）Id";
	$fieldToolTipsfreee_in_house_sales["Japanese"]["freee_saisanhyou_id"] = "";
	$placeHoldersfreee_in_house_sales["Japanese"]["freee_saisanhyou_id"] = "";
	$fieldLabelsfreee_in_house_sales["Japanese"]["rate_for_allocation"] = "料率";
	$fieldToolTipsfreee_in_house_sales["Japanese"]["rate_for_allocation"] = "";
	$placeHoldersfreee_in_house_sales["Japanese"]["rate_for_allocation"] = "";
	if (count($fieldToolTipsfreee_in_house_sales["Japanese"]))
		$tdatafreee_in_house_sales[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_in_house_sales[""] = array();
	$fieldToolTipsfreee_in_house_sales[""] = array();
	$placeHoldersfreee_in_house_sales[""] = array();
	$pageTitlesfreee_in_house_sales[""] = array();
	$fieldLabelsfreee_in_house_sales[""]["id"] = "Id";
	$fieldToolTipsfreee_in_house_sales[""]["id"] = "";
	$placeHoldersfreee_in_house_sales[""]["id"] = "";
	$fieldLabelsfreee_in_house_sales[""]["from_dept_group_id"] = "From Dept Group Id";
	$fieldToolTipsfreee_in_house_sales[""]["from_dept_group_id"] = "";
	$placeHoldersfreee_in_house_sales[""]["from_dept_group_id"] = "";
	$fieldLabelsfreee_in_house_sales[""]["to_dept_group_id"] = "To Dept Group Id";
	$fieldToolTipsfreee_in_house_sales[""]["to_dept_group_id"] = "";
	$placeHoldersfreee_in_house_sales[""]["to_dept_group_id"] = "";
	$fieldLabelsfreee_in_house_sales[""]["account_item_id"] = "Account Item Id";
	$fieldToolTipsfreee_in_house_sales[""]["account_item_id"] = "";
	$placeHoldersfreee_in_house_sales[""]["account_item_id"] = "";
	$fieldLabelsfreee_in_house_sales[""]["amount"] = "Amount";
	$fieldToolTipsfreee_in_house_sales[""]["amount"] = "";
	$placeHoldersfreee_in_house_sales[""]["amount"] = "";
	$fieldLabelsfreee_in_house_sales[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_in_house_sales[""]["updated_by"] = "";
	$placeHoldersfreee_in_house_sales[""]["updated_by"] = "";
	$fieldLabelsfreee_in_house_sales[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_in_house_sales[""]["updated_at"] = "";
	$placeHoldersfreee_in_house_sales[""]["updated_at"] = "";
	$fieldLabelsfreee_in_house_sales[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_in_house_sales[""]["created_by"] = "";
	$placeHoldersfreee_in_house_sales[""]["created_by"] = "";
	$fieldLabelsfreee_in_house_sales[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_in_house_sales[""]["created_at"] = "";
	$placeHoldersfreee_in_house_sales[""]["created_at"] = "";
	$fieldLabelsfreee_in_house_sales[""]["freee_saisanhyou_id"] = "Freee Saisanhyou Id";
	$fieldToolTipsfreee_in_house_sales[""]["freee_saisanhyou_id"] = "";
	$placeHoldersfreee_in_house_sales[""]["freee_saisanhyou_id"] = "";
	$fieldLabelsfreee_in_house_sales[""]["rate_for_allocation"] = "Rate For Allocation";
	$fieldToolTipsfreee_in_house_sales[""]["rate_for_allocation"] = "";
	$placeHoldersfreee_in_house_sales[""]["rate_for_allocation"] = "";
	if (count($fieldToolTipsfreee_in_house_sales[""]))
		$tdatafreee_in_house_sales[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_in_house_sales["English"] = array();
	$fieldToolTipsfreee_in_house_sales["English"] = array();
	$placeHoldersfreee_in_house_sales["English"] = array();
	$pageTitlesfreee_in_house_sales["English"] = array();
	$fieldLabelsfreee_in_house_sales["English"]["id"] = "Id";
	$fieldToolTipsfreee_in_house_sales["English"]["id"] = "";
	$placeHoldersfreee_in_house_sales["English"]["id"] = "";
	$fieldLabelsfreee_in_house_sales["English"]["from_dept_group_id"] = "From Dept Group Id";
	$fieldToolTipsfreee_in_house_sales["English"]["from_dept_group_id"] = "";
	$placeHoldersfreee_in_house_sales["English"]["from_dept_group_id"] = "";
	$fieldLabelsfreee_in_house_sales["English"]["to_dept_group_id"] = "To Dept Group Id";
	$fieldToolTipsfreee_in_house_sales["English"]["to_dept_group_id"] = "";
	$placeHoldersfreee_in_house_sales["English"]["to_dept_group_id"] = "";
	$fieldLabelsfreee_in_house_sales["English"]["account_item_id"] = "Account Item Id";
	$fieldToolTipsfreee_in_house_sales["English"]["account_item_id"] = "";
	$placeHoldersfreee_in_house_sales["English"]["account_item_id"] = "";
	$fieldLabelsfreee_in_house_sales["English"]["amount"] = "Amount";
	$fieldToolTipsfreee_in_house_sales["English"]["amount"] = "";
	$placeHoldersfreee_in_house_sales["English"]["amount"] = "";
	$fieldLabelsfreee_in_house_sales["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_in_house_sales["English"]["updated_by"] = "";
	$placeHoldersfreee_in_house_sales["English"]["updated_by"] = "";
	$fieldLabelsfreee_in_house_sales["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_in_house_sales["English"]["updated_at"] = "";
	$placeHoldersfreee_in_house_sales["English"]["updated_at"] = "";
	$fieldLabelsfreee_in_house_sales["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_in_house_sales["English"]["created_by"] = "";
	$placeHoldersfreee_in_house_sales["English"]["created_by"] = "";
	$fieldLabelsfreee_in_house_sales["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_in_house_sales["English"]["created_at"] = "";
	$placeHoldersfreee_in_house_sales["English"]["created_at"] = "";
	$fieldLabelsfreee_in_house_sales["English"]["freee_saisanhyou_id"] = "Freee Saisanhyou Id";
	$fieldToolTipsfreee_in_house_sales["English"]["freee_saisanhyou_id"] = "";
	$placeHoldersfreee_in_house_sales["English"]["freee_saisanhyou_id"] = "";
	$fieldLabelsfreee_in_house_sales["English"]["rate_for_allocation"] = "Rate For Allocation";
	$fieldToolTipsfreee_in_house_sales["English"]["rate_for_allocation"] = "";
	$placeHoldersfreee_in_house_sales["English"]["rate_for_allocation"] = "";
	if (count($fieldToolTipsfreee_in_house_sales["English"]))
		$tdatafreee_in_house_sales[".isUseToolTips"] = true;
}


	$tdatafreee_in_house_sales[".NCSearch"] = true;



$tdatafreee_in_house_sales[".shortTableName"] = "freee_in_house_sales";
$tdatafreee_in_house_sales[".nSecOptions"] = 0;
$tdatafreee_in_house_sales[".recsPerRowPrint"] = 1;
$tdatafreee_in_house_sales[".mainTableOwnerID"] = "";
$tdatafreee_in_house_sales[".moveNext"] = 1;
$tdatafreee_in_house_sales[".entityType"] = 0;

$tdatafreee_in_house_sales[".strOriginalTableName"] = "freee_in_house_sales";

	



$tdatafreee_in_house_sales[".showAddInPopup"] = false;

$tdatafreee_in_house_sales[".showEditInPopup"] = false;

$tdatafreee_in_house_sales[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_in_house_sales[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_in_house_sales[".fieldsForRegister"] = array();

$tdatafreee_in_house_sales[".listAjax"] = false;

	$tdatafreee_in_house_sales[".audit"] = true;

	$tdatafreee_in_house_sales[".locking"] = false;



$tdatafreee_in_house_sales[".list"] = true;

$tdatafreee_in_house_sales[".inlineEdit"] = true;


$tdatafreee_in_house_sales[".reorderRecordsByHeader"] = true;



$tdatafreee_in_house_sales[".inlineAdd"] = true;

$tdatafreee_in_house_sales[".import"] = true;

$tdatafreee_in_house_sales[".exportTo"] = true;


$tdatafreee_in_house_sales[".delete"] = true;

$tdatafreee_in_house_sales[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_in_house_sales[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_in_house_sales[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_in_house_sales[".searchSaving"] = false;
//

$tdatafreee_in_house_sales[".showSearchPanel"] = true;
		$tdatafreee_in_house_sales[".flexibleSearch"] = true;

$tdatafreee_in_house_sales[".isUseAjaxSuggest"] = true;

$tdatafreee_in_house_sales[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatafreee_in_house_sales[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_in_house_sales[".buttonsAdded"] = false;

$tdatafreee_in_house_sales[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_in_house_sales[".isUseTimeForSearch"] = false;



$tdatafreee_in_house_sales[".badgeColor"] = "5f9ea0";

$tdatafreee_in_house_sales[".detailsLinksOnList"] = "1";

$tdatafreee_in_house_sales[".allSearchFields"] = array();
$tdatafreee_in_house_sales[".filterFields"] = array();
$tdatafreee_in_house_sales[".requiredSearchFields"] = array();

$tdatafreee_in_house_sales[".allSearchFields"][] = "id";
	$tdatafreee_in_house_sales[".allSearchFields"][] = "freee_saisanhyou_id";
	$tdatafreee_in_house_sales[".allSearchFields"][] = "from_dept_group_id";
	$tdatafreee_in_house_sales[".allSearchFields"][] = "to_dept_group_id";
	$tdatafreee_in_house_sales[".allSearchFields"][] = "account_item_id";
	$tdatafreee_in_house_sales[".allSearchFields"][] = "amount";
	$tdatafreee_in_house_sales[".allSearchFields"][] = "rate_for_allocation";
	$tdatafreee_in_house_sales[".allSearchFields"][] = "updated_by";
	$tdatafreee_in_house_sales[".allSearchFields"][] = "updated_at";
	$tdatafreee_in_house_sales[".allSearchFields"][] = "created_by";
	$tdatafreee_in_house_sales[".allSearchFields"][] = "created_at";
	

$tdatafreee_in_house_sales[".googleLikeFields"] = array();
$tdatafreee_in_house_sales[".googleLikeFields"][] = "id";
$tdatafreee_in_house_sales[".googleLikeFields"][] = "from_dept_group_id";
$tdatafreee_in_house_sales[".googleLikeFields"][] = "to_dept_group_id";
$tdatafreee_in_house_sales[".googleLikeFields"][] = "account_item_id";
$tdatafreee_in_house_sales[".googleLikeFields"][] = "amount";
$tdatafreee_in_house_sales[".googleLikeFields"][] = "updated_by";
$tdatafreee_in_house_sales[".googleLikeFields"][] = "updated_at";
$tdatafreee_in_house_sales[".googleLikeFields"][] = "created_by";
$tdatafreee_in_house_sales[".googleLikeFields"][] = "created_at";
$tdatafreee_in_house_sales[".googleLikeFields"][] = "freee_saisanhyou_id";
$tdatafreee_in_house_sales[".googleLikeFields"][] = "rate_for_allocation";


$tdatafreee_in_house_sales[".advSearchFields"] = array();
$tdatafreee_in_house_sales[".advSearchFields"][] = "id";
$tdatafreee_in_house_sales[".advSearchFields"][] = "freee_saisanhyou_id";
$tdatafreee_in_house_sales[".advSearchFields"][] = "from_dept_group_id";
$tdatafreee_in_house_sales[".advSearchFields"][] = "to_dept_group_id";
$tdatafreee_in_house_sales[".advSearchFields"][] = "account_item_id";
$tdatafreee_in_house_sales[".advSearchFields"][] = "amount";
$tdatafreee_in_house_sales[".advSearchFields"][] = "rate_for_allocation";
$tdatafreee_in_house_sales[".advSearchFields"][] = "updated_by";
$tdatafreee_in_house_sales[".advSearchFields"][] = "updated_at";
$tdatafreee_in_house_sales[".advSearchFields"][] = "created_by";
$tdatafreee_in_house_sales[".advSearchFields"][] = "created_at";

$tdatafreee_in_house_sales[".tableType"] = "list";

$tdatafreee_in_house_sales[".printerPageOrientation"] = 0;
$tdatafreee_in_house_sales[".nPrinterPageScale"] = 100;

$tdatafreee_in_house_sales[".nPrinterSplitRecords"] = 40;

$tdatafreee_in_house_sales[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_in_house_sales[".geocodingEnabled"] = false;





$tdatafreee_in_house_sales[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdatafreee_in_house_sales[".totalsFields"] = array();
$tdatafreee_in_house_sales[".totalsFields"][] = array(
	"fName" => "amount",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Currency');

$tdatafreee_in_house_sales[".pageSize"] = 20;

$tdatafreee_in_house_sales[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_in_house_sales[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_in_house_sales[".orderindexes"] = array();
$tdatafreee_in_house_sales[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatafreee_in_house_sales[".sqlHead"] = "SELECT `id`,  `from_dept_group_id`,  `to_dept_group_id`,  `account_item_id`,  `amount`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`,  `freee_saisanhyou_id`,  `rate_for_allocation`";
$tdatafreee_in_house_sales[".sqlFrom"] = "FROM `freee_in_house_sales`";
$tdatafreee_in_house_sales[".sqlWhereExpr"] = "";
$tdatafreee_in_house_sales[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_in_house_sales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_in_house_sales[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_in_house_sales[".highlightSearchResults"] = true;

$tableKeysfreee_in_house_sales = array();
$tableKeysfreee_in_house_sales[] = "id";
$tdatafreee_in_house_sales[".Keys"] = $tableKeysfreee_in_house_sales;

$tdatafreee_in_house_sales[".listFields"] = array();
$tdatafreee_in_house_sales[".listFields"][] = "id";
$tdatafreee_in_house_sales[".listFields"][] = "freee_saisanhyou_id";
$tdatafreee_in_house_sales[".listFields"][] = "from_dept_group_id";
$tdatafreee_in_house_sales[".listFields"][] = "to_dept_group_id";
$tdatafreee_in_house_sales[".listFields"][] = "account_item_id";
$tdatafreee_in_house_sales[".listFields"][] = "amount";
$tdatafreee_in_house_sales[".listFields"][] = "rate_for_allocation";
$tdatafreee_in_house_sales[".listFields"][] = "updated_by";
$tdatafreee_in_house_sales[".listFields"][] = "updated_at";
$tdatafreee_in_house_sales[".listFields"][] = "created_by";
$tdatafreee_in_house_sales[".listFields"][] = "created_at";

$tdatafreee_in_house_sales[".hideMobileList"] = array();


$tdatafreee_in_house_sales[".viewFields"] = array();

$tdatafreee_in_house_sales[".addFields"] = array();

$tdatafreee_in_house_sales[".masterListFields"] = array();
$tdatafreee_in_house_sales[".masterListFields"][] = "id";
$tdatafreee_in_house_sales[".masterListFields"][] = "freee_saisanhyou_id";
$tdatafreee_in_house_sales[".masterListFields"][] = "from_dept_group_id";
$tdatafreee_in_house_sales[".masterListFields"][] = "to_dept_group_id";
$tdatafreee_in_house_sales[".masterListFields"][] = "account_item_id";
$tdatafreee_in_house_sales[".masterListFields"][] = "amount";
$tdatafreee_in_house_sales[".masterListFields"][] = "rate_for_allocation";
$tdatafreee_in_house_sales[".masterListFields"][] = "updated_by";
$tdatafreee_in_house_sales[".masterListFields"][] = "updated_at";
$tdatafreee_in_house_sales[".masterListFields"][] = "created_by";
$tdatafreee_in_house_sales[".masterListFields"][] = "created_at";

$tdatafreee_in_house_sales[".inlineAddFields"] = array();
$tdatafreee_in_house_sales[".inlineAddFields"][] = "from_dept_group_id";
$tdatafreee_in_house_sales[".inlineAddFields"][] = "to_dept_group_id";
$tdatafreee_in_house_sales[".inlineAddFields"][] = "account_item_id";
$tdatafreee_in_house_sales[".inlineAddFields"][] = "amount";

$tdatafreee_in_house_sales[".editFields"] = array();

$tdatafreee_in_house_sales[".inlineEditFields"] = array();
$tdatafreee_in_house_sales[".inlineEditFields"][] = "from_dept_group_id";
$tdatafreee_in_house_sales[".inlineEditFields"][] = "to_dept_group_id";
$tdatafreee_in_house_sales[".inlineEditFields"][] = "account_item_id";
$tdatafreee_in_house_sales[".inlineEditFields"][] = "amount";

$tdatafreee_in_house_sales[".updateSelectedFields"] = array();


$tdatafreee_in_house_sales[".exportFields"] = array();
$tdatafreee_in_house_sales[".exportFields"][] = "id";
$tdatafreee_in_house_sales[".exportFields"][] = "freee_saisanhyou_id";
$tdatafreee_in_house_sales[".exportFields"][] = "from_dept_group_id";
$tdatafreee_in_house_sales[".exportFields"][] = "to_dept_group_id";
$tdatafreee_in_house_sales[".exportFields"][] = "account_item_id";
$tdatafreee_in_house_sales[".exportFields"][] = "amount";
$tdatafreee_in_house_sales[".exportFields"][] = "rate_for_allocation";
$tdatafreee_in_house_sales[".exportFields"][] = "updated_by";
$tdatafreee_in_house_sales[".exportFields"][] = "updated_at";
$tdatafreee_in_house_sales[".exportFields"][] = "created_by";
$tdatafreee_in_house_sales[".exportFields"][] = "created_at";

$tdatafreee_in_house_sales[".importFields"] = array();
$tdatafreee_in_house_sales[".importFields"][] = "id";
$tdatafreee_in_house_sales[".importFields"][] = "from_dept_group_id";
$tdatafreee_in_house_sales[".importFields"][] = "to_dept_group_id";
$tdatafreee_in_house_sales[".importFields"][] = "account_item_id";
$tdatafreee_in_house_sales[".importFields"][] = "amount";

$tdatafreee_in_house_sales[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_in_house_sales";
	$fdata["Label"] = GetFieldLabel("freee_in_house_sales","id");
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




	$tdatafreee_in_house_sales["id"] = $fdata;
//	from_dept_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "from_dept_group_id";
	$fdata["GoodName"] = "from_dept_group_id";
	$fdata["ownerTable"] = "freee_in_house_sales";
	$fdata["Label"] = GetFieldLabel("freee_in_house_sales","from_dept_group_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "from_dept_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`from_dept_group_id`";

	
	
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




	$tdatafreee_in_house_sales["from_dept_group_id"] = $fdata;
//	to_dept_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "to_dept_group_id";
	$fdata["GoodName"] = "to_dept_group_id";
	$fdata["ownerTable"] = "freee_in_house_sales";
	$fdata["Label"] = GetFieldLabel("freee_in_house_sales","to_dept_group_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "to_dept_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`to_dept_group_id`";

	
	
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




	$tdatafreee_in_house_sales["to_dept_group_id"] = $fdata;
//	account_item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "account_item_id";
	$fdata["GoodName"] = "account_item_id";
	$fdata["ownerTable"] = "freee_in_house_sales";
	$fdata["Label"] = GetFieldLabel("freee_in_house_sales","account_item_id");
	$fdata["FieldType"] = 20;

	
	
	
			
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

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
	
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




	$tdatafreee_in_house_sales["account_item_id"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "freee_in_house_sales";
	$fdata["Label"] = GetFieldLabel("freee_in_house_sales","amount");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatafreee_in_house_sales["amount"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_in_house_sales";
	$fdata["Label"] = GetFieldLabel("freee_in_house_sales","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
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




	$tdatafreee_in_house_sales["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_in_house_sales";
	$fdata["Label"] = GetFieldLabel("freee_in_house_sales","updated_at");
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




	$tdatafreee_in_house_sales["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_in_house_sales";
	$fdata["Label"] = GetFieldLabel("freee_in_house_sales","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
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




	$tdatafreee_in_house_sales["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_in_house_sales";
	$fdata["Label"] = GetFieldLabel("freee_in_house_sales","created_at");
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




	$tdatafreee_in_house_sales["created_at"] = $fdata;
//	freee_saisanhyou_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "freee_saisanhyou_id";
	$fdata["GoodName"] = "freee_saisanhyou_id";
	$fdata["ownerTable"] = "freee_in_house_sales";
	$fdata["Label"] = GetFieldLabel("freee_in_house_sales","freee_saisanhyou_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_saisanhyou_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_saisanhyou_id`";

	
	
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




	$tdatafreee_in_house_sales["freee_saisanhyou_id"] = $fdata;
//	rate_for_allocation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "rate_for_allocation";
	$fdata["GoodName"] = "rate_for_allocation";
	$fdata["ownerTable"] = "freee_in_house_sales";
	$fdata["Label"] = GetFieldLabel("freee_in_house_sales","rate_for_allocation");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rate_for_allocation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`rate_for_allocation`";

	
	
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




	$tdatafreee_in_house_sales["rate_for_allocation"] = $fdata;


$tables_data["freee_in_house_sales"]=&$tdatafreee_in_house_sales;
$field_labels["freee_in_house_sales"] = &$fieldLabelsfreee_in_house_sales;
$fieldToolTips["freee_in_house_sales"] = &$fieldToolTipsfreee_in_house_sales;
$placeHolders["freee_in_house_sales"] = &$placeHoldersfreee_in_house_sales;
$page_titles["freee_in_house_sales"] = &$pageTitlesfreee_in_house_sales;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_in_house_sales"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_in_house_sales"] = array();


	
				$strOriginalDetailsTable="freee_saisanhyou";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="freee_saisanhyou";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "freee_saisanhyou";
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
					$masterTablesData["freee_in_house_sales"][0] = $masterParams;
				$masterTablesData["freee_in_house_sales"][0]["masterKeys"] = array();
	$masterTablesData["freee_in_house_sales"][0]["masterKeys"][]="id";
				$masterTablesData["freee_in_house_sales"][0]["detailKeys"] = array();
	$masterTablesData["freee_in_house_sales"][0]["detailKeys"][]="freee_saisanhyou_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_in_house_sales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `from_dept_group_id`,  `to_dept_group_id`,  `account_item_id`,  `amount`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`,  `freee_saisanhyou_id`,  `rate_for_allocation`";
$proto0["m_strFrom"] = "FROM `freee_in_house_sales`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `id` DESC";
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
	"m_strTable" => "freee_in_house_sales",
	"m_srcTableName" => "freee_in_house_sales"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_in_house_sales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "from_dept_group_id",
	"m_strTable" => "freee_in_house_sales",
	"m_srcTableName" => "freee_in_house_sales"
));

$proto8["m_sql"] = "`from_dept_group_id`";
$proto8["m_srcTableName"] = "freee_in_house_sales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "to_dept_group_id",
	"m_strTable" => "freee_in_house_sales",
	"m_srcTableName" => "freee_in_house_sales"
));

$proto10["m_sql"] = "`to_dept_group_id`";
$proto10["m_srcTableName"] = "freee_in_house_sales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "account_item_id",
	"m_strTable" => "freee_in_house_sales",
	"m_srcTableName" => "freee_in_house_sales"
));

$proto12["m_sql"] = "`account_item_id`";
$proto12["m_srcTableName"] = "freee_in_house_sales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "freee_in_house_sales",
	"m_srcTableName" => "freee_in_house_sales"
));

$proto14["m_sql"] = "`amount`";
$proto14["m_srcTableName"] = "freee_in_house_sales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_in_house_sales",
	"m_srcTableName" => "freee_in_house_sales"
));

$proto16["m_sql"] = "`updated_by`";
$proto16["m_srcTableName"] = "freee_in_house_sales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_in_house_sales",
	"m_srcTableName" => "freee_in_house_sales"
));

$proto18["m_sql"] = "`updated_at`";
$proto18["m_srcTableName"] = "freee_in_house_sales";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_in_house_sales",
	"m_srcTableName" => "freee_in_house_sales"
));

$proto20["m_sql"] = "`created_by`";
$proto20["m_srcTableName"] = "freee_in_house_sales";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_in_house_sales",
	"m_srcTableName" => "freee_in_house_sales"
));

$proto22["m_sql"] = "`created_at`";
$proto22["m_srcTableName"] = "freee_in_house_sales";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_saisanhyou_id",
	"m_strTable" => "freee_in_house_sales",
	"m_srcTableName" => "freee_in_house_sales"
));

$proto24["m_sql"] = "`freee_saisanhyou_id`";
$proto24["m_srcTableName"] = "freee_in_house_sales";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "rate_for_allocation",
	"m_strTable" => "freee_in_house_sales",
	"m_srcTableName" => "freee_in_house_sales"
));

$proto26["m_sql"] = "`rate_for_allocation`";
$proto26["m_srcTableName"] = "freee_in_house_sales";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "freee_in_house_sales";
$proto29["m_srcTableName"] = "freee_in_house_sales";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "from_dept_group_id";
$proto29["m_columns"][] = "to_dept_group_id";
$proto29["m_columns"][] = "account_item_id";
$proto29["m_columns"][] = "amount";
$proto29["m_columns"][] = "updated_by";
$proto29["m_columns"][] = "updated_at";
$proto29["m_columns"][] = "created_by";
$proto29["m_columns"][] = "created_at";
$proto29["m_columns"][] = "freee_saisanhyou_id";
$proto29["m_columns"][] = "rate_for_allocation";
$proto29["m_columns"][] = "partner_id";
$proto29["m_columns"][] = "item_id";
$proto29["m_columns"][] = "issue_date";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "`freee_in_house_sales`";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "freee_in_house_sales";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "freee_in_house_sales",
	"m_srcTableName" => "freee_in_house_sales"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 0;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="freee_in_house_sales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_in_house_sales = createSqlQuery_freee_in_house_sales();


	
		;

											

$tdatafreee_in_house_sales[".sqlquery"] = $queryData_freee_in_house_sales;

include_once(getabspath("include/freee_in_house_sales_events.php"));
$tableEvents["freee_in_house_sales"] = new eventclass_freee_in_house_sales;
$tdatafreee_in_house_sales[".hasEvents"] = true;

?>