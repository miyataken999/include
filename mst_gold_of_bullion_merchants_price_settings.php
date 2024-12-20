<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamst_gold_of_bullion_merchants_price = array();
	$tdatamst_gold_of_bullion_merchants_price[".truncateText"] = true;
	$tdatamst_gold_of_bullion_merchants_price[".NumberOfChars"] = 80;
	$tdatamst_gold_of_bullion_merchants_price[".ShortName"] = "mst_gold_of_bullion_merchants_price";
	$tdatamst_gold_of_bullion_merchants_price[".OwnerID"] = "";
	$tdatamst_gold_of_bullion_merchants_price[".OriginalTable"] = "mst_gold_of_bullion_merchants_price";

//	field labels
$fieldLabelsmst_gold_of_bullion_merchants_price = array();
$fieldToolTipsmst_gold_of_bullion_merchants_price = array();
$pageTitlesmst_gold_of_bullion_merchants_price = array();
$placeHoldersmst_gold_of_bullion_merchants_price = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelsmst_gold_of_bullion_merchants_price["Japanese"] = array();
	$fieldToolTipsmst_gold_of_bullion_merchants_price["Japanese"] = array();
	$placeHoldersmst_gold_of_bullion_merchants_price["Japanese"] = array();
	$pageTitlesmst_gold_of_bullion_merchants_price["Japanese"] = array();
	$fieldLabelsmst_gold_of_bullion_merchants_price["Japanese"]["id"] = "Id";
	$fieldToolTipsmst_gold_of_bullion_merchants_price["Japanese"]["id"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price["Japanese"]["id"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price["Japanese"]["name_id"] = "Name Id";
	$fieldToolTipsmst_gold_of_bullion_merchants_price["Japanese"]["name_id"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price["Japanese"]["name_id"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price["Japanese"]["date"] = "Date";
	$fieldToolTipsmst_gold_of_bullion_merchants_price["Japanese"]["date"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price["Japanese"]["date"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price["Japanese"]["price"] = "Price";
	$fieldToolTipsmst_gold_of_bullion_merchants_price["Japanese"]["price"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price["Japanese"]["price"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price["Japanese"]["update_by"] = "Update By";
	$fieldToolTipsmst_gold_of_bullion_merchants_price["Japanese"]["update_by"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price["Japanese"]["update_by"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price["Japanese"]["update_at"] = "Update At";
	$fieldToolTipsmst_gold_of_bullion_merchants_price["Japanese"]["update_at"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price["Japanese"]["update_at"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price["Japanese"]["create_by"] = "Create By";
	$fieldToolTipsmst_gold_of_bullion_merchants_price["Japanese"]["create_by"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price["Japanese"]["create_by"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price["Japanese"]["create_at"] = "Create At";
	$fieldToolTipsmst_gold_of_bullion_merchants_price["Japanese"]["create_at"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price["Japanese"]["create_at"] = "";
	if (count($fieldToolTipsmst_gold_of_bullion_merchants_price["Japanese"]))
		$tdatamst_gold_of_bullion_merchants_price[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmst_gold_of_bullion_merchants_price[""] = array();
	$fieldToolTipsmst_gold_of_bullion_merchants_price[""] = array();
	$placeHoldersmst_gold_of_bullion_merchants_price[""] = array();
	$pageTitlesmst_gold_of_bullion_merchants_price[""] = array();
	$fieldLabelsmst_gold_of_bullion_merchants_price[""]["id"] = "Id";
	$fieldToolTipsmst_gold_of_bullion_merchants_price[""]["id"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price[""]["id"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price[""]["name_id"] = "Name Id";
	$fieldToolTipsmst_gold_of_bullion_merchants_price[""]["name_id"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price[""]["name_id"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price[""]["date"] = "Date";
	$fieldToolTipsmst_gold_of_bullion_merchants_price[""]["date"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price[""]["date"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price[""]["price"] = "Price";
	$fieldToolTipsmst_gold_of_bullion_merchants_price[""]["price"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price[""]["price"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price[""]["update_by"] = "Update By";
	$fieldToolTipsmst_gold_of_bullion_merchants_price[""]["update_by"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price[""]["update_by"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price[""]["update_at"] = "Update At";
	$fieldToolTipsmst_gold_of_bullion_merchants_price[""]["update_at"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price[""]["update_at"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price[""]["create_by"] = "Create By";
	$fieldToolTipsmst_gold_of_bullion_merchants_price[""]["create_by"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price[""]["create_by"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price[""]["create_at"] = "Create At";
	$fieldToolTipsmst_gold_of_bullion_merchants_price[""]["create_at"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price[""]["create_at"] = "";
	if (count($fieldToolTipsmst_gold_of_bullion_merchants_price[""]))
		$tdatamst_gold_of_bullion_merchants_price[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmst_gold_of_bullion_merchants_price["English"] = array();
	$fieldToolTipsmst_gold_of_bullion_merchants_price["English"] = array();
	$placeHoldersmst_gold_of_bullion_merchants_price["English"] = array();
	$pageTitlesmst_gold_of_bullion_merchants_price["English"] = array();
	$fieldLabelsmst_gold_of_bullion_merchants_price["English"]["id"] = "Id";
	$fieldToolTipsmst_gold_of_bullion_merchants_price["English"]["id"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price["English"]["id"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price["English"]["name_id"] = "Name Id";
	$fieldToolTipsmst_gold_of_bullion_merchants_price["English"]["name_id"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price["English"]["name_id"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price["English"]["date"] = "Date";
	$fieldToolTipsmst_gold_of_bullion_merchants_price["English"]["date"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price["English"]["date"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price["English"]["price"] = "Price";
	$fieldToolTipsmst_gold_of_bullion_merchants_price["English"]["price"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price["English"]["price"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price["English"]["update_by"] = "Update By";
	$fieldToolTipsmst_gold_of_bullion_merchants_price["English"]["update_by"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price["English"]["update_by"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price["English"]["update_at"] = "Update At";
	$fieldToolTipsmst_gold_of_bullion_merchants_price["English"]["update_at"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price["English"]["update_at"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price["English"]["create_by"] = "Create By";
	$fieldToolTipsmst_gold_of_bullion_merchants_price["English"]["create_by"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price["English"]["create_by"] = "";
	$fieldLabelsmst_gold_of_bullion_merchants_price["English"]["create_at"] = "Create At";
	$fieldToolTipsmst_gold_of_bullion_merchants_price["English"]["create_at"] = "";
	$placeHoldersmst_gold_of_bullion_merchants_price["English"]["create_at"] = "";
	if (count($fieldToolTipsmst_gold_of_bullion_merchants_price["English"]))
		$tdatamst_gold_of_bullion_merchants_price[".isUseToolTips"] = true;
}


	$tdatamst_gold_of_bullion_merchants_price[".NCSearch"] = true;



$tdatamst_gold_of_bullion_merchants_price[".shortTableName"] = "mst_gold_of_bullion_merchants_price";
$tdatamst_gold_of_bullion_merchants_price[".nSecOptions"] = 0;
$tdatamst_gold_of_bullion_merchants_price[".recsPerRowPrint"] = 1;
$tdatamst_gold_of_bullion_merchants_price[".mainTableOwnerID"] = "";
$tdatamst_gold_of_bullion_merchants_price[".moveNext"] = 1;
$tdatamst_gold_of_bullion_merchants_price[".entityType"] = 0;

$tdatamst_gold_of_bullion_merchants_price[".strOriginalTableName"] = "mst_gold_of_bullion_merchants_price";

	



$tdatamst_gold_of_bullion_merchants_price[".showAddInPopup"] = false;

$tdatamst_gold_of_bullion_merchants_price[".showEditInPopup"] = false;

$tdatamst_gold_of_bullion_merchants_price[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamst_gold_of_bullion_merchants_price[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamst_gold_of_bullion_merchants_price[".fieldsForRegister"] = array();

$tdatamst_gold_of_bullion_merchants_price[".listAjax"] = false;

	$tdatamst_gold_of_bullion_merchants_price[".audit"] = true;

	$tdatamst_gold_of_bullion_merchants_price[".locking"] = false;



$tdatamst_gold_of_bullion_merchants_price[".list"] = true;



$tdatamst_gold_of_bullion_merchants_price[".reorderRecordsByHeader"] = true;





$tdatamst_gold_of_bullion_merchants_price[".exportTo"] = true;



$tdatamst_gold_of_bullion_merchants_price[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatamst_gold_of_bullion_merchants_price[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatamst_gold_of_bullion_merchants_price[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatamst_gold_of_bullion_merchants_price[".searchSaving"] = false;
//

$tdatamst_gold_of_bullion_merchants_price[".showSearchPanel"] = true;
		$tdatamst_gold_of_bullion_merchants_price[".flexibleSearch"] = true;

$tdatamst_gold_of_bullion_merchants_price[".isUseAjaxSuggest"] = true;

$tdatamst_gold_of_bullion_merchants_price[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatamst_gold_of_bullion_merchants_price[".ajaxCodeSnippetAdded"] = false;

$tdatamst_gold_of_bullion_merchants_price[".buttonsAdded"] = false;

$tdatamst_gold_of_bullion_merchants_price[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamst_gold_of_bullion_merchants_price[".isUseTimeForSearch"] = false;





$tdatamst_gold_of_bullion_merchants_price[".allSearchFields"] = array();
$tdatamst_gold_of_bullion_merchants_price[".filterFields"] = array();
$tdatamst_gold_of_bullion_merchants_price[".requiredSearchFields"] = array();

$tdatamst_gold_of_bullion_merchants_price[".allSearchFields"][] = "id";
	$tdatamst_gold_of_bullion_merchants_price[".allSearchFields"][] = "name_id";
	$tdatamst_gold_of_bullion_merchants_price[".allSearchFields"][] = "date";
	$tdatamst_gold_of_bullion_merchants_price[".allSearchFields"][] = "price";
	$tdatamst_gold_of_bullion_merchants_price[".allSearchFields"][] = "update_by";
	$tdatamst_gold_of_bullion_merchants_price[".allSearchFields"][] = "update_at";
	$tdatamst_gold_of_bullion_merchants_price[".allSearchFields"][] = "create_by";
	$tdatamst_gold_of_bullion_merchants_price[".allSearchFields"][] = "create_at";
	

$tdatamst_gold_of_bullion_merchants_price[".googleLikeFields"] = array();
$tdatamst_gold_of_bullion_merchants_price[".googleLikeFields"][] = "id";
$tdatamst_gold_of_bullion_merchants_price[".googleLikeFields"][] = "name_id";
$tdatamst_gold_of_bullion_merchants_price[".googleLikeFields"][] = "date";
$tdatamst_gold_of_bullion_merchants_price[".googleLikeFields"][] = "price";
$tdatamst_gold_of_bullion_merchants_price[".googleLikeFields"][] = "update_by";
$tdatamst_gold_of_bullion_merchants_price[".googleLikeFields"][] = "update_at";
$tdatamst_gold_of_bullion_merchants_price[".googleLikeFields"][] = "create_by";
$tdatamst_gold_of_bullion_merchants_price[".googleLikeFields"][] = "create_at";


$tdatamst_gold_of_bullion_merchants_price[".advSearchFields"] = array();
$tdatamst_gold_of_bullion_merchants_price[".advSearchFields"][] = "id";
$tdatamst_gold_of_bullion_merchants_price[".advSearchFields"][] = "name_id";
$tdatamst_gold_of_bullion_merchants_price[".advSearchFields"][] = "date";
$tdatamst_gold_of_bullion_merchants_price[".advSearchFields"][] = "price";
$tdatamst_gold_of_bullion_merchants_price[".advSearchFields"][] = "update_by";
$tdatamst_gold_of_bullion_merchants_price[".advSearchFields"][] = "update_at";
$tdatamst_gold_of_bullion_merchants_price[".advSearchFields"][] = "create_by";
$tdatamst_gold_of_bullion_merchants_price[".advSearchFields"][] = "create_at";

$tdatamst_gold_of_bullion_merchants_price[".tableType"] = "list";

$tdatamst_gold_of_bullion_merchants_price[".printerPageOrientation"] = 0;
$tdatamst_gold_of_bullion_merchants_price[".nPrinterPageScale"] = 100;

$tdatamst_gold_of_bullion_merchants_price[".nPrinterSplitRecords"] = 40;

$tdatamst_gold_of_bullion_merchants_price[".nPrinterPDFSplitRecords"] = 40;



$tdatamst_gold_of_bullion_merchants_price[".geocodingEnabled"] = false;





$tdatamst_gold_of_bullion_merchants_price[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatamst_gold_of_bullion_merchants_price[".pageSize"] = 100;

$tdatamst_gold_of_bullion_merchants_price[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `date` DESC, `name_id`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamst_gold_of_bullion_merchants_price[".strOrderBy"] = $tstrOrderBy;

$tdatamst_gold_of_bullion_merchants_price[".orderindexes"] = array();
$tdatamst_gold_of_bullion_merchants_price[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`date`");
$tdatamst_gold_of_bullion_merchants_price[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "`name_id`");

$tdatamst_gold_of_bullion_merchants_price[".sqlHead"] = "SELECT `id`,  `name_id`,  `date`,  `price`,  `update_by`,  `update_at`,  `create_by`,  `create_at`";
$tdatamst_gold_of_bullion_merchants_price[".sqlFrom"] = "FROM `mst_gold_of_bullion_merchants_price`";
$tdatamst_gold_of_bullion_merchants_price[".sqlWhereExpr"] = "";
$tdatamst_gold_of_bullion_merchants_price[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamst_gold_of_bullion_merchants_price[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamst_gold_of_bullion_merchants_price[".arrGroupsPerPage"] = $arrGPP;

$tdatamst_gold_of_bullion_merchants_price[".highlightSearchResults"] = true;

$tableKeysmst_gold_of_bullion_merchants_price = array();
$tableKeysmst_gold_of_bullion_merchants_price[] = "id";
$tdatamst_gold_of_bullion_merchants_price[".Keys"] = $tableKeysmst_gold_of_bullion_merchants_price;

$tdatamst_gold_of_bullion_merchants_price[".listFields"] = array();
$tdatamst_gold_of_bullion_merchants_price[".listFields"][] = "id";
$tdatamst_gold_of_bullion_merchants_price[".listFields"][] = "name_id";
$tdatamst_gold_of_bullion_merchants_price[".listFields"][] = "date";
$tdatamst_gold_of_bullion_merchants_price[".listFields"][] = "price";
$tdatamst_gold_of_bullion_merchants_price[".listFields"][] = "update_by";
$tdatamst_gold_of_bullion_merchants_price[".listFields"][] = "update_at";
$tdatamst_gold_of_bullion_merchants_price[".listFields"][] = "create_by";
$tdatamst_gold_of_bullion_merchants_price[".listFields"][] = "create_at";

$tdatamst_gold_of_bullion_merchants_price[".hideMobileList"] = array();


$tdatamst_gold_of_bullion_merchants_price[".viewFields"] = array();

$tdatamst_gold_of_bullion_merchants_price[".addFields"] = array();

$tdatamst_gold_of_bullion_merchants_price[".masterListFields"] = array();
$tdatamst_gold_of_bullion_merchants_price[".masterListFields"][] = "id";
$tdatamst_gold_of_bullion_merchants_price[".masterListFields"][] = "name_id";
$tdatamst_gold_of_bullion_merchants_price[".masterListFields"][] = "date";
$tdatamst_gold_of_bullion_merchants_price[".masterListFields"][] = "price";
$tdatamst_gold_of_bullion_merchants_price[".masterListFields"][] = "update_by";
$tdatamst_gold_of_bullion_merchants_price[".masterListFields"][] = "update_at";
$tdatamst_gold_of_bullion_merchants_price[".masterListFields"][] = "create_by";
$tdatamst_gold_of_bullion_merchants_price[".masterListFields"][] = "create_at";

$tdatamst_gold_of_bullion_merchants_price[".inlineAddFields"] = array();

$tdatamst_gold_of_bullion_merchants_price[".editFields"] = array();

$tdatamst_gold_of_bullion_merchants_price[".inlineEditFields"] = array();

$tdatamst_gold_of_bullion_merchants_price[".updateSelectedFields"] = array();


$tdatamst_gold_of_bullion_merchants_price[".exportFields"] = array();
$tdatamst_gold_of_bullion_merchants_price[".exportFields"][] = "id";
$tdatamst_gold_of_bullion_merchants_price[".exportFields"][] = "name_id";
$tdatamst_gold_of_bullion_merchants_price[".exportFields"][] = "date";
$tdatamst_gold_of_bullion_merchants_price[".exportFields"][] = "price";
$tdatamst_gold_of_bullion_merchants_price[".exportFields"][] = "update_by";
$tdatamst_gold_of_bullion_merchants_price[".exportFields"][] = "update_at";
$tdatamst_gold_of_bullion_merchants_price[".exportFields"][] = "create_by";
$tdatamst_gold_of_bullion_merchants_price[".exportFields"][] = "create_at";

$tdatamst_gold_of_bullion_merchants_price[".importFields"] = array();

$tdatamst_gold_of_bullion_merchants_price[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants_price";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants_price","id");
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




	$tdatamst_gold_of_bullion_merchants_price["id"] = $fdata;
//	name_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name_id";
	$fdata["GoodName"] = "name_id";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants_price";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants_price","name_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`name_id`";

	
	
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




	$tdatamst_gold_of_bullion_merchants_price["name_id"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants_price";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants_price","date");
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




	$tdatamst_gold_of_bullion_merchants_price["date"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants_price";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants_price","price");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`price`";

	
	
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




	$tdatamst_gold_of_bullion_merchants_price["price"] = $fdata;
//	update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_by";
	$fdata["GoodName"] = "update_by";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants_price";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants_price","update_by");
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




	$tdatamst_gold_of_bullion_merchants_price["update_by"] = $fdata;
//	update_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_at";
	$fdata["GoodName"] = "update_at";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants_price";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants_price","update_at");
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




	$tdatamst_gold_of_bullion_merchants_price["update_at"] = $fdata;
//	create_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "create_by";
	$fdata["GoodName"] = "create_by";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants_price";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants_price","create_by");
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




	$tdatamst_gold_of_bullion_merchants_price["create_by"] = $fdata;
//	create_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "create_at";
	$fdata["GoodName"] = "create_at";
	$fdata["ownerTable"] = "mst_gold_of_bullion_merchants_price";
	$fdata["Label"] = GetFieldLabel("mst_gold_of_bullion_merchants_price","create_at");
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




	$tdatamst_gold_of_bullion_merchants_price["create_at"] = $fdata;


$tables_data["mst_gold_of_bullion_merchants_price"]=&$tdatamst_gold_of_bullion_merchants_price;
$field_labels["mst_gold_of_bullion_merchants_price"] = &$fieldLabelsmst_gold_of_bullion_merchants_price;
$fieldToolTips["mst_gold_of_bullion_merchants_price"] = &$fieldToolTipsmst_gold_of_bullion_merchants_price;
$placeHolders["mst_gold_of_bullion_merchants_price"] = &$placeHoldersmst_gold_of_bullion_merchants_price;
$page_titles["mst_gold_of_bullion_merchants_price"] = &$pageTitlesmst_gold_of_bullion_merchants_price;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["mst_gold_of_bullion_merchants_price"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["mst_gold_of_bullion_merchants_price"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_mst_gold_of_bullion_merchants_price()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  `name_id`,  `date`,  `price`,  `update_by`,  `update_at`,  `create_by`,  `create_at`";
$proto0["m_strFrom"] = "FROM `mst_gold_of_bullion_merchants_price`";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `date` DESC, `name_id`";
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
	"m_strTable" => "mst_gold_of_bullion_merchants_price",
	"m_srcTableName" => "mst_gold_of_bullion_merchants_price"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "mst_gold_of_bullion_merchants_price";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name_id",
	"m_strTable" => "mst_gold_of_bullion_merchants_price",
	"m_srcTableName" => "mst_gold_of_bullion_merchants_price"
));

$proto8["m_sql"] = "`name_id`";
$proto8["m_srcTableName"] = "mst_gold_of_bullion_merchants_price";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "mst_gold_of_bullion_merchants_price",
	"m_srcTableName" => "mst_gold_of_bullion_merchants_price"
));

$proto10["m_sql"] = "`date`";
$proto10["m_srcTableName"] = "mst_gold_of_bullion_merchants_price";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "mst_gold_of_bullion_merchants_price",
	"m_srcTableName" => "mst_gold_of_bullion_merchants_price"
));

$proto12["m_sql"] = "`price`";
$proto12["m_srcTableName"] = "mst_gold_of_bullion_merchants_price";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_by",
	"m_strTable" => "mst_gold_of_bullion_merchants_price",
	"m_srcTableName" => "mst_gold_of_bullion_merchants_price"
));

$proto14["m_sql"] = "`update_by`";
$proto14["m_srcTableName"] = "mst_gold_of_bullion_merchants_price";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_at",
	"m_strTable" => "mst_gold_of_bullion_merchants_price",
	"m_srcTableName" => "mst_gold_of_bullion_merchants_price"
));

$proto16["m_sql"] = "`update_at`";
$proto16["m_srcTableName"] = "mst_gold_of_bullion_merchants_price";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "create_by",
	"m_strTable" => "mst_gold_of_bullion_merchants_price",
	"m_srcTableName" => "mst_gold_of_bullion_merchants_price"
));

$proto18["m_sql"] = "`create_by`";
$proto18["m_srcTableName"] = "mst_gold_of_bullion_merchants_price";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "create_at",
	"m_strTable" => "mst_gold_of_bullion_merchants_price",
	"m_srcTableName" => "mst_gold_of_bullion_merchants_price"
));

$proto20["m_sql"] = "`create_at`";
$proto20["m_srcTableName"] = "mst_gold_of_bullion_merchants_price";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "mst_gold_of_bullion_merchants_price";
$proto23["m_srcTableName"] = "mst_gold_of_bullion_merchants_price";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id";
$proto23["m_columns"][] = "name_id";
$proto23["m_columns"][] = "date";
$proto23["m_columns"][] = "price";
$proto23["m_columns"][] = "update_by";
$proto23["m_columns"][] = "update_at";
$proto23["m_columns"][] = "create_by";
$proto23["m_columns"][] = "create_at";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "`mst_gold_of_bullion_merchants_price`";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "mst_gold_of_bullion_merchants_price";
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

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto26=array();
						$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "mst_gold_of_bullion_merchants_price",
	"m_srcTableName" => "mst_gold_of_bullion_merchants_price"
));

$proto26["m_column"]=$obj;
$proto26["m_bAsc"] = 0;
$proto26["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto26);

$proto0["m_orderby"][]=$obj;					
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "name_id",
	"m_strTable" => "mst_gold_of_bullion_merchants_price",
	"m_srcTableName" => "mst_gold_of_bullion_merchants_price"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 1;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="mst_gold_of_bullion_merchants_price";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mst_gold_of_bullion_merchants_price = createSqlQuery_mst_gold_of_bullion_merchants_price();


	
		;

								

$tdatamst_gold_of_bullion_merchants_price[".sqlquery"] = $queryData_mst_gold_of_bullion_merchants_price;

$tableEvents["mst_gold_of_bullion_merchants_price"] = new eventsBase;
$tdatamst_gold_of_bullion_merchants_price[".hasEvents"] = false;

?>