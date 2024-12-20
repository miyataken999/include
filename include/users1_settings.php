<?php
require_once(getabspath("classes/cipherer.php"));




$tdatausers1 = array();
	$tdatausers1[".truncateText"] = true;
	$tdatausers1[".NumberOfChars"] = 80;
	$tdatausers1[".ShortName"] = "users1";
	$tdatausers1[".OwnerID"] = "";
	$tdatausers1[".OriginalTable"] = "users1";

//	field labels
$fieldLabelsusers1 = array();
$fieldToolTipsusers1 = array();
$pageTitlesusers1 = array();
$placeHoldersusers1 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsusers1["Japanese"] = array();
	$fieldToolTipsusers1["Japanese"] = array();
	$placeHoldersusers1["Japanese"] = array();
	$pageTitlesusers1["Japanese"] = array();
	$fieldLabelsusers1["Japanese"]["user_id"] = "User Id";
	$fieldToolTipsusers1["Japanese"]["user_id"] = "";
	$placeHoldersusers1["Japanese"]["user_id"] = "";
	$fieldLabelsusers1["Japanese"]["user_login"] = "User Login";
	$fieldToolTipsusers1["Japanese"]["user_login"] = "";
	$placeHoldersusers1["Japanese"]["user_login"] = "";
	$fieldLabelsusers1["Japanese"]["user_password"] = "User Password";
	$fieldToolTipsusers1["Japanese"]["user_password"] = "";
	$placeHoldersusers1["Japanese"]["user_password"] = "";
	$fieldLabelsusers1["Japanese"]["first_name"] = "First Name";
	$fieldToolTipsusers1["Japanese"]["first_name"] = "";
	$placeHoldersusers1["Japanese"]["first_name"] = "";
	$fieldLabelsusers1["Japanese"]["last_name"] = "Last Name";
	$fieldToolTipsusers1["Japanese"]["last_name"] = "";
	$placeHoldersusers1["Japanese"]["last_name"] = "";
	$fieldLabelsusers1["Japanese"]["title"] = "Title";
	$fieldToolTipsusers1["Japanese"]["title"] = "";
	$placeHoldersusers1["Japanese"]["title"] = "";
	$fieldLabelsusers1["Japanese"]["group_id"] = "Group Id";
	$fieldToolTipsusers1["Japanese"]["group_id"] = "";
	$placeHoldersusers1["Japanese"]["group_id"] = "";
	$fieldLabelsusers1["Japanese"]["phone_home"] = "Phone Home";
	$fieldToolTipsusers1["Japanese"]["phone_home"] = "";
	$placeHoldersusers1["Japanese"]["phone_home"] = "";
	$fieldLabelsusers1["Japanese"]["phone_work"] = "Phone Work";
	$fieldToolTipsusers1["Japanese"]["phone_work"] = "";
	$placeHoldersusers1["Japanese"]["phone_work"] = "";
	$fieldLabelsusers1["Japanese"]["phone_day"] = "Phone Day";
	$fieldToolTipsusers1["Japanese"]["phone_day"] = "";
	$placeHoldersusers1["Japanese"]["phone_day"] = "";
	$fieldLabelsusers1["Japanese"]["phone_cell"] = "Phone Cell";
	$fieldToolTipsusers1["Japanese"]["phone_cell"] = "";
	$placeHoldersusers1["Japanese"]["phone_cell"] = "";
	$fieldLabelsusers1["Japanese"]["phone_evening"] = "Phone Evening";
	$fieldToolTipsusers1["Japanese"]["phone_evening"] = "";
	$placeHoldersusers1["Japanese"]["phone_evening"] = "";
	$fieldLabelsusers1["Japanese"]["fax"] = "Fax";
	$fieldToolTipsusers1["Japanese"]["fax"] = "";
	$placeHoldersusers1["Japanese"]["fax"] = "";
	$fieldLabelsusers1["Japanese"]["email"] = "Email";
	$fieldToolTipsusers1["Japanese"]["email"] = "";
	$placeHoldersusers1["Japanese"]["email"] = "";
	$fieldLabelsusers1["Japanese"]["notes"] = "Notes";
	$fieldToolTipsusers1["Japanese"]["notes"] = "";
	$placeHoldersusers1["Japanese"]["notes"] = "";
	$fieldLabelsusers1["Japanese"]["card_number"] = "Card Number";
	$fieldToolTipsusers1["Japanese"]["card_number"] = "";
	$placeHoldersusers1["Japanese"]["card_number"] = "";
	$fieldLabelsusers1["Japanese"]["card_expire_date"] = "Card Expire Date";
	$fieldToolTipsusers1["Japanese"]["card_expire_date"] = "";
	$placeHoldersusers1["Japanese"]["card_expire_date"] = "";
	$fieldLabelsusers1["Japanese"]["country_id"] = "Country Id";
	$fieldToolTipsusers1["Japanese"]["country_id"] = "";
	$placeHoldersusers1["Japanese"]["country_id"] = "";
	$fieldLabelsusers1["Japanese"]["state_id"] = "State Id";
	$fieldToolTipsusers1["Japanese"]["state_id"] = "";
	$placeHoldersusers1["Japanese"]["state_id"] = "";
	$fieldLabelsusers1["Japanese"]["city"] = "City";
	$fieldToolTipsusers1["Japanese"]["city"] = "";
	$placeHoldersusers1["Japanese"]["city"] = "";
	$fieldLabelsusers1["Japanese"]["zip"] = "Zip";
	$fieldToolTipsusers1["Japanese"]["zip"] = "";
	$placeHoldersusers1["Japanese"]["zip"] = "";
	$fieldLabelsusers1["Japanese"]["address1"] = "Address1";
	$fieldToolTipsusers1["Japanese"]["address1"] = "";
	$placeHoldersusers1["Japanese"]["address1"] = "";
	$fieldLabelsusers1["Japanese"]["address2"] = "Address2";
	$fieldToolTipsusers1["Japanese"]["address2"] = "";
	$placeHoldersusers1["Japanese"]["address2"] = "";
	$fieldLabelsusers1["Japanese"]["address3"] = "Address3";
	$fieldToolTipsusers1["Japanese"]["address3"] = "";
	$placeHoldersusers1["Japanese"]["address3"] = "";
	$fieldLabelsusers1["Japanese"]["date_add"] = "Date Add";
	$fieldToolTipsusers1["Japanese"]["date_add"] = "";
	$placeHoldersusers1["Japanese"]["date_add"] = "";
	$fieldLabelsusers1["Japanese"]["date_last_login"] = "Date Last Login";
	$fieldToolTipsusers1["Japanese"]["date_last_login"] = "";
	$placeHoldersusers1["Japanese"]["date_last_login"] = "";
	$fieldLabelsusers1["Japanese"]["ip_add"] = "Ip Add";
	$fieldToolTipsusers1["Japanese"]["ip_add"] = "";
	$placeHoldersusers1["Japanese"]["ip_add"] = "";
	$fieldLabelsusers1["Japanese"]["ip_update"] = "Ip Update";
	$fieldToolTipsusers1["Japanese"]["ip_update"] = "";
	$placeHoldersusers1["Japanese"]["ip_update"] = "";
	$fieldLabelsusers1["Japanese"]["language_id"] = "Language Id";
	$fieldToolTipsusers1["Japanese"]["language_id"] = "";
	$placeHoldersusers1["Japanese"]["language_id"] = "";
	$fieldLabelsusers1["Japanese"]["image_url"] = "Image Url";
	$fieldToolTipsusers1["Japanese"]["image_url"] = "";
	$placeHoldersusers1["Japanese"]["image_url"] = "";
	$fieldLabelsusers1["Japanese"]["age_id"] = "Age Id";
	$fieldToolTipsusers1["Japanese"]["age_id"] = "";
	$placeHoldersusers1["Japanese"]["age_id"] = "";
	$fieldLabelsusers1["Japanese"]["gender_id"] = "Gender Id";
	$fieldToolTipsusers1["Japanese"]["gender_id"] = "";
	$placeHoldersusers1["Japanese"]["gender_id"] = "";
	$fieldLabelsusers1["Japanese"]["education_id"] = "Education Id";
	$fieldToolTipsusers1["Japanese"]["education_id"] = "";
	$placeHoldersusers1["Japanese"]["education_id"] = "";
	$fieldLabelsusers1["Japanese"]["income_id"] = "Income Id";
	$fieldToolTipsusers1["Japanese"]["income_id"] = "";
	$placeHoldersusers1["Japanese"]["income_id"] = "";
	$fieldLabelsusers1["Japanese"]["user_SSN"] = "User SSN";
	$fieldToolTipsusers1["Japanese"]["user_SSN"] = "";
	$placeHoldersusers1["Japanese"]["user_SSN"] = "";
	$fieldLabelsusers1["Japanese"]["total_purchase"] = "Total Purchase";
	$fieldToolTipsusers1["Japanese"]["total_purchase"] = "";
	$placeHoldersusers1["Japanese"]["total_purchase"] = "";
	$fieldLabelsusers1["Japanese"]["tatal_sales"] = "Tatal Sales";
	$fieldToolTipsusers1["Japanese"]["tatal_sales"] = "";
	$placeHoldersusers1["Japanese"]["tatal_sales"] = "";
	$fieldLabelsusers1["Japanese"]["template"] = "Template";
	$fieldToolTipsusers1["Japanese"]["template"] = "";
	$placeHoldersusers1["Japanese"]["template"] = "";
	if (count($fieldToolTipsusers1["Japanese"]))
		$tdatausers1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsusers1[""] = array();
	$fieldToolTipsusers1[""] = array();
	$placeHoldersusers1[""] = array();
	$pageTitlesusers1[""] = array();
	if (count($fieldToolTipsusers1[""]))
		$tdatausers1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusers1["English"] = array();
	$fieldToolTipsusers1["English"] = array();
	$placeHoldersusers1["English"] = array();
	$pageTitlesusers1["English"] = array();
	if (count($fieldToolTipsusers1["English"]))
		$tdatausers1[".isUseToolTips"] = true;
}


	$tdatausers1[".NCSearch"] = true;



$tdatausers1[".shortTableName"] = "users1";
$tdatausers1[".nSecOptions"] = 0;
$tdatausers1[".recsPerRowPrint"] = 1;
$tdatausers1[".mainTableOwnerID"] = "";
$tdatausers1[".moveNext"] = 1;
$tdatausers1[".entityType"] = 0;

$tdatausers1[".strOriginalTableName"] = "users1";





$tdatausers1[".showAddInPopup"] = false;

$tdatausers1[".showEditInPopup"] = false;

$tdatausers1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausers1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausers1[".fieldsForRegister"] = array();

$tdatausers1[".listAjax"] = false;

	$tdatausers1[".audit"] = false;

	$tdatausers1[".locking"] = false;






$tdatausers1[".reorderRecordsByHeader"] = true;








$tdatausers1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatausers1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatausers1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatausers1[".searchSaving"] = false;
//

$tdatausers1[".showSearchPanel"] = true;
		$tdatausers1[".flexibleSearch"] = true;

$tdatausers1[".isUseAjaxSuggest"] = true;

$tdatausers1[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatausers1[".ajaxCodeSnippetAdded"] = false;

$tdatausers1[".buttonsAdded"] = false;

$tdatausers1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausers1[".isUseTimeForSearch"] = false;





$tdatausers1[".allSearchFields"] = array();
$tdatausers1[".filterFields"] = array();
$tdatausers1[".requiredSearchFields"] = array();



$tdatausers1[".googleLikeFields"] = array();
$tdatausers1[".googleLikeFields"][] = "user_id";
$tdatausers1[".googleLikeFields"][] = "user_login";
$tdatausers1[".googleLikeFields"][] = "user_password";
$tdatausers1[".googleLikeFields"][] = "first_name";
$tdatausers1[".googleLikeFields"][] = "last_name";
$tdatausers1[".googleLikeFields"][] = "title";
$tdatausers1[".googleLikeFields"][] = "group_id";
$tdatausers1[".googleLikeFields"][] = "phone_home";
$tdatausers1[".googleLikeFields"][] = "phone_work";
$tdatausers1[".googleLikeFields"][] = "phone_day";
$tdatausers1[".googleLikeFields"][] = "phone_cell";
$tdatausers1[".googleLikeFields"][] = "phone_evening";
$tdatausers1[".googleLikeFields"][] = "fax";
$tdatausers1[".googleLikeFields"][] = "email";
$tdatausers1[".googleLikeFields"][] = "notes";
$tdatausers1[".googleLikeFields"][] = "card_number";
$tdatausers1[".googleLikeFields"][] = "card_expire_date";
$tdatausers1[".googleLikeFields"][] = "country_id";
$tdatausers1[".googleLikeFields"][] = "state_id";
$tdatausers1[".googleLikeFields"][] = "city";
$tdatausers1[".googleLikeFields"][] = "zip";
$tdatausers1[".googleLikeFields"][] = "address1";
$tdatausers1[".googleLikeFields"][] = "address2";
$tdatausers1[".googleLikeFields"][] = "address3";
$tdatausers1[".googleLikeFields"][] = "date_add";
$tdatausers1[".googleLikeFields"][] = "date_last_login";
$tdatausers1[".googleLikeFields"][] = "ip_add";
$tdatausers1[".googleLikeFields"][] = "ip_update";
$tdatausers1[".googleLikeFields"][] = "language_id";
$tdatausers1[".googleLikeFields"][] = "image_url";
$tdatausers1[".googleLikeFields"][] = "age_id";
$tdatausers1[".googleLikeFields"][] = "gender_id";
$tdatausers1[".googleLikeFields"][] = "education_id";
$tdatausers1[".googleLikeFields"][] = "income_id";
$tdatausers1[".googleLikeFields"][] = "user_SSN";
$tdatausers1[".googleLikeFields"][] = "total_purchase";
$tdatausers1[".googleLikeFields"][] = "tatal_sales";
$tdatausers1[".googleLikeFields"][] = "template";



$tdatausers1[".tableType"] = "list";

$tdatausers1[".printerPageOrientation"] = 0;
$tdatausers1[".nPrinterPageScale"] = 100;

$tdatausers1[".nPrinterSplitRecords"] = 40;

$tdatausers1[".nPrinterPDFSplitRecords"] = 40;



$tdatausers1[".geocodingEnabled"] = false;





$tdatausers1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatausers1[".pageSize"] = 20;

$tdatausers1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausers1[".strOrderBy"] = $tstrOrderBy;

$tdatausers1[".orderindexes"] = array();

$tdatausers1[".sqlHead"] = "SELECT user_id,  	user_login,  	user_password,  	first_name,  	last_name,  	title,  	group_id,  	phone_home,  	phone_work,  	phone_day,  	phone_cell,  	phone_evening,  	fax,  	email,  	notes,  	card_number,  	card_expire_date,  	country_id,  	state_id,  	city,  	zip,  	address1,  	address2,  	address3,  	date_add,  	date_last_login,  	ip_add,  	ip_update,  	language_id,  	image_url,  	age_id,  	gender_id,  	education_id,  	income_id,  	user_SSN,  	total_purchase,  	tatal_sales,  	template";
$tdatausers1[".sqlFrom"] = "FROM users1";
$tdatausers1[".sqlWhereExpr"] = "";
$tdatausers1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausers1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausers1[".arrGroupsPerPage"] = $arrGPP;

$tdatausers1[".highlightSearchResults"] = true;

$tableKeysusers1 = array();
$tableKeysusers1[] = "user_id";
$tdatausers1[".Keys"] = $tableKeysusers1;

$tdatausers1[".listFields"] = array();
$tdatausers1[".listFields"][] = "user_id";
$tdatausers1[".listFields"][] = "user_login";
$tdatausers1[".listFields"][] = "user_password";
$tdatausers1[".listFields"][] = "first_name";
$tdatausers1[".listFields"][] = "last_name";
$tdatausers1[".listFields"][] = "title";
$tdatausers1[".listFields"][] = "group_id";
$tdatausers1[".listFields"][] = "phone_home";
$tdatausers1[".listFields"][] = "phone_work";
$tdatausers1[".listFields"][] = "phone_day";
$tdatausers1[".listFields"][] = "phone_cell";
$tdatausers1[".listFields"][] = "phone_evening";
$tdatausers1[".listFields"][] = "fax";
$tdatausers1[".listFields"][] = "email";
$tdatausers1[".listFields"][] = "notes";
$tdatausers1[".listFields"][] = "card_number";
$tdatausers1[".listFields"][] = "card_expire_date";
$tdatausers1[".listFields"][] = "country_id";
$tdatausers1[".listFields"][] = "state_id";
$tdatausers1[".listFields"][] = "city";
$tdatausers1[".listFields"][] = "zip";
$tdatausers1[".listFields"][] = "address1";
$tdatausers1[".listFields"][] = "address2";
$tdatausers1[".listFields"][] = "address3";
$tdatausers1[".listFields"][] = "date_add";
$tdatausers1[".listFields"][] = "date_last_login";
$tdatausers1[".listFields"][] = "ip_add";
$tdatausers1[".listFields"][] = "ip_update";
$tdatausers1[".listFields"][] = "language_id";
$tdatausers1[".listFields"][] = "image_url";
$tdatausers1[".listFields"][] = "age_id";
$tdatausers1[".listFields"][] = "gender_id";
$tdatausers1[".listFields"][] = "education_id";
$tdatausers1[".listFields"][] = "income_id";
$tdatausers1[".listFields"][] = "user_SSN";
$tdatausers1[".listFields"][] = "total_purchase";
$tdatausers1[".listFields"][] = "tatal_sales";
$tdatausers1[".listFields"][] = "template";

$tdatausers1[".hideMobileList"] = array();


$tdatausers1[".viewFields"] = array();
$tdatausers1[".viewFields"][] = "user_id";
$tdatausers1[".viewFields"][] = "user_login";
$tdatausers1[".viewFields"][] = "user_password";
$tdatausers1[".viewFields"][] = "first_name";
$tdatausers1[".viewFields"][] = "last_name";
$tdatausers1[".viewFields"][] = "title";
$tdatausers1[".viewFields"][] = "group_id";
$tdatausers1[".viewFields"][] = "phone_home";
$tdatausers1[".viewFields"][] = "phone_work";
$tdatausers1[".viewFields"][] = "phone_day";
$tdatausers1[".viewFields"][] = "phone_cell";
$tdatausers1[".viewFields"][] = "phone_evening";
$tdatausers1[".viewFields"][] = "fax";
$tdatausers1[".viewFields"][] = "email";
$tdatausers1[".viewFields"][] = "notes";
$tdatausers1[".viewFields"][] = "card_number";
$tdatausers1[".viewFields"][] = "card_expire_date";
$tdatausers1[".viewFields"][] = "country_id";
$tdatausers1[".viewFields"][] = "state_id";
$tdatausers1[".viewFields"][] = "city";
$tdatausers1[".viewFields"][] = "zip";
$tdatausers1[".viewFields"][] = "address1";
$tdatausers1[".viewFields"][] = "address2";
$tdatausers1[".viewFields"][] = "address3";
$tdatausers1[".viewFields"][] = "date_add";
$tdatausers1[".viewFields"][] = "date_last_login";
$tdatausers1[".viewFields"][] = "ip_add";
$tdatausers1[".viewFields"][] = "ip_update";
$tdatausers1[".viewFields"][] = "language_id";
$tdatausers1[".viewFields"][] = "image_url";
$tdatausers1[".viewFields"][] = "age_id";
$tdatausers1[".viewFields"][] = "gender_id";
$tdatausers1[".viewFields"][] = "education_id";
$tdatausers1[".viewFields"][] = "income_id";
$tdatausers1[".viewFields"][] = "user_SSN";
$tdatausers1[".viewFields"][] = "total_purchase";
$tdatausers1[".viewFields"][] = "tatal_sales";
$tdatausers1[".viewFields"][] = "template";

$tdatausers1[".addFields"] = array();
$tdatausers1[".addFields"][] = "user_login";
$tdatausers1[".addFields"][] = "user_password";
$tdatausers1[".addFields"][] = "first_name";
$tdatausers1[".addFields"][] = "last_name";
$tdatausers1[".addFields"][] = "title";
$tdatausers1[".addFields"][] = "group_id";
$tdatausers1[".addFields"][] = "phone_home";
$tdatausers1[".addFields"][] = "phone_work";
$tdatausers1[".addFields"][] = "phone_day";
$tdatausers1[".addFields"][] = "phone_cell";
$tdatausers1[".addFields"][] = "phone_evening";
$tdatausers1[".addFields"][] = "fax";
$tdatausers1[".addFields"][] = "email";
$tdatausers1[".addFields"][] = "notes";
$tdatausers1[".addFields"][] = "card_number";
$tdatausers1[".addFields"][] = "card_expire_date";
$tdatausers1[".addFields"][] = "country_id";
$tdatausers1[".addFields"][] = "state_id";
$tdatausers1[".addFields"][] = "city";
$tdatausers1[".addFields"][] = "zip";
$tdatausers1[".addFields"][] = "address1";
$tdatausers1[".addFields"][] = "address2";
$tdatausers1[".addFields"][] = "address3";
$tdatausers1[".addFields"][] = "date_add";
$tdatausers1[".addFields"][] = "date_last_login";
$tdatausers1[".addFields"][] = "ip_add";
$tdatausers1[".addFields"][] = "ip_update";
$tdatausers1[".addFields"][] = "language_id";
$tdatausers1[".addFields"][] = "image_url";
$tdatausers1[".addFields"][] = "age_id";
$tdatausers1[".addFields"][] = "gender_id";
$tdatausers1[".addFields"][] = "education_id";
$tdatausers1[".addFields"][] = "income_id";
$tdatausers1[".addFields"][] = "user_SSN";
$tdatausers1[".addFields"][] = "total_purchase";
$tdatausers1[".addFields"][] = "tatal_sales";
$tdatausers1[".addFields"][] = "template";

$tdatausers1[".masterListFields"] = array();
$tdatausers1[".masterListFields"][] = "user_id";
$tdatausers1[".masterListFields"][] = "user_login";
$tdatausers1[".masterListFields"][] = "user_password";
$tdatausers1[".masterListFields"][] = "first_name";
$tdatausers1[".masterListFields"][] = "last_name";
$tdatausers1[".masterListFields"][] = "title";
$tdatausers1[".masterListFields"][] = "group_id";
$tdatausers1[".masterListFields"][] = "phone_home";
$tdatausers1[".masterListFields"][] = "phone_work";
$tdatausers1[".masterListFields"][] = "phone_day";
$tdatausers1[".masterListFields"][] = "phone_cell";
$tdatausers1[".masterListFields"][] = "phone_evening";
$tdatausers1[".masterListFields"][] = "fax";
$tdatausers1[".masterListFields"][] = "email";
$tdatausers1[".masterListFields"][] = "notes";
$tdatausers1[".masterListFields"][] = "card_number";
$tdatausers1[".masterListFields"][] = "card_expire_date";
$tdatausers1[".masterListFields"][] = "country_id";
$tdatausers1[".masterListFields"][] = "state_id";
$tdatausers1[".masterListFields"][] = "city";
$tdatausers1[".masterListFields"][] = "zip";
$tdatausers1[".masterListFields"][] = "address1";
$tdatausers1[".masterListFields"][] = "address2";
$tdatausers1[".masterListFields"][] = "address3";
$tdatausers1[".masterListFields"][] = "date_add";
$tdatausers1[".masterListFields"][] = "date_last_login";
$tdatausers1[".masterListFields"][] = "ip_add";
$tdatausers1[".masterListFields"][] = "ip_update";
$tdatausers1[".masterListFields"][] = "language_id";
$tdatausers1[".masterListFields"][] = "image_url";
$tdatausers1[".masterListFields"][] = "age_id";
$tdatausers1[".masterListFields"][] = "gender_id";
$tdatausers1[".masterListFields"][] = "education_id";
$tdatausers1[".masterListFields"][] = "income_id";
$tdatausers1[".masterListFields"][] = "user_SSN";
$tdatausers1[".masterListFields"][] = "total_purchase";
$tdatausers1[".masterListFields"][] = "tatal_sales";
$tdatausers1[".masterListFields"][] = "template";

$tdatausers1[".inlineAddFields"] = array();
$tdatausers1[".inlineAddFields"][] = "user_login";
$tdatausers1[".inlineAddFields"][] = "user_password";
$tdatausers1[".inlineAddFields"][] = "first_name";
$tdatausers1[".inlineAddFields"][] = "last_name";
$tdatausers1[".inlineAddFields"][] = "title";
$tdatausers1[".inlineAddFields"][] = "group_id";
$tdatausers1[".inlineAddFields"][] = "phone_home";
$tdatausers1[".inlineAddFields"][] = "phone_work";
$tdatausers1[".inlineAddFields"][] = "phone_day";
$tdatausers1[".inlineAddFields"][] = "phone_cell";
$tdatausers1[".inlineAddFields"][] = "phone_evening";
$tdatausers1[".inlineAddFields"][] = "fax";
$tdatausers1[".inlineAddFields"][] = "email";
$tdatausers1[".inlineAddFields"][] = "notes";
$tdatausers1[".inlineAddFields"][] = "card_number";
$tdatausers1[".inlineAddFields"][] = "card_expire_date";
$tdatausers1[".inlineAddFields"][] = "country_id";
$tdatausers1[".inlineAddFields"][] = "state_id";
$tdatausers1[".inlineAddFields"][] = "city";
$tdatausers1[".inlineAddFields"][] = "zip";
$tdatausers1[".inlineAddFields"][] = "address1";
$tdatausers1[".inlineAddFields"][] = "address2";
$tdatausers1[".inlineAddFields"][] = "address3";
$tdatausers1[".inlineAddFields"][] = "date_add";
$tdatausers1[".inlineAddFields"][] = "date_last_login";
$tdatausers1[".inlineAddFields"][] = "ip_add";
$tdatausers1[".inlineAddFields"][] = "ip_update";
$tdatausers1[".inlineAddFields"][] = "language_id";
$tdatausers1[".inlineAddFields"][] = "image_url";
$tdatausers1[".inlineAddFields"][] = "age_id";
$tdatausers1[".inlineAddFields"][] = "gender_id";
$tdatausers1[".inlineAddFields"][] = "education_id";
$tdatausers1[".inlineAddFields"][] = "income_id";
$tdatausers1[".inlineAddFields"][] = "user_SSN";
$tdatausers1[".inlineAddFields"][] = "total_purchase";
$tdatausers1[".inlineAddFields"][] = "tatal_sales";
$tdatausers1[".inlineAddFields"][] = "template";

$tdatausers1[".editFields"] = array();
$tdatausers1[".editFields"][] = "user_login";
$tdatausers1[".editFields"][] = "user_password";
$tdatausers1[".editFields"][] = "first_name";
$tdatausers1[".editFields"][] = "last_name";
$tdatausers1[".editFields"][] = "title";
$tdatausers1[".editFields"][] = "group_id";
$tdatausers1[".editFields"][] = "phone_home";
$tdatausers1[".editFields"][] = "phone_work";
$tdatausers1[".editFields"][] = "phone_day";
$tdatausers1[".editFields"][] = "phone_cell";
$tdatausers1[".editFields"][] = "phone_evening";
$tdatausers1[".editFields"][] = "fax";
$tdatausers1[".editFields"][] = "email";
$tdatausers1[".editFields"][] = "notes";
$tdatausers1[".editFields"][] = "card_number";
$tdatausers1[".editFields"][] = "card_expire_date";
$tdatausers1[".editFields"][] = "country_id";
$tdatausers1[".editFields"][] = "state_id";
$tdatausers1[".editFields"][] = "city";
$tdatausers1[".editFields"][] = "zip";
$tdatausers1[".editFields"][] = "address1";
$tdatausers1[".editFields"][] = "address2";
$tdatausers1[".editFields"][] = "address3";
$tdatausers1[".editFields"][] = "date_add";
$tdatausers1[".editFields"][] = "date_last_login";
$tdatausers1[".editFields"][] = "ip_add";
$tdatausers1[".editFields"][] = "ip_update";
$tdatausers1[".editFields"][] = "language_id";
$tdatausers1[".editFields"][] = "image_url";
$tdatausers1[".editFields"][] = "age_id";
$tdatausers1[".editFields"][] = "gender_id";
$tdatausers1[".editFields"][] = "education_id";
$tdatausers1[".editFields"][] = "income_id";
$tdatausers1[".editFields"][] = "user_SSN";
$tdatausers1[".editFields"][] = "total_purchase";
$tdatausers1[".editFields"][] = "tatal_sales";
$tdatausers1[".editFields"][] = "template";

$tdatausers1[".inlineEditFields"] = array();
$tdatausers1[".inlineEditFields"][] = "user_login";
$tdatausers1[".inlineEditFields"][] = "user_password";
$tdatausers1[".inlineEditFields"][] = "first_name";
$tdatausers1[".inlineEditFields"][] = "last_name";
$tdatausers1[".inlineEditFields"][] = "title";
$tdatausers1[".inlineEditFields"][] = "group_id";
$tdatausers1[".inlineEditFields"][] = "phone_home";
$tdatausers1[".inlineEditFields"][] = "phone_work";
$tdatausers1[".inlineEditFields"][] = "phone_day";
$tdatausers1[".inlineEditFields"][] = "phone_cell";
$tdatausers1[".inlineEditFields"][] = "phone_evening";
$tdatausers1[".inlineEditFields"][] = "fax";
$tdatausers1[".inlineEditFields"][] = "email";
$tdatausers1[".inlineEditFields"][] = "notes";
$tdatausers1[".inlineEditFields"][] = "card_number";
$tdatausers1[".inlineEditFields"][] = "card_expire_date";
$tdatausers1[".inlineEditFields"][] = "country_id";
$tdatausers1[".inlineEditFields"][] = "state_id";
$tdatausers1[".inlineEditFields"][] = "city";
$tdatausers1[".inlineEditFields"][] = "zip";
$tdatausers1[".inlineEditFields"][] = "address1";
$tdatausers1[".inlineEditFields"][] = "address2";
$tdatausers1[".inlineEditFields"][] = "address3";
$tdatausers1[".inlineEditFields"][] = "date_add";
$tdatausers1[".inlineEditFields"][] = "date_last_login";
$tdatausers1[".inlineEditFields"][] = "ip_add";
$tdatausers1[".inlineEditFields"][] = "ip_update";
$tdatausers1[".inlineEditFields"][] = "language_id";
$tdatausers1[".inlineEditFields"][] = "image_url";
$tdatausers1[".inlineEditFields"][] = "age_id";
$tdatausers1[".inlineEditFields"][] = "gender_id";
$tdatausers1[".inlineEditFields"][] = "education_id";
$tdatausers1[".inlineEditFields"][] = "income_id";
$tdatausers1[".inlineEditFields"][] = "user_SSN";
$tdatausers1[".inlineEditFields"][] = "total_purchase";
$tdatausers1[".inlineEditFields"][] = "tatal_sales";
$tdatausers1[".inlineEditFields"][] = "template";

$tdatausers1[".updateSelectedFields"] = array();
$tdatausers1[".updateSelectedFields"][] = "user_login";
$tdatausers1[".updateSelectedFields"][] = "user_password";
$tdatausers1[".updateSelectedFields"][] = "first_name";
$tdatausers1[".updateSelectedFields"][] = "last_name";
$tdatausers1[".updateSelectedFields"][] = "title";
$tdatausers1[".updateSelectedFields"][] = "group_id";
$tdatausers1[".updateSelectedFields"][] = "phone_home";
$tdatausers1[".updateSelectedFields"][] = "phone_work";
$tdatausers1[".updateSelectedFields"][] = "phone_day";
$tdatausers1[".updateSelectedFields"][] = "phone_cell";
$tdatausers1[".updateSelectedFields"][] = "phone_evening";
$tdatausers1[".updateSelectedFields"][] = "fax";
$tdatausers1[".updateSelectedFields"][] = "email";
$tdatausers1[".updateSelectedFields"][] = "notes";
$tdatausers1[".updateSelectedFields"][] = "card_number";
$tdatausers1[".updateSelectedFields"][] = "card_expire_date";
$tdatausers1[".updateSelectedFields"][] = "country_id";
$tdatausers1[".updateSelectedFields"][] = "state_id";
$tdatausers1[".updateSelectedFields"][] = "city";
$tdatausers1[".updateSelectedFields"][] = "zip";
$tdatausers1[".updateSelectedFields"][] = "address1";
$tdatausers1[".updateSelectedFields"][] = "address2";
$tdatausers1[".updateSelectedFields"][] = "address3";
$tdatausers1[".updateSelectedFields"][] = "date_add";
$tdatausers1[".updateSelectedFields"][] = "date_last_login";
$tdatausers1[".updateSelectedFields"][] = "ip_add";
$tdatausers1[".updateSelectedFields"][] = "ip_update";
$tdatausers1[".updateSelectedFields"][] = "language_id";
$tdatausers1[".updateSelectedFields"][] = "image_url";
$tdatausers1[".updateSelectedFields"][] = "age_id";
$tdatausers1[".updateSelectedFields"][] = "gender_id";
$tdatausers1[".updateSelectedFields"][] = "education_id";
$tdatausers1[".updateSelectedFields"][] = "income_id";
$tdatausers1[".updateSelectedFields"][] = "user_SSN";
$tdatausers1[".updateSelectedFields"][] = "total_purchase";
$tdatausers1[".updateSelectedFields"][] = "tatal_sales";
$tdatausers1[".updateSelectedFields"][] = "template";


$tdatausers1[".exportFields"] = array();
$tdatausers1[".exportFields"][] = "user_id";
$tdatausers1[".exportFields"][] = "user_login";
$tdatausers1[".exportFields"][] = "user_password";
$tdatausers1[".exportFields"][] = "first_name";
$tdatausers1[".exportFields"][] = "last_name";
$tdatausers1[".exportFields"][] = "title";
$tdatausers1[".exportFields"][] = "group_id";
$tdatausers1[".exportFields"][] = "phone_home";
$tdatausers1[".exportFields"][] = "phone_work";
$tdatausers1[".exportFields"][] = "phone_day";
$tdatausers1[".exportFields"][] = "phone_cell";
$tdatausers1[".exportFields"][] = "phone_evening";
$tdatausers1[".exportFields"][] = "fax";
$tdatausers1[".exportFields"][] = "email";
$tdatausers1[".exportFields"][] = "notes";
$tdatausers1[".exportFields"][] = "card_number";
$tdatausers1[".exportFields"][] = "card_expire_date";
$tdatausers1[".exportFields"][] = "country_id";
$tdatausers1[".exportFields"][] = "state_id";
$tdatausers1[".exportFields"][] = "city";
$tdatausers1[".exportFields"][] = "zip";
$tdatausers1[".exportFields"][] = "address1";
$tdatausers1[".exportFields"][] = "address2";
$tdatausers1[".exportFields"][] = "address3";
$tdatausers1[".exportFields"][] = "date_add";
$tdatausers1[".exportFields"][] = "date_last_login";
$tdatausers1[".exportFields"][] = "ip_add";
$tdatausers1[".exportFields"][] = "ip_update";
$tdatausers1[".exportFields"][] = "language_id";
$tdatausers1[".exportFields"][] = "image_url";
$tdatausers1[".exportFields"][] = "age_id";
$tdatausers1[".exportFields"][] = "gender_id";
$tdatausers1[".exportFields"][] = "education_id";
$tdatausers1[".exportFields"][] = "income_id";
$tdatausers1[".exportFields"][] = "user_SSN";
$tdatausers1[".exportFields"][] = "total_purchase";
$tdatausers1[".exportFields"][] = "tatal_sales";
$tdatausers1[".exportFields"][] = "template";

$tdatausers1[".importFields"] = array();
$tdatausers1[".importFields"][] = "user_id";
$tdatausers1[".importFields"][] = "user_login";
$tdatausers1[".importFields"][] = "user_password";
$tdatausers1[".importFields"][] = "first_name";
$tdatausers1[".importFields"][] = "last_name";
$tdatausers1[".importFields"][] = "title";
$tdatausers1[".importFields"][] = "group_id";
$tdatausers1[".importFields"][] = "phone_home";
$tdatausers1[".importFields"][] = "phone_work";
$tdatausers1[".importFields"][] = "phone_day";
$tdatausers1[".importFields"][] = "phone_cell";
$tdatausers1[".importFields"][] = "phone_evening";
$tdatausers1[".importFields"][] = "fax";
$tdatausers1[".importFields"][] = "email";
$tdatausers1[".importFields"][] = "notes";
$tdatausers1[".importFields"][] = "card_number";
$tdatausers1[".importFields"][] = "card_expire_date";
$tdatausers1[".importFields"][] = "country_id";
$tdatausers1[".importFields"][] = "state_id";
$tdatausers1[".importFields"][] = "city";
$tdatausers1[".importFields"][] = "zip";
$tdatausers1[".importFields"][] = "address1";
$tdatausers1[".importFields"][] = "address2";
$tdatausers1[".importFields"][] = "address3";
$tdatausers1[".importFields"][] = "date_add";
$tdatausers1[".importFields"][] = "date_last_login";
$tdatausers1[".importFields"][] = "ip_add";
$tdatausers1[".importFields"][] = "ip_update";
$tdatausers1[".importFields"][] = "language_id";
$tdatausers1[".importFields"][] = "image_url";
$tdatausers1[".importFields"][] = "age_id";
$tdatausers1[".importFields"][] = "gender_id";
$tdatausers1[".importFields"][] = "education_id";
$tdatausers1[".importFields"][] = "income_id";
$tdatausers1[".importFields"][] = "user_SSN";
$tdatausers1[".importFields"][] = "total_purchase";
$tdatausers1[".importFields"][] = "tatal_sales";
$tdatausers1[".importFields"][] = "template";

$tdatausers1[".printFields"] = array();
$tdatausers1[".printFields"][] = "user_id";
$tdatausers1[".printFields"][] = "user_login";
$tdatausers1[".printFields"][] = "user_password";
$tdatausers1[".printFields"][] = "first_name";
$tdatausers1[".printFields"][] = "last_name";
$tdatausers1[".printFields"][] = "title";
$tdatausers1[".printFields"][] = "group_id";
$tdatausers1[".printFields"][] = "phone_home";
$tdatausers1[".printFields"][] = "phone_work";
$tdatausers1[".printFields"][] = "phone_day";
$tdatausers1[".printFields"][] = "phone_cell";
$tdatausers1[".printFields"][] = "phone_evening";
$tdatausers1[".printFields"][] = "fax";
$tdatausers1[".printFields"][] = "email";
$tdatausers1[".printFields"][] = "notes";
$tdatausers1[".printFields"][] = "card_number";
$tdatausers1[".printFields"][] = "card_expire_date";
$tdatausers1[".printFields"][] = "country_id";
$tdatausers1[".printFields"][] = "state_id";
$tdatausers1[".printFields"][] = "city";
$tdatausers1[".printFields"][] = "zip";
$tdatausers1[".printFields"][] = "address1";
$tdatausers1[".printFields"][] = "address2";
$tdatausers1[".printFields"][] = "address3";
$tdatausers1[".printFields"][] = "date_add";
$tdatausers1[".printFields"][] = "date_last_login";
$tdatausers1[".printFields"][] = "ip_add";
$tdatausers1[".printFields"][] = "ip_update";
$tdatausers1[".printFields"][] = "language_id";
$tdatausers1[".printFields"][] = "image_url";
$tdatausers1[".printFields"][] = "age_id";
$tdatausers1[".printFields"][] = "gender_id";
$tdatausers1[".printFields"][] = "education_id";
$tdatausers1[".printFields"][] = "income_id";
$tdatausers1[".printFields"][] = "user_SSN";
$tdatausers1[".printFields"][] = "total_purchase";
$tdatausers1[".printFields"][] = "tatal_sales";
$tdatausers1[".printFields"][] = "template";

//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","user_id");
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








	$tdatausers1["user_id"] = $fdata;
//	user_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_login";
	$fdata["GoodName"] = "user_login";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","user_login");
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








	$tdatausers1["user_login"] = $fdata;
//	user_password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "user_password";
	$fdata["GoodName"] = "user_password";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","user_password");
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








	$tdatausers1["user_password"] = $fdata;
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","first_name");
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








	$tdatausers1["first_name"] = $fdata;
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","last_name");
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








	$tdatausers1["last_name"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","title");
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








	$tdatausers1["title"] = $fdata;
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","group_id");
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








	$tdatausers1["group_id"] = $fdata;
//	phone_home
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "phone_home";
	$fdata["GoodName"] = "phone_home";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","phone_home");
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








	$tdatausers1["phone_home"] = $fdata;
//	phone_work
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "phone_work";
	$fdata["GoodName"] = "phone_work";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","phone_work");
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








	$tdatausers1["phone_work"] = $fdata;
//	phone_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "phone_day";
	$fdata["GoodName"] = "phone_day";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","phone_day");
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








	$tdatausers1["phone_day"] = $fdata;
//	phone_cell
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "phone_cell";
	$fdata["GoodName"] = "phone_cell";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","phone_cell");
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








	$tdatausers1["phone_cell"] = $fdata;
//	phone_evening
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "phone_evening";
	$fdata["GoodName"] = "phone_evening";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","phone_evening");
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








	$tdatausers1["phone_evening"] = $fdata;
//	fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "fax";
	$fdata["GoodName"] = "fax";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","fax");
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








	$tdatausers1["fax"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","email");
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








	$tdatausers1["email"] = $fdata;
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","notes");
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








	$tdatausers1["notes"] = $fdata;
//	card_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "card_number";
	$fdata["GoodName"] = "card_number";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","card_number");
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








	$tdatausers1["card_number"] = $fdata;
//	card_expire_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "card_expire_date";
	$fdata["GoodName"] = "card_expire_date";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","card_expire_date");
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








	$tdatausers1["card_expire_date"] = $fdata;
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","country_id");
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








	$tdatausers1["country_id"] = $fdata;
//	state_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "state_id";
	$fdata["GoodName"] = "state_id";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","state_id");
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








	$tdatausers1["state_id"] = $fdata;
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","city");
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








	$tdatausers1["city"] = $fdata;
//	zip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "zip";
	$fdata["GoodName"] = "zip";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","zip");
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








	$tdatausers1["zip"] = $fdata;
//	address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "address1";
	$fdata["GoodName"] = "address1";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","address1");
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








	$tdatausers1["address1"] = $fdata;
//	address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "address2";
	$fdata["GoodName"] = "address2";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","address2");
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








	$tdatausers1["address2"] = $fdata;
//	address3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "address3";
	$fdata["GoodName"] = "address3";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","address3");
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








	$tdatausers1["address3"] = $fdata;
//	date_add
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "date_add";
	$fdata["GoodName"] = "date_add";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","date_add");
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








	$tdatausers1["date_add"] = $fdata;
//	date_last_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "date_last_login";
	$fdata["GoodName"] = "date_last_login";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","date_last_login");
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








	$tdatausers1["date_last_login"] = $fdata;
//	ip_add
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "ip_add";
	$fdata["GoodName"] = "ip_add";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","ip_add");
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








	$tdatausers1["ip_add"] = $fdata;
//	ip_update
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ip_update";
	$fdata["GoodName"] = "ip_update";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","ip_update");
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








	$tdatausers1["ip_update"] = $fdata;
//	language_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "language_id";
	$fdata["GoodName"] = "language_id";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","language_id");
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








	$tdatausers1["language_id"] = $fdata;
//	image_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "image_url";
	$fdata["GoodName"] = "image_url";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","image_url");
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








	$tdatausers1["image_url"] = $fdata;
//	age_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "age_id";
	$fdata["GoodName"] = "age_id";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","age_id");
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








	$tdatausers1["age_id"] = $fdata;
//	gender_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "gender_id";
	$fdata["GoodName"] = "gender_id";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","gender_id");
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








	$tdatausers1["gender_id"] = $fdata;
//	education_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "education_id";
	$fdata["GoodName"] = "education_id";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","education_id");
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








	$tdatausers1["education_id"] = $fdata;
//	income_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "income_id";
	$fdata["GoodName"] = "income_id";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","income_id");
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








	$tdatausers1["income_id"] = $fdata;
//	user_SSN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "user_SSN";
	$fdata["GoodName"] = "user_SSN";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","user_SSN");
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








	$tdatausers1["user_SSN"] = $fdata;
//	total_purchase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "total_purchase";
	$fdata["GoodName"] = "total_purchase";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","total_purchase");
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








	$tdatausers1["total_purchase"] = $fdata;
//	tatal_sales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "tatal_sales";
	$fdata["GoodName"] = "tatal_sales";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","tatal_sales");
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








	$tdatausers1["tatal_sales"] = $fdata;
//	template
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "template";
	$fdata["GoodName"] = "template";
	$fdata["ownerTable"] = "users1";
	$fdata["Label"] = GetFieldLabel("users1","template");
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








	$tdatausers1["template"] = $fdata;


$tables_data["users1"]=&$tdatausers1;
$field_labels["users1"] = &$fieldLabelsusers1;
$fieldToolTips["users1"] = &$fieldToolTipsusers1;
$placeHolders["users1"] = &$placeHoldersusers1;
$page_titles["users1"] = &$pageTitlesusers1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["users1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["users1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_users1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "user_id,  	user_login,  	user_password,  	first_name,  	last_name,  	title,  	group_id,  	phone_home,  	phone_work,  	phone_day,  	phone_cell,  	phone_evening,  	fax,  	email,  	notes,  	card_number,  	card_expire_date,  	country_id,  	state_id,  	city,  	zip,  	address1,  	address2,  	address3,  	date_add,  	date_last_login,  	ip_add,  	ip_update,  	language_id,  	image_url,  	age_id,  	gender_id,  	education_id,  	income_id,  	user_SSN,  	total_purchase,  	tatal_sales,  	template";
$proto0["m_strFrom"] = "FROM users1";
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
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto6["m_sql"] = "user_id";
$proto6["m_srcTableName"] = "users1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_login",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto8["m_sql"] = "user_login";
$proto8["m_srcTableName"] = "users1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "user_password",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto10["m_sql"] = "user_password";
$proto10["m_srcTableName"] = "users1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto12["m_sql"] = "first_name";
$proto12["m_srcTableName"] = "users1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto14["m_sql"] = "last_name";
$proto14["m_srcTableName"] = "users1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto16["m_sql"] = "title";
$proto16["m_srcTableName"] = "users1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto18["m_sql"] = "group_id";
$proto18["m_srcTableName"] = "users1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_home",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto20["m_sql"] = "phone_home";
$proto20["m_srcTableName"] = "users1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_work",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto22["m_sql"] = "phone_work";
$proto22["m_srcTableName"] = "users1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_day",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto24["m_sql"] = "phone_day";
$proto24["m_srcTableName"] = "users1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_cell",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto26["m_sql"] = "phone_cell";
$proto26["m_srcTableName"] = "users1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_evening",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto28["m_sql"] = "phone_evening";
$proto28["m_srcTableName"] = "users1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "fax",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto30["m_sql"] = "fax";
$proto30["m_srcTableName"] = "users1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto32["m_sql"] = "email";
$proto32["m_srcTableName"] = "users1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto34["m_sql"] = "notes";
$proto34["m_srcTableName"] = "users1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "card_number",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto36["m_sql"] = "card_number";
$proto36["m_srcTableName"] = "users1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "card_expire_date",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto38["m_sql"] = "card_expire_date";
$proto38["m_srcTableName"] = "users1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto40["m_sql"] = "country_id";
$proto40["m_srcTableName"] = "users1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "state_id",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto42["m_sql"] = "state_id";
$proto42["m_srcTableName"] = "users1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto44["m_sql"] = "city";
$proto44["m_srcTableName"] = "users1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "zip",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto46["m_sql"] = "zip";
$proto46["m_srcTableName"] = "users1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "address1",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto48["m_sql"] = "address1";
$proto48["m_srcTableName"] = "users1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "address2",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto50["m_sql"] = "address2";
$proto50["m_srcTableName"] = "users1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "address3",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto52["m_sql"] = "address3";
$proto52["m_srcTableName"] = "users1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "date_add",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto54["m_sql"] = "date_add";
$proto54["m_srcTableName"] = "users1";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "date_last_login",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto56["m_sql"] = "date_last_login";
$proto56["m_srcTableName"] = "users1";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "ip_add",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto58["m_sql"] = "ip_add";
$proto58["m_srcTableName"] = "users1";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "ip_update",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto60["m_sql"] = "ip_update";
$proto60["m_srcTableName"] = "users1";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "language_id",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto62["m_sql"] = "language_id";
$proto62["m_srcTableName"] = "users1";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "image_url",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto64["m_sql"] = "image_url";
$proto64["m_srcTableName"] = "users1";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "age_id",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto66["m_sql"] = "age_id";
$proto66["m_srcTableName"] = "users1";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "gender_id",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto68["m_sql"] = "gender_id";
$proto68["m_srcTableName"] = "users1";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "education_id",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto70["m_sql"] = "education_id";
$proto70["m_srcTableName"] = "users1";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "income_id",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto72["m_sql"] = "income_id";
$proto72["m_srcTableName"] = "users1";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "user_SSN",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto74["m_sql"] = "user_SSN";
$proto74["m_srcTableName"] = "users1";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "total_purchase",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto76["m_sql"] = "total_purchase";
$proto76["m_srcTableName"] = "users1";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "tatal_sales",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto78["m_sql"] = "tatal_sales";
$proto78["m_srcTableName"] = "users1";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "template",
	"m_strTable" => "users1",
	"m_srcTableName" => "users1"
));

$proto80["m_sql"] = "template";
$proto80["m_srcTableName"] = "users1";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto82=array();
$proto82["m_link"] = "SQLL_MAIN";
			$proto83=array();
$proto83["m_strName"] = "users1";
$proto83["m_srcTableName"] = "users1";
$proto83["m_columns"] = array();
$proto83["m_columns"][] = "user_id";
$proto83["m_columns"][] = "user_login";
$proto83["m_columns"][] = "user_password";
$proto83["m_columns"][] = "first_name";
$proto83["m_columns"][] = "last_name";
$proto83["m_columns"][] = "title";
$proto83["m_columns"][] = "group_id";
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
$obj = new SQLTable($proto83);

$proto82["m_table"] = $obj;
$proto82["m_sql"] = "users1";
$proto82["m_alias"] = "";
$proto82["m_srcTableName"] = "users1";
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
$proto0["m_srcTableName"]="users1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_users1 = createSqlQuery_users1();


	
		;

																																						

$tdatausers1[".sqlquery"] = $queryData_users1;

$tableEvents["users1"] = new eventsBase;
$tdatausers1[".hasEvents"] = false;

?>