<?php
require_once(getabspath("classes/cipherer.php"));




$tdatashop_front_seiren_details = array();
	$tdatashop_front_seiren_details[".truncateText"] = true;
	$tdatashop_front_seiren_details[".NumberOfChars"] = 80;
	$tdatashop_front_seiren_details[".ShortName"] = "shop_front_seiren_details";
	$tdatashop_front_seiren_details[".OwnerID"] = "";
	$tdatashop_front_seiren_details[".OriginalTable"] = "shop_front_seiren_details";

//	field labels
$fieldLabelsshop_front_seiren_details = array();
$fieldToolTipsshop_front_seiren_details = array();
$pageTitlesshop_front_seiren_details = array();
$placeHoldersshop_front_seiren_details = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsshop_front_seiren_details["Japanese"] = array();
	$fieldToolTipsshop_front_seiren_details["Japanese"] = array();
	$placeHoldersshop_front_seiren_details["Japanese"] = array();
	$pageTitlesshop_front_seiren_details["Japanese"] = array();
	$fieldLabelsshop_front_seiren_details["Japanese"]["shop_front_seiren_id"] = "精錬撮影ID";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["shop_front_seiren_id"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["shop_front_seiren_id"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["ecc_id"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["ecc_id"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["customer_id"] = "マイページId";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["customer_id"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["customer_id"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["google_drive_id"] = "Google Drive Id";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["google_drive_id"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["google_drive_id"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["updated_at"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["updated_at"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["created_at"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["created_at"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["metal_type"] = "貴金属種類";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["metal_type"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["metal_type"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["brand_id"] = "ブランド";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["brand_id"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["brand_id"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["serial_number"] = "シリアルナンバー";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["serial_number"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["serial_number"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["weight"] = "お預かり重量";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["weight"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["weight"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["is_own"] = "自己所有物";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["is_own"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["is_own"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["is_legal"] = "合法チェック";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["is_legal"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["is_legal"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["is_not_from_conflict_zone"] = "紛争地帯持ち込みチェック";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["is_not_from_conflict_zone"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["is_not_from_conflict_zone"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["retailer"] = "購入先";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["retailer"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["retailer"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["purchase_date"] = "購入年月日";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["purchase_date"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["purchase_date"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["purchase_amount"] = "購入額";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["purchase_amount"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["purchase_amount"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["has_purchase_certificate"] = "購入時証明書";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["has_purchase_certificate"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["has_purchase_certificate"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["reason_for_transaction"] = "本件取引理由";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["reason_for_transaction"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["reason_for_transaction"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["supplementary_info"] = "購入補足情報";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["supplementary_info"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["supplementary_info"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["signature_image_path"] = "購入時証明書画像";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["signature_image_path"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["signature_image_path"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["is_correct"] = "情報正誤チェック";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["is_correct"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["is_correct"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["is_advance_sale"] = "売却立替";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["is_advance_sale"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["is_advance_sale"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["is_agree_terms_of_use"] = "同意書";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["is_agree_terms_of_use"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["is_agree_terms_of_use"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["mail_check_type"] = "メールマガジン";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["mail_check_type"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["mail_check_type"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["eoc_last_name"] = "姓";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["eoc_last_name"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["eoc_last_name"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["eoc_first_name"] = "名";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["eoc_first_name"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["eoc_first_name"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["eoc_zip1"] = "郵便番号１";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["eoc_zip1"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["eoc_zip1"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["eoc_zip2"] = "郵便番号２";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["eoc_zip2"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["eoc_zip2"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["eoc_address1"] = "住所１";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["eoc_address1"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["eoc_address1"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["eoc_address2"] = "住所２";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["eoc_address2"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["eoc_address2"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["eoc_address3"] = "住所３";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["eoc_address3"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["eoc_address3"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["eoc_tel"] = "電話番号";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["eoc_tel"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["eoc_tel"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["bank_details_name"] = "金融機関名";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["bank_details_name"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["bank_details_name"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["bank_details_code"] = "金融機関コード";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["bank_details_code"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["bank_details_code"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["bank_details_blunch_name"] = "支店名";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["bank_details_blunch_name"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["bank_details_blunch_name"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["bank_details_blunch_code"] = "支店コード";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["bank_details_blunch_code"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["bank_details_blunch_code"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["bank_details_account_number"] = "口座番号";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["bank_details_account_number"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["bank_details_account_number"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["bank_details_symbol"] = "記号";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["bank_details_symbol"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["bank_details_symbol"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["bank_details_number"] = "番号";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["bank_details_number"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["bank_details_number"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["bank_details_account_name"] = "名義人カナ";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["bank_details_account_name"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["bank_details_account_name"] = "";
	$fieldLabelsshop_front_seiren_details["Japanese"]["bank_details_deposit_type"] = "預金種別";
	$fieldToolTipsshop_front_seiren_details["Japanese"]["bank_details_deposit_type"] = "";
	$placeHoldersshop_front_seiren_details["Japanese"]["bank_details_deposit_type"] = "";
	if (count($fieldToolTipsshop_front_seiren_details["Japanese"]))
		$tdatashop_front_seiren_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsshop_front_seiren_details[""] = array();
	$fieldToolTipsshop_front_seiren_details[""] = array();
	$placeHoldersshop_front_seiren_details[""] = array();
	$pageTitlesshop_front_seiren_details[""] = array();
	$fieldLabelsshop_front_seiren_details[""]["shop_front_seiren_id"] = "Shop Front Seiren Id";
	$fieldToolTipsshop_front_seiren_details[""]["shop_front_seiren_id"] = "";
	$placeHoldersshop_front_seiren_details[""]["shop_front_seiren_id"] = "";
	$fieldLabelsshop_front_seiren_details[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsshop_front_seiren_details[""]["ecc_id"] = "";
	$placeHoldersshop_front_seiren_details[""]["ecc_id"] = "";
	$fieldLabelsshop_front_seiren_details[""]["customer_id"] = "Customer Id";
	$fieldToolTipsshop_front_seiren_details[""]["customer_id"] = "";
	$placeHoldersshop_front_seiren_details[""]["customer_id"] = "";
	$fieldLabelsshop_front_seiren_details[""]["google_drive_id"] = "Google Drive Id";
	$fieldToolTipsshop_front_seiren_details[""]["google_drive_id"] = "";
	$placeHoldersshop_front_seiren_details[""]["google_drive_id"] = "";
	$fieldLabelsshop_front_seiren_details[""]["updated_at"] = "Updated At";
	$fieldToolTipsshop_front_seiren_details[""]["updated_at"] = "";
	$placeHoldersshop_front_seiren_details[""]["updated_at"] = "";
	$fieldLabelsshop_front_seiren_details[""]["created_at"] = "Created At";
	$fieldToolTipsshop_front_seiren_details[""]["created_at"] = "";
	$placeHoldersshop_front_seiren_details[""]["created_at"] = "";
	$fieldLabelsshop_front_seiren_details[""]["metal_type"] = "Metal Type";
	$fieldToolTipsshop_front_seiren_details[""]["metal_type"] = "";
	$placeHoldersshop_front_seiren_details[""]["metal_type"] = "";
	$fieldLabelsshop_front_seiren_details[""]["brand_id"] = "Brand Id";
	$fieldToolTipsshop_front_seiren_details[""]["brand_id"] = "";
	$placeHoldersshop_front_seiren_details[""]["brand_id"] = "";
	$fieldLabelsshop_front_seiren_details[""]["serial_number"] = "Serial Number";
	$fieldToolTipsshop_front_seiren_details[""]["serial_number"] = "";
	$placeHoldersshop_front_seiren_details[""]["serial_number"] = "";
	$fieldLabelsshop_front_seiren_details[""]["weight"] = "Weight";
	$fieldToolTipsshop_front_seiren_details[""]["weight"] = "";
	$placeHoldersshop_front_seiren_details[""]["weight"] = "";
	$fieldLabelsshop_front_seiren_details[""]["is_own"] = "Is Own";
	$fieldToolTipsshop_front_seiren_details[""]["is_own"] = "";
	$placeHoldersshop_front_seiren_details[""]["is_own"] = "";
	$fieldLabelsshop_front_seiren_details[""]["is_legal"] = "Is Legal";
	$fieldToolTipsshop_front_seiren_details[""]["is_legal"] = "";
	$placeHoldersshop_front_seiren_details[""]["is_legal"] = "";
	$fieldLabelsshop_front_seiren_details[""]["is_not_from_conflict_zone"] = "Is Not From Conflict Zone";
	$fieldToolTipsshop_front_seiren_details[""]["is_not_from_conflict_zone"] = "";
	$placeHoldersshop_front_seiren_details[""]["is_not_from_conflict_zone"] = "";
	$fieldLabelsshop_front_seiren_details[""]["retailer"] = "Retailer";
	$fieldToolTipsshop_front_seiren_details[""]["retailer"] = "";
	$placeHoldersshop_front_seiren_details[""]["retailer"] = "";
	$fieldLabelsshop_front_seiren_details[""]["purchase_date"] = "Purchase Date";
	$fieldToolTipsshop_front_seiren_details[""]["purchase_date"] = "";
	$placeHoldersshop_front_seiren_details[""]["purchase_date"] = "";
	$fieldLabelsshop_front_seiren_details[""]["purchase_amount"] = "Purchase Amount";
	$fieldToolTipsshop_front_seiren_details[""]["purchase_amount"] = "";
	$placeHoldersshop_front_seiren_details[""]["purchase_amount"] = "";
	$fieldLabelsshop_front_seiren_details[""]["has_purchase_certificate"] = "Has Purchase Certificate";
	$fieldToolTipsshop_front_seiren_details[""]["has_purchase_certificate"] = "";
	$placeHoldersshop_front_seiren_details[""]["has_purchase_certificate"] = "";
	$fieldLabelsshop_front_seiren_details[""]["reason_for_transaction"] = "Reason For Transaction";
	$fieldToolTipsshop_front_seiren_details[""]["reason_for_transaction"] = "";
	$placeHoldersshop_front_seiren_details[""]["reason_for_transaction"] = "";
	$fieldLabelsshop_front_seiren_details[""]["supplementary_info"] = "Supplementary Info";
	$fieldToolTipsshop_front_seiren_details[""]["supplementary_info"] = "";
	$placeHoldersshop_front_seiren_details[""]["supplementary_info"] = "";
	$fieldLabelsshop_front_seiren_details[""]["signature_image_path"] = "Signature Image Path";
	$fieldToolTipsshop_front_seiren_details[""]["signature_image_path"] = "";
	$placeHoldersshop_front_seiren_details[""]["signature_image_path"] = "";
	$fieldLabelsshop_front_seiren_details[""]["is_correct"] = "Is Correct";
	$fieldToolTipsshop_front_seiren_details[""]["is_correct"] = "";
	$placeHoldersshop_front_seiren_details[""]["is_correct"] = "";
	$fieldLabelsshop_front_seiren_details[""]["is_advance_sale"] = "Is Advance Sale";
	$fieldToolTipsshop_front_seiren_details[""]["is_advance_sale"] = "";
	$placeHoldersshop_front_seiren_details[""]["is_advance_sale"] = "";
	$fieldLabelsshop_front_seiren_details[""]["is_agree_terms_of_use"] = "Is Agree Terms Of Use";
	$fieldToolTipsshop_front_seiren_details[""]["is_agree_terms_of_use"] = "";
	$placeHoldersshop_front_seiren_details[""]["is_agree_terms_of_use"] = "";
	$fieldLabelsshop_front_seiren_details[""]["mail_check_type"] = "Mail Check Type";
	$fieldToolTipsshop_front_seiren_details[""]["mail_check_type"] = "";
	$placeHoldersshop_front_seiren_details[""]["mail_check_type"] = "";
	$fieldLabelsshop_front_seiren_details[""]["eoc_last_name"] = "Eoc Last Name";
	$fieldToolTipsshop_front_seiren_details[""]["eoc_last_name"] = "";
	$placeHoldersshop_front_seiren_details[""]["eoc_last_name"] = "";
	$fieldLabelsshop_front_seiren_details[""]["eoc_first_name"] = "Eoc First Name";
	$fieldToolTipsshop_front_seiren_details[""]["eoc_first_name"] = "";
	$placeHoldersshop_front_seiren_details[""]["eoc_first_name"] = "";
	$fieldLabelsshop_front_seiren_details[""]["eoc_zip1"] = "Eoc Zip1";
	$fieldToolTipsshop_front_seiren_details[""]["eoc_zip1"] = "";
	$placeHoldersshop_front_seiren_details[""]["eoc_zip1"] = "";
	$fieldLabelsshop_front_seiren_details[""]["eoc_zip2"] = "Eoc Zip2";
	$fieldToolTipsshop_front_seiren_details[""]["eoc_zip2"] = "";
	$placeHoldersshop_front_seiren_details[""]["eoc_zip2"] = "";
	$fieldLabelsshop_front_seiren_details[""]["eoc_address1"] = "Eoc Address1";
	$fieldToolTipsshop_front_seiren_details[""]["eoc_address1"] = "";
	$placeHoldersshop_front_seiren_details[""]["eoc_address1"] = "";
	$fieldLabelsshop_front_seiren_details[""]["eoc_address2"] = "Eoc Address2";
	$fieldToolTipsshop_front_seiren_details[""]["eoc_address2"] = "";
	$placeHoldersshop_front_seiren_details[""]["eoc_address2"] = "";
	$fieldLabelsshop_front_seiren_details[""]["eoc_address3"] = "Eoc Address3";
	$fieldToolTipsshop_front_seiren_details[""]["eoc_address3"] = "";
	$placeHoldersshop_front_seiren_details[""]["eoc_address3"] = "";
	$fieldLabelsshop_front_seiren_details[""]["eoc_tel"] = "Eoc Tel";
	$fieldToolTipsshop_front_seiren_details[""]["eoc_tel"] = "";
	$placeHoldersshop_front_seiren_details[""]["eoc_tel"] = "";
	$fieldLabelsshop_front_seiren_details[""]["bank_details_name"] = "Bank Details Name";
	$fieldToolTipsshop_front_seiren_details[""]["bank_details_name"] = "";
	$placeHoldersshop_front_seiren_details[""]["bank_details_name"] = "";
	$fieldLabelsshop_front_seiren_details[""]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsshop_front_seiren_details[""]["bank_details_code"] = "";
	$placeHoldersshop_front_seiren_details[""]["bank_details_code"] = "";
	$fieldLabelsshop_front_seiren_details[""]["bank_details_blunch_name"] = "Bank Details Blunch Name";
	$fieldToolTipsshop_front_seiren_details[""]["bank_details_blunch_name"] = "";
	$placeHoldersshop_front_seiren_details[""]["bank_details_blunch_name"] = "";
	$fieldLabelsshop_front_seiren_details[""]["bank_details_blunch_code"] = "Bank Details Blunch Code";
	$fieldToolTipsshop_front_seiren_details[""]["bank_details_blunch_code"] = "";
	$placeHoldersshop_front_seiren_details[""]["bank_details_blunch_code"] = "";
	$fieldLabelsshop_front_seiren_details[""]["bank_details_account_number"] = "Bank Details Account Number";
	$fieldToolTipsshop_front_seiren_details[""]["bank_details_account_number"] = "";
	$placeHoldersshop_front_seiren_details[""]["bank_details_account_number"] = "";
	$fieldLabelsshop_front_seiren_details[""]["bank_details_symbol"] = "Bank Details Symbol";
	$fieldToolTipsshop_front_seiren_details[""]["bank_details_symbol"] = "";
	$placeHoldersshop_front_seiren_details[""]["bank_details_symbol"] = "";
	$fieldLabelsshop_front_seiren_details[""]["bank_details_number"] = "Bank Details Number";
	$fieldToolTipsshop_front_seiren_details[""]["bank_details_number"] = "";
	$placeHoldersshop_front_seiren_details[""]["bank_details_number"] = "";
	$fieldLabelsshop_front_seiren_details[""]["bank_details_account_name"] = "Bank Details Account Name";
	$fieldToolTipsshop_front_seiren_details[""]["bank_details_account_name"] = "";
	$placeHoldersshop_front_seiren_details[""]["bank_details_account_name"] = "";
	$fieldLabelsshop_front_seiren_details[""]["bank_details_deposit_type"] = "Bank Details Deposit Type";
	$fieldToolTipsshop_front_seiren_details[""]["bank_details_deposit_type"] = "";
	$placeHoldersshop_front_seiren_details[""]["bank_details_deposit_type"] = "";
	if (count($fieldToolTipsshop_front_seiren_details[""]))
		$tdatashop_front_seiren_details[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsshop_front_seiren_details["English"] = array();
	$fieldToolTipsshop_front_seiren_details["English"] = array();
	$placeHoldersshop_front_seiren_details["English"] = array();
	$pageTitlesshop_front_seiren_details["English"] = array();
	$fieldLabelsshop_front_seiren_details["English"]["shop_front_seiren_id"] = "Shop Front Seiren Id";
	$fieldToolTipsshop_front_seiren_details["English"]["shop_front_seiren_id"] = "";
	$placeHoldersshop_front_seiren_details["English"]["shop_front_seiren_id"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsshop_front_seiren_details["English"]["ecc_id"] = "";
	$placeHoldersshop_front_seiren_details["English"]["ecc_id"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["customer_id"] = "Customer Id";
	$fieldToolTipsshop_front_seiren_details["English"]["customer_id"] = "";
	$placeHoldersshop_front_seiren_details["English"]["customer_id"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["google_drive_id"] = "Google Drive Id";
	$fieldToolTipsshop_front_seiren_details["English"]["google_drive_id"] = "";
	$placeHoldersshop_front_seiren_details["English"]["google_drive_id"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["updated_at"] = "Updated At";
	$fieldToolTipsshop_front_seiren_details["English"]["updated_at"] = "";
	$placeHoldersshop_front_seiren_details["English"]["updated_at"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["created_at"] = "Created At";
	$fieldToolTipsshop_front_seiren_details["English"]["created_at"] = "";
	$placeHoldersshop_front_seiren_details["English"]["created_at"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["metal_type"] = "Metal Type";
	$fieldToolTipsshop_front_seiren_details["English"]["metal_type"] = "";
	$placeHoldersshop_front_seiren_details["English"]["metal_type"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["brand_id"] = "Brand Id";
	$fieldToolTipsshop_front_seiren_details["English"]["brand_id"] = "";
	$placeHoldersshop_front_seiren_details["English"]["brand_id"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["serial_number"] = "Serial Number";
	$fieldToolTipsshop_front_seiren_details["English"]["serial_number"] = "";
	$placeHoldersshop_front_seiren_details["English"]["serial_number"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["weight"] = "Weight";
	$fieldToolTipsshop_front_seiren_details["English"]["weight"] = "";
	$placeHoldersshop_front_seiren_details["English"]["weight"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["is_own"] = "Is Own";
	$fieldToolTipsshop_front_seiren_details["English"]["is_own"] = "";
	$placeHoldersshop_front_seiren_details["English"]["is_own"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["is_legal"] = "Is Legal";
	$fieldToolTipsshop_front_seiren_details["English"]["is_legal"] = "";
	$placeHoldersshop_front_seiren_details["English"]["is_legal"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["is_not_from_conflict_zone"] = "Is Not From Conflict Zone";
	$fieldToolTipsshop_front_seiren_details["English"]["is_not_from_conflict_zone"] = "";
	$placeHoldersshop_front_seiren_details["English"]["is_not_from_conflict_zone"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["retailer"] = "Retailer";
	$fieldToolTipsshop_front_seiren_details["English"]["retailer"] = "";
	$placeHoldersshop_front_seiren_details["English"]["retailer"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["purchase_date"] = "Purchase Date";
	$fieldToolTipsshop_front_seiren_details["English"]["purchase_date"] = "";
	$placeHoldersshop_front_seiren_details["English"]["purchase_date"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["purchase_amount"] = "Purchase Amount";
	$fieldToolTipsshop_front_seiren_details["English"]["purchase_amount"] = "";
	$placeHoldersshop_front_seiren_details["English"]["purchase_amount"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["has_purchase_certificate"] = "Has Purchase Certificate";
	$fieldToolTipsshop_front_seiren_details["English"]["has_purchase_certificate"] = "";
	$placeHoldersshop_front_seiren_details["English"]["has_purchase_certificate"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["reason_for_transaction"] = "Reason For Transaction";
	$fieldToolTipsshop_front_seiren_details["English"]["reason_for_transaction"] = "";
	$placeHoldersshop_front_seiren_details["English"]["reason_for_transaction"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["supplementary_info"] = "Supplementary Info";
	$fieldToolTipsshop_front_seiren_details["English"]["supplementary_info"] = "";
	$placeHoldersshop_front_seiren_details["English"]["supplementary_info"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["signature_image_path"] = "Signature Image Path";
	$fieldToolTipsshop_front_seiren_details["English"]["signature_image_path"] = "";
	$placeHoldersshop_front_seiren_details["English"]["signature_image_path"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["is_correct"] = "Is Correct";
	$fieldToolTipsshop_front_seiren_details["English"]["is_correct"] = "";
	$placeHoldersshop_front_seiren_details["English"]["is_correct"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["is_advance_sale"] = "Is Advance Sale";
	$fieldToolTipsshop_front_seiren_details["English"]["is_advance_sale"] = "";
	$placeHoldersshop_front_seiren_details["English"]["is_advance_sale"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["is_agree_terms_of_use"] = "Is Agree Terms Of Use";
	$fieldToolTipsshop_front_seiren_details["English"]["is_agree_terms_of_use"] = "";
	$placeHoldersshop_front_seiren_details["English"]["is_agree_terms_of_use"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["mail_check_type"] = "Mail Check Type";
	$fieldToolTipsshop_front_seiren_details["English"]["mail_check_type"] = "";
	$placeHoldersshop_front_seiren_details["English"]["mail_check_type"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["eoc_last_name"] = "Eoc Last Name";
	$fieldToolTipsshop_front_seiren_details["English"]["eoc_last_name"] = "";
	$placeHoldersshop_front_seiren_details["English"]["eoc_last_name"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["eoc_first_name"] = "Eoc First Name";
	$fieldToolTipsshop_front_seiren_details["English"]["eoc_first_name"] = "";
	$placeHoldersshop_front_seiren_details["English"]["eoc_first_name"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["eoc_zip1"] = "Eoc Zip1";
	$fieldToolTipsshop_front_seiren_details["English"]["eoc_zip1"] = "";
	$placeHoldersshop_front_seiren_details["English"]["eoc_zip1"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["eoc_zip2"] = "Eoc Zip2";
	$fieldToolTipsshop_front_seiren_details["English"]["eoc_zip2"] = "";
	$placeHoldersshop_front_seiren_details["English"]["eoc_zip2"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["eoc_address1"] = "Eoc Address1";
	$fieldToolTipsshop_front_seiren_details["English"]["eoc_address1"] = "";
	$placeHoldersshop_front_seiren_details["English"]["eoc_address1"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["eoc_address2"] = "Eoc Address2";
	$fieldToolTipsshop_front_seiren_details["English"]["eoc_address2"] = "";
	$placeHoldersshop_front_seiren_details["English"]["eoc_address2"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["eoc_address3"] = "Eoc Address3";
	$fieldToolTipsshop_front_seiren_details["English"]["eoc_address3"] = "";
	$placeHoldersshop_front_seiren_details["English"]["eoc_address3"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["eoc_tel"] = "Eoc Tel";
	$fieldToolTipsshop_front_seiren_details["English"]["eoc_tel"] = "";
	$placeHoldersshop_front_seiren_details["English"]["eoc_tel"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["bank_details_name"] = "Bank Details Name";
	$fieldToolTipsshop_front_seiren_details["English"]["bank_details_name"] = "";
	$placeHoldersshop_front_seiren_details["English"]["bank_details_name"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsshop_front_seiren_details["English"]["bank_details_code"] = "";
	$placeHoldersshop_front_seiren_details["English"]["bank_details_code"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["bank_details_blunch_name"] = "Bank Details Blunch Name";
	$fieldToolTipsshop_front_seiren_details["English"]["bank_details_blunch_name"] = "";
	$placeHoldersshop_front_seiren_details["English"]["bank_details_blunch_name"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["bank_details_blunch_code"] = "Bank Details Blunch Code";
	$fieldToolTipsshop_front_seiren_details["English"]["bank_details_blunch_code"] = "";
	$placeHoldersshop_front_seiren_details["English"]["bank_details_blunch_code"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["bank_details_account_number"] = "Bank Details Account Number";
	$fieldToolTipsshop_front_seiren_details["English"]["bank_details_account_number"] = "";
	$placeHoldersshop_front_seiren_details["English"]["bank_details_account_number"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["bank_details_symbol"] = "Bank Details Symbol";
	$fieldToolTipsshop_front_seiren_details["English"]["bank_details_symbol"] = "";
	$placeHoldersshop_front_seiren_details["English"]["bank_details_symbol"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["bank_details_number"] = "Bank Details Number";
	$fieldToolTipsshop_front_seiren_details["English"]["bank_details_number"] = "";
	$placeHoldersshop_front_seiren_details["English"]["bank_details_number"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["bank_details_account_name"] = "Bank Details Account Name";
	$fieldToolTipsshop_front_seiren_details["English"]["bank_details_account_name"] = "";
	$placeHoldersshop_front_seiren_details["English"]["bank_details_account_name"] = "";
	$fieldLabelsshop_front_seiren_details["English"]["bank_details_deposit_type"] = "Bank Details Deposit Type";
	$fieldToolTipsshop_front_seiren_details["English"]["bank_details_deposit_type"] = "";
	$placeHoldersshop_front_seiren_details["English"]["bank_details_deposit_type"] = "";
	if (count($fieldToolTipsshop_front_seiren_details["English"]))
		$tdatashop_front_seiren_details[".isUseToolTips"] = true;
}


	$tdatashop_front_seiren_details[".NCSearch"] = true;



$tdatashop_front_seiren_details[".shortTableName"] = "shop_front_seiren_details";
$tdatashop_front_seiren_details[".nSecOptions"] = 0;
$tdatashop_front_seiren_details[".recsPerRowPrint"] = 1;
$tdatashop_front_seiren_details[".mainTableOwnerID"] = "";
$tdatashop_front_seiren_details[".moveNext"] = 1;
$tdatashop_front_seiren_details[".entityType"] = 0;

$tdatashop_front_seiren_details[".strOriginalTableName"] = "shop_front_seiren_details";

	



$tdatashop_front_seiren_details[".showAddInPopup"] = false;

$tdatashop_front_seiren_details[".showEditInPopup"] = false;

$tdatashop_front_seiren_details[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatashop_front_seiren_details[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatashop_front_seiren_details[".fieldsForRegister"] = array();

$tdatashop_front_seiren_details[".listAjax"] = false;

	$tdatashop_front_seiren_details[".audit"] = true;

	$tdatashop_front_seiren_details[".locking"] = false;



$tdatashop_front_seiren_details[".list"] = true;

$tdatashop_front_seiren_details[".inlineEdit"] = true;


$tdatashop_front_seiren_details[".reorderRecordsByHeader"] = true;



$tdatashop_front_seiren_details[".inlineAdd"] = true;

$tdatashop_front_seiren_details[".import"] = true;

$tdatashop_front_seiren_details[".exportTo"] = true;


$tdatashop_front_seiren_details[".delete"] = true;

$tdatashop_front_seiren_details[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatashop_front_seiren_details[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatashop_front_seiren_details[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatashop_front_seiren_details[".searchSaving"] = false;
//

$tdatashop_front_seiren_details[".showSearchPanel"] = true;
		$tdatashop_front_seiren_details[".flexibleSearch"] = true;

$tdatashop_front_seiren_details[".isUseAjaxSuggest"] = true;

$tdatashop_front_seiren_details[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatashop_front_seiren_details[".ajaxCodeSnippetAdded"] = false;

$tdatashop_front_seiren_details[".buttonsAdded"] = false;

$tdatashop_front_seiren_details[".addPageEvents"] = false;

// use timepicker for search panel
$tdatashop_front_seiren_details[".isUseTimeForSearch"] = false;



$tdatashop_front_seiren_details[".badgeColor"] = "778899";


$tdatashop_front_seiren_details[".allSearchFields"] = array();
$tdatashop_front_seiren_details[".filterFields"] = array();
$tdatashop_front_seiren_details[".requiredSearchFields"] = array();

$tdatashop_front_seiren_details[".allSearchFields"][] = "shop_front_seiren_id";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "ecc_id";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "customer_id";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "google_drive_id";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "metal_type";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "is_correct";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "brand_id";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "serial_number";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "weight";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "is_own";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "is_legal";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "is_not_from_conflict_zone";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "retailer";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "purchase_date";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "purchase_amount";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "has_purchase_certificate";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "reason_for_transaction";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "supplementary_info";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "signature_image_path";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "bank_details_deposit_type";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "is_advance_sale";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "is_agree_terms_of_use";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "eoc_last_name";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "eoc_first_name";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "eoc_zip1";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "eoc_zip2";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "eoc_address1";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "eoc_address2";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "eoc_address3";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "eoc_tel";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "bank_details_name";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "bank_details_code";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "bank_details_blunch_name";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "bank_details_blunch_code";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "bank_details_account_number";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "bank_details_symbol";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "bank_details_number";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "bank_details_account_name";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "mail_check_type";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "created_at";
	$tdatashop_front_seiren_details[".allSearchFields"][] = "updated_at";
	

$tdatashop_front_seiren_details[".googleLikeFields"] = array();
$tdatashop_front_seiren_details[".googleLikeFields"][] = "shop_front_seiren_id";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "ecc_id";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "customer_id";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "google_drive_id";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "updated_at";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "created_at";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "metal_type";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "brand_id";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "serial_number";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "weight";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "is_own";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "is_legal";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "is_not_from_conflict_zone";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "retailer";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "purchase_date";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "purchase_amount";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "has_purchase_certificate";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "reason_for_transaction";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "supplementary_info";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "signature_image_path";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "is_correct";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "is_advance_sale";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "is_agree_terms_of_use";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "mail_check_type";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "eoc_last_name";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "eoc_first_name";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "eoc_zip1";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "eoc_zip2";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "eoc_address1";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "eoc_address2";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "eoc_address3";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "eoc_tel";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "bank_details_name";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "bank_details_code";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "bank_details_blunch_name";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "bank_details_blunch_code";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "bank_details_account_number";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "bank_details_symbol";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "bank_details_number";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "bank_details_account_name";
$tdatashop_front_seiren_details[".googleLikeFields"][] = "bank_details_deposit_type";


$tdatashop_front_seiren_details[".advSearchFields"] = array();
$tdatashop_front_seiren_details[".advSearchFields"][] = "shop_front_seiren_id";
$tdatashop_front_seiren_details[".advSearchFields"][] = "ecc_id";
$tdatashop_front_seiren_details[".advSearchFields"][] = "customer_id";
$tdatashop_front_seiren_details[".advSearchFields"][] = "google_drive_id";
$tdatashop_front_seiren_details[".advSearchFields"][] = "metal_type";
$tdatashop_front_seiren_details[".advSearchFields"][] = "is_correct";
$tdatashop_front_seiren_details[".advSearchFields"][] = "brand_id";
$tdatashop_front_seiren_details[".advSearchFields"][] = "serial_number";
$tdatashop_front_seiren_details[".advSearchFields"][] = "weight";
$tdatashop_front_seiren_details[".advSearchFields"][] = "is_own";
$tdatashop_front_seiren_details[".advSearchFields"][] = "is_legal";
$tdatashop_front_seiren_details[".advSearchFields"][] = "is_not_from_conflict_zone";
$tdatashop_front_seiren_details[".advSearchFields"][] = "retailer";
$tdatashop_front_seiren_details[".advSearchFields"][] = "purchase_date";
$tdatashop_front_seiren_details[".advSearchFields"][] = "purchase_amount";
$tdatashop_front_seiren_details[".advSearchFields"][] = "has_purchase_certificate";
$tdatashop_front_seiren_details[".advSearchFields"][] = "reason_for_transaction";
$tdatashop_front_seiren_details[".advSearchFields"][] = "supplementary_info";
$tdatashop_front_seiren_details[".advSearchFields"][] = "signature_image_path";
$tdatashop_front_seiren_details[".advSearchFields"][] = "bank_details_deposit_type";
$tdatashop_front_seiren_details[".advSearchFields"][] = "is_advance_sale";
$tdatashop_front_seiren_details[".advSearchFields"][] = "is_agree_terms_of_use";
$tdatashop_front_seiren_details[".advSearchFields"][] = "eoc_last_name";
$tdatashop_front_seiren_details[".advSearchFields"][] = "eoc_first_name";
$tdatashop_front_seiren_details[".advSearchFields"][] = "eoc_zip1";
$tdatashop_front_seiren_details[".advSearchFields"][] = "eoc_zip2";
$tdatashop_front_seiren_details[".advSearchFields"][] = "eoc_address1";
$tdatashop_front_seiren_details[".advSearchFields"][] = "eoc_address2";
$tdatashop_front_seiren_details[".advSearchFields"][] = "eoc_address3";
$tdatashop_front_seiren_details[".advSearchFields"][] = "eoc_tel";
$tdatashop_front_seiren_details[".advSearchFields"][] = "bank_details_name";
$tdatashop_front_seiren_details[".advSearchFields"][] = "bank_details_code";
$tdatashop_front_seiren_details[".advSearchFields"][] = "bank_details_blunch_name";
$tdatashop_front_seiren_details[".advSearchFields"][] = "bank_details_blunch_code";
$tdatashop_front_seiren_details[".advSearchFields"][] = "bank_details_account_number";
$tdatashop_front_seiren_details[".advSearchFields"][] = "bank_details_symbol";
$tdatashop_front_seiren_details[".advSearchFields"][] = "bank_details_number";
$tdatashop_front_seiren_details[".advSearchFields"][] = "bank_details_account_name";
$tdatashop_front_seiren_details[".advSearchFields"][] = "mail_check_type";
$tdatashop_front_seiren_details[".advSearchFields"][] = "created_at";
$tdatashop_front_seiren_details[".advSearchFields"][] = "updated_at";

$tdatashop_front_seiren_details[".tableType"] = "list";

$tdatashop_front_seiren_details[".printerPageOrientation"] = 0;
$tdatashop_front_seiren_details[".nPrinterPageScale"] = 100;

$tdatashop_front_seiren_details[".nPrinterSplitRecords"] = 40;

$tdatashop_front_seiren_details[".nPrinterPDFSplitRecords"] = 40;



$tdatashop_front_seiren_details[".geocodingEnabled"] = false;





$tdatashop_front_seiren_details[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatashop_front_seiren_details[".pageSize"] = 20;

$tdatashop_front_seiren_details[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shop_front_seiren_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatashop_front_seiren_details[".strOrderBy"] = $tstrOrderBy;

$tdatashop_front_seiren_details[".orderindexes"] = array();
$tdatashop_front_seiren_details[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`shop_front_seiren_id`");

$tdatashop_front_seiren_details[".sqlHead"] = "SELECT `shop_front_seiren_id`,  `ecc_id`,  `customer_id`,  `google_drive_id`,  `updated_at`,  `created_at`,  `metal_type`,  `brand_id`,  `serial_number`,  `weight`,  `is_own`,  `is_legal`,  `is_not_from_conflict_zone`,  `retailer`,  `purchase_date`,  `purchase_amount`,  `has_purchase_certificate`,  `reason_for_transaction`,  `supplementary_info`,  `signature_image_path`,  `is_correct`,  `is_advance_sale`,  `is_agree_terms_of_use`,  `mail_check_type`,  `eoc_last_name`,  `eoc_first_name`,  `eoc_zip1`,  `eoc_zip2`,  `eoc_address1`,  `eoc_address2`,  `eoc_address3`,  `eoc_tel`,  `bank_details_name`,  `bank_details_code`,  `bank_details_blunch_name`,  `bank_details_blunch_code`,  `bank_details_account_number`,  `bank_details_symbol`,  `bank_details_number`,  `bank_details_account_name`,  `bank_details_deposit_type`";
$tdatashop_front_seiren_details[".sqlFrom"] = "FROM `shop_front_seiren_details`";
$tdatashop_front_seiren_details[".sqlWhereExpr"] = "";
$tdatashop_front_seiren_details[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatashop_front_seiren_details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatashop_front_seiren_details[".arrGroupsPerPage"] = $arrGPP;

$tdatashop_front_seiren_details[".highlightSearchResults"] = true;

$tableKeysshop_front_seiren_details = array();
$tableKeysshop_front_seiren_details[] = "shop_front_seiren_id";
$tdatashop_front_seiren_details[".Keys"] = $tableKeysshop_front_seiren_details;

$tdatashop_front_seiren_details[".listFields"] = array();
$tdatashop_front_seiren_details[".listFields"][] = "shop_front_seiren_id";
$tdatashop_front_seiren_details[".listFields"][] = "ecc_id";
$tdatashop_front_seiren_details[".listFields"][] = "customer_id";
$tdatashop_front_seiren_details[".listFields"][] = "google_drive_id";
$tdatashop_front_seiren_details[".listFields"][] = "metal_type";
$tdatashop_front_seiren_details[".listFields"][] = "is_correct";
$tdatashop_front_seiren_details[".listFields"][] = "brand_id";
$tdatashop_front_seiren_details[".listFields"][] = "serial_number";
$tdatashop_front_seiren_details[".listFields"][] = "weight";
$tdatashop_front_seiren_details[".listFields"][] = "is_own";
$tdatashop_front_seiren_details[".listFields"][] = "is_legal";
$tdatashop_front_seiren_details[".listFields"][] = "is_not_from_conflict_zone";
$tdatashop_front_seiren_details[".listFields"][] = "retailer";
$tdatashop_front_seiren_details[".listFields"][] = "purchase_date";
$tdatashop_front_seiren_details[".listFields"][] = "purchase_amount";
$tdatashop_front_seiren_details[".listFields"][] = "has_purchase_certificate";
$tdatashop_front_seiren_details[".listFields"][] = "reason_for_transaction";
$tdatashop_front_seiren_details[".listFields"][] = "supplementary_info";
$tdatashop_front_seiren_details[".listFields"][] = "signature_image_path";
$tdatashop_front_seiren_details[".listFields"][] = "bank_details_deposit_type";
$tdatashop_front_seiren_details[".listFields"][] = "is_advance_sale";
$tdatashop_front_seiren_details[".listFields"][] = "is_agree_terms_of_use";
$tdatashop_front_seiren_details[".listFields"][] = "eoc_last_name";
$tdatashop_front_seiren_details[".listFields"][] = "eoc_first_name";
$tdatashop_front_seiren_details[".listFields"][] = "eoc_zip1";
$tdatashop_front_seiren_details[".listFields"][] = "eoc_zip2";
$tdatashop_front_seiren_details[".listFields"][] = "eoc_address1";
$tdatashop_front_seiren_details[".listFields"][] = "eoc_address2";
$tdatashop_front_seiren_details[".listFields"][] = "eoc_address3";
$tdatashop_front_seiren_details[".listFields"][] = "eoc_tel";
$tdatashop_front_seiren_details[".listFields"][] = "bank_details_name";
$tdatashop_front_seiren_details[".listFields"][] = "bank_details_code";
$tdatashop_front_seiren_details[".listFields"][] = "bank_details_blunch_name";
$tdatashop_front_seiren_details[".listFields"][] = "bank_details_blunch_code";
$tdatashop_front_seiren_details[".listFields"][] = "bank_details_account_number";
$tdatashop_front_seiren_details[".listFields"][] = "bank_details_symbol";
$tdatashop_front_seiren_details[".listFields"][] = "bank_details_number";
$tdatashop_front_seiren_details[".listFields"][] = "bank_details_account_name";
$tdatashop_front_seiren_details[".listFields"][] = "mail_check_type";
$tdatashop_front_seiren_details[".listFields"][] = "created_at";
$tdatashop_front_seiren_details[".listFields"][] = "updated_at";

$tdatashop_front_seiren_details[".hideMobileList"] = array();


$tdatashop_front_seiren_details[".viewFields"] = array();

$tdatashop_front_seiren_details[".addFields"] = array();

$tdatashop_front_seiren_details[".masterListFields"] = array();
$tdatashop_front_seiren_details[".masterListFields"][] = "shop_front_seiren_id";
$tdatashop_front_seiren_details[".masterListFields"][] = "ecc_id";
$tdatashop_front_seiren_details[".masterListFields"][] = "customer_id";
$tdatashop_front_seiren_details[".masterListFields"][] = "google_drive_id";
$tdatashop_front_seiren_details[".masterListFields"][] = "metal_type";
$tdatashop_front_seiren_details[".masterListFields"][] = "is_correct";
$tdatashop_front_seiren_details[".masterListFields"][] = "brand_id";
$tdatashop_front_seiren_details[".masterListFields"][] = "serial_number";
$tdatashop_front_seiren_details[".masterListFields"][] = "weight";
$tdatashop_front_seiren_details[".masterListFields"][] = "is_own";
$tdatashop_front_seiren_details[".masterListFields"][] = "is_legal";
$tdatashop_front_seiren_details[".masterListFields"][] = "is_not_from_conflict_zone";
$tdatashop_front_seiren_details[".masterListFields"][] = "retailer";
$tdatashop_front_seiren_details[".masterListFields"][] = "purchase_date";
$tdatashop_front_seiren_details[".masterListFields"][] = "purchase_amount";
$tdatashop_front_seiren_details[".masterListFields"][] = "has_purchase_certificate";
$tdatashop_front_seiren_details[".masterListFields"][] = "reason_for_transaction";
$tdatashop_front_seiren_details[".masterListFields"][] = "supplementary_info";
$tdatashop_front_seiren_details[".masterListFields"][] = "signature_image_path";
$tdatashop_front_seiren_details[".masterListFields"][] = "bank_details_deposit_type";
$tdatashop_front_seiren_details[".masterListFields"][] = "is_advance_sale";
$tdatashop_front_seiren_details[".masterListFields"][] = "is_agree_terms_of_use";
$tdatashop_front_seiren_details[".masterListFields"][] = "eoc_last_name";
$tdatashop_front_seiren_details[".masterListFields"][] = "eoc_first_name";
$tdatashop_front_seiren_details[".masterListFields"][] = "eoc_zip1";
$tdatashop_front_seiren_details[".masterListFields"][] = "eoc_zip2";
$tdatashop_front_seiren_details[".masterListFields"][] = "eoc_address1";
$tdatashop_front_seiren_details[".masterListFields"][] = "eoc_address2";
$tdatashop_front_seiren_details[".masterListFields"][] = "eoc_address3";
$tdatashop_front_seiren_details[".masterListFields"][] = "eoc_tel";
$tdatashop_front_seiren_details[".masterListFields"][] = "bank_details_name";
$tdatashop_front_seiren_details[".masterListFields"][] = "bank_details_code";
$tdatashop_front_seiren_details[".masterListFields"][] = "bank_details_blunch_name";
$tdatashop_front_seiren_details[".masterListFields"][] = "bank_details_blunch_code";
$tdatashop_front_seiren_details[".masterListFields"][] = "bank_details_account_number";
$tdatashop_front_seiren_details[".masterListFields"][] = "bank_details_symbol";
$tdatashop_front_seiren_details[".masterListFields"][] = "bank_details_number";
$tdatashop_front_seiren_details[".masterListFields"][] = "bank_details_account_name";
$tdatashop_front_seiren_details[".masterListFields"][] = "mail_check_type";
$tdatashop_front_seiren_details[".masterListFields"][] = "created_at";
$tdatashop_front_seiren_details[".masterListFields"][] = "updated_at";

$tdatashop_front_seiren_details[".inlineAddFields"] = array();
$tdatashop_front_seiren_details[".inlineAddFields"][] = "ecc_id";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "metal_type";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "is_correct";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "brand_id";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "serial_number";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "weight";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "is_own";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "is_legal";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "is_not_from_conflict_zone";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "retailer";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "purchase_date";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "purchase_amount";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "has_purchase_certificate";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "reason_for_transaction";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "supplementary_info";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "signature_image_path";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "bank_details_deposit_type";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "is_advance_sale";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "is_agree_terms_of_use";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "eoc_last_name";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "eoc_first_name";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "eoc_zip1";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "eoc_zip2";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "eoc_address1";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "eoc_address2";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "eoc_address3";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "eoc_tel";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "bank_details_name";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "bank_details_code";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "bank_details_blunch_name";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "bank_details_blunch_code";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "bank_details_account_number";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "bank_details_symbol";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "bank_details_number";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "bank_details_account_name";
$tdatashop_front_seiren_details[".inlineAddFields"][] = "mail_check_type";

$tdatashop_front_seiren_details[".editFields"] = array();

$tdatashop_front_seiren_details[".inlineEditFields"] = array();
$tdatashop_front_seiren_details[".inlineEditFields"][] = "ecc_id";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "metal_type";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "is_correct";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "brand_id";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "serial_number";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "weight";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "is_own";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "is_legal";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "is_not_from_conflict_zone";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "retailer";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "purchase_date";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "purchase_amount";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "has_purchase_certificate";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "reason_for_transaction";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "supplementary_info";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "signature_image_path";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "bank_details_deposit_type";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "is_advance_sale";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "is_agree_terms_of_use";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "eoc_last_name";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "eoc_first_name";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "eoc_zip1";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "eoc_zip2";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "eoc_address1";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "eoc_address2";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "eoc_address3";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "eoc_tel";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "bank_details_name";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "bank_details_code";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "bank_details_blunch_name";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "bank_details_blunch_code";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "bank_details_account_number";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "bank_details_symbol";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "bank_details_number";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "bank_details_account_name";
$tdatashop_front_seiren_details[".inlineEditFields"][] = "mail_check_type";

$tdatashop_front_seiren_details[".updateSelectedFields"] = array();


$tdatashop_front_seiren_details[".exportFields"] = array();
$tdatashop_front_seiren_details[".exportFields"][] = "shop_front_seiren_id";
$tdatashop_front_seiren_details[".exportFields"][] = "ecc_id";
$tdatashop_front_seiren_details[".exportFields"][] = "customer_id";
$tdatashop_front_seiren_details[".exportFields"][] = "google_drive_id";
$tdatashop_front_seiren_details[".exportFields"][] = "metal_type";
$tdatashop_front_seiren_details[".exportFields"][] = "is_correct";
$tdatashop_front_seiren_details[".exportFields"][] = "brand_id";
$tdatashop_front_seiren_details[".exportFields"][] = "serial_number";
$tdatashop_front_seiren_details[".exportFields"][] = "weight";
$tdatashop_front_seiren_details[".exportFields"][] = "is_own";
$tdatashop_front_seiren_details[".exportFields"][] = "is_legal";
$tdatashop_front_seiren_details[".exportFields"][] = "is_not_from_conflict_zone";
$tdatashop_front_seiren_details[".exportFields"][] = "retailer";
$tdatashop_front_seiren_details[".exportFields"][] = "purchase_date";
$tdatashop_front_seiren_details[".exportFields"][] = "purchase_amount";
$tdatashop_front_seiren_details[".exportFields"][] = "has_purchase_certificate";
$tdatashop_front_seiren_details[".exportFields"][] = "reason_for_transaction";
$tdatashop_front_seiren_details[".exportFields"][] = "supplementary_info";
$tdatashop_front_seiren_details[".exportFields"][] = "signature_image_path";
$tdatashop_front_seiren_details[".exportFields"][] = "bank_details_deposit_type";
$tdatashop_front_seiren_details[".exportFields"][] = "is_advance_sale";
$tdatashop_front_seiren_details[".exportFields"][] = "is_agree_terms_of_use";
$tdatashop_front_seiren_details[".exportFields"][] = "eoc_last_name";
$tdatashop_front_seiren_details[".exportFields"][] = "eoc_first_name";
$tdatashop_front_seiren_details[".exportFields"][] = "eoc_zip1";
$tdatashop_front_seiren_details[".exportFields"][] = "eoc_zip2";
$tdatashop_front_seiren_details[".exportFields"][] = "eoc_address1";
$tdatashop_front_seiren_details[".exportFields"][] = "eoc_address2";
$tdatashop_front_seiren_details[".exportFields"][] = "eoc_address3";
$tdatashop_front_seiren_details[".exportFields"][] = "eoc_tel";
$tdatashop_front_seiren_details[".exportFields"][] = "bank_details_name";
$tdatashop_front_seiren_details[".exportFields"][] = "bank_details_code";
$tdatashop_front_seiren_details[".exportFields"][] = "bank_details_blunch_name";
$tdatashop_front_seiren_details[".exportFields"][] = "bank_details_blunch_code";
$tdatashop_front_seiren_details[".exportFields"][] = "bank_details_account_number";
$tdatashop_front_seiren_details[".exportFields"][] = "bank_details_symbol";
$tdatashop_front_seiren_details[".exportFields"][] = "bank_details_number";
$tdatashop_front_seiren_details[".exportFields"][] = "bank_details_account_name";
$tdatashop_front_seiren_details[".exportFields"][] = "mail_check_type";
$tdatashop_front_seiren_details[".exportFields"][] = "created_at";
$tdatashop_front_seiren_details[".exportFields"][] = "updated_at";

$tdatashop_front_seiren_details[".importFields"] = array();
$tdatashop_front_seiren_details[".importFields"][] = "shop_front_seiren_id";
$tdatashop_front_seiren_details[".importFields"][] = "ecc_id";
$tdatashop_front_seiren_details[".importFields"][] = "metal_type";
$tdatashop_front_seiren_details[".importFields"][] = "brand_id";
$tdatashop_front_seiren_details[".importFields"][] = "serial_number";
$tdatashop_front_seiren_details[".importFields"][] = "weight";
$tdatashop_front_seiren_details[".importFields"][] = "is_own";
$tdatashop_front_seiren_details[".importFields"][] = "is_legal";
$tdatashop_front_seiren_details[".importFields"][] = "is_not_from_conflict_zone";
$tdatashop_front_seiren_details[".importFields"][] = "retailer";
$tdatashop_front_seiren_details[".importFields"][] = "purchase_date";
$tdatashop_front_seiren_details[".importFields"][] = "purchase_amount";
$tdatashop_front_seiren_details[".importFields"][] = "has_purchase_certificate";
$tdatashop_front_seiren_details[".importFields"][] = "reason_for_transaction";
$tdatashop_front_seiren_details[".importFields"][] = "supplementary_info";
$tdatashop_front_seiren_details[".importFields"][] = "signature_image_path";
$tdatashop_front_seiren_details[".importFields"][] = "is_correct";
$tdatashop_front_seiren_details[".importFields"][] = "is_advance_sale";
$tdatashop_front_seiren_details[".importFields"][] = "is_agree_terms_of_use";
$tdatashop_front_seiren_details[".importFields"][] = "mail_check_type";
$tdatashop_front_seiren_details[".importFields"][] = "eoc_last_name";
$tdatashop_front_seiren_details[".importFields"][] = "eoc_first_name";
$tdatashop_front_seiren_details[".importFields"][] = "eoc_zip1";
$tdatashop_front_seiren_details[".importFields"][] = "eoc_zip2";
$tdatashop_front_seiren_details[".importFields"][] = "eoc_address1";
$tdatashop_front_seiren_details[".importFields"][] = "eoc_address2";
$tdatashop_front_seiren_details[".importFields"][] = "eoc_address3";
$tdatashop_front_seiren_details[".importFields"][] = "eoc_tel";
$tdatashop_front_seiren_details[".importFields"][] = "bank_details_name";
$tdatashop_front_seiren_details[".importFields"][] = "bank_details_code";
$tdatashop_front_seiren_details[".importFields"][] = "bank_details_blunch_name";
$tdatashop_front_seiren_details[".importFields"][] = "bank_details_blunch_code";
$tdatashop_front_seiren_details[".importFields"][] = "bank_details_account_number";
$tdatashop_front_seiren_details[".importFields"][] = "bank_details_symbol";
$tdatashop_front_seiren_details[".importFields"][] = "bank_details_number";
$tdatashop_front_seiren_details[".importFields"][] = "bank_details_account_name";
$tdatashop_front_seiren_details[".importFields"][] = "bank_details_deposit_type";

$tdatashop_front_seiren_details[".printFields"] = array();

//	shop_front_seiren_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "shop_front_seiren_id";
	$fdata["GoodName"] = "shop_front_seiren_id";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","shop_front_seiren_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shop_front_seiren_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shop_front_seiren_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatashop_front_seiren_details["shop_front_seiren_id"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","ecc_id");
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




	$tdatashop_front_seiren_details["ecc_id"] = $fdata;
//	customer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "customer_id";
	$fdata["GoodName"] = "customer_id";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","customer_id");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "customer_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`customer_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_seiren_details["customer_id"] = $fdata;
//	google_drive_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "google_drive_id";
	$fdata["GoodName"] = "google_drive_id";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","google_drive_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "google_drive_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`google_drive_id`";

	
	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatashop_front_seiren_details["google_drive_id"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","updated_at");
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




	$tdatashop_front_seiren_details["updated_at"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","created_at");
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




	$tdatashop_front_seiren_details["created_at"] = $fdata;
//	metal_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "metal_type";
	$fdata["GoodName"] = "metal_type";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","metal_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "metal_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`metal_type`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupValues"][] = "金";
	$edata["LookupValues"][] = "プラチナ";

	
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




	$tdatashop_front_seiren_details["metal_type"] = $fdata;
//	brand_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "brand_id";
	$fdata["GoodName"] = "brand_id";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","brand_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "brand_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brand_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_seiren_details["brand_id"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","serial_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "serial_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`serial_number`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_seiren_details["serial_number"] = $fdata;
//	weight
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "weight";
	$fdata["GoodName"] = "weight";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","weight");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "weight";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`weight`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_seiren_details["weight"] = $fdata;
//	is_own
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "is_own";
	$fdata["GoodName"] = "is_own";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","is_own");
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




	$tdatashop_front_seiren_details["is_own"] = $fdata;
//	is_legal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "is_legal";
	$fdata["GoodName"] = "is_legal";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","is_legal");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_legal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_legal`";

	
	
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




	$tdatashop_front_seiren_details["is_legal"] = $fdata;
//	is_not_from_conflict_zone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "is_not_from_conflict_zone";
	$fdata["GoodName"] = "is_not_from_conflict_zone";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","is_not_from_conflict_zone");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_not_from_conflict_zone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_not_from_conflict_zone`";

	
	
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




	$tdatashop_front_seiren_details["is_not_from_conflict_zone"] = $fdata;
//	retailer
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "retailer";
	$fdata["GoodName"] = "retailer";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","retailer");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "retailer";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`retailer`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_seiren_details["retailer"] = $fdata;
//	purchase_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "purchase_date";
	$fdata["GoodName"] = "purchase_date";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","purchase_date");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "purchase_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`purchase_date`";

	
	
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

	
	
		$edata["DateEditType"] = 0;
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




	$tdatashop_front_seiren_details["purchase_date"] = $fdata;
//	purchase_amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "purchase_amount";
	$fdata["GoodName"] = "purchase_amount";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","purchase_amount");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "purchase_amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`purchase_amount`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_seiren_details["purchase_amount"] = $fdata;
//	has_purchase_certificate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "has_purchase_certificate";
	$fdata["GoodName"] = "has_purchase_certificate";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","has_purchase_certificate");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "has_purchase_certificate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`has_purchase_certificate`";

	
	
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




	$tdatashop_front_seiren_details["has_purchase_certificate"] = $fdata;
//	reason_for_transaction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "reason_for_transaction";
	$fdata["GoodName"] = "reason_for_transaction";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","reason_for_transaction");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "reason_for_transaction";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`reason_for_transaction`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupValues"][] = "節税などのポートフォリオ";
	$edata["LookupValues"][] = "投資";
	$edata["LookupValues"][] = "売却";
	$edata["LookupValues"][] = "譲渡";
	$edata["LookupValues"][] = "遺品";

	
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




	$tdatashop_front_seiren_details["reason_for_transaction"] = $fdata;
//	supplementary_info
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "supplementary_info";
	$fdata["GoodName"] = "supplementary_info";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","supplementary_info");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "supplementary_info";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`supplementary_info`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_seiren_details["supplementary_info"] = $fdata;
//	signature_image_path
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "signature_image_path";
	$fdata["GoodName"] = "signature_image_path";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","signature_image_path");
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

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_seiren_details["signature_image_path"] = $fdata;
//	is_correct
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "is_correct";
	$fdata["GoodName"] = "is_correct";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","is_correct");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_correct";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_correct`";

	
	
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




	$tdatashop_front_seiren_details["is_correct"] = $fdata;
//	is_advance_sale
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "is_advance_sale";
	$fdata["GoodName"] = "is_advance_sale";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","is_advance_sale");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_advance_sale";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_advance_sale`";

	
	
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




	$tdatashop_front_seiren_details["is_advance_sale"] = $fdata;
//	is_agree_terms_of_use
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "is_agree_terms_of_use";
	$fdata["GoodName"] = "is_agree_terms_of_use";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","is_agree_terms_of_use");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_agree_terms_of_use";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_agree_terms_of_use`";

	
	
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




	$tdatashop_front_seiren_details["is_agree_terms_of_use"] = $fdata;
//	mail_check_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "mail_check_type";
	$fdata["GoodName"] = "mail_check_type";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","mail_check_type");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mail_check_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mail_check_type`";

	
	
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




	$tdatashop_front_seiren_details["mail_check_type"] = $fdata;
//	eoc_last_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "eoc_last_name";
	$fdata["GoodName"] = "eoc_last_name";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","eoc_last_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eoc_last_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`eoc_last_name`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_seiren_details["eoc_last_name"] = $fdata;
//	eoc_first_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "eoc_first_name";
	$fdata["GoodName"] = "eoc_first_name";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","eoc_first_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eoc_first_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`eoc_first_name`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_seiren_details["eoc_first_name"] = $fdata;
//	eoc_zip1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "eoc_zip1";
	$fdata["GoodName"] = "eoc_zip1";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","eoc_zip1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eoc_zip1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`eoc_zip1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_seiren_details["eoc_zip1"] = $fdata;
//	eoc_zip2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "eoc_zip2";
	$fdata["GoodName"] = "eoc_zip2";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","eoc_zip2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eoc_zip2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`eoc_zip2`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_seiren_details["eoc_zip2"] = $fdata;
//	eoc_address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "eoc_address1";
	$fdata["GoodName"] = "eoc_address1";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","eoc_address1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eoc_address1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`eoc_address1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_seiren_details["eoc_address1"] = $fdata;
//	eoc_address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "eoc_address2";
	$fdata["GoodName"] = "eoc_address2";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","eoc_address2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eoc_address2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`eoc_address2`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_seiren_details["eoc_address2"] = $fdata;
//	eoc_address3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "eoc_address3";
	$fdata["GoodName"] = "eoc_address3";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","eoc_address3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eoc_address3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`eoc_address3`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_seiren_details["eoc_address3"] = $fdata;
//	eoc_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "eoc_tel";
	$fdata["GoodName"] = "eoc_tel";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","eoc_tel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eoc_tel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`eoc_tel`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_seiren_details["eoc_tel"] = $fdata;
//	bank_details_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "bank_details_name";
	$fdata["GoodName"] = "bank_details_name";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","bank_details_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bank_details_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`bank_details_name`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatashop_front_seiren_details["bank_details_name"] = $fdata;
//	bank_details_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "bank_details_code";
	$fdata["GoodName"] = "bank_details_code";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","bank_details_code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
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




	$tdatashop_front_seiren_details["bank_details_code"] = $fdata;
//	bank_details_blunch_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "bank_details_blunch_name";
	$fdata["GoodName"] = "bank_details_blunch_name";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","bank_details_blunch_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatashop_front_seiren_details["bank_details_blunch_name"] = $fdata;
//	bank_details_blunch_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "bank_details_blunch_code";
	$fdata["GoodName"] = "bank_details_blunch_code";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","bank_details_blunch_code");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatashop_front_seiren_details["bank_details_blunch_code"] = $fdata;
//	bank_details_account_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "bank_details_account_number";
	$fdata["GoodName"] = "bank_details_account_number";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","bank_details_account_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatashop_front_seiren_details["bank_details_account_number"] = $fdata;
//	bank_details_symbol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "bank_details_symbol";
	$fdata["GoodName"] = "bank_details_symbol";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","bank_details_symbol");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatashop_front_seiren_details["bank_details_symbol"] = $fdata;
//	bank_details_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "bank_details_number";
	$fdata["GoodName"] = "bank_details_number";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","bank_details_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatashop_front_seiren_details["bank_details_number"] = $fdata;
//	bank_details_account_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "bank_details_account_name";
	$fdata["GoodName"] = "bank_details_account_name";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","bank_details_account_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatashop_front_seiren_details["bank_details_account_name"] = $fdata;
//	bank_details_deposit_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "bank_details_deposit_type";
	$fdata["GoodName"] = "bank_details_deposit_type";
	$fdata["ownerTable"] = "shop_front_seiren_details";
	$fdata["Label"] = GetFieldLabel("shop_front_seiren_details","bank_details_deposit_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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
	$edata["LookupValues"][] = "当座";
	$edata["LookupValues"][] = "貯蓄";

	
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




	$tdatashop_front_seiren_details["bank_details_deposit_type"] = $fdata;


$tables_data["shop_front_seiren_details"]=&$tdatashop_front_seiren_details;
$field_labels["shop_front_seiren_details"] = &$fieldLabelsshop_front_seiren_details;
$fieldToolTips["shop_front_seiren_details"] = &$fieldToolTipsshop_front_seiren_details;
$placeHolders["shop_front_seiren_details"] = &$placeHoldersshop_front_seiren_details;
$page_titles["shop_front_seiren_details"] = &$pageTitlesshop_front_seiren_details;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["shop_front_seiren_details"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["shop_front_seiren_details"] = array();


	
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
					$masterTablesData["shop_front_seiren_details"][0] = $masterParams;
				$masterTablesData["shop_front_seiren_details"][0]["masterKeys"] = array();
	$masterTablesData["shop_front_seiren_details"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["shop_front_seiren_details"][0]["detailKeys"] = array();
	$masterTablesData["shop_front_seiren_details"][0]["detailKeys"][]="ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_shop_front_seiren_details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`shop_front_seiren_id`,  `ecc_id`,  `customer_id`,  `google_drive_id`,  `updated_at`,  `created_at`,  `metal_type`,  `brand_id`,  `serial_number`,  `weight`,  `is_own`,  `is_legal`,  `is_not_from_conflict_zone`,  `retailer`,  `purchase_date`,  `purchase_amount`,  `has_purchase_certificate`,  `reason_for_transaction`,  `supplementary_info`,  `signature_image_path`,  `is_correct`,  `is_advance_sale`,  `is_agree_terms_of_use`,  `mail_check_type`,  `eoc_last_name`,  `eoc_first_name`,  `eoc_zip1`,  `eoc_zip2`,  `eoc_address1`,  `eoc_address2`,  `eoc_address3`,  `eoc_tel`,  `bank_details_name`,  `bank_details_code`,  `bank_details_blunch_name`,  `bank_details_blunch_code`,  `bank_details_account_number`,  `bank_details_symbol`,  `bank_details_number`,  `bank_details_account_name`,  `bank_details_deposit_type`";
$proto0["m_strFrom"] = "FROM `shop_front_seiren_details`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `shop_front_seiren_id` DESC";
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
	"m_strName" => "shop_front_seiren_id",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto6["m_sql"] = "`shop_front_seiren_id`";
$proto6["m_srcTableName"] = "shop_front_seiren_details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto8["m_sql"] = "`ecc_id`";
$proto8["m_srcTableName"] = "shop_front_seiren_details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "customer_id",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto10["m_sql"] = "`customer_id`";
$proto10["m_srcTableName"] = "shop_front_seiren_details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "google_drive_id",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto12["m_sql"] = "`google_drive_id`";
$proto12["m_srcTableName"] = "shop_front_seiren_details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto14["m_sql"] = "`updated_at`";
$proto14["m_srcTableName"] = "shop_front_seiren_details";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto16["m_sql"] = "`created_at`";
$proto16["m_srcTableName"] = "shop_front_seiren_details";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "metal_type",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto18["m_sql"] = "`metal_type`";
$proto18["m_srcTableName"] = "shop_front_seiren_details";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "brand_id",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto20["m_sql"] = "`brand_id`";
$proto20["m_srcTableName"] = "shop_front_seiren_details";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto22["m_sql"] = "`serial_number`";
$proto22["m_srcTableName"] = "shop_front_seiren_details";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "weight",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto24["m_sql"] = "`weight`";
$proto24["m_srcTableName"] = "shop_front_seiren_details";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "is_own",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto26["m_sql"] = "`is_own`";
$proto26["m_srcTableName"] = "shop_front_seiren_details";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "is_legal",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto28["m_sql"] = "`is_legal`";
$proto28["m_srcTableName"] = "shop_front_seiren_details";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "is_not_from_conflict_zone",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto30["m_sql"] = "`is_not_from_conflict_zone`";
$proto30["m_srcTableName"] = "shop_front_seiren_details";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "retailer",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto32["m_sql"] = "`retailer`";
$proto32["m_srcTableName"] = "shop_front_seiren_details";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "purchase_date",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto34["m_sql"] = "`purchase_date`";
$proto34["m_srcTableName"] = "shop_front_seiren_details";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "purchase_amount",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto36["m_sql"] = "`purchase_amount`";
$proto36["m_srcTableName"] = "shop_front_seiren_details";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "has_purchase_certificate",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto38["m_sql"] = "`has_purchase_certificate`";
$proto38["m_srcTableName"] = "shop_front_seiren_details";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "reason_for_transaction",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto40["m_sql"] = "`reason_for_transaction`";
$proto40["m_srcTableName"] = "shop_front_seiren_details";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "supplementary_info",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto42["m_sql"] = "`supplementary_info`";
$proto42["m_srcTableName"] = "shop_front_seiren_details";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "signature_image_path",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto44["m_sql"] = "`signature_image_path`";
$proto44["m_srcTableName"] = "shop_front_seiren_details";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "is_correct",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto46["m_sql"] = "`is_correct`";
$proto46["m_srcTableName"] = "shop_front_seiren_details";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "is_advance_sale",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto48["m_sql"] = "`is_advance_sale`";
$proto48["m_srcTableName"] = "shop_front_seiren_details";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "is_agree_terms_of_use",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto50["m_sql"] = "`is_agree_terms_of_use`";
$proto50["m_srcTableName"] = "shop_front_seiren_details";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "mail_check_type",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto52["m_sql"] = "`mail_check_type`";
$proto52["m_srcTableName"] = "shop_front_seiren_details";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "eoc_last_name",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto54["m_sql"] = "`eoc_last_name`";
$proto54["m_srcTableName"] = "shop_front_seiren_details";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "eoc_first_name",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto56["m_sql"] = "`eoc_first_name`";
$proto56["m_srcTableName"] = "shop_front_seiren_details";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "eoc_zip1",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto58["m_sql"] = "`eoc_zip1`";
$proto58["m_srcTableName"] = "shop_front_seiren_details";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "eoc_zip2",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto60["m_sql"] = "`eoc_zip2`";
$proto60["m_srcTableName"] = "shop_front_seiren_details";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "eoc_address1",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto62["m_sql"] = "`eoc_address1`";
$proto62["m_srcTableName"] = "shop_front_seiren_details";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "eoc_address2",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto64["m_sql"] = "`eoc_address2`";
$proto64["m_srcTableName"] = "shop_front_seiren_details";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "eoc_address3",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto66["m_sql"] = "`eoc_address3`";
$proto66["m_srcTableName"] = "shop_front_seiren_details";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "eoc_tel",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto68["m_sql"] = "`eoc_tel`";
$proto68["m_srcTableName"] = "shop_front_seiren_details";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_name",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto70["m_sql"] = "`bank_details_name`";
$proto70["m_srcTableName"] = "shop_front_seiren_details";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_code",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto72["m_sql"] = "`bank_details_code`";
$proto72["m_srcTableName"] = "shop_front_seiren_details";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_blunch_name",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto74["m_sql"] = "`bank_details_blunch_name`";
$proto74["m_srcTableName"] = "shop_front_seiren_details";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_blunch_code",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto76["m_sql"] = "`bank_details_blunch_code`";
$proto76["m_srcTableName"] = "shop_front_seiren_details";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_account_number",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto78["m_sql"] = "`bank_details_account_number`";
$proto78["m_srcTableName"] = "shop_front_seiren_details";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_symbol",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto80["m_sql"] = "`bank_details_symbol`";
$proto80["m_srcTableName"] = "shop_front_seiren_details";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_number",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto82["m_sql"] = "`bank_details_number`";
$proto82["m_srcTableName"] = "shop_front_seiren_details";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_account_name",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto84["m_sql"] = "`bank_details_account_name`";
$proto84["m_srcTableName"] = "shop_front_seiren_details";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_deposit_type",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto86["m_sql"] = "`bank_details_deposit_type`";
$proto86["m_srcTableName"] = "shop_front_seiren_details";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto88=array();
$proto88["m_link"] = "SQLL_MAIN";
			$proto89=array();
$proto89["m_strName"] = "shop_front_seiren_details";
$proto89["m_srcTableName"] = "shop_front_seiren_details";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "shop_front_seiren_id";
$proto89["m_columns"][] = "ecc_id";
$proto89["m_columns"][] = "customer_id";
$proto89["m_columns"][] = "google_drive_id";
$proto89["m_columns"][] = "metal_type";
$proto89["m_columns"][] = "brand_id";
$proto89["m_columns"][] = "serial_number";
$proto89["m_columns"][] = "weight";
$proto89["m_columns"][] = "is_own";
$proto89["m_columns"][] = "is_legal";
$proto89["m_columns"][] = "is_not_from_conflict_zone";
$proto89["m_columns"][] = "retailer";
$proto89["m_columns"][] = "purchase_date";
$proto89["m_columns"][] = "purchase_amount";
$proto89["m_columns"][] = "has_purchase_certificate";
$proto89["m_columns"][] = "reason_for_transaction";
$proto89["m_columns"][] = "supplementary_info";
$proto89["m_columns"][] = "signature_image_path";
$proto89["m_columns"][] = "is_correct";
$proto89["m_columns"][] = "is_advance_sale";
$proto89["m_columns"][] = "is_agree_terms_of_use";
$proto89["m_columns"][] = "mail_check_type";
$proto89["m_columns"][] = "eoc_last_name";
$proto89["m_columns"][] = "eoc_first_name";
$proto89["m_columns"][] = "eoc_zip1";
$proto89["m_columns"][] = "eoc_zip2";
$proto89["m_columns"][] = "eoc_address1";
$proto89["m_columns"][] = "eoc_address2";
$proto89["m_columns"][] = "eoc_address3";
$proto89["m_columns"][] = "eoc_tel";
$proto89["m_columns"][] = "bank_details_name";
$proto89["m_columns"][] = "bank_details_code";
$proto89["m_columns"][] = "bank_details_blunch_name";
$proto89["m_columns"][] = "bank_details_blunch_code";
$proto89["m_columns"][] = "bank_details_account_number";
$proto89["m_columns"][] = "bank_details_symbol";
$proto89["m_columns"][] = "bank_details_number";
$proto89["m_columns"][] = "bank_details_account_name";
$proto89["m_columns"][] = "bank_details_deposit_type";
$proto89["m_columns"][] = "gold_price";
$proto89["m_columns"][] = "platinum_price";
$proto89["m_columns"][] = "split_processing_cost";
$proto89["m_columns"][] = "simulation_cost";
$proto89["m_columns"][] = "updated_at";
$proto89["m_columns"][] = "created_at";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "`shop_front_seiren_details`";
$proto88["m_alias"] = "";
$proto88["m_srcTableName"] = "shop_front_seiren_details";
$proto90=array();
$proto90["m_sql"] = "";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

$proto88["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto88);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto92=array();
						$obj = new SQLField(array(
	"m_strName" => "shop_front_seiren_id",
	"m_strTable" => "shop_front_seiren_details",
	"m_srcTableName" => "shop_front_seiren_details"
));

$proto92["m_column"]=$obj;
$proto92["m_bAsc"] = 0;
$proto92["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto92);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="shop_front_seiren_details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_shop_front_seiren_details = createSqlQuery_shop_front_seiren_details();


	
		;

																																									

$tdatashop_front_seiren_details[".sqlquery"] = $queryData_shop_front_seiren_details;

$tableEvents["shop_front_seiren_details"] = new eventsBase;
$tdatashop_front_seiren_details[".hasEvents"] = false;

?>