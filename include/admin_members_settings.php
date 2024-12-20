<?php
require_once(getabspath("classes/cipherer.php"));




$tdataadmin_members = array();
	$tdataadmin_members[".truncateText"] = true;
	$tdataadmin_members[".NumberOfChars"] = 80;
	$tdataadmin_members[".ShortName"] = "admin_members";
	$tdataadmin_members[".OwnerID"] = "";
	$tdataadmin_members[".OriginalTable"] = "users";

//	field labels
$fieldLabelsadmin_members = array();
$fieldToolTipsadmin_members = array();
$pageTitlesadmin_members = array();
$placeHoldersadmin_members = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsadmin_members["Japanese"] = array();
	$fieldToolTipsadmin_members["Japanese"] = array();
	$placeHoldersadmin_members["Japanese"] = array();
	$pageTitlesadmin_members["Japanese"] = array();
	$fieldLabelsadmin_members["Japanese"]["user_id"] = "User Id";
	$fieldToolTipsadmin_members["Japanese"]["user_id"] = "";
	$placeHoldersadmin_members["Japanese"]["user_id"] = "";
	$fieldLabelsadmin_members["Japanese"]["user_login"] = "User Login";
	$fieldToolTipsadmin_members["Japanese"]["user_login"] = "";
	$placeHoldersadmin_members["Japanese"]["user_login"] = "";
	$fieldLabelsadmin_members["Japanese"]["user_password"] = "User Password";
	$fieldToolTipsadmin_members["Japanese"]["user_password"] = "";
	$placeHoldersadmin_members["Japanese"]["user_password"] = "";
	$fieldLabelsadmin_members["Japanese"]["first_name"] = "First Name";
	$fieldToolTipsadmin_members["Japanese"]["first_name"] = "";
	$placeHoldersadmin_members["Japanese"]["first_name"] = "";
	$fieldLabelsadmin_members["Japanese"]["last_name"] = "Last Name";
	$fieldToolTipsadmin_members["Japanese"]["last_name"] = "";
	$placeHoldersadmin_members["Japanese"]["last_name"] = "";
	$fieldLabelsadmin_members["Japanese"]["title"] = "Title";
	$fieldToolTipsadmin_members["Japanese"]["title"] = "";
	$placeHoldersadmin_members["Japanese"]["title"] = "";
	$fieldLabelsadmin_members["Japanese"]["group_id"] = "Group Id";
	$fieldToolTipsadmin_members["Japanese"]["group_id"] = "";
	$placeHoldersadmin_members["Japanese"]["group_id"] = "";
	$fieldLabelsadmin_members["Japanese"]["phone_home"] = "Phone Home";
	$fieldToolTipsadmin_members["Japanese"]["phone_home"] = "";
	$placeHoldersadmin_members["Japanese"]["phone_home"] = "";
	$fieldLabelsadmin_members["Japanese"]["phone_work"] = "Phone Work";
	$fieldToolTipsadmin_members["Japanese"]["phone_work"] = "";
	$placeHoldersadmin_members["Japanese"]["phone_work"] = "";
	$fieldLabelsadmin_members["Japanese"]["phone_day"] = "Phone Day";
	$fieldToolTipsadmin_members["Japanese"]["phone_day"] = "";
	$placeHoldersadmin_members["Japanese"]["phone_day"] = "";
	$fieldLabelsadmin_members["Japanese"]["phone_cell"] = "Phone Cell";
	$fieldToolTipsadmin_members["Japanese"]["phone_cell"] = "";
	$placeHoldersadmin_members["Japanese"]["phone_cell"] = "";
	$fieldLabelsadmin_members["Japanese"]["phone_evening"] = "Phone Evening";
	$fieldToolTipsadmin_members["Japanese"]["phone_evening"] = "";
	$placeHoldersadmin_members["Japanese"]["phone_evening"] = "";
	$fieldLabelsadmin_members["Japanese"]["fax"] = "Fax";
	$fieldToolTipsadmin_members["Japanese"]["fax"] = "";
	$placeHoldersadmin_members["Japanese"]["fax"] = "";
	$fieldLabelsadmin_members["Japanese"]["email"] = "Email";
	$fieldToolTipsadmin_members["Japanese"]["email"] = "";
	$placeHoldersadmin_members["Japanese"]["email"] = "";
	$fieldLabelsadmin_members["Japanese"]["notes"] = "Notes";
	$fieldToolTipsadmin_members["Japanese"]["notes"] = "";
	$placeHoldersadmin_members["Japanese"]["notes"] = "";
	$fieldLabelsadmin_members["Japanese"]["card_number"] = "Card Number";
	$fieldToolTipsadmin_members["Japanese"]["card_number"] = "";
	$placeHoldersadmin_members["Japanese"]["card_number"] = "";
	$fieldLabelsadmin_members["Japanese"]["card_expire_date"] = "Card Expire Date";
	$fieldToolTipsadmin_members["Japanese"]["card_expire_date"] = "";
	$placeHoldersadmin_members["Japanese"]["card_expire_date"] = "";
	$fieldLabelsadmin_members["Japanese"]["country_id"] = "Country Id";
	$fieldToolTipsadmin_members["Japanese"]["country_id"] = "";
	$placeHoldersadmin_members["Japanese"]["country_id"] = "";
	$fieldLabelsadmin_members["Japanese"]["state_id"] = "State Id";
	$fieldToolTipsadmin_members["Japanese"]["state_id"] = "";
	$placeHoldersadmin_members["Japanese"]["state_id"] = "";
	$fieldLabelsadmin_members["Japanese"]["city"] = "City";
	$fieldToolTipsadmin_members["Japanese"]["city"] = "";
	$placeHoldersadmin_members["Japanese"]["city"] = "";
	$fieldLabelsadmin_members["Japanese"]["zip"] = "Zip";
	$fieldToolTipsadmin_members["Japanese"]["zip"] = "";
	$placeHoldersadmin_members["Japanese"]["zip"] = "";
	$fieldLabelsadmin_members["Japanese"]["address1"] = "Address1";
	$fieldToolTipsadmin_members["Japanese"]["address1"] = "";
	$placeHoldersadmin_members["Japanese"]["address1"] = "";
	$fieldLabelsadmin_members["Japanese"]["address2"] = "Address2";
	$fieldToolTipsadmin_members["Japanese"]["address2"] = "";
	$placeHoldersadmin_members["Japanese"]["address2"] = "";
	$fieldLabelsadmin_members["Japanese"]["address3"] = "Address3";
	$fieldToolTipsadmin_members["Japanese"]["address3"] = "";
	$placeHoldersadmin_members["Japanese"]["address3"] = "";
	$fieldLabelsadmin_members["Japanese"]["date_add"] = "Date Add";
	$fieldToolTipsadmin_members["Japanese"]["date_add"] = "";
	$placeHoldersadmin_members["Japanese"]["date_add"] = "";
	$fieldLabelsadmin_members["Japanese"]["date_last_login"] = "Date Last Login";
	$fieldToolTipsadmin_members["Japanese"]["date_last_login"] = "";
	$placeHoldersadmin_members["Japanese"]["date_last_login"] = "";
	$fieldLabelsadmin_members["Japanese"]["ip_add"] = "Ip Add";
	$fieldToolTipsadmin_members["Japanese"]["ip_add"] = "";
	$placeHoldersadmin_members["Japanese"]["ip_add"] = "";
	$fieldLabelsadmin_members["Japanese"]["ip_update"] = "Ip Update";
	$fieldToolTipsadmin_members["Japanese"]["ip_update"] = "";
	$placeHoldersadmin_members["Japanese"]["ip_update"] = "";
	$fieldLabelsadmin_members["Japanese"]["language_id"] = "Language Id";
	$fieldToolTipsadmin_members["Japanese"]["language_id"] = "";
	$placeHoldersadmin_members["Japanese"]["language_id"] = "";
	$fieldLabelsadmin_members["Japanese"]["image_url"] = "Image Url";
	$fieldToolTipsadmin_members["Japanese"]["image_url"] = "";
	$placeHoldersadmin_members["Japanese"]["image_url"] = "";
	$fieldLabelsadmin_members["Japanese"]["age_id"] = "Age Id";
	$fieldToolTipsadmin_members["Japanese"]["age_id"] = "";
	$placeHoldersadmin_members["Japanese"]["age_id"] = "";
	$fieldLabelsadmin_members["Japanese"]["gender_id"] = "Gender Id";
	$fieldToolTipsadmin_members["Japanese"]["gender_id"] = "";
	$placeHoldersadmin_members["Japanese"]["gender_id"] = "";
	$fieldLabelsadmin_members["Japanese"]["education_id"] = "Education Id";
	$fieldToolTipsadmin_members["Japanese"]["education_id"] = "";
	$placeHoldersadmin_members["Japanese"]["education_id"] = "";
	$fieldLabelsadmin_members["Japanese"]["income_id"] = "Income Id";
	$fieldToolTipsadmin_members["Japanese"]["income_id"] = "";
	$placeHoldersadmin_members["Japanese"]["income_id"] = "";
	$fieldLabelsadmin_members["Japanese"]["user_SSN"] = "User SSN";
	$fieldToolTipsadmin_members["Japanese"]["user_SSN"] = "";
	$placeHoldersadmin_members["Japanese"]["user_SSN"] = "";
	$fieldLabelsadmin_members["Japanese"]["total_purchase"] = "Total Purchase";
	$fieldToolTipsadmin_members["Japanese"]["total_purchase"] = "";
	$placeHoldersadmin_members["Japanese"]["total_purchase"] = "";
	$fieldLabelsadmin_members["Japanese"]["tatal_sales"] = "Tatal Sales";
	$fieldToolTipsadmin_members["Japanese"]["tatal_sales"] = "";
	$placeHoldersadmin_members["Japanese"]["tatal_sales"] = "";
	$fieldLabelsadmin_members["Japanese"]["template"] = "Template";
	$fieldToolTipsadmin_members["Japanese"]["template"] = "";
	$placeHoldersadmin_members["Japanese"]["template"] = "";
	if (count($fieldToolTipsadmin_members["Japanese"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsadmin_members[""] = array();
	$fieldToolTipsadmin_members[""] = array();
	$placeHoldersadmin_members[""] = array();
	$pageTitlesadmin_members[""] = array();
	if (count($fieldToolTipsadmin_members[""]))
		$tdataadmin_members[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_members["English"] = array();
	$fieldToolTipsadmin_members["English"] = array();
	$placeHoldersadmin_members["English"] = array();
	$pageTitlesadmin_members["English"] = array();
	if (count($fieldToolTipsadmin_members["English"]))
		$tdataadmin_members[".isUseToolTips"] = true;
}


	$tdataadmin_members[".NCSearch"] = true;



$tdataadmin_members[".shortTableName"] = "admin_members";
$tdataadmin_members[".nSecOptions"] = 0;
$tdataadmin_members[".recsPerRowPrint"] = 1;
$tdataadmin_members[".mainTableOwnerID"] = "";
$tdataadmin_members[".moveNext"] = 1;
$tdataadmin_members[".entityType"] = 1;

$tdataadmin_members[".strOriginalTableName"] = "users";

	



$tdataadmin_members[".showAddInPopup"] = false;

$tdataadmin_members[".showEditInPopup"] = false;

$tdataadmin_members[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_members[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_members[".fieldsForRegister"] = array();

$tdataadmin_members[".listAjax"] = false;

	$tdataadmin_members[".audit"] = true;

	$tdataadmin_members[".locking"] = false;






$tdataadmin_members[".reorderRecordsByHeader"] = true;
$tdataadmin_members[".createSortByDropdown"] = true;
$tdataadmin_members[".strSortControlSettingsJSON"] = "";








$tdataadmin_members[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataadmin_members[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdataadmin_members[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdataadmin_members[".searchSaving"] = false;
//

$tdataadmin_members[".showSearchPanel"] = true;
		$tdataadmin_members[".flexibleSearch"] = true;

$tdataadmin_members[".isUseAjaxSuggest"] = true;

$tdataadmin_members[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataadmin_members[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_members[".buttonsAdded"] = false;

$tdataadmin_members[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_members[".isUseTimeForSearch"] = false;





$tdataadmin_members[".allSearchFields"] = array();
$tdataadmin_members[".filterFields"] = array();
$tdataadmin_members[".requiredSearchFields"] = array();



$tdataadmin_members[".googleLikeFields"] = array();
$tdataadmin_members[".googleLikeFields"][] = "user_id";
$tdataadmin_members[".googleLikeFields"][] = "user_login";
$tdataadmin_members[".googleLikeFields"][] = "user_password";
$tdataadmin_members[".googleLikeFields"][] = "first_name";
$tdataadmin_members[".googleLikeFields"][] = "last_name";
$tdataadmin_members[".googleLikeFields"][] = "title";
$tdataadmin_members[".googleLikeFields"][] = "group_id";
$tdataadmin_members[".googleLikeFields"][] = "phone_home";
$tdataadmin_members[".googleLikeFields"][] = "phone_work";
$tdataadmin_members[".googleLikeFields"][] = "phone_day";
$tdataadmin_members[".googleLikeFields"][] = "phone_cell";
$tdataadmin_members[".googleLikeFields"][] = "phone_evening";
$tdataadmin_members[".googleLikeFields"][] = "fax";
$tdataadmin_members[".googleLikeFields"][] = "email";
$tdataadmin_members[".googleLikeFields"][] = "notes";
$tdataadmin_members[".googleLikeFields"][] = "card_number";
$tdataadmin_members[".googleLikeFields"][] = "card_expire_date";
$tdataadmin_members[".googleLikeFields"][] = "country_id";
$tdataadmin_members[".googleLikeFields"][] = "state_id";
$tdataadmin_members[".googleLikeFields"][] = "city";
$tdataadmin_members[".googleLikeFields"][] = "zip";
$tdataadmin_members[".googleLikeFields"][] = "address1";
$tdataadmin_members[".googleLikeFields"][] = "address2";
$tdataadmin_members[".googleLikeFields"][] = "address3";
$tdataadmin_members[".googleLikeFields"][] = "date_add";
$tdataadmin_members[".googleLikeFields"][] = "date_last_login";
$tdataadmin_members[".googleLikeFields"][] = "ip_add";
$tdataadmin_members[".googleLikeFields"][] = "ip_update";
$tdataadmin_members[".googleLikeFields"][] = "language_id";
$tdataadmin_members[".googleLikeFields"][] = "image_url";
$tdataadmin_members[".googleLikeFields"][] = "age_id";
$tdataadmin_members[".googleLikeFields"][] = "gender_id";
$tdataadmin_members[".googleLikeFields"][] = "education_id";
$tdataadmin_members[".googleLikeFields"][] = "income_id";
$tdataadmin_members[".googleLikeFields"][] = "user_SSN";
$tdataadmin_members[".googleLikeFields"][] = "total_purchase";
$tdataadmin_members[".googleLikeFields"][] = "tatal_sales";
$tdataadmin_members[".googleLikeFields"][] = "template";



$tdataadmin_members[".tableType"] = "list";

$tdataadmin_members[".printerPageOrientation"] = 0;
$tdataadmin_members[".nPrinterPageScale"] = 100;

$tdataadmin_members[".nPrinterSplitRecords"] = 40;

$tdataadmin_members[".nPrinterPDFSplitRecords"] = 40;



$tdataadmin_members[".geocodingEnabled"] = false;





$tdataadmin_members[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataadmin_members[".pageSize"] = 20;

$tdataadmin_members[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_members[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_members[".orderindexes"] = array();

$tdataadmin_members[".sqlHead"] = "SELECT user_id,  	user_login,  	user_password,  	first_name,  	last_name,  	title,  	group_id,  	phone_home,  	phone_work,  	phone_day,  	phone_cell,  	phone_evening,  	fax,  	email,  	notes,  	card_number,  	card_expire_date,  	country_id,  	state_id,  	city,  	zip,  	address1,  	address2,  	address3,  	date_add,  	date_last_login,  	ip_add,  	ip_update,  	language_id,  	image_url,  	age_id,  	gender_id,  	education_id,  	income_id,  	user_SSN,  	total_purchase,  	tatal_sales,  	template";
$tdataadmin_members[".sqlFrom"] = "FROM users";
$tdataadmin_members[".sqlWhereExpr"] = "";
$tdataadmin_members[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_members[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_members[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_members[".highlightSearchResults"] = true;

$tableKeysadmin_members = array();
$tableKeysadmin_members[] = "user_id";
$tdataadmin_members[".Keys"] = $tableKeysadmin_members;

$tdataadmin_members[".listFields"] = array();
$tdataadmin_members[".listFields"][] = "user_id";
$tdataadmin_members[".listFields"][] = "user_login";
$tdataadmin_members[".listFields"][] = "user_password";
$tdataadmin_members[".listFields"][] = "first_name";
$tdataadmin_members[".listFields"][] = "last_name";
$tdataadmin_members[".listFields"][] = "title";
$tdataadmin_members[".listFields"][] = "group_id";
$tdataadmin_members[".listFields"][] = "phone_home";
$tdataadmin_members[".listFields"][] = "phone_work";
$tdataadmin_members[".listFields"][] = "phone_day";
$tdataadmin_members[".listFields"][] = "phone_cell";
$tdataadmin_members[".listFields"][] = "phone_evening";
$tdataadmin_members[".listFields"][] = "fax";
$tdataadmin_members[".listFields"][] = "email";
$tdataadmin_members[".listFields"][] = "notes";
$tdataadmin_members[".listFields"][] = "card_number";
$tdataadmin_members[".listFields"][] = "card_expire_date";
$tdataadmin_members[".listFields"][] = "country_id";
$tdataadmin_members[".listFields"][] = "state_id";
$tdataadmin_members[".listFields"][] = "city";
$tdataadmin_members[".listFields"][] = "zip";
$tdataadmin_members[".listFields"][] = "address1";
$tdataadmin_members[".listFields"][] = "address2";
$tdataadmin_members[".listFields"][] = "address3";
$tdataadmin_members[".listFields"][] = "date_add";
$tdataadmin_members[".listFields"][] = "date_last_login";
$tdataadmin_members[".listFields"][] = "ip_add";
$tdataadmin_members[".listFields"][] = "ip_update";
$tdataadmin_members[".listFields"][] = "language_id";
$tdataadmin_members[".listFields"][] = "image_url";
$tdataadmin_members[".listFields"][] = "age_id";
$tdataadmin_members[".listFields"][] = "gender_id";
$tdataadmin_members[".listFields"][] = "education_id";
$tdataadmin_members[".listFields"][] = "income_id";
$tdataadmin_members[".listFields"][] = "user_SSN";
$tdataadmin_members[".listFields"][] = "total_purchase";
$tdataadmin_members[".listFields"][] = "tatal_sales";
$tdataadmin_members[".listFields"][] = "template";

$tdataadmin_members[".hideMobileList"] = array();


$tdataadmin_members[".viewFields"] = array();
$tdataadmin_members[".viewFields"][] = "user_id";
$tdataadmin_members[".viewFields"][] = "user_login";
$tdataadmin_members[".viewFields"][] = "user_password";
$tdataadmin_members[".viewFields"][] = "first_name";
$tdataadmin_members[".viewFields"][] = "last_name";
$tdataadmin_members[".viewFields"][] = "title";
$tdataadmin_members[".viewFields"][] = "group_id";
$tdataadmin_members[".viewFields"][] = "phone_home";
$tdataadmin_members[".viewFields"][] = "phone_work";
$tdataadmin_members[".viewFields"][] = "phone_day";
$tdataadmin_members[".viewFields"][] = "phone_cell";
$tdataadmin_members[".viewFields"][] = "phone_evening";
$tdataadmin_members[".viewFields"][] = "fax";
$tdataadmin_members[".viewFields"][] = "email";
$tdataadmin_members[".viewFields"][] = "notes";
$tdataadmin_members[".viewFields"][] = "card_number";
$tdataadmin_members[".viewFields"][] = "card_expire_date";
$tdataadmin_members[".viewFields"][] = "country_id";
$tdataadmin_members[".viewFields"][] = "state_id";
$tdataadmin_members[".viewFields"][] = "city";
$tdataadmin_members[".viewFields"][] = "zip";
$tdataadmin_members[".viewFields"][] = "address1";
$tdataadmin_members[".viewFields"][] = "address2";
$tdataadmin_members[".viewFields"][] = "address3";
$tdataadmin_members[".viewFields"][] = "date_add";
$tdataadmin_members[".viewFields"][] = "date_last_login";
$tdataadmin_members[".viewFields"][] = "ip_add";
$tdataadmin_members[".viewFields"][] = "ip_update";
$tdataadmin_members[".viewFields"][] = "language_id";
$tdataadmin_members[".viewFields"][] = "image_url";
$tdataadmin_members[".viewFields"][] = "age_id";
$tdataadmin_members[".viewFields"][] = "gender_id";
$tdataadmin_members[".viewFields"][] = "education_id";
$tdataadmin_members[".viewFields"][] = "income_id";
$tdataadmin_members[".viewFields"][] = "user_SSN";
$tdataadmin_members[".viewFields"][] = "total_purchase";
$tdataadmin_members[".viewFields"][] = "tatal_sales";
$tdataadmin_members[".viewFields"][] = "template";

$tdataadmin_members[".addFields"] = array();
$tdataadmin_members[".addFields"][] = "user_login";
$tdataadmin_members[".addFields"][] = "user_password";
$tdataadmin_members[".addFields"][] = "first_name";
$tdataadmin_members[".addFields"][] = "last_name";
$tdataadmin_members[".addFields"][] = "title";
$tdataadmin_members[".addFields"][] = "group_id";
$tdataadmin_members[".addFields"][] = "phone_home";
$tdataadmin_members[".addFields"][] = "phone_work";
$tdataadmin_members[".addFields"][] = "phone_day";
$tdataadmin_members[".addFields"][] = "phone_cell";
$tdataadmin_members[".addFields"][] = "phone_evening";
$tdataadmin_members[".addFields"][] = "fax";
$tdataadmin_members[".addFields"][] = "email";
$tdataadmin_members[".addFields"][] = "notes";
$tdataadmin_members[".addFields"][] = "card_number";
$tdataadmin_members[".addFields"][] = "card_expire_date";
$tdataadmin_members[".addFields"][] = "country_id";
$tdataadmin_members[".addFields"][] = "state_id";
$tdataadmin_members[".addFields"][] = "city";
$tdataadmin_members[".addFields"][] = "zip";
$tdataadmin_members[".addFields"][] = "address1";
$tdataadmin_members[".addFields"][] = "address2";
$tdataadmin_members[".addFields"][] = "address3";
$tdataadmin_members[".addFields"][] = "date_add";
$tdataadmin_members[".addFields"][] = "date_last_login";
$tdataadmin_members[".addFields"][] = "ip_add";
$tdataadmin_members[".addFields"][] = "ip_update";
$tdataadmin_members[".addFields"][] = "language_id";
$tdataadmin_members[".addFields"][] = "image_url";
$tdataadmin_members[".addFields"][] = "age_id";
$tdataadmin_members[".addFields"][] = "gender_id";
$tdataadmin_members[".addFields"][] = "education_id";
$tdataadmin_members[".addFields"][] = "income_id";
$tdataadmin_members[".addFields"][] = "user_SSN";
$tdataadmin_members[".addFields"][] = "total_purchase";
$tdataadmin_members[".addFields"][] = "tatal_sales";
$tdataadmin_members[".addFields"][] = "template";

$tdataadmin_members[".masterListFields"] = array();
$tdataadmin_members[".masterListFields"][] = "user_id";
$tdataadmin_members[".masterListFields"][] = "user_login";
$tdataadmin_members[".masterListFields"][] = "user_password";
$tdataadmin_members[".masterListFields"][] = "first_name";
$tdataadmin_members[".masterListFields"][] = "last_name";
$tdataadmin_members[".masterListFields"][] = "title";
$tdataadmin_members[".masterListFields"][] = "group_id";
$tdataadmin_members[".masterListFields"][] = "phone_home";
$tdataadmin_members[".masterListFields"][] = "phone_work";
$tdataadmin_members[".masterListFields"][] = "phone_day";
$tdataadmin_members[".masterListFields"][] = "phone_cell";
$tdataadmin_members[".masterListFields"][] = "phone_evening";
$tdataadmin_members[".masterListFields"][] = "fax";
$tdataadmin_members[".masterListFields"][] = "email";
$tdataadmin_members[".masterListFields"][] = "notes";
$tdataadmin_members[".masterListFields"][] = "card_number";
$tdataadmin_members[".masterListFields"][] = "card_expire_date";
$tdataadmin_members[".masterListFields"][] = "country_id";
$tdataadmin_members[".masterListFields"][] = "state_id";
$tdataadmin_members[".masterListFields"][] = "city";
$tdataadmin_members[".masterListFields"][] = "zip";
$tdataadmin_members[".masterListFields"][] = "address1";
$tdataadmin_members[".masterListFields"][] = "address2";
$tdataadmin_members[".masterListFields"][] = "address3";
$tdataadmin_members[".masterListFields"][] = "date_add";
$tdataadmin_members[".masterListFields"][] = "date_last_login";
$tdataadmin_members[".masterListFields"][] = "ip_add";
$tdataadmin_members[".masterListFields"][] = "ip_update";
$tdataadmin_members[".masterListFields"][] = "language_id";
$tdataadmin_members[".masterListFields"][] = "image_url";
$tdataadmin_members[".masterListFields"][] = "age_id";
$tdataadmin_members[".masterListFields"][] = "gender_id";
$tdataadmin_members[".masterListFields"][] = "education_id";
$tdataadmin_members[".masterListFields"][] = "income_id";
$tdataadmin_members[".masterListFields"][] = "user_SSN";
$tdataadmin_members[".masterListFields"][] = "total_purchase";
$tdataadmin_members[".masterListFields"][] = "tatal_sales";
$tdataadmin_members[".masterListFields"][] = "template";

$tdataadmin_members[".inlineAddFields"] = array();
$tdataadmin_members[".inlineAddFields"][] = "user_login";
$tdataadmin_members[".inlineAddFields"][] = "user_password";
$tdataadmin_members[".inlineAddFields"][] = "first_name";
$tdataadmin_members[".inlineAddFields"][] = "last_name";
$tdataadmin_members[".inlineAddFields"][] = "title";
$tdataadmin_members[".inlineAddFields"][] = "group_id";
$tdataadmin_members[".inlineAddFields"][] = "phone_home";
$tdataadmin_members[".inlineAddFields"][] = "phone_work";
$tdataadmin_members[".inlineAddFields"][] = "phone_day";
$tdataadmin_members[".inlineAddFields"][] = "phone_cell";
$tdataadmin_members[".inlineAddFields"][] = "phone_evening";
$tdataadmin_members[".inlineAddFields"][] = "fax";
$tdataadmin_members[".inlineAddFields"][] = "email";
$tdataadmin_members[".inlineAddFields"][] = "notes";
$tdataadmin_members[".inlineAddFields"][] = "card_number";
$tdataadmin_members[".inlineAddFields"][] = "card_expire_date";
$tdataadmin_members[".inlineAddFields"][] = "country_id";
$tdataadmin_members[".inlineAddFields"][] = "state_id";
$tdataadmin_members[".inlineAddFields"][] = "city";
$tdataadmin_members[".inlineAddFields"][] = "zip";
$tdataadmin_members[".inlineAddFields"][] = "address1";
$tdataadmin_members[".inlineAddFields"][] = "address2";
$tdataadmin_members[".inlineAddFields"][] = "address3";
$tdataadmin_members[".inlineAddFields"][] = "date_add";
$tdataadmin_members[".inlineAddFields"][] = "date_last_login";
$tdataadmin_members[".inlineAddFields"][] = "ip_add";
$tdataadmin_members[".inlineAddFields"][] = "ip_update";
$tdataadmin_members[".inlineAddFields"][] = "language_id";
$tdataadmin_members[".inlineAddFields"][] = "image_url";
$tdataadmin_members[".inlineAddFields"][] = "age_id";
$tdataadmin_members[".inlineAddFields"][] = "gender_id";
$tdataadmin_members[".inlineAddFields"][] = "education_id";
$tdataadmin_members[".inlineAddFields"][] = "income_id";
$tdataadmin_members[".inlineAddFields"][] = "user_SSN";
$tdataadmin_members[".inlineAddFields"][] = "total_purchase";
$tdataadmin_members[".inlineAddFields"][] = "tatal_sales";
$tdataadmin_members[".inlineAddFields"][] = "template";

$tdataadmin_members[".editFields"] = array();
$tdataadmin_members[".editFields"][] = "user_login";
$tdataadmin_members[".editFields"][] = "user_password";
$tdataadmin_members[".editFields"][] = "first_name";
$tdataadmin_members[".editFields"][] = "last_name";
$tdataadmin_members[".editFields"][] = "title";
$tdataadmin_members[".editFields"][] = "group_id";
$tdataadmin_members[".editFields"][] = "phone_home";
$tdataadmin_members[".editFields"][] = "phone_work";
$tdataadmin_members[".editFields"][] = "phone_day";
$tdataadmin_members[".editFields"][] = "phone_cell";
$tdataadmin_members[".editFields"][] = "phone_evening";
$tdataadmin_members[".editFields"][] = "fax";
$tdataadmin_members[".editFields"][] = "email";
$tdataadmin_members[".editFields"][] = "notes";
$tdataadmin_members[".editFields"][] = "card_number";
$tdataadmin_members[".editFields"][] = "card_expire_date";
$tdataadmin_members[".editFields"][] = "country_id";
$tdataadmin_members[".editFields"][] = "state_id";
$tdataadmin_members[".editFields"][] = "city";
$tdataadmin_members[".editFields"][] = "zip";
$tdataadmin_members[".editFields"][] = "address1";
$tdataadmin_members[".editFields"][] = "address2";
$tdataadmin_members[".editFields"][] = "address3";
$tdataadmin_members[".editFields"][] = "date_add";
$tdataadmin_members[".editFields"][] = "date_last_login";
$tdataadmin_members[".editFields"][] = "ip_add";
$tdataadmin_members[".editFields"][] = "ip_update";
$tdataadmin_members[".editFields"][] = "language_id";
$tdataadmin_members[".editFields"][] = "image_url";
$tdataadmin_members[".editFields"][] = "age_id";
$tdataadmin_members[".editFields"][] = "gender_id";
$tdataadmin_members[".editFields"][] = "education_id";
$tdataadmin_members[".editFields"][] = "income_id";
$tdataadmin_members[".editFields"][] = "user_SSN";
$tdataadmin_members[".editFields"][] = "total_purchase";
$tdataadmin_members[".editFields"][] = "tatal_sales";
$tdataadmin_members[".editFields"][] = "template";

$tdataadmin_members[".inlineEditFields"] = array();
$tdataadmin_members[".inlineEditFields"][] = "user_login";
$tdataadmin_members[".inlineEditFields"][] = "user_password";
$tdataadmin_members[".inlineEditFields"][] = "first_name";
$tdataadmin_members[".inlineEditFields"][] = "last_name";
$tdataadmin_members[".inlineEditFields"][] = "title";
$tdataadmin_members[".inlineEditFields"][] = "group_id";
$tdataadmin_members[".inlineEditFields"][] = "phone_home";
$tdataadmin_members[".inlineEditFields"][] = "phone_work";
$tdataadmin_members[".inlineEditFields"][] = "phone_day";
$tdataadmin_members[".inlineEditFields"][] = "phone_cell";
$tdataadmin_members[".inlineEditFields"][] = "phone_evening";
$tdataadmin_members[".inlineEditFields"][] = "fax";
$tdataadmin_members[".inlineEditFields"][] = "email";
$tdataadmin_members[".inlineEditFields"][] = "notes";
$tdataadmin_members[".inlineEditFields"][] = "card_number";
$tdataadmin_members[".inlineEditFields"][] = "card_expire_date";
$tdataadmin_members[".inlineEditFields"][] = "country_id";
$tdataadmin_members[".inlineEditFields"][] = "state_id";
$tdataadmin_members[".inlineEditFields"][] = "city";
$tdataadmin_members[".inlineEditFields"][] = "zip";
$tdataadmin_members[".inlineEditFields"][] = "address1";
$tdataadmin_members[".inlineEditFields"][] = "address2";
$tdataadmin_members[".inlineEditFields"][] = "address3";
$tdataadmin_members[".inlineEditFields"][] = "date_add";
$tdataadmin_members[".inlineEditFields"][] = "date_last_login";
$tdataadmin_members[".inlineEditFields"][] = "ip_add";
$tdataadmin_members[".inlineEditFields"][] = "ip_update";
$tdataadmin_members[".inlineEditFields"][] = "language_id";
$tdataadmin_members[".inlineEditFields"][] = "image_url";
$tdataadmin_members[".inlineEditFields"][] = "age_id";
$tdataadmin_members[".inlineEditFields"][] = "gender_id";
$tdataadmin_members[".inlineEditFields"][] = "education_id";
$tdataadmin_members[".inlineEditFields"][] = "income_id";
$tdataadmin_members[".inlineEditFields"][] = "user_SSN";
$tdataadmin_members[".inlineEditFields"][] = "total_purchase";
$tdataadmin_members[".inlineEditFields"][] = "tatal_sales";
$tdataadmin_members[".inlineEditFields"][] = "template";

$tdataadmin_members[".updateSelectedFields"] = array();
$tdataadmin_members[".updateSelectedFields"][] = "user_login";
$tdataadmin_members[".updateSelectedFields"][] = "user_password";
$tdataadmin_members[".updateSelectedFields"][] = "first_name";
$tdataadmin_members[".updateSelectedFields"][] = "last_name";
$tdataadmin_members[".updateSelectedFields"][] = "title";
$tdataadmin_members[".updateSelectedFields"][] = "group_id";
$tdataadmin_members[".updateSelectedFields"][] = "phone_home";
$tdataadmin_members[".updateSelectedFields"][] = "phone_work";
$tdataadmin_members[".updateSelectedFields"][] = "phone_day";
$tdataadmin_members[".updateSelectedFields"][] = "phone_cell";
$tdataadmin_members[".updateSelectedFields"][] = "phone_evening";
$tdataadmin_members[".updateSelectedFields"][] = "fax";
$tdataadmin_members[".updateSelectedFields"][] = "email";
$tdataadmin_members[".updateSelectedFields"][] = "notes";
$tdataadmin_members[".updateSelectedFields"][] = "card_number";
$tdataadmin_members[".updateSelectedFields"][] = "card_expire_date";
$tdataadmin_members[".updateSelectedFields"][] = "country_id";
$tdataadmin_members[".updateSelectedFields"][] = "state_id";
$tdataadmin_members[".updateSelectedFields"][] = "city";
$tdataadmin_members[".updateSelectedFields"][] = "zip";
$tdataadmin_members[".updateSelectedFields"][] = "address1";
$tdataadmin_members[".updateSelectedFields"][] = "address2";
$tdataadmin_members[".updateSelectedFields"][] = "address3";
$tdataadmin_members[".updateSelectedFields"][] = "date_add";
$tdataadmin_members[".updateSelectedFields"][] = "date_last_login";
$tdataadmin_members[".updateSelectedFields"][] = "ip_add";
$tdataadmin_members[".updateSelectedFields"][] = "ip_update";
$tdataadmin_members[".updateSelectedFields"][] = "language_id";
$tdataadmin_members[".updateSelectedFields"][] = "image_url";
$tdataadmin_members[".updateSelectedFields"][] = "age_id";
$tdataadmin_members[".updateSelectedFields"][] = "gender_id";
$tdataadmin_members[".updateSelectedFields"][] = "education_id";
$tdataadmin_members[".updateSelectedFields"][] = "income_id";
$tdataadmin_members[".updateSelectedFields"][] = "user_SSN";
$tdataadmin_members[".updateSelectedFields"][] = "total_purchase";
$tdataadmin_members[".updateSelectedFields"][] = "tatal_sales";
$tdataadmin_members[".updateSelectedFields"][] = "template";


$tdataadmin_members[".exportFields"] = array();
$tdataadmin_members[".exportFields"][] = "user_id";
$tdataadmin_members[".exportFields"][] = "user_login";
$tdataadmin_members[".exportFields"][] = "user_password";
$tdataadmin_members[".exportFields"][] = "first_name";
$tdataadmin_members[".exportFields"][] = "last_name";
$tdataadmin_members[".exportFields"][] = "title";
$tdataadmin_members[".exportFields"][] = "group_id";
$tdataadmin_members[".exportFields"][] = "phone_home";
$tdataadmin_members[".exportFields"][] = "phone_work";
$tdataadmin_members[".exportFields"][] = "phone_day";
$tdataadmin_members[".exportFields"][] = "phone_cell";
$tdataadmin_members[".exportFields"][] = "phone_evening";
$tdataadmin_members[".exportFields"][] = "fax";
$tdataadmin_members[".exportFields"][] = "email";
$tdataadmin_members[".exportFields"][] = "notes";
$tdataadmin_members[".exportFields"][] = "card_number";
$tdataadmin_members[".exportFields"][] = "card_expire_date";
$tdataadmin_members[".exportFields"][] = "country_id";
$tdataadmin_members[".exportFields"][] = "state_id";
$tdataadmin_members[".exportFields"][] = "city";
$tdataadmin_members[".exportFields"][] = "zip";
$tdataadmin_members[".exportFields"][] = "address1";
$tdataadmin_members[".exportFields"][] = "address2";
$tdataadmin_members[".exportFields"][] = "address3";
$tdataadmin_members[".exportFields"][] = "date_add";
$tdataadmin_members[".exportFields"][] = "date_last_login";
$tdataadmin_members[".exportFields"][] = "ip_add";
$tdataadmin_members[".exportFields"][] = "ip_update";
$tdataadmin_members[".exportFields"][] = "language_id";
$tdataadmin_members[".exportFields"][] = "image_url";
$tdataadmin_members[".exportFields"][] = "age_id";
$tdataadmin_members[".exportFields"][] = "gender_id";
$tdataadmin_members[".exportFields"][] = "education_id";
$tdataadmin_members[".exportFields"][] = "income_id";
$tdataadmin_members[".exportFields"][] = "user_SSN";
$tdataadmin_members[".exportFields"][] = "total_purchase";
$tdataadmin_members[".exportFields"][] = "tatal_sales";
$tdataadmin_members[".exportFields"][] = "template";

$tdataadmin_members[".importFields"] = array();
$tdataadmin_members[".importFields"][] = "user_id";
$tdataadmin_members[".importFields"][] = "user_login";
$tdataadmin_members[".importFields"][] = "user_password";
$tdataadmin_members[".importFields"][] = "first_name";
$tdataadmin_members[".importFields"][] = "last_name";
$tdataadmin_members[".importFields"][] = "title";
$tdataadmin_members[".importFields"][] = "group_id";
$tdataadmin_members[".importFields"][] = "phone_home";
$tdataadmin_members[".importFields"][] = "phone_work";
$tdataadmin_members[".importFields"][] = "phone_day";
$tdataadmin_members[".importFields"][] = "phone_cell";
$tdataadmin_members[".importFields"][] = "phone_evening";
$tdataadmin_members[".importFields"][] = "fax";
$tdataadmin_members[".importFields"][] = "email";
$tdataadmin_members[".importFields"][] = "notes";
$tdataadmin_members[".importFields"][] = "card_number";
$tdataadmin_members[".importFields"][] = "card_expire_date";
$tdataadmin_members[".importFields"][] = "country_id";
$tdataadmin_members[".importFields"][] = "state_id";
$tdataadmin_members[".importFields"][] = "city";
$tdataadmin_members[".importFields"][] = "zip";
$tdataadmin_members[".importFields"][] = "address1";
$tdataadmin_members[".importFields"][] = "address2";
$tdataadmin_members[".importFields"][] = "address3";
$tdataadmin_members[".importFields"][] = "date_add";
$tdataadmin_members[".importFields"][] = "date_last_login";
$tdataadmin_members[".importFields"][] = "ip_add";
$tdataadmin_members[".importFields"][] = "ip_update";
$tdataadmin_members[".importFields"][] = "language_id";
$tdataadmin_members[".importFields"][] = "image_url";
$tdataadmin_members[".importFields"][] = "age_id";
$tdataadmin_members[".importFields"][] = "gender_id";
$tdataadmin_members[".importFields"][] = "education_id";
$tdataadmin_members[".importFields"][] = "income_id";
$tdataadmin_members[".importFields"][] = "user_SSN";
$tdataadmin_members[".importFields"][] = "total_purchase";
$tdataadmin_members[".importFields"][] = "tatal_sales";
$tdataadmin_members[".importFields"][] = "template";

$tdataadmin_members[".printFields"] = array();
$tdataadmin_members[".printFields"][] = "user_id";
$tdataadmin_members[".printFields"][] = "user_login";
$tdataadmin_members[".printFields"][] = "user_password";
$tdataadmin_members[".printFields"][] = "first_name";
$tdataadmin_members[".printFields"][] = "last_name";
$tdataadmin_members[".printFields"][] = "title";
$tdataadmin_members[".printFields"][] = "group_id";
$tdataadmin_members[".printFields"][] = "phone_home";
$tdataadmin_members[".printFields"][] = "phone_work";
$tdataadmin_members[".printFields"][] = "phone_day";
$tdataadmin_members[".printFields"][] = "phone_cell";
$tdataadmin_members[".printFields"][] = "phone_evening";
$tdataadmin_members[".printFields"][] = "fax";
$tdataadmin_members[".printFields"][] = "email";
$tdataadmin_members[".printFields"][] = "notes";
$tdataadmin_members[".printFields"][] = "card_number";
$tdataadmin_members[".printFields"][] = "card_expire_date";
$tdataadmin_members[".printFields"][] = "country_id";
$tdataadmin_members[".printFields"][] = "state_id";
$tdataadmin_members[".printFields"][] = "city";
$tdataadmin_members[".printFields"][] = "zip";
$tdataadmin_members[".printFields"][] = "address1";
$tdataadmin_members[".printFields"][] = "address2";
$tdataadmin_members[".printFields"][] = "address3";
$tdataadmin_members[".printFields"][] = "date_add";
$tdataadmin_members[".printFields"][] = "date_last_login";
$tdataadmin_members[".printFields"][] = "ip_add";
$tdataadmin_members[".printFields"][] = "ip_update";
$tdataadmin_members[".printFields"][] = "language_id";
$tdataadmin_members[".printFields"][] = "image_url";
$tdataadmin_members[".printFields"][] = "age_id";
$tdataadmin_members[".printFields"][] = "gender_id";
$tdataadmin_members[".printFields"][] = "education_id";
$tdataadmin_members[".printFields"][] = "income_id";
$tdataadmin_members[".printFields"][] = "user_SSN";
$tdataadmin_members[".printFields"][] = "total_purchase";
$tdataadmin_members[".printFields"][] = "tatal_sales";
$tdataadmin_members[".printFields"][] = "template";

//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","user_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id";

	
	
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








	$tdataadmin_members["user_id"] = $fdata;
//	user_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_login";
	$fdata["GoodName"] = "user_login";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","user_login");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_login";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_login";

	
	
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








	$tdataadmin_members["user_login"] = $fdata;
//	user_password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "user_password";
	$fdata["GoodName"] = "user_password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","user_password");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_password";

	
	
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








	$tdataadmin_members["user_password"] = $fdata;
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","first_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "first_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "first_name";

	
	
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








	$tdataadmin_members["first_name"] = $fdata;
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","last_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "last_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_name";

	
	
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








	$tdataadmin_members["last_name"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
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








	$tdataadmin_members["title"] = $fdata;
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","group_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_id";

	
	
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








	$tdataadmin_members["group_id"] = $fdata;
//	phone_home
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "phone_home";
	$fdata["GoodName"] = "phone_home";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","phone_home");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "phone_home";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone_home";

	
	
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








	$tdataadmin_members["phone_home"] = $fdata;
//	phone_work
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "phone_work";
	$fdata["GoodName"] = "phone_work";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","phone_work");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "phone_work";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone_work";

	
	
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








	$tdataadmin_members["phone_work"] = $fdata;
//	phone_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "phone_day";
	$fdata["GoodName"] = "phone_day";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","phone_day");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "phone_day";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone_day";

	
	
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








	$tdataadmin_members["phone_day"] = $fdata;
//	phone_cell
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "phone_cell";
	$fdata["GoodName"] = "phone_cell";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","phone_cell");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "phone_cell";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone_cell";

	
	
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








	$tdataadmin_members["phone_cell"] = $fdata;
//	phone_evening
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "phone_evening";
	$fdata["GoodName"] = "phone_evening";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","phone_evening");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "phone_evening";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone_evening";

	
	
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








	$tdataadmin_members["phone_evening"] = $fdata;
//	fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "fax";
	$fdata["GoodName"] = "fax";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","fax");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fax";

	
	
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








	$tdataadmin_members["fax"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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








	$tdataadmin_members["email"] = $fdata;
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","notes");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "notes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "notes";

	
	
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








	$tdataadmin_members["notes"] = $fdata;
//	card_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "card_number";
	$fdata["GoodName"] = "card_number";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","card_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "card_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "card_number";

	
	
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








	$tdataadmin_members["card_number"] = $fdata;
//	card_expire_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "card_expire_date";
	$fdata["GoodName"] = "card_expire_date";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","card_expire_date");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "card_expire_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "card_expire_date";

	
	
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








	$tdataadmin_members["card_expire_date"] = $fdata;
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","country_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "country_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_id";

	
	
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








	$tdataadmin_members["country_id"] = $fdata;
//	state_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "state_id";
	$fdata["GoodName"] = "state_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","state_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "state_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "state_id";

	
	
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








	$tdataadmin_members["state_id"] = $fdata;
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","city");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "city";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "city";

	
	
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








	$tdataadmin_members["city"] = $fdata;
//	zip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "zip";
	$fdata["GoodName"] = "zip";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","zip");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zip";

	
	
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








	$tdataadmin_members["zip"] = $fdata;
//	address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "address1";
	$fdata["GoodName"] = "address1";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","address1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address1";

	
	
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








	$tdataadmin_members["address1"] = $fdata;
//	address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "address2";
	$fdata["GoodName"] = "address2";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","address2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address2";

	
	
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








	$tdataadmin_members["address2"] = $fdata;
//	address3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "address3";
	$fdata["GoodName"] = "address3";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","address3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address3";

	
	
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








	$tdataadmin_members["address3"] = $fdata;
//	date_add
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "date_add";
	$fdata["GoodName"] = "date_add";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","date_add");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date_add";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_add";

	
	
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








	$tdataadmin_members["date_add"] = $fdata;
//	date_last_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "date_last_login";
	$fdata["GoodName"] = "date_last_login";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","date_last_login");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date_last_login";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_last_login";

	
	
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








	$tdataadmin_members["date_last_login"] = $fdata;
//	ip_add
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "ip_add";
	$fdata["GoodName"] = "ip_add";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","ip_add");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ip_add";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip_add";

	
	
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








	$tdataadmin_members["ip_add"] = $fdata;
//	ip_update
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ip_update";
	$fdata["GoodName"] = "ip_update";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","ip_update");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ip_update";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ip_update";

	
	
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








	$tdataadmin_members["ip_update"] = $fdata;
//	language_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "language_id";
	$fdata["GoodName"] = "language_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","language_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "language_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "language_id";

	
	
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








	$tdataadmin_members["language_id"] = $fdata;
//	image_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "image_url";
	$fdata["GoodName"] = "image_url";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","image_url");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "image_url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "image_url";

	
	
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








	$tdataadmin_members["image_url"] = $fdata;
//	age_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "age_id";
	$fdata["GoodName"] = "age_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","age_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "age_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age_id";

	
	
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








	$tdataadmin_members["age_id"] = $fdata;
//	gender_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "gender_id";
	$fdata["GoodName"] = "gender_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","gender_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gender_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gender_id";

	
	
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








	$tdataadmin_members["gender_id"] = $fdata;
//	education_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "education_id";
	$fdata["GoodName"] = "education_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","education_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "education_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "education_id";

	
	
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








	$tdataadmin_members["education_id"] = $fdata;
//	income_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "income_id";
	$fdata["GoodName"] = "income_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","income_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "income_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "income_id";

	
	
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








	$tdataadmin_members["income_id"] = $fdata;
//	user_SSN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "user_SSN";
	$fdata["GoodName"] = "user_SSN";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","user_SSN");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_SSN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_SSN";

	
	
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








	$tdataadmin_members["user_SSN"] = $fdata;
//	total_purchase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "total_purchase";
	$fdata["GoodName"] = "total_purchase";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","total_purchase");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_purchase";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_purchase";

	
	
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








	$tdataadmin_members["total_purchase"] = $fdata;
//	tatal_sales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "tatal_sales";
	$fdata["GoodName"] = "tatal_sales";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","tatal_sales");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tatal_sales";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tatal_sales";

	
	
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








	$tdataadmin_members["tatal_sales"] = $fdata;
//	template
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "template";
	$fdata["GoodName"] = "template";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("admin_members","template");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "template";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "template";

	
	
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








	$tdataadmin_members["template"] = $fdata;


$tables_data["admin_members"]=&$tdataadmin_members;
$field_labels["admin_members"] = &$fieldLabelsadmin_members;
$fieldToolTips["admin_members"] = &$fieldToolTipsadmin_members;
$placeHolders["admin_members"] = &$placeHoldersadmin_members;
$page_titles["admin_members"] = &$pageTitlesadmin_members;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_members"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_members"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_members()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "user_id,  	user_login,  	user_password,  	first_name,  	last_name,  	title,  	group_id,  	phone_home,  	phone_work,  	phone_day,  	phone_cell,  	phone_evening,  	fax,  	email,  	notes,  	card_number,  	card_expire_date,  	country_id,  	state_id,  	city,  	zip,  	address1,  	address2,  	address3,  	date_add,  	date_last_login,  	ip_add,  	ip_update,  	language_id,  	image_url,  	age_id,  	gender_id,  	education_id,  	income_id,  	user_SSN,  	total_purchase,  	tatal_sales,  	template";
$proto0["m_strFrom"] = "FROM users";
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
	"m_strName" => "user_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto6["m_sql"] = "user_id";
$proto6["m_srcTableName"] = "admin_members";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_login",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto8["m_sql"] = "user_login";
$proto8["m_srcTableName"] = "admin_members";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "user_password",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto10["m_sql"] = "user_password";
$proto10["m_srcTableName"] = "admin_members";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto12["m_sql"] = "first_name";
$proto12["m_srcTableName"] = "admin_members";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto14["m_sql"] = "last_name";
$proto14["m_srcTableName"] = "admin_members";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto16["m_sql"] = "title";
$proto16["m_srcTableName"] = "admin_members";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto18["m_sql"] = "group_id";
$proto18["m_srcTableName"] = "admin_members";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_home",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto20["m_sql"] = "phone_home";
$proto20["m_srcTableName"] = "admin_members";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_work",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto22["m_sql"] = "phone_work";
$proto22["m_srcTableName"] = "admin_members";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_day",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto24["m_sql"] = "phone_day";
$proto24["m_srcTableName"] = "admin_members";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_cell",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto26["m_sql"] = "phone_cell";
$proto26["m_srcTableName"] = "admin_members";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_evening",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto28["m_sql"] = "phone_evening";
$proto28["m_srcTableName"] = "admin_members";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "fax",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto30["m_sql"] = "fax";
$proto30["m_srcTableName"] = "admin_members";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto32["m_sql"] = "email";
$proto32["m_srcTableName"] = "admin_members";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto34["m_sql"] = "notes";
$proto34["m_srcTableName"] = "admin_members";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "card_number",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto36["m_sql"] = "card_number";
$proto36["m_srcTableName"] = "admin_members";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "card_expire_date",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto38["m_sql"] = "card_expire_date";
$proto38["m_srcTableName"] = "admin_members";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto40["m_sql"] = "country_id";
$proto40["m_srcTableName"] = "admin_members";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "state_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto42["m_sql"] = "state_id";
$proto42["m_srcTableName"] = "admin_members";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto44["m_sql"] = "city";
$proto44["m_srcTableName"] = "admin_members";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "zip",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto46["m_sql"] = "zip";
$proto46["m_srcTableName"] = "admin_members";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "address1",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto48["m_sql"] = "address1";
$proto48["m_srcTableName"] = "admin_members";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "address2",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto50["m_sql"] = "address2";
$proto50["m_srcTableName"] = "admin_members";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "address3",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto52["m_sql"] = "address3";
$proto52["m_srcTableName"] = "admin_members";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "date_add",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto54["m_sql"] = "date_add";
$proto54["m_srcTableName"] = "admin_members";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "date_last_login",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto56["m_sql"] = "date_last_login";
$proto56["m_srcTableName"] = "admin_members";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "ip_add",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto58["m_sql"] = "ip_add";
$proto58["m_srcTableName"] = "admin_members";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "ip_update",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto60["m_sql"] = "ip_update";
$proto60["m_srcTableName"] = "admin_members";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "language_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto62["m_sql"] = "language_id";
$proto62["m_srcTableName"] = "admin_members";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "image_url",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto64["m_sql"] = "image_url";
$proto64["m_srcTableName"] = "admin_members";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "age_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto66["m_sql"] = "age_id";
$proto66["m_srcTableName"] = "admin_members";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "gender_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto68["m_sql"] = "gender_id";
$proto68["m_srcTableName"] = "admin_members";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "education_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto70["m_sql"] = "education_id";
$proto70["m_srcTableName"] = "admin_members";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "income_id",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto72["m_sql"] = "income_id";
$proto72["m_srcTableName"] = "admin_members";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "user_SSN",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto74["m_sql"] = "user_SSN";
$proto74["m_srcTableName"] = "admin_members";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "total_purchase",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto76["m_sql"] = "total_purchase";
$proto76["m_srcTableName"] = "admin_members";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "tatal_sales",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto78["m_sql"] = "tatal_sales";
$proto78["m_srcTableName"] = "admin_members";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "template",
	"m_strTable" => "users",
	"m_srcTableName" => "admin_members"
));

$proto80["m_sql"] = "template";
$proto80["m_srcTableName"] = "admin_members";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto82=array();
$proto82["m_link"] = "SQLL_MAIN";
			$proto83=array();
$proto83["m_strName"] = "users";
$proto83["m_srcTableName"] = "admin_members";
$proto83["m_columns"] = array();
$proto83["m_columns"][] = "user_id";
$proto83["m_columns"][] = "user_login";
$proto83["m_columns"][] = "user_password";
$proto83["m_columns"][] = "first_name";
$proto83["m_columns"][] = "last_name";
$proto83["m_columns"][] = "title";
$proto83["m_columns"][] = "group_id";
$proto83["m_columns"][] = "english_name";
$proto83["m_columns"][] = "phone_home";
$proto83["m_columns"][] = "phone_work";
$proto83["m_columns"][] = "phone_day";
$proto83["m_columns"][] = "phone_cell";
$proto83["m_columns"][] = "phone_evening";
$proto83["m_columns"][] = "fax";
$proto83["m_columns"][] = "email";
$proto83["m_columns"][] = "notes";
$proto83["m_columns"][] = "card_number";
$proto83["m_columns"][] = "card_expire_date";
$proto83["m_columns"][] = "country_id";
$proto83["m_columns"][] = "state_id";
$proto83["m_columns"][] = "city";
$proto83["m_columns"][] = "zip";
$proto83["m_columns"][] = "address1";
$proto83["m_columns"][] = "address2";
$proto83["m_columns"][] = "address3";
$proto83["m_columns"][] = "date_add";
$proto83["m_columns"][] = "date_last_login";
$proto83["m_columns"][] = "ip_add";
$proto83["m_columns"][] = "ip_update";
$proto83["m_columns"][] = "language_id";
$proto83["m_columns"][] = "image_url";
$proto83["m_columns"][] = "age_id";
$proto83["m_columns"][] = "gender_id";
$proto83["m_columns"][] = "education_id";
$proto83["m_columns"][] = "income_id";
$proto83["m_columns"][] = "user_SSN";
$proto83["m_columns"][] = "total_purchase";
$proto83["m_columns"][] = "tatal_sales";
$proto83["m_columns"][] = "template";
$proto83["m_columns"][] = "cw_task_id";
$proto83["m_columns"][] = "cw_TO_id";
$proto83["m_columns"][] = "label_print_now";
$proto83["m_columns"][] = "dept_group_id";
$obj = new SQLTable($proto83);

$proto82["m_table"] = $obj;
$proto82["m_sql"] = "users";
$proto82["m_alias"] = "";
$proto82["m_srcTableName"] = "admin_members";
$proto84=array();
$proto84["m_sql"] = "";
$proto84["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto84["m_column"]=$obj;
$proto84["m_contained"] = array();
$proto84["m_strCase"] = "";
$proto84["m_havingmode"] = false;
$proto84["m_inBrackets"] = false;
$proto84["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto84);

$proto82["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto82);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="admin_members";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_members = createSqlQuery_admin_members();


	
		;

																																						

$tdataadmin_members[".sqlquery"] = $queryData_admin_members;

$tableEvents["admin_members"] = new eventsBase;
$tdataadmin_members[".hasEvents"] = false;

?>