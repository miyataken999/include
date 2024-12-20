<?php
require_once(getabspath("classes/cipherer.php"));




$tdataDIA_QR_reading = array();
	$tdataDIA_QR_reading[".ShortName"] = "DIA_QR_reading";
	$tdataDIA_QR_reading[".OwnerID"] = "";
	$tdataDIA_QR_reading[".OriginalTable"] = "DIA_QR_reading";

//	field labels
$fieldLabelsDIA_QR_reading = array();
$fieldToolTipsDIA_QR_reading = array();
$pageTitlesDIA_QR_reading = array();
$placeHoldersDIA_QR_reading = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsDIA_QR_reading["Japanese"] = array();
	$fieldToolTipsDIA_QR_reading["Japanese"] = array();
	$placeHoldersDIA_QR_reading["Japanese"] = array();
	$pageTitlesDIA_QR_reading["Japanese"] = array();
	$fieldLabelsDIA_QR_reading["Japanese"]["id"] = "Id";
	$fieldToolTipsDIA_QR_reading["Japanese"]["id"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["id"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["sorting_num"] = "ソーティングナンバー";
	$fieldToolTipsDIA_QR_reading["Japanese"]["sorting_num"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["sorting_num"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["parent_stone"] = "カラット";
	$fieldToolTipsDIA_QR_reading["Japanese"]["parent_stone"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["parent_stone"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["color"] = "Color";
	$fieldToolTipsDIA_QR_reading["Japanese"]["color"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["color"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["clarity"] = "Clarity";
	$fieldToolTipsDIA_QR_reading["Japanese"]["clarity"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["clarity"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["other1"] = "その他1";
	$fieldToolTipsDIA_QR_reading["Japanese"]["other1"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["other1"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["other2"] = "その他2";
	$fieldToolTipsDIA_QR_reading["Japanese"]["other2"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["other2"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["other3"] = "その他3";
	$fieldToolTipsDIA_QR_reading["Japanese"]["other3"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["other3"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["fluo"] = "蛍光";
	$fieldToolTipsDIA_QR_reading["Japanese"]["fluo"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["fluo"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["cofl"] = "Cofl";
	$fieldToolTipsDIA_QR_reading["Japanese"]["cofl"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["cofl"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["size1"] = "Size1";
	$fieldToolTipsDIA_QR_reading["Japanese"]["size1"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["size1"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["size2"] = "Size2";
	$fieldToolTipsDIA_QR_reading["Japanese"]["size2"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["size2"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["size3"] = "Size3";
	$fieldToolTipsDIA_QR_reading["Japanese"]["size3"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["size3"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["appraiser"] = "鑑定機関";
	$fieldToolTipsDIA_QR_reading["Japanese"]["appraiser"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["appraiser"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["text_all"] = "Text All";
	$fieldToolTipsDIA_QR_reading["Japanese"]["text_all"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["text_all"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["pol_sym"] = "pol_sym";
	$fieldToolTipsDIA_QR_reading["Japanese"]["pol_sym"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["pol_sym"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["product_id"] = "SEQ";
	$fieldToolTipsDIA_QR_reading["Japanese"]["product_id"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["product_id"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsDIA_QR_reading["Japanese"]["update_at"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["update_at"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsDIA_QR_reading["Japanese"]["update_by"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["update_by"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsDIA_QR_reading["Japanese"]["create_at"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["create_at"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsDIA_QR_reading["Japanese"]["create_by"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["create_by"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["other4"] = "その他4";
	$fieldToolTipsDIA_QR_reading["Japanese"]["other4"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["other4"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["pol_sym2"] = "Pol Sym2";
	$fieldToolTipsDIA_QR_reading["Japanese"]["pol_sym2"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["pol_sym2"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["pol_sym3"] = "Pol Sym3";
	$fieldToolTipsDIA_QR_reading["Japanese"]["pol_sym3"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["pol_sym3"] = "";
	$fieldLabelsDIA_QR_reading["Japanese"]["sorting_reflect_flag"] = "ソーティング反映";
	$fieldToolTipsDIA_QR_reading["Japanese"]["sorting_reflect_flag"] = "";
	$placeHoldersDIA_QR_reading["Japanese"]["sorting_reflect_flag"] = "";
	if (count($fieldToolTipsDIA_QR_reading["Japanese"]))
		$tdataDIA_QR_reading[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDIA_QR_reading[""] = array();
	$fieldToolTipsDIA_QR_reading[""] = array();
	$placeHoldersDIA_QR_reading[""] = array();
	$pageTitlesDIA_QR_reading[""] = array();
	$fieldLabelsDIA_QR_reading[""]["id"] = "Id";
	$fieldToolTipsDIA_QR_reading[""]["id"] = "";
	$placeHoldersDIA_QR_reading[""]["id"] = "";
	$fieldLabelsDIA_QR_reading[""]["sorting_num"] = "Sorting Num";
	$fieldToolTipsDIA_QR_reading[""]["sorting_num"] = "";
	$placeHoldersDIA_QR_reading[""]["sorting_num"] = "";
	$fieldLabelsDIA_QR_reading[""]["parent_stone"] = "Parent Stone";
	$fieldToolTipsDIA_QR_reading[""]["parent_stone"] = "";
	$placeHoldersDIA_QR_reading[""]["parent_stone"] = "";
	$fieldLabelsDIA_QR_reading[""]["color"] = "Color";
	$fieldToolTipsDIA_QR_reading[""]["color"] = "";
	$placeHoldersDIA_QR_reading[""]["color"] = "";
	$fieldLabelsDIA_QR_reading[""]["clarity"] = "Clarity";
	$fieldToolTipsDIA_QR_reading[""]["clarity"] = "";
	$placeHoldersDIA_QR_reading[""]["clarity"] = "";
	$fieldLabelsDIA_QR_reading[""]["other1"] = "Other1";
	$fieldToolTipsDIA_QR_reading[""]["other1"] = "";
	$placeHoldersDIA_QR_reading[""]["other1"] = "";
	$fieldLabelsDIA_QR_reading[""]["other2"] = "Other2";
	$fieldToolTipsDIA_QR_reading[""]["other2"] = "";
	$placeHoldersDIA_QR_reading[""]["other2"] = "";
	$fieldLabelsDIA_QR_reading[""]["other3"] = "Other3";
	$fieldToolTipsDIA_QR_reading[""]["other3"] = "";
	$placeHoldersDIA_QR_reading[""]["other3"] = "";
	$fieldLabelsDIA_QR_reading[""]["fluo"] = "Fluo";
	$fieldToolTipsDIA_QR_reading[""]["fluo"] = "";
	$placeHoldersDIA_QR_reading[""]["fluo"] = "";
	$fieldLabelsDIA_QR_reading[""]["cofl"] = "Cofl";
	$fieldToolTipsDIA_QR_reading[""]["cofl"] = "";
	$placeHoldersDIA_QR_reading[""]["cofl"] = "";
	$fieldLabelsDIA_QR_reading[""]["size1"] = "Size1";
	$fieldToolTipsDIA_QR_reading[""]["size1"] = "";
	$placeHoldersDIA_QR_reading[""]["size1"] = "";
	$fieldLabelsDIA_QR_reading[""]["size2"] = "Size2";
	$fieldToolTipsDIA_QR_reading[""]["size2"] = "";
	$placeHoldersDIA_QR_reading[""]["size2"] = "";
	$fieldLabelsDIA_QR_reading[""]["size3"] = "Size3";
	$fieldToolTipsDIA_QR_reading[""]["size3"] = "";
	$placeHoldersDIA_QR_reading[""]["size3"] = "";
	$fieldLabelsDIA_QR_reading[""]["appraiser"] = "Appraiser";
	$fieldToolTipsDIA_QR_reading[""]["appraiser"] = "";
	$placeHoldersDIA_QR_reading[""]["appraiser"] = "";
	$fieldLabelsDIA_QR_reading[""]["text_all"] = "Text All";
	$fieldToolTipsDIA_QR_reading[""]["text_all"] = "";
	$placeHoldersDIA_QR_reading[""]["text_all"] = "";
	$fieldLabelsDIA_QR_reading[""]["pol_sym"] = "Pol Sym";
	$fieldToolTipsDIA_QR_reading[""]["pol_sym"] = "";
	$placeHoldersDIA_QR_reading[""]["pol_sym"] = "";
	$fieldLabelsDIA_QR_reading[""]["product_id"] = "Product Id";
	$fieldToolTipsDIA_QR_reading[""]["product_id"] = "";
	$placeHoldersDIA_QR_reading[""]["product_id"] = "";
	$fieldLabelsDIA_QR_reading[""]["update_at"] = "Update At";
	$fieldToolTipsDIA_QR_reading[""]["update_at"] = "";
	$placeHoldersDIA_QR_reading[""]["update_at"] = "";
	$fieldLabelsDIA_QR_reading[""]["update_by"] = "Update By";
	$fieldToolTipsDIA_QR_reading[""]["update_by"] = "";
	$placeHoldersDIA_QR_reading[""]["update_by"] = "";
	$fieldLabelsDIA_QR_reading[""]["create_at"] = "Create At";
	$fieldToolTipsDIA_QR_reading[""]["create_at"] = "";
	$placeHoldersDIA_QR_reading[""]["create_at"] = "";
	$fieldLabelsDIA_QR_reading[""]["create_by"] = "Create By";
	$fieldToolTipsDIA_QR_reading[""]["create_by"] = "";
	$placeHoldersDIA_QR_reading[""]["create_by"] = "";
	$fieldLabelsDIA_QR_reading[""]["other4"] = "Other4";
	$fieldToolTipsDIA_QR_reading[""]["other4"] = "";
	$placeHoldersDIA_QR_reading[""]["other4"] = "";
	$fieldLabelsDIA_QR_reading[""]["pol_sym2"] = "Pol Sym2";
	$fieldToolTipsDIA_QR_reading[""]["pol_sym2"] = "";
	$placeHoldersDIA_QR_reading[""]["pol_sym2"] = "";
	$fieldLabelsDIA_QR_reading[""]["pol_sym3"] = "Pol Sym3";
	$fieldToolTipsDIA_QR_reading[""]["pol_sym3"] = "";
	$placeHoldersDIA_QR_reading[""]["pol_sym3"] = "";
	$fieldLabelsDIA_QR_reading[""]["sorting_reflect_flag"] = "Sorting Reflect Flag";
	$fieldToolTipsDIA_QR_reading[""]["sorting_reflect_flag"] = "";
	$placeHoldersDIA_QR_reading[""]["sorting_reflect_flag"] = "";
	if (count($fieldToolTipsDIA_QR_reading[""]))
		$tdataDIA_QR_reading[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsDIA_QR_reading["English"] = array();
	$fieldToolTipsDIA_QR_reading["English"] = array();
	$placeHoldersDIA_QR_reading["English"] = array();
	$pageTitlesDIA_QR_reading["English"] = array();
	$fieldLabelsDIA_QR_reading["English"]["id"] = "Id";
	$fieldToolTipsDIA_QR_reading["English"]["id"] = "";
	$placeHoldersDIA_QR_reading["English"]["id"] = "";
	$fieldLabelsDIA_QR_reading["English"]["sorting_num"] = "Sorting Num";
	$fieldToolTipsDIA_QR_reading["English"]["sorting_num"] = "";
	$placeHoldersDIA_QR_reading["English"]["sorting_num"] = "";
	$fieldLabelsDIA_QR_reading["English"]["parent_stone"] = "Parent Stone";
	$fieldToolTipsDIA_QR_reading["English"]["parent_stone"] = "";
	$placeHoldersDIA_QR_reading["English"]["parent_stone"] = "";
	$fieldLabelsDIA_QR_reading["English"]["color"] = "Color";
	$fieldToolTipsDIA_QR_reading["English"]["color"] = "";
	$placeHoldersDIA_QR_reading["English"]["color"] = "";
	$fieldLabelsDIA_QR_reading["English"]["clarity"] = "Clarity";
	$fieldToolTipsDIA_QR_reading["English"]["clarity"] = "";
	$placeHoldersDIA_QR_reading["English"]["clarity"] = "";
	$fieldLabelsDIA_QR_reading["English"]["other1"] = "Other1";
	$fieldToolTipsDIA_QR_reading["English"]["other1"] = "";
	$placeHoldersDIA_QR_reading["English"]["other1"] = "";
	$fieldLabelsDIA_QR_reading["English"]["other2"] = "Other2";
	$fieldToolTipsDIA_QR_reading["English"]["other2"] = "";
	$placeHoldersDIA_QR_reading["English"]["other2"] = "";
	$fieldLabelsDIA_QR_reading["English"]["other3"] = "Other3";
	$fieldToolTipsDIA_QR_reading["English"]["other3"] = "";
	$placeHoldersDIA_QR_reading["English"]["other3"] = "";
	$fieldLabelsDIA_QR_reading["English"]["fluo"] = "Fluo";
	$fieldToolTipsDIA_QR_reading["English"]["fluo"] = "";
	$placeHoldersDIA_QR_reading["English"]["fluo"] = "";
	$fieldLabelsDIA_QR_reading["English"]["cofl"] = "Cofl";
	$fieldToolTipsDIA_QR_reading["English"]["cofl"] = "";
	$placeHoldersDIA_QR_reading["English"]["cofl"] = "";
	$fieldLabelsDIA_QR_reading["English"]["size1"] = "Size1";
	$fieldToolTipsDIA_QR_reading["English"]["size1"] = "";
	$placeHoldersDIA_QR_reading["English"]["size1"] = "";
	$fieldLabelsDIA_QR_reading["English"]["size2"] = "Size2";
	$fieldToolTipsDIA_QR_reading["English"]["size2"] = "";
	$placeHoldersDIA_QR_reading["English"]["size2"] = "";
	$fieldLabelsDIA_QR_reading["English"]["size3"] = "Size3";
	$fieldToolTipsDIA_QR_reading["English"]["size3"] = "";
	$placeHoldersDIA_QR_reading["English"]["size3"] = "";
	$fieldLabelsDIA_QR_reading["English"]["appraiser"] = "Appraiser";
	$fieldToolTipsDIA_QR_reading["English"]["appraiser"] = "";
	$placeHoldersDIA_QR_reading["English"]["appraiser"] = "";
	$fieldLabelsDIA_QR_reading["English"]["text_all"] = "Text All";
	$fieldToolTipsDIA_QR_reading["English"]["text_all"] = "";
	$placeHoldersDIA_QR_reading["English"]["text_all"] = "";
	$fieldLabelsDIA_QR_reading["English"]["pol_sym"] = "Pol Sym";
	$fieldToolTipsDIA_QR_reading["English"]["pol_sym"] = "";
	$placeHoldersDIA_QR_reading["English"]["pol_sym"] = "";
	$fieldLabelsDIA_QR_reading["English"]["product_id"] = "Product Id";
	$fieldToolTipsDIA_QR_reading["English"]["product_id"] = "";
	$placeHoldersDIA_QR_reading["English"]["product_id"] = "";
	$fieldLabelsDIA_QR_reading["English"]["update_at"] = "Update At";
	$fieldToolTipsDIA_QR_reading["English"]["update_at"] = "";
	$placeHoldersDIA_QR_reading["English"]["update_at"] = "";
	$fieldLabelsDIA_QR_reading["English"]["update_by"] = "Update By";
	$fieldToolTipsDIA_QR_reading["English"]["update_by"] = "";
	$placeHoldersDIA_QR_reading["English"]["update_by"] = "";
	$fieldLabelsDIA_QR_reading["English"]["create_at"] = "Create At";
	$fieldToolTipsDIA_QR_reading["English"]["create_at"] = "";
	$placeHoldersDIA_QR_reading["English"]["create_at"] = "";
	$fieldLabelsDIA_QR_reading["English"]["create_by"] = "Create By";
	$fieldToolTipsDIA_QR_reading["English"]["create_by"] = "";
	$placeHoldersDIA_QR_reading["English"]["create_by"] = "";
	$fieldLabelsDIA_QR_reading["English"]["other4"] = "Other4";
	$fieldToolTipsDIA_QR_reading["English"]["other4"] = "";
	$placeHoldersDIA_QR_reading["English"]["other4"] = "";
	$fieldLabelsDIA_QR_reading["English"]["pol_sym2"] = "Pol Sym2";
	$fieldToolTipsDIA_QR_reading["English"]["pol_sym2"] = "";
	$placeHoldersDIA_QR_reading["English"]["pol_sym2"] = "";
	$fieldLabelsDIA_QR_reading["English"]["pol_sym3"] = "Pol Sym3";
	$fieldToolTipsDIA_QR_reading["English"]["pol_sym3"] = "";
	$placeHoldersDIA_QR_reading["English"]["pol_sym3"] = "";
	$fieldLabelsDIA_QR_reading["English"]["sorting_reflect_flag"] = "Sorting Reflect Flag";
	$fieldToolTipsDIA_QR_reading["English"]["sorting_reflect_flag"] = "";
	$placeHoldersDIA_QR_reading["English"]["sorting_reflect_flag"] = "";
	if (count($fieldToolTipsDIA_QR_reading["English"]))
		$tdataDIA_QR_reading[".isUseToolTips"] = true;
}


	$tdataDIA_QR_reading[".NCSearch"] = true;



$tdataDIA_QR_reading[".shortTableName"] = "DIA_QR_reading";
$tdataDIA_QR_reading[".nSecOptions"] = 0;
$tdataDIA_QR_reading[".recsPerRowPrint"] = 1;
$tdataDIA_QR_reading[".mainTableOwnerID"] = "";
$tdataDIA_QR_reading[".moveNext"] = 1;
$tdataDIA_QR_reading[".entityType"] = 0;

$tdataDIA_QR_reading[".strOriginalTableName"] = "DIA_QR_reading";

	



$tdataDIA_QR_reading[".showAddInPopup"] = false;

$tdataDIA_QR_reading[".showEditInPopup"] = false;

$tdataDIA_QR_reading[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataDIA_QR_reading[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataDIA_QR_reading[".fieldsForRegister"] = array();

$tdataDIA_QR_reading[".listAjax"] = false;

	$tdataDIA_QR_reading[".audit"] = true;

	$tdataDIA_QR_reading[".locking"] = false;



$tdataDIA_QR_reading[".list"] = true;

$tdataDIA_QR_reading[".inlineEdit"] = true;


$tdataDIA_QR_reading[".reorderRecordsByHeader"] = true;





$tdataDIA_QR_reading[".exportTo"] = true;



$tdataDIA_QR_reading[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataDIA_QR_reading[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataDIA_QR_reading[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataDIA_QR_reading[".searchSaving"] = false;
//

$tdataDIA_QR_reading[".showSearchPanel"] = true;
		$tdataDIA_QR_reading[".flexibleSearch"] = true;

$tdataDIA_QR_reading[".isUseAjaxSuggest"] = true;

$tdataDIA_QR_reading[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataDIA_QR_reading[".ajaxCodeSnippetAdded"] = false;

$tdataDIA_QR_reading[".buttonsAdded"] = false;

$tdataDIA_QR_reading[".addPageEvents"] = false;

// use timepicker for search panel
$tdataDIA_QR_reading[".isUseTimeForSearch"] = false;





$tdataDIA_QR_reading[".allSearchFields"] = array();
$tdataDIA_QR_reading[".filterFields"] = array();
$tdataDIA_QR_reading[".requiredSearchFields"] = array();

$tdataDIA_QR_reading[".allSearchFields"][] = "id";
	$tdataDIA_QR_reading[".allSearchFields"][] = "sorting_num";
	$tdataDIA_QR_reading[".allSearchFields"][] = "parent_stone";
	$tdataDIA_QR_reading[".allSearchFields"][] = "color";
	$tdataDIA_QR_reading[".allSearchFields"][] = "clarity";
	$tdataDIA_QR_reading[".allSearchFields"][] = "other1";
	$tdataDIA_QR_reading[".allSearchFields"][] = "other2";
	$tdataDIA_QR_reading[".allSearchFields"][] = "other3";
	$tdataDIA_QR_reading[".allSearchFields"][] = "fluo";
	$tdataDIA_QR_reading[".allSearchFields"][] = "cofl";
	$tdataDIA_QR_reading[".allSearchFields"][] = "size1";
	$tdataDIA_QR_reading[".allSearchFields"][] = "size2";
	$tdataDIA_QR_reading[".allSearchFields"][] = "size3";
	$tdataDIA_QR_reading[".allSearchFields"][] = "pol_sym";
	$tdataDIA_QR_reading[".allSearchFields"][] = "appraiser";
	$tdataDIA_QR_reading[".allSearchFields"][] = "text_all";
	$tdataDIA_QR_reading[".allSearchFields"][] = "product_id";
	$tdataDIA_QR_reading[".allSearchFields"][] = "update_at";
	$tdataDIA_QR_reading[".allSearchFields"][] = "update_by";
	$tdataDIA_QR_reading[".allSearchFields"][] = "create_at";
	$tdataDIA_QR_reading[".allSearchFields"][] = "create_by";
	$tdataDIA_QR_reading[".allSearchFields"][] = "other4";
	$tdataDIA_QR_reading[".allSearchFields"][] = "pol_sym2";
	$tdataDIA_QR_reading[".allSearchFields"][] = "pol_sym3";
	$tdataDIA_QR_reading[".allSearchFields"][] = "sorting_reflect_flag";
	

$tdataDIA_QR_reading[".googleLikeFields"] = array();
$tdataDIA_QR_reading[".googleLikeFields"][] = "id";
$tdataDIA_QR_reading[".googleLikeFields"][] = "sorting_num";
$tdataDIA_QR_reading[".googleLikeFields"][] = "parent_stone";
$tdataDIA_QR_reading[".googleLikeFields"][] = "color";
$tdataDIA_QR_reading[".googleLikeFields"][] = "clarity";
$tdataDIA_QR_reading[".googleLikeFields"][] = "other1";
$tdataDIA_QR_reading[".googleLikeFields"][] = "other2";
$tdataDIA_QR_reading[".googleLikeFields"][] = "other3";
$tdataDIA_QR_reading[".googleLikeFields"][] = "fluo";
$tdataDIA_QR_reading[".googleLikeFields"][] = "cofl";
$tdataDIA_QR_reading[".googleLikeFields"][] = "size1";
$tdataDIA_QR_reading[".googleLikeFields"][] = "size2";
$tdataDIA_QR_reading[".googleLikeFields"][] = "size3";
$tdataDIA_QR_reading[".googleLikeFields"][] = "pol_sym";
$tdataDIA_QR_reading[".googleLikeFields"][] = "appraiser";
$tdataDIA_QR_reading[".googleLikeFields"][] = "text_all";
$tdataDIA_QR_reading[".googleLikeFields"][] = "product_id";
$tdataDIA_QR_reading[".googleLikeFields"][] = "update_at";
$tdataDIA_QR_reading[".googleLikeFields"][] = "update_by";
$tdataDIA_QR_reading[".googleLikeFields"][] = "create_at";
$tdataDIA_QR_reading[".googleLikeFields"][] = "create_by";
$tdataDIA_QR_reading[".googleLikeFields"][] = "other4";
$tdataDIA_QR_reading[".googleLikeFields"][] = "pol_sym2";
$tdataDIA_QR_reading[".googleLikeFields"][] = "pol_sym3";
$tdataDIA_QR_reading[".googleLikeFields"][] = "sorting_reflect_flag";

$tdataDIA_QR_reading[".panelSearchFields"] = array();
$tdataDIA_QR_reading[".searchPanelOptions"] = array();
$tdataDIA_QR_reading[".panelSearchFields"][] = "sorting_reflect_flag";
	
$tdataDIA_QR_reading[".advSearchFields"] = array();
$tdataDIA_QR_reading[".advSearchFields"][] = "id";
$tdataDIA_QR_reading[".advSearchFields"][] = "sorting_num";
$tdataDIA_QR_reading[".advSearchFields"][] = "parent_stone";
$tdataDIA_QR_reading[".advSearchFields"][] = "color";
$tdataDIA_QR_reading[".advSearchFields"][] = "clarity";
$tdataDIA_QR_reading[".advSearchFields"][] = "other1";
$tdataDIA_QR_reading[".advSearchFields"][] = "other2";
$tdataDIA_QR_reading[".advSearchFields"][] = "other3";
$tdataDIA_QR_reading[".advSearchFields"][] = "fluo";
$tdataDIA_QR_reading[".advSearchFields"][] = "cofl";
$tdataDIA_QR_reading[".advSearchFields"][] = "size1";
$tdataDIA_QR_reading[".advSearchFields"][] = "size2";
$tdataDIA_QR_reading[".advSearchFields"][] = "size3";
$tdataDIA_QR_reading[".advSearchFields"][] = "pol_sym";
$tdataDIA_QR_reading[".advSearchFields"][] = "appraiser";
$tdataDIA_QR_reading[".advSearchFields"][] = "text_all";
$tdataDIA_QR_reading[".advSearchFields"][] = "product_id";
$tdataDIA_QR_reading[".advSearchFields"][] = "update_at";
$tdataDIA_QR_reading[".advSearchFields"][] = "update_by";
$tdataDIA_QR_reading[".advSearchFields"][] = "create_at";
$tdataDIA_QR_reading[".advSearchFields"][] = "create_by";
$tdataDIA_QR_reading[".advSearchFields"][] = "other4";
$tdataDIA_QR_reading[".advSearchFields"][] = "pol_sym2";
$tdataDIA_QR_reading[".advSearchFields"][] = "pol_sym3";
$tdataDIA_QR_reading[".advSearchFields"][] = "sorting_reflect_flag";

$tdataDIA_QR_reading[".tableType"] = "list";

$tdataDIA_QR_reading[".printerPageOrientation"] = 0;
$tdataDIA_QR_reading[".nPrinterPageScale"] = 100;

$tdataDIA_QR_reading[".nPrinterSplitRecords"] = 40;

$tdataDIA_QR_reading[".nPrinterPDFSplitRecords"] = 40;



$tdataDIA_QR_reading[".geocodingEnabled"] = false;





$tdataDIA_QR_reading[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataDIA_QR_reading[".pageSize"] = 20;

$tdataDIA_QR_reading[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataDIA_QR_reading[".strOrderBy"] = $tstrOrderBy;

$tdataDIA_QR_reading[".orderindexes"] = array();

$tdataDIA_QR_reading[".sqlHead"] = "SELECT `id`,  	`sorting_num`,  	`parent_stone`,  	`color`,  	`clarity`,  	`other1`,  	`other2`,  	`other3`,  	`fluo`,  	`cofl`,  	`size1`,  	`size2`,  	`size3`,  	`pol_sym`,  	`appraiser`,  	`text_all`,  	`product_id`,  	`update_at`,  	`update_by`,  	`create_at`,  	`create_by`,  	`other4`,  	`pol_sym2`,  	`pol_sym3`,  	`sorting_reflect_flag`";
$tdataDIA_QR_reading[".sqlFrom"] = "FROM `DIA_QR_reading`";
$tdataDIA_QR_reading[".sqlWhereExpr"] = "";
$tdataDIA_QR_reading[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataDIA_QR_reading[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataDIA_QR_reading[".arrGroupsPerPage"] = $arrGPP;

$tdataDIA_QR_reading[".highlightSearchResults"] = true;

$tableKeysDIA_QR_reading = array();
$tableKeysDIA_QR_reading[] = "id";
$tdataDIA_QR_reading[".Keys"] = $tableKeysDIA_QR_reading;

$tdataDIA_QR_reading[".listFields"] = array();
$tdataDIA_QR_reading[".listFields"][] = "sorting_reflect_flag";
$tdataDIA_QR_reading[".listFields"][] = "id";
$tdataDIA_QR_reading[".listFields"][] = "product_id";
$tdataDIA_QR_reading[".listFields"][] = "sorting_num";
$tdataDIA_QR_reading[".listFields"][] = "parent_stone";
$tdataDIA_QR_reading[".listFields"][] = "color";
$tdataDIA_QR_reading[".listFields"][] = "clarity";
$tdataDIA_QR_reading[".listFields"][] = "other1";
$tdataDIA_QR_reading[".listFields"][] = "other2";
$tdataDIA_QR_reading[".listFields"][] = "other3";
$tdataDIA_QR_reading[".listFields"][] = "fluo";
$tdataDIA_QR_reading[".listFields"][] = "cofl";
$tdataDIA_QR_reading[".listFields"][] = "size1";
$tdataDIA_QR_reading[".listFields"][] = "size2";
$tdataDIA_QR_reading[".listFields"][] = "size3";
$tdataDIA_QR_reading[".listFields"][] = "pol_sym";
$tdataDIA_QR_reading[".listFields"][] = "pol_sym2";
$tdataDIA_QR_reading[".listFields"][] = "pol_sym3";
$tdataDIA_QR_reading[".listFields"][] = "other4";
$tdataDIA_QR_reading[".listFields"][] = "appraiser";
$tdataDIA_QR_reading[".listFields"][] = "text_all";
$tdataDIA_QR_reading[".listFields"][] = "update_at";
$tdataDIA_QR_reading[".listFields"][] = "update_by";
$tdataDIA_QR_reading[".listFields"][] = "create_at";
$tdataDIA_QR_reading[".listFields"][] = "create_by";

$tdataDIA_QR_reading[".hideMobileList"] = array();


$tdataDIA_QR_reading[".viewFields"] = array();

$tdataDIA_QR_reading[".addFields"] = array();

$tdataDIA_QR_reading[".masterListFields"] = array();
$tdataDIA_QR_reading[".masterListFields"][] = "id";
$tdataDIA_QR_reading[".masterListFields"][] = "sorting_num";
$tdataDIA_QR_reading[".masterListFields"][] = "parent_stone";
$tdataDIA_QR_reading[".masterListFields"][] = "color";
$tdataDIA_QR_reading[".masterListFields"][] = "clarity";
$tdataDIA_QR_reading[".masterListFields"][] = "other1";
$tdataDIA_QR_reading[".masterListFields"][] = "other2";
$tdataDIA_QR_reading[".masterListFields"][] = "other3";
$tdataDIA_QR_reading[".masterListFields"][] = "fluo";
$tdataDIA_QR_reading[".masterListFields"][] = "cofl";
$tdataDIA_QR_reading[".masterListFields"][] = "size1";
$tdataDIA_QR_reading[".masterListFields"][] = "size2";
$tdataDIA_QR_reading[".masterListFields"][] = "size3";
$tdataDIA_QR_reading[".masterListFields"][] = "pol_sym";
$tdataDIA_QR_reading[".masterListFields"][] = "appraiser";
$tdataDIA_QR_reading[".masterListFields"][] = "text_all";
$tdataDIA_QR_reading[".masterListFields"][] = "product_id";
$tdataDIA_QR_reading[".masterListFields"][] = "update_at";
$tdataDIA_QR_reading[".masterListFields"][] = "update_by";
$tdataDIA_QR_reading[".masterListFields"][] = "create_at";
$tdataDIA_QR_reading[".masterListFields"][] = "create_by";
$tdataDIA_QR_reading[".masterListFields"][] = "other4";
$tdataDIA_QR_reading[".masterListFields"][] = "pol_sym2";
$tdataDIA_QR_reading[".masterListFields"][] = "pol_sym3";
$tdataDIA_QR_reading[".masterListFields"][] = "sorting_reflect_flag";

$tdataDIA_QR_reading[".inlineAddFields"] = array();

$tdataDIA_QR_reading[".editFields"] = array();

$tdataDIA_QR_reading[".inlineEditFields"] = array();
$tdataDIA_QR_reading[".inlineEditFields"][] = "sorting_reflect_flag";

$tdataDIA_QR_reading[".updateSelectedFields"] = array();


$tdataDIA_QR_reading[".exportFields"] = array();
$tdataDIA_QR_reading[".exportFields"][] = "other4";
$tdataDIA_QR_reading[".exportFields"][] = "pol_sym2";
$tdataDIA_QR_reading[".exportFields"][] = "pol_sym3";
$tdataDIA_QR_reading[".exportFields"][] = "sorting_reflect_flag";
$tdataDIA_QR_reading[".exportFields"][] = "sorting_num";
$tdataDIA_QR_reading[".exportFields"][] = "parent_stone";
$tdataDIA_QR_reading[".exportFields"][] = "color";
$tdataDIA_QR_reading[".exportFields"][] = "clarity";
$tdataDIA_QR_reading[".exportFields"][] = "other1";
$tdataDIA_QR_reading[".exportFields"][] = "other2";
$tdataDIA_QR_reading[".exportFields"][] = "other3";
$tdataDIA_QR_reading[".exportFields"][] = "fluo";
$tdataDIA_QR_reading[".exportFields"][] = "cofl";
$tdataDIA_QR_reading[".exportFields"][] = "size1";
$tdataDIA_QR_reading[".exportFields"][] = "size2";
$tdataDIA_QR_reading[".exportFields"][] = "size3";
$tdataDIA_QR_reading[".exportFields"][] = "pol_sym";
$tdataDIA_QR_reading[".exportFields"][] = "appraiser";
$tdataDIA_QR_reading[".exportFields"][] = "text_all";
$tdataDIA_QR_reading[".exportFields"][] = "product_id";

$tdataDIA_QR_reading[".importFields"] = array();

$tdataDIA_QR_reading[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataDIA_QR_reading["id"] = $fdata;
//	sorting_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sorting_num";
	$fdata["GoodName"] = "sorting_num";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","sorting_num");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sorting_num";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sorting_num`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["sorting_num"] = $fdata;
//	parent_stone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "parent_stone";
	$fdata["GoodName"] = "parent_stone";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","parent_stone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "parent_stone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`parent_stone`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["parent_stone"] = $fdata;
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","color");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "color";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`color`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["color"] = $fdata;
//	clarity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "clarity";
	$fdata["GoodName"] = "clarity";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","clarity");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "clarity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`clarity`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["clarity"] = $fdata;
//	other1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "other1";
	$fdata["GoodName"] = "other1";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","other1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "other1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`other1`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["other1"] = $fdata;
//	other2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "other2";
	$fdata["GoodName"] = "other2";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","other2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "other2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`other2`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["other2"] = $fdata;
//	other3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "other3";
	$fdata["GoodName"] = "other3";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","other3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "other3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`other3`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["other3"] = $fdata;
//	fluo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fluo";
	$fdata["GoodName"] = "fluo";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","fluo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fluo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`fluo`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["fluo"] = $fdata;
//	cofl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cofl";
	$fdata["GoodName"] = "cofl";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","cofl");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cofl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cofl`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["cofl"] = $fdata;
//	size1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "size1";
	$fdata["GoodName"] = "size1";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","size1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "size1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`size1`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["size1"] = $fdata;
//	size2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "size2";
	$fdata["GoodName"] = "size2";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","size2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "size2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`size2`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["size2"] = $fdata;
//	size3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "size3";
	$fdata["GoodName"] = "size3";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","size3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "size3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`size3`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["size3"] = $fdata;
//	pol_sym
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "pol_sym";
	$fdata["GoodName"] = "pol_sym";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","pol_sym");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "pol_sym";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`pol_sym`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["pol_sym"] = $fdata;
//	appraiser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "appraiser";
	$fdata["GoodName"] = "appraiser";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","appraiser");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "appraiser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`appraiser`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["appraiser"] = $fdata;
//	text_all
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "text_all";
	$fdata["GoodName"] = "text_all";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","text_all");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "text_all";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`text_all`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["text_all"] = $fdata;
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","product_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`product_id`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["product_id"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_at`";

	
	
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




	$tdataDIA_QR_reading["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update_by`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["update_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_at`";

	
	
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




	$tdataDIA_QR_reading["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_by`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["create_by"] = $fdata;
//	other4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "other4";
	$fdata["GoodName"] = "other4";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","other4");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "other4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`other4`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["other4"] = $fdata;
//	pol_sym2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "pol_sym2";
	$fdata["GoodName"] = "pol_sym2";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","pol_sym2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "pol_sym2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`pol_sym2`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["pol_sym2"] = $fdata;
//	pol_sym3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "pol_sym3";
	$fdata["GoodName"] = "pol_sym3";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","pol_sym3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "pol_sym3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`pol_sym3`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataDIA_QR_reading["pol_sym3"] = $fdata;
//	sorting_reflect_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "sorting_reflect_flag";
	$fdata["GoodName"] = "sorting_reflect_flag";
	$fdata["ownerTable"] = "DIA_QR_reading";
	$fdata["Label"] = GetFieldLabel("DIA_QR_reading","sorting_reflect_flag");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sorting_reflect_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sorting_reflect_flag`";

	
	
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




	$tdataDIA_QR_reading["sorting_reflect_flag"] = $fdata;


$tables_data["DIA_QR_reading"]=&$tdataDIA_QR_reading;
$field_labels["DIA_QR_reading"] = &$fieldLabelsDIA_QR_reading;
$fieldToolTips["DIA_QR_reading"] = &$fieldToolTipsDIA_QR_reading;
$placeHolders["DIA_QR_reading"] = &$placeHoldersDIA_QR_reading;
$page_titles["DIA_QR_reading"] = &$pageTitlesDIA_QR_reading;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["DIA_QR_reading"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["DIA_QR_reading"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_DIA_QR_reading()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`sorting_num`,  	`parent_stone`,  	`color`,  	`clarity`,  	`other1`,  	`other2`,  	`other3`,  	`fluo`,  	`cofl`,  	`size1`,  	`size2`,  	`size3`,  	`pol_sym`,  	`appraiser`,  	`text_all`,  	`product_id`,  	`update_at`,  	`update_by`,  	`create_at`,  	`create_by`,  	`other4`,  	`pol_sym2`,  	`pol_sym3`,  	`sorting_reflect_flag`";
$proto0["m_strFrom"] = "FROM `DIA_QR_reading`";
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
	"m_strName" => "id",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "DIA_QR_reading";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sorting_num",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto8["m_sql"] = "`sorting_num`";
$proto8["m_srcTableName"] = "DIA_QR_reading";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "parent_stone",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto10["m_sql"] = "`parent_stone`";
$proto10["m_srcTableName"] = "DIA_QR_reading";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto12["m_sql"] = "`color`";
$proto12["m_srcTableName"] = "DIA_QR_reading";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "clarity",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto14["m_sql"] = "`clarity`";
$proto14["m_srcTableName"] = "DIA_QR_reading";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "other1",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto16["m_sql"] = "`other1`";
$proto16["m_srcTableName"] = "DIA_QR_reading";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "other2",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto18["m_sql"] = "`other2`";
$proto18["m_srcTableName"] = "DIA_QR_reading";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "other3",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto20["m_sql"] = "`other3`";
$proto20["m_srcTableName"] = "DIA_QR_reading";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fluo",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto22["m_sql"] = "`fluo`";
$proto22["m_srcTableName"] = "DIA_QR_reading";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cofl",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto24["m_sql"] = "`cofl`";
$proto24["m_srcTableName"] = "DIA_QR_reading";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "size1",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto26["m_sql"] = "`size1`";
$proto26["m_srcTableName"] = "DIA_QR_reading";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "size2",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto28["m_sql"] = "`size2`";
$proto28["m_srcTableName"] = "DIA_QR_reading";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "size3",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto30["m_sql"] = "`size3`";
$proto30["m_srcTableName"] = "DIA_QR_reading";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "pol_sym",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto32["m_sql"] = "`pol_sym`";
$proto32["m_srcTableName"] = "DIA_QR_reading";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "appraiser",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto34["m_sql"] = "`appraiser`";
$proto34["m_srcTableName"] = "DIA_QR_reading";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "text_all",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto36["m_sql"] = "`text_all`";
$proto36["m_srcTableName"] = "DIA_QR_reading";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto38["m_sql"] = "`product_id`";
$proto38["m_srcTableName"] = "DIA_QR_reading";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto40["m_sql"] = "`update_at`";
$proto40["m_srcTableName"] = "DIA_QR_reading";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto42["m_sql"] = "`update_by`";
$proto42["m_srcTableName"] = "DIA_QR_reading";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto44["m_sql"] = "`create_at`";
$proto44["m_srcTableName"] = "DIA_QR_reading";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto46["m_sql"] = "`create_by`";
$proto46["m_srcTableName"] = "DIA_QR_reading";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "other4",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto48["m_sql"] = "`other4`";
$proto48["m_srcTableName"] = "DIA_QR_reading";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "pol_sym2",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto50["m_sql"] = "`pol_sym2`";
$proto50["m_srcTableName"] = "DIA_QR_reading";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "pol_sym3",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto52["m_sql"] = "`pol_sym3`";
$proto52["m_srcTableName"] = "DIA_QR_reading";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "sorting_reflect_flag",
	"m_strTable" => "DIA_QR_reading",
	"m_srcTableName" => "DIA_QR_reading"
));

$proto54["m_sql"] = "`sorting_reflect_flag`";
$proto54["m_srcTableName"] = "DIA_QR_reading";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "DIA_QR_reading";
$proto57["m_srcTableName"] = "DIA_QR_reading";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "id";
$proto57["m_columns"][] = "sorting_num";
$proto57["m_columns"][] = "parent_stone";
$proto57["m_columns"][] = "color";
$proto57["m_columns"][] = "clarity";
$proto57["m_columns"][] = "other1";
$proto57["m_columns"][] = "other2";
$proto57["m_columns"][] = "other3";
$proto57["m_columns"][] = "fluo";
$proto57["m_columns"][] = "cofl";
$proto57["m_columns"][] = "size1";
$proto57["m_columns"][] = "size2";
$proto57["m_columns"][] = "size3";
$proto57["m_columns"][] = "pol_sym";
$proto57["m_columns"][] = "appraiser";
$proto57["m_columns"][] = "text_all";
$proto57["m_columns"][] = "product_id";
$proto57["m_columns"][] = "update_at";
$proto57["m_columns"][] = "update_by";
$proto57["m_columns"][] = "create_at";
$proto57["m_columns"][] = "create_by";
$proto57["m_columns"][] = "other4";
$proto57["m_columns"][] = "pol_sym2";
$proto57["m_columns"][] = "pol_sym3";
$proto57["m_columns"][] = "sorting_reflect_flag";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "`DIA_QR_reading`";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "DIA_QR_reading";
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
$proto0["m_srcTableName"]="DIA_QR_reading";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_DIA_QR_reading = createSqlQuery_DIA_QR_reading();


	
		;

																									

$tdataDIA_QR_reading[".sqlquery"] = $queryData_DIA_QR_reading;

include_once(getabspath("include/DIA_QR_reading_events.php"));
$tableEvents["DIA_QR_reading"] = new eventclass_DIA_QR_reading;
$tdataDIA_QR_reading[".hasEvents"] = true;

?>