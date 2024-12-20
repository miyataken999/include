<?php
require_once(getabspath("classes/cipherer.php"));




$tdataycbm_bookings = array();
	$tdataycbm_bookings[".truncateText"] = true;
	$tdataycbm_bookings[".NumberOfChars"] = 80;
	$tdataycbm_bookings[".ShortName"] = "ycbm_bookings";
	$tdataycbm_bookings[".OwnerID"] = "";
	$tdataycbm_bookings[".OriginalTable"] = "ycbm_bookings";

//	field labels
$fieldLabelsycbm_bookings = array();
$fieldToolTipsycbm_bookings = array();
$pageTitlesycbm_bookings = array();
$placeHoldersycbm_bookings = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsycbm_bookings["Japanese"] = array();
	$fieldToolTipsycbm_bookings["Japanese"] = array();
	$placeHoldersycbm_bookings["Japanese"] = array();
	$pageTitlesycbm_bookings["Japanese"] = array();
	$fieldLabelsycbm_bookings["Japanese"]["id"] = "Id";
	$fieldToolTipsycbm_bookings["Japanese"]["id"] = "";
	$placeHoldersycbm_bookings["Japanese"]["id"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["title"] = "タイトル";
	$fieldToolTipsycbm_bookings["Japanese"]["title"] = "";
	$placeHoldersycbm_bookings["Japanese"]["title"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["accountId"] = "Account Id";
	$fieldToolTipsycbm_bookings["Japanese"]["accountId"] = "";
	$placeHoldersycbm_bookings["Japanese"]["accountId"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["profileId"] = "Profile Id";
	$fieldToolTipsycbm_bookings["Japanese"]["profileId"] = "";
	$placeHoldersycbm_bookings["Japanese"]["profileId"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["createdAt"] = "booking作成日";
	$fieldToolTipsycbm_bookings["Japanese"]["createdAt"] = "";
	$placeHoldersycbm_bookings["Japanese"]["createdAt"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["startsAt"] = "予約開始日時";
	$fieldToolTipsycbm_bookings["Japanese"]["startsAt"] = "";
	$placeHoldersycbm_bookings["Japanese"]["startsAt"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["endsAt"] = "予約終了日時";
	$fieldToolTipsycbm_bookings["Japanese"]["endsAt"] = "";
	$placeHoldersycbm_bookings["Japanese"]["endsAt"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["tentative"] = "Tentative";
	$fieldToolTipsycbm_bookings["Japanese"]["tentative"] = "";
	$placeHoldersycbm_bookings["Japanese"]["tentative"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["timeZone"] = "Time Zone";
	$fieldToolTipsycbm_bookings["Japanese"]["timeZone"] = "";
	$placeHoldersycbm_bookings["Japanese"]["timeZone"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["cancelled"] = "キャンセル";
	$fieldToolTipsycbm_bookings["Japanese"]["cancelled"] = "";
	$placeHoldersycbm_bookings["Japanese"]["cancelled"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsycbm_bookings["Japanese"]["updated_at"] = "";
	$placeHoldersycbm_bookings["Japanese"]["updated_at"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsycbm_bookings["Japanese"]["updated_by"] = "";
	$placeHoldersycbm_bookings["Japanese"]["updated_by"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsycbm_bookings["Japanese"]["created_at"] = "";
	$placeHoldersycbm_bookings["Japanese"]["created_at"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsycbm_bookings["Japanese"]["created_by"] = "";
	$placeHoldersycbm_bookings["Japanese"]["created_by"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["FNAME"] = "FNAME";
	$fieldToolTipsycbm_bookings["Japanese"]["FNAME"] = "";
	$placeHoldersycbm_bookings["Japanese"]["FNAME"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["LNAME"] = "LNAME";
	$fieldToolTipsycbm_bookings["Japanese"]["LNAME"] = "";
	$placeHoldersycbm_bookings["Japanese"]["LNAME"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["EMAIL"] = "EMAIL";
	$fieldToolTipsycbm_bookings["Japanese"]["EMAIL"] = "";
	$placeHoldersycbm_bookings["Japanese"]["EMAIL"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsycbm_bookings["Japanese"]["ecc_id"] = "";
	$placeHoldersycbm_bookings["Japanese"]["ecc_id"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipsycbm_bookings["Japanese"]["Eoc_unfinished_id"] = "";
	$placeHoldersycbm_bookings["Japanese"]["Eoc_unfinished_id"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["Q8"] = "Q8（電話番号）";
	$fieldToolTipsycbm_bookings["Japanese"]["Q8"] = "";
	$placeHoldersycbm_bookings["Japanese"]["Q8"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["status"] = "ステータス";
	$fieldToolTipsycbm_bookings["Japanese"]["status"] = "";
	$placeHoldersycbm_bookings["Japanese"]["status"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["Eoc_updated_at"] = "顧客反映日";
	$fieldToolTipsycbm_bookings["Japanese"]["Eoc_updated_at"] = "";
	$placeHoldersycbm_bookings["Japanese"]["Eoc_updated_at"] = "";
	$fieldLabelsycbm_bookings["Japanese"]["Q9"] = "Q9(事前査定の有無)";
	$fieldToolTipsycbm_bookings["Japanese"]["Q9"] = "";
	$placeHoldersycbm_bookings["Japanese"]["Q9"] = "";
	if (count($fieldToolTipsycbm_bookings["Japanese"]))
		$tdataycbm_bookings[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsycbm_bookings[""] = array();
	$fieldToolTipsycbm_bookings[""] = array();
	$placeHoldersycbm_bookings[""] = array();
	$pageTitlesycbm_bookings[""] = array();
	$fieldLabelsycbm_bookings[""]["id"] = "Id";
	$fieldToolTipsycbm_bookings[""]["id"] = "";
	$placeHoldersycbm_bookings[""]["id"] = "";
	$fieldLabelsycbm_bookings[""]["title"] = "Title";
	$fieldToolTipsycbm_bookings[""]["title"] = "";
	$placeHoldersycbm_bookings[""]["title"] = "";
	$fieldLabelsycbm_bookings[""]["accountId"] = "Account Id";
	$fieldToolTipsycbm_bookings[""]["accountId"] = "";
	$placeHoldersycbm_bookings[""]["accountId"] = "";
	$fieldLabelsycbm_bookings[""]["profileId"] = "Profile Id";
	$fieldToolTipsycbm_bookings[""]["profileId"] = "";
	$placeHoldersycbm_bookings[""]["profileId"] = "";
	$fieldLabelsycbm_bookings[""]["createdAt"] = "Created At";
	$fieldToolTipsycbm_bookings[""]["createdAt"] = "";
	$placeHoldersycbm_bookings[""]["createdAt"] = "";
	$fieldLabelsycbm_bookings[""]["startsAt"] = "Starts At";
	$fieldToolTipsycbm_bookings[""]["startsAt"] = "";
	$placeHoldersycbm_bookings[""]["startsAt"] = "";
	$fieldLabelsycbm_bookings[""]["endsAt"] = "Ends At";
	$fieldToolTipsycbm_bookings[""]["endsAt"] = "";
	$placeHoldersycbm_bookings[""]["endsAt"] = "";
	$fieldLabelsycbm_bookings[""]["tentative"] = "Tentative";
	$fieldToolTipsycbm_bookings[""]["tentative"] = "";
	$placeHoldersycbm_bookings[""]["tentative"] = "";
	$fieldLabelsycbm_bookings[""]["timeZone"] = "Time Zone";
	$fieldToolTipsycbm_bookings[""]["timeZone"] = "";
	$placeHoldersycbm_bookings[""]["timeZone"] = "";
	$fieldLabelsycbm_bookings[""]["cancelled"] = "Cancelled";
	$fieldToolTipsycbm_bookings[""]["cancelled"] = "";
	$placeHoldersycbm_bookings[""]["cancelled"] = "";
	$fieldLabelsycbm_bookings[""]["updated_at"] = "Updated At";
	$fieldToolTipsycbm_bookings[""]["updated_at"] = "";
	$placeHoldersycbm_bookings[""]["updated_at"] = "";
	$fieldLabelsycbm_bookings[""]["updated_by"] = "Updated By";
	$fieldToolTipsycbm_bookings[""]["updated_by"] = "";
	$placeHoldersycbm_bookings[""]["updated_by"] = "";
	$fieldLabelsycbm_bookings[""]["created_at"] = "Created At";
	$fieldToolTipsycbm_bookings[""]["created_at"] = "";
	$placeHoldersycbm_bookings[""]["created_at"] = "";
	$fieldLabelsycbm_bookings[""]["created_by"] = "Created By";
	$fieldToolTipsycbm_bookings[""]["created_by"] = "";
	$placeHoldersycbm_bookings[""]["created_by"] = "";
	$fieldLabelsycbm_bookings[""]["FNAME"] = "FNAME";
	$fieldToolTipsycbm_bookings[""]["FNAME"] = "";
	$placeHoldersycbm_bookings[""]["FNAME"] = "";
	$fieldLabelsycbm_bookings[""]["LNAME"] = "LNAME";
	$fieldToolTipsycbm_bookings[""]["LNAME"] = "";
	$placeHoldersycbm_bookings[""]["LNAME"] = "";
	$fieldLabelsycbm_bookings[""]["EMAIL"] = "EMAIL";
	$fieldToolTipsycbm_bookings[""]["EMAIL"] = "";
	$placeHoldersycbm_bookings[""]["EMAIL"] = "";
	$fieldLabelsycbm_bookings[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsycbm_bookings[""]["ecc_id"] = "";
	$placeHoldersycbm_bookings[""]["ecc_id"] = "";
	$fieldLabelsycbm_bookings[""]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipsycbm_bookings[""]["Eoc_unfinished_id"] = "";
	$placeHoldersycbm_bookings[""]["Eoc_unfinished_id"] = "";
	$fieldLabelsycbm_bookings[""]["Q8"] = "Q8";
	$fieldToolTipsycbm_bookings[""]["Q8"] = "";
	$placeHoldersycbm_bookings[""]["Q8"] = "";
	$fieldLabelsycbm_bookings[""]["status"] = "Status";
	$fieldToolTipsycbm_bookings[""]["status"] = "";
	$placeHoldersycbm_bookings[""]["status"] = "";
	$fieldLabelsycbm_bookings[""]["Eoc_updated_at"] = "Eoc Updated At";
	$fieldToolTipsycbm_bookings[""]["Eoc_updated_at"] = "";
	$placeHoldersycbm_bookings[""]["Eoc_updated_at"] = "";
	$fieldLabelsycbm_bookings[""]["Q9"] = "Q9";
	$fieldToolTipsycbm_bookings[""]["Q9"] = "";
	$placeHoldersycbm_bookings[""]["Q9"] = "";
	if (count($fieldToolTipsycbm_bookings[""]))
		$tdataycbm_bookings[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsycbm_bookings["English"] = array();
	$fieldToolTipsycbm_bookings["English"] = array();
	$placeHoldersycbm_bookings["English"] = array();
	$pageTitlesycbm_bookings["English"] = array();
	$fieldLabelsycbm_bookings["English"]["id"] = "Id";
	$fieldToolTipsycbm_bookings["English"]["id"] = "";
	$placeHoldersycbm_bookings["English"]["id"] = "";
	$fieldLabelsycbm_bookings["English"]["title"] = "Title";
	$fieldToolTipsycbm_bookings["English"]["title"] = "";
	$placeHoldersycbm_bookings["English"]["title"] = "";
	$fieldLabelsycbm_bookings["English"]["accountId"] = "Account Id";
	$fieldToolTipsycbm_bookings["English"]["accountId"] = "";
	$placeHoldersycbm_bookings["English"]["accountId"] = "";
	$fieldLabelsycbm_bookings["English"]["profileId"] = "Profile Id";
	$fieldToolTipsycbm_bookings["English"]["profileId"] = "";
	$placeHoldersycbm_bookings["English"]["profileId"] = "";
	$fieldLabelsycbm_bookings["English"]["createdAt"] = "Created At";
	$fieldToolTipsycbm_bookings["English"]["createdAt"] = "";
	$placeHoldersycbm_bookings["English"]["createdAt"] = "";
	$fieldLabelsycbm_bookings["English"]["startsAt"] = "Starts At";
	$fieldToolTipsycbm_bookings["English"]["startsAt"] = "";
	$placeHoldersycbm_bookings["English"]["startsAt"] = "";
	$fieldLabelsycbm_bookings["English"]["endsAt"] = "Ends At";
	$fieldToolTipsycbm_bookings["English"]["endsAt"] = "";
	$placeHoldersycbm_bookings["English"]["endsAt"] = "";
	$fieldLabelsycbm_bookings["English"]["tentative"] = "Tentative";
	$fieldToolTipsycbm_bookings["English"]["tentative"] = "";
	$placeHoldersycbm_bookings["English"]["tentative"] = "";
	$fieldLabelsycbm_bookings["English"]["timeZone"] = "Time Zone";
	$fieldToolTipsycbm_bookings["English"]["timeZone"] = "";
	$placeHoldersycbm_bookings["English"]["timeZone"] = "";
	$fieldLabelsycbm_bookings["English"]["cancelled"] = "Cancelled";
	$fieldToolTipsycbm_bookings["English"]["cancelled"] = "";
	$placeHoldersycbm_bookings["English"]["cancelled"] = "";
	$fieldLabelsycbm_bookings["English"]["updated_at"] = "Updated At";
	$fieldToolTipsycbm_bookings["English"]["updated_at"] = "";
	$placeHoldersycbm_bookings["English"]["updated_at"] = "";
	$fieldLabelsycbm_bookings["English"]["updated_by"] = "Updated By";
	$fieldToolTipsycbm_bookings["English"]["updated_by"] = "";
	$placeHoldersycbm_bookings["English"]["updated_by"] = "";
	$fieldLabelsycbm_bookings["English"]["created_at"] = "Created At";
	$fieldToolTipsycbm_bookings["English"]["created_at"] = "";
	$placeHoldersycbm_bookings["English"]["created_at"] = "";
	$fieldLabelsycbm_bookings["English"]["created_by"] = "Created By";
	$fieldToolTipsycbm_bookings["English"]["created_by"] = "";
	$placeHoldersycbm_bookings["English"]["created_by"] = "";
	$fieldLabelsycbm_bookings["English"]["FNAME"] = "FNAME";
	$fieldToolTipsycbm_bookings["English"]["FNAME"] = "";
	$placeHoldersycbm_bookings["English"]["FNAME"] = "";
	$fieldLabelsycbm_bookings["English"]["LNAME"] = "LNAME";
	$fieldToolTipsycbm_bookings["English"]["LNAME"] = "";
	$placeHoldersycbm_bookings["English"]["LNAME"] = "";
	$fieldLabelsycbm_bookings["English"]["EMAIL"] = "EMAIL";
	$fieldToolTipsycbm_bookings["English"]["EMAIL"] = "";
	$placeHoldersycbm_bookings["English"]["EMAIL"] = "";
	$fieldLabelsycbm_bookings["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsycbm_bookings["English"]["ecc_id"] = "";
	$placeHoldersycbm_bookings["English"]["ecc_id"] = "";
	$fieldLabelsycbm_bookings["English"]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipsycbm_bookings["English"]["Eoc_unfinished_id"] = "";
	$placeHoldersycbm_bookings["English"]["Eoc_unfinished_id"] = "";
	$fieldLabelsycbm_bookings["English"]["Q8"] = "Q8";
	$fieldToolTipsycbm_bookings["English"]["Q8"] = "";
	$placeHoldersycbm_bookings["English"]["Q8"] = "";
	$fieldLabelsycbm_bookings["English"]["status"] = "Status";
	$fieldToolTipsycbm_bookings["English"]["status"] = "";
	$placeHoldersycbm_bookings["English"]["status"] = "";
	$fieldLabelsycbm_bookings["English"]["Eoc_updated_at"] = "Eoc Updated At";
	$fieldToolTipsycbm_bookings["English"]["Eoc_updated_at"] = "";
	$placeHoldersycbm_bookings["English"]["Eoc_updated_at"] = "";
	$fieldLabelsycbm_bookings["English"]["Q9"] = "Q9";
	$fieldToolTipsycbm_bookings["English"]["Q9"] = "";
	$placeHoldersycbm_bookings["English"]["Q9"] = "";
	if (count($fieldToolTipsycbm_bookings["English"]))
		$tdataycbm_bookings[".isUseToolTips"] = true;
}


	$tdataycbm_bookings[".NCSearch"] = true;



$tdataycbm_bookings[".shortTableName"] = "ycbm_bookings";
$tdataycbm_bookings[".nSecOptions"] = 0;
$tdataycbm_bookings[".recsPerRowPrint"] = 1;
$tdataycbm_bookings[".mainTableOwnerID"] = "";
$tdataycbm_bookings[".moveNext"] = 1;
$tdataycbm_bookings[".entityType"] = 0;

$tdataycbm_bookings[".strOriginalTableName"] = "ycbm_bookings";

	



$tdataycbm_bookings[".showAddInPopup"] = false;

$tdataycbm_bookings[".showEditInPopup"] = false;

$tdataycbm_bookings[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataycbm_bookings[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataycbm_bookings[".fieldsForRegister"] = array();

$tdataycbm_bookings[".listAjax"] = false;

	$tdataycbm_bookings[".audit"] = true;

	$tdataycbm_bookings[".locking"] = false;



$tdataycbm_bookings[".list"] = true;

$tdataycbm_bookings[".inlineEdit"] = true;


$tdataycbm_bookings[".reorderRecordsByHeader"] = true;





$tdataycbm_bookings[".exportTo"] = true;



$tdataycbm_bookings[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataycbm_bookings[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataycbm_bookings[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataycbm_bookings[".searchSaving"] = false;
//

$tdataycbm_bookings[".showSearchPanel"] = true;
		$tdataycbm_bookings[".flexibleSearch"] = true;

$tdataycbm_bookings[".isUseAjaxSuggest"] = true;

$tdataycbm_bookings[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataycbm_bookings[".ajaxCodeSnippetAdded"] = false;

$tdataycbm_bookings[".buttonsAdded"] = false;

$tdataycbm_bookings[".addPageEvents"] = false;

// use timepicker for search panel
$tdataycbm_bookings[".isUseTimeForSearch"] = false;





$tdataycbm_bookings[".allSearchFields"] = array();
$tdataycbm_bookings[".filterFields"] = array();
$tdataycbm_bookings[".requiredSearchFields"] = array();

$tdataycbm_bookings[".allSearchFields"][] = "id";
	$tdataycbm_bookings[".allSearchFields"][] = "createdAt";
	$tdataycbm_bookings[".allSearchFields"][] = "startsAt";
	$tdataycbm_bookings[".allSearchFields"][] = "endsAt";
	$tdataycbm_bookings[".allSearchFields"][] = "cancelled";
	$tdataycbm_bookings[".allSearchFields"][] = "status";
	$tdataycbm_bookings[".allSearchFields"][] = "ecc_id";
	$tdataycbm_bookings[".allSearchFields"][] = "Eoc_updated_at";
	$tdataycbm_bookings[".allSearchFields"][] = "EMAIL";
	$tdataycbm_bookings[".allSearchFields"][] = "Q8";
	$tdataycbm_bookings[".allSearchFields"][] = "Q9";
	$tdataycbm_bookings[".allSearchFields"][] = "LNAME";
	$tdataycbm_bookings[".allSearchFields"][] = "FNAME";
	$tdataycbm_bookings[".allSearchFields"][] = "title";
	$tdataycbm_bookings[".allSearchFields"][] = "accountId";
	$tdataycbm_bookings[".allSearchFields"][] = "profileId";
	$tdataycbm_bookings[".allSearchFields"][] = "updated_at";
	$tdataycbm_bookings[".allSearchFields"][] = "updated_by";
	$tdataycbm_bookings[".allSearchFields"][] = "created_at";
	$tdataycbm_bookings[".allSearchFields"][] = "created_by";
	

$tdataycbm_bookings[".googleLikeFields"] = array();
$tdataycbm_bookings[".googleLikeFields"][] = "id";
$tdataycbm_bookings[".googleLikeFields"][] = "title";
$tdataycbm_bookings[".googleLikeFields"][] = "accountId";
$tdataycbm_bookings[".googleLikeFields"][] = "profileId";
$tdataycbm_bookings[".googleLikeFields"][] = "createdAt";
$tdataycbm_bookings[".googleLikeFields"][] = "startsAt";
$tdataycbm_bookings[".googleLikeFields"][] = "endsAt";
$tdataycbm_bookings[".googleLikeFields"][] = "tentative";
$tdataycbm_bookings[".googleLikeFields"][] = "timeZone";
$tdataycbm_bookings[".googleLikeFields"][] = "cancelled";
$tdataycbm_bookings[".googleLikeFields"][] = "updated_at";
$tdataycbm_bookings[".googleLikeFields"][] = "updated_by";
$tdataycbm_bookings[".googleLikeFields"][] = "created_at";
$tdataycbm_bookings[".googleLikeFields"][] = "created_by";
$tdataycbm_bookings[".googleLikeFields"][] = "FNAME";
$tdataycbm_bookings[".googleLikeFields"][] = "LNAME";
$tdataycbm_bookings[".googleLikeFields"][] = "EMAIL";
$tdataycbm_bookings[".googleLikeFields"][] = "ecc_id";
$tdataycbm_bookings[".googleLikeFields"][] = "Eoc_unfinished_id";
$tdataycbm_bookings[".googleLikeFields"][] = "Q8";
$tdataycbm_bookings[".googleLikeFields"][] = "status";
$tdataycbm_bookings[".googleLikeFields"][] = "Eoc_updated_at";
$tdataycbm_bookings[".googleLikeFields"][] = "Q9";


$tdataycbm_bookings[".advSearchFields"] = array();
$tdataycbm_bookings[".advSearchFields"][] = "id";
$tdataycbm_bookings[".advSearchFields"][] = "createdAt";
$tdataycbm_bookings[".advSearchFields"][] = "startsAt";
$tdataycbm_bookings[".advSearchFields"][] = "endsAt";
$tdataycbm_bookings[".advSearchFields"][] = "cancelled";
$tdataycbm_bookings[".advSearchFields"][] = "status";
$tdataycbm_bookings[".advSearchFields"][] = "ecc_id";
$tdataycbm_bookings[".advSearchFields"][] = "Eoc_updated_at";
$tdataycbm_bookings[".advSearchFields"][] = "EMAIL";
$tdataycbm_bookings[".advSearchFields"][] = "Q8";
$tdataycbm_bookings[".advSearchFields"][] = "Q9";
$tdataycbm_bookings[".advSearchFields"][] = "LNAME";
$tdataycbm_bookings[".advSearchFields"][] = "FNAME";
$tdataycbm_bookings[".advSearchFields"][] = "title";
$tdataycbm_bookings[".advSearchFields"][] = "accountId";
$tdataycbm_bookings[".advSearchFields"][] = "profileId";
$tdataycbm_bookings[".advSearchFields"][] = "updated_at";
$tdataycbm_bookings[".advSearchFields"][] = "updated_by";
$tdataycbm_bookings[".advSearchFields"][] = "created_at";
$tdataycbm_bookings[".advSearchFields"][] = "created_by";

$tdataycbm_bookings[".tableType"] = "list";

$tdataycbm_bookings[".printerPageOrientation"] = 0;
$tdataycbm_bookings[".nPrinterPageScale"] = 100;

$tdataycbm_bookings[".nPrinterSplitRecords"] = 40;

$tdataycbm_bookings[".nPrinterPDFSplitRecords"] = 40;



$tdataycbm_bookings[".geocodingEnabled"] = false;





$tdataycbm_bookings[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataycbm_bookings[".pageSize"] = 20;

$tdataycbm_bookings[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `createdAt` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataycbm_bookings[".strOrderBy"] = $tstrOrderBy;

$tdataycbm_bookings[".orderindexes"] = array();
$tdataycbm_bookings[".orderindexes"][] = array(5, (0 ? "ASC" : "DESC"), "`createdAt`");

$tdataycbm_bookings[".sqlHead"] = "SELECT `id`,  `title`,  `accountId`,  `profileId`,  `createdAt`,  `startsAt`,  `endsAt`,  `tentative`,  `timeZone`,  `cancelled`,  `updated_at`,  `updated_by`,  `created_at`,  `created_by`,  `FNAME`,  `LNAME`,  `EMAIL`,  `ecc_id`,  `Eoc_unfinished_id`,  `Q8`,  `status`,  `Eoc_updated_at`,  `Q9`";
$tdataycbm_bookings[".sqlFrom"] = "FROM `ycbm_bookings`";
$tdataycbm_bookings[".sqlWhereExpr"] = "";
$tdataycbm_bookings[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataycbm_bookings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataycbm_bookings[".arrGroupsPerPage"] = $arrGPP;

$tdataycbm_bookings[".highlightSearchResults"] = true;

$tableKeysycbm_bookings = array();
$tableKeysycbm_bookings[] = "id";
$tdataycbm_bookings[".Keys"] = $tableKeysycbm_bookings;

$tdataycbm_bookings[".listFields"] = array();
$tdataycbm_bookings[".listFields"][] = "id";
$tdataycbm_bookings[".listFields"][] = "createdAt";
$tdataycbm_bookings[".listFields"][] = "startsAt";
$tdataycbm_bookings[".listFields"][] = "endsAt";
$tdataycbm_bookings[".listFields"][] = "cancelled";
$tdataycbm_bookings[".listFields"][] = "status";
$tdataycbm_bookings[".listFields"][] = "ecc_id";
$tdataycbm_bookings[".listFields"][] = "Eoc_updated_at";
$tdataycbm_bookings[".listFields"][] = "EMAIL";
$tdataycbm_bookings[".listFields"][] = "Q8";
$tdataycbm_bookings[".listFields"][] = "Q9";
$tdataycbm_bookings[".listFields"][] = "LNAME";
$tdataycbm_bookings[".listFields"][] = "FNAME";
$tdataycbm_bookings[".listFields"][] = "title";
$tdataycbm_bookings[".listFields"][] = "accountId";
$tdataycbm_bookings[".listFields"][] = "profileId";
$tdataycbm_bookings[".listFields"][] = "updated_at";
$tdataycbm_bookings[".listFields"][] = "updated_by";
$tdataycbm_bookings[".listFields"][] = "created_at";
$tdataycbm_bookings[".listFields"][] = "created_by";

$tdataycbm_bookings[".hideMobileList"] = array();


$tdataycbm_bookings[".viewFields"] = array();

$tdataycbm_bookings[".addFields"] = array();

$tdataycbm_bookings[".masterListFields"] = array();
$tdataycbm_bookings[".masterListFields"][] = "Q9";
$tdataycbm_bookings[".masterListFields"][] = "id";
$tdataycbm_bookings[".masterListFields"][] = "createdAt";
$tdataycbm_bookings[".masterListFields"][] = "Eoc_unfinished_id";
$tdataycbm_bookings[".masterListFields"][] = "startsAt";
$tdataycbm_bookings[".masterListFields"][] = "endsAt";
$tdataycbm_bookings[".masterListFields"][] = "cancelled";
$tdataycbm_bookings[".masterListFields"][] = "status";
$tdataycbm_bookings[".masterListFields"][] = "ecc_id";
$tdataycbm_bookings[".masterListFields"][] = "Eoc_updated_at";
$tdataycbm_bookings[".masterListFields"][] = "EMAIL";
$tdataycbm_bookings[".masterListFields"][] = "Q8";
$tdataycbm_bookings[".masterListFields"][] = "LNAME";
$tdataycbm_bookings[".masterListFields"][] = "FNAME";
$tdataycbm_bookings[".masterListFields"][] = "title";
$tdataycbm_bookings[".masterListFields"][] = "accountId";
$tdataycbm_bookings[".masterListFields"][] = "profileId";
$tdataycbm_bookings[".masterListFields"][] = "tentative";
$tdataycbm_bookings[".masterListFields"][] = "updated_at";
$tdataycbm_bookings[".masterListFields"][] = "timeZone";
$tdataycbm_bookings[".masterListFields"][] = "updated_by";
$tdataycbm_bookings[".masterListFields"][] = "created_at";
$tdataycbm_bookings[".masterListFields"][] = "created_by";

$tdataycbm_bookings[".inlineAddFields"] = array();

$tdataycbm_bookings[".editFields"] = array();

$tdataycbm_bookings[".inlineEditFields"] = array();
$tdataycbm_bookings[".inlineEditFields"][] = "status";
$tdataycbm_bookings[".inlineEditFields"][] = "Q9";

$tdataycbm_bookings[".updateSelectedFields"] = array();


$tdataycbm_bookings[".exportFields"] = array();
$tdataycbm_bookings[".exportFields"][] = "id";
$tdataycbm_bookings[".exportFields"][] = "createdAt";
$tdataycbm_bookings[".exportFields"][] = "startsAt";
$tdataycbm_bookings[".exportFields"][] = "endsAt";
$tdataycbm_bookings[".exportFields"][] = "cancelled";
$tdataycbm_bookings[".exportFields"][] = "status";
$tdataycbm_bookings[".exportFields"][] = "ecc_id";
$tdataycbm_bookings[".exportFields"][] = "Eoc_updated_at";
$tdataycbm_bookings[".exportFields"][] = "EMAIL";
$tdataycbm_bookings[".exportFields"][] = "Q8";
$tdataycbm_bookings[".exportFields"][] = "Q9";
$tdataycbm_bookings[".exportFields"][] = "LNAME";
$tdataycbm_bookings[".exportFields"][] = "FNAME";
$tdataycbm_bookings[".exportFields"][] = "title";
$tdataycbm_bookings[".exportFields"][] = "accountId";
$tdataycbm_bookings[".exportFields"][] = "profileId";
$tdataycbm_bookings[".exportFields"][] = "updated_at";
$tdataycbm_bookings[".exportFields"][] = "updated_by";
$tdataycbm_bookings[".exportFields"][] = "created_at";
$tdataycbm_bookings[".exportFields"][] = "created_by";

$tdataycbm_bookings[".importFields"] = array();

$tdataycbm_bookings[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","id");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdataycbm_bookings["id"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","title");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`title`";

	
	
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




	$tdataycbm_bookings["title"] = $fdata;
//	accountId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "accountId";
	$fdata["GoodName"] = "accountId";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","accountId");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "accountId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`accountId`";

	
	
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




	$tdataycbm_bookings["accountId"] = $fdata;
//	profileId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "profileId";
	$fdata["GoodName"] = "profileId";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","profileId");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "profileId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`profileId`";

	
	
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




	$tdataycbm_bookings["profileId"] = $fdata;
//	createdAt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "createdAt";
	$fdata["GoodName"] = "createdAt";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","createdAt");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "createdAt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`createdAt`";

	
	
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




	$tdataycbm_bookings["createdAt"] = $fdata;
//	startsAt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "startsAt";
	$fdata["GoodName"] = "startsAt";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","startsAt");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "startsAt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`startsAt`";

	
	
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




	$tdataycbm_bookings["startsAt"] = $fdata;
//	endsAt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "endsAt";
	$fdata["GoodName"] = "endsAt";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","endsAt");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "endsAt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`endsAt`";

	
	
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




	$tdataycbm_bookings["endsAt"] = $fdata;
//	tentative
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tentative";
	$fdata["GoodName"] = "tentative";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","tentative");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "tentative";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tentative`";

	
	
			
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








	$tdataycbm_bookings["tentative"] = $fdata;
//	timeZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "timeZone";
	$fdata["GoodName"] = "timeZone";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","timeZone");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "timeZone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`timeZone`";

	
	
			
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








	$tdataycbm_bookings["timeZone"] = $fdata;
//	cancelled
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cancelled";
	$fdata["GoodName"] = "cancelled";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","cancelled");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cancelled";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cancelled`";

	
	
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




	$tdataycbm_bookings["cancelled"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","updated_at");
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




	$tdataycbm_bookings["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","updated_by");
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




	$tdataycbm_bookings["updated_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","created_at");
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




	$tdataycbm_bookings["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","created_by");
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




	$tdataycbm_bookings["created_by"] = $fdata;
//	FNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "FNAME";
	$fdata["GoodName"] = "FNAME";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","FNAME");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`FNAME`";

	
	
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




	$tdataycbm_bookings["FNAME"] = $fdata;
//	LNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "LNAME";
	$fdata["GoodName"] = "LNAME";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","LNAME");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`LNAME`";

	
	
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




	$tdataycbm_bookings["LNAME"] = $fdata;
//	EMAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "EMAIL";
	$fdata["GoodName"] = "EMAIL";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","EMAIL");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "EMAIL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`EMAIL`";

	
	
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




	$tdataycbm_bookings["EMAIL"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataycbm_bookings["ecc_id"] = $fdata;
//	Eoc_unfinished_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Eoc_unfinished_id";
	$fdata["GoodName"] = "Eoc_unfinished_id";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","Eoc_unfinished_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "Eoc_unfinished_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_unfinished_id`";

	
	
			
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








	$tdataycbm_bookings["Eoc_unfinished_id"] = $fdata;
//	Q8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Q8";
	$fdata["GoodName"] = "Q8";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","Q8");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Q8";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Q8`";

	
	
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




	$tdataycbm_bookings["Q8"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","status");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "mst_ycbm_booking_status";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 200;
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




	$tdataycbm_bookings["status"] = $fdata;
//	Eoc_updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Eoc_updated_at";
	$fdata["GoodName"] = "Eoc_updated_at";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","Eoc_updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_updated_at`";

	
	
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




	$tdataycbm_bookings["Eoc_updated_at"] = $fdata;
//	Q9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Q9";
	$fdata["GoodName"] = "Q9";
	$fdata["ownerTable"] = "ycbm_bookings";
	$fdata["Label"] = GetFieldLabel("ycbm_bookings","Q9");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Q9";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Q9`";

	
	
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




	$tdataycbm_bookings["Q9"] = $fdata;


$tables_data["ycbm_bookings"]=&$tdataycbm_bookings;
$field_labels["ycbm_bookings"] = &$fieldLabelsycbm_bookings;
$fieldToolTips["ycbm_bookings"] = &$fieldToolTipsycbm_bookings;
$placeHolders["ycbm_bookings"] = &$placeHoldersycbm_bookings;
$page_titles["ycbm_bookings"] = &$pageTitlesycbm_bookings;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ycbm_bookings"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ycbm_bookings"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_ycbm_bookings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `title`,  `accountId`,  `profileId`,  `createdAt`,  `startsAt`,  `endsAt`,  `tentative`,  `timeZone`,  `cancelled`,  `updated_at`,  `updated_by`,  `created_at`,  `created_by`,  `FNAME`,  `LNAME`,  `EMAIL`,  `ecc_id`,  `Eoc_unfinished_id`,  `Q8`,  `status`,  `Eoc_updated_at`,  `Q9`";
$proto0["m_strFrom"] = "FROM `ycbm_bookings`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `createdAt` DESC";
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
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "ycbm_bookings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto8["m_sql"] = "`title`";
$proto8["m_srcTableName"] = "ycbm_bookings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "accountId",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto10["m_sql"] = "`accountId`";
$proto10["m_srcTableName"] = "ycbm_bookings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "profileId",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto12["m_sql"] = "`profileId`";
$proto12["m_srcTableName"] = "ycbm_bookings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "createdAt",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto14["m_sql"] = "`createdAt`";
$proto14["m_srcTableName"] = "ycbm_bookings";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "startsAt",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto16["m_sql"] = "`startsAt`";
$proto16["m_srcTableName"] = "ycbm_bookings";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "endsAt",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto18["m_sql"] = "`endsAt`";
$proto18["m_srcTableName"] = "ycbm_bookings";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tentative",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto20["m_sql"] = "`tentative`";
$proto20["m_srcTableName"] = "ycbm_bookings";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "timeZone",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto22["m_sql"] = "`timeZone`";
$proto22["m_srcTableName"] = "ycbm_bookings";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cancelled",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto24["m_sql"] = "`cancelled`";
$proto24["m_srcTableName"] = "ycbm_bookings";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto26["m_sql"] = "`updated_at`";
$proto26["m_srcTableName"] = "ycbm_bookings";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto28["m_sql"] = "`updated_by`";
$proto28["m_srcTableName"] = "ycbm_bookings";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto30["m_sql"] = "`created_at`";
$proto30["m_srcTableName"] = "ycbm_bookings";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto32["m_sql"] = "`created_by`";
$proto32["m_srcTableName"] = "ycbm_bookings";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "FNAME",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto34["m_sql"] = "`FNAME`";
$proto34["m_srcTableName"] = "ycbm_bookings";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "LNAME",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto36["m_sql"] = "`LNAME`";
$proto36["m_srcTableName"] = "ycbm_bookings";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "EMAIL",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto38["m_sql"] = "`EMAIL`";
$proto38["m_srcTableName"] = "ycbm_bookings";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto40["m_sql"] = "`ecc_id`";
$proto40["m_srcTableName"] = "ycbm_bookings";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_unfinished_id",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto42["m_sql"] = "`Eoc_unfinished_id`";
$proto42["m_srcTableName"] = "ycbm_bookings";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Q8",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto44["m_sql"] = "`Q8`";
$proto44["m_srcTableName"] = "ycbm_bookings";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto46["m_sql"] = "`status`";
$proto46["m_srcTableName"] = "ycbm_bookings";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_updated_at",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto48["m_sql"] = "`Eoc_updated_at`";
$proto48["m_srcTableName"] = "ycbm_bookings";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Q9",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto50["m_sql"] = "`Q9`";
$proto50["m_srcTableName"] = "ycbm_bookings";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "ycbm_bookings";
$proto53["m_srcTableName"] = "ycbm_bookings";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "id";
$proto53["m_columns"][] = "title";
$proto53["m_columns"][] = "accountId";
$proto53["m_columns"][] = "profileId";
$proto53["m_columns"][] = "createdAt";
$proto53["m_columns"][] = "startsAt";
$proto53["m_columns"][] = "endsAt";
$proto53["m_columns"][] = "tentative";
$proto53["m_columns"][] = "timeZone";
$proto53["m_columns"][] = "cancelled";
$proto53["m_columns"][] = "updated_at";
$proto53["m_columns"][] = "updated_by";
$proto53["m_columns"][] = "created_at";
$proto53["m_columns"][] = "created_by";
$proto53["m_columns"][] = "FNAME";
$proto53["m_columns"][] = "LNAME";
$proto53["m_columns"][] = "EMAIL";
$proto53["m_columns"][] = "ecc_id";
$proto53["m_columns"][] = "Eoc_unfinished_id";
$proto53["m_columns"][] = "Q8";
$proto53["m_columns"][] = "status";
$proto53["m_columns"][] = "Eoc_updated_at";
$proto53["m_columns"][] = "Q9";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "`ycbm_bookings`";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "ycbm_bookings";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "createdAt",
	"m_strTable" => "ycbm_bookings",
	"m_srcTableName" => "ycbm_bookings"
));

$proto56["m_column"]=$obj;
$proto56["m_bAsc"] = 0;
$proto56["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto56);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="ycbm_bookings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ycbm_bookings = createSqlQuery_ycbm_bookings();


	
		;

																							

$tdataycbm_bookings[".sqlquery"] = $queryData_ycbm_bookings;

$tableEvents["ycbm_bookings"] = new eventsBase;
$tdataycbm_bookings[".hasEvents"] = false;

?>