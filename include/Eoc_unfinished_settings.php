<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_unfinished = array();
	$tdataEoc_unfinished[".ShortName"] = "Eoc_unfinished";
	$tdataEoc_unfinished[".OwnerID"] = "";
	$tdataEoc_unfinished[".OriginalTable"] = "Eoc_unfinished";

//	field labels
$fieldLabelsEoc_unfinished = array();
$fieldToolTipsEoc_unfinished = array();
$pageTitlesEoc_unfinished = array();
$placeHoldersEoc_unfinished = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_unfinished["Japanese"] = array();
	$fieldToolTipsEoc_unfinished["Japanese"] = array();
	$placeHoldersEoc_unfinished["Japanese"] = array();
	$pageTitlesEoc_unfinished["Japanese"] = array();
	$fieldLabelsEoc_unfinished["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_unfinished["Japanese"]["id"] = "";
	$placeHoldersEoc_unfinished["Japanese"]["id"] = "";
	$fieldLabelsEoc_unfinished["Japanese"]["url_id"] = "URL Id";
	$fieldToolTipsEoc_unfinished["Japanese"]["url_id"] = "";
	$placeHoldersEoc_unfinished["Japanese"]["url_id"] = "";
	$fieldLabelsEoc_unfinished["Japanese"]["sheet_id"] = "シート Id";
	$fieldToolTipsEoc_unfinished["Japanese"]["sheet_id"] = "";
	$placeHoldersEoc_unfinished["Japanese"]["sheet_id"] = "";
	$fieldLabelsEoc_unfinished["Japanese"]["sheet_name"] = "シート名";
	$fieldToolTipsEoc_unfinished["Japanese"]["sheet_name"] = "";
	$placeHoldersEoc_unfinished["Japanese"]["sheet_name"] = "";
	$fieldLabelsEoc_unfinished["Japanese"]["created_at"] = "登録日";
	$fieldToolTipsEoc_unfinished["Japanese"]["created_at"] = "";
	$placeHoldersEoc_unfinished["Japanese"]["created_at"] = "";
	$fieldLabelsEoc_unfinished["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_unfinished["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_unfinished["Japanese"]["updated_at"] = "";
	$fieldLabelsEoc_unfinished["Japanese"]["sheet_title"] = "タイトル";
	$fieldToolTipsEoc_unfinished["Japanese"]["sheet_title"] = "";
	$placeHoldersEoc_unfinished["Japanese"]["sheet_title"] = "";
	$fieldLabelsEoc_unfinished["Japanese"]["sheet_url"] = "URL";
	$fieldToolTipsEoc_unfinished["Japanese"]["sheet_url"] = "";
	$placeHoldersEoc_unfinished["Japanese"]["sheet_url"] = "";
	$fieldLabelsEoc_unfinished["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsEoc_unfinished["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc_unfinished["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc_unfinished["Japanese"]["satei_by"] = "査定人";
	$fieldToolTipsEoc_unfinished["Japanese"]["satei_by"] = "";
	$placeHoldersEoc_unfinished["Japanese"]["satei_by"] = "";
	$fieldLabelsEoc_unfinished["Japanese"]["max_category"] = "最大カテゴリー";
	$fieldToolTipsEoc_unfinished["Japanese"]["max_category"] = "";
	$placeHoldersEoc_unfinished["Japanese"]["max_category"] = "";
	$fieldLabelsEoc_unfinished["Japanese"]["zenawazu"] = "全合わずフラグ";
	$fieldToolTipsEoc_unfinished["Japanese"]["zenawazu"] = "";
	$placeHoldersEoc_unfinished["Japanese"]["zenawazu"] = "";
	$fieldLabelsEoc_unfinished["Japanese"]["many_satei_btn"] = "大量査定ボタン";
	$fieldToolTipsEoc_unfinished["Japanese"]["many_satei_btn"] = "";
	$placeHoldersEoc_unfinished["Japanese"]["many_satei_btn"] = "";
	if (count($fieldToolTipsEoc_unfinished["Japanese"]))
		$tdataEoc_unfinished[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_unfinished[""] = array();
	$fieldToolTipsEoc_unfinished[""] = array();
	$placeHoldersEoc_unfinished[""] = array();
	$pageTitlesEoc_unfinished[""] = array();
	$fieldLabelsEoc_unfinished[""]["id"] = "Id";
	$fieldToolTipsEoc_unfinished[""]["id"] = "";
	$placeHoldersEoc_unfinished[""]["id"] = "";
	$fieldLabelsEoc_unfinished[""]["url_id"] = "Url Id";
	$fieldToolTipsEoc_unfinished[""]["url_id"] = "";
	$placeHoldersEoc_unfinished[""]["url_id"] = "";
	$fieldLabelsEoc_unfinished[""]["sheet_id"] = "Sheet Id";
	$fieldToolTipsEoc_unfinished[""]["sheet_id"] = "";
	$placeHoldersEoc_unfinished[""]["sheet_id"] = "";
	$fieldLabelsEoc_unfinished[""]["sheet_name"] = "Sheet Name";
	$fieldToolTipsEoc_unfinished[""]["sheet_name"] = "";
	$placeHoldersEoc_unfinished[""]["sheet_name"] = "";
	$fieldLabelsEoc_unfinished[""]["created_at"] = "Created At";
	$fieldToolTipsEoc_unfinished[""]["created_at"] = "";
	$placeHoldersEoc_unfinished[""]["created_at"] = "";
	$fieldLabelsEoc_unfinished[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_unfinished[""]["updated_at"] = "";
	$placeHoldersEoc_unfinished[""]["updated_at"] = "";
	$fieldLabelsEoc_unfinished[""]["sheet_title"] = "Sheet Title";
	$fieldToolTipsEoc_unfinished[""]["sheet_title"] = "";
	$placeHoldersEoc_unfinished[""]["sheet_title"] = "";
	$fieldLabelsEoc_unfinished[""]["sheet_url"] = "Sheet Url";
	$fieldToolTipsEoc_unfinished[""]["sheet_url"] = "";
	$placeHoldersEoc_unfinished[""]["sheet_url"] = "";
	$fieldLabelsEoc_unfinished[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_unfinished[""]["ecc_id"] = "";
	$placeHoldersEoc_unfinished[""]["ecc_id"] = "";
	$fieldLabelsEoc_unfinished[""]["satei_by"] = "Satei By";
	$fieldToolTipsEoc_unfinished[""]["satei_by"] = "";
	$placeHoldersEoc_unfinished[""]["satei_by"] = "";
	$fieldLabelsEoc_unfinished[""]["max_category"] = "Max Category";
	$fieldToolTipsEoc_unfinished[""]["max_category"] = "";
	$placeHoldersEoc_unfinished[""]["max_category"] = "";
	$fieldLabelsEoc_unfinished[""]["zenawazu"] = "Zenawazu";
	$fieldToolTipsEoc_unfinished[""]["zenawazu"] = "";
	$placeHoldersEoc_unfinished[""]["zenawazu"] = "";
	$fieldLabelsEoc_unfinished[""]["many_satei_btn"] = "Many Satei Btn";
	$fieldToolTipsEoc_unfinished[""]["many_satei_btn"] = "";
	$placeHoldersEoc_unfinished[""]["many_satei_btn"] = "";
	if (count($fieldToolTipsEoc_unfinished[""]))
		$tdataEoc_unfinished[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_unfinished["English"] = array();
	$fieldToolTipsEoc_unfinished["English"] = array();
	$placeHoldersEoc_unfinished["English"] = array();
	$pageTitlesEoc_unfinished["English"] = array();
	$fieldLabelsEoc_unfinished["English"]["id"] = "Id";
	$fieldToolTipsEoc_unfinished["English"]["id"] = "";
	$placeHoldersEoc_unfinished["English"]["id"] = "";
	$fieldLabelsEoc_unfinished["English"]["url_id"] = "Url Id";
	$fieldToolTipsEoc_unfinished["English"]["url_id"] = "";
	$placeHoldersEoc_unfinished["English"]["url_id"] = "";
	$fieldLabelsEoc_unfinished["English"]["sheet_id"] = "Sheet Id";
	$fieldToolTipsEoc_unfinished["English"]["sheet_id"] = "";
	$placeHoldersEoc_unfinished["English"]["sheet_id"] = "";
	$fieldLabelsEoc_unfinished["English"]["sheet_name"] = "Sheet Name";
	$fieldToolTipsEoc_unfinished["English"]["sheet_name"] = "";
	$placeHoldersEoc_unfinished["English"]["sheet_name"] = "";
	$fieldLabelsEoc_unfinished["English"]["created_at"] = "Created At";
	$fieldToolTipsEoc_unfinished["English"]["created_at"] = "";
	$placeHoldersEoc_unfinished["English"]["created_at"] = "";
	$fieldLabelsEoc_unfinished["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_unfinished["English"]["updated_at"] = "";
	$placeHoldersEoc_unfinished["English"]["updated_at"] = "";
	$fieldLabelsEoc_unfinished["English"]["sheet_title"] = "Sheet Title";
	$fieldToolTipsEoc_unfinished["English"]["sheet_title"] = "";
	$placeHoldersEoc_unfinished["English"]["sheet_title"] = "";
	$fieldLabelsEoc_unfinished["English"]["sheet_url"] = "Sheet Url";
	$fieldToolTipsEoc_unfinished["English"]["sheet_url"] = "";
	$placeHoldersEoc_unfinished["English"]["sheet_url"] = "";
	$fieldLabelsEoc_unfinished["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_unfinished["English"]["ecc_id"] = "";
	$placeHoldersEoc_unfinished["English"]["ecc_id"] = "";
	$fieldLabelsEoc_unfinished["English"]["satei_by"] = "Satei By";
	$fieldToolTipsEoc_unfinished["English"]["satei_by"] = "";
	$placeHoldersEoc_unfinished["English"]["satei_by"] = "";
	$fieldLabelsEoc_unfinished["English"]["max_category"] = "Max Category";
	$fieldToolTipsEoc_unfinished["English"]["max_category"] = "";
	$placeHoldersEoc_unfinished["English"]["max_category"] = "";
	$fieldLabelsEoc_unfinished["English"]["zenawazu"] = "Zenawazu";
	$fieldToolTipsEoc_unfinished["English"]["zenawazu"] = "";
	$placeHoldersEoc_unfinished["English"]["zenawazu"] = "";
	$fieldLabelsEoc_unfinished["English"]["many_satei_btn"] = "Many Satei Btn";
	$fieldToolTipsEoc_unfinished["English"]["many_satei_btn"] = "";
	$placeHoldersEoc_unfinished["English"]["many_satei_btn"] = "";
	if (count($fieldToolTipsEoc_unfinished["English"]))
		$tdataEoc_unfinished[".isUseToolTips"] = true;
}


	$tdataEoc_unfinished[".NCSearch"] = true;



$tdataEoc_unfinished[".shortTableName"] = "Eoc_unfinished";
$tdataEoc_unfinished[".nSecOptions"] = 0;
$tdataEoc_unfinished[".recsPerRowPrint"] = 1;
$tdataEoc_unfinished[".mainTableOwnerID"] = "";
$tdataEoc_unfinished[".moveNext"] = 1;
$tdataEoc_unfinished[".entityType"] = 0;

$tdataEoc_unfinished[".strOriginalTableName"] = "Eoc_unfinished";

	



$tdataEoc_unfinished[".showAddInPopup"] = false;

$tdataEoc_unfinished[".showEditInPopup"] = false;

$tdataEoc_unfinished[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_unfinished[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_unfinished[".fieldsForRegister"] = array();

$tdataEoc_unfinished[".listAjax"] = false;

	$tdataEoc_unfinished[".audit"] = false;

	$tdataEoc_unfinished[".locking"] = false;



$tdataEoc_unfinished[".list"] = true;

$tdataEoc_unfinished[".inlineEdit"] = true;


$tdataEoc_unfinished[".reorderRecordsByHeader"] = true;



$tdataEoc_unfinished[".inlineAdd"] = true;
$tdataEoc_unfinished[".view"] = true;


$tdataEoc_unfinished[".exportTo"] = true;


$tdataEoc_unfinished[".delete"] = true;

$tdataEoc_unfinished[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_unfinished[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_unfinished[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_unfinished[".searchSaving"] = false;
//

$tdataEoc_unfinished[".showSearchPanel"] = true;
		$tdataEoc_unfinished[".flexibleSearch"] = true;

$tdataEoc_unfinished[".isUseAjaxSuggest"] = true;

$tdataEoc_unfinished[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdataEoc_unfinished[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_unfinished[".buttonsAdded"] = false;

$tdataEoc_unfinished[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_unfinished[".isUseTimeForSearch"] = false;



$tdataEoc_unfinished[".badgeColor"] = "daa520";

$tdataEoc_unfinished[".detailsLinksOnList"] = "1";

$tdataEoc_unfinished[".allSearchFields"] = array();
$tdataEoc_unfinished[".filterFields"] = array();
$tdataEoc_unfinished[".requiredSearchFields"] = array();

$tdataEoc_unfinished[".allSearchFields"][] = "id";
	$tdataEoc_unfinished[".allSearchFields"][] = "many_satei_btn";
	$tdataEoc_unfinished[".allSearchFields"][] = "sheet_title";
	$tdataEoc_unfinished[".allSearchFields"][] = "url_id";
	$tdataEoc_unfinished[".allSearchFields"][] = "sheet_id";
	$tdataEoc_unfinished[".allSearchFields"][] = "sheet_name";
	$tdataEoc_unfinished[".allSearchFields"][] = "sheet_url";
	$tdataEoc_unfinished[".allSearchFields"][] = "created_at";
	$tdataEoc_unfinished[".allSearchFields"][] = "updated_at";
	$tdataEoc_unfinished[".allSearchFields"][] = "ecc_id";
	$tdataEoc_unfinished[".allSearchFields"][] = "satei_by";
	$tdataEoc_unfinished[".allSearchFields"][] = "max_category";
	$tdataEoc_unfinished[".allSearchFields"][] = "zenawazu";
	

$tdataEoc_unfinished[".googleLikeFields"] = array();
$tdataEoc_unfinished[".googleLikeFields"][] = "id";
$tdataEoc_unfinished[".googleLikeFields"][] = "many_satei_btn";
$tdataEoc_unfinished[".googleLikeFields"][] = "sheet_title";
$tdataEoc_unfinished[".googleLikeFields"][] = "url_id";
$tdataEoc_unfinished[".googleLikeFields"][] = "sheet_id";
$tdataEoc_unfinished[".googleLikeFields"][] = "sheet_name";
$tdataEoc_unfinished[".googleLikeFields"][] = "sheet_url";
$tdataEoc_unfinished[".googleLikeFields"][] = "created_at";
$tdataEoc_unfinished[".googleLikeFields"][] = "updated_at";
$tdataEoc_unfinished[".googleLikeFields"][] = "ecc_id";
$tdataEoc_unfinished[".googleLikeFields"][] = "satei_by";
$tdataEoc_unfinished[".googleLikeFields"][] = "max_category";
$tdataEoc_unfinished[".googleLikeFields"][] = "zenawazu";


$tdataEoc_unfinished[".advSearchFields"] = array();
$tdataEoc_unfinished[".advSearchFields"][] = "id";
$tdataEoc_unfinished[".advSearchFields"][] = "many_satei_btn";
$tdataEoc_unfinished[".advSearchFields"][] = "sheet_title";
$tdataEoc_unfinished[".advSearchFields"][] = "url_id";
$tdataEoc_unfinished[".advSearchFields"][] = "sheet_id";
$tdataEoc_unfinished[".advSearchFields"][] = "sheet_name";
$tdataEoc_unfinished[".advSearchFields"][] = "sheet_url";
$tdataEoc_unfinished[".advSearchFields"][] = "created_at";
$tdataEoc_unfinished[".advSearchFields"][] = "updated_at";
$tdataEoc_unfinished[".advSearchFields"][] = "ecc_id";
$tdataEoc_unfinished[".advSearchFields"][] = "satei_by";
$tdataEoc_unfinished[".advSearchFields"][] = "max_category";
$tdataEoc_unfinished[".advSearchFields"][] = "zenawazu";

$tdataEoc_unfinished[".tableType"] = "list";

$tdataEoc_unfinished[".printerPageOrientation"] = 0;
$tdataEoc_unfinished[".nPrinterPageScale"] = 100;

$tdataEoc_unfinished[".nPrinterSplitRecords"] = 40;

$tdataEoc_unfinished[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_unfinished[".geocodingEnabled"] = false;





$tdataEoc_unfinished[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_unfinished[".pageSize"] = 20;

$tdataEoc_unfinished[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_unfinished[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_unfinished[".orderindexes"] = array();
$tdataEoc_unfinished[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdataEoc_unfinished[".sqlHead"] = "SELECT `id`,  `id` as `many_satei_btn`,  `sheet_title`,  `url_id`,  `sheet_id`,  `sheet_name`,  `sheet_url`,  `created_at`,  `updated_at`,  `ecc_id`,  `satei_by`,  `max_category`,  `zenawazu`";
$tdataEoc_unfinished[".sqlFrom"] = "FROM `Eoc_unfinished`";
$tdataEoc_unfinished[".sqlWhereExpr"] = "";
$tdataEoc_unfinished[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_unfinished[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_unfinished[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_unfinished[".highlightSearchResults"] = true;

$tableKeysEoc_unfinished = array();
$tableKeysEoc_unfinished[] = "id";
$tdataEoc_unfinished[".Keys"] = $tableKeysEoc_unfinished;

$tdataEoc_unfinished[".listFields"] = array();
$tdataEoc_unfinished[".listFields"][] = "many_satei_btn";
$tdataEoc_unfinished[".listFields"][] = "id";
$tdataEoc_unfinished[".listFields"][] = "sheet_title";
$tdataEoc_unfinished[".listFields"][] = "url_id";
$tdataEoc_unfinished[".listFields"][] = "sheet_id";
$tdataEoc_unfinished[".listFields"][] = "sheet_name";
$tdataEoc_unfinished[".listFields"][] = "sheet_url";
$tdataEoc_unfinished[".listFields"][] = "created_at";
$tdataEoc_unfinished[".listFields"][] = "updated_at";
$tdataEoc_unfinished[".listFields"][] = "ecc_id";
$tdataEoc_unfinished[".listFields"][] = "satei_by";
$tdataEoc_unfinished[".listFields"][] = "max_category";
$tdataEoc_unfinished[".listFields"][] = "zenawazu";

$tdataEoc_unfinished[".hideMobileList"] = array();


$tdataEoc_unfinished[".viewFields"] = array();
$tdataEoc_unfinished[".viewFields"][] = "id";
$tdataEoc_unfinished[".viewFields"][] = "many_satei_btn";
$tdataEoc_unfinished[".viewFields"][] = "sheet_title";
$tdataEoc_unfinished[".viewFields"][] = "url_id";
$tdataEoc_unfinished[".viewFields"][] = "sheet_id";
$tdataEoc_unfinished[".viewFields"][] = "sheet_name";
$tdataEoc_unfinished[".viewFields"][] = "sheet_url";
$tdataEoc_unfinished[".viewFields"][] = "created_at";
$tdataEoc_unfinished[".viewFields"][] = "updated_at";
$tdataEoc_unfinished[".viewFields"][] = "ecc_id";
$tdataEoc_unfinished[".viewFields"][] = "satei_by";
$tdataEoc_unfinished[".viewFields"][] = "max_category";
$tdataEoc_unfinished[".viewFields"][] = "zenawazu";

$tdataEoc_unfinished[".addFields"] = array();

$tdataEoc_unfinished[".masterListFields"] = array();
$tdataEoc_unfinished[".masterListFields"][] = "id";
$tdataEoc_unfinished[".masterListFields"][] = "many_satei_btn";
$tdataEoc_unfinished[".masterListFields"][] = "sheet_title";
$tdataEoc_unfinished[".masterListFields"][] = "url_id";
$tdataEoc_unfinished[".masterListFields"][] = "sheet_id";
$tdataEoc_unfinished[".masterListFields"][] = "sheet_name";
$tdataEoc_unfinished[".masterListFields"][] = "sheet_url";
$tdataEoc_unfinished[".masterListFields"][] = "created_at";
$tdataEoc_unfinished[".masterListFields"][] = "updated_at";
$tdataEoc_unfinished[".masterListFields"][] = "ecc_id";
$tdataEoc_unfinished[".masterListFields"][] = "satei_by";
$tdataEoc_unfinished[".masterListFields"][] = "max_category";
$tdataEoc_unfinished[".masterListFields"][] = "zenawazu";

$tdataEoc_unfinished[".inlineAddFields"] = array();
$tdataEoc_unfinished[".inlineAddFields"][] = "ecc_id";
$tdataEoc_unfinished[".inlineAddFields"][] = "zenawazu";

$tdataEoc_unfinished[".editFields"] = array();

$tdataEoc_unfinished[".inlineEditFields"] = array();
$tdataEoc_unfinished[".inlineEditFields"][] = "ecc_id";
$tdataEoc_unfinished[".inlineEditFields"][] = "zenawazu";

$tdataEoc_unfinished[".updateSelectedFields"] = array();


$tdataEoc_unfinished[".exportFields"] = array();
$tdataEoc_unfinished[".exportFields"][] = "id";
$tdataEoc_unfinished[".exportFields"][] = "many_satei_btn";
$tdataEoc_unfinished[".exportFields"][] = "sheet_title";
$tdataEoc_unfinished[".exportFields"][] = "url_id";
$tdataEoc_unfinished[".exportFields"][] = "sheet_id";
$tdataEoc_unfinished[".exportFields"][] = "sheet_name";
$tdataEoc_unfinished[".exportFields"][] = "sheet_url";
$tdataEoc_unfinished[".exportFields"][] = "created_at";
$tdataEoc_unfinished[".exportFields"][] = "updated_at";
$tdataEoc_unfinished[".exportFields"][] = "ecc_id";
$tdataEoc_unfinished[".exportFields"][] = "satei_by";
$tdataEoc_unfinished[".exportFields"][] = "max_category";
$tdataEoc_unfinished[".exportFields"][] = "zenawazu";

$tdataEoc_unfinished[".importFields"] = array();

$tdataEoc_unfinished[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_unfinished","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdataEoc_unfinished["id"] = $fdata;
//	many_satei_btn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "many_satei_btn";
	$fdata["GoodName"] = "many_satei_btn";
	$fdata["ownerTable"] = "Eoc_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_unfinished","many_satei_btn");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`id`";

	
	
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




	$tdataEoc_unfinished["many_satei_btn"] = $fdata;
//	sheet_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sheet_title";
	$fdata["GoodName"] = "sheet_title";
	$fdata["ownerTable"] = "Eoc_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_unfinished","sheet_title");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sheet_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sheet_title`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdataEoc_unfinished["sheet_title"] = $fdata;
//	url_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "url_id";
	$fdata["GoodName"] = "url_id";
	$fdata["ownerTable"] = "Eoc_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_unfinished","url_id");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "url_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`url_id`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdataEoc_unfinished["url_id"] = $fdata;
//	sheet_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sheet_id";
	$fdata["GoodName"] = "sheet_id";
	$fdata["ownerTable"] = "Eoc_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_unfinished","sheet_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sheet_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sheet_id`";

	
	
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




	$tdataEoc_unfinished["sheet_id"] = $fdata;
//	sheet_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sheet_name";
	$fdata["GoodName"] = "sheet_name";
	$fdata["ownerTable"] = "Eoc_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_unfinished","sheet_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sheet_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sheet_name`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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




	$tdataEoc_unfinished["sheet_name"] = $fdata;
//	sheet_url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sheet_url";
	$fdata["GoodName"] = "sheet_url";
	$fdata["ownerTable"] = "Eoc_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_unfinished","sheet_url");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sheet_url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sheet_url`";

	
	
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




	$tdataEoc_unfinished["sheet_url"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "Eoc_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_unfinished","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdataEoc_unfinished["created_at"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_unfinished","updated_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

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




	$tdataEoc_unfinished["updated_at"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_unfinished","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ecc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`ecc_id`";

	
	
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




	$tdataEoc_unfinished["ecc_id"] = $fdata;
//	satei_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "satei_by";
	$fdata["GoodName"] = "satei_by";
	$fdata["ownerTable"] = "Eoc_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_unfinished","satei_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "satei_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`satei_by`";

	
	
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




	$tdataEoc_unfinished["satei_by"] = $fdata;
//	max_category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "max_category";
	$fdata["GoodName"] = "max_category";
	$fdata["ownerTable"] = "Eoc_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_unfinished","max_category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "max_category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`max_category`";

	
	
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




	$tdataEoc_unfinished["max_category"] = $fdata;
//	zenawazu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "zenawazu";
	$fdata["GoodName"] = "zenawazu";
	$fdata["ownerTable"] = "Eoc_unfinished";
	$fdata["Label"] = GetFieldLabel("Eoc_unfinished","zenawazu");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zenawazu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`zenawazu`";

	
	
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




	$tdataEoc_unfinished["zenawazu"] = $fdata;


$tables_data["Eoc_unfinished"]=&$tdataEoc_unfinished;
$field_labels["Eoc_unfinished"] = &$fieldLabelsEoc_unfinished;
$fieldToolTips["Eoc_unfinished"] = &$fieldToolTipsEoc_unfinished;
$placeHolders["Eoc_unfinished"] = &$placeHoldersEoc_unfinished;
$page_titles["Eoc_unfinished"] = &$pageTitlesEoc_unfinished;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_unfinished"] = array();
//	Eoc_chigins_unfinished
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_chigins_unfinished";
		$detailsParam["dOriginalTable"] = "Eoc_chigins_unfinished";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_chigins_unfinished";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_chigins_unfinished");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();

/*			$detailsParam["dispChildCount"] = "1";
*/
	$detailsParam["dispChildCount"] = "1";

		$detailsParam["hideChild"] = true;
						$detailsParam["previewOnList"] = "1";
		$detailsParam["previewOnAdd"] = 0;
		$detailsParam["previewOnEdit"] = 0;
		$detailsParam["previewOnView"] = 1;
		
	$detailsTablesData["Eoc_unfinished"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_unfinished"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_unfinished"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_unfinished"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_unfinished"][$dIndex]["detailKeys"][]="Eoc_unfinished_id";
//	shouhin
	
	

		$dIndex = 1;
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
		
	$detailsTablesData["Eoc_unfinished"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_unfinished"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_unfinished"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_unfinished"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_unfinished"][$dIndex]["detailKeys"][]="Eoc_unfinished_id";
//	Eoc_chigins
	
	

		$dIndex = 2;
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
		
	$detailsTablesData["Eoc_unfinished"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_unfinished"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_unfinished"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_unfinished"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_unfinished"][$dIndex]["detailKeys"][]="Eoc_unfinished_id";

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_unfinished"] = array();


	
				$strOriginalDetailsTable="Eoc";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Eoc";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Eoc";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "0";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			
	$masterParams["previewOnList"]= 2;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 1;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Eoc_unfinished"][0] = $masterParams;
				$masterTablesData["Eoc_unfinished"][0]["masterKeys"] = array();
	$masterTablesData["Eoc_unfinished"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["Eoc_unfinished"][0]["detailKeys"] = array();
	$masterTablesData["Eoc_unfinished"][0]["detailKeys"][]="ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_unfinished()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `id` as `many_satei_btn`,  `sheet_title`,  `url_id`,  `sheet_id`,  `sheet_name`,  `sheet_url`,  `created_at`,  `updated_at`,  `ecc_id`,  `satei_by`,  `max_category`,  `zenawazu`";
$proto0["m_strFrom"] = "FROM `Eoc_unfinished`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `id` DESC";
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
	"m_strTable" => "Eoc_unfinished",
	"m_srcTableName" => "Eoc_unfinished"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "Eoc_unfinished";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_unfinished",
	"m_srcTableName" => "Eoc_unfinished"
));

$proto8["m_sql"] = "`id`";
$proto8["m_srcTableName"] = "Eoc_unfinished";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "many_satei_btn";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sheet_title",
	"m_strTable" => "Eoc_unfinished",
	"m_srcTableName" => "Eoc_unfinished"
));

$proto10["m_sql"] = "`sheet_title`";
$proto10["m_srcTableName"] = "Eoc_unfinished";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "url_id",
	"m_strTable" => "Eoc_unfinished",
	"m_srcTableName" => "Eoc_unfinished"
));

$proto12["m_sql"] = "`url_id`";
$proto12["m_srcTableName"] = "Eoc_unfinished";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sheet_id",
	"m_strTable" => "Eoc_unfinished",
	"m_srcTableName" => "Eoc_unfinished"
));

$proto14["m_sql"] = "`sheet_id`";
$proto14["m_srcTableName"] = "Eoc_unfinished";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sheet_name",
	"m_strTable" => "Eoc_unfinished",
	"m_srcTableName" => "Eoc_unfinished"
));

$proto16["m_sql"] = "`sheet_name`";
$proto16["m_srcTableName"] = "Eoc_unfinished";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sheet_url",
	"m_strTable" => "Eoc_unfinished",
	"m_srcTableName" => "Eoc_unfinished"
));

$proto18["m_sql"] = "`sheet_url`";
$proto18["m_srcTableName"] = "Eoc_unfinished";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "Eoc_unfinished",
	"m_srcTableName" => "Eoc_unfinished"
));

$proto20["m_sql"] = "`created_at`";
$proto20["m_srcTableName"] = "Eoc_unfinished";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_unfinished",
	"m_srcTableName" => "Eoc_unfinished"
));

$proto22["m_sql"] = "`updated_at`";
$proto22["m_srcTableName"] = "Eoc_unfinished";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc_unfinished",
	"m_srcTableName" => "Eoc_unfinished"
));

$proto24["m_sql"] = "`ecc_id`";
$proto24["m_srcTableName"] = "Eoc_unfinished";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "satei_by",
	"m_strTable" => "Eoc_unfinished",
	"m_srcTableName" => "Eoc_unfinished"
));

$proto26["m_sql"] = "`satei_by`";
$proto26["m_srcTableName"] = "Eoc_unfinished";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "max_category",
	"m_strTable" => "Eoc_unfinished",
	"m_srcTableName" => "Eoc_unfinished"
));

$proto28["m_sql"] = "`max_category`";
$proto28["m_srcTableName"] = "Eoc_unfinished";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "zenawazu",
	"m_strTable" => "Eoc_unfinished",
	"m_srcTableName" => "Eoc_unfinished"
));

$proto30["m_sql"] = "`zenawazu`";
$proto30["m_srcTableName"] = "Eoc_unfinished";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "Eoc_unfinished";
$proto33["m_srcTableName"] = "Eoc_unfinished";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "sheet_title";
$proto33["m_columns"][] = "url_id";
$proto33["m_columns"][] = "sheet_id";
$proto33["m_columns"][] = "sheet_name";
$proto33["m_columns"][] = "sheet_url";
$proto33["m_columns"][] = "created_at";
$proto33["m_columns"][] = "updated_at";
$proto33["m_columns"][] = "ecc_id";
$proto33["m_columns"][] = "satei_by";
$proto33["m_columns"][] = "max_category";
$proto33["m_columns"][] = "zenawazu";
$proto33["m_columns"][] = "is_NJ_or_BJ";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "`Eoc_unfinished`";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "Eoc_unfinished";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "Eoc_unfinished",
	"m_srcTableName" => "Eoc_unfinished"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 0;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_unfinished";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_unfinished = createSqlQuery_Eoc_unfinished();


	
		;

													

$tdataEoc_unfinished[".sqlquery"] = $queryData_Eoc_unfinished;

$tableEvents["Eoc_unfinished"] = new eventsBase;
$tdataEoc_unfinished[".hasEvents"] = false;

?>