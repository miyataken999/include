<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoctest = array();
	$tdataEoctest[".truncateText"] = true;
	$tdataEoctest[".NumberOfChars"] = 80;
	$tdataEoctest[".ShortName"] = "Eoctest";
	$tdataEoctest[".OwnerID"] = "";
	$tdataEoctest[".OriginalTable"] = "Eoctest";

//	field labels
$fieldLabelsEoctest = array();
$fieldToolTipsEoctest = array();
$pageTitlesEoctest = array();
$placeHoldersEoctest = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoctest["Japanese"] = array();
	$fieldToolTipsEoctest["Japanese"] = array();
	$placeHoldersEoctest["Japanese"] = array();
	$pageTitlesEoctest["Japanese"] = array();
	$fieldLabelsEoctest["Japanese"]["ecc_id"] = "顧客ＳＥＱ";
	$fieldToolTipsEoctest["Japanese"]["ecc_id"] = "";
	$placeHoldersEoctest["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoctest["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipsEoctest["Japanese"]["ecc_seq"] = "";
	$placeHoldersEoctest["Japanese"]["ecc_seq"] = "";
	$fieldLabelsEoctest["Japanese"]["name1"] = "名前";
	$fieldToolTipsEoctest["Japanese"]["name1"] = "";
	$placeHoldersEoctest["Japanese"]["name1"] = "";
	$fieldLabelsEoctest["Japanese"]["created_t"] = "顧客登録日";
	$fieldToolTipsEoctest["Japanese"]["created_t"] = "";
	$placeHoldersEoctest["Japanese"]["created_t"] = "";
	$fieldLabelsEoctest["Japanese"]["registerd_id"] = "更新者";
	$fieldToolTipsEoctest["Japanese"]["registerd_id"] = "";
	$placeHoldersEoctest["Japanese"]["registerd_id"] = "";
	$fieldLabelsEoctest["Japanese"]["kaitori_staff_id"] = "買取者";
	$fieldToolTipsEoctest["Japanese"]["kaitori_staff_id"] = "";
	$placeHoldersEoctest["Japanese"]["kaitori_staff_id"] = "";
	$fieldLabelsEoctest["Japanese"]["name2"] = "フリガナ";
	$fieldToolTipsEoctest["Japanese"]["name2"] = "";
	$placeHoldersEoctest["Japanese"]["name2"] = "";
	$fieldLabelsEoctest["Japanese"]["wareki"] = "Wareki";
	$fieldToolTipsEoctest["Japanese"]["wareki"] = "";
	$placeHoldersEoctest["Japanese"]["wareki"] = "";
	$fieldLabelsEoctest["Japanese"]["b1"] = "B1";
	$fieldToolTipsEoctest["Japanese"]["b1"] = "";
	$placeHoldersEoctest["Japanese"]["b1"] = "";
	$fieldLabelsEoctest["Japanese"]["b2"] = "B2";
	$fieldToolTipsEoctest["Japanese"]["b2"] = "";
	$placeHoldersEoctest["Japanese"]["b2"] = "";
	$fieldLabelsEoctest["Japanese"]["b3"] = "B3";
	$fieldToolTipsEoctest["Japanese"]["b3"] = "";
	$placeHoldersEoctest["Japanese"]["b3"] = "";
	$fieldLabelsEoctest["Japanese"]["birth_day"] = "Birth Day";
	$fieldToolTipsEoctest["Japanese"]["birth_day"] = "";
	$placeHoldersEoctest["Japanese"]["birth_day"] = "";
	$fieldLabelsEoctest["Japanese"]["age"] = "Age";
	$fieldToolTipsEoctest["Japanese"]["age"] = "";
	$placeHoldersEoctest["Japanese"]["age"] = "";
	$fieldLabelsEoctest["Japanese"]["zip"] = "Zip";
	$fieldToolTipsEoctest["Japanese"]["zip"] = "";
	$placeHoldersEoctest["Japanese"]["zip"] = "";
	$fieldLabelsEoctest["Japanese"]["zip1"] = "郵便番号";
	$fieldToolTipsEoctest["Japanese"]["zip1"] = "";
	$placeHoldersEoctest["Japanese"]["zip1"] = "";
	$fieldLabelsEoctest["Japanese"]["zip2"] = "郵便番号2";
	$fieldToolTipsEoctest["Japanese"]["zip2"] = "";
	$placeHoldersEoctest["Japanese"]["zip2"] = "";
	$fieldLabelsEoctest["Japanese"]["address1"] = "都道府県";
	$fieldToolTipsEoctest["Japanese"]["address1"] = "";
	$placeHoldersEoctest["Japanese"]["address1"] = "";
	$fieldLabelsEoctest["Japanese"]["address2"] = "市町村区群";
	$fieldToolTipsEoctest["Japanese"]["address2"] = "";
	$placeHoldersEoctest["Japanese"]["address2"] = "";
	$fieldLabelsEoctest["Japanese"]["address3"] = "以下住所";
	$fieldToolTipsEoctest["Japanese"]["address3"] = "";
	$placeHoldersEoctest["Japanese"]["address3"] = "";
	$fieldLabelsEoctest["Japanese"]["tel"] = "電話";
	$fieldToolTipsEoctest["Japanese"]["tel"] = "";
	$placeHoldersEoctest["Japanese"]["tel"] = "";
	$fieldLabelsEoctest["Japanese"]["tel2"] = "携帯";
	$fieldToolTipsEoctest["Japanese"]["tel2"] = "";
	$placeHoldersEoctest["Japanese"]["tel2"] = "";
	$fieldLabelsEoctest["Japanese"]["mail1"] = "メアド";
	$fieldToolTipsEoctest["Japanese"]["mail1"] = "";
	$placeHoldersEoctest["Japanese"]["mail1"] = "";
	$fieldLabelsEoctest["Japanese"]["mail2"] = "メアド2";
	$fieldToolTipsEoctest["Japanese"]["mail2"] = "";
	$placeHoldersEoctest["Japanese"]["mail2"] = "";
	$fieldLabelsEoctest["Japanese"]["address_code"] = "Address Code";
	$fieldToolTipsEoctest["Japanese"]["address_code"] = "";
	$placeHoldersEoctest["Japanese"]["address_code"] = "";
	$fieldLabelsEoctest["Japanese"]["bank_name"] = "金融機関名";
	$fieldToolTipsEoctest["Japanese"]["bank_name"] = "";
	$placeHoldersEoctest["Japanese"]["bank_name"] = "";
	$fieldLabelsEoctest["Japanese"]["bank_blunch_code"] = "Bank Blunch Code";
	$fieldToolTipsEoctest["Japanese"]["bank_blunch_code"] = "";
	$placeHoldersEoctest["Japanese"]["bank_blunch_code"] = "";
	$fieldLabelsEoctest["Japanese"]["bank_yokin_shubetu"] = "Bank Yokin Shubetu";
	$fieldToolTipsEoctest["Japanese"]["bank_yokin_shubetu"] = "";
	$placeHoldersEoctest["Japanese"]["bank_yokin_shubetu"] = "";
	$fieldLabelsEoctest["Japanese"]["bank_account"] = "Bank Account";
	$fieldToolTipsEoctest["Japanese"]["bank_account"] = "";
	$placeHoldersEoctest["Japanese"]["bank_account"] = "";
	$fieldLabelsEoctest["Japanese"]["bank_acoount_name"] = "Bank Acoount Name";
	$fieldToolTipsEoctest["Japanese"]["bank_acoount_name"] = "";
	$placeHoldersEoctest["Japanese"]["bank_acoount_name"] = "";
	$fieldLabelsEoctest["Japanese"]["haisou_bangou"] = "配送番号";
	$fieldToolTipsEoctest["Japanese"]["haisou_bangou"] = "";
	$placeHoldersEoctest["Japanese"]["haisou_bangou"] = "";
	$fieldLabelsEoctest["Japanese"]["sise_houhou"] = "Sise Houhou";
	$fieldToolTipsEoctest["Japanese"]["sise_houhou"] = "";
	$placeHoldersEoctest["Japanese"]["sise_houhou"] = "";
	$fieldLabelsEoctest["Japanese"]["hentou_houhou"] = "Hentou Houhou";
	$fieldToolTipsEoctest["Japanese"]["hentou_houhou"] = "";
	$placeHoldersEoctest["Japanese"]["hentou_houhou"] = "";
	$fieldLabelsEoctest["Japanese"]["hentou_houhou_time"] = "Hentou Houhou Time";
	$fieldToolTipsEoctest["Japanese"]["hentou_houhou_time"] = "";
	$placeHoldersEoctest["Japanese"]["hentou_houhou_time"] = "";
	$fieldLabelsEoctest["Japanese"]["mousikomi_id"] = "Mousikomi Id";
	$fieldToolTipsEoctest["Japanese"]["mousikomi_id"] = "";
	$placeHoldersEoctest["Japanese"]["mousikomi_id"] = "";
	$fieldLabelsEoctest["Japanese"]["hituyou_shorui"] = "Hituyou Shorui";
	$fieldToolTipsEoctest["Japanese"]["hituyou_shorui"] = "";
	$placeHoldersEoctest["Japanese"]["hituyou_shorui"] = "";
	$fieldLabelsEoctest["Japanese"]["seiyaku_fuseiritu"] = "Seiyaku Fuseiritu";
	$fieldToolTipsEoctest["Japanese"]["seiyaku_fuseiritu"] = "";
	$placeHoldersEoctest["Japanese"]["seiyaku_fuseiritu"] = "";
	$fieldLabelsEoctest["Japanese"]["mitumori_taku"] = "Mitumori Taku";
	$fieldToolTipsEoctest["Japanese"]["mitumori_taku"] = "";
	$placeHoldersEoctest["Japanese"]["mitumori_taku"] = "";
	$fieldLabelsEoctest["Japanese"]["seacanse"] = "Seacanse";
	$fieldToolTipsEoctest["Japanese"]["seacanse"] = "";
	$placeHoldersEoctest["Japanese"]["seacanse"] = "";
	$fieldLabelsEoctest["Japanese"]["remark"] = "備考";
	$fieldToolTipsEoctest["Japanese"]["remark"] = "";
	$placeHoldersEoctest["Japanese"]["remark"] = "";
	$fieldLabelsEoctest["Japanese"]["type"] = "Type";
	$fieldToolTipsEoctest["Japanese"]["type"] = "";
	$placeHoldersEoctest["Japanese"]["type"] = "";
	$fieldLabelsEoctest["Japanese"]["sales_flag"] = "Sales Flag";
	$fieldToolTipsEoctest["Japanese"]["sales_flag"] = "";
	$placeHoldersEoctest["Japanese"]["sales_flag"] = "";
	$fieldLabelsEoctest["Japanese"]["src_type"] = "Src Type";
	$fieldToolTipsEoctest["Japanese"]["src_type"] = "";
	$placeHoldersEoctest["Japanese"]["src_type"] = "";
	$fieldLabelsEoctest["Japanese"]["liquidation_shop_code"] = "Liquidation Shop Code";
	$fieldToolTipsEoctest["Japanese"]["liquidation_shop_code"] = "";
	$placeHoldersEoctest["Japanese"]["liquidation_shop_code"] = "";
	$fieldLabelsEoctest["Japanese"]["insurance_amount_print"] = "Insurance Amount Print";
	$fieldToolTipsEoctest["Japanese"]["insurance_amount_print"] = "";
	$placeHoldersEoctest["Japanese"]["insurance_amount_print"] = "";
	$fieldLabelsEoctest["Japanese"]["jis_code"] = "Jis Code";
	$fieldToolTipsEoctest["Japanese"]["jis_code"] = "";
	$placeHoldersEoctest["Japanese"]["jis_code"] = "";
	$fieldLabelsEoctest["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoctest["Japanese"]["updated_at"] = "";
	$placeHoldersEoctest["Japanese"]["updated_at"] = "";
	$fieldLabelsEoctest["Japanese"]["_registerd_id"] = "顧客登録者";
	$fieldToolTipsEoctest["Japanese"]["_registerd_id"] = "";
	$placeHoldersEoctest["Japanese"]["_registerd_id"] = "";
	$fieldLabelsEoctest["Japanese"]["mail_check_type"] = "メルマガ拒否可否";
	$fieldToolTipsEoctest["Japanese"]["mail_check_type"] = "";
	$placeHoldersEoctest["Japanese"]["mail_check_type"] = "";
	$fieldLabelsEoctest["Japanese"]["purchase_type"] = "買取種別";
	$fieldToolTipsEoctest["Japanese"]["purchase_type"] = "";
	$placeHoldersEoctest["Japanese"]["purchase_type"] = "";
	$fieldLabelsEoctest["Japanese"]["sex"] = "Sex";
	$fieldToolTipsEoctest["Japanese"]["sex"] = "";
	$placeHoldersEoctest["Japanese"]["sex"] = "";
	$fieldLabelsEoctest["Japanese"]["m_tel"] = "M Tel";
	$fieldToolTipsEoctest["Japanese"]["m_tel"] = "";
	$placeHoldersEoctest["Japanese"]["m_tel"] = "";
	$fieldLabelsEoctest["Japanese"]["fax"] = "Fax";
	$fieldToolTipsEoctest["Japanese"]["fax"] = "";
	$placeHoldersEoctest["Japanese"]["fax"] = "";
	$fieldLabelsEoctest["Japanese"]["chigin_kaitori"] = "Chigin Kaitori";
	$fieldToolTipsEoctest["Japanese"]["chigin_kaitori"] = "";
	$placeHoldersEoctest["Japanese"]["chigin_kaitori"] = "";
	$fieldLabelsEoctest["Japanese"]["option1"] = "Option1";
	$fieldToolTipsEoctest["Japanese"]["option1"] = "";
	$placeHoldersEoctest["Japanese"]["option1"] = "";
	$fieldLabelsEoctest["Japanese"]["option2"] = "Option2";
	$fieldToolTipsEoctest["Japanese"]["option2"] = "";
	$placeHoldersEoctest["Japanese"]["option2"] = "";
	$fieldLabelsEoctest["Japanese"]["option3"] = "Option3";
	$fieldToolTipsEoctest["Japanese"]["option3"] = "";
	$placeHoldersEoctest["Japanese"]["option3"] = "";
	$fieldLabelsEoctest["Japanese"]["option4"] = "Option4";
	$fieldToolTipsEoctest["Japanese"]["option4"] = "";
	$placeHoldersEoctest["Japanese"]["option4"] = "";
	$fieldLabelsEoctest["Japanese"]["option5"] = "性別";
	$fieldToolTipsEoctest["Japanese"]["option5"] = "";
	$placeHoldersEoctest["Japanese"]["option5"] = "";
	$fieldLabelsEoctest["Japanese"]["option6"] = "Option6";
	$fieldToolTipsEoctest["Japanese"]["option6"] = "";
	$placeHoldersEoctest["Japanese"]["option6"] = "";
	$fieldLabelsEoctest["Japanese"]["option7"] = "Option7";
	$fieldToolTipsEoctest["Japanese"]["option7"] = "";
	$placeHoldersEoctest["Japanese"]["option7"] = "";
	$fieldLabelsEoctest["Japanese"]["option8"] = "Option8";
	$fieldToolTipsEoctest["Japanese"]["option8"] = "";
	$placeHoldersEoctest["Japanese"]["option8"] = "";
	$fieldLabelsEoctest["Japanese"]["option9"] = "Option9";
	$fieldToolTipsEoctest["Japanese"]["option9"] = "";
	$placeHoldersEoctest["Japanese"]["option9"] = "";
	$fieldLabelsEoctest["Japanese"]["option10"] = "Option10";
	$fieldToolTipsEoctest["Japanese"]["option10"] = "";
	$placeHoldersEoctest["Japanese"]["option10"] = "";
	$fieldLabelsEoctest["Japanese"]["option11"] = "Option11";
	$fieldToolTipsEoctest["Japanese"]["option11"] = "";
	$placeHoldersEoctest["Japanese"]["option11"] = "";
	$fieldLabelsEoctest["Japanese"]["option12"] = "Option12";
	$fieldToolTipsEoctest["Japanese"]["option12"] = "";
	$placeHoldersEoctest["Japanese"]["option12"] = "";
	$fieldLabelsEoctest["Japanese"]["option13"] = "Option13";
	$fieldToolTipsEoctest["Japanese"]["option13"] = "";
	$placeHoldersEoctest["Japanese"]["option13"] = "";
	$fieldLabelsEoctest["Japanese"]["rakuda_csv_flag"] = "配送印刷";
	$fieldToolTipsEoctest["Japanese"]["rakuda_csv_flag"] = "";
	$placeHoldersEoctest["Japanese"]["rakuda_csv_flag"] = "";
	$fieldLabelsEoctest["Japanese"]["EOC_COURIER_CHECK"] = "宅配チェック";
	$fieldToolTipsEoctest["Japanese"]["EOC_COURIER_CHECK"] = "";
	$placeHoldersEoctest["Japanese"]["EOC_COURIER_CHECK"] = "";
	$fieldLabelsEoctest["Japanese"]["EOC_SIZE"] = "サイズ";
	$fieldToolTipsEoctest["Japanese"]["EOC_SIZE"] = "";
	$placeHoldersEoctest["Japanese"]["EOC_SIZE"] = "";
	$fieldLabelsEoctest["Japanese"]["EOC_NUMBER"] = "個数";
	$fieldToolTipsEoctest["Japanese"]["EOC_NUMBER"] = "";
	$placeHoldersEoctest["Japanese"]["EOC_NUMBER"] = "";
	$fieldLabelsEoctest["Japanese"]["EOC_REUSE"] = "再利用";
	$fieldToolTipsEoctest["Japanese"]["EOC_REUSE"] = "";
	$placeHoldersEoctest["Japanese"]["EOC_REUSE"] = "";
	$fieldLabelsEoctest["Japanese"]["EOC__DELIVERY_DATES"] = "集荷日時";
	$fieldToolTipsEoctest["Japanese"]["EOC__DELIVERY_DATES"] = "";
	$placeHoldersEoctest["Japanese"]["EOC__DELIVERY_DATES"] = "";
	$fieldLabelsEoctest["Japanese"]["EOC_SPECIFIED_TIME"] = "時間帯指定";
	$fieldToolTipsEoctest["Japanese"]["EOC_SPECIFIED_TIME"] = "";
	$placeHoldersEoctest["Japanese"]["EOC_SPECIFIED_TIME"] = "";
	$fieldLabelsEoctest["Japanese"]["FIRST_NAME2"] = "名";
	$fieldToolTipsEoctest["Japanese"]["FIRST_NAME2"] = "";
	$placeHoldersEoctest["Japanese"]["FIRST_NAME2"] = "";
	$fieldLabelsEoctest["Japanese"]["LAST_NAME2"] = "姓";
	$fieldToolTipsEoctest["Japanese"]["LAST_NAME2"] = "";
	$placeHoldersEoctest["Japanese"]["LAST_NAME2"] = "";
	$fieldLabelsEoctest["Japanese"]["EOC__DATE_AND_TIME_2"] = "日時";
	$fieldToolTipsEoctest["Japanese"]["EOC__DATE_AND_TIME_2"] = "";
	$placeHoldersEoctest["Japanese"]["EOC__DATE_AND_TIME_2"] = "";
	$fieldLabelsEoctest["Japanese"]["EOC__BOX_NUMBER"] = "箱数";
	$fieldToolTipsEoctest["Japanese"]["EOC__BOX_NUMBER"] = "";
	$placeHoldersEoctest["Japanese"]["EOC__BOX_NUMBER"] = "";
	$fieldLabelsEoctest["Japanese"]["FIRST_NAME_KANA"] = "メイ";
	$fieldToolTipsEoctest["Japanese"]["FIRST_NAME_KANA"] = "";
	$placeHoldersEoctest["Japanese"]["FIRST_NAME_KANA"] = "";
	$fieldLabelsEoctest["Japanese"]["LAST_NAME_KANA"] = "セイ";
	$fieldToolTipsEoctest["Japanese"]["LAST_NAME_KANA"] = "";
	$placeHoldersEoctest["Japanese"]["LAST_NAME_KANA"] = "";
	$fieldLabelsEoctest["Japanese"]["FLAG_SPEED"] = "スピード";
	$fieldToolTipsEoctest["Japanese"]["FLAG_SPEED"] = "";
	$placeHoldersEoctest["Japanese"]["FLAG_SPEED"] = "";
	$fieldLabelsEoctest["Japanese"]["SEARCH_MEDIA"] = "検索媒体";
	$fieldToolTipsEoctest["Japanese"]["SEARCH_MEDIA"] = "";
	$placeHoldersEoctest["Japanese"]["SEARCH_MEDIA"] = "";
	$fieldLabelsEoctest["Japanese"]["SEARCH_SITE"] = "検索サイト";
	$fieldToolTipsEoctest["Japanese"]["SEARCH_SITE"] = "";
	$placeHoldersEoctest["Japanese"]["SEARCH_SITE"] = "";
	$fieldLabelsEoctest["Japanese"]["UN_REACHABLE"] = "到着";
	$fieldToolTipsEoctest["Japanese"]["UN_REACHABLE"] = "";
	$placeHoldersEoctest["Japanese"]["UN_REACHABLE"] = "";
	$fieldLabelsEoctest["Japanese"]["FLG_MAIL_SAGAWA"] = "佐川";
	$fieldToolTipsEoctest["Japanese"]["FLG_MAIL_SAGAWA"] = "";
	$placeHoldersEoctest["Japanese"]["FLG_MAIL_SAGAWA"] = "";
	$fieldLabelsEoctest["Japanese"]["FLG_MAIL_OTHER"] = "その他";
	$fieldToolTipsEoctest["Japanese"]["FLG_MAIL_OTHER"] = "";
	$placeHoldersEoctest["Japanese"]["FLG_MAIL_OTHER"] = "";
	$fieldLabelsEoctest["Japanese"]["ALLSEIYAKU"] = "全成約";
	$fieldToolTipsEoctest["Japanese"]["ALLSEIYAKU"] = "";
	$placeHoldersEoctest["Japanese"]["ALLSEIYAKU"] = "";
	$fieldLabelsEoctest["Japanese"]["ICHIBUSEIYAKU"] = "一部成約";
	$fieldToolTipsEoctest["Japanese"]["ICHIBUSEIYAKU"] = "";
	$placeHoldersEoctest["Japanese"]["ICHIBUSEIYAKU"] = "";
	$fieldLabelsEoctest["Japanese"]["seiyakukin"] = "成約金";
	$fieldToolTipsEoctest["Japanese"]["seiyakukin"] = "";
	$placeHoldersEoctest["Japanese"]["seiyakukin"] = "";
	$fieldLabelsEoctest["Japanese"]["kaitorihuka"] = "Kaitorihuka";
	$fieldToolTipsEoctest["Japanese"]["kaitorihuka"] = "";
	$placeHoldersEoctest["Japanese"]["kaitorihuka"] = "";
	$fieldLabelsEoctest["Japanese"]["awazu_date"] = "Awazu Date";
	$fieldToolTipsEoctest["Japanese"]["awazu_date"] = "";
	$placeHoldersEoctest["Japanese"]["awazu_date"] = "";
	$fieldLabelsEoctest["Japanese"]["seiyaku_price"] = "Seiyaku Price";
	$fieldToolTipsEoctest["Japanese"]["seiyaku_price"] = "";
	$placeHoldersEoctest["Japanese"]["seiyaku_price"] = "";
	$fieldLabelsEoctest["Japanese"]["eoc_search_keyword"] = "Eoc Search Keyword";
	$fieldToolTipsEoctest["Japanese"]["eoc_search_keyword"] = "";
	$placeHoldersEoctest["Japanese"]["eoc_search_keyword"] = "";
	$fieldLabelsEoctest["Japanese"]["sonota"] = "Sonota";
	$fieldToolTipsEoctest["Japanese"]["sonota"] = "";
	$placeHoldersEoctest["Japanese"]["sonota"] = "";
	$fieldLabelsEoctest["Japanese"]["size_kosuu"] = "キット種別";
	$fieldToolTipsEoctest["Japanese"]["size_kosuu"] = "";
	$placeHoldersEoctest["Japanese"]["size_kosuu"] = "";
	$fieldLabelsEoctest["Japanese"]["sagawa_shuuka_flag"] = "佐川集荷依頼";
	$fieldToolTipsEoctest["Japanese"]["sagawa_shuuka_flag"] = "";
	$placeHoldersEoctest["Japanese"]["sagawa_shuuka_flag"] = "";
	$fieldLabelsEoctest["Japanese"]["line_check"] = "ライン本確";
	$fieldToolTipsEoctest["Japanese"]["line_check"] = "";
	$placeHoldersEoctest["Japanese"]["line_check"] = "";
	$fieldLabelsEoctest["Japanese"]["sagawa_shuukairai_denwabangou"] = "佐川集荷依頼電話番号";
	$fieldToolTipsEoctest["Japanese"]["sagawa_shuukairai_denwabangou"] = "";
	$placeHoldersEoctest["Japanese"]["sagawa_shuukairai_denwabangou"] = "";
	$fieldLabelsEoctest["Japanese"]["kaitori_sougak"] = "買取総額";
	$fieldToolTipsEoctest["Japanese"]["kaitori_sougak"] = "";
	$placeHoldersEoctest["Japanese"]["kaitori_sougak"] = "";
	$fieldLabelsEoctest["Japanese"]["flag"] = "その他";
	$fieldToolTipsEoctest["Japanese"]["flag"] = "";
	$placeHoldersEoctest["Japanese"]["flag"] = "";
	$fieldLabelsEoctest["Japanese"]["key_code"] = "暗号化メールアドレス";
	$fieldToolTipsEoctest["Japanese"]["key_code"] = "";
	$placeHoldersEoctest["Japanese"]["key_code"] = "";
	if (count($fieldToolTipsEoctest["Japanese"]))
		$tdataEoctest[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoctest[""] = array();
	$fieldToolTipsEoctest[""] = array();
	$placeHoldersEoctest[""] = array();
	$pageTitlesEoctest[""] = array();
	$fieldLabelsEoctest[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoctest[""]["ecc_id"] = "";
	$placeHoldersEoctest[""]["ecc_id"] = "";
	$fieldLabelsEoctest[""]["ecc_seq"] = "Ecc Seq";
	$fieldToolTipsEoctest[""]["ecc_seq"] = "";
	$placeHoldersEoctest[""]["ecc_seq"] = "";
	$fieldLabelsEoctest[""]["name1"] = "Name1";
	$fieldToolTipsEoctest[""]["name1"] = "";
	$placeHoldersEoctest[""]["name1"] = "";
	$fieldLabelsEoctest[""]["created_t"] = "Created T";
	$fieldToolTipsEoctest[""]["created_t"] = "";
	$placeHoldersEoctest[""]["created_t"] = "";
	$fieldLabelsEoctest[""]["registerd_id"] = "Registerd Id";
	$fieldToolTipsEoctest[""]["registerd_id"] = "";
	$placeHoldersEoctest[""]["registerd_id"] = "";
	$fieldLabelsEoctest[""]["kaitori_staff_id"] = "Kaitori Staff Id";
	$fieldToolTipsEoctest[""]["kaitori_staff_id"] = "";
	$placeHoldersEoctest[""]["kaitori_staff_id"] = "";
	$fieldLabelsEoctest[""]["name2"] = "Name2";
	$fieldToolTipsEoctest[""]["name2"] = "";
	$placeHoldersEoctest[""]["name2"] = "";
	$fieldLabelsEoctest[""]["wareki"] = "Wareki";
	$fieldToolTipsEoctest[""]["wareki"] = "";
	$placeHoldersEoctest[""]["wareki"] = "";
	$fieldLabelsEoctest[""]["b1"] = "B1";
	$fieldToolTipsEoctest[""]["b1"] = "";
	$placeHoldersEoctest[""]["b1"] = "";
	$fieldLabelsEoctest[""]["b2"] = "B2";
	$fieldToolTipsEoctest[""]["b2"] = "";
	$placeHoldersEoctest[""]["b2"] = "";
	$fieldLabelsEoctest[""]["b3"] = "B3";
	$fieldToolTipsEoctest[""]["b3"] = "";
	$placeHoldersEoctest[""]["b3"] = "";
	$fieldLabelsEoctest[""]["birth_day"] = "Birth Day";
	$fieldToolTipsEoctest[""]["birth_day"] = "";
	$placeHoldersEoctest[""]["birth_day"] = "";
	$fieldLabelsEoctest[""]["age"] = "Age";
	$fieldToolTipsEoctest[""]["age"] = "";
	$placeHoldersEoctest[""]["age"] = "";
	$fieldLabelsEoctest[""]["zip"] = "Zip";
	$fieldToolTipsEoctest[""]["zip"] = "";
	$placeHoldersEoctest[""]["zip"] = "";
	$fieldLabelsEoctest[""]["zip1"] = "Zip1";
	$fieldToolTipsEoctest[""]["zip1"] = "";
	$placeHoldersEoctest[""]["zip1"] = "";
	$fieldLabelsEoctest[""]["zip2"] = "Zip2";
	$fieldToolTipsEoctest[""]["zip2"] = "";
	$placeHoldersEoctest[""]["zip2"] = "";
	$fieldLabelsEoctest[""]["address1"] = "Address1";
	$fieldToolTipsEoctest[""]["address1"] = "";
	$placeHoldersEoctest[""]["address1"] = "";
	$fieldLabelsEoctest[""]["address2"] = "Address2";
	$fieldToolTipsEoctest[""]["address2"] = "";
	$placeHoldersEoctest[""]["address2"] = "";
	$fieldLabelsEoctest[""]["address3"] = "Address3";
	$fieldToolTipsEoctest[""]["address3"] = "";
	$placeHoldersEoctest[""]["address3"] = "";
	$fieldLabelsEoctest[""]["tel"] = "Tel";
	$fieldToolTipsEoctest[""]["tel"] = "";
	$placeHoldersEoctest[""]["tel"] = "";
	$fieldLabelsEoctest[""]["tel2"] = "Tel2";
	$fieldToolTipsEoctest[""]["tel2"] = "";
	$placeHoldersEoctest[""]["tel2"] = "";
	$fieldLabelsEoctest[""]["mail1"] = "Mail1";
	$fieldToolTipsEoctest[""]["mail1"] = "";
	$placeHoldersEoctest[""]["mail1"] = "";
	$fieldLabelsEoctest[""]["mail2"] = "Mail2";
	$fieldToolTipsEoctest[""]["mail2"] = "";
	$placeHoldersEoctest[""]["mail2"] = "";
	$fieldLabelsEoctest[""]["address_code"] = "Address Code";
	$fieldToolTipsEoctest[""]["address_code"] = "";
	$placeHoldersEoctest[""]["address_code"] = "";
	$fieldLabelsEoctest[""]["bank_name"] = "Bank Name";
	$fieldToolTipsEoctest[""]["bank_name"] = "";
	$placeHoldersEoctest[""]["bank_name"] = "";
	$fieldLabelsEoctest[""]["bank_blunch_code"] = "Bank Blunch Code";
	$fieldToolTipsEoctest[""]["bank_blunch_code"] = "";
	$placeHoldersEoctest[""]["bank_blunch_code"] = "";
	$fieldLabelsEoctest[""]["bank_yokin_shubetu"] = "Bank Yokin Shubetu";
	$fieldToolTipsEoctest[""]["bank_yokin_shubetu"] = "";
	$placeHoldersEoctest[""]["bank_yokin_shubetu"] = "";
	$fieldLabelsEoctest[""]["bank_account"] = "Bank Account";
	$fieldToolTipsEoctest[""]["bank_account"] = "";
	$placeHoldersEoctest[""]["bank_account"] = "";
	$fieldLabelsEoctest[""]["bank_acoount_name"] = "Bank Acoount Name";
	$fieldToolTipsEoctest[""]["bank_acoount_name"] = "";
	$placeHoldersEoctest[""]["bank_acoount_name"] = "";
	$fieldLabelsEoctest[""]["haisou_bangou"] = "Haisou Bangou";
	$fieldToolTipsEoctest[""]["haisou_bangou"] = "";
	$placeHoldersEoctest[""]["haisou_bangou"] = "";
	$fieldLabelsEoctest[""]["sise_houhou"] = "Sise Houhou";
	$fieldToolTipsEoctest[""]["sise_houhou"] = "";
	$placeHoldersEoctest[""]["sise_houhou"] = "";
	$fieldLabelsEoctest[""]["hentou_houhou"] = "Hentou Houhou";
	$fieldToolTipsEoctest[""]["hentou_houhou"] = "";
	$placeHoldersEoctest[""]["hentou_houhou"] = "";
	$fieldLabelsEoctest[""]["hentou_houhou_time"] = "Hentou Houhou Time";
	$fieldToolTipsEoctest[""]["hentou_houhou_time"] = "";
	$placeHoldersEoctest[""]["hentou_houhou_time"] = "";
	$fieldLabelsEoctest[""]["mousikomi_id"] = "Mousikomi Id";
	$fieldToolTipsEoctest[""]["mousikomi_id"] = "";
	$placeHoldersEoctest[""]["mousikomi_id"] = "";
	$fieldLabelsEoctest[""]["hituyou_shorui"] = "Hituyou Shorui";
	$fieldToolTipsEoctest[""]["hituyou_shorui"] = "";
	$placeHoldersEoctest[""]["hituyou_shorui"] = "";
	$fieldLabelsEoctest[""]["seiyaku_fuseiritu"] = "Seiyaku Fuseiritu";
	$fieldToolTipsEoctest[""]["seiyaku_fuseiritu"] = "";
	$placeHoldersEoctest[""]["seiyaku_fuseiritu"] = "";
	$fieldLabelsEoctest[""]["mitumori_taku"] = "Mitumori Taku";
	$fieldToolTipsEoctest[""]["mitumori_taku"] = "";
	$placeHoldersEoctest[""]["mitumori_taku"] = "";
	$fieldLabelsEoctest[""]["seacanse"] = "Seacanse";
	$fieldToolTipsEoctest[""]["seacanse"] = "";
	$placeHoldersEoctest[""]["seacanse"] = "";
	$fieldLabelsEoctest[""]["remark"] = "Remark";
	$fieldToolTipsEoctest[""]["remark"] = "";
	$placeHoldersEoctest[""]["remark"] = "";
	$fieldLabelsEoctest[""]["type"] = "Type";
	$fieldToolTipsEoctest[""]["type"] = "";
	$placeHoldersEoctest[""]["type"] = "";
	$fieldLabelsEoctest[""]["sales_flag"] = "Sales Flag";
	$fieldToolTipsEoctest[""]["sales_flag"] = "";
	$placeHoldersEoctest[""]["sales_flag"] = "";
	$fieldLabelsEoctest[""]["src_type"] = "Src Type";
	$fieldToolTipsEoctest[""]["src_type"] = "";
	$placeHoldersEoctest[""]["src_type"] = "";
	$fieldLabelsEoctest[""]["liquidation_shop_code"] = "Liquidation Shop Code";
	$fieldToolTipsEoctest[""]["liquidation_shop_code"] = "";
	$placeHoldersEoctest[""]["liquidation_shop_code"] = "";
	$fieldLabelsEoctest[""]["insurance_amount_print"] = "Insurance Amount Print";
	$fieldToolTipsEoctest[""]["insurance_amount_print"] = "";
	$placeHoldersEoctest[""]["insurance_amount_print"] = "";
	$fieldLabelsEoctest[""]["jis_code"] = "Jis Code";
	$fieldToolTipsEoctest[""]["jis_code"] = "";
	$placeHoldersEoctest[""]["jis_code"] = "";
	$fieldLabelsEoctest[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoctest[""]["updated_at"] = "";
	$placeHoldersEoctest[""]["updated_at"] = "";
	$fieldLabelsEoctest[""]["_registerd_id"] = "Registerd Id";
	$fieldToolTipsEoctest[""]["_registerd_id"] = "";
	$placeHoldersEoctest[""]["_registerd_id"] = "";
	$fieldLabelsEoctest[""]["mail_check_type"] = "Mail Check Type";
	$fieldToolTipsEoctest[""]["mail_check_type"] = "";
	$placeHoldersEoctest[""]["mail_check_type"] = "";
	$fieldLabelsEoctest[""]["purchase_type"] = "Purchase Type";
	$fieldToolTipsEoctest[""]["purchase_type"] = "";
	$placeHoldersEoctest[""]["purchase_type"] = "";
	$fieldLabelsEoctest[""]["sex"] = "Sex";
	$fieldToolTipsEoctest[""]["sex"] = "";
	$placeHoldersEoctest[""]["sex"] = "";
	$fieldLabelsEoctest[""]["m_tel"] = "M Tel";
	$fieldToolTipsEoctest[""]["m_tel"] = "";
	$placeHoldersEoctest[""]["m_tel"] = "";
	$fieldLabelsEoctest[""]["fax"] = "Fax";
	$fieldToolTipsEoctest[""]["fax"] = "";
	$placeHoldersEoctest[""]["fax"] = "";
	$fieldLabelsEoctest[""]["chigin_kaitori"] = "Chigin Kaitori";
	$fieldToolTipsEoctest[""]["chigin_kaitori"] = "";
	$placeHoldersEoctest[""]["chigin_kaitori"] = "";
	$fieldLabelsEoctest[""]["option1"] = "Option1";
	$fieldToolTipsEoctest[""]["option1"] = "";
	$placeHoldersEoctest[""]["option1"] = "";
	$fieldLabelsEoctest[""]["option2"] = "Option2";
	$fieldToolTipsEoctest[""]["option2"] = "";
	$placeHoldersEoctest[""]["option2"] = "";
	$fieldLabelsEoctest[""]["option3"] = "Option3";
	$fieldToolTipsEoctest[""]["option3"] = "";
	$placeHoldersEoctest[""]["option3"] = "";
	$fieldLabelsEoctest[""]["option4"] = "Option4";
	$fieldToolTipsEoctest[""]["option4"] = "";
	$placeHoldersEoctest[""]["option4"] = "";
	$fieldLabelsEoctest[""]["option5"] = "Option5";
	$fieldToolTipsEoctest[""]["option5"] = "";
	$placeHoldersEoctest[""]["option5"] = "";
	$fieldLabelsEoctest[""]["option6"] = "Option6";
	$fieldToolTipsEoctest[""]["option6"] = "";
	$placeHoldersEoctest[""]["option6"] = "";
	$fieldLabelsEoctest[""]["option7"] = "Option7";
	$fieldToolTipsEoctest[""]["option7"] = "";
	$placeHoldersEoctest[""]["option7"] = "";
	$fieldLabelsEoctest[""]["option8"] = "Option8";
	$fieldToolTipsEoctest[""]["option8"] = "";
	$placeHoldersEoctest[""]["option8"] = "";
	$fieldLabelsEoctest[""]["option9"] = "Option9";
	$fieldToolTipsEoctest[""]["option9"] = "";
	$placeHoldersEoctest[""]["option9"] = "";
	$fieldLabelsEoctest[""]["option10"] = "Option10";
	$fieldToolTipsEoctest[""]["option10"] = "";
	$placeHoldersEoctest[""]["option10"] = "";
	$fieldLabelsEoctest[""]["option11"] = "Option11";
	$fieldToolTipsEoctest[""]["option11"] = "";
	$placeHoldersEoctest[""]["option11"] = "";
	$fieldLabelsEoctest[""]["option12"] = "Option12";
	$fieldToolTipsEoctest[""]["option12"] = "";
	$placeHoldersEoctest[""]["option12"] = "";
	$fieldLabelsEoctest[""]["option13"] = "Option13";
	$fieldToolTipsEoctest[""]["option13"] = "";
	$placeHoldersEoctest[""]["option13"] = "";
	$fieldLabelsEoctest[""]["rakuda_csv_flag"] = "Rakuda Csv Flag";
	$fieldToolTipsEoctest[""]["rakuda_csv_flag"] = "";
	$placeHoldersEoctest[""]["rakuda_csv_flag"] = "";
	$fieldLabelsEoctest[""]["EOC_COURIER_CHECK"] = "EOC COURIER CHECK";
	$fieldToolTipsEoctest[""]["EOC_COURIER_CHECK"] = "";
	$placeHoldersEoctest[""]["EOC_COURIER_CHECK"] = "";
	$fieldLabelsEoctest[""]["EOC_SIZE"] = "EOC SIZE";
	$fieldToolTipsEoctest[""]["EOC_SIZE"] = "";
	$placeHoldersEoctest[""]["EOC_SIZE"] = "";
	$fieldLabelsEoctest[""]["EOC_NUMBER"] = "EOC NUMBER";
	$fieldToolTipsEoctest[""]["EOC_NUMBER"] = "";
	$placeHoldersEoctest[""]["EOC_NUMBER"] = "";
	$fieldLabelsEoctest[""]["EOC_REUSE"] = "EOC REUSE";
	$fieldToolTipsEoctest[""]["EOC_REUSE"] = "";
	$placeHoldersEoctest[""]["EOC_REUSE"] = "";
	$fieldLabelsEoctest[""]["EOC__DELIVERY_DATES"] = "EOC  DELIVERY DATES";
	$fieldToolTipsEoctest[""]["EOC__DELIVERY_DATES"] = "";
	$placeHoldersEoctest[""]["EOC__DELIVERY_DATES"] = "";
	$fieldLabelsEoctest[""]["EOC_SPECIFIED_TIME"] = "EOC SPECIFIED TIME";
	$fieldToolTipsEoctest[""]["EOC_SPECIFIED_TIME"] = "";
	$placeHoldersEoctest[""]["EOC_SPECIFIED_TIME"] = "";
	$fieldLabelsEoctest[""]["FIRST_NAME2"] = "FIRST NAME2";
	$fieldToolTipsEoctest[""]["FIRST_NAME2"] = "";
	$placeHoldersEoctest[""]["FIRST_NAME2"] = "";
	$fieldLabelsEoctest[""]["LAST_NAME2"] = "LAST NAME2";
	$fieldToolTipsEoctest[""]["LAST_NAME2"] = "";
	$placeHoldersEoctest[""]["LAST_NAME2"] = "";
	$fieldLabelsEoctest[""]["EOC__DATE_AND_TIME_2"] = "EOC  DATE AND TIME 2";
	$fieldToolTipsEoctest[""]["EOC__DATE_AND_TIME_2"] = "";
	$placeHoldersEoctest[""]["EOC__DATE_AND_TIME_2"] = "";
	$fieldLabelsEoctest[""]["EOC__BOX_NUMBER"] = "EOC  BOX NUMBER";
	$fieldToolTipsEoctest[""]["EOC__BOX_NUMBER"] = "";
	$placeHoldersEoctest[""]["EOC__BOX_NUMBER"] = "";
	$fieldLabelsEoctest[""]["FIRST_NAME_KANA"] = "FIRST NAME KANA";
	$fieldToolTipsEoctest[""]["FIRST_NAME_KANA"] = "";
	$placeHoldersEoctest[""]["FIRST_NAME_KANA"] = "";
	$fieldLabelsEoctest[""]["LAST_NAME_KANA"] = "LAST NAME KANA";
	$fieldToolTipsEoctest[""]["LAST_NAME_KANA"] = "";
	$placeHoldersEoctest[""]["LAST_NAME_KANA"] = "";
	$fieldLabelsEoctest[""]["FLAG_SPEED"] = "FLAG SPEED";
	$fieldToolTipsEoctest[""]["FLAG_SPEED"] = "";
	$placeHoldersEoctest[""]["FLAG_SPEED"] = "";
	$fieldLabelsEoctest[""]["SEARCH_MEDIA"] = "SEARCH MEDIA";
	$fieldToolTipsEoctest[""]["SEARCH_MEDIA"] = "";
	$placeHoldersEoctest[""]["SEARCH_MEDIA"] = "";
	$fieldLabelsEoctest[""]["SEARCH_SITE"] = "SEARCH SITE";
	$fieldToolTipsEoctest[""]["SEARCH_SITE"] = "";
	$placeHoldersEoctest[""]["SEARCH_SITE"] = "";
	$fieldLabelsEoctest[""]["UN_REACHABLE"] = "UN REACHABLE";
	$fieldToolTipsEoctest[""]["UN_REACHABLE"] = "";
	$placeHoldersEoctest[""]["UN_REACHABLE"] = "";
	$fieldLabelsEoctest[""]["FLG_MAIL_SAGAWA"] = "FLG MAIL SAGAWA";
	$fieldToolTipsEoctest[""]["FLG_MAIL_SAGAWA"] = "";
	$placeHoldersEoctest[""]["FLG_MAIL_SAGAWA"] = "";
	$fieldLabelsEoctest[""]["FLG_MAIL_OTHER"] = "FLG MAIL OTHER";
	$fieldToolTipsEoctest[""]["FLG_MAIL_OTHER"] = "";
	$placeHoldersEoctest[""]["FLG_MAIL_OTHER"] = "";
	$fieldLabelsEoctest[""]["ALLSEIYAKU"] = "ALLSEIYAKU";
	$fieldToolTipsEoctest[""]["ALLSEIYAKU"] = "";
	$placeHoldersEoctest[""]["ALLSEIYAKU"] = "";
	$fieldLabelsEoctest[""]["ICHIBUSEIYAKU"] = "ICHIBUSEIYAKU";
	$fieldToolTipsEoctest[""]["ICHIBUSEIYAKU"] = "";
	$placeHoldersEoctest[""]["ICHIBUSEIYAKU"] = "";
	$fieldLabelsEoctest[""]["seiyakukin"] = "Seiyakukin";
	$fieldToolTipsEoctest[""]["seiyakukin"] = "";
	$placeHoldersEoctest[""]["seiyakukin"] = "";
	$fieldLabelsEoctest[""]["kaitorihuka"] = "Kaitorihuka";
	$fieldToolTipsEoctest[""]["kaitorihuka"] = "";
	$placeHoldersEoctest[""]["kaitorihuka"] = "";
	$fieldLabelsEoctest[""]["awazu_date"] = "Awazu Date";
	$fieldToolTipsEoctest[""]["awazu_date"] = "";
	$placeHoldersEoctest[""]["awazu_date"] = "";
	$fieldLabelsEoctest[""]["seiyaku_price"] = "Seiyaku Price";
	$fieldToolTipsEoctest[""]["seiyaku_price"] = "";
	$placeHoldersEoctest[""]["seiyaku_price"] = "";
	$fieldLabelsEoctest[""]["eoc_search_keyword"] = "Eoc Search Keyword";
	$fieldToolTipsEoctest[""]["eoc_search_keyword"] = "";
	$placeHoldersEoctest[""]["eoc_search_keyword"] = "";
	$fieldLabelsEoctest[""]["sonota"] = "Sonota";
	$fieldToolTipsEoctest[""]["sonota"] = "";
	$placeHoldersEoctest[""]["sonota"] = "";
	$fieldLabelsEoctest[""]["size_kosuu"] = "Size Kosuu";
	$fieldToolTipsEoctest[""]["size_kosuu"] = "";
	$placeHoldersEoctest[""]["size_kosuu"] = "";
	$fieldLabelsEoctest[""]["sagawa_shuuka_flag"] = "Sagawa Shuuka Flag";
	$fieldToolTipsEoctest[""]["sagawa_shuuka_flag"] = "";
	$placeHoldersEoctest[""]["sagawa_shuuka_flag"] = "";
	$fieldLabelsEoctest[""]["line_check"] = "Line Check";
	$fieldToolTipsEoctest[""]["line_check"] = "";
	$placeHoldersEoctest[""]["line_check"] = "";
	$fieldLabelsEoctest[""]["sagawa_shuukairai_denwabangou"] = "Sagawa Shuukairai Denwabangou";
	$fieldToolTipsEoctest[""]["sagawa_shuukairai_denwabangou"] = "";
	$placeHoldersEoctest[""]["sagawa_shuukairai_denwabangou"] = "";
	$fieldLabelsEoctest[""]["kaitori_sougak"] = "Kaitori Sougak";
	$fieldToolTipsEoctest[""]["kaitori_sougak"] = "";
	$placeHoldersEoctest[""]["kaitori_sougak"] = "";
	$fieldLabelsEoctest[""]["flag"] = "Flag";
	$fieldToolTipsEoctest[""]["flag"] = "";
	$placeHoldersEoctest[""]["flag"] = "";
	$fieldLabelsEoctest[""]["key_code"] = "Key Code";
	$fieldToolTipsEoctest[""]["key_code"] = "";
	$placeHoldersEoctest[""]["key_code"] = "";
	if (count($fieldToolTipsEoctest[""]))
		$tdataEoctest[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoctest["English"] = array();
	$fieldToolTipsEoctest["English"] = array();
	$placeHoldersEoctest["English"] = array();
	$pageTitlesEoctest["English"] = array();
	$fieldLabelsEoctest["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoctest["English"]["ecc_id"] = "";
	$placeHoldersEoctest["English"]["ecc_id"] = "";
	$fieldLabelsEoctest["English"]["ecc_seq"] = "Ecc Seq";
	$fieldToolTipsEoctest["English"]["ecc_seq"] = "";
	$placeHoldersEoctest["English"]["ecc_seq"] = "";
	$fieldLabelsEoctest["English"]["name1"] = "Name1";
	$fieldToolTipsEoctest["English"]["name1"] = "";
	$placeHoldersEoctest["English"]["name1"] = "";
	$fieldLabelsEoctest["English"]["created_t"] = "Created T";
	$fieldToolTipsEoctest["English"]["created_t"] = "";
	$placeHoldersEoctest["English"]["created_t"] = "";
	$fieldLabelsEoctest["English"]["registerd_id"] = "Registerd Id";
	$fieldToolTipsEoctest["English"]["registerd_id"] = "";
	$placeHoldersEoctest["English"]["registerd_id"] = "";
	$fieldLabelsEoctest["English"]["kaitori_staff_id"] = "Kaitori Staff Id";
	$fieldToolTipsEoctest["English"]["kaitori_staff_id"] = "";
	$placeHoldersEoctest["English"]["kaitori_staff_id"] = "";
	$fieldLabelsEoctest["English"]["name2"] = "Name2";
	$fieldToolTipsEoctest["English"]["name2"] = "";
	$placeHoldersEoctest["English"]["name2"] = "";
	$fieldLabelsEoctest["English"]["wareki"] = "Wareki";
	$fieldToolTipsEoctest["English"]["wareki"] = "";
	$placeHoldersEoctest["English"]["wareki"] = "";
	$fieldLabelsEoctest["English"]["b1"] = "B1";
	$fieldToolTipsEoctest["English"]["b1"] = "";
	$placeHoldersEoctest["English"]["b1"] = "";
	$fieldLabelsEoctest["English"]["b2"] = "B2";
	$fieldToolTipsEoctest["English"]["b2"] = "";
	$placeHoldersEoctest["English"]["b2"] = "";
	$fieldLabelsEoctest["English"]["b3"] = "B3";
	$fieldToolTipsEoctest["English"]["b3"] = "";
	$placeHoldersEoctest["English"]["b3"] = "";
	$fieldLabelsEoctest["English"]["birth_day"] = "Birth Day";
	$fieldToolTipsEoctest["English"]["birth_day"] = "";
	$placeHoldersEoctest["English"]["birth_day"] = "";
	$fieldLabelsEoctest["English"]["age"] = "Age";
	$fieldToolTipsEoctest["English"]["age"] = "";
	$placeHoldersEoctest["English"]["age"] = "";
	$fieldLabelsEoctest["English"]["zip"] = "Zip";
	$fieldToolTipsEoctest["English"]["zip"] = "";
	$placeHoldersEoctest["English"]["zip"] = "";
	$fieldLabelsEoctest["English"]["zip1"] = "Zip1";
	$fieldToolTipsEoctest["English"]["zip1"] = "";
	$placeHoldersEoctest["English"]["zip1"] = "";
	$fieldLabelsEoctest["English"]["zip2"] = "Zip2";
	$fieldToolTipsEoctest["English"]["zip2"] = "";
	$placeHoldersEoctest["English"]["zip2"] = "";
	$fieldLabelsEoctest["English"]["address1"] = "Address1";
	$fieldToolTipsEoctest["English"]["address1"] = "";
	$placeHoldersEoctest["English"]["address1"] = "";
	$fieldLabelsEoctest["English"]["address2"] = "Address2";
	$fieldToolTipsEoctest["English"]["address2"] = "";
	$placeHoldersEoctest["English"]["address2"] = "";
	$fieldLabelsEoctest["English"]["address3"] = "Address3";
	$fieldToolTipsEoctest["English"]["address3"] = "";
	$placeHoldersEoctest["English"]["address3"] = "";
	$fieldLabelsEoctest["English"]["tel"] = "Tel";
	$fieldToolTipsEoctest["English"]["tel"] = "";
	$placeHoldersEoctest["English"]["tel"] = "";
	$fieldLabelsEoctest["English"]["tel2"] = "Tel2";
	$fieldToolTipsEoctest["English"]["tel2"] = "";
	$placeHoldersEoctest["English"]["tel2"] = "";
	$fieldLabelsEoctest["English"]["mail1"] = "Mail1";
	$fieldToolTipsEoctest["English"]["mail1"] = "";
	$placeHoldersEoctest["English"]["mail1"] = "";
	$fieldLabelsEoctest["English"]["mail2"] = "Mail2";
	$fieldToolTipsEoctest["English"]["mail2"] = "";
	$placeHoldersEoctest["English"]["mail2"] = "";
	$fieldLabelsEoctest["English"]["address_code"] = "Address Code";
	$fieldToolTipsEoctest["English"]["address_code"] = "";
	$placeHoldersEoctest["English"]["address_code"] = "";
	$fieldLabelsEoctest["English"]["bank_name"] = "Bank Name";
	$fieldToolTipsEoctest["English"]["bank_name"] = "";
	$placeHoldersEoctest["English"]["bank_name"] = "";
	$fieldLabelsEoctest["English"]["bank_blunch_code"] = "Bank Blunch Code";
	$fieldToolTipsEoctest["English"]["bank_blunch_code"] = "";
	$placeHoldersEoctest["English"]["bank_blunch_code"] = "";
	$fieldLabelsEoctest["English"]["bank_yokin_shubetu"] = "Bank Yokin Shubetu";
	$fieldToolTipsEoctest["English"]["bank_yokin_shubetu"] = "";
	$placeHoldersEoctest["English"]["bank_yokin_shubetu"] = "";
	$fieldLabelsEoctest["English"]["bank_account"] = "Bank Account";
	$fieldToolTipsEoctest["English"]["bank_account"] = "";
	$placeHoldersEoctest["English"]["bank_account"] = "";
	$fieldLabelsEoctest["English"]["bank_acoount_name"] = "Bank Acoount Name";
	$fieldToolTipsEoctest["English"]["bank_acoount_name"] = "";
	$placeHoldersEoctest["English"]["bank_acoount_name"] = "";
	$fieldLabelsEoctest["English"]["haisou_bangou"] = "Haisou Bangou";
	$fieldToolTipsEoctest["English"]["haisou_bangou"] = "";
	$placeHoldersEoctest["English"]["haisou_bangou"] = "";
	$fieldLabelsEoctest["English"]["sise_houhou"] = "Sise Houhou";
	$fieldToolTipsEoctest["English"]["sise_houhou"] = "";
	$placeHoldersEoctest["English"]["sise_houhou"] = "";
	$fieldLabelsEoctest["English"]["hentou_houhou"] = "Hentou Houhou";
	$fieldToolTipsEoctest["English"]["hentou_houhou"] = "";
	$placeHoldersEoctest["English"]["hentou_houhou"] = "";
	$fieldLabelsEoctest["English"]["hentou_houhou_time"] = "Hentou Houhou Time";
	$fieldToolTipsEoctest["English"]["hentou_houhou_time"] = "";
	$placeHoldersEoctest["English"]["hentou_houhou_time"] = "";
	$fieldLabelsEoctest["English"]["mousikomi_id"] = "Mousikomi Id";
	$fieldToolTipsEoctest["English"]["mousikomi_id"] = "";
	$placeHoldersEoctest["English"]["mousikomi_id"] = "";
	$fieldLabelsEoctest["English"]["hituyou_shorui"] = "Hituyou Shorui";
	$fieldToolTipsEoctest["English"]["hituyou_shorui"] = "";
	$placeHoldersEoctest["English"]["hituyou_shorui"] = "";
	$fieldLabelsEoctest["English"]["seiyaku_fuseiritu"] = "Seiyaku Fuseiritu";
	$fieldToolTipsEoctest["English"]["seiyaku_fuseiritu"] = "";
	$placeHoldersEoctest["English"]["seiyaku_fuseiritu"] = "";
	$fieldLabelsEoctest["English"]["mitumori_taku"] = "Mitumori Taku";
	$fieldToolTipsEoctest["English"]["mitumori_taku"] = "";
	$placeHoldersEoctest["English"]["mitumori_taku"] = "";
	$fieldLabelsEoctest["English"]["seacanse"] = "Seacanse";
	$fieldToolTipsEoctest["English"]["seacanse"] = "";
	$placeHoldersEoctest["English"]["seacanse"] = "";
	$fieldLabelsEoctest["English"]["remark"] = "Remark";
	$fieldToolTipsEoctest["English"]["remark"] = "";
	$placeHoldersEoctest["English"]["remark"] = "";
	$fieldLabelsEoctest["English"]["type"] = "Type";
	$fieldToolTipsEoctest["English"]["type"] = "";
	$placeHoldersEoctest["English"]["type"] = "";
	$fieldLabelsEoctest["English"]["sales_flag"] = "Sales Flag";
	$fieldToolTipsEoctest["English"]["sales_flag"] = "";
	$placeHoldersEoctest["English"]["sales_flag"] = "";
	$fieldLabelsEoctest["English"]["src_type"] = "Src Type";
	$fieldToolTipsEoctest["English"]["src_type"] = "";
	$placeHoldersEoctest["English"]["src_type"] = "";
	$fieldLabelsEoctest["English"]["liquidation_shop_code"] = "Liquidation Shop Code";
	$fieldToolTipsEoctest["English"]["liquidation_shop_code"] = "";
	$placeHoldersEoctest["English"]["liquidation_shop_code"] = "";
	$fieldLabelsEoctest["English"]["insurance_amount_print"] = "Insurance Amount Print";
	$fieldToolTipsEoctest["English"]["insurance_amount_print"] = "";
	$placeHoldersEoctest["English"]["insurance_amount_print"] = "";
	$fieldLabelsEoctest["English"]["jis_code"] = "Jis Code";
	$fieldToolTipsEoctest["English"]["jis_code"] = "";
	$placeHoldersEoctest["English"]["jis_code"] = "";
	$fieldLabelsEoctest["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoctest["English"]["updated_at"] = "";
	$placeHoldersEoctest["English"]["updated_at"] = "";
	$fieldLabelsEoctest["English"]["_registerd_id"] = "Registerd Id";
	$fieldToolTipsEoctest["English"]["_registerd_id"] = "";
	$placeHoldersEoctest["English"]["_registerd_id"] = "";
	$fieldLabelsEoctest["English"]["mail_check_type"] = "Mail Check Type";
	$fieldToolTipsEoctest["English"]["mail_check_type"] = "";
	$placeHoldersEoctest["English"]["mail_check_type"] = "";
	$fieldLabelsEoctest["English"]["purchase_type"] = "Purchase Type";
	$fieldToolTipsEoctest["English"]["purchase_type"] = "";
	$placeHoldersEoctest["English"]["purchase_type"] = "";
	$fieldLabelsEoctest["English"]["sex"] = "Sex";
	$fieldToolTipsEoctest["English"]["sex"] = "";
	$placeHoldersEoctest["English"]["sex"] = "";
	$fieldLabelsEoctest["English"]["m_tel"] = "M Tel";
	$fieldToolTipsEoctest["English"]["m_tel"] = "";
	$placeHoldersEoctest["English"]["m_tel"] = "";
	$fieldLabelsEoctest["English"]["fax"] = "Fax";
	$fieldToolTipsEoctest["English"]["fax"] = "";
	$placeHoldersEoctest["English"]["fax"] = "";
	$fieldLabelsEoctest["English"]["chigin_kaitori"] = "Chigin Kaitori";
	$fieldToolTipsEoctest["English"]["chigin_kaitori"] = "";
	$placeHoldersEoctest["English"]["chigin_kaitori"] = "";
	$fieldLabelsEoctest["English"]["option1"] = "Option1";
	$fieldToolTipsEoctest["English"]["option1"] = "";
	$placeHoldersEoctest["English"]["option1"] = "";
	$fieldLabelsEoctest["English"]["option2"] = "Option2";
	$fieldToolTipsEoctest["English"]["option2"] = "";
	$placeHoldersEoctest["English"]["option2"] = "";
	$fieldLabelsEoctest["English"]["option3"] = "Option3";
	$fieldToolTipsEoctest["English"]["option3"] = "";
	$placeHoldersEoctest["English"]["option3"] = "";
	$fieldLabelsEoctest["English"]["option4"] = "Option4";
	$fieldToolTipsEoctest["English"]["option4"] = "";
	$placeHoldersEoctest["English"]["option4"] = "";
	$fieldLabelsEoctest["English"]["option5"] = "Option5";
	$fieldToolTipsEoctest["English"]["option5"] = "";
	$placeHoldersEoctest["English"]["option5"] = "";
	$fieldLabelsEoctest["English"]["option6"] = "Option6";
	$fieldToolTipsEoctest["English"]["option6"] = "";
	$placeHoldersEoctest["English"]["option6"] = "";
	$fieldLabelsEoctest["English"]["option7"] = "Option7";
	$fieldToolTipsEoctest["English"]["option7"] = "";
	$placeHoldersEoctest["English"]["option7"] = "";
	$fieldLabelsEoctest["English"]["option8"] = "Option8";
	$fieldToolTipsEoctest["English"]["option8"] = "";
	$placeHoldersEoctest["English"]["option8"] = "";
	$fieldLabelsEoctest["English"]["option9"] = "Option9";
	$fieldToolTipsEoctest["English"]["option9"] = "";
	$placeHoldersEoctest["English"]["option9"] = "";
	$fieldLabelsEoctest["English"]["option10"] = "Option10";
	$fieldToolTipsEoctest["English"]["option10"] = "";
	$placeHoldersEoctest["English"]["option10"] = "";
	$fieldLabelsEoctest["English"]["option11"] = "Option11";
	$fieldToolTipsEoctest["English"]["option11"] = "";
	$placeHoldersEoctest["English"]["option11"] = "";
	$fieldLabelsEoctest["English"]["option12"] = "Option12";
	$fieldToolTipsEoctest["English"]["option12"] = "";
	$placeHoldersEoctest["English"]["option12"] = "";
	$fieldLabelsEoctest["English"]["option13"] = "Option13";
	$fieldToolTipsEoctest["English"]["option13"] = "";
	$placeHoldersEoctest["English"]["option13"] = "";
	$fieldLabelsEoctest["English"]["rakuda_csv_flag"] = "Rakuda Csv Flag";
	$fieldToolTipsEoctest["English"]["rakuda_csv_flag"] = "";
	$placeHoldersEoctest["English"]["rakuda_csv_flag"] = "";
	$fieldLabelsEoctest["English"]["EOC_COURIER_CHECK"] = "EOC COURIER CHECK";
	$fieldToolTipsEoctest["English"]["EOC_COURIER_CHECK"] = "";
	$placeHoldersEoctest["English"]["EOC_COURIER_CHECK"] = "";
	$fieldLabelsEoctest["English"]["EOC_SIZE"] = "EOC SIZE";
	$fieldToolTipsEoctest["English"]["EOC_SIZE"] = "";
	$placeHoldersEoctest["English"]["EOC_SIZE"] = "";
	$fieldLabelsEoctest["English"]["EOC_NUMBER"] = "EOC NUMBER";
	$fieldToolTipsEoctest["English"]["EOC_NUMBER"] = "";
	$placeHoldersEoctest["English"]["EOC_NUMBER"] = "";
	$fieldLabelsEoctest["English"]["EOC_REUSE"] = "EOC REUSE";
	$fieldToolTipsEoctest["English"]["EOC_REUSE"] = "";
	$placeHoldersEoctest["English"]["EOC_REUSE"] = "";
	$fieldLabelsEoctest["English"]["EOC__DELIVERY_DATES"] = "EOC  DELIVERY DATES";
	$fieldToolTipsEoctest["English"]["EOC__DELIVERY_DATES"] = "";
	$placeHoldersEoctest["English"]["EOC__DELIVERY_DATES"] = "";
	$fieldLabelsEoctest["English"]["EOC_SPECIFIED_TIME"] = "EOC SPECIFIED TIME";
	$fieldToolTipsEoctest["English"]["EOC_SPECIFIED_TIME"] = "";
	$placeHoldersEoctest["English"]["EOC_SPECIFIED_TIME"] = "";
	$fieldLabelsEoctest["English"]["FIRST_NAME2"] = "FIRST NAME2";
	$fieldToolTipsEoctest["English"]["FIRST_NAME2"] = "";
	$placeHoldersEoctest["English"]["FIRST_NAME2"] = "";
	$fieldLabelsEoctest["English"]["LAST_NAME2"] = "LAST NAME2";
	$fieldToolTipsEoctest["English"]["LAST_NAME2"] = "";
	$placeHoldersEoctest["English"]["LAST_NAME2"] = "";
	$fieldLabelsEoctest["English"]["EOC__DATE_AND_TIME_2"] = "EOC  DATE AND TIME 2";
	$fieldToolTipsEoctest["English"]["EOC__DATE_AND_TIME_2"] = "";
	$placeHoldersEoctest["English"]["EOC__DATE_AND_TIME_2"] = "";
	$fieldLabelsEoctest["English"]["EOC__BOX_NUMBER"] = "EOC  BOX NUMBER";
	$fieldToolTipsEoctest["English"]["EOC__BOX_NUMBER"] = "";
	$placeHoldersEoctest["English"]["EOC__BOX_NUMBER"] = "";
	$fieldLabelsEoctest["English"]["FIRST_NAME_KANA"] = "FIRST NAME KANA";
	$fieldToolTipsEoctest["English"]["FIRST_NAME_KANA"] = "";
	$placeHoldersEoctest["English"]["FIRST_NAME_KANA"] = "";
	$fieldLabelsEoctest["English"]["LAST_NAME_KANA"] = "LAST NAME KANA";
	$fieldToolTipsEoctest["English"]["LAST_NAME_KANA"] = "";
	$placeHoldersEoctest["English"]["LAST_NAME_KANA"] = "";
	$fieldLabelsEoctest["English"]["FLAG_SPEED"] = "FLAG SPEED";
	$fieldToolTipsEoctest["English"]["FLAG_SPEED"] = "";
	$placeHoldersEoctest["English"]["FLAG_SPEED"] = "";
	$fieldLabelsEoctest["English"]["SEARCH_MEDIA"] = "SEARCH MEDIA";
	$fieldToolTipsEoctest["English"]["SEARCH_MEDIA"] = "";
	$placeHoldersEoctest["English"]["SEARCH_MEDIA"] = "";
	$fieldLabelsEoctest["English"]["SEARCH_SITE"] = "SEARCH SITE";
	$fieldToolTipsEoctest["English"]["SEARCH_SITE"] = "";
	$placeHoldersEoctest["English"]["SEARCH_SITE"] = "";
	$fieldLabelsEoctest["English"]["UN_REACHABLE"] = "UN REACHABLE";
	$fieldToolTipsEoctest["English"]["UN_REACHABLE"] = "";
	$placeHoldersEoctest["English"]["UN_REACHABLE"] = "";
	$fieldLabelsEoctest["English"]["FLG_MAIL_SAGAWA"] = "FLG MAIL SAGAWA";
	$fieldToolTipsEoctest["English"]["FLG_MAIL_SAGAWA"] = "";
	$placeHoldersEoctest["English"]["FLG_MAIL_SAGAWA"] = "";
	$fieldLabelsEoctest["English"]["FLG_MAIL_OTHER"] = "FLG MAIL OTHER";
	$fieldToolTipsEoctest["English"]["FLG_MAIL_OTHER"] = "";
	$placeHoldersEoctest["English"]["FLG_MAIL_OTHER"] = "";
	$fieldLabelsEoctest["English"]["ALLSEIYAKU"] = "ALLSEIYAKU";
	$fieldToolTipsEoctest["English"]["ALLSEIYAKU"] = "";
	$placeHoldersEoctest["English"]["ALLSEIYAKU"] = "";
	$fieldLabelsEoctest["English"]["ICHIBUSEIYAKU"] = "ICHIBUSEIYAKU";
	$fieldToolTipsEoctest["English"]["ICHIBUSEIYAKU"] = "";
	$placeHoldersEoctest["English"]["ICHIBUSEIYAKU"] = "";
	$fieldLabelsEoctest["English"]["seiyakukin"] = "Seiyakukin";
	$fieldToolTipsEoctest["English"]["seiyakukin"] = "";
	$placeHoldersEoctest["English"]["seiyakukin"] = "";
	$fieldLabelsEoctest["English"]["kaitorihuka"] = "Kaitorihuka";
	$fieldToolTipsEoctest["English"]["kaitorihuka"] = "";
	$placeHoldersEoctest["English"]["kaitorihuka"] = "";
	$fieldLabelsEoctest["English"]["awazu_date"] = "Awazu Date";
	$fieldToolTipsEoctest["English"]["awazu_date"] = "";
	$placeHoldersEoctest["English"]["awazu_date"] = "";
	$fieldLabelsEoctest["English"]["seiyaku_price"] = "Seiyaku Price";
	$fieldToolTipsEoctest["English"]["seiyaku_price"] = "";
	$placeHoldersEoctest["English"]["seiyaku_price"] = "";
	$fieldLabelsEoctest["English"]["eoc_search_keyword"] = "Eoc Search Keyword";
	$fieldToolTipsEoctest["English"]["eoc_search_keyword"] = "";
	$placeHoldersEoctest["English"]["eoc_search_keyword"] = "";
	$fieldLabelsEoctest["English"]["sonota"] = "Sonota";
	$fieldToolTipsEoctest["English"]["sonota"] = "";
	$placeHoldersEoctest["English"]["sonota"] = "";
	$fieldLabelsEoctest["English"]["size_kosuu"] = "Size Kosuu";
	$fieldToolTipsEoctest["English"]["size_kosuu"] = "";
	$placeHoldersEoctest["English"]["size_kosuu"] = "";
	$fieldLabelsEoctest["English"]["sagawa_shuuka_flag"] = "Sagawa Shuuka Flag";
	$fieldToolTipsEoctest["English"]["sagawa_shuuka_flag"] = "";
	$placeHoldersEoctest["English"]["sagawa_shuuka_flag"] = "";
	$fieldLabelsEoctest["English"]["line_check"] = "Line Check";
	$fieldToolTipsEoctest["English"]["line_check"] = "";
	$placeHoldersEoctest["English"]["line_check"] = "";
	$fieldLabelsEoctest["English"]["sagawa_shuukairai_denwabangou"] = "Sagawa Shuukairai Denwabangou";
	$fieldToolTipsEoctest["English"]["sagawa_shuukairai_denwabangou"] = "";
	$placeHoldersEoctest["English"]["sagawa_shuukairai_denwabangou"] = "";
	$fieldLabelsEoctest["English"]["kaitori_sougak"] = "Kaitori Sougak";
	$fieldToolTipsEoctest["English"]["kaitori_sougak"] = "";
	$placeHoldersEoctest["English"]["kaitori_sougak"] = "";
	$fieldLabelsEoctest["English"]["flag"] = "Flag";
	$fieldToolTipsEoctest["English"]["flag"] = "";
	$placeHoldersEoctest["English"]["flag"] = "";
	$fieldLabelsEoctest["English"]["key_code"] = "Key Code";
	$fieldToolTipsEoctest["English"]["key_code"] = "";
	$placeHoldersEoctest["English"]["key_code"] = "";
	if (count($fieldToolTipsEoctest["English"]))
		$tdataEoctest[".isUseToolTips"] = true;
}


	$tdataEoctest[".NCSearch"] = true;



$tdataEoctest[".shortTableName"] = "Eoctest";
$tdataEoctest[".nSecOptions"] = 0;
$tdataEoctest[".recsPerRowPrint"] = 1;
$tdataEoctest[".mainTableOwnerID"] = "";
$tdataEoctest[".moveNext"] = 1;
$tdataEoctest[".entityType"] = 0;

$tdataEoctest[".strOriginalTableName"] = "Eoctest";

	



$tdataEoctest[".showAddInPopup"] = false;

$tdataEoctest[".showEditInPopup"] = false;

$tdataEoctest[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoctest[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoctest[".fieldsForRegister"] = array();

$tdataEoctest[".listAjax"] = false;

	$tdataEoctest[".audit"] = false;

	$tdataEoctest[".locking"] = false;

$tdataEoctest[".edit"] = true;
$tdataEoctest[".afterEditAction"] = 1;
$tdataEoctest[".closePopupAfterEdit"] = 1;
$tdataEoctest[".afterEditActionDetTable"] = "";

$tdataEoctest[".add"] = true;
$tdataEoctest[".afterAddAction"] = 1;
$tdataEoctest[".closePopupAfterAdd"] = 1;
$tdataEoctest[".afterAddActionDetTable"] = "";

$tdataEoctest[".list"] = true;

$tdataEoctest[".inlineEdit"] = true;


$tdataEoctest[".reorderRecordsByHeader"] = true;



$tdataEoctest[".inlineAdd"] = true;
$tdataEoctest[".view"] = true;

$tdataEoctest[".import"] = true;

$tdataEoctest[".exportTo"] = true;

$tdataEoctest[".printFriendly"] = true;

$tdataEoctest[".delete"] = true;

$tdataEoctest[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoctest[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoctest[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoctest[".searchSaving"] = false;
//

$tdataEoctest[".showSearchPanel"] = true;
		$tdataEoctest[".flexibleSearch"] = true;

$tdataEoctest[".isUseAjaxSuggest"] = true;

$tdataEoctest[".rowHighlite"] = true;



																																																																																																																																																																																																																													

$tdataEoctest[".ajaxCodeSnippetAdded"] = false;

$tdataEoctest[".buttonsAdded"] = false;

$tdataEoctest[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoctest[".isUseTimeForSearch"] = false;




$tdataEoctest[".detailsLinksOnList"] = "1";

$tdataEoctest[".allSearchFields"] = array();
$tdataEoctest[".filterFields"] = array();
$tdataEoctest[".requiredSearchFields"] = array();

$tdataEoctest[".allSearchFields"][] = "ecc_id";
	$tdataEoctest[".allSearchFields"][] = "ecc_seq";
	$tdataEoctest[".allSearchFields"][] = "name1";
	$tdataEoctest[".allSearchFields"][] = "created_t";
	$tdataEoctest[".allSearchFields"][] = "registerd_id";
	$tdataEoctest[".allSearchFields"][] = "kaitori_staff_id";
	$tdataEoctest[".allSearchFields"][] = "name2";
	$tdataEoctest[".allSearchFields"][] = "wareki";
	$tdataEoctest[".allSearchFields"][] = "b1";
	$tdataEoctest[".allSearchFields"][] = "b2";
	$tdataEoctest[".allSearchFields"][] = "b3";
	$tdataEoctest[".allSearchFields"][] = "birth_day";
	$tdataEoctest[".allSearchFields"][] = "age";
	$tdataEoctest[".allSearchFields"][] = "zip";
	$tdataEoctest[".allSearchFields"][] = "zip1";
	$tdataEoctest[".allSearchFields"][] = "zip2";
	$tdataEoctest[".allSearchFields"][] = "address1";
	$tdataEoctest[".allSearchFields"][] = "address2";
	$tdataEoctest[".allSearchFields"][] = "address3";
	$tdataEoctest[".allSearchFields"][] = "tel";
	$tdataEoctest[".allSearchFields"][] = "tel2";
	$tdataEoctest[".allSearchFields"][] = "mail1";
	$tdataEoctest[".allSearchFields"][] = "mail2";
	$tdataEoctest[".allSearchFields"][] = "address_code";
	$tdataEoctest[".allSearchFields"][] = "bank_name";
	$tdataEoctest[".allSearchFields"][] = "bank_blunch_code";
	$tdataEoctest[".allSearchFields"][] = "bank_yokin_shubetu";
	$tdataEoctest[".allSearchFields"][] = "bank_account";
	$tdataEoctest[".allSearchFields"][] = "bank_acoount_name";
	$tdataEoctest[".allSearchFields"][] = "haisou_bangou";
	$tdataEoctest[".allSearchFields"][] = "sise_houhou";
	$tdataEoctest[".allSearchFields"][] = "hentou_houhou";
	$tdataEoctest[".allSearchFields"][] = "hentou_houhou_time";
	$tdataEoctest[".allSearchFields"][] = "mousikomi_id";
	$tdataEoctest[".allSearchFields"][] = "hituyou_shorui";
	$tdataEoctest[".allSearchFields"][] = "seiyaku_fuseiritu";
	$tdataEoctest[".allSearchFields"][] = "mitumori_taku";
	$tdataEoctest[".allSearchFields"][] = "seacanse";
	$tdataEoctest[".allSearchFields"][] = "remark";
	$tdataEoctest[".allSearchFields"][] = "type";
	$tdataEoctest[".allSearchFields"][] = "sales_flag";
	$tdataEoctest[".allSearchFields"][] = "src_type";
	$tdataEoctest[".allSearchFields"][] = "liquidation_shop_code";
	$tdataEoctest[".allSearchFields"][] = "insurance_amount_print";
	$tdataEoctest[".allSearchFields"][] = "jis_code";
	$tdataEoctest[".allSearchFields"][] = "updated_at";
	$tdataEoctest[".allSearchFields"][] = "_registerd_id";
	$tdataEoctest[".allSearchFields"][] = "mail_check_type";
	$tdataEoctest[".allSearchFields"][] = "purchase_type";
	$tdataEoctest[".allSearchFields"][] = "sex";
	$tdataEoctest[".allSearchFields"][] = "m_tel";
	$tdataEoctest[".allSearchFields"][] = "fax";
	$tdataEoctest[".allSearchFields"][] = "chigin_kaitori";
	$tdataEoctest[".allSearchFields"][] = "option1";
	$tdataEoctest[".allSearchFields"][] = "option2";
	$tdataEoctest[".allSearchFields"][] = "option3";
	$tdataEoctest[".allSearchFields"][] = "option4";
	$tdataEoctest[".allSearchFields"][] = "option5";
	$tdataEoctest[".allSearchFields"][] = "option6";
	$tdataEoctest[".allSearchFields"][] = "option7";
	$tdataEoctest[".allSearchFields"][] = "option8";
	$tdataEoctest[".allSearchFields"][] = "option9";
	$tdataEoctest[".allSearchFields"][] = "option10";
	$tdataEoctest[".allSearchFields"][] = "option11";
	$tdataEoctest[".allSearchFields"][] = "option12";
	$tdataEoctest[".allSearchFields"][] = "option13";
	$tdataEoctest[".allSearchFields"][] = "rakuda_csv_flag";
	$tdataEoctest[".allSearchFields"][] = "EOC_COURIER_CHECK";
	$tdataEoctest[".allSearchFields"][] = "EOC_SIZE";
	$tdataEoctest[".allSearchFields"][] = "EOC_NUMBER";
	$tdataEoctest[".allSearchFields"][] = "EOC_REUSE";
	$tdataEoctest[".allSearchFields"][] = "EOC__DELIVERY_DATES";
	$tdataEoctest[".allSearchFields"][] = "EOC_SPECIFIED_TIME";
	$tdataEoctest[".allSearchFields"][] = "FIRST_NAME2";
	$tdataEoctest[".allSearchFields"][] = "LAST_NAME2";
	$tdataEoctest[".allSearchFields"][] = "EOC__DATE_AND_TIME_2";
	$tdataEoctest[".allSearchFields"][] = "EOC__BOX_NUMBER";
	$tdataEoctest[".allSearchFields"][] = "FIRST_NAME_KANA";
	$tdataEoctest[".allSearchFields"][] = "LAST_NAME_KANA";
	$tdataEoctest[".allSearchFields"][] = "FLAG_SPEED";
	$tdataEoctest[".allSearchFields"][] = "SEARCH_MEDIA";
	$tdataEoctest[".allSearchFields"][] = "SEARCH_SITE";
	$tdataEoctest[".allSearchFields"][] = "UN_REACHABLE";
	$tdataEoctest[".allSearchFields"][] = "FLG_MAIL_SAGAWA";
	$tdataEoctest[".allSearchFields"][] = "FLG_MAIL_OTHER";
	$tdataEoctest[".allSearchFields"][] = "ALLSEIYAKU";
	$tdataEoctest[".allSearchFields"][] = "ICHIBUSEIYAKU";
	$tdataEoctest[".allSearchFields"][] = "seiyakukin";
	$tdataEoctest[".allSearchFields"][] = "kaitorihuka";
	$tdataEoctest[".allSearchFields"][] = "awazu_date";
	$tdataEoctest[".allSearchFields"][] = "seiyaku_price";
	$tdataEoctest[".allSearchFields"][] = "eoc_search_keyword";
	$tdataEoctest[".allSearchFields"][] = "sonota";
	$tdataEoctest[".allSearchFields"][] = "size_kosuu";
	$tdataEoctest[".allSearchFields"][] = "sagawa_shuuka_flag";
	$tdataEoctest[".allSearchFields"][] = "line_check";
	$tdataEoctest[".allSearchFields"][] = "sagawa_shuukairai_denwabangou";
	$tdataEoctest[".allSearchFields"][] = "kaitori_sougak";
	$tdataEoctest[".allSearchFields"][] = "flag";
	$tdataEoctest[".allSearchFields"][] = "key_code";
	

$tdataEoctest[".googleLikeFields"] = array();
$tdataEoctest[".googleLikeFields"][] = "ecc_id";
$tdataEoctest[".googleLikeFields"][] = "ecc_seq";
$tdataEoctest[".googleLikeFields"][] = "name1";
$tdataEoctest[".googleLikeFields"][] = "created_t";
$tdataEoctest[".googleLikeFields"][] = "registerd_id";
$tdataEoctest[".googleLikeFields"][] = "kaitori_staff_id";
$tdataEoctest[".googleLikeFields"][] = "name2";
$tdataEoctest[".googleLikeFields"][] = "wareki";
$tdataEoctest[".googleLikeFields"][] = "b1";
$tdataEoctest[".googleLikeFields"][] = "b2";
$tdataEoctest[".googleLikeFields"][] = "b3";
$tdataEoctest[".googleLikeFields"][] = "birth_day";
$tdataEoctest[".googleLikeFields"][] = "age";
$tdataEoctest[".googleLikeFields"][] = "zip";
$tdataEoctest[".googleLikeFields"][] = "zip1";
$tdataEoctest[".googleLikeFields"][] = "zip2";
$tdataEoctest[".googleLikeFields"][] = "address1";
$tdataEoctest[".googleLikeFields"][] = "address2";
$tdataEoctest[".googleLikeFields"][] = "address3";
$tdataEoctest[".googleLikeFields"][] = "tel";
$tdataEoctest[".googleLikeFields"][] = "tel2";
$tdataEoctest[".googleLikeFields"][] = "mail1";
$tdataEoctest[".googleLikeFields"][] = "mail2";
$tdataEoctest[".googleLikeFields"][] = "address_code";
$tdataEoctest[".googleLikeFields"][] = "bank_name";
$tdataEoctest[".googleLikeFields"][] = "bank_blunch_code";
$tdataEoctest[".googleLikeFields"][] = "bank_yokin_shubetu";
$tdataEoctest[".googleLikeFields"][] = "bank_account";
$tdataEoctest[".googleLikeFields"][] = "bank_acoount_name";
$tdataEoctest[".googleLikeFields"][] = "haisou_bangou";
$tdataEoctest[".googleLikeFields"][] = "sise_houhou";
$tdataEoctest[".googleLikeFields"][] = "hentou_houhou";
$tdataEoctest[".googleLikeFields"][] = "hentou_houhou_time";
$tdataEoctest[".googleLikeFields"][] = "mousikomi_id";
$tdataEoctest[".googleLikeFields"][] = "hituyou_shorui";
$tdataEoctest[".googleLikeFields"][] = "seiyaku_fuseiritu";
$tdataEoctest[".googleLikeFields"][] = "mitumori_taku";
$tdataEoctest[".googleLikeFields"][] = "seacanse";
$tdataEoctest[".googleLikeFields"][] = "remark";
$tdataEoctest[".googleLikeFields"][] = "type";
$tdataEoctest[".googleLikeFields"][] = "sales_flag";
$tdataEoctest[".googleLikeFields"][] = "src_type";
$tdataEoctest[".googleLikeFields"][] = "liquidation_shop_code";
$tdataEoctest[".googleLikeFields"][] = "insurance_amount_print";
$tdataEoctest[".googleLikeFields"][] = "jis_code";
$tdataEoctest[".googleLikeFields"][] = "updated_at";
$tdataEoctest[".googleLikeFields"][] = "_registerd_id";
$tdataEoctest[".googleLikeFields"][] = "mail_check_type";
$tdataEoctest[".googleLikeFields"][] = "purchase_type";
$tdataEoctest[".googleLikeFields"][] = "sex";
$tdataEoctest[".googleLikeFields"][] = "m_tel";
$tdataEoctest[".googleLikeFields"][] = "fax";
$tdataEoctest[".googleLikeFields"][] = "chigin_kaitori";
$tdataEoctest[".googleLikeFields"][] = "option1";
$tdataEoctest[".googleLikeFields"][] = "option2";
$tdataEoctest[".googleLikeFields"][] = "option3";
$tdataEoctest[".googleLikeFields"][] = "option4";
$tdataEoctest[".googleLikeFields"][] = "option5";
$tdataEoctest[".googleLikeFields"][] = "option6";
$tdataEoctest[".googleLikeFields"][] = "option7";
$tdataEoctest[".googleLikeFields"][] = "option8";
$tdataEoctest[".googleLikeFields"][] = "option9";
$tdataEoctest[".googleLikeFields"][] = "option10";
$tdataEoctest[".googleLikeFields"][] = "option11";
$tdataEoctest[".googleLikeFields"][] = "option12";
$tdataEoctest[".googleLikeFields"][] = "option13";
$tdataEoctest[".googleLikeFields"][] = "rakuda_csv_flag";
$tdataEoctest[".googleLikeFields"][] = "EOC_COURIER_CHECK";
$tdataEoctest[".googleLikeFields"][] = "EOC_SIZE";
$tdataEoctest[".googleLikeFields"][] = "EOC_NUMBER";
$tdataEoctest[".googleLikeFields"][] = "EOC_REUSE";
$tdataEoctest[".googleLikeFields"][] = "EOC__DELIVERY_DATES";
$tdataEoctest[".googleLikeFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoctest[".googleLikeFields"][] = "FIRST_NAME2";
$tdataEoctest[".googleLikeFields"][] = "LAST_NAME2";
$tdataEoctest[".googleLikeFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoctest[".googleLikeFields"][] = "EOC__BOX_NUMBER";
$tdataEoctest[".googleLikeFields"][] = "FIRST_NAME_KANA";
$tdataEoctest[".googleLikeFields"][] = "LAST_NAME_KANA";
$tdataEoctest[".googleLikeFields"][] = "FLAG_SPEED";
$tdataEoctest[".googleLikeFields"][] = "SEARCH_MEDIA";
$tdataEoctest[".googleLikeFields"][] = "SEARCH_SITE";
$tdataEoctest[".googleLikeFields"][] = "UN_REACHABLE";
$tdataEoctest[".googleLikeFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoctest[".googleLikeFields"][] = "FLG_MAIL_OTHER";
$tdataEoctest[".googleLikeFields"][] = "ALLSEIYAKU";
$tdataEoctest[".googleLikeFields"][] = "ICHIBUSEIYAKU";
$tdataEoctest[".googleLikeFields"][] = "seiyakukin";
$tdataEoctest[".googleLikeFields"][] = "kaitorihuka";
$tdataEoctest[".googleLikeFields"][] = "awazu_date";
$tdataEoctest[".googleLikeFields"][] = "seiyaku_price";
$tdataEoctest[".googleLikeFields"][] = "eoc_search_keyword";
$tdataEoctest[".googleLikeFields"][] = "sonota";
$tdataEoctest[".googleLikeFields"][] = "size_kosuu";
$tdataEoctest[".googleLikeFields"][] = "sagawa_shuuka_flag";
$tdataEoctest[".googleLikeFields"][] = "line_check";
$tdataEoctest[".googleLikeFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoctest[".googleLikeFields"][] = "kaitori_sougak";
$tdataEoctest[".googleLikeFields"][] = "flag";
$tdataEoctest[".googleLikeFields"][] = "key_code";


$tdataEoctest[".advSearchFields"] = array();
$tdataEoctest[".advSearchFields"][] = "ecc_id";
$tdataEoctest[".advSearchFields"][] = "ecc_seq";
$tdataEoctest[".advSearchFields"][] = "name1";
$tdataEoctest[".advSearchFields"][] = "created_t";
$tdataEoctest[".advSearchFields"][] = "registerd_id";
$tdataEoctest[".advSearchFields"][] = "kaitori_staff_id";
$tdataEoctest[".advSearchFields"][] = "name2";
$tdataEoctest[".advSearchFields"][] = "wareki";
$tdataEoctest[".advSearchFields"][] = "b1";
$tdataEoctest[".advSearchFields"][] = "b2";
$tdataEoctest[".advSearchFields"][] = "b3";
$tdataEoctest[".advSearchFields"][] = "birth_day";
$tdataEoctest[".advSearchFields"][] = "age";
$tdataEoctest[".advSearchFields"][] = "zip";
$tdataEoctest[".advSearchFields"][] = "zip1";
$tdataEoctest[".advSearchFields"][] = "zip2";
$tdataEoctest[".advSearchFields"][] = "address1";
$tdataEoctest[".advSearchFields"][] = "address2";
$tdataEoctest[".advSearchFields"][] = "address3";
$tdataEoctest[".advSearchFields"][] = "tel";
$tdataEoctest[".advSearchFields"][] = "tel2";
$tdataEoctest[".advSearchFields"][] = "mail1";
$tdataEoctest[".advSearchFields"][] = "mail2";
$tdataEoctest[".advSearchFields"][] = "address_code";
$tdataEoctest[".advSearchFields"][] = "bank_name";
$tdataEoctest[".advSearchFields"][] = "bank_blunch_code";
$tdataEoctest[".advSearchFields"][] = "bank_yokin_shubetu";
$tdataEoctest[".advSearchFields"][] = "bank_account";
$tdataEoctest[".advSearchFields"][] = "bank_acoount_name";
$tdataEoctest[".advSearchFields"][] = "haisou_bangou";
$tdataEoctest[".advSearchFields"][] = "sise_houhou";
$tdataEoctest[".advSearchFields"][] = "hentou_houhou";
$tdataEoctest[".advSearchFields"][] = "hentou_houhou_time";
$tdataEoctest[".advSearchFields"][] = "mousikomi_id";
$tdataEoctest[".advSearchFields"][] = "hituyou_shorui";
$tdataEoctest[".advSearchFields"][] = "seiyaku_fuseiritu";
$tdataEoctest[".advSearchFields"][] = "mitumori_taku";
$tdataEoctest[".advSearchFields"][] = "seacanse";
$tdataEoctest[".advSearchFields"][] = "remark";
$tdataEoctest[".advSearchFields"][] = "type";
$tdataEoctest[".advSearchFields"][] = "sales_flag";
$tdataEoctest[".advSearchFields"][] = "src_type";
$tdataEoctest[".advSearchFields"][] = "liquidation_shop_code";
$tdataEoctest[".advSearchFields"][] = "insurance_amount_print";
$tdataEoctest[".advSearchFields"][] = "jis_code";
$tdataEoctest[".advSearchFields"][] = "updated_at";
$tdataEoctest[".advSearchFields"][] = "_registerd_id";
$tdataEoctest[".advSearchFields"][] = "mail_check_type";
$tdataEoctest[".advSearchFields"][] = "purchase_type";
$tdataEoctest[".advSearchFields"][] = "sex";
$tdataEoctest[".advSearchFields"][] = "m_tel";
$tdataEoctest[".advSearchFields"][] = "fax";
$tdataEoctest[".advSearchFields"][] = "chigin_kaitori";
$tdataEoctest[".advSearchFields"][] = "option1";
$tdataEoctest[".advSearchFields"][] = "option2";
$tdataEoctest[".advSearchFields"][] = "option3";
$tdataEoctest[".advSearchFields"][] = "option4";
$tdataEoctest[".advSearchFields"][] = "option5";
$tdataEoctest[".advSearchFields"][] = "option6";
$tdataEoctest[".advSearchFields"][] = "option7";
$tdataEoctest[".advSearchFields"][] = "option8";
$tdataEoctest[".advSearchFields"][] = "option9";
$tdataEoctest[".advSearchFields"][] = "option10";
$tdataEoctest[".advSearchFields"][] = "option11";
$tdataEoctest[".advSearchFields"][] = "option12";
$tdataEoctest[".advSearchFields"][] = "option13";
$tdataEoctest[".advSearchFields"][] = "rakuda_csv_flag";
$tdataEoctest[".advSearchFields"][] = "EOC_COURIER_CHECK";
$tdataEoctest[".advSearchFields"][] = "EOC_SIZE";
$tdataEoctest[".advSearchFields"][] = "EOC_NUMBER";
$tdataEoctest[".advSearchFields"][] = "EOC_REUSE";
$tdataEoctest[".advSearchFields"][] = "EOC__DELIVERY_DATES";
$tdataEoctest[".advSearchFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoctest[".advSearchFields"][] = "FIRST_NAME2";
$tdataEoctest[".advSearchFields"][] = "LAST_NAME2";
$tdataEoctest[".advSearchFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoctest[".advSearchFields"][] = "EOC__BOX_NUMBER";
$tdataEoctest[".advSearchFields"][] = "FIRST_NAME_KANA";
$tdataEoctest[".advSearchFields"][] = "LAST_NAME_KANA";
$tdataEoctest[".advSearchFields"][] = "FLAG_SPEED";
$tdataEoctest[".advSearchFields"][] = "SEARCH_MEDIA";
$tdataEoctest[".advSearchFields"][] = "SEARCH_SITE";
$tdataEoctest[".advSearchFields"][] = "UN_REACHABLE";
$tdataEoctest[".advSearchFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoctest[".advSearchFields"][] = "FLG_MAIL_OTHER";
$tdataEoctest[".advSearchFields"][] = "ALLSEIYAKU";
$tdataEoctest[".advSearchFields"][] = "ICHIBUSEIYAKU";
$tdataEoctest[".advSearchFields"][] = "seiyakukin";
$tdataEoctest[".advSearchFields"][] = "kaitorihuka";
$tdataEoctest[".advSearchFields"][] = "awazu_date";
$tdataEoctest[".advSearchFields"][] = "seiyaku_price";
$tdataEoctest[".advSearchFields"][] = "eoc_search_keyword";
$tdataEoctest[".advSearchFields"][] = "sonota";
$tdataEoctest[".advSearchFields"][] = "size_kosuu";
$tdataEoctest[".advSearchFields"][] = "sagawa_shuuka_flag";
$tdataEoctest[".advSearchFields"][] = "line_check";
$tdataEoctest[".advSearchFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoctest[".advSearchFields"][] = "kaitori_sougak";
$tdataEoctest[".advSearchFields"][] = "flag";
$tdataEoctest[".advSearchFields"][] = "key_code";

$tdataEoctest[".tableType"] = "list";

$tdataEoctest[".printerPageOrientation"] = 0;
$tdataEoctest[".nPrinterPageScale"] = 100;

$tdataEoctest[".nPrinterSplitRecords"] = 40;

$tdataEoctest[".nPrinterPDFSplitRecords"] = 40;



$tdataEoctest[".geocodingEnabled"] = false;





$tdataEoctest[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoctest[".pageSize"] = 20;

$tdataEoctest[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ecc_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoctest[".strOrderBy"] = $tstrOrderBy;

$tdataEoctest[".orderindexes"] = array();
$tdataEoctest[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`ecc_id`");

$tdataEoctest[".sqlHead"] = "SELECT ecc_id,  ecc_seq,  name1,  created_t,  registerd_id,  kaitori_staff_id,  name2,  wareki,  b1,  b2,  b3,  birth_day,  age,  zip,  zip1,  zip2,  address1,  address2,  address3,  tel,  tel2,  mail1,  mail2,  address_code,  bank_name,  bank_blunch_code,  bank_yokin_shubetu,  bank_account,  bank_acoount_name,  haisou_bangou,  sise_houhou,  hentou_houhou,  hentou_houhou_time,  mousikomi_id,  hituyou_shorui,  seiyaku_fuseiritu,  mitumori_taku,  seacanse,  remark,  `type`,  sales_flag,  src_type,  liquidation_shop_code,  insurance_amount_print,  jis_code,  updated_at,  `_registerd_id`,  mail_check_type,  purchase_type,  sex,  m_tel,  fax,  chigin_kaitori,  option1,  option2,  option3,  option4,  option5,  option6,  option7,  option8,  option9,  option10,  option11,  option12,  option13,  rakuda_csv_flag,  EOC_COURIER_CHECK,  EOC_SIZE,  EOC_NUMBER,  EOC_REUSE,  EOC__DELIVERY_DATES,  EOC_SPECIFIED_TIME,  FIRST_NAME2,  LAST_NAME2,  EOC__DATE_AND_TIME_2,  EOC__BOX_NUMBER,  FIRST_NAME_KANA,  LAST_NAME_KANA,  FLAG_SPEED,  SEARCH_MEDIA,  SEARCH_SITE,  UN_REACHABLE,  FLG_MAIL_SAGAWA,  FLG_MAIL_OTHER,  ALLSEIYAKU,  ICHIBUSEIYAKU,  seiyakukin,  kaitorihuka,  awazu_date,  seiyaku_price,  eoc_search_keyword,  sonota,  size_kosuu,  sagawa_shuuka_flag,  line_check,  sagawa_shuukairai_denwabangou,  kaitori_sougak,  flag,  key_code";
$tdataEoctest[".sqlFrom"] = "FROM Eoctest";
$tdataEoctest[".sqlWhereExpr"] = "";
$tdataEoctest[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoctest[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoctest[".arrGroupsPerPage"] = $arrGPP;

$tdataEoctest[".highlightSearchResults"] = true;

$tableKeysEoctest = array();
$tableKeysEoctest[] = "ecc_id";
$tdataEoctest[".Keys"] = $tableKeysEoctest;

$tdataEoctest[".listFields"] = array();
$tdataEoctest[".listFields"][] = "ecc_id";
$tdataEoctest[".listFields"][] = "UN_REACHABLE";
$tdataEoctest[".listFields"][] = "FLAG_SPEED";
$tdataEoctest[".listFields"][] = "ALLSEIYAKU";
$tdataEoctest[".listFields"][] = "ICHIBUSEIYAKU";
$tdataEoctest[".listFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoctest[".listFields"][] = "FLG_MAIL_OTHER";
$tdataEoctest[".listFields"][] = "seiyakukin";
$tdataEoctest[".listFields"][] = "rakuda_csv_flag";
$tdataEoctest[".listFields"][] = "size_kosuu";
$tdataEoctest[".listFields"][] = "sagawa_shuuka_flag";
$tdataEoctest[".listFields"][] = "haisou_bangou";
$tdataEoctest[".listFields"][] = "EOC_REUSE";
$tdataEoctest[".listFields"][] = "EOC_SIZE";
$tdataEoctest[".listFields"][] = "EOC_NUMBER";
$tdataEoctest[".listFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoctest[".listFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoctest[".listFields"][] = "EOC__DELIVERY_DATES";
$tdataEoctest[".listFields"][] = "EOC__BOX_NUMBER";
$tdataEoctest[".listFields"][] = "purchase_type";
$tdataEoctest[".listFields"][] = "ecc_seq";
$tdataEoctest[".listFields"][] = "name1";
$tdataEoctest[".listFields"][] = "LAST_NAME2";
$tdataEoctest[".listFields"][] = "FIRST_NAME2";
$tdataEoctest[".listFields"][] = "name2";
$tdataEoctest[".listFields"][] = "LAST_NAME_KANA";
$tdataEoctest[".listFields"][] = "FIRST_NAME_KANA";
$tdataEoctest[".listFields"][] = "option5";
$tdataEoctest[".listFields"][] = "tel";
$tdataEoctest[".listFields"][] = "tel2";
$tdataEoctest[".listFields"][] = "mail1";
$tdataEoctest[".listFields"][] = "mail2";
$tdataEoctest[".listFields"][] = "mail_check_type";
$tdataEoctest[".listFields"][] = "zip1";
$tdataEoctest[".listFields"][] = "zip2";
$tdataEoctest[".listFields"][] = "address1";
$tdataEoctest[".listFields"][] = "address2";
$tdataEoctest[".listFields"][] = "address3";
$tdataEoctest[".listFields"][] = "EOC_COURIER_CHECK";
$tdataEoctest[".listFields"][] = "kaitori_staff_id";
$tdataEoctest[".listFields"][] = "line_check";
$tdataEoctest[".listFields"][] = "remark";
$tdataEoctest[".listFields"][] = "bank_name";
$tdataEoctest[".listFields"][] = "_registerd_id";
$tdataEoctest[".listFields"][] = "created_t";
$tdataEoctest[".listFields"][] = "updated_at";
$tdataEoctest[".listFields"][] = "registerd_id";
$tdataEoctest[".listFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoctest[".listFields"][] = "kaitori_sougak";
$tdataEoctest[".listFields"][] = "flag";
$tdataEoctest[".listFields"][] = "key_code";

$tdataEoctest[".hideMobileList"] = array();


$tdataEoctest[".viewFields"] = array();
$tdataEoctest[".viewFields"][] = "ecc_id";
$tdataEoctest[".viewFields"][] = "ecc_seq";
$tdataEoctest[".viewFields"][] = "name1";
$tdataEoctest[".viewFields"][] = "created_t";
$tdataEoctest[".viewFields"][] = "registerd_id";
$tdataEoctest[".viewFields"][] = "kaitori_staff_id";
$tdataEoctest[".viewFields"][] = "name2";
$tdataEoctest[".viewFields"][] = "wareki";
$tdataEoctest[".viewFields"][] = "b1";
$tdataEoctest[".viewFields"][] = "b2";
$tdataEoctest[".viewFields"][] = "b3";
$tdataEoctest[".viewFields"][] = "birth_day";
$tdataEoctest[".viewFields"][] = "age";
$tdataEoctest[".viewFields"][] = "zip";
$tdataEoctest[".viewFields"][] = "zip1";
$tdataEoctest[".viewFields"][] = "zip2";
$tdataEoctest[".viewFields"][] = "address1";
$tdataEoctest[".viewFields"][] = "address2";
$tdataEoctest[".viewFields"][] = "address3";
$tdataEoctest[".viewFields"][] = "tel";
$tdataEoctest[".viewFields"][] = "tel2";
$tdataEoctest[".viewFields"][] = "mail1";
$tdataEoctest[".viewFields"][] = "mail2";
$tdataEoctest[".viewFields"][] = "address_code";
$tdataEoctest[".viewFields"][] = "bank_name";
$tdataEoctest[".viewFields"][] = "bank_blunch_code";
$tdataEoctest[".viewFields"][] = "bank_yokin_shubetu";
$tdataEoctest[".viewFields"][] = "bank_account";
$tdataEoctest[".viewFields"][] = "bank_acoount_name";
$tdataEoctest[".viewFields"][] = "haisou_bangou";
$tdataEoctest[".viewFields"][] = "sise_houhou";
$tdataEoctest[".viewFields"][] = "hentou_houhou";
$tdataEoctest[".viewFields"][] = "hentou_houhou_time";
$tdataEoctest[".viewFields"][] = "mousikomi_id";
$tdataEoctest[".viewFields"][] = "hituyou_shorui";
$tdataEoctest[".viewFields"][] = "seiyaku_fuseiritu";
$tdataEoctest[".viewFields"][] = "mitumori_taku";
$tdataEoctest[".viewFields"][] = "seacanse";
$tdataEoctest[".viewFields"][] = "remark";
$tdataEoctest[".viewFields"][] = "type";
$tdataEoctest[".viewFields"][] = "sales_flag";
$tdataEoctest[".viewFields"][] = "src_type";
$tdataEoctest[".viewFields"][] = "liquidation_shop_code";
$tdataEoctest[".viewFields"][] = "insurance_amount_print";
$tdataEoctest[".viewFields"][] = "jis_code";
$tdataEoctest[".viewFields"][] = "updated_at";
$tdataEoctest[".viewFields"][] = "_registerd_id";
$tdataEoctest[".viewFields"][] = "mail_check_type";
$tdataEoctest[".viewFields"][] = "purchase_type";
$tdataEoctest[".viewFields"][] = "sex";
$tdataEoctest[".viewFields"][] = "m_tel";
$tdataEoctest[".viewFields"][] = "fax";
$tdataEoctest[".viewFields"][] = "chigin_kaitori";
$tdataEoctest[".viewFields"][] = "option1";
$tdataEoctest[".viewFields"][] = "option2";
$tdataEoctest[".viewFields"][] = "option3";
$tdataEoctest[".viewFields"][] = "option4";
$tdataEoctest[".viewFields"][] = "option5";
$tdataEoctest[".viewFields"][] = "option6";
$tdataEoctest[".viewFields"][] = "option7";
$tdataEoctest[".viewFields"][] = "option8";
$tdataEoctest[".viewFields"][] = "option9";
$tdataEoctest[".viewFields"][] = "option10";
$tdataEoctest[".viewFields"][] = "option11";
$tdataEoctest[".viewFields"][] = "option12";
$tdataEoctest[".viewFields"][] = "option13";
$tdataEoctest[".viewFields"][] = "rakuda_csv_flag";
$tdataEoctest[".viewFields"][] = "EOC_COURIER_CHECK";
$tdataEoctest[".viewFields"][] = "EOC_SIZE";
$tdataEoctest[".viewFields"][] = "EOC_NUMBER";
$tdataEoctest[".viewFields"][] = "EOC_REUSE";
$tdataEoctest[".viewFields"][] = "EOC__DELIVERY_DATES";
$tdataEoctest[".viewFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoctest[".viewFields"][] = "FIRST_NAME2";
$tdataEoctest[".viewFields"][] = "LAST_NAME2";
$tdataEoctest[".viewFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoctest[".viewFields"][] = "EOC__BOX_NUMBER";
$tdataEoctest[".viewFields"][] = "FIRST_NAME_KANA";
$tdataEoctest[".viewFields"][] = "LAST_NAME_KANA";
$tdataEoctest[".viewFields"][] = "FLAG_SPEED";
$tdataEoctest[".viewFields"][] = "SEARCH_MEDIA";
$tdataEoctest[".viewFields"][] = "SEARCH_SITE";
$tdataEoctest[".viewFields"][] = "UN_REACHABLE";
$tdataEoctest[".viewFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoctest[".viewFields"][] = "FLG_MAIL_OTHER";
$tdataEoctest[".viewFields"][] = "ALLSEIYAKU";
$tdataEoctest[".viewFields"][] = "ICHIBUSEIYAKU";
$tdataEoctest[".viewFields"][] = "seiyakukin";
$tdataEoctest[".viewFields"][] = "kaitorihuka";
$tdataEoctest[".viewFields"][] = "awazu_date";
$tdataEoctest[".viewFields"][] = "seiyaku_price";
$tdataEoctest[".viewFields"][] = "eoc_search_keyword";
$tdataEoctest[".viewFields"][] = "sonota";
$tdataEoctest[".viewFields"][] = "size_kosuu";
$tdataEoctest[".viewFields"][] = "sagawa_shuuka_flag";
$tdataEoctest[".viewFields"][] = "line_check";
$tdataEoctest[".viewFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoctest[".viewFields"][] = "kaitori_sougak";
$tdataEoctest[".viewFields"][] = "flag";
$tdataEoctest[".viewFields"][] = "key_code";

$tdataEoctest[".addFields"] = array();
$tdataEoctest[".addFields"][] = "ecc_seq";
$tdataEoctest[".addFields"][] = "name1";
$tdataEoctest[".addFields"][] = "created_t";
$tdataEoctest[".addFields"][] = "registerd_id";
$tdataEoctest[".addFields"][] = "kaitori_staff_id";
$tdataEoctest[".addFields"][] = "name2";
$tdataEoctest[".addFields"][] = "wareki";
$tdataEoctest[".addFields"][] = "b1";
$tdataEoctest[".addFields"][] = "b2";
$tdataEoctest[".addFields"][] = "b3";
$tdataEoctest[".addFields"][] = "birth_day";
$tdataEoctest[".addFields"][] = "age";
$tdataEoctest[".addFields"][] = "zip";
$tdataEoctest[".addFields"][] = "zip1";
$tdataEoctest[".addFields"][] = "zip2";
$tdataEoctest[".addFields"][] = "address1";
$tdataEoctest[".addFields"][] = "address2";
$tdataEoctest[".addFields"][] = "address3";
$tdataEoctest[".addFields"][] = "tel";
$tdataEoctest[".addFields"][] = "tel2";
$tdataEoctest[".addFields"][] = "mail1";
$tdataEoctest[".addFields"][] = "mail2";
$tdataEoctest[".addFields"][] = "address_code";
$tdataEoctest[".addFields"][] = "bank_name";
$tdataEoctest[".addFields"][] = "bank_blunch_code";
$tdataEoctest[".addFields"][] = "bank_yokin_shubetu";
$tdataEoctest[".addFields"][] = "bank_account";
$tdataEoctest[".addFields"][] = "bank_acoount_name";
$tdataEoctest[".addFields"][] = "haisou_bangou";
$tdataEoctest[".addFields"][] = "sise_houhou";
$tdataEoctest[".addFields"][] = "hentou_houhou";
$tdataEoctest[".addFields"][] = "hentou_houhou_time";
$tdataEoctest[".addFields"][] = "mousikomi_id";
$tdataEoctest[".addFields"][] = "hituyou_shorui";
$tdataEoctest[".addFields"][] = "seiyaku_fuseiritu";
$tdataEoctest[".addFields"][] = "mitumori_taku";
$tdataEoctest[".addFields"][] = "seacanse";
$tdataEoctest[".addFields"][] = "remark";
$tdataEoctest[".addFields"][] = "type";
$tdataEoctest[".addFields"][] = "sales_flag";
$tdataEoctest[".addFields"][] = "src_type";
$tdataEoctest[".addFields"][] = "liquidation_shop_code";
$tdataEoctest[".addFields"][] = "insurance_amount_print";
$tdataEoctest[".addFields"][] = "jis_code";
$tdataEoctest[".addFields"][] = "updated_at";
$tdataEoctest[".addFields"][] = "_registerd_id";
$tdataEoctest[".addFields"][] = "mail_check_type";
$tdataEoctest[".addFields"][] = "purchase_type";
$tdataEoctest[".addFields"][] = "sex";
$tdataEoctest[".addFields"][] = "m_tel";
$tdataEoctest[".addFields"][] = "fax";
$tdataEoctest[".addFields"][] = "chigin_kaitori";
$tdataEoctest[".addFields"][] = "option1";
$tdataEoctest[".addFields"][] = "option2";
$tdataEoctest[".addFields"][] = "option3";
$tdataEoctest[".addFields"][] = "option4";
$tdataEoctest[".addFields"][] = "option5";
$tdataEoctest[".addFields"][] = "option6";
$tdataEoctest[".addFields"][] = "option7";
$tdataEoctest[".addFields"][] = "option8";
$tdataEoctest[".addFields"][] = "option9";
$tdataEoctest[".addFields"][] = "option10";
$tdataEoctest[".addFields"][] = "option11";
$tdataEoctest[".addFields"][] = "option12";
$tdataEoctest[".addFields"][] = "option13";
$tdataEoctest[".addFields"][] = "rakuda_csv_flag";
$tdataEoctest[".addFields"][] = "EOC_COURIER_CHECK";
$tdataEoctest[".addFields"][] = "EOC_SIZE";
$tdataEoctest[".addFields"][] = "EOC_NUMBER";
$tdataEoctest[".addFields"][] = "EOC_REUSE";
$tdataEoctest[".addFields"][] = "EOC__DELIVERY_DATES";
$tdataEoctest[".addFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoctest[".addFields"][] = "FIRST_NAME2";
$tdataEoctest[".addFields"][] = "LAST_NAME2";
$tdataEoctest[".addFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoctest[".addFields"][] = "EOC__BOX_NUMBER";
$tdataEoctest[".addFields"][] = "FIRST_NAME_KANA";
$tdataEoctest[".addFields"][] = "LAST_NAME_KANA";
$tdataEoctest[".addFields"][] = "FLAG_SPEED";
$tdataEoctest[".addFields"][] = "SEARCH_MEDIA";
$tdataEoctest[".addFields"][] = "SEARCH_SITE";
$tdataEoctest[".addFields"][] = "UN_REACHABLE";
$tdataEoctest[".addFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoctest[".addFields"][] = "FLG_MAIL_OTHER";
$tdataEoctest[".addFields"][] = "ALLSEIYAKU";
$tdataEoctest[".addFields"][] = "ICHIBUSEIYAKU";
$tdataEoctest[".addFields"][] = "seiyakukin";
$tdataEoctest[".addFields"][] = "kaitorihuka";
$tdataEoctest[".addFields"][] = "awazu_date";
$tdataEoctest[".addFields"][] = "seiyaku_price";
$tdataEoctest[".addFields"][] = "eoc_search_keyword";
$tdataEoctest[".addFields"][] = "sonota";
$tdataEoctest[".addFields"][] = "size_kosuu";
$tdataEoctest[".addFields"][] = "sagawa_shuuka_flag";
$tdataEoctest[".addFields"][] = "line_check";
$tdataEoctest[".addFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoctest[".addFields"][] = "kaitori_sougak";
$tdataEoctest[".addFields"][] = "flag";
$tdataEoctest[".addFields"][] = "key_code";

$tdataEoctest[".masterListFields"] = array();
$tdataEoctest[".masterListFields"][] = "ecc_id";
$tdataEoctest[".masterListFields"][] = "ecc_seq";
$tdataEoctest[".masterListFields"][] = "name1";
$tdataEoctest[".masterListFields"][] = "created_t";
$tdataEoctest[".masterListFields"][] = "registerd_id";
$tdataEoctest[".masterListFields"][] = "kaitori_staff_id";
$tdataEoctest[".masterListFields"][] = "name2";
$tdataEoctest[".masterListFields"][] = "wareki";
$tdataEoctest[".masterListFields"][] = "b1";
$tdataEoctest[".masterListFields"][] = "b2";
$tdataEoctest[".masterListFields"][] = "b3";
$tdataEoctest[".masterListFields"][] = "birth_day";
$tdataEoctest[".masterListFields"][] = "age";
$tdataEoctest[".masterListFields"][] = "zip";
$tdataEoctest[".masterListFields"][] = "zip1";
$tdataEoctest[".masterListFields"][] = "zip2";
$tdataEoctest[".masterListFields"][] = "address1";
$tdataEoctest[".masterListFields"][] = "address2";
$tdataEoctest[".masterListFields"][] = "address3";
$tdataEoctest[".masterListFields"][] = "tel";
$tdataEoctest[".masterListFields"][] = "tel2";
$tdataEoctest[".masterListFields"][] = "mail1";
$tdataEoctest[".masterListFields"][] = "mail2";
$tdataEoctest[".masterListFields"][] = "address_code";
$tdataEoctest[".masterListFields"][] = "bank_name";
$tdataEoctest[".masterListFields"][] = "bank_blunch_code";
$tdataEoctest[".masterListFields"][] = "bank_yokin_shubetu";
$tdataEoctest[".masterListFields"][] = "bank_account";
$tdataEoctest[".masterListFields"][] = "bank_acoount_name";
$tdataEoctest[".masterListFields"][] = "haisou_bangou";
$tdataEoctest[".masterListFields"][] = "sise_houhou";
$tdataEoctest[".masterListFields"][] = "hentou_houhou";
$tdataEoctest[".masterListFields"][] = "hentou_houhou_time";
$tdataEoctest[".masterListFields"][] = "mousikomi_id";
$tdataEoctest[".masterListFields"][] = "hituyou_shorui";
$tdataEoctest[".masterListFields"][] = "seiyaku_fuseiritu";
$tdataEoctest[".masterListFields"][] = "mitumori_taku";
$tdataEoctest[".masterListFields"][] = "seacanse";
$tdataEoctest[".masterListFields"][] = "remark";
$tdataEoctest[".masterListFields"][] = "type";
$tdataEoctest[".masterListFields"][] = "sales_flag";
$tdataEoctest[".masterListFields"][] = "src_type";
$tdataEoctest[".masterListFields"][] = "liquidation_shop_code";
$tdataEoctest[".masterListFields"][] = "insurance_amount_print";
$tdataEoctest[".masterListFields"][] = "jis_code";
$tdataEoctest[".masterListFields"][] = "updated_at";
$tdataEoctest[".masterListFields"][] = "_registerd_id";
$tdataEoctest[".masterListFields"][] = "mail_check_type";
$tdataEoctest[".masterListFields"][] = "purchase_type";
$tdataEoctest[".masterListFields"][] = "sex";
$tdataEoctest[".masterListFields"][] = "m_tel";
$tdataEoctest[".masterListFields"][] = "fax";
$tdataEoctest[".masterListFields"][] = "chigin_kaitori";
$tdataEoctest[".masterListFields"][] = "option1";
$tdataEoctest[".masterListFields"][] = "option2";
$tdataEoctest[".masterListFields"][] = "option3";
$tdataEoctest[".masterListFields"][] = "option4";
$tdataEoctest[".masterListFields"][] = "option5";
$tdataEoctest[".masterListFields"][] = "option6";
$tdataEoctest[".masterListFields"][] = "option7";
$tdataEoctest[".masterListFields"][] = "option8";
$tdataEoctest[".masterListFields"][] = "option9";
$tdataEoctest[".masterListFields"][] = "option10";
$tdataEoctest[".masterListFields"][] = "option11";
$tdataEoctest[".masterListFields"][] = "option12";
$tdataEoctest[".masterListFields"][] = "option13";
$tdataEoctest[".masterListFields"][] = "rakuda_csv_flag";
$tdataEoctest[".masterListFields"][] = "EOC_COURIER_CHECK";
$tdataEoctest[".masterListFields"][] = "EOC_SIZE";
$tdataEoctest[".masterListFields"][] = "EOC_NUMBER";
$tdataEoctest[".masterListFields"][] = "EOC_REUSE";
$tdataEoctest[".masterListFields"][] = "EOC__DELIVERY_DATES";
$tdataEoctest[".masterListFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoctest[".masterListFields"][] = "FIRST_NAME2";
$tdataEoctest[".masterListFields"][] = "LAST_NAME2";
$tdataEoctest[".masterListFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoctest[".masterListFields"][] = "EOC__BOX_NUMBER";
$tdataEoctest[".masterListFields"][] = "FIRST_NAME_KANA";
$tdataEoctest[".masterListFields"][] = "LAST_NAME_KANA";
$tdataEoctest[".masterListFields"][] = "FLAG_SPEED";
$tdataEoctest[".masterListFields"][] = "SEARCH_MEDIA";
$tdataEoctest[".masterListFields"][] = "SEARCH_SITE";
$tdataEoctest[".masterListFields"][] = "UN_REACHABLE";
$tdataEoctest[".masterListFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoctest[".masterListFields"][] = "FLG_MAIL_OTHER";
$tdataEoctest[".masterListFields"][] = "ALLSEIYAKU";
$tdataEoctest[".masterListFields"][] = "ICHIBUSEIYAKU";
$tdataEoctest[".masterListFields"][] = "seiyakukin";
$tdataEoctest[".masterListFields"][] = "kaitorihuka";
$tdataEoctest[".masterListFields"][] = "awazu_date";
$tdataEoctest[".masterListFields"][] = "seiyaku_price";
$tdataEoctest[".masterListFields"][] = "eoc_search_keyword";
$tdataEoctest[".masterListFields"][] = "sonota";
$tdataEoctest[".masterListFields"][] = "size_kosuu";
$tdataEoctest[".masterListFields"][] = "sagawa_shuuka_flag";
$tdataEoctest[".masterListFields"][] = "line_check";
$tdataEoctest[".masterListFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoctest[".masterListFields"][] = "kaitori_sougak";
$tdataEoctest[".masterListFields"][] = "flag";
$tdataEoctest[".masterListFields"][] = "key_code";

$tdataEoctest[".inlineAddFields"] = array();
$tdataEoctest[".inlineAddFields"][] = "UN_REACHABLE";
$tdataEoctest[".inlineAddFields"][] = "FLAG_SPEED";
$tdataEoctest[".inlineAddFields"][] = "ALLSEIYAKU";
$tdataEoctest[".inlineAddFields"][] = "ICHIBUSEIYAKU";
$tdataEoctest[".inlineAddFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoctest[".inlineAddFields"][] = "FLG_MAIL_OTHER";
$tdataEoctest[".inlineAddFields"][] = "seiyakukin";
$tdataEoctest[".inlineAddFields"][] = "rakuda_csv_flag";
$tdataEoctest[".inlineAddFields"][] = "size_kosuu";
$tdataEoctest[".inlineAddFields"][] = "sagawa_shuuka_flag";
$tdataEoctest[".inlineAddFields"][] = "haisou_bangou";
$tdataEoctest[".inlineAddFields"][] = "EOC_REUSE";
$tdataEoctest[".inlineAddFields"][] = "EOC_SIZE";
$tdataEoctest[".inlineAddFields"][] = "EOC_NUMBER";
$tdataEoctest[".inlineAddFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoctest[".inlineAddFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoctest[".inlineAddFields"][] = "EOC__DELIVERY_DATES";
$tdataEoctest[".inlineAddFields"][] = "EOC__BOX_NUMBER";
$tdataEoctest[".inlineAddFields"][] = "purchase_type";
$tdataEoctest[".inlineAddFields"][] = "ecc_seq";
$tdataEoctest[".inlineAddFields"][] = "name1";
$tdataEoctest[".inlineAddFields"][] = "name2";
$tdataEoctest[".inlineAddFields"][] = "option5";
$tdataEoctest[".inlineAddFields"][] = "tel";
$tdataEoctest[".inlineAddFields"][] = "tel2";
$tdataEoctest[".inlineAddFields"][] = "mail1";
$tdataEoctest[".inlineAddFields"][] = "mail2";
$tdataEoctest[".inlineAddFields"][] = "mail_check_type";
$tdataEoctest[".inlineAddFields"][] = "zip1";
$tdataEoctest[".inlineAddFields"][] = "zip2";
$tdataEoctest[".inlineAddFields"][] = "address1";
$tdataEoctest[".inlineAddFields"][] = "address2";
$tdataEoctest[".inlineAddFields"][] = "address3";
$tdataEoctest[".inlineAddFields"][] = "EOC_COURIER_CHECK";
$tdataEoctest[".inlineAddFields"][] = "kaitori_staff_id";
$tdataEoctest[".inlineAddFields"][] = "line_check";
$tdataEoctest[".inlineAddFields"][] = "remark";
$tdataEoctest[".inlineAddFields"][] = "bank_name";
$tdataEoctest[".inlineAddFields"][] = "_registerd_id";
$tdataEoctest[".inlineAddFields"][] = "created_t";
$tdataEoctest[".inlineAddFields"][] = "updated_at";
$tdataEoctest[".inlineAddFields"][] = "registerd_id";
$tdataEoctest[".inlineAddFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoctest[".inlineAddFields"][] = "kaitori_sougak";
$tdataEoctest[".inlineAddFields"][] = "flag";
$tdataEoctest[".inlineAddFields"][] = "key_code";

$tdataEoctest[".editFields"] = array();
$tdataEoctest[".editFields"][] = "ecc_seq";
$tdataEoctest[".editFields"][] = "name1";
$tdataEoctest[".editFields"][] = "created_t";
$tdataEoctest[".editFields"][] = "registerd_id";
$tdataEoctest[".editFields"][] = "kaitori_staff_id";
$tdataEoctest[".editFields"][] = "name2";
$tdataEoctest[".editFields"][] = "wareki";
$tdataEoctest[".editFields"][] = "b1";
$tdataEoctest[".editFields"][] = "b2";
$tdataEoctest[".editFields"][] = "b3";
$tdataEoctest[".editFields"][] = "birth_day";
$tdataEoctest[".editFields"][] = "age";
$tdataEoctest[".editFields"][] = "zip";
$tdataEoctest[".editFields"][] = "zip1";
$tdataEoctest[".editFields"][] = "zip2";
$tdataEoctest[".editFields"][] = "address1";
$tdataEoctest[".editFields"][] = "address2";
$tdataEoctest[".editFields"][] = "address3";
$tdataEoctest[".editFields"][] = "tel";
$tdataEoctest[".editFields"][] = "tel2";
$tdataEoctest[".editFields"][] = "mail1";
$tdataEoctest[".editFields"][] = "mail2";
$tdataEoctest[".editFields"][] = "address_code";
$tdataEoctest[".editFields"][] = "bank_name";
$tdataEoctest[".editFields"][] = "bank_blunch_code";
$tdataEoctest[".editFields"][] = "bank_yokin_shubetu";
$tdataEoctest[".editFields"][] = "bank_account";
$tdataEoctest[".editFields"][] = "bank_acoount_name";
$tdataEoctest[".editFields"][] = "haisou_bangou";
$tdataEoctest[".editFields"][] = "sise_houhou";
$tdataEoctest[".editFields"][] = "hentou_houhou";
$tdataEoctest[".editFields"][] = "hentou_houhou_time";
$tdataEoctest[".editFields"][] = "mousikomi_id";
$tdataEoctest[".editFields"][] = "hituyou_shorui";
$tdataEoctest[".editFields"][] = "seiyaku_fuseiritu";
$tdataEoctest[".editFields"][] = "mitumori_taku";
$tdataEoctest[".editFields"][] = "seacanse";
$tdataEoctest[".editFields"][] = "remark";
$tdataEoctest[".editFields"][] = "type";
$tdataEoctest[".editFields"][] = "sales_flag";
$tdataEoctest[".editFields"][] = "src_type";
$tdataEoctest[".editFields"][] = "liquidation_shop_code";
$tdataEoctest[".editFields"][] = "insurance_amount_print";
$tdataEoctest[".editFields"][] = "jis_code";
$tdataEoctest[".editFields"][] = "updated_at";
$tdataEoctest[".editFields"][] = "_registerd_id";
$tdataEoctest[".editFields"][] = "mail_check_type";
$tdataEoctest[".editFields"][] = "purchase_type";
$tdataEoctest[".editFields"][] = "sex";
$tdataEoctest[".editFields"][] = "m_tel";
$tdataEoctest[".editFields"][] = "fax";
$tdataEoctest[".editFields"][] = "chigin_kaitori";
$tdataEoctest[".editFields"][] = "option1";
$tdataEoctest[".editFields"][] = "option2";
$tdataEoctest[".editFields"][] = "option3";
$tdataEoctest[".editFields"][] = "option4";
$tdataEoctest[".editFields"][] = "option5";
$tdataEoctest[".editFields"][] = "option6";
$tdataEoctest[".editFields"][] = "option7";
$tdataEoctest[".editFields"][] = "option8";
$tdataEoctest[".editFields"][] = "option9";
$tdataEoctest[".editFields"][] = "option10";
$tdataEoctest[".editFields"][] = "option11";
$tdataEoctest[".editFields"][] = "option12";
$tdataEoctest[".editFields"][] = "option13";
$tdataEoctest[".editFields"][] = "rakuda_csv_flag";
$tdataEoctest[".editFields"][] = "EOC_COURIER_CHECK";
$tdataEoctest[".editFields"][] = "EOC_SIZE";
$tdataEoctest[".editFields"][] = "EOC_NUMBER";
$tdataEoctest[".editFields"][] = "EOC_REUSE";
$tdataEoctest[".editFields"][] = "EOC__DELIVERY_DATES";
$tdataEoctest[".editFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoctest[".editFields"][] = "FIRST_NAME2";
$tdataEoctest[".editFields"][] = "LAST_NAME2";
$tdataEoctest[".editFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoctest[".editFields"][] = "EOC__BOX_NUMBER";
$tdataEoctest[".editFields"][] = "FIRST_NAME_KANA";
$tdataEoctest[".editFields"][] = "LAST_NAME_KANA";
$tdataEoctest[".editFields"][] = "FLAG_SPEED";
$tdataEoctest[".editFields"][] = "SEARCH_MEDIA";
$tdataEoctest[".editFields"][] = "SEARCH_SITE";
$tdataEoctest[".editFields"][] = "UN_REACHABLE";
$tdataEoctest[".editFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoctest[".editFields"][] = "FLG_MAIL_OTHER";
$tdataEoctest[".editFields"][] = "ALLSEIYAKU";
$tdataEoctest[".editFields"][] = "ICHIBUSEIYAKU";
$tdataEoctest[".editFields"][] = "seiyakukin";
$tdataEoctest[".editFields"][] = "kaitorihuka";
$tdataEoctest[".editFields"][] = "awazu_date";
$tdataEoctest[".editFields"][] = "seiyaku_price";
$tdataEoctest[".editFields"][] = "eoc_search_keyword";
$tdataEoctest[".editFields"][] = "sonota";
$tdataEoctest[".editFields"][] = "size_kosuu";
$tdataEoctest[".editFields"][] = "sagawa_shuuka_flag";
$tdataEoctest[".editFields"][] = "line_check";
$tdataEoctest[".editFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoctest[".editFields"][] = "kaitori_sougak";
$tdataEoctest[".editFields"][] = "flag";
$tdataEoctest[".editFields"][] = "key_code";

$tdataEoctest[".inlineEditFields"] = array();
$tdataEoctest[".inlineEditFields"][] = "UN_REACHABLE";
$tdataEoctest[".inlineEditFields"][] = "FLAG_SPEED";
$tdataEoctest[".inlineEditFields"][] = "ALLSEIYAKU";
$tdataEoctest[".inlineEditFields"][] = "ICHIBUSEIYAKU";
$tdataEoctest[".inlineEditFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoctest[".inlineEditFields"][] = "FLG_MAIL_OTHER";
$tdataEoctest[".inlineEditFields"][] = "seiyakukin";
$tdataEoctest[".inlineEditFields"][] = "rakuda_csv_flag";
$tdataEoctest[".inlineEditFields"][] = "size_kosuu";
$tdataEoctest[".inlineEditFields"][] = "sagawa_shuuka_flag";
$tdataEoctest[".inlineEditFields"][] = "haisou_bangou";
$tdataEoctest[".inlineEditFields"][] = "EOC_REUSE";
$tdataEoctest[".inlineEditFields"][] = "EOC_SIZE";
$tdataEoctest[".inlineEditFields"][] = "EOC_NUMBER";
$tdataEoctest[".inlineEditFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoctest[".inlineEditFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoctest[".inlineEditFields"][] = "EOC__DELIVERY_DATES";
$tdataEoctest[".inlineEditFields"][] = "EOC__BOX_NUMBER";
$tdataEoctest[".inlineEditFields"][] = "purchase_type";
$tdataEoctest[".inlineEditFields"][] = "ecc_seq";
$tdataEoctest[".inlineEditFields"][] = "name1";
$tdataEoctest[".inlineEditFields"][] = "name2";
$tdataEoctest[".inlineEditFields"][] = "option5";
$tdataEoctest[".inlineEditFields"][] = "tel";
$tdataEoctest[".inlineEditFields"][] = "tel2";
$tdataEoctest[".inlineEditFields"][] = "mail1";
$tdataEoctest[".inlineEditFields"][] = "mail2";
$tdataEoctest[".inlineEditFields"][] = "mail_check_type";
$tdataEoctest[".inlineEditFields"][] = "zip1";
$tdataEoctest[".inlineEditFields"][] = "zip2";
$tdataEoctest[".inlineEditFields"][] = "address1";
$tdataEoctest[".inlineEditFields"][] = "address2";
$tdataEoctest[".inlineEditFields"][] = "address3";
$tdataEoctest[".inlineEditFields"][] = "EOC_COURIER_CHECK";
$tdataEoctest[".inlineEditFields"][] = "kaitori_staff_id";
$tdataEoctest[".inlineEditFields"][] = "line_check";
$tdataEoctest[".inlineEditFields"][] = "remark";
$tdataEoctest[".inlineEditFields"][] = "bank_name";
$tdataEoctest[".inlineEditFields"][] = "_registerd_id";
$tdataEoctest[".inlineEditFields"][] = "created_t";
$tdataEoctest[".inlineEditFields"][] = "updated_at";
$tdataEoctest[".inlineEditFields"][] = "registerd_id";
$tdataEoctest[".inlineEditFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoctest[".inlineEditFields"][] = "kaitori_sougak";
$tdataEoctest[".inlineEditFields"][] = "flag";
$tdataEoctest[".inlineEditFields"][] = "key_code";

$tdataEoctest[".updateSelectedFields"] = array();
$tdataEoctest[".updateSelectedFields"][] = "ecc_seq";
$tdataEoctest[".updateSelectedFields"][] = "name1";
$tdataEoctest[".updateSelectedFields"][] = "created_t";
$tdataEoctest[".updateSelectedFields"][] = "registerd_id";
$tdataEoctest[".updateSelectedFields"][] = "kaitori_staff_id";
$tdataEoctest[".updateSelectedFields"][] = "name2";
$tdataEoctest[".updateSelectedFields"][] = "wareki";
$tdataEoctest[".updateSelectedFields"][] = "b1";
$tdataEoctest[".updateSelectedFields"][] = "b2";
$tdataEoctest[".updateSelectedFields"][] = "b3";
$tdataEoctest[".updateSelectedFields"][] = "birth_day";
$tdataEoctest[".updateSelectedFields"][] = "age";
$tdataEoctest[".updateSelectedFields"][] = "zip";
$tdataEoctest[".updateSelectedFields"][] = "zip1";
$tdataEoctest[".updateSelectedFields"][] = "zip2";
$tdataEoctest[".updateSelectedFields"][] = "address1";
$tdataEoctest[".updateSelectedFields"][] = "address2";
$tdataEoctest[".updateSelectedFields"][] = "address3";
$tdataEoctest[".updateSelectedFields"][] = "tel";
$tdataEoctest[".updateSelectedFields"][] = "tel2";
$tdataEoctest[".updateSelectedFields"][] = "mail1";
$tdataEoctest[".updateSelectedFields"][] = "mail2";
$tdataEoctest[".updateSelectedFields"][] = "address_code";
$tdataEoctest[".updateSelectedFields"][] = "bank_name";
$tdataEoctest[".updateSelectedFields"][] = "bank_blunch_code";
$tdataEoctest[".updateSelectedFields"][] = "bank_yokin_shubetu";
$tdataEoctest[".updateSelectedFields"][] = "bank_account";
$tdataEoctest[".updateSelectedFields"][] = "bank_acoount_name";
$tdataEoctest[".updateSelectedFields"][] = "haisou_bangou";
$tdataEoctest[".updateSelectedFields"][] = "sise_houhou";
$tdataEoctest[".updateSelectedFields"][] = "hentou_houhou";
$tdataEoctest[".updateSelectedFields"][] = "hentou_houhou_time";
$tdataEoctest[".updateSelectedFields"][] = "mousikomi_id";
$tdataEoctest[".updateSelectedFields"][] = "hituyou_shorui";
$tdataEoctest[".updateSelectedFields"][] = "seiyaku_fuseiritu";
$tdataEoctest[".updateSelectedFields"][] = "mitumori_taku";
$tdataEoctest[".updateSelectedFields"][] = "seacanse";
$tdataEoctest[".updateSelectedFields"][] = "remark";
$tdataEoctest[".updateSelectedFields"][] = "type";
$tdataEoctest[".updateSelectedFields"][] = "sales_flag";
$tdataEoctest[".updateSelectedFields"][] = "src_type";
$tdataEoctest[".updateSelectedFields"][] = "liquidation_shop_code";
$tdataEoctest[".updateSelectedFields"][] = "insurance_amount_print";
$tdataEoctest[".updateSelectedFields"][] = "jis_code";
$tdataEoctest[".updateSelectedFields"][] = "updated_at";
$tdataEoctest[".updateSelectedFields"][] = "_registerd_id";
$tdataEoctest[".updateSelectedFields"][] = "mail_check_type";
$tdataEoctest[".updateSelectedFields"][] = "purchase_type";
$tdataEoctest[".updateSelectedFields"][] = "sex";
$tdataEoctest[".updateSelectedFields"][] = "m_tel";
$tdataEoctest[".updateSelectedFields"][] = "fax";
$tdataEoctest[".updateSelectedFields"][] = "chigin_kaitori";
$tdataEoctest[".updateSelectedFields"][] = "option1";
$tdataEoctest[".updateSelectedFields"][] = "option2";
$tdataEoctest[".updateSelectedFields"][] = "option3";
$tdataEoctest[".updateSelectedFields"][] = "option4";
$tdataEoctest[".updateSelectedFields"][] = "option5";
$tdataEoctest[".updateSelectedFields"][] = "option6";
$tdataEoctest[".updateSelectedFields"][] = "option7";
$tdataEoctest[".updateSelectedFields"][] = "option8";
$tdataEoctest[".updateSelectedFields"][] = "option9";
$tdataEoctest[".updateSelectedFields"][] = "option10";
$tdataEoctest[".updateSelectedFields"][] = "option11";
$tdataEoctest[".updateSelectedFields"][] = "option12";
$tdataEoctest[".updateSelectedFields"][] = "option13";
$tdataEoctest[".updateSelectedFields"][] = "rakuda_csv_flag";
$tdataEoctest[".updateSelectedFields"][] = "EOC_COURIER_CHECK";
$tdataEoctest[".updateSelectedFields"][] = "EOC_SIZE";
$tdataEoctest[".updateSelectedFields"][] = "EOC_NUMBER";
$tdataEoctest[".updateSelectedFields"][] = "EOC_REUSE";
$tdataEoctest[".updateSelectedFields"][] = "EOC__DELIVERY_DATES";
$tdataEoctest[".updateSelectedFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoctest[".updateSelectedFields"][] = "FIRST_NAME2";
$tdataEoctest[".updateSelectedFields"][] = "LAST_NAME2";
$tdataEoctest[".updateSelectedFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoctest[".updateSelectedFields"][] = "EOC__BOX_NUMBER";
$tdataEoctest[".updateSelectedFields"][] = "FIRST_NAME_KANA";
$tdataEoctest[".updateSelectedFields"][] = "LAST_NAME_KANA";
$tdataEoctest[".updateSelectedFields"][] = "FLAG_SPEED";
$tdataEoctest[".updateSelectedFields"][] = "SEARCH_MEDIA";
$tdataEoctest[".updateSelectedFields"][] = "SEARCH_SITE";
$tdataEoctest[".updateSelectedFields"][] = "UN_REACHABLE";
$tdataEoctest[".updateSelectedFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoctest[".updateSelectedFields"][] = "FLG_MAIL_OTHER";
$tdataEoctest[".updateSelectedFields"][] = "ALLSEIYAKU";
$tdataEoctest[".updateSelectedFields"][] = "ICHIBUSEIYAKU";
$tdataEoctest[".updateSelectedFields"][] = "seiyakukin";
$tdataEoctest[".updateSelectedFields"][] = "kaitorihuka";
$tdataEoctest[".updateSelectedFields"][] = "awazu_date";
$tdataEoctest[".updateSelectedFields"][] = "seiyaku_price";
$tdataEoctest[".updateSelectedFields"][] = "eoc_search_keyword";
$tdataEoctest[".updateSelectedFields"][] = "sonota";
$tdataEoctest[".updateSelectedFields"][] = "size_kosuu";
$tdataEoctest[".updateSelectedFields"][] = "sagawa_shuuka_flag";
$tdataEoctest[".updateSelectedFields"][] = "line_check";
$tdataEoctest[".updateSelectedFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoctest[".updateSelectedFields"][] = "kaitori_sougak";
$tdataEoctest[".updateSelectedFields"][] = "flag";
$tdataEoctest[".updateSelectedFields"][] = "key_code";


$tdataEoctest[".exportFields"] = array();
$tdataEoctest[".exportFields"][] = "ecc_id";
$tdataEoctest[".exportFields"][] = "ecc_seq";
$tdataEoctest[".exportFields"][] = "name1";
$tdataEoctest[".exportFields"][] = "created_t";
$tdataEoctest[".exportFields"][] = "registerd_id";
$tdataEoctest[".exportFields"][] = "kaitori_staff_id";
$tdataEoctest[".exportFields"][] = "name2";
$tdataEoctest[".exportFields"][] = "wareki";
$tdataEoctest[".exportFields"][] = "b1";
$tdataEoctest[".exportFields"][] = "b2";
$tdataEoctest[".exportFields"][] = "b3";
$tdataEoctest[".exportFields"][] = "birth_day";
$tdataEoctest[".exportFields"][] = "age";
$tdataEoctest[".exportFields"][] = "zip";
$tdataEoctest[".exportFields"][] = "zip1";
$tdataEoctest[".exportFields"][] = "zip2";
$tdataEoctest[".exportFields"][] = "address1";
$tdataEoctest[".exportFields"][] = "address2";
$tdataEoctest[".exportFields"][] = "address3";
$tdataEoctest[".exportFields"][] = "tel";
$tdataEoctest[".exportFields"][] = "tel2";
$tdataEoctest[".exportFields"][] = "mail1";
$tdataEoctest[".exportFields"][] = "mail2";
$tdataEoctest[".exportFields"][] = "address_code";
$tdataEoctest[".exportFields"][] = "bank_name";
$tdataEoctest[".exportFields"][] = "bank_blunch_code";
$tdataEoctest[".exportFields"][] = "bank_yokin_shubetu";
$tdataEoctest[".exportFields"][] = "bank_account";
$tdataEoctest[".exportFields"][] = "bank_acoount_name";
$tdataEoctest[".exportFields"][] = "haisou_bangou";
$tdataEoctest[".exportFields"][] = "sise_houhou";
$tdataEoctest[".exportFields"][] = "hentou_houhou";
$tdataEoctest[".exportFields"][] = "hentou_houhou_time";
$tdataEoctest[".exportFields"][] = "mousikomi_id";
$tdataEoctest[".exportFields"][] = "hituyou_shorui";
$tdataEoctest[".exportFields"][] = "seiyaku_fuseiritu";
$tdataEoctest[".exportFields"][] = "mitumori_taku";
$tdataEoctest[".exportFields"][] = "seacanse";
$tdataEoctest[".exportFields"][] = "remark";
$tdataEoctest[".exportFields"][] = "type";
$tdataEoctest[".exportFields"][] = "sales_flag";
$tdataEoctest[".exportFields"][] = "src_type";
$tdataEoctest[".exportFields"][] = "liquidation_shop_code";
$tdataEoctest[".exportFields"][] = "insurance_amount_print";
$tdataEoctest[".exportFields"][] = "jis_code";
$tdataEoctest[".exportFields"][] = "updated_at";
$tdataEoctest[".exportFields"][] = "_registerd_id";
$tdataEoctest[".exportFields"][] = "mail_check_type";
$tdataEoctest[".exportFields"][] = "purchase_type";
$tdataEoctest[".exportFields"][] = "sex";
$tdataEoctest[".exportFields"][] = "m_tel";
$tdataEoctest[".exportFields"][] = "fax";
$tdataEoctest[".exportFields"][] = "chigin_kaitori";
$tdataEoctest[".exportFields"][] = "option1";
$tdataEoctest[".exportFields"][] = "option2";
$tdataEoctest[".exportFields"][] = "option3";
$tdataEoctest[".exportFields"][] = "option4";
$tdataEoctest[".exportFields"][] = "option5";
$tdataEoctest[".exportFields"][] = "option6";
$tdataEoctest[".exportFields"][] = "option7";
$tdataEoctest[".exportFields"][] = "option8";
$tdataEoctest[".exportFields"][] = "option9";
$tdataEoctest[".exportFields"][] = "option10";
$tdataEoctest[".exportFields"][] = "option11";
$tdataEoctest[".exportFields"][] = "option12";
$tdataEoctest[".exportFields"][] = "option13";
$tdataEoctest[".exportFields"][] = "rakuda_csv_flag";
$tdataEoctest[".exportFields"][] = "EOC_COURIER_CHECK";
$tdataEoctest[".exportFields"][] = "EOC_SIZE";
$tdataEoctest[".exportFields"][] = "EOC_NUMBER";
$tdataEoctest[".exportFields"][] = "EOC_REUSE";
$tdataEoctest[".exportFields"][] = "EOC__DELIVERY_DATES";
$tdataEoctest[".exportFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoctest[".exportFields"][] = "FIRST_NAME2";
$tdataEoctest[".exportFields"][] = "LAST_NAME2";
$tdataEoctest[".exportFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoctest[".exportFields"][] = "EOC__BOX_NUMBER";
$tdataEoctest[".exportFields"][] = "FIRST_NAME_KANA";
$tdataEoctest[".exportFields"][] = "LAST_NAME_KANA";
$tdataEoctest[".exportFields"][] = "FLAG_SPEED";
$tdataEoctest[".exportFields"][] = "SEARCH_MEDIA";
$tdataEoctest[".exportFields"][] = "SEARCH_SITE";
$tdataEoctest[".exportFields"][] = "UN_REACHABLE";
$tdataEoctest[".exportFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoctest[".exportFields"][] = "FLG_MAIL_OTHER";
$tdataEoctest[".exportFields"][] = "ALLSEIYAKU";
$tdataEoctest[".exportFields"][] = "ICHIBUSEIYAKU";
$tdataEoctest[".exportFields"][] = "seiyakukin";
$tdataEoctest[".exportFields"][] = "kaitorihuka";
$tdataEoctest[".exportFields"][] = "awazu_date";
$tdataEoctest[".exportFields"][] = "seiyaku_price";
$tdataEoctest[".exportFields"][] = "eoc_search_keyword";
$tdataEoctest[".exportFields"][] = "sonota";
$tdataEoctest[".exportFields"][] = "size_kosuu";
$tdataEoctest[".exportFields"][] = "sagawa_shuuka_flag";
$tdataEoctest[".exportFields"][] = "line_check";
$tdataEoctest[".exportFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoctest[".exportFields"][] = "kaitori_sougak";
$tdataEoctest[".exportFields"][] = "flag";
$tdataEoctest[".exportFields"][] = "key_code";

$tdataEoctest[".importFields"] = array();
$tdataEoctest[".importFields"][] = "ecc_id";
$tdataEoctest[".importFields"][] = "ecc_seq";
$tdataEoctest[".importFields"][] = "name1";
$tdataEoctest[".importFields"][] = "created_t";
$tdataEoctest[".importFields"][] = "registerd_id";
$tdataEoctest[".importFields"][] = "kaitori_staff_id";
$tdataEoctest[".importFields"][] = "name2";
$tdataEoctest[".importFields"][] = "wareki";
$tdataEoctest[".importFields"][] = "b1";
$tdataEoctest[".importFields"][] = "b2";
$tdataEoctest[".importFields"][] = "b3";
$tdataEoctest[".importFields"][] = "birth_day";
$tdataEoctest[".importFields"][] = "age";
$tdataEoctest[".importFields"][] = "zip";
$tdataEoctest[".importFields"][] = "zip1";
$tdataEoctest[".importFields"][] = "zip2";
$tdataEoctest[".importFields"][] = "address1";
$tdataEoctest[".importFields"][] = "address2";
$tdataEoctest[".importFields"][] = "address3";
$tdataEoctest[".importFields"][] = "tel";
$tdataEoctest[".importFields"][] = "tel2";
$tdataEoctest[".importFields"][] = "mail1";
$tdataEoctest[".importFields"][] = "mail2";
$tdataEoctest[".importFields"][] = "address_code";
$tdataEoctest[".importFields"][] = "bank_name";
$tdataEoctest[".importFields"][] = "bank_blunch_code";
$tdataEoctest[".importFields"][] = "bank_yokin_shubetu";
$tdataEoctest[".importFields"][] = "bank_account";
$tdataEoctest[".importFields"][] = "bank_acoount_name";
$tdataEoctest[".importFields"][] = "haisou_bangou";
$tdataEoctest[".importFields"][] = "sise_houhou";
$tdataEoctest[".importFields"][] = "hentou_houhou";
$tdataEoctest[".importFields"][] = "hentou_houhou_time";
$tdataEoctest[".importFields"][] = "mousikomi_id";
$tdataEoctest[".importFields"][] = "hituyou_shorui";
$tdataEoctest[".importFields"][] = "seiyaku_fuseiritu";
$tdataEoctest[".importFields"][] = "mitumori_taku";
$tdataEoctest[".importFields"][] = "seacanse";
$tdataEoctest[".importFields"][] = "remark";
$tdataEoctest[".importFields"][] = "type";
$tdataEoctest[".importFields"][] = "sales_flag";
$tdataEoctest[".importFields"][] = "src_type";
$tdataEoctest[".importFields"][] = "liquidation_shop_code";
$tdataEoctest[".importFields"][] = "insurance_amount_print";
$tdataEoctest[".importFields"][] = "jis_code";
$tdataEoctest[".importFields"][] = "updated_at";
$tdataEoctest[".importFields"][] = "_registerd_id";
$tdataEoctest[".importFields"][] = "mail_check_type";
$tdataEoctest[".importFields"][] = "purchase_type";
$tdataEoctest[".importFields"][] = "sex";
$tdataEoctest[".importFields"][] = "m_tel";
$tdataEoctest[".importFields"][] = "fax";
$tdataEoctest[".importFields"][] = "chigin_kaitori";
$tdataEoctest[".importFields"][] = "option1";
$tdataEoctest[".importFields"][] = "option2";
$tdataEoctest[".importFields"][] = "option3";
$tdataEoctest[".importFields"][] = "option4";
$tdataEoctest[".importFields"][] = "option5";
$tdataEoctest[".importFields"][] = "option6";
$tdataEoctest[".importFields"][] = "option7";
$tdataEoctest[".importFields"][] = "option8";
$tdataEoctest[".importFields"][] = "option9";
$tdataEoctest[".importFields"][] = "option10";
$tdataEoctest[".importFields"][] = "option11";
$tdataEoctest[".importFields"][] = "option12";
$tdataEoctest[".importFields"][] = "option13";
$tdataEoctest[".importFields"][] = "rakuda_csv_flag";
$tdataEoctest[".importFields"][] = "EOC_COURIER_CHECK";
$tdataEoctest[".importFields"][] = "EOC_SIZE";
$tdataEoctest[".importFields"][] = "EOC_NUMBER";
$tdataEoctest[".importFields"][] = "EOC_REUSE";
$tdataEoctest[".importFields"][] = "EOC__DELIVERY_DATES";
$tdataEoctest[".importFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoctest[".importFields"][] = "FIRST_NAME2";
$tdataEoctest[".importFields"][] = "LAST_NAME2";
$tdataEoctest[".importFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoctest[".importFields"][] = "EOC__BOX_NUMBER";
$tdataEoctest[".importFields"][] = "FIRST_NAME_KANA";
$tdataEoctest[".importFields"][] = "LAST_NAME_KANA";
$tdataEoctest[".importFields"][] = "FLAG_SPEED";
$tdataEoctest[".importFields"][] = "SEARCH_MEDIA";
$tdataEoctest[".importFields"][] = "SEARCH_SITE";
$tdataEoctest[".importFields"][] = "UN_REACHABLE";
$tdataEoctest[".importFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoctest[".importFields"][] = "FLG_MAIL_OTHER";
$tdataEoctest[".importFields"][] = "ALLSEIYAKU";
$tdataEoctest[".importFields"][] = "ICHIBUSEIYAKU";
$tdataEoctest[".importFields"][] = "seiyakukin";
$tdataEoctest[".importFields"][] = "kaitorihuka";
$tdataEoctest[".importFields"][] = "awazu_date";
$tdataEoctest[".importFields"][] = "seiyaku_price";
$tdataEoctest[".importFields"][] = "eoc_search_keyword";
$tdataEoctest[".importFields"][] = "sonota";
$tdataEoctest[".importFields"][] = "size_kosuu";
$tdataEoctest[".importFields"][] = "sagawa_shuuka_flag";
$tdataEoctest[".importFields"][] = "line_check";
$tdataEoctest[".importFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoctest[".importFields"][] = "kaitori_sougak";
$tdataEoctest[".importFields"][] = "flag";
$tdataEoctest[".importFields"][] = "key_code";

$tdataEoctest[".printFields"] = array();
$tdataEoctest[".printFields"][] = "ecc_id";
$tdataEoctest[".printFields"][] = "ecc_seq";
$tdataEoctest[".printFields"][] = "name1";
$tdataEoctest[".printFields"][] = "created_t";
$tdataEoctest[".printFields"][] = "registerd_id";
$tdataEoctest[".printFields"][] = "kaitori_staff_id";
$tdataEoctest[".printFields"][] = "name2";
$tdataEoctest[".printFields"][] = "wareki";
$tdataEoctest[".printFields"][] = "b1";
$tdataEoctest[".printFields"][] = "b2";
$tdataEoctest[".printFields"][] = "b3";
$tdataEoctest[".printFields"][] = "birth_day";
$tdataEoctest[".printFields"][] = "age";
$tdataEoctest[".printFields"][] = "zip";
$tdataEoctest[".printFields"][] = "zip1";
$tdataEoctest[".printFields"][] = "zip2";
$tdataEoctest[".printFields"][] = "address1";
$tdataEoctest[".printFields"][] = "address2";
$tdataEoctest[".printFields"][] = "address3";
$tdataEoctest[".printFields"][] = "tel";
$tdataEoctest[".printFields"][] = "tel2";
$tdataEoctest[".printFields"][] = "mail1";
$tdataEoctest[".printFields"][] = "mail2";
$tdataEoctest[".printFields"][] = "address_code";
$tdataEoctest[".printFields"][] = "bank_name";
$tdataEoctest[".printFields"][] = "bank_blunch_code";
$tdataEoctest[".printFields"][] = "bank_yokin_shubetu";
$tdataEoctest[".printFields"][] = "bank_account";
$tdataEoctest[".printFields"][] = "bank_acoount_name";
$tdataEoctest[".printFields"][] = "haisou_bangou";
$tdataEoctest[".printFields"][] = "sise_houhou";
$tdataEoctest[".printFields"][] = "hentou_houhou";
$tdataEoctest[".printFields"][] = "hentou_houhou_time";
$tdataEoctest[".printFields"][] = "mousikomi_id";
$tdataEoctest[".printFields"][] = "hituyou_shorui";
$tdataEoctest[".printFields"][] = "seiyaku_fuseiritu";
$tdataEoctest[".printFields"][] = "mitumori_taku";
$tdataEoctest[".printFields"][] = "seacanse";
$tdataEoctest[".printFields"][] = "remark";
$tdataEoctest[".printFields"][] = "type";
$tdataEoctest[".printFields"][] = "sales_flag";
$tdataEoctest[".printFields"][] = "src_type";
$tdataEoctest[".printFields"][] = "liquidation_shop_code";
$tdataEoctest[".printFields"][] = "insurance_amount_print";
$tdataEoctest[".printFields"][] = "jis_code";
$tdataEoctest[".printFields"][] = "updated_at";
$tdataEoctest[".printFields"][] = "_registerd_id";
$tdataEoctest[".printFields"][] = "mail_check_type";
$tdataEoctest[".printFields"][] = "purchase_type";
$tdataEoctest[".printFields"][] = "sex";
$tdataEoctest[".printFields"][] = "m_tel";
$tdataEoctest[".printFields"][] = "fax";
$tdataEoctest[".printFields"][] = "chigin_kaitori";
$tdataEoctest[".printFields"][] = "option1";
$tdataEoctest[".printFields"][] = "option2";
$tdataEoctest[".printFields"][] = "option3";
$tdataEoctest[".printFields"][] = "option4";
$tdataEoctest[".printFields"][] = "option5";
$tdataEoctest[".printFields"][] = "option6";
$tdataEoctest[".printFields"][] = "option7";
$tdataEoctest[".printFields"][] = "option8";
$tdataEoctest[".printFields"][] = "option9";
$tdataEoctest[".printFields"][] = "option10";
$tdataEoctest[".printFields"][] = "option11";
$tdataEoctest[".printFields"][] = "option12";
$tdataEoctest[".printFields"][] = "option13";
$tdataEoctest[".printFields"][] = "rakuda_csv_flag";
$tdataEoctest[".printFields"][] = "EOC_COURIER_CHECK";
$tdataEoctest[".printFields"][] = "EOC_SIZE";
$tdataEoctest[".printFields"][] = "EOC_NUMBER";
$tdataEoctest[".printFields"][] = "EOC_REUSE";
$tdataEoctest[".printFields"][] = "EOC__DELIVERY_DATES";
$tdataEoctest[".printFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoctest[".printFields"][] = "FIRST_NAME2";
$tdataEoctest[".printFields"][] = "LAST_NAME2";
$tdataEoctest[".printFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoctest[".printFields"][] = "EOC__BOX_NUMBER";
$tdataEoctest[".printFields"][] = "FIRST_NAME_KANA";
$tdataEoctest[".printFields"][] = "LAST_NAME_KANA";
$tdataEoctest[".printFields"][] = "FLAG_SPEED";
$tdataEoctest[".printFields"][] = "SEARCH_MEDIA";
$tdataEoctest[".printFields"][] = "SEARCH_SITE";
$tdataEoctest[".printFields"][] = "UN_REACHABLE";
$tdataEoctest[".printFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoctest[".printFields"][] = "FLG_MAIL_OTHER";
$tdataEoctest[".printFields"][] = "ALLSEIYAKU";
$tdataEoctest[".printFields"][] = "ICHIBUSEIYAKU";
$tdataEoctest[".printFields"][] = "seiyakukin";
$tdataEoctest[".printFields"][] = "kaitorihuka";
$tdataEoctest[".printFields"][] = "awazu_date";
$tdataEoctest[".printFields"][] = "seiyaku_price";
$tdataEoctest[".printFields"][] = "eoc_search_keyword";
$tdataEoctest[".printFields"][] = "sonota";
$tdataEoctest[".printFields"][] = "size_kosuu";
$tdataEoctest[".printFields"][] = "sagawa_shuuka_flag";
$tdataEoctest[".printFields"][] = "line_check";
$tdataEoctest[".printFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoctest[".printFields"][] = "kaitori_sougak";
$tdataEoctest[".printFields"][] = "flag";
$tdataEoctest[".printFields"][] = "key_code";

//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","ecc_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ecc_id";

	
	
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




	$tdataEoctest["ecc_id"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","ecc_seq");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "ecc_seq";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ecc_seq";

	
	
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




	$tdataEoctest["ecc_seq"] = $fdata;
//	name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name1";
	$fdata["GoodName"] = "name1";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","name1");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "name1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name1";

	
	
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




	$tdataEoctest["name1"] = $fdata;
//	created_t
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_t";
	$fdata["GoodName"] = "created_t";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","created_t");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "created_t";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_t";

	
	
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

	
	
		$edata["DateEditType"] = 11;
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




	$tdataEoctest["created_t"] = $fdata;
//	registerd_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "registerd_id";
	$fdata["GoodName"] = "registerd_id";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","registerd_id");
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

		$fdata["strField"] = "registerd_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "registerd_id";

	
	
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




	$tdataEoctest["registerd_id"] = $fdata;
//	kaitori_staff_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "kaitori_staff_id";
	$fdata["GoodName"] = "kaitori_staff_id";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","kaitori_staff_id");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "kaitori_staff_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kaitori_staff_id";

	
	
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




	$tdataEoctest["kaitori_staff_id"] = $fdata;
//	name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "name2";
	$fdata["GoodName"] = "name2";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","name2");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "name2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name2";

	
	
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




	$tdataEoctest["name2"] = $fdata;
//	wareki
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "wareki";
	$fdata["GoodName"] = "wareki";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","wareki");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "wareki";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "wareki";

	
	
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




	$tdataEoctest["wareki"] = $fdata;
//	b1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "b1";
	$fdata["GoodName"] = "b1";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","b1");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "b1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "b1";

	
	
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




	$tdataEoctest["b1"] = $fdata;
//	b2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "b2";
	$fdata["GoodName"] = "b2";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","b2");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "b2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "b2";

	
	
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




	$tdataEoctest["b2"] = $fdata;
//	b3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "b3";
	$fdata["GoodName"] = "b3";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","b3");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "b3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "b3";

	
	
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




	$tdataEoctest["b3"] = $fdata;
//	birth_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "birth_day";
	$fdata["GoodName"] = "birth_day";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","birth_day");
	$fdata["FieldType"] = 135;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "birth_day";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "birth_day";

	
	
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




	$tdataEoctest["birth_day"] = $fdata;
//	age
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "age";
	$fdata["GoodName"] = "age";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","age");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "age";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "age";

	
	
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




	$tdataEoctest["age"] = $fdata;
//	zip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "zip";
	$fdata["GoodName"] = "zip";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","zip");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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




	$tdataEoctest["zip"] = $fdata;
//	zip1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "zip1";
	$fdata["GoodName"] = "zip1";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","zip1");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "zip1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zip1";

	
	
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




	$tdataEoctest["zip1"] = $fdata;
//	zip2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "zip2";
	$fdata["GoodName"] = "zip2";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","zip2");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "zip2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zip2";

	
	
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




	$tdataEoctest["zip2"] = $fdata;
//	address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "address1";
	$fdata["GoodName"] = "address1";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","address1");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdataEoctest["address1"] = $fdata;
//	address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "address2";
	$fdata["GoodName"] = "address2";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","address2");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdataEoctest["address2"] = $fdata;
//	address3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "address3";
	$fdata["GoodName"] = "address3";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","address3");
	$fdata["FieldType"] = 200;

	
	
	
			
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




	$tdataEoctest["address3"] = $fdata;
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","tel");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "tel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tel";

	
	
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




	$tdataEoctest["tel"] = $fdata;
//	tel2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "tel2";
	$fdata["GoodName"] = "tel2";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","tel2");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "tel2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tel2";

	
	
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




	$tdataEoctest["tel2"] = $fdata;
//	mail1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "mail1";
	$fdata["GoodName"] = "mail1";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","mail1");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "mail1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mail1";

	
	
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




	$tdataEoctest["mail1"] = $fdata;
//	mail2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "mail2";
	$fdata["GoodName"] = "mail2";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","mail2");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "mail2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mail2";

	
	
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




	$tdataEoctest["mail2"] = $fdata;
//	address_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "address_code";
	$fdata["GoodName"] = "address_code";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","address_code");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_code";

	
	
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




	$tdataEoctest["address_code"] = $fdata;
//	bank_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "bank_name";
	$fdata["GoodName"] = "bank_name";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","bank_name");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "bank_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_name";

	
	
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




	$tdataEoctest["bank_name"] = $fdata;
//	bank_blunch_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "bank_blunch_code";
	$fdata["GoodName"] = "bank_blunch_code";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","bank_blunch_code");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bank_blunch_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_blunch_code";

	
	
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
			$edata["EditParams"].= " maxlength=24";

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




	$tdataEoctest["bank_blunch_code"] = $fdata;
//	bank_yokin_shubetu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "bank_yokin_shubetu";
	$fdata["GoodName"] = "bank_yokin_shubetu";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","bank_yokin_shubetu");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bank_yokin_shubetu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_yokin_shubetu";

	
	
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
			$edata["EditParams"].= " maxlength=24";

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




	$tdataEoctest["bank_yokin_shubetu"] = $fdata;
//	bank_account
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "bank_account";
	$fdata["GoodName"] = "bank_account";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","bank_account");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bank_account";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_account";

	
	
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
			$edata["EditParams"].= " maxlength=24";

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




	$tdataEoctest["bank_account"] = $fdata;
//	bank_acoount_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "bank_acoount_name";
	$fdata["GoodName"] = "bank_acoount_name";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","bank_acoount_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bank_acoount_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_acoount_name";

	
	
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
			$edata["EditParams"].= " maxlength=24";

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




	$tdataEoctest["bank_acoount_name"] = $fdata;
//	haisou_bangou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "haisou_bangou";
	$fdata["GoodName"] = "haisou_bangou";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","haisou_bangou");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "haisou_bangou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "haisou_bangou";

	
	
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




	$tdataEoctest["haisou_bangou"] = $fdata;
//	sise_houhou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "sise_houhou";
	$fdata["GoodName"] = "sise_houhou";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","sise_houhou");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sise_houhou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sise_houhou";

	
	
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




	$tdataEoctest["sise_houhou"] = $fdata;
//	hentou_houhou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "hentou_houhou";
	$fdata["GoodName"] = "hentou_houhou";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","hentou_houhou");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hentou_houhou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hentou_houhou";

	
	
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




	$tdataEoctest["hentou_houhou"] = $fdata;
//	hentou_houhou_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "hentou_houhou_time";
	$fdata["GoodName"] = "hentou_houhou_time";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","hentou_houhou_time");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hentou_houhou_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hentou_houhou_time";

	
	
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




	$tdataEoctest["hentou_houhou_time"] = $fdata;
//	mousikomi_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "mousikomi_id";
	$fdata["GoodName"] = "mousikomi_id";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","mousikomi_id");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mousikomi_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mousikomi_id";

	
	
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




	$tdataEoctest["mousikomi_id"] = $fdata;
//	hituyou_shorui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "hituyou_shorui";
	$fdata["GoodName"] = "hituyou_shorui";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","hituyou_shorui");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "hituyou_shorui";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hituyou_shorui";

	
	
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




	$tdataEoctest["hituyou_shorui"] = $fdata;
//	seiyaku_fuseiritu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "seiyaku_fuseiritu";
	$fdata["GoodName"] = "seiyaku_fuseiritu";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","seiyaku_fuseiritu");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "seiyaku_fuseiritu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seiyaku_fuseiritu";

	
	
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




	$tdataEoctest["seiyaku_fuseiritu"] = $fdata;
//	mitumori_taku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "mitumori_taku";
	$fdata["GoodName"] = "mitumori_taku";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","mitumori_taku");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mitumori_taku";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mitumori_taku";

	
	
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




	$tdataEoctest["mitumori_taku"] = $fdata;
//	seacanse
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "seacanse";
	$fdata["GoodName"] = "seacanse";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","seacanse");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "seacanse";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seacanse";

	
	
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




	$tdataEoctest["seacanse"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","remark");
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
	$fdata["FullName"] = "remark";

	
	
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




	$tdataEoctest["remark"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","type");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type`";

	
	
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




	$tdataEoctest["type"] = $fdata;
//	sales_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "sales_flag";
	$fdata["GoodName"] = "sales_flag";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","sales_flag");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sales_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sales_flag";

	
	
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
			$edata["EditParams"].= " maxlength=8";

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




	$tdataEoctest["sales_flag"] = $fdata;
//	src_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "src_type";
	$fdata["GoodName"] = "src_type";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","src_type");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "src_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "src_type";

	
	
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
			$edata["EditParams"].= " maxlength=8";

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




	$tdataEoctest["src_type"] = $fdata;
//	liquidation_shop_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "liquidation_shop_code";
	$fdata["GoodName"] = "liquidation_shop_code";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","liquidation_shop_code");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "liquidation_shop_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "liquidation_shop_code";

	
	
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




	$tdataEoctest["liquidation_shop_code"] = $fdata;
//	insurance_amount_print
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "insurance_amount_print";
	$fdata["GoodName"] = "insurance_amount_print";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","insurance_amount_print");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "insurance_amount_print";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "insurance_amount_print";

	
	
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




	$tdataEoctest["insurance_amount_print"] = $fdata;
//	jis_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "jis_code";
	$fdata["GoodName"] = "jis_code";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","jis_code");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jis_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jis_code";

	
	
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
			$edata["EditParams"].= " maxlength=8";

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




	$tdataEoctest["jis_code"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
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

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_at";

	
	
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

	
	
		$edata["DateEditType"] = 11;
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




	$tdataEoctest["updated_at"] = $fdata;
//	_registerd_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "_registerd_id";
	$fdata["GoodName"] = "_registerd_id";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","_registerd_id");
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




	$tdataEoctest["_registerd_id"] = $fdata;
//	mail_check_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "mail_check_type";
	$fdata["GoodName"] = "mail_check_type";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","mail_check_type");
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

		$fdata["strField"] = "mail_check_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mail_check_type";

	
	
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
	$edata["LookupTable"] = "_mail_check_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "mail_check_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "mail_check_name";

	
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




	$tdataEoctest["mail_check_type"] = $fdata;
//	purchase_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "purchase_type";
	$fdata["GoodName"] = "purchase_type";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","purchase_type");
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

		$fdata["strField"] = "purchase_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "purchase_type";

	
	
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




	$tdataEoctest["purchase_type"] = $fdata;
//	sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "sex";
	$fdata["GoodName"] = "sex";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","sex");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sex";

	
	
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




	$tdataEoctest["sex"] = $fdata;
//	m_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "m_tel";
	$fdata["GoodName"] = "m_tel";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","m_tel");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "m_tel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_tel";

	
	
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




	$tdataEoctest["m_tel"] = $fdata;
//	fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "fax";
	$fdata["GoodName"] = "fax";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","fax");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

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




	$tdataEoctest["fax"] = $fdata;
//	chigin_kaitori
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "chigin_kaitori";
	$fdata["GoodName"] = "chigin_kaitori";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","chigin_kaitori");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "chigin_kaitori";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "chigin_kaitori";

	
	
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




	$tdataEoctest["chigin_kaitori"] = $fdata;
//	option1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "option1";
	$fdata["GoodName"] = "option1";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","option1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "option1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option1";

	
	
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




	$tdataEoctest["option1"] = $fdata;
//	option2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "option2";
	$fdata["GoodName"] = "option2";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","option2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "option2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option2";

	
	
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




	$tdataEoctest["option2"] = $fdata;
//	option3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "option3";
	$fdata["GoodName"] = "option3";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","option3");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "option3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option3";

	
	
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




	$tdataEoctest["option3"] = $fdata;
//	option4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "option4";
	$fdata["GoodName"] = "option4";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","option4");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "option4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option4";

	
	
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




	$tdataEoctest["option4"] = $fdata;
//	option5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "option5";
	$fdata["GoodName"] = "option5";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","option5");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "option5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option5";

	
	
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




	$tdataEoctest["option5"] = $fdata;
//	option6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "option6";
	$fdata["GoodName"] = "option6";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","option6");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "option6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option6";

	
	
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




	$tdataEoctest["option6"] = $fdata;
//	option7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "option7";
	$fdata["GoodName"] = "option7";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","option7");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "option7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option7";

	
	
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




	$tdataEoctest["option7"] = $fdata;
//	option8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "option8";
	$fdata["GoodName"] = "option8";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","option8");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "option8";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option8";

	
	
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




	$tdataEoctest["option8"] = $fdata;
//	option9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "option9";
	$fdata["GoodName"] = "option9";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","option9");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "option9";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option9";

	
	
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




	$tdataEoctest["option9"] = $fdata;
//	option10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "option10";
	$fdata["GoodName"] = "option10";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","option10");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "option10";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option10";

	
	
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




	$tdataEoctest["option10"] = $fdata;
//	option11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "option11";
	$fdata["GoodName"] = "option11";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","option11");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "option11";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option11";

	
	
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




	$tdataEoctest["option11"] = $fdata;
//	option12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "option12";
	$fdata["GoodName"] = "option12";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","option12");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "option12";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option12";

	
	
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




	$tdataEoctest["option12"] = $fdata;
//	option13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "option13";
	$fdata["GoodName"] = "option13";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","option13");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "option13";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option13";

	
	
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




	$tdataEoctest["option13"] = $fdata;
//	rakuda_csv_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "rakuda_csv_flag";
	$fdata["GoodName"] = "rakuda_csv_flag";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","rakuda_csv_flag");
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

		$fdata["strField"] = "rakuda_csv_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rakuda_csv_flag";

	
	
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




	$tdataEoctest["rakuda_csv_flag"] = $fdata;
//	EOC_COURIER_CHECK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "EOC_COURIER_CHECK";
	$fdata["GoodName"] = "EOC_COURIER_CHECK";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","EOC_COURIER_CHECK");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "EOC_COURIER_CHECK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EOC_COURIER_CHECK";

	
	
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
	$edata["LookupValues"][] = "スピード";
	$edata["LookupValues"][] = "佐川";
	$edata["LookupValues"][] = "郵";

	
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




	$tdataEoctest["EOC_COURIER_CHECK"] = $fdata;
//	EOC_SIZE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "EOC_SIZE";
	$fdata["GoodName"] = "EOC_SIZE";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","EOC_SIZE");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "EOC_SIZE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EOC_SIZE";

	
	
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
	$edata["LookupValues"][] = "SS";
	$edata["LookupValues"][] = "S";
	$edata["LookupValues"][] = "M";
	$edata["LookupValues"][] = "L";
	$edata["LookupValues"][] = "LL";
	$edata["LookupValues"][] = "その他";
	$edata["LookupValues"][] = "伝票";
	$edata["LookupValues"][] = "クッション封筒";
	$edata["LookupValues"][] = "返品";

	
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




	$tdataEoctest["EOC_SIZE"] = $fdata;
//	EOC_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "EOC_NUMBER";
	$fdata["GoodName"] = "EOC_NUMBER";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","EOC_NUMBER");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "EOC_NUMBER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EOC_NUMBER";

	
	
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
	$edata["LookupValues"][] = "×１";
	$edata["LookupValues"][] = "×２";
	$edata["LookupValues"][] = "×３";
	$edata["LookupValues"][] = "×４";
	$edata["LookupValues"][] = "×５";
	$edata["LookupValues"][] = "×その他";

	
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




	$tdataEoctest["EOC_NUMBER"] = $fdata;
//	EOC_REUSE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "EOC_REUSE";
	$fdata["GoodName"] = "EOC_REUSE";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","EOC_REUSE");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "EOC_REUSE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EOC_REUSE";

	
	
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
	$edata["LookupValues"][] = "再利用";

	
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




	$tdataEoctest["EOC_REUSE"] = $fdata;
//	EOC__DELIVERY_DATES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "EOC__DELIVERY_DATES";
	$fdata["GoodName"] = "EOC__DELIVERY_DATES";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","EOC__DELIVERY_DATES");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "EOC__DELIVERY_DATES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EOC__DELIVERY_DATES";

	
	
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
	$edata["LookupValues"][] = "01";
	$edata["LookupValues"][] = "11";
	$edata["LookupValues"][] = "13";
	$edata["LookupValues"][] = "15";
	$edata["LookupValues"][] = "17";
	$edata["LookupValues"][] = "19";

	
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




	$tdataEoctest["EOC__DELIVERY_DATES"] = $fdata;
//	EOC_SPECIFIED_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "EOC_SPECIFIED_TIME";
	$fdata["GoodName"] = "EOC_SPECIFIED_TIME";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","EOC_SPECIFIED_TIME");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "EOC_SPECIFIED_TIME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EOC_SPECIFIED_TIME";

	
	
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
	$edata["LookupValues"][] = "00";
	$edata["LookupValues"][] = "01";
	$edata["LookupValues"][] = "12";
	$edata["LookupValues"][] = "14";
	$edata["LookupValues"][] = "16";
	$edata["LookupValues"][] = "18";
	$edata["LookupValues"][] = "20";
	$edata["LookupValues"][] = "04";

	
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




	$tdataEoctest["EOC_SPECIFIED_TIME"] = $fdata;
//	FIRST_NAME2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "FIRST_NAME2";
	$fdata["GoodName"] = "FIRST_NAME2";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","FIRST_NAME2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FIRST_NAME2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FIRST_NAME2";

	
	
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




	$tdataEoctest["FIRST_NAME2"] = $fdata;
//	LAST_NAME2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "LAST_NAME2";
	$fdata["GoodName"] = "LAST_NAME2";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","LAST_NAME2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LAST_NAME2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAST_NAME2";

	
	
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




	$tdataEoctest["LAST_NAME2"] = $fdata;
//	EOC__DATE_AND_TIME_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "EOC__DATE_AND_TIME_2";
	$fdata["GoodName"] = "EOC__DATE_AND_TIME_2";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","EOC__DATE_AND_TIME_2");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "EOC__DATE_AND_TIME_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EOC__DATE_AND_TIME_2";

	
	
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

	
	
		$edata["DateEditType"] = 11;
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoctest["EOC__DATE_AND_TIME_2"] = $fdata;
//	EOC__BOX_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "EOC__BOX_NUMBER";
	$fdata["GoodName"] = "EOC__BOX_NUMBER";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","EOC__BOX_NUMBER");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "EOC__BOX_NUMBER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EOC__BOX_NUMBER";

	
	
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
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";
	$edata["LookupValues"][] = "それ以上";

	
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




	$tdataEoctest["EOC__BOX_NUMBER"] = $fdata;
//	FIRST_NAME_KANA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "FIRST_NAME_KANA";
	$fdata["GoodName"] = "FIRST_NAME_KANA";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","FIRST_NAME_KANA");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "FIRST_NAME_KANA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FIRST_NAME_KANA";

	
	
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




	$tdataEoctest["FIRST_NAME_KANA"] = $fdata;
//	LAST_NAME_KANA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "LAST_NAME_KANA";
	$fdata["GoodName"] = "LAST_NAME_KANA";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","LAST_NAME_KANA");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "LAST_NAME_KANA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LAST_NAME_KANA";

	
	
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




	$tdataEoctest["LAST_NAME_KANA"] = $fdata;
//	FLAG_SPEED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "FLAG_SPEED";
	$fdata["GoodName"] = "FLAG_SPEED";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","FLAG_SPEED");
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

		$fdata["strField"] = "FLAG_SPEED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLAG_SPEED";

	
	
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




	$tdataEoctest["FLAG_SPEED"] = $fdata;
//	SEARCH_MEDIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "SEARCH_MEDIA";
	$fdata["GoodName"] = "SEARCH_MEDIA";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","SEARCH_MEDIA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SEARCH_MEDIA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEARCH_MEDIA";

	
	
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




	$tdataEoctest["SEARCH_MEDIA"] = $fdata;
//	SEARCH_SITE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "SEARCH_SITE";
	$fdata["GoodName"] = "SEARCH_SITE";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","SEARCH_SITE");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "SEARCH_SITE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SEARCH_SITE";

	
	
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




	$tdataEoctest["SEARCH_SITE"] = $fdata;
//	UN_REACHABLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "UN_REACHABLE";
	$fdata["GoodName"] = "UN_REACHABLE";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","UN_REACHABLE");
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

		$fdata["strField"] = "UN_REACHABLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UN_REACHABLE";

	
	
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




	$tdataEoctest["UN_REACHABLE"] = $fdata;
//	FLG_MAIL_SAGAWA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "FLG_MAIL_SAGAWA";
	$fdata["GoodName"] = "FLG_MAIL_SAGAWA";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","FLG_MAIL_SAGAWA");
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

		$fdata["strField"] = "FLG_MAIL_SAGAWA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLG_MAIL_SAGAWA";

	
	
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




	$tdataEoctest["FLG_MAIL_SAGAWA"] = $fdata;
//	FLG_MAIL_OTHER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "FLG_MAIL_OTHER";
	$fdata["GoodName"] = "FLG_MAIL_OTHER";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","FLG_MAIL_OTHER");
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

		$fdata["strField"] = "FLG_MAIL_OTHER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FLG_MAIL_OTHER";

	
	
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




	$tdataEoctest["FLG_MAIL_OTHER"] = $fdata;
//	ALLSEIYAKU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "ALLSEIYAKU";
	$fdata["GoodName"] = "ALLSEIYAKU";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","ALLSEIYAKU");
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

		$fdata["strField"] = "ALLSEIYAKU";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ALLSEIYAKU";

	
	
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




	$tdataEoctest["ALLSEIYAKU"] = $fdata;
//	ICHIBUSEIYAKU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "ICHIBUSEIYAKU";
	$fdata["GoodName"] = "ICHIBUSEIYAKU";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","ICHIBUSEIYAKU");
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

		$fdata["strField"] = "ICHIBUSEIYAKU";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ICHIBUSEIYAKU";

	
	
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




	$tdataEoctest["ICHIBUSEIYAKU"] = $fdata;
//	seiyakukin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "seiyakukin";
	$fdata["GoodName"] = "seiyakukin";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","seiyakukin");
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

		$fdata["strField"] = "seiyakukin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seiyakukin";

	
	
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




	$tdataEoctest["seiyakukin"] = $fdata;
//	kaitorihuka
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "kaitorihuka";
	$fdata["GoodName"] = "kaitorihuka";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","kaitorihuka");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kaitorihuka";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kaitorihuka";

	
	
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




	$tdataEoctest["kaitorihuka"] = $fdata;
//	awazu_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "awazu_date";
	$fdata["GoodName"] = "awazu_date";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","awazu_date");
	$fdata["FieldType"] = 135;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "awazu_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "awazu_date";

	
	
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




	$tdataEoctest["awazu_date"] = $fdata;
//	seiyaku_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "seiyaku_price";
	$fdata["GoodName"] = "seiyaku_price";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","seiyaku_price");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "seiyaku_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seiyaku_price";

	
	
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




	$tdataEoctest["seiyaku_price"] = $fdata;
//	eoc_search_keyword
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "eoc_search_keyword";
	$fdata["GoodName"] = "eoc_search_keyword";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","eoc_search_keyword");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eoc_search_keyword";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eoc_search_keyword";

	
	
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




	$tdataEoctest["eoc_search_keyword"] = $fdata;
//	sonota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "sonota";
	$fdata["GoodName"] = "sonota";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","sonota");
	$fdata["FieldType"] = 16;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sonota";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sonota";

	
	
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




	$tdataEoctest["sonota"] = $fdata;
//	size_kosuu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "size_kosuu";
	$fdata["GoodName"] = "size_kosuu";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","size_kosuu");
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

		$fdata["strField"] = "size_kosuu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "size_kosuu";

	
	
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




	$tdataEoctest["size_kosuu"] = $fdata;
//	sagawa_shuuka_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "sagawa_shuuka_flag";
	$fdata["GoodName"] = "sagawa_shuuka_flag";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","sagawa_shuuka_flag");
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

		$fdata["strField"] = "sagawa_shuuka_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sagawa_shuuka_flag";

	
	
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




	$tdataEoctest["sagawa_shuuka_flag"] = $fdata;
//	line_check
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "line_check";
	$fdata["GoodName"] = "line_check";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","line_check");
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

		$fdata["strField"] = "line_check";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "line_check";

	
	
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




	$tdataEoctest["line_check"] = $fdata;
//	sagawa_shuukairai_denwabangou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "sagawa_shuukairai_denwabangou";
	$fdata["GoodName"] = "sagawa_shuukairai_denwabangou";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","sagawa_shuukairai_denwabangou");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "sagawa_shuukairai_denwabangou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sagawa_shuukairai_denwabangou";

	
	
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




	$tdataEoctest["sagawa_shuukairai_denwabangou"] = $fdata;
//	kaitori_sougak
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "kaitori_sougak";
	$fdata["GoodName"] = "kaitori_sougak";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","kaitori_sougak");
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

		$fdata["strField"] = "kaitori_sougak";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kaitori_sougak";

	
	
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




	$tdataEoctest["kaitori_sougak"] = $fdata;
//	flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "flag";
	$fdata["GoodName"] = "flag";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","flag");
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

		$fdata["strField"] = "flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag";

	
	
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




	$tdataEoctest["flag"] = $fdata;
//	key_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "key_code";
	$fdata["GoodName"] = "key_code";
	$fdata["ownerTable"] = "Eoctest";
	$fdata["Label"] = GetFieldLabel("Eoctest","key_code");
	$fdata["FieldType"] = 200;

	
	
	
			
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

		$fdata["strField"] = "key_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "key_code";

	
	
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




	$tdataEoctest["key_code"] = $fdata;


$tables_data["Eoctest"]=&$tdataEoctest;
$field_labels["Eoctest"] = &$fieldLabelsEoctest;
$fieldToolTips["Eoctest"] = &$fieldToolTipsEoctest;
$placeHolders["Eoctest"] = &$placeHoldersEoctest;
$page_titles["Eoctest"] = &$pageTitlesEoctest;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoctest"] = array();
//	Eoc_takuhai
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_takuhai";
		$detailsParam["dOriginalTable"] = "Eoc_takuhai";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_takuhai";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_takuhai");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = true;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoctest"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoctest"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoctest"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoctest"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoctest"][$dIndex]["detailKeys"][]="ecc_id";
//	Eoc_chigins_test
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_chigins_test";
		$detailsParam["dOriginalTable"] = "Eoc_chigins_test";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_chigins_test";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_chigins_test");
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
		
	$detailsTablesData["Eoctest"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoctest"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoctest"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoctest"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoctest"][$dIndex]["detailKeys"][]="chigin_ecc_id";

// tables which are master tables for current table (detail)
$masterTablesData["Eoctest"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoctest()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ecc_id,  ecc_seq,  name1,  created_t,  registerd_id,  kaitori_staff_id,  name2,  wareki,  b1,  b2,  b3,  birth_day,  age,  zip,  zip1,  zip2,  address1,  address2,  address3,  tel,  tel2,  mail1,  mail2,  address_code,  bank_name,  bank_blunch_code,  bank_yokin_shubetu,  bank_account,  bank_acoount_name,  haisou_bangou,  sise_houhou,  hentou_houhou,  hentou_houhou_time,  mousikomi_id,  hituyou_shorui,  seiyaku_fuseiritu,  mitumori_taku,  seacanse,  remark,  `type`,  sales_flag,  src_type,  liquidation_shop_code,  insurance_amount_print,  jis_code,  updated_at,  `_registerd_id`,  mail_check_type,  purchase_type,  sex,  m_tel,  fax,  chigin_kaitori,  option1,  option2,  option3,  option4,  option5,  option6,  option7,  option8,  option9,  option10,  option11,  option12,  option13,  rakuda_csv_flag,  EOC_COURIER_CHECK,  EOC_SIZE,  EOC_NUMBER,  EOC_REUSE,  EOC__DELIVERY_DATES,  EOC_SPECIFIED_TIME,  FIRST_NAME2,  LAST_NAME2,  EOC__DATE_AND_TIME_2,  EOC__BOX_NUMBER,  FIRST_NAME_KANA,  LAST_NAME_KANA,  FLAG_SPEED,  SEARCH_MEDIA,  SEARCH_SITE,  UN_REACHABLE,  FLG_MAIL_SAGAWA,  FLG_MAIL_OTHER,  ALLSEIYAKU,  ICHIBUSEIYAKU,  seiyakukin,  kaitorihuka,  awazu_date,  seiyaku_price,  eoc_search_keyword,  sonota,  size_kosuu,  sagawa_shuuka_flag,  line_check,  sagawa_shuukairai_denwabangou,  kaitori_sougak,  flag,  key_code";
$proto0["m_strFrom"] = "FROM Eoctest";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY ecc_id DESC";
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
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto6["m_sql"] = "ecc_id";
$proto6["m_srcTableName"] = "Eoctest";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto8["m_sql"] = "ecc_seq";
$proto8["m_srcTableName"] = "Eoctest";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name1",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto10["m_sql"] = "name1";
$proto10["m_srcTableName"] = "Eoctest";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_t",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto12["m_sql"] = "created_t";
$proto12["m_srcTableName"] = "Eoctest";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "registerd_id",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto14["m_sql"] = "registerd_id";
$proto14["m_srcTableName"] = "Eoctest";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_staff_id",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto16["m_sql"] = "kaitori_staff_id";
$proto16["m_srcTableName"] = "Eoctest";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto18["m_sql"] = "name2";
$proto18["m_srcTableName"] = "Eoctest";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "wareki",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto20["m_sql"] = "wareki";
$proto20["m_srcTableName"] = "Eoctest";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "b1",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto22["m_sql"] = "b1";
$proto22["m_srcTableName"] = "Eoctest";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "b2",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto24["m_sql"] = "b2";
$proto24["m_srcTableName"] = "Eoctest";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "b3",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto26["m_sql"] = "b3";
$proto26["m_srcTableName"] = "Eoctest";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "birth_day",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto28["m_sql"] = "birth_day";
$proto28["m_srcTableName"] = "Eoctest";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "age",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto30["m_sql"] = "age";
$proto30["m_srcTableName"] = "Eoctest";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "zip",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto32["m_sql"] = "zip";
$proto32["m_srcTableName"] = "Eoctest";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "zip1",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto34["m_sql"] = "zip1";
$proto34["m_srcTableName"] = "Eoctest";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "zip2",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto36["m_sql"] = "zip2";
$proto36["m_srcTableName"] = "Eoctest";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "address1",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto38["m_sql"] = "address1";
$proto38["m_srcTableName"] = "Eoctest";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "address2",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto40["m_sql"] = "address2";
$proto40["m_srcTableName"] = "Eoctest";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "address3",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto42["m_sql"] = "address3";
$proto42["m_srcTableName"] = "Eoctest";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto44["m_sql"] = "tel";
$proto44["m_srcTableName"] = "Eoctest";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "tel2",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto46["m_sql"] = "tel2";
$proto46["m_srcTableName"] = "Eoctest";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "mail1",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto48["m_sql"] = "mail1";
$proto48["m_srcTableName"] = "Eoctest";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "mail2",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto50["m_sql"] = "mail2";
$proto50["m_srcTableName"] = "Eoctest";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "address_code",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto52["m_sql"] = "address_code";
$proto52["m_srcTableName"] = "Eoctest";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_name",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto54["m_sql"] = "bank_name";
$proto54["m_srcTableName"] = "Eoctest";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_blunch_code",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto56["m_sql"] = "bank_blunch_code";
$proto56["m_srcTableName"] = "Eoctest";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_yokin_shubetu",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto58["m_sql"] = "bank_yokin_shubetu";
$proto58["m_srcTableName"] = "Eoctest";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_account",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto60["m_sql"] = "bank_account";
$proto60["m_srcTableName"] = "Eoctest";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_acoount_name",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto62["m_sql"] = "bank_acoount_name";
$proto62["m_srcTableName"] = "Eoctest";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "haisou_bangou",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto64["m_sql"] = "haisou_bangou";
$proto64["m_srcTableName"] = "Eoctest";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "sise_houhou",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto66["m_sql"] = "sise_houhou";
$proto66["m_srcTableName"] = "Eoctest";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "hentou_houhou",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto68["m_sql"] = "hentou_houhou";
$proto68["m_srcTableName"] = "Eoctest";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "hentou_houhou_time",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto70["m_sql"] = "hentou_houhou_time";
$proto70["m_srcTableName"] = "Eoctest";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "mousikomi_id",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto72["m_sql"] = "mousikomi_id";
$proto72["m_srcTableName"] = "Eoctest";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "hituyou_shorui",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto74["m_sql"] = "hituyou_shorui";
$proto74["m_srcTableName"] = "Eoctest";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "seiyaku_fuseiritu",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto76["m_sql"] = "seiyaku_fuseiritu";
$proto76["m_srcTableName"] = "Eoctest";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "mitumori_taku",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto78["m_sql"] = "mitumori_taku";
$proto78["m_srcTableName"] = "Eoctest";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "seacanse",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto80["m_sql"] = "seacanse";
$proto80["m_srcTableName"] = "Eoctest";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto82["m_sql"] = "remark";
$proto82["m_srcTableName"] = "Eoctest";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto84["m_sql"] = "`type`";
$proto84["m_srcTableName"] = "Eoctest";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_flag",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto86["m_sql"] = "sales_flag";
$proto86["m_srcTableName"] = "Eoctest";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "src_type",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto88["m_sql"] = "src_type";
$proto88["m_srcTableName"] = "Eoctest";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "liquidation_shop_code",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto90["m_sql"] = "liquidation_shop_code";
$proto90["m_srcTableName"] = "Eoctest";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "insurance_amount_print",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto92["m_sql"] = "insurance_amount_print";
$proto92["m_srcTableName"] = "Eoctest";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "jis_code",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto94["m_sql"] = "jis_code";
$proto94["m_srcTableName"] = "Eoctest";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto96["m_sql"] = "updated_at";
$proto96["m_srcTableName"] = "Eoctest";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "_registerd_id",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto98["m_sql"] = "`_registerd_id`";
$proto98["m_srcTableName"] = "Eoctest";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "mail_check_type",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto100["m_sql"] = "mail_check_type";
$proto100["m_srcTableName"] = "Eoctest";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "purchase_type",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto102["m_sql"] = "purchase_type";
$proto102["m_srcTableName"] = "Eoctest";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "sex",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto104["m_sql"] = "sex";
$proto104["m_srcTableName"] = "Eoctest";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "m_tel",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto106["m_sql"] = "m_tel";
$proto106["m_srcTableName"] = "Eoctest";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "fax",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto108["m_sql"] = "fax";
$proto108["m_srcTableName"] = "Eoctest";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "chigin_kaitori",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto110["m_sql"] = "chigin_kaitori";
$proto110["m_srcTableName"] = "Eoctest";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "option1",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto112["m_sql"] = "option1";
$proto112["m_srcTableName"] = "Eoctest";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "option2",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto114["m_sql"] = "option2";
$proto114["m_srcTableName"] = "Eoctest";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "option3",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto116["m_sql"] = "option3";
$proto116["m_srcTableName"] = "Eoctest";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "option4",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto118["m_sql"] = "option4";
$proto118["m_srcTableName"] = "Eoctest";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "option5",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto120["m_sql"] = "option5";
$proto120["m_srcTableName"] = "Eoctest";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "option6",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto122["m_sql"] = "option6";
$proto122["m_srcTableName"] = "Eoctest";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "option7",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto124["m_sql"] = "option7";
$proto124["m_srcTableName"] = "Eoctest";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "option8",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto126["m_sql"] = "option8";
$proto126["m_srcTableName"] = "Eoctest";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "option9",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto128["m_sql"] = "option9";
$proto128["m_srcTableName"] = "Eoctest";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "option10",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto130["m_sql"] = "option10";
$proto130["m_srcTableName"] = "Eoctest";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "option11",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto132["m_sql"] = "option11";
$proto132["m_srcTableName"] = "Eoctest";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "option12",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto134["m_sql"] = "option12";
$proto134["m_srcTableName"] = "Eoctest";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "option13",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto136["m_sql"] = "option13";
$proto136["m_srcTableName"] = "Eoctest";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "rakuda_csv_flag",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto138["m_sql"] = "rakuda_csv_flag";
$proto138["m_srcTableName"] = "Eoctest";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "EOC_COURIER_CHECK",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto140["m_sql"] = "EOC_COURIER_CHECK";
$proto140["m_srcTableName"] = "Eoctest";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "EOC_SIZE",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto142["m_sql"] = "EOC_SIZE";
$proto142["m_srcTableName"] = "Eoctest";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "EOC_NUMBER",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto144["m_sql"] = "EOC_NUMBER";
$proto144["m_srcTableName"] = "Eoctest";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "EOC_REUSE",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto146["m_sql"] = "EOC_REUSE";
$proto146["m_srcTableName"] = "Eoctest";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "EOC__DELIVERY_DATES",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto148["m_sql"] = "EOC__DELIVERY_DATES";
$proto148["m_srcTableName"] = "Eoctest";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "EOC_SPECIFIED_TIME",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto150["m_sql"] = "EOC_SPECIFIED_TIME";
$proto150["m_srcTableName"] = "Eoctest";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "FIRST_NAME2",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto152["m_sql"] = "FIRST_NAME2";
$proto152["m_srcTableName"] = "Eoctest";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "LAST_NAME2",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto154["m_sql"] = "LAST_NAME2";
$proto154["m_srcTableName"] = "Eoctest";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "EOC__DATE_AND_TIME_2",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto156["m_sql"] = "EOC__DATE_AND_TIME_2";
$proto156["m_srcTableName"] = "Eoctest";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "EOC__BOX_NUMBER",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto158["m_sql"] = "EOC__BOX_NUMBER";
$proto158["m_srcTableName"] = "Eoctest";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "FIRST_NAME_KANA",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto160["m_sql"] = "FIRST_NAME_KANA";
$proto160["m_srcTableName"] = "Eoctest";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "LAST_NAME_KANA",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto162["m_sql"] = "LAST_NAME_KANA";
$proto162["m_srcTableName"] = "Eoctest";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "FLAG_SPEED",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto164["m_sql"] = "FLAG_SPEED";
$proto164["m_srcTableName"] = "Eoctest";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "SEARCH_MEDIA",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto166["m_sql"] = "SEARCH_MEDIA";
$proto166["m_srcTableName"] = "Eoctest";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "SEARCH_SITE",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto168["m_sql"] = "SEARCH_SITE";
$proto168["m_srcTableName"] = "Eoctest";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "UN_REACHABLE",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto170["m_sql"] = "UN_REACHABLE";
$proto170["m_srcTableName"] = "Eoctest";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "FLG_MAIL_SAGAWA",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto172["m_sql"] = "FLG_MAIL_SAGAWA";
$proto172["m_srcTableName"] = "Eoctest";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "FLG_MAIL_OTHER",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto174["m_sql"] = "FLG_MAIL_OTHER";
$proto174["m_srcTableName"] = "Eoctest";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "ALLSEIYAKU",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto176["m_sql"] = "ALLSEIYAKU";
$proto176["m_srcTableName"] = "Eoctest";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "ICHIBUSEIYAKU",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto178["m_sql"] = "ICHIBUSEIYAKU";
$proto178["m_srcTableName"] = "Eoctest";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "seiyakukin",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto180["m_sql"] = "seiyakukin";
$proto180["m_srcTableName"] = "Eoctest";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitorihuka",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto182["m_sql"] = "kaitorihuka";
$proto182["m_srcTableName"] = "Eoctest";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "awazu_date",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto184["m_sql"] = "awazu_date";
$proto184["m_srcTableName"] = "Eoctest";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "seiyaku_price",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto186["m_sql"] = "seiyaku_price";
$proto186["m_srcTableName"] = "Eoctest";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "eoc_search_keyword",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto188["m_sql"] = "eoc_search_keyword";
$proto188["m_srcTableName"] = "Eoctest";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "sonota",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto190["m_sql"] = "sonota";
$proto190["m_srcTableName"] = "Eoctest";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "size_kosuu",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto192["m_sql"] = "size_kosuu";
$proto192["m_srcTableName"] = "Eoctest";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "sagawa_shuuka_flag",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto194["m_sql"] = "sagawa_shuuka_flag";
$proto194["m_srcTableName"] = "Eoctest";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "line_check",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto196["m_sql"] = "line_check";
$proto196["m_srcTableName"] = "Eoctest";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "sagawa_shuukairai_denwabangou",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto198["m_sql"] = "sagawa_shuukairai_denwabangou";
$proto198["m_srcTableName"] = "Eoctest";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_sougak",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto200["m_sql"] = "kaitori_sougak";
$proto200["m_srcTableName"] = "Eoctest";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$obj = new SQLField(array(
	"m_strName" => "flag",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto202["m_sql"] = "flag";
$proto202["m_srcTableName"] = "Eoctest";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto204=array();
			$obj = new SQLField(array(
	"m_strName" => "key_code",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto204["m_sql"] = "key_code";
$proto204["m_srcTableName"] = "Eoctest";
$proto204["m_expr"]=$obj;
$proto204["m_alias"] = "";
$obj = new SQLFieldListItem($proto204);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto206=array();
$proto206["m_link"] = "SQLL_MAIN";
			$proto207=array();
$proto207["m_strName"] = "Eoctest";
$proto207["m_srcTableName"] = "Eoctest";
$proto207["m_columns"] = array();
$proto207["m_columns"][] = "ecc_id";
$proto207["m_columns"][] = "ecc_seq";
$proto207["m_columns"][] = "name1";
$proto207["m_columns"][] = "created_t";
$proto207["m_columns"][] = "registerd_id";
$proto207["m_columns"][] = "kaitori_staff_id";
$proto207["m_columns"][] = "name2";
$proto207["m_columns"][] = "wareki";
$proto207["m_columns"][] = "b1";
$proto207["m_columns"][] = "b2";
$proto207["m_columns"][] = "b3";
$proto207["m_columns"][] = "birth_day";
$proto207["m_columns"][] = "age";
$proto207["m_columns"][] = "zip";
$proto207["m_columns"][] = "zip1";
$proto207["m_columns"][] = "zip2";
$proto207["m_columns"][] = "address1";
$proto207["m_columns"][] = "address2";
$proto207["m_columns"][] = "address3";
$proto207["m_columns"][] = "tel";
$proto207["m_columns"][] = "tel2";
$proto207["m_columns"][] = "mail1";
$proto207["m_columns"][] = "mail2";
$proto207["m_columns"][] = "address_code";
$proto207["m_columns"][] = "bank_name";
$proto207["m_columns"][] = "bank_blunch_code";
$proto207["m_columns"][] = "bank_yokin_shubetu";
$proto207["m_columns"][] = "bank_account";
$proto207["m_columns"][] = "bank_acoount_name";
$proto207["m_columns"][] = "haisou_bangou";
$proto207["m_columns"][] = "sise_houhou";
$proto207["m_columns"][] = "hentou_houhou";
$proto207["m_columns"][] = "hentou_houhou_time";
$proto207["m_columns"][] = "mousikomi_id";
$proto207["m_columns"][] = "hituyou_shorui";
$proto207["m_columns"][] = "seiyaku_fuseiritu";
$proto207["m_columns"][] = "mitumori_taku";
$proto207["m_columns"][] = "seacanse";
$proto207["m_columns"][] = "remark";
$proto207["m_columns"][] = "type";
$proto207["m_columns"][] = "sales_flag";
$proto207["m_columns"][] = "src_type";
$proto207["m_columns"][] = "liquidation_shop_code";
$proto207["m_columns"][] = "insurance_amount_print";
$proto207["m_columns"][] = "jis_code";
$proto207["m_columns"][] = "updated_at";
$proto207["m_columns"][] = "_registerd_id";
$proto207["m_columns"][] = "mail_check_type";
$proto207["m_columns"][] = "purchase_type";
$proto207["m_columns"][] = "sex";
$proto207["m_columns"][] = "m_tel";
$proto207["m_columns"][] = "fax";
$proto207["m_columns"][] = "chigin_kaitori";
$proto207["m_columns"][] = "option1";
$proto207["m_columns"][] = "option2";
$proto207["m_columns"][] = "option3";
$proto207["m_columns"][] = "option4";
$proto207["m_columns"][] = "option5";
$proto207["m_columns"][] = "option6";
$proto207["m_columns"][] = "option7";
$proto207["m_columns"][] = "option8";
$proto207["m_columns"][] = "option9";
$proto207["m_columns"][] = "option10";
$proto207["m_columns"][] = "option11";
$proto207["m_columns"][] = "option12";
$proto207["m_columns"][] = "option13";
$proto207["m_columns"][] = "rakuda_csv_flag";
$proto207["m_columns"][] = "EOC_COURIER_CHECK";
$proto207["m_columns"][] = "EOC_SIZE";
$proto207["m_columns"][] = "EOC_NUMBER";
$proto207["m_columns"][] = "EOC_REUSE";
$proto207["m_columns"][] = "EOC__DELIVERY_DATES";
$proto207["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto207["m_columns"][] = "FIRST_NAME2";
$proto207["m_columns"][] = "LAST_NAME2";
$proto207["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto207["m_columns"][] = "EOC__BOX_NUMBER";
$proto207["m_columns"][] = "FIRST_NAME_KANA";
$proto207["m_columns"][] = "LAST_NAME_KANA";
$proto207["m_columns"][] = "FLAG_SPEED";
$proto207["m_columns"][] = "SEARCH_MEDIA";
$proto207["m_columns"][] = "SEARCH_SITE";
$proto207["m_columns"][] = "UN_REACHABLE";
$proto207["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto207["m_columns"][] = "FLG_MAIL_OTHER";
$proto207["m_columns"][] = "ALLSEIYAKU";
$proto207["m_columns"][] = "ICHIBUSEIYAKU";
$proto207["m_columns"][] = "seiyakukin";
$proto207["m_columns"][] = "kaitorihuka";
$proto207["m_columns"][] = "awazu_date";
$proto207["m_columns"][] = "seiyaku_price";
$proto207["m_columns"][] = "eoc_search_keyword";
$proto207["m_columns"][] = "sonota";
$proto207["m_columns"][] = "size_kosuu";
$proto207["m_columns"][] = "sagawa_shuuka_flag";
$proto207["m_columns"][] = "line_check";
$proto207["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto207["m_columns"][] = "kaitori_sougak";
$proto207["m_columns"][] = "flag";
$proto207["m_columns"][] = "key_code";
$obj = new SQLTable($proto207);

$proto206["m_table"] = $obj;
$proto206["m_sql"] = "Eoctest";
$proto206["m_alias"] = "";
$proto206["m_srcTableName"] = "Eoctest";
$proto208=array();
$proto208["m_sql"] = "";
$proto208["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto208["m_column"]=$obj;
$proto208["m_contained"] = array();
$proto208["m_strCase"] = "";
$proto208["m_havingmode"] = false;
$proto208["m_inBrackets"] = false;
$proto208["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto208);

$proto206["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto206);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto210=array();
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoctest",
	"m_srcTableName" => "Eoctest"
));

$proto210["m_column"]=$obj;
$proto210["m_bAsc"] = 0;
$proto210["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto210);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoctest";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoctest = createSqlQuery_Eoctest();


	
		;

																																																																																																				

$tdataEoctest[".sqlquery"] = $queryData_Eoctest;

include_once(getabspath("include/Eoctest_events.php"));
$tableEvents["Eoctest"] = new eventclass_Eoctest;
$tdataEoctest[".hasEvents"] = true;

?>