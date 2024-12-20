<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_chigins_for_freee_import = array();
	$tdataEoc_chigins_for_freee_import[".truncateText"] = true;
	$tdataEoc_chigins_for_freee_import[".NumberOfChars"] = 80;
	$tdataEoc_chigins_for_freee_import[".ShortName"] = "Eoc_chigins_for_freee_import";
	$tdataEoc_chigins_for_freee_import[".OwnerID"] = "";
	$tdataEoc_chigins_for_freee_import[".OriginalTable"] = "Eoc_chigins";

//	field labels
$fieldLabelsEoc_chigins_for_freee_import = array();
$fieldToolTipsEoc_chigins_for_freee_import = array();
$pageTitlesEoc_chigins_for_freee_import = array();
$placeHoldersEoc_chigins_for_freee_import = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"] = array();
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"] = array();
	$placeHoldersEoc_chigins_for_freee_import["Japanese"] = array();
	$pageTitlesEoc_chigins_for_freee_import["Japanese"] = array();
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["chigin_id"] = "商品買取ＩＤ";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["chigin_id"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["chigin_id"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["chigin_ecc_id"] = "管理番号";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["chigin_ecc_id"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["chigin_ecc_id"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["ching_price"] = "金額";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["ching_price"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["ching_price"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["ching_created_at"] = "発生日";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["ching_created_at"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["ching_created_at"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["remark"] = "備考";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["remark"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["remark"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["chigin_type"] = "買取種別";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["chigin_type"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["chigin_type"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["haraidasi"] = "払出し";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["haraidasi"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["haraidasi"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["ecc_seq"] = "顧客ID";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["ecc_seq"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["ecc_seq"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["updated_by"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["updated_by"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["create_by"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["create_by"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["account_item"] = "勘定科目";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["account_item"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["account_item"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["satei_by"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["satei_by"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["_registerd_id"] = "顧客登録者";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["_registerd_id"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["_registerd_id"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["bank_details_code"] = "振込先銀行";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["bank_details_code"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["bank_details_code"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["group"] = "部門";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["group"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["group"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["name1"] = "氏名";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["name1"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["name1"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["name2"] = "フリガナ";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["name2"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["name2"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["Eoc_unfinished_id"] = "店頭取引Id";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["Eoc_unfinished_id"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["Eoc_unfinished_id"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["Eoc_takuhai_id"] = "宅配取引Id";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["Eoc_takuhai_id"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["Eoc_takuhai_id"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["memo_tag"] = "メモタグ（複数指定可、カンマ区切り）";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["memo_tag"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["memo_tag"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["check_box_area"] = "チェック";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["check_box_area"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["check_box_area"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["new_name"] = "旧姓/新姓/その他";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["new_name"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["new_name"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["freee_item_name"] = "品目";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["freee_item_name"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["freee_item_name"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["torihikisaki"] = "取引先";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["torihikisaki"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["torihikisaki"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["zeikubun"] = "税区分";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["zeikubun"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["zeikubun"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["address1"] = "Address1";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["address1"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["address1"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["address2"] = "Address2";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["address2"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["address2"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["Japanese"]["address3"] = "Address3";
	$fieldToolTipsEoc_chigins_for_freee_import["Japanese"]["address3"] = "";
	$placeHoldersEoc_chigins_for_freee_import["Japanese"]["address3"] = "";
	if (count($fieldToolTipsEoc_chigins_for_freee_import["Japanese"]))
		$tdataEoc_chigins_for_freee_import[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_chigins_for_freee_import[""] = array();
	$fieldToolTipsEoc_chigins_for_freee_import[""] = array();
	$placeHoldersEoc_chigins_for_freee_import[""] = array();
	$pageTitlesEoc_chigins_for_freee_import[""] = array();
	$fieldLabelsEoc_chigins_for_freee_import[""]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["updated_by"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["updated_by"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["create_by"] = "Create By";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["create_by"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["create_by"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["account_item"] = "Account Item";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["account_item"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["account_item"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["satei_by"] = "Satei By";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["satei_by"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["satei_by"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["_registerd_id"] = "Registerd Id";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["_registerd_id"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["_registerd_id"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["bank_details_code"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["bank_details_code"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["group"] = "Group";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["group"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["group"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["name1"] = "Name1";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["name1"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["name1"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["name2"] = "Name2";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["name2"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["name2"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["Eoc_unfinished_id"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["Eoc_unfinished_id"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["Eoc_takuhai_id"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["Eoc_takuhai_id"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["memo_tag"] = "Memo Tag";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["memo_tag"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["memo_tag"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["check_box_area"] = "Check Box Area";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["check_box_area"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["check_box_area"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["new_name"] = "New Name";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["new_name"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["new_name"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["freee_item_name"] = "Freee Item Name";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["freee_item_name"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["freee_item_name"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["torihikisaki"] = "Torihikisaki";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["torihikisaki"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["torihikisaki"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["zeikubun"] = "Zeikubun";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["zeikubun"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["zeikubun"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["address1"] = "Address1";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["address1"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["address1"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["address2"] = "Address2";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["address2"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["address2"] = "";
	$fieldLabelsEoc_chigins_for_freee_import[""]["address3"] = "Address3";
	$fieldToolTipsEoc_chigins_for_freee_import[""]["address3"] = "";
	$placeHoldersEoc_chigins_for_freee_import[""]["address3"] = "";
	if (count($fieldToolTipsEoc_chigins_for_freee_import[""]))
		$tdataEoc_chigins_for_freee_import[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_chigins_for_freee_import["English"] = array();
	$fieldToolTipsEoc_chigins_for_freee_import["English"] = array();
	$placeHoldersEoc_chigins_for_freee_import["English"] = array();
	$pageTitlesEoc_chigins_for_freee_import["English"] = array();
	$fieldLabelsEoc_chigins_for_freee_import["English"]["account_item"] = "Account Item";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["account_item"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["account_item"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["English"]["satei_by"] = "Satei By";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["satei_by"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["satei_by"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["English"]["_registerd_id"] = "Registerd Id";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["_registerd_id"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["_registerd_id"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["English"]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["bank_details_code"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["bank_details_code"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["English"]["group"] = "Group";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["group"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["group"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["English"]["name1"] = "Name1";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["name1"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["name1"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["English"]["name2"] = "Name2";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["name2"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["name2"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["English"]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["Eoc_unfinished_id"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["Eoc_unfinished_id"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["English"]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["Eoc_takuhai_id"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["Eoc_takuhai_id"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["English"]["memo_tag"] = "Memo Tag";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["memo_tag"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["memo_tag"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["English"]["check_box_area"] = "Check Box Area";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["check_box_area"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["check_box_area"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["English"]["new_name"] = "New Name";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["new_name"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["new_name"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["English"]["freee_item_name"] = "Freee Item Name";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["freee_item_name"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["freee_item_name"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["English"]["torihikisaki"] = "Torihikisaki";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["torihikisaki"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["torihikisaki"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["English"]["zeikubun"] = "Zeikubun";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["zeikubun"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["zeikubun"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["English"]["address1"] = "Address1";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["address1"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["address1"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["English"]["address2"] = "Address2";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["address2"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["address2"] = "";
	$fieldLabelsEoc_chigins_for_freee_import["English"]["address3"] = "Address3";
	$fieldToolTipsEoc_chigins_for_freee_import["English"]["address3"] = "";
	$placeHoldersEoc_chigins_for_freee_import["English"]["address3"] = "";
	if (count($fieldToolTipsEoc_chigins_for_freee_import["English"]))
		$tdataEoc_chigins_for_freee_import[".isUseToolTips"] = true;
}


	$tdataEoc_chigins_for_freee_import[".NCSearch"] = true;



$tdataEoc_chigins_for_freee_import[".shortTableName"] = "Eoc_chigins_for_freee_import";
$tdataEoc_chigins_for_freee_import[".nSecOptions"] = 0;
$tdataEoc_chigins_for_freee_import[".recsPerRowPrint"] = 1;
$tdataEoc_chigins_for_freee_import[".mainTableOwnerID"] = "";
$tdataEoc_chigins_for_freee_import[".moveNext"] = 1;
$tdataEoc_chigins_for_freee_import[".entityType"] = 1;

$tdataEoc_chigins_for_freee_import[".strOriginalTableName"] = "Eoc_chigins";

	



$tdataEoc_chigins_for_freee_import[".showAddInPopup"] = false;

$tdataEoc_chigins_for_freee_import[".showEditInPopup"] = false;

$tdataEoc_chigins_for_freee_import[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_chigins_for_freee_import[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_chigins_for_freee_import[".fieldsForRegister"] = array();

$tdataEoc_chigins_for_freee_import[".listAjax"] = false;

	$tdataEoc_chigins_for_freee_import[".audit"] = true;

	$tdataEoc_chigins_for_freee_import[".locking"] = false;



$tdataEoc_chigins_for_freee_import[".list"] = true;

$tdataEoc_chigins_for_freee_import[".inlineEdit"] = true;


$tdataEoc_chigins_for_freee_import[".reorderRecordsByHeader"] = true;
$tdataEoc_chigins_for_freee_import[".createSortByDropdown"] = true;
$tdataEoc_chigins_for_freee_import[".strSortControlSettingsJSON"] = "";

$tdataEoc_chigins_for_freee_import[".strClickActionJSON"] = "{\"fields\":{\"chigin_ecc_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"chigin_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}},\"chigin_type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ching_created_at\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ching_price\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"excel_output\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"haraidasi\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"remark\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seq\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"updated_at\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";


$tdataEoc_chigins_for_freee_import[".inlineAdd"] = true;

$tdataEoc_chigins_for_freee_import[".import"] = true;

$tdataEoc_chigins_for_freee_import[".exportTo"] = true;


$tdataEoc_chigins_for_freee_import[".delete"] = true;

$tdataEoc_chigins_for_freee_import[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_chigins_for_freee_import[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_chigins_for_freee_import[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_chigins_for_freee_import[".searchSaving"] = false;
//

$tdataEoc_chigins_for_freee_import[".showSearchPanel"] = true;
		$tdataEoc_chigins_for_freee_import[".flexibleSearch"] = true;

$tdataEoc_chigins_for_freee_import[".isUseAjaxSuggest"] = true;

$tdataEoc_chigins_for_freee_import[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataEoc_chigins_for_freee_import[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_chigins_for_freee_import[".buttonsAdded"] = false;

$tdataEoc_chigins_for_freee_import[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_chigins_for_freee_import[".isUseTimeForSearch"] = false;



$tdataEoc_chigins_for_freee_import[".badgeColor"] = "1E90FF";


$tdataEoc_chigins_for_freee_import[".allSearchFields"] = array();
$tdataEoc_chigins_for_freee_import[".filterFields"] = array();
$tdataEoc_chigins_for_freee_import[".requiredSearchFields"] = array();

$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "ching_created_at";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "chigin_ecc_id";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "account_item";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "ching_price";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "remark";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "group";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "freee_item_name";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "memo_tag";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "torihikisaki";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "zeikubun";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "chigin_type";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "Eoc_unfinished_id";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "Eoc_takuhai_id";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "name2";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "new_name";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "name1";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "satei_by";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "ecc_seq";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "chigin_id";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "_registerd_id";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "updated_by";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "create_by";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "haraidasi";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "bank_details_code";
	$tdataEoc_chigins_for_freee_import[".allSearchFields"][] = "updated_at";
	
$tdataEoc_chigins_for_freee_import[".filterFields"][] = "chigin_type";
$tdataEoc_chigins_for_freee_import[".filterFields"][] = "haraidasi";

$tdataEoc_chigins_for_freee_import[".googleLikeFields"] = array();
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "chigin_id";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "chigin_ecc_id";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "ching_price";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "ching_created_at";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "remark";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "chigin_type";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "haraidasi";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "ecc_seq";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "updated_by";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "create_by";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "satei_by";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "_registerd_id";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "bank_details_code";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "freee_item_name";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "Eoc_takuhai_id";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "memo_tag";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "new_name";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "torihikisaki";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "zeikubun";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "address1";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "address2";
$tdataEoc_chigins_for_freee_import[".googleLikeFields"][] = "address3";

$tdataEoc_chigins_for_freee_import[".panelSearchFields"] = array();
$tdataEoc_chigins_for_freee_import[".searchPanelOptions"] = array();
$tdataEoc_chigins_for_freee_import[".panelSearchFields"][] = "ching_created_at";
	$tdataEoc_chigins_for_freee_import[".panelSearchFields"][] = "chigin_ecc_id";
	$tdataEoc_chigins_for_freee_import[".panelSearchFields"][] = "ching_price";
	$tdataEoc_chigins_for_freee_import[".panelSearchFields"][] = "remark";
	$tdataEoc_chigins_for_freee_import[".panelSearchFields"][] = "chigin_type";
	$tdataEoc_chigins_for_freee_import[".panelSearchFields"][] = "Eoc_unfinished_id";
	$tdataEoc_chigins_for_freee_import[".panelSearchFields"][] = "Eoc_takuhai_id";
	$tdataEoc_chigins_for_freee_import[".panelSearchFields"][] = "satei_by";
	$tdataEoc_chigins_for_freee_import[".panelSearchFields"][] = "chigin_id";
	$tdataEoc_chigins_for_freee_import[".panelSearchFields"][] = "haraidasi";
	$tdataEoc_chigins_for_freee_import[".panelSearchFields"][] = "updated_at";
	
$tdataEoc_chigins_for_freee_import[".advSearchFields"] = array();
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "ching_created_at";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "chigin_ecc_id";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "account_item";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "ching_price";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "remark";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "group";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "freee_item_name";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "memo_tag";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "torihikisaki";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "zeikubun";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "chigin_type";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "Eoc_takuhai_id";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "name2";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "new_name";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "name1";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "satei_by";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "ecc_seq";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "chigin_id";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "_registerd_id";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "updated_by";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "create_by";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "haraidasi";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "bank_details_code";
$tdataEoc_chigins_for_freee_import[".advSearchFields"][] = "updated_at";

$tdataEoc_chigins_for_freee_import[".tableType"] = "list";

$tdataEoc_chigins_for_freee_import[".printerPageOrientation"] = 0;
$tdataEoc_chigins_for_freee_import[".nPrinterPageScale"] = 100;

$tdataEoc_chigins_for_freee_import[".nPrinterSplitRecords"] = 40;

$tdataEoc_chigins_for_freee_import[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_chigins_for_freee_import[".geocodingEnabled"] = false;





$tdataEoc_chigins_for_freee_import[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_chigins_for_freee_import[".pageSize"] = 20;

$tdataEoc_chigins_for_freee_import[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Eoc_chigins`.`chigin_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_chigins_for_freee_import[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_chigins_for_freee_import[".orderindexes"] = array();
$tdataEoc_chigins_for_freee_import[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`Eoc_chigins`.`chigin_id`");

$tdataEoc_chigins_for_freee_import[".sqlHead"] = "SELECT `Eoc_chigins`.`chigin_id`,  `Eoc_chigins`.`chigin_ecc_id`,  `Eoc_chigins`.`ching_price`,  `Eoc_chigins`.`ching_created_at`,  `Eoc_chigins`.`remark`,  `Eoc_chigins`.`chigin_type`,  `Eoc_chigins`.`haraidasi`,  `Eoc_chigins`.`updated_at`,  `Eoc`.`ecc_seq`,  `Eoc_chigins`.`updated_by`,  `Eoc_chigins`.`create_by`,  (	CASE  			`Eoc`.`purchase_type`   			WHEN 52 THEN  			`_chigin_type`.`freee_account_item_id_from_B`   			ELSE  			`_chigin_type`.`freee_account_item_id`   		END  ) AS `account_item`,  `Eoc_chigins`.`satei_by`,  `Eoc`.`_registerd_id`,  `Eoc`.`bank_details_code`,  (  		CASE  				`Eoc`.`purchase_type`   				WHEN 52 THEN  				`_chigin_type`.`freee_section_id_from_B`   				ELSE `_chigin_type`.`freee_section_id`   			END   	) AS `group`,  (  			CASE  					`Eoc`.`purchase_type`   					WHEN 52 THEN  					`_chigin_type`.`freee_item_id_from_B`   					ELSE `_chigin_type`.`freee_item_id`   				END   					) AS `freee_item_name`,  `Eoc`.`name1`,  `Eoc`.`name2`,  `Eoc_chigins`.`Eoc_unfinished_id`,  `Eoc_chigins`.`Eoc_takuhai_id`,  (  				CASE  						WHEN ( `Eoc_chigins`.`Eoc_unfinished_id` > 0 )  THEN	'【仕入種別】来店仕入,D0002営業部'   						ELSE '【仕入種別】宅配仕入,D0002営業部'   					END   						) AS `memo_tag`,  '' AS `check_box_area`,  `Eoc`.`new_name`,  (  					CASE  							`Eoc`.`purchase_type`   							WHEN 52 THEN  							'同業者' ELSE '個人'   						END   						) AS `torihikisaki`,  (  IF(`Eoc_chigins`.`remark` like \"%ご負担%\",'課対仕返10%','課対仕入10%')  ) AS `zeikubun`,  `Eoc`.`address1`,  `Eoc`.`address2`,  `Eoc`.`address3`";
$tdataEoc_chigins_for_freee_import[".sqlFrom"] = "FROM `Eoc_chigins`  INNER JOIN `Eoc` ON `Eoc_chigins`.`chigin_ecc_id` = `Eoc`.`ecc_id`  LEFT OUTER JOIN `_chigin_type` ON `Eoc_chigins`.`chigin_type` = `_chigin_type`.`id`  LEFT OUTER JOIN `_purchase_type` ON `Eoc`.`purchase_type` = `_purchase_type`.`purchase_id`";
$tdataEoc_chigins_for_freee_import[".sqlWhereExpr"] = "";
$tdataEoc_chigins_for_freee_import[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_chigins_for_freee_import[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_chigins_for_freee_import[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_chigins_for_freee_import[".highlightSearchResults"] = true;

$tableKeysEoc_chigins_for_freee_import = array();
$tableKeysEoc_chigins_for_freee_import[] = "chigin_id";
$tdataEoc_chigins_for_freee_import[".Keys"] = $tableKeysEoc_chigins_for_freee_import;

$tdataEoc_chigins_for_freee_import[".listFields"] = array();
$tdataEoc_chigins_for_freee_import[".listFields"][] = "ching_created_at";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "chigin_ecc_id";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "account_item";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "ching_price";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "remark";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "group";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "freee_item_name";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "memo_tag";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "torihikisaki";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "zeikubun";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "chigin_type";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "Eoc_takuhai_id";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "name2";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "new_name";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "name1";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "satei_by";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "ecc_seq";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "chigin_id";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "_registerd_id";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "updated_by";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "create_by";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "haraidasi";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "bank_details_code";
$tdataEoc_chigins_for_freee_import[".listFields"][] = "updated_at";

$tdataEoc_chigins_for_freee_import[".hideMobileList"] = array();


$tdataEoc_chigins_for_freee_import[".viewFields"] = array();

$tdataEoc_chigins_for_freee_import[".addFields"] = array();

$tdataEoc_chigins_for_freee_import[".masterListFields"] = array();
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "check_box_area";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "address1";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "address2";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "address3";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "ching_created_at";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "chigin_ecc_id";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "account_item";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "ching_price";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "remark";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "group";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "freee_item_name";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "memo_tag";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "torihikisaki";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "zeikubun";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "chigin_type";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "Eoc_takuhai_id";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "name2";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "new_name";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "name1";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "satei_by";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "ecc_seq";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "chigin_id";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "_registerd_id";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "updated_by";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "create_by";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "haraidasi";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "bank_details_code";
$tdataEoc_chigins_for_freee_import[".masterListFields"][] = "updated_at";

$tdataEoc_chigins_for_freee_import[".inlineAddFields"] = array();
$tdataEoc_chigins_for_freee_import[".inlineAddFields"][] = "ching_created_at";
$tdataEoc_chigins_for_freee_import[".inlineAddFields"][] = "chigin_ecc_id";
$tdataEoc_chigins_for_freee_import[".inlineAddFields"][] = "ching_price";
$tdataEoc_chigins_for_freee_import[".inlineAddFields"][] = "remark";
$tdataEoc_chigins_for_freee_import[".inlineAddFields"][] = "chigin_type";
$tdataEoc_chigins_for_freee_import[".inlineAddFields"][] = "satei_by";
$tdataEoc_chigins_for_freee_import[".inlineAddFields"][] = "updated_by";
$tdataEoc_chigins_for_freee_import[".inlineAddFields"][] = "create_by";
$tdataEoc_chigins_for_freee_import[".inlineAddFields"][] = "haraidasi";
$tdataEoc_chigins_for_freee_import[".inlineAddFields"][] = "updated_at";

$tdataEoc_chigins_for_freee_import[".editFields"] = array();

$tdataEoc_chigins_for_freee_import[".inlineEditFields"] = array();
$tdataEoc_chigins_for_freee_import[".inlineEditFields"][] = "chigin_ecc_id";
$tdataEoc_chigins_for_freee_import[".inlineEditFields"][] = "ching_price";
$tdataEoc_chigins_for_freee_import[".inlineEditFields"][] = "remark";
$tdataEoc_chigins_for_freee_import[".inlineEditFields"][] = "chigin_type";
$tdataEoc_chigins_for_freee_import[".inlineEditFields"][] = "satei_by";
$tdataEoc_chigins_for_freee_import[".inlineEditFields"][] = "haraidasi";

$tdataEoc_chigins_for_freee_import[".updateSelectedFields"] = array();


$tdataEoc_chigins_for_freee_import[".exportFields"] = array();
$tdataEoc_chigins_for_freee_import[".exportFields"][] = "ching_created_at";
$tdataEoc_chigins_for_freee_import[".exportFields"][] = "chigin_ecc_id";
$tdataEoc_chigins_for_freee_import[".exportFields"][] = "account_item";
$tdataEoc_chigins_for_freee_import[".exportFields"][] = "ching_price";
$tdataEoc_chigins_for_freee_import[".exportFields"][] = "remark";
$tdataEoc_chigins_for_freee_import[".exportFields"][] = "group";
$tdataEoc_chigins_for_freee_import[".exportFields"][] = "freee_item_name";
$tdataEoc_chigins_for_freee_import[".exportFields"][] = "memo_tag";
$tdataEoc_chigins_for_freee_import[".exportFields"][] = "torihikisaki";
$tdataEoc_chigins_for_freee_import[".exportFields"][] = "zeikubun";

$tdataEoc_chigins_for_freee_import[".importFields"] = array();
$tdataEoc_chigins_for_freee_import[".importFields"][] = "chigin_id";
$tdataEoc_chigins_for_freee_import[".importFields"][] = "chigin_ecc_id";
$tdataEoc_chigins_for_freee_import[".importFields"][] = "ching_price";
$tdataEoc_chigins_for_freee_import[".importFields"][] = "ching_created_at";
$tdataEoc_chigins_for_freee_import[".importFields"][] = "remark";
$tdataEoc_chigins_for_freee_import[".importFields"][] = "chigin_type";
$tdataEoc_chigins_for_freee_import[".importFields"][] = "haraidasi";
$tdataEoc_chigins_for_freee_import[".importFields"][] = "updated_at";
$tdataEoc_chigins_for_freee_import[".importFields"][] = "ecc_seq";
$tdataEoc_chigins_for_freee_import[".importFields"][] = "updated_by";
$tdataEoc_chigins_for_freee_import[".importFields"][] = "create_by";
$tdataEoc_chigins_for_freee_import[".importFields"][] = "satei_by";
$tdataEoc_chigins_for_freee_import[".importFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins_for_freee_import[".importFields"][] = "Eoc_takuhai_id";

$tdataEoc_chigins_for_freee_import[".printFields"] = array();

//	chigin_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "chigin_id";
	$fdata["GoodName"] = "chigin_id";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","chigin_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_chigins_for_freee_import["chigin_id"] = $fdata;
//	chigin_ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "chigin_ecc_id";
	$fdata["GoodName"] = "chigin_ecc_id";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","chigin_ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdataEoc_chigins_for_freee_import["chigin_ecc_id"] = $fdata;
//	ching_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ching_price";
	$fdata["GoodName"] = "ching_price";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","ching_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdataEoc_chigins_for_freee_import["ching_price"] = $fdata;
//	ching_created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ching_created_at";
	$fdata["GoodName"] = "ching_created_at";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","ching_created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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
		$fdata["defaultSearchOption"] = "Between";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_chigins_for_freee_import["ching_created_at"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","remark");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "remark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins`.`remark`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdataEoc_chigins_for_freee_import["remark"] = $fdata;
//	chigin_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "chigin_type";
	$fdata["GoodName"] = "chigin_type";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","chigin_type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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


	$tdataEoc_chigins_for_freee_import["chigin_type"] = $fdata;
//	haraidasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "haraidasi";
	$fdata["GoodName"] = "haraidasi";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","haraidasi");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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


	$tdataEoc_chigins_for_freee_import["haraidasi"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","updated_at");
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




	$tdataEoc_chigins_for_freee_import["updated_at"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","ecc_seq");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_chigins_for_freee_import["ecc_seq"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_chigins_for_freee_import["updated_by"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_chigins_for_freee_import["create_by"] = $fdata;
//	account_item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "account_item";
	$fdata["GoodName"] = "account_item";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","account_item");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "account_item";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(	CASE  			`Eoc`.`purchase_type`   			WHEN 52 THEN  			`_chigin_type`.`freee_account_item_id_from_B`   			ELSE  			`_chigin_type`.`freee_account_item_id`   		END  )";

	
	
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
	$edata["LookupTable"] = "freee_account_items";
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




	$tdataEoc_chigins_for_freee_import["account_item"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","satei_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_chigins_for_freee_import["satei_by"] = $fdata;
//	_registerd_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "_registerd_id";
	$fdata["GoodName"] = "_registerd_id";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","_registerd_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_chigins_for_freee_import["_registerd_id"] = $fdata;
//	bank_details_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "bank_details_code";
	$fdata["GoodName"] = "bank_details_code";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","bank_details_code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_chigins_for_freee_import["bank_details_code"] = $fdata;
//	group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "group";
	$fdata["GoodName"] = "group";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","group");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "group";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(  		CASE  				`Eoc`.`purchase_type`   				WHEN 52 THEN  				`_chigin_type`.`freee_section_id_from_B`   				ELSE `_chigin_type`.`freee_section_id`   			END   	)";

	
	
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
	$edata["LookupTable"] = "freee_sections";
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




	$tdataEoc_chigins_for_freee_import["group"] = $fdata;
//	freee_item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "freee_item_name";
	$fdata["GoodName"] = "freee_item_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","freee_item_name");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_item_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(  			CASE  					`Eoc`.`purchase_type`   					WHEN 52 THEN  					`_chigin_type`.`freee_item_id_from_B`   					ELSE `_chigin_type`.`freee_item_id`   				END   					)";

	
	
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
	$edata["LookupTable"] = "freee_items";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
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




	$tdataEoc_chigins_for_freee_import["freee_item_name"] = $fdata;
//	name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "name1";
	$fdata["GoodName"] = "name1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","name1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_chigins_for_freee_import["name1"] = $fdata;
//	name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "name2";
	$fdata["GoodName"] = "name2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","name2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_chigins_for_freee_import["name2"] = $fdata;
//	Eoc_unfinished_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Eoc_unfinished_id";
	$fdata["GoodName"] = "Eoc_unfinished_id";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","Eoc_unfinished_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_chigins_for_freee_import["Eoc_unfinished_id"] = $fdata;
//	Eoc_takuhai_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Eoc_takuhai_id";
	$fdata["GoodName"] = "Eoc_takuhai_id";
	$fdata["ownerTable"] = "Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","Eoc_takuhai_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_chigins_for_freee_import["Eoc_takuhai_id"] = $fdata;
//	memo_tag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "memo_tag";
	$fdata["GoodName"] = "memo_tag";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","memo_tag");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "memo_tag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(  				CASE  						WHEN ( `Eoc_chigins`.`Eoc_unfinished_id` > 0 )  THEN	'【仕入種別】来店仕入,D0002営業部'   						ELSE '【仕入種別】宅配仕入,D0002営業部'   					END   						)";

	
	
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




	$tdataEoc_chigins_for_freee_import["memo_tag"] = $fdata;
//	check_box_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "check_box_area";
	$fdata["GoodName"] = "check_box_area";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","check_box_area");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "check_box_area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
			
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








	$tdataEoc_chigins_for_freee_import["check_box_area"] = $fdata;
//	new_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "new_name";
	$fdata["GoodName"] = "new_name";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","new_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_chigins_for_freee_import["new_name"] = $fdata;
//	torihikisaki
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "torihikisaki";
	$fdata["GoodName"] = "torihikisaki";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","torihikisaki");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "torihikisaki";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(  					CASE  							`Eoc`.`purchase_type`   							WHEN 52 THEN  							'同業者' ELSE '個人'   						END   						)";

	
	
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




	$tdataEoc_chigins_for_freee_import["torihikisaki"] = $fdata;
//	zeikubun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "zeikubun";
	$fdata["GoodName"] = "zeikubun";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","zeikubun");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zeikubun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(  IF(`Eoc_chigins`.`remark` like \"%ご負担%\",'課対仕返10%','課対仕入10%')  )";

	
	
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




	$tdataEoc_chigins_for_freee_import["zeikubun"] = $fdata;
//	address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "address1";
	$fdata["GoodName"] = "address1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","address1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "address1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`address1`";

	
	
			
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








	$tdataEoc_chigins_for_freee_import["address1"] = $fdata;
//	address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "address2";
	$fdata["GoodName"] = "address2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","address2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "address2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`address2`";

	
	
			
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








	$tdataEoc_chigins_for_freee_import["address2"] = $fdata;
//	address3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "address3";
	$fdata["GoodName"] = "address3";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_for_freee_import","address3");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "address3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`address3`";

	
	
			
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








	$tdataEoc_chigins_for_freee_import["address3"] = $fdata;


$tables_data["Eoc_chigins_for_freee_import"]=&$tdataEoc_chigins_for_freee_import;
$field_labels["Eoc_chigins_for_freee_import"] = &$fieldLabelsEoc_chigins_for_freee_import;
$fieldToolTips["Eoc_chigins_for_freee_import"] = &$fieldToolTipsEoc_chigins_for_freee_import;
$placeHolders["Eoc_chigins_for_freee_import"] = &$placeHoldersEoc_chigins_for_freee_import;
$page_titles["Eoc_chigins_for_freee_import"] = &$pageTitlesEoc_chigins_for_freee_import;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_chigins_for_freee_import"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_chigins_for_freee_import"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_chigins_for_freee_import()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Eoc_chigins`.`chigin_id`,  `Eoc_chigins`.`chigin_ecc_id`,  `Eoc_chigins`.`ching_price`,  `Eoc_chigins`.`ching_created_at`,  `Eoc_chigins`.`remark`,  `Eoc_chigins`.`chigin_type`,  `Eoc_chigins`.`haraidasi`,  `Eoc_chigins`.`updated_at`,  `Eoc`.`ecc_seq`,  `Eoc_chigins`.`updated_by`,  `Eoc_chigins`.`create_by`,  (	CASE  			`Eoc`.`purchase_type`   			WHEN 52 THEN  			`_chigin_type`.`freee_account_item_id_from_B`   			ELSE  			`_chigin_type`.`freee_account_item_id`   		END  ) AS `account_item`,  `Eoc_chigins`.`satei_by`,  `Eoc`.`_registerd_id`,  `Eoc`.`bank_details_code`,  (  		CASE  				`Eoc`.`purchase_type`   				WHEN 52 THEN  				`_chigin_type`.`freee_section_id_from_B`   				ELSE `_chigin_type`.`freee_section_id`   			END   	) AS `group`,  (  			CASE  					`Eoc`.`purchase_type`   					WHEN 52 THEN  					`_chigin_type`.`freee_item_id_from_B`   					ELSE `_chigin_type`.`freee_item_id`   				END   					) AS `freee_item_name`,  `Eoc`.`name1`,  `Eoc`.`name2`,  `Eoc_chigins`.`Eoc_unfinished_id`,  `Eoc_chigins`.`Eoc_takuhai_id`,  (  				CASE  						WHEN ( `Eoc_chigins`.`Eoc_unfinished_id` > 0 )  THEN	'【仕入種別】来店仕入,D0002営業部'   						ELSE '【仕入種別】宅配仕入,D0002営業部'   					END   						) AS `memo_tag`,  '' AS `check_box_area`,  `Eoc`.`new_name`,  (  					CASE  							`Eoc`.`purchase_type`   							WHEN 52 THEN  							'同業者' ELSE '個人'   						END   						) AS `torihikisaki`,  (  IF(`Eoc_chigins`.`remark` like \"%ご負担%\",'課対仕返10%','課対仕入10%')  ) AS `zeikubun`,  `Eoc`.`address1`,  `Eoc`.`address2`,  `Eoc`.`address3`";
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
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto6["m_sql"] = "`Eoc_chigins`.`chigin_id`";
$proto6["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "chigin_ecc_id",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto8["m_sql"] = "`Eoc_chigins`.`chigin_ecc_id`";
$proto8["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ching_price",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto10["m_sql"] = "`Eoc_chigins`.`ching_price`";
$proto10["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ching_created_at",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto12["m_sql"] = "`Eoc_chigins`.`ching_created_at`";
$proto12["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto14["m_sql"] = "`Eoc_chigins`.`remark`";
$proto14["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "chigin_type",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto16["m_sql"] = "`Eoc_chigins`.`chigin_type`";
$proto16["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "haraidasi",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto18["m_sql"] = "`Eoc_chigins`.`haraidasi`";
$proto18["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto20["m_sql"] = "`Eoc_chigins`.`updated_at`";
$proto20["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto22["m_sql"] = "`Eoc`.`ecc_seq`";
$proto22["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto24["m_sql"] = "`Eoc_chigins`.`updated_by`";
$proto24["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto26["m_sql"] = "`Eoc_chigins`.`create_by`";
$proto26["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(	CASE  			`Eoc`.`purchase_type`   			WHEN 52 THEN  			`_chigin_type`.`freee_account_item_id_from_B`   			ELSE  			`_chigin_type`.`freee_account_item_id`   		END  )"
));

$proto28["m_sql"] = "(	CASE  			`Eoc`.`purchase_type`   			WHEN 52 THEN  			`_chigin_type`.`freee_account_item_id_from_B`   			ELSE  			`_chigin_type`.`freee_account_item_id`   		END  )";
$proto28["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "account_item";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto30["m_sql"] = "`Eoc_chigins`.`satei_by`";
$proto30["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "_registerd_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto32["m_sql"] = "`Eoc`.`_registerd_id`";
$proto32["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_code",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto34["m_sql"] = "`Eoc`.`bank_details_code`";
$proto34["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(  		CASE  				`Eoc`.`purchase_type`   				WHEN 52 THEN  				`_chigin_type`.`freee_section_id_from_B`   				ELSE `_chigin_type`.`freee_section_id`   			END   	)"
));

$proto36["m_sql"] = "(  		CASE  				`Eoc`.`purchase_type`   				WHEN 52 THEN  				`_chigin_type`.`freee_section_id_from_B`   				ELSE `_chigin_type`.`freee_section_id`   			END   	)";
$proto36["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "group";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(  			CASE  					`Eoc`.`purchase_type`   					WHEN 52 THEN  					`_chigin_type`.`freee_item_id_from_B`   					ELSE `_chigin_type`.`freee_item_id`   				END   					)"
));

$proto38["m_sql"] = "(  			CASE  					`Eoc`.`purchase_type`   					WHEN 52 THEN  					`_chigin_type`.`freee_item_id_from_B`   					ELSE `_chigin_type`.`freee_item_id`   				END   					)";
$proto38["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "freee_item_name";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "name1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto40["m_sql"] = "`Eoc`.`name1`";
$proto40["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto42["m_sql"] = "`Eoc`.`name2`";
$proto42["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_unfinished_id",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto44["m_sql"] = "`Eoc_chigins`.`Eoc_unfinished_id`";
$proto44["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_takuhai_id",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto46["m_sql"] = "`Eoc_chigins`.`Eoc_takuhai_id`";
$proto46["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(  				CASE  						WHEN ( `Eoc_chigins`.`Eoc_unfinished_id` > 0 )  THEN	'【仕入種別】来店仕入,D0002営業部'   						ELSE '【仕入種別】宅配仕入,D0002営業部'   					END   						)"
));

$proto48["m_sql"] = "(  				CASE  						WHEN ( `Eoc_chigins`.`Eoc_unfinished_id` > 0 )  THEN	'【仕入種別】来店仕入,D0002営業部'   						ELSE '【仕入種別】宅配仕入,D0002営業部'   					END   						)";
$proto48["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "memo_tag";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto50["m_sql"] = "''";
$proto50["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "check_box_area";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "new_name",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto52["m_sql"] = "`Eoc`.`new_name`";
$proto52["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(  					CASE  							`Eoc`.`purchase_type`   							WHEN 52 THEN  							'同業者' ELSE '個人'   						END   						)"
));

$proto54["m_sql"] = "(  					CASE  							`Eoc`.`purchase_type`   							WHEN 52 THEN  							'同業者' ELSE '個人'   						END   						)";
$proto54["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "torihikisaki";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(  IF(`Eoc_chigins`.`remark` like \"%ご負担%\",'課対仕返10%','課対仕入10%')  )"
));

$proto56["m_sql"] = "(  IF(`Eoc_chigins`.`remark` like \"%ご負担%\",'課対仕返10%','課対仕入10%')  )";
$proto56["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "zeikubun";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "address1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto58["m_sql"] = "`Eoc`.`address1`";
$proto58["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "address2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto60["m_sql"] = "`Eoc`.`address2`";
$proto60["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "address3",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto62["m_sql"] = "`Eoc`.`address3`";
$proto62["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "Eoc_chigins";
$proto65["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "chigin_id";
$proto65["m_columns"][] = "create_by";
$proto65["m_columns"][] = "create_at";
$proto65["m_columns"][] = "chigin_ecc_id";
$proto65["m_columns"][] = "ching_price";
$proto65["m_columns"][] = "ching_created_at";
$proto65["m_columns"][] = "remark";
$proto65["m_columns"][] = "chigin_type";
$proto65["m_columns"][] = "seq";
$proto65["m_columns"][] = "haraidasi";
$proto65["m_columns"][] = "excel_output";
$proto65["m_columns"][] = "ching_price_goal";
$proto65["m_columns"][] = "kaitori_sougak";
$proto65["m_columns"][] = "updated_at";
$proto65["m_columns"][] = "updated_by";
$proto65["m_columns"][] = "account_item";
$proto65["m_columns"][] = "satei_by";
$proto65["m_columns"][] = "Eoc_unfinished_id";
$proto65["m_columns"][] = "category";
$proto65["m_columns"][] = "Eoc_takuhai_id";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "`Eoc_chigins`";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto66=array();
$proto66["m_sql"] = "";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
												$proto68=array();
$proto68["m_link"] = "SQLL_INNERJOIN";
			$proto69=array();
$proto69["m_strName"] = "Eoc";
$proto69["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "ecc_id";
$proto69["m_columns"][] = "ecc_seq";
$proto69["m_columns"][] = "name1";
$proto69["m_columns"][] = "created_t";
$proto69["m_columns"][] = "registerd_id";
$proto69["m_columns"][] = "kaitori_staff_id";
$proto69["m_columns"][] = "name2";
$proto69["m_columns"][] = "wareki";
$proto69["m_columns"][] = "b1";
$proto69["m_columns"][] = "b2";
$proto69["m_columns"][] = "b3";
$proto69["m_columns"][] = "birth_day";
$proto69["m_columns"][] = "age";
$proto69["m_columns"][] = "zip";
$proto69["m_columns"][] = "zip1";
$proto69["m_columns"][] = "zip2";
$proto69["m_columns"][] = "address1";
$proto69["m_columns"][] = "address2";
$proto69["m_columns"][] = "address3";
$proto69["m_columns"][] = "tel";
$proto69["m_columns"][] = "tel2";
$proto69["m_columns"][] = "mail1";
$proto69["m_columns"][] = "mail2";
$proto69["m_columns"][] = "address_code";
$proto69["m_columns"][] = "bank_name";
$proto69["m_columns"][] = "bank_blunch_code";
$proto69["m_columns"][] = "bank_yokin_shubetu";
$proto69["m_columns"][] = "bank_account";
$proto69["m_columns"][] = "bank_acoount_name";
$proto69["m_columns"][] = "haisou_bangou";
$proto69["m_columns"][] = "sise_houhou";
$proto69["m_columns"][] = "hentou_houhou";
$proto69["m_columns"][] = "hentou_houhou_time";
$proto69["m_columns"][] = "mousikomi_id";
$proto69["m_columns"][] = "hituyou_shorui";
$proto69["m_columns"][] = "seiyaku_fuseiritu";
$proto69["m_columns"][] = "mitumori_taku";
$proto69["m_columns"][] = "seacanse";
$proto69["m_columns"][] = "remark";
$proto69["m_columns"][] = "type";
$proto69["m_columns"][] = "sales_flag";
$proto69["m_columns"][] = "src_type";
$proto69["m_columns"][] = "liquidation_shop_code";
$proto69["m_columns"][] = "insurance_amount_print";
$proto69["m_columns"][] = "jis_code";
$proto69["m_columns"][] = "updated_at";
$proto69["m_columns"][] = "_registerd_id";
$proto69["m_columns"][] = "mail_check_type";
$proto69["m_columns"][] = "purchase_type";
$proto69["m_columns"][] = "sex";
$proto69["m_columns"][] = "m_tel";
$proto69["m_columns"][] = "fax";
$proto69["m_columns"][] = "chigin_kaitori";
$proto69["m_columns"][] = "option1";
$proto69["m_columns"][] = "option2";
$proto69["m_columns"][] = "option3";
$proto69["m_columns"][] = "option4";
$proto69["m_columns"][] = "option5";
$proto69["m_columns"][] = "option6";
$proto69["m_columns"][] = "option7";
$proto69["m_columns"][] = "option8";
$proto69["m_columns"][] = "option9";
$proto69["m_columns"][] = "option10";
$proto69["m_columns"][] = "option11";
$proto69["m_columns"][] = "option12";
$proto69["m_columns"][] = "option13";
$proto69["m_columns"][] = "rakuda_csv_flag";
$proto69["m_columns"][] = "EOC_COURIER_CHECK";
$proto69["m_columns"][] = "EOC_SIZE";
$proto69["m_columns"][] = "EOC_NUMBER";
$proto69["m_columns"][] = "EOC_REUSE";
$proto69["m_columns"][] = "EOC__DELIVERY_DATES";
$proto69["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto69["m_columns"][] = "FIRST_NAME2";
$proto69["m_columns"][] = "LAST_NAME2";
$proto69["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto69["m_columns"][] = "EOC__BOX_NUMBER";
$proto69["m_columns"][] = "FIRST_NAME_KANA";
$proto69["m_columns"][] = "LAST_NAME_KANA";
$proto69["m_columns"][] = "FLAG_SPEED";
$proto69["m_columns"][] = "SEARCH_MEDIA";
$proto69["m_columns"][] = "SEARCH_SITE";
$proto69["m_columns"][] = "UN_REACHABLE";
$proto69["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto69["m_columns"][] = "FLG_MAIL_OTHER";
$proto69["m_columns"][] = "ALLSEIYAKU";
$proto69["m_columns"][] = "ICHIBUSEIYAKU";
$proto69["m_columns"][] = "seiyakukin";
$proto69["m_columns"][] = "kaitorihuka";
$proto69["m_columns"][] = "awazu_date";
$proto69["m_columns"][] = "seiyaku_price";
$proto69["m_columns"][] = "eoc_search_keyword";
$proto69["m_columns"][] = "sonota";
$proto69["m_columns"][] = "size_kosuu";
$proto69["m_columns"][] = "sagawa_shuuka_flag";
$proto69["m_columns"][] = "line_check";
$proto69["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto69["m_columns"][] = "kaitori_sougak";
$proto69["m_columns"][] = "flag";
$proto69["m_columns"][] = "key_code";
$proto69["m_columns"][] = "dm_check_type";
$proto69["m_columns"][] = "kit_flag";
$proto69["m_columns"][] = "kit_done_flag";
$proto69["m_columns"][] = "bank_details_code";
$proto69["m_columns"][] = "bank_details_blunch_name";
$proto69["m_columns"][] = "bank_details_blunch_code";
$proto69["m_columns"][] = "bank_details_account_number";
$proto69["m_columns"][] = "bank_details_symbol";
$proto69["m_columns"][] = "bank_details_number";
$proto69["m_columns"][] = "bank_details_account_name";
$proto69["m_columns"][] = "bank_details_deposit_type";
$proto69["m_columns"][] = "mypage_id";
$proto69["m_columns"][] = "UN_REACHABLE_brand";
$proto69["m_columns"][] = "sagawa_haisou_hoken";
$proto69["m_columns"][] = "transfer_confirm";
$proto69["m_columns"][] = "outside_bank";
$proto69["m_columns"][] = "new_name";
$proto69["m_columns"][] = "letterpack";
$proto69["m_columns"][] = "satei_saisoku_2_days";
$proto69["m_columns"][] = "satei_saisoku_7_days";
$proto69["m_columns"][] = "accept_flag";
$proto69["m_columns"][] = "delivery_flag";
$proto69["m_columns"][] = "refining_weight";
$proto69["m_columns"][] = "line_chat_url";
$proto69["m_columns"][] = "royal_customer_status";
$proto69["m_columns"][] = "is_business_customer";
$proto69["m_columns"][] = "is_exist_haisouhosyo";
$proto69["m_columns"][] = "meigi_hankaku_kana";
$proto69["m_columns"][] = "building_types";
$proto69["m_columns"][] = "dwelling_types";
$proto69["m_columns"][] = "is_yamato_csv";
$proto69["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "INNER JOIN `Eoc` ON `Eoc_chigins`.`chigin_ecc_id` = `Eoc`.`ecc_id`";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto70=array();
$proto70["m_sql"] = "`Eoc_chigins`.`chigin_ecc_id` = `Eoc`.`ecc_id`";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "chigin_ecc_id",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "= `Eoc`.`ecc_id`";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
												$proto72=array();
$proto72["m_link"] = "SQLL_LEFTJOIN";
			$proto73=array();
$proto73["m_strName"] = "_chigin_type";
$proto73["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "id";
$proto73["m_columns"][] = "name";
$proto73["m_columns"][] = "account_item";
$proto73["m_columns"][] = "update_by";
$proto73["m_columns"][] = "update_at";
$proto73["m_columns"][] = "create_by";
$proto73["m_columns"][] = "create_at";
$proto73["m_columns"][] = "sort";
$proto73["m_columns"][] = "group";
$proto73["m_columns"][] = "initial";
$proto73["m_columns"][] = "seiyaku_status";
$proto73["m_columns"][] = "satei_status";
$proto73["m_columns"][] = "freee_account_item_id";
$proto73["m_columns"][] = "freee_item_id";
$proto73["m_columns"][] = "freee_section_id";
$proto73["m_columns"][] = "freee_account_item_id_from_B";
$proto73["m_columns"][] = "freee_item_id_from_B";
$proto73["m_columns"][] = "freee_section_id_from_B";
$proto73["m_columns"][] = "use_many_satei";
$proto73["m_columns"][] = "haraidasi_id";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "LEFT OUTER JOIN `_chigin_type` ON `Eoc_chigins`.`chigin_type` = `_chigin_type`.`id`";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto74=array();
$proto74["m_sql"] = "`Eoc_chigins`.`chigin_type` = `_chigin_type`.`id`";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "chigin_type",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= `_chigin_type`.`id`";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
												$proto76=array();
$proto76["m_link"] = "SQLL_LEFTJOIN";
			$proto77=array();
$proto77["m_strName"] = "_purchase_type";
$proto77["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "purchase_id";
$proto77["m_columns"][] = "purchase_name";
$proto77["m_columns"][] = "purchaze_type";
$proto77["m_columns"][] = "sorter";
$proto77["m_columns"][] = "account_item";
$proto77["m_columns"][] = "supplementary_subject";
$proto77["m_columns"][] = "group";
$proto77["m_columns"][] = "update_by";
$proto77["m_columns"][] = "update_at";
$proto77["m_columns"][] = "create_by";
$proto77["m_columns"][] = "create_at";
$proto77["m_columns"][] = "category";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "LEFT OUTER JOIN `_purchase_type` ON `Eoc`.`purchase_type` = `_purchase_type`.`purchase_id`";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "Eoc_chigins_for_freee_import";
$proto78=array();
$proto78["m_sql"] = "`Eoc`.`purchase_type` = `_purchase_type`.`purchase_id`";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "purchase_type",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "= `_purchase_type`.`purchase_id`";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto80=array();
						$obj = new SQLField(array(
	"m_strName" => "chigin_id",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc_chigins_for_freee_import"
));

$proto80["m_column"]=$obj;
$proto80["m_bAsc"] = 0;
$proto80["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto80);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_chigins_for_freee_import";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_chigins_for_freee_import = createSqlQuery_Eoc_chigins_for_freee_import();


	
		;

																													

$tdataEoc_chigins_for_freee_import[".sqlquery"] = $queryData_Eoc_chigins_for_freee_import;

include_once(getabspath("include/Eoc_chigins_for_freee_import_events.php"));
$tableEvents["Eoc_chigins_for_freee_import"] = new eventclass_Eoc_chigins_for_freee_import;
$tdataEoc_chigins_for_freee_import[".hasEvents"] = true;

?>