<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasagawa_api_error_details = array();
	$tdatasagawa_api_error_details[".truncateText"] = true;
	$tdatasagawa_api_error_details[".NumberOfChars"] = 80;
	$tdatasagawa_api_error_details[".ShortName"] = "sagawa_api_error_details";
	$tdatasagawa_api_error_details[".OwnerID"] = "";
	$tdatasagawa_api_error_details[".OriginalTable"] = "sagawa_api_error_details";

//	field labels
$fieldLabelssagawa_api_error_details = array();
$fieldToolTipssagawa_api_error_details = array();
$pageTitlessagawa_api_error_details = array();
$placeHolderssagawa_api_error_details = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelssagawa_api_error_details["Japanese"] = array();
	$fieldToolTipssagawa_api_error_details["Japanese"] = array();
	$placeHolderssagawa_api_error_details["Japanese"] = array();
	$pageTitlessagawa_api_error_details["Japanese"] = array();
	$fieldLabelssagawa_api_error_details["Japanese"]["id"] = "Id";
	$fieldToolTipssagawa_api_error_details["Japanese"]["id"] = "";
	$placeHolderssagawa_api_error_details["Japanese"]["id"] = "";
	$fieldLabelssagawa_api_error_details["Japanese"]["error_code"] = "結果コード";
	$fieldToolTipssagawa_api_error_details["Japanese"]["error_code"] = "";
	$placeHolderssagawa_api_error_details["Japanese"]["error_code"] = "";
	$fieldLabelssagawa_api_error_details["Japanese"]["error_text"] = "内容";
	$fieldToolTipssagawa_api_error_details["Japanese"]["error_text"] = "";
	$placeHolderssagawa_api_error_details["Japanese"]["error_text"] = "";
	$fieldLabelssagawa_api_error_details["Japanese"]["bikou"] = "備考";
	$fieldToolTipssagawa_api_error_details["Japanese"]["bikou"] = "";
	$placeHolderssagawa_api_error_details["Japanese"]["bikou"] = "";
	$fieldLabelssagawa_api_error_details["Japanese"]["API_1"] = "API 1";
	$fieldToolTipssagawa_api_error_details["Japanese"]["API_1"] = "";
	$placeHolderssagawa_api_error_details["Japanese"]["API_1"] = "";
	$fieldLabelssagawa_api_error_details["Japanese"]["API_2"] = "API 2";
	$fieldToolTipssagawa_api_error_details["Japanese"]["API_2"] = "";
	$placeHolderssagawa_api_error_details["Japanese"]["API_2"] = "";
	$fieldLabelssagawa_api_error_details["Japanese"]["API_3"] = "API 3";
	$fieldToolTipssagawa_api_error_details["Japanese"]["API_3"] = "";
	$placeHolderssagawa_api_error_details["Japanese"]["API_3"] = "";
	$fieldLabelssagawa_api_error_details["Japanese"]["API_4"] = "API 4";
	$fieldToolTipssagawa_api_error_details["Japanese"]["API_4"] = "";
	$placeHolderssagawa_api_error_details["Japanese"]["API_4"] = "";
	$fieldLabelssagawa_api_error_details["Japanese"]["API_5"] = "API 5";
	$fieldToolTipssagawa_api_error_details["Japanese"]["API_5"] = "";
	$placeHolderssagawa_api_error_details["Japanese"]["API_5"] = "";
	$fieldLabelssagawa_api_error_details["Japanese"]["API_6"] = "API 6";
	$fieldToolTipssagawa_api_error_details["Japanese"]["API_6"] = "";
	$placeHolderssagawa_api_error_details["Japanese"]["API_6"] = "";
	$fieldLabelssagawa_api_error_details["Japanese"]["API_7"] = "API 7";
	$fieldToolTipssagawa_api_error_details["Japanese"]["API_7"] = "";
	$placeHolderssagawa_api_error_details["Japanese"]["API_7"] = "";
	$fieldLabelssagawa_api_error_details["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipssagawa_api_error_details["Japanese"]["updated_by"] = "";
	$placeHolderssagawa_api_error_details["Japanese"]["updated_by"] = "";
	$fieldLabelssagawa_api_error_details["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipssagawa_api_error_details["Japanese"]["updated_at"] = "";
	$placeHolderssagawa_api_error_details["Japanese"]["updated_at"] = "";
	$fieldLabelssagawa_api_error_details["Japanese"]["created_by"] = "作成者";
	$fieldToolTipssagawa_api_error_details["Japanese"]["created_by"] = "";
	$placeHolderssagawa_api_error_details["Japanese"]["created_by"] = "";
	$fieldLabelssagawa_api_error_details["Japanese"]["created_at"] = "作成日";
	$fieldToolTipssagawa_api_error_details["Japanese"]["created_at"] = "";
	$placeHolderssagawa_api_error_details["Japanese"]["created_at"] = "";
	if (count($fieldToolTipssagawa_api_error_details["Japanese"]))
		$tdatasagawa_api_error_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssagawa_api_error_details[""] = array();
	$fieldToolTipssagawa_api_error_details[""] = array();
	$placeHolderssagawa_api_error_details[""] = array();
	$pageTitlessagawa_api_error_details[""] = array();
	$fieldLabelssagawa_api_error_details[""]["id"] = "Id";
	$fieldToolTipssagawa_api_error_details[""]["id"] = "";
	$placeHolderssagawa_api_error_details[""]["id"] = "";
	$fieldLabelssagawa_api_error_details[""]["error_code"] = "Error Code";
	$fieldToolTipssagawa_api_error_details[""]["error_code"] = "";
	$placeHolderssagawa_api_error_details[""]["error_code"] = "";
	$fieldLabelssagawa_api_error_details[""]["error_text"] = "Error Text";
	$fieldToolTipssagawa_api_error_details[""]["error_text"] = "";
	$placeHolderssagawa_api_error_details[""]["error_text"] = "";
	$fieldLabelssagawa_api_error_details[""]["bikou"] = "Bikou";
	$fieldToolTipssagawa_api_error_details[""]["bikou"] = "";
	$placeHolderssagawa_api_error_details[""]["bikou"] = "";
	$fieldLabelssagawa_api_error_details[""]["API_1"] = "API 1";
	$fieldToolTipssagawa_api_error_details[""]["API_1"] = "";
	$placeHolderssagawa_api_error_details[""]["API_1"] = "";
	$fieldLabelssagawa_api_error_details[""]["API_2"] = "API 2";
	$fieldToolTipssagawa_api_error_details[""]["API_2"] = "";
	$placeHolderssagawa_api_error_details[""]["API_2"] = "";
	$fieldLabelssagawa_api_error_details[""]["API_3"] = "API 3";
	$fieldToolTipssagawa_api_error_details[""]["API_3"] = "";
	$placeHolderssagawa_api_error_details[""]["API_3"] = "";
	$fieldLabelssagawa_api_error_details[""]["API_4"] = "API 4";
	$fieldToolTipssagawa_api_error_details[""]["API_4"] = "";
	$placeHolderssagawa_api_error_details[""]["API_4"] = "";
	$fieldLabelssagawa_api_error_details[""]["API_5"] = "API 5";
	$fieldToolTipssagawa_api_error_details[""]["API_5"] = "";
	$placeHolderssagawa_api_error_details[""]["API_5"] = "";
	$fieldLabelssagawa_api_error_details[""]["API_6"] = "API 6";
	$fieldToolTipssagawa_api_error_details[""]["API_6"] = "";
	$placeHolderssagawa_api_error_details[""]["API_6"] = "";
	$fieldLabelssagawa_api_error_details[""]["API_7"] = "API 7";
	$fieldToolTipssagawa_api_error_details[""]["API_7"] = "";
	$placeHolderssagawa_api_error_details[""]["API_7"] = "";
	$fieldLabelssagawa_api_error_details[""]["updated_by"] = "Updated By";
	$fieldToolTipssagawa_api_error_details[""]["updated_by"] = "";
	$placeHolderssagawa_api_error_details[""]["updated_by"] = "";
	$fieldLabelssagawa_api_error_details[""]["updated_at"] = "Updated At";
	$fieldToolTipssagawa_api_error_details[""]["updated_at"] = "";
	$placeHolderssagawa_api_error_details[""]["updated_at"] = "";
	$fieldLabelssagawa_api_error_details[""]["created_by"] = "Created By";
	$fieldToolTipssagawa_api_error_details[""]["created_by"] = "";
	$placeHolderssagawa_api_error_details[""]["created_by"] = "";
	$fieldLabelssagawa_api_error_details[""]["created_at"] = "Created At";
	$fieldToolTipssagawa_api_error_details[""]["created_at"] = "";
	$placeHolderssagawa_api_error_details[""]["created_at"] = "";
	if (count($fieldToolTipssagawa_api_error_details[""]))
		$tdatasagawa_api_error_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssagawa_api_error_details["English"] = array();
	$fieldToolTipssagawa_api_error_details["English"] = array();
	$placeHolderssagawa_api_error_details["English"] = array();
	$pageTitlessagawa_api_error_details["English"] = array();
	$fieldLabelssagawa_api_error_details["English"]["id"] = "Id";
	$fieldToolTipssagawa_api_error_details["English"]["id"] = "";
	$placeHolderssagawa_api_error_details["English"]["id"] = "";
	$fieldLabelssagawa_api_error_details["English"]["error_code"] = "Error Code";
	$fieldToolTipssagawa_api_error_details["English"]["error_code"] = "";
	$placeHolderssagawa_api_error_details["English"]["error_code"] = "";
	$fieldLabelssagawa_api_error_details["English"]["error_text"] = "Error Text";
	$fieldToolTipssagawa_api_error_details["English"]["error_text"] = "";
	$placeHolderssagawa_api_error_details["English"]["error_text"] = "";
	$fieldLabelssagawa_api_error_details["English"]["bikou"] = "Bikou";
	$fieldToolTipssagawa_api_error_details["English"]["bikou"] = "";
	$placeHolderssagawa_api_error_details["English"]["bikou"] = "";
	$fieldLabelssagawa_api_error_details["English"]["API_1"] = "API 1";
	$fieldToolTipssagawa_api_error_details["English"]["API_1"] = "";
	$placeHolderssagawa_api_error_details["English"]["API_1"] = "";
	$fieldLabelssagawa_api_error_details["English"]["API_2"] = "API 2";
	$fieldToolTipssagawa_api_error_details["English"]["API_2"] = "";
	$placeHolderssagawa_api_error_details["English"]["API_2"] = "";
	$fieldLabelssagawa_api_error_details["English"]["API_3"] = "API 3";
	$fieldToolTipssagawa_api_error_details["English"]["API_3"] = "";
	$placeHolderssagawa_api_error_details["English"]["API_3"] = "";
	$fieldLabelssagawa_api_error_details["English"]["API_4"] = "API 4";
	$fieldToolTipssagawa_api_error_details["English"]["API_4"] = "";
	$placeHolderssagawa_api_error_details["English"]["API_4"] = "";
	$fieldLabelssagawa_api_error_details["English"]["API_5"] = "API 5";
	$fieldToolTipssagawa_api_error_details["English"]["API_5"] = "";
	$placeHolderssagawa_api_error_details["English"]["API_5"] = "";
	$fieldLabelssagawa_api_error_details["English"]["API_6"] = "API 6";
	$fieldToolTipssagawa_api_error_details["English"]["API_6"] = "";
	$placeHolderssagawa_api_error_details["English"]["API_6"] = "";
	$fieldLabelssagawa_api_error_details["English"]["API_7"] = "API 7";
	$fieldToolTipssagawa_api_error_details["English"]["API_7"] = "";
	$placeHolderssagawa_api_error_details["English"]["API_7"] = "";
	$fieldLabelssagawa_api_error_details["English"]["updated_by"] = "Updated By";
	$fieldToolTipssagawa_api_error_details["English"]["updated_by"] = "";
	$placeHolderssagawa_api_error_details["English"]["updated_by"] = "";
	$fieldLabelssagawa_api_error_details["English"]["updated_at"] = "Updated At";
	$fieldToolTipssagawa_api_error_details["English"]["updated_at"] = "";
	$placeHolderssagawa_api_error_details["English"]["updated_at"] = "";
	$fieldLabelssagawa_api_error_details["English"]["created_by"] = "Created By";
	$fieldToolTipssagawa_api_error_details["English"]["created_by"] = "";
	$placeHolderssagawa_api_error_details["English"]["created_by"] = "";
	$fieldLabelssagawa_api_error_details["English"]["created_at"] = "Created At";
	$fieldToolTipssagawa_api_error_details["English"]["created_at"] = "";
	$placeHolderssagawa_api_error_details["English"]["created_at"] = "";
	if (count($fieldToolTipssagawa_api_error_details["English"]))
		$tdatasagawa_api_error_details[".isUseToolTips"] = true;
}


	$tdatasagawa_api_error_details[".NCSearch"] = true;



$tdatasagawa_api_error_details[".shortTableName"] = "sagawa_api_error_details";
$tdatasagawa_api_error_details[".nSecOptions"] = 0;
$tdatasagawa_api_error_details[".recsPerRowPrint"] = 1;
$tdatasagawa_api_error_details[".mainTableOwnerID"] = "";
$tdatasagawa_api_error_details[".moveNext"] = 1;
$tdatasagawa_api_error_details[".entityType"] = 0;

$tdatasagawa_api_error_details[".strOriginalTableName"] = "sagawa_api_error_details";

	



$tdatasagawa_api_error_details[".showAddInPopup"] = false;

$tdatasagawa_api_error_details[".showEditInPopup"] = false;

$tdatasagawa_api_error_details[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasagawa_api_error_details[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasagawa_api_error_details[".fieldsForRegister"] = array();

$tdatasagawa_api_error_details[".listAjax"] = false;

	$tdatasagawa_api_error_details[".audit"] = true;

	$tdatasagawa_api_error_details[".locking"] = false;



$tdatasagawa_api_error_details[".list"] = true;



$tdatasagawa_api_error_details[".reorderRecordsByHeader"] = true;





$tdatasagawa_api_error_details[".exportTo"] = true;



$tdatasagawa_api_error_details[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasagawa_api_error_details[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasagawa_api_error_details[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasagawa_api_error_details[".searchSaving"] = false;
//

$tdatasagawa_api_error_details[".showSearchPanel"] = true;
		$tdatasagawa_api_error_details[".flexibleSearch"] = true;

$tdatasagawa_api_error_details[".isUseAjaxSuggest"] = true;

$tdatasagawa_api_error_details[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatasagawa_api_error_details[".ajaxCodeSnippetAdded"] = false;

$tdatasagawa_api_error_details[".buttonsAdded"] = false;

$tdatasagawa_api_error_details[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasagawa_api_error_details[".isUseTimeForSearch"] = false;





$tdatasagawa_api_error_details[".allSearchFields"] = array();
$tdatasagawa_api_error_details[".filterFields"] = array();
$tdatasagawa_api_error_details[".requiredSearchFields"] = array();

$tdatasagawa_api_error_details[".allSearchFields"][] = "id";
	$tdatasagawa_api_error_details[".allSearchFields"][] = "error_code";
	$tdatasagawa_api_error_details[".allSearchFields"][] = "error_text";
	$tdatasagawa_api_error_details[".allSearchFields"][] = "bikou";
	$tdatasagawa_api_error_details[".allSearchFields"][] = "API_1";
	$tdatasagawa_api_error_details[".allSearchFields"][] = "API_2";
	$tdatasagawa_api_error_details[".allSearchFields"][] = "API_3";
	$tdatasagawa_api_error_details[".allSearchFields"][] = "API_4";
	$tdatasagawa_api_error_details[".allSearchFields"][] = "API_5";
	$tdatasagawa_api_error_details[".allSearchFields"][] = "API_6";
	$tdatasagawa_api_error_details[".allSearchFields"][] = "API_7";
	$tdatasagawa_api_error_details[".allSearchFields"][] = "updated_by";
	$tdatasagawa_api_error_details[".allSearchFields"][] = "updated_at";
	$tdatasagawa_api_error_details[".allSearchFields"][] = "created_by";
	$tdatasagawa_api_error_details[".allSearchFields"][] = "created_at";
	

$tdatasagawa_api_error_details[".googleLikeFields"] = array();
$tdatasagawa_api_error_details[".googleLikeFields"][] = "id";
$tdatasagawa_api_error_details[".googleLikeFields"][] = "error_code";
$tdatasagawa_api_error_details[".googleLikeFields"][] = "error_text";
$tdatasagawa_api_error_details[".googleLikeFields"][] = "bikou";
$tdatasagawa_api_error_details[".googleLikeFields"][] = "API_1";
$tdatasagawa_api_error_details[".googleLikeFields"][] = "API_2";
$tdatasagawa_api_error_details[".googleLikeFields"][] = "API_3";
$tdatasagawa_api_error_details[".googleLikeFields"][] = "API_4";
$tdatasagawa_api_error_details[".googleLikeFields"][] = "API_5";
$tdatasagawa_api_error_details[".googleLikeFields"][] = "API_6";
$tdatasagawa_api_error_details[".googleLikeFields"][] = "API_7";
$tdatasagawa_api_error_details[".googleLikeFields"][] = "updated_by";
$tdatasagawa_api_error_details[".googleLikeFields"][] = "updated_at";
$tdatasagawa_api_error_details[".googleLikeFields"][] = "created_by";
$tdatasagawa_api_error_details[".googleLikeFields"][] = "created_at";


$tdatasagawa_api_error_details[".advSearchFields"] = array();
$tdatasagawa_api_error_details[".advSearchFields"][] = "id";
$tdatasagawa_api_error_details[".advSearchFields"][] = "error_code";
$tdatasagawa_api_error_details[".advSearchFields"][] = "error_text";
$tdatasagawa_api_error_details[".advSearchFields"][] = "bikou";
$tdatasagawa_api_error_details[".advSearchFields"][] = "API_1";
$tdatasagawa_api_error_details[".advSearchFields"][] = "API_2";
$tdatasagawa_api_error_details[".advSearchFields"][] = "API_3";
$tdatasagawa_api_error_details[".advSearchFields"][] = "API_4";
$tdatasagawa_api_error_details[".advSearchFields"][] = "API_5";
$tdatasagawa_api_error_details[".advSearchFields"][] = "API_6";
$tdatasagawa_api_error_details[".advSearchFields"][] = "API_7";
$tdatasagawa_api_error_details[".advSearchFields"][] = "updated_by";
$tdatasagawa_api_error_details[".advSearchFields"][] = "updated_at";
$tdatasagawa_api_error_details[".advSearchFields"][] = "created_by";
$tdatasagawa_api_error_details[".advSearchFields"][] = "created_at";

$tdatasagawa_api_error_details[".tableType"] = "list";

$tdatasagawa_api_error_details[".printerPageOrientation"] = 0;
$tdatasagawa_api_error_details[".nPrinterPageScale"] = 100;

$tdatasagawa_api_error_details[".nPrinterSplitRecords"] = 40;

$tdatasagawa_api_error_details[".nPrinterPDFSplitRecords"] = 40;



$tdatasagawa_api_error_details[".geocodingEnabled"] = false;





$tdatasagawa_api_error_details[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatasagawa_api_error_details[".pageSize"] = 20;

$tdatasagawa_api_error_details[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasagawa_api_error_details[".strOrderBy"] = $tstrOrderBy;

$tdatasagawa_api_error_details[".orderindexes"] = array();
$tdatasagawa_api_error_details[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatasagawa_api_error_details[".sqlHead"] = "SELECT `id`,  `error_code`,  `error_text`,  `bikou`,  `API_1`,  `API_2`,  `API_3`,  `API_4`,  `API_5`,  `API_6`,  `API_7`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$tdatasagawa_api_error_details[".sqlFrom"] = "FROM `sagawa_api_error_details`";
$tdatasagawa_api_error_details[".sqlWhereExpr"] = "";
$tdatasagawa_api_error_details[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasagawa_api_error_details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasagawa_api_error_details[".arrGroupsPerPage"] = $arrGPP;

$tdatasagawa_api_error_details[".highlightSearchResults"] = true;

$tableKeyssagawa_api_error_details = array();
$tableKeyssagawa_api_error_details[] = "id";
$tdatasagawa_api_error_details[".Keys"] = $tableKeyssagawa_api_error_details;

$tdatasagawa_api_error_details[".listFields"] = array();
$tdatasagawa_api_error_details[".listFields"][] = "id";
$tdatasagawa_api_error_details[".listFields"][] = "error_code";
$tdatasagawa_api_error_details[".listFields"][] = "error_text";
$tdatasagawa_api_error_details[".listFields"][] = "bikou";
$tdatasagawa_api_error_details[".listFields"][] = "API_1";
$tdatasagawa_api_error_details[".listFields"][] = "API_2";
$tdatasagawa_api_error_details[".listFields"][] = "API_3";
$tdatasagawa_api_error_details[".listFields"][] = "API_4";
$tdatasagawa_api_error_details[".listFields"][] = "API_5";
$tdatasagawa_api_error_details[".listFields"][] = "API_6";
$tdatasagawa_api_error_details[".listFields"][] = "API_7";
$tdatasagawa_api_error_details[".listFields"][] = "updated_by";
$tdatasagawa_api_error_details[".listFields"][] = "updated_at";
$tdatasagawa_api_error_details[".listFields"][] = "created_by";
$tdatasagawa_api_error_details[".listFields"][] = "created_at";

$tdatasagawa_api_error_details[".hideMobileList"] = array();


$tdatasagawa_api_error_details[".viewFields"] = array();

$tdatasagawa_api_error_details[".addFields"] = array();

$tdatasagawa_api_error_details[".masterListFields"] = array();
$tdatasagawa_api_error_details[".masterListFields"][] = "id";
$tdatasagawa_api_error_details[".masterListFields"][] = "error_code";
$tdatasagawa_api_error_details[".masterListFields"][] = "error_text";
$tdatasagawa_api_error_details[".masterListFields"][] = "bikou";
$tdatasagawa_api_error_details[".masterListFields"][] = "API_1";
$tdatasagawa_api_error_details[".masterListFields"][] = "API_2";
$tdatasagawa_api_error_details[".masterListFields"][] = "API_3";
$tdatasagawa_api_error_details[".masterListFields"][] = "API_4";
$tdatasagawa_api_error_details[".masterListFields"][] = "API_5";
$tdatasagawa_api_error_details[".masterListFields"][] = "API_6";
$tdatasagawa_api_error_details[".masterListFields"][] = "API_7";
$tdatasagawa_api_error_details[".masterListFields"][] = "updated_by";
$tdatasagawa_api_error_details[".masterListFields"][] = "updated_at";
$tdatasagawa_api_error_details[".masterListFields"][] = "created_by";
$tdatasagawa_api_error_details[".masterListFields"][] = "created_at";

$tdatasagawa_api_error_details[".inlineAddFields"] = array();

$tdatasagawa_api_error_details[".editFields"] = array();

$tdatasagawa_api_error_details[".inlineEditFields"] = array();

$tdatasagawa_api_error_details[".updateSelectedFields"] = array();


$tdatasagawa_api_error_details[".exportFields"] = array();
$tdatasagawa_api_error_details[".exportFields"][] = "id";
$tdatasagawa_api_error_details[".exportFields"][] = "error_code";
$tdatasagawa_api_error_details[".exportFields"][] = "error_text";
$tdatasagawa_api_error_details[".exportFields"][] = "bikou";
$tdatasagawa_api_error_details[".exportFields"][] = "API_1";
$tdatasagawa_api_error_details[".exportFields"][] = "API_2";
$tdatasagawa_api_error_details[".exportFields"][] = "API_3";
$tdatasagawa_api_error_details[".exportFields"][] = "API_4";
$tdatasagawa_api_error_details[".exportFields"][] = "API_5";
$tdatasagawa_api_error_details[".exportFields"][] = "API_6";
$tdatasagawa_api_error_details[".exportFields"][] = "API_7";
$tdatasagawa_api_error_details[".exportFields"][] = "updated_by";
$tdatasagawa_api_error_details[".exportFields"][] = "updated_at";
$tdatasagawa_api_error_details[".exportFields"][] = "created_by";
$tdatasagawa_api_error_details[".exportFields"][] = "created_at";

$tdatasagawa_api_error_details[".importFields"] = array();

$tdatasagawa_api_error_details[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sagawa_api_error_details";
	$fdata["Label"] = GetFieldLabel("sagawa_api_error_details","id");
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




	$tdatasagawa_api_error_details["id"] = $fdata;
//	error_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "error_code";
	$fdata["GoodName"] = "error_code";
	$fdata["ownerTable"] = "sagawa_api_error_details";
	$fdata["Label"] = GetFieldLabel("sagawa_api_error_details","error_code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "error_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`error_code`";

	
	
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




	$tdatasagawa_api_error_details["error_code"] = $fdata;
//	error_text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "error_text";
	$fdata["GoodName"] = "error_text";
	$fdata["ownerTable"] = "sagawa_api_error_details";
	$fdata["Label"] = GetFieldLabel("sagawa_api_error_details","error_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "error_text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`error_text`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatasagawa_api_error_details["error_text"] = $fdata;
//	bikou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "bikou";
	$fdata["GoodName"] = "bikou";
	$fdata["ownerTable"] = "sagawa_api_error_details";
	$fdata["Label"] = GetFieldLabel("sagawa_api_error_details","bikou");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bikou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`bikou`";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatasagawa_api_error_details["bikou"] = $fdata;
//	API_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "API_1";
	$fdata["GoodName"] = "API_1";
	$fdata["ownerTable"] = "sagawa_api_error_details";
	$fdata["Label"] = GetFieldLabel("sagawa_api_error_details","API_1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "API_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`API_1`";

	
	
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




	$tdatasagawa_api_error_details["API_1"] = $fdata;
//	API_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "API_2";
	$fdata["GoodName"] = "API_2";
	$fdata["ownerTable"] = "sagawa_api_error_details";
	$fdata["Label"] = GetFieldLabel("sagawa_api_error_details","API_2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "API_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`API_2`";

	
	
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




	$tdatasagawa_api_error_details["API_2"] = $fdata;
//	API_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "API_3";
	$fdata["GoodName"] = "API_3";
	$fdata["ownerTable"] = "sagawa_api_error_details";
	$fdata["Label"] = GetFieldLabel("sagawa_api_error_details","API_3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "API_3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`API_3`";

	
	
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




	$tdatasagawa_api_error_details["API_3"] = $fdata;
//	API_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "API_4";
	$fdata["GoodName"] = "API_4";
	$fdata["ownerTable"] = "sagawa_api_error_details";
	$fdata["Label"] = GetFieldLabel("sagawa_api_error_details","API_4");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "API_4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`API_4`";

	
	
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




	$tdatasagawa_api_error_details["API_4"] = $fdata;
//	API_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "API_5";
	$fdata["GoodName"] = "API_5";
	$fdata["ownerTable"] = "sagawa_api_error_details";
	$fdata["Label"] = GetFieldLabel("sagawa_api_error_details","API_5");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "API_5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`API_5`";

	
	
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




	$tdatasagawa_api_error_details["API_5"] = $fdata;
//	API_6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "API_6";
	$fdata["GoodName"] = "API_6";
	$fdata["ownerTable"] = "sagawa_api_error_details";
	$fdata["Label"] = GetFieldLabel("sagawa_api_error_details","API_6");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "API_6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`API_6`";

	
	
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




	$tdatasagawa_api_error_details["API_6"] = $fdata;
//	API_7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "API_7";
	$fdata["GoodName"] = "API_7";
	$fdata["ownerTable"] = "sagawa_api_error_details";
	$fdata["Label"] = GetFieldLabel("sagawa_api_error_details","API_7");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "API_7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`API_7`";

	
	
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




	$tdatasagawa_api_error_details["API_7"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "sagawa_api_error_details";
	$fdata["Label"] = GetFieldLabel("sagawa_api_error_details","updated_by");
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




	$tdatasagawa_api_error_details["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "sagawa_api_error_details";
	$fdata["Label"] = GetFieldLabel("sagawa_api_error_details","updated_at");
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




	$tdatasagawa_api_error_details["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "sagawa_api_error_details";
	$fdata["Label"] = GetFieldLabel("sagawa_api_error_details","created_by");
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




	$tdatasagawa_api_error_details["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "sagawa_api_error_details";
	$fdata["Label"] = GetFieldLabel("sagawa_api_error_details","created_at");
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




	$tdatasagawa_api_error_details["created_at"] = $fdata;


$tables_data["sagawa_api_error_details"]=&$tdatasagawa_api_error_details;
$field_labels["sagawa_api_error_details"] = &$fieldLabelssagawa_api_error_details;
$fieldToolTips["sagawa_api_error_details"] = &$fieldToolTipssagawa_api_error_details;
$placeHolders["sagawa_api_error_details"] = &$placeHolderssagawa_api_error_details;
$page_titles["sagawa_api_error_details"] = &$pageTitlessagawa_api_error_details;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sagawa_api_error_details"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["sagawa_api_error_details"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sagawa_api_error_details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `error_code`,  `error_text`,  `bikou`,  `API_1`,  `API_2`,  `API_3`,  `API_4`,  `API_5`,  `API_6`,  `API_7`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`";
$proto0["m_strFrom"] = "FROM `sagawa_api_error_details`";
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
	"m_strTable" => "sagawa_api_error_details",
	"m_srcTableName" => "sagawa_api_error_details"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "sagawa_api_error_details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "error_code",
	"m_strTable" => "sagawa_api_error_details",
	"m_srcTableName" => "sagawa_api_error_details"
));

$proto8["m_sql"] = "`error_code`";
$proto8["m_srcTableName"] = "sagawa_api_error_details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "error_text",
	"m_strTable" => "sagawa_api_error_details",
	"m_srcTableName" => "sagawa_api_error_details"
));

$proto10["m_sql"] = "`error_text`";
$proto10["m_srcTableName"] = "sagawa_api_error_details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "bikou",
	"m_strTable" => "sagawa_api_error_details",
	"m_srcTableName" => "sagawa_api_error_details"
));

$proto12["m_sql"] = "`bikou`";
$proto12["m_srcTableName"] = "sagawa_api_error_details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "API_1",
	"m_strTable" => "sagawa_api_error_details",
	"m_srcTableName" => "sagawa_api_error_details"
));

$proto14["m_sql"] = "`API_1`";
$proto14["m_srcTableName"] = "sagawa_api_error_details";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "API_2",
	"m_strTable" => "sagawa_api_error_details",
	"m_srcTableName" => "sagawa_api_error_details"
));

$proto16["m_sql"] = "`API_2`";
$proto16["m_srcTableName"] = "sagawa_api_error_details";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "API_3",
	"m_strTable" => "sagawa_api_error_details",
	"m_srcTableName" => "sagawa_api_error_details"
));

$proto18["m_sql"] = "`API_3`";
$proto18["m_srcTableName"] = "sagawa_api_error_details";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "API_4",
	"m_strTable" => "sagawa_api_error_details",
	"m_srcTableName" => "sagawa_api_error_details"
));

$proto20["m_sql"] = "`API_4`";
$proto20["m_srcTableName"] = "sagawa_api_error_details";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "API_5",
	"m_strTable" => "sagawa_api_error_details",
	"m_srcTableName" => "sagawa_api_error_details"
));

$proto22["m_sql"] = "`API_5`";
$proto22["m_srcTableName"] = "sagawa_api_error_details";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "API_6",
	"m_strTable" => "sagawa_api_error_details",
	"m_srcTableName" => "sagawa_api_error_details"
));

$proto24["m_sql"] = "`API_6`";
$proto24["m_srcTableName"] = "sagawa_api_error_details";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "API_7",
	"m_strTable" => "sagawa_api_error_details",
	"m_srcTableName" => "sagawa_api_error_details"
));

$proto26["m_sql"] = "`API_7`";
$proto26["m_srcTableName"] = "sagawa_api_error_details";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "sagawa_api_error_details",
	"m_srcTableName" => "sagawa_api_error_details"
));

$proto28["m_sql"] = "`updated_by`";
$proto28["m_srcTableName"] = "sagawa_api_error_details";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "sagawa_api_error_details",
	"m_srcTableName" => "sagawa_api_error_details"
));

$proto30["m_sql"] = "`updated_at`";
$proto30["m_srcTableName"] = "sagawa_api_error_details";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "sagawa_api_error_details",
	"m_srcTableName" => "sagawa_api_error_details"
));

$proto32["m_sql"] = "`created_by`";
$proto32["m_srcTableName"] = "sagawa_api_error_details";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "sagawa_api_error_details",
	"m_srcTableName" => "sagawa_api_error_details"
));

$proto34["m_sql"] = "`created_at`";
$proto34["m_srcTableName"] = "sagawa_api_error_details";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "sagawa_api_error_details";
$proto37["m_srcTableName"] = "sagawa_api_error_details";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id";
$proto37["m_columns"][] = "error_code";
$proto37["m_columns"][] = "error_text";
$proto37["m_columns"][] = "bikou";
$proto37["m_columns"][] = "API_1";
$proto37["m_columns"][] = "API_2";
$proto37["m_columns"][] = "API_3";
$proto37["m_columns"][] = "API_4";
$proto37["m_columns"][] = "API_5";
$proto37["m_columns"][] = "API_6";
$proto37["m_columns"][] = "API_7";
$proto37["m_columns"][] = "updated_by";
$proto37["m_columns"][] = "updated_at";
$proto37["m_columns"][] = "created_by";
$proto37["m_columns"][] = "created_at";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "`sagawa_api_error_details`";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "sagawa_api_error_details";
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
	"m_strName" => "id",
	"m_strTable" => "sagawa_api_error_details",
	"m_srcTableName" => "sagawa_api_error_details"
));

$proto40["m_column"]=$obj;
$proto40["m_bAsc"] = 0;
$proto40["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto40);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="sagawa_api_error_details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sagawa_api_error_details = createSqlQuery_sagawa_api_error_details();


	
		;

															

$tdatasagawa_api_error_details[".sqlquery"] = $queryData_sagawa_api_error_details;

$tableEvents["sagawa_api_error_details"] = new eventsBase;
$tdatasagawa_api_error_details[".hasEvents"] = false;

?>