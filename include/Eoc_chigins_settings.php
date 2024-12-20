<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_chigins = array();
	$tdataEoc_chigins[".truncateText"] = true;
	$tdataEoc_chigins[".NumberOfChars"] = 80;
	$tdataEoc_chigins[".ShortName"] = "Eoc_chigins";
	$tdataEoc_chigins[".OwnerID"] = "";
	$tdataEoc_chigins[".OriginalTable"] = "Eoc_chigins";

//	field labels
$fieldLabelsEoc_chigins = array();
$fieldToolTipsEoc_chigins = array();
$pageTitlesEoc_chigins = array();
$placeHoldersEoc_chigins = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_chigins["Japanese"] = array();
	$fieldToolTipsEoc_chigins["Japanese"] = array();
	$placeHoldersEoc_chigins["Japanese"] = array();
	$pageTitlesEoc_chigins["Japanese"] = array();
	$fieldLabelsEoc_chigins["Japanese"]["chigin_id"] = "商品買取ＩＤ";
	$fieldToolTipsEoc_chigins["Japanese"]["chigin_id"] = "";
	$placeHoldersEoc_chigins["Japanese"]["chigin_id"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["chigin_ecc_id"] = "顧客SEQ";
	$fieldToolTipsEoc_chigins["Japanese"]["chigin_ecc_id"] = "";
	$placeHoldersEoc_chigins["Japanese"]["chigin_ecc_id"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["ching_price"] = "金額";
	$fieldToolTipsEoc_chigins["Japanese"]["ching_price"] = "";
	$placeHoldersEoc_chigins["Japanese"]["ching_price"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["ching_created_at"] = "登録日";
	$fieldToolTipsEoc_chigins["Japanese"]["ching_created_at"] = "";
	$placeHoldersEoc_chigins["Japanese"]["ching_created_at"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["remark"] = "備考";
	$fieldToolTipsEoc_chigins["Japanese"]["remark"] = "";
	$placeHoldersEoc_chigins["Japanese"]["remark"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["chigin_type"] = "買取種別";
	$fieldToolTipsEoc_chigins["Japanese"]["chigin_type"] = "";
	$placeHoldersEoc_chigins["Japanese"]["chigin_type"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["seq"] = "ＳＥＱ";
	$fieldToolTipsEoc_chigins["Japanese"]["seq"] = "";
	$placeHoldersEoc_chigins["Japanese"]["seq"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["haraidasi"] = "払出し";
	$fieldToolTipsEoc_chigins["Japanese"]["haraidasi"] = "";
	$placeHoldersEoc_chigins["Japanese"]["haraidasi"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["excel_output"] = "エクセル出力";
	$fieldToolTipsEoc_chigins["Japanese"]["excel_output"] = "";
	$placeHoldersEoc_chigins["Japanese"]["excel_output"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_chigins["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_chigins["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["ecc_seq"] = "顧客ID";
	$fieldToolTipsEoc_chigins["Japanese"]["ecc_seq"] = "";
	$placeHoldersEoc_chigins["Japanese"]["ecc_seq"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsEoc_chigins["Japanese"]["updated_by"] = "";
	$placeHoldersEoc_chigins["Japanese"]["updated_by"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsEoc_chigins["Japanese"]["create_by"] = "";
	$placeHoldersEoc_chigins["Japanese"]["create_by"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["account_item"] = "勘定科目";
	$fieldToolTipsEoc_chigins["Japanese"]["account_item"] = "";
	$placeHoldersEoc_chigins["Japanese"]["account_item"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["supplementary_subject"] = "メモタグ";
	$fieldToolTipsEoc_chigins["Japanese"]["supplementary_subject"] = "";
	$placeHoldersEoc_chigins["Japanese"]["supplementary_subject"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipsEoc_chigins["Japanese"]["satei_by"] = "";
	$placeHoldersEoc_chigins["Japanese"]["satei_by"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["_registerd_id"] = "顧客登録者";
	$fieldToolTipsEoc_chigins["Japanese"]["_registerd_id"] = "";
	$placeHoldersEoc_chigins["Japanese"]["_registerd_id"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["bank_details_code"] = "振込先銀行";
	$fieldToolTipsEoc_chigins["Japanese"]["bank_details_code"] = "";
	$placeHoldersEoc_chigins["Japanese"]["bank_details_code"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["group"] = "部門";
	$fieldToolTipsEoc_chigins["Japanese"]["group"] = "";
	$placeHoldersEoc_chigins["Japanese"]["group"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["name1"] = "氏名";
	$fieldToolTipsEoc_chigins["Japanese"]["name1"] = "";
	$placeHoldersEoc_chigins["Japanese"]["name1"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["name2"] = "フリガナ";
	$fieldToolTipsEoc_chigins["Japanese"]["name2"] = "";
	$placeHoldersEoc_chigins["Japanese"]["name2"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["Eoc_unfinished_id"] = "店頭取引Id";
	$fieldToolTipsEoc_chigins["Japanese"]["Eoc_unfinished_id"] = "";
	$placeHoldersEoc_chigins["Japanese"]["Eoc_unfinished_id"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["Eoc_takuhai_id"] = "宅配取引Id";
	$fieldToolTipsEoc_chigins["Japanese"]["Eoc_takuhai_id"] = "";
	$placeHoldersEoc_chigins["Japanese"]["Eoc_takuhai_id"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["memo_tag"] = "品目";
	$fieldToolTipsEoc_chigins["Japanese"]["memo_tag"] = "";
	$placeHoldersEoc_chigins["Japanese"]["memo_tag"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["check_box_area"] = "チェック";
	$fieldToolTipsEoc_chigins["Japanese"]["check_box_area"] = "";
	$placeHoldersEoc_chigins["Japanese"]["check_box_area"] = "";
	$fieldLabelsEoc_chigins["Japanese"]["new_name"] = "旧姓/新姓/その他";
	$fieldToolTipsEoc_chigins["Japanese"]["new_name"] = "";
	$placeHoldersEoc_chigins["Japanese"]["new_name"] = "";
	if (count($fieldToolTipsEoc_chigins["Japanese"]))
		$tdataEoc_chigins[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_chigins[""] = array();
	$fieldToolTipsEoc_chigins[""] = array();
	$placeHoldersEoc_chigins[""] = array();
	$pageTitlesEoc_chigins[""] = array();
	$fieldLabelsEoc_chigins[""]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_chigins[""]["updated_by"] = "";
	$placeHoldersEoc_chigins[""]["updated_by"] = "";
	$fieldLabelsEoc_chigins[""]["create_by"] = "Create By";
	$fieldToolTipsEoc_chigins[""]["create_by"] = "";
	$placeHoldersEoc_chigins[""]["create_by"] = "";
	$fieldLabelsEoc_chigins[""]["account_item"] = "Account Item";
	$fieldToolTipsEoc_chigins[""]["account_item"] = "";
	$placeHoldersEoc_chigins[""]["account_item"] = "";
	$fieldLabelsEoc_chigins[""]["supplementary_subject"] = "Supplementary Subject";
	$fieldToolTipsEoc_chigins[""]["supplementary_subject"] = "";
	$placeHoldersEoc_chigins[""]["supplementary_subject"] = "";
	$fieldLabelsEoc_chigins[""]["satei_by"] = "Satei By";
	$fieldToolTipsEoc_chigins[""]["satei_by"] = "";
	$placeHoldersEoc_chigins[""]["satei_by"] = "";
	$fieldLabelsEoc_chigins[""]["_registerd_id"] = "Registerd Id";
	$fieldToolTipsEoc_chigins[""]["_registerd_id"] = "";
	$placeHoldersEoc_chigins[""]["_registerd_id"] = "";
	$fieldLabelsEoc_chigins[""]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsEoc_chigins[""]["bank_details_code"] = "";
	$placeHoldersEoc_chigins[""]["bank_details_code"] = "";
	$fieldLabelsEoc_chigins[""]["group"] = "Group";
	$fieldToolTipsEoc_chigins[""]["group"] = "";
	$placeHoldersEoc_chigins[""]["group"] = "";
	$fieldLabelsEoc_chigins[""]["name1"] = "Name1";
	$fieldToolTipsEoc_chigins[""]["name1"] = "";
	$placeHoldersEoc_chigins[""]["name1"] = "";
	$fieldLabelsEoc_chigins[""]["name2"] = "Name2";
	$fieldToolTipsEoc_chigins[""]["name2"] = "";
	$placeHoldersEoc_chigins[""]["name2"] = "";
	$fieldLabelsEoc_chigins[""]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipsEoc_chigins[""]["Eoc_unfinished_id"] = "";
	$placeHoldersEoc_chigins[""]["Eoc_unfinished_id"] = "";
	$fieldLabelsEoc_chigins[""]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipsEoc_chigins[""]["Eoc_takuhai_id"] = "";
	$placeHoldersEoc_chigins[""]["Eoc_takuhai_id"] = "";
	$fieldLabelsEoc_chigins[""]["memo_tag"] = "Memo Tag";
	$fieldToolTipsEoc_chigins[""]["memo_tag"] = "";
	$placeHoldersEoc_chigins[""]["memo_tag"] = "";
	$fieldLabelsEoc_chigins[""]["check_box_area"] = "Check Box Area";
	$fieldToolTipsEoc_chigins[""]["check_box_area"] = "";
	$placeHoldersEoc_chigins[""]["check_box_area"] = "";
	$fieldLabelsEoc_chigins[""]["new_name"] = "New Name";
	$fieldToolTipsEoc_chigins[""]["new_name"] = "";
	$placeHoldersEoc_chigins[""]["new_name"] = "";
	if (count($fieldToolTipsEoc_chigins[""]))
		$tdataEoc_chigins[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_chigins["English"] = array();
	$fieldToolTipsEoc_chigins["English"] = array();
	$placeHoldersEoc_chigins["English"] = array();
	$pageTitlesEoc_chigins["English"] = array();
	$fieldLabelsEoc_chigins["English"]["account_item"] = "Account Item";
	$fieldToolTipsEoc_chigins["English"]["account_item"] = "";
	$placeHoldersEoc_chigins["English"]["account_item"] = "";
	$fieldLabelsEoc_chigins["English"]["supplementary_subject"] = "Supplementary Subject";
	$fieldToolTipsEoc_chigins["English"]["supplementary_subject"] = "";
	$placeHoldersEoc_chigins["English"]["supplementary_subject"] = "";
	$fieldLabelsEoc_chigins["English"]["satei_by"] = "Satei By";
	$fieldToolTipsEoc_chigins["English"]["satei_by"] = "";
	$placeHoldersEoc_chigins["English"]["satei_by"] = "";
	$fieldLabelsEoc_chigins["English"]["_registerd_id"] = "Registerd Id";
	$fieldToolTipsEoc_chigins["English"]["_registerd_id"] = "";
	$placeHoldersEoc_chigins["English"]["_registerd_id"] = "";
	$fieldLabelsEoc_chigins["English"]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsEoc_chigins["English"]["bank_details_code"] = "";
	$placeHoldersEoc_chigins["English"]["bank_details_code"] = "";
	$fieldLabelsEoc_chigins["English"]["group"] = "Group";
	$fieldToolTipsEoc_chigins["English"]["group"] = "";
	$placeHoldersEoc_chigins["English"]["group"] = "";
	$fieldLabelsEoc_chigins["English"]["name1"] = "Name1";
	$fieldToolTipsEoc_chigins["English"]["name1"] = "";
	$placeHoldersEoc_chigins["English"]["name1"] = "";
	$fieldLabelsEoc_chigins["English"]["name2"] = "Name2";
	$fieldToolTipsEoc_chigins["English"]["name2"] = "";
	$placeHoldersEoc_chigins["English"]["name2"] = "";
	$fieldLabelsEoc_chigins["English"]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipsEoc_chigins["English"]["Eoc_unfinished_id"] = "";
	$placeHoldersEoc_chigins["English"]["Eoc_unfinished_id"] = "";
	$fieldLabelsEoc_chigins["English"]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipsEoc_chigins["English"]["Eoc_takuhai_id"] = "";
	$placeHoldersEoc_chigins["English"]["Eoc_takuhai_id"] = "";
	$fieldLabelsEoc_chigins["English"]["memo_tag"] = "Memo Tag";
	$fieldToolTipsEoc_chigins["English"]["memo_tag"] = "";
	$placeHoldersEoc_chigins["English"]["memo_tag"] = "";
	$fieldLabelsEoc_chigins["English"]["check_box_area"] = "Check Box Area";
	$fieldToolTipsEoc_chigins["English"]["check_box_area"] = "";
	$placeHoldersEoc_chigins["English"]["check_box_area"] = "";
	$fieldLabelsEoc_chigins["English"]["new_name"] = "New Name";
	$fieldToolTipsEoc_chigins["English"]["new_name"] = "";
	$placeHoldersEoc_chigins["English"]["new_name"] = "";
	if (count($fieldToolTipsEoc_chigins["English"]))
		$tdataEoc_chigins[".isUseToolTips"] = true;
}


	$tdataEoc_chigins[".NCSearch"] = true;



$tdataEoc_chigins[".shortTableName"] = "Eoc_chigins";
$tdataEoc_chigins[".nSecOptions"] = 0;
$tdataEoc_chigins[".recsPerRowPrint"] = 1;
$tdataEoc_chigins[".mainTableOwnerID"] = "";
$tdataEoc_chigins[".moveNext"] = 1;
$tdataEoc_chigins[".entityType"] = 0;

$tdataEoc_chigins[".strOriginalTableName"] = "Eoc_chigins";

	



$tdataEoc_chigins[".showAddInPopup"] = false;

$tdataEoc_chigins[".showEditInPopup"] = false;

$tdataEoc_chigins[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_chigins[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_chigins[".fieldsForRegister"] = array();

$tdataEoc_chigins[".listAjax"] = false;

	$tdataEoc_chigins[".audit"] = true;

	$tdataEoc_chigins[".locking"] = false;

$tdataEoc_chigins[".edit"] = true;
$tdataEoc_chigins[".afterEditAction"] = 1;
$tdataEoc_chigins[".closePopupAfterEdit"] = 1;
$tdataEoc_chigins[".afterEditActionDetTable"] = "";

$tdataEoc_chigins[".add"] = true;
$tdataEoc_chigins[".afterAddAction"] = 1;
$tdataEoc_chigins[".closePopupAfterAdd"] = 1;
$tdataEoc_chigins[".afterAddActionDetTable"] = "";

$tdataEoc_chigins[".list"] = true;

$tdataEoc_chigins[".inlineEdit"] = true;

$tdataEoc_chigins[".updateSelected"] = true;

$tdataEoc_chigins[".reorderRecordsByHeader"] = true;
$tdataEoc_chigins[".createSortByDropdown"] = true;
$tdataEoc_chigins[".strSortControlSettingsJSON"] = "";

$tdataEoc_chigins[".strClickActionJSON"] = "{\"fields\":{\"chigin_ecc_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"chigin_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}},\"chigin_type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ching_created_at\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ching_price\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"excel_output\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"haraidasi\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"remark\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seq\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"updated_at\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";


$tdataEoc_chigins[".inlineAdd"] = true;
$tdataEoc_chigins[".copy"] = true;
$tdataEoc_chigins[".view"] = true;

$tdataEoc_chigins[".import"] = true;

$tdataEoc_chigins[".exportTo"] = true;

$tdataEoc_chigins[".printFriendly"] = true;

$tdataEoc_chigins[".delete"] = true;

$tdataEoc_chigins[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_chigins[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_chigins[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_chigins[".searchSaving"] = false;
//

$tdataEoc_chigins[".showSearchPanel"] = true;
		$tdataEoc_chigins[".flexibleSearch"] = true;

$tdataEoc_chigins[".isUseAjaxSuggest"] = true;

$tdataEoc_chigins[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																										

$tdataEoc_chigins[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_chigins[".buttonsAdded"] = false;

$tdataEoc_chigins[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_chigins[".isUseTimeForSearch"] = false;



$tdataEoc_chigins[".badgeColor"] = "1e90ff";


$tdataEoc_chigins[".allSearchFields"] = array();
$tdataEoc_chigins[".filterFields"] = array();
$tdataEoc_chigins[".requiredSearchFields"] = array();

$tdataEoc_chigins[".allSearchFields"][] = "new_name";
	$tdataEoc_chigins[".allSearchFields"][] = "Eoc_unfinished_id";
	$tdataEoc_chigins[".allSearchFields"][] = "Eoc_takuhai_id";
	$tdataEoc_chigins[".allSearchFields"][] = "chigin_ecc_id";
	$tdataEoc_chigins[".allSearchFields"][] = "ecc_seq";
	$tdataEoc_chigins[".allSearchFields"][] = "_registerd_id";
	$tdataEoc_chigins[".allSearchFields"][] = "updated_by";
	$tdataEoc_chigins[".allSearchFields"][] = "create_by";
	$tdataEoc_chigins[".allSearchFields"][] = "chigin_id";
	$tdataEoc_chigins[".allSearchFields"][] = "satei_by";
	$tdataEoc_chigins[".allSearchFields"][] = "chigin_type";
	$tdataEoc_chigins[".allSearchFields"][] = "ching_price";
	$tdataEoc_chigins[".allSearchFields"][] = "remark";
	$tdataEoc_chigins[".allSearchFields"][] = "haraidasi";
	$tdataEoc_chigins[".allSearchFields"][] = "bank_details_code";
	$tdataEoc_chigins[".allSearchFields"][] = "ching_created_at";
	$tdataEoc_chigins[".allSearchFields"][] = "updated_at";
	
$tdataEoc_chigins[".filterFields"][] = "chigin_type";
$tdataEoc_chigins[".filterFields"][] = "haraidasi";

$tdataEoc_chigins[".googleLikeFields"] = array();
$tdataEoc_chigins[".googleLikeFields"][] = "chigin_id";
$tdataEoc_chigins[".googleLikeFields"][] = "chigin_ecc_id";
$tdataEoc_chigins[".googleLikeFields"][] = "ching_price";
$tdataEoc_chigins[".googleLikeFields"][] = "ching_created_at";
$tdataEoc_chigins[".googleLikeFields"][] = "remark";
$tdataEoc_chigins[".googleLikeFields"][] = "chigin_type";
$tdataEoc_chigins[".googleLikeFields"][] = "haraidasi";
$tdataEoc_chigins[".googleLikeFields"][] = "ecc_seq";
$tdataEoc_chigins[".googleLikeFields"][] = "updated_by";
$tdataEoc_chigins[".googleLikeFields"][] = "create_by";
$tdataEoc_chigins[".googleLikeFields"][] = "satei_by";
$tdataEoc_chigins[".googleLikeFields"][] = "_registerd_id";
$tdataEoc_chigins[".googleLikeFields"][] = "bank_details_code";
$tdataEoc_chigins[".googleLikeFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins[".googleLikeFields"][] = "Eoc_takuhai_id";
$tdataEoc_chigins[".googleLikeFields"][] = "memo_tag";
$tdataEoc_chigins[".googleLikeFields"][] = "check_box_area";
$tdataEoc_chigins[".googleLikeFields"][] = "new_name";

$tdataEoc_chigins[".panelSearchFields"] = array();
$tdataEoc_chigins[".searchPanelOptions"] = array();
$tdataEoc_chigins[".panelSearchFields"][] = "Eoc_unfinished_id";
	$tdataEoc_chigins[".panelSearchFields"][] = "Eoc_takuhai_id";
	$tdataEoc_chigins[".panelSearchFields"][] = "chigin_ecc_id";
	$tdataEoc_chigins[".panelSearchFields"][] = "chigin_id";
	$tdataEoc_chigins[".panelSearchFields"][] = "satei_by";
	$tdataEoc_chigins[".panelSearchFields"][] = "chigin_type";
	$tdataEoc_chigins[".panelSearchFields"][] = "ching_price";
	$tdataEoc_chigins[".panelSearchFields"][] = "remark";
	$tdataEoc_chigins[".panelSearchFields"][] = "haraidasi";
	$tdataEoc_chigins[".panelSearchFields"][] = "ching_created_at";
	$tdataEoc_chigins[".panelSearchFields"][] = "updated_at";
	
$tdataEoc_chigins[".advSearchFields"] = array();
$tdataEoc_chigins[".advSearchFields"][] = "new_name";
$tdataEoc_chigins[".advSearchFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins[".advSearchFields"][] = "Eoc_takuhai_id";
$tdataEoc_chigins[".advSearchFields"][] = "chigin_ecc_id";
$tdataEoc_chigins[".advSearchFields"][] = "ecc_seq";
$tdataEoc_chigins[".advSearchFields"][] = "_registerd_id";
$tdataEoc_chigins[".advSearchFields"][] = "updated_by";
$tdataEoc_chigins[".advSearchFields"][] = "create_by";
$tdataEoc_chigins[".advSearchFields"][] = "chigin_id";
$tdataEoc_chigins[".advSearchFields"][] = "satei_by";
$tdataEoc_chigins[".advSearchFields"][] = "chigin_type";
$tdataEoc_chigins[".advSearchFields"][] = "ching_price";
$tdataEoc_chigins[".advSearchFields"][] = "remark";
$tdataEoc_chigins[".advSearchFields"][] = "haraidasi";
$tdataEoc_chigins[".advSearchFields"][] = "bank_details_code";
$tdataEoc_chigins[".advSearchFields"][] = "ching_created_at";
$tdataEoc_chigins[".advSearchFields"][] = "updated_at";

$tdataEoc_chigins[".tableType"] = "list";

$tdataEoc_chigins[".printerPageOrientation"] = 0;
$tdataEoc_chigins[".nPrinterPageScale"] = 100;

$tdataEoc_chigins[".nPrinterSplitRecords"] = 40;

$tdataEoc_chigins[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_chigins[".geocodingEnabled"] = false;





$tdataEoc_chigins[".listGridLayout"] = 3;





// view page pdf
$tdataEoc_chigins[".isViewPagePDF"] = true;
$tdataEoc_chigins[".nViewPagePDFScale"] = 100;

// print page pdf
$tdataEoc_chigins[".isPrinterPagePDF"] = true;
$tdataEoc_chigins[".nPrinterPagePDFScale"] = 100;


$tdataEoc_chigins[".pageSize"] = 20;

$tdataEoc_chigins[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Eoc_chigins`.`chigin_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_chigins[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_chigins[".orderindexes"] = array();
$tdataEoc_chigins[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`Eoc_chigins`.`chigin_id`");

$tdataEoc_chigins[".sqlHead"] = "SELECT `Eoc_chigins`.`chigin_id`,  `Eoc_chigins`.`chigin_ecc_id`,  `Eoc_chigins`.`ching_price`,  `Eoc_chigins`.`ching_created_at`,  `Eoc_chigins`.`remark`,  `Eoc_chigins`.`chigin_type`,  `Eoc_chigins`.`seq`,  `Eoc_chigins`.`haraidasi`,  `Eoc_chigins`.`excel_output`,  `Eoc_chigins`.`updated_at`,  `Eoc`.`ecc_seq`,  `Eoc_chigins`.`updated_by`,  `Eoc_chigins`.`create_by`,  `_chigin_type`.`account_item`,  `_purchase_type`.`supplementary_subject`,  `Eoc_chigins`.`satei_by`,  `Eoc`.`_registerd_id`,  `Eoc`.`bank_details_code`,  `_chigin_type`.`group`,  `Eoc`.`name1`,  `Eoc`.`name2`,  `Eoc_chigins`.`Eoc_unfinished_id`,  `Eoc_chigins`.`Eoc_takuhai_id`,  '個人仕入' AS `memo_tag`,  '' AS `check_box_area`,  `Eoc`.`new_name`";
$tdataEoc_chigins[".sqlFrom"] = "FROM `Eoc_chigins`  INNER JOIN `Eoc` ON `Eoc_chigins`.`chigin_ecc_id` = `Eoc`.`ecc_id`  LEFT OUTER JOIN `_chigin_type` ON `Eoc_chigins`.`chigin_type` = `_chigin_type`.`id`  LEFT OUTER JOIN `_purchase_type` ON `Eoc`.`purchase_type` = `_purchase_type`.`purchase_id`";
$tdataEoc_chigins[".sqlWhereExpr"] = "";
$tdataEoc_chigins[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_chigins[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_chigins[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_chigins[".highlightSearchResults"] = true;

$tableKeysEoc_chigins = array();
$tableKeysEoc_chigins[] = "chigin_id";
$tdataEoc_chigins[".Keys"] = $tableKeysEoc_chigins;

$tdataEoc_chigins[".listFields"] = array();
$tdataEoc_chigins[".listFields"][] = "chigin_ecc_id";
$tdataEoc_chigins[".listFields"][] = "chigin_id";
$tdataEoc_chigins[".listFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins[".listFields"][] = "Eoc_takuhai_id";
$tdataEoc_chigins[".listFields"][] = "satei_by";
$tdataEoc_chigins[".listFields"][] = "chigin_type";
$tdataEoc_chigins[".listFields"][] = "ching_price";
$tdataEoc_chigins[".listFields"][] = "remark";
$tdataEoc_chigins[".listFields"][] = "haraidasi";
$tdataEoc_chigins[".listFields"][] = "bank_details_code";
$tdataEoc_chigins[".listFields"][] = "_registerd_id";
$tdataEoc_chigins[".listFields"][] = "create_by";
$tdataEoc_chigins[".listFields"][] = "ching_created_at";
$tdataEoc_chigins[".listFields"][] = "updated_by";
$tdataEoc_chigins[".listFields"][] = "updated_at";
$tdataEoc_chigins[".listFields"][] = "new_name";

$tdataEoc_chigins[".hideMobileList"] = array();


$tdataEoc_chigins[".viewFields"] = array();
$tdataEoc_chigins[".viewFields"][] = "new_name";
$tdataEoc_chigins[".viewFields"][] = "satei_by";
$tdataEoc_chigins[".viewFields"][] = "chigin_ecc_id";
$tdataEoc_chigins[".viewFields"][] = "ecc_seq";
$tdataEoc_chigins[".viewFields"][] = "updated_by";
$tdataEoc_chigins[".viewFields"][] = "create_by";
$tdataEoc_chigins[".viewFields"][] = "chigin_id";
$tdataEoc_chigins[".viewFields"][] = "chigin_type";
$tdataEoc_chigins[".viewFields"][] = "ching_price";
$tdataEoc_chigins[".viewFields"][] = "remark";
$tdataEoc_chigins[".viewFields"][] = "haraidasi";
$tdataEoc_chigins[".viewFields"][] = "ching_created_at";

$tdataEoc_chigins[".addFields"] = array();
$tdataEoc_chigins[".addFields"][] = "updated_by";
$tdataEoc_chigins[".addFields"][] = "create_by";
$tdataEoc_chigins[".addFields"][] = "satei_by";
$tdataEoc_chigins[".addFields"][] = "chigin_type";
$tdataEoc_chigins[".addFields"][] = "ching_price";
$tdataEoc_chigins[".addFields"][] = "remark";
$tdataEoc_chigins[".addFields"][] = "haraidasi";
$tdataEoc_chigins[".addFields"][] = "ching_created_at";

$tdataEoc_chigins[".masterListFields"] = array();
$tdataEoc_chigins[".masterListFields"][] = "chigin_ecc_id";
$tdataEoc_chigins[".masterListFields"][] = "seq";
$tdataEoc_chigins[".masterListFields"][] = "excel_output";
$tdataEoc_chigins[".masterListFields"][] = "updated_at";
$tdataEoc_chigins[".masterListFields"][] = "ecc_seq";
$tdataEoc_chigins[".masterListFields"][] = "updated_by";
$tdataEoc_chigins[".masterListFields"][] = "create_by";
$tdataEoc_chigins[".masterListFields"][] = "account_item";
$tdataEoc_chigins[".masterListFields"][] = "supplementary_subject";
$tdataEoc_chigins[".masterListFields"][] = "satei_by";
$tdataEoc_chigins[".masterListFields"][] = "_registerd_id";
$tdataEoc_chigins[".masterListFields"][] = "bank_details_code";
$tdataEoc_chigins[".masterListFields"][] = "group";
$tdataEoc_chigins[".masterListFields"][] = "name1";
$tdataEoc_chigins[".masterListFields"][] = "name2";
$tdataEoc_chigins[".masterListFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins[".masterListFields"][] = "Eoc_takuhai_id";
$tdataEoc_chigins[".masterListFields"][] = "memo_tag";
$tdataEoc_chigins[".masterListFields"][] = "check_box_area";
$tdataEoc_chigins[".masterListFields"][] = "new_name";
$tdataEoc_chigins[".masterListFields"][] = "chigin_id";
$tdataEoc_chigins[".masterListFields"][] = "chigin_type";
$tdataEoc_chigins[".masterListFields"][] = "ching_price";
$tdataEoc_chigins[".masterListFields"][] = "remark";
$tdataEoc_chigins[".masterListFields"][] = "haraidasi";
$tdataEoc_chigins[".masterListFields"][] = "ching_created_at";

$tdataEoc_chigins[".inlineAddFields"] = array();
$tdataEoc_chigins[".inlineAddFields"][] = "chigin_ecc_id";
$tdataEoc_chigins[".inlineAddFields"][] = "satei_by";
$tdataEoc_chigins[".inlineAddFields"][] = "chigin_type";
$tdataEoc_chigins[".inlineAddFields"][] = "ching_price";
$tdataEoc_chigins[".inlineAddFields"][] = "remark";
$tdataEoc_chigins[".inlineAddFields"][] = "haraidasi";
$tdataEoc_chigins[".inlineAddFields"][] = "create_by";
$tdataEoc_chigins[".inlineAddFields"][] = "ching_created_at";
$tdataEoc_chigins[".inlineAddFields"][] = "updated_by";
$tdataEoc_chigins[".inlineAddFields"][] = "updated_at";

$tdataEoc_chigins[".editFields"] = array();
$tdataEoc_chigins[".editFields"][] = "satei_by";
$tdataEoc_chigins[".editFields"][] = "chigin_type";
$tdataEoc_chigins[".editFields"][] = "ching_price";
$tdataEoc_chigins[".editFields"][] = "remark";
$tdataEoc_chigins[".editFields"][] = "haraidasi";
$tdataEoc_chigins[".editFields"][] = "ching_created_at";

$tdataEoc_chigins[".inlineEditFields"] = array();
$tdataEoc_chigins[".inlineEditFields"][] = "chigin_ecc_id";
$tdataEoc_chigins[".inlineEditFields"][] = "satei_by";
$tdataEoc_chigins[".inlineEditFields"][] = "chigin_type";
$tdataEoc_chigins[".inlineEditFields"][] = "ching_price";
$tdataEoc_chigins[".inlineEditFields"][] = "remark";
$tdataEoc_chigins[".inlineEditFields"][] = "haraidasi";

$tdataEoc_chigins[".updateSelectedFields"] = array();
$tdataEoc_chigins[".updateSelectedFields"][] = "chigin_type";
$tdataEoc_chigins[".updateSelectedFields"][] = "ching_price";
$tdataEoc_chigins[".updateSelectedFields"][] = "remark";
$tdataEoc_chigins[".updateSelectedFields"][] = "haraidasi";
$tdataEoc_chigins[".updateSelectedFields"][] = "ching_created_at";


$tdataEoc_chigins[".exportFields"] = array();
$tdataEoc_chigins[".exportFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins[".exportFields"][] = "Eoc_takuhai_id";
$tdataEoc_chigins[".exportFields"][] = "ching_created_at";
$tdataEoc_chigins[".exportFields"][] = "name2";
$tdataEoc_chigins[".exportFields"][] = "new_name";
$tdataEoc_chigins[".exportFields"][] = "chigin_ecc_id";
$tdataEoc_chigins[".exportFields"][] = "account_item";
$tdataEoc_chigins[".exportFields"][] = "ching_price";
$tdataEoc_chigins[".exportFields"][] = "remark";
$tdataEoc_chigins[".exportFields"][] = "group";
$tdataEoc_chigins[".exportFields"][] = "memo_tag";
$tdataEoc_chigins[".exportFields"][] = "supplementary_subject";
$tdataEoc_chigins[".exportFields"][] = "check_box_area";
$tdataEoc_chigins[".exportFields"][] = "name1";
$tdataEoc_chigins[".exportFields"][] = "satei_by";
$tdataEoc_chigins[".exportFields"][] = "ecc_seq";
$tdataEoc_chigins[".exportFields"][] = "chigin_id";
$tdataEoc_chigins[".exportFields"][] = "_registerd_id";
$tdataEoc_chigins[".exportFields"][] = "updated_by";
$tdataEoc_chigins[".exportFields"][] = "create_by";
$tdataEoc_chigins[".exportFields"][] = "haraidasi";
$tdataEoc_chigins[".exportFields"][] = "bank_details_code";

$tdataEoc_chigins[".importFields"] = array();
$tdataEoc_chigins[".importFields"][] = "chigin_id";
$tdataEoc_chigins[".importFields"][] = "chigin_ecc_id";
$tdataEoc_chigins[".importFields"][] = "ching_price";
$tdataEoc_chigins[".importFields"][] = "ching_created_at";
$tdataEoc_chigins[".importFields"][] = "remark";
$tdataEoc_chigins[".importFields"][] = "chigin_type";
$tdataEoc_chigins[".importFields"][] = "seq";
$tdataEoc_chigins[".importFields"][] = "haraidasi";
$tdataEoc_chigins[".importFields"][] = "excel_output";
$tdataEoc_chigins[".importFields"][] = "updated_at";
$tdataEoc_chigins[".importFields"][] = "ecc_seq";
$tdataEoc_chigins[".importFields"][] = "updated_by";
$tdataEoc_chigins[".importFields"][] = "create_by";
$tdataEoc_chigins[".importFields"][] = "satei_by";
$tdataEoc_chigins[".importFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins[".importFields"][] = "Eoc_takuhai_id";

$tdataEoc_chigins[".printFields"] = array();
$tdataEoc_chigins[".printFields"][] = "satei_by";
$tdataEoc_chigins[".printFields"][] = "create_by";
$tdataEoc_chigins[".printFields"][] = "ecc_seq";
$tdataEoc_chigins[".printFields"][] = "updated_by";
$tdataEoc_chigins[".printFields"][] = "chigin_id";
$tdataEoc_chigins[".printFields"][] = "chigin_type";
$tdataEoc_chigins[".printFields"][] = "ching_price";
$tdataEoc_chigins[".printFields"][] = "remark";
$tdataEoc_chigins[".printFields"][] = "haraidasi";
$tdataEoc_chigins[".printFields"][] = "ching_created_at";

//	chigin_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "chigin_id";
	$fdata["GoodName"] = "chigin_id";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","chigin_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "chigin_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins`.`chigin_id`";

	
	
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




	$tdataEoc_chigins["chigin_id"] = $fdata;
//	chigin_ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "chigin_ecc_id";
	$fdata["GoodName"] = "chigin_ecc_id";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","chigin_ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "chigin_ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins`.`chigin_ecc_id`";

	
	
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




	$tdataEoc_chigins["chigin_ecc_id"] = $fdata;
//	ching_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ching_price";
	$fdata["GoodName"] = "ching_price";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","ching_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ching_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins`.`ching_price`";

	
	
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




	$tdataEoc_chigins["ching_price"] = $fdata;
//	ching_created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ching_created_at";
	$fdata["GoodName"] = "ching_created_at";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","ching_created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ching_created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins`.`ching_created_at`";

	
	
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

	
	
		$edata["DateEditType"] = 2;
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




	$tdataEoc_chigins["ching_created_at"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","remark");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "remark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins`.`remark`";

	
	
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




	$tdataEoc_chigins["remark"] = $fdata;
//	chigin_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "chigin_type";
	$fdata["GoodName"] = "chigin_type";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","chigin_type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "chigin_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins`.`chigin_type`";

	
	
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
	$edata["LookupTable"] = "_chigin_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataEoc_chigins["chigin_type"] = $fdata;
//	seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "seq";
	$fdata["GoodName"] = "seq";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","seq");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "seq";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins`.`seq`";

	
	
			
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








	$tdataEoc_chigins["seq"] = $fdata;
//	haraidasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "haraidasi";
	$fdata["GoodName"] = "haraidasi";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","haraidasi");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "haraidasi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins`.`haraidasi`";

	
	
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
	$edata["LookupTable"] = "haraidasi";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "haraidasi_name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataEoc_chigins["haraidasi"] = $fdata;
//	excel_output
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "excel_output";
	$fdata["GoodName"] = "excel_output";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","excel_output");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "excel_output";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins`.`excel_output`";

	
	
			
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








	$tdataEoc_chigins["excel_output"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins`.`updated_at`";

	
	
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

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_chigins["updated_at"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","ecc_seq");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_seq";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`ecc_seq`";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_chigins["ecc_seq"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins`.`updated_by`";

	
	
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




	$tdataEoc_chigins["updated_by"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins`.`create_by`";

	
	
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

		$edata["ShowTime"] = true;

	

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




	$tdataEoc_chigins["create_by"] = $fdata;
//	account_item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "account_item";
	$fdata["GoodName"] = "account_item";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","account_item");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "account_item";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`_chigin_type`.`account_item`";

	
	
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
	$edata["LookupTable"] = "mst_journal_account_item";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 0;
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








	$tdataEoc_chigins["account_item"] = $fdata;
//	supplementary_subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "supplementary_subject";
	$fdata["GoodName"] = "supplementary_subject";
	$fdata["ownerTable"] = "_purchase_type";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","supplementary_subject");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "supplementary_subject";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`_purchase_type`.`supplementary_subject`";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_chigins["supplementary_subject"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","satei_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins`.`satei_by`";

	
	
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


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_chigins["satei_by"] = $fdata;
//	_registerd_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "_registerd_id";
	$fdata["GoodName"] = "_registerd_id";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","_registerd_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "_registerd_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`_registerd_id`";

	
	
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


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_chigins["_registerd_id"] = $fdata;
//	bank_details_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "bank_details_code";
	$fdata["GoodName"] = "bank_details_code";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","bank_details_code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bank_details_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`bank_details_code`";

	
	
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
	$edata["LookupTable"] = "mst_bank";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "bank_code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
	
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




	$tdataEoc_chigins["bank_details_code"] = $fdata;
//	group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "group";
	$fdata["GoodName"] = "group";
	$fdata["ownerTable"] = "_chigin_type";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","group");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "group";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`_chigin_type`.`group`";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_chigins["group"] = $fdata;
//	name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "name1";
	$fdata["GoodName"] = "name1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","name1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`name1`";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_chigins["name1"] = $fdata;
//	name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "name2";
	$fdata["GoodName"] = "name2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","name2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`name2`";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_chigins["name2"] = $fdata;
//	Eoc_unfinished_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Eoc_unfinished_id";
	$fdata["GoodName"] = "Eoc_unfinished_id";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","Eoc_unfinished_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_unfinished_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins`.`Eoc_unfinished_id`";

	
	
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




	$tdataEoc_chigins["Eoc_unfinished_id"] = $fdata;
//	Eoc_takuhai_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Eoc_takuhai_id";
	$fdata["GoodName"] = "Eoc_takuhai_id";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","Eoc_takuhai_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_takuhai_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins`.`Eoc_takuhai_id`";

	
	
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




	$tdataEoc_chigins["Eoc_takuhai_id"] = $fdata;
//	memo_tag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "memo_tag";
	$fdata["GoodName"] = "memo_tag";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","memo_tag");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "memo_tag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "'個人仕入'";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_chigins["memo_tag"] = $fdata;
//	check_box_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "check_box_area";
	$fdata["GoodName"] = "check_box_area";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","check_box_area");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "check_box_area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_chigins["check_box_area"] = $fdata;
//	new_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "new_name";
	$fdata["GoodName"] = "new_name";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins","new_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "new_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`new_name`";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_chigins["new_name"] = $fdata;


$tables_data["Eoc_chigins"]=&$tdataEoc_chigins;
$field_labels["Eoc_chigins"] = &$fieldLabelsEoc_chigins;
$fieldToolTips["Eoc_chigins"] = &$fieldToolTipsEoc_chigins;
$placeHolders["Eoc_chigins"] = &$placeHoldersEoc_chigins;
$page_titles["Eoc_chigins"] = &$pageTitlesEoc_chigins;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_chigins"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_chigins"] = array();


	
				$strOriginalDetailsTable="Eoc";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_catch";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_catch";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Eoc_chigins"][0] = $masterParams;
				$masterTablesData["Eoc_chigins"][0]["masterKeys"] = array();
	$masterTablesData["Eoc_chigins"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["Eoc_chigins"][0]["detailKeys"] = array();
	$masterTablesData["Eoc_chigins"][0]["detailKeys"][]="chigin_ecc_id";
		
	
				$strOriginalDetailsTable="Eoc_takuhai";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_takuhai_for_catch_history";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_takuhai_for_catch_history";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "1";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Eoc_chigins"][1] = $masterParams;
				$masterTablesData["Eoc_chigins"][1]["masterKeys"] = array();
	$masterTablesData["Eoc_chigins"][1]["masterKeys"][]="id";
				$masterTablesData["Eoc_chigins"][1]["detailKeys"] = array();
	$masterTablesData["Eoc_chigins"][1]["detailKeys"][]="Eoc_takuhai_id";
		
	
				$strOriginalDetailsTable="Eoc_unfinished";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_unfinished";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_unfinished";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Eoc_chigins"][2] = $masterParams;
				$masterTablesData["Eoc_chigins"][2]["masterKeys"] = array();
	$masterTablesData["Eoc_chigins"][2]["masterKeys"][]="id";
				$masterTablesData["Eoc_chigins"][2]["detailKeys"] = array();
	$masterTablesData["Eoc_chigins"][2]["detailKeys"][]="Eoc_unfinished_id";
		
	
				$strOriginalDetailsTable="Eoc_takuhai";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_transfer_confirm";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_transfer_confirm";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Eoc_chigins"][3] = $masterParams;
				$masterTablesData["Eoc_chigins"][3]["masterKeys"] = array();
	$masterTablesData["Eoc_chigins"][3]["masterKeys"][]="id";
				$masterTablesData["Eoc_chigins"][3]["detailKeys"] = array();
	$masterTablesData["Eoc_chigins"][3]["detailKeys"][]="Eoc_takuhai_id";
		
	
				$strOriginalDetailsTable="Eoc_takuhai";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc_transfer_confirm_after";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc_transfer_confirm_after";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Eoc_chigins"][4] = $masterParams;
				$masterTablesData["Eoc_chigins"][4]["masterKeys"] = array();
	$masterTablesData["Eoc_chigins"][4]["masterKeys"][]="id";
				$masterTablesData["Eoc_chigins"][4]["detailKeys"] = array();
	$masterTablesData["Eoc_chigins"][4]["detailKeys"][]="Eoc_takuhai_id";
		
	
				$strOriginalDetailsTable="Eoc";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Eoc_chigins"][5] = $masterParams;
				$masterTablesData["Eoc_chigins"][5]["masterKeys"] = array();
	$masterTablesData["Eoc_chigins"][5]["masterKeys"][]="ecc_id";
				$masterTablesData["Eoc_chigins"][5]["detailKeys"] = array();
	$masterTablesData["Eoc_chigins"][5]["detailKeys"][]="chigin_ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_chigins()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Eoc_chigins`.`chigin_id`,  `Eoc_chigins`.`chigin_ecc_id`,  `Eoc_chigins`.`ching_price`,  `Eoc_chigins`.`ching_created_at`,  `Eoc_chigins`.`remark`,  `Eoc_chigins`.`chigin_type`,  `Eoc_chigins`.`seq`,  `Eoc_chigins`.`haraidasi`,  `Eoc_chigins`.`excel_output`,  `Eoc_chigins`.`updated_at`,  `Eoc`.`ecc_seq`,  `Eoc_chigins`.`updated_by`,  `Eoc_chigins`.`create_by`,  `_chigin_type`.`account_item`,  `_purchase_type`.`supplementary_subject`,  `Eoc_chigins`.`satei_by`,  `Eoc`.`_registerd_id`,  `Eoc`.`bank_details_code`,  `_chigin_type`.`group`,  `Eoc`.`name1`,  `Eoc`.`name2`,  `Eoc_chigins`.`Eoc_unfinished_id`,  `Eoc_chigins`.`Eoc_takuhai_id`,  '個人仕入' AS `memo_tag`,  '' AS `check_box_area`,  `Eoc`.`new_name`";
$proto0["m_strFrom"] = "FROM `Eoc_chigins`  INNER JOIN `Eoc` ON `Eoc_chigins`.`chigin_ecc_id` = `Eoc`.`ecc_id`  LEFT OUTER JOIN `_chigin_type` ON `Eoc_chigins`.`chigin_type` = `_chigin_type`.`id`  LEFT OUTER JOIN `_purchase_type` ON `Eoc`.`purchase_type` = `_purchase_type`.`purchase_id`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `Eoc_chigins`.`chigin_id` DESC";
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
	"m_strName" => "chigin_id",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto6["m_sql"] = "`Eoc_chigins`.`chigin_id`";
$proto6["m_srcTableName"] = "Eoc_chigins";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "chigin_ecc_id",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto8["m_sql"] = "`Eoc_chigins`.`chigin_ecc_id`";
$proto8["m_srcTableName"] = "Eoc_chigins";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ching_price",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto10["m_sql"] = "`Eoc_chigins`.`ching_price`";
$proto10["m_srcTableName"] = "Eoc_chigins";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ching_created_at",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto12["m_sql"] = "`Eoc_chigins`.`ching_created_at`";
$proto12["m_srcTableName"] = "Eoc_chigins";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto14["m_sql"] = "`Eoc_chigins`.`remark`";
$proto14["m_srcTableName"] = "Eoc_chigins";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "chigin_type",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto16["m_sql"] = "`Eoc_chigins`.`chigin_type`";
$proto16["m_srcTableName"] = "Eoc_chigins";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "seq",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto18["m_sql"] = "`Eoc_chigins`.`seq`";
$proto18["m_srcTableName"] = "Eoc_chigins";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "haraidasi",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto20["m_sql"] = "`Eoc_chigins`.`haraidasi`";
$proto20["m_srcTableName"] = "Eoc_chigins";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "excel_output",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto22["m_sql"] = "`Eoc_chigins`.`excel_output`";
$proto22["m_srcTableName"] = "Eoc_chigins";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto24["m_sql"] = "`Eoc_chigins`.`updated_at`";
$proto24["m_srcTableName"] = "Eoc_chigins";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins"
));

$proto26["m_sql"] = "`Eoc`.`ecc_seq`";
$proto26["m_srcTableName"] = "Eoc_chigins";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto28["m_sql"] = "`Eoc_chigins`.`updated_by`";
$proto28["m_srcTableName"] = "Eoc_chigins";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto30["m_sql"] = "`Eoc_chigins`.`create_by`";
$proto30["m_srcTableName"] = "Eoc_chigins";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "account_item",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "Eoc_chigins"
));

$proto32["m_sql"] = "`_chigin_type`.`account_item`";
$proto32["m_srcTableName"] = "Eoc_chigins";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "supplementary_subject",
	"m_strTable" => "_purchase_type",
	"m_srcTableName" => "Eoc_chigins"
));

$proto34["m_sql"] = "`_purchase_type`.`supplementary_subject`";
$proto34["m_srcTableName"] = "Eoc_chigins";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto36["m_sql"] = "`Eoc_chigins`.`satei_by`";
$proto36["m_srcTableName"] = "Eoc_chigins";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "_registerd_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins"
));

$proto38["m_sql"] = "`Eoc`.`_registerd_id`";
$proto38["m_srcTableName"] = "Eoc_chigins";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_code",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins"
));

$proto40["m_sql"] = "`Eoc`.`bank_details_code`";
$proto40["m_srcTableName"] = "Eoc_chigins";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "group",
	"m_strTable" => "_chigin_type",
	"m_srcTableName" => "Eoc_chigins"
));

$proto42["m_sql"] = "`_chigin_type`.`group`";
$proto42["m_srcTableName"] = "Eoc_chigins";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "name1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins"
));

$proto44["m_sql"] = "`Eoc`.`name1`";
$proto44["m_srcTableName"] = "Eoc_chigins";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins"
));

$proto46["m_sql"] = "`Eoc`.`name2`";
$proto46["m_srcTableName"] = "Eoc_chigins";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_unfinished_id",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto48["m_sql"] = "`Eoc_chigins`.`Eoc_unfinished_id`";
$proto48["m_srcTableName"] = "Eoc_chigins";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_takuhai_id",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto50["m_sql"] = "`Eoc_chigins`.`Eoc_takuhai_id`";
$proto50["m_srcTableName"] = "Eoc_chigins";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'個人仕入'"
));

$proto52["m_sql"] = "'個人仕入'";
$proto52["m_srcTableName"] = "Eoc_chigins";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "memo_tag";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto54["m_sql"] = "''";
$proto54["m_srcTableName"] = "Eoc_chigins";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "check_box_area";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "new_name",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins"
));

$proto56["m_sql"] = "`Eoc`.`new_name`";
$proto56["m_srcTableName"] = "Eoc_chigins";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "Eoc_chigins";
$proto59["m_srcTableName"] = "Eoc_chigins";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "chigin_id";
$proto59["m_columns"][] = "create_by";
$proto59["m_columns"][] = "create_at";
$proto59["m_columns"][] = "chigin_ecc_id";
$proto59["m_columns"][] = "ching_price";
$proto59["m_columns"][] = "ching_created_at";
$proto59["m_columns"][] = "remark";
$proto59["m_columns"][] = "chigin_type";
$proto59["m_columns"][] = "seq";
$proto59["m_columns"][] = "haraidasi";
$proto59["m_columns"][] = "excel_output";
$proto59["m_columns"][] = "ching_price_goal";
$proto59["m_columns"][] = "kaitori_sougak";
$proto59["m_columns"][] = "updated_at";
$proto59["m_columns"][] = "updated_by";
$proto59["m_columns"][] = "account_item";
$proto59["m_columns"][] = "satei_by";
$proto59["m_columns"][] = "Eoc_unfinished_id";
$proto59["m_columns"][] = "category";
$proto59["m_columns"][] = "Eoc_takuhai_id";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "`Eoc_chigins`";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "Eoc_chigins";
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
												$proto62=array();
$proto62["m_link"] = "SQLL_INNERJOIN";
			$proto63=array();
$proto63["m_strName"] = "Eoc";
$proto63["m_srcTableName"] = "Eoc_chigins";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "ecc_id";
$proto63["m_columns"][] = "ecc_seq";
$proto63["m_columns"][] = "name1";
$proto63["m_columns"][] = "created_t";
$proto63["m_columns"][] = "registerd_id";
$proto63["m_columns"][] = "kaitori_staff_id";
$proto63["m_columns"][] = "name2";
$proto63["m_columns"][] = "wareki";
$proto63["m_columns"][] = "b1";
$proto63["m_columns"][] = "b2";
$proto63["m_columns"][] = "b3";
$proto63["m_columns"][] = "birth_day";
$proto63["m_columns"][] = "age";
$proto63["m_columns"][] = "zip";
$proto63["m_columns"][] = "zip1";
$proto63["m_columns"][] = "zip2";
$proto63["m_columns"][] = "address1";
$proto63["m_columns"][] = "address2";
$proto63["m_columns"][] = "address3";
$proto63["m_columns"][] = "tel";
$proto63["m_columns"][] = "tel2";
$proto63["m_columns"][] = "mail1";
$proto63["m_columns"][] = "mail2";
$proto63["m_columns"][] = "address_code";
$proto63["m_columns"][] = "bank_name";
$proto63["m_columns"][] = "bank_blunch_code";
$proto63["m_columns"][] = "bank_yokin_shubetu";
$proto63["m_columns"][] = "bank_account";
$proto63["m_columns"][] = "bank_acoount_name";
$proto63["m_columns"][] = "haisou_bangou";
$proto63["m_columns"][] = "sise_houhou";
$proto63["m_columns"][] = "hentou_houhou";
$proto63["m_columns"][] = "hentou_houhou_time";
$proto63["m_columns"][] = "mousikomi_id";
$proto63["m_columns"][] = "hituyou_shorui";
$proto63["m_columns"][] = "seiyaku_fuseiritu";
$proto63["m_columns"][] = "mitumori_taku";
$proto63["m_columns"][] = "seacanse";
$proto63["m_columns"][] = "remark";
$proto63["m_columns"][] = "type";
$proto63["m_columns"][] = "sales_flag";
$proto63["m_columns"][] = "src_type";
$proto63["m_columns"][] = "liquidation_shop_code";
$proto63["m_columns"][] = "insurance_amount_print";
$proto63["m_columns"][] = "jis_code";
$proto63["m_columns"][] = "updated_at";
$proto63["m_columns"][] = "_registerd_id";
$proto63["m_columns"][] = "mail_check_type";
$proto63["m_columns"][] = "purchase_type";
$proto63["m_columns"][] = "sex";
$proto63["m_columns"][] = "m_tel";
$proto63["m_columns"][] = "fax";
$proto63["m_columns"][] = "chigin_kaitori";
$proto63["m_columns"][] = "option1";
$proto63["m_columns"][] = "option2";
$proto63["m_columns"][] = "option3";
$proto63["m_columns"][] = "option4";
$proto63["m_columns"][] = "option5";
$proto63["m_columns"][] = "option6";
$proto63["m_columns"][] = "option7";
$proto63["m_columns"][] = "option8";
$proto63["m_columns"][] = "option9";
$proto63["m_columns"][] = "option10";
$proto63["m_columns"][] = "option11";
$proto63["m_columns"][] = "option12";
$proto63["m_columns"][] = "option13";
$proto63["m_columns"][] = "rakuda_csv_flag";
$proto63["m_columns"][] = "EOC_COURIER_CHECK";
$proto63["m_columns"][] = "EOC_SIZE";
$proto63["m_columns"][] = "EOC_NUMBER";
$proto63["m_columns"][] = "EOC_REUSE";
$proto63["m_columns"][] = "EOC__DELIVERY_DATES";
$proto63["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto63["m_columns"][] = "FIRST_NAME2";
$proto63["m_columns"][] = "LAST_NAME2";
$proto63["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto63["m_columns"][] = "EOC__BOX_NUMBER";
$proto63["m_columns"][] = "FIRST_NAME_KANA";
$proto63["m_columns"][] = "LAST_NAME_KANA";
$proto63["m_columns"][] = "FLAG_SPEED";
$proto63["m_columns"][] = "SEARCH_MEDIA";
$proto63["m_columns"][] = "SEARCH_SITE";
$proto63["m_columns"][] = "UN_REACHABLE";
$proto63["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto63["m_columns"][] = "FLG_MAIL_OTHER";
$proto63["m_columns"][] = "ALLSEIYAKU";
$proto63["m_columns"][] = "ICHIBUSEIYAKU";
$proto63["m_columns"][] = "seiyakukin";
$proto63["m_columns"][] = "kaitorihuka";
$proto63["m_columns"][] = "awazu_date";
$proto63["m_columns"][] = "seiyaku_price";
$proto63["m_columns"][] = "eoc_search_keyword";
$proto63["m_columns"][] = "sonota";
$proto63["m_columns"][] = "size_kosuu";
$proto63["m_columns"][] = "sagawa_shuuka_flag";
$proto63["m_columns"][] = "line_check";
$proto63["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto63["m_columns"][] = "kaitori_sougak";
$proto63["m_columns"][] = "flag";
$proto63["m_columns"][] = "key_code";
$proto63["m_columns"][] = "dm_check_type";
$proto63["m_columns"][] = "kit_flag";
$proto63["m_columns"][] = "kit_done_flag";
$proto63["m_columns"][] = "bank_details_code";
$proto63["m_columns"][] = "bank_details_blunch_name";
$proto63["m_columns"][] = "bank_details_blunch_code";
$proto63["m_columns"][] = "bank_details_account_number";
$proto63["m_columns"][] = "bank_details_symbol";
$proto63["m_columns"][] = "bank_details_number";
$proto63["m_columns"][] = "bank_details_account_name";
$proto63["m_columns"][] = "bank_details_deposit_type";
$proto63["m_columns"][] = "mypage_id";
$proto63["m_columns"][] = "UN_REACHABLE_brand";
$proto63["m_columns"][] = "sagawa_haisou_hoken";
$proto63["m_columns"][] = "transfer_confirm";
$proto63["m_columns"][] = "outside_bank";
$proto63["m_columns"][] = "new_name";
$proto63["m_columns"][] = "letterpack";
$proto63["m_columns"][] = "satei_saisoku_2_days";
$proto63["m_columns"][] = "satei_saisoku_7_days";
$proto63["m_columns"][] = "accept_flag";
$proto63["m_columns"][] = "delivery_flag";
$proto63["m_columns"][] = "refining_weight";
$proto63["m_columns"][] = "line_chat_url";
$proto63["m_columns"][] = "royal_customer_status";
$proto63["m_columns"][] = "is_business_customer";
$proto63["m_columns"][] = "is_exist_haisouhosyo";
$proto63["m_columns"][] = "meigi_hankaku_kana";
$proto63["m_columns"][] = "building_types";
$proto63["m_columns"][] = "dwelling_types";
$proto63["m_columns"][] = "is_yamato_csv";
$proto63["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "INNER JOIN `Eoc` ON `Eoc_chigins`.`chigin_ecc_id` = `Eoc`.`ecc_id`";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "Eoc_chigins";
$proto64=array();
$proto64["m_sql"] = "`Eoc_chigins`.`chigin_ecc_id` = `Eoc`.`ecc_id`";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "chigin_ecc_id",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "= `Eoc`.`ecc_id`";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
												$proto66=array();
$proto66["m_link"] = "SQLL_LEFTJOIN";
			$proto67=array();
$proto67["m_strName"] = "_chigin_type";
$proto67["m_srcTableName"] = "Eoc_chigins";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "id";
$proto67["m_columns"][] = "name";
$proto67["m_columns"][] = "account_item";
$proto67["m_columns"][] = "update_by";
$proto67["m_columns"][] = "update_at";
$proto67["m_columns"][] = "create_by";
$proto67["m_columns"][] = "create_at";
$proto67["m_columns"][] = "sort";
$proto67["m_columns"][] = "group";
$proto67["m_columns"][] = "initial";
$proto67["m_columns"][] = "seiyaku_status";
$proto67["m_columns"][] = "satei_status";
$proto67["m_columns"][] = "freee_account_item_id";
$proto67["m_columns"][] = "freee_item_id";
$proto67["m_columns"][] = "freee_section_id";
$proto67["m_columns"][] = "freee_account_item_id_from_B";
$proto67["m_columns"][] = "freee_item_id_from_B";
$proto67["m_columns"][] = "freee_section_id_from_B";
$proto67["m_columns"][] = "use_many_satei";
$proto67["m_columns"][] = "haraidasi_id";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "LEFT OUTER JOIN `_chigin_type` ON `Eoc_chigins`.`chigin_type` = `_chigin_type`.`id`";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "Eoc_chigins";
$proto68=array();
$proto68["m_sql"] = "`Eoc_chigins`.`chigin_type` = `_chigin_type`.`id`";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "chigin_type",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "= `_chigin_type`.`id`";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
												$proto70=array();
$proto70["m_link"] = "SQLL_LEFTJOIN";
			$proto71=array();
$proto71["m_strName"] = "_purchase_type";
$proto71["m_srcTableName"] = "Eoc_chigins";
$proto71["m_columns"] = array();
$proto71["m_columns"][] = "purchase_id";
$proto71["m_columns"][] = "purchase_name";
$proto71["m_columns"][] = "purchaze_type";
$proto71["m_columns"][] = "sorter";
$proto71["m_columns"][] = "account_item";
$proto71["m_columns"][] = "supplementary_subject";
$proto71["m_columns"][] = "group";
$proto71["m_columns"][] = "update_by";
$proto71["m_columns"][] = "update_at";
$proto71["m_columns"][] = "create_by";
$proto71["m_columns"][] = "create_at";
$proto71["m_columns"][] = "category";
$obj = new SQLTable($proto71);

$proto70["m_table"] = $obj;
$proto70["m_sql"] = "LEFT OUTER JOIN `_purchase_type` ON `Eoc`.`purchase_type` = `_purchase_type`.`purchase_id`";
$proto70["m_alias"] = "";
$proto70["m_srcTableName"] = "Eoc_chigins";
$proto72=array();
$proto72["m_sql"] = "`Eoc`.`purchase_type` = `_purchase_type`.`purchase_id`";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "purchase_type",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins"
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "= `_purchase_type`.`purchase_id`";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

$proto70["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto70);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto74=array();
						$obj = new SQLField(array(
	"m_strName" => "chigin_id",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins"
));

$proto74["m_column"]=$obj;
$proto74["m_bAsc"] = 0;
$proto74["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto74);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_chigins";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_chigins = createSqlQuery_Eoc_chigins();


	
		;

																										

$tdataEoc_chigins[".sqlquery"] = $queryData_Eoc_chigins;

include_once(getabspath("include/Eoc_chigins_events.php"));
$tableEvents["Eoc_chigins"] = new eventclass_Eoc_chigins;
$tdataEoc_chigins[".hasEvents"] = true;

?>