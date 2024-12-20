<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_Eoc_chigins_for_freee_import = array();
	$tdatavw_Eoc_chigins_for_freee_import[".truncateText"] = true;
	$tdatavw_Eoc_chigins_for_freee_import[".NumberOfChars"] = 80;
	$tdatavw_Eoc_chigins_for_freee_import[".ShortName"] = "vw_Eoc_chigins_for_freee_import";
	$tdatavw_Eoc_chigins_for_freee_import[".OwnerID"] = "";
	$tdatavw_Eoc_chigins_for_freee_import[".OriginalTable"] = "vw_Eoc_chigins_for_freee_import";

//	field labels
$fieldLabelsvw_Eoc_chigins_for_freee_import = array();
$fieldToolTipsvw_Eoc_chigins_for_freee_import = array();
$pageTitlesvw_Eoc_chigins_for_freee_import = array();
$placeHoldersvw_Eoc_chigins_for_freee_import = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"] = array();
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"] = array();
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"] = array();
	$pageTitlesvw_Eoc_chigins_for_freee_import["Japanese"] = array();
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["issue_date"] = "発生日";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["issue_date"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["issue_date"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["control_number"] = "管理番号";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["control_number"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["control_number"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["freee_account_item_name"] = "勘定科目";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["freee_account_item_name"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["freee_account_item_name"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["amount"] = "金額";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["amount"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["amount"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["remark"] = "備考";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["remark"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["remark"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["freee_section_name"] = "部門";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["freee_section_name"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["freee_section_name"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["freee_item_name"] = "品目";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["freee_item_name"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["freee_item_name"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["memo_tag"] = "メモタグ（複数指定可、カンマ区切り）";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["memo_tag"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["memo_tag"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["torihikisaki"] = "取引先";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["torihikisaki"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["torihikisaki"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["zeikubun"] = "税区分";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["zeikubun"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["zeikubun"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["purchase_type"] = "（顧客）買取種別";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["purchase_type"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["purchase_type"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["chigin_ecc_id"] = "顧客SEQ";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["chigin_ecc_id"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["chigin_ecc_id"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["Eoc_unfinished_id"] = "店頭取引ID";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["Eoc_unfinished_id"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["Eoc_unfinished_id"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["Eoc_takuhai_id"] = "宅配取引ID";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["Eoc_takuhai_id"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["Eoc_takuhai_id"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["satei_by"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["satei_by"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["haraidasi"] = "払出し";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["haraidasi"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["haraidasi"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["bank_details_code"] = "振込先銀行";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["bank_details_code"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["bank_details_code"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["_registerd_id"] = "顧客登録者";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["_registerd_id"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["_registerd_id"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["create_by"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["create_by"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["updated_by"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["updated_by"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["updated_at"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["updated_at"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["new_name"] = "旧姓/新姓/その他";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["new_name"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["new_name"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["name1"] = "氏名";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["name1"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["name1"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["name2"] = "フリガナ";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["name2"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["name2"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["ecc_seq"] = "顧客ID";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["ecc_seq"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["ecc_seq"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["chigin_id"] = "商品買取ID";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["chigin_id"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["chigin_id"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["Japanese"]["check_box_area"] = "チェック";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]["check_box_area"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["Japanese"]["check_box_area"] = "";
	if (count($fieldToolTipsvw_Eoc_chigins_for_freee_import["Japanese"]))
		$tdatavw_Eoc_chigins_for_freee_import[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""] = array();
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""] = array();
	$placeHoldersvw_Eoc_chigins_for_freee_import[""] = array();
	$pageTitlesvw_Eoc_chigins_for_freee_import[""] = array();
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["issue_date"] = "Issue Date";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["issue_date"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["issue_date"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["control_number"] = "Control Number";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["control_number"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["control_number"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["freee_account_item_name"] = "Freee Account Item Name";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["freee_account_item_name"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["freee_account_item_name"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["amount"] = "Amount";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["amount"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["amount"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["remark"] = "Remark";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["remark"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["remark"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["freee_section_name"] = "Freee Section Name";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["freee_section_name"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["freee_section_name"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["freee_item_name"] = "Freee Item Name";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["freee_item_name"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["freee_item_name"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["memo_tag"] = "Memo Tag";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["memo_tag"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["memo_tag"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["torihikisaki"] = "Torihikisaki";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["torihikisaki"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["torihikisaki"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["zeikubun"] = "Zeikubun";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["zeikubun"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["zeikubun"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["purchase_type"] = "Purchase Type";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["purchase_type"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["purchase_type"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["chigin_ecc_id"] = "Chigin Ecc Id";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["chigin_ecc_id"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["chigin_ecc_id"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["Eoc_unfinished_id"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["Eoc_unfinished_id"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["Eoc_takuhai_id"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["Eoc_takuhai_id"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["satei_by"] = "Satei By";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["satei_by"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["satei_by"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["haraidasi"] = "Haraidasi";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["haraidasi"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["haraidasi"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["bank_details_code"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["bank_details_code"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["_registerd_id"] = "Registerd Id";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["_registerd_id"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["_registerd_id"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["create_by"] = "Create By";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["create_by"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["create_by"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["updated_by"] = "Updated By";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["updated_by"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["updated_by"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["updated_at"] = "Updated At";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["updated_at"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["updated_at"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["new_name"] = "New Name";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["new_name"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["new_name"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["name1"] = "Name1";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["name1"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["name1"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["name2"] = "Name2";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["name2"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["name2"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["ecc_seq"] = "Ecc Seq";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["ecc_seq"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["ecc_seq"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["chigin_id"] = "Chigin Id";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["chigin_id"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["chigin_id"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import[""]["check_box_area"] = "Check Box Area";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import[""]["check_box_area"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import[""]["check_box_area"] = "";
	if (count($fieldToolTipsvw_Eoc_chigins_for_freee_import[""]))
		$tdatavw_Eoc_chigins_for_freee_import[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"] = array();
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"] = array();
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"] = array();
	$pageTitlesvw_Eoc_chigins_for_freee_import["English"] = array();
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["issue_date"] = "Issue Date";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["issue_date"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["issue_date"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["control_number"] = "Control Number";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["control_number"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["control_number"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["freee_account_item_name"] = "Freee Account Item Name";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["freee_account_item_name"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["freee_account_item_name"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["amount"] = "Amount";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["amount"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["amount"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["remark"] = "Remark";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["remark"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["remark"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["freee_section_name"] = "Freee Section Name";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["freee_section_name"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["freee_section_name"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["freee_item_name"] = "Freee Item Name";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["freee_item_name"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["freee_item_name"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["memo_tag"] = "Memo Tag";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["memo_tag"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["memo_tag"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["torihikisaki"] = "Torihikisaki";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["torihikisaki"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["torihikisaki"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["zeikubun"] = "Zeikubun";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["zeikubun"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["zeikubun"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["purchase_type"] = "Purchase Type";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["purchase_type"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["purchase_type"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["chigin_ecc_id"] = "Chigin Ecc Id";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["chigin_ecc_id"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["chigin_ecc_id"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["Eoc_unfinished_id"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["Eoc_unfinished_id"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["Eoc_takuhai_id"] = "Eoc Takuhai Id";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["Eoc_takuhai_id"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["Eoc_takuhai_id"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["satei_by"] = "Satei By";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["satei_by"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["satei_by"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["haraidasi"] = "Haraidasi";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["haraidasi"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["haraidasi"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["bank_details_code"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["bank_details_code"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["_registerd_id"] = "Registerd Id";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["_registerd_id"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["_registerd_id"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["create_by"] = "Create By";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["create_by"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["create_by"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["updated_by"] = "Updated By";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["updated_by"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["updated_by"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["updated_at"] = "Updated At";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["updated_at"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["updated_at"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["new_name"] = "New Name";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["new_name"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["new_name"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["name1"] = "Name1";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["name1"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["name1"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["name2"] = "Name2";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["name2"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["name2"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["ecc_seq"] = "Ecc Seq";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["ecc_seq"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["ecc_seq"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["chigin_id"] = "Chigin Id";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["chigin_id"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["chigin_id"] = "";
	$fieldLabelsvw_Eoc_chigins_for_freee_import["English"]["check_box_area"] = "Check Box Area";
	$fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]["check_box_area"] = "";
	$placeHoldersvw_Eoc_chigins_for_freee_import["English"]["check_box_area"] = "";
	if (count($fieldToolTipsvw_Eoc_chigins_for_freee_import["English"]))
		$tdatavw_Eoc_chigins_for_freee_import[".isUseToolTips"] = true;
}


	$tdatavw_Eoc_chigins_for_freee_import[".NCSearch"] = true;



$tdatavw_Eoc_chigins_for_freee_import[".shortTableName"] = "vw_Eoc_chigins_for_freee_import";
$tdatavw_Eoc_chigins_for_freee_import[".nSecOptions"] = 0;
$tdatavw_Eoc_chigins_for_freee_import[".recsPerRowPrint"] = 1;
$tdatavw_Eoc_chigins_for_freee_import[".mainTableOwnerID"] = "";
$tdatavw_Eoc_chigins_for_freee_import[".moveNext"] = 1;
$tdatavw_Eoc_chigins_for_freee_import[".entityType"] = 0;

$tdatavw_Eoc_chigins_for_freee_import[".strOriginalTableName"] = "vw_Eoc_chigins_for_freee_import";

	



$tdatavw_Eoc_chigins_for_freee_import[".showAddInPopup"] = false;

$tdatavw_Eoc_chigins_for_freee_import[".showEditInPopup"] = false;

$tdatavw_Eoc_chigins_for_freee_import[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_Eoc_chigins_for_freee_import[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_Eoc_chigins_for_freee_import[".fieldsForRegister"] = array();

$tdatavw_Eoc_chigins_for_freee_import[".listAjax"] = false;

	$tdatavw_Eoc_chigins_for_freee_import[".audit"] = false;

	$tdatavw_Eoc_chigins_for_freee_import[".locking"] = false;



$tdatavw_Eoc_chigins_for_freee_import[".list"] = true;



$tdatavw_Eoc_chigins_for_freee_import[".reorderRecordsByHeader"] = true;





$tdatavw_Eoc_chigins_for_freee_import[".exportTo"] = true;



$tdatavw_Eoc_chigins_for_freee_import[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_Eoc_chigins_for_freee_import[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_Eoc_chigins_for_freee_import[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_Eoc_chigins_for_freee_import[".searchSaving"] = false;
//

$tdatavw_Eoc_chigins_for_freee_import[".showSearchPanel"] = true;
		$tdatavw_Eoc_chigins_for_freee_import[".flexibleSearch"] = true;

$tdatavw_Eoc_chigins_for_freee_import[".isUseAjaxSuggest"] = true;

$tdatavw_Eoc_chigins_for_freee_import[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatavw_Eoc_chigins_for_freee_import[".ajaxCodeSnippetAdded"] = false;

$tdatavw_Eoc_chigins_for_freee_import[".buttonsAdded"] = false;

$tdatavw_Eoc_chigins_for_freee_import[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_Eoc_chigins_for_freee_import[".isUseTimeForSearch"] = false;





$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"] = array();
$tdatavw_Eoc_chigins_for_freee_import[".filterFields"] = array();
$tdatavw_Eoc_chigins_for_freee_import[".requiredSearchFields"] = array();

$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "issue_date";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "name1";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "name2";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "ecc_seq";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "chigin_id";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "check_box_area";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "Eoc_unfinished_id";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "Eoc_takuhai_id";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "satei_by";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "haraidasi";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "bank_details_code";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "_registerd_id";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "create_by";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "updated_by";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "updated_at";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "new_name";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "control_number";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "freee_account_item_name";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "amount";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "remark";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "freee_section_name";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "freee_item_name";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "memo_tag";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "torihikisaki";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "zeikubun";
	$tdatavw_Eoc_chigins_for_freee_import[".allSearchFields"][] = "purchase_type";
	

$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"] = array();
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "name1";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "name2";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "ecc_seq";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "chigin_id";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "check_box_area";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "Eoc_unfinished_id";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "Eoc_takuhai_id";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "satei_by";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "haraidasi";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "bank_details_code";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "_registerd_id";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "create_by";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "updated_by";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "updated_at";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "new_name";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "issue_date";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "control_number";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "freee_account_item_name";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "amount";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "remark";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "freee_section_name";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "freee_item_name";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "memo_tag";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "torihikisaki";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "zeikubun";
$tdatavw_Eoc_chigins_for_freee_import[".googleLikeFields"][] = "purchase_type";

$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"] = array();
$tdatavw_Eoc_chigins_for_freee_import[".searchPanelOptions"] = array();
$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "issue_date";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "name1";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "name2";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "ecc_seq";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "chigin_id";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "check_box_area";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "Eoc_unfinished_id";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "Eoc_takuhai_id";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "satei_by";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "haraidasi";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "bank_details_code";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "_registerd_id";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "create_by";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "updated_by";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "updated_at";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "new_name";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "control_number";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "freee_account_item_name";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "amount";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "remark";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "freee_section_name";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "freee_item_name";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "memo_tag";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "torihikisaki";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "zeikubun";
	$tdatavw_Eoc_chigins_for_freee_import[".panelSearchFields"][] = "purchase_type";
	
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"] = array();
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "issue_date";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "name1";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "name2";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "ecc_seq";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "chigin_id";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "check_box_area";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "Eoc_unfinished_id";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "Eoc_takuhai_id";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "satei_by";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "haraidasi";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "bank_details_code";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "_registerd_id";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "create_by";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "updated_by";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "updated_at";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "new_name";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "control_number";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "freee_account_item_name";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "amount";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "remark";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "freee_section_name";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "freee_item_name";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "memo_tag";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "torihikisaki";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "zeikubun";
$tdatavw_Eoc_chigins_for_freee_import[".advSearchFields"][] = "purchase_type";

$tdatavw_Eoc_chigins_for_freee_import[".tableType"] = "list";

$tdatavw_Eoc_chigins_for_freee_import[".printerPageOrientation"] = 0;
$tdatavw_Eoc_chigins_for_freee_import[".nPrinterPageScale"] = 100;

$tdatavw_Eoc_chigins_for_freee_import[".nPrinterSplitRecords"] = 40;

$tdatavw_Eoc_chigins_for_freee_import[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_Eoc_chigins_for_freee_import[".geocodingEnabled"] = false;





$tdatavw_Eoc_chigins_for_freee_import[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavw_Eoc_chigins_for_freee_import[".pageSize"] = 20;

$tdatavw_Eoc_chigins_for_freee_import[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_Eoc_chigins_for_freee_import[".strOrderBy"] = $tstrOrderBy;

$tdatavw_Eoc_chigins_for_freee_import[".orderindexes"] = array();

$tdatavw_Eoc_chigins_for_freee_import[".sqlHead"] = "SELECT `name1`,  	`name2`,  	`ecc_seq`,  	`chigin_id`,  	`check_box_area`,  	`chigin_ecc_id`,  	`Eoc_unfinished_id`,  	`Eoc_takuhai_id`,  	`satei_by`,  	`haraidasi`,  	`bank_details_code`,  	`_registerd_id`,  	`create_by`,  	`updated_by`,  	`updated_at`,  	`new_name`,  	`issue_date`,  	`control_number`,  	`freee_account_item_name`,  	`amount`,  	`remark`,  	`freee_section_name`,  	`freee_item_name`,  	`memo_tag`,  	`torihikisaki`,  	`zeikubun`,  	`purchase_type`";
$tdatavw_Eoc_chigins_for_freee_import[".sqlFrom"] = "FROM `vw_Eoc_chigins_for_freee_import`";
$tdatavw_Eoc_chigins_for_freee_import[".sqlWhereExpr"] = "";
$tdatavw_Eoc_chigins_for_freee_import[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_Eoc_chigins_for_freee_import[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_Eoc_chigins_for_freee_import[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_Eoc_chigins_for_freee_import[".highlightSearchResults"] = true;

$tableKeysvw_Eoc_chigins_for_freee_import = array();
$tdatavw_Eoc_chigins_for_freee_import[".Keys"] = $tableKeysvw_Eoc_chigins_for_freee_import;

$tdatavw_Eoc_chigins_for_freee_import[".listFields"] = array();
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "issue_date";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "control_number";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "freee_account_item_name";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "amount";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "remark";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "freee_section_name";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "freee_item_name";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "memo_tag";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "torihikisaki";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "zeikubun";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "purchase_type";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "Eoc_unfinished_id";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "Eoc_takuhai_id";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "name2";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "new_name";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "check_box_area";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "name1";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "satei_by";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "ecc_seq";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "chigin_id";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "_registerd_id";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "updated_by";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "create_by";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "haraidasi";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "bank_details_code";
$tdatavw_Eoc_chigins_for_freee_import[".listFields"][] = "updated_at";

$tdatavw_Eoc_chigins_for_freee_import[".hideMobileList"] = array();


$tdatavw_Eoc_chigins_for_freee_import[".viewFields"] = array();

$tdatavw_Eoc_chigins_for_freee_import[".addFields"] = array();

$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"] = array();
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "name1";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "name2";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "ecc_seq";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "chigin_id";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "check_box_area";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "chigin_ecc_id";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "Eoc_unfinished_id";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "Eoc_takuhai_id";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "satei_by";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "haraidasi";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "bank_details_code";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "_registerd_id";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "create_by";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "updated_by";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "updated_at";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "new_name";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "issue_date";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "control_number";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "freee_account_item_name";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "amount";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "remark";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "freee_section_name";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "freee_item_name";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "memo_tag";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "torihikisaki";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "zeikubun";
$tdatavw_Eoc_chigins_for_freee_import[".masterListFields"][] = "purchase_type";

$tdatavw_Eoc_chigins_for_freee_import[".inlineAddFields"] = array();

$tdatavw_Eoc_chigins_for_freee_import[".editFields"] = array();

$tdatavw_Eoc_chigins_for_freee_import[".inlineEditFields"] = array();

$tdatavw_Eoc_chigins_for_freee_import[".updateSelectedFields"] = array();


$tdatavw_Eoc_chigins_for_freee_import[".exportFields"] = array();
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "issue_date";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "control_number";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "freee_account_item_name";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "amount";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "remark";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "freee_section_name";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "freee_item_name";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "memo_tag";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "torihikisaki";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "zeikubun";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "Eoc_unfinished_id";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "Eoc_takuhai_id";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "name2";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "new_name";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "check_box_area";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "name1";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "satei_by";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "ecc_seq";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "chigin_id";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "_registerd_id";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "updated_by";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "create_by";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "haraidasi";
$tdatavw_Eoc_chigins_for_freee_import[".exportFields"][] = "bank_details_code";

$tdatavw_Eoc_chigins_for_freee_import[".importFields"] = array();

$tdatavw_Eoc_chigins_for_freee_import[".printFields"] = array();

//	name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "name1";
	$fdata["GoodName"] = "name1";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","name1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`name1`";

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["name1"] = $fdata;
//	name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name2";
	$fdata["GoodName"] = "name2";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","name2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`name2`";

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["name2"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","ecc_seq");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_seq";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ecc_seq`";

	
	
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
			$edata["EditParams"].= " maxlength=32";

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




	$tdatavw_Eoc_chigins_for_freee_import["ecc_seq"] = $fdata;
//	chigin_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "chigin_id";
	$fdata["GoodName"] = "chigin_id";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","chigin_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "chigin_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`chigin_id`";

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["chigin_id"] = $fdata;
//	check_box_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "check_box_area";
	$fdata["GoodName"] = "check_box_area";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","check_box_area");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "check_box_area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`check_box_area`";

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["check_box_area"] = $fdata;
//	chigin_ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "chigin_ecc_id";
	$fdata["GoodName"] = "chigin_ecc_id";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","chigin_ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "chigin_ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`chigin_ecc_id`";

	
	
			
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








	$tdatavw_Eoc_chigins_for_freee_import["chigin_ecc_id"] = $fdata;
//	Eoc_unfinished_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Eoc_unfinished_id";
	$fdata["GoodName"] = "Eoc_unfinished_id";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","Eoc_unfinished_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_unfinished_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_unfinished_id`";

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["Eoc_unfinished_id"] = $fdata;
//	Eoc_takuhai_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Eoc_takuhai_id";
	$fdata["GoodName"] = "Eoc_takuhai_id";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","Eoc_takuhai_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Eoc_takuhai_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai_id`";

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["Eoc_takuhai_id"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","satei_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`satei_by`";

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["satei_by"] = $fdata;
//	haraidasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "haraidasi";
	$fdata["GoodName"] = "haraidasi";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","haraidasi");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "haraidasi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`haraidasi`";

	
	
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "haraidasi_name";

	
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




	$tdatavw_Eoc_chigins_for_freee_import["haraidasi"] = $fdata;
//	bank_details_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "bank_details_code";
	$fdata["GoodName"] = "bank_details_code";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","bank_details_code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bank_details_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`bank_details_code`";

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["bank_details_code"] = $fdata;
//	_registerd_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "_registerd_id";
	$fdata["GoodName"] = "_registerd_id";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","_registerd_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "_registerd_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`_registerd_id`";

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["_registerd_id"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_by`";

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["create_by"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","updated_by");
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




	$tdatavw_Eoc_chigins_for_freee_import["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["updated_at"] = $fdata;
//	new_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "new_name";
	$fdata["GoodName"] = "new_name";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","new_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "new_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`new_name`";

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["new_name"] = $fdata;
//	issue_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "issue_date";
	$fdata["GoodName"] = "issue_date";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","issue_date");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "issue_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`issue_date`";

	
	
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
		$fdata["defaultSearchOption"] = "Between";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatavw_Eoc_chigins_for_freee_import["issue_date"] = $fdata;
//	control_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "control_number";
	$fdata["GoodName"] = "control_number";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","control_number");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "control_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`control_number`";

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["control_number"] = $fdata;
//	freee_account_item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "freee_account_item_name";
	$fdata["GoodName"] = "freee_account_item_name";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","freee_account_item_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_account_item_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_account_item_name`";

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["freee_account_item_name"] = $fdata;
//	amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "amount";
	$fdata["GoodName"] = "amount";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","amount");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`amount`";

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["amount"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","remark");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "remark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`remark`";

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["remark"] = $fdata;
//	freee_section_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "freee_section_name";
	$fdata["GoodName"] = "freee_section_name";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","freee_section_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_section_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_section_name`";

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["freee_section_name"] = $fdata;
//	freee_item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "freee_item_name";
	$fdata["GoodName"] = "freee_item_name";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","freee_item_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "freee_item_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`freee_item_name`";

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["freee_item_name"] = $fdata;
//	memo_tag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "memo_tag";
	$fdata["GoodName"] = "memo_tag";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","memo_tag");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "memo_tag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`memo_tag`";

	
	
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
			$edata["EditParams"].= " maxlength=18";

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




	$tdatavw_Eoc_chigins_for_freee_import["memo_tag"] = $fdata;
//	torihikisaki
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "torihikisaki";
	$fdata["GoodName"] = "torihikisaki";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","torihikisaki");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "torihikisaki";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`torihikisaki`";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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




	$tdatavw_Eoc_chigins_for_freee_import["torihikisaki"] = $fdata;
//	zeikubun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "zeikubun";
	$fdata["GoodName"] = "zeikubun";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","zeikubun");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zeikubun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`zeikubun`";

	
	
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
			$edata["EditParams"].= " maxlength=7";

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




	$tdatavw_Eoc_chigins_for_freee_import["zeikubun"] = $fdata;
//	purchase_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "purchase_type";
	$fdata["GoodName"] = "purchase_type";
	$fdata["ownerTable"] = "vw_Eoc_chigins_for_freee_import";
	$fdata["Label"] = GetFieldLabel("vw_Eoc_chigins_for_freee_import","purchase_type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "purchase_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`purchase_type`";

	
	
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
	$edata["LookupTable"] = "_purchase_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "purchase_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "purchase_name";

	
	$edata["LookupOrderBy"] = "sorter";

	
	
	
	

	
	
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




	$tdatavw_Eoc_chigins_for_freee_import["purchase_type"] = $fdata;


$tables_data["vw_Eoc_chigins_for_freee_import"]=&$tdatavw_Eoc_chigins_for_freee_import;
$field_labels["vw_Eoc_chigins_for_freee_import"] = &$fieldLabelsvw_Eoc_chigins_for_freee_import;
$fieldToolTips["vw_Eoc_chigins_for_freee_import"] = &$fieldToolTipsvw_Eoc_chigins_for_freee_import;
$placeHolders["vw_Eoc_chigins_for_freee_import"] = &$placeHoldersvw_Eoc_chigins_for_freee_import;
$page_titles["vw_Eoc_chigins_for_freee_import"] = &$pageTitlesvw_Eoc_chigins_for_freee_import;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_Eoc_chigins_for_freee_import"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_Eoc_chigins_for_freee_import"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_Eoc_chigins_for_freee_import()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`name1`,  	`name2`,  	`ecc_seq`,  	`chigin_id`,  	`check_box_area`,  	`chigin_ecc_id`,  	`Eoc_unfinished_id`,  	`Eoc_takuhai_id`,  	`satei_by`,  	`haraidasi`,  	`bank_details_code`,  	`_registerd_id`,  	`create_by`,  	`updated_by`,  	`updated_at`,  	`new_name`,  	`issue_date`,  	`control_number`,  	`freee_account_item_name`,  	`amount`,  	`remark`,  	`freee_section_name`,  	`freee_item_name`,  	`memo_tag`,  	`torihikisaki`,  	`zeikubun`,  	`purchase_type`";
$proto0["m_strFrom"] = "FROM `vw_Eoc_chigins_for_freee_import`";
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
	"m_strName" => "name1",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto6["m_sql"] = "`name1`";
$proto6["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto8["m_sql"] = "`name2`";
$proto8["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto10["m_sql"] = "`ecc_seq`";
$proto10["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "chigin_id",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto12["m_sql"] = "`chigin_id`";
$proto12["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "check_box_area",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto14["m_sql"] = "`check_box_area`";
$proto14["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "chigin_ecc_id",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto16["m_sql"] = "`chigin_ecc_id`";
$proto16["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_unfinished_id",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto18["m_sql"] = "`Eoc_unfinished_id`";
$proto18["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_takuhai_id",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto20["m_sql"] = "`Eoc_takuhai_id`";
$proto20["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto22["m_sql"] = "`satei_by`";
$proto22["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "haraidasi",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto24["m_sql"] = "`haraidasi`";
$proto24["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_code",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto26["m_sql"] = "`bank_details_code`";
$proto26["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "_registerd_id",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto28["m_sql"] = "`_registerd_id`";
$proto28["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto30["m_sql"] = "`create_by`";
$proto30["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto32["m_sql"] = "`updated_by`";
$proto32["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto34["m_sql"] = "`updated_at`";
$proto34["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "new_name",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto36["m_sql"] = "`new_name`";
$proto36["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "issue_date",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto38["m_sql"] = "`issue_date`";
$proto38["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "control_number",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto40["m_sql"] = "`control_number`";
$proto40["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_account_item_name",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto42["m_sql"] = "`freee_account_item_name`";
$proto42["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "amount",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto44["m_sql"] = "`amount`";
$proto44["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto46["m_sql"] = "`remark`";
$proto46["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_section_name",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto48["m_sql"] = "`freee_section_name`";
$proto48["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "freee_item_name",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto50["m_sql"] = "`freee_item_name`";
$proto50["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "memo_tag",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto52["m_sql"] = "`memo_tag`";
$proto52["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "torihikisaki",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto54["m_sql"] = "`torihikisaki`";
$proto54["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "zeikubun",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto56["m_sql"] = "`zeikubun`";
$proto56["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "purchase_type",
	"m_strTable" => "vw_Eoc_chigins_for_freee_import",
	"m_srcTableName" => "vw_Eoc_chigins_for_freee_import"
));

$proto58["m_sql"] = "`purchase_type`";
$proto58["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto60=array();
$proto60["m_link"] = "SQLL_MAIN";
			$proto61=array();
$proto61["m_strName"] = "vw_Eoc_chigins_for_freee_import";
$proto61["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "name1";
$proto61["m_columns"][] = "name2";
$proto61["m_columns"][] = "ecc_seq";
$proto61["m_columns"][] = "chigin_id";
$proto61["m_columns"][] = "check_box_area";
$proto61["m_columns"][] = "chigin_ecc_id";
$proto61["m_columns"][] = "Eoc_unfinished_id";
$proto61["m_columns"][] = "Eoc_takuhai_id";
$proto61["m_columns"][] = "satei_by";
$proto61["m_columns"][] = "haraidasi";
$proto61["m_columns"][] = "bank_details_code";
$proto61["m_columns"][] = "_registerd_id";
$proto61["m_columns"][] = "create_by";
$proto61["m_columns"][] = "updated_by";
$proto61["m_columns"][] = "updated_at";
$proto61["m_columns"][] = "new_name";
$proto61["m_columns"][] = "issue_date";
$proto61["m_columns"][] = "control_number";
$proto61["m_columns"][] = "freee_account_item_name";
$proto61["m_columns"][] = "amount";
$proto61["m_columns"][] = "remark";
$proto61["m_columns"][] = "freee_section_name";
$proto61["m_columns"][] = "freee_item_name";
$proto61["m_columns"][] = "memo_tag";
$proto61["m_columns"][] = "torihikisaki";
$proto61["m_columns"][] = "zeikubun";
$proto61["m_columns"][] = "purchase_type";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "`vw_Eoc_chigins_for_freee_import`";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "vw_Eoc_chigins_for_freee_import";
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
$proto0["m_srcTableName"]="vw_Eoc_chigins_for_freee_import";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_Eoc_chigins_for_freee_import = createSqlQuery_vw_Eoc_chigins_for_freee_import();


	
		;

																											

$tdatavw_Eoc_chigins_for_freee_import[".sqlquery"] = $queryData_vw_Eoc_chigins_for_freee_import;

include_once(getabspath("include/vw_Eoc_chigins_for_freee_import_events.php"));
$tableEvents["vw_Eoc_chigins_for_freee_import"] = new eventclass_vw_Eoc_chigins_for_freee_import;
$tdatavw_Eoc_chigins_for_freee_import[".hasEvents"] = true;

?>