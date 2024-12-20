<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_transfer_confirm = array();
	$tdataEoc_transfer_confirm[".truncateText"] = true;
	$tdataEoc_transfer_confirm[".NumberOfChars"] = 200;
	$tdataEoc_transfer_confirm[".ShortName"] = "Eoc_transfer_confirm";
	$tdataEoc_transfer_confirm[".OwnerID"] = "";
	$tdataEoc_transfer_confirm[".OriginalTable"] = "Eoc_takuhai";

//	field labels
$fieldLabelsEoc_transfer_confirm = array();
$fieldToolTipsEoc_transfer_confirm = array();
$pageTitlesEoc_transfer_confirm = array();
$placeHoldersEoc_transfer_confirm = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_transfer_confirm["Japanese"] = array();
	$fieldToolTipsEoc_transfer_confirm["Japanese"] = array();
	$placeHoldersEoc_transfer_confirm["Japanese"] = array();
	$pageTitlesEoc_transfer_confirm["Japanese"] = array();
	$fieldLabelsEoc_transfer_confirm["Japanese"]["id"] = "宅配取引Id";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["id"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["id"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["status"] = "ステータス";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["status"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["status"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["name1"] = "名前";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["name1"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["name1"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["name2"] = "フリガナ";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["name2"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["name2"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["seiyakukin"] = "成約金";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["seiyakukin"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["seiyakukin"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["updated_by"] = "最終更新者";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["updated_by"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["updated_by"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["satei_sougaku"] = "査定総額";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["satei_sougaku"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["satei_sougaku"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["kaibi_sougaku"] = "買い備総額";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["kaibi_sougaku"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["kaibi_sougaku"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["satei_by"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["satei_by"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["create_by"] = "買い備登録者";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["create_by"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["create_by"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["price_error"] = "金額エラー";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["price_error"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["price_error"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["purchase_type"] = "買取種別";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["purchase_type"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["purchase_type"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["awazu_kensuu"] = "合わず件数";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["awazu_kensuu"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["awazu_kensuu"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["satei_hi"] = "査定日";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["satei_hi"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["satei_hi"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["seiyaku_by"] = "成約人";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["seiyaku_by"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["seiyaku_by"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["seiyaku_hi"] = "成約日";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["seiyaku_hi"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["seiyaku_hi"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["remark"] = "備考";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["remark"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["remark"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["mail1"] = "メアド";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["mail1"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["mail1"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["mail2"] = "メアド2";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["mail2"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["mail2"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["line_check"] = "ライン本確";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["line_check"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["line_check"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["kinyuukikan"] = "金融機関情報";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["kinyuukikan"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["kinyuukikan"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["bank_details_code"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["bank_details_code"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["name"] = "Name";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["name"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["name"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["ching_created_at"] = "買い備登録日";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["ching_created_at"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["ching_created_at"] = "";
	$fieldLabelsEoc_transfer_confirm["Japanese"]["meigi_hankaku_kana"] = "Meigi Hankaku Kana";
	$fieldToolTipsEoc_transfer_confirm["Japanese"]["meigi_hankaku_kana"] = "";
	$placeHoldersEoc_transfer_confirm["Japanese"]["meigi_hankaku_kana"] = "";
	if (count($fieldToolTipsEoc_transfer_confirm["Japanese"]))
		$tdataEoc_transfer_confirm[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_transfer_confirm[""] = array();
	$fieldToolTipsEoc_transfer_confirm[""] = array();
	$placeHoldersEoc_transfer_confirm[""] = array();
	$pageTitlesEoc_transfer_confirm[""] = array();
	$fieldLabelsEoc_transfer_confirm[""]["id"] = "Id";
	$fieldToolTipsEoc_transfer_confirm[""]["id"] = "";
	$placeHoldersEoc_transfer_confirm[""]["id"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_transfer_confirm[""]["ecc_id"] = "";
	$placeHoldersEoc_transfer_confirm[""]["ecc_id"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["status"] = "Status";
	$fieldToolTipsEoc_transfer_confirm[""]["status"] = "";
	$placeHoldersEoc_transfer_confirm[""]["status"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["name1"] = "Name1";
	$fieldToolTipsEoc_transfer_confirm[""]["name1"] = "";
	$placeHoldersEoc_transfer_confirm[""]["name1"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["name2"] = "Name2";
	$fieldToolTipsEoc_transfer_confirm[""]["name2"] = "";
	$placeHoldersEoc_transfer_confirm[""]["name2"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["seiyakukin"] = "Seiyakukin";
	$fieldToolTipsEoc_transfer_confirm[""]["seiyakukin"] = "";
	$placeHoldersEoc_transfer_confirm[""]["seiyakukin"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_transfer_confirm[""]["updated_at"] = "";
	$placeHoldersEoc_transfer_confirm[""]["updated_at"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_transfer_confirm[""]["updated_by"] = "";
	$placeHoldersEoc_transfer_confirm[""]["updated_by"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["satei_sougaku"] = "Satei Sougaku";
	$fieldToolTipsEoc_transfer_confirm[""]["satei_sougaku"] = "";
	$placeHoldersEoc_transfer_confirm[""]["satei_sougaku"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["kaibi_sougaku"] = "Kaibi Sougaku";
	$fieldToolTipsEoc_transfer_confirm[""]["kaibi_sougaku"] = "";
	$placeHoldersEoc_transfer_confirm[""]["kaibi_sougaku"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["satei_by"] = "Satei By";
	$fieldToolTipsEoc_transfer_confirm[""]["satei_by"] = "";
	$placeHoldersEoc_transfer_confirm[""]["satei_by"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["create_by"] = "Create By";
	$fieldToolTipsEoc_transfer_confirm[""]["create_by"] = "";
	$placeHoldersEoc_transfer_confirm[""]["create_by"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["price_error"] = "Price Error";
	$fieldToolTipsEoc_transfer_confirm[""]["price_error"] = "";
	$placeHoldersEoc_transfer_confirm[""]["price_error"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["purchase_type"] = "Purchase Type";
	$fieldToolTipsEoc_transfer_confirm[""]["purchase_type"] = "";
	$placeHoldersEoc_transfer_confirm[""]["purchase_type"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["awazu_kensuu"] = "Awazu Kensuu";
	$fieldToolTipsEoc_transfer_confirm[""]["awazu_kensuu"] = "";
	$placeHoldersEoc_transfer_confirm[""]["awazu_kensuu"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["satei_hi"] = "Satei Hi";
	$fieldToolTipsEoc_transfer_confirm[""]["satei_hi"] = "";
	$placeHoldersEoc_transfer_confirm[""]["satei_hi"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["seiyaku_by"] = "Seiyaku By";
	$fieldToolTipsEoc_transfer_confirm[""]["seiyaku_by"] = "";
	$placeHoldersEoc_transfer_confirm[""]["seiyaku_by"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["seiyaku_hi"] = "Seiyaku Hi";
	$fieldToolTipsEoc_transfer_confirm[""]["seiyaku_hi"] = "";
	$placeHoldersEoc_transfer_confirm[""]["seiyaku_hi"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["remark"] = "Remark";
	$fieldToolTipsEoc_transfer_confirm[""]["remark"] = "";
	$placeHoldersEoc_transfer_confirm[""]["remark"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["mail1"] = "Mail1";
	$fieldToolTipsEoc_transfer_confirm[""]["mail1"] = "";
	$placeHoldersEoc_transfer_confirm[""]["mail1"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["mail2"] = "Mail2";
	$fieldToolTipsEoc_transfer_confirm[""]["mail2"] = "";
	$placeHoldersEoc_transfer_confirm[""]["mail2"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["line_check"] = "Line Check";
	$fieldToolTipsEoc_transfer_confirm[""]["line_check"] = "";
	$placeHoldersEoc_transfer_confirm[""]["line_check"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["kinyuukikan"] = "Kinyuukikan";
	$fieldToolTipsEoc_transfer_confirm[""]["kinyuukikan"] = "";
	$placeHoldersEoc_transfer_confirm[""]["kinyuukikan"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsEoc_transfer_confirm[""]["bank_details_code"] = "";
	$placeHoldersEoc_transfer_confirm[""]["bank_details_code"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["name"] = "Name";
	$fieldToolTipsEoc_transfer_confirm[""]["name"] = "";
	$placeHoldersEoc_transfer_confirm[""]["name"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["ching_created_at"] = "Ching Created At";
	$fieldToolTipsEoc_transfer_confirm[""]["ching_created_at"] = "";
	$placeHoldersEoc_transfer_confirm[""]["ching_created_at"] = "";
	$fieldLabelsEoc_transfer_confirm[""]["meigi_hankaku_kana"] = "Meigi Hankaku Kana";
	$fieldToolTipsEoc_transfer_confirm[""]["meigi_hankaku_kana"] = "";
	$placeHoldersEoc_transfer_confirm[""]["meigi_hankaku_kana"] = "";
	if (count($fieldToolTipsEoc_transfer_confirm[""]))
		$tdataEoc_transfer_confirm[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_transfer_confirm["English"] = array();
	$fieldToolTipsEoc_transfer_confirm["English"] = array();
	$placeHoldersEoc_transfer_confirm["English"] = array();
	$pageTitlesEoc_transfer_confirm["English"] = array();
	$fieldLabelsEoc_transfer_confirm["English"]["id"] = "Id";
	$fieldToolTipsEoc_transfer_confirm["English"]["id"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["id"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_transfer_confirm["English"]["ecc_id"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["ecc_id"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["status"] = "Status";
	$fieldToolTipsEoc_transfer_confirm["English"]["status"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["status"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["name1"] = "Name1";
	$fieldToolTipsEoc_transfer_confirm["English"]["name1"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["name1"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["name2"] = "Name2";
	$fieldToolTipsEoc_transfer_confirm["English"]["name2"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["name2"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["seiyakukin"] = "Seiyakukin";
	$fieldToolTipsEoc_transfer_confirm["English"]["seiyakukin"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["seiyakukin"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_transfer_confirm["English"]["updated_at"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["updated_at"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_transfer_confirm["English"]["updated_by"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["updated_by"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["satei_sougaku"] = "Satei Sougaku";
	$fieldToolTipsEoc_transfer_confirm["English"]["satei_sougaku"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["satei_sougaku"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["kaibi_sougaku"] = "Kaibi Sougaku";
	$fieldToolTipsEoc_transfer_confirm["English"]["kaibi_sougaku"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["kaibi_sougaku"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["satei_by"] = "Satei By";
	$fieldToolTipsEoc_transfer_confirm["English"]["satei_by"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["satei_by"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["create_by"] = "Create By";
	$fieldToolTipsEoc_transfer_confirm["English"]["create_by"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["create_by"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["price_error"] = "Price Error";
	$fieldToolTipsEoc_transfer_confirm["English"]["price_error"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["price_error"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["purchase_type"] = "Purchase Type";
	$fieldToolTipsEoc_transfer_confirm["English"]["purchase_type"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["purchase_type"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["awazu_kensuu"] = "Awazu Kensuu";
	$fieldToolTipsEoc_transfer_confirm["English"]["awazu_kensuu"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["awazu_kensuu"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["satei_hi"] = "Satei Hi";
	$fieldToolTipsEoc_transfer_confirm["English"]["satei_hi"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["satei_hi"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["seiyaku_by"] = "Seiyaku By";
	$fieldToolTipsEoc_transfer_confirm["English"]["seiyaku_by"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["seiyaku_by"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["seiyaku_hi"] = "Seiyaku Hi";
	$fieldToolTipsEoc_transfer_confirm["English"]["seiyaku_hi"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["seiyaku_hi"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["remark"] = "Remark";
	$fieldToolTipsEoc_transfer_confirm["English"]["remark"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["remark"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["mail1"] = "Mail1";
	$fieldToolTipsEoc_transfer_confirm["English"]["mail1"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["mail1"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["mail2"] = "Mail2";
	$fieldToolTipsEoc_transfer_confirm["English"]["mail2"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["mail2"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["line_check"] = "Line Check";
	$fieldToolTipsEoc_transfer_confirm["English"]["line_check"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["line_check"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["kinyuukikan"] = "Kinyuukikan";
	$fieldToolTipsEoc_transfer_confirm["English"]["kinyuukikan"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["kinyuukikan"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["bank_details_code"] = "Bank Details Code";
	$fieldToolTipsEoc_transfer_confirm["English"]["bank_details_code"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["bank_details_code"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["name"] = "Name";
	$fieldToolTipsEoc_transfer_confirm["English"]["name"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["name"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["ching_created_at"] = "Ching Created At";
	$fieldToolTipsEoc_transfer_confirm["English"]["ching_created_at"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["ching_created_at"] = "";
	$fieldLabelsEoc_transfer_confirm["English"]["meigi_hankaku_kana"] = "Meigi Hankaku Kana";
	$fieldToolTipsEoc_transfer_confirm["English"]["meigi_hankaku_kana"] = "";
	$placeHoldersEoc_transfer_confirm["English"]["meigi_hankaku_kana"] = "";
	if (count($fieldToolTipsEoc_transfer_confirm["English"]))
		$tdataEoc_transfer_confirm[".isUseToolTips"] = true;
}


	$tdataEoc_transfer_confirm[".NCSearch"] = true;



$tdataEoc_transfer_confirm[".shortTableName"] = "Eoc_transfer_confirm";
$tdataEoc_transfer_confirm[".nSecOptions"] = 0;
$tdataEoc_transfer_confirm[".recsPerRowPrint"] = 1;
$tdataEoc_transfer_confirm[".mainTableOwnerID"] = "";
$tdataEoc_transfer_confirm[".moveNext"] = 1;
$tdataEoc_transfer_confirm[".entityType"] = 1;

$tdataEoc_transfer_confirm[".strOriginalTableName"] = "Eoc_takuhai";

	



$tdataEoc_transfer_confirm[".showAddInPopup"] = false;

$tdataEoc_transfer_confirm[".showEditInPopup"] = false;

$tdataEoc_transfer_confirm[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_transfer_confirm[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_transfer_confirm[".fieldsForRegister"] = array();

$tdataEoc_transfer_confirm[".listAjax"] = false;

	$tdataEoc_transfer_confirm[".audit"] = true;

	$tdataEoc_transfer_confirm[".locking"] = false;



$tdataEoc_transfer_confirm[".list"] = true;

$tdataEoc_transfer_confirm[".inlineEdit"] = true;


$tdataEoc_transfer_confirm[".reorderRecordsByHeader"] = true;





$tdataEoc_transfer_confirm[".exportTo"] = true;



$tdataEoc_transfer_confirm[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_transfer_confirm[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_transfer_confirm[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_transfer_confirm[".searchSaving"] = false;
//

$tdataEoc_transfer_confirm[".showSearchPanel"] = true;
		$tdataEoc_transfer_confirm[".flexibleSearch"] = true;

$tdataEoc_transfer_confirm[".isUseAjaxSuggest"] = true;

$tdataEoc_transfer_confirm[".rowHighlite"] = true;



																																																																																																									
					
					
					
					
																																																																																																																					

$tdataEoc_transfer_confirm[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_transfer_confirm[".buttonsAdded"] = true;

$tdataEoc_transfer_confirm[".addPageEvents"] = true;

// use timepicker for search panel
$tdataEoc_transfer_confirm[".isUseTimeForSearch"] = false;



$tdataEoc_transfer_confirm[".badgeColor"] = "D2691E";

$tdataEoc_transfer_confirm[".detailsLinksOnList"] = "1";

$tdataEoc_transfer_confirm[".allSearchFields"] = array();
$tdataEoc_transfer_confirm[".filterFields"] = array();
$tdataEoc_transfer_confirm[".requiredSearchFields"] = array();

$tdataEoc_transfer_confirm[".allSearchFields"][] = "ching_created_at";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "mail1";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "mail2";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "line_check";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "kinyuukikan";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "price_error";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "awazu_kensuu";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "id";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "status";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "ecc_id";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "name1";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "name2";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "purchase_type";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "satei_sougaku";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "kaibi_sougaku";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "satei_hi";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "satei_by";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "seiyaku_hi";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "seiyaku_by";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "create_by";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "updated_at";
	$tdataEoc_transfer_confirm[".allSearchFields"][] = "updated_by";
	

$tdataEoc_transfer_confirm[".googleLikeFields"] = array();
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "id";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "status";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "ecc_id";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "name1";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "name2";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "seiyakukin";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "satei_sougaku";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "kaibi_sougaku";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "satei_by";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "create_by";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "ching_created_at";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "updated_at";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "updated_by";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "price_error";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "purchase_type";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "awazu_kensuu";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "satei_hi";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "seiyaku_by";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "seiyaku_hi";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "remark";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "mail1";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "mail2";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "line_check";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "kinyuukikan";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "bank_details_code";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "name";
$tdataEoc_transfer_confirm[".googleLikeFields"][] = "meigi_hankaku_kana";

$tdataEoc_transfer_confirm[".panelSearchFields"] = array();
$tdataEoc_transfer_confirm[".searchPanelOptions"] = array();
$tdataEoc_transfer_confirm[".panelSearchFields"][] = "price_error";
	$tdataEoc_transfer_confirm[".panelSearchFields"][] = "awazu_kensuu";
	$tdataEoc_transfer_confirm[".panelSearchFields"][] = "id";
	$tdataEoc_transfer_confirm[".panelSearchFields"][] = "status";
	$tdataEoc_transfer_confirm[".panelSearchFields"][] = "ecc_id";
	$tdataEoc_transfer_confirm[".panelSearchFields"][] = "name1";
	$tdataEoc_transfer_confirm[".panelSearchFields"][] = "name2";
	$tdataEoc_transfer_confirm[".panelSearchFields"][] = "purchase_type";
	$tdataEoc_transfer_confirm[".panelSearchFields"][] = "satei_by";
	$tdataEoc_transfer_confirm[".panelSearchFields"][] = "create_by";
	$tdataEoc_transfer_confirm[".panelSearchFields"][] = "updated_at";
	$tdataEoc_transfer_confirm[".panelSearchFields"][] = "updated_by";
	
$tdataEoc_transfer_confirm[".advSearchFields"] = array();
$tdataEoc_transfer_confirm[".advSearchFields"][] = "ching_created_at";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "mail1";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "mail2";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "line_check";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "kinyuukikan";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "price_error";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "awazu_kensuu";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "id";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "status";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "ecc_id";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "name1";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "name2";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "purchase_type";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "satei_sougaku";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "kaibi_sougaku";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "satei_hi";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "satei_by";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "seiyaku_hi";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "seiyaku_by";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "create_by";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "updated_at";
$tdataEoc_transfer_confirm[".advSearchFields"][] = "updated_by";

$tdataEoc_transfer_confirm[".tableType"] = "list";

$tdataEoc_transfer_confirm[".printerPageOrientation"] = 0;
$tdataEoc_transfer_confirm[".nPrinterPageScale"] = 100;

$tdataEoc_transfer_confirm[".nPrinterSplitRecords"] = 40;

$tdataEoc_transfer_confirm[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_transfer_confirm[".geocodingEnabled"] = false;





$tdataEoc_transfer_confirm[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_transfer_confirm[".pageSize"] = 500;

$tdataEoc_transfer_confirm[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `Eoc`.`name2` ASC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_transfer_confirm[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_transfer_confirm[".orderindexes"] = array();
$tdataEoc_transfer_confirm[".orderindexes"][] = array(5, (1 ? "ASC" : "DESC"), "`Eoc`.`name2`");

$tdataEoc_transfer_confirm[".sqlHead"] = "SELECT `Eoc_takuhai`.`id`,  `Eoc_takuhai`.`status`,  `Eoc`.`ecc_id`,  `Eoc`.`name1`,  `Eoc`.`name2`,  `Eoc_takuhai`.`seiyakukin`,  `vw_Eoc_takuhai_group_shouhin`.`satei_sougaku`,  `vw_Eoc_takuhai_group_Eoc_chigins`.`kaibi_sougaku`,  `vw_Eoc_takuhai_group_shouhin`.`satei_by`,  `vw_Eoc_takuhai_group_Eoc_chigins`.`create_by`,  `vw_Eoc_takuhai_group_Eoc_chigins`.`ching_created_at`,  `Eoc_takuhai`.`updated_at`,  `Eoc_takuhai`.`updated_by`,  `Eoc_takuhai`.`price_error`,  `Eoc_takuhai`.`purchase_type`,  `vw_Eoc_takuhai_group_shouhin_awazu`.`awazu_kensuu`,  `vw_Eoc_takuhai_group_shouhin`.`satei_hi`,  `vw_Eoc_takuhai_group_shouhin`.`seiyaku_by`,  `vw_Eoc_takuhai_group_shouhin`.`seiyaku_hi`,  `Eoc`.`remark`,  `Eoc`.`mail1`,  `Eoc`.`mail2`,  `Eoc`.`line_check`,  CONCAT(  '●金融機関名:'  , IFNULL(`mst_bank`.`name`, \"\")  , '\\n●金融機関コード:'  , IFNULL(`Eoc`.`bank_details_code`, \"\")  , '\\n●預金種別:'  , IFNULL(`Eoc`.`bank_details_deposit_type`, \"\")  , '\\n●支店名:'  , IFNULL(`Eoc`.`bank_details_blunch_name`, \"\")  , '\\n●支店コード:'  , IFNULL(`Eoc`.`bank_details_blunch_code`, \"\")  , '\\n●口座番号:'  , IFNULL(`Eoc`.`bank_details_account_number`, \"\")  , '\\n●記号:'  , IFNULL(`Eoc`.`bank_details_symbol`, \"\")  , '\\n●番号:'  , IFNULL(`Eoc`.`bank_details_number`, \"\")  , '\\n●名義人:'  , IFNULL(`Eoc`.`bank_details_account_name`, \"\")  , '\\n●対応外銀行:'  , IFNULL(`Eoc`.`outside_bank`, \"\")  , '\\n●旧姓/新姓/その他:'  , IFNULL(`Eoc`.`new_name`, \"\")  ) AS `kinyuukikan`,  `Eoc`.`bank_details_code`,  `mst_bank`.`name`,  Eoc.meigi_hankaku_kana";
$tdataEoc_transfer_confirm[".sqlFrom"] = "FROM `Eoc_takuhai`  LEFT OUTER JOIN `Eoc` ON `Eoc_takuhai`.`ecc_id` = `Eoc`.`ecc_id`  LEFT OUTER JOIN `vw_Eoc_takuhai_group_shouhin` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_shouhin`.`Eoc_takuhai_id`  LEFT OUTER JOIN `vw_Eoc_takuhai_group_Eoc_chigins` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_Eoc_chigins`.`Eoc_takuhai_id`  LEFT OUTER JOIN `vw_Eoc_takuhai_group_shouhin_awazu` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_shouhin_awazu`.`Eoc_takuhai_id`  LEFT OUTER JOIN `mst_bank` ON `Eoc`.`bank_details_code` = `mst_bank`.`bank_code` AND `mst_bank`.category=1";
$tdataEoc_transfer_confirm[".sqlWhereExpr"] = "(`Eoc_takuhai`.`status` =5 OR `Eoc_takuhai`.`status` =6 OR `Eoc_takuhai`.`status` =16)  AND `vw_Eoc_takuhai_group_Eoc_chigins`.`kaibi_sougaku` > 0";
$tdataEoc_transfer_confirm[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_transfer_confirm[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_transfer_confirm[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_transfer_confirm[".highlightSearchResults"] = true;

$tableKeysEoc_transfer_confirm = array();
$tableKeysEoc_transfer_confirm[] = "id";
$tdataEoc_transfer_confirm[".Keys"] = $tableKeysEoc_transfer_confirm;

$tdataEoc_transfer_confirm[".listFields"] = array();
$tdataEoc_transfer_confirm[".listFields"][] = "line_check";
$tdataEoc_transfer_confirm[".listFields"][] = "kinyuukikan";
$tdataEoc_transfer_confirm[".listFields"][] = "mail1";
$tdataEoc_transfer_confirm[".listFields"][] = "mail2";
$tdataEoc_transfer_confirm[".listFields"][] = "price_error";
$tdataEoc_transfer_confirm[".listFields"][] = "awazu_kensuu";
$tdataEoc_transfer_confirm[".listFields"][] = "id";
$tdataEoc_transfer_confirm[".listFields"][] = "status";
$tdataEoc_transfer_confirm[".listFields"][] = "ecc_id";
$tdataEoc_transfer_confirm[".listFields"][] = "name1";
$tdataEoc_transfer_confirm[".listFields"][] = "name2";
$tdataEoc_transfer_confirm[".listFields"][] = "purchase_type";
$tdataEoc_transfer_confirm[".listFields"][] = "satei_sougaku";
$tdataEoc_transfer_confirm[".listFields"][] = "kaibi_sougaku";
$tdataEoc_transfer_confirm[".listFields"][] = "satei_hi";
$tdataEoc_transfer_confirm[".listFields"][] = "satei_by";
$tdataEoc_transfer_confirm[".listFields"][] = "seiyaku_hi";
$tdataEoc_transfer_confirm[".listFields"][] = "seiyaku_by";
$tdataEoc_transfer_confirm[".listFields"][] = "ching_created_at";
$tdataEoc_transfer_confirm[".listFields"][] = "create_by";
$tdataEoc_transfer_confirm[".listFields"][] = "updated_at";
$tdataEoc_transfer_confirm[".listFields"][] = "updated_by";

$tdataEoc_transfer_confirm[".hideMobileList"] = array();


$tdataEoc_transfer_confirm[".viewFields"] = array();

$tdataEoc_transfer_confirm[".addFields"] = array();

$tdataEoc_transfer_confirm[".masterListFields"] = array();
$tdataEoc_transfer_confirm[".masterListFields"][] = "ching_created_at";
$tdataEoc_transfer_confirm[".masterListFields"][] = "mail1";
$tdataEoc_transfer_confirm[".masterListFields"][] = "mail2";
$tdataEoc_transfer_confirm[".masterListFields"][] = "line_check";
$tdataEoc_transfer_confirm[".masterListFields"][] = "kinyuukikan";
$tdataEoc_transfer_confirm[".masterListFields"][] = "price_error";
$tdataEoc_transfer_confirm[".masterListFields"][] = "awazu_kensuu";
$tdataEoc_transfer_confirm[".masterListFields"][] = "id";
$tdataEoc_transfer_confirm[".masterListFields"][] = "status";
$tdataEoc_transfer_confirm[".masterListFields"][] = "ecc_id";
$tdataEoc_transfer_confirm[".masterListFields"][] = "name1";
$tdataEoc_transfer_confirm[".masterListFields"][] = "name2";
$tdataEoc_transfer_confirm[".masterListFields"][] = "purchase_type";
$tdataEoc_transfer_confirm[".masterListFields"][] = "satei_sougaku";
$tdataEoc_transfer_confirm[".masterListFields"][] = "kaibi_sougaku";
$tdataEoc_transfer_confirm[".masterListFields"][] = "satei_hi";
$tdataEoc_transfer_confirm[".masterListFields"][] = "satei_by";
$tdataEoc_transfer_confirm[".masterListFields"][] = "seiyaku_hi";
$tdataEoc_transfer_confirm[".masterListFields"][] = "seiyaku_by";
$tdataEoc_transfer_confirm[".masterListFields"][] = "create_by";
$tdataEoc_transfer_confirm[".masterListFields"][] = "updated_at";
$tdataEoc_transfer_confirm[".masterListFields"][] = "updated_by";

$tdataEoc_transfer_confirm[".inlineAddFields"] = array();

$tdataEoc_transfer_confirm[".editFields"] = array();

$tdataEoc_transfer_confirm[".inlineEditFields"] = array();
$tdataEoc_transfer_confirm[".inlineEditFields"][] = "price_error";
$tdataEoc_transfer_confirm[".inlineEditFields"][] = "status";
$tdataEoc_transfer_confirm[".inlineEditFields"][] = "purchase_type";

$tdataEoc_transfer_confirm[".updateSelectedFields"] = array();


$tdataEoc_transfer_confirm[".exportFields"] = array();
$tdataEoc_transfer_confirm[".exportFields"][] = "kinyuukikan";
$tdataEoc_transfer_confirm[".exportFields"][] = "satei_sougaku";
$tdataEoc_transfer_confirm[".exportFields"][] = "kaibi_sougaku";
$tdataEoc_transfer_confirm[".exportFields"][] = "status";
$tdataEoc_transfer_confirm[".exportFields"][] = "ecc_id";
$tdataEoc_transfer_confirm[".exportFields"][] = "name1";
$tdataEoc_transfer_confirm[".exportFields"][] = "name2";
$tdataEoc_transfer_confirm[".exportFields"][] = "satei_hi";
$tdataEoc_transfer_confirm[".exportFields"][] = "seiyaku_hi";
$tdataEoc_transfer_confirm[".exportFields"][] = "ching_created_at";
$tdataEoc_transfer_confirm[".exportFields"][] = "updated_by";

$tdataEoc_transfer_confirm[".importFields"] = array();

$tdataEoc_transfer_confirm[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_transfer_confirm["id"] = $fdata;
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdataEoc_transfer_confirm["status"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","ecc_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdataEoc_transfer_confirm["ecc_id"] = $fdata;
//	name1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name1";
	$fdata["GoodName"] = "name1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","name1");
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




	$tdataEoc_transfer_confirm["name1"] = $fdata;
//	name2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "name2";
	$fdata["GoodName"] = "name2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","name2");
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




	$tdataEoc_transfer_confirm["name2"] = $fdata;
//	seiyakukin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "seiyakukin";
	$fdata["GoodName"] = "seiyakukin";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","seiyakukin");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "seiyakukin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`seiyakukin`";

	
	
			
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








	$tdataEoc_transfer_confirm["seiyakukin"] = $fdata;
//	satei_sougaku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "satei_sougaku";
	$fdata["GoodName"] = "satei_sougaku";
	$fdata["ownerTable"] = "vw_Eoc_takuhai_group_shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","satei_sougaku");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_sougaku";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_Eoc_takuhai_group_shouhin`.`satei_sougaku`";

	
	
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




	$tdataEoc_transfer_confirm["satei_sougaku"] = $fdata;
//	kaibi_sougaku
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "kaibi_sougaku";
	$fdata["GoodName"] = "kaibi_sougaku";
	$fdata["ownerTable"] = "vw_Eoc_takuhai_group_Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","kaibi_sougaku");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kaibi_sougaku";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_Eoc_takuhai_group_Eoc_chigins`.`kaibi_sougaku`";

	
	
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




	$tdataEoc_transfer_confirm["kaibi_sougaku"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "vw_Eoc_takuhai_group_shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","satei_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "satei_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_Eoc_takuhai_group_shouhin`.`satei_by`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_transfer_confirm["satei_by"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "vw_Eoc_takuhai_group_Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_Eoc_takuhai_group_Eoc_chigins`.`create_by`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_transfer_confirm["create_by"] = $fdata;
//	ching_created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ching_created_at";
	$fdata["GoodName"] = "ching_created_at";
	$fdata["ownerTable"] = "vw_Eoc_takuhai_group_Eoc_chigins";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","ching_created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ching_created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_Eoc_takuhai_group_Eoc_chigins`.`ching_created_at`";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_transfer_confirm["ching_created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_transfer_confirm["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","updated_by");
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




	$tdataEoc_transfer_confirm["updated_by"] = $fdata;
//	price_error
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "price_error";
	$fdata["GoodName"] = "price_error";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","price_error");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "price_error";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`price_error`";

	
	
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




	$tdataEoc_transfer_confirm["price_error"] = $fdata;
//	purchase_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "purchase_type";
	$fdata["GoodName"] = "purchase_type";
	$fdata["ownerTable"] = "Eoc_takuhai";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","purchase_type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "purchase_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc_takuhai`.`purchase_type`";

	
	
				$fdata["FieldPermissions"] = true;

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
	$edata["LookupTable"] = "_purchase_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "purchase_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "purchase_name";

	
	$edata["LookupOrderBy"] = "sorter";

	
	
	
	

	
	
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




	$tdataEoc_transfer_confirm["purchase_type"] = $fdata;
//	awazu_kensuu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "awazu_kensuu";
	$fdata["GoodName"] = "awazu_kensuu";
	$fdata["ownerTable"] = "vw_Eoc_takuhai_group_shouhin_awazu";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","awazu_kensuu");
	$fdata["FieldType"] = 20;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "awazu_kensuu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_Eoc_takuhai_group_shouhin_awazu`.`awazu_kensuu`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_transfer_confirm["awazu_kensuu"] = $fdata;
//	satei_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "satei_hi";
	$fdata["GoodName"] = "satei_hi";
	$fdata["ownerTable"] = "vw_Eoc_takuhai_group_shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","satei_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_Eoc_takuhai_group_shouhin`.`satei_hi`";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_transfer_confirm["satei_hi"] = $fdata;
//	seiyaku_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "seiyaku_by";
	$fdata["GoodName"] = "seiyaku_by";
	$fdata["ownerTable"] = "vw_Eoc_takuhai_group_shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","seiyaku_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "seiyaku_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_Eoc_takuhai_group_shouhin`.`seiyaku_by`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_transfer_confirm["seiyaku_by"] = $fdata;
//	seiyaku_hi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "seiyaku_hi";
	$fdata["GoodName"] = "seiyaku_hi";
	$fdata["ownerTable"] = "vw_Eoc_takuhai_group_shouhin";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","seiyaku_hi");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "seiyaku_hi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`vw_Eoc_takuhai_group_shouhin`.`seiyaku_hi`";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdataEoc_transfer_confirm["seiyaku_hi"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","remark");
	$fdata["FieldType"] = 201;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "remark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`remark`";

	
	
			
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








	$tdataEoc_transfer_confirm["remark"] = $fdata;
//	mail1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "mail1";
	$fdata["GoodName"] = "mail1";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","mail1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "mail1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`mail1`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_transfer_confirm["mail1"] = $fdata;
//	mail2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "mail2";
	$fdata["GoodName"] = "mail2";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","mail2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "mail2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`mail2`";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_transfer_confirm["mail2"] = $fdata;
//	line_check
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "line_check";
	$fdata["GoodName"] = "line_check";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","line_check");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "line_check";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`line_check`";

	
	
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




	$tdataEoc_transfer_confirm["line_check"] = $fdata;
//	kinyuukikan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "kinyuukikan";
	$fdata["GoodName"] = "kinyuukikan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","kinyuukikan");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kinyuukikan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(  '●金融機関名:'  , IFNULL(`mst_bank`.`name`, \"\")  , '\\n●金融機関コード:'  , IFNULL(`Eoc`.`bank_details_code`, \"\")  , '\\n●預金種別:'  , IFNULL(`Eoc`.`bank_details_deposit_type`, \"\")  , '\\n●支店名:'  , IFNULL(`Eoc`.`bank_details_blunch_name`, \"\")  , '\\n●支店コード:'  , IFNULL(`Eoc`.`bank_details_blunch_code`, \"\")  , '\\n●口座番号:'  , IFNULL(`Eoc`.`bank_details_account_number`, \"\")  , '\\n●記号:'  , IFNULL(`Eoc`.`bank_details_symbol`, \"\")  , '\\n●番号:'  , IFNULL(`Eoc`.`bank_details_number`, \"\")  , '\\n●名義人:'  , IFNULL(`Eoc`.`bank_details_account_name`, \"\")  , '\\n●対応外銀行:'  , IFNULL(`Eoc`.`outside_bank`, \"\")  , '\\n●旧姓/新姓/その他:'  , IFNULL(`Eoc`.`new_name`, \"\")  )";

	
	
				$fdata["FieldPermissions"] = true;

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




	$tdataEoc_transfer_confirm["kinyuukikan"] = $fdata;
//	bank_details_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "bank_details_code";
	$fdata["GoodName"] = "bank_details_code";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","bank_details_code");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "bank_details_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Eoc`.`bank_details_code`";

	
	
			
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








	$tdataEoc_transfer_confirm["bank_details_code"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_bank";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","name");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_bank`.`name`";

	
	
			
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








	$tdataEoc_transfer_confirm["name"] = $fdata;
//	meigi_hankaku_kana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "meigi_hankaku_kana";
	$fdata["GoodName"] = "meigi_hankaku_kana";
	$fdata["ownerTable"] = "Eoc";
	$fdata["Label"] = GetFieldLabel("Eoc_transfer_confirm","meigi_hankaku_kana");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "meigi_hankaku_kana";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Eoc.meigi_hankaku_kana";

	
	
			
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








	$tdataEoc_transfer_confirm["meigi_hankaku_kana"] = $fdata;


$tables_data["Eoc_transfer_confirm"]=&$tdataEoc_transfer_confirm;
$field_labels["Eoc_transfer_confirm"] = &$fieldLabelsEoc_transfer_confirm;
$fieldToolTips["Eoc_transfer_confirm"] = &$fieldToolTipsEoc_transfer_confirm;
$placeHolders["Eoc_transfer_confirm"] = &$placeHoldersEoc_transfer_confirm;
$page_titles["Eoc_transfer_confirm"] = &$pageTitlesEoc_transfer_confirm;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_transfer_confirm"] = array();
//	shouhin
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="shouhin";
		$detailsParam["dOriginalTable"] = "shouhin";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "shouhin";
	$detailsParam["dCaptionTable"] = GetTableCaption("shouhin");
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
		
	$detailsTablesData["Eoc_transfer_confirm"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_transfer_confirm"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_transfer_confirm"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_transfer_confirm"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_transfer_confirm"][$dIndex]["detailKeys"][]="Eoc_takuhai_id";
//	Eoc_chigins
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_chigins";
		$detailsParam["dOriginalTable"] = "Eoc_chigins";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_chigins";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_chigins");
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
		
	$detailsTablesData["Eoc_transfer_confirm"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_transfer_confirm"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_transfer_confirm"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_transfer_confirm"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_transfer_confirm"][$dIndex]["detailKeys"][]="Eoc_takuhai_id";
//	Eoc_guestquestion_for_catch
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_guestquestion_for_catch";
		$detailsParam["dOriginalTable"] = "Eoc_guestquestion";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_guestquestion_for_catch";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_guestquestion_for_catch");
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
		
	$detailsTablesData["Eoc_transfer_confirm"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_transfer_confirm"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_transfer_confirm"][$dIndex]["masterKeys"][]="ecc_id";

				$detailsTablesData["Eoc_transfer_confirm"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_transfer_confirm"][$dIndex]["detailKeys"][]="ecc_id";

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_transfer_confirm"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_transfer_confirm()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Eoc_takuhai`.`id`,  `Eoc_takuhai`.`status`,  `Eoc`.`ecc_id`,  `Eoc`.`name1`,  `Eoc`.`name2`,  `Eoc_takuhai`.`seiyakukin`,  `vw_Eoc_takuhai_group_shouhin`.`satei_sougaku`,  `vw_Eoc_takuhai_group_Eoc_chigins`.`kaibi_sougaku`,  `vw_Eoc_takuhai_group_shouhin`.`satei_by`,  `vw_Eoc_takuhai_group_Eoc_chigins`.`create_by`,  `vw_Eoc_takuhai_group_Eoc_chigins`.`ching_created_at`,  `Eoc_takuhai`.`updated_at`,  `Eoc_takuhai`.`updated_by`,  `Eoc_takuhai`.`price_error`,  `Eoc_takuhai`.`purchase_type`,  `vw_Eoc_takuhai_group_shouhin_awazu`.`awazu_kensuu`,  `vw_Eoc_takuhai_group_shouhin`.`satei_hi`,  `vw_Eoc_takuhai_group_shouhin`.`seiyaku_by`,  `vw_Eoc_takuhai_group_shouhin`.`seiyaku_hi`,  `Eoc`.`remark`,  `Eoc`.`mail1`,  `Eoc`.`mail2`,  `Eoc`.`line_check`,  CONCAT(  '●金融機関名:'  , IFNULL(`mst_bank`.`name`, \"\")  , '\\n●金融機関コード:'  , IFNULL(`Eoc`.`bank_details_code`, \"\")  , '\\n●預金種別:'  , IFNULL(`Eoc`.`bank_details_deposit_type`, \"\")  , '\\n●支店名:'  , IFNULL(`Eoc`.`bank_details_blunch_name`, \"\")  , '\\n●支店コード:'  , IFNULL(`Eoc`.`bank_details_blunch_code`, \"\")  , '\\n●口座番号:'  , IFNULL(`Eoc`.`bank_details_account_number`, \"\")  , '\\n●記号:'  , IFNULL(`Eoc`.`bank_details_symbol`, \"\")  , '\\n●番号:'  , IFNULL(`Eoc`.`bank_details_number`, \"\")  , '\\n●名義人:'  , IFNULL(`Eoc`.`bank_details_account_name`, \"\")  , '\\n●対応外銀行:'  , IFNULL(`Eoc`.`outside_bank`, \"\")  , '\\n●旧姓/新姓/その他:'  , IFNULL(`Eoc`.`new_name`, \"\")  ) AS `kinyuukikan`,  `Eoc`.`bank_details_code`,  `mst_bank`.`name`,  Eoc.meigi_hankaku_kana";
$proto0["m_strFrom"] = "FROM `Eoc_takuhai`  LEFT OUTER JOIN `Eoc` ON `Eoc_takuhai`.`ecc_id` = `Eoc`.`ecc_id`  LEFT OUTER JOIN `vw_Eoc_takuhai_group_shouhin` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_shouhin`.`Eoc_takuhai_id`  LEFT OUTER JOIN `vw_Eoc_takuhai_group_Eoc_chigins` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_Eoc_chigins`.`Eoc_takuhai_id`  LEFT OUTER JOIN `vw_Eoc_takuhai_group_shouhin_awazu` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_shouhin_awazu`.`Eoc_takuhai_id`  LEFT OUTER JOIN `mst_bank` ON `Eoc`.`bank_details_code` = `mst_bank`.`bank_code` AND `mst_bank`.category=1";
$proto0["m_strWhere"] = "(`Eoc_takuhai`.`status` =5 OR `Eoc_takuhai`.`status` =6 OR `Eoc_takuhai`.`status` =16)  AND `vw_Eoc_takuhai_group_Eoc_chigins`.`kaibi_sougaku` > 0";
$proto0["m_strOrderBy"] = "ORDER BY `Eoc`.`name2` ASC";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(`Eoc_takuhai`.`status` =5 OR `Eoc_takuhai`.`status` =6 OR `Eoc_takuhai`.`status` =16)  AND `vw_Eoc_takuhai_group_Eoc_chigins`.`kaibi_sougaku` > 0";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(`Eoc_takuhai`.`status` =5 OR `Eoc_takuhai`.`status` =6 OR `Eoc_takuhai`.`status` =16)  AND `vw_Eoc_takuhai_group_Eoc_chigins`.`kaibi_sougaku` > 0"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "`Eoc_takuhai`.`status` =5 OR `Eoc_takuhai`.`status` =6 OR `Eoc_takuhai`.`status` =16";
$proto4["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`Eoc_takuhai`.`status` =5 OR `Eoc_takuhai`.`status` =6 OR `Eoc_takuhai`.`status` =16"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
						$proto6=array();
$proto6["m_sql"] = "`Eoc_takuhai`.`status` =5";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=5";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto4["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "`Eoc_takuhai`.`status` =6";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "=6";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto4["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "`Eoc_takuhai`.`status` =16";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "=16";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto4["m_contained"][]=$obj;
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto12=array();
$proto12["m_sql"] = "`vw_Eoc_takuhai_group_Eoc_chigins`.`kaibi_sougaku` > 0";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "kaibi_sougaku",
	"m_strTable" => "vw_Eoc_takuhai_group_Eoc_chigins",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "> 0";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto16["m_sql"] = "`Eoc_takuhai`.`id`";
$proto16["m_srcTableName"] = "Eoc_transfer_confirm";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto18["m_sql"] = "`Eoc_takuhai`.`status`";
$proto18["m_srcTableName"] = "Eoc_transfer_confirm";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto20["m_sql"] = "`Eoc`.`ecc_id`";
$proto20["m_srcTableName"] = "Eoc_transfer_confirm";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "name1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto22["m_sql"] = "`Eoc`.`name1`";
$proto22["m_srcTableName"] = "Eoc_transfer_confirm";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto24["m_sql"] = "`Eoc`.`name2`";
$proto24["m_srcTableName"] = "Eoc_transfer_confirm";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "seiyakukin",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto26["m_sql"] = "`Eoc_takuhai`.`seiyakukin`";
$proto26["m_srcTableName"] = "Eoc_transfer_confirm";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_sougaku",
	"m_strTable" => "vw_Eoc_takuhai_group_shouhin",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto28["m_sql"] = "`vw_Eoc_takuhai_group_shouhin`.`satei_sougaku`";
$proto28["m_srcTableName"] = "Eoc_transfer_confirm";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "kaibi_sougaku",
	"m_strTable" => "vw_Eoc_takuhai_group_Eoc_chigins",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto30["m_sql"] = "`vw_Eoc_takuhai_group_Eoc_chigins`.`kaibi_sougaku`";
$proto30["m_srcTableName"] = "Eoc_transfer_confirm";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "vw_Eoc_takuhai_group_shouhin",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto32["m_sql"] = "`vw_Eoc_takuhai_group_shouhin`.`satei_by`";
$proto32["m_srcTableName"] = "Eoc_transfer_confirm";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "vw_Eoc_takuhai_group_Eoc_chigins",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto34["m_sql"] = "`vw_Eoc_takuhai_group_Eoc_chigins`.`create_by`";
$proto34["m_srcTableName"] = "Eoc_transfer_confirm";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "ching_created_at",
	"m_strTable" => "vw_Eoc_takuhai_group_Eoc_chigins",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto36["m_sql"] = "`vw_Eoc_takuhai_group_Eoc_chigins`.`ching_created_at`";
$proto36["m_srcTableName"] = "Eoc_transfer_confirm";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto38["m_sql"] = "`Eoc_takuhai`.`updated_at`";
$proto38["m_srcTableName"] = "Eoc_transfer_confirm";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto40["m_sql"] = "`Eoc_takuhai`.`updated_by`";
$proto40["m_srcTableName"] = "Eoc_transfer_confirm";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "price_error",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto42["m_sql"] = "`Eoc_takuhai`.`price_error`";
$proto42["m_srcTableName"] = "Eoc_transfer_confirm";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "purchase_type",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto44["m_sql"] = "`Eoc_takuhai`.`purchase_type`";
$proto44["m_srcTableName"] = "Eoc_transfer_confirm";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "awazu_kensuu",
	"m_strTable" => "vw_Eoc_takuhai_group_shouhin_awazu",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto46["m_sql"] = "`vw_Eoc_takuhai_group_shouhin_awazu`.`awazu_kensuu`";
$proto46["m_srcTableName"] = "Eoc_transfer_confirm";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_hi",
	"m_strTable" => "vw_Eoc_takuhai_group_shouhin",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto48["m_sql"] = "`vw_Eoc_takuhai_group_shouhin`.`satei_hi`";
$proto48["m_srcTableName"] = "Eoc_transfer_confirm";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "seiyaku_by",
	"m_strTable" => "vw_Eoc_takuhai_group_shouhin",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto50["m_sql"] = "`vw_Eoc_takuhai_group_shouhin`.`seiyaku_by`";
$proto50["m_srcTableName"] = "Eoc_transfer_confirm";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "seiyaku_hi",
	"m_strTable" => "vw_Eoc_takuhai_group_shouhin",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto52["m_sql"] = "`vw_Eoc_takuhai_group_shouhin`.`seiyaku_hi`";
$proto52["m_srcTableName"] = "Eoc_transfer_confirm";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto54["m_sql"] = "`Eoc`.`remark`";
$proto54["m_srcTableName"] = "Eoc_transfer_confirm";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "mail1",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto56["m_sql"] = "`Eoc`.`mail1`";
$proto56["m_srcTableName"] = "Eoc_transfer_confirm";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "mail2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto58["m_sql"] = "`Eoc`.`mail2`";
$proto58["m_srcTableName"] = "Eoc_transfer_confirm";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "line_check",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto60["m_sql"] = "`Eoc`.`line_check`";
$proto60["m_srcTableName"] = "Eoc_transfer_confirm";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$proto63=array();
$proto63["m_functiontype"] = "SQLF_CUSTOM";
$proto63["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "'●金融機関名:'"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`mst_bank`.`name`, \"\")"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n●金融機関コード:'"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`Eoc`.`bank_details_code`, \"\")"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n●預金種別:'"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`Eoc`.`bank_details_deposit_type`, \"\")"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n●支店名:'"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`Eoc`.`bank_details_blunch_name`, \"\")"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n●支店コード:'"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`Eoc`.`bank_details_blunch_code`, \"\")"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n●口座番号:'"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`Eoc`.`bank_details_account_number`, \"\")"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n●記号:'"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`Eoc`.`bank_details_symbol`, \"\")"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n●番号:'"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`Eoc`.`bank_details_number`, \"\")"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n●名義人:'"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`Eoc`.`bank_details_account_name`, \"\")"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n●対応外銀行:'"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`Eoc`.`outside_bank`, \"\")"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "'\\n●旧姓/新姓/その他:'"
));

$proto63["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`Eoc`.`new_name`, \"\")"
));

$proto63["m_arguments"][]=$obj;
$proto63["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto63);

$proto62["m_sql"] = "CONCAT(  '●金融機関名:'  , IFNULL(`mst_bank`.`name`, \"\")  , '\\n●金融機関コード:'  , IFNULL(`Eoc`.`bank_details_code`, \"\")  , '\\n●預金種別:'  , IFNULL(`Eoc`.`bank_details_deposit_type`, \"\")  , '\\n●支店名:'  , IFNULL(`Eoc`.`bank_details_blunch_name`, \"\")  , '\\n●支店コード:'  , IFNULL(`Eoc`.`bank_details_blunch_code`, \"\")  , '\\n●口座番号:'  , IFNULL(`Eoc`.`bank_details_account_number`, \"\")  , '\\n●記号:'  , IFNULL(`Eoc`.`bank_details_symbol`, \"\")  , '\\n●番号:'  , IFNULL(`Eoc`.`bank_details_number`, \"\")  , '\\n●名義人:'  , IFNULL(`Eoc`.`bank_details_account_name`, \"\")  , '\\n●対応外銀行:'  , IFNULL(`Eoc`.`outside_bank`, \"\")  , '\\n●旧姓/新姓/その他:'  , IFNULL(`Eoc`.`new_name`, \"\")  )";
$proto62["m_srcTableName"] = "Eoc_transfer_confirm";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "kinyuukikan";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_details_code",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto86["m_sql"] = "`Eoc`.`bank_details_code`";
$proto86["m_srcTableName"] = "Eoc_transfer_confirm";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_bank",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto88["m_sql"] = "`mst_bank`.`name`";
$proto88["m_srcTableName"] = "Eoc_transfer_confirm";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "meigi_hankaku_kana",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto90["m_sql"] = "Eoc.meigi_hankaku_kana";
$proto90["m_srcTableName"] = "Eoc_transfer_confirm";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto92=array();
$proto92["m_link"] = "SQLL_MAIN";
			$proto93=array();
$proto93["m_strName"] = "Eoc_takuhai";
$proto93["m_srcTableName"] = "Eoc_transfer_confirm";
$proto93["m_columns"] = array();
$proto93["m_columns"][] = "id";
$proto93["m_columns"][] = "brand_confirm";
$proto93["m_columns"][] = "number_of_times";
$proto93["m_columns"][] = "type_selection";
$proto93["m_columns"][] = "reuse_box";
$proto93["m_columns"][] = "kit_detail";
$proto93["m_columns"][] = "date_select";
$proto93["m_columns"][] = "time_select";
$proto93["m_columns"][] = "date_select_hidden";
$proto93["m_columns"][] = "time_select_hidden";
$proto93["m_columns"][] = "speed_box";
$proto93["m_columns"][] = "date_and_time";
$proto93["m_columns"][] = "date_and_time_hidden";
$proto93["m_columns"][] = "user_name";
$proto93["m_columns"][] = "user_name_kana";
$proto93["m_columns"][] = "user_tel";
$proto93["m_columns"][] = "user_mail";
$proto93["m_columns"][] = "user_yuubinn";
$proto93["m_columns"][] = "user_todou";
$proto93["m_columns"][] = "user_sikutyouson";
$proto93["m_columns"][] = "user_banti";
$proto93["m_columns"][] = "tel_mail_line";
$proto93["m_columns"][] = "bikou";
$proto93["m_columns"][] = "insurance_speed";
$proto93["m_columns"][] = "insurance";
$proto93["m_columns"][] = "mail_magazin";
$proto93["m_columns"][] = "anke_1";
$proto93["m_columns"][] = "anke_2";
$proto93["m_columns"][] = "anke_3";
$proto93["m_columns"][] = "mail_text";
$proto93["m_columns"][] = "REMOTE_HOST";
$proto93["m_columns"][] = "REMOTE_ADDR";
$proto93["m_columns"][] = "USER_AGENT";
$proto93["m_columns"][] = "HTTP_REFERER";
$proto93["m_columns"][] = "key_code";
$proto93["m_columns"][] = "cv_site";
$proto93["m_columns"][] = "cv_device";
$proto93["m_columns"][] = "cv_page";
$proto93["m_columns"][] = "cv_time";
$proto93["m_columns"][] = "ecc_id";
$proto93["m_columns"][] = "kit_denpyou";
$proto93["m_columns"][] = "kit_huutou";
$proto93["m_columns"][] = "kit_S";
$proto93["m_columns"][] = "kit_M";
$proto93["m_columns"][] = "kit_L";
$proto93["m_columns"][] = "warehouse_instruction";
$proto93["m_columns"][] = "delivery_slip_instruction";
$proto93["m_columns"][] = "haisou_bangou";
$proto93["m_columns"][] = "shipping_number";
$proto93["m_columns"][] = "arrival_date";
$proto93["m_columns"][] = "updated_at";
$proto93["m_columns"][] = "updated_by";
$proto93["m_columns"][] = "line_satei";
$proto93["m_columns"][] = "insurance_kingaku";
$proto93["m_columns"][] = "status";
$proto93["m_columns"][] = "hakosuu";
$proto93["m_columns"][] = "purchase_type";
$proto93["m_columns"][] = "seiyakukin";
$proto93["m_columns"][] = "received_time";
$proto93["m_columns"][] = "transfer_id";
$proto93["m_columns"][] = "price_error";
$proto93["m_columns"][] = "speed_num";
$proto93["m_columns"][] = "shuka_status";
$proto93["m_columns"][] = "shuka_error";
$proto93["m_columns"][] = "haisou_gyousha";
$proto93["m_columns"][] = "user_address1";
$proto93["m_columns"][] = "user_address2";
$proto93["m_columns"][] = "not_hi_shuka";
$proto93["m_columns"][] = "created_at";
$proto93["m_columns"][] = "is_many_product";
$proto93["m_columns"][] = "Eoc_trader_id";
$proto93["m_columns"][] = "service_users_id";
$proto93["m_columns"][] = "mypage_update_prohibited";
$proto93["m_columns"][] = "memo";
$proto93["m_columns"][] = "satei_start";
$proto93["m_columns"][] = "satei_end";
$proto93["m_columns"][] = "satei_start_by";
$proto93["m_columns"][] = "contract_at";
$proto93["m_columns"][] = "ad_param";
$proto93["m_columns"][] = "is_NJ_or_BJ";
$proto93["m_columns"][] = "shipping_date";
$obj = new SQLTable($proto93);

$proto92["m_table"] = $obj;
$proto92["m_sql"] = "`Eoc_takuhai`";
$proto92["m_alias"] = "";
$proto92["m_srcTableName"] = "Eoc_transfer_confirm";
$proto94=array();
$proto94["m_sql"] = "";
$proto94["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto94["m_column"]=$obj;
$proto94["m_contained"] = array();
$proto94["m_strCase"] = "";
$proto94["m_havingmode"] = false;
$proto94["m_inBrackets"] = false;
$proto94["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto94);

$proto92["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto92);

$proto0["m_fromlist"][]=$obj;
												$proto96=array();
$proto96["m_link"] = "SQLL_LEFTJOIN";
			$proto97=array();
$proto97["m_strName"] = "Eoc";
$proto97["m_srcTableName"] = "Eoc_transfer_confirm";
$proto97["m_columns"] = array();
$proto97["m_columns"][] = "ecc_id";
$proto97["m_columns"][] = "ecc_seq";
$proto97["m_columns"][] = "name1";
$proto97["m_columns"][] = "created_t";
$proto97["m_columns"][] = "registerd_id";
$proto97["m_columns"][] = "kaitori_staff_id";
$proto97["m_columns"][] = "name2";
$proto97["m_columns"][] = "wareki";
$proto97["m_columns"][] = "b1";
$proto97["m_columns"][] = "b2";
$proto97["m_columns"][] = "b3";
$proto97["m_columns"][] = "birth_day";
$proto97["m_columns"][] = "age";
$proto97["m_columns"][] = "zip";
$proto97["m_columns"][] = "zip1";
$proto97["m_columns"][] = "zip2";
$proto97["m_columns"][] = "address1";
$proto97["m_columns"][] = "address2";
$proto97["m_columns"][] = "address3";
$proto97["m_columns"][] = "tel";
$proto97["m_columns"][] = "tel2";
$proto97["m_columns"][] = "mail1";
$proto97["m_columns"][] = "mail2";
$proto97["m_columns"][] = "address_code";
$proto97["m_columns"][] = "bank_name";
$proto97["m_columns"][] = "bank_blunch_code";
$proto97["m_columns"][] = "bank_yokin_shubetu";
$proto97["m_columns"][] = "bank_account";
$proto97["m_columns"][] = "bank_acoount_name";
$proto97["m_columns"][] = "haisou_bangou";
$proto97["m_columns"][] = "sise_houhou";
$proto97["m_columns"][] = "hentou_houhou";
$proto97["m_columns"][] = "hentou_houhou_time";
$proto97["m_columns"][] = "mousikomi_id";
$proto97["m_columns"][] = "hituyou_shorui";
$proto97["m_columns"][] = "seiyaku_fuseiritu";
$proto97["m_columns"][] = "mitumori_taku";
$proto97["m_columns"][] = "seacanse";
$proto97["m_columns"][] = "remark";
$proto97["m_columns"][] = "type";
$proto97["m_columns"][] = "sales_flag";
$proto97["m_columns"][] = "src_type";
$proto97["m_columns"][] = "liquidation_shop_code";
$proto97["m_columns"][] = "insurance_amount_print";
$proto97["m_columns"][] = "jis_code";
$proto97["m_columns"][] = "updated_at";
$proto97["m_columns"][] = "_registerd_id";
$proto97["m_columns"][] = "mail_check_type";
$proto97["m_columns"][] = "purchase_type";
$proto97["m_columns"][] = "sex";
$proto97["m_columns"][] = "m_tel";
$proto97["m_columns"][] = "fax";
$proto97["m_columns"][] = "chigin_kaitori";
$proto97["m_columns"][] = "option1";
$proto97["m_columns"][] = "option2";
$proto97["m_columns"][] = "option3";
$proto97["m_columns"][] = "option4";
$proto97["m_columns"][] = "option5";
$proto97["m_columns"][] = "option6";
$proto97["m_columns"][] = "option7";
$proto97["m_columns"][] = "option8";
$proto97["m_columns"][] = "option9";
$proto97["m_columns"][] = "option10";
$proto97["m_columns"][] = "option11";
$proto97["m_columns"][] = "option12";
$proto97["m_columns"][] = "option13";
$proto97["m_columns"][] = "rakuda_csv_flag";
$proto97["m_columns"][] = "EOC_COURIER_CHECK";
$proto97["m_columns"][] = "EOC_SIZE";
$proto97["m_columns"][] = "EOC_NUMBER";
$proto97["m_columns"][] = "EOC_REUSE";
$proto97["m_columns"][] = "EOC__DELIVERY_DATES";
$proto97["m_columns"][] = "EOC_SPECIFIED_TIME";
$proto97["m_columns"][] = "FIRST_NAME2";
$proto97["m_columns"][] = "LAST_NAME2";
$proto97["m_columns"][] = "EOC__DATE_AND_TIME_2";
$proto97["m_columns"][] = "EOC__BOX_NUMBER";
$proto97["m_columns"][] = "FIRST_NAME_KANA";
$proto97["m_columns"][] = "LAST_NAME_KANA";
$proto97["m_columns"][] = "FLAG_SPEED";
$proto97["m_columns"][] = "SEARCH_MEDIA";
$proto97["m_columns"][] = "SEARCH_SITE";
$proto97["m_columns"][] = "UN_REACHABLE";
$proto97["m_columns"][] = "FLG_MAIL_SAGAWA";
$proto97["m_columns"][] = "FLG_MAIL_OTHER";
$proto97["m_columns"][] = "ALLSEIYAKU";
$proto97["m_columns"][] = "ICHIBUSEIYAKU";
$proto97["m_columns"][] = "seiyakukin";
$proto97["m_columns"][] = "kaitorihuka";
$proto97["m_columns"][] = "awazu_date";
$proto97["m_columns"][] = "seiyaku_price";
$proto97["m_columns"][] = "eoc_search_keyword";
$proto97["m_columns"][] = "sonota";
$proto97["m_columns"][] = "size_kosuu";
$proto97["m_columns"][] = "sagawa_shuuka_flag";
$proto97["m_columns"][] = "line_check";
$proto97["m_columns"][] = "sagawa_shuukairai_denwabangou";
$proto97["m_columns"][] = "kaitori_sougak";
$proto97["m_columns"][] = "flag";
$proto97["m_columns"][] = "key_code";
$proto97["m_columns"][] = "dm_check_type";
$proto97["m_columns"][] = "kit_flag";
$proto97["m_columns"][] = "kit_done_flag";
$proto97["m_columns"][] = "bank_details_code";
$proto97["m_columns"][] = "bank_details_blunch_name";
$proto97["m_columns"][] = "bank_details_blunch_code";
$proto97["m_columns"][] = "bank_details_account_number";
$proto97["m_columns"][] = "bank_details_symbol";
$proto97["m_columns"][] = "bank_details_number";
$proto97["m_columns"][] = "bank_details_account_name";
$proto97["m_columns"][] = "bank_details_deposit_type";
$proto97["m_columns"][] = "mypage_id";
$proto97["m_columns"][] = "UN_REACHABLE_brand";
$proto97["m_columns"][] = "sagawa_haisou_hoken";
$proto97["m_columns"][] = "transfer_confirm";
$proto97["m_columns"][] = "outside_bank";
$proto97["m_columns"][] = "new_name";
$proto97["m_columns"][] = "letterpack";
$proto97["m_columns"][] = "satei_saisoku_2_days";
$proto97["m_columns"][] = "satei_saisoku_7_days";
$proto97["m_columns"][] = "accept_flag";
$proto97["m_columns"][] = "delivery_flag";
$proto97["m_columns"][] = "refining_weight";
$proto97["m_columns"][] = "line_chat_url";
$proto97["m_columns"][] = "royal_customer_status";
$proto97["m_columns"][] = "is_business_customer";
$proto97["m_columns"][] = "is_exist_haisouhosyo";
$proto97["m_columns"][] = "meigi_hankaku_kana";
$proto97["m_columns"][] = "building_types";
$proto97["m_columns"][] = "dwelling_types";
$proto97["m_columns"][] = "is_yamato_csv";
$proto97["m_columns"][] = "is_seiren_csv";
$obj = new SQLTable($proto97);

$proto96["m_table"] = $obj;
$proto96["m_sql"] = "LEFT OUTER JOIN `Eoc` ON `Eoc_takuhai`.`ecc_id` = `Eoc`.`ecc_id`";
$proto96["m_alias"] = "";
$proto96["m_srcTableName"] = "Eoc_transfer_confirm";
$proto98=array();
$proto98["m_sql"] = "`Eoc_takuhai`.`ecc_id` = `Eoc`.`ecc_id`";
$proto98["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto98["m_column"]=$obj;
$proto98["m_contained"] = array();
$proto98["m_strCase"] = "= `Eoc`.`ecc_id`";
$proto98["m_havingmode"] = false;
$proto98["m_inBrackets"] = false;
$proto98["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto98);

$proto96["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto96);

$proto0["m_fromlist"][]=$obj;
												$proto100=array();
$proto100["m_link"] = "SQLL_LEFTJOIN";
			$proto101=array();
$proto101["m_strName"] = "vw_Eoc_takuhai_group_shouhin";
$proto101["m_srcTableName"] = "Eoc_transfer_confirm";
$proto101["m_columns"] = array();
$proto101["m_columns"][] = "Eoc_takuhai_id";
$proto101["m_columns"][] = "satei_sougaku";
$proto101["m_columns"][] = "satei_kensuu";
$proto101["m_columns"][] = "satei_by";
$proto101["m_columns"][] = "satei_hi";
$proto101["m_columns"][] = "seiyaku_by";
$proto101["m_columns"][] = "seiyaku_hi";
$obj = new SQLTable($proto101);

$proto100["m_table"] = $obj;
$proto100["m_sql"] = "LEFT OUTER JOIN `vw_Eoc_takuhai_group_shouhin` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_shouhin`.`Eoc_takuhai_id`";
$proto100["m_alias"] = "";
$proto100["m_srcTableName"] = "Eoc_transfer_confirm";
$proto102=array();
$proto102["m_sql"] = "`Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_shouhin`.`Eoc_takuhai_id`";
$proto102["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto102["m_column"]=$obj;
$proto102["m_contained"] = array();
$proto102["m_strCase"] = "= `vw_Eoc_takuhai_group_shouhin`.`Eoc_takuhai_id`";
$proto102["m_havingmode"] = false;
$proto102["m_inBrackets"] = false;
$proto102["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto102);

$proto100["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto100);

$proto0["m_fromlist"][]=$obj;
												$proto104=array();
$proto104["m_link"] = "SQLL_LEFTJOIN";
			$proto105=array();
$proto105["m_strName"] = "vw_Eoc_takuhai_group_Eoc_chigins";
$proto105["m_srcTableName"] = "Eoc_transfer_confirm";
$proto105["m_columns"] = array();
$proto105["m_columns"][] = "Eoc_takuhai_id";
$proto105["m_columns"][] = "kaibi_sougaku";
$proto105["m_columns"][] = "kaibi_kensuu";
$proto105["m_columns"][] = "create_by";
$proto105["m_columns"][] = "ching_created_at";
$obj = new SQLTable($proto105);

$proto104["m_table"] = $obj;
$proto104["m_sql"] = "LEFT OUTER JOIN `vw_Eoc_takuhai_group_Eoc_chigins` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_Eoc_chigins`.`Eoc_takuhai_id`";
$proto104["m_alias"] = "";
$proto104["m_srcTableName"] = "Eoc_transfer_confirm";
$proto106=array();
$proto106["m_sql"] = "`Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_Eoc_chigins`.`Eoc_takuhai_id`";
$proto106["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto106["m_column"]=$obj;
$proto106["m_contained"] = array();
$proto106["m_strCase"] = "= `vw_Eoc_takuhai_group_Eoc_chigins`.`Eoc_takuhai_id`";
$proto106["m_havingmode"] = false;
$proto106["m_inBrackets"] = false;
$proto106["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto106);

$proto104["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto104);

$proto0["m_fromlist"][]=$obj;
												$proto108=array();
$proto108["m_link"] = "SQLL_LEFTJOIN";
			$proto109=array();
$proto109["m_strName"] = "vw_Eoc_takuhai_group_shouhin_awazu";
$proto109["m_srcTableName"] = "Eoc_transfer_confirm";
$proto109["m_columns"] = array();
$proto109["m_columns"][] = "Eoc_takuhai_id";
$proto109["m_columns"][] = "awazu_kensuu";
$obj = new SQLTable($proto109);

$proto108["m_table"] = $obj;
$proto108["m_sql"] = "LEFT OUTER JOIN `vw_Eoc_takuhai_group_shouhin_awazu` ON `Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_shouhin_awazu`.`Eoc_takuhai_id`";
$proto108["m_alias"] = "";
$proto108["m_srcTableName"] = "Eoc_transfer_confirm";
$proto110=array();
$proto110["m_sql"] = "`Eoc_takuhai`.`id` = `vw_Eoc_takuhai_group_shouhin_awazu`.`Eoc_takuhai_id`";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_takuhai",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "= `vw_Eoc_takuhai_group_shouhin_awazu`.`Eoc_takuhai_id`";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

$proto108["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto108);

$proto0["m_fromlist"][]=$obj;
												$proto112=array();
$proto112["m_link"] = "SQLL_LEFTJOIN";
			$proto113=array();
$proto113["m_strName"] = "mst_bank";
$proto113["m_srcTableName"] = "Eoc_transfer_confirm";
$proto113["m_columns"] = array();
$proto113["m_columns"][] = "id";
$proto113["m_columns"][] = "bank_code";
$proto113["m_columns"][] = "siten_code";
$proto113["m_columns"][] = "kana";
$proto113["m_columns"][] = "name";
$proto113["m_columns"][] = "category";
$proto113["m_columns"][] = "update_by";
$proto113["m_columns"][] = "update_at";
$proto113["m_columns"][] = "create_by";
$proto113["m_columns"][] = "create_at";
$proto113["m_columns"][] = "bank_type";
$obj = new SQLTable($proto113);

$proto112["m_table"] = $obj;
$proto112["m_sql"] = "LEFT OUTER JOIN `mst_bank` ON `Eoc`.`bank_details_code` = `mst_bank`.`bank_code` AND `mst_bank`.category=1";
$proto112["m_alias"] = "";
$proto112["m_srcTableName"] = "Eoc_transfer_confirm";
$proto114=array();
$proto114["m_sql"] = "`Eoc`.`bank_details_code` = `mst_bank`.`bank_code` AND `mst_bank`.category=1";
$proto114["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "`Eoc`.`bank_details_code` = `mst_bank`.`bank_code` AND `mst_bank`.category=1"
));

$proto114["m_column"]=$obj;
$proto114["m_contained"] = array();
						$proto116=array();
$proto116["m_sql"] = "`Eoc`.`bank_details_code` = `mst_bank`.`bank_code`";
$proto116["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "bank_details_code",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto116["m_column"]=$obj;
$proto116["m_contained"] = array();
$proto116["m_strCase"] = "= `mst_bank`.`bank_code`";
$proto116["m_havingmode"] = false;
$proto116["m_inBrackets"] = false;
$proto116["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto116);

			$proto114["m_contained"][]=$obj;
						$proto118=array();
$proto118["m_sql"] = "`mst_bank`.category=1";
$proto118["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "mst_bank",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto118["m_column"]=$obj;
$proto118["m_contained"] = array();
$proto118["m_strCase"] = "=1";
$proto118["m_havingmode"] = false;
$proto118["m_inBrackets"] = false;
$proto118["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto118);

			$proto114["m_contained"][]=$obj;
$proto114["m_strCase"] = "";
$proto114["m_havingmode"] = false;
$proto114["m_inBrackets"] = false;
$proto114["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto114);

$proto112["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto112);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto120=array();
						$obj = new SQLField(array(
	"m_strName" => "name2",
	"m_strTable" => "Eoc",
	"m_srcTableName" => "Eoc_transfer_confirm"
));

$proto120["m_column"]=$obj;
$proto120["m_bAsc"] = 1;
$proto120["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto120);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_transfer_confirm";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_transfer_confirm = createSqlQuery_Eoc_transfer_confirm();


	
		;

																											

$tdataEoc_transfer_confirm[".sqlquery"] = $queryData_Eoc_transfer_confirm;

include_once(getabspath("include/Eoc_transfer_confirm_events.php"));
$tableEvents["Eoc_transfer_confirm"] = new eventclass_Eoc_transfer_confirm;
$tdataEoc_transfer_confirm[".hasEvents"] = true;

?>