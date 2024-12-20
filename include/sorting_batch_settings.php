<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasorting_batch = array();
	$tdatasorting_batch[".ShortName"] = "sorting_batch";
	$tdatasorting_batch[".OwnerID"] = "";
	$tdatasorting_batch[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelssorting_batch = array();
$fieldToolTipssorting_batch = array();
$pageTitlessorting_batch = array();
$placeHolderssorting_batch = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelssorting_batch["Japanese"] = array();
	$fieldToolTipssorting_batch["Japanese"] = array();
	$placeHolderssorting_batch["Japanese"] = array();
	$pageTitlessorting_batch["Japanese"] = array();
	$fieldLabelssorting_batch["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipssorting_batch["Japanese"]["product_id"] = "";
	$placeHolderssorting_batch["Japanese"]["product_id"] = "";
	$fieldLabelssorting_batch["Japanese"]["status"] = "商品状態";
	$fieldToolTipssorting_batch["Japanese"]["status"] = "";
	$placeHolderssorting_batch["Japanese"]["status"] = "";
	$fieldLabelssorting_batch["Japanese"]["text_all"] = "Text All";
	$fieldToolTipssorting_batch["Japanese"]["text_all"] = "";
	$placeHolderssorting_batch["Japanese"]["text_all"] = "";
	$fieldLabelssorting_batch["Japanese"]["sorting_reflect_flag"] = "ソーティング反映";
	$fieldToolTipssorting_batch["Japanese"]["sorting_reflect_flag"] = "";
	$placeHolderssorting_batch["Japanese"]["sorting_reflect_flag"] = "";
	$fieldLabelssorting_batch["Japanese"]["parent_stone"] = "カラット";
	$fieldToolTipssorting_batch["Japanese"]["parent_stone"] = "";
	$placeHolderssorting_batch["Japanese"]["parent_stone"] = "";
	$fieldLabelssorting_batch["Japanese"]["color"] = "カラー";
	$fieldToolTipssorting_batch["Japanese"]["color"] = "";
	$placeHolderssorting_batch["Japanese"]["color"] = "";
	$fieldLabelssorting_batch["Japanese"]["clarity"] = "クラリティ";
	$fieldToolTipssorting_batch["Japanese"]["clarity"] = "";
	$placeHolderssorting_batch["Japanese"]["clarity"] = "";
	$fieldLabelssorting_batch["Japanese"]["size1"] = "サイズ1";
	$fieldToolTipssorting_batch["Japanese"]["size1"] = "";
	$placeHolderssorting_batch["Japanese"]["size1"] = "";
	$fieldLabelssorting_batch["Japanese"]["size2"] = "サイズ2";
	$fieldToolTipssorting_batch["Japanese"]["size2"] = "";
	$placeHolderssorting_batch["Japanese"]["size2"] = "";
	$fieldLabelssorting_batch["Japanese"]["size3"] = "サイズ3";
	$fieldToolTipssorting_batch["Japanese"]["size3"] = "";
	$placeHolderssorting_batch["Japanese"]["size3"] = "";
	$fieldLabelssorting_batch["Japanese"]["fluo"] = "蛍光";
	$fieldToolTipssorting_batch["Japanese"]["fluo"] = "";
	$placeHolderssorting_batch["Japanese"]["fluo"] = "";
	$fieldLabelssorting_batch["Japanese"]["cofl"] = "COFL";
	$fieldToolTipssorting_batch["Japanese"]["cofl"] = "";
	$placeHolderssorting_batch["Japanese"]["cofl"] = "";
	$fieldLabelssorting_batch["Japanese"]["appraiser"] = "鑑定機関";
	$fieldToolTipssorting_batch["Japanese"]["appraiser"] = "";
	$placeHolderssorting_batch["Japanese"]["appraiser"] = "";
	$fieldLabelssorting_batch["Japanese"]["pol_sym"] = "ポリッシュ";
	$fieldToolTipssorting_batch["Japanese"]["pol_sym"] = "";
	$placeHolderssorting_batch["Japanese"]["pol_sym"] = "";
	$fieldLabelssorting_batch["Japanese"]["pol_sym2"] = "シンメトリ";
	$fieldToolTipssorting_batch["Japanese"]["pol_sym2"] = "";
	$placeHolderssorting_batch["Japanese"]["pol_sym2"] = "";
	$fieldLabelssorting_batch["Japanese"]["parent_stone_ref"] = "";
	$fieldToolTipssorting_batch["Japanese"]["parent_stone_ref"] = "";
	$placeHolderssorting_batch["Japanese"]["parent_stone_ref"] = "";
	$fieldLabelssorting_batch["Japanese"]["DA_INTENSITY"] = "INSI";
	$fieldToolTipssorting_batch["Japanese"]["DA_INTENSITY"] = "";
	$placeHolderssorting_batch["Japanese"]["DA_INTENSITY"] = "";
	$fieldLabelssorting_batch["Japanese"]["DA_OVERTONE"] = "OVTO";
	$fieldToolTipssorting_batch["Japanese"]["DA_OVERTONE"] = "";
	$placeHolderssorting_batch["Japanese"]["DA_OVERTONE"] = "";
	$fieldLabelssorting_batch["Japanese"]["color_ref"] = "";
	$fieldToolTipssorting_batch["Japanese"]["color_ref"] = "";
	$placeHolderssorting_batch["Japanese"]["color_ref"] = "";
	$fieldLabelssorting_batch["Japanese"]["clarity_ref"] = "";
	$fieldToolTipssorting_batch["Japanese"]["clarity_ref"] = "";
	$placeHolderssorting_batch["Japanese"]["clarity_ref"] = "";
	$fieldLabelssorting_batch["Japanese"]["size1_ref"] = "";
	$fieldToolTipssorting_batch["Japanese"]["size1_ref"] = "";
	$placeHolderssorting_batch["Japanese"]["size1_ref"] = "";
	$fieldLabelssorting_batch["Japanese"]["size2_ref"] = "";
	$fieldToolTipssorting_batch["Japanese"]["size2_ref"] = "";
	$placeHolderssorting_batch["Japanese"]["size2_ref"] = "";
	$fieldLabelssorting_batch["Japanese"]["size3_ref"] = "";
	$fieldToolTipssorting_batch["Japanese"]["size3_ref"] = "";
	$placeHolderssorting_batch["Japanese"]["size3_ref"] = "";
	$fieldLabelssorting_batch["Japanese"]["fluo_cofl_ref"] = "";
	$fieldToolTipssorting_batch["Japanese"]["fluo_cofl_ref"] = "";
	$placeHolderssorting_batch["Japanese"]["fluo_cofl_ref"] = "";
	$fieldLabelssorting_batch["Japanese"]["appraiser_ref"] = "";
	$fieldToolTipssorting_batch["Japanese"]["appraiser_ref"] = "";
	$placeHolderssorting_batch["Japanese"]["appraiser_ref"] = "";
	$fieldLabelssorting_batch["Japanese"]["pol_sym_ref"] = "";
	$fieldToolTipssorting_batch["Japanese"]["pol_sym_ref"] = "";
	$placeHolderssorting_batch["Japanese"]["pol_sym_ref"] = "";
	$fieldLabelssorting_batch["Japanese"]["pol_sym2_ref"] = "";
	$fieldToolTipssorting_batch["Japanese"]["pol_sym2_ref"] = "";
	$placeHolderssorting_batch["Japanese"]["pol_sym2_ref"] = "";
	$fieldLabelssorting_batch["Japanese"]["serial_number"] = "機番";
	$fieldToolTipssorting_batch["Japanese"]["serial_number"] = "";
	$placeHolderssorting_batch["Japanese"]["serial_number"] = "";
	$fieldLabelssorting_batch["Japanese"]["serial_number_ref"] = "";
	$fieldToolTipssorting_batch["Japanese"]["serial_number_ref"] = "";
	$placeHolderssorting_batch["Japanese"]["serial_number_ref"] = "";
	$fieldLabelssorting_batch["Japanese"]["DA_CUT"] = "カット";
	$fieldToolTipssorting_batch["Japanese"]["DA_CUT"] = "";
	$placeHolderssorting_batch["Japanese"]["DA_CUT"] = "";
	$fieldLabelssorting_batch["Japanese"]["DA_CUT_ref"] = "";
	$fieldToolTipssorting_batch["Japanese"]["DA_CUT_ref"] = "";
	$placeHolderssorting_batch["Japanese"]["DA_CUT_ref"] = "";
	$fieldLabelssorting_batch["Japanese"]["ichiba_exhibition_id"] = "出品表Id";
	$fieldToolTipssorting_batch["Japanese"]["ichiba_exhibition_id"] = "";
	$placeHolderssorting_batch["Japanese"]["ichiba_exhibition_id"] = "";
	$fieldLabelssorting_batch["Japanese"]["ichiba_exhibition_sort"] = "出品表Sort";
	$fieldToolTipssorting_batch["Japanese"]["ichiba_exhibition_sort"] = "";
	$placeHolderssorting_batch["Japanese"]["ichiba_exhibition_sort"] = "";
	$fieldLabelssorting_batch["Japanese"]["description"] = "メモ";
	$fieldToolTipssorting_batch["Japanese"]["description"] = "";
	$placeHolderssorting_batch["Japanese"]["description"] = "";
	$fieldLabelssorting_batch["Japanese"]["Remarks"] = "宝飾備考";
	$fieldToolTipssorting_batch["Japanese"]["Remarks"] = "";
	$placeHolderssorting_batch["Japanese"]["Remarks"] = "";
	if (count($fieldToolTipssorting_batch["Japanese"]))
		$tdatasorting_batch[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssorting_batch[""] = array();
	$fieldToolTipssorting_batch[""] = array();
	$placeHolderssorting_batch[""] = array();
	$pageTitlessorting_batch[""] = array();
	$fieldLabelssorting_batch[""]["text_all"] = "Text All";
	$fieldToolTipssorting_batch[""]["text_all"] = "";
	$placeHolderssorting_batch[""]["text_all"] = "";
	$fieldLabelssorting_batch[""]["sorting_reflect_flag"] = "Sorting Reflect Flag";
	$fieldToolTipssorting_batch[""]["sorting_reflect_flag"] = "";
	$placeHolderssorting_batch[""]["sorting_reflect_flag"] = "";
	$fieldLabelssorting_batch[""]["parent_stone"] = "Parent Stone";
	$fieldToolTipssorting_batch[""]["parent_stone"] = "";
	$placeHolderssorting_batch[""]["parent_stone"] = "";
	$fieldLabelssorting_batch[""]["color"] = "Color";
	$fieldToolTipssorting_batch[""]["color"] = "";
	$placeHolderssorting_batch[""]["color"] = "";
	$fieldLabelssorting_batch[""]["clarity"] = "Clarity";
	$fieldToolTipssorting_batch[""]["clarity"] = "";
	$placeHolderssorting_batch[""]["clarity"] = "";
	$fieldLabelssorting_batch[""]["size1"] = "Size1";
	$fieldToolTipssorting_batch[""]["size1"] = "";
	$placeHolderssorting_batch[""]["size1"] = "";
	$fieldLabelssorting_batch[""]["size2"] = "Size2";
	$fieldToolTipssorting_batch[""]["size2"] = "";
	$placeHolderssorting_batch[""]["size2"] = "";
	$fieldLabelssorting_batch[""]["size3"] = "Size3";
	$fieldToolTipssorting_batch[""]["size3"] = "";
	$placeHolderssorting_batch[""]["size3"] = "";
	$fieldLabelssorting_batch[""]["fluo"] = "Fluo";
	$fieldToolTipssorting_batch[""]["fluo"] = "";
	$placeHolderssorting_batch[""]["fluo"] = "";
	$fieldLabelssorting_batch[""]["cofl"] = "Cofl";
	$fieldToolTipssorting_batch[""]["cofl"] = "";
	$placeHolderssorting_batch[""]["cofl"] = "";
	$fieldLabelssorting_batch[""]["appraiser"] = "Appraiser";
	$fieldToolTipssorting_batch[""]["appraiser"] = "";
	$placeHolderssorting_batch[""]["appraiser"] = "";
	$fieldLabelssorting_batch[""]["pol_sym"] = "Pol Sym";
	$fieldToolTipssorting_batch[""]["pol_sym"] = "";
	$placeHolderssorting_batch[""]["pol_sym"] = "";
	$fieldLabelssorting_batch[""]["pol_sym2"] = "Pol Sym2";
	$fieldToolTipssorting_batch[""]["pol_sym2"] = "";
	$placeHolderssorting_batch[""]["pol_sym2"] = "";
	$fieldLabelssorting_batch[""]["parent_stone_ref"] = "Parent Stone Ref";
	$fieldToolTipssorting_batch[""]["parent_stone_ref"] = "";
	$placeHolderssorting_batch[""]["parent_stone_ref"] = "";
	$fieldLabelssorting_batch[""]["DA_INTENSITY"] = "DA INTENSITY";
	$fieldToolTipssorting_batch[""]["DA_INTENSITY"] = "";
	$placeHolderssorting_batch[""]["DA_INTENSITY"] = "";
	$fieldLabelssorting_batch[""]["DA_OVERTONE"] = "DA OVERTONE";
	$fieldToolTipssorting_batch[""]["DA_OVERTONE"] = "";
	$placeHolderssorting_batch[""]["DA_OVERTONE"] = "";
	$fieldLabelssorting_batch[""]["color_ref"] = "Color Ref";
	$fieldToolTipssorting_batch[""]["color_ref"] = "";
	$placeHolderssorting_batch[""]["color_ref"] = "";
	$fieldLabelssorting_batch[""]["clarity_ref"] = "Clarity Ref";
	$fieldToolTipssorting_batch[""]["clarity_ref"] = "";
	$placeHolderssorting_batch[""]["clarity_ref"] = "";
	$fieldLabelssorting_batch[""]["size1_ref"] = "Size1 Ref";
	$fieldToolTipssorting_batch[""]["size1_ref"] = "";
	$placeHolderssorting_batch[""]["size1_ref"] = "";
	$fieldLabelssorting_batch[""]["size2_ref"] = "Size2 Ref";
	$fieldToolTipssorting_batch[""]["size2_ref"] = "";
	$placeHolderssorting_batch[""]["size2_ref"] = "";
	$fieldLabelssorting_batch[""]["size3_ref"] = "Size3 Ref";
	$fieldToolTipssorting_batch[""]["size3_ref"] = "";
	$placeHolderssorting_batch[""]["size3_ref"] = "";
	$fieldLabelssorting_batch[""]["fluo_cofl_ref"] = "Fluo Cofl Ref";
	$fieldToolTipssorting_batch[""]["fluo_cofl_ref"] = "";
	$placeHolderssorting_batch[""]["fluo_cofl_ref"] = "";
	$fieldLabelssorting_batch[""]["appraiser_ref"] = "Appraiser Ref";
	$fieldToolTipssorting_batch[""]["appraiser_ref"] = "";
	$placeHolderssorting_batch[""]["appraiser_ref"] = "";
	$fieldLabelssorting_batch[""]["pol_sym_ref"] = "Pol Sym Ref";
	$fieldToolTipssorting_batch[""]["pol_sym_ref"] = "";
	$placeHolderssorting_batch[""]["pol_sym_ref"] = "";
	$fieldLabelssorting_batch[""]["pol_sym2_ref"] = "Pol Sym2 Ref";
	$fieldToolTipssorting_batch[""]["pol_sym2_ref"] = "";
	$placeHolderssorting_batch[""]["pol_sym2_ref"] = "";
	$fieldLabelssorting_batch[""]["serial_number"] = "Serial Number";
	$fieldToolTipssorting_batch[""]["serial_number"] = "";
	$placeHolderssorting_batch[""]["serial_number"] = "";
	$fieldLabelssorting_batch[""]["serial_number_ref"] = "Serial Number Ref";
	$fieldToolTipssorting_batch[""]["serial_number_ref"] = "";
	$placeHolderssorting_batch[""]["serial_number_ref"] = "";
	$fieldLabelssorting_batch[""]["DA_CUT"] = "DA CUT";
	$fieldToolTipssorting_batch[""]["DA_CUT"] = "";
	$placeHolderssorting_batch[""]["DA_CUT"] = "";
	$fieldLabelssorting_batch[""]["DA_CUT_ref"] = "DA CUT Ref";
	$fieldToolTipssorting_batch[""]["DA_CUT_ref"] = "";
	$placeHolderssorting_batch[""]["DA_CUT_ref"] = "";
	$fieldLabelssorting_batch[""]["ichiba_exhibition_id"] = "Ichiba Exhibition Id";
	$fieldToolTipssorting_batch[""]["ichiba_exhibition_id"] = "";
	$placeHolderssorting_batch[""]["ichiba_exhibition_id"] = "";
	$fieldLabelssorting_batch[""]["ichiba_exhibition_sort"] = "Ichiba Exhibition Sort";
	$fieldToolTipssorting_batch[""]["ichiba_exhibition_sort"] = "";
	$placeHolderssorting_batch[""]["ichiba_exhibition_sort"] = "";
	$fieldLabelssorting_batch[""]["description"] = "Description";
	$fieldToolTipssorting_batch[""]["description"] = "";
	$placeHolderssorting_batch[""]["description"] = "";
	$fieldLabelssorting_batch[""]["Remarks"] = "Remarks";
	$fieldToolTipssorting_batch[""]["Remarks"] = "";
	$placeHolderssorting_batch[""]["Remarks"] = "";
	if (count($fieldToolTipssorting_batch[""]))
		$tdatasorting_batch[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssorting_batch["English"] = array();
	$fieldToolTipssorting_batch["English"] = array();
	$placeHolderssorting_batch["English"] = array();
	$pageTitlessorting_batch["English"] = array();
	$fieldLabelssorting_batch["English"]["text_all"] = "Text All";
	$fieldToolTipssorting_batch["English"]["text_all"] = "";
	$placeHolderssorting_batch["English"]["text_all"] = "";
	$fieldLabelssorting_batch["English"]["sorting_reflect_flag"] = "Sorting Reflect Flag";
	$fieldToolTipssorting_batch["English"]["sorting_reflect_flag"] = "";
	$placeHolderssorting_batch["English"]["sorting_reflect_flag"] = "";
	$fieldLabelssorting_batch["English"]["parent_stone"] = "Parent Stone";
	$fieldToolTipssorting_batch["English"]["parent_stone"] = "";
	$placeHolderssorting_batch["English"]["parent_stone"] = "";
	$fieldLabelssorting_batch["English"]["color"] = "Color";
	$fieldToolTipssorting_batch["English"]["color"] = "";
	$placeHolderssorting_batch["English"]["color"] = "";
	$fieldLabelssorting_batch["English"]["clarity"] = "Clarity";
	$fieldToolTipssorting_batch["English"]["clarity"] = "";
	$placeHolderssorting_batch["English"]["clarity"] = "";
	$fieldLabelssorting_batch["English"]["size1"] = "Size1";
	$fieldToolTipssorting_batch["English"]["size1"] = "";
	$placeHolderssorting_batch["English"]["size1"] = "";
	$fieldLabelssorting_batch["English"]["size2"] = "Size2";
	$fieldToolTipssorting_batch["English"]["size2"] = "";
	$placeHolderssorting_batch["English"]["size2"] = "";
	$fieldLabelssorting_batch["English"]["size3"] = "Size3";
	$fieldToolTipssorting_batch["English"]["size3"] = "";
	$placeHolderssorting_batch["English"]["size3"] = "";
	$fieldLabelssorting_batch["English"]["fluo"] = "Fluo";
	$fieldToolTipssorting_batch["English"]["fluo"] = "";
	$placeHolderssorting_batch["English"]["fluo"] = "";
	$fieldLabelssorting_batch["English"]["cofl"] = "Cofl";
	$fieldToolTipssorting_batch["English"]["cofl"] = "";
	$placeHolderssorting_batch["English"]["cofl"] = "";
	$fieldLabelssorting_batch["English"]["appraiser"] = "Appraiser";
	$fieldToolTipssorting_batch["English"]["appraiser"] = "";
	$placeHolderssorting_batch["English"]["appraiser"] = "";
	$fieldLabelssorting_batch["English"]["pol_sym"] = "Pol Sym";
	$fieldToolTipssorting_batch["English"]["pol_sym"] = "";
	$placeHolderssorting_batch["English"]["pol_sym"] = "";
	$fieldLabelssorting_batch["English"]["pol_sym2"] = "Pol Sym2";
	$fieldToolTipssorting_batch["English"]["pol_sym2"] = "";
	$placeHolderssorting_batch["English"]["pol_sym2"] = "";
	$fieldLabelssorting_batch["English"]["parent_stone_ref"] = "Parent Stone Ref";
	$fieldToolTipssorting_batch["English"]["parent_stone_ref"] = "";
	$placeHolderssorting_batch["English"]["parent_stone_ref"] = "";
	$fieldLabelssorting_batch["English"]["DA_INTENSITY"] = "DA INTENSITY";
	$fieldToolTipssorting_batch["English"]["DA_INTENSITY"] = "";
	$placeHolderssorting_batch["English"]["DA_INTENSITY"] = "";
	$fieldLabelssorting_batch["English"]["DA_OVERTONE"] = "DA OVERTONE";
	$fieldToolTipssorting_batch["English"]["DA_OVERTONE"] = "";
	$placeHolderssorting_batch["English"]["DA_OVERTONE"] = "";
	$fieldLabelssorting_batch["English"]["color_ref"] = "Color Ref";
	$fieldToolTipssorting_batch["English"]["color_ref"] = "";
	$placeHolderssorting_batch["English"]["color_ref"] = "";
	$fieldLabelssorting_batch["English"]["clarity_ref"] = "Clarity Ref";
	$fieldToolTipssorting_batch["English"]["clarity_ref"] = "";
	$placeHolderssorting_batch["English"]["clarity_ref"] = "";
	$fieldLabelssorting_batch["English"]["size1_ref"] = "Size1 Ref";
	$fieldToolTipssorting_batch["English"]["size1_ref"] = "";
	$placeHolderssorting_batch["English"]["size1_ref"] = "";
	$fieldLabelssorting_batch["English"]["size2_ref"] = "Size2 Ref";
	$fieldToolTipssorting_batch["English"]["size2_ref"] = "";
	$placeHolderssorting_batch["English"]["size2_ref"] = "";
	$fieldLabelssorting_batch["English"]["size3_ref"] = "Size3 Ref";
	$fieldToolTipssorting_batch["English"]["size3_ref"] = "";
	$placeHolderssorting_batch["English"]["size3_ref"] = "";
	$fieldLabelssorting_batch["English"]["fluo_cofl_ref"] = "Fluo Cofl Ref";
	$fieldToolTipssorting_batch["English"]["fluo_cofl_ref"] = "";
	$placeHolderssorting_batch["English"]["fluo_cofl_ref"] = "";
	$fieldLabelssorting_batch["English"]["appraiser_ref"] = "Appraiser Ref";
	$fieldToolTipssorting_batch["English"]["appraiser_ref"] = "";
	$placeHolderssorting_batch["English"]["appraiser_ref"] = "";
	$fieldLabelssorting_batch["English"]["pol_sym_ref"] = "Pol Sym Ref";
	$fieldToolTipssorting_batch["English"]["pol_sym_ref"] = "";
	$placeHolderssorting_batch["English"]["pol_sym_ref"] = "";
	$fieldLabelssorting_batch["English"]["pol_sym2_ref"] = "Pol Sym2 Ref";
	$fieldToolTipssorting_batch["English"]["pol_sym2_ref"] = "";
	$placeHolderssorting_batch["English"]["pol_sym2_ref"] = "";
	$fieldLabelssorting_batch["English"]["serial_number"] = "Serial Number";
	$fieldToolTipssorting_batch["English"]["serial_number"] = "";
	$placeHolderssorting_batch["English"]["serial_number"] = "";
	$fieldLabelssorting_batch["English"]["serial_number_ref"] = "Serial Number Ref";
	$fieldToolTipssorting_batch["English"]["serial_number_ref"] = "";
	$placeHolderssorting_batch["English"]["serial_number_ref"] = "";
	$fieldLabelssorting_batch["English"]["DA_CUT"] = "DA CUT";
	$fieldToolTipssorting_batch["English"]["DA_CUT"] = "";
	$placeHolderssorting_batch["English"]["DA_CUT"] = "";
	$fieldLabelssorting_batch["English"]["DA_CUT_ref"] = "DA CUT Ref";
	$fieldToolTipssorting_batch["English"]["DA_CUT_ref"] = "";
	$placeHolderssorting_batch["English"]["DA_CUT_ref"] = "";
	$fieldLabelssorting_batch["English"]["ichiba_exhibition_id"] = "Ichiba Exhibition Id";
	$fieldToolTipssorting_batch["English"]["ichiba_exhibition_id"] = "";
	$placeHolderssorting_batch["English"]["ichiba_exhibition_id"] = "";
	$fieldLabelssorting_batch["English"]["ichiba_exhibition_sort"] = "Ichiba Exhibition Sort";
	$fieldToolTipssorting_batch["English"]["ichiba_exhibition_sort"] = "";
	$placeHolderssorting_batch["English"]["ichiba_exhibition_sort"] = "";
	$fieldLabelssorting_batch["English"]["description"] = "Description";
	$fieldToolTipssorting_batch["English"]["description"] = "";
	$placeHolderssorting_batch["English"]["description"] = "";
	$fieldLabelssorting_batch["English"]["Remarks"] = "Remarks";
	$fieldToolTipssorting_batch["English"]["Remarks"] = "";
	$placeHolderssorting_batch["English"]["Remarks"] = "";
	if (count($fieldToolTipssorting_batch["English"]))
		$tdatasorting_batch[".isUseToolTips"] = true;
}


	$tdatasorting_batch[".NCSearch"] = true;



$tdatasorting_batch[".shortTableName"] = "sorting_batch";
$tdatasorting_batch[".nSecOptions"] = 0;
$tdatasorting_batch[".recsPerRowPrint"] = 1;
$tdatasorting_batch[".mainTableOwnerID"] = "";
$tdatasorting_batch[".moveNext"] = 1;
$tdatasorting_batch[".entityType"] = 1;

$tdatasorting_batch[".strOriginalTableName"] = "shouhin";

	



$tdatasorting_batch[".showAddInPopup"] = false;

$tdatasorting_batch[".showEditInPopup"] = false;

$tdatasorting_batch[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasorting_batch[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasorting_batch[".fieldsForRegister"] = array();

$tdatasorting_batch[".listAjax"] = false;

	$tdatasorting_batch[".audit"] = true;

	$tdatasorting_batch[".locking"] = false;



$tdatasorting_batch[".list"] = true;

$tdatasorting_batch[".inlineEdit"] = true;


$tdatasorting_batch[".reorderRecordsByHeader"] = true;
$tdatasorting_batch[".createSortByDropdown"] = true;
$tdatasorting_batch[".strSortControlSettingsJSON"] = "";




$tdatasorting_batch[".import"] = true;

$tdatasorting_batch[".exportTo"] = true;



$tdatasorting_batch[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatasorting_batch[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatasorting_batch[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatasorting_batch[".searchSaving"] = false;
//

$tdatasorting_batch[".showSearchPanel"] = true;
		$tdatasorting_batch[".flexibleSearch"] = true;

$tdatasorting_batch[".isUseAjaxSuggest"] = true;

$tdatasorting_batch[".rowHighlite"] = true;



																																																																																																																																																																																										
					
					
					
					
					
																																			

$tdatasorting_batch[".ajaxCodeSnippetAdded"] = false;

$tdatasorting_batch[".buttonsAdded"] = true;

$tdatasorting_batch[".addPageEvents"] = true;

// use timepicker for search panel
$tdatasorting_batch[".isUseTimeForSearch"] = false;



$tdatasorting_batch[".badgeColor"] = "4682B4";


$tdatasorting_batch[".allSearchFields"] = array();
$tdatasorting_batch[".filterFields"] = array();
$tdatasorting_batch[".requiredSearchFields"] = array();

$tdatasorting_batch[".allSearchFields"][] = "Remarks";
	$tdatasorting_batch[".allSearchFields"][] = "description";
	$tdatasorting_batch[".allSearchFields"][] = "ichiba_exhibition_id";
	$tdatasorting_batch[".allSearchFields"][] = "product_id";
	$tdatasorting_batch[".allSearchFields"][] = "status";
	$tdatasorting_batch[".allSearchFields"][] = "text_all";
	$tdatasorting_batch[".allSearchFields"][] = "parent_stone";
	$tdatasorting_batch[".allSearchFields"][] = "DA_INTENSITY";
	$tdatasorting_batch[".allSearchFields"][] = "DA_OVERTONE";
	$tdatasorting_batch[".allSearchFields"][] = "color";
	$tdatasorting_batch[".allSearchFields"][] = "clarity";
	$tdatasorting_batch[".allSearchFields"][] = "size1";
	$tdatasorting_batch[".allSearchFields"][] = "size2";
	$tdatasorting_batch[".allSearchFields"][] = "size3";
	$tdatasorting_batch[".allSearchFields"][] = "fluo";
	$tdatasorting_batch[".allSearchFields"][] = "cofl";
	$tdatasorting_batch[".allSearchFields"][] = "appraiser";
	$tdatasorting_batch[".allSearchFields"][] = "pol_sym";
	$tdatasorting_batch[".allSearchFields"][] = "pol_sym2";
	$tdatasorting_batch[".allSearchFields"][] = "serial_number";
	$tdatasorting_batch[".allSearchFields"][] = "DA_CUT";
	$tdatasorting_batch[".allSearchFields"][] = "ichiba_exhibition_sort";
	

$tdatasorting_batch[".googleLikeFields"] = array();
$tdatasorting_batch[".googleLikeFields"][] = "status";
$tdatasorting_batch[".googleLikeFields"][] = "product_id";
$tdatasorting_batch[".googleLikeFields"][] = "text_all";
$tdatasorting_batch[".googleLikeFields"][] = "sorting_reflect_flag";
$tdatasorting_batch[".googleLikeFields"][] = "parent_stone";
$tdatasorting_batch[".googleLikeFields"][] = "DA_INTENSITY";
$tdatasorting_batch[".googleLikeFields"][] = "DA_OVERTONE";
$tdatasorting_batch[".googleLikeFields"][] = "color";
$tdatasorting_batch[".googleLikeFields"][] = "clarity";
$tdatasorting_batch[".googleLikeFields"][] = "size1";
$tdatasorting_batch[".googleLikeFields"][] = "size2";
$tdatasorting_batch[".googleLikeFields"][] = "size3";
$tdatasorting_batch[".googleLikeFields"][] = "fluo";
$tdatasorting_batch[".googleLikeFields"][] = "cofl";
$tdatasorting_batch[".googleLikeFields"][] = "appraiser";
$tdatasorting_batch[".googleLikeFields"][] = "pol_sym";
$tdatasorting_batch[".googleLikeFields"][] = "pol_sym2";
$tdatasorting_batch[".googleLikeFields"][] = "serial_number";
$tdatasorting_batch[".googleLikeFields"][] = "DA_CUT";
$tdatasorting_batch[".googleLikeFields"][] = "ichiba_exhibition_id";
$tdatasorting_batch[".googleLikeFields"][] = "ichiba_exhibition_sort";
$tdatasorting_batch[".googleLikeFields"][] = "description";
$tdatasorting_batch[".googleLikeFields"][] = "Remarks";

$tdatasorting_batch[".panelSearchFields"] = array();
$tdatasorting_batch[".searchPanelOptions"] = array();
$tdatasorting_batch[".panelSearchFields"][] = "description";
	$tdatasorting_batch[".panelSearchFields"][] = "ichiba_exhibition_id";
	$tdatasorting_batch[".panelSearchFields"][] = "product_id";
	$tdatasorting_batch[".panelSearchFields"][] = "status";
	
$tdatasorting_batch[".advSearchFields"] = array();
$tdatasorting_batch[".advSearchFields"][] = "Remarks";
$tdatasorting_batch[".advSearchFields"][] = "description";
$tdatasorting_batch[".advSearchFields"][] = "ichiba_exhibition_id";
$tdatasorting_batch[".advSearchFields"][] = "product_id";
$tdatasorting_batch[".advSearchFields"][] = "status";
$tdatasorting_batch[".advSearchFields"][] = "text_all";
$tdatasorting_batch[".advSearchFields"][] = "parent_stone";
$tdatasorting_batch[".advSearchFields"][] = "DA_INTENSITY";
$tdatasorting_batch[".advSearchFields"][] = "DA_OVERTONE";
$tdatasorting_batch[".advSearchFields"][] = "color";
$tdatasorting_batch[".advSearchFields"][] = "clarity";
$tdatasorting_batch[".advSearchFields"][] = "size1";
$tdatasorting_batch[".advSearchFields"][] = "size2";
$tdatasorting_batch[".advSearchFields"][] = "size3";
$tdatasorting_batch[".advSearchFields"][] = "fluo";
$tdatasorting_batch[".advSearchFields"][] = "cofl";
$tdatasorting_batch[".advSearchFields"][] = "appraiser";
$tdatasorting_batch[".advSearchFields"][] = "pol_sym";
$tdatasorting_batch[".advSearchFields"][] = "pol_sym2";
$tdatasorting_batch[".advSearchFields"][] = "serial_number";
$tdatasorting_batch[".advSearchFields"][] = "DA_CUT";
$tdatasorting_batch[".advSearchFields"][] = "ichiba_exhibition_sort";

$tdatasorting_batch[".tableType"] = "list";

$tdatasorting_batch[".printerPageOrientation"] = 0;
$tdatasorting_batch[".nPrinterPageScale"] = 100;

$tdatasorting_batch[".nPrinterSplitRecords"] = 40;

$tdatasorting_batch[".nPrinterPDFSplitRecords"] = 40;



$tdatasorting_batch[".geocodingEnabled"] = false;





$tdatasorting_batch[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatasorting_batch[".pageSize"] = 100;

$tdatasorting_batch[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `shouhin`.`product_id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasorting_batch[".strOrderBy"] = $tstrOrderBy;

$tdatasorting_batch[".orderindexes"] = array();
$tdatasorting_batch[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "`shouhin`.`product_id`");

$tdatasorting_batch[".sqlHead"] = "SELECT `shouhin`.`status`,  `shouhin`.`product_id`,  `DIA_QR_reading`.`text_all`,  `DIA_QR_reading`.`sorting_reflect_flag`,  `shouhin`.`Parent_stone` AS `parent_stone`,  '' AS `parent_stone_ref`,  `shouhin`.`DA_INTENSITY`,  `shouhin`.`DA_OVERTONE`,  `shouhin`.`DA_COLOR` AS `color`,  '' AS `color_ref`,  `shouhin`.`DA_CLARITY` AS `clarity`,  '' AS `clarity_ref`,  `shouhin`.`DA_WIDE` AS `size1`,  '' AS `size1_ref`,  `shouhin`.`DA_HIGH` AS `size2`,  '' AS `size2_ref`,  `shouhin`.`DA_DEPTH` AS `size3`,  '' AS `size3_ref`,  `shouhin`.`DA_FLUO` AS `fluo`,  `shouhin`.`DA_COLOR_FLUO` AS `cofl`,  '' AS `fluo_cofl_ref`,  `shouhin`.`Appraiser` AS `appraiser`,  '' AS `appraiser_ref`,  `shouhin`.`DA_POLISH` AS `pol_sym`,  '' AS `pol_sym_ref`,  `shouhin`.`DA_SYMMETRY` AS `pol_sym2`,  '' AS `pol_sym2_ref`,  `shouhin`.`serial_number`,  '' AS `serial_number_ref`,  `shouhin`.`DA_CUT`,  '' AS `DA_CUT_ref`,  `shouhin`.`ichiba_exhibition_id`,  `shouhin`.`ichiba_exhibition_sort`,  `shouhin`.`description`,  `shouhin`.`Remarks`";
$tdatasorting_batch[".sqlFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `DIA_QR_reading` ON `shouhin`.`product_id` = `DIA_QR_reading`.`product_id`";
$tdatasorting_batch[".sqlWhereExpr"] = "(`DIA_QR_reading`.`text_all` != '') AND (`DIA_QR_reading`.`sorting_reflect_flag` is null OR `DIA_QR_reading`.`sorting_reflect_flag` = 0)";
$tdatasorting_batch[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasorting_batch[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasorting_batch[".arrGroupsPerPage"] = $arrGPP;

$tdatasorting_batch[".highlightSearchResults"] = true;

$tableKeyssorting_batch = array();
$tableKeyssorting_batch[] = "product_id";
$tdatasorting_batch[".Keys"] = $tableKeyssorting_batch;

$tdatasorting_batch[".listFields"] = array();
$tdatasorting_batch[".listFields"][] = "ichiba_exhibition_sort";
$tdatasorting_batch[".listFields"][] = "ichiba_exhibition_id";
$tdatasorting_batch[".listFields"][] = "product_id";
$tdatasorting_batch[".listFields"][] = "status";
$tdatasorting_batch[".listFields"][] = "description";
$tdatasorting_batch[".listFields"][] = "Remarks";
$tdatasorting_batch[".listFields"][] = "serial_number_ref";
$tdatasorting_batch[".listFields"][] = "DA_CUT";
$tdatasorting_batch[".listFields"][] = "DA_CUT_ref";
$tdatasorting_batch[".listFields"][] = "serial_number";
$tdatasorting_batch[".listFields"][] = "text_all";
$tdatasorting_batch[".listFields"][] = "parent_stone";
$tdatasorting_batch[".listFields"][] = "parent_stone_ref";
$tdatasorting_batch[".listFields"][] = "DA_INTENSITY";
$tdatasorting_batch[".listFields"][] = "DA_OVERTONE";
$tdatasorting_batch[".listFields"][] = "color";
$tdatasorting_batch[".listFields"][] = "color_ref";
$tdatasorting_batch[".listFields"][] = "clarity";
$tdatasorting_batch[".listFields"][] = "clarity_ref";
$tdatasorting_batch[".listFields"][] = "size1";
$tdatasorting_batch[".listFields"][] = "size1_ref";
$tdatasorting_batch[".listFields"][] = "size2";
$tdatasorting_batch[".listFields"][] = "size2_ref";
$tdatasorting_batch[".listFields"][] = "size3";
$tdatasorting_batch[".listFields"][] = "size3_ref";
$tdatasorting_batch[".listFields"][] = "fluo";
$tdatasorting_batch[".listFields"][] = "cofl";
$tdatasorting_batch[".listFields"][] = "fluo_cofl_ref";
$tdatasorting_batch[".listFields"][] = "appraiser";
$tdatasorting_batch[".listFields"][] = "appraiser_ref";
$tdatasorting_batch[".listFields"][] = "pol_sym";
$tdatasorting_batch[".listFields"][] = "pol_sym_ref";
$tdatasorting_batch[".listFields"][] = "pol_sym2";
$tdatasorting_batch[".listFields"][] = "pol_sym2_ref";

$tdatasorting_batch[".hideMobileList"] = array();


$tdatasorting_batch[".viewFields"] = array();

$tdatasorting_batch[".addFields"] = array();

$tdatasorting_batch[".masterListFields"] = array();
$tdatasorting_batch[".masterListFields"][] = "text_all";
$tdatasorting_batch[".masterListFields"][] = "sorting_reflect_flag";
$tdatasorting_batch[".masterListFields"][] = "parent_stone";
$tdatasorting_batch[".masterListFields"][] = "parent_stone_ref";
$tdatasorting_batch[".masterListFields"][] = "DA_INTENSITY";
$tdatasorting_batch[".masterListFields"][] = "DA_OVERTONE";
$tdatasorting_batch[".masterListFields"][] = "color";
$tdatasorting_batch[".masterListFields"][] = "color_ref";
$tdatasorting_batch[".masterListFields"][] = "clarity";
$tdatasorting_batch[".masterListFields"][] = "clarity_ref";
$tdatasorting_batch[".masterListFields"][] = "size1";
$tdatasorting_batch[".masterListFields"][] = "size1_ref";
$tdatasorting_batch[".masterListFields"][] = "size2";
$tdatasorting_batch[".masterListFields"][] = "size2_ref";
$tdatasorting_batch[".masterListFields"][] = "size3";
$tdatasorting_batch[".masterListFields"][] = "size3_ref";
$tdatasorting_batch[".masterListFields"][] = "fluo";
$tdatasorting_batch[".masterListFields"][] = "cofl";
$tdatasorting_batch[".masterListFields"][] = "fluo_cofl_ref";
$tdatasorting_batch[".masterListFields"][] = "appraiser";
$tdatasorting_batch[".masterListFields"][] = "appraiser_ref";
$tdatasorting_batch[".masterListFields"][] = "pol_sym";
$tdatasorting_batch[".masterListFields"][] = "pol_sym_ref";
$tdatasorting_batch[".masterListFields"][] = "pol_sym2";
$tdatasorting_batch[".masterListFields"][] = "pol_sym2_ref";
$tdatasorting_batch[".masterListFields"][] = "serial_number";
$tdatasorting_batch[".masterListFields"][] = "serial_number_ref";
$tdatasorting_batch[".masterListFields"][] = "DA_CUT";
$tdatasorting_batch[".masterListFields"][] = "DA_CUT_ref";
$tdatasorting_batch[".masterListFields"][] = "ichiba_exhibition_id";
$tdatasorting_batch[".masterListFields"][] = "ichiba_exhibition_sort";
$tdatasorting_batch[".masterListFields"][] = "description";
$tdatasorting_batch[".masterListFields"][] = "Remarks";
$tdatasorting_batch[".masterListFields"][] = "status";
$tdatasorting_batch[".masterListFields"][] = "product_id";

$tdatasorting_batch[".inlineAddFields"] = array();

$tdatasorting_batch[".editFields"] = array();

$tdatasorting_batch[".inlineEditFields"] = array();
$tdatasorting_batch[".inlineEditFields"][] = "ichiba_exhibition_sort";
$tdatasorting_batch[".inlineEditFields"][] = "ichiba_exhibition_id";
$tdatasorting_batch[".inlineEditFields"][] = "status";
$tdatasorting_batch[".inlineEditFields"][] = "description";
$tdatasorting_batch[".inlineEditFields"][] = "Remarks";
$tdatasorting_batch[".inlineEditFields"][] = "DA_CUT";
$tdatasorting_batch[".inlineEditFields"][] = "serial_number";
$tdatasorting_batch[".inlineEditFields"][] = "parent_stone";
$tdatasorting_batch[".inlineEditFields"][] = "DA_INTENSITY";
$tdatasorting_batch[".inlineEditFields"][] = "DA_OVERTONE";
$tdatasorting_batch[".inlineEditFields"][] = "color";
$tdatasorting_batch[".inlineEditFields"][] = "clarity";
$tdatasorting_batch[".inlineEditFields"][] = "size1";
$tdatasorting_batch[".inlineEditFields"][] = "size2";
$tdatasorting_batch[".inlineEditFields"][] = "size3";
$tdatasorting_batch[".inlineEditFields"][] = "fluo";
$tdatasorting_batch[".inlineEditFields"][] = "cofl";
$tdatasorting_batch[".inlineEditFields"][] = "appraiser";
$tdatasorting_batch[".inlineEditFields"][] = "pol_sym";
$tdatasorting_batch[".inlineEditFields"][] = "pol_sym2";

$tdatasorting_batch[".updateSelectedFields"] = array();


$tdatasorting_batch[".exportFields"] = array();
$tdatasorting_batch[".exportFields"][] = "text_all";
$tdatasorting_batch[".exportFields"][] = "parent_stone";
$tdatasorting_batch[".exportFields"][] = "DA_INTENSITY";
$tdatasorting_batch[".exportFields"][] = "DA_OVERTONE";
$tdatasorting_batch[".exportFields"][] = "color";
$tdatasorting_batch[".exportFields"][] = "color_ref";
$tdatasorting_batch[".exportFields"][] = "clarity";
$tdatasorting_batch[".exportFields"][] = "clarity_ref";
$tdatasorting_batch[".exportFields"][] = "size1";
$tdatasorting_batch[".exportFields"][] = "size1_ref";
$tdatasorting_batch[".exportFields"][] = "size2";
$tdatasorting_batch[".exportFields"][] = "size2_ref";
$tdatasorting_batch[".exportFields"][] = "size3";
$tdatasorting_batch[".exportFields"][] = "size3_ref";
$tdatasorting_batch[".exportFields"][] = "fluo";
$tdatasorting_batch[".exportFields"][] = "cofl";
$tdatasorting_batch[".exportFields"][] = "fluo_cofl_ref";
$tdatasorting_batch[".exportFields"][] = "appraiser";
$tdatasorting_batch[".exportFields"][] = "appraiser_ref";
$tdatasorting_batch[".exportFields"][] = "pol_sym";
$tdatasorting_batch[".exportFields"][] = "pol_sym_ref";
$tdatasorting_batch[".exportFields"][] = "pol_sym2";
$tdatasorting_batch[".exportFields"][] = "pol_sym2_ref";
$tdatasorting_batch[".exportFields"][] = "serial_number";
$tdatasorting_batch[".exportFields"][] = "serial_number_ref";
$tdatasorting_batch[".exportFields"][] = "DA_CUT";
$tdatasorting_batch[".exportFields"][] = "DA_CUT_ref";
$tdatasorting_batch[".exportFields"][] = "ichiba_exhibition_id";
$tdatasorting_batch[".exportFields"][] = "ichiba_exhibition_sort";
$tdatasorting_batch[".exportFields"][] = "description";
$tdatasorting_batch[".exportFields"][] = "Remarks";
$tdatasorting_batch[".exportFields"][] = "status";
$tdatasorting_batch[".exportFields"][] = "product_id";

$tdatasorting_batch[".importFields"] = array();
$tdatasorting_batch[".importFields"][] = "serial_number";
$tdatasorting_batch[".importFields"][] = "serial_number_ref";
$tdatasorting_batch[".importFields"][] = "DA_CUT";
$tdatasorting_batch[".importFields"][] = "DA_CUT_ref";
$tdatasorting_batch[".importFields"][] = "ichiba_exhibition_id";
$tdatasorting_batch[".importFields"][] = "ichiba_exhibition_sort";
$tdatasorting_batch[".importFields"][] = "description";
$tdatasorting_batch[".importFields"][] = "Remarks";

$tdatasorting_batch[".printFields"] = array();

//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`status`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasorting_batch["status"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","product_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`product_id`";

	
	
				$fdata["FieldPermissions"] = true;

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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatasorting_batch["product_id"] = $fdata;
//	text_all
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "text_all";
	$fdata["GoodName"] = "text_all";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("sorting_batch","text_all");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "text_all";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DIA_QR_reading`.`text_all`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasorting_batch["text_all"] = $fdata;
//	sorting_reflect_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sorting_reflect_flag";
	$fdata["GoodName"] = "sorting_reflect_flag";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("sorting_batch","sorting_reflect_flag");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "sorting_reflect_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DIA_QR_reading`.`sorting_reflect_flag`";

	
	
			
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








	$tdatasorting_batch["sorting_reflect_flag"] = $fdata;
//	parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "parent_stone";
	$fdata["GoodName"] = "parent_stone";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","parent_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Parent_stone`";

	
	
				$fdata["FieldPermissions"] = true;

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
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

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




	$tdatasorting_batch["parent_stone"] = $fdata;
//	parent_stone_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "parent_stone_ref";
	$fdata["GoodName"] = "parent_stone_ref";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sorting_batch","parent_stone_ref");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "parent_stone_ref";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

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








	$tdatasorting_batch["parent_stone_ref"] = $fdata;
//	DA_INTENSITY
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DA_INTENSITY";
	$fdata["GoodName"] = "DA_INTENSITY";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","DA_INTENSITY");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_INTENSITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_INTENSITY`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LinkFieldType"] = 0;
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




	$tdatasorting_batch["DA_INTENSITY"] = $fdata;
//	DA_OVERTONE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "DA_OVERTONE";
	$fdata["GoodName"] = "DA_OVERTONE";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","DA_OVERTONE");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_OVERTONE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_OVERTONE`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LinkFieldType"] = 0;
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




	$tdatasorting_batch["DA_OVERTONE"] = $fdata;
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","color");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_COLOR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_COLOR`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasorting_batch["color"] = $fdata;
//	color_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "color_ref";
	$fdata["GoodName"] = "color_ref";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sorting_batch","color_ref");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "color_ref";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

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








	$tdatasorting_batch["color_ref"] = $fdata;
//	clarity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "clarity";
	$fdata["GoodName"] = "clarity";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","clarity");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_CLARITY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_CLARITY`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasorting_batch["clarity"] = $fdata;
//	clarity_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "clarity_ref";
	$fdata["GoodName"] = "clarity_ref";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sorting_batch","clarity_ref");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "clarity_ref";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

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








	$tdatasorting_batch["clarity_ref"] = $fdata;
//	size1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "size1";
	$fdata["GoodName"] = "size1";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","size1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_WIDE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_WIDE`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasorting_batch["size1"] = $fdata;
//	size1_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "size1_ref";
	$fdata["GoodName"] = "size1_ref";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sorting_batch","size1_ref");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "size1_ref";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

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








	$tdatasorting_batch["size1_ref"] = $fdata;
//	size2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "size2";
	$fdata["GoodName"] = "size2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","size2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_HIGH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_HIGH`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasorting_batch["size2"] = $fdata;
//	size2_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "size2_ref";
	$fdata["GoodName"] = "size2_ref";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sorting_batch","size2_ref");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "size2_ref";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

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








	$tdatasorting_batch["size2_ref"] = $fdata;
//	size3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "size3";
	$fdata["GoodName"] = "size3";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","size3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_DEPTH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_DEPTH`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasorting_batch["size3"] = $fdata;
//	size3_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "size3_ref";
	$fdata["GoodName"] = "size3_ref";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sorting_batch","size3_ref");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "size3_ref";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

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








	$tdatasorting_batch["size3_ref"] = $fdata;
//	fluo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "fluo";
	$fdata["GoodName"] = "fluo";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","fluo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_FLUO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_FLUO`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasorting_batch["fluo"] = $fdata;
//	cofl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cofl";
	$fdata["GoodName"] = "cofl";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","cofl");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_COLOR_FLUO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_COLOR_FLUO`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LinkFieldType"] = 0;
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




	$tdatasorting_batch["cofl"] = $fdata;
//	fluo_cofl_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "fluo_cofl_ref";
	$fdata["GoodName"] = "fluo_cofl_ref";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sorting_batch","fluo_cofl_ref");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fluo_cofl_ref";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

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








	$tdatasorting_batch["fluo_cofl_ref"] = $fdata;
//	appraiser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "appraiser";
	$fdata["GoodName"] = "appraiser";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","appraiser");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Appraiser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Appraiser`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "mst_Appraiser";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "val";
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




	$tdatasorting_batch["appraiser"] = $fdata;
//	appraiser_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "appraiser_ref";
	$fdata["GoodName"] = "appraiser_ref";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sorting_batch","appraiser_ref");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "appraiser_ref";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

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








	$tdatasorting_batch["appraiser_ref"] = $fdata;
//	pol_sym
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "pol_sym";
	$fdata["GoodName"] = "pol_sym";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","pol_sym");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_POLISH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_POLISH`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["DisplayField"] = "name";

	
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




	$tdatasorting_batch["pol_sym"] = $fdata;
//	pol_sym_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "pol_sym_ref";
	$fdata["GoodName"] = "pol_sym_ref";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sorting_batch","pol_sym_ref");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "pol_sym_ref";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

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








	$tdatasorting_batch["pol_sym_ref"] = $fdata;
//	pol_sym2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "pol_sym2";
	$fdata["GoodName"] = "pol_sym2";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","pol_sym2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_SYMMETRY";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_SYMMETRY`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["DisplayField"] = "name";

	
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




	$tdatasorting_batch["pol_sym2"] = $fdata;
//	pol_sym2_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "pol_sym2_ref";
	$fdata["GoodName"] = "pol_sym2_ref";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sorting_batch","pol_sym2_ref");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "pol_sym2_ref";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

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








	$tdatasorting_batch["pol_sym2_ref"] = $fdata;
//	serial_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "serial_number";
	$fdata["GoodName"] = "serial_number";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","serial_number");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "serial_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`serial_number`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasorting_batch["serial_number"] = $fdata;
//	serial_number_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "serial_number_ref";
	$fdata["GoodName"] = "serial_number_ref";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sorting_batch","serial_number_ref");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "serial_number_ref";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

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








	$tdatasorting_batch["serial_number_ref"] = $fdata;
//	DA_CUT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "DA_CUT";
	$fdata["GoodName"] = "DA_CUT";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","DA_CUT");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_CUT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`DA_CUT`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasorting_batch["DA_CUT"] = $fdata;
//	DA_CUT_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "DA_CUT_ref";
	$fdata["GoodName"] = "DA_CUT_ref";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sorting_batch","DA_CUT_ref");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "DA_CUT_ref";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "''";

	
	
				$fdata["FieldPermissions"] = true;

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








	$tdatasorting_batch["DA_CUT_ref"] = $fdata;
//	ichiba_exhibition_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "ichiba_exhibition_id";
	$fdata["GoodName"] = "ichiba_exhibition_id";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","ichiba_exhibition_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_exhibition_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`ichiba_exhibition_id`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasorting_batch["ichiba_exhibition_id"] = $fdata;
//	ichiba_exhibition_sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "ichiba_exhibition_sort";
	$fdata["GoodName"] = "ichiba_exhibition_sort";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","ichiba_exhibition_sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ichiba_exhibition_sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`ichiba_exhibition_sort`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasorting_batch["ichiba_exhibition_sort"] = $fdata;
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","description");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`description`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdatasorting_batch["description"] = $fdata;
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("sorting_batch","Remarks");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Remarks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`shouhin`.`Remarks`";

	
	
				$fdata["FieldPermissions"] = true;

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
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

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




	$tdatasorting_batch["Remarks"] = $fdata;


$tables_data["sorting_batch"]=&$tdatasorting_batch;
$field_labels["sorting_batch"] = &$fieldLabelssorting_batch;
$fieldToolTips["sorting_batch"] = &$fieldToolTipssorting_batch;
$placeHolders["sorting_batch"] = &$placeHolderssorting_batch;
$page_titles["sorting_batch"] = &$pageTitlessorting_batch;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sorting_batch"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["sorting_batch"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sorting_batch()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`shouhin`.`status`,  `shouhin`.`product_id`,  `DIA_QR_reading`.`text_all`,  `DIA_QR_reading`.`sorting_reflect_flag`,  `shouhin`.`Parent_stone` AS `parent_stone`,  '' AS `parent_stone_ref`,  `shouhin`.`DA_INTENSITY`,  `shouhin`.`DA_OVERTONE`,  `shouhin`.`DA_COLOR` AS `color`,  '' AS `color_ref`,  `shouhin`.`DA_CLARITY` AS `clarity`,  '' AS `clarity_ref`,  `shouhin`.`DA_WIDE` AS `size1`,  '' AS `size1_ref`,  `shouhin`.`DA_HIGH` AS `size2`,  '' AS `size2_ref`,  `shouhin`.`DA_DEPTH` AS `size3`,  '' AS `size3_ref`,  `shouhin`.`DA_FLUO` AS `fluo`,  `shouhin`.`DA_COLOR_FLUO` AS `cofl`,  '' AS `fluo_cofl_ref`,  `shouhin`.`Appraiser` AS `appraiser`,  '' AS `appraiser_ref`,  `shouhin`.`DA_POLISH` AS `pol_sym`,  '' AS `pol_sym_ref`,  `shouhin`.`DA_SYMMETRY` AS `pol_sym2`,  '' AS `pol_sym2_ref`,  `shouhin`.`serial_number`,  '' AS `serial_number_ref`,  `shouhin`.`DA_CUT`,  '' AS `DA_CUT_ref`,  `shouhin`.`ichiba_exhibition_id`,  `shouhin`.`ichiba_exhibition_sort`,  `shouhin`.`description`,  `shouhin`.`Remarks`";
$proto0["m_strFrom"] = "FROM `shouhin`  LEFT OUTER JOIN `DIA_QR_reading` ON `shouhin`.`product_id` = `DIA_QR_reading`.`product_id`";
$proto0["m_strWhere"] = "(`DIA_QR_reading`.`text_all` != '') AND (`DIA_QR_reading`.`sorting_reflect_flag` is null OR `DIA_QR_reading`.`sorting_reflect_flag` = 0)";
$proto0["m_strOrderBy"] = "ORDER BY `shouhin`.`product_id` DESC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(`DIA_QR_reading`.`text_all` != '') AND (`DIA_QR_reading`.`sorting_reflect_flag` is null OR `DIA_QR_reading`.`sorting_reflect_flag` = 0)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(`DIA_QR_reading`.`text_all` != '') AND (`DIA_QR_reading`.`sorting_reflect_flag` is null OR `DIA_QR_reading`.`sorting_reflect_flag` = 0)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`DIA_QR_reading`.`text_all` != ''";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "text_all",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "sorting_batch"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "!= ''";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "`DIA_QR_reading`.`sorting_reflect_flag` is null OR `DIA_QR_reading`.`sorting_reflect_flag` = 0";
$proto6["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`DIA_QR_reading`.`sorting_reflect_flag` is null OR `DIA_QR_reading`.`sorting_reflect_flag` = 0"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
						$proto8=array();
$proto8["m_sql"] = "`DIA_QR_reading`.`sorting_reflect_flag` is null";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sorting_reflect_flag",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "sorting_batch"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "is null";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto6["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "`DIA_QR_reading`.`sorting_reflect_flag` = 0";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sorting_reflect_flag",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "sorting_batch"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "= 0";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto6["m_contained"][]=$obj;
$proto6["m_strCase"] = "";
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
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto14["m_sql"] = "`shouhin`.`status`";
$proto14["m_srcTableName"] = "sorting_batch";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto16["m_sql"] = "`shouhin`.`product_id`";
$proto16["m_srcTableName"] = "sorting_batch";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "text_all",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "sorting_batch"
));

$proto18["m_sql"] = "`DIA_QR_reading`.`text_all`";
$proto18["m_srcTableName"] = "sorting_batch";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sorting_reflect_flag",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "sorting_batch"
));

$proto20["m_sql"] = "`DIA_QR_reading`.`sorting_reflect_flag`";
$proto20["m_srcTableName"] = "sorting_batch";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Parent_stone",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto22["m_sql"] = "`shouhin`.`Parent_stone`";
$proto22["m_srcTableName"] = "sorting_batch";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "parent_stone";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto24["m_sql"] = "''";
$proto24["m_srcTableName"] = "sorting_batch";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "parent_stone_ref";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_INTENSITY",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto26["m_sql"] = "`shouhin`.`DA_INTENSITY`";
$proto26["m_srcTableName"] = "sorting_batch";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_OVERTONE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto28["m_sql"] = "`shouhin`.`DA_OVERTONE`";
$proto28["m_srcTableName"] = "sorting_batch";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_COLOR",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto30["m_sql"] = "`shouhin`.`DA_COLOR`";
$proto30["m_srcTableName"] = "sorting_batch";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "color";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto32["m_sql"] = "''";
$proto32["m_srcTableName"] = "sorting_batch";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "color_ref";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_CLARITY",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto34["m_sql"] = "`shouhin`.`DA_CLARITY`";
$proto34["m_srcTableName"] = "sorting_batch";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "clarity";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto36["m_sql"] = "''";
$proto36["m_srcTableName"] = "sorting_batch";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "clarity_ref";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_WIDE",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto38["m_sql"] = "`shouhin`.`DA_WIDE`";
$proto38["m_srcTableName"] = "sorting_batch";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "size1";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto40["m_sql"] = "''";
$proto40["m_srcTableName"] = "sorting_batch";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "size1_ref";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_HIGH",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto42["m_sql"] = "`shouhin`.`DA_HIGH`";
$proto42["m_srcTableName"] = "sorting_batch";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "size2";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto44["m_sql"] = "''";
$proto44["m_srcTableName"] = "sorting_batch";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "size2_ref";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_DEPTH",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto46["m_sql"] = "`shouhin`.`DA_DEPTH`";
$proto46["m_srcTableName"] = "sorting_batch";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "size3";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto48["m_sql"] = "''";
$proto48["m_srcTableName"] = "sorting_batch";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "size3_ref";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_FLUO",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto50["m_sql"] = "`shouhin`.`DA_FLUO`";
$proto50["m_srcTableName"] = "sorting_batch";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "fluo";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_COLOR_FLUO",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto52["m_sql"] = "`shouhin`.`DA_COLOR_FLUO`";
$proto52["m_srcTableName"] = "sorting_batch";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "cofl";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto54["m_sql"] = "''";
$proto54["m_srcTableName"] = "sorting_batch";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "fluo_cofl_ref";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Appraiser",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto56["m_sql"] = "`shouhin`.`Appraiser`";
$proto56["m_srcTableName"] = "sorting_batch";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "appraiser";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto58["m_sql"] = "''";
$proto58["m_srcTableName"] = "sorting_batch";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "appraiser_ref";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_POLISH",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto60["m_sql"] = "`shouhin`.`DA_POLISH`";
$proto60["m_srcTableName"] = "sorting_batch";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "pol_sym";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto62["m_sql"] = "''";
$proto62["m_srcTableName"] = "sorting_batch";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "pol_sym_ref";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_SYMMETRY",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto64["m_sql"] = "`shouhin`.`DA_SYMMETRY`";
$proto64["m_srcTableName"] = "sorting_batch";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "pol_sym2";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto66["m_sql"] = "''";
$proto66["m_srcTableName"] = "sorting_batch";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "pol_sym2_ref";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "serial_number",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto68["m_sql"] = "`shouhin`.`serial_number`";
$proto68["m_srcTableName"] = "sorting_batch";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto70["m_sql"] = "''";
$proto70["m_srcTableName"] = "sorting_batch";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "serial_number_ref";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "DA_CUT",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto72["m_sql"] = "`shouhin`.`DA_CUT`";
$proto72["m_srcTableName"] = "sorting_batch";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "''"
));

$proto74["m_sql"] = "''";
$proto74["m_srcTableName"] = "sorting_batch";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "DA_CUT_ref";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_exhibition_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto76["m_sql"] = "`shouhin`.`ichiba_exhibition_id`";
$proto76["m_srcTableName"] = "sorting_batch";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "ichiba_exhibition_sort",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto78["m_sql"] = "`shouhin`.`ichiba_exhibition_sort`";
$proto78["m_srcTableName"] = "sorting_batch";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto80["m_sql"] = "`shouhin`.`description`";
$proto80["m_srcTableName"] = "sorting_batch";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto82["m_sql"] = "`shouhin`.`Remarks`";
$proto82["m_srcTableName"] = "sorting_batch";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto84=array();
$proto84["m_link"] = "SQLL_MAIN";
			$proto85=array();
$proto85["m_strName"] = "shouhin";
$proto85["m_srcTableName"] = "sorting_batch";
$proto85["m_columns"] = array();
$proto85["m_columns"][] = "product_id";
$proto85["m_columns"][] = "category_id";
$proto85["m_columns"][] = "goods_title";
$proto85["m_columns"][] = "title";
$proto85["m_columns"][] = "sub_category_id1";
$proto85["m_columns"][] = "ecc_id";
$proto85["m_columns"][] = "price";
$proto85["m_columns"][] = "yahoo";
$proto85["m_columns"][] = "remark";
$proto85["m_columns"][] = "sales_price";
$proto85["m_columns"][] = "description";
$proto85["m_columns"][] = "status";
$proto85["m_columns"][] = "product_num";
$proto85["m_columns"][] = "updated_at";
$proto85["m_columns"][] = "yahoo_size";
$proto85["m_columns"][] = "yahoo_title";
$proto85["m_columns"][] = "yahoo_junle";
$proto85["m_columns"][] = "yahoo_sankou_uwadai";
$proto85["m_columns"][] = "yahoo_sozai";
$proto85["m_columns"][] = "yahoo_color";
$proto85["m_columns"][] = "yahoo_kataban";
$proto85["m_columns"][] = "yahoo_condition1";
$proto85["m_columns"][] = "yahoo_condition2";
$proto85["m_columns"][] = "yahoo_fuzokuhin";
$proto85["m_columns"][] = "yahoo_sinaban";
$proto85["m_columns"][] = "yahoo_saisun_sha";
$proto85["m_columns"][] = "yahoo_sex";
$proto85["m_columns"][] = "box_id";
$proto85["m_columns"][] = "nyuukin_price";
$proto85["m_columns"][] = "updated_by";
$proto85["m_columns"][] = "raku_title";
$proto85["m_columns"][] = "raku_hyoujisaki_category2";
$proto85["m_columns"][] = "raku_hyoujisaki_category";
$proto85["m_columns"][] = "raku_hyoujisaki_category3";
$proto85["m_columns"][] = "timesta";
$proto85["m_columns"][] = "saisun_start";
$proto85["m_columns"][] = "saisun_end";
$proto85["m_columns"][] = "label_output_flag";
$proto85["m_columns"][] = "season";
$proto85["m_columns"][] = "kanryou_henbi";
$proto85["m_columns"][] = "box_sort";
$proto85["m_columns"][] = "satei_by";
$proto85["m_columns"][] = "kaitori_by";
$proto85["m_columns"][] = "comment";
$proto85["m_columns"][] = "satei_hi";
$proto85["m_columns"][] = "kaitory_hi";
$proto85["m_columns"][] = "REG_PHOTOGRAPHER";
$proto85["m_columns"][] = "REG_AUTHOR";
$proto85["m_columns"][] = "REG_PACKINGS";
$proto85["m_columns"][] = "REG_KAKOU_DATE";
$proto85["m_columns"][] = "REG_KAKOU";
$proto85["m_columns"][] = "REG_EXHIBITOR";
$proto85["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto85["m_columns"][] = "DT_PACKING_DATE";
$proto85["m_columns"][] = "DT_UP_DATE";
$proto85["m_columns"][] = "AWAZU_DATE";
$proto85["m_columns"][] = "AWAZU_NIN";
$proto85["m_columns"][] = "sabun_date";
$proto85["m_columns"][] = "browseid";
$proto85["m_columns"][] = "browsenode";
$proto85["m_columns"][] = "gold_property";
$proto85["m_columns"][] = "ichiba_title";
$proto85["m_columns"][] = "Gram";
$proto85["m_columns"][] = "Parent_stone";
$proto85["m_columns"][] = "Aside_stone";
$proto85["m_columns"][] = "Appraiser";
$proto85["m_columns"][] = "Remarks";
$proto85["m_columns"][] = "Destination_selling";
$proto85["m_columns"][] = "Finish";
$proto85["m_columns"][] = "Discrimination";
$proto85["m_columns"][] = "accessories";
$proto85["m_columns"][] = "priority";
$proto85["m_columns"][] = "A_storage";
$proto85["m_columns"][] = "price_per_gram";
$proto85["m_columns"][] = "price_per_parent_stone";
$proto85["m_columns"][] = "price_per_aside_stone";
$proto85["m_columns"][] = "price_secret";
$proto85["m_columns"][] = "sales_price_secret";
$proto85["m_columns"][] = "eq";
$proto85["m_columns"][] = "en";
$proto85["m_columns"][] = "line";
$proto85["m_columns"][] = "item_name";
$proto85["m_columns"][] = "handle";
$proto85["m_columns"][] = "yahoo_color_id";
$proto85["m_columns"][] = "raku_hyoujisaki_category4";
$proto85["m_columns"][] = "raku_hyoujisaki_category5";
$proto85["m_columns"][] = "raku_dir_1";
$proto85["m_columns"][] = "raku_dir_2";
$proto85["m_columns"][] = "raku_dir_3";
$proto85["m_columns"][] = "raku_dir_4";
$proto85["m_columns"][] = "raku_dir_5";
$proto85["m_columns"][] = "raku_dir_result";
$proto85["m_columns"][] = "raku_tag_result";
$proto85["m_columns"][] = "serial_number";
$proto85["m_columns"][] = "Exhibition_Date";
$proto85["m_columns"][] = "search_keyword";
$proto85["m_columns"][] = "stamp";
$proto85["m_columns"][] = "motif";
$proto85["m_columns"][] = "Setting";
$proto85["m_columns"][] = "processing";
$proto85["m_columns"][] = "Sleeve_Length";
$proto85["m_columns"][] = "length";
$proto85["m_columns"][] = "Ring_size";
$proto85["m_columns"][] = "price_for_site";
$proto85["m_columns"][] = "yahoo_category_id";
$proto85["m_columns"][] = "Qty";
$proto85["m_columns"][] = "sales_period";
$proto85["m_columns"][] = "starting_price";
$proto85["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto85["m_columns"][] = "amount_of_image";
$proto85["m_columns"][] = "csv";
$proto85["m_columns"][] = "return_output_flag";
$proto85["m_columns"][] = "wasabi_flag";
$proto85["m_columns"][] = "ws_import_date";
$proto85["m_columns"][] = "logo";
$proto85["m_columns"][] = "parts";
$proto85["m_columns"][] = "country_of_origin";
$proto85["m_columns"][] = "zipper";
$proto85["m_columns"][] = "guarantee";
$proto85["m_columns"][] = "errors";
$proto85["m_columns"][] = "designer";
$proto85["m_columns"][] = "hahakai";
$proto85["m_columns"][] = "effect";
$proto85["m_columns"][] = "shape";
$proto85["m_columns"][] = "cutting_style";
$proto85["m_columns"][] = "chain_type";
$proto85["m_columns"][] = "number_of_stones";
$proto85["m_columns"][] = "amount";
$proto85["m_columns"][] = "satei_error";
$proto85["m_columns"][] = "producing_area";
$proto85["m_columns"][] = "shape_supplement";
$proto85["m_columns"][] = "side_gem";
$proto85["m_columns"][] = "product_style";
$proto85["m_columns"][] = "collar_neck_line";
$proto85["m_columns"][] = "breast";
$proto85["m_columns"][] = "silhouette";
$proto85["m_columns"][] = "sleeve";
$proto85["m_columns"][] = "unit";
$proto85["m_columns"][] = "hall_mark";
$proto85["m_columns"][] = "plate";
$proto85["m_columns"][] = "toe";
$proto85["m_columns"][] = "heel";
$proto85["m_columns"][] = "cloth";
$proto85["m_columns"][] = "serial_number_for_storage";
$proto85["m_columns"][] = "official_url";
$proto85["m_columns"][] = "main_details";
$proto85["m_columns"][] = "notation_size";
$proto85["m_columns"][] = "shoe_size_jp";
$proto85["m_columns"][] = "Eoc_chigins2_id";
$proto85["m_columns"][] = "country_of_origin_name";
$proto85["m_columns"][] = "mailingkit_id";
$proto85["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto85["m_columns"][] = "DA_WEIGHT";
$proto85["m_columns"][] = "DA_PER_CARAT";
$proto85["m_columns"][] = "DA_SHAPE";
$proto85["m_columns"][] = "DA_SELFGRES";
$proto85["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto85["m_columns"][] = "DA_SUGARCANE";
$proto85["m_columns"][] = "DA_RAPA";
$proto85["m_columns"][] = "DA_INTENSITY";
$proto85["m_columns"][] = "DA_OVERTONE";
$proto85["m_columns"][] = "DA_COLOR";
$proto85["m_columns"][] = "DA_CLARITY";
$proto85["m_columns"][] = "DA_CUT";
$proto85["m_columns"][] = "DA_POLISH";
$proto85["m_columns"][] = "DA_SYMMETRY";
$proto85["m_columns"][] = "DA_FLUO";
$proto85["m_columns"][] = "DA_COLOR_FLUO";
$proto85["m_columns"][] = "DA_WIDE";
$proto85["m_columns"][] = "DA_HIGH";
$proto85["m_columns"][] = "DA_DEPTH";
$proto85["m_columns"][] = "DA_APPRAISER";
$proto85["m_columns"][] = "DA_FRAPA";
$proto85["m_columns"][] = "DA_RATE";
$proto85["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto85["m_columns"][] = "DA_YOURNAME";
$proto85["m_columns"][] = "DA_RAPAB";
$proto85["m_columns"][] = "DA_GROSSPROFIT";
$proto85["m_columns"][] = "DA_INTEREST_1";
$proto85["m_columns"][] = "DA_no";
$proto85["m_columns"][] = "kinsa_flag";
$proto85["m_columns"][] = "price_for_site_flag";
$proto85["m_columns"][] = "Eoc_takuhai_id";
$proto85["m_columns"][] = "Eoc_unfinished_id";
$proto85["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto85["m_columns"][] = "chohyo_id";
$proto85["m_columns"][] = "location";
$proto85["m_columns"][] = "special_instructions_1";
$proto85["m_columns"][] = "special_instructions_2";
$proto85["m_columns"][] = "special_instructions_3";
$proto85["m_columns"][] = "chohyo_seihin_flag";
$proto85["m_columns"][] = "chohyo_dia_flag";
$proto85["m_columns"][] = "chohyo_type";
$proto85["m_columns"][] = "ichiyen_flag";
$proto85["m_columns"][] = "asuraku_fuka_flag";
$proto85["m_columns"][] = "parallel_import_flag";
$proto85["m_columns"][] = "meisai_number";
$proto85["m_columns"][] = "days_keep_price";
$proto85["m_columns"][] = "initial_included";
$proto85["m_columns"][] = "novelty";
$proto85["m_columns"][] = "tentou_label_output_flag";
$proto85["m_columns"][] = "itaku_flag";
$proto85["m_columns"][] = "including_catch";
$proto85["m_columns"][] = "ichiba_meeting_month";
$proto85["m_columns"][] = "ichiba_meeting_name";
$proto85["m_columns"][] = "ichiba_color";
$proto85["m_columns"][] = "ichiba_clarity";
$proto85["m_columns"][] = "ichiba_melee_gai";
$proto85["m_columns"][] = "ichiba_lot_pieces";
$proto85["m_columns"][] = "ichiba_image";
$proto85["m_columns"][] = "ichiba_img";
$proto85["m_columns"][] = "gold_check_id";
$proto85["m_columns"][] = "ichiba_exhibition_id";
$proto85["m_columns"][] = "ichiba_exhibition_sort";
$proto85["m_columns"][] = "cost";
$proto85["m_columns"][] = "auto_price_cut_prohibited";
$proto85["m_columns"][] = "event_price";
$proto85["m_columns"][] = "identification_cost";
$proto85["m_columns"][] = "other_cost";
$proto85["m_columns"][] = "stock_quantity";
$proto85["m_columns"][] = "Eoc_trader_id_for_buy";
$proto85["m_columns"][] = "Eoc_trader_id_for_sell";
$proto85["m_columns"][] = "multiplication_rate";
$proto85["m_columns"][] = "many_product_group_id";
$proto85["m_columns"][] = "trading_sort_id";
$proto85["m_columns"][] = "many_product_group_saiban";
$proto85["m_columns"][] = "purchase_category";
$proto85["m_columns"][] = "created_at";
$proto85["m_columns"][] = "created_by";
$proto85["m_columns"][] = "manual_input_price_per_gram";
$proto85["m_columns"][] = "satei_start";
$proto85["m_columns"][] = "self_DA_INTENSITY";
$proto85["m_columns"][] = "self_DA_OVERTONE";
$proto85["m_columns"][] = "self_DA_COLOR";
$proto85["m_columns"][] = "self_DA_CLARITY";
$proto85["m_columns"][] = "self_DA_CUT";
$proto85["m_columns"][] = "self_DA_POLISH";
$proto85["m_columns"][] = "self_DA_SYMMETRY";
$proto85["m_columns"][] = "self_DA_FLUO";
$proto85["m_columns"][] = "self_DA_COLOR_FLUO";
$proto85["m_columns"][] = "self_DA_FRAPA";
$proto85["m_columns"][] = "self_DA_RATE";
$proto85["m_columns"][] = "self_multiplication_rate";
$proto85["m_columns"][] = "is_seiyaku";
$proto85["m_columns"][] = "destination_sold_out";
$proto85["m_columns"][] = "mypage_update_prohibited";
$proto85["m_columns"][] = "gold_check_scan_id";
$proto85["m_columns"][] = "buy_campaign_data_id";
$proto85["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto85["m_columns"][] = "commission";
$proto85["m_columns"][] = "addtime_gold_check_id";
$proto85["m_columns"][] = "is_recovery";
$proto85["m_columns"][] = "sales_cost";
$proto85["m_columns"][] = "mst_business_partner_id";
$proto85["m_columns"][] = "DA_GROSSPROFIT_2";
$proto85["m_columns"][] = "DA_INTEREST_2";
$proto85["m_columns"][] = "minus_weight";
$proto85["m_columns"][] = "diameter_size";
$proto85["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto85);

$proto84["m_table"] = $obj;
$proto84["m_sql"] = "`shouhin`";
$proto84["m_alias"] = "";
$proto84["m_srcTableName"] = "sorting_batch";
$proto86=array();
$proto86["m_sql"] = "";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

$proto84["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto84);

$proto0["m_fromlist"][]=$obj;
												$proto88=array();
$proto88["m_link"] = "SQLL_LEFTJOIN";
			$proto89=array();
$proto89["m_strName"] = "DIA_QR_reading";
$proto89["m_srcTableName"] = "sorting_batch";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "id";
$proto89["m_columns"][] = "sorting_num";
$proto89["m_columns"][] = "parent_stone";
$proto89["m_columns"][] = "color";
$proto89["m_columns"][] = "clarity";
$proto89["m_columns"][] = "other1";
$proto89["m_columns"][] = "other2";
$proto89["m_columns"][] = "other3";
$proto89["m_columns"][] = "fluo";
$proto89["m_columns"][] = "cofl";
$proto89["m_columns"][] = "size1";
$proto89["m_columns"][] = "size2";
$proto89["m_columns"][] = "size3";
$proto89["m_columns"][] = "pol_sym";
$proto89["m_columns"][] = "appraiser";
$proto89["m_columns"][] = "text_all";
$proto89["m_columns"][] = "product_id";
$proto89["m_columns"][] = "update_at";
$proto89["m_columns"][] = "update_by";
$proto89["m_columns"][] = "create_at";
$proto89["m_columns"][] = "create_by";
$proto89["m_columns"][] = "other4";
$proto89["m_columns"][] = "pol_sym2";
$proto89["m_columns"][] = "pol_sym3";
$proto89["m_columns"][] = "sorting_reflect_flag";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "LEFT OUTER JOIN `DIA_QR_reading` ON `shouhin`.`product_id` = `DIA_QR_reading`.`product_id`";
$proto88["m_alias"] = "";
$proto88["m_srcTableName"] = "sorting_batch";
$proto90=array();
$proto90["m_sql"] = "`shouhin`.`product_id` = `DIA_QR_reading`.`product_id`";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "= `DIA_QR_reading`.`product_id`";
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
	"m_strName" => "product_id",
	"m_strTable" => "shouhin",
	"m_srcTableName" => "sorting_batch"
));

$proto92["m_column"]=$obj;
$proto92["m_bAsc"] = 0;
$proto92["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto92);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="sorting_batch";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sorting_batch = createSqlQuery_sorting_batch();


	
		;

																																			

$tdatasorting_batch[".sqlquery"] = $queryData_sorting_batch;

include_once(getabspath("include/sorting_batch_events.php"));
$tableEvents["sorting_batch"] = new eventclass_sorting_batch;
$tdatasorting_batch[".hasEvents"] = true;

?>