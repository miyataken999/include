<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_partners = array();
	$tdatafreee_partners[".truncateText"] = true;
	$tdatafreee_partners[".NumberOfChars"] = 80;
	$tdatafreee_partners[".ShortName"] = "freee_partners";
	$tdatafreee_partners[".OwnerID"] = "";
	$tdatafreee_partners[".OriginalTable"] = "freee_partners";

//	field labels
$fieldLabelsfreee_partners = array();
$fieldToolTipsfreee_partners = array();
$pageTitlesfreee_partners = array();
$placeHoldersfreee_partners = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_partners["Japanese"] = array();
	$fieldToolTipsfreee_partners["Japanese"] = array();
	$placeHoldersfreee_partners["Japanese"] = array();
	$pageTitlesfreee_partners["Japanese"] = array();
	$fieldLabelsfreee_partners["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_partners["Japanese"]["id"] = "";
	$placeHoldersfreee_partners["Japanese"]["id"] = "";
	$fieldLabelsfreee_partners["Japanese"]["company_id"] = "Company Id";
	$fieldToolTipsfreee_partners["Japanese"]["company_id"] = "";
	$placeHoldersfreee_partners["Japanese"]["company_id"] = "";
	$fieldLabelsfreee_partners["Japanese"]["name"] = "Name";
	$fieldToolTipsfreee_partners["Japanese"]["name"] = "";
	$placeHoldersfreee_partners["Japanese"]["name"] = "";
	$fieldLabelsfreee_partners["Japanese"]["update_date"] = "Update Date";
	$fieldToolTipsfreee_partners["Japanese"]["update_date"] = "";
	$placeHoldersfreee_partners["Japanese"]["update_date"] = "";
	$fieldLabelsfreee_partners["Japanese"]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee_partners["Japanese"]["shortcut1"] = "";
	$placeHoldersfreee_partners["Japanese"]["shortcut1"] = "";
	$fieldLabelsfreee_partners["Japanese"]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee_partners["Japanese"]["shortcut2"] = "";
	$placeHoldersfreee_partners["Japanese"]["shortcut2"] = "";
	$fieldLabelsfreee_partners["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsfreee_partners["Japanese"]["created_at"] = "";
	$placeHoldersfreee_partners["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_partners["Japanese"]["created_by"] = "Created By";
	$fieldToolTipsfreee_partners["Japanese"]["created_by"] = "";
	$placeHoldersfreee_partners["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_partners["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_partners["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_partners["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_partners["Japanese"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_partners["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_partners["Japanese"]["updated_by"] = "";
	$fieldLabelsfreee_partners["Japanese"]["available"] = "Available";
	$fieldToolTipsfreee_partners["Japanese"]["available"] = "";
	$placeHoldersfreee_partners["Japanese"]["available"] = "";
	$fieldLabelsfreee_partners["Japanese"]["code"] = "Code";
	$fieldToolTipsfreee_partners["Japanese"]["code"] = "";
	$placeHoldersfreee_partners["Japanese"]["code"] = "";
	$fieldLabelsfreee_partners["Japanese"]["org_code"] = "Org Code";
	$fieldToolTipsfreee_partners["Japanese"]["org_code"] = "";
	$placeHoldersfreee_partners["Japanese"]["org_code"] = "";
	$fieldLabelsfreee_partners["Japanese"]["country_code"] = "Country Code";
	$fieldToolTipsfreee_partners["Japanese"]["country_code"] = "";
	$placeHoldersfreee_partners["Japanese"]["country_code"] = "";
	$fieldLabelsfreee_partners["Japanese"]["long_name"] = "Long Name";
	$fieldToolTipsfreee_partners["Japanese"]["long_name"] = "";
	$placeHoldersfreee_partners["Japanese"]["long_name"] = "";
	$fieldLabelsfreee_partners["Japanese"]["name_kana"] = "Name Kana";
	$fieldToolTipsfreee_partners["Japanese"]["name_kana"] = "";
	$placeHoldersfreee_partners["Japanese"]["name_kana"] = "";
	$fieldLabelsfreee_partners["Japanese"]["default_title"] = "Default Title";
	$fieldToolTipsfreee_partners["Japanese"]["default_title"] = "";
	$placeHoldersfreee_partners["Japanese"]["default_title"] = "";
	$fieldLabelsfreee_partners["Japanese"]["phone"] = "Phone";
	$fieldToolTipsfreee_partners["Japanese"]["phone"] = "";
	$placeHoldersfreee_partners["Japanese"]["phone"] = "";
	$fieldLabelsfreee_partners["Japanese"]["contact_name"] = "Contact Name";
	$fieldToolTipsfreee_partners["Japanese"]["contact_name"] = "";
	$placeHoldersfreee_partners["Japanese"]["contact_name"] = "";
	$fieldLabelsfreee_partners["Japanese"]["email"] = "Email";
	$fieldToolTipsfreee_partners["Japanese"]["email"] = "";
	$placeHoldersfreee_partners["Japanese"]["email"] = "";
	$fieldLabelsfreee_partners["Japanese"]["payer_walletable_id"] = "Payer Walletable Id";
	$fieldToolTipsfreee_partners["Japanese"]["payer_walletable_id"] = "";
	$placeHoldersfreee_partners["Japanese"]["payer_walletable_id"] = "";
	$fieldLabelsfreee_partners["Japanese"]["transfer_fee_handling_side"] = "Transfer Fee Handling Side";
	$fieldToolTipsfreee_partners["Japanese"]["transfer_fee_handling_side"] = "";
	$placeHoldersfreee_partners["Japanese"]["transfer_fee_handling_side"] = "";
	$fieldLabelsfreee_partners["Japanese"]["address_attributes"] = "Address Attributes";
	$fieldToolTipsfreee_partners["Japanese"]["address_attributes"] = "";
	$placeHoldersfreee_partners["Japanese"]["address_attributes"] = "";
	$fieldLabelsfreee_partners["Japanese"]["partner_doc_setting_attributes"] = "Partner Doc Setting Attributes";
	$fieldToolTipsfreee_partners["Japanese"]["partner_doc_setting_attributes"] = "";
	$placeHoldersfreee_partners["Japanese"]["partner_doc_setting_attributes"] = "";
	$fieldLabelsfreee_partners["Japanese"]["partner_bank_account_attributes"] = "Partner Bank Account Attributes";
	$fieldToolTipsfreee_partners["Japanese"]["partner_bank_account_attributes"] = "";
	$placeHoldersfreee_partners["Japanese"]["partner_bank_account_attributes"] = "";
	$fieldLabelsfreee_partners["Japanese"]["is_business"] = "業者チェック";
	$fieldToolTipsfreee_partners["Japanese"]["is_business"] = "";
	$placeHoldersfreee_partners["Japanese"]["is_business"] = "";
	if (count($fieldToolTipsfreee_partners["Japanese"]))
		$tdatafreee_partners[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_partners[""] = array();
	$fieldToolTipsfreee_partners[""] = array();
	$placeHoldersfreee_partners[""] = array();
	$pageTitlesfreee_partners[""] = array();
	$fieldLabelsfreee_partners[""]["id"] = "Id";
	$fieldToolTipsfreee_partners[""]["id"] = "";
	$placeHoldersfreee_partners[""]["id"] = "";
	$fieldLabelsfreee_partners[""]["company_id"] = "Company Id";
	$fieldToolTipsfreee_partners[""]["company_id"] = "";
	$placeHoldersfreee_partners[""]["company_id"] = "";
	$fieldLabelsfreee_partners[""]["name"] = "Name";
	$fieldToolTipsfreee_partners[""]["name"] = "";
	$placeHoldersfreee_partners[""]["name"] = "";
	$fieldLabelsfreee_partners[""]["update_date"] = "Update Date";
	$fieldToolTipsfreee_partners[""]["update_date"] = "";
	$placeHoldersfreee_partners[""]["update_date"] = "";
	$fieldLabelsfreee_partners[""]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee_partners[""]["shortcut1"] = "";
	$placeHoldersfreee_partners[""]["shortcut1"] = "";
	$fieldLabelsfreee_partners[""]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee_partners[""]["shortcut2"] = "";
	$placeHoldersfreee_partners[""]["shortcut2"] = "";
	$fieldLabelsfreee_partners[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_partners[""]["created_at"] = "";
	$placeHoldersfreee_partners[""]["created_at"] = "";
	$fieldLabelsfreee_partners[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_partners[""]["created_by"] = "";
	$placeHoldersfreee_partners[""]["created_by"] = "";
	$fieldLabelsfreee_partners[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_partners[""]["updated_at"] = "";
	$placeHoldersfreee_partners[""]["updated_at"] = "";
	$fieldLabelsfreee_partners[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_partners[""]["updated_by"] = "";
	$placeHoldersfreee_partners[""]["updated_by"] = "";
	$fieldLabelsfreee_partners[""]["available"] = "Available";
	$fieldToolTipsfreee_partners[""]["available"] = "";
	$placeHoldersfreee_partners[""]["available"] = "";
	$fieldLabelsfreee_partners[""]["code"] = "Code";
	$fieldToolTipsfreee_partners[""]["code"] = "";
	$placeHoldersfreee_partners[""]["code"] = "";
	$fieldLabelsfreee_partners[""]["org_code"] = "Org Code";
	$fieldToolTipsfreee_partners[""]["org_code"] = "";
	$placeHoldersfreee_partners[""]["org_code"] = "";
	$fieldLabelsfreee_partners[""]["country_code"] = "Country Code";
	$fieldToolTipsfreee_partners[""]["country_code"] = "";
	$placeHoldersfreee_partners[""]["country_code"] = "";
	$fieldLabelsfreee_partners[""]["long_name"] = "Long Name";
	$fieldToolTipsfreee_partners[""]["long_name"] = "";
	$placeHoldersfreee_partners[""]["long_name"] = "";
	$fieldLabelsfreee_partners[""]["name_kana"] = "Name Kana";
	$fieldToolTipsfreee_partners[""]["name_kana"] = "";
	$placeHoldersfreee_partners[""]["name_kana"] = "";
	$fieldLabelsfreee_partners[""]["default_title"] = "Default Title";
	$fieldToolTipsfreee_partners[""]["default_title"] = "";
	$placeHoldersfreee_partners[""]["default_title"] = "";
	$fieldLabelsfreee_partners[""]["phone"] = "Phone";
	$fieldToolTipsfreee_partners[""]["phone"] = "";
	$placeHoldersfreee_partners[""]["phone"] = "";
	$fieldLabelsfreee_partners[""]["contact_name"] = "Contact Name";
	$fieldToolTipsfreee_partners[""]["contact_name"] = "";
	$placeHoldersfreee_partners[""]["contact_name"] = "";
	$fieldLabelsfreee_partners[""]["email"] = "Email";
	$fieldToolTipsfreee_partners[""]["email"] = "";
	$placeHoldersfreee_partners[""]["email"] = "";
	$fieldLabelsfreee_partners[""]["payer_walletable_id"] = "Payer Walletable Id";
	$fieldToolTipsfreee_partners[""]["payer_walletable_id"] = "";
	$placeHoldersfreee_partners[""]["payer_walletable_id"] = "";
	$fieldLabelsfreee_partners[""]["transfer_fee_handling_side"] = "Transfer Fee Handling Side";
	$fieldToolTipsfreee_partners[""]["transfer_fee_handling_side"] = "";
	$placeHoldersfreee_partners[""]["transfer_fee_handling_side"] = "";
	$fieldLabelsfreee_partners[""]["address_attributes"] = "Address Attributes";
	$fieldToolTipsfreee_partners[""]["address_attributes"] = "";
	$placeHoldersfreee_partners[""]["address_attributes"] = "";
	$fieldLabelsfreee_partners[""]["partner_doc_setting_attributes"] = "Partner Doc Setting Attributes";
	$fieldToolTipsfreee_partners[""]["partner_doc_setting_attributes"] = "";
	$placeHoldersfreee_partners[""]["partner_doc_setting_attributes"] = "";
	$fieldLabelsfreee_partners[""]["partner_bank_account_attributes"] = "Partner Bank Account Attributes";
	$fieldToolTipsfreee_partners[""]["partner_bank_account_attributes"] = "";
	$placeHoldersfreee_partners[""]["partner_bank_account_attributes"] = "";
	$fieldLabelsfreee_partners[""]["is_business"] = "Is Business";
	$fieldToolTipsfreee_partners[""]["is_business"] = "";
	$placeHoldersfreee_partners[""]["is_business"] = "";
	if (count($fieldToolTipsfreee_partners[""]))
		$tdatafreee_partners[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_partners["English"] = array();
	$fieldToolTipsfreee_partners["English"] = array();
	$placeHoldersfreee_partners["English"] = array();
	$pageTitlesfreee_partners["English"] = array();
	$fieldLabelsfreee_partners["English"]["id"] = "Id";
	$fieldToolTipsfreee_partners["English"]["id"] = "";
	$placeHoldersfreee_partners["English"]["id"] = "";
	$fieldLabelsfreee_partners["English"]["company_id"] = "Company Id";
	$fieldToolTipsfreee_partners["English"]["company_id"] = "";
	$placeHoldersfreee_partners["English"]["company_id"] = "";
	$fieldLabelsfreee_partners["English"]["name"] = "Name";
	$fieldToolTipsfreee_partners["English"]["name"] = "";
	$placeHoldersfreee_partners["English"]["name"] = "";
	$fieldLabelsfreee_partners["English"]["update_date"] = "Update Date";
	$fieldToolTipsfreee_partners["English"]["update_date"] = "";
	$placeHoldersfreee_partners["English"]["update_date"] = "";
	$fieldLabelsfreee_partners["English"]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee_partners["English"]["shortcut1"] = "";
	$placeHoldersfreee_partners["English"]["shortcut1"] = "";
	$fieldLabelsfreee_partners["English"]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee_partners["English"]["shortcut2"] = "";
	$placeHoldersfreee_partners["English"]["shortcut2"] = "";
	$fieldLabelsfreee_partners["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_partners["English"]["created_at"] = "";
	$placeHoldersfreee_partners["English"]["created_at"] = "";
	$fieldLabelsfreee_partners["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_partners["English"]["created_by"] = "";
	$placeHoldersfreee_partners["English"]["created_by"] = "";
	$fieldLabelsfreee_partners["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_partners["English"]["updated_at"] = "";
	$placeHoldersfreee_partners["English"]["updated_at"] = "";
	$fieldLabelsfreee_partners["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_partners["English"]["updated_by"] = "";
	$placeHoldersfreee_partners["English"]["updated_by"] = "";
	$fieldLabelsfreee_partners["English"]["available"] = "Available";
	$fieldToolTipsfreee_partners["English"]["available"] = "";
	$placeHoldersfreee_partners["English"]["available"] = "";
	$fieldLabelsfreee_partners["English"]["code"] = "Code";
	$fieldToolTipsfreee_partners["English"]["code"] = "";
	$placeHoldersfreee_partners["English"]["code"] = "";
	$fieldLabelsfreee_partners["English"]["org_code"] = "Org Code";
	$fieldToolTipsfreee_partners["English"]["org_code"] = "";
	$placeHoldersfreee_partners["English"]["org_code"] = "";
	$fieldLabelsfreee_partners["English"]["country_code"] = "Country Code";
	$fieldToolTipsfreee_partners["English"]["country_code"] = "";
	$placeHoldersfreee_partners["English"]["country_code"] = "";
	$fieldLabelsfreee_partners["English"]["long_name"] = "Long Name";
	$fieldToolTipsfreee_partners["English"]["long_name"] = "";
	$placeHoldersfreee_partners["English"]["long_name"] = "";
	$fieldLabelsfreee_partners["English"]["name_kana"] = "Name Kana";
	$fieldToolTipsfreee_partners["English"]["name_kana"] = "";
	$placeHoldersfreee_partners["English"]["name_kana"] = "";
	$fieldLabelsfreee_partners["English"]["default_title"] = "Default Title";
	$fieldToolTipsfreee_partners["English"]["default_title"] = "";
	$placeHoldersfreee_partners["English"]["default_title"] = "";
	$fieldLabelsfreee_partners["English"]["phone"] = "Phone";
	$fieldToolTipsfreee_partners["English"]["phone"] = "";
	$placeHoldersfreee_partners["English"]["phone"] = "";
	$fieldLabelsfreee_partners["English"]["contact_name"] = "Contact Name";
	$fieldToolTipsfreee_partners["English"]["contact_name"] = "";
	$placeHoldersfreee_partners["English"]["contact_name"] = "";
	$fieldLabelsfreee_partners["English"]["email"] = "Email";
	$fieldToolTipsfreee_partners["English"]["email"] = "";
	$placeHoldersfreee_partners["English"]["email"] = "";
	$fieldLabelsfreee_partners["English"]["payer_walletable_id"] = "Payer Walletable Id";
	$fieldToolTipsfreee_partners["English"]["payer_walletable_id"] = "";
	$placeHoldersfreee_partners["English"]["payer_walletable_id"] = "";
	$fieldLabelsfreee_partners["English"]["transfer_fee_handling_side"] = "Transfer Fee Handling Side";
	$fieldToolTipsfreee_partners["English"]["transfer_fee_handling_side"] = "";
	$placeHoldersfreee_partners["English"]["transfer_fee_handling_side"] = "";
	$fieldLabelsfreee_partners["English"]["address_attributes"] = "Address Attributes";
	$fieldToolTipsfreee_partners["English"]["address_attributes"] = "";
	$placeHoldersfreee_partners["English"]["address_attributes"] = "";
	$fieldLabelsfreee_partners["English"]["partner_doc_setting_attributes"] = "Partner Doc Setting Attributes";
	$fieldToolTipsfreee_partners["English"]["partner_doc_setting_attributes"] = "";
	$placeHoldersfreee_partners["English"]["partner_doc_setting_attributes"] = "";
	$fieldLabelsfreee_partners["English"]["partner_bank_account_attributes"] = "Partner Bank Account Attributes";
	$fieldToolTipsfreee_partners["English"]["partner_bank_account_attributes"] = "";
	$placeHoldersfreee_partners["English"]["partner_bank_account_attributes"] = "";
	$fieldLabelsfreee_partners["English"]["is_business"] = "Is Business";
	$fieldToolTipsfreee_partners["English"]["is_business"] = "";
	$placeHoldersfreee_partners["English"]["is_business"] = "";
	if (count($fieldToolTipsfreee_partners["English"]))
		$tdatafreee_partners[".isUseToolTips"] = true;
}


	$tdatafreee_partners[".NCSearch"] = true;



$tdatafreee_partners[".shortTableName"] = "freee_partners";
$tdatafreee_partners[".nSecOptions"] = 0;
$tdatafreee_partners[".recsPerRowPrint"] = 1;
$tdatafreee_partners[".mainTableOwnerID"] = "";
$tdatafreee_partners[".moveNext"] = 1;
$tdatafreee_partners[".entityType"] = 0;

$tdatafreee_partners[".strOriginalTableName"] = "freee_partners";

	



$tdatafreee_partners[".showAddInPopup"] = false;

$tdatafreee_partners[".showEditInPopup"] = false;

$tdatafreee_partners[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_partners[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_partners[".fieldsForRegister"] = array();

$tdatafreee_partners[".listAjax"] = false;

	$tdatafreee_partners[".audit"] = false;

	$tdatafreee_partners[".locking"] = false;



$tdatafreee_partners[".list"] = true;



$tdatafreee_partners[".reorderRecordsByHeader"] = true;





$tdatafreee_partners[".exportTo"] = true;



$tdatafreee_partners[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_partners[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_partners[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_partners[".searchSaving"] = false;
//

$tdatafreee_partners[".showSearchPanel"] = true;
		$tdatafreee_partners[".flexibleSearch"] = true;

$tdatafreee_partners[".isUseAjaxSuggest"] = true;

$tdatafreee_partners[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_partners[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_partners[".buttonsAdded"] = false;

$tdatafreee_partners[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_partners[".isUseTimeForSearch"] = false;





$tdatafreee_partners[".allSearchFields"] = array();
$tdatafreee_partners[".filterFields"] = array();
$tdatafreee_partners[".requiredSearchFields"] = array();

$tdatafreee_partners[".allSearchFields"][] = "id";
	$tdatafreee_partners[".allSearchFields"][] = "company_id";
	$tdatafreee_partners[".allSearchFields"][] = "name";
	$tdatafreee_partners[".allSearchFields"][] = "update_date";
	$tdatafreee_partners[".allSearchFields"][] = "shortcut1";
	$tdatafreee_partners[".allSearchFields"][] = "shortcut2";
	$tdatafreee_partners[".allSearchFields"][] = "created_at";
	$tdatafreee_partners[".allSearchFields"][] = "created_by";
	$tdatafreee_partners[".allSearchFields"][] = "updated_at";
	$tdatafreee_partners[".allSearchFields"][] = "updated_by";
	$tdatafreee_partners[".allSearchFields"][] = "available";
	$tdatafreee_partners[".allSearchFields"][] = "code";
	$tdatafreee_partners[".allSearchFields"][] = "org_code";
	$tdatafreee_partners[".allSearchFields"][] = "country_code";
	$tdatafreee_partners[".allSearchFields"][] = "long_name";
	$tdatafreee_partners[".allSearchFields"][] = "name_kana";
	$tdatafreee_partners[".allSearchFields"][] = "default_title";
	$tdatafreee_partners[".allSearchFields"][] = "phone";
	$tdatafreee_partners[".allSearchFields"][] = "contact_name";
	$tdatafreee_partners[".allSearchFields"][] = "email";
	$tdatafreee_partners[".allSearchFields"][] = "payer_walletable_id";
	$tdatafreee_partners[".allSearchFields"][] = "transfer_fee_handling_side";
	$tdatafreee_partners[".allSearchFields"][] = "address_attributes";
	$tdatafreee_partners[".allSearchFields"][] = "partner_doc_setting_attributes";
	$tdatafreee_partners[".allSearchFields"][] = "partner_bank_account_attributes";
	$tdatafreee_partners[".allSearchFields"][] = "is_business";
	

$tdatafreee_partners[".googleLikeFields"] = array();
$tdatafreee_partners[".googleLikeFields"][] = "id";
$tdatafreee_partners[".googleLikeFields"][] = "company_id";
$tdatafreee_partners[".googleLikeFields"][] = "name";
$tdatafreee_partners[".googleLikeFields"][] = "update_date";
$tdatafreee_partners[".googleLikeFields"][] = "shortcut1";
$tdatafreee_partners[".googleLikeFields"][] = "shortcut2";
$tdatafreee_partners[".googleLikeFields"][] = "created_at";
$tdatafreee_partners[".googleLikeFields"][] = "created_by";
$tdatafreee_partners[".googleLikeFields"][] = "updated_at";
$tdatafreee_partners[".googleLikeFields"][] = "updated_by";
$tdatafreee_partners[".googleLikeFields"][] = "available";
$tdatafreee_partners[".googleLikeFields"][] = "code";
$tdatafreee_partners[".googleLikeFields"][] = "org_code";
$tdatafreee_partners[".googleLikeFields"][] = "country_code";
$tdatafreee_partners[".googleLikeFields"][] = "long_name";
$tdatafreee_partners[".googleLikeFields"][] = "name_kana";
$tdatafreee_partners[".googleLikeFields"][] = "default_title";
$tdatafreee_partners[".googleLikeFields"][] = "phone";
$tdatafreee_partners[".googleLikeFields"][] = "contact_name";
$tdatafreee_partners[".googleLikeFields"][] = "email";
$tdatafreee_partners[".googleLikeFields"][] = "payer_walletable_id";
$tdatafreee_partners[".googleLikeFields"][] = "transfer_fee_handling_side";
$tdatafreee_partners[".googleLikeFields"][] = "address_attributes";
$tdatafreee_partners[".googleLikeFields"][] = "partner_doc_setting_attributes";
$tdatafreee_partners[".googleLikeFields"][] = "partner_bank_account_attributes";
$tdatafreee_partners[".googleLikeFields"][] = "is_business";


$tdatafreee_partners[".advSearchFields"] = array();
$tdatafreee_partners[".advSearchFields"][] = "id";
$tdatafreee_partners[".advSearchFields"][] = "company_id";
$tdatafreee_partners[".advSearchFields"][] = "name";
$tdatafreee_partners[".advSearchFields"][] = "update_date";
$tdatafreee_partners[".advSearchFields"][] = "shortcut1";
$tdatafreee_partners[".advSearchFields"][] = "shortcut2";
$tdatafreee_partners[".advSearchFields"][] = "created_at";
$tdatafreee_partners[".advSearchFields"][] = "created_by";
$tdatafreee_partners[".advSearchFields"][] = "updated_at";
$tdatafreee_partners[".advSearchFields"][] = "updated_by";
$tdatafreee_partners[".advSearchFields"][] = "available";
$tdatafreee_partners[".advSearchFields"][] = "code";
$tdatafreee_partners[".advSearchFields"][] = "org_code";
$tdatafreee_partners[".advSearchFields"][] = "country_code";
$tdatafreee_partners[".advSearchFields"][] = "long_name";
$tdatafreee_partners[".advSearchFields"][] = "name_kana";
$tdatafreee_partners[".advSearchFields"][] = "default_title";
$tdatafreee_partners[".advSearchFields"][] = "phone";
$tdatafreee_partners[".advSearchFields"][] = "contact_name";
$tdatafreee_partners[".advSearchFields"][] = "email";
$tdatafreee_partners[".advSearchFields"][] = "payer_walletable_id";
$tdatafreee_partners[".advSearchFields"][] = "transfer_fee_handling_side";
$tdatafreee_partners[".advSearchFields"][] = "address_attributes";
$tdatafreee_partners[".advSearchFields"][] = "partner_doc_setting_attributes";
$tdatafreee_partners[".advSearchFields"][] = "partner_bank_account_attributes";
$tdatafreee_partners[".advSearchFields"][] = "is_business";

$tdatafreee_partners[".tableType"] = "list";

$tdatafreee_partners[".printerPageOrientation"] = 0;
$tdatafreee_partners[".nPrinterPageScale"] = 100;

$tdatafreee_partners[".nPrinterSplitRecords"] = 40;

$tdatafreee_partners[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_partners[".geocodingEnabled"] = false;





$tdatafreee_partners[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_partners[".pageSize"] = 100;

$tdatafreee_partners[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_partners[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_partners[".orderindexes"] = array();

$tdatafreee_partners[".sqlHead"] = "SELECT `id`,  	`company_id`,  	`name`,  	`update_date`,  	`shortcut1`,  	`shortcut2`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`available`,  	`code`,  	`org_code`,  	`country_code`,  	`long_name`,  	`name_kana`,  	`default_title`,  	`phone`,  	`contact_name`,  	`email`,  	`payer_walletable_id`,  	`transfer_fee_handling_side`,  	`address_attributes`,  	`partner_doc_setting_attributes`,  	`partner_bank_account_attributes`,  	`is_business`";
$tdatafreee_partners[".sqlFrom"] = "FROM `freee_partners`";
$tdatafreee_partners[".sqlWhereExpr"] = "";
$tdatafreee_partners[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_partners[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_partners[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_partners[".highlightSearchResults"] = true;

$tableKeysfreee_partners = array();
$tableKeysfreee_partners[] = "id";
$tdatafreee_partners[".Keys"] = $tableKeysfreee_partners;

$tdatafreee_partners[".listFields"] = array();
$tdatafreee_partners[".listFields"][] = "id";
$tdatafreee_partners[".listFields"][] = "company_id";
$tdatafreee_partners[".listFields"][] = "name";
$tdatafreee_partners[".listFields"][] = "update_date";
$tdatafreee_partners[".listFields"][] = "shortcut1";
$tdatafreee_partners[".listFields"][] = "shortcut2";
$tdatafreee_partners[".listFields"][] = "created_at";
$tdatafreee_partners[".listFields"][] = "created_by";
$tdatafreee_partners[".listFields"][] = "updated_at";
$tdatafreee_partners[".listFields"][] = "updated_by";
$tdatafreee_partners[".listFields"][] = "available";
$tdatafreee_partners[".listFields"][] = "code";
$tdatafreee_partners[".listFields"][] = "org_code";
$tdatafreee_partners[".listFields"][] = "country_code";
$tdatafreee_partners[".listFields"][] = "long_name";
$tdatafreee_partners[".listFields"][] = "name_kana";
$tdatafreee_partners[".listFields"][] = "default_title";
$tdatafreee_partners[".listFields"][] = "phone";
$tdatafreee_partners[".listFields"][] = "contact_name";
$tdatafreee_partners[".listFields"][] = "email";
$tdatafreee_partners[".listFields"][] = "payer_walletable_id";
$tdatafreee_partners[".listFields"][] = "transfer_fee_handling_side";
$tdatafreee_partners[".listFields"][] = "address_attributes";
$tdatafreee_partners[".listFields"][] = "partner_doc_setting_attributes";
$tdatafreee_partners[".listFields"][] = "partner_bank_account_attributes";
$tdatafreee_partners[".listFields"][] = "is_business";

$tdatafreee_partners[".hideMobileList"] = array();


$tdatafreee_partners[".viewFields"] = array();

$tdatafreee_partners[".addFields"] = array();

$tdatafreee_partners[".masterListFields"] = array();
$tdatafreee_partners[".masterListFields"][] = "id";
$tdatafreee_partners[".masterListFields"][] = "company_id";
$tdatafreee_partners[".masterListFields"][] = "name";
$tdatafreee_partners[".masterListFields"][] = "update_date";
$tdatafreee_partners[".masterListFields"][] = "shortcut1";
$tdatafreee_partners[".masterListFields"][] = "shortcut2";
$tdatafreee_partners[".masterListFields"][] = "created_at";
$tdatafreee_partners[".masterListFields"][] = "created_by";
$tdatafreee_partners[".masterListFields"][] = "updated_at";
$tdatafreee_partners[".masterListFields"][] = "updated_by";
$tdatafreee_partners[".masterListFields"][] = "available";
$tdatafreee_partners[".masterListFields"][] = "code";
$tdatafreee_partners[".masterListFields"][] = "org_code";
$tdatafreee_partners[".masterListFields"][] = "country_code";
$tdatafreee_partners[".masterListFields"][] = "long_name";
$tdatafreee_partners[".masterListFields"][] = "name_kana";
$tdatafreee_partners[".masterListFields"][] = "default_title";
$tdatafreee_partners[".masterListFields"][] = "phone";
$tdatafreee_partners[".masterListFields"][] = "contact_name";
$tdatafreee_partners[".masterListFields"][] = "email";
$tdatafreee_partners[".masterListFields"][] = "payer_walletable_id";
$tdatafreee_partners[".masterListFields"][] = "transfer_fee_handling_side";
$tdatafreee_partners[".masterListFields"][] = "address_attributes";
$tdatafreee_partners[".masterListFields"][] = "partner_doc_setting_attributes";
$tdatafreee_partners[".masterListFields"][] = "partner_bank_account_attributes";
$tdatafreee_partners[".masterListFields"][] = "is_business";

$tdatafreee_partners[".inlineAddFields"] = array();

$tdatafreee_partners[".editFields"] = array();

$tdatafreee_partners[".inlineEditFields"] = array();

$tdatafreee_partners[".updateSelectedFields"] = array();


$tdatafreee_partners[".exportFields"] = array();
$tdatafreee_partners[".exportFields"][] = "id";
$tdatafreee_partners[".exportFields"][] = "company_id";
$tdatafreee_partners[".exportFields"][] = "name";
$tdatafreee_partners[".exportFields"][] = "update_date";
$tdatafreee_partners[".exportFields"][] = "shortcut1";
$tdatafreee_partners[".exportFields"][] = "shortcut2";
$tdatafreee_partners[".exportFields"][] = "created_at";
$tdatafreee_partners[".exportFields"][] = "created_by";
$tdatafreee_partners[".exportFields"][] = "updated_at";
$tdatafreee_partners[".exportFields"][] = "updated_by";
$tdatafreee_partners[".exportFields"][] = "available";
$tdatafreee_partners[".exportFields"][] = "code";
$tdatafreee_partners[".exportFields"][] = "org_code";
$tdatafreee_partners[".exportFields"][] = "country_code";
$tdatafreee_partners[".exportFields"][] = "long_name";
$tdatafreee_partners[".exportFields"][] = "name_kana";
$tdatafreee_partners[".exportFields"][] = "default_title";
$tdatafreee_partners[".exportFields"][] = "phone";
$tdatafreee_partners[".exportFields"][] = "contact_name";
$tdatafreee_partners[".exportFields"][] = "email";
$tdatafreee_partners[".exportFields"][] = "payer_walletable_id";
$tdatafreee_partners[".exportFields"][] = "transfer_fee_handling_side";
$tdatafreee_partners[".exportFields"][] = "address_attributes";
$tdatafreee_partners[".exportFields"][] = "partner_doc_setting_attributes";
$tdatafreee_partners[".exportFields"][] = "partner_bank_account_attributes";
$tdatafreee_partners[".exportFields"][] = "is_business";

$tdatafreee_partners[".importFields"] = array();

$tdatafreee_partners[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","id");
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

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

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




	$tdatafreee_partners["id"] = $fdata;
//	company_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "company_id";
	$fdata["GoodName"] = "company_id";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","company_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "company_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`company_id`";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdatafreee_partners["company_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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
			$edata["EditParams"].= " maxlength=30";

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




	$tdatafreee_partners["name"] = $fdata;
//	update_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_date";
	$fdata["GoodName"] = "update_date";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","update_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_date`";

	
	
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




	$tdatafreee_partners["update_date"] = $fdata;
//	shortcut1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "shortcut1";
	$fdata["GoodName"] = "shortcut1";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","shortcut1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shortcut1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shortcut1`";

	
	
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




	$tdatafreee_partners["shortcut1"] = $fdata;
//	shortcut2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "shortcut2";
	$fdata["GoodName"] = "shortcut2";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","shortcut2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shortcut2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shortcut2`";

	
	
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




	$tdatafreee_partners["shortcut2"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","created_at");
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




	$tdatafreee_partners["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","created_by");
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




	$tdatafreee_partners["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","updated_at");
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




	$tdatafreee_partners["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","updated_by");
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




	$tdatafreee_partners["updated_by"] = $fdata;
//	available
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "available";
	$fdata["GoodName"] = "available";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","available");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "available";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`available`";

	
	
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




	$tdatafreee_partners["available"] = $fdata;
//	code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "code";
	$fdata["GoodName"] = "code";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`code`";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatafreee_partners["code"] = $fdata;
//	org_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "org_code";
	$fdata["GoodName"] = "org_code";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","org_code");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "org_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`org_code`";

	
	
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




	$tdatafreee_partners["org_code"] = $fdata;
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","country_code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "country_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`country_code`";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatafreee_partners["country_code"] = $fdata;
//	long_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "long_name";
	$fdata["GoodName"] = "long_name";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","long_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "long_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`long_name`";

	
	
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




	$tdatafreee_partners["long_name"] = $fdata;
//	name_kana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "name_kana";
	$fdata["GoodName"] = "name_kana";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","name_kana");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name_kana";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`name_kana`";

	
	
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




	$tdatafreee_partners["name_kana"] = $fdata;
//	default_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "default_title";
	$fdata["GoodName"] = "default_title";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","default_title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "default_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`default_title`";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatafreee_partners["default_title"] = $fdata;
//	phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "phone";
	$fdata["GoodName"] = "phone";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","phone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`phone`";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdatafreee_partners["phone"] = $fdata;
//	contact_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "contact_name";
	$fdata["GoodName"] = "contact_name";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","contact_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "contact_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`contact_name`";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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




	$tdatafreee_partners["contact_name"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatafreee_partners["email"] = $fdata;
//	payer_walletable_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "payer_walletable_id";
	$fdata["GoodName"] = "payer_walletable_id";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","payer_walletable_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "payer_walletable_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`payer_walletable_id`";

	
	
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




	$tdatafreee_partners["payer_walletable_id"] = $fdata;
//	transfer_fee_handling_side
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "transfer_fee_handling_side";
	$fdata["GoodName"] = "transfer_fee_handling_side";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","transfer_fee_handling_side");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "transfer_fee_handling_side";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`transfer_fee_handling_side`";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatafreee_partners["transfer_fee_handling_side"] = $fdata;
//	address_attributes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "address_attributes";
	$fdata["GoodName"] = "address_attributes";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","address_attributes");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address_attributes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`address_attributes`";

	
	
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
			$edata["EditParams"].= " maxlength=5000";

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




	$tdatafreee_partners["address_attributes"] = $fdata;
//	partner_doc_setting_attributes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "partner_doc_setting_attributes";
	$fdata["GoodName"] = "partner_doc_setting_attributes";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","partner_doc_setting_attributes");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "partner_doc_setting_attributes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`partner_doc_setting_attributes`";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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




	$tdatafreee_partners["partner_doc_setting_attributes"] = $fdata;
//	partner_bank_account_attributes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "partner_bank_account_attributes";
	$fdata["GoodName"] = "partner_bank_account_attributes";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","partner_bank_account_attributes");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "partner_bank_account_attributes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`partner_bank_account_attributes`";

	
	
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
			$edata["EditParams"].= " maxlength=5000";

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




	$tdatafreee_partners["partner_bank_account_attributes"] = $fdata;
//	is_business
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "is_business";
	$fdata["GoodName"] = "is_business";
	$fdata["ownerTable"] = "freee_partners";
	$fdata["Label"] = GetFieldLabel("freee_partners","is_business");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_business";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_business`";

	
	
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




	$tdatafreee_partners["is_business"] = $fdata;


$tables_data["freee_partners"]=&$tdatafreee_partners;
$field_labels["freee_partners"] = &$fieldLabelsfreee_partners;
$fieldToolTips["freee_partners"] = &$fieldToolTipsfreee_partners;
$placeHolders["freee_partners"] = &$placeHoldersfreee_partners;
$page_titles["freee_partners"] = &$pageTitlesfreee_partners;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_partners"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_partners"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_partners()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`company_id`,  	`name`,  	`update_date`,  	`shortcut1`,  	`shortcut2`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`available`,  	`code`,  	`org_code`,  	`country_code`,  	`long_name`,  	`name_kana`,  	`default_title`,  	`phone`,  	`contact_name`,  	`email`,  	`payer_walletable_id`,  	`transfer_fee_handling_side`,  	`address_attributes`,  	`partner_doc_setting_attributes`,  	`partner_bank_account_attributes`,  	`is_business`";
$proto0["m_strFrom"] = "FROM `freee_partners`";
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
	"m_strName" => "id",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_partners";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "company_id",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto8["m_sql"] = "`company_id`";
$proto8["m_srcTableName"] = "freee_partners";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto10["m_sql"] = "`name`";
$proto10["m_srcTableName"] = "freee_partners";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_date",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto12["m_sql"] = "`update_date`";
$proto12["m_srcTableName"] = "freee_partners";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "shortcut1",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto14["m_sql"] = "`shortcut1`";
$proto14["m_srcTableName"] = "freee_partners";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "shortcut2",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto16["m_sql"] = "`shortcut2`";
$proto16["m_srcTableName"] = "freee_partners";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "freee_partners";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto20["m_sql"] = "`created_by`";
$proto20["m_srcTableName"] = "freee_partners";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto22["m_sql"] = "`updated_at`";
$proto22["m_srcTableName"] = "freee_partners";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto24["m_sql"] = "`updated_by`";
$proto24["m_srcTableName"] = "freee_partners";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "available",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto26["m_sql"] = "`available`";
$proto26["m_srcTableName"] = "freee_partners";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "code",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto28["m_sql"] = "`code`";
$proto28["m_srcTableName"] = "freee_partners";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "org_code",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto30["m_sql"] = "`org_code`";
$proto30["m_srcTableName"] = "freee_partners";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto32["m_sql"] = "`country_code`";
$proto32["m_srcTableName"] = "freee_partners";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "long_name",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto34["m_sql"] = "`long_name`";
$proto34["m_srcTableName"] = "freee_partners";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "name_kana",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto36["m_sql"] = "`name_kana`";
$proto36["m_srcTableName"] = "freee_partners";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "default_title",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto38["m_sql"] = "`default_title`";
$proto38["m_srcTableName"] = "freee_partners";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "phone",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto40["m_sql"] = "`phone`";
$proto40["m_srcTableName"] = "freee_partners";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_name",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto42["m_sql"] = "`contact_name`";
$proto42["m_srcTableName"] = "freee_partners";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto44["m_sql"] = "`email`";
$proto44["m_srcTableName"] = "freee_partners";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "payer_walletable_id",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto46["m_sql"] = "`payer_walletable_id`";
$proto46["m_srcTableName"] = "freee_partners";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "transfer_fee_handling_side",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto48["m_sql"] = "`transfer_fee_handling_side`";
$proto48["m_srcTableName"] = "freee_partners";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "address_attributes",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto50["m_sql"] = "`address_attributes`";
$proto50["m_srcTableName"] = "freee_partners";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "partner_doc_setting_attributes",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto52["m_sql"] = "`partner_doc_setting_attributes`";
$proto52["m_srcTableName"] = "freee_partners";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "partner_bank_account_attributes",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto54["m_sql"] = "`partner_bank_account_attributes`";
$proto54["m_srcTableName"] = "freee_partners";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "is_business",
	"m_strTable" => "freee_partners",
	"m_srcTableName" => "freee_partners"
));

$proto56["m_sql"] = "`is_business`";
$proto56["m_srcTableName"] = "freee_partners";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "freee_partners";
$proto59["m_srcTableName"] = "freee_partners";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "id";
$proto59["m_columns"][] = "company_id";
$proto59["m_columns"][] = "name";
$proto59["m_columns"][] = "update_date";
$proto59["m_columns"][] = "shortcut1";
$proto59["m_columns"][] = "shortcut2";
$proto59["m_columns"][] = "created_at";
$proto59["m_columns"][] = "created_by";
$proto59["m_columns"][] = "updated_at";
$proto59["m_columns"][] = "updated_by";
$proto59["m_columns"][] = "available";
$proto59["m_columns"][] = "code";
$proto59["m_columns"][] = "org_code";
$proto59["m_columns"][] = "country_code";
$proto59["m_columns"][] = "long_name";
$proto59["m_columns"][] = "name_kana";
$proto59["m_columns"][] = "default_title";
$proto59["m_columns"][] = "phone";
$proto59["m_columns"][] = "contact_name";
$proto59["m_columns"][] = "email";
$proto59["m_columns"][] = "payer_walletable_id";
$proto59["m_columns"][] = "transfer_fee_handling_side";
$proto59["m_columns"][] = "address_attributes";
$proto59["m_columns"][] = "partner_doc_setting_attributes";
$proto59["m_columns"][] = "partner_bank_account_attributes";
$proto59["m_columns"][] = "is_business";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "`freee_partners`";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "freee_partners";
$proto60=array();
$proto60["m_sql"] = "";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="freee_partners";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_partners = createSqlQuery_freee_partners();


	
		;

																										

$tdatafreee_partners[".sqlquery"] = $queryData_freee_partners;

$tableEvents["freee_partners"] = new eventsBase;
$tdatafreee_partners[".hasEvents"] = false;

?>