<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_Ehiden_kaitori = array();
	$tdatavw_Ehiden_kaitori[".truncateText"] = true;
	$tdatavw_Ehiden_kaitori[".NumberOfChars"] = 80;
	$tdatavw_Ehiden_kaitori[".ShortName"] = "vw_Ehiden_kaitori";
	$tdatavw_Ehiden_kaitori[".OwnerID"] = "";
	$tdatavw_Ehiden_kaitori[".OriginalTable"] = "vw_Ehiden_kaitori";

//	field labels
$fieldLabelsvw_Ehiden_kaitori = array();
$fieldToolTipsvw_Ehiden_kaitori = array();
$pageTitlesvw_Ehiden_kaitori = array();
$placeHoldersvw_Ehiden_kaitori = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_Ehiden_kaitori["Japanese"] = array();
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"] = array();
	$placeHoldersvw_Ehiden_kaitori["Japanese"] = array();
	$pageTitlesvw_Ehiden_kaitori["Japanese"] = array();
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["ecc_id"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["ecc_id"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["concat_Eoc_ecc_id_____Eoc_ecc_seq_"] = "Concat(Eoc.ecc Id, \"/\", Eoc.ecc Seq)";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["concat_Eoc_ecc_id_____Eoc_ecc_seq_"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["concat_Eoc_ecc_id_____Eoc_ecc_seq_"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data1"] = "Data1";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data1"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data1"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data2"] = "Data2";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data2"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data2"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data3"] = "Data3";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data3"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data3"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data4"] = "Data4";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data4"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data4"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data5"] = "Data5";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data5"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data5"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Ehide_haitatu_hi"] = "Ehide Haitatu Hi";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Ehide_haitatu_hi"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Ehide_haitatu_hi"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data6"] = "Data6";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data6"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data6"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data7"] = "Data7";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data7"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data7"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data8"] = "Data8";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data8"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data8"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Ehide_haitatu_sitei_jikantai"] = "Ehide Haitatu Sitei Jikantai";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Ehide_haitatu_sitei_jikantai"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Ehide_haitatu_sitei_jikantai"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Ehide_shuka_kosuu"] = "Ehide Shuka Kosuu";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Ehide_shuka_kosuu"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Ehide_shuka_kosuu"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data9"] = "Data9";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data9"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data9"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data10"] = "Data10";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data10"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data10"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data11"] = "Data11";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data11"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data11"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data32"] = "Data32";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data32"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data32"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Ehide_otodokesaki_meisho_1"] = "Ehide Otodokesaki Meisho 1";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Ehide_otodokesaki_meisho_1"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Ehide_otodokesaki_meisho_1"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Ehide_otodokesaki_jyuusho_1"] = "Ehide Otodokesaki Jyuusho 1";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Ehide_otodokesaki_jyuusho_1"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Ehide_otodokesaki_jyuusho_1"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Ehide_otodokesaki_jyuusho_2"] = "Ehide Otodokesaki Jyuusho 2";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Ehide_otodokesaki_jyuusho_2"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Ehide_otodokesaki_jyuusho_2"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Ehide_otodokesaki_denwa_bangou"] = "Ehide Otodokesaki Denwa Bangou";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Ehide_otodokesaki_denwa_bangou"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Ehide_otodokesaki_denwa_bangou"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Ehide_goirainusi_meishou1"] = "Ehide Goirainusi Meishou1";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Ehide_goirainusi_meishou1"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Ehide_goirainusi_meishou1"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Ehide_goirainusi_jyuusho_1"] = "Ehide Goirainusi Jyuusho 1";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Ehide_goirainusi_jyuusho_1"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Ehide_goirainusi_jyuusho_1"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Ehide_goirainusi_jyuusho_2"] = "Ehide Goirainusi Jyuusho 2";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Ehide_goirainusi_jyuusho_2"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Ehide_goirainusi_jyuusho_2"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Ehide_goirainusi_denwa_bangou"] = "Ehide Goirainusi Denwa Bangou";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Ehide_goirainusi_denwa_bangou"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Ehide_goirainusi_denwa_bangou"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data12"] = "Data12";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data12"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data12"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data13"] = "Data13";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data13"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data13"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data14"] = "Data14";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data14"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data14"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data15"] = "Data15";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data15"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data15"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data16"] = "Data16";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data16"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data16"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data17"] = "Data17";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data17"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data17"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data18"] = "Data18";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data18"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data18"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data19"] = "Data19";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data19"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data19"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data20"] = "Data20";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data20"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data20"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data21"] = "Data21";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data21"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data21"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data22"] = "Data22";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data22"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data22"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data23"] = "Data23";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data23"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data23"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data24"] = "Data24";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data24"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data24"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data25"] = "Data25";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data25"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data25"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data26"] = "Data26";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data26"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data26"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data27"] = "Data27";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data27"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data27"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data28"] = "Data28";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data28"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data28"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data29"] = "Data29";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data29"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data29"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["Data31"] = "Data31";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["Data31"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["Data31"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["rakuda_csv_flag"] = "Rakuda Csv Flag";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["rakuda_csv_flag"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["rakuda_csv_flag"] = "";
	$fieldLabelsvw_Ehiden_kaitori["Japanese"]["EOC_COURIER_CHECK"] = "EOC COURIER CHECK";
	$fieldToolTipsvw_Ehiden_kaitori["Japanese"]["EOC_COURIER_CHECK"] = "";
	$placeHoldersvw_Ehiden_kaitori["Japanese"]["EOC_COURIER_CHECK"] = "";
	if (count($fieldToolTipsvw_Ehiden_kaitori["Japanese"]))
		$tdatavw_Ehiden_kaitori[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_Ehiden_kaitori[""] = array();
	$fieldToolTipsvw_Ehiden_kaitori[""] = array();
	$placeHoldersvw_Ehiden_kaitori[""] = array();
	$pageTitlesvw_Ehiden_kaitori[""] = array();
	if (count($fieldToolTipsvw_Ehiden_kaitori[""]))
		$tdatavw_Ehiden_kaitori[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_Ehiden_kaitori["English"] = array();
	$fieldToolTipsvw_Ehiden_kaitori["English"] = array();
	$placeHoldersvw_Ehiden_kaitori["English"] = array();
	$pageTitlesvw_Ehiden_kaitori["English"] = array();
	if (count($fieldToolTipsvw_Ehiden_kaitori["English"]))
		$tdatavw_Ehiden_kaitori[".isUseToolTips"] = true;
}


	$tdatavw_Ehiden_kaitori[".NCSearch"] = true;



$tdatavw_Ehiden_kaitori[".shortTableName"] = "vw_Ehiden_kaitori";
$tdatavw_Ehiden_kaitori[".nSecOptions"] = 0;
$tdatavw_Ehiden_kaitori[".recsPerRowPrint"] = 1;
$tdatavw_Ehiden_kaitori[".mainTableOwnerID"] = "";
$tdatavw_Ehiden_kaitori[".moveNext"] = 1;
$tdatavw_Ehiden_kaitori[".entityType"] = 0;

$tdatavw_Ehiden_kaitori[".strOriginalTableName"] = "vw_Ehiden_kaitori";

	



$tdatavw_Ehiden_kaitori[".showAddInPopup"] = false;

$tdatavw_Ehiden_kaitori[".showEditInPopup"] = false;

$tdatavw_Ehiden_kaitori[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_Ehiden_kaitori[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_Ehiden_kaitori[".fieldsForRegister"] = array();

$tdatavw_Ehiden_kaitori[".listAjax"] = false;

	$tdatavw_Ehiden_kaitori[".audit"] = true;

	$tdatavw_Ehiden_kaitori[".locking"] = false;



$tdatavw_Ehiden_kaitori[".list"] = true;



$tdatavw_Ehiden_kaitori[".reorderRecordsByHeader"] = true;
$tdatavw_Ehiden_kaitori[".createSortByDropdown"] = true;
$tdatavw_Ehiden_kaitori[".strSortControlSettingsJSON"] = "";

$tdatavw_Ehiden_kaitori[".strClickActionJSON"] = "{\"fields\":{\"Data1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data10\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data11\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data12\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data13\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data14\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data15\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data16\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data17\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data18\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data19\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data20\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data21\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data22\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data23\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data24\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data25\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data26\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data27\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data28\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data29\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data3\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data31\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data32\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data4\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data5\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data6\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data7\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data8\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Data9\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"EOC_COURIER_CHECK\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Ehide_goirainusi_denwa_bangou\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Ehide_goirainusi_jyuusho_1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Ehide_goirainusi_jyuusho_2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Ehide_goirainusi_meishou1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Ehide_haitatu_hi\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Ehide_haitatu_sitei_jikantai\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Ehide_otodokesaki_denwa_bangou\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Ehide_otodokesaki_jyuusho_1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Ehide_otodokesaki_jyuusho_2\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Ehide_otodokesaki_meisho_1\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"Ehide_shuka_kosuu\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"concat(Eoc.ecc_id,\\\"/\\\",Eoc.ecc_seq)\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"ecc_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"rakuda_csv_flag\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":null,\"url\":\"\"}}}";



$tdatavw_Ehiden_kaitori[".import"] = true;

$tdatavw_Ehiden_kaitori[".exportTo"] = true;

$tdatavw_Ehiden_kaitori[".printFriendly"] = true;


$tdatavw_Ehiden_kaitori[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_Ehiden_kaitori[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_Ehiden_kaitori[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_Ehiden_kaitori[".searchSaving"] = false;
//

$tdatavw_Ehiden_kaitori[".showSearchPanel"] = true;
		$tdatavw_Ehiden_kaitori[".flexibleSearch"] = true;

$tdatavw_Ehiden_kaitori[".isUseAjaxSuggest"] = true;

$tdatavw_Ehiden_kaitori[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatavw_Ehiden_kaitori[".ajaxCodeSnippetAdded"] = false;

$tdatavw_Ehiden_kaitori[".buttonsAdded"] = false;

$tdatavw_Ehiden_kaitori[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_Ehiden_kaitori[".isUseTimeForSearch"] = false;





$tdatavw_Ehiden_kaitori[".allSearchFields"] = array();
$tdatavw_Ehiden_kaitori[".filterFields"] = array();
$tdatavw_Ehiden_kaitori[".requiredSearchFields"] = array();

$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "ecc_id";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "concat(Eoc.ecc_id,\"/\",Eoc.ecc_seq)";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data1";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data2";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data3";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data4";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data5";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Ehide_haitatu_hi";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data6";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data7";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data8";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Ehide_haitatu_sitei_jikantai";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Ehide_shuka_kosuu";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data9";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data10";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data11";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data32";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Ehide_otodokesaki_meisho_1";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Ehide_otodokesaki_jyuusho_1";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Ehide_otodokesaki_jyuusho_2";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Ehide_otodokesaki_denwa_bangou";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Ehide_goirainusi_meishou1";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Ehide_goirainusi_jyuusho_1";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Ehide_goirainusi_jyuusho_2";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Ehide_goirainusi_denwa_bangou";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data12";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data13";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data14";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data15";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data16";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data17";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data18";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data19";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data20";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data21";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data22";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data23";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data24";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data25";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data26";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data27";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data28";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data29";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "Data31";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "rakuda_csv_flag";
	$tdatavw_Ehiden_kaitori[".allSearchFields"][] = "EOC_COURIER_CHECK";
	

$tdatavw_Ehiden_kaitori[".googleLikeFields"] = array();
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "ecc_id";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "concat(Eoc.ecc_id,\"/\",Eoc.ecc_seq)";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data1";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data2";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data3";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data4";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data5";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Ehide_haitatu_hi";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data6";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data7";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data8";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Ehide_haitatu_sitei_jikantai";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Ehide_shuka_kosuu";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data9";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data10";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data11";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data32";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Ehide_otodokesaki_meisho_1";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Ehide_otodokesaki_jyuusho_1";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Ehide_otodokesaki_jyuusho_2";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Ehide_otodokesaki_denwa_bangou";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Ehide_goirainusi_meishou1";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Ehide_goirainusi_jyuusho_1";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Ehide_goirainusi_jyuusho_2";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Ehide_goirainusi_denwa_bangou";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data12";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data13";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data14";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data15";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data16";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data17";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data18";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data19";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data20";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data21";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data22";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data23";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data24";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data25";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data26";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data27";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data28";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data29";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "Data31";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "rakuda_csv_flag";
$tdatavw_Ehiden_kaitori[".googleLikeFields"][] = "EOC_COURIER_CHECK";


$tdatavw_Ehiden_kaitori[".advSearchFields"] = array();
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "ecc_id";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "concat(Eoc.ecc_id,\"/\",Eoc.ecc_seq)";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data1";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data2";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data3";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data4";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data5";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Ehide_haitatu_hi";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data6";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data7";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data8";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Ehide_haitatu_sitei_jikantai";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Ehide_shuka_kosuu";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data9";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data10";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data11";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data32";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Ehide_otodokesaki_meisho_1";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Ehide_otodokesaki_jyuusho_1";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Ehide_otodokesaki_jyuusho_2";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Ehide_otodokesaki_denwa_bangou";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Ehide_goirainusi_meishou1";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Ehide_goirainusi_jyuusho_1";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Ehide_goirainusi_jyuusho_2";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Ehide_goirainusi_denwa_bangou";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data12";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data13";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data14";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data15";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data16";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data17";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data18";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data19";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data20";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data21";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data22";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data23";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data24";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data25";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data26";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data27";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data28";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data29";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "Data31";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "rakuda_csv_flag";
$tdatavw_Ehiden_kaitori[".advSearchFields"][] = "EOC_COURIER_CHECK";

$tdatavw_Ehiden_kaitori[".tableType"] = "list";

$tdatavw_Ehiden_kaitori[".printerPageOrientation"] = 0;
$tdatavw_Ehiden_kaitori[".nPrinterPageScale"] = 100;

$tdatavw_Ehiden_kaitori[".nPrinterSplitRecords"] = 40;

$tdatavw_Ehiden_kaitori[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_Ehiden_kaitori[".geocodingEnabled"] = false;





$tdatavw_Ehiden_kaitori[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavw_Ehiden_kaitori[".pageSize"] = 20;

$tdatavw_Ehiden_kaitori[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_Ehiden_kaitori[".strOrderBy"] = $tstrOrderBy;

$tdatavw_Ehiden_kaitori[".orderindexes"] = array();

$tdatavw_Ehiden_kaitori[".sqlHead"] = "SELECT ecc_id,  `concat(Eoc.ecc_id,\"/\",Eoc.ecc_seq)`,  Data1,  Data2,  Data3,  Data4,  Data5,  Ehide_haitatu_hi,  Data6,  Data7,  Data8,  Ehide_haitatu_sitei_jikantai,  Ehide_shuka_kosuu,  Data9,  Data10,  Data11,  Data32,  Ehide_otodokesaki_meisho_1,  Ehide_otodokesaki_jyuusho_1,  Ehide_otodokesaki_jyuusho_2,  Ehide_otodokesaki_denwa_bangou,  Ehide_goirainusi_meishou1,  Ehide_goirainusi_jyuusho_1,  Ehide_goirainusi_jyuusho_2,  Ehide_goirainusi_denwa_bangou,  Data12,  Data13,  Data14,  Data15,  Data16,  Data17,  Data18,  Data19,  Data20,  Data21,  Data22,  Data23,  Data24,  Data25,  Data26,  Data27,  Data28,  Data29,  Data31,  rakuda_csv_flag,  EOC_COURIER_CHECK";
$tdatavw_Ehiden_kaitori[".sqlFrom"] = "FROM vw_Ehiden_kaitori";
$tdatavw_Ehiden_kaitori[".sqlWhereExpr"] = "(EOC_COURIER_CHECK ='佐川')";
$tdatavw_Ehiden_kaitori[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_Ehiden_kaitori[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_Ehiden_kaitori[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_Ehiden_kaitori[".highlightSearchResults"] = true;

$tableKeysvw_Ehiden_kaitori = array();
$tableKeysvw_Ehiden_kaitori[] = "ecc_id";
$tdatavw_Ehiden_kaitori[".Keys"] = $tableKeysvw_Ehiden_kaitori;

$tdatavw_Ehiden_kaitori[".listFields"] = array();
$tdatavw_Ehiden_kaitori[".listFields"][] = "EOC_COURIER_CHECK";
$tdatavw_Ehiden_kaitori[".listFields"][] = "ecc_id";
$tdatavw_Ehiden_kaitori[".listFields"][] = "concat(Eoc.ecc_id,\"/\",Eoc.ecc_seq)";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data1";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data2";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data3";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data4";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data5";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Ehide_haitatu_hi";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data6";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data7";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data8";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Ehide_haitatu_sitei_jikantai";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Ehide_shuka_kosuu";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data9";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data10";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data11";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data32";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Ehide_otodokesaki_meisho_1";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Ehide_otodokesaki_jyuusho_1";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Ehide_otodokesaki_jyuusho_2";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Ehide_otodokesaki_denwa_bangou";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Ehide_goirainusi_meishou1";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Ehide_goirainusi_jyuusho_1";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Ehide_goirainusi_jyuusho_2";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Ehide_goirainusi_denwa_bangou";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data12";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data13";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data14";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data15";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data16";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data17";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data18";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data19";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data20";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data21";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data22";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data23";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data24";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data25";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data26";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data27";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data28";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data29";
$tdatavw_Ehiden_kaitori[".listFields"][] = "Data31";
$tdatavw_Ehiden_kaitori[".listFields"][] = "rakuda_csv_flag";

$tdatavw_Ehiden_kaitori[".hideMobileList"] = array();


$tdatavw_Ehiden_kaitori[".viewFields"] = array();

$tdatavw_Ehiden_kaitori[".addFields"] = array();

$tdatavw_Ehiden_kaitori[".masterListFields"] = array();
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "ecc_id";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "concat(Eoc.ecc_id,\"/\",Eoc.ecc_seq)";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data1";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data2";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data3";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data4";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data5";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Ehide_haitatu_hi";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data6";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data7";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data8";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Ehide_haitatu_sitei_jikantai";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Ehide_shuka_kosuu";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data9";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data10";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data11";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data32";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Ehide_otodokesaki_meisho_1";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Ehide_otodokesaki_jyuusho_1";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Ehide_otodokesaki_jyuusho_2";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Ehide_otodokesaki_denwa_bangou";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Ehide_goirainusi_meishou1";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Ehide_goirainusi_jyuusho_1";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Ehide_goirainusi_jyuusho_2";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Ehide_goirainusi_denwa_bangou";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data12";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data13";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data14";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data15";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data16";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data17";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data18";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data19";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data20";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data21";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data22";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data23";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data24";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data25";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data26";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data27";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data28";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data29";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "Data31";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "rakuda_csv_flag";
$tdatavw_Ehiden_kaitori[".masterListFields"][] = "EOC_COURIER_CHECK";

$tdatavw_Ehiden_kaitori[".inlineAddFields"] = array();

$tdatavw_Ehiden_kaitori[".editFields"] = array();

$tdatavw_Ehiden_kaitori[".inlineEditFields"] = array();

$tdatavw_Ehiden_kaitori[".updateSelectedFields"] = array();


$tdatavw_Ehiden_kaitori[".exportFields"] = array();
$tdatavw_Ehiden_kaitori[".exportFields"][] = "concat(Eoc.ecc_id,\"/\",Eoc.ecc_seq)";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data1";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data2";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data3";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data4";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data5";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Ehide_haitatu_hi";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data6";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data7";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data8";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Ehide_haitatu_sitei_jikantai";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Ehide_shuka_kosuu";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data9";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data10";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data11";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data32";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Ehide_otodokesaki_meisho_1";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Ehide_otodokesaki_jyuusho_1";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Ehide_otodokesaki_jyuusho_2";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Ehide_otodokesaki_denwa_bangou";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Ehide_goirainusi_meishou1";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Ehide_goirainusi_jyuusho_1";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Ehide_goirainusi_jyuusho_2";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Ehide_goirainusi_denwa_bangou";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data12";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data13";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data14";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data15";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data16";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data17";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data18";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data19";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data20";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data21";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data22";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data23";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data24";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data25";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data26";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data27";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data28";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data29";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "Data31";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "rakuda_csv_flag";
$tdatavw_Ehiden_kaitori[".exportFields"][] = "EOC_COURIER_CHECK";

$tdatavw_Ehiden_kaitori[".importFields"] = array();
$tdatavw_Ehiden_kaitori[".importFields"][] = "ecc_id";
$tdatavw_Ehiden_kaitori[".importFields"][] = "concat(Eoc.ecc_id,\"/\",Eoc.ecc_seq)";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data1";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data2";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data3";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data4";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data5";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Ehide_haitatu_hi";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data6";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data7";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data8";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Ehide_haitatu_sitei_jikantai";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Ehide_shuka_kosuu";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data9";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data10";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data11";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data32";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Ehide_otodokesaki_meisho_1";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Ehide_otodokesaki_jyuusho_1";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Ehide_otodokesaki_jyuusho_2";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Ehide_otodokesaki_denwa_bangou";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Ehide_goirainusi_meishou1";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Ehide_goirainusi_jyuusho_1";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Ehide_goirainusi_jyuusho_2";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Ehide_goirainusi_denwa_bangou";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data12";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data13";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data14";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data15";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data16";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data17";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data18";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data19";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data20";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data21";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data22";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data23";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data24";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data25";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data26";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data27";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data28";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data29";
$tdatavw_Ehiden_kaitori[".importFields"][] = "Data31";
$tdatavw_Ehiden_kaitori[".importFields"][] = "rakuda_csv_flag";
$tdatavw_Ehiden_kaitori[".importFields"][] = "EOC_COURIER_CHECK";

$tdatavw_Ehiden_kaitori[".printFields"] = array();
$tdatavw_Ehiden_kaitori[".printFields"][] = "ecc_id";
$tdatavw_Ehiden_kaitori[".printFields"][] = "concat(Eoc.ecc_id,\"/\",Eoc.ecc_seq)";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data1";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data2";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data3";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data4";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data5";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Ehide_haitatu_hi";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data6";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data7";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data8";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Ehide_haitatu_sitei_jikantai";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Ehide_shuka_kosuu";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data9";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data10";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data11";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data32";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Ehide_otodokesaki_meisho_1";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Ehide_otodokesaki_jyuusho_1";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Ehide_otodokesaki_jyuusho_2";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Ehide_otodokesaki_denwa_bangou";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Ehide_goirainusi_meishou1";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Ehide_goirainusi_jyuusho_1";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Ehide_goirainusi_jyuusho_2";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Ehide_goirainusi_denwa_bangou";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data12";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data13";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data14";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data15";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data16";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data17";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data18";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data19";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data20";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data21";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data22";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data23";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data24";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data25";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data26";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data27";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data28";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data29";
$tdatavw_Ehiden_kaitori[".printFields"][] = "Data31";
$tdatavw_Ehiden_kaitori[".printFields"][] = "rakuda_csv_flag";
$tdatavw_Ehiden_kaitori[".printFields"][] = "EOC_COURIER_CHECK";

//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

	
		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ecc_id";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["ecc_id"] = $fdata;
//	concat(Eoc.ecc_id,"/",Eoc.ecc_seq)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "concat(Eoc.ecc_id,\"/\",Eoc.ecc_seq)";
	$fdata["GoodName"] = "concat_Eoc_ecc_id_____Eoc_ecc_seq_";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","concat_Eoc_ecc_id_____Eoc_ecc_seq_");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "concat(Eoc.ecc_id,\"/\",Eoc.ecc_seq)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`concat(Eoc.ecc_id,\"/\",Eoc.ecc_seq)`";

	
	
				$fdata["FieldPermissions"] = true;

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
			$edata["EditParams"].= " maxlength=44";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavw_Ehiden_kaitori["concat(Eoc.ecc_id,\"/\",Eoc.ecc_seq)"] = $fdata;
//	Data1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Data1";
	$fdata["GoodName"] = "Data1";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data1";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data1"] = $fdata;
//	Data2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Data2";
	$fdata["GoodName"] = "Data2";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data2");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data2";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data2"] = $fdata;
//	Data3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Data3";
	$fdata["GoodName"] = "Data3";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data3");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data3";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data3"] = $fdata;
//	Data4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Data4";
	$fdata["GoodName"] = "Data4";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data4");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data4";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data4"] = $fdata;
//	Data5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Data5";
	$fdata["GoodName"] = "Data5";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data5");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data5";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data5"] = $fdata;
//	Ehide_haitatu_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Ehide_haitatu_hi";
	$fdata["GoodName"] = "Ehide_haitatu_hi";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Ehide_haitatu_hi");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Ehide_haitatu_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ehide_haitatu_hi";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Ehide_haitatu_hi"] = $fdata;
//	Data6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Data6";
	$fdata["GoodName"] = "Data6";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data6");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data6";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data6"] = $fdata;
//	Data7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Data7";
	$fdata["GoodName"] = "Data7";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data7");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data7";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data7"] = $fdata;
//	Data8
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Data8";
	$fdata["GoodName"] = "Data8";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data8");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data8";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data8";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data8"] = $fdata;
//	Ehide_haitatu_sitei_jikantai
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Ehide_haitatu_sitei_jikantai";
	$fdata["GoodName"] = "Ehide_haitatu_sitei_jikantai";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Ehide_haitatu_sitei_jikantai");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Ehide_haitatu_sitei_jikantai";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ehide_haitatu_sitei_jikantai";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Ehide_haitatu_sitei_jikantai"] = $fdata;
//	Ehide_shuka_kosuu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Ehide_shuka_kosuu";
	$fdata["GoodName"] = "Ehide_shuka_kosuu";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Ehide_shuka_kosuu");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Ehide_shuka_kosuu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ehide_shuka_kosuu";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Ehide_shuka_kosuu"] = $fdata;
//	Data9
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Data9";
	$fdata["GoodName"] = "Data9";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data9");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data9";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data9";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data9"] = $fdata;
//	Data10
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Data10";
	$fdata["GoodName"] = "Data10";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data10");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data10";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data10";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data10"] = $fdata;
//	Data11
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Data11";
	$fdata["GoodName"] = "Data11";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data11");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data11";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data11";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data11"] = $fdata;
//	Data32
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Data32";
	$fdata["GoodName"] = "Data32";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data32");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data32";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data32";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data32"] = $fdata;
//	Ehide_otodokesaki_meisho_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Ehide_otodokesaki_meisho_1";
	$fdata["GoodName"] = "Ehide_otodokesaki_meisho_1";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Ehide_otodokesaki_meisho_1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Ehide_otodokesaki_meisho_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ehide_otodokesaki_meisho_1";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Ehide_otodokesaki_meisho_1"] = $fdata;
//	Ehide_otodokesaki_jyuusho_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Ehide_otodokesaki_jyuusho_1";
	$fdata["GoodName"] = "Ehide_otodokesaki_jyuusho_1";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Ehide_otodokesaki_jyuusho_1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Ehide_otodokesaki_jyuusho_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ehide_otodokesaki_jyuusho_1";

	
	
				$fdata["FieldPermissions"] = true;

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
			$edata["EditParams"].= " maxlength=256";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavw_Ehiden_kaitori["Ehide_otodokesaki_jyuusho_1"] = $fdata;
//	Ehide_otodokesaki_jyuusho_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Ehide_otodokesaki_jyuusho_2";
	$fdata["GoodName"] = "Ehide_otodokesaki_jyuusho_2";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Ehide_otodokesaki_jyuusho_2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Ehide_otodokesaki_jyuusho_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ehide_otodokesaki_jyuusho_2";

	
	
				$fdata["FieldPermissions"] = true;

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
			$edata["EditParams"].= " maxlength=256";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatavw_Ehiden_kaitori["Ehide_otodokesaki_jyuusho_2"] = $fdata;
//	Ehide_otodokesaki_denwa_bangou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Ehide_otodokesaki_denwa_bangou";
	$fdata["GoodName"] = "Ehide_otodokesaki_denwa_bangou";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Ehide_otodokesaki_denwa_bangou");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Ehide_otodokesaki_denwa_bangou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ehide_otodokesaki_denwa_bangou";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Ehide_otodokesaki_denwa_bangou"] = $fdata;
//	Ehide_goirainusi_meishou1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Ehide_goirainusi_meishou1";
	$fdata["GoodName"] = "Ehide_goirainusi_meishou1";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Ehide_goirainusi_meishou1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Ehide_goirainusi_meishou1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ehide_goirainusi_meishou1";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Ehide_goirainusi_meishou1"] = $fdata;
//	Ehide_goirainusi_jyuusho_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Ehide_goirainusi_jyuusho_1";
	$fdata["GoodName"] = "Ehide_goirainusi_jyuusho_1";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Ehide_goirainusi_jyuusho_1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Ehide_goirainusi_jyuusho_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ehide_goirainusi_jyuusho_1";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Ehide_goirainusi_jyuusho_1"] = $fdata;
//	Ehide_goirainusi_jyuusho_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Ehide_goirainusi_jyuusho_2";
	$fdata["GoodName"] = "Ehide_goirainusi_jyuusho_2";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Ehide_goirainusi_jyuusho_2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Ehide_goirainusi_jyuusho_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ehide_goirainusi_jyuusho_2";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Ehide_goirainusi_jyuusho_2"] = $fdata;
//	Ehide_goirainusi_denwa_bangou
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Ehide_goirainusi_denwa_bangou";
	$fdata["GoodName"] = "Ehide_goirainusi_denwa_bangou";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Ehide_goirainusi_denwa_bangou");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Ehide_goirainusi_denwa_bangou";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ehide_goirainusi_denwa_bangou";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Ehide_goirainusi_denwa_bangou"] = $fdata;
//	Data12
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Data12";
	$fdata["GoodName"] = "Data12";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data12");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data12";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data12";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data12"] = $fdata;
//	Data13
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Data13";
	$fdata["GoodName"] = "Data13";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data13");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data13";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data13";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data13"] = $fdata;
//	Data14
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Data14";
	$fdata["GoodName"] = "Data14";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data14");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data14";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data14";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data14"] = $fdata;
//	Data15
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Data15";
	$fdata["GoodName"] = "Data15";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data15");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data15";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data15";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data15"] = $fdata;
//	Data16
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Data16";
	$fdata["GoodName"] = "Data16";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data16");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data16";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data16";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data16"] = $fdata;
//	Data17
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Data17";
	$fdata["GoodName"] = "Data17";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data17");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data17";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data17";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data17"] = $fdata;
//	Data18
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Data18";
	$fdata["GoodName"] = "Data18";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data18");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data18";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data18";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data18"] = $fdata;
//	Data19
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "Data19";
	$fdata["GoodName"] = "Data19";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data19");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data19";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data19";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data19"] = $fdata;
//	Data20
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Data20";
	$fdata["GoodName"] = "Data20";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data20");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data20";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data20";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data20"] = $fdata;
//	Data21
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Data21";
	$fdata["GoodName"] = "Data21";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data21");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data21";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data21";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data21"] = $fdata;
//	Data22
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Data22";
	$fdata["GoodName"] = "Data22";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data22");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data22";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data22";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data22"] = $fdata;
//	Data23
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Data23";
	$fdata["GoodName"] = "Data23";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data23");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data23";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data23";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data23"] = $fdata;
//	Data24
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "Data24";
	$fdata["GoodName"] = "Data24";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data24");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data24";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data24";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data24"] = $fdata;
//	Data25
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "Data25";
	$fdata["GoodName"] = "Data25";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data25");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data25";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data25";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data25"] = $fdata;
//	Data26
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "Data26";
	$fdata["GoodName"] = "Data26";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data26");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data26";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data26";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data26"] = $fdata;
//	Data27
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "Data27";
	$fdata["GoodName"] = "Data27";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data27");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data27";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data27";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data27"] = $fdata;
//	Data28
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "Data28";
	$fdata["GoodName"] = "Data28";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data28");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data28";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data28";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data28"] = $fdata;
//	Data29
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "Data29";
	$fdata["GoodName"] = "Data29";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data29");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data29";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data29";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data29"] = $fdata;
//	Data31
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "Data31";
	$fdata["GoodName"] = "Data31";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","Data31");
	$fdata["FieldType"] = 13;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Data31";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data31";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["Data31"] = $fdata;
//	rakuda_csv_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "rakuda_csv_flag";
	$fdata["GoodName"] = "rakuda_csv_flag";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","rakuda_csv_flag");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rakuda_csv_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rakuda_csv_flag";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatavw_Ehiden_kaitori["rakuda_csv_flag"] = $fdata;
//	EOC_COURIER_CHECK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "EOC_COURIER_CHECK";
	$fdata["GoodName"] = "EOC_COURIER_CHECK";
	$fdata["ownerTable"] = "vw_Ehiden_kaitori";
	$fdata["Label"] = GetFieldLabel("vw_Ehiden_kaitori","EOC_COURIER_CHECK");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatavw_Ehiden_kaitori["EOC_COURIER_CHECK"] = $fdata;


$tables_data["vw_Ehiden_kaitori"]=&$tdatavw_Ehiden_kaitori;
$field_labels["vw_Ehiden_kaitori"] = &$fieldLabelsvw_Ehiden_kaitori;
$fieldToolTips["vw_Ehiden_kaitori"] = &$fieldToolTipsvw_Ehiden_kaitori;
$placeHolders["vw_Ehiden_kaitori"] = &$placeHoldersvw_Ehiden_kaitori;
$page_titles["vw_Ehiden_kaitori"] = &$pageTitlesvw_Ehiden_kaitori;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_Ehiden_kaitori"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_Ehiden_kaitori"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_Ehiden_kaitori()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ecc_id,  `concat(Eoc.ecc_id,\"/\",Eoc.ecc_seq)`,  Data1,  Data2,  Data3,  Data4,  Data5,  Ehide_haitatu_hi,  Data6,  Data7,  Data8,  Ehide_haitatu_sitei_jikantai,  Ehide_shuka_kosuu,  Data9,  Data10,  Data11,  Data32,  Ehide_otodokesaki_meisho_1,  Ehide_otodokesaki_jyuusho_1,  Ehide_otodokesaki_jyuusho_2,  Ehide_otodokesaki_denwa_bangou,  Ehide_goirainusi_meishou1,  Ehide_goirainusi_jyuusho_1,  Ehide_goirainusi_jyuusho_2,  Ehide_goirainusi_denwa_bangou,  Data12,  Data13,  Data14,  Data15,  Data16,  Data17,  Data18,  Data19,  Data20,  Data21,  Data22,  Data23,  Data24,  Data25,  Data26,  Data27,  Data28,  Data29,  Data31,  rakuda_csv_flag,  EOC_COURIER_CHECK";
$proto0["m_strFrom"] = "FROM vw_Ehiden_kaitori";
$proto0["m_strWhere"] = "(EOC_COURIER_CHECK ='佐川')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "EOC_COURIER_CHECK ='佐川'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "EOC_COURIER_CHECK",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "='佐川'";
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
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto6["m_sql"] = "ecc_id";
$proto6["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "concat(Eoc.ecc_id,\"/\",Eoc.ecc_seq)",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto8["m_sql"] = "`concat(Eoc.ecc_id,\"/\",Eoc.ecc_seq)`";
$proto8["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Data1",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto10["m_sql"] = "Data1";
$proto10["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Data2",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto12["m_sql"] = "Data2";
$proto12["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Data3",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto14["m_sql"] = "Data3";
$proto14["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Data4",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto16["m_sql"] = "Data4";
$proto16["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Data5",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto18["m_sql"] = "Data5";
$proto18["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Ehide_haitatu_hi",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto20["m_sql"] = "Ehide_haitatu_hi";
$proto20["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Data6",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto22["m_sql"] = "Data6";
$proto22["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Data7",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto24["m_sql"] = "Data7";
$proto24["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Data8",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto26["m_sql"] = "Data8";
$proto26["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Ehide_haitatu_sitei_jikantai",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto28["m_sql"] = "Ehide_haitatu_sitei_jikantai";
$proto28["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Ehide_shuka_kosuu",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto30["m_sql"] = "Ehide_shuka_kosuu";
$proto30["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Data9",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto32["m_sql"] = "Data9";
$proto32["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Data10",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto34["m_sql"] = "Data10";
$proto34["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Data11",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto36["m_sql"] = "Data11";
$proto36["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Data32",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto38["m_sql"] = "Data32";
$proto38["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Ehide_otodokesaki_meisho_1",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto40["m_sql"] = "Ehide_otodokesaki_meisho_1";
$proto40["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Ehide_otodokesaki_jyuusho_1",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto42["m_sql"] = "Ehide_otodokesaki_jyuusho_1";
$proto42["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Ehide_otodokesaki_jyuusho_2",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto44["m_sql"] = "Ehide_otodokesaki_jyuusho_2";
$proto44["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Ehide_otodokesaki_denwa_bangou",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto46["m_sql"] = "Ehide_otodokesaki_denwa_bangou";
$proto46["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Ehide_goirainusi_meishou1",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto48["m_sql"] = "Ehide_goirainusi_meishou1";
$proto48["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Ehide_goirainusi_jyuusho_1",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto50["m_sql"] = "Ehide_goirainusi_jyuusho_1";
$proto50["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Ehide_goirainusi_jyuusho_2",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto52["m_sql"] = "Ehide_goirainusi_jyuusho_2";
$proto52["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Ehide_goirainusi_denwa_bangou",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto54["m_sql"] = "Ehide_goirainusi_denwa_bangou";
$proto54["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Data12",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto56["m_sql"] = "Data12";
$proto56["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Data13",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto58["m_sql"] = "Data13";
$proto58["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Data14",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto60["m_sql"] = "Data14";
$proto60["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Data15",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto62["m_sql"] = "Data15";
$proto62["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Data16",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto64["m_sql"] = "Data16";
$proto64["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Data17",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto66["m_sql"] = "Data17";
$proto66["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Data18",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto68["m_sql"] = "Data18";
$proto68["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Data19",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto70["m_sql"] = "Data19";
$proto70["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Data20",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto72["m_sql"] = "Data20";
$proto72["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Data21",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto74["m_sql"] = "Data21";
$proto74["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Data22",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto76["m_sql"] = "Data22";
$proto76["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Data23",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto78["m_sql"] = "Data23";
$proto78["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "Data24",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto80["m_sql"] = "Data24";
$proto80["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Data25",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto82["m_sql"] = "Data25";
$proto82["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "Data26",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto84["m_sql"] = "Data26";
$proto84["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "Data27",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto86["m_sql"] = "Data27";
$proto86["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "Data28",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto88["m_sql"] = "Data28";
$proto88["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "Data29",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto90["m_sql"] = "Data29";
$proto90["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "Data31",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto92["m_sql"] = "Data31";
$proto92["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "rakuda_csv_flag",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto94["m_sql"] = "rakuda_csv_flag";
$proto94["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "EOC_COURIER_CHECK",
	"m_strTable" => "vw_Ehiden_kaitori",
	"m_srcTableName" => "vw_Ehiden_kaitori"
));

$proto96["m_sql"] = "EOC_COURIER_CHECK";
$proto96["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto98=array();
$proto98["m_link"] = "SQLL_MAIN";
			$proto99=array();
$proto99["m_strName"] = "vw_Ehiden_kaitori";
$proto99["m_srcTableName"] = "vw_Ehiden_kaitori";
$proto99["m_columns"] = array();
$proto99["m_columns"][] = "ecc_id";
$proto99["m_columns"][] = "concat(Eoc.ecc_id,\"/\",Eoc.ecc_seq)";
$proto99["m_columns"][] = "Data1";
$proto99["m_columns"][] = "Data2";
$proto99["m_columns"][] = "Data3";
$proto99["m_columns"][] = "Data4";
$proto99["m_columns"][] = "Data5";
$proto99["m_columns"][] = "Ehide_haitatu_hi";
$proto99["m_columns"][] = "Data6";
$proto99["m_columns"][] = "Data7";
$proto99["m_columns"][] = "Data8";
$proto99["m_columns"][] = "Ehide_haitatu_sitei_jikantai";
$proto99["m_columns"][] = "Ehide_shuka_kosuu";
$proto99["m_columns"][] = "Data9";
$proto99["m_columns"][] = "Data10";
$proto99["m_columns"][] = "Data11";
$proto99["m_columns"][] = "Data32";
$proto99["m_columns"][] = "Ehide_otodokesaki_meisho_1";
$proto99["m_columns"][] = "Ehide_otodokesaki_jyuusho_1";
$proto99["m_columns"][] = "Ehide_otodokesaki_jyuusho_2";
$proto99["m_columns"][] = "Ehide_otodokesaki_denwa_bangou";
$proto99["m_columns"][] = "Ehide_goirainusi_meishou1";
$proto99["m_columns"][] = "Ehide_goirainusi_jyuusho_1";
$proto99["m_columns"][] = "Ehide_goirainusi_jyuusho_2";
$proto99["m_columns"][] = "Ehide_goirainusi_denwa_bangou";
$proto99["m_columns"][] = "Data12";
$proto99["m_columns"][] = "Data13";
$proto99["m_columns"][] = "Data14";
$proto99["m_columns"][] = "Data15";
$proto99["m_columns"][] = "Data16";
$proto99["m_columns"][] = "Data17";
$proto99["m_columns"][] = "Data18";
$proto99["m_columns"][] = "Data19";
$proto99["m_columns"][] = "Data20";
$proto99["m_columns"][] = "Data21";
$proto99["m_columns"][] = "Data22";
$proto99["m_columns"][] = "Data23";
$proto99["m_columns"][] = "Data24";
$proto99["m_columns"][] = "Data25";
$proto99["m_columns"][] = "Data26";
$proto99["m_columns"][] = "Data27";
$proto99["m_columns"][] = "Data28";
$proto99["m_columns"][] = "Data29";
$proto99["m_columns"][] = "Data31";
$proto99["m_columns"][] = "rakuda_csv_flag";
$proto99["m_columns"][] = "EOC_COURIER_CHECK";
$obj = new SQLTable($proto99);

$proto98["m_table"] = $obj;
$proto98["m_sql"] = "vw_Ehiden_kaitori";
$proto98["m_alias"] = "";
$proto98["m_srcTableName"] = "vw_Ehiden_kaitori";
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
$proto0["m_srcTableName"]="vw_Ehiden_kaitori";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_Ehiden_kaitori = createSqlQuery_vw_Ehiden_kaitori();


	
		;

																																														

$tdatavw_Ehiden_kaitori[".sqlquery"] = $queryData_vw_Ehiden_kaitori;

include_once(getabspath("include/vw_Ehiden_kaitori_events.php"));
$tableEvents["vw_Ehiden_kaitori"] = new eventclass_vw_Ehiden_kaitori;
$tdatavw_Ehiden_kaitori[".hasEvents"] = true;

?>