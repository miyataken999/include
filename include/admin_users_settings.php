<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_users = array();
	$tdataadmin_users[".truncateText"] = true;
	$tdataadmin_users[".NumberOfChars"] = 80;
	$tdataadmin_users[".ShortName"] = "admin_users";
	$tdataadmin_users[".OwnerID"] = "";
	$tdataadmin_users[".OriginalTable"] = "users";

//	field labels
$fieldLabelsadmin_users = array();
$fieldToolTipsadmin_users = array();
$pageTitlesadmin_users = array();
$placeHoldersadmin_users = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsadmin_users["Japanese"] = array();
	$fieldToolTipsadmin_users["Japanese"] = array();
	$placeHoldersadmin_users["Japanese"] = array();
	$pageTitlesadmin_users["Japanese"] = array();
	$fieldLabelsadmin_users["Japanese"]["user_id"] = "ユーザーId";
	$fieldToolTipsadmin_users["Japanese"]["user_id"] = "";
	$placeHoldersadmin_users["Japanese"]["user_id"] = "";
	$fieldLabelsadmin_users["Japanese"]["user_login"] = "ログイン名";
	$fieldToolTipsadmin_users["Japanese"]["user_login"] = "";
	$placeHoldersadmin_users["Japanese"]["user_login"] = "";
	$fieldLabelsadmin_users["Japanese"]["user_password"] = "パスワード";
	$fieldToolTipsadmin_users["Japanese"]["user_password"] = "";
	$placeHoldersadmin_users["Japanese"]["user_password"] = "";
	$fieldLabelsadmin_users["Japanese"]["first_name"] = "名前";
	$fieldToolTipsadmin_users["Japanese"]["first_name"] = "";
	$placeHoldersadmin_users["Japanese"]["first_name"] = "";
	$fieldLabelsadmin_users["Japanese"]["last_name"] = "フリガナ";
	$fieldToolTipsadmin_users["Japanese"]["last_name"] = "";
	$placeHoldersadmin_users["Japanese"]["last_name"] = "";
	$fieldLabelsadmin_users["Japanese"]["title"] = "Title";
	$fieldToolTipsadmin_users["Japanese"]["title"] = "";
	$placeHoldersadmin_users["Japanese"]["title"] = "";
	$fieldLabelsadmin_users["Japanese"]["group_id"] = "Group Id";
	$fieldToolTipsadmin_users["Japanese"]["group_id"] = "";
	$placeHoldersadmin_users["Japanese"]["group_id"] = "";
	$fieldLabelsadmin_users["Japanese"]["phone_home"] = "Phone Home";
	$fieldToolTipsadmin_users["Japanese"]["phone_home"] = "";
	$placeHoldersadmin_users["Japanese"]["phone_home"] = "";
	$fieldLabelsadmin_users["Japanese"]["phone_work"] = "Phone Work";
	$fieldToolTipsadmin_users["Japanese"]["phone_work"] = "";
	$placeHoldersadmin_users["Japanese"]["phone_work"] = "";
	$fieldLabelsadmin_users["Japanese"]["phone_day"] = "Phone Day";
	$fieldToolTipsadmin_users["Japanese"]["phone_day"] = "";
	$placeHoldersadmin_users["Japanese"]["phone_day"] = "";
	$fieldLabelsadmin_users["Japanese"]["phone_cell"] = "Phone Cell";
	$fieldToolTipsadmin_users["Japanese"]["phone_cell"] = "";
	$placeHoldersadmin_users["Japanese"]["phone_cell"] = "";
	$fieldLabelsadmin_users["Japanese"]["phone_evening"] = "Phone Evening";
	$fieldToolTipsadmin_users["Japanese"]["phone_evening"] = "";
	$placeHoldersadmin_users["Japanese"]["phone_evening"] = "";
	$fieldLabelsadmin_users["Japanese"]["fax"] = "Fax";
	$fieldToolTipsadmin_users["Japanese"]["fax"] = "";
	$placeHoldersadmin_users["Japanese"]["fax"] = "";
	$fieldLabelsadmin_users["Japanese"]["email"] = "Email";
	$fieldToolTipsadmin_users["Japanese"]["email"] = "";
	$placeHoldersadmin_users["Japanese"]["email"] = "";
	$fieldLabelsadmin_users["Japanese"]["notes"] = "Notes";
	$fieldToolTipsadmin_users["Japanese"]["notes"] = "";
	$placeHoldersadmin_users["Japanese"]["notes"] = "";
	$fieldLabelsadmin_users["Japanese"]["card_number"] = "Card Number";
	$fieldToolTipsadmin_users["Japanese"]["card_number"] = "";
	$placeHoldersadmin_users["Japanese"]["card_number"] = "";
	$fieldLabelsadmin_users["Japanese"]["card_expire_date"] = "Card Expire Date";
	$fieldToolTipsadmin_users["Japanese"]["card_expire_date"] = "";
	$placeHoldersadmin_users["Japanese"]["card_expire_date"] = "";
	$fieldLabelsadmin_users["Japanese"]["country_id"] = "Country Id";
	$fieldToolTipsadmin_users["Japanese"]["country_id"] = "";
	$placeHoldersadmin_users["Japanese"]["country_id"] = "";
	$fieldLabelsadmin_users["Japanese"]["state_id"] = "State Id";
	$fieldToolTipsadmin_users["Japanese"]["state_id"] = "";
	$placeHoldersadmin_users["Japanese"]["state_id"] = "";
	$fieldLabelsadmin_users["Japanese"]["city"] = "City";
	$fieldToolTipsadmin_users["Japanese"]["city"] = "";
	$placeHoldersadmin_users["Japanese"]["city"] = "";
	$fieldLabelsadmin_users["Japanese"]["zip"] = "Zip";
	$fieldToolTipsadmin_users["Japanese"]["zip"] = "";
	$placeHoldersadmin_users["Japanese"]["zip"] = "";
	$fieldLabelsadmin_users["Japanese"]["address1"] = "Address1";
	$fieldToolTipsadmin_users["Japanese"]["address1"] = "";
	$placeHoldersadmin_users["Japanese"]["address1"] = "";
	$fieldLabelsadmin_users["Japanese"]["address2"] = "Address2";
	$fieldToolTipsadmin_users["Japanese"]["address2"] = "";
	$placeHoldersadmin_users["Japanese"]["address2"] = "";
	$fieldLabelsadmin_users["Japanese"]["address3"] = "Address3";
	$fieldToolTipsadmin_users["Japanese"]["address3"] = "";
	$placeHoldersadmin_users["Japanese"]["address3"] = "";
	$fieldLabelsadmin_users["Japanese"]["date_add"] = "Date Add";
	$fieldToolTipsadmin_users["Japanese"]["date_add"] = "";
	$placeHoldersadmin_users["Japanese"]["date_add"] = "";
	$fieldLabelsadmin_users["Japanese"]["date_last_login"] = "Date Last Login";
	$fieldToolTipsadmin_users["Japanese"]["date_last_login"] = "";
	$placeHoldersadmin_users["Japanese"]["date_last_login"] = "";
	$fieldLabelsadmin_users["Japanese"]["ip_add"] = "Ip Add";
	$fieldToolTipsadmin_users["Japanese"]["ip_add"] = "";
	$placeHoldersadmin_users["Japanese"]["ip_add"] = "";
	$fieldLabelsadmin_users["Japanese"]["ip_update"] = "Ip Update";
	$fieldToolTipsadmin_users["Japanese"]["ip_update"] = "";
	$placeHoldersadmin_users["Japanese"]["ip_update"] = "";
	$fieldLabelsadmin_users["Japanese"]["language_id"] = "Language Id";
	$fieldToolTipsadmin_users["Japanese"]["language_id"] = "";
	$placeHoldersadmin_users["Japanese"]["language_id"] = "";
	$fieldLabelsadmin_users["Japanese"]["image_url"] = "Image Url";
	$fieldToolTipsadmin_users["Japanese"]["image_url"] = "";
	$placeHoldersadmin_users["Japanese"]["image_url"] = "";
	$fieldLabelsadmin_users["Japanese"]["age_id"] = "Age Id";
	$fieldToolTipsadmin_users["Japanese"]["age_id"] = "";
	$placeHoldersadmin_users["Japanese"]["age_id"] = "";
	$fieldLabelsadmin_users["Japanese"]["gender_id"] = "Gender Id";
	$fieldToolTipsadmin_users["Japanese"]["gender_id"] = "";
	$placeHoldersadmin_users["Japanese"]["gender_id"] = "";
	$fieldLabelsadmin_users["Japanese"]["education_id"] = "Education Id";
	$fieldToolTipsadmin_users["Japanese"]["education_id"] = "";
	$placeHoldersadmin_users["Japanese"]["education_id"] = "";
	$fieldLabelsadmin_users["Japanese"]["income_id"] = "Income Id";
	$fieldToolTipsadmin_users["Japanese"]["income_id"] = "";
	$placeHoldersadmin_users["Japanese"]["income_id"] = "";
	$fieldLabelsadmin_users["Japanese"]["user_SSN"] = "User SSN";
	$fieldToolTipsadmin_users["Japanese"]["user_SSN"] = "";
	$placeHoldersadmin_users["Japanese"]["user_SSN"] = "";
	$fieldLabelsadmin_users["Japanese"]["total_purchase"] = "Total Purchase";
	$fieldToolTipsadmin_users["Japanese"]["total_purchase"] = "";
	$placeHoldersadmin_users["Japanese"]["total_purchase"] = "";
	$fieldLabelsadmin_users["Japanese"]["tatal_sales"] = "Tatal Sales";
	$fieldToolTipsadmin_users["Japanese"]["tatal_sales"] = "";
	$placeHoldersadmin_users["Japanese"]["tatal_sales"] = "";
	$fieldLabelsadmin_users["Japanese"]["template"] = "Template";
	$fieldToolTipsadmin_users["Japanese"]["template"] = "";
	$placeHoldersadmin_users["Japanese"]["template"] = "";
	$fieldLabelsadmin_users["Japanese"]["cw_task_id"] = "Cw Task Id";
	$fieldToolTipsadmin_users["Japanese"]["cw_task_id"] = "";
	$placeHoldersadmin_users["Japanese"]["cw_task_id"] = "";
	$fieldLabelsadmin_users["Japanese"]["cw_TO_id"] = "Cw TO Id";
	$fieldToolTipsadmin_users["Japanese"]["cw_TO_id"] = "";
	$placeHoldersadmin_users["Japanese"]["cw_TO_id"] = "";
	$fieldLabelsadmin_users["Japanese"]["english_name"] = "English Name";
	$fieldToolTipsadmin_users["Japanese"]["english_name"] = "";
	$placeHoldersadmin_users["Japanese"]["english_name"] = "";
	$fieldLabelsadmin_users["Japanese"]["dept_group_id"] = "部署";
	$fieldToolTipsadmin_users["Japanese"]["dept_group_id"] = "";
	$placeHoldersadmin_users["Japanese"]["dept_group_id"] = "";
	if (count($fieldToolTipsadmin_users["Japanese"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_users[""] = array();
	$fieldToolTipsadmin_users[""] = array();
	$placeHoldersadmin_users[""] = array();
	$pageTitlesadmin_users[""] = array();
	if (count($fieldToolTipsadmin_users[""]))
		$tdataadmin_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_users["English"] = array();
	$fieldToolTipsadmin_users["English"] = array();
	$placeHoldersadmin_users["English"] = array();
	$pageTitlesadmin_users["English"] = array();
	if (count($fieldToolTipsadmin_users["English"]))
		$tdataadmin_users[".isUseToolTips"] = true;
}


	$tdataadmin_users[".NCSearch"] = true;



$tdataadmin_users[".shortTableName"] = "admin_users";
$tdataadmin_users[".nSecOptions"] = 0;
$tdataadmin_users[".recsPerRowPrint"] = 1;
$tdataadmin_users[".mainTableOwnerID"] = "";
$tdataadmin_users[".moveNext"] = 1;
$tdataadmin_users[".entityType"] = 1;

$tdataadmin_users[".strOriginalTableName"] = "users";

	



$tdataadmin_users[".showAddInPopup"] = false;

$tdataadmin_users[".showEditInPopup"] = false;

$tdataadmin_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_users[".fieldsForRegister"] = array();

$tdataadmin_users[".listAjax"] = false;

	$tdataadmin_users[".audit"] = true;

	$tdataadmin_users[".locking"] = false;



$tdataadmin_users[".list"] = true;

$tdataadmin_users[".inlineEdit"] = true;


$tdataadmin_users[".reorderRecordsByHeader"] = true;
$tdataadmin_users[".createSortByDropdown"] = true;
$tdataadmin_users[".strSortControlSettingsJSON"] = "";



$tdataadmin_users[".inlineAdd"] = true;


$tdataadmin_users[".exportTo"] = true;

$tdataadmin_users[".printFriendly"] = true;

$tdataadmin_users[".delete"] = true;

$tdataadmin_users[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataadmin_users[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataadmin_users[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataadmin_users[".searchSaving"] = false;
//

$tdataadmin_users[".showSearchPanel"] = true;
		$tdataadmin_users[".flexibleSearch"] = true;

$tdataadmin_users[".isUseAjaxSuggest"] = true;

$tdataadmin_users[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataadmin_users[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_users[".buttonsAdded"] = false;

$tdataadmin_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_users[".isUseTimeForSearch"] = false;




$tdataadmin_users[".detailsLinksOnList"] = "1";

$tdataadmin_users[".allSearchFields"] = array();
$tdataadmin_users[".filterFields"] = array();
$tdataadmin_users[".requiredSearchFields"] = array();

$tdataadmin_users[".allSearchFields"][] = "user_id";
		$tdataadmin_users[".requiredSearchFields"][] = "user_id";
$tdataadmin_users[".allSearchFields"][] = "user_login";
		$tdataadmin_users[".requiredSearchFields"][] = "user_login";
$tdataadmin_users[".allSearchFields"][] = "dept_group_id";
	$tdataadmin_users[".allSearchFields"][] = "cw_task_id";
	$tdataadmin_users[".allSearchFields"][] = "cw_TO_id";
	$tdataadmin_users[".allSearchFields"][] = "english_name";
	

$tdataadmin_users[".googleLikeFields"] = array();
$tdataadmin_users[".googleLikeFields"][] = "english_name";
$tdataadmin_users[".googleLikeFields"][] = "cw_task_id";
$tdataadmin_users[".googleLikeFields"][] = "cw_TO_id";
$tdataadmin_users[".googleLikeFields"][] = "dept_group_id";

$tdataadmin_users[".panelSearchFields"] = array();
$tdataadmin_users[".searchPanelOptions"] = array();
$tdataadmin_users[".panelSearchFields"][] = "user_id";
	$tdataadmin_users[".panelSearchFields"][] = "user_login";
	
$tdataadmin_users[".advSearchFields"] = array();
$tdataadmin_users[".advSearchFields"][] = "user_id";
$tdataadmin_users[".advSearchFields"][] = "user_login";
$tdataadmin_users[".advSearchFields"][] = "dept_group_id";
$tdataadmin_users[".advSearchFields"][] = "cw_task_id";
$tdataadmin_users[".advSearchFields"][] = "cw_TO_id";
$tdataadmin_users[".advSearchFields"][] = "english_name";

$tdataadmin_users[".tableType"] = "list";

$tdataadmin_users[".printerPageOrientation"] = 0;
$tdataadmin_users[".nPrinterPageScale"] = 100;

$tdataadmin_users[".nPrinterSplitRecords"] = 40;

$tdataadmin_users[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_users[".geocodingEnabled"] = false;





$tdataadmin_users[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataadmin_users[".pageSize"] = 100;

$tdataadmin_users[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `income_id`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_users[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_users[".orderindexes"] = array();
$tdataadmin_users[".orderindexes"][] = array(35, (1 ? "ASC" : "DESC"), "`income_id`");

$tdataadmin_users[".sqlHead"] = "SELECT `user_id`,  `user_login`,  `user_password`,  `first_name`,  `last_name`,  `title`,  `group_id`,  `english_name`,  `phone_home`,  `phone_work`,  `phone_day`,  `phone_cell`,  `phone_evening`,  `fax`,  `email`,  `notes`,  `card_number`,  `card_expire_date`,  `country_id`,  `state_id`,  `city`,  `zip`,  `address1`,  `address2`,  `address3`,  `date_add`,  `date_last_login`,  `ip_add`,  `ip_update`,  `language_id`,  `image_url`,  `age_id`,  `gender_id`,  `education_id`,  `income_id`,  `user_SSN`,  `total_purchase`,  `tatal_sales`,  `template`,  `cw_task_id`,  `cw_TO_id`,  `dept_group_id`";
$tdataadmin_users[".sqlFrom"] = "FROM `users`";
$tdataadmin_users[".sqlWhereExpr"] = "";
$tdataadmin_users[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_users[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_users[".highlightSearchResults"] = true;

$tableKeysadmin_users = array();
$tableKeysadmin_users[] = "user_id";
$tdataadmin_users[".Keys"] = $tableKeysadmin_users;

$tdataadmin_users[".listFields"] = array();
$tdataadmin_users[".listFields"][] = "user_id";
$tdataadmin_users[".listFields"][] = "income_id";
$tdataadmin_users[".listFields"][] = "user_login";
$tdataadmin_users[".listFields"][] = "user_password";
$tdataadmin_users[".listFields"][] = "first_name";
$tdataadmin_users[".listFields"][] = "last_name";
$tdataadmin_users[".listFields"][] = "dept_group_id";
$tdataadmin_users[".listFields"][] = "cw_TO_id";
$tdataadmin_users[".listFields"][] = "cw_task_id";
$tdataadmin_users[".listFields"][] = "title";
$tdataadmin_users[".listFields"][] = "group_id";
$tdataadmin_users[".listFields"][] = "english_name";
$tdataadmin_users[".listFields"][] = "phone_home";
$tdataadmin_users[".listFields"][] = "phone_work";
$tdataadmin_users[".listFields"][] = "phone_day";
$tdataadmin_users[".listFields"][] = "phone_cell";
$tdataadmin_users[".listFields"][] = "phone_evening";
$tdataadmin_users[".listFields"][] = "fax";
$tdataadmin_users[".listFields"][] = "email";
$tdataadmin_users[".listFields"][] = "notes";
$tdataadmin_users[".listFields"][] = "card_number";
$tdataadmin_users[".listFields"][] = "card_expire_date";
$tdataadmin_users[".listFields"][] = "country_id";
$tdataadmin_users[".listFields"][] = "state_id";
$tdataadmin_users[".listFields"][] = "city";
$tdataadmin_users[".listFields"][] = "zip";
$tdataadmin_users[".listFields"][] = "address1";
$tdataadmin_users[".listFields"][] = "address2";
$tdataadmin_users[".listFields"][] = "address3";
$tdataadmin_users[".listFields"][] = "date_add";
$tdataadmin_users[".listFields"][] = "date_last_login";
$tdataadmin_users[".listFields"][] = "ip_add";
$tdataadmin_users[".listFields"][] = "ip_update";
$tdataadmin_users[".listFields"][] = "language_id";
$tdataadmin_users[".listFields"][] = "image_url";
$tdataadmin_users[".listFields"][] = "age_id";
$tdataadmin_users[".listFields"][] = "gender_id";
$tdataadmin_users[".listFields"][] = "education_id";
$tdataadmin_users[".listFields"][] = "user_SSN";
$tdataadmin_users[".listFields"][] = "total_purchase";
$tdataadmin_users[".listFields"][] = "tatal_sales";
$tdataadmin_users[".listFields"][] = "template";

$tdataadmin_users[".hideMobileList"] = array();


$tdataadmin_users[".viewFields"] = array();

$tdataadmin_users[".addFields"] = array();

$tdataadmin_users[".masterListFields"] = array();
$tdataadmin_users[".masterListFields"][] = "user_id";
$tdataadmin_users[".masterListFields"][] = "user_login";
$tdataadmin_users[".masterListFields"][] = "user_password";
$tdataadmin_users[".masterListFields"][] = "first_name";
$tdataadmin_users[".masterListFields"][] = "last_name";
$tdataadmin_users[".masterListFields"][] = "title";
$tdataadmin_users[".masterListFields"][] = "group_id";
$tdataadmin_users[".masterListFields"][] = "english_name";
$tdataadmin_users[".masterListFields"][] = "phone_home";
$tdataadmin_users[".masterListFields"][] = "phone_work";
$tdataadmin_users[".masterListFields"][] = "phone_day";
$tdataadmin_users[".masterListFields"][] = "phone_cell";
$tdataadmin_users[".masterListFields"][] = "phone_evening";
$tdataadmin_users[".masterListFields"][] = "fax";
$tdataadmin_users[".masterListFields"][] = "email";
$tdataadmin_users[".masterListFields"][] = "notes";
$tdataadmin_users[".masterListFields"][] = "card_number";
$tdataadmin_users[".masterListFields"][] = "card_expire_date";
$tdataadmin_users[".masterListFields"][] = "country_id";
$tdataadmin_users[".masterListFields"][] = "state_id";
$tdataadmin_users[".masterListFields"][] = "city";
$tdataadmin_users[".masterListFields"][] = "zip";
$tdataadmin_users[".masterListFields"][] = "address1";
$tdataadmin_users[".masterListFields"][] = "address2";
$tdataadmin_users[".masterListFields"][] = "address3";
$tdataadmin_users[".masterListFields"][] = "date_add";
$tdataadmin_users[".masterListFields"][] = "date_last_login";
$tdataadmin_users[".masterListFields"][] = "ip_add";
$tdataadmin_users[".masterListFields"][] = "ip_update";
$tdataadmin_users[".masterListFields"][] = "language_id";
$tdataadmin_users[".masterListFields"][] = "image_url";
$tdataadmin_users[".masterListFields"][] = "age_id";
$tdataadmin_users[".masterListFields"][] = "gender_id";
$tdataadmin_users[".masterListFields"][] = "education_id";
$tdataadmin_users[".masterListFields"][] = "income_id";
$tdataadmin_users[".masterListFields"][] = "user_SSN";
$tdataadmin_users[".masterListFields"][] = "total_purchase";
$tdataadmin_users[".masterListFields"][] = "tatal_sales";
$tdataadmin_users[".masterListFields"][] = "template";
$tdataadmin_users[".masterListFields"][] = "cw_task_id";
$tdataadmin_users[".masterListFields"][] = "cw_TO_id";
$tdataadmin_users[".masterListFields"][] = "dept_group_id";

$tdataadmin_users[".inlineAddFields"] = array();
$tdataadmin_users[".inlineAddFields"][] = "income_id";
$tdataadmin_users[".inlineAddFields"][] = "user_login";
$tdataadmin_users[".inlineAddFields"][] = "user_password";
$tdataadmin_users[".inlineAddFields"][] = "first_name";
$tdataadmin_users[".inlineAddFields"][] = "last_name";
$tdataadmin_users[".inlineAddFields"][] = "dept_group_id";
$tdataadmin_users[".inlineAddFields"][] = "cw_TO_id";
$tdataadmin_users[".inlineAddFields"][] = "cw_task_id";
$tdataadmin_users[".inlineAddFields"][] = "title";
$tdataadmin_users[".inlineAddFields"][] = "group_id";
$tdataadmin_users[".inlineAddFields"][] = "english_name";
$tdataadmin_users[".inlineAddFields"][] = "phone_home";
$tdataadmin_users[".inlineAddFields"][] = "phone_work";
$tdataadmin_users[".inlineAddFields"][] = "phone_day";
$tdataadmin_users[".inlineAddFields"][] = "phone_cell";
$tdataadmin_users[".inlineAddFields"][] = "phone_evening";
$tdataadmin_users[".inlineAddFields"][] = "fax";
$tdataadmin_users[".inlineAddFields"][] = "email";
$tdataadmin_users[".inlineAddFields"][] = "notes";
$tdataadmin_users[".inlineAddFields"][] = "card_number";
$tdataadmin_users[".inlineAddFields"][] = "card_expire_date";
$tdataadmin_users[".inlineAddFields"][] = "country_id";
$tdataadmin_users[".inlineAddFields"][] = "state_id";
$tdataadmin_users[".inlineAddFields"][] = "city";
$tdataadmin_users[".inlineAddFields"][] = "zip";
$tdataadmin_users[".inlineAddFields"][] = "address1";
$tdataadmin_users[".inlineAddFields"][] = "address2";
$tdataadmin_users[".inlineAddFields"][] = "address3";
$tdataadmin_users[".inlineAddFields"][] = "date_add";
$tdataadmin_users[".inlineAddFields"][] = "date_last_login";
$tdataadmin_users[".inlineAddFields"][] = "ip_add";
$tdataadmin_users[".inlineAddFields"][] = "ip_update";
$tdataadmin_users[".inlineAddFields"][] = "language_id";
$tdataadmin_users[".inlineAddFields"][] = "image_url";
$tdataadmin_users[".inlineAddFields"][] = "age_id";
$tdataadmin_users[".inlineAddFields"][] = "gender_id";
$tdataadmin_users[".inlineAddFields"][] = "education_id";
$tdataadmin_users[".inlineAddFields"][] = "user_SSN";
$tdataadmin_users[".inlineAddFields"][] = "total_purchase";
$tdataadmin_users[".inlineAddFields"][] = "tatal_sales";
$tdataadmin_users[".inlineAddFields"][] = "template";

$tdataadmin_users[".editFields"] = array();

$tdataadmin_users[".inlineEditFields"] = array();
$tdataadmin_users[".inlineEditFields"][] = "income_id";
$tdataadmin_users[".inlineEditFields"][] = "user_login";
$tdataadmin_users[".inlineEditFields"][] = "user_password";
$tdataadmin_users[".inlineEditFields"][] = "first_name";
$tdataadmin_users[".inlineEditFields"][] = "last_name";
$tdataadmin_users[".inlineEditFields"][] = "dept_group_id";
$tdataadmin_users[".inlineEditFields"][] = "cw_TO_id";
$tdataadmin_users[".inlineEditFields"][] = "cw_task_id";
$tdataadmin_users[".inlineEditFields"][] = "title";
$tdataadmin_users[".inlineEditFields"][] = "group_id";
$tdataadmin_users[".inlineEditFields"][] = "english_name";
$tdataadmin_users[".inlineEditFields"][] = "phone_home";
$tdataadmin_users[".inlineEditFields"][] = "phone_work";
$tdataadmin_users[".inlineEditFields"][] = "phone_day";
$tdataadmin_users[".inlineEditFields"][] = "phone_cell";
$tdataadmin_users[".inlineEditFields"][] = "phone_evening";
$tdataadmin_users[".inlineEditFields"][] = "fax";
$tdataadmin_users[".inlineEditFields"][] = "email";
$tdataadmin_users[".inlineEditFields"][] = "notes";
$tdataadmin_users[".inlineEditFields"][] = "card_number";
$tdataadmin_users[".inlineEditFields"][] = "card_expire_date";
$tdataadmin_users[".inlineEditFields"][] = "country_id";
$tdataadmin_users[".inlineEditFields"][] = "state_id";
$tdataadmin_users[".inlineEditFields"][] = "city";
$tdataadmin_users[".inlineEditFields"][] = "zip";
$tdataadmin_users[".inlineEditFields"][] = "address1";
$tdataadmin_users[".inlineEditFields"][] = "address2";
$tdataadmin_users[".inlineEditFields"][] = "address3";
$tdataadmin_users[".inlineEditFields"][] = "date_add";
$tdataadmin_users[".inlineEditFields"][] = "date_last_login";
$tdataadmin_users[".inlineEditFields"][] = "ip_add";
$tdataadmin_users[".inlineEditFields"][] = "ip_update";
$tdataadmin_users[".inlineEditFields"][] = "language_id";
$tdataadmin_users[".inlineEditFields"][] = "image_url";
$tdataadmin_users[".inlineEditFields"][] = "age_id";
$tdataadmin_users[".inlineEditFields"][] = "gender_id";
$tdataadmin_users[".inlineEditFields"][] = "education_id";
$tdataadmin_users[".inlineEditFields"][] = "user_SSN";
$tdataadmin_users[".inlineEditFields"][] = "total_purchase";
$tdataadmin_users[".inlineEditFields"][] = "tatal_sales";
$tdataadmin_users[".inlineEditFields"][] = "template";

$tdataadmin_users[".updateSelectedFields"] = array();


$tdataadmin_users[".exportFields"] = array();
$tdataadmin_users[".exportFields"][] = "dept_group_id";
$tdataadmin_users[".exportFields"][] = "user_id";
$tdataadmin_users[".exportFields"][] = "user_login";
$tdataadmin_users[".exportFields"][] = "user_password";
$tdataadmin_users[".exportFields"][] = "first_name";
$tdataadmin_users[".exportFields"][] = "last_name";
$tdataadmin_users[".exportFields"][] = "title";
$tdataadmin_users[".exportFields"][] = "group_id";
$tdataadmin_users[".exportFields"][] = "phone_home";
$tdataadmin_users[".exportFields"][] = "phone_work";
$tdataadmin_users[".exportFields"][] = "phone_day";
$tdataadmin_users[".exportFields"][] = "phone_cell";
$tdataadmin_users[".exportFields"][] = "phone_evening";
$tdataadmin_users[".exportFields"][] = "fax";
$tdataadmin_users[".exportFields"][] = "email";
$tdataadmin_users[".exportFields"][] = "notes";
$tdataadmin_users[".exportFields"][] = "card_number";
$tdataadmin_users[".exportFields"][] = "card_expire_date";
$tdataadmin_users[".exportFields"][] = "country_id";
$tdataadmin_users[".exportFields"][] = "state_id";
$tdataadmin_users[".exportFields"][] = "city";
$tdataadmin_users[".exportFields"][] = "zip";
$tdataadmin_users[".exportFields"][] = "address1";
$tdataadmin_users[".exportFields"][] = "address2";
$tdataadmin_users[".exportFields"][] = "address3";
$tdataadmin_users[".exportFields"][] = "date_add";
$tdataadmin_users[".exportFields"][] = "date_last_login";
$tdataadmin_users[".exportFields"][] = "ip_add";
$tdataadmin_users[".exportFields"][] = "ip_update";
$tdataadmin_users[".exportFields"][] = "language_id";
$tdataadmin_users[".exportFields"][] = "image_url";
$tdataadmin_users[".exportFields"][] = "age_id";
$tdataadmin_users[".exportFields"][] = "gender_id";
$tdataadmin_users[".exportFields"][] = "education_id";
$tdataadmin_users[".exportFields"][] = "income_id";
$tdataadmin_users[".exportFields"][] = "user_SSN";
$tdataadmin_users[".exportFields"][] = "total_purchase";
$tdataadmin_users[".exportFields"][] = "tatal_sales";
$tdataadmin_users[".exportFields"][] = "template";
$tdataadmin_users[".exportFields"][] = "cw_task_id";
$tdataadmin_users[".exportFields"][] = "cw_TO_id";
$tdataadmin_users[".exportFields"][] = "english_name";

$tdataadmin_users[".importFields"] = array();

$tdataadmin_users[".printFields"] = array();
$tdataadmin_users[".printFields"][] = "dept_group_id";
$tdataadmin_users[".printFields"][] = "user_id";
$tdataadmin_users[".printFields"][] = "user_login";
$tdataadmin_users[".printFields"][] = "user_password";
$tdataadmin_users[".printFields"][] = "first_name";
$tdataadmin_users[".printFields"][] = "last_name";
$tdataadmin_users[".printFields"][] = "title";
$tdataadmin_users[".printFields"][] = "group_id";
$tdataadmin_users[".printFields"][] = "phone_home";
$tdataadmin_users[".printFields"][] = "phone_work";
$tdataadmin_users[".printFields"][] = "phone_day";
$tdataadmin_users[".printFields"][] = "phone_cell";
$tdataadmin_users[".printFields"][] = "phone_evening";
$tdataadmin_users[".printFields"][] = "fax";
$tdataadmin_users[".printFields"][] = "email";
$tdataadmin_users[".printFields"][] = "notes";
$tdataadmin_users[".printFields"][] = "card_number";
$tdataadmin_users[".printFields"][] = "card_expire_date";
$tdataadmin_users[".printFields"][] = "country_id";
$tdataadmin_users[".printFields"][] = "state_id";
$tdataadmin_users[".printFields"][] = "city";
$tdataadmin_users[".printFields"][] = "zip";
$tdataadmin_users[".printFields"][] = "address1";
$tdataadmin_users[".printFields"][] = "address2";
$tdataadmin_users[".printFields"][] = "address3";
$tdataadmin_users[".printFields"][] = "date_add";
$tdataadmin_users[".printFields"][] = "date_last_login";
$tdataadmin_users[".printFields"][] = "ip_add";
$tdataadmin_users[".printFields"][] = "ip_update";
$tdataadmin_users[".printFields"][] = "language_id";
$tdataadmin_users[".printFields"][] = "image_url";
$tdataadmin_users[".printFields"][] = "age_id";
$tdataadmin_users[".printFields"][] = "gender_id";
$tdataadmin_users[".printFields"][] = "education_id";
$tdataadmin_users[".printFields"][] = "income_id";
$tdataadmin_users[".printFields"][] = "user_SSN";
$tdataadmin_users[".printFields"][] = "total_purchase";
$tdataadmin_users[".printFields"][] = "tatal_sales";
$tdataadmin_users[".printFields"][] = "template";
$tdataadmin_users[".printFields"][] = "cw_task_id";
$tdataadmin_users[".printFields"][] = "cw_TO_id";
$tdataadmin_users[".printFields"][] = "english_name";

//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","user_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_id`";

	
	
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




	$tdataadmin_users["user_id"] = $fdata;
//	user_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_login";
	$fdata["GoodName"] = "user_login";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","user_login");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_login";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_login`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataadmin_users["user_login"] = $fdata;
//	user_password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "user_password";
	$fdata["GoodName"] = "user_password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","user_password");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_password`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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








	$tdataadmin_users["user_password"] = $fdata;
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","first_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "first_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`first_name`";

	
	
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








	$tdataadmin_users["first_name"] = $fdata;
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","last_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "last_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`last_name`";

	
	
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








	$tdataadmin_users["last_name"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

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








	$tdataadmin_users["title"] = $fdata;
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","group_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group_id`";

	
	
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








	$tdataadmin_users["group_id"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","english_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "english_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`english_name`";

	
	
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




	$tdataadmin_users["english_name"] = $fdata;
//	phone_home
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "phone_home";
	$fdata["GoodName"] = "phone_home";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","phone_home");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "phone_home";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`phone_home`";

	
	
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








	$tdataadmin_users["phone_home"] = $fdata;
//	phone_work
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "phone_work";
	$fdata["GoodName"] = "phone_work";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","phone_work");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "phone_work";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`phone_work`";

	
	
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








	$tdataadmin_users["phone_work"] = $fdata;
//	phone_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "phone_day";
	$fdata["GoodName"] = "phone_day";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","phone_day");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "phone_day";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`phone_day`";

	
	
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








	$tdataadmin_users["phone_day"] = $fdata;
//	phone_cell
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "phone_cell";
	$fdata["GoodName"] = "phone_cell";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","phone_cell");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "phone_cell";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`phone_cell`";

	
	
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








	$tdataadmin_users["phone_cell"] = $fdata;
//	phone_evening
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "phone_evening";
	$fdata["GoodName"] = "phone_evening";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","phone_evening");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "phone_evening";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`phone_evening`";

	
	
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








	$tdataadmin_users["phone_evening"] = $fdata;
//	fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "fax";
	$fdata["GoodName"] = "fax";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","fax");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`fax`";

	
	
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








	$tdataadmin_users["fax"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

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








	$tdataadmin_users["email"] = $fdata;
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","notes");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "notes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`notes`";

	
	
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








	$tdataadmin_users["notes"] = $fdata;
//	card_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "card_number";
	$fdata["GoodName"] = "card_number";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","card_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "card_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`card_number`";

	
	
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








	$tdataadmin_users["card_number"] = $fdata;
//	card_expire_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "card_expire_date";
	$fdata["GoodName"] = "card_expire_date";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","card_expire_date");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "card_expire_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`card_expire_date`";

	
	
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








	$tdataadmin_users["card_expire_date"] = $fdata;
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","country_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "country_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`country_id`";

	
	
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








	$tdataadmin_users["country_id"] = $fdata;
//	state_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "state_id";
	$fdata["GoodName"] = "state_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","state_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "state_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`state_id`";

	
	
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








	$tdataadmin_users["state_id"] = $fdata;
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","city");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "city";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`city`";

	
	
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








	$tdataadmin_users["city"] = $fdata;
//	zip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "zip";
	$fdata["GoodName"] = "zip";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","zip");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`zip`";

	
	
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








	$tdataadmin_users["zip"] = $fdata;
//	address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "address1";
	$fdata["GoodName"] = "address1";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","address1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`address1`";

	
	
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








	$tdataadmin_users["address1"] = $fdata;
//	address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "address2";
	$fdata["GoodName"] = "address2";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","address2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`address2`";

	
	
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








	$tdataadmin_users["address2"] = $fdata;
//	address3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "address3";
	$fdata["GoodName"] = "address3";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","address3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`address3`";

	
	
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








	$tdataadmin_users["address3"] = $fdata;
//	date_add
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "date_add";
	$fdata["GoodName"] = "date_add";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","date_add");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date_add";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date_add`";

	
	
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








	$tdataadmin_users["date_add"] = $fdata;
//	date_last_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "date_last_login";
	$fdata["GoodName"] = "date_last_login";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","date_last_login");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date_last_login";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date_last_login`";

	
	
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








	$tdataadmin_users["date_last_login"] = $fdata;
//	ip_add
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ip_add";
	$fdata["GoodName"] = "ip_add";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","ip_add");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ip_add";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ip_add`";

	
	
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








	$tdataadmin_users["ip_add"] = $fdata;
//	ip_update
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "ip_update";
	$fdata["GoodName"] = "ip_update";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","ip_update");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ip_update";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ip_update`";

	
	
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








	$tdataadmin_users["ip_update"] = $fdata;
//	language_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "language_id";
	$fdata["GoodName"] = "language_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","language_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "language_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`language_id`";

	
	
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








	$tdataadmin_users["language_id"] = $fdata;
//	image_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "image_url";
	$fdata["GoodName"] = "image_url";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","image_url");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "image_url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`image_url`";

	
	
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








	$tdataadmin_users["image_url"] = $fdata;
//	age_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "age_id";
	$fdata["GoodName"] = "age_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","age_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "age_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`age_id`";

	
	
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








	$tdataadmin_users["age_id"] = $fdata;
//	gender_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "gender_id";
	$fdata["GoodName"] = "gender_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","gender_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gender_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gender_id`";

	
	
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








	$tdataadmin_users["gender_id"] = $fdata;
//	education_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "education_id";
	$fdata["GoodName"] = "education_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","education_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "education_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`education_id`";

	
	
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








	$tdataadmin_users["education_id"] = $fdata;
//	income_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "income_id";
	$fdata["GoodName"] = "income_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","income_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "income_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`income_id`";

	
	
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








	$tdataadmin_users["income_id"] = $fdata;
//	user_SSN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "user_SSN";
	$fdata["GoodName"] = "user_SSN";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","user_SSN");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_SSN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_SSN`";

	
	
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








	$tdataadmin_users["user_SSN"] = $fdata;
//	total_purchase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "total_purchase";
	$fdata["GoodName"] = "total_purchase";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","total_purchase");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_purchase";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_purchase`";

	
	
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








	$tdataadmin_users["total_purchase"] = $fdata;
//	tatal_sales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "tatal_sales";
	$fdata["GoodName"] = "tatal_sales";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","tatal_sales");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tatal_sales";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tatal_sales`";

	
	
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








	$tdataadmin_users["tatal_sales"] = $fdata;
//	template
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "template";
	$fdata["GoodName"] = "template";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","template");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "template";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`template`";

	
	
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








	$tdataadmin_users["template"] = $fdata;
//	cw_task_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "cw_task_id";
	$fdata["GoodName"] = "cw_task_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","cw_task_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cw_task_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cw_task_id`";

	
	
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




	$tdataadmin_users["cw_task_id"] = $fdata;
//	cw_TO_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "cw_TO_id";
	$fdata["GoodName"] = "cw_TO_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","cw_TO_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cw_TO_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cw_TO_id`";

	
	
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




	$tdataadmin_users["cw_TO_id"] = $fdata;
//	dept_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "dept_group_id";
	$fdata["GoodName"] = "dept_group_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_users","dept_group_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dept_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dept_group_id`";

	
	
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




	$tdataadmin_users["dept_group_id"] = $fdata;


$tables_data["admin_users"]=&$tdataadmin_users;
$field_labels["admin_users"] = &$fieldLabelsadmin_users;
$fieldToolTips["admin_users"] = &$fieldToolTipsadmin_users;
$placeHolders["admin_users"] = &$placeHoldersadmin_users;
$page_titles["admin_users"] = &$pageTitlesadmin_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_users"] = array();
//	users_group_memberships
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="users_group_memberships";
		$detailsParam["dOriginalTable"] = "users_group_memberships";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "users_group_memberships";
	$detailsParam["dCaptionTable"] = GetTableCaption("users_group_memberships");
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
		
	$detailsTablesData["admin_users"][$dIndex] = $detailsParam;

	
		$detailsTablesData["admin_users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["admin_users"][$dIndex]["masterKeys"][]="user_id";

				$detailsTablesData["admin_users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["admin_users"][$dIndex]["detailKeys"][]="user_id";

// tables which are master tables for current table (detail)
$masterTablesData["admin_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`user_id`,  `user_login`,  `user_password`,  `first_name`,  `last_name`,  `title`,  `group_id`,  `english_name`,  `phone_home`,  `phone_work`,  `phone_day`,  `phone_cell`,  `phone_evening`,  `fax`,  `email`,  `notes`,  `card_number`,  `card_expire_date`,  `country_id`,  `state_id`,  `city`,  `zip`,  `address1`,  `address2`,  `address3`,  `date_add`,  `date_last_login`,  `ip_add`,  `ip_update`,  `language_id`,  `image_url`,  `age_id`,  `gender_id`,  `education_id`,  `income_id`,  `user_SSN`,  `total_purchase`,  `tatal_sales`,  `template`,  `cw_task_id`,  `cw_TO_id`,  `dept_group_id`";
$proto0["m_strFrom"] = "FROM `users`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `income_id`";
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
	"m_strName" => "user_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto6["m_sql"] = "`user_id`";
$proto6["m_srcTableName"] = "admin_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_login",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto8["m_sql"] = "`user_login`";
$proto8["m_srcTableName"] = "admin_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "user_password",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto10["m_sql"] = "`user_password`";
$proto10["m_srcTableName"] = "admin_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto12["m_sql"] = "`first_name`";
$proto12["m_srcTableName"] = "admin_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto14["m_sql"] = "`last_name`";
$proto14["m_srcTableName"] = "admin_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto16["m_sql"] = "`title`";
$proto16["m_srcTableName"] = "admin_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto18["m_sql"] = "`group_id`";
$proto18["m_srcTableName"] = "admin_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto20["m_sql"] = "`english_name`";
$proto20["m_srcTableName"] = "admin_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_home",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto22["m_sql"] = "`phone_home`";
$proto22["m_srcTableName"] = "admin_users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_work",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto24["m_sql"] = "`phone_work`";
$proto24["m_srcTableName"] = "admin_users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_day",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto26["m_sql"] = "`phone_day`";
$proto26["m_srcTableName"] = "admin_users";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_cell",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto28["m_sql"] = "`phone_cell`";
$proto28["m_srcTableName"] = "admin_users";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_evening",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto30["m_sql"] = "`phone_evening`";
$proto30["m_srcTableName"] = "admin_users";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "fax",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto32["m_sql"] = "`fax`";
$proto32["m_srcTableName"] = "admin_users";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto34["m_sql"] = "`email`";
$proto34["m_srcTableName"] = "admin_users";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto36["m_sql"] = "`notes`";
$proto36["m_srcTableName"] = "admin_users";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "card_number",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto38["m_sql"] = "`card_number`";
$proto38["m_srcTableName"] = "admin_users";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "card_expire_date",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto40["m_sql"] = "`card_expire_date`";
$proto40["m_srcTableName"] = "admin_users";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto42["m_sql"] = "`country_id`";
$proto42["m_srcTableName"] = "admin_users";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "state_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto44["m_sql"] = "`state_id`";
$proto44["m_srcTableName"] = "admin_users";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto46["m_sql"] = "`city`";
$proto46["m_srcTableName"] = "admin_users";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "zip",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto48["m_sql"] = "`zip`";
$proto48["m_srcTableName"] = "admin_users";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "address1",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto50["m_sql"] = "`address1`";
$proto50["m_srcTableName"] = "admin_users";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "address2",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto52["m_sql"] = "`address2`";
$proto52["m_srcTableName"] = "admin_users";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "address3",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto54["m_sql"] = "`address3`";
$proto54["m_srcTableName"] = "admin_users";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "date_add",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto56["m_sql"] = "`date_add`";
$proto56["m_srcTableName"] = "admin_users";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "date_last_login",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto58["m_sql"] = "`date_last_login`";
$proto58["m_srcTableName"] = "admin_users";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "ip_add",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto60["m_sql"] = "`ip_add`";
$proto60["m_srcTableName"] = "admin_users";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "ip_update",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto62["m_sql"] = "`ip_update`";
$proto62["m_srcTableName"] = "admin_users";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "language_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto64["m_sql"] = "`language_id`";
$proto64["m_srcTableName"] = "admin_users";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "image_url",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto66["m_sql"] = "`image_url`";
$proto66["m_srcTableName"] = "admin_users";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "age_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto68["m_sql"] = "`age_id`";
$proto68["m_srcTableName"] = "admin_users";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "gender_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto70["m_sql"] = "`gender_id`";
$proto70["m_srcTableName"] = "admin_users";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "education_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto72["m_sql"] = "`education_id`";
$proto72["m_srcTableName"] = "admin_users";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "income_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto74["m_sql"] = "`income_id`";
$proto74["m_srcTableName"] = "admin_users";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "user_SSN",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto76["m_sql"] = "`user_SSN`";
$proto76["m_srcTableName"] = "admin_users";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "total_purchase",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto78["m_sql"] = "`total_purchase`";
$proto78["m_srcTableName"] = "admin_users";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "tatal_sales",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto80["m_sql"] = "`tatal_sales`";
$proto80["m_srcTableName"] = "admin_users";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "template",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto82["m_sql"] = "`template`";
$proto82["m_srcTableName"] = "admin_users";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "cw_task_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto84["m_sql"] = "`cw_task_id`";
$proto84["m_srcTableName"] = "admin_users";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "cw_TO_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto86["m_sql"] = "`cw_TO_id`";
$proto86["m_srcTableName"] = "admin_users";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "dept_group_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto88["m_sql"] = "`dept_group_id`";
$proto88["m_srcTableName"] = "admin_users";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto90=array();
$proto90["m_link"] = "SQLL_MAIN";
			$proto91=array();
$proto91["m_strName"] = "users";
$proto91["m_srcTableName"] = "admin_users";
$proto91["m_columns"] = array();
$proto91["m_columns"][] = "user_id";
$proto91["m_columns"][] = "user_login";
$proto91["m_columns"][] = "user_password";
$proto91["m_columns"][] = "first_name";
$proto91["m_columns"][] = "last_name";
$proto91["m_columns"][] = "title";
$proto91["m_columns"][] = "group_id";
$proto91["m_columns"][] = "english_name";
$proto91["m_columns"][] = "phone_home";
$proto91["m_columns"][] = "phone_work";
$proto91["m_columns"][] = "phone_day";
$proto91["m_columns"][] = "phone_cell";
$proto91["m_columns"][] = "phone_evening";
$proto91["m_columns"][] = "fax";
$proto91["m_columns"][] = "email";
$proto91["m_columns"][] = "notes";
$proto91["m_columns"][] = "card_number";
$proto91["m_columns"][] = "card_expire_date";
$proto91["m_columns"][] = "country_id";
$proto91["m_columns"][] = "state_id";
$proto91["m_columns"][] = "city";
$proto91["m_columns"][] = "zip";
$proto91["m_columns"][] = "address1";
$proto91["m_columns"][] = "address2";
$proto91["m_columns"][] = "address3";
$proto91["m_columns"][] = "date_add";
$proto91["m_columns"][] = "date_last_login";
$proto91["m_columns"][] = "ip_add";
$proto91["m_columns"][] = "ip_update";
$proto91["m_columns"][] = "language_id";
$proto91["m_columns"][] = "image_url";
$proto91["m_columns"][] = "age_id";
$proto91["m_columns"][] = "gender_id";
$proto91["m_columns"][] = "education_id";
$proto91["m_columns"][] = "income_id";
$proto91["m_columns"][] = "user_SSN";
$proto91["m_columns"][] = "total_purchase";
$proto91["m_columns"][] = "tatal_sales";
$proto91["m_columns"][] = "template";
$proto91["m_columns"][] = "cw_task_id";
$proto91["m_columns"][] = "cw_TO_id";
$proto91["m_columns"][] = "label_print_now";
$proto91["m_columns"][] = "dept_group_id";
$obj = new SQLTable($proto91);

$proto90["m_table"] = $obj;
$proto90["m_sql"] = "`users`";
$proto90["m_alias"] = "";
$proto90["m_srcTableName"] = "admin_users";
$proto92=array();
$proto92["m_sql"] = "";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
$proto92["m_strCase"] = "";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

$proto90["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto90);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto94=array();
						$obj = new SQLField(array(
	"m_strName" => "income_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_users"
));

$proto94["m_column"]=$obj;
$proto94["m_bAsc"] = 1;
$proto94["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto94);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="admin_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_users = createSqlQuery_admin_users();


	
		;

																																																																																																																																

$tdataadmin_users[".sqlquery"] = $queryData_admin_users;

$tableEvents["admin_users"] = new eventsBase;
$tdataadmin_users[".hasEvents"] = false;

?>