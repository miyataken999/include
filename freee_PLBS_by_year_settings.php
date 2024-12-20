<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_PLBS_by_year = array();
	$tdatafreee_PLBS_by_year[".truncateText"] = true;
	$tdatafreee_PLBS_by_year[".NumberOfChars"] = 80;
	$tdatafreee_PLBS_by_year[".ShortName"] = "freee_PLBS_by_year";
	$tdatafreee_PLBS_by_year[".OwnerID"] = "";
	$tdatafreee_PLBS_by_year[".OriginalTable"] = "freee_PLBS_by_year";

//	field labels
$fieldLabelsfreee_PLBS_by_year = array();
$fieldToolTipsfreee_PLBS_by_year = array();
$pageTitlesfreee_PLBS_by_year = array();
$placeHoldersfreee_PLBS_by_year = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_PLBS_by_year["Japanese"] = array();
	$fieldToolTipsfreee_PLBS_by_year["Japanese"] = array();
	$placeHoldersfreee_PLBS_by_year["Japanese"] = array();
	$pageTitlesfreee_PLBS_by_year["Japanese"] = array();
	$fieldLabelsfreee_PLBS_by_year["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_PLBS_by_year["Japanese"]["id"] = "";
	$placeHoldersfreee_PLBS_by_year["Japanese"]["id"] = "";
	$fieldLabelsfreee_PLBS_by_year["Japanese"]["fiscal_year"] = "Fiscal Year";
	$fieldToolTipsfreee_PLBS_by_year["Japanese"]["fiscal_year"] = "";
	$placeHoldersfreee_PLBS_by_year["Japanese"]["fiscal_year"] = "";
	$fieldLabelsfreee_PLBS_by_year["Japanese"]["yearly_commerce"] = "Yearly Commerce";
	$fieldToolTipsfreee_PLBS_by_year["Japanese"]["yearly_commerce"] = "";
	$placeHoldersfreee_PLBS_by_year["Japanese"]["yearly_commerce"] = "";
	$fieldLabelsfreee_PLBS_by_year["Japanese"]["number_of_workers"] = "Number Of Workers";
	$fieldToolTipsfreee_PLBS_by_year["Japanese"]["number_of_workers"] = "";
	$placeHoldersfreee_PLBS_by_year["Japanese"]["number_of_workers"] = "";
	$fieldLabelsfreee_PLBS_by_year["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_PLBS_by_year["Japanese"]["created_at"] = "";
	$placeHoldersfreee_PLBS_by_year["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_PLBS_by_year["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_PLBS_by_year["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_PLBS_by_year["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_PLBS_by_year["Japanese"]["avg_workers_age"] = "Avg Workers Age";
	$fieldToolTipsfreee_PLBS_by_year["Japanese"]["avg_workers_age"] = "";
	$placeHoldersfreee_PLBS_by_year["Japanese"]["avg_workers_age"] = "";
	$fieldLabelsfreee_PLBS_by_year["Japanese"]["fiscal_year_id"] = "Fiscal Year Id";
	$fieldToolTipsfreee_PLBS_by_year["Japanese"]["fiscal_year_id"] = "";
	$placeHoldersfreee_PLBS_by_year["Japanese"]["fiscal_year_id"] = "";
	if (count($fieldToolTipsfreee_PLBS_by_year["Japanese"]))
		$tdatafreee_PLBS_by_year[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_PLBS_by_year[""] = array();
	$fieldToolTipsfreee_PLBS_by_year[""] = array();
	$placeHoldersfreee_PLBS_by_year[""] = array();
	$pageTitlesfreee_PLBS_by_year[""] = array();
	$fieldLabelsfreee_PLBS_by_year[""]["id"] = "Id";
	$fieldToolTipsfreee_PLBS_by_year[""]["id"] = "";
	$placeHoldersfreee_PLBS_by_year[""]["id"] = "";
	$fieldLabelsfreee_PLBS_by_year[""]["fiscal_year"] = "Fiscal Year";
	$fieldToolTipsfreee_PLBS_by_year[""]["fiscal_year"] = "";
	$placeHoldersfreee_PLBS_by_year[""]["fiscal_year"] = "";
	$fieldLabelsfreee_PLBS_by_year[""]["yearly_commerce"] = "Yearly Commerce";
	$fieldToolTipsfreee_PLBS_by_year[""]["yearly_commerce"] = "";
	$placeHoldersfreee_PLBS_by_year[""]["yearly_commerce"] = "";
	$fieldLabelsfreee_PLBS_by_year[""]["number_of_workers"] = "Number Of Workers";
	$fieldToolTipsfreee_PLBS_by_year[""]["number_of_workers"] = "";
	$placeHoldersfreee_PLBS_by_year[""]["number_of_workers"] = "";
	$fieldLabelsfreee_PLBS_by_year[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_PLBS_by_year[""]["created_at"] = "";
	$placeHoldersfreee_PLBS_by_year[""]["created_at"] = "";
	$fieldLabelsfreee_PLBS_by_year[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_PLBS_by_year[""]["updated_at"] = "";
	$placeHoldersfreee_PLBS_by_year[""]["updated_at"] = "";
	$fieldLabelsfreee_PLBS_by_year[""]["avg_workers_age"] = "Avg Workers Age";
	$fieldToolTipsfreee_PLBS_by_year[""]["avg_workers_age"] = "";
	$placeHoldersfreee_PLBS_by_year[""]["avg_workers_age"] = "";
	$fieldLabelsfreee_PLBS_by_year[""]["fiscal_year_id"] = "Fiscal Year Id";
	$fieldToolTipsfreee_PLBS_by_year[""]["fiscal_year_id"] = "";
	$placeHoldersfreee_PLBS_by_year[""]["fiscal_year_id"] = "";
	if (count($fieldToolTipsfreee_PLBS_by_year[""]))
		$tdatafreee_PLBS_by_year[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_PLBS_by_year["English"] = array();
	$fieldToolTipsfreee_PLBS_by_year["English"] = array();
	$placeHoldersfreee_PLBS_by_year["English"] = array();
	$pageTitlesfreee_PLBS_by_year["English"] = array();
	$fieldLabelsfreee_PLBS_by_year["English"]["id"] = "Id";
	$fieldToolTipsfreee_PLBS_by_year["English"]["id"] = "";
	$placeHoldersfreee_PLBS_by_year["English"]["id"] = "";
	$fieldLabelsfreee_PLBS_by_year["English"]["fiscal_year"] = "Fiscal Year";
	$fieldToolTipsfreee_PLBS_by_year["English"]["fiscal_year"] = "";
	$placeHoldersfreee_PLBS_by_year["English"]["fiscal_year"] = "";
	$fieldLabelsfreee_PLBS_by_year["English"]["yearly_commerce"] = "Yearly Commerce";
	$fieldToolTipsfreee_PLBS_by_year["English"]["yearly_commerce"] = "";
	$placeHoldersfreee_PLBS_by_year["English"]["yearly_commerce"] = "";
	$fieldLabelsfreee_PLBS_by_year["English"]["number_of_workers"] = "Number Of Workers";
	$fieldToolTipsfreee_PLBS_by_year["English"]["number_of_workers"] = "";
	$placeHoldersfreee_PLBS_by_year["English"]["number_of_workers"] = "";
	$fieldLabelsfreee_PLBS_by_year["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_PLBS_by_year["English"]["created_at"] = "";
	$placeHoldersfreee_PLBS_by_year["English"]["created_at"] = "";
	$fieldLabelsfreee_PLBS_by_year["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_PLBS_by_year["English"]["updated_at"] = "";
	$placeHoldersfreee_PLBS_by_year["English"]["updated_at"] = "";
	$fieldLabelsfreee_PLBS_by_year["English"]["avg_workers_age"] = "Avg Workers Age";
	$fieldToolTipsfreee_PLBS_by_year["English"]["avg_workers_age"] = "";
	$placeHoldersfreee_PLBS_by_year["English"]["avg_workers_age"] = "";
	$fieldLabelsfreee_PLBS_by_year["English"]["fiscal_year_id"] = "Fiscal Year Id";
	$fieldToolTipsfreee_PLBS_by_year["English"]["fiscal_year_id"] = "";
	$placeHoldersfreee_PLBS_by_year["English"]["fiscal_year_id"] = "";
	if (count($fieldToolTipsfreee_PLBS_by_year["English"]))
		$tdatafreee_PLBS_by_year[".isUseToolTips"] = true;
}


	$tdatafreee_PLBS_by_year[".NCSearch"] = true;



$tdatafreee_PLBS_by_year[".shortTableName"] = "freee_PLBS_by_year";
$tdatafreee_PLBS_by_year[".nSecOptions"] = 0;
$tdatafreee_PLBS_by_year[".recsPerRowPrint"] = 1;
$tdatafreee_PLBS_by_year[".mainTableOwnerID"] = "";
$tdatafreee_PLBS_by_year[".moveNext"] = 1;
$tdatafreee_PLBS_by_year[".entityType"] = 0;

$tdatafreee_PLBS_by_year[".strOriginalTableName"] = "freee_PLBS_by_year";

	



$tdatafreee_PLBS_by_year[".showAddInPopup"] = false;

$tdatafreee_PLBS_by_year[".showEditInPopup"] = false;

$tdatafreee_PLBS_by_year[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_PLBS_by_year[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_PLBS_by_year[".fieldsForRegister"] = array();

$tdatafreee_PLBS_by_year[".listAjax"] = false;

	$tdatafreee_PLBS_by_year[".audit"] = false;

	$tdatafreee_PLBS_by_year[".locking"] = false;



$tdatafreee_PLBS_by_year[".list"] = true;



$tdatafreee_PLBS_by_year[".reorderRecordsByHeader"] = true;





$tdatafreee_PLBS_by_year[".exportTo"] = true;



$tdatafreee_PLBS_by_year[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_PLBS_by_year[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_PLBS_by_year[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_PLBS_by_year[".searchSaving"] = false;
//

$tdatafreee_PLBS_by_year[".showSearchPanel"] = true;
		$tdatafreee_PLBS_by_year[".flexibleSearch"] = true;

$tdatafreee_PLBS_by_year[".isUseAjaxSuggest"] = true;

$tdatafreee_PLBS_by_year[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_PLBS_by_year[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_PLBS_by_year[".buttonsAdded"] = false;

$tdatafreee_PLBS_by_year[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_PLBS_by_year[".isUseTimeForSearch"] = false;




$tdatafreee_PLBS_by_year[".detailsLinksOnList"] = "1";

$tdatafreee_PLBS_by_year[".allSearchFields"] = array();
$tdatafreee_PLBS_by_year[".filterFields"] = array();
$tdatafreee_PLBS_by_year[".requiredSearchFields"] = array();

$tdatafreee_PLBS_by_year[".allSearchFields"][] = "id";
	$tdatafreee_PLBS_by_year[".allSearchFields"][] = "fiscal_year";
	$tdatafreee_PLBS_by_year[".allSearchFields"][] = "yearly_commerce";
	$tdatafreee_PLBS_by_year[".allSearchFields"][] = "number_of_workers";
	$tdatafreee_PLBS_by_year[".allSearchFields"][] = "created_at";
	$tdatafreee_PLBS_by_year[".allSearchFields"][] = "updated_at";
	$tdatafreee_PLBS_by_year[".allSearchFields"][] = "avg_workers_age";
	$tdatafreee_PLBS_by_year[".allSearchFields"][] = "fiscal_year_id";
	

$tdatafreee_PLBS_by_year[".googleLikeFields"] = array();
$tdatafreee_PLBS_by_year[".googleLikeFields"][] = "id";
$tdatafreee_PLBS_by_year[".googleLikeFields"][] = "fiscal_year";
$tdatafreee_PLBS_by_year[".googleLikeFields"][] = "yearly_commerce";
$tdatafreee_PLBS_by_year[".googleLikeFields"][] = "number_of_workers";
$tdatafreee_PLBS_by_year[".googleLikeFields"][] = "created_at";
$tdatafreee_PLBS_by_year[".googleLikeFields"][] = "updated_at";
$tdatafreee_PLBS_by_year[".googleLikeFields"][] = "avg_workers_age";
$tdatafreee_PLBS_by_year[".googleLikeFields"][] = "fiscal_year_id";


$tdatafreee_PLBS_by_year[".advSearchFields"] = array();
$tdatafreee_PLBS_by_year[".advSearchFields"][] = "id";
$tdatafreee_PLBS_by_year[".advSearchFields"][] = "fiscal_year";
$tdatafreee_PLBS_by_year[".advSearchFields"][] = "yearly_commerce";
$tdatafreee_PLBS_by_year[".advSearchFields"][] = "number_of_workers";
$tdatafreee_PLBS_by_year[".advSearchFields"][] = "created_at";
$tdatafreee_PLBS_by_year[".advSearchFields"][] = "updated_at";
$tdatafreee_PLBS_by_year[".advSearchFields"][] = "avg_workers_age";
$tdatafreee_PLBS_by_year[".advSearchFields"][] = "fiscal_year_id";

$tdatafreee_PLBS_by_year[".tableType"] = "list";

$tdatafreee_PLBS_by_year[".printerPageOrientation"] = 0;
$tdatafreee_PLBS_by_year[".nPrinterPageScale"] = 100;

$tdatafreee_PLBS_by_year[".nPrinterSplitRecords"] = 40;

$tdatafreee_PLBS_by_year[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_PLBS_by_year[".geocodingEnabled"] = false;





$tdatafreee_PLBS_by_year[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_PLBS_by_year[".pageSize"] = 100;

$tdatafreee_PLBS_by_year[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `fiscal_year` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_PLBS_by_year[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_PLBS_by_year[".orderindexes"] = array();
$tdatafreee_PLBS_by_year[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`fiscal_year`");

$tdatafreee_PLBS_by_year[".sqlHead"] = "SELECT `id`,  `fiscal_year`,  `yearly_commerce`,  `number_of_workers`,  `created_at`,  `updated_at`,  `avg_workers_age`,  `fiscal_year_id`";
$tdatafreee_PLBS_by_year[".sqlFrom"] = "FROM `freee_PLBS_by_year`";
$tdatafreee_PLBS_by_year[".sqlWhereExpr"] = "";
$tdatafreee_PLBS_by_year[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_PLBS_by_year[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_PLBS_by_year[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_PLBS_by_year[".highlightSearchResults"] = true;

$tableKeysfreee_PLBS_by_year = array();
$tableKeysfreee_PLBS_by_year[] = "id";
$tdatafreee_PLBS_by_year[".Keys"] = $tableKeysfreee_PLBS_by_year;

$tdatafreee_PLBS_by_year[".listFields"] = array();
$tdatafreee_PLBS_by_year[".listFields"][] = "id";
$tdatafreee_PLBS_by_year[".listFields"][] = "fiscal_year";
$tdatafreee_PLBS_by_year[".listFields"][] = "yearly_commerce";
$tdatafreee_PLBS_by_year[".listFields"][] = "number_of_workers";
$tdatafreee_PLBS_by_year[".listFields"][] = "created_at";
$tdatafreee_PLBS_by_year[".listFields"][] = "updated_at";
$tdatafreee_PLBS_by_year[".listFields"][] = "avg_workers_age";
$tdatafreee_PLBS_by_year[".listFields"][] = "fiscal_year_id";

$tdatafreee_PLBS_by_year[".hideMobileList"] = array();


$tdatafreee_PLBS_by_year[".viewFields"] = array();
$tdatafreee_PLBS_by_year[".viewFields"][] = "id";
$tdatafreee_PLBS_by_year[".viewFields"][] = "fiscal_year";
$tdatafreee_PLBS_by_year[".viewFields"][] = "yearly_commerce";
$tdatafreee_PLBS_by_year[".viewFields"][] = "number_of_workers";
$tdatafreee_PLBS_by_year[".viewFields"][] = "created_at";
$tdatafreee_PLBS_by_year[".viewFields"][] = "updated_at";
$tdatafreee_PLBS_by_year[".viewFields"][] = "avg_workers_age";
$tdatafreee_PLBS_by_year[".viewFields"][] = "fiscal_year_id";

$tdatafreee_PLBS_by_year[".addFields"] = array();
$tdatafreee_PLBS_by_year[".addFields"][] = "fiscal_year";
$tdatafreee_PLBS_by_year[".addFields"][] = "yearly_commerce";
$tdatafreee_PLBS_by_year[".addFields"][] = "number_of_workers";
$tdatafreee_PLBS_by_year[".addFields"][] = "created_at";
$tdatafreee_PLBS_by_year[".addFields"][] = "updated_at";
$tdatafreee_PLBS_by_year[".addFields"][] = "avg_workers_age";
$tdatafreee_PLBS_by_year[".addFields"][] = "fiscal_year_id";

$tdatafreee_PLBS_by_year[".masterListFields"] = array();
$tdatafreee_PLBS_by_year[".masterListFields"][] = "id";
$tdatafreee_PLBS_by_year[".masterListFields"][] = "fiscal_year";
$tdatafreee_PLBS_by_year[".masterListFields"][] = "yearly_commerce";
$tdatafreee_PLBS_by_year[".masterListFields"][] = "number_of_workers";
$tdatafreee_PLBS_by_year[".masterListFields"][] = "created_at";
$tdatafreee_PLBS_by_year[".masterListFields"][] = "updated_at";
$tdatafreee_PLBS_by_year[".masterListFields"][] = "avg_workers_age";
$tdatafreee_PLBS_by_year[".masterListFields"][] = "fiscal_year_id";

$tdatafreee_PLBS_by_year[".inlineAddFields"] = array();
$tdatafreee_PLBS_by_year[".inlineAddFields"][] = "fiscal_year";
$tdatafreee_PLBS_by_year[".inlineAddFields"][] = "yearly_commerce";
$tdatafreee_PLBS_by_year[".inlineAddFields"][] = "number_of_workers";
$tdatafreee_PLBS_by_year[".inlineAddFields"][] = "created_at";
$tdatafreee_PLBS_by_year[".inlineAddFields"][] = "updated_at";
$tdatafreee_PLBS_by_year[".inlineAddFields"][] = "avg_workers_age";
$tdatafreee_PLBS_by_year[".inlineAddFields"][] = "fiscal_year_id";

$tdatafreee_PLBS_by_year[".editFields"] = array();
$tdatafreee_PLBS_by_year[".editFields"][] = "fiscal_year";
$tdatafreee_PLBS_by_year[".editFields"][] = "yearly_commerce";
$tdatafreee_PLBS_by_year[".editFields"][] = "number_of_workers";
$tdatafreee_PLBS_by_year[".editFields"][] = "created_at";
$tdatafreee_PLBS_by_year[".editFields"][] = "updated_at";
$tdatafreee_PLBS_by_year[".editFields"][] = "avg_workers_age";
$tdatafreee_PLBS_by_year[".editFields"][] = "fiscal_year_id";

$tdatafreee_PLBS_by_year[".inlineEditFields"] = array();
$tdatafreee_PLBS_by_year[".inlineEditFields"][] = "fiscal_year";
$tdatafreee_PLBS_by_year[".inlineEditFields"][] = "yearly_commerce";
$tdatafreee_PLBS_by_year[".inlineEditFields"][] = "number_of_workers";
$tdatafreee_PLBS_by_year[".inlineEditFields"][] = "created_at";
$tdatafreee_PLBS_by_year[".inlineEditFields"][] = "updated_at";
$tdatafreee_PLBS_by_year[".inlineEditFields"][] = "avg_workers_age";
$tdatafreee_PLBS_by_year[".inlineEditFields"][] = "fiscal_year_id";

$tdatafreee_PLBS_by_year[".updateSelectedFields"] = array();
$tdatafreee_PLBS_by_year[".updateSelectedFields"][] = "fiscal_year";
$tdatafreee_PLBS_by_year[".updateSelectedFields"][] = "yearly_commerce";
$tdatafreee_PLBS_by_year[".updateSelectedFields"][] = "number_of_workers";
$tdatafreee_PLBS_by_year[".updateSelectedFields"][] = "created_at";
$tdatafreee_PLBS_by_year[".updateSelectedFields"][] = "updated_at";
$tdatafreee_PLBS_by_year[".updateSelectedFields"][] = "avg_workers_age";
$tdatafreee_PLBS_by_year[".updateSelectedFields"][] = "fiscal_year_id";


$tdatafreee_PLBS_by_year[".exportFields"] = array();
$tdatafreee_PLBS_by_year[".exportFields"][] = "id";
$tdatafreee_PLBS_by_year[".exportFields"][] = "fiscal_year";
$tdatafreee_PLBS_by_year[".exportFields"][] = "yearly_commerce";
$tdatafreee_PLBS_by_year[".exportFields"][] = "number_of_workers";
$tdatafreee_PLBS_by_year[".exportFields"][] = "created_at";
$tdatafreee_PLBS_by_year[".exportFields"][] = "updated_at";
$tdatafreee_PLBS_by_year[".exportFields"][] = "avg_workers_age";
$tdatafreee_PLBS_by_year[".exportFields"][] = "fiscal_year_id";

$tdatafreee_PLBS_by_year[".importFields"] = array();
$tdatafreee_PLBS_by_year[".importFields"][] = "id";
$tdatafreee_PLBS_by_year[".importFields"][] = "fiscal_year";
$tdatafreee_PLBS_by_year[".importFields"][] = "yearly_commerce";
$tdatafreee_PLBS_by_year[".importFields"][] = "number_of_workers";
$tdatafreee_PLBS_by_year[".importFields"][] = "created_at";
$tdatafreee_PLBS_by_year[".importFields"][] = "updated_at";
$tdatafreee_PLBS_by_year[".importFields"][] = "avg_workers_age";
$tdatafreee_PLBS_by_year[".importFields"][] = "fiscal_year_id";

$tdatafreee_PLBS_by_year[".printFields"] = array();
$tdatafreee_PLBS_by_year[".printFields"][] = "id";
$tdatafreee_PLBS_by_year[".printFields"][] = "fiscal_year";
$tdatafreee_PLBS_by_year[".printFields"][] = "yearly_commerce";
$tdatafreee_PLBS_by_year[".printFields"][] = "number_of_workers";
$tdatafreee_PLBS_by_year[".printFields"][] = "created_at";
$tdatafreee_PLBS_by_year[".printFields"][] = "updated_at";
$tdatafreee_PLBS_by_year[".printFields"][] = "avg_workers_age";
$tdatafreee_PLBS_by_year[".printFields"][] = "fiscal_year_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_PLBS_by_year";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_year","id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatafreee_PLBS_by_year["id"] = $fdata;
//	fiscal_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fiscal_year";
	$fdata["GoodName"] = "fiscal_year";
	$fdata["ownerTable"] = "freee_PLBS_by_year";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_year","fiscal_year");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fiscal_year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`fiscal_year`";

	
	
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




	$tdatafreee_PLBS_by_year["fiscal_year"] = $fdata;
//	yearly_commerce
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "yearly_commerce";
	$fdata["GoodName"] = "yearly_commerce";
	$fdata["ownerTable"] = "freee_PLBS_by_year";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_year","yearly_commerce");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yearly_commerce";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`yearly_commerce`";

	
	
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




	$tdatafreee_PLBS_by_year["yearly_commerce"] = $fdata;
//	number_of_workers
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "number_of_workers";
	$fdata["GoodName"] = "number_of_workers";
	$fdata["ownerTable"] = "freee_PLBS_by_year";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_year","number_of_workers");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "number_of_workers";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`number_of_workers`";

	
	
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




	$tdatafreee_PLBS_by_year["number_of_workers"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_PLBS_by_year";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_year","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatafreee_PLBS_by_year["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_PLBS_by_year";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_year","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdatafreee_PLBS_by_year["updated_at"] = $fdata;
//	avg_workers_age
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "avg_workers_age";
	$fdata["GoodName"] = "avg_workers_age";
	$fdata["ownerTable"] = "freee_PLBS_by_year";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_year","avg_workers_age");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "avg_workers_age";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`avg_workers_age`";

	
	
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




	$tdatafreee_PLBS_by_year["avg_workers_age"] = $fdata;
//	fiscal_year_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "fiscal_year_id";
	$fdata["GoodName"] = "fiscal_year_id";
	$fdata["ownerTable"] = "freee_PLBS_by_year";
	$fdata["Label"] = GetFieldLabel("freee_PLBS_by_year","fiscal_year_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fiscal_year_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`fiscal_year_id`";

	
	
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




	$tdatafreee_PLBS_by_year["fiscal_year_id"] = $fdata;


$tables_data["freee_PLBS_by_year"]=&$tdatafreee_PLBS_by_year;
$field_labels["freee_PLBS_by_year"] = &$fieldLabelsfreee_PLBS_by_year;
$fieldToolTips["freee_PLBS_by_year"] = &$fieldToolTipsfreee_PLBS_by_year;
$placeHolders["freee_PLBS_by_year"] = &$placeHoldersfreee_PLBS_by_year;
$page_titles["freee_PLBS_by_year"] = &$pageTitlesfreee_PLBS_by_year;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_PLBS_by_year"] = array();
//	freee_PLBS_details
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="freee_PLBS_details";
		$detailsParam["dOriginalTable"] = "freee_PLBS_details";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "freee_PLBS_details";
	$detailsParam["dCaptionTable"] = GetTableCaption("freee_PLBS_details");
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
		
	$detailsTablesData["freee_PLBS_by_year"][$dIndex] = $detailsParam;

	
		$detailsTablesData["freee_PLBS_by_year"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["freee_PLBS_by_year"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["freee_PLBS_by_year"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["freee_PLBS_by_year"][$dIndex]["detailKeys"][]="freee_plbs_id";

// tables which are master tables for current table (detail)
$masterTablesData["freee_PLBS_by_year"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_PLBS_by_year()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `fiscal_year`,  `yearly_commerce`,  `number_of_workers`,  `created_at`,  `updated_at`,  `avg_workers_age`,  `fiscal_year_id`";
$proto0["m_strFrom"] = "FROM `freee_PLBS_by_year`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `fiscal_year` DESC";
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
	"m_strTable" => "freee_PLBS_by_year",
	"m_srcTableName" => "freee_PLBS_by_year"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_PLBS_by_year";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fiscal_year",
	"m_strTable" => "freee_PLBS_by_year",
	"m_srcTableName" => "freee_PLBS_by_year"
));

$proto8["m_sql"] = "`fiscal_year`";
$proto8["m_srcTableName"] = "freee_PLBS_by_year";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "yearly_commerce",
	"m_strTable" => "freee_PLBS_by_year",
	"m_srcTableName" => "freee_PLBS_by_year"
));

$proto10["m_sql"] = "`yearly_commerce`";
$proto10["m_srcTableName"] = "freee_PLBS_by_year";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "number_of_workers",
	"m_strTable" => "freee_PLBS_by_year",
	"m_srcTableName" => "freee_PLBS_by_year"
));

$proto12["m_sql"] = "`number_of_workers`";
$proto12["m_srcTableName"] = "freee_PLBS_by_year";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_PLBS_by_year",
	"m_srcTableName" => "freee_PLBS_by_year"
));

$proto14["m_sql"] = "`created_at`";
$proto14["m_srcTableName"] = "freee_PLBS_by_year";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_PLBS_by_year",
	"m_srcTableName" => "freee_PLBS_by_year"
));

$proto16["m_sql"] = "`updated_at`";
$proto16["m_srcTableName"] = "freee_PLBS_by_year";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "avg_workers_age",
	"m_strTable" => "freee_PLBS_by_year",
	"m_srcTableName" => "freee_PLBS_by_year"
));

$proto18["m_sql"] = "`avg_workers_age`";
$proto18["m_srcTableName"] = "freee_PLBS_by_year";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "fiscal_year_id",
	"m_strTable" => "freee_PLBS_by_year",
	"m_srcTableName" => "freee_PLBS_by_year"
));

$proto20["m_sql"] = "`fiscal_year_id`";
$proto20["m_srcTableName"] = "freee_PLBS_by_year";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "freee_PLBS_by_year";
$proto23["m_srcTableName"] = "freee_PLBS_by_year";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "fiscal_year";
$proto23["m_columns"][] = "yearly_commerce";
$proto23["m_columns"][] = "number_of_workers";
$proto23["m_columns"][] = "created_at";
$proto23["m_columns"][] = "updated_at";
$proto23["m_columns"][] = "avg_workers_age";
$proto23["m_columns"][] = "fiscal_year_id";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`freee_PLBS_by_year`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "freee_PLBS_by_year";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "fiscal_year",
	"m_strTable" => "freee_PLBS_by_year",
	"m_srcTableName" => "freee_PLBS_by_year"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 0;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="freee_PLBS_by_year";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_PLBS_by_year = createSqlQuery_freee_PLBS_by_year();


	
		;

								

$tdatafreee_PLBS_by_year[".sqlquery"] = $queryData_freee_PLBS_by_year;

$tableEvents["freee_PLBS_by_year"] = new eventsBase;
$tdatafreee_PLBS_by_year[".hasEvents"] = false;

?>