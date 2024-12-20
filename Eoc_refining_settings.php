<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_refining = array();
	$tdataEoc_refining[".truncateText"] = true;
	$tdataEoc_refining[".NumberOfChars"] = 80;
	$tdataEoc_refining[".ShortName"] = "Eoc_refining";
	$tdataEoc_refining[".OwnerID"] = "";
	$tdataEoc_refining[".OriginalTable"] = "Eoc_refining";

//	field labels
$fieldLabelsEoc_refining = array();
$fieldToolTipsEoc_refining = array();
$pageTitlesEoc_refining = array();
$placeHoldersEoc_refining = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_refining["Japanese"] = array();
	$fieldToolTipsEoc_refining["Japanese"] = array();
	$placeHoldersEoc_refining["Japanese"] = array();
	$pageTitlesEoc_refining["Japanese"] = array();
	$fieldLabelsEoc_refining["Japanese"]["id"] = "取引id";
	$fieldToolTipsEoc_refining["Japanese"]["id"] = "";
	$placeHoldersEoc_refining["Japanese"]["id"] = "";
	$fieldLabelsEoc_refining["Japanese"]["ecc_id"] = "顧客SEQ";
	$fieldToolTipsEoc_refining["Japanese"]["ecc_id"] = "";
	$placeHoldersEoc_refining["Japanese"]["ecc_id"] = "";
	$fieldLabelsEoc_refining["Japanese"]["mst_refining_status_id"] = "精錬ステータス";
	$fieldToolTipsEoc_refining["Japanese"]["mst_refining_status_id"] = "";
	$placeHoldersEoc_refining["Japanese"]["mst_refining_status_id"] = "";
	$fieldLabelsEoc_refining["Japanese"]["Collection_date"] = "集荷年月日";
	$fieldToolTipsEoc_refining["Japanese"]["Collection_date"] = "";
	$placeHoldersEoc_refining["Japanese"]["Collection_date"] = "";
	$fieldLabelsEoc_refining["Japanese"]["Pickup_time_select"] = "集荷時間";
	$fieldToolTipsEoc_refining["Japanese"]["Pickup_time_select"] = "";
	$placeHoldersEoc_refining["Japanese"]["Pickup_time_select"] = "";
	$fieldLabelsEoc_refining["Japanese"]["Delivery_date"] = "配送年月日";
	$fieldToolTipsEoc_refining["Japanese"]["Delivery_date"] = "";
	$placeHoldersEoc_refining["Japanese"]["Delivery_date"] = "";
	$fieldLabelsEoc_refining["Japanese"]["Delivery_time_select"] = "配送時間";
	$fieldToolTipsEoc_refining["Japanese"]["Delivery_time_select"] = "";
	$placeHoldersEoc_refining["Japanese"]["Delivery_time_select"] = "";
	$fieldLabelsEoc_refining["Japanese"]["update_by"] = "更新者";
	$fieldToolTipsEoc_refining["Japanese"]["update_by"] = "";
	$placeHoldersEoc_refining["Japanese"]["update_by"] = "";
	$fieldLabelsEoc_refining["Japanese"]["update_at"] = "更新日";
	$fieldToolTipsEoc_refining["Japanese"]["update_at"] = "";
	$placeHoldersEoc_refining["Japanese"]["update_at"] = "";
	$fieldLabelsEoc_refining["Japanese"]["create_by"] = "作成者";
	$fieldToolTipsEoc_refining["Japanese"]["create_by"] = "";
	$placeHoldersEoc_refining["Japanese"]["create_by"] = "";
	$fieldLabelsEoc_refining["Japanese"]["create_at"] = "作成日";
	$fieldToolTipsEoc_refining["Japanese"]["create_at"] = "";
	$placeHoldersEoc_refining["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsEoc_refining["Japanese"]))
		$tdataEoc_refining[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_refining[""] = array();
	$fieldToolTipsEoc_refining[""] = array();
	$placeHoldersEoc_refining[""] = array();
	$pageTitlesEoc_refining[""] = array();
	$fieldLabelsEoc_refining[""]["id"] = "Id";
	$fieldToolTipsEoc_refining[""]["id"] = "";
	$placeHoldersEoc_refining[""]["id"] = "";
	$fieldLabelsEoc_refining[""]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_refining[""]["ecc_id"] = "";
	$placeHoldersEoc_refining[""]["ecc_id"] = "";
	$fieldLabelsEoc_refining[""]["mst_refining_status_id"] = "Mst Refining Status Id";
	$fieldToolTipsEoc_refining[""]["mst_refining_status_id"] = "";
	$placeHoldersEoc_refining[""]["mst_refining_status_id"] = "";
	$fieldLabelsEoc_refining[""]["Collection_date"] = "Collection Date";
	$fieldToolTipsEoc_refining[""]["Collection_date"] = "";
	$placeHoldersEoc_refining[""]["Collection_date"] = "";
	$fieldLabelsEoc_refining[""]["Pickup_time_select"] = "Pickup Time Select";
	$fieldToolTipsEoc_refining[""]["Pickup_time_select"] = "";
	$placeHoldersEoc_refining[""]["Pickup_time_select"] = "";
	$fieldLabelsEoc_refining[""]["Delivery_date"] = "Delivery Date";
	$fieldToolTipsEoc_refining[""]["Delivery_date"] = "";
	$placeHoldersEoc_refining[""]["Delivery_date"] = "";
	$fieldLabelsEoc_refining[""]["Delivery_time_select"] = "Delivery Time Select";
	$fieldToolTipsEoc_refining[""]["Delivery_time_select"] = "";
	$placeHoldersEoc_refining[""]["Delivery_time_select"] = "";
	$fieldLabelsEoc_refining[""]["update_by"] = "Update By";
	$fieldToolTipsEoc_refining[""]["update_by"] = "";
	$placeHoldersEoc_refining[""]["update_by"] = "";
	$fieldLabelsEoc_refining[""]["update_at"] = "Update At";
	$fieldToolTipsEoc_refining[""]["update_at"] = "";
	$placeHoldersEoc_refining[""]["update_at"] = "";
	$fieldLabelsEoc_refining[""]["create_by"] = "Create By";
	$fieldToolTipsEoc_refining[""]["create_by"] = "";
	$placeHoldersEoc_refining[""]["create_by"] = "";
	$fieldLabelsEoc_refining[""]["create_at"] = "Create At";
	$fieldToolTipsEoc_refining[""]["create_at"] = "";
	$placeHoldersEoc_refining[""]["create_at"] = "";
	if (count($fieldToolTipsEoc_refining[""]))
		$tdataEoc_refining[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_refining["English"] = array();
	$fieldToolTipsEoc_refining["English"] = array();
	$placeHoldersEoc_refining["English"] = array();
	$pageTitlesEoc_refining["English"] = array();
	$fieldLabelsEoc_refining["English"]["id"] = "Id";
	$fieldToolTipsEoc_refining["English"]["id"] = "";
	$placeHoldersEoc_refining["English"]["id"] = "";
	$fieldLabelsEoc_refining["English"]["ecc_id"] = "Ecc Id";
	$fieldToolTipsEoc_refining["English"]["ecc_id"] = "";
	$placeHoldersEoc_refining["English"]["ecc_id"] = "";
	$fieldLabelsEoc_refining["English"]["mst_refining_status_id"] = "Mst Refining Status Id";
	$fieldToolTipsEoc_refining["English"]["mst_refining_status_id"] = "";
	$placeHoldersEoc_refining["English"]["mst_refining_status_id"] = "";
	$fieldLabelsEoc_refining["English"]["Collection_date"] = "Collection Date";
	$fieldToolTipsEoc_refining["English"]["Collection_date"] = "";
	$placeHoldersEoc_refining["English"]["Collection_date"] = "";
	$fieldLabelsEoc_refining["English"]["Pickup_time_select"] = "Pickup Time Select";
	$fieldToolTipsEoc_refining["English"]["Pickup_time_select"] = "";
	$placeHoldersEoc_refining["English"]["Pickup_time_select"] = "";
	$fieldLabelsEoc_refining["English"]["Delivery_date"] = "Delivery Date";
	$fieldToolTipsEoc_refining["English"]["Delivery_date"] = "";
	$placeHoldersEoc_refining["English"]["Delivery_date"] = "";
	$fieldLabelsEoc_refining["English"]["Delivery_time_select"] = "Delivery Time Select";
	$fieldToolTipsEoc_refining["English"]["Delivery_time_select"] = "";
	$placeHoldersEoc_refining["English"]["Delivery_time_select"] = "";
	$fieldLabelsEoc_refining["English"]["update_by"] = "Update By";
	$fieldToolTipsEoc_refining["English"]["update_by"] = "";
	$placeHoldersEoc_refining["English"]["update_by"] = "";
	$fieldLabelsEoc_refining["English"]["update_at"] = "Update At";
	$fieldToolTipsEoc_refining["English"]["update_at"] = "";
	$placeHoldersEoc_refining["English"]["update_at"] = "";
	$fieldLabelsEoc_refining["English"]["create_by"] = "Create By";
	$fieldToolTipsEoc_refining["English"]["create_by"] = "";
	$placeHoldersEoc_refining["English"]["create_by"] = "";
	$fieldLabelsEoc_refining["English"]["create_at"] = "Create At";
	$fieldToolTipsEoc_refining["English"]["create_at"] = "";
	$placeHoldersEoc_refining["English"]["create_at"] = "";
	if (count($fieldToolTipsEoc_refining["English"]))
		$tdataEoc_refining[".isUseToolTips"] = true;
}


	$tdataEoc_refining[".NCSearch"] = true;



$tdataEoc_refining[".shortTableName"] = "Eoc_refining";
$tdataEoc_refining[".nSecOptions"] = 0;
$tdataEoc_refining[".recsPerRowPrint"] = 1;
$tdataEoc_refining[".mainTableOwnerID"] = "";
$tdataEoc_refining[".moveNext"] = 1;
$tdataEoc_refining[".entityType"] = 0;

$tdataEoc_refining[".strOriginalTableName"] = "Eoc_refining";

	



$tdataEoc_refining[".showAddInPopup"] = false;

$tdataEoc_refining[".showEditInPopup"] = false;

$tdataEoc_refining[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_refining[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_refining[".fieldsForRegister"] = array();

$tdataEoc_refining[".listAjax"] = false;

	$tdataEoc_refining[".audit"] = true;

	$tdataEoc_refining[".locking"] = false;



$tdataEoc_refining[".list"] = true;

$tdataEoc_refining[".inlineEdit"] = true;


$tdataEoc_refining[".reorderRecordsByHeader"] = true;



$tdataEoc_refining[".inlineAdd"] = true;

$tdataEoc_refining[".import"] = true;

$tdataEoc_refining[".exportTo"] = true;


$tdataEoc_refining[".delete"] = true;

$tdataEoc_refining[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_refining[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_refining[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_refining[".searchSaving"] = false;
//

$tdataEoc_refining[".showSearchPanel"] = true;
		$tdataEoc_refining[".flexibleSearch"] = true;

$tdataEoc_refining[".isUseAjaxSuggest"] = true;

$tdataEoc_refining[".rowHighlite"] = true;



																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								

$tdataEoc_refining[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_refining[".buttonsAdded"] = false;

$tdataEoc_refining[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_refining[".isUseTimeForSearch"] = false;



$tdataEoc_refining[".badgeColor"] = "cd5c5c";

$tdataEoc_refining[".detailsLinksOnList"] = "1";

$tdataEoc_refining[".allSearchFields"] = array();
$tdataEoc_refining[".filterFields"] = array();
$tdataEoc_refining[".requiredSearchFields"] = array();

$tdataEoc_refining[".allSearchFields"][] = "id";
	$tdataEoc_refining[".allSearchFields"][] = "ecc_id";
	$tdataEoc_refining[".allSearchFields"][] = "mst_refining_status_id";
	$tdataEoc_refining[".allSearchFields"][] = "Collection_date";
	$tdataEoc_refining[".allSearchFields"][] = "Pickup_time_select";
	$tdataEoc_refining[".allSearchFields"][] = "Delivery_date";
	$tdataEoc_refining[".allSearchFields"][] = "Delivery_time_select";
	$tdataEoc_refining[".allSearchFields"][] = "update_by";
	$tdataEoc_refining[".allSearchFields"][] = "update_at";
	$tdataEoc_refining[".allSearchFields"][] = "create_by";
	$tdataEoc_refining[".allSearchFields"][] = "create_at";
	

$tdataEoc_refining[".googleLikeFields"] = array();
$tdataEoc_refining[".googleLikeFields"][] = "id";
$tdataEoc_refining[".googleLikeFields"][] = "ecc_id";
$tdataEoc_refining[".googleLikeFields"][] = "mst_refining_status_id";
$tdataEoc_refining[".googleLikeFields"][] = "Collection_date";
$tdataEoc_refining[".googleLikeFields"][] = "Pickup_time_select";
$tdataEoc_refining[".googleLikeFields"][] = "Delivery_date";
$tdataEoc_refining[".googleLikeFields"][] = "Delivery_time_select";
$tdataEoc_refining[".googleLikeFields"][] = "update_by";
$tdataEoc_refining[".googleLikeFields"][] = "update_at";
$tdataEoc_refining[".googleLikeFields"][] = "create_by";
$tdataEoc_refining[".googleLikeFields"][] = "create_at";


$tdataEoc_refining[".advSearchFields"] = array();
$tdataEoc_refining[".advSearchFields"][] = "id";
$tdataEoc_refining[".advSearchFields"][] = "ecc_id";
$tdataEoc_refining[".advSearchFields"][] = "mst_refining_status_id";
$tdataEoc_refining[".advSearchFields"][] = "Collection_date";
$tdataEoc_refining[".advSearchFields"][] = "Pickup_time_select";
$tdataEoc_refining[".advSearchFields"][] = "Delivery_date";
$tdataEoc_refining[".advSearchFields"][] = "Delivery_time_select";
$tdataEoc_refining[".advSearchFields"][] = "update_by";
$tdataEoc_refining[".advSearchFields"][] = "update_at";
$tdataEoc_refining[".advSearchFields"][] = "create_by";
$tdataEoc_refining[".advSearchFields"][] = "create_at";

$tdataEoc_refining[".tableType"] = "list";

$tdataEoc_refining[".printerPageOrientation"] = 0;
$tdataEoc_refining[".nPrinterPageScale"] = 100;

$tdataEoc_refining[".nPrinterSplitRecords"] = 40;

$tdataEoc_refining[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_refining[".geocodingEnabled"] = false;





$tdataEoc_refining[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_refining[".pageSize"] = 20;

$tdataEoc_refining[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_refining[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_refining[".orderindexes"] = array();

$tdataEoc_refining[".sqlHead"] = "SELECT `id`,  	`ecc_id`,  	`mst_refining_status_id`,  	`Collection_date`,  	`Pickup_time_select`,  	`Delivery_date`,  	`Delivery_time_select`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$tdataEoc_refining[".sqlFrom"] = "FROM `Eoc_refining`";
$tdataEoc_refining[".sqlWhereExpr"] = "";
$tdataEoc_refining[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_refining[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_refining[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_refining[".highlightSearchResults"] = true;

$tableKeysEoc_refining = array();
$tableKeysEoc_refining[] = "id";
$tdataEoc_refining[".Keys"] = $tableKeysEoc_refining;

$tdataEoc_refining[".listFields"] = array();
$tdataEoc_refining[".listFields"][] = "id";
$tdataEoc_refining[".listFields"][] = "ecc_id";
$tdataEoc_refining[".listFields"][] = "mst_refining_status_id";
$tdataEoc_refining[".listFields"][] = "Collection_date";
$tdataEoc_refining[".listFields"][] = "Pickup_time_select";
$tdataEoc_refining[".listFields"][] = "Delivery_date";
$tdataEoc_refining[".listFields"][] = "Delivery_time_select";
$tdataEoc_refining[".listFields"][] = "update_by";
$tdataEoc_refining[".listFields"][] = "update_at";
$tdataEoc_refining[".listFields"][] = "create_by";
$tdataEoc_refining[".listFields"][] = "create_at";

$tdataEoc_refining[".hideMobileList"] = array();


$tdataEoc_refining[".viewFields"] = array();

$tdataEoc_refining[".addFields"] = array();

$tdataEoc_refining[".masterListFields"] = array();
$tdataEoc_refining[".masterListFields"][] = "id";
$tdataEoc_refining[".masterListFields"][] = "ecc_id";
$tdataEoc_refining[".masterListFields"][] = "mst_refining_status_id";
$tdataEoc_refining[".masterListFields"][] = "Collection_date";
$tdataEoc_refining[".masterListFields"][] = "Pickup_time_select";
$tdataEoc_refining[".masterListFields"][] = "Delivery_date";
$tdataEoc_refining[".masterListFields"][] = "Delivery_time_select";
$tdataEoc_refining[".masterListFields"][] = "update_by";
$tdataEoc_refining[".masterListFields"][] = "update_at";
$tdataEoc_refining[".masterListFields"][] = "create_by";
$tdataEoc_refining[".masterListFields"][] = "create_at";

$tdataEoc_refining[".inlineAddFields"] = array();
$tdataEoc_refining[".inlineAddFields"][] = "mst_refining_status_id";
$tdataEoc_refining[".inlineAddFields"][] = "Collection_date";
$tdataEoc_refining[".inlineAddFields"][] = "Pickup_time_select";
$tdataEoc_refining[".inlineAddFields"][] = "Delivery_date";
$tdataEoc_refining[".inlineAddFields"][] = "Delivery_time_select";

$tdataEoc_refining[".editFields"] = array();

$tdataEoc_refining[".inlineEditFields"] = array();
$tdataEoc_refining[".inlineEditFields"][] = "mst_refining_status_id";
$tdataEoc_refining[".inlineEditFields"][] = "Collection_date";
$tdataEoc_refining[".inlineEditFields"][] = "Pickup_time_select";
$tdataEoc_refining[".inlineEditFields"][] = "Delivery_date";
$tdataEoc_refining[".inlineEditFields"][] = "Delivery_time_select";

$tdataEoc_refining[".updateSelectedFields"] = array();


$tdataEoc_refining[".exportFields"] = array();
$tdataEoc_refining[".exportFields"][] = "id";
$tdataEoc_refining[".exportFields"][] = "ecc_id";
$tdataEoc_refining[".exportFields"][] = "mst_refining_status_id";
$tdataEoc_refining[".exportFields"][] = "Collection_date";
$tdataEoc_refining[".exportFields"][] = "Pickup_time_select";
$tdataEoc_refining[".exportFields"][] = "Delivery_date";
$tdataEoc_refining[".exportFields"][] = "Delivery_time_select";
$tdataEoc_refining[".exportFields"][] = "update_by";
$tdataEoc_refining[".exportFields"][] = "update_at";
$tdataEoc_refining[".exportFields"][] = "create_by";
$tdataEoc_refining[".exportFields"][] = "create_at";

$tdataEoc_refining[".importFields"] = array();
$tdataEoc_refining[".importFields"][] = "id";
$tdataEoc_refining[".importFields"][] = "ecc_id";
$tdataEoc_refining[".importFields"][] = "mst_refining_status_id";
$tdataEoc_refining[".importFields"][] = "Collection_date";
$tdataEoc_refining[".importFields"][] = "Pickup_time_select";
$tdataEoc_refining[".importFields"][] = "Delivery_date";
$tdataEoc_refining[".importFields"][] = "Delivery_time_select";
$tdataEoc_refining[".importFields"][] = "update_by";
$tdataEoc_refining[".importFields"][] = "update_at";
$tdataEoc_refining[".importFields"][] = "create_by";
$tdataEoc_refining[".importFields"][] = "create_at";

$tdataEoc_refining[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_refining";
	$fdata["Label"] = GetFieldLabel("Eoc_refining","id");
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




	$tdataEoc_refining["id"] = $fdata;
//	ecc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ecc_id";
	$fdata["GoodName"] = "ecc_id";
	$fdata["ownerTable"] = "Eoc_refining";
	$fdata["Label"] = GetFieldLabel("Eoc_refining","ecc_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdataEoc_refining["ecc_id"] = $fdata;
//	mst_refining_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mst_refining_status_id";
	$fdata["GoodName"] = "mst_refining_status_id";
	$fdata["ownerTable"] = "Eoc_refining";
	$fdata["Label"] = GetFieldLabel("Eoc_refining","mst_refining_status_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mst_refining_status_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`mst_refining_status_id`";

	
	
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
	$edata["LookupTable"] = "mst_refining_status";
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




	$tdataEoc_refining["mst_refining_status_id"] = $fdata;
//	Collection_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Collection_date";
	$fdata["GoodName"] = "Collection_date";
	$fdata["ownerTable"] = "Eoc_refining";
	$fdata["Label"] = GetFieldLabel("Eoc_refining","Collection_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Collection_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Collection_date`";

	
	
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




	$tdataEoc_refining["Collection_date"] = $fdata;
//	Pickup_time_select
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Pickup_time_select";
	$fdata["GoodName"] = "Pickup_time_select";
	$fdata["ownerTable"] = "Eoc_refining";
	$fdata["Label"] = GetFieldLabel("Eoc_refining","Pickup_time_select");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Pickup_time_select";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Pickup_time_select`";

	
	
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
	$edata["LookupValues"][] = "午前";
	$edata["LookupValues"][] = "午後";
	$edata["LookupValues"][] = "";

	
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




	$tdataEoc_refining["Pickup_time_select"] = $fdata;
//	Delivery_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Delivery_date";
	$fdata["GoodName"] = "Delivery_date";
	$fdata["ownerTable"] = "Eoc_refining";
	$fdata["Label"] = GetFieldLabel("Eoc_refining","Delivery_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Delivery_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Delivery_date`";

	
	
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




	$tdataEoc_refining["Delivery_date"] = $fdata;
//	Delivery_time_select
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Delivery_time_select";
	$fdata["GoodName"] = "Delivery_time_select";
	$fdata["ownerTable"] = "Eoc_refining";
	$fdata["Label"] = GetFieldLabel("Eoc_refining","Delivery_time_select");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
		$fdata["bInlineEdit"] = true;

	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Delivery_time_select";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Delivery_time_select`";

	
	
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
	$edata["LookupValues"][] = "午前";
	$edata["LookupValues"][] = "午後";

	
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




	$tdataEoc_refining["Delivery_time_select"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "Eoc_refining";
	$fdata["Label"] = GetFieldLabel("Eoc_refining","update_by");
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




	$tdataEoc_refining["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "Eoc_refining";
	$fdata["Label"] = GetFieldLabel("Eoc_refining","update_at");
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




	$tdataEoc_refining["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "Eoc_refining";
	$fdata["Label"] = GetFieldLabel("Eoc_refining","create_by");
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




	$tdataEoc_refining["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "Eoc_refining";
	$fdata["Label"] = GetFieldLabel("Eoc_refining","create_at");
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




	$tdataEoc_refining["create_at"] = $fdata;


$tables_data["Eoc_refining"]=&$tdataEoc_refining;
$field_labels["Eoc_refining"] = &$fieldLabelsEoc_refining;
$fieldToolTips["Eoc_refining"] = &$fieldToolTipsEoc_refining;
$placeHolders["Eoc_refining"] = &$placeHoldersEoc_refining;
$page_titles["Eoc_refining"] = &$pageTitlesEoc_refining;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_refining"] = array();
//	Eoc_refining_item
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_refining_item";
		$detailsParam["dOriginalTable"] = "Eoc_refining_item";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_refining_item";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_refining_item");
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
		
	$detailsTablesData["Eoc_refining"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_refining"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_refining"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_refining"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_refining"][$dIndex]["detailKeys"][]="Eoc_refining_id";

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_refining"] = array();


	
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
					$masterTablesData["Eoc_refining"][0] = $masterParams;
				$masterTablesData["Eoc_refining"][0]["masterKeys"] = array();
	$masterTablesData["Eoc_refining"][0]["masterKeys"][]="ecc_id";
				$masterTablesData["Eoc_refining"][0]["detailKeys"] = array();
	$masterTablesData["Eoc_refining"][0]["detailKeys"][]="ecc_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_refining()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`ecc_id`,  	`mst_refining_status_id`,  	`Collection_date`,  	`Pickup_time_select`,  	`Delivery_date`,  	`Delivery_time_select`,  	`update_by`,  	`update_at`,  	`create_by`,  	`create_at`";
$proto0["m_strFrom"] = "FROM `Eoc_refining`";
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
	"m_strName" => "id",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_refining"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "Eoc_refining";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ecc_id",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_refining"
));

$proto8["m_sql"] = "`ecc_id`";
$proto8["m_srcTableName"] = "Eoc_refining";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mst_refining_status_id",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_refining"
));

$proto10["m_sql"] = "`mst_refining_status_id`";
$proto10["m_srcTableName"] = "Eoc_refining";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Collection_date",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_refining"
));

$proto12["m_sql"] = "`Collection_date`";
$proto12["m_srcTableName"] = "Eoc_refining";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Pickup_time_select",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_refining"
));

$proto14["m_sql"] = "`Pickup_time_select`";
$proto14["m_srcTableName"] = "Eoc_refining";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Delivery_date",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_refining"
));

$proto16["m_sql"] = "`Delivery_date`";
$proto16["m_srcTableName"] = "Eoc_refining";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Delivery_time_select",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_refining"
));

$proto18["m_sql"] = "`Delivery_time_select`";
$proto18["m_srcTableName"] = "Eoc_refining";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_refining"
));

$proto20["m_sql"] = "`update_by`";
$proto20["m_srcTableName"] = "Eoc_refining";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_refining"
));

$proto22["m_sql"] = "`update_at`";
$proto22["m_srcTableName"] = "Eoc_refining";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_refining"
));

$proto24["m_sql"] = "`create_by`";
$proto24["m_srcTableName"] = "Eoc_refining";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "Eoc_refining",
	"m_srcTableName" => "Eoc_refining"
));

$proto26["m_sql"] = "`create_at`";
$proto26["m_srcTableName"] = "Eoc_refining";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "Eoc_refining";
$proto29["m_srcTableName"] = "Eoc_refining";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "ecc_id";
$proto29["m_columns"][] = "mst_refining_status_id";
$proto29["m_columns"][] = "Collection_date";
$proto29["m_columns"][] = "Pickup_time_select";
$proto29["m_columns"][] = "Delivery_date";
$proto29["m_columns"][] = "Delivery_time_select";
$proto29["m_columns"][] = "update_by";
$proto29["m_columns"][] = "update_at";
$proto29["m_columns"][] = "create_by";
$proto29["m_columns"][] = "create_at";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "`Eoc_refining`";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "Eoc_refining";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Eoc_refining";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_refining = createSqlQuery_Eoc_refining();


	
		;

											

$tdataEoc_refining[".sqlquery"] = $queryData_Eoc_refining;

include_once(getabspath("include/Eoc_refining_events.php"));
$tableEvents["Eoc_refining"] = new eventclass_Eoc_refining;
$tdataEoc_refining[".hasEvents"] = true;

?>