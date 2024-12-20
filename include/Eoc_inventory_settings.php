<?php
require_once(getabspath("classes/cipherer.php"));




$tdataEoc_inventory = array();
	$tdataEoc_inventory[".truncateText"] = true;
	$tdataEoc_inventory[".NumberOfChars"] = 80;
	$tdataEoc_inventory[".ShortName"] = "Eoc_inventory";
	$tdataEoc_inventory[".OwnerID"] = "";
	$tdataEoc_inventory[".OriginalTable"] = "Eoc_inventory";

//	field labels
$fieldLabelsEoc_inventory = array();
$fieldToolTipsEoc_inventory = array();
$pageTitlesEoc_inventory = array();
$placeHoldersEoc_inventory = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsEoc_inventory["Japanese"] = array();
	$fieldToolTipsEoc_inventory["Japanese"] = array();
	$placeHoldersEoc_inventory["Japanese"] = array();
	$pageTitlesEoc_inventory["Japanese"] = array();
	$fieldLabelsEoc_inventory["Japanese"]["id"] = "Id";
	$fieldToolTipsEoc_inventory["Japanese"]["id"] = "";
	$placeHoldersEoc_inventory["Japanese"]["id"] = "";
	$fieldLabelsEoc_inventory["Japanese"]["date"] = "日付";
	$fieldToolTipsEoc_inventory["Japanese"]["date"] = "";
	$placeHoldersEoc_inventory["Japanese"]["date"] = "";
	$fieldLabelsEoc_inventory["Japanese"]["inventory_j_ec"] = "宝飾・EC";
	$fieldToolTipsEoc_inventory["Japanese"]["inventory_j_ec"] = "";
	$placeHoldersEoc_inventory["Japanese"]["inventory_j_ec"] = "";
	$fieldLabelsEoc_inventory["Japanese"]["inventory_j_ichiba"] = "宝飾・市場";
	$fieldToolTipsEoc_inventory["Japanese"]["inventory_j_ichiba"] = "";
	$placeHoldersEoc_inventory["Japanese"]["inventory_j_ichiba"] = "";
	$fieldLabelsEoc_inventory["Japanese"]["inventory_k"] = "地金";
	$fieldToolTipsEoc_inventory["Japanese"]["inventory_k"] = "";
	$placeHoldersEoc_inventory["Japanese"]["inventory_k"] = "";
	$fieldLabelsEoc_inventory["Japanese"]["inventory_d"] = "ダイヤ";
	$fieldToolTipsEoc_inventory["Japanese"]["inventory_d"] = "";
	$placeHoldersEoc_inventory["Japanese"]["inventory_d"] = "";
	$fieldLabelsEoc_inventory["Japanese"]["inventory_b_ec"] = "服飾・EC";
	$fieldToolTipsEoc_inventory["Japanese"]["inventory_b_ec"] = "";
	$placeHoldersEoc_inventory["Japanese"]["inventory_b_ec"] = "";
	$fieldLabelsEoc_inventory["Japanese"]["inventory_b_ichiba"] = "服飾・市場";
	$fieldToolTipsEoc_inventory["Japanese"]["inventory_b_ichiba"] = "";
	$placeHoldersEoc_inventory["Japanese"]["inventory_b_ichiba"] = "";
	$fieldLabelsEoc_inventory["Japanese"]["inventory_w_ec"] = "時計・EC";
	$fieldToolTipsEoc_inventory["Japanese"]["inventory_w_ec"] = "";
	$placeHoldersEoc_inventory["Japanese"]["inventory_w_ec"] = "";
	$fieldLabelsEoc_inventory["Japanese"]["inventory_w_ichiba"] = "時計・市場";
	$fieldToolTipsEoc_inventory["Japanese"]["inventory_w_ichiba"] = "";
	$placeHoldersEoc_inventory["Japanese"]["inventory_w_ichiba"] = "";
	$fieldLabelsEoc_inventory["Japanese"]["inventory_c"] = "共通";
	$fieldToolTipsEoc_inventory["Japanese"]["inventory_c"] = "";
	$placeHoldersEoc_inventory["Japanese"]["inventory_c"] = "";
	$fieldLabelsEoc_inventory["Japanese"]["created_at"] = "作成日";
	$fieldToolTipsEoc_inventory["Japanese"]["created_at"] = "";
	$placeHoldersEoc_inventory["Japanese"]["created_at"] = "";
	$fieldLabelsEoc_inventory["Japanese"]["updated_at"] = "更新日";
	$fieldToolTipsEoc_inventory["Japanese"]["updated_at"] = "";
	$placeHoldersEoc_inventory["Japanese"]["updated_at"] = "";
	if (count($fieldToolTipsEoc_inventory["Japanese"]))
		$tdataEoc_inventory[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsEoc_inventory[""] = array();
	$fieldToolTipsEoc_inventory[""] = array();
	$placeHoldersEoc_inventory[""] = array();
	$pageTitlesEoc_inventory[""] = array();
	$fieldLabelsEoc_inventory[""]["id"] = "Id";
	$fieldToolTipsEoc_inventory[""]["id"] = "";
	$placeHoldersEoc_inventory[""]["id"] = "";
	$fieldLabelsEoc_inventory[""]["date"] = "Date";
	$fieldToolTipsEoc_inventory[""]["date"] = "";
	$placeHoldersEoc_inventory[""]["date"] = "";
	$fieldLabelsEoc_inventory[""]["inventory_j_ec"] = "Inventory J Ec";
	$fieldToolTipsEoc_inventory[""]["inventory_j_ec"] = "";
	$placeHoldersEoc_inventory[""]["inventory_j_ec"] = "";
	$fieldLabelsEoc_inventory[""]["inventory_j_ichiba"] = "Inventory J Ichiba";
	$fieldToolTipsEoc_inventory[""]["inventory_j_ichiba"] = "";
	$placeHoldersEoc_inventory[""]["inventory_j_ichiba"] = "";
	$fieldLabelsEoc_inventory[""]["inventory_k"] = "Inventory K";
	$fieldToolTipsEoc_inventory[""]["inventory_k"] = "";
	$placeHoldersEoc_inventory[""]["inventory_k"] = "";
	$fieldLabelsEoc_inventory[""]["inventory_d"] = "Inventory D";
	$fieldToolTipsEoc_inventory[""]["inventory_d"] = "";
	$placeHoldersEoc_inventory[""]["inventory_d"] = "";
	$fieldLabelsEoc_inventory[""]["inventory_b_ec"] = "Inventory B Ec";
	$fieldToolTipsEoc_inventory[""]["inventory_b_ec"] = "";
	$placeHoldersEoc_inventory[""]["inventory_b_ec"] = "";
	$fieldLabelsEoc_inventory[""]["inventory_b_ichiba"] = "Inventory B Ichiba";
	$fieldToolTipsEoc_inventory[""]["inventory_b_ichiba"] = "";
	$placeHoldersEoc_inventory[""]["inventory_b_ichiba"] = "";
	$fieldLabelsEoc_inventory[""]["inventory_w_ec"] = "Inventory W Ec";
	$fieldToolTipsEoc_inventory[""]["inventory_w_ec"] = "";
	$placeHoldersEoc_inventory[""]["inventory_w_ec"] = "";
	$fieldLabelsEoc_inventory[""]["inventory_w_ichiba"] = "Inventory W Ichiba";
	$fieldToolTipsEoc_inventory[""]["inventory_w_ichiba"] = "";
	$placeHoldersEoc_inventory[""]["inventory_w_ichiba"] = "";
	$fieldLabelsEoc_inventory[""]["inventory_c"] = "Inventory C";
	$fieldToolTipsEoc_inventory[""]["inventory_c"] = "";
	$placeHoldersEoc_inventory[""]["inventory_c"] = "";
	$fieldLabelsEoc_inventory[""]["created_at"] = "Created At";
	$fieldToolTipsEoc_inventory[""]["created_at"] = "";
	$placeHoldersEoc_inventory[""]["created_at"] = "";
	$fieldLabelsEoc_inventory[""]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_inventory[""]["updated_at"] = "";
	$placeHoldersEoc_inventory[""]["updated_at"] = "";
	if (count($fieldToolTipsEoc_inventory[""]))
		$tdataEoc_inventory[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsEoc_inventory["English"] = array();
	$fieldToolTipsEoc_inventory["English"] = array();
	$placeHoldersEoc_inventory["English"] = array();
	$pageTitlesEoc_inventory["English"] = array();
	$fieldLabelsEoc_inventory["English"]["id"] = "Id";
	$fieldToolTipsEoc_inventory["English"]["id"] = "";
	$placeHoldersEoc_inventory["English"]["id"] = "";
	$fieldLabelsEoc_inventory["English"]["date"] = "Date";
	$fieldToolTipsEoc_inventory["English"]["date"] = "";
	$placeHoldersEoc_inventory["English"]["date"] = "";
	$fieldLabelsEoc_inventory["English"]["inventory_j_ec"] = "Inventory J Ec";
	$fieldToolTipsEoc_inventory["English"]["inventory_j_ec"] = "";
	$placeHoldersEoc_inventory["English"]["inventory_j_ec"] = "";
	$fieldLabelsEoc_inventory["English"]["inventory_j_ichiba"] = "Inventory J Ichiba";
	$fieldToolTipsEoc_inventory["English"]["inventory_j_ichiba"] = "";
	$placeHoldersEoc_inventory["English"]["inventory_j_ichiba"] = "";
	$fieldLabelsEoc_inventory["English"]["inventory_k"] = "Inventory K";
	$fieldToolTipsEoc_inventory["English"]["inventory_k"] = "";
	$placeHoldersEoc_inventory["English"]["inventory_k"] = "";
	$fieldLabelsEoc_inventory["English"]["inventory_d"] = "Inventory D";
	$fieldToolTipsEoc_inventory["English"]["inventory_d"] = "";
	$placeHoldersEoc_inventory["English"]["inventory_d"] = "";
	$fieldLabelsEoc_inventory["English"]["inventory_b_ec"] = "Inventory B Ec";
	$fieldToolTipsEoc_inventory["English"]["inventory_b_ec"] = "";
	$placeHoldersEoc_inventory["English"]["inventory_b_ec"] = "";
	$fieldLabelsEoc_inventory["English"]["inventory_b_ichiba"] = "Inventory B Ichiba";
	$fieldToolTipsEoc_inventory["English"]["inventory_b_ichiba"] = "";
	$placeHoldersEoc_inventory["English"]["inventory_b_ichiba"] = "";
	$fieldLabelsEoc_inventory["English"]["inventory_w_ec"] = "Inventory W Ec";
	$fieldToolTipsEoc_inventory["English"]["inventory_w_ec"] = "";
	$placeHoldersEoc_inventory["English"]["inventory_w_ec"] = "";
	$fieldLabelsEoc_inventory["English"]["inventory_w_ichiba"] = "Inventory W Ichiba";
	$fieldToolTipsEoc_inventory["English"]["inventory_w_ichiba"] = "";
	$placeHoldersEoc_inventory["English"]["inventory_w_ichiba"] = "";
	$fieldLabelsEoc_inventory["English"]["inventory_c"] = "Inventory C";
	$fieldToolTipsEoc_inventory["English"]["inventory_c"] = "";
	$placeHoldersEoc_inventory["English"]["inventory_c"] = "";
	$fieldLabelsEoc_inventory["English"]["created_at"] = "Created At";
	$fieldToolTipsEoc_inventory["English"]["created_at"] = "";
	$placeHoldersEoc_inventory["English"]["created_at"] = "";
	$fieldLabelsEoc_inventory["English"]["updated_at"] = "Updated At";
	$fieldToolTipsEoc_inventory["English"]["updated_at"] = "";
	$placeHoldersEoc_inventory["English"]["updated_at"] = "";
	if (count($fieldToolTipsEoc_inventory["English"]))
		$tdataEoc_inventory[".isUseToolTips"] = true;
}


	$tdataEoc_inventory[".NCSearch"] = true;



$tdataEoc_inventory[".shortTableName"] = "Eoc_inventory";
$tdataEoc_inventory[".nSecOptions"] = 0;
$tdataEoc_inventory[".recsPerRowPrint"] = 1;
$tdataEoc_inventory[".mainTableOwnerID"] = "";
$tdataEoc_inventory[".moveNext"] = 1;
$tdataEoc_inventory[".entityType"] = 0;

$tdataEoc_inventory[".strOriginalTableName"] = "Eoc_inventory";

	



$tdataEoc_inventory[".showAddInPopup"] = false;

$tdataEoc_inventory[".showEditInPopup"] = false;

$tdataEoc_inventory[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataEoc_inventory[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataEoc_inventory[".fieldsForRegister"] = array();

$tdataEoc_inventory[".listAjax"] = false;

	$tdataEoc_inventory[".audit"] = false;

	$tdataEoc_inventory[".locking"] = false;



$tdataEoc_inventory[".list"] = true;



$tdataEoc_inventory[".reorderRecordsByHeader"] = true;





$tdataEoc_inventory[".exportTo"] = true;



$tdataEoc_inventory[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdataEoc_inventory[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdataEoc_inventory[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdataEoc_inventory[".searchSaving"] = false;
//

$tdataEoc_inventory[".showSearchPanel"] = true;
		$tdataEoc_inventory[".flexibleSearch"] = true;

$tdataEoc_inventory[".isUseAjaxSuggest"] = true;

$tdataEoc_inventory[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdataEoc_inventory[".ajaxCodeSnippetAdded"] = false;

$tdataEoc_inventory[".buttonsAdded"] = false;

$tdataEoc_inventory[".addPageEvents"] = false;

// use timepicker for search panel
$tdataEoc_inventory[".isUseTimeForSearch"] = false;




$tdataEoc_inventory[".detailsLinksOnList"] = "1";

$tdataEoc_inventory[".allSearchFields"] = array();
$tdataEoc_inventory[".filterFields"] = array();
$tdataEoc_inventory[".requiredSearchFields"] = array();

$tdataEoc_inventory[".allSearchFields"][] = "id";
	$tdataEoc_inventory[".allSearchFields"][] = "date";
	$tdataEoc_inventory[".allSearchFields"][] = "inventory_j_ec";
	$tdataEoc_inventory[".allSearchFields"][] = "inventory_j_ichiba";
	$tdataEoc_inventory[".allSearchFields"][] = "inventory_k";
	$tdataEoc_inventory[".allSearchFields"][] = "inventory_d";
	$tdataEoc_inventory[".allSearchFields"][] = "inventory_b_ec";
	$tdataEoc_inventory[".allSearchFields"][] = "inventory_b_ichiba";
	$tdataEoc_inventory[".allSearchFields"][] = "inventory_w_ec";
	$tdataEoc_inventory[".allSearchFields"][] = "inventory_w_ichiba";
	$tdataEoc_inventory[".allSearchFields"][] = "inventory_c";
	$tdataEoc_inventory[".allSearchFields"][] = "updated_at";
	$tdataEoc_inventory[".allSearchFields"][] = "created_at";
	

$tdataEoc_inventory[".googleLikeFields"] = array();
$tdataEoc_inventory[".googleLikeFields"][] = "id";
$tdataEoc_inventory[".googleLikeFields"][] = "date";
$tdataEoc_inventory[".googleLikeFields"][] = "inventory_j_ec";
$tdataEoc_inventory[".googleLikeFields"][] = "inventory_j_ichiba";
$tdataEoc_inventory[".googleLikeFields"][] = "inventory_k";
$tdataEoc_inventory[".googleLikeFields"][] = "inventory_d";
$tdataEoc_inventory[".googleLikeFields"][] = "inventory_b_ec";
$tdataEoc_inventory[".googleLikeFields"][] = "inventory_b_ichiba";
$tdataEoc_inventory[".googleLikeFields"][] = "inventory_w_ec";
$tdataEoc_inventory[".googleLikeFields"][] = "inventory_w_ichiba";
$tdataEoc_inventory[".googleLikeFields"][] = "inventory_c";
$tdataEoc_inventory[".googleLikeFields"][] = "updated_at";
$tdataEoc_inventory[".googleLikeFields"][] = "created_at";


$tdataEoc_inventory[".advSearchFields"] = array();
$tdataEoc_inventory[".advSearchFields"][] = "id";
$tdataEoc_inventory[".advSearchFields"][] = "date";
$tdataEoc_inventory[".advSearchFields"][] = "inventory_j_ec";
$tdataEoc_inventory[".advSearchFields"][] = "inventory_j_ichiba";
$tdataEoc_inventory[".advSearchFields"][] = "inventory_k";
$tdataEoc_inventory[".advSearchFields"][] = "inventory_d";
$tdataEoc_inventory[".advSearchFields"][] = "inventory_b_ec";
$tdataEoc_inventory[".advSearchFields"][] = "inventory_b_ichiba";
$tdataEoc_inventory[".advSearchFields"][] = "inventory_w_ec";
$tdataEoc_inventory[".advSearchFields"][] = "inventory_w_ichiba";
$tdataEoc_inventory[".advSearchFields"][] = "inventory_c";
$tdataEoc_inventory[".advSearchFields"][] = "updated_at";
$tdataEoc_inventory[".advSearchFields"][] = "created_at";

$tdataEoc_inventory[".tableType"] = "list";

$tdataEoc_inventory[".printerPageOrientation"] = 0;
$tdataEoc_inventory[".nPrinterPageScale"] = 100;

$tdataEoc_inventory[".nPrinterSplitRecords"] = 40;

$tdataEoc_inventory[".nPrinterPDFSplitRecords"] = 40;



$tdataEoc_inventory[".geocodingEnabled"] = false;





$tdataEoc_inventory[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataEoc_inventory[".pageSize"] = 20;

$tdataEoc_inventory[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `id` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataEoc_inventory[".strOrderBy"] = $tstrOrderBy;

$tdataEoc_inventory[".orderindexes"] = array();
$tdataEoc_inventory[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "`id`");

$tdataEoc_inventory[".sqlHead"] = "SELECT `id`,  `date`,  `inventory_j_ec`,  `inventory_j_ichiba`,  `inventory_k`,  `inventory_d`,  `inventory_b_ec`,  `inventory_b_ichiba`,  `inventory_w_ec`,  `inventory_w_ichiba`,  `inventory_c`,  `updated_at`,  `created_at`";
$tdataEoc_inventory[".sqlFrom"] = "FROM `Eoc_inventory`";
$tdataEoc_inventory[".sqlWhereExpr"] = "";
$tdataEoc_inventory[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataEoc_inventory[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataEoc_inventory[".arrGroupsPerPage"] = $arrGPP;

$tdataEoc_inventory[".highlightSearchResults"] = true;

$tableKeysEoc_inventory = array();
$tableKeysEoc_inventory[] = "id";
$tdataEoc_inventory[".Keys"] = $tableKeysEoc_inventory;

$tdataEoc_inventory[".listFields"] = array();
$tdataEoc_inventory[".listFields"][] = "id";
$tdataEoc_inventory[".listFields"][] = "date";
$tdataEoc_inventory[".listFields"][] = "inventory_j_ec";
$tdataEoc_inventory[".listFields"][] = "inventory_j_ichiba";
$tdataEoc_inventory[".listFields"][] = "inventory_k";
$tdataEoc_inventory[".listFields"][] = "inventory_d";
$tdataEoc_inventory[".listFields"][] = "inventory_b_ec";
$tdataEoc_inventory[".listFields"][] = "inventory_b_ichiba";
$tdataEoc_inventory[".listFields"][] = "inventory_w_ec";
$tdataEoc_inventory[".listFields"][] = "inventory_w_ichiba";
$tdataEoc_inventory[".listFields"][] = "inventory_c";
$tdataEoc_inventory[".listFields"][] = "updated_at";
$tdataEoc_inventory[".listFields"][] = "created_at";

$tdataEoc_inventory[".hideMobileList"] = array();


$tdataEoc_inventory[".viewFields"] = array();

$tdataEoc_inventory[".addFields"] = array();

$tdataEoc_inventory[".masterListFields"] = array();
$tdataEoc_inventory[".masterListFields"][] = "id";
$tdataEoc_inventory[".masterListFields"][] = "date";
$tdataEoc_inventory[".masterListFields"][] = "inventory_j_ec";
$tdataEoc_inventory[".masterListFields"][] = "inventory_j_ichiba";
$tdataEoc_inventory[".masterListFields"][] = "inventory_k";
$tdataEoc_inventory[".masterListFields"][] = "inventory_d";
$tdataEoc_inventory[".masterListFields"][] = "inventory_b_ec";
$tdataEoc_inventory[".masterListFields"][] = "inventory_b_ichiba";
$tdataEoc_inventory[".masterListFields"][] = "inventory_w_ec";
$tdataEoc_inventory[".masterListFields"][] = "inventory_w_ichiba";
$tdataEoc_inventory[".masterListFields"][] = "inventory_c";
$tdataEoc_inventory[".masterListFields"][] = "updated_at";
$tdataEoc_inventory[".masterListFields"][] = "created_at";

$tdataEoc_inventory[".inlineAddFields"] = array();

$tdataEoc_inventory[".editFields"] = array();

$tdataEoc_inventory[".inlineEditFields"] = array();

$tdataEoc_inventory[".updateSelectedFields"] = array();


$tdataEoc_inventory[".exportFields"] = array();
$tdataEoc_inventory[".exportFields"][] = "id";
$tdataEoc_inventory[".exportFields"][] = "date";
$tdataEoc_inventory[".exportFields"][] = "inventory_j_ec";
$tdataEoc_inventory[".exportFields"][] = "inventory_j_ichiba";
$tdataEoc_inventory[".exportFields"][] = "inventory_k";
$tdataEoc_inventory[".exportFields"][] = "inventory_d";
$tdataEoc_inventory[".exportFields"][] = "inventory_b_ec";
$tdataEoc_inventory[".exportFields"][] = "inventory_b_ichiba";
$tdataEoc_inventory[".exportFields"][] = "inventory_w_ec";
$tdataEoc_inventory[".exportFields"][] = "inventory_w_ichiba";
$tdataEoc_inventory[".exportFields"][] = "inventory_c";
$tdataEoc_inventory[".exportFields"][] = "updated_at";
$tdataEoc_inventory[".exportFields"][] = "created_at";

$tdataEoc_inventory[".importFields"] = array();

$tdataEoc_inventory[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "Eoc_inventory";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory","id");
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




	$tdataEoc_inventory["id"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "Eoc_inventory";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory","date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
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




	$tdataEoc_inventory["date"] = $fdata;
//	inventory_j_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "inventory_j_ec";
	$fdata["GoodName"] = "inventory_j_ec";
	$fdata["ownerTable"] = "Eoc_inventory";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory","inventory_j_ec");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_j_ec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_j_ec`";

	
	
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




	$tdataEoc_inventory["inventory_j_ec"] = $fdata;
//	inventory_j_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "inventory_j_ichiba";
	$fdata["GoodName"] = "inventory_j_ichiba";
	$fdata["ownerTable"] = "Eoc_inventory";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory","inventory_j_ichiba");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_j_ichiba";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_j_ichiba`";

	
	
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




	$tdataEoc_inventory["inventory_j_ichiba"] = $fdata;
//	inventory_k
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inventory_k";
	$fdata["GoodName"] = "inventory_k";
	$fdata["ownerTable"] = "Eoc_inventory";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory","inventory_k");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_k";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_k`";

	
	
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




	$tdataEoc_inventory["inventory_k"] = $fdata;
//	inventory_d
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "inventory_d";
	$fdata["GoodName"] = "inventory_d";
	$fdata["ownerTable"] = "Eoc_inventory";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory","inventory_d");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_d";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_d`";

	
	
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




	$tdataEoc_inventory["inventory_d"] = $fdata;
//	inventory_b_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "inventory_b_ec";
	$fdata["GoodName"] = "inventory_b_ec";
	$fdata["ownerTable"] = "Eoc_inventory";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory","inventory_b_ec");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_b_ec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_b_ec`";

	
	
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




	$tdataEoc_inventory["inventory_b_ec"] = $fdata;
//	inventory_b_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "inventory_b_ichiba";
	$fdata["GoodName"] = "inventory_b_ichiba";
	$fdata["ownerTable"] = "Eoc_inventory";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory","inventory_b_ichiba");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_b_ichiba";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_b_ichiba`";

	
	
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




	$tdataEoc_inventory["inventory_b_ichiba"] = $fdata;
//	inventory_w_ec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "inventory_w_ec";
	$fdata["GoodName"] = "inventory_w_ec";
	$fdata["ownerTable"] = "Eoc_inventory";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory","inventory_w_ec");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_w_ec";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_w_ec`";

	
	
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




	$tdataEoc_inventory["inventory_w_ec"] = $fdata;
//	inventory_w_ichiba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "inventory_w_ichiba";
	$fdata["GoodName"] = "inventory_w_ichiba";
	$fdata["ownerTable"] = "Eoc_inventory";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory","inventory_w_ichiba");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_w_ichiba";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_w_ichiba`";

	
	
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




	$tdataEoc_inventory["inventory_w_ichiba"] = $fdata;
//	inventory_c
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "inventory_c";
	$fdata["GoodName"] = "inventory_c";
	$fdata["ownerTable"] = "Eoc_inventory";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory","inventory_c");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "inventory_c";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`inventory_c`";

	
	
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




	$tdataEoc_inventory["inventory_c"] = $fdata;
//	updated_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "updated_at";
	$fdata["GoodName"] = "updated_at";
	$fdata["ownerTable"] = "Eoc_inventory";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory","updated_at");
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




	$tdataEoc_inventory["updated_at"] = $fdata;
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "Eoc_inventory";
	$fdata["Label"] = GetFieldLabel("Eoc_inventory","created_at");
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




	$tdataEoc_inventory["created_at"] = $fdata;


$tables_data["Eoc_inventory"]=&$tdataEoc_inventory;
$field_labels["Eoc_inventory"] = &$fieldLabelsEoc_inventory;
$fieldToolTips["Eoc_inventory"] = &$fieldToolTipsEoc_inventory;
$placeHolders["Eoc_inventory"] = &$placeHoldersEoc_inventory;
$page_titles["Eoc_inventory"] = &$pageTitlesEoc_inventory;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Eoc_inventory"] = array();
//	Eoc_inventory_item
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Eoc_inventory_item";
		$detailsParam["dOriginalTable"] = "Eoc_inventory_item";
		$detailsParam["proceedLink"] = true;
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Eoc_inventory_item";
	$detailsParam["dCaptionTable"] = GetTableCaption("Eoc_inventory_item");
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
		
	$detailsTablesData["Eoc_inventory"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Eoc_inventory"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Eoc_inventory"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Eoc_inventory"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Eoc_inventory"][$dIndex]["detailKeys"][]="Eoc_inventory_id";

// tables which are master tables for current table (detail)
$masterTablesData["Eoc_inventory"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Eoc_inventory()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `date`,  `inventory_j_ec`,  `inventory_j_ichiba`,  `inventory_k`,  `inventory_d`,  `inventory_b_ec`,  `inventory_b_ichiba`,  `inventory_w_ec`,  `inventory_w_ichiba`,  `inventory_c`,  `updated_at`,  `created_at`";
$proto0["m_strFrom"] = "FROM `Eoc_inventory`";
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
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "Eoc_inventory";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory"
));

$proto8["m_sql"] = "`date`";
$proto8["m_srcTableName"] = "Eoc_inventory";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_j_ec",
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory"
));

$proto10["m_sql"] = "`inventory_j_ec`";
$proto10["m_srcTableName"] = "Eoc_inventory";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_j_ichiba",
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory"
));

$proto12["m_sql"] = "`inventory_j_ichiba`";
$proto12["m_srcTableName"] = "Eoc_inventory";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_k",
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory"
));

$proto14["m_sql"] = "`inventory_k`";
$proto14["m_srcTableName"] = "Eoc_inventory";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_d",
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory"
));

$proto16["m_sql"] = "`inventory_d`";
$proto16["m_srcTableName"] = "Eoc_inventory";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_b_ec",
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory"
));

$proto18["m_sql"] = "`inventory_b_ec`";
$proto18["m_srcTableName"] = "Eoc_inventory";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_b_ichiba",
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory"
));

$proto20["m_sql"] = "`inventory_b_ichiba`";
$proto20["m_srcTableName"] = "Eoc_inventory";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_w_ec",
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory"
));

$proto22["m_sql"] = "`inventory_w_ec`";
$proto22["m_srcTableName"] = "Eoc_inventory";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_w_ichiba",
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory"
));

$proto24["m_sql"] = "`inventory_w_ichiba`";
$proto24["m_srcTableName"] = "Eoc_inventory";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "inventory_c",
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory"
));

$proto26["m_sql"] = "`inventory_c`";
$proto26["m_srcTableName"] = "Eoc_inventory";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_at",
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory"
));

$proto28["m_sql"] = "`updated_at`";
$proto28["m_srcTableName"] = "Eoc_inventory";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory"
));

$proto30["m_sql"] = "`created_at`";
$proto30["m_srcTableName"] = "Eoc_inventory";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "Eoc_inventory";
$proto33["m_srcTableName"] = "Eoc_inventory";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id";
$proto33["m_columns"][] = "date";
$proto33["m_columns"][] = "inventory_j_ec";
$proto33["m_columns"][] = "inventory_j_ichiba";
$proto33["m_columns"][] = "inventory_k";
$proto33["m_columns"][] = "inventory_d";
$proto33["m_columns"][] = "inventory_b_ec";
$proto33["m_columns"][] = "inventory_b_ichiba";
$proto33["m_columns"][] = "inventory_w_ec";
$proto33["m_columns"][] = "inventory_w_ichiba";
$proto33["m_columns"][] = "inventory_c";
$proto33["m_columns"][] = "sales_j_ec";
$proto33["m_columns"][] = "sales_j_ichiba";
$proto33["m_columns"][] = "sales_k";
$proto33["m_columns"][] = "sales_d";
$proto33["m_columns"][] = "sales_b_ec";
$proto33["m_columns"][] = "sales_b_ichiba";
$proto33["m_columns"][] = "sales_w_ec";
$proto33["m_columns"][] = "sales_w_ichiba";
$proto33["m_columns"][] = "sales_c";
$proto33["m_columns"][] = "buy_during_period_j_ec";
$proto33["m_columns"][] = "buy_during_period_j_ichiba";
$proto33["m_columns"][] = "buy_during_period_k";
$proto33["m_columns"][] = "buy_during_period_d";
$proto33["m_columns"][] = "buy_during_period_b_ec";
$proto33["m_columns"][] = "buy_during_period_b_ichiba";
$proto33["m_columns"][] = "buy_during_period_w_ec";
$proto33["m_columns"][] = "buy_during_period_w_ichiba";
$proto33["m_columns"][] = "buy_during_period_c";
$proto33["m_columns"][] = "created_at";
$proto33["m_columns"][] = "updated_at";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "`Eoc_inventory`";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "Eoc_inventory";
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
	"m_strTable" => "Eoc_inventory",
	"m_srcTableName" => "Eoc_inventory"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 0;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Eoc_inventory";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Eoc_inventory = createSqlQuery_Eoc_inventory();


	
		;

													

$tdataEoc_inventory[".sqlquery"] = $queryData_Eoc_inventory;

$tableEvents["Eoc_inventory"] = new eventsBase;
$tdataEoc_inventory[".hasEvents"] = false;

?>