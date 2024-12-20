<?php
require_once(getabspath("classes/cipherer.php"));




$tdatashop_reservations = array();
	$tdatashop_reservations[".truncateText"] = true;
	$tdatashop_reservations[".NumberOfChars"] = 80;
	$tdatashop_reservations[".ShortName"] = "shop_reservations";
	$tdatashop_reservations[".OwnerID"] = "";
	$tdatashop_reservations[".OriginalTable"] = "shop_reservations";

//	field labels
$fieldLabelsshop_reservations = array();
$fieldToolTipsshop_reservations = array();
$pageTitlesshop_reservations = array();
$placeHoldersshop_reservations = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsshop_reservations["Japanese"] = array();
	$fieldToolTipsshop_reservations["Japanese"] = array();
	$placeHoldersshop_reservations["Japanese"] = array();
	$pageTitlesshop_reservations["Japanese"] = array();
	$fieldLabelsshop_reservations["Japanese"]["id"] = "Id";
	$fieldToolTipsshop_reservations["Japanese"]["id"] = "";
	$placeHoldersshop_reservations["Japanese"]["id"] = "";
	$fieldLabelsshop_reservations["Japanese"]["customer_id"] = "マイページId";
	$fieldToolTipsshop_reservations["Japanese"]["customer_id"] = "";
	$placeHoldersshop_reservations["Japanese"]["customer_id"] = "";
	$fieldLabelsshop_reservations["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsshop_reservations["Japanese"]["ecc_id"] = "";
	$placeHoldersshop_reservations["Japanese"]["ecc_id"] = "";
	$fieldLabelsshop_reservations["Japanese"]["start_at"] = "査定開始日時";
	$fieldToolTipsshop_reservations["Japanese"]["start_at"] = "";
	$placeHoldersshop_reservations["Japanese"]["start_at"] = "";
	$fieldLabelsshop_reservations["Japanese"]["end_at"] = "査定終了日時";
	$fieldToolTipsshop_reservations["Japanese"]["end_at"] = "";
	$placeHoldersshop_reservations["Japanese"]["end_at"] = "";
	$fieldLabelsshop_reservations["Japanese"]["google_calendar_id"] = "Google Calendar Id";
	$fieldToolTipsshop_reservations["Japanese"]["google_calendar_id"] = "";
	$placeHoldersshop_reservations["Japanese"]["google_calendar_id"] = "";
	$fieldLabelsshop_reservations["Japanese"]["event_id"] = "Event Id";
	$fieldToolTipsshop_reservations["Japanese"]["event_id"] = "";
	$placeHoldersshop_reservations["Japanese"]["event_id"] = "";
	$fieldLabelsshop_reservations["Japanese"]["message"] = "メッセージ";
	$fieldToolTipsshop_reservations["Japanese"]["message"] = "";
	$placeHoldersshop_reservations["Japanese"]["message"] = "";
	$fieldLabelsshop_reservations["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsshop_reservations["Japanese"]["created_at"] = "";
	$placeHoldersshop_reservations["Japanese"]["created_at"] = "";
	$fieldLabelsshop_reservations["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsshop_reservations["Japanese"]["updated_at"] = "";
	$placeHoldersshop_reservations["Japanese"]["updated_at"] = "";
	$fieldLabelsshop_reservations["Japanese"]["deleted_at"] = "削除日";
	$fieldToolTipsshop_reservations["Japanese"]["deleted_at"] = "";
	$placeHoldersshop_reservations["Japanese"]["deleted_at"] = "";
	$fieldLabelsshop_reservations["Japanese"]["name"] = "顧客名";
	$fieldToolTipsshop_reservations["Japanese"]["name"] = "";
	$placeHoldersshop_reservations["Japanese"]["name"] = "";
	$fieldLabelsshop_reservations["Japanese"]["email"] = "メールアドレス";
	$fieldToolTipsshop_reservations["Japanese"]["email"] = "";
	$placeHoldersshop_reservations["Japanese"]["email"] = "";
	$fieldLabelsshop_reservations["Japanese"]["number_of_booth"] = "ブース数";
	$fieldToolTipsshop_reservations["Japanese"]["number_of_booth"] = "";
	$placeHoldersshop_reservations["Japanese"]["number_of_booth"] = "";
	$fieldLabelsshop_reservations["Japanese"]["number_of_times"] = "ご利用回数";
	$fieldToolTipsshop_reservations["Japanese"]["number_of_times"] = "";
	$placeHoldersshop_reservations["Japanese"]["number_of_times"] = "";
	$fieldLabelsshop_reservations["Japanese"]["line_satei"] = "事前査定";
	$fieldToolTipsshop_reservations["Japanese"]["line_satei"] = "";
	$placeHoldersshop_reservations["Japanese"]["line_satei"] = "";
	$fieldLabelsshop_reservations["Japanese"]["visit_type"] = "ご来店種別";
	$fieldToolTipsshop_reservations["Japanese"]["visit_type"] = "";
	$placeHoldersshop_reservations["Japanese"]["visit_type"] = "";
	$fieldLabelsshop_reservations["Japanese"]["appoint_satei_by"] = "指名";
	$fieldToolTipsshop_reservations["Japanese"]["appoint_satei_by"] = "";
	$placeHoldersshop_reservations["Japanese"]["appoint_satei_by"] = "";
	$fieldLabelsshop_reservations["Japanese"]["bikou"] = "備考";
	$fieldToolTipsshop_reservations["Japanese"]["bikou"] = "";
	$placeHoldersshop_reservations["Japanese"]["bikou"] = "";
	$fieldLabelsshop_reservations["Japanese"]["is_guest"] = "ゲスト";
	$fieldToolTipsshop_reservations["Japanese"]["is_guest"] = "";
	$placeHoldersshop_reservations["Japanese"]["is_guest"] = "";
	if (count($fieldToolTipsshop_reservations["Japanese"]))
		$tdatashop_reservations[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsshop_reservations[""] = array();
	$fieldToolTipsshop_reservations[""] = array();
	$placeHoldersshop_reservations[""] = array();
	$pageTitlesshop_reservations[""] = array();
	$fieldLabelsshop_reservations[""]["id"] = "Id";
	$fieldToolTipsshop_reservations[""]["id"] = "";
	$placeHoldersshop_reservations[""]["id"] = "";
	$fieldLabelsshop_reservations[""]["customer_id"] = "Customer Id";
	$fieldToolTipsshop_reservations[""]["customer_id"] = "";
	$placeHoldersshop_reservations[""]["customer_id"] = "";
	$fieldLabelsshop_reservations[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsshop_reservations[""]["ecc_id"] = "";
	$placeHoldersshop_reservations[""]["ecc_id"] = "";
	$fieldLabelsshop_reservations[""]["start_at"] = "Start At";
	$fieldToolTipsshop_reservations[""]["start_at"] = "";
	$placeHoldersshop_reservations[""]["start_at"] = "";
	$fieldLabelsshop_reservations[""]["end_at"] = "End At";
	$fieldToolTipsshop_reservations[""]["end_at"] = "";
	$placeHoldersshop_reservations[""]["end_at"] = "";
	$fieldLabelsshop_reservations[""]["google_calendar_id"] = "Google Calendar Id";
	$fieldToolTipsshop_reservations[""]["google_calendar_id"] = "";
	$placeHoldersshop_reservations[""]["google_calendar_id"] = "";
	$fieldLabelsshop_reservations[""]["event_id"] = "Event Id";
	$fieldToolTipsshop_reservations[""]["event_id"] = "";
	$placeHoldersshop_reservations[""]["event_id"] = "";
	$fieldLabelsshop_reservations[""]["message"] = "Message";
	$fieldToolTipsshop_reservations[""]["message"] = "";
	$placeHoldersshop_reservations[""]["message"] = "";
	$fieldLabelsshop_reservations[""]["created_at"] = "Created At";
	$fieldToolTipsshop_reservations[""]["created_at"] = "";
	$placeHoldersshop_reservations[""]["created_at"] = "";
	$fieldLabelsshop_reservations[""]["updated_at"] = "Updated At";
	$fieldToolTipsshop_reservations[""]["updated_at"] = "";
	$placeHoldersshop_reservations[""]["updated_at"] = "";
	$fieldLabelsshop_reservations[""]["deleted_at"] = "Deleted At";
	$fieldToolTipsshop_reservations[""]["deleted_at"] = "";
	$placeHoldersshop_reservations[""]["deleted_at"] = "";
	$fieldLabelsshop_reservations[""]["name"] = "Name";
	$fieldToolTipsshop_reservations[""]["name"] = "";
	$placeHoldersshop_reservations[""]["name"] = "";
	$fieldLabelsshop_reservations[""]["email"] = "Email";
	$fieldToolTipsshop_reservations[""]["email"] = "";
	$placeHoldersshop_reservations[""]["email"] = "";
	$fieldLabelsshop_reservations[""]["number_of_booth"] = "Number Of Booth";
	$fieldToolTipsshop_reservations[""]["number_of_booth"] = "";
	$placeHoldersshop_reservations[""]["number_of_booth"] = "";
	$fieldLabelsshop_reservations[""]["number_of_times"] = "Number Of Times";
	$fieldToolTipsshop_reservations[""]["number_of_times"] = "";
	$placeHoldersshop_reservations[""]["number_of_times"] = "";
	$fieldLabelsshop_reservations[""]["line_satei"] = "Line Satei";
	$fieldToolTipsshop_reservations[""]["line_satei"] = "";
	$placeHoldersshop_reservations[""]["line_satei"] = "";
	$fieldLabelsshop_reservations[""]["visit_type"] = "Visit Type";
	$fieldToolTipsshop_reservations[""]["visit_type"] = "";
	$placeHoldersshop_reservations[""]["visit_type"] = "";
	$fieldLabelsshop_reservations[""]["appoint_satei_by"] = "Appoint Satei By";
	$fieldToolTipsshop_reservations[""]["appoint_satei_by"] = "";
	$placeHoldersshop_reservations[""]["appoint_satei_by"] = "";
	$fieldLabelsshop_reservations[""]["bikou"] = "Bikou";
	$fieldToolTipsshop_reservations[""]["bikou"] = "";
	$placeHoldersshop_reservations[""]["bikou"] = "";
	$fieldLabelsshop_reservations[""]["is_guest"] = "Is Guest";
	$fieldToolTipsshop_reservations[""]["is_guest"] = "";
	$placeHoldersshop_reservations[""]["is_guest"] = "";
	if (count($fieldToolTipsshop_reservations[""]))
		$tdatashop_reservations[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsshop_reservations["English"] = array();
	$fieldToolTipsshop_reservations["English"] = array();
	$placeHoldersshop_reservations["English"] = array();
	$pageTitlesshop_reservations["English"] = array();
	$fieldLabelsshop_reservations["English"]["id"] = "Id";
	$fieldToolTipsshop_reservations["English"]["id"] = "";
	$placeHoldersshop_reservations["English"]["id"] = "";
	$fieldLabelsshop_reservations["English"]["customer_id"] = "Customer Id";
	$fieldToolTipsshop_reservations["English"]["customer_id"] = "";
	$placeHoldersshop_reservations["English"]["customer_id"] = "";
	$fieldLabelsshop_reservations["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsshop_reservations["English"]["ecc_id"] = "";
	$placeHoldersshop_reservations["English"]["ecc_id"] = "";
	$fieldLabelsshop_reservations["English"]["start_at"] = "Start At";
	$fieldToolTipsshop_reservations["English"]["start_at"] = "";
	$placeHoldersshop_reservations["English"]["start_at"] = "";
	$fieldLabelsshop_reservations["English"]["end_at"] = "End At";
	$fieldToolTipsshop_reservations["English"]["end_at"] = "";
	$placeHoldersshop_reservations["English"]["end_at"] = "";
	$fieldLabelsshop_reservations["English"]["google_calendar_id"] = "Google Calendar Id";
	$fieldToolTipsshop_reservations["English"]["google_calendar_id"] = "";
	$placeHoldersshop_reservations["English"]["google_calendar_id"] = "";
	$fieldLabelsshop_reservations["English"]["event_id"] = "Event Id";
	$fieldToolTipsshop_reservations["English"]["event_id"] = "";
	$placeHoldersshop_reservations["English"]["event_id"] = "";
	$fieldLabelsshop_reservations["English"]["message"] = "Message";
	$fieldToolTipsshop_reservations["English"]["message"] = "";
	$placeHoldersshop_reservations["English"]["message"] = "";
	$fieldLabelsshop_reservations["English"]["created_at"] = "Created At";
	$fieldToolTipsshop_reservations["English"]["created_at"] = "";
	$placeHoldersshop_reservations["English"]["created_at"] = "";
	$fieldLabelsshop_reservations["English"]["updated_at"] = "Updated At";
	$fieldToolTipsshop_reservations["English"]["updated_at"] = "";
	$placeHoldersshop_reservations["English"]["updated_at"] = "";
	$fieldLabelsshop_reservations["English"]["deleted_at"] = "Deleted At";
	$fieldToolTipsshop_reservations["English"]["deleted_at"] = "";
	$placeHoldersshop_reservations["English"]["deleted_at"] = "";
	$fieldLabelsshop_reservations["English"]["name"] = "Name";
	$fieldToolTipsshop_reservations["English"]["name"] = "";
	$placeHoldersshop_reservations["English"]["name"] = "";
	$fieldLabelsshop_reservations["English"]["email"] = "Email";
	$fieldToolTipsshop_reservations["English"]["email"] = "";
	$placeHoldersshop_reservations["English"]["email"] = "";
	$fieldLabelsshop_reservations["English"]["number_of_booth"] = "Number Of Booth";
	$fieldToolTipsshop_reservations["English"]["number_of_booth"] = "";
	$placeHoldersshop_reservations["English"]["number_of_booth"] = "";
	$fieldLabelsshop_reservations["English"]["number_of_times"] = "Number Of Times";
	$fieldToolTipsshop_reservations["English"]["number_of_times"] = "";
	$placeHoldersshop_reservations["English"]["number_of_times"] = "";
	$fieldLabelsshop_reservations["English"]["line_satei"] = "Line Satei";
	$fieldToolTipsshop_reservations["English"]["line_satei"] = "";
	$placeHoldersshop_reservations["English"]["line_satei"] = "";
	$fieldLabelsshop_reservations["English"]["visit_type"] = "Visit Type";
	$fieldToolTipsshop_reservations["English"]["visit_type"] = "";
	$placeHoldersshop_reservations["English"]["visit_type"] = "";
	$fieldLabelsshop_reservations["English"]["appoint_satei_by"] = "Appoint Satei By";
	$fieldToolTipsshop_reservations["English"]["appoint_satei_by"] = "";
	$placeHoldersshop_reservations["English"]["appoint_satei_by"] = "";
	$fieldLabelsshop_reservations["English"]["bikou"] = "Bikou";
	$fieldToolTipsshop_reservations["English"]["bikou"] = "";
	$placeHoldersshop_reservations["English"]["bikou"] = "";
	$fieldLabelsshop_reservations["English"]["is_guest"] = "Is Guest";
	$fieldToolTipsshop_reservations["English"]["is_guest"] = "";
	$placeHoldersshop_reservations["English"]["is_guest"] = "";
	if (count($fieldToolTipsshop_reservations["English"]))
		$tdatashop_reservations[".isUseToolTips"] = true;
}


	$tdatashop_reservations[".NCSearch"] = true;



$tdatashop_reservations[".shortTableName"] = "shop_reservations";
$tdatashop_reservations[".nSecOptions"] = 0;
$tdatashop_reservations[".recsPerRowPrint"] = 1;
$tdatashop_reservations[".mainTableOwnerID"] = "";
$tdatashop_reservations[".moveNext"] = 1;
$tdatashop_reservations[".entityType"] = 0;

$tdatashop_reservations[".strOriginalTableName"] = "shop_reservations";

	



$tdatashop_reservations[".showAddInPopup"] = false;

$tdatashop_reservations[".showEditInPopup"] = false;

$tdatashop_reservations[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatashop_reservations[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatashop_reservations[".fieldsForRegister"] = array();

$tdatashop_reservations[".listAjax"] = false;

	$tdatashop_reservations[".audit"] = true;

	$tdatashop_reservations[".locking"] = false;



$tdatashop_reservations[".list"] = true;

$tdatashop_reservations[".inlineEdit"] = true;


$tdatashop_reservations[".reorderRecordsByHeader"] = true;




$tdatashop_reservations[".import"] = true;

$tdatashop_reservations[".exportTo"] = true;


$tdatashop_reservations[".delete"] = true;

$tdatashop_reservations[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatashop_reservations[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatashop_reservations[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatashop_reservations[".searchSaving"] = false;
//

$tdatashop_reservations[".showSearchPanel"] = true;
		$tdatashop_reservations[".flexibleSearch"] = true;

$tdatashop_reservations[".isUseAjaxSuggest"] = true;

$tdatashop_reservations[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatashop_reservations[".ajaxCodeSnippetAdded"] = false;

$tdatashop_reservations[".buttonsAdded"] = false;

$tdatashop_reservations[".addPageEvents"] = false;

// use timepicker for search panel
$tdatashop_reservations[".isUseTimeForSearch"] = false;





$tdatashop_reservations[".allSearchFields"] = array();
$tdatashop_reservations[".filterFields"] = array();
$tdatashop_reservations[".requiredSearchFields"] = array();

$tdatashop_reservations[".allSearchFields"][] = "id";
	$tdatashop_reservations[".allSearchFields"][] = "customer_id";
	$tdatashop_reservations[".allSearchFields"][] = "ecc_id";
	$tdatashop_reservations[".allSearchFields"][] = "start_at";
	$tdatashop_reservations[".allSearchFields"][] = "end_at";
	$tdatashop_reservations[".allSearchFields"][] = "google_calendar_id";
	$tdatashop_reservations[".allSearchFields"][] = "event_id";
	$tdatashop_reservations[".allSearchFields"][] = "message";
	$tdatashop_reservations[".allSearchFields"][] = "created_at";
	$tdatashop_reservations[".allSearchFields"][] = "updated_at";
	$tdatashop_reservations[".allSearchFields"][] = "deleted_at";
	$tdatashop_reservations[".allSearchFields"][] = "name";
	$tdatashop_reservations[".allSearchFields"][] = "email";
	$tdatashop_reservations[".allSearchFields"][] = "number_of_booth";
	$tdatashop_reservations[".allSearchFields"][] = "number_of_times";
	$tdatashop_reservations[".allSearchFields"][] = "line_satei";
	$tdatashop_reservations[".allSearchFields"][] = "visit_type";
	$tdatashop_reservations[".allSearchFields"][] = "appoint_satei_by";
	$tdatashop_reservations[".allSearchFields"][] = "bikou";
	$tdatashop_reservations[".allSearchFields"][] = "is_guest";
	

$tdatashop_reservations[".googleLikeFields"] = array();
$tdatashop_reservations[".googleLikeFields"][] = "id";
$tdatashop_reservations[".googleLikeFields"][] = "customer_id";
$tdatashop_reservations[".googleLikeFields"][] = "ecc_id";
$tdatashop_reservations[".googleLikeFields"][] = "start_at";
$tdatashop_reservations[".googleLikeFields"][] = "end_at";
$tdatashop_reservations[".googleLikeFields"][] = "google_calendar_id";
$tdatashop_reservations[".googleLikeFields"][] = "event_id";
$tdatashop_reservations[".googleLikeFields"][] = "message";
$tdatashop_reservations[".googleLikeFields"][] = "created_at";
$tdatashop_reservations[".googleLikeFields"][] = "updated_at";
$tdatashop_reservations[".googleLikeFields"][] = "deleted_at";
$tdatashop_reservations[".googleLikeFields"][] = "name";
$tdatashop_reservations[".googleLikeFields"][] = "email";
$tdatashop_reservations[".googleLikeFields"][] = "number_of_booth";
$tdatashop_reservations[".googleLikeFields"][] = "number_of_times";
$tdatashop_reservations[".googleLikeFields"][] = "line_satei";
$tdatashop_reservations[".googleLikeFields"][] = "visit_type";
$tdatashop_reservations[".googleLikeFields"][] = "appoint_satei_by";
$tdatashop_reservations[".googleLikeFields"][] = "bikou";
$tdatashop_reservations[".googleLikeFields"][] = "is_guest";


$tdatashop_reservations[".advSearchFields"] = array();
$tdatashop_reservations[".advSearchFields"][] = "id";
$tdatashop_reservations[".advSearchFields"][] = "customer_id";
$tdatashop_reservations[".advSearchFields"][] = "ecc_id";
$tdatashop_reservations[".advSearchFields"][] = "start_at";
$tdatashop_reservations[".advSearchFields"][] = "end_at";
$tdatashop_reservations[".advSearchFields"][] = "google_calendar_id";
$tdatashop_reservations[".advSearchFields"][] = "event_id";
$tdatashop_reservations[".advSearchFields"][] = "message";
$tdatashop_reservations[".advSearchFields"][] = "created_at";
$tdatashop_reservations[".advSearchFields"][] = "updated_at";
$tdatashop_reservations[".advSearchFields"][] = "deleted_at";
$tdatashop_reservations[".advSearchFields"][] = "name";
$tdatashop_reservations[".advSearchFields"][] = "email";
$tdatashop_reservations[".advSearchFields"][] = "number_of_booth";
$tdatashop_reservations[".advSearchFields"][] = "number_of_times";
$tdatashop_reservations[".advSearchFields"][] = "line_satei";
$tdatashop_reservations[".advSearchFields"][] = "visit_type";
$tdatashop_reservations[".advSearchFields"][] = "appoint_satei_by";
$tdatashop_reservations[".advSearchFields"][] = "bikou";
$tdatashop_reservations[".advSearchFields"][] = "is_guest";

$tdatashop_reservations[".tableType"] = "list";

$tdatashop_reservations[".printerPageOrientation"] = 0;
$tdatashop_reservations[".nPrinterPageScale"] = 100;

$tdatashop_reservations[".nPrinterSplitRecords"] = 40;

$tdatashop_reservations[".nPrinterPDFSplitRecords"] = 40;



$tdatashop_reservations[".geocodingEnabled"] = false;





$tdatashop_reservations[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatashop_reservations[".pageSize"] = 20;

$tdatashop_reservations[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatashop_reservations[".strOrderBy"] = $tstrOrderBy;

$tdatashop_reservations[".orderindexes"] = array();
$tdatashop_reservations[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatashop_reservations[".sqlHead"] = "SELECT `id`,  `customer_id`,  `ecc_id`,  `start_at`,  `end_at`,  `google_calendar_id`,  `event_id`,  `message`,  `created_at`,  `updated_at`,  `deleted_at`,  `name`,  `email`,  `number_of_booth`,  `number_of_times`,  `line_satei`,  `visit_type`,  `appoint_satei_by`,  `bikou`,  `is_guest`";
$tdatashop_reservations[".sqlFrom"] = "FROM `shop_reservations`";
$tdatashop_reservations[".sqlWhereExpr"] = "";
$tdatashop_reservations[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatashop_reservations[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatashop_reservations[".arrGroupsPerPage"] = $arrGPP;

$tdatashop_reservations[".highlightSearchResults"] = true;

$tableKeysshop_reservations = array();
$tableKeysshop_reservations[] = "id";
$tdatashop_reservations[".Keys"] = $tableKeysshop_reservations;

$tdatashop_reservations[".listFields"] = array();
$tdatashop_reservations[".listFields"][] = "id";
$tdatashop_reservations[".listFields"][] = "customer_id";
$tdatashop_reservations[".listFields"][] = "ecc_id";
$tdatashop_reservations[".listFields"][] = "start_at";
$tdatashop_reservations[".listFields"][] = "end_at";
$tdatashop_reservations[".listFields"][] = "name";
$tdatashop_reservations[".listFields"][] = "email";
$tdatashop_reservations[".listFields"][] = "number_of_booth";
$tdatashop_reservations[".listFields"][] = "number_of_times";
$tdatashop_reservations[".listFields"][] = "line_satei";
$tdatashop_reservations[".listFields"][] = "visit_type";
$tdatashop_reservations[".listFields"][] = "appoint_satei_by";
$tdatashop_reservations[".listFields"][] = "bikou";
$tdatashop_reservations[".listFields"][] = "google_calendar_id";
$tdatashop_reservations[".listFields"][] = "event_id";
$tdatashop_reservations[".listFields"][] = "message";
$tdatashop_reservations[".listFields"][] = "is_guest";
$tdatashop_reservations[".listFields"][] = "created_at";
$tdatashop_reservations[".listFields"][] = "updated_at";
$tdatashop_reservations[".listFields"][] = "deleted_at";

$tdatashop_reservations[".hideMobileList"] = array();


$tdatashop_reservations[".viewFields"] = array();

$tdatashop_reservations[".addFields"] = array();

$tdatashop_reservations[".masterListFields"] = array();
$tdatashop_reservations[".masterListFields"][] = "id";
$tdatashop_reservations[".masterListFields"][] = "customer_id";
$tdatashop_reservations[".masterListFields"][] = "ecc_id";
$tdatashop_reservations[".masterListFields"][] = "start_at";
$tdatashop_reservations[".masterListFields"][] = "end_at";
$tdatashop_reservations[".masterListFields"][] = "google_calendar_id";
$tdatashop_reservations[".masterListFields"][] = "event_id";
$tdatashop_reservations[".masterListFields"][] = "message";
$tdatashop_reservations[".masterListFields"][] = "created_at";
$tdatashop_reservations[".masterListFields"][] = "updated_at";
$tdatashop_reservations[".masterListFields"][] = "deleted_at";
$tdatashop_reservations[".masterListFields"][] = "name";
$tdatashop_reservations[".masterListFields"][] = "email";
$tdatashop_reservations[".masterListFields"][] = "number_of_booth";
$tdatashop_reservations[".masterListFields"][] = "number_of_times";
$tdatashop_reservations[".masterListFields"][] = "line_satei";
$tdatashop_reservations[".masterListFields"][] = "visit_type";
$tdatashop_reservations[".masterListFields"][] = "appoint_satei_by";
$tdatashop_reservations[".masterListFields"][] = "bikou";
$tdatashop_reservations[".masterListFields"][] = "is_guest";

$tdatashop_reservations[".inlineAddFields"] = array();

$tdatashop_reservations[".editFields"] = array();

$tdatashop_reservations[".inlineEditFields"] = array();
$tdatashop_reservations[".inlineEditFields"][] = "customer_id";
$tdatashop_reservations[".inlineEditFields"][] = "ecc_id";
$tdatashop_reservations[".inlineEditFields"][] = "start_at";
$tdatashop_reservations[".inlineEditFields"][] = "end_at";
$tdatashop_reservations[".inlineEditFields"][] = "name";
$tdatashop_reservations[".inlineEditFields"][] = "email";
$tdatashop_reservations[".inlineEditFields"][] = "number_of_booth";
$tdatashop_reservations[".inlineEditFields"][] = "number_of_times";
$tdatashop_reservations[".inlineEditFields"][] = "line_satei";
$tdatashop_reservations[".inlineEditFields"][] = "visit_type";
$tdatashop_reservations[".inlineEditFields"][] = "appoint_satei_by";
$tdatashop_reservations[".inlineEditFields"][] = "bikou";
$tdatashop_reservations[".inlineEditFields"][] = "google_calendar_id";
$tdatashop_reservations[".inlineEditFields"][] = "event_id";
$tdatashop_reservations[".inlineEditFields"][] = "message";
$tdatashop_reservations[".inlineEditFields"][] = "is_guest";

$tdatashop_reservations[".updateSelectedFields"] = array();


$tdatashop_reservations[".exportFields"] = array();
$tdatashop_reservations[".exportFields"][] = "id";
$tdatashop_reservations[".exportFields"][] = "customer_id";
$tdatashop_reservations[".exportFields"][] = "ecc_id";
$tdatashop_reservations[".exportFields"][] = "start_at";
$tdatashop_reservations[".exportFields"][] = "end_at";
$tdatashop_reservations[".exportFields"][] = "google_calendar_id";
$tdatashop_reservations[".exportFields"][] = "event_id";
$tdatashop_reservations[".exportFields"][] = "message";
$tdatashop_reservations[".exportFields"][] = "created_at";
$tdatashop_reservations[".exportFields"][] = "updated_at";
$tdatashop_reservations[".exportFields"][] = "deleted_at";
$tdatashop_reservations[".exportFields"][] = "name";
$tdatashop_reservations[".exportFields"][] = "email";
$tdatashop_reservations[".exportFields"][] = "number_of_booth";
$tdatashop_reservations[".exportFields"][] = "number_of_times";
$tdatashop_reservations[".exportFields"][] = "line_satei";
$tdatashop_reservations[".exportFields"][] = "visit_type";
$tdatashop_reservations[".exportFields"][] = "appoint_satei_by";
$tdatashop_reservations[".exportFields"][] = "bikou";
$tdatashop_reservations[".exportFields"][] = "is_guest";

$tdatashop_reservations[".importFields"] = array();
$tdatashop_reservations[".importFields"][] = "id";
$tdatashop_reservations[".importFields"][] = "customer_id";
$tdatashop_reservations[".importFields"][] = "ecc_id";
$tdatashop_reservations[".importFields"][] = "start_at";
$tdatashop_reservations[".importFields"][] = "end_at";
$tdatashop_reservations[".importFields"][] = "google_calendar_id";
$tdatashop_reservations[".importFields"][] = "event_id";
$tdatashop_reservations[".importFields"][] = "message";
$tdatashop_reservations[".importFields"][] = "created_at";
$tdatashop_reservations[".importFields"][] = "updated_at";
$tdatashop_reservations[".importFields"][] = "deleted_at";
$tdatashop_reservations[".importFields"][] = "name";
$tdatashop_reservations[".importFields"][] = "email";
$tdatashop_reservations[".importFields"][] = "number_of_booth";
$tdatashop_reservations[".importFields"][] = "number_of_times";
$tdatashop_reservations[".importFields"][] = "line_satei";
$tdatashop_reservations[".importFields"][] = "visit_type";
$tdatashop_reservations[".importFields"][] = "appoint_satei_by";
$tdatashop_reservations[".importFields"][] = "bikou";
$tdatashop_reservations[".importFields"][] = "is_guest";

$tdatashop_reservations[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","id");
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




	$tdatashop_reservations["id"] = $fdata;
//	customer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "customer_id";
	$fdata["GoodName"] = "customer_id";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","customer_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "customer_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`customer_id`";

	
	
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




	$tdatashop_reservations["customer_id"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","ecc_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ecc_id`";

	
	
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




	$tdatashop_reservations["ecc_id"] = $fdata;
//	start_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "start_at";
	$fdata["GoodName"] = "start_at";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","start_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "start_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`start_at`";

	
	
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

	
	
		$edata["DateEditType"] = 11;
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




	$tdatashop_reservations["start_at"] = $fdata;
//	end_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "end_at";
	$fdata["GoodName"] = "end_at";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","end_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "end_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`end_at`";

	
	
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

	
	
		$edata["DateEditType"] = 11;
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




	$tdatashop_reservations["end_at"] = $fdata;
//	google_calendar_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "google_calendar_id";
	$fdata["GoodName"] = "google_calendar_id";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","google_calendar_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "google_calendar_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`google_calendar_id`";

	
	
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




	$tdatashop_reservations["google_calendar_id"] = $fdata;
//	event_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "event_id";
	$fdata["GoodName"] = "event_id";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","event_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "event_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`event_id`";

	
	
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




	$tdatashop_reservations["event_id"] = $fdata;
//	message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "message";
	$fdata["GoodName"] = "message";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","message");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "message";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`message`";

	
	
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




	$tdatashop_reservations["message"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","created_at");
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




	$tdatashop_reservations["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","updated_at");
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




	$tdatashop_reservations["updated_at"] = $fdata;
//	deleted_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "deleted_at";
	$fdata["GoodName"] = "deleted_at";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","deleted_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "deleted_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`deleted_at`";

	
	
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




	$tdatashop_reservations["deleted_at"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
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




	$tdatashop_reservations["name"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`email`";

	
	
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




	$tdatashop_reservations["email"] = $fdata;
//	number_of_booth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "number_of_booth";
	$fdata["GoodName"] = "number_of_booth";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","number_of_booth");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "number_of_booth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`number_of_booth`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";

	
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




	$tdatashop_reservations["number_of_booth"] = $fdata;
//	number_of_times
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "number_of_times";
	$fdata["GoodName"] = "number_of_times";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","number_of_times");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "number_of_times";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`number_of_times`";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "初めて";
	$edata["LookupValues"][] = "2回目以降";

	
	
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




	$tdatashop_reservations["number_of_times"] = $fdata;
//	line_satei
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "line_satei";
	$fdata["GoodName"] = "line_satei";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","line_satei");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "line_satei";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`line_satei`";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "事前査定なし";
	$edata["LookupValues"][] = "LINE査定";
	$edata["LookupValues"][] = "メール査定";
	$edata["LookupValues"][] = "電話見積り";
	$edata["LookupValues"][] = "チャット見積もり";

	
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




	$tdatashop_reservations["line_satei"] = $fdata;
//	visit_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "visit_type";
	$fdata["GoodName"] = "visit_type";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","visit_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "visit_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`visit_type`";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "お買取り";
	$edata["LookupValues"][] = "精錬:お引受";
	$edata["LookupValues"][] = "精錬:ご納品";

	
	
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




	$tdatashop_reservations["visit_type"] = $fdata;
//	appoint_satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "appoint_satei_by";
	$fdata["GoodName"] = "appoint_satei_by";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","appoint_satei_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "appoint_satei_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`appoint_satei_by`";

	
	
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




	$tdatashop_reservations["appoint_satei_by"] = $fdata;
//	bikou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "bikou";
	$fdata["GoodName"] = "bikou";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","bikou");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatashop_reservations["bikou"] = $fdata;
//	is_guest
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "is_guest";
	$fdata["GoodName"] = "is_guest";
	$fdata["ownerTable"] = "shop_reservations";
	$fdata["Label"] = GetFieldLabel("shop_reservations","is_guest");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_guest";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_guest`";

	
	
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




	$tdatashop_reservations["is_guest"] = $fdata;


$tables_data["shop_reservations"]=&$tdatashop_reservations;
$field_labels["shop_reservations"] = &$fieldLabelsshop_reservations;
$fieldToolTips["shop_reservations"] = &$fieldToolTipsshop_reservations;
$placeHolders["shop_reservations"] = &$placeHoldersshop_reservations;
$page_titles["shop_reservations"] = &$pageTitlesshop_reservations;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["shop_reservations"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["shop_reservations"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_shop_reservations()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `customer_id`,  `ecc_id`,  `start_at`,  `end_at`,  `google_calendar_id`,  `event_id`,  `message`,  `created_at`,  `updated_at`,  `deleted_at`,  `name`,  `email`,  `number_of_booth`,  `number_of_times`,  `line_satei`,  `visit_type`,  `appoint_satei_by`,  `bikou`,  `is_guest`";
$proto0["m_strFrom"] = "FROM `shop_reservations`";
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
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "shop_reservations";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "customer_id",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto8["m_sql"] = "`customer_id`";
$proto8["m_srcTableName"] = "shop_reservations";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto10["m_sql"] = "`ecc_id`";
$proto10["m_srcTableName"] = "shop_reservations";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "start_at",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto12["m_sql"] = "`start_at`";
$proto12["m_srcTableName"] = "shop_reservations";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "end_at",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto14["m_sql"] = "`end_at`";
$proto14["m_srcTableName"] = "shop_reservations";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "google_calendar_id",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto16["m_sql"] = "`google_calendar_id`";
$proto16["m_srcTableName"] = "shop_reservations";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "event_id",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto18["m_sql"] = "`event_id`";
$proto18["m_srcTableName"] = "shop_reservations";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "message",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto20["m_sql"] = "`message`";
$proto20["m_srcTableName"] = "shop_reservations";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto22["m_sql"] = "`created_at`";
$proto22["m_srcTableName"] = "shop_reservations";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto24["m_sql"] = "`updated_at`";
$proto24["m_srcTableName"] = "shop_reservations";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "deleted_at",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto26["m_sql"] = "`deleted_at`";
$proto26["m_srcTableName"] = "shop_reservations";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto28["m_sql"] = "`name`";
$proto28["m_srcTableName"] = "shop_reservations";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto30["m_sql"] = "`email`";
$proto30["m_srcTableName"] = "shop_reservations";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "number_of_booth",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto32["m_sql"] = "`number_of_booth`";
$proto32["m_srcTableName"] = "shop_reservations";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "number_of_times",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto34["m_sql"] = "`number_of_times`";
$proto34["m_srcTableName"] = "shop_reservations";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "line_satei",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto36["m_sql"] = "`line_satei`";
$proto36["m_srcTableName"] = "shop_reservations";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "visit_type",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto38["m_sql"] = "`visit_type`";
$proto38["m_srcTableName"] = "shop_reservations";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "appoint_satei_by",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto40["m_sql"] = "`appoint_satei_by`";
$proto40["m_srcTableName"] = "shop_reservations";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "bikou",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto42["m_sql"] = "`bikou`";
$proto42["m_srcTableName"] = "shop_reservations";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "is_guest",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto44["m_sql"] = "`is_guest`";
$proto44["m_srcTableName"] = "shop_reservations";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "shop_reservations";
$proto47["m_srcTableName"] = "shop_reservations";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "id";
$proto47["m_columns"][] = "customer_id";
$proto47["m_columns"][] = "ecc_id";
$proto47["m_columns"][] = "start_at";
$proto47["m_columns"][] = "end_at";
$proto47["m_columns"][] = "google_calendar_id";
$proto47["m_columns"][] = "event_id";
$proto47["m_columns"][] = "message";
$proto47["m_columns"][] = "created_at";
$proto47["m_columns"][] = "updated_at";
$proto47["m_columns"][] = "deleted_at";
$proto47["m_columns"][] = "name";
$proto47["m_columns"][] = "email";
$proto47["m_columns"][] = "number_of_booth";
$proto47["m_columns"][] = "number_of_times";
$proto47["m_columns"][] = "line_satei";
$proto47["m_columns"][] = "visit_type";
$proto47["m_columns"][] = "appoint_satei_by";
$proto47["m_columns"][] = "bikou";
$proto47["m_columns"][] = "is_guest";
$proto47["m_columns"][] = "agent_user_id";
$proto47["m_columns"][] = "send_at";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "`shop_reservations`";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "shop_reservations";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "shop_reservations",
	"m_srcTableName" => "shop_reservations"
));

$proto50["m_column"]=$obj;
$proto50["m_bAsc"] = 0;
$proto50["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto50);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="shop_reservations";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_shop_reservations = createSqlQuery_shop_reservations();


	
		;

																				

$tdatashop_reservations[".sqlquery"] = $queryData_shop_reservations;

$tableEvents["shop_reservations"] = new eventsBase;
$tdatashop_reservations[".hasEvents"] = false;

?>