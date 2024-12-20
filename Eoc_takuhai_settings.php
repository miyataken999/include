<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_takuhai = array();
	$tdataEoc_takuhai[".truncateText"] = true;
	$tdataEoc_takuhai[".NumberOfChars"] = 80;
	$tdataEoc_takuhai[".ShortName"] = "Eoc_takuhai";
	$tdataEoc_takuhai[".OwnerID"] = "";
	$tdataEoc_takuhai[".OriginalTable"] = "Eoc_takuhai";

//	field labels
$fieldLabelsEoc_takuhai = array();
$fieldToolTipsEoc_takuhai = array();
$pageTitlesEoc_takuhai = array();
$placeHoldersEoc_takuhai = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_takuhai["Japanese"] = array();
	$fieldToolTipsEoc_takuhai["Japanese"] = array();
	$placeHoldersEoc_takuhai["Japanese"] = array();
	$pageTitlesEoc_takuhai["Japanese"] = array();
	$fieldLabelsEoc_takuhai["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai["Japanese"]["id"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["id"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["brand_confirm"] = "取扱ブランド";
	$fieldToolTipsEoc_takuhai["Japanese"]["brand_confirm"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["brand_confirm"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["number_of_times"] = "利用回数";
	$fieldToolTipsEoc_takuhai["Japanese"]["number_of_times"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["number_of_times"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["type_selection"] = "宅配タイプ";
	$fieldToolTipsEoc_takuhai["Japanese"]["type_selection"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["type_selection"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["reuse_box"] = "キットコンディション";
	$fieldToolTipsEoc_takuhai["Japanese"]["reuse_box"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["reuse_box"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["kit_detail"] = "キット詳細";
	$fieldToolTipsEoc_takuhai["Japanese"]["kit_detail"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["kit_detail"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["time_select"] = "Time Select";
	$fieldToolTipsEoc_takuhai["Japanese"]["time_select"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["time_select"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["time_select_hidden"] = "配送時間指定";
	$fieldToolTipsEoc_takuhai["Japanese"]["time_select_hidden"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["time_select_hidden"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["speed_box"] = "スピード箱数";
	$fieldToolTipsEoc_takuhai["Japanese"]["speed_box"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["speed_box"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["date_and_time"] = "Date And Time";
	$fieldToolTipsEoc_takuhai["Japanese"]["date_and_time"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["date_and_time"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["date_and_time_hidden"] = "希望集荷日時";
	$fieldToolTipsEoc_takuhai["Japanese"]["date_and_time_hidden"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["date_and_time_hidden"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["user_name"] = "名前";
	$fieldToolTipsEoc_takuhai["Japanese"]["user_name"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["user_name"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["user_name_kana"] = "フリガナ";
	$fieldToolTipsEoc_takuhai["Japanese"]["user_name_kana"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["user_name_kana"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["user_tel"] = "電話番号";
	$fieldToolTipsEoc_takuhai["Japanese"]["user_tel"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["user_tel"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["user_mail"] = "メアド";
	$fieldToolTipsEoc_takuhai["Japanese"]["user_mail"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["user_mail"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["user_yuubinn"] = "郵便番号";
	$fieldToolTipsEoc_takuhai["Japanese"]["user_yuubinn"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["user_yuubinn"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["user_todou"] = "都道府県";
	$fieldToolTipsEoc_takuhai["Japanese"]["user_todou"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["user_todou"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["user_sikutyouson"] = "市区町村";
	$fieldToolTipsEoc_takuhai["Japanese"]["user_sikutyouson"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["user_sikutyouson"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["user_banti"] = "市区町村以下";
	$fieldToolTipsEoc_takuhai["Japanese"]["user_banti"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["user_banti"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["tel_mail_line"] = "希望連絡方法";
	$fieldToolTipsEoc_takuhai["Japanese"]["tel_mail_line"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["tel_mail_line"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["bikou"] = "備考";
	$fieldToolTipsEoc_takuhai["Japanese"]["bikou"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["bikou"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["insurance_speed"] = "配送補償スピード";
	$fieldToolTipsEoc_takuhai["Japanese"]["insurance_speed"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["insurance_speed"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["insurance"] = "配送補償";
	$fieldToolTipsEoc_takuhai["Japanese"]["insurance"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["insurance"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["mail_magazin"] = "メルマガ";
	$fieldToolTipsEoc_takuhai["Japanese"]["mail_magazin"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["mail_magazin"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["anke_1"] = "アンケート1";
	$fieldToolTipsEoc_takuhai["Japanese"]["anke_1"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["anke_1"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["anke_2"] = "アンケート2";
	$fieldToolTipsEoc_takuhai["Japanese"]["anke_2"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["anke_2"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["anke_3"] = "アンケート3";
	$fieldToolTipsEoc_takuhai["Japanese"]["anke_3"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["anke_3"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["mail_text"] = "メール本文";
	$fieldToolTipsEoc_takuhai["Japanese"]["mail_text"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["mail_text"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["REMOTE_HOST"] = "REMOTE HOST";
	$fieldToolTipsEoc_takuhai["Japanese"]["REMOTE_HOST"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["REMOTE_HOST"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["REMOTE_ADDR"] = "REMOTE ADDR";
	$fieldToolTipsEoc_takuhai["Japanese"]["REMOTE_ADDR"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["REMOTE_ADDR"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["USER_AGENT"] = "USER AGENT";
	$fieldToolTipsEoc_takuhai["Japanese"]["USER_AGENT"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["USER_AGENT"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["HTTP_REFERER"] = "HTTP REFERER";
	$fieldToolTipsEoc_takuhai["Japanese"]["HTTP_REFERER"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["HTTP_REFERER"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["key_code"] = "暗号化メールアドレス";
	$fieldToolTipsEoc_takuhai["Japanese"]["key_code"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["key_code"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["cv_site"] = "申込サイト";
	$fieldToolTipsEoc_takuhai["Japanese"]["cv_site"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["cv_site"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["cv_device"] = "申込デバイス";
	$fieldToolTipsEoc_takuhai["Japanese"]["cv_device"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["cv_device"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["cv_page"] = "申込ページ";
	$fieldToolTipsEoc_takuhai["Japanese"]["cv_page"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["cv_page"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["cv_time"] = "申込日時";
	$fieldToolTipsEoc_takuhai["Japanese"]["cv_time"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["cv_time"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_takuhai["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["kit_denpyou"] = "着払い伝票";
	$fieldToolTipsEoc_takuhai["Japanese"]["kit_denpyou"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["kit_denpyou"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["kit_huutou"] = "クッション封筒";
	$fieldToolTipsEoc_takuhai["Japanese"]["kit_huutou"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["kit_huutou"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["kit_S"] = "キットS";
	$fieldToolTipsEoc_takuhai["Japanese"]["kit_S"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["kit_S"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["kit_M"] = "キットM";
	$fieldToolTipsEoc_takuhai["Japanese"]["kit_M"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["kit_M"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["kit_L"] = "キットL";
	$fieldToolTipsEoc_takuhai["Japanese"]["kit_L"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["kit_L"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["warehouse_instruction"] = "倉庫への指示";
	$fieldToolTipsEoc_takuhai["Japanese"]["warehouse_instruction"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["warehouse_instruction"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["delivery_slip_instruction"] = "伝票記載の指示";
	$fieldToolTipsEoc_takuhai["Japanese"]["delivery_slip_instruction"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["delivery_slip_instruction"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["haisou_bangou"] = "配送番号";
	$fieldToolTipsEoc_takuhai["Japanese"]["haisou_bangou"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["haisou_bangou"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["shipping_number"] = "荷主出荷NO";
	$fieldToolTipsEoc_takuhai["Japanese"]["shipping_number"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["shipping_number"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_takuhai["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsEoc_takuhai["Japanese"]["updated_by"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["updated_by"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["speed_num"] = "ハイシューカ申込番号";
	$fieldToolTipsEoc_takuhai["Japanese"]["speed_num"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["speed_num"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["shuka_status"] = "集荷ステータス";
	$fieldToolTipsEoc_takuhai["Japanese"]["shuka_status"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["shuka_status"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["shuka_error"] = "集荷エラー";
	$fieldToolTipsEoc_takuhai["Japanese"]["shuka_error"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["shuka_error"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["status"] = "ステータス";
	$fieldToolTipsEoc_takuhai["Japanese"]["status"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["status"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["link_area"] = "Link";
	$fieldToolTipsEoc_takuhai["Japanese"]["link_area"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["link_area"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["insurance_kingaku"] = "配送補償金額";
	$fieldToolTipsEoc_takuhai["Japanese"]["insurance_kingaku"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["insurance_kingaku"] = "";
	$fieldLabelsEoc_takuhai["Japanese"]["shipping_date"] = "発送日";
	$fieldToolTipsEoc_takuhai["Japanese"]["shipping_date"] = "";
	$placeHoldersEoc_takuhai["Japanese"]["shipping_date"] = "";
	if (count($fieldToolTipsEoc_takuhai["Japanese"]))
		$tdataEoc_takuhai[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_takuhai[""] = array();
	$fieldToolTipsEoc_takuhai[""] = array();
	$placeHoldersEoc_takuhai[""] = array();
	$pageTitlesEoc_takuhai[""] = array();
	$fieldLabelsEoc_takuhai[""]["id"] = "Id";
	$fieldToolTipsEoc_takuhai[""]["id"] = "";
	$placeHoldersEoc_takuhai[""]["id"] = "";
	$fieldLabelsEoc_takuhai[""]["brand_confirm"] = "Brand Confirm";
	$fieldToolTipsEoc_takuhai[""]["brand_confirm"] = "";
	$placeHoldersEoc_takuhai[""]["brand_confirm"] = "";
	$fieldLabelsEoc_takuhai[""]["number_of_times"] = "Number Of Times";
	$fieldToolTipsEoc_takuhai[""]["number_of_times"] = "";
	$placeHoldersEoc_takuhai[""]["number_of_times"] = "";
	$fieldLabelsEoc_takuhai[""]["type_selection"] = "Type Selection";
	$fieldToolTipsEoc_takuhai[""]["type_selection"] = "";
	$placeHoldersEoc_takuhai[""]["type_selection"] = "";
	$fieldLabelsEoc_takuhai[""]["reuse_box"] = "Reuse Box";
	$fieldToolTipsEoc_takuhai[""]["reuse_box"] = "";
	$placeHoldersEoc_takuhai[""]["reuse_box"] = "";
	$fieldLabelsEoc_takuhai[""]["kit_detail"] = "Kit Detail";
	$fieldToolTipsEoc_takuhai[""]["kit_detail"] = "";
	$placeHoldersEoc_takuhai[""]["kit_detail"] = "";
	$fieldLabelsEoc_takuhai[""]["time_select"] = "Time Select";
	$fieldToolTipsEoc_takuhai[""]["time_select"] = "";
	$placeHoldersEoc_takuhai[""]["time_select"] = "";
	$fieldLabelsEoc_takuhai[""]["time_select_hidden"] = "Time Select Hidden";
	$fieldToolTipsEoc_takuhai[""]["time_select_hidden"] = "";
	$placeHoldersEoc_takuhai[""]["time_select_hidden"] = "";
	$fieldLabelsEoc_takuhai[""]["speed_box"] = "Speed Box";
	$fieldToolTipsEoc_takuhai[""]["speed_box"] = "";
	$placeHoldersEoc_takuhai[""]["speed_box"] = "";
	$fieldLabelsEoc_takuhai[""]["date_and_time"] = "Date And Time";
	$fieldToolTipsEoc_takuhai[""]["date_and_time"] = "";
	$placeHoldersEoc_takuhai[""]["date_and_time"] = "";
	$fieldLabelsEoc_takuhai[""]["date_and_time_hidden"] = "Date And Time Hidden";
	$fieldToolTipsEoc_takuhai[""]["date_and_time_hidden"] = "";
	$placeHoldersEoc_takuhai[""]["date_and_time_hidden"] = "";
	$fieldLabelsEoc_takuhai[""]["user_name"] = "User Name";
	$fieldToolTipsEoc_takuhai[""]["user_name"] = "";
	$placeHoldersEoc_takuhai[""]["user_name"] = "";
	$fieldLabelsEoc_takuhai[""]["user_name_kana"] = "User Name Kana";
	$fieldToolTipsEoc_takuhai[""]["user_name_kana"] = "";
	$placeHoldersEoc_takuhai[""]["user_name_kana"] = "";
	$fieldLabelsEoc_takuhai[""]["user_tel"] = "User Tel";
	$fieldToolTipsEoc_takuhai[""]["user_tel"] = "";
	$placeHoldersEoc_takuhai[""]["user_tel"] = "";
	$fieldLabelsEoc_takuhai[""]["user_mail"] = "User Mail";
	$fieldToolTipsEoc_takuhai[""]["user_mail"] = "";
	$placeHoldersEoc_takuhai[""]["user_mail"] = "";
	$fieldLabelsEoc_takuhai[""]["user_yuubinn"] = "User Yuubinn";
	$fieldToolTipsEoc_takuhai[""]["user_yuubinn"] = "";
	$placeHoldersEoc_takuhai[""]["user_yuubinn"] = "";
	$fieldLabelsEoc_takuhai[""]["user_todou"] = "User Todou";
	$fieldToolTipsEoc_takuhai[""]["user_todou"] = "";
	$placeHoldersEoc_takuhai[""]["user_todou"] = "";
	$fieldLabelsEoc_takuhai[""]["user_sikutyouson"] = "User Sikutyouson";
	$fieldToolTipsEoc_takuhai[""]["user_sikutyouson"] = "";
	$placeHoldersEoc_takuhai[""]["user_sikutyouson"] = "";
	$fieldLabelsEoc_takuhai[""]["user_banti"] = "User Banti";
	$fieldToolTipsEoc_takuhai[""]["user_banti"] = "";
	$placeHoldersEoc_takuhai[""]["user_banti"] = "";
	$fieldLabelsEoc_takuhai[""]["tel_mail_line"] = "Tel Mail Line";
	$fieldToolTipsEoc_takuhai[""]["tel_mail_line"] = "";
	$placeHoldersEoc_takuhai[""]["tel_mail_line"] = "";
	$fieldLabelsEoc_takuhai[""]["bikou"] = "Bikou";
	$fieldToolTipsEoc_takuhai[""]["bikou"] = "";
	$placeHoldersEoc_takuhai[""]["bikou"] = "";
	$fieldLabelsEoc_takuhai[""]["insurance_speed"] = "Insurance Speed";
	$fieldToolTipsEoc_takuhai[""]["insurance_speed"] = "";
	$placeHoldersEoc_takuhai[""]["insurance_speed"] = "";
	$fieldLabelsEoc_takuhai[""]["insurance"] = "Insurance";
	$fieldToolTipsEoc_takuhai[""]["insurance"] = "";
	$placeHoldersEoc_takuhai[""]["insurance"] = "";
	$fieldLabelsEoc_takuhai[""]["mail_magazin"] = "Mail Magazin";
	$fieldToolTipsEoc_takuhai[""]["mail_magazin"] = "";
	$placeHoldersEoc_takuhai[""]["mail_magazin"] = "";
	$fieldLabelsEoc_takuhai[""]["anke_1"] = "Anke 1";
	$fieldToolTipsEoc_takuhai[""]["anke_1"] = "";
	$placeHoldersEoc_takuhai[""]["anke_1"] = "";
	$fieldLabelsEoc_takuhai[""]["anke_2"] = "Anke 2";
	$fieldToolTipsEoc_takuhai[""]["anke_2"] = "";
	$placeHoldersEoc_takuhai[""]["anke_2"] = "";
	$fieldLabelsEoc_takuhai[""]["anke_3"] = "Anke 3";
	$fieldToolTipsEoc_takuhai[""]["anke_3"] = "";
	$placeHoldersEoc_takuhai[""]["anke_3"] = "";
	$fieldLabelsEoc_takuhai[""]["mail_text"] = "Mail Text";
	$fieldToolTipsEoc_takuhai[""]["mail_text"] = "";
	$placeHoldersEoc_takuhai[""]["mail_text"] = "";
	$fieldLabelsEoc_takuhai[""]["REMOTE_HOST"] = "REMOTE HOST";
	$fieldToolTipsEoc_takuhai[""]["REMOTE_HOST"] = "";
	$placeHoldersEoc_takuhai[""]["REMOTE_HOST"] = "";
	$fieldLabelsEoc_takuhai[""]["REMOTE_ADDR"] = "REMOTE ADDR";
	$fieldToolTipsEoc_takuhai[""]["REMOTE_ADDR"] = "";
	$placeHoldersEoc_takuhai[""]["REMOTE_ADDR"] = "";
	$fieldLabelsEoc_takuhai[""]["USER_AGENT"] = "USER AGENT";
	$fieldToolTipsEoc_takuhai[""]["USER_AGENT"] = "";
	$placeHoldersEoc_takuhai[""]["USER_AGENT"] = "";
	$fieldLabelsEoc_takuhai[""]["HTTP_REFERER"] = "HTTP REFERER";
	$fieldToolTipsEoc_takuhai[""]["HTTP_REFERER"] = "";
	$placeHoldersEoc_takuhai[""]["HTTP_REFERER"] = "";
	$fieldLabelsEoc_takuhai[""]["key_code"] = "Key Code";
	$fieldToolTipsEoc_takuhai[""]["key_code"] = "";
	$placeHoldersEoc_takuhai[""]["key_code"] = "";
	$fieldLabelsEoc_takuhai[""]["cv_site"] = "Cv Site";
	$fieldToolTipsEoc_takuhai[""]["cv_site"] = "";
	$placeHoldersEoc_takuhai[""]["cv_site"] = "";
	$fieldLabelsEoc_takuhai[""]["cv_device"] = "Cv Device";
	$fieldToolTipsEoc_takuhai[""]["cv_device"] = "";
	$placeHoldersEoc_takuhai[""]["cv_device"] = "";
	$fieldLabelsEoc_takuhai[""]["cv_page"] = "Cv Page";
	$fieldToolTipsEoc_takuhai[""]["cv_page"] = "";
	$placeHoldersEoc_takuhai[""]["cv_page"] = "";
	$fieldLabelsEoc_takuhai[""]["cv_time"] = "Cv Time";
	$fieldToolTipsEoc_takuhai[""]["cv_time"] = "";
	$placeHoldersEoc_takuhai[""]["cv_time"] = "";
	$fieldLabelsEoc_takuhai[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_takuhai[""]["ecc_id"] = "";
	$placeHoldersEoc_takuhai[""]["ecc_id"] = "";
	$fieldLabelsEoc_takuhai[""]["kit_denpyou"] = "Kit Denpyou";
	$fieldToolTipsEoc_takuhai[""]["kit_denpyou"] = "";
	$placeHoldersEoc_takuhai[""]["kit_denpyou"] = "";
	$fieldLabelsEoc_takuhai[""]["kit_huutou"] = "Kit Huutou";
	$fieldToolTipsEoc_takuhai[""]["kit_huutou"] = "";
	$placeHoldersEoc_takuhai[""]["kit_huutou"] = "";
	$fieldLabelsEoc_takuhai[""]["kit_S"] = "Kit S";
	$fieldToolTipsEoc_takuhai[""]["kit_S"] = "";
	$placeHoldersEoc_takuhai[""]["kit_S"] = "";
	$fieldLabelsEoc_takuhai[""]["kit_M"] = "Kit M";
	$fieldToolTipsEoc_takuhai[""]["kit_M"] = "";
	$placeHoldersEoc_takuhai[""]["kit_M"] = "";
	$fieldLabelsEoc_takuhai[""]["kit_L"] = "Kit L";
	$fieldToolTipsEoc_takuhai[""]["kit_L"] = "";
	$placeHoldersEoc_takuhai[""]["kit_L"] = "";
	$fieldLabelsEoc_takuhai[""]["warehouse_instruction"] = "Warehouse Instruction";
	$fieldToolTipsEoc_takuhai[""]["warehouse_instruction"] = "";
	$placeHoldersEoc_takuhai[""]["warehouse_instruction"] = "";
	$fieldLabelsEoc_takuhai[""]["delivery_slip_instruction"] = "Delivery Slip Instruction";
	$fieldToolTipsEoc_takuhai[""]["delivery_slip_instruction"] = "";
	$placeHoldersEoc_takuhai[""]["delivery_slip_instruction"] = "";
	$fieldLabelsEoc_takuhai[""]["haisou_bangou"] = "Haisou Bangou";
	$fieldToolTipsEoc_takuhai[""]["haisou_bangou"] = "";
	$placeHoldersEoc_takuhai[""]["haisou_bangou"] = "";
	$fieldLabelsEoc_takuhai[""]["shipping_number"] = "Shipping Number";
	$fieldToolTipsEoc_takuhai[""]["shipping_number"] = "";
	$placeHoldersEoc_takuhai[""]["shipping_number"] = "";
	$fieldLabelsEoc_takuhai[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_takuhai[""]["updated_at"] = "";
	$placeHoldersEoc_takuhai[""]["updated_at"] = "";
	$fieldLabelsEoc_takuhai[""]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_takuhai[""]["updated_by"] = "";
	$placeHoldersEoc_takuhai[""]["updated_by"] = "";
	$fieldLabelsEoc_takuhai[""]["speed_num"] = "Speed Num";
	$fieldToolTipsEoc_takuhai[""]["speed_num"] = "";
	$placeHoldersEoc_takuhai[""]["speed_num"] = "";
	$fieldLabelsEoc_takuhai[""]["shuka_status"] = "Shuka Status";
	$fieldToolTipsEoc_takuhai[""]["shuka_status"] = "";
	$placeHoldersEoc_takuhai[""]["shuka_status"] = "";
	$fieldLabelsEoc_takuhai[""]["shuka_error"] = "Shuka Error";
	$fieldToolTipsEoc_takuhai[""]["shuka_error"] = "";
	$placeHoldersEoc_takuhai[""]["shuka_error"] = "";
	$fieldLabelsEoc_takuhai[""]["status"] = "Status";
	$fieldToolTipsEoc_takuhai[""]["status"] = "";
	$placeHoldersEoc_takuhai[""]["status"] = "";
	$fieldLabelsEoc_takuhai[""]["link_area"] = "Link Area";
	$fieldToolTipsEoc_takuhai[""]["link_area"] = "";
	$placeHoldersEoc_takuhai[""]["link_area"] = "";
	$fieldLabelsEoc_takuhai[""]["insurance_kingaku"] = "Insurance Kingaku";
	$fieldToolTipsEoc_takuhai[""]["insurance_kingaku"] = "";
	$placeHoldersEoc_takuhai[""]["insurance_kingaku"] = "";
	$fieldLabelsEoc_takuhai[""]["shipping_date"] = "Shipping Date";
	$fieldToolTipsEoc_takuhai[""]["shipping_date"] = "";
	$placeHoldersEoc_takuhai[""]["shipping_date"] = "";
	if (count($fieldToolTipsEoc_takuhai[""]))
		$tdataEoc_takuhai[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_takuhai["English"] = array();
	$fieldToolTipsEoc_takuhai["English"] = array();
	$placeHoldersEoc_takuhai["English"] = array();
	$pageTitlesEoc_takuhai["English"] = array();
	$fieldLabelsEoc_takuhai["English"]["id"] = "Id";
	$fieldToolTipsEoc_takuhai["English"]["id"] = "";
	$placeHoldersEoc_takuhai["English"]["id"] = "";
	$fieldLabelsEoc_takuhai["English"]["brand_confirm"] = "Brand Confirm";
	$fieldToolTipsEoc_takuhai["English"]["brand_confirm"] = "";
	$placeHoldersEoc_takuhai["English"]["brand_confirm"] = "";
	$fieldLabelsEoc_takuhai["English"]["number_of_times"] = "Number Of Times";
	$fieldToolTipsEoc_takuhai["English"]["number_of_times"] = "";
	$placeHoldersEoc_takuhai["English"]["number_of_times"] = "";
	$fieldLabelsEoc_takuhai["English"]["type_selection"] = "Type Selection";
	$fieldToolTipsEoc_takuhai["English"]["type_selection"] = "";
	$placeHoldersEoc_takuhai["English"]["type_selection"] = "";
	$fieldLabelsEoc_takuhai["English"]["reuse_box"] = "Reuse Box";
	$fieldToolTipsEoc_takuhai["English"]["reuse_box"] = "";
	$placeHoldersEoc_takuhai["English"]["reuse_box"] = "";
	$fieldLabelsEoc_takuhai["English"]["kit_detail"] = "Kit Detail";
	$fieldToolTipsEoc_takuhai["English"]["kit_detail"] = "";
	$placeHoldersEoc_takuhai["English"]["kit_detail"] = "";
	$fieldLabelsEoc_takuhai["English"]["time_select"] = "Time Select";
	$fieldToolTipsEoc_takuhai["English"]["time_select"] = "";
	$placeHoldersEoc_takuhai["English"]["time_select"] = "";
	$fieldLabelsEoc_takuhai["English"]["time_select_hidden"] = "Time Select Hidden";
	$fieldToolTipsEoc_takuhai["English"]["time_select_hidden"] = "";
	$placeHoldersEoc_takuhai["English"]["time_select_hidden"] = "";
	$fieldLabelsEoc_takuhai["English"]["speed_box"] = "Speed Box";
	$fieldToolTipsEoc_takuhai["English"]["speed_box"] = "";
	$placeHoldersEoc_takuhai["English"]["speed_box"] = "";
	$fieldLabelsEoc_takuhai["English"]["date_and_time"] = "Date And Time";
	$fieldToolTipsEoc_takuhai["English"]["date_and_time"] = "";
	$placeHoldersEoc_takuhai["English"]["date_and_time"] = "";
	$fieldLabelsEoc_takuhai["English"]["date_and_time_hidden"] = "Date And Time Hidden";
	$fieldToolTipsEoc_takuhai["English"]["date_and_time_hidden"] = "";
	$placeHoldersEoc_takuhai["English"]["date_and_time_hidden"] = "";
	$fieldLabelsEoc_takuhai["English"]["user_name"] = "User Name";
	$fieldToolTipsEoc_takuhai["English"]["user_name"] = "";
	$placeHoldersEoc_takuhai["English"]["user_name"] = "";
	$fieldLabelsEoc_takuhai["English"]["user_name_kana"] = "User Name Kana";
	$fieldToolTipsEoc_takuhai["English"]["user_name_kana"] = "";
	$placeHoldersEoc_takuhai["English"]["user_name_kana"] = "";
	$fieldLabelsEoc_takuhai["English"]["user_tel"] = "User Tel";
	$fieldToolTipsEoc_takuhai["English"]["user_tel"] = "";
	$placeHoldersEoc_takuhai["English"]["user_tel"] = "";
	$fieldLabelsEoc_takuhai["English"]["user_mail"] = "User Mail";
	$fieldToolTipsEoc_takuhai["English"]["user_mail"] = "";
	$placeHoldersEoc_takuhai["English"]["user_mail"] = "";
	$fieldLabelsEoc_takuhai["English"]["user_yuubinn"] = "User Yuubinn";
	$fieldToolTipsEoc_takuhai["English"]["user_yuubinn"] = "";
	$placeHoldersEoc_takuhai["English"]["user_yuubinn"] = "";
	$fieldLabelsEoc_takuhai["English"]["user_todou"] = "User Todou";
	$fieldToolTipsEoc_takuhai["English"]["user_todou"] = "";
	$placeHoldersEoc_takuhai["English"]["user_todou"] = "";
	$fieldLabelsEoc_takuhai["English"]["user_sikutyouson"] = "User Sikutyouson";
	$fieldToolTipsEoc_takuhai["English"]["user_sikutyouson"] = "";
	$placeHoldersEoc_takuhai["English"]["user_sikutyouson"] = "";
	$fieldLabelsEoc_takuhai["English"]["user_banti"] = "User Banti";
	$fieldToolTipsEoc_takuhai["English"]["user_banti"] = "";
	$placeHoldersEoc_takuhai["English"]["user_banti"] = "";
	$fieldLabelsEoc_takuhai["English"]["tel_mail_line"] = "Tel Mail Line";
	$fieldToolTipsEoc_takuhai["English"]["tel_mail_line"] = "";
	$placeHoldersEoc_takuhai["English"]["tel_mail_line"] = "";
	$fieldLabelsEoc_takuhai["English"]["bikou"] = "Bikou";
	$fieldToolTipsEoc_takuhai["English"]["bikou"] = "";
	$placeHoldersEoc_takuhai["English"]["bikou"] = "";
	$fieldLabelsEoc_takuhai["English"]["insurance_speed"] = "Insurance Speed";
	$fieldToolTipsEoc_takuhai["English"]["insurance_speed"] = "";
	$placeHoldersEoc_takuhai["English"]["insurance_speed"] = "";
	$fieldLabelsEoc_takuhai["English"]["insurance"] = "Insurance";
	$fieldToolTipsEoc_takuhai["English"]["insurance"] = "";
	$placeHoldersEoc_takuhai["English"]["insurance"] = "";
	$fieldLabelsEoc_takuhai["English"]["mail_magazin"] = "Mail Magazin";
	$fieldToolTipsEoc_takuhai["English"]["mail_magazin"] = "";
	$placeHoldersEoc_takuhai["English"]["mail_magazin"] = "";
	$fieldLabelsEoc_takuhai["English"]["anke_1"] = "Anke 1";
	$fieldToolTipsEoc_takuhai["English"]["anke_1"] = "";
	$placeHoldersEoc_takuhai["English"]["anke_1"] = "";
	$fieldLabelsEoc_takuhai["English"]["anke_2"] = "Anke 2";
	$fieldToolTipsEoc_takuhai["English"]["anke_2"] = "";
	$placeHoldersEoc_takuhai["English"]["anke_2"] = "";
	$fieldLabelsEoc_takuhai["English"]["anke_3"] = "Anke 3";
	$fieldToolTipsEoc_takuhai["English"]["anke_3"] = "";
	$placeHoldersEoc_takuhai["English"]["anke_3"] = "";
	$fieldLabelsEoc_takuhai["English"]["mail_text"] = "Mail Text";
	$fieldToolTipsEoc_takuhai["English"]["mail_text"] = "";
	$placeHoldersEoc_takuhai["English"]["mail_text"] = "";
	$fieldLabelsEoc_takuhai["English"]["REMOTE_HOST"] = "REMOTE HOST";
	$fieldToolTipsEoc_takuhai["English"]["REMOTE_HOST"] = "";
	$placeHoldersEoc_takuhai["English"]["REMOTE_HOST"] = "";
	$fieldLabelsEoc_takuhai["English"]["REMOTE_ADDR"] = "REMOTE ADDR";
	$fieldToolTipsEoc_takuhai["English"]["REMOTE_ADDR"] = "";
	$placeHoldersEoc_takuhai["English"]["REMOTE_ADDR"] = "";
	$fieldLabelsEoc_takuhai["English"]["USER_AGENT"] = "USER AGENT";
	$fieldToolTipsEoc_takuhai["English"]["USER_AGENT"] = "";
	$placeHoldersEoc_takuhai["English"]["USER_AGENT"] = "";
	$fieldLabelsEoc_takuhai["English"]["HTTP_REFERER"] = "HTTP REFERER";
	$fieldToolTipsEoc_takuhai["English"]["HTTP_REFERER"] = "";
	$placeHoldersEoc_takuhai["English"]["HTTP_REFERER"] = "";
	$fieldLabelsEoc_takuhai["English"]["key_code"] = "Key Code";
	$fieldToolTipsEoc_takuhai["English"]["key_code"] = "";
	$placeHoldersEoc_takuhai["English"]["key_code"] = "";
	$fieldLabelsEoc_takuhai["English"]["cv_site"] = "Cv Site";
	$fieldToolTipsEoc_takuhai["English"]["cv_site"] = "";
	$placeHoldersEoc_takuhai["English"]["cv_site"] = "";
	$fieldLabelsEoc_takuhai["English"]["cv_device"] = "Cv Device";
	$fieldToolTipsEoc_takuhai["English"]["cv_device"] = "";
	$placeHoldersEoc_takuhai["English"]["cv_device"] = "";
	$fieldLabelsEoc_takuhai["English"]["cv_page"] = "Cv Page";
	$fieldToolTipsEoc_takuhai["English"]["cv_page"] = "";
	$placeHoldersEoc_takuhai["English"]["cv_page"] = "";
	$fieldLabelsEoc_takuhai["English"]["cv_time"] = "Cv Time";
	$fieldToolTipsEoc_takuhai["English"]["cv_time"] = "";
	$placeHoldersEoc_takuhai["English"]["cv_time"] = "";
	$fieldLabelsEoc_takuhai["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_takuhai["English"]["ecc_id"] = "";
	$placeHoldersEoc_takuhai["English"]["ecc_id"] = "";
	$fieldLabelsEoc_takuhai["English"]["kit_denpyou"] = "Kit Denpyou";
	$fieldToolTipsEoc_takuhai["English"]["kit_denpyou"] = "";
	$placeHoldersEoc_takuhai["English"]["kit_denpyou"] = "";
	$fieldLabelsEoc_takuhai["English"]["kit_huutou"] = "Kit Huutou";
	$fieldToolTipsEoc_takuhai["English"]["kit_huutou"] = "";
	$placeHoldersEoc_takuhai["English"]["kit_huutou"] = "";
	$fieldLabelsEoc_takuhai["English"]["kit_S"] = "Kit S";
	$fieldToolTipsEoc_takuhai["English"]["kit_S"] = "";
	$placeHoldersEoc_takuhai["English"]["kit_S"] = "";
	$fieldLabelsEoc_takuhai["English"]["kit_M"] = "Kit M";
	$fieldToolTipsEoc_takuhai["English"]["kit_M"] = "";
	$placeHoldersEoc_takuhai["English"]["kit_M"] = "";
	$fieldLabelsEoc_takuhai["English"]["kit_L"] = "Kit L";
	$fieldToolTipsEoc_takuhai["English"]["kit_L"] = "";
	$placeHoldersEoc_takuhai["English"]["kit_L"] = "";
	$fieldLabelsEoc_takuhai["English"]["warehouse_instruction"] = "Warehouse Instruction";
	$fieldToolTipsEoc_takuhai["English"]["warehouse_instruction"] = "";
	$placeHoldersEoc_takuhai["English"]["warehouse_instruction"] = "";
	$fieldLabelsEoc_takuhai["English"]["delivery_slip_instruction"] = "Delivery Slip Instruction";
	$fieldToolTipsEoc_takuhai["English"]["delivery_slip_instruction"] = "";
	$placeHoldersEoc_takuhai["English"]["delivery_slip_instruction"] = "";
	$fieldLabelsEoc_takuhai["English"]["haisou_bangou"] = "Haisou Bangou";
	$fieldToolTipsEoc_takuhai["English"]["haisou_bangou"] = "";
	$placeHoldersEoc_takuhai["English"]["haisou_bangou"] = "";
	$fieldLabelsEoc_takuhai["English"]["shipping_number"] = "Shipping Number";
	$fieldToolTipsEoc_takuhai["English"]["shipping_number"] = "";
	$placeHoldersEoc_takuhai["English"]["shipping_number"] = "";
	$fieldLabelsEoc_takuhai["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_takuhai["English"]["updated_at"] = "";
	$placeHoldersEoc_takuhai["English"]["updated_at"] = "";
	$fieldLabelsEoc_takuhai["English"]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_takuhai["English"]["updated_by"] = "";
	$placeHoldersEoc_takuhai["English"]["updated_by"] = "";
	$fieldLabelsEoc_takuhai["English"]["speed_num"] = "Speed Num";
	$fieldToolTipsEoc_takuhai["English"]["speed_num"] = "";
	$placeHoldersEoc_takuhai["English"]["speed_num"] = "";
	$fieldLabelsEoc_takuhai["English"]["shuka_status"] = "Shuka Status";
	$fieldToolTipsEoc_takuhai["English"]["shuka_status"] = "";
	$placeHoldersEoc_takuhai["English"]["shuka_status"] = "";
	$fieldLabelsEoc_takuhai["English"]["shuka_error"] = "Shuka Error";
	$fieldToolTipsEoc_takuhai["English"]["shuka_error"] = "";
	$placeHoldersEoc_takuhai["English"]["shuka_error"] = "";
	$fieldLabelsEoc_takuhai["English"]["status"] = "Status";
	$fieldToolTipsEoc_takuhai["English"]["status"] = "";
	$placeHoldersEoc_takuhai["English"]["status"] = "";
	$fieldLabelsEoc_takuhai["English"]["link_area"] = "Link Area";
	$fieldToolTipsEoc_takuhai["English"]["link_area"] = "";
	$placeHoldersEoc_takuhai["English"]["link_area"] = "";
	$fieldLabelsEoc_takuhai["English"]["insurance_kingaku"] = "Insurance Kingaku";
	$fieldToolTipsEoc_takuhai["English"]["insurance_kingaku"] = "";
	$placeHoldersEoc_takuhai["English"]["insurance_kingaku"] = "";
	$fieldLabelsEoc_takuhai["English"]["shipping_date"] = "Shipping Date";
	$fieldToolTipsEoc_takuhai["English"]["shipping_date"] = "";
	$placeHoldersEoc_takuhai["English"]["shipping_date"] = "";
	if (count($fieldToolTipsEoc_takuhai["English"]))
		$tdataEoc_takuhai[".isUseToolTips"] = true;
}


	$tdataEoc_takuhai[".NCSearch"] = true;



$tdataEoc_takuhai[".shortTableName"] = "Eoc_takuhai";
$tdataEoc_takuhai[".nSecOptions"] = 0;
$tdataEoc_takuhai[".recsPerRowPrint"] = 1;
$tdataEoc_takuhai[".mainTableOwnerID"] = "";
$tdataEoc_takuhai[".moveNext"] = 1;
$tdataEoc_takuhai[".entityType"] = 0;

$tdataEoc_takuhai[".strOriginalTableName"] = "Eoc_takuhai";

	



$tdataEoc_takuhai[".showAddInPopup"] = false;

$tdataEoc_takuhai[".showEditInPopup"] = false;

$tdataEoc_takuhai[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_takuhai[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_takuhai[".fieldsForRegister"] = array();

$tdataEoc_takuhai[".listAjax"] = false;

	$tdataEoc_takuhai[".audit"] = true;

	$tdataEoc_takuhai[".locking"] = false;



$tdataEoc_takuhai[".list"] = true;

$tdataEoc_takuhai[".inlineEdit"] = true;


$tdataEoc_takuhai[".reorderRecordsByHeader"] = true;



$tdataEoc_takuhai[".inlineAdd"] = true;
$tdataEoc_takuhai[".view"] = true;

$tdataEoc_takuhai[".import"] = true;

$tdataEoc_takuhai[".exportTo"] = true;

$tdataEoc_takuhai[".printFriendly"] = true;

$tdataEoc_takuhai[".delete"] = true;

$tdataEoc_takuhai[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_takuhai[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_takuhai[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_takuhai[".searchSaving"] = false;
//

$tdataEoc_takuhai[".showSearchPanel"] = true;
		$tdataEoc_takuhai[".flexibleSearch"] = true;

$tdataEoc_takuhai[".isUseAjaxSuggest"] = true;

$tdataEoc_takuhai[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdataEoc_takuhai[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_takuhai[".buttonsAdded"] = false;

$tdataEoc_takuhai[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_takuhai[".isUseTimeForSearch"] = false;



$tdataEoc_takuhai[".badgeColor"] = "d2af80";

$tdataEoc_takuhai[".detailsLinksOnList"] = "1";

$tdataEoc_takuhai[".allSearchFields"] = array();
$tdataEoc_takuhai[".filterFields"] = array();
$tdataEoc_takuhai[".requiredSearchFields"] = array();

$tdataEoc_takuhai[".allSearchFields"][] = "shipping_date";
	$tdataEoc_takuhai[".allSearchFields"][] = "insurance_kingaku";
	$tdataEoc_takuhai[".allSearchFields"][] = "updated_at";
	$tdataEoc_takuhai[".allSearchFields"][] = "status";
	$tdataEoc_takuhai[".allSearchFields"][] = "shuka_error";
	$tdataEoc_takuhai[".allSearchFields"][] = "shuka_status";
	$tdataEoc_takuhai[".allSearchFields"][] = "speed_num";
	$tdataEoc_takuhai[".allSearchFields"][] = "updated_by";
	$tdataEoc_takuhai[".allSearchFields"][] = "id";
	$tdataEoc_takuhai[".allSearchFields"][] = "brand_confirm";
	$tdataEoc_takuhai[".allSearchFields"][] = "number_of_times";
	$tdataEoc_takuhai[".allSearchFields"][] = "type_selection";
	$tdataEoc_takuhai[".allSearchFields"][] = "reuse_box";
	$tdataEoc_takuhai[".allSearchFields"][] = "kit_detail";
	$tdataEoc_takuhai[".allSearchFields"][] = "time_select_hidden";
	$tdataEoc_takuhai[".allSearchFields"][] = "speed_box";
	$tdataEoc_takuhai[".allSearchFields"][] = "date_and_time_hidden";
	$tdataEoc_takuhai[".allSearchFields"][] = "user_name";
	$tdataEoc_takuhai[".allSearchFields"][] = "user_name_kana";
	$tdataEoc_takuhai[".allSearchFields"][] = "user_tel";
	$tdataEoc_takuhai[".allSearchFields"][] = "user_mail";
	$tdataEoc_takuhai[".allSearchFields"][] = "user_yuubinn";
	$tdataEoc_takuhai[".allSearchFields"][] = "user_todou";
	$tdataEoc_takuhai[".allSearchFields"][] = "user_sikutyouson";
	$tdataEoc_takuhai[".allSearchFields"][] = "user_banti";
	$tdataEoc_takuhai[".allSearchFields"][] = "tel_mail_line";
	$tdataEoc_takuhai[".allSearchFields"][] = "bikou";
	$tdataEoc_takuhai[".allSearchFields"][] = "insurance_speed";
	$tdataEoc_takuhai[".allSearchFields"][] = "insurance";
	$tdataEoc_takuhai[".allSearchFields"][] = "mail_magazin";
	$tdataEoc_takuhai[".allSearchFields"][] = "anke_1";
	$tdataEoc_takuhai[".allSearchFields"][] = "anke_2";
	$tdataEoc_takuhai[".allSearchFields"][] = "anke_3";
	$tdataEoc_takuhai[".allSearchFields"][] = "mail_text";
	$tdataEoc_takuhai[".allSearchFields"][] = "REMOTE_HOST";
	$tdataEoc_takuhai[".allSearchFields"][] = "REMOTE_ADDR";
	$tdataEoc_takuhai[".allSearchFields"][] = "USER_AGENT";
	$tdataEoc_takuhai[".allSearchFields"][] = "HTTP_REFERER";
	$tdataEoc_takuhai[".allSearchFields"][] = "key_code";
	$tdataEoc_takuhai[".allSearchFields"][] = "cv_site";
	$tdataEoc_takuhai[".allSearchFields"][] = "cv_device";
	$tdataEoc_takuhai[".allSearchFields"][] = "cv_page";
	$tdataEoc_takuhai[".allSearchFields"][] = "cv_time";
	$tdataEoc_takuhai[".allSearchFields"][] = "ecc_id";
	$tdataEoc_takuhai[".allSearchFields"][] = "kit_denpyou";
	$tdataEoc_takuhai[".allSearchFields"][] = "kit_huutou";
	$tdataEoc_takuhai[".allSearchFields"][] = "kit_S";
	$tdataEoc_takuhai[".allSearchFields"][] = "kit_M";
	$tdataEoc_takuhai[".allSearchFields"][] = "kit_L";
	$tdataEoc_takuhai[".allSearchFields"][] = "warehouse_instruction";
	$tdataEoc_takuhai[".allSearchFields"][] = "delivery_slip_instruction";
	$tdataEoc_takuhai[".allSearchFields"][] = "haisou_bangou";
	$tdataEoc_takuhai[".allSearchFields"][] = "shipping_number";
	

$tdataEoc_takuhai[".googleLikeFields"] = array();
$tdataEoc_takuhai[".googleLikeFields"][] = "link_area";
$tdataEoc_takuhai[".googleLikeFields"][] = "id";
$tdataEoc_takuhai[".googleLikeFields"][] = "brand_confirm";
$tdataEoc_takuhai[".googleLikeFields"][] = "number_of_times";
$tdataEoc_takuhai[".googleLikeFields"][] = "type_selection";
$tdataEoc_takuhai[".googleLikeFields"][] = "reuse_box";
$tdataEoc_takuhai[".googleLikeFields"][] = "kit_detail";
$tdataEoc_takuhai[".googleLikeFields"][] = "time_select";
$tdataEoc_takuhai[".googleLikeFields"][] = "time_select_hidden";
$tdataEoc_takuhai[".googleLikeFields"][] = "speed_box";
$tdataEoc_takuhai[".googleLikeFields"][] = "date_and_time";
$tdataEoc_takuhai[".googleLikeFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai[".googleLikeFields"][] = "user_name";
$tdataEoc_takuhai[".googleLikeFields"][] = "user_name_kana";
$tdataEoc_takuhai[".googleLikeFields"][] = "user_tel";
$tdataEoc_takuhai[".googleLikeFields"][] = "user_mail";
$tdataEoc_takuhai[".googleLikeFields"][] = "user_yuubinn";
$tdataEoc_takuhai[".googleLikeFields"][] = "user_todou";
$tdataEoc_takuhai[".googleLikeFields"][] = "user_sikutyouson";
$tdataEoc_takuhai[".googleLikeFields"][] = "user_banti";
$tdataEoc_takuhai[".googleLikeFields"][] = "tel_mail_line";
$tdataEoc_takuhai[".googleLikeFields"][] = "bikou";
$tdataEoc_takuhai[".googleLikeFields"][] = "insurance_speed";
$tdataEoc_takuhai[".googleLikeFields"][] = "insurance";
$tdataEoc_takuhai[".googleLikeFields"][] = "mail_magazin";
$tdataEoc_takuhai[".googleLikeFields"][] = "anke_1";
$tdataEoc_takuhai[".googleLikeFields"][] = "anke_2";
$tdataEoc_takuhai[".googleLikeFields"][] = "anke_3";
$tdataEoc_takuhai[".googleLikeFields"][] = "mail_text";
$tdataEoc_takuhai[".googleLikeFields"][] = "REMOTE_HOST";
$tdataEoc_takuhai[".googleLikeFields"][] = "REMOTE_ADDR";
$tdataEoc_takuhai[".googleLikeFields"][] = "USER_AGENT";
$tdataEoc_takuhai[".googleLikeFields"][] = "HTTP_REFERER";
$tdataEoc_takuhai[".googleLikeFields"][] = "key_code";
$tdataEoc_takuhai[".googleLikeFields"][] = "cv_site";
$tdataEoc_takuhai[".googleLikeFields"][] = "cv_device";
$tdataEoc_takuhai[".googleLikeFields"][] = "cv_page";
$tdataEoc_takuhai[".googleLikeFields"][] = "cv_time";
$tdataEoc_takuhai[".googleLikeFields"][] = "ecc_id";
$tdataEoc_takuhai[".googleLikeFields"][] = "kit_denpyou";
$tdataEoc_takuhai[".googleLikeFields"][] = "kit_huutou";
$tdataEoc_takuhai[".googleLikeFields"][] = "kit_S";
$tdataEoc_takuhai[".googleLikeFields"][] = "kit_M";
$tdataEoc_takuhai[".googleLikeFields"][] = "kit_L";
$tdataEoc_takuhai[".googleLikeFields"][] = "warehouse_instruction";
$tdataEoc_takuhai[".googleLikeFields"][] = "delivery_slip_instruction";
$tdataEoc_takuhai[".googleLikeFields"][] = "haisou_bangou";
$tdataEoc_takuhai[".googleLikeFields"][] = "shipping_number";
$tdataEoc_takuhai[".googleLikeFields"][] = "updated_at";
$tdataEoc_takuhai[".googleLikeFields"][] = "updated_by";
$tdataEoc_takuhai[".googleLikeFields"][] = "speed_num";
$tdataEoc_takuhai[".googleLikeFields"][] = "shuka_status";
$tdataEoc_takuhai[".googleLikeFields"][] = "shuka_error";
$tdataEoc_takuhai[".googleLikeFields"][] = "status";
$tdataEoc_takuhai[".googleLikeFields"][] = "insurance_kingaku";
$tdataEoc_takuhai[".googleLikeFields"][] = "shipping_date";


$tdataEoc_takuhai[".advSearchFields"] = array();
$tdataEoc_takuhai[".advSearchFields"][] = "shipping_date";
$tdataEoc_takuhai[".advSearchFields"][] = "insurance_kingaku";
$tdataEoc_takuhai[".advSearchFields"][] = "updated_at";
$tdataEoc_takuhai[".advSearchFields"][] = "status";
$tdataEoc_takuhai[".advSearchFields"][] = "shuka_error";
$tdataEoc_takuhai[".advSearchFields"][] = "shuka_status";
$tdataEoc_takuhai[".advSearchFields"][] = "speed_num";
$tdataEoc_takuhai[".advSearchFields"][] = "updated_by";
$tdataEoc_takuhai[".advSearchFields"][] = "id";
$tdataEoc_takuhai[".advSearchFields"][] = "brand_confirm";
$tdataEoc_takuhai[".advSearchFields"][] = "number_of_times";
$tdataEoc_takuhai[".advSearchFields"][] = "type_selection";
$tdataEoc_takuhai[".advSearchFields"][] = "reuse_box";
$tdataEoc_takuhai[".advSearchFields"][] = "kit_detail";
$tdataEoc_takuhai[".advSearchFields"][] = "time_select_hidden";
$tdataEoc_takuhai[".advSearchFields"][] = "speed_box";
$tdataEoc_takuhai[".advSearchFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai[".advSearchFields"][] = "user_name";
$tdataEoc_takuhai[".advSearchFields"][] = "user_name_kana";
$tdataEoc_takuhai[".advSearchFields"][] = "user_tel";
$tdataEoc_takuhai[".advSearchFields"][] = "user_mail";
$tdataEoc_takuhai[".advSearchFields"][] = "user_yuubinn";
$tdataEoc_takuhai[".advSearchFields"][] = "user_todou";
$tdataEoc_takuhai[".advSearchFields"][] = "user_sikutyouson";
$tdataEoc_takuhai[".advSearchFields"][] = "user_banti";
$tdataEoc_takuhai[".advSearchFields"][] = "tel_mail_line";
$tdataEoc_takuhai[".advSearchFields"][] = "bikou";
$tdataEoc_takuhai[".advSearchFields"][] = "insurance_speed";
$tdataEoc_takuhai[".advSearchFields"][] = "insurance";
$tdataEoc_takuhai[".advSearchFields"][] = "mail_magazin";
$tdataEoc_takuhai[".advSearchFields"][] = "anke_1";
$tdataEoc_takuhai[".advSearchFields"][] = "anke_2";
$tdataEoc_takuhai[".advSearchFields"][] = "anke_3";
$tdataEoc_takuhai[".advSearchFields"][] = "mail_text";
$tdataEoc_takuhai[".advSearchFields"][] = "REMOTE_HOST";
$tdataEoc_takuhai[".advSearchFields"][] = "REMOTE_ADDR";
$tdataEoc_takuhai[".advSearchFields"][] = "USER_AGENT";
$tdataEoc_takuhai[".advSearchFields"][] = "HTTP_REFERER";
$tdataEoc_takuhai[".advSearchFields"][] = "key_code";
$tdataEoc_takuhai[".advSearchFields"][] = "cv_site";
$tdataEoc_takuhai[".advSearchFields"][] = "cv_device";
$tdataEoc_takuhai[".advSearchFields"][] = "cv_page";
$tdataEoc_takuhai[".advSearchFields"][] = "cv_time";
$tdataEoc_takuhai[".advSearchFields"][] = "ecc_id";
$tdataEoc_takuhai[".advSearchFields"][] = "kit_denpyou";
$tdataEoc_takuhai[".advSearchFields"][] = "kit_huutou";
$tdataEoc_takuhai[".advSearchFields"][] = "kit_S";
$tdataEoc_takuhai[".advSearchFields"][] = "kit_M";
$tdataEoc_takuhai[".advSearchFields"][] = "kit_L";
$tdataEoc_takuhai[".advSearchFields"][] = "warehouse_instruction";
$tdataEoc_takuhai[".advSearchFields"][] = "delivery_slip_instruction";
$tdataEoc_takuhai[".advSearchFields"][] = "haisou_bangou";
$tdataEoc_takuhai[".advSearchFields"][] = "shipping_number";

$tdataEoc_takuhai[".tableType"] = "list";

$tdataEoc_takuhai[".printerPageOrientation"] = 0;
$tdataEoc_takuhai[".nPrinterPageScale"] = 100;

$tdataEoc_takuhai[".nPrinterSplitRecords"] = 40;

$tdataEoc_takuhai[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_takuhai[".geocodingEnabled"] = false;





$tdataEoc_takuhai[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_takuhai[".pageSize"] = 20;

$tdataEoc_takuhai[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_takuhai[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_takuhai[".orderindexes"] = array();

$tdataEoc_takuhai[".sqlHead"] = "SELECT \"\" AS `link_area`,  `id`,  `brand_confirm`,  `number_of_times`,  `type_selection`,  `reuse_box`,  `kit_detail`,  `time_select`,  `time_select_hidden`,  `speed_box`,  `date_and_time`,  `date_and_time_hidden`,  `user_name`,  `user_name_kana`,  `user_tel`,  `user_mail`,  `user_yuubinn`,  `user_todou`,  `user_sikutyouson`,  `user_banti`,  `tel_mail_line`,  `bikou`,  `insurance_speed`,  `insurance`,  `mail_magazin`,  `anke_1`,  `anke_2`,  `anke_3`,  `mail_text`,  `REMOTE_HOST`,  `REMOTE_ADDR`,  `USER_AGENT`,  `HTTP_REFERER`,  `key_code`,  `cv_site`,  `cv_device`,  `cv_page`,  `cv_time`,  `ecc_id`,  `kit_denpyou`,  `kit_huutou`,  `kit_S`,  `kit_M`,  `kit_L`,  `warehouse_instruction`,  `delivery_slip_instruction`,  `haisou_bangou`,  `shipping_number`,  `updated_at`,  `updated_by`,  `speed_num`,  `shuka_status`,  `shuka_error`,  `status`,  `insurance_kingaku`,  `shipping_date`";
$tdataEoc_takuhai[".sqlFrom"] = "FROM `Eoc_takuhai`";
$tdataEoc_takuhai[".sqlWhereExpr"] = "";
$tdataEoc_takuhai[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_takuhai[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_takuhai[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_takuhai[".highlightSearchResults"] = true;

$tableKeysEoc_takuhai = array();
$tableKeysEoc_takuhai[] = "id";
$tdataEoc_takuhai[".Keys"] = $tableKeysEoc_takuhai;

$tdataEoc_takuhai[".listFields"] = array();
$tdataEoc_takuhai[".listFields"][] = "link_area";
$tdataEoc_takuhai[".listFields"][] = "status";
$tdataEoc_takuhai[".listFields"][] = "shipping_date";
$tdataEoc_takuhai[".listFields"][] = "speed_num";
$tdataEoc_takuhai[".listFields"][] = "shuka_error";
$tdataEoc_takuhai[".listFields"][] = "shuka_status";
$tdataEoc_takuhai[".listFields"][] = "shipping_number";
$tdataEoc_takuhai[".listFields"][] = "haisou_bangou";
$tdataEoc_takuhai[".listFields"][] = "warehouse_instruction";
$tdataEoc_takuhai[".listFields"][] = "delivery_slip_instruction";
$tdataEoc_takuhai[".listFields"][] = "kit_denpyou";
$tdataEoc_takuhai[".listFields"][] = "kit_huutou";
$tdataEoc_takuhai[".listFields"][] = "kit_S";
$tdataEoc_takuhai[".listFields"][] = "kit_M";
$tdataEoc_takuhai[".listFields"][] = "kit_L";
$tdataEoc_takuhai[".listFields"][] = "id";
$tdataEoc_takuhai[".listFields"][] = "ecc_id";
$tdataEoc_takuhai[".listFields"][] = "brand_confirm";
$tdataEoc_takuhai[".listFields"][] = "number_of_times";
$tdataEoc_takuhai[".listFields"][] = "type_selection";
$tdataEoc_takuhai[".listFields"][] = "reuse_box";
$tdataEoc_takuhai[".listFields"][] = "kit_detail";
$tdataEoc_takuhai[".listFields"][] = "time_select_hidden";
$tdataEoc_takuhai[".listFields"][] = "speed_box";
$tdataEoc_takuhai[".listFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai[".listFields"][] = "user_name";
$tdataEoc_takuhai[".listFields"][] = "user_name_kana";
$tdataEoc_takuhai[".listFields"][] = "user_tel";
$tdataEoc_takuhai[".listFields"][] = "user_mail";
$tdataEoc_takuhai[".listFields"][] = "user_yuubinn";
$tdataEoc_takuhai[".listFields"][] = "user_todou";
$tdataEoc_takuhai[".listFields"][] = "user_sikutyouson";
$tdataEoc_takuhai[".listFields"][] = "user_banti";
$tdataEoc_takuhai[".listFields"][] = "tel_mail_line";
$tdataEoc_takuhai[".listFields"][] = "bikou";
$tdataEoc_takuhai[".listFields"][] = "insurance_speed";
$tdataEoc_takuhai[".listFields"][] = "insurance";
$tdataEoc_takuhai[".listFields"][] = "insurance_kingaku";
$tdataEoc_takuhai[".listFields"][] = "mail_magazin";
$tdataEoc_takuhai[".listFields"][] = "anke_1";
$tdataEoc_takuhai[".listFields"][] = "anke_2";
$tdataEoc_takuhai[".listFields"][] = "anke_3";
$tdataEoc_takuhai[".listFields"][] = "mail_text";
$tdataEoc_takuhai[".listFields"][] = "REMOTE_HOST";
$tdataEoc_takuhai[".listFields"][] = "REMOTE_ADDR";
$tdataEoc_takuhai[".listFields"][] = "USER_AGENT";
$tdataEoc_takuhai[".listFields"][] = "HTTP_REFERER";
$tdataEoc_takuhai[".listFields"][] = "key_code";
$tdataEoc_takuhai[".listFields"][] = "cv_site";
$tdataEoc_takuhai[".listFields"][] = "cv_device";
$tdataEoc_takuhai[".listFields"][] = "cv_page";
$tdataEoc_takuhai[".listFields"][] = "cv_time";
$tdataEoc_takuhai[".listFields"][] = "updated_at";
$tdataEoc_takuhai[".listFields"][] = "updated_by";

$tdataEoc_takuhai[".hideMobileList"] = array();


$tdataEoc_takuhai[".viewFields"] = array();
$tdataEoc_takuhai[".viewFields"][] = "shipping_date";
$tdataEoc_takuhai[".viewFields"][] = "speed_num";
$tdataEoc_takuhai[".viewFields"][] = "status";
$tdataEoc_takuhai[".viewFields"][] = "shuka_error";
$tdataEoc_takuhai[".viewFields"][] = "shuka_status";
$tdataEoc_takuhai[".viewFields"][] = "updated_by";
$tdataEoc_takuhai[".viewFields"][] = "updated_at";
$tdataEoc_takuhai[".viewFields"][] = "id";
$tdataEoc_takuhai[".viewFields"][] = "brand_confirm";
$tdataEoc_takuhai[".viewFields"][] = "number_of_times";
$tdataEoc_takuhai[".viewFields"][] = "type_selection";
$tdataEoc_takuhai[".viewFields"][] = "reuse_box";
$tdataEoc_takuhai[".viewFields"][] = "kit_detail";
$tdataEoc_takuhai[".viewFields"][] = "time_select_hidden";
$tdataEoc_takuhai[".viewFields"][] = "speed_box";
$tdataEoc_takuhai[".viewFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai[".viewFields"][] = "user_name";
$tdataEoc_takuhai[".viewFields"][] = "user_name_kana";
$tdataEoc_takuhai[".viewFields"][] = "user_tel";
$tdataEoc_takuhai[".viewFields"][] = "user_mail";
$tdataEoc_takuhai[".viewFields"][] = "user_yuubinn";
$tdataEoc_takuhai[".viewFields"][] = "user_todou";
$tdataEoc_takuhai[".viewFields"][] = "user_sikutyouson";
$tdataEoc_takuhai[".viewFields"][] = "user_banti";
$tdataEoc_takuhai[".viewFields"][] = "tel_mail_line";
$tdataEoc_takuhai[".viewFields"][] = "bikou";
$tdataEoc_takuhai[".viewFields"][] = "insurance_speed";
$tdataEoc_takuhai[".viewFields"][] = "insurance";
$tdataEoc_takuhai[".viewFields"][] = "insurance_kingaku";
$tdataEoc_takuhai[".viewFields"][] = "mail_magazin";
$tdataEoc_takuhai[".viewFields"][] = "anke_1";
$tdataEoc_takuhai[".viewFields"][] = "anke_2";
$tdataEoc_takuhai[".viewFields"][] = "anke_3";
$tdataEoc_takuhai[".viewFields"][] = "mail_text";
$tdataEoc_takuhai[".viewFields"][] = "REMOTE_HOST";
$tdataEoc_takuhai[".viewFields"][] = "REMOTE_ADDR";
$tdataEoc_takuhai[".viewFields"][] = "USER_AGENT";
$tdataEoc_takuhai[".viewFields"][] = "HTTP_REFERER";
$tdataEoc_takuhai[".viewFields"][] = "key_code";
$tdataEoc_takuhai[".viewFields"][] = "cv_site";
$tdataEoc_takuhai[".viewFields"][] = "cv_device";
$tdataEoc_takuhai[".viewFields"][] = "cv_page";
$tdataEoc_takuhai[".viewFields"][] = "cv_time";
$tdataEoc_takuhai[".viewFields"][] = "ecc_id";
$tdataEoc_takuhai[".viewFields"][] = "kit_denpyou";
$tdataEoc_takuhai[".viewFields"][] = "kit_huutou";
$tdataEoc_takuhai[".viewFields"][] = "kit_S";
$tdataEoc_takuhai[".viewFields"][] = "kit_M";
$tdataEoc_takuhai[".viewFields"][] = "kit_L";
$tdataEoc_takuhai[".viewFields"][] = "warehouse_instruction";
$tdataEoc_takuhai[".viewFields"][] = "delivery_slip_instruction";
$tdataEoc_takuhai[".viewFields"][] = "haisou_bangou";
$tdataEoc_takuhai[".viewFields"][] = "shipping_number";

$tdataEoc_takuhai[".addFields"] = array();

$tdataEoc_takuhai[".masterListFields"] = array();
$tdataEoc_takuhai[".masterListFields"][] = "link_area";
$tdataEoc_takuhai[".masterListFields"][] = "id";
$tdataEoc_takuhai[".masterListFields"][] = "brand_confirm";
$tdataEoc_takuhai[".masterListFields"][] = "number_of_times";
$tdataEoc_takuhai[".masterListFields"][] = "type_selection";
$tdataEoc_takuhai[".masterListFields"][] = "reuse_box";
$tdataEoc_takuhai[".masterListFields"][] = "kit_detail";
$tdataEoc_takuhai[".masterListFields"][] = "time_select";
$tdataEoc_takuhai[".masterListFields"][] = "time_select_hidden";
$tdataEoc_takuhai[".masterListFields"][] = "speed_box";
$tdataEoc_takuhai[".masterListFields"][] = "date_and_time";
$tdataEoc_takuhai[".masterListFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai[".masterListFields"][] = "user_name";
$tdataEoc_takuhai[".masterListFields"][] = "user_name_kana";
$tdataEoc_takuhai[".masterListFields"][] = "user_tel";
$tdataEoc_takuhai[".masterListFields"][] = "user_mail";
$tdataEoc_takuhai[".masterListFields"][] = "user_yuubinn";
$tdataEoc_takuhai[".masterListFields"][] = "user_todou";
$tdataEoc_takuhai[".masterListFields"][] = "user_sikutyouson";
$tdataEoc_takuhai[".masterListFields"][] = "user_banti";
$tdataEoc_takuhai[".masterListFields"][] = "tel_mail_line";
$tdataEoc_takuhai[".masterListFields"][] = "bikou";
$tdataEoc_takuhai[".masterListFields"][] = "insurance_speed";
$tdataEoc_takuhai[".masterListFields"][] = "insurance";
$tdataEoc_takuhai[".masterListFields"][] = "mail_magazin";
$tdataEoc_takuhai[".masterListFields"][] = "anke_1";
$tdataEoc_takuhai[".masterListFields"][] = "anke_2";
$tdataEoc_takuhai[".masterListFields"][] = "anke_3";
$tdataEoc_takuhai[".masterListFields"][] = "mail_text";
$tdataEoc_takuhai[".masterListFields"][] = "REMOTE_HOST";
$tdataEoc_takuhai[".masterListFields"][] = "REMOTE_ADDR";
$tdataEoc_takuhai[".masterListFields"][] = "USER_AGENT";
$tdataEoc_takuhai[".masterListFields"][] = "HTTP_REFERER";
$tdataEoc_takuhai[".masterListFields"][] = "key_code";
$tdataEoc_takuhai[".masterListFields"][] = "cv_site";
$tdataEoc_takuhai[".masterListFields"][] = "cv_device";
$tdataEoc_takuhai[".masterListFields"][] = "cv_page";
$tdataEoc_takuhai[".masterListFields"][] = "cv_time";
$tdataEoc_takuhai[".masterListFields"][] = "ecc_id";
$tdataEoc_takuhai[".masterListFields"][] = "kit_denpyou";
$tdataEoc_takuhai[".masterListFields"][] = "kit_huutou";
$tdataEoc_takuhai[".masterListFields"][] = "kit_S";
$tdataEoc_takuhai[".masterListFields"][] = "kit_M";
$tdataEoc_takuhai[".masterListFields"][] = "kit_L";
$tdataEoc_takuhai[".masterListFields"][] = "warehouse_instruction";
$tdataEoc_takuhai[".masterListFields"][] = "delivery_slip_instruction";
$tdataEoc_takuhai[".masterListFields"][] = "haisou_bangou";
$tdataEoc_takuhai[".masterListFields"][] = "shipping_number";
$tdataEoc_takuhai[".masterListFields"][] = "updated_at";
$tdataEoc_takuhai[".masterListFields"][] = "updated_by";
$tdataEoc_takuhai[".masterListFields"][] = "speed_num";
$tdataEoc_takuhai[".masterListFields"][] = "shuka_status";
$tdataEoc_takuhai[".masterListFields"][] = "shuka_error";
$tdataEoc_takuhai[".masterListFields"][] = "status";
$tdataEoc_takuhai[".masterListFields"][] = "insurance_kingaku";
$tdataEoc_takuhai[".masterListFields"][] = "shipping_date";

$tdataEoc_takuhai[".inlineAddFields"] = array();
$tdataEoc_takuhai[".inlineAddFields"][] = "status";
$tdataEoc_takuhai[".inlineAddFields"][] = "shipping_date";
$tdataEoc_takuhai[".inlineAddFields"][] = "shuka_error";
$tdataEoc_takuhai[".inlineAddFields"][] = "shuka_status";
$tdataEoc_takuhai[".inlineAddFields"][] = "shipping_number";
$tdataEoc_takuhai[".inlineAddFields"][] = "haisou_bangou";
$tdataEoc_takuhai[".inlineAddFields"][] = "warehouse_instruction";
$tdataEoc_takuhai[".inlineAddFields"][] = "delivery_slip_instruction";
$tdataEoc_takuhai[".inlineAddFields"][] = "kit_denpyou";
$tdataEoc_takuhai[".inlineAddFields"][] = "kit_huutou";
$tdataEoc_takuhai[".inlineAddFields"][] = "kit_S";
$tdataEoc_takuhai[".inlineAddFields"][] = "kit_M";
$tdataEoc_takuhai[".inlineAddFields"][] = "kit_L";
$tdataEoc_takuhai[".inlineAddFields"][] = "ecc_id";
$tdataEoc_takuhai[".inlineAddFields"][] = "brand_confirm";
$tdataEoc_takuhai[".inlineAddFields"][] = "number_of_times";
$tdataEoc_takuhai[".inlineAddFields"][] = "type_selection";
$tdataEoc_takuhai[".inlineAddFields"][] = "reuse_box";
$tdataEoc_takuhai[".inlineAddFields"][] = "kit_detail";
$tdataEoc_takuhai[".inlineAddFields"][] = "time_select_hidden";
$tdataEoc_takuhai[".inlineAddFields"][] = "speed_box";
$tdataEoc_takuhai[".inlineAddFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai[".inlineAddFields"][] = "user_name";
$tdataEoc_takuhai[".inlineAddFields"][] = "user_name_kana";
$tdataEoc_takuhai[".inlineAddFields"][] = "user_tel";
$tdataEoc_takuhai[".inlineAddFields"][] = "user_mail";
$tdataEoc_takuhai[".inlineAddFields"][] = "user_yuubinn";
$tdataEoc_takuhai[".inlineAddFields"][] = "user_todou";
$tdataEoc_takuhai[".inlineAddFields"][] = "user_sikutyouson";
$tdataEoc_takuhai[".inlineAddFields"][] = "user_banti";
$tdataEoc_takuhai[".inlineAddFields"][] = "tel_mail_line";
$tdataEoc_takuhai[".inlineAddFields"][] = "bikou";
$tdataEoc_takuhai[".inlineAddFields"][] = "insurance_speed";
$tdataEoc_takuhai[".inlineAddFields"][] = "insurance";
$tdataEoc_takuhai[".inlineAddFields"][] = "insurance_kingaku";
$tdataEoc_takuhai[".inlineAddFields"][] = "mail_magazin";
$tdataEoc_takuhai[".inlineAddFields"][] = "anke_1";
$tdataEoc_takuhai[".inlineAddFields"][] = "anke_2";
$tdataEoc_takuhai[".inlineAddFields"][] = "anke_3";
$tdataEoc_takuhai[".inlineAddFields"][] = "mail_text";
$tdataEoc_takuhai[".inlineAddFields"][] = "REMOTE_HOST";
$tdataEoc_takuhai[".inlineAddFields"][] = "REMOTE_ADDR";
$tdataEoc_takuhai[".inlineAddFields"][] = "USER_AGENT";
$tdataEoc_takuhai[".inlineAddFields"][] = "HTTP_REFERER";
$tdataEoc_takuhai[".inlineAddFields"][] = "key_code";
$tdataEoc_takuhai[".inlineAddFields"][] = "cv_site";
$tdataEoc_takuhai[".inlineAddFields"][] = "cv_device";
$tdataEoc_takuhai[".inlineAddFields"][] = "cv_page";
$tdataEoc_takuhai[".inlineAddFields"][] = "cv_time";
$tdataEoc_takuhai[".inlineAddFields"][] = "updated_at";
$tdataEoc_takuhai[".inlineAddFields"][] = "updated_by";

$tdataEoc_takuhai[".editFields"] = array();

$tdataEoc_takuhai[".inlineEditFields"] = array();
$tdataEoc_takuhai[".inlineEditFields"][] = "status";
$tdataEoc_takuhai[".inlineEditFields"][] = "shipping_date";
$tdataEoc_takuhai[".inlineEditFields"][] = "shuka_error";
$tdataEoc_takuhai[".inlineEditFields"][] = "shuka_status";
$tdataEoc_takuhai[".inlineEditFields"][] = "shipping_number";
$tdataEoc_takuhai[".inlineEditFields"][] = "haisou_bangou";
$tdataEoc_takuhai[".inlineEditFields"][] = "warehouse_instruction";
$tdataEoc_takuhai[".inlineEditFields"][] = "delivery_slip_instruction";
$tdataEoc_takuhai[".inlineEditFields"][] = "kit_denpyou";
$tdataEoc_takuhai[".inlineEditFields"][] = "kit_huutou";
$tdataEoc_takuhai[".inlineEditFields"][] = "kit_S";
$tdataEoc_takuhai[".inlineEditFields"][] = "kit_M";
$tdataEoc_takuhai[".inlineEditFields"][] = "kit_L";
$tdataEoc_takuhai[".inlineEditFields"][] = "ecc_id";
$tdataEoc_takuhai[".inlineEditFields"][] = "brand_confirm";
$tdataEoc_takuhai[".inlineEditFields"][] = "number_of_times";
$tdataEoc_takuhai[".inlineEditFields"][] = "type_selection";
$tdataEoc_takuhai[".inlineEditFields"][] = "reuse_box";
$tdataEoc_takuhai[".inlineEditFields"][] = "kit_detail";
$tdataEoc_takuhai[".inlineEditFields"][] = "time_select_hidden";
$tdataEoc_takuhai[".inlineEditFields"][] = "speed_box";
$tdataEoc_takuhai[".inlineEditFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai[".inlineEditFields"][] = "user_name";
$tdataEoc_takuhai[".inlineEditFields"][] = "user_name_kana";
$tdataEoc_takuhai[".inlineEditFields"][] = "user_tel";
$tdataEoc_takuhai[".inlineEditFields"][] = "user_mail";
$tdataEoc_takuhai[".inlineEditFields"][] = "user_yuubinn";
$tdataEoc_takuhai[".inlineEditFields"][] = "user_todou";
$tdataEoc_takuhai[".inlineEditFields"][] = "user_sikutyouson";
$tdataEoc_takuhai[".inlineEditFields"][] = "user_banti";
$tdataEoc_takuhai[".inlineEditFields"][] = "tel_mail_line";
$tdataEoc_takuhai[".inlineEditFields"][] = "bikou";
$tdataEoc_takuhai[".inlineEditFields"][] = "insurance_speed";
$tdataEoc_takuhai[".inlineEditFields"][] = "insurance";
$tdataEoc_takuhai[".inlineEditFields"][] = "insurance_kingaku";
$tdataEoc_takuhai[".inlineEditFields"][] = "mail_magazin";
$tdataEoc_takuhai[".inlineEditFields"][] = "anke_1";
$tdataEoc_takuhai[".inlineEditFields"][] = "anke_2";
$tdataEoc_takuhai[".inlineEditFields"][] = "anke_3";
$tdataEoc_takuhai[".inlineEditFields"][] = "mail_text";
$tdataEoc_takuhai[".inlineEditFields"][] = "REMOTE_HOST";
$tdataEoc_takuhai[".inlineEditFields"][] = "REMOTE_ADDR";
$tdataEoc_takuhai[".inlineEditFields"][] = "USER_AGENT";
$tdataEoc_takuhai[".inlineEditFields"][] = "HTTP_REFERER";
$tdataEoc_takuhai[".inlineEditFields"][] = "key_code";
$tdataEoc_takuhai[".inlineEditFields"][] = "cv_site";
$tdataEoc_takuhai[".inlineEditFields"][] = "cv_device";
$tdataEoc_takuhai[".inlineEditFields"][] = "cv_page";
$tdataEoc_takuhai[".inlineEditFields"][] = "cv_time";
$tdataEoc_takuhai[".inlineEditFields"][] = "updated_at";
$tdataEoc_takuhai[".inlineEditFields"][] = "updated_by";

$tdataEoc_takuhai[".updateSelectedFields"] = array();


$tdataEoc_takuhai[".exportFields"] = array();
$tdataEoc_takuhai[".exportFields"][] = "shipping_date";
$tdataEoc_takuhai[".exportFields"][] = "shuka_status";
$tdataEoc_takuhai[".exportFields"][] = "shuka_error";
$tdataEoc_takuhai[".exportFields"][] = "status";
$tdataEoc_takuhai[".exportFields"][] = "updated_by";
$tdataEoc_takuhai[".exportFields"][] = "updated_at";
$tdataEoc_takuhai[".exportFields"][] = "id";
$tdataEoc_takuhai[".exportFields"][] = "brand_confirm";
$tdataEoc_takuhai[".exportFields"][] = "number_of_times";
$tdataEoc_takuhai[".exportFields"][] = "type_selection";
$tdataEoc_takuhai[".exportFields"][] = "reuse_box";
$tdataEoc_takuhai[".exportFields"][] = "kit_detail";
$tdataEoc_takuhai[".exportFields"][] = "time_select_hidden";
$tdataEoc_takuhai[".exportFields"][] = "speed_box";
$tdataEoc_takuhai[".exportFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai[".exportFields"][] = "user_name";
$tdataEoc_takuhai[".exportFields"][] = "user_name_kana";
$tdataEoc_takuhai[".exportFields"][] = "user_tel";
$tdataEoc_takuhai[".exportFields"][] = "user_mail";
$tdataEoc_takuhai[".exportFields"][] = "user_yuubinn";
$tdataEoc_takuhai[".exportFields"][] = "user_todou";
$tdataEoc_takuhai[".exportFields"][] = "user_sikutyouson";
$tdataEoc_takuhai[".exportFields"][] = "user_banti";
$tdataEoc_takuhai[".exportFields"][] = "tel_mail_line";
$tdataEoc_takuhai[".exportFields"][] = "bikou";
$tdataEoc_takuhai[".exportFields"][] = "insurance_speed";
$tdataEoc_takuhai[".exportFields"][] = "insurance";
$tdataEoc_takuhai[".exportFields"][] = "insurance_kingaku";
$tdataEoc_takuhai[".exportFields"][] = "mail_magazin";
$tdataEoc_takuhai[".exportFields"][] = "anke_1";
$tdataEoc_takuhai[".exportFields"][] = "anke_2";
$tdataEoc_takuhai[".exportFields"][] = "anke_3";
$tdataEoc_takuhai[".exportFields"][] = "mail_text";
$tdataEoc_takuhai[".exportFields"][] = "REMOTE_HOST";
$tdataEoc_takuhai[".exportFields"][] = "REMOTE_ADDR";
$tdataEoc_takuhai[".exportFields"][] = "USER_AGENT";
$tdataEoc_takuhai[".exportFields"][] = "HTTP_REFERER";
$tdataEoc_takuhai[".exportFields"][] = "key_code";
$tdataEoc_takuhai[".exportFields"][] = "cv_site";
$tdataEoc_takuhai[".exportFields"][] = "cv_device";
$tdataEoc_takuhai[".exportFields"][] = "cv_page";
$tdataEoc_takuhai[".exportFields"][] = "cv_time";
$tdataEoc_takuhai[".exportFields"][] = "ecc_id";
$tdataEoc_takuhai[".exportFields"][] = "kit_denpyou";
$tdataEoc_takuhai[".exportFields"][] = "kit_huutou";
$tdataEoc_takuhai[".exportFields"][] = "kit_S";
$tdataEoc_takuhai[".exportFields"][] = "kit_M";
$tdataEoc_takuhai[".exportFields"][] = "kit_L";
$tdataEoc_takuhai[".exportFields"][] = "warehouse_instruction";
$tdataEoc_takuhai[".exportFields"][] = "delivery_slip_instruction";
$tdataEoc_takuhai[".exportFields"][] = "haisou_bangou";
$tdataEoc_takuhai[".exportFields"][] = "shipping_number";

$tdataEoc_takuhai[".importFields"] = array();
$tdataEoc_takuhai[".importFields"][] = "id";
$tdataEoc_takuhai[".importFields"][] = "brand_confirm";
$tdataEoc_takuhai[".importFields"][] = "number_of_times";
$tdataEoc_takuhai[".importFields"][] = "type_selection";
$tdataEoc_takuhai[".importFields"][] = "reuse_box";
$tdataEoc_takuhai[".importFields"][] = "kit_detail";
$tdataEoc_takuhai[".importFields"][] = "time_select_hidden";
$tdataEoc_takuhai[".importFields"][] = "speed_box";
$tdataEoc_takuhai[".importFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai[".importFields"][] = "user_name";
$tdataEoc_takuhai[".importFields"][] = "user_name_kana";
$tdataEoc_takuhai[".importFields"][] = "user_tel";
$tdataEoc_takuhai[".importFields"][] = "user_mail";
$tdataEoc_takuhai[".importFields"][] = "user_yuubinn";
$tdataEoc_takuhai[".importFields"][] = "user_todou";
$tdataEoc_takuhai[".importFields"][] = "user_sikutyouson";
$tdataEoc_takuhai[".importFields"][] = "user_banti";
$tdataEoc_takuhai[".importFields"][] = "tel_mail_line";
$tdataEoc_takuhai[".importFields"][] = "bikou";
$tdataEoc_takuhai[".importFields"][] = "insurance_speed";
$tdataEoc_takuhai[".importFields"][] = "insurance";
$tdataEoc_takuhai[".importFields"][] = "mail_magazin";
$tdataEoc_takuhai[".importFields"][] = "anke_1";
$tdataEoc_takuhai[".importFields"][] = "anke_2";
$tdataEoc_takuhai[".importFields"][] = "anke_3";
$tdataEoc_takuhai[".importFields"][] = "mail_text";
$tdataEoc_takuhai[".importFields"][] = "REMOTE_HOST";
$tdataEoc_takuhai[".importFields"][] = "REMOTE_ADDR";
$tdataEoc_takuhai[".importFields"][] = "USER_AGENT";
$tdataEoc_takuhai[".importFields"][] = "HTTP_REFERER";
$tdataEoc_takuhai[".importFields"][] = "key_code";
$tdataEoc_takuhai[".importFields"][] = "cv_site";
$tdataEoc_takuhai[".importFields"][] = "cv_device";
$tdataEoc_takuhai[".importFields"][] = "cv_page";
$tdataEoc_takuhai[".importFields"][] = "cv_time";
$tdataEoc_takuhai[".importFields"][] = "ecc_id";
$tdataEoc_takuhai[".importFields"][] = "kit_denpyou";
$tdataEoc_takuhai[".importFields"][] = "kit_huutou";
$tdataEoc_takuhai[".importFields"][] = "kit_S";
$tdataEoc_takuhai[".importFields"][] = "kit_M";
$tdataEoc_takuhai[".importFields"][] = "kit_L";
$tdataEoc_takuhai[".importFields"][] = "warehouse_instruction";
$tdataEoc_takuhai[".importFields"][] = "delivery_slip_instruction";
$tdataEoc_takuhai[".importFields"][] = "haisou_bangou";
$tdataEoc_takuhai[".importFields"][] = "shipping_number";
$tdataEoc_takuhai[".importFields"][] = "updated_at";
$tdataEoc_takuhai[".importFields"][] = "updated_by";
$tdataEoc_takuhai[".importFields"][] = "shuka_status";
$tdataEoc_takuhai[".importFields"][] = "shuka_error";
$tdataEoc_takuhai[".importFields"][] = "status";
$tdataEoc_takuhai[".importFields"][] = "insurance_kingaku";
$tdataEoc_takuhai[".importFields"][] = "shipping_date";

$tdataEoc_takuhai[".printFields"] = array();
$tdataEoc_takuhai[".printFields"][] = "shipping_date";
$tdataEoc_takuhai[".printFields"][] = "insurance_kingaku";
$tdataEoc_takuhai[".printFields"][] = "updated_at";
$tdataEoc_takuhai[".printFields"][] = "updated_by";
$tdataEoc_takuhai[".printFields"][] = "shuka_status";
$tdataEoc_takuhai[".printFields"][] = "shuka_error";
$tdataEoc_takuhai[".printFields"][] = "status";
$tdataEoc_takuhai[".printFields"][] = "id";
$tdataEoc_takuhai[".printFields"][] = "brand_confirm";
$tdataEoc_takuhai[".printFields"][] = "number_of_times";
$tdataEoc_takuhai[".printFields"][] = "type_selection";
$tdataEoc_takuhai[".printFields"][] = "reuse_box";
$tdataEoc_takuhai[".printFields"][] = "kit_detail";
$tdataEoc_takuhai[".printFields"][] = "time_select_hidden";
$tdataEoc_takuhai[".printFields"][] = "speed_box";
$tdataEoc_takuhai[".printFields"][] = "date_and_time_hidden";
$tdataEoc_takuhai[".printFields"][] = "user_name";
$tdataEoc_takuhai[".printFields"][] = "user_name_kana";
$tdataEoc_takuhai[".printFields"][] = "user_tel";
$tdataEoc_takuhai[".printFields"][] = "user_mail";
$tdataEoc_takuhai[".printFields"][] = "user_yuubinn";
$tdataEoc_takuhai[".printFields"][] = "user_todou";
$tdataEoc_takuhai[".printFields"][] = "user_sikutyouson";
$tdataEoc_takuhai[".printFields"][] = "user_banti";
$tdataEoc_takuhai[".printFields"][] = "tel_mail_line";
$tdataEoc_takuhai[".printFields"][] = "bikou";
$tdataEoc_takuhai[".printFields"][] = "insurance_speed";
$tdataEoc_takuhai[".printFields"][] = "insurance";
$tdataEoc_takuhai[".printFields"][] = "mail_magazin";
$tdataEoc_takuhai[".printFields"][] = "anke_1";
$tdataEoc_takuhai[".printFields"][] = "anke_2";
$tdataEoc_takuhai[".printFields"][] = "anke_3";
$tdataEoc_takuhai[".printFields"][] = "mail_text";
$tdataEoc_takuhai[".printFields"][] = "REMOTE_HOST";
$tdataEoc_takuhai[".printFields"][] = "REMOTE_ADDR";
$tdataEoc_takuhai[".printFields"][] = "USER_AGENT";
$tdataEoc_takuhai[".printFields"][] = "HTTP_REFERER";
$tdataEoc_takuhai[".printFields"][] = "key_code";
$tdataEoc_takuhai[".printFields"][] = "cv_site";
$tdataEoc_takuhai[".printFields"][] = "cv_device";
$tdataEoc_takuhai[".printFields"][] = "cv_page";
$tdataEoc_takuhai[".printFields"][] = "cv_time";
$tdataEoc_takuhai[".printFields"][] = "ecc_id";
$tdataEoc_takuhai[".printFields"][] = "kit_denpyou";
$tdataEoc_takuhai[".printFields"][] = "kit_huutou";
$tdataEoc_takuhai[".printFields"][] = "kit_S";
$tdataEoc_takuhai[".printFields"][] = "kit_M";
$tdataEoc_takuhai[".printFields"][] = "kit_L";
$tdataEoc_takuhai[".printFields"][] = "warehouse_instruction";
$tdataEoc_takuhai[".printFields"][] = "delivery_slip_instruction";
$tdataEoc_takuhai[".printFields"][] = "haisou_bangou";
$tdataEoc_takuhai[".printFields"][] = "shipping_number";

//	link_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "link_area";
	$fdata["GoodName"] = "link_area";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","link_area");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "link_area";

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








	$tdataEoc_takuhai["link_area"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdataEoc_takuhai["id"] = $fdata;
//	brand_confirm
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "brand_confirm";
	$fdata["GoodName"] = "brand_confirm";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","brand_confirm");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "brand_confirm";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brand_confirm`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["brand_confirm"] = $fdata;
//	number_of_times
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "number_of_times";
	$fdata["GoodName"] = "number_of_times";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","number_of_times");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "number_of_times";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`number_of_times`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["number_of_times"] = $fdata;
//	type_selection
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "type_selection";
	$fdata["GoodName"] = "type_selection";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","type_selection");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "type_selection";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`type_selection`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["type_selection"] = $fdata;
//	reuse_box
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "reuse_box";
	$fdata["GoodName"] = "reuse_box";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","reuse_box");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "reuse_box";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`reuse_box`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["reuse_box"] = $fdata;
//	kit_detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "kit_detail";
	$fdata["GoodName"] = "kit_detail";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","kit_detail");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kit_detail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kit_detail`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_takuhai["kit_detail"] = $fdata;
//	time_select
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "time_select";
	$fdata["GoodName"] = "time_select";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","time_select");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "time_select";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`time_select`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdataEoc_takuhai["time_select"] = $fdata;
//	time_select_hidden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "time_select_hidden";
	$fdata["GoodName"] = "time_select_hidden";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","time_select_hidden");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "time_select_hidden";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`time_select_hidden`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["time_select_hidden"] = $fdata;
//	speed_box
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "speed_box";
	$fdata["GoodName"] = "speed_box";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","speed_box");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "speed_box";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`speed_box`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["speed_box"] = $fdata;
//	date_and_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "date_and_time";
	$fdata["GoodName"] = "date_and_time";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","date_and_time");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "date_and_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date_and_time`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdataEoc_takuhai["date_and_time"] = $fdata;
//	date_and_time_hidden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "date_and_time_hidden";
	$fdata["GoodName"] = "date_and_time_hidden";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","date_and_time_hidden");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date_and_time_hidden";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date_and_time_hidden`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["date_and_time_hidden"] = $fdata;
//	user_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "user_name";
	$fdata["GoodName"] = "user_name";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","user_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_name`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["user_name"] = $fdata;
//	user_name_kana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "user_name_kana";
	$fdata["GoodName"] = "user_name_kana";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","user_name_kana");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_name_kana";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_name_kana`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["user_name_kana"] = $fdata;
//	user_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "user_tel";
	$fdata["GoodName"] = "user_tel";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","user_tel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_tel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_tel`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["user_tel"] = $fdata;
//	user_mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "user_mail";
	$fdata["GoodName"] = "user_mail";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","user_mail");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_mail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_mail`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["user_mail"] = $fdata;
//	user_yuubinn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "user_yuubinn";
	$fdata["GoodName"] = "user_yuubinn";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","user_yuubinn");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_yuubinn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_yuubinn`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["user_yuubinn"] = $fdata;
//	user_todou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "user_todou";
	$fdata["GoodName"] = "user_todou";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","user_todou");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_todou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_todou`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["user_todou"] = $fdata;
//	user_sikutyouson
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "user_sikutyouson";
	$fdata["GoodName"] = "user_sikutyouson";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","user_sikutyouson");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_sikutyouson";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_sikutyouson`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_takuhai["user_sikutyouson"] = $fdata;
//	user_banti
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "user_banti";
	$fdata["GoodName"] = "user_banti";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","user_banti");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_banti";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_banti`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_takuhai["user_banti"] = $fdata;
//	tel_mail_line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "tel_mail_line";
	$fdata["GoodName"] = "tel_mail_line";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","tel_mail_line");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tel_mail_line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tel_mail_line`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["tel_mail_line"] = $fdata;
//	bikou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "bikou";
	$fdata["GoodName"] = "bikou";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","bikou");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bikou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`bikou`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_takuhai["bikou"] = $fdata;
//	insurance_speed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "insurance_speed";
	$fdata["GoodName"] = "insurance_speed";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","insurance_speed");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "insurance_speed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`insurance_speed`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["insurance_speed"] = $fdata;
//	insurance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "insurance";
	$fdata["GoodName"] = "insurance";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","insurance");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "insurance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`insurance`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["insurance"] = $fdata;
//	mail_magazin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "mail_magazin";
	$fdata["GoodName"] = "mail_magazin";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","mail_magazin");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mail_magazin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mail_magazin`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["mail_magazin"] = $fdata;
//	anke_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "anke_1";
	$fdata["GoodName"] = "anke_1";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","anke_1");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "anke_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`anke_1`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_takuhai["anke_1"] = $fdata;
//	anke_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "anke_2";
	$fdata["GoodName"] = "anke_2";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","anke_2");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "anke_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`anke_2`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_takuhai["anke_2"] = $fdata;
//	anke_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "anke_3";
	$fdata["GoodName"] = "anke_3";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","anke_3");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "anke_3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`anke_3`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_takuhai["anke_3"] = $fdata;
//	mail_text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "mail_text";
	$fdata["GoodName"] = "mail_text";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","mail_text");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mail_text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mail_text`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_takuhai["mail_text"] = $fdata;
//	REMOTE_HOST
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "REMOTE_HOST";
	$fdata["GoodName"] = "REMOTE_HOST";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","REMOTE_HOST");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REMOTE_HOST";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`REMOTE_HOST`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["REMOTE_HOST"] = $fdata;
//	REMOTE_ADDR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "REMOTE_ADDR";
	$fdata["GoodName"] = "REMOTE_ADDR";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","REMOTE_ADDR");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "REMOTE_ADDR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`REMOTE_ADDR`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["REMOTE_ADDR"] = $fdata;
//	USER_AGENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "USER_AGENT";
	$fdata["GoodName"] = "USER_AGENT";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","USER_AGENT");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "USER_AGENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`USER_AGENT`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["USER_AGENT"] = $fdata;
//	HTTP_REFERER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "HTTP_REFERER";
	$fdata["GoodName"] = "HTTP_REFERER";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","HTTP_REFERER");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "HTTP_REFERER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`HTTP_REFERER`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["HTTP_REFERER"] = $fdata;
//	key_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "key_code";
	$fdata["GoodName"] = "key_code";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","key_code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "key_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`key_code`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["key_code"] = $fdata;
//	cv_site
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "cv_site";
	$fdata["GoodName"] = "cv_site";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","cv_site");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cv_site";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cv_site`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["cv_site"] = $fdata;
//	cv_device
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "cv_device";
	$fdata["GoodName"] = "cv_device";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","cv_device");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cv_device";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cv_device`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["cv_device"] = $fdata;
//	cv_page
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "cv_page";
	$fdata["GoodName"] = "cv_page";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","cv_page");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cv_page";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cv_page`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["cv_page"] = $fdata;
//	cv_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "cv_time";
	$fdata["GoodName"] = "cv_time";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","cv_time");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cv_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cv_time`";

	
	
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




	$tdataEoc_takuhai["cv_time"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdataEoc_takuhai["ecc_id"] = $fdata;
//	kit_denpyou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "kit_denpyou";
	$fdata["GoodName"] = "kit_denpyou";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","kit_denpyou");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kit_denpyou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kit_denpyou`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["kit_denpyou"] = $fdata;
//	kit_huutou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "kit_huutou";
	$fdata["GoodName"] = "kit_huutou";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","kit_huutou");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kit_huutou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kit_huutou`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["kit_huutou"] = $fdata;
//	kit_S
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "kit_S";
	$fdata["GoodName"] = "kit_S";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","kit_S");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kit_S";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kit_S`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["kit_S"] = $fdata;
//	kit_M
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "kit_M";
	$fdata["GoodName"] = "kit_M";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","kit_M");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kit_M";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kit_M`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["kit_M"] = $fdata;
//	kit_L
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "kit_L";
	$fdata["GoodName"] = "kit_L";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","kit_L");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kit_L";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kit_L`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["kit_L"] = $fdata;
//	warehouse_instruction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "warehouse_instruction";
	$fdata["GoodName"] = "warehouse_instruction";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","warehouse_instruction");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "warehouse_instruction";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`warehouse_instruction`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_takuhai["warehouse_instruction"] = $fdata;
//	delivery_slip_instruction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "delivery_slip_instruction";
	$fdata["GoodName"] = "delivery_slip_instruction";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","delivery_slip_instruction");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "delivery_slip_instruction";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`delivery_slip_instruction`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_takuhai["delivery_slip_instruction"] = $fdata;
//	haisou_bangou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "haisou_bangou";
	$fdata["GoodName"] = "haisou_bangou";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","haisou_bangou");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "haisou_bangou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`haisou_bangou`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

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




	$tdataEoc_takuhai["haisou_bangou"] = $fdata;
//	shipping_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "shipping_number";
	$fdata["GoodName"] = "shipping_number";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","shipping_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shipping_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shipping_number`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["shipping_number"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdataEoc_takuhai["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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




	$tdataEoc_takuhai["updated_by"] = $fdata;
//	speed_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "speed_num";
	$fdata["GoodName"] = "speed_num";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","speed_num");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "speed_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`speed_num`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["speed_num"] = $fdata;
//	shuka_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "shuka_status";
	$fdata["GoodName"] = "shuka_status";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","shuka_status");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shuka_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shuka_status`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_takuhai["shuka_status"] = $fdata;
//	shuka_error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "shuka_error";
	$fdata["GoodName"] = "shuka_error";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","shuka_error");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shuka_error";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shuka_error`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "Eoc_takuhai_error";
	$edata["LookupConnId"] = "internet_at_urlounge_co_jp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
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




	$tdataEoc_takuhai["shuka_error"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`status`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_Eoc_takuhai_status";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
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




	$tdataEoc_takuhai["status"] = $fdata;
//	insurance_kingaku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "insurance_kingaku";
	$fdata["GoodName"] = "insurance_kingaku";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","insurance_kingaku");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "insurance_kingaku";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`insurance_kingaku`";

	
	
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




	$tdataEoc_takuhai["insurance_kingaku"] = $fdata;
//	shipping_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "shipping_date";
	$fdata["GoodName"] = "shipping_date";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_takuhai","shipping_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shipping_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shipping_date`";

	
	
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




	$tdataEoc_takuhai["shipping_date"] = $fdata;


$tables_data["Eoc_takuhai"]=&$tdataEoc_takuhai;
$field_labels["Eoc_takuhai"] = &$fieldLabelsEoc_takuhai;
$fieldToolTips["Eoc_takuhai"] = &$fieldToolTipsEoc_takuhai;
$placeHolders["Eoc_takuhai"] = &$placeHoldersEoc_takuhai;
$page_titles["Eoc_takuhai"] = &$pageTitlesEoc_takuhai;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_takuhai"] = array();
//	shouhin
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="shouhin";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "shouhin";
	$detailsParam["dCaptionTable"] = GetTableCaption("shouhin");
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
		
	$detailsTablesData["Eoc_takuhai"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_takuhai"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_takuhai"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_takuhai"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_takuhai"][$dIndex]["detailKeys"][]="Eoc_takuhai_id";

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_takuhai"] = array();


	
				$strOriginalDetailsTable="Eoc";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Eoc_takuhai"][0] = $masterParams;
				$masterTablesData["Eoc_takuhai"][0]["masterKeys"] = array();
	$masterTablesData["Eoc_takuhai"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["Eoc_takuhai"][0]["detailKeys"] = array();
	$masterTablesData["Eoc_takuhai"][0]["detailKeys"][]="ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_takuhai()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"\" AS `link_area`,  `id`,  `brand_confirm`,  `number_of_times`,  `type_selection`,  `reuse_box`,  `kit_detail`,  `time_select`,  `time_select_hidden`,  `speed_box`,  `date_and_time`,  `date_and_time_hidden`,  `user_name`,  `user_name_kana`,  `user_tel`,  `user_mail`,  `user_yuubinn`,  `user_todou`,  `user_sikutyouson`,  `user_banti`,  `tel_mail_line`,  `bikou`,  `insurance_speed`,  `insurance`,  `mail_magazin`,  `anke_1`,  `anke_2`,  `anke_3`,  `mail_text`,  `REMOTE_HOST`,  `REMOTE_ADDR`,  `USER_AGENT`,  `HTTP_REFERER`,  `key_code`,  `cv_site`,  `cv_device`,  `cv_page`,  `cv_time`,  `ecc_id`,  `kit_denpyou`,  `kit_huutou`,  `kit_S`,  `kit_M`,  `kit_L`,  `warehouse_instruction`,  `delivery_slip_instruction`,  `haisou_bangou`,  `shipping_number`,  `updated_at`,  `updated_by`,  `speed_num`,  `shuka_status`,  `shuka_error`,  `status`,  `insurance_kingaku`,  `shipping_date`";
$proto0["m_strFrom"] = "FROM `Eoc_takuhai`";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto6["m_sql"] = "\"\"";
$proto6["m_srcTableName"] = "Eoc_takuhai";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "link_area";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto8["m_sql"] = "`id`";
$proto8["m_srcTableName"] = "Eoc_takuhai";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "brand_confirm",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto10["m_sql"] = "`brand_confirm`";
$proto10["m_srcTableName"] = "Eoc_takuhai";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "number_of_times",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto12["m_sql"] = "`number_of_times`";
$proto12["m_srcTableName"] = "Eoc_takuhai";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "type_selection",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto14["m_sql"] = "`type_selection`";
$proto14["m_srcTableName"] = "Eoc_takuhai";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "reuse_box",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto16["m_sql"] = "`reuse_box`";
$proto16["m_srcTableName"] = "Eoc_takuhai";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_detail",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto18["m_sql"] = "`kit_detail`";
$proto18["m_srcTableName"] = "Eoc_takuhai";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "time_select",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto20["m_sql"] = "`time_select`";
$proto20["m_srcTableName"] = "Eoc_takuhai";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "time_select_hidden",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto22["m_sql"] = "`time_select_hidden`";
$proto22["m_srcTableName"] = "Eoc_takuhai";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "speed_box",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto24["m_sql"] = "`speed_box`";
$proto24["m_srcTableName"] = "Eoc_takuhai";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "date_and_time",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto26["m_sql"] = "`date_and_time`";
$proto26["m_srcTableName"] = "Eoc_takuhai";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "date_and_time_hidden",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto28["m_sql"] = "`date_and_time_hidden`";
$proto28["m_srcTableName"] = "Eoc_takuhai";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto30["m_sql"] = "`user_name`";
$proto30["m_srcTableName"] = "Eoc_takuhai";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "user_name_kana",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto32["m_sql"] = "`user_name_kana`";
$proto32["m_srcTableName"] = "Eoc_takuhai";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "user_tel",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto34["m_sql"] = "`user_tel`";
$proto34["m_srcTableName"] = "Eoc_takuhai";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "user_mail",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto36["m_sql"] = "`user_mail`";
$proto36["m_srcTableName"] = "Eoc_takuhai";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "user_yuubinn",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto38["m_sql"] = "`user_yuubinn`";
$proto38["m_srcTableName"] = "Eoc_takuhai";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "user_todou",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto40["m_sql"] = "`user_todou`";
$proto40["m_srcTableName"] = "Eoc_takuhai";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "user_sikutyouson",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto42["m_sql"] = "`user_sikutyouson`";
$proto42["m_srcTableName"] = "Eoc_takuhai";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "user_banti",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto44["m_sql"] = "`user_banti`";
$proto44["m_srcTableName"] = "Eoc_takuhai";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "tel_mail_line",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto46["m_sql"] = "`tel_mail_line`";
$proto46["m_srcTableName"] = "Eoc_takuhai";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "bikou",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto48["m_sql"] = "`bikou`";
$proto48["m_srcTableName"] = "Eoc_takuhai";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "insurance_speed",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto50["m_sql"] = "`insurance_speed`";
$proto50["m_srcTableName"] = "Eoc_takuhai";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "insurance",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto52["m_sql"] = "`insurance`";
$proto52["m_srcTableName"] = "Eoc_takuhai";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "mail_magazin",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto54["m_sql"] = "`mail_magazin`";
$proto54["m_srcTableName"] = "Eoc_takuhai";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "anke_1",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto56["m_sql"] = "`anke_1`";
$proto56["m_srcTableName"] = "Eoc_takuhai";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "anke_2",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto58["m_sql"] = "`anke_2`";
$proto58["m_srcTableName"] = "Eoc_takuhai";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "anke_3",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto60["m_sql"] = "`anke_3`";
$proto60["m_srcTableName"] = "Eoc_takuhai";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "mail_text",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto62["m_sql"] = "`mail_text`";
$proto62["m_srcTableName"] = "Eoc_takuhai";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "REMOTE_HOST",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto64["m_sql"] = "`REMOTE_HOST`";
$proto64["m_srcTableName"] = "Eoc_takuhai";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "REMOTE_ADDR",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto66["m_sql"] = "`REMOTE_ADDR`";
$proto66["m_srcTableName"] = "Eoc_takuhai";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "USER_AGENT",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto68["m_sql"] = "`USER_AGENT`";
$proto68["m_srcTableName"] = "Eoc_takuhai";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "HTTP_REFERER",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto70["m_sql"] = "`HTTP_REFERER`";
$proto70["m_srcTableName"] = "Eoc_takuhai";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "key_code",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto72["m_sql"] = "`key_code`";
$proto72["m_srcTableName"] = "Eoc_takuhai";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "cv_site",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto74["m_sql"] = "`cv_site`";
$proto74["m_srcTableName"] = "Eoc_takuhai";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "cv_device",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto76["m_sql"] = "`cv_device`";
$proto76["m_srcTableName"] = "Eoc_takuhai";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "cv_page",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto78["m_sql"] = "`cv_page`";
$proto78["m_srcTableName"] = "Eoc_takuhai";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "cv_time",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto80["m_sql"] = "`cv_time`";
$proto80["m_srcTableName"] = "Eoc_takuhai";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto82["m_sql"] = "`ecc_id`";
$proto82["m_srcTableName"] = "Eoc_takuhai";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_denpyou",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto84["m_sql"] = "`kit_denpyou`";
$proto84["m_srcTableName"] = "Eoc_takuhai";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_huutou",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto86["m_sql"] = "`kit_huutou`";
$proto86["m_srcTableName"] = "Eoc_takuhai";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_S",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto88["m_sql"] = "`kit_S`";
$proto88["m_srcTableName"] = "Eoc_takuhai";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_M",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto90["m_sql"] = "`kit_M`";
$proto90["m_srcTableName"] = "Eoc_takuhai";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_L",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto92["m_sql"] = "`kit_L`";
$proto92["m_srcTableName"] = "Eoc_takuhai";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "warehouse_instruction",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto94["m_sql"] = "`warehouse_instruction`";
$proto94["m_srcTableName"] = "Eoc_takuhai";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_slip_instruction",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto96["m_sql"] = "`delivery_slip_instruction`";
$proto96["m_srcTableName"] = "Eoc_takuhai";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "haisou_bangou",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto98["m_sql"] = "`haisou_bangou`";
$proto98["m_srcTableName"] = "Eoc_takuhai";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "shipping_number",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto100["m_sql"] = "`shipping_number`";
$proto100["m_srcTableName"] = "Eoc_takuhai";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto102["m_sql"] = "`updated_at`";
$proto102["m_srcTableName"] = "Eoc_takuhai";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto104["m_sql"] = "`updated_by`";
$proto104["m_srcTableName"] = "Eoc_takuhai";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "speed_num",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto106["m_sql"] = "`speed_num`";
$proto106["m_srcTableName"] = "Eoc_takuhai";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "shuka_status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto108["m_sql"] = "`shuka_status`";
$proto108["m_srcTableName"] = "Eoc_takuhai";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "shuka_error",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto110["m_sql"] = "`shuka_error`";
$proto110["m_srcTableName"] = "Eoc_takuhai";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto112["m_sql"] = "`status`";
$proto112["m_srcTableName"] = "Eoc_takuhai";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "insurance_kingaku",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto114["m_sql"] = "`insurance_kingaku`";
$proto114["m_srcTableName"] = "Eoc_takuhai";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "shipping_date",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_takuhai"
));

$proto116["m_sql"] = "`shipping_date`";
$proto116["m_srcTableName"] = "Eoc_takuhai";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto118=array();
$proto118["m_link"] = "SQLL_MAIN";
			$proto119=array();
$proto119["m_strName"] = "Eoc_takuhai";
$proto119["m_srcTableName"] = "Eoc_takuhai";
$proto119["m_columns"] = array();
$proto119["m_columns"][] = "id";
$proto119["m_columns"][] = "brand_confirm";
$proto119["m_columns"][] = "number_of_times";
$proto119["m_columns"][] = "type_selection";
$proto119["m_columns"][] = "reuse_box";
$proto119["m_columns"][] = "kit_detail";
$proto119["m_columns"][] = "date_select";
$proto119["m_columns"][] = "time_select";
$proto119["m_columns"][] = "date_select_hidden";
$proto119["m_columns"][] = "time_select_hidden";
$proto119["m_columns"][] = "speed_box";
$proto119["m_columns"][] = "date_and_time";
$proto119["m_columns"][] = "date_and_time_hidden";
$proto119["m_columns"][] = "user_name";
$proto119["m_columns"][] = "user_name_kana";
$proto119["m_columns"][] = "user_tel";
$proto119["m_columns"][] = "user_mail";
$proto119["m_columns"][] = "user_yuubinn";
$proto119["m_columns"][] = "user_todou";
$proto119["m_columns"][] = "user_sikutyouson";
$proto119["m_columns"][] = "user_banti";
$proto119["m_columns"][] = "tel_mail_line";
$proto119["m_columns"][] = "bikou";
$proto119["m_columns"][] = "insurance_speed";
$proto119["m_columns"][] = "insurance";
$proto119["m_columns"][] = "mail_magazin";
$proto119["m_columns"][] = "anke_1";
$proto119["m_columns"][] = "anke_2";
$proto119["m_columns"][] = "anke_3";
$proto119["m_columns"][] = "mail_text";
$proto119["m_columns"][] = "REMOTE_HOST";
$proto119["m_columns"][] = "REMOTE_ADDR";
$proto119["m_columns"][] = "USER_AGENT";
$proto119["m_columns"][] = "HTTP_REFERER";
$proto119["m_columns"][] = "key_code";
$proto119["m_columns"][] = "cv_site";
$proto119["m_columns"][] = "cv_device";
$proto119["m_columns"][] = "cv_page";
$proto119["m_columns"][] = "cv_time";
$proto119["m_columns"][] = "ecc_id";
$proto119["m_columns"][] = "kit_denpyou";
$proto119["m_columns"][] = "kit_huutou";
$proto119["m_columns"][] = "kit_S";
$proto119["m_columns"][] = "kit_M";
$proto119["m_columns"][] = "kit_L";
$proto119["m_columns"][] = "warehouse_instruction";
$proto119["m_columns"][] = "delivery_slip_instruction";
$proto119["m_columns"][] = "haisou_bangou";
$proto119["m_columns"][] = "shipping_number";
$proto119["m_columns"][] = "arrival_date";
$proto119["m_columns"][] = "updated_at";
$proto119["m_columns"][] = "updated_by";
$proto119["m_columns"][] = "line_satei";
$proto119["m_columns"][] = "insurance_kingaku";
$proto119["m_columns"][] = "status";
$proto119["m_columns"][] = "hakosuu";
$proto119["m_columns"][] = "purchase_type";
$proto119["m_columns"][] = "seiyakukin";
$proto119["m_columns"][] = "received_time";
$proto119["m_columns"][] = "transfer_id";
$proto119["m_columns"][] = "price_error";
$proto119["m_columns"][] = "speed_num";
$proto119["m_columns"][] = "shuka_status";
$proto119["m_columns"][] = "shuka_error";
$proto119["m_columns"][] = "haisou_gyousha";
$proto119["m_columns"][] = "user_address1";
$proto119["m_columns"][] = "user_address2";
$proto119["m_columns"][] = "not_hi_shuka";
$proto119["m_columns"][] = "created_at";
$proto119["m_columns"][] = "is_many_product";
$proto119["m_columns"][] = "Eoc_trader_id";
$proto119["m_columns"][] = "service_users_id";
$proto119["m_columns"][] = "mypage_update_prohibited";
$proto119["m_columns"][] = "memo";
$proto119["m_columns"][] = "satei_start";
$proto119["m_columns"][] = "satei_end";
$proto119["m_columns"][] = "satei_start_by";
$proto119["m_columns"][] = "contract_at";
$proto119["m_columns"][] = "ad_param";
$proto119["m_columns"][] = "is_NJ_or_BJ";
$proto119["m_columns"][] = "shipping_date";
$obj = new SQLTable($proto119);

$proto118["m_table"] = $obj;
$proto118["m_sql"] = "`Eoc_takuhai`";
$proto118["m_alias"] = "";
$proto118["m_srcTableName"] = "Eoc_takuhai";
$proto120=array();
$proto120["m_sql"] = "";
$proto120["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto120["m_column"]=$obj;
$proto120["m_contained"] = array();
$proto120["m_strCase"] = "";
$proto120["m_havingmode"] = false;
$proto120["m_inBrackets"] = false;
$proto120["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto120);

$proto118["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto118);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Eoc_takuhai";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_takuhai = createSqlQuery_Eoc_takuhai();


	
		;

																																																								

$tdataEoc_takuhai[".sqlquery"] = $queryData_Eoc_takuhai;

include_once(getabspath("include/Eoc_takuhai_events.php"));
$tableEvents["Eoc_takuhai"] = new eventclass_Eoc_takuhai;
$tdataEoc_takuhai[".hasEvents"] = true;

?>