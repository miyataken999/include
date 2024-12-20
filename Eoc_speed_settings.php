<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_speed = array();
	$tdataEoc_speed[".truncateText"] = true;
	$tdataEoc_speed[".NumberOfChars"] = 80;
	$tdataEoc_speed[".ShortName"] = "Eoc_speed";
	$tdataEoc_speed[".OwnerID"] = "";
	$tdataEoc_speed[".OriginalTable"] = "Eoc";

//	field labels
$fieldLabelsEoc_speed = array();
$fieldToolTipsEoc_speed = array();
$pageTitlesEoc_speed = array();
$placeHoldersEoc_speed = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_speed["Japanese"] = array();
	$fieldToolTipsEoc_speed["Japanese"] = array();
	$placeHoldersEoc_speed["Japanese"] = array();
	$pageTitlesEoc_speed["Japanese"] = array();
	$fieldLabelsEoc_speed["Japanese"]["ecc_id"] = "お客様管理番号";
	$fieldToolTipsEoc_speed["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc_speed["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc_speed["Japanese"]["name1"] = "お届け先名";
	$fieldToolTipsEoc_speed["Japanese"]["name1"] = "";
	$placeHoldersEoc_speed["Japanese"]["name1"] = "";
	$fieldLabelsEoc_speed["Japanese"]["name2"] = "お届け先名(ｶﾅ)";
	$fieldToolTipsEoc_speed["Japanese"]["name2"] = "";
	$placeHoldersEoc_speed["Japanese"]["name2"] = "";
	$fieldLabelsEoc_speed["Japanese"]["zip1"] = "郵便番号";
	$fieldToolTipsEoc_speed["Japanese"]["zip1"] = "";
	$placeHoldersEoc_speed["Japanese"]["zip1"] = "";
	$fieldLabelsEoc_speed["Japanese"]["zip2"] = "郵便番号２";
	$fieldToolTipsEoc_speed["Japanese"]["zip2"] = "";
	$placeHoldersEoc_speed["Japanese"]["zip2"] = "";
	$fieldLabelsEoc_speed["Japanese"]["address1"] = "都道府県";
	$fieldToolTipsEoc_speed["Japanese"]["address1"] = "";
	$placeHoldersEoc_speed["Japanese"]["address1"] = "";
	$fieldLabelsEoc_speed["Japanese"]["address2"] = "市町村区郡";
	$fieldToolTipsEoc_speed["Japanese"]["address2"] = "";
	$placeHoldersEoc_speed["Japanese"]["address2"] = "";
	$fieldLabelsEoc_speed["Japanese"]["address3"] = "以下住所";
	$fieldToolTipsEoc_speed["Japanese"]["address3"] = "";
	$placeHoldersEoc_speed["Japanese"]["address3"] = "";
	$fieldLabelsEoc_speed["Japanese"]["tel"] = "お届け先電話番号";
	$fieldToolTipsEoc_speed["Japanese"]["tel"] = "";
	$placeHoldersEoc_speed["Japanese"]["tel"] = "";
	$fieldLabelsEoc_speed["Japanese"]["tel2"] = "携帯";
	$fieldToolTipsEoc_speed["Japanese"]["tel2"] = "";
	$placeHoldersEoc_speed["Japanese"]["tel2"] = "";
	$fieldLabelsEoc_speed["Japanese"]["mail1"] = "メアド";
	$fieldToolTipsEoc_speed["Japanese"]["mail1"] = "";
	$placeHoldersEoc_speed["Japanese"]["mail1"] = "";
	$fieldLabelsEoc_speed["Japanese"]["mail2"] = "メアド２";
	$fieldToolTipsEoc_speed["Japanese"]["mail2"] = "";
	$placeHoldersEoc_speed["Japanese"]["mail2"] = "";
	$fieldLabelsEoc_speed["Japanese"]["FLAG_SPEED"] = "スピード";
	$fieldToolTipsEoc_speed["Japanese"]["FLAG_SPEED"] = "";
	$placeHoldersEoc_speed["Japanese"]["FLAG_SPEED"] = "";
	$fieldLabelsEoc_speed["Japanese"]["haisou_bangou"] = "伝票番号";
	$fieldToolTipsEoc_speed["Japanese"]["haisou_bangou"] = "";
	$placeHoldersEoc_speed["Japanese"]["haisou_bangou"] = "";
	$fieldLabelsEoc_speed["Japanese"]["dummy"] = "Dummy";
	$fieldToolTipsEoc_speed["Japanese"]["dummy"] = "";
	$placeHoldersEoc_speed["Japanese"]["dummy"] = "";
	$fieldLabelsEoc_speed["Japanese"]["zip"] = "お届け先郵便番号";
	$fieldToolTipsEoc_speed["Japanese"]["zip"] = "";
	$placeHoldersEoc_speed["Japanese"]["zip"] = "";
	$fieldLabelsEoc_speed["Japanese"]["address"] = "お届け先住所";
	$fieldToolTipsEoc_speed["Japanese"]["address"] = "";
	$placeHoldersEoc_speed["Japanese"]["address"] = "";
	$fieldLabelsEoc_speed["Japanese"]["line_check"] = "ライン本確";
	$fieldToolTipsEoc_speed["Japanese"]["line_check"] = "";
	$placeHoldersEoc_speed["Japanese"]["line_check"] = "";
	$fieldLabelsEoc_speed["Japanese"]["shukka_date"] = "出荷予定日";
	$fieldToolTipsEoc_speed["Japanese"]["shukka_date"] = "";
	$placeHoldersEoc_speed["Japanese"]["shukka_date"] = "";
	$fieldLabelsEoc_speed["Japanese"]["send_type"] = "送り状種類";
	$fieldToolTipsEoc_speed["Japanese"]["send_type"] = "";
	$placeHoldersEoc_speed["Japanese"]["send_type"] = "";
	$fieldLabelsEoc_speed["Japanese"]["irai_tel"] = "ご依頼主電話番号";
	$fieldToolTipsEoc_speed["Japanese"]["irai_tel"] = "";
	$placeHoldersEoc_speed["Japanese"]["irai_tel"] = "";
	$fieldLabelsEoc_speed["Japanese"]["irai_zip"] = "ご依頼主郵便番号";
	$fieldToolTipsEoc_speed["Japanese"]["irai_zip"] = "";
	$placeHoldersEoc_speed["Japanese"]["irai_zip"] = "";
	$fieldLabelsEoc_speed["Japanese"]["irai_address"] = "ご依頼主住所";
	$fieldToolTipsEoc_speed["Japanese"]["irai_address"] = "";
	$placeHoldersEoc_speed["Japanese"]["irai_address"] = "";
	$fieldLabelsEoc_speed["Japanese"]["irai_name"] = "ご依頼主名";
	$fieldToolTipsEoc_speed["Japanese"]["irai_name"] = "";
	$placeHoldersEoc_speed["Japanese"]["irai_name"] = "";
	$fieldLabelsEoc_speed["Japanese"]["hinmei1"] = "品名1";
	$fieldToolTipsEoc_speed["Japanese"]["hinmei1"] = "";
	$placeHoldersEoc_speed["Japanese"]["hinmei1"] = "";
	$fieldLabelsEoc_speed["Japanese"]["seikyuu_code"] = "請求先顧客コード";
	$fieldToolTipsEoc_speed["Japanese"]["seikyuu_code"] = "";
	$placeHoldersEoc_speed["Japanese"]["seikyuu_code"] = "";
	$fieldLabelsEoc_speed["Japanese"]["unchin_num"] = "運賃管理番号";
	$fieldToolTipsEoc_speed["Japanese"]["unchin_num"] = "";
	$placeHoldersEoc_speed["Japanese"]["unchin_num"] = "";
	$fieldLabelsEoc_speed["Japanese"]["eoc_speed_event"] = "スピード希望集荷日時";
	$fieldToolTipsEoc_speed["Japanese"]["eoc_speed_event"] = "";
	$placeHoldersEoc_speed["Japanese"]["eoc_speed_event"] = "";
	if (count($fieldToolTipsEoc_speed["Japanese"]))
		$tdataEoc_speed[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_speed[""] = array();
	$fieldToolTipsEoc_speed[""] = array();
	$placeHoldersEoc_speed[""] = array();
	$pageTitlesEoc_speed[""] = array();
	$fieldLabelsEoc_speed[""]["haisou_bangou"] = "Haisou Bangou";
	$fieldToolTipsEoc_speed[""]["haisou_bangou"] = "";
	$placeHoldersEoc_speed[""]["haisou_bangou"] = "";
	$fieldLabelsEoc_speed[""]["dummy"] = "Dummy";
	$fieldToolTipsEoc_speed[""]["dummy"] = "";
	$placeHoldersEoc_speed[""]["dummy"] = "";
	$fieldLabelsEoc_speed[""]["zip"] = "Zip";
	$fieldToolTipsEoc_speed[""]["zip"] = "";
	$placeHoldersEoc_speed[""]["zip"] = "";
	$fieldLabelsEoc_speed[""]["address"] = "Address";
	$fieldToolTipsEoc_speed[""]["address"] = "";
	$placeHoldersEoc_speed[""]["address"] = "";
	$fieldLabelsEoc_speed[""]["line_check"] = "Line Check";
	$fieldToolTipsEoc_speed[""]["line_check"] = "";
	$placeHoldersEoc_speed[""]["line_check"] = "";
	$fieldLabelsEoc_speed[""]["shukka_date"] = "Shukka Date";
	$fieldToolTipsEoc_speed[""]["shukka_date"] = "";
	$placeHoldersEoc_speed[""]["shukka_date"] = "";
	$fieldLabelsEoc_speed[""]["send_type"] = "Send Type";
	$fieldToolTipsEoc_speed[""]["send_type"] = "";
	$placeHoldersEoc_speed[""]["send_type"] = "";
	$fieldLabelsEoc_speed[""]["irai_tel"] = "Irai Tel";
	$fieldToolTipsEoc_speed[""]["irai_tel"] = "";
	$placeHoldersEoc_speed[""]["irai_tel"] = "";
	$fieldLabelsEoc_speed[""]["irai_zip"] = "Irai Zip";
	$fieldToolTipsEoc_speed[""]["irai_zip"] = "";
	$placeHoldersEoc_speed[""]["irai_zip"] = "";
	$fieldLabelsEoc_speed[""]["irai_address"] = "Irai Address";
	$fieldToolTipsEoc_speed[""]["irai_address"] = "";
	$placeHoldersEoc_speed[""]["irai_address"] = "";
	$fieldLabelsEoc_speed[""]["irai_name"] = "Irai Name";
	$fieldToolTipsEoc_speed[""]["irai_name"] = "";
	$placeHoldersEoc_speed[""]["irai_name"] = "";
	$fieldLabelsEoc_speed[""]["hinmei1"] = "Hinmei1";
	$fieldToolTipsEoc_speed[""]["hinmei1"] = "";
	$placeHoldersEoc_speed[""]["hinmei1"] = "";
	$fieldLabelsEoc_speed[""]["seikyuu_code"] = "Seikyuu Code";
	$fieldToolTipsEoc_speed[""]["seikyuu_code"] = "";
	$placeHoldersEoc_speed[""]["seikyuu_code"] = "";
	$fieldLabelsEoc_speed[""]["unchin_num"] = "Unchin Num";
	$fieldToolTipsEoc_speed[""]["unchin_num"] = "";
	$placeHoldersEoc_speed[""]["unchin_num"] = "";
	$fieldLabelsEoc_speed[""]["eoc_speed_event"] = "Eoc Speed Event";
	$fieldToolTipsEoc_speed[""]["eoc_speed_event"] = "";
	$placeHoldersEoc_speed[""]["eoc_speed_event"] = "";
	if (count($fieldToolTipsEoc_speed[""]))
		$tdataEoc_speed[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_speed["English"] = array();
	$fieldToolTipsEoc_speed["English"] = array();
	$placeHoldersEoc_speed["English"] = array();
	$pageTitlesEoc_speed["English"] = array();
	$fieldLabelsEoc_speed["English"]["haisou_bangou"] = "Haisou Bangou";
	$fieldToolTipsEoc_speed["English"]["haisou_bangou"] = "";
	$placeHoldersEoc_speed["English"]["haisou_bangou"] = "";
	$fieldLabelsEoc_speed["English"]["dummy"] = "Dummy";
	$fieldToolTipsEoc_speed["English"]["dummy"] = "";
	$placeHoldersEoc_speed["English"]["dummy"] = "";
	$fieldLabelsEoc_speed["English"]["zip"] = "Zip";
	$fieldToolTipsEoc_speed["English"]["zip"] = "";
	$placeHoldersEoc_speed["English"]["zip"] = "";
	$fieldLabelsEoc_speed["English"]["address"] = "Address";
	$fieldToolTipsEoc_speed["English"]["address"] = "";
	$placeHoldersEoc_speed["English"]["address"] = "";
	$fieldLabelsEoc_speed["English"]["line_check"] = "Line Check";
	$fieldToolTipsEoc_speed["English"]["line_check"] = "";
	$placeHoldersEoc_speed["English"]["line_check"] = "";
	$fieldLabelsEoc_speed["English"]["shukka_date"] = "Shukka Date";
	$fieldToolTipsEoc_speed["English"]["shukka_date"] = "";
	$placeHoldersEoc_speed["English"]["shukka_date"] = "";
	$fieldLabelsEoc_speed["English"]["send_type"] = "Send Type";
	$fieldToolTipsEoc_speed["English"]["send_type"] = "";
	$placeHoldersEoc_speed["English"]["send_type"] = "";
	$fieldLabelsEoc_speed["English"]["irai_tel"] = "Irai Tel";
	$fieldToolTipsEoc_speed["English"]["irai_tel"] = "";
	$placeHoldersEoc_speed["English"]["irai_tel"] = "";
	$fieldLabelsEoc_speed["English"]["irai_zip"] = "Irai Zip";
	$fieldToolTipsEoc_speed["English"]["irai_zip"] = "";
	$placeHoldersEoc_speed["English"]["irai_zip"] = "";
	$fieldLabelsEoc_speed["English"]["irai_address"] = "Irai Address";
	$fieldToolTipsEoc_speed["English"]["irai_address"] = "";
	$placeHoldersEoc_speed["English"]["irai_address"] = "";
	$fieldLabelsEoc_speed["English"]["irai_name"] = "Irai Name";
	$fieldToolTipsEoc_speed["English"]["irai_name"] = "";
	$placeHoldersEoc_speed["English"]["irai_name"] = "";
	$fieldLabelsEoc_speed["English"]["hinmei1"] = "Hinmei1";
	$fieldToolTipsEoc_speed["English"]["hinmei1"] = "";
	$placeHoldersEoc_speed["English"]["hinmei1"] = "";
	$fieldLabelsEoc_speed["English"]["seikyuu_code"] = "Seikyuu Code";
	$fieldToolTipsEoc_speed["English"]["seikyuu_code"] = "";
	$placeHoldersEoc_speed["English"]["seikyuu_code"] = "";
	$fieldLabelsEoc_speed["English"]["unchin_num"] = "Unchin Num";
	$fieldToolTipsEoc_speed["English"]["unchin_num"] = "";
	$placeHoldersEoc_speed["English"]["unchin_num"] = "";
	$fieldLabelsEoc_speed["English"]["eoc_speed_event"] = "Eoc Speed Event";
	$fieldToolTipsEoc_speed["English"]["eoc_speed_event"] = "";
	$placeHoldersEoc_speed["English"]["eoc_speed_event"] = "";
	if (count($fieldToolTipsEoc_speed["English"]))
		$tdataEoc_speed[".isUseToolTips"] = true;
}


	$tdataEoc_speed[".NCSearch"] = true;



$tdataEoc_speed[".shortTableName"] = "Eoc_speed";
$tdataEoc_speed[".nSecOptions"] = 0;
$tdataEoc_speed[".recsPerRowPrint"] = 1;
$tdataEoc_speed[".mainTableOwnerID"] = "";
$tdataEoc_speed[".moveNext"] = 1;
$tdataEoc_speed[".entityType"] = 1;

$tdataEoc_speed[".strOriginalTableName"] = "Eoc";

	



$tdataEoc_speed[".showAddInPopup"] = false;

$tdataEoc_speed[".showEditInPopup"] = false;

$tdataEoc_speed[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_speed[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_speed[".fieldsForRegister"] = array();

$tdataEoc_speed[".listAjax"] = false;

	$tdataEoc_speed[".audit"] = true;

	$tdataEoc_speed[".locking"] = false;



$tdataEoc_speed[".list"] = true;

$tdataEoc_speed[".inlineEdit"] = true;


$tdataEoc_speed[".reorderRecordsByHeader"] = true;
$tdataEoc_speed[".createSortByDropdown"] = true;
$tdataEoc_speed[".strSortControlSettingsJSON"] = "";

$tdataEoc_speed[".strClickActionJSON"] = "{\"fields\":{\"ALLSEIYAKU\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_COURIER_CHECK\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_NUMBER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_REUSE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_SIZE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_SPECIFIED_TIME\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC__BOX_NUMBER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC__DATE_AND_TIME_2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC__DELIVERY_DATES\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FIRST_NAME2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FIRST_NAME_KANA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FLAG_SPEED\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FLG_MAIL_OTHER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FLG_MAIL_SAGAWA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ICHIBUSEIYAKU\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"LAST_NAME2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"LAST_NAME_KANA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SEARCH_MEDIA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SEARCH_SITE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"UN_REACHABLE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"_registerd_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address3\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"age\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"awazu_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"b1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"b2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"b3\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_account\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_acoount_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_blunch_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_yokin_shubetu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"birth_day\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"chigin_kaitori\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"created_t\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ecc_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ecc_seq\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"eoc_search_keyword\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"fax\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"haisou_bangou\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hentou_houhou\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hentou_houhou_time\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hituyou_shorui\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"insurance_amount_print\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"jis_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"kaitori_staff_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"kaitorihuka\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"liquidation_shop_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"m_tel\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mail1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mail2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mail_check_type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mitumori_taku\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mousikomi_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"name1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"name2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option10\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option11\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option12\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option13\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option3\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option4\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option5\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option6\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option7\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option8\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option9\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"purchase_type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"rakuda_csv_flag\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"registerd_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"remark\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sagawa_shuuka_flag\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sales_flag\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seacanse\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seiyaku_fuseiritu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seiyaku_price\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seiyakukin\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sex\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sise_houhou\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"size_kosuu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sonota\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"src_type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"tel\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"tel2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"updated_at\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"wareki\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"zip\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"zip1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"zip2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"Eoc_chigins\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"Eoc_chigins\",\"url\":\"\"}}}";



$tdataEoc_speed[".import"] = true;

$tdataEoc_speed[".exportTo"] = true;


$tdataEoc_speed[".delete"] = true;

$tdataEoc_speed[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_speed[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_speed[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_speed[".searchSaving"] = false;
//

$tdataEoc_speed[".showSearchPanel"] = true;
		$tdataEoc_speed[".flexibleSearch"] = true;

$tdataEoc_speed[".isUseAjaxSuggest"] = true;

$tdataEoc_speed[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataEoc_speed[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_speed[".buttonsAdded"] = false;

$tdataEoc_speed[".addPageEvents"] = true;

// use timepicker for search panel
$tdataEoc_speed[".isUseTimeForSearch"] = false;



$tdataEoc_speed[".badgeColor"] = "1E90FF";

$tdataEoc_speed[".detailsLinksOnList"] = "1";

$tdataEoc_speed[".allSearchFields"] = array();
$tdataEoc_speed[".filterFields"] = array();
$tdataEoc_speed[".requiredSearchFields"] = array();

$tdataEoc_speed[".allSearchFields"][] = "shukka_date";
	$tdataEoc_speed[".allSearchFields"][] = "send_type";
	$tdataEoc_speed[".allSearchFields"][] = "irai_tel";
	$tdataEoc_speed[".allSearchFields"][] = "irai_zip";
	$tdataEoc_speed[".allSearchFields"][] = "irai_address";
	$tdataEoc_speed[".allSearchFields"][] = "irai_name";
	$tdataEoc_speed[".allSearchFields"][] = "hinmei1";
	$tdataEoc_speed[".allSearchFields"][] = "seikyuu_code";
	$tdataEoc_speed[".allSearchFields"][] = "unchin_num";
	$tdataEoc_speed[".allSearchFields"][] = "eoc_speed_event";
	$tdataEoc_speed[".allSearchFields"][] = "line_check";
	$tdataEoc_speed[".allSearchFields"][] = "zip";
	$tdataEoc_speed[".allSearchFields"][] = "address";
	$tdataEoc_speed[".allSearchFields"][] = "haisou_bangou";
	$tdataEoc_speed[".allSearchFields"][] = "ecc_id";
	$tdataEoc_speed[".allSearchFields"][] = "FLAG_SPEED";
	$tdataEoc_speed[".allSearchFields"][] = "name1";
	$tdataEoc_speed[".allSearchFields"][] = "name2";
	$tdataEoc_speed[".allSearchFields"][] = "tel";
	$tdataEoc_speed[".allSearchFields"][] = "tel2";
	$tdataEoc_speed[".allSearchFields"][] = "mail1";
	$tdataEoc_speed[".allSearchFields"][] = "mail2";
	

$tdataEoc_speed[".googleLikeFields"] = array();
$tdataEoc_speed[".googleLikeFields"][] = "dummy";
$tdataEoc_speed[".googleLikeFields"][] = "shukka_date";
$tdataEoc_speed[".googleLikeFields"][] = "send_type";
$tdataEoc_speed[".googleLikeFields"][] = "irai_tel";
$tdataEoc_speed[".googleLikeFields"][] = "irai_zip";
$tdataEoc_speed[".googleLikeFields"][] = "irai_address";
$tdataEoc_speed[".googleLikeFields"][] = "irai_name";
$tdataEoc_speed[".googleLikeFields"][] = "hinmei1";
$tdataEoc_speed[".googleLikeFields"][] = "seikyuu_code";
$tdataEoc_speed[".googleLikeFields"][] = "unchin_num";
$tdataEoc_speed[".googleLikeFields"][] = "eoc_speed_event";
$tdataEoc_speed[".googleLikeFields"][] = "ecc_id";
$tdataEoc_speed[".googleLikeFields"][] = "zip";
$tdataEoc_speed[".googleLikeFields"][] = "address";
$tdataEoc_speed[".googleLikeFields"][] = "mail1";
$tdataEoc_speed[".googleLikeFields"][] = "mail2";
$tdataEoc_speed[".googleLikeFields"][] = "haisou_bangou";
$tdataEoc_speed[".googleLikeFields"][] = "line_check";

$tdataEoc_speed[".panelSearchFields"] = array();
$tdataEoc_speed[".searchPanelOptions"] = array();
$tdataEoc_speed[".panelSearchFields"][] = "ecc_id";
	$tdataEoc_speed[".panelSearchFields"][] = "name1";
	$tdataEoc_speed[".panelSearchFields"][] = "name2";
	$tdataEoc_speed[".panelSearchFields"][] = "tel";
	$tdataEoc_speed[".panelSearchFields"][] = "tel2";
	$tdataEoc_speed[".panelSearchFields"][] = "mail1";
	$tdataEoc_speed[".panelSearchFields"][] = "mail2";
	$tdataEoc_speed[".panelSearchFields"][] = "address1";
	$tdataEoc_speed[".panelSearchFields"][] = "address2";
	$tdataEoc_speed[".panelSearchFields"][] = "address3";
	
$tdataEoc_speed[".advSearchFields"] = array();
$tdataEoc_speed[".advSearchFields"][] = "shukka_date";
$tdataEoc_speed[".advSearchFields"][] = "send_type";
$tdataEoc_speed[".advSearchFields"][] = "irai_tel";
$tdataEoc_speed[".advSearchFields"][] = "irai_zip";
$tdataEoc_speed[".advSearchFields"][] = "irai_address";
$tdataEoc_speed[".advSearchFields"][] = "irai_name";
$tdataEoc_speed[".advSearchFields"][] = "hinmei1";
$tdataEoc_speed[".advSearchFields"][] = "seikyuu_code";
$tdataEoc_speed[".advSearchFields"][] = "unchin_num";
$tdataEoc_speed[".advSearchFields"][] = "eoc_speed_event";
$tdataEoc_speed[".advSearchFields"][] = "line_check";
$tdataEoc_speed[".advSearchFields"][] = "zip";
$tdataEoc_speed[".advSearchFields"][] = "address";
$tdataEoc_speed[".advSearchFields"][] = "haisou_bangou";
$tdataEoc_speed[".advSearchFields"][] = "ecc_id";
$tdataEoc_speed[".advSearchFields"][] = "FLAG_SPEED";
$tdataEoc_speed[".advSearchFields"][] = "name1";
$tdataEoc_speed[".advSearchFields"][] = "name2";
$tdataEoc_speed[".advSearchFields"][] = "tel";
$tdataEoc_speed[".advSearchFields"][] = "tel2";
$tdataEoc_speed[".advSearchFields"][] = "mail1";
$tdataEoc_speed[".advSearchFields"][] = "mail2";

$tdataEoc_speed[".tableType"] = "list";

$tdataEoc_speed[".printerPageOrientation"] = 0;
$tdataEoc_speed[".nPrinterPageScale"] = 100;

$tdataEoc_speed[".nPrinterSplitRecords"] = 40;

$tdataEoc_speed[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_speed[".geocodingEnabled"] = false;





$tdataEoc_speed[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_speed[".pageSize"] = 20;

$tdataEoc_speed[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `ecc_id`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_speed[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_speed[".orderindexes"] = array();
$tdataEoc_speed[".orderindexes"][] = array(12, (1 ? "ASC" : "DESC"), "`ecc_id`");

$tdataEoc_speed[".sqlHead"] = "SELECT \"\" AS `dummy`,  \"\" AS `shukka_date`,  \"\" AS `send_type`,  \"\" AS `irai_tel`,  \"\" AS `irai_zip`,  \"\" AS `irai_address`,  \"\" AS `irai_name`,  \"\" AS `hinmei1`,  \"\" AS `seikyuu_code`,  \"\" AS `unchin_num`,  \"\" AS `eoc_speed_event`,  `ecc_id`,  `name1`,  `name2`,  CONCAT(`zip1`, '-', `zip2`) AS `zip`,  `zip1`,  `zip2`,  CONCAT(`address1`, `address2`, `address3`) AS `address`,  `address1`,  `address2`,  `address3`,  `tel`,  `tel2`,  `mail1`,  `mail2`,  `haisou_bangou`,  `FLAG_SPEED`,  `line_check`";
$tdataEoc_speed[".sqlFrom"] = "FROM `Eoc`";
$tdataEoc_speed[".sqlWhereExpr"] = "(`FLAG_SPEED` =1)";
$tdataEoc_speed[".sqlTail"] = "";




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
$tdataEoc_speed[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_speed[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_speed[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_speed[".highlightSearchResults"] = true;

$tableKeysEoc_speed = array();
$tableKeysEoc_speed[] = "ecc_id";
$tdataEoc_speed[".Keys"] = $tableKeysEoc_speed;

$tdataEoc_speed[".listFields"] = array();
$tdataEoc_speed[".listFields"][] = "eoc_speed_event";
$tdataEoc_speed[".listFields"][] = "line_check";
$tdataEoc_speed[".listFields"][] = "FLAG_SPEED";
$tdataEoc_speed[".listFields"][] = "haisou_bangou";
$tdataEoc_speed[".listFields"][] = "name1";
$tdataEoc_speed[".listFields"][] = "name2";
$tdataEoc_speed[".listFields"][] = "tel";
$tdataEoc_speed[".listFields"][] = "tel2";
$tdataEoc_speed[".listFields"][] = "mail1";
$tdataEoc_speed[".listFields"][] = "mail2";
$tdataEoc_speed[".listFields"][] = "zip";
$tdataEoc_speed[".listFields"][] = "address";

$tdataEoc_speed[".hideMobileList"] = array();


$tdataEoc_speed[".viewFields"] = array();

$tdataEoc_speed[".addFields"] = array();

$tdataEoc_speed[".masterListFields"] = array();
$tdataEoc_speed[".masterListFields"][] = "dummy";
$tdataEoc_speed[".masterListFields"][] = "shukka_date";
$tdataEoc_speed[".masterListFields"][] = "send_type";
$tdataEoc_speed[".masterListFields"][] = "irai_tel";
$tdataEoc_speed[".masterListFields"][] = "irai_zip";
$tdataEoc_speed[".masterListFields"][] = "irai_address";
$tdataEoc_speed[".masterListFields"][] = "irai_name";
$tdataEoc_speed[".masterListFields"][] = "hinmei1";
$tdataEoc_speed[".masterListFields"][] = "seikyuu_code";
$tdataEoc_speed[".masterListFields"][] = "unchin_num";
$tdataEoc_speed[".masterListFields"][] = "eoc_speed_event";
$tdataEoc_speed[".masterListFields"][] = "zip";
$tdataEoc_speed[".masterListFields"][] = "address";
$tdataEoc_speed[".masterListFields"][] = "line_check";
$tdataEoc_speed[".masterListFields"][] = "haisou_bangou";
$tdataEoc_speed[".masterListFields"][] = "ecc_id";
$tdataEoc_speed[".masterListFields"][] = "name1";
$tdataEoc_speed[".masterListFields"][] = "name2";
$tdataEoc_speed[".masterListFields"][] = "tel";
$tdataEoc_speed[".masterListFields"][] = "tel2";
$tdataEoc_speed[".masterListFields"][] = "mail1";
$tdataEoc_speed[".masterListFields"][] = "mail2";
$tdataEoc_speed[".masterListFields"][] = "zip1";
$tdataEoc_speed[".masterListFields"][] = "zip2";
$tdataEoc_speed[".masterListFields"][] = "address1";
$tdataEoc_speed[".masterListFields"][] = "address2";
$tdataEoc_speed[".masterListFields"][] = "address3";

$tdataEoc_speed[".inlineAddFields"] = array();

$tdataEoc_speed[".editFields"] = array();

$tdataEoc_speed[".inlineEditFields"] = array();
$tdataEoc_speed[".inlineEditFields"][] = "line_check";
$tdataEoc_speed[".inlineEditFields"][] = "haisou_bangou";

$tdataEoc_speed[".updateSelectedFields"] = array();


$tdataEoc_speed[".exportFields"] = array();
$tdataEoc_speed[".exportFields"][] = "eoc_speed_event";
$tdataEoc_speed[".exportFields"][] = "ecc_id";
$tdataEoc_speed[".exportFields"][] = "send_type";
$tdataEoc_speed[".exportFields"][] = "haisou_bangou";
$tdataEoc_speed[".exportFields"][] = "shukka_date";
$tdataEoc_speed[".exportFields"][] = "tel";
$tdataEoc_speed[".exportFields"][] = "tel2";
$tdataEoc_speed[".exportFields"][] = "zip";
$tdataEoc_speed[".exportFields"][] = "address";
$tdataEoc_speed[".exportFields"][] = "name1";
$tdataEoc_speed[".exportFields"][] = "name2";
$tdataEoc_speed[".exportFields"][] = "mail1";
$tdataEoc_speed[".exportFields"][] = "mail2";
$tdataEoc_speed[".exportFields"][] = "irai_zip";
$tdataEoc_speed[".exportFields"][] = "irai_tel";
$tdataEoc_speed[".exportFields"][] = "irai_address";
$tdataEoc_speed[".exportFields"][] = "irai_name";
$tdataEoc_speed[".exportFields"][] = "hinmei1";
$tdataEoc_speed[".exportFields"][] = "seikyuu_code";
$tdataEoc_speed[".exportFields"][] = "unchin_num";

$tdataEoc_speed[".importFields"] = array();
$tdataEoc_speed[".importFields"][] = "eoc_speed_event";
$tdataEoc_speed[".importFields"][] = "ecc_id";
$tdataEoc_speed[".importFields"][] = "haisou_bangou";
$tdataEoc_speed[".importFields"][] = "line_check";

$tdataEoc_speed[".printFields"] = array();

//	dummy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dummy";
	$fdata["GoodName"] = "dummy";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","dummy");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "dummy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"\"";

	
	
			
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








	$tdataEoc_speed["dummy"] = $fdata;
//	shukka_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "shukka_date";
	$fdata["GoodName"] = "shukka_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","shukka_date");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shukka_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"\"";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_speed["shukka_date"] = $fdata;
//	send_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "send_type";
	$fdata["GoodName"] = "send_type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","send_type");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "send_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"\"";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_speed["send_type"] = $fdata;
//	irai_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "irai_tel";
	$fdata["GoodName"] = "irai_tel";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","irai_tel");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "irai_tel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"\"";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_speed["irai_tel"] = $fdata;
//	irai_zip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "irai_zip";
	$fdata["GoodName"] = "irai_zip";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","irai_zip");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "irai_zip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"\"";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_speed["irai_zip"] = $fdata;
//	irai_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "irai_address";
	$fdata["GoodName"] = "irai_address";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","irai_address");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "irai_address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"\"";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_speed["irai_address"] = $fdata;
//	irai_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "irai_name";
	$fdata["GoodName"] = "irai_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","irai_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "irai_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"\"";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_speed["irai_name"] = $fdata;
//	hinmei1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "hinmei1";
	$fdata["GoodName"] = "hinmei1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","hinmei1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hinmei1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"\"";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_speed["hinmei1"] = $fdata;
//	seikyuu_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "seikyuu_code";
	$fdata["GoodName"] = "seikyuu_code";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","seikyuu_code");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "seikyuu_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"\"";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_speed["seikyuu_code"] = $fdata;
//	unchin_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "unchin_num";
	$fdata["GoodName"] = "unchin_num";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","unchin_num");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "unchin_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"\"";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_speed["unchin_num"] = $fdata;
//	eoc_speed_event
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "eoc_speed_event";
	$fdata["GoodName"] = "eoc_speed_event";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","eoc_speed_event");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eoc_speed_event";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"\"";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_speed["eoc_speed_event"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","ecc_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_speed["ecc_id"] = $fdata;
//	name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "name1";
	$fdata["GoodName"] = "name1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","name1");
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




	$tdataEoc_speed["name1"] = $fdata;
//	name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "name2";
	$fdata["GoodName"] = "name2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","name2");
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




	$tdataEoc_speed["name2"] = $fdata;
//	zip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "zip";
	$fdata["GoodName"] = "zip";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","zip");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(`zip1`, '-', `zip2`)";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_speed["zip"] = $fdata;
//	zip1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "zip1";
	$fdata["GoodName"] = "zip1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","zip1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "zip1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`zip1`";

	
	
			
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








	$tdataEoc_speed["zip1"] = $fdata;
//	zip2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "zip2";
	$fdata["GoodName"] = "zip2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","zip2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "zip2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`zip2`";

	
	
			
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








	$tdataEoc_speed["zip2"] = $fdata;
//	address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "address";
	$fdata["GoodName"] = "address";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","address");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(`address1`, `address2`, `address3`)";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_speed["address"] = $fdata;
//	address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "address1";
	$fdata["GoodName"] = "address1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","address1");
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








	$tdataEoc_speed["address1"] = $fdata;
//	address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "address2";
	$fdata["GoodName"] = "address2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","address2");
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








	$tdataEoc_speed["address2"] = $fdata;
//	address3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "address3";
	$fdata["GoodName"] = "address3";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","address3");
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








	$tdataEoc_speed["address3"] = $fdata;
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","tel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataEoc_speed["tel"] = $fdata;
//	tel2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "tel2";
	$fdata["GoodName"] = "tel2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","tel2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataEoc_speed["tel2"] = $fdata;
//	mail1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "mail1";
	$fdata["GoodName"] = "mail1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","mail1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataEoc_speed["mail1"] = $fdata;
//	mail2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "mail2";
	$fdata["GoodName"] = "mail2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","mail2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataEoc_speed["mail2"] = $fdata;
//	haisou_bangou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "haisou_bangou";
	$fdata["GoodName"] = "haisou_bangou";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","haisou_bangou");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "haisou_bangou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`haisou_bangou`";

	
	
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




	$tdataEoc_speed["haisou_bangou"] = $fdata;
//	FLAG_SPEED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "FLAG_SPEED";
	$fdata["GoodName"] = "FLAG_SPEED";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","FLAG_SPEED");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "FLAG_SPEED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`FLAG_SPEED`";

	
	
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




	$tdataEoc_speed["FLAG_SPEED"] = $fdata;
//	line_check
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "line_check";
	$fdata["GoodName"] = "line_check";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_speed","line_check");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_speed["line_check"] = $fdata;


$tables_data["Eoc_speed"]=&$tdataEoc_speed;
$field_labels["Eoc_speed"] = &$fieldLabelsEoc_speed;
$fieldToolTips["Eoc_speed"] = &$fieldToolTipsEoc_speed;
$placeHolders["Eoc_speed"] = &$placeHoldersEoc_speed;
$page_titles["Eoc_speed"] = &$pageTitlesEoc_speed;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_speed"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_speed"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_speed()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"\" AS `dummy`,  \"\" AS `shukka_date`,  \"\" AS `send_type`,  \"\" AS `irai_tel`,  \"\" AS `irai_zip`,  \"\" AS `irai_address`,  \"\" AS `irai_name`,  \"\" AS `hinmei1`,  \"\" AS `seikyuu_code`,  \"\" AS `unchin_num`,  \"\" AS `eoc_speed_event`,  `ecc_id`,  `name1`,  `name2`,  CONCAT(`zip1`, '-', `zip2`) AS `zip`,  `zip1`,  `zip2`,  CONCAT(`address1`, `address2`, `address3`) AS `address`,  `address1`,  `address2`,  `address3`,  `tel`,  `tel2`,  `mail1`,  `mail2`,  `haisou_bangou`,  `FLAG_SPEED`,  `line_check`";
$proto0["m_strFrom"] = "FROM `Eoc`";
$proto0["m_strWhere"] = "(`FLAG_SPEED` =1)";
$proto0["m_strOrderBy"] = "ORDER BY `ecc_id`";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`FLAG_SPEED` =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "FLAG_SPEED",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_speed"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto6["m_sql"] = "\"\"";
$proto6["m_srcTableName"] = "Eoc_speed";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "dummy";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto8["m_sql"] = "\"\"";
$proto8["m_srcTableName"] = "Eoc_speed";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "shukka_date";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto10["m_sql"] = "\"\"";
$proto10["m_srcTableName"] = "Eoc_speed";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "send_type";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto12["m_sql"] = "\"\"";
$proto12["m_srcTableName"] = "Eoc_speed";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "irai_tel";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto14["m_sql"] = "\"\"";
$proto14["m_srcTableName"] = "Eoc_speed";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "irai_zip";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto16["m_sql"] = "\"\"";
$proto16["m_srcTableName"] = "Eoc_speed";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "irai_address";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto18["m_sql"] = "\"\"";
$proto18["m_srcTableName"] = "Eoc_speed";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "irai_name";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto20["m_sql"] = "\"\"";
$proto20["m_srcTableName"] = "Eoc_speed";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "hinmei1";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto22["m_sql"] = "\"\"";
$proto22["m_srcTableName"] = "Eoc_speed";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "seikyuu_code";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto24["m_sql"] = "\"\"";
$proto24["m_srcTableName"] = "Eoc_speed";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "unchin_num";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto26["m_sql"] = "\"\"";
$proto26["m_srcTableName"] = "Eoc_speed";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "eoc_speed_event";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_speed"
));

$proto28["m_sql"] = "`ecc_id`";
$proto28["m_srcTableName"] = "Eoc_speed";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "name1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_speed"
));

$proto30["m_sql"] = "`name1`";
$proto30["m_srcTableName"] = "Eoc_speed";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_speed"
));

$proto32["m_sql"] = "`name2`";
$proto32["m_srcTableName"] = "Eoc_speed";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$proto35=array();
$proto35["m_functiontype"] = "SQLF_CUSTOM";
$proto35["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`zip1`"
));

$proto35["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto35["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`zip2`"
));

$proto35["m_arguments"][]=$obj;
$proto35["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto35);

$proto34["m_sql"] = "CONCAT(`zip1`, '-', `zip2`)";
$proto34["m_srcTableName"] = "Eoc_speed";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "zip";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "zip1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_speed"
));

$proto39["m_sql"] = "`zip1`";
$proto39["m_srcTableName"] = "Eoc_speed";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "zip2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_speed"
));

$proto41["m_sql"] = "`zip2`";
$proto41["m_srcTableName"] = "Eoc_speed";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$proto44=array();
$proto44["m_functiontype"] = "SQLF_CUSTOM";
$proto44["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`address1`"
));

$proto44["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`address2`"
));

$proto44["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`address3`"
));

$proto44["m_arguments"][]=$obj;
$proto44["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto44);

$proto43["m_sql"] = "CONCAT(`address1`, `address2`, `address3`)";
$proto43["m_srcTableName"] = "Eoc_speed";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "address";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "address1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_speed"
));

$proto48["m_sql"] = "`address1`";
$proto48["m_srcTableName"] = "Eoc_speed";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "address2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_speed"
));

$proto50["m_sql"] = "`address2`";
$proto50["m_srcTableName"] = "Eoc_speed";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "address3",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_speed"
));

$proto52["m_sql"] = "`address3`";
$proto52["m_srcTableName"] = "Eoc_speed";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_speed"
));

$proto54["m_sql"] = "`tel`";
$proto54["m_srcTableName"] = "Eoc_speed";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "tel2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_speed"
));

$proto56["m_sql"] = "`tel2`";
$proto56["m_srcTableName"] = "Eoc_speed";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "mail1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_speed"
));

$proto58["m_sql"] = "`mail1`";
$proto58["m_srcTableName"] = "Eoc_speed";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "mail2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_speed"
));

$proto60["m_sql"] = "`mail2`";
$proto60["m_srcTableName"] = "Eoc_speed";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "haisou_bangou",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_speed"
));

$proto62["m_sql"] = "`haisou_bangou`";
$proto62["m_srcTableName"] = "Eoc_speed";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "FLAG_SPEED",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_speed"
));

$proto64["m_sql"] = "`FLAG_SPEED`";
$proto64["m_srcTableName"] = "Eoc_speed";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "line_check",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_speed"
));

$proto66["m_sql"] = "`line_check`";
$proto66["m_srcTableName"] = "Eoc_speed";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto68=array();
$proto68["m_link"] = "SQLL_MAIN";
			$proto69=array();
$proto69["m_strName"] = "Eoc";
$proto69["m_srcTableName"] = "Eoc_speed";
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
$proto68["m_sql"] = "`Eoc`";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "Eoc_speed";
$proto70=array();
$proto70["m_sql"] = "";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto72=array();
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_speed"
));

$proto72["m_column"]=$obj;
$proto72["m_bAsc"] = 1;
$proto72["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto72);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_speed";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_speed = createSqlQuery_Eoc_speed();


	
		;

																												

$tdataEoc_speed[".sqlquery"] = $queryData_Eoc_speed;

include_once(getabspath("include/Eoc_speed_events.php"));
$tableEvents["Eoc_speed"] = new eventclass_Eoc_speed;
$tdataEoc_speed[".hasEvents"] = true;

?>