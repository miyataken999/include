<?php
require_once(getabspath("classes/cipherer.php"));




$tdatakit_confirm = array();
	$tdatakit_confirm[".truncateText"] = true;
	$tdatakit_confirm[".NumberOfChars"] = 80;
	$tdatakit_confirm[".ShortName"] = "kit_confirm";
	$tdatakit_confirm[".OwnerID"] = "";
	$tdatakit_confirm[".OriginalTable"] = "Eoc_takuhai";

//	field labels
$fieldLabelskit_confirm = array();
$fieldToolTipskit_confirm = array();
$pageTitleskit_confirm = array();
$placeHolderskit_confirm = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelskit_confirm["Japanese"] = array();
	$fieldToolTipskit_confirm["Japanese"] = array();
	$placeHolderskit_confirm["Japanese"] = array();
	$pageTitleskit_confirm["Japanese"] = array();
	$fieldLabelskit_confirm["Japanese"]["id"] = "Id";
	$fieldToolTipskit_confirm["Japanese"]["id"] = "";
	$placeHolderskit_confirm["Japanese"]["id"] = "";
	$fieldLabelskit_confirm["Japanese"]["reuse_box"] = "キットコンディション";
	$fieldToolTipskit_confirm["Japanese"]["reuse_box"] = "";
	$placeHolderskit_confirm["Japanese"]["reuse_box"] = "";
	$fieldLabelskit_confirm["Japanese"]["kit_detail"] = "キット詳細";
	$fieldToolTipskit_confirm["Japanese"]["kit_detail"] = "";
	$placeHolderskit_confirm["Japanese"]["kit_detail"] = "";
	$fieldLabelskit_confirm["Japanese"]["time_select_hidden"] = "配送時間指定";
	$fieldToolTipskit_confirm["Japanese"]["time_select_hidden"] = "";
	$placeHolderskit_confirm["Japanese"]["time_select_hidden"] = "";
	$fieldLabelskit_confirm["Japanese"]["user_tel"] = "入力電話番号";
	$fieldToolTipskit_confirm["Japanese"]["user_tel"] = "";
	$placeHolderskit_confirm["Japanese"]["user_tel"] = "";
	$fieldLabelskit_confirm["Japanese"]["user_mail"] = "入力メアド";
	$fieldToolTipskit_confirm["Japanese"]["user_mail"] = "";
	$placeHolderskit_confirm["Japanese"]["user_mail"] = "";
	$fieldLabelskit_confirm["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipskit_confirm["Japanese"]["ecc_id"] = "";
	$placeHolderskit_confirm["Japanese"]["ecc_id"] = "";
	$fieldLabelskit_confirm["Japanese"]["kit_denpyou"] = "着払い伝票";
	$fieldToolTipskit_confirm["Japanese"]["kit_denpyou"] = "";
	$placeHolderskit_confirm["Japanese"]["kit_denpyou"] = "";
	$fieldLabelskit_confirm["Japanese"]["kit_huutou"] = "クッション封筒";
	$fieldToolTipskit_confirm["Japanese"]["kit_huutou"] = "";
	$placeHolderskit_confirm["Japanese"]["kit_huutou"] = "";
	$fieldLabelskit_confirm["Japanese"]["kit_S"] = "キットS";
	$fieldToolTipskit_confirm["Japanese"]["kit_S"] = "";
	$placeHolderskit_confirm["Japanese"]["kit_S"] = "";
	$fieldLabelskit_confirm["Japanese"]["kit_M"] = "キットM";
	$fieldToolTipskit_confirm["Japanese"]["kit_M"] = "";
	$placeHolderskit_confirm["Japanese"]["kit_M"] = "";
	$fieldLabelskit_confirm["Japanese"]["kit_L"] = "キットL";
	$fieldToolTipskit_confirm["Japanese"]["kit_L"] = "";
	$placeHolderskit_confirm["Japanese"]["kit_L"] = "";
	$fieldLabelskit_confirm["Japanese"]["warehouse_instruction"] = "倉庫への指示";
	$fieldToolTipskit_confirm["Japanese"]["warehouse_instruction"] = "";
	$placeHolderskit_confirm["Japanese"]["warehouse_instruction"] = "";
	$fieldLabelskit_confirm["Japanese"]["delivery_slip_instruction"] = "伝票記載の指示";
	$fieldToolTipskit_confirm["Japanese"]["delivery_slip_instruction"] = "";
	$placeHolderskit_confirm["Japanese"]["delivery_slip_instruction"] = "";
	$fieldLabelskit_confirm["Japanese"]["kit_flag"] = "宅配キット";
	$fieldToolTipskit_confirm["Japanese"]["kit_flag"] = "";
	$placeHolderskit_confirm["Japanese"]["kit_flag"] = "";
	$fieldLabelskit_confirm["Japanese"]["name1"] = "名前";
	$fieldToolTipskit_confirm["Japanese"]["name1"] = "";
	$placeHolderskit_confirm["Japanese"]["name1"] = "";
	$fieldLabelskit_confirm["Japanese"]["zip1"] = "郵便番号";
	$fieldToolTipskit_confirm["Japanese"]["zip1"] = "";
	$placeHolderskit_confirm["Japanese"]["zip1"] = "";
	$fieldLabelskit_confirm["Japanese"]["zip2"] = "郵便番号2";
	$fieldToolTipskit_confirm["Japanese"]["zip2"] = "";
	$placeHolderskit_confirm["Japanese"]["zip2"] = "";
	$fieldLabelskit_confirm["Japanese"]["address1"] = "都道府県";
	$fieldToolTipskit_confirm["Japanese"]["address1"] = "";
	$placeHolderskit_confirm["Japanese"]["address1"] = "";
	$fieldLabelskit_confirm["Japanese"]["address2"] = "市区群町村";
	$fieldToolTipskit_confirm["Japanese"]["address2"] = "";
	$placeHolderskit_confirm["Japanese"]["address2"] = "";
	$fieldLabelskit_confirm["Japanese"]["address3"] = "以下住所";
	$fieldToolTipskit_confirm["Japanese"]["address3"] = "";
	$placeHolderskit_confirm["Japanese"]["address3"] = "";
	$fieldLabelskit_confirm["Japanese"]["tel"] = "電話";
	$fieldToolTipskit_confirm["Japanese"]["tel"] = "";
	$placeHolderskit_confirm["Japanese"]["tel"] = "";
	$fieldLabelskit_confirm["Japanese"]["tel2"] = "携帯";
	$fieldToolTipskit_confirm["Japanese"]["tel2"] = "";
	$placeHolderskit_confirm["Japanese"]["tel2"] = "";
	$fieldLabelskit_confirm["Japanese"]["mail1"] = "メアド";
	$fieldToolTipskit_confirm["Japanese"]["mail1"] = "";
	$placeHolderskit_confirm["Japanese"]["mail1"] = "";
	$fieldLabelskit_confirm["Japanese"]["mail2"] = "メアド2";
	$fieldToolTipskit_confirm["Japanese"]["mail2"] = "";
	$placeHolderskit_confirm["Japanese"]["mail2"] = "";
	$fieldLabelskit_confirm["Japanese"]["name2"] = "フリガナ";
	$fieldToolTipskit_confirm["Japanese"]["name2"] = "";
	$placeHolderskit_confirm["Japanese"]["name2"] = "";
	$fieldLabelskit_confirm["Japanese"]["haisou_bangou"] = "配送番号";
	$fieldToolTipskit_confirm["Japanese"]["haisou_bangou"] = "";
	$placeHolderskit_confirm["Japanese"]["haisou_bangou"] = "";
	$fieldLabelskit_confirm["Japanese"]["shipping_number"] = "荷主出荷NO";
	$fieldToolTipskit_confirm["Japanese"]["shipping_number"] = "";
	$placeHolderskit_confirm["Japanese"]["shipping_number"] = "";
	$fieldLabelskit_confirm["Japanese"]["arrival_date"] = "到着希望日";
	$fieldToolTipskit_confirm["Japanese"]["arrival_date"] = "";
	$placeHolderskit_confirm["Japanese"]["arrival_date"] = "";
	$fieldLabelskit_confirm["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipskit_confirm["Japanese"]["updated_at"] = "";
	$placeHolderskit_confirm["Japanese"]["updated_at"] = "";
	$fieldLabelskit_confirm["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipskit_confirm["Japanese"]["updated_by"] = "";
	$placeHolderskit_confirm["Japanese"]["updated_by"] = "";
	$fieldLabelskit_confirm["Japanese"]["status"] = "ステータス";
	$fieldToolTipskit_confirm["Japanese"]["status"] = "";
	$placeHolderskit_confirm["Japanese"]["status"] = "";
	if (count($fieldToolTipskit_confirm["Japanese"]))
		$tdatakit_confirm[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelskit_confirm[""] = array();
	$fieldToolTipskit_confirm[""] = array();
	$placeHolderskit_confirm[""] = array();
	$pageTitleskit_confirm[""] = array();
	$fieldLabelskit_confirm[""]["id"] = "Id";
	$fieldToolTipskit_confirm[""]["id"] = "";
	$placeHolderskit_confirm[""]["id"] = "";
	$fieldLabelskit_confirm[""]["reuse_box"] = "Reuse Box";
	$fieldToolTipskit_confirm[""]["reuse_box"] = "";
	$placeHolderskit_confirm[""]["reuse_box"] = "";
	$fieldLabelskit_confirm[""]["kit_detail"] = "Kit Detail";
	$fieldToolTipskit_confirm[""]["kit_detail"] = "";
	$placeHolderskit_confirm[""]["kit_detail"] = "";
	$fieldLabelskit_confirm[""]["time_select_hidden"] = "Time Select Hidden";
	$fieldToolTipskit_confirm[""]["time_select_hidden"] = "";
	$placeHolderskit_confirm[""]["time_select_hidden"] = "";
	$fieldLabelskit_confirm[""]["user_tel"] = "User Tel";
	$fieldToolTipskit_confirm[""]["user_tel"] = "";
	$placeHolderskit_confirm[""]["user_tel"] = "";
	$fieldLabelskit_confirm[""]["user_mail"] = "User Mail";
	$fieldToolTipskit_confirm[""]["user_mail"] = "";
	$placeHolderskit_confirm[""]["user_mail"] = "";
	$fieldLabelskit_confirm[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipskit_confirm[""]["ecc_id"] = "";
	$placeHolderskit_confirm[""]["ecc_id"] = "";
	$fieldLabelskit_confirm[""]["kit_denpyou"] = "Kit Denpyou";
	$fieldToolTipskit_confirm[""]["kit_denpyou"] = "";
	$placeHolderskit_confirm[""]["kit_denpyou"] = "";
	$fieldLabelskit_confirm[""]["kit_huutou"] = "Kit Huutou";
	$fieldToolTipskit_confirm[""]["kit_huutou"] = "";
	$placeHolderskit_confirm[""]["kit_huutou"] = "";
	$fieldLabelskit_confirm[""]["kit_S"] = "Kit S";
	$fieldToolTipskit_confirm[""]["kit_S"] = "";
	$placeHolderskit_confirm[""]["kit_S"] = "";
	$fieldLabelskit_confirm[""]["kit_M"] = "Kit M";
	$fieldToolTipskit_confirm[""]["kit_M"] = "";
	$placeHolderskit_confirm[""]["kit_M"] = "";
	$fieldLabelskit_confirm[""]["kit_L"] = "Kit L";
	$fieldToolTipskit_confirm[""]["kit_L"] = "";
	$placeHolderskit_confirm[""]["kit_L"] = "";
	$fieldLabelskit_confirm[""]["warehouse_instruction"] = "Warehouse Instruction";
	$fieldToolTipskit_confirm[""]["warehouse_instruction"] = "";
	$placeHolderskit_confirm[""]["warehouse_instruction"] = "";
	$fieldLabelskit_confirm[""]["delivery_slip_instruction"] = "Delivery Slip Instruction";
	$fieldToolTipskit_confirm[""]["delivery_slip_instruction"] = "";
	$placeHolderskit_confirm[""]["delivery_slip_instruction"] = "";
	$fieldLabelskit_confirm[""]["kit_flag"] = "Kit Flag";
	$fieldToolTipskit_confirm[""]["kit_flag"] = "";
	$placeHolderskit_confirm[""]["kit_flag"] = "";
	$fieldLabelskit_confirm[""]["name1"] = "Name1";
	$fieldToolTipskit_confirm[""]["name1"] = "";
	$placeHolderskit_confirm[""]["name1"] = "";
	$fieldLabelskit_confirm[""]["zip1"] = "Zip1";
	$fieldToolTipskit_confirm[""]["zip1"] = "";
	$placeHolderskit_confirm[""]["zip1"] = "";
	$fieldLabelskit_confirm[""]["zip2"] = "Zip2";
	$fieldToolTipskit_confirm[""]["zip2"] = "";
	$placeHolderskit_confirm[""]["zip2"] = "";
	$fieldLabelskit_confirm[""]["address1"] = "Address1";
	$fieldToolTipskit_confirm[""]["address1"] = "";
	$placeHolderskit_confirm[""]["address1"] = "";
	$fieldLabelskit_confirm[""]["address2"] = "Address2";
	$fieldToolTipskit_confirm[""]["address2"] = "";
	$placeHolderskit_confirm[""]["address2"] = "";
	$fieldLabelskit_confirm[""]["address3"] = "Address3";
	$fieldToolTipskit_confirm[""]["address3"] = "";
	$placeHolderskit_confirm[""]["address3"] = "";
	$fieldLabelskit_confirm[""]["tel"] = "Tel";
	$fieldToolTipskit_confirm[""]["tel"] = "";
	$placeHolderskit_confirm[""]["tel"] = "";
	$fieldLabelskit_confirm[""]["tel2"] = "Tel2";
	$fieldToolTipskit_confirm[""]["tel2"] = "";
	$placeHolderskit_confirm[""]["tel2"] = "";
	$fieldLabelskit_confirm[""]["mail1"] = "Mail1";
	$fieldToolTipskit_confirm[""]["mail1"] = "";
	$placeHolderskit_confirm[""]["mail1"] = "";
	$fieldLabelskit_confirm[""]["mail2"] = "Mail2";
	$fieldToolTipskit_confirm[""]["mail2"] = "";
	$placeHolderskit_confirm[""]["mail2"] = "";
	$fieldLabelskit_confirm[""]["name2"] = "Name2";
	$fieldToolTipskit_confirm[""]["name2"] = "";
	$placeHolderskit_confirm[""]["name2"] = "";
	$fieldLabelskit_confirm[""]["haisou_bangou"] = "Haisou Bangou";
	$fieldToolTipskit_confirm[""]["haisou_bangou"] = "";
	$placeHolderskit_confirm[""]["haisou_bangou"] = "";
	$fieldLabelskit_confirm[""]["shipping_number"] = "Shipping Number";
	$fieldToolTipskit_confirm[""]["shipping_number"] = "";
	$placeHolderskit_confirm[""]["shipping_number"] = "";
	$fieldLabelskit_confirm[""]["arrival_date"] = "Arrival Date";
	$fieldToolTipskit_confirm[""]["arrival_date"] = "";
	$placeHolderskit_confirm[""]["arrival_date"] = "";
	$fieldLabelskit_confirm[""]["updated_at"] = "Updated At";
	$fieldToolTipskit_confirm[""]["updated_at"] = "";
	$placeHolderskit_confirm[""]["updated_at"] = "";
	$fieldLabelskit_confirm[""]["updated_by"] = "Updated By";
	$fieldToolTipskit_confirm[""]["updated_by"] = "";
	$placeHolderskit_confirm[""]["updated_by"] = "";
	$fieldLabelskit_confirm[""]["status"] = "Status";
	$fieldToolTipskit_confirm[""]["status"] = "";
	$placeHolderskit_confirm[""]["status"] = "";
	if (count($fieldToolTipskit_confirm[""]))
		$tdatakit_confirm[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelskit_confirm["English"] = array();
	$fieldToolTipskit_confirm["English"] = array();
	$placeHolderskit_confirm["English"] = array();
	$pageTitleskit_confirm["English"] = array();
	$fieldLabelskit_confirm["English"]["id"] = "Id";
	$fieldToolTipskit_confirm["English"]["id"] = "";
	$placeHolderskit_confirm["English"]["id"] = "";
	$fieldLabelskit_confirm["English"]["reuse_box"] = "Reuse Box";
	$fieldToolTipskit_confirm["English"]["reuse_box"] = "";
	$placeHolderskit_confirm["English"]["reuse_box"] = "";
	$fieldLabelskit_confirm["English"]["kit_detail"] = "Kit Detail";
	$fieldToolTipskit_confirm["English"]["kit_detail"] = "";
	$placeHolderskit_confirm["English"]["kit_detail"] = "";
	$fieldLabelskit_confirm["English"]["time_select_hidden"] = "Time Select Hidden";
	$fieldToolTipskit_confirm["English"]["time_select_hidden"] = "";
	$placeHolderskit_confirm["English"]["time_select_hidden"] = "";
	$fieldLabelskit_confirm["English"]["user_tel"] = "User Tel";
	$fieldToolTipskit_confirm["English"]["user_tel"] = "";
	$placeHolderskit_confirm["English"]["user_tel"] = "";
	$fieldLabelskit_confirm["English"]["user_mail"] = "User Mail";
	$fieldToolTipskit_confirm["English"]["user_mail"] = "";
	$placeHolderskit_confirm["English"]["user_mail"] = "";
	$fieldLabelskit_confirm["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipskit_confirm["English"]["ecc_id"] = "";
	$placeHolderskit_confirm["English"]["ecc_id"] = "";
	$fieldLabelskit_confirm["English"]["kit_denpyou"] = "Kit Denpyou";
	$fieldToolTipskit_confirm["English"]["kit_denpyou"] = "";
	$placeHolderskit_confirm["English"]["kit_denpyou"] = "";
	$fieldLabelskit_confirm["English"]["kit_huutou"] = "Kit Huutou";
	$fieldToolTipskit_confirm["English"]["kit_huutou"] = "";
	$placeHolderskit_confirm["English"]["kit_huutou"] = "";
	$fieldLabelskit_confirm["English"]["kit_S"] = "Kit S";
	$fieldToolTipskit_confirm["English"]["kit_S"] = "";
	$placeHolderskit_confirm["English"]["kit_S"] = "";
	$fieldLabelskit_confirm["English"]["kit_M"] = "Kit M";
	$fieldToolTipskit_confirm["English"]["kit_M"] = "";
	$placeHolderskit_confirm["English"]["kit_M"] = "";
	$fieldLabelskit_confirm["English"]["kit_L"] = "Kit L";
	$fieldToolTipskit_confirm["English"]["kit_L"] = "";
	$placeHolderskit_confirm["English"]["kit_L"] = "";
	$fieldLabelskit_confirm["English"]["warehouse_instruction"] = "Warehouse Instruction";
	$fieldToolTipskit_confirm["English"]["warehouse_instruction"] = "";
	$placeHolderskit_confirm["English"]["warehouse_instruction"] = "";
	$fieldLabelskit_confirm["English"]["delivery_slip_instruction"] = "Delivery Slip Instruction";
	$fieldToolTipskit_confirm["English"]["delivery_slip_instruction"] = "";
	$placeHolderskit_confirm["English"]["delivery_slip_instruction"] = "";
	$fieldLabelskit_confirm["English"]["kit_flag"] = "Kit Flag";
	$fieldToolTipskit_confirm["English"]["kit_flag"] = "";
	$placeHolderskit_confirm["English"]["kit_flag"] = "";
	$fieldLabelskit_confirm["English"]["name1"] = "Name1";
	$fieldToolTipskit_confirm["English"]["name1"] = "";
	$placeHolderskit_confirm["English"]["name1"] = "";
	$fieldLabelskit_confirm["English"]["zip1"] = "Zip1";
	$fieldToolTipskit_confirm["English"]["zip1"] = "";
	$placeHolderskit_confirm["English"]["zip1"] = "";
	$fieldLabelskit_confirm["English"]["zip2"] = "Zip2";
	$fieldToolTipskit_confirm["English"]["zip2"] = "";
	$placeHolderskit_confirm["English"]["zip2"] = "";
	$fieldLabelskit_confirm["English"]["address1"] = "Address1";
	$fieldToolTipskit_confirm["English"]["address1"] = "";
	$placeHolderskit_confirm["English"]["address1"] = "";
	$fieldLabelskit_confirm["English"]["address2"] = "Address2";
	$fieldToolTipskit_confirm["English"]["address2"] = "";
	$placeHolderskit_confirm["English"]["address2"] = "";
	$fieldLabelskit_confirm["English"]["address3"] = "Address3";
	$fieldToolTipskit_confirm["English"]["address3"] = "";
	$placeHolderskit_confirm["English"]["address3"] = "";
	$fieldLabelskit_confirm["English"]["tel"] = "Tel";
	$fieldToolTipskit_confirm["English"]["tel"] = "";
	$placeHolderskit_confirm["English"]["tel"] = "";
	$fieldLabelskit_confirm["English"]["tel2"] = "Tel2";
	$fieldToolTipskit_confirm["English"]["tel2"] = "";
	$placeHolderskit_confirm["English"]["tel2"] = "";
	$fieldLabelskit_confirm["English"]["mail1"] = "Mail1";
	$fieldToolTipskit_confirm["English"]["mail1"] = "";
	$placeHolderskit_confirm["English"]["mail1"] = "";
	$fieldLabelskit_confirm["English"]["mail2"] = "Mail2";
	$fieldToolTipskit_confirm["English"]["mail2"] = "";
	$placeHolderskit_confirm["English"]["mail2"] = "";
	$fieldLabelskit_confirm["English"]["name2"] = "Name2";
	$fieldToolTipskit_confirm["English"]["name2"] = "";
	$placeHolderskit_confirm["English"]["name2"] = "";
	$fieldLabelskit_confirm["English"]["haisou_bangou"] = "Haisou Bangou";
	$fieldToolTipskit_confirm["English"]["haisou_bangou"] = "";
	$placeHolderskit_confirm["English"]["haisou_bangou"] = "";
	$fieldLabelskit_confirm["English"]["shipping_number"] = "Shipping Number";
	$fieldToolTipskit_confirm["English"]["shipping_number"] = "";
	$placeHolderskit_confirm["English"]["shipping_number"] = "";
	$fieldLabelskit_confirm["English"]["arrival_date"] = "Arrival Date";
	$fieldToolTipskit_confirm["English"]["arrival_date"] = "";
	$placeHolderskit_confirm["English"]["arrival_date"] = "";
	$fieldLabelskit_confirm["English"]["updated_at"] = "Updated At";
	$fieldToolTipskit_confirm["English"]["updated_at"] = "";
	$placeHolderskit_confirm["English"]["updated_at"] = "";
	$fieldLabelskit_confirm["English"]["updated_by"] = "Updated By";
	$fieldToolTipskit_confirm["English"]["updated_by"] = "";
	$placeHolderskit_confirm["English"]["updated_by"] = "";
	$fieldLabelskit_confirm["English"]["status"] = "Status";
	$fieldToolTipskit_confirm["English"]["status"] = "";
	$placeHolderskit_confirm["English"]["status"] = "";
	if (count($fieldToolTipskit_confirm["English"]))
		$tdatakit_confirm[".isUseToolTips"] = true;
}


	$tdatakit_confirm[".NCSearch"] = true;



$tdatakit_confirm[".shortTableName"] = "kit_confirm";
$tdatakit_confirm[".nSecOptions"] = 0;
$tdatakit_confirm[".recsPerRowPrint"] = 1;
$tdatakit_confirm[".mainTableOwnerID"] = "";
$tdatakit_confirm[".moveNext"] = 1;
$tdatakit_confirm[".entityType"] = 1;

$tdatakit_confirm[".strOriginalTableName"] = "Eoc_takuhai";

	



$tdatakit_confirm[".showAddInPopup"] = false;

$tdatakit_confirm[".showEditInPopup"] = false;

$tdatakit_confirm[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatakit_confirm[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatakit_confirm[".fieldsForRegister"] = array();

$tdatakit_confirm[".listAjax"] = false;

	$tdatakit_confirm[".audit"] = true;

	$tdatakit_confirm[".locking"] = false;



$tdatakit_confirm[".list"] = true;

$tdatakit_confirm[".inlineEdit"] = true;


$tdatakit_confirm[".reorderRecordsByHeader"] = true;




$tdatakit_confirm[".import"] = true;

$tdatakit_confirm[".exportTo"] = true;



$tdatakit_confirm[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatakit_confirm[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatakit_confirm[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatakit_confirm[".searchSaving"] = false;
//

$tdatakit_confirm[".showSearchPanel"] = true;
		$tdatakit_confirm[".flexibleSearch"] = true;

$tdatakit_confirm[".isUseAjaxSuggest"] = true;

$tdatakit_confirm[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatakit_confirm[".ajaxCodeSnippetAdded"] = false;

$tdatakit_confirm[".buttonsAdded"] = false;

$tdatakit_confirm[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakit_confirm[".isUseTimeForSearch"] = false;



$tdatakit_confirm[".badgeColor"] = "1E90FF";


$tdatakit_confirm[".allSearchFields"] = array();
$tdatakit_confirm[".filterFields"] = array();
$tdatakit_confirm[".requiredSearchFields"] = array();

$tdatakit_confirm[".allSearchFields"][] = "status";
	$tdatakit_confirm[".allSearchFields"][] = "id";
	$tdatakit_confirm[".allSearchFields"][] = "shipping_number";
	$tdatakit_confirm[".allSearchFields"][] = "haisou_bangou";
	$tdatakit_confirm[".allSearchFields"][] = "arrival_date";
	$tdatakit_confirm[".allSearchFields"][] = "reuse_box";
	$tdatakit_confirm[".allSearchFields"][] = "kit_detail";
	$tdatakit_confirm[".allSearchFields"][] = "kit_denpyou";
	$tdatakit_confirm[".allSearchFields"][] = "kit_huutou";
	$tdatakit_confirm[".allSearchFields"][] = "kit_S";
	$tdatakit_confirm[".allSearchFields"][] = "kit_M";
	$tdatakit_confirm[".allSearchFields"][] = "kit_L";
	$tdatakit_confirm[".allSearchFields"][] = "time_select_hidden";
	$tdatakit_confirm[".allSearchFields"][] = "warehouse_instruction";
	$tdatakit_confirm[".allSearchFields"][] = "delivery_slip_instruction";
	$tdatakit_confirm[".allSearchFields"][] = "user_tel";
	$tdatakit_confirm[".allSearchFields"][] = "user_mail";
	$tdatakit_confirm[".allSearchFields"][] = "ecc_id";
	$tdatakit_confirm[".allSearchFields"][] = "kit_flag";
	$tdatakit_confirm[".allSearchFields"][] = "name1";
	$tdatakit_confirm[".allSearchFields"][] = "name2";
	$tdatakit_confirm[".allSearchFields"][] = "zip1";
	$tdatakit_confirm[".allSearchFields"][] = "zip2";
	$tdatakit_confirm[".allSearchFields"][] = "address1";
	$tdatakit_confirm[".allSearchFields"][] = "address2";
	$tdatakit_confirm[".allSearchFields"][] = "address3";
	$tdatakit_confirm[".allSearchFields"][] = "tel";
	$tdatakit_confirm[".allSearchFields"][] = "tel2";
	$tdatakit_confirm[".allSearchFields"][] = "mail1";
	$tdatakit_confirm[".allSearchFields"][] = "mail2";
	$tdatakit_confirm[".allSearchFields"][] = "updated_at";
	$tdatakit_confirm[".allSearchFields"][] = "updated_by";
	

$tdatakit_confirm[".googleLikeFields"] = array();
$tdatakit_confirm[".googleLikeFields"][] = "id";
$tdatakit_confirm[".googleLikeFields"][] = "reuse_box";
$tdatakit_confirm[".googleLikeFields"][] = "kit_detail";
$tdatakit_confirm[".googleLikeFields"][] = "kit_denpyou";
$tdatakit_confirm[".googleLikeFields"][] = "kit_huutou";
$tdatakit_confirm[".googleLikeFields"][] = "kit_S";
$tdatakit_confirm[".googleLikeFields"][] = "kit_M";
$tdatakit_confirm[".googleLikeFields"][] = "kit_L";
$tdatakit_confirm[".googleLikeFields"][] = "time_select_hidden";
$tdatakit_confirm[".googleLikeFields"][] = "warehouse_instruction";
$tdatakit_confirm[".googleLikeFields"][] = "delivery_slip_instruction";
$tdatakit_confirm[".googleLikeFields"][] = "user_tel";
$tdatakit_confirm[".googleLikeFields"][] = "user_mail";
$tdatakit_confirm[".googleLikeFields"][] = "ecc_id";
$tdatakit_confirm[".googleLikeFields"][] = "kit_flag";
$tdatakit_confirm[".googleLikeFields"][] = "name1";
$tdatakit_confirm[".googleLikeFields"][] = "name2";
$tdatakit_confirm[".googleLikeFields"][] = "zip1";
$tdatakit_confirm[".googleLikeFields"][] = "zip2";
$tdatakit_confirm[".googleLikeFields"][] = "address1";
$tdatakit_confirm[".googleLikeFields"][] = "address2";
$tdatakit_confirm[".googleLikeFields"][] = "address3";
$tdatakit_confirm[".googleLikeFields"][] = "tel";
$tdatakit_confirm[".googleLikeFields"][] = "tel2";
$tdatakit_confirm[".googleLikeFields"][] = "mail1";
$tdatakit_confirm[".googleLikeFields"][] = "mail2";
$tdatakit_confirm[".googleLikeFields"][] = "haisou_bangou";
$tdatakit_confirm[".googleLikeFields"][] = "shipping_number";
$tdatakit_confirm[".googleLikeFields"][] = "arrival_date";
$tdatakit_confirm[".googleLikeFields"][] = "updated_at";
$tdatakit_confirm[".googleLikeFields"][] = "updated_by";
$tdatakit_confirm[".googleLikeFields"][] = "status";


$tdatakit_confirm[".advSearchFields"] = array();
$tdatakit_confirm[".advSearchFields"][] = "status";
$tdatakit_confirm[".advSearchFields"][] = "id";
$tdatakit_confirm[".advSearchFields"][] = "shipping_number";
$tdatakit_confirm[".advSearchFields"][] = "haisou_bangou";
$tdatakit_confirm[".advSearchFields"][] = "arrival_date";
$tdatakit_confirm[".advSearchFields"][] = "reuse_box";
$tdatakit_confirm[".advSearchFields"][] = "kit_detail";
$tdatakit_confirm[".advSearchFields"][] = "kit_denpyou";
$tdatakit_confirm[".advSearchFields"][] = "kit_huutou";
$tdatakit_confirm[".advSearchFields"][] = "kit_S";
$tdatakit_confirm[".advSearchFields"][] = "kit_M";
$tdatakit_confirm[".advSearchFields"][] = "kit_L";
$tdatakit_confirm[".advSearchFields"][] = "time_select_hidden";
$tdatakit_confirm[".advSearchFields"][] = "warehouse_instruction";
$tdatakit_confirm[".advSearchFields"][] = "delivery_slip_instruction";
$tdatakit_confirm[".advSearchFields"][] = "user_tel";
$tdatakit_confirm[".advSearchFields"][] = "user_mail";
$tdatakit_confirm[".advSearchFields"][] = "ecc_id";
$tdatakit_confirm[".advSearchFields"][] = "kit_flag";
$tdatakit_confirm[".advSearchFields"][] = "name1";
$tdatakit_confirm[".advSearchFields"][] = "name2";
$tdatakit_confirm[".advSearchFields"][] = "zip1";
$tdatakit_confirm[".advSearchFields"][] = "zip2";
$tdatakit_confirm[".advSearchFields"][] = "address1";
$tdatakit_confirm[".advSearchFields"][] = "address2";
$tdatakit_confirm[".advSearchFields"][] = "address3";
$tdatakit_confirm[".advSearchFields"][] = "tel";
$tdatakit_confirm[".advSearchFields"][] = "tel2";
$tdatakit_confirm[".advSearchFields"][] = "mail1";
$tdatakit_confirm[".advSearchFields"][] = "mail2";
$tdatakit_confirm[".advSearchFields"][] = "updated_at";
$tdatakit_confirm[".advSearchFields"][] = "updated_by";

$tdatakit_confirm[".tableType"] = "list";

$tdatakit_confirm[".printerPageOrientation"] = 0;
$tdatakit_confirm[".nPrinterPageScale"] = 100;

$tdatakit_confirm[".nPrinterSplitRecords"] = 40;

$tdatakit_confirm[".nPrinterPDFSplitRecords"] = 40;



$tdatakit_confirm[".geocodingEnabled"] = false;





$tdatakit_confirm[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatakit_confirm[".pageSize"] = 100;

$tdatakit_confirm[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Eoc_takuhai`.`id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatakit_confirm[".strOrderBy"] = $tstrOrderBy;

$tdatakit_confirm[".orderindexes"] = array();
$tdatakit_confirm[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`Eoc_takuhai`.`id`");

$tdatakit_confirm[".sqlHead"] = "SELECT `Eoc_takuhai`.`id`,  `Eoc_takuhai`.`reuse_box`,  `Eoc_takuhai`.`kit_detail`,  `Eoc_takuhai`.`kit_denpyou`,  `Eoc_takuhai`.`kit_huutou`,  `Eoc_takuhai`.`kit_S`,  `Eoc_takuhai`.`kit_M`,  `Eoc_takuhai`.`kit_L`,  `Eoc_takuhai`.`time_select_hidden`,  `Eoc_takuhai`.`warehouse_instruction`,  `Eoc_takuhai`.`delivery_slip_instruction`,  `Eoc_takuhai`.`user_tel`,  `Eoc_takuhai`.`user_mail`,  `Eoc_takuhai`.`ecc_id`,  `Eoc`.`kit_flag`,  `Eoc`.`name1`,  `Eoc`.`name2`,  `Eoc`.`zip1`,  `Eoc`.`zip2`,  `Eoc`.`address1`,  `Eoc`.`address2`,  `Eoc`.`address3`,  `Eoc`.`tel`,  `Eoc`.`tel2`,  `Eoc`.`mail1`,  `Eoc`.`mail2`,  `Eoc_takuhai`.`haisou_bangou`,  `Eoc_takuhai`.`shipping_number`,  `Eoc_takuhai`.`arrival_date`,  `Eoc_takuhai`.`updated_at`,  `Eoc_takuhai`.`updated_by`,  `Eoc_takuhai`.`status`";
$tdatakit_confirm[".sqlFrom"] = "FROM `Eoc_takuhai`  INNER JOIN `Eoc` ON `Eoc_takuhai`.`ecc_id` = `Eoc`.`ecc_id`";
$tdatakit_confirm[".sqlWhereExpr"] = "(`Eoc`.`kit_flag` =1) AND (`Eoc_takuhai`.`status` =1)";
$tdatakit_confirm[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakit_confirm[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakit_confirm[".arrGroupsPerPage"] = $arrGPP;

$tdatakit_confirm[".highlightSearchResults"] = true;

$tableKeyskit_confirm = array();
$tableKeyskit_confirm[] = "id";
$tdatakit_confirm[".Keys"] = $tableKeyskit_confirm;

$tdatakit_confirm[".listFields"] = array();
$tdatakit_confirm[".listFields"][] = "id";
$tdatakit_confirm[".listFields"][] = "status";
$tdatakit_confirm[".listFields"][] = "shipping_number";
$tdatakit_confirm[".listFields"][] = "haisou_bangou";
$tdatakit_confirm[".listFields"][] = "arrival_date";
$tdatakit_confirm[".listFields"][] = "reuse_box";
$tdatakit_confirm[".listFields"][] = "kit_detail";
$tdatakit_confirm[".listFields"][] = "kit_denpyou";
$tdatakit_confirm[".listFields"][] = "kit_huutou";
$tdatakit_confirm[".listFields"][] = "kit_S";
$tdatakit_confirm[".listFields"][] = "kit_M";
$tdatakit_confirm[".listFields"][] = "kit_L";
$tdatakit_confirm[".listFields"][] = "time_select_hidden";
$tdatakit_confirm[".listFields"][] = "warehouse_instruction";
$tdatakit_confirm[".listFields"][] = "delivery_slip_instruction";
$tdatakit_confirm[".listFields"][] = "user_tel";
$tdatakit_confirm[".listFields"][] = "user_mail";
$tdatakit_confirm[".listFields"][] = "ecc_id";
$tdatakit_confirm[".listFields"][] = "kit_flag";
$tdatakit_confirm[".listFields"][] = "name1";
$tdatakit_confirm[".listFields"][] = "name2";
$tdatakit_confirm[".listFields"][] = "zip1";
$tdatakit_confirm[".listFields"][] = "zip2";
$tdatakit_confirm[".listFields"][] = "address1";
$tdatakit_confirm[".listFields"][] = "address2";
$tdatakit_confirm[".listFields"][] = "address3";
$tdatakit_confirm[".listFields"][] = "tel";
$tdatakit_confirm[".listFields"][] = "tel2";
$tdatakit_confirm[".listFields"][] = "mail1";
$tdatakit_confirm[".listFields"][] = "mail2";
$tdatakit_confirm[".listFields"][] = "updated_at";
$tdatakit_confirm[".listFields"][] = "updated_by";

$tdatakit_confirm[".hideMobileList"] = array();


$tdatakit_confirm[".viewFields"] = array();

$tdatakit_confirm[".addFields"] = array();

$tdatakit_confirm[".masterListFields"] = array();
$tdatakit_confirm[".masterListFields"][] = "id";
$tdatakit_confirm[".masterListFields"][] = "reuse_box";
$tdatakit_confirm[".masterListFields"][] = "kit_detail";
$tdatakit_confirm[".masterListFields"][] = "kit_denpyou";
$tdatakit_confirm[".masterListFields"][] = "kit_huutou";
$tdatakit_confirm[".masterListFields"][] = "kit_S";
$tdatakit_confirm[".masterListFields"][] = "kit_M";
$tdatakit_confirm[".masterListFields"][] = "kit_L";
$tdatakit_confirm[".masterListFields"][] = "time_select_hidden";
$tdatakit_confirm[".masterListFields"][] = "warehouse_instruction";
$tdatakit_confirm[".masterListFields"][] = "delivery_slip_instruction";
$tdatakit_confirm[".masterListFields"][] = "user_tel";
$tdatakit_confirm[".masterListFields"][] = "user_mail";
$tdatakit_confirm[".masterListFields"][] = "ecc_id";
$tdatakit_confirm[".masterListFields"][] = "kit_flag";
$tdatakit_confirm[".masterListFields"][] = "name1";
$tdatakit_confirm[".masterListFields"][] = "name2";
$tdatakit_confirm[".masterListFields"][] = "zip1";
$tdatakit_confirm[".masterListFields"][] = "zip2";
$tdatakit_confirm[".masterListFields"][] = "address1";
$tdatakit_confirm[".masterListFields"][] = "address2";
$tdatakit_confirm[".masterListFields"][] = "address3";
$tdatakit_confirm[".masterListFields"][] = "tel";
$tdatakit_confirm[".masterListFields"][] = "tel2";
$tdatakit_confirm[".masterListFields"][] = "mail1";
$tdatakit_confirm[".masterListFields"][] = "mail2";
$tdatakit_confirm[".masterListFields"][] = "haisou_bangou";
$tdatakit_confirm[".masterListFields"][] = "shipping_number";
$tdatakit_confirm[".masterListFields"][] = "arrival_date";
$tdatakit_confirm[".masterListFields"][] = "updated_at";
$tdatakit_confirm[".masterListFields"][] = "updated_by";
$tdatakit_confirm[".masterListFields"][] = "status";

$tdatakit_confirm[".inlineAddFields"] = array();

$tdatakit_confirm[".editFields"] = array();

$tdatakit_confirm[".inlineEditFields"] = array();
$tdatakit_confirm[".inlineEditFields"][] = "status";
$tdatakit_confirm[".inlineEditFields"][] = "shipping_number";
$tdatakit_confirm[".inlineEditFields"][] = "haisou_bangou";
$tdatakit_confirm[".inlineEditFields"][] = "arrival_date";
$tdatakit_confirm[".inlineEditFields"][] = "reuse_box";
$tdatakit_confirm[".inlineEditFields"][] = "kit_detail";
$tdatakit_confirm[".inlineEditFields"][] = "kit_denpyou";
$tdatakit_confirm[".inlineEditFields"][] = "kit_huutou";
$tdatakit_confirm[".inlineEditFields"][] = "kit_S";
$tdatakit_confirm[".inlineEditFields"][] = "kit_M";
$tdatakit_confirm[".inlineEditFields"][] = "kit_L";
$tdatakit_confirm[".inlineEditFields"][] = "time_select_hidden";
$tdatakit_confirm[".inlineEditFields"][] = "warehouse_instruction";
$tdatakit_confirm[".inlineEditFields"][] = "delivery_slip_instruction";
$tdatakit_confirm[".inlineEditFields"][] = "user_tel";
$tdatakit_confirm[".inlineEditFields"][] = "user_mail";

$tdatakit_confirm[".updateSelectedFields"] = array();


$tdatakit_confirm[".exportFields"] = array();
$tdatakit_confirm[".exportFields"][] = "id";
$tdatakit_confirm[".exportFields"][] = "shipping_number";
$tdatakit_confirm[".exportFields"][] = "haisou_bangou";
$tdatakit_confirm[".exportFields"][] = "arrival_date";
$tdatakit_confirm[".exportFields"][] = "reuse_box";
$tdatakit_confirm[".exportFields"][] = "kit_detail";
$tdatakit_confirm[".exportFields"][] = "kit_denpyou";
$tdatakit_confirm[".exportFields"][] = "kit_huutou";
$tdatakit_confirm[".exportFields"][] = "kit_S";
$tdatakit_confirm[".exportFields"][] = "kit_M";
$tdatakit_confirm[".exportFields"][] = "kit_L";
$tdatakit_confirm[".exportFields"][] = "time_select_hidden";
$tdatakit_confirm[".exportFields"][] = "warehouse_instruction";
$tdatakit_confirm[".exportFields"][] = "delivery_slip_instruction";
$tdatakit_confirm[".exportFields"][] = "user_tel";
$tdatakit_confirm[".exportFields"][] = "user_mail";
$tdatakit_confirm[".exportFields"][] = "ecc_id";
$tdatakit_confirm[".exportFields"][] = "kit_flag";
$tdatakit_confirm[".exportFields"][] = "name1";
$tdatakit_confirm[".exportFields"][] = "name2";
$tdatakit_confirm[".exportFields"][] = "zip1";
$tdatakit_confirm[".exportFields"][] = "zip2";
$tdatakit_confirm[".exportFields"][] = "address1";
$tdatakit_confirm[".exportFields"][] = "address2";
$tdatakit_confirm[".exportFields"][] = "address3";
$tdatakit_confirm[".exportFields"][] = "tel";
$tdatakit_confirm[".exportFields"][] = "tel2";
$tdatakit_confirm[".exportFields"][] = "mail1";
$tdatakit_confirm[".exportFields"][] = "mail2";
$tdatakit_confirm[".exportFields"][] = "updated_at";
$tdatakit_confirm[".exportFields"][] = "updated_by";

$tdatakit_confirm[".importFields"] = array();
$tdatakit_confirm[".importFields"][] = "id";
$tdatakit_confirm[".importFields"][] = "haisou_bangou";
$tdatakit_confirm[".importFields"][] = "shipping_number";
$tdatakit_confirm[".importFields"][] = "arrival_date";
$tdatakit_confirm[".importFields"][] = "updated_at";
$tdatakit_confirm[".importFields"][] = "updated_by";

$tdatakit_confirm[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatakit_confirm["id"] = $fdata;
//	reuse_box
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "reuse_box";
	$fdata["GoodName"] = "reuse_box";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","reuse_box");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "reuse_box";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`reuse_box`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatakit_confirm["reuse_box"] = $fdata;
//	kit_detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "kit_detail";
	$fdata["GoodName"] = "kit_detail";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","kit_detail");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kit_detail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`kit_detail`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatakit_confirm["kit_detail"] = $fdata;
//	kit_denpyou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "kit_denpyou";
	$fdata["GoodName"] = "kit_denpyou";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","kit_denpyou");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kit_denpyou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`kit_denpyou`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupValues"][] = "0";
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";

	
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




	$tdatakit_confirm["kit_denpyou"] = $fdata;
//	kit_huutou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "kit_huutou";
	$fdata["GoodName"] = "kit_huutou";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","kit_huutou");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kit_huutou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`kit_huutou`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupValues"][] = "0";
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";

	
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




	$tdatakit_confirm["kit_huutou"] = $fdata;
//	kit_S
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "kit_S";
	$fdata["GoodName"] = "kit_S";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","kit_S");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kit_S";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`kit_S`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupValues"][] = "0";
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";

	
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




	$tdatakit_confirm["kit_S"] = $fdata;
//	kit_M
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "kit_M";
	$fdata["GoodName"] = "kit_M";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","kit_M");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kit_M";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`kit_M`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupValues"][] = "0";
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";

	
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




	$tdatakit_confirm["kit_M"] = $fdata;
//	kit_L
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "kit_L";
	$fdata["GoodName"] = "kit_L";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","kit_L");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kit_L";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`kit_L`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupValues"][] = "0";
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "2";
	$edata["LookupValues"][] = "3";
	$edata["LookupValues"][] = "4";
	$edata["LookupValues"][] = "5";

	
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




	$tdatakit_confirm["kit_L"] = $fdata;
//	time_select_hidden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "time_select_hidden";
	$fdata["GoodName"] = "time_select_hidden";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","time_select_hidden");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "time_select_hidden";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`time_select_hidden`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupValues"][] = "指定しない";
	$edata["LookupValues"][] = "午前中";
	$edata["LookupValues"][] = "12～14時";
	$edata["LookupValues"][] = "14～16時";
	$edata["LookupValues"][] = "16～18時";
	$edata["LookupValues"][] = "18～21時";

	
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




	$tdatakit_confirm["time_select_hidden"] = $fdata;
//	warehouse_instruction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "warehouse_instruction";
	$fdata["GoodName"] = "warehouse_instruction";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","warehouse_instruction");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "warehouse_instruction";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`warehouse_instruction`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatakit_confirm["warehouse_instruction"] = $fdata;
//	delivery_slip_instruction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "delivery_slip_instruction";
	$fdata["GoodName"] = "delivery_slip_instruction";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","delivery_slip_instruction");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "delivery_slip_instruction";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`delivery_slip_instruction`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatakit_confirm["delivery_slip_instruction"] = $fdata;
//	user_tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "user_tel";
	$fdata["GoodName"] = "user_tel";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","user_tel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_tel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`user_tel`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatakit_confirm["user_tel"] = $fdata;
//	user_mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "user_mail";
	$fdata["GoodName"] = "user_mail";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","user_mail");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user_mail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`user_mail`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatakit_confirm["user_mail"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`ecc_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatakit_confirm["ecc_id"] = $fdata;
//	kit_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "kit_flag";
	$fdata["GoodName"] = "kit_flag";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("kit_confirm","kit_flag");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kit_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`kit_flag`";

	
	
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




	$tdatakit_confirm["kit_flag"] = $fdata;
//	name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "name1";
	$fdata["GoodName"] = "name1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("kit_confirm","name1");
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatakit_confirm["name1"] = $fdata;
//	name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "name2";
	$fdata["GoodName"] = "name2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("kit_confirm","name2");
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatakit_confirm["name2"] = $fdata;
//	zip1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "zip1";
	$fdata["GoodName"] = "zip1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("kit_confirm","zip1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zip1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`zip1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatakit_confirm["zip1"] = $fdata;
//	zip2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "zip2";
	$fdata["GoodName"] = "zip2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("kit_confirm","zip2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zip2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`zip2`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatakit_confirm["zip2"] = $fdata;
//	address1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "address1";
	$fdata["GoodName"] = "address1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("kit_confirm","address1");
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




	$tdatakit_confirm["address1"] = $fdata;
//	address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "address2";
	$fdata["GoodName"] = "address2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("kit_confirm","address2");
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatakit_confirm["address2"] = $fdata;
//	address3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "address3";
	$fdata["GoodName"] = "address3";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("kit_confirm","address3");
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatakit_confirm["address3"] = $fdata;
//	tel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "tel";
	$fdata["GoodName"] = "tel";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("kit_confirm","tel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatakit_confirm["tel"] = $fdata;
//	tel2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "tel2";
	$fdata["GoodName"] = "tel2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("kit_confirm","tel2");
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

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatakit_confirm["tel2"] = $fdata;
//	mail1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "mail1";
	$fdata["GoodName"] = "mail1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("kit_confirm","mail1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mail1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`mail1`";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatakit_confirm["mail1"] = $fdata;
//	mail2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "mail2";
	$fdata["GoodName"] = "mail2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("kit_confirm","mail2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mail2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`mail2`";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatakit_confirm["mail2"] = $fdata;
//	haisou_bangou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "haisou_bangou";
	$fdata["GoodName"] = "haisou_bangou";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","haisou_bangou");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "haisou_bangou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`haisou_bangou`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatakit_confirm["haisou_bangou"] = $fdata;
//	shipping_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "shipping_number";
	$fdata["GoodName"] = "shipping_number";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","shipping_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shipping_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`shipping_number`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatakit_confirm["shipping_number"] = $fdata;
//	arrival_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "arrival_date";
	$fdata["GoodName"] = "arrival_date";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","arrival_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "arrival_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`arrival_date`";

	
	
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




	$tdatakit_confirm["arrival_date"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`updated_at`";

	
	
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




	$tdatakit_confirm["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`updated_by`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatakit_confirm["updated_by"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("kit_confirm","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`status`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["DisplayField"] = "memo";

	
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




	$tdatakit_confirm["status"] = $fdata;


$tables_data["kit_confirm"]=&$tdatakit_confirm;
$field_labels["kit_confirm"] = &$fieldLabelskit_confirm;
$fieldToolTips["kit_confirm"] = &$fieldToolTipskit_confirm;
$placeHolders["kit_confirm"] = &$placeHolderskit_confirm;
$page_titles["kit_confirm"] = &$pageTitleskit_confirm;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["kit_confirm"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["kit_confirm"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_kit_confirm()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Eoc_takuhai`.`id`,  `Eoc_takuhai`.`reuse_box`,  `Eoc_takuhai`.`kit_detail`,  `Eoc_takuhai`.`kit_denpyou`,  `Eoc_takuhai`.`kit_huutou`,  `Eoc_takuhai`.`kit_S`,  `Eoc_takuhai`.`kit_M`,  `Eoc_takuhai`.`kit_L`,  `Eoc_takuhai`.`time_select_hidden`,  `Eoc_takuhai`.`warehouse_instruction`,  `Eoc_takuhai`.`delivery_slip_instruction`,  `Eoc_takuhai`.`user_tel`,  `Eoc_takuhai`.`user_mail`,  `Eoc_takuhai`.`ecc_id`,  `Eoc`.`kit_flag`,  `Eoc`.`name1`,  `Eoc`.`name2`,  `Eoc`.`zip1`,  `Eoc`.`zip2`,  `Eoc`.`address1`,  `Eoc`.`address2`,  `Eoc`.`address3`,  `Eoc`.`tel`,  `Eoc`.`tel2`,  `Eoc`.`mail1`,  `Eoc`.`mail2`,  `Eoc_takuhai`.`haisou_bangou`,  `Eoc_takuhai`.`shipping_number`,  `Eoc_takuhai`.`arrival_date`,  `Eoc_takuhai`.`updated_at`,  `Eoc_takuhai`.`updated_by`,  `Eoc_takuhai`.`status`";
$proto0["m_strFrom"] = "FROM `Eoc_takuhai`  INNER JOIN `Eoc` ON `Eoc_takuhai`.`ecc_id` = `Eoc`.`ecc_id`";
$proto0["m_strWhere"] = "(`Eoc`.`kit_flag` =1) AND (`Eoc_takuhai`.`status` =1)";
$proto0["m_strOrderBy"] = "ORDER BY `Eoc_takuhai`.`id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(`Eoc`.`kit_flag` =1) AND (`Eoc_takuhai`.`status` =1)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(`Eoc`.`kit_flag` =1) AND (`Eoc_takuhai`.`status` =1)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`Eoc`.`kit_flag` =1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "kit_flag",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "kit_confirm"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=1";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "`Eoc_takuhai`.`status` =1";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=1";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
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
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto10["m_sql"] = "`Eoc_takuhai`.`id`";
$proto10["m_srcTableName"] = "kit_confirm";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "reuse_box",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto12["m_sql"] = "`Eoc_takuhai`.`reuse_box`";
$proto12["m_srcTableName"] = "kit_confirm";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_detail",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto14["m_sql"] = "`Eoc_takuhai`.`kit_detail`";
$proto14["m_srcTableName"] = "kit_confirm";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_denpyou",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto16["m_sql"] = "`Eoc_takuhai`.`kit_denpyou`";
$proto16["m_srcTableName"] = "kit_confirm";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_huutou",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto18["m_sql"] = "`Eoc_takuhai`.`kit_huutou`";
$proto18["m_srcTableName"] = "kit_confirm";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_S",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto20["m_sql"] = "`Eoc_takuhai`.`kit_S`";
$proto20["m_srcTableName"] = "kit_confirm";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_M",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto22["m_sql"] = "`Eoc_takuhai`.`kit_M`";
$proto22["m_srcTableName"] = "kit_confirm";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_L",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto24["m_sql"] = "`Eoc_takuhai`.`kit_L`";
$proto24["m_srcTableName"] = "kit_confirm";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "time_select_hidden",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto26["m_sql"] = "`Eoc_takuhai`.`time_select_hidden`";
$proto26["m_srcTableName"] = "kit_confirm";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "warehouse_instruction",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto28["m_sql"] = "`Eoc_takuhai`.`warehouse_instruction`";
$proto28["m_srcTableName"] = "kit_confirm";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_slip_instruction",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto30["m_sql"] = "`Eoc_takuhai`.`delivery_slip_instruction`";
$proto30["m_srcTableName"] = "kit_confirm";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "user_tel",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto32["m_sql"] = "`Eoc_takuhai`.`user_tel`";
$proto32["m_srcTableName"] = "kit_confirm";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "user_mail",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto34["m_sql"] = "`Eoc_takuhai`.`user_mail`";
$proto34["m_srcTableName"] = "kit_confirm";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto36["m_sql"] = "`Eoc_takuhai`.`ecc_id`";
$proto36["m_srcTableName"] = "kit_confirm";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "kit_flag",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "kit_confirm"
));

$proto38["m_sql"] = "`Eoc`.`kit_flag`";
$proto38["m_srcTableName"] = "kit_confirm";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "name1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "kit_confirm"
));

$proto40["m_sql"] = "`Eoc`.`name1`";
$proto40["m_srcTableName"] = "kit_confirm";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "kit_confirm"
));

$proto42["m_sql"] = "`Eoc`.`name2`";
$proto42["m_srcTableName"] = "kit_confirm";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "zip1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "kit_confirm"
));

$proto44["m_sql"] = "`Eoc`.`zip1`";
$proto44["m_srcTableName"] = "kit_confirm";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "zip2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "kit_confirm"
));

$proto46["m_sql"] = "`Eoc`.`zip2`";
$proto46["m_srcTableName"] = "kit_confirm";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "address1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "kit_confirm"
));

$proto48["m_sql"] = "`Eoc`.`address1`";
$proto48["m_srcTableName"] = "kit_confirm";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "address2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "kit_confirm"
));

$proto50["m_sql"] = "`Eoc`.`address2`";
$proto50["m_srcTableName"] = "kit_confirm";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "address3",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "kit_confirm"
));

$proto52["m_sql"] = "`Eoc`.`address3`";
$proto52["m_srcTableName"] = "kit_confirm";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "tel",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "kit_confirm"
));

$proto54["m_sql"] = "`Eoc`.`tel`";
$proto54["m_srcTableName"] = "kit_confirm";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "tel2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "kit_confirm"
));

$proto56["m_sql"] = "`Eoc`.`tel2`";
$proto56["m_srcTableName"] = "kit_confirm";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "mail1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "kit_confirm"
));

$proto58["m_sql"] = "`Eoc`.`mail1`";
$proto58["m_srcTableName"] = "kit_confirm";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "mail2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "kit_confirm"
));

$proto60["m_sql"] = "`Eoc`.`mail2`";
$proto60["m_srcTableName"] = "kit_confirm";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "haisou_bangou",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto62["m_sql"] = "`Eoc_takuhai`.`haisou_bangou`";
$proto62["m_srcTableName"] = "kit_confirm";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "shipping_number",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto64["m_sql"] = "`Eoc_takuhai`.`shipping_number`";
$proto64["m_srcTableName"] = "kit_confirm";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "arrival_date",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto66["m_sql"] = "`Eoc_takuhai`.`arrival_date`";
$proto66["m_srcTableName"] = "kit_confirm";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto68["m_sql"] = "`Eoc_takuhai`.`updated_at`";
$proto68["m_srcTableName"] = "kit_confirm";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto70["m_sql"] = "`Eoc_takuhai`.`updated_by`";
$proto70["m_srcTableName"] = "kit_confirm";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto72["m_sql"] = "`Eoc_takuhai`.`status`";
$proto72["m_srcTableName"] = "kit_confirm";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto74=array();
$proto74["m_link"] = "SQLL_MAIN";
			$proto75=array();
$proto75["m_strName"] = "Eoc_takuhai";
$proto75["m_srcTableName"] = "kit_confirm";
$proto75["m_columns"] = array();
$proto75["m_columns"][] = "id";
$proto75["m_columns"][] = "brand_confirm";
$proto75["m_columns"][] = "number_of_times";
$proto75["m_columns"][] = "type_selection";
$proto75["m_columns"][] = "reuse_box";
$proto75["m_columns"][] = "kit_detail";
$proto75["m_columns"][] = "date_select";
$proto75["m_columns"][] = "time_select";
$proto75["m_columns"][] = "date_select_hidden";
$proto75["m_columns"][] = "time_select_hidden";
$proto75["m_columns"][] = "speed_box";
$proto75["m_columns"][] = "date_and_time";
$proto75["m_columns"][] = "date_and_time_hidden";
$proto75["m_columns"][] = "user_name";
$proto75["m_columns"][] = "user_name_kana";
$proto75["m_columns"][] = "user_tel";
$proto75["m_columns"][] = "user_mail";
$proto75["m_columns"][] = "user_yuubinn";
$proto75["m_columns"][] = "user_todou";
$proto75["m_columns"][] = "user_sikutyouson";
$proto75["m_columns"][] = "user_banti";
$proto75["m_columns"][] = "tel_mail_line";
$proto75["m_columns"][] = "bikou";
$proto75["m_columns"][] = "insurance_speed";
$proto75["m_columns"][] = "insurance";
$proto75["m_columns"][] = "mail_magazin";
$proto75["m_columns"][] = "anke_1";
$proto75["m_columns"][] = "anke_2";
$proto75["m_columns"][] = "anke_3";
$proto75["m_columns"][] = "mail_text";
$proto75["m_columns"][] = "REMOTE_HOST";
$proto75["m_columns"][] = "REMOTE_ADDR";
$proto75["m_columns"][] = "USER_AGENT";
$proto75["m_columns"][] = "HTTP_REFERER";
$proto75["m_columns"][] = "key_code";
$proto75["m_columns"][] = "cv_site";
$proto75["m_columns"][] = "cv_device";
$proto75["m_columns"][] = "cv_page";
$proto75["m_columns"][] = "cv_time";
$proto75["m_columns"][] = "ecc_id";
$proto75["m_columns"][] = "kit_denpyou";
$proto75["m_columns"][] = "kit_huutou";
$proto75["m_columns"][] = "kit_S";
$proto75["m_columns"][] = "kit_M";
$proto75["m_columns"][] = "kit_L";
$proto75["m_columns"][] = "warehouse_instruction";
$proto75["m_columns"][] = "delivery_slip_instruction";
$proto75["m_columns"][] = "haisou_bangou";
$proto75["m_columns"][] = "shipping_number";
$proto75["m_columns"][] = "arrival_date";
$proto75["m_columns"][] = "updated_at";
$proto75["m_columns"][] = "updated_by";
$proto75["m_columns"][] = "line_satei";
$proto75["m_columns"][] = "insurance_kingaku";
$proto75["m_columns"][] = "status";
$proto75["m_columns"][] = "hakosuu";
$proto75["m_columns"][] = "purchase_type";
$proto75["m_columns"][] = "seiyakukin";
$proto75["m_columns"][] = "received_time";
$proto75["m_columns"][] = "transfer_id";
$proto75["m_columns"][] = "price_error";
$proto75["m_columns"][] = "speed_num";
$proto75["m_columns"][] = "shuka_status";
$proto75["m_columns"][] = "shuka_error";
$proto75["m_columns"][] = "haisou_gyousha";
$proto75["m_columns"][] = "user_address1";
$proto75["m_columns"][] = "user_address2";
$proto75["m_columns"][] = "not_hi_shuka";
$proto75["m_columns"][] = "created_at";
$proto75["m_columns"][] = "is_many_product";
$proto75["m_columns"][] = "Eoc_trader_id";
$proto75["m_columns"][] = "service_users_id";
$proto75["m_columns"][] = "mypage_update_prohibited";
$proto75["m_columns"][] = "memo";
$proto75["m_columns"][] = "satei_start";
$proto75["m_columns"][] = "satei_end";
$proto75["m_columns"][] = "satei_start_by";
$proto75["m_columns"][] = "contract_at";
$proto75["m_columns"][] = "ad_param";
$proto75["m_columns"][] = "is_NJ_or_BJ";
$proto75["m_columns"][] = "shipping_date";
$obj = new SQLTable($proto75);

$proto74["m_table"] = $obj;
$proto74["m_sql"] = "`Eoc_takuhai`";
$proto74["m_alias"] = "";
$proto74["m_srcTableName"] = "kit_confirm";
$proto76=array();
$proto76["m_sql"] = "";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

$proto74["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto74);

$proto0["m_fromlist"][]=$obj;
												$proto78=array();
$proto78["m_link"] = "SQLL_INNERJOIN";
			$proto79=array();
$proto79["m_strName"] = "Eoc";
$proto79["m_srcTableName"] = "kit_confirm";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "ecc_id";
$proto79["m_columns"][] = "ecc_seq";
$proto79["m_columns"][] = "name1";
$proto79["m_columns"][] = "created_t";
$proto79["m_columns"][] = "registerd_id";
$proto79["m_columns"][] = "kaitori_staff_id";
$proto79["m_columns"][] = "name2";
$proto79["m_columns"][] = "wareki";
$proto79["m_columns"][] = "b1";
$proto79["m_columns"][] = "b2";
$proto79["m_columns"][] = "b3";
$proto79["m_columns"][] = "birth_day";
$proto79["m_columns"][] = "age";
$proto79["m_columns"][] = "zip";
$proto79["m_columns"][] = "zip1";
$proto79["m_columns"][] = "zip2";
$proto79["m_columns"][] = "address1";
$proto79["m_columns"][] = "address2";
$proto79["m_columns"][] = "address3";
$proto79["m_columns"][] = "tel";
$proto79["m_columns"][] = "tel2";
$proto79["m_columns"][] = "mail1";
$proto79["m_columns"][] = "mail2";
$proto79["m_columns"][] = "address_code";
$proto79["m_columns"][] = "bank_name";
$proto79["m_columns"][] = "bank_blunch_code";
$proto79["m_columns"][] = "bank_yokin_shubetu";
$proto79["m_columns"][] = "bank_account";
$proto79["m_columns"][] = "bank_acoount_name";
$proto79["m_columns"][] = "haisou_bangou";
$proto79["m_columns"][] = "sise_houhou";
$proto79["m_columns"][] = "hentou_houhou";
$proto79["m_columns"][] = "hentou_houhou_time";
$proto79["m_columns"][] = "mousikomi_id";
$proto79["m_columns"][] = "hituyou_shorui";
$proto79["m_columns"][] = "seiyaku_fuseiritu";
$proto79["m_columns"][] = "mitumori_taku";
$proto79["m_columns"][] = "seacanse";
$proto79["m_columns"][] = "remark";
$proto79["m_columns"][] = "type";
$proto79["m_columns"][] = "sales_flag";
$proto79["m_columns"][] = "src_type";
$proto79["m_columns"][] = "liquidation_shop_code";
$proto79["m_columns"][] = "insurance_amount_print";
$proto79["m_columns"][] = "jis_code";
$proto79["m_columns"][] = "updated_at";
$proto79["m_columns"][] = "_registerd_id";
$proto79["m_columns"][] = "mail_check_type";
$proto79["m_columns"][] = "purchase_type";
$proto79["m_columns"][] = "sex";
$proto79["m_columns"][] = "m_tel";
$proto79["m_columns"][] = "fax";
$proto79["m_columns"][] = "chigin_kaitori";
$proto79["m_columns"][] = "option1";
$proto79["m_columns"][] = "option2";
$proto79["m_columns"][] = "option3";
$proto79["m_columns"][] = "option4";
$proto79["m_columns"][] = "option5";
$proto79["m_columns"][] = "option6";
$proto79["m_columns"][] = "option7";
$proto79["m_columns"][] = "option8";
$proto79["m_columns"][] = "option9";
$proto79["m_columns"][] = "option10";
$proto79["m_columns"][] = "option11";
$proto79["m_columns"][] = "option12";
$proto79["m_columns"][] = "option13";
$proto79["m_columns"][] = "rakuda_csv_flag";
$proto79["m_columns"][] = "EOC_COURIER_CHECK";
$proto79["m_columns"][] = "EOC_SIZE";
$proto79["m_columns"][] = "EOC_NUMBER";
$proto79["m_columns"][] = "EOC_REUSE";
$proto79["m_columns"][] = "EOC__DELIVERY_DATES";
$proto79["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto79["m_columns"][] = "FIRST_NAME2";
$proto79["m_columns"][] = "LAST_NAME2";
$proto79["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto79["m_columns"][] = "EOC__BOX_NUMBER";
$proto79["m_columns"][] = "FIRST_NAME_KANA";
$proto79["m_columns"][] = "LAST_NAME_KANA";
$proto79["m_columns"][] = "FLAG_SPEED";
$proto79["m_columns"][] = "SEARCH_MEDIA";
$proto79["m_columns"][] = "SEARCH_SITE";
$proto79["m_columns"][] = "UN_REACHABLE";
$proto79["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto79["m_columns"][] = "FLG_MAIL_OTHER";
$proto79["m_columns"][] = "ALLSEIYAKU";
$proto79["m_columns"][] = "ICHIBUSEIYAKU";
$proto79["m_columns"][] = "seiyakukin";
$proto79["m_columns"][] = "kaitorihuka";
$proto79["m_columns"][] = "awazu_date";
$proto79["m_columns"][] = "seiyaku_price";
$proto79["m_columns"][] = "eoc_search_keyword";
$proto79["m_columns"][] = "sonota";
$proto79["m_columns"][] = "size_kosuu";
$proto79["m_columns"][] = "sagawa_shuuka_flag";
$proto79["m_columns"][] = "line_check";
$proto79["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto79["m_columns"][] = "kaitori_sougak";
$proto79["m_columns"][] = "flag";
$proto79["m_columns"][] = "key_code";
$proto79["m_columns"][] = "dm_check_type";
$proto79["m_columns"][] = "kit_flag";
$proto79["m_columns"][] = "kit_done_flag";
$proto79["m_columns"][] = "bank_details_code";
$proto79["m_columns"][] = "bank_details_blunch_name";
$proto79["m_columns"][] = "bank_details_blunch_code";
$proto79["m_columns"][] = "bank_details_account_number";
$proto79["m_columns"][] = "bank_details_symbol";
$proto79["m_columns"][] = "bank_details_number";
$proto79["m_columns"][] = "bank_details_account_name";
$proto79["m_columns"][] = "bank_details_deposit_type";
$proto79["m_columns"][] = "mypage_id";
$proto79["m_columns"][] = "UN_REACHABLE_brand";
$proto79["m_columns"][] = "sagawa_haisou_hoken";
$proto79["m_columns"][] = "transfer_confirm";
$proto79["m_columns"][] = "outside_bank";
$proto79["m_columns"][] = "new_name";
$proto79["m_columns"][] = "letterpack";
$proto79["m_columns"][] = "satei_saisoku_2_days";
$proto79["m_columns"][] = "satei_saisoku_7_days";
$proto79["m_columns"][] = "accept_flag";
$proto79["m_columns"][] = "delivery_flag";
$proto79["m_columns"][] = "refining_weight";
$proto79["m_columns"][] = "line_chat_url";
$proto79["m_columns"][] = "royal_customer_status";
$proto79["m_columns"][] = "is_business_customer";
$proto79["m_columns"][] = "is_exist_haisouhosyo";
$proto79["m_columns"][] = "meigi_hankaku_kana";
$proto79["m_columns"][] = "building_types";
$proto79["m_columns"][] = "dwelling_types";
$proto79["m_columns"][] = "is_yamato_csv";
$proto79["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "INNER JOIN `Eoc` ON `Eoc_takuhai`.`ecc_id` = `Eoc`.`ecc_id`";
$proto78["m_alias"] = "";
$proto78["m_srcTableName"] = "kit_confirm";
$proto80=array();
$proto80["m_sql"] = "`Eoc_takuhai`.`ecc_id` = `Eoc`.`ecc_id`";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "= `Eoc`.`ecc_id`";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto82=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "kit_confirm"
));

$proto82["m_column"]=$obj;
$proto82["m_bAsc"] = 0;
$proto82["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto82);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="kit_confirm";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_kit_confirm = createSqlQuery_kit_confirm();


	
		;

																																

$tdatakit_confirm[".sqlquery"] = $queryData_kit_confirm;

include_once(getabspath("include/kit_confirm_events.php"));
$tableEvents["kit_confirm"] = new eventclass_kit_confirm;
$tdatakit_confirm[".hasEvents"] = true;

?>