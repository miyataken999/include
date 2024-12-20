<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPMT_EV001 = array();
	$tdataPMT_EV001[".truncateText"] = true;
	$tdataPMT_EV001[".NumberOfChars"] = 80;
	$tdataPMT_EV001[".ShortName"] = "PMT_EV001";
	$tdataPMT_EV001[".OwnerID"] = "";
	$tdataPMT_EV001[".OriginalTable"] = "PMT_EV001";

//	field labels
$fieldLabelsPMT_EV001 = array();
$fieldToolTipsPMT_EV001 = array();
$pageTitlesPMT_EV001 = array();
$placeHoldersPMT_EV001 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsPMT_EV001["Japanese"] = array();
	$fieldToolTipsPMT_EV001["Japanese"] = array();
	$placeHoldersPMT_EV001["Japanese"] = array();
	$pageTitlesPMT_EV001["Japanese"] = array();
	$fieldLabelsPMT_EV001["Japanese"]["APP_UID"] = "ダイヤSEQ";
	$fieldToolTipsPMT_EV001["Japanese"]["APP_UID"] = "";
	$placeHoldersPMT_EV001["Japanese"]["APP_UID"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["APP_NUMBER"] = "APP NUMBER";
	$fieldToolTipsPMT_EV001["Japanese"]["APP_NUMBER"] = "";
	$placeHoldersPMT_EV001["Japanese"]["APP_NUMBER"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["APP_STATUS"] = "APP STATUS";
	$fieldToolTipsPMT_EV001["Japanese"]["APP_STATUS"] = "";
	$placeHoldersPMT_EV001["Japanese"]["APP_STATUS"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["ROW"] = "ROW";
	$fieldToolTipsPMT_EV001["Japanese"]["ROW"] = "";
	$placeHoldersPMT_EV001["Japanese"]["ROW"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_SEQ"] = "SEQ";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_SEQ"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_SEQ"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_MANAGEMENTNO"] = "管理NO";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_MANAGEMENTNO"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_MANAGEMENTNO"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_BUYER"] = "購入者";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_BUYER"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_BUYER"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_RESPONSIBLE"] = "担当";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_RESPONSIBLE"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_RESPONSIBLE"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_THESPECIFICATIONSSETTINGSUN"] = "仕入日";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_THESPECIFICATIONSSETTINGSUN"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_THESPECIFICATIONSSETTINGSUN"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_WEIGHT"] = "カラット";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_WEIGHT"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_WEIGHT"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_THESPECIFICATIONSLOSSES"] = "仕入";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_THESPECIFICATIONSLOSSES"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_THESPECIFICATIONSLOSSES"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_PER_CARAT"] = "Per carat";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_PER_CARAT"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_PER_CARAT"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_SHAPE"] = "形";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_SHAPE"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_SHAPE"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_SELFGRES"] = "自ｸﾞﾚ";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_SELFGRES"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_SELFGRES"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_ORIGINALGRADEMLIKENED"] = "元ｸﾞﾚ";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_ORIGINALGRADEMLIKENED"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_ORIGINALGRADEMLIKENED"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_SUGARCANE"] = "鑑書";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_SUGARCANE"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_SUGARCANE"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_PERCENT"] = "パーセント";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_PERCENT"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_PERCENT"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_STATUS"] = "ST1";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_STATUS"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_STATUS"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_COLOR"] = "カラー";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_COLOR"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_COLOR"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_CLARITY"] = "クラリティ";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_CLARITY"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_CLARITY"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_CUT"] = "カット";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_CUT"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_CUT"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_FLUO"] = "蛍光";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_FLUO"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_FLUO"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_WIDE"] = "サイズ1";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_WIDE"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_WIDE"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_HIGH"] = "サイズ2";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_HIGH"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_HIGH"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_DEPTH"] = "サイズ3";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_DEPTH"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_DEPTH"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_APPRAISER"] = "LABO";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_APPRAISER"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_APPRAISER"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_RATE"] = "RATE";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_RATE"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_RATE"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_UNITPRICE"] = "単価";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_UNITPRICE"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_UNITPRICE"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_YOURNAME"] = "芳名";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_YOURNAME"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_YOURNAME"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_PAYOUTOTHER"] = "払出他";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_PAYOUTOTHER"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_PAYOUTOTHER"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_RAPA"] = "RAPAA";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_RAPA"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_RAPA"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_COMMENTSANDTOTAL"] = "COMME";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_COMMENTSANDTOTAL"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_COMMENTSANDTOTAL"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_REGISTEREDPERSON"] = "登録者";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_REGISTEREDPERSON"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_REGISTEREDPERSON"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_GROSSPROFIT"] = "粗利";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_GROSSPROFIT"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_GROSSPROFIT"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_INTEREST_1"] = "利 １";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_INTEREST_1"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_INTEREST_1"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_REGISTRATIONDATE"] = "登録日";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_REGISTRATIONDATE"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_REGISTRATIONDATE"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_UPDATEDBY"] = "更新者";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_UPDATEDBY"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_UPDATEDBY"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_UPDATEDDATE"] = "更新日";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_UPDATEDDATE"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_UPDATEDDATE"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_COMPLETECHANGEDATE"] = "完了変日";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_COMPLETECHANGEDATE"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_COMPLETECHANGEDATE"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_FRAPA"] = "FRAPA";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_FRAPA"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_FRAPA"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_RAPAB"] = "RAPAB";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_RAPAB"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_RAPAB"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_UNIT_PRICE_UNPLUG"] = "ガイ抜";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_UNIT_PRICE_UNPLUG"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_UNIT_PRICE_UNPLUG"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_STATUS_2"] = "ST2";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_STATUS_2"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_STATUS_2"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_MEMO"] = "メモ";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_MEMO"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_MEMO"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_INTENSITY"] = "INSI";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_INTENSITY"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_INTENSITY"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_OVERTONE"] = "OVTO";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_OVERTONE"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_OVERTONE"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_INTENSITY_FLUO"] = "INSIFL";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_INTENSITY_FLUO"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_INTENSITY_FLUO"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_COLOR_FLUO"] = "COFL";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_COLOR_FLUO"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_COLOR_FLUO"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_POLISH"] = "ポリッシュ";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_POLISH"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_POLISH"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_SYMMETRY"] = "シンメトリ";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_SYMMETRY"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_SYMMETRY"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_no"] = "No";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_no"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_no"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["status"] = "ステータス";
	$fieldToolTipsPMT_EV001["Japanese"]["status"] = "";
	$placeHoldersPMT_EV001["Japanese"]["status"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_SALES_FEE"] = "販売口銭";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_SALES_FEE"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_SALES_FEE"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["mst_business_partner_id"] = "取引先ID";
	$fieldToolTipsPMT_EV001["Japanese"]["mst_business_partner_id"] = "";
	$placeHoldersPMT_EV001["Japanese"]["mst_business_partner_id"] = "";
	$fieldLabelsPMT_EV001["Japanese"]["DA_PAYOUTOTHER_WITHOUT_SALES_FEE"] = "払出（自動）";
	$fieldToolTipsPMT_EV001["Japanese"]["DA_PAYOUTOTHER_WITHOUT_SALES_FEE"] = "";
	$placeHoldersPMT_EV001["Japanese"]["DA_PAYOUTOTHER_WITHOUT_SALES_FEE"] = "";
	if (count($fieldToolTipsPMT_EV001["Japanese"]))
		$tdataPMT_EV001[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPMT_EV001[""] = array();
	$fieldToolTipsPMT_EV001[""] = array();
	$placeHoldersPMT_EV001[""] = array();
	$pageTitlesPMT_EV001[""] = array();
	$fieldLabelsPMT_EV001[""]["DA_POLISH"] = "DA POLISH";
	$fieldToolTipsPMT_EV001[""]["DA_POLISH"] = "";
	$placeHoldersPMT_EV001[""]["DA_POLISH"] = "";
	$fieldLabelsPMT_EV001[""]["DA_SYMMETRY"] = "DA SYMMETRY";
	$fieldToolTipsPMT_EV001[""]["DA_SYMMETRY"] = "";
	$placeHoldersPMT_EV001[""]["DA_SYMMETRY"] = "";
	$fieldLabelsPMT_EV001[""]["DA_no"] = "DA No";
	$fieldToolTipsPMT_EV001[""]["DA_no"] = "";
	$placeHoldersPMT_EV001[""]["DA_no"] = "";
	$fieldLabelsPMT_EV001[""]["status"] = "Status";
	$fieldToolTipsPMT_EV001[""]["status"] = "";
	$placeHoldersPMT_EV001[""]["status"] = "";
	$fieldLabelsPMT_EV001[""]["DA_SALES_FEE"] = "DA SALES FEE";
	$fieldToolTipsPMT_EV001[""]["DA_SALES_FEE"] = "";
	$placeHoldersPMT_EV001[""]["DA_SALES_FEE"] = "";
	$fieldLabelsPMT_EV001[""]["mst_business_partner_id"] = "Mst Business Partner Id";
	$fieldToolTipsPMT_EV001[""]["mst_business_partner_id"] = "";
	$placeHoldersPMT_EV001[""]["mst_business_partner_id"] = "";
	$fieldLabelsPMT_EV001[""]["DA_PAYOUTOTHER_WITHOUT_SALES_FEE"] = "DA PAYOUTOTHER WITHOUT SALES FEE";
	$fieldToolTipsPMT_EV001[""]["DA_PAYOUTOTHER_WITHOUT_SALES_FEE"] = "";
	$placeHoldersPMT_EV001[""]["DA_PAYOUTOTHER_WITHOUT_SALES_FEE"] = "";
	if (count($fieldToolTipsPMT_EV001[""]))
		$tdataPMT_EV001[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsPMT_EV001["English"] = array();
	$fieldToolTipsPMT_EV001["English"] = array();
	$placeHoldersPMT_EV001["English"] = array();
	$pageTitlesPMT_EV001["English"] = array();
	if (count($fieldToolTipsPMT_EV001["English"]))
		$tdataPMT_EV001[".isUseToolTips"] = true;
}


	$tdataPMT_EV001[".NCSearch"] = true;



$tdataPMT_EV001[".shortTableName"] = "PMT_EV001";
$tdataPMT_EV001[".nSecOptions"] = 0;
$tdataPMT_EV001[".recsPerRowPrint"] = 1;
$tdataPMT_EV001[".mainTableOwnerID"] = "";
$tdataPMT_EV001[".moveNext"] = 1;
$tdataPMT_EV001[".entityType"] = 0;

$tdataPMT_EV001[".strOriginalTableName"] = "PMT_EV001";

	



$tdataPMT_EV001[".showAddInPopup"] = false;

$tdataPMT_EV001[".showEditInPopup"] = false;

$tdataPMT_EV001[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPMT_EV001[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPMT_EV001[".fieldsForRegister"] = array();

$tdataPMT_EV001[".listAjax"] = false;

	$tdataPMT_EV001[".audit"] = true;

	$tdataPMT_EV001[".locking"] = false;

$tdataPMT_EV001[".edit"] = true;
$tdataPMT_EV001[".afterEditAction"] = 1;
$tdataPMT_EV001[".closePopupAfterEdit"] = 1;
$tdataPMT_EV001[".afterEditActionDetTable"] = "";

$tdataPMT_EV001[".add"] = true;
$tdataPMT_EV001[".afterAddAction"] = 1;
$tdataPMT_EV001[".closePopupAfterAdd"] = 1;
$tdataPMT_EV001[".afterAddActionDetTable"] = "";

$tdataPMT_EV001[".list"] = true;

$tdataPMT_EV001[".inlineEdit"] = true;

$tdataPMT_EV001[".updateSelected"] = true;

$tdataPMT_EV001[".reorderRecordsByHeader"] = true;
$tdataPMT_EV001[".createSortByDropdown"] = true;
$tdataPMT_EV001[".strSortControlSettingsJSON"] = "";

$tdataPMT_EV001[".strClickActionJSON"] = "{\"fields\":{\"APP_NUMBER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"APP_STATUS\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"APP_UID\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_APPRAISER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_BUYER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_CLARITY\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_COLOR\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_COLOR_FLUO\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_COMMENTSANDTOTAL\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_COMPLETECHANGEDATE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_CUT\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_DEPTH\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_FLUO\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_FRAPA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_GROSSPROFIT\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_HIGH\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_INTENSITY\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_INTENSITY_FLUO\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_INTEREST_1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_MANAGEMENTNO\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_MEMO\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_ORIGINALGRADEMLIKENED\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_OVERTONE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_PAYOUTOTHER\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_PERCENT\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_PER_CARAT\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_RAPA\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_RAPAB\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_RATE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_REGISTEREDPERSON\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_REGISTRATIONDATE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_RESPONSIBLE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_SELFGRES\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_SEQ\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_SHAPE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_STATUS\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_STATUS_2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_SUGARCANE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_THESPECIFICATIONSLOSSES\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_THESPECIFICATIONSSETTINGSUN\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_UNITPRICE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_UNIT_PRICE_UNPLUG\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_UPDATEDBY\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_UPDATEDDATE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_WEIGHT\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_WIDE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"DA_YOURNAME\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ROW\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";


$tdataPMT_EV001[".inlineAdd"] = true;
$tdataPMT_EV001[".copy"] = true;
$tdataPMT_EV001[".view"] = true;

$tdataPMT_EV001[".import"] = true;

$tdataPMT_EV001[".exportTo"] = true;

$tdataPMT_EV001[".printFriendly"] = true;

$tdataPMT_EV001[".delete"] = true;

$tdataPMT_EV001[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataPMT_EV001[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataPMT_EV001[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataPMT_EV001[".searchSaving"] = false;
//

$tdataPMT_EV001[".showSearchPanel"] = true;
		$tdataPMT_EV001[".flexibleSearch"] = true;

$tdataPMT_EV001[".isUseAjaxSuggest"] = true;

$tdataPMT_EV001[".rowHighlite"] = true;



																																																							
																																																																																																																																																																											

$tdataPMT_EV001[".ajaxCodeSnippetAdded"] = false;

$tdataPMT_EV001[".buttonsAdded"] = true;

$tdataPMT_EV001[".addPageEvents"] = true;

// use timepicker for search panel
$tdataPMT_EV001[".isUseTimeForSearch"] = false;



$tdataPMT_EV001[".badgeColor"] = "004080";


$tdataPMT_EV001[".allSearchFields"] = array();
$tdataPMT_EV001[".filterFields"] = array();
$tdataPMT_EV001[".requiredSearchFields"] = array();

$tdataPMT_EV001[".allSearchFields"][] = "DA_SALES_FEE";
	$tdataPMT_EV001[".allSearchFields"][] = "mst_business_partner_id";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_PAYOUTOTHER_WITHOUT_SALES_FEE";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_WEIGHT";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_INTENSITY";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_OVERTONE";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_COLOR";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_CLARITY";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_CUT";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_POLISH";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_SYMMETRY";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_FLUO";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_COLOR_FLUO";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_THESPECIFICATIONSSETTINGSUN";
	$tdataPMT_EV001[".allSearchFields"][] = "status";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_no";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_BUYER";
	$tdataPMT_EV001[".allSearchFields"][] = "APP_UID";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_SEQ";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_RESPONSIBLE";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_THESPECIFICATIONSLOSSES";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_PER_CARAT";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_SHAPE";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_SELFGRES";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_ORIGINALGRADEMLIKENED";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_SUGARCANE";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_RAPA";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_MEMO";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_WIDE";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_HIGH";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_DEPTH";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_APPRAISER";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_FRAPA";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_RATE";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_UNIT_PRICE_UNPLUG";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_YOURNAME";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_PAYOUTOTHER";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_RAPAB";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_GROSSPROFIT";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_INTEREST_1";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_COMMENTSANDTOTAL";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_REGISTEREDPERSON";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_UPDATEDBY";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_UPDATEDDATE";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_REGISTRATIONDATE";
	$tdataPMT_EV001[".allSearchFields"][] = "DA_COMPLETECHANGEDATE";
	

$tdataPMT_EV001[".googleLikeFields"] = array();
$tdataPMT_EV001[".googleLikeFields"][] = "APP_UID";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_BUYER";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_RESPONSIBLE";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_THESPECIFICATIONSSETTINGSUN";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_WEIGHT";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_THESPECIFICATIONSLOSSES";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_PER_CARAT";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_SHAPE";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_SELFGRES";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_SUGARCANE";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_COLOR";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_CLARITY";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_CUT";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_FLUO";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_WIDE";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_HIGH";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_DEPTH";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_APPRAISER";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_RATE";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_YOURNAME";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_PAYOUTOTHER";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_RAPA";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_COMMENTSANDTOTAL";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_REGISTEREDPERSON";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_GROSSPROFIT";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_INTEREST_1";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_REGISTRATIONDATE";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_UPDATEDBY";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_UPDATEDDATE";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_COMPLETECHANGEDATE";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_FRAPA";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_RAPAB";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_MEMO";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_INTENSITY";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_OVERTONE";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_COLOR_FLUO";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_POLISH";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_SYMMETRY";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_no";
$tdataPMT_EV001[".googleLikeFields"][] = "status";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_SALES_FEE";
$tdataPMT_EV001[".googleLikeFields"][] = "mst_business_partner_id";
$tdataPMT_EV001[".googleLikeFields"][] = "DA_PAYOUTOTHER_WITHOUT_SALES_FEE";

$tdataPMT_EV001[".panelSearchFields"] = array();
$tdataPMT_EV001[".searchPanelOptions"] = array();
$tdataPMT_EV001[".panelSearchFields"][] = "DA_WEIGHT";
	$tdataPMT_EV001[".panelSearchFields"][] = "DA_INTENSITY";
	$tdataPMT_EV001[".panelSearchFields"][] = "DA_OVERTONE";
	$tdataPMT_EV001[".panelSearchFields"][] = "DA_COLOR";
	$tdataPMT_EV001[".panelSearchFields"][] = "DA_CLARITY";
	$tdataPMT_EV001[".panelSearchFields"][] = "DA_CUT";
	$tdataPMT_EV001[".panelSearchFields"][] = "DA_POLISH";
	$tdataPMT_EV001[".panelSearchFields"][] = "DA_SYMMETRY";
	$tdataPMT_EV001[".panelSearchFields"][] = "DA_FLUO";
	$tdataPMT_EV001[".panelSearchFields"][] = "DA_COLOR_FLUO";
	$tdataPMT_EV001[".panelSearchFields"][] = "DA_THESPECIFICATIONSSETTINGSUN";
	
$tdataPMT_EV001[".advSearchFields"] = array();
$tdataPMT_EV001[".advSearchFields"][] = "DA_SALES_FEE";
$tdataPMT_EV001[".advSearchFields"][] = "mst_business_partner_id";
$tdataPMT_EV001[".advSearchFields"][] = "DA_PAYOUTOTHER_WITHOUT_SALES_FEE";
$tdataPMT_EV001[".advSearchFields"][] = "DA_WEIGHT";
$tdataPMT_EV001[".advSearchFields"][] = "DA_INTENSITY";
$tdataPMT_EV001[".advSearchFields"][] = "DA_OVERTONE";
$tdataPMT_EV001[".advSearchFields"][] = "DA_COLOR";
$tdataPMT_EV001[".advSearchFields"][] = "DA_CLARITY";
$tdataPMT_EV001[".advSearchFields"][] = "DA_CUT";
$tdataPMT_EV001[".advSearchFields"][] = "DA_POLISH";
$tdataPMT_EV001[".advSearchFields"][] = "DA_SYMMETRY";
$tdataPMT_EV001[".advSearchFields"][] = "DA_FLUO";
$tdataPMT_EV001[".advSearchFields"][] = "DA_COLOR_FLUO";
$tdataPMT_EV001[".advSearchFields"][] = "DA_THESPECIFICATIONSSETTINGSUN";
$tdataPMT_EV001[".advSearchFields"][] = "status";
$tdataPMT_EV001[".advSearchFields"][] = "DA_no";
$tdataPMT_EV001[".advSearchFields"][] = "DA_BUYER";
$tdataPMT_EV001[".advSearchFields"][] = "APP_UID";
$tdataPMT_EV001[".advSearchFields"][] = "DA_SEQ";
$tdataPMT_EV001[".advSearchFields"][] = "DA_RESPONSIBLE";
$tdataPMT_EV001[".advSearchFields"][] = "DA_THESPECIFICATIONSLOSSES";
$tdataPMT_EV001[".advSearchFields"][] = "DA_PER_CARAT";
$tdataPMT_EV001[".advSearchFields"][] = "DA_SHAPE";
$tdataPMT_EV001[".advSearchFields"][] = "DA_SELFGRES";
$tdataPMT_EV001[".advSearchFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdataPMT_EV001[".advSearchFields"][] = "DA_SUGARCANE";
$tdataPMT_EV001[".advSearchFields"][] = "DA_RAPA";
$tdataPMT_EV001[".advSearchFields"][] = "DA_MEMO";
$tdataPMT_EV001[".advSearchFields"][] = "DA_WIDE";
$tdataPMT_EV001[".advSearchFields"][] = "DA_HIGH";
$tdataPMT_EV001[".advSearchFields"][] = "DA_DEPTH";
$tdataPMT_EV001[".advSearchFields"][] = "DA_APPRAISER";
$tdataPMT_EV001[".advSearchFields"][] = "DA_FRAPA";
$tdataPMT_EV001[".advSearchFields"][] = "DA_RATE";
$tdataPMT_EV001[".advSearchFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdataPMT_EV001[".advSearchFields"][] = "DA_YOURNAME";
$tdataPMT_EV001[".advSearchFields"][] = "DA_PAYOUTOTHER";
$tdataPMT_EV001[".advSearchFields"][] = "DA_RAPAB";
$tdataPMT_EV001[".advSearchFields"][] = "DA_GROSSPROFIT";
$tdataPMT_EV001[".advSearchFields"][] = "DA_INTEREST_1";
$tdataPMT_EV001[".advSearchFields"][] = "DA_COMMENTSANDTOTAL";
$tdataPMT_EV001[".advSearchFields"][] = "DA_REGISTEREDPERSON";
$tdataPMT_EV001[".advSearchFields"][] = "DA_UPDATEDBY";
$tdataPMT_EV001[".advSearchFields"][] = "DA_UPDATEDDATE";
$tdataPMT_EV001[".advSearchFields"][] = "DA_REGISTRATIONDATE";
$tdataPMT_EV001[".advSearchFields"][] = "DA_COMPLETECHANGEDATE";

$tdataPMT_EV001[".tableType"] = "list";

$tdataPMT_EV001[".printerPageOrientation"] = 0;
$tdataPMT_EV001[".nPrinterPageScale"] = 100;

$tdataPMT_EV001[".nPrinterSplitRecords"] = 40;

$tdataPMT_EV001[".nPrinterPDFSplitRecords"] = 40;



$tdataPMT_EV001[".geocodingEnabled"] = false;





$tdataPMT_EV001[".listGridLayout"] = 3;





// view page pdf

// print page pdf

$tdataPMT_EV001[".totalsFields"] = array();
$tdataPMT_EV001[".totalsFields"][] = array(
	"fName" => "DA_WEIGHT",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');
$tdataPMT_EV001[".totalsFields"][] = array(
	"fName" => "DA_PAYOUTOTHER",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => 'Custom');

$tdataPMT_EV001[".pageSize"] = 20;

$tdataPMT_EV001[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `APP_UID` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPMT_EV001[".strOrderBy"] = $tstrOrderBy;

$tdataPMT_EV001[".orderindexes"] = array();
$tdataPMT_EV001[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`APP_UID`");

$tdataPMT_EV001[".sqlHead"] = "SELECT `APP_UID`,  `APP_NUMBER`,  `APP_STATUS`,  `ROW`,  `DA_SEQ`,  `DA_MANAGEMENTNO`,  `DA_BUYER`,  `DA_RESPONSIBLE`,  `DA_THESPECIFICATIONSSETTINGSUN`,  `DA_WEIGHT`,  `DA_THESPECIFICATIONSLOSSES`,  `DA_PER_CARAT`,  `DA_SHAPE`,  `DA_SELFGRES`,  `DA_ORIGINALGRADEMLIKENED`,  `DA_SUGARCANE`,  `DA_PERCENT`,  `DA_STATUS`,  `DA_COLOR`,  `DA_CLARITY`,  `DA_CUT`,  `DA_FLUO`,  `DA_WIDE`,  `DA_HIGH`,  `DA_DEPTH`,  `DA_APPRAISER`,  `DA_RATE`,  `DA_UNITPRICE`,  `DA_YOURNAME`,  `DA_PAYOUTOTHER`,  `DA_RAPA`,  `DA_COMMENTSANDTOTAL`,  `DA_REGISTEREDPERSON`,  `DA_GROSSPROFIT`,  `DA_INTEREST_1`,  `DA_REGISTRATIONDATE`,  `DA_UPDATEDBY`,  `DA_UPDATEDDATE`,  `DA_COMPLETECHANGEDATE`,  `DA_FRAPA`,  `DA_RAPAB`,  `DA_UNIT_PRICE_UNPLUG`,  `DA_STATUS_2`,  `DA_MEMO`,  `DA_INTENSITY`,  `DA_OVERTONE`,  `DA_INTENSITY_FLUO`,  `DA_COLOR_FLUO`,  `DA_POLISH`,  `DA_SYMMETRY`,  `DA_no`,  `status`,  `DA_SALES_FEE`,  `mst_business_partner_id`,  `DA_PAYOUTOTHER_WITHOUT_SALES_FEE`";
$tdataPMT_EV001[".sqlFrom"] = "FROM `PMT_EV001`";
$tdataPMT_EV001[".sqlWhereExpr"] = "";
$tdataPMT_EV001[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPMT_EV001[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPMT_EV001[".arrGroupsPerPage"] = $arrGPP;

$tdataPMT_EV001[".highlightSearchResults"] = true;

$tableKeysPMT_EV001 = array();
$tableKeysPMT_EV001[] = "APP_UID";
$tdataPMT_EV001[".Keys"] = $tableKeysPMT_EV001;

$tdataPMT_EV001[".listFields"] = array();
$tdataPMT_EV001[".listFields"][] = "status";
$tdataPMT_EV001[".listFields"][] = "DA_THESPECIFICATIONSSETTINGSUN";
$tdataPMT_EV001[".listFields"][] = "DA_WEIGHT";
$tdataPMT_EV001[".listFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdataPMT_EV001[".listFields"][] = "DA_PAYOUTOTHER";
$tdataPMT_EV001[".listFields"][] = "DA_PAYOUTOTHER_WITHOUT_SALES_FEE";
$tdataPMT_EV001[".listFields"][] = "DA_SALES_FEE";
$tdataPMT_EV001[".listFields"][] = "mst_business_partner_id";
$tdataPMT_EV001[".listFields"][] = "DA_FRAPA";
$tdataPMT_EV001[".listFields"][] = "DA_RATE";
$tdataPMT_EV001[".listFields"][] = "DA_RAPAB";
$tdataPMT_EV001[".listFields"][] = "DA_INTENSITY";
$tdataPMT_EV001[".listFields"][] = "DA_OVERTONE";
$tdataPMT_EV001[".listFields"][] = "DA_COLOR";
$tdataPMT_EV001[".listFields"][] = "DA_CLARITY";
$tdataPMT_EV001[".listFields"][] = "DA_CUT";
$tdataPMT_EV001[".listFields"][] = "DA_POLISH";
$tdataPMT_EV001[".listFields"][] = "DA_SYMMETRY";
$tdataPMT_EV001[".listFields"][] = "DA_FLUO";
$tdataPMT_EV001[".listFields"][] = "DA_COLOR_FLUO";
$tdataPMT_EV001[".listFields"][] = "DA_WIDE";
$tdataPMT_EV001[".listFields"][] = "DA_HIGH";
$tdataPMT_EV001[".listFields"][] = "DA_DEPTH";
$tdataPMT_EV001[".listFields"][] = "DA_COMMENTSANDTOTAL";
$tdataPMT_EV001[".listFields"][] = "DA_APPRAISER";
$tdataPMT_EV001[".listFields"][] = "DA_MEMO";
$tdataPMT_EV001[".listFields"][] = "APP_UID";
$tdataPMT_EV001[".listFields"][] = "DA_REGISTEREDPERSON";
$tdataPMT_EV001[".listFields"][] = "DA_UPDATEDBY";
$tdataPMT_EV001[".listFields"][] = "DA_UPDATEDDATE";
$tdataPMT_EV001[".listFields"][] = "DA_REGISTRATIONDATE";

$tdataPMT_EV001[".hideMobileList"] = array();


$tdataPMT_EV001[".viewFields"] = array();
$tdataPMT_EV001[".viewFields"][] = "mst_business_partner_id";
$tdataPMT_EV001[".viewFields"][] = "status";
$tdataPMT_EV001[".viewFields"][] = "DA_SYMMETRY";
$tdataPMT_EV001[".viewFields"][] = "DA_POLISH";
$tdataPMT_EV001[".viewFields"][] = "DA_MANAGEMENTNO";
$tdataPMT_EV001[".viewFields"][] = "DA_BUYER";
$tdataPMT_EV001[".viewFields"][] = "APP_UID";
$tdataPMT_EV001[".viewFields"][] = "DA_SEQ";
$tdataPMT_EV001[".viewFields"][] = "DA_RESPONSIBLE";
$tdataPMT_EV001[".viewFields"][] = "DA_THESPECIFICATIONSSETTINGSUN";
$tdataPMT_EV001[".viewFields"][] = "DA_WEIGHT";
$tdataPMT_EV001[".viewFields"][] = "DA_THESPECIFICATIONSLOSSES";
$tdataPMT_EV001[".viewFields"][] = "DA_PER_CARAT";
$tdataPMT_EV001[".viewFields"][] = "DA_SHAPE";
$tdataPMT_EV001[".viewFields"][] = "DA_SELFGRES";
$tdataPMT_EV001[".viewFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdataPMT_EV001[".viewFields"][] = "DA_SUGARCANE";
$tdataPMT_EV001[".viewFields"][] = "DA_RAPA";
$tdataPMT_EV001[".viewFields"][] = "DA_MEMO";
$tdataPMT_EV001[".viewFields"][] = "DA_INTENSITY";
$tdataPMT_EV001[".viewFields"][] = "DA_OVERTONE";
$tdataPMT_EV001[".viewFields"][] = "DA_COLOR";
$tdataPMT_EV001[".viewFields"][] = "DA_CLARITY";
$tdataPMT_EV001[".viewFields"][] = "DA_CUT";
$tdataPMT_EV001[".viewFields"][] = "DA_FLUO";
$tdataPMT_EV001[".viewFields"][] = "DA_COLOR_FLUO";
$tdataPMT_EV001[".viewFields"][] = "DA_WIDE";
$tdataPMT_EV001[".viewFields"][] = "DA_HIGH";
$tdataPMT_EV001[".viewFields"][] = "DA_DEPTH";
$tdataPMT_EV001[".viewFields"][] = "DA_COMMENTSANDTOTAL";
$tdataPMT_EV001[".viewFields"][] = "DA_APPRAISER";
$tdataPMT_EV001[".viewFields"][] = "DA_FRAPA";
$tdataPMT_EV001[".viewFields"][] = "DA_RATE";
$tdataPMT_EV001[".viewFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdataPMT_EV001[".viewFields"][] = "DA_YOURNAME";
$tdataPMT_EV001[".viewFields"][] = "DA_PAYOUTOTHER";
$tdataPMT_EV001[".viewFields"][] = "DA_RAPAB";
$tdataPMT_EV001[".viewFields"][] = "DA_GROSSPROFIT";
$tdataPMT_EV001[".viewFields"][] = "DA_INTEREST_1";
$tdataPMT_EV001[".viewFields"][] = "DA_no";
$tdataPMT_EV001[".viewFields"][] = "DA_REGISTEREDPERSON";
$tdataPMT_EV001[".viewFields"][] = "DA_UPDATEDBY";
$tdataPMT_EV001[".viewFields"][] = "DA_UPDATEDDATE";
$tdataPMT_EV001[".viewFields"][] = "DA_REGISTRATIONDATE";
$tdataPMT_EV001[".viewFields"][] = "DA_COMPLETECHANGEDATE";

$tdataPMT_EV001[".addFields"] = array();
$tdataPMT_EV001[".addFields"][] = "mst_business_partner_id";
$tdataPMT_EV001[".addFields"][] = "status";
$tdataPMT_EV001[".addFields"][] = "DA_BUYER";
$tdataPMT_EV001[".addFields"][] = "DA_RESPONSIBLE";
$tdataPMT_EV001[".addFields"][] = "DA_THESPECIFICATIONSSETTINGSUN";
$tdataPMT_EV001[".addFields"][] = "DA_WEIGHT";
$tdataPMT_EV001[".addFields"][] = "DA_THESPECIFICATIONSLOSSES";
$tdataPMT_EV001[".addFields"][] = "DA_PER_CARAT";
$tdataPMT_EV001[".addFields"][] = "DA_SHAPE";
$tdataPMT_EV001[".addFields"][] = "DA_SELFGRES";
$tdataPMT_EV001[".addFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdataPMT_EV001[".addFields"][] = "DA_SUGARCANE";
$tdataPMT_EV001[".addFields"][] = "DA_RAPA";
$tdataPMT_EV001[".addFields"][] = "DA_MEMO";
$tdataPMT_EV001[".addFields"][] = "DA_INTENSITY";
$tdataPMT_EV001[".addFields"][] = "DA_OVERTONE";
$tdataPMT_EV001[".addFields"][] = "DA_COLOR";
$tdataPMT_EV001[".addFields"][] = "DA_CLARITY";
$tdataPMT_EV001[".addFields"][] = "DA_CUT";
$tdataPMT_EV001[".addFields"][] = "DA_POLISH";
$tdataPMT_EV001[".addFields"][] = "DA_SYMMETRY";
$tdataPMT_EV001[".addFields"][] = "DA_FLUO";
$tdataPMT_EV001[".addFields"][] = "DA_COLOR_FLUO";
$tdataPMT_EV001[".addFields"][] = "DA_WIDE";
$tdataPMT_EV001[".addFields"][] = "DA_HIGH";
$tdataPMT_EV001[".addFields"][] = "DA_DEPTH";
$tdataPMT_EV001[".addFields"][] = "DA_COMMENTSANDTOTAL";
$tdataPMT_EV001[".addFields"][] = "DA_APPRAISER";
$tdataPMT_EV001[".addFields"][] = "DA_FRAPA";
$tdataPMT_EV001[".addFields"][] = "DA_RATE";
$tdataPMT_EV001[".addFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdataPMT_EV001[".addFields"][] = "DA_YOURNAME";
$tdataPMT_EV001[".addFields"][] = "DA_PAYOUTOTHER";
$tdataPMT_EV001[".addFields"][] = "DA_RAPAB";
$tdataPMT_EV001[".addFields"][] = "DA_GROSSPROFIT";
$tdataPMT_EV001[".addFields"][] = "DA_INTEREST_1";
$tdataPMT_EV001[".addFields"][] = "DA_no";
$tdataPMT_EV001[".addFields"][] = "DA_REGISTEREDPERSON";
$tdataPMT_EV001[".addFields"][] = "DA_UPDATEDBY";
$tdataPMT_EV001[".addFields"][] = "DA_UPDATEDDATE";
$tdataPMT_EV001[".addFields"][] = "DA_REGISTRATIONDATE";
$tdataPMT_EV001[".addFields"][] = "DA_COMPLETECHANGEDATE";

$tdataPMT_EV001[".masterListFields"] = array();
$tdataPMT_EV001[".masterListFields"][] = "APP_NUMBER";
$tdataPMT_EV001[".masterListFields"][] = "APP_STATUS";
$tdataPMT_EV001[".masterListFields"][] = "ROW";
$tdataPMT_EV001[".masterListFields"][] = "DA_SEQ";
$tdataPMT_EV001[".masterListFields"][] = "DA_PERCENT";
$tdataPMT_EV001[".masterListFields"][] = "DA_UNITPRICE";
$tdataPMT_EV001[".masterListFields"][] = "DA_POLISH";
$tdataPMT_EV001[".masterListFields"][] = "DA_SYMMETRY";
$tdataPMT_EV001[".masterListFields"][] = "DA_no";
$tdataPMT_EV001[".masterListFields"][] = "status";
$tdataPMT_EV001[".masterListFields"][] = "DA_SALES_FEE";
$tdataPMT_EV001[".masterListFields"][] = "mst_business_partner_id";
$tdataPMT_EV001[".masterListFields"][] = "DA_PAYOUTOTHER_WITHOUT_SALES_FEE";
$tdataPMT_EV001[".masterListFields"][] = "DA_MANAGEMENTNO";
$tdataPMT_EV001[".masterListFields"][] = "DA_BUYER";
$tdataPMT_EV001[".masterListFields"][] = "APP_UID";
$tdataPMT_EV001[".masterListFields"][] = "DA_RESPONSIBLE";
$tdataPMT_EV001[".masterListFields"][] = "DA_THESPECIFICATIONSSETTINGSUN";
$tdataPMT_EV001[".masterListFields"][] = "DA_WEIGHT";
$tdataPMT_EV001[".masterListFields"][] = "DA_THESPECIFICATIONSLOSSES";
$tdataPMT_EV001[".masterListFields"][] = "DA_PER_CARAT";
$tdataPMT_EV001[".masterListFields"][] = "DA_SHAPE";
$tdataPMT_EV001[".masterListFields"][] = "DA_SELFGRES";
$tdataPMT_EV001[".masterListFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdataPMT_EV001[".masterListFields"][] = "DA_SUGARCANE";
$tdataPMT_EV001[".masterListFields"][] = "DA_RAPA";
$tdataPMT_EV001[".masterListFields"][] = "DA_STATUS";
$tdataPMT_EV001[".masterListFields"][] = "DA_STATUS_2";
$tdataPMT_EV001[".masterListFields"][] = "DA_MEMO";
$tdataPMT_EV001[".masterListFields"][] = "DA_INTENSITY";
$tdataPMT_EV001[".masterListFields"][] = "DA_OVERTONE";
$tdataPMT_EV001[".masterListFields"][] = "DA_COLOR";
$tdataPMT_EV001[".masterListFields"][] = "DA_CLARITY";
$tdataPMT_EV001[".masterListFields"][] = "DA_CUT";
$tdataPMT_EV001[".masterListFields"][] = "DA_FLUO";
$tdataPMT_EV001[".masterListFields"][] = "DA_COLOR_FLUO";
$tdataPMT_EV001[".masterListFields"][] = "DA_WIDE";
$tdataPMT_EV001[".masterListFields"][] = "DA_HIGH";
$tdataPMT_EV001[".masterListFields"][] = "DA_DEPTH";
$tdataPMT_EV001[".masterListFields"][] = "DA_APPRAISER";
$tdataPMT_EV001[".masterListFields"][] = "DA_FRAPA";
$tdataPMT_EV001[".masterListFields"][] = "DA_RATE";
$tdataPMT_EV001[".masterListFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdataPMT_EV001[".masterListFields"][] = "DA_YOURNAME";
$tdataPMT_EV001[".masterListFields"][] = "DA_PAYOUTOTHER";
$tdataPMT_EV001[".masterListFields"][] = "DA_RAPAB";
$tdataPMT_EV001[".masterListFields"][] = "DA_GROSSPROFIT";
$tdataPMT_EV001[".masterListFields"][] = "DA_INTEREST_1";
$tdataPMT_EV001[".masterListFields"][] = "DA_COMMENTSANDTOTAL";
$tdataPMT_EV001[".masterListFields"][] = "DA_REGISTEREDPERSON";
$tdataPMT_EV001[".masterListFields"][] = "DA_UPDATEDBY";
$tdataPMT_EV001[".masterListFields"][] = "DA_UPDATEDDATE";
$tdataPMT_EV001[".masterListFields"][] = "DA_REGISTRATIONDATE";
$tdataPMT_EV001[".masterListFields"][] = "DA_COMPLETECHANGEDATE";
$tdataPMT_EV001[".masterListFields"][] = "DA_INTENSITY_FLUO";

$tdataPMT_EV001[".inlineAddFields"] = array();
$tdataPMT_EV001[".inlineAddFields"][] = "status";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_THESPECIFICATIONSSETTINGSUN";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_WEIGHT";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_PAYOUTOTHER";
$tdataPMT_EV001[".inlineAddFields"][] = "mst_business_partner_id";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_FRAPA";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_RATE";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_RAPAB";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_INTENSITY";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_OVERTONE";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_COLOR";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_CLARITY";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_CUT";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_POLISH";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_SYMMETRY";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_FLUO";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_COLOR_FLUO";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_WIDE";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_HIGH";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_DEPTH";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_COMMENTSANDTOTAL";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_APPRAISER";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_MEMO";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_REGISTEREDPERSON";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_UPDATEDBY";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_UPDATEDDATE";
$tdataPMT_EV001[".inlineAddFields"][] = "DA_REGISTRATIONDATE";

$tdataPMT_EV001[".editFields"] = array();
$tdataPMT_EV001[".editFields"][] = "mst_business_partner_id";
$tdataPMT_EV001[".editFields"][] = "status";
$tdataPMT_EV001[".editFields"][] = "DA_BUYER";
$tdataPMT_EV001[".editFields"][] = "DA_RESPONSIBLE";
$tdataPMT_EV001[".editFields"][] = "DA_THESPECIFICATIONSSETTINGSUN";
$tdataPMT_EV001[".editFields"][] = "DA_WEIGHT";
$tdataPMT_EV001[".editFields"][] = "DA_THESPECIFICATIONSLOSSES";
$tdataPMT_EV001[".editFields"][] = "DA_PER_CARAT";
$tdataPMT_EV001[".editFields"][] = "DA_SHAPE";
$tdataPMT_EV001[".editFields"][] = "DA_SELFGRES";
$tdataPMT_EV001[".editFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdataPMT_EV001[".editFields"][] = "DA_SUGARCANE";
$tdataPMT_EV001[".editFields"][] = "DA_RAPA";
$tdataPMT_EV001[".editFields"][] = "DA_MEMO";
$tdataPMT_EV001[".editFields"][] = "DA_INTENSITY";
$tdataPMT_EV001[".editFields"][] = "DA_OVERTONE";
$tdataPMT_EV001[".editFields"][] = "DA_COLOR";
$tdataPMT_EV001[".editFields"][] = "DA_CLARITY";
$tdataPMT_EV001[".editFields"][] = "DA_CUT";
$tdataPMT_EV001[".editFields"][] = "DA_POLISH";
$tdataPMT_EV001[".editFields"][] = "DA_SYMMETRY";
$tdataPMT_EV001[".editFields"][] = "DA_FLUO";
$tdataPMT_EV001[".editFields"][] = "DA_COLOR_FLUO";
$tdataPMT_EV001[".editFields"][] = "DA_WIDE";
$tdataPMT_EV001[".editFields"][] = "DA_HIGH";
$tdataPMT_EV001[".editFields"][] = "DA_DEPTH";
$tdataPMT_EV001[".editFields"][] = "DA_COMMENTSANDTOTAL";
$tdataPMT_EV001[".editFields"][] = "DA_APPRAISER";
$tdataPMT_EV001[".editFields"][] = "DA_FRAPA";
$tdataPMT_EV001[".editFields"][] = "DA_RATE";
$tdataPMT_EV001[".editFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdataPMT_EV001[".editFields"][] = "DA_YOURNAME";
$tdataPMT_EV001[".editFields"][] = "DA_PAYOUTOTHER";
$tdataPMT_EV001[".editFields"][] = "DA_RAPAB";
$tdataPMT_EV001[".editFields"][] = "DA_GROSSPROFIT";
$tdataPMT_EV001[".editFields"][] = "DA_INTEREST_1";
$tdataPMT_EV001[".editFields"][] = "DA_no";
$tdataPMT_EV001[".editFields"][] = "DA_REGISTEREDPERSON";
$tdataPMT_EV001[".editFields"][] = "DA_UPDATEDBY";
$tdataPMT_EV001[".editFields"][] = "DA_UPDATEDDATE";
$tdataPMT_EV001[".editFields"][] = "DA_REGISTRATIONDATE";
$tdataPMT_EV001[".editFields"][] = "DA_COMPLETECHANGEDATE";

$tdataPMT_EV001[".inlineEditFields"] = array();
$tdataPMT_EV001[".inlineEditFields"][] = "status";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_THESPECIFICATIONSSETTINGSUN";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_WEIGHT";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_PAYOUTOTHER";
$tdataPMT_EV001[".inlineEditFields"][] = "mst_business_partner_id";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_FRAPA";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_RATE";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_RAPAB";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_INTENSITY";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_OVERTONE";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_COLOR";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_CLARITY";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_CUT";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_POLISH";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_SYMMETRY";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_FLUO";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_COLOR_FLUO";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_WIDE";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_HIGH";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_DEPTH";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_COMMENTSANDTOTAL";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_APPRAISER";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_MEMO";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_REGISTEREDPERSON";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_UPDATEDBY";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_UPDATEDDATE";
$tdataPMT_EV001[".inlineEditFields"][] = "DA_REGISTRATIONDATE";

$tdataPMT_EV001[".updateSelectedFields"] = array();
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_BUYER";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_RESPONSIBLE";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_THESPECIFICATIONSSETTINGSUN";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_WEIGHT";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_THESPECIFICATIONSLOSSES";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_PER_CARAT";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_SHAPE";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_SELFGRES";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_SUGARCANE";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_RAPA";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_MEMO";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_INTENSITY";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_OVERTONE";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_COLOR";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_CLARITY";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_CUT";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_POLISH";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_SYMMETRY";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_FLUO";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_COLOR_FLUO";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_WIDE";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_HIGH";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_DEPTH";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_COMMENTSANDTOTAL";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_APPRAISER";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_FRAPA";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_RATE";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_YOURNAME";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_PAYOUTOTHER";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_RAPAB";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_GROSSPROFIT";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_INTEREST_1";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_no";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_REGISTEREDPERSON";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_UPDATEDBY";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_UPDATEDDATE";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_REGISTRATIONDATE";
$tdataPMT_EV001[".updateSelectedFields"][] = "DA_COMPLETECHANGEDATE";


$tdataPMT_EV001[".exportFields"] = array();
$tdataPMT_EV001[".exportFields"][] = "status";
$tdataPMT_EV001[".exportFields"][] = "DA_MANAGEMENTNO";
$tdataPMT_EV001[".exportFields"][] = "DA_BUYER";
$tdataPMT_EV001[".exportFields"][] = "APP_UID";
$tdataPMT_EV001[".exportFields"][] = "DA_SEQ";
$tdataPMT_EV001[".exportFields"][] = "DA_RESPONSIBLE";
$tdataPMT_EV001[".exportFields"][] = "DA_THESPECIFICATIONSSETTINGSUN";
$tdataPMT_EV001[".exportFields"][] = "DA_WEIGHT";
$tdataPMT_EV001[".exportFields"][] = "DA_INTENSITY";
$tdataPMT_EV001[".exportFields"][] = "DA_OVERTONE";
$tdataPMT_EV001[".exportFields"][] = "DA_COLOR";
$tdataPMT_EV001[".exportFields"][] = "DA_CLARITY";
$tdataPMT_EV001[".exportFields"][] = "DA_CUT";
$tdataPMT_EV001[".exportFields"][] = "DA_POLISH";
$tdataPMT_EV001[".exportFields"][] = "DA_SYMMETRY";
$tdataPMT_EV001[".exportFields"][] = "DA_FLUO";
$tdataPMT_EV001[".exportFields"][] = "DA_COLOR_FLUO";
$tdataPMT_EV001[".exportFields"][] = "DA_WIDE";
$tdataPMT_EV001[".exportFields"][] = "DA_HIGH";
$tdataPMT_EV001[".exportFields"][] = "DA_DEPTH";
$tdataPMT_EV001[".exportFields"][] = "DA_COMMENTSANDTOTAL";
$tdataPMT_EV001[".exportFields"][] = "DA_APPRAISER";
$tdataPMT_EV001[".exportFields"][] = "DA_FRAPA";
$tdataPMT_EV001[".exportFields"][] = "DA_RATE";
$tdataPMT_EV001[".exportFields"][] = "DA_no";
$tdataPMT_EV001[".exportFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdataPMT_EV001[".exportFields"][] = "DA_YOURNAME";
$tdataPMT_EV001[".exportFields"][] = "DA_THESPECIFICATIONSLOSSES";
$tdataPMT_EV001[".exportFields"][] = "DA_PER_CARAT";
$tdataPMT_EV001[".exportFields"][] = "DA_SHAPE";
$tdataPMT_EV001[".exportFields"][] = "DA_SELFGRES";
$tdataPMT_EV001[".exportFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdataPMT_EV001[".exportFields"][] = "DA_SUGARCANE";
$tdataPMT_EV001[".exportFields"][] = "DA_RAPA";
$tdataPMT_EV001[".exportFields"][] = "DA_MEMO";
$tdataPMT_EV001[".exportFields"][] = "DA_PAYOUTOTHER";
$tdataPMT_EV001[".exportFields"][] = "DA_PAYOUTOTHER_WITHOUT_SALES_FEE";
$tdataPMT_EV001[".exportFields"][] = "DA_SALES_FEE";
$tdataPMT_EV001[".exportFields"][] = "mst_business_partner_id";
$tdataPMT_EV001[".exportFields"][] = "DA_RAPAB";
$tdataPMT_EV001[".exportFields"][] = "DA_GROSSPROFIT";
$tdataPMT_EV001[".exportFields"][] = "DA_INTEREST_1";
$tdataPMT_EV001[".exportFields"][] = "DA_REGISTEREDPERSON";
$tdataPMT_EV001[".exportFields"][] = "DA_UPDATEDBY";
$tdataPMT_EV001[".exportFields"][] = "DA_UPDATEDDATE";
$tdataPMT_EV001[".exportFields"][] = "DA_REGISTRATIONDATE";
$tdataPMT_EV001[".exportFields"][] = "DA_COMPLETECHANGEDATE";

$tdataPMT_EV001[".importFields"] = array();
$tdataPMT_EV001[".importFields"][] = "APP_UID";
$tdataPMT_EV001[".importFields"][] = "APP_NUMBER";
$tdataPMT_EV001[".importFields"][] = "APP_STATUS";
$tdataPMT_EV001[".importFields"][] = "ROW";
$tdataPMT_EV001[".importFields"][] = "DA_SEQ";
$tdataPMT_EV001[".importFields"][] = "DA_MANAGEMENTNO";
$tdataPMT_EV001[".importFields"][] = "DA_BUYER";
$tdataPMT_EV001[".importFields"][] = "DA_RESPONSIBLE";
$tdataPMT_EV001[".importFields"][] = "DA_THESPECIFICATIONSSETTINGSUN";
$tdataPMT_EV001[".importFields"][] = "DA_WEIGHT";
$tdataPMT_EV001[".importFields"][] = "DA_THESPECIFICATIONSLOSSES";
$tdataPMT_EV001[".importFields"][] = "DA_PER_CARAT";
$tdataPMT_EV001[".importFields"][] = "DA_SHAPE";
$tdataPMT_EV001[".importFields"][] = "DA_SELFGRES";
$tdataPMT_EV001[".importFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdataPMT_EV001[".importFields"][] = "DA_SUGARCANE";
$tdataPMT_EV001[".importFields"][] = "DA_PERCENT";
$tdataPMT_EV001[".importFields"][] = "DA_COLOR";
$tdataPMT_EV001[".importFields"][] = "DA_CLARITY";
$tdataPMT_EV001[".importFields"][] = "DA_CUT";
$tdataPMT_EV001[".importFields"][] = "DA_FLUO";
$tdataPMT_EV001[".importFields"][] = "DA_WIDE";
$tdataPMT_EV001[".importFields"][] = "DA_HIGH";
$tdataPMT_EV001[".importFields"][] = "DA_DEPTH";
$tdataPMT_EV001[".importFields"][] = "DA_APPRAISER";
$tdataPMT_EV001[".importFields"][] = "DA_RATE";
$tdataPMT_EV001[".importFields"][] = "DA_UNITPRICE";
$tdataPMT_EV001[".importFields"][] = "DA_YOURNAME";
$tdataPMT_EV001[".importFields"][] = "DA_PAYOUTOTHER";
$tdataPMT_EV001[".importFields"][] = "DA_RAPA";
$tdataPMT_EV001[".importFields"][] = "DA_COMMENTSANDTOTAL";
$tdataPMT_EV001[".importFields"][] = "DA_REGISTEREDPERSON";
$tdataPMT_EV001[".importFields"][] = "DA_GROSSPROFIT";
$tdataPMT_EV001[".importFields"][] = "DA_INTEREST_1";
$tdataPMT_EV001[".importFields"][] = "DA_REGISTRATIONDATE";
$tdataPMT_EV001[".importFields"][] = "DA_UPDATEDBY";
$tdataPMT_EV001[".importFields"][] = "DA_UPDATEDDATE";
$tdataPMT_EV001[".importFields"][] = "DA_COMPLETECHANGEDATE";
$tdataPMT_EV001[".importFields"][] = "DA_FRAPA";
$tdataPMT_EV001[".importFields"][] = "DA_RAPAB";
$tdataPMT_EV001[".importFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdataPMT_EV001[".importFields"][] = "DA_MEMO";
$tdataPMT_EV001[".importFields"][] = "DA_INTENSITY";
$tdataPMT_EV001[".importFields"][] = "DA_OVERTONE";
$tdataPMT_EV001[".importFields"][] = "DA_COLOR_FLUO";
$tdataPMT_EV001[".importFields"][] = "DA_POLISH";
$tdataPMT_EV001[".importFields"][] = "DA_SYMMETRY";
$tdataPMT_EV001[".importFields"][] = "DA_no";
$tdataPMT_EV001[".importFields"][] = "status";
$tdataPMT_EV001[".importFields"][] = "mst_business_partner_id";

$tdataPMT_EV001[".printFields"] = array();
$tdataPMT_EV001[".printFields"][] = "mst_business_partner_id";
$tdataPMT_EV001[".printFields"][] = "status";
$tdataPMT_EV001[".printFields"][] = "DA_MANAGEMENTNO";
$tdataPMT_EV001[".printFields"][] = "DA_BUYER";
$tdataPMT_EV001[".printFields"][] = "APP_UID";
$tdataPMT_EV001[".printFields"][] = "DA_SEQ";
$tdataPMT_EV001[".printFields"][] = "DA_RESPONSIBLE";
$tdataPMT_EV001[".printFields"][] = "DA_THESPECIFICATIONSSETTINGSUN";
$tdataPMT_EV001[".printFields"][] = "DA_WEIGHT";
$tdataPMT_EV001[".printFields"][] = "DA_THESPECIFICATIONSLOSSES";
$tdataPMT_EV001[".printFields"][] = "DA_PER_CARAT";
$tdataPMT_EV001[".printFields"][] = "DA_SHAPE";
$tdataPMT_EV001[".printFields"][] = "DA_SELFGRES";
$tdataPMT_EV001[".printFields"][] = "DA_ORIGINALGRADEMLIKENED";
$tdataPMT_EV001[".printFields"][] = "DA_SUGARCANE";
$tdataPMT_EV001[".printFields"][] = "DA_RAPA";
$tdataPMT_EV001[".printFields"][] = "DA_MEMO";
$tdataPMT_EV001[".printFields"][] = "DA_INTENSITY";
$tdataPMT_EV001[".printFields"][] = "DA_OVERTONE";
$tdataPMT_EV001[".printFields"][] = "DA_COLOR";
$tdataPMT_EV001[".printFields"][] = "DA_CLARITY";
$tdataPMT_EV001[".printFields"][] = "DA_CUT";
$tdataPMT_EV001[".printFields"][] = "DA_POLISH";
$tdataPMT_EV001[".printFields"][] = "DA_SYMMETRY";
$tdataPMT_EV001[".printFields"][] = "DA_FLUO";
$tdataPMT_EV001[".printFields"][] = "DA_COLOR_FLUO";
$tdataPMT_EV001[".printFields"][] = "DA_WIDE";
$tdataPMT_EV001[".printFields"][] = "DA_HIGH";
$tdataPMT_EV001[".printFields"][] = "DA_DEPTH";
$tdataPMT_EV001[".printFields"][] = "DA_COMMENTSANDTOTAL";
$tdataPMT_EV001[".printFields"][] = "DA_APPRAISER";
$tdataPMT_EV001[".printFields"][] = "DA_FRAPA";
$tdataPMT_EV001[".printFields"][] = "DA_RATE";
$tdataPMT_EV001[".printFields"][] = "DA_UNIT_PRICE_UNPLUG";
$tdataPMT_EV001[".printFields"][] = "DA_YOURNAME";
$tdataPMT_EV001[".printFields"][] = "DA_PAYOUTOTHER";
$tdataPMT_EV001[".printFields"][] = "DA_RAPAB";
$tdataPMT_EV001[".printFields"][] = "DA_GROSSPROFIT";
$tdataPMT_EV001[".printFields"][] = "DA_INTEREST_1";
$tdataPMT_EV001[".printFields"][] = "DA_no";
$tdataPMT_EV001[".printFields"][] = "DA_REGISTEREDPERSON";
$tdataPMT_EV001[".printFields"][] = "DA_UPDATEDBY";
$tdataPMT_EV001[".printFields"][] = "DA_UPDATEDDATE";
$tdataPMT_EV001[".printFields"][] = "DA_REGISTRATIONDATE";
$tdataPMT_EV001[".printFields"][] = "DA_COMPLETECHANGEDATE";

//	APP_UID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "APP_UID";
	$fdata["GoodName"] = "APP_UID";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","APP_UID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "APP_UID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APP_UID`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataPMT_EV001["APP_UID"] = $fdata;
//	APP_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "APP_NUMBER";
	$fdata["GoodName"] = "APP_NUMBER";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","APP_NUMBER");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "APP_NUMBER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APP_NUMBER`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdataPMT_EV001["APP_NUMBER"] = $fdata;
//	APP_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "APP_STATUS";
	$fdata["GoodName"] = "APP_STATUS";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","APP_STATUS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "APP_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`APP_STATUS`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdataPMT_EV001["APP_STATUS"] = $fdata;
//	ROW
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ROW";
	$fdata["GoodName"] = "ROW";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","ROW");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ROW";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ROW`";

	
	
			
				$fdata["UploadFolder"] = "files";

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








	$tdataPMT_EV001["ROW"] = $fdata;
//	DA_SEQ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DA_SEQ";
	$fdata["GoodName"] = "DA_SEQ";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_SEQ");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_SEQ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_SEQ`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataPMT_EV001["DA_SEQ"] = $fdata;
//	DA_MANAGEMENTNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DA_MANAGEMENTNO";
	$fdata["GoodName"] = "DA_MANAGEMENTNO";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_MANAGEMENTNO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_MANAGEMENTNO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_MANAGEMENTNO`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdataPMT_EV001["DA_MANAGEMENTNO"] = $fdata;
//	DA_BUYER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DA_BUYER";
	$fdata["GoodName"] = "DA_BUYER";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_BUYER");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_BUYER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_BUYER`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataPMT_EV001["DA_BUYER"] = $fdata;
//	DA_RESPONSIBLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DA_RESPONSIBLE";
	$fdata["GoodName"] = "DA_RESPONSIBLE";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_RESPONSIBLE");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_RESPONSIBLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_RESPONSIBLE`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataPMT_EV001["DA_RESPONSIBLE"] = $fdata;
//	DA_THESPECIFICATIONSSETTINGSUN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "DA_THESPECIFICATIONSSETTINGSUN";
	$fdata["GoodName"] = "DA_THESPECIFICATIONSSETTINGSUN";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_THESPECIFICATIONSSETTINGSUN");
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

		$fdata["strField"] = "DA_THESPECIFICATIONSSETTINGSUN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_THESPECIFICATIONSSETTINGSUN`";

	
	
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




	$tdataPMT_EV001["DA_THESPECIFICATIONSSETTINGSUN"] = $fdata;
//	DA_WEIGHT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DA_WEIGHT";
	$fdata["GoodName"] = "DA_WEIGHT";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_WEIGHT");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "DA_WEIGHT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_WEIGHT`";

	
	
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
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 70;

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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_WEIGHT"] = $fdata;
//	DA_THESPECIFICATIONSLOSSES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DA_THESPECIFICATIONSLOSSES";
	$fdata["GoodName"] = "DA_THESPECIFICATIONSLOSSES";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_THESPECIFICATIONSLOSSES");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_THESPECIFICATIONSLOSSES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_THESPECIFICATIONSLOSSES`";

	
	
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
			$edata["EditParams"].= " maxlength=40";

		$edata["controlWidth"] = 70;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_THESPECIFICATIONSLOSSES"] = $fdata;
//	DA_PER_CARAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "DA_PER_CARAT";
	$fdata["GoodName"] = "DA_PER_CARAT";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_PER_CARAT");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_PER_CARAT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_PER_CARAT`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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

		$edata["controlWidth"] = 70;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_PER_CARAT"] = $fdata;
//	DA_SHAPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "DA_SHAPE";
	$fdata["GoodName"] = "DA_SHAPE";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_SHAPE");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_SHAPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_SHAPE`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_DIA_DA_SHAPE";
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




	$tdataPMT_EV001["DA_SHAPE"] = $fdata;
//	DA_SELFGRES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "DA_SELFGRES";
	$fdata["GoodName"] = "DA_SELFGRES";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_SELFGRES");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_SELFGRES";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_SELFGRES`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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

		$edata["controlWidth"] = 79;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_SELFGRES"] = $fdata;
//	DA_ORIGINALGRADEMLIKENED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "DA_ORIGINALGRADEMLIKENED";
	$fdata["GoodName"] = "DA_ORIGINALGRADEMLIKENED";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_ORIGINALGRADEMLIKENED");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_ORIGINALGRADEMLIKENED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_ORIGINALGRADEMLIKENED`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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

		$edata["controlWidth"] = 79;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_ORIGINALGRADEMLIKENED"] = $fdata;
//	DA_SUGARCANE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "DA_SUGARCANE";
	$fdata["GoodName"] = "DA_SUGARCANE";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_SUGARCANE");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_SUGARCANE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_SUGARCANE`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_DIA_DA_SUGARCANE";
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




	$tdataPMT_EV001["DA_SUGARCANE"] = $fdata;
//	DA_PERCENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "DA_PERCENT";
	$fdata["GoodName"] = "DA_PERCENT";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_PERCENT");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DA_PERCENT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_PERCENT`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdataPMT_EV001["DA_PERCENT"] = $fdata;
//	DA_STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "DA_STATUS";
	$fdata["GoodName"] = "DA_STATUS";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_STATUS");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DA_STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_STATUS`";

	
	
			
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
	$edata["LookupTable"] = "_DIA_DA_STATUS";
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








	$tdataPMT_EV001["DA_STATUS"] = $fdata;
//	DA_COLOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "DA_COLOR";
	$fdata["GoodName"] = "DA_COLOR";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_COLOR");
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

		$fdata["strField"] = "DA_COLOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_COLOR`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_DIA_DA_COLOR";
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




	$tdataPMT_EV001["DA_COLOR"] = $fdata;
//	DA_CLARITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "DA_CLARITY";
	$fdata["GoodName"] = "DA_CLARITY";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_CLARITY");
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

		$fdata["strField"] = "DA_CLARITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_CLARITY`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_DIA_DA_CLARITY";
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




	$tdataPMT_EV001["DA_CLARITY"] = $fdata;
//	DA_CUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "DA_CUT";
	$fdata["GoodName"] = "DA_CUT";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_CUT");
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

		$fdata["strField"] = "DA_CUT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_CUT`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_DIA_DA_CUT";
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




	$tdataPMT_EV001["DA_CUT"] = $fdata;
//	DA_FLUO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "DA_FLUO";
	$fdata["GoodName"] = "DA_FLUO";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_FLUO");
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

		$fdata["strField"] = "DA_FLUO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_FLUO`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_DIA_DA_FLUO";
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




	$tdataPMT_EV001["DA_FLUO"] = $fdata;
//	DA_WIDE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "DA_WIDE";
	$fdata["GoodName"] = "DA_WIDE";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_WIDE");
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

		$fdata["strField"] = "DA_WIDE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_WIDE`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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

		$edata["controlWidth"] = 67;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_WIDE"] = $fdata;
//	DA_HIGH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "DA_HIGH";
	$fdata["GoodName"] = "DA_HIGH";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_HIGH");
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

		$fdata["strField"] = "DA_HIGH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_HIGH`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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

		$edata["controlWidth"] = 67;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_HIGH"] = $fdata;
//	DA_DEPTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "DA_DEPTH";
	$fdata["GoodName"] = "DA_DEPTH";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_DEPTH");
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

		$fdata["strField"] = "DA_DEPTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_DEPTH`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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

		$edata["controlWidth"] = 51;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_DEPTH"] = $fdata;
//	DA_APPRAISER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "DA_APPRAISER";
	$fdata["GoodName"] = "DA_APPRAISER";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_APPRAISER");
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

		$fdata["strField"] = "DA_APPRAISER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_APPRAISER`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_DIA_DA_APPRAISER";
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




	$tdataPMT_EV001["DA_APPRAISER"] = $fdata;
//	DA_RATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "DA_RATE";
	$fdata["GoodName"] = "DA_RATE";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_RATE");
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

		$fdata["strField"] = "DA_RATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_RATE`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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

		$edata["controlWidth"] = 79;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_RATE"] = $fdata;
//	DA_UNITPRICE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "DA_UNITPRICE";
	$fdata["GoodName"] = "DA_UNITPRICE";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_UNITPRICE");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DA_UNITPRICE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_UNITPRICE`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdataPMT_EV001["DA_UNITPRICE"] = $fdata;
//	DA_YOURNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "DA_YOURNAME";
	$fdata["GoodName"] = "DA_YOURNAME";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_YOURNAME");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_YOURNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_YOURNAME`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_DIA_DA_CUSTOMER";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
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




	$tdataPMT_EV001["DA_YOURNAME"] = $fdata;
//	DA_PAYOUTOTHER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "DA_PAYOUTOTHER";
	$fdata["GoodName"] = "DA_PAYOUTOTHER";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_PAYOUTOTHER");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "DA_PAYOUTOTHER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_PAYOUTOTHER`";

	
	
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




	$tdataPMT_EV001["DA_PAYOUTOTHER"] = $fdata;
//	DA_RAPA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "DA_RAPA";
	$fdata["GoodName"] = "DA_RAPA";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_RAPA");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_RAPA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_RAPA`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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

		$edata["controlWidth"] = 59;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_RAPA"] = $fdata;
//	DA_COMMENTSANDTOTAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "DA_COMMENTSANDTOTAL";
	$fdata["GoodName"] = "DA_COMMENTSANDTOTAL";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_COMMENTSANDTOTAL");
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

		$fdata["strField"] = "DA_COMMENTSANDTOTAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_COMMENTSANDTOTAL`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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

	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_COMMENTSANDTOTAL"] = $fdata;
//	DA_REGISTEREDPERSON
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "DA_REGISTEREDPERSON";
	$fdata["GoodName"] = "DA_REGISTEREDPERSON";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_REGISTEREDPERSON");
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

		$fdata["strField"] = "DA_REGISTEREDPERSON";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_REGISTEREDPERSON`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataPMT_EV001["DA_REGISTEREDPERSON"] = $fdata;
//	DA_GROSSPROFIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "DA_GROSSPROFIT";
	$fdata["GoodName"] = "DA_GROSSPROFIT";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_GROSSPROFIT");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_GROSSPROFIT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_GROSSPROFIT`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 77;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_GROSSPROFIT"] = $fdata;
//	DA_INTEREST_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "DA_INTEREST_1";
	$fdata["GoodName"] = "DA_INTEREST_1";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_INTEREST_1");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_INTEREST_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_INTEREST_1`";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=32";

		$edata["controlWidth"] = 77;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_INTEREST_1"] = $fdata;
//	DA_REGISTRATIONDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "DA_REGISTRATIONDATE";
	$fdata["GoodName"] = "DA_REGISTRATIONDATE";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_REGISTRATIONDATE");
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

		$fdata["strField"] = "DA_REGISTRATIONDATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_REGISTRATIONDATE`";

	
	
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




	$tdataPMT_EV001["DA_REGISTRATIONDATE"] = $fdata;
//	DA_UPDATEDBY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "DA_UPDATEDBY";
	$fdata["GoodName"] = "DA_UPDATEDBY";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_UPDATEDBY");
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

		$fdata["strField"] = "DA_UPDATEDBY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_UPDATEDBY`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LinkFieldType"] = 200;
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




	$tdataPMT_EV001["DA_UPDATEDBY"] = $fdata;
//	DA_UPDATEDDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "DA_UPDATEDDATE";
	$fdata["GoodName"] = "DA_UPDATEDDATE";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_UPDATEDDATE");
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

		$fdata["strField"] = "DA_UPDATEDDATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_UPDATEDDATE`";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_UPDATEDDATE"] = $fdata;
//	DA_COMPLETECHANGEDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "DA_COMPLETECHANGEDATE";
	$fdata["GoodName"] = "DA_COMPLETECHANGEDATE";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_COMPLETECHANGEDATE");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_COMPLETECHANGEDATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_COMPLETECHANGEDATE`";

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_COMPLETECHANGEDATE"] = $fdata;
//	DA_FRAPA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "DA_FRAPA";
	$fdata["GoodName"] = "DA_FRAPA";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_FRAPA");
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

		$fdata["strField"] = "DA_FRAPA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_FRAPA`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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

		$edata["controlWidth"] = 67;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_FRAPA"] = $fdata;
//	DA_RAPAB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "DA_RAPAB";
	$fdata["GoodName"] = "DA_RAPAB";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_RAPAB");
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

		$fdata["strField"] = "DA_RAPAB";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_RAPAB`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 81;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_RAPAB"] = $fdata;
//	DA_UNIT_PRICE_UNPLUG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "DA_UNIT_PRICE_UNPLUG";
	$fdata["GoodName"] = "DA_UNIT_PRICE_UNPLUG";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_UNIT_PRICE_UNPLUG");
	$fdata["FieldType"] = 14;

	
	
	
			
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

		$fdata["strField"] = "DA_UNIT_PRICE_UNPLUG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_UNIT_PRICE_UNPLUG`";

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 78;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdataPMT_EV001["DA_UNIT_PRICE_UNPLUG"] = $fdata;
//	DA_STATUS_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "DA_STATUS_2";
	$fdata["GoodName"] = "DA_STATUS_2";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_STATUS_2");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DA_STATUS_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_STATUS_2`";

	
	
			
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
	$edata["LookupTable"] = "_DIA_DA_ST2";
	$edata["LookupConnId"] = "internet_at_urlounge_co_jp";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "name";
	$edata["LinkFieldType"] = 200;
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








	$tdataPMT_EV001["DA_STATUS_2"] = $fdata;
//	DA_MEMO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "DA_MEMO";
	$fdata["GoodName"] = "DA_MEMO";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_MEMO");
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

		$fdata["strField"] = "DA_MEMO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_MEMO`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataPMT_EV001["DA_MEMO"] = $fdata;
//	DA_INTENSITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "DA_INTENSITY";
	$fdata["GoodName"] = "DA_INTENSITY";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_INTENSITY");
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

		$fdata["strField"] = "DA_INTENSITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_INTENSITY`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_Intensity";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID0";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";

	
	$edata["LookupOrderBy"] = "Sort";

	
	
	
	

	
	
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




	$tdataPMT_EV001["DA_INTENSITY"] = $fdata;
//	DA_OVERTONE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "DA_OVERTONE";
	$fdata["GoodName"] = "DA_OVERTONE";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_OVERTONE");
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

		$fdata["strField"] = "DA_OVERTONE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_OVERTONE`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_overtone";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";

	
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




	$tdataPMT_EV001["DA_OVERTONE"] = $fdata;
//	DA_INTENSITY_FLUO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "DA_INTENSITY_FLUO";
	$fdata["GoodName"] = "DA_INTENSITY_FLUO";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_INTENSITY_FLUO");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "DA_INTENSITY_FLUO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_INTENSITY_FLUO`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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








	$tdataPMT_EV001["DA_INTENSITY_FLUO"] = $fdata;
//	DA_COLOR_FLUO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "DA_COLOR_FLUO";
	$fdata["GoodName"] = "DA_COLOR_FLUO";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_COLOR_FLUO");
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

		$fdata["strField"] = "DA_COLOR_FLUO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_COLOR_FLUO`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_color_fluo";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Name";

	
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




	$tdataPMT_EV001["DA_COLOR_FLUO"] = $fdata;
//	DA_POLISH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "DA_POLISH";
	$fdata["GoodName"] = "DA_POLISH";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_POLISH");
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

		$fdata["strField"] = "DA_POLISH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_POLISH`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_DA_POLISH";
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




	$tdataPMT_EV001["DA_POLISH"] = $fdata;
//	DA_SYMMETRY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "DA_SYMMETRY";
	$fdata["GoodName"] = "DA_SYMMETRY";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_SYMMETRY");
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

		$fdata["strField"] = "DA_SYMMETRY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_SYMMETRY`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_DA_SYMMETRY";
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




	$tdataPMT_EV001["DA_SYMMETRY"] = $fdata;
//	DA_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "DA_no";
	$fdata["GoodName"] = "DA_no";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_no");
	$fdata["FieldType"] = 200;

	
	
	
			
	
		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_no`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

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




	$tdataPMT_EV001["DA_no"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","status");
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
	$edata["LookupTable"] = "_goods_status2";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "goods_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "goods_status";

	
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




	$tdataPMT_EV001["status"] = $fdata;
//	DA_SALES_FEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "DA_SALES_FEE";
	$fdata["GoodName"] = "DA_SALES_FEE";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_SALES_FEE");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_SALES_FEE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_SALES_FEE`";

	
	
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




	$tdataPMT_EV001["DA_SALES_FEE"] = $fdata;
//	mst_business_partner_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "mst_business_partner_id";
	$fdata["GoodName"] = "mst_business_partner_id";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","mst_business_partner_id");
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

		$fdata["strField"] = "mst_business_partner_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_business_partner_id`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_business_partner";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "_DIA_DA_CUSTOMER_sort";

	
	
	
	

	
	
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




	$tdataPMT_EV001["mst_business_partner_id"] = $fdata;
//	DA_PAYOUTOTHER_WITHOUT_SALES_FEE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "DA_PAYOUTOTHER_WITHOUT_SALES_FEE";
	$fdata["GoodName"] = "DA_PAYOUTOTHER_WITHOUT_SALES_FEE";
	$fdata["ownerTable"] = "PMT_EV001";
	$fdata["Label"] = GetFieldLabel("PMT_EV001","DA_PAYOUTOTHER_WITHOUT_SALES_FEE");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_PAYOUTOTHER_WITHOUT_SALES_FEE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DA_PAYOUTOTHER_WITHOUT_SALES_FEE`";

	
	
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




	$tdataPMT_EV001["DA_PAYOUTOTHER_WITHOUT_SALES_FEE"] = $fdata;


$tables_data["PMT_EV001"]=&$tdataPMT_EV001;
$field_labels["PMT_EV001"] = &$fieldLabelsPMT_EV001;
$fieldToolTips["PMT_EV001"] = &$fieldToolTipsPMT_EV001;
$placeHolders["PMT_EV001"] = &$placeHoldersPMT_EV001;
$page_titles["PMT_EV001"] = &$pageTitlesPMT_EV001;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["PMT_EV001"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["PMT_EV001"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_PMT_EV001()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`APP_UID`,  `APP_NUMBER`,  `APP_STATUS`,  `ROW`,  `DA_SEQ`,  `DA_MANAGEMENTNO`,  `DA_BUYER`,  `DA_RESPONSIBLE`,  `DA_THESPECIFICATIONSSETTINGSUN`,  `DA_WEIGHT`,  `DA_THESPECIFICATIONSLOSSES`,  `DA_PER_CARAT`,  `DA_SHAPE`,  `DA_SELFGRES`,  `DA_ORIGINALGRADEMLIKENED`,  `DA_SUGARCANE`,  `DA_PERCENT`,  `DA_STATUS`,  `DA_COLOR`,  `DA_CLARITY`,  `DA_CUT`,  `DA_FLUO`,  `DA_WIDE`,  `DA_HIGH`,  `DA_DEPTH`,  `DA_APPRAISER`,  `DA_RATE`,  `DA_UNITPRICE`,  `DA_YOURNAME`,  `DA_PAYOUTOTHER`,  `DA_RAPA`,  `DA_COMMENTSANDTOTAL`,  `DA_REGISTEREDPERSON`,  `DA_GROSSPROFIT`,  `DA_INTEREST_1`,  `DA_REGISTRATIONDATE`,  `DA_UPDATEDBY`,  `DA_UPDATEDDATE`,  `DA_COMPLETECHANGEDATE`,  `DA_FRAPA`,  `DA_RAPAB`,  `DA_UNIT_PRICE_UNPLUG`,  `DA_STATUS_2`,  `DA_MEMO`,  `DA_INTENSITY`,  `DA_OVERTONE`,  `DA_INTENSITY_FLUO`,  `DA_COLOR_FLUO`,  `DA_POLISH`,  `DA_SYMMETRY`,  `DA_no`,  `status`,  `DA_SALES_FEE`,  `mst_business_partner_id`,  `DA_PAYOUTOTHER_WITHOUT_SALES_FEE`";
$proto0["m_strFrom"] = "FROM `PMT_EV001`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `APP_UID` DESC";
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
	"m_strName" => "APP_UID",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto6["m_sql"] = "`APP_UID`";
$proto6["m_srcTableName"] = "PMT_EV001";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_NUMBER",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto8["m_sql"] = "`APP_NUMBER`";
$proto8["m_srcTableName"] = "PMT_EV001";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "APP_STATUS",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto10["m_sql"] = "`APP_STATUS`";
$proto10["m_srcTableName"] = "PMT_EV001";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ROW",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto12["m_sql"] = "`ROW`";
$proto12["m_srcTableName"] = "PMT_EV001";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_SEQ",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto14["m_sql"] = "`DA_SEQ`";
$proto14["m_srcTableName"] = "PMT_EV001";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_MANAGEMENTNO",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto16["m_sql"] = "`DA_MANAGEMENTNO`";
$proto16["m_srcTableName"] = "PMT_EV001";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_BUYER",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto18["m_sql"] = "`DA_BUYER`";
$proto18["m_srcTableName"] = "PMT_EV001";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_RESPONSIBLE",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto20["m_sql"] = "`DA_RESPONSIBLE`";
$proto20["m_srcTableName"] = "PMT_EV001";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_THESPECIFICATIONSSETTINGSUN",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto22["m_sql"] = "`DA_THESPECIFICATIONSSETTINGSUN`";
$proto22["m_srcTableName"] = "PMT_EV001";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_WEIGHT",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto24["m_sql"] = "`DA_WEIGHT`";
$proto24["m_srcTableName"] = "PMT_EV001";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_THESPECIFICATIONSLOSSES",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto26["m_sql"] = "`DA_THESPECIFICATIONSLOSSES`";
$proto26["m_srcTableName"] = "PMT_EV001";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_PER_CARAT",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto28["m_sql"] = "`DA_PER_CARAT`";
$proto28["m_srcTableName"] = "PMT_EV001";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_SHAPE",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto30["m_sql"] = "`DA_SHAPE`";
$proto30["m_srcTableName"] = "PMT_EV001";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_SELFGRES",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto32["m_sql"] = "`DA_SELFGRES`";
$proto32["m_srcTableName"] = "PMT_EV001";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_ORIGINALGRADEMLIKENED",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto34["m_sql"] = "`DA_ORIGINALGRADEMLIKENED`";
$proto34["m_srcTableName"] = "PMT_EV001";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_SUGARCANE",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto36["m_sql"] = "`DA_SUGARCANE`";
$proto36["m_srcTableName"] = "PMT_EV001";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_PERCENT",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto38["m_sql"] = "`DA_PERCENT`";
$proto38["m_srcTableName"] = "PMT_EV001";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_STATUS",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto40["m_sql"] = "`DA_STATUS`";
$proto40["m_srcTableName"] = "PMT_EV001";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_COLOR",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto42["m_sql"] = "`DA_COLOR`";
$proto42["m_srcTableName"] = "PMT_EV001";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_CLARITY",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto44["m_sql"] = "`DA_CLARITY`";
$proto44["m_srcTableName"] = "PMT_EV001";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_CUT",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto46["m_sql"] = "`DA_CUT`";
$proto46["m_srcTableName"] = "PMT_EV001";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_FLUO",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto48["m_sql"] = "`DA_FLUO`";
$proto48["m_srcTableName"] = "PMT_EV001";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_WIDE",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto50["m_sql"] = "`DA_WIDE`";
$proto50["m_srcTableName"] = "PMT_EV001";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_HIGH",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto52["m_sql"] = "`DA_HIGH`";
$proto52["m_srcTableName"] = "PMT_EV001";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_DEPTH",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto54["m_sql"] = "`DA_DEPTH`";
$proto54["m_srcTableName"] = "PMT_EV001";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_APPRAISER",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto56["m_sql"] = "`DA_APPRAISER`";
$proto56["m_srcTableName"] = "PMT_EV001";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_RATE",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto58["m_sql"] = "`DA_RATE`";
$proto58["m_srcTableName"] = "PMT_EV001";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_UNITPRICE",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto60["m_sql"] = "`DA_UNITPRICE`";
$proto60["m_srcTableName"] = "PMT_EV001";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_YOURNAME",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto62["m_sql"] = "`DA_YOURNAME`";
$proto62["m_srcTableName"] = "PMT_EV001";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_PAYOUTOTHER",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto64["m_sql"] = "`DA_PAYOUTOTHER`";
$proto64["m_srcTableName"] = "PMT_EV001";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_RAPA",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto66["m_sql"] = "`DA_RAPA`";
$proto66["m_srcTableName"] = "PMT_EV001";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_COMMENTSANDTOTAL",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto68["m_sql"] = "`DA_COMMENTSANDTOTAL`";
$proto68["m_srcTableName"] = "PMT_EV001";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_REGISTEREDPERSON",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto70["m_sql"] = "`DA_REGISTEREDPERSON`";
$proto70["m_srcTableName"] = "PMT_EV001";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_GROSSPROFIT",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto72["m_sql"] = "`DA_GROSSPROFIT`";
$proto72["m_srcTableName"] = "PMT_EV001";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_INTEREST_1",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto74["m_sql"] = "`DA_INTEREST_1`";
$proto74["m_srcTableName"] = "PMT_EV001";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_REGISTRATIONDATE",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto76["m_sql"] = "`DA_REGISTRATIONDATE`";
$proto76["m_srcTableName"] = "PMT_EV001";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_UPDATEDBY",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto78["m_sql"] = "`DA_UPDATEDBY`";
$proto78["m_srcTableName"] = "PMT_EV001";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_UPDATEDDATE",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto80["m_sql"] = "`DA_UPDATEDDATE`";
$proto80["m_srcTableName"] = "PMT_EV001";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_COMPLETECHANGEDATE",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto82["m_sql"] = "`DA_COMPLETECHANGEDATE`";
$proto82["m_srcTableName"] = "PMT_EV001";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_FRAPA",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto84["m_sql"] = "`DA_FRAPA`";
$proto84["m_srcTableName"] = "PMT_EV001";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_RAPAB",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto86["m_sql"] = "`DA_RAPAB`";
$proto86["m_srcTableName"] = "PMT_EV001";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_UNIT_PRICE_UNPLUG",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto88["m_sql"] = "`DA_UNIT_PRICE_UNPLUG`";
$proto88["m_srcTableName"] = "PMT_EV001";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_STATUS_2",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto90["m_sql"] = "`DA_STATUS_2`";
$proto90["m_srcTableName"] = "PMT_EV001";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_MEMO",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto92["m_sql"] = "`DA_MEMO`";
$proto92["m_srcTableName"] = "PMT_EV001";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_INTENSITY",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto94["m_sql"] = "`DA_INTENSITY`";
$proto94["m_srcTableName"] = "PMT_EV001";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_OVERTONE",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto96["m_sql"] = "`DA_OVERTONE`";
$proto96["m_srcTableName"] = "PMT_EV001";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_INTENSITY_FLUO",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto98["m_sql"] = "`DA_INTENSITY_FLUO`";
$proto98["m_srcTableName"] = "PMT_EV001";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_COLOR_FLUO",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto100["m_sql"] = "`DA_COLOR_FLUO`";
$proto100["m_srcTableName"] = "PMT_EV001";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_POLISH",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto102["m_sql"] = "`DA_POLISH`";
$proto102["m_srcTableName"] = "PMT_EV001";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_SYMMETRY",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto104["m_sql"] = "`DA_SYMMETRY`";
$proto104["m_srcTableName"] = "PMT_EV001";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_no",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto106["m_sql"] = "`DA_no`";
$proto106["m_srcTableName"] = "PMT_EV001";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto108["m_sql"] = "`status`";
$proto108["m_srcTableName"] = "PMT_EV001";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_SALES_FEE",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto110["m_sql"] = "`DA_SALES_FEE`";
$proto110["m_srcTableName"] = "PMT_EV001";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "mst_business_partner_id",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto112["m_sql"] = "`mst_business_partner_id`";
$proto112["m_srcTableName"] = "PMT_EV001";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_PAYOUTOTHER_WITHOUT_SALES_FEE",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto114["m_sql"] = "`DA_PAYOUTOTHER_WITHOUT_SALES_FEE`";
$proto114["m_srcTableName"] = "PMT_EV001";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto116=array();
$proto116["m_link"] = "SQLL_MAIN";
			$proto117=array();
$proto117["m_strName"] = "PMT_EV001";
$proto117["m_srcTableName"] = "PMT_EV001";
$proto117["m_columns"] = array();
$proto117["m_columns"][] = "APP_UID";
$proto117["m_columns"][] = "APP_NUMBER";
$proto117["m_columns"][] = "APP_STATUS";
$proto117["m_columns"][] = "ROW";
$proto117["m_columns"][] = "DA_SEQ";
$proto117["m_columns"][] = "DA_MANAGEMENTNO";
$proto117["m_columns"][] = "DA_BUYER";
$proto117["m_columns"][] = "DA_RESPONSIBLE";
$proto117["m_columns"][] = "DA_THESPECIFICATIONSSETTINGSUN";
$proto117["m_columns"][] = "DA_WEIGHT";
$proto117["m_columns"][] = "DA_THESPECIFICATIONSLOSSES";
$proto117["m_columns"][] = "DA_PER_CARAT";
$proto117["m_columns"][] = "DA_SHAPE";
$proto117["m_columns"][] = "DA_SELFGRES";
$proto117["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto117["m_columns"][] = "DA_SUGARCANE";
$proto117["m_columns"][] = "DA_PERCENT";
$proto117["m_columns"][] = "DA_STATUS";
$proto117["m_columns"][] = "DA_COLOR";
$proto117["m_columns"][] = "DA_CLARITY";
$proto117["m_columns"][] = "DA_CUT";
$proto117["m_columns"][] = "DA_FLUO";
$proto117["m_columns"][] = "DA_WIDE";
$proto117["m_columns"][] = "DA_HIGH";
$proto117["m_columns"][] = "DA_DEPTH";
$proto117["m_columns"][] = "DA_APPRAISER";
$proto117["m_columns"][] = "DA_RATE";
$proto117["m_columns"][] = "DA_UNITPRICE";
$proto117["m_columns"][] = "DA_YOURNAME";
$proto117["m_columns"][] = "DA_PAYOUTOTHER";
$proto117["m_columns"][] = "DA_RAPA";
$proto117["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto117["m_columns"][] = "DA_REGISTEREDPERSON";
$proto117["m_columns"][] = "DA_GROSSPROFIT";
$proto117["m_columns"][] = "DA_INTEREST_1";
$proto117["m_columns"][] = "DA_REGISTRATIONDATE";
$proto117["m_columns"][] = "DA_UPDATEDBY";
$proto117["m_columns"][] = "DA_UPDATEDDATE";
$proto117["m_columns"][] = "DA_COMPLETECHANGEDATE";
$proto117["m_columns"][] = "DA_FRAPA";
$proto117["m_columns"][] = "DA_RAPAB";
$proto117["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto117["m_columns"][] = "DA_STATUS_2";
$proto117["m_columns"][] = "DA_MEMO";
$proto117["m_columns"][] = "DA_INTENSITY";
$proto117["m_columns"][] = "DA_OVERTONE";
$proto117["m_columns"][] = "DA_INTENSITY_FLUO";
$proto117["m_columns"][] = "DA_COLOR_FLUO";
$proto117["m_columns"][] = "DA_POLISH";
$proto117["m_columns"][] = "DA_SYMMETRY";
$proto117["m_columns"][] = "DA_no";
$proto117["m_columns"][] = "status";
$proto117["m_columns"][] = "DA_SALES_FEE";
$proto117["m_columns"][] = "mst_business_partner_id";
$proto117["m_columns"][] = "DA_PAYOUTOTHER_WITHOUT_SALES_FEE";
$obj = new SQLTable($proto117);

$proto116["m_table"] = $obj;
$proto116["m_sql"] = "`PMT_EV001`";
$proto116["m_alias"] = "";
$proto116["m_srcTableName"] = "PMT_EV001";
$proto118=array();
$proto118["m_sql"] = "";
$proto118["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto118["m_column"]=$obj;
$proto118["m_contained"] = array();
$proto118["m_strCase"] = "";
$proto118["m_havingmode"] = false;
$proto118["m_inBrackets"] = false;
$proto118["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto118);

$proto116["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto116);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto120=array();
						$obj = new SQLField(array(
	"m_strName" => "APP_UID",
	"m_strTable" => "PMT_EV001",
	"m_srcTableName" => "PMT_EV001"
));

$proto120["m_column"]=$obj;
$proto120["m_bAsc"] = 0;
$proto120["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto120);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="PMT_EV001";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_PMT_EV001 = createSqlQuery_PMT_EV001();


	
		;

																																																							

$tdataPMT_EV001[".sqlquery"] = $queryData_PMT_EV001;

include_once(getabspath("include/PMT_EV001_events.php"));
$tableEvents["PMT_EV001"] = new eventclass_PMT_EV001;
$tdataPMT_EV001[".hasEvents"] = true;

?>