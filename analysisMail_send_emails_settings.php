<?php
require_once(getabspath("classes/cipherer.php"));




$tdataanalysisMail_send_emails = array();
	$tdataanalysisMail_send_emails[".truncateText"] = true;
	$tdataanalysisMail_send_emails[".NumberOfChars"] = 80;
	$tdataanalysisMail_send_emails[".ShortName"] = "analysisMail_send_emails";
	$tdataanalysisMail_send_emails[".OwnerID"] = "";
	$tdataanalysisMail_send_emails[".OriginalTable"] = "analysisMail_send_emails";

//	field labels
$fieldLabelsanalysisMail_send_emails = array();
$fieldToolTipsanalysisMail_send_emails = array();
$pageTitlesanalysisMail_send_emails = array();
$placeHoldersanalysisMail_send_emails = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsanalysisMail_send_emails["Japanese"] = array();
	$fieldToolTipsanalysisMail_send_emails["Japanese"] = array();
	$placeHoldersanalysisMail_send_emails["Japanese"] = array();
	$pageTitlesanalysisMail_send_emails["Japanese"] = array();
	$fieldLabelsanalysisMail_send_emails["Japanese"]["send_mail_id"] = "メールId";
	$fieldToolTipsanalysisMail_send_emails["Japanese"]["send_mail_id"] = "";
	$placeHoldersanalysisMail_send_emails["Japanese"]["send_mail_id"] = "";
	$fieldLabelsanalysisMail_send_emails["Japanese"]["status"] = "ステータス";
	$fieldToolTipsanalysisMail_send_emails["Japanese"]["status"] = "";
	$placeHoldersanalysisMail_send_emails["Japanese"]["status"] = "";
	$fieldLabelsanalysisMail_send_emails["Japanese"]["send_at"] = "送信日時";
	$fieldToolTipsanalysisMail_send_emails["Japanese"]["send_at"] = "";
	$placeHoldersanalysisMail_send_emails["Japanese"]["send_at"] = "";
	$fieldLabelsanalysisMail_send_emails["Japanese"]["subject"] = "件名";
	$fieldToolTipsanalysisMail_send_emails["Japanese"]["subject"] = "";
	$placeHoldersanalysisMail_send_emails["Japanese"]["subject"] = "";
	$fieldLabelsanalysisMail_send_emails["Japanese"]["content_detail"] = "本文";
	$fieldToolTipsanalysisMail_send_emails["Japanese"]["content_detail"] = "";
	$placeHoldersanalysisMail_send_emails["Japanese"]["content_detail"] = "";
	$fieldLabelsanalysisMail_send_emails["Japanese"]["shomei"] = "署名";
	$fieldToolTipsanalysisMail_send_emails["Japanese"]["shomei"] = "";
	$placeHoldersanalysisMail_send_emails["Japanese"]["shomei"] = "";
	$fieldLabelsanalysisMail_send_emails["Japanese"]["alt_text"] = "Altテキスト";
	$fieldToolTipsanalysisMail_send_emails["Japanese"]["alt_text"] = "";
	$placeHoldersanalysisMail_send_emails["Japanese"]["alt_text"] = "";
	$fieldLabelsanalysisMail_send_emails["Japanese"]["send_group_id"] = "送信グループ";
	$fieldToolTipsanalysisMail_send_emails["Japanese"]["send_group_id"] = "";
	$placeHoldersanalysisMail_send_emails["Japanese"]["send_group_id"] = "";
	$fieldLabelsanalysisMail_send_emails["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsanalysisMail_send_emails["Japanese"]["updated_by"] = "";
	$placeHoldersanalysisMail_send_emails["Japanese"]["updated_by"] = "";
	$fieldLabelsanalysisMail_send_emails["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsanalysisMail_send_emails["Japanese"]["updated_at"] = "";
	$placeHoldersanalysisMail_send_emails["Japanese"]["updated_at"] = "";
	$fieldLabelsanalysisMail_send_emails["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsanalysisMail_send_emails["Japanese"]["created_by"] = "";
	$placeHoldersanalysisMail_send_emails["Japanese"]["created_by"] = "";
	$fieldLabelsanalysisMail_send_emails["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsanalysisMail_send_emails["Japanese"]["created_at"] = "";
	$placeHoldersanalysisMail_send_emails["Japanese"]["created_at"] = "";
	$fieldLabelsanalysisMail_send_emails["Japanese"]["is_send_check"] = "送信予約";
	$fieldToolTipsanalysisMail_send_emails["Japanese"]["is_send_check"] = "";
	$placeHoldersanalysisMail_send_emails["Japanese"]["is_send_check"] = "";
	$fieldLabelsanalysisMail_send_emails["Japanese"]["auto_templete_name"] = "自動テンプレート名";
	$fieldToolTipsanalysisMail_send_emails["Japanese"]["auto_templete_name"] = "";
	$placeHoldersanalysisMail_send_emails["Japanese"]["auto_templete_name"] = "";
	$fieldLabelsanalysisMail_send_emails["Japanese"]["success_count"] = "成功数";
	$fieldToolTipsanalysisMail_send_emails["Japanese"]["success_count"] = "";
	$placeHoldersanalysisMail_send_emails["Japanese"]["success_count"] = "";
	$fieldLabelsanalysisMail_send_emails["Japanese"]["error_count"] = "失敗数";
	$fieldToolTipsanalysisMail_send_emails["Japanese"]["error_count"] = "";
	$placeHoldersanalysisMail_send_emails["Japanese"]["error_count"] = "";
	if (count($fieldToolTipsanalysisMail_send_emails["Japanese"]))
		$tdataanalysisMail_send_emails[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsanalysisMail_send_emails[""] = array();
	$fieldToolTipsanalysisMail_send_emails[""] = array();
	$placeHoldersanalysisMail_send_emails[""] = array();
	$pageTitlesanalysisMail_send_emails[""] = array();
	$fieldLabelsanalysisMail_send_emails[""]["send_mail_id"] = "Send Mail Id";
	$fieldToolTipsanalysisMail_send_emails[""]["send_mail_id"] = "";
	$placeHoldersanalysisMail_send_emails[""]["send_mail_id"] = "";
	$fieldLabelsanalysisMail_send_emails[""]["status"] = "Status";
	$fieldToolTipsanalysisMail_send_emails[""]["status"] = "";
	$placeHoldersanalysisMail_send_emails[""]["status"] = "";
	$fieldLabelsanalysisMail_send_emails[""]["send_at"] = "Send At";
	$fieldToolTipsanalysisMail_send_emails[""]["send_at"] = "";
	$placeHoldersanalysisMail_send_emails[""]["send_at"] = "";
	$fieldLabelsanalysisMail_send_emails[""]["subject"] = "Subject";
	$fieldToolTipsanalysisMail_send_emails[""]["subject"] = "";
	$placeHoldersanalysisMail_send_emails[""]["subject"] = "";
	$fieldLabelsanalysisMail_send_emails[""]["content_detail"] = "Content Detail";
	$fieldToolTipsanalysisMail_send_emails[""]["content_detail"] = "";
	$placeHoldersanalysisMail_send_emails[""]["content_detail"] = "";
	$fieldLabelsanalysisMail_send_emails[""]["shomei"] = "Shomei";
	$fieldToolTipsanalysisMail_send_emails[""]["shomei"] = "";
	$placeHoldersanalysisMail_send_emails[""]["shomei"] = "";
	$fieldLabelsanalysisMail_send_emails[""]["alt_text"] = "Alt Text";
	$fieldToolTipsanalysisMail_send_emails[""]["alt_text"] = "";
	$placeHoldersanalysisMail_send_emails[""]["alt_text"] = "";
	$fieldLabelsanalysisMail_send_emails[""]["send_group_id"] = "Send Group Id";
	$fieldToolTipsanalysisMail_send_emails[""]["send_group_id"] = "";
	$placeHoldersanalysisMail_send_emails[""]["send_group_id"] = "";
	$fieldLabelsanalysisMail_send_emails[""]["updated_by"] = "Updated By";
	$fieldToolTipsanalysisMail_send_emails[""]["updated_by"] = "";
	$placeHoldersanalysisMail_send_emails[""]["updated_by"] = "";
	$fieldLabelsanalysisMail_send_emails[""]["updated_at"] = "Updated At";
	$fieldToolTipsanalysisMail_send_emails[""]["updated_at"] = "";
	$placeHoldersanalysisMail_send_emails[""]["updated_at"] = "";
	$fieldLabelsanalysisMail_send_emails[""]["created_by"] = "Created By";
	$fieldToolTipsanalysisMail_send_emails[""]["created_by"] = "";
	$placeHoldersanalysisMail_send_emails[""]["created_by"] = "";
	$fieldLabelsanalysisMail_send_emails[""]["created_at"] = "Created At";
	$fieldToolTipsanalysisMail_send_emails[""]["created_at"] = "";
	$placeHoldersanalysisMail_send_emails[""]["created_at"] = "";
	$fieldLabelsanalysisMail_send_emails[""]["is_send_check"] = "Is Send Check";
	$fieldToolTipsanalysisMail_send_emails[""]["is_send_check"] = "";
	$placeHoldersanalysisMail_send_emails[""]["is_send_check"] = "";
	$fieldLabelsanalysisMail_send_emails[""]["auto_templete_name"] = "Auto Templete Name";
	$fieldToolTipsanalysisMail_send_emails[""]["auto_templete_name"] = "";
	$placeHoldersanalysisMail_send_emails[""]["auto_templete_name"] = "";
	$fieldLabelsanalysisMail_send_emails[""]["success_count"] = "Success Count";
	$fieldToolTipsanalysisMail_send_emails[""]["success_count"] = "";
	$placeHoldersanalysisMail_send_emails[""]["success_count"] = "";
	$fieldLabelsanalysisMail_send_emails[""]["error_count"] = "Error Count";
	$fieldToolTipsanalysisMail_send_emails[""]["error_count"] = "";
	$placeHoldersanalysisMail_send_emails[""]["error_count"] = "";
	if (count($fieldToolTipsanalysisMail_send_emails[""]))
		$tdataanalysisMail_send_emails[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsanalysisMail_send_emails["English"] = array();
	$fieldToolTipsanalysisMail_send_emails["English"] = array();
	$placeHoldersanalysisMail_send_emails["English"] = array();
	$pageTitlesanalysisMail_send_emails["English"] = array();
	$fieldLabelsanalysisMail_send_emails["English"]["send_mail_id"] = "Send Mail Id";
	$fieldToolTipsanalysisMail_send_emails["English"]["send_mail_id"] = "";
	$placeHoldersanalysisMail_send_emails["English"]["send_mail_id"] = "";
	$fieldLabelsanalysisMail_send_emails["English"]["status"] = "Status";
	$fieldToolTipsanalysisMail_send_emails["English"]["status"] = "";
	$placeHoldersanalysisMail_send_emails["English"]["status"] = "";
	$fieldLabelsanalysisMail_send_emails["English"]["send_at"] = "Send At";
	$fieldToolTipsanalysisMail_send_emails["English"]["send_at"] = "";
	$placeHoldersanalysisMail_send_emails["English"]["send_at"] = "";
	$fieldLabelsanalysisMail_send_emails["English"]["subject"] = "Subject";
	$fieldToolTipsanalysisMail_send_emails["English"]["subject"] = "";
	$placeHoldersanalysisMail_send_emails["English"]["subject"] = "";
	$fieldLabelsanalysisMail_send_emails["English"]["content_detail"] = "Content Detail";
	$fieldToolTipsanalysisMail_send_emails["English"]["content_detail"] = "";
	$placeHoldersanalysisMail_send_emails["English"]["content_detail"] = "";
	$fieldLabelsanalysisMail_send_emails["English"]["shomei"] = "Shomei";
	$fieldToolTipsanalysisMail_send_emails["English"]["shomei"] = "";
	$placeHoldersanalysisMail_send_emails["English"]["shomei"] = "";
	$fieldLabelsanalysisMail_send_emails["English"]["alt_text"] = "Alt Text";
	$fieldToolTipsanalysisMail_send_emails["English"]["alt_text"] = "";
	$placeHoldersanalysisMail_send_emails["English"]["alt_text"] = "";
	$fieldLabelsanalysisMail_send_emails["English"]["send_group_id"] = "Send Group Id";
	$fieldToolTipsanalysisMail_send_emails["English"]["send_group_id"] = "";
	$placeHoldersanalysisMail_send_emails["English"]["send_group_id"] = "";
	$fieldLabelsanalysisMail_send_emails["English"]["updated_by"] = "Updated By";
	$fieldToolTipsanalysisMail_send_emails["English"]["updated_by"] = "";
	$placeHoldersanalysisMail_send_emails["English"]["updated_by"] = "";
	$fieldLabelsanalysisMail_send_emails["English"]["updated_at"] = "Updated At";
	$fieldToolTipsanalysisMail_send_emails["English"]["updated_at"] = "";
	$placeHoldersanalysisMail_send_emails["English"]["updated_at"] = "";
	$fieldLabelsanalysisMail_send_emails["English"]["created_by"] = "Created By";
	$fieldToolTipsanalysisMail_send_emails["English"]["created_by"] = "";
	$placeHoldersanalysisMail_send_emails["English"]["created_by"] = "";
	$fieldLabelsanalysisMail_send_emails["English"]["created_at"] = "Created At";
	$fieldToolTipsanalysisMail_send_emails["English"]["created_at"] = "";
	$placeHoldersanalysisMail_send_emails["English"]["created_at"] = "";
	$fieldLabelsanalysisMail_send_emails["English"]["is_send_check"] = "Is Send Check";
	$fieldToolTipsanalysisMail_send_emails["English"]["is_send_check"] = "";
	$placeHoldersanalysisMail_send_emails["English"]["is_send_check"] = "";
	$fieldLabelsanalysisMail_send_emails["English"]["auto_templete_name"] = "Auto Templete Name";
	$fieldToolTipsanalysisMail_send_emails["English"]["auto_templete_name"] = "";
	$placeHoldersanalysisMail_send_emails["English"]["auto_templete_name"] = "";
	$fieldLabelsanalysisMail_send_emails["English"]["success_count"] = "Success Count";
	$fieldToolTipsanalysisMail_send_emails["English"]["success_count"] = "";
	$placeHoldersanalysisMail_send_emails["English"]["success_count"] = "";
	$fieldLabelsanalysisMail_send_emails["English"]["error_count"] = "Error Count";
	$fieldToolTipsanalysisMail_send_emails["English"]["error_count"] = "";
	$placeHoldersanalysisMail_send_emails["English"]["error_count"] = "";
	if (count($fieldToolTipsanalysisMail_send_emails["English"]))
		$tdataanalysisMail_send_emails[".isUseToolTips"] = true;
}


	$tdataanalysisMail_send_emails[".NCSearch"] = true;



$tdataanalysisMail_send_emails[".shortTableName"] = "analysisMail_send_emails";
$tdataanalysisMail_send_emails[".nSecOptions"] = 0;
$tdataanalysisMail_send_emails[".recsPerRowPrint"] = 1;
$tdataanalysisMail_send_emails[".mainTableOwnerID"] = "";
$tdataanalysisMail_send_emails[".moveNext"] = 1;
$tdataanalysisMail_send_emails[".entityType"] = 0;

$tdataanalysisMail_send_emails[".strOriginalTableName"] = "analysisMail_send_emails";

	



$tdataanalysisMail_send_emails[".showAddInPopup"] = false;

$tdataanalysisMail_send_emails[".showEditInPopup"] = false;

$tdataanalysisMail_send_emails[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataanalysisMail_send_emails[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataanalysisMail_send_emails[".fieldsForRegister"] = array();

$tdataanalysisMail_send_emails[".listAjax"] = false;

	$tdataanalysisMail_send_emails[".audit"] = true;

	$tdataanalysisMail_send_emails[".locking"] = false;



$tdataanalysisMail_send_emails[".list"] = true;

$tdataanalysisMail_send_emails[".inlineEdit"] = true;


$tdataanalysisMail_send_emails[".reorderRecordsByHeader"] = true;



$tdataanalysisMail_send_emails[".inlineAdd"] = true;

$tdataanalysisMail_send_emails[".import"] = true;

$tdataanalysisMail_send_emails[".exportTo"] = true;


$tdataanalysisMail_send_emails[".delete"] = true;

$tdataanalysisMail_send_emails[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataanalysisMail_send_emails[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataanalysisMail_send_emails[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataanalysisMail_send_emails[".searchSaving"] = false;
//

$tdataanalysisMail_send_emails[".showSearchPanel"] = true;
		$tdataanalysisMail_send_emails[".flexibleSearch"] = true;

$tdataanalysisMail_send_emails[".isUseAjaxSuggest"] = true;

$tdataanalysisMail_send_emails[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataanalysisMail_send_emails[".ajaxCodeSnippetAdded"] = false;

$tdataanalysisMail_send_emails[".buttonsAdded"] = false;

$tdataanalysisMail_send_emails[".addPageEvents"] = false;

// use timepicker for search panel
$tdataanalysisMail_send_emails[".isUseTimeForSearch"] = false;




$tdataanalysisMail_send_emails[".detailsLinksOnList"] = "1";

$tdataanalysisMail_send_emails[".allSearchFields"] = array();
$tdataanalysisMail_send_emails[".filterFields"] = array();
$tdataanalysisMail_send_emails[".requiredSearchFields"] = array();

$tdataanalysisMail_send_emails[".allSearchFields"][] = "send_mail_id";
	$tdataanalysisMail_send_emails[".allSearchFields"][] = "status";
	$tdataanalysisMail_send_emails[".allSearchFields"][] = "send_at";
	$tdataanalysisMail_send_emails[".allSearchFields"][] = "subject";
	$tdataanalysisMail_send_emails[".allSearchFields"][] = "content_detail";
	$tdataanalysisMail_send_emails[".allSearchFields"][] = "shomei";
	$tdataanalysisMail_send_emails[".allSearchFields"][] = "alt_text";
	$tdataanalysisMail_send_emails[".allSearchFields"][] = "send_group_id";
	$tdataanalysisMail_send_emails[".allSearchFields"][] = "is_send_check";
	$tdataanalysisMail_send_emails[".allSearchFields"][] = "updated_by";
	$tdataanalysisMail_send_emails[".allSearchFields"][] = "updated_at";
	$tdataanalysisMail_send_emails[".allSearchFields"][] = "created_by";
	$tdataanalysisMail_send_emails[".allSearchFields"][] = "created_at";
	$tdataanalysisMail_send_emails[".allSearchFields"][] = "auto_templete_name";
	$tdataanalysisMail_send_emails[".allSearchFields"][] = "success_count";
	$tdataanalysisMail_send_emails[".allSearchFields"][] = "error_count";
	

$tdataanalysisMail_send_emails[".googleLikeFields"] = array();
$tdataanalysisMail_send_emails[".googleLikeFields"][] = "send_mail_id";
$tdataanalysisMail_send_emails[".googleLikeFields"][] = "status";
$tdataanalysisMail_send_emails[".googleLikeFields"][] = "send_at";
$tdataanalysisMail_send_emails[".googleLikeFields"][] = "subject";
$tdataanalysisMail_send_emails[".googleLikeFields"][] = "content_detail";
$tdataanalysisMail_send_emails[".googleLikeFields"][] = "shomei";
$tdataanalysisMail_send_emails[".googleLikeFields"][] = "alt_text";
$tdataanalysisMail_send_emails[".googleLikeFields"][] = "send_group_id";
$tdataanalysisMail_send_emails[".googleLikeFields"][] = "is_send_check";
$tdataanalysisMail_send_emails[".googleLikeFields"][] = "updated_by";
$tdataanalysisMail_send_emails[".googleLikeFields"][] = "updated_at";
$tdataanalysisMail_send_emails[".googleLikeFields"][] = "created_by";
$tdataanalysisMail_send_emails[".googleLikeFields"][] = "created_at";
$tdataanalysisMail_send_emails[".googleLikeFields"][] = "auto_templete_name";
$tdataanalysisMail_send_emails[".googleLikeFields"][] = "success_count";
$tdataanalysisMail_send_emails[".googleLikeFields"][] = "error_count";


$tdataanalysisMail_send_emails[".advSearchFields"] = array();
$tdataanalysisMail_send_emails[".advSearchFields"][] = "send_mail_id";
$tdataanalysisMail_send_emails[".advSearchFields"][] = "status";
$tdataanalysisMail_send_emails[".advSearchFields"][] = "send_at";
$tdataanalysisMail_send_emails[".advSearchFields"][] = "subject";
$tdataanalysisMail_send_emails[".advSearchFields"][] = "content_detail";
$tdataanalysisMail_send_emails[".advSearchFields"][] = "shomei";
$tdataanalysisMail_send_emails[".advSearchFields"][] = "alt_text";
$tdataanalysisMail_send_emails[".advSearchFields"][] = "send_group_id";
$tdataanalysisMail_send_emails[".advSearchFields"][] = "is_send_check";
$tdataanalysisMail_send_emails[".advSearchFields"][] = "updated_by";
$tdataanalysisMail_send_emails[".advSearchFields"][] = "updated_at";
$tdataanalysisMail_send_emails[".advSearchFields"][] = "created_by";
$tdataanalysisMail_send_emails[".advSearchFields"][] = "created_at";
$tdataanalysisMail_send_emails[".advSearchFields"][] = "auto_templete_name";
$tdataanalysisMail_send_emails[".advSearchFields"][] = "success_count";
$tdataanalysisMail_send_emails[".advSearchFields"][] = "error_count";

$tdataanalysisMail_send_emails[".tableType"] = "list";

$tdataanalysisMail_send_emails[".printerPageOrientation"] = 0;
$tdataanalysisMail_send_emails[".nPrinterPageScale"] = 100;

$tdataanalysisMail_send_emails[".nPrinterSplitRecords"] = 40;

$tdataanalysisMail_send_emails[".nPrinterPDFSplitRecords"] = 40;



$tdataanalysisMail_send_emails[".geocodingEnabled"] = false;





$tdataanalysisMail_send_emails[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataanalysisMail_send_emails[".pageSize"] = 20;

$tdataanalysisMail_send_emails[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `send_mail_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataanalysisMail_send_emails[".strOrderBy"] = $tstrOrderBy;

$tdataanalysisMail_send_emails[".orderindexes"] = array();
$tdataanalysisMail_send_emails[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`send_mail_id`");

$tdataanalysisMail_send_emails[".sqlHead"] = "SELECT `send_mail_id`,  `status`,  `send_at`,  `subject`,  `content_detail`,  `shomei`,  `alt_text`,  `send_group_id`,  `is_send_check`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`,  `auto_templete_name`,  `success_count`,  `error_count`";
$tdataanalysisMail_send_emails[".sqlFrom"] = "FROM `analysisMail_send_emails`";
$tdataanalysisMail_send_emails[".sqlWhereExpr"] = "";
$tdataanalysisMail_send_emails[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataanalysisMail_send_emails[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataanalysisMail_send_emails[".arrGroupsPerPage"] = $arrGPP;

$tdataanalysisMail_send_emails[".highlightSearchResults"] = true;

$tableKeysanalysisMail_send_emails = array();
$tableKeysanalysisMail_send_emails[] = "send_mail_id";
$tdataanalysisMail_send_emails[".Keys"] = $tableKeysanalysisMail_send_emails;

$tdataanalysisMail_send_emails[".listFields"] = array();
$tdataanalysisMail_send_emails[".listFields"][] = "send_mail_id";
$tdataanalysisMail_send_emails[".listFields"][] = "status";
$tdataanalysisMail_send_emails[".listFields"][] = "send_at";
$tdataanalysisMail_send_emails[".listFields"][] = "subject";
$tdataanalysisMail_send_emails[".listFields"][] = "content_detail";
$tdataanalysisMail_send_emails[".listFields"][] = "shomei";
$tdataanalysisMail_send_emails[".listFields"][] = "alt_text";
$tdataanalysisMail_send_emails[".listFields"][] = "send_group_id";
$tdataanalysisMail_send_emails[".listFields"][] = "is_send_check";
$tdataanalysisMail_send_emails[".listFields"][] = "updated_by";
$tdataanalysisMail_send_emails[".listFields"][] = "updated_at";
$tdataanalysisMail_send_emails[".listFields"][] = "created_by";
$tdataanalysisMail_send_emails[".listFields"][] = "created_at";
$tdataanalysisMail_send_emails[".listFields"][] = "auto_templete_name";
$tdataanalysisMail_send_emails[".listFields"][] = "success_count";
$tdataanalysisMail_send_emails[".listFields"][] = "error_count";

$tdataanalysisMail_send_emails[".hideMobileList"] = array();


$tdataanalysisMail_send_emails[".viewFields"] = array();

$tdataanalysisMail_send_emails[".addFields"] = array();

$tdataanalysisMail_send_emails[".masterListFields"] = array();
$tdataanalysisMail_send_emails[".masterListFields"][] = "send_mail_id";
$tdataanalysisMail_send_emails[".masterListFields"][] = "status";
$tdataanalysisMail_send_emails[".masterListFields"][] = "send_at";
$tdataanalysisMail_send_emails[".masterListFields"][] = "subject";
$tdataanalysisMail_send_emails[".masterListFields"][] = "content_detail";
$tdataanalysisMail_send_emails[".masterListFields"][] = "shomei";
$tdataanalysisMail_send_emails[".masterListFields"][] = "alt_text";
$tdataanalysisMail_send_emails[".masterListFields"][] = "send_group_id";
$tdataanalysisMail_send_emails[".masterListFields"][] = "is_send_check";
$tdataanalysisMail_send_emails[".masterListFields"][] = "updated_by";
$tdataanalysisMail_send_emails[".masterListFields"][] = "updated_at";
$tdataanalysisMail_send_emails[".masterListFields"][] = "created_by";
$tdataanalysisMail_send_emails[".masterListFields"][] = "created_at";
$tdataanalysisMail_send_emails[".masterListFields"][] = "auto_templete_name";
$tdataanalysisMail_send_emails[".masterListFields"][] = "success_count";
$tdataanalysisMail_send_emails[".masterListFields"][] = "error_count";

$tdataanalysisMail_send_emails[".inlineAddFields"] = array();
$tdataanalysisMail_send_emails[".inlineAddFields"][] = "status";
$tdataanalysisMail_send_emails[".inlineAddFields"][] = "send_at";
$tdataanalysisMail_send_emails[".inlineAddFields"][] = "subject";
$tdataanalysisMail_send_emails[".inlineAddFields"][] = "content_detail";
$tdataanalysisMail_send_emails[".inlineAddFields"][] = "shomei";
$tdataanalysisMail_send_emails[".inlineAddFields"][] = "alt_text";
$tdataanalysisMail_send_emails[".inlineAddFields"][] = "send_group_id";
$tdataanalysisMail_send_emails[".inlineAddFields"][] = "is_send_check";
$tdataanalysisMail_send_emails[".inlineAddFields"][] = "auto_templete_name";
$tdataanalysisMail_send_emails[".inlineAddFields"][] = "success_count";
$tdataanalysisMail_send_emails[".inlineAddFields"][] = "error_count";

$tdataanalysisMail_send_emails[".editFields"] = array();

$tdataanalysisMail_send_emails[".inlineEditFields"] = array();
$tdataanalysisMail_send_emails[".inlineEditFields"][] = "status";
$tdataanalysisMail_send_emails[".inlineEditFields"][] = "send_at";
$tdataanalysisMail_send_emails[".inlineEditFields"][] = "subject";
$tdataanalysisMail_send_emails[".inlineEditFields"][] = "content_detail";
$tdataanalysisMail_send_emails[".inlineEditFields"][] = "shomei";
$tdataanalysisMail_send_emails[".inlineEditFields"][] = "alt_text";
$tdataanalysisMail_send_emails[".inlineEditFields"][] = "send_group_id";
$tdataanalysisMail_send_emails[".inlineEditFields"][] = "is_send_check";
$tdataanalysisMail_send_emails[".inlineEditFields"][] = "auto_templete_name";
$tdataanalysisMail_send_emails[".inlineEditFields"][] = "success_count";
$tdataanalysisMail_send_emails[".inlineEditFields"][] = "error_count";

$tdataanalysisMail_send_emails[".updateSelectedFields"] = array();


$tdataanalysisMail_send_emails[".exportFields"] = array();
$tdataanalysisMail_send_emails[".exportFields"][] = "send_mail_id";
$tdataanalysisMail_send_emails[".exportFields"][] = "status";
$tdataanalysisMail_send_emails[".exportFields"][] = "send_at";
$tdataanalysisMail_send_emails[".exportFields"][] = "subject";
$tdataanalysisMail_send_emails[".exportFields"][] = "content_detail";
$tdataanalysisMail_send_emails[".exportFields"][] = "shomei";
$tdataanalysisMail_send_emails[".exportFields"][] = "alt_text";
$tdataanalysisMail_send_emails[".exportFields"][] = "send_group_id";
$tdataanalysisMail_send_emails[".exportFields"][] = "is_send_check";
$tdataanalysisMail_send_emails[".exportFields"][] = "updated_by";
$tdataanalysisMail_send_emails[".exportFields"][] = "updated_at";
$tdataanalysisMail_send_emails[".exportFields"][] = "created_by";
$tdataanalysisMail_send_emails[".exportFields"][] = "created_at";
$tdataanalysisMail_send_emails[".exportFields"][] = "auto_templete_name";
$tdataanalysisMail_send_emails[".exportFields"][] = "success_count";
$tdataanalysisMail_send_emails[".exportFields"][] = "error_count";

$tdataanalysisMail_send_emails[".importFields"] = array();
$tdataanalysisMail_send_emails[".importFields"][] = "send_mail_id";
$tdataanalysisMail_send_emails[".importFields"][] = "status";
$tdataanalysisMail_send_emails[".importFields"][] = "send_at";
$tdataanalysisMail_send_emails[".importFields"][] = "subject";
$tdataanalysisMail_send_emails[".importFields"][] = "content_detail";
$tdataanalysisMail_send_emails[".importFields"][] = "shomei";
$tdataanalysisMail_send_emails[".importFields"][] = "alt_text";
$tdataanalysisMail_send_emails[".importFields"][] = "send_group_id";
$tdataanalysisMail_send_emails[".importFields"][] = "is_send_check";
$tdataanalysisMail_send_emails[".importFields"][] = "auto_templete_name";
$tdataanalysisMail_send_emails[".importFields"][] = "success_count";
$tdataanalysisMail_send_emails[".importFields"][] = "error_count";

$tdataanalysisMail_send_emails[".printFields"] = array();

//	send_mail_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "send_mail_id";
	$fdata["GoodName"] = "send_mail_id";
	$fdata["ownerTable"] = "analysisMail_send_emails";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_emails","send_mail_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "send_mail_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`send_mail_id`";

	
	
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




	$tdataanalysisMail_send_emails["send_mail_id"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "analysisMail_send_emails";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_emails","status");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
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
	$edata["LookupTable"] = "mst_analysisMail_status";
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




	$tdataanalysisMail_send_emails["status"] = $fdata;
//	send_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "send_at";
	$fdata["GoodName"] = "send_at";
	$fdata["ownerTable"] = "analysisMail_send_emails";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_emails","send_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "send_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`send_at`";

	
	
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




	$tdataanalysisMail_send_emails["send_at"] = $fdata;
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "analysisMail_send_emails";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_emails","subject");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "subject";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`subject`";

	
	
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




	$tdataanalysisMail_send_emails["subject"] = $fdata;
//	content_detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "content_detail";
	$fdata["GoodName"] = "content_detail";
	$fdata["ownerTable"] = "analysisMail_send_emails";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_emails","content_detail");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "content_detail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`content_detail`";

	
	
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




	$tdataanalysisMail_send_emails["content_detail"] = $fdata;
//	shomei
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "shomei";
	$fdata["GoodName"] = "shomei";
	$fdata["ownerTable"] = "analysisMail_send_emails";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_emails","shomei");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shomei";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shomei`";

	
	
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




	$tdataanalysisMail_send_emails["shomei"] = $fdata;
//	alt_text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "alt_text";
	$fdata["GoodName"] = "alt_text";
	$fdata["ownerTable"] = "analysisMail_send_emails";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_emails","alt_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "alt_text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`alt_text`";

	
	
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




	$tdataanalysisMail_send_emails["alt_text"] = $fdata;
//	send_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "send_group_id";
	$fdata["GoodName"] = "send_group_id";
	$fdata["ownerTable"] = "analysisMail_send_emails";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_emails","send_group_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "send_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`send_group_id`";

	
	
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
	$edata["LookupTable"] = "mst_analysisMail_send_groups";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "send_group_id";
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




	$tdataanalysisMail_send_emails["send_group_id"] = $fdata;
//	is_send_check
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "is_send_check";
	$fdata["GoodName"] = "is_send_check";
	$fdata["ownerTable"] = "analysisMail_send_emails";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_emails","is_send_check");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_send_check";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_send_check`";

	
	
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




	$tdataanalysisMail_send_emails["is_send_check"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "analysisMail_send_emails";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_emails","updated_by");
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




	$tdataanalysisMail_send_emails["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "analysisMail_send_emails";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_emails","updated_at");
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




	$tdataanalysisMail_send_emails["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "analysisMail_send_emails";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_emails","created_by");
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




	$tdataanalysisMail_send_emails["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "analysisMail_send_emails";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_emails","created_at");
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




	$tdataanalysisMail_send_emails["created_at"] = $fdata;
//	auto_templete_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "auto_templete_name";
	$fdata["GoodName"] = "auto_templete_name";
	$fdata["ownerTable"] = "analysisMail_send_emails";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_emails","auto_templete_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "auto_templete_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`auto_templete_name`";

	
	
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




	$tdataanalysisMail_send_emails["auto_templete_name"] = $fdata;
//	success_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "success_count";
	$fdata["GoodName"] = "success_count";
	$fdata["ownerTable"] = "analysisMail_send_emails";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_emails","success_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "success_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`success_count`";

	
	
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




	$tdataanalysisMail_send_emails["success_count"] = $fdata;
//	error_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "error_count";
	$fdata["GoodName"] = "error_count";
	$fdata["ownerTable"] = "analysisMail_send_emails";
	$fdata["Label"] = GetFieldLabel("analysisMail_send_emails","error_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "error_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`error_count`";

	
	
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




	$tdataanalysisMail_send_emails["error_count"] = $fdata;


$tables_data["analysisMail_send_emails"]=&$tdataanalysisMail_send_emails;
$field_labels["analysisMail_send_emails"] = &$fieldLabelsanalysisMail_send_emails;
$fieldToolTips["analysisMail_send_emails"] = &$fieldToolTipsanalysisMail_send_emails;
$placeHolders["analysisMail_send_emails"] = &$placeHoldersanalysisMail_send_emails;
$page_titles["analysisMail_send_emails"] = &$pageTitlesanalysisMail_send_emails;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["analysisMail_send_emails"] = array();
//	analysisMail_send_logs
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="analysisMail_send_logs";
		$detailsParam["dOriginalTable"] = "analysisMail_send_logs";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "analysisMail_send_logs";
	$detailsParam["dCaptionTable"] = GetTableCaption("analysisMail_send_logs");
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
		
	$detailsTablesData["analysisMail_send_emails"][$dIndex] = $detailsParam;

	
		$detailsTablesData["analysisMail_send_emails"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["analysisMail_send_emails"][$dIndex]["masterKeys"][]="send_mail_id";

				$detailsTablesData["analysisMail_send_emails"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["analysisMail_send_emails"][$dIndex]["detailKeys"][]="send_mail_id";

// tables which are master tables for current table (detail)
$masterTablesData["analysisMail_send_emails"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_analysisMail_send_emails()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`send_mail_id`,  `status`,  `send_at`,  `subject`,  `content_detail`,  `shomei`,  `alt_text`,  `send_group_id`,  `is_send_check`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`,  `auto_templete_name`,  `success_count`,  `error_count`";
$proto0["m_strFrom"] = "FROM `analysisMail_send_emails`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `send_mail_id` DESC";
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
	"m_strName" => "send_mail_id",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_emails"
));

$proto6["m_sql"] = "`send_mail_id`";
$proto6["m_srcTableName"] = "analysisMail_send_emails";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_emails"
));

$proto8["m_sql"] = "`status`";
$proto8["m_srcTableName"] = "analysisMail_send_emails";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "send_at",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_emails"
));

$proto10["m_sql"] = "`send_at`";
$proto10["m_srcTableName"] = "analysisMail_send_emails";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_emails"
));

$proto12["m_sql"] = "`subject`";
$proto12["m_srcTableName"] = "analysisMail_send_emails";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "content_detail",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_emails"
));

$proto14["m_sql"] = "`content_detail`";
$proto14["m_srcTableName"] = "analysisMail_send_emails";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "shomei",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_emails"
));

$proto16["m_sql"] = "`shomei`";
$proto16["m_srcTableName"] = "analysisMail_send_emails";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "alt_text",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_emails"
));

$proto18["m_sql"] = "`alt_text`";
$proto18["m_srcTableName"] = "analysisMail_send_emails";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "send_group_id",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_emails"
));

$proto20["m_sql"] = "`send_group_id`";
$proto20["m_srcTableName"] = "analysisMail_send_emails";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "is_send_check",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_emails"
));

$proto22["m_sql"] = "`is_send_check`";
$proto22["m_srcTableName"] = "analysisMail_send_emails";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_emails"
));

$proto24["m_sql"] = "`updated_by`";
$proto24["m_srcTableName"] = "analysisMail_send_emails";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_emails"
));

$proto26["m_sql"] = "`updated_at`";
$proto26["m_srcTableName"] = "analysisMail_send_emails";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_emails"
));

$proto28["m_sql"] = "`created_by`";
$proto28["m_srcTableName"] = "analysisMail_send_emails";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_emails"
));

$proto30["m_sql"] = "`created_at`";
$proto30["m_srcTableName"] = "analysisMail_send_emails";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "auto_templete_name",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_emails"
));

$proto32["m_sql"] = "`auto_templete_name`";
$proto32["m_srcTableName"] = "analysisMail_send_emails";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "success_count",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_emails"
));

$proto34["m_sql"] = "`success_count`";
$proto34["m_srcTableName"] = "analysisMail_send_emails";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "error_count",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_emails"
));

$proto36["m_sql"] = "`error_count`";
$proto36["m_srcTableName"] = "analysisMail_send_emails";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "analysisMail_send_emails";
$proto39["m_srcTableName"] = "analysisMail_send_emails";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "send_mail_id";
$proto39["m_columns"][] = "status";
$proto39["m_columns"][] = "send_at";
$proto39["m_columns"][] = "subject";
$proto39["m_columns"][] = "content_detail";
$proto39["m_columns"][] = "shomei";
$proto39["m_columns"][] = "alt_text";
$proto39["m_columns"][] = "send_group_id";
$proto39["m_columns"][] = "is_send_check";
$proto39["m_columns"][] = "updated_by";
$proto39["m_columns"][] = "updated_at";
$proto39["m_columns"][] = "created_by";
$proto39["m_columns"][] = "created_at";
$proto39["m_columns"][] = "auto_templete_name";
$proto39["m_columns"][] = "success_count";
$proto39["m_columns"][] = "error_count";
$proto39["m_columns"][] = "archive_at";
$proto39["m_columns"][] = "archive_by";
$proto39["m_columns"][] = "send_by";
$proto39["m_columns"][] = "open_count";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "`analysisMail_send_emails`";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "analysisMail_send_emails";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "send_mail_id",
	"m_strTable" => "analysisMail_send_emails",
	"m_srcTableName" => "analysisMail_send_emails"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="analysisMail_send_emails";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_analysisMail_send_emails = createSqlQuery_analysisMail_send_emails();


	
		;

																

$tdataanalysisMail_send_emails[".sqlquery"] = $queryData_analysisMail_send_emails;

$tableEvents["analysisMail_send_emails"] = new eventsBase;
$tdataanalysisMail_send_emails[".hasEvents"] = false;

?>