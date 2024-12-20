<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_refining_v1 = array();
	$tdataEoc_refining_v1[".truncateText"] = true;
	$tdataEoc_refining_v1[".NumberOfChars"] = 80;
	$tdataEoc_refining_v1[".ShortName"] = "Eoc_refining_v1";
	$tdataEoc_refining_v1[".OwnerID"] = "";
	$tdataEoc_refining_v1[".OriginalTable"] = "Eoc_refining_v1";

//	field labels
$fieldLabelsEoc_refining_v1 = array();
$fieldToolTipsEoc_refining_v1 = array();
$pageTitlesEoc_refining_v1 = array();
$placeHoldersEoc_refining_v1 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_refining_v1["Japanese"] = array();
	$fieldToolTipsEoc_refining_v1["Japanese"] = array();
	$placeHoldersEoc_refining_v1["Japanese"] = array();
	$pageTitlesEoc_refining_v1["Japanese"] = array();
	$fieldLabelsEoc_refining_v1["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_refining_v1["Japanese"]["id"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["id"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["angouka_mailaddress"] = "Angouka Mailaddress";
	$fieldToolTipsEoc_refining_v1["Japanese"]["angouka_mailaddress"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["angouka_mailaddress"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["service_selection"] = "Service Selection";
	$fieldToolTipsEoc_refining_v1["Japanese"]["service_selection"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["service_selection"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["sale_advance_input"] = "Sale Advance Input";
	$fieldToolTipsEoc_refining_v1["Japanese"]["sale_advance_input"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["sale_advance_input"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["deliveryservice"] = "Deliveryservice";
	$fieldToolTipsEoc_refining_v1["Japanese"]["deliveryservice"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["deliveryservice"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["totalTransferAmount"] = "Total Transfer Amount";
	$fieldToolTipsEoc_refining_v1["Japanese"]["totalTransferAmount"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["totalTransferAmount"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["usage"] = "Usage";
	$fieldToolTipsEoc_refining_v1["Japanese"]["usage"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["usage"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["rebuilding"] = "Rebuilding";
	$fieldToolTipsEoc_refining_v1["Japanese"]["rebuilding"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["rebuilding"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["name"] = "Name";
	$fieldToolTipsEoc_refining_v1["Japanese"]["name"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["name"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["kana"] = "Kana";
	$fieldToolTipsEoc_refining_v1["Japanese"]["kana"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["kana"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["phone_number"] = "Phone Number";
	$fieldToolTipsEoc_refining_v1["Japanese"]["phone_number"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["phone_number"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["email"] = "Email";
	$fieldToolTipsEoc_refining_v1["Japanese"]["email"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["email"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["contact_method"] = "Contact Method";
	$fieldToolTipsEoc_refining_v1["Japanese"]["contact_method"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["contact_method"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["user_yuubinn"] = "User Yuubinn";
	$fieldToolTipsEoc_refining_v1["Japanese"]["user_yuubinn"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["user_yuubinn"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["user_todou"] = "User Todou";
	$fieldToolTipsEoc_refining_v1["Japanese"]["user_todou"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["user_todou"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["user_sikutyouson"] = "User Sikutyouson";
	$fieldToolTipsEoc_refining_v1["Japanese"]["user_sikutyouson"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["user_sikutyouson"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["user_banti"] = "User Banti";
	$fieldToolTipsEoc_refining_v1["Japanese"]["user_banti"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["user_banti"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["user_building"] = "User Building";
	$fieldToolTipsEoc_refining_v1["Japanese"]["user_building"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["user_building"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["is_applicant"] = "Is Applicant";
	$fieldToolTipsEoc_refining_v1["Japanese"]["is_applicant"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["is_applicant"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["same_address"] = "Same Address";
	$fieldToolTipsEoc_refining_v1["Japanese"]["same_address"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["same_address"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["content_inquiry"] = "Content Inquiry";
	$fieldToolTipsEoc_refining_v1["Japanese"]["content_inquiry"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["content_inquiry"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["questionnaire_1"] = "Questionnaire 1";
	$fieldToolTipsEoc_refining_v1["Japanese"]["questionnaire_1"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["questionnaire_1"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["questionnaire_2"] = "Questionnaire 2";
	$fieldToolTipsEoc_refining_v1["Japanese"]["questionnaire_2"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["questionnaire_2"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["questionnaire_3"] = "Questionnaire 3";
	$fieldToolTipsEoc_refining_v1["Japanese"]["questionnaire_3"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["questionnaire_3"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["created_at"] = "Created At";
	$fieldToolTipsEoc_refining_v1["Japanese"]["created_at"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["created_at"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_refining_v1["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["ingot_details"] = "Ingot Details";
	$fieldToolTipsEoc_refining_v1["Japanese"]["ingot_details"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["ingot_details"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["saleRebuildingPrice"] = "Sale Rebuilding Price";
	$fieldToolTipsEoc_refining_v1["Japanese"]["saleRebuildingPrice"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["saleRebuildingPrice"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["selected_sale_g"] = "Selected Sale G";
	$fieldToolTipsEoc_refining_v1["Japanese"]["selected_sale_g"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["selected_sale_g"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_refining_v1["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc_refining_v1["Japanese"]["status"] = "Status";
	$fieldToolTipsEoc_refining_v1["Japanese"]["status"] = "";
	$placeHoldersEoc_refining_v1["Japanese"]["status"] = "";
	if (count($fieldToolTipsEoc_refining_v1["Japanese"]))
		$tdataEoc_refining_v1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_refining_v1[""] = array();
	$fieldToolTipsEoc_refining_v1[""] = array();
	$placeHoldersEoc_refining_v1[""] = array();
	$pageTitlesEoc_refining_v1[""] = array();
	$fieldLabelsEoc_refining_v1[""]["id"] = "Id";
	$fieldToolTipsEoc_refining_v1[""]["id"] = "";
	$placeHoldersEoc_refining_v1[""]["id"] = "";
	$fieldLabelsEoc_refining_v1[""]["angouka_mailaddress"] = "Angouka Mailaddress";
	$fieldToolTipsEoc_refining_v1[""]["angouka_mailaddress"] = "";
	$placeHoldersEoc_refining_v1[""]["angouka_mailaddress"] = "";
	$fieldLabelsEoc_refining_v1[""]["service_selection"] = "Service Selection";
	$fieldToolTipsEoc_refining_v1[""]["service_selection"] = "";
	$placeHoldersEoc_refining_v1[""]["service_selection"] = "";
	$fieldLabelsEoc_refining_v1[""]["sale_advance_input"] = "Sale Advance Input";
	$fieldToolTipsEoc_refining_v1[""]["sale_advance_input"] = "";
	$placeHoldersEoc_refining_v1[""]["sale_advance_input"] = "";
	$fieldLabelsEoc_refining_v1[""]["deliveryservice"] = "Deliveryservice";
	$fieldToolTipsEoc_refining_v1[""]["deliveryservice"] = "";
	$placeHoldersEoc_refining_v1[""]["deliveryservice"] = "";
	$fieldLabelsEoc_refining_v1[""]["totalTransferAmount"] = "Total Transfer Amount";
	$fieldToolTipsEoc_refining_v1[""]["totalTransferAmount"] = "";
	$placeHoldersEoc_refining_v1[""]["totalTransferAmount"] = "";
	$fieldLabelsEoc_refining_v1[""]["usage"] = "Usage";
	$fieldToolTipsEoc_refining_v1[""]["usage"] = "";
	$placeHoldersEoc_refining_v1[""]["usage"] = "";
	$fieldLabelsEoc_refining_v1[""]["rebuilding"] = "Rebuilding";
	$fieldToolTipsEoc_refining_v1[""]["rebuilding"] = "";
	$placeHoldersEoc_refining_v1[""]["rebuilding"] = "";
	$fieldLabelsEoc_refining_v1[""]["name"] = "Name";
	$fieldToolTipsEoc_refining_v1[""]["name"] = "";
	$placeHoldersEoc_refining_v1[""]["name"] = "";
	$fieldLabelsEoc_refining_v1[""]["kana"] = "Kana";
	$fieldToolTipsEoc_refining_v1[""]["kana"] = "";
	$placeHoldersEoc_refining_v1[""]["kana"] = "";
	$fieldLabelsEoc_refining_v1[""]["phone_number"] = "Phone Number";
	$fieldToolTipsEoc_refining_v1[""]["phone_number"] = "";
	$placeHoldersEoc_refining_v1[""]["phone_number"] = "";
	$fieldLabelsEoc_refining_v1[""]["email"] = "Email";
	$fieldToolTipsEoc_refining_v1[""]["email"] = "";
	$placeHoldersEoc_refining_v1[""]["email"] = "";
	$fieldLabelsEoc_refining_v1[""]["contact_method"] = "Contact Method";
	$fieldToolTipsEoc_refining_v1[""]["contact_method"] = "";
	$placeHoldersEoc_refining_v1[""]["contact_method"] = "";
	$fieldLabelsEoc_refining_v1[""]["user_yuubinn"] = "User Yuubinn";
	$fieldToolTipsEoc_refining_v1[""]["user_yuubinn"] = "";
	$placeHoldersEoc_refining_v1[""]["user_yuubinn"] = "";
	$fieldLabelsEoc_refining_v1[""]["user_todou"] = "User Todou";
	$fieldToolTipsEoc_refining_v1[""]["user_todou"] = "";
	$placeHoldersEoc_refining_v1[""]["user_todou"] = "";
	$fieldLabelsEoc_refining_v1[""]["user_sikutyouson"] = "User Sikutyouson";
	$fieldToolTipsEoc_refining_v1[""]["user_sikutyouson"] = "";
	$placeHoldersEoc_refining_v1[""]["user_sikutyouson"] = "";
	$fieldLabelsEoc_refining_v1[""]["user_banti"] = "User Banti";
	$fieldToolTipsEoc_refining_v1[""]["user_banti"] = "";
	$placeHoldersEoc_refining_v1[""]["user_banti"] = "";
	$fieldLabelsEoc_refining_v1[""]["user_building"] = "User Building";
	$fieldToolTipsEoc_refining_v1[""]["user_building"] = "";
	$placeHoldersEoc_refining_v1[""]["user_building"] = "";
	$fieldLabelsEoc_refining_v1[""]["is_applicant"] = "Is Applicant";
	$fieldToolTipsEoc_refining_v1[""]["is_applicant"] = "";
	$placeHoldersEoc_refining_v1[""]["is_applicant"] = "";
	$fieldLabelsEoc_refining_v1[""]["same_address"] = "Same Address";
	$fieldToolTipsEoc_refining_v1[""]["same_address"] = "";
	$placeHoldersEoc_refining_v1[""]["same_address"] = "";
	$fieldLabelsEoc_refining_v1[""]["content_inquiry"] = "Content Inquiry";
	$fieldToolTipsEoc_refining_v1[""]["content_inquiry"] = "";
	$placeHoldersEoc_refining_v1[""]["content_inquiry"] = "";
	$fieldLabelsEoc_refining_v1[""]["questionnaire_1"] = "Questionnaire 1";
	$fieldToolTipsEoc_refining_v1[""]["questionnaire_1"] = "";
	$placeHoldersEoc_refining_v1[""]["questionnaire_1"] = "";
	$fieldLabelsEoc_refining_v1[""]["questionnaire_2"] = "Questionnaire 2";
	$fieldToolTipsEoc_refining_v1[""]["questionnaire_2"] = "";
	$placeHoldersEoc_refining_v1[""]["questionnaire_2"] = "";
	$fieldLabelsEoc_refining_v1[""]["questionnaire_3"] = "Questionnaire 3";
	$fieldToolTipsEoc_refining_v1[""]["questionnaire_3"] = "";
	$placeHoldersEoc_refining_v1[""]["questionnaire_3"] = "";
	$fieldLabelsEoc_refining_v1[""]["created_at"] = "Created At";
	$fieldToolTipsEoc_refining_v1[""]["created_at"] = "";
	$placeHoldersEoc_refining_v1[""]["created_at"] = "";
	$fieldLabelsEoc_refining_v1[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_refining_v1[""]["updated_at"] = "";
	$placeHoldersEoc_refining_v1[""]["updated_at"] = "";
	$fieldLabelsEoc_refining_v1[""]["ingot_details"] = "Ingot Details";
	$fieldToolTipsEoc_refining_v1[""]["ingot_details"] = "";
	$placeHoldersEoc_refining_v1[""]["ingot_details"] = "";
	$fieldLabelsEoc_refining_v1[""]["saleRebuildingPrice"] = "Sale Rebuilding Price";
	$fieldToolTipsEoc_refining_v1[""]["saleRebuildingPrice"] = "";
	$placeHoldersEoc_refining_v1[""]["saleRebuildingPrice"] = "";
	$fieldLabelsEoc_refining_v1[""]["selected_sale_g"] = "Selected Sale G";
	$fieldToolTipsEoc_refining_v1[""]["selected_sale_g"] = "";
	$placeHoldersEoc_refining_v1[""]["selected_sale_g"] = "";
	$fieldLabelsEoc_refining_v1[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_refining_v1[""]["ecc_id"] = "";
	$placeHoldersEoc_refining_v1[""]["ecc_id"] = "";
	$fieldLabelsEoc_refining_v1[""]["status"] = "Status";
	$fieldToolTipsEoc_refining_v1[""]["status"] = "";
	$placeHoldersEoc_refining_v1[""]["status"] = "";
	if (count($fieldToolTipsEoc_refining_v1[""]))
		$tdataEoc_refining_v1[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_refining_v1["English"] = array();
	$fieldToolTipsEoc_refining_v1["English"] = array();
	$placeHoldersEoc_refining_v1["English"] = array();
	$pageTitlesEoc_refining_v1["English"] = array();
	$fieldLabelsEoc_refining_v1["English"]["id"] = "Id";
	$fieldToolTipsEoc_refining_v1["English"]["id"] = "";
	$placeHoldersEoc_refining_v1["English"]["id"] = "";
	$fieldLabelsEoc_refining_v1["English"]["angouka_mailaddress"] = "Angouka Mailaddress";
	$fieldToolTipsEoc_refining_v1["English"]["angouka_mailaddress"] = "";
	$placeHoldersEoc_refining_v1["English"]["angouka_mailaddress"] = "";
	$fieldLabelsEoc_refining_v1["English"]["service_selection"] = "Service Selection";
	$fieldToolTipsEoc_refining_v1["English"]["service_selection"] = "";
	$placeHoldersEoc_refining_v1["English"]["service_selection"] = "";
	$fieldLabelsEoc_refining_v1["English"]["sale_advance_input"] = "Sale Advance Input";
	$fieldToolTipsEoc_refining_v1["English"]["sale_advance_input"] = "";
	$placeHoldersEoc_refining_v1["English"]["sale_advance_input"] = "";
	$fieldLabelsEoc_refining_v1["English"]["deliveryservice"] = "Deliveryservice";
	$fieldToolTipsEoc_refining_v1["English"]["deliveryservice"] = "";
	$placeHoldersEoc_refining_v1["English"]["deliveryservice"] = "";
	$fieldLabelsEoc_refining_v1["English"]["totalTransferAmount"] = "Total Transfer Amount";
	$fieldToolTipsEoc_refining_v1["English"]["totalTransferAmount"] = "";
	$placeHoldersEoc_refining_v1["English"]["totalTransferAmount"] = "";
	$fieldLabelsEoc_refining_v1["English"]["usage"] = "Usage";
	$fieldToolTipsEoc_refining_v1["English"]["usage"] = "";
	$placeHoldersEoc_refining_v1["English"]["usage"] = "";
	$fieldLabelsEoc_refining_v1["English"]["rebuilding"] = "Rebuilding";
	$fieldToolTipsEoc_refining_v1["English"]["rebuilding"] = "";
	$placeHoldersEoc_refining_v1["English"]["rebuilding"] = "";
	$fieldLabelsEoc_refining_v1["English"]["name"] = "Name";
	$fieldToolTipsEoc_refining_v1["English"]["name"] = "";
	$placeHoldersEoc_refining_v1["English"]["name"] = "";
	$fieldLabelsEoc_refining_v1["English"]["kana"] = "Kana";
	$fieldToolTipsEoc_refining_v1["English"]["kana"] = "";
	$placeHoldersEoc_refining_v1["English"]["kana"] = "";
	$fieldLabelsEoc_refining_v1["English"]["phone_number"] = "Phone Number";
	$fieldToolTipsEoc_refining_v1["English"]["phone_number"] = "";
	$placeHoldersEoc_refining_v1["English"]["phone_number"] = "";
	$fieldLabelsEoc_refining_v1["English"]["email"] = "Email";
	$fieldToolTipsEoc_refining_v1["English"]["email"] = "";
	$placeHoldersEoc_refining_v1["English"]["email"] = "";
	$fieldLabelsEoc_refining_v1["English"]["contact_method"] = "Contact Method";
	$fieldToolTipsEoc_refining_v1["English"]["contact_method"] = "";
	$placeHoldersEoc_refining_v1["English"]["contact_method"] = "";
	$fieldLabelsEoc_refining_v1["English"]["user_yuubinn"] = "User Yuubinn";
	$fieldToolTipsEoc_refining_v1["English"]["user_yuubinn"] = "";
	$placeHoldersEoc_refining_v1["English"]["user_yuubinn"] = "";
	$fieldLabelsEoc_refining_v1["English"]["user_todou"] = "User Todou";
	$fieldToolTipsEoc_refining_v1["English"]["user_todou"] = "";
	$placeHoldersEoc_refining_v1["English"]["user_todou"] = "";
	$fieldLabelsEoc_refining_v1["English"]["user_sikutyouson"] = "User Sikutyouson";
	$fieldToolTipsEoc_refining_v1["English"]["user_sikutyouson"] = "";
	$placeHoldersEoc_refining_v1["English"]["user_sikutyouson"] = "";
	$fieldLabelsEoc_refining_v1["English"]["user_banti"] = "User Banti";
	$fieldToolTipsEoc_refining_v1["English"]["user_banti"] = "";
	$placeHoldersEoc_refining_v1["English"]["user_banti"] = "";
	$fieldLabelsEoc_refining_v1["English"]["user_building"] = "User Building";
	$fieldToolTipsEoc_refining_v1["English"]["user_building"] = "";
	$placeHoldersEoc_refining_v1["English"]["user_building"] = "";
	$fieldLabelsEoc_refining_v1["English"]["is_applicant"] = "Is Applicant";
	$fieldToolTipsEoc_refining_v1["English"]["is_applicant"] = "";
	$placeHoldersEoc_refining_v1["English"]["is_applicant"] = "";
	$fieldLabelsEoc_refining_v1["English"]["same_address"] = "Same Address";
	$fieldToolTipsEoc_refining_v1["English"]["same_address"] = "";
	$placeHoldersEoc_refining_v1["English"]["same_address"] = "";
	$fieldLabelsEoc_refining_v1["English"]["content_inquiry"] = "Content Inquiry";
	$fieldToolTipsEoc_refining_v1["English"]["content_inquiry"] = "";
	$placeHoldersEoc_refining_v1["English"]["content_inquiry"] = "";
	$fieldLabelsEoc_refining_v1["English"]["questionnaire_1"] = "Questionnaire 1";
	$fieldToolTipsEoc_refining_v1["English"]["questionnaire_1"] = "";
	$placeHoldersEoc_refining_v1["English"]["questionnaire_1"] = "";
	$fieldLabelsEoc_refining_v1["English"]["questionnaire_2"] = "Questionnaire 2";
	$fieldToolTipsEoc_refining_v1["English"]["questionnaire_2"] = "";
	$placeHoldersEoc_refining_v1["English"]["questionnaire_2"] = "";
	$fieldLabelsEoc_refining_v1["English"]["questionnaire_3"] = "Questionnaire 3";
	$fieldToolTipsEoc_refining_v1["English"]["questionnaire_3"] = "";
	$placeHoldersEoc_refining_v1["English"]["questionnaire_3"] = "";
	$fieldLabelsEoc_refining_v1["English"]["created_at"] = "Created At";
	$fieldToolTipsEoc_refining_v1["English"]["created_at"] = "";
	$placeHoldersEoc_refining_v1["English"]["created_at"] = "";
	$fieldLabelsEoc_refining_v1["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_refining_v1["English"]["updated_at"] = "";
	$placeHoldersEoc_refining_v1["English"]["updated_at"] = "";
	$fieldLabelsEoc_refining_v1["English"]["ingot_details"] = "Ingot Details";
	$fieldToolTipsEoc_refining_v1["English"]["ingot_details"] = "";
	$placeHoldersEoc_refining_v1["English"]["ingot_details"] = "";
	$fieldLabelsEoc_refining_v1["English"]["saleRebuildingPrice"] = "Sale Rebuilding Price";
	$fieldToolTipsEoc_refining_v1["English"]["saleRebuildingPrice"] = "";
	$placeHoldersEoc_refining_v1["English"]["saleRebuildingPrice"] = "";
	$fieldLabelsEoc_refining_v1["English"]["selected_sale_g"] = "Selected Sale G";
	$fieldToolTipsEoc_refining_v1["English"]["selected_sale_g"] = "";
	$placeHoldersEoc_refining_v1["English"]["selected_sale_g"] = "";
	$fieldLabelsEoc_refining_v1["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_refining_v1["English"]["ecc_id"] = "";
	$placeHoldersEoc_refining_v1["English"]["ecc_id"] = "";
	$fieldLabelsEoc_refining_v1["English"]["status"] = "Status";
	$fieldToolTipsEoc_refining_v1["English"]["status"] = "";
	$placeHoldersEoc_refining_v1["English"]["status"] = "";
	if (count($fieldToolTipsEoc_refining_v1["English"]))
		$tdataEoc_refining_v1[".isUseToolTips"] = true;
}


	$tdataEoc_refining_v1[".NCSearch"] = true;



$tdataEoc_refining_v1[".shortTableName"] = "Eoc_refining_v1";
$tdataEoc_refining_v1[".nSecOptions"] = 0;
$tdataEoc_refining_v1[".recsPerRowPrint"] = 1;
$tdataEoc_refining_v1[".mainTableOwnerID"] = "";
$tdataEoc_refining_v1[".moveNext"] = 1;
$tdataEoc_refining_v1[".entityType"] = 0;

$tdataEoc_refining_v1[".strOriginalTableName"] = "Eoc_refining_v1";

	



$tdataEoc_refining_v1[".showAddInPopup"] = false;

$tdataEoc_refining_v1[".showEditInPopup"] = false;

$tdataEoc_refining_v1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_refining_v1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_refining_v1[".fieldsForRegister"] = array();

$tdataEoc_refining_v1[".listAjax"] = false;

	$tdataEoc_refining_v1[".audit"] = false;

	$tdataEoc_refining_v1[".locking"] = false;



$tdataEoc_refining_v1[".list"] = true;

$tdataEoc_refining_v1[".inlineEdit"] = true;


$tdataEoc_refining_v1[".reorderRecordsByHeader"] = true;



$tdataEoc_refining_v1[".inlineAdd"] = true;


$tdataEoc_refining_v1[".exportTo"] = true;


$tdataEoc_refining_v1[".delete"] = true;

$tdataEoc_refining_v1[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_refining_v1[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_refining_v1[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_refining_v1[".searchSaving"] = false;
//

$tdataEoc_refining_v1[".showSearchPanel"] = true;
		$tdataEoc_refining_v1[".flexibleSearch"] = true;

$tdataEoc_refining_v1[".isUseAjaxSuggest"] = true;

$tdataEoc_refining_v1[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataEoc_refining_v1[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_refining_v1[".buttonsAdded"] = false;

$tdataEoc_refining_v1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_refining_v1[".isUseTimeForSearch"] = false;





$tdataEoc_refining_v1[".allSearchFields"] = array();
$tdataEoc_refining_v1[".filterFields"] = array();
$tdataEoc_refining_v1[".requiredSearchFields"] = array();

$tdataEoc_refining_v1[".allSearchFields"][] = "id";
	$tdataEoc_refining_v1[".allSearchFields"][] = "angouka_mailaddress";
	$tdataEoc_refining_v1[".allSearchFields"][] = "service_selection";
	$tdataEoc_refining_v1[".allSearchFields"][] = "sale_advance_input";
	$tdataEoc_refining_v1[".allSearchFields"][] = "deliveryservice";
	$tdataEoc_refining_v1[".allSearchFields"][] = "totalTransferAmount";
	$tdataEoc_refining_v1[".allSearchFields"][] = "usage";
	$tdataEoc_refining_v1[".allSearchFields"][] = "rebuilding";
	$tdataEoc_refining_v1[".allSearchFields"][] = "name";
	$tdataEoc_refining_v1[".allSearchFields"][] = "kana";
	$tdataEoc_refining_v1[".allSearchFields"][] = "phone_number";
	$tdataEoc_refining_v1[".allSearchFields"][] = "email";
	$tdataEoc_refining_v1[".allSearchFields"][] = "contact_method";
	$tdataEoc_refining_v1[".allSearchFields"][] = "user_yuubinn";
	$tdataEoc_refining_v1[".allSearchFields"][] = "user_todou";
	$tdataEoc_refining_v1[".allSearchFields"][] = "user_sikutyouson";
	$tdataEoc_refining_v1[".allSearchFields"][] = "user_banti";
	$tdataEoc_refining_v1[".allSearchFields"][] = "user_building";
	$tdataEoc_refining_v1[".allSearchFields"][] = "is_applicant";
	$tdataEoc_refining_v1[".allSearchFields"][] = "same_address";
	$tdataEoc_refining_v1[".allSearchFields"][] = "content_inquiry";
	$tdataEoc_refining_v1[".allSearchFields"][] = "questionnaire_1";
	$tdataEoc_refining_v1[".allSearchFields"][] = "questionnaire_2";
	$tdataEoc_refining_v1[".allSearchFields"][] = "questionnaire_3";
	$tdataEoc_refining_v1[".allSearchFields"][] = "created_at";
	$tdataEoc_refining_v1[".allSearchFields"][] = "updated_at";
	$tdataEoc_refining_v1[".allSearchFields"][] = "ingot_details";
	$tdataEoc_refining_v1[".allSearchFields"][] = "saleRebuildingPrice";
	$tdataEoc_refining_v1[".allSearchFields"][] = "selected_sale_g";
	$tdataEoc_refining_v1[".allSearchFields"][] = "ecc_id";
	$tdataEoc_refining_v1[".allSearchFields"][] = "status";
	

$tdataEoc_refining_v1[".googleLikeFields"] = array();
$tdataEoc_refining_v1[".googleLikeFields"][] = "id";
$tdataEoc_refining_v1[".googleLikeFields"][] = "angouka_mailaddress";
$tdataEoc_refining_v1[".googleLikeFields"][] = "service_selection";
$tdataEoc_refining_v1[".googleLikeFields"][] = "sale_advance_input";
$tdataEoc_refining_v1[".googleLikeFields"][] = "deliveryservice";
$tdataEoc_refining_v1[".googleLikeFields"][] = "totalTransferAmount";
$tdataEoc_refining_v1[".googleLikeFields"][] = "usage";
$tdataEoc_refining_v1[".googleLikeFields"][] = "rebuilding";
$tdataEoc_refining_v1[".googleLikeFields"][] = "name";
$tdataEoc_refining_v1[".googleLikeFields"][] = "kana";
$tdataEoc_refining_v1[".googleLikeFields"][] = "phone_number";
$tdataEoc_refining_v1[".googleLikeFields"][] = "email";
$tdataEoc_refining_v1[".googleLikeFields"][] = "contact_method";
$tdataEoc_refining_v1[".googleLikeFields"][] = "user_yuubinn";
$tdataEoc_refining_v1[".googleLikeFields"][] = "user_todou";
$tdataEoc_refining_v1[".googleLikeFields"][] = "user_sikutyouson";
$tdataEoc_refining_v1[".googleLikeFields"][] = "user_banti";
$tdataEoc_refining_v1[".googleLikeFields"][] = "user_building";
$tdataEoc_refining_v1[".googleLikeFields"][] = "is_applicant";
$tdataEoc_refining_v1[".googleLikeFields"][] = "same_address";
$tdataEoc_refining_v1[".googleLikeFields"][] = "content_inquiry";
$tdataEoc_refining_v1[".googleLikeFields"][] = "questionnaire_1";
$tdataEoc_refining_v1[".googleLikeFields"][] = "questionnaire_2";
$tdataEoc_refining_v1[".googleLikeFields"][] = "questionnaire_3";
$tdataEoc_refining_v1[".googleLikeFields"][] = "created_at";
$tdataEoc_refining_v1[".googleLikeFields"][] = "updated_at";
$tdataEoc_refining_v1[".googleLikeFields"][] = "ingot_details";
$tdataEoc_refining_v1[".googleLikeFields"][] = "saleRebuildingPrice";
$tdataEoc_refining_v1[".googleLikeFields"][] = "selected_sale_g";
$tdataEoc_refining_v1[".googleLikeFields"][] = "ecc_id";
$tdataEoc_refining_v1[".googleLikeFields"][] = "status";


$tdataEoc_refining_v1[".advSearchFields"] = array();
$tdataEoc_refining_v1[".advSearchFields"][] = "id";
$tdataEoc_refining_v1[".advSearchFields"][] = "angouka_mailaddress";
$tdataEoc_refining_v1[".advSearchFields"][] = "service_selection";
$tdataEoc_refining_v1[".advSearchFields"][] = "sale_advance_input";
$tdataEoc_refining_v1[".advSearchFields"][] = "deliveryservice";
$tdataEoc_refining_v1[".advSearchFields"][] = "totalTransferAmount";
$tdataEoc_refining_v1[".advSearchFields"][] = "usage";
$tdataEoc_refining_v1[".advSearchFields"][] = "rebuilding";
$tdataEoc_refining_v1[".advSearchFields"][] = "name";
$tdataEoc_refining_v1[".advSearchFields"][] = "kana";
$tdataEoc_refining_v1[".advSearchFields"][] = "phone_number";
$tdataEoc_refining_v1[".advSearchFields"][] = "email";
$tdataEoc_refining_v1[".advSearchFields"][] = "contact_method";
$tdataEoc_refining_v1[".advSearchFields"][] = "user_yuubinn";
$tdataEoc_refining_v1[".advSearchFields"][] = "user_todou";
$tdataEoc_refining_v1[".advSearchFields"][] = "user_sikutyouson";
$tdataEoc_refining_v1[".advSearchFields"][] = "user_banti";
$tdataEoc_refining_v1[".advSearchFields"][] = "user_building";
$tdataEoc_refining_v1[".advSearchFields"][] = "is_applicant";
$tdataEoc_refining_v1[".advSearchFields"][] = "same_address";
$tdataEoc_refining_v1[".advSearchFields"][] = "content_inquiry";
$tdataEoc_refining_v1[".advSearchFields"][] = "questionnaire_1";
$tdataEoc_refining_v1[".advSearchFields"][] = "questionnaire_2";
$tdataEoc_refining_v1[".advSearchFields"][] = "questionnaire_3";
$tdataEoc_refining_v1[".advSearchFields"][] = "created_at";
$tdataEoc_refining_v1[".advSearchFields"][] = "updated_at";
$tdataEoc_refining_v1[".advSearchFields"][] = "ingot_details";
$tdataEoc_refining_v1[".advSearchFields"][] = "saleRebuildingPrice";
$tdataEoc_refining_v1[".advSearchFields"][] = "selected_sale_g";
$tdataEoc_refining_v1[".advSearchFields"][] = "ecc_id";
$tdataEoc_refining_v1[".advSearchFields"][] = "status";

$tdataEoc_refining_v1[".tableType"] = "list";

$tdataEoc_refining_v1[".printerPageOrientation"] = 0;
$tdataEoc_refining_v1[".nPrinterPageScale"] = 100;

$tdataEoc_refining_v1[".nPrinterSplitRecords"] = 40;

$tdataEoc_refining_v1[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_refining_v1[".geocodingEnabled"] = false;





$tdataEoc_refining_v1[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_refining_v1[".pageSize"] = 20;

$tdataEoc_refining_v1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_refining_v1[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_refining_v1[".orderindexes"] = array();
$tdataEoc_refining_v1[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdataEoc_refining_v1[".sqlHead"] = "SELECT `id`,  `angouka_mailaddress`,  `service_selection`,  `sale_advance_input`,  `deliveryservice`,  `totalTransferAmount`,  `usage`,  `rebuilding`,  `name`,  `kana`,  `phone_number`,  `email`,  `contact_method`,  `user_yuubinn`,  `user_todou`,  `user_sikutyouson`,  `user_banti`,  `user_building`,  `is_applicant`,  `same_address`,  `content_inquiry`,  `questionnaire_1`,  `questionnaire_2`,  `questionnaire_3`,  `created_at`,  `updated_at`,  `ingot_details`,  `saleRebuildingPrice`,  `selected_sale_g`,  `ecc_id`,  `status`";
$tdataEoc_refining_v1[".sqlFrom"] = "FROM `Eoc_refining_v1`";
$tdataEoc_refining_v1[".sqlWhereExpr"] = "";
$tdataEoc_refining_v1[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_refining_v1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_refining_v1[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_refining_v1[".highlightSearchResults"] = true;

$tableKeysEoc_refining_v1 = array();
$tableKeysEoc_refining_v1[] = "id";
$tdataEoc_refining_v1[".Keys"] = $tableKeysEoc_refining_v1;

$tdataEoc_refining_v1[".listFields"] = array();
$tdataEoc_refining_v1[".listFields"][] = "id";
$tdataEoc_refining_v1[".listFields"][] = "angouka_mailaddress";
$tdataEoc_refining_v1[".listFields"][] = "service_selection";
$tdataEoc_refining_v1[".listFields"][] = "sale_advance_input";
$tdataEoc_refining_v1[".listFields"][] = "deliveryservice";
$tdataEoc_refining_v1[".listFields"][] = "totalTransferAmount";
$tdataEoc_refining_v1[".listFields"][] = "usage";
$tdataEoc_refining_v1[".listFields"][] = "rebuilding";
$tdataEoc_refining_v1[".listFields"][] = "name";
$tdataEoc_refining_v1[".listFields"][] = "kana";
$tdataEoc_refining_v1[".listFields"][] = "phone_number";
$tdataEoc_refining_v1[".listFields"][] = "email";
$tdataEoc_refining_v1[".listFields"][] = "contact_method";
$tdataEoc_refining_v1[".listFields"][] = "user_yuubinn";
$tdataEoc_refining_v1[".listFields"][] = "user_todou";
$tdataEoc_refining_v1[".listFields"][] = "user_sikutyouson";
$tdataEoc_refining_v1[".listFields"][] = "user_banti";
$tdataEoc_refining_v1[".listFields"][] = "user_building";
$tdataEoc_refining_v1[".listFields"][] = "is_applicant";
$tdataEoc_refining_v1[".listFields"][] = "same_address";
$tdataEoc_refining_v1[".listFields"][] = "content_inquiry";
$tdataEoc_refining_v1[".listFields"][] = "questionnaire_1";
$tdataEoc_refining_v1[".listFields"][] = "questionnaire_2";
$tdataEoc_refining_v1[".listFields"][] = "questionnaire_3";
$tdataEoc_refining_v1[".listFields"][] = "created_at";
$tdataEoc_refining_v1[".listFields"][] = "updated_at";
$tdataEoc_refining_v1[".listFields"][] = "ingot_details";
$tdataEoc_refining_v1[".listFields"][] = "saleRebuildingPrice";
$tdataEoc_refining_v1[".listFields"][] = "selected_sale_g";
$tdataEoc_refining_v1[".listFields"][] = "ecc_id";
$tdataEoc_refining_v1[".listFields"][] = "status";

$tdataEoc_refining_v1[".hideMobileList"] = array();


$tdataEoc_refining_v1[".viewFields"] = array();

$tdataEoc_refining_v1[".addFields"] = array();

$tdataEoc_refining_v1[".masterListFields"] = array();
$tdataEoc_refining_v1[".masterListFields"][] = "id";
$tdataEoc_refining_v1[".masterListFields"][] = "angouka_mailaddress";
$tdataEoc_refining_v1[".masterListFields"][] = "service_selection";
$tdataEoc_refining_v1[".masterListFields"][] = "sale_advance_input";
$tdataEoc_refining_v1[".masterListFields"][] = "deliveryservice";
$tdataEoc_refining_v1[".masterListFields"][] = "totalTransferAmount";
$tdataEoc_refining_v1[".masterListFields"][] = "usage";
$tdataEoc_refining_v1[".masterListFields"][] = "rebuilding";
$tdataEoc_refining_v1[".masterListFields"][] = "name";
$tdataEoc_refining_v1[".masterListFields"][] = "kana";
$tdataEoc_refining_v1[".masterListFields"][] = "phone_number";
$tdataEoc_refining_v1[".masterListFields"][] = "email";
$tdataEoc_refining_v1[".masterListFields"][] = "contact_method";
$tdataEoc_refining_v1[".masterListFields"][] = "user_yuubinn";
$tdataEoc_refining_v1[".masterListFields"][] = "user_todou";
$tdataEoc_refining_v1[".masterListFields"][] = "user_sikutyouson";
$tdataEoc_refining_v1[".masterListFields"][] = "user_banti";
$tdataEoc_refining_v1[".masterListFields"][] = "user_building";
$tdataEoc_refining_v1[".masterListFields"][] = "is_applicant";
$tdataEoc_refining_v1[".masterListFields"][] = "same_address";
$tdataEoc_refining_v1[".masterListFields"][] = "content_inquiry";
$tdataEoc_refining_v1[".masterListFields"][] = "questionnaire_1";
$tdataEoc_refining_v1[".masterListFields"][] = "questionnaire_2";
$tdataEoc_refining_v1[".masterListFields"][] = "questionnaire_3";
$tdataEoc_refining_v1[".masterListFields"][] = "created_at";
$tdataEoc_refining_v1[".masterListFields"][] = "updated_at";
$tdataEoc_refining_v1[".masterListFields"][] = "ingot_details";
$tdataEoc_refining_v1[".masterListFields"][] = "saleRebuildingPrice";
$tdataEoc_refining_v1[".masterListFields"][] = "selected_sale_g";
$tdataEoc_refining_v1[".masterListFields"][] = "ecc_id";
$tdataEoc_refining_v1[".masterListFields"][] = "status";

$tdataEoc_refining_v1[".inlineAddFields"] = array();
$tdataEoc_refining_v1[".inlineAddFields"][] = "angouka_mailaddress";
$tdataEoc_refining_v1[".inlineAddFields"][] = "service_selection";
$tdataEoc_refining_v1[".inlineAddFields"][] = "sale_advance_input";
$tdataEoc_refining_v1[".inlineAddFields"][] = "deliveryservice";
$tdataEoc_refining_v1[".inlineAddFields"][] = "totalTransferAmount";
$tdataEoc_refining_v1[".inlineAddFields"][] = "usage";
$tdataEoc_refining_v1[".inlineAddFields"][] = "rebuilding";
$tdataEoc_refining_v1[".inlineAddFields"][] = "name";
$tdataEoc_refining_v1[".inlineAddFields"][] = "kana";
$tdataEoc_refining_v1[".inlineAddFields"][] = "phone_number";
$tdataEoc_refining_v1[".inlineAddFields"][] = "email";
$tdataEoc_refining_v1[".inlineAddFields"][] = "contact_method";
$tdataEoc_refining_v1[".inlineAddFields"][] = "user_yuubinn";
$tdataEoc_refining_v1[".inlineAddFields"][] = "user_todou";
$tdataEoc_refining_v1[".inlineAddFields"][] = "user_sikutyouson";
$tdataEoc_refining_v1[".inlineAddFields"][] = "user_banti";
$tdataEoc_refining_v1[".inlineAddFields"][] = "user_building";
$tdataEoc_refining_v1[".inlineAddFields"][] = "is_applicant";
$tdataEoc_refining_v1[".inlineAddFields"][] = "same_address";
$tdataEoc_refining_v1[".inlineAddFields"][] = "content_inquiry";
$tdataEoc_refining_v1[".inlineAddFields"][] = "questionnaire_1";
$tdataEoc_refining_v1[".inlineAddFields"][] = "questionnaire_2";
$tdataEoc_refining_v1[".inlineAddFields"][] = "questionnaire_3";
$tdataEoc_refining_v1[".inlineAddFields"][] = "created_at";
$tdataEoc_refining_v1[".inlineAddFields"][] = "updated_at";
$tdataEoc_refining_v1[".inlineAddFields"][] = "ingot_details";
$tdataEoc_refining_v1[".inlineAddFields"][] = "saleRebuildingPrice";
$tdataEoc_refining_v1[".inlineAddFields"][] = "selected_sale_g";
$tdataEoc_refining_v1[".inlineAddFields"][] = "ecc_id";
$tdataEoc_refining_v1[".inlineAddFields"][] = "status";

$tdataEoc_refining_v1[".editFields"] = array();

$tdataEoc_refining_v1[".inlineEditFields"] = array();
$tdataEoc_refining_v1[".inlineEditFields"][] = "angouka_mailaddress";
$tdataEoc_refining_v1[".inlineEditFields"][] = "service_selection";
$tdataEoc_refining_v1[".inlineEditFields"][] = "sale_advance_input";
$tdataEoc_refining_v1[".inlineEditFields"][] = "deliveryservice";
$tdataEoc_refining_v1[".inlineEditFields"][] = "totalTransferAmount";
$tdataEoc_refining_v1[".inlineEditFields"][] = "usage";
$tdataEoc_refining_v1[".inlineEditFields"][] = "rebuilding";
$tdataEoc_refining_v1[".inlineEditFields"][] = "name";
$tdataEoc_refining_v1[".inlineEditFields"][] = "kana";
$tdataEoc_refining_v1[".inlineEditFields"][] = "phone_number";
$tdataEoc_refining_v1[".inlineEditFields"][] = "email";
$tdataEoc_refining_v1[".inlineEditFields"][] = "contact_method";
$tdataEoc_refining_v1[".inlineEditFields"][] = "user_yuubinn";
$tdataEoc_refining_v1[".inlineEditFields"][] = "user_todou";
$tdataEoc_refining_v1[".inlineEditFields"][] = "user_sikutyouson";
$tdataEoc_refining_v1[".inlineEditFields"][] = "user_banti";
$tdataEoc_refining_v1[".inlineEditFields"][] = "user_building";
$tdataEoc_refining_v1[".inlineEditFields"][] = "is_applicant";
$tdataEoc_refining_v1[".inlineEditFields"][] = "same_address";
$tdataEoc_refining_v1[".inlineEditFields"][] = "content_inquiry";
$tdataEoc_refining_v1[".inlineEditFields"][] = "questionnaire_1";
$tdataEoc_refining_v1[".inlineEditFields"][] = "questionnaire_2";
$tdataEoc_refining_v1[".inlineEditFields"][] = "questionnaire_3";
$tdataEoc_refining_v1[".inlineEditFields"][] = "created_at";
$tdataEoc_refining_v1[".inlineEditFields"][] = "updated_at";
$tdataEoc_refining_v1[".inlineEditFields"][] = "ingot_details";
$tdataEoc_refining_v1[".inlineEditFields"][] = "saleRebuildingPrice";
$tdataEoc_refining_v1[".inlineEditFields"][] = "selected_sale_g";
$tdataEoc_refining_v1[".inlineEditFields"][] = "ecc_id";
$tdataEoc_refining_v1[".inlineEditFields"][] = "status";

$tdataEoc_refining_v1[".updateSelectedFields"] = array();


$tdataEoc_refining_v1[".exportFields"] = array();
$tdataEoc_refining_v1[".exportFields"][] = "id";
$tdataEoc_refining_v1[".exportFields"][] = "angouka_mailaddress";
$tdataEoc_refining_v1[".exportFields"][] = "service_selection";
$tdataEoc_refining_v1[".exportFields"][] = "sale_advance_input";
$tdataEoc_refining_v1[".exportFields"][] = "deliveryservice";
$tdataEoc_refining_v1[".exportFields"][] = "totalTransferAmount";
$tdataEoc_refining_v1[".exportFields"][] = "usage";
$tdataEoc_refining_v1[".exportFields"][] = "rebuilding";
$tdataEoc_refining_v1[".exportFields"][] = "name";
$tdataEoc_refining_v1[".exportFields"][] = "kana";
$tdataEoc_refining_v1[".exportFields"][] = "phone_number";
$tdataEoc_refining_v1[".exportFields"][] = "email";
$tdataEoc_refining_v1[".exportFields"][] = "contact_method";
$tdataEoc_refining_v1[".exportFields"][] = "user_yuubinn";
$tdataEoc_refining_v1[".exportFields"][] = "user_todou";
$tdataEoc_refining_v1[".exportFields"][] = "user_sikutyouson";
$tdataEoc_refining_v1[".exportFields"][] = "user_banti";
$tdataEoc_refining_v1[".exportFields"][] = "user_building";
$tdataEoc_refining_v1[".exportFields"][] = "is_applicant";
$tdataEoc_refining_v1[".exportFields"][] = "same_address";
$tdataEoc_refining_v1[".exportFields"][] = "content_inquiry";
$tdataEoc_refining_v1[".exportFields"][] = "questionnaire_1";
$tdataEoc_refining_v1[".exportFields"][] = "questionnaire_2";
$tdataEoc_refining_v1[".exportFields"][] = "questionnaire_3";
$tdataEoc_refining_v1[".exportFields"][] = "created_at";
$tdataEoc_refining_v1[".exportFields"][] = "updated_at";
$tdataEoc_refining_v1[".exportFields"][] = "ingot_details";
$tdataEoc_refining_v1[".exportFields"][] = "saleRebuildingPrice";
$tdataEoc_refining_v1[".exportFields"][] = "selected_sale_g";
$tdataEoc_refining_v1[".exportFields"][] = "ecc_id";
$tdataEoc_refining_v1[".exportFields"][] = "status";

$tdataEoc_refining_v1[".importFields"] = array();

$tdataEoc_refining_v1[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdataEoc_refining_v1["id"] = $fdata;
//	angouka_mailaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "angouka_mailaddress";
	$fdata["GoodName"] = "angouka_mailaddress";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","angouka_mailaddress");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "angouka_mailaddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`angouka_mailaddress`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_refining_v1["angouka_mailaddress"] = $fdata;
//	service_selection
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "service_selection";
	$fdata["GoodName"] = "service_selection";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","service_selection");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "service_selection";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`service_selection`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["service_selection"] = $fdata;
//	sale_advance_input
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sale_advance_input";
	$fdata["GoodName"] = "sale_advance_input";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","sale_advance_input");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sale_advance_input";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sale_advance_input`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["sale_advance_input"] = $fdata;
//	deliveryservice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "deliveryservice";
	$fdata["GoodName"] = "deliveryservice";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","deliveryservice");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "deliveryservice";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`deliveryservice`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["deliveryservice"] = $fdata;
//	totalTransferAmount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "totalTransferAmount";
	$fdata["GoodName"] = "totalTransferAmount";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","totalTransferAmount");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "totalTransferAmount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`totalTransferAmount`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["totalTransferAmount"] = $fdata;
//	usage
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "usage";
	$fdata["GoodName"] = "usage";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","usage");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "usage";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`usage`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["usage"] = $fdata;
//	rebuilding
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "rebuilding";
	$fdata["GoodName"] = "rebuilding";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","rebuilding");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rebuilding";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`rebuilding`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["rebuilding"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","name");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`name`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["name"] = $fdata;
//	kana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "kana";
	$fdata["GoodName"] = "kana";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","kana");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kana";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kana`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["kana"] = $fdata;
//	phone_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "phone_number";
	$fdata["GoodName"] = "phone_number";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","phone_number");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "phone_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`phone_number`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["phone_number"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","email");
	$fdata["FieldType"] = 201;

	
	
	
			
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




	$tdataEoc_refining_v1["email"] = $fdata;
//	contact_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "contact_method";
	$fdata["GoodName"] = "contact_method";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","contact_method");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "contact_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`contact_method`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["contact_method"] = $fdata;
//	user_yuubinn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "user_yuubinn";
	$fdata["GoodName"] = "user_yuubinn";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","user_yuubinn");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdataEoc_refining_v1["user_yuubinn"] = $fdata;
//	user_todou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "user_todou";
	$fdata["GoodName"] = "user_todou";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","user_todou");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdataEoc_refining_v1["user_todou"] = $fdata;
//	user_sikutyouson
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "user_sikutyouson";
	$fdata["GoodName"] = "user_sikutyouson";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","user_sikutyouson");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdataEoc_refining_v1["user_sikutyouson"] = $fdata;
//	user_banti
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "user_banti";
	$fdata["GoodName"] = "user_banti";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","user_banti");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdataEoc_refining_v1["user_banti"] = $fdata;
//	user_building
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "user_building";
	$fdata["GoodName"] = "user_building";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","user_building");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_building";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user_building`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["user_building"] = $fdata;
//	is_applicant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "is_applicant";
	$fdata["GoodName"] = "is_applicant";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","is_applicant");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "is_applicant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`is_applicant`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["is_applicant"] = $fdata;
//	same_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "same_address";
	$fdata["GoodName"] = "same_address";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","same_address");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "same_address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`same_address`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["same_address"] = $fdata;
//	content_inquiry
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "content_inquiry";
	$fdata["GoodName"] = "content_inquiry";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","content_inquiry");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "content_inquiry";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`content_inquiry`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["content_inquiry"] = $fdata;
//	questionnaire_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "questionnaire_1";
	$fdata["GoodName"] = "questionnaire_1";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","questionnaire_1");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "questionnaire_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`questionnaire_1`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["questionnaire_1"] = $fdata;
//	questionnaire_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "questionnaire_2";
	$fdata["GoodName"] = "questionnaire_2";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","questionnaire_2");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "questionnaire_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`questionnaire_2`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["questionnaire_2"] = $fdata;
//	questionnaire_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "questionnaire_3";
	$fdata["GoodName"] = "questionnaire_3";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","questionnaire_3");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "questionnaire_3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`questionnaire_3`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["questionnaire_3"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","created_at");
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




	$tdataEoc_refining_v1["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","updated_at");
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




	$tdataEoc_refining_v1["updated_at"] = $fdata;
//	ingot_details
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "ingot_details";
	$fdata["GoodName"] = "ingot_details";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","ingot_details");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ingot_details";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ingot_details`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["ingot_details"] = $fdata;
//	saleRebuildingPrice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "saleRebuildingPrice";
	$fdata["GoodName"] = "saleRebuildingPrice";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","saleRebuildingPrice");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "saleRebuildingPrice";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`saleRebuildingPrice`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["saleRebuildingPrice"] = $fdata;
//	selected_sale_g
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "selected_sale_g";
	$fdata["GoodName"] = "selected_sale_g";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","selected_sale_g");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "selected_sale_g";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`selected_sale_g`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_refining_v1["selected_sale_g"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","ecc_id");
	$fdata["FieldType"] = 20;

	
	
	
			
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




	$tdataEoc_refining_v1["ecc_id"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "Eoc_refining_v1";
	$fdata["Label"] = GetFieldLabel("Eoc_refining_v1","status");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdataEoc_refining_v1["status"] = $fdata;


$tables_data["Eoc_refining_v1"]=&$tdataEoc_refining_v1;
$field_labels["Eoc_refining_v1"] = &$fieldLabelsEoc_refining_v1;
$fieldToolTips["Eoc_refining_v1"] = &$fieldToolTipsEoc_refining_v1;
$placeHolders["Eoc_refining_v1"] = &$placeHoldersEoc_refining_v1;
$page_titles["Eoc_refining_v1"] = &$pageTitlesEoc_refining_v1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_refining_v1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_refining_v1"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_refining_v1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `angouka_mailaddress`,  `service_selection`,  `sale_advance_input`,  `deliveryservice`,  `totalTransferAmount`,  `usage`,  `rebuilding`,  `name`,  `kana`,  `phone_number`,  `email`,  `contact_method`,  `user_yuubinn`,  `user_todou`,  `user_sikutyouson`,  `user_banti`,  `user_building`,  `is_applicant`,  `same_address`,  `content_inquiry`,  `questionnaire_1`,  `questionnaire_2`,  `questionnaire_3`,  `created_at`,  `updated_at`,  `ingot_details`,  `saleRebuildingPrice`,  `selected_sale_g`,  `ecc_id`,  `status`";
$proto0["m_strFrom"] = "FROM `Eoc_refining_v1`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `id` DESC";
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
	"m_strName" => "id",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "Eoc_refining_v1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "angouka_mailaddress",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto8["m_sql"] = "`angouka_mailaddress`";
$proto8["m_srcTableName"] = "Eoc_refining_v1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "service_selection",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto10["m_sql"] = "`service_selection`";
$proto10["m_srcTableName"] = "Eoc_refining_v1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sale_advance_input",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto12["m_sql"] = "`sale_advance_input`";
$proto12["m_srcTableName"] = "Eoc_refining_v1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "deliveryservice",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto14["m_sql"] = "`deliveryservice`";
$proto14["m_srcTableName"] = "Eoc_refining_v1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "totalTransferAmount",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto16["m_sql"] = "`totalTransferAmount`";
$proto16["m_srcTableName"] = "Eoc_refining_v1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "usage",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto18["m_sql"] = "`usage`";
$proto18["m_srcTableName"] = "Eoc_refining_v1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "rebuilding",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto20["m_sql"] = "`rebuilding`";
$proto20["m_srcTableName"] = "Eoc_refining_v1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto22["m_sql"] = "`name`";
$proto22["m_srcTableName"] = "Eoc_refining_v1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "kana",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto24["m_sql"] = "`kana`";
$proto24["m_srcTableName"] = "Eoc_refining_v1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_number",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto26["m_sql"] = "`phone_number`";
$proto26["m_srcTableName"] = "Eoc_refining_v1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto28["m_sql"] = "`email`";
$proto28["m_srcTableName"] = "Eoc_refining_v1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_method",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto30["m_sql"] = "`contact_method`";
$proto30["m_srcTableName"] = "Eoc_refining_v1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "user_yuubinn",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto32["m_sql"] = "`user_yuubinn`";
$proto32["m_srcTableName"] = "Eoc_refining_v1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "user_todou",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto34["m_sql"] = "`user_todou`";
$proto34["m_srcTableName"] = "Eoc_refining_v1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "user_sikutyouson",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto36["m_sql"] = "`user_sikutyouson`";
$proto36["m_srcTableName"] = "Eoc_refining_v1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "user_banti",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto38["m_sql"] = "`user_banti`";
$proto38["m_srcTableName"] = "Eoc_refining_v1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "user_building",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto40["m_sql"] = "`user_building`";
$proto40["m_srcTableName"] = "Eoc_refining_v1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "is_applicant",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto42["m_sql"] = "`is_applicant`";
$proto42["m_srcTableName"] = "Eoc_refining_v1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "same_address",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto44["m_sql"] = "`same_address`";
$proto44["m_srcTableName"] = "Eoc_refining_v1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "content_inquiry",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto46["m_sql"] = "`content_inquiry`";
$proto46["m_srcTableName"] = "Eoc_refining_v1";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "questionnaire_1",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto48["m_sql"] = "`questionnaire_1`";
$proto48["m_srcTableName"] = "Eoc_refining_v1";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "questionnaire_2",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto50["m_sql"] = "`questionnaire_2`";
$proto50["m_srcTableName"] = "Eoc_refining_v1";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "questionnaire_3",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto52["m_sql"] = "`questionnaire_3`";
$proto52["m_srcTableName"] = "Eoc_refining_v1";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto54["m_sql"] = "`created_at`";
$proto54["m_srcTableName"] = "Eoc_refining_v1";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto56["m_sql"] = "`updated_at`";
$proto56["m_srcTableName"] = "Eoc_refining_v1";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "ingot_details",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto58["m_sql"] = "`ingot_details`";
$proto58["m_srcTableName"] = "Eoc_refining_v1";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "saleRebuildingPrice",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto60["m_sql"] = "`saleRebuildingPrice`";
$proto60["m_srcTableName"] = "Eoc_refining_v1";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "selected_sale_g",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto62["m_sql"] = "`selected_sale_g`";
$proto62["m_srcTableName"] = "Eoc_refining_v1";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto64["m_sql"] = "`ecc_id`";
$proto64["m_srcTableName"] = "Eoc_refining_v1";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto66["m_sql"] = "`status`";
$proto66["m_srcTableName"] = "Eoc_refining_v1";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto68=array();
$proto68["m_link"] = "SQLL_MAIN";
			$proto69=array();
$proto69["m_strName"] = "Eoc_refining_v1";
$proto69["m_srcTableName"] = "Eoc_refining_v1";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "id";
$proto69["m_columns"][] = "angouka_mailaddress";
$proto69["m_columns"][] = "service_selection";
$proto69["m_columns"][] = "sale_advance_input";
$proto69["m_columns"][] = "deliveryservice";
$proto69["m_columns"][] = "totalTransferAmount";
$proto69["m_columns"][] = "usage";
$proto69["m_columns"][] = "rebuilding";
$proto69["m_columns"][] = "name";
$proto69["m_columns"][] = "kana";
$proto69["m_columns"][] = "phone_number";
$proto69["m_columns"][] = "email";
$proto69["m_columns"][] = "contact_method";
$proto69["m_columns"][] = "user_yuubinn";
$proto69["m_columns"][] = "user_todou";
$proto69["m_columns"][] = "user_sikutyouson";
$proto69["m_columns"][] = "user_banti";
$proto69["m_columns"][] = "user_building";
$proto69["m_columns"][] = "is_applicant";
$proto69["m_columns"][] = "same_address";
$proto69["m_columns"][] = "content_inquiry";
$proto69["m_columns"][] = "questionnaire_1";
$proto69["m_columns"][] = "questionnaire_2";
$proto69["m_columns"][] = "questionnaire_3";
$proto69["m_columns"][] = "created_at";
$proto69["m_columns"][] = "updated_at";
$proto69["m_columns"][] = "ingot_details";
$proto69["m_columns"][] = "saleRebuildingPrice";
$proto69["m_columns"][] = "selected_sale_g";
$proto69["m_columns"][] = "ecc_id";
$proto69["m_columns"][] = "status";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "`Eoc_refining_v1`";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "Eoc_refining_v1";
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
	"m_strName" => "id",
	"m_strTable" => "Eoc_refining_v1",
	"m_srcTableName" => "Eoc_refining_v1"
));

$proto72["m_column"]=$obj;
$proto72["m_bAsc"] = 0;
$proto72["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto72);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_refining_v1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_refining_v1 = createSqlQuery_Eoc_refining_v1();


	
		;

																															

$tdataEoc_refining_v1[".sqlquery"] = $queryData_Eoc_refining_v1;

$tableEvents["Eoc_refining_v1"] = new eventsBase;
$tdataEoc_refining_v1[".hasEvents"] = false;

?>