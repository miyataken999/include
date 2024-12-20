<?php
require_once(getabspath("classes/cipherer.php"));




$tdatavw_shuukei_st = array();
	$tdatavw_shuukei_st[".truncateText"] = true;
	$tdatavw_shuukei_st[".NumberOfChars"] = 80;
	$tdatavw_shuukei_st[".ShortName"] = "vw_shuukei_st";
	$tdatavw_shuukei_st[".OwnerID"] = "";
	$tdatavw_shuukei_st[".OriginalTable"] = "shouhin";

//	field labels
$fieldLabelsvw_shuukei_st = array();
$fieldToolTipsvw_shuukei_st = array();
$pageTitlesvw_shuukei_st = array();
$placeHoldersvw_shuukei_st = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsvw_shuukei_st["Japanese"] = array();
	$fieldToolTipsvw_shuukei_st["Japanese"] = array();
	$placeHoldersvw_shuukei_st["Japanese"] = array();
	$pageTitlesvw_shuukei_st["Japanese"] = array();
	$fieldLabelsvw_shuukei_st["Japanese"]["price"] = "合計買取額";
	$fieldToolTipsvw_shuukei_st["Japanese"]["price"] = "";
	$placeHoldersvw_shuukei_st["Japanese"]["price"] = "";
	$fieldLabelsvw_shuukei_st["Japanese"]["status"] = "商品状態";
	$fieldToolTipsvw_shuukei_st["Japanese"]["status"] = "";
	$placeHoldersvw_shuukei_st["Japanese"]["status"] = "";
	$fieldLabelsvw_shuukei_st["Japanese"]["nyuukin_price"] = "合計入金額";
	$fieldToolTipsvw_shuukei_st["Japanese"]["nyuukin_price"] = "";
	$placeHoldersvw_shuukei_st["Japanese"]["nyuukin_price"] = "";
	$fieldLabelsvw_shuukei_st["Japanese"]["count___"] = "合計商品数";
	$fieldToolTipsvw_shuukei_st["Japanese"]["count___"] = "";
	$placeHoldersvw_shuukei_st["Japanese"]["count___"] = "";
	$fieldLabelsvw_shuukei_st["Japanese"]["status_name"] = "ステータス";
	$fieldToolTipsvw_shuukei_st["Japanese"]["status_name"] = "";
	$placeHoldersvw_shuukei_st["Japanese"]["status_name"] = "";
	$fieldLabelsvw_shuukei_st["Japanese"]["sort"] = "ソート";
	$fieldToolTipsvw_shuukei_st["Japanese"]["sort"] = "";
	$placeHoldersvw_shuukei_st["Japanese"]["sort"] = "";
	$fieldLabelsvw_shuukei_st["Japanese"]["avg_nyuukin_price"] = "平均入金額";
	$fieldToolTipsvw_shuukei_st["Japanese"]["avg_nyuukin_price"] = "";
	$placeHoldersvw_shuukei_st["Japanese"]["avg_nyuukin_price"] = "";
	$fieldLabelsvw_shuukei_st["Japanese"]["avg_price"] = "平均買取額";
	$fieldToolTipsvw_shuukei_st["Japanese"]["avg_price"] = "";
	$placeHoldersvw_shuukei_st["Japanese"]["avg_price"] = "";
	$fieldLabelsvw_shuukei_st["Japanese"]["link"] = "Link";
	$fieldToolTipsvw_shuukei_st["Japanese"]["link"] = "";
	$placeHoldersvw_shuukei_st["Japanese"]["link"] = "";
	if (count($fieldToolTipsvw_shuukei_st["Japanese"]))
		$tdatavw_shuukei_st[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsvw_shuukei_st[""] = array();
	$fieldToolTipsvw_shuukei_st[""] = array();
	$placeHoldersvw_shuukei_st[""] = array();
	$pageTitlesvw_shuukei_st[""] = array();
	if (count($fieldToolTipsvw_shuukei_st[""]))
		$tdatavw_shuukei_st[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsvw_shuukei_st["English"] = array();
	$fieldToolTipsvw_shuukei_st["English"] = array();
	$placeHoldersvw_shuukei_st["English"] = array();
	$pageTitlesvw_shuukei_st["English"] = array();
	if (count($fieldToolTipsvw_shuukei_st["English"]))
		$tdatavw_shuukei_st[".isUseToolTips"] = true;
}


	$tdatavw_shuukei_st[".NCSearch"] = true;



$tdatavw_shuukei_st[".shortTableName"] = "vw_shuukei_st";
$tdatavw_shuukei_st[".nSecOptions"] = 0;
$tdatavw_shuukei_st[".recsPerRowPrint"] = 1;
$tdatavw_shuukei_st[".mainTableOwnerID"] = "";
$tdatavw_shuukei_st[".moveNext"] = 1;
$tdatavw_shuukei_st[".entityType"] = 1;

$tdatavw_shuukei_st[".strOriginalTableName"] = "shouhin";

	



$tdatavw_shuukei_st[".showAddInPopup"] = false;

$tdatavw_shuukei_st[".showEditInPopup"] = false;

$tdatavw_shuukei_st[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavw_shuukei_st[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavw_shuukei_st[".fieldsForRegister"] = array();

$tdatavw_shuukei_st[".listAjax"] = false;

	$tdatavw_shuukei_st[".audit"] = true;

	$tdatavw_shuukei_st[".locking"] = false;



$tdatavw_shuukei_st[".list"] = true;



$tdatavw_shuukei_st[".reorderRecordsByHeader"] = true;
$tdatavw_shuukei_st[".createSortByDropdown"] = true;
$tdatavw_shuukei_st[".strSortControlSettingsJSON"] = "";




$tdatavw_shuukei_st[".import"] = true;

$tdatavw_shuukei_st[".exportTo"] = true;

$tdatavw_shuukei_st[".printFriendly"] = true;


$tdatavw_shuukei_st[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatavw_shuukei_st[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatavw_shuukei_st[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatavw_shuukei_st[".searchSaving"] = false;
//

$tdatavw_shuukei_st[".showSearchPanel"] = true;
		$tdatavw_shuukei_st[".flexibleSearch"] = true;

$tdatavw_shuukei_st[".isUseAjaxSuggest"] = true;

$tdatavw_shuukei_st[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatavw_shuukei_st[".ajaxCodeSnippetAdded"] = false;

$tdatavw_shuukei_st[".buttonsAdded"] = false;

$tdatavw_shuukei_st[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavw_shuukei_st[".isUseTimeForSearch"] = false;



$tdatavw_shuukei_st[".badgeColor"] = "E07878";


$tdatavw_shuukei_st[".allSearchFields"] = array();
$tdatavw_shuukei_st[".filterFields"] = array();
$tdatavw_shuukei_st[".requiredSearchFields"] = array();

$tdatavw_shuukei_st[".allSearchFields"][] = "avg_nyuukin_price";
	$tdatavw_shuukei_st[".allSearchFields"][] = "avg_price";
	$tdatavw_shuukei_st[".allSearchFields"][] = "sort";
	$tdatavw_shuukei_st[".allSearchFields"][] = "status";
	$tdatavw_shuukei_st[".allSearchFields"][] = "status_name";
	$tdatavw_shuukei_st[".allSearchFields"][] = "count(*)";
	$tdatavw_shuukei_st[".allSearchFields"][] = "price";
	$tdatavw_shuukei_st[".allSearchFields"][] = "nyuukin_price";
	

$tdatavw_shuukei_st[".googleLikeFields"] = array();
$tdatavw_shuukei_st[".googleLikeFields"][] = "status";
$tdatavw_shuukei_st[".googleLikeFields"][] = "link";
$tdatavw_shuukei_st[".googleLikeFields"][] = "count(*)";
$tdatavw_shuukei_st[".googleLikeFields"][] = "status_name";
$tdatavw_shuukei_st[".googleLikeFields"][] = "sort";
$tdatavw_shuukei_st[".googleLikeFields"][] = "nyuukin_price";
$tdatavw_shuukei_st[".googleLikeFields"][] = "avg_nyuukin_price";
$tdatavw_shuukei_st[".googleLikeFields"][] = "price";
$tdatavw_shuukei_st[".googleLikeFields"][] = "avg_price";

$tdatavw_shuukei_st[".panelSearchFields"] = array();
$tdatavw_shuukei_st[".searchPanelOptions"] = array();
$tdatavw_shuukei_st[".panelSearchFields"][] = "status";
	$tdatavw_shuukei_st[".panelSearchFields"][] = "price";
	$tdatavw_shuukei_st[".panelSearchFields"][] = "nyuukin_price";
	
$tdatavw_shuukei_st[".advSearchFields"] = array();
$tdatavw_shuukei_st[".advSearchFields"][] = "avg_nyuukin_price";
$tdatavw_shuukei_st[".advSearchFields"][] = "avg_price";
$tdatavw_shuukei_st[".advSearchFields"][] = "sort";
$tdatavw_shuukei_st[".advSearchFields"][] = "status";
$tdatavw_shuukei_st[".advSearchFields"][] = "status_name";
$tdatavw_shuukei_st[".advSearchFields"][] = "count(*)";
$tdatavw_shuukei_st[".advSearchFields"][] = "price";
$tdatavw_shuukei_st[".advSearchFields"][] = "nyuukin_price";

$tdatavw_shuukei_st[".tableType"] = "list";

$tdatavw_shuukei_st[".printerPageOrientation"] = 0;
$tdatavw_shuukei_st[".nPrinterPageScale"] = 100;

$tdatavw_shuukei_st[".nPrinterSplitRecords"] = 40;

$tdatavw_shuukei_st[".nPrinterPDFSplitRecords"] = 40;



$tdatavw_shuukei_st[".geocodingEnabled"] = false;





$tdatavw_shuukei_st[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatavw_shuukei_st[".pageSize"] = 50;

$tdatavw_shuukei_st[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY sort";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavw_shuukei_st[".strOrderBy"] = $tstrOrderBy;

$tdatavw_shuukei_st[".orderindexes"] = array();
$tdatavw_shuukei_st[".orderindexes"][] = array(5, (1 ? "ASC" : "DESC"), "select
`sort` AS `sort`
FROM `_goods_status2`
WHERE `goods_id` = `a`.`status`
");

$tdatavw_shuukei_st[".sqlHead"] = "select `a`.`status` AS `status`,  `a`.`status` AS `link`,  count(0) AS `count(*)`,  (select `_goods_status2`.`goods_status` AS `goods_status` from `_goods_status2` where (`_goods_status2`.`goods_id` = `a`.`status`)) AS `status_name`,  (select `_goods_status2`.`sort` AS `sort` from `_goods_status2` where (`_goods_status2`.`goods_id` = `a`.`status`)) AS `sort`,  (select SUM(`a`.`nyuukin_price`)) AS `nyuukin_price`,  (select AVG(`a`.`nyuukin_price`)) AS `avg_nyuukin_price`,  (select SUM(`a`.`price`)) AS `price`,  (select AVG(`a`.`price`)) AS `avg_price`";
$tdatavw_shuukei_st[".sqlFrom"] = "from `shouhin` `a`";
$tdatavw_shuukei_st[".sqlWhereExpr"] = "";
$tdatavw_shuukei_st[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavw_shuukei_st[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavw_shuukei_st[".arrGroupsPerPage"] = $arrGPP;

$tdatavw_shuukei_st[".highlightSearchResults"] = true;

$tableKeysvw_shuukei_st = array();
$tdatavw_shuukei_st[".Keys"] = $tableKeysvw_shuukei_st;

$tdatavw_shuukei_st[".listFields"] = array();
$tdatavw_shuukei_st[".listFields"][] = "link";
$tdatavw_shuukei_st[".listFields"][] = "sort";
$tdatavw_shuukei_st[".listFields"][] = "status";
$tdatavw_shuukei_st[".listFields"][] = "status_name";
$tdatavw_shuukei_st[".listFields"][] = "count(*)";
$tdatavw_shuukei_st[".listFields"][] = "price";
$tdatavw_shuukei_st[".listFields"][] = "avg_price";
$tdatavw_shuukei_st[".listFields"][] = "nyuukin_price";
$tdatavw_shuukei_st[".listFields"][] = "avg_nyuukin_price";

$tdatavw_shuukei_st[".hideMobileList"] = array();


$tdatavw_shuukei_st[".viewFields"] = array();

$tdatavw_shuukei_st[".addFields"] = array();

$tdatavw_shuukei_st[".masterListFields"] = array();
$tdatavw_shuukei_st[".masterListFields"][] = "link";
$tdatavw_shuukei_st[".masterListFields"][] = "avg_nyuukin_price";
$tdatavw_shuukei_st[".masterListFields"][] = "avg_price";
$tdatavw_shuukei_st[".masterListFields"][] = "sort";
$tdatavw_shuukei_st[".masterListFields"][] = "status";
$tdatavw_shuukei_st[".masterListFields"][] = "status_name";
$tdatavw_shuukei_st[".masterListFields"][] = "count(*)";
$tdatavw_shuukei_st[".masterListFields"][] = "price";
$tdatavw_shuukei_st[".masterListFields"][] = "nyuukin_price";

$tdatavw_shuukei_st[".inlineAddFields"] = array();

$tdatavw_shuukei_st[".editFields"] = array();

$tdatavw_shuukei_st[".inlineEditFields"] = array();

$tdatavw_shuukei_st[".updateSelectedFields"] = array();


$tdatavw_shuukei_st[".exportFields"] = array();
$tdatavw_shuukei_st[".exportFields"][] = "avg_nyuukin_price";
$tdatavw_shuukei_st[".exportFields"][] = "avg_price";
$tdatavw_shuukei_st[".exportFields"][] = "sort";
$tdatavw_shuukei_st[".exportFields"][] = "status";
$tdatavw_shuukei_st[".exportFields"][] = "status_name";
$tdatavw_shuukei_st[".exportFields"][] = "count(*)";
$tdatavw_shuukei_st[".exportFields"][] = "price";
$tdatavw_shuukei_st[".exportFields"][] = "nyuukin_price";

$tdatavw_shuukei_st[".importFields"] = array();
$tdatavw_shuukei_st[".importFields"][] = "status";
$tdatavw_shuukei_st[".importFields"][] = "count(*)";
$tdatavw_shuukei_st[".importFields"][] = "status_name";
$tdatavw_shuukei_st[".importFields"][] = "sort";
$tdatavw_shuukei_st[".importFields"][] = "nyuukin_price";
$tdatavw_shuukei_st[".importFields"][] = "avg_nyuukin_price";
$tdatavw_shuukei_st[".importFields"][] = "price";
$tdatavw_shuukei_st[".importFields"][] = "avg_price";

$tdatavw_shuukei_st[".printFields"] = array();
$tdatavw_shuukei_st[".printFields"][] = "avg_nyuukin_price";
$tdatavw_shuukei_st[".printFields"][] = "avg_price";
$tdatavw_shuukei_st[".printFields"][] = "sort";
$tdatavw_shuukei_st[".printFields"][] = "status";
$tdatavw_shuukei_st[".printFields"][] = "status_name";
$tdatavw_shuukei_st[".printFields"][] = "count(*)";
$tdatavw_shuukei_st[".printFields"][] = "price";
$tdatavw_shuukei_st[".printFields"][] = "nyuukin_price";

//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("vw_shuukei_st","status");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`a`.`status`";

	
	
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




	$tdatavw_shuukei_st["status"] = $fdata;
//	link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "link";
	$fdata["GoodName"] = "link";
	$fdata["ownerTable"] = "shouhin";
	$fdata["Label"] = GetFieldLabel("vw_shuukei_st","link");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`a`.`status`";

	
	
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








	$tdatavw_shuukei_st["link"] = $fdata;
//	count(*)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "count(*)";
	$fdata["GoodName"] = "count___";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_shuukei_st","count___");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "count(*)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "count(0)";

	
	
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




	$tdatavw_shuukei_st["count(*)"] = $fdata;
//	status_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "status_name";
	$fdata["GoodName"] = "status_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_shuukei_st","status_name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "status_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select `_goods_status2`.`goods_status` AS `goods_status` from `_goods_status2` where (`_goods_status2`.`goods_id` = `a`.`status`))";

	
	
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




	$tdatavw_shuukei_st["status_name"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_shuukei_st","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sort";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select `_goods_status2`.`sort` AS `sort` from `_goods_status2` where (`_goods_status2`.`goods_id` = `a`.`status`))";

	
	
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




	$tdatavw_shuukei_st["sort"] = $fdata;
//	nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nyuukin_price";
	$fdata["GoodName"] = "nyuukin_price";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_shuukei_st","nyuukin_price");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select SUM(`a`.`nyuukin_price`))";

	
	
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




	$tdatavw_shuukei_st["nyuukin_price"] = $fdata;
//	avg_nyuukin_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "avg_nyuukin_price";
	$fdata["GoodName"] = "avg_nyuukin_price";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_shuukei_st","avg_nyuukin_price");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "avg_nyuukin_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select AVG(`a`.`nyuukin_price`))";

	
	
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




	$tdatavw_shuukei_st["avg_nyuukin_price"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_shuukei_st","price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select SUM(`a`.`price`))";

	
	
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




	$tdatavw_shuukei_st["price"] = $fdata;
//	avg_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "avg_price";
	$fdata["GoodName"] = "avg_price";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("vw_shuukei_st","avg_price");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "avg_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(select AVG(`a`.`price`))";

	
	
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




	$tdatavw_shuukei_st["avg_price"] = $fdata;


$tables_data["vw_shuukei_st"]=&$tdatavw_shuukei_st;
$field_labels["vw_shuukei_st"] = &$fieldLabelsvw_shuukei_st;
$fieldToolTips["vw_shuukei_st"] = &$fieldToolTipsvw_shuukei_st;
$placeHolders["vw_shuukei_st"] = &$placeHoldersvw_shuukei_st;
$page_titles["vw_shuukei_st"] = &$pageTitlesvw_shuukei_st;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vw_shuukei_st"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vw_shuukei_st"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_vw_shuukei_st()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "`a`.`status` AS `status`,  `a`.`status` AS `link`,  count(0) AS `count(*)`,  (select `_goods_status2`.`goods_status` AS `goods_status` from `_goods_status2` where (`_goods_status2`.`goods_id` = `a`.`status`)) AS `status_name`,  (select `_goods_status2`.`sort` AS `sort` from `_goods_status2` where (`_goods_status2`.`goods_id` = `a`.`status`)) AS `sort`,  (select SUM(`a`.`nyuukin_price`)) AS `nyuukin_price`,  (select AVG(`a`.`nyuukin_price`)) AS `avg_nyuukin_price`,  (select SUM(`a`.`price`)) AS `price`,  (select AVG(`a`.`price`)) AS `avg_price`";
$proto0["m_strFrom"] = "from `shouhin` `a`";
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
	"m_strName" => "status",
	"m_strTable" => "a",
	"m_srcTableName" => "vw_shuukei_st"
));

$proto6["m_sql"] = "`a`.`status`";
$proto6["m_srcTableName"] = "vw_shuukei_st";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "status";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "a",
	"m_srcTableName" => "vw_shuukei_st"
));

$proto8["m_sql"] = "`a`.`status`";
$proto8["m_srcTableName"] = "vw_shuukei_st";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "link";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_COUNT";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "0"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "count";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "count(0)";
$proto10["m_srcTableName"] = "vw_shuukei_st";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "count(*)";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_strHead"] = "select";
$proto14["m_strFieldList"] = "`_goods_status2`.`goods_status` AS `goods_status`";
$proto14["m_strFrom"] = "from `_goods_status2`";
$proto14["m_strWhere"] = "(`_goods_status2`.`goods_id` = `a`.`status`)";
$proto14["m_strOrderBy"] = "";
$proto14["m_strTail"] = "";
	
		;
			$proto14["cipherer"] = null;
$proto16=array();
$proto16["m_sql"] = "`_goods_status2`.`goods_id` = `a`.`status`";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "goods_id",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "vw_shuukei_st"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= `a`.`status`";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_where"] = $obj;
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto14["m_having"] = $obj;
$proto14["m_fieldlist"] = array();
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "goods_status",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "vw_shuukei_st"
));

$proto20["m_sql"] = "`_goods_status2`.`goods_status`";
$proto20["m_srcTableName"] = "vw_shuukei_st";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "goods_status";
$obj = new SQLFieldListItem($proto20);

$proto14["m_fieldlist"][]=$obj;
$proto14["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "_goods_status2";
$proto23["m_srcTableName"] = "vw_shuukei_st";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "goods_id";
$proto23["m_columns"][] = "goods_status";
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "status_id";
$proto23["m_columns"][] = "sort";
$proto23["m_columns"][] = "sub_id";
$proto23["m_columns"][] = "kinsa";
$proto23["m_columns"][] = "dia";
$proto23["m_columns"][] = "zaiko";
$proto23["m_columns"][] = "detail";
$proto23["m_columns"][] = "batch_flag";
$proto23["m_columns"][] = "sales_destination";
$proto23["m_columns"][] = "create_at";
$proto23["m_columns"][] = "create_by";
$proto23["m_columns"][] = "update_at";
$proto23["m_columns"][] = "update_by";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`_goods_status2`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "vw_shuukei_st";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto14["m_fromlist"][]=$obj;
$proto14["m_groupby"] = array();
$proto14["m_orderby"] = array();
$proto14["m_srcTableName"]="vw_shuukei_st";		
$obj = new SQLQuery($proto14);

$proto13["m_sql"] = "(select `_goods_status2`.`goods_status` AS `goods_status` from `_goods_status2` where (`_goods_status2`.`goods_id` = `a`.`status`))";
$proto13["m_srcTableName"] = "vw_shuukei_st";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "status_name";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_strHead"] = "select";
$proto27["m_strFieldList"] = "`_goods_status2`.`sort` AS `sort`";
$proto27["m_strFrom"] = "from `_goods_status2`";
$proto27["m_strWhere"] = "(`_goods_status2`.`goods_id` = `a`.`status`)";
$proto27["m_strOrderBy"] = "";
$proto27["m_strTail"] = "";
	
		;
			$proto27["cipherer"] = null;
$proto29=array();
$proto29["m_sql"] = "`_goods_status2`.`goods_id` = `a`.`status`";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "goods_id",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "vw_shuukei_st"
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "= `a`.`status`";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto27["m_where"] = $obj;
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto27["m_having"] = $obj;
$proto27["m_fieldlist"] = array();
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "_goods_status2",
	"m_srcTableName" => "vw_shuukei_st"
));

$proto33["m_sql"] = "`_goods_status2`.`sort`";
$proto33["m_srcTableName"] = "vw_shuukei_st";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "sort";
$obj = new SQLFieldListItem($proto33);

$proto27["m_fieldlist"][]=$obj;
$proto27["m_fromlist"] = array();
												$proto35=array();
$proto35["m_link"] = "SQLL_MAIN";
			$proto36=array();
$proto36["m_strName"] = "_goods_status2";
$proto36["m_srcTableName"] = "vw_shuukei_st";
$proto36["m_columns"] = array();
$proto36["m_columns"][] = "goods_id";
$proto36["m_columns"][] = "goods_status";
$proto36["m_columns"][] = "id";
$proto36["m_columns"][] = "status_id";
$proto36["m_columns"][] = "sort";
$proto36["m_columns"][] = "sub_id";
$proto36["m_columns"][] = "kinsa";
$proto36["m_columns"][] = "dia";
$proto36["m_columns"][] = "zaiko";
$proto36["m_columns"][] = "detail";
$proto36["m_columns"][] = "batch_flag";
$proto36["m_columns"][] = "sales_destination";
$proto36["m_columns"][] = "create_at";
$proto36["m_columns"][] = "create_by";
$proto36["m_columns"][] = "update_at";
$proto36["m_columns"][] = "update_by";
$obj = new SQLTable($proto36);

$proto35["m_table"] = $obj;
$proto35["m_sql"] = "`_goods_status2`";
$proto35["m_alias"] = "";
$proto35["m_srcTableName"] = "vw_shuukei_st";
$proto37=array();
$proto37["m_sql"] = "";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

$proto35["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto35);

$proto27["m_fromlist"][]=$obj;
$proto27["m_groupby"] = array();
$proto27["m_orderby"] = array();
$proto27["m_srcTableName"]="vw_shuukei_st";		
$obj = new SQLQuery($proto27);

$proto26["m_sql"] = "(select `_goods_status2`.`sort` AS `sort` from `_goods_status2` where (`_goods_status2`.`goods_id` = `a`.`status`))";
$proto26["m_srcTableName"] = "vw_shuukei_st";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "sort";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$proto40=array();
$proto40["m_strHead"] = "select";
$proto40["m_strFieldList"] = "SUM(`a`.`nyuukin_price`)";
$proto40["m_strFrom"] = "";
$proto40["m_strWhere"] = "";
$proto40["m_strOrderBy"] = "";
$proto40["m_strTail"] = "";
	
		;
			$proto40["cipherer"] = null;
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_where"] = $obj;
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto40["m_having"] = $obj;
$proto40["m_fieldlist"] = array();
						$proto46=array();
			$proto47=array();
$proto47["m_functiontype"] = "SQLF_SUM";
$proto47["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`a`.`nyuukin_price`"
));

$proto47["m_arguments"][]=$obj;
$proto47["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto47);

$proto46["m_sql"] = "SUM(`a`.`nyuukin_price`)";
$proto46["m_srcTableName"] = "vw_shuukei_st";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto40["m_fieldlist"][]=$obj;
$proto40["m_fromlist"] = array();
$proto40["m_groupby"] = array();
$proto40["m_orderby"] = array();
$proto40["m_srcTableName"]="vw_shuukei_st";		
$obj = new SQLQuery($proto40);

$proto39["m_sql"] = "(select SUM(`a`.`nyuukin_price`))";
$proto39["m_srcTableName"] = "vw_shuukei_st";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "nyuukin_price";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$proto50=array();
$proto50["m_strHead"] = "select";
$proto50["m_strFieldList"] = "AVG(`a`.`nyuukin_price`)";
$proto50["m_strFrom"] = "";
$proto50["m_strWhere"] = "";
$proto50["m_strOrderBy"] = "";
$proto50["m_strTail"] = "";
	
		;
			$proto50["cipherer"] = null;
$proto52=array();
$proto52["m_sql"] = "";
$proto52["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto52["m_column"]=$obj;
$proto52["m_contained"] = array();
$proto52["m_strCase"] = "";
$proto52["m_havingmode"] = false;
$proto52["m_inBrackets"] = false;
$proto52["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto52);

$proto50["m_where"] = $obj;
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto50["m_having"] = $obj;
$proto50["m_fieldlist"] = array();
						$proto56=array();
			$proto57=array();
$proto57["m_functiontype"] = "SQLF_AVG";
$proto57["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`a`.`nyuukin_price`"
));

$proto57["m_arguments"][]=$obj;
$proto57["m_strFunctionName"] = "AVG";
$obj = new SQLFunctionCall($proto57);

$proto56["m_sql"] = "AVG(`a`.`nyuukin_price`)";
$proto56["m_srcTableName"] = "vw_shuukei_st";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto50["m_fieldlist"][]=$obj;
$proto50["m_fromlist"] = array();
$proto50["m_groupby"] = array();
$proto50["m_orderby"] = array();
$proto50["m_srcTableName"]="vw_shuukei_st";		
$obj = new SQLQuery($proto50);

$proto49["m_sql"] = "(select AVG(`a`.`nyuukin_price`))";
$proto49["m_srcTableName"] = "vw_shuukei_st";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "avg_nyuukin_price";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$proto60=array();
$proto60["m_strHead"] = "select";
$proto60["m_strFieldList"] = "SUM(`a`.`price`)";
$proto60["m_strFrom"] = "";
$proto60["m_strWhere"] = "";
$proto60["m_strOrderBy"] = "";
$proto60["m_strTail"] = "";
	
		;
			$proto60["cipherer"] = null;
$proto62=array();
$proto62["m_sql"] = "";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_where"] = $obj;
$proto64=array();
$proto64["m_sql"] = "";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto60["m_having"] = $obj;
$proto60["m_fieldlist"] = array();
						$proto66=array();
			$proto67=array();
$proto67["m_functiontype"] = "SQLF_SUM";
$proto67["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`a`.`price`"
));

$proto67["m_arguments"][]=$obj;
$proto67["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto67);

$proto66["m_sql"] = "SUM(`a`.`price`)";
$proto66["m_srcTableName"] = "vw_shuukei_st";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto60["m_fieldlist"][]=$obj;
$proto60["m_fromlist"] = array();
$proto60["m_groupby"] = array();
$proto60["m_orderby"] = array();
$proto60["m_srcTableName"]="vw_shuukei_st";		
$obj = new SQLQuery($proto60);

$proto59["m_sql"] = "(select SUM(`a`.`price`))";
$proto59["m_srcTableName"] = "vw_shuukei_st";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "price";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$proto70=array();
$proto70["m_strHead"] = "select";
$proto70["m_strFieldList"] = "AVG(`a`.`price`)";
$proto70["m_strFrom"] = "";
$proto70["m_strWhere"] = "";
$proto70["m_strOrderBy"] = "";
$proto70["m_strTail"] = "";
	
		;
			$proto70["cipherer"] = null;
$proto72=array();
$proto72["m_sql"] = "";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

$proto70["m_where"] = $obj;
$proto74=array();
$proto74["m_sql"] = "";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto70["m_having"] = $obj;
$proto70["m_fieldlist"] = array();
						$proto76=array();
			$proto77=array();
$proto77["m_functiontype"] = "SQLF_AVG";
$proto77["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "`a`.`price`"
));

$proto77["m_arguments"][]=$obj;
$proto77["m_strFunctionName"] = "AVG";
$obj = new SQLFunctionCall($proto77);

$proto76["m_sql"] = "AVG(`a`.`price`)";
$proto76["m_srcTableName"] = "vw_shuukei_st";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto70["m_fieldlist"][]=$obj;
$proto70["m_fromlist"] = array();
$proto70["m_groupby"] = array();
$proto70["m_orderby"] = array();
$proto70["m_srcTableName"]="vw_shuukei_st";		
$obj = new SQLQuery($proto70);

$proto69["m_sql"] = "(select AVG(`a`.`price`))";
$proto69["m_srcTableName"] = "vw_shuukei_st";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "avg_price";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto79=array();
$proto79["m_link"] = "SQLL_MAIN";
			$proto80=array();
$proto80["m_strName"] = "shouhin";
$proto80["m_srcTableName"] = "vw_shuukei_st";
$proto80["m_columns"] = array();
$proto80["m_columns"][] = "product_id";
$proto80["m_columns"][] = "category_id";
$proto80["m_columns"][] = "goods_title";
$proto80["m_columns"][] = "title";
$proto80["m_columns"][] = "sub_category_id1";
$proto80["m_columns"][] = "ecc_id";
$proto80["m_columns"][] = "price";
$proto80["m_columns"][] = "yahoo";
$proto80["m_columns"][] = "remark";
$proto80["m_columns"][] = "sales_price";
$proto80["m_columns"][] = "description";
$proto80["m_columns"][] = "status";
$proto80["m_columns"][] = "product_num";
$proto80["m_columns"][] = "updated_at";
$proto80["m_columns"][] = "yahoo_size";
$proto80["m_columns"][] = "yahoo_title";
$proto80["m_columns"][] = "yahoo_junle";
$proto80["m_columns"][] = "yahoo_sankou_uwadai";
$proto80["m_columns"][] = "yahoo_sozai";
$proto80["m_columns"][] = "yahoo_color";
$proto80["m_columns"][] = "yahoo_kataban";
$proto80["m_columns"][] = "yahoo_condition1";
$proto80["m_columns"][] = "yahoo_condition2";
$proto80["m_columns"][] = "yahoo_fuzokuhin";
$proto80["m_columns"][] = "yahoo_sinaban";
$proto80["m_columns"][] = "yahoo_saisun_sha";
$proto80["m_columns"][] = "yahoo_sex";
$proto80["m_columns"][] = "box_id";
$proto80["m_columns"][] = "nyuukin_price";
$proto80["m_columns"][] = "updated_by";
$proto80["m_columns"][] = "raku_title";
$proto80["m_columns"][] = "raku_hyoujisaki_category2";
$proto80["m_columns"][] = "raku_hyoujisaki_category";
$proto80["m_columns"][] = "raku_hyoujisaki_category3";
$proto80["m_columns"][] = "timesta";
$proto80["m_columns"][] = "saisun_start";
$proto80["m_columns"][] = "saisun_end";
$proto80["m_columns"][] = "label_output_flag";
$proto80["m_columns"][] = "season";
$proto80["m_columns"][] = "kanryou_henbi";
$proto80["m_columns"][] = "box_sort";
$proto80["m_columns"][] = "satei_by";
$proto80["m_columns"][] = "kaitori_by";
$proto80["m_columns"][] = "comment";
$proto80["m_columns"][] = "satei_hi";
$proto80["m_columns"][] = "kaitory_hi";
$proto80["m_columns"][] = "REG_PHOTOGRAPHER";
$proto80["m_columns"][] = "REG_AUTHOR";
$proto80["m_columns"][] = "REG_PACKINGS";
$proto80["m_columns"][] = "REG_KAKOU_DATE";
$proto80["m_columns"][] = "REG_KAKOU";
$proto80["m_columns"][] = "REG_EXHIBITOR";
$proto80["m_columns"][] = "REG_PHOTOGRAPHER_DATE";
$proto80["m_columns"][] = "DT_PACKING_DATE";
$proto80["m_columns"][] = "DT_UP_DATE";
$proto80["m_columns"][] = "AWAZU_DATE";
$proto80["m_columns"][] = "AWAZU_NIN";
$proto80["m_columns"][] = "sabun_date";
$proto80["m_columns"][] = "browseid";
$proto80["m_columns"][] = "browsenode";
$proto80["m_columns"][] = "gold_property";
$proto80["m_columns"][] = "ichiba_title";
$proto80["m_columns"][] = "Gram";
$proto80["m_columns"][] = "Parent_stone";
$proto80["m_columns"][] = "Aside_stone";
$proto80["m_columns"][] = "Appraiser";
$proto80["m_columns"][] = "Remarks";
$proto80["m_columns"][] = "Destination_selling";
$proto80["m_columns"][] = "Finish";
$proto80["m_columns"][] = "Discrimination";
$proto80["m_columns"][] = "accessories";
$proto80["m_columns"][] = "priority";
$proto80["m_columns"][] = "A_storage";
$proto80["m_columns"][] = "price_per_gram";
$proto80["m_columns"][] = "price_per_parent_stone";
$proto80["m_columns"][] = "price_per_aside_stone";
$proto80["m_columns"][] = "price_secret";
$proto80["m_columns"][] = "sales_price_secret";
$proto80["m_columns"][] = "eq";
$proto80["m_columns"][] = "en";
$proto80["m_columns"][] = "line";
$proto80["m_columns"][] = "item_name";
$proto80["m_columns"][] = "handle";
$proto80["m_columns"][] = "yahoo_color_id";
$proto80["m_columns"][] = "raku_hyoujisaki_category4";
$proto80["m_columns"][] = "raku_hyoujisaki_category5";
$proto80["m_columns"][] = "raku_dir_1";
$proto80["m_columns"][] = "raku_dir_2";
$proto80["m_columns"][] = "raku_dir_3";
$proto80["m_columns"][] = "raku_dir_4";
$proto80["m_columns"][] = "raku_dir_5";
$proto80["m_columns"][] = "raku_dir_result";
$proto80["m_columns"][] = "raku_tag_result";
$proto80["m_columns"][] = "serial_number";
$proto80["m_columns"][] = "Exhibition_Date";
$proto80["m_columns"][] = "search_keyword";
$proto80["m_columns"][] = "stamp";
$proto80["m_columns"][] = "motif";
$proto80["m_columns"][] = "Setting";
$proto80["m_columns"][] = "processing";
$proto80["m_columns"][] = "Sleeve_Length";
$proto80["m_columns"][] = "length";
$proto80["m_columns"][] = "Ring_size";
$proto80["m_columns"][] = "price_for_site";
$proto80["m_columns"][] = "yahoo_category_id";
$proto80["m_columns"][] = "Qty";
$proto80["m_columns"][] = "sales_period";
$proto80["m_columns"][] = "starting_price";
$proto80["m_columns"][] = "FLAG_NO_ARRIVAL";
$proto80["m_columns"][] = "amount_of_image";
$proto80["m_columns"][] = "csv";
$proto80["m_columns"][] = "return_output_flag";
$proto80["m_columns"][] = "wasabi_flag";
$proto80["m_columns"][] = "ws_import_date";
$proto80["m_columns"][] = "logo";
$proto80["m_columns"][] = "parts";
$proto80["m_columns"][] = "country_of_origin";
$proto80["m_columns"][] = "zipper";
$proto80["m_columns"][] = "guarantee";
$proto80["m_columns"][] = "errors";
$proto80["m_columns"][] = "designer";
$proto80["m_columns"][] = "hahakai";
$proto80["m_columns"][] = "effect";
$proto80["m_columns"][] = "shape";
$proto80["m_columns"][] = "cutting_style";
$proto80["m_columns"][] = "chain_type";
$proto80["m_columns"][] = "number_of_stones";
$proto80["m_columns"][] = "amount";
$proto80["m_columns"][] = "satei_error";
$proto80["m_columns"][] = "producing_area";
$proto80["m_columns"][] = "shape_supplement";
$proto80["m_columns"][] = "side_gem";
$proto80["m_columns"][] = "product_style";
$proto80["m_columns"][] = "collar_neck_line";
$proto80["m_columns"][] = "breast";
$proto80["m_columns"][] = "silhouette";
$proto80["m_columns"][] = "sleeve";
$proto80["m_columns"][] = "unit";
$proto80["m_columns"][] = "hall_mark";
$proto80["m_columns"][] = "plate";
$proto80["m_columns"][] = "toe";
$proto80["m_columns"][] = "heel";
$proto80["m_columns"][] = "cloth";
$proto80["m_columns"][] = "serial_number_for_storage";
$proto80["m_columns"][] = "official_url";
$proto80["m_columns"][] = "main_details";
$proto80["m_columns"][] = "notation_size";
$proto80["m_columns"][] = "shoe_size_jp";
$proto80["m_columns"][] = "Eoc_chigins2_id";
$proto80["m_columns"][] = "country_of_origin_name";
$proto80["m_columns"][] = "mailingkit_id";
$proto80["m_columns"][] = "DA_COMMENTSANDTOTAL";
$proto80["m_columns"][] = "DA_WEIGHT";
$proto80["m_columns"][] = "DA_PER_CARAT";
$proto80["m_columns"][] = "DA_SHAPE";
$proto80["m_columns"][] = "DA_SELFGRES";
$proto80["m_columns"][] = "DA_ORIGINALGRADEMLIKENED";
$proto80["m_columns"][] = "DA_SUGARCANE";
$proto80["m_columns"][] = "DA_RAPA";
$proto80["m_columns"][] = "DA_INTENSITY";
$proto80["m_columns"][] = "DA_OVERTONE";
$proto80["m_columns"][] = "DA_COLOR";
$proto80["m_columns"][] = "DA_CLARITY";
$proto80["m_columns"][] = "DA_CUT";
$proto80["m_columns"][] = "DA_POLISH";
$proto80["m_columns"][] = "DA_SYMMETRY";
$proto80["m_columns"][] = "DA_FLUO";
$proto80["m_columns"][] = "DA_COLOR_FLUO";
$proto80["m_columns"][] = "DA_WIDE";
$proto80["m_columns"][] = "DA_HIGH";
$proto80["m_columns"][] = "DA_DEPTH";
$proto80["m_columns"][] = "DA_APPRAISER";
$proto80["m_columns"][] = "DA_FRAPA";
$proto80["m_columns"][] = "DA_RATE";
$proto80["m_columns"][] = "DA_UNIT_PRICE_UNPLUG";
$proto80["m_columns"][] = "DA_YOURNAME";
$proto80["m_columns"][] = "DA_RAPAB";
$proto80["m_columns"][] = "DA_GROSSPROFIT";
$proto80["m_columns"][] = "DA_INTEREST_1";
$proto80["m_columns"][] = "DA_no";
$proto80["m_columns"][] = "kinsa_flag";
$proto80["m_columns"][] = "price_for_site_flag";
$proto80["m_columns"][] = "Eoc_takuhai_id";
$proto80["m_columns"][] = "Eoc_unfinished_id";
$proto80["m_columns"][] = "Eoc_chigins_unfinished_id";
$proto80["m_columns"][] = "chohyo_id";
$proto80["m_columns"][] = "location";
$proto80["m_columns"][] = "special_instructions_1";
$proto80["m_columns"][] = "special_instructions_2";
$proto80["m_columns"][] = "special_instructions_3";
$proto80["m_columns"][] = "chohyo_seihin_flag";
$proto80["m_columns"][] = "chohyo_dia_flag";
$proto80["m_columns"][] = "chohyo_type";
$proto80["m_columns"][] = "ichiyen_flag";
$proto80["m_columns"][] = "asuraku_fuka_flag";
$proto80["m_columns"][] = "parallel_import_flag";
$proto80["m_columns"][] = "meisai_number";
$proto80["m_columns"][] = "days_keep_price";
$proto80["m_columns"][] = "initial_included";
$proto80["m_columns"][] = "novelty";
$proto80["m_columns"][] = "tentou_label_output_flag";
$proto80["m_columns"][] = "itaku_flag";
$proto80["m_columns"][] = "including_catch";
$proto80["m_columns"][] = "ichiba_meeting_month";
$proto80["m_columns"][] = "ichiba_meeting_name";
$proto80["m_columns"][] = "ichiba_color";
$proto80["m_columns"][] = "ichiba_clarity";
$proto80["m_columns"][] = "ichiba_melee_gai";
$proto80["m_columns"][] = "ichiba_lot_pieces";
$proto80["m_columns"][] = "ichiba_image";
$proto80["m_columns"][] = "ichiba_img";
$proto80["m_columns"][] = "gold_check_id";
$proto80["m_columns"][] = "ichiba_exhibition_id";
$proto80["m_columns"][] = "ichiba_exhibition_sort";
$proto80["m_columns"][] = "cost";
$proto80["m_columns"][] = "auto_price_cut_prohibited";
$proto80["m_columns"][] = "event_price";
$proto80["m_columns"][] = "identification_cost";
$proto80["m_columns"][] = "other_cost";
$proto80["m_columns"][] = "stock_quantity";
$proto80["m_columns"][] = "Eoc_trader_id_for_buy";
$proto80["m_columns"][] = "Eoc_trader_id_for_sell";
$proto80["m_columns"][] = "multiplication_rate";
$proto80["m_columns"][] = "many_product_group_id";
$proto80["m_columns"][] = "trading_sort_id";
$proto80["m_columns"][] = "many_product_group_saiban";
$proto80["m_columns"][] = "purchase_category";
$proto80["m_columns"][] = "created_at";
$proto80["m_columns"][] = "created_by";
$proto80["m_columns"][] = "manual_input_price_per_gram";
$proto80["m_columns"][] = "satei_start";
$proto80["m_columns"][] = "self_DA_INTENSITY";
$proto80["m_columns"][] = "self_DA_OVERTONE";
$proto80["m_columns"][] = "self_DA_COLOR";
$proto80["m_columns"][] = "self_DA_CLARITY";
$proto80["m_columns"][] = "self_DA_CUT";
$proto80["m_columns"][] = "self_DA_POLISH";
$proto80["m_columns"][] = "self_DA_SYMMETRY";
$proto80["m_columns"][] = "self_DA_FLUO";
$proto80["m_columns"][] = "self_DA_COLOR_FLUO";
$proto80["m_columns"][] = "self_DA_FRAPA";
$proto80["m_columns"][] = "self_DA_RATE";
$proto80["m_columns"][] = "self_multiplication_rate";
$proto80["m_columns"][] = "is_seiyaku";
$proto80["m_columns"][] = "destination_sold_out";
$proto80["m_columns"][] = "mypage_update_prohibited";
$proto80["m_columns"][] = "gold_check_scan_id";
$proto80["m_columns"][] = "buy_campaign_data_id";
$proto80["m_columns"][] = "REG_PHOTOGRAPHER_DATE_start";
$proto80["m_columns"][] = "commission";
$proto80["m_columns"][] = "addtime_gold_check_id";
$proto80["m_columns"][] = "is_recovery";
$proto80["m_columns"][] = "sales_cost";
$proto80["m_columns"][] = "mst_business_partner_id";
$proto80["m_columns"][] = "DA_GROSSPROFIT_2";
$proto80["m_columns"][] = "DA_INTEREST_2";
$proto80["m_columns"][] = "minus_weight";
$proto80["m_columns"][] = "diameter_size";
$proto80["m_columns"][] = "metal_rate_date";
$obj = new SQLTable($proto80);

$proto79["m_table"] = $obj;
$proto79["m_sql"] = "`shouhin` `a`";
$proto79["m_alias"] = "a";
$proto79["m_srcTableName"] = "vw_shuukei_st";
$proto81=array();
$proto81["m_sql"] = "";
$proto81["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto81["m_column"]=$obj;
$proto81["m_contained"] = array();
$proto81["m_strCase"] = "";
$proto81["m_havingmode"] = false;
$proto81["m_inBrackets"] = false;
$proto81["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto81);

$proto79["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto79);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto83=array();
						$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "a",
	"m_srcTableName" => "vw_shuukei_st"
));

$proto83["m_column"]=$obj;
$obj = new SQLGroupByItem($proto83);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto85=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sort"
));

$proto85["m_column"]=$obj;
$proto85["m_bAsc"] = 1;
$proto85["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto85);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="vw_shuukei_st";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vw_shuukei_st = createSqlQuery_vw_shuukei_st();


	
		;

									

$tdatavw_shuukei_st[".sqlquery"] = $queryData_vw_shuukei_st;

include_once(getabspath("include/vw_shuukei_st_events.php"));
$tableEvents["vw_shuukei_st"] = new eventclass_vw_shuukei_st;
$tdatavw_shuukei_st[".hasEvents"] = true;

?>