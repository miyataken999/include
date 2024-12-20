<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_gold_property = array();
	$tdatamst_gold_property[".truncateText"] = true;
	$tdatamst_gold_property[".NumberOfChars"] = 80;
	$tdatamst_gold_property[".ShortName"] = "mst_gold_property";
	$tdatamst_gold_property[".OwnerID"] = "";
	$tdatamst_gold_property[".OriginalTable"] = "mst_gold_property";

//	field labels
$fieldLabelsmst_gold_property = array();
$fieldToolTipsmst_gold_property = array();
$pageTitlesmst_gold_property = array();
$placeHoldersmst_gold_property = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_gold_property["Japanese"] = array();
	$fieldToolTipsmst_gold_property["Japanese"] = array();
	$placeHoldersmst_gold_property["Japanese"] = array();
	$pageTitlesmst_gold_property["Japanese"] = array();
	$fieldLabelsmst_gold_property["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_gold_property["Japanese"]["id"] = "";
	$placeHoldersmst_gold_property["Japanese"]["id"] = "";
	$fieldLabelsmst_gold_property["Japanese"]["val"] = "Val";
	$fieldToolTipsmst_gold_property["Japanese"]["val"] = "";
	$placeHoldersmst_gold_property["Japanese"]["val"] = "";
	$fieldLabelsmst_gold_property["Japanese"]["sort"] = "Sort";
	$fieldToolTipsmst_gold_property["Japanese"]["sort"] = "";
	$placeHoldersmst_gold_property["Japanese"]["sort"] = "";
	$fieldLabelsmst_gold_property["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsmst_gold_property["Japanese"]["update_by"] = "";
	$placeHoldersmst_gold_property["Japanese"]["update_by"] = "";
	$fieldLabelsmst_gold_property["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsmst_gold_property["Japanese"]["update_at"] = "";
	$placeHoldersmst_gold_property["Japanese"]["update_at"] = "";
	$fieldLabelsmst_gold_property["Japanese"]["created_by"] = "登録者";
	$fieldToolTipsmst_gold_property["Japanese"]["created_by"] = "";
	$placeHoldersmst_gold_property["Japanese"]["created_by"] = "";
	$fieldLabelsmst_gold_property["Japanese"]["created_at"] = "登録日";
	$fieldToolTipsmst_gold_property["Japanese"]["created_at"] = "";
	$placeHoldersmst_gold_property["Japanese"]["created_at"] = "";
	$fieldLabelsmst_gold_property["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_gold_property["Japanese"]["create_at"] = "";
	$placeHoldersmst_gold_property["Japanese"]["create_at"] = "";
	$fieldLabelsmst_gold_property["Japanese"]["mypage_flag"] = "Mypage Flag";
	$fieldToolTipsmst_gold_property["Japanese"]["mypage_flag"] = "";
	$placeHoldersmst_gold_property["Japanese"]["mypage_flag"] = "";
	$fieldLabelsmst_gold_property["Japanese"]["mst_dia_id"] = "Mst Dia Id";
	$fieldToolTipsmst_gold_property["Japanese"]["mst_dia_id"] = "";
	$placeHoldersmst_gold_property["Japanese"]["mst_dia_id"] = "";
	$fieldLabelsmst_gold_property["Japanese"]["reference_id"] = "参照先品位";
	$fieldToolTipsmst_gold_property["Japanese"]["reference_id"] = "";
	$placeHoldersmst_gold_property["Japanese"]["reference_id"] = "";
	$fieldLabelsmst_gold_property["Japanese"]["dealer_reference_id"] = "地金商参照先品位";
	$fieldToolTipsmst_gold_property["Japanese"]["dealer_reference_id"] = "";
	$placeHoldersmst_gold_property["Japanese"]["dealer_reference_id"] = "";
	$fieldLabelsmst_gold_property["Japanese"]["slip_type"] = "伝票種別";
	$fieldToolTipsmst_gold_property["Japanese"]["slip_type"] = "";
	$placeHoldersmst_gold_property["Japanese"]["slip_type"] = "";
	$fieldLabelsmst_gold_property["Japanese"]["direct_completion"] = "直接完了";
	$fieldToolTipsmst_gold_property["Japanese"]["direct_completion"] = "";
	$placeHoldersmst_gold_property["Japanese"]["direct_completion"] = "";
	if (count($fieldToolTipsmst_gold_property["Japanese"]))
		$tdatamst_gold_property[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_gold_property[""] = array();
	$fieldToolTipsmst_gold_property[""] = array();
	$placeHoldersmst_gold_property[""] = array();
	$pageTitlesmst_gold_property[""] = array();
	if (count($fieldToolTipsmst_gold_property[""]))
		$tdatamst_gold_property[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_gold_property["English"] = array();
	$fieldToolTipsmst_gold_property["English"] = array();
	$placeHoldersmst_gold_property["English"] = array();
	$pageTitlesmst_gold_property["English"] = array();
	if (count($fieldToolTipsmst_gold_property["English"]))
		$tdatamst_gold_property[".isUseToolTips"] = true;
}


	$tdatamst_gold_property[".NCSearch"] = true;



$tdatamst_gold_property[".shortTableName"] = "mst_gold_property";
$tdatamst_gold_property[".nSecOptions"] = 0;
$tdatamst_gold_property[".recsPerRowPrint"] = 1;
$tdatamst_gold_property[".mainTableOwnerID"] = "";
$tdatamst_gold_property[".moveNext"] = 1;
$tdatamst_gold_property[".entityType"] = 0;

$tdatamst_gold_property[".strOriginalTableName"] = "mst_gold_property";

	



$tdatamst_gold_property[".showAddInPopup"] = false;

$tdatamst_gold_property[".showEditInPopup"] = false;

$tdatamst_gold_property[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_gold_property[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_gold_property[".fieldsForRegister"] = array();

$tdatamst_gold_property[".listAjax"] = false;

	$tdatamst_gold_property[".audit"] = true;

	$tdatamst_gold_property[".locking"] = false;



$tdatamst_gold_property[".list"] = true;

$tdatamst_gold_property[".inlineEdit"] = true;


$tdatamst_gold_property[".reorderRecordsByHeader"] = true;



$tdatamst_gold_property[".inlineAdd"] = true;

$tdatamst_gold_property[".import"] = true;

$tdatamst_gold_property[".exportTo"] = true;


$tdatamst_gold_property[".delete"] = true;

$tdatamst_gold_property[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_gold_property[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_gold_property[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_gold_property[".searchSaving"] = false;
//

$tdatamst_gold_property[".showSearchPanel"] = true;
		$tdatamst_gold_property[".flexibleSearch"] = true;

$tdatamst_gold_property[".isUseAjaxSuggest"] = true;

$tdatamst_gold_property[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_gold_property[".ajaxCodeSnippetAdded"] = false;

$tdatamst_gold_property[".buttonsAdded"] = false;

$tdatamst_gold_property[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_gold_property[".isUseTimeForSearch"] = false;





$tdatamst_gold_property[".allSearchFields"] = array();
$tdatamst_gold_property[".filterFields"] = array();
$tdatamst_gold_property[".requiredSearchFields"] = array();

$tdatamst_gold_property[".allSearchFields"][] = "id";
	$tdatamst_gold_property[".allSearchFields"][] = "val";
	$tdatamst_gold_property[".allSearchFields"][] = "slip_type";
	$tdatamst_gold_property[".allSearchFields"][] = "direct_completion";
	$tdatamst_gold_property[".allSearchFields"][] = "dealer_reference_id";
	$tdatamst_gold_property[".allSearchFields"][] = "reference_id";
	

$tdatamst_gold_property[".googleLikeFields"] = array();
$tdatamst_gold_property[".googleLikeFields"][] = "id";
$tdatamst_gold_property[".googleLikeFields"][] = "val";
$tdatamst_gold_property[".googleLikeFields"][] = "reference_id";
$tdatamst_gold_property[".googleLikeFields"][] = "dealer_reference_id";
$tdatamst_gold_property[".googleLikeFields"][] = "slip_type";
$tdatamst_gold_property[".googleLikeFields"][] = "direct_completion";

$tdatamst_gold_property[".panelSearchFields"] = array();
$tdatamst_gold_property[".searchPanelOptions"] = array();
$tdatamst_gold_property[".panelSearchFields"][] = "id";
	$tdatamst_gold_property[".panelSearchFields"][] = "val";
	$tdatamst_gold_property[".panelSearchFields"][] = "sort";
	$tdatamst_gold_property[".panelSearchFields"][] = "update_by";
	$tdatamst_gold_property[".panelSearchFields"][] = "update_at";
	$tdatamst_gold_property[".panelSearchFields"][] = "created_by";
	$tdatamst_gold_property[".panelSearchFields"][] = "created_at";
	$tdatamst_gold_property[".panelSearchFields"][] = "create_at";
	$tdatamst_gold_property[".panelSearchFields"][] = "mypage_flag";
	$tdatamst_gold_property[".panelSearchFields"][] = "mst_dia_id";
	$tdatamst_gold_property[".panelSearchFields"][] = "slip_type";
	$tdatamst_gold_property[".panelSearchFields"][] = "direct_completion";
	$tdatamst_gold_property[".panelSearchFields"][] = "dealer_reference_id";
	$tdatamst_gold_property[".panelSearchFields"][] = "reference_id";
	
$tdatamst_gold_property[".advSearchFields"] = array();
$tdatamst_gold_property[".advSearchFields"][] = "id";
$tdatamst_gold_property[".advSearchFields"][] = "val";
$tdatamst_gold_property[".advSearchFields"][] = "slip_type";
$tdatamst_gold_property[".advSearchFields"][] = "direct_completion";
$tdatamst_gold_property[".advSearchFields"][] = "dealer_reference_id";
$tdatamst_gold_property[".advSearchFields"][] = "reference_id";

$tdatamst_gold_property[".tableType"] = "list";

$tdatamst_gold_property[".printerPageOrientation"] = 0;
$tdatamst_gold_property[".nPrinterPageScale"] = 100;

$tdatamst_gold_property[".nPrinterSplitRecords"] = 40;

$tdatamst_gold_property[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_gold_property[".geocodingEnabled"] = false;





$tdatamst_gold_property[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_gold_property[".pageSize"] = 100;

$tdatamst_gold_property[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `sort`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_gold_property[".strOrderBy"] = $tstrOrderBy;

$tdatamst_gold_property[".orderindexes"] = array();
$tdatamst_gold_property[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "`sort`");

$tdatamst_gold_property[".sqlHead"] = "SELECT `id`,  `val`,  `sort`,  `update_by`,  `update_at`,  `created_by`,  `created_at`,  `create_at`,  `mypage_flag`,  `mst_dia_id`,  `reference_id`,  `dealer_reference_id`,  `slip_type`,  `direct_completion`";
$tdatamst_gold_property[".sqlFrom"] = "FROM `mst_gold_property`";
$tdatamst_gold_property[".sqlWhereExpr"] = "";
$tdatamst_gold_property[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_gold_property[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_gold_property[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_gold_property[".highlightSearchResults"] = true;

$tableKeysmst_gold_property = array();
$tableKeysmst_gold_property[] = "id";
$tdatamst_gold_property[".Keys"] = $tableKeysmst_gold_property;

$tdatamst_gold_property[".listFields"] = array();
$tdatamst_gold_property[".listFields"][] = "id";
$tdatamst_gold_property[".listFields"][] = "direct_completion";
$tdatamst_gold_property[".listFields"][] = "val";
$tdatamst_gold_property[".listFields"][] = "sort";
$tdatamst_gold_property[".listFields"][] = "reference_id";
$tdatamst_gold_property[".listFields"][] = "dealer_reference_id";
$tdatamst_gold_property[".listFields"][] = "slip_type";
$tdatamst_gold_property[".listFields"][] = "update_by";
$tdatamst_gold_property[".listFields"][] = "update_at";
$tdatamst_gold_property[".listFields"][] = "created_by";
$tdatamst_gold_property[".listFields"][] = "created_at";
$tdatamst_gold_property[".listFields"][] = "mypage_flag";
$tdatamst_gold_property[".listFields"][] = "mst_dia_id";

$tdatamst_gold_property[".hideMobileList"] = array();


$tdatamst_gold_property[".viewFields"] = array();

$tdatamst_gold_property[".addFields"] = array();

$tdatamst_gold_property[".masterListFields"] = array();
$tdatamst_gold_property[".masterListFields"][] = "id";
$tdatamst_gold_property[".masterListFields"][] = "val";
$tdatamst_gold_property[".masterListFields"][] = "sort";
$tdatamst_gold_property[".masterListFields"][] = "update_by";
$tdatamst_gold_property[".masterListFields"][] = "update_at";
$tdatamst_gold_property[".masterListFields"][] = "created_by";
$tdatamst_gold_property[".masterListFields"][] = "created_at";
$tdatamst_gold_property[".masterListFields"][] = "create_at";
$tdatamst_gold_property[".masterListFields"][] = "mypage_flag";
$tdatamst_gold_property[".masterListFields"][] = "mst_dia_id";
$tdatamst_gold_property[".masterListFields"][] = "reference_id";
$tdatamst_gold_property[".masterListFields"][] = "dealer_reference_id";
$tdatamst_gold_property[".masterListFields"][] = "slip_type";
$tdatamst_gold_property[".masterListFields"][] = "direct_completion";

$tdatamst_gold_property[".inlineAddFields"] = array();
$tdatamst_gold_property[".inlineAddFields"][] = "direct_completion";
$tdatamst_gold_property[".inlineAddFields"][] = "val";
$tdatamst_gold_property[".inlineAddFields"][] = "sort";
$tdatamst_gold_property[".inlineAddFields"][] = "reference_id";
$tdatamst_gold_property[".inlineAddFields"][] = "dealer_reference_id";
$tdatamst_gold_property[".inlineAddFields"][] = "slip_type";
$tdatamst_gold_property[".inlineAddFields"][] = "mypage_flag";
$tdatamst_gold_property[".inlineAddFields"][] = "mst_dia_id";

$tdatamst_gold_property[".editFields"] = array();

$tdatamst_gold_property[".inlineEditFields"] = array();
$tdatamst_gold_property[".inlineEditFields"][] = "direct_completion";
$tdatamst_gold_property[".inlineEditFields"][] = "val";
$tdatamst_gold_property[".inlineEditFields"][] = "sort";
$tdatamst_gold_property[".inlineEditFields"][] = "reference_id";
$tdatamst_gold_property[".inlineEditFields"][] = "dealer_reference_id";
$tdatamst_gold_property[".inlineEditFields"][] = "slip_type";
$tdatamst_gold_property[".inlineEditFields"][] = "mypage_flag";
$tdatamst_gold_property[".inlineEditFields"][] = "mst_dia_id";

$tdatamst_gold_property[".updateSelectedFields"] = array();


$tdatamst_gold_property[".exportFields"] = array();
$tdatamst_gold_property[".exportFields"][] = "id";
$tdatamst_gold_property[".exportFields"][] = "direct_completion";
$tdatamst_gold_property[".exportFields"][] = "val";
$tdatamst_gold_property[".exportFields"][] = "sort";
$tdatamst_gold_property[".exportFields"][] = "slip_type";
$tdatamst_gold_property[".exportFields"][] = "update_by";
$tdatamst_gold_property[".exportFields"][] = "update_at";
$tdatamst_gold_property[".exportFields"][] = "created_by";
$tdatamst_gold_property[".exportFields"][] = "created_at";
$tdatamst_gold_property[".exportFields"][] = "mypage_flag";
$tdatamst_gold_property[".exportFields"][] = "mst_dia_id";
$tdatamst_gold_property[".exportFields"][] = "reference_id";
$tdatamst_gold_property[".exportFields"][] = "dealer_reference_id";

$tdatamst_gold_property[".importFields"] = array();
$tdatamst_gold_property[".importFields"][] = "id";
$tdatamst_gold_property[".importFields"][] = "val";
$tdatamst_gold_property[".importFields"][] = "sort";
$tdatamst_gold_property[".importFields"][] = "mypage_flag";
$tdatamst_gold_property[".importFields"][] = "mst_dia_id";
$tdatamst_gold_property[".importFields"][] = "reference_id";
$tdatamst_gold_property[".importFields"][] = "dealer_reference_id";
$tdatamst_gold_property[".importFields"][] = "slip_type";
$tdatamst_gold_property[".importFields"][] = "direct_completion";

$tdatamst_gold_property[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_gold_property";
	$fdata["Label"] = GetFieldLabel("mst_gold_property","id");
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




	$tdatamst_gold_property["id"] = $fdata;
//	val
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "val";
	$fdata["GoodName"] = "val";
	$fdata["ownerTable"] = "mst_gold_property";
	$fdata["Label"] = GetFieldLabel("mst_gold_property","val");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "val";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`val`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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




	$tdatamst_gold_property["val"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "mst_gold_property";
	$fdata["Label"] = GetFieldLabel("mst_gold_property","sort");
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








	$tdatamst_gold_property["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_gold_property";
	$fdata["Label"] = GetFieldLabel("mst_gold_property","update_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_gold_property["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_gold_property";
	$fdata["Label"] = GetFieldLabel("mst_gold_property","update_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_gold_property["update_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "mst_gold_property";
	$fdata["Label"] = GetFieldLabel("mst_gold_property","created_by");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_gold_property["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "mst_gold_property";
	$fdata["Label"] = GetFieldLabel("mst_gold_property","created_at");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
	
	
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








	$tdatamst_gold_property["created_at"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_gold_property";
	$fdata["Label"] = GetFieldLabel("mst_gold_property","create_at");
	$fdata["FieldType"] = 135;

	
	
	
			
	
	
	
	
	
	

	
	
	
	
		$fdata["strField"] = "create_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`create_at`";

	
	
			
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








	$tdatamst_gold_property["create_at"] = $fdata;
//	mypage_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "mypage_flag";
	$fdata["GoodName"] = "mypage_flag";
	$fdata["ownerTable"] = "mst_gold_property";
	$fdata["Label"] = GetFieldLabel("mst_gold_property","mypage_flag");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mypage_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mypage_flag`";

	
	
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








	$tdatamst_gold_property["mypage_flag"] = $fdata;
//	mst_dia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "mst_dia_id";
	$fdata["GoodName"] = "mst_dia_id";
	$fdata["ownerTable"] = "mst_gold_property";
	$fdata["Label"] = GetFieldLabel("mst_gold_property","mst_dia_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mst_dia_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_dia_id`";

	
	
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








	$tdatamst_gold_property["mst_dia_id"] = $fdata;
//	reference_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "reference_id";
	$fdata["GoodName"] = "reference_id";
	$fdata["ownerTable"] = "mst_gold_property";
	$fdata["Label"] = GetFieldLabel("mst_gold_property","reference_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "reference_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`reference_id`";

	
	
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
	$edata["LookupTable"] = "tb_gold_property_price";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(category,' ',item)";

		$edata["CustomDisplay"] = "true";

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




	$tdatamst_gold_property["reference_id"] = $fdata;
//	dealer_reference_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "dealer_reference_id";
	$fdata["GoodName"] = "dealer_reference_id";
	$fdata["ownerTable"] = "mst_gold_property";
	$fdata["Label"] = GetFieldLabel("mst_gold_property","dealer_reference_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "dealer_reference_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`dealer_reference_id`";

	
	
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
	$edata["LookupTable"] = "mst_gold_of_bullion_merchants";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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




	$tdatamst_gold_property["dealer_reference_id"] = $fdata;
//	slip_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "slip_type";
	$fdata["GoodName"] = "slip_type";
	$fdata["ownerTable"] = "mst_gold_property";
	$fdata["Label"] = GetFieldLabel("mst_gold_property","slip_type");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "slip_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`slip_type`";

	
	
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
	$edata["LookupTable"] = "mst_delivery_type";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
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




	$tdatamst_gold_property["slip_type"] = $fdata;
//	direct_completion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "direct_completion";
	$fdata["GoodName"] = "direct_completion";
	$fdata["ownerTable"] = "mst_gold_property";
	$fdata["Label"] = GetFieldLabel("mst_gold_property","direct_completion");
	$fdata["FieldType"] = 16;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "direct_completion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`direct_completion`";

	
	
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




	$tdatamst_gold_property["direct_completion"] = $fdata;


$tables_data["mst_gold_property"]=&$tdatamst_gold_property;
$field_labels["mst_gold_property"] = &$fieldLabelsmst_gold_property;
$fieldToolTips["mst_gold_property"] = &$fieldToolTipsmst_gold_property;
$placeHolders["mst_gold_property"] = &$placeHoldersmst_gold_property;
$page_titles["mst_gold_property"] = &$pageTitlesmst_gold_property;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_gold_property"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_gold_property"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_gold_property()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `val`,  `sort`,  `update_by`,  `update_at`,  `created_by`,  `created_at`,  `create_at`,  `mypage_flag`,  `mst_dia_id`,  `reference_id`,  `dealer_reference_id`,  `slip_type`,  `direct_completion`";
$proto0["m_strFrom"] = "FROM `mst_gold_property`";
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
	"m_strName" => "id",
	"m_strTable" => "mst_gold_property",
	"m_srcTableName" => "mst_gold_property"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_gold_property";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "val",
	"m_strTable" => "mst_gold_property",
	"m_srcTableName" => "mst_gold_property"
));

$proto8["m_sql"] = "`val`";
$proto8["m_srcTableName"] = "mst_gold_property";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_gold_property",
	"m_srcTableName" => "mst_gold_property"
));

$proto10["m_sql"] = "`sort`";
$proto10["m_srcTableName"] = "mst_gold_property";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_gold_property",
	"m_srcTableName" => "mst_gold_property"
));

$proto12["m_sql"] = "`update_by`";
$proto12["m_srcTableName"] = "mst_gold_property";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_gold_property",
	"m_srcTableName" => "mst_gold_property"
));

$proto14["m_sql"] = "`update_at`";
$proto14["m_srcTableName"] = "mst_gold_property";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "mst_gold_property",
	"m_srcTableName" => "mst_gold_property"
));

$proto16["m_sql"] = "`created_by`";
$proto16["m_srcTableName"] = "mst_gold_property";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "mst_gold_property",
	"m_srcTableName" => "mst_gold_property"
));

$proto18["m_sql"] = "`created_at`";
$proto18["m_srcTableName"] = "mst_gold_property";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_gold_property",
	"m_srcTableName" => "mst_gold_property"
));

$proto20["m_sql"] = "`create_at`";
$proto20["m_srcTableName"] = "mst_gold_property";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "mypage_flag",
	"m_strTable" => "mst_gold_property",
	"m_srcTableName" => "mst_gold_property"
));

$proto22["m_sql"] = "`mypage_flag`";
$proto22["m_srcTableName"] = "mst_gold_property";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "mst_dia_id",
	"m_strTable" => "mst_gold_property",
	"m_srcTableName" => "mst_gold_property"
));

$proto24["m_sql"] = "`mst_dia_id`";
$proto24["m_srcTableName"] = "mst_gold_property";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "reference_id",
	"m_strTable" => "mst_gold_property",
	"m_srcTableName" => "mst_gold_property"
));

$proto26["m_sql"] = "`reference_id`";
$proto26["m_srcTableName"] = "mst_gold_property";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "dealer_reference_id",
	"m_strTable" => "mst_gold_property",
	"m_srcTableName" => "mst_gold_property"
));

$proto28["m_sql"] = "`dealer_reference_id`";
$proto28["m_srcTableName"] = "mst_gold_property";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "slip_type",
	"m_strTable" => "mst_gold_property",
	"m_srcTableName" => "mst_gold_property"
));

$proto30["m_sql"] = "`slip_type`";
$proto30["m_srcTableName"] = "mst_gold_property";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "direct_completion",
	"m_strTable" => "mst_gold_property",
	"m_srcTableName" => "mst_gold_property"
));

$proto32["m_sql"] = "`direct_completion`";
$proto32["m_srcTableName"] = "mst_gold_property";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "mst_gold_property";
$proto35["m_srcTableName"] = "mst_gold_property";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id";
$proto35["m_columns"][] = "val";
$proto35["m_columns"][] = "sort";
$proto35["m_columns"][] = "update_by";
$proto35["m_columns"][] = "update_at";
$proto35["m_columns"][] = "created_by";
$proto35["m_columns"][] = "created_at";
$proto35["m_columns"][] = "create_at";
$proto35["m_columns"][] = "mypage_flag";
$proto35["m_columns"][] = "mst_dia_id";
$proto35["m_columns"][] = "reference_id";
$proto35["m_columns"][] = "dealer_reference_id";
$proto35["m_columns"][] = "slip_type";
$proto35["m_columns"][] = "direct_completion";
$proto35["m_columns"][] = "unit";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "`mst_gold_property`";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "mst_gold_property";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "mst_gold_property",
	"m_srcTableName" => "mst_gold_property"
));

$proto38["m_column"]=$obj;
$proto38["m_bAsc"] = 1;
$proto38["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto38);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_gold_property";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_gold_property = createSqlQuery_mst_gold_property();


	
		;

														

$tdatamst_gold_property[".sqlquery"] = $queryData_mst_gold_property;

include_once(getabspath("include/mst_gold_property_events.php"));
$tableEvents["mst_gold_property"] = new eventclass_mst_gold_property;
$tdatamst_gold_property[".hasEvents"] = true;

?>