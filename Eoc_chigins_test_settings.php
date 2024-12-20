<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_chigins_test = array();
	$tdataEoc_chigins_test[".truncateText"] = true;
	$tdataEoc_chigins_test[".NumberOfChars"] = 80;
	$tdataEoc_chigins_test[".ShortName"] = "Eoc_chigins_test";
	$tdataEoc_chigins_test[".OwnerID"] = "";
	$tdataEoc_chigins_test[".OriginalTable"] = "Eoc_chigins_test";

//	field labels
$fieldLabelsEoc_chigins_test = array();
$fieldToolTipsEoc_chigins_test = array();
$pageTitlesEoc_chigins_test = array();
$placeHoldersEoc_chigins_test = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_chigins_test["Japanese"] = array();
	$fieldToolTipsEoc_chigins_test["Japanese"] = array();
	$placeHoldersEoc_chigins_test["Japanese"] = array();
	$pageTitlesEoc_chigins_test["Japanese"] = array();
	$fieldLabelsEoc_chigins_test["Japanese"]["chigin_id"] = "商品買取ID";
	$fieldToolTipsEoc_chigins_test["Japanese"]["chigin_id"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["chigin_id"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["create_by"] = "登録者";
	$fieldToolTipsEoc_chigins_test["Japanese"]["create_by"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["create_by"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsEoc_chigins_test["Japanese"]["create_at"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["create_at"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["chigin_ecc_id"] = "顧客SEQ";
	$fieldToolTipsEoc_chigins_test["Japanese"]["chigin_ecc_id"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["chigin_ecc_id"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["ching_price"] = "値段";
	$fieldToolTipsEoc_chigins_test["Japanese"]["ching_price"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["ching_price"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["ching_created_at"] = "登録日";
	$fieldToolTipsEoc_chigins_test["Japanese"]["ching_created_at"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["ching_created_at"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["remark"] = "備考";
	$fieldToolTipsEoc_chigins_test["Japanese"]["remark"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["remark"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["chigin_type"] = "買取種別";
	$fieldToolTipsEoc_chigins_test["Japanese"]["chigin_type"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["chigin_type"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["seq"] = "Seq";
	$fieldToolTipsEoc_chigins_test["Japanese"]["seq"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["seq"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["haraidasi"] = "払出し";
	$fieldToolTipsEoc_chigins_test["Japanese"]["haraidasi"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["haraidasi"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["excel_output"] = "エクセル出力";
	$fieldToolTipsEoc_chigins_test["Japanese"]["excel_output"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["excel_output"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["ching_price_goal"] = "Ching Price Goal";
	$fieldToolTipsEoc_chigins_test["Japanese"]["ching_price_goal"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["ching_price_goal"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["kaitori_sougak"] = "Kaitori Sougak";
	$fieldToolTipsEoc_chigins_test["Japanese"]["kaitori_sougak"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["kaitori_sougak"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_chigins_test["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsEoc_chigins_test["Japanese"]["updated_by"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["updated_by"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["account_item"] = "勘定科目";
	$fieldToolTipsEoc_chigins_test["Japanese"]["account_item"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["account_item"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipsEoc_chigins_test["Japanese"]["satei_by"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["satei_by"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["category"] = "カテゴリー";
	$fieldToolTipsEoc_chigins_test["Japanese"]["category"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["category"] = "";
	$fieldLabelsEoc_chigins_test["Japanese"]["Eoc_unfinished_id"] = "見込み顧客ID";
	$fieldToolTipsEoc_chigins_test["Japanese"]["Eoc_unfinished_id"] = "";
	$placeHoldersEoc_chigins_test["Japanese"]["Eoc_unfinished_id"] = "";
	if (count($fieldToolTipsEoc_chigins_test["Japanese"]))
		$tdataEoc_chigins_test[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_chigins_test[""] = array();
	$fieldToolTipsEoc_chigins_test[""] = array();
	$placeHoldersEoc_chigins_test[""] = array();
	$pageTitlesEoc_chigins_test[""] = array();
	$fieldLabelsEoc_chigins_test[""]["chigin_id"] = "Chigin Id";
	$fieldToolTipsEoc_chigins_test[""]["chigin_id"] = "";
	$placeHoldersEoc_chigins_test[""]["chigin_id"] = "";
	$fieldLabelsEoc_chigins_test[""]["create_by"] = "Create By";
	$fieldToolTipsEoc_chigins_test[""]["create_by"] = "";
	$placeHoldersEoc_chigins_test[""]["create_by"] = "";
	$fieldLabelsEoc_chigins_test[""]["create_at"] = "Create At";
	$fieldToolTipsEoc_chigins_test[""]["create_at"] = "";
	$placeHoldersEoc_chigins_test[""]["create_at"] = "";
	$fieldLabelsEoc_chigins_test[""]["chigin_ecc_id"] = "Chigin Ecc Id";
	$fieldToolTipsEoc_chigins_test[""]["chigin_ecc_id"] = "";
	$placeHoldersEoc_chigins_test[""]["chigin_ecc_id"] = "";
	$fieldLabelsEoc_chigins_test[""]["ching_price"] = "Ching Price";
	$fieldToolTipsEoc_chigins_test[""]["ching_price"] = "";
	$placeHoldersEoc_chigins_test[""]["ching_price"] = "";
	$fieldLabelsEoc_chigins_test[""]["ching_created_at"] = "Ching Created At";
	$fieldToolTipsEoc_chigins_test[""]["ching_created_at"] = "";
	$placeHoldersEoc_chigins_test[""]["ching_created_at"] = "";
	$fieldLabelsEoc_chigins_test[""]["remark"] = "Remark";
	$fieldToolTipsEoc_chigins_test[""]["remark"] = "";
	$placeHoldersEoc_chigins_test[""]["remark"] = "";
	$fieldLabelsEoc_chigins_test[""]["chigin_type"] = "Chigin Type";
	$fieldToolTipsEoc_chigins_test[""]["chigin_type"] = "";
	$placeHoldersEoc_chigins_test[""]["chigin_type"] = "";
	$fieldLabelsEoc_chigins_test[""]["seq"] = "Seq";
	$fieldToolTipsEoc_chigins_test[""]["seq"] = "";
	$placeHoldersEoc_chigins_test[""]["seq"] = "";
	$fieldLabelsEoc_chigins_test[""]["haraidasi"] = "Haraidasi";
	$fieldToolTipsEoc_chigins_test[""]["haraidasi"] = "";
	$placeHoldersEoc_chigins_test[""]["haraidasi"] = "";
	$fieldLabelsEoc_chigins_test[""]["excel_output"] = "Excel Output";
	$fieldToolTipsEoc_chigins_test[""]["excel_output"] = "";
	$placeHoldersEoc_chigins_test[""]["excel_output"] = "";
	$fieldLabelsEoc_chigins_test[""]["ching_price_goal"] = "Ching Price Goal";
	$fieldToolTipsEoc_chigins_test[""]["ching_price_goal"] = "";
	$placeHoldersEoc_chigins_test[""]["ching_price_goal"] = "";
	$fieldLabelsEoc_chigins_test[""]["kaitori_sougak"] = "Kaitori Sougak";
	$fieldToolTipsEoc_chigins_test[""]["kaitori_sougak"] = "";
	$placeHoldersEoc_chigins_test[""]["kaitori_sougak"] = "";
	$fieldLabelsEoc_chigins_test[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_chigins_test[""]["updated_at"] = "";
	$placeHoldersEoc_chigins_test[""]["updated_at"] = "";
	$fieldLabelsEoc_chigins_test[""]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_chigins_test[""]["updated_by"] = "";
	$placeHoldersEoc_chigins_test[""]["updated_by"] = "";
	$fieldLabelsEoc_chigins_test[""]["account_item"] = "Account Item";
	$fieldToolTipsEoc_chigins_test[""]["account_item"] = "";
	$placeHoldersEoc_chigins_test[""]["account_item"] = "";
	$fieldLabelsEoc_chigins_test[""]["satei_by"] = "Satei By";
	$fieldToolTipsEoc_chigins_test[""]["satei_by"] = "";
	$placeHoldersEoc_chigins_test[""]["satei_by"] = "";
	$fieldLabelsEoc_chigins_test[""]["category"] = "Category";
	$fieldToolTipsEoc_chigins_test[""]["category"] = "";
	$placeHoldersEoc_chigins_test[""]["category"] = "";
	$fieldLabelsEoc_chigins_test[""]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipsEoc_chigins_test[""]["Eoc_unfinished_id"] = "";
	$placeHoldersEoc_chigins_test[""]["Eoc_unfinished_id"] = "";
	if (count($fieldToolTipsEoc_chigins_test[""]))
		$tdataEoc_chigins_test[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_chigins_test["English"] = array();
	$fieldToolTipsEoc_chigins_test["English"] = array();
	$placeHoldersEoc_chigins_test["English"] = array();
	$pageTitlesEoc_chigins_test["English"] = array();
	$fieldLabelsEoc_chigins_test["English"]["chigin_id"] = "Chigin Id";
	$fieldToolTipsEoc_chigins_test["English"]["chigin_id"] = "";
	$placeHoldersEoc_chigins_test["English"]["chigin_id"] = "";
	$fieldLabelsEoc_chigins_test["English"]["create_by"] = "Create By";
	$fieldToolTipsEoc_chigins_test["English"]["create_by"] = "";
	$placeHoldersEoc_chigins_test["English"]["create_by"] = "";
	$fieldLabelsEoc_chigins_test["English"]["create_at"] = "Create At";
	$fieldToolTipsEoc_chigins_test["English"]["create_at"] = "";
	$placeHoldersEoc_chigins_test["English"]["create_at"] = "";
	$fieldLabelsEoc_chigins_test["English"]["chigin_ecc_id"] = "Chigin Ecc Id";
	$fieldToolTipsEoc_chigins_test["English"]["chigin_ecc_id"] = "";
	$placeHoldersEoc_chigins_test["English"]["chigin_ecc_id"] = "";
	$fieldLabelsEoc_chigins_test["English"]["ching_price"] = "Ching Price";
	$fieldToolTipsEoc_chigins_test["English"]["ching_price"] = "";
	$placeHoldersEoc_chigins_test["English"]["ching_price"] = "";
	$fieldLabelsEoc_chigins_test["English"]["ching_created_at"] = "Ching Created At";
	$fieldToolTipsEoc_chigins_test["English"]["ching_created_at"] = "";
	$placeHoldersEoc_chigins_test["English"]["ching_created_at"] = "";
	$fieldLabelsEoc_chigins_test["English"]["remark"] = "Remark";
	$fieldToolTipsEoc_chigins_test["English"]["remark"] = "";
	$placeHoldersEoc_chigins_test["English"]["remark"] = "";
	$fieldLabelsEoc_chigins_test["English"]["chigin_type"] = "Chigin Type";
	$fieldToolTipsEoc_chigins_test["English"]["chigin_type"] = "";
	$placeHoldersEoc_chigins_test["English"]["chigin_type"] = "";
	$fieldLabelsEoc_chigins_test["English"]["seq"] = "Seq";
	$fieldToolTipsEoc_chigins_test["English"]["seq"] = "";
	$placeHoldersEoc_chigins_test["English"]["seq"] = "";
	$fieldLabelsEoc_chigins_test["English"]["haraidasi"] = "Haraidasi";
	$fieldToolTipsEoc_chigins_test["English"]["haraidasi"] = "";
	$placeHoldersEoc_chigins_test["English"]["haraidasi"] = "";
	$fieldLabelsEoc_chigins_test["English"]["excel_output"] = "Excel Output";
	$fieldToolTipsEoc_chigins_test["English"]["excel_output"] = "";
	$placeHoldersEoc_chigins_test["English"]["excel_output"] = "";
	$fieldLabelsEoc_chigins_test["English"]["ching_price_goal"] = "Ching Price Goal";
	$fieldToolTipsEoc_chigins_test["English"]["ching_price_goal"] = "";
	$placeHoldersEoc_chigins_test["English"]["ching_price_goal"] = "";
	$fieldLabelsEoc_chigins_test["English"]["kaitori_sougak"] = "Kaitori Sougak";
	$fieldToolTipsEoc_chigins_test["English"]["kaitori_sougak"] = "";
	$placeHoldersEoc_chigins_test["English"]["kaitori_sougak"] = "";
	$fieldLabelsEoc_chigins_test["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_chigins_test["English"]["updated_at"] = "";
	$placeHoldersEoc_chigins_test["English"]["updated_at"] = "";
	$fieldLabelsEoc_chigins_test["English"]["updated_by"] = "Updated By";
	$fieldToolTipsEoc_chigins_test["English"]["updated_by"] = "";
	$placeHoldersEoc_chigins_test["English"]["updated_by"] = "";
	$fieldLabelsEoc_chigins_test["English"]["account_item"] = "Account Item";
	$fieldToolTipsEoc_chigins_test["English"]["account_item"] = "";
	$placeHoldersEoc_chigins_test["English"]["account_item"] = "";
	$fieldLabelsEoc_chigins_test["English"]["satei_by"] = "Satei By";
	$fieldToolTipsEoc_chigins_test["English"]["satei_by"] = "";
	$placeHoldersEoc_chigins_test["English"]["satei_by"] = "";
	$fieldLabelsEoc_chigins_test["English"]["category"] = "Category";
	$fieldToolTipsEoc_chigins_test["English"]["category"] = "";
	$placeHoldersEoc_chigins_test["English"]["category"] = "";
	$fieldLabelsEoc_chigins_test["English"]["Eoc_unfinished_id"] = "Eoc Unfinished Id";
	$fieldToolTipsEoc_chigins_test["English"]["Eoc_unfinished_id"] = "";
	$placeHoldersEoc_chigins_test["English"]["Eoc_unfinished_id"] = "";
	if (count($fieldToolTipsEoc_chigins_test["English"]))
		$tdataEoc_chigins_test[".isUseToolTips"] = true;
}


	$tdataEoc_chigins_test[".NCSearch"] = true;



$tdataEoc_chigins_test[".shortTableName"] = "Eoc_chigins_test";
$tdataEoc_chigins_test[".nSecOptions"] = 0;
$tdataEoc_chigins_test[".recsPerRowPrint"] = 1;
$tdataEoc_chigins_test[".mainTableOwnerID"] = "";
$tdataEoc_chigins_test[".moveNext"] = 1;
$tdataEoc_chigins_test[".entityType"] = 0;

$tdataEoc_chigins_test[".strOriginalTableName"] = "Eoc_chigins_test";

	



$tdataEoc_chigins_test[".showAddInPopup"] = false;

$tdataEoc_chigins_test[".showEditInPopup"] = false;

$tdataEoc_chigins_test[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_chigins_test[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_chigins_test[".fieldsForRegister"] = array();

$tdataEoc_chigins_test[".listAjax"] = false;

	$tdataEoc_chigins_test[".audit"] = false;

	$tdataEoc_chigins_test[".locking"] = false;



$tdataEoc_chigins_test[".list"] = true;



$tdataEoc_chigins_test[".reorderRecordsByHeader"] = true;








$tdataEoc_chigins_test[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_chigins_test[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_chigins_test[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_chigins_test[".searchSaving"] = false;
//

$tdataEoc_chigins_test[".showSearchPanel"] = true;
		$tdataEoc_chigins_test[".flexibleSearch"] = true;

$tdataEoc_chigins_test[".isUseAjaxSuggest"] = true;

$tdataEoc_chigins_test[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																				

$tdataEoc_chigins_test[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_chigins_test[".buttonsAdded"] = false;

$tdataEoc_chigins_test[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_chigins_test[".isUseTimeForSearch"] = false;



$tdataEoc_chigins_test[".badgeColor"] = "4682b4";


$tdataEoc_chigins_test[".allSearchFields"] = array();
$tdataEoc_chigins_test[".filterFields"] = array();
$tdataEoc_chigins_test[".requiredSearchFields"] = array();

$tdataEoc_chigins_test[".allSearchFields"][] = "chigin_id";
	$tdataEoc_chigins_test[".allSearchFields"][] = "create_by";
	$tdataEoc_chigins_test[".allSearchFields"][] = "chigin_ecc_id";
	$tdataEoc_chigins_test[".allSearchFields"][] = "ching_price";
	$tdataEoc_chigins_test[".allSearchFields"][] = "ching_created_at";
	$tdataEoc_chigins_test[".allSearchFields"][] = "remark";
	$tdataEoc_chigins_test[".allSearchFields"][] = "chigin_type";
	$tdataEoc_chigins_test[".allSearchFields"][] = "haraidasi";
	$tdataEoc_chigins_test[".allSearchFields"][] = "updated_at";
	$tdataEoc_chigins_test[".allSearchFields"][] = "updated_by";
	$tdataEoc_chigins_test[".allSearchFields"][] = "satei_by";
	$tdataEoc_chigins_test[".allSearchFields"][] = "Eoc_unfinished_id";
	$tdataEoc_chigins_test[".allSearchFields"][] = "category";
	

$tdataEoc_chigins_test[".googleLikeFields"] = array();
$tdataEoc_chigins_test[".googleLikeFields"][] = "chigin_id";
$tdataEoc_chigins_test[".googleLikeFields"][] = "create_by";
$tdataEoc_chigins_test[".googleLikeFields"][] = "create_at";
$tdataEoc_chigins_test[".googleLikeFields"][] = "chigin_ecc_id";
$tdataEoc_chigins_test[".googleLikeFields"][] = "ching_price";
$tdataEoc_chigins_test[".googleLikeFields"][] = "ching_created_at";
$tdataEoc_chigins_test[".googleLikeFields"][] = "remark";
$tdataEoc_chigins_test[".googleLikeFields"][] = "chigin_type";
$tdataEoc_chigins_test[".googleLikeFields"][] = "seq";
$tdataEoc_chigins_test[".googleLikeFields"][] = "haraidasi";
$tdataEoc_chigins_test[".googleLikeFields"][] = "excel_output";
$tdataEoc_chigins_test[".googleLikeFields"][] = "ching_price_goal";
$tdataEoc_chigins_test[".googleLikeFields"][] = "kaitori_sougak";
$tdataEoc_chigins_test[".googleLikeFields"][] = "updated_at";
$tdataEoc_chigins_test[".googleLikeFields"][] = "updated_by";
$tdataEoc_chigins_test[".googleLikeFields"][] = "account_item";
$tdataEoc_chigins_test[".googleLikeFields"][] = "satei_by";
$tdataEoc_chigins_test[".googleLikeFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins_test[".googleLikeFields"][] = "category";


$tdataEoc_chigins_test[".advSearchFields"] = array();
$tdataEoc_chigins_test[".advSearchFields"][] = "chigin_id";
$tdataEoc_chigins_test[".advSearchFields"][] = "create_by";
$tdataEoc_chigins_test[".advSearchFields"][] = "chigin_ecc_id";
$tdataEoc_chigins_test[".advSearchFields"][] = "ching_price";
$tdataEoc_chigins_test[".advSearchFields"][] = "ching_created_at";
$tdataEoc_chigins_test[".advSearchFields"][] = "remark";
$tdataEoc_chigins_test[".advSearchFields"][] = "chigin_type";
$tdataEoc_chigins_test[".advSearchFields"][] = "haraidasi";
$tdataEoc_chigins_test[".advSearchFields"][] = "updated_at";
$tdataEoc_chigins_test[".advSearchFields"][] = "updated_by";
$tdataEoc_chigins_test[".advSearchFields"][] = "satei_by";
$tdataEoc_chigins_test[".advSearchFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins_test[".advSearchFields"][] = "category";

$tdataEoc_chigins_test[".tableType"] = "list";

$tdataEoc_chigins_test[".printerPageOrientation"] = 0;
$tdataEoc_chigins_test[".nPrinterPageScale"] = 100;

$tdataEoc_chigins_test[".nPrinterSplitRecords"] = 40;

$tdataEoc_chigins_test[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_chigins_test[".geocodingEnabled"] = false;





$tdataEoc_chigins_test[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_chigins_test[".pageSize"] = 20;

$tdataEoc_chigins_test[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_chigins_test[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_chigins_test[".orderindexes"] = array();

$tdataEoc_chigins_test[".sqlHead"] = "SELECT chigin_id,  	create_by,  	create_at,  	chigin_ecc_id,  	ching_price,  	ching_created_at,  	remark,  	chigin_type,  	seq,  	haraidasi,  	excel_output,  	ching_price_goal,  	kaitori_sougak,  	updated_at,  	updated_by,  	account_item,  	satei_by,  	Eoc_unfinished_id,  	category";
$tdataEoc_chigins_test[".sqlFrom"] = "FROM Eoc_chigins_test";
$tdataEoc_chigins_test[".sqlWhereExpr"] = "";
$tdataEoc_chigins_test[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_chigins_test[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_chigins_test[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_chigins_test[".highlightSearchResults"] = true;

$tableKeysEoc_chigins_test = array();
$tableKeysEoc_chigins_test[] = "chigin_id";
$tdataEoc_chigins_test[".Keys"] = $tableKeysEoc_chigins_test;

$tdataEoc_chigins_test[".listFields"] = array();
$tdataEoc_chigins_test[".listFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins_test[".listFields"][] = "category";
$tdataEoc_chigins_test[".listFields"][] = "chigin_id";
$tdataEoc_chigins_test[".listFields"][] = "create_by";
$tdataEoc_chigins_test[".listFields"][] = "chigin_ecc_id";
$tdataEoc_chigins_test[".listFields"][] = "ching_price";
$tdataEoc_chigins_test[".listFields"][] = "ching_created_at";
$tdataEoc_chigins_test[".listFields"][] = "remark";
$tdataEoc_chigins_test[".listFields"][] = "chigin_type";
$tdataEoc_chigins_test[".listFields"][] = "haraidasi";
$tdataEoc_chigins_test[".listFields"][] = "updated_at";
$tdataEoc_chigins_test[".listFields"][] = "updated_by";
$tdataEoc_chigins_test[".listFields"][] = "satei_by";

$tdataEoc_chigins_test[".hideMobileList"] = array();


$tdataEoc_chigins_test[".viewFields"] = array();

$tdataEoc_chigins_test[".addFields"] = array();

$tdataEoc_chigins_test[".masterListFields"] = array();
$tdataEoc_chigins_test[".masterListFields"][] = "chigin_id";
$tdataEoc_chigins_test[".masterListFields"][] = "create_by";
$tdataEoc_chigins_test[".masterListFields"][] = "create_at";
$tdataEoc_chigins_test[".masterListFields"][] = "chigin_ecc_id";
$tdataEoc_chigins_test[".masterListFields"][] = "ching_price";
$tdataEoc_chigins_test[".masterListFields"][] = "ching_created_at";
$tdataEoc_chigins_test[".masterListFields"][] = "remark";
$tdataEoc_chigins_test[".masterListFields"][] = "chigin_type";
$tdataEoc_chigins_test[".masterListFields"][] = "seq";
$tdataEoc_chigins_test[".masterListFields"][] = "haraidasi";
$tdataEoc_chigins_test[".masterListFields"][] = "excel_output";
$tdataEoc_chigins_test[".masterListFields"][] = "ching_price_goal";
$tdataEoc_chigins_test[".masterListFields"][] = "kaitori_sougak";
$tdataEoc_chigins_test[".masterListFields"][] = "updated_at";
$tdataEoc_chigins_test[".masterListFields"][] = "updated_by";
$tdataEoc_chigins_test[".masterListFields"][] = "account_item";
$tdataEoc_chigins_test[".masterListFields"][] = "satei_by";
$tdataEoc_chigins_test[".masterListFields"][] = "Eoc_unfinished_id";
$tdataEoc_chigins_test[".masterListFields"][] = "category";

$tdataEoc_chigins_test[".inlineAddFields"] = array();

$tdataEoc_chigins_test[".editFields"] = array();

$tdataEoc_chigins_test[".inlineEditFields"] = array();

$tdataEoc_chigins_test[".updateSelectedFields"] = array();


$tdataEoc_chigins_test[".exportFields"] = array();

$tdataEoc_chigins_test[".importFields"] = array();

$tdataEoc_chigins_test[".printFields"] = array();

//	chigin_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "chigin_id";
	$fdata["GoodName"] = "chigin_id";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","chigin_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "chigin_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "chigin_id";

	
	
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




	$tdataEoc_chigins_test["chigin_id"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdataEoc_chigins_test["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_at";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
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








	$tdataEoc_chigins_test["create_at"] = $fdata;
//	chigin_ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "chigin_ecc_id";
	$fdata["GoodName"] = "chigin_ecc_id";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","chigin_ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "chigin_ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "chigin_ecc_id";

	
	
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




	$tdataEoc_chigins_test["chigin_ecc_id"] = $fdata;
//	ching_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "ching_price";
	$fdata["GoodName"] = "ching_price";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","ching_price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ching_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ching_price";

	
	
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




	$tdataEoc_chigins_test["ching_price"] = $fdata;
//	ching_created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ching_created_at";
	$fdata["GoodName"] = "ching_created_at";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","ching_created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "ching_created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ching_created_at";

	
	
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




	$tdataEoc_chigins_test["ching_created_at"] = $fdata;
//	remark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "remark";
	$fdata["GoodName"] = "remark";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","remark");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "remark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remark";

	
	
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




	$tdataEoc_chigins_test["remark"] = $fdata;
//	chigin_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "chigin_type";
	$fdata["GoodName"] = "chigin_type";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","chigin_type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "chigin_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "chigin_type";

	
	
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
	$edata["LookupTable"] = "_chigin_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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




	$tdataEoc_chigins_test["chigin_type"] = $fdata;
//	seq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "seq";
	$fdata["GoodName"] = "seq";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","seq");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "seq";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "seq";

	
	
			
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








	$tdataEoc_chigins_test["seq"] = $fdata;
//	haraidasi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "haraidasi";
	$fdata["GoodName"] = "haraidasi";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","haraidasi");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "haraidasi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "haraidasi";

	
	
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
	$edata["LookupTable"] = "haraidasi";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "haraidasi_name";

	
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




	$tdataEoc_chigins_test["haraidasi"] = $fdata;
//	excel_output
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "excel_output";
	$fdata["GoodName"] = "excel_output";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","excel_output");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "excel_output";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "excel_output";

	
	
			
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








	$tdataEoc_chigins_test["excel_output"] = $fdata;
//	ching_price_goal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "ching_price_goal";
	$fdata["GoodName"] = "ching_price_goal";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","ching_price_goal");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "ching_price_goal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ching_price_goal";

	
	
			
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








	$tdataEoc_chigins_test["ching_price_goal"] = $fdata;
//	kaitori_sougak
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "kaitori_sougak";
	$fdata["GoodName"] = "kaitori_sougak";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","kaitori_sougak");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "kaitori_sougak";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "kaitori_sougak";

	
	
			
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








	$tdataEoc_chigins_test["kaitori_sougak"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "updated_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_at";

	
	
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




	$tdataEoc_chigins_test["updated_at"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","updated_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "updated_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_by";

	
	
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




	$tdataEoc_chigins_test["updated_by"] = $fdata;
//	account_item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "account_item";
	$fdata["GoodName"] = "account_item";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","account_item");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "account_item";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "account_item";

	
	
			
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








	$tdataEoc_chigins_test["account_item"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","satei_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "satei_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "satei_by";

	
	
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




	$tdataEoc_chigins_test["satei_by"] = $fdata;
//	Eoc_unfinished_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "Eoc_unfinished_id";
	$fdata["GoodName"] = "Eoc_unfinished_id";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","Eoc_unfinished_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Eoc_unfinished_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Eoc_unfinished_id";

	
	
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




	$tdataEoc_chigins_test["Eoc_unfinished_id"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "Eoc_chigins_test";
	$fdata["Label"] = GetFieldLabel("Eoc_chigins_test","category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category";

	
	
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
	$edata["LookupValues"][] = "K";
	$edata["LookupValues"][] = "D";
	$edata["LookupValues"][] = "J";
	$edata["LookupValues"][] = "W";
	$edata["LookupValues"][] = "B";
	$edata["LookupValues"][] = "H";
	$edata["LookupValues"][] = "A";

	
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




	$tdataEoc_chigins_test["category"] = $fdata;


$tables_data["Eoc_chigins_test"]=&$tdataEoc_chigins_test;
$field_labels["Eoc_chigins_test"] = &$fieldLabelsEoc_chigins_test;
$fieldToolTips["Eoc_chigins_test"] = &$fieldToolTipsEoc_chigins_test;
$placeHolders["Eoc_chigins_test"] = &$placeHoldersEoc_chigins_test;
$page_titles["Eoc_chigins_test"] = &$pageTitlesEoc_chigins_test;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_chigins_test"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_chigins_test"] = array();


	
				$strOriginalDetailsTable="Eoctest";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoctest";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoctest";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 1;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Eoc_chigins_test"][0] = $masterParams;
				$masterTablesData["Eoc_chigins_test"][0]["masterKeys"] = array();
	$masterTablesData["Eoc_chigins_test"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["Eoc_chigins_test"][0]["detailKeys"] = array();
	$masterTablesData["Eoc_chigins_test"][0]["detailKeys"][]="chigin_ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_chigins_test()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "chigin_id,  	create_by,  	create_at,  	chigin_ecc_id,  	ching_price,  	ching_created_at,  	remark,  	chigin_type,  	seq,  	haraidasi,  	excel_output,  	ching_price_goal,  	kaitori_sougak,  	updated_at,  	updated_by,  	account_item,  	satei_by,  	Eoc_unfinished_id,  	category";
$proto0["m_strFrom"] = "FROM Eoc_chigins_test";
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
	"m_strName" => "chigin_id",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto6["m_sql"] = "chigin_id";
$proto6["m_srcTableName"] = "Eoc_chigins_test";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto8["m_sql"] = "create_by";
$proto8["m_srcTableName"] = "Eoc_chigins_test";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto10["m_sql"] = "create_at";
$proto10["m_srcTableName"] = "Eoc_chigins_test";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "chigin_ecc_id",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto12["m_sql"] = "chigin_ecc_id";
$proto12["m_srcTableName"] = "Eoc_chigins_test";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "ching_price",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto14["m_sql"] = "ching_price";
$proto14["m_srcTableName"] = "Eoc_chigins_test";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ching_created_at",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto16["m_sql"] = "ching_created_at";
$proto16["m_srcTableName"] = "Eoc_chigins_test";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "remark",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto18["m_sql"] = "remark";
$proto18["m_srcTableName"] = "Eoc_chigins_test";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "chigin_type",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto20["m_sql"] = "chigin_type";
$proto20["m_srcTableName"] = "Eoc_chigins_test";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "seq",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto22["m_sql"] = "seq";
$proto22["m_srcTableName"] = "Eoc_chigins_test";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "haraidasi",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto24["m_sql"] = "haraidasi";
$proto24["m_srcTableName"] = "Eoc_chigins_test";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "excel_output",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto26["m_sql"] = "excel_output";
$proto26["m_srcTableName"] = "Eoc_chigins_test";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ching_price_goal",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto28["m_sql"] = "ching_price_goal";
$proto28["m_srcTableName"] = "Eoc_chigins_test";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "kaitori_sougak",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto30["m_sql"] = "kaitori_sougak";
$proto30["m_srcTableName"] = "Eoc_chigins_test";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto32["m_sql"] = "updated_at";
$proto32["m_srcTableName"] = "Eoc_chigins_test";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto34["m_sql"] = "updated_by";
$proto34["m_srcTableName"] = "Eoc_chigins_test";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "account_item",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto36["m_sql"] = "account_item";
$proto36["m_srcTableName"] = "Eoc_chigins_test";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto38["m_sql"] = "satei_by";
$proto38["m_srcTableName"] = "Eoc_chigins_test";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "Eoc_unfinished_id",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto40["m_sql"] = "Eoc_unfinished_id";
$proto40["m_srcTableName"] = "Eoc_chigins_test";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "Eoc_chigins_test",
	"m_srcTableName" => "Eoc_chigins_test"
));

$proto42["m_sql"] = "category";
$proto42["m_srcTableName"] = "Eoc_chigins_test";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "Eoc_chigins_test";
$proto45["m_srcTableName"] = "Eoc_chigins_test";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "chigin_id";
$proto45["m_columns"][] = "create_by";
$proto45["m_columns"][] = "create_at";
$proto45["m_columns"][] = "chigin_ecc_id";
$proto45["m_columns"][] = "ching_price";
$proto45["m_columns"][] = "ching_created_at";
$proto45["m_columns"][] = "remark";
$proto45["m_columns"][] = "chigin_type";
$proto45["m_columns"][] = "seq";
$proto45["m_columns"][] = "haraidasi";
$proto45["m_columns"][] = "excel_output";
$proto45["m_columns"][] = "ching_price_goal";
$proto45["m_columns"][] = "kaitori_sougak";
$proto45["m_columns"][] = "updated_at";
$proto45["m_columns"][] = "updated_by";
$proto45["m_columns"][] = "account_item";
$proto45["m_columns"][] = "satei_by";
$proto45["m_columns"][] = "Eoc_unfinished_id";
$proto45["m_columns"][] = "category";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "Eoc_chigins_test";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "Eoc_chigins_test";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Eoc_chigins_test";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_chigins_test = createSqlQuery_Eoc_chigins_test();


	
		;

																			

$tdataEoc_chigins_test[".sqlquery"] = $queryData_Eoc_chigins_test;

$tableEvents["Eoc_chigins_test"] = new eventsBase;
$tdataEoc_chigins_test[".hasEvents"] = false;

?>