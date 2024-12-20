<?php
require_once(getabspath("classes/cipherer.php"));




$tdatausers = array();
	$tdatausers[".truncateText"] = true;
	$tdatausers[".NumberOfChars"] = 80;
	$tdatausers[".ShortName"] = "users";
	$tdatausers[".OwnerID"] = "";
	$tdatausers[".OriginalTable"] = "users";

//	field labels
$fieldLabelsusers = array();
$fieldToolTipsusers = array();
$pageTitlesusers = array();
$placeHoldersusers = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsusers["Japanese"] = array();
	$fieldToolTipsusers["Japanese"] = array();
	$placeHoldersusers["Japanese"] = array();
	$pageTitlesusers["Japanese"] = array();
	$fieldLabelsusers["Japanese"]["user_id"] = "User Id";
	$fieldToolTipsusers["Japanese"]["user_id"] = "";
	$placeHoldersusers["Japanese"]["user_id"] = "";
	$fieldLabelsusers["Japanese"]["user_login"] = "User Login";
	$fieldToolTipsusers["Japanese"]["user_login"] = "";
	$placeHoldersusers["Japanese"]["user_login"] = "";
	$fieldLabelsusers["Japanese"]["user_password"] = "User Password";
	$fieldToolTipsusers["Japanese"]["user_password"] = "";
	$placeHoldersusers["Japanese"]["user_password"] = "";
	$fieldLabelsusers["Japanese"]["first_name"] = "First Name";
	$fieldToolTipsusers["Japanese"]["first_name"] = "";
	$placeHoldersusers["Japanese"]["first_name"] = "";
	$fieldLabelsusers["Japanese"]["last_name"] = "Last Name";
	$fieldToolTipsusers["Japanese"]["last_name"] = "";
	$placeHoldersusers["Japanese"]["last_name"] = "";
	$fieldLabelsusers["Japanese"]["title"] = "Title";
	$fieldToolTipsusers["Japanese"]["title"] = "";
	$placeHoldersusers["Japanese"]["title"] = "";
	$fieldLabelsusers["Japanese"]["group_id"] = "Group Id";
	$fieldToolTipsusers["Japanese"]["group_id"] = "";
	$placeHoldersusers["Japanese"]["group_id"] = "";
	$fieldLabelsusers["Japanese"]["phone_home"] = "Phone Home";
	$fieldToolTipsusers["Japanese"]["phone_home"] = "";
	$placeHoldersusers["Japanese"]["phone_home"] = "";
	$fieldLabelsusers["Japanese"]["phone_work"] = "Phone Work";
	$fieldToolTipsusers["Japanese"]["phone_work"] = "";
	$placeHoldersusers["Japanese"]["phone_work"] = "";
	$fieldLabelsusers["Japanese"]["phone_day"] = "Phone Day";
	$fieldToolTipsusers["Japanese"]["phone_day"] = "";
	$placeHoldersusers["Japanese"]["phone_day"] = "";
	$fieldLabelsusers["Japanese"]["phone_cell"] = "Phone Cell";
	$fieldToolTipsusers["Japanese"]["phone_cell"] = "";
	$placeHoldersusers["Japanese"]["phone_cell"] = "";
	$fieldLabelsusers["Japanese"]["phone_evening"] = "Phone Evening";
	$fieldToolTipsusers["Japanese"]["phone_evening"] = "";
	$placeHoldersusers["Japanese"]["phone_evening"] = "";
	$fieldLabelsusers["Japanese"]["fax"] = "Fax";
	$fieldToolTipsusers["Japanese"]["fax"] = "";
	$placeHoldersusers["Japanese"]["fax"] = "";
	$fieldLabelsusers["Japanese"]["email"] = "Email";
	$fieldToolTipsusers["Japanese"]["email"] = "";
	$placeHoldersusers["Japanese"]["email"] = "";
	$fieldLabelsusers["Japanese"]["notes"] = "Notes";
	$fieldToolTipsusers["Japanese"]["notes"] = "";
	$placeHoldersusers["Japanese"]["notes"] = "";
	$fieldLabelsusers["Japanese"]["card_number"] = "Card Number";
	$fieldToolTipsusers["Japanese"]["card_number"] = "";
	$placeHoldersusers["Japanese"]["card_number"] = "";
	$fieldLabelsusers["Japanese"]["card_expire_date"] = "Card Expire Date";
	$fieldToolTipsusers["Japanese"]["card_expire_date"] = "";
	$placeHoldersusers["Japanese"]["card_expire_date"] = "";
	$fieldLabelsusers["Japanese"]["country_id"] = "Country Id";
	$fieldToolTipsusers["Japanese"]["country_id"] = "";
	$placeHoldersusers["Japanese"]["country_id"] = "";
	$fieldLabelsusers["Japanese"]["state_id"] = "State Id";
	$fieldToolTipsusers["Japanese"]["state_id"] = "";
	$placeHoldersusers["Japanese"]["state_id"] = "";
	$fieldLabelsusers["Japanese"]["city"] = "City";
	$fieldToolTipsusers["Japanese"]["city"] = "";
	$placeHoldersusers["Japanese"]["city"] = "";
	$fieldLabelsusers["Japanese"]["zip"] = "Zip";
	$fieldToolTipsusers["Japanese"]["zip"] = "";
	$placeHoldersusers["Japanese"]["zip"] = "";
	$fieldLabelsusers["Japanese"]["address1"] = "Address1";
	$fieldToolTipsusers["Japanese"]["address1"] = "";
	$placeHoldersusers["Japanese"]["address1"] = "";
	$fieldLabelsusers["Japanese"]["address2"] = "Address2";
	$fieldToolTipsusers["Japanese"]["address2"] = "";
	$placeHoldersusers["Japanese"]["address2"] = "";
	$fieldLabelsusers["Japanese"]["address3"] = "Address3";
	$fieldToolTipsusers["Japanese"]["address3"] = "";
	$placeHoldersusers["Japanese"]["address3"] = "";
	$fieldLabelsusers["Japanese"]["date_add"] = "Date Add";
	$fieldToolTipsusers["Japanese"]["date_add"] = "";
	$placeHoldersusers["Japanese"]["date_add"] = "";
	$fieldLabelsusers["Japanese"]["date_last_login"] = "Date Last Login";
	$fieldToolTipsusers["Japanese"]["date_last_login"] = "";
	$placeHoldersusers["Japanese"]["date_last_login"] = "";
	$fieldLabelsusers["Japanese"]["ip_add"] = "Ip Add";
	$fieldToolTipsusers["Japanese"]["ip_add"] = "";
	$placeHoldersusers["Japanese"]["ip_add"] = "";
	$fieldLabelsusers["Japanese"]["ip_update"] = "Ip Update";
	$fieldToolTipsusers["Japanese"]["ip_update"] = "";
	$placeHoldersusers["Japanese"]["ip_update"] = "";
	$fieldLabelsusers["Japanese"]["language_id"] = "Language Id";
	$fieldToolTipsusers["Japanese"]["language_id"] = "";
	$placeHoldersusers["Japanese"]["language_id"] = "";
	$fieldLabelsusers["Japanese"]["image_url"] = "Image Url";
	$fieldToolTipsusers["Japanese"]["image_url"] = "";
	$placeHoldersusers["Japanese"]["image_url"] = "";
	$fieldLabelsusers["Japanese"]["age_id"] = "Age Id";
	$fieldToolTipsusers["Japanese"]["age_id"] = "";
	$placeHoldersusers["Japanese"]["age_id"] = "";
	$fieldLabelsusers["Japanese"]["gender_id"] = "Gender Id";
	$fieldToolTipsusers["Japanese"]["gender_id"] = "";
	$placeHoldersusers["Japanese"]["gender_id"] = "";
	$fieldLabelsusers["Japanese"]["education_id"] = "Education Id";
	$fieldToolTipsusers["Japanese"]["education_id"] = "";
	$placeHoldersusers["Japanese"]["education_id"] = "";
	$fieldLabelsusers["Japanese"]["income_id"] = "Income Id";
	$fieldToolTipsusers["Japanese"]["income_id"] = "";
	$placeHoldersusers["Japanese"]["income_id"] = "";
	$fieldLabelsusers["Japanese"]["user_SSN"] = "User SSN";
	$fieldToolTipsusers["Japanese"]["user_SSN"] = "";
	$placeHoldersusers["Japanese"]["user_SSN"] = "";
	$fieldLabelsusers["Japanese"]["total_purchase"] = "Total Purchase";
	$fieldToolTipsusers["Japanese"]["total_purchase"] = "";
	$placeHoldersusers["Japanese"]["total_purchase"] = "";
	$fieldLabelsusers["Japanese"]["tatal_sales"] = "Tatal Sales";
	$fieldToolTipsusers["Japanese"]["tatal_sales"] = "";
	$placeHoldersusers["Japanese"]["tatal_sales"] = "";
	$fieldLabelsusers["Japanese"]["template"] = "Template";
	$fieldToolTipsusers["Japanese"]["template"] = "";
	$placeHoldersusers["Japanese"]["template"] = "";
	$fieldLabelsusers["Japanese"]["cw_task_id"] = "Cw Task Id";
	$fieldToolTipsusers["Japanese"]["cw_task_id"] = "";
	$placeHoldersusers["Japanese"]["cw_task_id"] = "";
	$fieldLabelsusers["Japanese"]["cw_TO_id"] = "Cw TO Id";
	$fieldToolTipsusers["Japanese"]["cw_TO_id"] = "";
	$placeHoldersusers["Japanese"]["cw_TO_id"] = "";
	$fieldLabelsusers["Japanese"]["english_name"] = "English Name";
	$fieldToolTipsusers["Japanese"]["english_name"] = "";
	$placeHoldersusers["Japanese"]["english_name"] = "";
	$fieldLabelsusers["Japanese"]["label_print_now"] = "Label Print Now";
	$fieldToolTipsusers["Japanese"]["label_print_now"] = "";
	$placeHoldersusers["Japanese"]["label_print_now"] = "";
	$fieldLabelsusers["Japanese"]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsusers["Japanese"]["dept_group_id"] = "";
	$placeHoldersusers["Japanese"]["dept_group_id"] = "";
	if (count($fieldToolTipsusers["Japanese"]))
		$tdatausers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsusers[""] = array();
	$fieldToolTipsusers[""] = array();
	$placeHoldersusers[""] = array();
	$pageTitlesusers[""] = array();
	$fieldLabelsusers[""]["cw_task_id"] = "Cw Task Id";
	$fieldToolTipsusers[""]["cw_task_id"] = "";
	$placeHoldersusers[""]["cw_task_id"] = "";
	$fieldLabelsusers[""]["cw_TO_id"] = "Cw TO Id";
	$fieldToolTipsusers[""]["cw_TO_id"] = "";
	$placeHoldersusers[""]["cw_TO_id"] = "";
	$fieldLabelsusers[""]["english_name"] = "English Name";
	$fieldToolTipsusers[""]["english_name"] = "";
	$placeHoldersusers[""]["english_name"] = "";
	$fieldLabelsusers[""]["label_print_now"] = "Label Print Now";
	$fieldToolTipsusers[""]["label_print_now"] = "";
	$placeHoldersusers[""]["label_print_now"] = "";
	$fieldLabelsusers[""]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsusers[""]["dept_group_id"] = "";
	$placeHoldersusers[""]["dept_group_id"] = "";
	if (count($fieldToolTipsusers[""]))
		$tdatausers[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusers["English"] = array();
	$fieldToolTipsusers["English"] = array();
	$placeHoldersusers["English"] = array();
	$pageTitlesusers["English"] = array();
	$fieldLabelsusers["English"]["cw_task_id"] = "Cw Task Id";
	$fieldToolTipsusers["English"]["cw_task_id"] = "";
	$placeHoldersusers["English"]["cw_task_id"] = "";
	$fieldLabelsusers["English"]["cw_TO_id"] = "Cw TO Id";
	$fieldToolTipsusers["English"]["cw_TO_id"] = "";
	$placeHoldersusers["English"]["cw_TO_id"] = "";
	$fieldLabelsusers["English"]["english_name"] = "English Name";
	$fieldToolTipsusers["English"]["english_name"] = "";
	$placeHoldersusers["English"]["english_name"] = "";
	$fieldLabelsusers["English"]["label_print_now"] = "Label Print Now";
	$fieldToolTipsusers["English"]["label_print_now"] = "";
	$placeHoldersusers["English"]["label_print_now"] = "";
	$fieldLabelsusers["English"]["dept_group_id"] = "Dept Group Id";
	$fieldToolTipsusers["English"]["dept_group_id"] = "";
	$placeHoldersusers["English"]["dept_group_id"] = "";
	if (count($fieldToolTipsusers["English"]))
		$tdatausers[".isUseToolTips"] = true;
}


	$tdatausers[".NCSearch"] = true;



$tdatausers[".shortTableName"] = "users";
$tdatausers[".nSecOptions"] = 0;
$tdatausers[".recsPerRowPrint"] = 1;
$tdatausers[".mainTableOwnerID"] = "";
$tdatausers[".moveNext"] = 1;
$tdatausers[".entityType"] = 0;

$tdatausers[".strOriginalTableName"] = "users";

	



$tdatausers[".showAddInPopup"] = false;

$tdatausers[".showEditInPopup"] = false;

$tdatausers[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausers[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausers[".fieldsForRegister"] = array();

$tdatausers[".listAjax"] = false;

	$tdatausers[".audit"] = true;

	$tdatausers[".locking"] = false;






$tdatausers[".reorderRecordsByHeader"] = true;
$tdatausers[".createSortByDropdown"] = true;
$tdatausers[".strSortControlSettingsJSON"] = "";








$tdatausers[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatausers[".allowShowHideFields"] = true;
//

// Allow Fields Reordering in GRID
$tdatausers[".allowFieldsReordering"] = true;
//

// search Saving settings
$tdatausers[".searchSaving"] = false;
//

$tdatausers[".showSearchPanel"] = true;
		$tdatausers[".flexibleSearch"] = true;

$tdatausers[".isUseAjaxSuggest"] = true;

$tdatausers[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatausers[".ajaxCodeSnippetAdded"] = false;

$tdatausers[".buttonsAdded"] = false;

$tdatausers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausers[".isUseTimeForSearch"] = false;





$tdatausers[".allSearchFields"] = array();
$tdatausers[".filterFields"] = array();
$tdatausers[".requiredSearchFields"] = array();



$tdatausers[".googleLikeFields"] = array();
$tdatausers[".googleLikeFields"][] = "user_id";
$tdatausers[".googleLikeFields"][] = "user_login";
$tdatausers[".googleLikeFields"][] = "user_password";
$tdatausers[".googleLikeFields"][] = "first_name";
$tdatausers[".googleLikeFields"][] = "last_name";
$tdatausers[".googleLikeFields"][] = "title";
$tdatausers[".googleLikeFields"][] = "group_id";
$tdatausers[".googleLikeFields"][] = "english_name";
$tdatausers[".googleLikeFields"][] = "phone_home";
$tdatausers[".googleLikeFields"][] = "phone_work";
$tdatausers[".googleLikeFields"][] = "phone_day";
$tdatausers[".googleLikeFields"][] = "phone_cell";
$tdatausers[".googleLikeFields"][] = "phone_evening";
$tdatausers[".googleLikeFields"][] = "fax";
$tdatausers[".googleLikeFields"][] = "email";
$tdatausers[".googleLikeFields"][] = "notes";
$tdatausers[".googleLikeFields"][] = "card_number";
$tdatausers[".googleLikeFields"][] = "card_expire_date";
$tdatausers[".googleLikeFields"][] = "country_id";
$tdatausers[".googleLikeFields"][] = "state_id";
$tdatausers[".googleLikeFields"][] = "city";
$tdatausers[".googleLikeFields"][] = "zip";
$tdatausers[".googleLikeFields"][] = "address1";
$tdatausers[".googleLikeFields"][] = "address2";
$tdatausers[".googleLikeFields"][] = "address3";
$tdatausers[".googleLikeFields"][] = "date_add";
$tdatausers[".googleLikeFields"][] = "date_last_login";
$tdatausers[".googleLikeFields"][] = "ip_add";
$tdatausers[".googleLikeFields"][] = "ip_update";
$tdatausers[".googleLikeFields"][] = "language_id";
$tdatausers[".googleLikeFields"][] = "image_url";
$tdatausers[".googleLikeFields"][] = "age_id";
$tdatausers[".googleLikeFields"][] = "gender_id";
$tdatausers[".googleLikeFields"][] = "education_id";
$tdatausers[".googleLikeFields"][] = "income_id";
$tdatausers[".googleLikeFields"][] = "user_SSN";
$tdatausers[".googleLikeFields"][] = "total_purchase";
$tdatausers[".googleLikeFields"][] = "tatal_sales";
$tdatausers[".googleLikeFields"][] = "template";
$tdatausers[".googleLikeFields"][] = "cw_task_id";
$tdatausers[".googleLikeFields"][] = "cw_TO_id";
$tdatausers[".googleLikeFields"][] = "label_print_now";
$tdatausers[".googleLikeFields"][] = "dept_group_id";



$tdatausers[".tableType"] = "list";

$tdatausers[".printerPageOrientation"] = 0;
$tdatausers[".nPrinterPageScale"] = 100;

$tdatausers[".nPrinterSplitRecords"] = 40;

$tdatausers[".nPrinterPDFSplitRecords"] = 40;



$tdatausers[".geocodingEnabled"] = false;





$tdatausers[".listGridLayout"] = 3;


$tdatausers[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatausers[".pageSize"] = 20;

$tdatausers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausers[".strOrderBy"] = $tstrOrderBy;

$tdatausers[".orderindexes"] = array();

$tdatausers[".sqlHead"] = "SELECT `user_id`,  	`user_login`,  	`user_password`,  	`first_name`,  	`last_name`,  	`title`,  	`group_id`,  	`english_name`,  	`phone_home`,  	`phone_work`,  	`phone_day`,  	`phone_cell`,  	`phone_evening`,  	`fax`,  	`email`,  	`notes`,  	`card_number`,  	`card_expire_date`,  	`country_id`,  	`state_id`,  	`city`,  	`zip`,  	`address1`,  	`address2`,  	`address3`,  	`date_add`,  	`date_last_login`,  	`ip_add`,  	`ip_update`,  	`language_id`,  	`image_url`,  	`age_id`,  	`gender_id`,  	`education_id`,  	`income_id`,  	`user_SSN`,  	`total_purchase`,  	`tatal_sales`,  	`template`,  	`cw_task_id`,  	`cw_TO_id`,  	`label_print_now`,  	`dept_group_id`";
$tdatausers[".sqlFrom"] = "FROM `users`";
$tdatausers[".sqlWhereExpr"] = "";
$tdatausers[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausers[".arrGroupsPerPage"] = $arrGPP;

$tdatausers[".highlightSearchResults"] = true;

$tableKeysusers = array();
$tableKeysusers[] = "user_id";
$tdatausers[".Keys"] = $tableKeysusers;

$tdatausers[".listFields"] = array();

$tdatausers[".hideMobileList"] = array();


$tdatausers[".viewFields"] = array();

$tdatausers[".addFields"] = array();

$tdatausers[".masterListFields"] = array();
$tdatausers[".masterListFields"][] = "user_id";
$tdatausers[".masterListFields"][] = "user_login";
$tdatausers[".masterListFields"][] = "user_password";
$tdatausers[".masterListFields"][] = "first_name";
$tdatausers[".masterListFields"][] = "last_name";
$tdatausers[".masterListFields"][] = "title";
$tdatausers[".masterListFields"][] = "group_id";
$tdatausers[".masterListFields"][] = "english_name";
$tdatausers[".masterListFields"][] = "phone_home";
$tdatausers[".masterListFields"][] = "phone_work";
$tdatausers[".masterListFields"][] = "phone_day";
$tdatausers[".masterListFields"][] = "phone_cell";
$tdatausers[".masterListFields"][] = "phone_evening";
$tdatausers[".masterListFields"][] = "fax";
$tdatausers[".masterListFields"][] = "email";
$tdatausers[".masterListFields"][] = "notes";
$tdatausers[".masterListFields"][] = "card_number";
$tdatausers[".masterListFields"][] = "card_expire_date";
$tdatausers[".masterListFields"][] = "country_id";
$tdatausers[".masterListFields"][] = "state_id";
$tdatausers[".masterListFields"][] = "city";
$tdatausers[".masterListFields"][] = "zip";
$tdatausers[".masterListFields"][] = "address1";
$tdatausers[".masterListFields"][] = "address2";
$tdatausers[".masterListFields"][] = "address3";
$tdatausers[".masterListFields"][] = "date_add";
$tdatausers[".masterListFields"][] = "date_last_login";
$tdatausers[".masterListFields"][] = "ip_add";
$tdatausers[".masterListFields"][] = "ip_update";
$tdatausers[".masterListFields"][] = "language_id";
$tdatausers[".masterListFields"][] = "image_url";
$tdatausers[".masterListFields"][] = "age_id";
$tdatausers[".masterListFields"][] = "gender_id";
$tdatausers[".masterListFields"][] = "education_id";
$tdatausers[".masterListFields"][] = "income_id";
$tdatausers[".masterListFields"][] = "user_SSN";
$tdatausers[".masterListFields"][] = "total_purchase";
$tdatausers[".masterListFields"][] = "tatal_sales";
$tdatausers[".masterListFields"][] = "template";
$tdatausers[".masterListFields"][] = "cw_task_id";
$tdatausers[".masterListFields"][] = "cw_TO_id";
$tdatausers[".masterListFields"][] = "label_print_now";
$tdatausers[".masterListFields"][] = "dept_group_id";

$tdatausers[".inlineAddFields"] = array();

$tdatausers[".editFields"] = array();

$tdatausers[".inlineEditFields"] = array();

$tdatausers[".updateSelectedFields"] = array();


$tdatausers[".exportFields"] = array();

$tdatausers[".importFields"] = array();

$tdatausers[".printFields"] = array();

//	user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "user_id";
	$fdata["GoodName"] = "user_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","user_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_id`";

	
	
			
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








	$tdatausers["user_id"] = $fdata;
//	user_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_login";
	$fdata["GoodName"] = "user_login";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","user_login");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "user_login";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_login`";

	
	
			
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








	$tdatausers["user_login"] = $fdata;
//	user_password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "user_password";
	$fdata["GoodName"] = "user_password";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","user_password");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "user_password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_password`";

	
	
			
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








	$tdatausers["user_password"] = $fdata;
//	first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "first_name";
	$fdata["GoodName"] = "first_name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","first_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "first_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`first_name`";

	
	
			
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








	$tdatausers["first_name"] = $fdata;
//	last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "last_name";
	$fdata["GoodName"] = "last_name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","last_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "last_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`last_name`";

	
	
			
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








	$tdatausers["last_name"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","title");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`title`";

	
	
			
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








	$tdatausers["title"] = $fdata;
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","group_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group_id`";

	
	
			
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








	$tdatausers["group_id"] = $fdata;
//	english_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "english_name";
	$fdata["GoodName"] = "english_name";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","english_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "english_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`english_name`";

	
	
			
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








	$tdatausers["english_name"] = $fdata;
//	phone_home
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "phone_home";
	$fdata["GoodName"] = "phone_home";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","phone_home");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "phone_home";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`phone_home`";

	
	
			
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








	$tdatausers["phone_home"] = $fdata;
//	phone_work
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "phone_work";
	$fdata["GoodName"] = "phone_work";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","phone_work");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "phone_work";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`phone_work`";

	
	
			
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








	$tdatausers["phone_work"] = $fdata;
//	phone_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "phone_day";
	$fdata["GoodName"] = "phone_day";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","phone_day");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "phone_day";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`phone_day`";

	
	
			
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








	$tdatausers["phone_day"] = $fdata;
//	phone_cell
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "phone_cell";
	$fdata["GoodName"] = "phone_cell";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","phone_cell");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "phone_cell";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`phone_cell`";

	
	
			
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








	$tdatausers["phone_cell"] = $fdata;
//	phone_evening
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "phone_evening";
	$fdata["GoodName"] = "phone_evening";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","phone_evening");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "phone_evening";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`phone_evening`";

	
	
			
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








	$tdatausers["phone_evening"] = $fdata;
//	fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "fax";
	$fdata["GoodName"] = "fax";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","fax");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "fax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`fax`";

	
	
			
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








	$tdatausers["fax"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","email");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`email`";

	
	
			
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








	$tdatausers["email"] = $fdata;
//	notes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "notes";
	$fdata["GoodName"] = "notes";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","notes");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "notes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`notes`";

	
	
			
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








	$tdatausers["notes"] = $fdata;
//	card_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "card_number";
	$fdata["GoodName"] = "card_number";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","card_number");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "card_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`card_number`";

	
	
			
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








	$tdatausers["card_number"] = $fdata;
//	card_expire_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "card_expire_date";
	$fdata["GoodName"] = "card_expire_date";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","card_expire_date");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "card_expire_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`card_expire_date`";

	
	
			
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








	$tdatausers["card_expire_date"] = $fdata;
//	country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "country_id";
	$fdata["GoodName"] = "country_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","country_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "country_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`country_id`";

	
	
			
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








	$tdatausers["country_id"] = $fdata;
//	state_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "state_id";
	$fdata["GoodName"] = "state_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","state_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "state_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`state_id`";

	
	
			
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








	$tdatausers["state_id"] = $fdata;
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","city");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "city";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`city`";

	
	
			
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








	$tdatausers["city"] = $fdata;
//	zip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "zip";
	$fdata["GoodName"] = "zip";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","zip");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "zip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`zip`";

	
	
			
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








	$tdatausers["zip"] = $fdata;
//	address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "address1";
	$fdata["GoodName"] = "address1";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","address1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "address1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`address1`";

	
	
			
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








	$tdatausers["address1"] = $fdata;
//	address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "address2";
	$fdata["GoodName"] = "address2";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","address2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "address2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`address2`";

	
	
			
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








	$tdatausers["address2"] = $fdata;
//	address3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "address3";
	$fdata["GoodName"] = "address3";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","address3");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "address3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`address3`";

	
	
			
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








	$tdatausers["address3"] = $fdata;
//	date_add
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "date_add";
	$fdata["GoodName"] = "date_add";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","date_add");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "date_add";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date_add`";

	
	
			
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








	$tdatausers["date_add"] = $fdata;
//	date_last_login
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "date_last_login";
	$fdata["GoodName"] = "date_last_login";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","date_last_login");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "date_last_login";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date_last_login`";

	
	
			
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








	$tdatausers["date_last_login"] = $fdata;
//	ip_add
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ip_add";
	$fdata["GoodName"] = "ip_add";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","ip_add");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ip_add";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ip_add`";

	
	
			
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








	$tdatausers["ip_add"] = $fdata;
//	ip_update
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "ip_update";
	$fdata["GoodName"] = "ip_update";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","ip_update");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ip_update";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ip_update`";

	
	
			
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








	$tdatausers["ip_update"] = $fdata;
//	language_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "language_id";
	$fdata["GoodName"] = "language_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","language_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "language_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`language_id`";

	
	
			
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








	$tdatausers["language_id"] = $fdata;
//	image_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "image_url";
	$fdata["GoodName"] = "image_url";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","image_url");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "image_url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`image_url`";

	
	
			
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








	$tdatausers["image_url"] = $fdata;
//	age_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "age_id";
	$fdata["GoodName"] = "age_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","age_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "age_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`age_id`";

	
	
			
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








	$tdatausers["age_id"] = $fdata;
//	gender_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "gender_id";
	$fdata["GoodName"] = "gender_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","gender_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "gender_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gender_id`";

	
	
			
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








	$tdatausers["gender_id"] = $fdata;
//	education_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "education_id";
	$fdata["GoodName"] = "education_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","education_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "education_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`education_id`";

	
	
			
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








	$tdatausers["education_id"] = $fdata;
//	income_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "income_id";
	$fdata["GoodName"] = "income_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","income_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "income_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`income_id`";

	
	
			
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








	$tdatausers["income_id"] = $fdata;
//	user_SSN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "user_SSN";
	$fdata["GoodName"] = "user_SSN";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","user_SSN");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "user_SSN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_SSN`";

	
	
			
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








	$tdatausers["user_SSN"] = $fdata;
//	total_purchase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "total_purchase";
	$fdata["GoodName"] = "total_purchase";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","total_purchase");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "total_purchase";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_purchase`";

	
	
			
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








	$tdatausers["total_purchase"] = $fdata;
//	tatal_sales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "tatal_sales";
	$fdata["GoodName"] = "tatal_sales";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","tatal_sales");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "tatal_sales";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tatal_sales`";

	
	
			
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








	$tdatausers["tatal_sales"] = $fdata;
//	template
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "template";
	$fdata["GoodName"] = "template";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","template");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "template";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`template`";

	
	
			
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








	$tdatausers["template"] = $fdata;
//	cw_task_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "cw_task_id";
	$fdata["GoodName"] = "cw_task_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","cw_task_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "cw_task_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cw_task_id`";

	
	
			
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








	$tdatausers["cw_task_id"] = $fdata;
//	cw_TO_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "cw_TO_id";
	$fdata["GoodName"] = "cw_TO_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","cw_TO_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "cw_TO_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cw_TO_id`";

	
	
			
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








	$tdatausers["cw_TO_id"] = $fdata;
//	label_print_now
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "label_print_now";
	$fdata["GoodName"] = "label_print_now";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","label_print_now");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "label_print_now";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`label_print_now`";

	
	
			
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








	$tdatausers["label_print_now"] = $fdata;
//	dept_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "dept_group_id";
	$fdata["GoodName"] = "dept_group_id";
	$fdata["ownerTable"] = "users";
	$fdata["Label"] = GetFieldLabel("users","dept_group_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "dept_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dept_group_id`";

	
	
			
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








	$tdatausers["dept_group_id"] = $fdata;


$tables_data["users"]=&$tdatausers;
$field_labels["users"] = &$fieldLabelsusers;
$fieldToolTips["users"] = &$fieldToolTipsusers;
$placeHolders["users"] = &$placeHoldersusers;
$page_titles["users"] = &$pageTitlesusers;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`user_id`,  	`user_login`,  	`user_password`,  	`first_name`,  	`last_name`,  	`title`,  	`group_id`,  	`english_name`,  	`phone_home`,  	`phone_work`,  	`phone_day`,  	`phone_cell`,  	`phone_evening`,  	`fax`,  	`email`,  	`notes`,  	`card_number`,  	`card_expire_date`,  	`country_id`,  	`state_id`,  	`city`,  	`zip`,  	`address1`,  	`address2`,  	`address3`,  	`date_add`,  	`date_last_login`,  	`ip_add`,  	`ip_update`,  	`language_id`,  	`image_url`,  	`age_id`,  	`gender_id`,  	`education_id`,  	`income_id`,  	`user_SSN`,  	`total_purchase`,  	`tatal_sales`,  	`template`,  	`cw_task_id`,  	`cw_TO_id`,  	`label_print_now`,  	`dept_group_id`";
$proto0["m_strFrom"] = "FROM `users`";
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
	"m_srcTableName" => "users"
));

$proto6["m_sql"] = "`user_id`";
$proto6["m_srcTableName"] = "users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_login",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto8["m_sql"] = "`user_login`";
$proto8["m_srcTableName"] = "users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "user_password",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto10["m_sql"] = "`user_password`";
$proto10["m_srcTableName"] = "users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "first_name",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto12["m_sql"] = "`first_name`";
$proto12["m_srcTableName"] = "users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "last_name",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto14["m_sql"] = "`last_name`";
$proto14["m_srcTableName"] = "users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto16["m_sql"] = "`title`";
$proto16["m_srcTableName"] = "users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto18["m_sql"] = "`group_id`";
$proto18["m_srcTableName"] = "users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "english_name",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto20["m_sql"] = "`english_name`";
$proto20["m_srcTableName"] = "users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_home",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto22["m_sql"] = "`phone_home`";
$proto22["m_srcTableName"] = "users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_work",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto24["m_sql"] = "`phone_work`";
$proto24["m_srcTableName"] = "users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_day",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto26["m_sql"] = "`phone_day`";
$proto26["m_srcTableName"] = "users";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_cell",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto28["m_sql"] = "`phone_cell`";
$proto28["m_srcTableName"] = "users";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_evening",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto30["m_sql"] = "`phone_evening`";
$proto30["m_srcTableName"] = "users";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "fax",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto32["m_sql"] = "`fax`";
$proto32["m_srcTableName"] = "users";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto34["m_sql"] = "`email`";
$proto34["m_srcTableName"] = "users";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "notes",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto36["m_sql"] = "`notes`";
$proto36["m_srcTableName"] = "users";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "card_number",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto38["m_sql"] = "`card_number`";
$proto38["m_srcTableName"] = "users";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "card_expire_date",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto40["m_sql"] = "`card_expire_date`";
$proto40["m_srcTableName"] = "users";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "country_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto42["m_sql"] = "`country_id`";
$proto42["m_srcTableName"] = "users";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "state_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto44["m_sql"] = "`state_id`";
$proto44["m_srcTableName"] = "users";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto46["m_sql"] = "`city`";
$proto46["m_srcTableName"] = "users";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "zip",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto48["m_sql"] = "`zip`";
$proto48["m_srcTableName"] = "users";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "address1",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto50["m_sql"] = "`address1`";
$proto50["m_srcTableName"] = "users";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "address2",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto52["m_sql"] = "`address2`";
$proto52["m_srcTableName"] = "users";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "address3",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto54["m_sql"] = "`address3`";
$proto54["m_srcTableName"] = "users";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "date_add",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto56["m_sql"] = "`date_add`";
$proto56["m_srcTableName"] = "users";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "date_last_login",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto58["m_sql"] = "`date_last_login`";
$proto58["m_srcTableName"] = "users";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "ip_add",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto60["m_sql"] = "`ip_add`";
$proto60["m_srcTableName"] = "users";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "ip_update",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto62["m_sql"] = "`ip_update`";
$proto62["m_srcTableName"] = "users";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "language_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto64["m_sql"] = "`language_id`";
$proto64["m_srcTableName"] = "users";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "image_url",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto66["m_sql"] = "`image_url`";
$proto66["m_srcTableName"] = "users";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "age_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto68["m_sql"] = "`age_id`";
$proto68["m_srcTableName"] = "users";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "gender_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto70["m_sql"] = "`gender_id`";
$proto70["m_srcTableName"] = "users";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "education_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto72["m_sql"] = "`education_id`";
$proto72["m_srcTableName"] = "users";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "income_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto74["m_sql"] = "`income_id`";
$proto74["m_srcTableName"] = "users";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "user_SSN",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto76["m_sql"] = "`user_SSN`";
$proto76["m_srcTableName"] = "users";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "total_purchase",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto78["m_sql"] = "`total_purchase`";
$proto78["m_srcTableName"] = "users";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "tatal_sales",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto80["m_sql"] = "`tatal_sales`";
$proto80["m_srcTableName"] = "users";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "template",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto82["m_sql"] = "`template`";
$proto82["m_srcTableName"] = "users";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "cw_task_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto84["m_sql"] = "`cw_task_id`";
$proto84["m_srcTableName"] = "users";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "cw_TO_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto86["m_sql"] = "`cw_TO_id`";
$proto86["m_srcTableName"] = "users";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "label_print_now",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto88["m_sql"] = "`label_print_now`";
$proto88["m_srcTableName"] = "users";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "dept_group_id",
	"m_strTable" => "users",
	"m_srcTableName" => "users"
));

$proto90["m_sql"] = "`dept_group_id`";
$proto90["m_srcTableName"] = "users";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto92=array();
$proto92["m_link"] = "SQLL_MAIN";
			$proto93=array();
$proto93["m_strName"] = "users";
$proto93["m_srcTableName"] = "users";
$proto93["m_columns"] = array();
$proto93["m_columns"][] = "user_id";
$proto93["m_columns"][] = "user_login";
$proto93["m_columns"][] = "user_password";
$proto93["m_columns"][] = "first_name";
$proto93["m_columns"][] = "last_name";
$proto93["m_columns"][] = "title";
$proto93["m_columns"][] = "group_id";
$proto93["m_columns"][] = "english_name";
$proto93["m_columns"][] = "phone_home";
$proto93["m_columns"][] = "phone_work";
$proto93["m_columns"][] = "phone_day";
$proto93["m_columns"][] = "phone_cell";
$proto93["m_columns"][] = "phone_evening";
$proto93["m_columns"][] = "fax";
$proto93["m_columns"][] = "email";
$proto93["m_columns"][] = "notes";
$proto93["m_columns"][] = "card_number";
$proto93["m_columns"][] = "card_expire_date";
$proto93["m_columns"][] = "country_id";
$proto93["m_columns"][] = "state_id";
$proto93["m_columns"][] = "city";
$proto93["m_columns"][] = "zip";
$proto93["m_columns"][] = "address1";
$proto93["m_columns"][] = "address2";
$proto93["m_columns"][] = "address3";
$proto93["m_columns"][] = "date_add";
$proto93["m_columns"][] = "date_last_login";
$proto93["m_columns"][] = "ip_add";
$proto93["m_columns"][] = "ip_update";
$proto93["m_columns"][] = "language_id";
$proto93["m_columns"][] = "image_url";
$proto93["m_columns"][] = "age_id";
$proto93["m_columns"][] = "gender_id";
$proto93["m_columns"][] = "education_id";
$proto93["m_columns"][] = "income_id";
$proto93["m_columns"][] = "user_SSN";
$proto93["m_columns"][] = "total_purchase";
$proto93["m_columns"][] = "tatal_sales";
$proto93["m_columns"][] = "template";
$proto93["m_columns"][] = "cw_task_id";
$proto93["m_columns"][] = "cw_TO_id";
$proto93["m_columns"][] = "label_print_now";
$proto93["m_columns"][] = "dept_group_id";
$obj = new SQLTable($proto93);

$proto92["m_table"] = $obj;
$proto92["m_sql"] = "`users`";
$proto92["m_alias"] = "";
$proto92["m_srcTableName"] = "users";
$proto94=array();
$proto94["m_sql"] = "";
$proto94["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto94["m_column"]=$obj;
$proto94["m_contained"] = array();
$proto94["m_strCase"] = "";
$proto94["m_havingmode"] = false;
$proto94["m_inBrackets"] = false;
$proto94["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto94);

$proto92["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto92);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_users = createSqlQuery_users();


	
		;

																																											

$tdatausers[".sqlquery"] = $queryData_users;

$tableEvents["users"] = new eventsBase;
$tdatausers[".hasEvents"] = false;

?>