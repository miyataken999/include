<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamail_data_tbl_template = array();
	$tdatamail_data_tbl_template[".truncateText"] = true;
	$tdatamail_data_tbl_template[".NumberOfChars"] = 80;
	$tdatamail_data_tbl_template[".ShortName"] = "mail_data_tbl_template";
	$tdatamail_data_tbl_template[".OwnerID"] = "";
	$tdatamail_data_tbl_template[".OriginalTable"] = "mail_data_tbl_template";

//	field labels
$fieldLabelsmail_data_tbl_template = array();
$fieldToolTipsmail_data_tbl_template = array();
$pageTitlesmail_data_tbl_template = array();
$placeHoldersmail_data_tbl_template = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmail_data_tbl_template["Japanese"] = array();
	$fieldToolTipsmail_data_tbl_template["Japanese"] = array();
	$placeHoldersmail_data_tbl_template["Japanese"] = array();
	$pageTitlesmail_data_tbl_template["Japanese"] = array();
	$fieldLabelsmail_data_tbl_template["Japanese"]["id"] = "Id";
	$fieldToolTipsmail_data_tbl_template["Japanese"]["id"] = "";
	$placeHoldersmail_data_tbl_template["Japanese"]["id"] = "";
	$fieldLabelsmail_data_tbl_template["Japanese"]["title"] = "タイトル";
	$fieldToolTipsmail_data_tbl_template["Japanese"]["title"] = "";
	$placeHoldersmail_data_tbl_template["Japanese"]["title"] = "";
	$fieldLabelsmail_data_tbl_template["Japanese"]["from_addr"] = "Fromアドレス";
	$fieldToolTipsmail_data_tbl_template["Japanese"]["from_addr"] = "";
	$placeHoldersmail_data_tbl_template["Japanese"]["from_addr"] = "";
	$fieldLabelsmail_data_tbl_template["Japanese"]["subject_pc"] = "件名";
	$fieldToolTipsmail_data_tbl_template["Japanese"]["subject_pc"] = "";
	$placeHoldersmail_data_tbl_template["Japanese"]["subject_pc"] = "";
	$fieldLabelsmail_data_tbl_template["Japanese"]["str_header"] = "ヘッダー";
	$fieldToolTipsmail_data_tbl_template["Japanese"]["str_header"] = "";
	$placeHoldersmail_data_tbl_template["Japanese"]["str_header"] = "";
	$fieldLabelsmail_data_tbl_template["Japanese"]["str_pc"] = "本文1";
	$fieldToolTipsmail_data_tbl_template["Japanese"]["str_pc"] = "";
	$placeHoldersmail_data_tbl_template["Japanese"]["str_pc"] = "";
	$fieldLabelsmail_data_tbl_template["Japanese"]["str2_pc"] = "本文2";
	$fieldToolTipsmail_data_tbl_template["Japanese"]["str2_pc"] = "";
	$placeHoldersmail_data_tbl_template["Japanese"]["str2_pc"] = "";
	$fieldLabelsmail_data_tbl_template["Japanese"]["str3_pc"] = "署名";
	$fieldToolTipsmail_data_tbl_template["Japanese"]["str3_pc"] = "";
	$placeHoldersmail_data_tbl_template["Japanese"]["str3_pc"] = "";
	$fieldLabelsmail_data_tbl_template["Japanese"]["junban"] = "順番";
	$fieldToolTipsmail_data_tbl_template["Japanese"]["junban"] = "";
	$placeHoldersmail_data_tbl_template["Japanese"]["junban"] = "";
	$fieldLabelsmail_data_tbl_template["Japanese"]["category_id"] = "大カテ";
	$fieldToolTipsmail_data_tbl_template["Japanese"]["category_id"] = "";
	$placeHoldersmail_data_tbl_template["Japanese"]["category_id"] = "";
	$fieldLabelsmail_data_tbl_template["Japanese"]["sub_category_id"] = "中カテ";
	$fieldToolTipsmail_data_tbl_template["Japanese"]["sub_category_id"] = "";
	$placeHoldersmail_data_tbl_template["Japanese"]["sub_category_id"] = "";
	$fieldLabelsmail_data_tbl_template["Japanese"]["first_satei_meisai_flag"] = "初回査定明細";
	$fieldToolTipsmail_data_tbl_template["Japanese"]["first_satei_meisai_flag"] = "";
	$placeHoldersmail_data_tbl_template["Japanese"]["first_satei_meisai_flag"] = "";
	$fieldLabelsmail_data_tbl_template["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsmail_data_tbl_template["Japanese"]["created_by"] = "";
	$placeHoldersmail_data_tbl_template["Japanese"]["created_by"] = "";
	$fieldLabelsmail_data_tbl_template["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsmail_data_tbl_template["Japanese"]["created_at"] = "";
	$placeHoldersmail_data_tbl_template["Japanese"]["created_at"] = "";
	$fieldLabelsmail_data_tbl_template["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsmail_data_tbl_template["Japanese"]["updated_by"] = "";
	$placeHoldersmail_data_tbl_template["Japanese"]["updated_by"] = "";
	$fieldLabelsmail_data_tbl_template["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsmail_data_tbl_template["Japanese"]["updated_at"] = "";
	$placeHoldersmail_data_tbl_template["Japanese"]["updated_at"] = "";
	if (count($fieldToolTipsmail_data_tbl_template["Japanese"]))
		$tdatamail_data_tbl_template[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmail_data_tbl_template[""] = array();
	$fieldToolTipsmail_data_tbl_template[""] = array();
	$placeHoldersmail_data_tbl_template[""] = array();
	$pageTitlesmail_data_tbl_template[""] = array();
	$fieldLabelsmail_data_tbl_template[""]["id"] = "Id";
	$fieldToolTipsmail_data_tbl_template[""]["id"] = "";
	$placeHoldersmail_data_tbl_template[""]["id"] = "";
	$fieldLabelsmail_data_tbl_template[""]["title"] = "Title";
	$fieldToolTipsmail_data_tbl_template[""]["title"] = "";
	$placeHoldersmail_data_tbl_template[""]["title"] = "";
	$fieldLabelsmail_data_tbl_template[""]["from_addr"] = "From Addr";
	$fieldToolTipsmail_data_tbl_template[""]["from_addr"] = "";
	$placeHoldersmail_data_tbl_template[""]["from_addr"] = "";
	$fieldLabelsmail_data_tbl_template[""]["subject_pc"] = "Subject Pc";
	$fieldToolTipsmail_data_tbl_template[""]["subject_pc"] = "";
	$placeHoldersmail_data_tbl_template[""]["subject_pc"] = "";
	$fieldLabelsmail_data_tbl_template[""]["str_header"] = "Str Header";
	$fieldToolTipsmail_data_tbl_template[""]["str_header"] = "";
	$placeHoldersmail_data_tbl_template[""]["str_header"] = "";
	$fieldLabelsmail_data_tbl_template[""]["str_pc"] = "Str Pc";
	$fieldToolTipsmail_data_tbl_template[""]["str_pc"] = "";
	$placeHoldersmail_data_tbl_template[""]["str_pc"] = "";
	$fieldLabelsmail_data_tbl_template[""]["str2_pc"] = "Str2 Pc";
	$fieldToolTipsmail_data_tbl_template[""]["str2_pc"] = "";
	$placeHoldersmail_data_tbl_template[""]["str2_pc"] = "";
	$fieldLabelsmail_data_tbl_template[""]["str3_pc"] = "Str3 Pc";
	$fieldToolTipsmail_data_tbl_template[""]["str3_pc"] = "";
	$placeHoldersmail_data_tbl_template[""]["str3_pc"] = "";
	$fieldLabelsmail_data_tbl_template[""]["junban"] = "Junban";
	$fieldToolTipsmail_data_tbl_template[""]["junban"] = "";
	$placeHoldersmail_data_tbl_template[""]["junban"] = "";
	$fieldLabelsmail_data_tbl_template[""]["category_id"] = "Category Id";
	$fieldToolTipsmail_data_tbl_template[""]["category_id"] = "";
	$placeHoldersmail_data_tbl_template[""]["category_id"] = "";
	$fieldLabelsmail_data_tbl_template[""]["sub_category_id"] = "Sub Category Id";
	$fieldToolTipsmail_data_tbl_template[""]["sub_category_id"] = "";
	$placeHoldersmail_data_tbl_template[""]["sub_category_id"] = "";
	$fieldLabelsmail_data_tbl_template[""]["first_satei_meisai_flag"] = "First Satei Meisai Flag";
	$fieldToolTipsmail_data_tbl_template[""]["first_satei_meisai_flag"] = "";
	$placeHoldersmail_data_tbl_template[""]["first_satei_meisai_flag"] = "";
	$fieldLabelsmail_data_tbl_template[""]["created_by"] = "Created By";
	$fieldToolTipsmail_data_tbl_template[""]["created_by"] = "";
	$placeHoldersmail_data_tbl_template[""]["created_by"] = "";
	$fieldLabelsmail_data_tbl_template[""]["created_at"] = "Created At";
	$fieldToolTipsmail_data_tbl_template[""]["created_at"] = "";
	$placeHoldersmail_data_tbl_template[""]["created_at"] = "";
	$fieldLabelsmail_data_tbl_template[""]["updated_by"] = "Updated By";
	$fieldToolTipsmail_data_tbl_template[""]["updated_by"] = "";
	$placeHoldersmail_data_tbl_template[""]["updated_by"] = "";
	$fieldLabelsmail_data_tbl_template[""]["updated_at"] = "Updated At";
	$fieldToolTipsmail_data_tbl_template[""]["updated_at"] = "";
	$placeHoldersmail_data_tbl_template[""]["updated_at"] = "";
	if (count($fieldToolTipsmail_data_tbl_template[""]))
		$tdatamail_data_tbl_template[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmail_data_tbl_template["English"] = array();
	$fieldToolTipsmail_data_tbl_template["English"] = array();
	$placeHoldersmail_data_tbl_template["English"] = array();
	$pageTitlesmail_data_tbl_template["English"] = array();
	$fieldLabelsmail_data_tbl_template["English"]["id"] = "Id";
	$fieldToolTipsmail_data_tbl_template["English"]["id"] = "";
	$placeHoldersmail_data_tbl_template["English"]["id"] = "";
	$fieldLabelsmail_data_tbl_template["English"]["title"] = "Title";
	$fieldToolTipsmail_data_tbl_template["English"]["title"] = "";
	$placeHoldersmail_data_tbl_template["English"]["title"] = "";
	$fieldLabelsmail_data_tbl_template["English"]["from_addr"] = "From Addr";
	$fieldToolTipsmail_data_tbl_template["English"]["from_addr"] = "";
	$placeHoldersmail_data_tbl_template["English"]["from_addr"] = "";
	$fieldLabelsmail_data_tbl_template["English"]["subject_pc"] = "Subject Pc";
	$fieldToolTipsmail_data_tbl_template["English"]["subject_pc"] = "";
	$placeHoldersmail_data_tbl_template["English"]["subject_pc"] = "";
	$fieldLabelsmail_data_tbl_template["English"]["str_header"] = "Str Header";
	$fieldToolTipsmail_data_tbl_template["English"]["str_header"] = "";
	$placeHoldersmail_data_tbl_template["English"]["str_header"] = "";
	$fieldLabelsmail_data_tbl_template["English"]["str_pc"] = "Str Pc";
	$fieldToolTipsmail_data_tbl_template["English"]["str_pc"] = "";
	$placeHoldersmail_data_tbl_template["English"]["str_pc"] = "";
	$fieldLabelsmail_data_tbl_template["English"]["str2_pc"] = "Str2 Pc";
	$fieldToolTipsmail_data_tbl_template["English"]["str2_pc"] = "";
	$placeHoldersmail_data_tbl_template["English"]["str2_pc"] = "";
	$fieldLabelsmail_data_tbl_template["English"]["str3_pc"] = "Str3 Pc";
	$fieldToolTipsmail_data_tbl_template["English"]["str3_pc"] = "";
	$placeHoldersmail_data_tbl_template["English"]["str3_pc"] = "";
	$fieldLabelsmail_data_tbl_template["English"]["junban"] = "Junban";
	$fieldToolTipsmail_data_tbl_template["English"]["junban"] = "";
	$placeHoldersmail_data_tbl_template["English"]["junban"] = "";
	$fieldLabelsmail_data_tbl_template["English"]["category_id"] = "Category Id";
	$fieldToolTipsmail_data_tbl_template["English"]["category_id"] = "";
	$placeHoldersmail_data_tbl_template["English"]["category_id"] = "";
	$fieldLabelsmail_data_tbl_template["English"]["sub_category_id"] = "Sub Category Id";
	$fieldToolTipsmail_data_tbl_template["English"]["sub_category_id"] = "";
	$placeHoldersmail_data_tbl_template["English"]["sub_category_id"] = "";
	$fieldLabelsmail_data_tbl_template["English"]["first_satei_meisai_flag"] = "First Satei Meisai Flag";
	$fieldToolTipsmail_data_tbl_template["English"]["first_satei_meisai_flag"] = "";
	$placeHoldersmail_data_tbl_template["English"]["first_satei_meisai_flag"] = "";
	$fieldLabelsmail_data_tbl_template["English"]["created_by"] = "Created By";
	$fieldToolTipsmail_data_tbl_template["English"]["created_by"] = "";
	$placeHoldersmail_data_tbl_template["English"]["created_by"] = "";
	$fieldLabelsmail_data_tbl_template["English"]["created_at"] = "Created At";
	$fieldToolTipsmail_data_tbl_template["English"]["created_at"] = "";
	$placeHoldersmail_data_tbl_template["English"]["created_at"] = "";
	$fieldLabelsmail_data_tbl_template["English"]["updated_by"] = "Updated By";
	$fieldToolTipsmail_data_tbl_template["English"]["updated_by"] = "";
	$placeHoldersmail_data_tbl_template["English"]["updated_by"] = "";
	$fieldLabelsmail_data_tbl_template["English"]["updated_at"] = "Updated At";
	$fieldToolTipsmail_data_tbl_template["English"]["updated_at"] = "";
	$placeHoldersmail_data_tbl_template["English"]["updated_at"] = "";
	if (count($fieldToolTipsmail_data_tbl_template["English"]))
		$tdatamail_data_tbl_template[".isUseToolTips"] = true;
}


	$tdatamail_data_tbl_template[".NCSearch"] = true;



$tdatamail_data_tbl_template[".shortTableName"] = "mail_data_tbl_template";
$tdatamail_data_tbl_template[".nSecOptions"] = 0;
$tdatamail_data_tbl_template[".recsPerRowPrint"] = 1;
$tdatamail_data_tbl_template[".mainTableOwnerID"] = "";
$tdatamail_data_tbl_template[".moveNext"] = 1;
$tdatamail_data_tbl_template[".entityType"] = 0;

$tdatamail_data_tbl_template[".strOriginalTableName"] = "mail_data_tbl_template";

	



$tdatamail_data_tbl_template[".showAddInPopup"] = false;

$tdatamail_data_tbl_template[".showEditInPopup"] = false;

$tdatamail_data_tbl_template[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamail_data_tbl_template[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamail_data_tbl_template[".fieldsForRegister"] = array();

$tdatamail_data_tbl_template[".listAjax"] = false;

	$tdatamail_data_tbl_template[".audit"] = true;

	$tdatamail_data_tbl_template[".locking"] = false;

$tdatamail_data_tbl_template[".edit"] = true;
$tdatamail_data_tbl_template[".afterEditAction"] = 1;
$tdatamail_data_tbl_template[".closePopupAfterEdit"] = 1;
$tdatamail_data_tbl_template[".afterEditActionDetTable"] = "";

$tdatamail_data_tbl_template[".add"] = true;
$tdatamail_data_tbl_template[".afterAddAction"] = 1;
$tdatamail_data_tbl_template[".closePopupAfterAdd"] = 1;
$tdatamail_data_tbl_template[".afterAddActionDetTable"] = "";

$tdatamail_data_tbl_template[".list"] = true;



$tdatamail_data_tbl_template[".reorderRecordsByHeader"] = true;




$tdatamail_data_tbl_template[".import"] = true;

$tdatamail_data_tbl_template[".exportTo"] = true;


$tdatamail_data_tbl_template[".delete"] = true;

$tdatamail_data_tbl_template[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamail_data_tbl_template[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamail_data_tbl_template[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamail_data_tbl_template[".searchSaving"] = false;
//

$tdatamail_data_tbl_template[".showSearchPanel"] = true;
		$tdatamail_data_tbl_template[".flexibleSearch"] = true;

$tdatamail_data_tbl_template[".isUseAjaxSuggest"] = true;

$tdatamail_data_tbl_template[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatamail_data_tbl_template[".ajaxCodeSnippetAdded"] = false;

$tdatamail_data_tbl_template[".buttonsAdded"] = false;

$tdatamail_data_tbl_template[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamail_data_tbl_template[".isUseTimeForSearch"] = false;



$tdatamail_data_tbl_template[".badgeColor"] = "d2af80";


$tdatamail_data_tbl_template[".allSearchFields"] = array();
$tdatamail_data_tbl_template[".filterFields"] = array();
$tdatamail_data_tbl_template[".requiredSearchFields"] = array();

$tdatamail_data_tbl_template[".allSearchFields"][] = "first_satei_meisai_flag";
	$tdatamail_data_tbl_template[".allSearchFields"][] = "created_by";
	$tdatamail_data_tbl_template[".allSearchFields"][] = "created_at";
	$tdatamail_data_tbl_template[".allSearchFields"][] = "updated_by";
	$tdatamail_data_tbl_template[".allSearchFields"][] = "updated_at";
	$tdatamail_data_tbl_template[".allSearchFields"][] = "id";
	$tdatamail_data_tbl_template[".allSearchFields"][] = "category_id";
	$tdatamail_data_tbl_template[".allSearchFields"][] = "sub_category_id";
	$tdatamail_data_tbl_template[".allSearchFields"][] = "title";
	$tdatamail_data_tbl_template[".allSearchFields"][] = "from_addr";
	$tdatamail_data_tbl_template[".allSearchFields"][] = "subject_pc";
	$tdatamail_data_tbl_template[".allSearchFields"][] = "str_header";
	$tdatamail_data_tbl_template[".allSearchFields"][] = "str_pc";
	$tdatamail_data_tbl_template[".allSearchFields"][] = "str2_pc";
	$tdatamail_data_tbl_template[".allSearchFields"][] = "str3_pc";
	$tdatamail_data_tbl_template[".allSearchFields"][] = "junban";
	

$tdatamail_data_tbl_template[".googleLikeFields"] = array();
$tdatamail_data_tbl_template[".googleLikeFields"][] = "id";
$tdatamail_data_tbl_template[".googleLikeFields"][] = "title";
$tdatamail_data_tbl_template[".googleLikeFields"][] = "from_addr";
$tdatamail_data_tbl_template[".googleLikeFields"][] = "subject_pc";
$tdatamail_data_tbl_template[".googleLikeFields"][] = "str_header";
$tdatamail_data_tbl_template[".googleLikeFields"][] = "str_pc";
$tdatamail_data_tbl_template[".googleLikeFields"][] = "str2_pc";
$tdatamail_data_tbl_template[".googleLikeFields"][] = "str3_pc";
$tdatamail_data_tbl_template[".googleLikeFields"][] = "junban";
$tdatamail_data_tbl_template[".googleLikeFields"][] = "category_id";
$tdatamail_data_tbl_template[".googleLikeFields"][] = "sub_category_id";
$tdatamail_data_tbl_template[".googleLikeFields"][] = "first_satei_meisai_flag";
$tdatamail_data_tbl_template[".googleLikeFields"][] = "created_by";
$tdatamail_data_tbl_template[".googleLikeFields"][] = "created_at";
$tdatamail_data_tbl_template[".googleLikeFields"][] = "updated_by";
$tdatamail_data_tbl_template[".googleLikeFields"][] = "updated_at";

$tdatamail_data_tbl_template[".panelSearchFields"] = array();
$tdatamail_data_tbl_template[".searchPanelOptions"] = array();
$tdatamail_data_tbl_template[".panelSearchFields"][] = "category_id";
	$tdatamail_data_tbl_template[".panelSearchFields"][] = "sub_category_id";
	$tdatamail_data_tbl_template[".panelSearchFields"][] = "title";
	$tdatamail_data_tbl_template[".panelSearchFields"][] = "from_addr";
	$tdatamail_data_tbl_template[".panelSearchFields"][] = "subject_pc";
	
$tdatamail_data_tbl_template[".advSearchFields"] = array();
$tdatamail_data_tbl_template[".advSearchFields"][] = "first_satei_meisai_flag";
$tdatamail_data_tbl_template[".advSearchFields"][] = "created_by";
$tdatamail_data_tbl_template[".advSearchFields"][] = "created_at";
$tdatamail_data_tbl_template[".advSearchFields"][] = "updated_by";
$tdatamail_data_tbl_template[".advSearchFields"][] = "updated_at";
$tdatamail_data_tbl_template[".advSearchFields"][] = "id";
$tdatamail_data_tbl_template[".advSearchFields"][] = "category_id";
$tdatamail_data_tbl_template[".advSearchFields"][] = "sub_category_id";
$tdatamail_data_tbl_template[".advSearchFields"][] = "title";
$tdatamail_data_tbl_template[".advSearchFields"][] = "from_addr";
$tdatamail_data_tbl_template[".advSearchFields"][] = "subject_pc";
$tdatamail_data_tbl_template[".advSearchFields"][] = "str_header";
$tdatamail_data_tbl_template[".advSearchFields"][] = "str_pc";
$tdatamail_data_tbl_template[".advSearchFields"][] = "str2_pc";
$tdatamail_data_tbl_template[".advSearchFields"][] = "str3_pc";
$tdatamail_data_tbl_template[".advSearchFields"][] = "junban";

$tdatamail_data_tbl_template[".tableType"] = "list";

$tdatamail_data_tbl_template[".printerPageOrientation"] = 0;
$tdatamail_data_tbl_template[".nPrinterPageScale"] = 100;

$tdatamail_data_tbl_template[".nPrinterSplitRecords"] = 40;

$tdatamail_data_tbl_template[".nPrinterPDFSplitRecords"] = 40;



$tdatamail_data_tbl_template[".geocodingEnabled"] = false;





$tdatamail_data_tbl_template[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamail_data_tbl_template[".pageSize"] = 20;

$tdatamail_data_tbl_template[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `junban`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamail_data_tbl_template[".strOrderBy"] = $tstrOrderBy;

$tdatamail_data_tbl_template[".orderindexes"] = array();
$tdatamail_data_tbl_template[".orderindexes"][] = array(9, (1 ? "ASC" : "DESC"), "`junban`");

$tdatamail_data_tbl_template[".sqlHead"] = "SELECT `id`,  `title`,  `from_addr`,  `subject_pc`,  `str_header`,  `str_pc`,  `str2_pc`,  `str3_pc`,  `junban`,  `category_id`,  `sub_category_id`,  `first_satei_meisai_flag`,  `created_by`,  `created_at`,  `updated_by`,  `updated_at`";
$tdatamail_data_tbl_template[".sqlFrom"] = "FROM `mail_data_tbl_template`";
$tdatamail_data_tbl_template[".sqlWhereExpr"] = "";
$tdatamail_data_tbl_template[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamail_data_tbl_template[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamail_data_tbl_template[".arrGroupsPerPage"] = $arrGPP;

$tdatamail_data_tbl_template[".highlightSearchResults"] = true;

$tableKeysmail_data_tbl_template = array();
$tableKeysmail_data_tbl_template[] = "id";
$tdatamail_data_tbl_template[".Keys"] = $tableKeysmail_data_tbl_template;

$tdatamail_data_tbl_template[".listFields"] = array();
$tdatamail_data_tbl_template[".listFields"][] = "id";
$tdatamail_data_tbl_template[".listFields"][] = "first_satei_meisai_flag";
$tdatamail_data_tbl_template[".listFields"][] = "category_id";
$tdatamail_data_tbl_template[".listFields"][] = "sub_category_id";
$tdatamail_data_tbl_template[".listFields"][] = "title";
$tdatamail_data_tbl_template[".listFields"][] = "from_addr";
$tdatamail_data_tbl_template[".listFields"][] = "subject_pc";
$tdatamail_data_tbl_template[".listFields"][] = "str_header";
$tdatamail_data_tbl_template[".listFields"][] = "str_pc";
$tdatamail_data_tbl_template[".listFields"][] = "str2_pc";
$tdatamail_data_tbl_template[".listFields"][] = "str3_pc";
$tdatamail_data_tbl_template[".listFields"][] = "junban";
$tdatamail_data_tbl_template[".listFields"][] = "created_at";
$tdatamail_data_tbl_template[".listFields"][] = "created_by";
$tdatamail_data_tbl_template[".listFields"][] = "updated_at";
$tdatamail_data_tbl_template[".listFields"][] = "updated_by";

$tdatamail_data_tbl_template[".hideMobileList"] = array();


$tdatamail_data_tbl_template[".viewFields"] = array();

$tdatamail_data_tbl_template[".addFields"] = array();
$tdatamail_data_tbl_template[".addFields"][] = "first_satei_meisai_flag";
$tdatamail_data_tbl_template[".addFields"][] = "category_id";
$tdatamail_data_tbl_template[".addFields"][] = "sub_category_id";
$tdatamail_data_tbl_template[".addFields"][] = "title";
$tdatamail_data_tbl_template[".addFields"][] = "from_addr";
$tdatamail_data_tbl_template[".addFields"][] = "subject_pc";
$tdatamail_data_tbl_template[".addFields"][] = "str_header";
$tdatamail_data_tbl_template[".addFields"][] = "str_pc";
$tdatamail_data_tbl_template[".addFields"][] = "str2_pc";
$tdatamail_data_tbl_template[".addFields"][] = "str3_pc";
$tdatamail_data_tbl_template[".addFields"][] = "junban";

$tdatamail_data_tbl_template[".masterListFields"] = array();
$tdatamail_data_tbl_template[".masterListFields"][] = "first_satei_meisai_flag";
$tdatamail_data_tbl_template[".masterListFields"][] = "created_by";
$tdatamail_data_tbl_template[".masterListFields"][] = "created_at";
$tdatamail_data_tbl_template[".masterListFields"][] = "updated_by";
$tdatamail_data_tbl_template[".masterListFields"][] = "updated_at";
$tdatamail_data_tbl_template[".masterListFields"][] = "id";
$tdatamail_data_tbl_template[".masterListFields"][] = "category_id";
$tdatamail_data_tbl_template[".masterListFields"][] = "sub_category_id";
$tdatamail_data_tbl_template[".masterListFields"][] = "title";
$tdatamail_data_tbl_template[".masterListFields"][] = "from_addr";
$tdatamail_data_tbl_template[".masterListFields"][] = "subject_pc";
$tdatamail_data_tbl_template[".masterListFields"][] = "str_header";
$tdatamail_data_tbl_template[".masterListFields"][] = "str_pc";
$tdatamail_data_tbl_template[".masterListFields"][] = "str2_pc";
$tdatamail_data_tbl_template[".masterListFields"][] = "str3_pc";
$tdatamail_data_tbl_template[".masterListFields"][] = "junban";

$tdatamail_data_tbl_template[".inlineAddFields"] = array();

$tdatamail_data_tbl_template[".editFields"] = array();
$tdatamail_data_tbl_template[".editFields"][] = "first_satei_meisai_flag";
$tdatamail_data_tbl_template[".editFields"][] = "category_id";
$tdatamail_data_tbl_template[".editFields"][] = "sub_category_id";
$tdatamail_data_tbl_template[".editFields"][] = "title";
$tdatamail_data_tbl_template[".editFields"][] = "from_addr";
$tdatamail_data_tbl_template[".editFields"][] = "subject_pc";
$tdatamail_data_tbl_template[".editFields"][] = "str_header";
$tdatamail_data_tbl_template[".editFields"][] = "str_pc";
$tdatamail_data_tbl_template[".editFields"][] = "str2_pc";
$tdatamail_data_tbl_template[".editFields"][] = "str3_pc";
$tdatamail_data_tbl_template[".editFields"][] = "junban";

$tdatamail_data_tbl_template[".inlineEditFields"] = array();

$tdatamail_data_tbl_template[".updateSelectedFields"] = array();
$tdatamail_data_tbl_template[".updateSelectedFields"][] = "first_satei_meisai_flag";
$tdatamail_data_tbl_template[".updateSelectedFields"][] = "category_id";
$tdatamail_data_tbl_template[".updateSelectedFields"][] = "sub_category_id";
$tdatamail_data_tbl_template[".updateSelectedFields"][] = "title";
$tdatamail_data_tbl_template[".updateSelectedFields"][] = "from_addr";
$tdatamail_data_tbl_template[".updateSelectedFields"][] = "subject_pc";
$tdatamail_data_tbl_template[".updateSelectedFields"][] = "str_header";
$tdatamail_data_tbl_template[".updateSelectedFields"][] = "str_pc";
$tdatamail_data_tbl_template[".updateSelectedFields"][] = "str2_pc";
$tdatamail_data_tbl_template[".updateSelectedFields"][] = "str3_pc";
$tdatamail_data_tbl_template[".updateSelectedFields"][] = "junban";


$tdatamail_data_tbl_template[".exportFields"] = array();
$tdatamail_data_tbl_template[".exportFields"][] = "first_satei_meisai_flag";
$tdatamail_data_tbl_template[".exportFields"][] = "created_by";
$tdatamail_data_tbl_template[".exportFields"][] = "created_at";
$tdatamail_data_tbl_template[".exportFields"][] = "updated_by";
$tdatamail_data_tbl_template[".exportFields"][] = "updated_at";
$tdatamail_data_tbl_template[".exportFields"][] = "id";
$tdatamail_data_tbl_template[".exportFields"][] = "category_id";
$tdatamail_data_tbl_template[".exportFields"][] = "sub_category_id";
$tdatamail_data_tbl_template[".exportFields"][] = "title";
$tdatamail_data_tbl_template[".exportFields"][] = "from_addr";
$tdatamail_data_tbl_template[".exportFields"][] = "subject_pc";
$tdatamail_data_tbl_template[".exportFields"][] = "str_header";
$tdatamail_data_tbl_template[".exportFields"][] = "str_pc";
$tdatamail_data_tbl_template[".exportFields"][] = "str2_pc";
$tdatamail_data_tbl_template[".exportFields"][] = "str3_pc";
$tdatamail_data_tbl_template[".exportFields"][] = "junban";

$tdatamail_data_tbl_template[".importFields"] = array();
$tdatamail_data_tbl_template[".importFields"][] = "id";
$tdatamail_data_tbl_template[".importFields"][] = "title";
$tdatamail_data_tbl_template[".importFields"][] = "from_addr";
$tdatamail_data_tbl_template[".importFields"][] = "subject_pc";
$tdatamail_data_tbl_template[".importFields"][] = "str_header";
$tdatamail_data_tbl_template[".importFields"][] = "str_pc";
$tdatamail_data_tbl_template[".importFields"][] = "str2_pc";
$tdatamail_data_tbl_template[".importFields"][] = "str3_pc";
$tdatamail_data_tbl_template[".importFields"][] = "junban";
$tdatamail_data_tbl_template[".importFields"][] = "category_id";
$tdatamail_data_tbl_template[".importFields"][] = "sub_category_id";
$tdatamail_data_tbl_template[".importFields"][] = "first_satei_meisai_flag";
$tdatamail_data_tbl_template[".importFields"][] = "created_by";
$tdatamail_data_tbl_template[".importFields"][] = "created_at";
$tdatamail_data_tbl_template[".importFields"][] = "updated_by";
$tdatamail_data_tbl_template[".importFields"][] = "updated_at";

$tdatamail_data_tbl_template[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mail_data_tbl_template";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_template","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatamail_data_tbl_template["id"] = $fdata;
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "mail_data_tbl_template";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_template","title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`title`";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamail_data_tbl_template["title"] = $fdata;
//	from_addr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "from_addr";
	$fdata["GoodName"] = "from_addr";
	$fdata["ownerTable"] = "mail_data_tbl_template";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_template","from_addr");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "from_addr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`from_addr`";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamail_data_tbl_template["from_addr"] = $fdata;
//	subject_pc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "subject_pc";
	$fdata["GoodName"] = "subject_pc";
	$fdata["ownerTable"] = "mail_data_tbl_template";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_template","subject_pc");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "subject_pc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`subject_pc`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamail_data_tbl_template["subject_pc"] = $fdata;
//	str_header
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "str_header";
	$fdata["GoodName"] = "str_header";
	$fdata["ownerTable"] = "mail_data_tbl_template";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_template","str_header");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "str_header";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`str_header`";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamail_data_tbl_template["str_header"] = $fdata;
//	str_pc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "str_pc";
	$fdata["GoodName"] = "str_pc";
	$fdata["ownerTable"] = "mail_data_tbl_template";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_template","str_pc");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "str_pc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`str_pc`";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamail_data_tbl_template["str_pc"] = $fdata;
//	str2_pc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "str2_pc";
	$fdata["GoodName"] = "str2_pc";
	$fdata["ownerTable"] = "mail_data_tbl_template";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_template","str2_pc");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "str2_pc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`str2_pc`";

	
	
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




	$tdatamail_data_tbl_template["str2_pc"] = $fdata;
//	str3_pc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "str3_pc";
	$fdata["GoodName"] = "str3_pc";
	$fdata["ownerTable"] = "mail_data_tbl_template";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_template","str3_pc");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "str3_pc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`str3_pc`";

	
	
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
	$edata["LookupTable"] = "shomei_tbl";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "title";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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




	$tdatamail_data_tbl_template["str3_pc"] = $fdata;
//	junban
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "junban";
	$fdata["GoodName"] = "junban";
	$fdata["ownerTable"] = "mail_data_tbl_template";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_template","junban");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "junban";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`junban`";

	
	
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




	$tdatamail_data_tbl_template["junban"] = $fdata;
//	category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "category_id";
	$fdata["GoodName"] = "category_id";
	$fdata["ownerTable"] = "mail_data_tbl_template";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_template","category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category_id`";

	
	
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
	$edata["LookupTable"] = "mail_data_tbl_category";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "sort";

	
	
	
	
				//dependent dropdowns
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "sub_category_id";

	
	
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




	$tdatamail_data_tbl_template["category_id"] = $fdata;
//	sub_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sub_category_id";
	$fdata["GoodName"] = "sub_category_id";
	$fdata["ownerTable"] = "mail_data_tbl_template";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_template","sub_category_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sub_category_id`";

	
	
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
	$edata["LookupTable"] = "mail_data_tbl_sub_category";
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




	$tdatamail_data_tbl_template["sub_category_id"] = $fdata;
//	first_satei_meisai_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "first_satei_meisai_flag";
	$fdata["GoodName"] = "first_satei_meisai_flag";
	$fdata["ownerTable"] = "mail_data_tbl_template";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_template","first_satei_meisai_flag");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
		$fdata["bUpdateSelected"] = true;


	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "first_satei_meisai_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`first_satei_meisai_flag`";

	
	
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




	$tdatamail_data_tbl_template["first_satei_meisai_flag"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mail_data_tbl_template";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_template","created_by");
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




	$tdatamail_data_tbl_template["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mail_data_tbl_template";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_template","created_at");
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




	$tdatamail_data_tbl_template["created_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "mail_data_tbl_template";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_template","updated_by");
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




	$tdatamail_data_tbl_template["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "mail_data_tbl_template";
	$fdata["Label"] = GetFieldLabel("mail_data_tbl_template","updated_at");
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




	$tdatamail_data_tbl_template["updated_at"] = $fdata;


$tables_data["mail_data_tbl_template"]=&$tdatamail_data_tbl_template;
$field_labels["mail_data_tbl_template"] = &$fieldLabelsmail_data_tbl_template;
$fieldToolTips["mail_data_tbl_template"] = &$fieldToolTipsmail_data_tbl_template;
$placeHolders["mail_data_tbl_template"] = &$placeHoldersmail_data_tbl_template;
$page_titles["mail_data_tbl_template"] = &$pageTitlesmail_data_tbl_template;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mail_data_tbl_template"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mail_data_tbl_template"] = array();


	
				$strOriginalDetailsTable="mail_data_tbl_sub_category";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="mail_data_tbl_sub_category";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "mail_data_tbl_sub_category";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["mail_data_tbl_template"][0] = $masterParams;
				$masterTablesData["mail_data_tbl_template"][0]["masterKeys"] = array();
	$masterTablesData["mail_data_tbl_template"][0]["masterKeys"][]="id";
				$masterTablesData["mail_data_tbl_template"][0]["detailKeys"] = array();
	$masterTablesData["mail_data_tbl_template"][0]["detailKeys"][]="sub_category_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mail_data_tbl_template()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `title`,  `from_addr`,  `subject_pc`,  `str_header`,  `str_pc`,  `str2_pc`,  `str3_pc`,  `junban`,  `category_id`,  `sub_category_id`,  `first_satei_meisai_flag`,  `created_by`,  `created_at`,  `updated_by`,  `updated_at`";
$proto0["m_strFrom"] = "FROM `mail_data_tbl_template`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `junban`";
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
	"m_strTable" => "mail_data_tbl_template",
	"m_srcTableName" => "mail_data_tbl_template"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mail_data_tbl_template";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "mail_data_tbl_template",
	"m_srcTableName" => "mail_data_tbl_template"
));

$proto8["m_sql"] = "`title`";
$proto8["m_srcTableName"] = "mail_data_tbl_template";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "from_addr",
	"m_strTable" => "mail_data_tbl_template",
	"m_srcTableName" => "mail_data_tbl_template"
));

$proto10["m_sql"] = "`from_addr`";
$proto10["m_srcTableName"] = "mail_data_tbl_template";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "subject_pc",
	"m_strTable" => "mail_data_tbl_template",
	"m_srcTableName" => "mail_data_tbl_template"
));

$proto12["m_sql"] = "`subject_pc`";
$proto12["m_srcTableName"] = "mail_data_tbl_template";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "str_header",
	"m_strTable" => "mail_data_tbl_template",
	"m_srcTableName" => "mail_data_tbl_template"
));

$proto14["m_sql"] = "`str_header`";
$proto14["m_srcTableName"] = "mail_data_tbl_template";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "str_pc",
	"m_strTable" => "mail_data_tbl_template",
	"m_srcTableName" => "mail_data_tbl_template"
));

$proto16["m_sql"] = "`str_pc`";
$proto16["m_srcTableName"] = "mail_data_tbl_template";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "str2_pc",
	"m_strTable" => "mail_data_tbl_template",
	"m_srcTableName" => "mail_data_tbl_template"
));

$proto18["m_sql"] = "`str2_pc`";
$proto18["m_srcTableName"] = "mail_data_tbl_template";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "str3_pc",
	"m_strTable" => "mail_data_tbl_template",
	"m_srcTableName" => "mail_data_tbl_template"
));

$proto20["m_sql"] = "`str3_pc`";
$proto20["m_srcTableName"] = "mail_data_tbl_template";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "junban",
	"m_strTable" => "mail_data_tbl_template",
	"m_srcTableName" => "mail_data_tbl_template"
));

$proto22["m_sql"] = "`junban`";
$proto22["m_srcTableName"] = "mail_data_tbl_template";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "category_id",
	"m_strTable" => "mail_data_tbl_template",
	"m_srcTableName" => "mail_data_tbl_template"
));

$proto24["m_sql"] = "`category_id`";
$proto24["m_srcTableName"] = "mail_data_tbl_template";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_category_id",
	"m_strTable" => "mail_data_tbl_template",
	"m_srcTableName" => "mail_data_tbl_template"
));

$proto26["m_sql"] = "`sub_category_id`";
$proto26["m_srcTableName"] = "mail_data_tbl_template";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "first_satei_meisai_flag",
	"m_strTable" => "mail_data_tbl_template",
	"m_srcTableName" => "mail_data_tbl_template"
));

$proto28["m_sql"] = "`first_satei_meisai_flag`";
$proto28["m_srcTableName"] = "mail_data_tbl_template";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mail_data_tbl_template",
	"m_srcTableName" => "mail_data_tbl_template"
));

$proto30["m_sql"] = "`created_by`";
$proto30["m_srcTableName"] = "mail_data_tbl_template";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mail_data_tbl_template",
	"m_srcTableName" => "mail_data_tbl_template"
));

$proto32["m_sql"] = "`created_at`";
$proto32["m_srcTableName"] = "mail_data_tbl_template";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "mail_data_tbl_template",
	"m_srcTableName" => "mail_data_tbl_template"
));

$proto34["m_sql"] = "`updated_by`";
$proto34["m_srcTableName"] = "mail_data_tbl_template";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "mail_data_tbl_template",
	"m_srcTableName" => "mail_data_tbl_template"
));

$proto36["m_sql"] = "`updated_at`";
$proto36["m_srcTableName"] = "mail_data_tbl_template";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "mail_data_tbl_template";
$proto39["m_srcTableName"] = "mail_data_tbl_template";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "title";
$proto39["m_columns"][] = "from_addr";
$proto39["m_columns"][] = "cc_addr";
$proto39["m_columns"][] = "bcc_addr";
$proto39["m_columns"][] = "subject_pc";
$proto39["m_columns"][] = "str_header";
$proto39["m_columns"][] = "user_pc_flag";
$proto39["m_columns"][] = "str_pc";
$proto39["m_columns"][] = "item_pc_flag";
$proto39["m_columns"][] = "tesuuryou_pc_flag";
$proto39["m_columns"][] = "send_pc_flag";
$proto39["m_columns"][] = "kessai_pc_flag";
$proto39["m_columns"][] = "no_pc_flag";
$proto39["m_columns"][] = "form_pc_flag";
$proto39["m_columns"][] = "page_pc_flag";
$proto39["m_columns"][] = "str2_pc";
$proto39["m_columns"][] = "str3_pc";
$proto39["m_columns"][] = "subject_mob";
$proto39["m_columns"][] = "user_mob_flag";
$proto39["m_columns"][] = "str_mob";
$proto39["m_columns"][] = "mylink_mob_flag";
$proto39["m_columns"][] = "str2_mob";
$proto39["m_columns"][] = "str3_mob";
$proto39["m_columns"][] = "junban";
$proto39["m_columns"][] = "category_id";
$proto39["m_columns"][] = "sub_category_id";
$proto39["m_columns"][] = "first_satei_meisai_flag";
$proto39["m_columns"][] = "created_by";
$proto39["m_columns"][] = "created_at";
$proto39["m_columns"][] = "updated_by";
$proto39["m_columns"][] = "updated_at";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "`mail_data_tbl_template`";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "mail_data_tbl_template";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "junban",
	"m_strTable" => "mail_data_tbl_template",
	"m_srcTableName" => "mail_data_tbl_template"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 1;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mail_data_tbl_template";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mail_data_tbl_template = createSqlQuery_mail_data_tbl_template();


	
		;

																

$tdatamail_data_tbl_template[".sqlquery"] = $queryData_mail_data_tbl_template;

include_once(getabspath("include/mail_data_tbl_template_events.php"));
$tableEvents["mail_data_tbl_template"] = new eventclass_mail_data_tbl_template;
$tdatamail_data_tbl_template[".hasEvents"] = true;

?>