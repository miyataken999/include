<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabuy_campaign_data = array();
	$tdatabuy_campaign_data[".truncateText"] = true;
	$tdatabuy_campaign_data[".NumberOfChars"] = 80;
	$tdatabuy_campaign_data[".ShortName"] = "buy_campaign_data";
	$tdatabuy_campaign_data[".OwnerID"] = "";
	$tdatabuy_campaign_data[".OriginalTable"] = "buy_campaign_data";

//	field labels
$fieldLabelsbuy_campaign_data = array();
$fieldToolTipsbuy_campaign_data = array();
$pageTitlesbuy_campaign_data = array();
$placeHoldersbuy_campaign_data = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsbuy_campaign_data["Japanese"] = array();
	$fieldToolTipsbuy_campaign_data["Japanese"] = array();
	$placeHoldersbuy_campaign_data["Japanese"] = array();
	$pageTitlesbuy_campaign_data["Japanese"] = array();
	$fieldLabelsbuy_campaign_data["Japanese"]["id"] = "Id";
	$fieldToolTipsbuy_campaign_data["Japanese"]["id"] = "";
	$placeHoldersbuy_campaign_data["Japanese"]["id"] = "";
	$fieldLabelsbuy_campaign_data["Japanese"]["sort"] = "Sort";
	$fieldToolTipsbuy_campaign_data["Japanese"]["sort"] = "";
	$placeHoldersbuy_campaign_data["Japanese"]["sort"] = "";
	$fieldLabelsbuy_campaign_data["Japanese"]["name"] = "Name";
	$fieldToolTipsbuy_campaign_data["Japanese"]["name"] = "";
	$placeHoldersbuy_campaign_data["Japanese"]["name"] = "";
	$fieldLabelsbuy_campaign_data["Japanese"]["value"] = "値";
	$fieldToolTipsbuy_campaign_data["Japanese"]["value"] = "";
	$placeHoldersbuy_campaign_data["Japanese"]["value"] = "";
	$fieldLabelsbuy_campaign_data["Japanese"]["unit"] = "単位";
	$fieldToolTipsbuy_campaign_data["Japanese"]["unit"] = "";
	$placeHoldersbuy_campaign_data["Japanese"]["unit"] = "";
	$fieldLabelsbuy_campaign_data["Japanese"]["start_date"] = "開始日";
	$fieldToolTipsbuy_campaign_data["Japanese"]["start_date"] = "";
	$placeHoldersbuy_campaign_data["Japanese"]["start_date"] = "";
	$fieldLabelsbuy_campaign_data["Japanese"]["end_date"] = "終了日";
	$fieldToolTipsbuy_campaign_data["Japanese"]["end_date"] = "";
	$placeHoldersbuy_campaign_data["Japanese"]["end_date"] = "";
	$fieldLabelsbuy_campaign_data["Japanese"]["updated_by"] = "更新者";
	$fieldToolTipsbuy_campaign_data["Japanese"]["updated_by"] = "";
	$placeHoldersbuy_campaign_data["Japanese"]["updated_by"] = "";
	$fieldLabelsbuy_campaign_data["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsbuy_campaign_data["Japanese"]["updated_at"] = "";
	$placeHoldersbuy_campaign_data["Japanese"]["updated_at"] = "";
	$fieldLabelsbuy_campaign_data["Japanese"]["created_by"] = "作成者";
	$fieldToolTipsbuy_campaign_data["Japanese"]["created_by"] = "";
	$placeHoldersbuy_campaign_data["Japanese"]["created_by"] = "";
	$fieldLabelsbuy_campaign_data["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsbuy_campaign_data["Japanese"]["created_at"] = "";
	$placeHoldersbuy_campaign_data["Japanese"]["created_at"] = "";
	$fieldLabelsbuy_campaign_data["Japanese"]["maximum_amount"] = "上限金額";
	$fieldToolTipsbuy_campaign_data["Japanese"]["maximum_amount"] = "";
	$placeHoldersbuy_campaign_data["Japanese"]["maximum_amount"] = "";
	$fieldLabelsbuy_campaign_data["Japanese"]["minimum_count"] = "最低商品数";
	$fieldToolTipsbuy_campaign_data["Japanese"]["minimum_count"] = "";
	$placeHoldersbuy_campaign_data["Japanese"]["minimum_count"] = "";
	if (count($fieldToolTipsbuy_campaign_data["Japanese"]))
		$tdatabuy_campaign_data[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbuy_campaign_data[""] = array();
	$fieldToolTipsbuy_campaign_data[""] = array();
	$placeHoldersbuy_campaign_data[""] = array();
	$pageTitlesbuy_campaign_data[""] = array();
	$fieldLabelsbuy_campaign_data[""]["id"] = "Id";
	$fieldToolTipsbuy_campaign_data[""]["id"] = "";
	$placeHoldersbuy_campaign_data[""]["id"] = "";
	$fieldLabelsbuy_campaign_data[""]["sort"] = "Sort";
	$fieldToolTipsbuy_campaign_data[""]["sort"] = "";
	$placeHoldersbuy_campaign_data[""]["sort"] = "";
	$fieldLabelsbuy_campaign_data[""]["name"] = "Name";
	$fieldToolTipsbuy_campaign_data[""]["name"] = "";
	$placeHoldersbuy_campaign_data[""]["name"] = "";
	$fieldLabelsbuy_campaign_data[""]["value"] = "Value";
	$fieldToolTipsbuy_campaign_data[""]["value"] = "";
	$placeHoldersbuy_campaign_data[""]["value"] = "";
	$fieldLabelsbuy_campaign_data[""]["unit"] = "Unit";
	$fieldToolTipsbuy_campaign_data[""]["unit"] = "";
	$placeHoldersbuy_campaign_data[""]["unit"] = "";
	$fieldLabelsbuy_campaign_data[""]["start_date"] = "Start Date";
	$fieldToolTipsbuy_campaign_data[""]["start_date"] = "";
	$placeHoldersbuy_campaign_data[""]["start_date"] = "";
	$fieldLabelsbuy_campaign_data[""]["end_date"] = "End Date";
	$fieldToolTipsbuy_campaign_data[""]["end_date"] = "";
	$placeHoldersbuy_campaign_data[""]["end_date"] = "";
	$fieldLabelsbuy_campaign_data[""]["updated_by"] = "Updated By";
	$fieldToolTipsbuy_campaign_data[""]["updated_by"] = "";
	$placeHoldersbuy_campaign_data[""]["updated_by"] = "";
	$fieldLabelsbuy_campaign_data[""]["updated_at"] = "Updated At";
	$fieldToolTipsbuy_campaign_data[""]["updated_at"] = "";
	$placeHoldersbuy_campaign_data[""]["updated_at"] = "";
	$fieldLabelsbuy_campaign_data[""]["created_by"] = "Created By";
	$fieldToolTipsbuy_campaign_data[""]["created_by"] = "";
	$placeHoldersbuy_campaign_data[""]["created_by"] = "";
	$fieldLabelsbuy_campaign_data[""]["created_at"] = "Created At";
	$fieldToolTipsbuy_campaign_data[""]["created_at"] = "";
	$placeHoldersbuy_campaign_data[""]["created_at"] = "";
	$fieldLabelsbuy_campaign_data[""]["maximum_amount"] = "Maximum Amount";
	$fieldToolTipsbuy_campaign_data[""]["maximum_amount"] = "";
	$placeHoldersbuy_campaign_data[""]["maximum_amount"] = "";
	$fieldLabelsbuy_campaign_data[""]["minimum_count"] = "Minimum Count";
	$fieldToolTipsbuy_campaign_data[""]["minimum_count"] = "";
	$placeHoldersbuy_campaign_data[""]["minimum_count"] = "";
	if (count($fieldToolTipsbuy_campaign_data[""]))
		$tdatabuy_campaign_data[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsbuy_campaign_data["English"] = array();
	$fieldToolTipsbuy_campaign_data["English"] = array();
	$placeHoldersbuy_campaign_data["English"] = array();
	$pageTitlesbuy_campaign_data["English"] = array();
	$fieldLabelsbuy_campaign_data["English"]["id"] = "Id";
	$fieldToolTipsbuy_campaign_data["English"]["id"] = "";
	$placeHoldersbuy_campaign_data["English"]["id"] = "";
	$fieldLabelsbuy_campaign_data["English"]["sort"] = "Sort";
	$fieldToolTipsbuy_campaign_data["English"]["sort"] = "";
	$placeHoldersbuy_campaign_data["English"]["sort"] = "";
	$fieldLabelsbuy_campaign_data["English"]["name"] = "Name";
	$fieldToolTipsbuy_campaign_data["English"]["name"] = "";
	$placeHoldersbuy_campaign_data["English"]["name"] = "";
	$fieldLabelsbuy_campaign_data["English"]["value"] = "Value";
	$fieldToolTipsbuy_campaign_data["English"]["value"] = "";
	$placeHoldersbuy_campaign_data["English"]["value"] = "";
	$fieldLabelsbuy_campaign_data["English"]["unit"] = "Unit";
	$fieldToolTipsbuy_campaign_data["English"]["unit"] = "";
	$placeHoldersbuy_campaign_data["English"]["unit"] = "";
	$fieldLabelsbuy_campaign_data["English"]["start_date"] = "Start Date";
	$fieldToolTipsbuy_campaign_data["English"]["start_date"] = "";
	$placeHoldersbuy_campaign_data["English"]["start_date"] = "";
	$fieldLabelsbuy_campaign_data["English"]["end_date"] = "End Date";
	$fieldToolTipsbuy_campaign_data["English"]["end_date"] = "";
	$placeHoldersbuy_campaign_data["English"]["end_date"] = "";
	$fieldLabelsbuy_campaign_data["English"]["updated_by"] = "Updated By";
	$fieldToolTipsbuy_campaign_data["English"]["updated_by"] = "";
	$placeHoldersbuy_campaign_data["English"]["updated_by"] = "";
	$fieldLabelsbuy_campaign_data["English"]["updated_at"] = "Updated At";
	$fieldToolTipsbuy_campaign_data["English"]["updated_at"] = "";
	$placeHoldersbuy_campaign_data["English"]["updated_at"] = "";
	$fieldLabelsbuy_campaign_data["English"]["created_by"] = "Created By";
	$fieldToolTipsbuy_campaign_data["English"]["created_by"] = "";
	$placeHoldersbuy_campaign_data["English"]["created_by"] = "";
	$fieldLabelsbuy_campaign_data["English"]["created_at"] = "Created At";
	$fieldToolTipsbuy_campaign_data["English"]["created_at"] = "";
	$placeHoldersbuy_campaign_data["English"]["created_at"] = "";
	$fieldLabelsbuy_campaign_data["English"]["maximum_amount"] = "Maximum Amount";
	$fieldToolTipsbuy_campaign_data["English"]["maximum_amount"] = "";
	$placeHoldersbuy_campaign_data["English"]["maximum_amount"] = "";
	$fieldLabelsbuy_campaign_data["English"]["minimum_count"] = "Minimum Count";
	$fieldToolTipsbuy_campaign_data["English"]["minimum_count"] = "";
	$placeHoldersbuy_campaign_data["English"]["minimum_count"] = "";
	if (count($fieldToolTipsbuy_campaign_data["English"]))
		$tdatabuy_campaign_data[".isUseToolTips"] = true;
}


	$tdatabuy_campaign_data[".NCSearch"] = true;



$tdatabuy_campaign_data[".shortTableName"] = "buy_campaign_data";
$tdatabuy_campaign_data[".nSecOptions"] = 0;
$tdatabuy_campaign_data[".recsPerRowPrint"] = 1;
$tdatabuy_campaign_data[".mainTableOwnerID"] = "";
$tdatabuy_campaign_data[".moveNext"] = 1;
$tdatabuy_campaign_data[".entityType"] = 0;

$tdatabuy_campaign_data[".strOriginalTableName"] = "buy_campaign_data";

	



$tdatabuy_campaign_data[".showAddInPopup"] = false;

$tdatabuy_campaign_data[".showEditInPopup"] = false;

$tdatabuy_campaign_data[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabuy_campaign_data[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabuy_campaign_data[".fieldsForRegister"] = array();

$tdatabuy_campaign_data[".listAjax"] = false;

	$tdatabuy_campaign_data[".audit"] = true;

	$tdatabuy_campaign_data[".locking"] = false;



$tdatabuy_campaign_data[".list"] = true;

$tdatabuy_campaign_data[".inlineEdit"] = true;


$tdatabuy_campaign_data[".reorderRecordsByHeader"] = true;



$tdatabuy_campaign_data[".inlineAdd"] = true;

$tdatabuy_campaign_data[".import"] = true;

$tdatabuy_campaign_data[".exportTo"] = true;


$tdatabuy_campaign_data[".delete"] = true;

$tdatabuy_campaign_data[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatabuy_campaign_data[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatabuy_campaign_data[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatabuy_campaign_data[".searchSaving"] = false;
//

$tdatabuy_campaign_data[".showSearchPanel"] = true;
		$tdatabuy_campaign_data[".flexibleSearch"] = true;

$tdatabuy_campaign_data[".isUseAjaxSuggest"] = true;

$tdatabuy_campaign_data[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatabuy_campaign_data[".ajaxCodeSnippetAdded"] = false;

$tdatabuy_campaign_data[".buttonsAdded"] = false;

$tdatabuy_campaign_data[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabuy_campaign_data[".isUseTimeForSearch"] = false;




$tdatabuy_campaign_data[".detailsLinksOnList"] = "1";

$tdatabuy_campaign_data[".allSearchFields"] = array();
$tdatabuy_campaign_data[".filterFields"] = array();
$tdatabuy_campaign_data[".requiredSearchFields"] = array();

$tdatabuy_campaign_data[".allSearchFields"][] = "id";
	$tdatabuy_campaign_data[".allSearchFields"][] = "sort";
	$tdatabuy_campaign_data[".allSearchFields"][] = "name";
	$tdatabuy_campaign_data[".allSearchFields"][] = "value";
	$tdatabuy_campaign_data[".allSearchFields"][] = "unit";
	$tdatabuy_campaign_data[".allSearchFields"][] = "maximum_amount";
	$tdatabuy_campaign_data[".allSearchFields"][] = "minimum_count";
	$tdatabuy_campaign_data[".allSearchFields"][] = "start_date";
	$tdatabuy_campaign_data[".allSearchFields"][] = "end_date";
	$tdatabuy_campaign_data[".allSearchFields"][] = "updated_by";
	$tdatabuy_campaign_data[".allSearchFields"][] = "updated_at";
	$tdatabuy_campaign_data[".allSearchFields"][] = "created_by";
	$tdatabuy_campaign_data[".allSearchFields"][] = "created_at";
	

$tdatabuy_campaign_data[".googleLikeFields"] = array();
$tdatabuy_campaign_data[".googleLikeFields"][] = "id";
$tdatabuy_campaign_data[".googleLikeFields"][] = "sort";
$tdatabuy_campaign_data[".googleLikeFields"][] = "name";
$tdatabuy_campaign_data[".googleLikeFields"][] = "value";
$tdatabuy_campaign_data[".googleLikeFields"][] = "unit";
$tdatabuy_campaign_data[".googleLikeFields"][] = "start_date";
$tdatabuy_campaign_data[".googleLikeFields"][] = "end_date";
$tdatabuy_campaign_data[".googleLikeFields"][] = "updated_by";
$tdatabuy_campaign_data[".googleLikeFields"][] = "updated_at";
$tdatabuy_campaign_data[".googleLikeFields"][] = "created_by";
$tdatabuy_campaign_data[".googleLikeFields"][] = "created_at";
$tdatabuy_campaign_data[".googleLikeFields"][] = "maximum_amount";
$tdatabuy_campaign_data[".googleLikeFields"][] = "minimum_count";


$tdatabuy_campaign_data[".advSearchFields"] = array();
$tdatabuy_campaign_data[".advSearchFields"][] = "id";
$tdatabuy_campaign_data[".advSearchFields"][] = "sort";
$tdatabuy_campaign_data[".advSearchFields"][] = "name";
$tdatabuy_campaign_data[".advSearchFields"][] = "value";
$tdatabuy_campaign_data[".advSearchFields"][] = "unit";
$tdatabuy_campaign_data[".advSearchFields"][] = "maximum_amount";
$tdatabuy_campaign_data[".advSearchFields"][] = "minimum_count";
$tdatabuy_campaign_data[".advSearchFields"][] = "start_date";
$tdatabuy_campaign_data[".advSearchFields"][] = "end_date";
$tdatabuy_campaign_data[".advSearchFields"][] = "updated_by";
$tdatabuy_campaign_data[".advSearchFields"][] = "updated_at";
$tdatabuy_campaign_data[".advSearchFields"][] = "created_by";
$tdatabuy_campaign_data[".advSearchFields"][] = "created_at";

$tdatabuy_campaign_data[".tableType"] = "list";

$tdatabuy_campaign_data[".printerPageOrientation"] = 0;
$tdatabuy_campaign_data[".nPrinterPageScale"] = 100;

$tdatabuy_campaign_data[".nPrinterSplitRecords"] = 40;

$tdatabuy_campaign_data[".nPrinterPDFSplitRecords"] = 40;



$tdatabuy_campaign_data[".geocodingEnabled"] = false;





$tdatabuy_campaign_data[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabuy_campaign_data[".pageSize"] = 20;

$tdatabuy_campaign_data[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabuy_campaign_data[".strOrderBy"] = $tstrOrderBy;

$tdatabuy_campaign_data[".orderindexes"] = array();
$tdatabuy_campaign_data[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdatabuy_campaign_data[".sqlHead"] = "SELECT `id`,  `sort`,  `name`,  `value`,  `unit`,  `start_date`,  `end_date`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`,  `maximum_amount`,  `minimum_count`";
$tdatabuy_campaign_data[".sqlFrom"] = "FROM `buy_campaign_data`";
$tdatabuy_campaign_data[".sqlWhereExpr"] = "";
$tdatabuy_campaign_data[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabuy_campaign_data[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabuy_campaign_data[".arrGroupsPerPage"] = $arrGPP;

$tdatabuy_campaign_data[".highlightSearchResults"] = true;

$tableKeysbuy_campaign_data = array();
$tableKeysbuy_campaign_data[] = "id";
$tdatabuy_campaign_data[".Keys"] = $tableKeysbuy_campaign_data;

$tdatabuy_campaign_data[".listFields"] = array();
$tdatabuy_campaign_data[".listFields"][] = "id";
$tdatabuy_campaign_data[".listFields"][] = "sort";
$tdatabuy_campaign_data[".listFields"][] = "name";
$tdatabuy_campaign_data[".listFields"][] = "value";
$tdatabuy_campaign_data[".listFields"][] = "unit";
$tdatabuy_campaign_data[".listFields"][] = "maximum_amount";
$tdatabuy_campaign_data[".listFields"][] = "minimum_count";
$tdatabuy_campaign_data[".listFields"][] = "start_date";
$tdatabuy_campaign_data[".listFields"][] = "end_date";
$tdatabuy_campaign_data[".listFields"][] = "updated_by";
$tdatabuy_campaign_data[".listFields"][] = "updated_at";
$tdatabuy_campaign_data[".listFields"][] = "created_by";
$tdatabuy_campaign_data[".listFields"][] = "created_at";

$tdatabuy_campaign_data[".hideMobileList"] = array();


$tdatabuy_campaign_data[".viewFields"] = array();

$tdatabuy_campaign_data[".addFields"] = array();

$tdatabuy_campaign_data[".masterListFields"] = array();
$tdatabuy_campaign_data[".masterListFields"][] = "id";
$tdatabuy_campaign_data[".masterListFields"][] = "sort";
$tdatabuy_campaign_data[".masterListFields"][] = "name";
$tdatabuy_campaign_data[".masterListFields"][] = "value";
$tdatabuy_campaign_data[".masterListFields"][] = "unit";
$tdatabuy_campaign_data[".masterListFields"][] = "maximum_amount";
$tdatabuy_campaign_data[".masterListFields"][] = "minimum_count";
$tdatabuy_campaign_data[".masterListFields"][] = "start_date";
$tdatabuy_campaign_data[".masterListFields"][] = "end_date";
$tdatabuy_campaign_data[".masterListFields"][] = "updated_by";
$tdatabuy_campaign_data[".masterListFields"][] = "updated_at";
$tdatabuy_campaign_data[".masterListFields"][] = "created_by";
$tdatabuy_campaign_data[".masterListFields"][] = "created_at";

$tdatabuy_campaign_data[".inlineAddFields"] = array();
$tdatabuy_campaign_data[".inlineAddFields"][] = "sort";
$tdatabuy_campaign_data[".inlineAddFields"][] = "name";
$tdatabuy_campaign_data[".inlineAddFields"][] = "value";
$tdatabuy_campaign_data[".inlineAddFields"][] = "unit";
$tdatabuy_campaign_data[".inlineAddFields"][] = "maximum_amount";
$tdatabuy_campaign_data[".inlineAddFields"][] = "minimum_count";
$tdatabuy_campaign_data[".inlineAddFields"][] = "start_date";
$tdatabuy_campaign_data[".inlineAddFields"][] = "end_date";

$tdatabuy_campaign_data[".editFields"] = array();

$tdatabuy_campaign_data[".inlineEditFields"] = array();
$tdatabuy_campaign_data[".inlineEditFields"][] = "sort";
$tdatabuy_campaign_data[".inlineEditFields"][] = "name";
$tdatabuy_campaign_data[".inlineEditFields"][] = "value";
$tdatabuy_campaign_data[".inlineEditFields"][] = "unit";
$tdatabuy_campaign_data[".inlineEditFields"][] = "maximum_amount";
$tdatabuy_campaign_data[".inlineEditFields"][] = "minimum_count";
$tdatabuy_campaign_data[".inlineEditFields"][] = "start_date";
$tdatabuy_campaign_data[".inlineEditFields"][] = "end_date";

$tdatabuy_campaign_data[".updateSelectedFields"] = array();


$tdatabuy_campaign_data[".exportFields"] = array();
$tdatabuy_campaign_data[".exportFields"][] = "id";
$tdatabuy_campaign_data[".exportFields"][] = "sort";
$tdatabuy_campaign_data[".exportFields"][] = "name";
$tdatabuy_campaign_data[".exportFields"][] = "value";
$tdatabuy_campaign_data[".exportFields"][] = "unit";
$tdatabuy_campaign_data[".exportFields"][] = "maximum_amount";
$tdatabuy_campaign_data[".exportFields"][] = "minimum_count";
$tdatabuy_campaign_data[".exportFields"][] = "start_date";
$tdatabuy_campaign_data[".exportFields"][] = "end_date";
$tdatabuy_campaign_data[".exportFields"][] = "updated_by";
$tdatabuy_campaign_data[".exportFields"][] = "updated_at";
$tdatabuy_campaign_data[".exportFields"][] = "created_by";
$tdatabuy_campaign_data[".exportFields"][] = "created_at";

$tdatabuy_campaign_data[".importFields"] = array();
$tdatabuy_campaign_data[".importFields"][] = "id";
$tdatabuy_campaign_data[".importFields"][] = "sort";
$tdatabuy_campaign_data[".importFields"][] = "name";
$tdatabuy_campaign_data[".importFields"][] = "value";
$tdatabuy_campaign_data[".importFields"][] = "unit";
$tdatabuy_campaign_data[".importFields"][] = "start_date";
$tdatabuy_campaign_data[".importFields"][] = "end_date";
$tdatabuy_campaign_data[".importFields"][] = "updated_by";
$tdatabuy_campaign_data[".importFields"][] = "updated_at";
$tdatabuy_campaign_data[".importFields"][] = "created_by";
$tdatabuy_campaign_data[".importFields"][] = "created_at";
$tdatabuy_campaign_data[".importFields"][] = "maximum_amount";
$tdatabuy_campaign_data[".importFields"][] = "minimum_count";

$tdatabuy_campaign_data[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "buy_campaign_data";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data","id");
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




	$tdatabuy_campaign_data["id"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "buy_campaign_data";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data","sort");
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




	$tdatabuy_campaign_data["sort"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "buy_campaign_data";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data","name");
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




	$tdatabuy_campaign_data["name"] = $fdata;
//	value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "value";
	$fdata["GoodName"] = "value";
	$fdata["ownerTable"] = "buy_campaign_data";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data","value");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "value";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`value`";

	
	
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




	$tdatabuy_campaign_data["value"] = $fdata;
//	unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "unit";
	$fdata["GoodName"] = "unit";
	$fdata["ownerTable"] = "buy_campaign_data";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data","unit");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`unit`";

	
	
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




	$tdatabuy_campaign_data["unit"] = $fdata;
//	start_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "start_date";
	$fdata["GoodName"] = "start_date";
	$fdata["ownerTable"] = "buy_campaign_data";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data","start_date");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "start_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`start_date`";

	
	
				$fdata["FieldPermissions"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatabuy_campaign_data["start_date"] = $fdata;
//	end_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "end_date";
	$fdata["GoodName"] = "end_date";
	$fdata["ownerTable"] = "buy_campaign_data";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data","end_date");
	$fdata["FieldType"] = 135;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "end_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`end_date`";

	
	
				$fdata["FieldPermissions"] = true;

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




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatabuy_campaign_data["end_date"] = $fdata;
//	updated_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_by";
	$fdata["GoodName"] = "updated_by";
	$fdata["ownerTable"] = "buy_campaign_data";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data","updated_by");
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




	$tdatabuy_campaign_data["updated_by"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "buy_campaign_data";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data","updated_at");
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




	$tdatabuy_campaign_data["updated_at"] = $fdata;
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "buy_campaign_data";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data","created_by");
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




	$tdatabuy_campaign_data["created_by"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "buy_campaign_data";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data","created_at");
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




	$tdatabuy_campaign_data["created_at"] = $fdata;
//	maximum_amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "maximum_amount";
	$fdata["GoodName"] = "maximum_amount";
	$fdata["ownerTable"] = "buy_campaign_data";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data","maximum_amount");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "maximum_amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`maximum_amount`";

	
	
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




	$tdatabuy_campaign_data["maximum_amount"] = $fdata;
//	minimum_count
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "minimum_count";
	$fdata["GoodName"] = "minimum_count";
	$fdata["ownerTable"] = "buy_campaign_data";
	$fdata["Label"] = GetFieldLabel("buy_campaign_data","minimum_count");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "minimum_count";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`minimum_count`";

	
	
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




	$tdatabuy_campaign_data["minimum_count"] = $fdata;


$tables_data["buy_campaign_data"]=&$tdatabuy_campaign_data;
$field_labels["buy_campaign_data"] = &$fieldLabelsbuy_campaign_data;
$fieldToolTips["buy_campaign_data"] = &$fieldToolTipsbuy_campaign_data;
$placeHolders["buy_campaign_data"] = &$placeHoldersbuy_campaign_data;
$page_titles["buy_campaign_data"] = &$pageTitlesbuy_campaign_data;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["buy_campaign_data"] = array();
//	buy_campaign_data_detail
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="buy_campaign_data_detail";
		$detailsParam["dOriginalTable"] = "buy_campaign_data_detail";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "buy_campaign_data_detail";
	$detailsParam["dCaptionTable"] = GetTableCaption("buy_campaign_data_detail");
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
		
	$detailsTablesData["buy_campaign_data"][$dIndex] = $detailsParam;

	
		$detailsTablesData["buy_campaign_data"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["buy_campaign_data"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["buy_campaign_data"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["buy_campaign_data"][$dIndex]["detailKeys"][]="buy_campaign_data_id";

// tables which are master tables for current table (detail)
$masterTablesData["buy_campaign_data"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_buy_campaign_data()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `sort`,  `name`,  `value`,  `unit`,  `start_date`,  `end_date`,  `updated_by`,  `updated_at`,  `created_by`,  `created_at`,  `maximum_amount`,  `minimum_count`";
$proto0["m_strFrom"] = "FROM `buy_campaign_data`";
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
	"m_strTable" => "buy_campaign_data",
	"m_srcTableName" => "buy_campaign_data"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "buy_campaign_data";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "buy_campaign_data",
	"m_srcTableName" => "buy_campaign_data"
));

$proto8["m_sql"] = "`sort`";
$proto8["m_srcTableName"] = "buy_campaign_data";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "buy_campaign_data",
	"m_srcTableName" => "buy_campaign_data"
));

$proto10["m_sql"] = "`name`";
$proto10["m_srcTableName"] = "buy_campaign_data";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "value",
	"m_strTable" => "buy_campaign_data",
	"m_srcTableName" => "buy_campaign_data"
));

$proto12["m_sql"] = "`value`";
$proto12["m_srcTableName"] = "buy_campaign_data";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "unit",
	"m_strTable" => "buy_campaign_data",
	"m_srcTableName" => "buy_campaign_data"
));

$proto14["m_sql"] = "`unit`";
$proto14["m_srcTableName"] = "buy_campaign_data";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "start_date",
	"m_strTable" => "buy_campaign_data",
	"m_srcTableName" => "buy_campaign_data"
));

$proto16["m_sql"] = "`start_date`";
$proto16["m_srcTableName"] = "buy_campaign_data";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "end_date",
	"m_strTable" => "buy_campaign_data",
	"m_srcTableName" => "buy_campaign_data"
));

$proto18["m_sql"] = "`end_date`";
$proto18["m_srcTableName"] = "buy_campaign_data";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by",
	"m_strTable" => "buy_campaign_data",
	"m_srcTableName" => "buy_campaign_data"
));

$proto20["m_sql"] = "`updated_by`";
$proto20["m_srcTableName"] = "buy_campaign_data";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "buy_campaign_data",
	"m_srcTableName" => "buy_campaign_data"
));

$proto22["m_sql"] = "`updated_at`";
$proto22["m_srcTableName"] = "buy_campaign_data";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "buy_campaign_data",
	"m_srcTableName" => "buy_campaign_data"
));

$proto24["m_sql"] = "`created_by`";
$proto24["m_srcTableName"] = "buy_campaign_data";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "buy_campaign_data",
	"m_srcTableName" => "buy_campaign_data"
));

$proto26["m_sql"] = "`created_at`";
$proto26["m_srcTableName"] = "buy_campaign_data";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "maximum_amount",
	"m_strTable" => "buy_campaign_data",
	"m_srcTableName" => "buy_campaign_data"
));

$proto28["m_sql"] = "`maximum_amount`";
$proto28["m_srcTableName"] = "buy_campaign_data";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "minimum_count",
	"m_strTable" => "buy_campaign_data",
	"m_srcTableName" => "buy_campaign_data"
));

$proto30["m_sql"] = "`minimum_count`";
$proto30["m_srcTableName"] = "buy_campaign_data";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "buy_campaign_data";
$proto33["m_srcTableName"] = "buy_campaign_data";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "sort";
$proto33["m_columns"][] = "name";
$proto33["m_columns"][] = "value";
$proto33["m_columns"][] = "unit";
$proto33["m_columns"][] = "maximum_amount";
$proto33["m_columns"][] = "updated_by";
$proto33["m_columns"][] = "updated_at";
$proto33["m_columns"][] = "created_by";
$proto33["m_columns"][] = "created_at";
$proto33["m_columns"][] = "start_date";
$proto33["m_columns"][] = "end_date";
$proto33["m_columns"][] = "minimum_count";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "`buy_campaign_data`";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "buy_campaign_data";
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
	"m_strTable" => "buy_campaign_data",
	"m_srcTableName" => "buy_campaign_data"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 0;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="buy_campaign_data";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_buy_campaign_data = createSqlQuery_buy_campaign_data();


	
		;

													

$tdatabuy_campaign_data[".sqlquery"] = $queryData_buy_campaign_data;

include_once(getabspath("include/buy_campaign_data_events.php"));
$tableEvents["buy_campaign_data"] = new eventclass_buy_campaign_data;
$tdatabuy_campaign_data[".hasEvents"] = true;

?>