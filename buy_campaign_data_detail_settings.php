<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabuy_campaign_data_detail = array();
	$tdatabuy_campaign_data_detail[".truncateText"] = true;
	$tdatabuy_campaign_data_detail[".NumberOfChars"] = 80;
	$tdatabuy_campaign_data_detail[".ShortName"] = "buy_campaign_data_detail";
	$tdatabuy_campaign_data_detail[".OwnerID"] = "";
	$tdatabuy_campaign_data_detail[".OriginalTable"] = "buy_campaign_data_detail";

//	field labels
$fieldLabelsbuy_campaign_data_detail = array();
$fieldToolTipsbuy_campaign_data_detail = array();
$pageTitlesbuy_campaign_data_detail = array();
$placeHoldersbuy_campaign_data_detail = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsbuy_campaign_data_detail["Japanese"] = array();
	$fieldToolTipsbuy_campaign_data_detail["Japanese"] = array();
	$placeHoldersbuy_campaign_data_detail["Japanese"] = array();
	$pageTitlesbuy_campaign_data_detail["Japanese"] = array();
	$fieldLabelsbuy_campaign_data_detail["Japanese"]["id"] = "Id";
	$fieldToolTipsbuy_campaign_data_detail["Japanese"]["id"] = "";
	$placeHoldersbuy_campaign_data_detail["Japanese"]["id"] = "";
	$fieldLabelsbuy_campaign_data_detail["Japanese"]["buy_campaign_data_id"] = "買取キャンペーンID";
	$fieldToolTipsbuy_campaign_data_detail["Japanese"]["buy_campaign_data_id"] = "";
	$placeHoldersbuy_campaign_data_detail["Japanese"]["buy_campaign_data_id"] = "";
	$fieldLabelsbuy_campaign_data_detail["Japanese"]["name"] = "Name";
	$fieldToolTipsbuy_campaign_data_detail["Japanese"]["name"] = "";
	$placeHoldersbuy_campaign_data_detail["Japanese"]["name"] = "";
	$fieldLabelsbuy_campaign_data_detail["Japanese"]["operator"] = "演算子";
	$fieldToolTipsbuy_campaign_data_detail["Japanese"]["operator"] = "";
	$placeHoldersbuy_campaign_data_detail["Japanese"]["operator"] = "";
	$fieldLabelsbuy_campaign_data_detail["Japanese"]["sort"] = "Sort";
	$fieldToolTipsbuy_campaign_data_detail["Japanese"]["sort"] = "";
	$placeHoldersbuy_campaign_data_detail["Japanese"]["sort"] = "";
	$fieldLabelsbuy_campaign_data_detail["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsbuy_campaign_data_detail["Japanese"]["update_by"] = "";
	$placeHoldersbuy_campaign_data_detail["Japanese"]["update_by"] = "";
	$fieldLabelsbuy_campaign_data_detail["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsbuy_campaign_data_detail["Japanese"]["update_at"] = "";
	$placeHoldersbuy_campaign_data_detail["Japanese"]["update_at"] = "";
	$fieldLabelsbuy_campaign_data_detail["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsbuy_campaign_data_detail["Japanese"]["create_by"] = "";
	$placeHoldersbuy_campaign_data_detail["Japanese"]["create_by"] = "";
	$fieldLabelsbuy_campaign_data_detail["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsbuy_campaign_data_detail["Japanese"]["create_at"] = "";
	$placeHoldersbuy_campaign_data_detail["Japanese"]["create_at"] = "";
	$fieldLabelsbuy_campaign_data_detail["Japanese"]["buy_campaign_data_rules_id"] = "キャンペーン条件ID";
	$fieldToolTipsbuy_campaign_data_detail["Japanese"]["buy_campaign_data_rules_id"] = "";
	$placeHoldersbuy_campaign_data_detail["Japanese"]["buy_campaign_data_rules_id"] = "";
	if (count($fieldToolTipsbuy_campaign_data_detail["Japanese"]))
		$tdatabuy_campaign_data_detail[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbuy_campaign_data_detail[""] = array();
	$fieldToolTipsbuy_campaign_data_detail[""] = array();
	$placeHoldersbuy_campaign_data_detail[""] = array();
	$pageTitlesbuy_campaign_data_detail[""] = array();
	$fieldLabelsbuy_campaign_data_detail[""]["id"] = "Id";
	$fieldToolTipsbuy_campaign_data_detail[""]["id"] = "";
	$placeHoldersbuy_campaign_data_detail[""]["id"] = "";
	$fieldLabelsbuy_campaign_data_detail[""]["buy_campaign_data_id"] = "Buy Campaign Data Id";
	$fieldToolTipsbuy_campaign_data_detail[""]["buy_campaign_data_id"] = "";
	$placeHoldersbuy_campaign_data_detail[""]["buy_campaign_data_id"] = "";
	$fieldLabelsbuy_campaign_data_detail[""]["name"] = "Name";
	$fieldToolTipsbuy_campaign_data_detail[""]["name"] = "";
	$placeHoldersbuy_campaign_data_detail[""]["name"] = "";
	$fieldLabelsbuy_campaign_data_detail[""]["operator"] = "Operator";
	$fieldToolTipsbuy_campaign_data_detail[""]["operator"] = "";
	$placeHoldersbuy_campaign_data_detail[""]["operator"] = "";
	$fieldLabelsbuy_campaign_data_detail[""]["sort"] = "Sort";
	$fieldToolTipsbuy_campaign_data_detail[""]["sort"] = "";
	$placeHoldersbuy_campaign_data_detail[""]["sort"] = "";
	$fieldLabelsbuy_campaign_data_detail[""]["update_by"] = "Update By";
	$fieldToolTipsbuy_campaign_data_detail[""]["update_by"] = "";
	$placeHoldersbuy_campaign_data_detail[""]["update_by"] = "";
	$fieldLabelsbuy_campaign_data_detail[""]["update_at"] = "Update At";
	$fieldToolTipsbuy_campaign_data_detail[""]["update_at"] = "";
	$placeHoldersbuy_campaign_data_detail[""]["update_at"] = "";
	$fieldLabelsbuy_campaign_data_detail[""]["create_by"] = "Create By";
	$fieldToolTipsbuy_campaign_data_detail[""]["create_by"] = "";
	$placeHoldersbuy_campaign_data_detail[""]["create_by"] = "";
	$fieldLabelsbuy_campaign_data_detail[""]["create_at"] = "Create At";
	$fieldToolTipsbuy_campaign_data_detail[""]["create_at"] = "";
	$placeHoldersbuy_campaign_data_detail[""]["create_at"] = "";
	$fieldLabelsbuy_campaign_data_detail[""]["buy_campaign_data_rules_id"] = "Buy Campaign Data Rules Id";
	$fieldToolTipsbuy_campaign_data_detail[""]["buy_campaign_data_rules_id"] = "";
	$placeHoldersbuy_campaign_data_detail[""]["buy_campaign_data_rules_id"] = "";
	if (count($fieldToolTipsbuy_campaign_data_detail[""]))
		$tdatabuy_campaign_data_detail[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbuy_campaign_data_detail["English"] = array();
	$fieldToolTipsbuy_campaign_data_detail["English"] = array();
	$placeHoldersbuy_campaign_data_detail["English"] = array();
	$pageTitlesbuy_campaign_data_detail["English"] = array();
	$fieldLabelsbuy_campaign_data_detail["English"]["id"] = "Id";
	$fieldToolTipsbuy_campaign_data_detail["English"]["id"] = "";
	$placeHoldersbuy_campaign_data_detail["English"]["id"] = "";
	$fieldLabelsbuy_campaign_data_detail["English"]["buy_campaign_data_id"] = "Buy Campaign Data Id";
	$fieldToolTipsbuy_campaign_data_detail["English"]["buy_campaign_data_id"] = "";
	$placeHoldersbuy_campaign_data_detail["English"]["buy_campaign_data_id"] = "";
	$fieldLabelsbuy_campaign_data_detail["English"]["name"] = "Name";
	$fieldToolTipsbuy_campaign_data_detail["English"]["name"] = "";
	$placeHoldersbuy_campaign_data_detail["English"]["name"] = "";
	$fieldLabelsbuy_campaign_data_detail["English"]["operator"] = "Operator";
	$fieldToolTipsbuy_campaign_data_detail["English"]["operator"] = "";
	$placeHoldersbuy_campaign_data_detail["English"]["operator"] = "";
	$fieldLabelsbuy_campaign_data_detail["English"]["sort"] = "Sort";
	$fieldToolTipsbuy_campaign_data_detail["English"]["sort"] = "";
	$placeHoldersbuy_campaign_data_detail["English"]["sort"] = "";
	$fieldLabelsbuy_campaign_data_detail["English"]["update_by"] = "Update By";
	$fieldToolTipsbuy_campaign_data_detail["English"]["update_by"] = "";
	$placeHoldersbuy_campaign_data_detail["English"]["update_by"] = "";
	$fieldLabelsbuy_campaign_data_detail["English"]["update_at"] = "Update At";
	$fieldToolTipsbuy_campaign_data_detail["English"]["update_at"] = "";
	$placeHoldersbuy_campaign_data_detail["English"]["update_at"] = "";
	$fieldLabelsbuy_campaign_data_detail["English"]["create_by"] = "Create By";
	$fieldToolTipsbuy_campaign_data_detail["English"]["create_by"] = "";
	$placeHoldersbuy_campaign_data_detail["English"]["create_by"] = "";
	$fieldLabelsbuy_campaign_data_detail["English"]["create_at"] = "Create At";
	$fieldToolTipsbuy_campaign_data_detail["English"]["create_at"] = "";
	$placeHoldersbuy_campaign_data_detail["English"]["create_at"] = "";
	$fieldLabelsbuy_campaign_data_detail["English"]["buy_campaign_data_rules_id"] = "Buy Campaign Data Rules Id";
	$fieldToolTipsbuy_campaign_data_detail["English"]["buy_campaign_data_rules_id"] = "";
	$placeHoldersbuy_campaign_data_detail["English"]["buy_campaign_data_rules_id"] = "";
	if (count($fieldToolTipsbuy_campaign_data_detail["English"]))
		$tdatabuy_campaign_data_detail[".isUseToolTips"] = true;
}


	$tdatabuy_campaign_data_detail[".NCSearch"] = true;



$tdatabuy_campaign_data_detail[".shortTableName"] = "buy_campaign_data_detail";
$tdatabuy_campaign_data_detail[".nSecOptions"] = 0;
$tdatabuy_campaign_data_detail[".recsPerRowPrint"] = 1;
$tdatabuy_campaign_data_detail[".mainTableOwnerID"] = "";
$tdatabuy_campaign_data_detail[".moveNext"] = 1;
$tdatabuy_campaign_data_detail[".entityType"] = 0;

$tdatabuy_campaign_data_detail[".strOriginalTableName"] = "buy_campaign_data_detail";

	



$tdatabuy_campaign_data_detail[".showAddInPopup"] = false;

$tdatabuy_campaign_data_detail[".showEditInPopup"] = false;

$tdatabuy_campaign_data_detail[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabuy_campaign_data_detail[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabuy_campaign_data_detail[".fieldsForRegister"] = array();

$tdatabuy_campaign_data_detail[".listAjax"] = false;

	$tdatabuy_campaign_data_detail[".audit"] = true;

	$tdatabuy_campaign_data_detail[".locking"] = false;



$tdatabuy_campaign_data_detail[".list"] = true;

$tdatabuy_campaign_data_detail[".inlineEdit"] = true;


$tdatabuy_campaign_data_detail[".reorderRecordsByHeader"] = true;



$tdatabuy_campaign_data_detail[".inlineAdd"] = true;

$tdatabuy_campaign_data_detail[".import"] = true;

$tdatabuy_campaign_data_detail[".exportTo"] = true;


$tdatabuy_campaign_data_detail[".delete"] = true;

$tdatabuy_campaign_data_detail[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatabuy_campaign_data_detail[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatabuy_campaign_data_detail[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatabuy_campaign_data_detail[".searchSaving"] = false;
//

$tdatabuy_campaign_data_detail[".showSearchPanel"] = true;
		$tdatabuy_campaign_data_detail[".flexibleSearch"] = true;

$tdatabuy_campaign_data_detail[".isUseAjaxSuggest"] = true;

$tdatabuy_campaign_data_detail[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdatabuy_campaign_data_detail[".ajaxCodeSnippetAdded"] = false;

$tdatabuy_campaign_data_detail[".buttonsAdded"] = false;

$tdatabuy_campaign_data_detail[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabuy_campaign_data_detail[".isUseTimeForSearch"] = false;



$tdatabuy_campaign_data_detail[".badgeColor"] = "7b68ee";

$tdatabuy_campaign_data_detail[".detailsLinksOnList"] = "1";

$tdatabuy_campaign_data_detail[".allSearchFields"] = array();
$tdatabuy_campaign_data_detail[".filterFields"] = array();
$tdatabuy_campaign_data_detail[".requiredSearchFields"] = array();

$tdatabuy_campaign_data_detail[".allSearchFields"][] = "id";
	$tdatabuy_campaign_data_detail[".allSearchFields"][] = "buy_campaign_data_id";
	$tdatabuy_campaign_data_detail[".allSearchFields"][] = "buy_campaign_data_rules_id";
	$tdatabuy_campaign_data_detail[".allSearchFields"][] = "name";
	$tdatabuy_campaign_data_detail[".allSearchFields"][] = "operator";
	$tdatabuy_campaign_data_detail[".allSearchFields"][] = "sort";
	$tdatabuy_campaign_data_detail[".allSearchFields"][] = "update_by";
	$tdatabuy_campaign_data_detail[".allSearchFields"][] = "update_at";
	$tdatabuy_campaign_data_detail[".allSearchFields"][] = "create_by";
	$tdatabuy_campaign_data_detail[".allSearchFields"][] = "create_at";
	

$tdatabuy_campaign_data_detail[".googleLikeFields"] = array();
$tdatabuy_campaign_data_detail[".googleLikeFields"][] = "id";
$tdatabuy_campaign_data_detail[".googleLikeFields"][] = "buy_campaign_data_id";
$tdatabuy_campaign_data_detail[".googleLikeFields"][] = "buy_campaign_data_rules_id";
$tdatabuy_campaign_data_detail[".googleLikeFields"][] = "name";
$tdatabuy_campaign_data_detail[".googleLikeFields"][] = "operator";
$tdatabuy_campaign_data_detail[".googleLikeFields"][] = "sort";
$tdatabuy_campaign_data_detail[".googleLikeFields"][] = "update_by";
$tdatabuy_campaign_data_detail[".googleLikeFields"][] = "update_at";
$tdatabuy_campaign_data_detail[".googleLikeFields"][] = "create_by";
$tdatabuy_campaign_data_detail[".googleLikeFields"][] = "create_at";


$tdatabuy_campaign_data_detail[".advSearchFields"] = array();
$tdatabuy_campaign_data_detail[".advSearchFields"][] = "id";
$tdatabuy_campaign_data_detail[".advSearchFields"][] = "buy_campaign_data_id";
$tdatabuy_campaign_data_detail[".advSearchFields"][] = "buy_campaign_data_rules_id";
$tdatabuy_campaign_data_detail[".advSearchFields"][] = "name";
$tdatabuy_campaign_data_detail[".advSearchFields"][] = "operator";
$tdatabuy_campaign_data_detail[".advSearchFields"][] = "sort";
$tdatabuy_campaign_data_detail[".advSearchFields"][] = "update_by";
$tdatabuy_campaign_data_detail[".advSearchFields"][] = "update_at";
$tdatabuy_campaign_data_detail[".advSearchFields"][] = "create_by";
$tdatabuy_campaign_data_detail[".advSearchFields"][] = "create_at";

$tdatabuy_campaign_data_detail[".tableType"] = "list";

$tdatabuy_campaign_data_detail[".printerPageOrientation"] = 0;
$tdatabuy_campaign_data_detail[".nPrinterPageScale"] = 100;

$tdatabuy_campaign_data_detail[".nPrinterSplitRecords"] = 40;

$tdatabuy_campaign_data_detail[".nPrinterPDFSplitRecords"] = 40;



$tdatabuy_campaign_data_detail[".geocodingEnabled"] = false;





$tdatabuy_campaign_data_detail[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabuy_campaign_data_detail[".pageSize"] = 20;

$tdatabuy_campaign_data_detail[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabuy_campaign_data_detail[".strOrderBy"] = $tstrOrderBy;

$tdatabuy_campaign_data_detail[".orderindexes"] = array();
$tdatabuy_campaign_data_detail[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatabuy_campaign_data_detail[".sqlHead"] = "SELECT `id`,  `buy_campaign_data_id`,  `buy_campaign_data_rules_id`,  `name`,  `operator`,  `sort`,  `update_by`,  `update_at`,  `create_by`,  `create_at`";
$tdatabuy_campaign_data_detail[".sqlFrom"] = "FROM `buy_campaign_data_detail`";
$tdatabuy_campaign_data_detail[".sqlWhereExpr"] = "";
$tdatabuy_campaign_data_detail[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabuy_campaign_data_detail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabuy_campaign_data_detail[".arrGroupsPerPage"] = $arrGPP;

$tdatabuy_campaign_data_detail[".highlightSearchResults"] = true;

$tableKeysbuy_campaign_data_detail = array();
$tableKeysbuy_campaign_data_detail[] = "id";
$tdatabuy_campaign_data_detail[".Keys"] = $tableKeysbuy_campaign_data_detail;

$tdatabuy_campaign_data_detail[".listFields"] = array();
$tdatabuy_campaign_data_detail[".listFields"][] = "buy_campaign_data_rules_id";
$tdatabuy_campaign_data_detail[".listFields"][] = "id";
$tdatabuy_campaign_data_detail[".listFields"][] = "buy_campaign_data_id";
$tdatabuy_campaign_data_detail[".listFields"][] = "sort";
$tdatabuy_campaign_data_detail[".listFields"][] = "name";
$tdatabuy_campaign_data_detail[".listFields"][] = "operator";
$tdatabuy_campaign_data_detail[".listFields"][] = "update_by";
$tdatabuy_campaign_data_detail[".listFields"][] = "update_at";
$tdatabuy_campaign_data_detail[".listFields"][] = "create_by";
$tdatabuy_campaign_data_detail[".listFields"][] = "create_at";

$tdatabuy_campaign_data_detail[".hideMobileList"] = array();


$tdatabuy_campaign_data_detail[".viewFields"] = array();

$tdatabuy_campaign_data_detail[".addFields"] = array();

$tdatabuy_campaign_data_detail[".masterListFields"] = array();
$tdatabuy_campaign_data_detail[".masterListFields"][] = "id";
$tdatabuy_campaign_data_detail[".masterListFields"][] = "buy_campaign_data_id";
$tdatabuy_campaign_data_detail[".masterListFields"][] = "buy_campaign_data_rules_id";
$tdatabuy_campaign_data_detail[".masterListFields"][] = "name";
$tdatabuy_campaign_data_detail[".masterListFields"][] = "operator";
$tdatabuy_campaign_data_detail[".masterListFields"][] = "sort";
$tdatabuy_campaign_data_detail[".masterListFields"][] = "update_by";
$tdatabuy_campaign_data_detail[".masterListFields"][] = "update_at";
$tdatabuy_campaign_data_detail[".masterListFields"][] = "create_by";
$tdatabuy_campaign_data_detail[".masterListFields"][] = "create_at";

$tdatabuy_campaign_data_detail[".inlineAddFields"] = array();
$tdatabuy_campaign_data_detail[".inlineAddFields"][] = "buy_campaign_data_rules_id";
$tdatabuy_campaign_data_detail[".inlineAddFields"][] = "buy_campaign_data_id";
$tdatabuy_campaign_data_detail[".inlineAddFields"][] = "sort";
$tdatabuy_campaign_data_detail[".inlineAddFields"][] = "name";
$tdatabuy_campaign_data_detail[".inlineAddFields"][] = "operator";

$tdatabuy_campaign_data_detail[".editFields"] = array();

$tdatabuy_campaign_data_detail[".inlineEditFields"] = array();
$tdatabuy_campaign_data_detail[".inlineEditFields"][] = "buy_campaign_data_rules_id";
$tdatabuy_campaign_data_detail[".inlineEditFields"][] = "buy_campaign_data_id";
$tdatabuy_campaign_data_detail[".inlineEditFields"][] = "sort";
$tdatabuy_campaign_data_detail[".inlineEditFields"][] = "name";
$tdatabuy_campaign_data_detail[".inlineEditFields"][] = "operator";

$tdatabuy_campaign_data_detail[".updateSelectedFields"] = array();


$tdatabuy_campaign_data_detail[".exportFields"] = array();
$tdatabuy_campaign_data_detail[".exportFields"][] = "id";
$tdatabuy_campaign_data_detail[".exportFields"][] = "buy_campaign_data_id";
$tdatabuy_campaign_data_detail[".exportFields"][] = "buy_campaign_data_rules_id";
$tdatabuy_campaign_data_detail[".exportFields"][] = "name";
$tdatabuy_campaign_data_detail[".exportFields"][] = "operator";
$tdatabuy_campaign_data_detail[".exportFields"][] = "sort";
$tdatabuy_campaign_data_detail[".exportFields"][] = "update_by";
$tdatabuy_campaign_data_detail[".exportFields"][] = "update_at";
$tdatabuy_campaign_data_detail[".exportFields"][] = "create_by";
$tdatabuy_campaign_data_detail[".exportFields"][] = "create_at";

$tdatabuy_campaign_data_detail[".importFields"] = array();
$tdatabuy_campaign_data_detail[".importFields"][] = "id";
$tdatabuy_campaign_data_detail[".importFields"][] = "buy_campaign_data_id";
$tdatabuy_campaign_data_detail[".importFields"][] = "buy_campaign_data_rules_id";
$tdatabuy_campaign_data_detail[".importFields"][] = "name";
$tdatabuy_campaign_data_detail[".importFields"][] = "operator";
$tdatabuy_campaign_data_detail[".importFields"][] = "sort";
$tdatabuy_campaign_data_detail[".importFields"][] = "update_by";
$tdatabuy_campaign_data_detail[".importFields"][] = "update_at";
$tdatabuy_campaign_data_detail[".importFields"][] = "create_by";
$tdatabuy_campaign_data_detail[".importFields"][] = "create_at";

$tdatabuy_campaign_data_detail[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "buy_campaign_data_detail";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_detail","id");
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




	$tdatabuy_campaign_data_detail["id"] = $fdata;
//	buy_campaign_data_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "buy_campaign_data_id";
	$fdata["GoodName"] = "buy_campaign_data_id";
	$fdata["ownerTable"] = "buy_campaign_data_detail";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_detail","buy_campaign_data_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "buy_campaign_data_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`buy_campaign_data_id`";

	
	
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




	$tdatabuy_campaign_data_detail["buy_campaign_data_id"] = $fdata;
//	buy_campaign_data_rules_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "buy_campaign_data_rules_id";
	$fdata["GoodName"] = "buy_campaign_data_rules_id";
	$fdata["ownerTable"] = "buy_campaign_data_detail";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_detail","buy_campaign_data_rules_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "buy_campaign_data_rules_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`buy_campaign_data_rules_id`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "buy_campaign_data_rules";
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




	$tdatabuy_campaign_data_detail["buy_campaign_data_rules_id"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "buy_campaign_data_detail";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_detail","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`name`";

	
	
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




	$tdatabuy_campaign_data_detail["name"] = $fdata;
//	operator
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "operator";
	$fdata["GoodName"] = "operator";
	$fdata["ownerTable"] = "buy_campaign_data_detail";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_detail","operator");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "operator";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`operator`";

	
	
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




	$tdatabuy_campaign_data_detail["operator"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "buy_campaign_data_detail";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_detail","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatabuy_campaign_data_detail["sort"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "buy_campaign_data_detail";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_detail","update_by");
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




	$tdatabuy_campaign_data_detail["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "buy_campaign_data_detail";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_detail","update_at");
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




	$tdatabuy_campaign_data_detail["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "buy_campaign_data_detail";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_detail","create_by");
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




	$tdatabuy_campaign_data_detail["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "buy_campaign_data_detail";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data_detail","create_at");
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




	$tdatabuy_campaign_data_detail["create_at"] = $fdata;


$tables_data["buy_campaign_data_detail"]=&$tdatabuy_campaign_data_detail;
$field_labels["buy_campaign_data_detail"] = &$fieldLabelsbuy_campaign_data_detail;
$fieldToolTips["buy_campaign_data_detail"] = &$fieldToolTipsbuy_campaign_data_detail;
$placeHolders["buy_campaign_data_detail"] = &$placeHoldersbuy_campaign_data_detail;
$page_titles["buy_campaign_data_detail"] = &$pageTitlesbuy_campaign_data_detail;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["buy_campaign_data_detail"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["buy_campaign_data_detail"] = array();


	
				$strOriginalDetailsTable="buy_campaign_data";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="buy_campaign_data";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "buy_campaign_data";
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
					$masterTablesData["buy_campaign_data_detail"][0] = $masterParams;
				$masterTablesData["buy_campaign_data_detail"][0]["masterKeys"] = array();
	$masterTablesData["buy_campaign_data_detail"][0]["masterKeys"][]="id";
				$masterTablesData["buy_campaign_data_detail"][0]["detailKeys"] = array();
	$masterTablesData["buy_campaign_data_detail"][0]["detailKeys"][]="buy_campaign_data_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_buy_campaign_data_detail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `buy_campaign_data_id`,  `buy_campaign_data_rules_id`,  `name`,  `operator`,  `sort`,  `update_by`,  `update_at`,  `create_by`,  `create_at`";
$proto0["m_strFrom"] = "FROM `buy_campaign_data_detail`";
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
	"m_strTable" => "buy_campaign_data_detail",
	"m_srcTableName" => "buy_campaign_data_detail"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "buy_campaign_data_detail";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "buy_campaign_data_id",
	"m_strTable" => "buy_campaign_data_detail",
	"m_srcTableName" => "buy_campaign_data_detail"
));

$proto8["m_sql"] = "`buy_campaign_data_id`";
$proto8["m_srcTableName"] = "buy_campaign_data_detail";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "buy_campaign_data_rules_id",
	"m_strTable" => "buy_campaign_data_detail",
	"m_srcTableName" => "buy_campaign_data_detail"
));

$proto10["m_sql"] = "`buy_campaign_data_rules_id`";
$proto10["m_srcTableName"] = "buy_campaign_data_detail";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "buy_campaign_data_detail",
	"m_srcTableName" => "buy_campaign_data_detail"
));

$proto12["m_sql"] = "`name`";
$proto12["m_srcTableName"] = "buy_campaign_data_detail";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "operator",
	"m_strTable" => "buy_campaign_data_detail",
	"m_srcTableName" => "buy_campaign_data_detail"
));

$proto14["m_sql"] = "`operator`";
$proto14["m_srcTableName"] = "buy_campaign_data_detail";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "buy_campaign_data_detail",
	"m_srcTableName" => "buy_campaign_data_detail"
));

$proto16["m_sql"] = "`sort`";
$proto16["m_srcTableName"] = "buy_campaign_data_detail";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "buy_campaign_data_detail",
	"m_srcTableName" => "buy_campaign_data_detail"
));

$proto18["m_sql"] = "`update_by`";
$proto18["m_srcTableName"] = "buy_campaign_data_detail";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "buy_campaign_data_detail",
	"m_srcTableName" => "buy_campaign_data_detail"
));

$proto20["m_sql"] = "`update_at`";
$proto20["m_srcTableName"] = "buy_campaign_data_detail";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "buy_campaign_data_detail",
	"m_srcTableName" => "buy_campaign_data_detail"
));

$proto22["m_sql"] = "`create_by`";
$proto22["m_srcTableName"] = "buy_campaign_data_detail";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "buy_campaign_data_detail",
	"m_srcTableName" => "buy_campaign_data_detail"
));

$proto24["m_sql"] = "`create_at`";
$proto24["m_srcTableName"] = "buy_campaign_data_detail";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "buy_campaign_data_detail";
$proto27["m_srcTableName"] = "buy_campaign_data_detail";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "id";
$proto27["m_columns"][] = "buy_campaign_data_id";
$proto27["m_columns"][] = "buy_campaign_data_rules_id";
$proto27["m_columns"][] = "name";
$proto27["m_columns"][] = "operator";
$proto27["m_columns"][] = "sort";
$proto27["m_columns"][] = "update_by";
$proto27["m_columns"][] = "update_at";
$proto27["m_columns"][] = "create_by";
$proto27["m_columns"][] = "create_at";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "`buy_campaign_data_detail`";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "buy_campaign_data_detail";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "buy_campaign_data_detail",
	"m_srcTableName" => "buy_campaign_data_detail"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="buy_campaign_data_detail";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_buy_campaign_data_detail = createSqlQuery_buy_campaign_data_detail();


	
		;

										

$tdatabuy_campaign_data_detail[".sqlquery"] = $queryData_buy_campaign_data_detail;

include_once(getabspath("include/buy_campaign_data_detail_events.php"));
$tableEvents["buy_campaign_data_detail"] = new eventclass_buy_campaign_data_detail;
$tdatabuy_campaign_data_detail[".hasEvents"] = true;

?>