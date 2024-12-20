<?php
require_once(getabspath("classes/cipherer.php"));




$tdatashop_front_details = array();
	$tdatashop_front_details[".truncateText"] = true;
	$tdatashop_front_details[".NumberOfChars"] = 80;
	$tdatashop_front_details[".ShortName"] = "shop_front_details";
	$tdatashop_front_details[".OwnerID"] = "";
	$tdatashop_front_details[".OriginalTable"] = "shop_front_details";

//	field labels
$fieldLabelsshop_front_details = array();
$fieldToolTipsshop_front_details = array();
$pageTitlesshop_front_details = array();
$placeHoldersshop_front_details = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsshop_front_details["Japanese"] = array();
	$fieldToolTipsshop_front_details["Japanese"] = array();
	$placeHoldersshop_front_details["Japanese"] = array();
	$pageTitlesshop_front_details["Japanese"] = array();
	$fieldLabelsshop_front_details["Japanese"]["shop_front_id"] = "Shop Front Id";
	$fieldToolTipsshop_front_details["Japanese"]["shop_front_id"] = "";
	$placeHoldersshop_front_details["Japanese"]["shop_front_id"] = "";
	$fieldLabelsshop_front_details["Japanese"]["send_id"] = "Send Id";
	$fieldToolTipsshop_front_details["Japanese"]["send_id"] = "";
	$placeHoldersshop_front_details["Japanese"]["send_id"] = "";
	$fieldLabelsshop_front_details["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsshop_front_details["Japanese"]["ecc_id"] = "";
	$placeHoldersshop_front_details["Japanese"]["ecc_id"] = "";
	$fieldLabelsshop_front_details["Japanese"]["is_own"] = "所有物";
	$fieldToolTipsshop_front_details["Japanese"]["is_own"] = "";
	$placeHoldersshop_front_details["Japanese"]["is_own"] = "";
	$fieldLabelsshop_front_details["Japanese"]["iddocment_category"] = "身分証種類";
	$fieldToolTipsshop_front_details["Japanese"]["iddocment_category"] = "";
	$placeHoldersshop_front_details["Japanese"]["iddocment_category"] = "";
	$fieldLabelsshop_front_details["Japanese"]["is_confirm_pp"] = "Is Confirm Pp";
	$fieldToolTipsshop_front_details["Japanese"]["is_confirm_pp"] = "";
	$placeHoldersshop_front_details["Japanese"]["is_confirm_pp"] = "";
	$fieldLabelsshop_front_details["Japanese"]["is_first"] = "Is First";
	$fieldToolTipsshop_front_details["Japanese"]["is_first"] = "";
	$placeHoldersshop_front_details["Japanese"]["is_first"] = "";
	$fieldLabelsshop_front_details["Japanese"]["lastname"] = "姓";
	$fieldToolTipsshop_front_details["Japanese"]["lastname"] = "";
	$placeHoldersshop_front_details["Japanese"]["lastname"] = "";
	$fieldLabelsshop_front_details["Japanese"]["firstname"] = "名";
	$fieldToolTipsshop_front_details["Japanese"]["firstname"] = "";
	$placeHoldersshop_front_details["Japanese"]["firstname"] = "";
	$fieldLabelsshop_front_details["Japanese"]["furigana_lastname"] = "セイ";
	$fieldToolTipsshop_front_details["Japanese"]["furigana_lastname"] = "";
	$placeHoldersshop_front_details["Japanese"]["furigana_lastname"] = "";
	$fieldLabelsshop_front_details["Japanese"]["furigana_firstname"] = "メイ";
	$fieldToolTipsshop_front_details["Japanese"]["furigana_firstname"] = "";
	$placeHoldersshop_front_details["Japanese"]["furigana_firstname"] = "";
	$fieldLabelsshop_front_details["Japanese"]["gender"] = "性別";
	$fieldToolTipsshop_front_details["Japanese"]["gender"] = "";
	$placeHoldersshop_front_details["Japanese"]["gender"] = "";
	$fieldLabelsshop_front_details["Japanese"]["birthday"] = "誕生日";
	$fieldToolTipsshop_front_details["Japanese"]["birthday"] = "";
	$placeHoldersshop_front_details["Japanese"]["birthday"] = "";
	$fieldLabelsshop_front_details["Japanese"]["prefecture"] = "都道府県";
	$fieldToolTipsshop_front_details["Japanese"]["prefecture"] = "";
	$placeHoldersshop_front_details["Japanese"]["prefecture"] = "";
	$fieldLabelsshop_front_details["Japanese"]["city"] = "市区町村";
	$fieldToolTipsshop_front_details["Japanese"]["city"] = "";
	$placeHoldersshop_front_details["Japanese"]["city"] = "";
	$fieldLabelsshop_front_details["Japanese"]["town"] = "番地";
	$fieldToolTipsshop_front_details["Japanese"]["town"] = "";
	$placeHoldersshop_front_details["Japanese"]["town"] = "";
	$fieldLabelsshop_front_details["Japanese"]["building_types"] = "建物種類";
	$fieldToolTipsshop_front_details["Japanese"]["building_types"] = "";
	$placeHoldersshop_front_details["Japanese"]["building_types"] = "";
	$fieldLabelsshop_front_details["Japanese"]["dwelling_types"] = "お住まい";
	$fieldToolTipsshop_front_details["Japanese"]["dwelling_types"] = "";
	$placeHoldersshop_front_details["Japanese"]["dwelling_types"] = "";
	$fieldLabelsshop_front_details["Japanese"]["tel"] = "電話番号";
	$fieldToolTipsshop_front_details["Japanese"]["tel"] = "";
	$placeHoldersshop_front_details["Japanese"]["tel"] = "";
	$fieldLabelsshop_front_details["Japanese"]["email"] = "メールアドレス";
	$fieldToolTipsshop_front_details["Japanese"]["email"] = "";
	$placeHoldersshop_front_details["Japanese"]["email"] = "";
	$fieldLabelsshop_front_details["Japanese"]["job_category"] = "職業";
	$fieldToolTipsshop_front_details["Japanese"]["job_category"] = "";
	$placeHoldersshop_front_details["Japanese"]["job_category"] = "";
	$fieldLabelsshop_front_details["Japanese"]["job_category_freetext"] = "職業自由入力";
	$fieldToolTipsshop_front_details["Japanese"]["job_category_freetext"] = "";
	$placeHoldersshop_front_details["Japanese"]["job_category_freetext"] = "";
	$fieldLabelsshop_front_details["Japanese"]["campaign"] = "Campaign";
	$fieldToolTipsshop_front_details["Japanese"]["campaign"] = "";
	$placeHoldersshop_front_details["Japanese"]["campaign"] = "";
	$fieldLabelsshop_front_details["Japanese"]["taransaction_result"] = "Taransaction Result";
	$fieldToolTipsshop_front_details["Japanese"]["taransaction_result"] = "";
	$placeHoldersshop_front_details["Japanese"]["taransaction_result"] = "";
	$fieldLabelsshop_front_details["Japanese"]["trading"] = "売買目的";
	$fieldToolTipsshop_front_details["Japanese"]["trading"] = "";
	$placeHoldersshop_front_details["Japanese"]["trading"] = "";
	$fieldLabelsshop_front_details["Japanese"]["is_confirm_rules"] = "規約チェック";
	$fieldToolTipsshop_front_details["Japanese"]["is_confirm_rules"] = "";
	$placeHoldersshop_front_details["Japanese"]["is_confirm_rules"] = "";
	$fieldLabelsshop_front_details["Japanese"]["sign_img_path"] = "Sign Img Path";
	$fieldToolTipsshop_front_details["Japanese"]["sign_img_path"] = "";
	$placeHoldersshop_front_details["Japanese"]["sign_img_path"] = "";
	$fieldLabelsshop_front_details["Japanese"]["iddocment_image_path"] = "身分証画像";
	$fieldToolTipsshop_front_details["Japanese"]["iddocment_image_path"] = "";
	$placeHoldersshop_front_details["Japanese"]["iddocment_image_path"] = "";
	$fieldLabelsshop_front_details["Japanese"]["products_image_path"] = "商品画像";
	$fieldToolTipsshop_front_details["Japanese"]["products_image_path"] = "";
	$placeHoldersshop_front_details["Japanese"]["products_image_path"] = "";
	$fieldLabelsshop_front_details["Japanese"]["send_at"] = "送信日";
	$fieldToolTipsshop_front_details["Japanese"]["send_at"] = "";
	$placeHoldersshop_front_details["Japanese"]["send_at"] = "";
	$fieldLabelsshop_front_details["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsshop_front_details["Japanese"]["created_at"] = "";
	$placeHoldersshop_front_details["Japanese"]["created_at"] = "";
	$fieldLabelsshop_front_details["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsshop_front_details["Japanese"]["created_by"] = "";
	$placeHoldersshop_front_details["Japanese"]["created_by"] = "";
	$fieldLabelsshop_front_details["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsshop_front_details["Japanese"]["updated_at"] = "";
	$placeHoldersshop_front_details["Japanese"]["updated_at"] = "";
	$fieldLabelsshop_front_details["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsshop_front_details["Japanese"]["updated_by"] = "";
	$placeHoldersshop_front_details["Japanese"]["updated_by"] = "";
	$fieldLabelsshop_front_details["Japanese"]["is_img_confirmed_products"] = "商品画像チェック";
	$fieldToolTipsshop_front_details["Japanese"]["is_img_confirmed_products"] = "";
	$placeHoldersshop_front_details["Japanese"]["is_img_confirmed_products"] = "";
	$fieldLabelsshop_front_details["Japanese"]["is_img_confirmed_iddocument"] = "身分証画像チェック";
	$fieldToolTipsshop_front_details["Japanese"]["is_img_confirmed_iddocument"] = "";
	$placeHoldersshop_front_details["Japanese"]["is_img_confirmed_iddocument"] = "";
	$fieldLabelsshop_front_details["Japanese"]["signature_image_path"] = "サイン画像";
	$fieldToolTipsshop_front_details["Japanese"]["signature_image_path"] = "";
	$placeHoldersshop_front_details["Japanese"]["signature_image_path"] = "";
	$fieldLabelsshop_front_details["Japanese"]["has_changed_profile"] = "Has Changed Profile";
	$fieldToolTipsshop_front_details["Japanese"]["has_changed_profile"] = "";
	$placeHoldersshop_front_details["Japanese"]["has_changed_profile"] = "";
	$fieldLabelsshop_front_details["Japanese"]["yubinnumber"] = "郵便番号";
	$fieldToolTipsshop_front_details["Japanese"]["yubinnumber"] = "";
	$placeHoldersshop_front_details["Japanese"]["yubinnumber"] = "";
	$fieldLabelsshop_front_details["Japanese"]["is_required_privacy_info"] = "個人情報の変更の有無";
	$fieldToolTipsshop_front_details["Japanese"]["is_required_privacy_info"] = "";
	$placeHoldersshop_front_details["Japanese"]["is_required_privacy_info"] = "";
	$fieldLabelsshop_front_details["Japanese"]["id_drive_url"] = "身分証画像";
	$fieldToolTipsshop_front_details["Japanese"]["id_drive_url"] = "";
	$placeHoldersshop_front_details["Japanese"]["id_drive_url"] = "";
	$fieldLabelsshop_front_details["Japanese"]["deal_type"] = "取引成否";
	$fieldToolTipsshop_front_details["Japanese"]["deal_type"] = "";
	$placeHoldersshop_front_details["Japanese"]["deal_type"] = "";
	$fieldLabelsshop_front_details["Japanese"]["purpose"] = "売買目的";
	$fieldToolTipsshop_front_details["Japanese"]["purpose"] = "";
	$placeHoldersshop_front_details["Japanese"]["purpose"] = "";
	$fieldLabelsshop_front_details["Japanese"]["links"] = "担当者";
	$fieldToolTipsshop_front_details["Japanese"]["links"] = "";
	$placeHoldersshop_front_details["Japanese"]["links"] = "";
	$fieldLabelsshop_front_details["Japanese"]["below_address"] = "以下住所";
	$fieldToolTipsshop_front_details["Japanese"]["below_address"] = "";
	$placeHoldersshop_front_details["Japanese"]["below_address"] = "";
	$fieldLabelsshop_front_details["Japanese"]["privacy_info_validation"] = "個人情報の必須項目";
	$fieldToolTipsshop_front_details["Japanese"]["privacy_info_validation"] = "";
	$placeHoldersshop_front_details["Japanese"]["privacy_info_validation"] = "";
	if (count($fieldToolTipsshop_front_details["Japanese"]))
		$tdatashop_front_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsshop_front_details[""] = array();
	$fieldToolTipsshop_front_details[""] = array();
	$placeHoldersshop_front_details[""] = array();
	$pageTitlesshop_front_details[""] = array();
	$fieldLabelsshop_front_details[""]["shop_front_id"] = "Shop Front Id";
	$fieldToolTipsshop_front_details[""]["shop_front_id"] = "";
	$placeHoldersshop_front_details[""]["shop_front_id"] = "";
	$fieldLabelsshop_front_details[""]["send_id"] = "Send Id";
	$fieldToolTipsshop_front_details[""]["send_id"] = "";
	$placeHoldersshop_front_details[""]["send_id"] = "";
	$fieldLabelsshop_front_details[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsshop_front_details[""]["ecc_id"] = "";
	$placeHoldersshop_front_details[""]["ecc_id"] = "";
	$fieldLabelsshop_front_details[""]["is_own"] = "Is Own";
	$fieldToolTipsshop_front_details[""]["is_own"] = "";
	$placeHoldersshop_front_details[""]["is_own"] = "";
	$fieldLabelsshop_front_details[""]["iddocment_category"] = "Iddocment Category";
	$fieldToolTipsshop_front_details[""]["iddocment_category"] = "";
	$placeHoldersshop_front_details[""]["iddocment_category"] = "";
	$fieldLabelsshop_front_details[""]["is_confirm_pp"] = "Is Confirm Pp";
	$fieldToolTipsshop_front_details[""]["is_confirm_pp"] = "";
	$placeHoldersshop_front_details[""]["is_confirm_pp"] = "";
	$fieldLabelsshop_front_details[""]["is_first"] = "Is First";
	$fieldToolTipsshop_front_details[""]["is_first"] = "";
	$placeHoldersshop_front_details[""]["is_first"] = "";
	$fieldLabelsshop_front_details[""]["lastname"] = "Lastname";
	$fieldToolTipsshop_front_details[""]["lastname"] = "";
	$placeHoldersshop_front_details[""]["lastname"] = "";
	$fieldLabelsshop_front_details[""]["firstname"] = "Firstname";
	$fieldToolTipsshop_front_details[""]["firstname"] = "";
	$placeHoldersshop_front_details[""]["firstname"] = "";
	$fieldLabelsshop_front_details[""]["furigana_lastname"] = "Furigana Lastname";
	$fieldToolTipsshop_front_details[""]["furigana_lastname"] = "";
	$placeHoldersshop_front_details[""]["furigana_lastname"] = "";
	$fieldLabelsshop_front_details[""]["furigana_firstname"] = "Furigana Firstname";
	$fieldToolTipsshop_front_details[""]["furigana_firstname"] = "";
	$placeHoldersshop_front_details[""]["furigana_firstname"] = "";
	$fieldLabelsshop_front_details[""]["gender"] = "Gender";
	$fieldToolTipsshop_front_details[""]["gender"] = "";
	$placeHoldersshop_front_details[""]["gender"] = "";
	$fieldLabelsshop_front_details[""]["birthday"] = "Birthday";
	$fieldToolTipsshop_front_details[""]["birthday"] = "";
	$placeHoldersshop_front_details[""]["birthday"] = "";
	$fieldLabelsshop_front_details[""]["prefecture"] = "Prefecture";
	$fieldToolTipsshop_front_details[""]["prefecture"] = "";
	$placeHoldersshop_front_details[""]["prefecture"] = "";
	$fieldLabelsshop_front_details[""]["city"] = "City";
	$fieldToolTipsshop_front_details[""]["city"] = "";
	$placeHoldersshop_front_details[""]["city"] = "";
	$fieldLabelsshop_front_details[""]["town"] = "Town";
	$fieldToolTipsshop_front_details[""]["town"] = "";
	$placeHoldersshop_front_details[""]["town"] = "";
	$fieldLabelsshop_front_details[""]["building_types"] = "Building Types";
	$fieldToolTipsshop_front_details[""]["building_types"] = "";
	$placeHoldersshop_front_details[""]["building_types"] = "";
	$fieldLabelsshop_front_details[""]["dwelling_types"] = "Dwelling Types";
	$fieldToolTipsshop_front_details[""]["dwelling_types"] = "";
	$placeHoldersshop_front_details[""]["dwelling_types"] = "";
	$fieldLabelsshop_front_details[""]["tel"] = "Tel";
	$fieldToolTipsshop_front_details[""]["tel"] = "";
	$placeHoldersshop_front_details[""]["tel"] = "";
	$fieldLabelsshop_front_details[""]["email"] = "Email";
	$fieldToolTipsshop_front_details[""]["email"] = "";
	$placeHoldersshop_front_details[""]["email"] = "";
	$fieldLabelsshop_front_details[""]["job_category"] = "Job Category";
	$fieldToolTipsshop_front_details[""]["job_category"] = "";
	$placeHoldersshop_front_details[""]["job_category"] = "";
	$fieldLabelsshop_front_details[""]["job_category_freetext"] = "Job Category Freetext";
	$fieldToolTipsshop_front_details[""]["job_category_freetext"] = "";
	$placeHoldersshop_front_details[""]["job_category_freetext"] = "";
	$fieldLabelsshop_front_details[""]["campaign"] = "Campaign";
	$fieldToolTipsshop_front_details[""]["campaign"] = "";
	$placeHoldersshop_front_details[""]["campaign"] = "";
	$fieldLabelsshop_front_details[""]["taransaction_result"] = "Taransaction Result";
	$fieldToolTipsshop_front_details[""]["taransaction_result"] = "";
	$placeHoldersshop_front_details[""]["taransaction_result"] = "";
	$fieldLabelsshop_front_details[""]["trading"] = "Trading";
	$fieldToolTipsshop_front_details[""]["trading"] = "";
	$placeHoldersshop_front_details[""]["trading"] = "";
	$fieldLabelsshop_front_details[""]["is_confirm_rules"] = "Is Confirm Rules";
	$fieldToolTipsshop_front_details[""]["is_confirm_rules"] = "";
	$placeHoldersshop_front_details[""]["is_confirm_rules"] = "";
	$fieldLabelsshop_front_details[""]["sign_img_path"] = "Sign Img Path";
	$fieldToolTipsshop_front_details[""]["sign_img_path"] = "";
	$placeHoldersshop_front_details[""]["sign_img_path"] = "";
	$fieldLabelsshop_front_details[""]["iddocment_image_path"] = "Iddocment Image Path";
	$fieldToolTipsshop_front_details[""]["iddocment_image_path"] = "";
	$placeHoldersshop_front_details[""]["iddocment_image_path"] = "";
	$fieldLabelsshop_front_details[""]["products_image_path"] = "Products Image Path";
	$fieldToolTipsshop_front_details[""]["products_image_path"] = "";
	$placeHoldersshop_front_details[""]["products_image_path"] = "";
	$fieldLabelsshop_front_details[""]["send_at"] = "Send At";
	$fieldToolTipsshop_front_details[""]["send_at"] = "";
	$placeHoldersshop_front_details[""]["send_at"] = "";
	$fieldLabelsshop_front_details[""]["created_at"] = "Created At";
	$fieldToolTipsshop_front_details[""]["created_at"] = "";
	$placeHoldersshop_front_details[""]["created_at"] = "";
	$fieldLabelsshop_front_details[""]["created_by"] = "Created By";
	$fieldToolTipsshop_front_details[""]["created_by"] = "";
	$placeHoldersshop_front_details[""]["created_by"] = "";
	$fieldLabelsshop_front_details[""]["updated_at"] = "Updated At";
	$fieldToolTipsshop_front_details[""]["updated_at"] = "";
	$placeHoldersshop_front_details[""]["updated_at"] = "";
	$fieldLabelsshop_front_details[""]["updated_by"] = "Updated By";
	$fieldToolTipsshop_front_details[""]["updated_by"] = "";
	$placeHoldersshop_front_details[""]["updated_by"] = "";
	$fieldLabelsshop_front_details[""]["is_img_confirmed_products"] = "Is Img Confirmed Products";
	$fieldToolTipsshop_front_details[""]["is_img_confirmed_products"] = "";
	$placeHoldersshop_front_details[""]["is_img_confirmed_products"] = "";
	$fieldLabelsshop_front_details[""]["is_img_confirmed_iddocument"] = "Is Img Confirmed Iddocument";
	$fieldToolTipsshop_front_details[""]["is_img_confirmed_iddocument"] = "";
	$placeHoldersshop_front_details[""]["is_img_confirmed_iddocument"] = "";
	$fieldLabelsshop_front_details[""]["signature_image_path"] = "Signature Image Path";
	$fieldToolTipsshop_front_details[""]["signature_image_path"] = "";
	$placeHoldersshop_front_details[""]["signature_image_path"] = "";
	$fieldLabelsshop_front_details[""]["has_changed_profile"] = "Has Changed Profile";
	$fieldToolTipsshop_front_details[""]["has_changed_profile"] = "";
	$placeHoldersshop_front_details[""]["has_changed_profile"] = "";
	$fieldLabelsshop_front_details[""]["yubinnumber"] = "Yubinnumber";
	$fieldToolTipsshop_front_details[""]["yubinnumber"] = "";
	$placeHoldersshop_front_details[""]["yubinnumber"] = "";
	$fieldLabelsshop_front_details[""]["is_required_privacy_info"] = "Is Required Privacy Info";
	$fieldToolTipsshop_front_details[""]["is_required_privacy_info"] = "";
	$placeHoldersshop_front_details[""]["is_required_privacy_info"] = "";
	$fieldLabelsshop_front_details[""]["id_drive_url"] = "Id Drive Url";
	$fieldToolTipsshop_front_details[""]["id_drive_url"] = "";
	$placeHoldersshop_front_details[""]["id_drive_url"] = "";
	$fieldLabelsshop_front_details[""]["deal_type"] = "Deal Type";
	$fieldToolTipsshop_front_details[""]["deal_type"] = "";
	$placeHoldersshop_front_details[""]["deal_type"] = "";
	$fieldLabelsshop_front_details[""]["purpose"] = "Purpose";
	$fieldToolTipsshop_front_details[""]["purpose"] = "";
	$placeHoldersshop_front_details[""]["purpose"] = "";
	$fieldLabelsshop_front_details[""]["links"] = "Links";
	$fieldToolTipsshop_front_details[""]["links"] = "";
	$placeHoldersshop_front_details[""]["links"] = "";
	$fieldLabelsshop_front_details[""]["below_address"] = "Below Address";
	$fieldToolTipsshop_front_details[""]["below_address"] = "";
	$placeHoldersshop_front_details[""]["below_address"] = "";
	$fieldLabelsshop_front_details[""]["privacy_info_validation"] = "Privacy Info Validation";
	$fieldToolTipsshop_front_details[""]["privacy_info_validation"] = "";
	$placeHoldersshop_front_details[""]["privacy_info_validation"] = "";
	if (count($fieldToolTipsshop_front_details[""]))
		$tdatashop_front_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsshop_front_details["English"] = array();
	$fieldToolTipsshop_front_details["English"] = array();
	$placeHoldersshop_front_details["English"] = array();
	$pageTitlesshop_front_details["English"] = array();
	$fieldLabelsshop_front_details["English"]["shop_front_id"] = "Shop Front Id";
	$fieldToolTipsshop_front_details["English"]["shop_front_id"] = "";
	$placeHoldersshop_front_details["English"]["shop_front_id"] = "";
	$fieldLabelsshop_front_details["English"]["send_id"] = "Send Id";
	$fieldToolTipsshop_front_details["English"]["send_id"] = "";
	$placeHoldersshop_front_details["English"]["send_id"] = "";
	$fieldLabelsshop_front_details["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsshop_front_details["English"]["ecc_id"] = "";
	$placeHoldersshop_front_details["English"]["ecc_id"] = "";
	$fieldLabelsshop_front_details["English"]["is_own"] = "Is Own";
	$fieldToolTipsshop_front_details["English"]["is_own"] = "";
	$placeHoldersshop_front_details["English"]["is_own"] = "";
	$fieldLabelsshop_front_details["English"]["iddocment_category"] = "Iddocment Category";
	$fieldToolTipsshop_front_details["English"]["iddocment_category"] = "";
	$placeHoldersshop_front_details["English"]["iddocment_category"] = "";
	$fieldLabelsshop_front_details["English"]["is_confirm_pp"] = "Is Confirm Pp";
	$fieldToolTipsshop_front_details["English"]["is_confirm_pp"] = "";
	$placeHoldersshop_front_details["English"]["is_confirm_pp"] = "";
	$fieldLabelsshop_front_details["English"]["is_first"] = "Is First";
	$fieldToolTipsshop_front_details["English"]["is_first"] = "";
	$placeHoldersshop_front_details["English"]["is_first"] = "";
	$fieldLabelsshop_front_details["English"]["lastname"] = "Lastname";
	$fieldToolTipsshop_front_details["English"]["lastname"] = "";
	$placeHoldersshop_front_details["English"]["lastname"] = "";
	$fieldLabelsshop_front_details["English"]["firstname"] = "Firstname";
	$fieldToolTipsshop_front_details["English"]["firstname"] = "";
	$placeHoldersshop_front_details["English"]["firstname"] = "";
	$fieldLabelsshop_front_details["English"]["furigana_lastname"] = "Furigana Lastname";
	$fieldToolTipsshop_front_details["English"]["furigana_lastname"] = "";
	$placeHoldersshop_front_details["English"]["furigana_lastname"] = "";
	$fieldLabelsshop_front_details["English"]["furigana_firstname"] = "Furigana Firstname";
	$fieldToolTipsshop_front_details["English"]["furigana_firstname"] = "";
	$placeHoldersshop_front_details["English"]["furigana_firstname"] = "";
	$fieldLabelsshop_front_details["English"]["gender"] = "Gender";
	$fieldToolTipsshop_front_details["English"]["gender"] = "";
	$placeHoldersshop_front_details["English"]["gender"] = "";
	$fieldLabelsshop_front_details["English"]["birthday"] = "Birthday";
	$fieldToolTipsshop_front_details["English"]["birthday"] = "";
	$placeHoldersshop_front_details["English"]["birthday"] = "";
	$fieldLabelsshop_front_details["English"]["prefecture"] = "Prefecture";
	$fieldToolTipsshop_front_details["English"]["prefecture"] = "";
	$placeHoldersshop_front_details["English"]["prefecture"] = "";
	$fieldLabelsshop_front_details["English"]["city"] = "City";
	$fieldToolTipsshop_front_details["English"]["city"] = "";
	$placeHoldersshop_front_details["English"]["city"] = "";
	$fieldLabelsshop_front_details["English"]["town"] = "Town";
	$fieldToolTipsshop_front_details["English"]["town"] = "";
	$placeHoldersshop_front_details["English"]["town"] = "";
	$fieldLabelsshop_front_details["English"]["building_types"] = "Building Types";
	$fieldToolTipsshop_front_details["English"]["building_types"] = "";
	$placeHoldersshop_front_details["English"]["building_types"] = "";
	$fieldLabelsshop_front_details["English"]["dwelling_types"] = "Dwelling Types";
	$fieldToolTipsshop_front_details["English"]["dwelling_types"] = "";
	$placeHoldersshop_front_details["English"]["dwelling_types"] = "";
	$fieldLabelsshop_front_details["English"]["tel"] = "Tel";
	$fieldToolTipsshop_front_details["English"]["tel"] = "";
	$placeHoldersshop_front_details["English"]["tel"] = "";
	$fieldLabelsshop_front_details["English"]["email"] = "Email";
	$fieldToolTipsshop_front_details["English"]["email"] = "";
	$placeHoldersshop_front_details["English"]["email"] = "";
	$fieldLabelsshop_front_details["English"]["job_category"] = "Job Category";
	$fieldToolTipsshop_front_details["English"]["job_category"] = "";
	$placeHoldersshop_front_details["English"]["job_category"] = "";
	$fieldLabelsshop_front_details["English"]["job_category_freetext"] = "Job Category Freetext";
	$fieldToolTipsshop_front_details["English"]["job_category_freetext"] = "";
	$placeHoldersshop_front_details["English"]["job_category_freetext"] = "";
	$fieldLabelsshop_front_details["English"]["campaign"] = "Campaign";
	$fieldToolTipsshop_front_details["English"]["campaign"] = "";
	$placeHoldersshop_front_details["English"]["campaign"] = "";
	$fieldLabelsshop_front_details["English"]["taransaction_result"] = "Taransaction Result";
	$fieldToolTipsshop_front_details["English"]["taransaction_result"] = "";
	$placeHoldersshop_front_details["English"]["taransaction_result"] = "";
	$fieldLabelsshop_front_details["English"]["trading"] = "Trading";
	$fieldToolTipsshop_front_details["English"]["trading"] = "";
	$placeHoldersshop_front_details["English"]["trading"] = "";
	$fieldLabelsshop_front_details["English"]["is_confirm_rules"] = "Is Confirm Rules";
	$fieldToolTipsshop_front_details["English"]["is_confirm_rules"] = "";
	$placeHoldersshop_front_details["English"]["is_confirm_rules"] = "";
	$fieldLabelsshop_front_details["English"]["sign_img_path"] = "Sign Img Path";
	$fieldToolTipsshop_front_details["English"]["sign_img_path"] = "";
	$placeHoldersshop_front_details["English"]["sign_img_path"] = "";
	$fieldLabelsshop_front_details["English"]["iddocment_image_path"] = "Iddocment Image Path";
	$fieldToolTipsshop_front_details["English"]["iddocment_image_path"] = "";
	$placeHoldersshop_front_details["English"]["iddocment_image_path"] = "";
	$fieldLabelsshop_front_details["English"]["products_image_path"] = "Products Image Path";
	$fieldToolTipsshop_front_details["English"]["products_image_path"] = "";
	$placeHoldersshop_front_details["English"]["products_image_path"] = "";
	$fieldLabelsshop_front_details["English"]["send_at"] = "Send At";
	$fieldToolTipsshop_front_details["English"]["send_at"] = "";
	$placeHoldersshop_front_details["English"]["send_at"] = "";
	$fieldLabelsshop_front_details["English"]["created_at"] = "Created At";
	$fieldToolTipsshop_front_details["English"]["created_at"] = "";
	$placeHoldersshop_front_details["English"]["created_at"] = "";
	$fieldLabelsshop_front_details["English"]["created_by"] = "Created By";
	$fieldToolTipsshop_front_details["English"]["created_by"] = "";
	$placeHoldersshop_front_details["English"]["created_by"] = "";
	$fieldLabelsshop_front_details["English"]["updated_at"] = "Updated At";
	$fieldToolTipsshop_front_details["English"]["updated_at"] = "";
	$placeHoldersshop_front_details["English"]["updated_at"] = "";
	$fieldLabelsshop_front_details["English"]["updated_by"] = "Updated By";
	$fieldToolTipsshop_front_details["English"]["updated_by"] = "";
	$placeHoldersshop_front_details["English"]["updated_by"] = "";
	$fieldLabelsshop_front_details["English"]["is_img_confirmed_products"] = "Is Img Confirmed Products";
	$fieldToolTipsshop_front_details["English"]["is_img_confirmed_products"] = "";
	$placeHoldersshop_front_details["English"]["is_img_confirmed_products"] = "";
	$fieldLabelsshop_front_details["English"]["is_img_confirmed_iddocument"] = "Is Img Confirmed Iddocument";
	$fieldToolTipsshop_front_details["English"]["is_img_confirmed_iddocument"] = "";
	$placeHoldersshop_front_details["English"]["is_img_confirmed_iddocument"] = "";
	$fieldLabelsshop_front_details["English"]["signature_image_path"] = "Signature Image Path";
	$fieldToolTipsshop_front_details["English"]["signature_image_path"] = "";
	$placeHoldersshop_front_details["English"]["signature_image_path"] = "";
	$fieldLabelsshop_front_details["English"]["has_changed_profile"] = "Has Changed Profile";
	$fieldToolTipsshop_front_details["English"]["has_changed_profile"] = "";
	$placeHoldersshop_front_details["English"]["has_changed_profile"] = "";
	$fieldLabelsshop_front_details["English"]["yubinnumber"] = "Yubinnumber";
	$fieldToolTipsshop_front_details["English"]["yubinnumber"] = "";
	$placeHoldersshop_front_details["English"]["yubinnumber"] = "";
	$fieldLabelsshop_front_details["English"]["is_required_privacy_info"] = "Is Required Privacy Info";
	$fieldToolTipsshop_front_details["English"]["is_required_privacy_info"] = "";
	$placeHoldersshop_front_details["English"]["is_required_privacy_info"] = "";
	$fieldLabelsshop_front_details["English"]["id_drive_url"] = "Id Drive Url";
	$fieldToolTipsshop_front_details["English"]["id_drive_url"] = "";
	$placeHoldersshop_front_details["English"]["id_drive_url"] = "";
	$fieldLabelsshop_front_details["English"]["deal_type"] = "Deal Type";
	$fieldToolTipsshop_front_details["English"]["deal_type"] = "";
	$placeHoldersshop_front_details["English"]["deal_type"] = "";
	$fieldLabelsshop_front_details["English"]["purpose"] = "Purpose";
	$fieldToolTipsshop_front_details["English"]["purpose"] = "";
	$placeHoldersshop_front_details["English"]["purpose"] = "";
	$fieldLabelsshop_front_details["English"]["links"] = "Links";
	$fieldToolTipsshop_front_details["English"]["links"] = "";
	$placeHoldersshop_front_details["English"]["links"] = "";
	$fieldLabelsshop_front_details["English"]["below_address"] = "Below Address";
	$fieldToolTipsshop_front_details["English"]["below_address"] = "";
	$placeHoldersshop_front_details["English"]["below_address"] = "";
	$fieldLabelsshop_front_details["English"]["privacy_info_validation"] = "Privacy Info Validation";
	$fieldToolTipsshop_front_details["English"]["privacy_info_validation"] = "";
	$placeHoldersshop_front_details["English"]["privacy_info_validation"] = "";
	if (count($fieldToolTipsshop_front_details["English"]))
		$tdatashop_front_details[".isUseToolTips"] = true;
}


	$tdatashop_front_details[".NCSearch"] = true;



$tdatashop_front_details[".shortTableName"] = "shop_front_details";
$tdatashop_front_details[".nSecOptions"] = 0;
$tdatashop_front_details[".recsPerRowPrint"] = 1;
$tdatashop_front_details[".mainTableOwnerID"] = "";
$tdatashop_front_details[".moveNext"] = 1;
$tdatashop_front_details[".entityType"] = 0;

$tdatashop_front_details[".strOriginalTableName"] = "shop_front_details";

	



$tdatashop_front_details[".showAddInPopup"] = false;

$tdatashop_front_details[".showEditInPopup"] = false;

$tdatashop_front_details[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatashop_front_details[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatashop_front_details[".fieldsForRegister"] = array();

$tdatashop_front_details[".listAjax"] = false;

	$tdatashop_front_details[".audit"] = true;

	$tdatashop_front_details[".locking"] = false;



$tdatashop_front_details[".list"] = true;

$tdatashop_front_details[".inlineEdit"] = true;


$tdatashop_front_details[".reorderRecordsByHeader"] = true;



$tdatashop_front_details[".inlineAdd"] = true;

$tdatashop_front_details[".import"] = true;

$tdatashop_front_details[".exportTo"] = true;


$tdatashop_front_details[".delete"] = true;

$tdatashop_front_details[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatashop_front_details[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatashop_front_details[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatashop_front_details[".searchSaving"] = false;
//

$tdatashop_front_details[".showSearchPanel"] = true;
		$tdatashop_front_details[".flexibleSearch"] = true;

$tdatashop_front_details[".isUseAjaxSuggest"] = true;

$tdatashop_front_details[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatashop_front_details[".ajaxCodeSnippetAdded"] = false;

$tdatashop_front_details[".buttonsAdded"] = false;

$tdatashop_front_details[".addPageEvents"] = false;

// use timepicker for search panel
$tdatashop_front_details[".isUseTimeForSearch"] = false;



$tdatashop_front_details[".badgeColor"] = "e07878";


$tdatashop_front_details[".allSearchFields"] = array();
$tdatashop_front_details[".filterFields"] = array();
$tdatashop_front_details[".requiredSearchFields"] = array();

$tdatashop_front_details[".allSearchFields"][] = "below_address";
	$tdatashop_front_details[".allSearchFields"][] = "privacy_info_validation";
	$tdatashop_front_details[".allSearchFields"][] = "shop_front_id";
	$tdatashop_front_details[".allSearchFields"][] = "send_id";
	$tdatashop_front_details[".allSearchFields"][] = "ecc_id";
	$tdatashop_front_details[".allSearchFields"][] = "links";
	$tdatashop_front_details[".allSearchFields"][] = "is_own";
	$tdatashop_front_details[".allSearchFields"][] = "is_required_privacy_info";
	$tdatashop_front_details[".allSearchFields"][] = "iddocment_category";
	$tdatashop_front_details[".allSearchFields"][] = "lastname";
	$tdatashop_front_details[".allSearchFields"][] = "firstname";
	$tdatashop_front_details[".allSearchFields"][] = "furigana_lastname";
	$tdatashop_front_details[".allSearchFields"][] = "furigana_firstname";
	$tdatashop_front_details[".allSearchFields"][] = "gender";
	$tdatashop_front_details[".allSearchFields"][] = "birthday";
	$tdatashop_front_details[".allSearchFields"][] = "yubinnumber";
	$tdatashop_front_details[".allSearchFields"][] = "prefecture";
	$tdatashop_front_details[".allSearchFields"][] = "city";
	$tdatashop_front_details[".allSearchFields"][] = "town";
	$tdatashop_front_details[".allSearchFields"][] = "building_types";
	$tdatashop_front_details[".allSearchFields"][] = "dwelling_types";
	$tdatashop_front_details[".allSearchFields"][] = "tel";
	$tdatashop_front_details[".allSearchFields"][] = "email";
	$tdatashop_front_details[".allSearchFields"][] = "job_category";
	$tdatashop_front_details[".allSearchFields"][] = "job_category_freetext";
	$tdatashop_front_details[".allSearchFields"][] = "deal_type";
	$tdatashop_front_details[".allSearchFields"][] = "purpose";
	$tdatashop_front_details[".allSearchFields"][] = "is_confirm_rules";
	$tdatashop_front_details[".allSearchFields"][] = "is_img_confirmed_products";
	$tdatashop_front_details[".allSearchFields"][] = "is_img_confirmed_iddocument";
	$tdatashop_front_details[".allSearchFields"][] = "signature_image_path";
	$tdatashop_front_details[".allSearchFields"][] = "products_image_path";
	$tdatashop_front_details[".allSearchFields"][] = "id_drive_url";
	$tdatashop_front_details[".allSearchFields"][] = "send_at";
	$tdatashop_front_details[".allSearchFields"][] = "created_at";
	$tdatashop_front_details[".allSearchFields"][] = "created_by";
	$tdatashop_front_details[".allSearchFields"][] = "updated_at";
	$tdatashop_front_details[".allSearchFields"][] = "updated_by";
	$tdatashop_front_details[".allSearchFields"][] = "iddocment_image_path";
	

$tdatashop_front_details[".googleLikeFields"] = array();
$tdatashop_front_details[".googleLikeFields"][] = "shop_front_id";
$tdatashop_front_details[".googleLikeFields"][] = "links";
$tdatashop_front_details[".googleLikeFields"][] = "send_id";
$tdatashop_front_details[".googleLikeFields"][] = "ecc_id";
$tdatashop_front_details[".googleLikeFields"][] = "is_own";
$tdatashop_front_details[".googleLikeFields"][] = "iddocment_category";
$tdatashop_front_details[".googleLikeFields"][] = "is_confirm_pp";
$tdatashop_front_details[".googleLikeFields"][] = "is_first";
$tdatashop_front_details[".googleLikeFields"][] = "lastname";
$tdatashop_front_details[".googleLikeFields"][] = "firstname";
$tdatashop_front_details[".googleLikeFields"][] = "furigana_lastname";
$tdatashop_front_details[".googleLikeFields"][] = "furigana_firstname";
$tdatashop_front_details[".googleLikeFields"][] = "gender";
$tdatashop_front_details[".googleLikeFields"][] = "birthday";
$tdatashop_front_details[".googleLikeFields"][] = "prefecture";
$tdatashop_front_details[".googleLikeFields"][] = "city";
$tdatashop_front_details[".googleLikeFields"][] = "town";
$tdatashop_front_details[".googleLikeFields"][] = "building_types";
$tdatashop_front_details[".googleLikeFields"][] = "dwelling_types";
$tdatashop_front_details[".googleLikeFields"][] = "tel";
$tdatashop_front_details[".googleLikeFields"][] = "email";
$tdatashop_front_details[".googleLikeFields"][] = "job_category";
$tdatashop_front_details[".googleLikeFields"][] = "job_category_freetext";
$tdatashop_front_details[".googleLikeFields"][] = "campaign";
$tdatashop_front_details[".googleLikeFields"][] = "taransaction_result";
$tdatashop_front_details[".googleLikeFields"][] = "trading";
$tdatashop_front_details[".googleLikeFields"][] = "is_confirm_rules";
$tdatashop_front_details[".googleLikeFields"][] = "sign_img_path";
$tdatashop_front_details[".googleLikeFields"][] = "iddocment_image_path";
$tdatashop_front_details[".googleLikeFields"][] = "products_image_path";
$tdatashop_front_details[".googleLikeFields"][] = "send_at";
$tdatashop_front_details[".googleLikeFields"][] = "created_at";
$tdatashop_front_details[".googleLikeFields"][] = "created_by";
$tdatashop_front_details[".googleLikeFields"][] = "updated_at";
$tdatashop_front_details[".googleLikeFields"][] = "updated_by";
$tdatashop_front_details[".googleLikeFields"][] = "is_img_confirmed_products";
$tdatashop_front_details[".googleLikeFields"][] = "is_img_confirmed_iddocument";
$tdatashop_front_details[".googleLikeFields"][] = "signature_image_path";
$tdatashop_front_details[".googleLikeFields"][] = "has_changed_profile";
$tdatashop_front_details[".googleLikeFields"][] = "yubinnumber";
$tdatashop_front_details[".googleLikeFields"][] = "is_required_privacy_info";
$tdatashop_front_details[".googleLikeFields"][] = "id_drive_url";
$tdatashop_front_details[".googleLikeFields"][] = "deal_type";
$tdatashop_front_details[".googleLikeFields"][] = "purpose";
$tdatashop_front_details[".googleLikeFields"][] = "below_address";
$tdatashop_front_details[".googleLikeFields"][] = "privacy_info_validation";


$tdatashop_front_details[".advSearchFields"] = array();
$tdatashop_front_details[".advSearchFields"][] = "below_address";
$tdatashop_front_details[".advSearchFields"][] = "privacy_info_validation";
$tdatashop_front_details[".advSearchFields"][] = "shop_front_id";
$tdatashop_front_details[".advSearchFields"][] = "send_id";
$tdatashop_front_details[".advSearchFields"][] = "ecc_id";
$tdatashop_front_details[".advSearchFields"][] = "links";
$tdatashop_front_details[".advSearchFields"][] = "is_own";
$tdatashop_front_details[".advSearchFields"][] = "is_required_privacy_info";
$tdatashop_front_details[".advSearchFields"][] = "iddocment_category";
$tdatashop_front_details[".advSearchFields"][] = "lastname";
$tdatashop_front_details[".advSearchFields"][] = "firstname";
$tdatashop_front_details[".advSearchFields"][] = "furigana_lastname";
$tdatashop_front_details[".advSearchFields"][] = "furigana_firstname";
$tdatashop_front_details[".advSearchFields"][] = "gender";
$tdatashop_front_details[".advSearchFields"][] = "birthday";
$tdatashop_front_details[".advSearchFields"][] = "yubinnumber";
$tdatashop_front_details[".advSearchFields"][] = "prefecture";
$tdatashop_front_details[".advSearchFields"][] = "city";
$tdatashop_front_details[".advSearchFields"][] = "town";
$tdatashop_front_details[".advSearchFields"][] = "building_types";
$tdatashop_front_details[".advSearchFields"][] = "dwelling_types";
$tdatashop_front_details[".advSearchFields"][] = "tel";
$tdatashop_front_details[".advSearchFields"][] = "email";
$tdatashop_front_details[".advSearchFields"][] = "job_category";
$tdatashop_front_details[".advSearchFields"][] = "job_category_freetext";
$tdatashop_front_details[".advSearchFields"][] = "deal_type";
$tdatashop_front_details[".advSearchFields"][] = "purpose";
$tdatashop_front_details[".advSearchFields"][] = "is_confirm_rules";
$tdatashop_front_details[".advSearchFields"][] = "is_img_confirmed_products";
$tdatashop_front_details[".advSearchFields"][] = "is_img_confirmed_iddocument";
$tdatashop_front_details[".advSearchFields"][] = "signature_image_path";
$tdatashop_front_details[".advSearchFields"][] = "products_image_path";
$tdatashop_front_details[".advSearchFields"][] = "id_drive_url";
$tdatashop_front_details[".advSearchFields"][] = "send_at";
$tdatashop_front_details[".advSearchFields"][] = "created_at";
$tdatashop_front_details[".advSearchFields"][] = "created_by";
$tdatashop_front_details[".advSearchFields"][] = "updated_at";
$tdatashop_front_details[".advSearchFields"][] = "updated_by";
$tdatashop_front_details[".advSearchFields"][] = "iddocment_image_path";

$tdatashop_front_details[".tableType"] = "list";

$tdatashop_front_details[".printerPageOrientation"] = 0;
$tdatashop_front_details[".nPrinterPageScale"] = 100;

$tdatashop_front_details[".nPrinterSplitRecords"] = 40;

$tdatashop_front_details[".nPrinterPDFSplitRecords"] = 40;



$tdatashop_front_details[".geocodingEnabled"] = false;





$tdatashop_front_details[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatashop_front_details[".pageSize"] = 20;

$tdatashop_front_details[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shop_front_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatashop_front_details[".strOrderBy"] = $tstrOrderBy;

$tdatashop_front_details[".orderindexes"] = array();
$tdatashop_front_details[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`shop_front_id`");

$tdatashop_front_details[".sqlHead"] = "SELECT `shop_front_id`,  `shop_front_id` AS `links`,  `send_id`,  `ecc_id`,  `is_own`,  `iddocment_category`,  `is_confirm_pp`,  `is_first`,  `lastname`,  `firstname`,  `furigana_lastname`,  `furigana_firstname`,  `gender`,  `birthday`,  `prefecture`,  `city`,  `town`,  `building_types`,  `dwelling_types`,  `tel`,  `email`,  `job_category`,  `job_category_freetext`,  `campaign`,  `taransaction_result`,  `trading`,  `is_confirm_rules`,  `sign_img_path`,  `iddocment_image_path`,  `products_image_path`,  `send_at`,  `created_at`,  `created_by`,  `updated_at`,  `updated_by`,  `is_img_confirmed_products`,  `is_img_confirmed_iddocument`,  `signature_image_path`,  `has_changed_profile`,  `yubinnumber`,  `is_required_privacy_info`,  `id_drive_url`,  `deal_type`,  `purpose`,  `below_address`,  `privacy_info_validation`";
$tdatashop_front_details[".sqlFrom"] = "FROM `shop_front_details`";
$tdatashop_front_details[".sqlWhereExpr"] = "";
$tdatashop_front_details[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatashop_front_details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatashop_front_details[".arrGroupsPerPage"] = $arrGPP;

$tdatashop_front_details[".highlightSearchResults"] = true;

$tableKeysshop_front_details = array();
$tableKeysshop_front_details[] = "shop_front_id";
$tdatashop_front_details[".Keys"] = $tableKeysshop_front_details;

$tdatashop_front_details[".listFields"] = array();
$tdatashop_front_details[".listFields"][] = "shop_front_id";
$tdatashop_front_details[".listFields"][] = "send_id";
$tdatashop_front_details[".listFields"][] = "ecc_id";
$tdatashop_front_details[".listFields"][] = "links";
$tdatashop_front_details[".listFields"][] = "is_own";
$tdatashop_front_details[".listFields"][] = "is_required_privacy_info";
$tdatashop_front_details[".listFields"][] = "privacy_info_validation";
$tdatashop_front_details[".listFields"][] = "iddocment_category";
$tdatashop_front_details[".listFields"][] = "lastname";
$tdatashop_front_details[".listFields"][] = "firstname";
$tdatashop_front_details[".listFields"][] = "furigana_lastname";
$tdatashop_front_details[".listFields"][] = "furigana_firstname";
$tdatashop_front_details[".listFields"][] = "gender";
$tdatashop_front_details[".listFields"][] = "birthday";
$tdatashop_front_details[".listFields"][] = "yubinnumber";
$tdatashop_front_details[".listFields"][] = "prefecture";
$tdatashop_front_details[".listFields"][] = "city";
$tdatashop_front_details[".listFields"][] = "town";
$tdatashop_front_details[".listFields"][] = "below_address";
$tdatashop_front_details[".listFields"][] = "building_types";
$tdatashop_front_details[".listFields"][] = "dwelling_types";
$tdatashop_front_details[".listFields"][] = "tel";
$tdatashop_front_details[".listFields"][] = "email";
$tdatashop_front_details[".listFields"][] = "job_category";
$tdatashop_front_details[".listFields"][] = "job_category_freetext";
$tdatashop_front_details[".listFields"][] = "deal_type";
$tdatashop_front_details[".listFields"][] = "purpose";
$tdatashop_front_details[".listFields"][] = "is_confirm_rules";
$tdatashop_front_details[".listFields"][] = "is_img_confirmed_products";
$tdatashop_front_details[".listFields"][] = "is_img_confirmed_iddocument";
$tdatashop_front_details[".listFields"][] = "signature_image_path";
$tdatashop_front_details[".listFields"][] = "products_image_path";
$tdatashop_front_details[".listFields"][] = "id_drive_url";
$tdatashop_front_details[".listFields"][] = "send_at";
$tdatashop_front_details[".listFields"][] = "created_at";
$tdatashop_front_details[".listFields"][] = "created_by";
$tdatashop_front_details[".listFields"][] = "updated_at";
$tdatashop_front_details[".listFields"][] = "updated_by";
$tdatashop_front_details[".listFields"][] = "iddocment_image_path";

$tdatashop_front_details[".hideMobileList"] = array();


$tdatashop_front_details[".viewFields"] = array();

$tdatashop_front_details[".addFields"] = array();

$tdatashop_front_details[".masterListFields"] = array();
$tdatashop_front_details[".masterListFields"][] = "has_changed_profile";
$tdatashop_front_details[".masterListFields"][] = "below_address";
$tdatashop_front_details[".masterListFields"][] = "privacy_info_validation";
$tdatashop_front_details[".masterListFields"][] = "shop_front_id";
$tdatashop_front_details[".masterListFields"][] = "send_id";
$tdatashop_front_details[".masterListFields"][] = "ecc_id";
$tdatashop_front_details[".masterListFields"][] = "links";
$tdatashop_front_details[".masterListFields"][] = "is_own";
$tdatashop_front_details[".masterListFields"][] = "is_confirm_pp";
$tdatashop_front_details[".masterListFields"][] = "is_required_privacy_info";
$tdatashop_front_details[".masterListFields"][] = "iddocment_category";
$tdatashop_front_details[".masterListFields"][] = "is_first";
$tdatashop_front_details[".masterListFields"][] = "lastname";
$tdatashop_front_details[".masterListFields"][] = "firstname";
$tdatashop_front_details[".masterListFields"][] = "furigana_lastname";
$tdatashop_front_details[".masterListFields"][] = "furigana_firstname";
$tdatashop_front_details[".masterListFields"][] = "gender";
$tdatashop_front_details[".masterListFields"][] = "birthday";
$tdatashop_front_details[".masterListFields"][] = "yubinnumber";
$tdatashop_front_details[".masterListFields"][] = "prefecture";
$tdatashop_front_details[".masterListFields"][] = "city";
$tdatashop_front_details[".masterListFields"][] = "town";
$tdatashop_front_details[".masterListFields"][] = "building_types";
$tdatashop_front_details[".masterListFields"][] = "dwelling_types";
$tdatashop_front_details[".masterListFields"][] = "tel";
$tdatashop_front_details[".masterListFields"][] = "email";
$tdatashop_front_details[".masterListFields"][] = "job_category";
$tdatashop_front_details[".masterListFields"][] = "job_category_freetext";
$tdatashop_front_details[".masterListFields"][] = "campaign";
$tdatashop_front_details[".masterListFields"][] = "taransaction_result";
$tdatashop_front_details[".masterListFields"][] = "deal_type";
$tdatashop_front_details[".masterListFields"][] = "trading";
$tdatashop_front_details[".masterListFields"][] = "purpose";
$tdatashop_front_details[".masterListFields"][] = "is_confirm_rules";
$tdatashop_front_details[".masterListFields"][] = "sign_img_path";
$tdatashop_front_details[".masterListFields"][] = "is_img_confirmed_products";
$tdatashop_front_details[".masterListFields"][] = "is_img_confirmed_iddocument";
$tdatashop_front_details[".masterListFields"][] = "signature_image_path";
$tdatashop_front_details[".masterListFields"][] = "products_image_path";
$tdatashop_front_details[".masterListFields"][] = "id_drive_url";
$tdatashop_front_details[".masterListFields"][] = "send_at";
$tdatashop_front_details[".masterListFields"][] = "created_at";
$tdatashop_front_details[".masterListFields"][] = "created_by";
$tdatashop_front_details[".masterListFields"][] = "updated_at";
$tdatashop_front_details[".masterListFields"][] = "updated_by";
$tdatashop_front_details[".masterListFields"][] = "iddocment_image_path";

$tdatashop_front_details[".inlineAddFields"] = array();
$tdatashop_front_details[".inlineAddFields"][] = "send_id";
$tdatashop_front_details[".inlineAddFields"][] = "ecc_id";
$tdatashop_front_details[".inlineAddFields"][] = "is_own";
$tdatashop_front_details[".inlineAddFields"][] = "is_required_privacy_info";
$tdatashop_front_details[".inlineAddFields"][] = "privacy_info_validation";
$tdatashop_front_details[".inlineAddFields"][] = "iddocment_category";
$tdatashop_front_details[".inlineAddFields"][] = "lastname";
$tdatashop_front_details[".inlineAddFields"][] = "firstname";
$tdatashop_front_details[".inlineAddFields"][] = "furigana_lastname";
$tdatashop_front_details[".inlineAddFields"][] = "furigana_firstname";
$tdatashop_front_details[".inlineAddFields"][] = "gender";
$tdatashop_front_details[".inlineAddFields"][] = "birthday";
$tdatashop_front_details[".inlineAddFields"][] = "yubinnumber";
$tdatashop_front_details[".inlineAddFields"][] = "prefecture";
$tdatashop_front_details[".inlineAddFields"][] = "city";
$tdatashop_front_details[".inlineAddFields"][] = "town";
$tdatashop_front_details[".inlineAddFields"][] = "below_address";
$tdatashop_front_details[".inlineAddFields"][] = "building_types";
$tdatashop_front_details[".inlineAddFields"][] = "dwelling_types";
$tdatashop_front_details[".inlineAddFields"][] = "tel";
$tdatashop_front_details[".inlineAddFields"][] = "email";
$tdatashop_front_details[".inlineAddFields"][] = "job_category";
$tdatashop_front_details[".inlineAddFields"][] = "job_category_freetext";
$tdatashop_front_details[".inlineAddFields"][] = "deal_type";
$tdatashop_front_details[".inlineAddFields"][] = "purpose";
$tdatashop_front_details[".inlineAddFields"][] = "is_confirm_rules";
$tdatashop_front_details[".inlineAddFields"][] = "is_img_confirmed_products";
$tdatashop_front_details[".inlineAddFields"][] = "is_img_confirmed_iddocument";
$tdatashop_front_details[".inlineAddFields"][] = "signature_image_path";
$tdatashop_front_details[".inlineAddFields"][] = "products_image_path";
$tdatashop_front_details[".inlineAddFields"][] = "id_drive_url";
$tdatashop_front_details[".inlineAddFields"][] = "send_at";
$tdatashop_front_details[".inlineAddFields"][] = "created_at";
$tdatashop_front_details[".inlineAddFields"][] = "created_by";
$tdatashop_front_details[".inlineAddFields"][] = "updated_at";
$tdatashop_front_details[".inlineAddFields"][] = "updated_by";
$tdatashop_front_details[".inlineAddFields"][] = "iddocment_image_path";

$tdatashop_front_details[".editFields"] = array();

$tdatashop_front_details[".inlineEditFields"] = array();
$tdatashop_front_details[".inlineEditFields"][] = "send_id";
$tdatashop_front_details[".inlineEditFields"][] = "ecc_id";
$tdatashop_front_details[".inlineEditFields"][] = "is_own";
$tdatashop_front_details[".inlineEditFields"][] = "is_required_privacy_info";
$tdatashop_front_details[".inlineEditFields"][] = "privacy_info_validation";
$tdatashop_front_details[".inlineEditFields"][] = "iddocment_category";
$tdatashop_front_details[".inlineEditFields"][] = "lastname";
$tdatashop_front_details[".inlineEditFields"][] = "firstname";
$tdatashop_front_details[".inlineEditFields"][] = "furigana_lastname";
$tdatashop_front_details[".inlineEditFields"][] = "furigana_firstname";
$tdatashop_front_details[".inlineEditFields"][] = "gender";
$tdatashop_front_details[".inlineEditFields"][] = "birthday";
$tdatashop_front_details[".inlineEditFields"][] = "yubinnumber";
$tdatashop_front_details[".inlineEditFields"][] = "prefecture";
$tdatashop_front_details[".inlineEditFields"][] = "city";
$tdatashop_front_details[".inlineEditFields"][] = "town";
$tdatashop_front_details[".inlineEditFields"][] = "below_address";
$tdatashop_front_details[".inlineEditFields"][] = "building_types";
$tdatashop_front_details[".inlineEditFields"][] = "dwelling_types";
$tdatashop_front_details[".inlineEditFields"][] = "tel";
$tdatashop_front_details[".inlineEditFields"][] = "email";
$tdatashop_front_details[".inlineEditFields"][] = "job_category";
$tdatashop_front_details[".inlineEditFields"][] = "job_category_freetext";
$tdatashop_front_details[".inlineEditFields"][] = "deal_type";
$tdatashop_front_details[".inlineEditFields"][] = "purpose";
$tdatashop_front_details[".inlineEditFields"][] = "is_confirm_rules";
$tdatashop_front_details[".inlineEditFields"][] = "is_img_confirmed_products";
$tdatashop_front_details[".inlineEditFields"][] = "is_img_confirmed_iddocument";
$tdatashop_front_details[".inlineEditFields"][] = "signature_image_path";
$tdatashop_front_details[".inlineEditFields"][] = "products_image_path";
$tdatashop_front_details[".inlineEditFields"][] = "id_drive_url";
$tdatashop_front_details[".inlineEditFields"][] = "send_at";
$tdatashop_front_details[".inlineEditFields"][] = "created_at";
$tdatashop_front_details[".inlineEditFields"][] = "created_by";
$tdatashop_front_details[".inlineEditFields"][] = "updated_at";
$tdatashop_front_details[".inlineEditFields"][] = "updated_by";
$tdatashop_front_details[".inlineEditFields"][] = "iddocment_image_path";

$tdatashop_front_details[".updateSelectedFields"] = array();


$tdatashop_front_details[".exportFields"] = array();
$tdatashop_front_details[".exportFields"][] = "below_address";
$tdatashop_front_details[".exportFields"][] = "privacy_info_validation";
$tdatashop_front_details[".exportFields"][] = "shop_front_id";
$tdatashop_front_details[".exportFields"][] = "send_id";
$tdatashop_front_details[".exportFields"][] = "ecc_id";
$tdatashop_front_details[".exportFields"][] = "links";
$tdatashop_front_details[".exportFields"][] = "is_own";
$tdatashop_front_details[".exportFields"][] = "is_required_privacy_info";
$tdatashop_front_details[".exportFields"][] = "iddocment_category";
$tdatashop_front_details[".exportFields"][] = "lastname";
$tdatashop_front_details[".exportFields"][] = "firstname";
$tdatashop_front_details[".exportFields"][] = "furigana_lastname";
$tdatashop_front_details[".exportFields"][] = "furigana_firstname";
$tdatashop_front_details[".exportFields"][] = "gender";
$tdatashop_front_details[".exportFields"][] = "birthday";
$tdatashop_front_details[".exportFields"][] = "yubinnumber";
$tdatashop_front_details[".exportFields"][] = "prefecture";
$tdatashop_front_details[".exportFields"][] = "city";
$tdatashop_front_details[".exportFields"][] = "town";
$tdatashop_front_details[".exportFields"][] = "building_types";
$tdatashop_front_details[".exportFields"][] = "dwelling_types";
$tdatashop_front_details[".exportFields"][] = "tel";
$tdatashop_front_details[".exportFields"][] = "email";
$tdatashop_front_details[".exportFields"][] = "job_category";
$tdatashop_front_details[".exportFields"][] = "job_category_freetext";
$tdatashop_front_details[".exportFields"][] = "deal_type";
$tdatashop_front_details[".exportFields"][] = "purpose";
$tdatashop_front_details[".exportFields"][] = "is_confirm_rules";
$tdatashop_front_details[".exportFields"][] = "is_img_confirmed_products";
$tdatashop_front_details[".exportFields"][] = "is_img_confirmed_iddocument";
$tdatashop_front_details[".exportFields"][] = "signature_image_path";
$tdatashop_front_details[".exportFields"][] = "products_image_path";
$tdatashop_front_details[".exportFields"][] = "id_drive_url";
$tdatashop_front_details[".exportFields"][] = "send_at";
$tdatashop_front_details[".exportFields"][] = "created_at";
$tdatashop_front_details[".exportFields"][] = "created_by";
$tdatashop_front_details[".exportFields"][] = "updated_at";
$tdatashop_front_details[".exportFields"][] = "updated_by";
$tdatashop_front_details[".exportFields"][] = "iddocment_image_path";

$tdatashop_front_details[".importFields"] = array();
$tdatashop_front_details[".importFields"][] = "shop_front_id";
$tdatashop_front_details[".importFields"][] = "links";
$tdatashop_front_details[".importFields"][] = "send_id";
$tdatashop_front_details[".importFields"][] = "ecc_id";
$tdatashop_front_details[".importFields"][] = "is_own";
$tdatashop_front_details[".importFields"][] = "iddocment_category";
$tdatashop_front_details[".importFields"][] = "lastname";
$tdatashop_front_details[".importFields"][] = "firstname";
$tdatashop_front_details[".importFields"][] = "furigana_lastname";
$tdatashop_front_details[".importFields"][] = "furigana_firstname";
$tdatashop_front_details[".importFields"][] = "gender";
$tdatashop_front_details[".importFields"][] = "birthday";
$tdatashop_front_details[".importFields"][] = "prefecture";
$tdatashop_front_details[".importFields"][] = "city";
$tdatashop_front_details[".importFields"][] = "town";
$tdatashop_front_details[".importFields"][] = "building_types";
$tdatashop_front_details[".importFields"][] = "dwelling_types";
$tdatashop_front_details[".importFields"][] = "tel";
$tdatashop_front_details[".importFields"][] = "email";
$tdatashop_front_details[".importFields"][] = "job_category";
$tdatashop_front_details[".importFields"][] = "job_category_freetext";
$tdatashop_front_details[".importFields"][] = "is_confirm_rules";
$tdatashop_front_details[".importFields"][] = "iddocment_image_path";
$tdatashop_front_details[".importFields"][] = "products_image_path";
$tdatashop_front_details[".importFields"][] = "send_at";
$tdatashop_front_details[".importFields"][] = "created_at";
$tdatashop_front_details[".importFields"][] = "created_by";
$tdatashop_front_details[".importFields"][] = "updated_at";
$tdatashop_front_details[".importFields"][] = "updated_by";
$tdatashop_front_details[".importFields"][] = "is_img_confirmed_products";
$tdatashop_front_details[".importFields"][] = "is_img_confirmed_iddocument";
$tdatashop_front_details[".importFields"][] = "signature_image_path";
$tdatashop_front_details[".importFields"][] = "yubinnumber";
$tdatashop_front_details[".importFields"][] = "is_required_privacy_info";
$tdatashop_front_details[".importFields"][] = "id_drive_url";
$tdatashop_front_details[".importFields"][] = "deal_type";
$tdatashop_front_details[".importFields"][] = "purpose";
$tdatashop_front_details[".importFields"][] = "below_address";
$tdatashop_front_details[".importFields"][] = "privacy_info_validation";

$tdatashop_front_details[".printFields"] = array();

//	shop_front_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "shop_front_id";
	$fdata["GoodName"] = "shop_front_id";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","shop_front_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shop_front_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shop_front_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatashop_front_details["shop_front_id"] = $fdata;
//	links
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "links";
	$fdata["GoodName"] = "links";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","links");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shop_front_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shop_front_id`";

	
	
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




	$tdatashop_front_details["links"] = $fdata;
//	send_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "send_id";
	$fdata["GoodName"] = "send_id";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","send_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "send_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`send_id`";

	
	
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
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

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




	$tdatashop_front_details["send_id"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatashop_front_details["ecc_id"] = $fdata;
//	is_own
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "is_own";
	$fdata["GoodName"] = "is_own";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","is_own");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_own";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_own`";

	
	
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




	$tdatashop_front_details["is_own"] = $fdata;
//	iddocment_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "iddocment_category";
	$fdata["GoodName"] = "iddocment_category";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","iddocment_category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "iddocment_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`iddocment_category`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["iddocment_category"] = $fdata;
//	is_confirm_pp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "is_confirm_pp";
	$fdata["GoodName"] = "is_confirm_pp";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","is_confirm_pp");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "is_confirm_pp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_confirm_pp`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatashop_front_details["is_confirm_pp"] = $fdata;
//	is_first
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "is_first";
	$fdata["GoodName"] = "is_first";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","is_first");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "is_first";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_first`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatashop_front_details["is_first"] = $fdata;
//	lastname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "lastname";
	$fdata["GoodName"] = "lastname";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","lastname");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "lastname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`lastname`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["lastname"] = $fdata;
//	firstname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "firstname";
	$fdata["GoodName"] = "firstname";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","firstname");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "firstname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`firstname`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["firstname"] = $fdata;
//	furigana_lastname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "furigana_lastname";
	$fdata["GoodName"] = "furigana_lastname";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","furigana_lastname");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "furigana_lastname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`furigana_lastname`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["furigana_lastname"] = $fdata;
//	furigana_firstname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "furigana_firstname";
	$fdata["GoodName"] = "furigana_firstname";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","furigana_firstname");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "furigana_firstname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`furigana_firstname`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["furigana_firstname"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","gender");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`gender`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["gender"] = $fdata;
//	birthday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "birthday";
	$fdata["GoodName"] = "birthday";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","birthday");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "birthday";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`birthday`";

	
	
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




	$tdatashop_front_details["birthday"] = $fdata;
//	prefecture
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "prefecture";
	$fdata["GoodName"] = "prefecture";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","prefecture");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "prefecture";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`prefecture`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["prefecture"] = $fdata;
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","city");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "city";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`city`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["city"] = $fdata;
//	town
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "town";
	$fdata["GoodName"] = "town";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","town");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "town";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`town`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["town"] = $fdata;
//	building_types
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "building_types";
	$fdata["GoodName"] = "building_types";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","building_types");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "building_types";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`building_types`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["building_types"] = $fdata;
//	dwelling_types
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "dwelling_types";
	$fdata["GoodName"] = "dwelling_types";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","dwelling_types");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dwelling_types";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dwelling_types`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["dwelling_types"] = $fdata;
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","tel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatashop_front_details["tel"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","email");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatashop_front_details["email"] = $fdata;
//	job_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "job_category";
	$fdata["GoodName"] = "job_category";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","job_category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "job_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`job_category`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["job_category"] = $fdata;
//	job_category_freetext
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "job_category_freetext";
	$fdata["GoodName"] = "job_category_freetext";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","job_category_freetext");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "job_category_freetext";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`job_category_freetext`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["job_category_freetext"] = $fdata;
//	campaign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "campaign";
	$fdata["GoodName"] = "campaign";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","campaign");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "campaign";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`campaign`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatashop_front_details["campaign"] = $fdata;
//	taransaction_result
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "taransaction_result";
	$fdata["GoodName"] = "taransaction_result";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","taransaction_result");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "taransaction_result";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`taransaction_result`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatashop_front_details["taransaction_result"] = $fdata;
//	trading
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "trading";
	$fdata["GoodName"] = "trading";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","trading");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "trading";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`trading`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatashop_front_details["trading"] = $fdata;
//	is_confirm_rules
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "is_confirm_rules";
	$fdata["GoodName"] = "is_confirm_rules";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","is_confirm_rules");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_confirm_rules";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_confirm_rules`";

	
	
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




	$tdatashop_front_details["is_confirm_rules"] = $fdata;
//	sign_img_path
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "sign_img_path";
	$fdata["GoodName"] = "sign_img_path";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","sign_img_path");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sign_img_path";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sign_img_path`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatashop_front_details["sign_img_path"] = $fdata;
//	iddocment_image_path
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "iddocment_image_path";
	$fdata["GoodName"] = "iddocment_image_path";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","iddocment_image_path");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "iddocment_image_path";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`iddocment_image_path`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["iddocment_image_path"] = $fdata;
//	products_image_path
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "products_image_path";
	$fdata["GoodName"] = "products_image_path";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","products_image_path");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "products_image_path";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`products_image_path`";

	
	
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




	$tdatashop_front_details["products_image_path"] = $fdata;
//	send_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "send_at";
	$fdata["GoodName"] = "send_at";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","send_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "send_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`send_at`";

	
	
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




	$tdatashop_front_details["send_at"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatashop_front_details["created_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatashop_front_details["created_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatashop_front_details["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatashop_front_details["updated_by"] = $fdata;
//	is_img_confirmed_products
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "is_img_confirmed_products";
	$fdata["GoodName"] = "is_img_confirmed_products";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","is_img_confirmed_products");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_img_confirmed_products";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_img_confirmed_products`";

	
	
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




	$tdatashop_front_details["is_img_confirmed_products"] = $fdata;
//	is_img_confirmed_iddocument
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "is_img_confirmed_iddocument";
	$fdata["GoodName"] = "is_img_confirmed_iddocument";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","is_img_confirmed_iddocument");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_img_confirmed_iddocument";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_img_confirmed_iddocument`";

	
	
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




	$tdatashop_front_details["is_img_confirmed_iddocument"] = $fdata;
//	signature_image_path
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "signature_image_path";
	$fdata["GoodName"] = "signature_image_path";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","signature_image_path");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "signature_image_path";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`signature_image_path`";

	
	
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




	$tdatashop_front_details["signature_image_path"] = $fdata;
//	has_changed_profile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "has_changed_profile";
	$fdata["GoodName"] = "has_changed_profile";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","has_changed_profile");
	$fdata["FieldType"] = 16;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "has_changed_profile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`has_changed_profile`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdatashop_front_details["has_changed_profile"] = $fdata;
//	yubinnumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "yubinnumber";
	$fdata["GoodName"] = "yubinnumber";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","yubinnumber");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "yubinnumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`yubinnumber`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["yubinnumber"] = $fdata;
//	is_required_privacy_info
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "is_required_privacy_info";
	$fdata["GoodName"] = "is_required_privacy_info";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","is_required_privacy_info");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_required_privacy_info";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_required_privacy_info`";

	
	
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




	$tdatashop_front_details["is_required_privacy_info"] = $fdata;
//	id_drive_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "id_drive_url";
	$fdata["GoodName"] = "id_drive_url";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","id_drive_url");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id_drive_url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id_drive_url`";

	
	
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
			$edata["EditParams"].= " maxlength=2000";

		$edata["controlWidth"] = 200;

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




	$tdatashop_front_details["id_drive_url"] = $fdata;
//	deal_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "deal_type";
	$fdata["GoodName"] = "deal_type";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","deal_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "deal_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`deal_type`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["deal_type"] = $fdata;
//	purpose
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "purpose";
	$fdata["GoodName"] = "purpose";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","purpose");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "purpose";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`purpose`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["purpose"] = $fdata;
//	below_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "below_address";
	$fdata["GoodName"] = "below_address";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","below_address");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "below_address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`below_address`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["below_address"] = $fdata;
//	privacy_info_validation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "privacy_info_validation";
	$fdata["GoodName"] = "privacy_info_validation";
	$fdata["ownerTable"] = "shop_front_details";
	$fdata["Label"] = GetFieldLabel("shop_front_details","privacy_info_validation");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "privacy_info_validation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`privacy_info_validation`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_details["privacy_info_validation"] = $fdata;


$tables_data["shop_front_details"]=&$tdatashop_front_details;
$field_labels["shop_front_details"] = &$fieldLabelsshop_front_details;
$fieldToolTips["shop_front_details"] = &$fieldToolTipsshop_front_details;
$placeHolders["shop_front_details"] = &$placeHoldersshop_front_details;
$page_titles["shop_front_details"] = &$pageTitlesshop_front_details;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["shop_front_details"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["shop_front_details"] = array();


	
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
					$masterTablesData["shop_front_details"][0] = $masterParams;
				$masterTablesData["shop_front_details"][0]["masterKeys"] = array();
	$masterTablesData["shop_front_details"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["shop_front_details"][0]["detailKeys"] = array();
	$masterTablesData["shop_front_details"][0]["detailKeys"][]="ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_shop_front_details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`shop_front_id`,  `shop_front_id` AS `links`,  `send_id`,  `ecc_id`,  `is_own`,  `iddocment_category`,  `is_confirm_pp`,  `is_first`,  `lastname`,  `firstname`,  `furigana_lastname`,  `furigana_firstname`,  `gender`,  `birthday`,  `prefecture`,  `city`,  `town`,  `building_types`,  `dwelling_types`,  `tel`,  `email`,  `job_category`,  `job_category_freetext`,  `campaign`,  `taransaction_result`,  `trading`,  `is_confirm_rules`,  `sign_img_path`,  `iddocment_image_path`,  `products_image_path`,  `send_at`,  `created_at`,  `created_by`,  `updated_at`,  `updated_by`,  `is_img_confirmed_products`,  `is_img_confirmed_iddocument`,  `signature_image_path`,  `has_changed_profile`,  `yubinnumber`,  `is_required_privacy_info`,  `id_drive_url`,  `deal_type`,  `purpose`,  `below_address`,  `privacy_info_validation`";
$proto0["m_strFrom"] = "FROM `shop_front_details`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `shop_front_id` DESC";
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
	"m_strName" => "shop_front_id",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto6["m_sql"] = "`shop_front_id`";
$proto6["m_srcTableName"] = "shop_front_details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "shop_front_id",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto8["m_sql"] = "`shop_front_id`";
$proto8["m_srcTableName"] = "shop_front_details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "links";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "send_id",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto10["m_sql"] = "`send_id`";
$proto10["m_srcTableName"] = "shop_front_details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto12["m_sql"] = "`ecc_id`";
$proto12["m_srcTableName"] = "shop_front_details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "is_own",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto14["m_sql"] = "`is_own`";
$proto14["m_srcTableName"] = "shop_front_details";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "iddocment_category",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto16["m_sql"] = "`iddocment_category`";
$proto16["m_srcTableName"] = "shop_front_details";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "is_confirm_pp",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto18["m_sql"] = "`is_confirm_pp`";
$proto18["m_srcTableName"] = "shop_front_details";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "is_first",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto20["m_sql"] = "`is_first`";
$proto20["m_srcTableName"] = "shop_front_details";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "lastname",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto22["m_sql"] = "`lastname`";
$proto22["m_srcTableName"] = "shop_front_details";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "firstname",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto24["m_sql"] = "`firstname`";
$proto24["m_srcTableName"] = "shop_front_details";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "furigana_lastname",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto26["m_sql"] = "`furigana_lastname`";
$proto26["m_srcTableName"] = "shop_front_details";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "furigana_firstname",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto28["m_sql"] = "`furigana_firstname`";
$proto28["m_srcTableName"] = "shop_front_details";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto30["m_sql"] = "`gender`";
$proto30["m_srcTableName"] = "shop_front_details";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "birthday",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto32["m_sql"] = "`birthday`";
$proto32["m_srcTableName"] = "shop_front_details";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "prefecture",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto34["m_sql"] = "`prefecture`";
$proto34["m_srcTableName"] = "shop_front_details";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto36["m_sql"] = "`city`";
$proto36["m_srcTableName"] = "shop_front_details";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "town",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto38["m_sql"] = "`town`";
$proto38["m_srcTableName"] = "shop_front_details";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "building_types",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto40["m_sql"] = "`building_types`";
$proto40["m_srcTableName"] = "shop_front_details";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "dwelling_types",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto42["m_sql"] = "`dwelling_types`";
$proto42["m_srcTableName"] = "shop_front_details";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto44["m_sql"] = "`tel`";
$proto44["m_srcTableName"] = "shop_front_details";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto46["m_sql"] = "`email`";
$proto46["m_srcTableName"] = "shop_front_details";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "job_category",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto48["m_sql"] = "`job_category`";
$proto48["m_srcTableName"] = "shop_front_details";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "job_category_freetext",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto50["m_sql"] = "`job_category_freetext`";
$proto50["m_srcTableName"] = "shop_front_details";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "campaign",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto52["m_sql"] = "`campaign`";
$proto52["m_srcTableName"] = "shop_front_details";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "taransaction_result",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto54["m_sql"] = "`taransaction_result`";
$proto54["m_srcTableName"] = "shop_front_details";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "trading",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto56["m_sql"] = "`trading`";
$proto56["m_srcTableName"] = "shop_front_details";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "is_confirm_rules",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto58["m_sql"] = "`is_confirm_rules`";
$proto58["m_srcTableName"] = "shop_front_details";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_img_path",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto60["m_sql"] = "`sign_img_path`";
$proto60["m_srcTableName"] = "shop_front_details";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "iddocment_image_path",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto62["m_sql"] = "`iddocment_image_path`";
$proto62["m_srcTableName"] = "shop_front_details";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "products_image_path",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto64["m_sql"] = "`products_image_path`";
$proto64["m_srcTableName"] = "shop_front_details";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "send_at",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto66["m_sql"] = "`send_at`";
$proto66["m_srcTableName"] = "shop_front_details";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto68["m_sql"] = "`created_at`";
$proto68["m_srcTableName"] = "shop_front_details";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto70["m_sql"] = "`created_by`";
$proto70["m_srcTableName"] = "shop_front_details";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto72["m_sql"] = "`updated_at`";
$proto72["m_srcTableName"] = "shop_front_details";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto74["m_sql"] = "`updated_by`";
$proto74["m_srcTableName"] = "shop_front_details";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "is_img_confirmed_products",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto76["m_sql"] = "`is_img_confirmed_products`";
$proto76["m_srcTableName"] = "shop_front_details";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "is_img_confirmed_iddocument",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto78["m_sql"] = "`is_img_confirmed_iddocument`";
$proto78["m_srcTableName"] = "shop_front_details";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "signature_image_path",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto80["m_sql"] = "`signature_image_path`";
$proto80["m_srcTableName"] = "shop_front_details";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "has_changed_profile",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto82["m_sql"] = "`has_changed_profile`";
$proto82["m_srcTableName"] = "shop_front_details";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "yubinnumber",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto84["m_sql"] = "`yubinnumber`";
$proto84["m_srcTableName"] = "shop_front_details";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "is_required_privacy_info",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto86["m_sql"] = "`is_required_privacy_info`";
$proto86["m_srcTableName"] = "shop_front_details";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "id_drive_url",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto88["m_sql"] = "`id_drive_url`";
$proto88["m_srcTableName"] = "shop_front_details";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "deal_type",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto90["m_sql"] = "`deal_type`";
$proto90["m_srcTableName"] = "shop_front_details";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "purpose",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto92["m_sql"] = "`purpose`";
$proto92["m_srcTableName"] = "shop_front_details";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "below_address",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto94["m_sql"] = "`below_address`";
$proto94["m_srcTableName"] = "shop_front_details";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "privacy_info_validation",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto96["m_sql"] = "`privacy_info_validation`";
$proto96["m_srcTableName"] = "shop_front_details";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto98=array();
$proto98["m_link"] = "SQLL_MAIN";
			$proto99=array();
$proto99["m_strName"] = "shop_front_details";
$proto99["m_srcTableName"] = "shop_front_details";
$proto99["m_columns"] = array();
$proto99["m_columns"][] = "shop_front_id";
$proto99["m_columns"][] = "send_id";
$proto99["m_columns"][] = "ecc_id";
$proto99["m_columns"][] = "is_own";
$proto99["m_columns"][] = "iddocment_category";
$proto99["m_columns"][] = "is_confirm_pp";
$proto99["m_columns"][] = "is_first";
$proto99["m_columns"][] = "lastname";
$proto99["m_columns"][] = "firstname";
$proto99["m_columns"][] = "furigana_lastname";
$proto99["m_columns"][] = "furigana_firstname";
$proto99["m_columns"][] = "gender";
$proto99["m_columns"][] = "birthday";
$proto99["m_columns"][] = "prefecture";
$proto99["m_columns"][] = "city";
$proto99["m_columns"][] = "town";
$proto99["m_columns"][] = "building_types";
$proto99["m_columns"][] = "dwelling_types";
$proto99["m_columns"][] = "tel";
$proto99["m_columns"][] = "email";
$proto99["m_columns"][] = "job_category";
$proto99["m_columns"][] = "job_category_freetext";
$proto99["m_columns"][] = "campaign";
$proto99["m_columns"][] = "taransaction_result";
$proto99["m_columns"][] = "trading";
$proto99["m_columns"][] = "is_confirm_rules";
$proto99["m_columns"][] = "signature_image_path";
$proto99["m_columns"][] = "iddocment_image_path";
$proto99["m_columns"][] = "products_image_path";
$proto99["m_columns"][] = "send_at";
$proto99["m_columns"][] = "created_at";
$proto99["m_columns"][] = "created_by";
$proto99["m_columns"][] = "updated_at";
$proto99["m_columns"][] = "updated_by";
$proto99["m_columns"][] = "is_img_confirmed_products";
$proto99["m_columns"][] = "is_img_confirmed_iddocument";
$proto99["m_columns"][] = "has_changed_profile";
$proto99["m_columns"][] = "yubinnumber";
$proto99["m_columns"][] = "is_required_privacy_info";
$proto99["m_columns"][] = "id_drive_url";
$proto99["m_columns"][] = "sign_img_path";
$proto99["m_columns"][] = "deal_type";
$proto99["m_columns"][] = "purpose";
$proto99["m_columns"][] = "below_address";
$proto99["m_columns"][] = "privacy_info_validation";
$proto99["m_columns"][] = "image_confirmed_at";
$proto99["m_columns"][] = "is_exists_mypage_id";
$proto99["m_columns"][] = "customer_id";
$proto99["m_columns"][] = "is_not_owner_text";
$proto99["m_columns"][] = "mail_check_type";
$obj = new SQLTable($proto99);

$proto98["m_table"] = $obj;
$proto98["m_sql"] = "`shop_front_details`";
$proto98["m_alias"] = "";
$proto98["m_srcTableName"] = "shop_front_details";
$proto100=array();
$proto100["m_sql"] = "";
$proto100["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto100["m_column"]=$obj;
$proto100["m_contained"] = array();
$proto100["m_strCase"] = "";
$proto100["m_havingmode"] = false;
$proto100["m_inBrackets"] = false;
$proto100["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto100);

$proto98["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto98);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto102=array();
						$obj = new SQLField(array(
	"m_strName" => "shop_front_id",
	"m_strTable" => "shop_front_details",
	"m_srcTableName" => "shop_front_details"
));

$proto102["m_column"]=$obj;
$proto102["m_bAsc"] = 0;
$proto102["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto102);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="shop_front_details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_shop_front_details = createSqlQuery_shop_front_details();


	
		;

																																														

$tdatashop_front_details[".sqlquery"] = $queryData_shop_front_details;

$tableEvents["shop_front_details"] = new eventsBase;
$tdatashop_front_details[".hasEvents"] = false;

?>