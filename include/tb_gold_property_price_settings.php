<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatb_gold_property_price = array();
	$tdatatb_gold_property_price[".truncateText"] = true;
	$tdatatb_gold_property_price[".NumberOfChars"] = 80;
	$tdatatb_gold_property_price[".ShortName"] = "tb_gold_property_price";
	$tdatatb_gold_property_price[".OwnerID"] = "";
	$tdatatb_gold_property_price[".OriginalTable"] = "tb_gold_property_price";

//	field labels
$fieldLabelstb_gold_property_price = array();
$fieldToolTipstb_gold_property_price = array();
$pageTitlestb_gold_property_price = array();
$placeHolderstb_gold_property_price = array();

if(mlang_getcurrentlang()=="Japanese")
{
	$fieldLabelstb_gold_property_price["Japanese"] = array();
	$fieldToolTipstb_gold_property_price["Japanese"] = array();
	$placeHolderstb_gold_property_price["Japanese"] = array();
	$pageTitlestb_gold_property_price["Japanese"] = array();
	$fieldLabelstb_gold_property_price["Japanese"]["id"] = "Id";
	$fieldToolTipstb_gold_property_price["Japanese"]["id"] = "";
	$placeHolderstb_gold_property_price["Japanese"]["id"] = "";
	$fieldLabelstb_gold_property_price["Japanese"]["category"] = "Category";
	$fieldToolTipstb_gold_property_price["Japanese"]["category"] = "";
	$placeHolderstb_gold_property_price["Japanese"]["category"] = "";
	$fieldLabelstb_gold_property_price["Japanese"]["reference_id"] = "Reference Id";
	$fieldToolTipstb_gold_property_price["Japanese"]["reference_id"] = "";
	$placeHolderstb_gold_property_price["Japanese"]["reference_id"] = "";
	$fieldLabelstb_gold_property_price["Japanese"]["item"] = "Item";
	$fieldToolTipstb_gold_property_price["Japanese"]["item"] = "";
	$placeHolderstb_gold_property_price["Japanese"]["item"] = "";
	$fieldLabelstb_gold_property_price["Japanese"]["price"] = "Price";
	$fieldToolTipstb_gold_property_price["Japanese"]["price"] = "";
	$placeHolderstb_gold_property_price["Japanese"]["price"] = "";
	$fieldLabelstb_gold_property_price["Japanese"]["rate"] = "Rate";
	$fieldToolTipstb_gold_property_price["Japanese"]["rate"] = "";
	$placeHolderstb_gold_property_price["Japanese"]["rate"] = "";
	$fieldLabelstb_gold_property_price["Japanese"]["sort"] = "Sort";
	$fieldToolTipstb_gold_property_price["Japanese"]["sort"] = "";
	$placeHolderstb_gold_property_price["Japanese"]["sort"] = "";
	if (count($fieldToolTipstb_gold_property_price["Japanese"]))
		$tdatatb_gold_property_price[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstb_gold_property_price[""] = array();
	$fieldToolTipstb_gold_property_price[""] = array();
	$placeHolderstb_gold_property_price[""] = array();
	$pageTitlestb_gold_property_price[""] = array();
	$fieldLabelstb_gold_property_price[""]["id"] = "Id";
	$fieldToolTipstb_gold_property_price[""]["id"] = "";
	$placeHolderstb_gold_property_price[""]["id"] = "";
	$fieldLabelstb_gold_property_price[""]["category"] = "Category";
	$fieldToolTipstb_gold_property_price[""]["category"] = "";
	$placeHolderstb_gold_property_price[""]["category"] = "";
	$fieldLabelstb_gold_property_price[""]["reference_id"] = "Reference Id";
	$fieldToolTipstb_gold_property_price[""]["reference_id"] = "";
	$placeHolderstb_gold_property_price[""]["reference_id"] = "";
	$fieldLabelstb_gold_property_price[""]["item"] = "Item";
	$fieldToolTipstb_gold_property_price[""]["item"] = "";
	$placeHolderstb_gold_property_price[""]["item"] = "";
	$fieldLabelstb_gold_property_price[""]["price"] = "Price";
	$fieldToolTipstb_gold_property_price[""]["price"] = "";
	$placeHolderstb_gold_property_price[""]["price"] = "";
	$fieldLabelstb_gold_property_price[""]["rate"] = "Rate";
	$fieldToolTipstb_gold_property_price[""]["rate"] = "";
	$placeHolderstb_gold_property_price[""]["rate"] = "";
	$fieldLabelstb_gold_property_price[""]["sort"] = "Sort";
	$fieldToolTipstb_gold_property_price[""]["sort"] = "";
	$placeHolderstb_gold_property_price[""]["sort"] = "";
	if (count($fieldToolTipstb_gold_property_price[""]))
		$tdatatb_gold_property_price[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstb_gold_property_price["English"] = array();
	$fieldToolTipstb_gold_property_price["English"] = array();
	$placeHolderstb_gold_property_price["English"] = array();
	$pageTitlestb_gold_property_price["English"] = array();
	$fieldLabelstb_gold_property_price["English"]["id"] = "Id";
	$fieldToolTipstb_gold_property_price["English"]["id"] = "";
	$placeHolderstb_gold_property_price["English"]["id"] = "";
	$fieldLabelstb_gold_property_price["English"]["category"] = "Category";
	$fieldToolTipstb_gold_property_price["English"]["category"] = "";
	$placeHolderstb_gold_property_price["English"]["category"] = "";
	$fieldLabelstb_gold_property_price["English"]["reference_id"] = "Reference Id";
	$fieldToolTipstb_gold_property_price["English"]["reference_id"] = "";
	$placeHolderstb_gold_property_price["English"]["reference_id"] = "";
	$fieldLabelstb_gold_property_price["English"]["item"] = "Item";
	$fieldToolTipstb_gold_property_price["English"]["item"] = "";
	$placeHolderstb_gold_property_price["English"]["item"] = "";
	$fieldLabelstb_gold_property_price["English"]["price"] = "Price";
	$fieldToolTipstb_gold_property_price["English"]["price"] = "";
	$placeHolderstb_gold_property_price["English"]["price"] = "";
	$fieldLabelstb_gold_property_price["English"]["rate"] = "Rate";
	$fieldToolTipstb_gold_property_price["English"]["rate"] = "";
	$placeHolderstb_gold_property_price["English"]["rate"] = "";
	$fieldLabelstb_gold_property_price["English"]["sort"] = "Sort";
	$fieldToolTipstb_gold_property_price["English"]["sort"] = "";
	$placeHolderstb_gold_property_price["English"]["sort"] = "";
	if (count($fieldToolTipstb_gold_property_price["English"]))
		$tdatatb_gold_property_price[".isUseToolTips"] = true;
}


	$tdatatb_gold_property_price[".NCSearch"] = true;



$tdatatb_gold_property_price[".shortTableName"] = "tb_gold_property_price";
$tdatatb_gold_property_price[".nSecOptions"] = 0;
$tdatatb_gold_property_price[".recsPerRowPrint"] = 1;
$tdatatb_gold_property_price[".mainTableOwnerID"] = "";
$tdatatb_gold_property_price[".moveNext"] = 1;
$tdatatb_gold_property_price[".entityType"] = 0;

$tdatatb_gold_property_price[".strOriginalTableName"] = "tb_gold_property_price";

	



$tdatatb_gold_property_price[".showAddInPopup"] = false;

$tdatatb_gold_property_price[".showEditInPopup"] = false;

$tdatatb_gold_property_price[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_gold_property_price[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_gold_property_price[".fieldsForRegister"] = array();

$tdatatb_gold_property_price[".listAjax"] = false;

	$tdatatb_gold_property_price[".audit"] = true;

	$tdatatb_gold_property_price[".locking"] = false;



$tdatatb_gold_property_price[".list"] = true;



$tdatatb_gold_property_price[".reorderRecordsByHeader"] = true;





$tdatatb_gold_property_price[".exportTo"] = true;



$tdatatb_gold_property_price[".showSimpleSearchOptions"] = false;

// Allow Show/Hide Fields in GRID
$tdatatb_gold_property_price[".allowShowHideFields"] = false;
//

// Allow Fields Reordering in GRID
$tdatatb_gold_property_price[".allowFieldsReordering"] = false;
//

// search Saving settings
$tdatatb_gold_property_price[".searchSaving"] = false;
//

$tdatatb_gold_property_price[".showSearchPanel"] = true;
		$tdatatb_gold_property_price[".flexibleSearch"] = true;

$tdatatb_gold_property_price[".isUseAjaxSuggest"] = true;

$tdatatb_gold_property_price[".rowHighlite"] = true;



																																																																																																																																																																																																																														

$tdatatb_gold_property_price[".ajaxCodeSnippetAdded"] = false;

$tdatatb_gold_property_price[".buttonsAdded"] = false;

$tdatatb_gold_property_price[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_gold_property_price[".isUseTimeForSearch"] = false;





$tdatatb_gold_property_price[".allSearchFields"] = array();
$tdatatb_gold_property_price[".filterFields"] = array();
$tdatatb_gold_property_price[".requiredSearchFields"] = array();

$tdatatb_gold_property_price[".allSearchFields"][] = "id";
	$tdatatb_gold_property_price[".allSearchFields"][] = "category";
	$tdatatb_gold_property_price[".allSearchFields"][] = "reference_id";
	$tdatatb_gold_property_price[".allSearchFields"][] = "item";
	$tdatatb_gold_property_price[".allSearchFields"][] = "price";
	$tdatatb_gold_property_price[".allSearchFields"][] = "rate";
	$tdatatb_gold_property_price[".allSearchFields"][] = "sort";
	

$tdatatb_gold_property_price[".googleLikeFields"] = array();
$tdatatb_gold_property_price[".googleLikeFields"][] = "id";
$tdatatb_gold_property_price[".googleLikeFields"][] = "category";
$tdatatb_gold_property_price[".googleLikeFields"][] = "reference_id";
$tdatatb_gold_property_price[".googleLikeFields"][] = "item";
$tdatatb_gold_property_price[".googleLikeFields"][] = "price";
$tdatatb_gold_property_price[".googleLikeFields"][] = "rate";
$tdatatb_gold_property_price[".googleLikeFields"][] = "sort";


$tdatatb_gold_property_price[".advSearchFields"] = array();
$tdatatb_gold_property_price[".advSearchFields"][] = "id";
$tdatatb_gold_property_price[".advSearchFields"][] = "category";
$tdatatb_gold_property_price[".advSearchFields"][] = "reference_id";
$tdatatb_gold_property_price[".advSearchFields"][] = "item";
$tdatatb_gold_property_price[".advSearchFields"][] = "price";
$tdatatb_gold_property_price[".advSearchFields"][] = "rate";
$tdatatb_gold_property_price[".advSearchFields"][] = "sort";

$tdatatb_gold_property_price[".tableType"] = "list";

$tdatatb_gold_property_price[".printerPageOrientation"] = 0;
$tdatatb_gold_property_price[".nPrinterPageScale"] = 100;

$tdatatb_gold_property_price[".nPrinterSplitRecords"] = 40;

$tdatatb_gold_property_price[".nPrinterPDFSplitRecords"] = 40;



$tdatatb_gold_property_price[".geocodingEnabled"] = false;





$tdatatb_gold_property_price[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatb_gold_property_price[".pageSize"] = 100;

$tdatatb_gold_property_price[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_gold_property_price[".strOrderBy"] = $tstrOrderBy;

$tdatatb_gold_property_price[".orderindexes"] = array();

$tdatatb_gold_property_price[".sqlHead"] = "SELECT `id`,  	`category`,  	`reference_id`,  	`item`,  	`price`,  	`rate`,  	`sort`";
$tdatatb_gold_property_price[".sqlFrom"] = "FROM `tb_gold_property_price`";
$tdatatb_gold_property_price[".sqlWhereExpr"] = "";
$tdatatb_gold_property_price[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_gold_property_price[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_gold_property_price[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_gold_property_price[".highlightSearchResults"] = true;

$tableKeystb_gold_property_price = array();
$tableKeystb_gold_property_price[] = "id";
$tdatatb_gold_property_price[".Keys"] = $tableKeystb_gold_property_price;

$tdatatb_gold_property_price[".listFields"] = array();
$tdatatb_gold_property_price[".listFields"][] = "id";
$tdatatb_gold_property_price[".listFields"][] = "category";
$tdatatb_gold_property_price[".listFields"][] = "reference_id";
$tdatatb_gold_property_price[".listFields"][] = "item";
$tdatatb_gold_property_price[".listFields"][] = "price";
$tdatatb_gold_property_price[".listFields"][] = "rate";
$tdatatb_gold_property_price[".listFields"][] = "sort";

$tdatatb_gold_property_price[".hideMobileList"] = array();


$tdatatb_gold_property_price[".viewFields"] = array();

$tdatatb_gold_property_price[".addFields"] = array();

$tdatatb_gold_property_price[".masterListFields"] = array();
$tdatatb_gold_property_price[".masterListFields"][] = "id";
$tdatatb_gold_property_price[".masterListFields"][] = "category";
$tdatatb_gold_property_price[".masterListFields"][] = "reference_id";
$tdatatb_gold_property_price[".masterListFields"][] = "item";
$tdatatb_gold_property_price[".masterListFields"][] = "price";
$tdatatb_gold_property_price[".masterListFields"][] = "rate";
$tdatatb_gold_property_price[".masterListFields"][] = "sort";

$tdatatb_gold_property_price[".inlineAddFields"] = array();

$tdatatb_gold_property_price[".editFields"] = array();

$tdatatb_gold_property_price[".inlineEditFields"] = array();

$tdatatb_gold_property_price[".updateSelectedFields"] = array();


$tdatatb_gold_property_price[".exportFields"] = array();
$tdatatb_gold_property_price[".exportFields"][] = "id";
$tdatatb_gold_property_price[".exportFields"][] = "category";
$tdatatb_gold_property_price[".exportFields"][] = "reference_id";
$tdatatb_gold_property_price[".exportFields"][] = "item";
$tdatatb_gold_property_price[".exportFields"][] = "price";
$tdatatb_gold_property_price[".exportFields"][] = "rate";
$tdatatb_gold_property_price[".exportFields"][] = "sort";

$tdatatb_gold_property_price[".importFields"] = array();

$tdatatb_gold_property_price[".printFields"] = array();

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tb_gold_property_price";
	$fdata["Label"] = GetFieldLabel("tb_gold_property_price","id");
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




	$tdatatb_gold_property_price["id"] = $fdata;
//	category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "category";
	$fdata["GoodName"] = "category";
	$fdata["ownerTable"] = "tb_gold_property_price";
	$fdata["Label"] = GetFieldLabel("tb_gold_property_price","category");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "category";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`category`";

	
	
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




	$tdatatb_gold_property_price["category"] = $fdata;
//	reference_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "reference_id";
	$fdata["GoodName"] = "reference_id";
	$fdata["ownerTable"] = "tb_gold_property_price";
	$fdata["Label"] = GetFieldLabel("tb_gold_property_price","reference_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatatb_gold_property_price["reference_id"] = $fdata;
//	item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "item";
	$fdata["GoodName"] = "item";
	$fdata["ownerTable"] = "tb_gold_property_price";
	$fdata["Label"] = GetFieldLabel("tb_gold_property_price","item");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "item";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`item`";

	
	
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




	$tdatatb_gold_property_price["item"] = $fdata;
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "tb_gold_property_price";
	$fdata["Label"] = GetFieldLabel("tb_gold_property_price","price");
	$fdata["FieldType"] = 200;

	
	
	
			
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
			$edata["EditParams"].= " maxlength=20";

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




	$tdatatb_gold_property_price["price"] = $fdata;
//	rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "rate";
	$fdata["GoodName"] = "rate";
	$fdata["ownerTable"] = "tb_gold_property_price";
	$fdata["Label"] = GetFieldLabel("tb_gold_property_price","rate");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`rate`";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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




	$tdatatb_gold_property_price["rate"] = $fdata;
//	sort
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sort";
	$fdata["GoodName"] = "sort";
	$fdata["ownerTable"] = "tb_gold_property_price";
	$fdata["Label"] = GetFieldLabel("tb_gold_property_price","sort");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	

	
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




	$tdatatb_gold_property_price["sort"] = $fdata;


$tables_data["tb_gold_property_price"]=&$tdatatb_gold_property_price;
$field_labels["tb_gold_property_price"] = &$fieldLabelstb_gold_property_price;
$fieldToolTips["tb_gold_property_price"] = &$fieldToolTipstb_gold_property_price;
$placeHolders["tb_gold_property_price"] = &$placeHolderstb_gold_property_price;
$page_titles["tb_gold_property_price"] = &$pageTitlestb_gold_property_price;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_gold_property_price"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_gold_property_price"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tb_gold_property_price()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`id`,  	`category`,  	`reference_id`,  	`item`,  	`price`,  	`rate`,  	`sort`";
$proto0["m_strFrom"] = "FROM `tb_gold_property_price`";
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
	"m_strTable" => "tb_gold_property_price",
	"m_srcTableName" => "tb_gold_property_price"
));

$proto6["m_sql"] = "`id`";
$proto6["m_srcTableName"] = "tb_gold_property_price";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "category",
	"m_strTable" => "tb_gold_property_price",
	"m_srcTableName" => "tb_gold_property_price"
));

$proto8["m_sql"] = "`category`";
$proto8["m_srcTableName"] = "tb_gold_property_price";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "reference_id",
	"m_strTable" => "tb_gold_property_price",
	"m_srcTableName" => "tb_gold_property_price"
));

$proto10["m_sql"] = "`reference_id`";
$proto10["m_srcTableName"] = "tb_gold_property_price";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "item",
	"m_strTable" => "tb_gold_property_price",
	"m_srcTableName" => "tb_gold_property_price"
));

$proto12["m_sql"] = "`item`";
$proto12["m_srcTableName"] = "tb_gold_property_price";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "tb_gold_property_price",
	"m_srcTableName" => "tb_gold_property_price"
));

$proto14["m_sql"] = "`price`";
$proto14["m_srcTableName"] = "tb_gold_property_price";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "rate",
	"m_strTable" => "tb_gold_property_price",
	"m_srcTableName" => "tb_gold_property_price"
));

$proto16["m_sql"] = "`rate`";
$proto16["m_srcTableName"] = "tb_gold_property_price";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sort",
	"m_strTable" => "tb_gold_property_price",
	"m_srcTableName" => "tb_gold_property_price"
));

$proto18["m_sql"] = "`sort`";
$proto18["m_srcTableName"] = "tb_gold_property_price";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "tb_gold_property_price";
$proto21["m_srcTableName"] = "tb_gold_property_price";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "category";
$proto21["m_columns"][] = "reference_id";
$proto21["m_columns"][] = "item";
$proto21["m_columns"][] = "price";
$proto21["m_columns"][] = "rate";
$proto21["m_columns"][] = "sort";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "`tb_gold_property_price`";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "tb_gold_property_price";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tb_gold_property_price";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_gold_property_price = createSqlQuery_tb_gold_property_price();


	
		;

							

$tdatatb_gold_property_price[".sqlquery"] = $queryData_tb_gold_property_price;

$tableEvents["tb_gold_property_price"] = new eventsBase;
$tdatatb_gold_property_price[".hasEvents"] = false;

?>