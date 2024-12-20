<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_arari = array();
	$tdatavw_arari[".truncateText"] = true;
	$tdatavw_arari[".NumberOfChars"] = 80;
	$tdatavw_arari[".ShortName"] = "vw_arari";
	$tdatavw_arari[".OwnerID"] = "";
	$tdatavw_arari[".OriginalTable"] = "vw_arari";

//	field labels
$fieldLabelsvw_arari = array();
$fieldToolTipsvw_arari = array();
$pageTitlesvw_arari = array();
$placeHoldersvw_arari = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_arari["Japanese"] = array();
	$fieldToolTipsvw_arari["Japanese"] = array();
	$placeHoldersvw_arari["Japanese"] = array();
	$pageTitlesvw_arari["Japanese"] = array();
	$fieldLabelsvw_arari["Japanese"]["kanryou_henbi"] = "完了変更日";
	$fieldToolTipsvw_arari["Japanese"]["kanryou_henbi"] = "";
	$placeHoldersvw_arari["Japanese"]["kanryou_henbi"] = "";
	$fieldLabelsvw_arari["Japanese"]["watch_price"] = "時計　買取額";
	$fieldToolTipsvw_arari["Japanese"]["watch_price"] = "";
	$placeHoldersvw_arari["Japanese"]["watch_price"] = "";
	$fieldLabelsvw_arari["Japanese"]["watch_nyuukin_price"] = "時計　入金額";
	$fieldToolTipsvw_arari["Japanese"]["watch_nyuukin_price"] = "";
	$placeHoldersvw_arari["Japanese"]["watch_nyuukin_price"] = "";
	$fieldLabelsvw_arari["Japanese"]["dia_price"] = "ダイヤ　買取額";
	$fieldToolTipsvw_arari["Japanese"]["dia_price"] = "";
	$placeHoldersvw_arari["Japanese"]["dia_price"] = "";
	$fieldLabelsvw_arari["Japanese"]["dia_nyuukin_price"] = "ダイヤ　入金額";
	$fieldToolTipsvw_arari["Japanese"]["dia_nyuukin_price"] = "";
	$placeHoldersvw_arari["Japanese"]["dia_nyuukin_price"] = "";
	$fieldLabelsvw_arari["Japanese"]["jewelry_price"] = "宝飾　買取額";
	$fieldToolTipsvw_arari["Japanese"]["jewelry_price"] = "";
	$placeHoldersvw_arari["Japanese"]["jewelry_price"] = "";
	$fieldLabelsvw_arari["Japanese"]["jewelry_nyuukin_price"] = "宝飾　入金額";
	$fieldToolTipsvw_arari["Japanese"]["jewelry_nyuukin_price"] = "";
	$placeHoldersvw_arari["Japanese"]["jewelry_nyuukin_price"] = "";
	$fieldLabelsvw_arari["Japanese"]["brand_price"] = "服飾　買取額";
	$fieldToolTipsvw_arari["Japanese"]["brand_price"] = "";
	$placeHoldersvw_arari["Japanese"]["brand_price"] = "";
	$fieldLabelsvw_arari["Japanese"]["brand_nyuukin_price"] = "服飾　入金額";
	$fieldToolTipsvw_arari["Japanese"]["brand_nyuukin_price"] = "";
	$placeHoldersvw_arari["Japanese"]["brand_nyuukin_price"] = "";
	$fieldLabelsvw_arari["Japanese"]["metal_price"] = "貴金属　買取額";
	$fieldToolTipsvw_arari["Japanese"]["metal_price"] = "";
	$placeHoldersvw_arari["Japanese"]["metal_price"] = "";
	$fieldLabelsvw_arari["Japanese"]["metal_nyuukin_price"] = "貴金属　入金額";
	$fieldToolTipsvw_arari["Japanese"]["metal_nyuukin_price"] = "";
	$placeHoldersvw_arari["Japanese"]["metal_nyuukin_price"] = "";
	$fieldLabelsvw_arari["Japanese"]["watch_arari"] = "時計　粗利";
	$fieldToolTipsvw_arari["Japanese"]["watch_arari"] = "";
	$placeHoldersvw_arari["Japanese"]["watch_arari"] = "";
	$fieldLabelsvw_arari["Japanese"]["dia_arari"] = "ダイヤ　粗利";
	$fieldToolTipsvw_arari["Japanese"]["dia_arari"] = "";
	$placeHoldersvw_arari["Japanese"]["dia_arari"] = "";
	$fieldLabelsvw_arari["Japanese"]["jewelry_arari"] = "宝飾　粗利";
	$fieldToolTipsvw_arari["Japanese"]["jewelry_arari"] = "";
	$placeHoldersvw_arari["Japanese"]["jewelry_arari"] = "";
	$fieldLabelsvw_arari["Japanese"]["brand_arari"] = "服飾　粗利";
	$fieldToolTipsvw_arari["Japanese"]["brand_arari"] = "";
	$placeHoldersvw_arari["Japanese"]["brand_arari"] = "";
	$fieldLabelsvw_arari["Japanese"]["metal_arari"] = "貴金属　粗利";
	$fieldToolTipsvw_arari["Japanese"]["metal_arari"] = "";
	$placeHoldersvw_arari["Japanese"]["metal_arari"] = "";
	$fieldLabelsvw_arari["Japanese"]["watch_genka"] = "時計　原価率";
	$fieldToolTipsvw_arari["Japanese"]["watch_genka"] = "";
	$placeHoldersvw_arari["Japanese"]["watch_genka"] = "";
	$fieldLabelsvw_arari["Japanese"]["dia_genka"] = "ダイヤ　原価率";
	$fieldToolTipsvw_arari["Japanese"]["dia_genka"] = "";
	$placeHoldersvw_arari["Japanese"]["dia_genka"] = "";
	$fieldLabelsvw_arari["Japanese"]["jewelry_genka"] = "宝飾 原価率";
	$fieldToolTipsvw_arari["Japanese"]["jewelry_genka"] = "";
	$placeHoldersvw_arari["Japanese"]["jewelry_genka"] = "";
	$fieldLabelsvw_arari["Japanese"]["brand_genka"] = "服飾　原価率";
	$fieldToolTipsvw_arari["Japanese"]["brand_genka"] = "";
	$placeHoldersvw_arari["Japanese"]["brand_genka"] = "";
	$fieldLabelsvw_arari["Japanese"]["metal_genka"] = "貴金属　原価率";
	$fieldToolTipsvw_arari["Japanese"]["metal_genka"] = "";
	$placeHoldersvw_arari["Japanese"]["metal_genka"] = "";
	$fieldLabelsvw_arari["Japanese"]["total_price"] = "買取総額";
	$fieldToolTipsvw_arari["Japanese"]["total_price"] = "";
	$placeHoldersvw_arari["Japanese"]["total_price"] = "";
	$fieldLabelsvw_arari["Japanese"]["total_nyuukin_price"] = "入金総額";
	$fieldToolTipsvw_arari["Japanese"]["total_nyuukin_price"] = "";
	$placeHoldersvw_arari["Japanese"]["total_nyuukin_price"] = "";
	$fieldLabelsvw_arari["Japanese"]["total_arari"] = "総合粗利";
	$fieldToolTipsvw_arari["Japanese"]["total_arari"] = "";
	$placeHoldersvw_arari["Japanese"]["total_arari"] = "";
	$fieldLabelsvw_arari["Japanese"]["total_genka"] = "総合原価率";
	$fieldToolTipsvw_arari["Japanese"]["total_genka"] = "";
	$placeHoldersvw_arari["Japanese"]["total_genka"] = "";
	if (count($fieldToolTipsvw_arari["Japanese"]))
		$tdatavw_arari[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_arari[""] = array();
	$fieldToolTipsvw_arari[""] = array();
	$placeHoldersvw_arari[""] = array();
	$pageTitlesvw_arari[""] = array();
	$fieldLabelsvw_arari[""]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipsvw_arari[""]["kanryou_henbi"] = "";
	$placeHoldersvw_arari[""]["kanryou_henbi"] = "";
	$fieldLabelsvw_arari[""]["watch_price"] = "Watch Price";
	$fieldToolTipsvw_arari[""]["watch_price"] = "";
	$placeHoldersvw_arari[""]["watch_price"] = "";
	$fieldLabelsvw_arari[""]["watch_nyuukin_price"] = "Watch Nyuukin Price";
	$fieldToolTipsvw_arari[""]["watch_nyuukin_price"] = "";
	$placeHoldersvw_arari[""]["watch_nyuukin_price"] = "";
	$fieldLabelsvw_arari[""]["dia_price"] = "Dia Price";
	$fieldToolTipsvw_arari[""]["dia_price"] = "";
	$placeHoldersvw_arari[""]["dia_price"] = "";
	$fieldLabelsvw_arari[""]["dia_nyuukin_price"] = "Dia Nyuukin Price";
	$fieldToolTipsvw_arari[""]["dia_nyuukin_price"] = "";
	$placeHoldersvw_arari[""]["dia_nyuukin_price"] = "";
	$fieldLabelsvw_arari[""]["jewelry_price"] = "Jewelry Price";
	$fieldToolTipsvw_arari[""]["jewelry_price"] = "";
	$placeHoldersvw_arari[""]["jewelry_price"] = "";
	$fieldLabelsvw_arari[""]["jewelry_nyuukin_price"] = "Jewelry Nyuukin Price";
	$fieldToolTipsvw_arari[""]["jewelry_nyuukin_price"] = "";
	$placeHoldersvw_arari[""]["jewelry_nyuukin_price"] = "";
	$fieldLabelsvw_arari[""]["brand_price"] = "Brand Price";
	$fieldToolTipsvw_arari[""]["brand_price"] = "";
	$placeHoldersvw_arari[""]["brand_price"] = "";
	$fieldLabelsvw_arari[""]["brand_nyuukin_price"] = "Brand Nyuukin Price";
	$fieldToolTipsvw_arari[""]["brand_nyuukin_price"] = "";
	$placeHoldersvw_arari[""]["brand_nyuukin_price"] = "";
	$fieldLabelsvw_arari[""]["metal_price"] = "Metal Price";
	$fieldToolTipsvw_arari[""]["metal_price"] = "";
	$placeHoldersvw_arari[""]["metal_price"] = "";
	$fieldLabelsvw_arari[""]["metal_nyuukin_price"] = "Metal Nyuukin Price";
	$fieldToolTipsvw_arari[""]["metal_nyuukin_price"] = "";
	$placeHoldersvw_arari[""]["metal_nyuukin_price"] = "";
	$fieldLabelsvw_arari[""]["watch_arari"] = "Watch Arari";
	$fieldToolTipsvw_arari[""]["watch_arari"] = "";
	$placeHoldersvw_arari[""]["watch_arari"] = "";
	$fieldLabelsvw_arari[""]["dia_arari"] = "Dia Arari";
	$fieldToolTipsvw_arari[""]["dia_arari"] = "";
	$placeHoldersvw_arari[""]["dia_arari"] = "";
	$fieldLabelsvw_arari[""]["jewelry_arari"] = "Jewelry Arari";
	$fieldToolTipsvw_arari[""]["jewelry_arari"] = "";
	$placeHoldersvw_arari[""]["jewelry_arari"] = "";
	$fieldLabelsvw_arari[""]["brand_arari"] = "Brand Arari";
	$fieldToolTipsvw_arari[""]["brand_arari"] = "";
	$placeHoldersvw_arari[""]["brand_arari"] = "";
	$fieldLabelsvw_arari[""]["metal_arari"] = "Metal Arari";
	$fieldToolTipsvw_arari[""]["metal_arari"] = "";
	$placeHoldersvw_arari[""]["metal_arari"] = "";
	$fieldLabelsvw_arari[""]["watch_genka"] = "Watch Genka";
	$fieldToolTipsvw_arari[""]["watch_genka"] = "";
	$placeHoldersvw_arari[""]["watch_genka"] = "";
	$fieldLabelsvw_arari[""]["dia_genka"] = "Dia Genka";
	$fieldToolTipsvw_arari[""]["dia_genka"] = "";
	$placeHoldersvw_arari[""]["dia_genka"] = "";
	$fieldLabelsvw_arari[""]["jewelry_genka"] = "Jewelry Genka";
	$fieldToolTipsvw_arari[""]["jewelry_genka"] = "";
	$placeHoldersvw_arari[""]["jewelry_genka"] = "";
	$fieldLabelsvw_arari[""]["brand_genka"] = "Brand Genka";
	$fieldToolTipsvw_arari[""]["brand_genka"] = "";
	$placeHoldersvw_arari[""]["brand_genka"] = "";
	$fieldLabelsvw_arari[""]["metal_genka"] = "Metal Genka";
	$fieldToolTipsvw_arari[""]["metal_genka"] = "";
	$placeHoldersvw_arari[""]["metal_genka"] = "";
	$fieldLabelsvw_arari[""]["total_price"] = "Total Price";
	$fieldToolTipsvw_arari[""]["total_price"] = "";
	$placeHoldersvw_arari[""]["total_price"] = "";
	$fieldLabelsvw_arari[""]["total_nyuukin_price"] = "Total Nyuukin Price";
	$fieldToolTipsvw_arari[""]["total_nyuukin_price"] = "";
	$placeHoldersvw_arari[""]["total_nyuukin_price"] = "";
	$fieldLabelsvw_arari[""]["total_arari"] = "Total Arari";
	$fieldToolTipsvw_arari[""]["total_arari"] = "";
	$placeHoldersvw_arari[""]["total_arari"] = "";
	$fieldLabelsvw_arari[""]["total_genka"] = "Total Genka";
	$fieldToolTipsvw_arari[""]["total_genka"] = "";
	$placeHoldersvw_arari[""]["total_genka"] = "";
	if (count($fieldToolTipsvw_arari[""]))
		$tdatavw_arari[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_arari["English"] = array();
	$fieldToolTipsvw_arari["English"] = array();
	$placeHoldersvw_arari["English"] = array();
	$pageTitlesvw_arari["English"] = array();
	$fieldLabelsvw_arari["English"]["kanryou_henbi"] = "Kanryou Henbi";
	$fieldToolTipsvw_arari["English"]["kanryou_henbi"] = "";
	$placeHoldersvw_arari["English"]["kanryou_henbi"] = "";
	$fieldLabelsvw_arari["English"]["watch_price"] = "Watch Price";
	$fieldToolTipsvw_arari["English"]["watch_price"] = "";
	$placeHoldersvw_arari["English"]["watch_price"] = "";
	$fieldLabelsvw_arari["English"]["watch_nyuukin_price"] = "Watch Nyuukin Price";
	$fieldToolTipsvw_arari["English"]["watch_nyuukin_price"] = "";
	$placeHoldersvw_arari["English"]["watch_nyuukin_price"] = "";
	$fieldLabelsvw_arari["English"]["dia_price"] = "Dia Price";
	$fieldToolTipsvw_arari["English"]["dia_price"] = "";
	$placeHoldersvw_arari["English"]["dia_price"] = "";
	$fieldLabelsvw_arari["English"]["dia_nyuukin_price"] = "Dia Nyuukin Price";
	$fieldToolTipsvw_arari["English"]["dia_nyuukin_price"] = "";
	$placeHoldersvw_arari["English"]["dia_nyuukin_price"] = "";
	$fieldLabelsvw_arari["English"]["jewelry_price"] = "Jewelry Price";
	$fieldToolTipsvw_arari["English"]["jewelry_price"] = "";
	$placeHoldersvw_arari["English"]["jewelry_price"] = "";
	$fieldLabelsvw_arari["English"]["jewelry_nyuukin_price"] = "Jewelry Nyuukin Price";
	$fieldToolTipsvw_arari["English"]["jewelry_nyuukin_price"] = "";
	$placeHoldersvw_arari["English"]["jewelry_nyuukin_price"] = "";
	$fieldLabelsvw_arari["English"]["brand_price"] = "Brand Price";
	$fieldToolTipsvw_arari["English"]["brand_price"] = "";
	$placeHoldersvw_arari["English"]["brand_price"] = "";
	$fieldLabelsvw_arari["English"]["brand_nyuukin_price"] = "Brand Nyuukin Price";
	$fieldToolTipsvw_arari["English"]["brand_nyuukin_price"] = "";
	$placeHoldersvw_arari["English"]["brand_nyuukin_price"] = "";
	$fieldLabelsvw_arari["English"]["metal_price"] = "Metal Price";
	$fieldToolTipsvw_arari["English"]["metal_price"] = "";
	$placeHoldersvw_arari["English"]["metal_price"] = "";
	$fieldLabelsvw_arari["English"]["metal_nyuukin_price"] = "Metal Nyuukin Price";
	$fieldToolTipsvw_arari["English"]["metal_nyuukin_price"] = "";
	$placeHoldersvw_arari["English"]["metal_nyuukin_price"] = "";
	$fieldLabelsvw_arari["English"]["watch_arari"] = "Watch Arari";
	$fieldToolTipsvw_arari["English"]["watch_arari"] = "";
	$placeHoldersvw_arari["English"]["watch_arari"] = "";
	$fieldLabelsvw_arari["English"]["dia_arari"] = "Dia Arari";
	$fieldToolTipsvw_arari["English"]["dia_arari"] = "";
	$placeHoldersvw_arari["English"]["dia_arari"] = "";
	$fieldLabelsvw_arari["English"]["jewelry_arari"] = "Jewelry Arari";
	$fieldToolTipsvw_arari["English"]["jewelry_arari"] = "";
	$placeHoldersvw_arari["English"]["jewelry_arari"] = "";
	$fieldLabelsvw_arari["English"]["brand_arari"] = "Brand Arari";
	$fieldToolTipsvw_arari["English"]["brand_arari"] = "";
	$placeHoldersvw_arari["English"]["brand_arari"] = "";
	$fieldLabelsvw_arari["English"]["metal_arari"] = "Metal Arari";
	$fieldToolTipsvw_arari["English"]["metal_arari"] = "";
	$placeHoldersvw_arari["English"]["metal_arari"] = "";
	$fieldLabelsvw_arari["English"]["watch_genka"] = "Watch Genka";
	$fieldToolTipsvw_arari["English"]["watch_genka"] = "";
	$placeHoldersvw_arari["English"]["watch_genka"] = "";
	$fieldLabelsvw_arari["English"]["dia_genka"] = "Dia Genka";
	$fieldToolTipsvw_arari["English"]["dia_genka"] = "";
	$placeHoldersvw_arari["English"]["dia_genka"] = "";
	$fieldLabelsvw_arari["English"]["jewelry_genka"] = "Jewelry Genka";
	$fieldToolTipsvw_arari["English"]["jewelry_genka"] = "";
	$placeHoldersvw_arari["English"]["jewelry_genka"] = "";
	$fieldLabelsvw_arari["English"]["brand_genka"] = "Brand Genka";
	$fieldToolTipsvw_arari["English"]["brand_genka"] = "";
	$placeHoldersvw_arari["English"]["brand_genka"] = "";
	$fieldLabelsvw_arari["English"]["metal_genka"] = "Metal Genka";
	$fieldToolTipsvw_arari["English"]["metal_genka"] = "";
	$placeHoldersvw_arari["English"]["metal_genka"] = "";
	$fieldLabelsvw_arari["English"]["total_price"] = "Total Price";
	$fieldToolTipsvw_arari["English"]["total_price"] = "";
	$placeHoldersvw_arari["English"]["total_price"] = "";
	$fieldLabelsvw_arari["English"]["total_nyuukin_price"] = "Total Nyuukin Price";
	$fieldToolTipsvw_arari["English"]["total_nyuukin_price"] = "";
	$placeHoldersvw_arari["English"]["total_nyuukin_price"] = "";
	$fieldLabelsvw_arari["English"]["total_arari"] = "Total Arari";
	$fieldToolTipsvw_arari["English"]["total_arari"] = "";
	$placeHoldersvw_arari["English"]["total_arari"] = "";
	$fieldLabelsvw_arari["English"]["total_genka"] = "Total Genka";
	$fieldToolTipsvw_arari["English"]["total_genka"] = "";
	$placeHoldersvw_arari["English"]["total_genka"] = "";
	if (count($fieldToolTipsvw_arari["English"]))
		$tdatavw_arari[".isUseToolTips"] = true;
}


	$tdatavw_arari[".NCSearch"] = true;



$tdatavw_arari[".shortTableName"] = "vw_arari";
$tdatavw_arari[".nSecOptions"] = 0;
$tdatavw_arari[".recsPerRowPrint"] = 1;
$tdatavw_arari[".mainTableOwnerID"] = "";
$tdatavw_arari[".moveNext"] = 1;
$tdatavw_arari[".entityType"] = 0;

$tdatavw_arari[".strOriginalTableName"] = "vw_arari";

	



$tdatavw_arari[".showAddInPopup"] = false;

$tdatavw_arari[".showEditInPopup"] = false;

$tdatavw_arari[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_arari[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_arari[".fieldsForRegister"] = array();

$tdatavw_arari[".listAjax"] = false;

	$tdatavw_arari[".audit"] = true;

	$tdatavw_arari[".locking"] = false;



$tdatavw_arari[".list"] = true;



$tdatavw_arari[".reorderRecordsByHeader"] = true;





$tdatavw_arari[".exportTo"] = true;



$tdatavw_arari[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_arari[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_arari[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_arari[".searchSaving"] = false;
//

$tdatavw_arari[".showSearchPanel"] = true;
		$tdatavw_arari[".flexibleSearch"] = true;

$tdatavw_arari[".isUseAjaxSuggest"] = true;

$tdatavw_arari[".rowHighlite"] = true;



																																																																																																																																																																																																																					

$tdatavw_arari[".ajaxCodeSnippetAdded"] = false;

$tdatavw_arari[".buttonsAdded"] = false;

$tdatavw_arari[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_arari[".isUseTimeForSearch"] = false;





$tdatavw_arari[".allSearchFields"] = array();
$tdatavw_arari[".filterFields"] = array();
$tdatavw_arari[".requiredSearchFields"] = array();

$tdatavw_arari[".allSearchFields"][] = "kanryou_henbi";
	$tdatavw_arari[".allSearchFields"][] = "watch_price";
	$tdatavw_arari[".allSearchFields"][] = "watch_nyuukin_price";
	$tdatavw_arari[".allSearchFields"][] = "watch_arari";
	$tdatavw_arari[".allSearchFields"][] = "watch_genka";
	$tdatavw_arari[".allSearchFields"][] = "dia_price";
	$tdatavw_arari[".allSearchFields"][] = "dia_nyuukin_price";
	$tdatavw_arari[".allSearchFields"][] = "dia_arari";
	$tdatavw_arari[".allSearchFields"][] = "dia_genka";
	$tdatavw_arari[".allSearchFields"][] = "jewelry_price";
	$tdatavw_arari[".allSearchFields"][] = "jewelry_nyuukin_price";
	$tdatavw_arari[".allSearchFields"][] = "jewelry_arari";
	$tdatavw_arari[".allSearchFields"][] = "jewelry_genka";
	$tdatavw_arari[".allSearchFields"][] = "brand_price";
	$tdatavw_arari[".allSearchFields"][] = "brand_nyuukin_price";
	$tdatavw_arari[".allSearchFields"][] = "brand_arari";
	$tdatavw_arari[".allSearchFields"][] = "brand_genka";
	$tdatavw_arari[".allSearchFields"][] = "metal_price";
	$tdatavw_arari[".allSearchFields"][] = "metal_nyuukin_price";
	$tdatavw_arari[".allSearchFields"][] = "metal_arari";
	$tdatavw_arari[".allSearchFields"][] = "metal_genka";
	$tdatavw_arari[".allSearchFields"][] = "total_price";
	$tdatavw_arari[".allSearchFields"][] = "total_nyuukin_price";
	$tdatavw_arari[".allSearchFields"][] = "total_arari";
	$tdatavw_arari[".allSearchFields"][] = "total_genka";
	

$tdatavw_arari[".googleLikeFields"] = array();
$tdatavw_arari[".googleLikeFields"][] = "kanryou_henbi";
$tdatavw_arari[".googleLikeFields"][] = "watch_price";
$tdatavw_arari[".googleLikeFields"][] = "watch_nyuukin_price";
$tdatavw_arari[".googleLikeFields"][] = "watch_arari";
$tdatavw_arari[".googleLikeFields"][] = "watch_genka";
$tdatavw_arari[".googleLikeFields"][] = "dia_price";
$tdatavw_arari[".googleLikeFields"][] = "dia_nyuukin_price";
$tdatavw_arari[".googleLikeFields"][] = "dia_arari";
$tdatavw_arari[".googleLikeFields"][] = "dia_genka";
$tdatavw_arari[".googleLikeFields"][] = "jewelry_price";
$tdatavw_arari[".googleLikeFields"][] = "jewelry_nyuukin_price";
$tdatavw_arari[".googleLikeFields"][] = "jewelry_arari";
$tdatavw_arari[".googleLikeFields"][] = "jewelry_genka";
$tdatavw_arari[".googleLikeFields"][] = "brand_price";
$tdatavw_arari[".googleLikeFields"][] = "brand_nyuukin_price";
$tdatavw_arari[".googleLikeFields"][] = "brand_arari";
$tdatavw_arari[".googleLikeFields"][] = "brand_genka";
$tdatavw_arari[".googleLikeFields"][] = "metal_price";
$tdatavw_arari[".googleLikeFields"][] = "metal_nyuukin_price";
$tdatavw_arari[".googleLikeFields"][] = "metal_arari";
$tdatavw_arari[".googleLikeFields"][] = "metal_genka";
$tdatavw_arari[".googleLikeFields"][] = "total_price";
$tdatavw_arari[".googleLikeFields"][] = "total_nyuukin_price";
$tdatavw_arari[".googleLikeFields"][] = "total_arari";
$tdatavw_arari[".googleLikeFields"][] = "total_genka";


$tdatavw_arari[".advSearchFields"] = array();
$tdatavw_arari[".advSearchFields"][] = "kanryou_henbi";
$tdatavw_arari[".advSearchFields"][] = "watch_price";
$tdatavw_arari[".advSearchFields"][] = "watch_nyuukin_price";
$tdatavw_arari[".advSearchFields"][] = "watch_arari";
$tdatavw_arari[".advSearchFields"][] = "watch_genka";
$tdatavw_arari[".advSearchFields"][] = "dia_price";
$tdatavw_arari[".advSearchFields"][] = "dia_nyuukin_price";
$tdatavw_arari[".advSearchFields"][] = "dia_arari";
$tdatavw_arari[".advSearchFields"][] = "dia_genka";
$tdatavw_arari[".advSearchFields"][] = "jewelry_price";
$tdatavw_arari[".advSearchFields"][] = "jewelry_nyuukin_price";
$tdatavw_arari[".advSearchFields"][] = "jewelry_arari";
$tdatavw_arari[".advSearchFields"][] = "jewelry_genka";
$tdatavw_arari[".advSearchFields"][] = "brand_price";
$tdatavw_arari[".advSearchFields"][] = "brand_nyuukin_price";
$tdatavw_arari[".advSearchFields"][] = "brand_arari";
$tdatavw_arari[".advSearchFields"][] = "brand_genka";
$tdatavw_arari[".advSearchFields"][] = "metal_price";
$tdatavw_arari[".advSearchFields"][] = "metal_nyuukin_price";
$tdatavw_arari[".advSearchFields"][] = "metal_arari";
$tdatavw_arari[".advSearchFields"][] = "metal_genka";
$tdatavw_arari[".advSearchFields"][] = "total_price";
$tdatavw_arari[".advSearchFields"][] = "total_nyuukin_price";
$tdatavw_arari[".advSearchFields"][] = "total_arari";
$tdatavw_arari[".advSearchFields"][] = "total_genka";

$tdatavw_arari[".tableType"] = "list";

$tdatavw_arari[".printerPageOrientation"] = 0;
$tdatavw_arari[".nPrinterPageScale"] = 100;

$tdatavw_arari[".nPrinterSplitRecords"] = 40;

$tdatavw_arari[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_arari[".geocodingEnabled"] = false;





$tdatavw_arari[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavw_arari[".pageSize"] = 20;

$tdatavw_arari[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_arari[".strOrderBy"] = $tstrOrderBy;

$tdatavw_arari[".orderindexes"] = array();

$tdatavw_arari[".sqlHead"] = "select `kanryou_henbi`,  `watch_price`,  `watch_nyuukin_price`,  (`watch_nyuukin_price` - `watch_price`) AS `watch_arari`,  (`watch_price` / `watch_nyuukin_price`) AS `watch_genka`,  `dia_price`,  `dia_nyuukin_price`,  (`dia_nyuukin_price` - `dia_price`) AS `dia_arari`,  (`dia_price` / `dia_nyuukin_price`) AS `dia_genka`,  `jewelry_price`,  `jewelry_nyuukin_price`,  (`jewelry_nyuukin_price` - `jewelry_price`) AS `jewelry_arari`,  (`jewelry_price` / `jewelry_nyuukin_price`) AS `jewelry_genka`,  `brand_price`,  `brand_nyuukin_price`,  (`brand_nyuukin_price` - `brand_price`) AS `brand_arari`,  (`brand_price` / `brand_nyuukin_price`) AS `brand_genka`,  `metal_price`,  `metal_nyuukin_price`,  (`metal_nyuukin_price` - `metal_price`) AS `metal_arari`,  (`metal_price` / `metal_nyuukin_price`) AS `metal_genka`,  `total_price`,  `total_nyuukin_price`,  (`total_nyuukin_price` - `total_price`) AS `total_arari`,  (`total_price` / `total_nyuukin_price`) AS `total_genka`";
$tdatavw_arari[".sqlFrom"] = "FROM `vw_arari`";
$tdatavw_arari[".sqlWhereExpr"] = "";
$tdatavw_arari[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_arari[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_arari[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_arari[".highlightSearchResults"] = true;

$tableKeysvw_arari = array();
$tdatavw_arari[".Keys"] = $tableKeysvw_arari;

$tdatavw_arari[".listFields"] = array();
$tdatavw_arari[".listFields"][] = "kanryou_henbi";
$tdatavw_arari[".listFields"][] = "watch_price";
$tdatavw_arari[".listFields"][] = "watch_nyuukin_price";
$tdatavw_arari[".listFields"][] = "watch_arari";
$tdatavw_arari[".listFields"][] = "watch_genka";
$tdatavw_arari[".listFields"][] = "dia_price";
$tdatavw_arari[".listFields"][] = "dia_nyuukin_price";
$tdatavw_arari[".listFields"][] = "dia_arari";
$tdatavw_arari[".listFields"][] = "dia_genka";
$tdatavw_arari[".listFields"][] = "jewelry_price";
$tdatavw_arari[".listFields"][] = "jewelry_nyuukin_price";
$tdatavw_arari[".listFields"][] = "jewelry_arari";
$tdatavw_arari[".listFields"][] = "jewelry_genka";
$tdatavw_arari[".listFields"][] = "brand_price";
$tdatavw_arari[".listFields"][] = "brand_nyuukin_price";
$tdatavw_arari[".listFields"][] = "brand_arari";
$tdatavw_arari[".listFields"][] = "brand_genka";
$tdatavw_arari[".listFields"][] = "metal_price";
$tdatavw_arari[".listFields"][] = "metal_nyuukin_price";
$tdatavw_arari[".listFields"][] = "metal_arari";
$tdatavw_arari[".listFields"][] = "metal_genka";
$tdatavw_arari[".listFields"][] = "total_price";
$tdatavw_arari[".listFields"][] = "total_nyuukin_price";
$tdatavw_arari[".listFields"][] = "total_arari";
$tdatavw_arari[".listFields"][] = "total_genka";

$tdatavw_arari[".hideMobileList"] = array();


$tdatavw_arari[".viewFields"] = array();

$tdatavw_arari[".addFields"] = array();

$tdatavw_arari[".masterListFields"] = array();
$tdatavw_arari[".masterListFields"][] = "kanryou_henbi";
$tdatavw_arari[".masterListFields"][] = "watch_price";
$tdatavw_arari[".masterListFields"][] = "watch_nyuukin_price";
$tdatavw_arari[".masterListFields"][] = "watch_arari";
$tdatavw_arari[".masterListFields"][] = "watch_genka";
$tdatavw_arari[".masterListFields"][] = "dia_price";
$tdatavw_arari[".masterListFields"][] = "dia_nyuukin_price";
$tdatavw_arari[".masterListFields"][] = "dia_arari";
$tdatavw_arari[".masterListFields"][] = "dia_genka";
$tdatavw_arari[".masterListFields"][] = "jewelry_price";
$tdatavw_arari[".masterListFields"][] = "jewelry_nyuukin_price";
$tdatavw_arari[".masterListFields"][] = "jewelry_arari";
$tdatavw_arari[".masterListFields"][] = "jewelry_genka";
$tdatavw_arari[".masterListFields"][] = "brand_price";
$tdatavw_arari[".masterListFields"][] = "brand_nyuukin_price";
$tdatavw_arari[".masterListFields"][] = "brand_arari";
$tdatavw_arari[".masterListFields"][] = "brand_genka";
$tdatavw_arari[".masterListFields"][] = "metal_price";
$tdatavw_arari[".masterListFields"][] = "metal_nyuukin_price";
$tdatavw_arari[".masterListFields"][] = "metal_arari";
$tdatavw_arari[".masterListFields"][] = "metal_genka";
$tdatavw_arari[".masterListFields"][] = "total_price";
$tdatavw_arari[".masterListFields"][] = "total_nyuukin_price";
$tdatavw_arari[".masterListFields"][] = "total_arari";
$tdatavw_arari[".masterListFields"][] = "total_genka";

$tdatavw_arari[".inlineAddFields"] = array();

$tdatavw_arari[".editFields"] = array();

$tdatavw_arari[".inlineEditFields"] = array();

$tdatavw_arari[".updateSelectedFields"] = array();


$tdatavw_arari[".exportFields"] = array();
$tdatavw_arari[".exportFields"][] = "kanryou_henbi";
$tdatavw_arari[".exportFields"][] = "watch_price";
$tdatavw_arari[".exportFields"][] = "watch_nyuukin_price";
$tdatavw_arari[".exportFields"][] = "watch_arari";
$tdatavw_arari[".exportFields"][] = "watch_genka";
$tdatavw_arari[".exportFields"][] = "dia_price";
$tdatavw_arari[".exportFields"][] = "dia_nyuukin_price";
$tdatavw_arari[".exportFields"][] = "dia_arari";
$tdatavw_arari[".exportFields"][] = "dia_genka";
$tdatavw_arari[".exportFields"][] = "jewelry_price";
$tdatavw_arari[".exportFields"][] = "jewelry_nyuukin_price";
$tdatavw_arari[".exportFields"][] = "jewelry_arari";
$tdatavw_arari[".exportFields"][] = "jewelry_genka";
$tdatavw_arari[".exportFields"][] = "brand_price";
$tdatavw_arari[".exportFields"][] = "brand_nyuukin_price";
$tdatavw_arari[".exportFields"][] = "brand_arari";
$tdatavw_arari[".exportFields"][] = "brand_genka";
$tdatavw_arari[".exportFields"][] = "metal_price";
$tdatavw_arari[".exportFields"][] = "metal_nyuukin_price";
$tdatavw_arari[".exportFields"][] = "metal_arari";
$tdatavw_arari[".exportFields"][] = "metal_genka";
$tdatavw_arari[".exportFields"][] = "total_price";
$tdatavw_arari[".exportFields"][] = "total_nyuukin_price";
$tdatavw_arari[".exportFields"][] = "total_arari";
$tdatavw_arari[".exportFields"][] = "total_genka";

$tdatavw_arari[".importFields"] = array();

$tdatavw_arari[".printFields"] = array();

//	kanryou_henbi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "kanryou_henbi";
	$fdata["GoodName"] = "kanryou_henbi";
	$fdata["ownerTable"] = "vw_arari";
	$fdata["Label"] = GetFieldLabel("vw_arari","kanryou_henbi");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kanryou_henbi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kanryou_henbi`";

	
	
				$fdata["FieldPermissions"] = true;

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
			$edata["EditParams"].= " maxlength=12";

		$edata["controlWidth"] = 200;

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




	$tdatavw_arari["kanryou_henbi"] = $fdata;
//	watch_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "watch_price";
	$fdata["GoodName"] = "watch_price";
	$fdata["ownerTable"] = "vw_arari";
	$fdata["Label"] = GetFieldLabel("vw_arari","watch_price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "watch_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`watch_price`";

	
	
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




	$tdatavw_arari["watch_price"] = $fdata;
//	watch_nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "watch_nyuukin_price";
	$fdata["GoodName"] = "watch_nyuukin_price";
	$fdata["ownerTable"] = "vw_arari";
	$fdata["Label"] = GetFieldLabel("vw_arari","watch_nyuukin_price");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "watch_nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`watch_nyuukin_price`";

	
	
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




	$tdatavw_arari["watch_nyuukin_price"] = $fdata;
//	watch_arari
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "watch_arari";
	$fdata["GoodName"] = "watch_arari";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_arari","watch_arari");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "watch_arari";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(`watch_nyuukin_price` - `watch_price`)";

	
	
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




	$tdatavw_arari["watch_arari"] = $fdata;
//	watch_genka
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "watch_genka";
	$fdata["GoodName"] = "watch_genka";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_arari","watch_genka");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "watch_genka";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(`watch_price` / `watch_nyuukin_price`)";

	
	
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




	$tdatavw_arari["watch_genka"] = $fdata;
//	dia_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dia_price";
	$fdata["GoodName"] = "dia_price";
	$fdata["ownerTable"] = "vw_arari";
	$fdata["Label"] = GetFieldLabel("vw_arari","dia_price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dia_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dia_price`";

	
	
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




	$tdatavw_arari["dia_price"] = $fdata;
//	dia_nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dia_nyuukin_price";
	$fdata["GoodName"] = "dia_nyuukin_price";
	$fdata["ownerTable"] = "vw_arari";
	$fdata["Label"] = GetFieldLabel("vw_arari","dia_nyuukin_price");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dia_nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dia_nyuukin_price`";

	
	
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




	$tdatavw_arari["dia_nyuukin_price"] = $fdata;
//	dia_arari
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dia_arari";
	$fdata["GoodName"] = "dia_arari";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_arari","dia_arari");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dia_arari";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(`dia_nyuukin_price` - `dia_price`)";

	
	
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




	$tdatavw_arari["dia_arari"] = $fdata;
//	dia_genka
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dia_genka";
	$fdata["GoodName"] = "dia_genka";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_arari","dia_genka");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dia_genka";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(`dia_price` / `dia_nyuukin_price`)";

	
	
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




	$tdatavw_arari["dia_genka"] = $fdata;
//	jewelry_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "jewelry_price";
	$fdata["GoodName"] = "jewelry_price";
	$fdata["ownerTable"] = "vw_arari";
	$fdata["Label"] = GetFieldLabel("vw_arari","jewelry_price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jewelry_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`jewelry_price`";

	
	
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




	$tdatavw_arari["jewelry_price"] = $fdata;
//	jewelry_nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "jewelry_nyuukin_price";
	$fdata["GoodName"] = "jewelry_nyuukin_price";
	$fdata["ownerTable"] = "vw_arari";
	$fdata["Label"] = GetFieldLabel("vw_arari","jewelry_nyuukin_price");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jewelry_nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`jewelry_nyuukin_price`";

	
	
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




	$tdatavw_arari["jewelry_nyuukin_price"] = $fdata;
//	jewelry_arari
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "jewelry_arari";
	$fdata["GoodName"] = "jewelry_arari";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_arari","jewelry_arari");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jewelry_arari";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(`jewelry_nyuukin_price` - `jewelry_price`)";

	
	
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




	$tdatavw_arari["jewelry_arari"] = $fdata;
//	jewelry_genka
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "jewelry_genka";
	$fdata["GoodName"] = "jewelry_genka";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_arari","jewelry_genka");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jewelry_genka";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(`jewelry_price` / `jewelry_nyuukin_price`)";

	
	
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




	$tdatavw_arari["jewelry_genka"] = $fdata;
//	brand_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "brand_price";
	$fdata["GoodName"] = "brand_price";
	$fdata["ownerTable"] = "vw_arari";
	$fdata["Label"] = GetFieldLabel("vw_arari","brand_price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "brand_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brand_price`";

	
	
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




	$tdatavw_arari["brand_price"] = $fdata;
//	brand_nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "brand_nyuukin_price";
	$fdata["GoodName"] = "brand_nyuukin_price";
	$fdata["ownerTable"] = "vw_arari";
	$fdata["Label"] = GetFieldLabel("vw_arari","brand_nyuukin_price");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "brand_nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`brand_nyuukin_price`";

	
	
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




	$tdatavw_arari["brand_nyuukin_price"] = $fdata;
//	brand_arari
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "brand_arari";
	$fdata["GoodName"] = "brand_arari";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_arari","brand_arari");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "brand_arari";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(`brand_nyuukin_price` - `brand_price`)";

	
	
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




	$tdatavw_arari["brand_arari"] = $fdata;
//	brand_genka
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "brand_genka";
	$fdata["GoodName"] = "brand_genka";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_arari","brand_genka");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "brand_genka";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(`brand_price` / `brand_nyuukin_price`)";

	
	
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




	$tdatavw_arari["brand_genka"] = $fdata;
//	metal_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "metal_price";
	$fdata["GoodName"] = "metal_price";
	$fdata["ownerTable"] = "vw_arari";
	$fdata["Label"] = GetFieldLabel("vw_arari","metal_price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "metal_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`metal_price`";

	
	
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




	$tdatavw_arari["metal_price"] = $fdata;
//	metal_nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "metal_nyuukin_price";
	$fdata["GoodName"] = "metal_nyuukin_price";
	$fdata["ownerTable"] = "vw_arari";
	$fdata["Label"] = GetFieldLabel("vw_arari","metal_nyuukin_price");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "metal_nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`metal_nyuukin_price`";

	
	
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




	$tdatavw_arari["metal_nyuukin_price"] = $fdata;
//	metal_arari
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "metal_arari";
	$fdata["GoodName"] = "metal_arari";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_arari","metal_arari");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "metal_arari";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(`metal_nyuukin_price` - `metal_price`)";

	
	
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




	$tdatavw_arari["metal_arari"] = $fdata;
//	metal_genka
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "metal_genka";
	$fdata["GoodName"] = "metal_genka";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_arari","metal_genka");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "metal_genka";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(`metal_price` / `metal_nyuukin_price`)";

	
	
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




	$tdatavw_arari["metal_genka"] = $fdata;
//	total_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "total_price";
	$fdata["GoodName"] = "total_price";
	$fdata["ownerTable"] = "vw_arari";
	$fdata["Label"] = GetFieldLabel("vw_arari","total_price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_price`";

	
	
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




	$tdatavw_arari["total_price"] = $fdata;
//	total_nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "total_nyuukin_price";
	$fdata["GoodName"] = "total_nyuukin_price";
	$fdata["ownerTable"] = "vw_arari";
	$fdata["Label"] = GetFieldLabel("vw_arari","total_nyuukin_price");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`total_nyuukin_price`";

	
	
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




	$tdatavw_arari["total_nyuukin_price"] = $fdata;
//	total_arari
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "total_arari";
	$fdata["GoodName"] = "total_arari";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_arari","total_arari");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_arari";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(`total_nyuukin_price` - `total_price`)";

	
	
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




	$tdatavw_arari["total_arari"] = $fdata;
//	total_genka
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "total_genka";
	$fdata["GoodName"] = "total_genka";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_arari","total_genka");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "total_genka";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(`total_price` / `total_nyuukin_price`)";

	
	
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




	$tdatavw_arari["total_genka"] = $fdata;


$tables_data["vw_arari"]=&$tdatavw_arari;
$field_labels["vw_arari"] = &$fieldLabelsvw_arari;
$fieldToolTips["vw_arari"] = &$fieldToolTipsvw_arari;
$placeHolders["vw_arari"] = &$placeHoldersvw_arari;
$page_titles["vw_arari"] = &$pageTitlesvw_arari;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_arari"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_arari"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_arari()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "`kanryou_henbi`,  `watch_price`,  `watch_nyuukin_price`,  (`watch_nyuukin_price` - `watch_price`) AS `watch_arari`,  (`watch_price` / `watch_nyuukin_price`) AS `watch_genka`,  `dia_price`,  `dia_nyuukin_price`,  (`dia_nyuukin_price` - `dia_price`) AS `dia_arari`,  (`dia_price` / `dia_nyuukin_price`) AS `dia_genka`,  `jewelry_price`,  `jewelry_nyuukin_price`,  (`jewelry_nyuukin_price` - `jewelry_price`) AS `jewelry_arari`,  (`jewelry_price` / `jewelry_nyuukin_price`) AS `jewelry_genka`,  `brand_price`,  `brand_nyuukin_price`,  (`brand_nyuukin_price` - `brand_price`) AS `brand_arari`,  (`brand_price` / `brand_nyuukin_price`) AS `brand_genka`,  `metal_price`,  `metal_nyuukin_price`,  (`metal_nyuukin_price` - `metal_price`) AS `metal_arari`,  (`metal_price` / `metal_nyuukin_price`) AS `metal_genka`,  `total_price`,  `total_nyuukin_price`,  (`total_nyuukin_price` - `total_price`) AS `total_arari`,  (`total_price` / `total_nyuukin_price`) AS `total_genka`";
$proto0["m_strFrom"] = "FROM `vw_arari`";
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
			$obj = new SQLField(array(
	"m_strName" => "kanryou_henbi",
	"m_strTable" => "vw_arari",
	"m_srcTableName" => "vw_arari"
));

$proto6["m_sql"] = "`kanryou_henbi`";
$proto6["m_srcTableName"] = "vw_arari";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "watch_price",
	"m_strTable" => "vw_arari",
	"m_srcTableName" => "vw_arari"
));

$proto8["m_sql"] = "`watch_price`";
$proto8["m_srcTableName"] = "vw_arari";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "watch_nyuukin_price",
	"m_strTable" => "vw_arari",
	"m_srcTableName" => "vw_arari"
));

$proto10["m_sql"] = "`watch_nyuukin_price`";
$proto10["m_srcTableName"] = "vw_arari";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(`watch_nyuukin_price` - `watch_price`)"
));

$proto12["m_sql"] = "(`watch_nyuukin_price` - `watch_price`)";
$proto12["m_srcTableName"] = "vw_arari";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "watch_arari";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(`watch_price` / `watch_nyuukin_price`)"
));

$proto14["m_sql"] = "(`watch_price` / `watch_nyuukin_price`)";
$proto14["m_srcTableName"] = "vw_arari";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "watch_genka";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_price",
	"m_strTable" => "vw_arari",
	"m_srcTableName" => "vw_arari"
));

$proto16["m_sql"] = "`dia_price`";
$proto16["m_srcTableName"] = "vw_arari";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "dia_nyuukin_price",
	"m_strTable" => "vw_arari",
	"m_srcTableName" => "vw_arari"
));

$proto18["m_sql"] = "`dia_nyuukin_price`";
$proto18["m_srcTableName"] = "vw_arari";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(`dia_nyuukin_price` - `dia_price`)"
));

$proto20["m_sql"] = "(`dia_nyuukin_price` - `dia_price`)";
$proto20["m_srcTableName"] = "vw_arari";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "dia_arari";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(`dia_price` / `dia_nyuukin_price`)"
));

$proto22["m_sql"] = "(`dia_price` / `dia_nyuukin_price`)";
$proto22["m_srcTableName"] = "vw_arari";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "dia_genka";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "jewelry_price",
	"m_strTable" => "vw_arari",
	"m_srcTableName" => "vw_arari"
));

$proto24["m_sql"] = "`jewelry_price`";
$proto24["m_srcTableName"] = "vw_arari";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "jewelry_nyuukin_price",
	"m_strTable" => "vw_arari",
	"m_srcTableName" => "vw_arari"
));

$proto26["m_sql"] = "`jewelry_nyuukin_price`";
$proto26["m_srcTableName"] = "vw_arari";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(`jewelry_nyuukin_price` - `jewelry_price`)"
));

$proto28["m_sql"] = "(`jewelry_nyuukin_price` - `jewelry_price`)";
$proto28["m_srcTableName"] = "vw_arari";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "jewelry_arari";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(`jewelry_price` / `jewelry_nyuukin_price`)"
));

$proto30["m_sql"] = "(`jewelry_price` / `jewelry_nyuukin_price`)";
$proto30["m_srcTableName"] = "vw_arari";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "jewelry_genka";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "brand_price",
	"m_strTable" => "vw_arari",
	"m_srcTableName" => "vw_arari"
));

$proto32["m_sql"] = "`brand_price`";
$proto32["m_srcTableName"] = "vw_arari";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "brand_nyuukin_price",
	"m_strTable" => "vw_arari",
	"m_srcTableName" => "vw_arari"
));

$proto34["m_sql"] = "`brand_nyuukin_price`";
$proto34["m_srcTableName"] = "vw_arari";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(`brand_nyuukin_price` - `brand_price`)"
));

$proto36["m_sql"] = "(`brand_nyuukin_price` - `brand_price`)";
$proto36["m_srcTableName"] = "vw_arari";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "brand_arari";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(`brand_price` / `brand_nyuukin_price`)"
));

$proto38["m_sql"] = "(`brand_price` / `brand_nyuukin_price`)";
$proto38["m_srcTableName"] = "vw_arari";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "brand_genka";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "metal_price",
	"m_strTable" => "vw_arari",
	"m_srcTableName" => "vw_arari"
));

$proto40["m_sql"] = "`metal_price`";
$proto40["m_srcTableName"] = "vw_arari";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "metal_nyuukin_price",
	"m_strTable" => "vw_arari",
	"m_srcTableName" => "vw_arari"
));

$proto42["m_sql"] = "`metal_nyuukin_price`";
$proto42["m_srcTableName"] = "vw_arari";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(`metal_nyuukin_price` - `metal_price`)"
));

$proto44["m_sql"] = "(`metal_nyuukin_price` - `metal_price`)";
$proto44["m_srcTableName"] = "vw_arari";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "metal_arari";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(`metal_price` / `metal_nyuukin_price`)"
));

$proto46["m_sql"] = "(`metal_price` / `metal_nyuukin_price`)";
$proto46["m_srcTableName"] = "vw_arari";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "metal_genka";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "total_price",
	"m_strTable" => "vw_arari",
	"m_srcTableName" => "vw_arari"
));

$proto48["m_sql"] = "`total_price`";
$proto48["m_srcTableName"] = "vw_arari";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "total_nyuukin_price",
	"m_strTable" => "vw_arari",
	"m_srcTableName" => "vw_arari"
));

$proto50["m_sql"] = "`total_nyuukin_price`";
$proto50["m_srcTableName"] = "vw_arari";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(`total_nyuukin_price` - `total_price`)"
));

$proto52["m_sql"] = "(`total_nyuukin_price` - `total_price`)";
$proto52["m_srcTableName"] = "vw_arari";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "total_arari";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(`total_price` / `total_nyuukin_price`)"
));

$proto54["m_sql"] = "(`total_price` / `total_nyuukin_price`)";
$proto54["m_srcTableName"] = "vw_arari";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "total_genka";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "vw_arari";
$proto57["m_srcTableName"] = "vw_arari";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "kanryou_henbi";
$proto57["m_columns"][] = "watch_price";
$proto57["m_columns"][] = "watch_nyuukin_price";
$proto57["m_columns"][] = "dia_price";
$proto57["m_columns"][] = "dia_nyuukin_price";
$proto57["m_columns"][] = "jewelry_price";
$proto57["m_columns"][] = "jewelry_nyuukin_price";
$proto57["m_columns"][] = "brand_price";
$proto57["m_columns"][] = "brand_nyuukin_price";
$proto57["m_columns"][] = "metal_price";
$proto57["m_columns"][] = "metal_nyuukin_price";
$proto57["m_columns"][] = "total_price";
$proto57["m_columns"][] = "total_nyuukin_price";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "`vw_arari`";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "vw_arari";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vw_arari";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_arari = createSqlQuery_vw_arari();


	
		;

																									

$tdatavw_arari[".sqlquery"] = $queryData_vw_arari;

$tableEvents["vw_arari"] = new eventsBase;
$tdatavw_arari[".hasEvents"] = false;

?>