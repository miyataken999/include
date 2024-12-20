<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_shouhin_column_name = array();
	$tdatamst_shouhin_column_name[".truncateText"] = true;
	$tdatamst_shouhin_column_name[".NumberOfChars"] = 80;
	$tdatamst_shouhin_column_name[".ShortName"] = "mst_shouhin_column_name";
	$tdatamst_shouhin_column_name[".OwnerID"] = "";
	$tdatamst_shouhin_column_name[".OriginalTable"] = "mst_shouhin_column_name";

//	field labels
$fieldLabelsmst_shouhin_column_name = array();
$fieldToolTipsmst_shouhin_column_name = array();
$pageTitlesmst_shouhin_column_name = array();
$placeHoldersmst_shouhin_column_name = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_shouhin_column_name["Japanese"] = array();
	$fieldToolTipsmst_shouhin_column_name["Japanese"] = array();
	$placeHoldersmst_shouhin_column_name["Japanese"] = array();
	$pageTitlesmst_shouhin_column_name["Japanese"] = array();
	$fieldLabelsmst_shouhin_column_name["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_shouhin_column_name["Japanese"]["id"] = "";
	$placeHoldersmst_shouhin_column_name["Japanese"]["id"] = "";
	$fieldLabelsmst_shouhin_column_name["Japanese"]["name"] = "カラム名";
	$fieldToolTipsmst_shouhin_column_name["Japanese"]["name"] = "";
	$placeHoldersmst_shouhin_column_name["Japanese"]["name"] = "";
	$fieldLabelsmst_shouhin_column_name["Japanese"]["waname"] = "和名";
	$fieldToolTipsmst_shouhin_column_name["Japanese"]["waname"] = "";
	$placeHoldersmst_shouhin_column_name["Japanese"]["waname"] = "";
	$fieldLabelsmst_shouhin_column_name["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_shouhin_column_name["Japanese"]["sort"] = "";
	$placeHoldersmst_shouhin_column_name["Japanese"]["sort"] = "";
	$fieldLabelsmst_shouhin_column_name["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_shouhin_column_name["Japanese"]["update_by"] = "";
	$placeHoldersmst_shouhin_column_name["Japanese"]["update_by"] = "";
	$fieldLabelsmst_shouhin_column_name["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_shouhin_column_name["Japanese"]["update_at"] = "";
	$placeHoldersmst_shouhin_column_name["Japanese"]["update_at"] = "";
	$fieldLabelsmst_shouhin_column_name["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsmst_shouhin_column_name["Japanese"]["create_by"] = "";
	$placeHoldersmst_shouhin_column_name["Japanese"]["create_by"] = "";
	$fieldLabelsmst_shouhin_column_name["Japanese"]["create_at"] = "登録日";
	$fieldToolTipsmst_shouhin_column_name["Japanese"]["create_at"] = "";
	$placeHoldersmst_shouhin_column_name["Japanese"]["create_at"] = "";
	$fieldLabelsmst_shouhin_column_name["Japanese"]["null_check"] = "値チェック";
	$fieldToolTipsmst_shouhin_column_name["Japanese"]["null_check"] = "";
	$placeHoldersmst_shouhin_column_name["Japanese"]["null_check"] = "";
	$fieldLabelsmst_shouhin_column_name["Japanese"]["data_unit"] = "単位";
	$fieldToolTipsmst_shouhin_column_name["Japanese"]["data_unit"] = "";
	$placeHoldersmst_shouhin_column_name["Japanese"]["data_unit"] = "";
	$fieldLabelsmst_shouhin_column_name["Japanese"]["dai_cate"] = "大カテ群";
	$fieldToolTipsmst_shouhin_column_name["Japanese"]["dai_cate"] = "";
	$placeHoldersmst_shouhin_column_name["Japanese"]["dai_cate"] = "";
	$fieldLabelsmst_shouhin_column_name["Japanese"]["sub_cate"] = "中カテ群";
	$fieldToolTipsmst_shouhin_column_name["Japanese"]["sub_cate"] = "";
	$placeHoldersmst_shouhin_column_name["Japanese"]["sub_cate"] = "";
	$fieldLabelsmst_shouhin_column_name["Japanese"]["input_type"] = "入力形式";
	$fieldToolTipsmst_shouhin_column_name["Japanese"]["input_type"] = "";
	$placeHoldersmst_shouhin_column_name["Japanese"]["input_type"] = "";
	$fieldLabelsmst_shouhin_column_name["Japanese"]["save_unit"] = "保存値";
	$fieldToolTipsmst_shouhin_column_name["Japanese"]["save_unit"] = "";
	$placeHoldersmst_shouhin_column_name["Japanese"]["save_unit"] = "";
	$fieldLabelsmst_shouhin_column_name["Japanese"]["name_column"] = "表示カラム名";
	$fieldToolTipsmst_shouhin_column_name["Japanese"]["name_column"] = "";
	$placeHoldersmst_shouhin_column_name["Japanese"]["name_column"] = "";
	$fieldLabelsmst_shouhin_column_name["Japanese"]["no_reflect"] = "サイズ反映無し";
	$fieldToolTipsmst_shouhin_column_name["Japanese"]["no_reflect"] = "";
	$placeHoldersmst_shouhin_column_name["Japanese"]["no_reflect"] = "";
	if (count($fieldToolTipsmst_shouhin_column_name["Japanese"]))
		$tdatamst_shouhin_column_name[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_shouhin_column_name[""] = array();
	$fieldToolTipsmst_shouhin_column_name[""] = array();
	$placeHoldersmst_shouhin_column_name[""] = array();
	$pageTitlesmst_shouhin_column_name[""] = array();
	$fieldLabelsmst_shouhin_column_name[""]["id"] = "Id";
	$fieldToolTipsmst_shouhin_column_name[""]["id"] = "";
	$placeHoldersmst_shouhin_column_name[""]["id"] = "";
	$fieldLabelsmst_shouhin_column_name[""]["name"] = "Name";
	$fieldToolTipsmst_shouhin_column_name[""]["name"] = "";
	$placeHoldersmst_shouhin_column_name[""]["name"] = "";
	$fieldLabelsmst_shouhin_column_name[""]["waname"] = "Waname";
	$fieldToolTipsmst_shouhin_column_name[""]["waname"] = "";
	$placeHoldersmst_shouhin_column_name[""]["waname"] = "";
	$fieldLabelsmst_shouhin_column_name[""]["sort"] = "Sort";
	$fieldToolTipsmst_shouhin_column_name[""]["sort"] = "";
	$placeHoldersmst_shouhin_column_name[""]["sort"] = "";
	$fieldLabelsmst_shouhin_column_name[""]["update_by"] = "Update By";
	$fieldToolTipsmst_shouhin_column_name[""]["update_by"] = "";
	$placeHoldersmst_shouhin_column_name[""]["update_by"] = "";
	$fieldLabelsmst_shouhin_column_name[""]["update_at"] = "Update At";
	$fieldToolTipsmst_shouhin_column_name[""]["update_at"] = "";
	$placeHoldersmst_shouhin_column_name[""]["update_at"] = "";
	$fieldLabelsmst_shouhin_column_name[""]["create_by"] = "Create By";
	$fieldToolTipsmst_shouhin_column_name[""]["create_by"] = "";
	$placeHoldersmst_shouhin_column_name[""]["create_by"] = "";
	$fieldLabelsmst_shouhin_column_name[""]["create_at"] = "Create At";
	$fieldToolTipsmst_shouhin_column_name[""]["create_at"] = "";
	$placeHoldersmst_shouhin_column_name[""]["create_at"] = "";
	$fieldLabelsmst_shouhin_column_name[""]["null_check"] = "Null Check";
	$fieldToolTipsmst_shouhin_column_name[""]["null_check"] = "";
	$placeHoldersmst_shouhin_column_name[""]["null_check"] = "";
	$fieldLabelsmst_shouhin_column_name[""]["data_unit"] = "Data Unit";
	$fieldToolTipsmst_shouhin_column_name[""]["data_unit"] = "";
	$placeHoldersmst_shouhin_column_name[""]["data_unit"] = "";
	$fieldLabelsmst_shouhin_column_name[""]["dai_cate"] = "Dai Cate";
	$fieldToolTipsmst_shouhin_column_name[""]["dai_cate"] = "";
	$placeHoldersmst_shouhin_column_name[""]["dai_cate"] = "";
	$fieldLabelsmst_shouhin_column_name[""]["sub_cate"] = "Sub Cate";
	$fieldToolTipsmst_shouhin_column_name[""]["sub_cate"] = "";
	$placeHoldersmst_shouhin_column_name[""]["sub_cate"] = "";
	$fieldLabelsmst_shouhin_column_name[""]["input_type"] = "Input Type";
	$fieldToolTipsmst_shouhin_column_name[""]["input_type"] = "";
	$placeHoldersmst_shouhin_column_name[""]["input_type"] = "";
	$fieldLabelsmst_shouhin_column_name[""]["save_unit"] = "Save Unit";
	$fieldToolTipsmst_shouhin_column_name[""]["save_unit"] = "";
	$placeHoldersmst_shouhin_column_name[""]["save_unit"] = "";
	$fieldLabelsmst_shouhin_column_name[""]["name_column"] = "Name Column";
	$fieldToolTipsmst_shouhin_column_name[""]["name_column"] = "";
	$placeHoldersmst_shouhin_column_name[""]["name_column"] = "";
	$fieldLabelsmst_shouhin_column_name[""]["no_reflect"] = "No Reflect";
	$fieldToolTipsmst_shouhin_column_name[""]["no_reflect"] = "";
	$placeHoldersmst_shouhin_column_name[""]["no_reflect"] = "";
	if (count($fieldToolTipsmst_shouhin_column_name[""]))
		$tdatamst_shouhin_column_name[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_shouhin_column_name["English"] = array();
	$fieldToolTipsmst_shouhin_column_name["English"] = array();
	$placeHoldersmst_shouhin_column_name["English"] = array();
	$pageTitlesmst_shouhin_column_name["English"] = array();
	$fieldLabelsmst_shouhin_column_name["English"]["id"] = "Id";
	$fieldToolTipsmst_shouhin_column_name["English"]["id"] = "";
	$placeHoldersmst_shouhin_column_name["English"]["id"] = "";
	$fieldLabelsmst_shouhin_column_name["English"]["name"] = "Name";
	$fieldToolTipsmst_shouhin_column_name["English"]["name"] = "";
	$placeHoldersmst_shouhin_column_name["English"]["name"] = "";
	$fieldLabelsmst_shouhin_column_name["English"]["waname"] = "Waname";
	$fieldToolTipsmst_shouhin_column_name["English"]["waname"] = "";
	$placeHoldersmst_shouhin_column_name["English"]["waname"] = "";
	$fieldLabelsmst_shouhin_column_name["English"]["sort"] = "Sort";
	$fieldToolTipsmst_shouhin_column_name["English"]["sort"] = "";
	$placeHoldersmst_shouhin_column_name["English"]["sort"] = "";
	$fieldLabelsmst_shouhin_column_name["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_shouhin_column_name["English"]["update_by"] = "";
	$placeHoldersmst_shouhin_column_name["English"]["update_by"] = "";
	$fieldLabelsmst_shouhin_column_name["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_shouhin_column_name["English"]["update_at"] = "";
	$placeHoldersmst_shouhin_column_name["English"]["update_at"] = "";
	$fieldLabelsmst_shouhin_column_name["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_shouhin_column_name["English"]["create_by"] = "";
	$placeHoldersmst_shouhin_column_name["English"]["create_by"] = "";
	$fieldLabelsmst_shouhin_column_name["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_shouhin_column_name["English"]["create_at"] = "";
	$placeHoldersmst_shouhin_column_name["English"]["create_at"] = "";
	$fieldLabelsmst_shouhin_column_name["English"]["null_check"] = "Null Check";
	$fieldToolTipsmst_shouhin_column_name["English"]["null_check"] = "";
	$placeHoldersmst_shouhin_column_name["English"]["null_check"] = "";
	$fieldLabelsmst_shouhin_column_name["English"]["data_unit"] = "Data Unit";
	$fieldToolTipsmst_shouhin_column_name["English"]["data_unit"] = "";
	$placeHoldersmst_shouhin_column_name["English"]["data_unit"] = "";
	$fieldLabelsmst_shouhin_column_name["English"]["dai_cate"] = "Dai Cate";
	$fieldToolTipsmst_shouhin_column_name["English"]["dai_cate"] = "";
	$placeHoldersmst_shouhin_column_name["English"]["dai_cate"] = "";
	$fieldLabelsmst_shouhin_column_name["English"]["sub_cate"] = "Sub Cate";
	$fieldToolTipsmst_shouhin_column_name["English"]["sub_cate"] = "";
	$placeHoldersmst_shouhin_column_name["English"]["sub_cate"] = "";
	$fieldLabelsmst_shouhin_column_name["English"]["input_type"] = "Input Type";
	$fieldToolTipsmst_shouhin_column_name["English"]["input_type"] = "";
	$placeHoldersmst_shouhin_column_name["English"]["input_type"] = "";
	$fieldLabelsmst_shouhin_column_name["English"]["save_unit"] = "Save Unit";
	$fieldToolTipsmst_shouhin_column_name["English"]["save_unit"] = "";
	$placeHoldersmst_shouhin_column_name["English"]["save_unit"] = "";
	$fieldLabelsmst_shouhin_column_name["English"]["name_column"] = "Name Column";
	$fieldToolTipsmst_shouhin_column_name["English"]["name_column"] = "";
	$placeHoldersmst_shouhin_column_name["English"]["name_column"] = "";
	$fieldLabelsmst_shouhin_column_name["English"]["no_reflect"] = "No Reflect";
	$fieldToolTipsmst_shouhin_column_name["English"]["no_reflect"] = "";
	$placeHoldersmst_shouhin_column_name["English"]["no_reflect"] = "";
	if (count($fieldToolTipsmst_shouhin_column_name["English"]))
		$tdatamst_shouhin_column_name[".isUseToolTips"] = true;
}


	$tdatamst_shouhin_column_name[".NCSearch"] = true;



$tdatamst_shouhin_column_name[".shortTableName"] = "mst_shouhin_column_name";
$tdatamst_shouhin_column_name[".nSecOptions"] = 0;
$tdatamst_shouhin_column_name[".recsPerRowPrint"] = 1;
$tdatamst_shouhin_column_name[".mainTableOwnerID"] = "";
$tdatamst_shouhin_column_name[".moveNext"] = 1;
$tdatamst_shouhin_column_name[".entityType"] = 0;

$tdatamst_shouhin_column_name[".strOriginalTableName"] = "mst_shouhin_column_name";

	



$tdatamst_shouhin_column_name[".showAddInPopup"] = false;

$tdatamst_shouhin_column_name[".showEditInPopup"] = false;

$tdatamst_shouhin_column_name[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_shouhin_column_name[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_shouhin_column_name[".fieldsForRegister"] = array();

$tdatamst_shouhin_column_name[".listAjax"] = false;

	$tdatamst_shouhin_column_name[".audit"] = true;

	$tdatamst_shouhin_column_name[".locking"] = false;



$tdatamst_shouhin_column_name[".list"] = true;

$tdatamst_shouhin_column_name[".inlineEdit"] = true;


$tdatamst_shouhin_column_name[".reorderRecordsByHeader"] = true;



$tdatamst_shouhin_column_name[".inlineAdd"] = true;
$tdatamst_shouhin_column_name[".view"] = true;

$tdatamst_shouhin_column_name[".import"] = true;

$tdatamst_shouhin_column_name[".exportTo"] = true;


$tdatamst_shouhin_column_name[".delete"] = true;

$tdatamst_shouhin_column_name[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_shouhin_column_name[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_shouhin_column_name[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_shouhin_column_name[".searchSaving"] = false;
//

$tdatamst_shouhin_column_name[".showSearchPanel"] = true;
		$tdatamst_shouhin_column_name[".flexibleSearch"] = true;

$tdatamst_shouhin_column_name[".isUseAjaxSuggest"] = true;

$tdatamst_shouhin_column_name[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_shouhin_column_name[".ajaxCodeSnippetAdded"] = false;

$tdatamst_shouhin_column_name[".buttonsAdded"] = false;

$tdatamst_shouhin_column_name[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_shouhin_column_name[".isUseTimeForSearch"] = false;





$tdatamst_shouhin_column_name[".allSearchFields"] = array();
$tdatamst_shouhin_column_name[".filterFields"] = array();
$tdatamst_shouhin_column_name[".requiredSearchFields"] = array();

$tdatamst_shouhin_column_name[".allSearchFields"][] = "id";
	$tdatamst_shouhin_column_name[".allSearchFields"][] = "name";
	$tdatamst_shouhin_column_name[".allSearchFields"][] = "waname";
	$tdatamst_shouhin_column_name[".allSearchFields"][] = "sort";
	$tdatamst_shouhin_column_name[".allSearchFields"][] = "dai_cate";
	$tdatamst_shouhin_column_name[".allSearchFields"][] = "sub_cate";
	$tdatamst_shouhin_column_name[".allSearchFields"][] = "data_unit";
	$tdatamst_shouhin_column_name[".allSearchFields"][] = "null_check";
	$tdatamst_shouhin_column_name[".allSearchFields"][] = "input_type";
	$tdatamst_shouhin_column_name[".allSearchFields"][] = "save_unit";
	$tdatamst_shouhin_column_name[".allSearchFields"][] = "name_column";
	$tdatamst_shouhin_column_name[".allSearchFields"][] = "no_reflect";
	$tdatamst_shouhin_column_name[".allSearchFields"][] = "update_by";
	$tdatamst_shouhin_column_name[".allSearchFields"][] = "update_at";
	$tdatamst_shouhin_column_name[".allSearchFields"][] = "create_by";
	$tdatamst_shouhin_column_name[".allSearchFields"][] = "create_at";
	

$tdatamst_shouhin_column_name[".googleLikeFields"] = array();
$tdatamst_shouhin_column_name[".googleLikeFields"][] = "id";
$tdatamst_shouhin_column_name[".googleLikeFields"][] = "name";
$tdatamst_shouhin_column_name[".googleLikeFields"][] = "waname";
$tdatamst_shouhin_column_name[".googleLikeFields"][] = "sort";
$tdatamst_shouhin_column_name[".googleLikeFields"][] = "update_by";
$tdatamst_shouhin_column_name[".googleLikeFields"][] = "update_at";
$tdatamst_shouhin_column_name[".googleLikeFields"][] = "create_by";
$tdatamst_shouhin_column_name[".googleLikeFields"][] = "create_at";
$tdatamst_shouhin_column_name[".googleLikeFields"][] = "null_check";
$tdatamst_shouhin_column_name[".googleLikeFields"][] = "data_unit";
$tdatamst_shouhin_column_name[".googleLikeFields"][] = "dai_cate";
$tdatamst_shouhin_column_name[".googleLikeFields"][] = "sub_cate";
$tdatamst_shouhin_column_name[".googleLikeFields"][] = "input_type";
$tdatamst_shouhin_column_name[".googleLikeFields"][] = "save_unit";
$tdatamst_shouhin_column_name[".googleLikeFields"][] = "name_column";
$tdatamst_shouhin_column_name[".googleLikeFields"][] = "no_reflect";


$tdatamst_shouhin_column_name[".advSearchFields"] = array();
$tdatamst_shouhin_column_name[".advSearchFields"][] = "id";
$tdatamst_shouhin_column_name[".advSearchFields"][] = "name";
$tdatamst_shouhin_column_name[".advSearchFields"][] = "waname";
$tdatamst_shouhin_column_name[".advSearchFields"][] = "sort";
$tdatamst_shouhin_column_name[".advSearchFields"][] = "dai_cate";
$tdatamst_shouhin_column_name[".advSearchFields"][] = "sub_cate";
$tdatamst_shouhin_column_name[".advSearchFields"][] = "data_unit";
$tdatamst_shouhin_column_name[".advSearchFields"][] = "null_check";
$tdatamst_shouhin_column_name[".advSearchFields"][] = "input_type";
$tdatamst_shouhin_column_name[".advSearchFields"][] = "save_unit";
$tdatamst_shouhin_column_name[".advSearchFields"][] = "name_column";
$tdatamst_shouhin_column_name[".advSearchFields"][] = "no_reflect";
$tdatamst_shouhin_column_name[".advSearchFields"][] = "update_by";
$tdatamst_shouhin_column_name[".advSearchFields"][] = "update_at";
$tdatamst_shouhin_column_name[".advSearchFields"][] = "create_by";
$tdatamst_shouhin_column_name[".advSearchFields"][] = "create_at";

$tdatamst_shouhin_column_name[".tableType"] = "list";

$tdatamst_shouhin_column_name[".printerPageOrientation"] = 0;
$tdatamst_shouhin_column_name[".nPrinterPageScale"] = 100;

$tdatamst_shouhin_column_name[".nPrinterSplitRecords"] = 40;

$tdatamst_shouhin_column_name[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_shouhin_column_name[".geocodingEnabled"] = false;





$tdatamst_shouhin_column_name[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_shouhin_column_name[".pageSize"] = 100;

$tdatamst_shouhin_column_name[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY sort";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_shouhin_column_name[".strOrderBy"] = $tstrOrderBy;

$tdatamst_shouhin_column_name[".orderindexes"] = array();
$tdatamst_shouhin_column_name[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_shouhin_column_name[".sqlHead"] = "SELECT id,  name,  waname,  sort,  update_by,  update_at,  create_by,  create_at,  null_check,  data_unit,  dai_cate,  sub_cate,  input_type,  save_unit,  name_column,  no_reflect";
$tdatamst_shouhin_column_name[".sqlFrom"] = "FROM mst_shouhin_column_name";
$tdatamst_shouhin_column_name[".sqlWhereExpr"] = "";
$tdatamst_shouhin_column_name[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_shouhin_column_name[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_shouhin_column_name[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_shouhin_column_name[".highlightSearchResults"] = true;

$tableKeysmst_shouhin_column_name = array();
$tableKeysmst_shouhin_column_name[] = "id";
$tdatamst_shouhin_column_name[".Keys"] = $tableKeysmst_shouhin_column_name;

$tdatamst_shouhin_column_name[".listFields"] = array();
$tdatamst_shouhin_column_name[".listFields"][] = "id";
$tdatamst_shouhin_column_name[".listFields"][] = "name";
$tdatamst_shouhin_column_name[".listFields"][] = "waname";
$tdatamst_shouhin_column_name[".listFields"][] = "sort";
$tdatamst_shouhin_column_name[".listFields"][] = "dai_cate";
$tdatamst_shouhin_column_name[".listFields"][] = "sub_cate";
$tdatamst_shouhin_column_name[".listFields"][] = "data_unit";
$tdatamst_shouhin_column_name[".listFields"][] = "null_check";
$tdatamst_shouhin_column_name[".listFields"][] = "input_type";
$tdatamst_shouhin_column_name[".listFields"][] = "save_unit";
$tdatamst_shouhin_column_name[".listFields"][] = "name_column";
$tdatamst_shouhin_column_name[".listFields"][] = "no_reflect";
$tdatamst_shouhin_column_name[".listFields"][] = "update_by";
$tdatamst_shouhin_column_name[".listFields"][] = "update_at";
$tdatamst_shouhin_column_name[".listFields"][] = "create_by";
$tdatamst_shouhin_column_name[".listFields"][] = "create_at";

$tdatamst_shouhin_column_name[".hideMobileList"] = array();


$tdatamst_shouhin_column_name[".viewFields"] = array();
$tdatamst_shouhin_column_name[".viewFields"][] = "id";
$tdatamst_shouhin_column_name[".viewFields"][] = "name";
$tdatamst_shouhin_column_name[".viewFields"][] = "waname";
$tdatamst_shouhin_column_name[".viewFields"][] = "sort";
$tdatamst_shouhin_column_name[".viewFields"][] = "dai_cate";
$tdatamst_shouhin_column_name[".viewFields"][] = "sub_cate";
$tdatamst_shouhin_column_name[".viewFields"][] = "data_unit";
$tdatamst_shouhin_column_name[".viewFields"][] = "null_check";
$tdatamst_shouhin_column_name[".viewFields"][] = "input_type";
$tdatamst_shouhin_column_name[".viewFields"][] = "save_unit";
$tdatamst_shouhin_column_name[".viewFields"][] = "name_column";
$tdatamst_shouhin_column_name[".viewFields"][] = "no_reflect";
$tdatamst_shouhin_column_name[".viewFields"][] = "update_by";
$tdatamst_shouhin_column_name[".viewFields"][] = "update_at";
$tdatamst_shouhin_column_name[".viewFields"][] = "create_by";
$tdatamst_shouhin_column_name[".viewFields"][] = "create_at";

$tdatamst_shouhin_column_name[".addFields"] = array();

$tdatamst_shouhin_column_name[".masterListFields"] = array();
$tdatamst_shouhin_column_name[".masterListFields"][] = "id";
$tdatamst_shouhin_column_name[".masterListFields"][] = "name";
$tdatamst_shouhin_column_name[".masterListFields"][] = "waname";
$tdatamst_shouhin_column_name[".masterListFields"][] = "sort";
$tdatamst_shouhin_column_name[".masterListFields"][] = "update_by";
$tdatamst_shouhin_column_name[".masterListFields"][] = "update_at";
$tdatamst_shouhin_column_name[".masterListFields"][] = "create_by";
$tdatamst_shouhin_column_name[".masterListFields"][] = "create_at";
$tdatamst_shouhin_column_name[".masterListFields"][] = "null_check";
$tdatamst_shouhin_column_name[".masterListFields"][] = "data_unit";
$tdatamst_shouhin_column_name[".masterListFields"][] = "dai_cate";
$tdatamst_shouhin_column_name[".masterListFields"][] = "sub_cate";
$tdatamst_shouhin_column_name[".masterListFields"][] = "input_type";
$tdatamst_shouhin_column_name[".masterListFields"][] = "save_unit";
$tdatamst_shouhin_column_name[".masterListFields"][] = "name_column";
$tdatamst_shouhin_column_name[".masterListFields"][] = "no_reflect";

$tdatamst_shouhin_column_name[".inlineAddFields"] = array();
$tdatamst_shouhin_column_name[".inlineAddFields"][] = "name";
$tdatamst_shouhin_column_name[".inlineAddFields"][] = "waname";
$tdatamst_shouhin_column_name[".inlineAddFields"][] = "sort";
$tdatamst_shouhin_column_name[".inlineAddFields"][] = "dai_cate";
$tdatamst_shouhin_column_name[".inlineAddFields"][] = "sub_cate";
$tdatamst_shouhin_column_name[".inlineAddFields"][] = "data_unit";
$tdatamst_shouhin_column_name[".inlineAddFields"][] = "null_check";
$tdatamst_shouhin_column_name[".inlineAddFields"][] = "input_type";
$tdatamst_shouhin_column_name[".inlineAddFields"][] = "save_unit";
$tdatamst_shouhin_column_name[".inlineAddFields"][] = "name_column";
$tdatamst_shouhin_column_name[".inlineAddFields"][] = "no_reflect";

$tdatamst_shouhin_column_name[".editFields"] = array();

$tdatamst_shouhin_column_name[".inlineEditFields"] = array();
$tdatamst_shouhin_column_name[".inlineEditFields"][] = "name";
$tdatamst_shouhin_column_name[".inlineEditFields"][] = "waname";
$tdatamst_shouhin_column_name[".inlineEditFields"][] = "sort";
$tdatamst_shouhin_column_name[".inlineEditFields"][] = "dai_cate";
$tdatamst_shouhin_column_name[".inlineEditFields"][] = "sub_cate";
$tdatamst_shouhin_column_name[".inlineEditFields"][] = "data_unit";
$tdatamst_shouhin_column_name[".inlineEditFields"][] = "null_check";
$tdatamst_shouhin_column_name[".inlineEditFields"][] = "input_type";
$tdatamst_shouhin_column_name[".inlineEditFields"][] = "save_unit";
$tdatamst_shouhin_column_name[".inlineEditFields"][] = "name_column";
$tdatamst_shouhin_column_name[".inlineEditFields"][] = "no_reflect";

$tdatamst_shouhin_column_name[".updateSelectedFields"] = array();


$tdatamst_shouhin_column_name[".exportFields"] = array();
$tdatamst_shouhin_column_name[".exportFields"][] = "id";
$tdatamst_shouhin_column_name[".exportFields"][] = "name";
$tdatamst_shouhin_column_name[".exportFields"][] = "waname";
$tdatamst_shouhin_column_name[".exportFields"][] = "sort";
$tdatamst_shouhin_column_name[".exportFields"][] = "dai_cate";
$tdatamst_shouhin_column_name[".exportFields"][] = "sub_cate";
$tdatamst_shouhin_column_name[".exportFields"][] = "data_unit";
$tdatamst_shouhin_column_name[".exportFields"][] = "null_check";
$tdatamst_shouhin_column_name[".exportFields"][] = "input_type";
$tdatamst_shouhin_column_name[".exportFields"][] = "save_unit";
$tdatamst_shouhin_column_name[".exportFields"][] = "name_column";
$tdatamst_shouhin_column_name[".exportFields"][] = "no_reflect";
$tdatamst_shouhin_column_name[".exportFields"][] = "update_by";
$tdatamst_shouhin_column_name[".exportFields"][] = "update_at";
$tdatamst_shouhin_column_name[".exportFields"][] = "create_by";
$tdatamst_shouhin_column_name[".exportFields"][] = "create_at";

$tdatamst_shouhin_column_name[".importFields"] = array();
$tdatamst_shouhin_column_name[".importFields"][] = "id";
$tdatamst_shouhin_column_name[".importFields"][] = "name";
$tdatamst_shouhin_column_name[".importFields"][] = "waname";
$tdatamst_shouhin_column_name[".importFields"][] = "sort";
$tdatamst_shouhin_column_name[".importFields"][] = "null_check";
$tdatamst_shouhin_column_name[".importFields"][] = "data_unit";
$tdatamst_shouhin_column_name[".importFields"][] = "dai_cate";
$tdatamst_shouhin_column_name[".importFields"][] = "sub_cate";
$tdatamst_shouhin_column_name[".importFields"][] = "input_type";
$tdatamst_shouhin_column_name[".importFields"][] = "save_unit";
$tdatamst_shouhin_column_name[".importFields"][] = "name_column";
$tdatamst_shouhin_column_name[".importFields"][] = "no_reflect";

$tdatamst_shouhin_column_name[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_shouhin_column_name";
	$fdata["Label"] = GetFieldLabel("mst_shouhin_column_name","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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




	$tdatamst_shouhin_column_name["id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "mst_shouhin_column_name";
	$fdata["Label"] = GetFieldLabel("mst_shouhin_column_name","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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
	$edata["LookupTable"] = "vw_shouhin_column";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "COLUMN_NAME";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "COLUMN_NAME";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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




	$tdatamst_shouhin_column_name["name"] = $fdata;
//	waname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "waname";
	$fdata["GoodName"] = "waname";
	$fdata["ownerTable"] = "mst_shouhin_column_name";
	$fdata["Label"] = GetFieldLabel("mst_shouhin_column_name","waname");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "waname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "waname";

	
	
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
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatamst_shouhin_column_name["waname"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_shouhin_column_name";
	$fdata["Label"] = GetFieldLabel("mst_shouhin_column_name","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sort";

	
	
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




	$tdatamst_shouhin_column_name["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_shouhin_column_name";
	$fdata["Label"] = GetFieldLabel("mst_shouhin_column_name","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_by";

	
	
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




	$tdatamst_shouhin_column_name["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_shouhin_column_name";
	$fdata["Label"] = GetFieldLabel("mst_shouhin_column_name","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "update_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_at";

	
	
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




	$tdatamst_shouhin_column_name["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_shouhin_column_name";
	$fdata["Label"] = GetFieldLabel("mst_shouhin_column_name","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_by";

	
	
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




	$tdatamst_shouhin_column_name["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_shouhin_column_name";
	$fdata["Label"] = GetFieldLabel("mst_shouhin_column_name","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_at";

	
	
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




	$tdatamst_shouhin_column_name["create_at"] = $fdata;
//	null_check
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "null_check";
	$fdata["GoodName"] = "null_check";
	$fdata["ownerTable"] = "mst_shouhin_column_name";
	$fdata["Label"] = GetFieldLabel("mst_shouhin_column_name","null_check");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "null_check";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "null_check";

	
	
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




	$tdatamst_shouhin_column_name["null_check"] = $fdata;
//	data_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "data_unit";
	$fdata["GoodName"] = "data_unit";
	$fdata["ownerTable"] = "mst_shouhin_column_name";
	$fdata["Label"] = GetFieldLabel("mst_shouhin_column_name","data_unit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "data_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_unit";

	
	
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




	$tdatamst_shouhin_column_name["data_unit"] = $fdata;
//	dai_cate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "dai_cate";
	$fdata["GoodName"] = "dai_cate";
	$fdata["ownerTable"] = "mst_shouhin_column_name";
	$fdata["Label"] = GetFieldLabel("mst_shouhin_column_name","dai_cate");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dai_cate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dai_cate";

	
	
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




	$tdatamst_shouhin_column_name["dai_cate"] = $fdata;
//	sub_cate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sub_cate";
	$fdata["GoodName"] = "sub_cate";
	$fdata["ownerTable"] = "mst_shouhin_column_name";
	$fdata["Label"] = GetFieldLabel("mst_shouhin_column_name","sub_cate");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sub_cate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sub_cate";

	
	
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




	$tdatamst_shouhin_column_name["sub_cate"] = $fdata;
//	input_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "input_type";
	$fdata["GoodName"] = "input_type";
	$fdata["ownerTable"] = "mst_shouhin_column_name";
	$fdata["Label"] = GetFieldLabel("mst_shouhin_column_name","input_type");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "input_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "input_type";

	
	
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
	$edata["LookupValues"][] = "select";
	$edata["LookupValues"][] = "text";

	
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




	$tdatamst_shouhin_column_name["input_type"] = $fdata;
//	save_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "save_unit";
	$fdata["GoodName"] = "save_unit";
	$fdata["ownerTable"] = "mst_shouhin_column_name";
	$fdata["Label"] = GetFieldLabel("mst_shouhin_column_name","save_unit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "save_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "save_unit";

	
	
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




	$tdatamst_shouhin_column_name["save_unit"] = $fdata;
//	name_column
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "name_column";
	$fdata["GoodName"] = "name_column";
	$fdata["ownerTable"] = "mst_shouhin_column_name";
	$fdata["Label"] = GetFieldLabel("mst_shouhin_column_name","name_column");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name_column";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name_column";

	
	
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




	$tdatamst_shouhin_column_name["name_column"] = $fdata;
//	no_reflect
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "no_reflect";
	$fdata["GoodName"] = "no_reflect";
	$fdata["ownerTable"] = "mst_shouhin_column_name";
	$fdata["Label"] = GetFieldLabel("mst_shouhin_column_name","no_reflect");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "no_reflect";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "no_reflect";

	
	
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




	$tdatamst_shouhin_column_name["no_reflect"] = $fdata;


$tables_data["mst_shouhin_column_name"]=&$tdatamst_shouhin_column_name;
$field_labels["mst_shouhin_column_name"] = &$fieldLabelsmst_shouhin_column_name;
$fieldToolTips["mst_shouhin_column_name"] = &$fieldToolTipsmst_shouhin_column_name;
$placeHolders["mst_shouhin_column_name"] = &$placeHoldersmst_shouhin_column_name;
$page_titles["mst_shouhin_column_name"] = &$pageTitlesmst_shouhin_column_name;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_shouhin_column_name"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_shouhin_column_name"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_shouhin_column_name()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  name,  waname,  sort,  update_by,  update_at,  create_by,  create_at,  null_check,  data_unit,  dai_cate,  sub_cate,  input_type,  save_unit,  name_column,  no_reflect";
$proto0["m_strFrom"] = "FROM mst_shouhin_column_name";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY sort";
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
	"m_strTable" => "mst_shouhin_column_name",
	"m_srcTableName" => "mst_shouhin_column_name"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mst_shouhin_column_name";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "mst_shouhin_column_name",
	"m_srcTableName" => "mst_shouhin_column_name"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "mst_shouhin_column_name";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "waname",
	"m_strTable" => "mst_shouhin_column_name",
	"m_srcTableName" => "mst_shouhin_column_name"
));

$proto10["m_sql"] = "waname";
$proto10["m_srcTableName"] = "mst_shouhin_column_name";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_shouhin_column_name",
	"m_srcTableName" => "mst_shouhin_column_name"
));

$proto12["m_sql"] = "sort";
$proto12["m_srcTableName"] = "mst_shouhin_column_name";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_shouhin_column_name",
	"m_srcTableName" => "mst_shouhin_column_name"
));

$proto14["m_sql"] = "update_by";
$proto14["m_srcTableName"] = "mst_shouhin_column_name";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_shouhin_column_name",
	"m_srcTableName" => "mst_shouhin_column_name"
));

$proto16["m_sql"] = "update_at";
$proto16["m_srcTableName"] = "mst_shouhin_column_name";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_shouhin_column_name",
	"m_srcTableName" => "mst_shouhin_column_name"
));

$proto18["m_sql"] = "create_by";
$proto18["m_srcTableName"] = "mst_shouhin_column_name";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_shouhin_column_name",
	"m_srcTableName" => "mst_shouhin_column_name"
));

$proto20["m_sql"] = "create_at";
$proto20["m_srcTableName"] = "mst_shouhin_column_name";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "null_check",
	"m_strTable" => "mst_shouhin_column_name",
	"m_srcTableName" => "mst_shouhin_column_name"
));

$proto22["m_sql"] = "null_check";
$proto22["m_srcTableName"] = "mst_shouhin_column_name";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "data_unit",
	"m_strTable" => "mst_shouhin_column_name",
	"m_srcTableName" => "mst_shouhin_column_name"
));

$proto24["m_sql"] = "data_unit";
$proto24["m_srcTableName"] = "mst_shouhin_column_name";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "dai_cate",
	"m_strTable" => "mst_shouhin_column_name",
	"m_srcTableName" => "mst_shouhin_column_name"
));

$proto26["m_sql"] = "dai_cate";
$proto26["m_srcTableName"] = "mst_shouhin_column_name";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_cate",
	"m_strTable" => "mst_shouhin_column_name",
	"m_srcTableName" => "mst_shouhin_column_name"
));

$proto28["m_sql"] = "sub_cate";
$proto28["m_srcTableName"] = "mst_shouhin_column_name";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "input_type",
	"m_strTable" => "mst_shouhin_column_name",
	"m_srcTableName" => "mst_shouhin_column_name"
));

$proto30["m_sql"] = "input_type";
$proto30["m_srcTableName"] = "mst_shouhin_column_name";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "save_unit",
	"m_strTable" => "mst_shouhin_column_name",
	"m_srcTableName" => "mst_shouhin_column_name"
));

$proto32["m_sql"] = "save_unit";
$proto32["m_srcTableName"] = "mst_shouhin_column_name";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "name_column",
	"m_strTable" => "mst_shouhin_column_name",
	"m_srcTableName" => "mst_shouhin_column_name"
));

$proto34["m_sql"] = "name_column";
$proto34["m_srcTableName"] = "mst_shouhin_column_name";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "no_reflect",
	"m_strTable" => "mst_shouhin_column_name",
	"m_srcTableName" => "mst_shouhin_column_name"
));

$proto36["m_sql"] = "no_reflect";
$proto36["m_srcTableName"] = "mst_shouhin_column_name";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "mst_shouhin_column_name";
$proto39["m_srcTableName"] = "mst_shouhin_column_name";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id";
$proto39["m_columns"][] = "name";
$proto39["m_columns"][] = "waname";
$proto39["m_columns"][] = "sort";
$proto39["m_columns"][] = "update_by";
$proto39["m_columns"][] = "update_at";
$proto39["m_columns"][] = "create_by";
$proto39["m_columns"][] = "create_at";
$proto39["m_columns"][] = "null_check";
$proto39["m_columns"][] = "data_unit";
$proto39["m_columns"][] = "dai_cate";
$proto39["m_columns"][] = "sub_cate";
$proto39["m_columns"][] = "input_type";
$proto39["m_columns"][] = "save_unit";
$proto39["m_columns"][] = "name_column";
$proto39["m_columns"][] = "no_reflect";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "mst_shouhin_column_name";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "mst_shouhin_column_name";
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
	"m_strName" => "sort",
	"m_strTable" => "mst_shouhin_column_name",
	"m_srcTableName" => "mst_shouhin_column_name"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 1;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_shouhin_column_name";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_shouhin_column_name = createSqlQuery_mst_shouhin_column_name();


	
		;

																

$tdatamst_shouhin_column_name[".sqlquery"] = $queryData_mst_shouhin_column_name;

include_once(getabspath("include/mst_shouhin_column_name_events.php"));
$tableEvents["mst_shouhin_column_name"] = new eventclass_mst_shouhin_column_name;
$tdatamst_shouhin_column_name[".hasEvents"] = true;

?>