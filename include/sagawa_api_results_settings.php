<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasagawa_api_results = array();
	$tdatasagawa_api_results[".truncateText"] = true;
	$tdatasagawa_api_results[".NumberOfChars"] = 80;
	$tdatasagawa_api_results[".ShortName"] = "sagawa_api_results";
	$tdatasagawa_api_results[".OwnerID"] = "";
	$tdatasagawa_api_results[".OriginalTable"] = "sagawa_api_results";

//	field labels
$fieldLabelssagawa_api_results = array();
$fieldToolTipssagawa_api_results = array();
$pageTitlessagawa_api_results = array();
$placeHolderssagawa_api_results = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelssagawa_api_results["Japanese"] = array();
	$fieldToolTipssagawa_api_results["Japanese"] = array();
	$placeHolderssagawa_api_results["Japanese"] = array();
	$pageTitlessagawa_api_results["Japanese"] = array();
	$fieldLabelssagawa_api_results["Japanese"]["sagawa_api_result_id"] = "佐川APIId";
	$fieldToolTipssagawa_api_results["Japanese"]["sagawa_api_result_id"] = "";
	$placeHolderssagawa_api_results["Japanese"]["sagawa_api_result_id"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["send_at"] = "送信日";
	$fieldToolTipssagawa_api_results["Japanese"]["send_at"] = "";
	$placeHolderssagawa_api_results["Japanese"]["send_at"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["resultCode"] = "結果コード";
	$fieldToolTipssagawa_api_results["Japanese"]["resultCode"] = "";
	$placeHolderssagawa_api_results["Japanese"]["resultCode"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["userManageNumber"] = "管理番号";
	$fieldToolTipssagawa_api_results["Japanese"]["userManageNumber"] = "";
	$placeHolderssagawa_api_results["Japanese"]["userManageNumber"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["depotCode"] = "営業所コード";
	$fieldToolTipssagawa_api_results["Japanese"]["depotCode"] = "";
	$placeHolderssagawa_api_results["Japanese"]["depotCode"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["depotName"] = "営業所名";
	$fieldToolTipssagawa_api_results["Japanese"]["depotName"] = "";
	$placeHolderssagawa_api_results["Japanese"]["depotName"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["depotTel"] = "営業所TEL";
	$fieldToolTipssagawa_api_results["Japanese"]["depotTel"] = "";
	$placeHolderssagawa_api_results["Japanese"]["depotTel"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipssagawa_api_results["Japanese"]["updated_by"] = "";
	$placeHolderssagawa_api_results["Japanese"]["updated_by"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipssagawa_api_results["Japanese"]["updated_at"] = "";
	$placeHolderssagawa_api_results["Japanese"]["updated_at"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["created_by"] = "作成者";
	$fieldToolTipssagawa_api_results["Japanese"]["created_by"] = "";
	$placeHolderssagawa_api_results["Japanese"]["created_by"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["created_at"] = "作成日";
	$fieldToolTipssagawa_api_results["Japanese"]["created_at"] = "";
	$placeHolderssagawa_api_results["Japanese"]["created_at"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["haisoKosu"] = "配送個数";
	$fieldToolTipssagawa_api_results["Japanese"]["haisoKosu"] = "";
	$placeHolderssagawa_api_results["Japanese"]["haisoKosu"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["iraiAdd1"] = "依頼主住所1";
	$fieldToolTipssagawa_api_results["Japanese"]["iraiAdd1"] = "";
	$placeHolderssagawa_api_results["Japanese"]["iraiAdd1"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["iraiNm1"] = "依頼主氏名1";
	$fieldToolTipssagawa_api_results["Japanese"]["iraiNm1"] = "";
	$placeHolderssagawa_api_results["Japanese"]["iraiNm1"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["iraiYubin"] = "依頼主郵便番号";
	$fieldToolTipssagawa_api_results["Japanese"]["iraiYubin"] = "";
	$placeHolderssagawa_api_results["Japanese"]["iraiYubin"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["iraiTel"] = "依頼主電話番号";
	$fieldToolTipssagawa_api_results["Japanese"]["iraiTel"] = "";
	$placeHolderssagawa_api_results["Japanese"]["iraiTel"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["iraiMailAddress"] = "依頼主メールアドレス";
	$fieldToolTipssagawa_api_results["Japanese"]["iraiMailAddress"] = "";
	$placeHolderssagawa_api_results["Japanese"]["iraiMailAddress"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["shukaIraiShiteiDate"] = "集荷依頼指定日";
	$fieldToolTipssagawa_api_results["Japanese"]["shukaIraiShiteiDate"] = "";
	$placeHolderssagawa_api_results["Japanese"]["shukaIraiShiteiDate"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["shukaIraiShiteiTimeCode"] = "集荷依頼時間指定コード";
	$fieldToolTipssagawa_api_results["Japanese"]["shukaIraiShiteiTimeCode"] = "";
	$placeHolderssagawa_api_results["Japanese"]["shukaIraiShiteiTimeCode"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["link"] = "Link";
	$fieldToolTipssagawa_api_results["Japanese"]["link"] = "";
	$placeHolderssagawa_api_results["Japanese"]["link"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["iraiAdd2"] = "依頼主住所2";
	$fieldToolTipssagawa_api_results["Japanese"]["iraiAdd2"] = "";
	$placeHolderssagawa_api_results["Japanese"]["iraiAdd2"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["iraiAdd3"] = "依頼主住所3";
	$fieldToolTipssagawa_api_results["Japanese"]["iraiAdd3"] = "";
	$placeHolderssagawa_api_results["Japanese"]["iraiAdd3"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["kiji2"] = "記事2";
	$fieldToolTipssagawa_api_results["Japanese"]["kiji2"] = "";
	$placeHolderssagawa_api_results["Japanese"]["kiji2"] = "";
	$fieldLabelssagawa_api_results["Japanese"]["shippingNumber"] = "問合せ番号";
	$fieldToolTipssagawa_api_results["Japanese"]["shippingNumber"] = "";
	$placeHolderssagawa_api_results["Japanese"]["shippingNumber"] = "";
	if (count($fieldToolTipssagawa_api_results["Japanese"]))
		$tdatasagawa_api_results[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssagawa_api_results[""] = array();
	$fieldToolTipssagawa_api_results[""] = array();
	$placeHolderssagawa_api_results[""] = array();
	$pageTitlessagawa_api_results[""] = array();
	$fieldLabelssagawa_api_results[""]["sagawa_api_result_id"] = "Sagawa Api Result Id";
	$fieldToolTipssagawa_api_results[""]["sagawa_api_result_id"] = "";
	$placeHolderssagawa_api_results[""]["sagawa_api_result_id"] = "";
	$fieldLabelssagawa_api_results[""]["send_at"] = "Send At";
	$fieldToolTipssagawa_api_results[""]["send_at"] = "";
	$placeHolderssagawa_api_results[""]["send_at"] = "";
	$fieldLabelssagawa_api_results[""]["resultCode"] = "Result Code";
	$fieldToolTipssagawa_api_results[""]["resultCode"] = "";
	$placeHolderssagawa_api_results[""]["resultCode"] = "";
	$fieldLabelssagawa_api_results[""]["userManageNumber"] = "User Manage Number";
	$fieldToolTipssagawa_api_results[""]["userManageNumber"] = "";
	$placeHolderssagawa_api_results[""]["userManageNumber"] = "";
	$fieldLabelssagawa_api_results[""]["depotCode"] = "Depot Code";
	$fieldToolTipssagawa_api_results[""]["depotCode"] = "";
	$placeHolderssagawa_api_results[""]["depotCode"] = "";
	$fieldLabelssagawa_api_results[""]["depotName"] = "Depot Name";
	$fieldToolTipssagawa_api_results[""]["depotName"] = "";
	$placeHolderssagawa_api_results[""]["depotName"] = "";
	$fieldLabelssagawa_api_results[""]["depotTel"] = "Depot Tel";
	$fieldToolTipssagawa_api_results[""]["depotTel"] = "";
	$placeHolderssagawa_api_results[""]["depotTel"] = "";
	$fieldLabelssagawa_api_results[""]["updated_by"] = "Updated By";
	$fieldToolTipssagawa_api_results[""]["updated_by"] = "";
	$placeHolderssagawa_api_results[""]["updated_by"] = "";
	$fieldLabelssagawa_api_results[""]["updated_at"] = "Updated At";
	$fieldToolTipssagawa_api_results[""]["updated_at"] = "";
	$placeHolderssagawa_api_results[""]["updated_at"] = "";
	$fieldLabelssagawa_api_results[""]["created_by"] = "Created By";
	$fieldToolTipssagawa_api_results[""]["created_by"] = "";
	$placeHolderssagawa_api_results[""]["created_by"] = "";
	$fieldLabelssagawa_api_results[""]["created_at"] = "Created At";
	$fieldToolTipssagawa_api_results[""]["created_at"] = "";
	$placeHolderssagawa_api_results[""]["created_at"] = "";
	$fieldLabelssagawa_api_results[""]["haisoKosu"] = "Haiso Kosu";
	$fieldToolTipssagawa_api_results[""]["haisoKosu"] = "";
	$placeHolderssagawa_api_results[""]["haisoKosu"] = "";
	$fieldLabelssagawa_api_results[""]["iraiAdd1"] = "Irai Add1";
	$fieldToolTipssagawa_api_results[""]["iraiAdd1"] = "";
	$placeHolderssagawa_api_results[""]["iraiAdd1"] = "";
	$fieldLabelssagawa_api_results[""]["iraiNm1"] = "Irai Nm1";
	$fieldToolTipssagawa_api_results[""]["iraiNm1"] = "";
	$placeHolderssagawa_api_results[""]["iraiNm1"] = "";
	$fieldLabelssagawa_api_results[""]["iraiYubin"] = "Irai Yubin";
	$fieldToolTipssagawa_api_results[""]["iraiYubin"] = "";
	$placeHolderssagawa_api_results[""]["iraiYubin"] = "";
	$fieldLabelssagawa_api_results[""]["iraiTel"] = "Irai Tel";
	$fieldToolTipssagawa_api_results[""]["iraiTel"] = "";
	$placeHolderssagawa_api_results[""]["iraiTel"] = "";
	$fieldLabelssagawa_api_results[""]["iraiMailAddress"] = "Irai Mail Address";
	$fieldToolTipssagawa_api_results[""]["iraiMailAddress"] = "";
	$placeHolderssagawa_api_results[""]["iraiMailAddress"] = "";
	$fieldLabelssagawa_api_results[""]["shukaIraiShiteiDate"] = "Shuka Irai Shitei Date";
	$fieldToolTipssagawa_api_results[""]["shukaIraiShiteiDate"] = "";
	$placeHolderssagawa_api_results[""]["shukaIraiShiteiDate"] = "";
	$fieldLabelssagawa_api_results[""]["shukaIraiShiteiTimeCode"] = "Shuka Irai Shitei Time Code";
	$fieldToolTipssagawa_api_results[""]["shukaIraiShiteiTimeCode"] = "";
	$placeHolderssagawa_api_results[""]["shukaIraiShiteiTimeCode"] = "";
	$fieldLabelssagawa_api_results[""]["link"] = "Link";
	$fieldToolTipssagawa_api_results[""]["link"] = "";
	$placeHolderssagawa_api_results[""]["link"] = "";
	$fieldLabelssagawa_api_results[""]["iraiAdd2"] = "Irai Add2";
	$fieldToolTipssagawa_api_results[""]["iraiAdd2"] = "";
	$placeHolderssagawa_api_results[""]["iraiAdd2"] = "";
	$fieldLabelssagawa_api_results[""]["iraiAdd3"] = "Irai Add3";
	$fieldToolTipssagawa_api_results[""]["iraiAdd3"] = "";
	$placeHolderssagawa_api_results[""]["iraiAdd3"] = "";
	$fieldLabelssagawa_api_results[""]["kiji2"] = "Kiji2";
	$fieldToolTipssagawa_api_results[""]["kiji2"] = "";
	$placeHolderssagawa_api_results[""]["kiji2"] = "";
	$fieldLabelssagawa_api_results[""]["shippingNumber"] = "Shipping Number";
	$fieldToolTipssagawa_api_results[""]["shippingNumber"] = "";
	$placeHolderssagawa_api_results[""]["shippingNumber"] = "";
	if (count($fieldToolTipssagawa_api_results[""]))
		$tdatasagawa_api_results[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssagawa_api_results["English"] = array();
	$fieldToolTipssagawa_api_results["English"] = array();
	$placeHolderssagawa_api_results["English"] = array();
	$pageTitlessagawa_api_results["English"] = array();
	$fieldLabelssagawa_api_results["English"]["sagawa_api_result_id"] = "Sagawa Api Result Id";
	$fieldToolTipssagawa_api_results["English"]["sagawa_api_result_id"] = "";
	$placeHolderssagawa_api_results["English"]["sagawa_api_result_id"] = "";
	$fieldLabelssagawa_api_results["English"]["send_at"] = "Send At";
	$fieldToolTipssagawa_api_results["English"]["send_at"] = "";
	$placeHolderssagawa_api_results["English"]["send_at"] = "";
	$fieldLabelssagawa_api_results["English"]["resultCode"] = "Result Code";
	$fieldToolTipssagawa_api_results["English"]["resultCode"] = "";
	$placeHolderssagawa_api_results["English"]["resultCode"] = "";
	$fieldLabelssagawa_api_results["English"]["userManageNumber"] = "User Manage Number";
	$fieldToolTipssagawa_api_results["English"]["userManageNumber"] = "";
	$placeHolderssagawa_api_results["English"]["userManageNumber"] = "";
	$fieldLabelssagawa_api_results["English"]["depotCode"] = "Depot Code";
	$fieldToolTipssagawa_api_results["English"]["depotCode"] = "";
	$placeHolderssagawa_api_results["English"]["depotCode"] = "";
	$fieldLabelssagawa_api_results["English"]["depotName"] = "Depot Name";
	$fieldToolTipssagawa_api_results["English"]["depotName"] = "";
	$placeHolderssagawa_api_results["English"]["depotName"] = "";
	$fieldLabelssagawa_api_results["English"]["depotTel"] = "Depot Tel";
	$fieldToolTipssagawa_api_results["English"]["depotTel"] = "";
	$placeHolderssagawa_api_results["English"]["depotTel"] = "";
	$fieldLabelssagawa_api_results["English"]["updated_by"] = "Updated By";
	$fieldToolTipssagawa_api_results["English"]["updated_by"] = "";
	$placeHolderssagawa_api_results["English"]["updated_by"] = "";
	$fieldLabelssagawa_api_results["English"]["updated_at"] = "Updated At";
	$fieldToolTipssagawa_api_results["English"]["updated_at"] = "";
	$placeHolderssagawa_api_results["English"]["updated_at"] = "";
	$fieldLabelssagawa_api_results["English"]["created_by"] = "Created By";
	$fieldToolTipssagawa_api_results["English"]["created_by"] = "";
	$placeHolderssagawa_api_results["English"]["created_by"] = "";
	$fieldLabelssagawa_api_results["English"]["created_at"] = "Created At";
	$fieldToolTipssagawa_api_results["English"]["created_at"] = "";
	$placeHolderssagawa_api_results["English"]["created_at"] = "";
	$fieldLabelssagawa_api_results["English"]["haisoKosu"] = "Haiso Kosu";
	$fieldToolTipssagawa_api_results["English"]["haisoKosu"] = "";
	$placeHolderssagawa_api_results["English"]["haisoKosu"] = "";
	$fieldLabelssagawa_api_results["English"]["iraiAdd1"] = "Irai Add1";
	$fieldToolTipssagawa_api_results["English"]["iraiAdd1"] = "";
	$placeHolderssagawa_api_results["English"]["iraiAdd1"] = "";
	$fieldLabelssagawa_api_results["English"]["iraiNm1"] = "Irai Nm1";
	$fieldToolTipssagawa_api_results["English"]["iraiNm1"] = "";
	$placeHolderssagawa_api_results["English"]["iraiNm1"] = "";
	$fieldLabelssagawa_api_results["English"]["iraiYubin"] = "Irai Yubin";
	$fieldToolTipssagawa_api_results["English"]["iraiYubin"] = "";
	$placeHolderssagawa_api_results["English"]["iraiYubin"] = "";
	$fieldLabelssagawa_api_results["English"]["iraiTel"] = "Irai Tel";
	$fieldToolTipssagawa_api_results["English"]["iraiTel"] = "";
	$placeHolderssagawa_api_results["English"]["iraiTel"] = "";
	$fieldLabelssagawa_api_results["English"]["iraiMailAddress"] = "Irai Mail Address";
	$fieldToolTipssagawa_api_results["English"]["iraiMailAddress"] = "";
	$placeHolderssagawa_api_results["English"]["iraiMailAddress"] = "";
	$fieldLabelssagawa_api_results["English"]["shukaIraiShiteiDate"] = "Shuka Irai Shitei Date";
	$fieldToolTipssagawa_api_results["English"]["shukaIraiShiteiDate"] = "";
	$placeHolderssagawa_api_results["English"]["shukaIraiShiteiDate"] = "";
	$fieldLabelssagawa_api_results["English"]["shukaIraiShiteiTimeCode"] = "Shuka Irai Shitei Time Code";
	$fieldToolTipssagawa_api_results["English"]["shukaIraiShiteiTimeCode"] = "";
	$placeHolderssagawa_api_results["English"]["shukaIraiShiteiTimeCode"] = "";
	$fieldLabelssagawa_api_results["English"]["link"] = "Link";
	$fieldToolTipssagawa_api_results["English"]["link"] = "";
	$placeHolderssagawa_api_results["English"]["link"] = "";
	$fieldLabelssagawa_api_results["English"]["iraiAdd2"] = "Irai Add2";
	$fieldToolTipssagawa_api_results["English"]["iraiAdd2"] = "";
	$placeHolderssagawa_api_results["English"]["iraiAdd2"] = "";
	$fieldLabelssagawa_api_results["English"]["iraiAdd3"] = "Irai Add3";
	$fieldToolTipssagawa_api_results["English"]["iraiAdd3"] = "";
	$placeHolderssagawa_api_results["English"]["iraiAdd3"] = "";
	$fieldLabelssagawa_api_results["English"]["kiji2"] = "Kiji2";
	$fieldToolTipssagawa_api_results["English"]["kiji2"] = "";
	$placeHolderssagawa_api_results["English"]["kiji2"] = "";
	$fieldLabelssagawa_api_results["English"]["shippingNumber"] = "Shipping Number";
	$fieldToolTipssagawa_api_results["English"]["shippingNumber"] = "";
	$placeHolderssagawa_api_results["English"]["shippingNumber"] = "";
	if (count($fieldToolTipssagawa_api_results["English"]))
		$tdatasagawa_api_results[".isUseToolTips"] = true;
}


	$tdatasagawa_api_results[".NCSearch"] = true;



$tdatasagawa_api_results[".shortTableName"] = "sagawa_api_results";
$tdatasagawa_api_results[".nSecOptions"] = 0;
$tdatasagawa_api_results[".recsPerRowPrint"] = 1;
$tdatasagawa_api_results[".mainTableOwnerID"] = "";
$tdatasagawa_api_results[".moveNext"] = 1;
$tdatasagawa_api_results[".entityType"] = 0;

$tdatasagawa_api_results[".strOriginalTableName"] = "sagawa_api_results";

	



$tdatasagawa_api_results[".showAddInPopup"] = false;

$tdatasagawa_api_results[".showEditInPopup"] = false;

$tdatasagawa_api_results[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasagawa_api_results[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasagawa_api_results[".fieldsForRegister"] = array();

$tdatasagawa_api_results[".listAjax"] = false;

	$tdatasagawa_api_results[".audit"] = true;

	$tdatasagawa_api_results[".locking"] = false;



$tdatasagawa_api_results[".list"] = true;



$tdatasagawa_api_results[".reorderRecordsByHeader"] = true;





$tdatasagawa_api_results[".exportTo"] = true;



$tdatasagawa_api_results[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasagawa_api_results[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasagawa_api_results[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasagawa_api_results[".searchSaving"] = false;
//

$tdatasagawa_api_results[".showSearchPanel"] = true;
		$tdatasagawa_api_results[".flexibleSearch"] = true;

$tdatasagawa_api_results[".isUseAjaxSuggest"] = true;

$tdatasagawa_api_results[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatasagawa_api_results[".ajaxCodeSnippetAdded"] = false;

$tdatasagawa_api_results[".buttonsAdded"] = false;

$tdatasagawa_api_results[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasagawa_api_results[".isUseTimeForSearch"] = false;




$tdatasagawa_api_results[".detailsLinksOnList"] = "1";

$tdatasagawa_api_results[".allSearchFields"] = array();
$tdatasagawa_api_results[".filterFields"] = array();
$tdatasagawa_api_results[".requiredSearchFields"] = array();

$tdatasagawa_api_results[".allSearchFields"][] = "sagawa_api_result_id";
	$tdatasagawa_api_results[".allSearchFields"][] = "link";
	$tdatasagawa_api_results[".allSearchFields"][] = "send_at";
	$tdatasagawa_api_results[".allSearchFields"][] = "resultCode";
	$tdatasagawa_api_results[".allSearchFields"][] = "shippingNumber";
	$tdatasagawa_api_results[".allSearchFields"][] = "iraiNm1";
	$tdatasagawa_api_results[".allSearchFields"][] = "shukaIraiShiteiDate";
	$tdatasagawa_api_results[".allSearchFields"][] = "shukaIraiShiteiTimeCode";
	$tdatasagawa_api_results[".allSearchFields"][] = "iraiYubin";
	$tdatasagawa_api_results[".allSearchFields"][] = "iraiAdd1";
	$tdatasagawa_api_results[".allSearchFields"][] = "iraiAdd2";
	$tdatasagawa_api_results[".allSearchFields"][] = "iraiAdd3";
	$tdatasagawa_api_results[".allSearchFields"][] = "iraiTel";
	$tdatasagawa_api_results[".allSearchFields"][] = "iraiMailAddress";
	$tdatasagawa_api_results[".allSearchFields"][] = "depotCode";
	$tdatasagawa_api_results[".allSearchFields"][] = "depotName";
	$tdatasagawa_api_results[".allSearchFields"][] = "depotTel";
	$tdatasagawa_api_results[".allSearchFields"][] = "haisoKosu";
	$tdatasagawa_api_results[".allSearchFields"][] = "userManageNumber";
	$tdatasagawa_api_results[".allSearchFields"][] = "kiji2";
	$tdatasagawa_api_results[".allSearchFields"][] = "updated_by";
	$tdatasagawa_api_results[".allSearchFields"][] = "updated_at";
	$tdatasagawa_api_results[".allSearchFields"][] = "created_by";
	$tdatasagawa_api_results[".allSearchFields"][] = "created_at";
	

$tdatasagawa_api_results[".googleLikeFields"] = array();
$tdatasagawa_api_results[".googleLikeFields"][] = "sagawa_api_result_id";
$tdatasagawa_api_results[".googleLikeFields"][] = "link";
$tdatasagawa_api_results[".googleLikeFields"][] = "send_at";
$tdatasagawa_api_results[".googleLikeFields"][] = "resultCode";
$tdatasagawa_api_results[".googleLikeFields"][] = "userManageNumber";
$tdatasagawa_api_results[".googleLikeFields"][] = "depotCode";
$tdatasagawa_api_results[".googleLikeFields"][] = "depotName";
$tdatasagawa_api_results[".googleLikeFields"][] = "depotTel";
$tdatasagawa_api_results[".googleLikeFields"][] = "updated_by";
$tdatasagawa_api_results[".googleLikeFields"][] = "updated_at";
$tdatasagawa_api_results[".googleLikeFields"][] = "created_by";
$tdatasagawa_api_results[".googleLikeFields"][] = "created_at";
$tdatasagawa_api_results[".googleLikeFields"][] = "haisoKosu";
$tdatasagawa_api_results[".googleLikeFields"][] = "iraiAdd1";
$tdatasagawa_api_results[".googleLikeFields"][] = "iraiNm1";
$tdatasagawa_api_results[".googleLikeFields"][] = "iraiYubin";
$tdatasagawa_api_results[".googleLikeFields"][] = "iraiTel";
$tdatasagawa_api_results[".googleLikeFields"][] = "iraiMailAddress";
$tdatasagawa_api_results[".googleLikeFields"][] = "shukaIraiShiteiDate";
$tdatasagawa_api_results[".googleLikeFields"][] = "shukaIraiShiteiTimeCode";
$tdatasagawa_api_results[".googleLikeFields"][] = "iraiAdd2";
$tdatasagawa_api_results[".googleLikeFields"][] = "iraiAdd3";
$tdatasagawa_api_results[".googleLikeFields"][] = "kiji2";
$tdatasagawa_api_results[".googleLikeFields"][] = "shippingNumber";

$tdatasagawa_api_results[".panelSearchFields"] = array();
$tdatasagawa_api_results[".searchPanelOptions"] = array();
$tdatasagawa_api_results[".panelSearchFields"][] = "send_at";
	$tdatasagawa_api_results[".panelSearchFields"][] = "resultCode";
	$tdatasagawa_api_results[".panelSearchFields"][] = "iraiNm1";
	$tdatasagawa_api_results[".panelSearchFields"][] = "shukaIraiShiteiDate";
	$tdatasagawa_api_results[".panelSearchFields"][] = "shukaIraiShiteiTimeCode";
	$tdatasagawa_api_results[".panelSearchFields"][] = "iraiYubin";
	$tdatasagawa_api_results[".panelSearchFields"][] = "iraiAdd1";
	$tdatasagawa_api_results[".panelSearchFields"][] = "iraiAdd2";
	$tdatasagawa_api_results[".panelSearchFields"][] = "iraiAdd3";
	$tdatasagawa_api_results[".panelSearchFields"][] = "iraiTel";
	$tdatasagawa_api_results[".panelSearchFields"][] = "iraiMailAddress";
	$tdatasagawa_api_results[".panelSearchFields"][] = "depotCode";
	$tdatasagawa_api_results[".panelSearchFields"][] = "depotName";
	$tdatasagawa_api_results[".panelSearchFields"][] = "depotTel";
	$tdatasagawa_api_results[".panelSearchFields"][] = "userManageNumber";
	
$tdatasagawa_api_results[".advSearchFields"] = array();
$tdatasagawa_api_results[".advSearchFields"][] = "sagawa_api_result_id";
$tdatasagawa_api_results[".advSearchFields"][] = "link";
$tdatasagawa_api_results[".advSearchFields"][] = "send_at";
$tdatasagawa_api_results[".advSearchFields"][] = "resultCode";
$tdatasagawa_api_results[".advSearchFields"][] = "shippingNumber";
$tdatasagawa_api_results[".advSearchFields"][] = "iraiNm1";
$tdatasagawa_api_results[".advSearchFields"][] = "shukaIraiShiteiDate";
$tdatasagawa_api_results[".advSearchFields"][] = "shukaIraiShiteiTimeCode";
$tdatasagawa_api_results[".advSearchFields"][] = "iraiYubin";
$tdatasagawa_api_results[".advSearchFields"][] = "iraiAdd1";
$tdatasagawa_api_results[".advSearchFields"][] = "iraiAdd2";
$tdatasagawa_api_results[".advSearchFields"][] = "iraiAdd3";
$tdatasagawa_api_results[".advSearchFields"][] = "iraiTel";
$tdatasagawa_api_results[".advSearchFields"][] = "iraiMailAddress";
$tdatasagawa_api_results[".advSearchFields"][] = "depotCode";
$tdatasagawa_api_results[".advSearchFields"][] = "depotName";
$tdatasagawa_api_results[".advSearchFields"][] = "depotTel";
$tdatasagawa_api_results[".advSearchFields"][] = "haisoKosu";
$tdatasagawa_api_results[".advSearchFields"][] = "userManageNumber";
$tdatasagawa_api_results[".advSearchFields"][] = "kiji2";
$tdatasagawa_api_results[".advSearchFields"][] = "updated_by";
$tdatasagawa_api_results[".advSearchFields"][] = "updated_at";
$tdatasagawa_api_results[".advSearchFields"][] = "created_by";
$tdatasagawa_api_results[".advSearchFields"][] = "created_at";

$tdatasagawa_api_results[".tableType"] = "list";

$tdatasagawa_api_results[".printerPageOrientation"] = 0;
$tdatasagawa_api_results[".nPrinterPageScale"] = 100;

$tdatasagawa_api_results[".nPrinterSplitRecords"] = 40;

$tdatasagawa_api_results[".nPrinterPDFSplitRecords"] = 40;



$tdatasagawa_api_results[".geocodingEnabled"] = false;





$tdatasagawa_api_results[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatasagawa_api_results[".pageSize"] = 20;

$tdatasagawa_api_results[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `send_at` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasagawa_api_results[".strOrderBy"] = $tstrOrderBy;

$tdatasagawa_api_results[".orderindexes"] = array();
$tdatasagawa_api_results[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`send_at`");

$tdatasagawa_api_results[".sqlHead"] = "SELECT `sagawa_api_result_id`,  `sagawa_api_result_id` AS `link`,  `send_at`,  `resultCode`,  `userManageNumber`,  `depotCode`,  `depotName`,  `depotTel`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`,  `haisoKosu`,  `iraiAdd1`,  `iraiNm1`,  `iraiYubin`,  `iraiTel`,  `iraiMailAddress`,  `shukaIraiShiteiDate`,  `shukaIraiShiteiTimeCode`,  `iraiAdd2`,  `iraiAdd3`,  `kiji2`,  `shippingNumber`";
$tdatasagawa_api_results[".sqlFrom"] = "FROM `sagawa_api_results`";
$tdatasagawa_api_results[".sqlWhereExpr"] = "";
$tdatasagawa_api_results[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasagawa_api_results[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasagawa_api_results[".arrGroupsPerPage"] = $arrGPP;

$tdatasagawa_api_results[".highlightSearchResults"] = true;

$tableKeyssagawa_api_results = array();
$tableKeyssagawa_api_results[] = "sagawa_api_result_id";
$tdatasagawa_api_results[".Keys"] = $tableKeyssagawa_api_results;

$tdatasagawa_api_results[".listFields"] = array();
$tdatasagawa_api_results[".listFields"][] = "sagawa_api_result_id";
$tdatasagawa_api_results[".listFields"][] = "link";
$tdatasagawa_api_results[".listFields"][] = "send_at";
$tdatasagawa_api_results[".listFields"][] = "resultCode";
$tdatasagawa_api_results[".listFields"][] = "shippingNumber";
$tdatasagawa_api_results[".listFields"][] = "iraiNm1";
$tdatasagawa_api_results[".listFields"][] = "shukaIraiShiteiDate";
$tdatasagawa_api_results[".listFields"][] = "shukaIraiShiteiTimeCode";
$tdatasagawa_api_results[".listFields"][] = "iraiYubin";
$tdatasagawa_api_results[".listFields"][] = "iraiAdd1";
$tdatasagawa_api_results[".listFields"][] = "iraiAdd2";
$tdatasagawa_api_results[".listFields"][] = "iraiAdd3";
$tdatasagawa_api_results[".listFields"][] = "iraiTel";
$tdatasagawa_api_results[".listFields"][] = "iraiMailAddress";
$tdatasagawa_api_results[".listFields"][] = "depotCode";
$tdatasagawa_api_results[".listFields"][] = "depotName";
$tdatasagawa_api_results[".listFields"][] = "depotTel";
$tdatasagawa_api_results[".listFields"][] = "haisoKosu";
$tdatasagawa_api_results[".listFields"][] = "userManageNumber";
$tdatasagawa_api_results[".listFields"][] = "kiji2";
$tdatasagawa_api_results[".listFields"][] = "updated_by";
$tdatasagawa_api_results[".listFields"][] = "updated_at";
$tdatasagawa_api_results[".listFields"][] = "created_by";
$tdatasagawa_api_results[".listFields"][] = "created_at";

$tdatasagawa_api_results[".hideMobileList"] = array();


$tdatasagawa_api_results[".viewFields"] = array();

$tdatasagawa_api_results[".addFields"] = array();

$tdatasagawa_api_results[".masterListFields"] = array();
$tdatasagawa_api_results[".masterListFields"][] = "sagawa_api_result_id";
$tdatasagawa_api_results[".masterListFields"][] = "link";
$tdatasagawa_api_results[".masterListFields"][] = "send_at";
$tdatasagawa_api_results[".masterListFields"][] = "resultCode";
$tdatasagawa_api_results[".masterListFields"][] = "shippingNumber";
$tdatasagawa_api_results[".masterListFields"][] = "iraiNm1";
$tdatasagawa_api_results[".masterListFields"][] = "shukaIraiShiteiDate";
$tdatasagawa_api_results[".masterListFields"][] = "shukaIraiShiteiTimeCode";
$tdatasagawa_api_results[".masterListFields"][] = "iraiYubin";
$tdatasagawa_api_results[".masterListFields"][] = "iraiAdd1";
$tdatasagawa_api_results[".masterListFields"][] = "iraiAdd2";
$tdatasagawa_api_results[".masterListFields"][] = "iraiAdd3";
$tdatasagawa_api_results[".masterListFields"][] = "iraiTel";
$tdatasagawa_api_results[".masterListFields"][] = "iraiMailAddress";
$tdatasagawa_api_results[".masterListFields"][] = "depotCode";
$tdatasagawa_api_results[".masterListFields"][] = "depotName";
$tdatasagawa_api_results[".masterListFields"][] = "depotTel";
$tdatasagawa_api_results[".masterListFields"][] = "haisoKosu";
$tdatasagawa_api_results[".masterListFields"][] = "userManageNumber";
$tdatasagawa_api_results[".masterListFields"][] = "kiji2";
$tdatasagawa_api_results[".masterListFields"][] = "updated_by";
$tdatasagawa_api_results[".masterListFields"][] = "updated_at";
$tdatasagawa_api_results[".masterListFields"][] = "created_by";
$tdatasagawa_api_results[".masterListFields"][] = "created_at";

$tdatasagawa_api_results[".inlineAddFields"] = array();

$tdatasagawa_api_results[".editFields"] = array();

$tdatasagawa_api_results[".inlineEditFields"] = array();

$tdatasagawa_api_results[".updateSelectedFields"] = array();


$tdatasagawa_api_results[".exportFields"] = array();
$tdatasagawa_api_results[".exportFields"][] = "sagawa_api_result_id";
$tdatasagawa_api_results[".exportFields"][] = "link";
$tdatasagawa_api_results[".exportFields"][] = "send_at";
$tdatasagawa_api_results[".exportFields"][] = "resultCode";
$tdatasagawa_api_results[".exportFields"][] = "shippingNumber";
$tdatasagawa_api_results[".exportFields"][] = "iraiNm1";
$tdatasagawa_api_results[".exportFields"][] = "shukaIraiShiteiDate";
$tdatasagawa_api_results[".exportFields"][] = "shukaIraiShiteiTimeCode";
$tdatasagawa_api_results[".exportFields"][] = "iraiYubin";
$tdatasagawa_api_results[".exportFields"][] = "iraiAdd1";
$tdatasagawa_api_results[".exportFields"][] = "iraiAdd2";
$tdatasagawa_api_results[".exportFields"][] = "iraiAdd3";
$tdatasagawa_api_results[".exportFields"][] = "iraiTel";
$tdatasagawa_api_results[".exportFields"][] = "iraiMailAddress";
$tdatasagawa_api_results[".exportFields"][] = "depotCode";
$tdatasagawa_api_results[".exportFields"][] = "depotName";
$tdatasagawa_api_results[".exportFields"][] = "depotTel";
$tdatasagawa_api_results[".exportFields"][] = "haisoKosu";
$tdatasagawa_api_results[".exportFields"][] = "userManageNumber";
$tdatasagawa_api_results[".exportFields"][] = "kiji2";
$tdatasagawa_api_results[".exportFields"][] = "updated_by";
$tdatasagawa_api_results[".exportFields"][] = "updated_at";
$tdatasagawa_api_results[".exportFields"][] = "created_by";
$tdatasagawa_api_results[".exportFields"][] = "created_at";

$tdatasagawa_api_results[".importFields"] = array();

$tdatasagawa_api_results[".printFields"] = array();

//	sagawa_api_result_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sagawa_api_result_id";
	$fdata["GoodName"] = "sagawa_api_result_id";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","sagawa_api_result_id");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sagawa_api_result_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sagawa_api_result_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

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




	$tdatasagawa_api_results["sagawa_api_result_id"] = $fdata;
//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","link");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sagawa_api_result_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sagawa_api_result_id`";

	
	
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




	$tdatasagawa_api_results["link"] = $fdata;
//	send_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "send_at";
	$fdata["GoodName"] = "send_at";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","send_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "send_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`send_at`";

	
	
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




	$tdatasagawa_api_results["send_at"] = $fdata;
//	resultCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "resultCode";
	$fdata["GoodName"] = "resultCode";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","resultCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "resultCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`resultCode`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "sagawa_api_error_details1";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "error_code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "error_output";

	
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




	$tdatasagawa_api_results["resultCode"] = $fdata;
//	userManageNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "userManageNumber";
	$fdata["GoodName"] = "userManageNumber";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","userManageNumber");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "userManageNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`userManageNumber`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasagawa_api_results["userManageNumber"] = $fdata;
//	depotCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "depotCode";
	$fdata["GoodName"] = "depotCode";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","depotCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "depotCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`depotCode`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasagawa_api_results["depotCode"] = $fdata;
//	depotName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "depotName";
	$fdata["GoodName"] = "depotName";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","depotName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "depotName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`depotName`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasagawa_api_results["depotName"] = $fdata;
//	depotTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "depotTel";
	$fdata["GoodName"] = "depotTel";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","depotTel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "depotTel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`depotTel`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasagawa_api_results["depotTel"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatasagawa_api_results["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","updated_at");
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




	$tdatasagawa_api_results["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","created_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatasagawa_api_results["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","created_at");
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




	$tdatasagawa_api_results["created_at"] = $fdata;
//	haisoKosu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "haisoKosu";
	$fdata["GoodName"] = "haisoKosu";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","haisoKosu");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "haisoKosu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`haisoKosu`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasagawa_api_results["haisoKosu"] = $fdata;
//	iraiAdd1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "iraiAdd1";
	$fdata["GoodName"] = "iraiAdd1";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","iraiAdd1");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "iraiAdd1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`iraiAdd1`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasagawa_api_results["iraiAdd1"] = $fdata;
//	iraiNm1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "iraiNm1";
	$fdata["GoodName"] = "iraiNm1";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","iraiNm1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "iraiNm1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`iraiNm1`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasagawa_api_results["iraiNm1"] = $fdata;
//	iraiYubin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "iraiYubin";
	$fdata["GoodName"] = "iraiYubin";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","iraiYubin");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "iraiYubin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`iraiYubin`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasagawa_api_results["iraiYubin"] = $fdata;
//	iraiTel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "iraiTel";
	$fdata["GoodName"] = "iraiTel";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","iraiTel");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "iraiTel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`iraiTel`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasagawa_api_results["iraiTel"] = $fdata;
//	iraiMailAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "iraiMailAddress";
	$fdata["GoodName"] = "iraiMailAddress";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","iraiMailAddress");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "iraiMailAddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`iraiMailAddress`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasagawa_api_results["iraiMailAddress"] = $fdata;
//	shukaIraiShiteiDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "shukaIraiShiteiDate";
	$fdata["GoodName"] = "shukaIraiShiteiDate";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","shukaIraiShiteiDate");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shukaIraiShiteiDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shukaIraiShiteiDate`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasagawa_api_results["shukaIraiShiteiDate"] = $fdata;
//	shukaIraiShiteiTimeCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "shukaIraiShiteiTimeCode";
	$fdata["GoodName"] = "shukaIraiShiteiTimeCode";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","shukaIraiShiteiTimeCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shukaIraiShiteiTimeCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shukaIraiShiteiTimeCode`";

	
	
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




	$tdatasagawa_api_results["shukaIraiShiteiTimeCode"] = $fdata;
//	iraiAdd2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "iraiAdd2";
	$fdata["GoodName"] = "iraiAdd2";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","iraiAdd2");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "iraiAdd2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`iraiAdd2`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasagawa_api_results["iraiAdd2"] = $fdata;
//	iraiAdd3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "iraiAdd3";
	$fdata["GoodName"] = "iraiAdd3";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","iraiAdd3");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "iraiAdd3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`iraiAdd3`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasagawa_api_results["iraiAdd3"] = $fdata;
//	kiji2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "kiji2";
	$fdata["GoodName"] = "kiji2";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","kiji2");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kiji2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kiji2`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasagawa_api_results["kiji2"] = $fdata;
//	shippingNumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "shippingNumber";
	$fdata["GoodName"] = "shippingNumber";
	$fdata["ownerTable"] = "sagawa_api_results";
	$fdata["Label"] = GetFieldLabel("sagawa_api_results","shippingNumber");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "shippingNumber";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shippingNumber`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdatasagawa_api_results["shippingNumber"] = $fdata;


$tables_data["sagawa_api_results"]=&$tdatasagawa_api_results;
$field_labels["sagawa_api_results"] = &$fieldLabelssagawa_api_results;
$fieldToolTips["sagawa_api_results"] = &$fieldToolTipssagawa_api_results;
$placeHolders["sagawa_api_results"] = &$placeHolderssagawa_api_results;
$page_titles["sagawa_api_results"] = &$pageTitlessagawa_api_results;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sagawa_api_results"] = array();
//	sagawa_api_result_codes
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="sagawa_api_result_codes";
		$detailsParam["dOriginalTable"] = "sagawa_api_result_codes";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "sagawa_api_result_codes";
	$detailsParam["dCaptionTable"] = GetTableCaption("sagawa_api_result_codes");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = false;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["sagawa_api_results"][$dIndex] = $detailsParam;

	
		$detailsTablesData["sagawa_api_results"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["sagawa_api_results"][$dIndex]["masterKeys"][]="sagawa_api_result_id";

				$detailsTablesData["sagawa_api_results"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["sagawa_api_results"][$dIndex]["detailKeys"][]="sagawa_api_result_id";

// tables which are master tables for current table (detail)
$masterTablesData["sagawa_api_results"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sagawa_api_results()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`sagawa_api_result_id`,  `sagawa_api_result_id` AS `link`,  `send_at`,  `resultCode`,  `userManageNumber`,  `depotCode`,  `depotName`,  `depotTel`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`,  `haisoKosu`,  `iraiAdd1`,  `iraiNm1`,  `iraiYubin`,  `iraiTel`,  `iraiMailAddress`,  `shukaIraiShiteiDate`,  `shukaIraiShiteiTimeCode`,  `iraiAdd2`,  `iraiAdd3`,  `kiji2`,  `shippingNumber`";
$proto0["m_strFrom"] = "FROM `sagawa_api_results`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `send_at` DESC";
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
	"m_strName" => "sagawa_api_result_id",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto6["m_sql"] = "`sagawa_api_result_id`";
$proto6["m_srcTableName"] = "sagawa_api_results";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sagawa_api_result_id",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto8["m_sql"] = "`sagawa_api_result_id`";
$proto8["m_srcTableName"] = "sagawa_api_results";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "link";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "send_at",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto10["m_sql"] = "`send_at`";
$proto10["m_srcTableName"] = "sagawa_api_results";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "resultCode",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto12["m_sql"] = "`resultCode`";
$proto12["m_srcTableName"] = "sagawa_api_results";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "userManageNumber",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto14["m_sql"] = "`userManageNumber`";
$proto14["m_srcTableName"] = "sagawa_api_results";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "depotCode",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto16["m_sql"] = "`depotCode`";
$proto16["m_srcTableName"] = "sagawa_api_results";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "depotName",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto18["m_sql"] = "`depotName`";
$proto18["m_srcTableName"] = "sagawa_api_results";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "depotTel",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto20["m_sql"] = "`depotTel`";
$proto20["m_srcTableName"] = "sagawa_api_results";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto22["m_sql"] = "`updated_by`";
$proto22["m_srcTableName"] = "sagawa_api_results";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto24["m_sql"] = "`updated_at`";
$proto24["m_srcTableName"] = "sagawa_api_results";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto26["m_sql"] = "`created_by`";
$proto26["m_srcTableName"] = "sagawa_api_results";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto28["m_sql"] = "`created_at`";
$proto28["m_srcTableName"] = "sagawa_api_results";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "haisoKosu",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto30["m_sql"] = "`haisoKosu`";
$proto30["m_srcTableName"] = "sagawa_api_results";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "iraiAdd1",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto32["m_sql"] = "`iraiAdd1`";
$proto32["m_srcTableName"] = "sagawa_api_results";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "iraiNm1",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto34["m_sql"] = "`iraiNm1`";
$proto34["m_srcTableName"] = "sagawa_api_results";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "iraiYubin",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto36["m_sql"] = "`iraiYubin`";
$proto36["m_srcTableName"] = "sagawa_api_results";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "iraiTel",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto38["m_sql"] = "`iraiTel`";
$proto38["m_srcTableName"] = "sagawa_api_results";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "iraiMailAddress",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto40["m_sql"] = "`iraiMailAddress`";
$proto40["m_srcTableName"] = "sagawa_api_results";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "shukaIraiShiteiDate",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto42["m_sql"] = "`shukaIraiShiteiDate`";
$proto42["m_srcTableName"] = "sagawa_api_results";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "shukaIraiShiteiTimeCode",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto44["m_sql"] = "`shukaIraiShiteiTimeCode`";
$proto44["m_srcTableName"] = "sagawa_api_results";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "iraiAdd2",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto46["m_sql"] = "`iraiAdd2`";
$proto46["m_srcTableName"] = "sagawa_api_results";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "iraiAdd3",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto48["m_sql"] = "`iraiAdd3`";
$proto48["m_srcTableName"] = "sagawa_api_results";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "kiji2",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto50["m_sql"] = "`kiji2`";
$proto50["m_srcTableName"] = "sagawa_api_results";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "shippingNumber",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto52["m_sql"] = "`shippingNumber`";
$proto52["m_srcTableName"] = "sagawa_api_results";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "sagawa_api_results";
$proto55["m_srcTableName"] = "sagawa_api_results";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "sagawa_api_result_id";
$proto55["m_columns"][] = "request_xml";
$proto55["m_columns"][] = "response_xml";
$proto55["m_columns"][] = "send_at";
$proto55["m_columns"][] = "resultCode";
$proto55["m_columns"][] = "userManageNumber";
$proto55["m_columns"][] = "depotCode";
$proto55["m_columns"][] = "depotName";
$proto55["m_columns"][] = "depotTel";
$proto55["m_columns"][] = "updated_by";
$proto55["m_columns"][] = "updated_at";
$proto55["m_columns"][] = "created_by";
$proto55["m_columns"][] = "created_at";
$proto55["m_columns"][] = "haisoKosu";
$proto55["m_columns"][] = "iraiAdd1";
$proto55["m_columns"][] = "iraiAdd2";
$proto55["m_columns"][] = "iraiAdd3";
$proto55["m_columns"][] = "iraiNm1";
$proto55["m_columns"][] = "iraiYubin";
$proto55["m_columns"][] = "iraiTel";
$proto55["m_columns"][] = "iraiMailAddress";
$proto55["m_columns"][] = "shukaIraiShiteiDate";
$proto55["m_columns"][] = "shukaIraiShiteiTimeCode";
$proto55["m_columns"][] = "kiji2";
$proto55["m_columns"][] = "shippingNumber";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "`sagawa_api_results`";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "sagawa_api_results";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto58=array();
						$obj = new SQLField(array(
	"m_strName" => "send_at",
	"m_strTable" => "sagawa_api_results",
	"m_srcTableName" => "sagawa_api_results"
));

$proto58["m_column"]=$obj;
$proto58["m_bAsc"] = 0;
$proto58["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto58);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="sagawa_api_results";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sagawa_api_results = createSqlQuery_sagawa_api_results();


	
		;

																								

$tdatasagawa_api_results[".sqlquery"] = $queryData_sagawa_api_results;

include_once(getabspath("include/sagawa_api_results_events.php"));
$tableEvents["sagawa_api_results"] = new eventclass_sagawa_api_results;
$tdatasagawa_api_results[".hasEvents"] = true;

?>