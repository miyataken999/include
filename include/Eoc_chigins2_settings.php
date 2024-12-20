<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_chigins2 = array();
	$tdataEoc_chigins2[".truncateText"] = true;
	$tdataEoc_chigins2[".NumberOfChars"] = 80;
	$tdataEoc_chigins2[".ShortName"] = "Eoc_chigins2";
	$tdataEoc_chigins2[".OwnerID"] = "";
	$tdataEoc_chigins2[".OriginalTable"] = "Eoc_chigins2";

//	field labels
$fieldLabelsEoc_chigins2 = array();
$fieldToolTipsEoc_chigins2 = array();
$pageTitlesEoc_chigins2 = array();
$placeHoldersEoc_chigins2 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_chigins2["Japanese"] = array();
	$fieldToolTipsEoc_chigins2["Japanese"] = array();
	$placeHoldersEoc_chigins2["Japanese"] = array();
	$pageTitlesEoc_chigins2["Japanese"] = array();
	$fieldLabelsEoc_chigins2["Japanese"]["chigin_id"] = "地金SEQ";
	$fieldToolTipsEoc_chigins2["Japanese"]["chigin_id"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["chigin_id"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["chigin_ecc_id"] = "Chigin Ecc Id";
	$fieldToolTipsEoc_chigins2["Japanese"]["chigin_ecc_id"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["chigin_ecc_id"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["MATERIAL"] = "MATERIAL";
	$fieldToolTipsEoc_chigins2["Japanese"]["MATERIAL"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["MATERIAL"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["ITEM"] = "コメント/メモ";
	$fieldToolTipsEoc_chigins2["Japanese"]["ITEM"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["ITEM"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["remark"] = "Remark";
	$fieldToolTipsEoc_chigins2["Japanese"]["remark"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["remark"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["WEIGHT"] = "重さ";
	$fieldToolTipsEoc_chigins2["Japanese"]["WEIGHT"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["WEIGHT"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["PER_PRICE"] = "金性単価";
	$fieldToolTipsEoc_chigins2["Japanese"]["PER_PRICE"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["PER_PRICE"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["AMOUNT_MONEY"] = "買取額";
	$fieldToolTipsEoc_chigins2["Japanese"]["AMOUNT_MONEY"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["AMOUNT_MONEY"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["gram"] = "グラム";
	$fieldToolTipsEoc_chigins2["Japanese"]["gram"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["gram"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["eq"] = "＝";
	$fieldToolTipsEoc_chigins2["Japanese"]["eq"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["eq"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["eq2"] = "＝";
	$fieldToolTipsEoc_chigins2["Japanese"]["eq2"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["eq2"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["twice"] = "×";
	$fieldToolTipsEoc_chigins2["Japanese"]["twice"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["twice"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["en"] = "円";
	$fieldToolTipsEoc_chigins2["Japanese"]["en"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["en"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["en2"] = "円";
	$fieldToolTipsEoc_chigins2["Japanese"]["en2"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["en2"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["_status"] = "ステータス";
	$fieldToolTipsEoc_chigins2["Japanese"]["_status"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["_status"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsEoc_chigins2["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["ecc_seq"] = "顧客番号";
	$fieldToolTipsEoc_chigins2["Japanese"]["ecc_seq"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["ecc_seq"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsEoc_chigins2["Japanese"]["create_at"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["create_at"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsEoc_chigins2["Japanese"]["updated_by"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["updated_by"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsEoc_chigins2["Japanese"]["created_by"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["created_by"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsEoc_chigins2["Japanese"]["update_at"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["update_at"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["label_output_flag"] = "ラベル出力";
	$fieldToolTipsEoc_chigins2["Japanese"]["label_output_flag"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["label_output_flag"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["product_num"] = "ブランドID";
	$fieldToolTipsEoc_chigins2["Japanese"]["product_num"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["product_num"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["category_id"] = "大カテ";
	$fieldToolTipsEoc_chigins2["Japanese"]["category_id"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["category_id"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["sub_category_id1"] = "中カテ";
	$fieldToolTipsEoc_chigins2["Japanese"]["sub_category_id1"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["sub_category_id1"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["yahoo_sex"] = "性別";
	$fieldToolTipsEoc_chigins2["Japanese"]["yahoo_sex"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["yahoo_sex"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["line"] = "ライン";
	$fieldToolTipsEoc_chigins2["Japanese"]["line"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["line"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["item_name"] = "アイテム名";
	$fieldToolTipsEoc_chigins2["Japanese"]["item_name"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["item_name"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["motif"] = "モチーフ";
	$fieldToolTipsEoc_chigins2["Japanese"]["motif"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["motif"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsEoc_chigins2["Japanese"]["product_id"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["product_id"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["status"] = "ステータス";
	$fieldToolTipsEoc_chigins2["Japanese"]["status"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["status"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["serial_number"] = "機番";
	$fieldToolTipsEoc_chigins2["Japanese"]["serial_number"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["serial_number"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["yahoo_kataban"] = "型番";
	$fieldToolTipsEoc_chigins2["Japanese"]["yahoo_kataban"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["yahoo_kataban"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["stamp"] = "刻印";
	$fieldToolTipsEoc_chigins2["Japanese"]["stamp"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["stamp"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["Setting"] = "セッティング";
	$fieldToolTipsEoc_chigins2["Japanese"]["Setting"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["Setting"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["Destination_selling"] = "売り先";
	$fieldToolTipsEoc_chigins2["Japanese"]["Destination_selling"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["Destination_selling"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["Finish"] = "仕上";
	$fieldToolTipsEoc_chigins2["Japanese"]["Finish"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["Finish"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["Discrimination"] = "鑑別";
	$fieldToolTipsEoc_chigins2["Japanese"]["Discrimination"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["Discrimination"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["accessories"] = "付属品";
	$fieldToolTipsEoc_chigins2["Japanese"]["accessories"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["accessories"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["yahoo_sankou_uwadai"] = "参考上代";
	$fieldToolTipsEoc_chigins2["Japanese"]["yahoo_sankou_uwadai"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["yahoo_sankou_uwadai"] = "";
	$fieldLabelsEoc_chigins2["Japanese"]["sales_price"] = "販売額";
	$fieldToolTipsEoc_chigins2["Japanese"]["sales_price"] = "";
	$placeHoldersEoc_chigins2["Japanese"]["sales_price"] = "";
	if (count($fieldToolTipsEoc_chigins2["Japanese"]))
		$tdataEoc_chigins2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_chigins2[""] = array();
	$fieldToolTipsEoc_chigins2[""] = array();
	$placeHoldersEoc_chigins2[""] = array();
	$pageTitlesEoc_chigins2[""] = array();
	if (count($fieldToolTipsEoc_chigins2[""]))
		$tdataEoc_chigins2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_chigins2["English"] = array();
	$fieldToolTipsEoc_chigins2["English"] = array();
	$placeHoldersEoc_chigins2["English"] = array();
	$pageTitlesEoc_chigins2["English"] = array();
	if (count($fieldToolTipsEoc_chigins2["English"]))
		$tdataEoc_chigins2[".isUseToolTips"] = true;
}


	$tdataEoc_chigins2[".NCSearch"] = true;



$tdataEoc_chigins2[".shortTableName"] = "Eoc_chigins2";
$tdataEoc_chigins2[".nSecOptions"] = 0;
$tdataEoc_chigins2[".recsPerRowPrint"] = 1;
$tdataEoc_chigins2[".mainTableOwnerID"] = "";
$tdataEoc_chigins2[".moveNext"] = 1;
$tdataEoc_chigins2[".entityType"] = 0;

$tdataEoc_chigins2[".strOriginalTableName"] = "Eoc_chigins2";

	



$tdataEoc_chigins2[".showAddInPopup"] = false;

$tdataEoc_chigins2[".showEditInPopup"] = false;

$tdataEoc_chigins2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_chigins2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_chigins2[".fieldsForRegister"] = array();

$tdataEoc_chigins2[".listAjax"] = false;

	$tdataEoc_chigins2[".audit"] = true;

	$tdataEoc_chigins2[".locking"] = false;

$tdataEoc_chigins2[".edit"] = true;
$tdataEoc_chigins2[".afterEditAction"] = 1;
$tdataEoc_chigins2[".closePopupAfterEdit"] = 1;
$tdataEoc_chigins2[".afterEditActionDetTable"] = "";

$tdataEoc_chigins2[".add"] = true;
$tdataEoc_chigins2[".afterAddAction"] = 1;
$tdataEoc_chigins2[".closePopupAfterAdd"] = 1;
$tdataEoc_chigins2[".afterAddActionDetTable"] = "";

$tdataEoc_chigins2[".list"] = true;

$tdataEoc_chigins2[".inlineEdit"] = true;

$tdataEoc_chigins2[".updateSelected"] = true;

$tdataEoc_chigins2[".reorderRecordsByHeader"] = true;
$tdataEoc_chigins2[".createSortByDropdown"] = true;
$tdataEoc_chigins2[".strSortControlSettingsJSON"] = "";

$tdataEoc_chigins2[".strClickActionJSON"] = "{\"fields\":{\"AMOUNT_MONEY\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ITEM\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"MATERIAL\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"PER_PRICE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"WEIGHT\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"_status\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"chigin_ecc_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"chigin_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ecc_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ecc_seq\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"en\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"en2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"eq\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"eq2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"gram\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"remark\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"twice\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";


$tdataEoc_chigins2[".inlineAdd"] = true;
$tdataEoc_chigins2[".copy"] = true;
$tdataEoc_chigins2[".view"] = true;

$tdataEoc_chigins2[".import"] = true;

$tdataEoc_chigins2[".exportTo"] = true;

$tdataEoc_chigins2[".printFriendly"] = true;

$tdataEoc_chigins2[".delete"] = true;

$tdataEoc_chigins2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_chigins2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_chigins2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_chigins2[".searchSaving"] = false;
//

$tdataEoc_chigins2[".showSearchPanel"] = true;
		$tdataEoc_chigins2[".flexibleSearch"] = true;

$tdataEoc_chigins2[".isUseAjaxSuggest"] = true;

$tdataEoc_chigins2[".rowHighlite"] = true;



																																																											
									
					
						
					
					
					
					
																																																																																																																																																											

$tdataEoc_chigins2[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_chigins2[".buttonsAdded"] = true;

$tdataEoc_chigins2[".addPageEvents"] = true;

// use timepicker for search panel
$tdataEoc_chigins2[".isUseTimeForSearch"] = false;



$tdataEoc_chigins2[".badgeColor"] = "dc143c";


$tdataEoc_chigins2[".allSearchFields"] = array();
$tdataEoc_chigins2[".filterFields"] = array();
$tdataEoc_chigins2[".requiredSearchFields"] = array();

$tdataEoc_chigins2[".allSearchFields"][] = "product_id";
	$tdataEoc_chigins2[".allSearchFields"][] = "status";
	$tdataEoc_chigins2[".allSearchFields"][] = "serial_number";
	$tdataEoc_chigins2[".allSearchFields"][] = "yahoo_kataban";
	$tdataEoc_chigins2[".allSearchFields"][] = "stamp";
	$tdataEoc_chigins2[".allSearchFields"][] = "Setting";
	$tdataEoc_chigins2[".allSearchFields"][] = "Destination_selling";
	$tdataEoc_chigins2[".allSearchFields"][] = "Finish";
	$tdataEoc_chigins2[".allSearchFields"][] = "Discrimination";
	$tdataEoc_chigins2[".allSearchFields"][] = "accessories";
	$tdataEoc_chigins2[".allSearchFields"][] = "yahoo_sankou_uwadai";
	$tdataEoc_chigins2[".allSearchFields"][] = "sales_price";
	$tdataEoc_chigins2[".allSearchFields"][] = "create_at";
	$tdataEoc_chigins2[".allSearchFields"][] = "updated_by";
	$tdataEoc_chigins2[".allSearchFields"][] = "created_by";
	$tdataEoc_chigins2[".allSearchFields"][] = "update_at";
	$tdataEoc_chigins2[".allSearchFields"][] = "label_output_flag";
	$tdataEoc_chigins2[".allSearchFields"][] = "product_num";
	$tdataEoc_chigins2[".allSearchFields"][] = "category_id";
	$tdataEoc_chigins2[".allSearchFields"][] = "sub_category_id1";
	$tdataEoc_chigins2[".allSearchFields"][] = "yahoo_sex";
	$tdataEoc_chigins2[".allSearchFields"][] = "line";
	$tdataEoc_chigins2[".allSearchFields"][] = "item_name";
	$tdataEoc_chigins2[".allSearchFields"][] = "motif";
	$tdataEoc_chigins2[".allSearchFields"][] = "chigin_id";
	$tdataEoc_chigins2[".allSearchFields"][] = "MATERIAL";
	$tdataEoc_chigins2[".allSearchFields"][] = "ITEM";
	$tdataEoc_chigins2[".allSearchFields"][] = "WEIGHT";
	$tdataEoc_chigins2[".allSearchFields"][] = "gram";
	$tdataEoc_chigins2[".allSearchFields"][] = "twice";
	$tdataEoc_chigins2[".allSearchFields"][] = "PER_PRICE";
	$tdataEoc_chigins2[".allSearchFields"][] = "en";
	$tdataEoc_chigins2[".allSearchFields"][] = "eq2";
	$tdataEoc_chigins2[".allSearchFields"][] = "AMOUNT_MONEY";
	$tdataEoc_chigins2[".allSearchFields"][] = "en2";
	

$tdataEoc_chigins2[".googleLikeFields"] = array();
$tdataEoc_chigins2[".googleLikeFields"][] = "chigin_id";
$tdataEoc_chigins2[".googleLikeFields"][] = "MATERIAL";
$tdataEoc_chigins2[".googleLikeFields"][] = "ITEM";
$tdataEoc_chigins2[".googleLikeFields"][] = "WEIGHT";
$tdataEoc_chigins2[".googleLikeFields"][] = "PER_PRICE";
$tdataEoc_chigins2[".googleLikeFields"][] = "AMOUNT_MONEY";
$tdataEoc_chigins2[".googleLikeFields"][] = "gram";
$tdataEoc_chigins2[".googleLikeFields"][] = "eq2";
$tdataEoc_chigins2[".googleLikeFields"][] = "twice";
$tdataEoc_chigins2[".googleLikeFields"][] = "en";
$tdataEoc_chigins2[".googleLikeFields"][] = "en2";
$tdataEoc_chigins2[".googleLikeFields"][] = "_status";
$tdataEoc_chigins2[".googleLikeFields"][] = "create_at";
$tdataEoc_chigins2[".googleLikeFields"][] = "updated_by";
$tdataEoc_chigins2[".googleLikeFields"][] = "created_by";
$tdataEoc_chigins2[".googleLikeFields"][] = "update_at";
$tdataEoc_chigins2[".googleLikeFields"][] = "label_output_flag";
$tdataEoc_chigins2[".googleLikeFields"][] = "product_num";
$tdataEoc_chigins2[".googleLikeFields"][] = "category_id";
$tdataEoc_chigins2[".googleLikeFields"][] = "sub_category_id1";
$tdataEoc_chigins2[".googleLikeFields"][] = "yahoo_sex";
$tdataEoc_chigins2[".googleLikeFields"][] = "line";
$tdataEoc_chigins2[".googleLikeFields"][] = "item_name";
$tdataEoc_chigins2[".googleLikeFields"][] = "motif";
$tdataEoc_chigins2[".googleLikeFields"][] = "product_id";
$tdataEoc_chigins2[".googleLikeFields"][] = "status";
$tdataEoc_chigins2[".googleLikeFields"][] = "serial_number";
$tdataEoc_chigins2[".googleLikeFields"][] = "yahoo_kataban";
$tdataEoc_chigins2[".googleLikeFields"][] = "stamp";
$tdataEoc_chigins2[".googleLikeFields"][] = "Setting";
$tdataEoc_chigins2[".googleLikeFields"][] = "Destination_selling";
$tdataEoc_chigins2[".googleLikeFields"][] = "Finish";
$tdataEoc_chigins2[".googleLikeFields"][] = "Discrimination";
$tdataEoc_chigins2[".googleLikeFields"][] = "accessories";
$tdataEoc_chigins2[".googleLikeFields"][] = "yahoo_sankou_uwadai";
$tdataEoc_chigins2[".googleLikeFields"][] = "sales_price";

$tdataEoc_chigins2[".panelSearchFields"] = array();
$tdataEoc_chigins2[".searchPanelOptions"] = array();
$tdataEoc_chigins2[".panelSearchFields"][] = "_status";
	$tdataEoc_chigins2[".panelSearchFields"][] = "chigin_id";
	$tdataEoc_chigins2[".panelSearchFields"][] = "MATERIAL";
	$tdataEoc_chigins2[".panelSearchFields"][] = "ITEM";
	$tdataEoc_chigins2[".panelSearchFields"][] = "WEIGHT";
	$tdataEoc_chigins2[".panelSearchFields"][] = "gram";
	$tdataEoc_chigins2[".panelSearchFields"][] = "twice";
	$tdataEoc_chigins2[".panelSearchFields"][] = "PER_PRICE";
	$tdataEoc_chigins2[".panelSearchFields"][] = "en";
	$tdataEoc_chigins2[".panelSearchFields"][] = "eq2";
	$tdataEoc_chigins2[".panelSearchFields"][] = "AMOUNT_MONEY";
	$tdataEoc_chigins2[".panelSearchFields"][] = "en2";
	
$tdataEoc_chigins2[".advSearchFields"] = array();
$tdataEoc_chigins2[".advSearchFields"][] = "product_id";
$tdataEoc_chigins2[".advSearchFields"][] = "status";
$tdataEoc_chigins2[".advSearchFields"][] = "serial_number";
$tdataEoc_chigins2[".advSearchFields"][] = "yahoo_kataban";
$tdataEoc_chigins2[".advSearchFields"][] = "stamp";
$tdataEoc_chigins2[".advSearchFields"][] = "Setting";
$tdataEoc_chigins2[".advSearchFields"][] = "Destination_selling";
$tdataEoc_chigins2[".advSearchFields"][] = "Finish";
$tdataEoc_chigins2[".advSearchFields"][] = "Discrimination";
$tdataEoc_chigins2[".advSearchFields"][] = "accessories";
$tdataEoc_chigins2[".advSearchFields"][] = "yahoo_sankou_uwadai";
$tdataEoc_chigins2[".advSearchFields"][] = "sales_price";
$tdataEoc_chigins2[".advSearchFields"][] = "create_at";
$tdataEoc_chigins2[".advSearchFields"][] = "updated_by";
$tdataEoc_chigins2[".advSearchFields"][] = "created_by";
$tdataEoc_chigins2[".advSearchFields"][] = "update_at";
$tdataEoc_chigins2[".advSearchFields"][] = "label_output_flag";
$tdataEoc_chigins2[".advSearchFields"][] = "product_num";
$tdataEoc_chigins2[".advSearchFields"][] = "category_id";
$tdataEoc_chigins2[".advSearchFields"][] = "sub_category_id1";
$tdataEoc_chigins2[".advSearchFields"][] = "yahoo_sex";
$tdataEoc_chigins2[".advSearchFields"][] = "line";
$tdataEoc_chigins2[".advSearchFields"][] = "item_name";
$tdataEoc_chigins2[".advSearchFields"][] = "motif";
$tdataEoc_chigins2[".advSearchFields"][] = "chigin_id";
$tdataEoc_chigins2[".advSearchFields"][] = "MATERIAL";
$tdataEoc_chigins2[".advSearchFields"][] = "ITEM";
$tdataEoc_chigins2[".advSearchFields"][] = "WEIGHT";
$tdataEoc_chigins2[".advSearchFields"][] = "gram";
$tdataEoc_chigins2[".advSearchFields"][] = "twice";
$tdataEoc_chigins2[".advSearchFields"][] = "PER_PRICE";
$tdataEoc_chigins2[".advSearchFields"][] = "en";
$tdataEoc_chigins2[".advSearchFields"][] = "eq2";
$tdataEoc_chigins2[".advSearchFields"][] = "AMOUNT_MONEY";
$tdataEoc_chigins2[".advSearchFields"][] = "en2";

$tdataEoc_chigins2[".tableType"] = "list";

$tdataEoc_chigins2[".printerPageOrientation"] = 0;
$tdataEoc_chigins2[".nPrinterPageScale"] = 100;

$tdataEoc_chigins2[".nPrinterSplitRecords"] = 40;

$tdataEoc_chigins2[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_chigins2[".geocodingEnabled"] = false;





$tdataEoc_chigins2[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdataEoc_chigins2[".totalsFields"] = array();
$tdataEoc_chigins2[".totalsFields"][] = array(
	"fName" => "AMOUNT_MONEY",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Number');

$tdataEoc_chigins2[".pageSize"] = 20;

$tdataEoc_chigins2[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Eoc_chigins2`.`chigin_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_chigins2[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_chigins2[".orderindexes"] = array();
$tdataEoc_chigins2[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`Eoc_chigins2`.`chigin_id`");

$tdataEoc_chigins2[".sqlHead"] = "SELECT `Eoc_chigins2`.`chigin_id`,  `Eoc_chigins2`.`chigin_ecc_id`,  `Eoc_chigins2`.`MATERIAL`,  `Eoc_chigins2`.`ITEM`,  `Eoc_chigins2`.`remark`,  `Eoc_chigins2`.`WEIGHT`,  `Eoc_chigins2`.`PER_PRICE`,  `Eoc_chigins2`.`AMOUNT_MONEY`,  `Eoc_chigins2`.`gram`,  `Eoc_chigins2`.`eq`,  `Eoc_chigins2`.`eq2`,  `Eoc_chigins2`.`twice`,  `Eoc_chigins2`.`en`,  `Eoc_chigins2`.`en2`,  `Eoc_chigins2`.`_status`,  `Eoc`.`ecc_id`,  `Eoc`.`ecc_seq`,  `Eoc_chigins2`.`create_at`,  `Eoc_chigins2`.`updated_by`,  `Eoc_chigins2`.`created_by`,  `Eoc_chigins2`.`update_at`,  `Eoc_chigins2`.`label_output_flag`,  `Eoc_chigins2`.`product_num`,  `Eoc_chigins2`.`category_id`,  `Eoc_chigins2`.`sub_category_id1`,  `Eoc_chigins2`.`yahoo_sex`,  `Eoc_chigins2`.`line`,  `Eoc_chigins2`.`item_name`,  `Eoc_chigins2`.`motif`,  `Eoc_chigins2`.`product_id`,  `Eoc_chigins2`.`status`,  `Eoc_chigins2`.`serial_number`,  `Eoc_chigins2`.`yahoo_kataban`,  `Eoc_chigins2`.`stamp`,  `Eoc_chigins2`.`Setting`,  `Eoc_chigins2`.`Destination_selling`,  `Eoc_chigins2`.`Finish`,  `Eoc_chigins2`.`Discrimination`,  `Eoc_chigins2`.`accessories`,  `Eoc_chigins2`.`yahoo_sankou_uwadai`,  `Eoc_chigins2`.`sales_price`";
$tdataEoc_chigins2[".sqlFrom"] = "FROM `Eoc_chigins2`  INNER JOIN `Eoc` ON `Eoc_chigins2`.`chigin_ecc_id` = `Eoc`.`ecc_id`";
$tdataEoc_chigins2[".sqlWhereExpr"] = "";
$tdataEoc_chigins2[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_chigins2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_chigins2[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_chigins2[".highlightSearchResults"] = true;

$tableKeysEoc_chigins2 = array();
$tableKeysEoc_chigins2[] = "chigin_id";
$tdataEoc_chigins2[".Keys"] = $tableKeysEoc_chigins2;

$tdataEoc_chigins2[".listFields"] = array();
$tdataEoc_chigins2[".listFields"][] = "status";
$tdataEoc_chigins2[".listFields"][] = "product_id";
$tdataEoc_chigins2[".listFields"][] = "chigin_id";
$tdataEoc_chigins2[".listFields"][] = "label_output_flag";
$tdataEoc_chigins2[".listFields"][] = "product_num";
$tdataEoc_chigins2[".listFields"][] = "category_id";
$tdataEoc_chigins2[".listFields"][] = "sub_category_id1";
$tdataEoc_chigins2[".listFields"][] = "yahoo_sex";
$tdataEoc_chigins2[".listFields"][] = "line";
$tdataEoc_chigins2[".listFields"][] = "item_name";
$tdataEoc_chigins2[".listFields"][] = "serial_number";
$tdataEoc_chigins2[".listFields"][] = "yahoo_kataban";
$tdataEoc_chigins2[".listFields"][] = "stamp";
$tdataEoc_chigins2[".listFields"][] = "motif";
$tdataEoc_chigins2[".listFields"][] = "Setting";
$tdataEoc_chigins2[".listFields"][] = "Destination_selling";
$tdataEoc_chigins2[".listFields"][] = "Finish";
$tdataEoc_chigins2[".listFields"][] = "Discrimination";
$tdataEoc_chigins2[".listFields"][] = "accessories";
$tdataEoc_chigins2[".listFields"][] = "MATERIAL";
$tdataEoc_chigins2[".listFields"][] = "ITEM";
$tdataEoc_chigins2[".listFields"][] = "WEIGHT";
$tdataEoc_chigins2[".listFields"][] = "gram";
$tdataEoc_chigins2[".listFields"][] = "PER_PRICE";
$tdataEoc_chigins2[".listFields"][] = "AMOUNT_MONEY";
$tdataEoc_chigins2[".listFields"][] = "sales_price";
$tdataEoc_chigins2[".listFields"][] = "yahoo_sankou_uwadai";
$tdataEoc_chigins2[".listFields"][] = "created_by";
$tdataEoc_chigins2[".listFields"][] = "create_at";
$tdataEoc_chigins2[".listFields"][] = "updated_by";
$tdataEoc_chigins2[".listFields"][] = "update_at";

$tdataEoc_chigins2[".hideMobileList"] = array();


$tdataEoc_chigins2[".viewFields"] = array();
$tdataEoc_chigins2[".viewFields"][] = "status";
$tdataEoc_chigins2[".viewFields"][] = "serial_number";
$tdataEoc_chigins2[".viewFields"][] = "yahoo_kataban";
$tdataEoc_chigins2[".viewFields"][] = "stamp";
$tdataEoc_chigins2[".viewFields"][] = "Setting";
$tdataEoc_chigins2[".viewFields"][] = "Destination_selling";
$tdataEoc_chigins2[".viewFields"][] = "Finish";
$tdataEoc_chigins2[".viewFields"][] = "Discrimination";
$tdataEoc_chigins2[".viewFields"][] = "accessories";
$tdataEoc_chigins2[".viewFields"][] = "yahoo_sankou_uwadai";
$tdataEoc_chigins2[".viewFields"][] = "sales_price";
$tdataEoc_chigins2[".viewFields"][] = "create_at";
$tdataEoc_chigins2[".viewFields"][] = "updated_by";
$tdataEoc_chigins2[".viewFields"][] = "created_by";
$tdataEoc_chigins2[".viewFields"][] = "update_at";
$tdataEoc_chigins2[".viewFields"][] = "label_output_flag";
$tdataEoc_chigins2[".viewFields"][] = "product_num";
$tdataEoc_chigins2[".viewFields"][] = "category_id";
$tdataEoc_chigins2[".viewFields"][] = "sub_category_id1";
$tdataEoc_chigins2[".viewFields"][] = "yahoo_sex";
$tdataEoc_chigins2[".viewFields"][] = "line";
$tdataEoc_chigins2[".viewFields"][] = "item_name";
$tdataEoc_chigins2[".viewFields"][] = "motif";
$tdataEoc_chigins2[".viewFields"][] = "chigin_id";
$tdataEoc_chigins2[".viewFields"][] = "MATERIAL";
$tdataEoc_chigins2[".viewFields"][] = "ITEM";
$tdataEoc_chigins2[".viewFields"][] = "WEIGHT";
$tdataEoc_chigins2[".viewFields"][] = "gram";
$tdataEoc_chigins2[".viewFields"][] = "twice";
$tdataEoc_chigins2[".viewFields"][] = "PER_PRICE";
$tdataEoc_chigins2[".viewFields"][] = "en";
$tdataEoc_chigins2[".viewFields"][] = "eq2";
$tdataEoc_chigins2[".viewFields"][] = "AMOUNT_MONEY";
$tdataEoc_chigins2[".viewFields"][] = "en2";

$tdataEoc_chigins2[".addFields"] = array();
$tdataEoc_chigins2[".addFields"][] = "create_at";
$tdataEoc_chigins2[".addFields"][] = "updated_by";
$tdataEoc_chigins2[".addFields"][] = "created_by";
$tdataEoc_chigins2[".addFields"][] = "update_at";
$tdataEoc_chigins2[".addFields"][] = "label_output_flag";
$tdataEoc_chigins2[".addFields"][] = "product_num";
$tdataEoc_chigins2[".addFields"][] = "category_id";
$tdataEoc_chigins2[".addFields"][] = "sub_category_id1";
$tdataEoc_chigins2[".addFields"][] = "yahoo_sex";
$tdataEoc_chigins2[".addFields"][] = "line";
$tdataEoc_chigins2[".addFields"][] = "item_name";
$tdataEoc_chigins2[".addFields"][] = "motif";
$tdataEoc_chigins2[".addFields"][] = "status";
$tdataEoc_chigins2[".addFields"][] = "serial_number";
$tdataEoc_chigins2[".addFields"][] = "yahoo_kataban";
$tdataEoc_chigins2[".addFields"][] = "stamp";
$tdataEoc_chigins2[".addFields"][] = "Setting";
$tdataEoc_chigins2[".addFields"][] = "Destination_selling";
$tdataEoc_chigins2[".addFields"][] = "Finish";
$tdataEoc_chigins2[".addFields"][] = "Discrimination";
$tdataEoc_chigins2[".addFields"][] = "accessories";
$tdataEoc_chigins2[".addFields"][] = "yahoo_sankou_uwadai";
$tdataEoc_chigins2[".addFields"][] = "sales_price";
$tdataEoc_chigins2[".addFields"][] = "MATERIAL";
$tdataEoc_chigins2[".addFields"][] = "ITEM";
$tdataEoc_chigins2[".addFields"][] = "WEIGHT";
$tdataEoc_chigins2[".addFields"][] = "gram";
$tdataEoc_chigins2[".addFields"][] = "PER_PRICE";
$tdataEoc_chigins2[".addFields"][] = "AMOUNT_MONEY";

$tdataEoc_chigins2[".masterListFields"] = array();
$tdataEoc_chigins2[".masterListFields"][] = "chigin_ecc_id";
$tdataEoc_chigins2[".masterListFields"][] = "remark";
$tdataEoc_chigins2[".masterListFields"][] = "eq";
$tdataEoc_chigins2[".masterListFields"][] = "ecc_id";
$tdataEoc_chigins2[".masterListFields"][] = "ecc_seq";
$tdataEoc_chigins2[".masterListFields"][] = "create_at";
$tdataEoc_chigins2[".masterListFields"][] = "updated_by";
$tdataEoc_chigins2[".masterListFields"][] = "created_by";
$tdataEoc_chigins2[".masterListFields"][] = "update_at";
$tdataEoc_chigins2[".masterListFields"][] = "label_output_flag";
$tdataEoc_chigins2[".masterListFields"][] = "product_num";
$tdataEoc_chigins2[".masterListFields"][] = "category_id";
$tdataEoc_chigins2[".masterListFields"][] = "sub_category_id1";
$tdataEoc_chigins2[".masterListFields"][] = "yahoo_sex";
$tdataEoc_chigins2[".masterListFields"][] = "line";
$tdataEoc_chigins2[".masterListFields"][] = "item_name";
$tdataEoc_chigins2[".masterListFields"][] = "motif";
$tdataEoc_chigins2[".masterListFields"][] = "product_id";
$tdataEoc_chigins2[".masterListFields"][] = "status";
$tdataEoc_chigins2[".masterListFields"][] = "serial_number";
$tdataEoc_chigins2[".masterListFields"][] = "yahoo_kataban";
$tdataEoc_chigins2[".masterListFields"][] = "stamp";
$tdataEoc_chigins2[".masterListFields"][] = "Setting";
$tdataEoc_chigins2[".masterListFields"][] = "Destination_selling";
$tdataEoc_chigins2[".masterListFields"][] = "Finish";
$tdataEoc_chigins2[".masterListFields"][] = "Discrimination";
$tdataEoc_chigins2[".masterListFields"][] = "accessories";
$tdataEoc_chigins2[".masterListFields"][] = "yahoo_sankou_uwadai";
$tdataEoc_chigins2[".masterListFields"][] = "sales_price";
$tdataEoc_chigins2[".masterListFields"][] = "_status";
$tdataEoc_chigins2[".masterListFields"][] = "chigin_id";
$tdataEoc_chigins2[".masterListFields"][] = "MATERIAL";
$tdataEoc_chigins2[".masterListFields"][] = "ITEM";
$tdataEoc_chigins2[".masterListFields"][] = "WEIGHT";
$tdataEoc_chigins2[".masterListFields"][] = "gram";
$tdataEoc_chigins2[".masterListFields"][] = "twice";
$tdataEoc_chigins2[".masterListFields"][] = "PER_PRICE";
$tdataEoc_chigins2[".masterListFields"][] = "en";
$tdataEoc_chigins2[".masterListFields"][] = "eq2";
$tdataEoc_chigins2[".masterListFields"][] = "AMOUNT_MONEY";
$tdataEoc_chigins2[".masterListFields"][] = "en2";

$tdataEoc_chigins2[".inlineAddFields"] = array();
$tdataEoc_chigins2[".inlineAddFields"][] = "status";
$tdataEoc_chigins2[".inlineAddFields"][] = "label_output_flag";
$tdataEoc_chigins2[".inlineAddFields"][] = "product_num";
$tdataEoc_chigins2[".inlineAddFields"][] = "category_id";
$tdataEoc_chigins2[".inlineAddFields"][] = "sub_category_id1";
$tdataEoc_chigins2[".inlineAddFields"][] = "yahoo_sex";
$tdataEoc_chigins2[".inlineAddFields"][] = "line";
$tdataEoc_chigins2[".inlineAddFields"][] = "item_name";
$tdataEoc_chigins2[".inlineAddFields"][] = "serial_number";
$tdataEoc_chigins2[".inlineAddFields"][] = "yahoo_kataban";
$tdataEoc_chigins2[".inlineAddFields"][] = "stamp";
$tdataEoc_chigins2[".inlineAddFields"][] = "motif";
$tdataEoc_chigins2[".inlineAddFields"][] = "Setting";
$tdataEoc_chigins2[".inlineAddFields"][] = "Destination_selling";
$tdataEoc_chigins2[".inlineAddFields"][] = "Finish";
$tdataEoc_chigins2[".inlineAddFields"][] = "Discrimination";
$tdataEoc_chigins2[".inlineAddFields"][] = "accessories";
$tdataEoc_chigins2[".inlineAddFields"][] = "MATERIAL";
$tdataEoc_chigins2[".inlineAddFields"][] = "ITEM";
$tdataEoc_chigins2[".inlineAddFields"][] = "WEIGHT";
$tdataEoc_chigins2[".inlineAddFields"][] = "gram";
$tdataEoc_chigins2[".inlineAddFields"][] = "PER_PRICE";
$tdataEoc_chigins2[".inlineAddFields"][] = "AMOUNT_MONEY";
$tdataEoc_chigins2[".inlineAddFields"][] = "sales_price";
$tdataEoc_chigins2[".inlineAddFields"][] = "yahoo_sankou_uwadai";
$tdataEoc_chigins2[".inlineAddFields"][] = "created_by";
$tdataEoc_chigins2[".inlineAddFields"][] = "create_at";
$tdataEoc_chigins2[".inlineAddFields"][] = "updated_by";
$tdataEoc_chigins2[".inlineAddFields"][] = "update_at";

$tdataEoc_chigins2[".editFields"] = array();
$tdataEoc_chigins2[".editFields"][] = "serial_number";
$tdataEoc_chigins2[".editFields"][] = "yahoo_kataban";
$tdataEoc_chigins2[".editFields"][] = "stamp";
$tdataEoc_chigins2[".editFields"][] = "Setting";
$tdataEoc_chigins2[".editFields"][] = "Destination_selling";
$tdataEoc_chigins2[".editFields"][] = "Finish";
$tdataEoc_chigins2[".editFields"][] = "Discrimination";
$tdataEoc_chigins2[".editFields"][] = "accessories";
$tdataEoc_chigins2[".editFields"][] = "yahoo_sankou_uwadai";
$tdataEoc_chigins2[".editFields"][] = "sales_price";
$tdataEoc_chigins2[".editFields"][] = "status";
$tdataEoc_chigins2[".editFields"][] = "create_at";
$tdataEoc_chigins2[".editFields"][] = "updated_by";
$tdataEoc_chigins2[".editFields"][] = "created_by";
$tdataEoc_chigins2[".editFields"][] = "update_at";
$tdataEoc_chigins2[".editFields"][] = "label_output_flag";
$tdataEoc_chigins2[".editFields"][] = "product_num";
$tdataEoc_chigins2[".editFields"][] = "category_id";
$tdataEoc_chigins2[".editFields"][] = "sub_category_id1";
$tdataEoc_chigins2[".editFields"][] = "yahoo_sex";
$tdataEoc_chigins2[".editFields"][] = "line";
$tdataEoc_chigins2[".editFields"][] = "item_name";
$tdataEoc_chigins2[".editFields"][] = "motif";
$tdataEoc_chigins2[".editFields"][] = "MATERIAL";
$tdataEoc_chigins2[".editFields"][] = "ITEM";
$tdataEoc_chigins2[".editFields"][] = "WEIGHT";
$tdataEoc_chigins2[".editFields"][] = "gram";
$tdataEoc_chigins2[".editFields"][] = "twice";
$tdataEoc_chigins2[".editFields"][] = "PER_PRICE";
$tdataEoc_chigins2[".editFields"][] = "en";
$tdataEoc_chigins2[".editFields"][] = "eq2";
$tdataEoc_chigins2[".editFields"][] = "AMOUNT_MONEY";
$tdataEoc_chigins2[".editFields"][] = "en2";

$tdataEoc_chigins2[".inlineEditFields"] = array();
$tdataEoc_chigins2[".inlineEditFields"][] = "status";
$tdataEoc_chigins2[".inlineEditFields"][] = "label_output_flag";
$tdataEoc_chigins2[".inlineEditFields"][] = "product_num";
$tdataEoc_chigins2[".inlineEditFields"][] = "category_id";
$tdataEoc_chigins2[".inlineEditFields"][] = "sub_category_id1";
$tdataEoc_chigins2[".inlineEditFields"][] = "yahoo_sex";
$tdataEoc_chigins2[".inlineEditFields"][] = "line";
$tdataEoc_chigins2[".inlineEditFields"][] = "item_name";
$tdataEoc_chigins2[".inlineEditFields"][] = "serial_number";
$tdataEoc_chigins2[".inlineEditFields"][] = "yahoo_kataban";
$tdataEoc_chigins2[".inlineEditFields"][] = "stamp";
$tdataEoc_chigins2[".inlineEditFields"][] = "motif";
$tdataEoc_chigins2[".inlineEditFields"][] = "Setting";
$tdataEoc_chigins2[".inlineEditFields"][] = "Destination_selling";
$tdataEoc_chigins2[".inlineEditFields"][] = "Finish";
$tdataEoc_chigins2[".inlineEditFields"][] = "Discrimination";
$tdataEoc_chigins2[".inlineEditFields"][] = "accessories";
$tdataEoc_chigins2[".inlineEditFields"][] = "MATERIAL";
$tdataEoc_chigins2[".inlineEditFields"][] = "ITEM";
$tdataEoc_chigins2[".inlineEditFields"][] = "WEIGHT";
$tdataEoc_chigins2[".inlineEditFields"][] = "gram";
$tdataEoc_chigins2[".inlineEditFields"][] = "PER_PRICE";
$tdataEoc_chigins2[".inlineEditFields"][] = "AMOUNT_MONEY";
$tdataEoc_chigins2[".inlineEditFields"][] = "sales_price";
$tdataEoc_chigins2[".inlineEditFields"][] = "yahoo_sankou_uwadai";
$tdataEoc_chigins2[".inlineEditFields"][] = "created_by";
$tdataEoc_chigins2[".inlineEditFields"][] = "create_at";
$tdataEoc_chigins2[".inlineEditFields"][] = "updated_by";
$tdataEoc_chigins2[".inlineEditFields"][] = "update_at";

$tdataEoc_chigins2[".updateSelectedFields"] = array();
$tdataEoc_chigins2[".updateSelectedFields"][] = "MATERIAL";
$tdataEoc_chigins2[".updateSelectedFields"][] = "ITEM";
$tdataEoc_chigins2[".updateSelectedFields"][] = "WEIGHT";
$tdataEoc_chigins2[".updateSelectedFields"][] = "gram";
$tdataEoc_chigins2[".updateSelectedFields"][] = "twice";
$tdataEoc_chigins2[".updateSelectedFields"][] = "PER_PRICE";
$tdataEoc_chigins2[".updateSelectedFields"][] = "en";
$tdataEoc_chigins2[".updateSelectedFields"][] = "eq2";
$tdataEoc_chigins2[".updateSelectedFields"][] = "AMOUNT_MONEY";
$tdataEoc_chigins2[".updateSelectedFields"][] = "en2";


$tdataEoc_chigins2[".exportFields"] = array();
$tdataEoc_chigins2[".exportFields"][] = "status";
$tdataEoc_chigins2[".exportFields"][] = "create_at";
$tdataEoc_chigins2[".exportFields"][] = "updated_by";
$tdataEoc_chigins2[".exportFields"][] = "created_by";
$tdataEoc_chigins2[".exportFields"][] = "update_at";
$tdataEoc_chigins2[".exportFields"][] = "chigin_id";
$tdataEoc_chigins2[".exportFields"][] = "MATERIAL";
$tdataEoc_chigins2[".exportFields"][] = "ITEM";
$tdataEoc_chigins2[".exportFields"][] = "WEIGHT";
$tdataEoc_chigins2[".exportFields"][] = "gram";
$tdataEoc_chigins2[".exportFields"][] = "twice";
$tdataEoc_chigins2[".exportFields"][] = "PER_PRICE";
$tdataEoc_chigins2[".exportFields"][] = "en";
$tdataEoc_chigins2[".exportFields"][] = "eq2";
$tdataEoc_chigins2[".exportFields"][] = "AMOUNT_MONEY";
$tdataEoc_chigins2[".exportFields"][] = "en2";

$tdataEoc_chigins2[".importFields"] = array();
$tdataEoc_chigins2[".importFields"][] = "chigin_id";
$tdataEoc_chigins2[".importFields"][] = "MATERIAL";
$tdataEoc_chigins2[".importFields"][] = "ITEM";
$tdataEoc_chigins2[".importFields"][] = "WEIGHT";
$tdataEoc_chigins2[".importFields"][] = "PER_PRICE";
$tdataEoc_chigins2[".importFields"][] = "AMOUNT_MONEY";
$tdataEoc_chigins2[".importFields"][] = "gram";
$tdataEoc_chigins2[".importFields"][] = "eq2";
$tdataEoc_chigins2[".importFields"][] = "twice";
$tdataEoc_chigins2[".importFields"][] = "en";
$tdataEoc_chigins2[".importFields"][] = "en2";
$tdataEoc_chigins2[".importFields"][] = "create_at";
$tdataEoc_chigins2[".importFields"][] = "updated_by";
$tdataEoc_chigins2[".importFields"][] = "created_by";
$tdataEoc_chigins2[".importFields"][] = "update_at";
$tdataEoc_chigins2[".importFields"][] = "status";
$tdataEoc_chigins2[".importFields"][] = "serial_number";
$tdataEoc_chigins2[".importFields"][] = "yahoo_kataban";
$tdataEoc_chigins2[".importFields"][] = "stamp";
$tdataEoc_chigins2[".importFields"][] = "Setting";
$tdataEoc_chigins2[".importFields"][] = "Destination_selling";
$tdataEoc_chigins2[".importFields"][] = "Finish";
$tdataEoc_chigins2[".importFields"][] = "Discrimination";
$tdataEoc_chigins2[".importFields"][] = "accessories";
$tdataEoc_chigins2[".importFields"][] = "yahoo_sankou_uwadai";
$tdataEoc_chigins2[".importFields"][] = "sales_price";

$tdataEoc_chigins2[".printFields"] = array();
$tdataEoc_chigins2[".printFields"][] = "serial_number";
$tdataEoc_chigins2[".printFields"][] = "yahoo_kataban";
$tdataEoc_chigins2[".printFields"][] = "stamp";
$tdataEoc_chigins2[".printFields"][] = "Setting";
$tdataEoc_chigins2[".printFields"][] = "Destination_selling";
$tdataEoc_chigins2[".printFields"][] = "Finish";
$tdataEoc_chigins2[".printFields"][] = "Discrimination";
$tdataEoc_chigins2[".printFields"][] = "accessories";
$tdataEoc_chigins2[".printFields"][] = "yahoo_sankou_uwadai";
$tdataEoc_chigins2[".printFields"][] = "sales_price";
$tdataEoc_chigins2[".printFields"][] = "status";
$tdataEoc_chigins2[".printFields"][] = "label_output_flag";
$tdataEoc_chigins2[".printFields"][] = "product_num";
$tdataEoc_chigins2[".printFields"][] = "category_id";
$tdataEoc_chigins2[".printFields"][] = "sub_category_id1";
$tdataEoc_chigins2[".printFields"][] = "yahoo_sex";
$tdataEoc_chigins2[".printFields"][] = "line";
$tdataEoc_chigins2[".printFields"][] = "item_name";
$tdataEoc_chigins2[".printFields"][] = "motif";
$tdataEoc_chigins2[".printFields"][] = "chigin_id";
$tdataEoc_chigins2[".printFields"][] = "MATERIAL";
$tdataEoc_chigins2[".printFields"][] = "ITEM";
$tdataEoc_chigins2[".printFields"][] = "WEIGHT";
$tdataEoc_chigins2[".printFields"][] = "gram";
$tdataEoc_chigins2[".printFields"][] = "twice";
$tdataEoc_chigins2[".printFields"][] = "PER_PRICE";
$tdataEoc_chigins2[".printFields"][] = "en";
$tdataEoc_chigins2[".printFields"][] = "eq2";
$tdataEoc_chigins2[".printFields"][] = "AMOUNT_MONEY";
$tdataEoc_chigins2[".printFields"][] = "en2";
$tdataEoc_chigins2[".printFields"][] = "create_at";
$tdataEoc_chigins2[".printFields"][] = "created_by";
$tdataEoc_chigins2[".printFields"][] = "update_at";
$tdataEoc_chigins2[".printFields"][] = "updated_by";

//	chigin_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "chigin_id";
	$fdata["GoodName"] = "chigin_id";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","chigin_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "chigin_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`chigin_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdataEoc_chigins2["chigin_id"] = $fdata;
//	chigin_ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "chigin_ecc_id";
	$fdata["GoodName"] = "chigin_ecc_id";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","chigin_ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "chigin_ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`chigin_ecc_id`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdataEoc_chigins2["chigin_ecc_id"] = $fdata;
//	MATERIAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MATERIAL";
	$fdata["GoodName"] = "MATERIAL";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","MATERIAL");
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

		$fdata["strField"] = "MATERIAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`MATERIAL`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_gold_property";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "val";

	
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




	$tdataEoc_chigins2["MATERIAL"] = $fdata;
//	ITEM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ITEM";
	$fdata["GoodName"] = "ITEM";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","ITEM");
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

		$fdata["strField"] = "ITEM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`ITEM`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_chigins2["ITEM"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","remark");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "remark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`remark`";

	
	
			
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








	$tdataEoc_chigins2["remark"] = $fdata;
//	WEIGHT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "WEIGHT";
	$fdata["GoodName"] = "WEIGHT";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","WEIGHT");
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

		$fdata["strField"] = "WEIGHT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`WEIGHT`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_chigins2["WEIGHT"] = $fdata;
//	PER_PRICE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PER_PRICE";
	$fdata["GoodName"] = "PER_PRICE";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","PER_PRICE");
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

		$fdata["strField"] = "PER_PRICE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`PER_PRICE`";

	
	
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




	$tdataEoc_chigins2["PER_PRICE"] = $fdata;
//	AMOUNT_MONEY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AMOUNT_MONEY";
	$fdata["GoodName"] = "AMOUNT_MONEY";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","AMOUNT_MONEY");
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

		$fdata["strField"] = "AMOUNT_MONEY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`AMOUNT_MONEY`";

	
	
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




	$tdataEoc_chigins2["AMOUNT_MONEY"] = $fdata;
//	gram
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "gram";
	$fdata["GoodName"] = "gram";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","gram");
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

		$fdata["strField"] = "gram";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`gram`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_unit";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 0;
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




	$tdataEoc_chigins2["gram"] = $fdata;
//	eq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "eq";
	$fdata["GoodName"] = "eq";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","eq");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "eq";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`eq`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdataEoc_chigins2["eq"] = $fdata;
//	eq2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "eq2";
	$fdata["GoodName"] = "eq2";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","eq2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eq2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`eq2`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_chigins2["eq2"] = $fdata;
//	twice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "twice";
	$fdata["GoodName"] = "twice";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","twice");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "twice";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`twice`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_chigins2["twice"] = $fdata;
//	en
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "en";
	$fdata["GoodName"] = "en";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","en");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "en";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`en`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_chigins2["en"] = $fdata;
//	en2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "en2";
	$fdata["GoodName"] = "en2";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","en2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "en2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`en2`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_chigins2["en2"] = $fdata;
//	_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "_status";
	$fdata["GoodName"] = "_status";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","_status");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`_status`";

	
	
			
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
	$edata["LookupTable"] = "_goods_status2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "goods_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "goods_status";

	
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








	$tdataEoc_chigins2["_status"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","ecc_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`ecc_id`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdataEoc_chigins2["ecc_id"] = $fdata;
//	ecc_seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ecc_seq";
	$fdata["GoodName"] = "ecc_seq";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","ecc_seq");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ecc_seq";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`ecc_seq`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdataEoc_chigins2["ecc_seq"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`create_at`";

	
	
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




	$tdataEoc_chigins2["create_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","updated_by");
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

		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`updated_by`";

	
	
				$fdata["FieldPermissions"] = true;

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
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_chigins2["updated_by"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","created_by");
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

		$fdata["strField"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`created_by`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_chigins2["created_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`update_at`";

	
	
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
	
		$edata["autoUpdatable"] = true;

	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_chigins2["update_at"] = $fdata;
//	label_output_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "label_output_flag";
	$fdata["GoodName"] = "label_output_flag";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","label_output_flag");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "label_output_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`label_output_flag`";

	
	
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




	$tdataEoc_chigins2["label_output_flag"] = $fdata;
//	product_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "product_num";
	$fdata["GoodName"] = "product_num";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","product_num");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "product_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`product_num`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_brand2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
	
	
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




	$tdataEoc_chigins2["product_num"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`category_id`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "store_categories";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "category_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "category_name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "sub_category_id1";

	
	
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




	$tdataEoc_chigins2["category_id"] = $fdata;
//	sub_category_id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "sub_category_id1";
	$fdata["GoodName"] = "sub_category_id1";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","sub_category_id1");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "sub_category_id1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`sub_category_id1`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "store_sub_categories";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "category_id", "lookup" => "category_id" );

	
	

	
	
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




	$tdataEoc_chigins2["sub_category_id1"] = $fdata;
//	yahoo_sex
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "yahoo_sex";
	$fdata["GoodName"] = "yahoo_sex";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","yahoo_sex");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "yahoo_sex";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`yahoo_sex`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_sex";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "sex_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "sex_name";

	
	$edata["LookupOrderBy"] = "sex_id";

	
	
	
	

	
	
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




	$tdataEoc_chigins2["yahoo_sex"] = $fdata;
//	line
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "line";
	$fdata["GoodName"] = "line";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","line");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "line";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`line`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_item";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

		$edata["LookupDesc"] = true;

	
	
	

	
	
	
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




	$tdataEoc_chigins2["line"] = $fdata;
//	item_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "item_name";
	$fdata["GoodName"] = "item_name";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","item_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "item_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`item_name`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_item_name";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	

	
	
	
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




	$tdataEoc_chigins2["item_name"] = $fdata;
//	motif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "motif";
	$fdata["GoodName"] = "motif";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","motif");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "motif";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`motif`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_motif";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "english_name";

	
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




	$tdataEoc_chigins2["motif"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`product_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_chigins2["product_id"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","status");
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

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`status`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "_goods_status2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "goods_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "goods_status";

	
	$edata["LookupOrderBy"] = "kinsa";

	
	
	
	

	
	
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




	$tdataEoc_chigins2["status"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","serial_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "serial_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`serial_number`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_chigins2["serial_number"] = $fdata;
//	yahoo_kataban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "yahoo_kataban";
	$fdata["GoodName"] = "yahoo_kataban";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","yahoo_kataban");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "yahoo_kataban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`yahoo_kataban`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_chigins2["yahoo_kataban"] = $fdata;
//	stamp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "stamp";
	$fdata["GoodName"] = "stamp";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","stamp");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "stamp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`stamp`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=150";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataEoc_chigins2["stamp"] = $fdata;
//	Setting
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Setting";
	$fdata["GoodName"] = "Setting";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","Setting");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "Setting";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`Setting`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_Setting";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "english_name";

	
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




	$tdataEoc_chigins2["Setting"] = $fdata;
//	Destination_selling
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Destination_selling";
	$fdata["GoodName"] = "Destination_selling";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","Destination_selling");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "Destination_selling";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`Destination_selling`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_Destination_selling";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "val";

	
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




	$tdataEoc_chigins2["Destination_selling"] = $fdata;
//	Finish
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Finish";
	$fdata["GoodName"] = "Finish";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","Finish");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "Finish";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`Finish`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_Finish";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "val";

	
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




	$tdataEoc_chigins2["Finish"] = $fdata;
//	Discrimination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Discrimination";
	$fdata["GoodName"] = "Discrimination";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","Discrimination");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "Discrimination";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`Discrimination`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_Discrimination";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "val";

	
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




	$tdataEoc_chigins2["Discrimination"] = $fdata;
//	accessories
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "accessories";
	$fdata["GoodName"] = "accessories";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","accessories");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "accessories";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`accessories`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_accessories";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "val";

	
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




	$tdataEoc_chigins2["accessories"] = $fdata;
//	yahoo_sankou_uwadai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "yahoo_sankou_uwadai";
	$fdata["GoodName"] = "yahoo_sankou_uwadai";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","yahoo_sankou_uwadai");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "yahoo_sankou_uwadai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`yahoo_sankou_uwadai`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataEoc_chigins2["yahoo_sankou_uwadai"] = $fdata;
//	sales_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "sales_price";
	$fdata["GoodName"] = "sales_price";
	$fdata["ownerTable"] = "Eoc_chigins2";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins2","sales_price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "sales_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_chigins2`.`sales_price`";

	
	
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




	$tdataEoc_chigins2["sales_price"] = $fdata;


$tables_data["Eoc_chigins2"]=&$tdataEoc_chigins2;
$field_labels["Eoc_chigins2"] = &$fieldLabelsEoc_chigins2;
$fieldToolTips["Eoc_chigins2"] = &$fieldToolTipsEoc_chigins2;
$placeHolders["Eoc_chigins2"] = &$placeHoldersEoc_chigins2;
$page_titles["Eoc_chigins2"] = &$pageTitlesEoc_chigins2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_chigins2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_chigins2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_chigins2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Eoc_chigins2`.`chigin_id`,  `Eoc_chigins2`.`chigin_ecc_id`,  `Eoc_chigins2`.`MATERIAL`,  `Eoc_chigins2`.`ITEM`,  `Eoc_chigins2`.`remark`,  `Eoc_chigins2`.`WEIGHT`,  `Eoc_chigins2`.`PER_PRICE`,  `Eoc_chigins2`.`AMOUNT_MONEY`,  `Eoc_chigins2`.`gram`,  `Eoc_chigins2`.`eq`,  `Eoc_chigins2`.`eq2`,  `Eoc_chigins2`.`twice`,  `Eoc_chigins2`.`en`,  `Eoc_chigins2`.`en2`,  `Eoc_chigins2`.`_status`,  `Eoc`.`ecc_id`,  `Eoc`.`ecc_seq`,  `Eoc_chigins2`.`create_at`,  `Eoc_chigins2`.`updated_by`,  `Eoc_chigins2`.`created_by`,  `Eoc_chigins2`.`update_at`,  `Eoc_chigins2`.`label_output_flag`,  `Eoc_chigins2`.`product_num`,  `Eoc_chigins2`.`category_id`,  `Eoc_chigins2`.`sub_category_id1`,  `Eoc_chigins2`.`yahoo_sex`,  `Eoc_chigins2`.`line`,  `Eoc_chigins2`.`item_name`,  `Eoc_chigins2`.`motif`,  `Eoc_chigins2`.`product_id`,  `Eoc_chigins2`.`status`,  `Eoc_chigins2`.`serial_number`,  `Eoc_chigins2`.`yahoo_kataban`,  `Eoc_chigins2`.`stamp`,  `Eoc_chigins2`.`Setting`,  `Eoc_chigins2`.`Destination_selling`,  `Eoc_chigins2`.`Finish`,  `Eoc_chigins2`.`Discrimination`,  `Eoc_chigins2`.`accessories`,  `Eoc_chigins2`.`yahoo_sankou_uwadai`,  `Eoc_chigins2`.`sales_price`";
$proto0["m_strFrom"] = "FROM `Eoc_chigins2`  INNER JOIN `Eoc` ON `Eoc_chigins2`.`chigin_ecc_id` = `Eoc`.`ecc_id`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `Eoc_chigins2`.`chigin_id` DESC";
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
	"m_strName" => "chigin_id",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto6["m_sql"] = "`Eoc_chigins2`.`chigin_id`";
$proto6["m_srcTableName"] = "Eoc_chigins2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "chigin_ecc_id",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto8["m_sql"] = "`Eoc_chigins2`.`chigin_ecc_id`";
$proto8["m_srcTableName"] = "Eoc_chigins2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MATERIAL",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto10["m_sql"] = "`Eoc_chigins2`.`MATERIAL`";
$proto10["m_srcTableName"] = "Eoc_chigins2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ITEM",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto12["m_sql"] = "`Eoc_chigins2`.`ITEM`";
$proto12["m_srcTableName"] = "Eoc_chigins2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto14["m_sql"] = "`Eoc_chigins2`.`remark`";
$proto14["m_srcTableName"] = "Eoc_chigins2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "WEIGHT",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto16["m_sql"] = "`Eoc_chigins2`.`WEIGHT`";
$proto16["m_srcTableName"] = "Eoc_chigins2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PER_PRICE",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto18["m_sql"] = "`Eoc_chigins2`.`PER_PRICE`";
$proto18["m_srcTableName"] = "Eoc_chigins2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "AMOUNT_MONEY",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto20["m_sql"] = "`Eoc_chigins2`.`AMOUNT_MONEY`";
$proto20["m_srcTableName"] = "Eoc_chigins2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "gram",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto22["m_sql"] = "`Eoc_chigins2`.`gram`";
$proto22["m_srcTableName"] = "Eoc_chigins2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "eq",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto24["m_sql"] = "`Eoc_chigins2`.`eq`";
$proto24["m_srcTableName"] = "Eoc_chigins2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "eq2",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto26["m_sql"] = "`Eoc_chigins2`.`eq2`";
$proto26["m_srcTableName"] = "Eoc_chigins2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "twice",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto28["m_sql"] = "`Eoc_chigins2`.`twice`";
$proto28["m_srcTableName"] = "Eoc_chigins2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "en",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto30["m_sql"] = "`Eoc_chigins2`.`en`";
$proto30["m_srcTableName"] = "Eoc_chigins2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "en2",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto32["m_sql"] = "`Eoc_chigins2`.`en2`";
$proto32["m_srcTableName"] = "Eoc_chigins2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "_status",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto34["m_sql"] = "`Eoc_chigins2`.`_status`";
$proto34["m_srcTableName"] = "Eoc_chigins2";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto36["m_sql"] = "`Eoc`.`ecc_id`";
$proto36["m_srcTableName"] = "Eoc_chigins2";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_seq",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto38["m_sql"] = "`Eoc`.`ecc_seq`";
$proto38["m_srcTableName"] = "Eoc_chigins2";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto40["m_sql"] = "`Eoc_chigins2`.`create_at`";
$proto40["m_srcTableName"] = "Eoc_chigins2";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto42["m_sql"] = "`Eoc_chigins2`.`updated_by`";
$proto42["m_srcTableName"] = "Eoc_chigins2";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto44["m_sql"] = "`Eoc_chigins2`.`created_by`";
$proto44["m_srcTableName"] = "Eoc_chigins2";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto46["m_sql"] = "`Eoc_chigins2`.`update_at`";
$proto46["m_srcTableName"] = "Eoc_chigins2";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "label_output_flag",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto48["m_sql"] = "`Eoc_chigins2`.`label_output_flag`";
$proto48["m_srcTableName"] = "Eoc_chigins2";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "product_num",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto50["m_sql"] = "`Eoc_chigins2`.`product_num`";
$proto50["m_srcTableName"] = "Eoc_chigins2";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto52["m_sql"] = "`Eoc_chigins2`.`category_id`";
$proto52["m_srcTableName"] = "Eoc_chigins2";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id1",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto54["m_sql"] = "`Eoc_chigins2`.`sub_category_id1`";
$proto54["m_srcTableName"] = "Eoc_chigins2";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sex",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto56["m_sql"] = "`Eoc_chigins2`.`yahoo_sex`";
$proto56["m_srcTableName"] = "Eoc_chigins2";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "line",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto58["m_sql"] = "`Eoc_chigins2`.`line`";
$proto58["m_srcTableName"] = "Eoc_chigins2";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "item_name",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto60["m_sql"] = "`Eoc_chigins2`.`item_name`";
$proto60["m_srcTableName"] = "Eoc_chigins2";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "motif",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto62["m_sql"] = "`Eoc_chigins2`.`motif`";
$proto62["m_srcTableName"] = "Eoc_chigins2";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto64["m_sql"] = "`Eoc_chigins2`.`product_id`";
$proto64["m_srcTableName"] = "Eoc_chigins2";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto66["m_sql"] = "`Eoc_chigins2`.`status`";
$proto66["m_srcTableName"] = "Eoc_chigins2";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto68["m_sql"] = "`Eoc_chigins2`.`serial_number`";
$proto68["m_srcTableName"] = "Eoc_chigins2";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_kataban",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto70["m_sql"] = "`Eoc_chigins2`.`yahoo_kataban`";
$proto70["m_srcTableName"] = "Eoc_chigins2";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "stamp",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto72["m_sql"] = "`Eoc_chigins2`.`stamp`";
$proto72["m_srcTableName"] = "Eoc_chigins2";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Setting",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto74["m_sql"] = "`Eoc_chigins2`.`Setting`";
$proto74["m_srcTableName"] = "Eoc_chigins2";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Destination_selling",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto76["m_sql"] = "`Eoc_chigins2`.`Destination_selling`";
$proto76["m_srcTableName"] = "Eoc_chigins2";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Finish",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto78["m_sql"] = "`Eoc_chigins2`.`Finish`";
$proto78["m_srcTableName"] = "Eoc_chigins2";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Discrimination",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto80["m_sql"] = "`Eoc_chigins2`.`Discrimination`";
$proto80["m_srcTableName"] = "Eoc_chigins2";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "accessories",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto82["m_sql"] = "`Eoc_chigins2`.`accessories`";
$proto82["m_srcTableName"] = "Eoc_chigins2";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "yahoo_sankou_uwadai",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto84["m_sql"] = "`Eoc_chigins2`.`yahoo_sankou_uwadai`";
$proto84["m_srcTableName"] = "Eoc_chigins2";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_price",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto86["m_sql"] = "`Eoc_chigins2`.`sales_price`";
$proto86["m_srcTableName"] = "Eoc_chigins2";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto88=array();
$proto88["m_link"] = "SQLL_MAIN";
			$proto89=array();
$proto89["m_strName"] = "Eoc_chigins2";
$proto89["m_srcTableName"] = "Eoc_chigins2";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "chigin_id";
$proto89["m_columns"][] = "chigin_ecc_id";
$proto89["m_columns"][] = "MATERIAL";
$proto89["m_columns"][] = "ITEM";
$proto89["m_columns"][] = "remark";
$proto89["m_columns"][] = "WEIGHT";
$proto89["m_columns"][] = "PER_PRICE";
$proto89["m_columns"][] = "AMOUNT_MONEY";
$proto89["m_columns"][] = "gram";
$proto89["m_columns"][] = "eq";
$proto89["m_columns"][] = "eq2";
$proto89["m_columns"][] = "twice";
$proto89["m_columns"][] = "en";
$proto89["m_columns"][] = "en2";
$proto89["m_columns"][] = "create_at";
$proto89["m_columns"][] = "_status";
$proto89["m_columns"][] = "updated_by";
$proto89["m_columns"][] = "created_by";
$proto89["m_columns"][] = "update_at";
$proto89["m_columns"][] = "label_output_flag";
$proto89["m_columns"][] = "product_num";
$proto89["m_columns"][] = "category_id";
$proto89["m_columns"][] = "sub_category_id1";
$proto89["m_columns"][] = "yahoo_sex";
$proto89["m_columns"][] = "line";
$proto89["m_columns"][] = "item_name";
$proto89["m_columns"][] = "motif";
$proto89["m_columns"][] = "product_id";
$proto89["m_columns"][] = "status";
$proto89["m_columns"][] = "serial_number";
$proto89["m_columns"][] = "yahoo_kataban";
$proto89["m_columns"][] = "stamp";
$proto89["m_columns"][] = "Setting";
$proto89["m_columns"][] = "Destination_selling";
$proto89["m_columns"][] = "Finish";
$proto89["m_columns"][] = "Discrimination";
$proto89["m_columns"][] = "accessories";
$proto89["m_columns"][] = "yahoo_sankou_uwadai";
$proto89["m_columns"][] = "sales_price";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "`Eoc_chigins2`";
$proto88["m_alias"] = "";
$proto88["m_srcTableName"] = "Eoc_chigins2";
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
												$proto92=array();
$proto92["m_link"] = "SQLL_INNERJOIN";
			$proto93=array();
$proto93["m_strName"] = "Eoc";
$proto93["m_srcTableName"] = "Eoc_chigins2";
$proto93["m_columns"] = array();
$proto93["m_columns"][] = "ecc_id";
$proto93["m_columns"][] = "ecc_seq";
$proto93["m_columns"][] = "name1";
$proto93["m_columns"][] = "created_t";
$proto93["m_columns"][] = "registerd_id";
$proto93["m_columns"][] = "kaitori_staff_id";
$proto93["m_columns"][] = "name2";
$proto93["m_columns"][] = "wareki";
$proto93["m_columns"][] = "b1";
$proto93["m_columns"][] = "b2";
$proto93["m_columns"][] = "b3";
$proto93["m_columns"][] = "birth_day";
$proto93["m_columns"][] = "age";
$proto93["m_columns"][] = "zip";
$proto93["m_columns"][] = "zip1";
$proto93["m_columns"][] = "zip2";
$proto93["m_columns"][] = "address1";
$proto93["m_columns"][] = "address2";
$proto93["m_columns"][] = "address3";
$proto93["m_columns"][] = "tel";
$proto93["m_columns"][] = "tel2";
$proto93["m_columns"][] = "mail1";
$proto93["m_columns"][] = "mail2";
$proto93["m_columns"][] = "address_code";
$proto93["m_columns"][] = "bank_name";
$proto93["m_columns"][] = "bank_blunch_code";
$proto93["m_columns"][] = "bank_yokin_shubetu";
$proto93["m_columns"][] = "bank_account";
$proto93["m_columns"][] = "bank_acoount_name";
$proto93["m_columns"][] = "haisou_bangou";
$proto93["m_columns"][] = "sise_houhou";
$proto93["m_columns"][] = "hentou_houhou";
$proto93["m_columns"][] = "hentou_houhou_time";
$proto93["m_columns"][] = "mousikomi_id";
$proto93["m_columns"][] = "hituyou_shorui";
$proto93["m_columns"][] = "seiyaku_fuseiritu";
$proto93["m_columns"][] = "mitumori_taku";
$proto93["m_columns"][] = "seacanse";
$proto93["m_columns"][] = "remark";
$proto93["m_columns"][] = "type";
$proto93["m_columns"][] = "sales_flag";
$proto93["m_columns"][] = "src_type";
$proto93["m_columns"][] = "liquidation_shop_code";
$proto93["m_columns"][] = "insurance_amount_print";
$proto93["m_columns"][] = "jis_code";
$proto93["m_columns"][] = "updated_at";
$proto93["m_columns"][] = "_registerd_id";
$proto93["m_columns"][] = "mail_check_type";
$proto93["m_columns"][] = "purchase_type";
$proto93["m_columns"][] = "sex";
$proto93["m_columns"][] = "m_tel";
$proto93["m_columns"][] = "fax";
$proto93["m_columns"][] = "chigin_kaitori";
$proto93["m_columns"][] = "option1";
$proto93["m_columns"][] = "option2";
$proto93["m_columns"][] = "option3";
$proto93["m_columns"][] = "option4";
$proto93["m_columns"][] = "option5";
$proto93["m_columns"][] = "option6";
$proto93["m_columns"][] = "option7";
$proto93["m_columns"][] = "option8";
$proto93["m_columns"][] = "option9";
$proto93["m_columns"][] = "option10";
$proto93["m_columns"][] = "option11";
$proto93["m_columns"][] = "option12";
$proto93["m_columns"][] = "option13";
$proto93["m_columns"][] = "rakuda_csv_flag";
$proto93["m_columns"][] = "EOC_COURIER_CHECK";
$proto93["m_columns"][] = "EOC_SIZE";
$proto93["m_columns"][] = "EOC_NUMBER";
$proto93["m_columns"][] = "EOC_REUSE";
$proto93["m_columns"][] = "EOC__DELIVERY_DATES";
$proto93["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto93["m_columns"][] = "FIRST_NAME2";
$proto93["m_columns"][] = "LAST_NAME2";
$proto93["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto93["m_columns"][] = "EOC__BOX_NUMBER";
$proto93["m_columns"][] = "FIRST_NAME_KANA";
$proto93["m_columns"][] = "LAST_NAME_KANA";
$proto93["m_columns"][] = "FLAG_SPEED";
$proto93["m_columns"][] = "SEARCH_MEDIA";
$proto93["m_columns"][] = "SEARCH_SITE";
$proto93["m_columns"][] = "UN_REACHABLE";
$proto93["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto93["m_columns"][] = "FLG_MAIL_OTHER";
$proto93["m_columns"][] = "ALLSEIYAKU";
$proto93["m_columns"][] = "ICHIBUSEIYAKU";
$proto93["m_columns"][] = "seiyakukin";
$proto93["m_columns"][] = "kaitorihuka";
$proto93["m_columns"][] = "awazu_date";
$proto93["m_columns"][] = "seiyaku_price";
$proto93["m_columns"][] = "eoc_search_keyword";
$proto93["m_columns"][] = "sonota";
$proto93["m_columns"][] = "size_kosuu";
$proto93["m_columns"][] = "sagawa_shuuka_flag";
$proto93["m_columns"][] = "line_check";
$proto93["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto93["m_columns"][] = "kaitori_sougak";
$proto93["m_columns"][] = "flag";
$proto93["m_columns"][] = "key_code";
$proto93["m_columns"][] = "dm_check_type";
$proto93["m_columns"][] = "kit_flag";
$proto93["m_columns"][] = "kit_done_flag";
$proto93["m_columns"][] = "bank_details_code";
$proto93["m_columns"][] = "bank_details_blunch_name";
$proto93["m_columns"][] = "bank_details_blunch_code";
$proto93["m_columns"][] = "bank_details_account_number";
$proto93["m_columns"][] = "bank_details_symbol";
$proto93["m_columns"][] = "bank_details_number";
$proto93["m_columns"][] = "bank_details_account_name";
$proto93["m_columns"][] = "bank_details_deposit_type";
$proto93["m_columns"][] = "mypage_id";
$proto93["m_columns"][] = "UN_REACHABLE_brand";
$proto93["m_columns"][] = "sagawa_haisou_hoken";
$proto93["m_columns"][] = "transfer_confirm";
$proto93["m_columns"][] = "outside_bank";
$proto93["m_columns"][] = "new_name";
$proto93["m_columns"][] = "letterpack";
$proto93["m_columns"][] = "satei_saisoku_2_days";
$proto93["m_columns"][] = "satei_saisoku_7_days";
$proto93["m_columns"][] = "accept_flag";
$proto93["m_columns"][] = "delivery_flag";
$proto93["m_columns"][] = "refining_weight";
$proto93["m_columns"][] = "line_chat_url";
$proto93["m_columns"][] = "royal_customer_status";
$proto93["m_columns"][] = "is_business_customer";
$proto93["m_columns"][] = "is_exist_haisouhosyo";
$proto93["m_columns"][] = "meigi_hankaku_kana";
$proto93["m_columns"][] = "building_types";
$proto93["m_columns"][] = "dwelling_types";
$proto93["m_columns"][] = "is_yamato_csv";
$proto93["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto93);

$proto92["m_table"] = $obj;
$proto92["m_sql"] = "INNER JOIN `Eoc` ON `Eoc_chigins2`.`chigin_ecc_id` = `Eoc`.`ecc_id`";
$proto92["m_alias"] = "";
$proto92["m_srcTableName"] = "Eoc_chigins2";
$proto94=array();
$proto94["m_sql"] = "`Eoc_chigins2`.`chigin_ecc_id` = `Eoc`.`ecc_id`";
$proto94["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "chigin_ecc_id",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto94["m_column"]=$obj;
$proto94["m_contained"] = array();
$proto94["m_strCase"] = "= `Eoc`.`ecc_id`";
$proto94["m_havingmode"] = false;
$proto94["m_inBrackets"] = false;
$proto94["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto94);

$proto92["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto92);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto96=array();
						$obj = new SQLField(array(
	"m_strName" => "chigin_id",
	"m_strTable" => "Eoc_chigins2",
	"m_srcTableName" => "Eoc_chigins2"
));

$proto96["m_column"]=$obj;
$proto96["m_bAsc"] = 0;
$proto96["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto96);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_chigins2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_chigins2 = createSqlQuery_Eoc_chigins2();


	
		;

																																									

$tdataEoc_chigins2[".sqlquery"] = $queryData_Eoc_chigins2;

include_once(getabspath("include/Eoc_chigins2_events.php"));
$tableEvents["Eoc_chigins2"] = new eventclass_Eoc_chigins2;
$tdataEoc_chigins2[".hasEvents"] = true;

?>