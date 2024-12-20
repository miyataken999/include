<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc = array();
	$tdataEoc[".truncateText"] = true;
	$tdataEoc[".NumberOfChars"] = 80;
	$tdataEoc[".ShortName"] = "Eoc";
	$tdataEoc[".OwnerID"] = "";
	$tdataEoc[".OriginalTable"] = "Eoc";

//	field labels
$fieldLabelsEoc = array();
$fieldToolTipsEoc = array();
$pageTitlesEoc = array();
$placeHoldersEoc = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc["Japanese"] = array();
	$fieldToolTipsEoc["Japanese"] = array();
	$placeHoldersEoc["Japanese"] = array();
	$pageTitlesEoc["Japanese"] = array();
	$fieldLabelsEoc["Japanese"]["ecc_id"] = "顧客ＳＥＱ";
	$fieldToolTipsEoc["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipsEoc["Japanese"]["ecc_seq"] = "";
	$placeHoldersEoc["Japanese"]["ecc_seq"] = "";
	$fieldLabelsEoc["Japanese"]["name1"] = "名前";
	$fieldToolTipsEoc["Japanese"]["name1"] = "";
	$placeHoldersEoc["Japanese"]["name1"] = "";
	$fieldLabelsEoc["Japanese"]["created_t"] = "顧客登録日";
	$fieldToolTipsEoc["Japanese"]["created_t"] = "";
	$placeHoldersEoc["Japanese"]["created_t"] = "";
	$fieldLabelsEoc["Japanese"]["registerd_id"] = "更新者";
	$fieldToolTipsEoc["Japanese"]["registerd_id"] = "";
	$placeHoldersEoc["Japanese"]["registerd_id"] = "";
	$fieldLabelsEoc["Japanese"]["kaitori_staff_id"] = "買取者";
	$fieldToolTipsEoc["Japanese"]["kaitori_staff_id"] = "";
	$placeHoldersEoc["Japanese"]["kaitori_staff_id"] = "";
	$fieldLabelsEoc["Japanese"]["name2"] = "フリガナ";
	$fieldToolTipsEoc["Japanese"]["name2"] = "";
	$placeHoldersEoc["Japanese"]["name2"] = "";
	$fieldLabelsEoc["Japanese"]["wareki"] = "Ｈ００００００の形で入力";
	$fieldToolTipsEoc["Japanese"]["wareki"] = "";
	$placeHoldersEoc["Japanese"]["wareki"] = "";
	$fieldLabelsEoc["Japanese"]["b1"] = "生年月日";
	$fieldToolTipsEoc["Japanese"]["b1"] = "";
	$placeHoldersEoc["Japanese"]["b1"] = "";
	$fieldLabelsEoc["Japanese"]["b2"] = "月";
	$fieldToolTipsEoc["Japanese"]["b2"] = "";
	$placeHoldersEoc["Japanese"]["b2"] = "";
	$fieldLabelsEoc["Japanese"]["b3"] = "日";
	$fieldToolTipsEoc["Japanese"]["b3"] = "";
	$placeHoldersEoc["Japanese"]["b3"] = "";
	$fieldLabelsEoc["Japanese"]["birth_day"] = "生年月日";
	$fieldToolTipsEoc["Japanese"]["birth_day"] = "";
	$placeHoldersEoc["Japanese"]["birth_day"] = "";
	$fieldLabelsEoc["Japanese"]["age"] = "年齢";
	$fieldToolTipsEoc["Japanese"]["age"] = "";
	$placeHoldersEoc["Japanese"]["age"] = "";
	$fieldLabelsEoc["Japanese"]["zip"] = "郵便番号(不明)";
	$fieldToolTipsEoc["Japanese"]["zip"] = "";
	$placeHoldersEoc["Japanese"]["zip"] = "";
	$fieldLabelsEoc["Japanese"]["zip1"] = "郵便番号";
	$fieldToolTipsEoc["Japanese"]["zip1"] = "";
	$placeHoldersEoc["Japanese"]["zip1"] = "";
	$fieldLabelsEoc["Japanese"]["zip2"] = "郵便番号２";
	$fieldToolTipsEoc["Japanese"]["zip2"] = "";
	$placeHoldersEoc["Japanese"]["zip2"] = "";
	$fieldLabelsEoc["Japanese"]["address1"] = "都道府県";
	$fieldToolTipsEoc["Japanese"]["address1"] = "";
	$placeHoldersEoc["Japanese"]["address1"] = "";
	$fieldLabelsEoc["Japanese"]["address2"] = "市町村区郡";
	$fieldToolTipsEoc["Japanese"]["address2"] = "";
	$placeHoldersEoc["Japanese"]["address2"] = "";
	$fieldLabelsEoc["Japanese"]["address3"] = "以下住所";
	$fieldToolTipsEoc["Japanese"]["address3"] = "";
	$placeHoldersEoc["Japanese"]["address3"] = "";
	$fieldLabelsEoc["Japanese"]["tel"] = "電話";
	$fieldToolTipsEoc["Japanese"]["tel"] = "";
	$placeHoldersEoc["Japanese"]["tel"] = "";
	$fieldLabelsEoc["Japanese"]["tel2"] = "携帯";
	$fieldToolTipsEoc["Japanese"]["tel2"] = "";
	$placeHoldersEoc["Japanese"]["tel2"] = "";
	$fieldLabelsEoc["Japanese"]["mail1"] = "メアド";
	$fieldToolTipsEoc["Japanese"]["mail1"] = "";
	$placeHoldersEoc["Japanese"]["mail1"] = "";
	$fieldLabelsEoc["Japanese"]["mail2"] = "メアド２";
	$fieldToolTipsEoc["Japanese"]["mail2"] = "";
	$placeHoldersEoc["Japanese"]["mail2"] = "";
	$fieldLabelsEoc["Japanese"]["address_code"] = "郵便番号（旧）";
	$fieldToolTipsEoc["Japanese"]["address_code"] = "";
	$placeHoldersEoc["Japanese"]["address_code"] = "";
	$fieldLabelsEoc["Japanese"]["bank_name"] = "金融機関情報";
	$fieldToolTipsEoc["Japanese"]["bank_name"] = "";
	$placeHoldersEoc["Japanese"]["bank_name"] = "";
	$fieldLabelsEoc["Japanese"]["bank_blunch_code"] = "支店名";
	$fieldToolTipsEoc["Japanese"]["bank_blunch_code"] = "";
	$placeHoldersEoc["Japanese"]["bank_blunch_code"] = "";
	$fieldLabelsEoc["Japanese"]["bank_yokin_shubetu"] = "口座種別";
	$fieldToolTipsEoc["Japanese"]["bank_yokin_shubetu"] = "";
	$placeHoldersEoc["Japanese"]["bank_yokin_shubetu"] = "";
	$fieldLabelsEoc["Japanese"]["bank_account"] = "口座番号";
	$fieldToolTipsEoc["Japanese"]["bank_account"] = "";
	$placeHoldersEoc["Japanese"]["bank_account"] = "";
	$fieldLabelsEoc["Japanese"]["bank_acoount_name"] = "預金種目名";
	$fieldToolTipsEoc["Japanese"]["bank_acoount_name"] = "";
	$placeHoldersEoc["Japanese"]["bank_acoount_name"] = "";
	$fieldLabelsEoc["Japanese"]["haisou_bangou"] = "配送番号";
	$fieldToolTipsEoc["Japanese"]["haisou_bangou"] = "";
	$placeHoldersEoc["Japanese"]["haisou_bangou"] = "";
	$fieldLabelsEoc["Japanese"]["sise_houhou"] = "サイズ方法";
	$fieldToolTipsEoc["Japanese"]["sise_houhou"] = "";
	$placeHoldersEoc["Japanese"]["sise_houhou"] = "";
	$fieldLabelsEoc["Japanese"]["hentou_houhou"] = "返答方法";
	$fieldToolTipsEoc["Japanese"]["hentou_houhou"] = "";
	$placeHoldersEoc["Japanese"]["hentou_houhou"] = "";
	$fieldLabelsEoc["Japanese"]["hentou_houhou_time"] = "返答時間";
	$fieldToolTipsEoc["Japanese"]["hentou_houhou_time"] = "";
	$placeHoldersEoc["Japanese"]["hentou_houhou_time"] = "";
	$fieldLabelsEoc["Japanese"]["mousikomi_id"] = "申込みＩＰ";
	$fieldToolTipsEoc["Japanese"]["mousikomi_id"] = "";
	$placeHoldersEoc["Japanese"]["mousikomi_id"] = "";
	$fieldLabelsEoc["Japanese"]["hituyou_shorui"] = "必要書類";
	$fieldToolTipsEoc["Japanese"]["hituyou_shorui"] = "";
	$placeHoldersEoc["Japanese"]["hituyou_shorui"] = "";
	$fieldLabelsEoc["Japanese"]["seiyaku_fuseiritu"] = "成約不成立";
	$fieldToolTipsEoc["Japanese"]["seiyaku_fuseiritu"] = "";
	$placeHoldersEoc["Japanese"]["seiyaku_fuseiritu"] = "";
	$fieldLabelsEoc["Japanese"]["mitumori_taku"] = "見積宅";
	$fieldToolTipsEoc["Japanese"]["mitumori_taku"] = "";
	$placeHoldersEoc["Japanese"]["mitumori_taku"] = "";
	$fieldLabelsEoc["Japanese"]["seacanse"] = "Seacanse";
	$fieldToolTipsEoc["Japanese"]["seacanse"] = "";
	$placeHoldersEoc["Japanese"]["seacanse"] = "";
	$fieldLabelsEoc["Japanese"]["remark"] = "備考";
	$fieldToolTipsEoc["Japanese"]["remark"] = "";
	$placeHoldersEoc["Japanese"]["remark"] = "";
	$fieldLabelsEoc["Japanese"]["type"] = "タイプ";
	$fieldToolTipsEoc["Japanese"]["type"] = "";
	$placeHoldersEoc["Japanese"]["type"] = "";
	$fieldLabelsEoc["Japanese"]["sales_flag"] = "販売フラグ";
	$fieldToolTipsEoc["Japanese"]["sales_flag"] = "";
	$placeHoldersEoc["Japanese"]["sales_flag"] = "";
	$fieldLabelsEoc["Japanese"]["src_type"] = "ＳＲＣ区分";
	$fieldToolTipsEoc["Japanese"]["src_type"] = "";
	$placeHoldersEoc["Japanese"]["src_type"] = "";
	$fieldLabelsEoc["Japanese"]["liquidation_shop_code"] = "Liquidation Shop Code";
	$fieldToolTipsEoc["Japanese"]["liquidation_shop_code"] = "";
	$placeHoldersEoc["Japanese"]["liquidation_shop_code"] = "";
	$fieldLabelsEoc["Japanese"]["insurance_amount_print"] = "保険料";
	$fieldToolTipsEoc["Japanese"]["insurance_amount_print"] = "";
	$placeHoldersEoc["Japanese"]["insurance_amount_print"] = "";
	$fieldLabelsEoc["Japanese"]["jis_code"] = "ＪＩＳコード";
	$fieldToolTipsEoc["Japanese"]["jis_code"] = "";
	$placeHoldersEoc["Japanese"]["jis_code"] = "";
	$fieldLabelsEoc["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc["Japanese"]["updated_at"] = "検索は含むで検索してください";
	$placeHoldersEoc["Japanese"]["updated_at"] = "当日検索は含むで検索してください";
	$fieldLabelsEoc["Japanese"]["_registerd_id"] = "顧客登録者";
	$fieldToolTipsEoc["Japanese"]["_registerd_id"] = "";
	$placeHoldersEoc["Japanese"]["_registerd_id"] = "";
	$fieldLabelsEoc["Japanese"]["mail_check_type"] = "メルマガ可否";
	$fieldToolTipsEoc["Japanese"]["mail_check_type"] = "";
	$placeHoldersEoc["Japanese"]["mail_check_type"] = "";
	$fieldLabelsEoc["Japanese"]["purchase_type"] = "買取種別";
	$fieldToolTipsEoc["Japanese"]["purchase_type"] = "";
	$placeHoldersEoc["Japanese"]["purchase_type"] = "";
	$fieldLabelsEoc["Japanese"]["sex"] = "性別予備";
	$fieldToolTipsEoc["Japanese"]["sex"] = "";
	$placeHoldersEoc["Japanese"]["sex"] = "";
	$fieldLabelsEoc["Japanese"]["m_tel"] = "携帯";
	$fieldToolTipsEoc["Japanese"]["m_tel"] = "";
	$placeHoldersEoc["Japanese"]["m_tel"] = "";
	$fieldLabelsEoc["Japanese"]["fax"] = "Fax";
	$fieldToolTipsEoc["Japanese"]["fax"] = "";
	$placeHoldersEoc["Japanese"]["fax"] = "";
	$fieldLabelsEoc["Japanese"]["chigin_kaitori"] = "地金買取";
	$fieldToolTipsEoc["Japanese"]["chigin_kaitori"] = "";
	$placeHoldersEoc["Japanese"]["chigin_kaitori"] = "";
	$fieldLabelsEoc["Japanese"]["option1"] = "ファイル１";
	$fieldToolTipsEoc["Japanese"]["option1"] = "";
	$placeHoldersEoc["Japanese"]["option1"] = "";
	$fieldLabelsEoc["Japanese"]["option2"] = "ファイル２";
	$fieldToolTipsEoc["Japanese"]["option2"] = "";
	$placeHoldersEoc["Japanese"]["option2"] = "";
	$fieldLabelsEoc["Japanese"]["option3"] = "ファイル３";
	$fieldToolTipsEoc["Japanese"]["option3"] = "";
	$placeHoldersEoc["Japanese"]["option3"] = "";
	$fieldLabelsEoc["Japanese"]["option4"] = "再利用（ＯＰ４）";
	$fieldToolTipsEoc["Japanese"]["option4"] = "";
	$placeHoldersEoc["Japanese"]["option4"] = "";
	$fieldLabelsEoc["Japanese"]["option5"] = "性別";
	$fieldToolTipsEoc["Japanese"]["option5"] = "";
	$placeHoldersEoc["Japanese"]["option5"] = "";
	$fieldLabelsEoc["Japanese"]["option6"] = "払出（ＯＰ６）";
	$fieldToolTipsEoc["Japanese"]["option6"] = "";
	$placeHoldersEoc["Japanese"]["option6"] = "";
	$fieldLabelsEoc["Japanese"]["option7"] = "計算書貼付 （ＯＰ７）";
	$fieldToolTipsEoc["Japanese"]["option7"] = "";
	$placeHoldersEoc["Japanese"]["option7"] = "";
	$fieldLabelsEoc["Japanese"]["option8"] = "区分";
	$fieldToolTipsEoc["Japanese"]["option8"] = "";
	$placeHoldersEoc["Japanese"]["option8"] = "";
	$fieldLabelsEoc["Japanese"]["option9"] = "拒否";
	$fieldToolTipsEoc["Japanese"]["option9"] = "";
	$placeHoldersEoc["Japanese"]["option9"] = "";
	$fieldLabelsEoc["Japanese"]["option10"] = "拒否２";
	$fieldToolTipsEoc["Japanese"]["option10"] = "";
	$placeHoldersEoc["Japanese"]["option10"] = "";
	$fieldLabelsEoc["Japanese"]["option11"] = "措置";
	$fieldToolTipsEoc["Japanese"]["option11"] = "";
	$placeHoldersEoc["Japanese"]["option11"] = "";
	$fieldLabelsEoc["Japanese"]["option12"] = "職業";
	$fieldToolTipsEoc["Japanese"]["option12"] = "";
	$placeHoldersEoc["Japanese"]["option12"] = "";
	$fieldLabelsEoc["Japanese"]["option13"] = "再利用（ＯＰ１３）";
	$fieldToolTipsEoc["Japanese"]["option13"] = "";
	$placeHoldersEoc["Japanese"]["option13"] = "";
	$fieldLabelsEoc["Japanese"]["rakuda_csv_flag"] = "配送印刷";
	$fieldToolTipsEoc["Japanese"]["rakuda_csv_flag"] = "";
	$placeHoldersEoc["Japanese"]["rakuda_csv_flag"] = "";
	$fieldLabelsEoc["Japanese"]["EOC_COURIER_CHECK"] = "宅配チェック";
	$fieldToolTipsEoc["Japanese"]["EOC_COURIER_CHECK"] = "";
	$placeHoldersEoc["Japanese"]["EOC_COURIER_CHECK"] = "";
	$fieldLabelsEoc["Japanese"]["EOC_SIZE"] = "サイズ";
	$fieldToolTipsEoc["Japanese"]["EOC_SIZE"] = "";
	$placeHoldersEoc["Japanese"]["EOC_SIZE"] = "";
	$fieldLabelsEoc["Japanese"]["EOC_NUMBER"] = "個数";
	$fieldToolTipsEoc["Japanese"]["EOC_NUMBER"] = "";
	$placeHoldersEoc["Japanese"]["EOC_NUMBER"] = "";
	$fieldLabelsEoc["Japanese"]["EOC_REUSE"] = "再利用";
	$fieldToolTipsEoc["Japanese"]["EOC_REUSE"] = "";
	$placeHoldersEoc["Japanese"]["EOC_REUSE"] = "";
	$fieldLabelsEoc["Japanese"]["EOC__DELIVERY_DATES"] = "集荷日時";
	$fieldToolTipsEoc["Japanese"]["EOC__DELIVERY_DATES"] = "";
	$placeHoldersEoc["Japanese"]["EOC__DELIVERY_DATES"] = "";
	$fieldLabelsEoc["Japanese"]["EOC_SPECIFIED_TIME"] = "時間帯指定";
	$fieldToolTipsEoc["Japanese"]["EOC_SPECIFIED_TIME"] = "";
	$placeHoldersEoc["Japanese"]["EOC_SPECIFIED_TIME"] = "";
	$fieldLabelsEoc["Japanese"]["FIRST_NAME2"] = "名";
	$fieldToolTipsEoc["Japanese"]["FIRST_NAME2"] = "";
	$placeHoldersEoc["Japanese"]["FIRST_NAME2"] = "";
	$fieldLabelsEoc["Japanese"]["LAST_NAME2"] = "姓";
	$fieldToolTipsEoc["Japanese"]["LAST_NAME2"] = "";
	$placeHoldersEoc["Japanese"]["LAST_NAME2"] = "";
	$fieldLabelsEoc["Japanese"]["EOC__DATE_AND_TIME_2"] = "日時";
	$fieldToolTipsEoc["Japanese"]["EOC__DATE_AND_TIME_2"] = "";
	$placeHoldersEoc["Japanese"]["EOC__DATE_AND_TIME_2"] = "";
	$fieldLabelsEoc["Japanese"]["EOC__BOX_NUMBER"] = "箱数";
	$fieldToolTipsEoc["Japanese"]["EOC__BOX_NUMBER"] = "";
	$placeHoldersEoc["Japanese"]["EOC__BOX_NUMBER"] = "";
	$fieldLabelsEoc["Japanese"]["FIRST_NAME_KANA"] = "メイ";
	$fieldToolTipsEoc["Japanese"]["FIRST_NAME_KANA"] = "";
	$placeHoldersEoc["Japanese"]["FIRST_NAME_KANA"] = "";
	$fieldLabelsEoc["Japanese"]["LAST_NAME_KANA"] = "セイ";
	$fieldToolTipsEoc["Japanese"]["LAST_NAME_KANA"] = "";
	$placeHoldersEoc["Japanese"]["LAST_NAME_KANA"] = "";
	$fieldLabelsEoc["Japanese"]["FLAG_SPEED"] = "スピード";
	$fieldToolTipsEoc["Japanese"]["FLAG_SPEED"] = "";
	$placeHoldersEoc["Japanese"]["FLAG_SPEED"] = "";
	$fieldLabelsEoc["Japanese"]["SEARCH_MEDIA"] = "検索媒体";
	$fieldToolTipsEoc["Japanese"]["SEARCH_MEDIA"] = "";
	$placeHoldersEoc["Japanese"]["SEARCH_MEDIA"] = "";
	$fieldLabelsEoc["Japanese"]["SEARCH_SITE"] = "検索サイト";
	$fieldToolTipsEoc["Japanese"]["SEARCH_SITE"] = "";
	$placeHoldersEoc["Japanese"]["SEARCH_SITE"] = "";
	$fieldLabelsEoc["Japanese"]["UN_REACHABLE"] = "到着";
	$fieldToolTipsEoc["Japanese"]["UN_REACHABLE"] = "";
	$placeHoldersEoc["Japanese"]["UN_REACHABLE"] = "";
	$fieldLabelsEoc["Japanese"]["FLG_MAIL_SAGAWA"] = "佐川";
	$fieldToolTipsEoc["Japanese"]["FLG_MAIL_SAGAWA"] = "";
	$placeHoldersEoc["Japanese"]["FLG_MAIL_SAGAWA"] = "";
	$fieldLabelsEoc["Japanese"]["FLG_MAIL_OTHER"] = "その他　";
	$fieldToolTipsEoc["Japanese"]["FLG_MAIL_OTHER"] = "";
	$placeHoldersEoc["Japanese"]["FLG_MAIL_OTHER"] = "";
	$fieldLabelsEoc["Japanese"]["ALLSEIYAKU"] = "全成約";
	$fieldToolTipsEoc["Japanese"]["ALLSEIYAKU"] = "";
	$placeHoldersEoc["Japanese"]["ALLSEIYAKU"] = "";
	$fieldLabelsEoc["Japanese"]["ICHIBUSEIYAKU"] = "一部成約";
	$fieldToolTipsEoc["Japanese"]["ICHIBUSEIYAKU"] = "";
	$placeHoldersEoc["Japanese"]["ICHIBUSEIYAKU"] = "";
	$fieldLabelsEoc["Japanese"]["seiyakukin"] = "成約金額";
	$fieldToolTipsEoc["Japanese"]["seiyakukin"] = "";
	$placeHoldersEoc["Japanese"]["seiyakukin"] = "";
	$fieldLabelsEoc["Japanese"]["kaitorihuka"] = "不可商品";
	$fieldToolTipsEoc["Japanese"]["kaitorihuka"] = "";
	$placeHoldersEoc["Japanese"]["kaitorihuka"] = "";
	$fieldLabelsEoc["Japanese"]["awazu_date"] = "一部成約日付指定";
	$fieldToolTipsEoc["Japanese"]["awazu_date"] = "";
	$placeHoldersEoc["Japanese"]["awazu_date"] = "";
	$fieldLabelsEoc["Japanese"]["seiyaku_price"] = "成約金額";
	$fieldToolTipsEoc["Japanese"]["seiyaku_price"] = "";
	$placeHoldersEoc["Japanese"]["seiyaku_price"] = "";
	$fieldLabelsEoc["Japanese"]["eoc_search_keyword"] = "検索キーワード";
	$fieldToolTipsEoc["Japanese"]["eoc_search_keyword"] = "";
	$placeHoldersEoc["Japanese"]["eoc_search_keyword"] = "";
	$fieldLabelsEoc["Japanese"]["sonota"] = "その他";
	$fieldToolTipsEoc["Japanese"]["sonota"] = "";
	$placeHoldersEoc["Japanese"]["sonota"] = "";
	$fieldLabelsEoc["Japanese"]["size_kosuu"] = "キット種別";
	$fieldToolTipsEoc["Japanese"]["size_kosuu"] = "";
	$placeHoldersEoc["Japanese"]["size_kosuu"] = "";
	$fieldLabelsEoc["Japanese"]["sagawa_shuuka_flag"] = "佐川集荷依頼";
	$fieldToolTipsEoc["Japanese"]["sagawa_shuuka_flag"] = "";
	$placeHoldersEoc["Japanese"]["sagawa_shuuka_flag"] = "";
	$fieldLabelsEoc["Japanese"]["line_check"] = "ライン本確";
	$fieldToolTipsEoc["Japanese"]["line_check"] = "";
	$placeHoldersEoc["Japanese"]["line_check"] = "";
	$fieldLabelsEoc["Japanese"]["sagawa_shuukairai_denwabangou"] = "佐川集荷依頼電話番号";
	$fieldToolTipsEoc["Japanese"]["sagawa_shuukairai_denwabangou"] = "";
	$placeHoldersEoc["Japanese"]["sagawa_shuukairai_denwabangou"] = "";
	$fieldLabelsEoc["Japanese"]["kaitori_sougak"] = "買取総額";
	$fieldToolTipsEoc["Japanese"]["kaitori_sougak"] = "";
	$placeHoldersEoc["Japanese"]["kaitori_sougak"] = "";
	$fieldLabelsEoc["Japanese"]["flag"] = "その他";
	$fieldToolTipsEoc["Japanese"]["flag"] = "";
	$placeHoldersEoc["Japanese"]["flag"] = "";
	$fieldLabelsEoc["Japanese"]["key_code"] = "暗号化メールアドレス";
	$fieldToolTipsEoc["Japanese"]["key_code"] = "";
	$placeHoldersEoc["Japanese"]["key_code"] = "";
	$fieldLabelsEoc["Japanese"]["dm_check_type"] = "DM可否";
	$fieldToolTipsEoc["Japanese"]["dm_check_type"] = "";
	$placeHoldersEoc["Japanese"]["dm_check_type"] = "";
	$fieldLabelsEoc["Japanese"]["kit_flag"] = "宅配キット";
	$fieldToolTipsEoc["Japanese"]["kit_flag"] = "";
	$placeHoldersEoc["Japanese"]["kit_flag"] = "";
	$fieldLabelsEoc["Japanese"]["sougaku"] = "買取総額";
	$fieldToolTipsEoc["Japanese"]["sougaku"] = "";
	$placeHoldersEoc["Japanese"]["sougaku"] = "";
	$fieldLabelsEoc["Japanese"]["kit_done_flag"] = "宅配キット完了";
	$fieldToolTipsEoc["Japanese"]["kit_done_flag"] = "";
	$placeHoldersEoc["Japanese"]["kit_done_flag"] = "";
	$fieldLabelsEoc["Japanese"]["bank_details_blunch_name"] = "支店名";
	$fieldToolTipsEoc["Japanese"]["bank_details_blunch_name"] = "";
	$placeHoldersEoc["Japanese"]["bank_details_blunch_name"] = "";
	$fieldLabelsEoc["Japanese"]["bank_details_blunch_code"] = "支店コード";
	$fieldToolTipsEoc["Japanese"]["bank_details_blunch_code"] = "";
	$placeHoldersEoc["Japanese"]["bank_details_blunch_code"] = "";
	$fieldLabelsEoc["Japanese"]["bank_details_account_number"] = "口座番号";
	$fieldToolTipsEoc["Japanese"]["bank_details_account_number"] = "";
	$placeHoldersEoc["Japanese"]["bank_details_account_number"] = "";
	$fieldLabelsEoc["Japanese"]["bank_details_symbol"] = "記号";
	$fieldToolTipsEoc["Japanese"]["bank_details_symbol"] = "";
	$placeHoldersEoc["Japanese"]["bank_details_symbol"] = "";
	$fieldLabelsEoc["Japanese"]["bank_details_number"] = "番号";
	$fieldToolTipsEoc["Japanese"]["bank_details_number"] = "";
	$placeHoldersEoc["Japanese"]["bank_details_number"] = "";
	$fieldLabelsEoc["Japanese"]["bank_details_code"] = "金融機関名";
	$fieldToolTipsEoc["Japanese"]["bank_details_code"] = "";
	$placeHoldersEoc["Japanese"]["bank_details_code"] = "";
	$fieldLabelsEoc["Japanese"]["bank_details_account_name"] = "名義人";
	$fieldToolTipsEoc["Japanese"]["bank_details_account_name"] = "";
	$placeHoldersEoc["Japanese"]["bank_details_account_name"] = "";
	$fieldLabelsEoc["Japanese"]["bank_details_deposit_type"] = "預金種別";
	$fieldToolTipsEoc["Japanese"]["bank_details_deposit_type"] = "";
	$placeHoldersEoc["Japanese"]["bank_details_deposit_type"] = "";
	$fieldLabelsEoc["Japanese"]["mypage_id"] = "Mypageリンク";
	$fieldToolTipsEoc["Japanese"]["mypage_id"] = "";
	$placeHoldersEoc["Japanese"]["mypage_id"] = "";
	$fieldLabelsEoc["Japanese"]["event"] = "イベント";
	$fieldToolTipsEoc["Japanese"]["event"] = "";
	$placeHoldersEoc["Japanese"]["event"] = "";
	$fieldLabelsEoc["Japanese"]["btns"] = "編集ボタン";
	$fieldToolTipsEoc["Japanese"]["btns"] = "";
	$placeHoldersEoc["Japanese"]["btns"] = "";
	$fieldLabelsEoc["Japanese"]["insert_btns"] = "タイムライン追加";
	$fieldToolTipsEoc["Japanese"]["insert_btns"] = "";
	$placeHoldersEoc["Japanese"]["insert_btns"] = "";
	$fieldLabelsEoc["Japanese"]["outside_bank"] = "対応外銀行";
	$fieldToolTipsEoc["Japanese"]["outside_bank"] = "";
	$placeHoldersEoc["Japanese"]["outside_bank"] = "";
	$fieldLabelsEoc["Japanese"]["new_name"] = "旧姓/新姓/その他";
	$fieldToolTipsEoc["Japanese"]["new_name"] = "";
	$placeHoldersEoc["Japanese"]["new_name"] = "";
	$fieldLabelsEoc["Japanese"]["letterpack"] = "レターパック";
	$fieldToolTipsEoc["Japanese"]["letterpack"] = "";
	$placeHoldersEoc["Japanese"]["letterpack"] = "";
	$fieldLabelsEoc["Japanese"]["satei_saisoku_2_days"] = "査定催促【2日】";
	$fieldToolTipsEoc["Japanese"]["satei_saisoku_2_days"] = "";
	$placeHoldersEoc["Japanese"]["satei_saisoku_2_days"] = "";
	$fieldLabelsEoc["Japanese"]["satei_saisoku_7_days"] = "査定催促【7日】";
	$fieldToolTipsEoc["Japanese"]["satei_saisoku_7_days"] = "";
	$placeHoldersEoc["Japanese"]["satei_saisoku_7_days"] = "";
	$fieldLabelsEoc["Japanese"]["line_chat_url"] = "LineChatURL";
	$fieldToolTipsEoc["Japanese"]["line_chat_url"] = "";
	$placeHoldersEoc["Japanese"]["line_chat_url"] = "";
	$fieldLabelsEoc["Japanese"]["area"] = "地域";
	$fieldToolTipsEoc["Japanese"]["area"] = "";
	$placeHoldersEoc["Japanese"]["area"] = "";
	$fieldLabelsEoc["Japanese"]["is_business_customer"] = "B買取";
	$fieldToolTipsEoc["Japanese"]["is_business_customer"] = "";
	$placeHoldersEoc["Japanese"]["is_business_customer"] = "";
	$fieldLabelsEoc["Japanese"]["is_exist_haisouhosyo"] = "配送補償";
	$fieldToolTipsEoc["Japanese"]["is_exist_haisouhosyo"] = "";
	$placeHoldersEoc["Japanese"]["is_exist_haisouhosyo"] = "";
	$fieldLabelsEoc["Japanese"]["meigi_hankaku_kana"] = "半角フリガナ名";
	$fieldToolTipsEoc["Japanese"]["meigi_hankaku_kana"] = "";
	$placeHoldersEoc["Japanese"]["meigi_hankaku_kana"] = "";
	$fieldLabelsEoc["Japanese"]["is_yamato_csv"] = "ヤマトCSV";
	$fieldToolTipsEoc["Japanese"]["is_yamato_csv"] = "";
	$placeHoldersEoc["Japanese"]["is_yamato_csv"] = "";
	$fieldLabelsEoc["Japanese"]["is_seiren_csv"] = "精錬キットCsv";
	$fieldToolTipsEoc["Japanese"]["is_seiren_csv"] = "";
	$placeHoldersEoc["Japanese"]["is_seiren_csv"] = "";
	if (count($fieldToolTipsEoc["Japanese"]))
		$tdataEoc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc[""] = array();
	$fieldToolTipsEoc[""] = array();
	$placeHoldersEoc[""] = array();
	$pageTitlesEoc[""] = array();
	$fieldLabelsEoc[""]["sagawa_shuukairai_denwabangou"] = "Sagawa Shuukairai Denwabangou";
	$fieldToolTipsEoc[""]["sagawa_shuukairai_denwabangou"] = "";
	$placeHoldersEoc[""]["sagawa_shuukairai_denwabangou"] = "";
	$fieldLabelsEoc[""]["kaitori_sougak"] = "Kaitori Sougak";
	$fieldToolTipsEoc[""]["kaitori_sougak"] = "";
	$placeHoldersEoc[""]["kaitori_sougak"] = "";
	$fieldLabelsEoc[""]["flag"] = "Flag";
	$fieldToolTipsEoc[""]["flag"] = "";
	$placeHoldersEoc[""]["flag"] = "";
	$fieldLabelsEoc[""]["key_code"] = "Key Code";
	$fieldToolTipsEoc[""]["key_code"] = "";
	$placeHoldersEoc[""]["key_code"] = "";
	$fieldLabelsEoc[""]["dm_check_type"] = "Dm Check Type";
	$fieldToolTipsEoc[""]["dm_check_type"] = "";
	$placeHoldersEoc[""]["dm_check_type"] = "";
	$fieldLabelsEoc[""]["kit_flag"] = "Kit Flag";
	$fieldToolTipsEoc[""]["kit_flag"] = "";
	$placeHoldersEoc[""]["kit_flag"] = "";
	$fieldLabelsEoc[""]["sougaku"] = "Sougaku";
	$fieldToolTipsEoc[""]["sougaku"] = "";
	$placeHoldersEoc[""]["sougaku"] = "";
	$fieldLabelsEoc[""]["kit_done_flag"] = "Kit Done Flag";
	$fieldToolTipsEoc[""]["kit_done_flag"] = "";
	$placeHoldersEoc[""]["kit_done_flag"] = "";
	$fieldLabelsEoc[""]["bank_details_blunch_name"] = "Bank Details Blunch Name";
	$fieldToolTipsEoc[""]["bank_details_blunch_name"] = "";
	$placeHoldersEoc[""]["bank_details_blunch_name"] = "";
	$fieldLabelsEoc[""]["bank_details_blunch_code"] = "Bank Details Blunch Code";
	$fieldToolTipsEoc[""]["bank_details_blunch_code"] = "";
	$placeHoldersEoc[""]["bank_details_blunch_code"] = "";
	$fieldLabelsEoc[""]["bank_details_account_number"] = "Bank Details Account Number";
	$fieldToolTipsEoc[""]["bank_details_account_number"] = "";
	$placeHoldersEoc[""]["bank_details_account_number"] = "";
	$fieldLabelsEoc[""]["bank_details_symbol"] = "Bank Details Symbol";
	$fieldToolTipsEoc[""]["bank_details_symbol"] = "";
	$placeHoldersEoc[""]["bank_details_symbol"] = "";
	$fieldLabelsEoc[""]["bank_details_number"] = "Bank Details Number";
	$fieldToolTipsEoc[""]["bank_details_number"] = "";
	$placeHoldersEoc[""]["bank_details_number"] = "";
	$fieldLabelsEoc[""]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsEoc[""]["bank_details_code"] = "";
	$placeHoldersEoc[""]["bank_details_code"] = "";
	$fieldLabelsEoc[""]["bank_details_account_name"] = "Bank Details Account Name";
	$fieldToolTipsEoc[""]["bank_details_account_name"] = "";
	$placeHoldersEoc[""]["bank_details_account_name"] = "";
	$fieldLabelsEoc[""]["bank_details_deposit_type"] = "Bank Details Deposit Type";
	$fieldToolTipsEoc[""]["bank_details_deposit_type"] = "";
	$placeHoldersEoc[""]["bank_details_deposit_type"] = "";
	$fieldLabelsEoc[""]["mypage_id"] = "Mypage Id";
	$fieldToolTipsEoc[""]["mypage_id"] = "";
	$placeHoldersEoc[""]["mypage_id"] = "";
	$fieldLabelsEoc[""]["event"] = "Event";
	$fieldToolTipsEoc[""]["event"] = "";
	$placeHoldersEoc[""]["event"] = "";
	$fieldLabelsEoc[""]["btns"] = "Btns";
	$fieldToolTipsEoc[""]["btns"] = "";
	$placeHoldersEoc[""]["btns"] = "";
	$fieldLabelsEoc[""]["insert_btns"] = "Insert Btns";
	$fieldToolTipsEoc[""]["insert_btns"] = "";
	$placeHoldersEoc[""]["insert_btns"] = "";
	$fieldLabelsEoc[""]["outside_bank"] = "Outside Bank";
	$fieldToolTipsEoc[""]["outside_bank"] = "";
	$placeHoldersEoc[""]["outside_bank"] = "";
	$fieldLabelsEoc[""]["new_name"] = "New Name";
	$fieldToolTipsEoc[""]["new_name"] = "";
	$placeHoldersEoc[""]["new_name"] = "";
	$fieldLabelsEoc[""]["letterpack"] = "Letterpack";
	$fieldToolTipsEoc[""]["letterpack"] = "";
	$placeHoldersEoc[""]["letterpack"] = "";
	$fieldLabelsEoc[""]["satei_saisoku_2_days"] = "Satei Saisoku 2 Days";
	$fieldToolTipsEoc[""]["satei_saisoku_2_days"] = "";
	$placeHoldersEoc[""]["satei_saisoku_2_days"] = "";
	$fieldLabelsEoc[""]["satei_saisoku_7_days"] = "Satei Saisoku 7 Days";
	$fieldToolTipsEoc[""]["satei_saisoku_7_days"] = "";
	$placeHoldersEoc[""]["satei_saisoku_7_days"] = "";
	$fieldLabelsEoc[""]["line_chat_url"] = "Line Chat Url";
	$fieldToolTipsEoc[""]["line_chat_url"] = "";
	$placeHoldersEoc[""]["line_chat_url"] = "";
	$fieldLabelsEoc[""]["area"] = "Area";
	$fieldToolTipsEoc[""]["area"] = "";
	$placeHoldersEoc[""]["area"] = "";
	$fieldLabelsEoc[""]["is_business_customer"] = "Is Business Customer";
	$fieldToolTipsEoc[""]["is_business_customer"] = "";
	$placeHoldersEoc[""]["is_business_customer"] = "";
	$fieldLabelsEoc[""]["is_exist_haisouhosyo"] = "Is Exist Haisouhosyo";
	$fieldToolTipsEoc[""]["is_exist_haisouhosyo"] = "";
	$placeHoldersEoc[""]["is_exist_haisouhosyo"] = "";
	$fieldLabelsEoc[""]["meigi_hankaku_kana"] = "Meigi Hankaku Kana";
	$fieldToolTipsEoc[""]["meigi_hankaku_kana"] = "";
	$placeHoldersEoc[""]["meigi_hankaku_kana"] = "";
	$fieldLabelsEoc[""]["is_yamato_csv"] = "Is Yamato Csv";
	$fieldToolTipsEoc[""]["is_yamato_csv"] = "";
	$placeHoldersEoc[""]["is_yamato_csv"] = "";
	$fieldLabelsEoc[""]["is_seiren_csv"] = "Is Seiren Csv";
	$fieldToolTipsEoc[""]["is_seiren_csv"] = "";
	$placeHoldersEoc[""]["is_seiren_csv"] = "";
	if (count($fieldToolTipsEoc[""]))
		$tdataEoc[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc["English"] = array();
	$fieldToolTipsEoc["English"] = array();
	$placeHoldersEoc["English"] = array();
	$pageTitlesEoc["English"] = array();
	$fieldLabelsEoc["English"]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsEoc["English"]["bank_details_code"] = "";
	$placeHoldersEoc["English"]["bank_details_code"] = "";
	$fieldLabelsEoc["English"]["bank_details_account_name"] = "Bank Details Account Name";
	$fieldToolTipsEoc["English"]["bank_details_account_name"] = "";
	$placeHoldersEoc["English"]["bank_details_account_name"] = "";
	$fieldLabelsEoc["English"]["bank_details_deposit_type"] = "Bank Details Deposit Type";
	$fieldToolTipsEoc["English"]["bank_details_deposit_type"] = "";
	$placeHoldersEoc["English"]["bank_details_deposit_type"] = "";
	$fieldLabelsEoc["English"]["mypage_id"] = "Mypage Id";
	$fieldToolTipsEoc["English"]["mypage_id"] = "";
	$placeHoldersEoc["English"]["mypage_id"] = "";
	$fieldLabelsEoc["English"]["event"] = "Event";
	$fieldToolTipsEoc["English"]["event"] = "";
	$placeHoldersEoc["English"]["event"] = "";
	$fieldLabelsEoc["English"]["btns"] = "Btns";
	$fieldToolTipsEoc["English"]["btns"] = "";
	$placeHoldersEoc["English"]["btns"] = "";
	$fieldLabelsEoc["English"]["insert_btns"] = "Insert Btns";
	$fieldToolTipsEoc["English"]["insert_btns"] = "";
	$placeHoldersEoc["English"]["insert_btns"] = "";
	$fieldLabelsEoc["English"]["outside_bank"] = "Outside Bank";
	$fieldToolTipsEoc["English"]["outside_bank"] = "";
	$placeHoldersEoc["English"]["outside_bank"] = "";
	$fieldLabelsEoc["English"]["new_name"] = "New Name";
	$fieldToolTipsEoc["English"]["new_name"] = "";
	$placeHoldersEoc["English"]["new_name"] = "";
	$fieldLabelsEoc["English"]["letterpack"] = "Letterpack";
	$fieldToolTipsEoc["English"]["letterpack"] = "";
	$placeHoldersEoc["English"]["letterpack"] = "";
	$fieldLabelsEoc["English"]["satei_saisoku_2_days"] = "Satei Saisoku 2 Days";
	$fieldToolTipsEoc["English"]["satei_saisoku_2_days"] = "";
	$placeHoldersEoc["English"]["satei_saisoku_2_days"] = "";
	$fieldLabelsEoc["English"]["satei_saisoku_7_days"] = "Satei Saisoku 7 Days";
	$fieldToolTipsEoc["English"]["satei_saisoku_7_days"] = "";
	$placeHoldersEoc["English"]["satei_saisoku_7_days"] = "";
	$fieldLabelsEoc["English"]["line_chat_url"] = "Line Chat Url";
	$fieldToolTipsEoc["English"]["line_chat_url"] = "";
	$placeHoldersEoc["English"]["line_chat_url"] = "";
	$fieldLabelsEoc["English"]["area"] = "Area";
	$fieldToolTipsEoc["English"]["area"] = "";
	$placeHoldersEoc["English"]["area"] = "";
	$fieldLabelsEoc["English"]["is_business_customer"] = "Is Business Customer";
	$fieldToolTipsEoc["English"]["is_business_customer"] = "";
	$placeHoldersEoc["English"]["is_business_customer"] = "";
	$fieldLabelsEoc["English"]["is_exist_haisouhosyo"] = "Is Exist Haisouhosyo";
	$fieldToolTipsEoc["English"]["is_exist_haisouhosyo"] = "";
	$placeHoldersEoc["English"]["is_exist_haisouhosyo"] = "";
	$fieldLabelsEoc["English"]["meigi_hankaku_kana"] = "Meigi Hankaku Kana";
	$fieldToolTipsEoc["English"]["meigi_hankaku_kana"] = "";
	$placeHoldersEoc["English"]["meigi_hankaku_kana"] = "";
	$fieldLabelsEoc["English"]["is_yamato_csv"] = "Is Yamato Csv";
	$fieldToolTipsEoc["English"]["is_yamato_csv"] = "";
	$placeHoldersEoc["English"]["is_yamato_csv"] = "";
	$fieldLabelsEoc["English"]["is_seiren_csv"] = "Is Seiren Csv";
	$fieldToolTipsEoc["English"]["is_seiren_csv"] = "";
	$placeHoldersEoc["English"]["is_seiren_csv"] = "";
	if (count($fieldToolTipsEoc["English"]))
		$tdataEoc[".isUseToolTips"] = true;
}


	$tdataEoc[".NCSearch"] = true;



$tdataEoc[".shortTableName"] = "Eoc";
$tdataEoc[".nSecOptions"] = 0;
$tdataEoc[".recsPerRowPrint"] = 1;
$tdataEoc[".mainTableOwnerID"] = "";
$tdataEoc[".moveNext"] = 1;
$tdataEoc[".entityType"] = 0;

$tdataEoc[".strOriginalTableName"] = "Eoc";

	



$tdataEoc[".showAddInPopup"] = false;

$tdataEoc[".showEditInPopup"] = false;

$tdataEoc[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc[".fieldsForRegister"] = array();

$tdataEoc[".listAjax"] = false;

	$tdataEoc[".audit"] = true;

	$tdataEoc[".locking"] = false;

$tdataEoc[".edit"] = true;
$tdataEoc[".afterEditAction"] = 1;
$tdataEoc[".closePopupAfterEdit"] = 1;
$tdataEoc[".afterEditActionDetTable"] = "Detail tables not found!";

$tdataEoc[".add"] = true;
$tdataEoc[".afterAddAction"] = 1;
$tdataEoc[".closePopupAfterAdd"] = 1;
$tdataEoc[".afterAddActionDetTable"] = "Detail tables not found!";

$tdataEoc[".list"] = true;

$tdataEoc[".inlineEdit"] = true;

$tdataEoc[".updateSelected"] = true;

$tdataEoc[".reorderRecordsByHeader"] = true;
$tdataEoc[".createSortByDropdown"] = true;
$tdataEoc[".strSortControlSettingsJSON"] = "";

$tdataEoc[".strClickActionJSON"] = "{\"fields\":{\"ALLSEIYAKU\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_COURIER_CHECK\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_NUMBER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_REUSE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_SIZE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_SPECIFIED_TIME\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC__BOX_NUMBER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC__DATE_AND_TIME_2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC__DELIVERY_DATES\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FIRST_NAME2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FIRST_NAME_KANA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FLAG_SPEED\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FLG_MAIL_OTHER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FLG_MAIL_SAGAWA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ICHIBUSEIYAKU\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"LAST_NAME2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"LAST_NAME_KANA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SEARCH_MEDIA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SEARCH_SITE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"UN_REACHABLE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"_registerd_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address3\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"age\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"awazu_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"b1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"b2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"b3\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_account\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_acoount_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_blunch_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_yokin_shubetu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"birth_day\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"chigin_kaitori\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"created_t\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ecc_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ecc_seq\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"eoc_search_keyword\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"fax\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"haisou_bangou\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hentou_houhou\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hentou_houhou_time\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hituyou_shorui\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"insurance_amount_print\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"jis_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"kaitori_staff_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"kaitorihuka\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"liquidation_shop_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"m_tel\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mail1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mail2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mail_check_type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mitumori_taku\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mousikomi_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"name1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"name2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option10\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option11\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option12\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option13\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option3\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option4\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option5\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option6\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option7\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option8\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option9\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"purchase_type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"rakuda_csv_flag\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"registerd_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"remark\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sagawa_shuuka_flag\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sales_flag\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seacanse\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seiyaku_fuseiritu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seiyaku_price\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seiyakukin\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sex\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sise_houhou\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"size_kosuu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sonota\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"src_type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"tel\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"tel2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"updated_at\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"wareki\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"zip\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"zip1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"zip2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"Eoc_chigins\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"Eoc_chigins\",\"url\":\"\"}}}";


$tdataEoc[".inlineAdd"] = true;
$tdataEoc[".copy"] = true;
$tdataEoc[".view"] = true;

$tdataEoc[".import"] = true;

$tdataEoc[".exportTo"] = true;

$tdataEoc[".printFriendly"] = true;

$tdataEoc[".delete"] = true;

$tdataEoc[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc[".searchSaving"] = false;
//

$tdataEoc[".showSearchPanel"] = true;
		$tdataEoc[".flexibleSearch"] = true;

$tdataEoc[".isUseAjaxSuggest"] = true;

$tdataEoc[".rowHighlite"] = true;



						
							
																																												
					
																																																																																																																	
																																																																			

$tdataEoc[".ajaxCodeSnippetAdded"] = false;

$tdataEoc[".buttonsAdded"] = true;

$tdataEoc[".addPageEvents"] = true;

// use timepicker for search panel
$tdataEoc[".isUseTimeForSearch"] = false;



$tdataEoc[".badgeColor"] = "5F9EA0";

$tdataEoc[".detailsLinksOnList"] = "2";

$tdataEoc[".allSearchFields"] = array();
$tdataEoc[".filterFields"] = array();
$tdataEoc[".requiredSearchFields"] = array();

$tdataEoc[".allSearchFields"][] = "is_yamato_csv";
	$tdataEoc[".allSearchFields"][] = "is_seiren_csv";
	$tdataEoc[".allSearchFields"][] = "is_exist_haisouhosyo";
	$tdataEoc[".allSearchFields"][] = "line_chat_url";
	$tdataEoc[".allSearchFields"][] = "satei_saisoku_7_days";
	$tdataEoc[".allSearchFields"][] = "satei_saisoku_2_days";
	$tdataEoc[".allSearchFields"][] = "letterpack";
	$tdataEoc[".allSearchFields"][] = "new_name";
	$tdataEoc[".allSearchFields"][] = "outside_bank";
	$tdataEoc[".allSearchFields"][] = "mypage_id";
	$tdataEoc[".allSearchFields"][] = "kit_done_flag";
	$tdataEoc[".allSearchFields"][] = "sougaku";
	$tdataEoc[".allSearchFields"][] = "sagawa_shuukairai_denwabangou";
	$tdataEoc[".allSearchFields"][] = "is_business_customer";
	$tdataEoc[".allSearchFields"][] = "line_check";
	$tdataEoc[".allSearchFields"][] = "sagawa_shuuka_flag";
	$tdataEoc[".allSearchFields"][] = "kaitorihuka";
	$tdataEoc[".allSearchFields"][] = "FLG_MAIL_OTHER";
	$tdataEoc[".allSearchFields"][] = "registerd_id";
	$tdataEoc[".allSearchFields"][] = "ICHIBUSEIYAKU";
	$tdataEoc[".allSearchFields"][] = "ALLSEIYAKU";
	$tdataEoc[".allSearchFields"][] = "FLG_MAIL_SAGAWA";
	$tdataEoc[".allSearchFields"][] = "seiyakukin";
	$tdataEoc[".allSearchFields"][] = "UN_REACHABLE";
	$tdataEoc[".allSearchFields"][] = "rakuda_csv_flag";
	$tdataEoc[".allSearchFields"][] = "FLAG_SPEED";
	$tdataEoc[".allSearchFields"][] = "kit_flag";
	$tdataEoc[".allSearchFields"][] = "EOC_SIZE";
	$tdataEoc[".allSearchFields"][] = "EOC_NUMBER";
	$tdataEoc[".allSearchFields"][] = "EOC_REUSE";
	$tdataEoc[".allSearchFields"][] = "EOC_SPECIFIED_TIME";
	$tdataEoc[".allSearchFields"][] = "EOC__DATE_AND_TIME_2";
	$tdataEoc[".allSearchFields"][] = "EOC__DELIVERY_DATES";
	$tdataEoc[".allSearchFields"][] = "EOC__BOX_NUMBER";
	$tdataEoc[".allSearchFields"][] = "_registerd_id";
	$tdataEoc[".allSearchFields"][] = "created_t";
	$tdataEoc[".allSearchFields"][] = "purchase_type";
	$tdataEoc[".allSearchFields"][] = "ecc_id";
	$tdataEoc[".allSearchFields"][] = "ecc_seq";
	$tdataEoc[".allSearchFields"][] = "mousikomi_id";
	$tdataEoc[".allSearchFields"][] = "name1";
	$tdataEoc[".allSearchFields"][] = "name2";
	$tdataEoc[".allSearchFields"][] = "option5";
	$tdataEoc[".allSearchFields"][] = "wareki";
	$tdataEoc[".allSearchFields"][] = "b1";
	$tdataEoc[".allSearchFields"][] = "b2";
	$tdataEoc[".allSearchFields"][] = "b3";
	$tdataEoc[".allSearchFields"][] = "age";
	$tdataEoc[".allSearchFields"][] = "tel";
	$tdataEoc[".allSearchFields"][] = "tel2";
	$tdataEoc[".allSearchFields"][] = "fax";
	$tdataEoc[".allSearchFields"][] = "mail1";
	$tdataEoc[".allSearchFields"][] = "option9";
	$tdataEoc[".allSearchFields"][] = "mail2";
	$tdataEoc[".allSearchFields"][] = "option10";
	$tdataEoc[".allSearchFields"][] = "mail_check_type";
	$tdataEoc[".allSearchFields"][] = "dm_check_type";
	$tdataEoc[".allSearchFields"][] = "hentou_houhou";
	$tdataEoc[".allSearchFields"][] = "area";
	$tdataEoc[".allSearchFields"][] = "zip1";
	$tdataEoc[".allSearchFields"][] = "zip2";
	$tdataEoc[".allSearchFields"][] = "address1";
	$tdataEoc[".allSearchFields"][] = "address2";
	$tdataEoc[".allSearchFields"][] = "address3";
	$tdataEoc[".allSearchFields"][] = "sise_houhou";
	$tdataEoc[".allSearchFields"][] = "EOC_COURIER_CHECK";
	$tdataEoc[".allSearchFields"][] = "option8";
	$tdataEoc[".allSearchFields"][] = "option11";
	$tdataEoc[".allSearchFields"][] = "option12";
	$tdataEoc[".allSearchFields"][] = "remark";
	$tdataEoc[".allSearchFields"][] = "SEARCH_SITE";
	$tdataEoc[".allSearchFields"][] = "SEARCH_MEDIA";
	$tdataEoc[".allSearchFields"][] = "eoc_search_keyword";
	$tdataEoc[".allSearchFields"][] = "haisou_bangou";
	$tdataEoc[".allSearchFields"][] = "birth_day";
	$tdataEoc[".allSearchFields"][] = "sonota";
	$tdataEoc[".allSearchFields"][] = "seiyaku_price";
	$tdataEoc[".allSearchFields"][] = "bank_name";
	$tdataEoc[".allSearchFields"][] = "bank_details_code";
	$tdataEoc[".allSearchFields"][] = "bank_details_deposit_type";
	$tdataEoc[".allSearchFields"][] = "bank_details_blunch_name";
	$tdataEoc[".allSearchFields"][] = "bank_details_blunch_code";
	$tdataEoc[".allSearchFields"][] = "bank_details_account_number";
	$tdataEoc[".allSearchFields"][] = "bank_details_symbol";
	$tdataEoc[".allSearchFields"][] = "bank_details_number";
	$tdataEoc[".allSearchFields"][] = "bank_details_account_name";
	$tdataEoc[".allSearchFields"][] = "size_kosuu";
	$tdataEoc[".allSearchFields"][] = "bank_yokin_shubetu";
	$tdataEoc[".allSearchFields"][] = "bank_account";
	$tdataEoc[".allSearchFields"][] = "bank_acoount_name";
	$tdataEoc[".allSearchFields"][] = "hentou_houhou_time";
	$tdataEoc[".allSearchFields"][] = "hituyou_shorui";
	$tdataEoc[".allSearchFields"][] = "seiyaku_fuseiritu";
	$tdataEoc[".allSearchFields"][] = "mitumori_taku";
	$tdataEoc[".allSearchFields"][] = "seacanse";
	$tdataEoc[".allSearchFields"][] = "type";
	$tdataEoc[".allSearchFields"][] = "bank_blunch_code";
	$tdataEoc[".allSearchFields"][] = "src_type";
	$tdataEoc[".allSearchFields"][] = "liquidation_shop_code";
	$tdataEoc[".allSearchFields"][] = "insurance_amount_print";
	$tdataEoc[".allSearchFields"][] = "sales_flag";
	$tdataEoc[".allSearchFields"][] = "option4";
	$tdataEoc[".allSearchFields"][] = "option6";
	$tdataEoc[".allSearchFields"][] = "FIRST_NAME2";
	$tdataEoc[".allSearchFields"][] = "option3";
	$tdataEoc[".allSearchFields"][] = "option2";
	$tdataEoc[".allSearchFields"][] = "option7";
	$tdataEoc[".allSearchFields"][] = "FIRST_NAME_KANA";
	$tdataEoc[".allSearchFields"][] = "LAST_NAME2";
	$tdataEoc[".allSearchFields"][] = "LAST_NAME_KANA";
	$tdataEoc[".allSearchFields"][] = "sex";
	$tdataEoc[".allSearchFields"][] = "chigin_kaitori";
	$tdataEoc[".allSearchFields"][] = "option1";
	$tdataEoc[".allSearchFields"][] = "m_tel";
	$tdataEoc[".allSearchFields"][] = "jis_code";
	$tdataEoc[".allSearchFields"][] = "updated_at";
	$tdataEoc[".allSearchFields"][] = "key_code";
	

$tdataEoc[".googleLikeFields"] = array();
$tdataEoc[".googleLikeFields"][] = "ecc_id";
$tdataEoc[".googleLikeFields"][] = "ecc_seq";
$tdataEoc[".googleLikeFields"][] = "mail1";
$tdataEoc[".googleLikeFields"][] = "mail2";
$tdataEoc[".googleLikeFields"][] = "line_check";
$tdataEoc[".googleLikeFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoc[".googleLikeFields"][] = "sougaku";
$tdataEoc[".googleLikeFields"][] = "key_code";
$tdataEoc[".googleLikeFields"][] = "dm_check_type";
$tdataEoc[".googleLikeFields"][] = "kit_flag";
$tdataEoc[".googleLikeFields"][] = "kit_done_flag";
$tdataEoc[".googleLikeFields"][] = "bank_details_code";
$tdataEoc[".googleLikeFields"][] = "bank_details_blunch_name";
$tdataEoc[".googleLikeFields"][] = "bank_details_blunch_code";
$tdataEoc[".googleLikeFields"][] = "bank_details_account_number";
$tdataEoc[".googleLikeFields"][] = "bank_details_symbol";
$tdataEoc[".googleLikeFields"][] = "bank_details_number";
$tdataEoc[".googleLikeFields"][] = "bank_details_account_name";
$tdataEoc[".googleLikeFields"][] = "bank_details_deposit_type";
$tdataEoc[".googleLikeFields"][] = "mypage_id";
$tdataEoc[".googleLikeFields"][] = "outside_bank";
$tdataEoc[".googleLikeFields"][] = "new_name";
$tdataEoc[".googleLikeFields"][] = "letterpack";
$tdataEoc[".googleLikeFields"][] = "satei_saisoku_2_days";
$tdataEoc[".googleLikeFields"][] = "satei_saisoku_7_days";
$tdataEoc[".googleLikeFields"][] = "line_chat_url";
$tdataEoc[".googleLikeFields"][] = "area";
$tdataEoc[".googleLikeFields"][] = "is_business_customer";
$tdataEoc[".googleLikeFields"][] = "is_exist_haisouhosyo";
$tdataEoc[".googleLikeFields"][] = "meigi_hankaku_kana";
$tdataEoc[".googleLikeFields"][] = "is_yamato_csv";
$tdataEoc[".googleLikeFields"][] = "is_seiren_csv";

$tdataEoc[".panelSearchFields"] = array();
$tdataEoc[".searchPanelOptions"] = array();
$tdataEoc[".panelSearchFields"][] = "is_business_customer";
	$tdataEoc[".panelSearchFields"][] = "rakuda_csv_flag";
	$tdataEoc[".panelSearchFields"][] = "created_t";
	$tdataEoc[".panelSearchFields"][] = "purchase_type";
	$tdataEoc[".panelSearchFields"][] = "ecc_id";
	$tdataEoc[".panelSearchFields"][] = "ecc_seq";
	$tdataEoc[".panelSearchFields"][] = "mousikomi_id";
	$tdataEoc[".panelSearchFields"][] = "name1";
	$tdataEoc[".panelSearchFields"][] = "name2";
	$tdataEoc[".panelSearchFields"][] = "tel";
	$tdataEoc[".panelSearchFields"][] = "tel2";
	$tdataEoc[".panelSearchFields"][] = "mail1";
	$tdataEoc[".panelSearchFields"][] = "mail2";
	$tdataEoc[".panelSearchFields"][] = "area";
	$tdataEoc[".panelSearchFields"][] = "address1";
	$tdataEoc[".panelSearchFields"][] = "address2";
	$tdataEoc[".panelSearchFields"][] = "address3";
	$tdataEoc[".panelSearchFields"][] = "remark";
	$tdataEoc[".panelSearchFields"][] = "SEARCH_SITE";
	$tdataEoc[".panelSearchFields"][] = "SEARCH_MEDIA";
	$tdataEoc[".panelSearchFields"][] = "eoc_search_keyword";
	$tdataEoc[".panelSearchFields"][] = "zip";
	$tdataEoc[".panelSearchFields"][] = "updated_at";
	$tdataEoc[".panelSearchFields"][] = "key_code";
	
$tdataEoc[".advSearchFields"] = array();
$tdataEoc[".advSearchFields"][] = "is_yamato_csv";
$tdataEoc[".advSearchFields"][] = "is_seiren_csv";
$tdataEoc[".advSearchFields"][] = "is_exist_haisouhosyo";
$tdataEoc[".advSearchFields"][] = "line_chat_url";
$tdataEoc[".advSearchFields"][] = "satei_saisoku_7_days";
$tdataEoc[".advSearchFields"][] = "satei_saisoku_2_days";
$tdataEoc[".advSearchFields"][] = "letterpack";
$tdataEoc[".advSearchFields"][] = "new_name";
$tdataEoc[".advSearchFields"][] = "outside_bank";
$tdataEoc[".advSearchFields"][] = "mypage_id";
$tdataEoc[".advSearchFields"][] = "kit_done_flag";
$tdataEoc[".advSearchFields"][] = "sougaku";
$tdataEoc[".advSearchFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoc[".advSearchFields"][] = "is_business_customer";
$tdataEoc[".advSearchFields"][] = "line_check";
$tdataEoc[".advSearchFields"][] = "sagawa_shuuka_flag";
$tdataEoc[".advSearchFields"][] = "kaitorihuka";
$tdataEoc[".advSearchFields"][] = "FLG_MAIL_OTHER";
$tdataEoc[".advSearchFields"][] = "registerd_id";
$tdataEoc[".advSearchFields"][] = "ICHIBUSEIYAKU";
$tdataEoc[".advSearchFields"][] = "ALLSEIYAKU";
$tdataEoc[".advSearchFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoc[".advSearchFields"][] = "seiyakukin";
$tdataEoc[".advSearchFields"][] = "UN_REACHABLE";
$tdataEoc[".advSearchFields"][] = "rakuda_csv_flag";
$tdataEoc[".advSearchFields"][] = "FLAG_SPEED";
$tdataEoc[".advSearchFields"][] = "kit_flag";
$tdataEoc[".advSearchFields"][] = "EOC_SIZE";
$tdataEoc[".advSearchFields"][] = "EOC_NUMBER";
$tdataEoc[".advSearchFields"][] = "EOC_REUSE";
$tdataEoc[".advSearchFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoc[".advSearchFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoc[".advSearchFields"][] = "EOC__DELIVERY_DATES";
$tdataEoc[".advSearchFields"][] = "EOC__BOX_NUMBER";
$tdataEoc[".advSearchFields"][] = "_registerd_id";
$tdataEoc[".advSearchFields"][] = "created_t";
$tdataEoc[".advSearchFields"][] = "purchase_type";
$tdataEoc[".advSearchFields"][] = "ecc_id";
$tdataEoc[".advSearchFields"][] = "ecc_seq";
$tdataEoc[".advSearchFields"][] = "mousikomi_id";
$tdataEoc[".advSearchFields"][] = "name1";
$tdataEoc[".advSearchFields"][] = "name2";
$tdataEoc[".advSearchFields"][] = "option5";
$tdataEoc[".advSearchFields"][] = "wareki";
$tdataEoc[".advSearchFields"][] = "b1";
$tdataEoc[".advSearchFields"][] = "b2";
$tdataEoc[".advSearchFields"][] = "b3";
$tdataEoc[".advSearchFields"][] = "age";
$tdataEoc[".advSearchFields"][] = "tel";
$tdataEoc[".advSearchFields"][] = "tel2";
$tdataEoc[".advSearchFields"][] = "fax";
$tdataEoc[".advSearchFields"][] = "mail1";
$tdataEoc[".advSearchFields"][] = "option9";
$tdataEoc[".advSearchFields"][] = "mail2";
$tdataEoc[".advSearchFields"][] = "option10";
$tdataEoc[".advSearchFields"][] = "mail_check_type";
$tdataEoc[".advSearchFields"][] = "dm_check_type";
$tdataEoc[".advSearchFields"][] = "hentou_houhou";
$tdataEoc[".advSearchFields"][] = "area";
$tdataEoc[".advSearchFields"][] = "zip1";
$tdataEoc[".advSearchFields"][] = "zip2";
$tdataEoc[".advSearchFields"][] = "address1";
$tdataEoc[".advSearchFields"][] = "address2";
$tdataEoc[".advSearchFields"][] = "address3";
$tdataEoc[".advSearchFields"][] = "sise_houhou";
$tdataEoc[".advSearchFields"][] = "EOC_COURIER_CHECK";
$tdataEoc[".advSearchFields"][] = "option8";
$tdataEoc[".advSearchFields"][] = "option11";
$tdataEoc[".advSearchFields"][] = "option12";
$tdataEoc[".advSearchFields"][] = "remark";
$tdataEoc[".advSearchFields"][] = "SEARCH_SITE";
$tdataEoc[".advSearchFields"][] = "SEARCH_MEDIA";
$tdataEoc[".advSearchFields"][] = "eoc_search_keyword";
$tdataEoc[".advSearchFields"][] = "haisou_bangou";
$tdataEoc[".advSearchFields"][] = "birth_day";
$tdataEoc[".advSearchFields"][] = "sonota";
$tdataEoc[".advSearchFields"][] = "seiyaku_price";
$tdataEoc[".advSearchFields"][] = "bank_name";
$tdataEoc[".advSearchFields"][] = "bank_details_code";
$tdataEoc[".advSearchFields"][] = "bank_details_deposit_type";
$tdataEoc[".advSearchFields"][] = "bank_details_blunch_name";
$tdataEoc[".advSearchFields"][] = "bank_details_blunch_code";
$tdataEoc[".advSearchFields"][] = "bank_details_account_number";
$tdataEoc[".advSearchFields"][] = "bank_details_symbol";
$tdataEoc[".advSearchFields"][] = "bank_details_number";
$tdataEoc[".advSearchFields"][] = "bank_details_account_name";
$tdataEoc[".advSearchFields"][] = "size_kosuu";
$tdataEoc[".advSearchFields"][] = "bank_yokin_shubetu";
$tdataEoc[".advSearchFields"][] = "bank_account";
$tdataEoc[".advSearchFields"][] = "bank_acoount_name";
$tdataEoc[".advSearchFields"][] = "hentou_houhou_time";
$tdataEoc[".advSearchFields"][] = "hituyou_shorui";
$tdataEoc[".advSearchFields"][] = "seiyaku_fuseiritu";
$tdataEoc[".advSearchFields"][] = "mitumori_taku";
$tdataEoc[".advSearchFields"][] = "seacanse";
$tdataEoc[".advSearchFields"][] = "type";
$tdataEoc[".advSearchFields"][] = "bank_blunch_code";
$tdataEoc[".advSearchFields"][] = "src_type";
$tdataEoc[".advSearchFields"][] = "liquidation_shop_code";
$tdataEoc[".advSearchFields"][] = "insurance_amount_print";
$tdataEoc[".advSearchFields"][] = "sales_flag";
$tdataEoc[".advSearchFields"][] = "option4";
$tdataEoc[".advSearchFields"][] = "option6";
$tdataEoc[".advSearchFields"][] = "FIRST_NAME2";
$tdataEoc[".advSearchFields"][] = "option3";
$tdataEoc[".advSearchFields"][] = "option2";
$tdataEoc[".advSearchFields"][] = "option7";
$tdataEoc[".advSearchFields"][] = "FIRST_NAME_KANA";
$tdataEoc[".advSearchFields"][] = "LAST_NAME2";
$tdataEoc[".advSearchFields"][] = "LAST_NAME_KANA";
$tdataEoc[".advSearchFields"][] = "sex";
$tdataEoc[".advSearchFields"][] = "chigin_kaitori";
$tdataEoc[".advSearchFields"][] = "option1";
$tdataEoc[".advSearchFields"][] = "m_tel";
$tdataEoc[".advSearchFields"][] = "jis_code";
$tdataEoc[".advSearchFields"][] = "updated_at";
$tdataEoc[".advSearchFields"][] = "key_code";

$tdataEoc[".tableType"] = "list";

$tdataEoc[".printerPageOrientation"] = 0;
$tdataEoc[".nPrinterPageScale"] = 100;

$tdataEoc[".nPrinterSplitRecords"] = 40;

$tdataEoc[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc[".geocodingEnabled"] = false;





$tdataEoc[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc[".pageSize"] = 20;

$tdataEoc[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Eoc.ecc_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc[".strOrderBy"] = $tstrOrderBy;

$tdataEoc[".orderindexes"] = array();
$tdataEoc[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`Eoc`.`ecc_id`");

$tdataEoc[".sqlHead"] = "SELECT Eoc.ecc_id,  ecc_seq,  name1,  created_t,  registerd_id,  kaitori_staff_id,  name2,  wareki,  b1,  b2,  b3,  birth_day,  age,  zip,  zip1,  zip2,  address1,  address2,  address3,  tel,  tel2,  mail1,  mail2,  address_code,  bank_name,  bank_blunch_code,  bank_yokin_shubetu,  bank_account,  bank_acoount_name,  haisou_bangou,  sise_houhou,  hentou_houhou,  hentou_houhou_time,  mousikomi_id,  hituyou_shorui,  seiyaku_fuseiritu,  mitumori_taku,  seacanse,  remark,  `type`,  sales_flag,  src_type,  liquidation_shop_code,  insurance_amount_print,  jis_code,  updated_at,  `_registerd_id`,  mail_check_type,  purchase_type,  sex,  m_tel,  fax,  chigin_kaitori,  option1,  option2,  option3,  option4,  option5,  option6,  option7,  option8,  option9,  option10,  option11,  option12,  option13,  rakuda_csv_flag,  EOC_COURIER_CHECK,  EOC_SIZE,  EOC_NUMBER,  EOC_REUSE,  EOC__DELIVERY_DATES,  EOC_SPECIFIED_TIME,  FIRST_NAME2,  LAST_NAME2,  EOC__DATE_AND_TIME_2,  EOC__BOX_NUMBER,  FIRST_NAME_KANA,  LAST_NAME_KANA,  FLAG_SPEED,  SEARCH_MEDIA,  SEARCH_SITE,  UN_REACHABLE,  FLG_MAIL_SAGAWA,  FLG_MAIL_OTHER,  ALLSEIYAKU,  ICHIBUSEIYAKU,  seiyakukin,  kaitorihuka,  awazu_date,  seiyaku_price,  eoc_search_keyword,  sonota,  size_kosuu,  sagawa_shuuka_flag,  line_check,  sagawa_shuukairai_denwabangou,  kaitori_sougak,  (SELECT SUM(Eoc_chigins.ching_price) FROM Eoc_chigins WHERE Eoc_chigins.chigin_ecc_id = Eoc.ecc_id) AS sougaku,  flag,  key_code,  dm_check_type,  kit_flag,  kit_done_flag,  bank_details_code,  bank_details_blunch_name,  bank_details_blunch_code,  bank_details_account_number,  bank_details_symbol,  bank_details_number,  bank_details_account_name,  bank_details_deposit_type,  mypage_id,  Eoc.ecc_id as `event`,  Eoc.ecc_id as `btns`,  Eoc.ecc_id as `insert_btns`,  outside_bank,  new_name,  letterpack,  satei_saisoku_2_days,  satei_saisoku_7_days,  line_chat_url,  Eoc_area.area,  Eoc.is_business_customer,  Eoc.is_exist_haisouhosyo,  Eoc.meigi_hankaku_kana,  is_yamato_csv,  is_seiren_csv";
$tdataEoc[".sqlFrom"] = "FROM Eoc  LEFT JOIN Eoc_area ON Eoc.ecc_id = Eoc_area.ecc_id";
$tdataEoc[".sqlWhereExpr"] = "";
$tdataEoc[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	
	
		$tabFields[] = "is_yamato_csv";
	
		$tabFields[] = "is_seiren_csv";
	
		$tabFields[] = "sagawa_shuuka_flag";
	
		$tabFields[] = "sagawa_shuukairai_denwabangou";
	
		$tabFields[] = "is_exist_haisouhosyo";
	
		$tabFields[] = "kit_flag";
	
		$tabFields[] = "FLG_MAIL_OTHER";
	
		$tabFields[] = "kaitorihuka";
	
		$tabFields[] = "ICHIBUSEIYAKU";
	
		$tabFields[] = "ALLSEIYAKU";
	
		$tabFields[] = "FLG_MAIL_SAGAWA";
	
		$tabFields[] = "seiyakukin";
	
		$tabFields[] = "UN_REACHABLE";
	
		$tabFields[] = "rakuda_csv_flag";
	
		$tabFields[] = "FLAG_SPEED";
	
		$tabFields[] = "size_kosuu";
	
		$tabFields[] = "EOC_SIZE";
	
		$tabFields[] = "EOC_NUMBER";
	
		$tabFields[] = "EOC_REUSE";
	
		$tabFields[] = "EOC_SPECIFIED_TIME";
	
		$tabFields[] = "EOC__DATE_AND_TIME_2";
	
		$tabFields[] = "EOC__DELIVERY_DATES";
	
		$tabFields[] = "EOC__BOX_NUMBER";
	
		$tabFields[] = "_registerd_id";
	
		$tabFields[] = "created_t";
	
		$tabFields[] = "updated_at";
	
		$tabFields[] = "mousikomi_id";
$arrEditTabs[] = array('tabId'=>'New_section1',
					   'tabName'=>"フラグ 集荷関連 登録日 ",
					   'nType'=>'1',
					   'nOrder'=>2,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
	
		$tabFields[] = "mail1";
	
		$tabFields[] = "option9";
	
		$tabFields[] = "mail2";
	
		$tabFields[] = "option10";
	
		$tabFields[] = "key_code";
	
		$tabFields[] = "mail_check_type";
	
		$tabFields[] = "dm_check_type";
	
		$tabFields[] = "hentou_houhou";
	
		$tabFields[] = "EOC_COURIER_CHECK";
$arrEditTabs[] = array('tabId'=>'2',
					   'tabName'=>"メール DM 返答方法 宅配チェック",
					   'nType'=>'1',
					   'nOrder'=>45,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
	
		$tabFields[] = "haisou_bangou";
	
		$tabFields[] = "bank_details_code";
	
		$tabFields[] = "bank_details_deposit_type";
	
		$tabFields[] = "bank_details_blunch_name";
	
		$tabFields[] = "bank_details_blunch_code";
	
		$tabFields[] = "bank_details_account_number";
	
		$tabFields[] = "bank_details_symbol";
	
		$tabFields[] = "bank_details_number";
	
		$tabFields[] = "bank_details_account_name";
	
		$tabFields[] = "outside_bank";
	
		$tabFields[] = "new_name";
	
		$tabFields[] = "meigi_hankaku_kana";
$arrEditTabs[] = array('tabId'=>'3',
					   'tabName'=>"金融機関情報",
					   'nType'=>'1',
					   'nOrder'=>67,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataEoc[".arrEditTabs"] = $arrEditTabs;



//fill array of tabs for view page
$arrViewTabs = array();
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'__1',
					   'tabName'=>"顧客",
					   'nType'=>'1',
					   'nOrder'=>31,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'__2',
					   'tabName'=>"備考",
					   'nType'=>'1',
					   'nOrder'=>77,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrViewTabs[] = array('tabId'=>'___1',
					   'tabName'=>"顧客２",
					   'nType'=>'1',
					   'nOrder'=>82,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataEoc[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc[".highlightSearchResults"] = true;

$tableKeysEoc = array();
$tableKeysEoc[] = "ecc_id";
$tdataEoc[".Keys"] = $tableKeysEoc;

$tdataEoc[".listFields"] = array();
$tdataEoc[".listFields"][] = "btns";
$tdataEoc[".listFields"][] = "event";
$tdataEoc[".listFields"][] = "insert_btns";
$tdataEoc[".listFields"][] = "remark";
$tdataEoc[".listFields"][] = "line_check";
$tdataEoc[".listFields"][] = "UN_REACHABLE";
$tdataEoc[".listFields"][] = "FLAG_SPEED";
$tdataEoc[".listFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoc[".listFields"][] = "FLG_MAIL_OTHER";
$tdataEoc[".listFields"][] = "letterpack";
$tdataEoc[".listFields"][] = "seiyakukin";
$tdataEoc[".listFields"][] = "rakuda_csv_flag";
$tdataEoc[".listFields"][] = "sagawa_shuuka_flag";
$tdataEoc[".listFields"][] = "is_exist_haisouhosyo";
$tdataEoc[".listFields"][] = "kit_flag";
$tdataEoc[".listFields"][] = "kit_done_flag";
$tdataEoc[".listFields"][] = "is_yamato_csv";
$tdataEoc[".listFields"][] = "is_seiren_csv";
$tdataEoc[".listFields"][] = "satei_saisoku_2_days";
$tdataEoc[".listFields"][] = "satei_saisoku_7_days";
$tdataEoc[".listFields"][] = "haisou_bangou";
$tdataEoc[".listFields"][] = "mail_check_type";
$tdataEoc[".listFields"][] = "dm_check_type";
$tdataEoc[".listFields"][] = "is_business_customer";
$tdataEoc[".listFields"][] = "area";
$tdataEoc[".listFields"][] = "_registerd_id";
$tdataEoc[".listFields"][] = "created_t";
$tdataEoc[".listFields"][] = "updated_at";
$tdataEoc[".listFields"][] = "registerd_id";
$tdataEoc[".listFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoc[".listFields"][] = "key_code";

$tdataEoc[".hideMobileList"] = array();


$tdataEoc[".viewFields"] = array();
$tdataEoc[".viewFields"][] = "is_yamato_csv";
$tdataEoc[".viewFields"][] = "is_seiren_csv";
$tdataEoc[".viewFields"][] = "is_business_customer";
$tdataEoc[".viewFields"][] = "area";
$tdataEoc[".viewFields"][] = "line_chat_url";
$tdataEoc[".viewFields"][] = "letterpack";
$tdataEoc[".viewFields"][] = "new_name";
$tdataEoc[".viewFields"][] = "outside_bank";
$tdataEoc[".viewFields"][] = "mypage_id";
$tdataEoc[".viewFields"][] = "bank_details_deposit_type";
$tdataEoc[".viewFields"][] = "bank_details_account_name";
$tdataEoc[".viewFields"][] = "bank_details_code";
$tdataEoc[".viewFields"][] = "bank_details_number";
$tdataEoc[".viewFields"][] = "bank_details_symbol";
$tdataEoc[".viewFields"][] = "bank_details_blunch_code";
$tdataEoc[".viewFields"][] = "bank_details_blunch_name";
$tdataEoc[".viewFields"][] = "kit_done_flag";
$tdataEoc[".viewFields"][] = "bank_details_account_number";
$tdataEoc[".viewFields"][] = "sougaku";
$tdataEoc[".viewFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoc[".viewFields"][] = "kit_flag";
$tdataEoc[".viewFields"][] = "key_code";
$tdataEoc[".viewFields"][] = "dm_check_type";
$tdataEoc[".viewFields"][] = "line_check";
$tdataEoc[".viewFields"][] = "sagawa_shuuka_flag";
$tdataEoc[".viewFields"][] = "is_exist_haisouhosyo";
$tdataEoc[".viewFields"][] = "kaitorihuka";
$tdataEoc[".viewFields"][] = "FLG_MAIL_OTHER";
$tdataEoc[".viewFields"][] = "ICHIBUSEIYAKU";
$tdataEoc[".viewFields"][] = "ALLSEIYAKU";
$tdataEoc[".viewFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoc[".viewFields"][] = "seiyakukin";
$tdataEoc[".viewFields"][] = "UN_REACHABLE";
$tdataEoc[".viewFields"][] = "rakuda_csv_flag";
$tdataEoc[".viewFields"][] = "FLAG_SPEED";
$tdataEoc[".viewFields"][] = "EOC_SIZE";
$tdataEoc[".viewFields"][] = "EOC_NUMBER";
$tdataEoc[".viewFields"][] = "EOC_REUSE";
$tdataEoc[".viewFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoc[".viewFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoc[".viewFields"][] = "EOC__DELIVERY_DATES";
$tdataEoc[".viewFields"][] = "EOC__BOX_NUMBER";
$tdataEoc[".viewFields"][] = "_registerd_id";
$tdataEoc[".viewFields"][] = "created_t";
$tdataEoc[".viewFields"][] = "updated_at";
$tdataEoc[".viewFields"][] = "purchase_type";
$tdataEoc[".viewFields"][] = "ecc_seq";
$tdataEoc[".viewFields"][] = "ecc_id";
$tdataEoc[".viewFields"][] = "mousikomi_id";
$tdataEoc[".viewFields"][] = "name1";
$tdataEoc[".viewFields"][] = "name2";
$tdataEoc[".viewFields"][] = "option5";
$tdataEoc[".viewFields"][] = "wareki";
$tdataEoc[".viewFields"][] = "b1";
$tdataEoc[".viewFields"][] = "b2";
$tdataEoc[".viewFields"][] = "b3";
$tdataEoc[".viewFields"][] = "age";
$tdataEoc[".viewFields"][] = "tel";
$tdataEoc[".viewFields"][] = "tel2";
$tdataEoc[".viewFields"][] = "fax";
$tdataEoc[".viewFields"][] = "mail1";
$tdataEoc[".viewFields"][] = "option9";
$tdataEoc[".viewFields"][] = "mail2";
$tdataEoc[".viewFields"][] = "option10";
$tdataEoc[".viewFields"][] = "mail_check_type";
$tdataEoc[".viewFields"][] = "hentou_houhou";
$tdataEoc[".viewFields"][] = "zip1";
$tdataEoc[".viewFields"][] = "zip2";
$tdataEoc[".viewFields"][] = "address1";
$tdataEoc[".viewFields"][] = "address2";
$tdataEoc[".viewFields"][] = "address3";
$tdataEoc[".viewFields"][] = "EOC_COURIER_CHECK";
$tdataEoc[".viewFields"][] = "option8";
$tdataEoc[".viewFields"][] = "option11";
$tdataEoc[".viewFields"][] = "option12";
$tdataEoc[".viewFields"][] = "sise_houhou";
$tdataEoc[".viewFields"][] = "remark";
$tdataEoc[".viewFields"][] = "SEARCH_SITE";
$tdataEoc[".viewFields"][] = "SEARCH_MEDIA";
$tdataEoc[".viewFields"][] = "haisou_bangou";
$tdataEoc[".viewFields"][] = "bank_name";
$tdataEoc[".viewFields"][] = "seiyaku_price";
$tdataEoc[".viewFields"][] = "birth_day";
$tdataEoc[".viewFields"][] = "sonota";
$tdataEoc[".viewFields"][] = "size_kosuu";
$tdataEoc[".viewFields"][] = "bank_yokin_shubetu";
$tdataEoc[".viewFields"][] = "bank_account";
$tdataEoc[".viewFields"][] = "bank_acoount_name";
$tdataEoc[".viewFields"][] = "hentou_houhou_time";
$tdataEoc[".viewFields"][] = "hituyou_shorui";
$tdataEoc[".viewFields"][] = "seiyaku_fuseiritu";
$tdataEoc[".viewFields"][] = "mitumori_taku";
$tdataEoc[".viewFields"][] = "seacanse";
$tdataEoc[".viewFields"][] = "type";
$tdataEoc[".viewFields"][] = "bank_blunch_code";
$tdataEoc[".viewFields"][] = "src_type";
$tdataEoc[".viewFields"][] = "liquidation_shop_code";
$tdataEoc[".viewFields"][] = "insurance_amount_print";
$tdataEoc[".viewFields"][] = "sales_flag";
$tdataEoc[".viewFields"][] = "option4";
$tdataEoc[".viewFields"][] = "option6";
$tdataEoc[".viewFields"][] = "FIRST_NAME2";
$tdataEoc[".viewFields"][] = "option3";
$tdataEoc[".viewFields"][] = "option2";
$tdataEoc[".viewFields"][] = "option7";
$tdataEoc[".viewFields"][] = "FIRST_NAME_KANA";
$tdataEoc[".viewFields"][] = "LAST_NAME2";
$tdataEoc[".viewFields"][] = "LAST_NAME_KANA";
$tdataEoc[".viewFields"][] = "sex";
$tdataEoc[".viewFields"][] = "chigin_kaitori";
$tdataEoc[".viewFields"][] = "option1";
$tdataEoc[".viewFields"][] = "m_tel";
$tdataEoc[".viewFields"][] = "jis_code";

$tdataEoc[".addFields"] = array();
$tdataEoc[".addFields"][] = "is_seiren_csv";
$tdataEoc[".addFields"][] = "is_yamato_csv";
$tdataEoc[".addFields"][] = "is_business_customer";
$tdataEoc[".addFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoc[".addFields"][] = "sagawa_shuuka_flag";
$tdataEoc[".addFields"][] = "is_exist_haisouhosyo";
$tdataEoc[".addFields"][] = "kit_flag";
$tdataEoc[".addFields"][] = "kaitorihuka";
$tdataEoc[".addFields"][] = "FLG_MAIL_OTHER";
$tdataEoc[".addFields"][] = "ICHIBUSEIYAKU";
$tdataEoc[".addFields"][] = "ALLSEIYAKU";
$tdataEoc[".addFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoc[".addFields"][] = "seiyakukin";
$tdataEoc[".addFields"][] = "UN_REACHABLE";
$tdataEoc[".addFields"][] = "rakuda_csv_flag";
$tdataEoc[".addFields"][] = "FLAG_SPEED";
$tdataEoc[".addFields"][] = "size_kosuu";
$tdataEoc[".addFields"][] = "EOC_SIZE";
$tdataEoc[".addFields"][] = "EOC_NUMBER";
$tdataEoc[".addFields"][] = "EOC_REUSE";
$tdataEoc[".addFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoc[".addFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoc[".addFields"][] = "EOC__DELIVERY_DATES";
$tdataEoc[".addFields"][] = "EOC__BOX_NUMBER";
$tdataEoc[".addFields"][] = "_registerd_id";
$tdataEoc[".addFields"][] = "created_t";
$tdataEoc[".addFields"][] = "updated_at";
$tdataEoc[".addFields"][] = "purchase_type";
$tdataEoc[".addFields"][] = "ecc_seq";
$tdataEoc[".addFields"][] = "mousikomi_id";
$tdataEoc[".addFields"][] = "LAST_NAME2";
$tdataEoc[".addFields"][] = "FIRST_NAME2";
$tdataEoc[".addFields"][] = "LAST_NAME_KANA";
$tdataEoc[".addFields"][] = "FIRST_NAME_KANA";
$tdataEoc[".addFields"][] = "option5";
$tdataEoc[".addFields"][] = "wareki";
$tdataEoc[".addFields"][] = "b1";
$tdataEoc[".addFields"][] = "b2";
$tdataEoc[".addFields"][] = "b3";
$tdataEoc[".addFields"][] = "age";
$tdataEoc[".addFields"][] = "zip1";
$tdataEoc[".addFields"][] = "zip2";
$tdataEoc[".addFields"][] = "address1";
$tdataEoc[".addFields"][] = "address2";
$tdataEoc[".addFields"][] = "address3";
$tdataEoc[".addFields"][] = "mail1";
$tdataEoc[".addFields"][] = "option9";
$tdataEoc[".addFields"][] = "mail2";
$tdataEoc[".addFields"][] = "option10";
$tdataEoc[".addFields"][] = "mail_check_type";
$tdataEoc[".addFields"][] = "dm_check_type";
$tdataEoc[".addFields"][] = "hentou_houhou";
$tdataEoc[".addFields"][] = "EOC_COURIER_CHECK";
$tdataEoc[".addFields"][] = "option8";
$tdataEoc[".addFields"][] = "option11";
$tdataEoc[".addFields"][] = "option12";
$tdataEoc[".addFields"][] = "tel";
$tdataEoc[".addFields"][] = "tel2";
$tdataEoc[".addFields"][] = "fax";
$tdataEoc[".addFields"][] = "line_check";
$tdataEoc[".addFields"][] = "line_chat_url";
$tdataEoc[".addFields"][] = "remark";
$tdataEoc[".addFields"][] = "SEARCH_SITE";
$tdataEoc[".addFields"][] = "SEARCH_MEDIA";
$tdataEoc[".addFields"][] = "eoc_search_keyword";
$tdataEoc[".addFields"][] = "haisou_bangou";
$tdataEoc[".addFields"][] = "bank_name";
$tdataEoc[".addFields"][] = "bank_details_code";
$tdataEoc[".addFields"][] = "bank_details_deposit_type";
$tdataEoc[".addFields"][] = "bank_details_blunch_name";
$tdataEoc[".addFields"][] = "bank_details_blunch_code";
$tdataEoc[".addFields"][] = "bank_details_account_number";
$tdataEoc[".addFields"][] = "bank_details_symbol";
$tdataEoc[".addFields"][] = "bank_details_number";
$tdataEoc[".addFields"][] = "bank_details_account_name";
$tdataEoc[".addFields"][] = "outside_bank";
$tdataEoc[".addFields"][] = "new_name";
$tdataEoc[".addFields"][] = "meigi_hankaku_kana";
$tdataEoc[".addFields"][] = "key_code";

$tdataEoc[".masterListFields"] = array();
$tdataEoc[".masterListFields"][] = "meigi_hankaku_kana";
$tdataEoc[".masterListFields"][] = "is_yamato_csv";
$tdataEoc[".masterListFields"][] = "is_seiren_csv";
$tdataEoc[".masterListFields"][] = "is_exist_haisouhosyo";
$tdataEoc[".masterListFields"][] = "is_business_customer";
$tdataEoc[".masterListFields"][] = "new_name";
$tdataEoc[".masterListFields"][] = "outside_bank";
$tdataEoc[".masterListFields"][] = "letterpack";
$tdataEoc[".masterListFields"][] = "btns";
$tdataEoc[".masterListFields"][] = "event";
$tdataEoc[".masterListFields"][] = "insert_btns";
$tdataEoc[".masterListFields"][] = "mypage_id";
$tdataEoc[".masterListFields"][] = "purchase_type";
$tdataEoc[".masterListFields"][] = "ecc_seq";
$tdataEoc[".masterListFields"][] = "ecc_id";
$tdataEoc[".masterListFields"][] = "name1";
$tdataEoc[".masterListFields"][] = "name2";
$tdataEoc[".masterListFields"][] = "option5";
$tdataEoc[".masterListFields"][] = "wareki";
$tdataEoc[".masterListFields"][] = "age";
$tdataEoc[".masterListFields"][] = "tel";
$tdataEoc[".masterListFields"][] = "tel2";
$tdataEoc[".masterListFields"][] = "fax";
$tdataEoc[".masterListFields"][] = "mail1";
$tdataEoc[".masterListFields"][] = "option9";
$tdataEoc[".masterListFields"][] = "mail2";
$tdataEoc[".masterListFields"][] = "option10";
$tdataEoc[".masterListFields"][] = "mail_check_type";
$tdataEoc[".masterListFields"][] = "dm_check_type";
$tdataEoc[".masterListFields"][] = "hentou_houhou";
$tdataEoc[".masterListFields"][] = "area";
$tdataEoc[".masterListFields"][] = "zip1";
$tdataEoc[".masterListFields"][] = "zip2";
$tdataEoc[".masterListFields"][] = "address1";
$tdataEoc[".masterListFields"][] = "address2";
$tdataEoc[".masterListFields"][] = "address3";
$tdataEoc[".masterListFields"][] = "option8";
$tdataEoc[".masterListFields"][] = "remark";
$tdataEoc[".masterListFields"][] = "_registerd_id";
$tdataEoc[".masterListFields"][] = "created_t";
$tdataEoc[".masterListFields"][] = "registerd_id";
$tdataEoc[".masterListFields"][] = "updated_at";
$tdataEoc[".masterListFields"][] = "key_code";

$tdataEoc[".inlineAddFields"] = array();
$tdataEoc[".inlineAddFields"][] = "remark";
$tdataEoc[".inlineAddFields"][] = "line_check";
$tdataEoc[".inlineAddFields"][] = "UN_REACHABLE";
$tdataEoc[".inlineAddFields"][] = "FLAG_SPEED";
$tdataEoc[".inlineAddFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoc[".inlineAddFields"][] = "FLG_MAIL_OTHER";
$tdataEoc[".inlineAddFields"][] = "letterpack";
$tdataEoc[".inlineAddFields"][] = "seiyakukin";
$tdataEoc[".inlineAddFields"][] = "rakuda_csv_flag";
$tdataEoc[".inlineAddFields"][] = "sagawa_shuuka_flag";
$tdataEoc[".inlineAddFields"][] = "is_exist_haisouhosyo";
$tdataEoc[".inlineAddFields"][] = "kit_flag";
$tdataEoc[".inlineAddFields"][] = "kit_done_flag";
$tdataEoc[".inlineAddFields"][] = "is_yamato_csv";
$tdataEoc[".inlineAddFields"][] = "is_seiren_csv";
$tdataEoc[".inlineAddFields"][] = "satei_saisoku_2_days";
$tdataEoc[".inlineAddFields"][] = "satei_saisoku_7_days";
$tdataEoc[".inlineAddFields"][] = "haisou_bangou";
$tdataEoc[".inlineAddFields"][] = "mail_check_type";
$tdataEoc[".inlineAddFields"][] = "dm_check_type";
$tdataEoc[".inlineAddFields"][] = "is_business_customer";
$tdataEoc[".inlineAddFields"][] = "_registerd_id";
$tdataEoc[".inlineAddFields"][] = "created_t";
$tdataEoc[".inlineAddFields"][] = "updated_at";
$tdataEoc[".inlineAddFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoc[".inlineAddFields"][] = "key_code";

$tdataEoc[".editFields"] = array();
$tdataEoc[".editFields"][] = "is_business_customer";
$tdataEoc[".editFields"][] = "is_yamato_csv";
$tdataEoc[".editFields"][] = "is_seiren_csv";
$tdataEoc[".editFields"][] = "sagawa_shuuka_flag";
$tdataEoc[".editFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoc[".editFields"][] = "is_exist_haisouhosyo";
$tdataEoc[".editFields"][] = "kit_flag";
$tdataEoc[".editFields"][] = "FLG_MAIL_OTHER";
$tdataEoc[".editFields"][] = "kaitorihuka";
$tdataEoc[".editFields"][] = "ICHIBUSEIYAKU";
$tdataEoc[".editFields"][] = "ALLSEIYAKU";
$tdataEoc[".editFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoc[".editFields"][] = "seiyakukin";
$tdataEoc[".editFields"][] = "UN_REACHABLE";
$tdataEoc[".editFields"][] = "rakuda_csv_flag";
$tdataEoc[".editFields"][] = "FLAG_SPEED";
$tdataEoc[".editFields"][] = "size_kosuu";
$tdataEoc[".editFields"][] = "EOC_SIZE";
$tdataEoc[".editFields"][] = "EOC_NUMBER";
$tdataEoc[".editFields"][] = "EOC_REUSE";
$tdataEoc[".editFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoc[".editFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoc[".editFields"][] = "EOC__DELIVERY_DATES";
$tdataEoc[".editFields"][] = "EOC__BOX_NUMBER";
$tdataEoc[".editFields"][] = "_registerd_id";
$tdataEoc[".editFields"][] = "created_t";
$tdataEoc[".editFields"][] = "updated_at";
$tdataEoc[".editFields"][] = "mousikomi_id";
$tdataEoc[".editFields"][] = "purchase_type";
$tdataEoc[".editFields"][] = "ecc_seq";
$tdataEoc[".editFields"][] = "name1";
$tdataEoc[".editFields"][] = "name2";
$tdataEoc[".editFields"][] = "option5";
$tdataEoc[".editFields"][] = "wareki";
$tdataEoc[".editFields"][] = "b1";
$tdataEoc[".editFields"][] = "b2";
$tdataEoc[".editFields"][] = "b3";
$tdataEoc[".editFields"][] = "age";
$tdataEoc[".editFields"][] = "zip1";
$tdataEoc[".editFields"][] = "zip2";
$tdataEoc[".editFields"][] = "address1";
$tdataEoc[".editFields"][] = "address2";
$tdataEoc[".editFields"][] = "address3";
$tdataEoc[".editFields"][] = "mail1";
$tdataEoc[".editFields"][] = "option9";
$tdataEoc[".editFields"][] = "mail2";
$tdataEoc[".editFields"][] = "option10";
$tdataEoc[".editFields"][] = "key_code";
$tdataEoc[".editFields"][] = "mail_check_type";
$tdataEoc[".editFields"][] = "dm_check_type";
$tdataEoc[".editFields"][] = "hentou_houhou";
$tdataEoc[".editFields"][] = "EOC_COURIER_CHECK";
$tdataEoc[".editFields"][] = "option8";
$tdataEoc[".editFields"][] = "option11";
$tdataEoc[".editFields"][] = "option12";
$tdataEoc[".editFields"][] = "tel";
$tdataEoc[".editFields"][] = "tel2";
$tdataEoc[".editFields"][] = "fax";
$tdataEoc[".editFields"][] = "line_check";
$tdataEoc[".editFields"][] = "line_chat_url";
$tdataEoc[".editFields"][] = "remark";
$tdataEoc[".editFields"][] = "SEARCH_SITE";
$tdataEoc[".editFields"][] = "SEARCH_MEDIA";
$tdataEoc[".editFields"][] = "eoc_search_keyword";
$tdataEoc[".editFields"][] = "haisou_bangou";
$tdataEoc[".editFields"][] = "bank_details_code";
$tdataEoc[".editFields"][] = "bank_details_deposit_type";
$tdataEoc[".editFields"][] = "bank_details_blunch_name";
$tdataEoc[".editFields"][] = "bank_details_blunch_code";
$tdataEoc[".editFields"][] = "bank_details_account_number";
$tdataEoc[".editFields"][] = "bank_details_symbol";
$tdataEoc[".editFields"][] = "bank_details_number";
$tdataEoc[".editFields"][] = "bank_details_account_name";
$tdataEoc[".editFields"][] = "outside_bank";
$tdataEoc[".editFields"][] = "new_name";
$tdataEoc[".editFields"][] = "meigi_hankaku_kana";
$tdataEoc[".editFields"][] = "bank_name";

$tdataEoc[".inlineEditFields"] = array();
$tdataEoc[".inlineEditFields"][] = "remark";
$tdataEoc[".inlineEditFields"][] = "line_check";
$tdataEoc[".inlineEditFields"][] = "UN_REACHABLE";
$tdataEoc[".inlineEditFields"][] = "FLAG_SPEED";
$tdataEoc[".inlineEditFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoc[".inlineEditFields"][] = "FLG_MAIL_OTHER";
$tdataEoc[".inlineEditFields"][] = "letterpack";
$tdataEoc[".inlineEditFields"][] = "seiyakukin";
$tdataEoc[".inlineEditFields"][] = "rakuda_csv_flag";
$tdataEoc[".inlineEditFields"][] = "sagawa_shuuka_flag";
$tdataEoc[".inlineEditFields"][] = "is_exist_haisouhosyo";
$tdataEoc[".inlineEditFields"][] = "kit_flag";
$tdataEoc[".inlineEditFields"][] = "kit_done_flag";
$tdataEoc[".inlineEditFields"][] = "is_yamato_csv";
$tdataEoc[".inlineEditFields"][] = "is_seiren_csv";
$tdataEoc[".inlineEditFields"][] = "satei_saisoku_2_days";
$tdataEoc[".inlineEditFields"][] = "satei_saisoku_7_days";
$tdataEoc[".inlineEditFields"][] = "haisou_bangou";
$tdataEoc[".inlineEditFields"][] = "mail_check_type";
$tdataEoc[".inlineEditFields"][] = "dm_check_type";
$tdataEoc[".inlineEditFields"][] = "is_business_customer";
$tdataEoc[".inlineEditFields"][] = "_registerd_id";
$tdataEoc[".inlineEditFields"][] = "created_t";
$tdataEoc[".inlineEditFields"][] = "updated_at";
$tdataEoc[".inlineEditFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoc[".inlineEditFields"][] = "key_code";

$tdataEoc[".updateSelectedFields"] = array();
$tdataEoc[".updateSelectedFields"][] = "sagawa_shuuka_flag";
$tdataEoc[".updateSelectedFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoc[".updateSelectedFields"][] = "FLG_MAIL_OTHER";
$tdataEoc[".updateSelectedFields"][] = "kaitorihuka";
$tdataEoc[".updateSelectedFields"][] = "ICHIBUSEIYAKU";
$tdataEoc[".updateSelectedFields"][] = "ALLSEIYAKU";
$tdataEoc[".updateSelectedFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoc[".updateSelectedFields"][] = "seiyakukin";
$tdataEoc[".updateSelectedFields"][] = "UN_REACHABLE";
$tdataEoc[".updateSelectedFields"][] = "rakuda_csv_flag";
$tdataEoc[".updateSelectedFields"][] = "FLAG_SPEED";
$tdataEoc[".updateSelectedFields"][] = "EOC_SIZE";
$tdataEoc[".updateSelectedFields"][] = "EOC_NUMBER";
$tdataEoc[".updateSelectedFields"][] = "EOC_REUSE";
$tdataEoc[".updateSelectedFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoc[".updateSelectedFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoc[".updateSelectedFields"][] = "EOC__DELIVERY_DATES";
$tdataEoc[".updateSelectedFields"][] = "EOC__BOX_NUMBER";
$tdataEoc[".updateSelectedFields"][] = "_registerd_id";
$tdataEoc[".updateSelectedFields"][] = "created_t";
$tdataEoc[".updateSelectedFields"][] = "updated_at";
$tdataEoc[".updateSelectedFields"][] = "mousikomi_id";
$tdataEoc[".updateSelectedFields"][] = "purchase_type";
$tdataEoc[".updateSelectedFields"][] = "ecc_seq";
$tdataEoc[".updateSelectedFields"][] = "option5";
$tdataEoc[".updateSelectedFields"][] = "wareki";
$tdataEoc[".updateSelectedFields"][] = "b1";
$tdataEoc[".updateSelectedFields"][] = "b2";
$tdataEoc[".updateSelectedFields"][] = "b3";
$tdataEoc[".updateSelectedFields"][] = "age";
$tdataEoc[".updateSelectedFields"][] = "zip1";
$tdataEoc[".updateSelectedFields"][] = "zip2";
$tdataEoc[".updateSelectedFields"][] = "address1";
$tdataEoc[".updateSelectedFields"][] = "address2";
$tdataEoc[".updateSelectedFields"][] = "address3";
$tdataEoc[".updateSelectedFields"][] = "mail1";
$tdataEoc[".updateSelectedFields"][] = "option9";
$tdataEoc[".updateSelectedFields"][] = "mail2";
$tdataEoc[".updateSelectedFields"][] = "option10";
$tdataEoc[".updateSelectedFields"][] = "mail_check_type";
$tdataEoc[".updateSelectedFields"][] = "hentou_houhou";
$tdataEoc[".updateSelectedFields"][] = "EOC_COURIER_CHECK";
$tdataEoc[".updateSelectedFields"][] = "option8";
$tdataEoc[".updateSelectedFields"][] = "option11";
$tdataEoc[".updateSelectedFields"][] = "option12";
$tdataEoc[".updateSelectedFields"][] = "tel";
$tdataEoc[".updateSelectedFields"][] = "tel2";
$tdataEoc[".updateSelectedFields"][] = "fax";
$tdataEoc[".updateSelectedFields"][] = "remark";
$tdataEoc[".updateSelectedFields"][] = "SEARCH_SITE";
$tdataEoc[".updateSelectedFields"][] = "SEARCH_MEDIA";
$tdataEoc[".updateSelectedFields"][] = "eoc_search_keyword";
$tdataEoc[".updateSelectedFields"][] = "haisou_bangou";
$tdataEoc[".updateSelectedFields"][] = "bank_name";


$tdataEoc[".exportFields"] = array();
$tdataEoc[".exportFields"][] = "is_seiren_csv";
$tdataEoc[".exportFields"][] = "is_yamato_csv";
$tdataEoc[".exportFields"][] = "meigi_hankaku_kana";
$tdataEoc[".exportFields"][] = "is_exist_haisouhosyo";
$tdataEoc[".exportFields"][] = "is_business_customer";
$tdataEoc[".exportFields"][] = "line_chat_url";
$tdataEoc[".exportFields"][] = "satei_saisoku_7_days";
$tdataEoc[".exportFields"][] = "satei_saisoku_2_days";
$tdataEoc[".exportFields"][] = "new_name";
$tdataEoc[".exportFields"][] = "outside_bank";
$tdataEoc[".exportFields"][] = "letterpack";
$tdataEoc[".exportFields"][] = "kit_done_flag";
$tdataEoc[".exportFields"][] = "key_code";
$tdataEoc[".exportFields"][] = "name1";
$tdataEoc[".exportFields"][] = "name2";
$tdataEoc[".exportFields"][] = "option5";
$tdataEoc[".exportFields"][] = "address1";
$tdataEoc[".exportFields"][] = "b1";
$tdataEoc[".exportFields"][] = "mail1";
$tdataEoc[".exportFields"][] = "mail2";
$tdataEoc[".exportFields"][] = "mail_check_type";
$tdataEoc[".exportFields"][] = "tel";
$tdataEoc[".exportFields"][] = "tel2";
$tdataEoc[".exportFields"][] = "sougaku";
$tdataEoc[".exportFields"][] = "ecc_id";
$tdataEoc[".exportFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoc[".exportFields"][] = "dm_check_type";
$tdataEoc[".exportFields"][] = "sagawa_shuuka_flag";
$tdataEoc[".exportFields"][] = "awazu_date";
$tdataEoc[".exportFields"][] = "kaitorihuka";
$tdataEoc[".exportFields"][] = "FLG_MAIL_OTHER";
$tdataEoc[".exportFields"][] = "ICHIBUSEIYAKU";
$tdataEoc[".exportFields"][] = "ALLSEIYAKU";
$tdataEoc[".exportFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoc[".exportFields"][] = "seiyakukin";
$tdataEoc[".exportFields"][] = "UN_REACHABLE";
$tdataEoc[".exportFields"][] = "FLAG_SPEED";
$tdataEoc[".exportFields"][] = "kit_flag";
$tdataEoc[".exportFields"][] = "EOC_SIZE";
$tdataEoc[".exportFields"][] = "EOC_NUMBER";
$tdataEoc[".exportFields"][] = "EOC_REUSE";
$tdataEoc[".exportFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoc[".exportFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoc[".exportFields"][] = "EOC__DELIVERY_DATES";
$tdataEoc[".exportFields"][] = "EOC__BOX_NUMBER";
$tdataEoc[".exportFields"][] = "_registerd_id";
$tdataEoc[".exportFields"][] = "created_t";
$tdataEoc[".exportFields"][] = "updated_at";
$tdataEoc[".exportFields"][] = "purchase_type";
$tdataEoc[".exportFields"][] = "ecc_seq";
$tdataEoc[".exportFields"][] = "area";
$tdataEoc[".exportFields"][] = "zip1";
$tdataEoc[".exportFields"][] = "zip2";
$tdataEoc[".exportFields"][] = "address2";
$tdataEoc[".exportFields"][] = "address3";
$tdataEoc[".exportFields"][] = "EOC_COURIER_CHECK";
$tdataEoc[".exportFields"][] = "SEARCH_SITE";
$tdataEoc[".exportFields"][] = "SEARCH_MEDIA";
$tdataEoc[".exportFields"][] = "eoc_search_keyword";
$tdataEoc[".exportFields"][] = "haisou_bangou";
$tdataEoc[".exportFields"][] = "LAST_NAME2";
$tdataEoc[".exportFields"][] = "FIRST_NAME2";
$tdataEoc[".exportFields"][] = "FIRST_NAME_KANA";
$tdataEoc[".exportFields"][] = "LAST_NAME_KANA";

$tdataEoc[".importFields"] = array();
$tdataEoc[".importFields"][] = "ecc_id";
$tdataEoc[".importFields"][] = "ecc_seq";
$tdataEoc[".importFields"][] = "name1";
$tdataEoc[".importFields"][] = "created_t";
$tdataEoc[".importFields"][] = "registerd_id";
$tdataEoc[".importFields"][] = "kaitori_staff_id";
$tdataEoc[".importFields"][] = "name2";
$tdataEoc[".importFields"][] = "wareki";
$tdataEoc[".importFields"][] = "b1";
$tdataEoc[".importFields"][] = "b2";
$tdataEoc[".importFields"][] = "b3";
$tdataEoc[".importFields"][] = "birth_day";
$tdataEoc[".importFields"][] = "age";
$tdataEoc[".importFields"][] = "zip1";
$tdataEoc[".importFields"][] = "zip2";
$tdataEoc[".importFields"][] = "address1";
$tdataEoc[".importFields"][] = "address2";
$tdataEoc[".importFields"][] = "address3";
$tdataEoc[".importFields"][] = "tel";
$tdataEoc[".importFields"][] = "tel2";
$tdataEoc[".importFields"][] = "mail1";
$tdataEoc[".importFields"][] = "mail2";
$tdataEoc[".importFields"][] = "bank_name";
$tdataEoc[".importFields"][] = "bank_blunch_code";
$tdataEoc[".importFields"][] = "bank_yokin_shubetu";
$tdataEoc[".importFields"][] = "bank_account";
$tdataEoc[".importFields"][] = "bank_acoount_name";
$tdataEoc[".importFields"][] = "haisou_bangou";
$tdataEoc[".importFields"][] = "sise_houhou";
$tdataEoc[".importFields"][] = "hentou_houhou";
$tdataEoc[".importFields"][] = "hentou_houhou_time";
$tdataEoc[".importFields"][] = "mousikomi_id";
$tdataEoc[".importFields"][] = "hituyou_shorui";
$tdataEoc[".importFields"][] = "seiyaku_fuseiritu";
$tdataEoc[".importFields"][] = "mitumori_taku";
$tdataEoc[".importFields"][] = "seacanse";
$tdataEoc[".importFields"][] = "remark";
$tdataEoc[".importFields"][] = "type";
$tdataEoc[".importFields"][] = "sales_flag";
$tdataEoc[".importFields"][] = "src_type";
$tdataEoc[".importFields"][] = "liquidation_shop_code";
$tdataEoc[".importFields"][] = "insurance_amount_print";
$tdataEoc[".importFields"][] = "jis_code";
$tdataEoc[".importFields"][] = "updated_at";
$tdataEoc[".importFields"][] = "_registerd_id";
$tdataEoc[".importFields"][] = "mail_check_type";
$tdataEoc[".importFields"][] = "purchase_type";
$tdataEoc[".importFields"][] = "sex";
$tdataEoc[".importFields"][] = "m_tel";
$tdataEoc[".importFields"][] = "fax";
$tdataEoc[".importFields"][] = "chigin_kaitori";
$tdataEoc[".importFields"][] = "option1";
$tdataEoc[".importFields"][] = "option2";
$tdataEoc[".importFields"][] = "option3";
$tdataEoc[".importFields"][] = "option4";
$tdataEoc[".importFields"][] = "option5";
$tdataEoc[".importFields"][] = "option6";
$tdataEoc[".importFields"][] = "option7";
$tdataEoc[".importFields"][] = "option8";
$tdataEoc[".importFields"][] = "option9";
$tdataEoc[".importFields"][] = "option10";
$tdataEoc[".importFields"][] = "option11";
$tdataEoc[".importFields"][] = "option12";
$tdataEoc[".importFields"][] = "option13";
$tdataEoc[".importFields"][] = "rakuda_csv_flag";
$tdataEoc[".importFields"][] = "EOC_COURIER_CHECK";
$tdataEoc[".importFields"][] = "EOC_SIZE";
$tdataEoc[".importFields"][] = "EOC_NUMBER";
$tdataEoc[".importFields"][] = "EOC_REUSE";
$tdataEoc[".importFields"][] = "EOC__DELIVERY_DATES";
$tdataEoc[".importFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoc[".importFields"][] = "FIRST_NAME2";
$tdataEoc[".importFields"][] = "LAST_NAME2";
$tdataEoc[".importFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoc[".importFields"][] = "EOC__BOX_NUMBER";
$tdataEoc[".importFields"][] = "FIRST_NAME_KANA";
$tdataEoc[".importFields"][] = "LAST_NAME_KANA";
$tdataEoc[".importFields"][] = "FLAG_SPEED";
$tdataEoc[".importFields"][] = "SEARCH_MEDIA";
$tdataEoc[".importFields"][] = "SEARCH_SITE";
$tdataEoc[".importFields"][] = "UN_REACHABLE";
$tdataEoc[".importFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoc[".importFields"][] = "FLG_MAIL_OTHER";
$tdataEoc[".importFields"][] = "ALLSEIYAKU";
$tdataEoc[".importFields"][] = "ICHIBUSEIYAKU";
$tdataEoc[".importFields"][] = "seiyakukin";
$tdataEoc[".importFields"][] = "kaitorihuka";
$tdataEoc[".importFields"][] = "awazu_date";
$tdataEoc[".importFields"][] = "seiyaku_price";
$tdataEoc[".importFields"][] = "eoc_search_keyword";
$tdataEoc[".importFields"][] = "sonota";
$tdataEoc[".importFields"][] = "size_kosuu";
$tdataEoc[".importFields"][] = "sagawa_shuuka_flag";
$tdataEoc[".importFields"][] = "line_check";
$tdataEoc[".importFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoc[".importFields"][] = "sougaku";
$tdataEoc[".importFields"][] = "flag";
$tdataEoc[".importFields"][] = "key_code";
$tdataEoc[".importFields"][] = "dm_check_type";
$tdataEoc[".importFields"][] = "kit_flag";
$tdataEoc[".importFields"][] = "kit_done_flag";
$tdataEoc[".importFields"][] = "bank_details_code";
$tdataEoc[".importFields"][] = "bank_details_blunch_name";
$tdataEoc[".importFields"][] = "bank_details_blunch_code";
$tdataEoc[".importFields"][] = "bank_details_account_number";
$tdataEoc[".importFields"][] = "bank_details_symbol";
$tdataEoc[".importFields"][] = "bank_details_number";
$tdataEoc[".importFields"][] = "bank_details_account_name";
$tdataEoc[".importFields"][] = "bank_details_deposit_type";
$tdataEoc[".importFields"][] = "outside_bank";
$tdataEoc[".importFields"][] = "new_name";
$tdataEoc[".importFields"][] = "letterpack";
$tdataEoc[".importFields"][] = "satei_saisoku_2_days";
$tdataEoc[".importFields"][] = "satei_saisoku_7_days";
$tdataEoc[".importFields"][] = "line_chat_url";
$tdataEoc[".importFields"][] = "is_business_customer";
$tdataEoc[".importFields"][] = "is_exist_haisouhosyo";
$tdataEoc[".importFields"][] = "meigi_hankaku_kana";
$tdataEoc[".importFields"][] = "is_yamato_csv";
$tdataEoc[".importFields"][] = "is_seiren_csv";

$tdataEoc[".printFields"] = array();
$tdataEoc[".printFields"][] = "is_yamato_csv";
$tdataEoc[".printFields"][] = "is_seiren_csv";
$tdataEoc[".printFields"][] = "area";
$tdataEoc[".printFields"][] = "is_business_customer";
$tdataEoc[".printFields"][] = "line_chat_url";
$tdataEoc[".printFields"][] = "is_exist_haisouhosyo";
$tdataEoc[".printFields"][] = "letterpack";
$tdataEoc[".printFields"][] = "new_name";
$tdataEoc[".printFields"][] = "outside_bank";
$tdataEoc[".printFields"][] = "mypage_id";
$tdataEoc[".printFields"][] = "kit_done_flag";
$tdataEoc[".printFields"][] = "dm_check_type";
$tdataEoc[".printFields"][] = "key_code";
$tdataEoc[".printFields"][] = "sougaku";
$tdataEoc[".printFields"][] = "sagawa_shuukairai_denwabangou";
$tdataEoc[".printFields"][] = "line_check";
$tdataEoc[".printFields"][] = "sagawa_shuuka_flag";
$tdataEoc[".printFields"][] = "kaitorihuka";
$tdataEoc[".printFields"][] = "FLG_MAIL_OTHER";
$tdataEoc[".printFields"][] = "ICHIBUSEIYAKU";
$tdataEoc[".printFields"][] = "ALLSEIYAKU";
$tdataEoc[".printFields"][] = "FLG_MAIL_SAGAWA";
$tdataEoc[".printFields"][] = "seiyakukin";
$tdataEoc[".printFields"][] = "UN_REACHABLE";
$tdataEoc[".printFields"][] = "rakuda_csv_flag";
$tdataEoc[".printFields"][] = "FLAG_SPEED";
$tdataEoc[".printFields"][] = "kit_flag";
$tdataEoc[".printFields"][] = "EOC_SIZE";
$tdataEoc[".printFields"][] = "EOC_NUMBER";
$tdataEoc[".printFields"][] = "EOC_REUSE";
$tdataEoc[".printFields"][] = "EOC_SPECIFIED_TIME";
$tdataEoc[".printFields"][] = "EOC__DATE_AND_TIME_2";
$tdataEoc[".printFields"][] = "EOC__DELIVERY_DATES";
$tdataEoc[".printFields"][] = "EOC__BOX_NUMBER";
$tdataEoc[".printFields"][] = "_registerd_id";
$tdataEoc[".printFields"][] = "created_t";
$tdataEoc[".printFields"][] = "updated_at";
$tdataEoc[".printFields"][] = "purchase_type";
$tdataEoc[".printFields"][] = "ecc_seq";
$tdataEoc[".printFields"][] = "ecc_id";
$tdataEoc[".printFields"][] = "mousikomi_id";
$tdataEoc[".printFields"][] = "name1";
$tdataEoc[".printFields"][] = "name2";
$tdataEoc[".printFields"][] = "option5";
$tdataEoc[".printFields"][] = "wareki";
$tdataEoc[".printFields"][] = "b1";
$tdataEoc[".printFields"][] = "b2";
$tdataEoc[".printFields"][] = "b3";
$tdataEoc[".printFields"][] = "age";
$tdataEoc[".printFields"][] = "tel";
$tdataEoc[".printFields"][] = "tel2";
$tdataEoc[".printFields"][] = "fax";
$tdataEoc[".printFields"][] = "mail1";
$tdataEoc[".printFields"][] = "option9";
$tdataEoc[".printFields"][] = "mail2";
$tdataEoc[".printFields"][] = "option10";
$tdataEoc[".printFields"][] = "mail_check_type";
$tdataEoc[".printFields"][] = "hentou_houhou";
$tdataEoc[".printFields"][] = "zip1";
$tdataEoc[".printFields"][] = "zip2";
$tdataEoc[".printFields"][] = "address1";
$tdataEoc[".printFields"][] = "address2";
$tdataEoc[".printFields"][] = "address3";
$tdataEoc[".printFields"][] = "sise_houhou";
$tdataEoc[".printFields"][] = "EOC_COURIER_CHECK";
$tdataEoc[".printFields"][] = "option8";
$tdataEoc[".printFields"][] = "option11";
$tdataEoc[".printFields"][] = "option12";
$tdataEoc[".printFields"][] = "remark";
$tdataEoc[".printFields"][] = "SEARCH_SITE";
$tdataEoc[".printFields"][] = "SEARCH_MEDIA";
$tdataEoc[".printFields"][] = "haisou_bangou";
$tdataEoc[".printFields"][] = "birth_day";
$tdataEoc[".printFields"][] = "bank_name";
$tdataEoc[".printFields"][] = "bank_details_code";
$tdataEoc[".printFields"][] = "bank_details_deposit_type";
$tdataEoc[".printFields"][] = "bank_details_blunch_code";
$tdataEoc[".printFields"][] = "bank_details_blunch_name";
$tdataEoc[".printFields"][] = "bank_details_account_number";
$tdataEoc[".printFields"][] = "bank_details_symbol";
$tdataEoc[".printFields"][] = "bank_details_number";
$tdataEoc[".printFields"][] = "bank_details_account_name";
$tdataEoc[".printFields"][] = "sonota";
$tdataEoc[".printFields"][] = "seiyaku_price";
$tdataEoc[".printFields"][] = "size_kosuu";
$tdataEoc[".printFields"][] = "bank_yokin_shubetu";
$tdataEoc[".printFields"][] = "bank_account";
$tdataEoc[".printFields"][] = "bank_acoount_name";
$tdataEoc[".printFields"][] = "hentou_houhou_time";
$tdataEoc[".printFields"][] = "hituyou_shorui";
$tdataEoc[".printFields"][] = "seiyaku_fuseiritu";
$tdataEoc[".printFields"][] = "mitumori_taku";
$tdataEoc[".printFields"][] = "seacanse";
$tdataEoc[".printFields"][] = "type";
$tdataEoc[".printFields"][] = "bank_blunch_code";
$tdataEoc[".printFields"][] = "src_type";
$tdataEoc[".printFields"][] = "liquidation_shop_code";
$tdataEoc[".printFields"][] = "insurance_amount_print";
$tdataEoc[".printFields"][] = "sales_flag";
$tdataEoc[".printFields"][] = "option4";
$tdataEoc[".printFields"][] = "option6";
$tdataEoc[".printFields"][] = "FIRST_NAME2";
$tdataEoc[".printFields"][] = "option3";
$tdataEoc[".printFields"][] = "option7";
$tdataEoc[".printFields"][] = "option2";
$tdataEoc[".printFields"][] = "FIRST_NAME_KANA";
$tdataEoc[".printFields"][] = "LAST_NAME2";
$tdataEoc[".printFields"][] = "LAST_NAME_KANA";
$tdataEoc[".printFields"][] = "sex";
$tdataEoc[".printFields"][] = "chigin_kaitori";
$tdataEoc[".printFields"][] = "option1";
$tdataEoc[".printFields"][] = "m_tel";
$tdataEoc[".printFields"][] = "jis_code";

//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","ecc_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Eoc.ecc_id";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc["ecc_id"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","ecc_seq");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["ecc_seq"] = $fdata;
//	name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name1";
	$fdata["GoodName"] = "name1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","name1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	

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




	$tdataEoc["name1"] = $fdata;
//	created_t
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_t";
	$fdata["GoodName"] = "created_t";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","created_t");
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




	$tdataEoc["created_t"] = $fdata;
//	registerd_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "registerd_id";
	$fdata["GoodName"] = "registerd_id";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","registerd_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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
	$edata["LinkFieldType"] = 3;
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




	$tdataEoc["registerd_id"] = $fdata;
//	kaitori_staff_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "kaitori_staff_id";
	$fdata["GoodName"] = "kaitori_staff_id";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","kaitori_staff_id");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "kaitori_staff_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kaitori_staff_id";

	
	
			
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
	$edata["LinkFieldType"] = 3;
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








	$tdataEoc["kaitori_staff_id"] = $fdata;
//	name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "name2";
	$fdata["GoodName"] = "name2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","name2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
	

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




	$tdataEoc["name2"] = $fdata;
//	wareki
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "wareki";
	$fdata["GoodName"] = "wareki";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","wareki");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["wareki"] = $fdata;
//	b1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "b1";
	$fdata["GoodName"] = "b1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","b1");
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




	$tdataEoc["b1"] = $fdata;
//	b2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "b2";
	$fdata["GoodName"] = "b2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","b2");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["b2"] = $fdata;
//	b3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "b3";
	$fdata["GoodName"] = "b3";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","b3");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["b3"] = $fdata;
//	birth_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "birth_day";
	$fdata["GoodName"] = "birth_day";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","birth_day");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["birth_day"] = $fdata;
//	age
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "age";
	$fdata["GoodName"] = "age";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","age");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["age"] = $fdata;
//	zip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "zip";
	$fdata["GoodName"] = "zip";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","zip");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "zip";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zip";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdataEoc["zip"] = $fdata;
//	zip1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "zip1";
	$fdata["GoodName"] = "zip1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","zip1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["zip1"] = $fdata;
//	zip2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "zip2";
	$fdata["GoodName"] = "zip2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","zip2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["zip2"] = $fdata;
//	address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "address1";
	$fdata["GoodName"] = "address1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","address1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["address1"] = $fdata;
//	address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "address2";
	$fdata["GoodName"] = "address2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","address2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["address2"] = $fdata;
//	address3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "address3";
	$fdata["GoodName"] = "address3";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","address3");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["address3"] = $fdata;
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","tel");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["tel"] = $fdata;
//	tel2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "tel2";
	$fdata["GoodName"] = "tel2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","tel2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["tel2"] = $fdata;
//	mail1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "mail1";
	$fdata["GoodName"] = "mail1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","mail1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["mail1"] = $fdata;
//	mail2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "mail2";
	$fdata["GoodName"] = "mail2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","mail2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["mail2"] = $fdata;
//	address_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "address_code";
	$fdata["GoodName"] = "address_code";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","address_code");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "address_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_code";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdataEoc["address_code"] = $fdata;
//	bank_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "bank_name";
	$fdata["GoodName"] = "bank_name";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","bank_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc["bank_name"] = $fdata;
//	bank_blunch_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "bank_blunch_code";
	$fdata["GoodName"] = "bank_blunch_code";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","bank_blunch_code");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["bank_blunch_code"] = $fdata;
//	bank_yokin_shubetu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "bank_yokin_shubetu";
	$fdata["GoodName"] = "bank_yokin_shubetu";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","bank_yokin_shubetu");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["bank_yokin_shubetu"] = $fdata;
//	bank_account
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "bank_account";
	$fdata["GoodName"] = "bank_account";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","bank_account");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["bank_account"] = $fdata;
//	bank_acoount_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "bank_acoount_name";
	$fdata["GoodName"] = "bank_acoount_name";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","bank_acoount_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["bank_acoount_name"] = $fdata;
//	haisou_bangou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "haisou_bangou";
	$fdata["GoodName"] = "haisou_bangou";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","haisou_bangou");
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




	$tdataEoc["haisou_bangou"] = $fdata;
//	sise_houhou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "sise_houhou";
	$fdata["GoodName"] = "sise_houhou";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","sise_houhou");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["sise_houhou"] = $fdata;
//	hentou_houhou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "hentou_houhou";
	$fdata["GoodName"] = "hentou_houhou";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","hentou_houhou");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["hentou_houhou"] = $fdata;
//	hentou_houhou_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "hentou_houhou_time";
	$fdata["GoodName"] = "hentou_houhou_time";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","hentou_houhou_time");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["hentou_houhou_time"] = $fdata;
//	mousikomi_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "mousikomi_id";
	$fdata["GoodName"] = "mousikomi_id";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","mousikomi_id");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["mousikomi_id"] = $fdata;
//	hituyou_shorui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "hituyou_shorui";
	$fdata["GoodName"] = "hituyou_shorui";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","hituyou_shorui");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["hituyou_shorui"] = $fdata;
//	seiyaku_fuseiritu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "seiyaku_fuseiritu";
	$fdata["GoodName"] = "seiyaku_fuseiritu";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","seiyaku_fuseiritu");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["seiyaku_fuseiritu"] = $fdata;
//	mitumori_taku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "mitumori_taku";
	$fdata["GoodName"] = "mitumori_taku";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","mitumori_taku");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["mitumori_taku"] = $fdata;
//	seacanse
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "seacanse";
	$fdata["GoodName"] = "seacanse";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","seacanse");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["seacanse"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","remark");
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




	$tdataEoc["remark"] = $fdata;
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","type");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["type"] = $fdata;
//	sales_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "sales_flag";
	$fdata["GoodName"] = "sales_flag";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","sales_flag");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["sales_flag"] = $fdata;
//	src_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "src_type";
	$fdata["GoodName"] = "src_type";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","src_type");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["src_type"] = $fdata;
//	liquidation_shop_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "liquidation_shop_code";
	$fdata["GoodName"] = "liquidation_shop_code";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","liquidation_shop_code");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["liquidation_shop_code"] = $fdata;
//	insurance_amount_print
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "insurance_amount_print";
	$fdata["GoodName"] = "insurance_amount_print";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","insurance_amount_print");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["insurance_amount_print"] = $fdata;
//	jis_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "jis_code";
	$fdata["GoodName"] = "jis_code";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","jis_code");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["jis_code"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","updated_at");
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




	$tdataEoc["updated_at"] = $fdata;
//	_registerd_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "_registerd_id";
	$fdata["GoodName"] = "_registerd_id";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","_registerd_id");
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
	$edata["LinkFieldType"] = 3;
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




	$tdataEoc["_registerd_id"] = $fdata;
//	mail_check_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "mail_check_type";
	$fdata["GoodName"] = "mail_check_type";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","mail_check_type");
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc["mail_check_type"] = $fdata;
//	purchase_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "purchase_type";
	$fdata["GoodName"] = "purchase_type";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","purchase_type");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["purchase_type"] = $fdata;
//	sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "sex";
	$fdata["GoodName"] = "sex";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","sex");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["sex"] = $fdata;
//	m_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "m_tel";
	$fdata["GoodName"] = "m_tel";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","m_tel");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["m_tel"] = $fdata;
//	fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "fax";
	$fdata["GoodName"] = "fax";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","fax");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "fax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fax";

	
	
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




	$tdataEoc["fax"] = $fdata;
//	chigin_kaitori
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "chigin_kaitori";
	$fdata["GoodName"] = "chigin_kaitori";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","chigin_kaitori");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["chigin_kaitori"] = $fdata;
//	option1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "option1";
	$fdata["GoodName"] = "option1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","option1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["option1"] = $fdata;
//	option2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "option2";
	$fdata["GoodName"] = "option2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","option2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["option2"] = $fdata;
//	option3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "option3";
	$fdata["GoodName"] = "option3";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","option3");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["option3"] = $fdata;
//	option4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "option4";
	$fdata["GoodName"] = "option4";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","option4");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["option4"] = $fdata;
//	option5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "option5";
	$fdata["GoodName"] = "option5";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","option5");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["option5"] = $fdata;
//	option6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "option6";
	$fdata["GoodName"] = "option6";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","option6");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["option6"] = $fdata;
//	option7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "option7";
	$fdata["GoodName"] = "option7";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","option7");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["option7"] = $fdata;
//	option8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "option8";
	$fdata["GoodName"] = "option8";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","option8");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "買受";
	$edata["LookupValues"][] = "委託";
	$edata["LookupValues"][] = "交換";

	
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




	$tdataEoc["option8"] = $fdata;
//	option9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "option9";
	$fdata["GoodName"] = "option9";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","option9");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "option9";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option9";

	
	
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




	$tdataEoc["option9"] = $fdata;
//	option10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "option10";
	$fdata["GoodName"] = "option10";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","option10");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "option10";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option10";

	
	
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




	$tdataEoc["option10"] = $fdata;
//	option11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "option11";
	$fdata["GoodName"] = "option11";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","option11");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["option11"] = $fdata;
//	option12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "option12";
	$fdata["GoodName"] = "option12";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","option12");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["option12"] = $fdata;
//	option13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "option13";
	$fdata["GoodName"] = "option13";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","option13");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "option13";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "option13";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdataEoc["option13"] = $fdata;
//	rakuda_csv_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 67;
	$fdata["strName"] = "rakuda_csv_flag";
	$fdata["GoodName"] = "rakuda_csv_flag";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","rakuda_csv_flag");
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




	$tdataEoc["rakuda_csv_flag"] = $fdata;
//	EOC_COURIER_CHECK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 68;
	$fdata["strName"] = "EOC_COURIER_CHECK";
	$fdata["GoodName"] = "EOC_COURIER_CHECK";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","EOC_COURIER_CHECK");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["EOC_COURIER_CHECK"] = $fdata;
//	EOC_SIZE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 69;
	$fdata["strName"] = "EOC_SIZE";
	$fdata["GoodName"] = "EOC_SIZE";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","EOC_SIZE");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["EOC_SIZE"] = $fdata;
//	EOC_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 70;
	$fdata["strName"] = "EOC_NUMBER";
	$fdata["GoodName"] = "EOC_NUMBER";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","EOC_NUMBER");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["EOC_NUMBER"] = $fdata;
//	EOC_REUSE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 71;
	$fdata["strName"] = "EOC_REUSE";
	$fdata["GoodName"] = "EOC_REUSE";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","EOC_REUSE");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["EOC_REUSE"] = $fdata;
//	EOC__DELIVERY_DATES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 72;
	$fdata["strName"] = "EOC__DELIVERY_DATES";
	$fdata["GoodName"] = "EOC__DELIVERY_DATES";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","EOC__DELIVERY_DATES");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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
	$edata["LookupValues"][] = "12-14";
	$edata["LookupValues"][] = "14-16";
	$edata["LookupValues"][] = "16-18";
	$edata["LookupValues"][] = "18-21";

	
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




	$tdataEoc["EOC__DELIVERY_DATES"] = $fdata;
//	EOC_SPECIFIED_TIME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 73;
	$fdata["strName"] = "EOC_SPECIFIED_TIME";
	$fdata["GoodName"] = "EOC_SPECIFIED_TIME";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","EOC_SPECIFIED_TIME");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["EOC_SPECIFIED_TIME"] = $fdata;
//	FIRST_NAME2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 74;
	$fdata["strName"] = "FIRST_NAME2";
	$fdata["GoodName"] = "FIRST_NAME2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","FIRST_NAME2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

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




	$tdataEoc["FIRST_NAME2"] = $fdata;
//	LAST_NAME2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 75;
	$fdata["strName"] = "LAST_NAME2";
	$fdata["GoodName"] = "LAST_NAME2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","LAST_NAME2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

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




	$tdataEoc["LAST_NAME2"] = $fdata;
//	EOC__DATE_AND_TIME_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 76;
	$fdata["strName"] = "EOC__DATE_AND_TIME_2";
	$fdata["GoodName"] = "EOC__DATE_AND_TIME_2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","EOC__DATE_AND_TIME_2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc["EOC__DATE_AND_TIME_2"] = $fdata;
//	EOC__BOX_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 77;
	$fdata["strName"] = "EOC__BOX_NUMBER";
	$fdata["GoodName"] = "EOC__BOX_NUMBER";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","EOC__BOX_NUMBER");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["EOC__BOX_NUMBER"] = $fdata;
//	FIRST_NAME_KANA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 78;
	$fdata["strName"] = "FIRST_NAME_KANA";
	$fdata["GoodName"] = "FIRST_NAME_KANA";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","FIRST_NAME_KANA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

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




	$tdataEoc["FIRST_NAME_KANA"] = $fdata;
//	LAST_NAME_KANA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 79;
	$fdata["strName"] = "LAST_NAME_KANA";
	$fdata["GoodName"] = "LAST_NAME_KANA";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","LAST_NAME_KANA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
	
	
	

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




	$tdataEoc["LAST_NAME_KANA"] = $fdata;
//	FLAG_SPEED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 80;
	$fdata["strName"] = "FLAG_SPEED";
	$fdata["GoodName"] = "FLAG_SPEED";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","FLAG_SPEED");
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




	$tdataEoc["FLAG_SPEED"] = $fdata;
//	SEARCH_MEDIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 81;
	$fdata["strName"] = "SEARCH_MEDIA";
	$fdata["GoodName"] = "SEARCH_MEDIA";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","SEARCH_MEDIA");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "PC";
	$edata["LookupValues"][] = "SP";
	$edata["LookupValues"][] = "TB";
	$edata["LookupValues"][] = "MB";
	$edata["LookupValues"][] = "紹介";
	$edata["LookupValues"][] = "その他";

	
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




	$tdataEoc["SEARCH_MEDIA"] = $fdata;
//	SEARCH_SITE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 82;
	$fdata["strName"] = "SEARCH_SITE";
	$fdata["GoodName"] = "SEARCH_SITE";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","SEARCH_SITE");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Yahoo";
	$edata["LookupValues"][] = "Google";
	$edata["LookupValues"][] = "その他";

	
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




	$tdataEoc["SEARCH_SITE"] = $fdata;
//	UN_REACHABLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 83;
	$fdata["strName"] = "UN_REACHABLE";
	$fdata["GoodName"] = "UN_REACHABLE";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","UN_REACHABLE");
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




	$tdataEoc["UN_REACHABLE"] = $fdata;
//	FLG_MAIL_SAGAWA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 84;
	$fdata["strName"] = "FLG_MAIL_SAGAWA";
	$fdata["GoodName"] = "FLG_MAIL_SAGAWA";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","FLG_MAIL_SAGAWA");
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




	$tdataEoc["FLG_MAIL_SAGAWA"] = $fdata;
//	FLG_MAIL_OTHER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 85;
	$fdata["strName"] = "FLG_MAIL_OTHER";
	$fdata["GoodName"] = "FLG_MAIL_OTHER";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","FLG_MAIL_OTHER");
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




	$tdataEoc["FLG_MAIL_OTHER"] = $fdata;
//	ALLSEIYAKU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 86;
	$fdata["strName"] = "ALLSEIYAKU";
	$fdata["GoodName"] = "ALLSEIYAKU";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","ALLSEIYAKU");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["ALLSEIYAKU"] = $fdata;
//	ICHIBUSEIYAKU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 87;
	$fdata["strName"] = "ICHIBUSEIYAKU";
	$fdata["GoodName"] = "ICHIBUSEIYAKU";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","ICHIBUSEIYAKU");
	$fdata["FieldType"] = 3;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
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




	$tdataEoc["ICHIBUSEIYAKU"] = $fdata;
//	seiyakukin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 88;
	$fdata["strName"] = "seiyakukin";
	$fdata["GoodName"] = "seiyakukin";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","seiyakukin");
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

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc["seiyakukin"] = $fdata;
//	kaitorihuka
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 89;
	$fdata["strName"] = "kaitorihuka";
	$fdata["GoodName"] = "kaitorihuka";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","kaitorihuka");
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




	$tdataEoc["kaitorihuka"] = $fdata;
//	awazu_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 90;
	$fdata["strName"] = "awazu_date";
	$fdata["GoodName"] = "awazu_date";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","awazu_date");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
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








	$tdataEoc["awazu_date"] = $fdata;
//	seiyaku_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 91;
	$fdata["strName"] = "seiyaku_price";
	$fdata["GoodName"] = "seiyaku_price";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","seiyaku_price");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["seiyaku_price"] = $fdata;
//	eoc_search_keyword
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 92;
	$fdata["strName"] = "eoc_search_keyword";
	$fdata["GoodName"] = "eoc_search_keyword";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","eoc_search_keyword");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdataEoc["eoc_search_keyword"] = $fdata;
//	sonota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 93;
	$fdata["strName"] = "sonota";
	$fdata["GoodName"] = "sonota";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","sonota");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["sonota"] = $fdata;
//	size_kosuu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 94;
	$fdata["strName"] = "size_kosuu";
	$fdata["GoodName"] = "size_kosuu";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","size_kosuu");
	$fdata["FieldType"] = 201;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
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




	$tdataEoc["size_kosuu"] = $fdata;
//	sagawa_shuuka_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 95;
	$fdata["strName"] = "sagawa_shuuka_flag";
	$fdata["GoodName"] = "sagawa_shuuka_flag";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","sagawa_shuuka_flag");
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




	$tdataEoc["sagawa_shuuka_flag"] = $fdata;
//	line_check
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 96;
	$fdata["strName"] = "line_check";
	$fdata["GoodName"] = "line_check";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","line_check");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "line_check";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "line_check";

	
	
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




	$tdataEoc["line_check"] = $fdata;
//	sagawa_shuukairai_denwabangou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 97;
	$fdata["strName"] = "sagawa_shuukairai_denwabangou";
	$fdata["GoodName"] = "sagawa_shuukairai_denwabangou";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","sagawa_shuukairai_denwabangou");
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




	$tdataEoc["sagawa_shuukairai_denwabangou"] = $fdata;
//	kaitori_sougak
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 98;
	$fdata["strName"] = "kaitori_sougak";
	$fdata["GoodName"] = "kaitori_sougak";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","kaitori_sougak");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "kaitori_sougak";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kaitori_sougak";

	
	
			
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








	$tdataEoc["kaitori_sougak"] = $fdata;
//	sougaku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 99;
	$fdata["strName"] = "sougaku";
	$fdata["GoodName"] = "sougaku";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc","sougaku");
	$fdata["FieldType"] = 14;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sougaku";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(SELECT SUM(Eoc_chigins.ching_price) FROM Eoc_chigins WHERE Eoc_chigins.chigin_ecc_id = Eoc.ecc_id)";

	
	
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




	$tdataEoc["sougaku"] = $fdata;
//	flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 100;
	$fdata["strName"] = "flag";
	$fdata["GoodName"] = "flag";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","flag");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag";

	
	
			
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








	$tdataEoc["flag"] = $fdata;
//	key_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 101;
	$fdata["strName"] = "key_code";
	$fdata["GoodName"] = "key_code";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","key_code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

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




	$tdataEoc["key_code"] = $fdata;
//	dm_check_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 102;
	$fdata["strName"] = "dm_check_type";
	$fdata["GoodName"] = "dm_check_type";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","dm_check_type");
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

		$fdata["strField"] = "dm_check_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dm_check_type";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LinkFieldType"] = 0;
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc["dm_check_type"] = $fdata;
//	kit_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 103;
	$fdata["strName"] = "kit_flag";
	$fdata["GoodName"] = "kit_flag";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","kit_flag");
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

		$fdata["strField"] = "kit_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kit_flag";

	
	
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




	$tdataEoc["kit_flag"] = $fdata;
//	kit_done_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 104;
	$fdata["strName"] = "kit_done_flag";
	$fdata["GoodName"] = "kit_done_flag";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","kit_done_flag");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kit_done_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kit_done_flag";

	
	
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




	$tdataEoc["kit_done_flag"] = $fdata;
//	bank_details_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 105;
	$fdata["strName"] = "bank_details_code";
	$fdata["GoodName"] = "bank_details_code";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","bank_details_code");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "bank_details_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_details_code";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc["bank_details_code"] = $fdata;
//	bank_details_blunch_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 106;
	$fdata["strName"] = "bank_details_blunch_name";
	$fdata["GoodName"] = "bank_details_blunch_name";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","bank_details_blunch_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "bank_details_blunch_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_details_blunch_name";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc["bank_details_blunch_name"] = $fdata;
//	bank_details_blunch_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 107;
	$fdata["strName"] = "bank_details_blunch_code";
	$fdata["GoodName"] = "bank_details_blunch_code";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","bank_details_blunch_code");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "bank_details_blunch_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_details_blunch_code";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc["bank_details_blunch_code"] = $fdata;
//	bank_details_account_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 108;
	$fdata["strName"] = "bank_details_account_number";
	$fdata["GoodName"] = "bank_details_account_number";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","bank_details_account_number");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "bank_details_account_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_details_account_number";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc["bank_details_account_number"] = $fdata;
//	bank_details_symbol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 109;
	$fdata["strName"] = "bank_details_symbol";
	$fdata["GoodName"] = "bank_details_symbol";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","bank_details_symbol");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "bank_details_symbol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_details_symbol";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc["bank_details_symbol"] = $fdata;
//	bank_details_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 110;
	$fdata["strName"] = "bank_details_number";
	$fdata["GoodName"] = "bank_details_number";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","bank_details_number");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "bank_details_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_details_number";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc["bank_details_number"] = $fdata;
//	bank_details_account_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 111;
	$fdata["strName"] = "bank_details_account_name";
	$fdata["GoodName"] = "bank_details_account_name";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","bank_details_account_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "bank_details_account_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_details_account_name";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc["bank_details_account_name"] = $fdata;
//	bank_details_deposit_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 112;
	$fdata["strName"] = "bank_details_deposit_type";
	$fdata["GoodName"] = "bank_details_deposit_type";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","bank_details_deposit_type");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "bank_details_deposit_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_details_deposit_type";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc["bank_details_deposit_type"] = $fdata;
//	mypage_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 113;
	$fdata["strName"] = "mypage_id";
	$fdata["GoodName"] = "mypage_id";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","mypage_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "mypage_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mypage_id";

	
	
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




	$tdataEoc["mypage_id"] = $fdata;
//	event
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 114;
	$fdata["strName"] = "event";
	$fdata["GoodName"] = "event";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","event");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Eoc.ecc_id";

	
	
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








	$tdataEoc["event"] = $fdata;
//	btns
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 115;
	$fdata["strName"] = "btns";
	$fdata["GoodName"] = "btns";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","btns");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Eoc.ecc_id";

	
	
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








	$tdataEoc["btns"] = $fdata;
//	insert_btns
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 116;
	$fdata["strName"] = "insert_btns";
	$fdata["GoodName"] = "insert_btns";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","insert_btns");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Eoc.ecc_id";

	
	
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








	$tdataEoc["insert_btns"] = $fdata;
//	outside_bank
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 117;
	$fdata["strName"] = "outside_bank";
	$fdata["GoodName"] = "outside_bank";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","outside_bank");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "outside_bank";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "outside_bank";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc["outside_bank"] = $fdata;
//	new_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 118;
	$fdata["strName"] = "new_name";
	$fdata["GoodName"] = "new_name";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","new_name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "new_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "new_name";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc["new_name"] = $fdata;
//	letterpack
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 119;
	$fdata["strName"] = "letterpack";
	$fdata["GoodName"] = "letterpack";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","letterpack");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "letterpack";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "letterpack";

	
	
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




	$tdataEoc["letterpack"] = $fdata;
//	satei_saisoku_2_days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 120;
	$fdata["strName"] = "satei_saisoku_2_days";
	$fdata["GoodName"] = "satei_saisoku_2_days";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","satei_saisoku_2_days");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_saisoku_2_days";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "satei_saisoku_2_days";

	
	
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




	$tdataEoc["satei_saisoku_2_days"] = $fdata;
//	satei_saisoku_7_days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 121;
	$fdata["strName"] = "satei_saisoku_7_days";
	$fdata["GoodName"] = "satei_saisoku_7_days";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","satei_saisoku_7_days");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_saisoku_7_days";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "satei_saisoku_7_days";

	
	
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




	$tdataEoc["satei_saisoku_7_days"] = $fdata;
//	line_chat_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 122;
	$fdata["strName"] = "line_chat_url";
	$fdata["GoodName"] = "line_chat_url";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","line_chat_url");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "line_chat_url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "line_chat_url";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc["line_chat_url"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 123;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "Eoc_area";
	$fdata["Label"] = GetFieldLabel("Eoc","area");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Eoc_area.area";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_area";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 200;
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc["area"] = $fdata;
//	is_business_customer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 124;
	$fdata["strName"] = "is_business_customer";
	$fdata["GoodName"] = "is_business_customer";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","is_business_customer");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_business_customer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Eoc.is_business_customer";

	
	
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




	$tdataEoc["is_business_customer"] = $fdata;
//	is_exist_haisouhosyo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 125;
	$fdata["strName"] = "is_exist_haisouhosyo";
	$fdata["GoodName"] = "is_exist_haisouhosyo";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","is_exist_haisouhosyo");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_exist_haisouhosyo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Eoc.is_exist_haisouhosyo";

	
	
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




	$tdataEoc["is_exist_haisouhosyo"] = $fdata;
//	meigi_hankaku_kana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 126;
	$fdata["strName"] = "meigi_hankaku_kana";
	$fdata["GoodName"] = "meigi_hankaku_kana";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","meigi_hankaku_kana");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "meigi_hankaku_kana";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Eoc.meigi_hankaku_kana";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdataEoc["meigi_hankaku_kana"] = $fdata;
//	is_yamato_csv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 127;
	$fdata["strName"] = "is_yamato_csv";
	$fdata["GoodName"] = "is_yamato_csv";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","is_yamato_csv");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_yamato_csv";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_yamato_csv";

	
	
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




	$tdataEoc["is_yamato_csv"] = $fdata;
//	is_seiren_csv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 128;
	$fdata["strName"] = "is_seiren_csv";
	$fdata["GoodName"] = "is_seiren_csv";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc","is_seiren_csv");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_seiren_csv";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_seiren_csv";

	
	
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




	$tdataEoc["is_seiren_csv"] = $fdata;


$tables_data["Eoc"]=&$tdataEoc;
$field_labels["Eoc"] = &$fieldLabelsEoc;
$fieldToolTips["Eoc"] = &$fieldToolTipsEoc;
$placeHolders["Eoc"] = &$placeHoldersEoc;
$page_titles["Eoc"] = &$pageTitlesEoc;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc"] = array();
//	Eoc_timeline
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_timeline";
		$detailsParam["dOriginalTable"] = "Eoc_timeline";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_timeline";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_timeline");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="ecc_id";
//	satei_of_jewelry
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="satei_of_jewelry";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "satei_of_jewelry";
	$detailsParam["dCaptionTable"] = GetTableCaption("satei_of_jewelry");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="ecc_id";
//	satei_of_brand
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="satei_of_brand";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "satei_of_brand1";
	$detailsParam["dCaptionTable"] = GetTableCaption("satei_of_brand");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="ecc_id";
//	dia
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dia";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "dia";
	$detailsParam["dCaptionTable"] = GetTableCaption("dia");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="ecc_id";
//	kin_satei
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="kin_satei";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "kin_satei";
	$detailsParam["dCaptionTable"] = GetTableCaption("kin_satei");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="ecc_id";
//	Eoc_chigins
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_chigins";
		$detailsParam["dOriginalTable"] = "Eoc_chigins";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_chigins";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_chigins");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="chigin_ecc_id";
//	satei
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="satei";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "satei";
	$detailsParam["dCaptionTable"] = GetTableCaption("satei");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="ecc_id";
//	kaibutu
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="kaibutu";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "kaibutu";
	$detailsParam["dCaptionTable"] = GetTableCaption("kaibutu");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="ecc_id";
//	awazu
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="awazu";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "awazu";
	$detailsParam["dCaptionTable"] = GetTableCaption("awazu");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="ecc_id";
//	mailsystem_send_schedule
	
	

		$dIndex = 9;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="mailsystem_send_schedule";
		$detailsParam["dOriginalTable"] = "mailsystem_send_schedule";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "mailsystem_send_schedule";
	$detailsParam["dCaptionTable"] = GetTableCaption("mailsystem_send_schedule");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="ecc_id";
//	Eoc_guestquestion
	
	

		$dIndex = 10;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_guestquestion";
		$detailsParam["dOriginalTable"] = "Eoc_guestquestion";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_guestquestion";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_guestquestion");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 1;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="ecc_id";
//	Eoc_unfinished
	
	

		$dIndex = 11;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_unfinished";
		$detailsParam["dOriginalTable"] = "Eoc_unfinished";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_unfinished";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_unfinished");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="ecc_id";
//	Eoc_takuhai_for_catch_history
	
	

		$dIndex = 12;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_takuhai_for_catch_history";
		$detailsParam["dOriginalTable"] = "Eoc_takuhai";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_takuhai_for_catch_history";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_takuhai_for_catch_history");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="ecc_id";
//	Eoc_takuhai
	
	

		$dIndex = 13;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_takuhai";
		$detailsParam["dOriginalTable"] = "Eoc_takuhai";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_takuhai";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_takuhai");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="ecc_id";
//	Eoc_refining
	
	

		$dIndex = 14;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_refining";
		$detailsParam["dOriginalTable"] = "Eoc_refining";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_refining";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_refining");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="ecc_id";
//	shop_front_details
	
	

		$dIndex = 15;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="shop_front_details";
		$detailsParam["dOriginalTable"] = "shop_front_details";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "shop_front_details";
	$detailsParam["dCaptionTable"] = GetTableCaption("shop_front_details");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="ecc_id";
//	updated_Eoc_logs
	
	

		$dIndex = 16;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="updated_Eoc_logs";
		$detailsParam["dOriginalTable"] = "updated_Eoc_logs";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "updated_Eoc_logs";
	$detailsParam["dCaptionTable"] = GetTableCaption("updated_Eoc_logs");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="ecc_id";
//	shop_front_seiren_details
	
	

		$dIndex = 17;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="shop_front_seiren_details";
		$detailsParam["dOriginalTable"] = "shop_front_seiren_details";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "shop_front_seiren_details";
	$detailsParam["dCaptionTable"] = GetTableCaption("shop_front_seiren_details");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = 0;
	*/
	$detailsParam["dispChildCount"] = "0";

		$detailsParam["hideChild"] = false;
					$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc"][$dIndex]["detailKeys"][]="ecc_id";

// tables which are master tables for current table (detail)
$masterTablesData["Eoc"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Eoc.ecc_id,  ecc_seq,  name1,  created_t,  registerd_id,  kaitori_staff_id,  name2,  wareki,  b1,  b2,  b3,  birth_day,  age,  zip,  zip1,  zip2,  address1,  address2,  address3,  tel,  tel2,  mail1,  mail2,  address_code,  bank_name,  bank_blunch_code,  bank_yokin_shubetu,  bank_account,  bank_acoount_name,  haisou_bangou,  sise_houhou,  hentou_houhou,  hentou_houhou_time,  mousikomi_id,  hituyou_shorui,  seiyaku_fuseiritu,  mitumori_taku,  seacanse,  remark,  `type`,  sales_flag,  src_type,  liquidation_shop_code,  insurance_amount_print,  jis_code,  updated_at,  `_registerd_id`,  mail_check_type,  purchase_type,  sex,  m_tel,  fax,  chigin_kaitori,  option1,  option2,  option3,  option4,  option5,  option6,  option7,  option8,  option9,  option10,  option11,  option12,  option13,  rakuda_csv_flag,  EOC_COURIER_CHECK,  EOC_SIZE,  EOC_NUMBER,  EOC_REUSE,  EOC__DELIVERY_DATES,  EOC_SPECIFIED_TIME,  FIRST_NAME2,  LAST_NAME2,  EOC__DATE_AND_TIME_2,  EOC__BOX_NUMBER,  FIRST_NAME_KANA,  LAST_NAME_KANA,  FLAG_SPEED,  SEARCH_MEDIA,  SEARCH_SITE,  UN_REACHABLE,  FLG_MAIL_SAGAWA,  FLG_MAIL_OTHER,  ALLSEIYAKU,  ICHIBUSEIYAKU,  seiyakukin,  kaitorihuka,  awazu_date,  seiyaku_price,  eoc_search_keyword,  sonota,  size_kosuu,  sagawa_shuuka_flag,  line_check,  sagawa_shuukairai_denwabangou,  kaitori_sougak,  (SELECT SUM(Eoc_chigins.ching_price) FROM Eoc_chigins WHERE Eoc_chigins.chigin_ecc_id = Eoc.ecc_id) AS sougaku,  flag,  key_code,  dm_check_type,  kit_flag,  kit_done_flag,  bank_details_code,  bank_details_blunch_name,  bank_details_blunch_code,  bank_details_account_number,  bank_details_symbol,  bank_details_number,  bank_details_account_name,  bank_details_deposit_type,  mypage_id,  Eoc.ecc_id as `event`,  Eoc.ecc_id as `btns`,  Eoc.ecc_id as `insert_btns`,  outside_bank,  new_name,  letterpack,  satei_saisoku_2_days,  satei_saisoku_7_days,  line_chat_url,  Eoc_area.area,  Eoc.is_business_customer,  Eoc.is_exist_haisouhosyo,  Eoc.meigi_hankaku_kana,  is_yamato_csv,  is_seiren_csv";
$proto0["m_strFrom"] = "FROM Eoc  LEFT JOIN Eoc_area ON Eoc.ecc_id = Eoc_area.ecc_id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Eoc.ecc_id DESC";
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
	"m_srcTableName" => "Eoc"
));

$proto6["m_sql"] = "Eoc.ecc_id";
$proto6["m_srcTableName"] = "Eoc";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto8["m_sql"] = "ecc_seq";
$proto8["m_srcTableName"] = "Eoc";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto10["m_sql"] = "name1";
$proto10["m_srcTableName"] = "Eoc";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_t",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto12["m_sql"] = "created_t";
$proto12["m_srcTableName"] = "Eoc";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "registerd_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto14["m_sql"] = "registerd_id";
$proto14["m_srcTableName"] = "Eoc";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_staff_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto16["m_sql"] = "kaitori_staff_id";
$proto16["m_srcTableName"] = "Eoc";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto18["m_sql"] = "name2";
$proto18["m_srcTableName"] = "Eoc";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "wareki",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto20["m_sql"] = "wareki";
$proto20["m_srcTableName"] = "Eoc";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "b1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto22["m_sql"] = "b1";
$proto22["m_srcTableName"] = "Eoc";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "b2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto24["m_sql"] = "b2";
$proto24["m_srcTableName"] = "Eoc";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "b3",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto26["m_sql"] = "b3";
$proto26["m_srcTableName"] = "Eoc";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "birth_day",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto28["m_sql"] = "birth_day";
$proto28["m_srcTableName"] = "Eoc";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "age",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto30["m_sql"] = "age";
$proto30["m_srcTableName"] = "Eoc";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "zip",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto32["m_sql"] = "zip";
$proto32["m_srcTableName"] = "Eoc";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "zip1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto34["m_sql"] = "zip1";
$proto34["m_srcTableName"] = "Eoc";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "zip2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto36["m_sql"] = "zip2";
$proto36["m_srcTableName"] = "Eoc";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "address1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto38["m_sql"] = "address1";
$proto38["m_srcTableName"] = "Eoc";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "address2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto40["m_sql"] = "address2";
$proto40["m_srcTableName"] = "Eoc";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "address3",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto42["m_sql"] = "address3";
$proto42["m_srcTableName"] = "Eoc";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto44["m_sql"] = "tel";
$proto44["m_srcTableName"] = "Eoc";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "tel2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto46["m_sql"] = "tel2";
$proto46["m_srcTableName"] = "Eoc";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "mail1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto48["m_sql"] = "mail1";
$proto48["m_srcTableName"] = "Eoc";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "mail2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto50["m_sql"] = "mail2";
$proto50["m_srcTableName"] = "Eoc";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "address_code",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto52["m_sql"] = "address_code";
$proto52["m_srcTableName"] = "Eoc";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_name",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto54["m_sql"] = "bank_name";
$proto54["m_srcTableName"] = "Eoc";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_blunch_code",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto56["m_sql"] = "bank_blunch_code";
$proto56["m_srcTableName"] = "Eoc";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_yokin_shubetu",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto58["m_sql"] = "bank_yokin_shubetu";
$proto58["m_srcTableName"] = "Eoc";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_account",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto60["m_sql"] = "bank_account";
$proto60["m_srcTableName"] = "Eoc";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_acoount_name",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto62["m_sql"] = "bank_acoount_name";
$proto62["m_srcTableName"] = "Eoc";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "haisou_bangou",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto64["m_sql"] = "haisou_bangou";
$proto64["m_srcTableName"] = "Eoc";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "sise_houhou",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto66["m_sql"] = "sise_houhou";
$proto66["m_srcTableName"] = "Eoc";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "hentou_houhou",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto68["m_sql"] = "hentou_houhou";
$proto68["m_srcTableName"] = "Eoc";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "hentou_houhou_time",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto70["m_sql"] = "hentou_houhou_time";
$proto70["m_srcTableName"] = "Eoc";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "mousikomi_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto72["m_sql"] = "mousikomi_id";
$proto72["m_srcTableName"] = "Eoc";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "hituyou_shorui",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto74["m_sql"] = "hituyou_shorui";
$proto74["m_srcTableName"] = "Eoc";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "seiyaku_fuseiritu",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto76["m_sql"] = "seiyaku_fuseiritu";
$proto76["m_srcTableName"] = "Eoc";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "mitumori_taku",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto78["m_sql"] = "mitumori_taku";
$proto78["m_srcTableName"] = "Eoc";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "seacanse",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto80["m_sql"] = "seacanse";
$proto80["m_srcTableName"] = "Eoc";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto82["m_sql"] = "remark";
$proto82["m_srcTableName"] = "Eoc";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "type",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto84["m_sql"] = "`type`";
$proto84["m_srcTableName"] = "Eoc";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_flag",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto86["m_sql"] = "sales_flag";
$proto86["m_srcTableName"] = "Eoc";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "src_type",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto88["m_sql"] = "src_type";
$proto88["m_srcTableName"] = "Eoc";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "liquidation_shop_code",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto90["m_sql"] = "liquidation_shop_code";
$proto90["m_srcTableName"] = "Eoc";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "insurance_amount_print",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto92["m_sql"] = "insurance_amount_print";
$proto92["m_srcTableName"] = "Eoc";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "jis_code",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto94["m_sql"] = "jis_code";
$proto94["m_srcTableName"] = "Eoc";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto96["m_sql"] = "updated_at";
$proto96["m_srcTableName"] = "Eoc";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "_registerd_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto98["m_sql"] = "`_registerd_id`";
$proto98["m_srcTableName"] = "Eoc";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "mail_check_type",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto100["m_sql"] = "mail_check_type";
$proto100["m_srcTableName"] = "Eoc";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "purchase_type",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto102["m_sql"] = "purchase_type";
$proto102["m_srcTableName"] = "Eoc";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "sex",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto104["m_sql"] = "sex";
$proto104["m_srcTableName"] = "Eoc";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "m_tel",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto106["m_sql"] = "m_tel";
$proto106["m_srcTableName"] = "Eoc";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "fax",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto108["m_sql"] = "fax";
$proto108["m_srcTableName"] = "Eoc";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "chigin_kaitori",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto110["m_sql"] = "chigin_kaitori";
$proto110["m_srcTableName"] = "Eoc";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "option1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto112["m_sql"] = "option1";
$proto112["m_srcTableName"] = "Eoc";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "option2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto114["m_sql"] = "option2";
$proto114["m_srcTableName"] = "Eoc";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "option3",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto116["m_sql"] = "option3";
$proto116["m_srcTableName"] = "Eoc";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "option4",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto118["m_sql"] = "option4";
$proto118["m_srcTableName"] = "Eoc";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "option5",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto120["m_sql"] = "option5";
$proto120["m_srcTableName"] = "Eoc";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "option6",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto122["m_sql"] = "option6";
$proto122["m_srcTableName"] = "Eoc";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "option7",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto124["m_sql"] = "option7";
$proto124["m_srcTableName"] = "Eoc";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "option8",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto126["m_sql"] = "option8";
$proto126["m_srcTableName"] = "Eoc";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "option9",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto128["m_sql"] = "option9";
$proto128["m_srcTableName"] = "Eoc";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "option10",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto130["m_sql"] = "option10";
$proto130["m_srcTableName"] = "Eoc";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "option11",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto132["m_sql"] = "option11";
$proto132["m_srcTableName"] = "Eoc";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "option12",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto134["m_sql"] = "option12";
$proto134["m_srcTableName"] = "Eoc";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$obj = new SQLField(array(
	"m_strName" => "option13",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto136["m_sql"] = "option13";
$proto136["m_srcTableName"] = "Eoc";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "rakuda_csv_flag",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto138["m_sql"] = "rakuda_csv_flag";
$proto138["m_srcTableName"] = "Eoc";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "";
$obj = new SQLFieldListItem($proto138);

$proto0["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "EOC_COURIER_CHECK",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto140["m_sql"] = "EOC_COURIER_CHECK";
$proto140["m_srcTableName"] = "Eoc";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto0["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "EOC_SIZE",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto142["m_sql"] = "EOC_SIZE";
$proto142["m_srcTableName"] = "Eoc";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto0["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "EOC_NUMBER",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto144["m_sql"] = "EOC_NUMBER";
$proto144["m_srcTableName"] = "Eoc";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto0["m_fieldlist"][]=$obj;
						$proto146=array();
			$obj = new SQLField(array(
	"m_strName" => "EOC_REUSE",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto146["m_sql"] = "EOC_REUSE";
$proto146["m_srcTableName"] = "Eoc";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "";
$obj = new SQLFieldListItem($proto146);

$proto0["m_fieldlist"][]=$obj;
						$proto148=array();
			$obj = new SQLField(array(
	"m_strName" => "EOC__DELIVERY_DATES",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto148["m_sql"] = "EOC__DELIVERY_DATES";
$proto148["m_srcTableName"] = "Eoc";
$proto148["m_expr"]=$obj;
$proto148["m_alias"] = "";
$obj = new SQLFieldListItem($proto148);

$proto0["m_fieldlist"][]=$obj;
						$proto150=array();
			$obj = new SQLField(array(
	"m_strName" => "EOC_SPECIFIED_TIME",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto150["m_sql"] = "EOC_SPECIFIED_TIME";
$proto150["m_srcTableName"] = "Eoc";
$proto150["m_expr"]=$obj;
$proto150["m_alias"] = "";
$obj = new SQLFieldListItem($proto150);

$proto0["m_fieldlist"][]=$obj;
						$proto152=array();
			$obj = new SQLField(array(
	"m_strName" => "FIRST_NAME2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto152["m_sql"] = "FIRST_NAME2";
$proto152["m_srcTableName"] = "Eoc";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "";
$obj = new SQLFieldListItem($proto152);

$proto0["m_fieldlist"][]=$obj;
						$proto154=array();
			$obj = new SQLField(array(
	"m_strName" => "LAST_NAME2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto154["m_sql"] = "LAST_NAME2";
$proto154["m_srcTableName"] = "Eoc";
$proto154["m_expr"]=$obj;
$proto154["m_alias"] = "";
$obj = new SQLFieldListItem($proto154);

$proto0["m_fieldlist"][]=$obj;
						$proto156=array();
			$obj = new SQLField(array(
	"m_strName" => "EOC__DATE_AND_TIME_2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto156["m_sql"] = "EOC__DATE_AND_TIME_2";
$proto156["m_srcTableName"] = "Eoc";
$proto156["m_expr"]=$obj;
$proto156["m_alias"] = "";
$obj = new SQLFieldListItem($proto156);

$proto0["m_fieldlist"][]=$obj;
						$proto158=array();
			$obj = new SQLField(array(
	"m_strName" => "EOC__BOX_NUMBER",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto158["m_sql"] = "EOC__BOX_NUMBER";
$proto158["m_srcTableName"] = "Eoc";
$proto158["m_expr"]=$obj;
$proto158["m_alias"] = "";
$obj = new SQLFieldListItem($proto158);

$proto0["m_fieldlist"][]=$obj;
						$proto160=array();
			$obj = new SQLField(array(
	"m_strName" => "FIRST_NAME_KANA",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto160["m_sql"] = "FIRST_NAME_KANA";
$proto160["m_srcTableName"] = "Eoc";
$proto160["m_expr"]=$obj;
$proto160["m_alias"] = "";
$obj = new SQLFieldListItem($proto160);

$proto0["m_fieldlist"][]=$obj;
						$proto162=array();
			$obj = new SQLField(array(
	"m_strName" => "LAST_NAME_KANA",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto162["m_sql"] = "LAST_NAME_KANA";
$proto162["m_srcTableName"] = "Eoc";
$proto162["m_expr"]=$obj;
$proto162["m_alias"] = "";
$obj = new SQLFieldListItem($proto162);

$proto0["m_fieldlist"][]=$obj;
						$proto164=array();
			$obj = new SQLField(array(
	"m_strName" => "FLAG_SPEED",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto164["m_sql"] = "FLAG_SPEED";
$proto164["m_srcTableName"] = "Eoc";
$proto164["m_expr"]=$obj;
$proto164["m_alias"] = "";
$obj = new SQLFieldListItem($proto164);

$proto0["m_fieldlist"][]=$obj;
						$proto166=array();
			$obj = new SQLField(array(
	"m_strName" => "SEARCH_MEDIA",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto166["m_sql"] = "SEARCH_MEDIA";
$proto166["m_srcTableName"] = "Eoc";
$proto166["m_expr"]=$obj;
$proto166["m_alias"] = "";
$obj = new SQLFieldListItem($proto166);

$proto0["m_fieldlist"][]=$obj;
						$proto168=array();
			$obj = new SQLField(array(
	"m_strName" => "SEARCH_SITE",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto168["m_sql"] = "SEARCH_SITE";
$proto168["m_srcTableName"] = "Eoc";
$proto168["m_expr"]=$obj;
$proto168["m_alias"] = "";
$obj = new SQLFieldListItem($proto168);

$proto0["m_fieldlist"][]=$obj;
						$proto170=array();
			$obj = new SQLField(array(
	"m_strName" => "UN_REACHABLE",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto170["m_sql"] = "UN_REACHABLE";
$proto170["m_srcTableName"] = "Eoc";
$proto170["m_expr"]=$obj;
$proto170["m_alias"] = "";
$obj = new SQLFieldListItem($proto170);

$proto0["m_fieldlist"][]=$obj;
						$proto172=array();
			$obj = new SQLField(array(
	"m_strName" => "FLG_MAIL_SAGAWA",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto172["m_sql"] = "FLG_MAIL_SAGAWA";
$proto172["m_srcTableName"] = "Eoc";
$proto172["m_expr"]=$obj;
$proto172["m_alias"] = "";
$obj = new SQLFieldListItem($proto172);

$proto0["m_fieldlist"][]=$obj;
						$proto174=array();
			$obj = new SQLField(array(
	"m_strName" => "FLG_MAIL_OTHER",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto174["m_sql"] = "FLG_MAIL_OTHER";
$proto174["m_srcTableName"] = "Eoc";
$proto174["m_expr"]=$obj;
$proto174["m_alias"] = "";
$obj = new SQLFieldListItem($proto174);

$proto0["m_fieldlist"][]=$obj;
						$proto176=array();
			$obj = new SQLField(array(
	"m_strName" => "ALLSEIYAKU",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto176["m_sql"] = "ALLSEIYAKU";
$proto176["m_srcTableName"] = "Eoc";
$proto176["m_expr"]=$obj;
$proto176["m_alias"] = "";
$obj = new SQLFieldListItem($proto176);

$proto0["m_fieldlist"][]=$obj;
						$proto178=array();
			$obj = new SQLField(array(
	"m_strName" => "ICHIBUSEIYAKU",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto178["m_sql"] = "ICHIBUSEIYAKU";
$proto178["m_srcTableName"] = "Eoc";
$proto178["m_expr"]=$obj;
$proto178["m_alias"] = "";
$obj = new SQLFieldListItem($proto178);

$proto0["m_fieldlist"][]=$obj;
						$proto180=array();
			$obj = new SQLField(array(
	"m_strName" => "seiyakukin",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto180["m_sql"] = "seiyakukin";
$proto180["m_srcTableName"] = "Eoc";
$proto180["m_expr"]=$obj;
$proto180["m_alias"] = "";
$obj = new SQLFieldListItem($proto180);

$proto0["m_fieldlist"][]=$obj;
						$proto182=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitorihuka",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto182["m_sql"] = "kaitorihuka";
$proto182["m_srcTableName"] = "Eoc";
$proto182["m_expr"]=$obj;
$proto182["m_alias"] = "";
$obj = new SQLFieldListItem($proto182);

$proto0["m_fieldlist"][]=$obj;
						$proto184=array();
			$obj = new SQLField(array(
	"m_strName" => "awazu_date",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto184["m_sql"] = "awazu_date";
$proto184["m_srcTableName"] = "Eoc";
$proto184["m_expr"]=$obj;
$proto184["m_alias"] = "";
$obj = new SQLFieldListItem($proto184);

$proto0["m_fieldlist"][]=$obj;
						$proto186=array();
			$obj = new SQLField(array(
	"m_strName" => "seiyaku_price",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto186["m_sql"] = "seiyaku_price";
$proto186["m_srcTableName"] = "Eoc";
$proto186["m_expr"]=$obj;
$proto186["m_alias"] = "";
$obj = new SQLFieldListItem($proto186);

$proto0["m_fieldlist"][]=$obj;
						$proto188=array();
			$obj = new SQLField(array(
	"m_strName" => "eoc_search_keyword",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto188["m_sql"] = "eoc_search_keyword";
$proto188["m_srcTableName"] = "Eoc";
$proto188["m_expr"]=$obj;
$proto188["m_alias"] = "";
$obj = new SQLFieldListItem($proto188);

$proto0["m_fieldlist"][]=$obj;
						$proto190=array();
			$obj = new SQLField(array(
	"m_strName" => "sonota",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto190["m_sql"] = "sonota";
$proto190["m_srcTableName"] = "Eoc";
$proto190["m_expr"]=$obj;
$proto190["m_alias"] = "";
$obj = new SQLFieldListItem($proto190);

$proto0["m_fieldlist"][]=$obj;
						$proto192=array();
			$obj = new SQLField(array(
	"m_strName" => "size_kosuu",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto192["m_sql"] = "size_kosuu";
$proto192["m_srcTableName"] = "Eoc";
$proto192["m_expr"]=$obj;
$proto192["m_alias"] = "";
$obj = new SQLFieldListItem($proto192);

$proto0["m_fieldlist"][]=$obj;
						$proto194=array();
			$obj = new SQLField(array(
	"m_strName" => "sagawa_shuuka_flag",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto194["m_sql"] = "sagawa_shuuka_flag";
$proto194["m_srcTableName"] = "Eoc";
$proto194["m_expr"]=$obj;
$proto194["m_alias"] = "";
$obj = new SQLFieldListItem($proto194);

$proto0["m_fieldlist"][]=$obj;
						$proto196=array();
			$obj = new SQLField(array(
	"m_strName" => "line_check",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto196["m_sql"] = "line_check";
$proto196["m_srcTableName"] = "Eoc";
$proto196["m_expr"]=$obj;
$proto196["m_alias"] = "";
$obj = new SQLFieldListItem($proto196);

$proto0["m_fieldlist"][]=$obj;
						$proto198=array();
			$obj = new SQLField(array(
	"m_strName" => "sagawa_shuukairai_denwabangou",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto198["m_sql"] = "sagawa_shuukairai_denwabangou";
$proto198["m_srcTableName"] = "Eoc";
$proto198["m_expr"]=$obj;
$proto198["m_alias"] = "";
$obj = new SQLFieldListItem($proto198);

$proto0["m_fieldlist"][]=$obj;
						$proto200=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_sougak",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto200["m_sql"] = "kaitori_sougak";
$proto200["m_srcTableName"] = "Eoc";
$proto200["m_expr"]=$obj;
$proto200["m_alias"] = "";
$obj = new SQLFieldListItem($proto200);

$proto0["m_fieldlist"][]=$obj;
						$proto202=array();
			$proto203=array();
$proto203["m_strHead"] = "SELECT";
$proto203["m_strFieldList"] = "SUM(Eoc_chigins.ching_price)";
$proto203["m_strFrom"] = "FROM Eoc_chigins";
$proto203["m_strWhere"] = "Eoc_chigins.chigin_ecc_id = Eoc.ecc_id";
$proto203["m_strOrderBy"] = "";
$proto203["m_strTail"] = "";
	
		;
			$proto203["cipherer"] = null;
$proto205=array();
$proto205["m_sql"] = "Eoc_chigins.chigin_ecc_id = Eoc.ecc_id";
$proto205["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "chigin_ecc_id",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc"
));

$proto205["m_column"]=$obj;
$proto205["m_contained"] = array();
$proto205["m_strCase"] = "= Eoc.ecc_id";
$proto205["m_havingmode"] = false;
$proto205["m_inBrackets"] = false;
$proto205["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto205);

$proto203["m_where"] = $obj;
$proto207=array();
$proto207["m_sql"] = "";
$proto207["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto207["m_column"]=$obj;
$proto207["m_contained"] = array();
$proto207["m_strCase"] = "";
$proto207["m_havingmode"] = false;
$proto207["m_inBrackets"] = false;
$proto207["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto207);

$proto203["m_having"] = $obj;
$proto203["m_fieldlist"] = array();
						$proto209=array();
			$proto210=array();
$proto210["m_functiontype"] = "SQLF_SUM";
$proto210["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "ching_price",
	"m_strTable" => "Eoc_chigins",
	"m_srcTableName" => "Eoc"
));

$proto210["m_arguments"][]=$obj;
$proto210["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto210);

$proto209["m_sql"] = "SUM(Eoc_chigins.ching_price)";
$proto209["m_srcTableName"] = "Eoc";
$proto209["m_expr"]=$obj;
$proto209["m_alias"] = "";
$obj = new SQLFieldListItem($proto209);

$proto203["m_fieldlist"][]=$obj;
$proto203["m_fromlist"] = array();
												$proto212=array();
$proto212["m_link"] = "SQLL_MAIN";
			$proto213=array();
$proto213["m_strName"] = "Eoc_chigins";
$proto213["m_srcTableName"] = "Eoc";
$proto213["m_columns"] = array();
$proto213["m_columns"][] = "chigin_id";
$proto213["m_columns"][] = "create_by";
$proto213["m_columns"][] = "create_at";
$proto213["m_columns"][] = "chigin_ecc_id";
$proto213["m_columns"][] = "ching_price";
$proto213["m_columns"][] = "ching_created_at";
$proto213["m_columns"][] = "remark";
$proto213["m_columns"][] = "chigin_type";
$proto213["m_columns"][] = "seq";
$proto213["m_columns"][] = "haraidasi";
$proto213["m_columns"][] = "excel_output";
$proto213["m_columns"][] = "ching_price_goal";
$proto213["m_columns"][] = "kaitori_sougak";
$proto213["m_columns"][] = "updated_at";
$proto213["m_columns"][] = "updated_by";
$proto213["m_columns"][] = "account_item";
$proto213["m_columns"][] = "satei_by";
$proto213["m_columns"][] = "Eoc_unfinished_id";
$proto213["m_columns"][] = "category";
$proto213["m_columns"][] = "Eoc_takuhai_id";
$obj = new SQLTable($proto213);

$proto212["m_table"] = $obj;
$proto212["m_sql"] = "Eoc_chigins";
$proto212["m_alias"] = "";
$proto212["m_srcTableName"] = "Eoc";
$proto214=array();
$proto214["m_sql"] = "";
$proto214["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto214["m_column"]=$obj;
$proto214["m_contained"] = array();
$proto214["m_strCase"] = "";
$proto214["m_havingmode"] = false;
$proto214["m_inBrackets"] = false;
$proto214["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto214);

$proto212["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto212);

$proto203["m_fromlist"][]=$obj;
$proto203["m_groupby"] = array();
$proto203["m_orderby"] = array();
$proto203["m_srcTableName"]="Eoc";		
$obj = new SQLQuery($proto203);

$proto202["m_sql"] = "(SELECT SUM(Eoc_chigins.ching_price) FROM Eoc_chigins WHERE Eoc_chigins.chigin_ecc_id = Eoc.ecc_id)";
$proto202["m_srcTableName"] = "Eoc";
$proto202["m_expr"]=$obj;
$proto202["m_alias"] = "sougaku";
$obj = new SQLFieldListItem($proto202);

$proto0["m_fieldlist"][]=$obj;
						$proto216=array();
			$obj = new SQLField(array(
	"m_strName" => "flag",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto216["m_sql"] = "flag";
$proto216["m_srcTableName"] = "Eoc";
$proto216["m_expr"]=$obj;
$proto216["m_alias"] = "";
$obj = new SQLFieldListItem($proto216);

$proto0["m_fieldlist"][]=$obj;
						$proto218=array();
			$obj = new SQLField(array(
	"m_strName" => "key_code",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto218["m_sql"] = "key_code";
$proto218["m_srcTableName"] = "Eoc";
$proto218["m_expr"]=$obj;
$proto218["m_alias"] = "";
$obj = new SQLFieldListItem($proto218);

$proto0["m_fieldlist"][]=$obj;
						$proto220=array();
			$obj = new SQLField(array(
	"m_strName" => "dm_check_type",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto220["m_sql"] = "dm_check_type";
$proto220["m_srcTableName"] = "Eoc";
$proto220["m_expr"]=$obj;
$proto220["m_alias"] = "";
$obj = new SQLFieldListItem($proto220);

$proto0["m_fieldlist"][]=$obj;
						$proto222=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_flag",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto222["m_sql"] = "kit_flag";
$proto222["m_srcTableName"] = "Eoc";
$proto222["m_expr"]=$obj;
$proto222["m_alias"] = "";
$obj = new SQLFieldListItem($proto222);

$proto0["m_fieldlist"][]=$obj;
						$proto224=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_done_flag",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto224["m_sql"] = "kit_done_flag";
$proto224["m_srcTableName"] = "Eoc";
$proto224["m_expr"]=$obj;
$proto224["m_alias"] = "";
$obj = new SQLFieldListItem($proto224);

$proto0["m_fieldlist"][]=$obj;
						$proto226=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_code",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto226["m_sql"] = "bank_details_code";
$proto226["m_srcTableName"] = "Eoc";
$proto226["m_expr"]=$obj;
$proto226["m_alias"] = "";
$obj = new SQLFieldListItem($proto226);

$proto0["m_fieldlist"][]=$obj;
						$proto228=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_blunch_name",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto228["m_sql"] = "bank_details_blunch_name";
$proto228["m_srcTableName"] = "Eoc";
$proto228["m_expr"]=$obj;
$proto228["m_alias"] = "";
$obj = new SQLFieldListItem($proto228);

$proto0["m_fieldlist"][]=$obj;
						$proto230=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_blunch_code",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto230["m_sql"] = "bank_details_blunch_code";
$proto230["m_srcTableName"] = "Eoc";
$proto230["m_expr"]=$obj;
$proto230["m_alias"] = "";
$obj = new SQLFieldListItem($proto230);

$proto0["m_fieldlist"][]=$obj;
						$proto232=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_account_number",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto232["m_sql"] = "bank_details_account_number";
$proto232["m_srcTableName"] = "Eoc";
$proto232["m_expr"]=$obj;
$proto232["m_alias"] = "";
$obj = new SQLFieldListItem($proto232);

$proto0["m_fieldlist"][]=$obj;
						$proto234=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_symbol",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto234["m_sql"] = "bank_details_symbol";
$proto234["m_srcTableName"] = "Eoc";
$proto234["m_expr"]=$obj;
$proto234["m_alias"] = "";
$obj = new SQLFieldListItem($proto234);

$proto0["m_fieldlist"][]=$obj;
						$proto236=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_number",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto236["m_sql"] = "bank_details_number";
$proto236["m_srcTableName"] = "Eoc";
$proto236["m_expr"]=$obj;
$proto236["m_alias"] = "";
$obj = new SQLFieldListItem($proto236);

$proto0["m_fieldlist"][]=$obj;
						$proto238=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_account_name",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto238["m_sql"] = "bank_details_account_name";
$proto238["m_srcTableName"] = "Eoc";
$proto238["m_expr"]=$obj;
$proto238["m_alias"] = "";
$obj = new SQLFieldListItem($proto238);

$proto0["m_fieldlist"][]=$obj;
						$proto240=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_deposit_type",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto240["m_sql"] = "bank_details_deposit_type";
$proto240["m_srcTableName"] = "Eoc";
$proto240["m_expr"]=$obj;
$proto240["m_alias"] = "";
$obj = new SQLFieldListItem($proto240);

$proto0["m_fieldlist"][]=$obj;
						$proto242=array();
			$obj = new SQLField(array(
	"m_strName" => "mypage_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto242["m_sql"] = "mypage_id";
$proto242["m_srcTableName"] = "Eoc";
$proto242["m_expr"]=$obj;
$proto242["m_alias"] = "";
$obj = new SQLFieldListItem($proto242);

$proto0["m_fieldlist"][]=$obj;
						$proto244=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto244["m_sql"] = "Eoc.ecc_id";
$proto244["m_srcTableName"] = "Eoc";
$proto244["m_expr"]=$obj;
$proto244["m_alias"] = "event";
$obj = new SQLFieldListItem($proto244);

$proto0["m_fieldlist"][]=$obj;
						$proto246=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto246["m_sql"] = "Eoc.ecc_id";
$proto246["m_srcTableName"] = "Eoc";
$proto246["m_expr"]=$obj;
$proto246["m_alias"] = "btns";
$obj = new SQLFieldListItem($proto246);

$proto0["m_fieldlist"][]=$obj;
						$proto248=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto248["m_sql"] = "Eoc.ecc_id";
$proto248["m_srcTableName"] = "Eoc";
$proto248["m_expr"]=$obj;
$proto248["m_alias"] = "insert_btns";
$obj = new SQLFieldListItem($proto248);

$proto0["m_fieldlist"][]=$obj;
						$proto250=array();
			$obj = new SQLField(array(
	"m_strName" => "outside_bank",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto250["m_sql"] = "outside_bank";
$proto250["m_srcTableName"] = "Eoc";
$proto250["m_expr"]=$obj;
$proto250["m_alias"] = "";
$obj = new SQLFieldListItem($proto250);

$proto0["m_fieldlist"][]=$obj;
						$proto252=array();
			$obj = new SQLField(array(
	"m_strName" => "new_name",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto252["m_sql"] = "new_name";
$proto252["m_srcTableName"] = "Eoc";
$proto252["m_expr"]=$obj;
$proto252["m_alias"] = "";
$obj = new SQLFieldListItem($proto252);

$proto0["m_fieldlist"][]=$obj;
						$proto254=array();
			$obj = new SQLField(array(
	"m_strName" => "letterpack",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto254["m_sql"] = "letterpack";
$proto254["m_srcTableName"] = "Eoc";
$proto254["m_expr"]=$obj;
$proto254["m_alias"] = "";
$obj = new SQLFieldListItem($proto254);

$proto0["m_fieldlist"][]=$obj;
						$proto256=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_saisoku_2_days",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto256["m_sql"] = "satei_saisoku_2_days";
$proto256["m_srcTableName"] = "Eoc";
$proto256["m_expr"]=$obj;
$proto256["m_alias"] = "";
$obj = new SQLFieldListItem($proto256);

$proto0["m_fieldlist"][]=$obj;
						$proto258=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_saisoku_7_days",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto258["m_sql"] = "satei_saisoku_7_days";
$proto258["m_srcTableName"] = "Eoc";
$proto258["m_expr"]=$obj;
$proto258["m_alias"] = "";
$obj = new SQLFieldListItem($proto258);

$proto0["m_fieldlist"][]=$obj;
						$proto260=array();
			$obj = new SQLField(array(
	"m_strName" => "line_chat_url",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto260["m_sql"] = "line_chat_url";
$proto260["m_srcTableName"] = "Eoc";
$proto260["m_expr"]=$obj;
$proto260["m_alias"] = "";
$obj = new SQLFieldListItem($proto260);

$proto0["m_fieldlist"][]=$obj;
						$proto262=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "Eoc_area",
	"m_srcTableName" => "Eoc"
));

$proto262["m_sql"] = "Eoc_area.area";
$proto262["m_srcTableName"] = "Eoc";
$proto262["m_expr"]=$obj;
$proto262["m_alias"] = "";
$obj = new SQLFieldListItem($proto262);

$proto0["m_fieldlist"][]=$obj;
						$proto264=array();
			$obj = new SQLField(array(
	"m_strName" => "is_business_customer",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto264["m_sql"] = "Eoc.is_business_customer";
$proto264["m_srcTableName"] = "Eoc";
$proto264["m_expr"]=$obj;
$proto264["m_alias"] = "";
$obj = new SQLFieldListItem($proto264);

$proto0["m_fieldlist"][]=$obj;
						$proto266=array();
			$obj = new SQLField(array(
	"m_strName" => "is_exist_haisouhosyo",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto266["m_sql"] = "Eoc.is_exist_haisouhosyo";
$proto266["m_srcTableName"] = "Eoc";
$proto266["m_expr"]=$obj;
$proto266["m_alias"] = "";
$obj = new SQLFieldListItem($proto266);

$proto0["m_fieldlist"][]=$obj;
						$proto268=array();
			$obj = new SQLField(array(
	"m_strName" => "meigi_hankaku_kana",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto268["m_sql"] = "Eoc.meigi_hankaku_kana";
$proto268["m_srcTableName"] = "Eoc";
$proto268["m_expr"]=$obj;
$proto268["m_alias"] = "";
$obj = new SQLFieldListItem($proto268);

$proto0["m_fieldlist"][]=$obj;
						$proto270=array();
			$obj = new SQLField(array(
	"m_strName" => "is_yamato_csv",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto270["m_sql"] = "is_yamato_csv";
$proto270["m_srcTableName"] = "Eoc";
$proto270["m_expr"]=$obj;
$proto270["m_alias"] = "";
$obj = new SQLFieldListItem($proto270);

$proto0["m_fieldlist"][]=$obj;
						$proto272=array();
			$obj = new SQLField(array(
	"m_strName" => "is_seiren_csv",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto272["m_sql"] = "is_seiren_csv";
$proto272["m_srcTableName"] = "Eoc";
$proto272["m_expr"]=$obj;
$proto272["m_alias"] = "";
$obj = new SQLFieldListItem($proto272);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto274=array();
$proto274["m_link"] = "SQLL_MAIN";
			$proto275=array();
$proto275["m_strName"] = "Eoc";
$proto275["m_srcTableName"] = "Eoc";
$proto275["m_columns"] = array();
$proto275["m_columns"][] = "ecc_id";
$proto275["m_columns"][] = "ecc_seq";
$proto275["m_columns"][] = "name1";
$proto275["m_columns"][] = "created_t";
$proto275["m_columns"][] = "registerd_id";
$proto275["m_columns"][] = "kaitori_staff_id";
$proto275["m_columns"][] = "name2";
$proto275["m_columns"][] = "wareki";
$proto275["m_columns"][] = "b1";
$proto275["m_columns"][] = "b2";
$proto275["m_columns"][] = "b3";
$proto275["m_columns"][] = "birth_day";
$proto275["m_columns"][] = "age";
$proto275["m_columns"][] = "zip";
$proto275["m_columns"][] = "zip1";
$proto275["m_columns"][] = "zip2";
$proto275["m_columns"][] = "address1";
$proto275["m_columns"][] = "address2";
$proto275["m_columns"][] = "address3";
$proto275["m_columns"][] = "tel";
$proto275["m_columns"][] = "tel2";
$proto275["m_columns"][] = "mail1";
$proto275["m_columns"][] = "mail2";
$proto275["m_columns"][] = "address_code";
$proto275["m_columns"][] = "bank_name";
$proto275["m_columns"][] = "bank_blunch_code";
$proto275["m_columns"][] = "bank_yokin_shubetu";
$proto275["m_columns"][] = "bank_account";
$proto275["m_columns"][] = "bank_acoount_name";
$proto275["m_columns"][] = "haisou_bangou";
$proto275["m_columns"][] = "sise_houhou";
$proto275["m_columns"][] = "hentou_houhou";
$proto275["m_columns"][] = "hentou_houhou_time";
$proto275["m_columns"][] = "mousikomi_id";
$proto275["m_columns"][] = "hituyou_shorui";
$proto275["m_columns"][] = "seiyaku_fuseiritu";
$proto275["m_columns"][] = "mitumori_taku";
$proto275["m_columns"][] = "seacanse";
$proto275["m_columns"][] = "remark";
$proto275["m_columns"][] = "type";
$proto275["m_columns"][] = "sales_flag";
$proto275["m_columns"][] = "src_type";
$proto275["m_columns"][] = "liquidation_shop_code";
$proto275["m_columns"][] = "insurance_amount_print";
$proto275["m_columns"][] = "jis_code";
$proto275["m_columns"][] = "updated_at";
$proto275["m_columns"][] = "_registerd_id";
$proto275["m_columns"][] = "mail_check_type";
$proto275["m_columns"][] = "purchase_type";
$proto275["m_columns"][] = "sex";
$proto275["m_columns"][] = "m_tel";
$proto275["m_columns"][] = "fax";
$proto275["m_columns"][] = "chigin_kaitori";
$proto275["m_columns"][] = "option1";
$proto275["m_columns"][] = "option2";
$proto275["m_columns"][] = "option3";
$proto275["m_columns"][] = "option4";
$proto275["m_columns"][] = "option5";
$proto275["m_columns"][] = "option6";
$proto275["m_columns"][] = "option7";
$proto275["m_columns"][] = "option8";
$proto275["m_columns"][] = "option9";
$proto275["m_columns"][] = "option10";
$proto275["m_columns"][] = "option11";
$proto275["m_columns"][] = "option12";
$proto275["m_columns"][] = "option13";
$proto275["m_columns"][] = "rakuda_csv_flag";
$proto275["m_columns"][] = "EOC_COURIER_CHECK";
$proto275["m_columns"][] = "EOC_SIZE";
$proto275["m_columns"][] = "EOC_NUMBER";
$proto275["m_columns"][] = "EOC_REUSE";
$proto275["m_columns"][] = "EOC__DELIVERY_DATES";
$proto275["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto275["m_columns"][] = "FIRST_NAME2";
$proto275["m_columns"][] = "LAST_NAME2";
$proto275["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto275["m_columns"][] = "EOC__BOX_NUMBER";
$proto275["m_columns"][] = "FIRST_NAME_KANA";
$proto275["m_columns"][] = "LAST_NAME_KANA";
$proto275["m_columns"][] = "FLAG_SPEED";
$proto275["m_columns"][] = "SEARCH_MEDIA";
$proto275["m_columns"][] = "SEARCH_SITE";
$proto275["m_columns"][] = "UN_REACHABLE";
$proto275["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto275["m_columns"][] = "FLG_MAIL_OTHER";
$proto275["m_columns"][] = "ALLSEIYAKU";
$proto275["m_columns"][] = "ICHIBUSEIYAKU";
$proto275["m_columns"][] = "seiyakukin";
$proto275["m_columns"][] = "kaitorihuka";
$proto275["m_columns"][] = "awazu_date";
$proto275["m_columns"][] = "seiyaku_price";
$proto275["m_columns"][] = "eoc_search_keyword";
$proto275["m_columns"][] = "sonota";
$proto275["m_columns"][] = "size_kosuu";
$proto275["m_columns"][] = "sagawa_shuuka_flag";
$proto275["m_columns"][] = "line_check";
$proto275["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto275["m_columns"][] = "kaitori_sougak";
$proto275["m_columns"][] = "flag";
$proto275["m_columns"][] = "key_code";
$proto275["m_columns"][] = "dm_check_type";
$proto275["m_columns"][] = "kit_flag";
$proto275["m_columns"][] = "kit_done_flag";
$proto275["m_columns"][] = "bank_details_code";
$proto275["m_columns"][] = "bank_details_blunch_name";
$proto275["m_columns"][] = "bank_details_blunch_code";
$proto275["m_columns"][] = "bank_details_account_number";
$proto275["m_columns"][] = "bank_details_symbol";
$proto275["m_columns"][] = "bank_details_number";
$proto275["m_columns"][] = "bank_details_account_name";
$proto275["m_columns"][] = "bank_details_deposit_type";
$proto275["m_columns"][] = "mypage_id";
$proto275["m_columns"][] = "UN_REACHABLE_brand";
$proto275["m_columns"][] = "sagawa_haisou_hoken";
$proto275["m_columns"][] = "transfer_confirm";
$proto275["m_columns"][] = "outside_bank";
$proto275["m_columns"][] = "new_name";
$proto275["m_columns"][] = "letterpack";
$proto275["m_columns"][] = "satei_saisoku_2_days";
$proto275["m_columns"][] = "satei_saisoku_7_days";
$proto275["m_columns"][] = "accept_flag";
$proto275["m_columns"][] = "delivery_flag";
$proto275["m_columns"][] = "refining_weight";
$proto275["m_columns"][] = "line_chat_url";
$proto275["m_columns"][] = "royal_customer_status";
$proto275["m_columns"][] = "is_business_customer";
$proto275["m_columns"][] = "is_exist_haisouhosyo";
$proto275["m_columns"][] = "meigi_hankaku_kana";
$proto275["m_columns"][] = "building_types";
$proto275["m_columns"][] = "dwelling_types";
$proto275["m_columns"][] = "is_yamato_csv";
$proto275["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto275);

$proto274["m_table"] = $obj;
$proto274["m_sql"] = "Eoc";
$proto274["m_alias"] = "";
$proto274["m_srcTableName"] = "Eoc";
$proto276=array();
$proto276["m_sql"] = "";
$proto276["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto276["m_column"]=$obj;
$proto276["m_contained"] = array();
$proto276["m_strCase"] = "";
$proto276["m_havingmode"] = false;
$proto276["m_inBrackets"] = false;
$proto276["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto276);

$proto274["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto274);

$proto0["m_fromlist"][]=$obj;
												$proto278=array();
$proto278["m_link"] = "SQLL_LEFTJOIN";
			$proto279=array();
$proto279["m_strName"] = "Eoc_area";
$proto279["m_srcTableName"] = "Eoc";
$proto279["m_columns"] = array();
$proto279["m_columns"][] = "ecc_id";
$proto279["m_columns"][] = "area";
$obj = new SQLTable($proto279);

$proto278["m_table"] = $obj;
$proto278["m_sql"] = "LEFT JOIN Eoc_area ON Eoc.ecc_id = Eoc_area.ecc_id";
$proto278["m_alias"] = "";
$proto278["m_srcTableName"] = "Eoc";
$proto280=array();
$proto280["m_sql"] = "Eoc.ecc_id = Eoc_area.ecc_id";
$proto280["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto280["m_column"]=$obj;
$proto280["m_contained"] = array();
$proto280["m_strCase"] = "= Eoc_area.ecc_id";
$proto280["m_havingmode"] = false;
$proto280["m_inBrackets"] = false;
$proto280["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto280);

$proto278["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto278);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto282=array();
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc"
));

$proto282["m_column"]=$obj;
$proto282["m_bAsc"] = 0;
$proto282["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto282);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc = createSqlQuery_Eoc();


	
		;

																																																																																																																																

$tdataEoc[".sqlquery"] = $queryData_Eoc;

include_once(getabspath("include/Eoc_events.php"));
$tableEvents["Eoc"] = new eventclass_Eoc;
$tdataEoc[".hasEvents"] = true;

?>