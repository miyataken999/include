<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_nittsuu = array();
	$tdataEoc_nittsuu[".truncateText"] = true;
	$tdataEoc_nittsuu[".NumberOfChars"] = 80;
	$tdataEoc_nittsuu[".ShortName"] = "Eoc_nittsuu";
	$tdataEoc_nittsuu[".OwnerID"] = "";
	$tdataEoc_nittsuu[".OriginalTable"] = "Eoc";

//	field labels
$fieldLabelsEoc_nittsuu = array();
$fieldToolTipsEoc_nittsuu = array();
$pageTitlesEoc_nittsuu = array();
$placeHoldersEoc_nittsuu = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_nittsuu["Japanese"] = array();
	$fieldToolTipsEoc_nittsuu["Japanese"] = array();
	$placeHoldersEoc_nittsuu["Japanese"] = array();
	$pageTitlesEoc_nittsuu["Japanese"] = array();
	$fieldLabelsEoc_nittsuu["Japanese"]["ecc_id"] = "顧客ＳＥＱ";
	$fieldToolTipsEoc_nittsuu["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["name1"] = "荷送人名称1";
	$fieldToolTipsEoc_nittsuu["Japanese"]["name1"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["name1"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["name2"] = "荷送人名称2";
	$fieldToolTipsEoc_nittsuu["Japanese"]["name2"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["name2"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["zip1"] = "荷送人郵便番号";
	$fieldToolTipsEoc_nittsuu["Japanese"]["zip1"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["zip1"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["address1"] = "荷送人住所1";
	$fieldToolTipsEoc_nittsuu["Japanese"]["address1"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["address1"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["address3"] = "荷送人住所3";
	$fieldToolTipsEoc_nittsuu["Japanese"]["address3"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["address3"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["tel"] = "電話";
	$fieldToolTipsEoc_nittsuu["Japanese"]["tel"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["tel"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["tel2"] = "荷送人現住所電話番号";
	$fieldToolTipsEoc_nittsuu["Japanese"]["tel2"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["tel2"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Consignee_Address_1"] = "荷受人住所1";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Consignee_Address_1"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Consignee_Address_1"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Consignee_Address_2"] = "荷受人住所2";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Consignee_Address_2"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Consignee_Address_2"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Consignee_name_1"] = "荷受人名称1";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Consignee_name_1"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Consignee_name_1"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Consignee_name_2"] = "荷受人名称2";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Consignee_name_2"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Consignee_name_2"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Consignee_phone_number"] = "荷受人現住所電話番号";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Consignee_phone_number"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Consignee_phone_number"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Consignee_zip_code"] = "荷受人郵便番号";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Consignee_zip_code"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Consignee_zip_code"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Number"] = "個数";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Number"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Number"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Collection_date"] = "集荷年月日";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Collection_date"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Collection_date"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Pickup_time_FROM"] = "集荷時間FROM";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Pickup_time_FROM"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Pickup_time_FROM"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Pickup_time_TO"] = "集荷時間TO";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Pickup_time_TO"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Pickup_time_TO"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Delivery_time_FROM"] = "配達時間FROM";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Delivery_time_FROM"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Delivery_time_FROM"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Name_1"] = "品名1";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Name_1"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Name_1"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Declared_value"] = "申告価格";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Declared_value"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Declared_value"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Delivery_date"] = "配達年月日";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Delivery_date"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Delivery_date"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Delivery_time_TO"] = "配達時間TO";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Delivery_time_TO"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Delivery_time_TO"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["mst_refining_status_id"] = "精錬ステータス";
	$fieldToolTipsEoc_nittsuu["Japanese"]["mst_refining_status_id"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["mst_refining_status_id"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["refining_id"] = "取引id";
	$fieldToolTipsEoc_nittsuu["Japanese"]["refining_id"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["refining_id"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Pickup_time_select"] = "集荷時間選択";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Pickup_time_select"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Pickup_time_select"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Delivery_time_select"] = "納品時間選択";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Delivery_time_select"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Delivery_time_select"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["refining_weight"] = "重量";
	$fieldToolTipsEoc_nittsuu["Japanese"]["refining_weight"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["refining_weight"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["address2"] = "荷送人住所2";
	$fieldToolTipsEoc_nittsuu["Japanese"]["address2"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["address2"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["address_reserve"] = "荷送人住所予備";
	$fieldToolTipsEoc_nittsuu["Japanese"]["address_reserve"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["address_reserve"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Consignee_name_reserve"] = "荷受人名称予備";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Consignee_name_reserve"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Consignee_name_reserve"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["name_reserve"] = "荷送人名称予備";
	$fieldToolTipsEoc_nittsuu["Japanese"]["name_reserve"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["name_reserve"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Consignee_Address_3"] = "荷受人住所3";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Consignee_Address_3"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Consignee_Address_3"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Consignee_Address_reserve"] = "荷受人住所予備";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Consignee_Address_reserve"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Consignee_Address_reserve"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Collection_display_date"] = "集荷指定年月日";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Collection_display_date"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Collection_display_date"] = "";
	$fieldLabelsEoc_nittsuu["Japanese"]["Delivery_display_date"] = "配達指定年月日";
	$fieldToolTipsEoc_nittsuu["Japanese"]["Delivery_display_date"] = "";
	$placeHoldersEoc_nittsuu["Japanese"]["Delivery_display_date"] = "";
	if (count($fieldToolTipsEoc_nittsuu["Japanese"]))
		$tdataEoc_nittsuu[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_nittsuu[""] = array();
	$fieldToolTipsEoc_nittsuu[""] = array();
	$placeHoldersEoc_nittsuu[""] = array();
	$pageTitlesEoc_nittsuu[""] = array();
	$fieldLabelsEoc_nittsuu[""]["Consignee_Address_1"] = "Consignee Address 1";
	$fieldToolTipsEoc_nittsuu[""]["Consignee_Address_1"] = "";
	$placeHoldersEoc_nittsuu[""]["Consignee_Address_1"] = "";
	$fieldLabelsEoc_nittsuu[""]["Consignee_Address_2"] = "Consignee Address 2";
	$fieldToolTipsEoc_nittsuu[""]["Consignee_Address_2"] = "";
	$placeHoldersEoc_nittsuu[""]["Consignee_Address_2"] = "";
	$fieldLabelsEoc_nittsuu[""]["Consignee_name_1"] = "Consignee Name 1";
	$fieldToolTipsEoc_nittsuu[""]["Consignee_name_1"] = "";
	$placeHoldersEoc_nittsuu[""]["Consignee_name_1"] = "";
	$fieldLabelsEoc_nittsuu[""]["Consignee_name_2"] = "Consignee Name 2";
	$fieldToolTipsEoc_nittsuu[""]["Consignee_name_2"] = "";
	$placeHoldersEoc_nittsuu[""]["Consignee_name_2"] = "";
	$fieldLabelsEoc_nittsuu[""]["Consignee_phone_number"] = "Consignee Phone Number";
	$fieldToolTipsEoc_nittsuu[""]["Consignee_phone_number"] = "";
	$placeHoldersEoc_nittsuu[""]["Consignee_phone_number"] = "";
	$fieldLabelsEoc_nittsuu[""]["Consignee_zip_code"] = "Consignee Zip Code";
	$fieldToolTipsEoc_nittsuu[""]["Consignee_zip_code"] = "";
	$placeHoldersEoc_nittsuu[""]["Consignee_zip_code"] = "";
	$fieldLabelsEoc_nittsuu[""]["Number"] = "Number";
	$fieldToolTipsEoc_nittsuu[""]["Number"] = "";
	$placeHoldersEoc_nittsuu[""]["Number"] = "";
	$fieldLabelsEoc_nittsuu[""]["Collection_date"] = "Collection Date";
	$fieldToolTipsEoc_nittsuu[""]["Collection_date"] = "";
	$placeHoldersEoc_nittsuu[""]["Collection_date"] = "";
	$fieldLabelsEoc_nittsuu[""]["Pickup_time_FROM"] = "Pickup Time FROM";
	$fieldToolTipsEoc_nittsuu[""]["Pickup_time_FROM"] = "";
	$placeHoldersEoc_nittsuu[""]["Pickup_time_FROM"] = "";
	$fieldLabelsEoc_nittsuu[""]["Pickup_time_TO"] = "Pickup Time TO";
	$fieldToolTipsEoc_nittsuu[""]["Pickup_time_TO"] = "";
	$placeHoldersEoc_nittsuu[""]["Pickup_time_TO"] = "";
	$fieldLabelsEoc_nittsuu[""]["Delivery_time_FROM"] = "Delivery Time FROM";
	$fieldToolTipsEoc_nittsuu[""]["Delivery_time_FROM"] = "";
	$placeHoldersEoc_nittsuu[""]["Delivery_time_FROM"] = "";
	$fieldLabelsEoc_nittsuu[""]["Name_1"] = "Name 1";
	$fieldToolTipsEoc_nittsuu[""]["Name_1"] = "";
	$placeHoldersEoc_nittsuu[""]["Name_1"] = "";
	$fieldLabelsEoc_nittsuu[""]["Declared_value"] = "Declared Value";
	$fieldToolTipsEoc_nittsuu[""]["Declared_value"] = "";
	$placeHoldersEoc_nittsuu[""]["Declared_value"] = "";
	$fieldLabelsEoc_nittsuu[""]["Delivery_date"] = "Delivery Date";
	$fieldToolTipsEoc_nittsuu[""]["Delivery_date"] = "";
	$placeHoldersEoc_nittsuu[""]["Delivery_date"] = "";
	$fieldLabelsEoc_nittsuu[""]["Delivery_time_TO"] = "Delivery Time TO";
	$fieldToolTipsEoc_nittsuu[""]["Delivery_time_TO"] = "";
	$placeHoldersEoc_nittsuu[""]["Delivery_time_TO"] = "";
	$fieldLabelsEoc_nittsuu[""]["mst_refining_status_id"] = "Mst Refining Status Id";
	$fieldToolTipsEoc_nittsuu[""]["mst_refining_status_id"] = "";
	$placeHoldersEoc_nittsuu[""]["mst_refining_status_id"] = "";
	$fieldLabelsEoc_nittsuu[""]["refining_id"] = "Refining Id";
	$fieldToolTipsEoc_nittsuu[""]["refining_id"] = "";
	$placeHoldersEoc_nittsuu[""]["refining_id"] = "";
	$fieldLabelsEoc_nittsuu[""]["Pickup_time_select"] = "Pickup Time Select";
	$fieldToolTipsEoc_nittsuu[""]["Pickup_time_select"] = "";
	$placeHoldersEoc_nittsuu[""]["Pickup_time_select"] = "";
	$fieldLabelsEoc_nittsuu[""]["Delivery_time_select"] = "Delivery Time Select";
	$fieldToolTipsEoc_nittsuu[""]["Delivery_time_select"] = "";
	$placeHoldersEoc_nittsuu[""]["Delivery_time_select"] = "";
	$fieldLabelsEoc_nittsuu[""]["refining_weight"] = "Refining Weight";
	$fieldToolTipsEoc_nittsuu[""]["refining_weight"] = "";
	$placeHoldersEoc_nittsuu[""]["refining_weight"] = "";
	$fieldLabelsEoc_nittsuu[""]["address2"] = "Address2";
	$fieldToolTipsEoc_nittsuu[""]["address2"] = "";
	$placeHoldersEoc_nittsuu[""]["address2"] = "";
	$fieldLabelsEoc_nittsuu[""]["address_reserve"] = "Address Reserve";
	$fieldToolTipsEoc_nittsuu[""]["address_reserve"] = "";
	$placeHoldersEoc_nittsuu[""]["address_reserve"] = "";
	$fieldLabelsEoc_nittsuu[""]["Consignee_name_reserve"] = "Consignee Name Reserve";
	$fieldToolTipsEoc_nittsuu[""]["Consignee_name_reserve"] = "";
	$placeHoldersEoc_nittsuu[""]["Consignee_name_reserve"] = "";
	$fieldLabelsEoc_nittsuu[""]["name_reserve"] = "Name Reserve";
	$fieldToolTipsEoc_nittsuu[""]["name_reserve"] = "";
	$placeHoldersEoc_nittsuu[""]["name_reserve"] = "";
	$fieldLabelsEoc_nittsuu[""]["Consignee_Address_3"] = "Consignee Address 3";
	$fieldToolTipsEoc_nittsuu[""]["Consignee_Address_3"] = "";
	$placeHoldersEoc_nittsuu[""]["Consignee_Address_3"] = "";
	$fieldLabelsEoc_nittsuu[""]["Consignee_Address_reserve"] = "Consignee Address Reserve";
	$fieldToolTipsEoc_nittsuu[""]["Consignee_Address_reserve"] = "";
	$placeHoldersEoc_nittsuu[""]["Consignee_Address_reserve"] = "";
	$fieldLabelsEoc_nittsuu[""]["Collection_display_date"] = "Collection Display Date";
	$fieldToolTipsEoc_nittsuu[""]["Collection_display_date"] = "";
	$placeHoldersEoc_nittsuu[""]["Collection_display_date"] = "";
	$fieldLabelsEoc_nittsuu[""]["Delivery_display_date"] = "Delivery Display Date";
	$fieldToolTipsEoc_nittsuu[""]["Delivery_display_date"] = "";
	$placeHoldersEoc_nittsuu[""]["Delivery_display_date"] = "";
	if (count($fieldToolTipsEoc_nittsuu[""]))
		$tdataEoc_nittsuu[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_nittsuu["English"] = array();
	$fieldToolTipsEoc_nittsuu["English"] = array();
	$placeHoldersEoc_nittsuu["English"] = array();
	$pageTitlesEoc_nittsuu["English"] = array();
	$fieldLabelsEoc_nittsuu["English"]["Consignee_Address_1"] = "Consignee Address 1";
	$fieldToolTipsEoc_nittsuu["English"]["Consignee_Address_1"] = "";
	$placeHoldersEoc_nittsuu["English"]["Consignee_Address_1"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Consignee_Address_2"] = "Consignee Address 2";
	$fieldToolTipsEoc_nittsuu["English"]["Consignee_Address_2"] = "";
	$placeHoldersEoc_nittsuu["English"]["Consignee_Address_2"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Consignee_name_1"] = "Consignee Name 1";
	$fieldToolTipsEoc_nittsuu["English"]["Consignee_name_1"] = "";
	$placeHoldersEoc_nittsuu["English"]["Consignee_name_1"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Consignee_name_2"] = "Consignee Name 2";
	$fieldToolTipsEoc_nittsuu["English"]["Consignee_name_2"] = "";
	$placeHoldersEoc_nittsuu["English"]["Consignee_name_2"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Consignee_phone_number"] = "Consignee Phone Number";
	$fieldToolTipsEoc_nittsuu["English"]["Consignee_phone_number"] = "";
	$placeHoldersEoc_nittsuu["English"]["Consignee_phone_number"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Consignee_zip_code"] = "Consignee Zip Code";
	$fieldToolTipsEoc_nittsuu["English"]["Consignee_zip_code"] = "";
	$placeHoldersEoc_nittsuu["English"]["Consignee_zip_code"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Number"] = "Number";
	$fieldToolTipsEoc_nittsuu["English"]["Number"] = "";
	$placeHoldersEoc_nittsuu["English"]["Number"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Collection_date"] = "Collection Date";
	$fieldToolTipsEoc_nittsuu["English"]["Collection_date"] = "";
	$placeHoldersEoc_nittsuu["English"]["Collection_date"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Pickup_time_FROM"] = "Pickup Time FROM";
	$fieldToolTipsEoc_nittsuu["English"]["Pickup_time_FROM"] = "";
	$placeHoldersEoc_nittsuu["English"]["Pickup_time_FROM"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Pickup_time_TO"] = "Pickup Time TO";
	$fieldToolTipsEoc_nittsuu["English"]["Pickup_time_TO"] = "";
	$placeHoldersEoc_nittsuu["English"]["Pickup_time_TO"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Delivery_time_FROM"] = "Delivery Time FROM";
	$fieldToolTipsEoc_nittsuu["English"]["Delivery_time_FROM"] = "";
	$placeHoldersEoc_nittsuu["English"]["Delivery_time_FROM"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Name_1"] = "Name 1";
	$fieldToolTipsEoc_nittsuu["English"]["Name_1"] = "";
	$placeHoldersEoc_nittsuu["English"]["Name_1"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Declared_value"] = "Declared Value";
	$fieldToolTipsEoc_nittsuu["English"]["Declared_value"] = "";
	$placeHoldersEoc_nittsuu["English"]["Declared_value"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Delivery_date"] = "Delivery Date";
	$fieldToolTipsEoc_nittsuu["English"]["Delivery_date"] = "";
	$placeHoldersEoc_nittsuu["English"]["Delivery_date"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Delivery_time_TO"] = "Delivery Time TO";
	$fieldToolTipsEoc_nittsuu["English"]["Delivery_time_TO"] = "";
	$placeHoldersEoc_nittsuu["English"]["Delivery_time_TO"] = "";
	$fieldLabelsEoc_nittsuu["English"]["mst_refining_status_id"] = "Mst Refining Status Id";
	$fieldToolTipsEoc_nittsuu["English"]["mst_refining_status_id"] = "";
	$placeHoldersEoc_nittsuu["English"]["mst_refining_status_id"] = "";
	$fieldLabelsEoc_nittsuu["English"]["refining_id"] = "Refining Id";
	$fieldToolTipsEoc_nittsuu["English"]["refining_id"] = "";
	$placeHoldersEoc_nittsuu["English"]["refining_id"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Pickup_time_select"] = "Pickup Time Select";
	$fieldToolTipsEoc_nittsuu["English"]["Pickup_time_select"] = "";
	$placeHoldersEoc_nittsuu["English"]["Pickup_time_select"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Delivery_time_select"] = "Delivery Time Select";
	$fieldToolTipsEoc_nittsuu["English"]["Delivery_time_select"] = "";
	$placeHoldersEoc_nittsuu["English"]["Delivery_time_select"] = "";
	$fieldLabelsEoc_nittsuu["English"]["refining_weight"] = "Refining Weight";
	$fieldToolTipsEoc_nittsuu["English"]["refining_weight"] = "";
	$placeHoldersEoc_nittsuu["English"]["refining_weight"] = "";
	$fieldLabelsEoc_nittsuu["English"]["address2"] = "Address2";
	$fieldToolTipsEoc_nittsuu["English"]["address2"] = "";
	$placeHoldersEoc_nittsuu["English"]["address2"] = "";
	$fieldLabelsEoc_nittsuu["English"]["address_reserve"] = "Address Reserve";
	$fieldToolTipsEoc_nittsuu["English"]["address_reserve"] = "";
	$placeHoldersEoc_nittsuu["English"]["address_reserve"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Consignee_name_reserve"] = "Consignee Name Reserve";
	$fieldToolTipsEoc_nittsuu["English"]["Consignee_name_reserve"] = "";
	$placeHoldersEoc_nittsuu["English"]["Consignee_name_reserve"] = "";
	$fieldLabelsEoc_nittsuu["English"]["name_reserve"] = "Name Reserve";
	$fieldToolTipsEoc_nittsuu["English"]["name_reserve"] = "";
	$placeHoldersEoc_nittsuu["English"]["name_reserve"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Consignee_Address_3"] = "Consignee Address 3";
	$fieldToolTipsEoc_nittsuu["English"]["Consignee_Address_3"] = "";
	$placeHoldersEoc_nittsuu["English"]["Consignee_Address_3"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Consignee_Address_reserve"] = "Consignee Address Reserve";
	$fieldToolTipsEoc_nittsuu["English"]["Consignee_Address_reserve"] = "";
	$placeHoldersEoc_nittsuu["English"]["Consignee_Address_reserve"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Collection_display_date"] = "Collection Display Date";
	$fieldToolTipsEoc_nittsuu["English"]["Collection_display_date"] = "";
	$placeHoldersEoc_nittsuu["English"]["Collection_display_date"] = "";
	$fieldLabelsEoc_nittsuu["English"]["Delivery_display_date"] = "Delivery Display Date";
	$fieldToolTipsEoc_nittsuu["English"]["Delivery_display_date"] = "";
	$placeHoldersEoc_nittsuu["English"]["Delivery_display_date"] = "";
	if (count($fieldToolTipsEoc_nittsuu["English"]))
		$tdataEoc_nittsuu[".isUseToolTips"] = true;
}


	$tdataEoc_nittsuu[".NCSearch"] = true;



$tdataEoc_nittsuu[".shortTableName"] = "Eoc_nittsuu";
$tdataEoc_nittsuu[".nSecOptions"] = 0;
$tdataEoc_nittsuu[".recsPerRowPrint"] = 1;
$tdataEoc_nittsuu[".mainTableOwnerID"] = "";
$tdataEoc_nittsuu[".moveNext"] = 1;
$tdataEoc_nittsuu[".entityType"] = 1;

$tdataEoc_nittsuu[".strOriginalTableName"] = "Eoc";

	



$tdataEoc_nittsuu[".showAddInPopup"] = false;

$tdataEoc_nittsuu[".showEditInPopup"] = false;

$tdataEoc_nittsuu[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_nittsuu[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_nittsuu[".fieldsForRegister"] = array();

$tdataEoc_nittsuu[".listAjax"] = false;

	$tdataEoc_nittsuu[".audit"] = true;

	$tdataEoc_nittsuu[".locking"] = false;



$tdataEoc_nittsuu[".list"] = true;



$tdataEoc_nittsuu[".reorderRecordsByHeader"] = true;
$tdataEoc_nittsuu[".createSortByDropdown"] = true;
$tdataEoc_nittsuu[".strSortControlSettingsJSON"] = "";

$tdataEoc_nittsuu[".strClickActionJSON"] = "{\"fields\":{\"ALLSEIYAKU\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_COURIER_CHECK\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_NUMBER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_REUSE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_SIZE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_SPECIFIED_TIME\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC__BOX_NUMBER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC__DATE_AND_TIME_2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC__DELIVERY_DATES\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FIRST_NAME2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FIRST_NAME_KANA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FLAG_SPEED\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FLG_MAIL_OTHER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"FLG_MAIL_SAGAWA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ICHIBUSEIYAKU\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"LAST_NAME2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"LAST_NAME_KANA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SEARCH_MEDIA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"SEARCH_SITE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"UN_REACHABLE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"_registerd_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address3\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"address_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"age\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"awazu_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"b1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"b2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"b3\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_account\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_acoount_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_blunch_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"bank_yokin_shubetu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"birth_day\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"chigin_kaitori\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"created_t\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ecc_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ecc_seq\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"eoc_search_keyword\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"fax\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"haisou_bangou\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hentou_houhou\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hentou_houhou_time\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"hituyou_shorui\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"insurance_amount_print\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"jis_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"kaitori_staff_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"kaitorihuka\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"liquidation_shop_code\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"m_tel\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mail1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mail2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mail_check_type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mitumori_taku\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"mousikomi_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"name1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"name2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option10\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option11\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option12\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option13\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option3\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option4\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option5\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option6\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option7\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option8\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"option9\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"purchase_type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"rakuda_csv_flag\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"registerd_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"remark\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sagawa_shuuka_flag\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sales_flag\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seacanse\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seiyaku_fuseiritu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seiyaku_price\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"seiyakukin\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sex\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sise_houhou\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"size_kosuu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"sonota\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"src_type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"tel\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"tel2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"type\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"updated_at\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"wareki\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"zip\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"zip1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"zip2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"inlineedit\",\"table\":\"Eoc_chigins\"},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":\"Eoc_chigins\",\"url\":\"\"}}}";




$tdataEoc_nittsuu[".exportTo"] = true;



$tdataEoc_nittsuu[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_nittsuu[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_nittsuu[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_nittsuu[".searchSaving"] = false;
//

$tdataEoc_nittsuu[".showSearchPanel"] = true;
		$tdataEoc_nittsuu[".flexibleSearch"] = true;

$tdataEoc_nittsuu[".isUseAjaxSuggest"] = true;

$tdataEoc_nittsuu[".rowHighlite"] = true;



																																																																																																																																																																														
					
					
					
					
					
																																															

$tdataEoc_nittsuu[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_nittsuu[".buttonsAdded"] = true;

$tdataEoc_nittsuu[".addPageEvents"] = true;

// use timepicker for search panel
$tdataEoc_nittsuu[".isUseTimeForSearch"] = false;



$tdataEoc_nittsuu[".badgeColor"] = "4682B4";

$tdataEoc_nittsuu[".detailsLinksOnList"] = "2";

$tdataEoc_nittsuu[".allSearchFields"] = array();
$tdataEoc_nittsuu[".filterFields"] = array();
$tdataEoc_nittsuu[".requiredSearchFields"] = array();

$tdataEoc_nittsuu[".allSearchFields"][] = "name_reserve";
	$tdataEoc_nittsuu[".allSearchFields"][] = "address2";
	$tdataEoc_nittsuu[".allSearchFields"][] = "address_reserve";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Consignee_name_reserve";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Consignee_Address_3";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Consignee_Address_reserve";
	$tdataEoc_nittsuu[".allSearchFields"][] = "mst_refining_status_id";
	$tdataEoc_nittsuu[".allSearchFields"][] = "refining_id";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Pickup_time_select";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Delivery_time_select";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Delivery_date";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Delivery_time_TO";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Consignee_Address_1";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Consignee_Address_2";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Consignee_name_1";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Consignee_name_2";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Consignee_phone_number";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Consignee_zip_code";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Number";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Collection_date";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Pickup_time_FROM";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Pickup_time_TO";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Delivery_time_FROM";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Name_1";
	$tdataEoc_nittsuu[".allSearchFields"][] = "Declared_value";
	$tdataEoc_nittsuu[".allSearchFields"][] = "ecc_id";
	$tdataEoc_nittsuu[".allSearchFields"][] = "name1";
	$tdataEoc_nittsuu[".allSearchFields"][] = "name2";
	$tdataEoc_nittsuu[".allSearchFields"][] = "tel";
	$tdataEoc_nittsuu[".allSearchFields"][] = "tel2";
	$tdataEoc_nittsuu[".allSearchFields"][] = "zip1";
	$tdataEoc_nittsuu[".allSearchFields"][] = "address1";
	$tdataEoc_nittsuu[".allSearchFields"][] = "address3";
	

$tdataEoc_nittsuu[".googleLikeFields"] = array();
$tdataEoc_nittsuu[".googleLikeFields"][] = "ecc_id";
$tdataEoc_nittsuu[".googleLikeFields"][] = "name_reserve";
$tdataEoc_nittsuu[".googleLikeFields"][] = "address2";
$tdataEoc_nittsuu[".googleLikeFields"][] = "address_reserve";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Consignee_Address_1";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Consignee_Address_2";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Consignee_Address_3";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Consignee_Address_reserve";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Consignee_name_1";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Consignee_name_2";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Consignee_name_reserve";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Consignee_phone_number";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Consignee_zip_code";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Number";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Collection_date";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Collection_display_date";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Pickup_time_FROM";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Pickup_time_TO";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Delivery_date";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Delivery_display_date";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Delivery_time_FROM";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Delivery_time_TO";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Name_1";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Declared_value";
$tdataEoc_nittsuu[".googleLikeFields"][] = "mst_refining_status_id";
$tdataEoc_nittsuu[".googleLikeFields"][] = "refining_id";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Pickup_time_select";
$tdataEoc_nittsuu[".googleLikeFields"][] = "Delivery_time_select";
$tdataEoc_nittsuu[".googleLikeFields"][] = "refining_weight";

$tdataEoc_nittsuu[".panelSearchFields"] = array();
$tdataEoc_nittsuu[".searchPanelOptions"] = array();
$tdataEoc_nittsuu[".panelSearchFields"][] = "ecc_id";
	$tdataEoc_nittsuu[".panelSearchFields"][] = "name1";
	$tdataEoc_nittsuu[".panelSearchFields"][] = "name2";
	$tdataEoc_nittsuu[".panelSearchFields"][] = "tel";
	$tdataEoc_nittsuu[".panelSearchFields"][] = "tel2";
	$tdataEoc_nittsuu[".panelSearchFields"][] = "address1";
	$tdataEoc_nittsuu[".panelSearchFields"][] = "address3";
	
$tdataEoc_nittsuu[".advSearchFields"] = array();
$tdataEoc_nittsuu[".advSearchFields"][] = "name_reserve";
$tdataEoc_nittsuu[".advSearchFields"][] = "address2";
$tdataEoc_nittsuu[".advSearchFields"][] = "address_reserve";
$tdataEoc_nittsuu[".advSearchFields"][] = "Consignee_name_reserve";
$tdataEoc_nittsuu[".advSearchFields"][] = "Consignee_Address_3";
$tdataEoc_nittsuu[".advSearchFields"][] = "Consignee_Address_reserve";
$tdataEoc_nittsuu[".advSearchFields"][] = "mst_refining_status_id";
$tdataEoc_nittsuu[".advSearchFields"][] = "refining_id";
$tdataEoc_nittsuu[".advSearchFields"][] = "Pickup_time_select";
$tdataEoc_nittsuu[".advSearchFields"][] = "Delivery_time_select";
$tdataEoc_nittsuu[".advSearchFields"][] = "Delivery_date";
$tdataEoc_nittsuu[".advSearchFields"][] = "Delivery_time_TO";
$tdataEoc_nittsuu[".advSearchFields"][] = "Consignee_Address_1";
$tdataEoc_nittsuu[".advSearchFields"][] = "Consignee_Address_2";
$tdataEoc_nittsuu[".advSearchFields"][] = "Consignee_name_1";
$tdataEoc_nittsuu[".advSearchFields"][] = "Consignee_name_2";
$tdataEoc_nittsuu[".advSearchFields"][] = "Consignee_phone_number";
$tdataEoc_nittsuu[".advSearchFields"][] = "Consignee_zip_code";
$tdataEoc_nittsuu[".advSearchFields"][] = "Number";
$tdataEoc_nittsuu[".advSearchFields"][] = "Collection_date";
$tdataEoc_nittsuu[".advSearchFields"][] = "Pickup_time_FROM";
$tdataEoc_nittsuu[".advSearchFields"][] = "Pickup_time_TO";
$tdataEoc_nittsuu[".advSearchFields"][] = "Delivery_time_FROM";
$tdataEoc_nittsuu[".advSearchFields"][] = "Name_1";
$tdataEoc_nittsuu[".advSearchFields"][] = "Declared_value";
$tdataEoc_nittsuu[".advSearchFields"][] = "ecc_id";
$tdataEoc_nittsuu[".advSearchFields"][] = "name1";
$tdataEoc_nittsuu[".advSearchFields"][] = "name2";
$tdataEoc_nittsuu[".advSearchFields"][] = "tel";
$tdataEoc_nittsuu[".advSearchFields"][] = "tel2";
$tdataEoc_nittsuu[".advSearchFields"][] = "zip1";
$tdataEoc_nittsuu[".advSearchFields"][] = "address1";
$tdataEoc_nittsuu[".advSearchFields"][] = "address3";

$tdataEoc_nittsuu[".tableType"] = "list";

$tdataEoc_nittsuu[".printerPageOrientation"] = 0;
$tdataEoc_nittsuu[".nPrinterPageScale"] = 100;

$tdataEoc_nittsuu[".nPrinterSplitRecords"] = 40;

$tdataEoc_nittsuu[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_nittsuu[".geocodingEnabled"] = false;





$tdataEoc_nittsuu[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_nittsuu[".pageSize"] = 20;

$tdataEoc_nittsuu[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Eoc`.`ecc_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_nittsuu[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_nittsuu[".orderindexes"] = array();
$tdataEoc_nittsuu[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`Eoc`.`ecc_id`");

$tdataEoc_nittsuu[".sqlHead"] = "SELECT `Eoc`.`ecc_id`,  `Eoc`.`name1`,  `Eoc`.`name2`,  \"\" AS `name_reserve`,  CONCAT(`zip1`, '-', `zip2`) AS `zip1`,  `Eoc`.`address1`,  `Eoc`.`address2`,  `Eoc`.`address3`,  \"\" AS `address_reserve`,  `Eoc`.`tel`,  `Eoc`.`tel2`,  \"\" AS `Consignee_Address_1`,  \"\" AS `Consignee_Address_2`,  \"\" AS `Consignee_Address_3`,  \"\" AS `Consignee_Address_reserve`,  \"\" AS `Consignee_name_1`,  \"\" AS `Consignee_name_2`,  \"\" AS `Consignee_name_reserve`,  \"\" AS `Consignee_phone_number`,  \"\" AS `Consignee_zip_code`,  \"1\" AS `Number`,  `Eoc_refining`.`Collection_date` AS `Collection_date`,  \"\" AS `Collection_display_date`,  \"\" AS `Pickup_time_FROM`,  \"\" AS `Pickup_time_TO`,  `Eoc_refining`.`Delivery_date` AS `Delivery_date`,  \"\" AS `Delivery_display_date`,  \"\" AS `Delivery_time_FROM`,  \"\" AS `Delivery_time_TO`,  \"地金\" AS `Name_1`,  \"\" AS `Declared_value`,  `Eoc_refining`.`mst_refining_status_id`,  `Eoc_refining`.`id` AS `refining_id`,  `Eoc_refining`.`Pickup_time_select`,  `Eoc_refining`.`Delivery_time_select`,  \"\" AS `refining_weight`";
$tdataEoc_nittsuu[".sqlFrom"] = "FROM `Eoc`  LEFT OUTER JOIN `Eoc_refining` ON `Eoc`.`ecc_id` = `Eoc_refining`.`ecc_id`";
$tdataEoc_nittsuu[".sqlWhereExpr"] = "(`Eoc_refining`.`mst_refining_status_id` =1 OR `Eoc_refining`.`mst_refining_status_id` =5)";
$tdataEoc_nittsuu[".sqlTail"] = "";

//fill array of tabs for edit page
$arrEditTabs = array();
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'New_section1',
					   'tabName'=>"フラグ 集荷関連 登録日 ",
					   'nType'=>'1',
					   'nOrder'=>1,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'2',
					   'tabName'=>"メール DM 返答方法 宅配チェック",
					   'nType'=>'1',
					   'nOrder'=>41,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
	$tabFields = array();
	
$arrEditTabs[] = array('tabId'=>'3',
					   'tabName'=>"金融機関情報",
					   'nType'=>'1',
					   'nOrder'=>62,
					   'tabGroup'=>0,
					   'arrFields'=> $tabFields,
					   'expandSec'=>1);
$tdataEoc_nittsuu[".arrEditTabs"] = $arrEditTabs;



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
$tdataEoc_nittsuu[".arrViewTabs"] = $arrViewTabs;







//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_nittsuu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_nittsuu[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_nittsuu[".highlightSearchResults"] = true;

$tableKeysEoc_nittsuu = array();
$tableKeysEoc_nittsuu[] = "ecc_id";
$tdataEoc_nittsuu[".Keys"] = $tableKeysEoc_nittsuu;

$tdataEoc_nittsuu[".listFields"] = array();
$tdataEoc_nittsuu[".listFields"][] = "Collection_date";
$tdataEoc_nittsuu[".listFields"][] = "Delivery_date";
$tdataEoc_nittsuu[".listFields"][] = "refining_id";
$tdataEoc_nittsuu[".listFields"][] = "mst_refining_status_id";
$tdataEoc_nittsuu[".listFields"][] = "ecc_id";
$tdataEoc_nittsuu[".listFields"][] = "name1";
$tdataEoc_nittsuu[".listFields"][] = "name2";
$tdataEoc_nittsuu[".listFields"][] = "address1";
$tdataEoc_nittsuu[".listFields"][] = "address2";
$tdataEoc_nittsuu[".listFields"][] = "address3";
$tdataEoc_nittsuu[".listFields"][] = "tel2";
$tdataEoc_nittsuu[".listFields"][] = "zip1";
$tdataEoc_nittsuu[".listFields"][] = "Pickup_time_select";
$tdataEoc_nittsuu[".listFields"][] = "Delivery_time_select";

$tdataEoc_nittsuu[".hideMobileList"] = array();


$tdataEoc_nittsuu[".viewFields"] = array();

$tdataEoc_nittsuu[".addFields"] = array();

$tdataEoc_nittsuu[".masterListFields"] = array();
$tdataEoc_nittsuu[".masterListFields"][] = "name_reserve";
$tdataEoc_nittsuu[".masterListFields"][] = "address2";
$tdataEoc_nittsuu[".masterListFields"][] = "address_reserve";
$tdataEoc_nittsuu[".masterListFields"][] = "Consignee_Address_1";
$tdataEoc_nittsuu[".masterListFields"][] = "Consignee_Address_2";
$tdataEoc_nittsuu[".masterListFields"][] = "Consignee_Address_3";
$tdataEoc_nittsuu[".masterListFields"][] = "Consignee_Address_reserve";
$tdataEoc_nittsuu[".masterListFields"][] = "Consignee_name_1";
$tdataEoc_nittsuu[".masterListFields"][] = "Consignee_name_2";
$tdataEoc_nittsuu[".masterListFields"][] = "Consignee_name_reserve";
$tdataEoc_nittsuu[".masterListFields"][] = "Consignee_phone_number";
$tdataEoc_nittsuu[".masterListFields"][] = "Consignee_zip_code";
$tdataEoc_nittsuu[".masterListFields"][] = "Number";
$tdataEoc_nittsuu[".masterListFields"][] = "Collection_date";
$tdataEoc_nittsuu[".masterListFields"][] = "Collection_display_date";
$tdataEoc_nittsuu[".masterListFields"][] = "Pickup_time_FROM";
$tdataEoc_nittsuu[".masterListFields"][] = "Pickup_time_TO";
$tdataEoc_nittsuu[".masterListFields"][] = "Delivery_date";
$tdataEoc_nittsuu[".masterListFields"][] = "Delivery_display_date";
$tdataEoc_nittsuu[".masterListFields"][] = "Delivery_time_FROM";
$tdataEoc_nittsuu[".masterListFields"][] = "Delivery_time_TO";
$tdataEoc_nittsuu[".masterListFields"][] = "Name_1";
$tdataEoc_nittsuu[".masterListFields"][] = "Declared_value";
$tdataEoc_nittsuu[".masterListFields"][] = "mst_refining_status_id";
$tdataEoc_nittsuu[".masterListFields"][] = "refining_id";
$tdataEoc_nittsuu[".masterListFields"][] = "Pickup_time_select";
$tdataEoc_nittsuu[".masterListFields"][] = "Delivery_time_select";
$tdataEoc_nittsuu[".masterListFields"][] = "refining_weight";
$tdataEoc_nittsuu[".masterListFields"][] = "ecc_id";
$tdataEoc_nittsuu[".masterListFields"][] = "name1";
$tdataEoc_nittsuu[".masterListFields"][] = "name2";
$tdataEoc_nittsuu[".masterListFields"][] = "tel";
$tdataEoc_nittsuu[".masterListFields"][] = "tel2";
$tdataEoc_nittsuu[".masterListFields"][] = "zip1";
$tdataEoc_nittsuu[".masterListFields"][] = "address1";
$tdataEoc_nittsuu[".masterListFields"][] = "address3";

$tdataEoc_nittsuu[".inlineAddFields"] = array();

$tdataEoc_nittsuu[".editFields"] = array();

$tdataEoc_nittsuu[".inlineEditFields"] = array();

$tdataEoc_nittsuu[".updateSelectedFields"] = array();


$tdataEoc_nittsuu[".exportFields"] = array();
$tdataEoc_nittsuu[".exportFields"][] = "address1";
$tdataEoc_nittsuu[".exportFields"][] = "address2";
$tdataEoc_nittsuu[".exportFields"][] = "address3";
$tdataEoc_nittsuu[".exportFields"][] = "address_reserve";
$tdataEoc_nittsuu[".exportFields"][] = "zip1";
$tdataEoc_nittsuu[".exportFields"][] = "name1";
$tdataEoc_nittsuu[".exportFields"][] = "name2";
$tdataEoc_nittsuu[".exportFields"][] = "name_reserve";
$tdataEoc_nittsuu[".exportFields"][] = "tel2";
$tdataEoc_nittsuu[".exportFields"][] = "Collection_display_date";
$tdataEoc_nittsuu[".exportFields"][] = "Pickup_time_FROM";
$tdataEoc_nittsuu[".exportFields"][] = "Pickup_time_TO";
$tdataEoc_nittsuu[".exportFields"][] = "Consignee_Address_1";
$tdataEoc_nittsuu[".exportFields"][] = "Consignee_Address_2";
$tdataEoc_nittsuu[".exportFields"][] = "Consignee_Address_3";
$tdataEoc_nittsuu[".exportFields"][] = "Consignee_Address_reserve";
$tdataEoc_nittsuu[".exportFields"][] = "Consignee_zip_code";
$tdataEoc_nittsuu[".exportFields"][] = "Consignee_name_1";
$tdataEoc_nittsuu[".exportFields"][] = "Consignee_name_2";
$tdataEoc_nittsuu[".exportFields"][] = "Consignee_name_reserve";
$tdataEoc_nittsuu[".exportFields"][] = "Consignee_phone_number";
$tdataEoc_nittsuu[".exportFields"][] = "Delivery_display_date";
$tdataEoc_nittsuu[".exportFields"][] = "Delivery_time_FROM";
$tdataEoc_nittsuu[".exportFields"][] = "Delivery_time_TO";
$tdataEoc_nittsuu[".exportFields"][] = "Number";
$tdataEoc_nittsuu[".exportFields"][] = "refining_weight";
$tdataEoc_nittsuu[".exportFields"][] = "Name_1";
$tdataEoc_nittsuu[".exportFields"][] = "Declared_value";

$tdataEoc_nittsuu[".importFields"] = array();

$tdataEoc_nittsuu[".printFields"] = array();

//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","ecc_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`ecc_id`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_nittsuu["ecc_id"] = $fdata;
//	name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name1";
	$fdata["GoodName"] = "name1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","name1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdataEoc_nittsuu["name1"] = $fdata;
//	name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name2";
	$fdata["GoodName"] = "name2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","name2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdataEoc_nittsuu["name2"] = $fdata;
//	name_reserve
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name_reserve";
	$fdata["GoodName"] = "name_reserve";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","name_reserve");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name_reserve";

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




	$tdataEoc_nittsuu["name_reserve"] = $fdata;
//	zip1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "zip1";
	$fdata["GoodName"] = "zip1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","zip1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zip1";

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




	$tdataEoc_nittsuu["zip1"] = $fdata;
//	address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "address1";
	$fdata["GoodName"] = "address1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","address1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`address1`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_nittsuu["address1"] = $fdata;
//	address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "address2";
	$fdata["GoodName"] = "address2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","address2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`address2`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_nittsuu["address2"] = $fdata;
//	address3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "address3";
	$fdata["GoodName"] = "address3";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","address3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`address3`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_nittsuu["address3"] = $fdata;
//	address_reserve
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "address_reserve";
	$fdata["GoodName"] = "address_reserve";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","address_reserve");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "address_reserve";

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




	$tdataEoc_nittsuu["address_reserve"] = $fdata;
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","tel");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "tel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`tel`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_nittsuu["tel"] = $fdata;
//	tel2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tel2";
	$fdata["GoodName"] = "tel2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","tel2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tel2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`tel2`";

	
	
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




	$tdataEoc_nittsuu["tel2"] = $fdata;
//	Consignee_Address_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Consignee_Address_1";
	$fdata["GoodName"] = "Consignee_Address_1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Consignee_Address_1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Consignee_Address_1";

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




	$tdataEoc_nittsuu["Consignee_Address_1"] = $fdata;
//	Consignee_Address_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Consignee_Address_2";
	$fdata["GoodName"] = "Consignee_Address_2";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Consignee_Address_2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Consignee_Address_2";

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




	$tdataEoc_nittsuu["Consignee_Address_2"] = $fdata;
//	Consignee_Address_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Consignee_Address_3";
	$fdata["GoodName"] = "Consignee_Address_3";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Consignee_Address_3");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Consignee_Address_3";

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




	$tdataEoc_nittsuu["Consignee_Address_3"] = $fdata;
//	Consignee_Address_reserve
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Consignee_Address_reserve";
	$fdata["GoodName"] = "Consignee_Address_reserve";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Consignee_Address_reserve");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Consignee_Address_reserve";

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




	$tdataEoc_nittsuu["Consignee_Address_reserve"] = $fdata;
//	Consignee_name_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Consignee_name_1";
	$fdata["GoodName"] = "Consignee_name_1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Consignee_name_1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Consignee_name_1";

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




	$tdataEoc_nittsuu["Consignee_name_1"] = $fdata;
//	Consignee_name_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Consignee_name_2";
	$fdata["GoodName"] = "Consignee_name_2";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Consignee_name_2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Consignee_name_2";

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




	$tdataEoc_nittsuu["Consignee_name_2"] = $fdata;
//	Consignee_name_reserve
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Consignee_name_reserve";
	$fdata["GoodName"] = "Consignee_name_reserve";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Consignee_name_reserve");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Consignee_name_reserve";

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




	$tdataEoc_nittsuu["Consignee_name_reserve"] = $fdata;
//	Consignee_phone_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Consignee_phone_number";
	$fdata["GoodName"] = "Consignee_phone_number";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Consignee_phone_number");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Consignee_phone_number";

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




	$tdataEoc_nittsuu["Consignee_phone_number"] = $fdata;
//	Consignee_zip_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Consignee_zip_code";
	$fdata["GoodName"] = "Consignee_zip_code";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Consignee_zip_code");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Consignee_zip_code";

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




	$tdataEoc_nittsuu["Consignee_zip_code"] = $fdata;
//	Number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Number";
	$fdata["GoodName"] = "Number";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Number");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"1\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_nittsuu["Number"] = $fdata;
//	Collection_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Collection_date";
	$fdata["GoodName"] = "Collection_date";
	$fdata["ownerTable"] = "Eoc_refining";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Collection_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Collection_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_refining`.`Collection_date`";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_nittsuu["Collection_date"] = $fdata;
//	Collection_display_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Collection_display_date";
	$fdata["GoodName"] = "Collection_display_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Collection_display_date");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Collection_display_date";

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








	$tdataEoc_nittsuu["Collection_display_date"] = $fdata;
//	Pickup_time_FROM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Pickup_time_FROM";
	$fdata["GoodName"] = "Pickup_time_FROM";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Pickup_time_FROM");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Pickup_time_FROM";

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




	$tdataEoc_nittsuu["Pickup_time_FROM"] = $fdata;
//	Pickup_time_TO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Pickup_time_TO";
	$fdata["GoodName"] = "Pickup_time_TO";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Pickup_time_TO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Pickup_time_TO";

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




	$tdataEoc_nittsuu["Pickup_time_TO"] = $fdata;
//	Delivery_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Delivery_date";
	$fdata["GoodName"] = "Delivery_date";
	$fdata["ownerTable"] = "Eoc_refining";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Delivery_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Delivery_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_refining`.`Delivery_date`";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_nittsuu["Delivery_date"] = $fdata;
//	Delivery_display_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Delivery_display_date";
	$fdata["GoodName"] = "Delivery_display_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Delivery_display_date");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Delivery_display_date";

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








	$tdataEoc_nittsuu["Delivery_display_date"] = $fdata;
//	Delivery_time_FROM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Delivery_time_FROM";
	$fdata["GoodName"] = "Delivery_time_FROM";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Delivery_time_FROM");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Delivery_time_FROM";

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




	$tdataEoc_nittsuu["Delivery_time_FROM"] = $fdata;
//	Delivery_time_TO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Delivery_time_TO";
	$fdata["GoodName"] = "Delivery_time_TO";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Delivery_time_TO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Delivery_time_TO";

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




	$tdataEoc_nittsuu["Delivery_time_TO"] = $fdata;
//	Name_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Name_1";
	$fdata["GoodName"] = "Name_1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Name_1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Name_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"地金\"";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_nittsuu["Name_1"] = $fdata;
//	Declared_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Declared_value";
	$fdata["GoodName"] = "Declared_value";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Declared_value");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Declared_value";

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




	$tdataEoc_nittsuu["Declared_value"] = $fdata;
//	mst_refining_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "mst_refining_status_id";
	$fdata["GoodName"] = "mst_refining_status_id";
	$fdata["ownerTable"] = "Eoc_refining";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","mst_refining_status_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "mst_refining_status_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_refining`.`mst_refining_status_id`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_refining_status";
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




	$tdataEoc_nittsuu["mst_refining_status_id"] = $fdata;
//	refining_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "refining_id";
	$fdata["GoodName"] = "refining_id";
	$fdata["ownerTable"] = "Eoc_refining";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","refining_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_refining`.`id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdataEoc_nittsuu["refining_id"] = $fdata;
//	Pickup_time_select
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Pickup_time_select";
	$fdata["GoodName"] = "Pickup_time_select";
	$fdata["ownerTable"] = "Eoc_refining";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Pickup_time_select");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Pickup_time_select";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_refining`.`Pickup_time_select`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_nittsuu["Pickup_time_select"] = $fdata;
//	Delivery_time_select
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Delivery_time_select";
	$fdata["GoodName"] = "Delivery_time_select";
	$fdata["ownerTable"] = "Eoc_refining";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","Delivery_time_select");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Delivery_time_select";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_refining`.`Delivery_time_select`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_nittsuu["Delivery_time_select"] = $fdata;
//	refining_weight
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "refining_weight";
	$fdata["GoodName"] = "refining_weight";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_nittsuu","refining_weight");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "refining_weight";

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
			$edata["EditParams"].= " maxlength=11";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataEoc_nittsuu["refining_weight"] = $fdata;


$tables_data["Eoc_nittsuu"]=&$tdataEoc_nittsuu;
$field_labels["Eoc_nittsuu"] = &$fieldLabelsEoc_nittsuu;
$fieldToolTips["Eoc_nittsuu"] = &$fieldToolTipsEoc_nittsuu;
$placeHolders["Eoc_nittsuu"] = &$placeHoldersEoc_nittsuu;
$page_titles["Eoc_nittsuu"] = &$pageTitlesEoc_nittsuu;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_nittsuu"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_nittsuu"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_nittsuu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Eoc`.`ecc_id`,  `Eoc`.`name1`,  `Eoc`.`name2`,  \"\" AS `name_reserve`,  CONCAT(`zip1`, '-', `zip2`) AS `zip1`,  `Eoc`.`address1`,  `Eoc`.`address2`,  `Eoc`.`address3`,  \"\" AS `address_reserve`,  `Eoc`.`tel`,  `Eoc`.`tel2`,  \"\" AS `Consignee_Address_1`,  \"\" AS `Consignee_Address_2`,  \"\" AS `Consignee_Address_3`,  \"\" AS `Consignee_Address_reserve`,  \"\" AS `Consignee_name_1`,  \"\" AS `Consignee_name_2`,  \"\" AS `Consignee_name_reserve`,  \"\" AS `Consignee_phone_number`,  \"\" AS `Consignee_zip_code`,  \"1\" AS `Number`,  `Eoc_refining`.`Collection_date` AS `Collection_date`,  \"\" AS `Collection_display_date`,  \"\" AS `Pickup_time_FROM`,  \"\" AS `Pickup_time_TO`,  `Eoc_refining`.`Delivery_date` AS `Delivery_date`,  \"\" AS `Delivery_display_date`,  \"\" AS `Delivery_time_FROM`,  \"\" AS `Delivery_time_TO`,  \"地金\" AS `Name_1`,  \"\" AS `Declared_value`,  `Eoc_refining`.`mst_refining_status_id`,  `Eoc_refining`.`id` AS `refining_id`,  `Eoc_refining`.`Pickup_time_select`,  `Eoc_refining`.`Delivery_time_select`,  \"\" AS `refining_weight`";
$proto0["m_strFrom"] = "FROM `Eoc`  LEFT OUTER JOIN `Eoc_refining` ON `Eoc`.`ecc_id` = `Eoc_refining`.`ecc_id`";
$proto0["m_strWhere"] = "(`Eoc_refining`.`mst_refining_status_id` =1 OR `Eoc_refining`.`mst_refining_status_id` =5)";
$proto0["m_strOrderBy"] = "ORDER BY `Eoc`.`ecc_id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "`Eoc_refining`.`mst_refining_status_id` =1 OR `Eoc_refining`.`mst_refining_status_id` =5";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`Eoc_refining`.`mst_refining_status_id` =1 OR `Eoc_refining`.`mst_refining_status_id` =5"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`Eoc_refining`.`mst_refining_status_id` =1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "mst_refining_status_id",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=1";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "`Eoc_refining`.`mst_refining_status_id` =5";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "mst_refining_status_id",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=5";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto10["m_sql"] = "`Eoc`.`ecc_id`";
$proto10["m_srcTableName"] = "Eoc_nittsuu";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "name1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto12["m_sql"] = "`Eoc`.`name1`";
$proto12["m_srcTableName"] = "Eoc_nittsuu";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto14["m_sql"] = "`Eoc`.`name2`";
$proto14["m_srcTableName"] = "Eoc_nittsuu";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto16["m_sql"] = "\"\"";
$proto16["m_srcTableName"] = "Eoc_nittsuu";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "name_reserve";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$proto19=array();
$proto19["m_functiontype"] = "SQLF_CUSTOM";
$proto19["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`zip1`"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'-'"
));

$proto19["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "`zip2`"
));

$proto19["m_arguments"][]=$obj;
$proto19["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto19);

$proto18["m_sql"] = "CONCAT(`zip1`, '-', `zip2`)";
$proto18["m_srcTableName"] = "Eoc_nittsuu";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "zip1";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "address1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto23["m_sql"] = "`Eoc`.`address1`";
$proto23["m_srcTableName"] = "Eoc_nittsuu";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "address2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto25["m_sql"] = "`Eoc`.`address2`";
$proto25["m_srcTableName"] = "Eoc_nittsuu";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "address3",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto27["m_sql"] = "`Eoc`.`address3`";
$proto27["m_srcTableName"] = "Eoc_nittsuu";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto29["m_sql"] = "\"\"";
$proto29["m_srcTableName"] = "Eoc_nittsuu";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "address_reserve";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto31["m_sql"] = "`Eoc`.`tel`";
$proto31["m_srcTableName"] = "Eoc_nittsuu";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "tel2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto33["m_sql"] = "`Eoc`.`tel2`";
$proto33["m_srcTableName"] = "Eoc_nittsuu";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto35["m_sql"] = "\"\"";
$proto35["m_srcTableName"] = "Eoc_nittsuu";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "Consignee_Address_1";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto37["m_sql"] = "\"\"";
$proto37["m_srcTableName"] = "Eoc_nittsuu";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "Consignee_Address_2";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto39["m_sql"] = "\"\"";
$proto39["m_srcTableName"] = "Eoc_nittsuu";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "Consignee_Address_3";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto41["m_sql"] = "\"\"";
$proto41["m_srcTableName"] = "Eoc_nittsuu";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "Consignee_Address_reserve";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto43["m_sql"] = "\"\"";
$proto43["m_srcTableName"] = "Eoc_nittsuu";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "Consignee_name_1";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto45["m_sql"] = "\"\"";
$proto45["m_srcTableName"] = "Eoc_nittsuu";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "Consignee_name_2";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto47["m_sql"] = "\"\"";
$proto47["m_srcTableName"] = "Eoc_nittsuu";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "Consignee_name_reserve";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto49["m_sql"] = "\"\"";
$proto49["m_srcTableName"] = "Eoc_nittsuu";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "Consignee_phone_number";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto51["m_sql"] = "\"\"";
$proto51["m_srcTableName"] = "Eoc_nittsuu";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "Consignee_zip_code";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"1\""
));

$proto53["m_sql"] = "\"1\"";
$proto53["m_srcTableName"] = "Eoc_nittsuu";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "Number";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "Collection_date",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto55["m_sql"] = "`Eoc_refining`.`Collection_date`";
$proto55["m_srcTableName"] = "Eoc_nittsuu";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "Collection_date";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto57["m_sql"] = "\"\"";
$proto57["m_srcTableName"] = "Eoc_nittsuu";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "Collection_display_date";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto59["m_sql"] = "\"\"";
$proto59["m_srcTableName"] = "Eoc_nittsuu";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "Pickup_time_FROM";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto61["m_sql"] = "\"\"";
$proto61["m_srcTableName"] = "Eoc_nittsuu";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "Pickup_time_TO";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "Delivery_date",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto63["m_sql"] = "`Eoc_refining`.`Delivery_date`";
$proto63["m_srcTableName"] = "Eoc_nittsuu";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "Delivery_date";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto65["m_sql"] = "\"\"";
$proto65["m_srcTableName"] = "Eoc_nittsuu";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "Delivery_display_date";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto67["m_sql"] = "\"\"";
$proto67["m_srcTableName"] = "Eoc_nittsuu";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "Delivery_time_FROM";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto69["m_sql"] = "\"\"";
$proto69["m_srcTableName"] = "Eoc_nittsuu";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "Delivery_time_TO";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"地金\""
));

$proto71["m_sql"] = "\"地金\"";
$proto71["m_srcTableName"] = "Eoc_nittsuu";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "Name_1";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto73["m_sql"] = "\"\"";
$proto73["m_srcTableName"] = "Eoc_nittsuu";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "Declared_value";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "mst_refining_status_id",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto75["m_sql"] = "`Eoc_refining`.`mst_refining_status_id`";
$proto75["m_srcTableName"] = "Eoc_nittsuu";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto77["m_sql"] = "`Eoc_refining`.`id`";
$proto77["m_srcTableName"] = "Eoc_nittsuu";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "refining_id";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "Pickup_time_select",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto79["m_sql"] = "`Eoc_refining`.`Pickup_time_select`";
$proto79["m_srcTableName"] = "Eoc_nittsuu";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "Delivery_time_select",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto81["m_sql"] = "`Eoc_refining`.`Delivery_time_select`";
$proto81["m_srcTableName"] = "Eoc_nittsuu";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "\"\""
));

$proto83["m_sql"] = "\"\"";
$proto83["m_srcTableName"] = "Eoc_nittsuu";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "refining_weight";
$obj = new SQLFieldListItem($proto83);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto85=array();
$proto85["m_link"] = "SQLL_MAIN";
			$proto86=array();
$proto86["m_strName"] = "Eoc";
$proto86["m_srcTableName"] = "Eoc_nittsuu";
$proto86["m_columns"] = array();
$proto86["m_columns"][] = "ecc_id";
$proto86["m_columns"][] = "ecc_seq";
$proto86["m_columns"][] = "name1";
$proto86["m_columns"][] = "created_t";
$proto86["m_columns"][] = "registerd_id";
$proto86["m_columns"][] = "kaitori_staff_id";
$proto86["m_columns"][] = "name2";
$proto86["m_columns"][] = "wareki";
$proto86["m_columns"][] = "b1";
$proto86["m_columns"][] = "b2";
$proto86["m_columns"][] = "b3";
$proto86["m_columns"][] = "birth_day";
$proto86["m_columns"][] = "age";
$proto86["m_columns"][] = "zip";
$proto86["m_columns"][] = "zip1";
$proto86["m_columns"][] = "zip2";
$proto86["m_columns"][] = "address1";
$proto86["m_columns"][] = "address2";
$proto86["m_columns"][] = "address3";
$proto86["m_columns"][] = "tel";
$proto86["m_columns"][] = "tel2";
$proto86["m_columns"][] = "mail1";
$proto86["m_columns"][] = "mail2";
$proto86["m_columns"][] = "address_code";
$proto86["m_columns"][] = "bank_name";
$proto86["m_columns"][] = "bank_blunch_code";
$proto86["m_columns"][] = "bank_yokin_shubetu";
$proto86["m_columns"][] = "bank_account";
$proto86["m_columns"][] = "bank_acoount_name";
$proto86["m_columns"][] = "haisou_bangou";
$proto86["m_columns"][] = "sise_houhou";
$proto86["m_columns"][] = "hentou_houhou";
$proto86["m_columns"][] = "hentou_houhou_time";
$proto86["m_columns"][] = "mousikomi_id";
$proto86["m_columns"][] = "hituyou_shorui";
$proto86["m_columns"][] = "seiyaku_fuseiritu";
$proto86["m_columns"][] = "mitumori_taku";
$proto86["m_columns"][] = "seacanse";
$proto86["m_columns"][] = "remark";
$proto86["m_columns"][] = "type";
$proto86["m_columns"][] = "sales_flag";
$proto86["m_columns"][] = "src_type";
$proto86["m_columns"][] = "liquidation_shop_code";
$proto86["m_columns"][] = "insurance_amount_print";
$proto86["m_columns"][] = "jis_code";
$proto86["m_columns"][] = "updated_at";
$proto86["m_columns"][] = "_registerd_id";
$proto86["m_columns"][] = "mail_check_type";
$proto86["m_columns"][] = "purchase_type";
$proto86["m_columns"][] = "sex";
$proto86["m_columns"][] = "m_tel";
$proto86["m_columns"][] = "fax";
$proto86["m_columns"][] = "chigin_kaitori";
$proto86["m_columns"][] = "option1";
$proto86["m_columns"][] = "option2";
$proto86["m_columns"][] = "option3";
$proto86["m_columns"][] = "option4";
$proto86["m_columns"][] = "option5";
$proto86["m_columns"][] = "option6";
$proto86["m_columns"][] = "option7";
$proto86["m_columns"][] = "option8";
$proto86["m_columns"][] = "option9";
$proto86["m_columns"][] = "option10";
$proto86["m_columns"][] = "option11";
$proto86["m_columns"][] = "option12";
$proto86["m_columns"][] = "option13";
$proto86["m_columns"][] = "rakuda_csv_flag";
$proto86["m_columns"][] = "EOC_COURIER_CHECK";
$proto86["m_columns"][] = "EOC_SIZE";
$proto86["m_columns"][] = "EOC_NUMBER";
$proto86["m_columns"][] = "EOC_REUSE";
$proto86["m_columns"][] = "EOC__DELIVERY_DATES";
$proto86["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto86["m_columns"][] = "FIRST_NAME2";
$proto86["m_columns"][] = "LAST_NAME2";
$proto86["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto86["m_columns"][] = "EOC__BOX_NUMBER";
$proto86["m_columns"][] = "FIRST_NAME_KANA";
$proto86["m_columns"][] = "LAST_NAME_KANA";
$proto86["m_columns"][] = "FLAG_SPEED";
$proto86["m_columns"][] = "SEARCH_MEDIA";
$proto86["m_columns"][] = "SEARCH_SITE";
$proto86["m_columns"][] = "UN_REACHABLE";
$proto86["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto86["m_columns"][] = "FLG_MAIL_OTHER";
$proto86["m_columns"][] = "ALLSEIYAKU";
$proto86["m_columns"][] = "ICHIBUSEIYAKU";
$proto86["m_columns"][] = "seiyakukin";
$proto86["m_columns"][] = "kaitorihuka";
$proto86["m_columns"][] = "awazu_date";
$proto86["m_columns"][] = "seiyaku_price";
$proto86["m_columns"][] = "eoc_search_keyword";
$proto86["m_columns"][] = "sonota";
$proto86["m_columns"][] = "size_kosuu";
$proto86["m_columns"][] = "sagawa_shuuka_flag";
$proto86["m_columns"][] = "line_check";
$proto86["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto86["m_columns"][] = "kaitori_sougak";
$proto86["m_columns"][] = "flag";
$proto86["m_columns"][] = "key_code";
$proto86["m_columns"][] = "dm_check_type";
$proto86["m_columns"][] = "kit_flag";
$proto86["m_columns"][] = "kit_done_flag";
$proto86["m_columns"][] = "bank_details_code";
$proto86["m_columns"][] = "bank_details_blunch_name";
$proto86["m_columns"][] = "bank_details_blunch_code";
$proto86["m_columns"][] = "bank_details_account_number";
$proto86["m_columns"][] = "bank_details_symbol";
$proto86["m_columns"][] = "bank_details_number";
$proto86["m_columns"][] = "bank_details_account_name";
$proto86["m_columns"][] = "bank_details_deposit_type";
$proto86["m_columns"][] = "mypage_id";
$proto86["m_columns"][] = "UN_REACHABLE_brand";
$proto86["m_columns"][] = "sagawa_haisou_hoken";
$proto86["m_columns"][] = "transfer_confirm";
$proto86["m_columns"][] = "outside_bank";
$proto86["m_columns"][] = "new_name";
$proto86["m_columns"][] = "letterpack";
$proto86["m_columns"][] = "satei_saisoku_2_days";
$proto86["m_columns"][] = "satei_saisoku_7_days";
$proto86["m_columns"][] = "accept_flag";
$proto86["m_columns"][] = "delivery_flag";
$proto86["m_columns"][] = "refining_weight";
$proto86["m_columns"][] = "line_chat_url";
$proto86["m_columns"][] = "royal_customer_status";
$proto86["m_columns"][] = "is_business_customer";
$proto86["m_columns"][] = "is_exist_haisouhosyo";
$proto86["m_columns"][] = "meigi_hankaku_kana";
$proto86["m_columns"][] = "building_types";
$proto86["m_columns"][] = "dwelling_types";
$proto86["m_columns"][] = "is_yamato_csv";
$proto86["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto86);

$proto85["m_table"] = $obj;
$proto85["m_sql"] = "`Eoc`";
$proto85["m_alias"] = "";
$proto85["m_srcTableName"] = "Eoc_nittsuu";
$proto87=array();
$proto87["m_sql"] = "";
$proto87["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto87["m_column"]=$obj;
$proto87["m_contained"] = array();
$proto87["m_strCase"] = "";
$proto87["m_havingmode"] = false;
$proto87["m_inBrackets"] = false;
$proto87["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto87);

$proto85["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto85);

$proto0["m_fromlist"][]=$obj;
												$proto89=array();
$proto89["m_link"] = "SQLL_LEFTJOIN";
			$proto90=array();
$proto90["m_strName"] = "Eoc_refining";
$proto90["m_srcTableName"] = "Eoc_nittsuu";
$proto90["m_columns"] = array();
$proto90["m_columns"][] = "id";
$proto90["m_columns"][] = "ecc_id";
$proto90["m_columns"][] = "mst_refining_status_id";
$proto90["m_columns"][] = "Collection_date";
$proto90["m_columns"][] = "Pickup_time_select";
$proto90["m_columns"][] = "Delivery_date";
$proto90["m_columns"][] = "Delivery_time_select";
$proto90["m_columns"][] = "update_by";
$proto90["m_columns"][] = "update_at";
$proto90["m_columns"][] = "create_by";
$proto90["m_columns"][] = "create_at";
$obj = new SQLTable($proto90);

$proto89["m_table"] = $obj;
$proto89["m_sql"] = "LEFT OUTER JOIN `Eoc_refining` ON `Eoc`.`ecc_id` = `Eoc_refining`.`ecc_id`";
$proto89["m_alias"] = "";
$proto89["m_srcTableName"] = "Eoc_nittsuu";
$proto91=array();
$proto91["m_sql"] = "`Eoc`.`ecc_id` = `Eoc_refining`.`ecc_id`";
$proto91["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto91["m_column"]=$obj;
$proto91["m_contained"] = array();
$proto91["m_strCase"] = "= `Eoc_refining`.`ecc_id`";
$proto91["m_havingmode"] = false;
$proto91["m_inBrackets"] = false;
$proto91["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto91);

$proto89["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto89);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto93=array();
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_nittsuu"
));

$proto93["m_column"]=$obj;
$proto93["m_bAsc"] = 0;
$proto93["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto93);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_nittsuu";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_nittsuu = createSqlQuery_Eoc_nittsuu();


	
		;

																																				

$tdataEoc_nittsuu[".sqlquery"] = $queryData_Eoc_nittsuu;

include_once(getabspath("include/Eoc_nittsuu_events.php"));
$tableEvents["Eoc_nittsuu"] = new eventclass_Eoc_nittsuu;
$tdataEoc_nittsuu[".hasEvents"] = true;

?>