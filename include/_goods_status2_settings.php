<?php
require_once(getabspath("classes/cipherer.php"));




$tdata_goods_status2 = array();
	$tdata_goods_status2[".truncateText"] = true;
	$tdata_goods_status2[".NumberOfChars"] = 80;
	$tdata_goods_status2[".ShortName"] = "_goods_status2";
	$tdata_goods_status2[".OwnerID"] = "";
	$tdata_goods_status2[".OriginalTable"] = "_goods_status2";

//	field labels
$fieldLabels_goods_status2 = array();
$fieldToolTips_goods_status2 = array();
$pageTitles_goods_status2 = array();
$placeHolders_goods_status2 = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabels_goods_status2["Japanese"] = array();
	$fieldToolTips_goods_status2["Japanese"] = array();
	$placeHolders_goods_status2["Japanese"] = array();
	$pageTitles_goods_status2["Japanese"] = array();
	$fieldLabels_goods_status2["Japanese"]["goods_id"] = "goods_id(保存値)";
	$fieldToolTips_goods_status2["Japanese"]["goods_id"] = "";
	$placeHolders_goods_status2["Japanese"]["goods_id"] = "";
	$fieldLabels_goods_status2["Japanese"]["goods_status"] = "名称";
	$fieldToolTips_goods_status2["Japanese"]["goods_status"] = "";
	$placeHolders_goods_status2["Japanese"]["goods_status"] = "";
	$fieldLabels_goods_status2["Japanese"]["id"] = "Id(プライマリキー)";
	$fieldToolTips_goods_status2["Japanese"]["id"] = "";
	$placeHolders_goods_status2["Japanese"]["id"] = "";
	$fieldLabels_goods_status2["Japanese"]["sort"] = "ソート";
	$fieldToolTips_goods_status2["Japanese"]["sort"] = "";
	$placeHolders_goods_status2["Japanese"]["sort"] = "";
	$fieldLabels_goods_status2["Japanese"]["kinsa"] = "金査ソート";
	$fieldToolTips_goods_status2["Japanese"]["kinsa"] = "";
	$placeHolders_goods_status2["Japanese"]["kinsa"] = "";
	$fieldLabels_goods_status2["Japanese"]["dia"] = "D在ソート";
	$fieldToolTips_goods_status2["Japanese"]["dia"] = "";
	$placeHolders_goods_status2["Japanese"]["dia"] = "";
	$fieldLabels_goods_status2["Japanese"]["zaiko"] = "現在庫";
	$fieldToolTips_goods_status2["Japanese"]["zaiko"] = "";
	$placeHolders_goods_status2["Japanese"]["zaiko"] = "";
	$fieldLabels_goods_status2["Japanese"]["detail"] = "説明";
	$fieldToolTips_goods_status2["Japanese"]["detail"] = "";
	$placeHolders_goods_status2["Japanese"]["detail"] = "";
	$fieldLabels_goods_status2["Japanese"]["batch_flag"] = "batch対象";
	$fieldToolTips_goods_status2["Japanese"]["batch_flag"] = "";
	$placeHolders_goods_status2["Japanese"]["batch_flag"] = "";
	$fieldLabels_goods_status2["Japanese"]["create_at"] = "作成日";
	$fieldToolTips_goods_status2["Japanese"]["create_at"] = "";
	$placeHolders_goods_status2["Japanese"]["create_at"] = "";
	$fieldLabels_goods_status2["Japanese"]["create_by"] = "作成者";
	$fieldToolTips_goods_status2["Japanese"]["create_by"] = "";
	$placeHolders_goods_status2["Japanese"]["create_by"] = "";
	$fieldLabels_goods_status2["Japanese"]["update_at"] = "更新日";
	$fieldToolTips_goods_status2["Japanese"]["update_at"] = "";
	$placeHolders_goods_status2["Japanese"]["update_at"] = "";
	$fieldLabels_goods_status2["Japanese"]["update_by"] = "更新者";
	$fieldToolTips_goods_status2["Japanese"]["update_by"] = "";
	$placeHolders_goods_status2["Japanese"]["update_by"] = "";
	if (count($fieldToolTips_goods_status2["Japanese"]))
		$tdata_goods_status2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabels_goods_status2[""] = array();
	$fieldToolTips_goods_status2[""] = array();
	$placeHolders_goods_status2[""] = array();
	$pageTitles_goods_status2[""] = array();
	$fieldLabels_goods_status2[""]["goods_id"] = "Goods Id";
	$fieldToolTips_goods_status2[""]["goods_id"] = "";
	$placeHolders_goods_status2[""]["goods_id"] = "";
	$fieldLabels_goods_status2[""]["goods_status"] = "Goods Status";
	$fieldToolTips_goods_status2[""]["goods_status"] = "";
	$placeHolders_goods_status2[""]["goods_status"] = "";
	$fieldLabels_goods_status2[""]["id"] = "Id";
	$fieldToolTips_goods_status2[""]["id"] = "";
	$placeHolders_goods_status2[""]["id"] = "";
	$fieldLabels_goods_status2[""]["sort"] = "Sort";
	$fieldToolTips_goods_status2[""]["sort"] = "";
	$placeHolders_goods_status2[""]["sort"] = "";
	$fieldLabels_goods_status2[""]["kinsa"] = "Kinsa";
	$fieldToolTips_goods_status2[""]["kinsa"] = "";
	$placeHolders_goods_status2[""]["kinsa"] = "";
	$fieldLabels_goods_status2[""]["dia"] = "Dia";
	$fieldToolTips_goods_status2[""]["dia"] = "";
	$placeHolders_goods_status2[""]["dia"] = "";
	$fieldLabels_goods_status2[""]["zaiko"] = "Zaiko";
	$fieldToolTips_goods_status2[""]["zaiko"] = "";
	$placeHolders_goods_status2[""]["zaiko"] = "";
	$fieldLabels_goods_status2[""]["detail"] = "Detail";
	$fieldToolTips_goods_status2[""]["detail"] = "";
	$placeHolders_goods_status2[""]["detail"] = "";
	$fieldLabels_goods_status2[""]["batch_flag"] = "Batch Flag";
	$fieldToolTips_goods_status2[""]["batch_flag"] = "";
	$placeHolders_goods_status2[""]["batch_flag"] = "";
	$fieldLabels_goods_status2[""]["create_at"] = "Create At";
	$fieldToolTips_goods_status2[""]["create_at"] = "";
	$placeHolders_goods_status2[""]["create_at"] = "";
	$fieldLabels_goods_status2[""]["create_by"] = "Create By";
	$fieldToolTips_goods_status2[""]["create_by"] = "";
	$placeHolders_goods_status2[""]["create_by"] = "";
	$fieldLabels_goods_status2[""]["update_at"] = "Update At";
	$fieldToolTips_goods_status2[""]["update_at"] = "";
	$placeHolders_goods_status2[""]["update_at"] = "";
	$fieldLabels_goods_status2[""]["update_by"] = "Update By";
	$fieldToolTips_goods_status2[""]["update_by"] = "";
	$placeHolders_goods_status2[""]["update_by"] = "";
	if (count($fieldToolTips_goods_status2[""]))
		$tdata_goods_status2[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabels_goods_status2["English"] = array();
	$fieldToolTips_goods_status2["English"] = array();
	$placeHolders_goods_status2["English"] = array();
	$pageTitles_goods_status2["English"] = array();
	$fieldLabels_goods_status2["English"]["goods_id"] = "Goods Id";
	$fieldToolTips_goods_status2["English"]["goods_id"] = "";
	$placeHolders_goods_status2["English"]["goods_id"] = "";
	$fieldLabels_goods_status2["English"]["goods_status"] = "Goods Status";
	$fieldToolTips_goods_status2["English"]["goods_status"] = "";
	$placeHolders_goods_status2["English"]["goods_status"] = "";
	$fieldLabels_goods_status2["English"]["id"] = "Id";
	$fieldToolTips_goods_status2["English"]["id"] = "";
	$placeHolders_goods_status2["English"]["id"] = "";
	$fieldLabels_goods_status2["English"]["sort"] = "Sort";
	$fieldToolTips_goods_status2["English"]["sort"] = "";
	$placeHolders_goods_status2["English"]["sort"] = "";
	$fieldLabels_goods_status2["English"]["kinsa"] = "Kinsa";
	$fieldToolTips_goods_status2["English"]["kinsa"] = "";
	$placeHolders_goods_status2["English"]["kinsa"] = "";
	$fieldLabels_goods_status2["English"]["dia"] = "Dia";
	$fieldToolTips_goods_status2["English"]["dia"] = "";
	$placeHolders_goods_status2["English"]["dia"] = "";
	$fieldLabels_goods_status2["English"]["zaiko"] = "Zaiko";
	$fieldToolTips_goods_status2["English"]["zaiko"] = "";
	$placeHolders_goods_status2["English"]["zaiko"] = "";
	$fieldLabels_goods_status2["English"]["detail"] = "Detail";
	$fieldToolTips_goods_status2["English"]["detail"] = "";
	$placeHolders_goods_status2["English"]["detail"] = "";
	$fieldLabels_goods_status2["English"]["batch_flag"] = "Batch Flag";
	$fieldToolTips_goods_status2["English"]["batch_flag"] = "";
	$placeHolders_goods_status2["English"]["batch_flag"] = "";
	$fieldLabels_goods_status2["English"]["create_at"] = "Create At";
	$fieldToolTips_goods_status2["English"]["create_at"] = "";
	$placeHolders_goods_status2["English"]["create_at"] = "";
	$fieldLabels_goods_status2["English"]["create_by"] = "Create By";
	$fieldToolTips_goods_status2["English"]["create_by"] = "";
	$placeHolders_goods_status2["English"]["create_by"] = "";
	$fieldLabels_goods_status2["English"]["update_at"] = "Update At";
	$fieldToolTips_goods_status2["English"]["update_at"] = "";
	$placeHolders_goods_status2["English"]["update_at"] = "";
	$fieldLabels_goods_status2["English"]["update_by"] = "Update By";
	$fieldToolTips_goods_status2["English"]["update_by"] = "";
	$placeHolders_goods_status2["English"]["update_by"] = "";
	if (count($fieldToolTips_goods_status2["English"]))
		$tdata_goods_status2[".isUseToolTips"] = true;
}


	$tdata_goods_status2[".NCSearch"] = true;



$tdata_goods_status2[".shortTableName"] = "_goods_status2";
$tdata_goods_status2[".nSecOptions"] = 0;
$tdata_goods_status2[".recsPerRowPrint"] = 1;
$tdata_goods_status2[".mainTableOwnerID"] = "";
$tdata_goods_status2[".moveNext"] = 1;
$tdata_goods_status2[".entityType"] = 0;

$tdata_goods_status2[".strOriginalTableName"] = "_goods_status2";

	



$tdata_goods_status2[".showAddInPopup"] = false;

$tdata_goods_status2[".showEditInPopup"] = false;

$tdata_goods_status2[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata_goods_status2[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata_goods_status2[".fieldsForRegister"] = array();

$tdata_goods_status2[".listAjax"] = false;

	$tdata_goods_status2[".audit"] = true;

	$tdata_goods_status2[".locking"] = false;



$tdata_goods_status2[".list"] = true;

$tdata_goods_status2[".inlineEdit"] = true;


$tdata_goods_status2[".reorderRecordsByHeader"] = true;



$tdata_goods_status2[".inlineAdd"] = true;

$tdata_goods_status2[".import"] = true;

$tdata_goods_status2[".exportTo"] = true;


$tdata_goods_status2[".delete"] = true;

$tdata_goods_status2[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdata_goods_status2[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdata_goods_status2[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdata_goods_status2[".searchSaving"] = false;
//

$tdata_goods_status2[".showSearchPanel"] = true;
		$tdata_goods_status2[".flexibleSearch"] = true;

$tdata_goods_status2[".isUseAjaxSuggest"] = true;

$tdata_goods_status2[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdata_goods_status2[".ajaxCodeSnippetAdded"] = false;

$tdata_goods_status2[".buttonsAdded"] = false;

$tdata_goods_status2[".addPageEvents"] = false;

// use timepicker for search panel
$tdata_goods_status2[".isUseTimeForSearch"] = false;





$tdata_goods_status2[".allSearchFields"] = array();
$tdata_goods_status2[".filterFields"] = array();
$tdata_goods_status2[".requiredSearchFields"] = array();

$tdata_goods_status2[".allSearchFields"][] = "kinsa";
	$tdata_goods_status2[".allSearchFields"][] = "dia";
	$tdata_goods_status2[".allSearchFields"][] = "zaiko";
	$tdata_goods_status2[".allSearchFields"][] = "batch_flag";
	$tdata_goods_status2[".allSearchFields"][] = "detail";
	$tdata_goods_status2[".allSearchFields"][] = "create_by";
	$tdata_goods_status2[".allSearchFields"][] = "create_at";
	$tdata_goods_status2[".allSearchFields"][] = "update_by";
	$tdata_goods_status2[".allSearchFields"][] = "update_at";
	

$tdata_goods_status2[".googleLikeFields"] = array();
$tdata_goods_status2[".googleLikeFields"][] = "goods_id";
$tdata_goods_status2[".googleLikeFields"][] = "goods_status";
$tdata_goods_status2[".googleLikeFields"][] = "id";
$tdata_goods_status2[".googleLikeFields"][] = "sort";
$tdata_goods_status2[".googleLikeFields"][] = "kinsa";
$tdata_goods_status2[".googleLikeFields"][] = "dia";
$tdata_goods_status2[".googleLikeFields"][] = "zaiko";
$tdata_goods_status2[".googleLikeFields"][] = "detail";
$tdata_goods_status2[".googleLikeFields"][] = "batch_flag";
$tdata_goods_status2[".googleLikeFields"][] = "create_at";
$tdata_goods_status2[".googleLikeFields"][] = "create_by";
$tdata_goods_status2[".googleLikeFields"][] = "update_at";
$tdata_goods_status2[".googleLikeFields"][] = "update_by";


$tdata_goods_status2[".advSearchFields"] = array();
$tdata_goods_status2[".advSearchFields"][] = "kinsa";
$tdata_goods_status2[".advSearchFields"][] = "dia";
$tdata_goods_status2[".advSearchFields"][] = "zaiko";
$tdata_goods_status2[".advSearchFields"][] = "batch_flag";
$tdata_goods_status2[".advSearchFields"][] = "detail";
$tdata_goods_status2[".advSearchFields"][] = "create_by";
$tdata_goods_status2[".advSearchFields"][] = "create_at";
$tdata_goods_status2[".advSearchFields"][] = "update_by";
$tdata_goods_status2[".advSearchFields"][] = "update_at";

$tdata_goods_status2[".tableType"] = "list";

$tdata_goods_status2[".printerPageOrientation"] = 0;
$tdata_goods_status2[".nPrinterPageScale"] = 100;

$tdata_goods_status2[".nPrinterSplitRecords"] = 40;

$tdata_goods_status2[".nPrinterPDFSplitRecords"] = 40;



$tdata_goods_status2[".geocodingEnabled"] = false;





$tdata_goods_status2[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdata_goods_status2[".pageSize"] = 100;

$tdata_goods_status2[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata_goods_status2[".strOrderBy"] = $tstrOrderBy;

$tdata_goods_status2[".orderindexes"] = array();
$tdata_goods_status2[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "`sort`");

$tdata_goods_status2[".sqlHead"] = "SELECT `goods_id`,  `goods_status`,  `id`,  `sort`,  `kinsa`,  `dia`,  `zaiko`,  `detail`,  `batch_flag`,  `create_at`,  `create_by`,  `update_at`,  `update_by`";
$tdata_goods_status2[".sqlFrom"] = "FROM `_goods_status2`";
$tdata_goods_status2[".sqlWhereExpr"] = "";
$tdata_goods_status2[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata_goods_status2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata_goods_status2[".arrGroupsPerPage"] = $arrGPP;

$tdata_goods_status2[".highlightSearchResults"] = true;

$tableKeys_goods_status2 = array();
$tableKeys_goods_status2[] = "id";
$tdata_goods_status2[".Keys"] = $tableKeys_goods_status2;

$tdata_goods_status2[".listFields"] = array();
$tdata_goods_status2[".listFields"][] = "id";
$tdata_goods_status2[".listFields"][] = "goods_id";
$tdata_goods_status2[".listFields"][] = "goods_status";
$tdata_goods_status2[".listFields"][] = "sort";
$tdata_goods_status2[".listFields"][] = "kinsa";
$tdata_goods_status2[".listFields"][] = "dia";
$tdata_goods_status2[".listFields"][] = "zaiko";
$tdata_goods_status2[".listFields"][] = "batch_flag";
$tdata_goods_status2[".listFields"][] = "detail";
$tdata_goods_status2[".listFields"][] = "create_by";
$tdata_goods_status2[".listFields"][] = "create_at";
$tdata_goods_status2[".listFields"][] = "update_by";
$tdata_goods_status2[".listFields"][] = "update_at";

$tdata_goods_status2[".hideMobileList"] = array();


$tdata_goods_status2[".viewFields"] = array();

$tdata_goods_status2[".addFields"] = array();

$tdata_goods_status2[".masterListFields"] = array();
$tdata_goods_status2[".masterListFields"][] = "create_at";
$tdata_goods_status2[".masterListFields"][] = "create_by";
$tdata_goods_status2[".masterListFields"][] = "update_at";
$tdata_goods_status2[".masterListFields"][] = "update_by";
$tdata_goods_status2[".masterListFields"][] = "id";
$tdata_goods_status2[".masterListFields"][] = "goods_id";
$tdata_goods_status2[".masterListFields"][] = "goods_status";
$tdata_goods_status2[".masterListFields"][] = "sort";
$tdata_goods_status2[".masterListFields"][] = "kinsa";
$tdata_goods_status2[".masterListFields"][] = "dia";
$tdata_goods_status2[".masterListFields"][] = "zaiko";
$tdata_goods_status2[".masterListFields"][] = "batch_flag";
$tdata_goods_status2[".masterListFields"][] = "detail";

$tdata_goods_status2[".inlineAddFields"] = array();
$tdata_goods_status2[".inlineAddFields"][] = "goods_id";
$tdata_goods_status2[".inlineAddFields"][] = "goods_status";
$tdata_goods_status2[".inlineAddFields"][] = "sort";
$tdata_goods_status2[".inlineAddFields"][] = "kinsa";
$tdata_goods_status2[".inlineAddFields"][] = "dia";
$tdata_goods_status2[".inlineAddFields"][] = "zaiko";
$tdata_goods_status2[".inlineAddFields"][] = "batch_flag";
$tdata_goods_status2[".inlineAddFields"][] = "detail";

$tdata_goods_status2[".editFields"] = array();

$tdata_goods_status2[".inlineEditFields"] = array();
$tdata_goods_status2[".inlineEditFields"][] = "goods_id";
$tdata_goods_status2[".inlineEditFields"][] = "goods_status";
$tdata_goods_status2[".inlineEditFields"][] = "sort";
$tdata_goods_status2[".inlineEditFields"][] = "kinsa";
$tdata_goods_status2[".inlineEditFields"][] = "dia";
$tdata_goods_status2[".inlineEditFields"][] = "zaiko";
$tdata_goods_status2[".inlineEditFields"][] = "batch_flag";
$tdata_goods_status2[".inlineEditFields"][] = "detail";

$tdata_goods_status2[".updateSelectedFields"] = array();


$tdata_goods_status2[".exportFields"] = array();
$tdata_goods_status2[".exportFields"][] = "id";
$tdata_goods_status2[".exportFields"][] = "goods_id";
$tdata_goods_status2[".exportFields"][] = "goods_status";
$tdata_goods_status2[".exportFields"][] = "sort";
$tdata_goods_status2[".exportFields"][] = "kinsa";
$tdata_goods_status2[".exportFields"][] = "dia";
$tdata_goods_status2[".exportFields"][] = "zaiko";
$tdata_goods_status2[".exportFields"][] = "batch_flag";
$tdata_goods_status2[".exportFields"][] = "detail";
$tdata_goods_status2[".exportFields"][] = "create_by";
$tdata_goods_status2[".exportFields"][] = "create_at";
$tdata_goods_status2[".exportFields"][] = "update_by";
$tdata_goods_status2[".exportFields"][] = "update_at";

$tdata_goods_status2[".importFields"] = array();
$tdata_goods_status2[".importFields"][] = "goods_id";
$tdata_goods_status2[".importFields"][] = "goods_status";
$tdata_goods_status2[".importFields"][] = "id";
$tdata_goods_status2[".importFields"][] = "sort";
$tdata_goods_status2[".importFields"][] = "kinsa";
$tdata_goods_status2[".importFields"][] = "dia";
$tdata_goods_status2[".importFields"][] = "zaiko";
$tdata_goods_status2[".importFields"][] = "detail";
$tdata_goods_status2[".importFields"][] = "batch_flag";

$tdata_goods_status2[".printFields"] = array();

//	goods_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "goods_id";
	$fdata["GoodName"] = "goods_id";
	$fdata["ownerTable"] = "_goods_status2";
	$fdata["Label"] = GetFieldLabel("_goods_status2","goods_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "goods_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`goods_id`";

	
	
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








	$tdata_goods_status2["goods_id"] = $fdata;
//	goods_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "goods_status";
	$fdata["GoodName"] = "goods_status";
	$fdata["ownerTable"] = "_goods_status2";
	$fdata["Label"] = GetFieldLabel("_goods_status2","goods_status");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "goods_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`goods_status`";

	
	
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








	$tdata_goods_status2["goods_status"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "_goods_status2";
	$fdata["Label"] = GetFieldLabel("_goods_status2","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdata_goods_status2["id"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "_goods_status2";
	$fdata["Label"] = GetFieldLabel("_goods_status2","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`sort`";

	
	
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








	$tdata_goods_status2["sort"] = $fdata;
//	kinsa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "kinsa";
	$fdata["GoodName"] = "kinsa";
	$fdata["ownerTable"] = "_goods_status2";
	$fdata["Label"] = GetFieldLabel("_goods_status2","kinsa");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kinsa";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`kinsa`";

	
	
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




	$tdata_goods_status2["kinsa"] = $fdata;
//	dia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "dia";
	$fdata["GoodName"] = "dia";
	$fdata["ownerTable"] = "_goods_status2";
	$fdata["Label"] = GetFieldLabel("_goods_status2","dia");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dia`";

	
	
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




	$tdata_goods_status2["dia"] = $fdata;
//	zaiko
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "zaiko";
	$fdata["GoodName"] = "zaiko";
	$fdata["ownerTable"] = "_goods_status2";
	$fdata["Label"] = GetFieldLabel("_goods_status2","zaiko");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "zaiko";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`zaiko`";

	
	
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




	$tdata_goods_status2["zaiko"] = $fdata;
//	detail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "detail";
	$fdata["GoodName"] = "detail";
	$fdata["ownerTable"] = "_goods_status2";
	$fdata["Label"] = GetFieldLabel("_goods_status2","detail");
	$fdata["FieldType"] = 201;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "detail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`detail`";

	
	
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




	$tdata_goods_status2["detail"] = $fdata;
//	batch_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "batch_flag";
	$fdata["GoodName"] = "batch_flag";
	$fdata["ownerTable"] = "_goods_status2";
	$fdata["Label"] = GetFieldLabel("_goods_status2","batch_flag");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "batch_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`batch_flag`";

	
	
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




	$tdata_goods_status2["batch_flag"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "_goods_status2";
	$fdata["Label"] = GetFieldLabel("_goods_status2","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdata_goods_status2["create_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "_goods_status2";
	$fdata["Label"] = GetFieldLabel("_goods_status2","create_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdata_goods_status2["create_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "_goods_status2";
	$fdata["Label"] = GetFieldLabel("_goods_status2","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdata_goods_status2["update_at"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "_goods_status2";
	$fdata["Label"] = GetFieldLabel("_goods_status2","update_by");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdata_goods_status2["update_by"] = $fdata;


$tables_data["_goods_status2"]=&$tdata_goods_status2;
$field_labels["_goods_status2"] = &$fieldLabels_goods_status2;
$fieldToolTips["_goods_status2"] = &$fieldToolTips_goods_status2;
$placeHolders["_goods_status2"] = &$placeHolders_goods_status2;
$page_titles["_goods_status2"] = &$pageTitles_goods_status2;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["_goods_status2"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["_goods_status2"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery__goods_status2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`goods_id`,  `goods_status`,  `id`,  `sort`,  `kinsa`,  `dia`,  `zaiko`,  `detail`,  `batch_flag`,  `create_at`,  `create_by`,  `update_at`,  `update_by`";
$proto0["m_strFrom"] = "FROM `_goods_status2`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `sort`";
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
	"m_strName" => "goods_id",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "_goods_status2"
));

$proto6["m_sql"] = "`goods_id`";
$proto6["m_srcTableName"] = "_goods_status2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "goods_status",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "_goods_status2"
));

$proto8["m_sql"] = "`goods_status`";
$proto8["m_srcTableName"] = "_goods_status2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "_goods_status2"
));

$proto10["m_sql"] = "`id`";
$proto10["m_srcTableName"] = "_goods_status2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "_goods_status2"
));

$proto12["m_sql"] = "`sort`";
$proto12["m_srcTableName"] = "_goods_status2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "kinsa",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "_goods_status2"
));

$proto14["m_sql"] = "`kinsa`";
$proto14["m_srcTableName"] = "_goods_status2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "dia",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "_goods_status2"
));

$proto16["m_sql"] = "`dia`";
$proto16["m_srcTableName"] = "_goods_status2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "zaiko",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "_goods_status2"
));

$proto18["m_sql"] = "`zaiko`";
$proto18["m_srcTableName"] = "_goods_status2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "detail",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "_goods_status2"
));

$proto20["m_sql"] = "`detail`";
$proto20["m_srcTableName"] = "_goods_status2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "batch_flag",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "_goods_status2"
));

$proto22["m_sql"] = "`batch_flag`";
$proto22["m_srcTableName"] = "_goods_status2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "_goods_status2"
));

$proto24["m_sql"] = "`create_at`";
$proto24["m_srcTableName"] = "_goods_status2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "_goods_status2"
));

$proto26["m_sql"] = "`create_by`";
$proto26["m_srcTableName"] = "_goods_status2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "_goods_status2"
));

$proto28["m_sql"] = "`update_at`";
$proto28["m_srcTableName"] = "_goods_status2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "_goods_status2"
));

$proto30["m_sql"] = "`update_by`";
$proto30["m_srcTableName"] = "_goods_status2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "_goods_status2";
$proto33["m_srcTableName"] = "_goods_status2";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "goods_id";
$proto33["m_columns"][] = "goods_status";
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "status_id";
$proto33["m_columns"][] = "sort";
$proto33["m_columns"][] = "sub_id";
$proto33["m_columns"][] = "kinsa";
$proto33["m_columns"][] = "dia";
$proto33["m_columns"][] = "zaiko";
$proto33["m_columns"][] = "detail";
$proto33["m_columns"][] = "batch_flag";
$proto33["m_columns"][] = "sales_destination";
$proto33["m_columns"][] = "create_at";
$proto33["m_columns"][] = "create_by";
$proto33["m_columns"][] = "update_at";
$proto33["m_columns"][] = "update_by";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "`_goods_status2`";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "_goods_status2";
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
	"m_strName" => "sort",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "_goods_status2"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 1;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="_goods_status2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData__goods_status2 = createSqlQuery__goods_status2();


	
		;

													

$tdata_goods_status2[".sqlquery"] = $queryData__goods_status2;

include_once(getabspath("include/_goods_status2_events.php"));
$tableEvents["_goods_status2"] = new eventclass__goods_status2;
$tdata_goods_status2[".hasEvents"] = true;

?>