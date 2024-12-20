<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_catch = array();
	$tdataEoc_catch[".truncateText"] = true;
	$tdataEoc_catch[".NumberOfChars"] = 80;
	$tdataEoc_catch[".ShortName"] = "Eoc_catch";
	$tdataEoc_catch[".OwnerID"] = "";
	$tdataEoc_catch[".OriginalTable"] = "Eoc";

//	field labels
$fieldLabelsEoc_catch = array();
$fieldToolTipsEoc_catch = array();
$pageTitlesEoc_catch = array();
$placeHoldersEoc_catch = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_catch["Japanese"] = array();
	$fieldToolTipsEoc_catch["Japanese"] = array();
	$placeHoldersEoc_catch["Japanese"] = array();
	$pageTitlesEoc_catch["Japanese"] = array();
	$fieldLabelsEoc_catch["Japanese"]["ecc_id"] = "顧客ＳＥＱ";
	$fieldToolTipsEoc_catch["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc_catch["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc_catch["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipsEoc_catch["Japanese"]["ecc_seq"] = "";
	$placeHoldersEoc_catch["Japanese"]["ecc_seq"] = "";
	$fieldLabelsEoc_catch["Japanese"]["name1"] = "名前";
	$fieldToolTipsEoc_catch["Japanese"]["name1"] = "";
	$placeHoldersEoc_catch["Japanese"]["name1"] = "";
	$fieldLabelsEoc_catch["Japanese"]["created_t"] = "顧客登録日";
	$fieldToolTipsEoc_catch["Japanese"]["created_t"] = "";
	$placeHoldersEoc_catch["Japanese"]["created_t"] = "";
	$fieldLabelsEoc_catch["Japanese"]["name2"] = "フリガナ";
	$fieldToolTipsEoc_catch["Japanese"]["name2"] = "";
	$placeHoldersEoc_catch["Japanese"]["name2"] = "";
	$fieldLabelsEoc_catch["Japanese"]["wareki"] = "Ｈ００００００の形で入力";
	$fieldToolTipsEoc_catch["Japanese"]["wareki"] = "";
	$placeHoldersEoc_catch["Japanese"]["wareki"] = "";
	$fieldLabelsEoc_catch["Japanese"]["b1"] = "生年月日";
	$fieldToolTipsEoc_catch["Japanese"]["b1"] = "";
	$placeHoldersEoc_catch["Japanese"]["b1"] = "";
	$fieldLabelsEoc_catch["Japanese"]["b2"] = "月";
	$fieldToolTipsEoc_catch["Japanese"]["b2"] = "";
	$placeHoldersEoc_catch["Japanese"]["b2"] = "";
	$fieldLabelsEoc_catch["Japanese"]["b3"] = "日";
	$fieldToolTipsEoc_catch["Japanese"]["b3"] = "";
	$placeHoldersEoc_catch["Japanese"]["b3"] = "";
	$fieldLabelsEoc_catch["Japanese"]["zip1"] = "郵便番号";
	$fieldToolTipsEoc_catch["Japanese"]["zip1"] = "";
	$placeHoldersEoc_catch["Japanese"]["zip1"] = "";
	$fieldLabelsEoc_catch["Japanese"]["zip2"] = "郵便番号２";
	$fieldToolTipsEoc_catch["Japanese"]["zip2"] = "";
	$placeHoldersEoc_catch["Japanese"]["zip2"] = "";
	$fieldLabelsEoc_catch["Japanese"]["address1"] = "都道府県";
	$fieldToolTipsEoc_catch["Japanese"]["address1"] = "";
	$placeHoldersEoc_catch["Japanese"]["address1"] = "";
	$fieldLabelsEoc_catch["Japanese"]["address2"] = "市町村区郡";
	$fieldToolTipsEoc_catch["Japanese"]["address2"] = "";
	$placeHoldersEoc_catch["Japanese"]["address2"] = "";
	$fieldLabelsEoc_catch["Japanese"]["address3"] = "以下住所";
	$fieldToolTipsEoc_catch["Japanese"]["address3"] = "";
	$placeHoldersEoc_catch["Japanese"]["address3"] = "";
	$fieldLabelsEoc_catch["Japanese"]["tel"] = "電話";
	$fieldToolTipsEoc_catch["Japanese"]["tel"] = "";
	$placeHoldersEoc_catch["Japanese"]["tel"] = "";
	$fieldLabelsEoc_catch["Japanese"]["tel2"] = "携帯";
	$fieldToolTipsEoc_catch["Japanese"]["tel2"] = "";
	$placeHoldersEoc_catch["Japanese"]["tel2"] = "";
	$fieldLabelsEoc_catch["Japanese"]["mail1"] = "メアド";
	$fieldToolTipsEoc_catch["Japanese"]["mail1"] = "";
	$placeHoldersEoc_catch["Japanese"]["mail1"] = "";
	$fieldLabelsEoc_catch["Japanese"]["mail2"] = "メアド２";
	$fieldToolTipsEoc_catch["Japanese"]["mail2"] = "";
	$placeHoldersEoc_catch["Japanese"]["mail2"] = "";
	$fieldLabelsEoc_catch["Japanese"]["hentou_houhou"] = "返答方法";
	$fieldToolTipsEoc_catch["Japanese"]["hentou_houhou"] = "";
	$placeHoldersEoc_catch["Japanese"]["hentou_houhou"] = "";
	$fieldLabelsEoc_catch["Japanese"]["remark"] = "備考";
	$fieldToolTipsEoc_catch["Japanese"]["remark"] = "";
	$placeHoldersEoc_catch["Japanese"]["remark"] = "";
	$fieldLabelsEoc_catch["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_catch["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_catch["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_catch["Japanese"]["purchase_type"] = "買取種別";
	$fieldToolTipsEoc_catch["Japanese"]["purchase_type"] = "";
	$placeHoldersEoc_catch["Japanese"]["purchase_type"] = "";
	$fieldLabelsEoc_catch["Japanese"]["fax"] = "Fax";
	$fieldToolTipsEoc_catch["Japanese"]["fax"] = "";
	$placeHoldersEoc_catch["Japanese"]["fax"] = "";
	$fieldLabelsEoc_catch["Japanese"]["option5"] = "性別";
	$fieldToolTipsEoc_catch["Japanese"]["option5"] = "";
	$placeHoldersEoc_catch["Japanese"]["option5"] = "";
	$fieldLabelsEoc_catch["Japanese"]["option11"] = "措置";
	$fieldToolTipsEoc_catch["Japanese"]["option11"] = "";
	$placeHoldersEoc_catch["Japanese"]["option11"] = "";
	$fieldLabelsEoc_catch["Japanese"]["option12"] = "職業";
	$fieldToolTipsEoc_catch["Japanese"]["option12"] = "";
	$placeHoldersEoc_catch["Japanese"]["option12"] = "";
	$fieldLabelsEoc_catch["Japanese"]["UN_REACHABLE"] = "kin到着";
	$fieldToolTipsEoc_catch["Japanese"]["UN_REACHABLE"] = "";
	$placeHoldersEoc_catch["Japanese"]["UN_REACHABLE"] = "";
	$fieldLabelsEoc_catch["Japanese"]["line_check"] = "ライン本確";
	$fieldToolTipsEoc_catch["Japanese"]["line_check"] = "";
	$placeHoldersEoc_catch["Japanese"]["line_check"] = "";
	$fieldLabelsEoc_catch["Japanese"]["bank_details_blunch_name"] = "支店名";
	$fieldToolTipsEoc_catch["Japanese"]["bank_details_blunch_name"] = "";
	$placeHoldersEoc_catch["Japanese"]["bank_details_blunch_name"] = "";
	$fieldLabelsEoc_catch["Japanese"]["bank_details_blunch_code"] = "支店コード";
	$fieldToolTipsEoc_catch["Japanese"]["bank_details_blunch_code"] = "";
	$placeHoldersEoc_catch["Japanese"]["bank_details_blunch_code"] = "";
	$fieldLabelsEoc_catch["Japanese"]["bank_details_account_number"] = "口座番号";
	$fieldToolTipsEoc_catch["Japanese"]["bank_details_account_number"] = "";
	$placeHoldersEoc_catch["Japanese"]["bank_details_account_number"] = "";
	$fieldLabelsEoc_catch["Japanese"]["bank_details_symbol"] = "記号";
	$fieldToolTipsEoc_catch["Japanese"]["bank_details_symbol"] = "";
	$placeHoldersEoc_catch["Japanese"]["bank_details_symbol"] = "";
	$fieldLabelsEoc_catch["Japanese"]["bank_details_number"] = "番号";
	$fieldToolTipsEoc_catch["Japanese"]["bank_details_number"] = "";
	$placeHoldersEoc_catch["Japanese"]["bank_details_number"] = "";
	$fieldLabelsEoc_catch["Japanese"]["bank_details_code"] = "金融機関名";
	$fieldToolTipsEoc_catch["Japanese"]["bank_details_code"] = "";
	$placeHoldersEoc_catch["Japanese"]["bank_details_code"] = "";
	$fieldLabelsEoc_catch["Japanese"]["bank_details_account_name"] = "名義人";
	$fieldToolTipsEoc_catch["Japanese"]["bank_details_account_name"] = "";
	$placeHoldersEoc_catch["Japanese"]["bank_details_account_name"] = "";
	$fieldLabelsEoc_catch["Japanese"]["bank_details_deposit_type"] = "預金種別";
	$fieldToolTipsEoc_catch["Japanese"]["bank_details_deposit_type"] = "";
	$placeHoldersEoc_catch["Japanese"]["bank_details_deposit_type"] = "";
	$fieldLabelsEoc_catch["Japanese"]["age"] = "年齢";
	$fieldToolTipsEoc_catch["Japanese"]["age"] = "";
	$placeHoldersEoc_catch["Japanese"]["age"] = "";
	$fieldLabelsEoc_catch["Japanese"]["bank_name"] = "金融機関情報";
	$fieldToolTipsEoc_catch["Japanese"]["bank_name"] = "";
	$placeHoldersEoc_catch["Japanese"]["bank_name"] = "";
	$fieldLabelsEoc_catch["Japanese"]["space_1"] = "";
	$fieldToolTipsEoc_catch["Japanese"]["space_1"] = "";
	$placeHoldersEoc_catch["Japanese"]["space_1"] = "";
	$fieldLabelsEoc_catch["Japanese"]["space_2"] = "";
	$fieldToolTipsEoc_catch["Japanese"]["space_2"] = "";
	$placeHoldersEoc_catch["Japanese"]["space_2"] = "";
	$fieldLabelsEoc_catch["Japanese"]["space_3"] = "";
	$fieldToolTipsEoc_catch["Japanese"]["space_3"] = "";
	$placeHoldersEoc_catch["Japanese"]["space_3"] = "";
	$fieldLabelsEoc_catch["Japanese"]["space_4"] = "";
	$fieldToolTipsEoc_catch["Japanese"]["space_4"] = "";
	$placeHoldersEoc_catch["Japanese"]["space_4"] = "";
	$fieldLabelsEoc_catch["Japanese"]["space_5"] = "";
	$fieldToolTipsEoc_catch["Japanese"]["space_5"] = "";
	$placeHoldersEoc_catch["Japanese"]["space_5"] = "";
	$fieldLabelsEoc_catch["Japanese"]["space_6"] = "";
	$fieldToolTipsEoc_catch["Japanese"]["space_6"] = "";
	$placeHoldersEoc_catch["Japanese"]["space_6"] = "";
	$fieldLabelsEoc_catch["Japanese"]["space_7"] = "";
	$fieldToolTipsEoc_catch["Japanese"]["space_7"] = "";
	$placeHoldersEoc_catch["Japanese"]["space_7"] = "";
	$fieldLabelsEoc_catch["Japanese"]["space_8"] = "";
	$fieldToolTipsEoc_catch["Japanese"]["space_8"] = "";
	$placeHoldersEoc_catch["Japanese"]["space_8"] = "";
	$fieldLabelsEoc_catch["Japanese"]["space_9"] = "";
	$fieldToolTipsEoc_catch["Japanese"]["space_9"] = "";
	$placeHoldersEoc_catch["Japanese"]["space_9"] = "";
	$fieldLabelsEoc_catch["Japanese"]["UN_REACHABLE_brand"] = "bra到着";
	$fieldToolTipsEoc_catch["Japanese"]["UN_REACHABLE_brand"] = "";
	$placeHoldersEoc_catch["Japanese"]["UN_REACHABLE_brand"] = "";
	$fieldLabelsEoc_catch["Japanese"]["sagawa_haisou_hoken"] = "佐川配送保険";
	$fieldToolTipsEoc_catch["Japanese"]["sagawa_haisou_hoken"] = "";
	$placeHoldersEoc_catch["Japanese"]["sagawa_haisou_hoken"] = "";
	$fieldLabelsEoc_catch["Japanese"]["haisou_bangou"] = "配送番号";
	$fieldToolTipsEoc_catch["Japanese"]["haisou_bangou"] = "";
	$placeHoldersEoc_catch["Japanese"]["haisou_bangou"] = "";
	$fieldLabelsEoc_catch["Japanese"]["mail_check_type"] = "メルマガ可否";
	$fieldToolTipsEoc_catch["Japanese"]["mail_check_type"] = "";
	$placeHoldersEoc_catch["Japanese"]["mail_check_type"] = "";
	$fieldLabelsEoc_catch["Japanese"]["space_10"] = "";
	$fieldToolTipsEoc_catch["Japanese"]["space_10"] = "";
	$placeHoldersEoc_catch["Japanese"]["space_10"] = "";
	$fieldLabelsEoc_catch["Japanese"]["new_name"] = "メモ";
	$fieldToolTipsEoc_catch["Japanese"]["new_name"] = "";
	$placeHoldersEoc_catch["Japanese"]["new_name"] = "";
	$fieldLabelsEoc_catch["Japanese"]["idfile_check_area"] = "";
	$fieldToolTipsEoc_catch["Japanese"]["idfile_check_area"] = "";
	$placeHoldersEoc_catch["Japanese"]["idfile_check_area"] = "";
	if (count($fieldToolTipsEoc_catch["Japanese"]))
		$tdataEoc_catch[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_catch[""] = array();
	$fieldToolTipsEoc_catch[""] = array();
	$placeHoldersEoc_catch[""] = array();
	$pageTitlesEoc_catch[""] = array();
	$fieldLabelsEoc_catch[""]["bank_details_blunch_name"] = "Bank Details Blunch Name";
	$fieldToolTipsEoc_catch[""]["bank_details_blunch_name"] = "";
	$placeHoldersEoc_catch[""]["bank_details_blunch_name"] = "";
	$fieldLabelsEoc_catch[""]["bank_details_blunch_code"] = "Bank Details Blunch Code";
	$fieldToolTipsEoc_catch[""]["bank_details_blunch_code"] = "";
	$placeHoldersEoc_catch[""]["bank_details_blunch_code"] = "";
	$fieldLabelsEoc_catch[""]["bank_details_account_number"] = "Bank Details Account Number";
	$fieldToolTipsEoc_catch[""]["bank_details_account_number"] = "";
	$placeHoldersEoc_catch[""]["bank_details_account_number"] = "";
	$fieldLabelsEoc_catch[""]["bank_details_symbol"] = "Bank Details Symbol";
	$fieldToolTipsEoc_catch[""]["bank_details_symbol"] = "";
	$placeHoldersEoc_catch[""]["bank_details_symbol"] = "";
	$fieldLabelsEoc_catch[""]["bank_details_number"] = "Bank Details Number";
	$fieldToolTipsEoc_catch[""]["bank_details_number"] = "";
	$placeHoldersEoc_catch[""]["bank_details_number"] = "";
	$fieldLabelsEoc_catch[""]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsEoc_catch[""]["bank_details_code"] = "";
	$placeHoldersEoc_catch[""]["bank_details_code"] = "";
	$fieldLabelsEoc_catch[""]["bank_details_account_name"] = "Bank Details Account Name";
	$fieldToolTipsEoc_catch[""]["bank_details_account_name"] = "";
	$placeHoldersEoc_catch[""]["bank_details_account_name"] = "";
	$fieldLabelsEoc_catch[""]["bank_details_deposit_type"] = "Bank Details Deposit Type";
	$fieldToolTipsEoc_catch[""]["bank_details_deposit_type"] = "";
	$placeHoldersEoc_catch[""]["bank_details_deposit_type"] = "";
	$fieldLabelsEoc_catch[""]["age"] = "Age";
	$fieldToolTipsEoc_catch[""]["age"] = "";
	$placeHoldersEoc_catch[""]["age"] = "";
	$fieldLabelsEoc_catch[""]["bank_name"] = "Bank Name";
	$fieldToolTipsEoc_catch[""]["bank_name"] = "";
	$placeHoldersEoc_catch[""]["bank_name"] = "";
	$fieldLabelsEoc_catch[""]["space_1"] = "Space 1";
	$fieldToolTipsEoc_catch[""]["space_1"] = "";
	$placeHoldersEoc_catch[""]["space_1"] = "";
	$fieldLabelsEoc_catch[""]["space_2"] = "Space 2";
	$fieldToolTipsEoc_catch[""]["space_2"] = "";
	$placeHoldersEoc_catch[""]["space_2"] = "";
	$fieldLabelsEoc_catch[""]["space_3"] = "Space 3";
	$fieldToolTipsEoc_catch[""]["space_3"] = "";
	$placeHoldersEoc_catch[""]["space_3"] = "";
	$fieldLabelsEoc_catch[""]["space_4"] = "Space 4";
	$fieldToolTipsEoc_catch[""]["space_4"] = "";
	$placeHoldersEoc_catch[""]["space_4"] = "";
	$fieldLabelsEoc_catch[""]["space_5"] = "Space 5";
	$fieldToolTipsEoc_catch[""]["space_5"] = "";
	$placeHoldersEoc_catch[""]["space_5"] = "";
	$fieldLabelsEoc_catch[""]["space_6"] = "Space 6";
	$fieldToolTipsEoc_catch[""]["space_6"] = "";
	$placeHoldersEoc_catch[""]["space_6"] = "";
	$fieldLabelsEoc_catch[""]["space_7"] = "Space 7";
	$fieldToolTipsEoc_catch[""]["space_7"] = "";
	$placeHoldersEoc_catch[""]["space_7"] = "";
	$fieldLabelsEoc_catch[""]["space_8"] = "Space 8";
	$fieldToolTipsEoc_catch[""]["space_8"] = "";
	$placeHoldersEoc_catch[""]["space_8"] = "";
	$fieldLabelsEoc_catch[""]["space_9"] = "Space 9";
	$fieldToolTipsEoc_catch[""]["space_9"] = "";
	$placeHoldersEoc_catch[""]["space_9"] = "";
	$fieldLabelsEoc_catch[""]["UN_REACHABLE_brand"] = "UN REACHABLE Brand";
	$fieldToolTipsEoc_catch[""]["UN_REACHABLE_brand"] = "";
	$placeHoldersEoc_catch[""]["UN_REACHABLE_brand"] = "";
	$fieldLabelsEoc_catch[""]["sagawa_haisou_hoken"] = "Sagawa Haisou Hoken";
	$fieldToolTipsEoc_catch[""]["sagawa_haisou_hoken"] = "";
	$placeHoldersEoc_catch[""]["sagawa_haisou_hoken"] = "";
	$fieldLabelsEoc_catch[""]["haisou_bangou"] = "Haisou Bangou";
	$fieldToolTipsEoc_catch[""]["haisou_bangou"] = "";
	$placeHoldersEoc_catch[""]["haisou_bangou"] = "";
	$fieldLabelsEoc_catch[""]["mail_check_type"] = "Mail Check Type";
	$fieldToolTipsEoc_catch[""]["mail_check_type"] = "";
	$placeHoldersEoc_catch[""]["mail_check_type"] = "";
	$fieldLabelsEoc_catch[""]["space_10"] = "Space 10";
	$fieldToolTipsEoc_catch[""]["space_10"] = "";
	$placeHoldersEoc_catch[""]["space_10"] = "";
	$fieldLabelsEoc_catch[""]["new_name"] = "New Name";
	$fieldToolTipsEoc_catch[""]["new_name"] = "";
	$placeHoldersEoc_catch[""]["new_name"] = "";
	$fieldLabelsEoc_catch[""]["idfile_check_area"] = "Idfile Check Area";
	$fieldToolTipsEoc_catch[""]["idfile_check_area"] = "";
	$placeHoldersEoc_catch[""]["idfile_check_area"] = "";
	if (count($fieldToolTipsEoc_catch[""]))
		$tdataEoc_catch[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_catch["English"] = array();
	$fieldToolTipsEoc_catch["English"] = array();
	$placeHoldersEoc_catch["English"] = array();
	$pageTitlesEoc_catch["English"] = array();
	$fieldLabelsEoc_catch["English"]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsEoc_catch["English"]["bank_details_code"] = "";
	$placeHoldersEoc_catch["English"]["bank_details_code"] = "";
	$fieldLabelsEoc_catch["English"]["bank_details_account_name"] = "Bank Details Account Name";
	$fieldToolTipsEoc_catch["English"]["bank_details_account_name"] = "";
	$placeHoldersEoc_catch["English"]["bank_details_account_name"] = "";
	$fieldLabelsEoc_catch["English"]["bank_details_deposit_type"] = "Bank Details Deposit Type";
	$fieldToolTipsEoc_catch["English"]["bank_details_deposit_type"] = "";
	$placeHoldersEoc_catch["English"]["bank_details_deposit_type"] = "";
	$fieldLabelsEoc_catch["English"]["age"] = "Age";
	$fieldToolTipsEoc_catch["English"]["age"] = "";
	$placeHoldersEoc_catch["English"]["age"] = "";
	$fieldLabelsEoc_catch["English"]["bank_name"] = "Bank Name";
	$fieldToolTipsEoc_catch["English"]["bank_name"] = "";
	$placeHoldersEoc_catch["English"]["bank_name"] = "";
	$fieldLabelsEoc_catch["English"]["space_1"] = "Space 1";
	$fieldToolTipsEoc_catch["English"]["space_1"] = "";
	$placeHoldersEoc_catch["English"]["space_1"] = "";
	$fieldLabelsEoc_catch["English"]["space_2"] = "Space 2";
	$fieldToolTipsEoc_catch["English"]["space_2"] = "";
	$placeHoldersEoc_catch["English"]["space_2"] = "";
	$fieldLabelsEoc_catch["English"]["space_3"] = "Space 3";
	$fieldToolTipsEoc_catch["English"]["space_3"] = "";
	$placeHoldersEoc_catch["English"]["space_3"] = "";
	$fieldLabelsEoc_catch["English"]["space_4"] = "Space 4";
	$fieldToolTipsEoc_catch["English"]["space_4"] = "";
	$placeHoldersEoc_catch["English"]["space_4"] = "";
	$fieldLabelsEoc_catch["English"]["space_5"] = "Space 5";
	$fieldToolTipsEoc_catch["English"]["space_5"] = "";
	$placeHoldersEoc_catch["English"]["space_5"] = "";
	$fieldLabelsEoc_catch["English"]["space_6"] = "Space 6";
	$fieldToolTipsEoc_catch["English"]["space_6"] = "";
	$placeHoldersEoc_catch["English"]["space_6"] = "";
	$fieldLabelsEoc_catch["English"]["space_7"] = "Space 7";
	$fieldToolTipsEoc_catch["English"]["space_7"] = "";
	$placeHoldersEoc_catch["English"]["space_7"] = "";
	$fieldLabelsEoc_catch["English"]["space_8"] = "Space 8";
	$fieldToolTipsEoc_catch["English"]["space_8"] = "";
	$placeHoldersEoc_catch["English"]["space_8"] = "";
	$fieldLabelsEoc_catch["English"]["space_9"] = "Space 9";
	$fieldToolTipsEoc_catch["English"]["space_9"] = "";
	$placeHoldersEoc_catch["English"]["space_9"] = "";
	$fieldLabelsEoc_catch["English"]["UN_REACHABLE_brand"] = "UN REACHABLE Brand";
	$fieldToolTipsEoc_catch["English"]["UN_REACHABLE_brand"] = "";
	$placeHoldersEoc_catch["English"]["UN_REACHABLE_brand"] = "";
	$fieldLabelsEoc_catch["English"]["sagawa_haisou_hoken"] = "Sagawa Haisou Hoken";
	$fieldToolTipsEoc_catch["English"]["sagawa_haisou_hoken"] = "";
	$placeHoldersEoc_catch["English"]["sagawa_haisou_hoken"] = "";
	$fieldLabelsEoc_catch["English"]["haisou_bangou"] = "Haisou Bangou";
	$fieldToolTipsEoc_catch["English"]["haisou_bangou"] = "";
	$placeHoldersEoc_catch["English"]["haisou_bangou"] = "";
	$fieldLabelsEoc_catch["English"]["mail_check_type"] = "Mail Check Type";
	$fieldToolTipsEoc_catch["English"]["mail_check_type"] = "";
	$placeHoldersEoc_catch["English"]["mail_check_type"] = "";
	$fieldLabelsEoc_catch["English"]["space_10"] = "Space 10";
	$fieldToolTipsEoc_catch["English"]["space_10"] = "";
	$placeHoldersEoc_catch["English"]["space_10"] = "";
	$fieldLabelsEoc_catch["English"]["new_name"] = "New Name";
	$fieldToolTipsEoc_catch["English"]["new_name"] = "";
	$placeHoldersEoc_catch["English"]["new_name"] = "";
	$fieldLabelsEoc_catch["English"]["idfile_check_area"] = "Idfile Check Area";
	$fieldToolTipsEoc_catch["English"]["idfile_check_area"] = "";
	$placeHoldersEoc_catch["English"]["idfile_check_area"] = "";
	if (count($fieldToolTipsEoc_catch["English"]))
		$tdataEoc_catch[".isUseToolTips"] = true;
}


	$tdataEoc_catch[".NCSearch"] = true;



$tdataEoc_catch[".shortTableName"] = "Eoc_catch";
$tdataEoc_catch[".nSecOptions"] = 0;
$tdataEoc_catch[".recsPerRowPrint"] = 1;
$tdataEoc_catch[".mainTableOwnerID"] = "";
$tdataEoc_catch[".moveNext"] = 1;
$tdataEoc_catch[".entityType"] = 1;

$tdataEoc_catch[".strOriginalTableName"] = "Eoc";

	



$tdataEoc_catch[".showAddInPopup"] = false;

$tdataEoc_catch[".showEditInPopup"] = false;

$tdataEoc_catch[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_catch[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_catch[".fieldsForRegister"] = array();

$tdataEoc_catch[".listAjax"] = false;

	$tdataEoc_catch[".audit"] = true;

	$tdataEoc_catch[".locking"] = false;

$tdataEoc_catch[".edit"] = true;
$tdataEoc_catch[".afterEditAction"] = 1;
$tdataEoc_catch[".closePopupAfterEdit"] = 1;
$tdataEoc_catch[".afterEditActionDetTable"] = "Detail tables not found!";

$tdataEoc_catch[".add"] = true;
$tdataEoc_catch[".afterAddAction"] = 1;
$tdataEoc_catch[".closePopupAfterAdd"] = 1;
$tdataEoc_catch[".afterAddActionDetTable"] = "Detail tables not found!";

$tdataEoc_catch[".list"] = true;

$tdataEoc_catch[".inlineEdit"] = true;


$tdataEoc_catch[".createSortByDropdown"] = true;
$tdataEoc_catch[".strSortControlSettingsJSON"] = "";

$tdataEoc_catch[".strClickActionJSON"] = "{\"fields\":{\"ALLSEIYAKU\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_COURIER_CHECK\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_NUMBER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_REUSE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_SIZE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_SPECIFIED_TIME\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC__BOX_NUMBER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC__DATE_AND_TIME_2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC__DELIVERY_DATES\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FIRST_NAME2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FIRST_NAME_KANA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FLAG_SPEED\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FLG_MAIL_OTHER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FLG_MAIL_SAGAWA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ICHIBUSEIYAKU\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"LAST_NAME2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"LAST_NAME_KANA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SEARCH_MEDIA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SEARCH_SITE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"UN_REACHABLE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"_registerd_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address3\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"age\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"awazu_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"b1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"b2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"b3\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_account\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_acoount_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_blunch_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_yokin_shubetu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"birth_day\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"chigin_kaitori\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"created_t\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ecc_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ecc_seq\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"eoc_search_keyword\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"fax\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"haisou_bangou\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hentou_houhou\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hentou_houhou_time\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hituyou_shorui\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"insurance_amount_print\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"jis_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"kaitori_staff_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"kaitorihuka\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"liquidation_shop_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"m_tel\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mail1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mail2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mail_check_type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mitumori_taku\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mousikomi_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"name1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"name2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option10\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option11\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option12\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option13\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option3\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option4\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option5\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option6\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option7\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option8\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option9\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"purchase_type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"rakuda_csv_flag\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"registerd_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"remark\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sagawa_shuuka_flag\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sales_flag\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seacanse\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seiyaku_fuseiritu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seiyaku_price\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seiyakukin\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sex\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sise_houhou\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"size_kosuu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sonota\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"src_type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"tel\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"tel2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"updated_at\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"wareki\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"zip\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"zip1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"zip2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"Eoc_chigins\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"Eoc_chigins\",\"url\":\"\"}}}";


$tdataEoc_catch[".inlineAdd"] = true;

$tdataEoc_catch[".import"] = true;

$tdataEoc_catch[".exportTo"] = true;


$tdataEoc_catch[".delete"] = true;

$tdataEoc_catch[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_catch[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_catch[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_catch[".searchSaving"] = false;
//

$tdataEoc_catch[".showSearchPanel"] = true;
		$tdataEoc_catch[".flexibleSearch"] = true;

$tdataEoc_catch[".isUseAjaxSuggest"] = true;

$tdataEoc_catch[".rowHighlite"] = true;



																																																																																							
					
					
					
						
																							
																																																																																													
																												
		

$tdataEoc_catch[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_catch[".buttonsAdded"] = true;

$tdataEoc_catch[".addPageEvents"] = true;

// use timepicker for search panel
$tdataEoc_catch[".isUseTimeForSearch"] = false;



$tdataEoc_catch[".badgeColor"] = "5F9EA0";

$tdataEoc_catch[".detailsLinksOnList"] = "1";

$tdataEoc_catch[".allSearchFields"] = array();
$tdataEoc_catch[".filterFields"] = array();
$tdataEoc_catch[".requiredSearchFields"] = array();

$tdataEoc_catch[".allSearchFields"][] = "tel2";
	$tdataEoc_catch[".allSearchFields"][] = "ecc_id";
	$tdataEoc_catch[".allSearchFields"][] = "name1";
	$tdataEoc_catch[".allSearchFields"][] = "name2";
	$tdataEoc_catch[".allSearchFields"][] = "tel";
	$tdataEoc_catch[".allSearchFields"][] = "mail1";
	$tdataEoc_catch[".allSearchFields"][] = "mail2";
	$tdataEoc_catch[".allSearchFields"][] = "UN_REACHABLE";
	$tdataEoc_catch[".allSearchFields"][] = "UN_REACHABLE_brand";
	$tdataEoc_catch[".allSearchFields"][] = "purchase_type";
	$tdataEoc_catch[".allSearchFields"][] = "ecc_seq";
	$tdataEoc_catch[".allSearchFields"][] = "address1";
	$tdataEoc_catch[".allSearchFields"][] = "line_check";
	$tdataEoc_catch[".allSearchFields"][] = "remark";
	$tdataEoc_catch[".allSearchFields"][] = "bank_details_code";
	$tdataEoc_catch[".allSearchFields"][] = "created_t";
	$tdataEoc_catch[".allSearchFields"][] = "option5";
	$tdataEoc_catch[".allSearchFields"][] = "wareki";
	$tdataEoc_catch[".allSearchFields"][] = "b1";
	$tdataEoc_catch[".allSearchFields"][] = "b2";
	$tdataEoc_catch[".allSearchFields"][] = "b3";
	$tdataEoc_catch[".allSearchFields"][] = "age";
	$tdataEoc_catch[".allSearchFields"][] = "fax";
	$tdataEoc_catch[".allSearchFields"][] = "hentou_houhou";
	$tdataEoc_catch[".allSearchFields"][] = "zip1";
	$tdataEoc_catch[".allSearchFields"][] = "zip2";
	$tdataEoc_catch[".allSearchFields"][] = "address2";
	$tdataEoc_catch[".allSearchFields"][] = "address3";
	$tdataEoc_catch[".allSearchFields"][] = "option11";
	$tdataEoc_catch[".allSearchFields"][] = "option12";
	$tdataEoc_catch[".allSearchFields"][] = "bank_name";
	$tdataEoc_catch[".allSearchFields"][] = "bank_details_deposit_type";
	$tdataEoc_catch[".allSearchFields"][] = "bank_details_blunch_name";
	$tdataEoc_catch[".allSearchFields"][] = "bank_details_blunch_code";
	$tdataEoc_catch[".allSearchFields"][] = "bank_details_account_number";
	$tdataEoc_catch[".allSearchFields"][] = "bank_details_symbol";
	$tdataEoc_catch[".allSearchFields"][] = "bank_details_number";
	$tdataEoc_catch[".allSearchFields"][] = "bank_details_account_name";
	$tdataEoc_catch[".allSearchFields"][] = "updated_at";
	

$tdataEoc_catch[".googleLikeFields"] = array();
$tdataEoc_catch[".googleLikeFields"][] = "ecc_id";
$tdataEoc_catch[".googleLikeFields"][] = "ecc_seq";
$tdataEoc_catch[".googleLikeFields"][] = "mail1";
$tdataEoc_catch[".googleLikeFields"][] = "mail2";
$tdataEoc_catch[".googleLikeFields"][] = "line_check";
$tdataEoc_catch[".googleLikeFields"][] = "bank_details_code";
$tdataEoc_catch[".googleLikeFields"][] = "bank_details_deposit_type";
$tdataEoc_catch[".googleLikeFields"][] = "bank_details_blunch_name";
$tdataEoc_catch[".googleLikeFields"][] = "bank_details_blunch_code";
$tdataEoc_catch[".googleLikeFields"][] = "bank_details_account_number";
$tdataEoc_catch[".googleLikeFields"][] = "bank_details_symbol";
$tdataEoc_catch[".googleLikeFields"][] = "bank_details_number";
$tdataEoc_catch[".googleLikeFields"][] = "bank_details_account_name";
$tdataEoc_catch[".googleLikeFields"][] = "age";
$tdataEoc_catch[".googleLikeFields"][] = "bank_name";
$tdataEoc_catch[".googleLikeFields"][] = "space_1";
$tdataEoc_catch[".googleLikeFields"][] = "space_2";
$tdataEoc_catch[".googleLikeFields"][] = "space_3";
$tdataEoc_catch[".googleLikeFields"][] = "space_4";
$tdataEoc_catch[".googleLikeFields"][] = "space_5";
$tdataEoc_catch[".googleLikeFields"][] = "space_6";
$tdataEoc_catch[".googleLikeFields"][] = "space_7";
$tdataEoc_catch[".googleLikeFields"][] = "space_8";
$tdataEoc_catch[".googleLikeFields"][] = "space_9";
$tdataEoc_catch[".googleLikeFields"][] = "space_10";
$tdataEoc_catch[".googleLikeFields"][] = "UN_REACHABLE_brand";
$tdataEoc_catch[".googleLikeFields"][] = "sagawa_haisou_hoken";
$tdataEoc_catch[".googleLikeFields"][] = "haisou_bangou";
$tdataEoc_catch[".googleLikeFields"][] = "mail_check_type";
$tdataEoc_catch[".googleLikeFields"][] = "new_name";
$tdataEoc_catch[".googleLikeFields"][] = "idfile_check_area";

$tdataEoc_catch[".panelSearchFields"] = array();
$tdataEoc_catch[".searchPanelOptions"] = array();
$tdataEoc_catch[".panelSearchFields"][] = "tel2";
	$tdataEoc_catch[".panelSearchFields"][] = "ecc_id";
	$tdataEoc_catch[".panelSearchFields"][] = "name1";
	$tdataEoc_catch[".panelSearchFields"][] = "name2";
	$tdataEoc_catch[".panelSearchFields"][] = "tel";
	$tdataEoc_catch[".panelSearchFields"][] = "mail1";
	$tdataEoc_catch[".panelSearchFields"][] = "mail2";
	$tdataEoc_catch[".panelSearchFields"][] = "UN_REACHABLE";
	$tdataEoc_catch[".panelSearchFields"][] = "purchase_type";
	$tdataEoc_catch[".panelSearchFields"][] = "ecc_seq";
	$tdataEoc_catch[".panelSearchFields"][] = "address1";
	$tdataEoc_catch[".panelSearchFields"][] = "line_check";
	$tdataEoc_catch[".panelSearchFields"][] = "remark";
	$tdataEoc_catch[".panelSearchFields"][] = "bank_details_code";
	
$tdataEoc_catch[".advSearchFields"] = array();
$tdataEoc_catch[".advSearchFields"][] = "tel2";
$tdataEoc_catch[".advSearchFields"][] = "ecc_id";
$tdataEoc_catch[".advSearchFields"][] = "name1";
$tdataEoc_catch[".advSearchFields"][] = "name2";
$tdataEoc_catch[".advSearchFields"][] = "tel";
$tdataEoc_catch[".advSearchFields"][] = "mail1";
$tdataEoc_catch[".advSearchFields"][] = "mail2";
$tdataEoc_catch[".advSearchFields"][] = "UN_REACHABLE";
$tdataEoc_catch[".advSearchFields"][] = "UN_REACHABLE_brand";
$tdataEoc_catch[".advSearchFields"][] = "purchase_type";
$tdataEoc_catch[".advSearchFields"][] = "ecc_seq";
$tdataEoc_catch[".advSearchFields"][] = "address1";
$tdataEoc_catch[".advSearchFields"][] = "line_check";
$tdataEoc_catch[".advSearchFields"][] = "remark";
$tdataEoc_catch[".advSearchFields"][] = "bank_details_code";
$tdataEoc_catch[".advSearchFields"][] = "created_t";
$tdataEoc_catch[".advSearchFields"][] = "option5";
$tdataEoc_catch[".advSearchFields"][] = "wareki";
$tdataEoc_catch[".advSearchFields"][] = "b1";
$tdataEoc_catch[".advSearchFields"][] = "b2";
$tdataEoc_catch[".advSearchFields"][] = "b3";
$tdataEoc_catch[".advSearchFields"][] = "age";
$tdataEoc_catch[".advSearchFields"][] = "fax";
$tdataEoc_catch[".advSearchFields"][] = "hentou_houhou";
$tdataEoc_catch[".advSearchFields"][] = "zip1";
$tdataEoc_catch[".advSearchFields"][] = "zip2";
$tdataEoc_catch[".advSearchFields"][] = "address2";
$tdataEoc_catch[".advSearchFields"][] = "address3";
$tdataEoc_catch[".advSearchFields"][] = "option11";
$tdataEoc_catch[".advSearchFields"][] = "option12";
$tdataEoc_catch[".advSearchFields"][] = "bank_name";
$tdataEoc_catch[".advSearchFields"][] = "bank_details_deposit_type";
$tdataEoc_catch[".advSearchFields"][] = "bank_details_blunch_name";
$tdataEoc_catch[".advSearchFields"][] = "bank_details_blunch_code";
$tdataEoc_catch[".advSearchFields"][] = "bank_details_account_number";
$tdataEoc_catch[".advSearchFields"][] = "bank_details_symbol";
$tdataEoc_catch[".advSearchFields"][] = "bank_details_number";
$tdataEoc_catch[".advSearchFields"][] = "bank_details_account_name";
$tdataEoc_catch[".advSearchFields"][] = "updated_at";

$tdataEoc_catch[".tableType"] = "list";

$tdataEoc_catch[".printerPageOrientation"] = 0;
$tdataEoc_catch[".nPrinterPageScale"] = 100;

$tdataEoc_catch[".nPrinterSplitRecords"] = 40;

$tdataEoc_catch[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_catch[".geocodingEnabled"] = false;





$tdataEoc_catch[".listGridLayout"] = 2;





// view page pdf

// print page pdf


$tdataEoc_catch[".pageSize"] = 20;

$tdataEoc_catch[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `ecc_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_catch[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_catch[".orderindexes"] = array();
$tdataEoc_catch[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`ecc_id`");

$tdataEoc_catch[".sqlHead"] = "SELECT `ecc_id`,  `ecc_seq`,  `UN_REACHABLE`,  `created_t`,  `updated_at`,  `purchase_type`,  `name1`,  `name2`,  `option5`,  `b1`,  `b2`,  `b3`,  `wareki`,  `option11`,  `zip1`,  `zip2`,  `address1`,  `address2`,  `address3`,  `tel`,  `tel2`,  `fax`,  `mail1`,  `mail2`,  `hentou_houhou`,  `option12`,  `line_check`,  `remark`,  `bank_details_code`,  `bank_details_deposit_type`,  `bank_details_blunch_name`,  `bank_details_blunch_code`,  `bank_details_account_number`,  `bank_details_symbol`,  `bank_details_number`,  `bank_details_account_name`,  `age`,  `bank_name`,  concat(\"\") AS `space_1`,  concat(\"\") AS `space_2`,  concat(\"\") AS `space_3`,  concat(\"\") AS `space_4`,  concat(\"\") AS `space_5`,  concat(\"\") AS `space_6`,  concat(\"\") AS `space_7`,  concat(\"\") AS `space_8`,  concat(\"\") AS `space_9`,  concat(\"\") AS `space_10`,  `UN_REACHABLE_brand`,  `sagawa_haisou_hoken`,  `haisou_bangou`,  `mail_check_type`,  `new_name`,  `ecc_id` AS `idfile_check_area`";
$tdataEoc_catch[".sqlFrom"] = "FROM `Eoc`";
$tdataEoc_catch[".sqlWhereExpr"] = "";
$tdataEoc_catch[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "space_10";
	
		$tabFields[] = "UN_REACHABLE";
	
		$tabFields[] = "UN_REACHABLE_brand";
	
		$tabFields[] = "created_t";
	
		$tabFields[] = "updated_at";
	
		$tabFields[] = "purchase_type";
	
		$tabFields[] = "ecc_id";
	
		$tabFields[] = "ecc_seq";
	
		$tabFields[] = "name1";
	
		$tabFields[] = "name2";
	
		$tabFields[] = "option5";
	
		$tabFields[] = "wareki";
	
		$tabFields[] = "b1";
	
		$tabFields[] = "b2";
	
		$tabFields[] = "b3";
	
		$tabFields[] = "age";
	
		$tabFields[] = "option11";
	
		$tabFields[] = "zip1";
	
		$tabFields[] = "zip2";
	
		$tabFields[] = "address1";
	
		$tabFields[] = "address2";
	
		$tabFields[] = "address3";
	
		$tabFields[] = "tel";
	
		$tabFields[] = "tel2";
	
		$tabFields[] = "fax";
	
		$tabFields[] = "mail1";
	
		$tabFields[] = "mail2";
$arrEditTabs[] = array('tabId'=>'section1',
					   'tabName'=>"section",
					   'nType'=>'1',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
	
		$tabFields[] = "hentou_houhou";
	
		$tabFields[] = "option12";
	
		$tabFields[] = "line_check";
	
		$tabFields[] = "remark";
	
		$tabFields[] = "bank_name";
	
		$tabFields[] = "bank_details_code";
	
		$tabFields[] = "bank_details_deposit_type";
	
		$tabFields[] = "bank_details_blunch_code";
	
		$tabFields[] = "bank_details_blunch_name";
	
		$tabFields[] = "bank_details_account_number";
	
		$tabFields[] = "bank_details_symbol";
	
		$tabFields[] = "bank_details_number";
	
		$tabFields[] = "bank_details_account_name";
	
		$tabFields[] = "new_name";
$arrEditTabs[] = array('tabId'=>'section11',
					   'tabName'=>"section1",
					   'nType'=>'1',
					   'nOrder'=>29,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
	
		$tabFields[] = "Eoc_takuhai_for_catch";
	
		$tabFields[] = "space_2";
	
		$tabFields[] = "Eoc_takuhai_for_catch_history";
	
		$tabFields[] = "Eoc_chigins";
	
		$tabFields[] = "Eoc_guestquestion_for_catch";
	
		$tabFields[] = "Eoc_timeline";
$arrEditTabs[] = array('tabId'=>'section21',
					   'tabName'=>"section2",
					   'nType'=>'1',
					   'nOrder'=>44,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'section31',
					   'tabName'=>"section3",
					   'nType'=>'1',
					   'nOrder'=>51,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataEoc_catch[".arrEditTabs"] = $arrEditTabs;



//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'__1',
					   'tabName'=>"顧客",
					   'nType'=>'1',
					   'nOrder'=>24,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'__2',
					   'tabName'=>"備考",
					   'nType'=>'1',
					   'nOrder'=>70,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'___1',
					   'tabName'=>"顧客２",
					   'nType'=>'1',
					   'nOrder'=>75,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataEoc_catch[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_catch[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_catch[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_catch[".highlightSearchResults"] = true;

$tableKeysEoc_catch = array();
$tableKeysEoc_catch[] = "ecc_id";
$tdataEoc_catch[".Keys"] = $tableKeysEoc_catch;

$tdataEoc_catch[".listFields"] = array();
$tdataEoc_catch[".listFields"][] = "tel";
$tdataEoc_catch[".listFields"][] = "tel2";
$tdataEoc_catch[".listFields"][] = "zip1";
$tdataEoc_catch[".listFields"][] = "zip2";
$tdataEoc_catch[".listFields"][] = "address1";
$tdataEoc_catch[".listFields"][] = "address2";
$tdataEoc_catch[".listFields"][] = "address3";
$tdataEoc_catch[".listFields"][] = "name1";
$tdataEoc_catch[".listFields"][] = "name2";
$tdataEoc_catch[".listFields"][] = "option5";
$tdataEoc_catch[".listFields"][] = "space_1";
$tdataEoc_catch[".listFields"][] = "space_2";
$tdataEoc_catch[".listFields"][] = "wareki";
$tdataEoc_catch[".listFields"][] = "b1";
$tdataEoc_catch[".listFields"][] = "b2";
$tdataEoc_catch[".listFields"][] = "b3";
$tdataEoc_catch[".listFields"][] = "age";
$tdataEoc_catch[".listFields"][] = "option11";
$tdataEoc_catch[".listFields"][] = "ecc_id";
$tdataEoc_catch[".listFields"][] = "ecc_seq";
$tdataEoc_catch[".listFields"][] = "created_t";
$tdataEoc_catch[".listFields"][] = "updated_at";
$tdataEoc_catch[".listFields"][] = "purchase_type";
$tdataEoc_catch[".listFields"][] = "space_3";
$tdataEoc_catch[".listFields"][] = "UN_REACHABLE";
$tdataEoc_catch[".listFields"][] = "UN_REACHABLE_brand";
$tdataEoc_catch[".listFields"][] = "fax";
$tdataEoc_catch[".listFields"][] = "mail1";
$tdataEoc_catch[".listFields"][] = "mail2";
$tdataEoc_catch[".listFields"][] = "hentou_houhou";
$tdataEoc_catch[".listFields"][] = "option12";
$tdataEoc_catch[".listFields"][] = "line_check";
$tdataEoc_catch[".listFields"][] = "space_4";
$tdataEoc_catch[".listFields"][] = "space_5";
$tdataEoc_catch[".listFields"][] = "space_6";
$tdataEoc_catch[".listFields"][] = "space_7";
$tdataEoc_catch[".listFields"][] = "bank_details_code";
$tdataEoc_catch[".listFields"][] = "bank_details_deposit_type";
$tdataEoc_catch[".listFields"][] = "bank_details_blunch_name";
$tdataEoc_catch[".listFields"][] = "bank_details_blunch_code";
$tdataEoc_catch[".listFields"][] = "bank_details_account_number";
$tdataEoc_catch[".listFields"][] = "bank_details_symbol";
$tdataEoc_catch[".listFields"][] = "bank_details_number";
$tdataEoc_catch[".listFields"][] = "bank_details_account_name";
$tdataEoc_catch[".listFields"][] = "space_8";
$tdataEoc_catch[".listFields"][] = "space_9";
$tdataEoc_catch[".listFields"][] = "bank_name";
$tdataEoc_catch[".listFields"][] = "remark";

$tdataEoc_catch[".hideMobileList"] = array();


$tdataEoc_catch[".viewFields"] = array();

$tdataEoc_catch[".addFields"] = array();
$tdataEoc_catch[".addFields"][] = "UN_REACHABLE";
$tdataEoc_catch[".addFields"][] = "UN_REACHABLE_brand";
$tdataEoc_catch[".addFields"][] = "created_t";
$tdataEoc_catch[".addFields"][] = "updated_at";
$tdataEoc_catch[".addFields"][] = "purchase_type";
$tdataEoc_catch[".addFields"][] = "ecc_seq";
$tdataEoc_catch[".addFields"][] = "option5";
$tdataEoc_catch[".addFields"][] = "wareki";
$tdataEoc_catch[".addFields"][] = "b1";
$tdataEoc_catch[".addFields"][] = "b2";
$tdataEoc_catch[".addFields"][] = "b3";
$tdataEoc_catch[".addFields"][] = "age";
$tdataEoc_catch[".addFields"][] = "zip1";
$tdataEoc_catch[".addFields"][] = "zip2";
$tdataEoc_catch[".addFields"][] = "address1";
$tdataEoc_catch[".addFields"][] = "address2";
$tdataEoc_catch[".addFields"][] = "address3";
$tdataEoc_catch[".addFields"][] = "mail1";
$tdataEoc_catch[".addFields"][] = "mail2";
$tdataEoc_catch[".addFields"][] = "hentou_houhou";
$tdataEoc_catch[".addFields"][] = "option11";
$tdataEoc_catch[".addFields"][] = "option12";
$tdataEoc_catch[".addFields"][] = "tel";
$tdataEoc_catch[".addFields"][] = "tel2";
$tdataEoc_catch[".addFields"][] = "fax";
$tdataEoc_catch[".addFields"][] = "line_check";
$tdataEoc_catch[".addFields"][] = "remark";
$tdataEoc_catch[".addFields"][] = "bank_name";
$tdataEoc_catch[".addFields"][] = "bank_details_code";
$tdataEoc_catch[".addFields"][] = "bank_details_deposit_type";
$tdataEoc_catch[".addFields"][] = "bank_details_blunch_name";
$tdataEoc_catch[".addFields"][] = "bank_details_blunch_code";
$tdataEoc_catch[".addFields"][] = "bank_details_account_number";
$tdataEoc_catch[".addFields"][] = "bank_details_symbol";
$tdataEoc_catch[".addFields"][] = "bank_details_number";
$tdataEoc_catch[".addFields"][] = "bank_details_account_name";

$tdataEoc_catch[".masterListFields"] = array();
$tdataEoc_catch[".masterListFields"][] = "age";
$tdataEoc_catch[".masterListFields"][] = "bank_name";
$tdataEoc_catch[".masterListFields"][] = "space_1";
$tdataEoc_catch[".masterListFields"][] = "space_2";
$tdataEoc_catch[".masterListFields"][] = "space_3";
$tdataEoc_catch[".masterListFields"][] = "space_4";
$tdataEoc_catch[".masterListFields"][] = "space_5";
$tdataEoc_catch[".masterListFields"][] = "space_6";
$tdataEoc_catch[".masterListFields"][] = "space_7";
$tdataEoc_catch[".masterListFields"][] = "space_8";
$tdataEoc_catch[".masterListFields"][] = "space_9";
$tdataEoc_catch[".masterListFields"][] = "space_10";
$tdataEoc_catch[".masterListFields"][] = "UN_REACHABLE_brand";
$tdataEoc_catch[".masterListFields"][] = "purchase_type";
$tdataEoc_catch[".masterListFields"][] = "ecc_seq";
$tdataEoc_catch[".masterListFields"][] = "ecc_id";
$tdataEoc_catch[".masterListFields"][] = "name1";
$tdataEoc_catch[".masterListFields"][] = "name2";
$tdataEoc_catch[".masterListFields"][] = "option5";
$tdataEoc_catch[".masterListFields"][] = "wareki";
$tdataEoc_catch[".masterListFields"][] = "tel";
$tdataEoc_catch[".masterListFields"][] = "tel2";
$tdataEoc_catch[".masterListFields"][] = "fax";
$tdataEoc_catch[".masterListFields"][] = "mail1";
$tdataEoc_catch[".masterListFields"][] = "mail2";
$tdataEoc_catch[".masterListFields"][] = "hentou_houhou";
$tdataEoc_catch[".masterListFields"][] = "zip1";
$tdataEoc_catch[".masterListFields"][] = "zip2";
$tdataEoc_catch[".masterListFields"][] = "address1";
$tdataEoc_catch[".masterListFields"][] = "address2";
$tdataEoc_catch[".masterListFields"][] = "address3";
$tdataEoc_catch[".masterListFields"][] = "remark";
$tdataEoc_catch[".masterListFields"][] = "created_t";
$tdataEoc_catch[".masterListFields"][] = "updated_at";

$tdataEoc_catch[".inlineAddFields"] = array();
$tdataEoc_catch[".inlineAddFields"][] = "tel";
$tdataEoc_catch[".inlineAddFields"][] = "tel2";
$tdataEoc_catch[".inlineAddFields"][] = "zip1";
$tdataEoc_catch[".inlineAddFields"][] = "zip2";
$tdataEoc_catch[".inlineAddFields"][] = "address1";
$tdataEoc_catch[".inlineAddFields"][] = "address2";
$tdataEoc_catch[".inlineAddFields"][] = "address3";
$tdataEoc_catch[".inlineAddFields"][] = "name1";
$tdataEoc_catch[".inlineAddFields"][] = "name2";
$tdataEoc_catch[".inlineAddFields"][] = "option5";
$tdataEoc_catch[".inlineAddFields"][] = "wareki";
$tdataEoc_catch[".inlineAddFields"][] = "b1";
$tdataEoc_catch[".inlineAddFields"][] = "b2";
$tdataEoc_catch[".inlineAddFields"][] = "b3";
$tdataEoc_catch[".inlineAddFields"][] = "age";
$tdataEoc_catch[".inlineAddFields"][] = "ecc_seq";
$tdataEoc_catch[".inlineAddFields"][] = "created_t";
$tdataEoc_catch[".inlineAddFields"][] = "updated_at";
$tdataEoc_catch[".inlineAddFields"][] = "purchase_type";
$tdataEoc_catch[".inlineAddFields"][] = "UN_REACHABLE";
$tdataEoc_catch[".inlineAddFields"][] = "UN_REACHABLE_brand";
$tdataEoc_catch[".inlineAddFields"][] = "mail1";
$tdataEoc_catch[".inlineAddFields"][] = "mail2";
$tdataEoc_catch[".inlineAddFields"][] = "line_check";
$tdataEoc_catch[".inlineAddFields"][] = "bank_details_code";
$tdataEoc_catch[".inlineAddFields"][] = "bank_details_deposit_type";
$tdataEoc_catch[".inlineAddFields"][] = "bank_details_blunch_name";
$tdataEoc_catch[".inlineAddFields"][] = "bank_details_blunch_code";
$tdataEoc_catch[".inlineAddFields"][] = "bank_details_account_number";
$tdataEoc_catch[".inlineAddFields"][] = "bank_details_symbol";
$tdataEoc_catch[".inlineAddFields"][] = "bank_details_number";
$tdataEoc_catch[".inlineAddFields"][] = "bank_details_account_name";
$tdataEoc_catch[".inlineAddFields"][] = "remark";

$tdataEoc_catch[".editFields"] = array();
$tdataEoc_catch[".editFields"][] = "space_10";
$tdataEoc_catch[".editFields"][] = "UN_REACHABLE";
$tdataEoc_catch[".editFields"][] = "UN_REACHABLE_brand";
$tdataEoc_catch[".editFields"][] = "created_t";
$tdataEoc_catch[".editFields"][] = "updated_at";
$tdataEoc_catch[".editFields"][] = "purchase_type";
$tdataEoc_catch[".editFields"][] = "ecc_id";
$tdataEoc_catch[".editFields"][] = "ecc_seq";
$tdataEoc_catch[".editFields"][] = "name1";
$tdataEoc_catch[".editFields"][] = "name2";
$tdataEoc_catch[".editFields"][] = "option5";
$tdataEoc_catch[".editFields"][] = "wareki";
$tdataEoc_catch[".editFields"][] = "b1";
$tdataEoc_catch[".editFields"][] = "b2";
$tdataEoc_catch[".editFields"][] = "b3";
$tdataEoc_catch[".editFields"][] = "age";
$tdataEoc_catch[".editFields"][] = "option11";
$tdataEoc_catch[".editFields"][] = "zip1";
$tdataEoc_catch[".editFields"][] = "zip2";
$tdataEoc_catch[".editFields"][] = "address1";
$tdataEoc_catch[".editFields"][] = "address2";
$tdataEoc_catch[".editFields"][] = "address3";
$tdataEoc_catch[".editFields"][] = "tel";
$tdataEoc_catch[".editFields"][] = "tel2";
$tdataEoc_catch[".editFields"][] = "fax";
$tdataEoc_catch[".editFields"][] = "mail1";
$tdataEoc_catch[".editFields"][] = "mail2";
$tdataEoc_catch[".editFields"][] = "hentou_houhou";
$tdataEoc_catch[".editFields"][] = "option12";
$tdataEoc_catch[".editFields"][] = "line_check";
$tdataEoc_catch[".editFields"][] = "remark";
$tdataEoc_catch[".editFields"][] = "bank_name";
$tdataEoc_catch[".editFields"][] = "bank_details_code";
$tdataEoc_catch[".editFields"][] = "bank_details_deposit_type";
$tdataEoc_catch[".editFields"][] = "bank_details_blunch_code";
$tdataEoc_catch[".editFields"][] = "bank_details_blunch_name";
$tdataEoc_catch[".editFields"][] = "bank_details_account_number";
$tdataEoc_catch[".editFields"][] = "bank_details_symbol";
$tdataEoc_catch[".editFields"][] = "bank_details_number";
$tdataEoc_catch[".editFields"][] = "bank_details_account_name";
$tdataEoc_catch[".editFields"][] = "new_name";
$tdataEoc_catch[".editFields"][] = "space_2";

$tdataEoc_catch[".inlineEditFields"] = array();
$tdataEoc_catch[".inlineEditFields"][] = "tel";
$tdataEoc_catch[".inlineEditFields"][] = "tel2";
$tdataEoc_catch[".inlineEditFields"][] = "zip1";
$tdataEoc_catch[".inlineEditFields"][] = "zip2";
$tdataEoc_catch[".inlineEditFields"][] = "address1";
$tdataEoc_catch[".inlineEditFields"][] = "address2";
$tdataEoc_catch[".inlineEditFields"][] = "address3";
$tdataEoc_catch[".inlineEditFields"][] = "name1";
$tdataEoc_catch[".inlineEditFields"][] = "name2";
$tdataEoc_catch[".inlineEditFields"][] = "option5";
$tdataEoc_catch[".inlineEditFields"][] = "wareki";
$tdataEoc_catch[".inlineEditFields"][] = "b1";
$tdataEoc_catch[".inlineEditFields"][] = "b2";
$tdataEoc_catch[".inlineEditFields"][] = "b3";
$tdataEoc_catch[".inlineEditFields"][] = "age";
$tdataEoc_catch[".inlineEditFields"][] = "ecc_seq";
$tdataEoc_catch[".inlineEditFields"][] = "created_t";
$tdataEoc_catch[".inlineEditFields"][] = "updated_at";
$tdataEoc_catch[".inlineEditFields"][] = "purchase_type";
$tdataEoc_catch[".inlineEditFields"][] = "UN_REACHABLE";
$tdataEoc_catch[".inlineEditFields"][] = "UN_REACHABLE_brand";
$tdataEoc_catch[".inlineEditFields"][] = "mail1";
$tdataEoc_catch[".inlineEditFields"][] = "mail2";
$tdataEoc_catch[".inlineEditFields"][] = "line_check";
$tdataEoc_catch[".inlineEditFields"][] = "bank_details_code";
$tdataEoc_catch[".inlineEditFields"][] = "bank_details_deposit_type";
$tdataEoc_catch[".inlineEditFields"][] = "bank_details_blunch_name";
$tdataEoc_catch[".inlineEditFields"][] = "bank_details_blunch_code";
$tdataEoc_catch[".inlineEditFields"][] = "bank_details_account_number";
$tdataEoc_catch[".inlineEditFields"][] = "bank_details_symbol";
$tdataEoc_catch[".inlineEditFields"][] = "bank_details_number";
$tdataEoc_catch[".inlineEditFields"][] = "bank_details_account_name";
$tdataEoc_catch[".inlineEditFields"][] = "remark";

$tdataEoc_catch[".updateSelectedFields"] = array();
$tdataEoc_catch[".updateSelectedFields"][] = "space_10";
$tdataEoc_catch[".updateSelectedFields"][] = "UN_REACHABLE";
$tdataEoc_catch[".updateSelectedFields"][] = "UN_REACHABLE_brand";
$tdataEoc_catch[".updateSelectedFields"][] = "created_t";
$tdataEoc_catch[".updateSelectedFields"][] = "updated_at";
$tdataEoc_catch[".updateSelectedFields"][] = "purchase_type";
$tdataEoc_catch[".updateSelectedFields"][] = "ecc_id";
$tdataEoc_catch[".updateSelectedFields"][] = "ecc_seq";
$tdataEoc_catch[".updateSelectedFields"][] = "option5";
$tdataEoc_catch[".updateSelectedFields"][] = "wareki";
$tdataEoc_catch[".updateSelectedFields"][] = "b1";
$tdataEoc_catch[".updateSelectedFields"][] = "b2";
$tdataEoc_catch[".updateSelectedFields"][] = "b3";
$tdataEoc_catch[".updateSelectedFields"][] = "age";
$tdataEoc_catch[".updateSelectedFields"][] = "option11";
$tdataEoc_catch[".updateSelectedFields"][] = "zip1";
$tdataEoc_catch[".updateSelectedFields"][] = "zip2";
$tdataEoc_catch[".updateSelectedFields"][] = "address1";
$tdataEoc_catch[".updateSelectedFields"][] = "address2";
$tdataEoc_catch[".updateSelectedFields"][] = "address3";
$tdataEoc_catch[".updateSelectedFields"][] = "tel";
$tdataEoc_catch[".updateSelectedFields"][] = "tel2";
$tdataEoc_catch[".updateSelectedFields"][] = "fax";
$tdataEoc_catch[".updateSelectedFields"][] = "mail1";
$tdataEoc_catch[".updateSelectedFields"][] = "mail2";
$tdataEoc_catch[".updateSelectedFields"][] = "hentou_houhou";
$tdataEoc_catch[".updateSelectedFields"][] = "option12";
$tdataEoc_catch[".updateSelectedFields"][] = "remark";
$tdataEoc_catch[".updateSelectedFields"][] = "bank_name";
$tdataEoc_catch[".updateSelectedFields"][] = "new_name";
$tdataEoc_catch[".updateSelectedFields"][] = "space_2";


$tdataEoc_catch[".exportFields"] = array();
$tdataEoc_catch[".exportFields"][] = "age";
$tdataEoc_catch[".exportFields"][] = "bank_name";
$tdataEoc_catch[".exportFields"][] = "name1";
$tdataEoc_catch[".exportFields"][] = "name2";
$tdataEoc_catch[".exportFields"][] = "option5";
$tdataEoc_catch[".exportFields"][] = "address1";
$tdataEoc_catch[".exportFields"][] = "b1";
$tdataEoc_catch[".exportFields"][] = "mail1";
$tdataEoc_catch[".exportFields"][] = "mail2";
$tdataEoc_catch[".exportFields"][] = "tel";
$tdataEoc_catch[".exportFields"][] = "tel2";
$tdataEoc_catch[".exportFields"][] = "ecc_id";
$tdataEoc_catch[".exportFields"][] = "UN_REACHABLE";
$tdataEoc_catch[".exportFields"][] = "UN_REACHABLE_brand";
$tdataEoc_catch[".exportFields"][] = "created_t";
$tdataEoc_catch[".exportFields"][] = "updated_at";
$tdataEoc_catch[".exportFields"][] = "purchase_type";
$tdataEoc_catch[".exportFields"][] = "ecc_seq";
$tdataEoc_catch[".exportFields"][] = "zip1";
$tdataEoc_catch[".exportFields"][] = "zip2";
$tdataEoc_catch[".exportFields"][] = "address2";
$tdataEoc_catch[".exportFields"][] = "address3";

$tdataEoc_catch[".importFields"] = array();
$tdataEoc_catch[".importFields"][] = "ecc_id";
$tdataEoc_catch[".importFields"][] = "ecc_seq";
$tdataEoc_catch[".importFields"][] = "UN_REACHABLE";
$tdataEoc_catch[".importFields"][] = "created_t";
$tdataEoc_catch[".importFields"][] = "updated_at";
$tdataEoc_catch[".importFields"][] = "purchase_type";
$tdataEoc_catch[".importFields"][] = "name1";
$tdataEoc_catch[".importFields"][] = "name2";
$tdataEoc_catch[".importFields"][] = "option5";
$tdataEoc_catch[".importFields"][] = "b1";
$tdataEoc_catch[".importFields"][] = "b2";
$tdataEoc_catch[".importFields"][] = "b3";
$tdataEoc_catch[".importFields"][] = "wareki";
$tdataEoc_catch[".importFields"][] = "option11";
$tdataEoc_catch[".importFields"][] = "zip1";
$tdataEoc_catch[".importFields"][] = "zip2";
$tdataEoc_catch[".importFields"][] = "address1";
$tdataEoc_catch[".importFields"][] = "address2";
$tdataEoc_catch[".importFields"][] = "address3";
$tdataEoc_catch[".importFields"][] = "tel";
$tdataEoc_catch[".importFields"][] = "tel2";
$tdataEoc_catch[".importFields"][] = "fax";
$tdataEoc_catch[".importFields"][] = "mail1";
$tdataEoc_catch[".importFields"][] = "mail2";
$tdataEoc_catch[".importFields"][] = "hentou_houhou";
$tdataEoc_catch[".importFields"][] = "option12";
$tdataEoc_catch[".importFields"][] = "line_check";
$tdataEoc_catch[".importFields"][] = "remark";
$tdataEoc_catch[".importFields"][] = "bank_details_code";
$tdataEoc_catch[".importFields"][] = "bank_details_deposit_type";
$tdataEoc_catch[".importFields"][] = "bank_details_blunch_name";
$tdataEoc_catch[".importFields"][] = "bank_details_blunch_code";
$tdataEoc_catch[".importFields"][] = "bank_details_account_number";
$tdataEoc_catch[".importFields"][] = "bank_details_symbol";
$tdataEoc_catch[".importFields"][] = "bank_details_number";
$tdataEoc_catch[".importFields"][] = "bank_details_account_name";
$tdataEoc_catch[".importFields"][] = "age";
$tdataEoc_catch[".importFields"][] = "bank_name";
$tdataEoc_catch[".importFields"][] = "UN_REACHABLE_brand";

$tdataEoc_catch[".printFields"] = array();

//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","ecc_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ecc_id`";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
	



		$edata["IsRequired"] = true;

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_catch["ecc_id"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","ecc_seq");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_catch["ecc_seq"] = $fdata;
//	UN_REACHABLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "UN_REACHABLE";
	$fdata["GoodName"] = "UN_REACHABLE";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","UN_REACHABLE");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UN_REACHABLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`UN_REACHABLE`";

	
	
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




	$tdataEoc_catch["UN_REACHABLE"] = $fdata;
//	created_t
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_t";
	$fdata["GoodName"] = "created_t";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","created_t");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "created_t";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`created_t`";

	
	
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

	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_catch["created_t"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
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

	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_catch["updated_at"] = $fdata;
//	purchase_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "purchase_type";
	$fdata["GoodName"] = "purchase_type";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","purchase_type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "purchase_name";

	
	$edata["LookupOrderBy"] = "sorter";

	
	
	
	

	
	
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




	$tdataEoc_catch["purchase_type"] = $fdata;
//	name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "name1";
	$fdata["GoodName"] = "name1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","name1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

	
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




	$tdataEoc_catch["name1"] = $fdata;
//	name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "name2";
	$fdata["GoodName"] = "name2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","name2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

	
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




	$tdataEoc_catch["name2"] = $fdata;
//	option5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "option5";
	$fdata["GoodName"] = "option5";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","option5");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "option5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`option5`";

	
	
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
	$edata["LookupValues"][] = "男性";
	$edata["LookupValues"][] = "女性";
	$edata["LookupValues"][] = "不明";

	
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




	$tdataEoc_catch["option5"] = $fdata;
//	b1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "b1";
	$fdata["GoodName"] = "b1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","b1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "b1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`b1`";

	
	
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
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 47;

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




	$tdataEoc_catch["b1"] = $fdata;
//	b2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "b2";
	$fdata["GoodName"] = "b2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","b2");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "b2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`b2`";

	
	
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
		
		$edata["controlWidth"] = 37;

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




	$tdataEoc_catch["b2"] = $fdata;
//	b3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "b3";
	$fdata["GoodName"] = "b3";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","b3");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "b3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`b3`";

	
	
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
		
		$edata["controlWidth"] = 27;

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




	$tdataEoc_catch["b3"] = $fdata;
//	wareki
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "wareki";
	$fdata["GoodName"] = "wareki";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","wareki");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "wareki";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`wareki`";

	
	
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
			$edata["EditParams"].= " maxlength=12";

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




	$tdataEoc_catch["wareki"] = $fdata;
//	option11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "option11";
	$fdata["GoodName"] = "option11";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","option11");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "option11";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`option11`";

	
	
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

	
	
	
				$edata["nRows"] = 40;
			$edata["nCols"] = 143;

	
	
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




	$tdataEoc_catch["option11"] = $fdata;
//	zip1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "zip1";
	$fdata["GoodName"] = "zip1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","zip1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zip1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`zip1`";

	
	
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




	$tdataEoc_catch["zip1"] = $fdata;
//	zip2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "zip2";
	$fdata["GoodName"] = "zip2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","zip2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zip2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`zip2`";

	
	
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
			$edata["EditParams"].= " maxlength=4";

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




	$tdataEoc_catch["zip2"] = $fdata;
//	address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "address1";
	$fdata["GoodName"] = "address1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","address1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "_pref";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "data";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "data";

	
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




	$tdataEoc_catch["address1"] = $fdata;
//	address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "address2";
	$fdata["GoodName"] = "address2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","address2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdataEoc_catch["address2"] = $fdata;
//	address3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "address3";
	$fdata["GoodName"] = "address3";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","address3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdataEoc_catch["address3"] = $fdata;
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","tel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tel`";

	
	
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




	$tdataEoc_catch["tel"] = $fdata;
//	tel2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "tel2";
	$fdata["GoodName"] = "tel2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","tel2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tel2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tel2`";

	
	
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




	$tdataEoc_catch["tel2"] = $fdata;
//	fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "fax";
	$fdata["GoodName"] = "fax";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","fax");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "fax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`fax`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_catch["fax"] = $fdata;
//	mail1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "mail1";
	$fdata["GoodName"] = "mail1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","mail1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mail1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mail1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Email Hyperlink");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdataEoc_catch["mail1"] = $fdata;
//	mail2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "mail2";
	$fdata["GoodName"] = "mail2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","mail2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mail2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mail2`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Email Hyperlink");

	
	
	
	
	
	
	
	
	
	
	
	
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




	$tdataEoc_catch["mail2"] = $fdata;
//	hentou_houhou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "hentou_houhou";
	$fdata["GoodName"] = "hentou_houhou";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","hentou_houhou");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "hentou_houhou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`hentou_houhou`";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "_hentou_houhou_type";
	$edata["LookupConnId"] = "internet_at_urlounge_co_jp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "data";

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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




	$tdataEoc_catch["hentou_houhou"] = $fdata;
//	option12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "option12";
	$fdata["GoodName"] = "option12";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","option12");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "option12";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`option12`";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "_shokugyou";
	$edata["LookupConnId"] = "internet_at_urlounge_co_jp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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




	$tdataEoc_catch["option12"] = $fdata;
//	line_check
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "line_check";
	$fdata["GoodName"] = "line_check";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","line_check");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "line_check";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`line_check`";

	
	
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




	$tdataEoc_catch["line_check"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","remark");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
	
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
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_catch["remark"] = $fdata;
//	bank_details_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "bank_details_code";
	$fdata["GoodName"] = "bank_details_code";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","bank_details_code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "mst_bank";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "bank_code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "bank_details_blunch_name";

	
	
	
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




	$tdataEoc_catch["bank_details_code"] = $fdata;
//	bank_details_deposit_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "bank_details_deposit_type";
	$fdata["GoodName"] = "bank_details_deposit_type";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","bank_details_deposit_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "bank_details_deposit_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`bank_details_deposit_type`";

	
	
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
	$edata["LookupValues"][] = "普通";
	$edata["LookupValues"][] = "貯蓄";
	$edata["LookupValues"][] = "当座";

	
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




	$tdataEoc_catch["bank_details_deposit_type"] = $fdata;
//	bank_details_blunch_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "bank_details_blunch_name";
	$fdata["GoodName"] = "bank_details_blunch_name";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","bank_details_blunch_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "bank_details_blunch_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`bank_details_blunch_name`";

	
	
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
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "name";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "bank_details_code", "lookup" => "bank_code" );

	
	

	
	
	
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




	$tdataEoc_catch["bank_details_blunch_name"] = $fdata;
//	bank_details_blunch_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "bank_details_blunch_code";
	$fdata["GoodName"] = "bank_details_blunch_code";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","bank_details_blunch_code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "bank_details_blunch_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`bank_details_blunch_code`";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_catch["bank_details_blunch_code"] = $fdata;
//	bank_details_account_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "bank_details_account_number";
	$fdata["GoodName"] = "bank_details_account_number";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","bank_details_account_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "bank_details_account_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`bank_details_account_number`";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_catch["bank_details_account_number"] = $fdata;
//	bank_details_symbol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "bank_details_symbol";
	$fdata["GoodName"] = "bank_details_symbol";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","bank_details_symbol");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "bank_details_symbol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`bank_details_symbol`";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_catch["bank_details_symbol"] = $fdata;
//	bank_details_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "bank_details_number";
	$fdata["GoodName"] = "bank_details_number";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","bank_details_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "bank_details_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`bank_details_number`";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_catch["bank_details_number"] = $fdata;
//	bank_details_account_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "bank_details_account_name";
	$fdata["GoodName"] = "bank_details_account_name";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","bank_details_account_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "bank_details_account_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`bank_details_account_name`";

	
	
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




	$tdataEoc_catch["bank_details_account_name"] = $fdata;
//	age
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "age";
	$fdata["GoodName"] = "age";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","age");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "age";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`age`";

	
	
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




	$tdataEoc_catch["age"] = $fdata;
//	bank_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "bank_name";
	$fdata["GoodName"] = "bank_name";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","bank_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bank_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`bank_name`";

	
	
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
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_catch["bank_name"] = $fdata;
//	space_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "space_1";
	$fdata["GoodName"] = "space_1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","space_1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "space_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(\"\")";

	
	
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
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_catch["space_1"] = $fdata;
//	space_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "space_2";
	$fdata["GoodName"] = "space_2";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","space_2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
		$fdata["strField"] = "space_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(\"\")";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_catch["space_2"] = $fdata;
//	space_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "space_3";
	$fdata["GoodName"] = "space_3";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","space_3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "space_3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(\"\")";

	
	
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
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_catch["space_3"] = $fdata;
//	space_4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "space_4";
	$fdata["GoodName"] = "space_4";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","space_4");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "space_4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(\"\")";

	
	
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
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_catch["space_4"] = $fdata;
//	space_5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "space_5";
	$fdata["GoodName"] = "space_5";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","space_5");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "space_5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(\"\")";

	
	
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
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_catch["space_5"] = $fdata;
//	space_6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "space_6";
	$fdata["GoodName"] = "space_6";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","space_6");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "space_6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(\"\")";

	
	
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
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_catch["space_6"] = $fdata;
//	space_7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "space_7";
	$fdata["GoodName"] = "space_7";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","space_7");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "space_7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(\"\")";

	
	
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
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_catch["space_7"] = $fdata;
//	space_8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "space_8";
	$fdata["GoodName"] = "space_8";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","space_8");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "space_8";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(\"\")";

	
	
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
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_catch["space_8"] = $fdata;
//	space_9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "space_9";
	$fdata["GoodName"] = "space_9";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","space_9");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "space_9";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(\"\")";

	
	
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
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_catch["space_9"] = $fdata;
//	space_10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "space_10";
	$fdata["GoodName"] = "space_10";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","space_10");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
		$fdata["strField"] = "space_10";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(\"\")";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
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
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_catch["space_10"] = $fdata;
//	UN_REACHABLE_brand
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "UN_REACHABLE_brand";
	$fdata["GoodName"] = "UN_REACHABLE_brand";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","UN_REACHABLE_brand");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "UN_REACHABLE_brand";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`UN_REACHABLE_brand`";

	
	
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




	$tdataEoc_catch["UN_REACHABLE_brand"] = $fdata;
//	sagawa_haisou_hoken
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "sagawa_haisou_hoken";
	$fdata["GoodName"] = "sagawa_haisou_hoken";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","sagawa_haisou_hoken");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sagawa_haisou_hoken";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sagawa_haisou_hoken`";

	
	
			
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








	$tdataEoc_catch["sagawa_haisou_hoken"] = $fdata;
//	haisou_bangou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "haisou_bangou";
	$fdata["GoodName"] = "haisou_bangou";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","haisou_bangou");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "haisou_bangou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`haisou_bangou`";

	
	
			
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








	$tdataEoc_catch["haisou_bangou"] = $fdata;
//	mail_check_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "mail_check_type";
	$fdata["GoodName"] = "mail_check_type";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","mail_check_type");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "mail_check_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mail_check_type`";

	
	
			
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
	$edata["LookupTable"] = "_mail_check_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "mail_check_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "mail_check_name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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








	$tdataEoc_catch["mail_check_type"] = $fdata;
//	new_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "new_name";
	$fdata["GoodName"] = "new_name";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","new_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
	
	
	
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








	$tdataEoc_catch["new_name"] = $fdata;
//	idfile_check_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "idfile_check_area";
	$fdata["GoodName"] = "idfile_check_area";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_catch","idfile_check_area");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ecc_id`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
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








	$tdataEoc_catch["idfile_check_area"] = $fdata;


$tables_data["Eoc_catch"]=&$tdataEoc_catch;
$field_labels["Eoc_catch"] = &$fieldLabelsEoc_catch;
$fieldToolTips["Eoc_catch"] = &$fieldToolTipsEoc_catch;
$placeHolders["Eoc_catch"] = &$placeHoldersEoc_catch;
$page_titles["Eoc_catch"] = &$pageTitlesEoc_catch;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_catch"] = array();
//	Eoc_chigins
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_chigins";
		$detailsParam["dOriginalTable"] = "Eoc_chigins";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_chigins";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_chigins");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc_catch"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_catch"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_catch"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc_catch"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_catch"][$dIndex]["detailKeys"][]="chigin_ecc_id";
//	Eoc_takuhai_for_catch
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_takuhai_for_catch";
		$detailsParam["dOriginalTable"] = "Eoc_takuhai";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_takuhai_for_catch";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_takuhai_for_catch");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc_catch"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_catch"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_catch"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc_catch"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_catch"][$dIndex]["detailKeys"][]="ecc_id";
//	Eoc_guestquestion_for_catch
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_guestquestion_for_catch";
		$detailsParam["dOriginalTable"] = "Eoc_guestquestion";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_guestquestion_for_catch";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_guestquestion_for_catch");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc_catch"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_catch"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_catch"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc_catch"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_catch"][$dIndex]["detailKeys"][]="ecc_id";
//	Eoc_takuhai_for_catch_history
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_takuhai_for_catch_history";
		$detailsParam["dOriginalTable"] = "Eoc_takuhai";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_takuhai_for_catch_history";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_takuhai_for_catch_history");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc_catch"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_catch"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_catch"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc_catch"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_catch"][$dIndex]["detailKeys"][]="ecc_id";
//	Eoc_timeline
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_timeline";
		$detailsParam["dOriginalTable"] = "Eoc_timeline";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_timeline";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_timeline");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 0;
		
	$detailsTablesData["Eoc_catch"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_catch"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_catch"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc_catch"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_catch"][$dIndex]["detailKeys"][]="ecc_id";

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_catch"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_catch()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`ecc_id`,  `ecc_seq`,  `UN_REACHABLE`,  `created_t`,  `updated_at`,  `purchase_type`,  `name1`,  `name2`,  `option5`,  `b1`,  `b2`,  `b3`,  `wareki`,  `option11`,  `zip1`,  `zip2`,  `address1`,  `address2`,  `address3`,  `tel`,  `tel2`,  `fax`,  `mail1`,  `mail2`,  `hentou_houhou`,  `option12`,  `line_check`,  `remark`,  `bank_details_code`,  `bank_details_deposit_type`,  `bank_details_blunch_name`,  `bank_details_blunch_code`,  `bank_details_account_number`,  `bank_details_symbol`,  `bank_details_number`,  `bank_details_account_name`,  `age`,  `bank_name`,  concat(\"\") AS `space_1`,  concat(\"\") AS `space_2`,  concat(\"\") AS `space_3`,  concat(\"\") AS `space_4`,  concat(\"\") AS `space_5`,  concat(\"\") AS `space_6`,  concat(\"\") AS `space_7`,  concat(\"\") AS `space_8`,  concat(\"\") AS `space_9`,  concat(\"\") AS `space_10`,  `UN_REACHABLE_brand`,  `sagawa_haisou_hoken`,  `haisou_bangou`,  `mail_check_type`,  `new_name`,  `ecc_id` AS `idfile_check_area`";
$proto0["m_strFrom"] = "FROM `Eoc`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `ecc_id` DESC";
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
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto6["m_sql"] = "`ecc_id`";
$proto6["m_srcTableName"] = "Eoc_catch";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto8["m_sql"] = "`ecc_seq`";
$proto8["m_srcTableName"] = "Eoc_catch";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "UN_REACHABLE",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto10["m_sql"] = "`UN_REACHABLE`";
$proto10["m_srcTableName"] = "Eoc_catch";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_t",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto12["m_sql"] = "`created_t`";
$proto12["m_srcTableName"] = "Eoc_catch";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto14["m_sql"] = "`updated_at`";
$proto14["m_srcTableName"] = "Eoc_catch";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "purchase_type",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto16["m_sql"] = "`purchase_type`";
$proto16["m_srcTableName"] = "Eoc_catch";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "name1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto18["m_sql"] = "`name1`";
$proto18["m_srcTableName"] = "Eoc_catch";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto20["m_sql"] = "`name2`";
$proto20["m_srcTableName"] = "Eoc_catch";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "option5",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto22["m_sql"] = "`option5`";
$proto22["m_srcTableName"] = "Eoc_catch";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "b1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto24["m_sql"] = "`b1`";
$proto24["m_srcTableName"] = "Eoc_catch";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "b2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto26["m_sql"] = "`b2`";
$proto26["m_srcTableName"] = "Eoc_catch";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "b3",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto28["m_sql"] = "`b3`";
$proto28["m_srcTableName"] = "Eoc_catch";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "wareki",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto30["m_sql"] = "`wareki`";
$proto30["m_srcTableName"] = "Eoc_catch";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "option11",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto32["m_sql"] = "`option11`";
$proto32["m_srcTableName"] = "Eoc_catch";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "zip1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto34["m_sql"] = "`zip1`";
$proto34["m_srcTableName"] = "Eoc_catch";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "zip2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto36["m_sql"] = "`zip2`";
$proto36["m_srcTableName"] = "Eoc_catch";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "address1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto38["m_sql"] = "`address1`";
$proto38["m_srcTableName"] = "Eoc_catch";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "address2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto40["m_sql"] = "`address2`";
$proto40["m_srcTableName"] = "Eoc_catch";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "address3",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto42["m_sql"] = "`address3`";
$proto42["m_srcTableName"] = "Eoc_catch";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto44["m_sql"] = "`tel`";
$proto44["m_srcTableName"] = "Eoc_catch";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "tel2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto46["m_sql"] = "`tel2`";
$proto46["m_srcTableName"] = "Eoc_catch";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "fax",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto48["m_sql"] = "`fax`";
$proto48["m_srcTableName"] = "Eoc_catch";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "mail1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto50["m_sql"] = "`mail1`";
$proto50["m_srcTableName"] = "Eoc_catch";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "mail2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto52["m_sql"] = "`mail2`";
$proto52["m_srcTableName"] = "Eoc_catch";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "hentou_houhou",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto54["m_sql"] = "`hentou_houhou`";
$proto54["m_srcTableName"] = "Eoc_catch";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "option12",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto56["m_sql"] = "`option12`";
$proto56["m_srcTableName"] = "Eoc_catch";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "line_check",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto58["m_sql"] = "`line_check`";
$proto58["m_srcTableName"] = "Eoc_catch";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto60["m_sql"] = "`remark`";
$proto60["m_srcTableName"] = "Eoc_catch";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_code",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto62["m_sql"] = "`bank_details_code`";
$proto62["m_srcTableName"] = "Eoc_catch";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_deposit_type",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto64["m_sql"] = "`bank_details_deposit_type`";
$proto64["m_srcTableName"] = "Eoc_catch";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_blunch_name",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto66["m_sql"] = "`bank_details_blunch_name`";
$proto66["m_srcTableName"] = "Eoc_catch";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_blunch_code",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto68["m_sql"] = "`bank_details_blunch_code`";
$proto68["m_srcTableName"] = "Eoc_catch";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_account_number",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto70["m_sql"] = "`bank_details_account_number`";
$proto70["m_srcTableName"] = "Eoc_catch";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_symbol",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto72["m_sql"] = "`bank_details_symbol`";
$proto72["m_srcTableName"] = "Eoc_catch";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_number",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto74["m_sql"] = "`bank_details_number`";
$proto74["m_srcTableName"] = "Eoc_catch";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_account_name",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto76["m_sql"] = "`bank_details_account_name`";
$proto76["m_srcTableName"] = "Eoc_catch";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "age",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto78["m_sql"] = "`age`";
$proto78["m_srcTableName"] = "Eoc_catch";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_name",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto80["m_sql"] = "`bank_name`";
$proto80["m_srcTableName"] = "Eoc_catch";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$proto83=array();
$proto83["m_functiontype"] = "SQLF_CUSTOM";
$proto83["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto83["m_arguments"][]=$obj;
$proto83["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto83);

$proto82["m_sql"] = "concat(\"\")";
$proto82["m_srcTableName"] = "Eoc_catch";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "space_1";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto85=array();
			$proto86=array();
$proto86["m_functiontype"] = "SQLF_CUSTOM";
$proto86["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto86["m_arguments"][]=$obj;
$proto86["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto86);

$proto85["m_sql"] = "concat(\"\")";
$proto85["m_srcTableName"] = "Eoc_catch";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "space_2";
$obj = new SQLFieldListItem($proto85);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$proto89=array();
$proto89["m_functiontype"] = "SQLF_CUSTOM";
$proto89["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto89["m_arguments"][]=$obj;
$proto89["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto89);

$proto88["m_sql"] = "concat(\"\")";
$proto88["m_srcTableName"] = "Eoc_catch";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "space_3";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$proto92=array();
$proto92["m_functiontype"] = "SQLF_CUSTOM";
$proto92["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto92["m_arguments"][]=$obj;
$proto92["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto92);

$proto91["m_sql"] = "concat(\"\")";
$proto91["m_srcTableName"] = "Eoc_catch";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "space_4";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$proto95=array();
$proto95["m_functiontype"] = "SQLF_CUSTOM";
$proto95["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto95["m_arguments"][]=$obj;
$proto95["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto95);

$proto94["m_sql"] = "concat(\"\")";
$proto94["m_srcTableName"] = "Eoc_catch";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "space_5";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$proto98=array();
$proto98["m_functiontype"] = "SQLF_CUSTOM";
$proto98["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto98["m_arguments"][]=$obj;
$proto98["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto98);

$proto97["m_sql"] = "concat(\"\")";
$proto97["m_srcTableName"] = "Eoc_catch";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "space_6";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$proto101=array();
$proto101["m_functiontype"] = "SQLF_CUSTOM";
$proto101["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto101["m_arguments"][]=$obj;
$proto101["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto101);

$proto100["m_sql"] = "concat(\"\")";
$proto100["m_srcTableName"] = "Eoc_catch";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "space_7";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto103=array();
			$proto104=array();
$proto104["m_functiontype"] = "SQLF_CUSTOM";
$proto104["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto104["m_arguments"][]=$obj;
$proto104["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto104);

$proto103["m_sql"] = "concat(\"\")";
$proto103["m_srcTableName"] = "Eoc_catch";
$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "space_8";
$obj = new SQLFieldListItem($proto103);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$proto107=array();
$proto107["m_functiontype"] = "SQLF_CUSTOM";
$proto107["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto107["m_arguments"][]=$obj;
$proto107["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto107);

$proto106["m_sql"] = "concat(\"\")";
$proto106["m_srcTableName"] = "Eoc_catch";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "space_9";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto109=array();
			$proto110=array();
$proto110["m_functiontype"] = "SQLF_CUSTOM";
$proto110["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto110["m_arguments"][]=$obj;
$proto110["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto110);

$proto109["m_sql"] = "concat(\"\")";
$proto109["m_srcTableName"] = "Eoc_catch";
$proto109["m_expr"]=$obj;
$proto109["m_alias"] = "space_10";
$obj = new SQLFieldListItem($proto109);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "UN_REACHABLE_brand",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto112["m_sql"] = "`UN_REACHABLE_brand`";
$proto112["m_srcTableName"] = "Eoc_catch";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "sagawa_haisou_hoken",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto114["m_sql"] = "`sagawa_haisou_hoken`";
$proto114["m_srcTableName"] = "Eoc_catch";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "haisou_bangou",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto116["m_sql"] = "`haisou_bangou`";
$proto116["m_srcTableName"] = "Eoc_catch";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "mail_check_type",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto118["m_sql"] = "`mail_check_type`";
$proto118["m_srcTableName"] = "Eoc_catch";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "new_name",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto120["m_sql"] = "`new_name`";
$proto120["m_srcTableName"] = "Eoc_catch";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto122["m_sql"] = "`ecc_id`";
$proto122["m_srcTableName"] = "Eoc_catch";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "idfile_check_area";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto124=array();
$proto124["m_link"] = "SQLL_MAIN";
			$proto125=array();
$proto125["m_strName"] = "Eoc";
$proto125["m_srcTableName"] = "Eoc_catch";
$proto125["m_columns"] = array();
$proto125["m_columns"][] = "ecc_id";
$proto125["m_columns"][] = "ecc_seq";
$proto125["m_columns"][] = "name1";
$proto125["m_columns"][] = "created_t";
$proto125["m_columns"][] = "registerd_id";
$proto125["m_columns"][] = "kaitori_staff_id";
$proto125["m_columns"][] = "name2";
$proto125["m_columns"][] = "wareki";
$proto125["m_columns"][] = "b1";
$proto125["m_columns"][] = "b2";
$proto125["m_columns"][] = "b3";
$proto125["m_columns"][] = "birth_day";
$proto125["m_columns"][] = "age";
$proto125["m_columns"][] = "zip";
$proto125["m_columns"][] = "zip1";
$proto125["m_columns"][] = "zip2";
$proto125["m_columns"][] = "address1";
$proto125["m_columns"][] = "address2";
$proto125["m_columns"][] = "address3";
$proto125["m_columns"][] = "tel";
$proto125["m_columns"][] = "tel2";
$proto125["m_columns"][] = "mail1";
$proto125["m_columns"][] = "mail2";
$proto125["m_columns"][] = "address_code";
$proto125["m_columns"][] = "bank_name";
$proto125["m_columns"][] = "bank_blunch_code";
$proto125["m_columns"][] = "bank_yokin_shubetu";
$proto125["m_columns"][] = "bank_account";
$proto125["m_columns"][] = "bank_acoount_name";
$proto125["m_columns"][] = "haisou_bangou";
$proto125["m_columns"][] = "sise_houhou";
$proto125["m_columns"][] = "hentou_houhou";
$proto125["m_columns"][] = "hentou_houhou_time";
$proto125["m_columns"][] = "mousikomi_id";
$proto125["m_columns"][] = "hituyou_shorui";
$proto125["m_columns"][] = "seiyaku_fuseiritu";
$proto125["m_columns"][] = "mitumori_taku";
$proto125["m_columns"][] = "seacanse";
$proto125["m_columns"][] = "remark";
$proto125["m_columns"][] = "type";
$proto125["m_columns"][] = "sales_flag";
$proto125["m_columns"][] = "src_type";
$proto125["m_columns"][] = "liquidation_shop_code";
$proto125["m_columns"][] = "insurance_amount_print";
$proto125["m_columns"][] = "jis_code";
$proto125["m_columns"][] = "updated_at";
$proto125["m_columns"][] = "_registerd_id";
$proto125["m_columns"][] = "mail_check_type";
$proto125["m_columns"][] = "purchase_type";
$proto125["m_columns"][] = "sex";
$proto125["m_columns"][] = "m_tel";
$proto125["m_columns"][] = "fax";
$proto125["m_columns"][] = "chigin_kaitori";
$proto125["m_columns"][] = "option1";
$proto125["m_columns"][] = "option2";
$proto125["m_columns"][] = "option3";
$proto125["m_columns"][] = "option4";
$proto125["m_columns"][] = "option5";
$proto125["m_columns"][] = "option6";
$proto125["m_columns"][] = "option7";
$proto125["m_columns"][] = "option8";
$proto125["m_columns"][] = "option9";
$proto125["m_columns"][] = "option10";
$proto125["m_columns"][] = "option11";
$proto125["m_columns"][] = "option12";
$proto125["m_columns"][] = "option13";
$proto125["m_columns"][] = "rakuda_csv_flag";
$proto125["m_columns"][] = "EOC_COURIER_CHECK";
$proto125["m_columns"][] = "EOC_SIZE";
$proto125["m_columns"][] = "EOC_NUMBER";
$proto125["m_columns"][] = "EOC_REUSE";
$proto125["m_columns"][] = "EOC__DELIVERY_DATES";
$proto125["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto125["m_columns"][] = "FIRST_NAME2";
$proto125["m_columns"][] = "LAST_NAME2";
$proto125["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto125["m_columns"][] = "EOC__BOX_NUMBER";
$proto125["m_columns"][] = "FIRST_NAME_KANA";
$proto125["m_columns"][] = "LAST_NAME_KANA";
$proto125["m_columns"][] = "FLAG_SPEED";
$proto125["m_columns"][] = "SEARCH_MEDIA";
$proto125["m_columns"][] = "SEARCH_SITE";
$proto125["m_columns"][] = "UN_REACHABLE";
$proto125["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto125["m_columns"][] = "FLG_MAIL_OTHER";
$proto125["m_columns"][] = "ALLSEIYAKU";
$proto125["m_columns"][] = "ICHIBUSEIYAKU";
$proto125["m_columns"][] = "seiyakukin";
$proto125["m_columns"][] = "kaitorihuka";
$proto125["m_columns"][] = "awazu_date";
$proto125["m_columns"][] = "seiyaku_price";
$proto125["m_columns"][] = "eoc_search_keyword";
$proto125["m_columns"][] = "sonota";
$proto125["m_columns"][] = "size_kosuu";
$proto125["m_columns"][] = "sagawa_shuuka_flag";
$proto125["m_columns"][] = "line_check";
$proto125["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto125["m_columns"][] = "kaitori_sougak";
$proto125["m_columns"][] = "flag";
$proto125["m_columns"][] = "key_code";
$proto125["m_columns"][] = "dm_check_type";
$proto125["m_columns"][] = "kit_flag";
$proto125["m_columns"][] = "kit_done_flag";
$proto125["m_columns"][] = "bank_details_code";
$proto125["m_columns"][] = "bank_details_blunch_name";
$proto125["m_columns"][] = "bank_details_blunch_code";
$proto125["m_columns"][] = "bank_details_account_number";
$proto125["m_columns"][] = "bank_details_symbol";
$proto125["m_columns"][] = "bank_details_number";
$proto125["m_columns"][] = "bank_details_account_name";
$proto125["m_columns"][] = "bank_details_deposit_type";
$proto125["m_columns"][] = "mypage_id";
$proto125["m_columns"][] = "UN_REACHABLE_brand";
$proto125["m_columns"][] = "sagawa_haisou_hoken";
$proto125["m_columns"][] = "transfer_confirm";
$proto125["m_columns"][] = "outside_bank";
$proto125["m_columns"][] = "new_name";
$proto125["m_columns"][] = "letterpack";
$proto125["m_columns"][] = "satei_saisoku_2_days";
$proto125["m_columns"][] = "satei_saisoku_7_days";
$proto125["m_columns"][] = "accept_flag";
$proto125["m_columns"][] = "delivery_flag";
$proto125["m_columns"][] = "refining_weight";
$proto125["m_columns"][] = "line_chat_url";
$proto125["m_columns"][] = "royal_customer_status";
$proto125["m_columns"][] = "is_business_customer";
$proto125["m_columns"][] = "is_exist_haisouhosyo";
$proto125["m_columns"][] = "meigi_hankaku_kana";
$proto125["m_columns"][] = "building_types";
$proto125["m_columns"][] = "dwelling_types";
$proto125["m_columns"][] = "is_yamato_csv";
$proto125["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto125);

$proto124["m_table"] = $obj;
$proto124["m_sql"] = "`Eoc`";
$proto124["m_alias"] = "";
$proto124["m_srcTableName"] = "Eoc_catch";
$proto126=array();
$proto126["m_sql"] = "";
$proto126["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto126["m_column"]=$obj;
$proto126["m_contained"] = array();
$proto126["m_strCase"] = "";
$proto126["m_havingmode"] = false;
$proto126["m_inBrackets"] = false;
$proto126["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto126);

$proto124["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto124);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto128=array();
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_catch"
));

$proto128["m_column"]=$obj;
$proto128["m_bAsc"] = 0;
$proto128["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto128);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_catch";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_catch = createSqlQuery_Eoc_catch();


	
		;

																																																						

$tdataEoc_catch[".sqlquery"] = $queryData_Eoc_catch;

include_once(getabspath("include/Eoc_catch_events.php"));
$tableEvents["Eoc_catch"] = new eventclass_Eoc_catch;
$tdataEoc_catch[".hasEvents"] = true;

?>