<?php
require_once(getabspath("classes/cipherer.php"));




$tdatafreee_account_items = array();
	$tdatafreee_account_items[".truncateText"] = true;
	$tdatafreee_account_items[".NumberOfChars"] = 80;
	$tdatafreee_account_items[".ShortName"] = "freee_account_items";
	$tdatafreee_account_items[".OwnerID"] = "";
	$tdatafreee_account_items[".OriginalTable"] = "freee_account_items";

//	field labels
$fieldLabelsfreee_account_items = array();
$fieldToolTipsfreee_account_items = array();
$pageTitlesfreee_account_items = array();
$placeHoldersfreee_account_items = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsfreee_account_items["Japanese"] = array();
	$fieldToolTipsfreee_account_items["Japanese"] = array();
	$placeHoldersfreee_account_items["Japanese"] = array();
	$pageTitlesfreee_account_items["Japanese"] = array();
	$fieldLabelsfreee_account_items["Japanese"]["id"] = "Id";
	$fieldToolTipsfreee_account_items["Japanese"]["id"] = "";
	$placeHoldersfreee_account_items["Japanese"]["id"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["company_id"] = "Company Id";
	$fieldToolTipsfreee_account_items["Japanese"]["company_id"] = "";
	$placeHoldersfreee_account_items["Japanese"]["company_id"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["name"] = "Name";
	$fieldToolTipsfreee_account_items["Japanese"]["name"] = "";
	$placeHoldersfreee_account_items["Japanese"]["name"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["update_date"] = "Freee更新日";
	$fieldToolTipsfreee_account_items["Japanese"]["update_date"] = "";
	$placeHoldersfreee_account_items["Japanese"]["update_date"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee_account_items["Japanese"]["shortcut1"] = "";
	$placeHoldersfreee_account_items["Japanese"]["shortcut1"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee_account_items["Japanese"]["shortcut2"] = "";
	$placeHoldersfreee_account_items["Japanese"]["shortcut2"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsfreee_account_items["Japanese"]["created_at"] = "";
	$placeHoldersfreee_account_items["Japanese"]["created_at"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsfreee_account_items["Japanese"]["created_by"] = "";
	$placeHoldersfreee_account_items["Japanese"]["created_by"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsfreee_account_items["Japanese"]["updated_at"] = "";
	$placeHoldersfreee_account_items["Japanese"]["updated_at"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsfreee_account_items["Japanese"]["updated_by"] = "";
	$placeHoldersfreee_account_items["Japanese"]["updated_by"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["tax_code"] = "税区分コード";
	$fieldToolTipsfreee_account_items["Japanese"]["tax_code"] = "";
	$placeHoldersfreee_account_items["Japanese"]["tax_code"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["default_tax_id"] = "Default Tax Id";
	$fieldToolTipsfreee_account_items["Japanese"]["default_tax_id"] = "";
	$placeHoldersfreee_account_items["Japanese"]["default_tax_id"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["default_tax_code"] = "Default Tax Code";
	$fieldToolTipsfreee_account_items["Japanese"]["default_tax_code"] = "";
	$placeHoldersfreee_account_items["Japanese"]["default_tax_code"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["account_category"] = "勘定科目カテゴリー";
	$fieldToolTipsfreee_account_items["Japanese"]["account_category"] = "";
	$placeHoldersfreee_account_items["Japanese"]["account_category"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["account_category_id"] = "勘定科目カテゴリーId";
	$fieldToolTipsfreee_account_items["Japanese"]["account_category_id"] = "";
	$placeHoldersfreee_account_items["Japanese"]["account_category_id"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["categories"] = "勘定科目カテゴリー";
	$fieldToolTipsfreee_account_items["Japanese"]["categories"] = "";
	$placeHoldersfreee_account_items["Japanese"]["categories"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["available"] = "品目の使用設定";
	$fieldToolTipsfreee_account_items["Japanese"]["available"] = "";
	$placeHoldersfreee_account_items["Japanese"]["available"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["walletable_id"] = "口座Id";
	$fieldToolTipsfreee_account_items["Japanese"]["walletable_id"] = "";
	$placeHoldersfreee_account_items["Japanese"]["walletable_id"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["group_name"] = "決算書表示名（小カテゴリー）";
	$fieldToolTipsfreee_account_items["Japanese"]["group_name"] = "";
	$placeHoldersfreee_account_items["Japanese"]["group_name"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["corresponding_income_name"] = "収入取引相手勘定科目名";
	$fieldToolTipsfreee_account_items["Japanese"]["corresponding_income_name"] = "";
	$placeHoldersfreee_account_items["Japanese"]["corresponding_income_name"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["corresponding_income_id"] = "収入取引相手勘定科目名ID";
	$fieldToolTipsfreee_account_items["Japanese"]["corresponding_income_id"] = "";
	$placeHoldersfreee_account_items["Japanese"]["corresponding_income_id"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["corresponding_expense_name"] = "支出取引相手勘定科目名";
	$fieldToolTipsfreee_account_items["Japanese"]["corresponding_expense_name"] = "";
	$placeHoldersfreee_account_items["Japanese"]["corresponding_expense_name"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["corresponding_expense_id"] = "支出取引相手勘定科目ID";
	$fieldToolTipsfreee_account_items["Japanese"]["corresponding_expense_id"] = "";
	$placeHoldersfreee_account_items["Japanese"]["corresponding_expense_id"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["freee_expense_category_id"] = "経費カテゴリー";
	$fieldToolTipsfreee_account_items["Japanese"]["freee_expense_category_id"] = "";
	$placeHoldersfreee_account_items["Japanese"]["freee_expense_category_id"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["is_PL_or_BS"] = "Is PL Or BS";
	$fieldToolTipsfreee_account_items["Japanese"]["is_PL_or_BS"] = "";
	$placeHoldersfreee_account_items["Japanese"]["is_PL_or_BS"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["is_not_anbun"] = "配賦/按分しない";
	$fieldToolTipsfreee_account_items["Japanese"]["is_not_anbun"] = "";
	$placeHoldersfreee_account_items["Japanese"]["is_not_anbun"] = "";
	$fieldLabelsfreee_account_items["Japanese"]["description"] = "説明文";
	$fieldToolTipsfreee_account_items["Japanese"]["description"] = "";
	$placeHoldersfreee_account_items["Japanese"]["description"] = "";
	if (count($fieldToolTipsfreee_account_items["Japanese"]))
		$tdatafreee_account_items[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsfreee_account_items[""] = array();
	$fieldToolTipsfreee_account_items[""] = array();
	$placeHoldersfreee_account_items[""] = array();
	$pageTitlesfreee_account_items[""] = array();
	$fieldLabelsfreee_account_items[""]["id"] = "Id";
	$fieldToolTipsfreee_account_items[""]["id"] = "";
	$placeHoldersfreee_account_items[""]["id"] = "";
	$fieldLabelsfreee_account_items[""]["company_id"] = "Company Id";
	$fieldToolTipsfreee_account_items[""]["company_id"] = "";
	$placeHoldersfreee_account_items[""]["company_id"] = "";
	$fieldLabelsfreee_account_items[""]["name"] = "Name";
	$fieldToolTipsfreee_account_items[""]["name"] = "";
	$placeHoldersfreee_account_items[""]["name"] = "";
	$fieldLabelsfreee_account_items[""]["update_date"] = "Update Date";
	$fieldToolTipsfreee_account_items[""]["update_date"] = "";
	$placeHoldersfreee_account_items[""]["update_date"] = "";
	$fieldLabelsfreee_account_items[""]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee_account_items[""]["shortcut1"] = "";
	$placeHoldersfreee_account_items[""]["shortcut1"] = "";
	$fieldLabelsfreee_account_items[""]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee_account_items[""]["shortcut2"] = "";
	$placeHoldersfreee_account_items[""]["shortcut2"] = "";
	$fieldLabelsfreee_account_items[""]["created_at"] = "Created At";
	$fieldToolTipsfreee_account_items[""]["created_at"] = "";
	$placeHoldersfreee_account_items[""]["created_at"] = "";
	$fieldLabelsfreee_account_items[""]["created_by"] = "Created By";
	$fieldToolTipsfreee_account_items[""]["created_by"] = "";
	$placeHoldersfreee_account_items[""]["created_by"] = "";
	$fieldLabelsfreee_account_items[""]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_account_items[""]["updated_at"] = "";
	$placeHoldersfreee_account_items[""]["updated_at"] = "";
	$fieldLabelsfreee_account_items[""]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_account_items[""]["updated_by"] = "";
	$placeHoldersfreee_account_items[""]["updated_by"] = "";
	$fieldLabelsfreee_account_items[""]["tax_code"] = "Tax Code";
	$fieldToolTipsfreee_account_items[""]["tax_code"] = "";
	$placeHoldersfreee_account_items[""]["tax_code"] = "";
	$fieldLabelsfreee_account_items[""]["default_tax_id"] = "Default Tax Id";
	$fieldToolTipsfreee_account_items[""]["default_tax_id"] = "";
	$placeHoldersfreee_account_items[""]["default_tax_id"] = "";
	$fieldLabelsfreee_account_items[""]["default_tax_code"] = "Default Tax Code";
	$fieldToolTipsfreee_account_items[""]["default_tax_code"] = "";
	$placeHoldersfreee_account_items[""]["default_tax_code"] = "";
	$fieldLabelsfreee_account_items[""]["account_category"] = "Account Category";
	$fieldToolTipsfreee_account_items[""]["account_category"] = "";
	$placeHoldersfreee_account_items[""]["account_category"] = "";
	$fieldLabelsfreee_account_items[""]["account_category_id"] = "Account Category Id";
	$fieldToolTipsfreee_account_items[""]["account_category_id"] = "";
	$placeHoldersfreee_account_items[""]["account_category_id"] = "";
	$fieldLabelsfreee_account_items[""]["categories"] = "Categories";
	$fieldToolTipsfreee_account_items[""]["categories"] = "";
	$placeHoldersfreee_account_items[""]["categories"] = "";
	$fieldLabelsfreee_account_items[""]["available"] = "Available";
	$fieldToolTipsfreee_account_items[""]["available"] = "";
	$placeHoldersfreee_account_items[""]["available"] = "";
	$fieldLabelsfreee_account_items[""]["walletable_id"] = "Walletable Id";
	$fieldToolTipsfreee_account_items[""]["walletable_id"] = "";
	$placeHoldersfreee_account_items[""]["walletable_id"] = "";
	$fieldLabelsfreee_account_items[""]["group_name"] = "Group Name";
	$fieldToolTipsfreee_account_items[""]["group_name"] = "";
	$placeHoldersfreee_account_items[""]["group_name"] = "";
	$fieldLabelsfreee_account_items[""]["corresponding_income_name"] = "Corresponding Income Name";
	$fieldToolTipsfreee_account_items[""]["corresponding_income_name"] = "";
	$placeHoldersfreee_account_items[""]["corresponding_income_name"] = "";
	$fieldLabelsfreee_account_items[""]["corresponding_income_id"] = "Corresponding Income Id";
	$fieldToolTipsfreee_account_items[""]["corresponding_income_id"] = "";
	$placeHoldersfreee_account_items[""]["corresponding_income_id"] = "";
	$fieldLabelsfreee_account_items[""]["corresponding_expense_name"] = "Corresponding Expense Name";
	$fieldToolTipsfreee_account_items[""]["corresponding_expense_name"] = "";
	$placeHoldersfreee_account_items[""]["corresponding_expense_name"] = "";
	$fieldLabelsfreee_account_items[""]["corresponding_expense_id"] = "Corresponding Expense Id";
	$fieldToolTipsfreee_account_items[""]["corresponding_expense_id"] = "";
	$placeHoldersfreee_account_items[""]["corresponding_expense_id"] = "";
	$fieldLabelsfreee_account_items[""]["freee_expense_category_id"] = "Freee Expense Category Id";
	$fieldToolTipsfreee_account_items[""]["freee_expense_category_id"] = "";
	$placeHoldersfreee_account_items[""]["freee_expense_category_id"] = "";
	$fieldLabelsfreee_account_items[""]["is_PL_or_BS"] = "Is PL Or BS";
	$fieldToolTipsfreee_account_items[""]["is_PL_or_BS"] = "";
	$placeHoldersfreee_account_items[""]["is_PL_or_BS"] = "";
	$fieldLabelsfreee_account_items[""]["is_not_anbun"] = "Is Not Anbun";
	$fieldToolTipsfreee_account_items[""]["is_not_anbun"] = "";
	$placeHoldersfreee_account_items[""]["is_not_anbun"] = "";
	$fieldLabelsfreee_account_items[""]["description"] = "Description";
	$fieldToolTipsfreee_account_items[""]["description"] = "";
	$placeHoldersfreee_account_items[""]["description"] = "";
	if (count($fieldToolTipsfreee_account_items[""]))
		$tdatafreee_account_items[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsfreee_account_items["English"] = array();
	$fieldToolTipsfreee_account_items["English"] = array();
	$placeHoldersfreee_account_items["English"] = array();
	$pageTitlesfreee_account_items["English"] = array();
	$fieldLabelsfreee_account_items["English"]["id"] = "Id";
	$fieldToolTipsfreee_account_items["English"]["id"] = "";
	$placeHoldersfreee_account_items["English"]["id"] = "";
	$fieldLabelsfreee_account_items["English"]["company_id"] = "Company Id";
	$fieldToolTipsfreee_account_items["English"]["company_id"] = "";
	$placeHoldersfreee_account_items["English"]["company_id"] = "";
	$fieldLabelsfreee_account_items["English"]["name"] = "Name";
	$fieldToolTipsfreee_account_items["English"]["name"] = "";
	$placeHoldersfreee_account_items["English"]["name"] = "";
	$fieldLabelsfreee_account_items["English"]["update_date"] = "Update Date";
	$fieldToolTipsfreee_account_items["English"]["update_date"] = "";
	$placeHoldersfreee_account_items["English"]["update_date"] = "";
	$fieldLabelsfreee_account_items["English"]["shortcut1"] = "Shortcut1";
	$fieldToolTipsfreee_account_items["English"]["shortcut1"] = "";
	$placeHoldersfreee_account_items["English"]["shortcut1"] = "";
	$fieldLabelsfreee_account_items["English"]["shortcut2"] = "Shortcut2";
	$fieldToolTipsfreee_account_items["English"]["shortcut2"] = "";
	$placeHoldersfreee_account_items["English"]["shortcut2"] = "";
	$fieldLabelsfreee_account_items["English"]["created_at"] = "Created At";
	$fieldToolTipsfreee_account_items["English"]["created_at"] = "";
	$placeHoldersfreee_account_items["English"]["created_at"] = "";
	$fieldLabelsfreee_account_items["English"]["created_by"] = "Created By";
	$fieldToolTipsfreee_account_items["English"]["created_by"] = "";
	$placeHoldersfreee_account_items["English"]["created_by"] = "";
	$fieldLabelsfreee_account_items["English"]["updated_at"] = "Updated At";
	$fieldToolTipsfreee_account_items["English"]["updated_at"] = "";
	$placeHoldersfreee_account_items["English"]["updated_at"] = "";
	$fieldLabelsfreee_account_items["English"]["updated_by"] = "Updated By";
	$fieldToolTipsfreee_account_items["English"]["updated_by"] = "";
	$placeHoldersfreee_account_items["English"]["updated_by"] = "";
	$fieldLabelsfreee_account_items["English"]["tax_code"] = "Tax Code";
	$fieldToolTipsfreee_account_items["English"]["tax_code"] = "";
	$placeHoldersfreee_account_items["English"]["tax_code"] = "";
	$fieldLabelsfreee_account_items["English"]["default_tax_id"] = "Default Tax Id";
	$fieldToolTipsfreee_account_items["English"]["default_tax_id"] = "";
	$placeHoldersfreee_account_items["English"]["default_tax_id"] = "";
	$fieldLabelsfreee_account_items["English"]["default_tax_code"] = "Default Tax Code";
	$fieldToolTipsfreee_account_items["English"]["default_tax_code"] = "";
	$placeHoldersfreee_account_items["English"]["default_tax_code"] = "";
	$fieldLabelsfreee_account_items["English"]["account_category"] = "Account Category";
	$fieldToolTipsfreee_account_items["English"]["account_category"] = "";
	$placeHoldersfreee_account_items["English"]["account_category"] = "";
	$fieldLabelsfreee_account_items["English"]["account_category_id"] = "Account Category Id";
	$fieldToolTipsfreee_account_items["English"]["account_category_id"] = "";
	$placeHoldersfreee_account_items["English"]["account_category_id"] = "";
	$fieldLabelsfreee_account_items["English"]["categories"] = "Categories";
	$fieldToolTipsfreee_account_items["English"]["categories"] = "";
	$placeHoldersfreee_account_items["English"]["categories"] = "";
	$fieldLabelsfreee_account_items["English"]["available"] = "Available";
	$fieldToolTipsfreee_account_items["English"]["available"] = "";
	$placeHoldersfreee_account_items["English"]["available"] = "";
	$fieldLabelsfreee_account_items["English"]["walletable_id"] = "Walletable Id";
	$fieldToolTipsfreee_account_items["English"]["walletable_id"] = "";
	$placeHoldersfreee_account_items["English"]["walletable_id"] = "";
	$fieldLabelsfreee_account_items["English"]["group_name"] = "Group Name";
	$fieldToolTipsfreee_account_items["English"]["group_name"] = "";
	$placeHoldersfreee_account_items["English"]["group_name"] = "";
	$fieldLabelsfreee_account_items["English"]["corresponding_income_name"] = "Corresponding Income Name";
	$fieldToolTipsfreee_account_items["English"]["corresponding_income_name"] = "";
	$placeHoldersfreee_account_items["English"]["corresponding_income_name"] = "";
	$fieldLabelsfreee_account_items["English"]["corresponding_income_id"] = "Corresponding Income Id";
	$fieldToolTipsfreee_account_items["English"]["corresponding_income_id"] = "";
	$placeHoldersfreee_account_items["English"]["corresponding_income_id"] = "";
	$fieldLabelsfreee_account_items["English"]["corresponding_expense_name"] = "Corresponding Expense Name";
	$fieldToolTipsfreee_account_items["English"]["corresponding_expense_name"] = "";
	$placeHoldersfreee_account_items["English"]["corresponding_expense_name"] = "";
	$fieldLabelsfreee_account_items["English"]["corresponding_expense_id"] = "Corresponding Expense Id";
	$fieldToolTipsfreee_account_items["English"]["corresponding_expense_id"] = "";
	$placeHoldersfreee_account_items["English"]["corresponding_expense_id"] = "";
	$fieldLabelsfreee_account_items["English"]["freee_expense_category_id"] = "Freee Expense Category Id";
	$fieldToolTipsfreee_account_items["English"]["freee_expense_category_id"] = "";
	$placeHoldersfreee_account_items["English"]["freee_expense_category_id"] = "";
	$fieldLabelsfreee_account_items["English"]["is_PL_or_BS"] = "Is PL Or BS";
	$fieldToolTipsfreee_account_items["English"]["is_PL_or_BS"] = "";
	$placeHoldersfreee_account_items["English"]["is_PL_or_BS"] = "";
	$fieldLabelsfreee_account_items["English"]["is_not_anbun"] = "Is Not Anbun";
	$fieldToolTipsfreee_account_items["English"]["is_not_anbun"] = "";
	$placeHoldersfreee_account_items["English"]["is_not_anbun"] = "";
	$fieldLabelsfreee_account_items["English"]["description"] = "Description";
	$fieldToolTipsfreee_account_items["English"]["description"] = "";
	$placeHoldersfreee_account_items["English"]["description"] = "";
	if (count($fieldToolTipsfreee_account_items["English"]))
		$tdatafreee_account_items[".isUseToolTips"] = true;
}


	$tdatafreee_account_items[".NCSearch"] = true;



$tdatafreee_account_items[".shortTableName"] = "freee_account_items";
$tdatafreee_account_items[".nSecOptions"] = 0;
$tdatafreee_account_items[".recsPerRowPrint"] = 1;
$tdatafreee_account_items[".mainTableOwnerID"] = "";
$tdatafreee_account_items[".moveNext"] = 1;
$tdatafreee_account_items[".entityType"] = 0;

$tdatafreee_account_items[".strOriginalTableName"] = "freee_account_items";

	



$tdatafreee_account_items[".showAddInPopup"] = false;

$tdatafreee_account_items[".showEditInPopup"] = false;

$tdatafreee_account_items[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafreee_account_items[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafreee_account_items[".fieldsForRegister"] = array();

$tdatafreee_account_items[".listAjax"] = false;

	$tdatafreee_account_items[".audit"] = false;

	$tdatafreee_account_items[".locking"] = false;



$tdatafreee_account_items[".list"] = true;

$tdatafreee_account_items[".inlineEdit"] = true;


$tdatafreee_account_items[".reorderRecordsByHeader"] = true;




$tdatafreee_account_items[".import"] = true;

$tdatafreee_account_items[".exportTo"] = true;



$tdatafreee_account_items[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatafreee_account_items[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatafreee_account_items[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatafreee_account_items[".searchSaving"] = false;
//

$tdatafreee_account_items[".showSearchPanel"] = true;
		$tdatafreee_account_items[".flexibleSearch"] = true;

$tdatafreee_account_items[".isUseAjaxSuggest"] = true;

$tdatafreee_account_items[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatafreee_account_items[".ajaxCodeSnippetAdded"] = false;

$tdatafreee_account_items[".buttonsAdded"] = false;

$tdatafreee_account_items[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafreee_account_items[".isUseTimeForSearch"] = false;





$tdatafreee_account_items[".allSearchFields"] = array();
$tdatafreee_account_items[".filterFields"] = array();
$tdatafreee_account_items[".requiredSearchFields"] = array();

$tdatafreee_account_items[".allSearchFields"][] = "is_PL_or_BS";
	$tdatafreee_account_items[".allSearchFields"][] = "is_not_anbun";
	$tdatafreee_account_items[".allSearchFields"][] = "id";
	$tdatafreee_account_items[".allSearchFields"][] = "freee_expense_category_id";
	$tdatafreee_account_items[".allSearchFields"][] = "name";
	$tdatafreee_account_items[".allSearchFields"][] = "tax_code";
	$tdatafreee_account_items[".allSearchFields"][] = "account_category";
	$tdatafreee_account_items[".allSearchFields"][] = "account_category_id";
	$tdatafreee_account_items[".allSearchFields"][] = "available";
	$tdatafreee_account_items[".allSearchFields"][] = "walletable_id";
	$tdatafreee_account_items[".allSearchFields"][] = "group_name";
	$tdatafreee_account_items[".allSearchFields"][] = "corresponding_income_name";
	$tdatafreee_account_items[".allSearchFields"][] = "corresponding_income_id";
	$tdatafreee_account_items[".allSearchFields"][] = "corresponding_expense_name";
	$tdatafreee_account_items[".allSearchFields"][] = "corresponding_expense_id";
	$tdatafreee_account_items[".allSearchFields"][] = "description";
	$tdatafreee_account_items[".allSearchFields"][] = "update_date";
	$tdatafreee_account_items[".allSearchFields"][] = "created_at";
	$tdatafreee_account_items[".allSearchFields"][] = "created_by";
	$tdatafreee_account_items[".allSearchFields"][] = "updated_at";
	$tdatafreee_account_items[".allSearchFields"][] = "updated_by";
	

$tdatafreee_account_items[".googleLikeFields"] = array();
$tdatafreee_account_items[".googleLikeFields"][] = "id";
$tdatafreee_account_items[".googleLikeFields"][] = "company_id";
$tdatafreee_account_items[".googleLikeFields"][] = "name";
$tdatafreee_account_items[".googleLikeFields"][] = "update_date";
$tdatafreee_account_items[".googleLikeFields"][] = "shortcut1";
$tdatafreee_account_items[".googleLikeFields"][] = "shortcut2";
$tdatafreee_account_items[".googleLikeFields"][] = "created_at";
$tdatafreee_account_items[".googleLikeFields"][] = "created_by";
$tdatafreee_account_items[".googleLikeFields"][] = "updated_at";
$tdatafreee_account_items[".googleLikeFields"][] = "updated_by";
$tdatafreee_account_items[".googleLikeFields"][] = "tax_code";
$tdatafreee_account_items[".googleLikeFields"][] = "default_tax_id";
$tdatafreee_account_items[".googleLikeFields"][] = "default_tax_code";
$tdatafreee_account_items[".googleLikeFields"][] = "account_category";
$tdatafreee_account_items[".googleLikeFields"][] = "account_category_id";
$tdatafreee_account_items[".googleLikeFields"][] = "categories";
$tdatafreee_account_items[".googleLikeFields"][] = "available";
$tdatafreee_account_items[".googleLikeFields"][] = "walletable_id";
$tdatafreee_account_items[".googleLikeFields"][] = "group_name";
$tdatafreee_account_items[".googleLikeFields"][] = "corresponding_income_name";
$tdatafreee_account_items[".googleLikeFields"][] = "corresponding_income_id";
$tdatafreee_account_items[".googleLikeFields"][] = "corresponding_expense_name";
$tdatafreee_account_items[".googleLikeFields"][] = "corresponding_expense_id";
$tdatafreee_account_items[".googleLikeFields"][] = "freee_expense_category_id";
$tdatafreee_account_items[".googleLikeFields"][] = "is_PL_or_BS";
$tdatafreee_account_items[".googleLikeFields"][] = "is_not_anbun";
$tdatafreee_account_items[".googleLikeFields"][] = "description";


$tdatafreee_account_items[".advSearchFields"] = array();
$tdatafreee_account_items[".advSearchFields"][] = "is_PL_or_BS";
$tdatafreee_account_items[".advSearchFields"][] = "is_not_anbun";
$tdatafreee_account_items[".advSearchFields"][] = "id";
$tdatafreee_account_items[".advSearchFields"][] = "freee_expense_category_id";
$tdatafreee_account_items[".advSearchFields"][] = "name";
$tdatafreee_account_items[".advSearchFields"][] = "tax_code";
$tdatafreee_account_items[".advSearchFields"][] = "account_category";
$tdatafreee_account_items[".advSearchFields"][] = "account_category_id";
$tdatafreee_account_items[".advSearchFields"][] = "available";
$tdatafreee_account_items[".advSearchFields"][] = "walletable_id";
$tdatafreee_account_items[".advSearchFields"][] = "group_name";
$tdatafreee_account_items[".advSearchFields"][] = "corresponding_income_name";
$tdatafreee_account_items[".advSearchFields"][] = "corresponding_income_id";
$tdatafreee_account_items[".advSearchFields"][] = "corresponding_expense_name";
$tdatafreee_account_items[".advSearchFields"][] = "corresponding_expense_id";
$tdatafreee_account_items[".advSearchFields"][] = "description";
$tdatafreee_account_items[".advSearchFields"][] = "update_date";
$tdatafreee_account_items[".advSearchFields"][] = "created_at";
$tdatafreee_account_items[".advSearchFields"][] = "created_by";
$tdatafreee_account_items[".advSearchFields"][] = "updated_at";
$tdatafreee_account_items[".advSearchFields"][] = "updated_by";

$tdatafreee_account_items[".tableType"] = "list";

$tdatafreee_account_items[".printerPageOrientation"] = 0;
$tdatafreee_account_items[".nPrinterPageScale"] = 100;

$tdatafreee_account_items[".nPrinterSplitRecords"] = 40;

$tdatafreee_account_items[".nPrinterPDFSplitRecords"] = 40;



$tdatafreee_account_items[".geocodingEnabled"] = false;





$tdatafreee_account_items[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatafreee_account_items[".pageSize"] = 100;

$tdatafreee_account_items[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafreee_account_items[".strOrderBy"] = $tstrOrderBy;

$tdatafreee_account_items[".orderindexes"] = array();

$tdatafreee_account_items[".sqlHead"] = "SELECT `id`,  	`company_id`,  	`name`,  	`update_date`,  	`shortcut1`,  	`shortcut2`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`tax_code`,  	`default_tax_id`,  	`default_tax_code`,  	`account_category`,  	`account_category_id`,  	`categories`,  	`available`,  	`walletable_id`,  	`group_name`,  	`corresponding_income_name`,  	`corresponding_income_id`,  	`corresponding_expense_name`,  	`corresponding_expense_id`,  	`freee_expense_category_id`,  	`is_PL_or_BS`,  	`is_not_anbun`,  	`description`";
$tdatafreee_account_items[".sqlFrom"] = "FROM `freee_account_items`";
$tdatafreee_account_items[".sqlWhereExpr"] = "";
$tdatafreee_account_items[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafreee_account_items[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafreee_account_items[".arrGroupsPerPage"] = $arrGPP;

$tdatafreee_account_items[".highlightSearchResults"] = true;

$tableKeysfreee_account_items = array();
$tableKeysfreee_account_items[] = "id";
$tdatafreee_account_items[".Keys"] = $tableKeysfreee_account_items;

$tdatafreee_account_items[".listFields"] = array();
$tdatafreee_account_items[".listFields"][] = "is_PL_or_BS";
$tdatafreee_account_items[".listFields"][] = "is_not_anbun";
$tdatafreee_account_items[".listFields"][] = "id";
$tdatafreee_account_items[".listFields"][] = "freee_expense_category_id";
$tdatafreee_account_items[".listFields"][] = "name";
$tdatafreee_account_items[".listFields"][] = "tax_code";
$tdatafreee_account_items[".listFields"][] = "account_category";
$tdatafreee_account_items[".listFields"][] = "account_category_id";
$tdatafreee_account_items[".listFields"][] = "available";
$tdatafreee_account_items[".listFields"][] = "walletable_id";
$tdatafreee_account_items[".listFields"][] = "group_name";
$tdatafreee_account_items[".listFields"][] = "corresponding_income_name";
$tdatafreee_account_items[".listFields"][] = "corresponding_income_id";
$tdatafreee_account_items[".listFields"][] = "corresponding_expense_name";
$tdatafreee_account_items[".listFields"][] = "corresponding_expense_id";
$tdatafreee_account_items[".listFields"][] = "description";
$tdatafreee_account_items[".listFields"][] = "update_date";
$tdatafreee_account_items[".listFields"][] = "created_at";
$tdatafreee_account_items[".listFields"][] = "created_by";
$tdatafreee_account_items[".listFields"][] = "updated_at";
$tdatafreee_account_items[".listFields"][] = "updated_by";

$tdatafreee_account_items[".hideMobileList"] = array();


$tdatafreee_account_items[".viewFields"] = array();

$tdatafreee_account_items[".addFields"] = array();

$tdatafreee_account_items[".masterListFields"] = array();
$tdatafreee_account_items[".masterListFields"][] = "company_id";
$tdatafreee_account_items[".masterListFields"][] = "is_PL_or_BS";
$tdatafreee_account_items[".masterListFields"][] = "shortcut1";
$tdatafreee_account_items[".masterListFields"][] = "is_not_anbun";
$tdatafreee_account_items[".masterListFields"][] = "id";
$tdatafreee_account_items[".masterListFields"][] = "shortcut2";
$tdatafreee_account_items[".masterListFields"][] = "default_tax_id";
$tdatafreee_account_items[".masterListFields"][] = "freee_expense_category_id";
$tdatafreee_account_items[".masterListFields"][] = "name";
$tdatafreee_account_items[".masterListFields"][] = "default_tax_code";
$tdatafreee_account_items[".masterListFields"][] = "tax_code";
$tdatafreee_account_items[".masterListFields"][] = "account_category";
$tdatafreee_account_items[".masterListFields"][] = "account_category_id";
$tdatafreee_account_items[".masterListFields"][] = "available";
$tdatafreee_account_items[".masterListFields"][] = "walletable_id";
$tdatafreee_account_items[".masterListFields"][] = "group_name";
$tdatafreee_account_items[".masterListFields"][] = "categories";
$tdatafreee_account_items[".masterListFields"][] = "corresponding_income_name";
$tdatafreee_account_items[".masterListFields"][] = "corresponding_income_id";
$tdatafreee_account_items[".masterListFields"][] = "corresponding_expense_name";
$tdatafreee_account_items[".masterListFields"][] = "corresponding_expense_id";
$tdatafreee_account_items[".masterListFields"][] = "description";
$tdatafreee_account_items[".masterListFields"][] = "update_date";
$tdatafreee_account_items[".masterListFields"][] = "created_at";
$tdatafreee_account_items[".masterListFields"][] = "created_by";
$tdatafreee_account_items[".masterListFields"][] = "updated_at";
$tdatafreee_account_items[".masterListFields"][] = "updated_by";

$tdatafreee_account_items[".inlineAddFields"] = array();

$tdatafreee_account_items[".editFields"] = array();

$tdatafreee_account_items[".inlineEditFields"] = array();
$tdatafreee_account_items[".inlineEditFields"][] = "is_PL_or_BS";
$tdatafreee_account_items[".inlineEditFields"][] = "is_not_anbun";
$tdatafreee_account_items[".inlineEditFields"][] = "freee_expense_category_id";
$tdatafreee_account_items[".inlineEditFields"][] = "description";

$tdatafreee_account_items[".updateSelectedFields"] = array();


$tdatafreee_account_items[".exportFields"] = array();
$tdatafreee_account_items[".exportFields"][] = "is_PL_or_BS";
$tdatafreee_account_items[".exportFields"][] = "is_not_anbun";
$tdatafreee_account_items[".exportFields"][] = "id";
$tdatafreee_account_items[".exportFields"][] = "freee_expense_category_id";
$tdatafreee_account_items[".exportFields"][] = "name";
$tdatafreee_account_items[".exportFields"][] = "tax_code";
$tdatafreee_account_items[".exportFields"][] = "account_category";
$tdatafreee_account_items[".exportFields"][] = "account_category_id";
$tdatafreee_account_items[".exportFields"][] = "available";
$tdatafreee_account_items[".exportFields"][] = "walletable_id";
$tdatafreee_account_items[".exportFields"][] = "group_name";
$tdatafreee_account_items[".exportFields"][] = "corresponding_income_name";
$tdatafreee_account_items[".exportFields"][] = "corresponding_income_id";
$tdatafreee_account_items[".exportFields"][] = "corresponding_expense_name";
$tdatafreee_account_items[".exportFields"][] = "corresponding_expense_id";
$tdatafreee_account_items[".exportFields"][] = "description";
$tdatafreee_account_items[".exportFields"][] = "update_date";
$tdatafreee_account_items[".exportFields"][] = "created_at";
$tdatafreee_account_items[".exportFields"][] = "created_by";
$tdatafreee_account_items[".exportFields"][] = "updated_at";
$tdatafreee_account_items[".exportFields"][] = "updated_by";

$tdatafreee_account_items[".importFields"] = array();
$tdatafreee_account_items[".importFields"][] = "id";
$tdatafreee_account_items[".importFields"][] = "freee_expense_category_id";
$tdatafreee_account_items[".importFields"][] = "is_PL_or_BS";
$tdatafreee_account_items[".importFields"][] = "is_not_anbun";
$tdatafreee_account_items[".importFields"][] = "description";

$tdatafreee_account_items[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","id");
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




	$tdatafreee_account_items["id"] = $fdata;
//	company_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "company_id";
	$fdata["GoodName"] = "company_id";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","company_id");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "company_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`company_id`";

	
	
			
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








	$tdatafreee_account_items["company_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","name");
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




	$tdatafreee_account_items["name"] = $fdata;
//	update_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_date";
	$fdata["GoodName"] = "update_date";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","update_date");
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




	$tdatafreee_account_items["update_date"] = $fdata;
//	shortcut1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "shortcut1";
	$fdata["GoodName"] = "shortcut1";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","shortcut1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "shortcut1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shortcut1`";

	
	
			
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








	$tdatafreee_account_items["shortcut1"] = $fdata;
//	shortcut2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "shortcut2";
	$fdata["GoodName"] = "shortcut2";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","shortcut2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "shortcut2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shortcut2`";

	
	
			
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








	$tdatafreee_account_items["shortcut2"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","created_at");
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




	$tdatafreee_account_items["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","created_by");
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




	$tdatafreee_account_items["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","updated_at");
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




	$tdatafreee_account_items["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","updated_by");
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




	$tdatafreee_account_items["updated_by"] = $fdata;
//	tax_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tax_code";
	$fdata["GoodName"] = "tax_code";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","tax_code");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tax_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tax_code`";

	
	
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




	$tdatafreee_account_items["tax_code"] = $fdata;
//	default_tax_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "default_tax_id";
	$fdata["GoodName"] = "default_tax_id";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","default_tax_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "default_tax_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`default_tax_id`";

	
	
			
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








	$tdatafreee_account_items["default_tax_id"] = $fdata;
//	default_tax_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "default_tax_code";
	$fdata["GoodName"] = "default_tax_code";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","default_tax_code");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "default_tax_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`default_tax_code`";

	
	
			
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








	$tdatafreee_account_items["default_tax_code"] = $fdata;
//	account_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "account_category";
	$fdata["GoodName"] = "account_category";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","account_category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "account_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`account_category`";

	
	
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




	$tdatafreee_account_items["account_category"] = $fdata;
//	account_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "account_category_id";
	$fdata["GoodName"] = "account_category_id";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","account_category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "account_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`account_category_id`";

	
	
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




	$tdatafreee_account_items["account_category_id"] = $fdata;
//	categories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "categories";
	$fdata["GoodName"] = "categories";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","categories");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "categories";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`categories`";

	
	
			
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








	$tdatafreee_account_items["categories"] = $fdata;
//	available
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "available";
	$fdata["GoodName"] = "available";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","available");
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




	$tdatafreee_account_items["available"] = $fdata;
//	walletable_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "walletable_id";
	$fdata["GoodName"] = "walletable_id";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","walletable_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "walletable_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`walletable_id`";

	
	
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




	$tdatafreee_account_items["walletable_id"] = $fdata;
//	group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "group_name";
	$fdata["GoodName"] = "group_name";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","group_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "group_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`group_name`";

	
	
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




	$tdatafreee_account_items["group_name"] = $fdata;
//	corresponding_income_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "corresponding_income_name";
	$fdata["GoodName"] = "corresponding_income_name";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","corresponding_income_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "corresponding_income_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`corresponding_income_name`";

	
	
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




	$tdatafreee_account_items["corresponding_income_name"] = $fdata;
//	corresponding_income_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "corresponding_income_id";
	$fdata["GoodName"] = "corresponding_income_id";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","corresponding_income_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "corresponding_income_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`corresponding_income_id`";

	
	
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




	$tdatafreee_account_items["corresponding_income_id"] = $fdata;
//	corresponding_expense_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "corresponding_expense_name";
	$fdata["GoodName"] = "corresponding_expense_name";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","corresponding_expense_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "corresponding_expense_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`corresponding_expense_name`";

	
	
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




	$tdatafreee_account_items["corresponding_expense_name"] = $fdata;
//	corresponding_expense_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "corresponding_expense_id";
	$fdata["GoodName"] = "corresponding_expense_id";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","corresponding_expense_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "corresponding_expense_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`corresponding_expense_id`";

	
	
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




	$tdatafreee_account_items["corresponding_expense_id"] = $fdata;
//	freee_expense_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "freee_expense_category_id";
	$fdata["GoodName"] = "freee_expense_category_id";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","freee_expense_category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_expense_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_expense_category_id`";

	
	
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
	$edata["LookupTable"] = "freee_expense_categories";
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




	$tdatafreee_account_items["freee_expense_category_id"] = $fdata;
//	is_PL_or_BS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "is_PL_or_BS";
	$fdata["GoodName"] = "is_PL_or_BS";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","is_PL_or_BS");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_PL_or_BS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_PL_or_BS`";

	
	
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
	$edata["LookupValues"][] = "PL";
	$edata["LookupValues"][] = "BS";

	
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




	$tdatafreee_account_items["is_PL_or_BS"] = $fdata;
//	is_not_anbun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "is_not_anbun";
	$fdata["GoodName"] = "is_not_anbun";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","is_not_anbun");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_not_anbun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_not_anbun`";

	
	
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




	$tdatafreee_account_items["is_not_anbun"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "freee_account_items";
	$fdata["Label"] = GetFieldLabel("freee_account_items","description");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`description`";

	
	
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




	$tdatafreee_account_items["description"] = $fdata;


$tables_data["freee_account_items"]=&$tdatafreee_account_items;
$field_labels["freee_account_items"] = &$fieldLabelsfreee_account_items;
$fieldToolTips["freee_account_items"] = &$fieldToolTipsfreee_account_items;
$placeHolders["freee_account_items"] = &$placeHoldersfreee_account_items;
$page_titles["freee_account_items"] = &$pageTitlesfreee_account_items;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["freee_account_items"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["freee_account_items"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_freee_account_items()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`company_id`,  	`name`,  	`update_date`,  	`shortcut1`,  	`shortcut2`,  	`created_at`,  	`created_by`,  	`updated_at`,  	`updated_by`,  	`tax_code`,  	`default_tax_id`,  	`default_tax_code`,  	`account_category`,  	`account_category_id`,  	`categories`,  	`available`,  	`walletable_id`,  	`group_name`,  	`corresponding_income_name`,  	`corresponding_income_id`,  	`corresponding_expense_name`,  	`corresponding_expense_id`,  	`freee_expense_category_id`,  	`is_PL_or_BS`,  	`is_not_anbun`,  	`description`";
$proto0["m_strFrom"] = "FROM `freee_account_items`";
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
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "freee_account_items";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "company_id",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto8["m_sql"] = "`company_id`";
$proto8["m_srcTableName"] = "freee_account_items";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto10["m_sql"] = "`name`";
$proto10["m_srcTableName"] = "freee_account_items";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_date",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto12["m_sql"] = "`update_date`";
$proto12["m_srcTableName"] = "freee_account_items";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "shortcut1",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto14["m_sql"] = "`shortcut1`";
$proto14["m_srcTableName"] = "freee_account_items";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "shortcut2",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto16["m_sql"] = "`shortcut2`";
$proto16["m_srcTableName"] = "freee_account_items";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "freee_account_items";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto20["m_sql"] = "`created_by`";
$proto20["m_srcTableName"] = "freee_account_items";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto22["m_sql"] = "`updated_at`";
$proto22["m_srcTableName"] = "freee_account_items";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto24["m_sql"] = "`updated_by`";
$proto24["m_srcTableName"] = "freee_account_items";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "tax_code",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto26["m_sql"] = "`tax_code`";
$proto26["m_srcTableName"] = "freee_account_items";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "default_tax_id",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto28["m_sql"] = "`default_tax_id`";
$proto28["m_srcTableName"] = "freee_account_items";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "default_tax_code",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto30["m_sql"] = "`default_tax_code`";
$proto30["m_srcTableName"] = "freee_account_items";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "account_category",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto32["m_sql"] = "`account_category`";
$proto32["m_srcTableName"] = "freee_account_items";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "account_category_id",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto34["m_sql"] = "`account_category_id`";
$proto34["m_srcTableName"] = "freee_account_items";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "categories",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto36["m_sql"] = "`categories`";
$proto36["m_srcTableName"] = "freee_account_items";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "available",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto38["m_sql"] = "`available`";
$proto38["m_srcTableName"] = "freee_account_items";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "walletable_id",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto40["m_sql"] = "`walletable_id`";
$proto40["m_srcTableName"] = "freee_account_items";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "group_name",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto42["m_sql"] = "`group_name`";
$proto42["m_srcTableName"] = "freee_account_items";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "corresponding_income_name",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto44["m_sql"] = "`corresponding_income_name`";
$proto44["m_srcTableName"] = "freee_account_items";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "corresponding_income_id",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto46["m_sql"] = "`corresponding_income_id`";
$proto46["m_srcTableName"] = "freee_account_items";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "corresponding_expense_name",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto48["m_sql"] = "`corresponding_expense_name`";
$proto48["m_srcTableName"] = "freee_account_items";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "corresponding_expense_id",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto50["m_sql"] = "`corresponding_expense_id`";
$proto50["m_srcTableName"] = "freee_account_items";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_expense_category_id",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto52["m_sql"] = "`freee_expense_category_id`";
$proto52["m_srcTableName"] = "freee_account_items";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "is_PL_or_BS",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto54["m_sql"] = "`is_PL_or_BS`";
$proto54["m_srcTableName"] = "freee_account_items";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "is_not_anbun",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto56["m_sql"] = "`is_not_anbun`";
$proto56["m_srcTableName"] = "freee_account_items";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "freee_account_items",
	"m_srcTableName" => "freee_account_items"
));

$proto58["m_sql"] = "`description`";
$proto58["m_srcTableName"] = "freee_account_items";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto60=array();
$proto60["m_link"] = "SQLL_MAIN";
			$proto61=array();
$proto61["m_strName"] = "freee_account_items";
$proto61["m_srcTableName"] = "freee_account_items";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "id";
$proto61["m_columns"][] = "company_id";
$proto61["m_columns"][] = "name";
$proto61["m_columns"][] = "update_date";
$proto61["m_columns"][] = "shortcut1";
$proto61["m_columns"][] = "shortcut2";
$proto61["m_columns"][] = "created_at";
$proto61["m_columns"][] = "created_by";
$proto61["m_columns"][] = "updated_at";
$proto61["m_columns"][] = "updated_by";
$proto61["m_columns"][] = "tax_code";
$proto61["m_columns"][] = "default_tax_id";
$proto61["m_columns"][] = "default_tax_code";
$proto61["m_columns"][] = "account_category";
$proto61["m_columns"][] = "account_category_id";
$proto61["m_columns"][] = "categories";
$proto61["m_columns"][] = "available";
$proto61["m_columns"][] = "walletable_id";
$proto61["m_columns"][] = "group_name";
$proto61["m_columns"][] = "corresponding_income_name";
$proto61["m_columns"][] = "corresponding_income_id";
$proto61["m_columns"][] = "corresponding_expense_name";
$proto61["m_columns"][] = "corresponding_expense_id";
$proto61["m_columns"][] = "freee_expense_category_id";
$proto61["m_columns"][] = "is_PL_or_BS";
$proto61["m_columns"][] = "is_not_anbun";
$proto61["m_columns"][] = "description";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "`freee_account_items`";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "freee_account_items";
$proto62=array();
$proto62["m_sql"] = "";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="freee_account_items";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_freee_account_items = createSqlQuery_freee_account_items();


	
		;

																											

$tdatafreee_account_items[".sqlquery"] = $queryData_freee_account_items;

$tableEvents["freee_account_items"] = new eventsBase;
$tdatafreee_account_items[".hasEvents"] = false;

?>